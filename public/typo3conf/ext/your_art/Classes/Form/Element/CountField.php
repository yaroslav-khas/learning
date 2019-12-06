<?php
namespace Khas\YourArt\Form\Element;

use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\MathUtility;
use TYPO3\CMS\Core\Utility\StringUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use function GuzzleHttp\Promise\all;

class CountField extends AbstractFormElement
{
    /**
     * Default field wizards enabled for this element.
     *
     * @var array
     */
    protected $defaultFieldWizard = [
        'localizationStateSelector' => [
            'renderType' => 'localizationStateSelector',
        ],
        'otherLanguageContent' => [
            'renderType' => 'otherLanguageContent',
            'after' => [
                'localizationStateSelector'
            ],
        ],
        'defaultLanguageDifferences' => [
            'renderType' => 'defaultLanguageDifferences',
            'after' => [
                'otherLanguageContent',
            ],
        ],
    ];

    /**
     * @return array
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function render()
    {
        $languageService = $this->getLanguageService();

        $table = $this->data['tableName'];
        $fieldName = $this->data['fieldName'];
        $row = $this->data['databaseRow'];
        $parameterArray = $this->data['parameterArray'];
        //data/\

        $resultArray = $this->initializeResultArray();
        $itemValue = $parameterArray['itemFormElValue'];
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $paintingsRepository = $objectManager->get(\Khas\YourArt\Domain\Repository\PaintingsRepository::class);
        $paintings = $paintingsRepository->findPictures(current($row['author']));
        $all_sum = 0;
        foreach ($paintings as $item) {
            $all_sum = $all_sum + $item->getPrice();
        }
        if ($all_sum!==$itemValue){
            $itemValue=$all_sum;
        }
        debug($parameterArray['itemFormElValue']);
        $parameterArray['itemFormElValue']=$itemValue;
        $config = $parameterArray['fieldConf']['config'];
        $config['default']=$itemValue;
        debug($config);
        $evalList = GeneralUtility::trimExplode(',', $config['eval'], true);
        $size = MathUtility::forceIntegerInRange($config['size'] ?? $this->defaultInputWidth, $this->minimumInputWidth, $this->maxInputWidth);
        $width = (int)$this->formMaxWidth($size);
        $fieldInformationResult = $this->renderFieldInformation();
        $fieldInformationHtml = $fieldInformationResult['html'];
        $resultArray = $this->mergeChildReturnIntoExistingResult($resultArray, $fieldInformationResult, false);


        if ($config['readOnly']) {
            // Early return for read only fields
            if (in_array('password', $evalList, true)) {
                $itemValue = $itemValue ? '*********' : '';
            }

            $html = [];
            $html[] = '<div class="formengine-field-item t3js-formengine-field-item">';
            $html[] =   $fieldInformationHtml;
            $html[] =   '<div class="form-wizards-wrap">';
            $html[] =       '<div class="form-wizards-element">';
            $html[] =           '<div class="form-control-wrap" style="max-width: ' . $width . 'px">';
            $html[] =               '<input class="form-control" value="' . $itemValue . '" type="text" disabled>';
            $html[] =           '</div>';
            $html[] =       '</div>';
            $html[] =   '</div>';
            $html[] = '</div>';
            $resultArray['html'] = implode(LF, $html);

        };

        // @todo: The whole eval handling is a mess and needs refactoring
        foreach ($evalList as $func) {
            // @todo: This is ugly: The code should find out on it's own whether a eval definition is a
            // @todo: keyword like "date", or a class reference. The global registration could be dropped then
            // Pair hook to the one in \TYPO3\CMS\Core\DataHandling\DataHandler::checkValue_input_Eval()
            if (isset($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][$func])) {
                if (class_exists($func)) {
                    $evalObj = GeneralUtility::makeInstance($func);
                    if (method_exists($evalObj, 'deevaluateFieldValue')) {
                        $_params = [
                            'value' => $itemValue
                        ];
                        $itemValue = $evalObj->deevaluateFieldValue($_params);
                    }
                    if (method_exists($evalObj, 'returnFieldJS')) {
                        $resultArray['additionalJavaScriptPost'][] = 'TBE_EDITOR.customEvalFunctions[' . GeneralUtility::quoteJSvalue($func) . ']'
                            . ' = function(value) {' . $evalObj->returnFieldJS() . '};';
                    }
                }
            }
        }
        return $resultArray;

    }
}
<?php

namespace Khas\YourArt\Hooks;

use TYPO3\CMS\Core\Imaging\Icon;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;

class EntryRecordListHook implements \TYPO3\CMS\Recordlist\RecordList\RecordListHookInterface
{
    /**
     * @return array
     */
    private function loadAllTypoScriptSettings()
    {
        $configurationManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager');
        $typoscript = $configurationManager->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT);
        return $typoscript['module.']['tx_yourart.']['settings.'];
    }

    /**
     * @param string $table
     * @param array $row
     * @param array $cells
     * @param object $parentObject
     * @return array
     */
    public function makeClip($table, $row, $cells, &$parentObject)
    {
        if ($table === 'tx_yourart_domain_model_orders') {
           $cells=[];
        }
        return $cells;
    }

    /**
     * @param string $table
     * @param array $row
     * @param array $cells
     * @param object $parentObject
     * @return array
     * @see \TYPO3\CMS\Core\Page\PageRenderer
     */
    public function makeControl($table, $row, $cells, &$parentObject)
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        (new \TYPO3\CMS\Core\Page\PageRenderer)->addJsFile('file:`EXT:your_extension/Resources/Public/JavaScript/Library1.js');
        //debug('test');exit();
        if ($table === 'tx_yourart_domain_model_orders') {
            $pageRenderer->addJsFile('https://code.jquery.com/jquery-3.3.1.min.js');
            $pageRenderer->addJsFile('../typo3conf/ext/your_art/Resources/Public/Js/be.js');

            debug($pageRenderer);
            // remove edit, hide, delete button (no idea why there added twice)
            $cells['primary'] = [];

            //$settings = $this->loadAllTypoScriptSettings();

            $iconFactory = GeneralUtility::makeInstance(IconFactory::class);
            $languageService = $GLOBALS['LANG'];

            if ($row['status']) {
                $cells=[];
                $params = '&updateStatus[' . $table . '][' . $row['uid'] . '][status]=0';
                $cells['primary']['status'] = '<a class="btn btn-success t3js-record-confirm disabled" data-confirmed="yes" href="#"'
                    . ' data-toggle="tooltip"'
                    . ' data-toggle-title="' . $languageService->sL('Confirmed') . '"'
                    . ' title="' . $languageService->sL('Confirmed') . '">'
                    . $iconFactory->getIcon('actions-check', Icon::SIZE_SMALL)->render() . '</a>';
            } else {
                $params = '&updateStatus[' . $table . '][' . $row['uid'] . '][status]=1';
                $cells['primary']['status'] = '<a class="btn btn-danger t3js-record-confirm orderRecord" data-confirmed="no" href="#"'
                    . ' data-params="' . htmlspecialchars($params) . '"'
                    . ' data-toggle="tooltip"'
                    . ' data-toggle-title="' . $languageService->sL('Confirm') . '"'
                    . ' title="' . $languageService->sL('Confirm') . '">'
                    . $iconFactory->getIcon('actions-check', Icon::SIZE_SMALL)->render() . '</a>';
            }
        }
        return $cells;
    }

    /**
     * @param string $table
     * @param array $currentIdList
     * @param array $headerColumns
     * @param object $parentObject
     * @return array
     */
    public function renderListHeader($table, $currentIdList, $headerColumns, &$parentObject)
    {
        return $headerColumns;
    }

    /**
     * @param string $table
     * @param array $currentIdList
     * @param array $cells
     * @param object $parentObject
     * @return array
     */
    public function renderListHeaderActions($table, $currentIdList, $cells, &$parentObject)
    {

        return $cells;
    }
}
<?php
defined('TYPO3_MODE') or die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:template/Resources/Private/Language/locallang_db.xlf:tx_template_domain_model_template',
        'label' => 'title',
        'iconfile' => 'EXT:template/Resources/Public/Icons/theme.svg'
    ),
    'interface' => array(),
    'types' => array(
        '0' => ['showitem' => 'title,description,image,own_link'],
    ),
    'palettes' => array(),
    'columns' => array(
        'title' => array(
            'exclude' => false,
            'l10n_mode' => 'prefixLangTitle',
            'config' => array(
                'size' => 60,
                'type' => 'input',
                'eval' => 'required',
            ),
            'label' => 'Name'
        ),
        'description' => array(
            'config' => array(
                'size' => 60,
                'type' => 'input'),
            'l10n_mode' => 'prefixLangTitle',
            'label' => 'Description'
        ),
        'image' => array(
            'label' => 'Image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'Add media file',

                        'collapseAll' => 1,
                        'expandSingle' => 1,
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                            ],
                        ],
                    ],
                ]
            ),
        ),
        'own_link' => array(
            'label' => 'Link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
            ],
        ),
    ),
);


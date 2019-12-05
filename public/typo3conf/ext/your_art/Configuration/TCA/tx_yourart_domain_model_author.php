<?php
defined('TYPO3_MODE') or die ('Access denied.');
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:your_art/Resources/Private/Language/locallang_db.xlf:tx_yourart_domain_model_paintings.author_label',
        'label' => 'title',
        'iconfile' => 'EXT:your_art/Resources/Public/Icons/yourart_domain_model_author.svg'
    ),
    'interface' => array(),
    'types' => array(
        '0' => ['showitem' => 'title,description,image'],
    ),
    'palettes' => array(),
    'columns' => array(
        'title' => array(
            'config' => array(
                'size' => 60,
                'type' => 'input',
                'eval' => 'required,unique,trim',
                ),
            'label' => 'Author name'
        ),
        'description' => array(
            'config' => array(
                'type' => 'text',
                'enableRichtext' => true,
            ),
            'label' => 'Description'
        ),
        'image' => array(
            'label' => 'Image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'Add Image',
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
    )
);

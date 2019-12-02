<?php
defined('TYPO3_MODE') or die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:your_art/Resources/Private/Language/locallang_db.xlf:tx_yourart_domain_model_yourart',
        'label' => 'name',
        'iconfile' => 'EXT:your_art/Resources/Public/Icons/yourart_domain_model_yourart.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
    ),
    'interface' => array(
            'showRecordFieldList' => 'crdate'
    ),
    'types' => array(
        '0' => ['showitem' => 'name, description, price,slug, author, image, tags, style, '],
    ),
    'palettes' => array(),
    'columns' => array(
        'name' => array(
            'config' => array(
                'size' => 60,
                'type' => 'input',
                'eval' => 'required',
            ),
            'label' => 'Name'
        ),
        'description' => array(
            'config' => array(
                'type' => 'text',
                'enableRichtext' => true,
            ),
            'label' => 'Description'
        ),
        'price' => array(
            'config' => array(
                'type' => 'input',
                'size' => 10,
                'eval' => 'int',
                'default' => 0,
            ),
            'label' => 'Price',
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
        'slug' => [
            'exclude' => true,
            'label' => 'Slug',
            'displayCond' => 'USER:' . \TYPO3\CMS\Core\Compatibility\PseudoSiteTcaDisplayCondition::class . '->isInPseudoSite:pages:false',
            'config' => [
                'type' => 'slug',
                'size' => 50,
                'generatorOptions' => [
                    'fields' => ['nav-title'=>'paintings','name'],
                    'fieldSeparator' => '/',
                    'prefixParentPageSlug' => true
                ],
                'fallbackCharacter' => '-',
                'eval' => 'uniqueInSite',
                'default' => ''
            ]
        ],
        'tags' => array(
            'label' => 'Tags',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_yourart_domain_model_tag',
                'MM' => 'tx_yourart_domain_model_yourart_tag_mm',
                'foreign_table' => 'tx_yourart_domain_model_tag']
        ),
        'style' => array(
            'label' => 'Styles',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_yourart_domain_model_style',
                'MM' => 'tx_yourart_domain_model_yourart_style_mm',
                'foreign_table' => 'tx_yourart_domain_model_style']
        ),
        'author' => array(
            'label' => 'Select author',
            'config' => [
                'type' => 'select',
                'eval' => 'required',
                'items'=> [
                    ['Default',0]
                ],
                'default'=> 0,
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_yourart_domain_model_author',
            ],
        ),
        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
    )
);


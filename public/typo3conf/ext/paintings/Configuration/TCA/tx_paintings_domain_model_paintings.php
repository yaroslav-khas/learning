<?php
defined('TYPO3_MODE') or die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:paintings/Resources/Private/Language/locallang_db.xlf:tx_paintings_domain_model_paintings',
        'label' => 'name',
        'iconfile' => 'EXT:paintings/Resources/Public/Icons/Extension.svg'
    ),
    'interface' => array(),
    'types' => array(
        '0' => ['showitem' => 'name, description, price, image'],
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
        'author' => array(
            'label' => 'Author',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Static values', '--div--'],
                    ['static -2', -2],
                    ['static -1', -1],
                    ['DB values', '--div--'],
                ],
//                'foreign_table' => 'tx_styleguide_staticdata',
//                'foreign_table_where' => 'AND {#tx_styleguide_staticdata}.{#value_1} LIKE \'%foo%\' ORDER BY uid',
//                'foreign_table_prefix' => 'A prefix: ',
            ],
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


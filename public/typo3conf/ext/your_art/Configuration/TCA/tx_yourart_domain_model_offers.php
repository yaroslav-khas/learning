<?php
defined('TYPO3_MODE') or die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:your_art/Resources/Private/Language/locallang_db.xlf:tx_yourart_domain_model_paintings.offer_label',
        'label' => 'title',
        'iconfile' => 'EXT:your_art/Resources/Public/Icons/yourart_domain_model_offer.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'requestUpdate' => 'picture_id,author',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
    ),
    'interface' => array(
        'showRecordFieldList' => 'crdate'
    ),
    'types' => array(
        '0' => ['showitem' => 'picture_id, title, description, author,pictures,sum_all_pic,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;paletteLanguage,'],
    ),
    'palettes' => array(
        'paletteLanguage' => [
            'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l10n_parent, l10n_diffsource,
            ',
        ],
    ),
    'columns' => array(
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_yourart_domain_model_offers',
                'foreign_table_where' => 'AND tx_yourart_domain_model_offers.pid=###CURRENT_PID### AND tx_yourart_domain_model_offers.sys_language_uid IN (-1,0)',
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => true,
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => ''
            ]
        ],
        'picture_id' => array(
            'config' => array(
                'size' => 10,
                'type' => 'input',
                'eval' => 'required',
            ),
            'label' => 'Picture ID'
        ),
        'title' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Title Pictures'
        ),
        'description' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'config' => array(
                'type' => 'text',
                'readOnly' => true,

            ),
            'label' => 'Picture Description',
        ),
        'author' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'label' => 'Author',
            'onChange' => 'reload',
            'config' => [
                'type' => 'select',
                'eval' => 'required',
                'default'=> 1,
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_yourart_domain_model_author',
            ],
        ),
        'pictures' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'label' => 'Select Pictures',
            'config' => [
                'type' => 'select',
                'eval' => 'required',
                'default'=> 1,
                'renderType' => 'selectSingleBox',
                'itemsProcFunc' => \Khas\YourArt\Hooks\ItemsProcFunc::class .'->findPictures'
            ],
        ),
        'sum_all_pic' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'config' => [
                'type'=>'user',
                'readOnly' => true,
                'renderType' => 'CountField',
                ],
            'label' => 'Count Pictures'
        )
    )
);


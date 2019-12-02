<?php
defined('TYPO3_MODE') or die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:your_art/Resources/Private/Language/locallang_db.xlf:tx_yourart_domain_model_yourart.offer_label',
        'label' => 'title',
        'iconfile' => 'EXT:your_art/Resources/Public/Icons/yourart_domain_model_yourart.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'requestUpdate'=> 'picture_id',
    ),
    'interface' => array(
            'showRecordFieldList' => 'crdate'
    ),
    'types' => array(
        '0' => ['showitem' => 'picture_id, title, description, author,picture_id_def,all_pic_author,sum_all_pic'],
    ),
    'palettes' => array(),
    'columns' => array(
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
                'type' => 'none',
                'readOnly'=> true,
                'userFunc'=> \Khas\YourArt\Hooks\OffersHook::class .'->getTitleWithId'
            ),
            'label' => 'Title Pictures'
        ),
        'description' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'config' => array(
                'type' => 'text',
                'readOnly'=> true,

            ),
            'label' => 'Picture Description',
        ),
        'author' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'label' => 'Select author',
            'config' => [
                'type' => 'select',
                'default'=> 0,
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_yourart_domain_model_author',
            ],
        ),
        'picture_id_def' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'config' => array(
                'size' => 60,
                'type' => 'input',
                'readOnly'=> true,
            ),
            'label' => 'ID'
        ),
        'all_pic_author' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'label' => 'Select author',
            'config' => [
                'type' => 'select',
                'default'=> 0,
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_yourart_domain_model_author',
            ],
        ),
        'sum_all_pic' => array(
            'displayCond' => 'FIELD:picture_id:>:0',
            'config' => array(
                'size' => 60,
                'type' => 'input',
                'readOnly'=> true,
            ),
            'label' => 'Count Pictures'
        )
    )
);


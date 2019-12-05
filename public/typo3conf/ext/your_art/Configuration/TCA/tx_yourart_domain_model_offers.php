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
    ),
    'interface' => array(
        'showRecordFieldList' => 'crdate'
    ),
    'types' => array(
        '0' => ['showitem' => 'picture_id, title, description, author,pictures,sum_all_pic'],
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


<?php
defined('TYPO3_MODE') or die ('Access denied.');
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:your_art/Resources/Private/Language/locallang_db.xlf:tx_yourart_domain_model_yourart.tag_label',
        'label' => 'title',
        'iconfile' => 'EXT:your_art/Resources/Public/Icons/yourart_domain_model_tag.svg'
    ),
    'interface' => array(),
    'types' => array(
        '0' => ['showitem' => 'title'],
    ),
    'palettes' => array(),
    'columns' => array(
        'title' => array(
            'config' => array(
                'size' => 60,
                'type' => 'input',
                'eval' => 'required,unique,trim',
                ),
            'label' => 'Tag title'
        ),
    )
);

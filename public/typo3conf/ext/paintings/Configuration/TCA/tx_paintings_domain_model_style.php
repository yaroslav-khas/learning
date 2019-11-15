<?php
defined('TYPO3_MODE') or die ('Access denied.');
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:paintings/Resources/Private/Language/locallang_db.xlf:tx_paintings_domain_model_paintings.style_label',
        'label' => 'title',
        'iconfile' => 'EXT:paintings/Resources/Public/Icons/paintings_domain_model_style.svg'
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
            'label' => 'Style title'
        ),
    )
);

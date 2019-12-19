<?php
defined('TYPO3_MODE') or die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:your_art/Resources/Private/Language/locallang_db.xlf:tx_yourart_domain_model_paintings.order_label',
        'label' => 'product_id',
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
        'readOnly'=>1
    ),
    'interface' => array(),
    'types' => array(
        '0' => ['showitem' => 'product_id,quantity,price'],
    ),
    'palettes' => array(),
    'columns' => array(
        'product_id' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Product ID'
        ),
        'quantity' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Quantity'
        ),
        'price' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Price'
        ),
    )
);


<?php
defined('TYPO3_MODE') or die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:your_art/Resources/Private/Language/locallang_db.xlf:tx_yourart_domain_model_paintings.order_label',
        'label' => 'product_id',
        'iconfile' => 'EXT:your_art/Resources/Public/Icons/yourart_domain_model_offer.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'readOnly' => 1,
    ),
    'interface' => array(),
    'palettes' => array(),
    'types' => array(
        '0' => ['showitem' => 'order_id,product_id,quantity,price'],
    ),
    'columns' => array(
        'order_id' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Order ID'
        ),
        'product_id' => array(
            'exclude' => true,
            'label' => 'Order_products',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_yourart_domain_model_paintings',
                'appearance' => array(
                    'collapseAll' => true,
                    'expandSingle' => true,
                    'levelLinksPosition' => 'bottom',
                )
            )
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


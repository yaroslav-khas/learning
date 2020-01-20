<?php
defined('TYPO3_MODE') or die ('Access denied.');

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:your_art/Resources/Private/Language/locallang_db.xlf:tx_yourart_domain_model_paintings.order_label',
        'label' => 'uid',
        'iconfile' => 'EXT:your_art/Resources/Public/Icons/yourart_domain_model_orders.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',

    ),
    'interface' => array(
        'showRecordFieldList' => 'crdate'
    ),
    'types' => array(
        '0' => ['showitem' => 'name,surname,user_id,delivery_company,delivery_city,delivery_warehouse,total_sum, order_products'],
    ),
    'palettes' => array(),
    'columns' => array(
        'name' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Customer name'
        ),
        'surname' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Customer surname'
        ),
        'user_id' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'User ID'
        ),
        'delivery_company' => array(
            'config' => array(
                'type' => 'select',
                'items' => [
                    ['NovaPoshta', 1],
                    ['Justin', 2],
                ],
            ),
            'label' => 'Delivery company'
        ),
        'delivery_city' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Delivery city'
        ),
        'delivery_warehouse' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Delivery warehouse'
        ),

        'total_sum' => array(
            'config' => array(
                'type' => 'input',
            ),
            'label' => 'Total Sum'
        ),
        'order_products' => array(
            'exclude' => true,
            'label' => 'Order_products',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_yourart_domain_model_orderproducts',
                'foreign_field' => 'order_id',
                'appearance' => array(
                    'collapseAll' => true,
                    'expandSingle' => true,
                    'levelLinksPosition' => 'bottom',
                )
            )
        ),
        'status' => array(
            'exclude' => true,
            'config' => array(
                'type' => 'select',
                'items' => [
                    ['In process', 0],
                    ['Complete', 1],
                ],
            ),
            'label' => 'Status'
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

<?php
defined('TYPO3_MODE') or die ('Access denied.');

$addColumns = array(
    'check_user_function' => array(
        'exclude' => 0,
        'label' => 'Use donate function',
        'config' => array(
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0
        )
    ),
    'card_number' => array(
        'displayCond' => 'FIELD:check_user_function:REQ:true',
        'config' => array(
            'size' => 60,
            'type' => 'input'),
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'Card Number'
    ),
    'type_card' => array(
        'displayCond' => 'FIELD:check_user_function:REQ:true',
        'exclude' => false,
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => [
                ['Visa', 1],
                ['MasterCard', 2],
                ['PayPal', 3],
            ],
        )

    ),
    'card_holder' => array(
        'displayCond' => 'FIELD:check_user_function:REQ:true',
        'config' => array(
            'size' => 60,
            'type' => 'input'),
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'Card Holder'
    ),
    'extension_fields' => array(
        'exclude' => true,
        'label' => 'Extension fields',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_template_domain_model_template',
            'foreign_field' => 'tx_news_related_news',
            'maxitems' => 2,
            'appearance' => array(
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
            )
        )
    ),

);
$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['requestUpdate'] = 'check_user_function';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_news_domain_model_news',
    $addColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_news_domain_model_news',
    'userFunc',
    'check_user_function, card_holder, type_card,card_number'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    '--div--;LLL:EXT:template/Resources/Private/Language/locallang_tca.xlf:pages.tabs.donate,--palette--;;userFunc', '', 'after:bodytext'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    'extension_fields', '', 'after:title'
);

/*$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['test'] =

$GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'] = [
    'showitem' => 'test,--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,--palette--;;paletteDate,bodytext,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.content_elements,content_elements,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,fal_media,fal_related_files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,related,related_from,related_links,tags,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;paletteLanguage,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;paletteHidden,--palette--;;paletteAccess,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended'
];*/
/*$GLOBALS['TCA']['tx_news_domain_model_news']['interface'] = [
    'showRecordFieldList' => 'test,cruser_id,pid,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,fe_group,title,teaser,bodytext,datetime,archive,author,author_email,categories,related,type,keywords,media,internalurl,externalurl,istopnews,related_files,related_links,content_elements,tags,path_segment,alternative_title,fal_related_files'
];*/
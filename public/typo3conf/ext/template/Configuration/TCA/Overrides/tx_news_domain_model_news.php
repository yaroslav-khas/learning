<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['test'] =
        ['config' =>
            ['eval' => 'required',
            'size' => 60,
            'type' => 'input'],
        'l10n_mode' => 'prefixLangTitle',
        'label' => 'Test',
        ];
$GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'] = [
    'showitem' => 'test,--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,--palette--;;paletteDate,bodytext,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.content_elements,content_elements,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,fal_media,fal_related_files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,related,related_from,related_links,tags,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;paletteLanguage,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;paletteHidden,--palette--;;paletteAccess,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended'
];
/*$GLOBALS['TCA']['tx_news_domain_model_news']['interface'] = [
    'showRecordFieldList' => 'test,cruser_id,pid,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,fe_group,title,teaser,bodytext,datetime,archive,author,author_email,categories,related,type,keywords,media,internalurl,externalurl,istopnews,related_files,related_links,content_elements,tags,path_segment,alternative_title,fal_related_files'
];*/
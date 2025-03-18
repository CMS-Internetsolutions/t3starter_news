<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
$languageFilePrefix = 'LLL:EXT:t3starter_news/Resources/Private/Language/locallang_be.xlf:';
$coreTabsLanguageFilePrefix = 'LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:';

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        $languageFilePrefix . 'CType.news_list',
        'NewsList',
        'apps-pagetree-t3starter-news'
    ],
    'uploads',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['NewsList'] = [
    'showitem' => '
    --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
    --palette--;' . $frontendLanguageFilePrefix . 'palette.header;header,
    --div--;' . $languageFilePrefix . 'div.news,
     --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
    pi_flexform;' . $languageFilePrefix . 'CType.NewsList.flexform_pi,
    --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
    --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
    --palette--;' . $frontendLanguageFilePrefix . 'palette.visibility;visibility,
    --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
    --div--;' . $frontendLanguageFilePrefix . 'tabs.extended,rowDescription,
    --div--;' . $coreTabsLanguageFilePrefix . 'categories,categories'
];

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['NewsList'] = 'apps-pagetree-t3starter-news';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['NewsList'] = 'recursive,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['NewsList'] = 'pi_flexform';
ExtensionManagementUtility::addPiFlexFormValue(
    '',
    'FILE:EXT:t3starter_news/Configuration/FlexForm/NewsList.xml',
    'NewsList'
);

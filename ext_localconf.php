<?php

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Information\Typo3Version;

defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

$newsDokType = 119;

// Adds page TypoScript for the news list content element
//ExtensionManagementUtility::addPageTSConfig(
//    '@import \'EXT:t3starter_news/Configuration/TsConfig/Page/News.tsconfig\''
//);

(function () {

    $versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
    // Only include user.tsconfig if TYPO3 version is below 13 so that it is not imported twice.
    // @todo deprecated
    if ($versionInformation->getMajorVersion() < 13) {
        ExtensionManagementUtility::addUserTSConfig(
            '@import "EXT:t3starter_news/Configuration/page.tsconfig"'
        );
    }

})();


// Provide icon for page tree, list view, ... :
GeneralUtility::makeInstance(IconRegistry::class)
    ->registerIcon(
        'apps-pagetree-t3starter-news',
        SvgIconProvider::class,
        [
            'source' => 'EXT:t3starter_news/Resources/Public/Icons/NewsArticle.svg',
        ]
    );
ExtensionUtility::configurePlugin(
    't3starter_news',
    'NewsList',
    [
        'T3starterNews' => 'list'
    ]
);

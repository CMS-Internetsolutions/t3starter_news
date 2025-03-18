<?php
defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 't3starter_news';

    /**
     * Default TypoScript for Site
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'News for T3STARTER Templates xxxxxxx'
    );
});



<?php
defined('TYPO3_MODE') || defined('TYPO3') || die ('Access denied.');

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\GeneralUtility;

// T3Starter use only range from 100 to 120
$newsDokType = 119;

// Add new page type:
$GLOBALS['PAGES_TYPES'][$newsDokType] = [
    'type' => 'web',
    'allowedTables' => '*',
];

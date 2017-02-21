<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Bytedev.' . $_EXTKEY,
	'Timeline',
	'Timeline'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Timeline');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bytedevtimeline_domain_model_date', 'EXT:bytedev_timeline/Resources/Private/Language/locallang_csh_tx_bytedevtimeline_domain_model_date.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bytedevtimeline_domain_model_date');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bytedevtimeline_domain_model_timeline', 'EXT:bytedev_timeline/Resources/Private/Language/locallang_csh_tx_bytedevtimeline_domain_model_timeline.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bytedevtimeline_domain_model_timeline');

<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Bytedev.' . $_EXTKEY,
	'Timeline',
	array(
		'Timeline' => 'render',
		
	),
	// non-cacheable actions
	array(
		'Timeline' => 'render',
		
	)
);

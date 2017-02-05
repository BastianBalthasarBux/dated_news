<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'dated_news';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Controller/NewsController'][] = 'dated_news';

//Bei der neuen Action werden manche Flexformfelder nicht mehr benötigt
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['Hooks/BackendUtility.php']['updateFlexforms']['dated_news']
	= 'FalkRoeder\\DatedNews\\Hooks\\BackendUtility->updateFlexformsDatedNews';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['getFlexFormDSClass'][]
	= \FalkRoeder\DatedNews\Hooks\FlexFormHook::class;

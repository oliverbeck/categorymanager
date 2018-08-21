<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'OliverBeck.Categorymanager',
                'tools', // Make module a submodule of 'tools'
                'mod1', // Submodule key
                '', // Position
                ['Category' => 'index'],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:categorymanager/Resources/Public/Icons/user_mod_mod1.svg',
                    'labels' => 'LLL:EXT:categorymanager/Resources/Private/Language/locallang_mod1.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('categorymanager', 'Configuration/TypoScript', 'Category Manager');

    }
);

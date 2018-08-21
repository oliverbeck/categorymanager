<?php
namespace OliverBeck\Categorymanager\Controller;

class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    public function indexAction() {
        // Get page record for tree starting point
        $startingPoint = 1;
        $pageRecord = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord(
            'pages',
            $startingPoint
        );

        // Create and initialize the tree object
        /** @var $tree \TYPO3\CMS\Backend\Tree\View\PageTreeView */
        $tree = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Backend\Tree\View\PageTreeView::class);
        $tree->init('AND ' . $GLOBALS['BE_USER']->getPagePermsClause(1));

        // Creating the icon for the current page and add it to the tree
        /*$html = \TYPO3\CMS\Core\Imaging\IconFactory::getIconForRecord(
            'pages',
            $pageRecord
        );*/
        $tree->tree[] = array(
            'row' => $pageRecord,
            'HTML' => $html
        );

        // Create the page tree, from the starting point, 2 levels deep
        $depth = 2;
        $tree->getTree(
            $startingPoint,
            $depth,
            ''
        );

        // Pass the tree to the view
        $this->view->assign(
            'tree',
            $tree->tree
        );
    }
}
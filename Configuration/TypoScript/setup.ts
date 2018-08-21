
# Module configuration
module.tx_categorymanager_tools_categorymanagermod1 {
    persistence {
        storagePid = {$module.tx_categorymanager_mod1.persistence.storagePid}
    }
    view {
        templateRootPaths.0 = EXT:categorymanager/Resources/Private/Backend/Templates/
        templateRootPaths.1 = {$module.tx_categorymanager_mod1.view.templateRootPath}
        partialRootPaths.0 = EXT:categorymanager/Resources/Private/Backend/Partials/
        partialRootPaths.1 = {$module.tx_categorymanager_mod1.view.partialRootPath}
        layoutRootPaths.0 = EXT:categorymanager/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = {$module.tx_categorymanager_mod1.view.layoutRootPath}
    }
}

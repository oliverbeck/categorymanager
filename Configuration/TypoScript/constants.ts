
module.tx_categorymanager_mod1 {
    view {
        # cat=module.tx_categorymanager_mod1/file; type=string; label=Path to template root (BE)
        templateRootPath = EXT:categorymanager/Resources/Private/Backend/Templates/
        # cat=module.tx_categorymanager_mod1/file; type=string; label=Path to template partials (BE)
        partialRootPath = EXT:categorymanager/Resources/Private/Backend/Partials/
        # cat=module.tx_categorymanager_mod1/file; type=string; label=Path to template layouts (BE)
        layoutRootPath = EXT:categorymanager/Resources/Private/Backend/Layouts/
    }
    persistence {
        # cat=module.tx_categorymanager_mod1//a; type=string; label=Default storage PID
        storagePid =
    }
}

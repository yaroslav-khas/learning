<?php
if (!getenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS')) {
    putenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS=' . 'about,adminpanel,backend,belog,beuser,core,extbase,extensionmanager,felogin,filelist,filemetadata,fluid,fluid_styled_content,form,frontend,impexp,indexed_search,info,install,linkvalidator,lowlevel,recordlist,redirects,reports,rte_ckeditor,scheduler,seo,setup,sys_note,t3editor,tstemplate,viewpage');
}

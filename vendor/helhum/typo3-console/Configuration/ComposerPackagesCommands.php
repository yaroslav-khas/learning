<?php
return array (
  0 => 
  array (
    0 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'replace' => 
      array (
        0 => 'extbase:_core_command',
        1 => 'extbase:_extbase_help',
        2 => 'extbase:help:error',
        3 => 'typo3_console:_dummy',
      ),
      'name' => '_dummy',
      'nameSpacedName' => 'typo3_console:_dummy',
    ),
    1 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\CreateBackendAdminUserCommand',
      'schedulable' => false,
      'name' => 'backend:createadmin',
      'nameSpacedName' => 'typo3_console:backend:createadmin',
    ),
    2 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\LockBackendCommand',
      'schedulable' => false,
      'replace' => 
      array (
        0 => 'backend:backend:lock',
      ),
      'name' => 'backend:lock',
      'nameSpacedName' => 'typo3_console:backend:lock',
    ),
    3 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\LockBackendForEditorsCommand',
      'schedulable' => false,
      'name' => 'backend:lockforeditors',
      'nameSpacedName' => 'typo3_console:backend:lockforeditors',
    ),
    4 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\UnlockBackendCommand',
      'schedulable' => false,
      'replace' => 
      array (
        0 => 'backend:backend:unlock',
      ),
      'name' => 'backend:unlock',
      'nameSpacedName' => 'typo3_console:backend:unlock',
    ),
    5 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Backend\\UnlockBackendForEditorsCommand',
      'schedulable' => false,
      'name' => 'backend:unlockforeditors',
      'nameSpacedName' => 'typo3_console:backend:unlockforeditors',
    ),
    6 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'cache:flush',
      'nameSpacedName' => 'typo3_console:cache:flush',
    ),
    7 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushGroupsCommand',
      'schedulable' => false,
      'name' => 'cache:flushgroups',
      'nameSpacedName' => 'typo3_console:cache:flushgroups',
    ),
    8 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Cache\\CacheFlushTagsCommand',
      'schedulable' => false,
      'name' => 'cache:flushtags',
      'nameSpacedName' => 'typo3_console:cache:flushtags',
    ),
    9 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Cache\\CacheListGroupsCommand',
      'schedulable' => false,
      'name' => 'cache:listgroups',
      'nameSpacedName' => 'typo3_console:cache:listgroups',
    ),
    10 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Cleanup\\UpdateReferenceIndexCommand',
      'schedulable' => false,
      'replace' => 
      array (
        0 => 'backend:referenceindex:update',
      ),
      'aliases' => 
      array (
        0 => 'backend:referenceindex:update',
        1 => 'referenceindex:update',
      ),
      'name' => 'cleanup:updatereferenceindex',
      'nameSpacedName' => 'typo3_console:cleanup:updatereferenceindex',
    ),
    11 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationRemoveCommand',
      'schedulable' => false,
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'configuration:remove',
      'nameSpacedName' => 'typo3_console:configuration:remove',
    ),
    12 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationSetCommand',
      'schedulable' => false,
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'configuration:set',
      'nameSpacedName' => 'typo3_console:configuration:set',
    ),
    13 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowCommand',
      'schedulable' => false,
      'name' => 'configuration:show',
      'nameSpacedName' => 'typo3_console:configuration:show',
    ),
    14 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowActiveCommand',
      'schedulable' => false,
      'name' => 'configuration:showactive',
      'nameSpacedName' => 'typo3_console:configuration:showactive',
    ),
    15 => 
    array (
      'class' => 'Helhum\\Typo3Console\\Command\\Configuration\\ConfigurationShowLocalCommand',
      'schedulable' => false,
      'vendor' => 'typo3_console',
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'configuration:showlocal',
      'nameSpacedName' => 'typo3_console:configuration:showlocal',
    ),
    16 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Database\\DatabaseExportCommand',
      'schedulable' => false,
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'database:export',
      'nameSpacedName' => 'typo3_console:database:export',
    ),
    17 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Database\\DatabaseImportCommand',
      'schedulable' => false,
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'database:import',
      'nameSpacedName' => 'typo3_console:database:import',
    ),
    18 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Database\\DatabaseUpdateSchemaCommand',
      'schedulable' => false,
      'runLevel' => 'buildBasicRuntimeSequence',
      'bootingSteps' => 
      array (
        0 => 'helhum.typo3console:database',
        1 => 'helhum.typo3console:persistence',
      ),
      'name' => 'database:updateschema',
      'nameSpacedName' => 'typo3_console:database:updateschema',
    ),
    19 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Documentation\\GenerateXsdCommand',
      'name' => 'documentation:generatexsd',
      'nameSpacedName' => 'typo3_console:documentation:generatexsd',
    ),
    20 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\DumpAutoloadCommand',
      'runLevel' => 'buildEssentialSequence',
      'replace' => 
      array (
        0 => 'core:dumpautoload',
        1 => 'extensionmanager:extension:dumpclassloadinginformation',
      ),
      'aliases' => 
      array (
        0 => 'extension:dumpautoload',
        1 => 'extension:dumpclassloadinginformation',
        2 => 'extensionmanager:extension:dumpclassloadinginformation',
      ),
      'name' => 'dumpautoload',
      'nameSpacedName' => 'typo3_console:dumpautoload',
    ),
    21 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\ExtensionActivateCommand',
      'schedulable' => false,
      'replace' => 
      array (
        0 => 'extensionmanager:extension:install',
        1 => 'extensionmanager:extension:activate',
      ),
      'aliases' => 
      array (
        0 => 'extension:install',
        1 => 'extensionmanager:extension:install',
        2 => 'extensionmanager:extension:activate',
      ),
      'name' => 'extension:activate',
      'nameSpacedName' => 'typo3_console:extension:activate',
    ),
    22 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\ExtensionDeactivateCommand',
      'schedulable' => false,
      'replace' => 
      array (
        0 => 'extensionmanager:extension:uninstall',
        1 => 'extensionmanager:extension:deactivate',
      ),
      'aliases' => 
      array (
        0 => 'extension:uninstall',
        1 => 'extensionmanager:extension:uninstall',
        2 => 'extensionmanager:extension:deactivate',
      ),
      'name' => 'extension:deactivate',
      'nameSpacedName' => 'typo3_console:extension:deactivate',
    ),
    23 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\ExtensionListCommand',
      'schedulable' => false,
      'replace' => 
      array (
        0 => 'core:extension:list',
      ),
      'name' => 'extension:list',
      'nameSpacedName' => 'typo3_console:extension:list',
    ),
    24 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\ExtensionRemoveInactiveCommand',
      'schedulable' => false,
      'name' => 'extension:removeinactive',
      'nameSpacedName' => 'typo3_console:extension:removeinactive',
    ),
    25 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\ExtensionSetupCommand',
      'schedulable' => false,
      'name' => 'extension:setup',
      'nameSpacedName' => 'typo3_console:extension:setup',
    ),
    26 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Extension\\ExtensionSetupActiveCommand',
      'schedulable' => false,
      'name' => 'extension:setupactive',
      'nameSpacedName' => 'typo3_console:extension:setupactive',
    ),
    27 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Frontend\\FrontendRequestCommand',
      'schedulable' => false,
      'name' => 'frontend:request',
      'nameSpacedName' => 'typo3_console:frontend:request',
    ),
    28 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallSetupCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:setup',
      'nameSpacedName' => 'typo3_console:install:setup',
    ),
    29 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallGeneratePackageStatesCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:generatepackagestates',
      'nameSpacedName' => 'typo3_console:install:generatepackagestates',
    ),
    30 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallFixFolderStructureCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:fixfolderstructure',
      'nameSpacedName' => 'typo3_console:install:fixfolderstructure',
    ),
    31 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallExtensionSetupIfPossibleCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:extensionsetupifpossible',
      'nameSpacedName' => 'typo3_console:install:extensionsetupifpossible',
    ),
    32 => 
    array (
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallEnvironmentAndFoldersCommand',
      'vendor' => 'typo3_console',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:environmentandfolders',
      'nameSpacedName' => 'typo3_console:install:environmentandfolders',
    ),
    33 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseConnectCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:databaseconnect',
      'nameSpacedName' => 'typo3_console:install:databaseconnect',
    ),
    34 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseSelectCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:databaseselect',
      'nameSpacedName' => 'typo3_console:install:databaseselect',
    ),
    35 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallDatabaseDataCommand',
      'schedulable' => false,
      'runLevel' => 'buildBasicRuntimeSequence',
      'bootingSteps' => 
      array (
        0 => 'helhum.typo3console:database',
        1 => 'helhum.typo3console:persistence',
      ),
      'name' => 'install:databasedata',
      'nameSpacedName' => 'typo3_console:install:databasedata',
    ),
    36 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallDefaultConfigurationCommand',
      'schedulable' => false,
      'runLevel' => 'buildBasicRuntimeSequence',
      'bootingSteps' => 
      array (
        0 => 'helhum.typo3console:database',
        1 => 'helhum.typo3console:persistence',
      ),
      'name' => 'install:defaultconfiguration',
      'nameSpacedName' => 'typo3_console:install:defaultconfiguration',
    ),
    37 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Install\\InstallActionNeedsExecutionCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:actionneedsexecution',
      'nameSpacedName' => 'typo3_console:install:actionneedsexecution',
    ),
    38 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Scheduler\\SchedulerRunCommand',
      'schedulable' => false,
      'replace' => 
      array (
        0 => 'scheduler:scheduler:run',
      ),
      'name' => 'scheduler:run',
      'nameSpacedName' => 'typo3_console:scheduler:run',
    ),
    39 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeAllCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'replace' => 
      array (
        0 => 'install:upgrade:run',
      ),
      'name' => 'upgrade:all',
      'nameSpacedName' => 'typo3_console:upgrade:all',
    ),
    40 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeCheckExtensionConstraintsCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:checkextensionconstraints',
      'nameSpacedName' => 'typo3_console:upgrade:checkextensionconstraints',
    ),
    41 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeListCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'replace' => 
      array (
        0 => 'install:upgrade:list',
      ),
      'aliases' => 
      array (
        0 => 'install:upgrade:list',
      ),
      'name' => 'upgrade:list',
      'nameSpacedName' => 'typo3_console:upgrade:list',
    ),
    42 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeWizardCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:wizard',
      'nameSpacedName' => 'typo3_console:upgrade:wizard',
    ),
    43 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeSubProcessCommand',
      'schedulable' => false,
      'name' => 'upgrade:subprocess',
      'nameSpacedName' => 'typo3_console:upgrade:subprocess',
    ),
    44 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Command\\Upgrade\\UpgradeCheckExtensionCompatibilityCommand',
      'schedulable' => false,
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:checkextensioncompatibility',
      'nameSpacedName' => 'typo3_console:upgrade:checkextensioncompatibility',
    ),
  ),
);
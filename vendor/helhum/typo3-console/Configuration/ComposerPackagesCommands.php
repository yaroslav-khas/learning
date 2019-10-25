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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'createAdmin',
      'name' => 'backend:createadmin',
      'nameSpacedName' => 'typo3_console:backend:createadmin',
    ),
    2 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'lock',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'lockForEditors',
      'name' => 'backend:lockforeditors',
      'nameSpacedName' => 'typo3_console:backend:lockforeditors',
    ),
    4 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'unlock',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\BackendCommandController',
      'controllerCommandName' => 'unlockForEditors',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\CacheCommandController',
      'controllerCommandName' => 'flushGroups',
      'name' => 'cache:flushgroups',
      'nameSpacedName' => 'typo3_console:cache:flushgroups',
    ),
    8 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\CacheCommandController',
      'controllerCommandName' => 'flushTags',
      'name' => 'cache:flushtags',
      'nameSpacedName' => 'typo3_console:cache:flushtags',
    ),
    9 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\CacheCommandController',
      'controllerCommandName' => 'listGroups',
      'name' => 'cache:listgroups',
      'nameSpacedName' => 'typo3_console:cache:listgroups',
    ),
    10 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\CleanupCommandController',
      'controllerCommandName' => 'updateReferenceIndex',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'remove',
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'configuration:remove',
      'nameSpacedName' => 'typo3_console:configuration:remove',
    ),
    12 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'set',
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'configuration:set',
      'nameSpacedName' => 'typo3_console:configuration:set',
    ),
    13 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'show',
      'name' => 'configuration:show',
      'nameSpacedName' => 'typo3_console:configuration:show',
    ),
    14 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'showActive',
      'name' => 'configuration:showactive',
      'nameSpacedName' => 'typo3_console:configuration:showactive',
    ),
    15 => 
    array (
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\ConfigurationCommandController',
      'controllerCommandName' => 'showLocal',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\DatabaseCommandController',
      'controllerCommandName' => 'import',
      'runLevel' => 'buildBasicRuntimeSequence',
      'name' => 'database:import',
      'nameSpacedName' => 'typo3_console:database:import',
    ),
    18 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\DatabaseCommandController',
      'controllerCommandName' => 'updateSchema',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'activate',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'deactivate',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'list',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'removeInactive',
      'name' => 'extension:removeinactive',
      'nameSpacedName' => 'typo3_console:extension:removeinactive',
    ),
    25 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'setup',
      'name' => 'extension:setup',
      'nameSpacedName' => 'typo3_console:extension:setup',
    ),
    26 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\ExtensionCommandController',
      'controllerCommandName' => 'setupActive',
      'name' => 'extension:setupactive',
      'nameSpacedName' => 'typo3_console:extension:setupactive',
    ),
    27 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\FrontendCommandController',
      'controllerCommandName' => 'request',
      'name' => 'frontend:request',
      'nameSpacedName' => 'typo3_console:frontend:request',
    ),
    28 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'setup',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:setup',
      'nameSpacedName' => 'typo3_console:install:setup',
    ),
    29 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'generatePackageStates',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:generatepackagestates',
      'nameSpacedName' => 'typo3_console:install:generatepackagestates',
    ),
    30 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'fixFolderStructure',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:fixfolderstructure',
      'nameSpacedName' => 'typo3_console:install:fixfolderstructure',
    ),
    31 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'extensionSetupIfPossible',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:extensionsetupifpossible',
      'nameSpacedName' => 'typo3_console:install:extensionsetupifpossible',
    ),
    32 => 
    array (
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'vendor' => 'typo3_console',
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'environmentAndFolders',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:environmentandfolders',
      'nameSpacedName' => 'typo3_console:install:environmentandfolders',
    ),
    33 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'databaseConnect',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:databaseconnect',
      'nameSpacedName' => 'typo3_console:install:databaseconnect',
    ),
    34 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'databaseSelect',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:databaseselect',
      'nameSpacedName' => 'typo3_console:install:databaseselect',
    ),
    35 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'databaseData',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'defaultConfiguration',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\InstallCommandController',
      'controllerCommandName' => 'actionNeedsExecution',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'install:actionneedsexecution',
      'nameSpacedName' => 'typo3_console:install:actionneedsexecution',
    ),
    38 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\SchedulerCommandController',
      'controllerCommandName' => 'run',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'all',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'checkExtensionConstraints',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:checkextensionconstraints',
      'nameSpacedName' => 'typo3_console:upgrade:checkextensionconstraints',
    ),
    41 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'list',
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
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'wizard',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:wizard',
      'nameSpacedName' => 'typo3_console:upgrade:wizard',
    ),
    43 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'subProcess',
      'name' => 'upgrade:subprocess',
      'nameSpacedName' => 'typo3_console:upgrade:subprocess',
    ),
    44 => 
    array (
      'vendor' => 'typo3_console',
      'class' => 'Helhum\\Typo3Console\\Mvc\\Cli\\Symfony\\Command\\DummyCommand',
      'schedulable' => false,
      'controller' => 'Helhum\\Typo3Console\\Command\\UpgradeCommandController',
      'controllerCommandName' => 'checkExtensionCompatibility',
      'runLevel' => 'buildEssentialSequence',
      'name' => 'upgrade:checkextensioncompatibility',
      'nameSpacedName' => 'typo3_console:upgrade:checkextensioncompatibility',
    ),
  ),
);
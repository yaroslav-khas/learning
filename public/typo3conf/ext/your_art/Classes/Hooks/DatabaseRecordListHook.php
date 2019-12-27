<?php
namespace Khas\YourArt\Hooks;
class DatabaseRecordListHook extends \TYPO3\CMS\Recordlist\RecordList\DatabaseRecordList
{
    public function customizeCsvRow(){
        debug("test");exit;
    }
}
<?php

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bizprofi\Graph\CMetricTable;

Loc::loadMessages(__FILE__);

class bizprofi_graph extends CModule
{
    public function __construct()
    {
        $arModuleVersion = array();
        
        include __DIR__ . '/version.php';

        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }
        
        $this->MODULE_ID = 'bizprofi.graph';
        $this->MODULE_NAME = Loc::getMessage('BIZPROFI_GRAPH_MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('BIZPROFI_GRAPH_MODULE_DESCRIPTION');
        $this->MODULE_GROUP_RIGHTS = 'N';
        $this->PARTNER_NAME = Loc::getMessage('BIZPROFI_GRAPH_MODULE_PARTNER_NAME');
        $this->PARTNER_URI = 'http://www.bizprofi.ru/';
    }

    public function doInstall()
    {
        $this->installDB();
        ModuleManager::registerModule($this->MODULE_ID);
    }

    public function doUninstall()
    {
        $this->uninstallDB();
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }

    public function installDB()
    {
        global $DB, $APPLICATION;
        $this->errors = false;

        $this->errors = $DB->RunSQLBatch(__DIR__."/db/".strtolower($DB->type)."/install.sql");

        if($this->errors !== false)
        {
            $APPLICATION->ThrowException(implode("", $this->errors));
            return false;
        }
        
        return true;

    }

    public function uninstallDB()
    {
        global $DB;

        if($_REQUEST["savedata"] !== 'Y') {
            $DB->RunSQLBatch(__DIR__."/db/".strtolower($DB->type)."/uninstall.sql");

        }

        return true;
    }
}

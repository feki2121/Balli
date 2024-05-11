<?php

use PrestaShop\ModuleLibServiceContainer\DependencyInjection\ServiceContainer;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Psalsace extends Module
{
    /**
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * @var \PrestaShop\ModuleLibServiceContainer\DependencyInjection\ServiceContainer
     */
    private $serviceContainer;

    public function __construct()
    {
        $this->name = 'psalsace';
        $this->version = '42.0.0';
        $this->author = 'CloudSync team';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
          'min' => '1.6.1.24',
          'max' => '99.99.99',
        ];
        $this->bootstrap = false;

        parent::__construct();

        $this->displayName = $this->trans('PS Alsace', [], 'Modules.Mymodule.Admin');
        $this->description = $this->trans('Mocking Lorraine', [], 'Modules.Mymodule.Admin');
        $this->confirmUninstall = $this->trans('Are you sure you want to quit Alsace?', [], 'Modules.Mymodule.Admin');

        require_once __DIR__ . '/vendor/autoload.php';

        if ($this->serviceContainer === null) {
            $this->serviceContainer = new ServiceContainer($this->name, $this->getLocalPath());
        }
    }

    public function install()
    {
        return true;
    }

    public function uninstall()
    {
        return true;
    }

    public function getService($serviceName)
    {
        return $this->serviceContainer->getService($serviceName);
    }

    public function getFilePath()
    {
        return __FILE__;
    }
}

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Core\Module\SourceHandler\RemoteZipSourceHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Core\\Module\\SourceHandler\\RemoteZipSourceHandler'] = new \PrestaShop\PrestaShop\Core\Module\SourceHandler\RemoteZipSourceHandler(($this->services['prestashop.module.sourcehandler.zip'] ?? $this->load('getPrestashop_Module_Sourcehandler_ZipService.php')), ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), (\dirname(__DIR__, 2).'/prod//downloads'));

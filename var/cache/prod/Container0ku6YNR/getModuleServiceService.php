<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEditionBasic\Service\ModuleService' shared service.

return $this->services['PrestaShop\\Module\\PsEditionBasic\\Service\\ModuleService'] = new \PrestaShop\Module\PsEditionBasic\Service\ModuleService(($this->services['prestashop.module.manager'] ?? $this->load('getPrestashop_Module_ManagerService.php')), ($this->services['ps_edition_basic.module'] ?? $this->load('getPsEditionBasic_ModuleService.php'))->name, ($this->services['ps_edition_basic.module'] ?? $this->load('getPsEditionBasic_ModuleService.php'))->addons_id);

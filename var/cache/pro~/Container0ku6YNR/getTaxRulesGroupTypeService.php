<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Form\Admin\Improve\International\Tax\TaxRulesGroupType' shared service.

return $this->services['PrestaShopBundle\\Form\\Admin\\Improve\\International\\Tax\\TaxRulesGroupType'] = new \PrestaShopBundle\Form\Admin\Improve\International\Tax\TaxRulesGroupType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Feature\\MultistoreFeature'] ?? $this->load('getMultistoreFeatureService.php'))->isUsed());

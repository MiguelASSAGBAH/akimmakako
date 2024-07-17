<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_metrics.presenter.faq' shared service.

return $this->services['ps_metrics.presenter.faq'] = new \PrestaShop\Module\Ps_metrics\Presenter\FaqPresenter(($this->services['ps_metrics.helper.json'] ?? ($this->services['ps_metrics.helper.json'] = new \PrestaShop\Module\Ps_metrics\Helper\JsonHelper())), ($this->services['ps_metrics.module'] ?? $this->load('getPsMetrics_ModuleService.php')), ($this->services['ps_metrics.helper.prestashop'] ?? ($this->services['ps_metrics.helper.prestashop'] = new \PrestaShop\Module\Ps_metrics\Helper\PrestaShopHelper())), ($this->services['ps_metrics.api.http'] ?? $this->load('getPsMetrics_Api_HttpService.php')));

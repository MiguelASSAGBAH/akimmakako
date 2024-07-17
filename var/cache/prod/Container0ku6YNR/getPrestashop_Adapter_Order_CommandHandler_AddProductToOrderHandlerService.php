<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.command_handler.add_product_to_order_handler' shared service.

return $this->services['prestashop.adapter.order.command_handler.add_product_to_order_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AddProductToOrderHandler(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\ContextStateManager'] ?? $this->load('getContextStateManager2Service.php')), ($this->services['prestashop.adapter.order.amount.updater'] ?? $this->load('getPrestashop_Adapter_Order_Amount_UpdaterService.php')), ($this->services['prestashop.adapter.order.product_quantity.updater'] ?? $this->load('getPrestashop_Adapter_Order_ProductQuantity_UpdaterService.php')), ($this->services['prestashop.adapter.order.order_detail.updater'] ?? $this->load('getPrestashop_Adapter_Order_OrderDetail_UpdaterService.php')));

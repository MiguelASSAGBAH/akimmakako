<?php
/* Smarty version 4.3.1, created on 2024-07-11 15:25:29
  from 'module:ps_brandlistviewstemplateshookps_brandlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_668ff9691743e2_01537504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7605d3e1afaa968ac113b0444601df2cff1153' => 
    array (
      0 => 'module:ps_brandlistviewstemplateshookps_brandlist.tpl',
      1 => 1720428564,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars[\'brand_display_type\']->value).".tpl' => 1,
  ),
),false)) {
function content_668ff9691743e2_01537504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1180421762668ff969120470_17164595';
?>

<div id="search_filters_brands">
  <section class="facet">
    <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="h6 text-uppercase facet-label" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      </a>
    <?php } else { ?>
      <p class="h6 text-uppercase facet-label">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      </p>
    <?php }?>

    <div>
      <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['brand_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('brands'=>$_smarty_tpl->tpl_vars['brands']->value), 0, true);
?>
      <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    </div>
  </section>
</div>
<?php }
}

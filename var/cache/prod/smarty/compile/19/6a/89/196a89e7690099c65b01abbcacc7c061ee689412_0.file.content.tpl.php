<?php
/* Smarty version 4.3.1, created on 2024-07-11 16:07:54
  from 'C:\wamp64\www\prestashop\adminmiguel\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6690035a3e1895_52472343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '196a89e7690099c65b01abbcacc7c061ee689412' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminmiguel\\themes\\default\\template\\content.tpl',
      1 => 1720428276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6690035a3e1895_52472343 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

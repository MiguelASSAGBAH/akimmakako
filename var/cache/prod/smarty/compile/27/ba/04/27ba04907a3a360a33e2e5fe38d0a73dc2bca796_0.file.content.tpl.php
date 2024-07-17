<?php
/* Smarty version 4.3.1, created on 2024-07-11 15:24:10
  from 'C:\wamp64\www\prestashop\adminmiguel\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_668ff91a4eab26_09364530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ba04907a3a360a33e2e5fe38d0a73dc2bca796' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminmiguel\\themes\\new-theme\\template\\content.tpl',
      1 => 1720428273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ff91a4eab26_09364530 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

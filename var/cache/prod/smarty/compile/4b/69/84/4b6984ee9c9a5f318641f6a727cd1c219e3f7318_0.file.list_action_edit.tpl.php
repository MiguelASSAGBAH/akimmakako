<?php
/* Smarty version 4.3.1, created on 2024-07-11 16:07:52
  from 'C:\wamp64\www\prestashop\adminmiguel\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6690035870b071_50363617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b6984ee9c9a5f318641f6a727cd1c219e3f7318' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminmiguel\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1720428275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6690035870b071_50363617 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}

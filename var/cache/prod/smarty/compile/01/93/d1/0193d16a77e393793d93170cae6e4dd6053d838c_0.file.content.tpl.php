<?php
/* Smarty version 4.3.4, created on 2024-05-05 12:32:04
  from '/var/www/html/admin-dev/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663760245f3061_75103609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0193d16a77e393793d93170cae6e4dd6053d838c' => 
    array (
      0 => '/var/www/html/admin-dev/themes/default/template/content.tpl',
      1 => 1709832552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663760245f3061_75103609 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

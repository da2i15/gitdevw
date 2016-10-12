<?php
/* Smarty version 3.1.30, created on 2016-09-21 14:39:19
  from "C:\UwAmp\www\views\layout\defaut\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e29b97b8a399_45538349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eda139edba37e2021a131e6e3b40fe001d11c0e2' => 
    array (
      0 => 'C:\\UwAmp\\www\\views\\layout\\defaut\\template.tpl',
      1 => 1474366555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e29b97b8a399_45538349 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF=8">
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_parameters']->value['config']['app_name'])===null||$tmp==='' ? "Project name" : $tmp);?>
</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</body>
</html><?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-09-21 17:15:32
  from "C:\UwAmp\www\views\Defaut\test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e2a41428c842_35336536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dd3290737385c2df2853f42a6294fcbb9957e3b' => 
    array (
      0 => 'C:\\UwAmp\\www\\views\\Defaut\\test.tpl',
      1 => 1474470295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e2a41428c842_35336536 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Fichier test.tpl dans la vue "defaut" pour le contrôleur "defaut"</h3>
Message : <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul><?php }
}

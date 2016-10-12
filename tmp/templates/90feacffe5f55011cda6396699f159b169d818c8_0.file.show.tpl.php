<?php
/* Smarty version 3.1.30, created on 2016-09-30 10:52:13
  from "/opt/lampp/htdocs/views/users/show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ee27bd17fb96_38614522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90feacffe5f55011cda6396699f159b169d818c8' => 
    array (
      0 => '/opt/lampp/htdocs/views/users/show.tpl',
      1 => 1474897818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee27bd17fb96_38614522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Bienvenue dans le SHOW</h3>
<TABLE class ="table table-striped table-bordered table-hover">

	<TR>
		<TH>Email</TH>
		<TH>Password</TH>
		<TH>Profile</TH>
		<TH>Actions</TH>
	</TR>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
	<TR>

		<TD><?php echo $_smarty_tpl->tpl_vars['foo']->value->email;?>
</TD>
		<TD><?php echo $_smarty_tpl->tpl_vars['foo']->value->password;?>
</TD>
		<TD><?php echo $_smarty_tpl->tpl_vars['foo']->value->profile;?>
</TD>
		<TD> <a href="<?php echo $_smarty_tpl->tpl_vars['_parameters']->value['root'];?>
users/update/<?php echo $_smarty_tpl->tpl_vars['foo']->value->email;?>
" class="btn btn-info btn">
          <span class="glyphicon glyphicon-pencil"></span> 
        </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_parameters']->value['root'];?>
users/delete/<?php echo $_smarty_tpl->tpl_vars['foo']->value->email;?>
" class="btn btn-danger btn">
          <span class="glyphicon glyphicon-trash"></span> 
        </a></TD>
	</TR>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</TABLE>

  <a href="<?php echo $_smarty_tpl->tpl_vars['_parameters']->value['root'];?>
users/create" class="btn btn-success btn" data-toggle="tooltip" title="Ajouter un nouvel utilisateur!">
          <span class="glyphicon glyphicon-plus"></span>
        </a>
        <br>
        <br>
        <br>

<a href = "/users">Retour</a><?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-09-30 14:53:25
  from "/opt/lampp/htdocs/views/users/update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ee60450f7fa2_99752534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0450f8f7a026ce9015051c563de7b631a183a030' => 
    array (
      0 => '/opt/lampp/htdocs/views/users/update.tpl',
      1 => 1475239821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee60450f7fa2_99752534 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <form action="<?php echo $_smarty_tpl->tpl_vars['_parameters']->value['root'];?>
users/updatepost" method="post">
  <div class="form-group">
    <label for="email">Adresse e-mail:</label>
    <input type="email" class="form-control" id="email" name ="email" value ="<?php echo $_smarty_tpl->tpl_vars['users']->value->email;?>
">
    <input type="hidden" class="form-control" id="oldemail" name ="oldemail" value ="<?php echo $_smarty_tpl->tpl_vars['users']->value->email;?>
">
  </div>
  <div class="form-group">
    <label for="pwd">Mot de passe:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" value="<?php echo $_smarty_tpl->tpl_vars['users']->value->password;?>
">
  </div>
 <label for="sel1">Selectionner un profil:</label>
      <select class="form-control" id="profile" name="profile" value"<?php echo $_smarty_tpl->tpl_vars['users']->value->profile;?>
">">
        <option value="user" <?php ob_start();
echo $_smarty_tpl->tpl_vars['users']->value->profile;
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 'admin') {?> selected<?php }?>>Utilisateur</option>
        <option value= "admin" <?php ob_start();
echo $_smarty_tpl->tpl_vars['users']->value->profile;
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == 'admin') {?> selected<?php }?>>Administrateur</option>
      </select>
      <br>
  <button type="submit" class="btn btn-default">Mettre à jour</button>
</form>

<?php }
}

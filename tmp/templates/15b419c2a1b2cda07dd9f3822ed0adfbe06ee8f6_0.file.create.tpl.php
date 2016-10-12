<?php
/* Smarty version 3.1.30, created on 2016-09-30 11:27:43
  from "/opt/lampp/htdocs/views/users/create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ee300f67bf33_73250333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15b419c2a1b2cda07dd9f3822ed0adfbe06ee8f6' => 
    array (
      0 => '/opt/lampp/htdocs/views/users/create.tpl',
      1 => 1475227617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee300f67bf33_73250333 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <form action="<?php echo $_smarty_tpl->tpl_vars['_parameters']->value['root'];?>
users/createpost" method="post">
  <div class="form-group">
    <label for="email">Adresse e-mail:</label>
    <input type="email" class="form-control" name ="email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Mot de passe:</label>
    <input type="password" class="form-control" name="pwd" id="pwd">
  </div>
 <label for="sel1">Selectionner un profil:</label>
      <select class="form-control" name="profile" id="profile">
        <option value="user" >Utilisateur</option>
        <option value="admin">Administrateur</option>
      </select>
      <br>
  <button type="submit" class="btn btn-default">Créer</button>
</form>

<?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-09-26 14:40:54
  from "C:\UwAmp\www\views\Users\update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e91756bc4a38_06207608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe3ebce193d75111876d6ae4a7bb4fc0826fb6a2' => 
    array (
      0 => 'C:\\UwAmp\\www\\views\\Users\\update.tpl',
      1 => 1474893644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e91756bc4a38_06207608 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <form>
  <div class="form-group">
    <label for="email">Adresse e-mail:</label>
    <input type="email" class="form-control" id="email" value ="<?php echo $_smarty_tpl->tpl_vars['users']->value->email;?>
">
  </div>
  <div class="form-group">
    <label for="pwd">Mot de passe:</label>
    <input type="password" class="form-control" id="pwd" value="<?php echo $_smarty_tpl->tpl_vars['users']->value->password;?>
">
  </div>
 <label for="sel1">Selectionner un profil:</label>
      <select class="form-control" id="sel1" value"<?php echo $_smarty_tpl->tpl_vars['users']->value->profile;?>
">">
        <option <?php ob_start();
echo $_smarty_tpl->tpl_vars['users']->value->profile;
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 'admin') {?> selected<?php }?>>Utilisateur</option>
        <option <?php ob_start();
echo $_smarty_tpl->tpl_vars['users']->value->profile;
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == 'admin') {?> selected<?php }?>>Administrateur</option>
      </select>
      <br>
  <button type="submit" class="btn btn-default">Mettre à jour</button>
</form>

<?php }
}

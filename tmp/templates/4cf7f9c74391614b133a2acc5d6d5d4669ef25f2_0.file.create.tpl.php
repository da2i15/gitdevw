<?php
/* Smarty version 3.1.30, created on 2016-09-26 15:01:07
  from "C:\UwAmp\www\views\Users\create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e91c13294a97_76888647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cf7f9c74391614b133a2acc5d6d5d4669ef25f2' => 
    array (
      0 => 'C:\\UwAmp\\www\\views\\Users\\create.tpl',
      1 => 1474891972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e91c13294a97_76888647 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <form>
  <div class="form-group">
    <label for="email">Adresse e-mail:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Mot de passe:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
 <label for="sel1">Selectionner un profil:</label>
      <select class="form-control" id="sel1">
        <option>Utilisateur</option>
        <option>Administrateur</option>
      </select>
      <br>
  <button type="submit" class="btn btn-default">Créer</button>
</form>

<?php }
}

<?php
/* Smarty version 3.1.30, created on 2016-10-03 17:48:38
  from "/opt/lampp/htdocs/views/login/defaut.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f27dd62ea285_98040187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2601c1529d3625cf84b1220ed85517c18c23ee73' => 
    array (
      0 => '/opt/lampp/htdocs/views/login/defaut.tpl',
      1 => 1475509703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f27dd62ea285_98040187 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <form action="<?php echo $_smarty_tpl->tpl_vars['_parameters']->value['root'];?>
login/connect" method="post">
  <div class="form-group">
    <label for="email">Adresse e-mail:</label>
    <input type="email" class="form-control" name ="email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Mot de passe:</label>
    <input type="password" class="form-control" name="pwd" id="pwd">
  </div>
 
      <br>
  <button type="submit" class="btn btn-default">Se connecter</button>
</form>

<?php }
}

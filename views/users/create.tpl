 <form action="{$_parameters.root}users/createpost" method="post">
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


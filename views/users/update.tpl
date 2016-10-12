 <form action="{$_parameters.root}users/updatepost" method="post">
  <div class="form-group">
    <label for="email">Adresse e-mail:</label>
    <input type="email" class="form-control" id="email" name ="email" value ="{$users->email}">
    <input type="hidden" class="form-control" id="oldemail" name ="oldemail" value ="{$users->email}">
  </div>
  <div class="form-group">
    <label for="pwd">Mot de passe:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" value="{$users->password}">
  </div>
 <label for="sel1">Selectionner un profil:</label>
      <select class="form-control" id="profile" name="profile" value"{$users->profile}">">
        <option value="user" {if {$users->profile} eq 'admin'} selected{/if}>Utilisateur</option>
        <option value= "admin" {if {$users->profile} eq 'admin'} selected{/if}>Administrateur</option>
      </select>
      <br>
  <button type="submit" class="btn btn-default">Mettre à jour</button>
</form>


<h3>Bienvenue dans le SHOW</h3>
<TABLE class ="table table-striped table-bordered table-hover">

	<TR>
		<TH>Email</TH>
		<TH>Password</TH>
		<TH>Profile</TH>
		<TH>Actions</TH>
	</TR>
	{foreach $users as $foo}
	<TR>

		<TD>{$foo->email}</TD>
		<TD>{$foo->password}</TD>
		<TD>{$foo->profile}</TD>
		<TD> <a href="{$_parameters.root}users/update/{$foo->email}" class="btn btn-info btn">
          <span class="glyphicon glyphicon-pencil"></span> 
        </a>
    <a href="{$_parameters.root}users/delete/{$foo->email}" class="btn btn-danger btn">
          <span class="glyphicon glyphicon-trash"></span> 
        </a></TD>
	</TR>
	{/foreach}

</TABLE>

  <a href="{$_parameters.root}users/create" class="btn btn-success btn" data-toggle="tooltip" title="Ajouter un nouvel utilisateur!">
          <span class="glyphicon glyphicon-plus"></span>
        </a>
        <br>
        <br>
        <br>

<a href = "/users">Retour</a>
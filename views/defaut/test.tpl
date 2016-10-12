<h3>Fichier test.tpl dans la vue "defaut" pour le contrôleur "defaut"</h3>
Message : {$message}
<ul>
{foreach $users as $foo}
	<li>{$foo}</li>
{/foreach}
</ul>
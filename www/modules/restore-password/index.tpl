{extends file="layout.tpl"}

{block name=title}Obnova hesla{/block}

{block name=content}

Meno: {$users.0.firstname}<br/>
Priezvisko: {$users.0.lastname}<br/>

<form method="post">
	Zadajte nové heslo: <input type="text" name="password"/>
	<input type="hidden" name="token" value="{$users.0.token}"/>
	<input name="submit" type="submit" value="Odoslať"/>
</form>

{/block}

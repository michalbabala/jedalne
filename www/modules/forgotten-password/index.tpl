{extends file="layout.tpl"}

{block name=title}Zabudnuté heslo{/block}

{block name=content}

	<strong style="color:#CC0000;">
		<ul>
	    	{foreach $errors as $error}
	      		<li>{$error}</li>
	    	{/foreach}
	 	</ul>
	</strong>

<form method="post">
	Email: <input type="text" name="email"/>
	<input name="submit" type="submit" value="Odoslať"/>
</form>

{/block}

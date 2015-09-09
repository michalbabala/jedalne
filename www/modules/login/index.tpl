{extends file="layout.tpl"}


{block name=title}Login{/block}


{block name=content}

	<strong style="color:#CC0000;"><ul>
	    {foreach $errors as $error}
	      <li>{$error}</li>
	    {/foreach}
	 </ul></strong>


		<form method="post">	
			<h5>
				<a style="padding-right:0.5em;" href="{$_GLOBAL.URL["forgotten-password"]}">Zabudli ste heslo?</a>
				  <input type="text" name="email" maxlength="50" size="30" placeholder="email"
							 value="email"/>
				  <input type="password" name="password" maxlength="50" size="30" placeholder="Heslo"
							 value="password"/>
				  <input type="submit" name="submit" value="Prihlasiť" />
			</h5>
		</form>




{/block}

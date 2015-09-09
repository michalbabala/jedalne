{extends file="layout.tpl"}


{block name=title}Login{/block}


{block name=content}

	<strong style="color:#CC0000;"><ul>
	    {foreach $errors as $error}
	      <li>{$error}</li>
	    {/foreach}
	 </ul></strong>


		<form action="main.php" method="post">	
			<h6 class="header">
				<a style="padding-right:0.5em; color:white;" href="{$_GLOBAL.URL.orders}/forgotten_password">"Zabudli_ste_heslo"</a>
				  <input type="text" name="email" maxlength="50" size="50" placeholder="email"
							 value="email"/>
				  <input type="password" name="password" maxlength="50" size="50" placeholder="Heslo"
							 value="password"/>
				  <input type="submit" name="submit" value="Prihlasiť" />
			</h6>
		</form>




{/block}

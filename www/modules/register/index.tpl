{extends file="layout.tpl"}


{block name=title}Registrácia{/block}


{block name=content}

	<strong style="color:#CC0000;">
		<ul>
	    	{foreach $errors as $error}
	      		<li>{$error}</li>
	    	{/foreach}
	 	</ul>
	</strong>


	    <form method="post">
		  <table class="border0" style="text-align:center; padding-bottom:10px;">
				<tr>
				  <td><label for="firstname"></label></td>
				  <td><input type="text" name="firstname" id="firstname" size="20" placeholder="Meno"
							 maxlength="20" value="{$_POST.firstname}"/></td>
				</tr>
				<tr>
				  <td><label for="lastname"></label></td>
				  <td><input type="text" name="lastname" id="lastname" size="20" placeholder="Priezvisko"
							 maxlength="30" value="{$_POST.lastname}"/></td>
				</tr>
				<tr>
				  <td><label for="email"></label></td>
				  <td><input type="text" name="email" id="email" size="20" placeholder="E-mail"
							 maxlength="50" value="{$_POST.email}"/></td>
				</tr>								
				<tr>
				  <td><label for="password"></label></td>
				  <td><input type="password" name="password" id="password" size="20" placeholder="Heslo"
							 maxlength="50" value="{$_POST.password}"/></td>
				</tr>

				<tr>
				  <td><label for="school_id"></label></td>
				  <td>
					<select name="school_id" id="school_id" value="{$_POST.school_id}"/>
						<option value="0">Vyberte školu</option>
						{foreach $schools as $s}
							{if $s.school_id == $_POST.school_id} 
								<option selected="selected" value="{$s.school_id}">{$s.name}</option>
							{else} 
								<option value="{$s.school_id}">{$s.name}</option>
							{/if} 							
						{/foreach}	            
		          	</select>
				  </td>
				</tr>

		  </table>
				<input type="submit" name="submit" value="Registrovať"/>		  
    	</form>




{/block}

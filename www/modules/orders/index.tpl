{extends file="layout.tpl"}


{block name=title}Objednavky{/block}


{block name=content}


{if $_GLOBAL.module_attributes.0}
	{foreach $orders as $o}
	    	Datum: {$o.date}<br/>
	    	Menu: {$o.menu_id}<br/>
	    	Pocet: {$o.count}<br/>
	    <br/>
	{foreachelse}
		Wrong order_ID.
	{/foreach}
{else}
	{foreach $orders as $o}
		<a href="{$_GLOBAL.URL.orders}/{$o.order_id}">
	    	Datum: {$o.date}, Menu: {$o.menu_id}, Pocet: {$o.count}<br/>
		</a>
    	<br/>
    {foreachelse}
	No data.
	{/foreach}
{/if}




{/block}

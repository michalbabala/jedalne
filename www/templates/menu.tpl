{foreach $_MENU as $m}
  <a href="{$m.href}">{$m.text}</a>
{foreachelse}
  No menu found.
{/foreach}
<?php
// FROM HASH: e7433d14204a425da5acce9fdd25c29c
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->setPageParam('jsState.imgur', true);
	$__finalCompiled .= '

<div class="bbMediaWrapper">
	<blockquote class="imgur-embed-pub" lang="en" data-id="' . $__templater->escape($__vars['idRaw']) . '">
		<a href="https://imgur.com/' . $__templater->escape($__vars['idSlash']) . '" rel="external" target="_blank">https://imgur.com/' . $__templater->escape($__vars['idSlash']) . '</a>
	</blockquote>
</div>';
	return $__finalCompiled;
}
);
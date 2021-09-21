<?php
// FROM HASH: eee0bbc60a02bdfae6270b85588f73d6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="bbMediaWrapper">
	<div class="bbMediaWrapper-inner">
		<iframe src="https://www.youtube.com/embed/' . $__templater->escape($__vars['id']) . '?wmode=opaque' . ($__vars['start'] ? ('&start=' . $__templater->escape($__vars['start'])) : '') . ($__vars['list'] ? ('&list=' . $__templater->escape($__vars['list'])) : '') . '"
				width="560" height="315"
				frameborder="0" allowfullscreen="true"></iframe>
	</div>
</div>';
	return $__finalCompiled;
}
);
<?php
// FROM HASH: 4af041cb67b1d653874f880892f3fe45
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if (!$__vars['options']['advanced_mode']) {
		$__finalCompiled .= '
	<div class="block">
		<div class="block-container">
			';
		if ($__vars['title']) {
			$__finalCompiled .= '
				<h3 class="block-minorHeader">' . $__templater->escape($__vars['title']) . '</h3>
			';
		}
		$__finalCompiled .= '
			<div class="block-body block-row">
				' . $__templater->filter($__vars['template'], array(array('raw', array()),), true) . '
			</div>
		</div>
	</div>
';
	} else {
		$__finalCompiled .= '
	' . $__templater->filter($__vars['template'], array(array('raw', array()),), true) . '
';
	}
	return $__finalCompiled;
}
);
<?php
// FROM HASH: 24a91a88e4ddc4c9401bf01c70d99665
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['withRow']) {
		$__finalCompiled .= '
	' . $__templater->formRowIfContent($__templater->func('captcha', array(true, false)), array(
			'label' => ($__vars['phrase'] ? $__templater->escape($__vars['phrase']) : 'Verification'),
			'rowtype' => $__vars['rowType'],
		)) . '
';
	} else {
		$__finalCompiled .= '
	' . $__templater->func('captcha', array(true, false)) . '
';
	}
	return $__finalCompiled;
}
);
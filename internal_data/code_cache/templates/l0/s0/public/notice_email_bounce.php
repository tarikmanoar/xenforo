<?php
// FROM HASH: e51fcc5ceaf8909f660467d75c29364c
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'Attempts to send emails to ' . $__templater->escape($__vars['xf']['visitor']['email']) . ' have failed. Please update your email.' . '<br />
<a href="' . $__templater->func('link', array('account/email', ), true) . '">' . 'Update your contact details' . '</a>';
	return $__finalCompiled;
}
);
<?php
// FROM HASH: 75d46c4f8d10cd6aeeb9e6fddb937152
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Install official XenForo add-ons');
	$__finalCompiled .= '

';
	$__compilerTemp1 = array();
	if ($__templater->isTraversable($__vars['installableAddOns'])) {
		foreach ($__vars['installableAddOns'] AS $__vars['addOnId'] => $__vars['install']) {
			$__compilerTemp1[] = array(
				'name' => 'confirm_install[' . $__vars['addOnId'] . ']',
				'value' => $__vars['install']['version_id'],
				'label' => '
						' . $__templater->escape($__vars['install']['title']) . ' <span class="u-muted">' . $__templater->escape($__vars['install']['version_string']) . '</span>
					',
				'_type' => 'option',
			);
		}
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'One or more official XenForo add-ons are available to install.<br />
<br />
Select the add-ons you want to install below. The selected add-ons will be downloaded and the add-ons will be installed immediately.' . '
			', array(
	)) . '
			' . $__templater->formCheckBoxRow(array(
	), $__compilerTemp1, array(
		'label' => 'Installable add-ons',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'download',
		'submit' => 'Download and install' . $__vars['xf']['language']['ellipsis'],
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('tools/install-xf-add-on', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
}
);
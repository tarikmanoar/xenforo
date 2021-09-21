<?php
// FROM HASH: 23f235a00479a6383562c405a87da173
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if (!$__vars['attachment']) {
		$__finalCompiled .= trim('
	<a href="' . $__templater->func('link', array('canonical:attachments', array('attachment_id' => $__vars['id'], ), ), true) . '" target="_blank">' . 'View attachment ' . $__templater->escape($__vars['id']) . '' . '</a>
');
	} else if (($__vars['attachment']['is_video'] OR $__vars['attachment']['is_audio']) AND ($__vars['full'] AND $__vars['canView'])) {
		$__finalCompiled .= trim('
	<div class="mediaPlaceholder">' . 'Embedded media' . '</div>
');
	} else if (!$__vars['attachment']['has_thumbnail']) {
		$__finalCompiled .= trim('
	<a href="' . $__templater->func('link', array('canonical:attachments', $__vars['attachment'], array('hash' => $__vars['attachment']['temp_hash'], ), ), true) . '" target="_blank">' . 'View attachment ' . $__templater->escape($__vars['attachment']['filename']) . '' . '</a>
');
	} else {
		$__finalCompiled .= trim('
	<a href="' . $__templater->func('link', array('canonical:attachments', $__vars['attachment'], array('hash' => $__vars['attachment']['temp_hash'], ), ), true) . '"
		target="_blank"><img src="' . $__templater->escape($__vars['attachment']['thumbnail_url_full']) . '"
		class="bbImage"
		style="' . $__templater->escape($__vars['styleAttr']) . '"
		alt="' . $__templater->escape($__vars['alt']) . '"
		title="' . $__templater->escape($__vars['alt']) . '"
		width="' . $__templater->escape($__vars['attachment']['thumbnail_width']) . '" height="' . $__templater->escape($__vars['attachment']['thumbnail_height']) . '" /></a>
');
	}
	return $__finalCompiled;
}
);
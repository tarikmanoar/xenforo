<?php
// FROM HASH: 19b113dec5a06ef85f284511d71f8090
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->setPageParam('jsState.fbSdk', true);
	$__finalCompiled .= '

';
	if ($__vars['type'] == 'video') {
		$__finalCompiled .= '
	';
		$__vars['fbClass'] = 'fb-video';
		$__finalCompiled .= '
	';
		$__vars['fbHref'] = 'https://www.facebook.com/video.php?v=' . $__vars['id'];
		$__finalCompiled .= '
';
	} else {
		$__finalCompiled .= '
	';
		$__vars['fbClass'] = 'fb-post';
		$__finalCompiled .= '
	';
		$__vars['fbHref'] = 'https://www.facebook.com/' . $__vars['idPlain'];
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

<div class="bbMediaJustifier">
	<div class="' . $__templater->escape($__vars['fbClass']) . '"
		 data-href="' . $__templater->escape($__vars['fbHref']) . '"
		 data-width=""
		 data-show-text="true"
		 data-show-captions="true">
		<div class="fb-xfbml-parse-ignore">
			<a href="' . $__templater->escape($__vars['fbHref']) . '" rel="external" target="_blank">
				' . $__templater->fontAwesome('fab fa-facebook', array(
	)) . ' ' . $__templater->escape($__vars['fbHref']) . '
			</a>
		</div>
	</div>
</div>

';
	return $__finalCompiled;
}
);
<?php
// FROM HASH: 2bec7124a3c36639b20c069a7bd7b139
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// ##################### FILTERING #####################

.filterBlock
{
	padding: @xf-paddingMedium;
	font-size: @xf-fontSizeSmaller;
	float: right;
	.xf-contentBase();
	.xf-blockBorder();
	border-radius: @xf-blockBorderRadius;
	.m-clearFix();

	.filterBlock-input
	{
		width: 150px;
		display: inline;
		font-size: @xf-fontSizeSmaller;

		&.filterBlock-input--small
		{
			width: 100px;
		}
	}

	select.filterBlock-input
	{
		width: auto;
	}
}

.quickFilter
{
	position: relative;

	.input
	{
		width: 180px;
		font-size: @xf-fontSizeSmaller;
	}

	label
	{
		font-size: @xf-fontSizeSmaller;
	}

	input[type=checkbox]
	{
		.m-checkboxAligner();
	}

	.js-filterClear
	{
		color: @controlColor;

		&:hover
		{
			color: @controlColor--hover;
		}

		&:before
		{
			.m-faBase();
			.m-faContent(@fa-var-times);
		}
	}
}

.filterBar
{
	display: flex;
}

.filterBar-filters
{
	flex: 1 1 auto;

	display: flex;
	flex-wrap: wrap;
	row-gap: @xf-blockPaddingV;
	// column-gap: @xf-blockPaddingV;

	.m-listPlain();
}

.filterBar-filterToggle
{
	display: flex;
	text-decoration: none;
	color: inherit;
	padding: 1px 8px;
	border-radius: @xf-borderRadiusMedium;
	.m-transition();

	column-gap: 2px;
	margin-right: @xf-blockPaddingV;

	&:after
	{
		.m-faBase();
		font-size: 80%;
		vertical-align: bottom;
		.m-faContent(" @{fa-var-times}");
		opacity: .5;
		.m-transition(opacity);
		position: relative;
		bottom: -2px;
	}

	&:hover
	{
		text-decoration: none;

		&:after
		{
			opacity: 1;
		}
	}
}

.filterBar-filterToggle-label
{
	opacity: .75;
	margin-right: 2px;
}

.filterBar-filterToggle-value
{
	max-width: 120px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;

	&:not(:last-of-type):after
	{
		content: "' . $__templater->escape($__vars['xf']['language']['comma_separator']) . '";
	}
}

.filterBar-menuTrigger
{
	flex: 0 0 auto;
	margin-left: auto;
	white-space: nowrap;
	border-radius: @xf-borderRadiusMedium;
	text-decoration: none;
	padding: 1px  5px;

	&:after
	{
		.m-menuGadget();
	}
}

@media (max-width: @xf-responsiveMedium)
{
	.filterBar-filterToggle-label
	{
		display: none;
	}
}';
	return $__finalCompiled;
}
);
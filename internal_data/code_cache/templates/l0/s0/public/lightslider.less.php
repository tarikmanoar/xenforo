<?php
// FROM HASH: f82d913dcd8262cca1274ec8d68381b8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// NOTE: there are custom XF overrides at the bottom

/*! lightslider - v1.1.6 - 2016-10-25
* https://github.com/sachinchoolur/lightslider
* Copyright (c) 2016 Sachin N; Licensed MIT */
/** /!!! core css Should not edit !!!/**/

.lSSlideOuter {
    overflow: hidden;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}
.lightSlider:before, .lightSlider:after {
    content: " ";
    display: table;
}
.lightSlider {
    overflow: hidden;
    margin: 0;
}
.lSSlideWrapper {
    max-width: 100%;
    overflow: hidden;
    position: relative;
}
.lSSlideWrapper > .lightSlider:after {
    clear: both;
}
.lSSlideWrapper .lSSlide {
    -webkit-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
    -webkit-transition: all 1s;
    -webkit-transition-property: -webkit-transform,height;
    -moz-transition-property: -moz-transform,height;
    transition-property: transform,height;
    -webkit-transition-duration: inherit !important;
    transition-duration: inherit !important;
    -webkit-transition-timing-function: inherit !important;
    transition-timing-function: inherit !important;
}
.lSSlideWrapper .lSFade {
    position: relative;
}
.lSSlideWrapper .lSFade > * {
    position: absolute !important;
    top: 0;
    left: 0;
    z-index: 9;
    margin-right: 0;
    width: 100%;
}
.lSSlideWrapper.usingCss .lSFade > * {
    opacity: 0;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transition-duration: inherit !important;
    transition-duration: inherit !important;
    -webkit-transition-property: opacity;
    transition-property: opacity;
    -webkit-transition-timing-function: inherit !important;
    transition-timing-function: inherit !important;
}
.lSSlideWrapper .lSFade > *.active {
    z-index: 10;
}
.lSSlideWrapper.usingCss .lSFade > *.active {
    opacity: 1;
}
/** /!!! End of core css Should not edit !!!/**/

/* Pager */
.lSSlideOuter .lSPager.lSpg {
    margin: 10px 0 0;
    padding: 0;
    text-align: center;
}
.lSSlideOuter .lSPager.lSpg > li {
    cursor: pointer;
    display: inline-block;
    padding: 0 5px;
}
.lSSlideOuter .lSPager.lSpg > li a {
    background-color: #222222;
    border-radius: 30px;
    display: inline-block;
    height: 8px;
    overflow: hidden;
    text-indent: -999em;
    width: 8px;
    position: relative;
    z-index: 99;
    -webkit-transition: all 0.5s linear 0s;
    transition: all 0.5s linear 0s;
}
.lSSlideOuter .lSPager.lSpg > li:hover a, .lSSlideOuter .lSPager.lSpg > li.active a {
    background-color: #428bca;
}
.lSSlideOuter .media {
    opacity: 0.8;
}
.lSSlideOuter .media.active {
    opacity: 1;
}
/* End of pager */

/** Gallery */
.lSSlideOuter .lSPager.lSGallery {
    list-style: none outside none;
    padding-left: 0;
    margin: 0;
    overflow: hidden;
    transform: translate3d(0px, 0px, 0px);
    -moz-transform: translate3d(0px, 0px, 0px);
    -ms-transform: translate3d(0px, 0px, 0px);
    -webkit-transform: translate3d(0px, 0px, 0px);
    -o-transform: translate3d(0px, 0px, 0px);
    -webkit-transition-property: -webkit-transform;
    -moz-transition-property: -moz-transform;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.lSSlideOuter .lSPager.lSGallery li {
    overflow: hidden;
    -webkit-transition: border-radius 0.12s linear 0s 0.35s linear 0s;
    transition: border-radius 0.12s linear 0s 0.35s linear 0s;
}
.lSSlideOuter .lSPager.lSGallery li.active, .lSSlideOuter .lSPager.lSGallery li:hover {
    border-radius: 5px;
}
.lSSlideOuter .lSPager.lSGallery img {
    display: block;
    height: auto;
    max-width: 100%;
}
.lSSlideOuter .lSPager.lSGallery:before, .lSSlideOuter .lSPager.lSGallery:after {
    content: " ";
    display: table;
}
.lSSlideOuter .lSPager.lSGallery:after {
    clear: both;
}
/* End of Gallery*/

/* slider actions */
.lSAction > a {
    width: 32px;
    display: block;
    top: 50%;
    height: 32px;
    background-image: url(\'../img/controls.png\');
    cursor: pointer;
    position: absolute;
    z-index: 99;
    margin-top: -16px;
    opacity: 0.5;
    -webkit-transition: opacity 0.35s linear 0s;
    transition: opacity 0.35s linear 0s;
}
.lSAction > a:hover {
    opacity: 1;
}
.lSAction > .lSPrev {
    background-position: 0 0;
    left: 10px;
}
.lSAction > .lSNext {
    background-position: -32px 0;
    right: 10px;
}
.lSAction > a.disabled {
    pointer-events: none;
}
.cS-hidden {
    height: 1px;
    opacity: 0;
    filter: alpha(opacity=0);
    overflow: hidden;
}


/* vertical */
.lSSlideOuter.vertical {
    position: relative;
}
.lSSlideOuter.vertical.noPager {
    padding-right: 0px !important;
}
.lSSlideOuter.vertical .lSGallery {
    position: absolute !important;
    right: 0;
    top: 0;
}
.lSSlideOuter.vertical .lightSlider > * {
    width: 100% !important;
    max-width: none !important;
}

/* vertical controlls */
.lSSlideOuter.vertical .lSAction > a {
    left: 50%;
    margin-left: -14px;
    margin-top: 0;
}
.lSSlideOuter.vertical .lSAction > .lSNext {
    background-position: 31px -31px;
    bottom: 10px;
    top: auto;
}
.lSSlideOuter.vertical .lSAction > .lSPrev {
    background-position: 0 -31px;
    bottom: auto;
    top: 10px;
}
/* vertical */


/* Rtl */
.lSSlideOuter.lSrtl {
    direction: rtl;
}
.lSSlideOuter .lightSlider, .lSSlideOuter .lSPager {
    padding-left: 0;
    list-style: none outside none;
}
.lSSlideOuter.lSrtl .lightSlider, .lSSlideOuter.lSrtl .lSPager {
    padding-right: 0;
}
.lSSlideOuter .lightSlider > *,  .lSSlideOuter .lSGallery li {
    float: left;
}
.lSSlideOuter.lSrtl .lightSlider > *,  .lSSlideOuter.lSrtl .lSGallery li {
    float: right !important;
}
/* Rtl */

@-webkit-keyframes rightEnd {
    0% {
        left: 0;
    }

    50% {
        left: -15px;
    }

    100% {
        left: 0;
    }
}
@keyframes rightEnd {
    0% {
        left: 0;
    }

    50% {
        left: -15px;
    }

    100% {
        left: 0;
    }
}
@-webkit-keyframes topEnd {
    0% {
        top: 0;
    }

    50% {
        top: -15px;
    }

    100% {
        top: 0;
    }
}
@keyframes topEnd {
    0% {
        top: 0;
    }

    50% {
        top: -15px;
    }

    100% {
        top: 0;
    }
}
@-webkit-keyframes leftEnd {
    0% {
        left: 0;
    }

    50% {
        left: 15px;
    }

    100% {
        left: 0;
    }
}
@keyframes leftEnd {
    0% {
        left: 0;
    }

    50% {
        left: 15px;
    }

    100% {
        left: 0;
    }
}
@-webkit-keyframes bottomEnd {
    0% {
        bottom: 0;
    }

    50% {
        bottom: -15px;
    }

    100% {
        bottom: 0;
    }
}
@keyframes bottomEnd {
    0% {
        bottom: 0;
    }

    50% {
        bottom: -15px;
    }

    100% {
        bottom: 0;
    }
}
.lSSlideOuter .rightEnd {
    -webkit-animation: rightEnd 0.3s;
    animation: rightEnd 0.3s;
    position: relative;
}
.lSSlideOuter .leftEnd {
    -webkit-animation: leftEnd 0.3s;
    animation: leftEnd 0.3s;
    position: relative;
}
.lSSlideOuter.vertical .rightEnd {
    -webkit-animation: topEnd 0.3s;
    animation: topEnd 0.3s;
    position: relative;
}
.lSSlideOuter.vertical .leftEnd {
    -webkit-animation: bottomEnd 0.3s;
    animation: bottomEnd 0.3s;
    position: relative;
}
.lSSlideOuter.lSrtl .rightEnd {
    -webkit-animation: leftEnd 0.3s;
    animation: leftEnd 0.3s;
    position: relative;
}
.lSSlideOuter.lSrtl .leftEnd {
    -webkit-animation: rightEnd 0.3s;
    animation: rightEnd 0.3s;
    position: relative;
}
/*/  GRab cursor */
.lightSlider.lsGrab > * {
  cursor: -webkit-grab;
  cursor: -moz-grab;
  cursor: -o-grab;
  cursor: -ms-grab;
  cursor: grab;
}
.lightSlider.lsGrabbing > * {
  cursor: move;
  cursor: -webkit-grabbing;
  cursor: -moz-grabbing;
  cursor: -o-grabbing;
  cursor: -ms-grabbing;
  cursor: grabbing;
}






// XENFORO EXTENSIONS AND OVERRIDES

.lSSlideOuter .lSPager.lSpg
{
    line-height: 1;
}

.lSSlideOuter .lSPager.lSpg > li
{
    height: 20px;
    line-height: 20px;
}

.lSSlideOuter .lSPager.lSpg > li a
{
    position: relative;
    top: -2px;
    background-color: @xf-textColor;
    opacity: .3;
}

.lSSlideOuter .lSPager.lSpg > li:hover a,
.lSSlideOuter .lSPager.lSpg > li.active a
{
    background-color: @xf-linkColor;
    opacity: 1;
}

@actionIconColor: white;
@actionBorderColor: black;
@actionBorderWidth: 0.75px;

.lSAction > a
{
    background-image: none;
    text-decoration: none;
    line-height: 32px;
    font-size: 2em;

    color: @actionIconColor;
    opacity: 0.6;

    &.lSNext
    {
        text-align: right;
    }

    &.lSPrev
    {
        text-align: left;
    }

    &:after
    {
        .m-faBase();
        .m-faContent(@fa-var-chevron-right, .63em);
        .m-textOutline();
    }
}

.lSAction > a.lSNext:after
{
 	.m-faContent(@fa-var-chevron-right, .63em, ltr);
    .m-faContent(@fa-var-chevron-left, .63em, rtl);
}
.lSAction > a.lSPrev:after
{
    .m-faContent(@fa-var-chevron-left, .63em, ltr);
	.m-faContent(@fa-var-chevron-right, .63em, rtl);
}';
	return $__finalCompiled;
}
);
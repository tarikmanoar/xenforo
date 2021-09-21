<?php

namespace XF\Pub\Route;

use function intval;

class Category
{
	public static function build(&$prefix, array &$route, &$action, &$data, array &$params, \XF\Mvc\Router $router)
	{
		if ($params || $action)
		{
			return null;
		}

		if ($data && !empty($data['node_id']) && empty($data['depth']) && !\XF::options()->categoryOwnPage)
		{
			$route = (\XF::options()->forumsDefaultPage == 'forums' ? 'forums' : 'forums/list');

			$link = $router->buildLink('nopath:' . $route);

			if ($link === '.')
			{
				$link = '';
			}

			$title = $router->prepareStringForUrl($data['title'], true) . '.' . intval($data['node_id']);
			return new \XF\Mvc\RouteBuiltLink($link . '#' . $title);
		}

		return null; // default processing otherwise
	}
}
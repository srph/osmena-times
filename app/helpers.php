<?php

/**
 * Returns appropriate html class of active
 * if true
 *
 * @param 	string 	$route
 * @return 	string|void
 */
function activeInRoute($route = '')
{
	if ( Request::is($route) )
	{
		return 'class="active"';
	}
}
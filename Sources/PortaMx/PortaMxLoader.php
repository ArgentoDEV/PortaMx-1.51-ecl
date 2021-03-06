<?php
/**
* \file PortaMxLoader.php
* The main loader for PortaMx.
*
* \author PortaMx - Portal Management Extension
* \author Copyright 2008-2012 by PortaMx - http://portamx.com
* \version 1.51
* \date 31.08.2012
*/

if(!defined('SMF'))
	die('This Portamx file can\'t be run without SMF');

// load portal functions only if the portal enabled
if(empty($modSettings['pmxportal_disabled']))
{
	require_once($sourcedir .'/PortaMx/PortaMx.php');
	require_once($sourcedir .'/PortaMx/PortaMxIntegrate.php');
	require_once($sourcedir .'/PortaMx/SubsCache.php');
	require_once($sourcedir .'/PortaMx/LoadData.php');

	// load SEF engine if enabled
	if(empty($modSettings['pmxsef_disabled']) && isset($modSettings['integrate_pre_load']) && strpos($modSettings['integrate_pre_load'], 'pmxsef_convertSEF') !== false)
		require_once($sourcedir .'/PortaMx/PortaMxSEF.php');
}

// Load essentiell functions
require_once($sourcedir .'/PortaMx/SubsCompat.php');
?>
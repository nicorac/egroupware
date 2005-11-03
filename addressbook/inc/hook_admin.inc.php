<?php
	/**************************************************************************\
	* eGroupWare                                                               *
	* http://www.egroupware.org                                                *
	* Written by Joseph Engo <jengo@phpgroupware.org>                          *
	* --------------------------------------------                             *
	*  This program is free software; you can redistribute it and/or modify it *
	*  under the terms of the GNU General Public License as published by the   *
	*  Free Software Foundation; either version 2 of the License, or (at your  *
	*  option) any later version.                                              *
	\**************************************************************************/

	// $Id$
	// $Source$

	// Only Modify the $file and $title variables.....
	$title = $appname;
	$file = Array(
		'Site Configuration' => $GLOBALS['egw']->link('/index.php','menuaction=admin.uiconfig.index&appname=' . $appname),
		'Edit custom fields' => $GLOBALS['egw']->link('/index.php','menuaction=admin.customfields.edit&appname='. $appname),
		'Global Categories' => $GLOBALS['egw']->link('/index.php','menuaction=admin.uicategories.index&appname=addressbook')
	);
	//Do not modify below this line
	display_section($appname,$title,$file);
?>

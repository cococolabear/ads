<?php
/**
 * Copyright (C) 2006-2009 Gregory Meiste
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @package Ads
 * @author Greg Meiste <greg.meiste+github@gmail.com>
 */

if (!defined('PHPWS_SOURCE_DIR'))
{
    include '../../config/core/404.html';
    exit();
}

if (isset($_REQUEST['adview']))
{
    $ad = new Ads_Ad($_REQUEST['adview']);
    $ad->bannerImpression();
}
else if (isset($_REQUEST['adclick']))
{
    $ad = new Ads_Ad($_REQUEST['adclick']);
    $ad->click();
}
else
{
    PHPWS_Core::initModClass('ads', 'admin.php');
    Ads_Admin::action();
}

?>
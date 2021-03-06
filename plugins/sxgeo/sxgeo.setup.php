<?php
/* ====================
[BEGIN_COT_EXT]
Code=sxgeo
Name=SxGeo IP base
Category=mobile-geolocation
Description=Integration of SxGeo IP base
Version=1.0.1-2.1
Date=2013-Oct-07
Author=Andrey Matsovkin, sypexgeo.net/
Copyright=Copyright (c) 2011-2013, Andrey Matsovkin, http://sypexgeo.net/
Notes=Original GeoIP DB created by http://sypexgeo.net/ and distributed under BSD licence. <br />If your enjoy my plugin please consider donating to help support future developments. <b>Thanks!</b> <br /><a href="mailto:macik.spb@gmail.com">macik.spb@gmail.com</a>
Auth_guests=R1
Lock_guests=W2345A
Auth_members=RW1
Lock_members=2345
Recommends_modules=
Recommends_plugins=
Requires_modules=
Requires_plugins=
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
autoload=01:radio:0,1:1:Autoload mode
bulkrequests=02:radio:0,1:1:Enable `bulk requests` mode
debuglocal=04:radio:0,1:0:Use sample data for debug in localhost (127.0.0.1)
[END_COT_EXT_CONFIG]
==================== */

/**
 * SxGeo IP base plugin for Cotonti CMF
 *
 * @package sxgeo
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 * Made with «Extension Template» (https://github.com/macik/cot-extension_template)
 *
 */

defined('COT_CODE') or die('Wrong URL.');
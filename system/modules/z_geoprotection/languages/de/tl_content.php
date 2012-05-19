<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  MEN AT WORK 2011
 * @package    Language
 * @license    GNU/LGPL 
 * @filesource
 */

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['gp_protection_legend']   = 'Geoprotection';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['gp_protected']           = array('Geoprotection aktivieren','Das Inhaltselement nur in bestimmten Ländern anzeigen oder verstecken.');
$GLOBALS['TL_LANG']['tl_content']['gp_mode']                = array('Sichtbarkeit','Bitte wählen Sie ob das Inhaltselement angezeigt oder versteckt werden soll.');
$GLOBALS['TL_LANG']['tl_content']['gp_countries']           = array('Länder','Bitte wählen Sie ein oder mehrere Länder aus.');
$GLOBALS['TL_LANG']['tl_content']['gp_group_id']            = array('Gruppe','Gruppe des Elements.');
$GLOBALS['TL_LANG']['tl_content']['gp_fallback']            = array('Fallback-Element','Dieses Element ist ein Fallback-Element für die Gruppe. Das Fallback greift, wenn das Land des Users nicht in der Gruppe vorhanden ist.');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_content']['gp_hide']                = 'Verstecken';
$GLOBALS['TL_LANG']['tl_content']['gp_show']                = 'Anzeigen';
$GLOBALS['TL_LANG']['tl_content']['gp_newGroup']            = 'Neue Gruppe';
$GLOBALS['TL_LANG']['tl_content']['gp_group']               = 'Gruppe';
<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Nie je možné vytvoriť databázu.</p>
<p>Zadaná databáza neexistuje a používateľ nemá oprávnenie pre vytvorenie databázy.</p>
<p>Administrátor portálu by mal overiť konfiguráciu databázy.</p>';
$string['cannotcreatelangdir'] = 'Nie je možné vytvoriť priečinok pre jazykové súbory';
$string['cannotcreatetempdir'] = 'Nie je možné vytvoriť dočasný adresár.';
$string['cannotdownloadcomponents'] = 'Nie je možné stiahnuť komponenty.';
$string['cannotdownloadzipfile'] = 'Nie je možné stiahnuť súbor ZIP.';
$string['cannotfindcomponent'] = 'Komponent nenájdený.';
$string['cannotsavemd5file'] = 'Nie je možné uložiť súbor MD5.';
$string['cannotsavezipfile'] = 'Nie je možné uložiť súbor ZIP.';
$string['cannotunzipfile'] = 'Nie je možné dekomprimovať súbor';
$string['componentisuptodate'] = 'Komponent je aktuálny.';
$string['dmlexceptiononinstall'] = '<p>Došlo k chybe databázy [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Kontrola stiahnutého súboru bola neúspešná';
$string['invalidmd5'] = 'Kontrolovaná premenná bola nesprávna - skúste znova';
$string['missingrequiredfield'] = 'Chýba niektoré z povinných polí';
$string['remotedownloaderror'] = 'Stiahnutie komponentu na server zlyhalo, skontrolujte nastavenia proxy, doporučené je PHP rozšírenie cURL. <br /><br />Musíte stiahnuť súbor <a href="{$a->url}">{$a->url}</a> manuálne, skopírovať ho do "{$a->dest}" na serveri a rozzipovať ho tam.';
$string['wrongdestpath'] = 'Chybné umiestnenie cieľa';
$string['wrongsourcebase'] = 'Chybné základné URL serveru';
$string['wrongzipfilename'] = 'Chybné meno súboru ZIP';

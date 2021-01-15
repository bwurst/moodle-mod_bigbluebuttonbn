<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language File.
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 * @author    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 */
defined('MOODLE_INTERNAL') || die();

$string['bigbluebuttonbn:guestlink_view'] = 'Den Gäste-Einladungslink und den Zutrittscode eines BigBlueButton-Raums sehen.';
$string['bigbluebuttonbn:guestlink_change_password'] = 'Den Zutrittscode eines per Link freigegebenen BigBlueButton-Raums setzen/ändern.';
$string['config_participant_guestlink'] = 'Ermögliche Einladungslinks';
$string['config_participant_guestlink_description'] = 'Erlaube einem Moderator, einen Zugriffslink für unangemeldete Gäste zu erzeugen.';
$string['config_custom_logo'] = 'Logo für die Seite des externen Einladungslinks.';
$string['config_custom_logo_description'] = 'Sie können hier das Logo festlegen, das auf der Seite erscheint, die mit dem Einladungslink angezeigt wird. Standard ist das BigBlueButton-Logo.';

$string['mod_form_block_guestlink'] = 'Einladungslink für externe Gäste';
$string['mod_form_field_guestlinkenabled'] = 'Erzeuge einen Einladungslink für Gäste ohne Moodle-Zugang.';

$string['guestlink_form_guestpass_info'] = 'Geben Sie den Zutrittscode dieses Raums ein.';
$string['guestlink_form_guestname_info'] = 'Geben Sie Ihren Namen ein!';
$string['guestlink_form_join_button'] = 'Start';
$string['guestlink_form_join_welcome'] = 'Sie wurden zu einem Meeting eingeladen!';
$string['guestlink_form_join_wrong_password'] = 'Falsches Passwort!';
$string['guestlink_form_join_no_username'] = 'Bitte geben Sie Ihren Namen ein!';
$string['guestlink_form_join_waiting'] = 'Dieses Meeting wurde noch nicht gestartet. Sie werden automatisch angemeldet, sobald das Meeting beginnt.';
$string['guestlink_form_noname_warning'] = 'Bitte geben Sie Ihren Namen an!';
$string['guestlink_form_noaccescode_warning'] = 'Bitte geben Sie das Passwort für diesen Raum ein.';
$string['guestlink_form_guestlink_disabled'] = 'Der Administrator hat den Gastzugriff nicht freigeschaltet.';
$string['guestlink_form_guestlink_disabled_instance'] = 'Für diesen Raum wurde der Gastzugriff nicht erlaubt.';

$string['view_guestlink_label'] = 'Einladungslink für externe Gäste:';
$string['view_guestlink_password_label'] = 'Passwort:';
$string['view_guestlink_password_no_password_set'] = 'Klicken Sie rechts um ein Passwort zu erzeugen.';

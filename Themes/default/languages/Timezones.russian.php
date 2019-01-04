<?php
// Version: 2.1 RC1; Time zone descriptions

/**
 * This file defines custom descriptions for certain time zones to be used in
 * the time zone select menu, calendar event info, etc.
 *
 * It is not necessary to define a custom description for every time zone. By
 * default SMF will populate the description with a list of locations (usually
 * cities) that are in the given time zone, so a custom description is only
 * needed if the default description doesn't work well in a particular case.
 *
 * Translators do not need to use the same list of locations that the English
 * version uses. If you need to add, replace, or remove locations in order to
 * meet the needs of your language, SMF will handle your changes gracefully.
 *
 * HOW THIS FILE WORKS:
 *
 * There are three sections to this file. The first two sections use the $tztxt
 * variable, and the third uses the $txt variable.
 *
 * The first section uses this format:
 *
 *     $tztxt['America/Anchorage'] = 'Alaska';
 *
 * This tells SMF (1) to use 'America/Anchorage' as the specific location to
 * represent all locations that use the same time zone rules that Anchorage
 * does, and (2) to use 'Alaska' as the description string to show the user in
 * the select menu.
 *
 * The second section uses this format:
 *
 *     $tztxt['Europe/London'] = '';
 *
 * This tells SMF (1) to use 'Europe/London' as the specific location to
 * represent all locations that use the same time zone rules that London does,
 * and (2) to place London first in the list of locations used as the
 * description string shown to the user in the select menu.
 *
 * The third section uses this format:
 *
 *     $txt['America/Adak'] = 'Aleutian Islands';
 *
 * This simply tells SMF to replace 'Adak' with 'Aleutian Islands' anywhere it
 * might be used, including in the select menu, on the calendar, in event info
 * in a topic, etc. It does not tell SMF anything in particular about where or
 * how it should use the 'America/Adak' location.
 */

global $tztxt;

// Descriptions for entire time zones to use instead of a list of locations
$tztxt['UTC'] = 'Всемирное координированное время';
$tztxt['America/Anchorage'] = 'Аляска';
$tztxt['America/Los_Angeles'] = 'Тихоокеанский часовой пояс (США и Канада)';
$tztxt['America/Denver'] = 'Горное время (США и Канада)';
$tztxt['America/Phoenix'] = 'Горное время (без летнего времени)';
$tztxt['America/Chicago'] = 'Центральное время (США и Канада)';
$tztxt['America/Belize'] = 'Центральное время (без летнего времени)';
$tztxt['America/New_York'] = 'Восточное время (США и Канада)';
$tztxt['America/Jamaica'] = 'Восточное время (без летнего времени)';
$tztxt['America/Halifax'] = 'Атлантическое время (Канада)';
$tztxt['America/Anguilla'] = 'Атлантическое время (без летнего времени)';
$tztxt['America/Sao_Paulo'] = 'Время Бразилии';
$tztxt['America/Araguaina'] = 'Время Бразилии (без летнего времени)';
$tztxt['Atlantic/Reykjavik'] = 'Среднее время по Гринвичу (без летнего времени)';
$tztxt['Europe/Berlin'] = 'Центральноевропейское время';
$tztxt['Africa/Khartoum'] = 'Восточноафриканское время';
$tztxt['Europe/Helsinki'] = 'Восточноевропейское время';
$tztxt['Asia/Riyadh'] = 'Арабское время';

// Use a list of locations as the description, but force the named one to always be first
$tztxt['Europe/Kaliningrad'] = 'Калининград';
$tztxt['Europe/Moscow'] = 'Москва, Санкт-Петербург, Волгоград';
$tztxt['Asia/Baku'] = 'Астрахань, Ульяновск, Ижевск, Самара, Саратов';
$tztxt['Asia/Yekaterinburg'] = 'Екатеринбург';
$tztxt['Asia/Omsk'] = 'Омск';
$tztxt['Asia/Krasnoyarsk'] = 'Красноярск, Новосибирск, Томск';
$tztxt['Asia/Irkutsk'] = 'Иркутск';
$tztxt['Asia/Chita'] = 'Чита, Якутск';
$tztxt['Asia/Vladivostok'] = 'Владивосток';
$tztxt['Asia/Magadan'] = 'Магадан, Сахалин';
$tztxt['Asia/Kamchatka'] = 'Петропавловск-Камчатский';

// Custom descriptions for individual locations
$txt['Asia/Kolkata'] = 'Индия';

?>
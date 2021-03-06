<?php // $Id$

@define('PLUGIN_IPV6_NAME', 'IPv6-Check');
@define('PLUGIN_IPV6_DESC', 'Dieses Plugin zeigt in einem Sidebar-Element an, mit welcher IP-Version (IPv4 oder IPv6) der Besucher die Website aufgerufen hat.');
@define('PLUGIN_IPV6_CONFIG_TITLE', 'Titel des Sidebar-Elements');
@define('PLUGIN_IPV6_CONFIG_TITLE_DESC', 'Text, der als Titel des Sidebar-Elements angezeigt werden soll');
@define('PLUGIN_IPV6_CONFIG_SUCCESS_MESSAGE', 'Info-Text f�r verwendete IP-Version');
@define('PLUGIN_IPV6_CONFIG_SUCCESS_MESSAGE_DESC', 'Text f�r die Angabe der verwendeten IP-Version. Als Platzhalter f�r die IP-Version kann an der gew�nschten Stelle "%s" (ohne Anf�hrungszeichen!) eingef�gt werden. Wenn nicht angegeben, wird ein sprachspezifischer Standardtext verwendet.');
@define('PLUGIN_IPV6_CONFIG_SUCCESS_MESSAGE_DEFAULT', 'Sie haben diese Website via %s aufgerufen!');
@define('PLUGIN_IPV6_CONFIG_ERROR_MESSAGE', 'Fehlermeldung, falls IP-Version nicht ermittelt werden kann');
@define('PLUGIN_IPV6_CONFIG_ERROR_MESSAGE_DESC', 'Falls die verwendete IP-Version einmal nicht ermittelt werden k�nnen sollte, wird diese Nachricht angezeigt. Wenn nicht angegeben, wird ein sprachspezifischer Standardtext verwendet.');
@define('PLUGIN_IPV6_CONFIG_ERROR_MESSAGE_DEFAULT', 'Leider konnte nicht ermittelt werden, welche IP-Version beim Aufruf der Website verwendet wurde!');
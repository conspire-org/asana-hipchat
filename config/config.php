<?php
/**
 * config sample file
 * you have to provide your own configuration and name it config.php
 *
 * @author		André Wiedemann (andre@hikewith.me)
 * @package 	asana-hipchat
 * @copyright 	2014 hikewith.me
 * @version 	1.0
  */

/**
 * Asana configuration
 */
// api key
define('ASANA_API_KEY', '2tjnBYwC.4psrcW9gtLFuO9mBUt7pHi8');

// asana has a request limit of approximatly 100 repquest per minute,
// so we have to do a sleep between calls
define('ASANA_SLEEP_INTERVAL', 1);

// if workspace id is empty, it will check all workspaces
/**
 * @todo implement this feature
 */
define('ASANA_WORKSPACE_ID', '8708190234910');

// space seperated Asana Project Ids
// ex. xxx yyy zzz
define('ALLOWED_PROJECTS', NULL);

/**
 * hipchat configuration
 */
// api_key
define('HIPCHAT_API_KEY', '379d21935bfc94a27ce7240c3ad9e1');

// room_id
define('HIPCHAT_API_ROOM', 280434);

// turn notifications on and off
define('HIPCHAT_NOTIFICATIONS', true);

// hipchat name of notifier
define('HIPCHAT_NOTIFIER', 'Asana');


/**
 * script configuration
 */
define('SQLITE_DATA_FILE', BASE_DIR . '/db/asana.sqlite');

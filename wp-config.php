<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */


<<<<<<< HEAD
/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123456');

/** Имя сервера MySQL */
//define('DB_HOST', 'VH247.spaceweb.ru');
define('DB_HOST', '192.168.1.192:3308');

/** Кодировка базы данных для создания таблиц. */
=======

define('DB_NAME', 'kvsemeno83');
define('DB_USER', 'kvsemeno83');
define('DB_PASSWORD', 'a123456a');
define('DB_HOST', 'VH247.spaceweb.ru');
>>>>>>> d4a9f11935fbb9431b2c276feb1057febbe08624
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


// // 
// define('DB_NAME', 'kvsemeno83'); 
// define('DB_USER', 'root'); 
// define('DB_PASSWORD', ''); 
// define('DB_HOST', 'localhost:3308'); 
// //define('DB_HOST', '192.168.1.192:3308'); 

// define('DB_CHARSET', 'utf8'); 
// define('DB_COLLATE', ''); 
// define('DB_CHARSET', 'utf8'); 
// define('DB_COLLATE', ''); 


/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}/p>Qduu-YTYN1D&RNCUb8yi$ )M_z>QJi)`N Z+yp+f:z?+-0Ps,qoo0JA{wkPL');
define('SECURE_AUTH_KEY',  'Vco3{rT8X3romHv-<r_jFa.}bWO8 XdNp~.-gEq`WU_2wiTdyd9~6ig@ERdBeW0{');
define('LOGGED_IN_KEY',    '^1=mG*&-?~u^9y6/)u6q5j[z!CI{a17CQ4$wqf:(Jw;X6j,0+A)z+Bh5|%3z0tcv');
define('NONCE_KEY',        '|f447iJ2/]5Blj,%Z+-Y|n>b0tNA}oI,eiwjMLL;:vaF~>fuPnJWp4i&d~24-9dv');
define('AUTH_SALT',        'kp*#sEom-PRKAE>*WXEpqTq}4o_LSko~YxawQGg)NQKnu.wD~G_{|W:P%K8E&j(?');
define('SECURE_AUTH_SALT', 'bih3,|!|QSqzP-Hs=+s,|w*~z!/+;dx]qBV%K4piv5d^s2/Em#vX$>]~A==wnU*?');
define('LOGGED_IN_SALT',   'B?AS%BO+2329i*.;GJ@d}+Hx-~7S:~Q+N]7NJ^w#}!x+DtE$)zO0lABu%d5}R5Yg');
define('NONCE_SALT',       '3)Lq?_s/?-45zXBT(Jk,~su[u}@#;BezqgVz,Q5bQojW WbFZQ)=tm{|hf7SRf(-');


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'host1344755_nlc');

/** Имя пользователя MySQL */
define('DB_USER', 'host1344755_nlc');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'SPm3hU6G');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

define( 'WPCF7_AUTOP', false );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*2[4{ydkMk!ceuchk)PJG7mcMIY^MNwb PDihSyq}?1n#b;n>+/, 05:KG|EgeWN');
define('SECURE_AUTH_KEY',  '`P1MuqF,sts-a{H=9hj^<FFNJ^B]]lDM>[Y<8VKpv&W+jw<~g=Y94u=%lOq ^U>9');
define('LOGGED_IN_KEY',    'df;s@WM@sXl7:]rnVzd~1+el/0Zh~b<Avb:}XHtVvAib05HH~6~9$ic?C.3`?$no');
define('NONCE_KEY',        'dl9aXK%Z*IBc?)b$tw!rbT;Pr=Zu|SWFZDZ|t!GVP8qO{w1#/$=Y,^=3XW@}GtL9');
define('AUTH_SALT',        '$qJ~q@<KF3D6D6Bm^Bt(tu :CC7|VzEq+$mHpLg|jsKRa`Q!BYGJ~UuB$y{S,cJU');
define('SECURE_AUTH_SALT', 'YckFG-UJ9VZ]OKw#1;6L.Pm@Qsk-t8I=[Grb/Ryt*{(h:?i73FnZsU#Vvw?9QB6o');
define('LOGGED_IN_SALT',   'M1(j2(t<Z$$[oR=QsOU(o^iCp3UgGJy2#vxf.^rQEa9 r<O>l-QwRlWnc_s=e2pD');
define('NONCE_SALT',       'U{[ 4G@QeSA[6J9MAhZmBdF[Rv?b6IU42!Hl$~#U[fpJ5h&w#1O 25m5CzF6>!9y');

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

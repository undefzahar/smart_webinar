<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/zahar/Sites/localhost/wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nK}#gZ{fW.YHBaje~+z9Xh6S3,SlP#PcYgNu.h]qo|+3krGm=ZhJ`a,xF,l`9.h2' );
define( 'SECURE_AUTH_KEY',  'vsnzMq8_NWT<SihbS;W-Iw^]H~|sGpeUG{BRp?%9K+Xd,!#Hq`dlWsaBQKzC2!E8' );
define( 'LOGGED_IN_KEY',    '>U4kBF{YmRJ=,=t0i`691Rv79O?=/rJPyQ``>[FQ_rY^oPKCw1cR`_g+!Qg}Q+~I' );
define( 'NONCE_KEY',        '`/fSF__GGZ m9QO=LJhYELC<s*ye!]~E_vR5@y>z5b@f~!Br).+Sv}/_l<SiSh0`' );
define( 'AUTH_SALT',        '6Am~Pb:6C(Zk4.#[-Bs0L;p cdiI@GS%i{.;Yv#?pj,-TXM=nKd`aO1-< ]TTt>}' );
define( 'SECURE_AUTH_SALT', 'bCU<|]1IIcR~9JIZra=>t[{h~vqNsBY7o7>nfRknFOVF5t$(VK%c^dKdOk9 P~^{' );
define( 'LOGGED_IN_SALT',   'y/_=g4`zL8EPkymabd!&L;MZYV#P1/~5`DkvkdsFP4ALf/W3VH3ZCdZf%c!qk]RV' );
define( 'NONCE_SALT',       '5iA<G?//0$`z3yZSk*!Bkty^Q$oZF$QOo+[3^K%5OM13Cofu_OO1pwoWH!%ei`q5' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

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
define('DB_NAME', 'webforworld');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E{KXt~j96@VjKX#[5J~Wu4VS96lzew4a](n<0aYVP_&.Bx?5-jm5F8Gqq%BMG4|8');
define('SECURE_AUTH_KEY',  'J/61SSO,v{+|`ku*4N3sE<p;4tz]C[lI*4NL+Wxz/3987Iuy3Zeqcwn)44M4.-54');
define('LOGGED_IN_KEY',    'WS|ws{sebzG#Mpht(hgOES/ZVs&_s8[*mqUV<lkRvI&/e.$W MX %t]VoZ,.Y/D%');
define('NONCE_KEY',        'H$Z%ViBmN_P|nC=4q9g-{/devoro5?OzeG&dk@kR*>Q.aZhXUR1Bg-Fn_y&dGpZj');
define('AUTH_SALT',        'NukiE#kmEBr`ypF,M6K&RrZ^s?#*5cn{n;Vyr2Hhp+wpy5Rdw m:r^$AK8)XIYXF');
define('SECURE_AUTH_SALT', 'nV7Z2@6z?/f,}jEX%,?%_-i?X}$uwyg&pm~NW1=pvi ._54GL`5 Cl)WWp]%i4OQ');
define('LOGGED_IN_SALT',   'uZDwxxO{^Y4UzBzrAxb>X:mDEL&f:t?lB6bT2Fk+g|kLp%9jRUSXQo`~*?F!n{&9');
define('NONCE_SALT',       '~Frd9qa TG<!?Jj5>o^AY>k jh=X}o$+0<x(z24?k3a,PT7.-$cHD}w+/^S2U;SI');

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

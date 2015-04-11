<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'geekhub_exam_zagorodnyaya');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ':!;v<{k7,2oSARw96zr7Z,+u.yxZ:81C%~|irzdFo7{km+Jxj3-UoU-|G,tG&kwt');
define('SECURE_AUTH_KEY',  'IQ|$1!qqHA+P<gO#*y+0A:0f7z?Id+Y+)hlpA!):?hmq9+%]/K9=B <FxR6o$/[C');
define('LOGGED_IN_KEY',    '8HSt:fy>psHamq%>E]k)hYZ#D[P%a#dkME)|j~{|6ZKAb[:Tu|7OD97]_{1nq sO');
define('NONCE_KEY',        'H^+.[YH5uL|v)gtAI(}ns>5bv2@z?W)6bv&3vrIv[y*% Qhba;ZBT5_<E<@y-f+_');
define('AUTH_SALT',        '_?[P$*:7_%B$x_%d3R]d90~UETI[|c2Z$cG|@G~.|gq|M-4j,}*:CEa-m- +PMy+');
define('SECURE_AUTH_SALT', '}8xX2gvYdi2]QY3[7Q$)2U(bK:|s$uo&*Z-40gKQRq$}2]1g.<5zJ)Z/tnC3;hhl');
define('LOGGED_IN_SALT',   '-AL_zEvfn[-T|7t-)qX+vTM?B[Dqxq-W_z@c jg@60m?=fZ2t}kP%=?oE!qbq{|{');
define('NONCE_SALT',       '-;G101 -V1=]}uyS*Sen2l=sM&,JBIuB:^*evJ{XQ;{0*3Ix|Bsd[pgr~rHd{1qO');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

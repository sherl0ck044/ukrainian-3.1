<?php
/**
*
* mcp [Ukrainian]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'				=> 'Дія',
	'ACTION_NOTE'			=> 'Дія/Примітка',
	'ADD_FEEDBACK'			=> 'Додати замітку про користувача',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Для додавання нотатки, будь ласка, заповніть наступну форму. Використовуйте тільки звичайний текст; HTML, BBCode і інше не дозволено.',
	'ADD_WARNING'			=> 'Винести попередження',
	'ADD_WARNING_EXPLAIN'	=> 'Для відправки попередження цьому користувачеві, будь ласка, заповніть наступну форму. Використовуйте тільки звичайний текст; HTML, BBCode і інше не дозволено.',
	'ALL_ENTRIES'			=> 'Усі записи',
	'ALL_NOTES_DELETED'		=> 'Всі замітки про користувача видалено.',
	'ALL_REPORTS'			=> 'Всі скарги',
	'ALREADY_REPORTED'		=> 'Це повідомлення вже було оскаржено.',
	'ALREADY_REPORTED_PM'	=> 'Це приватне повідомлення вже було оскаржене.',
	'ALREADY_WARNED'		=> 'Попередження за це повідомлення вже було винесено.',
	'APPROVE'				=> 'Схвалити',
	'APPROVE_POST'			=> 'Схвалити повідомлення',
	'APPROVE_POST_CONFIRM'	=> 'Ви впевнені, що хочете схвалити це повідомлення?',
	'APPROVE_POSTS'			=> 'Схвалити повідомлення',
	'APPROVE_POSTS_CONFIRM'	=> 'Ви впевнені, що хочете схвалити вибрані повідомлення?',
	'APPROVE_TOPIC'			=> 'Схвалити тему',
	'APPROVE_TOPIC_CONFIRM'	=> 'Ви впевнені, що хочете схвалити цю тему?',
	'APPROVE_TOPICS'		=> 'Схвалити теми',
	'APPROVE_TOPICS_CONFIRM'=> 'Ви впевнені, що хочете схвалити обрані теми?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Ви не можете перемістити тему в форум, в якому вона вже знаходиться.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Ви не можете попередити незареєстрованого користувача.',
	'CANNOT_WARN_SELF'		=> 'Ви не можете попередити самого себе.',
	'CAN_LEAVE_BLANK'		=> 'Це поле можна залишити порожнім.',
	'CHANGE_POSTER'			=> 'Змінити автора',
	'CLOSE_PM_REPORT'		=> 'Закрити скаргу на приватне повідомлення',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Ви дійсно хочете закрити скаргу на вибране приватне повідомлення?',
	'CLOSE_PM_REPORTS'		=> 'Закрити скарги на приватні повідомлення',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Ви дійсно хочете закрити скарги на обрані приватні повідомлення?',
	'CLOSE_REPORT'			=> 'Закрити скаргу',
	'CLOSE_REPORT_CONFIRM'	=> 'Ви впевнені, що хочете закрити вибрану скаргу?',
	'CLOSE_REPORTS'			=> 'Закрити скарги',
	'CLOSE_REPORTS_CONFIRM'	=> 'Ви впевнені, що хочете закрити обрані скарги?',

	'DELETE_PM_REPORT'			=> 'Видалити скаргу на приватне повідомлення',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Ви дійсно хочете видалити скаргу на вибране приватне повідомлення?',
	'DELETE_PM_REPORTS'			=> 'Видалити скарги на приватні повідомлення',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Ви дійсно хочете видалити скарги на обрані приватні повідомлення?',
	'DELETE_POSTS'				=> 'Видалити повідомлення',
	'DELETE_REPORT'				=> 'Видалити скаргу',
	'DELETE_REPORT_CONFIRM'		=> 'Ви впевнені, що хочете видалити обрану скаргу?',
	'DELETE_REPORTS'			=> 'Видалити скарги',
	'DELETE_REPORTS_CONFIRM'	=> 'Ви впевнені, що хочете видалити вибрані скарги?',
	'DELETE_SHADOW_TOPIC'		=> 'Видалити посилання у старому форумі',
	'DELETE_TOPICS'				=> 'Видалити вибрані теми',
	'DISAPPROVE'				=> 'Відхилити',
	'DISAPPROVE_REASON'			=> 'Причина відмови',
	'DISAPPROVE_POST'			=> 'Відхилити повідомлення',
	'DISAPPROVE_POST_CONFIRM'	=> 'Ви впевнені, що хочете відхилити це повідомлення?',
	'DISAPPROVE_POSTS'			=> 'Відхилити повідомлення',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Ви впевнені, що хочете відхилити вибрані повідомлення?',
	'DISPLAY_LOG'				=> 'Показати записи за',
	'DISPLAY_OPTIONS'			=> 'Налаштування відображення',

	'EMPTY_REPORT'					=> 'Ви повинні обгрунтувати цю скаргу.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Будь ласка, зверніть увагу, що одна або декілька тем були видалені з бази даних, оскільки не містили або перестали містити повідомлення.',

	'FEEDBACK'				=> 'Нотатки про користувача',
	'FORK'					=> 'Створити копію',
	'FORK_TOPIC'			=> 'Створити копію теми',
	'FORK_TOPIC_CONFIRM'	=> 'Ви впевнені, що хочете скопіювати цю тему?',
	'FORK_TOPICS'			=> 'Створити копії вибраних тем',
	'FORK_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете скопіювати вибрані теми?',
	'FORUM_DESC'			=> 'Опис',
	'FORUM_NAME'			=> 'Назва форуму',
	'FORUM_NOT_EXIST'		=> 'Обраний вами форум не існує.',
	'FORUM_NOT_POSTABLE'	=> 'В обраному вами форумі можна залишати повідомлення.',
	'FORUM_STATUS'			=> 'Статус форуму',
	'FORUM_STYLE'			=> 'Стиль форуму',

	'GLOBAL_ANNOUNCEMENT'	=> 'Важлива',

	'IP_INFO'				=> 'Інформація про IP-адресу',
	'IPS_POSTED_FROM'		=> 'IP-адреса, з яких користувач відправляв повідомлення',

	'LATEST_LOGS'				=> 'Останні 5 дій',
	'LATEST_REPORTED'			=> 'Останні 5 скарг',
	'LATEST_REPORTED_PMS'		=> 'Останні 5 скарг на особисті повідомлення',
	'LATEST_UNAPPROVED'			=> 'Останні 5 повідомлень, які мають схвалення',
	'LATEST_WARNING_TIME'		=> 'Останнє попередження винесено',
	'LATEST_WARNINGS'			=> 'Останні 5 попереджень',
	'LEAVE_SHADOW'				=> 'Залишити посилання у старому форумі',
	'LIST_REPORTS'				=> array(
		1	=> 'Нотаток %d',
		2	=> 'Нотаток %d',
	),
	'LOCK'						=> 'Закрити',
	'LOCK_POST_POST'			=> 'заблокувати повідомлення',
	'LOCK_POST_POST_CONFIRM'	=> 'Ви впевнені, що хочете заборонити редагування цього повідомлення?',
	'LOCK_POST_POSTS'			=> 'Заблокувати вибрані повідомлення',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Ви впевнені, що хочете заборонити редагування вибраних повідомлень?',
	'LOCK_TOPIC_CONFIRM'		=> 'Ви впевнені, що хочете закрити цю тему?',
	'LOCK_TOPICS'				=> 'Закрити обрані теми',
	'LOCK_TOPICS_CONFIRM'		=> 'Ви впевнені, що хочете закрити всі обрані теми?',
	'LOGS_CURRENT_TOPIC'		=> 'Перегляд логів теми:',
	'LOGIN_EXPLAIN_MCP'			=> 'Ви повинні увійти для модерування цього форуму.',
	'LOGVIEW_VIEWTOPIC'			=> 'Дивитись тему',
	'LOGVIEW_VIEWLOGS'			=> 'Переглянути лог теми',
	'LOGVIEW_VIEWFORUM'			=> 'Дивитись форум',
	'LOOKUP_ALL'				=> 'Переглянути хости для всіх IP-адрес',
	'LOOKUP_IP'					=> 'Переглянути хост для IP-адреси',

	'MARKED_NOTES_DELETED'		=> 'Усі відзначені нотатки про користувача видалені.',

	'MCP_ADD'						=> 'Додати попередження',

	'MCP_BAN'					=> 'Чорні списки',
	'MCP_BAN_EMAILS'			=> 'адресів email',
	'MCP_BAN_IPS'				=> 'адресів IP/хостів',
	'MCP_BAN_USERNAMES'			=> 'імен користувачів',

	'MCP_LOGS'						=> 'Лог модератора',
	'MCP_LOGS_FRONT'				=> 'Головна сторінка',
	'MCP_LOGS_FORUM_VIEW'			=> 'Лог форума',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Лог теми',

	'MCP_MAIN'						=> 'Головна',
	'MCP_MAIN_FORUM_VIEW'			=> 'Дивитись форум',
	'MCP_MAIN_FRONT'				=> 'Головна сторінка',
	'MCP_MAIN_POST_DETAILS'			=> 'Інформація про повідомлення',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Дивитись тему',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Зробити тему оголошенням',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Ви впевнені, що хочете зробити цю тему оголошенням?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Зробити теми оголошеннями',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Ви впевнені, що хочете зробити обрані теми оголошеннями? ',
	'MCP_MAKE_GLOBAL'				=> 'Зробити тему важливою',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Ви впевнені, що хочете зробити цю тему важливою?',
	'MCP_MAKE_GLOBALS'				=> 'Зробити теми важливими',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Ви впевнені, що хочете зробити обрані теми важливими?',
	'MCP_MAKE_STICKY'				=> 'Зробити тему прикріпленою',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Ви впевнені, що хочете зробити цю тему прикріпленою?',
	'MCP_MAKE_STICKIES'				=> 'Зробити теми прикріпленими',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Ви впевнені, що хочете зробити обрані теми прикріпленими?',
	'MCP_MAKE_NORMAL'				=> 'Зробити тему звичайною',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Ви впевнені, що хочете зробити цю тему звичайною?',
	'MCP_MAKE_NORMALS'				=> 'Зробити теми звичайними',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Ви впевнені, що хочете зробити обрані теми звичайними?',

	'MCP_NOTES'						=> 'Замітки про користувача',
	'MCP_NOTES_FRONT'				=> 'Головна сторінка',
	'MCP_NOTES_USER'				=> 'Інформація',

	'MCP_POST_REPORTS'				=> 'Скарги на це повідомлення',

	'MCP_PM_REPORTS'				=> 'Скарги на приватні повідомлення',
	'MCP_PM_REPORT_DETAILS'			=> 'Подробиці про скаргу',
	'MCP_PM_REPORTS_CLOSED'			=> 'Закриті скарги на ПП',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Це список усіх переглянутих і закритих скарг на приватні повідомлення.',
	'MCP_PM_REPORTS_OPEN'			=> 'Відкриті скарги на ПП',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Це список усіх скарг на приватні повідомлення, які ще не були розглянуті.',

	'MCP_REPORTS'					=> 'Скарги на повідомлення',
	'MCP_REPORT_DETAILS'			=> 'Інформація про скаргу',
	'MCP_REPORTS_CLOSED'			=> 'Закриті скарги',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Це список усіх скарг на повідомлення, які вже були розглянуті.',
	'MCP_REPORTS_OPEN'				=> 'Відкриті скарги',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Це список усіх скарг на повідомлення, які ще не були розглянуті.',

	'MCP_QUEUE'								=> 'Черга на модерацію',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Інформація про схвалення',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Повідомлення',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Це список всіх повідомлень, що вимагають схвалення перед тим, як вони стануть видимі користувачам.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Теми',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Це список всіх тем, які потребують схвалення перед тим, як вони стануть видимі користувачам.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Видалити повідомлення',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Це список усіх повідомлень, видалених в корзину. Ви можете відновити їх або видалити назавжди.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Видалити теми',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Це список всіх тем, видалених в корзину. Ви можете відновити їх або видалити назавжди.',

	'MCP_VIEW_USER'			=> 'Перегляд попереджень конкретного користувача',

	'MCP_WARN'				=> 'Попередження',
	'MCP_WARN_FRONT'		=> 'Головна сторінка',
	'MCP_WARN_LIST'			=> 'Список попереджень',
	'MCP_WARN_POST'			=> 'Попередження за конкретне повідомлення',
	'MCP_WARN_USER'			=> 'Винести попередження',

	'MERGE_POSTS_CONFIRM'	=> 'Ви дійсно хочете перенести вибрані повідомлення в іншу тему?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Використовуючи форму, подану нижче, ви можете перенести вибрані повідомлення у вже існуючу тему. Повідомлення будуть показані в темі згідно часу їх додавання.<br />Будь ласка, введіть номер відповідної теми або натисніть «Вибрати тему» ​​для пошуку.',
	'MERGE_TOPIC_ID'		=> 'Номер кінцевої теми',
	'MERGE_TOPICS'			=> 'Об\'єднання тем',
	'MERGE_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете об\'єднати обрані теми?',
	'MODERATE_FORUM'		=> 'Модерувати форум.',
	'MODERATE_TOPIC'		=> 'Модерувати тему',
	'MODERATE_POST'			=> 'Модерувати повідомлення',
	'MOD_OPTIONS'			=> 'Налаштування модератора',
	'MORE_INFO'				=> 'Додаткова інформація',
	'MOST_WARNINGS'			=> 'Користувачі з найбільшою кількістю попереджень',
	'MOVE_TOPIC_CONFIRM'	=> 'Ви впевнені, що хочете перемістити тему в новий форум?',
	'MOVE_TOPICS'			=> 'Перемістити обрані теми',
	'MOVE_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете перемістити обрані теми в новий форум?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Повідомити автора про схвалення його повідомлення?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Повідомити автора про відхилення його повідомлення?',
	'NOTIFY_USER_WARN'				=> 'Повідомити користувача про попередження?',
	'NOT_MODERATOR'					=> 'Ви не є модератором цього форуму.',
	'NO_DESTINATION_FORUM'			=> 'Будь-ласка, виберіть форум.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Доступний форум відсутній.',
	'NO_ENTRIES'					=> 'Записи в журналі за цей період відсутні.',
	'NO_FEEDBACK'					=> 'Немає нотаток про цього користувача.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Ви повинні вибрати тему для об\'єднання повідомлень.',
	'NO_MATCHES_FOUND'				=> 'Збігів не знайдено.',
	'NO_POST'						=> 'Ви повинні вибрати повідомлення для того, щоб винести за нього попередження користувачеві.',
	'NO_POST_REPORT'				=> 'Скарга на це повідомлення не прямувала',
	'NO_POST_SELECTED'				=> 'Ви повинні вибрати хоча б одне повідомлення для того, щоб справити цю дію.',
	'NO_POSTS_DELETED'				=> 'Немає видалених повідомлень',
	'NO_POSTS_QUEUE'				=> 'Немає повідомлень, очікуючих на схвалення.',
	'NO_REASON_DISAPPROVAL'			=> 'Будь ласка, введіть підходящу причину відхилення.',
	'NO_REPORT'						=> 'Скарга не знайдена',
	'NO_REPORTS'					=> 'Скарг не знайдено',
	'NO_REPORT_SELECTED'			=> 'Ви повинні вибрати хоча б одну скаргу для виконання цієї дії.',
	'NO_TOPIC_ICON'					=> 'Ні',
	'NO_TOPIC_SELECTED'				=> 'Ви повинні вибрати хоча б одну тему для того, щоб справити цю дію.',
	'NO_TOPICS_DELETED'				=> 'Немає не видалених тем.',
	'NO_TOPICS_QUEUE'				=> 'Немає тем, потребують перевірки модератора.',

	'ONLY_TOPIC'			=> 'Тільки тема «%s»',
	'OTHER_USERS'			=> 'Інші користувачі, які відправляли повідомлення з цього IP-адреси',
	
	'QUICKMOD_ACTION_NOT_ALLOWED' => 'Дія %s заборонена в режимі швидкої модерації',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Обрана скарга на приватне повідомлення закрита.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Обрана скарга на приватне повідомлення видалена.',
	'PM_REPORTED_SUCCESS'		=> 'Скарга на це приватне повідомлення відправлена.',
 	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Обрані скарги на приватні повідомлення закриті.',
 	'PM_REPORTS_DELETED_SUCCESS'=> 'Обрані скарги на приватні повідомлення видалені.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Немає скарг на приватні повідомлення.',
		1	=> 'Всього скарг на приватні повідомлення: <strong>1</strong>.',
		2	=> 'Всього скарг на приватні повідомлення: <strong>%d</strong>.',
	),
	'PM_REPORTS_TOTAL'			=> 'Всього скарг на приватні повідомлення: <strong>%d</strong>.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Немає скарг на приватні повідомлення.',
	'PM_REPORT_DETAILS'			=> 'Подробиці про скаргу на приватне повідомлення',
	'POSTER'					=> 'Автор',
	'POSTS_APPROVED_SUCCESS'	=> 'Вибрані повідомлення схвалені.',
	'POSTS_DELETED_SUCCESS'		=> 'Вибрані повідомлення видалені із бази даних.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Вибрані повідомлення відхилені.',
	'POSTS_LOCKED_SUCCESS'		=> 'Вибрані повідомлення заблоковані.',
	'POSTS_MERGED_SUCCESS'		=> 'Вибрані повідомлення перенесені в іншу тему.',
	'POSTS_PER_PAGE'			=> 'Повідомлень на сторінці',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Встановіть 0 для перегляду всіх повідомлень.)',
	'POSTS_RESTORED_SUCCESS'	=> 'Обрані повідомлення відновлені.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Обрані повідомлення розблоковані.',
	'POST_APPROVED_SUCCESS'		=> 'Вибране повідомлення схвалено.',
	'POST_DELETED_SUCCESS'		=> 'Вибране повідомлення видалено з бази даних.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Вибране повідомлення відхилено.',
	'POST_LOCKED_SUCCESS'		=> 'Повідомлення заблоковано.',
	'POST_NOT_EXIST'			=> 'Запитаного повідомлення не існує.',
	'POST_RESTORED_SUCCESS'		=> 'Це повідомлення відновлено.',
	'POST_UNLOCKED_SUCCESS'		=> 'Повідомлення розблоковано.',

	'READ_USERNOTES'			=> 'Замітки про користувачів',
	'READ_WARNINGS'				=> 'Попередження користувача',
	'REPORTER'					=> 'Автор скарги',
	'REPORTED'					=> 'Скарга відправлена',
	'REPORTED_BY'				=> 'Скарга відправлена',
	'REPORTED_ON_DATE'			=> 'від',
	'REPORTS_CLOSED_SUCCESS'	=> 'Обрані скарги були закриті.',
	'REPORTS_DELETED_SUCCESS'	=> 'Обрані скарги були видалені.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Відсутні скарги для перегляду.',
		1	=> 'Усього є скарг для перегляду: <strong>1</strong>.',
		2	=> 'Усього є скарг для перегляду: <strong>%d</strong>.',
	),
	'REPORT_CLOSED'				=> 'Ця скарга вже була закрита.',
	'REPORT_CLOSED_SUCCESS'		=> 'Обрана скарга була закрита.',
	'REPORT_DELETED_SUCCESS'	=> 'Обрана скарга була видалена.',
	'REPORT_DETAILS'			=> 'Інформація про скаргу',
	'REPORT_MESSAGE'			=> 'Відправити скаргу на це повідомлення',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Використовуйте цю форму для відправки скарги на вибране приватне повідомлення. Зазвичай скарги використовуються тільки в тих випадках, коли повідомлення порушує правила конференції. <strong>Відправлена ​​скарга на приватне повідомлення зробить видимим його вміст модераторам конференції.</strong>',
	'REPORT_NOTIFY'				=> 'Повідомити мене',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Вас проінформують про розгляд скарги.',
	'REPORT_POST_EXPLAIN'		=> 'Використовуйте цю форму для відправки скарги на вибране повідомлення модераторам і адміністраторам конференції. Скарги зазвичай використовуються тільки у випадках, коли повідомлення порушує правила форуму.',
	'REPORT_REASON'				=> 'Причина направлення скарги',
	'REPORT_TIME'				=> 'Час направлення скарги',
	'RESTORE'					=> 'Відновити',
	'RESTORE_POST'				=> 'Відновити повідомлення',
	'RESTORE_POST_CONFIRM'		=> 'Ви впевнені, що хочете відновити це повідомлення?',
	'RESTORE_POSTS'				=> 'Відновити повідомлення',
	'RESTORE_POSTS_CONFIRM'		=> 'Ви впевнені, що хочете відновити обрані повідомлення?',
	'RESTORE_TOPIC'				=> 'Відновити тему',
	'RESTORE_TOPIC_CONFIRM'		=> 'Ви впевнені, що хочете відновити цю тему?',
	'RESTORE_TOPICS'			=> 'Відновити теми',
	'RESTORE_TOPICS_CONFIRM'	=> 'Ви впевнені, що хочете відновити обрані теми?',
	'RESYNC'					=> 'Синхронізувати',
	'RETURN_MESSAGE'			=> '%sПовернутися до повідомлення%s',
	'RETURN_NEW_FORUM'			=> '%sПерейти в новий форум%s',
	'RETURN_NEW_TOPIC'			=> '%sПерейти в нову тему%s',
	'RETURN_PM'					=> '%sПовернутися до приватного повідомлення%s',
	'RETURN_POST'				=> '%sПовернутися до повідомлення%s',
	'RETURN_QUEUE'				=> '%sПовернутися до черги%s',
	'RETURN_REPORTS'			=> '%sПовернутися до скарг%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sПовернутися до теми%s',

	'SEARCH_POSTS_BY_USER'				=> 'Пошук повідомлень по',
	'SELECT_ACTION'						=> 'Вибрати бажану дію',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Будь ласка, виберіть форум, в якому буде відображатися ця важлива тема.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Одна або більше з обраних тем є важливими. Будь ласка, виберіть форум, в якому вони будуть відображатися.',
	'SELECT_MERGE'						=> 'Вибрати для об\'єднання',
	'SELECT_TOPICS_FROM'				=> 'Вибрати теми з',
	'SELECT_TOPIC'						=> 'Вибрати тему',
	'SELECT_USER'						=> 'Вибрати користувача',
	'SORT_ACTION'						=> 'Лог дій',
	'SORT_DATE'							=> 'Дата',
	'SORT_IP'							=> 'IP-адрес',
	'SORT_WARNINGS'						=> 'Попередження',
	'SPLIT_AFTER'						=> 'Відокремити тему починаючи з вибраного повідомлення',
	'SPLIT_FORUM'						=> 'Форум для нової теми',
	'SPLIT_POSTS'						=> 'Відокремити вибрані повідомлення',
	'SPLIT_SUBJECT'						=> 'Назва нової теми',
	'SPLIT_TOPIC_ALL'					=> 'Відокремити тему після вибраних повідомлень',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Ви впевнені, що хочете розділити цю тему?',
	'SPLIT_TOPIC_BEYOND'				=> 'Розділити тему починаючи з вибраного повідомлення',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Ви впевнені, що хочете розділити цю тему починаючи з вибраного повідомлення?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Використовуючи форму, подану нижче, ви можете розділити тему на дві, або шляхом вибору окремих повідомлень, або шляхом відділення після вибраного повідомлення.',

 	'THIS_PM_IP'				=> 'IP-адрес для приватного повідомлення',
	'THIS_POST_IP'				=> 'IP-адрес для повідомлення',
	'TOPICS_APPROVED_SUCCESS'	=> 'Обрані теми були схвалені.',
	'TOPICS_DELETED_SUCCESS'	=> 'Обрані теми були видалені з бази даних.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Обрані теми були відхилені.',
	'TOPICS_FORKED_SUCCESS'		=> 'Обрані теми були скопійовані.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Обрані теми були закриті.',
	'TOPICS_MOVED_SUCCESS'		=> 'Обрані теми були переміщені.',
	'TOPICS_RESTORED_SUCCESS'	=> 'Обрані повідомлення були відновлені',
	'TOPICS_RESYNC_SUCCESS'		=> 'Обрані теми були синхронізовані.',
	'TOPICS_TYPE_CHANGED'		=> 'Типи тем успішно змінені.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Обрані теми були відкриті.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Обрана тема була схвалена.',
	'TOPIC_DELETED_SUCCESS'		=> 'Обрана тема була видалена з бази даних.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Обрана тема була відхилена.',
	'TOPIC_FORKED_SUCCESS'		=> 'Обрана тема була скопійована.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Обрана тема була закрита.',
	'TOPIC_MOVED_SUCCESS'		=> 'Обрана тема була переміщена.',
	'TOPIC_NOT_EXIST'			=> 'Обрана вами тема не існує.',
	'TOPIC_RESTORED_SUCCESS'	=> 'Обрана тема була відновлена.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Обрана тема була синхронізована.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Обрана тема була розділена.',
	'TOPIC_TIME'				=> 'Час створення теми',
	'TOPIC_TYPE_CHANGED'		=> 'Тип теми успішно змінено.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Обрана тема була відкрита.',
	'TOTAL_WARNINGS'			=> 'Всього попереджень',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Немає повідомлень, очікуючих на схвалення.',
		1	=> 'Повідомленя, очікуюче на схвалення: <strong>1</strong>.',
		2	=> 'Повідомлень, очікуючих на схвалення: <strong>%d</strong>.',
	),
	'UNLOCK'						=> 'Відкрити',
	'UNLOCK_POST'					=> 'Розблокувати повідомлення',
	'UNLOCK_POST_EXPLAIN'			=> 'Дозволити редагування',
	'UNLOCK_POST_POST'				=> 'Розблокувати повідомлення',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Ви впевнені, що хочете дозволити редагування цього повідомлення?',
	'UNLOCK_POST_POSTS'				=> 'Розблокувати вибрані повідомлення',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Ви впевнені, що хочете дозволити редагування вибраних повідомлень?',
	'UNLOCK_TOPIC'					=> 'Відкрити тему',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Ви впевнені, що хочете відкрити цю тему?',
	'UNLOCK_TOPICS'					=> 'Відкрити обрані теми',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Ви впевнені, що хочете відкрити всі обрані теми?',
	'USER_CANNOT_POST'				=> 'Ви не можете додавати повідомлення в цьому форумі.',
	'USER_CANNOT_REPORT'			=> 'Ви не можете відправляти скарги на повідомлення в цьому форумі.',
	'USER_FEEDBACK_ADDED'			=> 'Примітка про користувача добавлена.',
	'USER_WARNING_ADDED'			=> 'Користувачеві успішно винесено попередження.',

	'VIEW_DETAILS'			=> 'Інформація',
	'VIEW_PM'				=> 'Дивитись приватне повідомлення',
	'VIEW_POST'				=> 'Повідомлення',

	'WARNED_USERS'			=> 'Користувачі, що мають попередження',
	'WARNED_USERS_EXPLAIN'	=> 'Це список користувачів, для яких не закінчилися терміни винесених попереджень.',
	'WARNING_PM_BODY'		=> 'Це попередження, винесене вам адміністратором або модератором конференції.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Вам винесено попередження',
	'WARNING_POST_DEFAULT'	=> 'Це попередження, що відноситься до наступного вашого повідомлення: %s.',
	'NO_WARNINGS'	=> 'Немає попереджень.',

	'YOU_SELECTED_TOPIC'	=> 'Ви обрали тему номер %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Варез',
			'SPAM'		=> 'Спам',
			'OFF_TOPIC'	=> 'Оффтоп',
			'OTHER'		=> 'Інше',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Повідомлення містить посилання на незаконні або піратські програми.',
			'SPAM'		=> 'Повідомлення має єдиною метою рекламу сайтів, програм або інших продуктів, товарів, послуг і пр.',
			'OFF_TOPIC'	=> 'Повідомлення не відноситься до обговорюваної теми.',
			'OTHER'		=> 'Причина оскарження не відноситься ні до однієї з перерахованих, використовуйте поле додаткової інформації.',
		)
	),
));

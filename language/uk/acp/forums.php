<?php
/**
*
* acp_forums [Ukrainian]
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Автоочищення по даті останнього повідомлення',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Кількість днів з останнього повідомлення, по закінченні яких тема буде видалена.',
	'AUTO_PRUNE_FREQ'			=> 'Частота автоматичного очищення',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Час у днях між виконанням автоочистки.',
	'AUTO_PRUNE_VIEWED'			=> 'Автоочищення за часом перегляду',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Кількість днів з останнього перегляду, по закінченні яких тема буде видалена.',

	'CONTINUE'						=> 'Продовжити',
	'COPY_PERMISSIONS'				=> 'Скопіювати права з',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'З метою спрощення налаштування прав доступу для нового форуму ви можете скопіювати у нього права з іншого існуючого форуму.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Новоствореному форуму будуть присвоєні ті ж права доступу, що й у обраного зі списку. Якщо нічого не вибрано, створений форум не буде відображатися на конференції до установки прав доступу.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Якщо ви вибрали копіювання прав доступу, форуму будуть присвоєні ті ж права доступу, що і вибраному тут. Всі раніше встановлені права доступу до цього форуму будуть при цьому замінені. Якщо форум не обраний, будуть збережені поточні права доступу.',
	'COPY_TO_ACL'					=> 'Крім того, ви також можете %sнастроіть нові права%s для цього форуму.',
	'CREATE_FORUM'					=> 'Створити форум',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Видалити вміст або перемістити в форум',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Видалити підфоруми або перемістити в форум',
	'DEFAULT_STYLE'						=> 'Стиль за замовчуванням',
	'DELETE_ALL_POSTS'					=> 'Видалити повідомлення',
	'DELETE_SUBFORUMS'					=> 'Видалити підфоруми та повідомлення',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Включити активні теми',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Якщо включено, у даній категорії будуть відображатися активні теми з обраних подфорумів.',

	'EDIT_FORUM'					=> 'Редагування форуму',
	'ENABLE_INDEXING'				=> 'Включити пошукове індексування',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Якщо включено, то повідомлення цього форуму будуть індексуватися для пошуку.',
	'ENABLE_POST_REVIEW'			=> 'Включити перегляд повідомлень',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Якщо включено, користувачі зможуть переглянути своє повідомлення, якщо під час його створення в темі з\'явилися нові повідомлення. Цю опцію бажано відключати на чат-форумах.',
	'ENABLE_QUICK_REPLY'			=> 'Включити швидку відповідь',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Включає форму швидкої відповіді для цього форуму. Налаштування не діє, якщо функція швидкої відповіді на конференції не включена. Швидка відповідь буде відображатися тільки для користувачів, які мають право розміщувати повідомлення в даному форумі.',
	'ENABLE_RECENT'					=> 'Показувати активні теми',
	'ENABLE_RECENT_EXPLAIN'			=> 'Якщо включено, то теми цього форуму будуть відображатися в списку активних тем.',
	'ENABLE_TOPIC_ICONS'			=> 'Включити значки тем',

	'FORUM_ADMIN'						=> 'Управління форумами',
	'FORUM_ADMIN_EXPLAIN'				=> 'phpBB3 заснований на форумах. Категорія є особливим типом форуму. Кожен форум може мати необмежену кількість підфорумів, і ви можете визначати, дозволено в ньому створювати теми чи ні (в останньому випадку форум буде діяти як категорія в phpBB2). Тут ви можете додавати, редагувати, закривати, відкривати кожен з форумів, встановлювати деякі додаткові налаштування. Якщо ваші повідомлення і теми несинхронізованому, ви можете також синхронізувати форум. <strong>Ви повинні скопіювати або встановити потрібні права для того, щоб знову створений форум відображався в списку форумів.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Включити автоочищення',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Очищає форум від тем, встановіть параметри періодичності/часу нижче.',
	'FORUM_CREATED'						=> 'Форум успішно створений.',
	'FORUM_DATA_NEGATIVE'				=> 'Параметри очищення не можуть бути негативними.',
	'FORUM_DESC_TOO_LONG'				=> 'Опис форуму занадто довге. Опис не повинен перевищувати 4000 символів.',
	'FORUM_DELETE'						=> 'Видалення форуму',
	'FORUM_DELETE_EXPLAIN'				=> 'Форма нижче дозволяє вам видалити форум. Якщо на форумі дозволено створювати повідомлення, ви можете вирішити, куди перемістити всі наявні в ньому теми (форуми).',
	'FORUM_DELETED'						=> 'Форум успішно видалений.',
	'FORUM_DESC'						=> 'Опис',
	'FORUM_DESC_EXPLAIN'				=> 'Будь-яка задана тут розмітка буде відображена в цьому ж виді.',
	'FORUM_EDIT_EXPLAIN'				=> 'Форма нижче дозволяє вам налаштовувати цей форум. Врахуйте, що налаштування модерування і кількості повідомлень виробляються в правах доступу до форумів для кожного окремого користувача або групи.',
	'FORUM_IMAGE'						=> 'Значок форума',
	'FORUM_IMAGE_EXPLAIN'				=> 'Шлях щодо кореневої папки phpBB до додаткового зображення, асоційованому з цим форумом.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Зазначений значок форуму не існує',
	'FORUM_LINK_EXPLAIN'				=> 'Повна посилання (URL, включаючи протокол, наприклад <samp>http://</samp>), на яку буде перенаправлений користувач при клацанні по даному форуму.',
	'FORUM_LINK_TRACK'					=> 'Відстежувати переходи',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Записує кількість клацань по посиланню на форум.',
	'FORUM_NAME'						=> 'Назва форуму',
	'FORUM_NAME_EMPTY'					=> 'Необхідно ввести ім\'я цього форуму.',
	'FORUM_PARENT'						=> 'Батьківський форум',
	'FORUM_PASSWORD'					=> 'Пароль до форуму',
	'FORUM_PASSWORD_CONFIRM'			=> 'Підтвердження пароля до форуму',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Необхідно тільки у випадку, якщо встановлено пароль до форуму.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Встановлює пароль для цього форуму, переважно використання системи прав доступу.',
	'FORUM_PASSWORD_UNSET'				=> 'Видалити пароль форуму',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Позначте, якщо хочете видалити пароль форуму.',
	'FORUM_PASSWORD_OLD'				=> 'Даний пароль форуму використовує застарілий метод шифрування і повинен бути змінений.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Введені паролі не збігаються.',
	'FORUM_PRUNE_SETTINGS'				=> 'Параметри очищення форуму',
	'FORUM_RESYNCED'					=> 'Форум «%s» успішно синхронізований',
	'FORUM_RULES_EXPLAIN'				=> 'Правила форуму відображаються на кожній сторінці в межах даного форуму.',
	'FORUM_RULES_LINK'					=> 'Посилання на правила форуму',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Тут ви можете задати посилання (URL) на сторінку/повідомлення з правилами форуму. При цьому текст правил форуму буде замінений.',
	'FORUM_RULES_PREVIEW'				=> 'Перегляд правил форуму',
	'FORUM_RULES_TOO_LONG'				=> 'Правила форуму не повинні перевищувати 4000 символів.',
	'FORUM_SETTINGS'					=> 'Налаштування форуму',
	'FORUM_STATUS'						=> 'Статус форума',
	'FORUM_STYLE'						=> 'Стиль форума',
	'FORUM_TOPICS_PAGE'					=> 'Тем на сторінці',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Якщо дорівнює від нулю, це значення замінить настройку кількості тем на сторінку за замовчуванням.',
	'FORUM_TYPE'						=> 'Тип форума',
	'FORUM_UPDATED'						=> 'Відомості про форум успішно оновлені.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Ви хочете змінити форум з повідомленнями та подфоруму на посилання. Перемістіть всі підфоруми на інший форум перед виконанням цієї процедури, інакше ви більше не побачите Підфоруми, пов\'язані з цим форумом.',

	'GENERAL_FORUM_SETTINGS'	=> 'Загальні налаштування форуму',

	'LINK'					=> 'Посилання',
	'LIST_INDEX'			=> 'Показувати форум у списку підфоруму',
	'LIST_INDEX_EXPLAIN'	=> 'Відображає посилання на даний форум в списку підфоруму батьківського форуму, якщо такий існує.',
	'LIST_SUBFORUMS'		=> 'Показувати підфоруми в списку',
	'LIST_SUBFORUMS_EXPLAIN'=> 'Відображає підфоруми цього форуму на головній та інших сторінках як посилання у списку, якщо для цих подфоруму включена функція «Показувати форум у списку подфоруму».',
	'LOCKED'				=> 'Закритий',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Обраний для переміщення повідомлень форум закритий. Виберіть відкритий форум.',
	'MOVE_POSTS_TO'					=> 'Перемістити повідомлення в',
	'MOVE_SUBFORUMS_TO'				=> 'Перемістити підфоруми в',

	'NO_DESTINATION_FORUM'			=> 'Не вказаний форум для переміщення вмісту.',
	'NO_FORUM_ACTION'				=> 'Не задано дію для вмісту форуму.',
	'NO_PARENT'						=> 'Немає',
	'NO_PERMISSIONS'				=> 'Не копіювати права доступу',
	'NO_PERMISSION_FORUM_ADD'		=> 'У вас недостатньо прав для додавання форумів.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'У вас недостатньо прав для видалення форумів.',

	'PARENT_IS_LINK_FORUM'		=> 'Зазначений батьківський форум є посиланням. Посилання не можуть містити форумів. Вкажіть категорію або форум в якості батьківського форуму.',
	'PARENT_NOT_EXIST'			=> 'Батьківський форум не існує.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Очистити оголошення',
	'PRUNE_STICKY'				=> 'Очистити прикріплені теми',
	'PRUNE_OLD_POLLS'			=> 'Очистити старі опитування',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Видаляти теми, в опитуваннях яких не було голосів за вказану вище кількість днів з останнього повідомлення.',

	'REDIRECT_ACL'	=> 'Тепер ви можете %sвстановити права доступу%s для цього форуму.',

	'SYNC_IN_PROGRESS'			=> 'Синхронізація форуму',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Йде синхронізація тем %1$d/%2$d.',

	'TYPE_CAT'			=> 'Категорія',
	'TYPE_FORUM'		=> 'Форум',
	'TYPE_LINK'			=> 'Посилання',

	'UNLOCKED'			=> 'Відкритий',
));

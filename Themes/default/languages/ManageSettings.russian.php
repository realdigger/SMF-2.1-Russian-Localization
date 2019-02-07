<?php
// Version: 2.1 RC1; ManageSettings

global $scripturl;

$txt['modSettings_desc'] = 'Этот раздел позволяет изменять настройки и основные параметры форума. Посмотрите <a href="' . $scripturl . '?action=admin;area=theme;sa=list;th=%1$s;%3$s=%2$s">настройки темы оформления</a> для изменения дополнительных параметров. Можно прочитать краткое описание каждой настройки, нажав на значок (?) рядом с ней.';
$txt['modification_settings_desc'] = 'Данный раздел содержит настройки модов, установленных на форуме';

$txt['modification_no_misc_settings'] = 'Установленных модов, имеющих настройки, в данном разделе нет.';

$txt['pollMode'] = 'Голосования';
$txt['disable_polls'] = 'Запретить голосования';
$txt['enable_polls'] = 'Разрешить голосования';
$txt['polls_as_topics'] = 'Отображать в виде тем';
$txt['allow_guestAccess'] = 'Разрешить гостям просматривать форум';
$txt['userLanguage'] = 'Разрешить пользователям выбирать язык форума';
$txt['allow_hideOnline'] = 'Разрешить пользователям скрывать свой онлайн-статус';
$txt['titlesEnable'] = 'Разрешить надпись над аватаром';
$txt['enable_buddylist'] = 'Разрешить белый и чёрный списки';
$txt['default_personal_text'] = 'Подпись под аватаром по умолчанию';
$txt['default_personal_text_note'] = 'Ставить эту подпись всем новым пользователям.';
$txt['time_format'] = 'Формат времени по умолчанию';
$txt['setting_time_offset'] = 'Разница во времени';
$txt['setting_time_offset_note'] = '(изменяется и в профилях пользователей)';
$txt['setting_default_timezone'] = 'Часовой пояс сервера';
$txt['setting_timezone_priority_countries'] = 'Показывать сначала часовые пояса этих стран';
$txt['setting_timezone_priority_countries_note'] = 'Разделенный запятыми список из двухбуквенных ISO кодов стран.';
$txt['failed_login_threshold'] = 'Количество неудачных попыток входа';
$txt['loginHistoryDays'] = 'Сколько дней хранить историю входов';
$txt['lastActive'] = 'Время, в течение которого пользователь считается активным';
$txt['trackStats'] = 'Включить подробную статистику';
$txt['hitStats'] = 'Включить статистику просмотров (статистика должна быть включена)';
$txt['enableCompressedOutput'] = 'Использовать сжатие трафика';
$txt['databaseSession_enable'] = 'Хранить сессии в базе данных';
$txt['databaseSession_loose'] = 'Разрешать браузерам возвращаться на кэшированную страницу';
$txt['databaseSession_lifetime'] = 'Продолжительность сессии в секундах:';
$txt['error_log_desc'] = 'Лог ошибок, если он включен, будет регистрировать все ошибки, обнаруженные пользователями на форуме. Это может быть неоценимым подспорьем в выявлении проблем форума.';
$txt['enableErrorLogging'] = 'Включить протоколирование ошибок';
$txt['enableErrorQueryLogging'] = 'Включать в лог ошибок текст SQL-запроса к базе данных';
$txt['pruningOptions'] = 'Разрешить выполнять очистку логов';
$txt['pruneErrorLog'] = 'Удалять записи в логе ошибок старше';
$txt['pruneModLog'] = 'Удалять записи в  логе модерации старше';
$txt['pruneBanLog'] = 'Удалять логи бана старше';
$txt['pruneReportLog'] = 'Удалять записи в логе докладов модератору старше';
$txt['pruneScheduledTaskLog'] = 'Удалять записи в логе диспетчера задач старше';
$txt['pruneSpiderHitLog'] = 'Удалять записи в логе активности поисковых машин старше';
$txt['cookieTime'] = 'Время действия куки (в минутах)';
$txt['localCookies'] = 'Использовать локальное хранение куки';
$txt['globalCookies'] = 'Использовать кросс-доменные куки';
$txt['globalCookiesDomain'] = 'Основной домен, используемый файлами-куки для поддоменов';
$txt['invalid_cookie_domain'] = 'Введенный домен кажется недействительным, проверьте его и сохраните снова.';
$txt['secureCookies'] = 'Шифровать куки';
$txt['httponlyCookies'] = 'Сделать куки доступными только через HTTP протокол';
$txt['securityDisable'] = 'Отключить проверку пароля при входе в админку';
$txt['securityDisable_moderate'] = 'Отключить проверку пароля при модерировании';
$txt['send_validation_onChange'] = 'Требовать одобрения учётной записи после смены электронного адреса';
$txt['approveAccountDeletion'] = 'Запрашивать одобрение админа при удалении пользователем своего аккаунта';
$txt['autoFixDatabase'] = 'Автоматически восстанавливать поврежденные таблицы';
$txt['allow_disableAnnounce'] = 'Разрешить пользователям отказываться от уведомлений форума';
$txt['disallow_sendBody'] = 'Не отправлять текст сообщения в уведомлениях';
$txt['enable_ajax_alerts'] = 'Разрешить AJAX уведомления для оповещений';
$txt['jquery_source'] = 'Источник для библиотеки jQuery';
$txt['jquery_custom_label'] = 'Свой';
$txt['jquery_custom'] = 'Свой путь к библиотеке jQuery';
$txt['jquery_local'] = 'Локальный';
$txt['jquery_cdn'] = 'Google CDN';
$txt['jquery_auto'] = 'Авто';
$txt['queryless_urls'] = 'Использовать укороченные URL-адреса';
$txt['minimize_files'] = 'Минимизировать файлы CSS и JavaScript';
$txt['queryless_urls_note'] = 'Только для Apache/Lighttpd';
$txt['enableReportPM'] = 'Разрешить жалобы на личные сообщения';
$txt['max_pm_recipients'] = 'Максимальное количество получателей при отправке личного сообщения';
$txt['max_pm_recipients_note'] = '(0 &mdash; без ограничений, на администраторов не распространяется)';
$txt['pm_posts_verification'] = 'Количество сообщений, после которого не нужно вводить код при отсылке ЛС';
$txt['pm_posts_verification_note'] = '(0 &mdash; без ограничений, на администраторов не распространяется)';
$txt['pm_posts_per_hour'] = 'Количество ЛС, которое может отослать пользователь в течение одного часа';
$txt['pm_posts_per_hour_note'] = '(0 &mdash; без ограничений, на модераторов не распространяется)';
$txt['compactTopicPagesEnable'] = 'Ограничить количество отображаемых страниц';
$txt['contiguous_page_display'] = 'Формат отображения нескольких страниц:';
$txt['to_display'] = 'для отображения';
$txt['todayMod'] = 'Разрешить функцию «Сегодня»';
$txt['today_disabled'] = 'Запретить';
$txt['today_only'] = 'Только «Сегодня»';
$txt['yesterday_today'] = '«Сегодня» и «Вчера»';
$txt['onlineEnable'] = 'Отображать статус онлайн/офлайн в сообщениях пользователей';
$txt['defaultMaxMembers'] = 'Количество пользователей на страницу (в списке пользователей)';
$txt['timeLoadPageEnable'] = 'Отображать время, затраченное на создание страницы';
$txt['disableHostnameLookup'] = 'Не отображать названия хостов пользователей';
$txt['who_enabled'] = 'Отображать список «Сейчас на форуме»';
$txt['meta_keywords'] = 'Ключевые слова, соответствующие форуму';
$txt['meta_keywords_note'] = 'Для поисковых систем. Оставьте пустым для значений по умолчанию.';
$txt['settings_error'] = 'Предупреждение: Не удалось перезаписать Settings.php, изменения настроек не сохранены!';
$txt['image_proxy_enabled'] = 'Включить проксирование изображений';
$txt['image_proxy_secret'] = 'Секретный код для проксирования изображений';
$txt['image_proxy_maxsize'] = 'Максимальный размер изображений, которые будут сохранены в кэше (в Кб)';
$txt['force_ssl'] = 'Режим работы SSL';
$txt['force_ssl_off'] = 'Отключить SSL';
$txt['force_ssl_complete'] = 'Включить SSL для всего форума';
$txt['search_language'] = 'Язык для полнотекстового поиска';

// Like settings.
$txt['enable_likes'] = 'Включить лайки';

// Mention settings.
$txt['enable_mentions'] = 'Включить упоминания';

$txt['caching_information'] = 'SMF поддерживает кэширование с помощью акселераторов. Поддерживаются следующие акселераторы:
<ul class="normallist">
	<li>APC</li>
	<li>APCu</li>
	<li>Memcached</li>
	<li>SQLite3</li>
	<li>PostgreSQL</li>
	<li>Zend Platform/Performance Suite (не Zend Optimizer)</li>
	<li>XCache</li>
</ul>
Кэширование будет работать лучше, если PHP скомпилирован с поддержкой одного из упомянутых выше акселераторов или на сервере доступен memcached. Если ни один из акселераторов не установлен, SMF будет использовать файловое кэширование.';
$txt['detected_no_caching'] = '<strong class="alert">На сервере не обнаружено поддерживаемых SMF акселераторов. Вместо них будет использовано файловое кэширование.</strong>';
$txt['detected_accelerators'] = '<strong class="success">Обнаружены следующие акселераторы: %1$s</strong>';

$txt['cache_enable'] = 'Уровень кэширования';
$txt['cache_off'] = 'Кэширование отключено';
$txt['cache_level1'] = 'Уровень 1 (Рекомендуется)';
$txt['cache_level2'] = 'Уровень 2';
$txt['cache_level3'] = 'Уровень 3 (Не рекомендуется)';
$txt['cache_accelerator'] = 'Выбрать акселератор';
$txt['smf_cache'] = 'Файловое кэширование SMF';
$txt['sqlite_cache'] = 'Кэширование в базу SQLite3';
$txt['postgres_cache'] = 'Кэширование в базу PostgreSQL';
$txt['cachedir_sqlite'] = 'Директория для кэша SQLite3';
$txt['apc_cache'] = 'APC';
$txt['apcu_cache'] = 'APCu';
$txt['memcache_cache'] = 'Memcache';
$txt['memcached_cache'] = 'Memcached';
$txt['xcache_cache'] = 'XCache';
$txt['zend_cache'] = 'Zend Platform/Performance Suite';
$txt['cache_smf_settings'] = 'Настройки файлового кэширования SMF';
$txt['cache_sqlite_settings'] = 'Настройки кэширования в базу SQLite3';
$txt['cache_memcache_settings'] = 'Настройки Memcache(d)';
$txt['cache_memcache_servers'] = 'Сервера и порты Memcache(d)';
$txt['cache_memcache_servers_subtext'] = 'Например: 127.0.0.1:11211,127.0.0.2';
$txt['cache_xcache_settings'] = 'Настройки XCache';
$txt['cache_xcache_adminuser'] = 'Логин администратора XCache';
$txt['cache_xcache_adminpass'] = 'Пароль администратора XCache';

$txt['loadavg_warning'] = '<span class="error">Обратите внимание: приведенные ниже настройки необходимо изменять с осторожностью. Установка для любого из этих параметров слишком низкого значения может привести к полной <strong>неработоспособности</strong> форума! Эти настройки только для виртуальных и физических серверов, если ваш форум на виртуальном хостинге - не меняйте их! Текущая средняя нагрузка: <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Включить балансировку нагрузки по среднему значению (load averages)';
$txt['loadavg_auto_opt'] = 'Порог для отключения автоматической оптимизации базы данных';
$txt['loadavg_search'] = 'Порог для отключения поиска';
$txt['loadavg_allunread'] = 'Порог для отключения функции "Все непрочитанные сообщения"';
$txt['loadavg_unreadreplies'] = 'Порог для отключения функции "Непрочитанные ответы"';
$txt['loadavg_show_posts'] = 'Порог для отключения функции "Показать сообщения пользователя"';
$txt['loadavg_userstats'] = 'Порог для отключения функции "Статистика пользователя"';
$txt['loadavg_bbc'] = 'Порог для отключения обработки ББ-кодов при отображении сообщений';
$txt['loadavg_forum'] = 'Порог для <strong>полного</strong> отключения форума';
$txt['loadavg_disabled_windows'] = '<span class="error">Балансировка нагрузки не поддерживается Windows-серверами.</span>';
$txt['loadavg_disabled_osx'] = '<span class="error">Балансировка нагрузки не поддерживается системой OS X.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Балансировка нагрузки отключена в настройках вашего хостинга.</span>';

$txt['setting_password_strength'] = 'Требования к длине пароля пользователей';
$txt['setting_password_strength_low'] = 'Низкое &mdash; минимум 4 символа';
$txt['setting_password_strength_medium'] = 'Среднее &mdash; не может совпадать с именем пользователя';
$txt['setting_password_strength_high'] = 'Высокое &mdash; сочетание различных символов';
$txt['setting_enable_password_conversion'] = 'Разрешить конвертирование хешированных паролей';

$txt['antispam_Settings'] = 'Борьба со спамом';
$txt['antispam_Settings_desc'] = 'Здесь можно настроить и активировать проверку контрольным кодом для защиты форума от ботов и спама.';
$txt['setting_reg_verification'] = 'Требовать проверку на странице регистрации';
$txt['posts_require_captcha'] = 'Количество сообщений, до достижения которого требуется проверка кодом';
$txt['posts_require_captcha_desc'] = '(0 &mdash; без ограничений, на модераторов не распространяется)';
$txt['search_enable_captcha'] = 'Использовать код проверки при поиске гостями';
$txt['setting_guests_require_captcha'] = 'Гости смогут воспользоваться поиском только после прохождения проверки';
$txt['setting_guests_require_captcha_desc'] = '(Устанавливается автоматически, если ниже указано минимальное количество сообщений)';
$txt['question_not_defined'] = 'Добавьте вопрос и ответ для языка, используемого на форуме по умолчанию (%1$s), иначе пользователи не смогут заполнить капчу (а значит, и пройти регистрацию).';

$txt['configure_verification_means'] = 'Настройка метода проверки кодом';
$txt['setting_qa_verification_number'] = 'Количество проверочных вопросов';
$txt['setting_qa_verification_number_desc'] = '(0 &mdash; запретить или введите количество)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Включение проверки антиспама требуется для отсеивания различных ботов при вводе данных. Помните, что пользователь будет вынужден пройти <em>ВСЕ</em> включенные проверки.</span>';
$txt['setting_visual_verification_type'] = 'Сложность изображения визуальной проверки';
$txt['setting_visual_verification_type_desc'] = 'Более сложное изображение тяжелее обходить и ботам и людям';
$txt['setting_image_verification_off'] = 'Запретить';
$txt['setting_image_verification_vsimple'] = 'Очень простое &mdash; Обычный текст на изображении';
$txt['setting_image_verification_simple'] = 'Простое &mdash; Цветные символы, без шума';
$txt['setting_image_verification_medium'] = 'Среднее &mdash; Накладывать шум и линии на цветные символы';
$txt['setting_image_verification_high'] = 'Высокое &mdash; Наклонные символы, со значительными шумами и линиями';
$txt['setting_image_verification_extreme'] = 'Очень высокое &mdash; Наклонные символы, шум, линии и блоки';
$txt['setting_image_verification_sample'] = 'Пример';

// reCAPTCHA
$txt['recaptcha_configure'] = 'Проверочная система reCAPTCHA';
$txt['recaptcha_configure_desc'] = 'Настройки reCAPTCHA. Если у вас ещё нет ключа для reCAPTCHA, <a href="https://www.google.com/recaptcha/admin">можно получить его здесь</a>.';
$txt['recaptcha_enabled'] = 'Включить reCAPTCHA';
$txt['recaptcha_enable_desc'] = 'Включить визуальную проверку через reCAPTCHA';
$txt['recaptcha_theme'] = 'Оформление';
$txt['recaptcha_theme_light'] = 'Светлое';
$txt['recaptcha_theme_dark'] = 'Темное';
$txt['recaptcha_site_key'] = 'Ключ сайта';
$txt['recaptcha_site_key_desc'] = 'Будет включен в HTML код вашего форума.';
$txt['recaptcha_secret_key'] = 'Секретный ключ';
$txt['recaptcha_secret_key_desc'] = 'Для взаимодействия с серверами Google. Сохраняйте его в секрете.';
$txt['recaptcha_no_key_question'] = 'Нет ключа для reCAPTCHA?';
$txt['recaptcha_get_key'] = 'Получите ключ для reCAPTCHA здесь.';
$txt['languages_recaptcha'] = 'Язык ReCAPTCHA';

$txt['setting_image_verification_nogd'] = '<strong>Обратите внимание:</strong> так как на данном сервере не установлена библиотека GD, то настройки сложности ничего не изменят.';
$txt['setup_verification_questions'] = 'Проверочные вопросы';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Если хотите, чтобы пользователи отвечали на проверочные вопросы для отсеивания ботов, введите количество вопросов и сами вопросы и ответы на них в таблице ниже. Можно использовать ББ-коды для форматирования вопросов. Ответы от пользователей буду приниматься в регистронезависимом виде. Чтобы удалить вопрос, просто сотрите его содержимое.</span>';
$txt['setup_verification_question'] = 'Вопрос';
$txt['setup_verification_answer'] = 'Ответ';
$txt['setup_verification_add_more'] = 'Добавить ещё один вопрос';
$txt['setup_verification_add_answer'] = 'Добавить ещё один ответ';

$txt['moderation_settings'] = 'Настройки системы предупреждений';
$txt['setting_warning_enable'] = 'Разрешить систему предупреждения пользователей';
$txt['setting_warning_watch'] = 'Уровень предупреждения &mdash; пользователь под наблюдением';
$txt['setting_warning_watch_note'] = 'Уровень предупреждения пользователя, после которого он становится под наблюдением.';
$txt['setting_warning_moderate'] = 'Уровень предупреждения &mdash; премодерация сообщений';
$txt['setting_warning_moderate_note'] = 'Уровень предупреждения пользователя, после которого все сообщения требуют модерации.';
$txt['setting_warning_mute'] = 'Уровень предупреждения &mdash; пользователь молчит';
$txt['setting_warning_mute_note'] = 'Уровень предупреждения пользователя, после которого пользователь больше не сможет публиковать сообщения.';
$txt['setting_user_limit'] = 'Максимальное количество баллов предупреждений в день';
$txt['setting_user_limit_note'] = 'Это максимальное количество предупреждений, которое один модератор может назначить пользователю за 24 часа (0 &mdash; без ограничений).';
$txt['setting_warning_decrement'] = 'Уменьшение количества баллов предупреждений каждые 24 часа';
$txt['setting_warning_decrement_note'] = 'Только для пользователей, которые не получали предупреждений за последние 24 часа.';
$txt['setting_view_warning'] = 'Пользователи, которые могут видеть статус предупреждения';

$txt['signature_settings'] = 'Настройка подписей';
$txt['signature_settings_desc'] = 'Используйте данные настройки для определения вида подписи пользователя в SMF.';
$txt['signature_settings_warning'] = 'Обратите внимание, что по умолчанию эти настройки не применяются к уже существующим подписям. Нажмите <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=sig;apply;%2$s=%1$s">сюда</a> для применения настроек ко всем существующим подписям.';
$txt['signature_settings_applied'] = 'Правила были применены к существующим подписям.';
$txt['signature_enable'] = 'Разрешить подписи';
$txt['signature_max_length'] = 'Максимальное количество символов';
$txt['signature_max_lines'] = 'Максимальное количество строк';
$txt['signature_max_images'] = 'Максимальное количество изображений';
$txt['signature_max_images_note'] = '(0 &mdash; без ограничений; включает смайлики)';
$txt['signature_allow_smileys'] = 'Разрешать смайлики в подписях';
$txt['signature_max_smileys'] = 'Максимальное количество смайликов';
$txt['signature_max_image_width'] = 'Максимальная ширина изображения в подписи (пикселей)';
$txt['signature_max_image_height'] = 'Максимальная высота изображения в подписи (пикселей)';
$txt['signature_max_font_size'] = 'Максимальный размер шрифта в подписи';
$txt['signature_bbc'] = 'Разрешённые ББ-коды';

$txt['custom_profile_title'] = 'Расширенные поля';
$txt['custom_profile_desc'] = 'В данном разделе можно создавать индивидуальные поля профиля с учетом требований данного форума.';
$txt['custom_profile_active'] = 'Активное';
$txt['custom_profile_fieldname'] = 'Название поля';
$txt['custom_profile_fieldtype'] = 'Тип поля';
$txt['custom_profile_fieldorder'] = 'Порядок расположения';
$txt['custom_profile_make_new'] = 'Новое поле';
$txt['custom_profile_none'] = 'Ни одного поля пока не создано!';
$txt['custom_profile_icon'] = 'Иконка';

$txt['custom_profile_type_text'] = 'Текст';
$txt['custom_profile_type_textarea'] = 'Многострочный текст';
$txt['custom_profile_type_select'] = 'Список выбора';
$txt['custom_profile_type_radio'] = 'Выбор варианта';
$txt['custom_profile_type_check'] = 'Переключатель';

$txt['custom_add_title'] = 'Добавить поле профиля';
$txt['custom_edit_title'] = 'Изменить поле профиля';
$txt['custom_edit_general'] = 'Настройки отображения';
$txt['custom_edit_input'] = 'Настройки ввода';
$txt['custom_edit_advanced'] = 'Расширенные настройки';
$txt['custom_edit_name'] = 'Название';
$txt['custom_edit_desc'] = 'Описание';
$txt['custom_edit_profile'] = 'Раздел профиля';
$txt['custom_edit_profile_desc'] = 'Раздел профиля для изменения настроек.';
$txt['custom_edit_profile_none'] = 'Нет';
$txt['custom_edit_registration'] = 'Отображать при регистрации';
$txt['custom_edit_registration_disable'] = 'Нет';
$txt['custom_edit_registration_allow'] = 'Да';
$txt['custom_edit_registration_require'] = 'Да, обязательное';
$txt['custom_edit_display'] = 'Отображать при просмотре темы';
$txt['custom_edit_mlist'] = 'Отображать в списке пользователей';
$txt['custom_edit_picktype'] = 'Тип поля';

$txt['custom_edit_max_length'] = 'Максимальная длина';
$txt['custom_edit_max_length_desc'] = '(0 &mdash; без ограничений)';
$txt['custom_edit_dimension'] = 'Измерение';
$txt['custom_edit_dimension_row'] = 'Рядов';
$txt['custom_edit_dimension_col'] = 'Столбцов';
$txt['custom_edit_bbc'] = 'Разрешить ББ-коды';
$txt['custom_edit_options'] = 'Настройки';
$txt['custom_edit_options_desc'] = 'Оставьте поле выбора пустым для удаления. Будет выбран параметр по умолчанию.';
$txt['custom_edit_options_more'] = 'Дополнительно';
$txt['custom_edit_default'] = 'Значение по умолчанию';
$txt['custom_edit_active'] = 'Активное';
$txt['custom_edit_active_desc'] = 'Если не выбрать, данное поле никому отображаться не будет.';
$txt['custom_edit_privacy'] = 'Права на изменение и просмотр';
$txt['custom_edit_privacy_desc'] = 'Кто может просматривать и изменять данное поле.';
$txt['custom_edit_privacy_all'] = 'Пользователи могут просматривать, владелец изменять';
$txt['custom_edit_privacy_see'] = 'Пользователи могут просматривать, только администратор может изменять';
$txt['custom_edit_privacy_owner'] = 'Пользователи не видят это поле; владелец и администраторы могут изменять';
$txt['custom_edit_privacy_none'] = 'Данное поле видно только администратору';
$txt['custom_edit_can_search'] = 'Выдается в поиске';
$txt['custom_edit_can_search_desc'] = 'По данному полю можно искать в списке пользователей.';
$txt['custom_edit_mask'] = 'Маска';
$txt['custom_edit_mask_desc'] = 'Текстовым полям можно задать маску для проверки вводимых данных.';
$txt['custom_edit_mask_email'] = 'Проверка адреса электронной почты';
$txt['custom_edit_mask_number'] = 'Числовая';
$txt['custom_edit_mask_nohtml'] = 'Без HTML';
$txt['custom_edit_mask_regex'] = 'Регулярные выражения в маске (для экспертов)';
$txt['custom_edit_enclose'] = 'Показывать с дополнительным текстом (по желанию)';
$txt['custom_edit_enclose_desc'] = '<strong>Настоятельно</strong> рекомендуется использовать маску для проверки вводимых данных.';

$txt['custom_edit_order_move'] = 'Переместить ';
$txt['custom_edit_order_up'] = 'Вверх';
$txt['custom_edit_order_down'] = 'Вниз';
$txt['custom_edit_placement'] = 'Выберите размещение';
$txt['custom_profile_placement'] = 'Размещение';
$txt['custom_profile_placement_standard'] = 'Стандартное (с заголовком)';
$txt['custom_profile_placement_icons'] = 'Рядом с иконками';
$txt['custom_profile_placement_above_signature'] = 'Над подписью';
$txt['custom_profile_placement_below_signature'] = 'Под подписью';
$txt['custom_profile_placement_below_avatar'] = 'Над аватаром';
$txt['custom_profile_placement_above_member'] = 'Под аватаром';
$txt['custom_profile_placement_bottom_poster'] = 'Под информацией о пользователе';
$txt['custom_profile_placement_before_member'] = 'Перед именем пользователя';
$txt['custom_profile_placement_after_member'] = 'После имени пользователя';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Хотите удалить это поле? Все текущие данные пользователей будут потеряны!';

$txt['standard_profile_title'] = 'Стандартные поля';
$txt['standard_profile_field'] = 'Поле';
$txt['standard_profile_field_timezone'] = 'Часовой пояс';

$txt['languages_lang_name'] = 'Название языка';
$txt['languages_native_name'] = 'Собственное название языка';
$txt['languages_locale'] = 'Локаль';
$txt['languages_default'] = 'Выбран';
$txt['languages_character_set'] = 'Кодировка';
$txt['languages_users'] = 'Пользователей';
$txt['language_settings_writable'] = 'Предупреждение: Settings.php не доступен для записи, настройки языка по умолчанию не будут сохранены.';
$txt['edit_languages'] = 'Изменить языки';
$txt['lang_file_not_writable'] = '<strong>Предупреждение:</strong> Главный языковой файл (%1$s) не доступен для записи. Вы должны сделать его записываемым до внесения изменений.';
$txt['lang_entries_not_writable'] = '<strong>Предупреждение:</strong> Языковой файл который вы пытаетесь изменить (%1$s) не доступен для записи. Вы должны сделать его записываемым до внесения изменений.';
$txt['languages_ltr'] = 'Справа налево';

$txt['add_language'] = 'Добавить язык';
$txt['add_language_smf'] = 'Загрузить с Simple Machines';
$txt['add_language_smf_browse'] = 'Наберите название языка для поиска или оставьте пустым для отображения всех доступных';
$txt['add_language_smf_install'] = 'Установить';
$txt['add_language_found_title'] = 'Найдены языки';
$txt['add_language_smf_found'] = 'Следующие языки были найдены. Нажмите на ссылку «Установить» для установки выбранного языка, после чего вас перенаправит в менеджер пакетов.';
$txt['add_language_error_no_response'] = 'Сайт Simple Machines не отвечает. Пожалуйста, попробуйте позже.';
$txt['add_language_error_no_files'] = 'Файлов не найдено.';
$txt['add_language_smf_desc'] = 'Описание';
$txt['add_language_smf_utf8'] = 'UTF-8';
$txt['add_language_smf_version'] = 'Версия';

$txt['edit_language_entries_primary'] = 'Ниже приведены настройки для главного языка.';
$txt['edit_language_entries'] = 'Изменить языковые переменные';
$txt['edit_language_entries_desc'] = 'Вы можете настроить отдельные текстовые записи для этого языка. Выберите файл для загрузки его записей, а затем отредактируйте их ниже.<br><br>При редактировании (или удалении) любой записи оригинальная запись сохраняется в файле (комментируется). Если вам когда-либо понадобится восстановить отредактированные строки в исходное состояние или если вам нужен более продвинутый доступ к этим языковым файлам, перейдите на страницу <a href="' . $scripturl . '?action=admin;area=theme;sa=edit">' . $txt['themeadmin_edit_title'] . '</a>, перейдите к файлу, который вы ищете, а затем отредактируйте его напрямую с помощью встроенного текстового редактора SMF.';
$txt['edit_language_entries_file'] = 'Выберите переменную для изменения';
$txt['languages_dictionary'] = 'Словарь';
$txt['languages_spelling'] = 'Проверка орфографии';
$txt['languages_for_pspell'] = 'Это для <a href="https://secure.php.net/manual/ru/function.pspell-new" target="_blank" rel="noopener">pSpell</a> &mdash; если установлено';
$txt['languages_rtl'] = 'Включить режим «Справа налево»';

$txt['lang_file_desc_index'] = 'Общие строки';
$txt['lang_file_desc_EmailTemplates'] = 'Шаблоны сообщений';

$txt['languages_download'] = 'Скачать языковой пакет';
$txt['languages_download_note'] = 'Эта страница содержит список всех файлов, которые содержатся в языковом пакете, и некоторую полезную информацию о каждом из них. Все отмеченные файлы будут скопированы.';
$txt['languages_download_info'] = '<strong>Обратите внимание:</strong>
	<ul class="normallist">
		<li>Если файлы имеют статус &laquo;незаписываемых&raquo;, это означает, что SMF не скопирует их в папку, пока для них не будут установлены соответствующие права на запись.</li>
		<li>Информация о версии файлов отображает последнюю версию SMF, для которой было сделано обновление. Если индикатор зеленый &mdash; это означает, что текущая версия новее, чем установленная на вашем форуме. Если индикатор красный, то установленная версия новее.</li>
		<li>Если файл уже существует на данном форуме, в столбце «Уже существует» будет одно из значений. «Одинаковый» &mdash; файл уже существует в идентичном виде и перезаписывать его необязательно. «Другой» &mdash; содержимое различно и перезапись является оптимальным решением.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Главные файлы';
$txt['languages_download_filename'] = 'Имя файла';
$txt['languages_download_dest'] = 'Путь';
$txt['languages_download_writable'] = 'Записываемая';
$txt['languages_download_version'] = 'Версия';
$txt['languages_download_older'] = 'Установленная версия файлов новее, перезапись не рекомендуется.';
$txt['languages_download_exists'] = 'Уже существует';
$txt['languages_download_exists_same'] = 'Одинаковые';
$txt['languages_download_exists_different'] = 'Другой';
$txt['languages_download_copy'] = 'Копировать';
$txt['languages_download_not_chmod'] = 'Вы не можете продолжить процесс установки, пока выделенные файлы не станут записываемыми.';
$txt['languages_download_illegal_paths'] = 'Пакет содержит неверные пути установки. Пожалуйста, свяжитесь с Simple Machines';
$txt['languages_download_complete'] = 'Установка завершена';
$txt['languages_download_complete_desc'] = 'Языковой пакет успешно установлен. Пожалуйста, нажмите <a href="%1$s">сюда</a> для возврата на страницу языков';
$txt['languages_delete_confirm'] = 'Хотите удалить этот языковой пакет?';
$txt['languages_max_inputs_warning'] = 'Можно сохранить только %1$s правок за раз. Нажмите кнопку «Сохранить» сейчас, а затем продолжайте редактирование, когда страница перезагрузится.';
$txt['languages_txt'] = 'Стандартные текстовые строки';
$txt['languages_helptxt'] = 'Текст справки';
$txt['languages_editortxt'] = 'Пользовательский интерфейс для редактора';
$txt['languages_tztxt'] = 'Описание часовых поясов';
$txt['languages_txt_for_timezones'] = 'Пользовательские имена местоположений';
$txt['languages_enter_key'] = 'Введите имя переменной для этой текстовой строки';
$txt['languages_invalid_key'] = 'Извините, но имя этой переменной недопустимо: ';

$txt['setting_frame_security'] = 'Настройка безопасности фреймов';
$txt['setting_frame_security_SAMEORIGIN'] = 'Разрешить со своего домена';
$txt['setting_frame_security_DENY'] = 'Блокировать все';
$txt['setting_frame_security_DISABLE'] = 'Разрешить все';

$txt['setting_proxy_ip_header'] = 'IP заголовок для обратного прокси';
$txt['setting_proxy_ip_header_disabled'] = 'Запретить любой IP заголовок прокси';
$txt['setting_proxy_ip_header_autodetect'] = 'Автоопределение IP заголовка прокси';
$txt['setting_proxy_ip_servers'] = 'IP адреса обратных прокси';

$txt['select_boards_from_list'] = 'Выберите разделы к которым применить';

$txt['topic_move_any'] = 'Разрешить перенос тем в разделы только для чтения';

$txt['defaultMaxListItems'] = 'Максимальное количество строк на страницу в списках';

$txt['tfa_mode'] = 'Двухфакторная авторизация';
$txt['tfa_mode_forced'] = 'Принудительна для выбранных групп';
$txt['tfa_mode_forcedall'] = 'Принудительна для ВСЕХ пользователей';
$txt['tfa_mode_forced_help'] = 'Сначала включите двухфакторную авторизацию для своей учётной записи, если хотите получить возможность принудительно включить её для других пользователей!';
$txt['tfa_mode_enabled'] = 'Включена';
$txt['tfa_mode_disabled'] = 'Выключена';
$txt['tfa_mode_subtext'] = 'Разрешить пользователям использовать дополнительный уровень безопасности при входе на форум. Им потребуется дополнительное приложение (например, Google Authenticator), спаренное с их учётной записью';

?>

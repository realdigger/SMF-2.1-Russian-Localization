<?php
// Version: 2.1 Beta 4; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['install_step_welcome'] = 'Добро пожаловать';
$txt['install_step_writable'] = 'Проверка прав доступа на запись';
$txt['install_step_forum'] = 'Настройки форума';
$txt['install_step_databaseset'] = 'Параметры базы данных';
$txt['install_step_databasechange'] = 'Заполнение базы данных';
$txt['install_step_admin'] = 'Учётная запись администратора';
$txt['install_step_delete'] = 'Завершение установки';

$txt['smf_installer'] = 'Установка SMF';
$txt['installer_language'] = 'Язык';
$txt['installer_language_set'] = 'Установить';
$txt['congratulations'] = 'Поздравляем, процесс установки завершён!';
$txt['congratulations_help'] = 'При возникновении любых проблем, связанных с работой форума, не забывайте про <a href="https://www.simplemachines.org/community/index.php" target="_blank" rel="noopener">официальный сайт поддержки</a>.';
$txt['still_writable'] = 'Директория установки всё ещё имеет права на запись. В целях безопасности рекомендуется сделать её доступной только для чтения.';
$txt['delete_installer'] = 'Нажмите сюда, чтобы удалить файл install.php';
$txt['delete_installer_maybe'] = '<em>(работает не на всех серверах).</em>';
$txt['go_to_your_forum'] = 'Теперь можно перейти на <a href="%1$s">установленный форум</a> и начать использовать его. После авторизации вам будет доступен раздел администрирования.';
$txt['good_luck'] = 'Удачи!<br>Simple Machines';

$txt['install_welcome'] = 'Добро пожаловать';
$txt['install_welcome_desc'] = 'Добро пожаловать в SMF. Этот скрипт проведет вас через процесс установки %1$s. В течение нескольких следующих шагов потребуется указать некоторые данные, после чего форум будет готов к использованию.';
$txt['install_no_https'] = 'Ваш сервер не поддерживает протокол HTTPS. Некоторые функции, например, получение обновлений с SimpleMachines.org, не будут работать.';
$txt['install_no_mbstring'] = 'Ваш сервер не поддерживает требуемую библиотеку mbstring. Пожалуйста, включите mbstring и повторите попытку.';
$txt['install_all_lovely'] = 'Мы провели тестирование вашего сервера, чтобы определить, всё ли готово к установке. Нажмите кнопку «Продолжить», чтобы начать процесс.';

$txt['user_refresh_install'] = 'Форум обновлён';
$txt['user_refresh_install_desc'] = 'Во время установки инсталлятор обнаружил, что одна или несколько таблиц, которые должны быть созданы в базе данных, уже существуют.<br>Отсутствующие таблицы были заполнены данными по умолчанию. Данные, уже содержащиеся в таблицах, сохранены.';

$txt['default_topic_subject'] = 'Добро пожаловать в SMF!';
$txt['default_topic_message'] = 'Добро пожаловать на форум Simple Machines!<br><br>Надеемся, вам понравится использование этого форума. При возникновении каких-либо проблем, обращайтесь на [url=https://www.simplemachines.org/community/index.php]официальный сайт поддержки[/url].<br>Вы, также, можете посетить [url=https://www.simplemachines.ru/index.php]русскоязычное сообщество SMF[/url].<br><br>Большое спасибо!<br>Simple Machines';
$txt['default_board_name'] = 'Общий раздел';
$txt['default_board_description'] = 'В этом разделе можно вести разговоры на любые темы.';
$txt['default_category_name'] = 'Главная категория';
$txt['default_time_format'] = '%d %B %Y, %H:%M';
$txt['default_news'] = 'SMF форум только что установлен!';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot';
$txt['default_smileyset_name'] = 'Набор от Fugue';
$txt['default_alienine_smileyset_name'] = 'Набор от Alienine';
$txt['default_theme_name'] = 'SMF Default Theme - Curve2';
$txt['default_core_theme_name'] = 'Core Theme';
$txt['default_classic_theme_name'] = 'Classic YaBB SE Theme';
$txt['default_babylon_theme_name'] = 'Babylon Theme';

$txt['default_administrator_group'] = 'Администратор';
$txt['default_global_moderator_group'] = 'Глобальный модератор';
$txt['default_moderator_group'] = 'Модератор';
$txt['default_newbie_group'] = 'Новичок';
$txt['default_junior_group'] = 'Пользователь';
$txt['default_full_group'] = 'Постоялец';
$txt['default_senior_group'] = 'Старожил';
$txt['default_hero_group'] = 'Ветеран';

$txt['default_smiley_smiley'] = 'Улыбка';
$txt['default_wink_smiley'] = 'Подмигивающий';
$txt['default_cheesy_smiley'] = 'Веселый';
$txt['default_grin_smiley'] = 'Смеющийся';
$txt['default_angry_smiley'] = 'Злой';
$txt['default_sad_smiley'] = 'Грустный';
$txt['default_shocked_smiley'] = 'Шокирован';
$txt['default_cool_smiley'] = 'Крутой';
$txt['default_huh_smiley'] = 'Непонимающий';
$txt['default_roll_eyes_smiley'] = 'Строит глазки';
$txt['default_tongue_smiley'] = 'Показывает язык';
$txt['default_embarrassed_smiley'] = 'Обеспокоенный';
$txt['default_lips_sealed_smiley'] = 'Рот на замке';
$txt['default_undecided_smiley'] = 'В замешательстве';
$txt['default_kiss_smiley'] = 'Целующий';
$txt['default_cry_smiley'] = 'Плачущий';
$txt['default_evil_smiley'] = 'Злой';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Афро';
$txt['default_laugh_smiley'] = 'Смех';
$txt['default_police_smiley'] = 'Полицейский';
$txt['default_angel_smiley'] = 'Ангел';

$txt['error_message_click'] = 'Нажмите сюда';
$txt['error_message_try_again'] = 'чтобы повторить действие.';
$txt['error_message_bad_try_again'] = 'продолжить установку <em>несмотря ни на что</em> (не рекомендуется).';

$txt['install_settings'] = 'Основные настройки';
$txt['install_settings_info'] = 'На этом шаге требуется указать основные настройки форума. SMF автоматически определил некоторые из них.';
$txt['install_settings_name'] = 'Название форума';
$txt['install_settings_name_info'] = 'Здесь указывается полное название вашего форума, например: «Тестовый форум».';
$txt['install_settings_name_default'] = 'Название вашего форума';
$txt['install_settings_url'] = 'URL-адрес форума';
$txt['install_settings_url_info'] = 'URL-адрес форума указывается <strong>без \'/\'</strong> в конце.<br>В большинстве случаев, можно оставить указанное значение по умолчанию.';
$txt['install_settings_reg_mode'] = 'Метод регистрации';
$txt['install_settings_reg_modes'] = 'Методы регистрации';
$txt['install_settings_reg_immediate'] = 'Мгновенная регистрация';
$txt['install_settings_reg_email'] = 'Активация по электронной почте';
$txt['install_settings_reg_admin'] = 'Одобрение пользователя';
$txt['install_settings_reg_disabled'] = 'Регистрация запрещена';
$txt['install_settings_reg_mode_info'] = 'Здесь можно изменить режим регистрации новых пользователей для предотвращения нежелательных регистраций сразу же после создания форума.';
$txt['install_settings_compress'] = 'Gzip сжатие';
$txt['install_settings_compress_title'] = 'Сжимать исходящие данные для экономии трафика.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Эта функция работает не на всех серверах, но может сэкономить вам много трафика.<br>Нажмите <a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);" target="_blank" rel="noopener">сюда</a> для проверки вашего сервера. (Если сжатие поддерживается сервером, появится слово "PASS".)';
$txt['install_settings_dbsession'] = 'Сессии в базе данных';
$txt['install_settings_dbsession_title'] = 'Хранить сессии в базе данных (вместо использования файлов).';
$txt['install_settings_dbsession_info1'] = 'Это лучший выбор, почти во всех случаях, так как делает хранение сессий более надежным.';
$txt['install_settings_dbsession_info2'] = 'Хорошая идея хранить сессии в базе данных, но на вашем сервере это может не работать.';
$txt['install_settings_utf8'] = 'Использовать кодировку UTF-8';
$txt['install_settings_utf8_title'] = 'Использовать кодировку UTF-8 по умолчанию';
$txt['install_settings_utf8_info'] = 'Эта функция позволяет базе данных и форуму использовать международную кодировку UTF-8. Это удобно при работе с несколькими языками, использующими разные наборы символов.';
$txt['install_settings_stats'] = 'Разрешить сбор статистики';
$txt['install_settings_stats_title'] = 'Разрешить Simple Machines собирать ежемесячную статистику';
$txt['install_settings_stats_info'] = 'При включении данной опции Simple Machines будет посещать ваш сайт раз в месяц для сбора обычной статистики. Это поможет нам принять решение по оптимизации программного обеспечения. Для получения подробной информации посетите <a href="https://www.simplemachines.org/about/stats.php" target="_blank" rel="noopener">информационную страницу</a>.';
$txt['install_settings_proceed'] = 'Продолжить';

$txt['db_settings'] = 'Настройки сервера базы данных';
$txt['db_settings_info'] = 'Настройки вашего сервера базы данных. Если эти данные неизвестны, обратитесь к хостеру.';
$txt['db_settings_type'] = 'Тип базы данных';
$txt['db_settings_type_info'] = 'Была обнаружена поддержка нескольких типов баз данных, которые можно использовать.';
$txt['db_settings_server'] = 'Адрес сервера';
$txt['db_settings_server_info'] = 'Обычно используется localhost.';
$txt['db_settings_username'] = 'Имя пользователя';
$txt['db_settings_username_info'] = 'Введите имя пользователя для подключения к базе данных.<br>Если не знаете его, попробуйте ввести логин от своего FTP-аккаунта, обычно они совпадают.';
$txt['db_settings_password'] = 'Пароль';
$txt['db_settings_password_info'] = 'Введите пароль для подключения к базе данных.<br>Если не знаете его, попробуйте пароль вашего FTP-аккаунта.';
$txt['db_settings_database'] = 'Название базы данных';
$txt['db_settings_database_info'] = 'Введите название базы данных, в которую будет установлен SMF.';
$txt['db_settings_database_info_note'] = 'Если указанная база данных не существует, программа установки попробует создать её.';
$txt['db_settings_port'] = 'Порт БД';
$txt['db_settings_port_info'] = 'Оставьте пустым, чтобы использовать стандартный';
$txt['db_settings_database_file'] = 'Название файла базы данных';
$txt['db_settings_database_file_info'] = 'Название файла, в котором будут храниться данные SMF. Мы рекомендуем использовать случайно сгенерированное название и не использовать общедоступную директорию на вашем веб-сервере.';
$txt['db_settings_prefix'] = 'Префикс таблиц базы данных';
$txt['db_settings_prefix_info'] = 'Префикс для каждой таблицы в базе данных. <strong>Не устанавливайте два форума с одним и тем же префиксом!</strong><br>Разные префиксы позволяют устанавливать несколько форумов в одну базу данных.';
$txt['db_populate'] = 'База данных заполнена';
$txt['db_populate_info'] = 'Ваши настройки были сохранены и база данных была заполнена всеми данными, необходимыми для работы форума. Итог заполнения:';
$txt['db_populate_info2'] = 'Нажмите «Продолжить», чтобы перейти к созданию учётной записи администратора.';
$txt['db_populate_inserts'] = 'Вставлено %1$d строк.';
$txt['db_populate_tables'] = 'Создано %1$d таблиц.';
$txt['db_populate_insert_dups'] = 'Проигнорировано %1$d дублирующихся строк.';
$txt['db_populate_table_dups'] = 'Проигнорировано %1$d дублирующихся таблиц.';

$txt['user_settings'] = 'Создание учётной записи';
$txt['user_settings_info'] = 'Программа установки создаст учётную запись администратора.';
$txt['user_settings_username'] = 'Имя пользователя';
$txt['user_settings_username_info'] = 'Выберите имя, которое хотите использовать.<br>Внимание! Это имя не подлежит изменению в дальнейшем! Можно будет поменять только отображаемое имя.';
$txt['user_settings_password'] = 'Пароль';
$txt['user_settings_password_info'] = 'Введите пароль и запомните его!';
$txt['user_settings_again'] = 'Подтвердите пароль';
$txt['user_settings_again_info'] = '(подтверждение пароля)';
$txt['user_settings_admin_email'] = 'E-mail адрес администратора';
$txt['user_settings_admin_email_info'] = 'Укажите ваш электронный адрес. Это должен быть действительный адрес!';
$txt['user_settings_server_email'] = 'E-mail веб-мастера';
$txt['user_settings_server_email_info'] = 'Укажите <strong>электронный адрес для уведомлений</strong>. Это должен быть действительный адрес!';
$txt['user_settings_database'] = 'Пароль к базе данных';
$txt['user_settings_database_info'] = 'В целях безопасности, для создания учётной записи администратора, требуется ввести пароль к базе данных.';
$txt['user_settings_skip'] = 'Пропустить';
$txt['user_settings_skip_sure'] = 'Хотите пропустить создание учётной записи администратора?';
$txt['user_settings_proceed'] = 'Продолжить';

$txt['ftp_checking_writable'] = 'Проверка прав доступа на запись для файлов';
$txt['ftp_setup'] = 'Настройки FTP-сервера';
$txt['ftp_setup_info'] = 'Программа установки может подключиться к серверу по протоколу FTP, чтобы изменить атрибуты файлов(папок), если необходимо изменить права на запись. Если программа установки, по каким-то причинам, не смогла этого сделать, рекомендуется вручную зайти в папку форума через FTP и изменить атрибуты требуемых файлов на нужные. Помните, что SSL ещё не поддерживается.';
$txt['ftp_server'] = 'FTP-сервер';
$txt['ftp_server_info'] = 'Укажите адрес FTP-сервера (обычно localhost) и порт.';
$txt['ftp_port'] = 'Порт';
$txt['ftp_username'] = 'Имя пользователя';
$txt['ftp_username_info'] = 'Имя пользователя для доступа к FTP. <em>В дальнейшем нигде не используется и не сохраняется.</em>';
$txt['ftp_password'] = 'Пароль';
$txt['ftp_password_info'] = 'Пароль для доступа к FTP. <em>В дальнейшем нигде не используется и не сохраняется.</em>';
$txt['ftp_path'] = 'Путь установки';
$txt['ftp_path_info'] = 'Это <em>относительный</em> путь, используемый вашим FTP клиентом <a href="' . $_SERVER['PHP_SELF'] . '?ftphelp" onclick="window.open(this.href, \'\', \'width=450,height=250\');return false;" target="_blank">(помощь)</a>.';
$txt['ftp_path_found_info'] = 'Найденный путь.';
$txt['ftp_connect'] = 'Подключиться';
$txt['ftp_setup_why'] = 'Для чего это нужно?';
$txt['ftp_setup_why_info'] = 'Некоторые файлы должны иметь права на запись. Программа установки может попытаться сделать их таковыми, если по каким-то причинам этого не произошло, пожалуйста, измените права на запись для этих файлов вручную. CHMOD 777 (на некоторых серверах 755):';
$txt['ftp_setup_again'] = 'Проверить права на запись.';

$txt['error_php_too_low'] = 'Внимание! Для работы SMF <strong>требуется более новая версия PHP</strong>.<br>Если вы пользуетесь услугами хостинга, обратитесь к хостеру с просьбой обновить версию PHP или смените хостинг.<br><br>Если вы уверены, что версия PHP соответствует требованиям SMF, установку форума можно продолжить, но это НЕ рекомендуется.';
$txt['error_missing_files'] = 'Программе установки не хватает некоторых файлов!<br><br>Удостоверьтесь в том, что загрузили на сервер все файлы и попробуйте снова.';
$txt['error_session_save_path'] = 'Оповестите вашего хостера о том, что <strong>session.save_path указанный в php.ini</strong> неверный!  Путь необходимо изменить на <strong>существующую</strong> директорию, которая <strong>имеет права на запись</strong> для пользователя под которым работает PHP.<br>';
$txt['error_windows_chmod'] = 'Вы используете сервер на базе Windows, и некоторые файлы не имеют прав на запись. Обратитесь к вашему хостеру, с просьбой дать <strong>права на запись</strong>, пользователю, под которым работает PHP. Следующие файлы и папки должны иметь права на запись:';
$txt['error_ftp_no_connect'] = 'Невозможно подключиться к FTP серверу с указанными данными.';
$txt['error_db_file'] = 'Исходный установочный файл базы данных не найден! Пожалуйста, проверьте файл %1$s, находящийся в директории форума.';
$txt['error_db_connect'] = 'Невозможно соединиться с базой данных.<br><br> Если не уверены, что ввели правильные данные, обратитесь к своему хостеру.';
$txt['error_db_too_low'] = 'Версия используемого сервера баз данных очень старая и не отвечает минимальным требованиям SMF.<br><br>Попросите своего хостера обновить или сменить её на более новую. В случае отказа, попробуйте другой хостинг.';
$txt['error_db_database'] = 'Программа установки не может получить доступ к базе данных «<em>%1$s</em>».  На некоторых хостингах базу данных нужно создать через панель администрирования, прежде чем SMF сможет использовать её. На некоторых добавляется префикс к имени базы данных, например, имя пользователя хостинга.';
$txt['error_db_queries'] = 'Некоторые запросы выполнены некорректно. Это могло произойти из-за неподдерживаемой версии программного обеспечения базы данных (для разработчиков или устаревшая).<br><br>Техническая информация о запросах:';
$txt['error_db_queries_line'] = 'Строка #';
$txt['error_db_missing'] = 'Программа установки не обнаружила поддержку баз данных в PHP.  Пожалуйста, спросите вашего хостера, скомпилирован ли PHP с поддержкой баз данных и загружены ли необходимые модули.';
$txt['error_db_script_missing'] = 'Программа установки не может найти установочные файлы для обнаруженных баз данных. Пожалуйста, проверьте что загрузили необходимые файлы установки в директорию форума, например «%1$s»';
$txt['error_session_missing'] = 'Программа установки не смогла определить поддержку сессий в PHP на вашем сервере.  Уточните у хостера, что PHP установлен с поддержкой сессий.';
$txt['error_user_settings_again_match'] = 'Пароли не совпадают!';
$txt['error_user_settings_no_password'] = 'Ваш пароль должен быть длиннее четырех символов.';
$txt['error_user_settings_taken'] = 'Пользователь с таким именем и/или электронным адресом уже зарегистрирован.<br><br>Учётная запись не создана.';
$txt['error_user_settings_query'] = 'Во время создания учётной записи администратора возникла следующая ошибка:';
$txt['error_subs_missing'] = 'Отсутствует файл Sources/Subs.php. Удостоверьтесь в том, что загрузили на сервер все файлы и попробуйте снова.';
$txt['error_db_alter_priv'] = 'Учётная запись базы аккаунта не имеет следующих прав доступа ALTER, CREATE, и/или DROP в базе данных; это важно для правильной работы SMF.';
$txt['error_versions_do_not_match'] = 'Программа установки обнаружила другую установленную версию SMF с указанными настройками. Если вы хотите обновить установленную версию, воспользуйтесь программой обновления (upgrade.php).<br><br>Или вы можете указать другие настройки для установки. Или сделайте бэкап и удалите содержимое базы данных, чтобы выполнить установку заново.';
$txt['error_mod_security'] = 'Программа установки обнаружила установленный модуль mod_security. Этот модуль будет блокировать передающиеся формами данные. SMF форум имеет встроенный сканер безопасности, который превосходит по возможностям этот модуль и работает намного эффективней.<br><br><a href="https://www.simplemachines.org/redirect/mod_security">Информация по отключению mod_security</a>';
$txt['error_mod_security_no_write'] = 'Программа установки обнаружила установленный модуль mod_security. Этот модуль будет блокировать передающиеся формами данные. SMF форум имеет встроенный сканер безопасности, который превосходит по возможностям этот модуль и работает намного эффективней.<br><br><a href="https://www.simplemachines.org/redirect/mod_security">Информация по отключению mod_security</a><br><br>Также, вы можете сделать файл .htaccess доступным для записи, изменив права доступа  (chmod 777) используя фтп-клиент и обновить эту страницу.';
$txt['error_utf8_version'] = 'Текущая версия вашей базы данных не поддерживает кодировку UTF-8. Можно продолжить установку SMF без особых проблем, но без поддержки UTF-8. Если захотите переключить форум в UTF-8 в будущем (например, после того как сервер базы данных форума будет обновлен хотя бы до версии >= %1$s), можно будет конвертировать форум в UTF-8 через панель администрирования.';
$txt['error_valid_admin_email_needed'] = 'Вы не ввели корректный электронный адрес администратора.';
$txt['error_valid_server_email_needed'] = 'Вы не ввели корректный электронный адрес веб-мастера.';
$txt['error_already_installed'] = 'Программа установки обнаружила, что SMF уже установлен. Настоятельно <strong>не</strong> рекомендуется пытаться перезаписать установленный форум. Продолжение установки <strong>может привести к потере или повреждению имеющихся данных</strong>.<br><br>Если вы хотите произвести обновление, посетите сайт <a href="https://www.simplemachines.org">Simple Machines</a> и загрузите последний пакет <em>обновления</em>.<br><br>Если вы хотите перезаписать установленный форум, стерев все данные, то рекомендуется удалить таблицы форума из существующей базы данных, удалить Settings.php и повторить попытку установки.';
$txt['error_warning_notice'] = 'Предупреждение!';
$txt['error_script_outdated'] = 'Программа установки устарела! Последняя версия SMF: %1$s, а ваша программа установки для %2$s.<br><br>
	Рекомендуется посетить сайт <a href="https://www.simplemachines.org">Simple Machines</a> чтобы удостовериться, что устанавливается самая последняя версия.';
$txt['error_db_prefix_numeric'] = 'Выбранный тип базы данных не поддерживает использование числовых префиксов.';
$txt['error_invalid_characters_username'] = 'Неверный символ в имени пользователя.';
$txt['error_username_too_long'] = 'Имя пользователя должно быть не больше 25 символов.';
$txt['error_username_left_empty'] = 'Не введено имя пользователя.';
$txt['error_db_filename_exists'] = 'База данных, которую вы пытаетесь создать, уже существует. Удалите существующий файл базы данных или введите другое имя.';
$txt['error_db_prefix_reserved'] = 'Указанный префикс является зарезервированным. Введите другой.';
$txt['error_utf8_support'] = 'База данных, которую вы пытаетесь использовать, не использует кодировку UTF8';

$txt['ftp_login'] = 'Настройки FTP';
$txt['ftp_login_info'] = 'Веб-установщику требуются реквизиты FTP доступа. Эта информация используется только в процессе установки и не будет нигде сохранена.';
$txt['ftp_server'] = 'FTP-сервер';
$txt['ftp_server_info'] = 'Укажите адрес FTP-сервера (обычно localhost) и порт.';
$txt['ftp_port'] = 'Порт';
$txt['ftp_username'] = 'Имя пользователя';
$txt['ftp_username_info'] = 'Имя пользователя для доступа к FTP. <em>В дальнейшем нигде не используется и не сохраняется.</em>';
$txt['ftp_password'] = 'Пароль';
$txt['ftp_password_info'] = 'Пароль для доступа к FTP. <em>В дальнейшем нигде не используется и не сохраняется.</em>';
$txt['ftp_path'] = 'Путь установки';
$txt['ftp_path_info'] = 'Это <em>относительный</em> путь, используемый вашим FTP клиентом <a href="' . $_SERVER['PHP_SELF'] . '?ftphelp" onclick="window.open(this.href, \'\', \'width=450,height=250\');return false;" target="_blank">(помощь)</a>.';
$txt['ftp_path_found_info'] = 'Найденный путь.';
$txt['ftp_path_help'] = 'Путь FTP &mdash; путь к директории форума, который вы видите, подключившись к нему через FTP клиент. Обычно начинается с «<pre>www</pre>», «<pre>public_html</pre>» или «<pre>httpdocs</pre>», но должен включать и директорию SMF, например, «/public_html/forum». Это не то же самое, что URL-адрес форума и полный путь.<br><br>Файлы, находящиеся по указанному пути, будут перезаписаны, так что, убедитесь в его корректности.';
$txt['ftp_path_help_close'] = 'Закрыть';
$txt['ftp_connect'] = 'Подключиться';

$txt['force_ssl'] = 'Включить SSL';
$txt['force_ssl_label'] = 'Принудительный SSL на всем форуме';
$txt['force_ssl_info'] = 'Убедитесь, что SSL and HTTPS поддерживаются везде на форуме, иначе он может стать недоступен';

$txt['chmod_linux_info'] = 'Если у вас есть доступ к консоли ssh, выполнение указанной ниже команды автоматически исправит права доступа для этих файлов.';

// The upgrader needs text strings too!
$txt['upgrade_step_login'] = 'Вход';
$txt['upgrade_step_options'] = 'Параметры обновления';
$txt['upgrade_step_backup'] = 'Резервная копия';
$txt['upgrade_step_database'] = 'Изменения базы данных';
$txt['upgrade_step_convertutf'] = 'Конвертация в UTF-8';
$txt['upgrade_step_convertjson'] = 'Конвертация сериализованных строк в JSON';
$txt['upgrade_step_delete'] = 'Удалить Upgrade.php';

$txt['upgrade_upgrade_utility'] = 'Утилита обновления SMF';
$txt['upgrade_warning'] = 'Внимание!';
$txt['upgrade_critical_error'] = 'Критическая ошибка!';
$txt['upgrade_continue'] = 'Продолжить';
$txt['upgrade_skip'] = 'Пропустить';
$txt['upgrade_note'] = 'Примечание!';
$txt['upgrade_step'] = 'Шаг';
$txt['upgrade_steps'] = 'Шаги';
$txt['upgrade_progress'] = 'Выполнено';
$txt['upgrade_overall_progress'] = 'Выполнено всего';
$txt['upgrade_step_progress'] = 'Текущий шаг';
$txt['upgrade_time_elapsed'] = 'Прошло времени';
$txt['upgrade_time_mins'] = 'мин.';
$txt['upgrade_time_secs'] = 'сек.';
$txt['upgrade_username'] = 'Имя пользователя:';
$txt['upgrade_wrong_username'] = 'Неверное имя пользователя';
$txt['upgrade_password'] = 'Пароль:';
$txt['upgrade_wrong_password'] = 'Неверный пароль';

$txt['upgrade_wait'] = 'Подождите, пока будет создана резервная копия. Для больших форумов это может занять некоторое время!';
$txt['upgrade_wait2'] = 'Пожалуйста, подождите, пока ваша база данных будет преобразована в UTF-8. Для больших форумов это может занять некоторое время!';
$txt['upgrade_sec_login'] = 'В целях безопасности войдите в систему с учетной записью администратора, чтобы продолжить обновление.';
$txt['upgrade_incomplete'] = 'Не готово';
$txt['upgrade_not_quite_done'] = 'Ещё не совсем готово!';
$txt['upgrade_paused_overload'] = 'Обновление было приостановлено, чтобы избежать перегрузки вашего сервера. Не волнуйтесь, просто нажмите кнопку <label for="contbutt">Продолжить</label> внизу.';
$txt['upgrade_continue_step'] = 'Продолжить с шага, достигнутого во время последнего выполнения сценария обновления.';
$txt['upgrade_bypass'] = '<strong>Примечание:</strong> При необходимости вышеуказанную проверку безопасности можно обойти для пользователей, которые могут управлять сервером, но не иметь прав администратора на форуме. Чтобы обойти вышеуказанную проверку, просто откройте файл «upgrade.php» в текстовом редакторе и замените строчку «$disable_security = false;» на «$disable_security = true;», затем обновите эту страницу.';
$txt['upgrade_areyouready'] = 'Прежде чем обновление начнется, просмотрите приведенные ниже параметры - и нажмите «Продолжить», когда вы будете готовы начать.';
$txt['upgrade_backup_table'] = 'Резервное копирование таблиц в базе данных с префиксом';
$txt['upgrade_recommended'] = 'рекомендуется!';
$txt['upgrade_maintenace'] = 'Перевести форум в режим обслуживания во время обновления.';
$txt['upgrade_maintenance_title'] = 'Заголовок для режима обслуживания:';
$txt['upgrade_maintenace_message'] = 'Сообщение для режима обслуживания:';
$txt['upgrade_customize'] = 'Настроить';
$txt['upgrade_debug_info'] = 'Вывод дополнительной отладочной информации';
$txt['upgrade_empty_errlog'] = 'Очистить лог ошибок перед обновлением';
$txt['upgrade_delete_karma'] = 'Удалить все настройки кармы и информацию из БД';
$txt['upgrade_stats_collection'] = 'Разрешить Simple Machines собирать ежемесячную статистику.';
$txt['upgrade_stats_info'] = 'При включении данной опции Simple Machines будет посещать ваш сайт раз в месяц для сбора обычной статистики. Это поможет нам принять решение по оптимизации программного обеспечения. Для получения подробной информации посетите <a href="%1$s" target="_blank" rel="noopener">информационную страницу</a>.';

$txt['upgrade_db_changes'] = 'Выполнение изменений в базе данных';
$txt['upgrade_db_patient'] = 'Будьте терпеливы - это может занять некоторое время на больших форумах. Шкала прогресса покаызвает время, прошедшее с момента начала выполнения скрипта!';
$txt['upgrade_db_complete'] = '1 обновление базы данных завершено! Нажмите «Продолжить» для возобновления.';
$txt['upgrade_db_complete2'] = 'Обновление базы данных завершено! Нажмите «Продолжить» для возобновления.';
$txt['upgrade_script'] = 'Выполнение сценария обновления';
$txt['upgrade_error'] = 'Ошибка!';
$txt['upgrade_unknown_error'] = 'Неизвестная ошибка!';
/* Same sentence, 3 different strings */
$txt['upgrade_completed'] = 'Завершено';
$txt['upgrade_outof'] = 'из';
$txt['upgrade_tables'] = 'таблиц.';

$txt['upgrade_run_script'] = 'Мы рекомендуем вам не запускать этот скрипт, если вы не уверены, что';
$txt['upgrade_run_script2'] = 'завершит обновление.';
$txt['upgrade_run'] = 'Вы можете либо запустить обновление с самого начала, либо продолжить с последнего шага, достигнутого во время последнего обновления.';

$txt['upgrade_completed_table'] = 'Завершенная таблица:';
$txt['upgrade_current_table'] = 'Текущая таблица:';
$txt['upgrade_fulltext'] = 'Обратите внимание, что ваш полнотекстовый индекс был удален, чтобы облегчить преобразование, и его необходимо будет восстановить в области администрирования после завершения обновления.';
$txt['upgrade_conversion_proceed'] = 'Конвертация завершена! Нажмите «Продолжить» для возобновления.';
$txt['upgrade_convert_datajson'] = 'Преобразование данных из сериализации в JSON...';
$txt['upgrade_json_completed'] = 'Конвертация в JSON завершена! Нажмите «Продолжить» для возобновления.';
$txt['upgrade_executing'] = 'Выполнение:';
$txt['upgrade_of'] = '';
$txt['upgrade_admin_login'] = 'Логин администратора:';
/* Same sentence, 3 different strings */
$txt['upgrade_done'] = 'Это было не так сложно, не так ли?  Теперь вы готовы к использованию';
$txt['upgrade_done2'] = 'SMF';
$txt['upgrade_done3'] = 'Надеемся, вам понравится!';

$txt['upgrade_delete_now'] = 'Удалить файл update.php и вспомогательные файлы';
$txt['upgrade_delete_server'] = '(работает не на всех серверах).';
$txt['upgrade_completed_time'] = 'Обновление завершено в';
$txt['upgrade_problems'] = 'Если у вас возникли проблемы с этим обновлением или возникли проблемы с использованием SMF, пожалуйста, не стесняйтесь <a href="%1$s">обратиться за помощью</a>.';
$txt['upgrade_luck'] = 'Удачи,';

$txt['upgrade_ftp_login'] = 'Информация о вашем FTP-соединении';
$txt['upgrade_ftp_perms'] = 'Утилита обновления может исправить любые проблемы с разрешениями файлов, чтобы сделать обновление максимально простым. Просто введите информацию о подключении ниже или в качестве альтернативы нажмите <a href="#" onclick="warning_popup();">здесь</a> для получения списка файлов, которые необходимо изменить.';
$txt['upgrade_ftp_warning'] = 'Предупреждение';
$txt['upgrade_ftp_files'] = 'Следующие файлы должны быть доступны для записи, чтобы продолжить:';
$txt['upgrade_ftp_shell'] = 'Если у вас есть доступ к командной строке, удобная команда ниже может автоматически корректировать разрешения на эти файлы';
$txt['upgrade_ftp_error'] = 'При попытке подключения возникла следующая ошибка:';

$txt['upgrade_ready_proceed'] = 'Благодарим вас за выбор в пользу обновления до SMF %1$s. Все требуемые файлы на месте, можно приступать.';
$txt['upgrade_error_script_js'] = 'Программа обновления не может найти файл script.js, либо он устарел. Убедитесь, что настройки путей для вашей темы оформления указаны правильно. Используйте утилиту <a href="https://download.simplemachines.org/index.php?thanks;filename=repair_settings.php" target="_blank" rel="noopener">repair_settings</a> для проверки настроек.';
$txt['upgrade_warning_lots_data'] = 'Программа обновления обнаружила, что ваш форум содержит много данных, требующих обновления. Этот процесс может отнять довольно много времени, в зависимости от вашего сервера и размера форума, и для очень больших форумов (~300,000 сообщений) может занять несколько часов.';
$txt['upgrade_warning_out_of_date'] = 'Программа обновления устарела! Последняя версия SMF: <em id="smfVersion" style="white-space: nowrap;">??</em>, а ваша программа обновления для <em id="yourVersion" style="white-space: nowrap;">%1$s</em>.<br><br>Рекомендуется посетить сайт <a href="%2$s">Simple Machines</a>, чтобы удостовериться, что вы обновляетесь на последнюю версию.';

// Page titles
$txt['updating_smf_installation'] = 'Обновление вашей установки SMF!';
$txt['upgrade_options'] = 'Параметры обновления';
$txt['backup_database'] = 'Резервное копирование базы данных';
$txt['database_changes'] = 'Изменения базы данных';
$txt['upgrade_complete'] = 'Обновление завершено';
$txt['converting_utf8'] = 'Конвертация в UTF8';
$txt['converting_json'] = 'Конвертация в JSON';

?>
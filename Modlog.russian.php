<?php
// Version: 2.1 Beta 4; Modlog

$txt['modlog_date'] = 'Дата';
$txt['modlog_member'] = 'Пользователь';
$txt['modlog_position'] = 'Группа';
$txt['modlog_action'] = 'Действие';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Результаты поиска';
$txt['modlog_total_entries'] = 'Всего записей';
$txt['modlog_ac_approve_topic'] = 'Одобрена тема «{topic}» пользователя «{member}»';
$txt['modlog_ac_unapprove_topic'] = 'Отменено одобрение темы «{topic}» пользователя «{member}»';
$txt['modlog_ac_approve'] = 'Одобрено сообщение «{subject}» в теме «{topic}» от пользователя «{member}»';
$txt['modlog_ac_unapprove'] = 'Отменено одобрение сообщения «{subject}» в теме «{topic}» от пользователя «{member}»';
$txt['modlog_ac_lock'] = 'Заблокирована тема «{topic}»';
$txt['modlog_ac_warning'] = 'Пользователь {member} получил предупреждение за «{message}»';
$txt['modlog_ac_unlock'] = 'Разблокирована тема «{topic}»';
$txt['modlog_ac_sticky'] = 'Прикреплена тема «{topic}»';
$txt['modlog_ac_unsticky'] = 'Откреплена тема «{topic}»';
$txt['modlog_ac_delete'] = 'Удалено сообщение «{subject}» от пользователя «{member}» из темы «{topic}»';
$txt['modlog_ac_delete_member'] = 'Удален пользователь «{name}»';
$txt['modlog_ac_remove'] = 'Удалена тема «{topic}» из раздела «{board}»';
$txt['modlog_ac_modify'] = 'Отредактировано сообщение «{message}» от пользователя «{member}»';
$txt['modlog_ac_merge'] = 'Объединены темы в «{topic}»';
$txt['modlog_ac_split'] = 'Разделена тема «{topic}» новая тема «{new_topic}»';
$txt['modlog_ac_move'] = 'Перенесена тема «{topic}» из раздела «{board_from}» в раздел «{board_to}»';
$txt['modlog_ac_profile'] = 'Отредактирован профиль';
$txt['modlog_ac_pruned'] = 'Удалено несколько сообщений с возрастом более {days} дней';
$txt['modlog_ac_news'] = 'Изменены новости';
$txt['modlog_ac_clearlog_moderate'] = 'Очищен лог модерации';
$txt['modlog_ac_clearlog_admin'] = 'Очищен лог администрирования';
$txt['modlog_enter_comment'] = 'Ввести комментарий';
$txt['modlog_moderation_log'] = 'Лог модерации';
$txt['modlog_moderation_log_desc'] = 'Ниже показан список всех действий, произведенных модераторами форума.';
$txt['modlog_no_entries_found'] = 'Записей не найдено';
$txt['modlog_remove'] = 'Удалить';
$txt['modlog_removeall'] = 'Удалить все';
$txt['modlog_remove_selected_confirm'] = 'Уверены, что что хотите удалить выбранные записи?';
$txt['modlog_remove_all_confirm'] = 'Хотите полностью очистить лог?';
$txt['modlog_go'] = 'Поиск';
$txt['modlog_add'] = 'Добавить';
$txt['modlog_search'] = 'Быстрый поиск';
$txt['modlog_by'] = 'по имени';
$txt['modlog_id'] = '<em>(Удалено - ID:%1$d)</em>';

$txt['modlog_ac_add_warn_template'] = 'Добавлен шаблон предупреждения: «{template}»';
$txt['modlog_ac_modify_warn_template'] = 'Отредактирован шаблон предупреждения : «{template}»';
$txt['modlog_ac_delete_warn_template'] = 'Удален шаблон предупреждения: «{template}»';

$txt['modlog_ac_ban'] = 'Добавлены параметры бана:';
$txt['modlog_ac_ban_remove'] = 'Удалены параметры бана:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Пользователь:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>E-mail:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Имя хоста:</em> {hostname}';

$txt['modlog_admin_log'] = 'Логи администрирования';
$txt['modlog_admin_log_desc'] = 'Ниже показан список всех действий администраторов форума.';
$txt['modlog_admin_log_no_entries_found'] = 'Записей не найдено.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Форум обновлен до версии {version}';
$txt['modlog_ac_install'] = 'Установлена версия {version}';
$txt['modlog_ac_add_board'] = 'Добавлен новый раздел: «{board}»';
$txt['modlog_ac_edit_board'] = 'Изменен раздел «{board}»';
$txt['modlog_ac_delete_board'] = 'Удален раздел «{boardname}»';
$txt['modlog_ac_add_cat'] = 'Добавлена новая категория, «{catname}»';
$txt['modlog_ac_edit_cat'] = 'Изменена категория «{catname}»';
$txt['modlog_ac_delete_cat'] = 'Удалена категория «{catname}»';

$txt['modlog_ac_delete_group'] = 'Удалена группа «{group}»';
$txt['modlog_ac_add_group'] = 'Добавлена группа «{group}»';
$txt['modlog_ac_edited_group'] = 'Изменена группа «{group}»';
$txt['modlog_ac_added_to_group'] = 'Пользователь «{member}» добавлен в группу «{group}»';
$txt['modlog_ac_removed_from_group'] = 'Пользователь «{member}» удален из группы «{group}»';
$txt['modlog_ac_removed_all_groups'] = 'Пользователь «{member}» удален из всех групп';

$txt['modlog_ac_remind_member'] = 'Отправлено уведомление пользователю «{member}» для активации учётной записи';
$txt['modlog_ac_approve_member'] = 'Одобрена/Активирована учётная запись пользователя «{member}»';
$txt['modlog_ac_newsletter'] = 'Произведена рассылка';

$txt['modlog_ac_install_package'] = 'Установлен мод: «{package}», версия {version}';
$txt['modlog_ac_upgrade_package'] = 'Обновлен мод: «{package}» до версии {version}';
$txt['modlog_ac_uninstall_package'] = 'Удален мод: «{package}», версия {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Восстановлена тема «{topic}» из раздела «{board}» в раздел «{board_to}»';
$txt['modlog_ac_restore_posts'] = 'Восстановлены сообщения из темы «{subject}» в тему «{topic}» в раздел «{board}».';

$txt['modlog_parameter_guest'] = '<em>Гость</em>';

$txt['modlog_ac_approve_attach'] = 'Одобрено вложение «{filename}» в сообщении «{message}»';
$txt['modlog_ac_remove_attach'] = 'Удалено неодобренное вложение «{filename}» в сообщении «{message}»';

// Handling reports on posts
$txt['modlog_report'] = 'жалоба';
$txt['modlog_ac_close_report'] = 'Закрыта жалоба {report} на сообщение «{message}»';
$txt['modlog_ac_ignore_report'] = 'Проигнорирована жалоба {report} на сообщение «{message}»';
$txt['modlog_ac_open_report'] = 'Открыта заново жалоба {report} на сообщение «{message}»';
$txt['modlog_ac_unignore_report'] = 'Отменено игнорирование жалобы {report} на сообщение «{message}»';

// Handling reports on users
$txt['modlog_ac_close_user_report'] = 'Закрыта жалоба {report} на профиль {member}';
$txt['modlog_ac_ignore_user_report'] = 'Проигнорирована жалоба {report} на профиль {member}';
$txt['modlog_ac_open_user_report'] = 'Открыта заново жалоба {report} на профиль {member}';
$txt['modlog_ac_unignore_user_report'] = 'Отменено игнорирование жалобы {report} на профиль {member}';

// Poll stuff
$txt['modlog_ac_add_poll'] = 'Добавлено голосование в тему «{topic}»';
$txt['modlog_ac_edit_poll'] = 'Отредактировано голосование в теме «{topic}»';
$txt['modlog_ac_lock_poll'] = 'Закрыто голосование в теме «{topic}»';
$txt['modlog_ac_remove_poll'] = 'Удалено голосование из темы «{topic}»';
$txt['modlog_ac_reset_poll'] = 'Сброшены результаты голосования в теме «{topic}»';
$txt['modlog_ac_unlock_poll'] = 'Заново открыто голосование в теме «{topic}»';

?>
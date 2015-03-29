<?php
$MCR_TICKETS_LANG = array (
	'TICKETS'               => 'Тикеты',
	'TICKETS_ADM'           => 'Управление тикетами',
	'TICKET_ADMINISTRATORS' => 'Сообщение администратора',
	'TICKET_MODERATORS'     => 'Сообщение модератора',
	'TICKET_CLOSED'         => '(Закрыто)',
	'TICKET_VIEWED'         => '(Просмотрено)',
	'TICKET_UNVIEWED'       => '(Непросмотрено)',
	'' => '',
);
/* Строки, появляющиеся в шаблонах, автоматически заменяются парсером страниц */
$MCR_TICKETS_LANG_TPL = array(
	'{TICKETS}'             => $MCR_TICKETS_LANG['TICKETS'],
	'{WRITE_TICKET}'        => 'Написать тикет',
	'{WRITE_TICKET_DESC}'   => 'Написать тикет - это удобный способ связаться с администратором сервера. Пожалуйста, НЕ ПИШИТЕ несколько тикетов по одному вопросу, это только увеличит время, через которое тикет будет прочтен администратором.',
	'{RECENT}'              => 'Осталось',
	'{SYMBOLS}'             => 'символов',
	'{SEND}'                => 'Отправить',
	'{}' => '',
);
<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . 'C:/lp/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		 require_once($_SERVER['DOCUMENT_ROOT'] . 'C:/lp/smartbasket/php/phpmailer/smtp.php');
		 const HOST = 'smtp.gmail.com';
		 const LOGIN = 'eldar.nurtaza.02.03@gmail.com';
		 const PASS = 'SadSongsPart2';
		 const PORT = '465';

		// *** /SMTP *** //
   
    const SENDER = 'eldar.nurtaza.02.03@gmail.com';
    const CATCHER = 'nurtazayeldar@gmail.com';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    
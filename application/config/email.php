<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 09/12/2015
 * Time: 2:15 PM
 *
 * IMPORTANT!!!!!!!!!!
 *
 * http://stackoverflow.com/questions/17909913/send-email-with-google-account-using-codeigniter
 *
 * 1. Set off 2-step Verification.
 * 2. Allow less secure apps: ON (or Enable)
 *
 */

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
$config['smtp_port'] = '465';
/*
$config['smtp_user'] = 'vitalie.klf@gmail.com'; //change this
$config['klf_email'] = 'vitalie.klf@gmail.com'; //change this
$config['smtp_pass'] = '!20vitalie.klf05'; //change this
*/

$config['smtp_user'] = 'lombardi@klfmedia.com'; //change this
$config['klf_email'] = 'lombardi@klfmedia.com'; //change this
$config['smtp_pass'] = 'KLFmedia20161'; //change this

$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
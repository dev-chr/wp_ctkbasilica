<?php

namespace SimpleMail;

/**
 * Powerful Class to send emails with PHP.
 *
 * @package   SimpleMail
 * @author    Pedro Rogério <pinceladasdaweb@hotmail.com>
 * @copyright 2016 Pedro Rogério <pinceladasdaweb@hotmail.com>
 */

class SimpleMail
{
    protected $to;
    protected $from;
    protected $sender;
    protected $subject;
    protected $html;

    public function setTo($to)
    {
        $this->to = $to;
    }

    public function setFrom($from)
    {
        $this->from = $from;
    }

    public function setSender($sender)
    {
        $this->sender = $sender;
    }
    
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function setHtml($html)
    {
        $this->html = $html;
    }

    public function send()
    {
        $boundary = '----=_NextPart_' . md5(time());

        $header   = 'MIME-Version: 1.0' . PHP_EOL;
        $header  .= 'Date: ' . date('D, d M Y H:i:s O') . PHP_EOL;
        $header  .= 'From: =?UTF-8?B?' . base64_encode($this->sender) . '?= <' . $this->from . '>' . PHP_EOL;
        $header  .= 'Reply-To: =?UTF-8?B?' . base64_encode($this->replyTo) . '?= <' . $this->replyTo . '>' . PHP_EOL;
        $header  .= 'Return-Path: ' . $this->from . PHP_EOL;
        $header  .= 'X-Mailer: PHP/' . phpversion() . PHP_EOL;
        $header  .= 'X-Priority: 3' . PHP_EOL;
        $header  .= 'MIME-Version: 1.0' . PHP_EOL;
        $header  .= 'Message-ID: ' . '<' . md5(uniqid(rand(), true )) . '@' . $_SERVER[ 'HTTP_HOST' ] . '>' . PHP_EOL;
        
        $message = "";
        $message .= $this->html . PHP_EOL;

        ini_set('sendmail_from', $this->from);

        mail($this->to, '=?UTF-8?B?' . base64_encode($this->subject) . '?=', $message, $header);
    }
}
<?php

namespace XF\Mail;

class SmtpTransport extends \Swift_SmtpTransport
{
	public function stop()
	{
		parent::stop();

		// Workaround for https://github.com/swiftmailer/swiftmailer/issues/1338
		$this->pipeline = [];
	}
}
<?php

namespace porshkevich\sms;

/**
 * Interface SmsServiceInterface
 * @package porshkevich\sms
 */
interface SmsServiceInterface
{
	/**
	 * @param string $phone
	 * @param string $message
	 * @param string $from
	 * @return bool
	 */
	public function send($phone, $message, $from);
}
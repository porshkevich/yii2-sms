<?php

namespace porshkevich\sms;

use yii\base\Component;
use yii\di\Instance;

/**
 * Class Sms
 * @package \porshkevich\sms
 */
class Sms extends Component
{
	/**
	 * SMS service
	 * @var SmsServiceInterface[]
	 */
	public $service;

	public function init() {
		if (!$this->service)
			throw new InvalidConfigException('The "service" property must be set.');

		$this->service = Instance::ensure($this->service, SmsServiceInterface);
	}

	/**
	 * @param string $phone
	 * @param string $message
	 * @param string $from
	 * @return bool
	 */
	public function send($phone, $message, $from = null)
	{
		return $this->service->send($phone, $message, $from);
	}
}
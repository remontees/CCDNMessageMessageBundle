<?php

/*
 * This file is part of the CCDNMessage MessageBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/>
 *
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CCDNMessage\MessageBundle\Model\Component\Manager;

use CCDNMessage\MessageBundle\Model\Component\Manager\ManagerInterface;
use CCDNMessage\MessageBundle\Model\Component\Manager\BaseManager;
use CCDNMessage\MessageBundle\Entity\Message;

/**
 *
 * @category CCDNMessage
 * @package  MessageBundle
 *
 * @author   Reece Fowell <reece@codeconsortium.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @version  Release: 2.0
 * @link     https://github.com/codeconsortium/CCDNMessageMessageBundle
 *
 */
class MessageManager extends BaseManager implements ManagerInterface
{
    /**
     *
     * @access public
     * @return \CCDNMessage\MessageBundle\Entity\Message
     */
    public function createMessage()
    {
        return $this->gateway->createMessage();
    }

    public function saveMessage(Message $message)
    {
        $this->persist($message);
        $this->flush();
        $this->refresh($message);

        return $message;
    }
}

<?php
/**
 * Horde_Core_ActiveSync_Imap_Factory
 *
 * PHP Version 5
 *
 * @license   http://www.horde.org/licenses/gpl GPLv2
 * @copyright 2010-2012 Horde LLC (http://www.horde.org/)
 * @author    Michael J Rubinsky <mrubinsk@horde.org>
 * @link      http://pear.horde.org/index.php?package=Core
 * @package   Core
 */
/**
 * Horde_Core_ActiveSync_Imap_Factory:: Implements a factory/builder for
 * providing a Horde_ActiveSync_Imap_Adapter object as well as building
 * a tree of available mailboxes.
 *
 * @license   http://www.horde.org/licenses/gpl GPLv2
 * @copyright 2010-2012 Horde LLC (http://www.horde.org/)
 * @author    Michael J Rubinsky <mrubinsk@horde.org>
 * @link      http://pear.horde.org/index.php?package=Core
 * @package   Core
 */

class Horde_Core_ActiveSync_Imap_Factory implements Horde_ActiveSync_Interface_ImapFactory
{

    protected $_adapter;
    protected $_mailboxlist;
    protected $_specialMailboxlist;

    public function getImapOb()
    {
        if (empty($this->_adapter)) {
            $this->_adapter = $GLOBALS['registry']->mail->imapOb();
        }
        return $this->_adapter;
    }

    public function getMailboxes()
    {
        if (empty($this->_mailboxlist)) {
            $this->_mailboxlist = $GLOBALS['registry']->mail->mailboxList();
        }
        return $this->_mailboxlist;
    }

    public function getSpecialMailboxes()
    {
        if (empty($this->_specialMailboxlist)) {
            $this->_specialMailboxlist = $GLOBALS['registry']->mail->getSpecialMailboxes();
        }
        return $this->_specialMailboxlist;
    }

}
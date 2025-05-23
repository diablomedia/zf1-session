<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Session
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 * @since      Preview Release 0.2
 */

/**
 * Zend_Session_SaveHandler_Interface
 *
 * @category   Zend
 * @package    Zend_Session
 * @subpackage SaveHandler
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @see        http://php.net/session_set_save_handler
 */
interface Zend_Session_SaveHandler_Interface extends SessionHandlerInterface
{

    /**
     * Open Session - retrieve resources
     *
     * @param string $save_path
     * @param string $name
     * @return bool
     */
    public function open($save_path, $name): bool;

    /**
     * Close Session - free resources
     *
     * @return bool
     */
    public function close(): bool;

    /**
     * Read session data
     *
     * @param string $id
     * @return string|false
     */
    public function read($id): string|false;

    /**
     * Write Session - commit data to resource
     *
     * @param string $id
     * @param string $data
     * @return bool
     */
    public function write($id, $data): bool;

    /**
     * Destroy Session - remove data from resource for
     * given session id
     *
     * @param string $id
     * @return bool
     */
    public function destroy($id): bool;

    /**
     * Garbage Collection - remove old session data older
     * than $maxlifetime (in seconds)
     *
     * @param int $maxlifetime
     * @return int|false
     */
    public function gc($maxlifetime): int|false;
}

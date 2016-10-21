<?php
/**
 * This file is part of the Elephant.io package
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 *
 * @copyright Wisembly
 * @license   http://www.opensource.org/licenses/MIT-License MIT License
 */

require __DIR__ . '/vendor/autoload.php';

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version1X;

$client = new Client(new Version1X('http://127.0.0.1:2021'));
$client->initialize();
$client->emit('chat message', ['foo' => 'bar']);
$client->close();
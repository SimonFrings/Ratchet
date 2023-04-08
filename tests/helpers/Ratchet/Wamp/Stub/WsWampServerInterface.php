<?php

namespace Ratchet\Tests\helpers\Ratchet\Wamp\Stub;

use Ratchet\WebSocket\WsServerInterface;
use Ratchet\Wamp\WampServerInterface;

interface WsWampServerInterface extends WsServerInterface, WampServerInterface {
}

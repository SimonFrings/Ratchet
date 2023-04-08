<?php

namespace Ratchet\Tests\helpers\Ratchet\WebSocket\Stub;

use Ratchet\MessageComponentInterface;
use Ratchet\WebSocket\WsServerInterface;

interface WsMessageComponentInterface extends MessageComponentInterface, WsServerInterface {
}

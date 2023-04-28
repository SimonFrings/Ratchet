<?php

namespace Ratchet;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function _version() {
        if (class_exists('\PHPUnit_Runner_Version')) {
            return \PHPUnit_Runner_Version::id();
        } else {
            return \PHPUnit\Runner\Version::id();
        }
    }

    public function _getMock() {
        $params = func_get_args();
        if ($this->_version() < 6) {
            return call_user_func_array([$this, 'getMock'], $params);
        } else {
            return call_user_func_array([$this, 'createMock'], $params);
        }
    }
}
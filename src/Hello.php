<?php
namespace Zrh\Hello;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Hello
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param string $session
     * @param string $config
     */
    public function __construct($session, $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($msg = ''){
        // $config_arr = $this->config->get('packagetest.options');
        return $msg.' <strong>from your custom develop package!</strong>>';
    }
}

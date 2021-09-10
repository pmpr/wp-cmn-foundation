<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;


class Logger extends Common
{
    const DEFAULT_CHANNEL = 'default';
    
    protected ?Engine $engine = null;
    public function __construct()
    {
        $this->engine = Engine::symcgieuakksimmu();
        parent::__construct();
        $this->uykissogmuaaocsg()->aeywacagikkcgoak(self::DEFAULT_CHANNEL, self::DEFAULT_CHANNEL);
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('plugins_loaded', [$this, 'asaoeguukamcykic']);
        parent::wigskegsqequoeks();
    }
    public function asaoeguukamcykic()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('add_channel'), $this);
    }
    
    public function uykissogmuaaocsg() : ?Engine
    {
        return $this->engine;
    }
}

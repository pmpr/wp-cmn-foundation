<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;


class Logger extends Common
{
    const DEFAULT_CHANNEL = "\x64\145\x66\141\x75\x6c\x74";
    
    protected ?Engine $engine = null;
    public function __construct()
    {
        goto kysgsayqeakiwmic;
        eeiseascemqaocmo:
        parent::__construct();
        goto iukkuoewgiwcoukw;
        iukkuoewgiwcoukw:
        $this->uykissogmuaaocsg()->aeywacagikkcgoak(self::DEFAULT_CHANNEL, self::DEFAULT_CHANNEL);
        goto cgamwegmkwmmsoow;
        kysgsayqeakiwmic:
        $this->engine = Engine::symcgieuakksimmu();
        goto eeiseascemqaocmo;
        cgamwegmkwmmsoow:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x70\154\165\x67\x69\156\x73\x5f\154\157\x61\x64\x65\x64", [$this, "\141\x73\x61\x6f\145\147\165\x75\153\141\155\143\171\x6b\151\x63"]);
        parent::wigskegsqequoeks();
    }
    public function asaoeguukamcykic()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\144\x64\x5f\143\x68\141\156\x6e\145\154"), $this);
    }
    
    public function uykissogmuaaocsg() : ?Engine
    {
        return $this->engine;
    }
}

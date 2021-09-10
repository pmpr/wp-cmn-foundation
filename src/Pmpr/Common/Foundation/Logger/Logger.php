<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;


class Logger extends Common
{
    const DEFAULT_CHANNEL = "\x64\x65\146\141\x75\154\x74";
    
    protected ?Engine $engine = null;
    public function __construct()
    {
        goto kysgsayqeakiwmic;
        iukkuoewgiwcoukw:
        $this->uykissogmuaaocsg()->aeywacagikkcgoak(self::DEFAULT_CHANNEL, self::DEFAULT_CHANNEL);
        goto cgamwegmkwmmsoow;
        eeiseascemqaocmo:
        parent::__construct();
        goto iukkuoewgiwcoukw;
        kysgsayqeakiwmic:
        $this->engine = Engine::symcgieuakksimmu();
        goto eeiseascemqaocmo;
        cgamwegmkwmmsoow:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x70\154\x75\147\151\156\163\137\154\x6f\141\144\145\x64", [$this, "\x61\x73\x61\157\x65\147\x75\165\x6b\141\x6d\143\171\153\151\x63"]);
        parent::wigskegsqequoeks();
    }
    public function asaoeguukamcykic()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\144\144\137\143\x68\141\x6e\x6e\145\154"), $this);
    }
    
    public function uykissogmuaaocsg() : ?Engine
    {
        return $this->engine;
    }
}

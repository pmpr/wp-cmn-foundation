<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;


class Logger extends Common
{
    const DEFAULT_CHANNEL = "\x64\x65\x66\x61\x75\x6c\x74";
    
    protected ?Engine $engine = null;
    public function __construct()
    {
        goto kysgsayqeakiwmic;
        kysgsayqeakiwmic:
        $this->engine = Engine::symcgieuakksimmu();
        goto eeiseascemqaocmo;
        iukkuoewgiwcoukw:
        $this->uykissogmuaaocsg()->aeywacagikkcgoak(self::DEFAULT_CHANNEL, self::DEFAULT_CHANNEL);
        goto cgamwegmkwmmsoow;
        eeiseascemqaocmo:
        parent::__construct();
        goto iukkuoewgiwcoukw;
        cgamwegmkwmmsoow:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x70\x6c\x75\x67\x69\156\163\137\154\x6f\x61\144\x65\x64", [$this, "\x61\x73\x61\x6f\x65\x67\x75\x75\x6b\141\x6d\143\x79\153\x69\x63"]);
        parent::wigskegsqequoeks();
    }
    public function asaoeguukamcykic()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\x64\144\137\x63\x68\x61\156\x6e\x65\x6c"), $this);
    }
    
    public function uykissogmuaaocsg() : ?Engine
    {
        return $this->engine;
    }
}

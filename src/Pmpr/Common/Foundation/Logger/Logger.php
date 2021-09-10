<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;


class Logger extends Common
{
    const DEFAULT_CHANNEL = "\144\145\x66\141\x75\x6c\164";
    
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
        $this->qcsmikeggeemccuu("\160\154\165\x67\x69\156\x73\137\154\x6f\x61\x64\x65\x64", [$this, "\141\163\x61\157\x65\147\165\x75\x6b\x61\155\x63\x79\153\x69\143"]);
        parent::wigskegsqequoeks();
    }
    public function asaoeguukamcykic()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\144\x64\x5f\143\x68\141\156\x6e\145\x6c"), $this);
    }
    
    public function uykissogmuaaocsg() : ?Engine
    {
        return $this->engine;
    }
}

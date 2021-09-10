<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;


class Logger extends Common
{
    const DEFAULT_CHANNEL = "\144\145\146\x61\165\154\x74";
    
    protected ?Engine $engine = null;
    public function __construct()
    {
        goto kysgsayqeakiwmic;
        iukkuoewgiwcoukw:
        $this->uykissogmuaaocsg()->aeywacagikkcgoak(self::DEFAULT_CHANNEL, self::DEFAULT_CHANNEL);
        goto cgamwegmkwmmsoow;
        kysgsayqeakiwmic:
        $this->engine = Engine::symcgieuakksimmu();
        goto eeiseascemqaocmo;
        eeiseascemqaocmo:
        parent::__construct();
        goto iukkuoewgiwcoukw;
        cgamwegmkwmmsoow:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x70\154\x75\147\x69\156\x73\x5f\154\157\x61\x64\145\144", [$this, "\141\x73\x61\x6f\145\147\165\165\x6b\141\155\x63\x79\153\151\143"]);
        parent::wigskegsqequoeks();
    }
    public function asaoeguukamcykic()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\x64\144\137\x63\150\x61\x6e\x6e\145\154"), $this);
    }
    
    public function uykissogmuaaocsg() : ?Engine
    {
        return $this->engine;
    }
}

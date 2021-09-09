<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;


class Logger extends Common
{
    const DEFAULT_CHANNEL = "\144\145\146\141\x75\154\164";
    
    protected ?Engine $engine = null;
    public function __construct()
    {
        goto cuoskwammceoauak;
        cecsiuuukuegaqgq:
        parent::__construct();
        goto wkakwguccsqwkiam;
        cuoskwammceoauak:
        $this->engine = Engine::symcgieuakksimmu();
        goto cecsiuuukuegaqgq;
        wkakwguccsqwkiam:
        $this->uykissogmuaaocsg()->aeywacagikkcgoak(self::DEFAULT_CHANNEL, self::DEFAULT_CHANNEL);
        goto gmwcaekkucsikwye;
        gmwcaekkucsikwye:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x70\x6c\x75\147\151\x6e\x73\137\x6c\x6f\x61\x64\x65\144", [$this, "\x61\163\x61\x6f\x65\x67\x75\x75\153\141\x6d\x63\171\153\151\x63"]);
        parent::wigskegsqequoeks();
    }
    public function asaoeguukamcykic()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\144\144\x5f\x63\x68\141\x6e\x6e\145\x6c"), $this);
    }
    
    public function uykissogmuaaocsg() : ?Engine
    {
        return $this->engine;
    }
}

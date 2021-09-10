<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;


class Logger extends Common
{
    const DEFAULT_CHANNEL = "\x64\145\x66\141\165\x6c\164";
    
    protected ?Engine $engine = null;
    public function __construct()
    {
        goto yegecewiqewskmgm;
        aquiaqiseuwyomay:
        $this->uykissogmuaaocsg()->aeywacagikkcgoak(self::DEFAULT_CHANNEL, self::DEFAULT_CHANNEL);
        goto kysgsayqeakiwmic;
        yegecewiqewskmgm:
        $this->engine = Engine::symcgieuakksimmu();
        goto awayeqowmyycaoqs;
        awayeqowmyycaoqs:
        parent::__construct();
        goto aquiaqiseuwyomay;
        kysgsayqeakiwmic:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x70\x6c\x75\x67\151\156\x73\x5f\154\157\x61\144\x65\144", [$this, "\141\163\141\157\x65\147\165\x75\x6b\x61\155\x63\171\153\151\x63"]);
        parent::wigskegsqequoeks();
    }
    public function asaoeguukamcykic()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\144\x64\137\x63\x68\x61\156\x6e\x65\x6c"), $this);
    }
    
    public function uykissogmuaaocsg() : ?Engine
    {
        return $this->engine;
    }
}

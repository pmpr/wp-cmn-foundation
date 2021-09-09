<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;


abstract class Callback extends Common
{
    
    protected ?Engine $twig = null;
    
    public function __construct(Engine $eyoesceegakeygsi)
    {
        goto aeumaioaccqqsuog;
        oqikuaaakmwakkwi:
        parent::__construct();
        goto mgkogwayioiuqgcm;
        aeumaioaccqqsuog:
        $this->twig = $eyoesceegakeygsi;
        goto oqikuaaakmwakkwi;
        mgkogwayioiuqgcm:
        $this->iemaakgqgqosiecm();
        goto yykoqaegsqocwkuo;
        yykoqaegsqocwkuo:
    }
    
    public function yyyewgugioamwckw() : Engine
    {
        return $this->twig;
    }
    public abstract function iemaakgqgqosiecm();
}

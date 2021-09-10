<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;


abstract class Callback extends Common
{
    
    protected ?Engine $twig = null;
    
    public function __construct(Engine $eyoesceegakeygsi)
    {
        goto ygawggoccwiqyaqy;
        umuseoycuocwmkwq:
        $this->iemaakgqgqosiecm();
        goto cygwqimwgaceaogu;
        wiiyoqsikgcqqygi:
        parent::__construct();
        goto umuseoycuocwmkwq;
        ygawggoccwiqyaqy:
        $this->twig = $eyoesceegakeygsi;
        goto wiiyoqsikgcqqygi;
        cygwqimwgaceaogu:
    }
    
    public function yyyewgugioamwckw() : Engine
    {
        return $this->twig;
    }
    public abstract function iemaakgqgqosiecm();
}

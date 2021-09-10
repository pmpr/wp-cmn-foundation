<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;


abstract class Callback extends Common
{
    
    protected ?Engine $twig = null;
    
    public function __construct(Engine $eyoesceegakeygsi)
    {
        goto cygwqimwgaceaogu;
        cygwqimwgaceaogu:
        $this->twig = $eyoesceegakeygsi;
        goto aakuioygmuqkiueu;
        aakuioygmuqkiueu:
        parent::__construct();
        goto sceaocsemeoiyuge;
        sceaocsemeoiyuge:
        $this->iemaakgqgqosiecm();
        goto sugmesswcyyuwame;
        sugmesswcyyuwame:
    }
    
    public function yyyewgugioamwckw() : Engine
    {
        return $this->twig;
    }
    public abstract function iemaakgqgqosiecm();
}

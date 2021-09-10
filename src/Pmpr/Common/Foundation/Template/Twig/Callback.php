<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;


abstract class Callback extends Common
{
    
    protected ?Engine $twig = null;
    
    public function __construct(Engine $eyoesceegakeygsi)
    {
        goto cygwqimwgaceaogu;
        aakuioygmuqkiueu:
        parent::__construct();
        goto sceaocsemeoiyuge;
        sceaocsemeoiyuge:
        $this->iemaakgqgqosiecm();
        goto sugmesswcyyuwame;
        cygwqimwgaceaogu:
        $this->twig = $eyoesceegakeygsi;
        goto aakuioygmuqkiueu;
        sugmesswcyyuwame:
    }
    
    public function yyyewgugioamwckw() : Engine
    {
        return $this->twig;
    }
    public abstract function iemaakgqgqosiecm();
}

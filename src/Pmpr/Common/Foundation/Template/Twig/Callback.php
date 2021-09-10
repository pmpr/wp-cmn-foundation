<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        cygwqimwgaceaogu:
        $this->twig = $eyoesceegakeygsi;
        goto aakuioygmuqkiueu;
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

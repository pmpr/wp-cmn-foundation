<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Page\Admin;


abstract class Tab extends Common
{
    
    protected ?string $id = null;
    
    protected int $priority = 0;
    
    protected ?string $title = null;
    
    protected ?string $description = null;
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function yywskysiycwkwsgw() : int
    {
        return $this->priority;
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function meqceykmywmqgoym() : ?string
    {
        return $this->description;
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x70\141\147\145\137\141\144\x6d\151\x6e\x5f\157\x75\x74\x70\x75\x74\x5f{$this->mwikyscisascoeea()}\x5f\164\141\x62"), [$this, "\x72\x65\156\144\145\x72"]);
        parent::wigskegsqequoeks();
    }
    public function eiieguqemowyacgi()
    {
    }
    public function render()
    {
        $this->eiieguqemowyacgi();
        echo $this->iuygowkemiiwqmiw($this->mwikyscisascoeea(), $this->gayqqwwuycceosii());
    }
    
    public abstract function gayqqwwuycceosii();
}

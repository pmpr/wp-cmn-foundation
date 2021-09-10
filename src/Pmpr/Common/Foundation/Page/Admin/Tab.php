<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("page_admin_output_{$this->mwikyscisascoeea()}_tab"), [$this, 'render']);
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

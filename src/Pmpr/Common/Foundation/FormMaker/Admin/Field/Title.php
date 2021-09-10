<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Title extends Field
{
    
    protected ?string $onFront = null;
    
    public function __construct(?string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct('title', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public function akimsyoyqymiqaiy() : ?string
    {
        return $this->onFront;
    }
    
    public function eywokgocsciueciu($akimsyoyqymiqaiy) : self
    {
        $this->onFront = $akimsyoyqymiqaiy;
        return $this;
    }
}

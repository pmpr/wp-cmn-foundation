<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Depended extends Checkbox
{
    
    protected array $targets = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null)
    {
        goto myuauieqiomyewkk;
        myuauieqiomyewkk:
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto owqcgayymwauiqaa;
        owqcgayymwauiqaa:
        $this->yekmmasckowaowgc($cwucaoaqgwqcwews);
        goto kgkckaeqcuaceuec;
        kgkckaeqcuaceuec:
        $this->usoqcyyugsuyiewc("\144\x65\160\x65\156\144\145\x64");
        goto isouaycmsuwaguek;
        isouaycmsuwaguek:
    }
    
    public function qammgescyicuwouu() : ?array
    {
        return $this->targets;
    }
    
    public function yekmmasckowaowgc($cwucaoaqgwqcwews) : self
    {
        $this->targets = $cwucaoaqgwqcwews;
        return $this;
    }
}

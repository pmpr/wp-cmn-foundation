<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        kgkckaeqcuaceuec:
        $this->usoqcyyugsuyiewc("\x64\x65\x70\x65\156\144\x65\144");
        goto isouaycmsuwaguek;
        owqcgayymwauiqaa:
        $this->yekmmasckowaowgc($cwucaoaqgwqcwews);
        goto kgkckaeqcuaceuec;
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

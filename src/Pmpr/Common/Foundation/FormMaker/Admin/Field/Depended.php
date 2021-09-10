<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Depended extends Checkbox
{
    
    protected array $targets = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null)
    {
        goto owqcgayymwauiqaa;
        isouaycmsuwaguek:
        $this->usoqcyyugsuyiewc("\144\145\160\145\156\x64\145\144");
        goto sskgisessswoogay;
        kgkckaeqcuaceuec:
        $this->yekmmasckowaowgc($cwucaoaqgwqcwews);
        goto isouaycmsuwaguek;
        owqcgayymwauiqaa:
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto kgkckaeqcuaceuec;
        sskgisessswoogay:
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

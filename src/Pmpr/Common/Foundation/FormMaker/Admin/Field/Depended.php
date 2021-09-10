<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Depended extends Checkbox
{
    
    protected array $targets = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null)
    {
        goto owqcgayymwauiqaa;
        kgkckaeqcuaceuec:
        $this->yekmmasckowaowgc($cwucaoaqgwqcwews);
        goto isouaycmsuwaguek;
        owqcgayymwauiqaa:
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto kgkckaeqcuaceuec;
        isouaycmsuwaguek:
        $this->usoqcyyugsuyiewc("\x64\145\160\x65\156\x64\x65\x64");
        goto sskgisessswoogay;
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

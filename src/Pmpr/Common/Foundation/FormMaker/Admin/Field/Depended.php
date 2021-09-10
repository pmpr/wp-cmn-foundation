<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->usoqcyyugsuyiewc("\x64\145\160\145\156\144\145\x64");
        goto sskgisessswoogay;
        owqcgayymwauiqaa:
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto kgkckaeqcuaceuec;
        kgkckaeqcuaceuec:
        $this->yekmmasckowaowgc($cwucaoaqgwqcwews);
        goto isouaycmsuwaguek;
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

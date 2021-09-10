<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Depended extends Checkbox
{
    
    protected array $targets = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null)
    {
        goto kgkckaeqcuaceuec;
        isouaycmsuwaguek:
        $this->yekmmasckowaowgc($cwucaoaqgwqcwews);
        goto sskgisessswoogay;
        sskgisessswoogay:
        $this->usoqcyyugsuyiewc("\x64\145\160\145\156\144\145\x64");
        goto cmcokscaskcamuuq;
        kgkckaeqcuaceuec:
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto isouaycmsuwaguek;
        cmcokscaskcamuuq:
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

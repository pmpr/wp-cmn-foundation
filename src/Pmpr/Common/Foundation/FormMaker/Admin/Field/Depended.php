<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Depended extends Checkbox
{
    
    protected array $targets = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null)
    {
        goto oucueogegoykuuuy;
        oucueogegoykuuuy:
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto qyuwuawyyooewwmy;
        giseicyyywqmukwu:
        $this->usoqcyyugsuyiewc("\x64\145\160\x65\156\144\145\144");
        goto myuauieqiomyewkk;
        qyuwuawyyooewwmy:
        $this->yekmmasckowaowgc($cwucaoaqgwqcwews);
        goto giseicyyywqmukwu;
        myuauieqiomyewkk:
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

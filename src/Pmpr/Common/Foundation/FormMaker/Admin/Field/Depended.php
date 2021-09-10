<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Depended extends Checkbox
{
    
    protected array $targets = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->yekmmasckowaowgc($cwucaoaqgwqcwews);
        $this->usoqcyyugsuyiewc('depended');
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

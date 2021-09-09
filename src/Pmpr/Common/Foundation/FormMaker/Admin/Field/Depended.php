<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Depended extends Checkbox
{
    
    protected array $targets = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null)
    {
        goto aawmyoyeqakesesk;
        iuesiswwkuycmkss:
        $this->usoqcyyugsuyiewc("\x64\145\x70\145\x6e\x64\x65\144");
        goto yuuemysicwemmaeo;
        aukusqkcwcumyaqg:
        $this->yekmmasckowaowgc($cwucaoaqgwqcwews);
        goto iuesiswwkuycmkss;
        aawmyoyeqakesesk:
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        goto aukusqkcwcumyaqg;
        yuuemysicwemmaeo:
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

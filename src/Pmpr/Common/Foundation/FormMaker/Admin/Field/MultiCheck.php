<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

class MultiCheck extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?array $qiouiwasaauyaaue, ?string $ukwokcuqauuosmoo = null)
    {
        parent::__construct("\155\165\x6c\x74\151\x63\150\145\143\153", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $ukwokcuqauuosmoo, $qiouiwasaauyaaue);
        $this->usoqcyyugsuyiewc("\x70\162\x2d\x73\x77\151\164\143\x68");
    }
    
    public function wmociykwcyesssui() : ?bool
    {
        return $this->inline;
    }
    
    public function awagieqcmmwkgwgs(bool $usyqkyomqcuocgoa) : self
    {
        $this->inline = $usyqkyomqcuocgoa;
        return $this;
    }
}

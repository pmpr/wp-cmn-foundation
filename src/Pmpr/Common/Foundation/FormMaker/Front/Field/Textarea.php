<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;


class Textarea extends Field
{
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct('textarea', '', $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg('form-control');
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        return $this->igmaewykumgwoaoy('placeholder', $iwiewowoqmoekyqi);
    }
    
    public function qsecygiycssgacqs($essikcmqiyqaqoaq) : self
    {
        $this->igmaewykumgwoaoy('rows', (string) $essikcmqiyqaqoaq);
        return $this;
    }
    
    public function saosoymyamkakomm($waaaiiqwsmggwsak) : self
    {
        $this->igmaewykumgwoaoy('cols', (string) $waaaiiqwsmggwsak);
        return $this;
    }
}

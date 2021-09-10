<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Textarea extends Text
{
    
    protected bool $isCode = false;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, 'textarea');
    }
    
    public function qsecygiycssgacqs($essikcmqiyqaqoaq) : self
    {
        $this->qcgocuceocquqcuw('rows', (string) $essikcmqiyqaqoaq);
        return $this;
    }
    
    public function ocoegkcaqcuqgack() : ?bool
    {
        return $this->isCode;
    }
    
    public function iuukamimsgmkcqoa(bool $ocoegkcaqcuqgack) : self
    {
        $this->isCode = $ocoegkcaqcuqgack;
        return $this;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        if ($this->isCode) {
            $this->aseocggwwegcmqes('textarea_code');
        }
    }
}

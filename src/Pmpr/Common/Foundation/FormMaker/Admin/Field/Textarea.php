<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Textarea extends Text
{
    
    protected bool $isCode = false;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, "\164\x65\x78\164\x61\162\145\x61");
    }
    
    public function qsecygiycssgacqs($essikcmqiyqaqoaq) : self
    {
        $this->qcgocuceocquqcuw("\162\157\x77\163", (string) $essikcmqiyqaqoaq);
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
        goto iceeswmiwuysskwc;
        iqoouguqkoyqgmky:
        $this->aseocggwwegcmqes("\x74\x65\170\164\x61\162\145\x61\x5f\x63\x6f\x64\145");
        goto qcesmwcoywieikko;
        iceeswmiwuysskwc:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto kygskqcaswauoqck;
        qcesmwcoywieikko:
        kauusamousoweoia:
        goto egyqgskwmiuqqusm;
        kygskqcaswauoqck:
        if (!$this->isCode) {
            goto kauusamousoweoia;
        }
        goto iqoouguqkoyqgmky;
        egyqgskwmiuqqusm:
    }
}

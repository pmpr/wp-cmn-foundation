<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Textarea extends Text
{
    
    protected bool $isCode = false;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, "\x74\145\x78\164\141\162\x65\x61");
    }
    
    public function qsecygiycssgacqs($essikcmqiyqaqoaq) : self
    {
        $this->qcgocuceocquqcuw("\162\x6f\x77\163", (string) $essikcmqiyqaqoaq);
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
        $this->aseocggwwegcmqes("\164\x65\170\x74\x61\x72\145\x61\137\143\x6f\x64\145");
        goto qcesmwcoywieikko;
        kygskqcaswauoqck:
        if (!$this->isCode) {
            goto kauusamousoweoia;
        }
        goto iqoouguqkoyqgmky;
        iceeswmiwuysskwc:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto kygskqcaswauoqck;
        qcesmwcoywieikko:
        kauusamousoweoia:
        goto egyqgskwmiuqqusm;
        egyqgskwmiuqqusm:
    }
}

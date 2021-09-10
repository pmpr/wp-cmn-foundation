<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Textarea extends Text
{
    
    protected bool $isCode = false;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, "\x74\145\x78\164\141\x72\x65\x61");
    }
    
    public function qsecygiycssgacqs($essikcmqiyqaqoaq) : self
    {
        $this->qcgocuceocquqcuw("\162\157\x77\x73", (string) $essikcmqiyqaqoaq);
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
        goto kygskqcaswauoqck;
        egyqgskwmiuqqusm:
        iceeswmiwuysskwc:
        goto oegiqcweqaommiye;
        iqoouguqkoyqgmky:
        if (!$this->isCode) {
            goto iceeswmiwuysskwc;
        }
        goto qcesmwcoywieikko;
        kygskqcaswauoqck:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto iqoouguqkoyqgmky;
        qcesmwcoywieikko:
        $this->aseocggwwegcmqes("\164\x65\x78\164\x61\x72\145\x61\x5f\143\x6f\x64\145");
        goto egyqgskwmiuqqusm;
        oegiqcweqaommiye:
    }
}

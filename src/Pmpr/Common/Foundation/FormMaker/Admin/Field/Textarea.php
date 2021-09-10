<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Textarea extends Text
{
    
    protected bool $isCode = false;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, "\164\x65\x78\x74\141\x72\145\141");
    }
    
    public function qsecygiycssgacqs($essikcmqiyqaqoaq) : self
    {
        $this->qcgocuceocquqcuw("\x72\x6f\167\x73", (string) $essikcmqiyqaqoaq);
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
        qcesmwcoywieikko:
        $this->aseocggwwegcmqes("\164\x65\x78\164\x61\162\145\x61\137\143\x6f\x64\x65");
        goto egyqgskwmiuqqusm;
        egyqgskwmiuqqusm:
        iceeswmiwuysskwc:
        goto oegiqcweqaommiye;
        kygskqcaswauoqck:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto iqoouguqkoyqgmky;
        iqoouguqkoyqgmky:
        if (!$this->isCode) {
            goto iceeswmiwuysskwc;
        }
        goto qcesmwcoywieikko;
        oegiqcweqaommiye:
    }
}

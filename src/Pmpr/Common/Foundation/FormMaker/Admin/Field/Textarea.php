<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Textarea extends Text
{
    
    protected bool $isCode = false;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, "\164\x65\x78\x74\141\162\145\x61");
    }
    
    public function qsecygiycssgacqs($essikcmqiyqaqoaq) : self
    {
        $this->qcgocuceocquqcuw("\162\x6f\167\x73", (string) $essikcmqiyqaqoaq);
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
        goto iqoouguqkoyqgmky;
        iqoouguqkoyqgmky:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto qcesmwcoywieikko;
        qcesmwcoywieikko:
        if (!$this->isCode) {
            goto kygskqcaswauoqck;
        }
        goto egyqgskwmiuqqusm;
        oegiqcweqaommiye:
        kygskqcaswauoqck:
        goto ukaykumuckcewsmi;
        egyqgskwmiuqqusm:
        $this->aseocggwwegcmqes("\x74\x65\170\164\x61\x72\x65\x61\137\x63\x6f\x64\145");
        goto oegiqcweqaommiye;
        ukaykumuckcewsmi:
    }
}

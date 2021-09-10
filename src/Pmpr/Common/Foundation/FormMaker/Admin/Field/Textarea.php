<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Textarea extends Text
{
    
    protected bool $isCode = false;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, "\164\x65\x78\x74\141\x72\x65\x61");
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
        goto cwmweiaomowsaswo;
        kauusamousoweoia:
        $this->aseocggwwegcmqes("\164\x65\170\x74\141\162\145\x61\x5f\x63\x6f\x64\145");
        goto iceeswmiwuysskwc;
        iceeswmiwuysskwc:
        kkwikyuiwyaaokgu:
        goto kygskqcaswauoqck;
        cwmweiaomowsaswo:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto wseiuooqwmgigama;
        wseiuooqwmgigama:
        if (!$this->isCode) {
            goto kkwikyuiwyaaokgu;
        }
        goto kauusamousoweoia;
        kygskqcaswauoqck:
    }
}

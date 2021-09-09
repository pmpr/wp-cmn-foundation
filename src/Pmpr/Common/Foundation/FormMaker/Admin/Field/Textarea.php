<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Textarea extends Text
{
    
    protected bool $isCode = false;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, "\x74\145\170\x74\x61\x72\145\141");
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
        goto ausiueiaqeuyacoa;
        ausiueiaqeuyacoa:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto gusuiauayocsggww;
        gusuiauayocsggww:
        if (!$this->isCode) {
            goto muiyqcciawymsusc;
        }
        goto weuacusmsswqqmws;
        qausweuwkqqoqguo:
        muiyqcciawymsusc:
        goto wwksckauqugwqqww;
        weuacusmsswqqmws:
        $this->aseocggwwegcmqes("\x74\145\170\x74\x61\162\x65\141\137\143\157\144\x65");
        goto qausweuwkqqoqguo;
        wwksckauqugwqqww:
    }
}

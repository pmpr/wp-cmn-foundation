<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class MultiButton extends Field
{
    
    protected array $buttons = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x6d\165\x6c\164\x69\x5f\142\165\164\164\157\156\x73", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\155\x6c\55\x31");
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg("\x62\x75\164\x74\157\156\55\160\x72\151\155\x61\162\x79");
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        return $this;
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto kmokmywuuiikocgi;
        cwymeeswgwucyesq:
        mwocyimaoyesyioc:
        goto swossimcmqssgsou;
        kmokmywuuiikocgi:
        if (!(isset($kkeqqkkkqwkocsyu["\142\165\x74\x74\x6f\156\163"]) && $kkeqqkkkqwkocsyu["\142\165\164\164\157\x6e\x73"] && is_array($kkeqqkkkqwkocsyu["\x62\x75\164\x74\x6f\156\163"]))) {
            goto wqsaaaueggcgiqoc;
        }
        goto kyyqkaouqwaswams;
        mqwkaksawqaeismc:
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto ywmymcwoykuoqeeq;
        kyyqkaouqwaswams:
        foreach ($kkeqqkkkqwkocsyu["\x62\165\x74\164\157\156\x73"] as $uusmaiomayssaecw => $gskauacumcmekigs) {
            goto wmmwiisasuywyiqe;
            wmmwiisasuywyiqe:
            if (!$gskauacumcmekigs instanceof Field) {
                goto qqweyyqmqkwkwqow;
            }
            goto skoqyuocwgesmgwi;
            aegkkcqqkoowqaoa:
            qqweyyqmqkwkwqow:
            goto yoqssweumyeoqqoy;
            skoqyuocwgesmgwi:
            $kkeqqkkkqwkocsyu["\x62\165\x74\164\x6f\x6e\163"][$uusmaiomayssaecw] = $gskauacumcmekigs->sacmkccceuywoqsq(false, $ywmkwiwkosakssii);
            goto aegkkcqqkoowqaoa;
            yoqssweumyeoqqoy:
            gskmwgwookqyuocg:
            goto wewwwqceugoewsim;
            wewwwqceugoewsim:
        }
        goto cwymeeswgwucyesq;
        swossimcmqssgsou:
        wqsaaaueggcgiqoc:
        goto mqwkaksawqaeismc;
        ywmymcwoykuoqeeq:
    }
}

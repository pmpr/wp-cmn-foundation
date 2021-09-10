<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class MultiButton extends Field
{
    
    protected array $buttons = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x6d\165\154\164\151\137\x62\x75\164\x74\157\x6e\163", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\155\154\55\x31");
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg("\142\x75\x74\164\x6f\156\55\x70\162\151\155\141\162\171");
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
        mqwkaksawqaeismc:
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto ywmymcwoykuoqeeq;
        kmokmywuuiikocgi:
        if (!(isset($kkeqqkkkqwkocsyu["\142\165\164\x74\x6f\x6e\163"]) && $kkeqqkkkqwkocsyu["\x62\x75\x74\164\157\x6e\x73"] && is_array($kkeqqkkkqwkocsyu["\142\x75\x74\164\x6f\156\x73"]))) {
            goto wqsaaaueggcgiqoc;
        }
        goto kyyqkaouqwaswams;
        swossimcmqssgsou:
        wqsaaaueggcgiqoc:
        goto mqwkaksawqaeismc;
        cwymeeswgwucyesq:
        mwocyimaoyesyioc:
        goto swossimcmqssgsou;
        kyyqkaouqwaswams:
        foreach ($kkeqqkkkqwkocsyu["\x62\165\164\x74\x6f\156\x73"] as $uusmaiomayssaecw => $gskauacumcmekigs) {
            goto wmmwiisasuywyiqe;
            yoqssweumyeoqqoy:
            gskmwgwookqyuocg:
            goto wewwwqceugoewsim;
            skoqyuocwgesmgwi:
            $kkeqqkkkqwkocsyu["\142\165\x74\x74\x6f\156\163"][$uusmaiomayssaecw] = $gskauacumcmekigs->sacmkccceuywoqsq(false, $ywmkwiwkosakssii);
            goto aegkkcqqkoowqaoa;
            aegkkcqqkoowqaoa:
            qqweyyqmqkwkwqow:
            goto yoqssweumyeoqqoy;
            wmmwiisasuywyiqe:
            if (!$gskauacumcmekigs instanceof Field) {
                goto qqweyyqmqkwkwqow;
            }
            goto skoqyuocwgesmgwi;
            wewwwqceugoewsim:
        }
        goto cwymeeswgwucyesq;
        ywmymcwoykuoqeeq:
    }
}

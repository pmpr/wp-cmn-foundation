<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class MultiButton extends Field
{
    
    protected array $buttons = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x6d\x75\x6c\x74\151\137\142\165\x74\x74\157\156\163", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\155\154\x2d\x31");
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg("\x62\165\x74\x74\157\x6e\x2d\x70\162\151\155\141\162\171");
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
        goto kyyqkaouqwaswams;
        swossimcmqssgsou:
        gskmwgwookqyuocg:
        goto mqwkaksawqaeismc;
        ywmymcwoykuoqeeq:
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto oeykyqgwekyacicc;
        mqwkaksawqaeismc:
        kmokmywuuiikocgi:
        goto ywmymcwoykuoqeeq;
        cwymeeswgwucyesq:
        foreach ($kkeqqkkkqwkocsyu["\142\x75\x74\x74\x6f\x6e\x73"] as $uusmaiomayssaecw => $gskauacumcmekigs) {
            goto skoqyuocwgesmgwi;
            wewwwqceugoewsim:
            qqweyyqmqkwkwqow:
            goto wqsaaaueggcgiqoc;
            aegkkcqqkoowqaoa:
            $kkeqqkkkqwkocsyu["\142\165\164\x74\157\x6e\x73"][$uusmaiomayssaecw] = $gskauacumcmekigs->sacmkccceuywoqsq(false, $ywmkwiwkosakssii);
            goto yoqssweumyeoqqoy;
            yoqssweumyeoqqoy:
            wmmwiisasuywyiqe:
            goto wewwwqceugoewsim;
            skoqyuocwgesmgwi:
            if (!$gskauacumcmekigs instanceof Field) {
                goto wmmwiisasuywyiqe;
            }
            goto aegkkcqqkoowqaoa;
            wqsaaaueggcgiqoc:
        }
        goto swossimcmqssgsou;
        kyyqkaouqwaswams:
        if (!(isset($kkeqqkkkqwkocsyu["\x62\x75\x74\x74\157\x6e\163"]) && $kkeqqkkkqwkocsyu["\142\x75\x74\x74\x6f\156\x73"] && is_array($kkeqqkkkqwkocsyu["\x62\x75\164\x74\x6f\x6e\x73"]))) {
            goto kmokmywuuiikocgi;
        }
        goto cwymeeswgwucyesq;
        oeykyqgwekyacicc:
    }
}

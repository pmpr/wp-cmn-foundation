<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class MultiButton extends Field
{
    
    protected array $buttons = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x6d\165\x6c\x74\151\x5f\142\x75\x74\164\x6f\156\163", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\x6d\154\55\x31");
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg("\142\165\x74\x74\157\x6e\55\160\x72\151\x6d\x61\162\x79");
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
        swossimcmqssgsou:
        wqsaaaueggcgiqoc:
        goto mqwkaksawqaeismc;
        kmokmywuuiikocgi:
        if (!(isset($kkeqqkkkqwkocsyu["\x62\x75\164\164\157\x6e\163"]) && $kkeqqkkkqwkocsyu["\142\x75\164\164\157\156\163"] && is_array($kkeqqkkkqwkocsyu["\142\165\x74\164\157\x6e\163"]))) {
            goto wqsaaaueggcgiqoc;
        }
        goto kyyqkaouqwaswams;
        mqwkaksawqaeismc:
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto ywmymcwoykuoqeeq;
        kyyqkaouqwaswams:
        foreach ($kkeqqkkkqwkocsyu["\x62\x75\x74\x74\x6f\156\x73"] as $uusmaiomayssaecw => $gskauacumcmekigs) {
            goto wmmwiisasuywyiqe;
            skoqyuocwgesmgwi:
            $kkeqqkkkqwkocsyu["\x62\165\x74\x74\157\156\163"][$uusmaiomayssaecw] = $gskauacumcmekigs->sacmkccceuywoqsq(false, $ywmkwiwkosakssii);
            goto aegkkcqqkoowqaoa;
            wmmwiisasuywyiqe:
            if (!$gskauacumcmekigs instanceof Field) {
                goto qqweyyqmqkwkwqow;
            }
            goto skoqyuocwgesmgwi;
            yoqssweumyeoqqoy:
            gskmwgwookqyuocg:
            goto wewwwqceugoewsim;
            aegkkcqqkoowqaoa:
            qqweyyqmqkwkwqow:
            goto yoqssweumyeoqqoy;
            wewwwqceugoewsim:
        }
        goto cwymeeswgwucyesq;
        ywmymcwoykuoqeeq:
    }
}

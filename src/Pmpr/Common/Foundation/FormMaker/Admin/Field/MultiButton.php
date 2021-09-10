<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class MultiButton extends Field
{
    
    protected array $buttons = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x6d\x75\x6c\164\x69\x5f\x62\165\x74\x74\x6f\156\x73", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->qigsyyqgewgskemg("\155\x6c\x2d\x31");
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg("\x62\x75\164\164\157\x6e\x2d\160\x72\151\155\141\x72\171");
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
        goto aegkkcqqkoowqaoa;
        yoqssweumyeoqqoy:
        foreach ($kkeqqkkkqwkocsyu["\x62\165\164\164\157\156\163"] as $uusmaiomayssaecw => $gskauacumcmekigs) {
            goto owiwkogimmuuqsma;
            mwocyimaoyesyioc:
            $kkeqqkkkqwkocsyu["\142\x75\x74\164\157\x6e\x73"][$uusmaiomayssaecw] = $gskauacumcmekigs->sacmkccceuywoqsq(false, $ywmkwiwkosakssii);
            goto gskmwgwookqyuocg;
            gskmwgwookqyuocg:
            wgqoywgmcoegywci:
            goto qqweyyqmqkwkwqow;
            owiwkogimmuuqsma:
            if (!$gskauacumcmekigs instanceof Field) {
                goto wgqoywgmcoegywci;
            }
            goto mwocyimaoyesyioc;
            qqweyyqmqkwkwqow:
            mwqygcegskuoakso:
            goto wmmwiisasuywyiqe;
            wmmwiisasuywyiqe:
        }
        goto wewwwqceugoewsim;
        wqsaaaueggcgiqoc:
        skoqyuocwgesmgwi:
        goto kmokmywuuiikocgi;
        aegkkcqqkoowqaoa:
        if (!(isset($kkeqqkkkqwkocsyu["\x62\165\x74\x74\x6f\x6e\163"]) && $kkeqqkkkqwkocsyu["\142\165\164\x74\157\x6e\x73"] && is_array($kkeqqkkkqwkocsyu["\142\x75\164\x74\157\x6e\163"]))) {
            goto skoqyuocwgesmgwi;
        }
        goto yoqssweumyeoqqoy;
        kmokmywuuiikocgi:
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto kyyqkaouqwaswams;
        wewwwqceugoewsim:
        cygksyyeoewaisiy:
        goto wqsaaaueggcgiqoc;
        kyyqkaouqwaswams:
    }
}

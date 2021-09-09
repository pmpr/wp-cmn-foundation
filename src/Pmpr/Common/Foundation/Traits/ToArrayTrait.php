<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Traits;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

trait ToArrayTrait
{
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
    }
    
    public function sacmkccceuywoqsq($tsuauommsquiesmk = false, array $ywmkwiwkosakssii = []) : array
    {
        goto oieimksmyyeyosik;
        qqqecycaqiuckqge:
        $kkeqqkkkqwkocsyu = get_object_vars($this);
        goto uqaymuykyqsuayso;
        iguyoiwiuikugekq:
        $kkeqqkkkqwkocsyu = array_filter($kkeqqkkkqwkocsyu);
        goto weeosewyimcickoi;
        imowaciskmueoogo:
        ugwcquomeuagcuma:
        goto iycouaqccscasucc;
        iuwcskswgaeuqumi:
        return $kkeqqkkkqwkocsyu;
        goto ggaqgegasaaiuacg;
        weeosewyimcickoi:
        cueyocuoyqoygsqk:
        goto iuwcskswgaeuqumi;
        uqaymuykyqsuayso:
        foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) {
            goto niiosgywwiykokkq;
            giykkoouiosqeuqo:
            $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = ManipulateArray::unset($kkeqqkkkqwkocsyu, $uusmaiomayssaecw);
            goto ogsmeaeskmkauwwy;
            ogsmeaeskmkauwwy:
            pkueqgmoqweqmssi:
            goto wuqqmyecwsmegamk;
            niiosgywwiykokkq:
            if (!(is_object($gygawogosumsgmme) && method_exists($gygawogosumsgmme, "\163\x61\143\x6d\x6b\x63\143\x63\145\165\171\x77\157\x71\163\x71"))) {
                goto wccqiqisegqowemu;
            }
            goto uokamacqkkiqccku;
            gmocwmmyommsqkky:
            wccqiqisegqowemu:
            goto wmyaoiwaoycgwucw;
            ykuewakwswmuaoqq:
            if (!($gaoqiuwsaoayggsa !== $uusmaiomayssaecw)) {
                goto pkueqgmoqweqmssi;
            }
            goto giykkoouiosqeuqo;
            wmyaoiwaoycgwucw:
            $gaoqiuwsaoayggsa = ManipulateString::kwuyaykukcmaqggg($uusmaiomayssaecw);
            goto ykuewakwswmuaoqq;
            uokamacqkkiqccku:
            $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii);
            goto gmocwmmyommsqkky;
            wuqqmyecwsmegamk:
            awysggkgocqkkmaq:
            goto wywaockmiweeueom;
            wywaockmiweeueom:
        }
        goto imowaciskmueoogo;
        iycouaqccscasucc:
        $kkeqqkkkqwkocsyu = $this->uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto uicoowkoscsuucui;
        oieimksmyyeyosik:
        $this->qgsieamsswkgysow($ywmkwiwkosakssii);
        goto qqqecycaqiuckqge;
        uicoowkoscsuucui:
        if (!$tsuauommsquiesmk) {
            goto cueyocuoyqoygsqk;
        }
        goto iguyoiwiuikugekq;
        ggaqgegasaaiuacg:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        return $kkeqqkkkqwkocsyu;
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto eugsieawaqqskgam;
        acssgquoaaqsgkoc:
        return $kkeqqkkkqwkocsyu;
        goto qimeociykiaweowe;
        yuuweaqskiwsqcma:
        if (!$tsuauommsquiesmk) {
            goto ycaqgqcgsaogwqey;
        }
        goto mmumoewcwoeqqikq;
        eawgawckwmwauyoe:
        $kkeqqkkkqwkocsyu = get_object_vars($this);
        goto qqucyysuwawsqsyi;
        suussioiakqqoucq:
        ycaqgqcgsaogwqey:
        goto acssgquoaaqsgkoc;
        mmumoewcwoeqqikq:
        $kkeqqkkkqwkocsyu = array_filter($kkeqqkkkqwkocsyu);
        goto suussioiakqqoucq;
        scaqkaeuuiukecqw:
        $kkeqqkkkqwkocsyu = $this->uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto yuuweaqskiwsqcma;
        qqucyysuwawsqsyi:
        foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) {
            goto gkmoqsgamgwkwsas;
            cqiuouaccqyaiogc:
            kogcmeyqyokimaqo:
            goto wcwsogoecyummieu;
            kscecowaeuymysgo:
            $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii);
            goto owqsmgycisgmmasg;
            sagosckgcimciqya:
            if (!($gaoqiuwsaoayggsa !== $uusmaiomayssaecw)) {
                goto ucasywwoeiooacwk;
            }
            goto ysgecwqkekegmywg;
            ysgecwqkekegmywg:
            $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = ManipulateArray::unset($kkeqqkkkqwkocsyu, $uusmaiomayssaecw);
            goto moqoommaoiemcoqk;
            owqsmgycisgmmasg:
            iieiwkmcwkocasiq:
            goto ucwcmgeksyiggaqi;
            moqoommaoiemcoqk:
            ucasywwoeiooacwk:
            goto cqiuouaccqyaiogc;
            ucwcmgeksyiggaqi:
            $gaoqiuwsaoayggsa = ManipulateString::kwuyaykukcmaqggg($uusmaiomayssaecw);
            goto sagosckgcimciqya;
            gkmoqsgamgwkwsas:
            if (!(is_object($gygawogosumsgmme) && method_exists($gygawogosumsgmme, "\x73\141\143\155\153\x63\x63\143\x65\165\x79\167\x6f\x71\x73\161"))) {
                goto iieiwkmcwkocasiq;
            }
            goto kscecowaeuymysgo;
            wcwsogoecyummieu:
        }
        goto kqykqkseesagqqyq;
        eugsieawaqqskgam:
        $this->qgsieamsswkgysow($ywmkwiwkosakssii);
        goto eawgawckwmwauyoe;
        kqykqkseesagqqyq:
        uyagiwoqkikiygme:
        goto scaqkaeuuiukecqw;
        qimeociykiaweowe:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        return $kkeqqkkkqwkocsyu;
    }
}

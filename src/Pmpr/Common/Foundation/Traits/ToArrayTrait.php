<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto kqykqkseesagqqyq;
        cmigmsgqgyquimqk:
        return $kkeqqkkkqwkocsyu;
        goto qcaquoiwoswywuoq;
        acssgquoaaqsgkoc:
        if (!$tsuauommsquiesmk) {
            goto qqucyysuwawsqsyi;
        }
        goto qimeociykiaweowe;
        yuuweaqskiwsqcma:
        foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) {
            goto ucwcmgeksyiggaqi;
            wcwsogoecyummieu:
            $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = ManipulateArray::unset($kkeqqkkkqwkocsyu, $uusmaiomayssaecw);
            goto ycaqgqcgsaogwqey;
            ucwcmgeksyiggaqi:
            if (!(is_object($gygawogosumsgmme) && method_exists($gygawogosumsgmme, "\163\x61\143\x6d\153\143\x63\143\x65\165\x79\x77\x6f\x71\x73\x71"))) {
                goto kscecowaeuymysgo;
            }
            goto sagosckgcimciqya;
            moqoommaoiemcoqk:
            $gaoqiuwsaoayggsa = ManipulateString::kwuyaykukcmaqggg($uusmaiomayssaecw);
            goto cqiuouaccqyaiogc;
            ycaqgqcgsaogwqey:
            owqsmgycisgmmasg:
            goto eugsieawaqqskgam;
            eugsieawaqqskgam:
            gkmoqsgamgwkwsas:
            goto eawgawckwmwauyoe;
            sagosckgcimciqya:
            $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii);
            goto ysgecwqkekegmywg;
            cqiuouaccqyaiogc:
            if (!($gaoqiuwsaoayggsa !== $uusmaiomayssaecw)) {
                goto owqsmgycisgmmasg;
            }
            goto wcwsogoecyummieu;
            ysgecwqkekegmywg:
            kscecowaeuymysgo:
            goto moqoommaoiemcoqk;
            eawgawckwmwauyoe:
        }
        goto mmumoewcwoeqqikq;
        mmumoewcwoeqqikq:
        ucasywwoeiooacwk:
        goto suussioiakqqoucq;
        scmqowwwcamqgmko:
        qqucyysuwawsqsyi:
        goto cmigmsgqgyquimqk;
        suussioiakqqoucq:
        $kkeqqkkkqwkocsyu = $this->uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto acssgquoaaqsgkoc;
        kqykqkseesagqqyq:
        $this->qgsieamsswkgysow($ywmkwiwkosakssii);
        goto scaqkaeuuiukecqw;
        scaqkaeuuiukecqw:
        $kkeqqkkkqwkocsyu = get_object_vars($this);
        goto yuuweaqskiwsqcma;
        qimeociykiaweowe:
        $kkeqqkkkqwkocsyu = array_filter($kkeqqkkkqwkocsyu);
        goto scmqowwwcamqgmko;
        qcaquoiwoswywuoq:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        return $kkeqqkkkqwkocsyu;
    }
}

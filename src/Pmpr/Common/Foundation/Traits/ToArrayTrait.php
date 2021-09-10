<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        scaqkaeuuiukecqw:
        $kkeqqkkkqwkocsyu = get_object_vars($this);
        goto yuuweaqskiwsqcma;
        mmumoewcwoeqqikq:
        ucasywwoeiooacwk:
        goto suussioiakqqoucq;
        kqykqkseesagqqyq:
        $this->qgsieamsswkgysow($ywmkwiwkosakssii);
        goto scaqkaeuuiukecqw;
        suussioiakqqoucq:
        $kkeqqkkkqwkocsyu = $this->uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto acssgquoaaqsgkoc;
        acssgquoaaqsgkoc:
        if (!$tsuauommsquiesmk) {
            goto qqucyysuwawsqsyi;
        }
        goto qimeociykiaweowe;
        yuuweaqskiwsqcma:
        foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) {
            goto ucwcmgeksyiggaqi;
            moqoommaoiemcoqk:
            $gaoqiuwsaoayggsa = ManipulateString::kwuyaykukcmaqggg($uusmaiomayssaecw);
            goto cqiuouaccqyaiogc;
            ycaqgqcgsaogwqey:
            owqsmgycisgmmasg:
            goto eugsieawaqqskgam;
            cqiuouaccqyaiogc:
            if (!($gaoqiuwsaoayggsa !== $uusmaiomayssaecw)) {
                goto owqsmgycisgmmasg;
            }
            goto wcwsogoecyummieu;
            eugsieawaqqskgam:
            gkmoqsgamgwkwsas:
            goto eawgawckwmwauyoe;
            ysgecwqkekegmywg:
            kscecowaeuymysgo:
            goto moqoommaoiemcoqk;
            ucwcmgeksyiggaqi:
            if (!(is_object($gygawogosumsgmme) && method_exists($gygawogosumsgmme, "\x73\x61\x63\x6d\x6b\x63\x63\x63\x65\165\171\x77\157\x71\163\x71"))) {
                goto kscecowaeuymysgo;
            }
            goto sagosckgcimciqya;
            wcwsogoecyummieu:
            $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = ManipulateArray::unset($kkeqqkkkqwkocsyu, $uusmaiomayssaecw);
            goto ycaqgqcgsaogwqey;
            sagosckgcimciqya:
            $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii);
            goto ysgecwqkekegmywg;
            eawgawckwmwauyoe:
        }
        goto mmumoewcwoeqqikq;
        qimeociykiaweowe:
        $kkeqqkkkqwkocsyu = array_filter($kkeqqkkkqwkocsyu);
        goto scmqowwwcamqgmko;
        scmqowwwcamqgmko:
        qqucyysuwawsqsyi:
        goto cmigmsgqgyquimqk;
        qcaquoiwoswywuoq:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        return $kkeqqkkkqwkocsyu;
    }
}

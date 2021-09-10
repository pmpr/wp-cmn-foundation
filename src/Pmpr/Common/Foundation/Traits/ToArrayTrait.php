<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        qimeociykiaweowe:
        $kkeqqkkkqwkocsyu = array_filter($kkeqqkkkqwkocsyu);
        goto scmqowwwcamqgmko;
        mmumoewcwoeqqikq:
        ucasywwoeiooacwk:
        goto suussioiakqqoucq;
        kqykqkseesagqqyq:
        $this->qgsieamsswkgysow($ywmkwiwkosakssii);
        goto scaqkaeuuiukecqw;
        scaqkaeuuiukecqw:
        $kkeqqkkkqwkocsyu = get_object_vars($this);
        goto yuuweaqskiwsqcma;
        cmigmsgqgyquimqk:
        return $kkeqqkkkqwkocsyu;
        goto qcaquoiwoswywuoq;
        suussioiakqqoucq:
        $kkeqqkkkqwkocsyu = $this->uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto acssgquoaaqsgkoc;
        yuuweaqskiwsqcma:
        foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) {
            goto ucwcmgeksyiggaqi;
            ycaqgqcgsaogwqey:
            owqsmgycisgmmasg:
            goto eugsieawaqqskgam;
            eugsieawaqqskgam:
            gkmoqsgamgwkwsas:
            goto eawgawckwmwauyoe;
            wcwsogoecyummieu:
            $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = ManipulateArray::unset($kkeqqkkkqwkocsyu, $uusmaiomayssaecw);
            goto ycaqgqcgsaogwqey;
            moqoommaoiemcoqk:
            $gaoqiuwsaoayggsa = ManipulateString::kwuyaykukcmaqggg($uusmaiomayssaecw);
            goto cqiuouaccqyaiogc;
            sagosckgcimciqya:
            $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii);
            goto ysgecwqkekegmywg;
            ucwcmgeksyiggaqi:
            if (!(is_object($gygawogosumsgmme) && method_exists($gygawogosumsgmme, "\163\x61\143\155\153\x63\x63\x63\x65\165\171\x77\157\x71\163\161"))) {
                goto kscecowaeuymysgo;
            }
            goto sagosckgcimciqya;
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
        acssgquoaaqsgkoc:
        if (!$tsuauommsquiesmk) {
            goto qqucyysuwawsqsyi;
        }
        goto qimeociykiaweowe;
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

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        acssgquoaaqsgkoc:
        if (!$tsuauommsquiesmk) {
            goto qqucyysuwawsqsyi;
        }
        goto qimeociykiaweowe;
        kqykqkseesagqqyq:
        $this->qgsieamsswkgysow($ywmkwiwkosakssii);
        goto scaqkaeuuiukecqw;
        yuuweaqskiwsqcma:
        foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) {
            goto ucwcmgeksyiggaqi;
            ysgecwqkekegmywg:
            kscecowaeuymysgo:
            goto moqoommaoiemcoqk;
            moqoommaoiemcoqk:
            $gaoqiuwsaoayggsa = ManipulateString::kwuyaykukcmaqggg($uusmaiomayssaecw);
            goto cqiuouaccqyaiogc;
            wcwsogoecyummieu:
            $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = ManipulateArray::unset($kkeqqkkkqwkocsyu, $uusmaiomayssaecw);
            goto ycaqgqcgsaogwqey;
            ucwcmgeksyiggaqi:
            if (!(is_object($gygawogosumsgmme) && method_exists($gygawogosumsgmme, "\x73\141\143\155\x6b\x63\x63\143\x65\x75\171\x77\x6f\x71\x73\161"))) {
                goto kscecowaeuymysgo;
            }
            goto sagosckgcimciqya;
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
            sagosckgcimciqya:
            $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii);
            goto ysgecwqkekegmywg;
            eawgawckwmwauyoe:
        }
        goto mmumoewcwoeqqikq;
        scaqkaeuuiukecqw:
        $kkeqqkkkqwkocsyu = get_object_vars($this);
        goto yuuweaqskiwsqcma;
        mmumoewcwoeqqikq:
        ucasywwoeiooacwk:
        goto suussioiakqqoucq;
        scmqowwwcamqgmko:
        qqucyysuwawsqsyi:
        goto cmigmsgqgyquimqk;
        suussioiakqqoucq:
        $kkeqqkkkqwkocsyu = $this->uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
        goto acssgquoaaqsgkoc;
        qimeociykiaweowe:
        $kkeqqkkkqwkocsyu = array_filter($kkeqqkkkqwkocsyu);
        goto scmqowwwcamqgmko;
        cmigmsgqgyquimqk:
        return $kkeqqkkkqwkocsyu;
        goto qcaquoiwoswywuoq;
        qcaquoiwoswywuoq:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        return $kkeqqkkkqwkocsyu;
    }
}

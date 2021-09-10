<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        yuuweaqskiwsqcma:
        foreach ($kkeqqkkkqwkocsyu as $uusmaiomayssaecw => $gygawogosumsgmme) {
            goto ucwcmgeksyiggaqi;
            eugsieawaqqskgam:
            gkmoqsgamgwkwsas:
            goto eawgawckwmwauyoe;
            moqoommaoiemcoqk:
            $gaoqiuwsaoayggsa = ManipulateString::kwuyaykukcmaqggg($uusmaiomayssaecw);
            goto cqiuouaccqyaiogc;
            wcwsogoecyummieu:
            $kkeqqkkkqwkocsyu[$gaoqiuwsaoayggsa] = ManipulateArray::unset($kkeqqkkkqwkocsyu, $uusmaiomayssaecw);
            goto ycaqgqcgsaogwqey;
            cqiuouaccqyaiogc:
            if (!($gaoqiuwsaoayggsa !== $uusmaiomayssaecw)) {
                goto owqsmgycisgmmasg;
            }
            goto wcwsogoecyummieu;
            ycaqgqcgsaogwqey:
            owqsmgycisgmmasg:
            goto eugsieawaqqskgam;
            sagosckgcimciqya:
            $kkeqqkkkqwkocsyu[$uusmaiomayssaecw] = $gygawogosumsgmme->sacmkccceuywoqsq($tsuauommsquiesmk, $ywmkwiwkosakssii);
            goto ysgecwqkekegmywg;
            ysgecwqkekegmywg:
            kscecowaeuymysgo:
            goto moqoommaoiemcoqk;
            ucwcmgeksyiggaqi:
            if (!(is_object($gygawogosumsgmme) && method_exists($gygawogosumsgmme, "\x73\x61\x63\x6d\x6b\x63\x63\x63\x65\x75\x79\167\x6f\x71\163\161"))) {
                goto kscecowaeuymysgo;
            }
            goto sagosckgcimciqya;
            eawgawckwmwauyoe:
        }
        goto mmumoewcwoeqqikq;
        kqykqkseesagqqyq:
        $this->qgsieamsswkgysow($ywmkwiwkosakssii);
        goto scaqkaeuuiukecqw;
        acssgquoaaqsgkoc:
        if (!$tsuauommsquiesmk) {
            goto qqucyysuwawsqsyi;
        }
        goto qimeociykiaweowe;
        scaqkaeuuiukecqw:
        $kkeqqkkkqwkocsyu = get_object_vars($this);
        goto yuuweaqskiwsqcma;
        qcaquoiwoswywuoq:
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        return $kkeqqkkkqwkocsyu;
    }
}

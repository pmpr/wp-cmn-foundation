<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorHook extends Decorator
{
    
    public static function sscegwueamckwmcy(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto mmqoeacwauwumuwy;
        ugwaocykeyqccama:
        return $eqgoocgaqwqcimie;
        goto ykykoyeewsakokcy;
        mmkokimcmkwyukcs:
        if (!function_exists("\141\160\x70\154\x79\x5f\146\x69\x6c\x74\145\162\163")) {
            goto gawkyeoimacqsamu;
        }
        goto aqmqocckmcayaiqy;
        aqmqocckmcayaiqy:
        $eqgoocgaqwqcimie = apply_filters($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto ooqiqegoqeoemwes;
        mmqoeacwauwumuwy:
        $eqgoocgaqwqcimie = $ywmkwiwkosakssii[0];
        goto mmkokimcmkwyukcs;
        ooqiqegoqeoemwes:
        gawkyeoimacqsamu:
        goto ugwaocykeyqccama;
        ykykoyeewsakokcy:
    }
    
    public static function cecaguuoecmccuse(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto sceggueuwywymmak;
        igyksykyeyaswmus:
        add_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto ucicksisoccgqais;
        sceggueuwywymmak:
        if (!function_exists("\x61\x64\144\137\146\151\x6c\x74\x65\162")) {
            goto aesamimsyomsigoi;
        }
        goto igyksykyeyaswmus;
        ucicksisoccgqais:
        aesamimsyomsigoi:
        goto qkukewwwakmkikwo;
        qkukewwwakmkikwo:
    }
    
    public static function ggmgmqswqkgecosg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto smsgswikiiieskgy;
        smsgswikiiieskgy:
        if (!function_exists("\162\145\155\157\166\145\x5f\x66\151\154\164\145\162")) {
            goto cooogaqeyuuakoky;
        }
        goto ouoqqaoqeuqomiik;
        smacakeueqkaoquw:
        cooogaqeyuuakoky:
        goto sskumuuougwwogwy;
        ouoqqaoqeuqomiik:
        remove_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto smacakeueqkaoquw;
        sskumuuougwwogwy:
    }
    
    public static function cqscqicucmeamkyq(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto ioycgwoyokiuwogg;
        ioycgwoyokiuwogg:
        if (!function_exists("\144\x6f\x5f\x61\x63\164\151\x6f\156")) {
            goto sckoaamegweguoge;
        }
        goto usayqekieaeawmmo;
        usayqekieaeawmmo:
        do_action($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto qcoyscmyegawqkcm;
        qcoyscmyegawqkcm:
        sckoaamegweguoge:
        goto mykqosugciymouyy;
        mykqosugciymouyy:
    }
    
    public static function qcsmikeggeemccuu(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto siaqqcmuquqwqusg;
        uwissmmyqiiqueaw:
        icssiymmywikcyuq:
        goto kogwcmswguiqkimc;
        cyamiiweeqsksayq:
        add_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto uwissmmyqiiqueaw;
        siaqqcmuquqwqusg:
        if (!function_exists("\x61\144\x64\x5f\x61\x63\x74\151\157\156")) {
            goto icssiymmywikcyuq;
        }
        goto cyamiiweeqsksayq;
        kogwcmswguiqkimc:
    }
    
    public static function koaegcswmcqsiykq(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\x77\160\137\x61\152\x61\170\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function suoiicwmcuqouwow(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\160\x5f\x61\152\141\170\x5f\156\x6f\160\x72\x69\x76\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function iqkqummseggmikgo(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        self::koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function kuieicsuscgmwigg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto msggsiiqkwyywaay;
        msggsiiqkwyywaay:
        if (!function_exists("\x72\145\155\157\x76\145\137\141\x63\164\x69\x6f\156")) {
            goto cymuckioogeayeoo;
        }
        goto qiogcgemwoskeguy;
        qiogcgemwoskeguy:
        remove_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto emweskkoeaamissy;
        emweskkoeaamissy:
        cymuckioogeayeoo:
        goto woaucuqwwygyseoy;
        woaucuqwwygyseoy:
    }
    
    public static function miuaagsmwcccekyg(string $iaakskwmyqceoscy)
    {
        goto kcagioquuqegqcyg;
        wwsomoigcwkwsguy:
        did_action($iaakskwmyqceoscy);
        goto iwocsmoqemqaiwuo;
        kcagioquuqegqcyg:
        if (!function_exists("\x64\151\144\137\x61\143\164\151\157\156")) {
            goto aqywsykoaksagmii;
        }
        goto wwsomoigcwkwsguy;
        iwocsmoqemqaiwuo:
        aqywsykoaksagmii:
        goto ggkqwysmuwoiueyg;
        ggkqwysmuwoiueyg:
    }
}

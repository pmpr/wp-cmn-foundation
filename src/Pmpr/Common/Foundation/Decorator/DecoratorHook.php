<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorHook extends Decorator
{
    
    public static function sscegwueamckwmcy(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto mmqoeacwauwumuwy;
        mmkokimcmkwyukcs:
        if (!function_exists("\x61\x70\x70\154\x79\x5f\146\151\154\x74\145\162\x73")) {
            goto gawkyeoimacqsamu;
        }
        goto aqmqocckmcayaiqy;
        ooqiqegoqeoemwes:
        gawkyeoimacqsamu:
        goto ugwaocykeyqccama;
        mmqoeacwauwumuwy:
        $eqgoocgaqwqcimie = $ywmkwiwkosakssii[0];
        goto mmkokimcmkwyukcs;
        ugwaocykeyqccama:
        return $eqgoocgaqwqcimie;
        goto ykykoyeewsakokcy;
        aqmqocckmcayaiqy:
        $eqgoocgaqwqcimie = apply_filters($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto ooqiqegoqeoemwes;
        ykykoyeewsakokcy:
    }
    
    public static function cecaguuoecmccuse(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto sceggueuwywymmak;
        ucicksisoccgqais:
        aesamimsyomsigoi:
        goto qkukewwwakmkikwo;
        igyksykyeyaswmus:
        add_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto ucicksisoccgqais;
        sceggueuwywymmak:
        if (!function_exists("\x61\x64\144\137\146\x69\154\164\x65\162")) {
            goto aesamimsyomsigoi;
        }
        goto igyksykyeyaswmus;
        qkukewwwakmkikwo:
    }
    
    public static function ggmgmqswqkgecosg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto smsgswikiiieskgy;
        smsgswikiiieskgy:
        if (!function_exists("\x72\x65\155\157\x76\145\x5f\146\x69\x6c\164\x65\162")) {
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
        if (!function_exists("\144\x6f\x5f\141\143\x74\151\x6f\156")) {
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
        siaqqcmuquqwqusg:
        if (!function_exists("\x61\x64\144\137\x61\143\x74\x69\x6f\x6e")) {
            goto icssiymmywikcyuq;
        }
        goto cyamiiweeqsksayq;
        uwissmmyqiiqueaw:
        icssiymmywikcyuq:
        goto kogwcmswguiqkimc;
        cyamiiweeqsksayq:
        add_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto uwissmmyqiiqueaw;
        kogwcmswguiqkimc:
    }
    
    public static function koaegcswmcqsiykq(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\x77\160\x5f\x61\152\x61\170\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function suoiicwmcuqouwow(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\x77\x70\137\x61\x6a\141\170\137\x6e\157\160\x72\151\166\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
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
        if (!function_exists("\x72\145\x6d\157\x76\145\x5f\141\143\164\x69\157\x6e")) {
            goto cymuckioogeayeoo;
        }
        goto qiogcgemwoskeguy;
        emweskkoeaamissy:
        cymuckioogeayeoo:
        goto woaucuqwwygyseoy;
        qiogcgemwoskeguy:
        remove_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto emweskkoeaamissy;
        woaucuqwwygyseoy:
    }
    
    public static function miuaagsmwcccekyg(string $iaakskwmyqceoscy)
    {
        goto kcagioquuqegqcyg;
        wwsomoigcwkwsguy:
        did_action($iaakskwmyqceoscy);
        goto iwocsmoqemqaiwuo;
        kcagioquuqegqcyg:
        if (!function_exists("\x64\151\144\x5f\x61\143\x74\151\x6f\x6e")) {
            goto aqywsykoaksagmii;
        }
        goto wwsomoigcwkwsguy;
        iwocsmoqemqaiwuo:
        aqywsykoaksagmii:
        goto ggkqwysmuwoiueyg;
        ggkqwysmuwoiueyg:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorHook extends Decorator
{
    
    public static function sscegwueamckwmcy(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto mmqoeacwauwumuwy;
        aqmqocckmcayaiqy:
        $eqgoocgaqwqcimie = apply_filters($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto ooqiqegoqeoemwes;
        mmqoeacwauwumuwy:
        $eqgoocgaqwqcimie = $ywmkwiwkosakssii[0];
        goto mmkokimcmkwyukcs;
        ugwaocykeyqccama:
        return $eqgoocgaqwqcimie;
        goto ykykoyeewsakokcy;
        mmkokimcmkwyukcs:
        if (!function_exists("\x61\x70\160\x6c\x79\137\x66\151\x6c\x74\145\x72\163")) {
            goto gawkyeoimacqsamu;
        }
        goto aqmqocckmcayaiqy;
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
        ucicksisoccgqais:
        aesamimsyomsigoi:
        goto qkukewwwakmkikwo;
        sceggueuwywymmak:
        if (!function_exists("\x61\144\x64\x5f\146\x69\x6c\x74\145\162")) {
            goto aesamimsyomsigoi;
        }
        goto igyksykyeyaswmus;
        qkukewwwakmkikwo:
    }
    
    public static function ggmgmqswqkgecosg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto smsgswikiiieskgy;
        ouoqqaoqeuqomiik:
        remove_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto smacakeueqkaoquw;
        smacakeueqkaoquw:
        cooogaqeyuuakoky:
        goto sskumuuougwwogwy;
        smsgswikiiieskgy:
        if (!function_exists("\x72\145\155\157\x76\x65\x5f\146\x69\154\x74\145\162")) {
            goto cooogaqeyuuakoky;
        }
        goto ouoqqaoqeuqomiik;
        sskumuuougwwogwy:
    }
    
    public static function cqscqicucmeamkyq(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto ioycgwoyokiuwogg;
        qcoyscmyegawqkcm:
        sckoaamegweguoge:
        goto mykqosugciymouyy;
        ioycgwoyokiuwogg:
        if (!function_exists("\x64\157\x5f\x61\x63\164\151\157\156")) {
            goto sckoaamegweguoge;
        }
        goto usayqekieaeawmmo;
        usayqekieaeawmmo:
        do_action($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto qcoyscmyegawqkcm;
        mykqosugciymouyy:
    }
    
    public static function qcsmikeggeemccuu(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto siaqqcmuquqwqusg;
        siaqqcmuquqwqusg:
        if (!function_exists("\141\144\x64\137\x61\x63\x74\151\157\x6e")) {
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
        self::qcsmikeggeemccuu("\x77\x70\137\141\152\x61\x78\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function suoiicwmcuqouwow(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\x70\137\141\152\x61\x78\137\x6e\157\x70\162\151\x76\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function iqkqummseggmikgo(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        self::koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function kuieicsuscgmwigg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto msggsiiqkwyywaay;
        qiogcgemwoskeguy:
        remove_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto emweskkoeaamissy;
        emweskkoeaamissy:
        cymuckioogeayeoo:
        goto woaucuqwwygyseoy;
        msggsiiqkwyywaay:
        if (!function_exists("\162\x65\155\x6f\x76\x65\137\141\x63\x74\151\x6f\x6e")) {
            goto cymuckioogeayeoo;
        }
        goto qiogcgemwoskeguy;
        woaucuqwwygyseoy:
    }
    
    public static function miuaagsmwcccekyg(string $iaakskwmyqceoscy)
    {
        goto kcagioquuqegqcyg;
        iwocsmoqemqaiwuo:
        aqywsykoaksagmii:
        goto ggkqwysmuwoiueyg;
        kcagioquuqegqcyg:
        if (!function_exists("\x64\151\x64\137\141\x63\x74\151\x6f\156")) {
            goto aqywsykoaksagmii;
        }
        goto wwsomoigcwkwsguy;
        wwsomoigcwkwsguy:
        did_action($iaakskwmyqceoscy);
        goto iwocsmoqemqaiwuo;
        ggkqwysmuwoiueyg:
    }
}

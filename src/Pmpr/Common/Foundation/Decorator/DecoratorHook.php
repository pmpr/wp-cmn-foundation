<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        ooqiqegoqeoemwes:
        gawkyeoimacqsamu:
        goto ugwaocykeyqccama;
        mmqoeacwauwumuwy:
        $eqgoocgaqwqcimie = $ywmkwiwkosakssii[0];
        goto mmkokimcmkwyukcs;
        mmkokimcmkwyukcs:
        if (!function_exists("\141\x70\160\x6c\x79\x5f\x66\x69\x6c\164\145\x72\163")) {
            goto gawkyeoimacqsamu;
        }
        goto aqmqocckmcayaiqy;
        aqmqocckmcayaiqy:
        $eqgoocgaqwqcimie = apply_filters($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto ooqiqegoqeoemwes;
        ykykoyeewsakokcy:
    }
    
    public static function cecaguuoecmccuse(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto sceggueuwywymmak;
        igyksykyeyaswmus:
        add_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto ucicksisoccgqais;
        sceggueuwywymmak:
        if (!function_exists("\x61\144\144\137\x66\x69\x6c\x74\145\162")) {
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
        ouoqqaoqeuqomiik:
        remove_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto smacakeueqkaoquw;
        smsgswikiiieskgy:
        if (!function_exists("\162\145\155\157\166\145\x5f\146\151\154\164\x65\x72")) {
            goto cooogaqeyuuakoky;
        }
        goto ouoqqaoqeuqomiik;
        smacakeueqkaoquw:
        cooogaqeyuuakoky:
        goto sskumuuougwwogwy;
        sskumuuougwwogwy:
    }
    
    public static function cqscqicucmeamkyq(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto ioycgwoyokiuwogg;
        usayqekieaeawmmo:
        do_action($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto qcoyscmyegawqkcm;
        ioycgwoyokiuwogg:
        if (!function_exists("\144\157\137\141\x63\x74\151\157\x6e")) {
            goto sckoaamegweguoge;
        }
        goto usayqekieaeawmmo;
        qcoyscmyegawqkcm:
        sckoaamegweguoge:
        goto mykqosugciymouyy;
        mykqosugciymouyy:
    }
    
    public static function qcsmikeggeemccuu(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto siaqqcmuquqwqusg;
        siaqqcmuquqwqusg:
        if (!function_exists("\141\x64\x64\137\141\143\x74\x69\x6f\156")) {
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
        self::qcsmikeggeemccuu("\x77\x70\x5f\x61\152\x61\x78\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function suoiicwmcuqouwow(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\x70\137\x61\152\x61\170\137\x6e\157\160\162\x69\166\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function iqkqummseggmikgo(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        self::koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function kuieicsuscgmwigg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto msggsiiqkwyywaay;
        emweskkoeaamissy:
        cymuckioogeayeoo:
        goto woaucuqwwygyseoy;
        msggsiiqkwyywaay:
        if (!function_exists("\x72\x65\x6d\x6f\166\x65\x5f\141\x63\x74\151\x6f\x6e")) {
            goto cymuckioogeayeoo;
        }
        goto qiogcgemwoskeguy;
        qiogcgemwoskeguy:
        remove_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto emweskkoeaamissy;
        woaucuqwwygyseoy:
    }
    
    public static function miuaagsmwcccekyg(string $iaakskwmyqceoscy)
    {
        goto kcagioquuqegqcyg;
        iwocsmoqemqaiwuo:
        aqywsykoaksagmii:
        goto ggkqwysmuwoiueyg;
        kcagioquuqegqcyg:
        if (!function_exists("\144\x69\x64\137\141\x63\x74\151\157\156")) {
            goto aqywsykoaksagmii;
        }
        goto wwsomoigcwkwsguy;
        wwsomoigcwkwsguy:
        did_action($iaakskwmyqceoscy);
        goto iwocsmoqemqaiwuo;
        ggkqwysmuwoiueyg:
    }
}

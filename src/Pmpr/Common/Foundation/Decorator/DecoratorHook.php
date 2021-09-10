<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorHook extends Decorator
{
    
    public static function sscegwueamckwmcy(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto ukosesgoyouygask;
        equyaeikyukugagk:
        if (!function_exists("\141\x70\x70\154\171\x5f\146\x69\x6c\x74\145\162\x73")) {
            goto caomsqikuqygukiu;
        }
        goto sueqwiqgouagewes;
        amgsgosgeuwgssgq:
        caomsqikuqygukiu:
        goto gawkyeoimacqsamu;
        ukosesgoyouygask:
        $eqgoocgaqwqcimie = $ywmkwiwkosakssii[0];
        goto equyaeikyukugagk;
        gawkyeoimacqsamu:
        return $eqgoocgaqwqcimie;
        goto mmqoeacwauwumuwy;
        sueqwiqgouagewes:
        $eqgoocgaqwqcimie = apply_filters($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto amgsgosgeuwgssgq;
        mmqoeacwauwumuwy:
    }
    
    public static function cecaguuoecmccuse(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto aqmqocckmcayaiqy;
        ooqiqegoqeoemwes:
        add_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto ugwaocykeyqccama;
        aqmqocckmcayaiqy:
        if (!function_exists("\x61\144\144\137\x66\151\154\164\145\162")) {
            goto mmkokimcmkwyukcs;
        }
        goto ooqiqegoqeoemwes;
        ugwaocykeyqccama:
        mmkokimcmkwyukcs:
        goto ykykoyeewsakokcy;
        ykykoyeewsakokcy:
    }
    
    public static function ggmgmqswqkgecosg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto sceggueuwywymmak;
        ucicksisoccgqais:
        aesamimsyomsigoi:
        goto qkukewwwakmkikwo;
        sceggueuwywymmak:
        if (!function_exists("\x72\145\x6d\x6f\166\x65\x5f\x66\x69\x6c\164\145\x72")) {
            goto aesamimsyomsigoi;
        }
        goto igyksykyeyaswmus;
        igyksykyeyaswmus:
        remove_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto ucicksisoccgqais;
        qkukewwwakmkikwo:
    }
    
    public static function cqscqicucmeamkyq(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto smsgswikiiieskgy;
        ouoqqaoqeuqomiik:
        do_action($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto smacakeueqkaoquw;
        smacakeueqkaoquw:
        cooogaqeyuuakoky:
        goto sskumuuougwwogwy;
        smsgswikiiieskgy:
        if (!function_exists("\x64\157\137\141\143\x74\x69\157\x6e")) {
            goto cooogaqeyuuakoky;
        }
        goto ouoqqaoqeuqomiik;
        sskumuuougwwogwy:
    }
    
    public static function qcsmikeggeemccuu(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto ioycgwoyokiuwogg;
        usayqekieaeawmmo:
        add_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto qcoyscmyegawqkcm;
        qcoyscmyegawqkcm:
        sckoaamegweguoge:
        goto mykqosugciymouyy;
        ioycgwoyokiuwogg:
        if (!function_exists("\141\144\144\137\141\143\x74\151\157\x6e")) {
            goto sckoaamegweguoge;
        }
        goto usayqekieaeawmmo;
        mykqosugciymouyy:
    }
    
    public static function koaegcswmcqsiykq(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\x70\x5f\x61\x6a\141\x78\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function suoiicwmcuqouwow(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\x70\x5f\x61\x6a\141\x78\x5f\x6e\157\x70\x72\x69\x76\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function iqkqummseggmikgo(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        self::koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function kuieicsuscgmwigg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto siaqqcmuquqwqusg;
        uwissmmyqiiqueaw:
        icssiymmywikcyuq:
        goto kogwcmswguiqkimc;
        cyamiiweeqsksayq:
        remove_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto uwissmmyqiiqueaw;
        siaqqcmuquqwqusg:
        if (!function_exists("\x72\145\x6d\157\x76\145\x5f\141\x63\x74\x69\x6f\156")) {
            goto icssiymmywikcyuq;
        }
        goto cyamiiweeqsksayq;
        kogwcmswguiqkimc:
    }
    
    public static function miuaagsmwcccekyg(string $iaakskwmyqceoscy)
    {
        goto msggsiiqkwyywaay;
        msggsiiqkwyywaay:
        if (!function_exists("\144\151\144\137\x61\x63\x74\151\x6f\156")) {
            goto cymuckioogeayeoo;
        }
        goto qiogcgemwoskeguy;
        qiogcgemwoskeguy:
        did_action($iaakskwmyqceoscy);
        goto emweskkoeaamissy;
        emweskkoeaamissy:
        cymuckioogeayeoo:
        goto woaucuqwwygyseoy;
        woaucuqwwygyseoy:
    }
}

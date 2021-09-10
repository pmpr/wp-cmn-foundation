<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorHook extends Decorator
{
    
    public static function sscegwueamckwmcy(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto ukosesgoyouygask;
        gawkyeoimacqsamu:
        return $eqgoocgaqwqcimie;
        goto mmqoeacwauwumuwy;
        ukosesgoyouygask:
        $eqgoocgaqwqcimie = $ywmkwiwkosakssii[0];
        goto equyaeikyukugagk;
        equyaeikyukugagk:
        if (!function_exists("\141\160\160\x6c\x79\137\146\x69\154\x74\145\162\163")) {
            goto caomsqikuqygukiu;
        }
        goto sueqwiqgouagewes;
        sueqwiqgouagewes:
        $eqgoocgaqwqcimie = apply_filters($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto amgsgosgeuwgssgq;
        amgsgosgeuwgssgq:
        caomsqikuqygukiu:
        goto gawkyeoimacqsamu;
        mmqoeacwauwumuwy:
    }
    
    public static function cecaguuoecmccuse(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto aqmqocckmcayaiqy;
        ooqiqegoqeoemwes:
        add_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto ugwaocykeyqccama;
        aqmqocckmcayaiqy:
        if (!function_exists("\141\x64\144\x5f\146\151\x6c\x74\145\162")) {
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
        sceggueuwywymmak:
        if (!function_exists("\x72\145\155\x6f\x76\x65\x5f\146\151\x6c\164\x65\x72")) {
            goto aesamimsyomsigoi;
        }
        goto igyksykyeyaswmus;
        ucicksisoccgqais:
        aesamimsyomsigoi:
        goto qkukewwwakmkikwo;
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
        if (!function_exists("\144\157\137\141\143\x74\x69\157\156")) {
            goto cooogaqeyuuakoky;
        }
        goto ouoqqaoqeuqomiik;
        sskumuuougwwogwy:
    }
    
    public static function qcsmikeggeemccuu(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto ioycgwoyokiuwogg;
        ioycgwoyokiuwogg:
        if (!function_exists("\x61\144\144\137\x61\x63\164\x69\157\x6e")) {
            goto sckoaamegweguoge;
        }
        goto usayqekieaeawmmo;
        qcoyscmyegawqkcm:
        sckoaamegweguoge:
        goto mykqosugciymouyy;
        usayqekieaeawmmo:
        add_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto qcoyscmyegawqkcm;
        mykqosugciymouyy:
    }
    
    public static function koaegcswmcqsiykq(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\x77\160\x5f\141\x6a\x61\x78\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function suoiicwmcuqouwow(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\x70\x5f\141\x6a\141\170\137\156\157\160\x72\151\166\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function iqkqummseggmikgo(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        self::koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function kuieicsuscgmwigg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto siaqqcmuquqwqusg;
        cyamiiweeqsksayq:
        remove_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto uwissmmyqiiqueaw;
        siaqqcmuquqwqusg:
        if (!function_exists("\x72\145\x6d\x6f\166\x65\x5f\x61\x63\164\151\157\156")) {
            goto icssiymmywikcyuq;
        }
        goto cyamiiweeqsksayq;
        uwissmmyqiiqueaw:
        icssiymmywikcyuq:
        goto kogwcmswguiqkimc;
        kogwcmswguiqkimc:
    }
    
    public static function miuaagsmwcccekyg(string $iaakskwmyqceoscy)
    {
        goto msggsiiqkwyywaay;
        msggsiiqkwyywaay:
        if (!function_exists("\144\151\x64\137\141\x63\x74\151\x6f\156")) {
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

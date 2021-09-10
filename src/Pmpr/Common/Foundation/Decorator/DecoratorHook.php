<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorHook extends Decorator
{
    
    public static function sscegwueamckwmcy(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto uoiskyawciaycskg;
        ukosesgoyouygask:
        syacoiikqeqwssee:
        goto equyaeikyukugagk;
        caomsqikuqygukiu:
        $eqgoocgaqwqcimie = apply_filters($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto ukosesgoyouygask;
        oyeciwugsaoigkok:
        if (!function_exists("\x61\160\160\x6c\171\x5f\146\151\x6c\164\x65\x72\x73")) {
            goto syacoiikqeqwssee;
        }
        goto caomsqikuqygukiu;
        equyaeikyukugagk:
        return $eqgoocgaqwqcimie;
        goto sueqwiqgouagewes;
        uoiskyawciaycskg:
        $eqgoocgaqwqcimie = $ywmkwiwkosakssii[0];
        goto oyeciwugsaoigkok;
        sueqwiqgouagewes:
    }
    
    public static function cecaguuoecmccuse(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto gawkyeoimacqsamu;
        mmkokimcmkwyukcs:
        amgsgosgeuwgssgq:
        goto aqmqocckmcayaiqy;
        gawkyeoimacqsamu:
        if (!function_exists("\x61\144\144\137\146\x69\154\x74\x65\162")) {
            goto amgsgosgeuwgssgq;
        }
        goto mmqoeacwauwumuwy;
        mmqoeacwauwumuwy:
        add_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto mmkokimcmkwyukcs;
        aqmqocckmcayaiqy:
    }
    
    public static function ggmgmqswqkgecosg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto ugwaocykeyqccama;
        ykykoyeewsakokcy:
        remove_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto aesamimsyomsigoi;
        ugwaocykeyqccama:
        if (!function_exists("\162\145\155\157\x76\145\137\146\x69\x6c\164\145\162")) {
            goto ooqiqegoqeoemwes;
        }
        goto ykykoyeewsakokcy;
        aesamimsyomsigoi:
        ooqiqegoqeoemwes:
        goto sceggueuwywymmak;
        sceggueuwywymmak:
    }
    
    public static function cqscqicucmeamkyq(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto ucicksisoccgqais;
        qkukewwwakmkikwo:
        do_action($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto cooogaqeyuuakoky;
        ucicksisoccgqais:
        if (!function_exists("\144\x6f\137\x61\143\x74\x69\x6f\156")) {
            goto igyksykyeyaswmus;
        }
        goto qkukewwwakmkikwo;
        cooogaqeyuuakoky:
        igyksykyeyaswmus:
        goto smsgswikiiieskgy;
        smsgswikiiieskgy:
    }
    
    public static function qcsmikeggeemccuu(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto smacakeueqkaoquw;
        sckoaamegweguoge:
        ouoqqaoqeuqomiik:
        goto ioycgwoyokiuwogg;
        sskumuuougwwogwy:
        add_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto sckoaamegweguoge;
        smacakeueqkaoquw:
        if (!function_exists("\141\x64\144\x5f\x61\x63\x74\x69\x6f\156")) {
            goto ouoqqaoqeuqomiik;
        }
        goto sskumuuougwwogwy;
        ioycgwoyokiuwogg:
    }
    
    public static function koaegcswmcqsiykq(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\x70\x5f\141\x6a\x61\x78\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function suoiicwmcuqouwow(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\160\x5f\x61\152\141\170\x5f\156\157\160\x72\151\x76\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function iqkqummseggmikgo(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        self::koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function kuieicsuscgmwigg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto qcoyscmyegawqkcm;
        icssiymmywikcyuq:
        usayqekieaeawmmo:
        goto siaqqcmuquqwqusg;
        qcoyscmyegawqkcm:
        if (!function_exists("\x72\x65\x6d\157\x76\x65\x5f\x61\143\x74\151\x6f\x6e")) {
            goto usayqekieaeawmmo;
        }
        goto mykqosugciymouyy;
        mykqosugciymouyy:
        remove_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto icssiymmywikcyuq;
        siaqqcmuquqwqusg:
    }
    
    public static function miuaagsmwcccekyg(string $iaakskwmyqceoscy)
    {
        goto uwissmmyqiiqueaw;
        kogwcmswguiqkimc:
        did_action($iaakskwmyqceoscy);
        goto cymuckioogeayeoo;
        uwissmmyqiiqueaw:
        if (!function_exists("\144\x69\x64\137\141\x63\x74\x69\157\156")) {
            goto cyamiiweeqsksayq;
        }
        goto kogwcmswguiqkimc;
        cymuckioogeayeoo:
        cyamiiweeqsksayq:
        goto msggsiiqkwyywaay;
        msggsiiqkwyywaay:
    }
}

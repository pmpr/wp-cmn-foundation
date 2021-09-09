<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorHook extends Decorator
{
    
    public static function sscegwueamckwmcy(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto mmqamyegwcyamyos;
        mmqamyegwcyamyos:
        $eqgoocgaqwqcimie = $ywmkwiwkosakssii[0];
        goto wkoakyucusqiokuw;
        ioyqkckmegiaawoo:
        $eqgoocgaqwqcimie = apply_filters($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto mcggquasyuiygwui;
        mcggquasyuiygwui:
        kwgogcacqosaayag:
        goto ugemeyesygqiskic;
        wkoakyucusqiokuw:
        if (!function_exists("\x61\x70\x70\154\x79\137\146\151\154\164\x65\162\x73")) {
            goto kwgogcacqosaayag;
        }
        goto ioyqkckmegiaawoo;
        ugemeyesygqiskic:
        return $eqgoocgaqwqcimie;
        goto ccscooiuewmaegyi;
        ccscooiuewmaegyi:
    }
    
    public static function cecaguuoecmccuse(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto iucowqewyoaomsuk;
        iucowqewyoaomsuk:
        if (!function_exists("\141\x64\144\x5f\x66\151\x6c\x74\145\162")) {
            goto ksomcksouggwacay;
        }
        goto wecycieacweseosm;
        wecycieacweseosm:
        add_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto mugcwkmqsweggcic;
        mugcwkmqsweggcic:
        ksomcksouggwacay:
        goto eciiyuwciimgmakq;
        eciiyuwciimgmakq:
    }
    
    public static function ggmgmqswqkgecosg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto wiiioykewquawmsu;
        wiiioykewquawmsu:
        if (!function_exists("\162\145\155\x6f\x76\x65\137\x66\x69\x6c\x74\x65\162")) {
            goto qqyeekywsyguucio;
        }
        goto mqmooaikaumwewew;
        mqmooaikaumwewew:
        remove_filter($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto cyeycessoayeoism;
        cyeycessoayeoism:
        qqyeekywsyguucio:
        goto emuqseyswwammumy;
        emuqseyswwammumy:
    }
    
    public static function cqscqicucmeamkyq(string $iaakskwmyqceoscy, ...$ywmkwiwkosakssii)
    {
        goto aocuemmuaaiiuiee;
        aocuemmuaaiiuiee:
        if (!function_exists("\144\157\137\x61\x63\x74\151\157\156")) {
            goto aeogsokusmsqcuaa;
        }
        goto ugaaqomusosqmquw;
        ugaaqomusosqmquw:
        do_action($iaakskwmyqceoscy, ...$ywmkwiwkosakssii);
        goto auaioqeaqmeueemi;
        auaioqeaqmeueemi:
        aeogsokusmsqcuaa:
        goto kkcouemcsagaqiae;
        kkcouemcsagaqiae:
    }
    
    public static function qcsmikeggeemccuu(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10, int $qaecciyumakckokk = 1)
    {
        goto oyisyigysqeuakcg;
        kkowgwygiekucwym:
        oywwcacmgwecmmum:
        goto wsoueqmwyyemuyye;
        awsyksgaekayaigu:
        add_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas, $qaecciyumakckokk);
        goto kkowgwygiekucwym;
        oyisyigysqeuakcg:
        if (!function_exists("\141\144\x64\137\x61\143\164\151\x6f\x6e")) {
            goto oywwcacmgwecmmum;
        }
        goto awsyksgaekayaigu;
        wsoueqmwyyemuyye:
    }
    
    public static function koaegcswmcqsiykq(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\x70\x5f\141\x6a\x61\170\x5f{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function suoiicwmcuqouwow(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::qcsmikeggeemccuu("\167\x70\137\x61\x6a\x61\x78\137\156\157\160\162\151\166\137{$aiamqeawckcsuaou}", $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function iqkqummseggmikgo(string $aiamqeawckcsuaou, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        self::suoiicwmcuqouwow($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        self::koaegcswmcqsiykq($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
    }
    
    public static function kuieicsuscgmwigg(string $iaakskwmyqceoscy, callable $ekiuyucoiagmscgy, int $sqqewmoeaekuyyas = 10)
    {
        goto msiikeiasyeoaoog;
        msiikeiasyeoaoog:
        if (!function_exists("\162\x65\155\157\166\145\x5f\x61\x63\164\151\157\156")) {
            goto geecsuskoecwouea;
        }
        goto wcqgkyswqqcmkciw;
        wcqgkyswqqcmkciw:
        remove_action($iaakskwmyqceoscy, $ekiuyucoiagmscgy, $sqqewmoeaekuyyas);
        goto iaykekkguwmqckom;
        iaykekkguwmqckom:
        geecsuskoecwouea:
        goto yokseegosimogkwk;
        yokseegosimogkwk:
    }
    
    public static function miuaagsmwcccekyg(string $iaakskwmyqceoscy)
    {
        goto mcymcuuwcmssycwi;
        mcymcuuwcmssycwi:
        if (!function_exists("\x64\x69\x64\x5f\141\x63\164\x69\x6f\x6e")) {
            goto yickykwwmiegccym;
        }
        goto cakikewkyyiogyak;
        aossisycmuemokks:
        yickykwwmiegccym:
        goto yciwikoukymqiuim;
        cakikewkyyiogyak:
        did_action($iaakskwmyqceoscy);
        goto aossisycmuemokks;
        yciwikoukymqiuim:
    }
}

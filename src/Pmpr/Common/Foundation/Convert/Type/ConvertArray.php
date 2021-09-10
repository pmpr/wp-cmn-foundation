<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Convert\Type;

use stdClass;

class ConvertArray extends Common
{
    
    public static function comkeiiwgwaqmcwe($uomewyckeuqoqocu)
    {
        array_walk($uomewyckeuqoqocu, function (&$eqgoocgaqwqcimie, $uusmaiomayssaecw) {
            goto ygyqkaykekwesuqg;
            qasmwiusmqomesqa:
            iqeymiuikawgwyia:
            goto mquckimascgwcgcs;
            mquckimascgwcgcs:
            $eqgoocgaqwqcimie = intval($eqgoocgaqwqcimie);
            goto myimaaecwmgoggyy;
            cewkooeecqyqmwwq:
            if (is_array($eqgoocgaqwqcimie)) {
                goto kkuksskgeyuoksmw;
            }
            goto ukiomiskiaesgwsk;
            iuuqiqasocieqsaw:
            hwqemyoomsyaksig:
            goto aeauossmaimoyqqq;
            ygyqkaykekwesuqg:
            if (is_numeric($eqgoocgaqwqcimie)) {
                goto iqeymiuikawgwyia;
            }
            goto cewkooeecqyqmwwq;
            ukiomiskiaesgwsk:
            goto hwqemyoomsyaksig;
            goto qasmwiusmqomesqa;
            guycwicwsyiamuow:
            kkuksskgeyuoksmw:
            goto mqcgsygmyiogmmes;
            mqcgsygmyiogmmes:
            $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie);
            goto iuuqiqasocieqsaw;
            myimaaecwmgoggyy:
            goto hwqemyoomsyaksig;
            goto guycwicwsyiamuow;
            aeauossmaimoyqqq:
        });
        return $uomewyckeuqoqocu;
    }
    
    public static function uusyiuwawuywwmye($uomewyckeuqoqocu)
    {
        goto qaaeeyysicyecigm;
        geaycegmmswksguo:
        return $sogksuscggsicmac;
        goto gowywugewagyoyki;
        umssuyyayeceomci:
        iguayouumausiaqg:
        goto eiaswsekmegymqkw;
        qaaeeyysicyecigm:
        $sogksuscggsicmac = [];
        goto wskcaooeoyaeesqu;
        eiaswsekmegymqkw:
        wkukmciiegoeqsek:
        goto geaycegmmswksguo;
        iqweusiiaogaewwg:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto kkgwieuuykqsimsi;
            mqumsuwmsseemikc:
            cgeaksemymyywamy:
            goto jsusmokimcoyuqyo;
            iquoywiomuigqsky:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, [$uusmaiomayssaecw => $eqgoocgaqwqcimie]);
            goto oiyogeiqgaukuayo;
            kkgwieuuykqsimsi:
            if (is_array($eqgoocgaqwqcimie)) {
                goto qamamegyysqgwqay;
            }
            goto iquoywiomuigqsky;
            scmkyamaykmcsosy:
            qamamegyysqgwqay:
            goto iqusukqamgasmqmm;
            oiyogeiqgaukuayo:
            goto cgeaksemymyywamy;
            goto scmkyamaykmcsosy;
            iqusukqamgasmqmm:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, self::uusyiuwawuywwmye($eqgoocgaqwqcimie));
            goto mqumsuwmsseemikc;
            jsusmokimcoyuqyo:
            wucscqiukwwoagas:
            goto qeqioikysugyqquk;
            qeqioikysugyqquk:
        }
        goto umssuyyayeceomci;
        wskcaooeoyaeesqu:
        if (!is_array($uomewyckeuqoqocu)) {
            goto wkukmciiegoeqsek;
        }
        goto iqweusiiaogaewwg;
        gowywugewagyoyki:
    }
    
    public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass
    {
        goto ikkeiacqssyycmok;
        oaukqecqqacgggag:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto cgyqocywksmqqgmo;
            sqeicuykwwckkkac:
            $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw];
            goto iwmmoucecewyouue;
            iwmmoucecewyouue:
            qemqkcguiqsyyqgo:
            goto caeqmsgagaaaacwm;
            kqauougoaqguwako:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok;
            goto okiioeyskuiagwwg;
            cywikomgsaysoika:
            ouusoamawuiemmgc:
            goto kqauougoaqguwako;
            okiioeyskuiagwwg:
            ecwgqwcwqiooqwwc:
            goto smwsyuycaigasask;
            ooceogkqigscsciw:
            wukiykwiekwiggoi:
            goto kskaamiuaguyyyqo;
            caeqmsgagaaaacwm:
            unset($yygmoeguaqyumuui[$uusmaiomayssaecw]);
            goto deqksokkueawouek;
            qaucyyksqoowiiik:
            goto ouusoamawuiemmgc;
            goto qkokqiummsiywywk;
            qoaukwugooqysgoa:
            if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto wukiykwiekwiggoi;
            }
            goto qaucyyksqoowiiik;
            cgyqocywksmqqgmo:
            if (key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto ymeiyaeagqsmeyks;
            }
            goto qoaukwugooqysgoa;
            kskaamiuaguyyyqo:
            unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui)]);
            goto cywikomgsaysoika;
            mquceeqokuqwiggw:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto qemqkcguiqsyyqgo;
            }
            goto sqeicuykwwckkkac;
            qkokqiummsiywywk:
            ymeiyaeagqsmeyks:
            goto mquceeqokuqwiggw;
            deqksokkueawouek:
            goto ouusoamawuiemmgc;
            goto ooceogkqigscsciw;
            smwsyuycaigasask:
        }
        goto oykmaseogsuigwyk;
        cskmgmquecaqwukc:
        
        if (!(count($yygmoeguaqyumuui) > 0)) {
            goto aqwquiokswegekow;
        }
        goto gcmeqoywuowwqckm;
        oykmaseogsuigwyk:
        moawqimmokskmqgg:
        goto cskmgmquecaqwukc;
        sucsiskcequmcegg:
        return $mksyucucyswaukig;
        goto ewqgyoqokosiwoiq;
        gcmeqoywuowwqckm:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto iqqmckmqwoiqsywa;
            iqqmckmqwoiqsywa:
            if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) {
                goto kwmoemcsgkksakqa;
            }
            goto igikawameoiasygk;
            ikcsoqwwgackmmgo:
            geyoeoemkimiiuwu:
            goto aoqyomyemgqwqiok;
            iciwemqeaqowgqqo:
            kwmoemcsgkksakqa:
            goto ikcsoqwwgackmmgo;
            igikawameoiasygk:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = null;
            goto iciwemqeaqowgqqo;
            aoqyomyemgqwqiok:
        }
        goto smoguaqmiogcyeii;
        ikkeiacqssyycmok:
        $mksyucucyswaukig = new stdClass();
        goto oaukqecqqacgggag;
        smoguaqmiogcyeii:
        akcyggyimceacaum:
        goto sukmqsesceacgcsk;
        sukmqsesceacgcsk:
        aqwquiokswegekow:
        goto sucsiskcequmcegg;
        ewqgyoqokosiwoiq:
    }
    
    public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array
    {
        goto msuykcqiymewymmi;
        ccsayioycemkwkow:
        iogaqqsmyokcsiko:
        goto omqoyywiseosgemk;
        msuykcqiymewymmi:
        $mguygkocuoaoqqkg = [];
        goto asekqqiwmgkgsmcq;
        omqoyywiseosgemk:
        return $mguygkocuoaoqqkg;
        goto sooowgiqueeqkuey;
        ikyqecyakgkuassc:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto miowwmmmyucwauei;
            miowwmmmyucwauei:
            if (!is_array($igqsaukqcqscimok)) {
                goto usmcsiysgwoqegku;
            }
            goto qyuomwuuoguquuyq;
            qyuomwuuoguquuyq:
            $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui);
            goto oaysgscuccmyyquw;
            oaysgscuccmyyquw:
            usmcsiysgwoqegku:
            goto emsgkcioccgyqagu;
            emsgkcioccgyqagu:
            iiwcwoqcissmkesc:
            goto sikemkqimkwuggwy;
            sikemkqimkwuggwy:
        }
        goto ywiwssuaqigigukm;
        asekqqiwmgkgsmcq:
        if (!is_array($uomewyckeuqoqocu)) {
            goto iogaqqsmyokcsiko;
        }
        goto ikyqecyakgkuassc;
        ywiwssuaqigigukm:
        somowkeqasuacoco:
        goto ccsayioycemkwkow;
        sooowgiqueeqkuey:
    }
    
    public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string
    {
        return implode($kyckqucegowukmcm, $uomewyckeuqoqocu);
    }
}

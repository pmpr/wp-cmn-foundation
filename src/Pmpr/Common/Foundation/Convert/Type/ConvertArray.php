<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Convert\Type;

use stdClass;

class ConvertArray extends Common
{
    
    public static function comkeiiwgwaqmcwe($uomewyckeuqoqocu)
    {
        array_walk($uomewyckeuqoqocu, function (&$eqgoocgaqwqcimie, $uusmaiomayssaecw) {
            goto kkuksskgeyuoksmw;
            myimaaecwmgoggyy:
            iqeymiuikawgwyia:
            goto guycwicwsyiamuow;
            mqcgsygmyiogmmes:
            qiwicsqkwcywmsaq:
            goto iuuqiqasocieqsaw;
            cewkooeecqyqmwwq:
            goto qiwicsqkwcywmsaq;
            goto ukiomiskiaesgwsk;
            ukiomiskiaesgwsk:
            hwqemyoomsyaksig:
            goto qasmwiusmqomesqa;
            guycwicwsyiamuow:
            $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie);
            goto mqcgsygmyiogmmes;
            mquckimascgwcgcs:
            goto qiwicsqkwcywmsaq;
            goto myimaaecwmgoggyy;
            kkuksskgeyuoksmw:
            if (is_numeric($eqgoocgaqwqcimie)) {
                goto hwqemyoomsyaksig;
            }
            goto ygyqkaykekwesuqg;
            qasmwiusmqomesqa:
            $eqgoocgaqwqcimie = intval($eqgoocgaqwqcimie);
            goto mquckimascgwcgcs;
            ygyqkaykekwesuqg:
            if (is_array($eqgoocgaqwqcimie)) {
                goto iqeymiuikawgwyia;
            }
            goto cewkooeecqyqmwwq;
            iuuqiqasocieqsaw:
        });
        return $uomewyckeuqoqocu;
    }
    
    public static function uusyiuwawuywwmye($uomewyckeuqoqocu)
    {
        goto wkukmciiegoeqsek;
        qaaeeyysicyecigm:
        if (!is_array($uomewyckeuqoqocu)) {
            goto qeqioikysugyqquk;
        }
        goto wskcaooeoyaeesqu;
        iqweusiiaogaewwg:
        aeauossmaimoyqqq:
        goto umssuyyayeceomci;
        wskcaooeoyaeesqu:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto cgeaksemymyywamy;
            oiyogeiqgaukuayo:
            wucscqiukwwoagas:
            goto scmkyamaykmcsosy;
            cgeaksemymyywamy:
            if (is_array($eqgoocgaqwqcimie)) {
                goto wucscqiukwwoagas;
            }
            goto kkgwieuuykqsimsi;
            iqusukqamgasmqmm:
            qamamegyysqgwqay:
            goto mqumsuwmsseemikc;
            scmkyamaykmcsosy:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, self::uusyiuwawuywwmye($eqgoocgaqwqcimie));
            goto iqusukqamgasmqmm;
            iquoywiomuigqsky:
            goto qamamegyysqgwqay;
            goto oiyogeiqgaukuayo;
            mqumsuwmsseemikc:
            iguayouumausiaqg:
            goto jsusmokimcoyuqyo;
            kkgwieuuykqsimsi:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, [$uusmaiomayssaecw => $eqgoocgaqwqcimie]);
            goto iquoywiomuigqsky;
            jsusmokimcoyuqyo:
        }
        goto iqweusiiaogaewwg;
        wkukmciiegoeqsek:
        $sogksuscggsicmac = [];
        goto qaaeeyysicyecigm;
        eiaswsekmegymqkw:
        return $sogksuscggsicmac;
        goto geaycegmmswksguo;
        umssuyyayeceomci:
        qeqioikysugyqquk:
        goto eiaswsekmegymqkw;
        geaycegmmswksguo:
    }
    
    public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass
    {
        goto aqwquiokswegekow;
        cskmgmquecaqwukc:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto kwmoemcsgkksakqa;
            kwmoemcsgkksakqa:
            if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) {
                goto geyoeoemkimiiuwu;
            }
            goto iqqmckmqwoiqsywa;
            igikawameoiasygk:
            geyoeoemkimiiuwu:
            goto iciwemqeaqowgqqo;
            iqqmckmqwoiqsywa:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = null;
            goto igikawameoiasygk;
            iciwemqeaqowgqqo:
            akcyggyimceacaum:
            goto ikcsoqwwgackmmgo;
            ikcsoqwwgackmmgo:
        }
        goto gcmeqoywuowwqckm;
        smoguaqmiogcyeii:
        aoqyomyemgqwqiok:
        goto sukmqsesceacgcsk;
        ikkeiacqssyycmok:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto wukiykwiekwiggoi;
            ooceogkqigscsciw:
            unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui)]);
            goto kskaamiuaguyyyqo;
            caeqmsgagaaaacwm:
            goto qemqkcguiqsyyqgo;
            goto deqksokkueawouek;
            deqksokkueawouek:
            ymeiyaeagqsmeyks:
            goto ooceogkqigscsciw;
            cgyqocywksmqqgmo:
            if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto ymeiyaeagqsmeyks;
            }
            goto qoaukwugooqysgoa;
            qaucyyksqoowiiik:
            ouusoamawuiemmgc:
            goto qkokqiummsiywywk;
            sqeicuykwwckkkac:
            ecwgqwcwqiooqwwc:
            goto iwmmoucecewyouue;
            kskaamiuaguyyyqo:
            qemqkcguiqsyyqgo:
            goto cywikomgsaysoika;
            qoaukwugooqysgoa:
            goto qemqkcguiqsyyqgo;
            goto qaucyyksqoowiiik;
            qkokqiummsiywywk:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto ecwgqwcwqiooqwwc;
            }
            goto mquceeqokuqwiggw;
            iwmmoucecewyouue:
            unset($yygmoeguaqyumuui[$uusmaiomayssaecw]);
            goto caeqmsgagaaaacwm;
            kqauougoaqguwako:
            moawqimmokskmqgg:
            goto okiioeyskuiagwwg;
            mquceeqokuqwiggw:
            $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw];
            goto sqeicuykwwckkkac;
            cywikomgsaysoika:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok;
            goto kqauougoaqguwako;
            wukiykwiekwiggoi:
            if (key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto ouusoamawuiemmgc;
            }
            goto cgyqocywksmqqgmo;
            okiioeyskuiagwwg:
        }
        goto oaukqecqqacgggag;
        oaukqecqqacgggag:
        gowywugewagyoyki:
        goto oykmaseogsuigwyk;
        gcmeqoywuowwqckm:
        smwsyuycaigasask:
        goto smoguaqmiogcyeii;
        aqwquiokswegekow:
        $mksyucucyswaukig = new stdClass();
        goto ikkeiacqssyycmok;
        sukmqsesceacgcsk:
        return $mksyucucyswaukig;
        goto sucsiskcequmcegg;
        oykmaseogsuigwyk:
        
        if (!(count($yygmoeguaqyumuui) > 0)) {
            goto aoqyomyemgqwqiok;
        }
        goto cskmgmquecaqwukc;
        sucsiskcequmcegg:
    }
    
    public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array
    {
        goto iogaqqsmyokcsiko;
        iogaqqsmyokcsiko:
        $mguygkocuoaoqqkg = [];
        goto msuykcqiymewymmi;
        ccsayioycemkwkow:
        return $mguygkocuoaoqqkg;
        goto omqoyywiseosgemk;
        asekqqiwmgkgsmcq:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto usmcsiysgwoqegku;
            usmcsiysgwoqegku:
            if (!is_array($igqsaukqcqscimok)) {
                goto iiwcwoqcissmkesc;
            }
            goto miowwmmmyucwauei;
            qyuomwuuoguquuyq:
            iiwcwoqcissmkesc:
            goto oaysgscuccmyyquw;
            miowwmmmyucwauei:
            $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui);
            goto qyuomwuuoguquuyq;
            oaysgscuccmyyquw:
            somowkeqasuacoco:
            goto emsgkcioccgyqagu;
            emsgkcioccgyqagu:
        }
        goto ikyqecyakgkuassc;
        msuykcqiymewymmi:
        if (!is_array($uomewyckeuqoqocu)) {
            goto sikemkqimkwuggwy;
        }
        goto asekqqiwmgkgsmcq;
        ikyqecyakgkuassc:
        ewqgyoqokosiwoiq:
        goto ywiwssuaqigigukm;
        ywiwssuaqigigukm:
        sikemkqimkwuggwy:
        goto ccsayioycemkwkow;
        omqoyywiseosgemk:
    }
    
    public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string
    {
        return implode($kyckqucegowukmcm, $uomewyckeuqoqocu);
    }
}

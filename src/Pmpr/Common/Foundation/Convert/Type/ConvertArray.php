<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
            mquckimascgwcgcs:
            goto qiwicsqkwcywmsaq;
            goto myimaaecwmgoggyy;
            ukiomiskiaesgwsk:
            hwqemyoomsyaksig:
            goto qasmwiusmqomesqa;
            guycwicwsyiamuow:
            $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie);
            goto mqcgsygmyiogmmes;
            mqcgsygmyiogmmes:
            qiwicsqkwcywmsaq:
            goto iuuqiqasocieqsaw;
            ygyqkaykekwesuqg:
            if (is_array($eqgoocgaqwqcimie)) {
                goto iqeymiuikawgwyia;
            }
            goto cewkooeecqyqmwwq;
            kkuksskgeyuoksmw:
            if (is_numeric($eqgoocgaqwqcimie)) {
                goto hwqemyoomsyaksig;
            }
            goto ygyqkaykekwesuqg;
            myimaaecwmgoggyy:
            iqeymiuikawgwyia:
            goto guycwicwsyiamuow;
            qasmwiusmqomesqa:
            $eqgoocgaqwqcimie = intval($eqgoocgaqwqcimie);
            goto mquckimascgwcgcs;
            cewkooeecqyqmwwq:
            goto qiwicsqkwcywmsaq;
            goto ukiomiskiaesgwsk;
            iuuqiqasocieqsaw:
        });
        return $uomewyckeuqoqocu;
    }
    
    public static function uusyiuwawuywwmye($uomewyckeuqoqocu)
    {
        goto wkukmciiegoeqsek;
        wkukmciiegoeqsek:
        $sogksuscggsicmac = [];
        goto qaaeeyysicyecigm;
        wskcaooeoyaeesqu:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto cgeaksemymyywamy;
            mqumsuwmsseemikc:
            iguayouumausiaqg:
            goto jsusmokimcoyuqyo;
            scmkyamaykmcsosy:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, self::uusyiuwawuywwmye($eqgoocgaqwqcimie));
            goto iqusukqamgasmqmm;
            oiyogeiqgaukuayo:
            wucscqiukwwoagas:
            goto scmkyamaykmcsosy;
            kkgwieuuykqsimsi:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, [$uusmaiomayssaecw => $eqgoocgaqwqcimie]);
            goto iquoywiomuigqsky;
            iquoywiomuigqsky:
            goto qamamegyysqgwqay;
            goto oiyogeiqgaukuayo;
            iqusukqamgasmqmm:
            qamamegyysqgwqay:
            goto mqumsuwmsseemikc;
            cgeaksemymyywamy:
            if (is_array($eqgoocgaqwqcimie)) {
                goto wucscqiukwwoagas;
            }
            goto kkgwieuuykqsimsi;
            jsusmokimcoyuqyo:
        }
        goto iqweusiiaogaewwg;
        umssuyyayeceomci:
        qeqioikysugyqquk:
        goto eiaswsekmegymqkw;
        qaaeeyysicyecigm:
        if (!is_array($uomewyckeuqoqocu)) {
            goto qeqioikysugyqquk;
        }
        goto wskcaooeoyaeesqu;
        iqweusiiaogaewwg:
        aeauossmaimoyqqq:
        goto umssuyyayeceomci;
        eiaswsekmegymqkw:
        return $sogksuscggsicmac;
        goto geaycegmmswksguo;
        geaycegmmswksguo:
    }
    
    public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass
    {
        goto aqwquiokswegekow;
        cskmgmquecaqwukc:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto kwmoemcsgkksakqa;
            iqqmckmqwoiqsywa:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = null;
            goto igikawameoiasygk;
            iciwemqeaqowgqqo:
            akcyggyimceacaum:
            goto ikcsoqwwgackmmgo;
            igikawameoiasygk:
            geyoeoemkimiiuwu:
            goto iciwemqeaqowgqqo;
            kwmoemcsgkksakqa:
            if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) {
                goto geyoeoemkimiiuwu;
            }
            goto iqqmckmqwoiqsywa;
            ikcsoqwwgackmmgo:
        }
        goto gcmeqoywuowwqckm;
        oykmaseogsuigwyk:
        
        if (!(count($yygmoeguaqyumuui) > 0)) {
            goto aoqyomyemgqwqiok;
        }
        goto cskmgmquecaqwukc;
        sukmqsesceacgcsk:
        return $mksyucucyswaukig;
        goto sucsiskcequmcegg;
        smoguaqmiogcyeii:
        aoqyomyemgqwqiok:
        goto sukmqsesceacgcsk;
        gcmeqoywuowwqckm:
        smwsyuycaigasask:
        goto smoguaqmiogcyeii;
        aqwquiokswegekow:
        $mksyucucyswaukig = new stdClass();
        goto ikkeiacqssyycmok;
        oaukqecqqacgggag:
        gowywugewagyoyki:
        goto oykmaseogsuigwyk;
        ikkeiacqssyycmok:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto wukiykwiekwiggoi;
            qaucyyksqoowiiik:
            ouusoamawuiemmgc:
            goto qkokqiummsiywywk;
            qkokqiummsiywywk:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto ecwgqwcwqiooqwwc;
            }
            goto mquceeqokuqwiggw;
            qoaukwugooqysgoa:
            goto qemqkcguiqsyyqgo;
            goto qaucyyksqoowiiik;
            cgyqocywksmqqgmo:
            if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto ymeiyaeagqsmeyks;
            }
            goto qoaukwugooqysgoa;
            sqeicuykwwckkkac:
            ecwgqwcwqiooqwwc:
            goto iwmmoucecewyouue;
            deqksokkueawouek:
            ymeiyaeagqsmeyks:
            goto ooceogkqigscsciw;
            ooceogkqigscsciw:
            unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui)]);
            goto kskaamiuaguyyyqo;
            wukiykwiekwiggoi:
            if (key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto ouusoamawuiemmgc;
            }
            goto cgyqocywksmqqgmo;
            kskaamiuaguyyyqo:
            qemqkcguiqsyyqgo:
            goto cywikomgsaysoika;
            mquceeqokuqwiggw:
            $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw];
            goto sqeicuykwwckkkac;
            iwmmoucecewyouue:
            unset($yygmoeguaqyumuui[$uusmaiomayssaecw]);
            goto caeqmsgagaaaacwm;
            kqauougoaqguwako:
            moawqimmokskmqgg:
            goto okiioeyskuiagwwg;
            caeqmsgagaaaacwm:
            goto qemqkcguiqsyyqgo;
            goto deqksokkueawouek;
            cywikomgsaysoika:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok;
            goto kqauougoaqguwako;
            okiioeyskuiagwwg:
        }
        goto oaukqecqqacgggag;
        sucsiskcequmcegg:
    }
    
    public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array
    {
        goto iogaqqsmyokcsiko;
        ccsayioycemkwkow:
        return $mguygkocuoaoqqkg;
        goto omqoyywiseosgemk;
        ikyqecyakgkuassc:
        ewqgyoqokosiwoiq:
        goto ywiwssuaqigigukm;
        asekqqiwmgkgsmcq:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto usmcsiysgwoqegku;
            oaysgscuccmyyquw:
            somowkeqasuacoco:
            goto emsgkcioccgyqagu;
            usmcsiysgwoqegku:
            if (!is_array($igqsaukqcqscimok)) {
                goto iiwcwoqcissmkesc;
            }
            goto miowwmmmyucwauei;
            miowwmmmyucwauei:
            $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui);
            goto qyuomwuuoguquuyq;
            qyuomwuuoguquuyq:
            iiwcwoqcissmkesc:
            goto oaysgscuccmyyquw;
            emsgkcioccgyqagu:
        }
        goto ikyqecyakgkuassc;
        iogaqqsmyokcsiko:
        $mguygkocuoaoqqkg = [];
        goto msuykcqiymewymmi;
        ywiwssuaqigigukm:
        sikemkqimkwuggwy:
        goto ccsayioycemkwkow;
        msuykcqiymewymmi:
        if (!is_array($uomewyckeuqoqocu)) {
            goto sikemkqimkwuggwy;
        }
        goto asekqqiwmgkgsmcq;
        omqoyywiseosgemk:
    }
    
    public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string
    {
        return implode($kyckqucegowukmcm, $uomewyckeuqoqocu);
    }
}

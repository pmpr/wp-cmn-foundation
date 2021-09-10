<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
            qasmwiusmqomesqa:
            $eqgoocgaqwqcimie = intval($eqgoocgaqwqcimie);
            goto mquckimascgwcgcs;
            mquckimascgwcgcs:
            goto qiwicsqkwcywmsaq;
            goto myimaaecwmgoggyy;
            kkuksskgeyuoksmw:
            if (is_numeric($eqgoocgaqwqcimie)) {
                goto hwqemyoomsyaksig;
            }
            goto ygyqkaykekwesuqg;
            ygyqkaykekwesuqg:
            if (is_array($eqgoocgaqwqcimie)) {
                goto iqeymiuikawgwyia;
            }
            goto cewkooeecqyqmwwq;
            guycwicwsyiamuow:
            $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie);
            goto mqcgsygmyiogmmes;
            ukiomiskiaesgwsk:
            hwqemyoomsyaksig:
            goto qasmwiusmqomesqa;
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
        iqweusiiaogaewwg:
        aeauossmaimoyqqq:
        goto umssuyyayeceomci;
        qaaeeyysicyecigm:
        if (!is_array($uomewyckeuqoqocu)) {
            goto qeqioikysugyqquk;
        }
        goto wskcaooeoyaeesqu;
        eiaswsekmegymqkw:
        return $sogksuscggsicmac;
        goto geaycegmmswksguo;
        wskcaooeoyaeesqu:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto cgeaksemymyywamy;
            mqumsuwmsseemikc:
            iguayouumausiaqg:
            goto jsusmokimcoyuqyo;
            oiyogeiqgaukuayo:
            wucscqiukwwoagas:
            goto scmkyamaykmcsosy;
            iquoywiomuigqsky:
            goto qamamegyysqgwqay;
            goto oiyogeiqgaukuayo;
            kkgwieuuykqsimsi:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, [$uusmaiomayssaecw => $eqgoocgaqwqcimie]);
            goto iquoywiomuigqsky;
            cgeaksemymyywamy:
            if (is_array($eqgoocgaqwqcimie)) {
                goto wucscqiukwwoagas;
            }
            goto kkgwieuuykqsimsi;
            scmkyamaykmcsosy:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, self::uusyiuwawuywwmye($eqgoocgaqwqcimie));
            goto iqusukqamgasmqmm;
            iqusukqamgasmqmm:
            qamamegyysqgwqay:
            goto mqumsuwmsseemikc;
            jsusmokimcoyuqyo:
        }
        goto iqweusiiaogaewwg;
        umssuyyayeceomci:
        qeqioikysugyqquk:
        goto eiaswsekmegymqkw;
        geaycegmmswksguo:
    }
    
    public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass
    {
        goto aqwquiokswegekow;
        aqwquiokswegekow:
        $mksyucucyswaukig = new stdClass();
        goto ikkeiacqssyycmok;
        gcmeqoywuowwqckm:
        smwsyuycaigasask:
        goto smoguaqmiogcyeii;
        ikkeiacqssyycmok:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto wukiykwiekwiggoi;
            deqksokkueawouek:
            ymeiyaeagqsmeyks:
            goto ooceogkqigscsciw;
            cywikomgsaysoika:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok;
            goto kqauougoaqguwako;
            kskaamiuaguyyyqo:
            qemqkcguiqsyyqgo:
            goto cywikomgsaysoika;
            qoaukwugooqysgoa:
            goto qemqkcguiqsyyqgo;
            goto qaucyyksqoowiiik;
            ooceogkqigscsciw:
            unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui)]);
            goto kskaamiuaguyyyqo;
            qaucyyksqoowiiik:
            ouusoamawuiemmgc:
            goto qkokqiummsiywywk;
            caeqmsgagaaaacwm:
            goto qemqkcguiqsyyqgo;
            goto deqksokkueawouek;
            iwmmoucecewyouue:
            unset($yygmoeguaqyumuui[$uusmaiomayssaecw]);
            goto caeqmsgagaaaacwm;
            sqeicuykwwckkkac:
            ecwgqwcwqiooqwwc:
            goto iwmmoucecewyouue;
            kqauougoaqguwako:
            moawqimmokskmqgg:
            goto okiioeyskuiagwwg;
            cgyqocywksmqqgmo:
            if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto ymeiyaeagqsmeyks;
            }
            goto qoaukwugooqysgoa;
            wukiykwiekwiggoi:
            if (key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto ouusoamawuiemmgc;
            }
            goto cgyqocywksmqqgmo;
            mquceeqokuqwiggw:
            $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw];
            goto sqeicuykwwckkkac;
            qkokqiummsiywywk:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto ecwgqwcwqiooqwwc;
            }
            goto mquceeqokuqwiggw;
            okiioeyskuiagwwg:
        }
        goto oaukqecqqacgggag;
        oykmaseogsuigwyk:
        
        if (!(count($yygmoeguaqyumuui) > 0)) {
            goto aoqyomyemgqwqiok;
        }
        goto cskmgmquecaqwukc;
        cskmgmquecaqwukc:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto kwmoemcsgkksakqa;
            kwmoemcsgkksakqa:
            if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) {
                goto geyoeoemkimiiuwu;
            }
            goto iqqmckmqwoiqsywa;
            iciwemqeaqowgqqo:
            akcyggyimceacaum:
            goto ikcsoqwwgackmmgo;
            igikawameoiasygk:
            geyoeoemkimiiuwu:
            goto iciwemqeaqowgqqo;
            iqqmckmqwoiqsywa:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = null;
            goto igikawameoiasygk;
            ikcsoqwwgackmmgo:
        }
        goto gcmeqoywuowwqckm;
        sukmqsesceacgcsk:
        return $mksyucucyswaukig;
        goto sucsiskcequmcegg;
        oaukqecqqacgggag:
        gowywugewagyoyki:
        goto oykmaseogsuigwyk;
        smoguaqmiogcyeii:
        aoqyomyemgqwqiok:
        goto sukmqsesceacgcsk;
        sucsiskcequmcegg:
    }
    
    public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array
    {
        goto iogaqqsmyokcsiko;
        ikyqecyakgkuassc:
        ewqgyoqokosiwoiq:
        goto ywiwssuaqigigukm;
        asekqqiwmgkgsmcq:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto usmcsiysgwoqegku;
            miowwmmmyucwauei:
            $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui);
            goto qyuomwuuoguquuyq;
            usmcsiysgwoqegku:
            if (!is_array($igqsaukqcqscimok)) {
                goto iiwcwoqcissmkesc;
            }
            goto miowwmmmyucwauei;
            qyuomwuuoguquuyq:
            iiwcwoqcissmkesc:
            goto oaysgscuccmyyquw;
            oaysgscuccmyyquw:
            somowkeqasuacoco:
            goto emsgkcioccgyqagu;
            emsgkcioccgyqagu:
        }
        goto ikyqecyakgkuassc;
        iogaqqsmyokcsiko:
        $mguygkocuoaoqqkg = [];
        goto msuykcqiymewymmi;
        msuykcqiymewymmi:
        if (!is_array($uomewyckeuqoqocu)) {
            goto sikemkqimkwuggwy;
        }
        goto asekqqiwmgkgsmcq;
        ywiwssuaqigigukm:
        sikemkqimkwuggwy:
        goto ccsayioycemkwkow;
        ccsayioycemkwkow:
        return $mguygkocuoaoqqkg;
        goto omqoyywiseosgemk;
        omqoyywiseosgemk:
    }
    
    public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string
    {
        return implode($kyckqucegowukmcm, $uomewyckeuqoqocu);
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Convert\Type;

use stdClass;

class ConvertArray extends Common
{
    
    public static function comkeiiwgwaqmcwe($uomewyckeuqoqocu)
    {
        array_walk($uomewyckeuqoqocu, function (&$eqgoocgaqwqcimie, $uusmaiomayssaecw) {
            goto uqcaomakqoycwicm;
            gemckmgaigeaqoce:
            waeuacmiwukowsuc:
            goto gucqgcqwoimkwcek;
            gucqgcqwoimkwcek:
            $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie);
            goto iacuuogeimakywss;
            iacuuogeimakywss:
            gqgqsiugwyueosuk:
            goto qiyskomkewcmygyq;
            ukqgycaqkmcmwwua:
            if (is_array($eqgoocgaqwqcimie)) {
                goto waeuacmiwukowsuc;
            }
            goto wwqimegeyywwqqqm;
            uqcaomakqoycwicm:
            if (is_numeric($eqgoocgaqwqcimie)) {
                goto yowkucagyqgwyega;
            }
            goto ukqgycaqkmcmwwua;
            ogawmwuomuowcwyy:
            $eqgoocgaqwqcimie = intval($eqgoocgaqwqcimie);
            goto kkqsuaomkckegccq;
            wwqimegeyywwqqqm:
            goto gqgqsiugwyueosuk;
            goto auksmcqqyyagkeaa;
            auksmcqqyyagkeaa:
            yowkucagyqgwyega:
            goto ogawmwuomuowcwyy;
            kkqsuaomkckegccq:
            goto gqgqsiugwyueosuk;
            goto gemckmgaigeaqoce;
            qiyskomkewcmygyq:
        });
        return $uomewyckeuqoqocu;
    }
    
    public static function uusyiuwawuywwmye($uomewyckeuqoqocu)
    {
        goto ogiogeuygmkiiquw;
        iagckoggkakekigk:
        return $sogksuscggsicmac;
        goto oeaqcoicesgmgyoy;
        gmeemgswkyokekac:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto yukmsawciwkeuusw;
            moeiosaoocmukukk:
            wkmyuaqacooaiccq:
            goto wwaakogequokiwmc;
            mswmikumamcegkss:
            goto yagasegkqgewyyaw;
            goto wsgcoqwuiemsesck;
            agycsismscqmqgck:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, [$uusmaiomayssaecw => $eqgoocgaqwqcimie]);
            goto mswmikumamcegkss;
            wsgcoqwuiemsesck:
            escmmmseocmegscc:
            goto ogoeucemguomwieo;
            goecwmeukyiguomk:
            yagasegkqgewyyaw:
            goto moeiosaoocmukukk;
            yukmsawciwkeuusw:
            if (is_array($eqgoocgaqwqcimie)) {
                goto escmmmseocmegscc;
            }
            goto agycsismscqmqgck;
            ogoeucemguomwieo:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, self::uusyiuwawuywwmye($eqgoocgaqwqcimie));
            goto goecwmeukyiguomk;
            wwaakogequokiwmc:
        }
        goto ykqiaioewyakgmei;
        ykqiaioewyakgmei:
        tkkkasskiumciacw:
        goto iiisyiqocwokceqi;
        ogiogeuygmkiiquw:
        $sogksuscggsicmac = [];
        goto omekckkeyyaweyky;
        omekckkeyyaweyky:
        if (!is_array($uomewyckeuqoqocu)) {
            goto cowwaukyegiscocm;
        }
        goto gmeemgswkyokekac;
        iiisyiqocwokceqi:
        cowwaukyegiscocm:
        goto iagckoggkakekigk;
        oeaqcoicesgmgyoy:
    }
    
    public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass
    {
        goto uguyasecegqmqaoa;
        hwqemyoomsyaksig:
        
        if (!(count($yygmoeguaqyumuui) > 0)) {
            goto gqwsuiweccsqwwsw;
        }
        goto iqeymiuikawgwyia;
        kkuksskgeyuoksmw:
        qygeowmwmiacoekm:
        goto ygyqkaykekwesuqg;
        qiwicsqkwcywmsaq:
        ikaeaqiemmaokace:
        goto hwqemyoomsyaksig;
        ygyqkaykekwesuqg:
        gqwsuiweccsqwwsw:
        goto cewkooeecqyqmwwq;
        uguyasecegqmqaoa:
        $mksyucucyswaukig = new stdClass();
        goto eaeamowgsqcwyqok;
        iqeymiuikawgwyia:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto kommgumsagoyqggu;
            ucocwuquasemqweo:
            wwoiisqaamueeuce:
            goto qaemcayqiaekkuyc;
            kommgumsagoyqggu:
            if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) {
                goto wwoiisqaamueeuce;
            }
            goto easgcwoweimgucgw;
            easgcwoweimgucgw:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = null;
            goto ucocwuquasemqweo;
            qaemcayqiaekkuyc:
            tiueaamgsyyqgwqk:
            goto sqokooqayqgquoua;
            sqokooqayqgquoua:
        }
        goto kkuksskgeyuoksmw;
        eaeamowgsqcwyqok:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto amaoscwycqygkegq;
            gsqwqmegcsyuawmq:
            weuwakqwosgumwsy:
            goto eumocamquwkqqeeq;
            uqsceccusmgeyuew:
            aigekiscequekicu:
            goto wmmawwseygmyisok;
            qyeayqkyaiimsosi:
            goto ksggcqioosseuwkc;
            goto ggyomkkegskioyiw;
            wmoqacqeciuceekg:
            goto ksggcqioosseuwkc;
            goto uqsceccusmgeyuew;
            uauioquiemswyaqs:
            if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto miagouqecwwkqawu;
            }
            goto wmoqacqeciuceekg;
            ggyomkkegskioyiw:
            miagouqecwwkqawu:
            goto koqqweykqaikisee;
            aoouywumugoecggw:
            ksggcqioosseuwkc:
            goto iuwqyoigygqgqoci;
            koqqweykqaikisee:
            unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui)]);
            goto aoouywumugoecggw;
            gaoiaumomqsoksky:
            swqosaucauumkyam:
            goto oiycsmwieaaiikmm;
            amaoscwycqygkegq:
            if (key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto aigekiscequekicu;
            }
            goto uauioquiemswyaqs;
            oiycsmwieaaiikmm:
            unset($yygmoeguaqyumuui[$uusmaiomayssaecw]);
            goto qyeayqkyaiimsosi;
            iuwqyoigygqgqoci:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok;
            goto gsqwqmegcsyuawmq;
            geswkmoowggqycem:
            $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw];
            goto gaoiaumomqsoksky;
            wmmawwseygmyisok:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto swqosaucauumkyam;
            }
            goto geswkmoowggqycem;
            eumocamquwkqqeeq:
        }
        goto qiwicsqkwcywmsaq;
        cewkooeecqyqmwwq:
        return $mksyucucyswaukig;
        goto ukiomiskiaesgwsk;
        ukiomiskiaesgwsk:
    }
    
    public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array
    {
        goto qamamegyysqgwqay;
        kkgwieuuykqsimsi:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto guycwicwsyiamuow;
            guycwicwsyiamuow:
            if (!is_array($igqsaukqcqscimok)) {
                goto myimaaecwmgoggyy;
            }
            goto mqcgsygmyiogmmes;
            iuuqiqasocieqsaw:
            myimaaecwmgoggyy:
            goto aeauossmaimoyqqq;
            mqcgsygmyiogmmes:
            $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui);
            goto iuuqiqasocieqsaw;
            aeauossmaimoyqqq:
            mquckimascgwcgcs:
            goto iguayouumausiaqg;
            iguayouumausiaqg:
        }
        goto iquoywiomuigqsky;
        oiyogeiqgaukuayo:
        wucscqiukwwoagas:
        goto scmkyamaykmcsosy;
        iquoywiomuigqsky:
        qasmwiusmqomesqa:
        goto oiyogeiqgaukuayo;
        cgeaksemymyywamy:
        if (!is_array($uomewyckeuqoqocu)) {
            goto wucscqiukwwoagas;
        }
        goto kkgwieuuykqsimsi;
        qamamegyysqgwqay:
        $mguygkocuoaoqqkg = [];
        goto cgeaksemymyywamy;
        scmkyamaykmcsosy:
        return $mguygkocuoaoqqkg;
        goto iqusukqamgasmqmm;
        iqusukqamgasmqmm:
    }
    
    public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string
    {
        return implode($kyckqucegowukmcm, $uomewyckeuqoqocu);
    }
}

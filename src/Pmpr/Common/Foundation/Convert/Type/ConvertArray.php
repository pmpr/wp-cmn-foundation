<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
            kkqsuaomkckegccq:
            goto gqgqsiugwyueosuk;
            goto gemckmgaigeaqoce;
            iacuuogeimakywss:
            gqgqsiugwyueosuk:
            goto qiyskomkewcmygyq;
            ukqgycaqkmcmwwua:
            if (is_array($eqgoocgaqwqcimie)) {
                goto waeuacmiwukowsuc;
            }
            goto wwqimegeyywwqqqm;
            gucqgcqwoimkwcek:
            $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie);
            goto iacuuogeimakywss;
            ogawmwuomuowcwyy:
            $eqgoocgaqwqcimie = intval($eqgoocgaqwqcimie);
            goto kkqsuaomkckegccq;
            uqcaomakqoycwicm:
            if (is_numeric($eqgoocgaqwqcimie)) {
                goto yowkucagyqgwyega;
            }
            goto ukqgycaqkmcmwwua;
            wwqimegeyywwqqqm:
            goto gqgqsiugwyueosuk;
            goto auksmcqqyyagkeaa;
            auksmcqqyyagkeaa:
            yowkucagyqgwyega:
            goto ogawmwuomuowcwyy;
            qiyskomkewcmygyq:
        });
        return $uomewyckeuqoqocu;
    }
    
    public static function uusyiuwawuywwmye($uomewyckeuqoqocu)
    {
        goto ogiogeuygmkiiquw;
        ykqiaioewyakgmei:
        tkkkasskiumciacw:
        goto iiisyiqocwokceqi;
        iiisyiqocwokceqi:
        cowwaukyegiscocm:
        goto iagckoggkakekigk;
        iagckoggkakekigk:
        return $sogksuscggsicmac;
        goto oeaqcoicesgmgyoy;
        omekckkeyyaweyky:
        if (!is_array($uomewyckeuqoqocu)) {
            goto cowwaukyegiscocm;
        }
        goto gmeemgswkyokekac;
        ogiogeuygmkiiquw:
        $sogksuscggsicmac = [];
        goto omekckkeyyaweyky;
        gmeemgswkyokekac:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto yukmsawciwkeuusw;
            agycsismscqmqgck:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, [$uusmaiomayssaecw => $eqgoocgaqwqcimie]);
            goto mswmikumamcegkss;
            ogoeucemguomwieo:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, self::uusyiuwawuywwmye($eqgoocgaqwqcimie));
            goto goecwmeukyiguomk;
            moeiosaoocmukukk:
            wkmyuaqacooaiccq:
            goto wwaakogequokiwmc;
            yukmsawciwkeuusw:
            if (is_array($eqgoocgaqwqcimie)) {
                goto escmmmseocmegscc;
            }
            goto agycsismscqmqgck;
            goecwmeukyiguomk:
            yagasegkqgewyyaw:
            goto moeiosaoocmukukk;
            mswmikumamcegkss:
            goto yagasegkqgewyyaw;
            goto wsgcoqwuiemsesck;
            wsgcoqwuiemsesck:
            escmmmseocmegscc:
            goto ogoeucemguomwieo;
            wwaakogequokiwmc:
        }
        goto ykqiaioewyakgmei;
        oeaqcoicesgmgyoy:
    }
    
    public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass
    {
        goto uguyasecegqmqaoa;
        kkuksskgeyuoksmw:
        qygeowmwmiacoekm:
        goto ygyqkaykekwesuqg;
        hwqemyoomsyaksig:
        
        if (!(count($yygmoeguaqyumuui) > 0)) {
            goto gqwsuiweccsqwwsw;
        }
        goto iqeymiuikawgwyia;
        uguyasecegqmqaoa:
        $mksyucucyswaukig = new stdClass();
        goto eaeamowgsqcwyqok;
        cewkooeecqyqmwwq:
        return $mksyucucyswaukig;
        goto ukiomiskiaesgwsk;
        iqeymiuikawgwyia:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto kommgumsagoyqggu;
            qaemcayqiaekkuyc:
            tiueaamgsyyqgwqk:
            goto sqokooqayqgquoua;
            kommgumsagoyqggu:
            if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) {
                goto wwoiisqaamueeuce;
            }
            goto easgcwoweimgucgw;
            ucocwuquasemqweo:
            wwoiisqaamueeuce:
            goto qaemcayqiaekkuyc;
            easgcwoweimgucgw:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = null;
            goto ucocwuquasemqweo;
            sqokooqayqgquoua:
        }
        goto kkuksskgeyuoksmw;
        eaeamowgsqcwyqok:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto amaoscwycqygkegq;
            ggyomkkegskioyiw:
            miagouqecwwkqawu:
            goto koqqweykqaikisee;
            wmmawwseygmyisok:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto swqosaucauumkyam;
            }
            goto geswkmoowggqycem;
            gaoiaumomqsoksky:
            swqosaucauumkyam:
            goto oiycsmwieaaiikmm;
            geswkmoowggqycem:
            $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw];
            goto gaoiaumomqsoksky;
            amaoscwycqygkegq:
            if (key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto aigekiscequekicu;
            }
            goto uauioquiemswyaqs;
            qyeayqkyaiimsosi:
            goto ksggcqioosseuwkc;
            goto ggyomkkegskioyiw;
            wmoqacqeciuceekg:
            goto ksggcqioosseuwkc;
            goto uqsceccusmgeyuew;
            oiycsmwieaaiikmm:
            unset($yygmoeguaqyumuui[$uusmaiomayssaecw]);
            goto qyeayqkyaiimsosi;
            aoouywumugoecggw:
            ksggcqioosseuwkc:
            goto iuwqyoigygqgqoci;
            iuwqyoigygqgqoci:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok;
            goto gsqwqmegcsyuawmq;
            uqsceccusmgeyuew:
            aigekiscequekicu:
            goto wmmawwseygmyisok;
            gsqwqmegcsyuawmq:
            weuwakqwosgumwsy:
            goto eumocamquwkqqeeq;
            uauioquiemswyaqs:
            if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto miagouqecwwkqawu;
            }
            goto wmoqacqeciuceekg;
            koqqweykqaikisee:
            unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui)]);
            goto aoouywumugoecggw;
            eumocamquwkqqeeq:
        }
        goto qiwicsqkwcywmsaq;
        qiwicsqkwcywmsaq:
        ikaeaqiemmaokace:
        goto hwqemyoomsyaksig;
        ygyqkaykekwesuqg:
        gqwsuiweccsqwwsw:
        goto cewkooeecqyqmwwq;
        ukiomiskiaesgwsk:
    }
    
    public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array
    {
        goto qamamegyysqgwqay;
        qamamegyysqgwqay:
        $mguygkocuoaoqqkg = [];
        goto cgeaksemymyywamy;
        kkgwieuuykqsimsi:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto guycwicwsyiamuow;
            guycwicwsyiamuow:
            if (!is_array($igqsaukqcqscimok)) {
                goto myimaaecwmgoggyy;
            }
            goto mqcgsygmyiogmmes;
            mqcgsygmyiogmmes:
            $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui);
            goto iuuqiqasocieqsaw;
            iuuqiqasocieqsaw:
            myimaaecwmgoggyy:
            goto aeauossmaimoyqqq;
            aeauossmaimoyqqq:
            mquckimascgwcgcs:
            goto iguayouumausiaqg;
            iguayouumausiaqg:
        }
        goto iquoywiomuigqsky;
        scmkyamaykmcsosy:
        return $mguygkocuoaoqqkg;
        goto iqusukqamgasmqmm;
        iquoywiomuigqsky:
        qasmwiusmqomesqa:
        goto oiyogeiqgaukuayo;
        oiyogeiqgaukuayo:
        wucscqiukwwoagas:
        goto scmkyamaykmcsosy;
        cgeaksemymyywamy:
        if (!is_array($uomewyckeuqoqocu)) {
            goto wucscqiukwwoagas;
        }
        goto kkgwieuuykqsimsi;
        iqusukqamgasmqmm:
    }
    
    public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string
    {
        return implode($kyckqucegowukmcm, $uomewyckeuqoqocu);
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Convert\Type;

use stdClass;

class ConvertArray extends Common
{
    
    public static function comkeiiwgwaqmcwe($uomewyckeuqoqocu)
    {
        array_walk($uomewyckeuqoqocu, function (&$eqgoocgaqwqcimie, $uusmaiomayssaecw) {
            goto gqgqsiugwyueosuk;
            ukqgycaqkmcmwwua:
            $eqgoocgaqwqcimie = intval($eqgoocgaqwqcimie);
            goto wwqimegeyywwqqqm;
            wwqimegeyywwqqqm:
            goto iswcaeqkwmqiywmw;
            goto auksmcqqyyagkeaa;
            uqcaomakqoycwicm:
            oasasywweeuieemi:
            goto ukqgycaqkmcmwwua;
            auksmcqqyyagkeaa:
            kuwwsgeioseccayw:
            goto ogawmwuomuowcwyy;
            gqgqsiugwyueosuk:
            if (is_numeric($eqgoocgaqwqcimie)) {
                goto oasasywweeuieemi;
            }
            goto yowkucagyqgwyega;
            ogawmwuomuowcwyy:
            $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie);
            goto kkqsuaomkckegccq;
            kkqsuaomkckegccq:
            iswcaeqkwmqiywmw:
            goto gemckmgaigeaqoce;
            waeuacmiwukowsuc:
            goto iswcaeqkwmqiywmw;
            goto uqcaomakqoycwicm;
            yowkucagyqgwyega:
            if (is_array($eqgoocgaqwqcimie)) {
                goto kuwwsgeioseccayw;
            }
            goto waeuacmiwukowsuc;
            gemckmgaigeaqoce:
        });
        return $uomewyckeuqoqocu;
    }
    
    public static function uusyiuwawuywwmye($uomewyckeuqoqocu)
    {
        goto moeiosaoocmukukk;
        ogiogeuygmkiiquw:
        gucqgcqwoimkwcek:
        goto omekckkeyyaweyky;
        cowwaukyegiscocm:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto wkmyuaqacooaiccq;
            mswmikumamcegkss:
            tkkkasskiumciacw:
            goto wsgcoqwuiemsesck;
            agycsismscqmqgck:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, self::uusyiuwawuywwmye($eqgoocgaqwqcimie));
            goto mswmikumamcegkss;
            yukmsawciwkeuusw:
            qiyskomkewcmygyq:
            goto agycsismscqmqgck;
            wkmyuaqacooaiccq:
            if (is_array($eqgoocgaqwqcimie)) {
                goto qiyskomkewcmygyq;
            }
            goto escmmmseocmegscc;
            yagasegkqgewyyaw:
            goto tkkkasskiumciacw;
            goto yukmsawciwkeuusw;
            escmmmseocmegscc:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, [$uusmaiomayssaecw => $eqgoocgaqwqcimie]);
            goto yagasegkqgewyyaw;
            wsgcoqwuiemsesck:
            iacuuogeimakywss:
            goto ogoeucemguomwieo;
            ogoeucemguomwieo:
        }
        goto ogiogeuygmkiiquw;
        omekckkeyyaweyky:
        goecwmeukyiguomk:
        goto gmeemgswkyokekac;
        gmeemgswkyokekac:
        return $sogksuscggsicmac;
        goto ykqiaioewyakgmei;
        wwaakogequokiwmc:
        if (!is_array($uomewyckeuqoqocu)) {
            goto goecwmeukyiguomk;
        }
        goto cowwaukyegiscocm;
        moeiosaoocmukukk:
        $sogksuscggsicmac = [];
        goto wwaakogequokiwmc;
        ykqiaioewyakgmei:
    }
    
    public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass
    {
        goto qaemcayqiaekkuyc;
        hwqemyoomsyaksig:
        ucocwuquasemqweo:
        goto iqeymiuikawgwyia;
        iqeymiuikawgwyia:
        return $mksyucucyswaukig;
        goto kkuksskgeyuoksmw;
        qaemcayqiaekkuyc:
        $mksyucucyswaukig = new stdClass();
        goto sqokooqayqgquoua;
        uguyasecegqmqaoa:
        
        if (!(count($yygmoeguaqyumuui) > 0)) {
            goto ucocwuquasemqweo;
        }
        goto eaeamowgsqcwyqok;
        eaeamowgsqcwyqok:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto qygeowmwmiacoekm;
            kommgumsagoyqggu:
            gsqwqmegcsyuawmq:
            goto easgcwoweimgucgw;
            wwoiisqaamueeuce:
            eumocamquwkqqeeq:
            goto kommgumsagoyqggu;
            tiueaamgsyyqgwqk:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = null;
            goto wwoiisqaamueeuce;
            qygeowmwmiacoekm:
            if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) {
                goto eumocamquwkqqeeq;
            }
            goto tiueaamgsyyqgwqk;
            easgcwoweimgucgw:
        }
        goto qiwicsqkwcywmsaq;
        sqokooqayqgquoua:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto ksggcqioosseuwkc;
            geswkmoowggqycem:
            goto ikaeaqiemmaokace;
            goto gaoiaumomqsoksky;
            oiycsmwieaaiikmm:
            unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui)]);
            goto qyeayqkyaiimsosi;
            wmmawwseygmyisok:
            unset($yygmoeguaqyumuui[$uusmaiomayssaecw]);
            goto geswkmoowggqycem;
            koqqweykqaikisee:
            iagckoggkakekigk:
            goto aoouywumugoecggw;
            gaoiaumomqsoksky:
            swqosaucauumkyam:
            goto oiycsmwieaaiikmm;
            miagouqecwwkqawu:
            goto ikaeaqiemmaokace;
            goto amaoscwycqygkegq;
            amaoscwycqygkegq:
            weuwakqwosgumwsy:
            goto uauioquiemswyaqs;
            uauioquiemswyaqs:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto oeaqcoicesgmgyoy;
            }
            goto wmoqacqeciuceekg;
            ggyomkkegskioyiw:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok;
            goto koqqweykqaikisee;
            wmoqacqeciuceekg:
            $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw];
            goto uqsceccusmgeyuew;
            qyeayqkyaiimsosi:
            ikaeaqiemmaokace:
            goto ggyomkkegskioyiw;
            ksggcqioosseuwkc:
            if (key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto weuwakqwosgumwsy;
            }
            goto aigekiscequekicu;
            uqsceccusmgeyuew:
            oeaqcoicesgmgyoy:
            goto wmmawwseygmyisok;
            aigekiscequekicu:
            if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto swqosaucauumkyam;
            }
            goto miagouqecwwkqawu;
            aoouywumugoecggw:
        }
        goto gqwsuiweccsqwwsw;
        qiwicsqkwcywmsaq:
        iuwqyoigygqgqoci:
        goto hwqemyoomsyaksig;
        gqwsuiweccsqwwsw:
        iiisyiqocwokceqi:
        goto uguyasecegqmqaoa;
        kkuksskgeyuoksmw:
    }
    
    public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array
    {
        goto aeauossmaimoyqqq;
        aeauossmaimoyqqq:
        $mguygkocuoaoqqkg = [];
        goto iguayouumausiaqg;
        wucscqiukwwoagas:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto qasmwiusmqomesqa;
            qasmwiusmqomesqa:
            if (!is_array($igqsaukqcqscimok)) {
                goto ukiomiskiaesgwsk;
            }
            goto mquckimascgwcgcs;
            myimaaecwmgoggyy:
            ukiomiskiaesgwsk:
            goto guycwicwsyiamuow;
            mquckimascgwcgcs:
            $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui);
            goto myimaaecwmgoggyy;
            guycwicwsyiamuow:
            cewkooeecqyqmwwq:
            goto mqcgsygmyiogmmes;
            mqcgsygmyiogmmes:
        }
        goto qamamegyysqgwqay;
        iguayouumausiaqg:
        if (!is_array($uomewyckeuqoqocu)) {
            goto iuuqiqasocieqsaw;
        }
        goto wucscqiukwwoagas;
        qamamegyysqgwqay:
        ygyqkaykekwesuqg:
        goto cgeaksemymyywamy;
        cgeaksemymyywamy:
        iuuqiqasocieqsaw:
        goto kkgwieuuykqsimsi;
        kkgwieuuykqsimsi:
        return $mguygkocuoaoqqkg;
        goto iquoywiomuigqsky;
        iquoywiomuigqsky:
    }
    
    public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string
    {
        return implode($kyckqucegowukmcm, $uomewyckeuqoqocu);
    }
}

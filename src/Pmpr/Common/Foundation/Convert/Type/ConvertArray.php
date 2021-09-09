<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Convert\Type;

use stdClass;

class ConvertArray extends Common
{
    
    public static function comkeiiwgwaqmcwe($uomewyckeuqoqocu)
    {
        array_walk($uomewyckeuqoqocu, function (&$eqgoocgaqwqcimie, $uusmaiomayssaecw) {
            goto icmkoqicsywoekgu;
            acueuwkqyosyekeq:
            if (is_array($eqgoocgaqwqcimie)) {
                goto yqgqaewysywqmysu;
            }
            goto uuggkkmqccumqayi;
            akaosumkgioacikc:
            yqgqaewysywqmysu:
            goto wukgeggyqimmsokc;
            wukgeggyqimmsokc:
            $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie);
            goto skieiagqacceemsy;
            ywyusockqwcssooq:
            goto mokuammgeauqqsii;
            goto akaosumkgioacikc;
            sogouwugiaaiowsa:
            umeaqogigsmqsqsu:
            goto ygagokmesgacaoqy;
            ygagokmesgacaoqy:
            $eqgoocgaqwqcimie = intval($eqgoocgaqwqcimie);
            goto ywyusockqwcssooq;
            uuggkkmqccumqayi:
            goto mokuammgeauqqsii;
            goto sogouwugiaaiowsa;
            skieiagqacceemsy:
            mokuammgeauqqsii:
            goto ywgcoskwgewywecq;
            icmkoqicsywoekgu:
            if (is_numeric($eqgoocgaqwqcimie)) {
                goto umeaqogigsmqsqsu;
            }
            goto acueuwkqyosyekeq;
            ywgcoskwgewywecq:
        });
        return $uomewyckeuqoqocu;
    }
    
    public static function uusyiuwawuywwmye($uomewyckeuqoqocu)
    {
        goto aogumaeoimukciac;
        aogumaeoimukciac:
        $sogksuscggsicmac = [];
        goto oiugacuckwmecqgk;
        quocmskwwaumyiae:
        ewecawmiqcgeaque:
        goto ukwwiwwkmuqemkic;
        wiksqikkuaiyqmcu:
        gaugyegusygssymo:
        goto quocmskwwaumyiae;
        ukwwiwwkmuqemkic:
        return $sogksuscggsicmac;
        goto oqeoyeeeogmqagko;
        wakamsgsammaqwqg:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto qwsygiaussesywem;
            miosmgaacmsgswos:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, self::uusyiuwawuywwmye($eqgoocgaqwqcimie));
            goto aeycackeqwkqeokg;
            qeycaskgikeokega:
            scgumooaicmgygws:
            goto miosmgaacmsgswos;
            aeycackeqwkqeokg:
            wmqymkwokycyykow:
            goto sqyeywwoeiewwkim;
            eeaiusyckugwoams:
            goto wmqymkwokycyykow;
            goto qeycaskgikeokega;
            sqyeywwoeiewwkim:
            ugoueyqkecsooieg:
            goto keemgiqiykwguocw;
            qyiyukakwoomokqm:
            $sogksuscggsicmac = array_merge($sogksuscggsicmac, [$uusmaiomayssaecw => $eqgoocgaqwqcimie]);
            goto eeaiusyckugwoams;
            qwsygiaussesywem:
            if (is_array($eqgoocgaqwqcimie)) {
                goto scgumooaicmgygws;
            }
            goto qyiyukakwoomokqm;
            keemgiqiykwguocw:
        }
        goto wiksqikkuaiyqmcu;
        oiugacuckwmecqgk:
        if (!is_array($uomewyckeuqoqocu)) {
            goto ewecawmiqcgeaque;
        }
        goto wakamsgsammaqwqg;
        oqeoyeeeogmqagko:
    }
    
    public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass
    {
        goto iswiyqggakommwme;
        oasasywweeuieemi:
        return $mksyucucyswaukig;
        goto kuwwsgeioseccayw;
        ogwyceiasmkecega:
        emiqmswmkkiscuuu:
        goto qywaouucmiiygmwm;
        usgwiosecieikgka:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto ggsaqscecssyooyu;
            ggsaqscecssyooyu:
            if (isset($mksyucucyswaukig->{$uusmaiomayssaecw})) {
                goto skqqwmemiemiuyka;
            }
            goto umqcquemgmagccsa;
            susywgmyuqgesoqm:
            skqqwmemiemiuyka:
            goto auikqkeqwesewceo;
            auikqkeqwesewceo:
            aqeciqckokseauei:
            goto miuuouwcqyuuassq;
            umqcquemgmagccsa:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = null;
            goto susywgmyuqgesoqm;
            miuuouwcqyuuassq:
        }
        goto oaomsmoyuaiweqke;
        iswiyqggakommwme:
        $mksyucucyswaukig = new stdClass();
        goto ukkeimmiooigeukm;
        ukkeimmiooigeukm:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto yukmcqiuugkamaow;
            kwgswyiyuiusquis:
            qgaiyikuyacyymma:
            goto nwqkeomgugscuesw;
            wuqwccycokcwgumm:
            if (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto ycumeemqusckwyoc;
            }
            goto iawwcgswwmcqmcsk;
            nwqkeomgugscuesw:
            if (!is_numeric($uusmaiomayssaecw)) {
                goto ywgieceuausccaoo;
            }
            goto mekgaisoagymyaaw;
            masugicegsyegooy:
            unset($yygmoeguaqyumuui[$uusmaiomayssaecw]);
            goto mmkaacimmsosgyeo;
            mmkaacimmsosgyeo:
            goto hwskqqioyiycssus;
            goto oqgyymcwykwyekwi;
            ymcussoqgmiugeim:
            ywgieceuausccaoo:
            goto masugicegsyegooy;
            gogekosaoawesmik:
            $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok;
            goto quyowuoyqykcmqem;
            reuyikuqkiecguye:
            unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui)]);
            goto miuwyoykaasqyqmu;
            quyowuoyqykcmqem:
            qcsmqummmmyaqseu:
            goto wucoqqekkeuwmeac;
            mekgaisoagymyaaw:
            $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw];
            goto ymcussoqgmiugeim;
            iawwcgswwmcqmcsk:
            goto hwskqqioyiycssus;
            goto kwgswyiyuiusquis;
            oqgyymcwykwyekwi:
            ycumeemqusckwyoc:
            goto reuyikuqkiecguye;
            yukmcqiuugkamaow:
            if (key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                goto qgaiyikuyacyymma;
            }
            goto wuqwccycokcwgumm;
            miuwyoykaasqyqmu:
            hwskqqioyiycssus:
            goto gogekosaoawesmik;
            wucoqqekkeuwmeac:
        }
        goto ogwyceiasmkecega;
        oaomsmoyuaiweqke:
        aicqmuuuokcayamc:
        goto iswcaeqkwmqiywmw;
        iswcaeqkwmqiywmw:
        wmsekuosaquuokig:
        goto oasasywweeuieemi;
        qywaouucmiiygmwm:
        
        if (!(count($yygmoeguaqyumuui) > 0)) {
            goto wmsekuosaquuokig;
        }
        goto usgwiosecieikgka;
        kuwwsgeioseccayw:
    }
    
    public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array
    {
        goto gemckmgaigeaqoce;
        gucqgcqwoimkwcek:
        if (!is_array($uomewyckeuqoqocu)) {
            goto kkqsuaomkckegccq;
        }
        goto iacuuogeimakywss;
        iacuuogeimakywss:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto uqcaomakqoycwicm;
            auksmcqqyyagkeaa:
            yowkucagyqgwyega:
            goto ogawmwuomuowcwyy;
            uqcaomakqoycwicm:
            if (!is_array($igqsaukqcqscimok)) {
                goto waeuacmiwukowsuc;
            }
            goto ukqgycaqkmcmwwua;
            wwqimegeyywwqqqm:
            waeuacmiwukowsuc:
            goto auksmcqqyyagkeaa;
            ukqgycaqkmcmwwua:
            $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui);
            goto wwqimegeyywwqqqm;
            ogawmwuomuowcwyy:
        }
        goto qiyskomkewcmygyq;
        tkkkasskiumciacw:
        kkqsuaomkckegccq:
        goto wkmyuaqacooaiccq;
        qiyskomkewcmygyq:
        gqgqsiugwyueosuk:
        goto tkkkasskiumciacw;
        gemckmgaigeaqoce:
        $mguygkocuoaoqqkg = [];
        goto gucqgcqwoimkwcek;
        wkmyuaqacooaiccq:
        return $mguygkocuoaoqqkg;
        goto escmmmseocmegscc;
        escmmmseocmegscc:
    }
    
    public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string
    {
        return implode($kyckqucegowukmcm, $uomewyckeuqoqocu);
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use DOMDocument;
use DOMElement;
use DOMNode;
use Exception;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use InvalidArgumentException;
use Symfony\Component\DomCrawler\Crawler;

class DOMCrawler
{
    const UPDATE_ACTION = "\x75\160\144\x61\x74\x65";
    const REMOVE_ACTION = "\162\145\x6d\157\166\x65";
    const RENAME_ACTION = "\162\145\x6e\141\x6d\145";
    const REPLACE_ACTION = "\162\145\x70\x6c\x61\x63\x65";
    const REPLACE_WITH_ACTION = "\162\x65\160\154\141\x63\145\137\x77\151\x74\150";
    
    public static function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, $uuyoeicyoayimaoa = false, $ksaameoqigiaoigg = true)
    {
        goto ocueeioeueqmisuo;
        icimmqwesqkmeuce:
        yuqoyicsmawcauec:
        goto wysuusuamkqeyqso;
        wyiciayqimeqqomu:
        foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) {
            goto wueqcceaguewiucw;
            euoymauomemecuao:
            goto cweguimoaweiumii;
            goto skgeuaegiqaqgyaq;
            skgeuaegiqaqgyaq:
            qkkiemwuuaaqqyas:
            goto qegkmgwymeckgwyg;
            agakiqgiuymqowkc:
            aagkoumomwwcaeka:
            goto eyooouiwwwumauao;
            wueqcceaguewiucw:
            if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                goto qkkiemwuuaaqqyas;
            }
            goto ayucyyiciocgyass;
            qeoumcqaaaecsace:
            cweguimoaweiumii:
            goto kykugggwwuqeokou;
            kykugggwwuqeokou:
            ymumcsswaocykmeo:
            goto agwuyeemwsccoagc;
            meiqsogowcogmgco:
            goto cweguimoaweiumii;
            goto agakiqgiuymqowkc;
            eyooouiwwwumauao:
            if (call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) {
                goto oegkcqakmussueqq;
            }
            goto aguwgcwgoukkkmio;
            aguwgcwgoukkkmio:
            goto yuqoyicsmawcauec;
            goto imyiqyuaoycegake;
            ayucyyiciocgyass:
            if ($ymyisaeksssueeik instanceof DOMElement) {
                goto aagkoumomwwcaeka;
            }
            goto euoymauomemecuao;
            imyiqyuaoycegake:
            oegkcqakmussueqq:
            goto qeoumcqaaaecsace;
            qegkmgwymeckgwyg:
            goto yuqoyicsmawcauec;
            goto meiqsogowcogmgco;
            agwuyeemwsccoagc:
        }
        goto icimmqwesqkmeuce;
        oogiaiuaumioummk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto omiqqwiemqykocci;
        yiayuooesmsmswia:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wyiciayqimeqqomu;
        wysuusuamkqeyqso:
        if (!$ksaameoqigiaoigg) {
            goto coakmyawmquywmos;
        }
        goto oogiaiuaumioummk;
        omiqqwiemqykocci:
        coakmyawmquywmos:
        goto cegkuogwgoiomikw;
        gkcycgsoawqoyesg:
        return $nsmgceoqaqogqmuw;
        goto qeauoqcaeymayusu;
        ggwakcmgwkcsasug:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto ygyoayucuigaoacw;
        }
        goto yiayuooesmsmswia;
        kwcsomkougiwgaco:
        cukksseqkekyucye:
        goto gkcycgsoawqoyesg;
        gwiykyqeeowisqqk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ggwakcmgwkcsasug;
        cegkuogwgoiomikw:
        ygyoayucuigaoacw:
        goto kwcsomkougiwgaco;
        ocueeioeueqmisuo:
        if (!$ekiuyucoiagmscgy) {
            goto cukksseqkekyucye;
        }
        goto gwiykyqeeowisqqk;
        qeauoqcaeymayusu:
    }
    
    public static function _getCrawler($nsmgceoqaqogqmuw)
    {
        goto egisiwqggoqcgeum;
        wcyauuwqsicgkomk:
        if ($nsmgceoqaqogqmuw && trim(preg_replace("\x2f\x5c\163\53\57", "\40", $nsmgceoqaqogqmuw))) {
            goto eioiqwykkuguaygs;
        }
        goto yomgkcycysceyagw;
        wuegeyoegwoqcumy:
        $kasgukgceywckyou = $nsmgceoqaqogqmuw;
        goto kkucqmyecgwmioei;
        agisoqkoyekmsyga:
        oqiciswgoamuceqq:
        goto wuegeyoegwoqcumy;
        uememeasawuoseqy:
        $kasgukgceywckyou = new Crawler(mb_convert_encoding($nsmgceoqaqogqmuw, "\x48\x54\x4d\x4c\x2d\105\116\124\111\x54\111\x45\123", "\x55\124\106\55\x38"));
        goto uiewawqqakquwmsq;
        uiewawqqakquwmsq:
        iwcmsykogssougge:
        goto ugksoyaaemqyoywa;
        kkucqmyecgwmioei:
        goto iwcmsykogssougge;
        goto wcwwkcwqkicykkmi;
        yomgkcycysceyagw:
        goto iwcmsykogssougge;
        goto agisoqkoyekmsyga;
        wcwwkcwqkicykkmi:
        eioiqwykkuguaygs:
        goto uememeasawuoseqy;
        egisiwqggoqcgeum:
        $kasgukgceywckyou = null;
        goto qymucyymugqaaoyi;
        ugksoyaaemqyoywa:
        return $kasgukgceywckyou;
        goto migcqoeeeukcyciu;
        qymucyymugqaaoyi:
        if ($nsmgceoqaqogqmuw instanceof Crawler) {
            goto oqiciswgoamuceqq;
        }
        goto wcyauuwqsicgkomk;
        migcqoeeeukcyciu:
    }
    
    public static function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc)
    {
        goto oukysgqmgiumaasc;
        umgcmywyqkwsmsku:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto scmgoisaawgacqyu;
            guwuqywoqwigamaw:
            $koaqiaecmascwuyy = self::_createElementFromHtml($kasgukgceywckyou, $ewgwqamkygiqaawc);
            goto iwcaywweqcgmemko;
            uwawwskgqkieusog:
            $omwmuycmeqcqokom->cgeyeoimiuyogose($koaqiaecmascwuyy);
            goto coiqsauaqkqykkus;
            iwcaywweqcgmemko:
            if (!$koaqiaecmascwuyy) {
                goto csguigwqeomsyyqw;
            }
            goto muwaaaqcuwaeoakw;
            scmgoisaawgacqyu:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto eqmmegqmukwekkkk;
            }
            goto guwuqywoqwigamaw;
            mimysauwikioomiy:
            eqmmegqmukwekkkk:
            goto ymessmmcgesuuyys;
            muwaaaqcuwaeoakw:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto uwawwskgqkieusog;
            coiqsauaqkqykkus:
            csguigwqeomsyyqw:
            goto mimysauwikioomiy;
            ymessmmcgesuuyys:
            egocwogikoqicuyo:
            goto ggmmkmasyqcugkkm;
            ggmmkmasyqcugkkm:
        }
        goto ocqmicyceamumeia;
        ocqmicyceamumeia:
        wimkgcmkgcaewcwy:
        goto soasesuoocikiquy;
        umgmgswkigyyweke:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto smikqieaosiykeii;
        }
        goto aiyeuqqmcksqsyeq;
        oukysgqmgiumaasc:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto umgmgswkigyyweke;
        okuuaqumeeamcgiw:
        return $nsmgceoqaqogqmuw;
        goto qquecwewqeeqyysw;
        soasesuoocikiquy:
        smikqieaosiykeii:
        goto okuuaqumeeamcgiw;
        aiyeuqqmcksqsyeq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto umgcmywyqkwsmsku;
        qquecwewqeeqyysw:
    }
    
    public static function umuecysoywoumgwo($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ceaewumsyymakaoc;
        euycuguygmweyiwm:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ykssqiacqucsmmac;
        sueokeomisikqomo:
        ewceaieowsgamkyi:
        goto mggckwqcieykwima;
        ceaewumsyymakaoc:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qqcoeqwimyugqwuc;
        mggckwqcieykwima:
        return false;
        goto gygmcmiciswgeswm;
        ykssqiacqucsmmac:
        return $kwmksuuciqkiymek->count() > 0;
        goto sueokeomisikqomo;
        qqcoeqwimyugqwuc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto ewceaieowsgamkyi;
        }
        goto euycuguygmweyiwm;
        gygmcmiciswgeswm:
    }
    
    public static function igyokgqyiouieioo(Crawler $kasgukgceywckyou)
    {
        $ymyisaeksssueeik = $kasgukgceywckyou->wugqmqwisygwoeas(0);
        return $ymyisaeksssueeik->ownerDocument;
    }
    
    public static function ygmcsmegcysyeoss($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto icqaoiyumasyygik;
        icoacuwgkgqykgee:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto equcgweimiaqsysk;
        eiaqawokkeocqqsk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto awmwcaycosymoesq;
        qoimoeswgougaeoa:
        cckmokqegquyoaoy:
        goto wsqkqmcuoauyescs;
        equcgweimiaqsysk:
        $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
        goto qoimoeswgougaeoa;
        awmwcaycosymoesq:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto cckmokqegquyoaoy;
        }
        goto icoacuwgkgqykgee;
        icqaoiyumasyygik:
        $gaeqamemwmwsyukm = 0;
        goto eiaqawokkeocqqsk;
        wsqkqmcuoauyescs:
        return $gaeqamemwmwsyukm;
        goto kmqagkiwcsuimayg;
        kmqagkiwcsuimayg:
    }
    
    private static function _removeNode(DOMNode $ymyisaeksssueeik)
    {
        $ymyisaeksssueeik->parentNode->uwqgywaceaaymckg($ymyisaeksssueeik);
    }
    
    public static function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto eugiyageaomiuoki;
        gumkwiqcaqusgwqm:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto kakskegscmoqcksc;
        syweoqsuaauksacw:
        uquqecagkoyomiiy:
        goto qeqagimacwmgmqiq;
        kakskegscmoqcksc:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto goiiekmeukcsamca;
            goiiekmeukcsamca:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto ugecckaqeasoimos;
            }
            goto gigkawsyquoowcms;
            gigkawsyquoowcms:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto uckiysiyuksyuaoa;
            ceyeeieiggoamgwe:
            $nsmgceoqaqogqmuw = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo();
            goto qwsqoioiwieqgeee;
            uckiysiyuksyuaoa:
            $omwmuycmeqcqokom->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom);
            goto ceyeeieiggoamgwe;
            qwsqoioiwieqgeee:
            goto uquqecagkoyomiiy;
            goto ammmoycqyaqeqiww;
            ammmoycqyaqeqiww:
            ugecckaqeasoimos:
            goto okwouciqeqeuogos;
            okwouciqeqeuogos:
            csgowsgmcyswmiec:
            goto qeimwiyggaoimmoq;
            qeimwiyggaoimmoq:
        }
        goto syweoqsuaauksacw;
        ekukcomgoyeiuici:
        return $nsmgceoqaqogqmuw;
        goto kqmgqywmgomwmokg;
        eugiyageaomiuoki:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mmmccuoeoeuskisk;
        mmmccuoeoeuskisk:
        if (!$kasgukgceywckyou) {
            goto ggcaqksgsoeecwak;
        }
        goto ikmqwkwwskokemqy;
        qeqagimacwmgmqiq:
        ggcaqksgsoeecwak:
        goto ekukcomgoyeiuici;
        ikmqwkwwskokemqy:
        $omwmuycmeqcqokom = null;
        goto gumkwiqcaqusgwqm;
        kqmgqywmgomwmokg:
    }
    
    private static function _getHtml($gykwsaeqegqowywy, $ggauoeuaesiymgee = '')
    {
        goto yyakcqyqkuuokgqw;
        ewouumyoyasgkgig:
        if (is_string($nsmgceoqaqogqmuw)) {
            goto qeaeawocamciyiyk;
        }
        goto sekgqycaaucagggo;
        woqoqsqomgswqicc:
        qeaeawocamciyiyk:
        goto iiyamiqswaymisue;
        iiyamiqswaymisue:
        return $nsmgceoqaqogqmuw;
        goto iqwqucswgosmiwyy;
        sekgqycaaucagggo:
        $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        goto woqoqsqomgswqicc;
        yyakcqyqkuuokgqw:
        try {
            goto oiymkikesysgoyma;
            wouesssgyqywasom:
            saqqooggaykweqce:
            goto uimeimmscccaqukm;
            mimseykuewemegow:
            goto wykieskeigmammue;
            goto sukokqcaoygeisos;
            iaewimwissuueacw:
            goto saqqooggaykweqce;
            goto qggomaqouiuasaum;
            uimeimmscccaqukm:
            goto wykieskeigmammue;
            goto escwyiwieqcweggy;
            iwaqiakswyiuyyao:
            throw new InvalidArgumentException();
            goto mimseykuewemegow;
            yoygkuwyqmgaqewi:
            if ($gykwsaeqegqowywy instanceof Crawler) {
                goto aiewsymeiqiakqqs;
            }
            goto ciwweeyeeieqgowe;
            okqoikkyquugiuia:
            $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw;
            goto wouesssgyqywasom;
            cwwguccuiymmeosu:
            goto wykieskeigmammue;
            goto kuywseoceqkawokq;
            mosmyseyaemqewwk:
            $kkkqocwqmaokqcmc = strpos(strtolower($ggauoeuaesiymgee), strtolower($ikoqkmiqkckowcgg)) !== false;
            goto yoygkuwyqmgaqewi;
            eoeuieksgoyqcgsu:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee);
            goto goekuagoayyskiio;
            ikiooiowwwwaygwi:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->skkueuquuqweeyqo();
            goto cwwguccuiymmeosu;
            suogukqqcuaecgmg:
            if (is_string($gykwsaeqegqowywy)) {
                goto gamiacsewcmmiece;
            }
            goto iwaqiakswyiuyyao;
            sukokqcaoygeisos:
            aiewsymeiqiakqqs:
            goto emkcaamgumgwwyem;
            iyocukugwkwoosqy:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy;
            goto kseweksyciigumec;
            ciwweeyeeieqgowe:
            if ($gykwsaeqegqowywy instanceof DOMDocument) {
                goto yiqweuusyaikwqgg;
            }
            goto suogukqqcuaecgmg;
            kuywseoceqkawokq:
            gamiacsewcmmiece:
            goto iyocukugwkwoosqy;
            qggomaqouiuasaum:
            yiomcwmuukooycqq:
            goto gcwimimmgaoueegm;
            oiymkikesysgoyma:
            $ikoqkmiqkckowcgg = "\74\x21\104\117\103\124\x59\120\105\x20\x68\x74\x6d\x6c\x3e";
            goto mosmyseyaemqewwk;
            escwyiwieqcweggy:
            yiqweuusyaikwqgg:
            goto ikiooiowwwwaygwi;
            kseweksyciigumec:
            wykieskeigmammue:
            goto keegiisaqayqmogu;
            emkcaamgumgwwyem:
            if ($kkkqocwqmaokqcmc) {
                goto yiomcwmuukooycqq;
            }
            goto eoeuieksgoyqcgsu;
            goekuagoayyskiio:
            $nsmgceoqaqogqmuw = preg_replace(["\x2f\x28\x3c\51\50\x68\x65\x61\144\x29\x28\133\x5e\x3e\135\52\77\x29\50\134\x2f\x3f\x5c\x73\x2a\76\51\174\74\x5c\x2f\x68\x65\141\144\76\57", "\57\50\x3c\x29\x28\142\x6f\144\x79\x29\50\133\x5e\76\135\52\x3f\51\50\134\x2f\x3f\134\x73\x2a\x3e\51\x7c\74\134\x2f\x62\157\144\x79\x3e\57", "\x2f\x28\x70\141\162\x65\x6e\x74\75\42\x29\50\x5b\141\55\x7a\x41\x2d\132\x30\x2d\x39\72\x3b\134\x2e\x5c\x73\134\50\x5c\51\x5c\x2d\134\54\x5d\52\x29\x28\x22\51\57"], '', $nsmgceoqaqogqmuw);
            goto iaewimwissuueacw;
            gcwimimmgaoueegm:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->yqwwccackoayicyy();
            goto okqoikkyquugiuia;
            keegiisaqayqmogu:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        }
        goto ewouumyoyasgkgig;
        iqwqucswgosmiwyy:
    }
    
    public static function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::UPDATE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto egcucgemmkamyiuu;
        scequiwqaummymka:
        $siquossayskcwkea = [];
        goto rgemwoeoywekwuww;
        egcucgemmkamyiuu:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto scequiwqaummymka;
        iqeqegeqgsmmaeay:
        sgwmqsowsekomcso:
        goto qoeoouiewgwuyayg;
        rgemwoeoywekwuww:
        if (!$kasgukgceywckyou) {
            goto sgwmqsowsekomcso;
        }
        goto cegaaikcsiwyswca;
        cegaaikcsiwyswca:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto qikaumyuwkusqmcy;
        qikaumyuwkusqmcy:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ckiswiiwkuugeogg;
            ckiswiiwkuugeogg:
            $siquossayskcwkea = self::wuuawmeqqyyyemsw($ymyisaeksssueeik);
            goto esmaiecuukakamog;
            ywuqguicqikeqiog:
            muqkgsmqakgwkaym:
            goto uoygcyuomiyquumm;
            keowaakoqimieymo:
            goto beowceiucukcwego;
            goto ywuqguicqikeqiog;
            uoygcyuomiyquumm:
            mymcocumieiauquq:
            goto uasacoumuyqgeuqy;
            esmaiecuukakamog:
            if (!$siquossayskcwkea) {
                goto muqkgsmqakgwkaym;
            }
            goto keowaakoqimieymo;
            uasacoumuyqgeuqy:
        }
        goto qcewkmiokmwaakyo;
        qcewkmiokmwaakyo:
        beowceiucukcwego:
        goto iqeqegeqgsmmaeay;
        qoeoouiewgwuyayg:
        return $siquossayskcwkea;
        goto iqwsgmwqeskwqckm;
        iqwsgmwqeskwqckm:
    }
    
    public static function wuuawmeqqyyyemsw($ymyisaeksssueeik)
    {
        goto wayaguckegemumuy;
        kkgkywswiimccaog:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto gkuukqkuaayagqwe;
        }
        goto awukmeygqcaeyaeg;
        cqcqsoqaumyuyemo:
        yqisiuioymswaciy:
        goto csoeiakqgmuockgk;
        csoeiakqgmuockgk:
        gkuukqkuaayagqwe:
        goto ewuciaosgqwwagsc;
        ewuciaosgqwwagsc:
        return $siquossayskcwkea;
        goto aqukigyaugymgocm;
        awukmeygqcaeyaeg:
        foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
            $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue;
            kwqqeiiqgiaoquag:
        }
        goto cqcqsoqaumyuyemo;
        wayaguckegemumuy:
        $siquossayskcwkea = [];
        goto kkgkywswiimccaog;
        aqukigyaugymgocm:
    }
    
    public static function wugqmqwisygwoeas($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto qokcmisciyieiwyi;
        qokcmisciyieiwyi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto smuuwogesuiogomg;
        ayucyiqeeeumawgo:
        return $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto equeyqisaekucoyq;
        smuuwogesuiogomg:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ayucyiqeeeumawgo;
        equeyqisaekucoyq:
    }
    
    public static function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto uqwmcimomeomgqgi;
        qmsikcqgaumiyego:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) {
            goto ymmgkaaokqasmaum;
            ymmgkaaokqasmaum:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto yscsaueouasieayc;
            smsgceqwueqiwmyi:
            cqkeucwwyywigyqk:
            goto ywoisggyqsommewa;
            yscsaueouasieayc:
            foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) {
                goto gcqqqceoakukiuim;
                mosmyyysosawmqku:
                yiqwwseykuimmeuc:
                goto kcsqyquoyoyssiik;
                owuommygccmkuues:
                ygcocguewqswqcsa:
                goto qgyeaeoyqscmuqqy;
                qgyeaeoyqscmuqqy:
                $uumwowmewaqyggce->parentNode->caqmeawgoiceoymu($uuswugicgoqcyiiy, $uumwowmewaqyggce);
                goto cwaukuukmsqkqqoc;
                akiuccuwusyiywaa:
                foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) {
                    $uuswugicgoqcyiiy->cgeyeoimiuyogose($uumwowmewaqyggce->ownerDocument->gqskweuukuceuaoq($wcgsoqmmciswkmiq, true));
                    ecmowkisqwcgyykc:
                }
                goto sqowskoquogmiiwg;
                cwaukuukmsqkqqoc:
                jiykeiuymeoowsma:
                goto mosmyyysosawmqku;
                mokaauiekiycqsii:
                foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) {
                    $okcscwesammossuq[] = $wcgsoqmmciswkmiq;
                    cyiwuweakowgmamu:
                }
                goto akyieugiomeuaqsk;
                sqowskoquogmiiwg:
                isuyseouiawyweke:
                goto wcqkwcqqqsygagsg;
                kgmmesqykuckqgqg:
                $okcscwesammossuq = [];
                goto mokaauiekiycqsii;
                gcqqqceoakukiuim:
                if (!$uumwowmewaqyggce instanceof DOMNode) {
                    goto jiykeiuymeoowsma;
                }
                goto kgmmesqykuckqgqg;
                wcqkwcqqqsygagsg:
                foreach ($uumwowmewaqyggce->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto aowacowggwuykewe;
                    aowacowggwuykewe:
                    $qmgyyqwkskaiwcqg = $sicussmmuqmeqygw->nodeName;
                    goto cgcyciqqcqiimwse;
                    csymkqmseeouiacg:
                    $uuswugicgoqcyiiy->cmgoqeksagmigwmg($qmgyyqwkskaiwcqg, $giueyucwwwwiooim);
                    goto qykaososcekymqeo;
                    qykaososcekymqeo:
                    musoessicqgioaci:
                    goto iqewyeqegsuemqgc;
                    cgcyciqqcqiimwse:
                    $giueyucwwwwiooim = $sicussmmuqmeqygw->nodeValue;
                    goto csymkqmseeouiacg;
                    iqewyeqegsuemqgc:
                }
                goto owuommygccmkuues;
                akyieugiomeuaqsk:
                meiiqwkkeguigquc:
                goto yukykeccsygagcsm;
                yukykeccsygagcsm:
                $uuswugicgoqcyiiy = $uumwowmewaqyggce->ownerDocument->auokmyiaciikcekk($ymqmyyeuycgmigyo);
                goto akiuccuwusyiywaa;
                kcsqyquoyoyssiik:
            }
            goto smsgceqwueqiwmyi;
            ywoisggyqsommewa:
            wwcwmiwqwiygmyka:
            goto kkewwsgkgooicawy;
            kkewwsgkgooicawy:
        }
        goto cckseausycyccake;
        migkmccwwikseoos:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto mquaoucacecoymqu;
        eesgqauaaeqiycee:
        if (!$kasgukgceywckyou) {
            goto wikugsiimiguuwuw;
        }
        goto qmsikcqgaumiyego;
        uqwmcimomeomgqgi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto eesgqauaaeqiycee;
        mquaoucacecoymqu:
        wikugsiimiguuwuw:
        goto oucwkycugsesqoas;
        cckseausycyccake:
        wymogskocqsmiimw:
        goto migkmccwwikseoos;
        oucwkycugsesqoas:
        return $nsmgceoqaqogqmuw;
        goto wcqggkigoogqmmqk;
        wcqggkigoogqmmqk:
    }
    
    public static function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto imcqqemiwqqegsmk;
        eqiesmsygmemseog:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) {
            self::_removeElement($kasgukgceywckyou, $yuumukkaswwoywya);
            wmcsksugskiskyyy:
        }
        goto kaooossoiysywsuk;
        imcqqemiwqqegsmk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mcygayiqasgoyqss;
        dsqeweimquoouiyo:
        self::_removeElement($kasgukgceywckyou, $sgksuwkwyimqgaii);
        goto gmmwukkcaouckswu;
        qmuqcuumuagkyggg:
        yeqgqmywegcwsiow:
        goto eqiesmsygmemseog;
        siwscqyokoekmooc:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ggqwikwoioeuqsam;
        kaooossoiysywsuk:
        cceewgewommawcii:
        goto sqqqwsqwmossuima;
        gmmwukkcaouckswu:
        goto uaaigcisokikuqgu;
        goto qmuqcuumuagkyggg;
        ggqwikwoioeuqsam:
        cuqcgywmuqoakieq:
        goto kyiikasuaqaeigae;
        kyiikasuaqaeigae:
        return $nsmgceoqaqogqmuw;
        goto ocgiuagqmmqakago;
        mcygayiqasgoyqss:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto cuqcgywmuqoakieq;
        }
        goto iycosyeceoegukgg;
        sqqqwsqwmossuima:
        uaaigcisokikuqgu:
        goto siwscqyokoekmooc;
        iycosyeceoegukgg:
        if (is_array($sgksuwkwyimqgaii)) {
            goto yeqgqmywegcwsiow;
        }
        goto dsqeweimquoouiyo;
        ocgiuagqmmqakago:
    }
    
    public static function maakiyaweemewuao($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::RENAME_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function ogaeogwycyqqckeu($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REMOVE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function mqyacwaaocgcsyag($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto mukeowkkueukysww;
        cicooguqkeoeyges:
        return $nsmgceoqaqogqmuw;
        goto gwuisuuwecwcaaik;
        yceeiagmcyqcayes:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto wqemgeeosmaqkuye;
            xawawcwogwekqmqc:
            cqwmseemsiiaqgoo:
            goto yumegkesogwyweiq;
            haiiaygcugigaggi:
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                goto agkwamguicmweoom;
                auqwmowcyqaioyse:
                foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto teuusocwmquakkyc;
                    pouyossuowuwcsma:
                    gsegcywyaasmwyko:
                    goto msiuouqukawgegwo;
                    ykemkuywkaowmyuc:
                    if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak)) {
                        goto meeiyyaqksugkeai;
                    }
                    goto skmkmwkyeuowoaqa;
                    teuusocwmquakkyc:
                    $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName;
                    goto ykemkuywkaowmyuc;
                    skmkmwkyeuowoaqa:
                    $ymyisaeksssueeik->cmgoqeksagmigwmg($siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue);
                    goto cyuwoeiiwcsqukku;
                    cyuwoeiiwcsqukku:
                    meeiyyaqksugkeai:
                    goto pouyossuowuwcsma;
                    msiuouqukawgegwo:
                }
                goto caqmiuioaesgyaug;
                agkwamguicmweoom:
                if (!$ymyisaeksssueeik instanceof DOMNode) {
                    goto kgaciayyiuykqyko;
                }
                goto wymyuyaiikioyeao;
                caqmiuioaesgyaug:
                ceomusueeoaqyume:
                goto okeqecawkekacsqc;
                smqsooyiiesuyoos:
                kaccyaysqwkaoyka:
                goto mgkokmqyecocwwgo;
                okeqecawkekacsqc:
                kgaciayyiuykqyko:
                goto smqsooyiiesuyoos;
                wymyuyaiikioyeao:
                $msqkueqksqwmskak = array_keys($siquossayskcwkea);
                goto auqwmowcyqaioyse;
                mgkokmqyecocwwgo:
            }
            goto eeyoaucukkaesqmk;
            eeyoaucukkaesqmk:
            yeewwwkywuowoscq:
            goto xawawcwogwekqmqc;
            wqemgeeosmaqkuye:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto haiiaygcugigaggi;
            yumegkesogwyweiq:
        }
        goto uyeimkwsuoqgewgy;
        asysseskuwwesiqc:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ymkakuuweqoysagc;
        mukeowkkueukysww:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto iyemcyamksqakiiw;
        uyeimkwsuoqgewgy:
        aocyeyuakyusikwq:
        goto asysseskuwwesiqc;
        iyemcyamksqakiiw:
        if (!$kasgukgceywckyou) {
            goto coscuikaoymwwmii;
        }
        goto yceeiagmcyqcayes;
        ymkakuuweqoysagc:
        coscuikaoymwwmii:
        goto cicooguqkeoeyges;
        gwuisuuwecwcaaik:
    }
    
    public static function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _find(?Crawler $kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto ikiyguwaiacioake;
        qqaoqesyysccooug:
        ugmqiuwksqaqywco:
        goto cemammoacacweske;
        cemammoacacweske:
        return $kasgukgceywckyou;
        goto aokkmsyimyouoeim;
        ikiyguwaiacioake:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto ugmqiuwksqaqywco;
        }
        goto comcmyekisewieyc;
        comcmyekisewieyc:
        return $kasgukgceywckyou->filter($yuumukkaswwoywya);
        goto qqaoqesyysccooug;
        aokkmsyimyouoeim:
    }
    
    private static function _removeElement($kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto ugogcmgasecqmaqo;
        mmyqweeceiaeqqus:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            self::_removeNode($ymyisaeksssueeik);
            kusuckgswgkceusi:
        }
        goto cmiqweaugcqmwoiq;
        cmiqweaugcqmwoiq:
        memocaoaimgeuimm:
        goto ugcgmougmeoayiea;
        ugogcmgasecqmaqo:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto mmyqweeceiaeqqus;
        ugcgmougmeoayiea:
    }
    
    public static function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee)
    {
        goto gccikccauwosemee;
        cowscsiukyiwymqi:
        $eqgoocgaqwqcimie = '';
        goto emsquuamiesiqseq;
        ymgkgeqimsusocoy:
        gisygciesowawkqy:
        goto qeywecigqgseiogw;
        siyawoacgucmaoky:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uuawmiyqysumgaqy;
            uuawmiyqysumgaqy:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto ywkkyykyayusymai;
            }
            goto uyusyuseakqmycim;
            misgeimskqgmumga:
            ywkkyykyayusymai:
            goto iqeksucuwucgsuaq;
            iqeksucuwucgsuaq:
            yayuqeqkcqmiiiyw:
            goto kagiaysuecmceegy;
            qoaiwgymwioiissy:
            goto agaaausyuimymgmm;
            goto qqqyksacwuumcmia;
            qqqyksacwuumcmia:
            kaqeqoaoqacmssmg:
            goto misgeimskqgmumga;
            uyusyuseakqmycim:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee);
            goto sccqusyuqeiugcem;
            sccqusyuqeiugcem:
            if (!$eqgoocgaqwqcimie) {
                goto kaqeqoaoqacmssmg;
            }
            goto qoaiwgymwioiissy;
            kagiaysuecmceegy:
        }
        goto ykuiuuqwkwwgeqko;
        ykuiuuqwkwwgeqko:
        agaaausyuimymgmm:
        goto ymgkgeqimsusocoy;
        qeywecigqgseiogw:
        return $eqgoocgaqwqcimie;
        goto ucwkqqscieaqmkms;
        gccikccauwosemee:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto cowscsiukyiwymqi;
        emsquuamiesiqseq:
        if (!$kasgukgceywckyou) {
            goto gisygciesowawkqy;
        }
        goto wgocyuiekyasmquq;
        wgocyuiekyasmquq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto siyawoacgucmaoky;
        ucwkqqscieaqmkms:
    }
    
    public static function goqgkgckyagueiso($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_WITH_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _createElement(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw)
    {
        goto kywicmoksqkayose;
        imoyquwyuicwioom:
        foreach ($qeaoumiemyikogys->auamuceiowkuacoq("\x62\157\x64\171")->item(0)->childNodes as $ymyisaeksssueeik) {
            $omwmuycmeqcqokom->cgeyeoimiuyogose($omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true));
            kuwieemysouaokqs:
        }
        goto yauausaeuasqsgeu;
        kywicmoksqkayose:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto imoyquwyuicwioom;
        yauausaeuasqsgeu:
        uuooemyeyeuswqea:
        goto wiyauoggygqoymwu;
        wiyauoggygqoymwu:
    }
    
    private static function _createElementFromHtml(Crawler $kasgukgceywckyou, $nsmgceoqaqogqmuw)
    {
        goto aeawksowymsuogeu;
        wgyakmueooeqsyqc:
        $kgcekiucekagcgai = self::igyokgqyiouieioo($kasgukgceywckyou);
        goto wgyukgmocmigoeuo;
        aeawksowymsuogeu:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto wgyakmueooeqsyqc;
        wgyukgmocmigoeuo:
        return $kgcekiucekagcgai->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
        goto yagiokukkmimaoae;
        yagiokukkmimaoae:
    }
    
    public static function ksgyqykcguougeue(DOMNode $ymyisaeksssueeik, $nsmgceoqaqogqmuw)
    {
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        return $ymyisaeksssueeik->ownerDocument->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
    }
    
    private static function _appendHTML($omwmuycmeqcqokom, $nsmgceoqaqogqmuw, $qmeuaeiseuacgiqc = true)
    {
        goto ssecwqeouoeamsio;
        ooiockqsscsuqokc:
        foreach (self::_find($kasgukgceywckyou, "\142\157\144\171") as $ymyisaeksssueeik) {
            goto kcaswmekegcguiwu;
            kcaswmekegcguiwu:
            $ymyisaeksssueeik = $omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true);
            goto yceyawgskeqggcuy;
            yceyawgskeqggcuy:
            self::_appendHTML($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc);
            goto msweyewumoisksiy;
            msweyewumoisksiy:
            oaosaqoqiiciwgwg:
            goto uyqckmcowkimsmyq;
            uyqckmcowkimsmyq:
        }
        goto acsgyykcowwkyayy;
        coqewawckmigciso:
        if ($qmeuaeiseuacgiqc) {
            goto meomioiwwciyyyue;
        }
        goto kwaammsskmiamace;
        wuwggkokqumggyiu:
        goto ysoesyqiaaugywgi;
        goto ugmowoyeoowiiqie;
        acsgyykcowwkyayy:
        qiomiuawymsqimgk:
        goto wuwggkokqumggyiu;
        kmkmisyucykygqoc:
        ysoesyqiaaugywgi:
        goto wccegsoaeisquyeq;
        ssecwqeouoeamsio:
        if (!$omwmuycmeqcqokom instanceof DOMNode) {
            goto qmymeeegusssawmu;
        }
        goto uucwuqeucsiykagi;
        kecqwqseaiaomoao:
        $omwmuycmeqcqokom->cgeyeoimiuyogose($nsmgceoqaqogqmuw);
        goto gmgkmqouwygkwuua;
        gmgkmqouwygkwuua:
        euguuygaocimsesi:
        goto kmkmisyucykygqoc;
        uucwuqeucsiykagi:
        if ($nsmgceoqaqogqmuw instanceof DOMNode) {
            goto myyycckqeikqiuqi;
        }
        goto ueowcqqgaoysmqie;
        ugmowoyeoowiiqie:
        myyycckqeikqiuqi:
        goto coqewawckmigciso;
        wccegsoaeisquyeq:
        qmymeeegusssawmu:
        goto ieyowiusaeousyse;
        kwaammsskmiamace:
        $omwmuycmeqcqokom->kqgwgkuykuumwcgw($nsmgceoqaqogqmuw, $omwmuycmeqcqokom->firstChild);
        goto amacugyqcmgqiaog;
        amacugyqcmgqiaog:
        goto euguuygaocimsesi;
        goto ccssuekkawuwwkyk;
        ueowcqqgaoysmqie:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ooiockqsscsuqokc;
        ccssuekkawuwwkyk:
        meomioiwwciyyyue:
        goto kecqwqseaiaomoao;
        ieyowiusaeousyse:
    }
    
    public static function wesimowqwekiqiow($nsmgceoqaqogqmuw, $eeqsmkqmsowmicwi = "\163\164\171\x6c\x65", $cussukyecoaeayqk = true)
    {
        goto wumeiwysoiscimiu;
        kqawgskqiimioaku:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, "\x5b\x73\x74\x79\x6c\145\x5d");
        goto yyukimsicowasyqs;
        eequmkcwsuakwwmo:
        if (!$kasgukgceywckyou) {
            goto cycoyeooqscgugwa;
        }
        goto mcqkmiukmosqwemy;
        mcqkmiukmosqwemy:
        $kswaimykcacqyaay = self::_find($kasgukgceywckyou, "\150\x65\141\144\40\x3e\40{$eeqsmkqmsowmicwi}")->wugqmqwisygwoeas(0);
        goto ksccwuecqkqkawck;
        guwmecmmcueokcgu:
        ooueyocsuseuawgc:
        goto kqawgskqiimioaku;
        myusuecogkwoqimq:
        eoskieimkcimmwio:
        goto uqsmsqoeimicguwe;
        eaasaucuyacqooey:
        mwimaeocgaqeiukm:
        goto uoqwymoegwoweuyk;
        mkaoooyookegwgwg:
        $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc;
        goto eaasaucuyacqooey;
        suqosyewmcawwouy:
        $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent;
        goto guwmecmmcueokcgu;
        ksccwuecqkqkawck:
        $ewgwqamkygiqaawc = '';
        goto eeeaumqcsieckaoc;
        kkeakokiekuywmwy:
        goto mwimaeocgaqeiukm;
        goto gmcsqgoweawewags;
        caaqcciyeymoqqmc:
        self::pmouaioykaoceyag($kasgukgceywckyou, "\x68\x65\141\x64", $ewgwqamkygiqaawc);
        goto kkeakokiekuywmwy;
        uoqwymoegwoweuyk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto mawsiqmcsguuokok;
        yyukimsicowasyqs:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto yoeiuoyekameacwu;
            qsiqckciwyomqwue:
            $ymyisaeksssueeik->cmgoqeksagmigwmg("\x63\x6c\141\x73\x73", $egkyssmuqcwaciya);
            goto gqmgeusocymaikoy;
            oiksiqocuawwgeek:
            $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc;
            goto skqyeawoqyssamii;
            gkcsgskucsicakwg:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($yuumukkaswwoywya);
            goto swiaoqqqyqusscqi;
            gqmgeusocymaikoy:
            mksggqikmumuycga:
            goto iigwwyogmwesyoau;
            gsquqssmimkgcoga:
            if (!$eqgoocgaqwqcimie) {
                goto mksggqikmumuycga;
            }
            goto gkcsgskucsicakwg;
            maugkumeqqaoqmkq:
            emkuqqeesmiycqqo:
            goto qauqcecycoswuoyc;
            asoycqscmioaaggw:
            $eqgoocgaqwqcimie = str_replace("\41\151\155\x70\x6f\x72\164\141\156\x74", '', $eqgoocgaqwqcimie);
            goto oyquokessoouwuke;
            aaccwuemygqmicme:
            $egkyssmuqcwaciya .= "\x20{$omasqoksqewuwwkq}";
            goto qsiqckciwyomqwue;
            mgykueyyyoueykgm:
            $acqqmqmcquukaqsc = "\x2e{$omasqoksqewuwwkq}\173{$eqgoocgaqwqcimie}\175";
            goto oiksiqocuawwgeek;
            iigwwyogmwesyoau:
            ugaoeiuoosyggsmi:
            goto maugkumeqqaoqmkq;
            oyquokessoouwuke:
            ewyukeoyymaooaqa:
            goto mgykueyyyoueykgm;
            wwmggkkyegumakew:
            $yuumukkaswwoywya = "\x73\164\171\x6c\x65";
            goto cquumoyicacciqei;
            cquumoyicacciqei:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($yuumukkaswwoywya);
            goto gsquqssmimkgcoga;
            swiaoqqqyqusscqi:
            $omasqoksqewuwwkq = ManipulateString::uniqid(5);
            goto ioqkkgikqygkemce;
            yoeiuoyekameacwu:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto ugaoeiuoosyggsmi;
            }
            goto wwmggkkyegumakew;
            ioqkkgikqygkemce:
            if ($cussukyecoaeayqk) {
                goto ewyukeoyymaooaqa;
            }
            goto asoycqscmioaaggw;
            skqyeawoqyssamii:
            $egkyssmuqcwaciya = $ymyisaeksssueeik->waecsyqmwascmqoa("\143\x6c\x61\163\163");
            goto aaccwuemygqmicme;
            qauqcecycoswuoyc:
        }
        goto myusuecogkwoqimq;
        gmcsqgoweawewags:
        mcmmgacykcsowqiw:
        goto mkaoooyookegwgwg;
        eeeaumqcsieckaoc:
        if (!$kswaimykcacqyaay instanceof DOMNode) {
            goto ooueyocsuseuawgc;
        }
        goto suqosyewmcawwouy;
        wumeiwysoiscimiu:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto eequmkcwsuakwwmo;
        uqsmsqoeimicguwe:
        if ($kswaimykcacqyaay instanceof DOMElement) {
            goto mcmmgacykcsowqiw;
        }
        goto caaqcciyeymoqqmc;
        mawsiqmcsguuokok:
        cycoyeooqscgugwa:
        goto kisaoauaekgkauui;
        kisaoauaekgkauui:
        return $nsmgceoqaqogqmuw;
        goto gckckwqqgkoyyagq;
        gckckwqqgkoyyagq:
    }
    
    public static function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, $egomoiciasmiesww = false)
    {
        goto ccwaiwmcccmswyau;
        fommkikuoyaeskiw:
        mickmqggcqwackce:
        goto ouecgmgoaaswqomi;
        qoiqosqiguawwekg:
        if (!$kasgukgceywckyou) {
            goto esokuuqukgaiiuao;
        }
        goto xiwcqyowugqukksy;
        xiwcqyowugqukksy:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $yuumukkaswwoywya)->wugqmqwisygwoeas(0);
        goto sociuiuiwsymiyam;
        ycaysuaiikcskakg:
        return $nsmgceoqaqogqmuw;
        goto emguyukcyeeuyqyo;
        oyoeowyeooyowomm:
        esokuuqukgaiiuao:
        goto ycaysuaiikcskakg;
        gyyawusuyeigckys:
        if ($egomoiciasmiesww) {
            goto mickmqggcqwackce;
        }
        goto iimeieccwuumkgim;
        ouecgmgoaaswqomi:
        $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc;
        goto okkimkuusqsiemkk;
        iimeieccwuumkgim:
        $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc;
        goto fommkikuoyaeskiw;
        okkimkuusqsiemkk:
        egcyaksemqaakqgy:
        goto eesgmkwwiawcskie;
        eesgmkwwiawcskie:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto oyoeowyeooyowomm;
        ccwaiwmcccmswyau:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qoiqosqiguawwekg;
        sociuiuiwsymiyam:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto egcyaksemqaakqgy;
        }
        goto gyyawusuyeigckys;
        emguyukcyeeuyqyo:
    }
    
    public static function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc = true)
    {
        goto kwwwckywsygiwcoc;
        kqakgccawoogkiai:
        self::_appendHTML($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc);
        goto eoawcoaayikaiocu;
        oigoswgkgwescakq:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $omwmuycmeqcqokom)->wugqmqwisygwoeas(0);
        goto oiakqemessasuyci;
        gwswuqomwckekgum:
        mokoeuoicweqwksk:
        goto aqmemoyecceeceuc;
        secswciggsguqauw:
        if (!$kasgukgceywckyou) {
            goto mokoeuoicweqwksk;
        }
        goto oigoswgkgwescakq;
        aqmemoyecceeceuc:
        return $nsmgceoqaqogqmuw;
        goto ammsmyuaoogueqog;
        eoawcoaayikaiocu:
        wiyoqoiqsmwuiywa:
        goto aucuikgwyisgguye;
        kwwwckywsygiwcoc:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto secswciggsguqauw;
        aucuikgwyisgguye:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto gwswuqomwckekgum;
        oiakqemessasuyci:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto wiyoqoiqsmwuiywa;
        }
        goto kqakgccawoogkiai;
        ammsmyuaoogueqog:
    }
    
    public static function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto qsuqueusmkasmeig;
        kowocmqmoqwacmoa:
        if ($ewgwqamkygiqaawc) {
            goto aykiaquyoagykguu;
        }
        goto jggaoyqecgewsysy;
        qsuqueusmkasmeig:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto cymoaqswaeycikca;
        ikwagqguqmqsakug:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent;
        goto cqyommqsimyoioeo;
        awccsuqeikuacioa:
        $ymyisaeksssueeik = $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto gyyiagqqegiygkag;
        gyqaqyuewuquqkuy:
        if (!$kasgukgceywckyou) {
            goto muceomkycemgsccu;
        }
        goto uqmscgsoqeysooqc;
        acisamqweoscawig:
        goto ciiikyqwkwsceouq;
        goto kkoswgsscqsgqmey;
        awgmmoegiwqoswkk:
        if (!$kwmksuuciqkiymek) {
            goto mykqimauysqiessi;
        }
        goto awccsuqeikuacioa;
        jggaoyqecgewsysy:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
        goto acisamqweoscawig;
        uqmscgsoqeysooqc:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto awgmmoegiwqoswkk;
        eoggqsukkackwoag:
        return $aqykuigiuwmmcieu;
        goto cseiiqikiimgcmmy;
        gyyiagqqegiygkag:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto gmqoaasouciogwkq;
        }
        goto kowocmqmoqwacmoa;
        cqyommqsimyoioeo:
        ciiikyqwkwsceouq:
        goto kiieueeyieewgcuu;
        ywmukuyioksqgimq:
        mykqimauysqiessi:
        goto cqiagomawawqmcoo;
        cqiagomawawqmcoo:
        muceomkycemgsccu:
        goto eoggqsukkackwoag;
        kkoswgsscqsgqmey:
        aykiaquyoagykguu:
        goto ikwagqguqmqsakug;
        kiieueeyieewgcuu:
        gmqoaasouciogwkq:
        goto ywmukuyioksqgimq;
        cymoaqswaeycikca:
        $aqykuigiuwmmcieu = '';
        goto gyqaqyuewuquqkuy;
        cseiiqikiimgcmmy:
    }
    
    public static function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto wgawmiiocosqkgos;
        wgawmiiocosqkgos:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gekaiqysouaoyaci;
        gekaiqysouaoyaci:
        $sogksuscggsicmac = [];
        goto umeomugcsyuukqsu;
        cywmacoauegeacwk:
        swqucgmugmekaoqc:
        goto kgamqamcoaaqmgeg;
        mameecqeeiakmiks:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto qqmskoaugmqsaaqy;
            isicqmmaqumssuka:
            ekesimcsecgcuoms:
            goto msggcgusisiqukme;
            scogoqgeeoeqsuku:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->textContent;
            goto mskguuoycuamgyim;
            qqiqiaqoiesmuokq:
            goto iiumqmaicymgouwy;
            goto woekwasoyuwmqgao;
            woekwasoyuwmqgao:
            kaeomaoaieammmca:
            goto scogoqgeeoeqsuku;
            msggcgusisiqukme:
            ywiwagqgeomcwkss:
            goto sskkmcmqeimgeuwg;
            mskguuoycuamgyim:
            iiumqmaicymgouwy:
            goto aqasuykawsiekssw;
            wcsimwcyyumkyuck:
            if ($ewgwqamkygiqaawc) {
                goto kaeomaoaieammmca;
            }
            goto yoggmucmsyeaseso;
            aqasuykawsiekssw:
            $sogksuscggsicmac[] = $aqykuigiuwmmcieu;
            goto isicqmmaqumssuka;
            gsisioycuuewgmmw:
            self::_removeNode($ymyisaeksssueeik);
            goto wcsimwcyyumkyuck;
            yoggmucmsyeaseso:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto qqiqiaqoiesmuokq;
            qqmskoaugmqsaaqy:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto ekesimcsecgcuoms;
            }
            goto gsisioycuuewgmmw;
            sskkmcmqeimgeuwg:
        }
        goto cywmacoauegeacwk;
        ecwcasmmiooagwaq:
        return $sogksuscggsicmac;
        goto ukmuimokewiqqmsy;
        swyakyokwmomoqow:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto mameecqeeiakmiks;
        umeomugcsyuukqsu:
        if (!$kasgukgceywckyou) {
            goto euguykkkieguasgy;
        }
        goto swyakyokwmomoqow;
        kgamqamcoaaqmgeg:
        euguykkkieguasgy:
        goto ecwcasmmiooagwaq;
        ukmuimokewiqqmsy:
    }
    
    public static function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, $ymkomoccmymcoiea = "\163\x74\x79\x6c\145", $wamcomkuwysqgwgk = "\45\163\73")
    {
        goto ukqewcigokikemua;
        wqkqggsaacukeimg:
        iqeeygqsccygwqas:
        goto eqycmciquqaesuyk;
        ukqewcigokikemua:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto yooqmugaioweswcs;
        yskiummkweosoacm:
        return $nsmgceoqaqogqmuw;
        goto aakgkaqakoqgcsci;
        eqycmciquqaesuyk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto geycsscsmmgaiioe;
        iekuaksaiccyckaw:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wokoyuoomwmgwaoo;
        geycsscsmmgaiioe:
        ikcokaseywaaekgo:
        goto yskiummkweosoacm;
        yooqmugaioweswcs:
        if (!$kasgukgceywckyou) {
            goto ikcokaseywaaekgo;
        }
        goto iekuaksaiccyckaw;
        wokoyuoomwmgwaoo:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto okwyiswgsyymgius;
            makegskyquimcacu:
            aoqcimcikseuucoy:
            goto ggayissweeisyaqa;
            cymysimiiemeqcmu:
            if (!($ymkomoccmymcoiea == "\x73\x74\x79\x6c\x65")) {
                goto gcsacemoyykguega;
            }
            goto qaemeaiiueckkouq;
            suigamecaieiiuka:
            $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie);
            goto cwkeqwwaageaiecm;
            eygucgqouoacesei:
            $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\40{$eqgoocgaqwqcimie}"));
            goto csaqukkmgesgewkg;
            ekksaoygcqikaque:
            if (!$eqgoocgaqwqcimie) {
                goto muoiuweiesyukmgu;
            }
            goto qkmswkmokigugkaw;
            cgwiwgeekamooamc:
            gcsacemoyykguega:
            goto eygucgqouoacesei;
            okwyiswgsyymgius:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto aoqcimcikseuucoy;
            }
            goto wakqmmwcieuuiygm;
            qaemeaiiueckkouq:
            $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\x3b") . "\73";
            goto cgwiwgeekamooamc;
            ggayissweeisyaqa:
            cyugiqiiaekakuec:
            goto eaqqweigimyoywwu;
            ywwcwwqawggauaso:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($ccamueccusigaaio);
            goto ekksaoygcqikaque;
            iykugimymaauokkm:
            if (!$wamcomkuwysqgwgk) {
                goto acqwiccgsscgikyo;
            }
            goto suigamecaieiiuka;
            cwkeqwwaageaiecm:
            acqwiccgsscgikyo:
            goto cymysimiiemeqcmu;
            wakqmmwcieuuiygm:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($ccamueccusigaaio);
            goto ywwcwwqawggauaso;
            csaqukkmgesgewkg:
            muoiuweiesyukmgu:
            goto makegskyquimcacu;
            qkmswkmokigugkaw:
            $yeacayasgueouoqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
            goto iykugimymaauokkm;
            eaqqweigimyoywwu:
        }
        goto wqkqggsaacukeimg;
        aakgkaqakoqgcsci:
    }
    
    public static function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', $uuksaskqamgouosy = true)
    {
        goto iywkomquqqosokyq;
        wymkemmkwawacmys:
        return $nsmgceoqaqogqmuw;
        goto gcmiguwuukeawaii;
        weqgaswqweauwwyc:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ieqqyaeksqicikwe;
            qaugewusyagkoksg:
            $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo;
            goto cocouuwqwiaiyemu;
            cocouuwqwiaiyemu:
            goto qaciuiaecgowsukq;
            goto msukmuseccwicmwg;
            cqwsaoiqmiewkigq:
            if ($uuksaskqamgouosy) {
                goto qogiwqwqsaesiskg;
            }
            goto qaugewusyagkoksg;
            msukmuseccwicmwg:
            qogiwqwqsaesiskg:
            goto quyaggaoeakmcqmo;
            quyaggaoeakmcqmo:
            $ymyisaeksssueeik->nodeValue = '';
            goto owkqqqyysqyaykow;
            owkqqqyysqyaykow:
            if (!$goiaaeekgeqqmaqo) {
                goto wymeuweieiomiuqw;
            }
            goto makmsuccimeksawa;
            ieqqyaeksqicikwe:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto uqmsuuwuuqcaqasy;
            }
            goto cqwsaoiqmiewkigq;
            yggsmyqseogscusc:
            wymeuweieiomiuqw:
            goto eaucsgyigimwwuqg;
            qkiiwqyuiuqwqosc:
            uqmsuuwuuqcaqasy:
            goto kgmumymgeqemogoy;
            makmsuccimeksawa:
            self::_createElement($ymyisaeksssueeik, $goiaaeekgeqqmaqo);
            goto yggsmyqseogscusc;
            eaucsgyigimwwuqg:
            qaciuiaecgowsukq:
            goto qkiiwqyuiuqwqosc;
            kgmumymgeqemogoy:
            yyiemgyowokesgww:
            goto gcseqcagkcsmgokw;
            gcseqcagkcsmgokw:
        }
        goto ecayeacokkmyckmk;
        yakwwcwqaokocwcy:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ssgiyqwsgyyogmqm;
        ssgiyqwsgyyogmqm:
        gcymuqcsmwiywkum:
        goto wymkemmkwawacmys;
        gumuwayiukgmeusw:
        if (!$kasgukgceywckyou) {
            goto gcymuqcsmwiywkum;
        }
        goto wiikemmmqckmwcma;
        iywkomquqqosokyq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gumuwayiukgmeusw;
        wiikemmmqckmwcma:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto weqgaswqweauwwyc;
        ecayeacokkmyckmk:
        uuiuemckcuckewow:
        goto yakwwcwqaokocwcy;
        gcmiguwuukeawaii:
    }
    
    private static function _updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = self::UPDATE_ACTION)
    {
        goto owaccsusoeoacmwc;
        owaccsusoeoacmwc:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ycwwyeycsiquwiyq;
        ycwwyeycsiquwiyq:
        if (!$kasgukgceywckyou) {
            goto ywwqgsuuquocmqgk;
        }
        goto ewmcqauqqeywoqcs;
        uyieackqwooqcqos:
        return $kasgukgceywckyou;
        goto suumgeqekqgggugc;
        ewmcqauqqeywoqcs:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto gqemygsogaaasyes;
            akiymyugggumyuic:
            emsewgkwsmcgkoyy:
            goto qoeaosoumsicoqms;
            yicumoqkcoycyoyu:
            foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) {
                goto ugakmuywaoowqymc;
                soyyokqommwwoyoy:
                $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
                goto ioomkicqkmoooiew;
                cqcaimmsooakqmae:
                cceykcumeqigcqkg:
                goto iykceckkokwcsgoi;
                asuwukmiyuqqgqiy:
                gkmiesukccsqmcqy:
                goto cqcaimmsooakqmae;
                ioomkicqkmoooiew:
                foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                    goto ysowsoswoigywasy;
                    yewcqwqmykemykca:
                    $momcykaoccoymeig++;
                    goto wauomwaoauygqsou;
                    ysowsoswoigywasy:
                    self::_updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig);
                    goto yewcqwqmykemykca;
                    wauomwaoauygqsou:
                    iqomqkaueoackgwg:
                    goto uucoqooygmoeuicu;
                    uucoqooygmoeuicu:
                }
                goto asuwukmiyuqqgqiy;
                ugakmuywaoowqymc:
                $momcykaoccoymeig = 0;
                goto soyyokqommwwoyoy;
                iykceckkokwcsgoi:
            }
            goto wqmquqcyioicymwu;
            wqmquqcyioicymwu:
            wwsamammkqcsocqc:
            goto moywwywcsegwawmi;
            qagigacwywmweskc:
            try {
                $kwmksuuciqkiymek = $kwmksuuciqkiymek->eyagosskwwmgwmog();
            } catch (Exception $wgaoewqkwgomoaai) {
                goto qugokekqyguksees;
            }
            goto akiymyugggumyuic;
            moywwywcsegwawmi:
            oimgigccqeqcsmoy:
            goto mqugkocskuaokeiy;
            qoeaosoumsicoqms:
            if (!$kwmksuuciqkiymek) {
                goto oimgigccqeqcsmoy;
            }
            goto yicumoqkcoycyoyu;
            gqemygsogaaasyes:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto goicqkqwoomuowkw;
            goicqkqwoomuowkw:
            if (!(isset($siquossayskcwkea["\x70\x61\x72\145\156\164"]) && $siquossayskcwkea["\160\141\x72\145\156\164"])) {
                goto emsewgkwsmcgkoyy;
            }
            goto qagigacwywmweskc;
            mqugkocskuaokeiy:
            qugokekqyguksees:
            goto owqyqioycqkesioo;
            owqyqioycqkesioo:
        }
        goto yayoumcciuyieeoi;
        suumgeqekqgggugc:
        ywwqgsuuquocmqgk:
        goto emmcgqumuacycqgg;
        emmcgqumuacycqgg:
        return $nsmgceoqaqogqmuw;
        goto omsqscuggqqkuigc;
        yayoumcciuyieeoi:
        wqmuwigkssqkoweq:
        goto uyieackqwooqcqos;
        omsqscuggqqkuigc:
    }
    
    private static function _updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig)
    {
        goto ewasskcgskcwkeyq;
        uqogiiekomwssgee:
        sewqkgoqqeiogwgc:
        goto soumiseyqqgqccym;
        ewasskcgskcwkeyq:
        if (is_callable($eqgoocgaqwqcimie)) {
            goto eaaicwyuwkogsies;
        }
        goto isqacycsggwaoyqw;
        isqacycsggwaoyqw:
        $cusosqmyoqiykqgw = $eqgoocgaqwqcimie;
        goto iomkccwaewyicouy;
        aegcoomigmqwwaka:
        $cusosqmyoqiykqgw = call_user_func($eqgoocgaqwqcimie, $momcykaoccoymeig, $gaeqamemwmwsyukm);
        goto guqgcqqsyaacwsuk;
        guqgcqqsyaacwsuk:
        akquuwsekmuoicae:
        goto eoqccooyeaocyegw;
        mqimqkqmmswccmew:
        $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, $cusosqmyoqiykqgw);
        goto oamigoywuyowgcow;
        uyewsowgcymwsuwu:
        sgqkaakkaugosoak:
        goto aqqqwiuwoymusgey;
        eoqccooyeaocyegw:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto sewqkgoqqeiogwgc;
        }
        goto wwqmyeqgkqmkoosk;
        eukeqiqsekiaqkyk:
        omqyiocewcgomqks:
        goto uyewsowgcymwsuwu;
        eemagcyswykuayai:
        eaaicwyuwkogsies:
        goto aegcoomigmqwwaka;
        oamigoywuyowgcow:
        geasmqwwokmeqayu:
        goto uqogiiekomwssgee;
        aqqqwiuwoymusgey:
        if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) {
            goto geasmqwwokmeqayu;
        }
        goto mqimqkqmmswccmew;
        sqygiwwewksqgica:
        switch ($aiamqeawckcsuaou) {
            case self::REMOVE_ACTION:
                goto emeycusyiaccgcoo;
                emeycusyiaccgcoo:
                if (is_numeric($ymkomoccmymcoiea)) {
                    goto eaqoukeuceuywwac;
                }
                goto ioyamykqysewiueo;
                gakugweoyossmeao:
                $uusmaiomayssaecw = array_search($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto euqokgqeguqwueas;
                ioyamykqysewiueo:
                $ymyqweogikqywwqc = explode("\x20", $ymyqweogikqywwqc);
                goto gakugweoyossmeao;
                gqucksyyuwcwiyog:
                goto eyqiqgwmkyegsmgw;
                goto aieuuwkemkgccgqq;
                eoggoeeymkgmcckw:
                kikeekyeuiyoiuoc:
                goto sgmwwuiygokssyeg;
                ssgkiscaiguwcyeq:
                unset($ymyqweogikqywwqc[$uusmaiomayssaecw]);
                goto eoggoeeymkgmcckw;
                gqukqoawwwyuukwc:
                $cusosqmyoqiykqgw = null;
                goto ceuyeoigyioagyou;
                eeycgakkgoakqaac:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto gscqagmcimoymgeq;
                aieuuwkemkgccgqq:
                eaqoukeuceuywwac:
                goto egmkyicacugkkoie;
                sgmwwuiygokssyeg:
                if (!is_array($ymyqweogikqywwqc)) {
                    goto keggycaoqkyockgu;
                }
                goto lmsiwkmayqggkuie;
                ygooeemqcwgcmwgy:
                if ($cusosqmyoqiykqgw) {
                    goto gemyysqyokmecguu;
                }
                goto eeycgakkgoakqaac;
                ceuyeoigyioagyou:
                eyqiqgwmkyegsmgw:
                goto qagksgqcwesuogsi;
                lmsiwkmayqggkuie:
                $cusosqmyoqiykqgw = implode("\40", $ymyqweogikqywwqc);
                goto mkeiwccsuyqyqaom;
                qagksgqcwesuogsi:
                goto sgqkaakkaugosoak;
                goto gsmueswaqwsqiqay;
                gscqagmcimoymgeq:
                gemyysqyokmecguu:
                goto gqucksyyuwcwiyog;
                egmkyicacugkkoie:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($eqgoocgaqwqcimie);
                goto gqukqoawwwyuukwc;
                euqokgqeguqwueas:
                if (!(false !== $uusmaiomayssaecw)) {
                    goto kikeekyeuiyoiuoc;
                }
                goto ssgkiscaiguwcyeq;
                mkeiwccsuyqyqaom:
                keggycaoqkyockgu:
                goto ygooeemqcwgcmwgy;
                gsmueswaqwsqiqay:
            case self::RENAME_ACTION:
                goto csgmgackuimwqgmw;
                yewuugymokaikqmq:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto scuasiqkgymskyoc;
                scuasiqkgymskyoc:
                qkueygwuioiiemuw:
                goto uysasageemkuuusg;
                uysasageemkuuusg:
                goto sgqkaakkaugosoak;
                goto ccasgycsymsuuwks;
                hgmsiocesiimemgo:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto yewuugymokaikqmq;
                siaqoyuoaccceoqy:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto qkueygwuioiiemuw;
                }
                goto hgmsiocesiimemgo;
                csgmgackuimwqgmw:
                $cusosqmyoqiykqgw = null;
                goto siaqoyuoaccceoqy;
                ccasgycsymsuuwks:
            case self::REPLACE_ACTION:
            case self::UPDATE_ACTION:
                goto ceiaogwwoekcyacg;
                ceiaogwwoekcyacg:
                if ($aiamqeawckcsuaou === self::REPLACE_ACTION) {
                    goto yeaoaicqksoigqwu;
                }
                goto gweqggykcmiiawwc;
                skyckeomciwscaso:
                
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto mqgywkmwkwqgsius;
                mqgywkmwkwqgsius:
                goto smuioeqccoouuewa;
                goto cqamkyuumwogqcas;
                mqmquwuyocuoikae:
                $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\x20{$cusosqmyoqiykqgw}";
                goto gswwomycucqmsywk;
                cmmuyseicemsyouq:
                goto smuioeqccoouuewa;
                goto ewysmowcmmykqscm;
                tmyuuoeywociqseo:
                goto sgqkaakkaugosoak;
                goto mkyomwyoeskcakyi;
                ewysmowcmmykqscm:
                yeaoaicqksoigqwu:
                goto sweokouicekqeyse;
                sweokouicekqeyse:
                $ymyqweogikqywwqc = null;
                goto skyckeomciwscaso;
                gswwomycucqmsywk:
                smuioeqccoouuewa:
                goto tmyuuoeywociqseo;
                gweqggykcmiiawwc:
                if ($ymkomoccmymcoiea == "\143\x6c\141\163\163" && $ymyqweogikqywwqc) {
                    goto iymwescsmiywgwui;
                }
                goto cmmuyseicemsyouq;
                cqamkyuumwogqcas:
                iymwescsmiywgwui:
                goto mqmquwuyocuoikae;
                mkyomwyoeskcakyi:
            case self::REPLACE_WITH_ACTION:
                goto acmoisuwocsciyae;
                mqssosgumiesimkw:
                goto sgqkaakkaugosoak;
                goto gwyacasmwuiceqwi;
                eckeocwysskicowi:
                eiwwmuekkuasciug:
                goto oskymakeiqaoiukk;
                pamyaqouossmosoe:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto eckeocwysskicowi;
                acmoisuwocsciyae:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto eiwwmuekkuasciug;
                }
                goto ocysawskymukqmeq;
                oskymakeiqaoiukk:
                $cusosqmyoqiykqgw = null;
                goto mqssosgumiesimkw;
                ocysawskymukqmeq:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($cusosqmyoqiykqgw, $ymyqweogikqywwqc);
                goto pamyaqouossmosoe;
                gwyacasmwuiceqwi:
        }
        goto eukeqiqsekiaqkyk;
        iomkccwaewyicouy:
        goto akquuwsekmuoicae;
        goto eemagcyswykuayai;
        wwqmyeqgkqmkoosk:
        $ymyqweogikqywwqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
        goto sqygiwwewksqgica;
        soumiseyqqgqccym:
    }
    
    public static function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $eagcmyswaakcwyec = [], $omwmuycmeqcqokom = "\144\x69\166", $qmeuaeiseuacgiqc = true)
    {
        goto kumiqmuaqymmkyic;
        kumiqmuaqymmkyic:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto iqecwuuaikqmkqyy;
        gmqcqaiwkusyiuey:
        $ygickiygyemsowyo = null;
        goto guyauwwommggyukw;
        akogicckgmsmmiag:
        wsgkyquaeocsaiqk:
        goto qgwisswsyykiimuq;
        wyiuscyymgoqkmws:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wsymimooikcoeamc;
        swwaaaeuyyocowgq:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto wggceogiyyyaoqca;
        maakkwkkckwawgqq:
        self::_appendHTML($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc);
        goto swwaaaeuyyocowgq;
        saicagwascmeamuk:
        return $nsmgceoqaqogqmuw;
        goto cgewmgsswwywkoki;
        qgwisswsyykiimuq:
        $omwmuycmeqcqokom = ManipulateHTML::qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq);
        goto maakkwkkckwawgqq;
        wsymimooikcoeamc:
        $okcscwesammossuq = '';
        goto gmqcqaiwkusyiuey;
        iqecwuuaikqmkqyy:
        if (!$kasgukgceywckyou) {
            goto kymauouamycysiyy;
        }
        goto wyiuscyymgoqkmws;
        guyauwwommggyukw:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto oeqekywmewqowkwg;
            gseomoauqsuqccme:
            $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode;
            goto soeueuyguemogamc;
            soeueuyguemogamc:
            self::_removeNode($ymyisaeksssueeik);
            goto aysoyukoimiemacc;
            wecayusimwoiswuw:
            kmycyawgoewowaeq:
            goto ioscumsgeuoekyik;
            aysoyukoimiemacc:
            $okcscwesammossuq .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto wecayusimwoiswuw;
            oeqekywmewqowkwg:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto kmycyawgoewowaeq;
            }
            goto gseomoauqsuqccme;
            ioscumsgeuoekyik:
            kegeyiwiieqmocsk:
            goto eusmmqcsiiyiogqg;
            eusmmqcsiiyiogqg:
        }
        goto akogicckgmsmmiag;
        wggceogiyyyaoqca:
        kymauouamycysiyy:
        goto saicagwascmeamuk;
        cgewmgsswwywkoki:
    }
}

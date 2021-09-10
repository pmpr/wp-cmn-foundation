<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const UPDATE_ACTION = "\165\x70\x64\x61\x74\145";
    const REMOVE_ACTION = "\x72\x65\155\x6f\166\145";
    const RENAME_ACTION = "\162\x65\156\141\155\145";
    const REPLACE_ACTION = "\162\145\x70\x6c\141\143\145";
    const REPLACE_WITH_ACTION = "\162\x65\160\x6c\x61\x63\145\x5f\167\x69\164\150";
    
    public static function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, $uuyoeicyoayimaoa = false, $ksaameoqigiaoigg = true)
    {
        goto cukksseqkekyucye;
        cukksseqkekyucye:
        if (!$ekiuyucoiagmscgy) {
            goto ygyoayucuigaoacw;
        }
        goto ocueeioeueqmisuo;
        ocueeioeueqmisuo:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gwiykyqeeowisqqk;
        wysuusuamkqeyqso:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto oogiaiuaumioummk;
        icimmqwesqkmeuce:
        if (!$ksaameoqigiaoigg) {
            goto agwuyeemwsccoagc;
        }
        goto wysuusuamkqeyqso;
        kwcsomkougiwgaco:
        return $nsmgceoqaqogqmuw;
        goto gkcycgsoawqoyesg;
        cegkuogwgoiomikw:
        ygyoayucuigaoacw:
        goto kwcsomkougiwgaco;
        wyiciayqimeqqomu:
        wuwkeggsaiumowug:
        goto icimmqwesqkmeuce;
        yiayuooesmsmswia:
        foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) {
            goto aagkoumomwwcaeka;
            imyiqyuaoycegake:
            oegkcqakmussueqq:
            goto qeoumcqaaaecsace;
            aguwgcwgoukkkmio:
            ymumcsswaocykmeo:
            goto imyiqyuaoycegake;
            eyooouiwwwumauao:
            goto wuwkeggsaiumowug;
            goto aguwgcwgoukkkmio;
            skgeuaegiqaqgyaq:
            goto wuwkeggsaiumowug;
            goto qegkmgwymeckgwyg;
            qegkmgwymeckgwyg:
            goto oegkcqakmussueqq;
            goto meiqsogowcogmgco;
            qeoumcqaaaecsace:
            yuqoyicsmawcauec:
            goto kykugggwwuqeokou;
            ayucyyiciocgyass:
            goto oegkcqakmussueqq;
            goto euoymauomemecuao;
            euoymauomemecuao:
            cweguimoaweiumii:
            goto skgeuaegiqaqgyaq;
            agakiqgiuymqowkc:
            if (call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) {
                goto ymumcsswaocykmeo;
            }
            goto eyooouiwwwumauao;
            aagkoumomwwcaeka:
            if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                goto cweguimoaweiumii;
            }
            goto wueqcceaguewiucw;
            wueqcceaguewiucw:
            if ($ymyisaeksssueeik instanceof DOMElement) {
                goto qkkiemwuuaaqqyas;
            }
            goto ayucyyiciocgyass;
            meiqsogowcogmgco:
            qkkiemwuuaaqqyas:
            goto agakiqgiuymqowkc;
            kykugggwwuqeokou:
        }
        goto wyiciayqimeqqomu;
        omiqqwiemqykocci:
        coakmyawmquywmos:
        goto cegkuogwgoiomikw;
        oogiaiuaumioummk:
        agwuyeemwsccoagc:
        goto omiqqwiemqykocci;
        ggwakcmgwkcsasug:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto yiayuooesmsmswia;
        gwiykyqeeowisqqk:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto coakmyawmquywmos;
        }
        goto ggwakcmgwkcsasug;
        gkcycgsoawqoyesg:
    }
    
    public static function _getCrawler($nsmgceoqaqogqmuw)
    {
        goto eioiqwykkuguaygs;
        wcyauuwqsicgkomk:
        goto qeauoqcaeymayusu;
        goto yomgkcycysceyagw;
        agisoqkoyekmsyga:
        $kasgukgceywckyou = $nsmgceoqaqogqmuw;
        goto wuegeyoegwoqcumy;
        qymucyymugqaaoyi:
        if ($nsmgceoqaqogqmuw && trim(preg_replace("\x2f\x5c\x73\x2b\x2f", "\40", $nsmgceoqaqogqmuw))) {
            goto oqiciswgoamuceqq;
        }
        goto wcyauuwqsicgkomk;
        wuegeyoegwoqcumy:
        goto qeauoqcaeymayusu;
        goto kkucqmyecgwmioei;
        yomgkcycysceyagw:
        iwcmsykogssougge:
        goto agisoqkoyekmsyga;
        uememeasawuoseqy:
        qeauoqcaeymayusu:
        goto uiewawqqakquwmsq;
        eioiqwykkuguaygs:
        $kasgukgceywckyou = null;
        goto egisiwqggoqcgeum;
        wcwwkcwqkicykkmi:
        $kasgukgceywckyou = new Crawler(mb_convert_encoding($nsmgceoqaqogqmuw, "\x48\124\115\x4c\x2d\x45\x4e\124\x49\x54\111\x45\123", "\125\124\106\x2d\70"));
        goto uememeasawuoseqy;
        kkucqmyecgwmioei:
        oqiciswgoamuceqq:
        goto wcwwkcwqkicykkmi;
        uiewawqqakquwmsq:
        return $kasgukgceywckyou;
        goto ugksoyaaemqyoywa;
        egisiwqggoqcgeum:
        if ($nsmgceoqaqogqmuw instanceof Crawler) {
            goto iwcmsykogssougge;
        }
        goto qymucyymugqaaoyi;
        ugksoyaaemqyoywa:
    }
    
    public static function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc)
    {
        goto smikqieaosiykeii;
        smikqieaosiykeii:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto oukysgqmgiumaasc;
        oukysgqmgiumaasc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto ggmmkmasyqcugkkm;
        }
        goto umgmgswkigyyweke;
        soasesuoocikiquy:
        return $nsmgceoqaqogqmuw;
        goto okuuaqumeeamcgiw;
        umgcmywyqkwsmsku:
        migcqoeeeukcyciu:
        goto ocqmicyceamumeia;
        aiyeuqqmcksqsyeq:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto eqmmegqmukwekkkk;
            muwaaaqcuwaeoakw:
            $omwmuycmeqcqokom->cgeyeoimiuyogose($koaqiaecmascwuyy);
            goto uwawwskgqkieusog;
            mimysauwikioomiy:
            wimkgcmkgcaewcwy:
            goto ymessmmcgesuuyys;
            eqmmegqmukwekkkk:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto csguigwqeomsyyqw;
            }
            goto scmgoisaawgacqyu;
            scmgoisaawgacqyu:
            $koaqiaecmascwuyy = self::_createElementFromHtml($kasgukgceywckyou, $ewgwqamkygiqaawc);
            goto guwuqywoqwigamaw;
            coiqsauaqkqykkus:
            csguigwqeomsyyqw:
            goto mimysauwikioomiy;
            iwcaywweqcgmemko:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto muwaaaqcuwaeoakw;
            uwawwskgqkieusog:
            egocwogikoqicuyo:
            goto coiqsauaqkqykkus;
            guwuqywoqwigamaw:
            if (!$koaqiaecmascwuyy) {
                goto egocwogikoqicuyo;
            }
            goto iwcaywweqcgmemko;
            ymessmmcgesuuyys:
        }
        goto umgcmywyqkwsmsku;
        umgmgswkigyyweke:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto aiyeuqqmcksqsyeq;
        ocqmicyceamumeia:
        ggmmkmasyqcugkkm:
        goto soasesuoocikiquy;
        okuuaqumeeamcgiw:
    }
    
    public static function umuecysoywoumgwo($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ewceaieowsgamkyi;
        euycuguygmweyiwm:
        return $kwmksuuciqkiymek->count() > 0;
        goto ykssqiacqucsmmac;
        ceaewumsyymakaoc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto qquecwewqeeqyysw;
        }
        goto qqcoeqwimyugqwuc;
        ykssqiacqucsmmac:
        qquecwewqeeqyysw:
        goto sueokeomisikqomo;
        sueokeomisikqomo:
        return false;
        goto mggckwqcieykwima;
        ewceaieowsgamkyi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ceaewumsyymakaoc;
        qqcoeqwimyugqwuc:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto euycuguygmweyiwm;
        mggckwqcieykwima:
    }
    
    public static function igyokgqyiouieioo(Crawler $kasgukgceywckyou)
    {
        $ymyisaeksssueeik = $kasgukgceywckyou->wugqmqwisygwoeas(0);
        return $ymyisaeksssueeik->ownerDocument;
    }
    
    public static function ygmcsmegcysyeoss($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto cckmokqegquyoaoy;
        awmwcaycosymoesq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto icoacuwgkgqykgee;
        icoacuwgkgqykgee:
        $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
        goto equcgweimiaqsysk;
        qoimoeswgougaeoa:
        return $gaeqamemwmwsyukm;
        goto wsqkqmcuoauyescs;
        icqaoiyumasyygik:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto eiaqawokkeocqqsk;
        eiaqawokkeocqqsk:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto gygmcmiciswgeswm;
        }
        goto awmwcaycosymoesq;
        cckmokqegquyoaoy:
        $gaeqamemwmwsyukm = 0;
        goto icqaoiyumasyygik;
        equcgweimiaqsysk:
        gygmcmiciswgeswm:
        goto qoimoeswgougaeoa;
        wsqkqmcuoauyescs:
    }
    
    private static function _removeNode(DOMNode $ymyisaeksssueeik)
    {
        $ymyisaeksssueeik->parentNode->uwqgywaceaaymckg($ymyisaeksssueeik);
    }
    
    public static function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ggcaqksgsoeecwak;
        ikmqwkwwskokemqy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto gumkwiqcaqusgwqm;
        mmmccuoeoeuskisk:
        $omwmuycmeqcqokom = null;
        goto ikmqwkwwskokemqy;
        syweoqsuaauksacw:
        qeimwiyggaoimmoq:
        goto qeqagimacwmgmqiq;
        eugiyageaomiuoki:
        if (!$kasgukgceywckyou) {
            goto qeimwiyggaoimmoq;
        }
        goto mmmccuoeoeuskisk;
        gumkwiqcaqusgwqm:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ugecckaqeasoimos;
            uckiysiyuksyuaoa:
            $nsmgceoqaqogqmuw = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo();
            goto ceyeeieiggoamgwe;
            ugecckaqeasoimos:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto csgowsgmcyswmiec;
            }
            goto goiiekmeukcsamca;
            ammmoycqyaqeqiww:
            uquqecagkoyomiiy:
            goto okwouciqeqeuogos;
            goiiekmeukcsamca:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto gigkawsyquoowcms;
            qwsqoioiwieqgeee:
            csgowsgmcyswmiec:
            goto ammmoycqyaqeqiww;
            gigkawsyquoowcms:
            $omwmuycmeqcqokom->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom);
            goto uckiysiyuksyuaoa;
            ceyeeieiggoamgwe:
            goto kmqagkiwcsuimayg;
            goto qwsqoioiwieqgeee;
            okwouciqeqeuogos:
        }
        goto kakskegscmoqcksc;
        kakskegscmoqcksc:
        kmqagkiwcsuimayg:
        goto syweoqsuaauksacw;
        ggcaqksgsoeecwak:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto eugiyageaomiuoki;
        qeqagimacwmgmqiq:
        return $nsmgceoqaqogqmuw;
        goto ekukcomgoyeiuici;
        ekukcomgoyeiuici:
    }
    
    private static function _getHtml($gykwsaeqegqowywy, $ggauoeuaesiymgee = '')
    {
        goto qeaeawocamciyiyk;
        sekgqycaaucagggo:
        keegiisaqayqmogu:
        goto woqoqsqomgswqicc;
        woqoqsqomgswqicc:
        return $nsmgceoqaqogqmuw;
        goto iiyamiqswaymisue;
        ewouumyoyasgkgig:
        $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        goto sekgqycaaucagggo;
        yyakcqyqkuuokgqw:
        if (is_string($nsmgceoqaqogqmuw)) {
            goto keegiisaqayqmogu;
        }
        goto ewouumyoyasgkgig;
        qeaeawocamciyiyk:
        try {
            goto gamiacsewcmmiece;
            escwyiwieqcweggy:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->skkueuquuqweeyqo();
            goto ikiooiowwwwaygwi;
            yoygkuwyqmgaqewi:
            if ($gykwsaeqegqowywy instanceof DOMDocument) {
                goto aiewsymeiqiakqqs;
            }
            goto ciwweeyeeieqgowe;
            iaewimwissuueacw:
            kqmgqywmgomwmokg:
            goto qggomaqouiuasaum;
            oiymkikesysgoyma:
            $kkkqocwqmaokqcmc = strpos(strtolower($ggauoeuaesiymgee), strtolower($ikoqkmiqkckowcgg)) !== false;
            goto mosmyseyaemqewwk;
            kuywseoceqkawokq:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy;
            goto iyocukugwkwoosqy;
            mimseykuewemegow:
            wykieskeigmammue:
            goto sukokqcaoygeisos;
            gcwimimmgaoueegm:
            $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw;
            goto okqoikkyquugiuia;
            ikiooiowwwwaygwi:
            goto saqqooggaykweqce;
            goto cwwguccuiymmeosu;
            suogukqqcuaecgmg:
            throw new InvalidArgumentException();
            goto iwaqiakswyiuyyao;
            iwaqiakswyiuyyao:
            goto saqqooggaykweqce;
            goto mimseykuewemegow;
            ciwweeyeeieqgowe:
            if (is_string($gykwsaeqegqowywy)) {
                goto yiqweuusyaikwqgg;
            }
            goto suogukqqcuaecgmg;
            gamiacsewcmmiece:
            $ikoqkmiqkckowcgg = "\x3c\x21\104\117\103\x54\x59\x50\x45\40\150\164\x6d\154\x3e";
            goto oiymkikesysgoyma;
            sukokqcaoygeisos:
            if ($kkkqocwqmaokqcmc) {
                goto kqmgqywmgomwmokg;
            }
            goto emkcaamgumgwwyem;
            wouesssgyqywasom:
            goto saqqooggaykweqce;
            goto uimeimmscccaqukm;
            uimeimmscccaqukm:
            aiewsymeiqiakqqs:
            goto escwyiwieqcweggy;
            cwwguccuiymmeosu:
            yiqweuusyaikwqgg:
            goto kuywseoceqkawokq;
            eoeuieksgoyqcgsu:
            $nsmgceoqaqogqmuw = preg_replace(["\x2f\50\74\51\50\150\x65\x61\x64\51\x28\x5b\136\x3e\x5d\52\x3f\x29\50\134\x2f\x3f\x5c\x73\x2a\76\51\174\74\134\x2f\150\x65\141\x64\76\x2f", "\x2f\x28\x3c\x29\50\142\157\144\x79\51\50\x5b\x5e\x3e\x5d\x2a\x3f\51\50\134\x2f\x3f\x5c\x73\x2a\x3e\51\174\x3c\134\57\x62\x6f\x64\171\76\x2f", "\57\x28\160\141\x72\x65\156\x74\x3d\x22\x29\50\133\141\55\x7a\x41\55\132\x30\x2d\71\x3a\73\x5c\56\x5c\x73\x5c\x28\134\51\134\55\134\x2c\135\x2a\x29\x28\42\x29\57"], '', $nsmgceoqaqogqmuw);
            goto goekuagoayyskiio;
            mosmyseyaemqewwk:
            if ($gykwsaeqegqowywy instanceof Crawler) {
                goto wykieskeigmammue;
            }
            goto yoygkuwyqmgaqewi;
            qggomaqouiuasaum:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->yqwwccackoayicyy();
            goto gcwimimmgaoueegm;
            iyocukugwkwoosqy:
            saqqooggaykweqce:
            goto kseweksyciigumec;
            goekuagoayyskiio:
            goto yiomcwmuukooycqq;
            goto iaewimwissuueacw;
            okqoikkyquugiuia:
            yiomcwmuukooycqq:
            goto wouesssgyqywasom;
            emkcaamgumgwwyem:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee);
            goto eoeuieksgoyqcgsu;
            kseweksyciigumec:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        }
        goto yyakcqyqkuuokgqw;
        iiyamiqswaymisue:
    }
    
    public static function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::UPDATE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto sgwmqsowsekomcso;
        scequiwqaummymka:
        if (!$kasgukgceywckyou) {
            goto uasacoumuyqgeuqy;
        }
        goto rgemwoeoywekwuww;
        iqeqegeqgsmmaeay:
        return $siquossayskcwkea;
        goto qoeoouiewgwuyayg;
        egcucgemmkamyiuu:
        $siquossayskcwkea = [];
        goto scequiwqaummymka;
        qikaumyuwkusqmcy:
        iqwqucswgosmiwyy:
        goto qcewkmiokmwaakyo;
        qcewkmiokmwaakyo:
        uasacoumuyqgeuqy:
        goto iqeqegeqgsmmaeay;
        rgemwoeoywekwuww:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto cegaaikcsiwyswca;
        cegaaikcsiwyswca:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto muqkgsmqakgwkaym;
            muqkgsmqakgwkaym:
            $siquossayskcwkea = self::wuuawmeqqyyyemsw($ymyisaeksssueeik);
            goto ckiswiiwkuugeogg;
            keowaakoqimieymo:
            mymcocumieiauquq:
            goto ywuqguicqikeqiog;
            ckiswiiwkuugeogg:
            if (!$siquossayskcwkea) {
                goto mymcocumieiauquq;
            }
            goto esmaiecuukakamog;
            esmaiecuukakamog:
            goto iqwqucswgosmiwyy;
            goto keowaakoqimieymo;
            ywuqguicqikeqiog:
            beowceiucukcwego:
            goto uoygcyuomiyquumm;
            uoygcyuomiyquumm:
        }
        goto qikaumyuwkusqmcy;
        sgwmqsowsekomcso:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto egcucgemmkamyiuu;
        qoeoouiewgwuyayg:
    }
    
    public static function wuuawmeqqyyyemsw($ymyisaeksssueeik)
    {
        goto gkuukqkuaayagqwe;
        awukmeygqcaeyaeg:
        iqwsgmwqeskwqckm:
        goto cqcqsoqaumyuyemo;
        wayaguckegemumuy:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto kwqqeiiqgiaoquag;
        }
        goto kkgkywswiimccaog;
        gkuukqkuaayagqwe:
        $siquossayskcwkea = [];
        goto wayaguckegemumuy;
        csoeiakqgmuockgk:
        return $siquossayskcwkea;
        goto ewuciaosgqwwagsc;
        kkgkywswiimccaog:
        foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
            $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue;
            yqisiuioymswaciy:
        }
        goto awukmeygqcaeyaeg;
        cqcqsoqaumyuyemo:
        kwqqeiiqgiaoquag:
        goto csoeiakqgmuockgk;
        ewuciaosgqwwagsc:
    }
    
    public static function wugqmqwisygwoeas($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto aqukigyaugymgocm;
        aqukigyaugymgocm:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qokcmisciyieiwyi;
        smuuwogesuiogomg:
        return $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto ayucyiqeeeumawgo;
        qokcmisciyieiwyi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto smuuwogesuiogomg;
        ayucyiqeeeumawgo:
    }
    
    public static function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto wikugsiimiguuwuw;
        migkmccwwikseoos:
        kkewwsgkgooicawy:
        goto mquaoucacecoymqu;
        eesgqauaaeqiycee:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) {
            goto kcsqyquoyoyssiik;
            ymmgkaaokqasmaum:
            foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) {
                goto jiykeiuymeoowsma;
                wcqkwcqqqsygagsg:
                ecmowkisqwcgyykc:
                goto owuommygccmkuues;
                qgyeaeoyqscmuqqy:
                iqewyeqegsuemqgc:
                goto cwaukuukmsqkqqoc;
                owuommygccmkuues:
                $uumwowmewaqyggce->parentNode->caqmeawgoiceoymu($uuswugicgoqcyiiy, $uumwowmewaqyggce);
                goto qgyeaeoyqscmuqqy;
                kgmmesqykuckqgqg:
                foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) {
                    $okcscwesammossuq[] = $wcgsoqmmciswkmiq;
                    meiiqwkkeguigquc:
                }
                goto mokaauiekiycqsii;
                mokaauiekiycqsii:
                yiqwwseykuimmeuc:
                goto akyieugiomeuaqsk;
                sqowskoquogmiiwg:
                foreach ($uumwowmewaqyggce->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto musoessicqgioaci;
                    cgcyciqqcqiimwse:
                    $uuswugicgoqcyiiy->cmgoqeksagmigwmg($qmgyyqwkskaiwcqg, $giueyucwwwwiooim);
                    goto csymkqmseeouiacg;
                    musoessicqgioaci:
                    $qmgyyqwkskaiwcqg = $sicussmmuqmeqygw->nodeName;
                    goto aowacowggwuykewe;
                    csymkqmseeouiacg:
                    ygcocguewqswqcsa:
                    goto qykaososcekymqeo;
                    aowacowggwuykewe:
                    $giueyucwwwwiooim = $sicussmmuqmeqygw->nodeValue;
                    goto cgcyciqqcqiimwse;
                    qykaososcekymqeo:
                }
                goto wcqkwcqqqsygagsg;
                akiuccuwusyiywaa:
                cyiwuweakowgmamu:
                goto sqowskoquogmiiwg;
                yukykeccsygagcsm:
                foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) {
                    $uuswugicgoqcyiiy->cgeyeoimiuyogose($uumwowmewaqyggce->ownerDocument->gqskweuukuceuaoq($wcgsoqmmciswkmiq, true));
                    isuyseouiawyweke:
                }
                goto akiuccuwusyiywaa;
                gcqqqceoakukiuim:
                $okcscwesammossuq = [];
                goto kgmmesqykuckqgqg;
                akyieugiomeuaqsk:
                $uuswugicgoqcyiiy = $uumwowmewaqyggce->ownerDocument->auokmyiaciikcekk($ymqmyyeuycgmigyo);
                goto yukykeccsygagcsm;
                jiykeiuymeoowsma:
                if (!$uumwowmewaqyggce instanceof DOMNode) {
                    goto iqewyeqegsuemqgc;
                }
                goto gcqqqceoakukiuim;
                cwaukuukmsqkqqoc:
                cqkeucwwyywigyqk:
                goto mosmyyysosawmqku;
                mosmyyysosawmqku:
            }
            goto yscsaueouasieayc;
            smsgceqwueqiwmyi:
            wymogskocqsmiimw:
            goto ywoisggyqsommewa;
            yscsaueouasieayc:
            wwcwmiwqwiygmyka:
            goto smsgceqwueqiwmyi;
            kcsqyquoyoyssiik:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto ymmgkaaokqasmaum;
            ywoisggyqsommewa:
        }
        goto qmsikcqgaumiyego;
        cckseausycyccake:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto migkmccwwikseoos;
        uqwmcimomeomgqgi:
        if (!$kasgukgceywckyou) {
            goto kkewwsgkgooicawy;
        }
        goto eesgqauaaeqiycee;
        wikugsiimiguuwuw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto uqwmcimomeomgqgi;
        qmsikcqgaumiyego:
        equeyqisaekucoyq:
        goto cckseausycyccake;
        mquaoucacecoymqu:
        return $nsmgceoqaqogqmuw;
        goto oucwkycugsesqoas;
        oucwkycugsesqoas:
    }
    
    public static function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto cuqcgywmuqoakieq;
        imcqqemiwqqegsmk:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto uaaigcisokikuqgu;
        }
        goto mcygayiqasgoyqss;
        gmmwukkcaouckswu:
        wmcsksugskiskyyy:
        goto qmuqcuumuagkyggg;
        siwscqyokoekmooc:
        uaaigcisokikuqgu:
        goto ggqwikwoioeuqsam;
        kaooossoiysywsuk:
        yeqgqmywegcwsiow:
        goto sqqqwsqwmossuima;
        qmuqcuumuagkyggg:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) {
            self::_removeElement($kasgukgceywckyou, $yuumukkaswwoywya);
            cceewgewommawcii:
        }
        goto eqiesmsygmemseog;
        eqiesmsygmemseog:
        wcqggkigoogqmmqk:
        goto kaooossoiysywsuk;
        iycosyeceoegukgg:
        self::_removeElement($kasgukgceywckyou, $sgksuwkwyimqgaii);
        goto dsqeweimquoouiyo;
        cuqcgywmuqoakieq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto imcqqemiwqqegsmk;
        mcygayiqasgoyqss:
        if (is_array($sgksuwkwyimqgaii)) {
            goto wmcsksugskiskyyy;
        }
        goto iycosyeceoegukgg;
        ggqwikwoioeuqsam:
        return $nsmgceoqaqogqmuw;
        goto kyiikasuaqaeigae;
        dsqeweimquoouiyo:
        goto yeqgqmywegcwsiow;
        goto gmmwukkcaouckswu;
        sqqqwsqwmossuima:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto siwscqyokoekmooc;
        kyiikasuaqaeigae:
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
        goto coscuikaoymwwmii;
        mukeowkkueukysww:
        if (!$kasgukgceywckyou) {
            goto yumegkesogwyweiq;
        }
        goto iyemcyamksqakiiw;
        uyeimkwsuoqgewgy:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto asysseskuwwesiqc;
        coscuikaoymwwmii:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mukeowkkueukysww;
        yceeiagmcyqcayes:
        ocgiuagqmmqakago:
        goto uyeimkwsuoqgewgy;
        ymkakuuweqoysagc:
        return $nsmgceoqaqogqmuw;
        goto cicooguqkeoeyges;
        asysseskuwwesiqc:
        yumegkesogwyweiq:
        goto ymkakuuweqoysagc;
        iyemcyamksqakiiw:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto mgkokmqyecocwwgo;
            wqemgeeosmaqkuye:
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                goto kgaciayyiuykqyko;
                kgaciayyiuykqyko:
                if (!$ymyisaeksssueeik instanceof DOMNode) {
                    goto msiuouqukawgegwo;
                }
                goto agkwamguicmweoom;
                auqwmowcyqaioyse:
                kaccyaysqwkaoyka:
                goto caqmiuioaesgyaug;
                agkwamguicmweoom:
                $msqkueqksqwmskak = array_keys($siquossayskcwkea);
                goto wymyuyaiikioyeao;
                wymyuyaiikioyeao:
                foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto meeiyyaqksugkeai;
                    cyuwoeiiwcsqukku:
                    ceomusueeoaqyume:
                    goto pouyossuowuwcsma;
                    ykemkuywkaowmyuc:
                    $ymyisaeksssueeik->cmgoqeksagmigwmg($siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue);
                    goto skmkmwkyeuowoaqa;
                    teuusocwmquakkyc:
                    if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak)) {
                        goto gsegcywyaasmwyko;
                    }
                    goto ykemkuywkaowmyuc;
                    skmkmwkyeuowoaqa:
                    gsegcywyaasmwyko:
                    goto cyuwoeiiwcsqukku;
                    meeiyyaqksugkeai:
                    $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName;
                    goto teuusocwmquakkyc;
                    pouyossuowuwcsma:
                }
                goto auqwmowcyqaioyse;
                caqmiuioaesgyaug:
                msiuouqukawgegwo:
                goto okeqecawkekacsqc;
                okeqecawkekacsqc:
                yeewwwkywuowoscq:
                goto smqsooyiiesuyoos;
                smqsooyiiesuyoos:
            }
            goto haiiaygcugigaggi;
            eeyoaucukkaesqmk:
            aocyeyuakyusikwq:
            goto xawawcwogwekqmqc;
            mgkokmqyecocwwgo:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto wqemgeeosmaqkuye;
            haiiaygcugigaggi:
            cqwmseemsiiaqgoo:
            goto eeyoaucukkaesqmk;
            xawawcwogwekqmqc:
        }
        goto yceeiagmcyqcayes;
        cicooguqkeoeyges:
    }
    
    public static function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _find(?Crawler $kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto ugmqiuwksqaqywco;
        ugmqiuwksqaqywco:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto gwuisuuwecwcaaik;
        }
        goto ikiyguwaiacioake;
        qqaoqesyysccooug:
        return $kasgukgceywckyou;
        goto cemammoacacweske;
        ikiyguwaiacioake:
        return $kasgukgceywckyou->filter($yuumukkaswwoywya);
        goto comcmyekisewieyc;
        comcmyekisewieyc:
        gwuisuuwecwcaaik:
        goto qqaoqesyysccooug;
        cemammoacacweske:
    }
    
    private static function _removeElement($kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto kusuckgswgkceusi;
        ugogcmgasecqmaqo:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            self::_removeNode($ymyisaeksssueeik);
            memocaoaimgeuimm:
        }
        goto mmyqweeceiaeqqus;
        kusuckgswgkceusi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ugogcmgasecqmaqo;
        mmyqweeceiaeqqus:
        aokkmsyimyouoeim:
        goto cmiqweaugcqmwoiq;
        cmiqweaugcqmwoiq:
    }
    
    public static function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee)
    {
        goto gisygciesowawkqy;
        ymgkgeqimsusocoy:
        return $eqgoocgaqwqcimie;
        goto qeywecigqgseiogw;
        wgocyuiekyasmquq:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ywkkyykyayusymai;
            qoaiwgymwioiissy:
            yayuqeqkcqmiiiyw:
            goto qqqyksacwuumcmia;
            misgeimskqgmumga:
            agaaausyuimymgmm:
            goto iqeksucuwucgsuaq;
            sccqusyuqeiugcem:
            goto ugcgmougmeoayiea;
            goto qoaiwgymwioiissy;
            uuawmiyqysumgaqy:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee);
            goto uyusyuseakqmycim;
            qqqyksacwuumcmia:
            kaqeqoaoqacmssmg:
            goto misgeimskqgmumga;
            uyusyuseakqmycim:
            if (!$eqgoocgaqwqcimie) {
                goto yayuqeqkcqmiiiyw;
            }
            goto sccqusyuqeiugcem;
            ywkkyykyayusymai:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto kaqeqoaoqacmssmg;
            }
            goto uuawmiyqysumgaqy;
            iqeksucuwucgsuaq:
        }
        goto siyawoacgucmaoky;
        siyawoacgucmaoky:
        ugcgmougmeoayiea:
        goto ykuiuuqwkwwgeqko;
        ykuiuuqwkwwgeqko:
        kagiaysuecmceegy:
        goto ymgkgeqimsusocoy;
        emsquuamiesiqseq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wgocyuiekyasmquq;
        gisygciesowawkqy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gccikccauwosemee;
        cowscsiukyiwymqi:
        if (!$kasgukgceywckyou) {
            goto kagiaysuecmceegy;
        }
        goto emsquuamiesiqseq;
        gccikccauwosemee:
        $eqgoocgaqwqcimie = '';
        goto cowscsiukyiwymqi;
        qeywecigqgseiogw:
    }
    
    public static function goqgkgckyagueiso($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_WITH_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _createElement(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw)
    {
        goto kuwieemysouaokqs;
        kywicmoksqkayose:
        foreach ($qeaoumiemyikogys->auamuceiowkuacoq("\142\157\x64\x79")->item(0)->childNodes as $ymyisaeksssueeik) {
            $omwmuycmeqcqokom->cgeyeoimiuyogose($omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true));
            uuooemyeyeuswqea:
        }
        goto imoyquwyuicwioom;
        kuwieemysouaokqs:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto kywicmoksqkayose;
        imoyquwyuicwioom:
        ucwkqqscieaqmkms:
        goto yauausaeuasqsgeu;
        yauausaeuasqsgeu:
    }
    
    private static function _createElementFromHtml(Crawler $kasgukgceywckyou, $nsmgceoqaqogqmuw)
    {
        goto wiyauoggygqoymwu;
        wgyakmueooeqsyqc:
        return $kgcekiucekagcgai->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
        goto wgyukgmocmigoeuo;
        aeawksowymsuogeu:
        $kgcekiucekagcgai = self::igyokgqyiouieioo($kasgukgceywckyou);
        goto wgyakmueooeqsyqc;
        wiyauoggygqoymwu:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto aeawksowymsuogeu;
        wgyukgmocmigoeuo:
    }
    
    public static function ksgyqykcguougeue(DOMNode $ymyisaeksssueeik, $nsmgceoqaqogqmuw)
    {
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        return $ymyisaeksssueeik->ownerDocument->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
    }
    
    private static function _appendHTML($omwmuycmeqcqokom, $nsmgceoqaqogqmuw, $qmeuaeiseuacgiqc = true)
    {
        goto qmymeeegusssawmu;
        ccssuekkawuwwkyk:
        $omwmuycmeqcqokom->cgeyeoimiuyogose($nsmgceoqaqogqmuw);
        goto kecqwqseaiaomoao;
        amacugyqcmgqiaog:
        yagiokukkmimaoae:
        goto ccssuekkawuwwkyk;
        kmkmisyucykygqoc:
        ysoesyqiaaugywgi:
        goto wccegsoaeisquyeq;
        gmgkmqouwygkwuua:
        myyycckqeikqiuqi:
        goto kmkmisyucykygqoc;
        uucwuqeucsiykagi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ueowcqqgaoysmqie;
        acsgyykcowwkyayy:
        goto myyycckqeikqiuqi;
        goto wuwggkokqumggyiu;
        coqewawckmigciso:
        $omwmuycmeqcqokom->kqgwgkuykuumwcgw($nsmgceoqaqogqmuw, $omwmuycmeqcqokom->firstChild);
        goto kwaammsskmiamace;
        qmymeeegusssawmu:
        if (!$omwmuycmeqcqokom instanceof DOMNode) {
            goto ysoesyqiaaugywgi;
        }
        goto ssecwqeouoeamsio;
        ueowcqqgaoysmqie:
        foreach (self::_find($kasgukgceywckyou, "\x62\x6f\144\x79") as $ymyisaeksssueeik) {
            goto oaosaqoqiiciwgwg;
            yceyawgskeqggcuy:
            qiomiuawymsqimgk:
            goto msweyewumoisksiy;
            kcaswmekegcguiwu:
            self::_appendHTML($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc);
            goto yceyawgskeqggcuy;
            oaosaqoqiiciwgwg:
            $ymyisaeksssueeik = $omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true);
            goto kcaswmekegcguiwu;
            msweyewumoisksiy:
        }
        goto ooiockqsscsuqokc;
        ugmowoyeoowiiqie:
        if ($qmeuaeiseuacgiqc) {
            goto yagiokukkmimaoae;
        }
        goto coqewawckmigciso;
        ooiockqsscsuqokc:
        euguuygaocimsesi:
        goto acsgyykcowwkyayy;
        kwaammsskmiamace:
        goto meomioiwwciyyyue;
        goto amacugyqcmgqiaog;
        kecqwqseaiaomoao:
        meomioiwwciyyyue:
        goto gmgkmqouwygkwuua;
        ssecwqeouoeamsio:
        if ($nsmgceoqaqogqmuw instanceof DOMNode) {
            goto uyqckmcowkimsmyq;
        }
        goto uucwuqeucsiykagi;
        wuwggkokqumggyiu:
        uyqckmcowkimsmyq:
        goto ugmowoyeoowiiqie;
        wccegsoaeisquyeq:
    }
    
    public static function wesimowqwekiqiow($nsmgceoqaqogqmuw, $eeqsmkqmsowmicwi = "\163\164\171\154\x65", $cussukyecoaeayqk = true)
    {
        goto cycoyeooqscgugwa;
        uoqwymoegwoweuyk:
        mwimaeocgaqeiukm:
        goto mawsiqmcsguuokok;
        eaasaucuyacqooey:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto uoqwymoegwoweuyk;
        gmcsqgoweawewags:
        $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc;
        goto mkaoooyookegwgwg;
        yyukimsicowasyqs:
        ooueyocsuseuawgc:
        goto myusuecogkwoqimq;
        mcqkmiukmosqwemy:
        $ewgwqamkygiqaawc = '';
        goto ksccwuecqkqkawck;
        mkaoooyookegwgwg:
        mcmmgacykcsowqiw:
        goto eaasaucuyacqooey;
        myusuecogkwoqimq:
        if ($kswaimykcacqyaay instanceof DOMElement) {
            goto qauqcecycoswuoyc;
        }
        goto uqsmsqoeimicguwe;
        kkeakokiekuywmwy:
        qauqcecycoswuoyc:
        goto gmcsqgoweawewags;
        wumeiwysoiscimiu:
        if (!$kasgukgceywckyou) {
            goto mwimaeocgaqeiukm;
        }
        goto eequmkcwsuakwwmo;
        uqsmsqoeimicguwe:
        self::pmouaioykaoceyag($kasgukgceywckyou, "\150\x65\141\x64", $ewgwqamkygiqaawc);
        goto caaqcciyeymoqqmc;
        eeeaumqcsieckaoc:
        $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent;
        goto suqosyewmcawwouy;
        eequmkcwsuakwwmo:
        $kswaimykcacqyaay = self::_find($kasgukgceywckyou, "\150\x65\x61\144\40\x3e\40{$eeqsmkqmsowmicwi}")->wugqmqwisygwoeas(0);
        goto mcqkmiukmosqwemy;
        cycoyeooqscgugwa:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wumeiwysoiscimiu;
        guwmecmmcueokcgu:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, "\x5b\x73\x74\171\x6c\145\x5d");
        goto kqawgskqiimioaku;
        ksccwuecqkqkawck:
        if (!$kswaimykcacqyaay instanceof DOMNode) {
            goto ieyowiusaeousyse;
        }
        goto eeeaumqcsieckaoc;
        suqosyewmcawwouy:
        ieyowiusaeousyse:
        goto guwmecmmcueokcgu;
        kqawgskqiimioaku:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ugaoeiuoosyggsmi;
            iigwwyogmwesyoau:
            eoskieimkcimmwio:
            goto maugkumeqqaoqmkq;
            wwmggkkyegumakew:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($yuumukkaswwoywya);
            goto cquumoyicacciqei;
            gkcsgskucsicakwg:
            $omasqoksqewuwwkq = ManipulateString::uniqid(5);
            goto swiaoqqqyqusscqi;
            mgykueyyyoueykgm:
            $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc;
            goto oiksiqocuawwgeek;
            qsiqckciwyomqwue:
            ewyukeoyymaooaqa:
            goto gqmgeusocymaikoy;
            yoeiuoyekameacwu:
            $yuumukkaswwoywya = "\x73\x74\171\154\145";
            goto wwmggkkyegumakew;
            aaccwuemygqmicme:
            $ymyisaeksssueeik->cmgoqeksagmigwmg("\x63\154\141\163\x73", $egkyssmuqcwaciya);
            goto qsiqckciwyomqwue;
            cquumoyicacciqei:
            if (!$eqgoocgaqwqcimie) {
                goto ewyukeoyymaooaqa;
            }
            goto gsquqssmimkgcoga;
            ioqkkgikqygkemce:
            $eqgoocgaqwqcimie = str_replace("\x21\151\155\x70\x6f\x72\x74\141\x6e\164", '', $eqgoocgaqwqcimie);
            goto asoycqscmioaaggw;
            oyquokessoouwuke:
            $acqqmqmcquukaqsc = "\x2e{$omasqoksqewuwwkq}\173{$eqgoocgaqwqcimie}\175";
            goto mgykueyyyoueykgm;
            gqmgeusocymaikoy:
            mksggqikmumuycga:
            goto iigwwyogmwesyoau;
            skqyeawoqyssamii:
            $egkyssmuqcwaciya .= "\40{$omasqoksqewuwwkq}";
            goto aaccwuemygqmicme;
            ugaoeiuoosyggsmi:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto mksggqikmumuycga;
            }
            goto yoeiuoyekameacwu;
            asoycqscmioaaggw:
            emkuqqeesmiycqqo:
            goto oyquokessoouwuke;
            oiksiqocuawwgeek:
            $egkyssmuqcwaciya = $ymyisaeksssueeik->waecsyqmwascmqoa("\x63\154\x61\x73\163");
            goto skqyeawoqyssamii;
            gsquqssmimkgcoga:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($yuumukkaswwoywya);
            goto gkcsgskucsicakwg;
            swiaoqqqyqusscqi:
            if ($cussukyecoaeayqk) {
                goto emkuqqeesmiycqqo;
            }
            goto ioqkkgikqygkemce;
            maugkumeqqaoqmkq:
        }
        goto yyukimsicowasyqs;
        caaqcciyeymoqqmc:
        goto mcmmgacykcsowqiw;
        goto kkeakokiekuywmwy;
        mawsiqmcsguuokok:
        return $nsmgceoqaqogqmuw;
        goto kisaoauaekgkauui;
        kisaoauaekgkauui:
    }
    
    public static function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, $egomoiciasmiesww = false)
    {
        goto esokuuqukgaiiuao;
        esokuuqukgaiiuao:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ccwaiwmcccmswyau;
        fommkikuoyaeskiw:
        $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc;
        goto ouecgmgoaaswqomi;
        okkimkuusqsiemkk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto eesgmkwwiawcskie;
        ccwaiwmcccmswyau:
        if (!$kasgukgceywckyou) {
            goto egcyaksemqaakqgy;
        }
        goto qoiqosqiguawwekg;
        sociuiuiwsymiyam:
        if ($egomoiciasmiesww) {
            goto gckckwqqgkoyyagq;
        }
        goto gyyawusuyeigckys;
        gyyawusuyeigckys:
        $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc;
        goto iimeieccwuumkgim;
        qoiqosqiguawwekg:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $yuumukkaswwoywya)->wugqmqwisygwoeas(0);
        goto xiwcqyowugqukksy;
        oyoeowyeooyowomm:
        return $nsmgceoqaqogqmuw;
        goto ycaysuaiikcskakg;
        iimeieccwuumkgim:
        gckckwqqgkoyyagq:
        goto fommkikuoyaeskiw;
        eesgmkwwiawcskie:
        egcyaksemqaakqgy:
        goto oyoeowyeooyowomm;
        ouecgmgoaaswqomi:
        mickmqggcqwackce:
        goto okkimkuusqsiemkk;
        xiwcqyowugqukksy:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto mickmqggcqwackce;
        }
        goto sociuiuiwsymiyam;
        ycaysuaiikcskakg:
    }
    
    public static function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc = true)
    {
        goto mokoeuoicweqwksk;
        kqakgccawoogkiai:
        emguyukcyeeuyqyo:
        goto eoawcoaayikaiocu;
        gwswuqomwckekgum:
        return $nsmgceoqaqogqmuw;
        goto aqmemoyecceeceuc;
        kwwwckywsygiwcoc:
        if (!$kasgukgceywckyou) {
            goto wiyoqoiqsmwuiywa;
        }
        goto secswciggsguqauw;
        eoawcoaayikaiocu:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto aucuikgwyisgguye;
        secswciggsguqauw:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $omwmuycmeqcqokom)->wugqmqwisygwoeas(0);
        goto oigoswgkgwescakq;
        oigoswgkgwescakq:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto emguyukcyeeuyqyo;
        }
        goto oiakqemessasuyci;
        mokoeuoicweqwksk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kwwwckywsygiwcoc;
        oiakqemessasuyci:
        self::_appendHTML($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc);
        goto kqakgccawoogkiai;
        aucuikgwyisgguye:
        wiyoqoiqsmwuiywa:
        goto gwswuqomwckekgum;
        aqmemoyecceeceuc:
    }
    
    public static function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto muceomkycemgsccu;
        gyyiagqqegiygkag:
        if ($ewgwqamkygiqaawc) {
            goto ammsmyuaoogueqog;
        }
        goto kowocmqmoqwacmoa;
        kowocmqmoqwacmoa:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
        goto jggaoyqecgewsysy;
        cqyommqsimyoioeo:
        ciiikyqwkwsceouq:
        goto kiieueeyieewgcuu;
        acisamqweoscawig:
        ammsmyuaoogueqog:
        goto kkoswgsscqsgqmey;
        ywmukuyioksqgimq:
        mykqimauysqiessi:
        goto cqiagomawawqmcoo;
        kiieueeyieewgcuu:
        gmqoaasouciogwkq:
        goto ywmukuyioksqgimq;
        jggaoyqecgewsysy:
        goto aykiaquyoagykguu;
        goto acisamqweoscawig;
        muceomkycemgsccu:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qsuqueusmkasmeig;
        cymoaqswaeycikca:
        if (!$kasgukgceywckyou) {
            goto mykqimauysqiessi;
        }
        goto gyqaqyuewuquqkuy;
        qsuqueusmkasmeig:
        $aqykuigiuwmmcieu = '';
        goto cymoaqswaeycikca;
        uqmscgsoqeysooqc:
        if (!$kwmksuuciqkiymek) {
            goto gmqoaasouciogwkq;
        }
        goto awgmmoegiwqoswkk;
        kkoswgsscqsgqmey:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent;
        goto ikwagqguqmqsakug;
        gyqaqyuewuquqkuy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto uqmscgsoqeysooqc;
        awccsuqeikuacioa:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto ciiikyqwkwsceouq;
        }
        goto gyyiagqqegiygkag;
        ikwagqguqmqsakug:
        aykiaquyoagykguu:
        goto cqyommqsimyoioeo;
        cqiagomawawqmcoo:
        return $aqykuigiuwmmcieu;
        goto eoggqsukkackwoag;
        awgmmoegiwqoswkk:
        $ymyisaeksssueeik = $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto awccsuqeikuacioa;
        eoggqsukkackwoag:
    }
    
    public static function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto euguykkkieguasgy;
        gekaiqysouaoyaci:
        if (!$kasgukgceywckyou) {
            goto sskkmcmqeimgeuwg;
        }
        goto umeomugcsyuukqsu;
        euguykkkieguasgy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wgawmiiocosqkgos;
        cywmacoauegeacwk:
        sskkmcmqeimgeuwg:
        goto kgamqamcoaaqmgeg;
        kgamqamcoaaqmgeg:
        return $sogksuscggsicmac;
        goto ecwcasmmiooagwaq;
        mameecqeeiakmiks:
        cseiiqikiimgcmmy:
        goto cywmacoauegeacwk;
        swyakyokwmomoqow:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ekesimcsecgcuoms;
            yoggmucmsyeaseso:
            goto kaeomaoaieammmca;
            goto qqiqiaqoiesmuokq;
            qqmskoaugmqsaaqy:
            self::_removeNode($ymyisaeksssueeik);
            goto gsisioycuuewgmmw;
            scogoqgeeoeqsuku:
            kaeomaoaieammmca:
            goto mskguuoycuamgyim;
            aqasuykawsiekssw:
            iiumqmaicymgouwy:
            goto isicqmmaqumssuka;
            ekesimcsecgcuoms:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto iiumqmaicymgouwy;
            }
            goto qqmskoaugmqsaaqy;
            gsisioycuuewgmmw:
            if ($ewgwqamkygiqaawc) {
                goto ywiwagqgeomcwkss;
            }
            goto wcsimwcyyumkyuck;
            isicqmmaqumssuka:
            swqucgmugmekaoqc:
            goto msggcgusisiqukme;
            qqiqiaqoiesmuokq:
            ywiwagqgeomcwkss:
            goto woekwasoyuwmqgao;
            woekwasoyuwmqgao:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->textContent;
            goto scogoqgeeoeqsuku;
            wcsimwcyyumkyuck:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto yoggmucmsyeaseso;
            mskguuoycuamgyim:
            $sogksuscggsicmac[] = $aqykuigiuwmmcieu;
            goto aqasuykawsiekssw;
            msggcgusisiqukme:
        }
        goto mameecqeeiakmiks;
        umeomugcsyuukqsu:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto swyakyokwmomoqow;
        wgawmiiocosqkgos:
        $sogksuscggsicmac = [];
        goto gekaiqysouaoyaci;
        ecwcasmmiooagwaq:
    }
    
    public static function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, $ymkomoccmymcoiea = "\x73\164\171\x6c\145", $wamcomkuwysqgwgk = "\x25\x73\x3b")
    {
        goto ikcokaseywaaekgo;
        eqycmciquqaesuyk:
        eaqqweigimyoywwu:
        goto geycsscsmmgaiioe;
        yooqmugaioweswcs:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto iekuaksaiccyckaw;
        wqkqggsaacukeimg:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto eqycmciquqaesuyk;
        geycsscsmmgaiioe:
        return $nsmgceoqaqogqmuw;
        goto yskiummkweosoacm;
        wokoyuoomwmgwaoo:
        ukmuimokewiqqmsy:
        goto wqkqggsaacukeimg;
        ukqewcigokikemua:
        if (!$kasgukgceywckyou) {
            goto eaqqweigimyoywwu;
        }
        goto yooqmugaioweswcs;
        ikcokaseywaaekgo:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ukqewcigokikemua;
        iekuaksaiccyckaw:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto aoqcimcikseuucoy;
            okwyiswgsyymgius:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($ccamueccusigaaio);
            goto wakqmmwcieuuiygm;
            ekksaoygcqikaque:
            $yeacayasgueouoqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
            goto qkmswkmokigugkaw;
            cymysimiiemeqcmu:
            $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\x3b") . "\x3b";
            goto qaemeaiiueckkouq;
            makegskyquimcacu:
            iqeeygqsccygwqas:
            goto ggayissweeisyaqa;
            ywwcwwqawggauaso:
            if (!$eqgoocgaqwqcimie) {
                goto gcsacemoyykguega;
            }
            goto ekksaoygcqikaque;
            qaemeaiiueckkouq:
            acqwiccgsscgikyo:
            goto cgwiwgeekamooamc;
            wakqmmwcieuuiygm:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($ccamueccusigaaio);
            goto ywwcwwqawggauaso;
            aoqcimcikseuucoy:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto muoiuweiesyukmgu;
            }
            goto okwyiswgsyymgius;
            qkmswkmokigugkaw:
            if (!$wamcomkuwysqgwgk) {
                goto cyugiqiiaekakuec;
            }
            goto iykugimymaauokkm;
            cwkeqwwaageaiecm:
            if (!($ymkomoccmymcoiea == "\163\164\171\154\145")) {
                goto acqwiccgsscgikyo;
            }
            goto cymysimiiemeqcmu;
            cgwiwgeekamooamc:
            $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\40{$eqgoocgaqwqcimie}"));
            goto eygucgqouoacesei;
            eygucgqouoacesei:
            gcsacemoyykguega:
            goto csaqukkmgesgewkg;
            csaqukkmgesgewkg:
            muoiuweiesyukmgu:
            goto makegskyquimcacu;
            iykugimymaauokkm:
            $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie);
            goto suigamecaieiiuka;
            suigamecaieiiuka:
            cyugiqiiaekakuec:
            goto cwkeqwwaageaiecm;
            ggayissweeisyaqa:
        }
        goto wokoyuoomwmgwaoo;
        yskiummkweosoacm:
    }
    
    public static function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', $uuksaskqamgouosy = true)
    {
        goto gcymuqcsmwiywkum;
        gcymuqcsmwiywkum:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto iywkomquqqosokyq;
        iywkomquqqosokyq:
        if (!$kasgukgceywckyou) {
            goto gcseqcagkcsmgokw;
        }
        goto gumuwayiukgmeusw;
        ecayeacokkmyckmk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto yakwwcwqaokocwcy;
        ssgiyqwsgyyogmqm:
        return $nsmgceoqaqogqmuw;
        goto wymkemmkwawacmys;
        yakwwcwqaokocwcy:
        gcseqcagkcsmgokw:
        goto ssgiyqwsgyyogmqm;
        gumuwayiukgmeusw:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wiikemmmqckmwcma;
        weqgaswqweauwwyc:
        aakgkaqakoqgcsci:
        goto ecayeacokkmyckmk;
        wiikemmmqckmwcma:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uqmsuuwuuqcaqasy;
            qkiiwqyuiuqwqosc:
            uuiuemckcuckewow:
            goto kgmumymgeqemogoy;
            cqwsaoiqmiewkigq:
            $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo;
            goto qaugewusyagkoksg;
            qaugewusyagkoksg:
            goto qogiwqwqsaesiskg;
            goto cocouuwqwiaiyemu;
            eaucsgyigimwwuqg:
            qaciuiaecgowsukq:
            goto qkiiwqyuiuqwqosc;
            cocouuwqwiaiyemu:
            wymeuweieiomiuqw:
            goto msukmuseccwicmwg;
            quyaggaoeakmcqmo:
            if (!$goiaaeekgeqqmaqo) {
                goto yyiemgyowokesgww;
            }
            goto owkqqqyysqyaykow;
            owkqqqyysqyaykow:
            self::_createElement($ymyisaeksssueeik, $goiaaeekgeqqmaqo);
            goto makmsuccimeksawa;
            yggsmyqseogscusc:
            qogiwqwqsaesiskg:
            goto eaucsgyigimwwuqg;
            makmsuccimeksawa:
            yyiemgyowokesgww:
            goto yggsmyqseogscusc;
            uqmsuuwuuqcaqasy:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto qaciuiaecgowsukq;
            }
            goto ieqqyaeksqicikwe;
            ieqqyaeksqicikwe:
            if ($uuksaskqamgouosy) {
                goto wymeuweieiomiuqw;
            }
            goto cqwsaoiqmiewkigq;
            msukmuseccwicmwg:
            $ymyisaeksssueeik->nodeValue = '';
            goto quyaggaoeakmcqmo;
            kgmumymgeqemogoy:
        }
        goto weqgaswqweauwwyc;
        wymkemmkwawacmys:
    }
    
    private static function _updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = self::UPDATE_ACTION)
    {
        goto ywwqgsuuquocmqgk;
        owaccsusoeoacmwc:
        if (!$kasgukgceywckyou) {
            goto owqyqioycqkesioo;
        }
        goto ycwwyeycsiquwiyq;
        yayoumcciuyieeoi:
        return $kasgukgceywckyou;
        goto uyieackqwooqcqos;
        ewmcqauqqeywoqcs:
        gcmiguwuukeawaii:
        goto yayoumcciuyieeoi;
        ycwwyeycsiquwiyq:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto oimgigccqeqcsmoy;
            akiymyugggumyuic:
            if (!$kwmksuuciqkiymek) {
                goto iykceckkokwcsgoi;
            }
            goto qoeaosoumsicoqms;
            oimgigccqeqcsmoy:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto gqemygsogaaasyes;
            goicqkqwoomuowkw:
            try {
                $kwmksuuciqkiymek = $kwmksuuciqkiymek->eyagosskwwmgwmog();
            } catch (Exception $wgaoewqkwgomoaai) {
                goto wqmuwigkssqkoweq;
            }
            goto qagigacwywmweskc;
            moywwywcsegwawmi:
            wqmuwigkssqkoweq:
            goto mqugkocskuaokeiy;
            qagigacwywmweskc:
            qugokekqyguksees:
            goto akiymyugggumyuic;
            yicumoqkcoycyoyu:
            emsewgkwsmcgkoyy:
            goto wqmquqcyioicymwu;
            gqemygsogaaasyes:
            if (!(isset($siquossayskcwkea["\160\141\x72\x65\156\x74"]) && $siquossayskcwkea["\160\x61\x72\x65\x6e\x74"])) {
                goto qugokekqyguksees;
            }
            goto goicqkqwoomuowkw;
            qoeaosoumsicoqms:
            foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) {
                goto uucoqooygmoeuicu;
                ioomkicqkmoooiew:
                cceykcumeqigcqkg:
                goto asuwukmiyuqqgqiy;
                uucoqooygmoeuicu:
                $momcykaoccoymeig = 0;
                goto ugakmuywaoowqymc;
                asuwukmiyuqqgqiy:
                wwsamammkqcsocqc:
                goto cqcaimmsooakqmae;
                soyyokqommwwoyoy:
                foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                    goto iqomqkaueoackgwg;
                    iqomqkaueoackgwg:
                    self::_updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig);
                    goto ysowsoswoigywasy;
                    ysowsoswoigywasy:
                    $momcykaoccoymeig++;
                    goto yewcqwqmykemykca;
                    yewcqwqmykemykca:
                    gkmiesukccsqmcqy:
                    goto wauomwaoauygqsou;
                    wauomwaoauygqsou:
                }
                goto ioomkicqkmoooiew;
                ugakmuywaoowqymc:
                $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
                goto soyyokqommwwoyoy;
                cqcaimmsooakqmae:
            }
            goto yicumoqkcoycyoyu;
            wqmquqcyioicymwu:
            iykceckkokwcsgoi:
            goto moywwywcsegwawmi;
            mqugkocskuaokeiy:
        }
        goto ewmcqauqqeywoqcs;
        suumgeqekqgggugc:
        return $nsmgceoqaqogqmuw;
        goto emmcgqumuacycqgg;
        uyieackqwooqcqos:
        owqyqioycqkesioo:
        goto suumgeqekqgggugc;
        ywwqgsuuquocmqgk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto owaccsusoeoacmwc;
        emmcgqumuacycqgg:
    }
    
    private static function _updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig)
    {
        goto sewqkgoqqeiogwgc;
        iomkccwaewyicouy:
        omsqscuggqqkuigc:
        goto eemagcyswykuayai;
        sqygiwwewksqgica:
        sgqkaakkaugosoak:
        goto eukeqiqsekiaqkyk;
        aegcoomigmqwwaka:
        eaaicwyuwkogsies:
        goto guqgcqqsyaacwsuk;
        eukeqiqsekiaqkyk:
        akquuwsekmuoicae:
        goto uyewsowgcymwsuwu;
        mqimqkqmmswccmew:
        gwyacasmwuiceqwi:
        goto oamigoywuyowgcow;
        eoqccooyeaocyegw:
        $ymyqweogikqywwqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
        goto wwqmyeqgkqmkoosk;
        eemagcyswykuayai:
        $cusosqmyoqiykqgw = call_user_func($eqgoocgaqwqcimie, $momcykaoccoymeig, $gaeqamemwmwsyukm);
        goto aegcoomigmqwwaka;
        wwqmyeqgkqmkoosk:
        switch ($aiamqeawckcsuaou) {
            case self::REMOVE_ACTION:
                goto eyqiqgwmkyegsmgw;
                aieuuwkemkgccgqq:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($eqgoocgaqwqcimie);
                goto egmkyicacugkkoie;
                euqokgqeguqwueas:
                unset($ymyqweogikqywwqc[$uusmaiomayssaecw]);
                goto ssgkiscaiguwcyeq;
                eoggoeeymkgmcckw:
                if (!is_array($ymyqweogikqywwqc)) {
                    goto kikeekyeuiyoiuoc;
                }
                goto sgmwwuiygokssyeg;
                ygooeemqcwgcmwgy:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto eeycgakkgoakqaac;
                ioyamykqysewiueo:
                $uusmaiomayssaecw = array_search($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto gakugweoyossmeao;
                ssgkiscaiguwcyeq:
                omqyiocewcgomqks:
                goto eoggoeeymkgmcckw;
                egmkyicacugkkoie:
                $cusosqmyoqiykqgw = null;
                goto gqukqoawwwyuukwc;
                eyqiqgwmkyegsmgw:
                if (is_numeric($ymkomoccmymcoiea)) {
                    goto gemyysqyokmecguu;
                }
                goto emeycusyiaccgcoo;
                eeycgakkgoakqaac:
                keggycaoqkyockgu:
                goto gscqagmcimoymgeq;
                gscqagmcimoymgeq:
                goto eaqoukeuceuywwac;
                goto gqucksyyuwcwiyog;
                gqukqoawwwyuukwc:
                eaqoukeuceuywwac:
                goto ceuyeoigyioagyou;
                lmsiwkmayqggkuie:
                kikeekyeuiyoiuoc:
                goto mkeiwccsuyqyqaom;
                gakugweoyossmeao:
                if (!(false !== $uusmaiomayssaecw)) {
                    goto omqyiocewcgomqks;
                }
                goto euqokgqeguqwueas;
                gqucksyyuwcwiyog:
                gemyysqyokmecguu:
                goto aieuuwkemkgccgqq;
                ceuyeoigyioagyou:
                goto akquuwsekmuoicae;
                goto qagksgqcwesuogsi;
                sgmwwuiygokssyeg:
                $cusosqmyoqiykqgw = implode("\40", $ymyqweogikqywwqc);
                goto lmsiwkmayqggkuie;
                emeycusyiaccgcoo:
                $ymyqweogikqywwqc = explode("\40", $ymyqweogikqywwqc);
                goto ioyamykqysewiueo;
                mkeiwccsuyqyqaom:
                if ($cusosqmyoqiykqgw) {
                    goto keggycaoqkyockgu;
                }
                goto ygooeemqcwgcmwgy;
                qagksgqcwesuogsi:
            case self::RENAME_ACTION:
                goto qkueygwuioiiemuw;
                qkueygwuioiiemuw:
                $cusosqmyoqiykqgw = null;
                goto csgmgackuimwqgmw;
                csgmgackuimwqgmw:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto gsmueswaqwsqiqay;
                }
                goto siaqoyuoaccceoqy;
                hgmsiocesiimemgo:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto yewuugymokaikqmq;
                siaqoyuoaccceoqy:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto hgmsiocesiimemgo;
                yewuugymokaikqmq:
                gsmueswaqwsqiqay:
                goto scuasiqkgymskyoc;
                scuasiqkgymskyoc:
                goto akquuwsekmuoicae;
                goto uysasageemkuuusg;
                uysasageemkuuusg:
            case self::REPLACE_ACTION:
            case self::UPDATE_ACTION:
                goto iymwescsmiywgwui;
                sweokouicekqeyse:
                
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto skyckeomciwscaso;
                iymwescsmiywgwui:
                if ($aiamqeawckcsuaou === self::REPLACE_ACTION) {
                    goto smuioeqccoouuewa;
                }
                goto ceiaogwwoekcyacg;
                gweqggykcmiiawwc:
                goto ccasgycsymsuuwks;
                goto cmmuyseicemsyouq;
                cqamkyuumwogqcas:
                $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\x20{$cusosqmyoqiykqgw}";
                goto mqmquwuyocuoikae;
                cmmuyseicemsyouq:
                smuioeqccoouuewa:
                goto ewysmowcmmykqscm;
                ceiaogwwoekcyacg:
                if ($ymkomoccmymcoiea == "\143\154\141\x73\x73" && $ymyqweogikqywwqc) {
                    goto yeaoaicqksoigqwu;
                }
                goto gweqggykcmiiawwc;
                ewysmowcmmykqscm:
                $ymyqweogikqywwqc = null;
                goto sweokouicekqeyse;
                gswwomycucqmsywk:
                goto akquuwsekmuoicae;
                goto tmyuuoeywociqseo;
                mqmquwuyocuoikae:
                ccasgycsymsuuwks:
                goto gswwomycucqmsywk;
                skyckeomciwscaso:
                goto ccasgycsymsuuwks;
                goto mqgywkmwkwqgsius;
                mqgywkmwkwqgsius:
                yeaoaicqksoigqwu:
                goto cqamkyuumwogqcas;
                tmyuuoeywociqseo:
            case self::REPLACE_WITH_ACTION:
                goto eiwwmuekkuasciug;
                ocysawskymukqmeq:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto pamyaqouossmosoe;
                pamyaqouossmosoe:
                mkyomwyoeskcakyi:
                goto eckeocwysskicowi;
                acmoisuwocsciyae:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($cusosqmyoqiykqgw, $ymyqweogikqywwqc);
                goto ocysawskymukqmeq;
                eiwwmuekkuasciug:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto mkyomwyoeskcakyi;
                }
                goto acmoisuwocsciyae;
                eckeocwysskicowi:
                $cusosqmyoqiykqgw = null;
                goto oskymakeiqaoiukk;
                oskymakeiqaoiukk:
                goto akquuwsekmuoicae;
                goto mqssosgumiesimkw;
                mqssosgumiesimkw:
        }
        goto sqygiwwewksqgica;
        sewqkgoqqeiogwgc:
        if (is_callable($eqgoocgaqwqcimie)) {
            goto omsqscuggqqkuigc;
        }
        goto ewasskcgskcwkeyq;
        oamigoywuyowgcow:
        geasmqwwokmeqayu:
        goto uqogiiekomwssgee;
        guqgcqqsyaacwsuk:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto geasmqwwokmeqayu;
        }
        goto eoqccooyeaocyegw;
        ewasskcgskcwkeyq:
        $cusosqmyoqiykqgw = $eqgoocgaqwqcimie;
        goto isqacycsggwaoyqw;
        isqacycsggwaoyqw:
        goto eaaicwyuwkogsies;
        goto iomkccwaewyicouy;
        aqqqwiuwoymusgey:
        $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, $cusosqmyoqiykqgw);
        goto mqimqkqmmswccmew;
        uyewsowgcymwsuwu:
        if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) {
            goto gwyacasmwuiceqwi;
        }
        goto aqqqwiuwoymusgey;
        uqogiiekomwssgee:
    }
    
    public static function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $eagcmyswaakcwyec = [], $omwmuycmeqcqokom = "\144\151\166", $qmeuaeiseuacgiqc = true)
    {
        goto kymauouamycysiyy;
        kumiqmuaqymmkyic:
        if (!$kasgukgceywckyou) {
            goto eusmmqcsiiyiogqg;
        }
        goto iqecwuuaikqmkqyy;
        guyauwwommggyukw:
        soumiseyqqgqccym:
        goto akogicckgmsmmiag;
        maakkwkkckwawgqq:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto swwaaaeuyyocowgq;
        akogicckgmsmmiag:
        $omwmuycmeqcqokom = ManipulateHTML::qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq);
        goto qgwisswsyykiimuq;
        iqecwuuaikqmkqyy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wyiuscyymgoqkmws;
        wsymimooikcoeamc:
        $ygickiygyemsowyo = null;
        goto gmqcqaiwkusyiuey;
        wyiuscyymgoqkmws:
        $okcscwesammossuq = '';
        goto wsymimooikcoeamc;
        wggceogiyyyaoqca:
        return $nsmgceoqaqogqmuw;
        goto saicagwascmeamuk;
        gmqcqaiwkusyiuey:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto kmycyawgoewowaeq;
            wecayusimwoiswuw:
            wsgkyquaeocsaiqk:
            goto ioscumsgeuoekyik;
            aysoyukoimiemacc:
            kegeyiwiieqmocsk:
            goto wecayusimwoiswuw;
            oeqekywmewqowkwg:
            $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode;
            goto gseomoauqsuqccme;
            soeueuyguemogamc:
            $okcscwesammossuq .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto aysoyukoimiemacc;
            gseomoauqsuqccme:
            self::_removeNode($ymyisaeksssueeik);
            goto soeueuyguemogamc;
            kmycyawgoewowaeq:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto kegeyiwiieqmocsk;
            }
            goto oeqekywmewqowkwg;
            ioscumsgeuoekyik:
        }
        goto guyauwwommggyukw;
        kymauouamycysiyy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kumiqmuaqymmkyic;
        qgwisswsyykiimuq:
        self::_appendHTML($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc);
        goto maakkwkkckwawgqq;
        swwaaaeuyyocowgq:
        eusmmqcsiiyiogqg:
        goto wggceogiyyyaoqca;
        saicagwascmeamuk:
    }
}

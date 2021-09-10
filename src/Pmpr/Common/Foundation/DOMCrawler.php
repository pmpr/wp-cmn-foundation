<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const UPDATE_ACTION = "\x75\160\x64\141\164\x65";
    const REMOVE_ACTION = "\x72\145\155\157\166\x65";
    const RENAME_ACTION = "\162\145\156\x61\x6d\x65";
    const REPLACE_ACTION = "\162\145\x70\154\141\143\x65";
    const REPLACE_WITH_ACTION = "\162\145\160\154\141\x63\x65\137\167\151\x74\150";
    
    public static function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, $uuyoeicyoayimaoa = false, $ksaameoqigiaoigg = true)
    {
        goto cukksseqkekyucye;
        cegkuogwgoiomikw:
        ygyoayucuigaoacw:
        goto kwcsomkougiwgaco;
        kwcsomkougiwgaco:
        return $nsmgceoqaqogqmuw;
        goto gkcycgsoawqoyesg;
        omiqqwiemqykocci:
        coakmyawmquywmos:
        goto cegkuogwgoiomikw;
        yiayuooesmsmswia:
        foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) {
            goto aagkoumomwwcaeka;
            imyiqyuaoycegake:
            oegkcqakmussueqq:
            goto qeoumcqaaaecsace;
            eyooouiwwwumauao:
            goto wuwkeggsaiumowug;
            goto aguwgcwgoukkkmio;
            ayucyyiciocgyass:
            goto oegkcqakmussueqq;
            goto euoymauomemecuao;
            meiqsogowcogmgco:
            qkkiemwuuaaqqyas:
            goto agakiqgiuymqowkc;
            qeoumcqaaaecsace:
            yuqoyicsmawcauec:
            goto kykugggwwuqeokou;
            euoymauomemecuao:
            cweguimoaweiumii:
            goto skgeuaegiqaqgyaq;
            agakiqgiuymqowkc:
            if (call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) {
                goto ymumcsswaocykmeo;
            }
            goto eyooouiwwwumauao;
            qegkmgwymeckgwyg:
            goto oegkcqakmussueqq;
            goto meiqsogowcogmgco;
            aguwgcwgoukkkmio:
            ymumcsswaocykmeo:
            goto imyiqyuaoycegake;
            skgeuaegiqaqgyaq:
            goto wuwkeggsaiumowug;
            goto qegkmgwymeckgwyg;
            wueqcceaguewiucw:
            if ($ymyisaeksssueeik instanceof DOMElement) {
                goto qkkiemwuuaaqqyas;
            }
            goto ayucyyiciocgyass;
            aagkoumomwwcaeka:
            if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                goto cweguimoaweiumii;
            }
            goto wueqcceaguewiucw;
            kykugggwwuqeokou:
        }
        goto wyiciayqimeqqomu;
        wysuusuamkqeyqso:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto oogiaiuaumioummk;
        gwiykyqeeowisqqk:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto coakmyawmquywmos;
        }
        goto ggwakcmgwkcsasug;
        wyiciayqimeqqomu:
        wuwkeggsaiumowug:
        goto icimmqwesqkmeuce;
        icimmqwesqkmeuce:
        if (!$ksaameoqigiaoigg) {
            goto agwuyeemwsccoagc;
        }
        goto wysuusuamkqeyqso;
        oogiaiuaumioummk:
        agwuyeemwsccoagc:
        goto omiqqwiemqykocci;
        ocueeioeueqmisuo:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gwiykyqeeowisqqk;
        cukksseqkekyucye:
        if (!$ekiuyucoiagmscgy) {
            goto ygyoayucuigaoacw;
        }
        goto ocueeioeueqmisuo;
        ggwakcmgwkcsasug:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto yiayuooesmsmswia;
        gkcycgsoawqoyesg:
    }
    
    public static function _getCrawler($nsmgceoqaqogqmuw)
    {
        goto eioiqwykkuguaygs;
        eioiqwykkuguaygs:
        $kasgukgceywckyou = null;
        goto egisiwqggoqcgeum;
        uiewawqqakquwmsq:
        return $kasgukgceywckyou;
        goto ugksoyaaemqyoywa;
        yomgkcycysceyagw:
        iwcmsykogssougge:
        goto agisoqkoyekmsyga;
        uememeasawuoseqy:
        qeauoqcaeymayusu:
        goto uiewawqqakquwmsq;
        wuegeyoegwoqcumy:
        goto qeauoqcaeymayusu;
        goto kkucqmyecgwmioei;
        wcwwkcwqkicykkmi:
        $kasgukgceywckyou = new Crawler(mb_convert_encoding($nsmgceoqaqogqmuw, "\110\x54\x4d\x4c\55\x45\x4e\x54\x49\x54\111\105\123", "\x55\124\106\x2d\x38"));
        goto uememeasawuoseqy;
        kkucqmyecgwmioei:
        oqiciswgoamuceqq:
        goto wcwwkcwqkicykkmi;
        agisoqkoyekmsyga:
        $kasgukgceywckyou = $nsmgceoqaqogqmuw;
        goto wuegeyoegwoqcumy;
        qymucyymugqaaoyi:
        if ($nsmgceoqaqogqmuw && trim(preg_replace("\x2f\134\x73\x2b\x2f", "\40", $nsmgceoqaqogqmuw))) {
            goto oqiciswgoamuceqq;
        }
        goto wcyauuwqsicgkomk;
        egisiwqggoqcgeum:
        if ($nsmgceoqaqogqmuw instanceof Crawler) {
            goto iwcmsykogssougge;
        }
        goto qymucyymugqaaoyi;
        wcyauuwqsicgkomk:
        goto qeauoqcaeymayusu;
        goto yomgkcycysceyagw;
        ugksoyaaemqyoywa:
    }
    
    public static function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc)
    {
        goto smikqieaosiykeii;
        oukysgqmgiumaasc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto ggmmkmasyqcugkkm;
        }
        goto umgmgswkigyyweke;
        smikqieaosiykeii:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto oukysgqmgiumaasc;
        soasesuoocikiquy:
        return $nsmgceoqaqogqmuw;
        goto okuuaqumeeamcgiw;
        ocqmicyceamumeia:
        ggmmkmasyqcugkkm:
        goto soasesuoocikiquy;
        umgmgswkigyyweke:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto aiyeuqqmcksqsyeq;
        aiyeuqqmcksqsyeq:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto eqmmegqmukwekkkk;
            mimysauwikioomiy:
            wimkgcmkgcaewcwy:
            goto ymessmmcgesuuyys;
            uwawwskgqkieusog:
            egocwogikoqicuyo:
            goto coiqsauaqkqykkus;
            iwcaywweqcgmemko:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto muwaaaqcuwaeoakw;
            coiqsauaqkqykkus:
            csguigwqeomsyyqw:
            goto mimysauwikioomiy;
            muwaaaqcuwaeoakw:
            $omwmuycmeqcqokom->cgeyeoimiuyogose($koaqiaecmascwuyy);
            goto uwawwskgqkieusog;
            guwuqywoqwigamaw:
            if (!$koaqiaecmascwuyy) {
                goto egocwogikoqicuyo;
            }
            goto iwcaywweqcgmemko;
            scmgoisaawgacqyu:
            $koaqiaecmascwuyy = self::_createElementFromHtml($kasgukgceywckyou, $ewgwqamkygiqaawc);
            goto guwuqywoqwigamaw;
            eqmmegqmukwekkkk:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto csguigwqeomsyyqw;
            }
            goto scmgoisaawgacqyu;
            ymessmmcgesuuyys:
        }
        goto umgcmywyqkwsmsku;
        umgcmywyqkwsmsku:
        migcqoeeeukcyciu:
        goto ocqmicyceamumeia;
        okuuaqumeeamcgiw:
    }
    
    public static function umuecysoywoumgwo($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ewceaieowsgamkyi;
        qqcoeqwimyugqwuc:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto euycuguygmweyiwm;
        ceaewumsyymakaoc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto qquecwewqeeqyysw;
        }
        goto qqcoeqwimyugqwuc;
        euycuguygmweyiwm:
        return $kwmksuuciqkiymek->count() > 0;
        goto ykssqiacqucsmmac;
        ykssqiacqucsmmac:
        qquecwewqeeqyysw:
        goto sueokeomisikqomo;
        sueokeomisikqomo:
        return false;
        goto mggckwqcieykwima;
        ewceaieowsgamkyi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ceaewumsyymakaoc;
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
        qoimoeswgougaeoa:
        return $gaeqamemwmwsyukm;
        goto wsqkqmcuoauyescs;
        icqaoiyumasyygik:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto eiaqawokkeocqqsk;
        cckmokqegquyoaoy:
        $gaeqamemwmwsyukm = 0;
        goto icqaoiyumasyygik;
        equcgweimiaqsysk:
        gygmcmiciswgeswm:
        goto qoimoeswgougaeoa;
        icoacuwgkgqykgee:
        $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
        goto equcgweimiaqsysk;
        eiaqawokkeocqqsk:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto gygmcmiciswgeswm;
        }
        goto awmwcaycosymoesq;
        wsqkqmcuoauyescs:
    }
    
    private static function _removeNode(DOMNode $ymyisaeksssueeik)
    {
        $ymyisaeksssueeik->parentNode->uwqgywaceaaymckg($ymyisaeksssueeik);
    }
    
    public static function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ggcaqksgsoeecwak;
        kakskegscmoqcksc:
        kmqagkiwcsuimayg:
        goto syweoqsuaauksacw;
        mmmccuoeoeuskisk:
        $omwmuycmeqcqokom = null;
        goto ikmqwkwwskokemqy;
        syweoqsuaauksacw:
        qeimwiyggaoimmoq:
        goto qeqagimacwmgmqiq;
        ggcaqksgsoeecwak:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto eugiyageaomiuoki;
        ikmqwkwwskokemqy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto gumkwiqcaqusgwqm;
        qeqagimacwmgmqiq:
        return $nsmgceoqaqogqmuw;
        goto ekukcomgoyeiuici;
        gumkwiqcaqusgwqm:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ugecckaqeasoimos;
            qwsqoioiwieqgeee:
            csgowsgmcyswmiec:
            goto ammmoycqyaqeqiww;
            ceyeeieiggoamgwe:
            goto kmqagkiwcsuimayg;
            goto qwsqoioiwieqgeee;
            uckiysiyuksyuaoa:
            $nsmgceoqaqogqmuw = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo();
            goto ceyeeieiggoamgwe;
            gigkawsyquoowcms:
            $omwmuycmeqcqokom->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom);
            goto uckiysiyuksyuaoa;
            ammmoycqyaqeqiww:
            uquqecagkoyomiiy:
            goto okwouciqeqeuogos;
            ugecckaqeasoimos:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto csgowsgmcyswmiec;
            }
            goto goiiekmeukcsamca;
            goiiekmeukcsamca:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto gigkawsyquoowcms;
            okwouciqeqeuogos:
        }
        goto kakskegscmoqcksc;
        eugiyageaomiuoki:
        if (!$kasgukgceywckyou) {
            goto qeimwiyggaoimmoq;
        }
        goto mmmccuoeoeuskisk;
        ekukcomgoyeiuici:
    }
    
    private static function _getHtml($gykwsaeqegqowywy, $ggauoeuaesiymgee = '')
    {
        goto qeaeawocamciyiyk;
        ewouumyoyasgkgig:
        $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        goto sekgqycaaucagggo;
        yyakcqyqkuuokgqw:
        if (is_string($nsmgceoqaqogqmuw)) {
            goto keegiisaqayqmogu;
        }
        goto ewouumyoyasgkgig;
        sekgqycaaucagggo:
        keegiisaqayqmogu:
        goto woqoqsqomgswqicc;
        woqoqsqomgswqicc:
        return $nsmgceoqaqogqmuw;
        goto iiyamiqswaymisue;
        qeaeawocamciyiyk:
        try {
            goto gamiacsewcmmiece;
            wouesssgyqywasom:
            goto saqqooggaykweqce;
            goto uimeimmscccaqukm;
            qggomaqouiuasaum:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->yqwwccackoayicyy();
            goto gcwimimmgaoueegm;
            ciwweeyeeieqgowe:
            if (is_string($gykwsaeqegqowywy)) {
                goto yiqweuusyaikwqgg;
            }
            goto suogukqqcuaecgmg;
            gamiacsewcmmiece:
            $ikoqkmiqkckowcgg = "\74\x21\104\x4f\103\x54\x59\120\105\40\150\x74\155\154\x3e";
            goto oiymkikesysgoyma;
            iyocukugwkwoosqy:
            saqqooggaykweqce:
            goto kseweksyciigumec;
            oiymkikesysgoyma:
            $kkkqocwqmaokqcmc = strpos(strtolower($ggauoeuaesiymgee), strtolower($ikoqkmiqkckowcgg)) !== false;
            goto mosmyseyaemqewwk;
            goekuagoayyskiio:
            goto yiomcwmuukooycqq;
            goto iaewimwissuueacw;
            iaewimwissuueacw:
            kqmgqywmgomwmokg:
            goto qggomaqouiuasaum;
            ikiooiowwwwaygwi:
            goto saqqooggaykweqce;
            goto cwwguccuiymmeosu;
            okqoikkyquugiuia:
            yiomcwmuukooycqq:
            goto wouesssgyqywasom;
            mimseykuewemegow:
            wykieskeigmammue:
            goto sukokqcaoygeisos;
            emkcaamgumgwwyem:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee);
            goto eoeuieksgoyqcgsu;
            suogukqqcuaecgmg:
            throw new InvalidArgumentException();
            goto iwaqiakswyiuyyao;
            kuywseoceqkawokq:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy;
            goto iyocukugwkwoosqy;
            cwwguccuiymmeosu:
            yiqweuusyaikwqgg:
            goto kuywseoceqkawokq;
            mosmyseyaemqewwk:
            if ($gykwsaeqegqowywy instanceof Crawler) {
                goto wykieskeigmammue;
            }
            goto yoygkuwyqmgaqewi;
            escwyiwieqcweggy:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->skkueuquuqweeyqo();
            goto ikiooiowwwwaygwi;
            iwaqiakswyiuyyao:
            goto saqqooggaykweqce;
            goto mimseykuewemegow;
            sukokqcaoygeisos:
            if ($kkkqocwqmaokqcmc) {
                goto kqmgqywmgomwmokg;
            }
            goto emkcaamgumgwwyem;
            eoeuieksgoyqcgsu:
            $nsmgceoqaqogqmuw = preg_replace(["\x2f\x28\74\51\50\x68\145\x61\x64\51\50\133\x5e\76\x5d\x2a\x3f\51\x28\134\x2f\77\134\x73\52\76\51\x7c\x3c\134\x2f\150\x65\x61\144\76\x2f", "\57\50\x3c\51\x28\x62\x6f\x64\171\51\x28\x5b\136\76\135\52\x3f\51\x28\x5c\x2f\x3f\x5c\163\x2a\76\x29\174\74\x5c\x2f\x62\157\144\x79\x3e\57", "\57\50\160\x61\162\145\156\164\x3d\42\x29\50\x5b\x61\x2d\x7a\x41\55\132\x30\x2d\x39\x3a\73\134\56\134\x73\x5c\50\134\x29\x5c\x2d\134\x2c\x5d\52\51\x28\42\x29\57"], '', $nsmgceoqaqogqmuw);
            goto goekuagoayyskiio;
            uimeimmscccaqukm:
            aiewsymeiqiakqqs:
            goto escwyiwieqcweggy;
            gcwimimmgaoueegm:
            $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw;
            goto okqoikkyquugiuia;
            yoygkuwyqmgaqewi:
            if ($gykwsaeqegqowywy instanceof DOMDocument) {
                goto aiewsymeiqiakqqs;
            }
            goto ciwweeyeeieqgowe;
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
        iqeqegeqgsmmaeay:
        return $siquossayskcwkea;
        goto qoeoouiewgwuyayg;
        egcucgemmkamyiuu:
        $siquossayskcwkea = [];
        goto scequiwqaummymka;
        rgemwoeoywekwuww:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto cegaaikcsiwyswca;
        scequiwqaummymka:
        if (!$kasgukgceywckyou) {
            goto uasacoumuyqgeuqy;
        }
        goto rgemwoeoywekwuww;
        qikaumyuwkusqmcy:
        iqwqucswgosmiwyy:
        goto qcewkmiokmwaakyo;
        qcewkmiokmwaakyo:
        uasacoumuyqgeuqy:
        goto iqeqegeqgsmmaeay;
        cegaaikcsiwyswca:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto muqkgsmqakgwkaym;
            ckiswiiwkuugeogg:
            if (!$siquossayskcwkea) {
                goto mymcocumieiauquq;
            }
            goto esmaiecuukakamog;
            ywuqguicqikeqiog:
            beowceiucukcwego:
            goto uoygcyuomiyquumm;
            esmaiecuukakamog:
            goto iqwqucswgosmiwyy;
            goto keowaakoqimieymo;
            muqkgsmqakgwkaym:
            $siquossayskcwkea = self::wuuawmeqqyyyemsw($ymyisaeksssueeik);
            goto ckiswiiwkuugeogg;
            keowaakoqimieymo:
            mymcocumieiauquq:
            goto ywuqguicqikeqiog;
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
        kkgkywswiimccaog:
        foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
            $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue;
            yqisiuioymswaciy:
        }
        goto awukmeygqcaeyaeg;
        csoeiakqgmuockgk:
        return $siquossayskcwkea;
        goto ewuciaosgqwwagsc;
        wayaguckegemumuy:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto kwqqeiiqgiaoquag;
        }
        goto kkgkywswiimccaog;
        awukmeygqcaeyaeg:
        iqwsgmwqeskwqckm:
        goto cqcqsoqaumyuyemo;
        gkuukqkuaayagqwe:
        $siquossayskcwkea = [];
        goto wayaguckegemumuy;
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
        qokcmisciyieiwyi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto smuuwogesuiogomg;
        smuuwogesuiogomg:
        return $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto ayucyiqeeeumawgo;
        ayucyiqeeeumawgo:
    }
    
    public static function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto wikugsiimiguuwuw;
        eesgqauaaeqiycee:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) {
            goto kcsqyquoyoyssiik;
            yscsaueouasieayc:
            wwcwmiwqwiygmyka:
            goto smsgceqwueqiwmyi;
            ymmgkaaokqasmaum:
            foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) {
                goto jiykeiuymeoowsma;
                kgmmesqykuckqgqg:
                foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) {
                    $okcscwesammossuq[] = $wcgsoqmmciswkmiq;
                    meiiqwkkeguigquc:
                }
                goto mokaauiekiycqsii;
                akyieugiomeuaqsk:
                $uuswugicgoqcyiiy = $uumwowmewaqyggce->ownerDocument->auokmyiaciikcekk($ymqmyyeuycgmigyo);
                goto yukykeccsygagcsm;
                wcqkwcqqqsygagsg:
                ecmowkisqwcgyykc:
                goto owuommygccmkuues;
                sqowskoquogmiiwg:
                foreach ($uumwowmewaqyggce->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto musoessicqgioaci;
                    csymkqmseeouiacg:
                    ygcocguewqswqcsa:
                    goto qykaososcekymqeo;
                    cgcyciqqcqiimwse:
                    $uuswugicgoqcyiiy->cmgoqeksagmigwmg($qmgyyqwkskaiwcqg, $giueyucwwwwiooim);
                    goto csymkqmseeouiacg;
                    musoessicqgioaci:
                    $qmgyyqwkskaiwcqg = $sicussmmuqmeqygw->nodeName;
                    goto aowacowggwuykewe;
                    aowacowggwuykewe:
                    $giueyucwwwwiooim = $sicussmmuqmeqygw->nodeValue;
                    goto cgcyciqqcqiimwse;
                    qykaososcekymqeo:
                }
                goto wcqkwcqqqsygagsg;
                owuommygccmkuues:
                $uumwowmewaqyggce->parentNode->caqmeawgoiceoymu($uuswugicgoqcyiiy, $uumwowmewaqyggce);
                goto qgyeaeoyqscmuqqy;
                akiuccuwusyiywaa:
                cyiwuweakowgmamu:
                goto sqowskoquogmiiwg;
                qgyeaeoyqscmuqqy:
                iqewyeqegsuemqgc:
                goto cwaukuukmsqkqqoc;
                jiykeiuymeoowsma:
                if (!$uumwowmewaqyggce instanceof DOMNode) {
                    goto iqewyeqegsuemqgc;
                }
                goto gcqqqceoakukiuim;
                gcqqqceoakukiuim:
                $okcscwesammossuq = [];
                goto kgmmesqykuckqgqg;
                cwaukuukmsqkqqoc:
                cqkeucwwyywigyqk:
                goto mosmyyysosawmqku;
                yukykeccsygagcsm:
                foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) {
                    $uuswugicgoqcyiiy->cgeyeoimiuyogose($uumwowmewaqyggce->ownerDocument->gqskweuukuceuaoq($wcgsoqmmciswkmiq, true));
                    isuyseouiawyweke:
                }
                goto akiuccuwusyiywaa;
                mokaauiekiycqsii:
                yiqwwseykuimmeuc:
                goto akyieugiomeuaqsk;
                mosmyyysosawmqku:
            }
            goto yscsaueouasieayc;
            smsgceqwueqiwmyi:
            wymogskocqsmiimw:
            goto ywoisggyqsommewa;
            kcsqyquoyoyssiik:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto ymmgkaaokqasmaum;
            ywoisggyqsommewa:
        }
        goto qmsikcqgaumiyego;
        cckseausycyccake:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto migkmccwwikseoos;
        qmsikcqgaumiyego:
        equeyqisaekucoyq:
        goto cckseausycyccake;
        wikugsiimiguuwuw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto uqwmcimomeomgqgi;
        uqwmcimomeomgqgi:
        if (!$kasgukgceywckyou) {
            goto kkewwsgkgooicawy;
        }
        goto eesgqauaaeqiycee;
        migkmccwwikseoos:
        kkewwsgkgooicawy:
        goto mquaoucacecoymqu;
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
        cuqcgywmuqoakieq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto imcqqemiwqqegsmk;
        eqiesmsygmemseog:
        wcqggkigoogqmmqk:
        goto kaooossoiysywsuk;
        siwscqyokoekmooc:
        uaaigcisokikuqgu:
        goto ggqwikwoioeuqsam;
        iycosyeceoegukgg:
        self::_removeElement($kasgukgceywckyou, $sgksuwkwyimqgaii);
        goto dsqeweimquoouiyo;
        kaooossoiysywsuk:
        yeqgqmywegcwsiow:
        goto sqqqwsqwmossuima;
        sqqqwsqwmossuima:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto siwscqyokoekmooc;
        ggqwikwoioeuqsam:
        return $nsmgceoqaqogqmuw;
        goto kyiikasuaqaeigae;
        qmuqcuumuagkyggg:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) {
            self::_removeElement($kasgukgceywckyou, $yuumukkaswwoywya);
            cceewgewommawcii:
        }
        goto eqiesmsygmemseog;
        dsqeweimquoouiyo:
        goto yeqgqmywegcwsiow;
        goto gmmwukkcaouckswu;
        mcygayiqasgoyqss:
        if (is_array($sgksuwkwyimqgaii)) {
            goto wmcsksugskiskyyy;
        }
        goto iycosyeceoegukgg;
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
        asysseskuwwesiqc:
        yumegkesogwyweiq:
        goto ymkakuuweqoysagc;
        yceeiagmcyqcayes:
        ocgiuagqmmqakago:
        goto uyeimkwsuoqgewgy;
        mukeowkkueukysww:
        if (!$kasgukgceywckyou) {
            goto yumegkesogwyweiq;
        }
        goto iyemcyamksqakiiw;
        uyeimkwsuoqgewgy:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto asysseskuwwesiqc;
        iyemcyamksqakiiw:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto mgkokmqyecocwwgo;
            wqemgeeosmaqkuye:
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                goto kgaciayyiuykqyko;
                wymyuyaiikioyeao:
                foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto meeiyyaqksugkeai;
                    cyuwoeiiwcsqukku:
                    ceomusueeoaqyume:
                    goto pouyossuowuwcsma;
                    meeiyyaqksugkeai:
                    $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName;
                    goto teuusocwmquakkyc;
                    teuusocwmquakkyc:
                    if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak)) {
                        goto gsegcywyaasmwyko;
                    }
                    goto ykemkuywkaowmyuc;
                    ykemkuywkaowmyuc:
                    $ymyisaeksssueeik->cmgoqeksagmigwmg($siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue);
                    goto skmkmwkyeuowoaqa;
                    skmkmwkyeuowoaqa:
                    gsegcywyaasmwyko:
                    goto cyuwoeiiwcsqukku;
                    pouyossuowuwcsma:
                }
                goto auqwmowcyqaioyse;
                okeqecawkekacsqc:
                yeewwwkywuowoscq:
                goto smqsooyiiesuyoos;
                agkwamguicmweoom:
                $msqkueqksqwmskak = array_keys($siquossayskcwkea);
                goto wymyuyaiikioyeao;
                caqmiuioaesgyaug:
                msiuouqukawgegwo:
                goto okeqecawkekacsqc;
                auqwmowcyqaioyse:
                kaccyaysqwkaoyka:
                goto caqmiuioaesgyaug;
                kgaciayyiuykqyko:
                if (!$ymyisaeksssueeik instanceof DOMNode) {
                    goto msiuouqukawgegwo;
                }
                goto agkwamguicmweoom;
                smqsooyiiesuyoos:
            }
            goto haiiaygcugigaggi;
            haiiaygcugigaggi:
            cqwmseemsiiaqgoo:
            goto eeyoaucukkaesqmk;
            mgkokmqyecocwwgo:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto wqemgeeosmaqkuye;
            eeyoaucukkaesqmk:
            aocyeyuakyusikwq:
            goto xawawcwogwekqmqc;
            xawawcwogwekqmqc:
        }
        goto yceeiagmcyqcayes;
        coscuikaoymwwmii:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mukeowkkueukysww;
        ymkakuuweqoysagc:
        return $nsmgceoqaqogqmuw;
        goto cicooguqkeoeyges;
        cicooguqkeoeyges:
    }
    
    public static function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _find(?Crawler $kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto ugmqiuwksqaqywco;
        ikiyguwaiacioake:
        return $kasgukgceywckyou->filter($yuumukkaswwoywya);
        goto comcmyekisewieyc;
        qqaoqesyysccooug:
        return $kasgukgceywckyou;
        goto cemammoacacweske;
        comcmyekisewieyc:
        gwuisuuwecwcaaik:
        goto qqaoqesyysccooug;
        ugmqiuwksqaqywco:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto gwuisuuwecwcaaik;
        }
        goto ikiyguwaiacioake;
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
        mmyqweeceiaeqqus:
        aokkmsyimyouoeim:
        goto cmiqweaugcqmwoiq;
        kusuckgswgkceusi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ugogcmgasecqmaqo;
        cmiqweaugcqmwoiq:
    }
    
    public static function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee)
    {
        goto gisygciesowawkqy;
        ykuiuuqwkwwgeqko:
        kagiaysuecmceegy:
        goto ymgkgeqimsusocoy;
        gisygciesowawkqy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gccikccauwosemee;
        ymgkgeqimsusocoy:
        return $eqgoocgaqwqcimie;
        goto qeywecigqgseiogw;
        siyawoacgucmaoky:
        ugcgmougmeoayiea:
        goto ykuiuuqwkwwgeqko;
        wgocyuiekyasmquq:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ywkkyykyayusymai;
            uuawmiyqysumgaqy:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee);
            goto uyusyuseakqmycim;
            qoaiwgymwioiissy:
            yayuqeqkcqmiiiyw:
            goto qqqyksacwuumcmia;
            ywkkyykyayusymai:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto kaqeqoaoqacmssmg;
            }
            goto uuawmiyqysumgaqy;
            sccqusyuqeiugcem:
            goto ugcgmougmeoayiea;
            goto qoaiwgymwioiissy;
            uyusyuseakqmycim:
            if (!$eqgoocgaqwqcimie) {
                goto yayuqeqkcqmiiiyw;
            }
            goto sccqusyuqeiugcem;
            qqqyksacwuumcmia:
            kaqeqoaoqacmssmg:
            goto misgeimskqgmumga;
            misgeimskqgmumga:
            agaaausyuimymgmm:
            goto iqeksucuwucgsuaq;
            iqeksucuwucgsuaq:
        }
        goto siyawoacgucmaoky;
        gccikccauwosemee:
        $eqgoocgaqwqcimie = '';
        goto cowscsiukyiwymqi;
        cowscsiukyiwymqi:
        if (!$kasgukgceywckyou) {
            goto kagiaysuecmceegy;
        }
        goto emsquuamiesiqseq;
        emsquuamiesiqseq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wgocyuiekyasmquq;
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
        foreach ($qeaoumiemyikogys->auamuceiowkuacoq("\x62\157\144\171")->item(0)->childNodes as $ymyisaeksssueeik) {
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
        aeawksowymsuogeu:
        $kgcekiucekagcgai = self::igyokgqyiouieioo($kasgukgceywckyou);
        goto wgyakmueooeqsyqc;
        wiyauoggygqoymwu:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto aeawksowymsuogeu;
        wgyakmueooeqsyqc:
        return $kgcekiucekagcgai->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
        goto wgyukgmocmigoeuo;
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
        kwaammsskmiamace:
        goto meomioiwwciyyyue;
        goto amacugyqcmgqiaog;
        gmgkmqouwygkwuua:
        myyycckqeikqiuqi:
        goto kmkmisyucykygqoc;
        ugmowoyeoowiiqie:
        if ($qmeuaeiseuacgiqc) {
            goto yagiokukkmimaoae;
        }
        goto coqewawckmigciso;
        ooiockqsscsuqokc:
        euguuygaocimsesi:
        goto acsgyykcowwkyayy;
        amacugyqcmgqiaog:
        yagiokukkmimaoae:
        goto ccssuekkawuwwkyk;
        coqewawckmigciso:
        $omwmuycmeqcqokom->kqgwgkuykuumwcgw($nsmgceoqaqogqmuw, $omwmuycmeqcqokom->firstChild);
        goto kwaammsskmiamace;
        ueowcqqgaoysmqie:
        foreach (self::_find($kasgukgceywckyou, "\142\157\x64\x79") as $ymyisaeksssueeik) {
            goto oaosaqoqiiciwgwg;
            oaosaqoqiiciwgwg:
            $ymyisaeksssueeik = $omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true);
            goto kcaswmekegcguiwu;
            kcaswmekegcguiwu:
            self::_appendHTML($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc);
            goto yceyawgskeqggcuy;
            yceyawgskeqggcuy:
            qiomiuawymsqimgk:
            goto msweyewumoisksiy;
            msweyewumoisksiy:
        }
        goto ooiockqsscsuqokc;
        uucwuqeucsiykagi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ueowcqqgaoysmqie;
        wuwggkokqumggyiu:
        uyqckmcowkimsmyq:
        goto ugmowoyeoowiiqie;
        qmymeeegusssawmu:
        if (!$omwmuycmeqcqokom instanceof DOMNode) {
            goto ysoesyqiaaugywgi;
        }
        goto ssecwqeouoeamsio;
        kecqwqseaiaomoao:
        meomioiwwciyyyue:
        goto gmgkmqouwygkwuua;
        acsgyykcowwkyayy:
        goto myyycckqeikqiuqi;
        goto wuwggkokqumggyiu;
        kmkmisyucykygqoc:
        ysoesyqiaaugywgi:
        goto wccegsoaeisquyeq;
        ccssuekkawuwwkyk:
        $omwmuycmeqcqokom->cgeyeoimiuyogose($nsmgceoqaqogqmuw);
        goto kecqwqseaiaomoao;
        ssecwqeouoeamsio:
        if ($nsmgceoqaqogqmuw instanceof DOMNode) {
            goto uyqckmcowkimsmyq;
        }
        goto uucwuqeucsiykagi;
        wccegsoaeisquyeq:
    }
    
    public static function wesimowqwekiqiow($nsmgceoqaqogqmuw, $eeqsmkqmsowmicwi = "\x73\164\x79\154\x65", $cussukyecoaeayqk = true)
    {
        goto cycoyeooqscgugwa;
        wumeiwysoiscimiu:
        if (!$kasgukgceywckyou) {
            goto mwimaeocgaqeiukm;
        }
        goto eequmkcwsuakwwmo;
        kqawgskqiimioaku:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ugaoeiuoosyggsmi;
            gqmgeusocymaikoy:
            mksggqikmumuycga:
            goto iigwwyogmwesyoau;
            gsquqssmimkgcoga:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($yuumukkaswwoywya);
            goto gkcsgskucsicakwg;
            ugaoeiuoosyggsmi:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto mksggqikmumuycga;
            }
            goto yoeiuoyekameacwu;
            aaccwuemygqmicme:
            $ymyisaeksssueeik->cmgoqeksagmigwmg("\x63\154\141\x73\163", $egkyssmuqcwaciya);
            goto qsiqckciwyomqwue;
            oyquokessoouwuke:
            $acqqmqmcquukaqsc = "\x2e{$omasqoksqewuwwkq}\x7b{$eqgoocgaqwqcimie}\x7d";
            goto mgykueyyyoueykgm;
            ioqkkgikqygkemce:
            $eqgoocgaqwqcimie = str_replace("\41\x69\x6d\x70\x6f\162\164\x61\156\x74", '', $eqgoocgaqwqcimie);
            goto asoycqscmioaaggw;
            iigwwyogmwesyoau:
            eoskieimkcimmwio:
            goto maugkumeqqaoqmkq;
            cquumoyicacciqei:
            if (!$eqgoocgaqwqcimie) {
                goto ewyukeoyymaooaqa;
            }
            goto gsquqssmimkgcoga;
            asoycqscmioaaggw:
            emkuqqeesmiycqqo:
            goto oyquokessoouwuke;
            yoeiuoyekameacwu:
            $yuumukkaswwoywya = "\163\x74\x79\x6c\145";
            goto wwmggkkyegumakew;
            swiaoqqqyqusscqi:
            if ($cussukyecoaeayqk) {
                goto emkuqqeesmiycqqo;
            }
            goto ioqkkgikqygkemce;
            skqyeawoqyssamii:
            $egkyssmuqcwaciya .= "\40{$omasqoksqewuwwkq}";
            goto aaccwuemygqmicme;
            wwmggkkyegumakew:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($yuumukkaswwoywya);
            goto cquumoyicacciqei;
            qsiqckciwyomqwue:
            ewyukeoyymaooaqa:
            goto gqmgeusocymaikoy;
            gkcsgskucsicakwg:
            $omasqoksqewuwwkq = ManipulateString::uniqid(5);
            goto swiaoqqqyqusscqi;
            oiksiqocuawwgeek:
            $egkyssmuqcwaciya = $ymyisaeksssueeik->waecsyqmwascmqoa("\x63\x6c\141\x73\163");
            goto skqyeawoqyssamii;
            mgykueyyyoueykgm:
            $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc;
            goto oiksiqocuawwgeek;
            maugkumeqqaoqmkq:
        }
        goto yyukimsicowasyqs;
        mkaoooyookegwgwg:
        mcmmgacykcsowqiw:
        goto eaasaucuyacqooey;
        mawsiqmcsguuokok:
        return $nsmgceoqaqogqmuw;
        goto kisaoauaekgkauui;
        eequmkcwsuakwwmo:
        $kswaimykcacqyaay = self::_find($kasgukgceywckyou, "\x68\145\141\144\40\76\x20{$eeqsmkqmsowmicwi}")->wugqmqwisygwoeas(0);
        goto mcqkmiukmosqwemy;
        guwmecmmcueokcgu:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, "\133\163\164\x79\154\145\135");
        goto kqawgskqiimioaku;
        eaasaucuyacqooey:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto uoqwymoegwoweuyk;
        yyukimsicowasyqs:
        ooueyocsuseuawgc:
        goto myusuecogkwoqimq;
        caaqcciyeymoqqmc:
        goto mcmmgacykcsowqiw;
        goto kkeakokiekuywmwy;
        suqosyewmcawwouy:
        ieyowiusaeousyse:
        goto guwmecmmcueokcgu;
        myusuecogkwoqimq:
        if ($kswaimykcacqyaay instanceof DOMElement) {
            goto qauqcecycoswuoyc;
        }
        goto uqsmsqoeimicguwe;
        uqsmsqoeimicguwe:
        self::pmouaioykaoceyag($kasgukgceywckyou, "\x68\145\x61\144", $ewgwqamkygiqaawc);
        goto caaqcciyeymoqqmc;
        uoqwymoegwoweuyk:
        mwimaeocgaqeiukm:
        goto mawsiqmcsguuokok;
        ksccwuecqkqkawck:
        if (!$kswaimykcacqyaay instanceof DOMNode) {
            goto ieyowiusaeousyse;
        }
        goto eeeaumqcsieckaoc;
        cycoyeooqscgugwa:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wumeiwysoiscimiu;
        kkeakokiekuywmwy:
        qauqcecycoswuoyc:
        goto gmcsqgoweawewags;
        eeeaumqcsieckaoc:
        $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent;
        goto suqosyewmcawwouy;
        gmcsqgoweawewags:
        $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc;
        goto mkaoooyookegwgwg;
        mcqkmiukmosqwemy:
        $ewgwqamkygiqaawc = '';
        goto ksccwuecqkqkawck;
        kisaoauaekgkauui:
    }
    
    public static function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, $egomoiciasmiesww = false)
    {
        goto esokuuqukgaiiuao;
        fommkikuoyaeskiw:
        $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc;
        goto ouecgmgoaaswqomi;
        iimeieccwuumkgim:
        gckckwqqgkoyyagq:
        goto fommkikuoyaeskiw;
        esokuuqukgaiiuao:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ccwaiwmcccmswyau;
        ouecgmgoaaswqomi:
        mickmqggcqwackce:
        goto okkimkuusqsiemkk;
        xiwcqyowugqukksy:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto mickmqggcqwackce;
        }
        goto sociuiuiwsymiyam;
        gyyawusuyeigckys:
        $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc;
        goto iimeieccwuumkgim;
        eesgmkwwiawcskie:
        egcyaksemqaakqgy:
        goto oyoeowyeooyowomm;
        okkimkuusqsiemkk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto eesgmkwwiawcskie;
        sociuiuiwsymiyam:
        if ($egomoiciasmiesww) {
            goto gckckwqqgkoyyagq;
        }
        goto gyyawusuyeigckys;
        ccwaiwmcccmswyau:
        if (!$kasgukgceywckyou) {
            goto egcyaksemqaakqgy;
        }
        goto qoiqosqiguawwekg;
        qoiqosqiguawwekg:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $yuumukkaswwoywya)->wugqmqwisygwoeas(0);
        goto xiwcqyowugqukksy;
        oyoeowyeooyowomm:
        return $nsmgceoqaqogqmuw;
        goto ycaysuaiikcskakg;
        ycaysuaiikcskakg:
    }
    
    public static function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc = true)
    {
        goto mokoeuoicweqwksk;
        oigoswgkgwescakq:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto emguyukcyeeuyqyo;
        }
        goto oiakqemessasuyci;
        mokoeuoicweqwksk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kwwwckywsygiwcoc;
        kwwwckywsygiwcoc:
        if (!$kasgukgceywckyou) {
            goto wiyoqoiqsmwuiywa;
        }
        goto secswciggsguqauw;
        eoawcoaayikaiocu:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto aucuikgwyisgguye;
        oiakqemessasuyci:
        self::_appendHTML($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc);
        goto kqakgccawoogkiai;
        aucuikgwyisgguye:
        wiyoqoiqsmwuiywa:
        goto gwswuqomwckekgum;
        gwswuqomwckekgum:
        return $nsmgceoqaqogqmuw;
        goto aqmemoyecceeceuc;
        kqakgccawoogkiai:
        emguyukcyeeuyqyo:
        goto eoawcoaayikaiocu;
        secswciggsguqauw:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $omwmuycmeqcqokom)->wugqmqwisygwoeas(0);
        goto oigoswgkgwescakq;
        aqmemoyecceeceuc:
    }
    
    public static function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto muceomkycemgsccu;
        gyqaqyuewuquqkuy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto uqmscgsoqeysooqc;
        kkoswgsscqsgqmey:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent;
        goto ikwagqguqmqsakug;
        jggaoyqecgewsysy:
        goto aykiaquyoagykguu;
        goto acisamqweoscawig;
        ikwagqguqmqsakug:
        aykiaquyoagykguu:
        goto cqyommqsimyoioeo;
        qsuqueusmkasmeig:
        $aqykuigiuwmmcieu = '';
        goto cymoaqswaeycikca;
        cymoaqswaeycikca:
        if (!$kasgukgceywckyou) {
            goto mykqimauysqiessi;
        }
        goto gyqaqyuewuquqkuy;
        kowocmqmoqwacmoa:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
        goto jggaoyqecgewsysy;
        cqyommqsimyoioeo:
        ciiikyqwkwsceouq:
        goto kiieueeyieewgcuu;
        cqiagomawawqmcoo:
        return $aqykuigiuwmmcieu;
        goto eoggqsukkackwoag;
        awgmmoegiwqoswkk:
        $ymyisaeksssueeik = $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto awccsuqeikuacioa;
        awccsuqeikuacioa:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto ciiikyqwkwsceouq;
        }
        goto gyyiagqqegiygkag;
        ywmukuyioksqgimq:
        mykqimauysqiessi:
        goto cqiagomawawqmcoo;
        kiieueeyieewgcuu:
        gmqoaasouciogwkq:
        goto ywmukuyioksqgimq;
        uqmscgsoqeysooqc:
        if (!$kwmksuuciqkiymek) {
            goto gmqoaasouciogwkq;
        }
        goto awgmmoegiwqoswkk;
        gyyiagqqegiygkag:
        if ($ewgwqamkygiqaawc) {
            goto ammsmyuaoogueqog;
        }
        goto kowocmqmoqwacmoa;
        acisamqweoscawig:
        ammsmyuaoogueqog:
        goto kkoswgsscqsgqmey;
        muceomkycemgsccu:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qsuqueusmkasmeig;
        eoggqsukkackwoag:
    }
    
    public static function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto euguykkkieguasgy;
        mameecqeeiakmiks:
        cseiiqikiimgcmmy:
        goto cywmacoauegeacwk;
        swyakyokwmomoqow:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ekesimcsecgcuoms;
            wcsimwcyyumkyuck:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto yoggmucmsyeaseso;
            woekwasoyuwmqgao:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->textContent;
            goto scogoqgeeoeqsuku;
            mskguuoycuamgyim:
            $sogksuscggsicmac[] = $aqykuigiuwmmcieu;
            goto aqasuykawsiekssw;
            aqasuykawsiekssw:
            iiumqmaicymgouwy:
            goto isicqmmaqumssuka;
            yoggmucmsyeaseso:
            goto kaeomaoaieammmca;
            goto qqiqiaqoiesmuokq;
            ekesimcsecgcuoms:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto iiumqmaicymgouwy;
            }
            goto qqmskoaugmqsaaqy;
            qqmskoaugmqsaaqy:
            self::_removeNode($ymyisaeksssueeik);
            goto gsisioycuuewgmmw;
            isicqmmaqumssuka:
            swqucgmugmekaoqc:
            goto msggcgusisiqukme;
            gsisioycuuewgmmw:
            if ($ewgwqamkygiqaawc) {
                goto ywiwagqgeomcwkss;
            }
            goto wcsimwcyyumkyuck;
            scogoqgeeoeqsuku:
            kaeomaoaieammmca:
            goto mskguuoycuamgyim;
            qqiqiaqoiesmuokq:
            ywiwagqgeomcwkss:
            goto woekwasoyuwmqgao;
            msggcgusisiqukme:
        }
        goto mameecqeeiakmiks;
        gekaiqysouaoyaci:
        if (!$kasgukgceywckyou) {
            goto sskkmcmqeimgeuwg;
        }
        goto umeomugcsyuukqsu;
        euguykkkieguasgy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wgawmiiocosqkgos;
        wgawmiiocosqkgos:
        $sogksuscggsicmac = [];
        goto gekaiqysouaoyaci;
        kgamqamcoaaqmgeg:
        return $sogksuscggsicmac;
        goto ecwcasmmiooagwaq;
        umeomugcsyuukqsu:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto swyakyokwmomoqow;
        cywmacoauegeacwk:
        sskkmcmqeimgeuwg:
        goto kgamqamcoaaqmgeg;
        ecwcasmmiooagwaq:
    }
    
    public static function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, $ymkomoccmymcoiea = "\x73\164\x79\x6c\x65", $wamcomkuwysqgwgk = "\45\x73\73")
    {
        goto ikcokaseywaaekgo;
        ikcokaseywaaekgo:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ukqewcigokikemua;
        ukqewcigokikemua:
        if (!$kasgukgceywckyou) {
            goto eaqqweigimyoywwu;
        }
        goto yooqmugaioweswcs;
        yooqmugaioweswcs:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto iekuaksaiccyckaw;
        geycsscsmmgaiioe:
        return $nsmgceoqaqogqmuw;
        goto yskiummkweosoacm;
        eqycmciquqaesuyk:
        eaqqweigimyoywwu:
        goto geycsscsmmgaiioe;
        iekuaksaiccyckaw:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto aoqcimcikseuucoy;
            qaemeaiiueckkouq:
            acqwiccgsscgikyo:
            goto cgwiwgeekamooamc;
            wakqmmwcieuuiygm:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($ccamueccusigaaio);
            goto ywwcwwqawggauaso;
            cymysimiiemeqcmu:
            $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\x3b") . "\73";
            goto qaemeaiiueckkouq;
            okwyiswgsyymgius:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($ccamueccusigaaio);
            goto wakqmmwcieuuiygm;
            csaqukkmgesgewkg:
            muoiuweiesyukmgu:
            goto makegskyquimcacu;
            aoqcimcikseuucoy:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto muoiuweiesyukmgu;
            }
            goto okwyiswgsyymgius;
            makegskyquimcacu:
            iqeeygqsccygwqas:
            goto ggayissweeisyaqa;
            eygucgqouoacesei:
            gcsacemoyykguega:
            goto csaqukkmgesgewkg;
            ekksaoygcqikaque:
            $yeacayasgueouoqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
            goto qkmswkmokigugkaw;
            cwkeqwwaageaiecm:
            if (!($ymkomoccmymcoiea == "\x73\x74\x79\154\x65")) {
                goto acqwiccgsscgikyo;
            }
            goto cymysimiiemeqcmu;
            qkmswkmokigugkaw:
            if (!$wamcomkuwysqgwgk) {
                goto cyugiqiiaekakuec;
            }
            goto iykugimymaauokkm;
            iykugimymaauokkm:
            $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie);
            goto suigamecaieiiuka;
            ywwcwwqawggauaso:
            if (!$eqgoocgaqwqcimie) {
                goto gcsacemoyykguega;
            }
            goto ekksaoygcqikaque;
            suigamecaieiiuka:
            cyugiqiiaekakuec:
            goto cwkeqwwaageaiecm;
            cgwiwgeekamooamc:
            $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\x20{$eqgoocgaqwqcimie}"));
            goto eygucgqouoacesei;
            ggayissweeisyaqa:
        }
        goto wokoyuoomwmgwaoo;
        wqkqggsaacukeimg:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto eqycmciquqaesuyk;
        wokoyuoomwmgwaoo:
        ukmuimokewiqqmsy:
        goto wqkqggsaacukeimg;
        yskiummkweosoacm:
    }
    
    public static function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', $uuksaskqamgouosy = true)
    {
        goto gcymuqcsmwiywkum;
        weqgaswqweauwwyc:
        aakgkaqakoqgcsci:
        goto ecayeacokkmyckmk;
        ssgiyqwsgyyogmqm:
        return $nsmgceoqaqogqmuw;
        goto wymkemmkwawacmys;
        iywkomquqqosokyq:
        if (!$kasgukgceywckyou) {
            goto gcseqcagkcsmgokw;
        }
        goto gumuwayiukgmeusw;
        yakwwcwqaokocwcy:
        gcseqcagkcsmgokw:
        goto ssgiyqwsgyyogmqm;
        wiikemmmqckmwcma:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uqmsuuwuuqcaqasy;
            eaucsgyigimwwuqg:
            qaciuiaecgowsukq:
            goto qkiiwqyuiuqwqosc;
            qaugewusyagkoksg:
            goto qogiwqwqsaesiskg;
            goto cocouuwqwiaiyemu;
            ieqqyaeksqicikwe:
            if ($uuksaskqamgouosy) {
                goto wymeuweieiomiuqw;
            }
            goto cqwsaoiqmiewkigq;
            yggsmyqseogscusc:
            qogiwqwqsaesiskg:
            goto eaucsgyigimwwuqg;
            owkqqqyysqyaykow:
            self::_createElement($ymyisaeksssueeik, $goiaaeekgeqqmaqo);
            goto makmsuccimeksawa;
            cocouuwqwiaiyemu:
            wymeuweieiomiuqw:
            goto msukmuseccwicmwg;
            uqmsuuwuuqcaqasy:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto qaciuiaecgowsukq;
            }
            goto ieqqyaeksqicikwe;
            makmsuccimeksawa:
            yyiemgyowokesgww:
            goto yggsmyqseogscusc;
            msukmuseccwicmwg:
            $ymyisaeksssueeik->nodeValue = '';
            goto quyaggaoeakmcqmo;
            cqwsaoiqmiewkigq:
            $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo;
            goto qaugewusyagkoksg;
            quyaggaoeakmcqmo:
            if (!$goiaaeekgeqqmaqo) {
                goto yyiemgyowokesgww;
            }
            goto owkqqqyysqyaykow;
            qkiiwqyuiuqwqosc:
            uuiuemckcuckewow:
            goto kgmumymgeqemogoy;
            kgmumymgeqemogoy:
        }
        goto weqgaswqweauwwyc;
        gcymuqcsmwiywkum:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto iywkomquqqosokyq;
        ecayeacokkmyckmk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto yakwwcwqaokocwcy;
        gumuwayiukgmeusw:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wiikemmmqckmwcma;
        wymkemmkwawacmys:
    }
    
    private static function _updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = self::UPDATE_ACTION)
    {
        goto ywwqgsuuquocmqgk;
        ywwqgsuuquocmqgk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto owaccsusoeoacmwc;
        uyieackqwooqcqos:
        owqyqioycqkesioo:
        goto suumgeqekqgggugc;
        suumgeqekqgggugc:
        return $nsmgceoqaqogqmuw;
        goto emmcgqumuacycqgg;
        ycwwyeycsiquwiyq:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto oimgigccqeqcsmoy;
            qoeaosoumsicoqms:
            foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) {
                goto uucoqooygmoeuicu;
                uucoqooygmoeuicu:
                $momcykaoccoymeig = 0;
                goto ugakmuywaoowqymc;
                ugakmuywaoowqymc:
                $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
                goto soyyokqommwwoyoy;
                asuwukmiyuqqgqiy:
                wwsamammkqcsocqc:
                goto cqcaimmsooakqmae;
                ioomkicqkmoooiew:
                cceykcumeqigcqkg:
                goto asuwukmiyuqqgqiy;
                soyyokqommwwoyoy:
                foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                    goto iqomqkaueoackgwg;
                    ysowsoswoigywasy:
                    $momcykaoccoymeig++;
                    goto yewcqwqmykemykca;
                    iqomqkaueoackgwg:
                    self::_updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig);
                    goto ysowsoswoigywasy;
                    yewcqwqmykemykca:
                    gkmiesukccsqmcqy:
                    goto wauomwaoauygqsou;
                    wauomwaoauygqsou:
                }
                goto ioomkicqkmoooiew;
                cqcaimmsooakqmae:
            }
            goto yicumoqkcoycyoyu;
            qagigacwywmweskc:
            qugokekqyguksees:
            goto akiymyugggumyuic;
            oimgigccqeqcsmoy:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto gqemygsogaaasyes;
            akiymyugggumyuic:
            if (!$kwmksuuciqkiymek) {
                goto iykceckkokwcsgoi;
            }
            goto qoeaosoumsicoqms;
            wqmquqcyioicymwu:
            iykceckkokwcsgoi:
            goto moywwywcsegwawmi;
            moywwywcsegwawmi:
            wqmuwigkssqkoweq:
            goto mqugkocskuaokeiy;
            gqemygsogaaasyes:
            if (!(isset($siquossayskcwkea["\x70\141\x72\x65\x6e\x74"]) && $siquossayskcwkea["\x70\x61\x72\145\156\164"])) {
                goto qugokekqyguksees;
            }
            goto goicqkqwoomuowkw;
            yicumoqkcoycyoyu:
            emsewgkwsmcgkoyy:
            goto wqmquqcyioicymwu;
            goicqkqwoomuowkw:
            try {
                $kwmksuuciqkiymek = $kwmksuuciqkiymek->eyagosskwwmgwmog();
            } catch (Exception $wgaoewqkwgomoaai) {
                goto wqmuwigkssqkoweq;
            }
            goto qagigacwywmweskc;
            mqugkocskuaokeiy:
        }
        goto ewmcqauqqeywoqcs;
        yayoumcciuyieeoi:
        return $kasgukgceywckyou;
        goto uyieackqwooqcqos;
        owaccsusoeoacmwc:
        if (!$kasgukgceywckyou) {
            goto owqyqioycqkesioo;
        }
        goto ycwwyeycsiquwiyq;
        ewmcqauqqeywoqcs:
        gcmiguwuukeawaii:
        goto yayoumcciuyieeoi;
        emmcgqumuacycqgg:
    }
    
    private static function _updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig)
    {
        goto sewqkgoqqeiogwgc;
        eemagcyswykuayai:
        $cusosqmyoqiykqgw = call_user_func($eqgoocgaqwqcimie, $momcykaoccoymeig, $gaeqamemwmwsyukm);
        goto aegcoomigmqwwaka;
        oamigoywuyowgcow:
        geasmqwwokmeqayu:
        goto uqogiiekomwssgee;
        sewqkgoqqeiogwgc:
        if (is_callable($eqgoocgaqwqcimie)) {
            goto omsqscuggqqkuigc;
        }
        goto ewasskcgskcwkeyq;
        guqgcqqsyaacwsuk:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto geasmqwwokmeqayu;
        }
        goto eoqccooyeaocyegw;
        mqimqkqmmswccmew:
        gwyacasmwuiceqwi:
        goto oamigoywuyowgcow;
        iomkccwaewyicouy:
        omsqscuggqqkuigc:
        goto eemagcyswykuayai;
        aqqqwiuwoymusgey:
        $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, $cusosqmyoqiykqgw);
        goto mqimqkqmmswccmew;
        eukeqiqsekiaqkyk:
        akquuwsekmuoicae:
        goto uyewsowgcymwsuwu;
        eoqccooyeaocyegw:
        $ymyqweogikqywwqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
        goto wwqmyeqgkqmkoosk;
        uyewsowgcymwsuwu:
        if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) {
            goto gwyacasmwuiceqwi;
        }
        goto aqqqwiuwoymusgey;
        sqygiwwewksqgica:
        sgqkaakkaugosoak:
        goto eukeqiqsekiaqkyk;
        ewasskcgskcwkeyq:
        $cusosqmyoqiykqgw = $eqgoocgaqwqcimie;
        goto isqacycsggwaoyqw;
        isqacycsggwaoyqw:
        goto eaaicwyuwkogsies;
        goto iomkccwaewyicouy;
        aegcoomigmqwwaka:
        eaaicwyuwkogsies:
        goto guqgcqqsyaacwsuk;
        wwqmyeqgkqmkoosk:
        switch ($aiamqeawckcsuaou) {
            case self::REMOVE_ACTION:
                goto eyqiqgwmkyegsmgw;
                emeycusyiaccgcoo:
                $ymyqweogikqywwqc = explode("\40", $ymyqweogikqywwqc);
                goto ioyamykqysewiueo;
                sgmwwuiygokssyeg:
                $cusosqmyoqiykqgw = implode("\x20", $ymyqweogikqywwqc);
                goto lmsiwkmayqggkuie;
                mkeiwccsuyqyqaom:
                if ($cusosqmyoqiykqgw) {
                    goto keggycaoqkyockgu;
                }
                goto ygooeemqcwgcmwgy;
                eoggoeeymkgmcckw:
                if (!is_array($ymyqweogikqywwqc)) {
                    goto kikeekyeuiyoiuoc;
                }
                goto sgmwwuiygokssyeg;
                ioyamykqysewiueo:
                $uusmaiomayssaecw = array_search($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto gakugweoyossmeao;
                gscqagmcimoymgeq:
                goto eaqoukeuceuywwac;
                goto gqucksyyuwcwiyog;
                ygooeemqcwgcmwgy:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto eeycgakkgoakqaac;
                gqukqoawwwyuukwc:
                eaqoukeuceuywwac:
                goto ceuyeoigyioagyou;
                eeycgakkgoakqaac:
                keggycaoqkyockgu:
                goto gscqagmcimoymgeq;
                gakugweoyossmeao:
                if (!(false !== $uusmaiomayssaecw)) {
                    goto omqyiocewcgomqks;
                }
                goto euqokgqeguqwueas;
                gqucksyyuwcwiyog:
                gemyysqyokmecguu:
                goto aieuuwkemkgccgqq;
                egmkyicacugkkoie:
                $cusosqmyoqiykqgw = null;
                goto gqukqoawwwyuukwc;
                ssgkiscaiguwcyeq:
                omqyiocewcgomqks:
                goto eoggoeeymkgmcckw;
                ceuyeoigyioagyou:
                goto akquuwsekmuoicae;
                goto qagksgqcwesuogsi;
                aieuuwkemkgccgqq:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($eqgoocgaqwqcimie);
                goto egmkyicacugkkoie;
                euqokgqeguqwueas:
                unset($ymyqweogikqywwqc[$uusmaiomayssaecw]);
                goto ssgkiscaiguwcyeq;
                eyqiqgwmkyegsmgw:
                if (is_numeric($ymkomoccmymcoiea)) {
                    goto gemyysqyokmecguu;
                }
                goto emeycusyiaccgcoo;
                lmsiwkmayqggkuie:
                kikeekyeuiyoiuoc:
                goto mkeiwccsuyqyqaom;
                qagksgqcwesuogsi:
            case self::RENAME_ACTION:
                goto qkueygwuioiiemuw;
                hgmsiocesiimemgo:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto yewuugymokaikqmq;
                qkueygwuioiiemuw:
                $cusosqmyoqiykqgw = null;
                goto csgmgackuimwqgmw;
                yewuugymokaikqmq:
                gsmueswaqwsqiqay:
                goto scuasiqkgymskyoc;
                siaqoyuoaccceoqy:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto hgmsiocesiimemgo;
                scuasiqkgymskyoc:
                goto akquuwsekmuoicae;
                goto uysasageemkuuusg;
                csgmgackuimwqgmw:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto gsmueswaqwsqiqay;
                }
                goto siaqoyuoaccceoqy;
                uysasageemkuuusg:
            case self::REPLACE_ACTION:
            case self::UPDATE_ACTION:
                goto iymwescsmiywgwui;
                skyckeomciwscaso:
                goto ccasgycsymsuuwks;
                goto mqgywkmwkwqgsius;
                mqmquwuyocuoikae:
                ccasgycsymsuuwks:
                goto gswwomycucqmsywk;
                mqgywkmwkwqgsius:
                yeaoaicqksoigqwu:
                goto cqamkyuumwogqcas;
                ewysmowcmmykqscm:
                $ymyqweogikqywwqc = null;
                goto sweokouicekqeyse;
                gswwomycucqmsywk:
                goto akquuwsekmuoicae;
                goto tmyuuoeywociqseo;
                cmmuyseicemsyouq:
                smuioeqccoouuewa:
                goto ewysmowcmmykqscm;
                sweokouicekqeyse:
                
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto skyckeomciwscaso;
                iymwescsmiywgwui:
                if ($aiamqeawckcsuaou === self::REPLACE_ACTION) {
                    goto smuioeqccoouuewa;
                }
                goto ceiaogwwoekcyacg;
                ceiaogwwoekcyacg:
                if ($ymkomoccmymcoiea == "\x63\154\x61\163\x73" && $ymyqweogikqywwqc) {
                    goto yeaoaicqksoigqwu;
                }
                goto gweqggykcmiiawwc;
                cqamkyuumwogqcas:
                $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\x20{$cusosqmyoqiykqgw}";
                goto mqmquwuyocuoikae;
                gweqggykcmiiawwc:
                goto ccasgycsymsuuwks;
                goto cmmuyseicemsyouq;
                tmyuuoeywociqseo:
            case self::REPLACE_WITH_ACTION:
                goto eiwwmuekkuasciug;
                ocysawskymukqmeq:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto pamyaqouossmosoe;
                acmoisuwocsciyae:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($cusosqmyoqiykqgw, $ymyqweogikqywwqc);
                goto ocysawskymukqmeq;
                oskymakeiqaoiukk:
                goto akquuwsekmuoicae;
                goto mqssosgumiesimkw;
                eiwwmuekkuasciug:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto mkyomwyoeskcakyi;
                }
                goto acmoisuwocsciyae;
                pamyaqouossmosoe:
                mkyomwyoeskcakyi:
                goto eckeocwysskicowi;
                eckeocwysskicowi:
                $cusosqmyoqiykqgw = null;
                goto oskymakeiqaoiukk;
                mqssosgumiesimkw:
        }
        goto sqygiwwewksqgica;
        uqogiiekomwssgee:
    }
    
    public static function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $eagcmyswaakcwyec = [], $omwmuycmeqcqokom = "\x64\151\x76", $qmeuaeiseuacgiqc = true)
    {
        goto kymauouamycysiyy;
        wyiuscyymgoqkmws:
        $okcscwesammossuq = '';
        goto wsymimooikcoeamc;
        akogicckgmsmmiag:
        $omwmuycmeqcqokom = ManipulateHTML::qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq);
        goto qgwisswsyykiimuq;
        kymauouamycysiyy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kumiqmuaqymmkyic;
        maakkwkkckwawgqq:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto swwaaaeuyyocowgq;
        guyauwwommggyukw:
        soumiseyqqgqccym:
        goto akogicckgmsmmiag;
        iqecwuuaikqmkqyy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wyiuscyymgoqkmws;
        swwaaaeuyyocowgq:
        eusmmqcsiiyiogqg:
        goto wggceogiyyyaoqca;
        gmqcqaiwkusyiuey:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto kmycyawgoewowaeq;
            kmycyawgoewowaeq:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto kegeyiwiieqmocsk;
            }
            goto oeqekywmewqowkwg;
            gseomoauqsuqccme:
            self::_removeNode($ymyisaeksssueeik);
            goto soeueuyguemogamc;
            soeueuyguemogamc:
            $okcscwesammossuq .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto aysoyukoimiemacc;
            aysoyukoimiemacc:
            kegeyiwiieqmocsk:
            goto wecayusimwoiswuw;
            wecayusimwoiswuw:
            wsgkyquaeocsaiqk:
            goto ioscumsgeuoekyik;
            oeqekywmewqowkwg:
            $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode;
            goto gseomoauqsuqccme;
            ioscumsgeuoekyik:
        }
        goto guyauwwommggyukw;
        wsymimooikcoeamc:
        $ygickiygyemsowyo = null;
        goto gmqcqaiwkusyiuey;
        wggceogiyyyaoqca:
        return $nsmgceoqaqogqmuw;
        goto saicagwascmeamuk;
        kumiqmuaqymmkyic:
        if (!$kasgukgceywckyou) {
            goto eusmmqcsiiyiogqg;
        }
        goto iqecwuuaikqmkqyy;
        qgwisswsyykiimuq:
        self::_appendHTML($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc);
        goto maakkwkkckwawgqq;
        saicagwascmeamuk:
    }
}

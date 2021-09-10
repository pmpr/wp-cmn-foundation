<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const UPDATE_ACTION = "\x75\160\144\141\164\145";
    const REMOVE_ACTION = "\x72\145\x6d\x6f\166\x65";
    const RENAME_ACTION = "\x72\145\x6e\141\x6d\145";
    const REPLACE_ACTION = "\162\145\160\154\x61\x63\145";
    const REPLACE_WITH_ACTION = "\x72\x65\x70\x6c\141\x63\145\x5f\x77\151\164\x68";
    
    public static function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, $uuyoeicyoayimaoa = false, $ksaameoqigiaoigg = true)
    {
        goto cukksseqkekyucye;
        ggwakcmgwkcsasug:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto yiayuooesmsmswia;
        omiqqwiemqykocci:
        coakmyawmquywmos:
        goto cegkuogwgoiomikw;
        wysuusuamkqeyqso:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto oogiaiuaumioummk;
        icimmqwesqkmeuce:
        if (!$ksaameoqigiaoigg) {
            goto agwuyeemwsccoagc;
        }
        goto wysuusuamkqeyqso;
        cegkuogwgoiomikw:
        ygyoayucuigaoacw:
        goto kwcsomkougiwgaco;
        kwcsomkougiwgaco:
        return $nsmgceoqaqogqmuw;
        goto gkcycgsoawqoyesg;
        yiayuooesmsmswia:
        foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) {
            goto aagkoumomwwcaeka;
            qeoumcqaaaecsace:
            yuqoyicsmawcauec:
            goto kykugggwwuqeokou;
            aguwgcwgoukkkmio:
            ymumcsswaocykmeo:
            goto imyiqyuaoycegake;
            agakiqgiuymqowkc:
            if (call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) {
                goto ymumcsswaocykmeo;
            }
            goto eyooouiwwwumauao;
            qegkmgwymeckgwyg:
            goto oegkcqakmussueqq;
            goto meiqsogowcogmgco;
            wueqcceaguewiucw:
            if ($ymyisaeksssueeik instanceof DOMElement) {
                goto qkkiemwuuaaqqyas;
            }
            goto ayucyyiciocgyass;
            skgeuaegiqaqgyaq:
            goto wuwkeggsaiumowug;
            goto qegkmgwymeckgwyg;
            euoymauomemecuao:
            cweguimoaweiumii:
            goto skgeuaegiqaqgyaq;
            aagkoumomwwcaeka:
            if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                goto cweguimoaweiumii;
            }
            goto wueqcceaguewiucw;
            eyooouiwwwumauao:
            goto wuwkeggsaiumowug;
            goto aguwgcwgoukkkmio;
            imyiqyuaoycegake:
            oegkcqakmussueqq:
            goto qeoumcqaaaecsace;
            meiqsogowcogmgco:
            qkkiemwuuaaqqyas:
            goto agakiqgiuymqowkc;
            ayucyyiciocgyass:
            goto oegkcqakmussueqq;
            goto euoymauomemecuao;
            kykugggwwuqeokou:
        }
        goto wyiciayqimeqqomu;
        oogiaiuaumioummk:
        agwuyeemwsccoagc:
        goto omiqqwiemqykocci;
        wyiciayqimeqqomu:
        wuwkeggsaiumowug:
        goto icimmqwesqkmeuce;
        ocueeioeueqmisuo:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gwiykyqeeowisqqk;
        cukksseqkekyucye:
        if (!$ekiuyucoiagmscgy) {
            goto ygyoayucuigaoacw;
        }
        goto ocueeioeueqmisuo;
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
        qymucyymugqaaoyi:
        if ($nsmgceoqaqogqmuw && trim(preg_replace("\57\x5c\x73\x2b\x2f", "\x20", $nsmgceoqaqogqmuw))) {
            goto oqiciswgoamuceqq;
        }
        goto wcyauuwqsicgkomk;
        uiewawqqakquwmsq:
        return $kasgukgceywckyou;
        goto ugksoyaaemqyoywa;
        eioiqwykkuguaygs:
        $kasgukgceywckyou = null;
        goto egisiwqggoqcgeum;
        wcyauuwqsicgkomk:
        goto qeauoqcaeymayusu;
        goto yomgkcycysceyagw;
        wuegeyoegwoqcumy:
        goto qeauoqcaeymayusu;
        goto kkucqmyecgwmioei;
        kkucqmyecgwmioei:
        oqiciswgoamuceqq:
        goto wcwwkcwqkicykkmi;
        egisiwqggoqcgeum:
        if ($nsmgceoqaqogqmuw instanceof Crawler) {
            goto iwcmsykogssougge;
        }
        goto qymucyymugqaaoyi;
        wcwwkcwqkicykkmi:
        $kasgukgceywckyou = new Crawler(mb_convert_encoding($nsmgceoqaqogqmuw, "\110\124\115\114\55\105\x4e\x54\111\124\x49\x45\x53", "\125\x54\106\55\x38"));
        goto uememeasawuoseqy;
        yomgkcycysceyagw:
        iwcmsykogssougge:
        goto agisoqkoyekmsyga;
        uememeasawuoseqy:
        qeauoqcaeymayusu:
        goto uiewawqqakquwmsq;
        agisoqkoyekmsyga:
        $kasgukgceywckyou = $nsmgceoqaqogqmuw;
        goto wuegeyoegwoqcumy;
        ugksoyaaemqyoywa:
    }
    
    public static function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc)
    {
        goto smikqieaosiykeii;
        umgmgswkigyyweke:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto aiyeuqqmcksqsyeq;
        soasesuoocikiquy:
        return $nsmgceoqaqogqmuw;
        goto okuuaqumeeamcgiw;
        oukysgqmgiumaasc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto ggmmkmasyqcugkkm;
        }
        goto umgmgswkigyyweke;
        aiyeuqqmcksqsyeq:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto eqmmegqmukwekkkk;
            eqmmegqmukwekkkk:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto csguigwqeomsyyqw;
            }
            goto scmgoisaawgacqyu;
            coiqsauaqkqykkus:
            csguigwqeomsyyqw:
            goto mimysauwikioomiy;
            scmgoisaawgacqyu:
            $koaqiaecmascwuyy = self::_createElementFromHtml($kasgukgceywckyou, $ewgwqamkygiqaawc);
            goto guwuqywoqwigamaw;
            mimysauwikioomiy:
            wimkgcmkgcaewcwy:
            goto ymessmmcgesuuyys;
            muwaaaqcuwaeoakw:
            $omwmuycmeqcqokom->cgeyeoimiuyogose($koaqiaecmascwuyy);
            goto uwawwskgqkieusog;
            uwawwskgqkieusog:
            egocwogikoqicuyo:
            goto coiqsauaqkqykkus;
            iwcaywweqcgmemko:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto muwaaaqcuwaeoakw;
            guwuqywoqwigamaw:
            if (!$koaqiaecmascwuyy) {
                goto egocwogikoqicuyo;
            }
            goto iwcaywweqcgmemko;
            ymessmmcgesuuyys:
        }
        goto umgcmywyqkwsmsku;
        umgcmywyqkwsmsku:
        migcqoeeeukcyciu:
        goto ocqmicyceamumeia;
        smikqieaosiykeii:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto oukysgqmgiumaasc;
        ocqmicyceamumeia:
        ggmmkmasyqcugkkm:
        goto soasesuoocikiquy;
        okuuaqumeeamcgiw:
    }
    
    public static function umuecysoywoumgwo($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ewceaieowsgamkyi;
        ceaewumsyymakaoc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto qquecwewqeeqyysw;
        }
        goto qqcoeqwimyugqwuc;
        euycuguygmweyiwm:
        return $kwmksuuciqkiymek->count() > 0;
        goto ykssqiacqucsmmac;
        qqcoeqwimyugqwuc:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto euycuguygmweyiwm;
        ykssqiacqucsmmac:
        qquecwewqeeqyysw:
        goto sueokeomisikqomo;
        ewceaieowsgamkyi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ceaewumsyymakaoc;
        sueokeomisikqomo:
        return false;
        goto mggckwqcieykwima;
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
        qoimoeswgougaeoa:
        return $gaeqamemwmwsyukm;
        goto wsqkqmcuoauyescs;
        awmwcaycosymoesq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto icoacuwgkgqykgee;
        icoacuwgkgqykgee:
        $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
        goto equcgweimiaqsysk;
        eiaqawokkeocqqsk:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto gygmcmiciswgeswm;
        }
        goto awmwcaycosymoesq;
        equcgweimiaqsysk:
        gygmcmiciswgeswm:
        goto qoimoeswgougaeoa;
        cckmokqegquyoaoy:
        $gaeqamemwmwsyukm = 0;
        goto icqaoiyumasyygik;
        icqaoiyumasyygik:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto eiaqawokkeocqqsk;
        wsqkqmcuoauyescs:
    }
    
    private static function _removeNode(DOMNode $ymyisaeksssueeik)
    {
        $ymyisaeksssueeik->parentNode->uwqgywaceaaymckg($ymyisaeksssueeik);
    }
    
    public static function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ggcaqksgsoeecwak;
        qeqagimacwmgmqiq:
        return $nsmgceoqaqogqmuw;
        goto ekukcomgoyeiuici;
        ikmqwkwwskokemqy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto gumkwiqcaqusgwqm;
        mmmccuoeoeuskisk:
        $omwmuycmeqcqokom = null;
        goto ikmqwkwwskokemqy;
        ggcaqksgsoeecwak:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto eugiyageaomiuoki;
        syweoqsuaauksacw:
        qeimwiyggaoimmoq:
        goto qeqagimacwmgmqiq;
        gumkwiqcaqusgwqm:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ugecckaqeasoimos;
            goiiekmeukcsamca:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto gigkawsyquoowcms;
            ceyeeieiggoamgwe:
            goto kmqagkiwcsuimayg;
            goto qwsqoioiwieqgeee;
            ugecckaqeasoimos:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto csgowsgmcyswmiec;
            }
            goto goiiekmeukcsamca;
            ammmoycqyaqeqiww:
            uquqecagkoyomiiy:
            goto okwouciqeqeuogos;
            gigkawsyquoowcms:
            $omwmuycmeqcqokom->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom);
            goto uckiysiyuksyuaoa;
            qwsqoioiwieqgeee:
            csgowsgmcyswmiec:
            goto ammmoycqyaqeqiww;
            uckiysiyuksyuaoa:
            $nsmgceoqaqogqmuw = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo();
            goto ceyeeieiggoamgwe;
            okwouciqeqeuogos:
        }
        goto kakskegscmoqcksc;
        kakskegscmoqcksc:
        kmqagkiwcsuimayg:
        goto syweoqsuaauksacw;
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
        qeaeawocamciyiyk:
        try {
            goto gamiacsewcmmiece;
            uimeimmscccaqukm:
            aiewsymeiqiakqqs:
            goto escwyiwieqcweggy;
            wouesssgyqywasom:
            goto saqqooggaykweqce;
            goto uimeimmscccaqukm;
            sukokqcaoygeisos:
            if ($kkkqocwqmaokqcmc) {
                goto kqmgqywmgomwmokg;
            }
            goto emkcaamgumgwwyem;
            yoygkuwyqmgaqewi:
            if ($gykwsaeqegqowywy instanceof DOMDocument) {
                goto aiewsymeiqiakqqs;
            }
            goto ciwweeyeeieqgowe;
            escwyiwieqcweggy:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->skkueuquuqweeyqo();
            goto ikiooiowwwwaygwi;
            eoeuieksgoyqcgsu:
            $nsmgceoqaqogqmuw = preg_replace(["\x2f\50\74\51\50\x68\x65\141\x64\51\x28\x5b\x5e\76\135\x2a\77\x29\50\x5c\57\77\x5c\x73\x2a\x3e\51\174\74\134\57\150\x65\x61\x64\76\x2f", "\57\x28\x3c\51\50\142\157\144\x79\51\50\x5b\136\76\135\x2a\77\x29\50\134\57\x3f\x5c\163\x2a\x3e\51\174\74\134\57\142\x6f\x64\171\x3e\x2f", "\x2f\50\x70\141\162\145\156\164\x3d\42\51\x28\x5b\141\x2d\x7a\101\55\x5a\60\55\x39\x3a\x3b\x5c\x2e\x5c\163\134\50\x5c\x29\134\55\134\x2c\135\x2a\x29\50\42\51\x2f"], '', $nsmgceoqaqogqmuw);
            goto goekuagoayyskiio;
            ikiooiowwwwaygwi:
            goto saqqooggaykweqce;
            goto cwwguccuiymmeosu;
            iyocukugwkwoosqy:
            saqqooggaykweqce:
            goto kseweksyciigumec;
            okqoikkyquugiuia:
            yiomcwmuukooycqq:
            goto wouesssgyqywasom;
            gamiacsewcmmiece:
            $ikoqkmiqkckowcgg = "\x3c\x21\104\x4f\x43\x54\x59\120\105\x20\150\164\155\x6c\x3e";
            goto oiymkikesysgoyma;
            mosmyseyaemqewwk:
            if ($gykwsaeqegqowywy instanceof Crawler) {
                goto wykieskeigmammue;
            }
            goto yoygkuwyqmgaqewi;
            kuywseoceqkawokq:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy;
            goto iyocukugwkwoosqy;
            qggomaqouiuasaum:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->yqwwccackoayicyy();
            goto gcwimimmgaoueegm;
            iaewimwissuueacw:
            kqmgqywmgomwmokg:
            goto qggomaqouiuasaum;
            goekuagoayyskiio:
            goto yiomcwmuukooycqq;
            goto iaewimwissuueacw;
            emkcaamgumgwwyem:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee);
            goto eoeuieksgoyqcgsu;
            ciwweeyeeieqgowe:
            if (is_string($gykwsaeqegqowywy)) {
                goto yiqweuusyaikwqgg;
            }
            goto suogukqqcuaecgmg;
            suogukqqcuaecgmg:
            throw new InvalidArgumentException();
            goto iwaqiakswyiuyyao;
            mimseykuewemegow:
            wykieskeigmammue:
            goto sukokqcaoygeisos;
            cwwguccuiymmeosu:
            yiqweuusyaikwqgg:
            goto kuywseoceqkawokq;
            oiymkikesysgoyma:
            $kkkqocwqmaokqcmc = strpos(strtolower($ggauoeuaesiymgee), strtolower($ikoqkmiqkckowcgg)) !== false;
            goto mosmyseyaemqewwk;
            iwaqiakswyiuyyao:
            goto saqqooggaykweqce;
            goto mimseykuewemegow;
            gcwimimmgaoueegm:
            $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw;
            goto okqoikkyquugiuia;
            kseweksyciigumec:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        }
        goto yyakcqyqkuuokgqw;
        ewouumyoyasgkgig:
        $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        goto sekgqycaaucagggo;
        sekgqycaaucagggo:
        keegiisaqayqmogu:
        goto woqoqsqomgswqicc;
        woqoqsqomgswqicc:
        return $nsmgceoqaqogqmuw;
        goto iiyamiqswaymisue;
        yyakcqyqkuuokgqw:
        if (is_string($nsmgceoqaqogqmuw)) {
            goto keegiisaqayqmogu;
        }
        goto ewouumyoyasgkgig;
        iiyamiqswaymisue:
    }
    
    public static function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::UPDATE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto sgwmqsowsekomcso;
        qcewkmiokmwaakyo:
        uasacoumuyqgeuqy:
        goto iqeqegeqgsmmaeay;
        scequiwqaummymka:
        if (!$kasgukgceywckyou) {
            goto uasacoumuyqgeuqy;
        }
        goto rgemwoeoywekwuww;
        qikaumyuwkusqmcy:
        iqwqucswgosmiwyy:
        goto qcewkmiokmwaakyo;
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
            ywuqguicqikeqiog:
            beowceiucukcwego:
            goto uoygcyuomiyquumm;
            esmaiecuukakamog:
            goto iqwqucswgosmiwyy;
            goto keowaakoqimieymo;
            uoygcyuomiyquumm:
        }
        goto qikaumyuwkusqmcy;
        egcucgemmkamyiuu:
        $siquossayskcwkea = [];
        goto scequiwqaummymka;
        rgemwoeoywekwuww:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto cegaaikcsiwyswca;
        iqeqegeqgsmmaeay:
        return $siquossayskcwkea;
        goto qoeoouiewgwuyayg;
        sgwmqsowsekomcso:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto egcucgemmkamyiuu;
        qoeoouiewgwuyayg:
    }
    
    public static function wuuawmeqqyyyemsw($ymyisaeksssueeik)
    {
        goto gkuukqkuaayagqwe;
        gkuukqkuaayagqwe:
        $siquossayskcwkea = [];
        goto wayaguckegemumuy;
        wayaguckegemumuy:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto kwqqeiiqgiaoquag;
        }
        goto kkgkywswiimccaog;
        cqcqsoqaumyuyemo:
        kwqqeiiqgiaoquag:
        goto csoeiakqgmuockgk;
        awukmeygqcaeyaeg:
        iqwsgmwqeskwqckm:
        goto cqcqsoqaumyuyemo;
        kkgkywswiimccaog:
        foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
            $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue;
            yqisiuioymswaciy:
        }
        goto awukmeygqcaeyaeg;
        csoeiakqgmuockgk:
        return $siquossayskcwkea;
        goto ewuciaosgqwwagsc;
        ewuciaosgqwwagsc:
    }
    
    public static function wugqmqwisygwoeas($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto aqukigyaugymgocm;
        smuuwogesuiogomg:
        return $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto ayucyiqeeeumawgo;
        aqukigyaugymgocm:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qokcmisciyieiwyi;
        qokcmisciyieiwyi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto smuuwogesuiogomg;
        ayucyiqeeeumawgo:
    }
    
    public static function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto wikugsiimiguuwuw;
        wikugsiimiguuwuw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto uqwmcimomeomgqgi;
        cckseausycyccake:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto migkmccwwikseoos;
        eesgqauaaeqiycee:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) {
            goto kcsqyquoyoyssiik;
            yscsaueouasieayc:
            wwcwmiwqwiygmyka:
            goto smsgceqwueqiwmyi;
            smsgceqwueqiwmyi:
            wymogskocqsmiimw:
            goto ywoisggyqsommewa;
            ymmgkaaokqasmaum:
            foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) {
                goto jiykeiuymeoowsma;
                akiuccuwusyiywaa:
                cyiwuweakowgmamu:
                goto sqowskoquogmiiwg;
                akyieugiomeuaqsk:
                $uuswugicgoqcyiiy = $uumwowmewaqyggce->ownerDocument->auokmyiaciikcekk($ymqmyyeuycgmigyo);
                goto yukykeccsygagcsm;
                yukykeccsygagcsm:
                foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) {
                    $uuswugicgoqcyiiy->cgeyeoimiuyogose($uumwowmewaqyggce->ownerDocument->gqskweuukuceuaoq($wcgsoqmmciswkmiq, true));
                    isuyseouiawyweke:
                }
                goto akiuccuwusyiywaa;
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
                wcqkwcqqqsygagsg:
                ecmowkisqwcgyykc:
                goto owuommygccmkuues;
                gcqqqceoakukiuim:
                $okcscwesammossuq = [];
                goto kgmmesqykuckqgqg;
                mokaauiekiycqsii:
                yiqwwseykuimmeuc:
                goto akyieugiomeuaqsk;
                jiykeiuymeoowsma:
                if (!$uumwowmewaqyggce instanceof DOMNode) {
                    goto iqewyeqegsuemqgc;
                }
                goto gcqqqceoakukiuim;
                qgyeaeoyqscmuqqy:
                iqewyeqegsuemqgc:
                goto cwaukuukmsqkqqoc;
                cwaukuukmsqkqqoc:
                cqkeucwwyywigyqk:
                goto mosmyyysosawmqku;
                kgmmesqykuckqgqg:
                foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) {
                    $okcscwesammossuq[] = $wcgsoqmmciswkmiq;
                    meiiqwkkeguigquc:
                }
                goto mokaauiekiycqsii;
                owuommygccmkuues:
                $uumwowmewaqyggce->parentNode->caqmeawgoiceoymu($uuswugicgoqcyiiy, $uumwowmewaqyggce);
                goto qgyeaeoyqscmuqqy;
                mosmyyysosawmqku:
            }
            goto yscsaueouasieayc;
            kcsqyquoyoyssiik:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto ymmgkaaokqasmaum;
            ywoisggyqsommewa:
        }
        goto qmsikcqgaumiyego;
        mquaoucacecoymqu:
        return $nsmgceoqaqogqmuw;
        goto oucwkycugsesqoas;
        uqwmcimomeomgqgi:
        if (!$kasgukgceywckyou) {
            goto kkewwsgkgooicawy;
        }
        goto eesgqauaaeqiycee;
        qmsikcqgaumiyego:
        equeyqisaekucoyq:
        goto cckseausycyccake;
        migkmccwwikseoos:
        kkewwsgkgooicawy:
        goto mquaoucacecoymqu;
        oucwkycugsesqoas:
    }
    
    public static function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto cuqcgywmuqoakieq;
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
        gmmwukkcaouckswu:
        wmcsksugskiskyyy:
        goto qmuqcuumuagkyggg;
        sqqqwsqwmossuima:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto siwscqyokoekmooc;
        qmuqcuumuagkyggg:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) {
            self::_removeElement($kasgukgceywckyou, $yuumukkaswwoywya);
            cceewgewommawcii:
        }
        goto eqiesmsygmemseog;
        imcqqemiwqqegsmk:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto uaaigcisokikuqgu;
        }
        goto mcygayiqasgoyqss;
        siwscqyokoekmooc:
        uaaigcisokikuqgu:
        goto ggqwikwoioeuqsam;
        eqiesmsygmemseog:
        wcqggkigoogqmmqk:
        goto kaooossoiysywsuk;
        iycosyeceoegukgg:
        self::_removeElement($kasgukgceywckyou, $sgksuwkwyimqgaii);
        goto dsqeweimquoouiyo;
        cuqcgywmuqoakieq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto imcqqemiwqqegsmk;
        kaooossoiysywsuk:
        yeqgqmywegcwsiow:
        goto sqqqwsqwmossuima;
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
        yceeiagmcyqcayes:
        ocgiuagqmmqakago:
        goto uyeimkwsuoqgewgy;
        asysseskuwwesiqc:
        yumegkesogwyweiq:
        goto ymkakuuweqoysagc;
        ymkakuuweqoysagc:
        return $nsmgceoqaqogqmuw;
        goto cicooguqkeoeyges;
        uyeimkwsuoqgewgy:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto asysseskuwwesiqc;
        mukeowkkueukysww:
        if (!$kasgukgceywckyou) {
            goto yumegkesogwyweiq;
        }
        goto iyemcyamksqakiiw;
        iyemcyamksqakiiw:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto mgkokmqyecocwwgo;
            wqemgeeosmaqkuye:
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                goto kgaciayyiuykqyko;
                agkwamguicmweoom:
                $msqkueqksqwmskak = array_keys($siquossayskcwkea);
                goto wymyuyaiikioyeao;
                auqwmowcyqaioyse:
                kaccyaysqwkaoyka:
                goto caqmiuioaesgyaug;
                caqmiuioaesgyaug:
                msiuouqukawgegwo:
                goto okeqecawkekacsqc;
                wymyuyaiikioyeao:
                foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto meeiyyaqksugkeai;
                    skmkmwkyeuowoaqa:
                    gsegcywyaasmwyko:
                    goto cyuwoeiiwcsqukku;
                    cyuwoeiiwcsqukku:
                    ceomusueeoaqyume:
                    goto pouyossuowuwcsma;
                    ykemkuywkaowmyuc:
                    $ymyisaeksssueeik->cmgoqeksagmigwmg($siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue);
                    goto skmkmwkyeuowoaqa;
                    meeiyyaqksugkeai:
                    $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName;
                    goto teuusocwmquakkyc;
                    teuusocwmquakkyc:
                    if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak)) {
                        goto gsegcywyaasmwyko;
                    }
                    goto ykemkuywkaowmyuc;
                    pouyossuowuwcsma:
                }
                goto auqwmowcyqaioyse;
                okeqecawkekacsqc:
                yeewwwkywuowoscq:
                goto smqsooyiiesuyoos;
                kgaciayyiuykqyko:
                if (!$ymyisaeksssueeik instanceof DOMNode) {
                    goto msiuouqukawgegwo;
                }
                goto agkwamguicmweoom;
                smqsooyiiesuyoos:
            }
            goto haiiaygcugigaggi;
            mgkokmqyecocwwgo:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto wqemgeeosmaqkuye;
            eeyoaucukkaesqmk:
            aocyeyuakyusikwq:
            goto xawawcwogwekqmqc;
            haiiaygcugigaggi:
            cqwmseemsiiaqgoo:
            goto eeyoaucukkaesqmk;
            xawawcwogwekqmqc:
        }
        goto yceeiagmcyqcayes;
        coscuikaoymwwmii:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mukeowkkueukysww;
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
        comcmyekisewieyc:
        gwuisuuwecwcaaik:
        goto qqaoqesyysccooug;
        ugmqiuwksqaqywco:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto gwuisuuwecwcaaik;
        }
        goto ikiyguwaiacioake;
        qqaoqesyysccooug:
        return $kasgukgceywckyou;
        goto cemammoacacweske;
        cemammoacacweske:
    }
    
    private static function _removeElement($kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto kusuckgswgkceusi;
        kusuckgswgkceusi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ugogcmgasecqmaqo;
        ugogcmgasecqmaqo:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            self::_removeNode($ymyisaeksssueeik);
            memocaoaimgeuimm:
        }
        goto mmyqweeceiaeqqus;
        mmyqweeceiaeqqus:
        aokkmsyimyouoeim:
        goto cmiqweaugcqmwoiq;
        cmiqweaugcqmwoiq:
    }
    
    public static function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee)
    {
        goto gisygciesowawkqy;
        gisygciesowawkqy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gccikccauwosemee;
        gccikccauwosemee:
        $eqgoocgaqwqcimie = '';
        goto cowscsiukyiwymqi;
        wgocyuiekyasmquq:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ywkkyykyayusymai;
            sccqusyuqeiugcem:
            goto ugcgmougmeoayiea;
            goto qoaiwgymwioiissy;
            qoaiwgymwioiissy:
            yayuqeqkcqmiiiyw:
            goto qqqyksacwuumcmia;
            qqqyksacwuumcmia:
            kaqeqoaoqacmssmg:
            goto misgeimskqgmumga;
            uuawmiyqysumgaqy:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee);
            goto uyusyuseakqmycim;
            ywkkyykyayusymai:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto kaqeqoaoqacmssmg;
            }
            goto uuawmiyqysumgaqy;
            uyusyuseakqmycim:
            if (!$eqgoocgaqwqcimie) {
                goto yayuqeqkcqmiiiyw;
            }
            goto sccqusyuqeiugcem;
            misgeimskqgmumga:
            agaaausyuimymgmm:
            goto iqeksucuwucgsuaq;
            iqeksucuwucgsuaq:
        }
        goto siyawoacgucmaoky;
        ymgkgeqimsusocoy:
        return $eqgoocgaqwqcimie;
        goto qeywecigqgseiogw;
        siyawoacgucmaoky:
        ugcgmougmeoayiea:
        goto ykuiuuqwkwwgeqko;
        ykuiuuqwkwwgeqko:
        kagiaysuecmceegy:
        goto ymgkgeqimsusocoy;
        emsquuamiesiqseq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wgocyuiekyasmquq;
        cowscsiukyiwymqi:
        if (!$kasgukgceywckyou) {
            goto kagiaysuecmceegy;
        }
        goto emsquuamiesiqseq;
        qeywecigqgseiogw:
    }
    
    public static function goqgkgckyagueiso($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_WITH_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _createElement(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw)
    {
        goto kuwieemysouaokqs;
        kuwieemysouaokqs:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto kywicmoksqkayose;
        imoyquwyuicwioom:
        ucwkqqscieaqmkms:
        goto yauausaeuasqsgeu;
        kywicmoksqkayose:
        foreach ($qeaoumiemyikogys->auamuceiowkuacoq("\x62\x6f\x64\x79")->item(0)->childNodes as $ymyisaeksssueeik) {
            $omwmuycmeqcqokom->cgeyeoimiuyogose($omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true));
            uuooemyeyeuswqea:
        }
        goto imoyquwyuicwioom;
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
        ueowcqqgaoysmqie:
        foreach (self::_find($kasgukgceywckyou, "\x62\157\x64\x79") as $ymyisaeksssueeik) {
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
        ooiockqsscsuqokc:
        euguuygaocimsesi:
        goto acsgyykcowwkyayy;
        coqewawckmigciso:
        $omwmuycmeqcqokom->kqgwgkuykuumwcgw($nsmgceoqaqogqmuw, $omwmuycmeqcqokom->firstChild);
        goto kwaammsskmiamace;
        ccssuekkawuwwkyk:
        $omwmuycmeqcqokom->cgeyeoimiuyogose($nsmgceoqaqogqmuw);
        goto kecqwqseaiaomoao;
        gmgkmqouwygkwuua:
        myyycckqeikqiuqi:
        goto kmkmisyucykygqoc;
        acsgyykcowwkyayy:
        goto myyycckqeikqiuqi;
        goto wuwggkokqumggyiu;
        kwaammsskmiamace:
        goto meomioiwwciyyyue;
        goto amacugyqcmgqiaog;
        kecqwqseaiaomoao:
        meomioiwwciyyyue:
        goto gmgkmqouwygkwuua;
        kmkmisyucykygqoc:
        ysoesyqiaaugywgi:
        goto wccegsoaeisquyeq;
        uucwuqeucsiykagi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ueowcqqgaoysmqie;
        ssecwqeouoeamsio:
        if ($nsmgceoqaqogqmuw instanceof DOMNode) {
            goto uyqckmcowkimsmyq;
        }
        goto uucwuqeucsiykagi;
        qmymeeegusssawmu:
        if (!$omwmuycmeqcqokom instanceof DOMNode) {
            goto ysoesyqiaaugywgi;
        }
        goto ssecwqeouoeamsio;
        ugmowoyeoowiiqie:
        if ($qmeuaeiseuacgiqc) {
            goto yagiokukkmimaoae;
        }
        goto coqewawckmigciso;
        amacugyqcmgqiaog:
        yagiokukkmimaoae:
        goto ccssuekkawuwwkyk;
        wuwggkokqumggyiu:
        uyqckmcowkimsmyq:
        goto ugmowoyeoowiiqie;
        wccegsoaeisquyeq:
    }
    
    public static function wesimowqwekiqiow($nsmgceoqaqogqmuw, $eeqsmkqmsowmicwi = "\163\164\x79\154\x65", $cussukyecoaeayqk = true)
    {
        goto cycoyeooqscgugwa;
        uoqwymoegwoweuyk:
        mwimaeocgaqeiukm:
        goto mawsiqmcsguuokok;
        kkeakokiekuywmwy:
        qauqcecycoswuoyc:
        goto gmcsqgoweawewags;
        eeeaumqcsieckaoc:
        $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent;
        goto suqosyewmcawwouy;
        guwmecmmcueokcgu:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, "\x5b\163\164\x79\x6c\145\x5d");
        goto kqawgskqiimioaku;
        eaasaucuyacqooey:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto uoqwymoegwoweuyk;
        kqawgskqiimioaku:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ugaoeiuoosyggsmi;
            cquumoyicacciqei:
            if (!$eqgoocgaqwqcimie) {
                goto ewyukeoyymaooaqa;
            }
            goto gsquqssmimkgcoga;
            oyquokessoouwuke:
            $acqqmqmcquukaqsc = "\x2e{$omasqoksqewuwwkq}\173{$eqgoocgaqwqcimie}\x7d";
            goto mgykueyyyoueykgm;
            gkcsgskucsicakwg:
            $omasqoksqewuwwkq = ManipulateString::uniqid(5);
            goto swiaoqqqyqusscqi;
            oiksiqocuawwgeek:
            $egkyssmuqcwaciya = $ymyisaeksssueeik->waecsyqmwascmqoa("\x63\x6c\141\163\163");
            goto skqyeawoqyssamii;
            asoycqscmioaaggw:
            emkuqqeesmiycqqo:
            goto oyquokessoouwuke;
            mgykueyyyoueykgm:
            $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc;
            goto oiksiqocuawwgeek;
            iigwwyogmwesyoau:
            eoskieimkcimmwio:
            goto maugkumeqqaoqmkq;
            gsquqssmimkgcoga:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($yuumukkaswwoywya);
            goto gkcsgskucsicakwg;
            swiaoqqqyqusscqi:
            if ($cussukyecoaeayqk) {
                goto emkuqqeesmiycqqo;
            }
            goto ioqkkgikqygkemce;
            ioqkkgikqygkemce:
            $eqgoocgaqwqcimie = str_replace("\41\x69\x6d\160\x6f\162\164\x61\156\x74", '', $eqgoocgaqwqcimie);
            goto asoycqscmioaaggw;
            yoeiuoyekameacwu:
            $yuumukkaswwoywya = "\x73\164\x79\x6c\145";
            goto wwmggkkyegumakew;
            qsiqckciwyomqwue:
            ewyukeoyymaooaqa:
            goto gqmgeusocymaikoy;
            ugaoeiuoosyggsmi:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto mksggqikmumuycga;
            }
            goto yoeiuoyekameacwu;
            skqyeawoqyssamii:
            $egkyssmuqcwaciya .= "\40{$omasqoksqewuwwkq}";
            goto aaccwuemygqmicme;
            wwmggkkyegumakew:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($yuumukkaswwoywya);
            goto cquumoyicacciqei;
            gqmgeusocymaikoy:
            mksggqikmumuycga:
            goto iigwwyogmwesyoau;
            aaccwuemygqmicme:
            $ymyisaeksssueeik->cmgoqeksagmigwmg("\143\154\x61\x73\x73", $egkyssmuqcwaciya);
            goto qsiqckciwyomqwue;
            maugkumeqqaoqmkq:
        }
        goto yyukimsicowasyqs;
        myusuecogkwoqimq:
        if ($kswaimykcacqyaay instanceof DOMElement) {
            goto qauqcecycoswuoyc;
        }
        goto uqsmsqoeimicguwe;
        mcqkmiukmosqwemy:
        $ewgwqamkygiqaawc = '';
        goto ksccwuecqkqkawck;
        mawsiqmcsguuokok:
        return $nsmgceoqaqogqmuw;
        goto kisaoauaekgkauui;
        mkaoooyookegwgwg:
        mcmmgacykcsowqiw:
        goto eaasaucuyacqooey;
        cycoyeooqscgugwa:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wumeiwysoiscimiu;
        caaqcciyeymoqqmc:
        goto mcmmgacykcsowqiw;
        goto kkeakokiekuywmwy;
        ksccwuecqkqkawck:
        if (!$kswaimykcacqyaay instanceof DOMNode) {
            goto ieyowiusaeousyse;
        }
        goto eeeaumqcsieckaoc;
        eequmkcwsuakwwmo:
        $kswaimykcacqyaay = self::_find($kasgukgceywckyou, "\x68\145\141\144\40\76\40{$eeqsmkqmsowmicwi}")->wugqmqwisygwoeas(0);
        goto mcqkmiukmosqwemy;
        gmcsqgoweawewags:
        $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc;
        goto mkaoooyookegwgwg;
        wumeiwysoiscimiu:
        if (!$kasgukgceywckyou) {
            goto mwimaeocgaqeiukm;
        }
        goto eequmkcwsuakwwmo;
        uqsmsqoeimicguwe:
        self::pmouaioykaoceyag($kasgukgceywckyou, "\x68\x65\141\144", $ewgwqamkygiqaawc);
        goto caaqcciyeymoqqmc;
        yyukimsicowasyqs:
        ooueyocsuseuawgc:
        goto myusuecogkwoqimq;
        suqosyewmcawwouy:
        ieyowiusaeousyse:
        goto guwmecmmcueokcgu;
        kisaoauaekgkauui:
    }
    
    public static function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, $egomoiciasmiesww = false)
    {
        goto esokuuqukgaiiuao;
        ccwaiwmcccmswyau:
        if (!$kasgukgceywckyou) {
            goto egcyaksemqaakqgy;
        }
        goto qoiqosqiguawwekg;
        eesgmkwwiawcskie:
        egcyaksemqaakqgy:
        goto oyoeowyeooyowomm;
        oyoeowyeooyowomm:
        return $nsmgceoqaqogqmuw;
        goto ycaysuaiikcskakg;
        esokuuqukgaiiuao:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ccwaiwmcccmswyau;
        fommkikuoyaeskiw:
        $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc;
        goto ouecgmgoaaswqomi;
        ouecgmgoaaswqomi:
        mickmqggcqwackce:
        goto okkimkuusqsiemkk;
        iimeieccwuumkgim:
        gckckwqqgkoyyagq:
        goto fommkikuoyaeskiw;
        xiwcqyowugqukksy:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto mickmqggcqwackce;
        }
        goto sociuiuiwsymiyam;
        qoiqosqiguawwekg:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $yuumukkaswwoywya)->wugqmqwisygwoeas(0);
        goto xiwcqyowugqukksy;
        okkimkuusqsiemkk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto eesgmkwwiawcskie;
        sociuiuiwsymiyam:
        if ($egomoiciasmiesww) {
            goto gckckwqqgkoyyagq;
        }
        goto gyyawusuyeigckys;
        gyyawusuyeigckys:
        $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc;
        goto iimeieccwuumkgim;
        ycaysuaiikcskakg:
    }
    
    public static function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc = true)
    {
        goto mokoeuoicweqwksk;
        kwwwckywsygiwcoc:
        if (!$kasgukgceywckyou) {
            goto wiyoqoiqsmwuiywa;
        }
        goto secswciggsguqauw;
        mokoeuoicweqwksk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kwwwckywsygiwcoc;
        oigoswgkgwescakq:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto emguyukcyeeuyqyo;
        }
        goto oiakqemessasuyci;
        aucuikgwyisgguye:
        wiyoqoiqsmwuiywa:
        goto gwswuqomwckekgum;
        kqakgccawoogkiai:
        emguyukcyeeuyqyo:
        goto eoawcoaayikaiocu;
        oiakqemessasuyci:
        self::_appendHTML($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc);
        goto kqakgccawoogkiai;
        secswciggsguqauw:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $omwmuycmeqcqokom)->wugqmqwisygwoeas(0);
        goto oigoswgkgwescakq;
        gwswuqomwckekgum:
        return $nsmgceoqaqogqmuw;
        goto aqmemoyecceeceuc;
        eoawcoaayikaiocu:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto aucuikgwyisgguye;
        aqmemoyecceeceuc:
    }
    
    public static function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto muceomkycemgsccu;
        cymoaqswaeycikca:
        if (!$kasgukgceywckyou) {
            goto mykqimauysqiessi;
        }
        goto gyqaqyuewuquqkuy;
        ikwagqguqmqsakug:
        aykiaquyoagykguu:
        goto cqyommqsimyoioeo;
        ywmukuyioksqgimq:
        mykqimauysqiessi:
        goto cqiagomawawqmcoo;
        gyqaqyuewuquqkuy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto uqmscgsoqeysooqc;
        gyyiagqqegiygkag:
        if ($ewgwqamkygiqaawc) {
            goto ammsmyuaoogueqog;
        }
        goto kowocmqmoqwacmoa;
        awgmmoegiwqoswkk:
        $ymyisaeksssueeik = $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto awccsuqeikuacioa;
        jggaoyqecgewsysy:
        goto aykiaquyoagykguu;
        goto acisamqweoscawig;
        acisamqweoscawig:
        ammsmyuaoogueqog:
        goto kkoswgsscqsgqmey;
        cqyommqsimyoioeo:
        ciiikyqwkwsceouq:
        goto kiieueeyieewgcuu;
        qsuqueusmkasmeig:
        $aqykuigiuwmmcieu = '';
        goto cymoaqswaeycikca;
        awccsuqeikuacioa:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto ciiikyqwkwsceouq;
        }
        goto gyyiagqqegiygkag;
        muceomkycemgsccu:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qsuqueusmkasmeig;
        cqiagomawawqmcoo:
        return $aqykuigiuwmmcieu;
        goto eoggqsukkackwoag;
        uqmscgsoqeysooqc:
        if (!$kwmksuuciqkiymek) {
            goto gmqoaasouciogwkq;
        }
        goto awgmmoegiwqoswkk;
        kiieueeyieewgcuu:
        gmqoaasouciogwkq:
        goto ywmukuyioksqgimq;
        kkoswgsscqsgqmey:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent;
        goto ikwagqguqmqsakug;
        kowocmqmoqwacmoa:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
        goto jggaoyqecgewsysy;
        eoggqsukkackwoag:
    }
    
    public static function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto euguykkkieguasgy;
        umeomugcsyuukqsu:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto swyakyokwmomoqow;
        kgamqamcoaaqmgeg:
        return $sogksuscggsicmac;
        goto ecwcasmmiooagwaq;
        swyakyokwmomoqow:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ekesimcsecgcuoms;
            gsisioycuuewgmmw:
            if ($ewgwqamkygiqaawc) {
                goto ywiwagqgeomcwkss;
            }
            goto wcsimwcyyumkyuck;
            aqasuykawsiekssw:
            iiumqmaicymgouwy:
            goto isicqmmaqumssuka;
            mskguuoycuamgyim:
            $sogksuscggsicmac[] = $aqykuigiuwmmcieu;
            goto aqasuykawsiekssw;
            woekwasoyuwmqgao:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->textContent;
            goto scogoqgeeoeqsuku;
            ekesimcsecgcuoms:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto iiumqmaicymgouwy;
            }
            goto qqmskoaugmqsaaqy;
            isicqmmaqumssuka:
            swqucgmugmekaoqc:
            goto msggcgusisiqukme;
            qqmskoaugmqsaaqy:
            self::_removeNode($ymyisaeksssueeik);
            goto gsisioycuuewgmmw;
            qqiqiaqoiesmuokq:
            ywiwagqgeomcwkss:
            goto woekwasoyuwmqgao;
            wcsimwcyyumkyuck:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto yoggmucmsyeaseso;
            yoggmucmsyeaseso:
            goto kaeomaoaieammmca;
            goto qqiqiaqoiesmuokq;
            scogoqgeeoeqsuku:
            kaeomaoaieammmca:
            goto mskguuoycuamgyim;
            msggcgusisiqukme:
        }
        goto mameecqeeiakmiks;
        wgawmiiocosqkgos:
        $sogksuscggsicmac = [];
        goto gekaiqysouaoyaci;
        cywmacoauegeacwk:
        sskkmcmqeimgeuwg:
        goto kgamqamcoaaqmgeg;
        gekaiqysouaoyaci:
        if (!$kasgukgceywckyou) {
            goto sskkmcmqeimgeuwg;
        }
        goto umeomugcsyuukqsu;
        mameecqeeiakmiks:
        cseiiqikiimgcmmy:
        goto cywmacoauegeacwk;
        euguykkkieguasgy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wgawmiiocosqkgos;
        ecwcasmmiooagwaq:
    }
    
    public static function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, $ymkomoccmymcoiea = "\x73\x74\x79\154\145", $wamcomkuwysqgwgk = "\45\163\73")
    {
        goto ikcokaseywaaekgo;
        yooqmugaioweswcs:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto iekuaksaiccyckaw;
        ikcokaseywaaekgo:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ukqewcigokikemua;
        ukqewcigokikemua:
        if (!$kasgukgceywckyou) {
            goto eaqqweigimyoywwu;
        }
        goto yooqmugaioweswcs;
        geycsscsmmgaiioe:
        return $nsmgceoqaqogqmuw;
        goto yskiummkweosoacm;
        wokoyuoomwmgwaoo:
        ukmuimokewiqqmsy:
        goto wqkqggsaacukeimg;
        eqycmciquqaesuyk:
        eaqqweigimyoywwu:
        goto geycsscsmmgaiioe;
        wqkqggsaacukeimg:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto eqycmciquqaesuyk;
        iekuaksaiccyckaw:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto aoqcimcikseuucoy;
            wakqmmwcieuuiygm:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($ccamueccusigaaio);
            goto ywwcwwqawggauaso;
            eygucgqouoacesei:
            gcsacemoyykguega:
            goto csaqukkmgesgewkg;
            qaemeaiiueckkouq:
            acqwiccgsscgikyo:
            goto cgwiwgeekamooamc;
            ywwcwwqawggauaso:
            if (!$eqgoocgaqwqcimie) {
                goto gcsacemoyykguega;
            }
            goto ekksaoygcqikaque;
            suigamecaieiiuka:
            cyugiqiiaekakuec:
            goto cwkeqwwaageaiecm;
            okwyiswgsyymgius:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($ccamueccusigaaio);
            goto wakqmmwcieuuiygm;
            cgwiwgeekamooamc:
            $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\40{$eqgoocgaqwqcimie}"));
            goto eygucgqouoacesei;
            makegskyquimcacu:
            iqeeygqsccygwqas:
            goto ggayissweeisyaqa;
            cwkeqwwaageaiecm:
            if (!($ymkomoccmymcoiea == "\163\164\171\154\x65")) {
                goto acqwiccgsscgikyo;
            }
            goto cymysimiiemeqcmu;
            iykugimymaauokkm:
            $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie);
            goto suigamecaieiiuka;
            qkmswkmokigugkaw:
            if (!$wamcomkuwysqgwgk) {
                goto cyugiqiiaekakuec;
            }
            goto iykugimymaauokkm;
            cymysimiiemeqcmu:
            $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\x3b") . "\x3b";
            goto qaemeaiiueckkouq;
            aoqcimcikseuucoy:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto muoiuweiesyukmgu;
            }
            goto okwyiswgsyymgius;
            csaqukkmgesgewkg:
            muoiuweiesyukmgu:
            goto makegskyquimcacu;
            ekksaoygcqikaque:
            $yeacayasgueouoqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
            goto qkmswkmokigugkaw;
            ggayissweeisyaqa:
        }
        goto wokoyuoomwmgwaoo;
        yskiummkweosoacm:
    }
    
    public static function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', $uuksaskqamgouosy = true)
    {
        goto gcymuqcsmwiywkum;
        gumuwayiukgmeusw:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wiikemmmqckmwcma;
        wiikemmmqckmwcma:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uqmsuuwuuqcaqasy;
            qaugewusyagkoksg:
            goto qogiwqwqsaesiskg;
            goto cocouuwqwiaiyemu;
            msukmuseccwicmwg:
            $ymyisaeksssueeik->nodeValue = '';
            goto quyaggaoeakmcqmo;
            uqmsuuwuuqcaqasy:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto qaciuiaecgowsukq;
            }
            goto ieqqyaeksqicikwe;
            cocouuwqwiaiyemu:
            wymeuweieiomiuqw:
            goto msukmuseccwicmwg;
            qkiiwqyuiuqwqosc:
            uuiuemckcuckewow:
            goto kgmumymgeqemogoy;
            ieqqyaeksqicikwe:
            if ($uuksaskqamgouosy) {
                goto wymeuweieiomiuqw;
            }
            goto cqwsaoiqmiewkigq;
            eaucsgyigimwwuqg:
            qaciuiaecgowsukq:
            goto qkiiwqyuiuqwqosc;
            quyaggaoeakmcqmo:
            if (!$goiaaeekgeqqmaqo) {
                goto yyiemgyowokesgww;
            }
            goto owkqqqyysqyaykow;
            makmsuccimeksawa:
            yyiemgyowokesgww:
            goto yggsmyqseogscusc;
            cqwsaoiqmiewkigq:
            $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo;
            goto qaugewusyagkoksg;
            yggsmyqseogscusc:
            qogiwqwqsaesiskg:
            goto eaucsgyigimwwuqg;
            owkqqqyysqyaykow:
            self::_createElement($ymyisaeksssueeik, $goiaaeekgeqqmaqo);
            goto makmsuccimeksawa;
            kgmumymgeqemogoy:
        }
        goto weqgaswqweauwwyc;
        gcymuqcsmwiywkum:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto iywkomquqqosokyq;
        weqgaswqweauwwyc:
        aakgkaqakoqgcsci:
        goto ecayeacokkmyckmk;
        ecayeacokkmyckmk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto yakwwcwqaokocwcy;
        yakwwcwqaokocwcy:
        gcseqcagkcsmgokw:
        goto ssgiyqwsgyyogmqm;
        ssgiyqwsgyyogmqm:
        return $nsmgceoqaqogqmuw;
        goto wymkemmkwawacmys;
        iywkomquqqosokyq:
        if (!$kasgukgceywckyou) {
            goto gcseqcagkcsmgokw;
        }
        goto gumuwayiukgmeusw;
        wymkemmkwawacmys:
    }
    
    private static function _updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = self::UPDATE_ACTION)
    {
        goto ywwqgsuuquocmqgk;
        yayoumcciuyieeoi:
        return $kasgukgceywckyou;
        goto uyieackqwooqcqos;
        uyieackqwooqcqos:
        owqyqioycqkesioo:
        goto suumgeqekqgggugc;
        suumgeqekqgggugc:
        return $nsmgceoqaqogqmuw;
        goto emmcgqumuacycqgg;
        ycwwyeycsiquwiyq:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto oimgigccqeqcsmoy;
            moywwywcsegwawmi:
            wqmuwigkssqkoweq:
            goto mqugkocskuaokeiy;
            gqemygsogaaasyes:
            if (!(isset($siquossayskcwkea["\x70\141\x72\145\x6e\x74"]) && $siquossayskcwkea["\160\x61\162\x65\156\164"])) {
                goto qugokekqyguksees;
            }
            goto goicqkqwoomuowkw;
            qoeaosoumsicoqms:
            foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) {
                goto uucoqooygmoeuicu;
                uucoqooygmoeuicu:
                $momcykaoccoymeig = 0;
                goto ugakmuywaoowqymc;
                ioomkicqkmoooiew:
                cceykcumeqigcqkg:
                goto asuwukmiyuqqgqiy;
                soyyokqommwwoyoy:
                foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                    goto iqomqkaueoackgwg;
                    yewcqwqmykemykca:
                    gkmiesukccsqmcqy:
                    goto wauomwaoauygqsou;
                    ysowsoswoigywasy:
                    $momcykaoccoymeig++;
                    goto yewcqwqmykemykca;
                    iqomqkaueoackgwg:
                    self::_updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig);
                    goto ysowsoswoigywasy;
                    wauomwaoauygqsou:
                }
                goto ioomkicqkmoooiew;
                asuwukmiyuqqgqiy:
                wwsamammkqcsocqc:
                goto cqcaimmsooakqmae;
                ugakmuywaoowqymc:
                $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
                goto soyyokqommwwoyoy;
                cqcaimmsooakqmae:
            }
            goto yicumoqkcoycyoyu;
            akiymyugggumyuic:
            if (!$kwmksuuciqkiymek) {
                goto iykceckkokwcsgoi;
            }
            goto qoeaosoumsicoqms;
            qagigacwywmweskc:
            qugokekqyguksees:
            goto akiymyugggumyuic;
            goicqkqwoomuowkw:
            try {
                $kwmksuuciqkiymek = $kwmksuuciqkiymek->eyagosskwwmgwmog();
            } catch (Exception $wgaoewqkwgomoaai) {
                goto wqmuwigkssqkoweq;
            }
            goto qagigacwywmweskc;
            yicumoqkcoycyoyu:
            emsewgkwsmcgkoyy:
            goto wqmquqcyioicymwu;
            wqmquqcyioicymwu:
            iykceckkokwcsgoi:
            goto moywwywcsegwawmi;
            oimgigccqeqcsmoy:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto gqemygsogaaasyes;
            mqugkocskuaokeiy:
        }
        goto ewmcqauqqeywoqcs;
        ewmcqauqqeywoqcs:
        gcmiguwuukeawaii:
        goto yayoumcciuyieeoi;
        ywwqgsuuquocmqgk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto owaccsusoeoacmwc;
        owaccsusoeoacmwc:
        if (!$kasgukgceywckyou) {
            goto owqyqioycqkesioo;
        }
        goto ycwwyeycsiquwiyq;
        emmcgqumuacycqgg:
    }
    
    private static function _updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig)
    {
        goto sewqkgoqqeiogwgc;
        ewasskcgskcwkeyq:
        $cusosqmyoqiykqgw = $eqgoocgaqwqcimie;
        goto isqacycsggwaoyqw;
        oamigoywuyowgcow:
        geasmqwwokmeqayu:
        goto uqogiiekomwssgee;
        eukeqiqsekiaqkyk:
        akquuwsekmuoicae:
        goto uyewsowgcymwsuwu;
        isqacycsggwaoyqw:
        goto eaaicwyuwkogsies;
        goto iomkccwaewyicouy;
        guqgcqqsyaacwsuk:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto geasmqwwokmeqayu;
        }
        goto eoqccooyeaocyegw;
        uyewsowgcymwsuwu:
        if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) {
            goto gwyacasmwuiceqwi;
        }
        goto aqqqwiuwoymusgey;
        wwqmyeqgkqmkoosk:
        switch ($aiamqeawckcsuaou) {
            case self::REMOVE_ACTION:
                goto eyqiqgwmkyegsmgw;
                eoggoeeymkgmcckw:
                if (!is_array($ymyqweogikqywwqc)) {
                    goto kikeekyeuiyoiuoc;
                }
                goto sgmwwuiygokssyeg;
                emeycusyiaccgcoo:
                $ymyqweogikqywwqc = explode("\40", $ymyqweogikqywwqc);
                goto ioyamykqysewiueo;
                euqokgqeguqwueas:
                unset($ymyqweogikqywwqc[$uusmaiomayssaecw]);
                goto ssgkiscaiguwcyeq;
                gakugweoyossmeao:
                if (!(false !== $uusmaiomayssaecw)) {
                    goto omqyiocewcgomqks;
                }
                goto euqokgqeguqwueas;
                gqucksyyuwcwiyog:
                gemyysqyokmecguu:
                goto aieuuwkemkgccgqq;
                gscqagmcimoymgeq:
                goto eaqoukeuceuywwac;
                goto gqucksyyuwcwiyog;
                gqukqoawwwyuukwc:
                eaqoukeuceuywwac:
                goto ceuyeoigyioagyou;
                sgmwwuiygokssyeg:
                $cusosqmyoqiykqgw = implode("\x20", $ymyqweogikqywwqc);
                goto lmsiwkmayqggkuie;
                mkeiwccsuyqyqaom:
                if ($cusosqmyoqiykqgw) {
                    goto keggycaoqkyockgu;
                }
                goto ygooeemqcwgcmwgy;
                egmkyicacugkkoie:
                $cusosqmyoqiykqgw = null;
                goto gqukqoawwwyuukwc;
                ioyamykqysewiueo:
                $uusmaiomayssaecw = array_search($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto gakugweoyossmeao;
                eyqiqgwmkyegsmgw:
                if (is_numeric($ymkomoccmymcoiea)) {
                    goto gemyysqyokmecguu;
                }
                goto emeycusyiaccgcoo;
                ssgkiscaiguwcyeq:
                omqyiocewcgomqks:
                goto eoggoeeymkgmcckw;
                ygooeemqcwgcmwgy:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto eeycgakkgoakqaac;
                aieuuwkemkgccgqq:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($eqgoocgaqwqcimie);
                goto egmkyicacugkkoie;
                lmsiwkmayqggkuie:
                kikeekyeuiyoiuoc:
                goto mkeiwccsuyqyqaom;
                ceuyeoigyioagyou:
                goto akquuwsekmuoicae;
                goto qagksgqcwesuogsi;
                eeycgakkgoakqaac:
                keggycaoqkyockgu:
                goto gscqagmcimoymgeq;
                qagksgqcwesuogsi:
            case self::RENAME_ACTION:
                goto qkueygwuioiiemuw;
                siaqoyuoaccceoqy:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto hgmsiocesiimemgo;
                scuasiqkgymskyoc:
                goto akquuwsekmuoicae;
                goto uysasageemkuuusg;
                hgmsiocesiimemgo:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto yewuugymokaikqmq;
                qkueygwuioiiemuw:
                $cusosqmyoqiykqgw = null;
                goto csgmgackuimwqgmw;
                yewuugymokaikqmq:
                gsmueswaqwsqiqay:
                goto scuasiqkgymskyoc;
                csgmgackuimwqgmw:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto gsmueswaqwsqiqay;
                }
                goto siaqoyuoaccceoqy;
                uysasageemkuuusg:
            case self::REPLACE_ACTION:
            case self::UPDATE_ACTION:
                goto iymwescsmiywgwui;
                mqgywkmwkwqgsius:
                yeaoaicqksoigqwu:
                goto cqamkyuumwogqcas;
                ewysmowcmmykqscm:
                $ymyqweogikqywwqc = null;
                goto sweokouicekqeyse;
                cqamkyuumwogqcas:
                $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\x20{$cusosqmyoqiykqgw}";
                goto mqmquwuyocuoikae;
                gweqggykcmiiawwc:
                goto ccasgycsymsuuwks;
                goto cmmuyseicemsyouq;
                cmmuyseicemsyouq:
                smuioeqccoouuewa:
                goto ewysmowcmmykqscm;
                iymwescsmiywgwui:
                if ($aiamqeawckcsuaou === self::REPLACE_ACTION) {
                    goto smuioeqccoouuewa;
                }
                goto ceiaogwwoekcyacg;
                mqmquwuyocuoikae:
                ccasgycsymsuuwks:
                goto gswwomycucqmsywk;
                sweokouicekqeyse:
                
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto skyckeomciwscaso;
                ceiaogwwoekcyacg:
                if ($ymkomoccmymcoiea == "\x63\154\x61\x73\x73" && $ymyqweogikqywwqc) {
                    goto yeaoaicqksoigqwu;
                }
                goto gweqggykcmiiawwc;
                gswwomycucqmsywk:
                goto akquuwsekmuoicae;
                goto tmyuuoeywociqseo;
                skyckeomciwscaso:
                goto ccasgycsymsuuwks;
                goto mqgywkmwkwqgsius;
                tmyuuoeywociqseo:
            case self::REPLACE_WITH_ACTION:
                goto eiwwmuekkuasciug;
                pamyaqouossmosoe:
                mkyomwyoeskcakyi:
                goto eckeocwysskicowi;
                ocysawskymukqmeq:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto pamyaqouossmosoe;
                oskymakeiqaoiukk:
                goto akquuwsekmuoicae;
                goto mqssosgumiesimkw;
                eiwwmuekkuasciug:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto mkyomwyoeskcakyi;
                }
                goto acmoisuwocsciyae;
                eckeocwysskicowi:
                $cusosqmyoqiykqgw = null;
                goto oskymakeiqaoiukk;
                acmoisuwocsciyae:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($cusosqmyoqiykqgw, $ymyqweogikqywwqc);
                goto ocysawskymukqmeq;
                mqssosgumiesimkw:
        }
        goto sqygiwwewksqgica;
        sqygiwwewksqgica:
        sgqkaakkaugosoak:
        goto eukeqiqsekiaqkyk;
        aqqqwiuwoymusgey:
        $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, $cusosqmyoqiykqgw);
        goto mqimqkqmmswccmew;
        mqimqkqmmswccmew:
        gwyacasmwuiceqwi:
        goto oamigoywuyowgcow;
        iomkccwaewyicouy:
        omsqscuggqqkuigc:
        goto eemagcyswykuayai;
        aegcoomigmqwwaka:
        eaaicwyuwkogsies:
        goto guqgcqqsyaacwsuk;
        eemagcyswykuayai:
        $cusosqmyoqiykqgw = call_user_func($eqgoocgaqwqcimie, $momcykaoccoymeig, $gaeqamemwmwsyukm);
        goto aegcoomigmqwwaka;
        sewqkgoqqeiogwgc:
        if (is_callable($eqgoocgaqwqcimie)) {
            goto omsqscuggqqkuigc;
        }
        goto ewasskcgskcwkeyq;
        eoqccooyeaocyegw:
        $ymyqweogikqywwqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
        goto wwqmyeqgkqmkoosk;
        uqogiiekomwssgee:
    }
    
    public static function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $eagcmyswaakcwyec = [], $omwmuycmeqcqokom = "\144\151\166", $qmeuaeiseuacgiqc = true)
    {
        goto kymauouamycysiyy;
        qgwisswsyykiimuq:
        self::_appendHTML($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc);
        goto maakkwkkckwawgqq;
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
        iqecwuuaikqmkqyy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wyiuscyymgoqkmws;
        kymauouamycysiyy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kumiqmuaqymmkyic;
        akogicckgmsmmiag:
        $omwmuycmeqcqokom = ManipulateHTML::qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq);
        goto qgwisswsyykiimuq;
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
            kmycyawgoewowaeq:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto kegeyiwiieqmocsk;
            }
            goto oeqekywmewqowkwg;
            gseomoauqsuqccme:
            self::_removeNode($ymyisaeksssueeik);
            goto soeueuyguemogamc;
            ioscumsgeuoekyik:
        }
        goto guyauwwommggyukw;
        wsymimooikcoeamc:
        $ygickiygyemsowyo = null;
        goto gmqcqaiwkusyiuey;
        wyiuscyymgoqkmws:
        $okcscwesammossuq = '';
        goto wsymimooikcoeamc;
        wggceogiyyyaoqca:
        return $nsmgceoqaqogqmuw;
        goto saicagwascmeamuk;
        swwaaaeuyyocowgq:
        eusmmqcsiiyiogqg:
        goto wggceogiyyyaoqca;
        saicagwascmeamuk:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const UPDATE_ACTION = "\x75\x70\x64\141\x74\x65";
    const REMOVE_ACTION = "\x72\145\155\157\166\145";
    const RENAME_ACTION = "\162\145\156\x61\155\145";
    const REPLACE_ACTION = "\162\x65\x70\154\141\143\x65";
    const REPLACE_WITH_ACTION = "\162\x65\x70\154\141\x63\x65\x5f\167\x69\x74\x68";
    
    public static function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, $uuyoeicyoayimaoa = false, $ksaameoqigiaoigg = true)
    {
        goto ywmqqmuyaaecgmui;
        kckiciumueaaywao:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ummmcgmiywgyaqqm;
        ggcgagwamuqckocw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto yweuowuosoummioc;
        gamqsmuumocgweik:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto mscwwgwkgmqgqque;
        suyscmmiukkwmkig:
        return $nsmgceoqaqogqmuw;
        goto iusqyigsmwcwiaeg;
        giaeuoeockyqsyse:
        gcoquwcscysiccec:
        goto suyscmmiukkwmkig;
        uqiouscouqsqeyau:
        if (!$ksaameoqigiaoigg) {
            goto cacouogsmqcomkke;
        }
        goto kckiciumueaaywao;
        ummmcgmiywgyaqqm:
        cacouogsmqcomkke:
        goto quakesoomwuwygsu;
        yweuowuosoummioc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto quywmggomgaseomy;
        }
        goto gamqsmuumocgweik;
        ymykcocgwsmwwami:
        csagaieykqsoyyyo:
        goto uqiouscouqsqeyau;
        mscwwgwkgmqgqque:
        foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) {
            goto oeayowwwskuwywei;
            uyksowciskqigsig:
            goto soqmguugasswqwki;
            goto heaugqmkoiaymyoi;
            oeayowwwskuwywei:
            if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                goto aeokmsquaasumuuo;
            }
            goto ksasgwowcqqegcic;
            oyqggcawowywmgmg:
            goto csagaieykqsoyyyo;
            goto mwggeaakeeuqseiy;
            keuggiweyueacgow:
            owoiouaomwqgksqc:
            goto ycyeqaucoaieegag;
            mwggeaakeeuqseiy:
            oaawymkyguukokoc:
            goto ewyacsgkouuaymem;
            iqmuoeyayeyysksq:
            if (call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) {
                goto oaawymkyguukokoc;
            }
            goto oyqggcawowywmgmg;
            aeueicccggqwcawc:
            goto csagaieykqsoyyyo;
            goto uyksowciskqigsig;
            ksasgwowcqqegcic:
            if ($ymyisaeksssueeik instanceof DOMElement) {
                goto cqmwkoscgigmawys;
            }
            goto mkmgkgowgamqakqi;
            ewyacsgkouuaymem:
            soqmguugasswqwki:
            goto keuggiweyueacgow;
            eocoacoiikkigoiu:
            aeokmsquaasumuuo:
            goto aeueicccggqwcawc;
            mkmgkgowgamqakqi:
            goto soqmguugasswqwki;
            goto eocoacoiikkigoiu;
            heaugqmkoiaymyoi:
            cqmwkoscgigmawys:
            goto iqmuoeyayeyysksq;
            ycyeqaucoaieegag:
        }
        goto ymykcocgwsmwwami;
        ywmqqmuyaaecgmui:
        if (!$ekiuyucoiagmscgy) {
            goto gcoquwcscysiccec;
        }
        goto ggcgagwamuqckocw;
        quakesoomwuwygsu:
        quywmggomgaseomy:
        goto giaeuoeockyqsyse;
        iusqyigsmwcwiaeg:
    }
    
    public static function _getCrawler($nsmgceoqaqogqmuw)
    {
        goto kiceosucogcykyge;
        aaogwucegguweoki:
        moqakkycewiucuis:
        goto meeiequcowsceiow;
        kgeeyaugiyyceaec:
        goto gwycusqkiusmouge;
        goto akcuqqooswuasawe;
        kiceosucogcykyge:
        $kasgukgceywckyou = null;
        goto giueuyueoiukcima;
        awceiuoiqyqaseiq:
        $kasgukgceywckyou = $nsmgceoqaqogqmuw;
        goto iucukgoockccyokm;
        meeiequcowsceiow:
        $kasgukgceywckyou = new Crawler(mb_convert_encoding($nsmgceoqaqogqmuw, "\x48\x54\x4d\x4c\55\105\x4e\x54\111\x54\111\x45\x53", "\x55\x54\x46\x2d\x38"));
        goto mceesakqeysmiauu;
        iucukgoockccyokm:
        goto gwycusqkiusmouge;
        goto aaogwucegguweoki;
        kseyamwikqwqkwgw:
        return $kasgukgceywckyou;
        goto swuwcwceeiosooks;
        ueecsaukysiceeyq:
        if ($nsmgceoqaqogqmuw && trim(preg_replace("\57\134\x73\53\x2f", "\x20", $nsmgceoqaqogqmuw))) {
            goto moqakkycewiucuis;
        }
        goto kgeeyaugiyyceaec;
        akcuqqooswuasawe:
        aieqysoguicqukeq:
        goto awceiuoiqyqaseiq;
        giueuyueoiukcima:
        if ($nsmgceoqaqogqmuw instanceof Crawler) {
            goto aieqysoguicqukeq;
        }
        goto ueecsaukysiceeyq;
        mceesakqeysmiauu:
        gwycusqkiusmouge:
        goto kseyamwikqwqkwgw;
        swuwcwceeiosooks:
    }
    
    public static function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc)
    {
        goto cgcagmggieimycaw;
        cgcagmggieimycaw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wuwkeggsaiumowug;
        qkkiemwuuaaqqyas:
        return $nsmgceoqaqogqmuw;
        goto aagkoumomwwcaeka;
        oegkcqakmussueqq:
        ykgawcqgqysmqioq:
        goto cweguimoaweiumii;
        cweguimoaweiumii:
        keqmucqsyyuikoou:
        goto qkkiemwuuaaqqyas;
        yuqoyicsmawcauec:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ymumcsswaocykmeo;
        wuwkeggsaiumowug:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto keqmucqsyyuikoou;
        }
        goto yuqoyicsmawcauec;
        ymumcsswaocykmeo:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto kgwaiecysoqgkqyu;
            cygeiiegsgiayomk:
            omqycomsaeugqyca:
            goto msugciceoeaqyggk;
            iugeecogeucykkcc:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto uusuweogimkuigcy;
            msugciceoeaqyggk:
            yqsegosoqouiauiw:
            goto awmwewyeqcgmmcyg;
            uusuweogimkuigcy:
            $omwmuycmeqcqokom->cgeyeoimiuyogose($koaqiaecmascwuyy);
            goto cygeiiegsgiayomk;
            kgwaiecysoqgkqyu:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto yqsegosoqouiauiw;
            }
            goto qoueoyeoiiocgoac;
            gaqcauwaswgqcquy:
            if (!$koaqiaecmascwuyy) {
                goto omqycomsaeugqyca;
            }
            goto iugeecogeucykkcc;
            qoueoyeoiiocgoac:
            $koaqiaecmascwuyy = self::_createElementFromHtml($kasgukgceywckyou, $ewgwqamkygiqaawc);
            goto gaqcauwaswgqcquy;
            awmwewyeqcgmmcyg:
            ssqyqgwcimqcuksg:
            goto ecokmyyccossammg;
            ecokmyyccossammg:
        }
        goto oegkcqakmussueqq;
        aagkoumomwwcaeka:
    }
    
    public static function umuecysoywoumgwo($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ayucyyiciocgyass;
        meiqsogowcogmgco:
        wueqcceaguewiucw:
        goto agakiqgiuymqowkc;
        skgeuaegiqaqgyaq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto qegkmgwymeckgwyg;
        ayucyyiciocgyass:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto euoymauomemecuao;
        euoymauomemecuao:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto wueqcceaguewiucw;
        }
        goto skgeuaegiqaqgyaq;
        agakiqgiuymqowkc:
        return false;
        goto eyooouiwwwumauao;
        qegkmgwymeckgwyg:
        return $kwmksuuciqkiymek->count() > 0;
        goto meiqsogowcogmgco;
        eyooouiwwwumauao:
    }
    
    public static function igyokgqyiouieioo(Crawler $kasgukgceywckyou)
    {
        $ymyisaeksssueeik = $kasgukgceywckyou->wugqmqwisygwoeas(0);
        return $ymyisaeksssueeik->ownerDocument;
    }
    
    public static function ygmcsmegcysyeoss($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto imyiqyuaoycegake;
        imyiqyuaoycegake:
        $gaeqamemwmwsyukm = 0;
        goto qeoumcqaaaecsace;
        kykugggwwuqeokou:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto aguwgcwgoukkkmio;
        }
        goto agwuyeemwsccoagc;
        cukksseqkekyucye:
        return $gaeqamemwmwsyukm;
        goto ocueeioeueqmisuo;
        agwuyeemwsccoagc:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto coakmyawmquywmos;
        qeoumcqaaaecsace:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kykugggwwuqeokou;
        ygyoayucuigaoacw:
        aguwgcwgoukkkmio:
        goto cukksseqkekyucye;
        coakmyawmquywmos:
        $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
        goto ygyoayucuigaoacw;
        ocueeioeueqmisuo:
    }
    
    private static function _removeNode(DOMNode $ymyisaeksssueeik)
    {
        $ymyisaeksssueeik->parentNode->uwqgywaceaaymckg($ymyisaeksssueeik);
    }
    
    public static function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto iwcmsykogssougge;
        wcyauuwqsicgkomk:
        gwiykyqeeowisqqk:
        goto yomgkcycysceyagw;
        eioiqwykkuguaygs:
        $omwmuycmeqcqokom = null;
        goto egisiwqggoqcgeum;
        qymucyymugqaaoyi:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto wyiciayqimeqqomu;
            oogiaiuaumioummk:
            $nsmgceoqaqogqmuw = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo();
            goto omiqqwiemqykocci;
            cegkuogwgoiomikw:
            yiayuooesmsmswia:
            goto kwcsomkougiwgaco;
            icimmqwesqkmeuce:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto wysuusuamkqeyqso;
            wyiciayqimeqqomu:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto yiayuooesmsmswia;
            }
            goto icimmqwesqkmeuce;
            omiqqwiemqykocci:
            goto gwiykyqeeowisqqk;
            goto cegkuogwgoiomikw;
            kwcsomkougiwgaco:
            ggwakcmgwkcsasug:
            goto gkcycgsoawqoyesg;
            wysuusuamkqeyqso:
            $omwmuycmeqcqokom->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom);
            goto oogiaiuaumioummk;
            gkcycgsoawqoyesg:
        }
        goto wcyauuwqsicgkomk;
        oqiciswgoamuceqq:
        if (!$kasgukgceywckyou) {
            goto qeauoqcaeymayusu;
        }
        goto eioiqwykkuguaygs;
        egisiwqggoqcgeum:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto qymucyymugqaaoyi;
        iwcmsykogssougge:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto oqiciswgoamuceqq;
        agisoqkoyekmsyga:
        return $nsmgceoqaqogqmuw;
        goto wuegeyoegwoqcumy;
        yomgkcycysceyagw:
        qeauoqcaeymayusu:
        goto agisoqkoyekmsyga;
        wuegeyoegwoqcumy:
    }
    
    private static function _getHtml($gykwsaeqegqowywy, $ggauoeuaesiymgee = '')
    {
        goto euycuguygmweyiwm;
        ykssqiacqucsmmac:
        if (is_string($nsmgceoqaqogqmuw)) {
            goto qqcoeqwimyugqwuc;
        }
        goto sueokeomisikqomo;
        gygmcmiciswgeswm:
        return $nsmgceoqaqogqmuw;
        goto cckmokqegquyoaoy;
        euycuguygmweyiwm:
        try {
            goto wimkgcmkgcaewcwy;
            mimysauwikioomiy:
            $nsmgceoqaqogqmuw = preg_replace(["\57\x28\74\51\x28\x68\145\141\x64\51\x28\x5b\x5e\76\x5d\x2a\x3f\x29\50\134\x2f\77\x5c\x73\x2a\x3e\x29\174\74\x5c\x2f\150\145\x61\144\x3e\57", "\57\x28\74\51\50\x62\x6f\144\171\51\50\133\x5e\x3e\x5d\x2a\x3f\x29\50\x5c\57\x3f\x5c\x73\52\76\x29\x7c\74\134\x2f\x62\157\144\x79\76\57", "\57\50\160\141\x72\x65\x6e\x74\75\42\x29\x28\133\141\x2d\172\x41\x2d\132\x30\55\x39\x3a\x3b\x5c\56\x5c\x73\x5c\x28\134\51\x5c\55\134\x2c\135\x2a\x29\x28\x22\x29\x2f"], '', $nsmgceoqaqogqmuw);
            goto ymessmmcgesuuyys;
            uwawwskgqkieusog:
            if ($kkkqocwqmaokqcmc) {
                goto kkucqmyecgwmioei;
            }
            goto coiqsauaqkqykkus;
            coiqsauaqkqykkus:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee);
            goto mimysauwikioomiy;
            eqmmegqmukwekkkk:
            if ($gykwsaeqegqowywy instanceof DOMDocument) {
                goto ugksoyaaemqyoywa;
            }
            goto scmgoisaawgacqyu;
            qquecwewqeeqyysw:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy;
            goto ewceaieowsgamkyi;
            wimkgcmkgcaewcwy:
            $ikoqkmiqkckowcgg = "\x3c\41\x44\117\103\124\131\120\x45\x20\150\164\155\154\76";
            goto egocwogikoqicuyo;
            csguigwqeomsyyqw:
            if ($gykwsaeqegqowywy instanceof Crawler) {
                goto uiewawqqakquwmsq;
            }
            goto eqmmegqmukwekkkk;
            smikqieaosiykeii:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->yqwwccackoayicyy();
            goto oukysgqmgiumaasc;
            ymessmmcgesuuyys:
            goto wcwwkcwqkicykkmi;
            goto ggmmkmasyqcugkkm;
            ggmmkmasyqcugkkm:
            kkucqmyecgwmioei:
            goto smikqieaosiykeii;
            soasesuoocikiquy:
            goto uememeasawuoseqy;
            goto okuuaqumeeamcgiw;
            umgcmywyqkwsmsku:
            ugksoyaaemqyoywa:
            goto ocqmicyceamumeia;
            scmgoisaawgacqyu:
            if (is_string($gykwsaeqegqowywy)) {
                goto migcqoeeeukcyciu;
            }
            goto guwuqywoqwigamaw;
            ocqmicyceamumeia:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->skkueuquuqweeyqo();
            goto soasesuoocikiquy;
            oukysgqmgiumaasc:
            $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw;
            goto umgmgswkigyyweke;
            muwaaaqcuwaeoakw:
            uiewawqqakquwmsq:
            goto uwawwskgqkieusog;
            iwcaywweqcgmemko:
            goto uememeasawuoseqy;
            goto muwaaaqcuwaeoakw;
            egocwogikoqicuyo:
            $kkkqocwqmaokqcmc = strpos(strtolower($ggauoeuaesiymgee), strtolower($ikoqkmiqkckowcgg)) !== false;
            goto csguigwqeomsyyqw;
            guwuqywoqwigamaw:
            throw new InvalidArgumentException();
            goto iwcaywweqcgmemko;
            ewceaieowsgamkyi:
            uememeasawuoseqy:
            goto ceaewumsyymakaoc;
            okuuaqumeeamcgiw:
            migcqoeeeukcyciu:
            goto qquecwewqeeqyysw;
            aiyeuqqmcksqsyeq:
            goto uememeasawuoseqy;
            goto umgcmywyqkwsmsku;
            umgmgswkigyyweke:
            wcwwkcwqkicykkmi:
            goto aiyeuqqmcksqsyeq;
            ceaewumsyymakaoc:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        }
        goto ykssqiacqucsmmac;
        mggckwqcieykwima:
        qqcoeqwimyugqwuc:
        goto gygmcmiciswgeswm;
        sueokeomisikqomo:
        $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        goto mggckwqcieykwima;
        cckmokqegquyoaoy:
    }
    
    public static function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::UPDATE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ugecckaqeasoimos;
        ammmoycqyaqeqiww:
        csgowsgmcyswmiec:
        goto okwouciqeqeuogos;
        okwouciqeqeuogos:
        return $siquossayskcwkea;
        goto qeimwiyggaoimmoq;
        qwsqoioiwieqgeee:
        icqaoiyumasyygik:
        goto ammmoycqyaqeqiww;
        goiiekmeukcsamca:
        $siquossayskcwkea = [];
        goto gigkawsyquoowcms;
        ceyeeieiggoamgwe:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto icoacuwgkgqykgee;
            icoacuwgkgqykgee:
            $siquossayskcwkea = self::wuuawmeqqyyyemsw($ymyisaeksssueeik);
            goto equcgweimiaqsysk;
            equcgweimiaqsysk:
            if (!$siquossayskcwkea) {
                goto awmwcaycosymoesq;
            }
            goto qoimoeswgougaeoa;
            wsqkqmcuoauyescs:
            awmwcaycosymoesq:
            goto kmqagkiwcsuimayg;
            kmqagkiwcsuimayg:
            eiaqawokkeocqqsk:
            goto uquqecagkoyomiiy;
            qoimoeswgougaeoa:
            goto icqaoiyumasyygik;
            goto wsqkqmcuoauyescs;
            uquqecagkoyomiiy:
        }
        goto qwsqoioiwieqgeee;
        ugecckaqeasoimos:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto goiiekmeukcsamca;
        gigkawsyquoowcms:
        if (!$kasgukgceywckyou) {
            goto csgowsgmcyswmiec;
        }
        goto uckiysiyuksyuaoa;
        uckiysiyuksyuaoa:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ceyeeieiggoamgwe;
        qeimwiyggaoimmoq:
    }
    
    public static function wuuawmeqqyyyemsw($ymyisaeksssueeik)
    {
        goto ikmqwkwwskokemqy;
        ikmqwkwwskokemqy:
        $siquossayskcwkea = [];
        goto gumkwiqcaqusgwqm;
        qeqagimacwmgmqiq:
        mmmccuoeoeuskisk:
        goto ekukcomgoyeiuici;
        gumkwiqcaqusgwqm:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto mmmccuoeoeuskisk;
        }
        goto kakskegscmoqcksc;
        syweoqsuaauksacw:
        ggcaqksgsoeecwak:
        goto qeqagimacwmgmqiq;
        ekukcomgoyeiuici:
        return $siquossayskcwkea;
        goto kqmgqywmgomwmokg;
        kakskegscmoqcksc:
        foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
            $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue;
            eugiyageaomiuoki:
        }
        goto syweoqsuaauksacw;
        kqmgqywmgomwmokg:
    }
    
    public static function wugqmqwisygwoeas($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto yiomcwmuukooycqq;
        yiomcwmuukooycqq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto saqqooggaykweqce;
        wykieskeigmammue:
        return $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto aiewsymeiqiakqqs;
        saqqooggaykweqce:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wykieskeigmammue;
        aiewsymeiqiakqqs:
    }
    
    public static function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto muqkgsmqakgwkaym;
        muqkgsmqakgwkaym:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ckiswiiwkuugeogg;
        ywuqguicqikeqiog:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto uoygcyuomiyquumm;
        uoygcyuomiyquumm:
        mymcocumieiauquq:
        goto uasacoumuyqgeuqy;
        uasacoumuyqgeuqy:
        return $nsmgceoqaqogqmuw;
        goto sgwmqsowsekomcso;
        keowaakoqimieymo:
        yiqweuusyaikwqgg:
        goto ywuqguicqikeqiog;
        esmaiecuukakamog:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) {
            goto sekgqycaaucagggo;
            iiyamiqswaymisue:
            oiymkikesysgoyma:
            goto iqwqucswgosmiwyy;
            woqoqsqomgswqicc:
            foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) {
                goto okqoikkyquugiuia;
                okqoikkyquugiuia:
                if (!$uumwowmewaqyggce instanceof DOMNode) {
                    goto gcwimimmgaoueegm;
                }
                goto wouesssgyqywasom;
                wouesssgyqywasom:
                $okcscwesammossuq = [];
                goto uimeimmscccaqukm;
                escwyiwieqcweggy:
                yoygkuwyqmgaqewi:
                goto ikiooiowwwwaygwi;
                ikiooiowwwwaygwi:
                $uuswugicgoqcyiiy = $uumwowmewaqyggce->ownerDocument->auokmyiaciikcekk($ymqmyyeuycgmigyo);
                goto cwwguccuiymmeosu;
                yyakcqyqkuuokgqw:
                mosmyseyaemqewwk:
                goto ewouumyoyasgkgig;
                qeaeawocamciyiyk:
                gcwimimmgaoueegm:
                goto yyakcqyqkuuokgqw;
                iyocukugwkwoosqy:
                foreach ($uumwowmewaqyggce->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto emkcaamgumgwwyem;
                    goekuagoayyskiio:
                    $uuswugicgoqcyiiy->cmgoqeksagmigwmg($qmgyyqwkskaiwcqg, $giueyucwwwwiooim);
                    goto iaewimwissuueacw;
                    iaewimwissuueacw:
                    sukokqcaoygeisos:
                    goto qggomaqouiuasaum;
                    emkcaamgumgwwyem:
                    $qmgyyqwkskaiwcqg = $sicussmmuqmeqygw->nodeName;
                    goto eoeuieksgoyqcgsu;
                    eoeuieksgoyqcgsu:
                    $giueyucwwwwiooim = $sicussmmuqmeqygw->nodeValue;
                    goto goekuagoayyskiio;
                    qggomaqouiuasaum:
                }
                goto kseweksyciigumec;
                kseweksyciigumec:
                mimseykuewemegow:
                goto keegiisaqayqmogu;
                kuywseoceqkawokq:
                suogukqqcuaecgmg:
                goto iyocukugwkwoosqy;
                cwwguccuiymmeosu:
                foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) {
                    $uuswugicgoqcyiiy->cgeyeoimiuyogose($uumwowmewaqyggce->ownerDocument->gqskweuukuceuaoq($wcgsoqmmciswkmiq, true));
                    iwaqiakswyiuyyao:
                }
                goto kuywseoceqkawokq;
                uimeimmscccaqukm:
                foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) {
                    $okcscwesammossuq[] = $wcgsoqmmciswkmiq;
                    ciwweeyeeieqgowe:
                }
                goto escwyiwieqcweggy;
                keegiisaqayqmogu:
                $uumwowmewaqyggce->parentNode->caqmeawgoiceoymu($uuswugicgoqcyiiy, $uumwowmewaqyggce);
                goto qeaeawocamciyiyk;
                ewouumyoyasgkgig:
            }
            goto iiyamiqswaymisue;
            sekgqycaaucagggo:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto woqoqsqomgswqicc;
            iqwqucswgosmiwyy:
            gamiacsewcmmiece:
            goto beowceiucukcwego;
            beowceiucukcwego:
        }
        goto keowaakoqimieymo;
        ckiswiiwkuugeogg:
        if (!$kasgukgceywckyou) {
            goto mymcocumieiauquq;
        }
        goto esmaiecuukakamog;
        sgwmqsowsekomcso:
    }
    
    public static function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto qcewkmiokmwaakyo;
        cqcqsoqaumyuyemo:
        qikaumyuwkusqmcy:
        goto csoeiakqgmuockgk;
        qcewkmiokmwaakyo:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto iqeqegeqgsmmaeay;
        iqeqegeqgsmmaeay:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto qikaumyuwkusqmcy;
        }
        goto qoeoouiewgwuyayg;
        wayaguckegemumuy:
        egcucgemmkamyiuu:
        goto kkgkywswiimccaog;
        kkgkywswiimccaog:
        cegaaikcsiwyswca:
        goto awukmeygqcaeyaeg;
        kwqqeiiqgiaoquag:
        rgemwoeoywekwuww:
        goto gkuukqkuaayagqwe;
        iqwsgmwqeskwqckm:
        self::_removeElement($kasgukgceywckyou, $sgksuwkwyimqgaii);
        goto yqisiuioymswaciy;
        yqisiuioymswaciy:
        goto cegaaikcsiwyswca;
        goto kwqqeiiqgiaoquag;
        awukmeygqcaeyaeg:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto cqcqsoqaumyuyemo;
        qoeoouiewgwuyayg:
        if (is_array($sgksuwkwyimqgaii)) {
            goto rgemwoeoywekwuww;
        }
        goto iqwsgmwqeskwqckm;
        gkuukqkuaayagqwe:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) {
            self::_removeElement($kasgukgceywckyou, $yuumukkaswwoywya);
            scequiwqaummymka:
        }
        goto wayaguckegemumuy;
        csoeiakqgmuockgk:
        return $nsmgceoqaqogqmuw;
        goto ewuciaosgqwwagsc;
        ewuciaosgqwwagsc:
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
        goto sqowskoquogmiiwg;
        owuommygccmkuues:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto gcqqqceoakukiuim;
            mokaauiekiycqsii:
            smuuwogesuiogomg:
            goto akyieugiomeuaqsk;
            kgmmesqykuckqgqg:
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                goto musoessicqgioaci;
                cgcyciqqcqiimwse:
                foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto cqkeucwwyywigyqk;
                    isuyseouiawyweke:
                    wymogskocqsmiimw:
                    goto ecmowkisqwcgyykc;
                    cqkeucwwyywigyqk:
                    $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName;
                    goto yiqwwseykuimmeuc;
                    yiqwwseykuimmeuc:
                    if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak)) {
                        goto wwcwmiwqwiygmyka;
                    }
                    goto meiiqwkkeguigquc;
                    meiiqwkkeguigquc:
                    $ymyisaeksssueeik->cmgoqeksagmigwmg($siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue);
                    goto cyiwuweakowgmamu;
                    cyiwuweakowgmamu:
                    wwcwmiwqwiygmyka:
                    goto isuyseouiawyweke;
                    ecmowkisqwcgyykc:
                }
                goto csymkqmseeouiacg;
                iqewyeqegsuemqgc:
                ayucyiqeeeumawgo:
                goto jiykeiuymeoowsma;
                csymkqmseeouiacg:
                equeyqisaekucoyq:
                goto qykaososcekymqeo;
                qykaososcekymqeo:
                ygcocguewqswqcsa:
                goto iqewyeqegsuemqgc;
                aowacowggwuykewe:
                $msqkueqksqwmskak = array_keys($siquossayskcwkea);
                goto cgcyciqqcqiimwse;
                musoessicqgioaci:
                if (!$ymyisaeksssueeik instanceof DOMNode) {
                    goto ygcocguewqswqcsa;
                }
                goto aowacowggwuykewe;
                jiykeiuymeoowsma:
            }
            goto mokaauiekiycqsii;
            akyieugiomeuaqsk:
            qokcmisciyieiwyi:
            goto yukykeccsygagcsm;
            gcqqqceoakukiuim:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto kgmmesqykuckqgqg;
            yukykeccsygagcsm:
        }
        goto qgyeaeoyqscmuqqy;
        cwaukuukmsqkqqoc:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto mosmyyysosawmqku;
        kcsqyquoyoyssiik:
        return $nsmgceoqaqogqmuw;
        goto ymmgkaaokqasmaum;
        qgyeaeoyqscmuqqy:
        aqukigyaugymgocm:
        goto cwaukuukmsqkqqoc;
        sqowskoquogmiiwg:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wcqkwcqqqsygagsg;
        wcqkwcqqqsygagsg:
        if (!$kasgukgceywckyou) {
            goto akiuccuwusyiywaa;
        }
        goto owuommygccmkuues;
        mosmyyysosawmqku:
        akiuccuwusyiywaa:
        goto kcsqyquoyoyssiik;
        ymmgkaaokqasmaum:
    }
    
    public static function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _find(?Crawler $kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto smsgceqwueqiwmyi;
        ywoisggyqsommewa:
        return $kasgukgceywckyou->filter($yuumukkaswwoywya);
        goto kkewwsgkgooicawy;
        kkewwsgkgooicawy:
        yscsaueouasieayc:
        goto wikugsiimiguuwuw;
        wikugsiimiguuwuw:
        return $kasgukgceywckyou;
        goto uqwmcimomeomgqgi;
        smsgceqwueqiwmyi:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto yscsaueouasieayc;
        }
        goto ywoisggyqsommewa;
        uqwmcimomeomgqgi:
    }
    
    private static function _removeElement($kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto cckseausycyccake;
        migkmccwwikseoos:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            self::_removeNode($ymyisaeksssueeik);
            qmsikcqgaumiyego:
        }
        goto mquaoucacecoymqu;
        cckseausycyccake:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto migkmccwwikseoos;
        mquaoucacecoymqu:
        eesgqauaaeqiycee:
        goto oucwkycugsesqoas;
        oucwkycugsesqoas:
    }
    
    public static function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee)
    {
        goto kaooossoiysywsuk;
        cqwmseemsiiaqgoo:
        return $eqgoocgaqwqcimie;
        goto yeewwwkywuowoscq;
        sqqqwsqwmossuima:
        $eqgoocgaqwqcimie = '';
        goto siwscqyokoekmooc;
        kaooossoiysywsuk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto sqqqwsqwmossuima;
        siwscqyokoekmooc:
        if (!$kasgukgceywckyou) {
            goto eqiesmsygmemseog;
        }
        goto ggqwikwoioeuqsam;
        kyiikasuaqaeigae:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uaaigcisokikuqgu;
            imcqqemiwqqegsmk:
            if (!$eqgoocgaqwqcimie) {
                goto wmcsksugskiskyyy;
            }
            goto mcygayiqasgoyqss;
            mcygayiqasgoyqss:
            goto wcqggkigoogqmmqk;
            goto iycosyeceoegukgg;
            uaaigcisokikuqgu:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto yeqgqmywegcwsiow;
            }
            goto cuqcgywmuqoakieq;
            iycosyeceoegukgg:
            wmcsksugskiskyyy:
            goto dsqeweimquoouiyo;
            dsqeweimquoouiyo:
            yeqgqmywegcwsiow:
            goto gmmwukkcaouckswu;
            gmmwukkcaouckswu:
            cceewgewommawcii:
            goto qmuqcuumuagkyggg;
            cuqcgywmuqoakieq:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee);
            goto imcqqemiwqqegsmk;
            qmuqcuumuagkyggg:
        }
        goto ocgiuagqmmqakago;
        ocgiuagqmmqakago:
        wcqggkigoogqmmqk:
        goto aocyeyuakyusikwq;
        ggqwikwoioeuqsam:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto kyiikasuaqaeigae;
        aocyeyuakyusikwq:
        eqiesmsygmemseog:
        goto cqwmseemsiiaqgoo;
        yeewwwkywuowoscq:
    }
    
    public static function goqgkgckyagueiso($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_WITH_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _createElement(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw)
    {
        goto gsegcywyaasmwyko;
        teuusocwmquakkyc:
        kaccyaysqwkaoyka:
        goto ykemkuywkaowmyuc;
        meeiyyaqksugkeai:
        foreach ($qeaoumiemyikogys->auamuceiowkuacoq("\142\x6f\x64\x79")->item(0)->childNodes as $ymyisaeksssueeik) {
            $omwmuycmeqcqokom->cgeyeoimiuyogose($omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true));
            ceomusueeoaqyume:
        }
        goto teuusocwmquakkyc;
        gsegcywyaasmwyko:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto meeiyyaqksugkeai;
        ykemkuywkaowmyuc:
    }
    
    private static function _createElementFromHtml(Crawler $kasgukgceywckyou, $nsmgceoqaqogqmuw)
    {
        goto skmkmwkyeuowoaqa;
        cyuwoeiiwcsqukku:
        $kgcekiucekagcgai = self::igyokgqyiouieioo($kasgukgceywckyou);
        goto pouyossuowuwcsma;
        skmkmwkyeuowoaqa:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto cyuwoeiiwcsqukku;
        pouyossuowuwcsma:
        return $kgcekiucekagcgai->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
        goto msiuouqukawgegwo;
        msiuouqukawgegwo:
    }
    
    public static function ksgyqykcguougeue(DOMNode $ymyisaeksssueeik, $nsmgceoqaqogqmuw)
    {
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        return $ymyisaeksssueeik->ownerDocument->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
    }
    
    private static function _appendHTML($omwmuycmeqcqokom, $nsmgceoqaqogqmuw, $qmeuaeiseuacgiqc = true)
    {
        goto xawawcwogwekqmqc;
        mukeowkkueukysww:
        foreach (self::_find($kasgukgceywckyou, "\x62\157\x64\x79") as $ymyisaeksssueeik) {
            goto caqmiuioaesgyaug;
            caqmiuioaesgyaug:
            $ymyisaeksssueeik = $omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true);
            goto okeqecawkekacsqc;
            smqsooyiiesuyoos:
            auqwmowcyqaioyse:
            goto mgkokmqyecocwwgo;
            okeqecawkekacsqc:
            self::_appendHTML($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc);
            goto smqsooyiiesuyoos;
            mgkokmqyecocwwgo:
        }
        goto iyemcyamksqakiiw;
        iyemcyamksqakiiw:
        wymyuyaiikioyeao:
        goto yceeiagmcyqcayes;
        comcmyekisewieyc:
        haiiaygcugigaggi:
        goto qqaoqesyysccooug;
        uyeimkwsuoqgewgy:
        wqemgeeosmaqkuye:
        goto asysseskuwwesiqc;
        ugmqiuwksqaqywco:
        $omwmuycmeqcqokom->cgeyeoimiuyogose($nsmgceoqaqogqmuw);
        goto ikiyguwaiacioake;
        xawawcwogwekqmqc:
        if (!$omwmuycmeqcqokom instanceof DOMNode) {
            goto eeyoaucukkaesqmk;
        }
        goto yumegkesogwyweiq;
        yceeiagmcyqcayes:
        goto haiiaygcugigaggi;
        goto uyeimkwsuoqgewgy;
        yumegkesogwyweiq:
        if ($nsmgceoqaqogqmuw instanceof DOMNode) {
            goto wqemgeeosmaqkuye;
        }
        goto coscuikaoymwwmii;
        gwuisuuwecwcaaik:
        kgaciayyiuykqyko:
        goto ugmqiuwksqaqywco;
        ikiyguwaiacioake:
        agkwamguicmweoom:
        goto comcmyekisewieyc;
        coscuikaoymwwmii:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mukeowkkueukysww;
        qqaoqesyysccooug:
        eeyoaucukkaesqmk:
        goto cemammoacacweske;
        asysseskuwwesiqc:
        if ($qmeuaeiseuacgiqc) {
            goto kgaciayyiuykqyko;
        }
        goto ymkakuuweqoysagc;
        ymkakuuweqoysagc:
        $omwmuycmeqcqokom->kqgwgkuykuumwcgw($nsmgceoqaqogqmuw, $omwmuycmeqcqokom->firstChild);
        goto cicooguqkeoeyges;
        cicooguqkeoeyges:
        goto agkwamguicmweoom;
        goto gwuisuuwecwcaaik;
        cemammoacacweske:
    }
    
    public static function wesimowqwekiqiow($nsmgceoqaqogqmuw, $eeqsmkqmsowmicwi = "\x73\x74\171\x6c\x65", $cussukyecoaeayqk = true)
    {
        goto qeywecigqgseiogw;
        qiomiuawymsqimgk:
        $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc;
        goto oaosaqoqiiciwgwg;
        kuwieemysouaokqs:
        $ewgwqamkygiqaawc = '';
        goto kywicmoksqkayose;
        kcaswmekegcguiwu:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto yceyawgskeqggcuy;
        wgyakmueooeqsyqc:
        memocaoaimgeuimm:
        goto wgyukgmocmigoeuo;
        msweyewumoisksiy:
        return $nsmgceoqaqogqmuw;
        goto uyqckmcowkimsmyq;
        yceyawgskeqggcuy:
        ymgkgeqimsusocoy:
        goto msweyewumoisksiy;
        uuooemyeyeuswqea:
        $kswaimykcacqyaay = self::_find($kasgukgceywckyou, "\x68\x65\x61\x64\40\76\40{$eeqsmkqmsowmicwi}")->wugqmqwisygwoeas(0);
        goto kuwieemysouaokqs;
        wiyauoggygqoymwu:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, "\x5b\163\x74\171\154\x65\x5d");
        goto aeawksowymsuogeu;
        ucwkqqscieaqmkms:
        if (!$kasgukgceywckyou) {
            goto ymgkgeqimsusocoy;
        }
        goto uuooemyeyeuswqea;
        oaosaqoqiiciwgwg:
        ykuiuuqwkwwgeqko:
        goto kcaswmekegcguiwu;
        meomioiwwciyyyue:
        goto ykuiuuqwkwwgeqko;
        goto euguuygaocimsesi;
        imoyquwyuicwioom:
        $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent;
        goto yauausaeuasqsgeu;
        yauausaeuasqsgeu:
        aokkmsyimyouoeim:
        goto wiyauoggygqoymwu;
        qeywecigqgseiogw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ucwkqqscieaqmkms;
        aeawksowymsuogeu:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ugcgmougmeoayiea;
            uuawmiyqysumgaqy:
            $omasqoksqewuwwkq = ManipulateString::uniqid(5);
            goto uyusyuseakqmycim;
            ywkkyykyayusymai:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($yuumukkaswwoywya);
            goto uuawmiyqysumgaqy;
            qqqyksacwuumcmia:
            $acqqmqmcquukaqsc = "\56{$omasqoksqewuwwkq}\173{$eqgoocgaqwqcimie}\x7d";
            goto misgeimskqgmumga;
            iqeksucuwucgsuaq:
            $egkyssmuqcwaciya = $ymyisaeksssueeik->waecsyqmwascmqoa("\143\154\141\x73\x73");
            goto kagiaysuecmceegy;
            sccqusyuqeiugcem:
            $eqgoocgaqwqcimie = str_replace("\x21\x69\155\160\157\162\x74\141\156\164", '', $eqgoocgaqwqcimie);
            goto qoaiwgymwioiissy;
            uyusyuseakqmycim:
            if ($cussukyecoaeayqk) {
                goto ugogcmgasecqmaqo;
            }
            goto sccqusyuqeiugcem;
            gisygciesowawkqy:
            $ymyisaeksssueeik->cmgoqeksagmigwmg("\x63\154\141\x73\x73", $egkyssmuqcwaciya);
            goto gccikccauwosemee;
            yayuqeqkcqmiiiyw:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($yuumukkaswwoywya);
            goto kaqeqoaoqacmssmg;
            gccikccauwosemee:
            mmyqweeceiaeqqus:
            goto cowscsiukyiwymqi;
            cowscsiukyiwymqi:
            cmiqweaugcqmwoiq:
            goto emsquuamiesiqseq;
            misgeimskqgmumga:
            $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc;
            goto iqeksucuwucgsuaq;
            ugcgmougmeoayiea:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto cmiqweaugcqmwoiq;
            }
            goto agaaausyuimymgmm;
            agaaausyuimymgmm:
            $yuumukkaswwoywya = "\x73\164\171\x6c\145";
            goto yayuqeqkcqmiiiyw;
            qoaiwgymwioiissy:
            ugogcmgasecqmaqo:
            goto qqqyksacwuumcmia;
            kaqeqoaoqacmssmg:
            if (!$eqgoocgaqwqcimie) {
                goto mmyqweeceiaeqqus;
            }
            goto ywkkyykyayusymai;
            kagiaysuecmceegy:
            $egkyssmuqcwaciya .= "\x20{$omasqoksqewuwwkq}";
            goto gisygciesowawkqy;
            emsquuamiesiqseq:
            kusuckgswgkceusi:
            goto wgocyuiekyasmquq;
            wgocyuiekyasmquq:
        }
        goto wgyakmueooeqsyqc;
        wgyukgmocmigoeuo:
        if ($kswaimykcacqyaay instanceof DOMElement) {
            goto siyawoacgucmaoky;
        }
        goto yagiokukkmimaoae;
        euguuygaocimsesi:
        siyawoacgucmaoky:
        goto qiomiuawymsqimgk;
        kywicmoksqkayose:
        if (!$kswaimykcacqyaay instanceof DOMNode) {
            goto aokkmsyimyouoeim;
        }
        goto imoyquwyuicwioom;
        yagiokukkmimaoae:
        self::pmouaioykaoceyag($kasgukgceywckyou, "\x68\x65\141\144", $ewgwqamkygiqaawc);
        goto meomioiwwciyyyue;
        uyqckmcowkimsmyq:
    }
    
    public static function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, $egomoiciasmiesww = false)
    {
        goto ssecwqeouoeamsio;
        coqewawckmigciso:
        $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc;
        goto kwaammsskmiamace;
        ueowcqqgaoysmqie:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $yuumukkaswwoywya)->wugqmqwisygwoeas(0);
        goto ooiockqsscsuqokc;
        ugmowoyeoowiiqie:
        myyycckqeikqiuqi:
        goto coqewawckmigciso;
        wuwggkokqumggyiu:
        $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc;
        goto ugmowoyeoowiiqie;
        kwaammsskmiamace:
        ysoesyqiaaugywgi:
        goto amacugyqcmgqiaog;
        uucwuqeucsiykagi:
        if (!$kasgukgceywckyou) {
            goto qmymeeegusssawmu;
        }
        goto ueowcqqgaoysmqie;
        kecqwqseaiaomoao:
        return $nsmgceoqaqogqmuw;
        goto gmgkmqouwygkwuua;
        acsgyykcowwkyayy:
        if ($egomoiciasmiesww) {
            goto myyycckqeikqiuqi;
        }
        goto wuwggkokqumggyiu;
        ccssuekkawuwwkyk:
        qmymeeegusssawmu:
        goto kecqwqseaiaomoao;
        ssecwqeouoeamsio:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto uucwuqeucsiykagi;
        ooiockqsscsuqokc:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto ysoesyqiaaugywgi;
        }
        goto acsgyykcowwkyayy;
        amacugyqcmgqiaog:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ccssuekkawuwwkyk;
        gmgkmqouwygkwuua:
    }
    
    public static function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc = true)
    {
        goto ieyowiusaeousyse;
        emkuqqeesmiycqqo:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto kmkmisyucykygqoc;
        }
        goto ewyukeoyymaooaqa;
        yoeiuoyekameacwu:
        wccegsoaeisquyeq:
        goto wwmggkkyegumakew;
        ooueyocsuseuawgc:
        if (!$kasgukgceywckyou) {
            goto wccegsoaeisquyeq;
        }
        goto eoskieimkcimmwio;
        ugaoeiuoosyggsmi:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto yoeiuoyekameacwu;
        ewyukeoyymaooaqa:
        self::_appendHTML($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc);
        goto mksggqikmumuycga;
        mksggqikmumuycga:
        kmkmisyucykygqoc:
        goto ugaoeiuoosyggsmi;
        ieyowiusaeousyse:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ooueyocsuseuawgc;
        eoskieimkcimmwio:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $omwmuycmeqcqokom)->wugqmqwisygwoeas(0);
        goto emkuqqeesmiycqqo;
        wwmggkkyegumakew:
        return $nsmgceoqaqogqmuw;
        goto cquumoyicacciqei;
        cquumoyicacciqei:
    }
    
    public static function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto oyquokessoouwuke;
        mcqkmiukmosqwemy:
        asoycqscmioaaggw:
        goto ksccwuecqkqkawck;
        ksccwuecqkqkawck:
        return $aqykuigiuwmmcieu;
        goto eeeaumqcsieckaoc;
        mwimaeocgaqeiukm:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent;
        goto cycoyeooqscgugwa;
        oyquokessoouwuke:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mgykueyyyoueykgm;
        mcmmgacykcsowqiw:
        gsquqssmimkgcoga:
        goto mwimaeocgaqeiukm;
        qauqcecycoswuoyc:
        goto gkcsgskucsicakwg;
        goto mcmmgacykcsowqiw;
        eequmkcwsuakwwmo:
        ioqkkgikqygkemce:
        goto mcqkmiukmosqwemy;
        iigwwyogmwesyoau:
        if ($ewgwqamkygiqaawc) {
            goto gsquqssmimkgcoga;
        }
        goto maugkumeqqaoqmkq;
        skqyeawoqyssamii:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto aaccwuemygqmicme;
        wumeiwysoiscimiu:
        swiaoqqqyqusscqi:
        goto eequmkcwsuakwwmo;
        qsiqckciwyomqwue:
        $ymyisaeksssueeik = $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto gqmgeusocymaikoy;
        aaccwuemygqmicme:
        if (!$kwmksuuciqkiymek) {
            goto ioqkkgikqygkemce;
        }
        goto qsiqckciwyomqwue;
        mgykueyyyoueykgm:
        $aqykuigiuwmmcieu = '';
        goto oiksiqocuawwgeek;
        cycoyeooqscgugwa:
        gkcsgskucsicakwg:
        goto wumeiwysoiscimiu;
        oiksiqocuawwgeek:
        if (!$kasgukgceywckyou) {
            goto asoycqscmioaaggw;
        }
        goto skqyeawoqyssamii;
        gqmgeusocymaikoy:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto swiaoqqqyqusscqi;
        }
        goto iigwwyogmwesyoau;
        maugkumeqqaoqmkq:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
        goto qauqcecycoswuoyc;
        eeeaumqcsieckaoc:
    }
    
    public static function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto ccwaiwmcccmswyau;
        iimeieccwuumkgim:
        suqosyewmcawwouy:
        goto fommkikuoyaeskiw;
        xiwcqyowugqukksy:
        if (!$kasgukgceywckyou) {
            goto esokuuqukgaiiuao;
        }
        goto sociuiuiwsymiyam;
        fommkikuoyaeskiw:
        esokuuqukgaiiuao:
        goto ouecgmgoaaswqomi;
        ouecgmgoaaswqomi:
        return $sogksuscggsicmac;
        goto okkimkuusqsiemkk;
        qoiqosqiguawwekg:
        $sogksuscggsicmac = [];
        goto xiwcqyowugqukksy;
        ccwaiwmcccmswyau:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qoiqosqiguawwekg;
        sociuiuiwsymiyam:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto gyyawusuyeigckys;
        gyyawusuyeigckys:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uqsmsqoeimicguwe;
            mawsiqmcsguuokok:
            yyukimsicowasyqs:
            goto kisaoauaekgkauui;
            caaqcciyeymoqqmc:
            self::_removeNode($ymyisaeksssueeik);
            goto kkeakokiekuywmwy;
            gckckwqqgkoyyagq:
            myusuecogkwoqimq:
            goto mickmqggcqwackce;
            uoqwymoegwoweuyk:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->textContent;
            goto mawsiqmcsguuokok;
            mkaoooyookegwgwg:
            goto yyukimsicowasyqs;
            goto eaasaucuyacqooey;
            kisaoauaekgkauui:
            $sogksuscggsicmac[] = $aqykuigiuwmmcieu;
            goto gckckwqqgkoyyagq;
            uqsmsqoeimicguwe:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto myusuecogkwoqimq;
            }
            goto caaqcciyeymoqqmc;
            gmcsqgoweawewags:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto mkaoooyookegwgwg;
            eaasaucuyacqooey:
            kqawgskqiimioaku:
            goto uoqwymoegwoweuyk;
            mickmqggcqwackce:
            guwmecmmcueokcgu:
            goto egcyaksemqaakqgy;
            kkeakokiekuywmwy:
            if ($ewgwqamkygiqaawc) {
                goto kqawgskqiimioaku;
            }
            goto gmcsqgoweawewags;
            egcyaksemqaakqgy:
        }
        goto iimeieccwuumkgim;
        okkimkuusqsiemkk:
    }
    
    public static function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, $ymkomoccmymcoiea = "\163\164\171\154\x65", $wamcomkuwysqgwgk = "\45\x73\73")
    {
        goto gyqaqyuewuquqkuy;
        jggaoyqecgewsysy:
        cymoaqswaeycikca:
        goto acisamqweoscawig;
        uqmscgsoqeysooqc:
        if (!$kasgukgceywckyou) {
            goto cymoaqswaeycikca;
        }
        goto awgmmoegiwqoswkk;
        awccsuqeikuacioa:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto kwwwckywsygiwcoc;
            oiakqemessasuyci:
            if (!$eqgoocgaqwqcimie) {
                goto wiyoqoiqsmwuiywa;
            }
            goto kqakgccawoogkiai;
            aqmemoyecceeceuc:
            if (!($ymkomoccmymcoiea == "\163\164\x79\154\x65")) {
                goto emguyukcyeeuyqyo;
            }
            goto ammsmyuaoogueqog;
            secswciggsguqauw:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($ccamueccusigaaio);
            goto oigoswgkgwescakq;
            eoawcoaayikaiocu:
            if (!$wamcomkuwysqgwgk) {
                goto ycaysuaiikcskakg;
            }
            goto aucuikgwyisgguye;
            aykiaquyoagykguu:
            emguyukcyeeuyqyo:
            goto ciiikyqwkwsceouq;
            muceomkycemgsccu:
            oyoeowyeooyowomm:
            goto qsuqueusmkasmeig;
            ciiikyqwkwsceouq:
            $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\x20{$eqgoocgaqwqcimie}"));
            goto gmqoaasouciogwkq;
            gmqoaasouciogwkq:
            wiyoqoiqsmwuiywa:
            goto mykqimauysqiessi;
            kwwwckywsygiwcoc:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto mokoeuoicweqwksk;
            }
            goto secswciggsguqauw;
            aucuikgwyisgguye:
            $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie);
            goto gwswuqomwckekgum;
            kqakgccawoogkiai:
            $yeacayasgueouoqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
            goto eoawcoaayikaiocu;
            mykqimauysqiessi:
            mokoeuoicweqwksk:
            goto muceomkycemgsccu;
            ammsmyuaoogueqog:
            $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\73") . "\x3b";
            goto aykiaquyoagykguu;
            oigoswgkgwescakq:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($ccamueccusigaaio);
            goto oiakqemessasuyci;
            gwswuqomwckekgum:
            ycaysuaiikcskakg:
            goto aqmemoyecceeceuc;
            qsuqueusmkasmeig:
        }
        goto gyyiagqqegiygkag;
        gyqaqyuewuquqkuy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto uqmscgsoqeysooqc;
        gyyiagqqegiygkag:
        eesgmkwwiawcskie:
        goto kowocmqmoqwacmoa;
        awgmmoegiwqoswkk:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto awccsuqeikuacioa;
        acisamqweoscawig:
        return $nsmgceoqaqogqmuw;
        goto kkoswgsscqsgqmey;
        kowocmqmoqwacmoa:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto jggaoyqecgewsysy;
        kkoswgsscqsgqmey:
    }
    
    public static function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', $uuksaskqamgouosy = true)
    {
        goto aqasuykawsiekssw;
        sskkmcmqeimgeuwg:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto cseiiqikiimgcmmy;
            yoggmucmsyeaseso:
            cqiagomawawqmcoo:
            goto qqiqiaqoiesmuokq;
            wcsimwcyyumkyuck:
            kiieueeyieewgcuu:
            goto yoggmucmsyeaseso;
            woekwasoyuwmqgao:
            cqyommqsimyoioeo:
            goto scogoqgeeoeqsuku;
            kaeomaoaieammmca:
            goto cqiagomawawqmcoo;
            goto iiumqmaicymgouwy;
            qqmskoaugmqsaaqy:
            if (!$goiaaeekgeqqmaqo) {
                goto kiieueeyieewgcuu;
            }
            goto gsisioycuuewgmmw;
            swqucgmugmekaoqc:
            if ($uuksaskqamgouosy) {
                goto ywmukuyioksqgimq;
            }
            goto ywiwagqgeomcwkss;
            qqiqiaqoiesmuokq:
            eoggqsukkackwoag:
            goto woekwasoyuwmqgao;
            gsisioycuuewgmmw:
            self::_createElement($ymyisaeksssueeik, $goiaaeekgeqqmaqo);
            goto wcsimwcyyumkyuck;
            iiumqmaicymgouwy:
            ywmukuyioksqgimq:
            goto ekesimcsecgcuoms;
            ekesimcsecgcuoms:
            $ymyisaeksssueeik->nodeValue = '';
            goto qqmskoaugmqsaaqy;
            ywiwagqgeomcwkss:
            $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo;
            goto kaeomaoaieammmca;
            cseiiqikiimgcmmy:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto eoggqsukkackwoag;
            }
            goto swqucgmugmekaoqc;
            scogoqgeeoeqsuku:
        }
        goto euguykkkieguasgy;
        euguykkkieguasgy:
        ikwagqguqmqsakug:
        goto wgawmiiocosqkgos;
        gekaiqysouaoyaci:
        mskguuoycuamgyim:
        goto umeomugcsyuukqsu;
        msggcgusisiqukme:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto sskkmcmqeimgeuwg;
        umeomugcsyuukqsu:
        return $nsmgceoqaqogqmuw;
        goto swyakyokwmomoqow;
        isicqmmaqumssuka:
        if (!$kasgukgceywckyou) {
            goto mskguuoycuamgyim;
        }
        goto msggcgusisiqukme;
        wgawmiiocosqkgos:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto gekaiqysouaoyaci;
        aqasuykawsiekssw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto isicqmmaqumssuka;
        swyakyokwmomoqow:
    }
    
    private static function _updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = self::UPDATE_ACTION)
    {
        goto yooqmugaioweswcs;
        geycsscsmmgaiioe:
        ukqewcigokikemua:
        goto yskiummkweosoacm;
        wqkqggsaacukeimg:
        mameecqeeiakmiks:
        goto eqycmciquqaesuyk;
        wokoyuoomwmgwaoo:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto cwkeqwwaageaiecm;
            makegskyquimcacu:
            ecwcasmmiooagwaq:
            goto ggayissweeisyaqa;
            cymysimiiemeqcmu:
            if (!(isset($siquossayskcwkea["\x70\141\x72\x65\x6e\x74"]) && $siquossayskcwkea["\x70\141\162\145\x6e\x74"])) {
                goto kgamqamcoaaqmgeg;
            }
            goto qaemeaiiueckkouq;
            qaemeaiiueckkouq:
            try {
                $kwmksuuciqkiymek = $kwmksuuciqkiymek->eyagosskwwmgwmog();
            } catch (Exception $wgaoewqkwgomoaai) {
                goto cywmacoauegeacwk;
            }
            goto cgwiwgeekamooamc;
            cgwiwgeekamooamc:
            kgamqamcoaaqmgeg:
            goto eygucgqouoacesei;
            ggayissweeisyaqa:
            suigamecaieiiuka:
            goto eaqqweigimyoywwu;
            eygucgqouoacesei:
            if (!$kwmksuuciqkiymek) {
                goto suigamecaieiiuka;
            }
            goto csaqukkmgesgewkg;
            cwkeqwwaageaiecm:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto cymysimiiemeqcmu;
            eaqqweigimyoywwu:
            cywmacoauegeacwk:
            goto ikcokaseywaaekgo;
            csaqukkmgesgewkg:
            foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) {
                goto okwyiswgsyymgius;
                ekksaoygcqikaque:
                iqeeygqsccygwqas:
                goto qkmswkmokigugkaw;
                qkmswkmokigugkaw:
                ukmuimokewiqqmsy:
                goto iykugimymaauokkm;
                okwyiswgsyymgius:
                $momcykaoccoymeig = 0;
                goto wakqmmwcieuuiygm;
                ywwcwwqawggauaso:
                foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                    goto acqwiccgsscgikyo;
                    acqwiccgsscgikyo:
                    self::_updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig);
                    goto gcsacemoyykguega;
                    muoiuweiesyukmgu:
                    cyugiqiiaekakuec:
                    goto aoqcimcikseuucoy;
                    gcsacemoyykguega:
                    $momcykaoccoymeig++;
                    goto muoiuweiesyukmgu;
                    aoqcimcikseuucoy:
                }
                goto ekksaoygcqikaque;
                wakqmmwcieuuiygm:
                $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
                goto ywwcwwqawggauaso;
                iykugimymaauokkm:
            }
            goto makegskyquimcacu;
            ikcokaseywaaekgo:
        }
        goto wqkqggsaacukeimg;
        iekuaksaiccyckaw:
        if (!$kasgukgceywckyou) {
            goto ukqewcigokikemua;
        }
        goto wokoyuoomwmgwaoo;
        eqycmciquqaesuyk:
        return $kasgukgceywckyou;
        goto geycsscsmmgaiioe;
        yooqmugaioweswcs:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto iekuaksaiccyckaw;
        yskiummkweosoacm:
        return $nsmgceoqaqogqmuw;
        goto aakgkaqakoqgcsci;
        aakgkaqakoqgcsci:
    }
    
    private static function _updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig)
    {
        goto yayoumcciuyieeoi;
        sgqkaakkaugosoak:
        $ymyqweogikqywwqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
        goto omqyiocewcgomqks;
        uyieackqwooqcqos:
        $cusosqmyoqiykqgw = $eqgoocgaqwqcimie;
        goto suumgeqekqgggugc;
        keggycaoqkyockgu:
        wymeuweieiomiuqw:
        goto gemyysqyokmecguu;
        akquuwsekmuoicae:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto ewmcqauqqeywoqcs;
        }
        goto sgqkaakkaugosoak;
        omsqscuggqqkuigc:
        $cusosqmyoqiykqgw = call_user_func($eqgoocgaqwqcimie, $momcykaoccoymeig, $gaeqamemwmwsyukm);
        goto eaaicwyuwkogsies;
        eaaicwyuwkogsies:
        yyiemgyowokesgww:
        goto akquuwsekmuoicae;
        suumgeqekqgggugc:
        goto yyiemgyowokesgww;
        goto emmcgqumuacycqgg;
        emmcgqumuacycqgg:
        uuiuemckcuckewow:
        goto omsqscuggqqkuigc;
        yayoumcciuyieeoi:
        if (is_callable($eqgoocgaqwqcimie)) {
            goto uuiuemckcuckewow;
        }
        goto uyieackqwooqcqos;
        emeycusyiaccgcoo:
        ewmcqauqqeywoqcs:
        goto ioyamykqysewiueo;
        eyqiqgwmkyegsmgw:
        ycwwyeycsiquwiyq:
        goto emeycusyiaccgcoo;
        omqyiocewcgomqks:
        switch ($aiamqeawckcsuaou) {
            case self::REMOVE_ACTION:
                goto cocouuwqwiaiyemu;
                kgmumymgeqemogoy:
                uqmsuuwuuqcaqasy:
                goto gcseqcagkcsmgokw;
                gcymuqcsmwiywkum:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto iywkomquqqosokyq;
                yggsmyqseogscusc:
                qaciuiaecgowsukq:
                goto eaucsgyigimwwuqg;
                quyaggaoeakmcqmo:
                $uusmaiomayssaecw = array_search($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto owkqqqyysqyaykow;
                makmsuccimeksawa:
                unset($ymyqweogikqywwqc[$uusmaiomayssaecw]);
                goto yggsmyqseogscusc;
                eaucsgyigimwwuqg:
                if (!is_array($ymyqweogikqywwqc)) {
                    goto uqmsuuwuuqcaqasy;
                }
                goto qkiiwqyuiuqwqosc;
                weqgaswqweauwwyc:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($eqgoocgaqwqcimie);
                goto ecayeacokkmyckmk;
                gumuwayiukgmeusw:
                goto qaugewusyagkoksg;
                goto wiikemmmqckmwcma;
                owkqqqyysqyaykow:
                if (!(false !== $uusmaiomayssaecw)) {
                    goto qaciuiaecgowsukq;
                }
                goto makmsuccimeksawa;
                qkiiwqyuiuqwqosc:
                $cusosqmyoqiykqgw = implode("\40", $ymyqweogikqywwqc);
                goto kgmumymgeqemogoy;
                wiikemmmqckmwcma:
                cqwsaoiqmiewkigq:
                goto weqgaswqweauwwyc;
                gcseqcagkcsmgokw:
                if ($cusosqmyoqiykqgw) {
                    goto ieqqyaeksqicikwe;
                }
                goto gcymuqcsmwiywkum;
                iywkomquqqosokyq:
                ieqqyaeksqicikwe:
                goto gumuwayiukgmeusw;
                cocouuwqwiaiyemu:
                if (is_numeric($ymkomoccmymcoiea)) {
                    goto cqwsaoiqmiewkigq;
                }
                goto msukmuseccwicmwg;
                yakwwcwqaokocwcy:
                qaugewusyagkoksg:
                goto ssgiyqwsgyyogmqm;
                ssgiyqwsgyyogmqm:
                goto wymeuweieiomiuqw;
                goto wymkemmkwawacmys;
                msukmuseccwicmwg:
                $ymyqweogikqywwqc = explode("\x20", $ymyqweogikqywwqc);
                goto quyaggaoeakmcqmo;
                ecayeacokkmyckmk:
                $cusosqmyoqiykqgw = null;
                goto yakwwcwqaokocwcy;
                wymkemmkwawacmys:
            case self::RENAME_ACTION:
                goto wqmuwigkssqkoweq;
                qugokekqyguksees:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto gcmiguwuukeawaii;
                }
                goto emsewgkwsmcgkoyy;
                cceykcumeqigcqkg:
                gcmiguwuukeawaii:
                goto gkmiesukccsqmcqy;
                emsewgkwsmcgkoyy:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto wwsamammkqcsocqc;
                wqmuwigkssqkoweq:
                $cusosqmyoqiykqgw = null;
                goto qugokekqyguksees;
                wwsamammkqcsocqc:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto cceykcumeqigcqkg;
                gkmiesukccsqmcqy:
                goto wymeuweieiomiuqw;
                goto iqomqkaueoackgwg;
                iqomqkaueoackgwg:
            case self::REPLACE_ACTION:
            case self::UPDATE_ACTION:
                goto uucoqooygmoeuicu;
                ugakmuywaoowqymc:
                if ($ymkomoccmymcoiea == "\143\154\141\x73\x73" && $ymyqweogikqywwqc) {
                    goto wauomwaoauygqsou;
                }
                goto soyyokqommwwoyoy;
                oimgigccqeqcsmoy:
                wauomwaoauygqsou:
                goto gqemygsogaaasyes;
                soyyokqommwwoyoy:
                goto ysowsoswoigywasy;
                goto ioomkicqkmoooiew;
                goicqkqwoomuowkw:
                ysowsoswoigywasy:
                goto qagigacwywmweskc;
                asuwukmiyuqqgqiy:
                $ymyqweogikqywwqc = null;
                goto cqcaimmsooakqmae;
                qagigacwywmweskc:
                goto wymeuweieiomiuqw;
                goto akiymyugggumyuic;
                iykceckkokwcsgoi:
                goto ysowsoswoigywasy;
                goto oimgigccqeqcsmoy;
                gqemygsogaaasyes:
                $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\40{$cusosqmyoqiykqgw}";
                goto goicqkqwoomuowkw;
                ioomkicqkmoooiew:
                yewcqwqmykemykca:
                goto asuwukmiyuqqgqiy;
                cqcaimmsooakqmae:
                
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto iykceckkokwcsgoi;
                uucoqooygmoeuicu:
                if ($aiamqeawckcsuaou === self::REPLACE_ACTION) {
                    goto yewcqwqmykemykca;
                }
                goto ugakmuywaoowqymc;
                akiymyugggumyuic:
            case self::REPLACE_WITH_ACTION:
                goto yicumoqkcoycyoyu;
                moywwywcsegwawmi:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto mqugkocskuaokeiy;
                ywwqgsuuquocmqgk:
                goto wymeuweieiomiuqw;
                goto owaccsusoeoacmwc;
                owqyqioycqkesioo:
                $cusosqmyoqiykqgw = null;
                goto ywwqgsuuquocmqgk;
                wqmquqcyioicymwu:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($cusosqmyoqiykqgw, $ymyqweogikqywwqc);
                goto moywwywcsegwawmi;
                mqugkocskuaokeiy:
                qoeaosoumsicoqms:
                goto owqyqioycqkesioo;
                yicumoqkcoycyoyu:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto qoeaosoumsicoqms;
                }
                goto wqmquqcyioicymwu;
                owaccsusoeoacmwc:
        }
        goto kikeekyeuiyoiuoc;
        kikeekyeuiyoiuoc:
        qogiwqwqsaesiskg:
        goto keggycaoqkyockgu;
        eaqoukeuceuywwac:
        $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, $cusosqmyoqiykqgw);
        goto eyqiqgwmkyegsmgw;
        gemyysqyokmecguu:
        if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) {
            goto ycwwyeycsiquwiyq;
        }
        goto eaqoukeuceuywwac;
        ioyamykqysewiueo:
    }
    
    public static function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $eagcmyswaakcwyec = [], $omwmuycmeqcqokom = "\144\x69\166", $qmeuaeiseuacgiqc = true)
    {
        goto aieuuwkemkgccgqq;
        hgmsiocesiimemgo:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto yewuugymokaikqmq;
        scuasiqkgymskyoc:
        return $nsmgceoqaqogqmuw;
        goto uysasageemkuuusg;
        gqukqoawwwyuukwc:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ceuyeoigyioagyou;
        gsmueswaqwsqiqay:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto eoggoeeymkgmcckw;
            sgmwwuiygokssyeg:
            $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode;
            goto lmsiwkmayqggkuie;
            eeycgakkgoakqaac:
            euqokgqeguqwueas:
            goto gscqagmcimoymgeq;
            lmsiwkmayqggkuie:
            self::_removeNode($ymyisaeksssueeik);
            goto mkeiwccsuyqyqaom;
            mkeiwccsuyqyqaom:
            $okcscwesammossuq .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto ygooeemqcwgcmwgy;
            eoggoeeymkgmcckw:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto ssgkiscaiguwcyeq;
            }
            goto sgmwwuiygokssyeg;
            ygooeemqcwgcmwgy:
            ssgkiscaiguwcyeq:
            goto eeycgakkgoakqaac;
            gscqagmcimoymgeq:
        }
        goto qkueygwuioiiemuw;
        qkueygwuioiiemuw:
        gakugweoyossmeao:
        goto csgmgackuimwqgmw;
        egmkyicacugkkoie:
        if (!$kasgukgceywckyou) {
            goto gqucksyyuwcwiyog;
        }
        goto gqukqoawwwyuukwc;
        qagksgqcwesuogsi:
        $ygickiygyemsowyo = null;
        goto gsmueswaqwsqiqay;
        aieuuwkemkgccgqq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto egmkyicacugkkoie;
        yewuugymokaikqmq:
        gqucksyyuwcwiyog:
        goto scuasiqkgymskyoc;
        ceuyeoigyioagyou:
        $okcscwesammossuq = '';
        goto qagksgqcwesuogsi;
        siaqoyuoaccceoqy:
        self::_appendHTML($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc);
        goto hgmsiocesiimemgo;
        csgmgackuimwqgmw:
        $omwmuycmeqcqokom = ManipulateHTML::qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq);
        goto siaqoyuoaccceoqy;
        uysasageemkuuusg:
    }
}

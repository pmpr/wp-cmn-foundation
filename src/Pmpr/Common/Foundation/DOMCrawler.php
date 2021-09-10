<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const UPDATE_ACTION = "\x75\x70\144\x61\164\x65";
    const REMOVE_ACTION = "\162\145\x6d\x6f\166\145";
    const RENAME_ACTION = "\x72\x65\x6e\141\155\145";
    const REPLACE_ACTION = "\x72\145\160\x6c\141\x63\x65";
    const REPLACE_WITH_ACTION = "\x72\145\160\x6c\141\x63\145\137\x77\151\164\x68";
    
    public static function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, $uuyoeicyoayimaoa = false, $ksaameoqigiaoigg = true)
    {
        goto ywmqqmuyaaecgmui;
        ywmqqmuyaaecgmui:
        if (!$ekiuyucoiagmscgy) {
            goto gcoquwcscysiccec;
        }
        goto ggcgagwamuqckocw;
        giaeuoeockyqsyse:
        gcoquwcscysiccec:
        goto suyscmmiukkwmkig;
        suyscmmiukkwmkig:
        return $nsmgceoqaqogqmuw;
        goto iusqyigsmwcwiaeg;
        mscwwgwkgmqgqque:
        foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) {
            goto oeayowwwskuwywei;
            ewyacsgkouuaymem:
            soqmguugasswqwki:
            goto keuggiweyueacgow;
            heaugqmkoiaymyoi:
            cqmwkoscgigmawys:
            goto iqmuoeyayeyysksq;
            oyqggcawowywmgmg:
            goto csagaieykqsoyyyo;
            goto mwggeaakeeuqseiy;
            oeayowwwskuwywei:
            if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                goto aeokmsquaasumuuo;
            }
            goto ksasgwowcqqegcic;
            ksasgwowcqqegcic:
            if ($ymyisaeksssueeik instanceof DOMElement) {
                goto cqmwkoscgigmawys;
            }
            goto mkmgkgowgamqakqi;
            mwggeaakeeuqseiy:
            oaawymkyguukokoc:
            goto ewyacsgkouuaymem;
            aeueicccggqwcawc:
            goto csagaieykqsoyyyo;
            goto uyksowciskqigsig;
            eocoacoiikkigoiu:
            aeokmsquaasumuuo:
            goto aeueicccggqwcawc;
            mkmgkgowgamqakqi:
            goto soqmguugasswqwki;
            goto eocoacoiikkigoiu;
            keuggiweyueacgow:
            owoiouaomwqgksqc:
            goto ycyeqaucoaieegag;
            uyksowciskqigsig:
            goto soqmguugasswqwki;
            goto heaugqmkoiaymyoi;
            iqmuoeyayeyysksq:
            if (call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) {
                goto oaawymkyguukokoc;
            }
            goto oyqggcawowywmgmg;
            ycyeqaucoaieegag:
        }
        goto ymykcocgwsmwwami;
        gamqsmuumocgweik:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto mscwwgwkgmqgqque;
        ummmcgmiywgyaqqm:
        cacouogsmqcomkke:
        goto quakesoomwuwygsu;
        ymykcocgwsmwwami:
        csagaieykqsoyyyo:
        goto uqiouscouqsqeyau;
        ggcgagwamuqckocw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto yweuowuosoummioc;
        kckiciumueaaywao:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ummmcgmiywgyaqqm;
        yweuowuosoummioc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto quywmggomgaseomy;
        }
        goto gamqsmuumocgweik;
        quakesoomwuwygsu:
        quywmggomgaseomy:
        goto giaeuoeockyqsyse;
        uqiouscouqsqeyau:
        if (!$ksaameoqigiaoigg) {
            goto cacouogsmqcomkke;
        }
        goto kckiciumueaaywao;
        iusqyigsmwcwiaeg:
    }
    
    public static function _getCrawler($nsmgceoqaqogqmuw)
    {
        goto kiceosucogcykyge;
        kgeeyaugiyyceaec:
        goto gwycusqkiusmouge;
        goto akcuqqooswuasawe;
        aaogwucegguweoki:
        moqakkycewiucuis:
        goto meeiequcowsceiow;
        giueuyueoiukcima:
        if ($nsmgceoqaqogqmuw instanceof Crawler) {
            goto aieqysoguicqukeq;
        }
        goto ueecsaukysiceeyq;
        awceiuoiqyqaseiq:
        $kasgukgceywckyou = $nsmgceoqaqogqmuw;
        goto iucukgoockccyokm;
        meeiequcowsceiow:
        $kasgukgceywckyou = new Crawler(mb_convert_encoding($nsmgceoqaqogqmuw, "\110\x54\x4d\x4c\55\105\x4e\124\x49\x54\111\105\x53", "\x55\x54\x46\x2d\x38"));
        goto mceesakqeysmiauu;
        mceesakqeysmiauu:
        gwycusqkiusmouge:
        goto kseyamwikqwqkwgw;
        iucukgoockccyokm:
        goto gwycusqkiusmouge;
        goto aaogwucegguweoki;
        ueecsaukysiceeyq:
        if ($nsmgceoqaqogqmuw && trim(preg_replace("\57\x5c\x73\53\x2f", "\x20", $nsmgceoqaqogqmuw))) {
            goto moqakkycewiucuis;
        }
        goto kgeeyaugiyyceaec;
        kiceosucogcykyge:
        $kasgukgceywckyou = null;
        goto giueuyueoiukcima;
        akcuqqooswuasawe:
        aieqysoguicqukeq:
        goto awceiuoiqyqaseiq;
        kseyamwikqwqkwgw:
        return $kasgukgceywckyou;
        goto swuwcwceeiosooks;
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
        wuwkeggsaiumowug:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto keqmucqsyyuikoou;
        }
        goto yuqoyicsmawcauec;
        oegkcqakmussueqq:
        ykgawcqgqysmqioq:
        goto cweguimoaweiumii;
        cweguimoaweiumii:
        keqmucqsyyuikoou:
        goto qkkiemwuuaaqqyas;
        yuqoyicsmawcauec:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ymumcsswaocykmeo;
        ymumcsswaocykmeo:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto kgwaiecysoqgkqyu;
            kgwaiecysoqgkqyu:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto yqsegosoqouiauiw;
            }
            goto qoueoyeoiiocgoac;
            cygeiiegsgiayomk:
            omqycomsaeugqyca:
            goto msugciceoeaqyggk;
            gaqcauwaswgqcquy:
            if (!$koaqiaecmascwuyy) {
                goto omqycomsaeugqyca;
            }
            goto iugeecogeucykkcc;
            awmwewyeqcgmmcyg:
            ssqyqgwcimqcuksg:
            goto ecokmyyccossammg;
            uusuweogimkuigcy:
            $omwmuycmeqcqokom->cgeyeoimiuyogose($koaqiaecmascwuyy);
            goto cygeiiegsgiayomk;
            qoueoyeoiiocgoac:
            $koaqiaecmascwuyy = self::_createElementFromHtml($kasgukgceywckyou, $ewgwqamkygiqaawc);
            goto gaqcauwaswgqcquy;
            iugeecogeucykkcc:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto uusuweogimkuigcy;
            msugciceoeaqyggk:
            yqsegosoqouiauiw:
            goto awmwewyeqcgmmcyg;
            ecokmyyccossammg:
        }
        goto oegkcqakmussueqq;
        aagkoumomwwcaeka:
    }
    
    public static function umuecysoywoumgwo($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto ayucyyiciocgyass;
        euoymauomemecuao:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto wueqcceaguewiucw;
        }
        goto skgeuaegiqaqgyaq;
        skgeuaegiqaqgyaq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto qegkmgwymeckgwyg;
        meiqsogowcogmgco:
        wueqcceaguewiucw:
        goto agakiqgiuymqowkc;
        qegkmgwymeckgwyg:
        return $kwmksuuciqkiymek->count() > 0;
        goto meiqsogowcogmgco;
        ayucyyiciocgyass:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto euoymauomemecuao;
        agakiqgiuymqowkc:
        return false;
        goto eyooouiwwwumauao;
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
        cukksseqkekyucye:
        return $gaeqamemwmwsyukm;
        goto ocueeioeueqmisuo;
        ygyoayucuigaoacw:
        aguwgcwgoukkkmio:
        goto cukksseqkekyucye;
        qeoumcqaaaecsace:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kykugggwwuqeokou;
        kykugggwwuqeokou:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto aguwgcwgoukkkmio;
        }
        goto agwuyeemwsccoagc;
        agwuyeemwsccoagc:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto coakmyawmquywmos;
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
        eioiqwykkuguaygs:
        $omwmuycmeqcqokom = null;
        goto egisiwqggoqcgeum;
        qymucyymugqaaoyi:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto wyiciayqimeqqomu;
            cegkuogwgoiomikw:
            yiayuooesmsmswia:
            goto kwcsomkougiwgaco;
            icimmqwesqkmeuce:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto wysuusuamkqeyqso;
            wysuusuamkqeyqso:
            $omwmuycmeqcqokom->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom);
            goto oogiaiuaumioummk;
            oogiaiuaumioummk:
            $nsmgceoqaqogqmuw = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo();
            goto omiqqwiemqykocci;
            omiqqwiemqykocci:
            goto gwiykyqeeowisqqk;
            goto cegkuogwgoiomikw;
            kwcsomkougiwgaco:
            ggwakcmgwkcsasug:
            goto gkcycgsoawqoyesg;
            wyiciayqimeqqomu:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto yiayuooesmsmswia;
            }
            goto icimmqwesqkmeuce;
            gkcycgsoawqoyesg:
        }
        goto wcyauuwqsicgkomk;
        wcyauuwqsicgkomk:
        gwiykyqeeowisqqk:
        goto yomgkcycysceyagw;
        egisiwqggoqcgeum:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto qymucyymugqaaoyi;
        oqiciswgoamuceqq:
        if (!$kasgukgceywckyou) {
            goto qeauoqcaeymayusu;
        }
        goto eioiqwykkuguaygs;
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
        gygmcmiciswgeswm:
        return $nsmgceoqaqogqmuw;
        goto cckmokqegquyoaoy;
        ykssqiacqucsmmac:
        if (is_string($nsmgceoqaqogqmuw)) {
            goto qqcoeqwimyugqwuc;
        }
        goto sueokeomisikqomo;
        euycuguygmweyiwm:
        try {
            goto wimkgcmkgcaewcwy;
            guwuqywoqwigamaw:
            throw new InvalidArgumentException();
            goto iwcaywweqcgmemko;
            ggmmkmasyqcugkkm:
            kkucqmyecgwmioei:
            goto smikqieaosiykeii;
            soasesuoocikiquy:
            goto uememeasawuoseqy;
            goto okuuaqumeeamcgiw;
            ocqmicyceamumeia:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->skkueuquuqweeyqo();
            goto soasesuoocikiquy;
            coiqsauaqkqykkus:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee);
            goto mimysauwikioomiy;
            umgmgswkigyyweke:
            wcwwkcwqkicykkmi:
            goto aiyeuqqmcksqsyeq;
            scmgoisaawgacqyu:
            if (is_string($gykwsaeqegqowywy)) {
                goto migcqoeeeukcyciu;
            }
            goto guwuqywoqwigamaw;
            smikqieaosiykeii:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->yqwwccackoayicyy();
            goto oukysgqmgiumaasc;
            muwaaaqcuwaeoakw:
            uiewawqqakquwmsq:
            goto uwawwskgqkieusog;
            mimysauwikioomiy:
            $nsmgceoqaqogqmuw = preg_replace(["\57\x28\74\x29\50\150\145\x61\144\x29\50\x5b\x5e\76\x5d\52\x3f\51\x28\134\57\x3f\134\163\x2a\76\x29\x7c\74\134\x2f\x68\145\141\144\76\57", "\x2f\x28\x3c\x29\50\142\x6f\144\171\x29\x28\133\x5e\x3e\135\52\x3f\x29\50\x5c\x2f\x3f\x5c\x73\52\76\51\x7c\x3c\134\57\x62\x6f\x64\171\76\57", "\x2f\x28\160\x61\x72\x65\156\x74\x3d\42\51\x28\133\141\x2d\172\x41\55\x5a\x30\55\x39\x3a\x3b\x5c\x2e\134\163\134\x28\x5c\51\x5c\x2d\x5c\x2c\x5d\x2a\x29\x28\42\51\57"], '', $nsmgceoqaqogqmuw);
            goto ymessmmcgesuuyys;
            ewceaieowsgamkyi:
            uememeasawuoseqy:
            goto ceaewumsyymakaoc;
            ymessmmcgesuuyys:
            goto wcwwkcwqkicykkmi;
            goto ggmmkmasyqcugkkm;
            oukysgqmgiumaasc:
            $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw;
            goto umgmgswkigyyweke;
            iwcaywweqcgmemko:
            goto uememeasawuoseqy;
            goto muwaaaqcuwaeoakw;
            qquecwewqeeqyysw:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy;
            goto ewceaieowsgamkyi;
            umgcmywyqkwsmsku:
            ugksoyaaemqyoywa:
            goto ocqmicyceamumeia;
            uwawwskgqkieusog:
            if ($kkkqocwqmaokqcmc) {
                goto kkucqmyecgwmioei;
            }
            goto coiqsauaqkqykkus;
            okuuaqumeeamcgiw:
            migcqoeeeukcyciu:
            goto qquecwewqeeqyysw;
            wimkgcmkgcaewcwy:
            $ikoqkmiqkckowcgg = "\x3c\x21\104\x4f\103\x54\131\120\x45\40\150\x74\155\154\76";
            goto egocwogikoqicuyo;
            aiyeuqqmcksqsyeq:
            goto uememeasawuoseqy;
            goto umgcmywyqkwsmsku;
            egocwogikoqicuyo:
            $kkkqocwqmaokqcmc = strpos(strtolower($ggauoeuaesiymgee), strtolower($ikoqkmiqkckowcgg)) !== false;
            goto csguigwqeomsyyqw;
            csguigwqeomsyyqw:
            if ($gykwsaeqegqowywy instanceof Crawler) {
                goto uiewawqqakquwmsq;
            }
            goto eqmmegqmukwekkkk;
            eqmmegqmukwekkkk:
            if ($gykwsaeqegqowywy instanceof DOMDocument) {
                goto ugksoyaaemqyoywa;
            }
            goto scmgoisaawgacqyu;
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
        ugecckaqeasoimos:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto goiiekmeukcsamca;
        ammmoycqyaqeqiww:
        csgowsgmcyswmiec:
        goto okwouciqeqeuogos;
        okwouciqeqeuogos:
        return $siquossayskcwkea;
        goto qeimwiyggaoimmoq;
        qwsqoioiwieqgeee:
        icqaoiyumasyygik:
        goto ammmoycqyaqeqiww;
        ceyeeieiggoamgwe:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto icoacuwgkgqykgee;
            kmqagkiwcsuimayg:
            eiaqawokkeocqqsk:
            goto uquqecagkoyomiiy;
            equcgweimiaqsysk:
            if (!$siquossayskcwkea) {
                goto awmwcaycosymoesq;
            }
            goto qoimoeswgougaeoa;
            wsqkqmcuoauyescs:
            awmwcaycosymoesq:
            goto kmqagkiwcsuimayg;
            icoacuwgkgqykgee:
            $siquossayskcwkea = self::wuuawmeqqyyyemsw($ymyisaeksssueeik);
            goto equcgweimiaqsysk;
            qoimoeswgougaeoa:
            goto icqaoiyumasyygik;
            goto wsqkqmcuoauyescs;
            uquqecagkoyomiiy:
        }
        goto qwsqoioiwieqgeee;
        gigkawsyquoowcms:
        if (!$kasgukgceywckyou) {
            goto csgowsgmcyswmiec;
        }
        goto uckiysiyuksyuaoa;
        uckiysiyuksyuaoa:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ceyeeieiggoamgwe;
        goiiekmeukcsamca:
        $siquossayskcwkea = [];
        goto gigkawsyquoowcms;
        qeimwiyggaoimmoq:
    }
    
    public static function wuuawmeqqyyyemsw($ymyisaeksssueeik)
    {
        goto ikmqwkwwskokemqy;
        ekukcomgoyeiuici:
        return $siquossayskcwkea;
        goto kqmgqywmgomwmokg;
        gumkwiqcaqusgwqm:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto mmmccuoeoeuskisk;
        }
        goto kakskegscmoqcksc;
        syweoqsuaauksacw:
        ggcaqksgsoeecwak:
        goto qeqagimacwmgmqiq;
        ikmqwkwwskokemqy:
        $siquossayskcwkea = [];
        goto gumkwiqcaqusgwqm;
        qeqagimacwmgmqiq:
        mmmccuoeoeuskisk:
        goto ekukcomgoyeiuici;
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
        wykieskeigmammue:
        return $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto aiewsymeiqiakqqs;
        yiomcwmuukooycqq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto saqqooggaykweqce;
        saqqooggaykweqce:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wykieskeigmammue;
        aiewsymeiqiakqqs:
    }
    
    public static function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto muqkgsmqakgwkaym;
        uasacoumuyqgeuqy:
        return $nsmgceoqaqogqmuw;
        goto sgwmqsowsekomcso;
        ckiswiiwkuugeogg:
        if (!$kasgukgceywckyou) {
            goto mymcocumieiauquq;
        }
        goto esmaiecuukakamog;
        muqkgsmqakgwkaym:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ckiswiiwkuugeogg;
        ywuqguicqikeqiog:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto uoygcyuomiyquumm;
        esmaiecuukakamog:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) {
            goto sekgqycaaucagggo;
            sekgqycaaucagggo:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto woqoqsqomgswqicc;
            iiyamiqswaymisue:
            oiymkikesysgoyma:
            goto iqwqucswgosmiwyy;
            iqwqucswgosmiwyy:
            gamiacsewcmmiece:
            goto beowceiucukcwego;
            woqoqsqomgswqicc:
            foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) {
                goto okqoikkyquugiuia;
                escwyiwieqcweggy:
                yoygkuwyqmgaqewi:
                goto ikiooiowwwwaygwi;
                okqoikkyquugiuia:
                if (!$uumwowmewaqyggce instanceof DOMNode) {
                    goto gcwimimmgaoueegm;
                }
                goto wouesssgyqywasom;
                keegiisaqayqmogu:
                $uumwowmewaqyggce->parentNode->caqmeawgoiceoymu($uuswugicgoqcyiiy, $uumwowmewaqyggce);
                goto qeaeawocamciyiyk;
                yyakcqyqkuuokgqw:
                mosmyseyaemqewwk:
                goto ewouumyoyasgkgig;
                iyocukugwkwoosqy:
                foreach ($uumwowmewaqyggce->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto emkcaamgumgwwyem;
                    emkcaamgumgwwyem:
                    $qmgyyqwkskaiwcqg = $sicussmmuqmeqygw->nodeName;
                    goto eoeuieksgoyqcgsu;
                    iaewimwissuueacw:
                    sukokqcaoygeisos:
                    goto qggomaqouiuasaum;
                    eoeuieksgoyqcgsu:
                    $giueyucwwwwiooim = $sicussmmuqmeqygw->nodeValue;
                    goto goekuagoayyskiio;
                    goekuagoayyskiio:
                    $uuswugicgoqcyiiy->cmgoqeksagmigwmg($qmgyyqwkskaiwcqg, $giueyucwwwwiooim);
                    goto iaewimwissuueacw;
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
                wouesssgyqywasom:
                $okcscwesammossuq = [];
                goto uimeimmscccaqukm;
                ikiooiowwwwaygwi:
                $uuswugicgoqcyiiy = $uumwowmewaqyggce->ownerDocument->auokmyiaciikcekk($ymqmyyeuycgmigyo);
                goto cwwguccuiymmeosu;
                uimeimmscccaqukm:
                foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) {
                    $okcscwesammossuq[] = $wcgsoqmmciswkmiq;
                    ciwweeyeeieqgowe:
                }
                goto escwyiwieqcweggy;
                qeaeawocamciyiyk:
                gcwimimmgaoueegm:
                goto yyakcqyqkuuokgqw;
                ewouumyoyasgkgig:
            }
            goto iiyamiqswaymisue;
            beowceiucukcwego:
        }
        goto keowaakoqimieymo;
        keowaakoqimieymo:
        yiqweuusyaikwqgg:
        goto ywuqguicqikeqiog;
        uoygcyuomiyquumm:
        mymcocumieiauquq:
        goto uasacoumuyqgeuqy;
        sgwmqsowsekomcso:
    }
    
    public static function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto qcewkmiokmwaakyo;
        gkuukqkuaayagqwe:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) {
            self::_removeElement($kasgukgceywckyou, $yuumukkaswwoywya);
            scequiwqaummymka:
        }
        goto wayaguckegemumuy;
        iqeqegeqgsmmaeay:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto qikaumyuwkusqmcy;
        }
        goto qoeoouiewgwuyayg;
        cqcqsoqaumyuyemo:
        qikaumyuwkusqmcy:
        goto csoeiakqgmuockgk;
        yqisiuioymswaciy:
        goto cegaaikcsiwyswca;
        goto kwqqeiiqgiaoquag;
        kkgkywswiimccaog:
        cegaaikcsiwyswca:
        goto awukmeygqcaeyaeg;
        awukmeygqcaeyaeg:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto cqcqsoqaumyuyemo;
        csoeiakqgmuockgk:
        return $nsmgceoqaqogqmuw;
        goto ewuciaosgqwwagsc;
        wayaguckegemumuy:
        egcucgemmkamyiuu:
        goto kkgkywswiimccaog;
        qcewkmiokmwaakyo:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto iqeqegeqgsmmaeay;
        qoeoouiewgwuyayg:
        if (is_array($sgksuwkwyimqgaii)) {
            goto rgemwoeoywekwuww;
        }
        goto iqwsgmwqeskwqckm;
        kwqqeiiqgiaoquag:
        rgemwoeoywekwuww:
        goto gkuukqkuaayagqwe;
        iqwsgmwqeskwqckm:
        self::_removeElement($kasgukgceywckyou, $sgksuwkwyimqgaii);
        goto yqisiuioymswaciy;
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
        kcsqyquoyoyssiik:
        return $nsmgceoqaqogqmuw;
        goto ymmgkaaokqasmaum;
        qgyeaeoyqscmuqqy:
        aqukigyaugymgocm:
        goto cwaukuukmsqkqqoc;
        mosmyyysosawmqku:
        akiuccuwusyiywaa:
        goto kcsqyquoyoyssiik;
        cwaukuukmsqkqqoc:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto mosmyyysosawmqku;
        sqowskoquogmiiwg:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wcqkwcqqqsygagsg;
        owuommygccmkuues:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto gcqqqceoakukiuim;
            gcqqqceoakukiuim:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto kgmmesqykuckqgqg;
            mokaauiekiycqsii:
            smuuwogesuiogomg:
            goto akyieugiomeuaqsk;
            kgmmesqykuckqgqg:
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                goto musoessicqgioaci;
                iqewyeqegsuemqgc:
                ayucyiqeeeumawgo:
                goto jiykeiuymeoowsma;
                aowacowggwuykewe:
                $msqkueqksqwmskak = array_keys($siquossayskcwkea);
                goto cgcyciqqcqiimwse;
                qykaososcekymqeo:
                ygcocguewqswqcsa:
                goto iqewyeqegsuemqgc;
                musoessicqgioaci:
                if (!$ymyisaeksssueeik instanceof DOMNode) {
                    goto ygcocguewqswqcsa;
                }
                goto aowacowggwuykewe;
                cgcyciqqcqiimwse:
                foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto cqkeucwwyywigyqk;
                    yiqwwseykuimmeuc:
                    if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak)) {
                        goto wwcwmiwqwiygmyka;
                    }
                    goto meiiqwkkeguigquc;
                    isuyseouiawyweke:
                    wymogskocqsmiimw:
                    goto ecmowkisqwcgyykc;
                    cyiwuweakowgmamu:
                    wwcwmiwqwiygmyka:
                    goto isuyseouiawyweke;
                    cqkeucwwyywigyqk:
                    $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName;
                    goto yiqwwseykuimmeuc;
                    meiiqwkkeguigquc:
                    $ymyisaeksssueeik->cmgoqeksagmigwmg($siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue);
                    goto cyiwuweakowgmamu;
                    ecmowkisqwcgyykc:
                }
                goto csymkqmseeouiacg;
                csymkqmseeouiacg:
                equeyqisaekucoyq:
                goto qykaososcekymqeo;
                jiykeiuymeoowsma:
            }
            goto mokaauiekiycqsii;
            akyieugiomeuaqsk:
            qokcmisciyieiwyi:
            goto yukykeccsygagcsm;
            yukykeccsygagcsm:
        }
        goto qgyeaeoyqscmuqqy;
        wcqkwcqqqsygagsg:
        if (!$kasgukgceywckyou) {
            goto akiuccuwusyiywaa;
        }
        goto owuommygccmkuues;
        ymmgkaaokqasmaum:
    }
    
    public static function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _find(?Crawler $kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto smsgceqwueqiwmyi;
        kkewwsgkgooicawy:
        yscsaueouasieayc:
        goto wikugsiimiguuwuw;
        smsgceqwueqiwmyi:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto yscsaueouasieayc;
        }
        goto ywoisggyqsommewa;
        ywoisggyqsommewa:
        return $kasgukgceywckyou->filter($yuumukkaswwoywya);
        goto kkewwsgkgooicawy;
        wikugsiimiguuwuw:
        return $kasgukgceywckyou;
        goto uqwmcimomeomgqgi;
        uqwmcimomeomgqgi:
    }
    
    private static function _removeElement($kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto cckseausycyccake;
        mquaoucacecoymqu:
        eesgqauaaeqiycee:
        goto oucwkycugsesqoas;
        migkmccwwikseoos:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            self::_removeNode($ymyisaeksssueeik);
            qmsikcqgaumiyego:
        }
        goto mquaoucacecoymqu;
        cckseausycyccake:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto migkmccwwikseoos;
        oucwkycugsesqoas:
    }
    
    public static function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee)
    {
        goto kaooossoiysywsuk;
        cqwmseemsiiaqgoo:
        return $eqgoocgaqwqcimie;
        goto yeewwwkywuowoscq;
        kaooossoiysywsuk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto sqqqwsqwmossuima;
        ggqwikwoioeuqsam:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto kyiikasuaqaeigae;
        siwscqyokoekmooc:
        if (!$kasgukgceywckyou) {
            goto eqiesmsygmemseog;
        }
        goto ggqwikwoioeuqsam;
        ocgiuagqmmqakago:
        wcqggkigoogqmmqk:
        goto aocyeyuakyusikwq;
        sqqqwsqwmossuima:
        $eqgoocgaqwqcimie = '';
        goto siwscqyokoekmooc;
        aocyeyuakyusikwq:
        eqiesmsygmemseog:
        goto cqwmseemsiiaqgoo;
        kyiikasuaqaeigae:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uaaigcisokikuqgu;
            cuqcgywmuqoakieq:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee);
            goto imcqqemiwqqegsmk;
            imcqqemiwqqegsmk:
            if (!$eqgoocgaqwqcimie) {
                goto wmcsksugskiskyyy;
            }
            goto mcygayiqasgoyqss;
            uaaigcisokikuqgu:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto yeqgqmywegcwsiow;
            }
            goto cuqcgywmuqoakieq;
            dsqeweimquoouiyo:
            yeqgqmywegcwsiow:
            goto gmmwukkcaouckswu;
            iycosyeceoegukgg:
            wmcsksugskiskyyy:
            goto dsqeweimquoouiyo;
            gmmwukkcaouckswu:
            cceewgewommawcii:
            goto qmuqcuumuagkyggg;
            mcygayiqasgoyqss:
            goto wcqggkigoogqmmqk;
            goto iycosyeceoegukgg;
            qmuqcuumuagkyggg:
        }
        goto ocgiuagqmmqakago;
        yeewwwkywuowoscq:
    }
    
    public static function goqgkgckyagueiso($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_WITH_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _createElement(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw)
    {
        goto gsegcywyaasmwyko;
        meeiyyaqksugkeai:
        foreach ($qeaoumiemyikogys->auamuceiowkuacoq("\142\157\x64\x79")->item(0)->childNodes as $ymyisaeksssueeik) {
            $omwmuycmeqcqokom->cgeyeoimiuyogose($omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true));
            ceomusueeoaqyume:
        }
        goto teuusocwmquakkyc;
        teuusocwmquakkyc:
        kaccyaysqwkaoyka:
        goto ykemkuywkaowmyuc;
        gsegcywyaasmwyko:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto meeiyyaqksugkeai;
        ykemkuywkaowmyuc:
    }
    
    private static function _createElementFromHtml(Crawler $kasgukgceywckyou, $nsmgceoqaqogqmuw)
    {
        goto skmkmwkyeuowoaqa;
        skmkmwkyeuowoaqa:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto cyuwoeiiwcsqukku;
        cyuwoeiiwcsqukku:
        $kgcekiucekagcgai = self::igyokgqyiouieioo($kasgukgceywckyou);
        goto pouyossuowuwcsma;
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
        asysseskuwwesiqc:
        if ($qmeuaeiseuacgiqc) {
            goto kgaciayyiuykqyko;
        }
        goto ymkakuuweqoysagc;
        gwuisuuwecwcaaik:
        kgaciayyiuykqyko:
        goto ugmqiuwksqaqywco;
        iyemcyamksqakiiw:
        wymyuyaiikioyeao:
        goto yceeiagmcyqcayes;
        cicooguqkeoeyges:
        goto agkwamguicmweoom;
        goto gwuisuuwecwcaaik;
        qqaoqesyysccooug:
        eeyoaucukkaesqmk:
        goto cemammoacacweske;
        xawawcwogwekqmqc:
        if (!$omwmuycmeqcqokom instanceof DOMNode) {
            goto eeyoaucukkaesqmk;
        }
        goto yumegkesogwyweiq;
        ymkakuuweqoysagc:
        $omwmuycmeqcqokom->kqgwgkuykuumwcgw($nsmgceoqaqogqmuw, $omwmuycmeqcqokom->firstChild);
        goto cicooguqkeoeyges;
        ugmqiuwksqaqywco:
        $omwmuycmeqcqokom->cgeyeoimiuyogose($nsmgceoqaqogqmuw);
        goto ikiyguwaiacioake;
        ikiyguwaiacioake:
        agkwamguicmweoom:
        goto comcmyekisewieyc;
        comcmyekisewieyc:
        haiiaygcugigaggi:
        goto qqaoqesyysccooug;
        mukeowkkueukysww:
        foreach (self::_find($kasgukgceywckyou, "\x62\157\x64\x79") as $ymyisaeksssueeik) {
            goto caqmiuioaesgyaug;
            caqmiuioaesgyaug:
            $ymyisaeksssueeik = $omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true);
            goto okeqecawkekacsqc;
            okeqecawkekacsqc:
            self::_appendHTML($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc);
            goto smqsooyiiesuyoos;
            smqsooyiiesuyoos:
            auqwmowcyqaioyse:
            goto mgkokmqyecocwwgo;
            mgkokmqyecocwwgo:
        }
        goto iyemcyamksqakiiw;
        yceeiagmcyqcayes:
        goto haiiaygcugigaggi;
        goto uyeimkwsuoqgewgy;
        uyeimkwsuoqgewgy:
        wqemgeeosmaqkuye:
        goto asysseskuwwesiqc;
        yumegkesogwyweiq:
        if ($nsmgceoqaqogqmuw instanceof DOMNode) {
            goto wqemgeeosmaqkuye;
        }
        goto coscuikaoymwwmii;
        coscuikaoymwwmii:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mukeowkkueukysww;
        cemammoacacweske:
    }
    
    public static function wesimowqwekiqiow($nsmgceoqaqogqmuw, $eeqsmkqmsowmicwi = "\163\x74\x79\x6c\x65", $cussukyecoaeayqk = true)
    {
        goto qeywecigqgseiogw;
        imoyquwyuicwioom:
        $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent;
        goto yauausaeuasqsgeu;
        wgyakmueooeqsyqc:
        memocaoaimgeuimm:
        goto wgyukgmocmigoeuo;
        meomioiwwciyyyue:
        goto ykuiuuqwkwwgeqko;
        goto euguuygaocimsesi;
        qeywecigqgseiogw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ucwkqqscieaqmkms;
        uuooemyeyeuswqea:
        $kswaimykcacqyaay = self::_find($kasgukgceywckyou, "\150\x65\x61\144\40\x3e\x20{$eeqsmkqmsowmicwi}")->wugqmqwisygwoeas(0);
        goto kuwieemysouaokqs;
        oaosaqoqiiciwgwg:
        ykuiuuqwkwwgeqko:
        goto kcaswmekegcguiwu;
        aeawksowymsuogeu:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ugcgmougmeoayiea;
            qqqyksacwuumcmia:
            $acqqmqmcquukaqsc = "\x2e{$omasqoksqewuwwkq}\173{$eqgoocgaqwqcimie}\175";
            goto misgeimskqgmumga;
            yayuqeqkcqmiiiyw:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($yuumukkaswwoywya);
            goto kaqeqoaoqacmssmg;
            agaaausyuimymgmm:
            $yuumukkaswwoywya = "\x73\164\171\154\x65";
            goto yayuqeqkcqmiiiyw;
            kaqeqoaoqacmssmg:
            if (!$eqgoocgaqwqcimie) {
                goto mmyqweeceiaeqqus;
            }
            goto ywkkyykyayusymai;
            ywkkyykyayusymai:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($yuumukkaswwoywya);
            goto uuawmiyqysumgaqy;
            emsquuamiesiqseq:
            kusuckgswgkceusi:
            goto wgocyuiekyasmquq;
            sccqusyuqeiugcem:
            $eqgoocgaqwqcimie = str_replace("\x21\x69\x6d\160\x6f\162\x74\141\x6e\x74", '', $eqgoocgaqwqcimie);
            goto qoaiwgymwioiissy;
            ugcgmougmeoayiea:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto cmiqweaugcqmwoiq;
            }
            goto agaaausyuimymgmm;
            iqeksucuwucgsuaq:
            $egkyssmuqcwaciya = $ymyisaeksssueeik->waecsyqmwascmqoa("\143\x6c\141\x73\163");
            goto kagiaysuecmceegy;
            misgeimskqgmumga:
            $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc;
            goto iqeksucuwucgsuaq;
            uuawmiyqysumgaqy:
            $omasqoksqewuwwkq = ManipulateString::uniqid(5);
            goto uyusyuseakqmycim;
            uyusyuseakqmycim:
            if ($cussukyecoaeayqk) {
                goto ugogcmgasecqmaqo;
            }
            goto sccqusyuqeiugcem;
            gccikccauwosemee:
            mmyqweeceiaeqqus:
            goto cowscsiukyiwymqi;
            kagiaysuecmceegy:
            $egkyssmuqcwaciya .= "\x20{$omasqoksqewuwwkq}";
            goto gisygciesowawkqy;
            qoaiwgymwioiissy:
            ugogcmgasecqmaqo:
            goto qqqyksacwuumcmia;
            cowscsiukyiwymqi:
            cmiqweaugcqmwoiq:
            goto emsquuamiesiqseq;
            gisygciesowawkqy:
            $ymyisaeksssueeik->cmgoqeksagmigwmg("\x63\x6c\x61\x73\x73", $egkyssmuqcwaciya);
            goto gccikccauwosemee;
            wgocyuiekyasmquq:
        }
        goto wgyakmueooeqsyqc;
        euguuygaocimsesi:
        siyawoacgucmaoky:
        goto qiomiuawymsqimgk;
        yauausaeuasqsgeu:
        aokkmsyimyouoeim:
        goto wiyauoggygqoymwu;
        yceyawgskeqggcuy:
        ymgkgeqimsusocoy:
        goto msweyewumoisksiy;
        ucwkqqscieaqmkms:
        if (!$kasgukgceywckyou) {
            goto ymgkgeqimsusocoy;
        }
        goto uuooemyeyeuswqea;
        yagiokukkmimaoae:
        self::pmouaioykaoceyag($kasgukgceywckyou, "\150\x65\141\x64", $ewgwqamkygiqaawc);
        goto meomioiwwciyyyue;
        wgyukgmocmigoeuo:
        if ($kswaimykcacqyaay instanceof DOMElement) {
            goto siyawoacgucmaoky;
        }
        goto yagiokukkmimaoae;
        wiyauoggygqoymwu:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, "\133\163\164\x79\x6c\145\135");
        goto aeawksowymsuogeu;
        kcaswmekegcguiwu:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto yceyawgskeqggcuy;
        qiomiuawymsqimgk:
        $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc;
        goto oaosaqoqiiciwgwg;
        kywicmoksqkayose:
        if (!$kswaimykcacqyaay instanceof DOMNode) {
            goto aokkmsyimyouoeim;
        }
        goto imoyquwyuicwioom;
        msweyewumoisksiy:
        return $nsmgceoqaqogqmuw;
        goto uyqckmcowkimsmyq;
        kuwieemysouaokqs:
        $ewgwqamkygiqaawc = '';
        goto kywicmoksqkayose;
        uyqckmcowkimsmyq:
    }
    
    public static function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, $egomoiciasmiesww = false)
    {
        goto ssecwqeouoeamsio;
        wuwggkokqumggyiu:
        $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc;
        goto ugmowoyeoowiiqie;
        kecqwqseaiaomoao:
        return $nsmgceoqaqogqmuw;
        goto gmgkmqouwygkwuua;
        uucwuqeucsiykagi:
        if (!$kasgukgceywckyou) {
            goto qmymeeegusssawmu;
        }
        goto ueowcqqgaoysmqie;
        ooiockqsscsuqokc:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto ysoesyqiaaugywgi;
        }
        goto acsgyykcowwkyayy;
        kwaammsskmiamace:
        ysoesyqiaaugywgi:
        goto amacugyqcmgqiaog;
        coqewawckmigciso:
        $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc;
        goto kwaammsskmiamace;
        amacugyqcmgqiaog:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ccssuekkawuwwkyk;
        ugmowoyeoowiiqie:
        myyycckqeikqiuqi:
        goto coqewawckmigciso;
        ueowcqqgaoysmqie:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $yuumukkaswwoywya)->wugqmqwisygwoeas(0);
        goto ooiockqsscsuqokc;
        ccssuekkawuwwkyk:
        qmymeeegusssawmu:
        goto kecqwqseaiaomoao;
        acsgyykcowwkyayy:
        if ($egomoiciasmiesww) {
            goto myyycckqeikqiuqi;
        }
        goto wuwggkokqumggyiu;
        ssecwqeouoeamsio:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto uucwuqeucsiykagi;
        gmgkmqouwygkwuua:
    }
    
    public static function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc = true)
    {
        goto ieyowiusaeousyse;
        yoeiuoyekameacwu:
        wccegsoaeisquyeq:
        goto wwmggkkyegumakew;
        ooueyocsuseuawgc:
        if (!$kasgukgceywckyou) {
            goto wccegsoaeisquyeq;
        }
        goto eoskieimkcimmwio;
        ewyukeoyymaooaqa:
        self::_appendHTML($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc);
        goto mksggqikmumuycga;
        wwmggkkyegumakew:
        return $nsmgceoqaqogqmuw;
        goto cquumoyicacciqei;
        emkuqqeesmiycqqo:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto kmkmisyucykygqoc;
        }
        goto ewyukeoyymaooaqa;
        ugaoeiuoosyggsmi:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto yoeiuoyekameacwu;
        mksggqikmumuycga:
        kmkmisyucykygqoc:
        goto ugaoeiuoosyggsmi;
        eoskieimkcimmwio:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $omwmuycmeqcqokom)->wugqmqwisygwoeas(0);
        goto emkuqqeesmiycqqo;
        ieyowiusaeousyse:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ooueyocsuseuawgc;
        cquumoyicacciqei:
    }
    
    public static function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto oyquokessoouwuke;
        mcmmgacykcsowqiw:
        gsquqssmimkgcoga:
        goto mwimaeocgaqeiukm;
        ksccwuecqkqkawck:
        return $aqykuigiuwmmcieu;
        goto eeeaumqcsieckaoc;
        wumeiwysoiscimiu:
        swiaoqqqyqusscqi:
        goto eequmkcwsuakwwmo;
        oiksiqocuawwgeek:
        if (!$kasgukgceywckyou) {
            goto asoycqscmioaaggw;
        }
        goto skqyeawoqyssamii;
        skqyeawoqyssamii:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto aaccwuemygqmicme;
        maugkumeqqaoqmkq:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
        goto qauqcecycoswuoyc;
        aaccwuemygqmicme:
        if (!$kwmksuuciqkiymek) {
            goto ioqkkgikqygkemce;
        }
        goto qsiqckciwyomqwue;
        oyquokessoouwuke:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mgykueyyyoueykgm;
        mcqkmiukmosqwemy:
        asoycqscmioaaggw:
        goto ksccwuecqkqkawck;
        mwimaeocgaqeiukm:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent;
        goto cycoyeooqscgugwa;
        mgykueyyyoueykgm:
        $aqykuigiuwmmcieu = '';
        goto oiksiqocuawwgeek;
        iigwwyogmwesyoau:
        if ($ewgwqamkygiqaawc) {
            goto gsquqssmimkgcoga;
        }
        goto maugkumeqqaoqmkq;
        gqmgeusocymaikoy:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto swiaoqqqyqusscqi;
        }
        goto iigwwyogmwesyoau;
        cycoyeooqscgugwa:
        gkcsgskucsicakwg:
        goto wumeiwysoiscimiu;
        eequmkcwsuakwwmo:
        ioqkkgikqygkemce:
        goto mcqkmiukmosqwemy;
        qauqcecycoswuoyc:
        goto gkcsgskucsicakwg;
        goto mcmmgacykcsowqiw;
        qsiqckciwyomqwue:
        $ymyisaeksssueeik = $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto gqmgeusocymaikoy;
        eeeaumqcsieckaoc:
    }
    
    public static function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto ccwaiwmcccmswyau;
        sociuiuiwsymiyam:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto gyyawusuyeigckys;
        fommkikuoyaeskiw:
        esokuuqukgaiiuao:
        goto ouecgmgoaaswqomi;
        ouecgmgoaaswqomi:
        return $sogksuscggsicmac;
        goto okkimkuusqsiemkk;
        qoiqosqiguawwekg:
        $sogksuscggsicmac = [];
        goto xiwcqyowugqukksy;
        gyyawusuyeigckys:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uqsmsqoeimicguwe;
            mkaoooyookegwgwg:
            goto yyukimsicowasyqs;
            goto eaasaucuyacqooey;
            mawsiqmcsguuokok:
            yyukimsicowasyqs:
            goto kisaoauaekgkauui;
            caaqcciyeymoqqmc:
            self::_removeNode($ymyisaeksssueeik);
            goto kkeakokiekuywmwy;
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
            kisaoauaekgkauui:
            $sogksuscggsicmac[] = $aqykuigiuwmmcieu;
            goto gckckwqqgkoyyagq;
            gckckwqqgkoyyagq:
            myusuecogkwoqimq:
            goto mickmqggcqwackce;
            kkeakokiekuywmwy:
            if ($ewgwqamkygiqaawc) {
                goto kqawgskqiimioaku;
            }
            goto gmcsqgoweawewags;
            mickmqggcqwackce:
            guwmecmmcueokcgu:
            goto egcyaksemqaakqgy;
            uoqwymoegwoweuyk:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->textContent;
            goto mawsiqmcsguuokok;
            egcyaksemqaakqgy:
        }
        goto iimeieccwuumkgim;
        iimeieccwuumkgim:
        suqosyewmcawwouy:
        goto fommkikuoyaeskiw;
        ccwaiwmcccmswyau:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qoiqosqiguawwekg;
        xiwcqyowugqukksy:
        if (!$kasgukgceywckyou) {
            goto esokuuqukgaiiuao;
        }
        goto sociuiuiwsymiyam;
        okkimkuusqsiemkk:
    }
    
    public static function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, $ymkomoccmymcoiea = "\163\x74\x79\154\x65", $wamcomkuwysqgwgk = "\x25\x73\73")
    {
        goto gyqaqyuewuquqkuy;
        kowocmqmoqwacmoa:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto jggaoyqecgewsysy;
        gyqaqyuewuquqkuy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto uqmscgsoqeysooqc;
        awccsuqeikuacioa:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto kwwwckywsygiwcoc;
            oiakqemessasuyci:
            if (!$eqgoocgaqwqcimie) {
                goto wiyoqoiqsmwuiywa;
            }
            goto kqakgccawoogkiai;
            muceomkycemgsccu:
            oyoeowyeooyowomm:
            goto qsuqueusmkasmeig;
            kqakgccawoogkiai:
            $yeacayasgueouoqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
            goto eoawcoaayikaiocu;
            aykiaquyoagykguu:
            emguyukcyeeuyqyo:
            goto ciiikyqwkwsceouq;
            aucuikgwyisgguye:
            $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie);
            goto gwswuqomwckekgum;
            mykqimauysqiessi:
            mokoeuoicweqwksk:
            goto muceomkycemgsccu;
            aqmemoyecceeceuc:
            if (!($ymkomoccmymcoiea == "\x73\164\x79\154\145")) {
                goto emguyukcyeeuyqyo;
            }
            goto ammsmyuaoogueqog;
            ammsmyuaoogueqog:
            $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\x3b") . "\73";
            goto aykiaquyoagykguu;
            gmqoaasouciogwkq:
            wiyoqoiqsmwuiywa:
            goto mykqimauysqiessi;
            ciiikyqwkwsceouq:
            $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\x20{$eqgoocgaqwqcimie}"));
            goto gmqoaasouciogwkq;
            gwswuqomwckekgum:
            ycaysuaiikcskakg:
            goto aqmemoyecceeceuc;
            secswciggsguqauw:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($ccamueccusigaaio);
            goto oigoswgkgwescakq;
            eoawcoaayikaiocu:
            if (!$wamcomkuwysqgwgk) {
                goto ycaysuaiikcskakg;
            }
            goto aucuikgwyisgguye;
            oigoswgkgwescakq:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($ccamueccusigaaio);
            goto oiakqemessasuyci;
            kwwwckywsygiwcoc:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto mokoeuoicweqwksk;
            }
            goto secswciggsguqauw;
            qsuqueusmkasmeig:
        }
        goto gyyiagqqegiygkag;
        uqmscgsoqeysooqc:
        if (!$kasgukgceywckyou) {
            goto cymoaqswaeycikca;
        }
        goto awgmmoegiwqoswkk;
        gyyiagqqegiygkag:
        eesgmkwwiawcskie:
        goto kowocmqmoqwacmoa;
        jggaoyqecgewsysy:
        cymoaqswaeycikca:
        goto acisamqweoscawig;
        awgmmoegiwqoswkk:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto awccsuqeikuacioa;
        acisamqweoscawig:
        return $nsmgceoqaqogqmuw;
        goto kkoswgsscqsgqmey;
        kkoswgsscqsgqmey:
    }
    
    public static function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', $uuksaskqamgouosy = true)
    {
        goto aqasuykawsiekssw;
        aqasuykawsiekssw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto isicqmmaqumssuka;
        gekaiqysouaoyaci:
        mskguuoycuamgyim:
        goto umeomugcsyuukqsu;
        sskkmcmqeimgeuwg:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto cseiiqikiimgcmmy;
            qqiqiaqoiesmuokq:
            eoggqsukkackwoag:
            goto woekwasoyuwmqgao;
            ywiwagqgeomcwkss:
            $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo;
            goto kaeomaoaieammmca;
            qqmskoaugmqsaaqy:
            if (!$goiaaeekgeqqmaqo) {
                goto kiieueeyieewgcuu;
            }
            goto gsisioycuuewgmmw;
            ekesimcsecgcuoms:
            $ymyisaeksssueeik->nodeValue = '';
            goto qqmskoaugmqsaaqy;
            kaeomaoaieammmca:
            goto cqiagomawawqmcoo;
            goto iiumqmaicymgouwy;
            wcsimwcyyumkyuck:
            kiieueeyieewgcuu:
            goto yoggmucmsyeaseso;
            iiumqmaicymgouwy:
            ywmukuyioksqgimq:
            goto ekesimcsecgcuoms;
            gsisioycuuewgmmw:
            self::_createElement($ymyisaeksssueeik, $goiaaeekgeqqmaqo);
            goto wcsimwcyyumkyuck;
            cseiiqikiimgcmmy:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto eoggqsukkackwoag;
            }
            goto swqucgmugmekaoqc;
            woekwasoyuwmqgao:
            cqyommqsimyoioeo:
            goto scogoqgeeoeqsuku;
            swqucgmugmekaoqc:
            if ($uuksaskqamgouosy) {
                goto ywmukuyioksqgimq;
            }
            goto ywiwagqgeomcwkss;
            yoggmucmsyeaseso:
            cqiagomawawqmcoo:
            goto qqiqiaqoiesmuokq;
            scogoqgeeoeqsuku:
        }
        goto euguykkkieguasgy;
        msggcgusisiqukme:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto sskkmcmqeimgeuwg;
        isicqmmaqumssuka:
        if (!$kasgukgceywckyou) {
            goto mskguuoycuamgyim;
        }
        goto msggcgusisiqukme;
        wgawmiiocosqkgos:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto gekaiqysouaoyaci;
        euguykkkieguasgy:
        ikwagqguqmqsakug:
        goto wgawmiiocosqkgos;
        umeomugcsyuukqsu:
        return $nsmgceoqaqogqmuw;
        goto swyakyokwmomoqow;
        swyakyokwmomoqow:
    }
    
    private static function _updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = self::UPDATE_ACTION)
    {
        goto yooqmugaioweswcs;
        eqycmciquqaesuyk:
        return $kasgukgceywckyou;
        goto geycsscsmmgaiioe;
        yooqmugaioweswcs:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto iekuaksaiccyckaw;
        yskiummkweosoacm:
        return $nsmgceoqaqogqmuw;
        goto aakgkaqakoqgcsci;
        geycsscsmmgaiioe:
        ukqewcigokikemua:
        goto yskiummkweosoacm;
        wokoyuoomwmgwaoo:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto cwkeqwwaageaiecm;
            cwkeqwwaageaiecm:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto cymysimiiemeqcmu;
            ggayissweeisyaqa:
            suigamecaieiiuka:
            goto eaqqweigimyoywwu;
            cgwiwgeekamooamc:
            kgamqamcoaaqmgeg:
            goto eygucgqouoacesei;
            qaemeaiiueckkouq:
            try {
                $kwmksuuciqkiymek = $kwmksuuciqkiymek->eyagosskwwmgwmog();
            } catch (Exception $wgaoewqkwgomoaai) {
                goto cywmacoauegeacwk;
            }
            goto cgwiwgeekamooamc;
            eygucgqouoacesei:
            if (!$kwmksuuciqkiymek) {
                goto suigamecaieiiuka;
            }
            goto csaqukkmgesgewkg;
            makegskyquimcacu:
            ecwcasmmiooagwaq:
            goto ggayissweeisyaqa;
            csaqukkmgesgewkg:
            foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) {
                goto okwyiswgsyymgius;
                ekksaoygcqikaque:
                iqeeygqsccygwqas:
                goto qkmswkmokigugkaw;
                wakqmmwcieuuiygm:
                $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
                goto ywwcwwqawggauaso;
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
                okwyiswgsyymgius:
                $momcykaoccoymeig = 0;
                goto wakqmmwcieuuiygm;
                qkmswkmokigugkaw:
                ukmuimokewiqqmsy:
                goto iykugimymaauokkm;
                iykugimymaauokkm:
            }
            goto makegskyquimcacu;
            eaqqweigimyoywwu:
            cywmacoauegeacwk:
            goto ikcokaseywaaekgo;
            cymysimiiemeqcmu:
            if (!(isset($siquossayskcwkea["\x70\141\162\145\156\164"]) && $siquossayskcwkea["\160\141\x72\145\156\164"])) {
                goto kgamqamcoaaqmgeg;
            }
            goto qaemeaiiueckkouq;
            ikcokaseywaaekgo:
        }
        goto wqkqggsaacukeimg;
        wqkqggsaacukeimg:
        mameecqeeiakmiks:
        goto eqycmciquqaesuyk;
        iekuaksaiccyckaw:
        if (!$kasgukgceywckyou) {
            goto ukqewcigokikemua;
        }
        goto wokoyuoomwmgwaoo;
        aakgkaqakoqgcsci:
    }
    
    private static function _updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig)
    {
        goto yayoumcciuyieeoi;
        uyieackqwooqcqos:
        $cusosqmyoqiykqgw = $eqgoocgaqwqcimie;
        goto suumgeqekqgggugc;
        eaaicwyuwkogsies:
        yyiemgyowokesgww:
        goto akquuwsekmuoicae;
        omqyiocewcgomqks:
        switch ($aiamqeawckcsuaou) {
            case self::REMOVE_ACTION:
                goto cocouuwqwiaiyemu;
                kgmumymgeqemogoy:
                uqmsuuwuuqcaqasy:
                goto gcseqcagkcsmgokw;
                wiikemmmqckmwcma:
                cqwsaoiqmiewkigq:
                goto weqgaswqweauwwyc;
                yggsmyqseogscusc:
                qaciuiaecgowsukq:
                goto eaucsgyigimwwuqg;
                weqgaswqweauwwyc:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($eqgoocgaqwqcimie);
                goto ecayeacokkmyckmk;
                eaucsgyigimwwuqg:
                if (!is_array($ymyqweogikqywwqc)) {
                    goto uqmsuuwuuqcaqasy;
                }
                goto qkiiwqyuiuqwqosc;
                gcymuqcsmwiywkum:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto iywkomquqqosokyq;
                qkiiwqyuiuqwqosc:
                $cusosqmyoqiykqgw = implode("\x20", $ymyqweogikqywwqc);
                goto kgmumymgeqemogoy;
                cocouuwqwiaiyemu:
                if (is_numeric($ymkomoccmymcoiea)) {
                    goto cqwsaoiqmiewkigq;
                }
                goto msukmuseccwicmwg;
                makmsuccimeksawa:
                unset($ymyqweogikqywwqc[$uusmaiomayssaecw]);
                goto yggsmyqseogscusc;
                ssgiyqwsgyyogmqm:
                goto wymeuweieiomiuqw;
                goto wymkemmkwawacmys;
                yakwwcwqaokocwcy:
                qaugewusyagkoksg:
                goto ssgiyqwsgyyogmqm;
                owkqqqyysqyaykow:
                if (!(false !== $uusmaiomayssaecw)) {
                    goto qaciuiaecgowsukq;
                }
                goto makmsuccimeksawa;
                msukmuseccwicmwg:
                $ymyqweogikqywwqc = explode("\40", $ymyqweogikqywwqc);
                goto quyaggaoeakmcqmo;
                quyaggaoeakmcqmo:
                $uusmaiomayssaecw = array_search($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto owkqqqyysqyaykow;
                gumuwayiukgmeusw:
                goto qaugewusyagkoksg;
                goto wiikemmmqckmwcma;
                iywkomquqqosokyq:
                ieqqyaeksqicikwe:
                goto gumuwayiukgmeusw;
                ecayeacokkmyckmk:
                $cusosqmyoqiykqgw = null;
                goto yakwwcwqaokocwcy;
                gcseqcagkcsmgokw:
                if ($cusosqmyoqiykqgw) {
                    goto ieqqyaeksqicikwe;
                }
                goto gcymuqcsmwiywkum;
                wymkemmkwawacmys:
            case self::RENAME_ACTION:
                goto wqmuwigkssqkoweq;
                wqmuwigkssqkoweq:
                $cusosqmyoqiykqgw = null;
                goto qugokekqyguksees;
                wwsamammkqcsocqc:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto cceykcumeqigcqkg;
                emsewgkwsmcgkoyy:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto wwsamammkqcsocqc;
                gkmiesukccsqmcqy:
                goto wymeuweieiomiuqw;
                goto iqomqkaueoackgwg;
                qugokekqyguksees:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto gcmiguwuukeawaii;
                }
                goto emsewgkwsmcgkoyy;
                cceykcumeqigcqkg:
                gcmiguwuukeawaii:
                goto gkmiesukccsqmcqy;
                iqomqkaueoackgwg:
            case self::REPLACE_ACTION:
            case self::UPDATE_ACTION:
                goto uucoqooygmoeuicu;
                soyyokqommwwoyoy:
                goto ysowsoswoigywasy;
                goto ioomkicqkmoooiew;
                uucoqooygmoeuicu:
                if ($aiamqeawckcsuaou === self::REPLACE_ACTION) {
                    goto yewcqwqmykemykca;
                }
                goto ugakmuywaoowqymc;
                cqcaimmsooakqmae:
                
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto iykceckkokwcsgoi;
                ioomkicqkmoooiew:
                yewcqwqmykemykca:
                goto asuwukmiyuqqgqiy;
                ugakmuywaoowqymc:
                if ($ymkomoccmymcoiea == "\143\x6c\141\163\163" && $ymyqweogikqywwqc) {
                    goto wauomwaoauygqsou;
                }
                goto soyyokqommwwoyoy;
                goicqkqwoomuowkw:
                ysowsoswoigywasy:
                goto qagigacwywmweskc;
                asuwukmiyuqqgqiy:
                $ymyqweogikqywwqc = null;
                goto cqcaimmsooakqmae;
                iykceckkokwcsgoi:
                goto ysowsoswoigywasy;
                goto oimgigccqeqcsmoy;
                qagigacwywmweskc:
                goto wymeuweieiomiuqw;
                goto akiymyugggumyuic;
                gqemygsogaaasyes:
                $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\40{$cusosqmyoqiykqgw}";
                goto goicqkqwoomuowkw;
                oimgigccqeqcsmoy:
                wauomwaoauygqsou:
                goto gqemygsogaaasyes;
                akiymyugggumyuic:
            case self::REPLACE_WITH_ACTION:
                goto yicumoqkcoycyoyu;
                ywwqgsuuquocmqgk:
                goto wymeuweieiomiuqw;
                goto owaccsusoeoacmwc;
                moywwywcsegwawmi:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto mqugkocskuaokeiy;
                owqyqioycqkesioo:
                $cusosqmyoqiykqgw = null;
                goto ywwqgsuuquocmqgk;
                wqmquqcyioicymwu:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($cusosqmyoqiykqgw, $ymyqweogikqywwqc);
                goto moywwywcsegwawmi;
                yicumoqkcoycyoyu:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto qoeaosoumsicoqms;
                }
                goto wqmquqcyioicymwu;
                mqugkocskuaokeiy:
                qoeaosoumsicoqms:
                goto owqyqioycqkesioo;
                owaccsusoeoacmwc:
        }
        goto kikeekyeuiyoiuoc;
        keggycaoqkyockgu:
        wymeuweieiomiuqw:
        goto gemyysqyokmecguu;
        gemyysqyokmecguu:
        if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) {
            goto ycwwyeycsiquwiyq;
        }
        goto eaqoukeuceuywwac;
        eyqiqgwmkyegsmgw:
        ycwwyeycsiquwiyq:
        goto emeycusyiaccgcoo;
        emmcgqumuacycqgg:
        uuiuemckcuckewow:
        goto omsqscuggqqkuigc;
        emeycusyiaccgcoo:
        ewmcqauqqeywoqcs:
        goto ioyamykqysewiueo;
        suumgeqekqgggugc:
        goto yyiemgyowokesgww;
        goto emmcgqumuacycqgg;
        yayoumcciuyieeoi:
        if (is_callable($eqgoocgaqwqcimie)) {
            goto uuiuemckcuckewow;
        }
        goto uyieackqwooqcqos;
        eaqoukeuceuywwac:
        $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, $cusosqmyoqiykqgw);
        goto eyqiqgwmkyegsmgw;
        akquuwsekmuoicae:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto ewmcqauqqeywoqcs;
        }
        goto sgqkaakkaugosoak;
        omsqscuggqqkuigc:
        $cusosqmyoqiykqgw = call_user_func($eqgoocgaqwqcimie, $momcykaoccoymeig, $gaeqamemwmwsyukm);
        goto eaaicwyuwkogsies;
        kikeekyeuiyoiuoc:
        qogiwqwqsaesiskg:
        goto keggycaoqkyockgu;
        sgqkaakkaugosoak:
        $ymyqweogikqywwqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
        goto omqyiocewcgomqks;
        ioyamykqysewiueo:
    }
    
    public static function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $eagcmyswaakcwyec = [], $omwmuycmeqcqokom = "\x64\151\x76", $qmeuaeiseuacgiqc = true)
    {
        goto aieuuwkemkgccgqq;
        scuasiqkgymskyoc:
        return $nsmgceoqaqogqmuw;
        goto uysasageemkuuusg;
        gsmueswaqwsqiqay:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto eoggoeeymkgmcckw;
            eeycgakkgoakqaac:
            euqokgqeguqwueas:
            goto gscqagmcimoymgeq;
            lmsiwkmayqggkuie:
            self::_removeNode($ymyisaeksssueeik);
            goto mkeiwccsuyqyqaom;
            mkeiwccsuyqyqaom:
            $okcscwesammossuq .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto ygooeemqcwgcmwgy;
            ygooeemqcwgcmwgy:
            ssgkiscaiguwcyeq:
            goto eeycgakkgoakqaac;
            sgmwwuiygokssyeg:
            $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode;
            goto lmsiwkmayqggkuie;
            eoggoeeymkgmcckw:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto ssgkiscaiguwcyeq;
            }
            goto sgmwwuiygokssyeg;
            gscqagmcimoymgeq:
        }
        goto qkueygwuioiiemuw;
        qagksgqcwesuogsi:
        $ygickiygyemsowyo = null;
        goto gsmueswaqwsqiqay;
        gqukqoawwwyuukwc:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ceuyeoigyioagyou;
        ceuyeoigyioagyou:
        $okcscwesammossuq = '';
        goto qagksgqcwesuogsi;
        siaqoyuoaccceoqy:
        self::_appendHTML($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc);
        goto hgmsiocesiimemgo;
        qkueygwuioiiemuw:
        gakugweoyossmeao:
        goto csgmgackuimwqgmw;
        aieuuwkemkgccgqq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto egmkyicacugkkoie;
        yewuugymokaikqmq:
        gqucksyyuwcwiyog:
        goto scuasiqkgymskyoc;
        egmkyicacugkkoie:
        if (!$kasgukgceywckyou) {
            goto gqucksyyuwcwiyog;
        }
        goto gqukqoawwwyuukwc;
        csgmgackuimwqgmw:
        $omwmuycmeqcqokom = ManipulateHTML::qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq);
        goto siaqoyuoaccceoqy;
        hgmsiocesiimemgo:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto yewuugymokaikqmq;
        uysasageemkuuusg:
    }
}

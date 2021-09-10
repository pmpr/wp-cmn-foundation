<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const UPDATE_ACTION = "\165\160\144\x61\x74\145";
    const REMOVE_ACTION = "\x72\145\x6d\x6f\166\145";
    const RENAME_ACTION = "\x72\145\x6e\141\x6d\145";
    const REPLACE_ACTION = "\162\x65\160\x6c\141\x63\145";
    const REPLACE_WITH_ACTION = "\x72\x65\x70\x6c\x61\x63\145\137\167\x69\164\150";
    
    public static function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, $uuyoeicyoayimaoa = false, $ksaameoqigiaoigg = true)
    {
        goto cacouogsmqcomkke;
        kckiciumueaaywao:
        ycyeqaucoaieegag:
        goto ummmcgmiywgyaqqm;
        gamqsmuumocgweik:
        if (!$ksaameoqigiaoigg) {
            goto ewyacsgkouuaymem;
        }
        goto mscwwgwkgmqgqque;
        ymykcocgwsmwwami:
        ewyacsgkouuaymem:
        goto uqiouscouqsqeyau;
        yweuowuosoummioc:
        iqeimykauywksaoi:
        goto gamqsmuumocgweik;
        quywmggomgaseomy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gcoquwcscysiccec;
        ummmcgmiywgyaqqm:
        return $nsmgceoqaqogqmuw;
        goto quakesoomwuwygsu;
        uqiouscouqsqeyau:
        keuggiweyueacgow:
        goto kckiciumueaaywao;
        ggcgagwamuqckocw:
        foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) {
            goto soqmguugasswqwki;
            aeueicccggqwcawc:
            if (call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) {
                goto ogywamggekuoqaic;
            }
            goto uyksowciskqigsig;
            ksasgwowcqqegcic:
            goto iqeimykauywksaoi;
            goto mkmgkgowgamqakqi;
            iqmuoeyayeyysksq:
            csagaieykqsoyyyo:
            goto oyqggcawowywmgmg;
            cqmwkoscgigmawys:
            goto csagaieykqsoyyyo;
            goto oeayowwwskuwywei;
            oeayowwwskuwywei:
            owoiouaomwqgksqc:
            goto ksasgwowcqqegcic;
            heaugqmkoiaymyoi:
            ogywamggekuoqaic:
            goto iqmuoeyayeyysksq;
            uyksowciskqigsig:
            goto iqeimykauywksaoi;
            goto heaugqmkoiaymyoi;
            aeokmsquaasumuuo:
            if ($ymyisaeksssueeik instanceof DOMElement) {
                goto oaawymkyguukokoc;
            }
            goto cqmwkoscgigmawys;
            oyqggcawowywmgmg:
            mymeomeemsgoeuck:
            goto mwggeaakeeuqseiy;
            soqmguugasswqwki:
            if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                goto owoiouaomwqgksqc;
            }
            goto aeokmsquaasumuuo;
            eocoacoiikkigoiu:
            oaawymkyguukokoc:
            goto aeueicccggqwcawc;
            mkmgkgowgamqakqi:
            goto csagaieykqsoyyyo;
            goto eocoacoiikkigoiu;
            mwggeaakeeuqseiy:
        }
        goto yweuowuosoummioc;
        gcoquwcscysiccec:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto keuggiweyueacgow;
        }
        goto ywmqqmuyaaecgmui;
        ywmqqmuyaaecgmui:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ggcgagwamuqckocw;
        cacouogsmqcomkke:
        if (!$ekiuyucoiagmscgy) {
            goto ycyeqaucoaieegag;
        }
        goto quywmggomgaseomy;
        mscwwgwkgmqgqque:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ymykcocgwsmwwami;
        quakesoomwuwygsu:
    }
    
    public static function _getCrawler($nsmgceoqaqogqmuw)
    {
        goto gwycusqkiusmouge;
        gwycusqkiusmouge:
        $kasgukgceywckyou = null;
        goto aieqysoguicqukeq;
        giueuyueoiukcima:
        suyscmmiukkwmkig:
        goto ueecsaukysiceeyq;
        akcuqqooswuasawe:
        iusqyigsmwcwiaeg:
        goto awceiuoiqyqaseiq;
        awceiuoiqyqaseiq:
        $kasgukgceywckyou = new Crawler(mb_convert_encoding($nsmgceoqaqogqmuw, "\110\124\x4d\114\x2d\x45\x4e\x54\111\124\x49\x45\123", "\125\124\x46\55\70"));
        goto iucukgoockccyokm;
        aieqysoguicqukeq:
        if ($nsmgceoqaqogqmuw instanceof Crawler) {
            goto suyscmmiukkwmkig;
        }
        goto moqakkycewiucuis;
        aaogwucegguweoki:
        return $kasgukgceywckyou;
        goto meeiequcowsceiow;
        ueecsaukysiceeyq:
        $kasgukgceywckyou = $nsmgceoqaqogqmuw;
        goto kgeeyaugiyyceaec;
        kiceosucogcykyge:
        goto giaeuoeockyqsyse;
        goto giueuyueoiukcima;
        moqakkycewiucuis:
        if ($nsmgceoqaqogqmuw && trim(preg_replace("\x2f\134\x73\x2b\x2f", "\40", $nsmgceoqaqogqmuw))) {
            goto iusqyigsmwcwiaeg;
        }
        goto kiceosucogcykyge;
        iucukgoockccyokm:
        giaeuoeockyqsyse:
        goto aaogwucegguweoki;
        kgeeyaugiyyceaec:
        goto giaeuoeockyqsyse;
        goto akcuqqooswuasawe;
        meeiequcowsceiow:
    }
    
    public static function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc)
    {
        goto awmwewyeqcgmmcyg;
        wuwkeggsaiumowug:
        mceesakqeysmiauu:
        goto yuqoyicsmawcauec;
        yuqoyicsmawcauec:
        msugciceoeaqyggk:
        goto ymumcsswaocykmeo;
        ymumcsswaocykmeo:
        return $nsmgceoqaqogqmuw;
        goto oegkcqakmussueqq;
        keqmucqsyyuikoou:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto cgcagmggieimycaw;
        ecokmyyccossammg:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto msugciceoeaqyggk;
        }
        goto keqmucqsyyuikoou;
        awmwewyeqcgmmcyg:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ecokmyyccossammg;
        cgcagmggieimycaw:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ssqyqgwcimqcuksg;
            omqycomsaeugqyca:
            $koaqiaecmascwuyy = self::_createElementFromHtml($kasgukgceywckyou, $ewgwqamkygiqaawc);
            goto yqsegosoqouiauiw;
            yqsegosoqouiauiw:
            if (!$koaqiaecmascwuyy) {
                goto swuwcwceeiosooks;
            }
            goto kgwaiecysoqgkqyu;
            gaqcauwaswgqcquy:
            swuwcwceeiosooks:
            goto iugeecogeucykkcc;
            ssqyqgwcimqcuksg:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto ykgawcqgqysmqioq;
            }
            goto omqycomsaeugqyca;
            uusuweogimkuigcy:
            kseyamwikqwqkwgw:
            goto cygeiiegsgiayomk;
            iugeecogeucykkcc:
            ykgawcqgqysmqioq:
            goto uusuweogimkuigcy;
            kgwaiecysoqgkqyu:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto qoueoyeoiiocgoac;
            qoueoyeoiiocgoac:
            $omwmuycmeqcqokom->cgeyeoimiuyogose($koaqiaecmascwuyy);
            goto gaqcauwaswgqcquy;
            cygeiiegsgiayomk:
        }
        goto wuwkeggsaiumowug;
        oegkcqakmussueqq:
    }
    
    public static function umuecysoywoumgwo($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto qkkiemwuuaaqqyas;
        euoymauomemecuao:
        cweguimoaweiumii:
        goto skgeuaegiqaqgyaq;
        qkkiemwuuaaqqyas:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto aagkoumomwwcaeka;
        skgeuaegiqaqgyaq:
        return false;
        goto qegkmgwymeckgwyg;
        wueqcceaguewiucw:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ayucyyiciocgyass;
        ayucyyiciocgyass:
        return $kwmksuuciqkiymek->count() > 0;
        goto euoymauomemecuao;
        aagkoumomwwcaeka:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto cweguimoaweiumii;
        }
        goto wueqcceaguewiucw;
        qegkmgwymeckgwyg:
    }
    
    public static function igyokgqyiouieioo(Crawler $kasgukgceywckyou)
    {
        $ymyisaeksssueeik = $kasgukgceywckyou->wugqmqwisygwoeas(0);
        return $ymyisaeksssueeik->ownerDocument;
    }
    
    public static function ygmcsmegcysyeoss($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto agakiqgiuymqowkc;
        qeoumcqaaaecsace:
        $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
        goto kykugggwwuqeokou;
        eyooouiwwwumauao:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto aguwgcwgoukkkmio;
        aguwgcwgoukkkmio:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto meiqsogowcogmgco;
        }
        goto imyiqyuaoycegake;
        agakiqgiuymqowkc:
        $gaeqamemwmwsyukm = 0;
        goto eyooouiwwwumauao;
        agwuyeemwsccoagc:
        return $gaeqamemwmwsyukm;
        goto coakmyawmquywmos;
        kykugggwwuqeokou:
        meiqsogowcogmgco:
        goto agwuyeemwsccoagc;
        imyiqyuaoycegake:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto qeoumcqaaaecsace;
        coakmyawmquywmos:
    }
    
    private static function _removeNode(DOMNode $ymyisaeksssueeik)
    {
        $ymyisaeksssueeik->parentNode->uwqgywaceaaymckg($ymyisaeksssueeik);
    }
    
    public static function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto kwcsomkougiwgaco;
        iwcmsykogssougge:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto oqiciswgoamuceqq;
        kwcsomkougiwgaco:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gkcycgsoawqoyesg;
        eioiqwykkuguaygs:
        ygyoayucuigaoacw:
        goto egisiwqggoqcgeum;
        gkcycgsoawqoyesg:
        if (!$kasgukgceywckyou) {
            goto cegkuogwgoiomikw;
        }
        goto qeauoqcaeymayusu;
        qeauoqcaeymayusu:
        $omwmuycmeqcqokom = null;
        goto iwcmsykogssougge;
        oqiciswgoamuceqq:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto gwiykyqeeowisqqk;
            gwiykyqeeowisqqk:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto ocueeioeueqmisuo;
            }
            goto ggwakcmgwkcsasug;
            ggwakcmgwkcsasug:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto yiayuooesmsmswia;
            yiayuooesmsmswia:
            $omwmuycmeqcqokom->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom);
            goto wyiciayqimeqqomu;
            icimmqwesqkmeuce:
            goto ygyoayucuigaoacw;
            goto wysuusuamkqeyqso;
            wyiciayqimeqqomu:
            $nsmgceoqaqogqmuw = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo();
            goto icimmqwesqkmeuce;
            oogiaiuaumioummk:
            cukksseqkekyucye:
            goto omiqqwiemqykocci;
            wysuusuamkqeyqso:
            ocueeioeueqmisuo:
            goto oogiaiuaumioummk;
            omiqqwiemqykocci:
        }
        goto eioiqwykkuguaygs;
        egisiwqggoqcgeum:
        cegkuogwgoiomikw:
        goto qymucyymugqaaoyi;
        qymucyymugqaaoyi:
        return $nsmgceoqaqogqmuw;
        goto wcyauuwqsicgkomk;
        wcyauuwqsicgkomk:
    }
    
    private static function _getHtml($gykwsaeqegqowywy, $ggauoeuaesiymgee = '')
    {
        goto ewceaieowsgamkyi;
        ykssqiacqucsmmac:
        return $nsmgceoqaqogqmuw;
        goto sueokeomisikqomo;
        ceaewumsyymakaoc:
        if (is_string($nsmgceoqaqogqmuw)) {
            goto qquecwewqeeqyysw;
        }
        goto qqcoeqwimyugqwuc;
        ewceaieowsgamkyi:
        try {
            goto uiewawqqakquwmsq;
            egocwogikoqicuyo:
            if (is_string($gykwsaeqegqowywy)) {
                goto uememeasawuoseqy;
            }
            goto csguigwqeomsyyqw;
            scmgoisaawgacqyu:
            kkucqmyecgwmioei:
            goto guwuqywoqwigamaw;
            umgmgswkigyyweke:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->skkueuquuqweeyqo();
            goto aiyeuqqmcksqsyeq;
            umgcmywyqkwsmsku:
            uememeasawuoseqy:
            goto ocqmicyceamumeia;
            guwuqywoqwigamaw:
            if ($kkkqocwqmaokqcmc) {
                goto yomgkcycysceyagw;
            }
            goto iwcaywweqcgmemko;
            uiewawqqakquwmsq:
            $ikoqkmiqkckowcgg = "\74\41\104\x4f\103\124\x59\x50\x45\x20\x68\x74\x6d\154\76";
            goto ugksoyaaemqyoywa;
            muwaaaqcuwaeoakw:
            $nsmgceoqaqogqmuw = preg_replace(["\x2f\x28\x3c\x29\50\x68\145\141\144\51\50\x5b\136\76\x5d\52\77\x29\50\134\x2f\77\x5c\x73\52\76\51\174\x3c\134\x2f\150\x65\141\x64\x3e\57", "\57\x28\74\51\x28\142\x6f\144\171\x29\50\x5b\136\76\x5d\x2a\x3f\x29\50\x5c\x2f\x3f\x5c\x73\x2a\76\x29\174\x3c\x5c\x2f\x62\x6f\144\x79\x3e\x2f", "\x2f\x28\160\x61\162\x65\156\x74\x3d\42\51\x28\x5b\x61\55\172\101\55\x5a\60\x2d\x39\72\73\x5c\x2e\x5c\163\134\x28\x5c\x29\x5c\x2d\x5c\x2c\x5d\52\x29\50\x22\51\x2f"], '', $nsmgceoqaqogqmuw);
            goto uwawwskgqkieusog;
            csguigwqeomsyyqw:
            throw new InvalidArgumentException();
            goto eqmmegqmukwekkkk;
            ymessmmcgesuuyys:
            $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw;
            goto ggmmkmasyqcugkkm;
            soasesuoocikiquy:
            wuegeyoegwoqcumy:
            goto okuuaqumeeamcgiw;
            wimkgcmkgcaewcwy:
            if ($gykwsaeqegqowywy instanceof DOMDocument) {
                goto wcwwkcwqkicykkmi;
            }
            goto egocwogikoqicuyo;
            ugksoyaaemqyoywa:
            $kkkqocwqmaokqcmc = strpos(strtolower($ggauoeuaesiymgee), strtolower($ikoqkmiqkckowcgg)) !== false;
            goto migcqoeeeukcyciu;
            iwcaywweqcgmemko:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee);
            goto muwaaaqcuwaeoakw;
            uwawwskgqkieusog:
            goto agisoqkoyekmsyga;
            goto coiqsauaqkqykkus;
            migcqoeeeukcyciu:
            if ($gykwsaeqegqowywy instanceof Crawler) {
                goto kkucqmyecgwmioei;
            }
            goto wimkgcmkgcaewcwy;
            mimysauwikioomiy:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->yqwwccackoayicyy();
            goto ymessmmcgesuuyys;
            aiyeuqqmcksqsyeq:
            goto wuegeyoegwoqcumy;
            goto umgcmywyqkwsmsku;
            oukysgqmgiumaasc:
            wcwwkcwqkicykkmi:
            goto umgmgswkigyyweke;
            eqmmegqmukwekkkk:
            goto wuegeyoegwoqcumy;
            goto scmgoisaawgacqyu;
            ggmmkmasyqcugkkm:
            agisoqkoyekmsyga:
            goto smikqieaosiykeii;
            ocqmicyceamumeia:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy;
            goto soasesuoocikiquy;
            smikqieaosiykeii:
            goto wuegeyoegwoqcumy;
            goto oukysgqmgiumaasc;
            coiqsauaqkqykkus:
            yomgkcycysceyagw:
            goto mimysauwikioomiy;
            okuuaqumeeamcgiw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        }
        goto ceaewumsyymakaoc;
        qqcoeqwimyugqwuc:
        $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        goto euycuguygmweyiwm;
        euycuguygmweyiwm:
        qquecwewqeeqyysw:
        goto ykssqiacqucsmmac;
        sueokeomisikqomo:
    }
    
    public static function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::UPDATE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto kmqagkiwcsuimayg;
        ceyeeieiggoamgwe:
        return $siquossayskcwkea;
        goto qwsqoioiwieqgeee;
        uquqecagkoyomiiy:
        $siquossayskcwkea = [];
        goto csgowsgmcyswmiec;
        gigkawsyquoowcms:
        mggckwqcieykwima:
        goto uckiysiyuksyuaoa;
        kmqagkiwcsuimayg:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto uquqecagkoyomiiy;
        goiiekmeukcsamca:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto icqaoiyumasyygik;
            icqaoiyumasyygik:
            $siquossayskcwkea = self::wuuawmeqqyyyemsw($ymyisaeksssueeik);
            goto eiaqawokkeocqqsk;
            awmwcaycosymoesq:
            goto mggckwqcieykwima;
            goto icoacuwgkgqykgee;
            icoacuwgkgqykgee:
            cckmokqegquyoaoy:
            goto equcgweimiaqsysk;
            eiaqawokkeocqqsk:
            if (!$siquossayskcwkea) {
                goto cckmokqegquyoaoy;
            }
            goto awmwcaycosymoesq;
            equcgweimiaqsysk:
            gygmcmiciswgeswm:
            goto qoimoeswgougaeoa;
            qoimoeswgougaeoa:
        }
        goto gigkawsyquoowcms;
        csgowsgmcyswmiec:
        if (!$kasgukgceywckyou) {
            goto wsqkqmcuoauyescs;
        }
        goto ugecckaqeasoimos;
        uckiysiyuksyuaoa:
        wsqkqmcuoauyescs:
        goto ceyeeieiggoamgwe;
        ugecckaqeasoimos:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto goiiekmeukcsamca;
        qwsqoioiwieqgeee:
    }
    
    public static function wuuawmeqqyyyemsw($ymyisaeksssueeik)
    {
        goto ggcaqksgsoeecwak;
        mmmccuoeoeuskisk:
        foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
            $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue;
            okwouciqeqeuogos:
        }
        goto ikmqwkwwskokemqy;
        ggcaqksgsoeecwak:
        $siquossayskcwkea = [];
        goto eugiyageaomiuoki;
        eugiyageaomiuoki:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto qeimwiyggaoimmoq;
        }
        goto mmmccuoeoeuskisk;
        kakskegscmoqcksc:
        return $siquossayskcwkea;
        goto syweoqsuaauksacw;
        ikmqwkwwskokemqy:
        ammmoycqyaqeqiww:
        goto gumkwiqcaqusgwqm;
        gumkwiqcaqusgwqm:
        qeimwiyggaoimmoq:
        goto kakskegscmoqcksc;
        syweoqsuaauksacw:
    }
    
    public static function wugqmqwisygwoeas($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto qeqagimacwmgmqiq;
        qeqagimacwmgmqiq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ekukcomgoyeiuici;
        kqmgqywmgomwmokg:
        return $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto yiomcwmuukooycqq;
        ekukcomgoyeiuici:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto kqmgqywmgomwmokg;
        yiomcwmuukooycqq:
    }
    
    public static function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto iqwqucswgosmiwyy;
        ckiswiiwkuugeogg:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto esmaiecuukakamog;
        beowceiucukcwego:
        if (!$kasgukgceywckyou) {
            goto iiyamiqswaymisue;
        }
        goto mymcocumieiauquq;
        mymcocumieiauquq:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) {
            goto qeaeawocamciyiyk;
            sekgqycaaucagggo:
            wykieskeigmammue:
            goto woqoqsqomgswqicc;
            yyakcqyqkuuokgqw:
            foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) {
                goto iaewimwissuueacw;
                kseweksyciigumec:
                yiqweuusyaikwqgg:
                goto keegiisaqayqmogu;
                iyocukugwkwoosqy:
                goekuagoayyskiio:
                goto kseweksyciigumec;
                okqoikkyquugiuia:
                gamiacsewcmmiece:
                goto wouesssgyqywasom;
                cwwguccuiymmeosu:
                ciwweeyeeieqgowe:
                goto kuywseoceqkawokq;
                uimeimmscccaqukm:
                foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) {
                    $uuswugicgoqcyiiy->cgeyeoimiuyogose($uumwowmewaqyggce->ownerDocument->gqskweuukuceuaoq($wcgsoqmmciswkmiq, true));
                    yoygkuwyqmgaqewi:
                }
                goto escwyiwieqcweggy;
                gcwimimmgaoueegm:
                foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) {
                    $okcscwesammossuq[] = $wcgsoqmmciswkmiq;
                    oiymkikesysgoyma:
                }
                goto okqoikkyquugiuia;
                iaewimwissuueacw:
                if (!$uumwowmewaqyggce instanceof DOMNode) {
                    goto goekuagoayyskiio;
                }
                goto qggomaqouiuasaum;
                ikiooiowwwwaygwi:
                foreach ($uumwowmewaqyggce->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto iwaqiakswyiuyyao;
                    sukokqcaoygeisos:
                    $uuswugicgoqcyiiy->cmgoqeksagmigwmg($qmgyyqwkskaiwcqg, $giueyucwwwwiooim);
                    goto emkcaamgumgwwyem;
                    iwaqiakswyiuyyao:
                    $qmgyyqwkskaiwcqg = $sicussmmuqmeqygw->nodeName;
                    goto mimseykuewemegow;
                    emkcaamgumgwwyem:
                    suogukqqcuaecgmg:
                    goto eoeuieksgoyqcgsu;
                    mimseykuewemegow:
                    $giueyucwwwwiooim = $sicussmmuqmeqygw->nodeValue;
                    goto sukokqcaoygeisos;
                    eoeuieksgoyqcgsu:
                }
                goto cwwguccuiymmeosu;
                wouesssgyqywasom:
                $uuswugicgoqcyiiy = $uumwowmewaqyggce->ownerDocument->auokmyiaciikcekk($ymqmyyeuycgmigyo);
                goto uimeimmscccaqukm;
                qggomaqouiuasaum:
                $okcscwesammossuq = [];
                goto gcwimimmgaoueegm;
                kuywseoceqkawokq:
                $uumwowmewaqyggce->parentNode->caqmeawgoiceoymu($uuswugicgoqcyiiy, $uumwowmewaqyggce);
                goto iyocukugwkwoosqy;
                escwyiwieqcweggy:
                mosmyseyaemqewwk:
                goto ikiooiowwwwaygwi;
                keegiisaqayqmogu:
            }
            goto ewouumyoyasgkgig;
            qeaeawocamciyiyk:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto yyakcqyqkuuokgqw;
            ewouumyoyasgkgig:
            aiewsymeiqiakqqs:
            goto sekgqycaaucagggo;
            woqoqsqomgswqicc:
        }
        goto muqkgsmqakgwkaym;
        muqkgsmqakgwkaym:
        saqqooggaykweqce:
        goto ckiswiiwkuugeogg;
        keowaakoqimieymo:
        return $nsmgceoqaqogqmuw;
        goto ywuqguicqikeqiog;
        esmaiecuukakamog:
        iiyamiqswaymisue:
        goto keowaakoqimieymo;
        iqwqucswgosmiwyy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto beowceiucukcwego;
        ywuqguicqikeqiog:
    }
    
    public static function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto rgemwoeoywekwuww;
        kwqqeiiqgiaoquag:
        egcucgemmkamyiuu:
        goto gkuukqkuaayagqwe;
        iqeqegeqgsmmaeay:
        goto egcucgemmkamyiuu;
        goto qoeoouiewgwuyayg;
        wayaguckegemumuy:
        scequiwqaummymka:
        goto kkgkywswiimccaog;
        kkgkywswiimccaog:
        return $nsmgceoqaqogqmuw;
        goto awukmeygqcaeyaeg;
        qikaumyuwkusqmcy:
        if (is_array($sgksuwkwyimqgaii)) {
            goto sgwmqsowsekomcso;
        }
        goto qcewkmiokmwaakyo;
        qoeoouiewgwuyayg:
        sgwmqsowsekomcso:
        goto iqwsgmwqeskwqckm;
        yqisiuioymswaciy:
        uoygcyuomiyquumm:
        goto kwqqeiiqgiaoquag;
        gkuukqkuaayagqwe:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto wayaguckegemumuy;
        cegaaikcsiwyswca:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto scequiwqaummymka;
        }
        goto qikaumyuwkusqmcy;
        qcewkmiokmwaakyo:
        self::_removeElement($kasgukgceywckyou, $sgksuwkwyimqgaii);
        goto iqeqegeqgsmmaeay;
        iqwsgmwqeskwqckm:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) {
            self::_removeElement($kasgukgceywckyou, $yuumukkaswwoywya);
            uasacoumuyqgeuqy:
        }
        goto yqisiuioymswaciy;
        rgemwoeoywekwuww:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto cegaaikcsiwyswca;
        awukmeygqcaeyaeg:
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
        goto akyieugiomeuaqsk;
        sqowskoquogmiiwg:
        cqcqsoqaumyuyemo:
        goto wcqkwcqqqsygagsg;
        qgyeaeoyqscmuqqy:
        return $nsmgceoqaqogqmuw;
        goto cwaukuukmsqkqqoc;
        owuommygccmkuues:
        mokaauiekiycqsii:
        goto qgyeaeoyqscmuqqy;
        akiuccuwusyiywaa:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto qykaososcekymqeo;
            qykaososcekymqeo:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto iqewyeqegsuemqgc;
            gcqqqceoakukiuim:
            csoeiakqgmuockgk:
            goto kgmmesqykuckqgqg;
            iqewyeqegsuemqgc:
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                goto isuyseouiawyweke;
                aowacowggwuykewe:
                cyiwuweakowgmamu:
                goto cgcyciqqcqiimwse;
                ecmowkisqwcgyykc:
                $msqkueqksqwmskak = array_keys($siquossayskcwkea);
                goto ygcocguewqswqcsa;
                isuyseouiawyweke:
                if (!$ymyisaeksssueeik instanceof DOMNode) {
                    goto cyiwuweakowgmamu;
                }
                goto ecmowkisqwcgyykc;
                musoessicqgioaci:
                qokcmisciyieiwyi:
                goto aowacowggwuykewe;
                ygcocguewqswqcsa:
                foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto equeyqisaekucoyq;
                    cqkeucwwyywigyqk:
                    ayucyiqeeeumawgo:
                    goto yiqwwseykuimmeuc;
                    equeyqisaekucoyq:
                    $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName;
                    goto wymogskocqsmiimw;
                    wwcwmiwqwiygmyka:
                    $ymyisaeksssueeik->cmgoqeksagmigwmg($siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue);
                    goto cqkeucwwyywigyqk;
                    yiqwwseykuimmeuc:
                    smuuwogesuiogomg:
                    goto meiiqwkkeguigquc;
                    wymogskocqsmiimw:
                    if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak)) {
                        goto ayucyiqeeeumawgo;
                    }
                    goto wwcwmiwqwiygmyka;
                    meiiqwkkeguigquc:
                }
                goto musoessicqgioaci;
                cgcyciqqcqiimwse:
                aqukigyaugymgocm:
                goto csymkqmseeouiacg;
                csymkqmseeouiacg:
            }
            goto jiykeiuymeoowsma;
            jiykeiuymeoowsma:
            ewuciaosgqwwagsc:
            goto gcqqqceoakukiuim;
            kgmmesqykuckqgqg:
        }
        goto sqowskoquogmiiwg;
        akyieugiomeuaqsk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto yukykeccsygagcsm;
        yukykeccsygagcsm:
        if (!$kasgukgceywckyou) {
            goto mokaauiekiycqsii;
        }
        goto akiuccuwusyiywaa;
        wcqkwcqqqsygagsg:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto owuommygccmkuues;
        cwaukuukmsqkqqoc:
    }
    
    public static function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _find(?Crawler $kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto kcsqyquoyoyssiik;
        ymmgkaaokqasmaum:
        return $kasgukgceywckyou->filter($yuumukkaswwoywya);
        goto yscsaueouasieayc;
        smsgceqwueqiwmyi:
        return $kasgukgceywckyou;
        goto ywoisggyqsommewa;
        yscsaueouasieayc:
        mosmyyysosawmqku:
        goto smsgceqwueqiwmyi;
        kcsqyquoyoyssiik:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto mosmyyysosawmqku;
        }
        goto ymmgkaaokqasmaum;
        ywoisggyqsommewa:
    }
    
    private static function _removeElement($kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto uqwmcimomeomgqgi;
        eesgqauaaeqiycee:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            self::_removeNode($ymyisaeksssueeik);
            wikugsiimiguuwuw:
        }
        goto qmsikcqgaumiyego;
        uqwmcimomeomgqgi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto eesgqauaaeqiycee;
        qmsikcqgaumiyego:
        kkewwsgkgooicawy:
        goto cckseausycyccake;
        cckseausycyccake:
    }
    
    public static function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee)
    {
        goto gmmwukkcaouckswu;
        kyiikasuaqaeigae:
        return $eqgoocgaqwqcimie;
        goto ocgiuagqmmqakago;
        gmmwukkcaouckswu:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qmuqcuumuagkyggg;
        kaooossoiysywsuk:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto sqqqwsqwmossuima;
        qmuqcuumuagkyggg:
        $eqgoocgaqwqcimie = '';
        goto eqiesmsygmemseog;
        sqqqwsqwmossuima:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto cceewgewommawcii;
            cceewgewommawcii:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto wcqggkigoogqmmqk;
            }
            goto wmcsksugskiskyyy;
            imcqqemiwqqegsmk:
            wcqggkigoogqmmqk:
            goto mcygayiqasgoyqss;
            cuqcgywmuqoakieq:
            oucwkycugsesqoas:
            goto imcqqemiwqqegsmk;
            yeqgqmywegcwsiow:
            if (!$eqgoocgaqwqcimie) {
                goto oucwkycugsesqoas;
            }
            goto uaaigcisokikuqgu;
            wmcsksugskiskyyy:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee);
            goto yeqgqmywegcwsiow;
            uaaigcisokikuqgu:
            goto migkmccwwikseoos;
            goto cuqcgywmuqoakieq;
            mcygayiqasgoyqss:
            mquaoucacecoymqu:
            goto iycosyeceoegukgg;
            iycosyeceoegukgg:
        }
        goto siwscqyokoekmooc;
        eqiesmsygmemseog:
        if (!$kasgukgceywckyou) {
            goto dsqeweimquoouiyo;
        }
        goto kaooossoiysywsuk;
        ggqwikwoioeuqsam:
        dsqeweimquoouiyo:
        goto kyiikasuaqaeigae;
        siwscqyokoekmooc:
        migkmccwwikseoos:
        goto ggqwikwoioeuqsam;
        ocgiuagqmmqakago:
    }
    
    public static function goqgkgckyagueiso($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_WITH_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _createElement(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw)
    {
        goto yeewwwkywuowoscq;
        yeewwwkywuowoscq:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto kaccyaysqwkaoyka;
        kaccyaysqwkaoyka:
        foreach ($qeaoumiemyikogys->auamuceiowkuacoq("\x62\x6f\144\x79")->item(0)->childNodes as $ymyisaeksssueeik) {
            $omwmuycmeqcqokom->cgeyeoimiuyogose($omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true));
            cqwmseemsiiaqgoo:
        }
        goto ceomusueeoaqyume;
        ceomusueeoaqyume:
        aocyeyuakyusikwq:
        goto gsegcywyaasmwyko;
        gsegcywyaasmwyko:
    }
    
    private static function _createElementFromHtml(Crawler $kasgukgceywckyou, $nsmgceoqaqogqmuw)
    {
        goto meeiyyaqksugkeai;
        meeiyyaqksugkeai:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto teuusocwmquakkyc;
        teuusocwmquakkyc:
        $kgcekiucekagcgai = self::igyokgqyiouieioo($kasgukgceywckyou);
        goto ykemkuywkaowmyuc;
        ykemkuywkaowmyuc:
        return $kgcekiucekagcgai->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
        goto skmkmwkyeuowoaqa;
        skmkmwkyeuowoaqa:
    }
    
    public static function ksgyqykcguougeue(DOMNode $ymyisaeksssueeik, $nsmgceoqaqogqmuw)
    {
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        return $ymyisaeksssueeik->ownerDocument->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
    }
    
    private static function _appendHTML($omwmuycmeqcqokom, $nsmgceoqaqogqmuw, $qmeuaeiseuacgiqc = true)
    {
        goto wqemgeeosmaqkuye;
        iyemcyamksqakiiw:
        if ($qmeuaeiseuacgiqc) {
            goto cyuwoeiiwcsqukku;
        }
        goto yceeiagmcyqcayes;
        haiiaygcugigaggi:
        if ($nsmgceoqaqogqmuw instanceof DOMNode) {
            goto okeqecawkekacsqc;
        }
        goto eeyoaucukkaesqmk;
        wqemgeeosmaqkuye:
        if (!$omwmuycmeqcqokom instanceof DOMNode) {
            goto mgkokmqyecocwwgo;
        }
        goto haiiaygcugigaggi;
        yceeiagmcyqcayes:
        $omwmuycmeqcqokom->kqgwgkuykuumwcgw($nsmgceoqaqogqmuw, $omwmuycmeqcqokom->firstChild);
        goto uyeimkwsuoqgewgy;
        cicooguqkeoeyges:
        pouyossuowuwcsma:
        goto gwuisuuwecwcaaik;
        gwuisuuwecwcaaik:
        smqsooyiiesuyoos:
        goto ugmqiuwksqaqywco;
        ugmqiuwksqaqywco:
        mgkokmqyecocwwgo:
        goto ikiyguwaiacioake;
        coscuikaoymwwmii:
        goto smqsooyiiesuyoos;
        goto mukeowkkueukysww;
        yumegkesogwyweiq:
        msiuouqukawgegwo:
        goto coscuikaoymwwmii;
        mukeowkkueukysww:
        okeqecawkekacsqc:
        goto iyemcyamksqakiiw;
        ymkakuuweqoysagc:
        $omwmuycmeqcqokom->cgeyeoimiuyogose($nsmgceoqaqogqmuw);
        goto cicooguqkeoeyges;
        asysseskuwwesiqc:
        cyuwoeiiwcsqukku:
        goto ymkakuuweqoysagc;
        xawawcwogwekqmqc:
        foreach (self::_find($kasgukgceywckyou, "\x62\157\144\171") as $ymyisaeksssueeik) {
            goto agkwamguicmweoom;
            auqwmowcyqaioyse:
            kgaciayyiuykqyko:
            goto caqmiuioaesgyaug;
            wymyuyaiikioyeao:
            self::_appendHTML($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc);
            goto auqwmowcyqaioyse;
            agkwamguicmweoom:
            $ymyisaeksssueeik = $omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true);
            goto wymyuyaiikioyeao;
            caqmiuioaesgyaug:
        }
        goto yumegkesogwyweiq;
        uyeimkwsuoqgewgy:
        goto pouyossuowuwcsma;
        goto asysseskuwwesiqc;
        eeyoaucukkaesqmk:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto xawawcwogwekqmqc;
        ikiyguwaiacioake:
    }
    
    public static function wesimowqwekiqiow($nsmgceoqaqogqmuw, $eeqsmkqmsowmicwi = "\x73\x74\x79\x6c\x65", $cussukyecoaeayqk = true)
    {
        goto siyawoacgucmaoky;
        yagiokukkmimaoae:
        $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc;
        goto meomioiwwciyyyue;
        kywicmoksqkayose:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, "\x5b\163\164\x79\x6c\x65\x5d");
        goto imoyquwyuicwioom;
        siyawoacgucmaoky:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ykuiuuqwkwwgeqko;
        qiomiuawymsqimgk:
        wgocyuiekyasmquq:
        goto oaosaqoqiiciwgwg;
        imoyquwyuicwioom:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ugogcmgasecqmaqo;
            qqqyksacwuumcmia:
            $egkyssmuqcwaciya .= "\40{$omasqoksqewuwwkq}";
            goto misgeimskqgmumga;
            ugogcmgasecqmaqo:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto kusuckgswgkceusi;
            }
            goto mmyqweeceiaeqqus;
            ugcgmougmeoayiea:
            if (!$eqgoocgaqwqcimie) {
                goto memocaoaimgeuimm;
            }
            goto agaaausyuimymgmm;
            yayuqeqkcqmiiiyw:
            $omasqoksqewuwwkq = ManipulateString::uniqid(5);
            goto kaqeqoaoqacmssmg;
            cmiqweaugcqmwoiq:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($yuumukkaswwoywya);
            goto ugcgmougmeoayiea;
            kagiaysuecmceegy:
            kusuckgswgkceusi:
            goto gisygciesowawkqy;
            agaaausyuimymgmm:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($yuumukkaswwoywya);
            goto yayuqeqkcqmiiiyw;
            ywkkyykyayusymai:
            $eqgoocgaqwqcimie = str_replace("\x21\x69\x6d\160\x6f\162\164\141\x6e\x74", '', $eqgoocgaqwqcimie);
            goto uuawmiyqysumgaqy;
            iqeksucuwucgsuaq:
            memocaoaimgeuimm:
            goto kagiaysuecmceegy;
            qoaiwgymwioiissy:
            $egkyssmuqcwaciya = $ymyisaeksssueeik->waecsyqmwascmqoa("\143\x6c\x61\x73\163");
            goto qqqyksacwuumcmia;
            mmyqweeceiaeqqus:
            $yuumukkaswwoywya = "\163\164\x79\x6c\145";
            goto cmiqweaugcqmwoiq;
            uuawmiyqysumgaqy:
            aokkmsyimyouoeim:
            goto uyusyuseakqmycim;
            sccqusyuqeiugcem:
            $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc;
            goto qoaiwgymwioiissy;
            kaqeqoaoqacmssmg:
            if ($cussukyecoaeayqk) {
                goto aokkmsyimyouoeim;
            }
            goto ywkkyykyayusymai;
            misgeimskqgmumga:
            $ymyisaeksssueeik->cmgoqeksagmigwmg("\143\154\141\163\163", $egkyssmuqcwaciya);
            goto iqeksucuwucgsuaq;
            gisygciesowawkqy:
            cemammoacacweske:
            goto gccikccauwosemee;
            uyusyuseakqmycim:
            $acqqmqmcquukaqsc = "\x2e{$omasqoksqewuwwkq}\173{$eqgoocgaqwqcimie}\175";
            goto sccqusyuqeiugcem;
            gccikccauwosemee:
        }
        goto yauausaeuasqsgeu;
        wgyukgmocmigoeuo:
        cowscsiukyiwymqi:
        goto yagiokukkmimaoae;
        meomioiwwciyyyue:
        emsquuamiesiqseq:
        goto euguuygaocimsesi;
        ucwkqqscieaqmkms:
        if (!$kswaimykcacqyaay instanceof DOMNode) {
            goto comcmyekisewieyc;
        }
        goto uuooemyeyeuswqea;
        euguuygaocimsesi:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto qiomiuawymsqimgk;
        aeawksowymsuogeu:
        self::pmouaioykaoceyag($kasgukgceywckyou, "\150\x65\x61\144", $ewgwqamkygiqaawc);
        goto wgyakmueooeqsyqc;
        uuooemyeyeuswqea:
        $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent;
        goto kuwieemysouaokqs;
        yauausaeuasqsgeu:
        qqaoqesyysccooug:
        goto wiyauoggygqoymwu;
        kuwieemysouaokqs:
        comcmyekisewieyc:
        goto kywicmoksqkayose;
        ymgkgeqimsusocoy:
        $kswaimykcacqyaay = self::_find($kasgukgceywckyou, "\150\x65\x61\x64\x20\76\x20{$eeqsmkqmsowmicwi}")->wugqmqwisygwoeas(0);
        goto qeywecigqgseiogw;
        wgyakmueooeqsyqc:
        goto emsquuamiesiqseq;
        goto wgyukgmocmigoeuo;
        qeywecigqgseiogw:
        $ewgwqamkygiqaawc = '';
        goto ucwkqqscieaqmkms;
        wiyauoggygqoymwu:
        if ($kswaimykcacqyaay instanceof DOMElement) {
            goto cowscsiukyiwymqi;
        }
        goto aeawksowymsuogeu;
        oaosaqoqiiciwgwg:
        return $nsmgceoqaqogqmuw;
        goto kcaswmekegcguiwu;
        ykuiuuqwkwwgeqko:
        if (!$kasgukgceywckyou) {
            goto wgocyuiekyasmquq;
        }
        goto ymgkgeqimsusocoy;
        kcaswmekegcguiwu:
    }
    
    public static function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, $egomoiciasmiesww = false)
    {
        goto myyycckqeikqiuqi;
        myyycckqeikqiuqi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ysoesyqiaaugywgi;
        acsgyykcowwkyayy:
        $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc;
        goto wuwggkokqumggyiu;
        ssecwqeouoeamsio:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto msweyewumoisksiy;
        }
        goto uucwuqeucsiykagi;
        ugmowoyeoowiiqie:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto coqewawckmigciso;
        kwaammsskmiamace:
        return $nsmgceoqaqogqmuw;
        goto amacugyqcmgqiaog;
        wuwggkokqumggyiu:
        msweyewumoisksiy:
        goto ugmowoyeoowiiqie;
        ooiockqsscsuqokc:
        yceyawgskeqggcuy:
        goto acsgyykcowwkyayy;
        ueowcqqgaoysmqie:
        $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc;
        goto ooiockqsscsuqokc;
        ysoesyqiaaugywgi:
        if (!$kasgukgceywckyou) {
            goto uyqckmcowkimsmyq;
        }
        goto qmymeeegusssawmu;
        qmymeeegusssawmu:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $yuumukkaswwoywya)->wugqmqwisygwoeas(0);
        goto ssecwqeouoeamsio;
        coqewawckmigciso:
        uyqckmcowkimsmyq:
        goto kwaammsskmiamace;
        uucwuqeucsiykagi:
        if ($egomoiciasmiesww) {
            goto yceyawgskeqggcuy;
        }
        goto ueowcqqgaoysmqie;
        amacugyqcmgqiaog:
    }
    
    public static function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc = true)
    {
        goto gmgkmqouwygkwuua;
        kmkmisyucykygqoc:
        if (!$kasgukgceywckyou) {
            goto kecqwqseaiaomoao;
        }
        goto wccegsoaeisquyeq;
        wccegsoaeisquyeq:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $omwmuycmeqcqokom)->wugqmqwisygwoeas(0);
        goto ieyowiusaeousyse;
        emkuqqeesmiycqqo:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ewyukeoyymaooaqa;
        mksggqikmumuycga:
        return $nsmgceoqaqogqmuw;
        goto ugaoeiuoosyggsmi;
        ieyowiusaeousyse:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto ccssuekkawuwwkyk;
        }
        goto ooueyocsuseuawgc;
        ewyukeoyymaooaqa:
        kecqwqseaiaomoao:
        goto mksggqikmumuycga;
        eoskieimkcimmwio:
        ccssuekkawuwwkyk:
        goto emkuqqeesmiycqqo;
        ooueyocsuseuawgc:
        self::_appendHTML($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc);
        goto eoskieimkcimmwio;
        gmgkmqouwygkwuua:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kmkmisyucykygqoc;
        ugaoeiuoosyggsmi:
    }
    
    public static function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto swiaoqqqyqusscqi;
        mcmmgacykcsowqiw:
        cquumoyicacciqei:
        goto mwimaeocgaqeiukm;
        iigwwyogmwesyoau:
        yoeiuoyekameacwu:
        goto maugkumeqqaoqmkq;
        skqyeawoqyssamii:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto cquumoyicacciqei;
        }
        goto aaccwuemygqmicme;
        qauqcecycoswuoyc:
        wwmggkkyegumakew:
        goto mcmmgacykcsowqiw;
        maugkumeqqaoqmkq:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent;
        goto qauqcecycoswuoyc;
        oyquokessoouwuke:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto mgykueyyyoueykgm;
        gqmgeusocymaikoy:
        goto wwmggkkyegumakew;
        goto iigwwyogmwesyoau;
        cycoyeooqscgugwa:
        gkcsgskucsicakwg:
        goto wumeiwysoiscimiu;
        mwimaeocgaqeiukm:
        gsquqssmimkgcoga:
        goto cycoyeooqscgugwa;
        wumeiwysoiscimiu:
        return $aqykuigiuwmmcieu;
        goto eequmkcwsuakwwmo;
        swiaoqqqyqusscqi:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ioqkkgikqygkemce;
        asoycqscmioaaggw:
        if (!$kasgukgceywckyou) {
            goto gkcsgskucsicakwg;
        }
        goto oyquokessoouwuke;
        aaccwuemygqmicme:
        if ($ewgwqamkygiqaawc) {
            goto yoeiuoyekameacwu;
        }
        goto qsiqckciwyomqwue;
        ioqkkgikqygkemce:
        $aqykuigiuwmmcieu = '';
        goto asoycqscmioaaggw;
        oiksiqocuawwgeek:
        $ymyisaeksssueeik = $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto skqyeawoqyssamii;
        mgykueyyyoueykgm:
        if (!$kwmksuuciqkiymek) {
            goto gsquqssmimkgcoga;
        }
        goto oiksiqocuawwgeek;
        qsiqckciwyomqwue:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
        goto gqmgeusocymaikoy;
        eequmkcwsuakwwmo:
    }
    
    public static function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto mickmqggcqwackce;
        esokuuqukgaiiuao:
        if (!$kasgukgceywckyou) {
            goto gckckwqqgkoyyagq;
        }
        goto ccwaiwmcccmswyau;
        qoiqosqiguawwekg:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto kqawgskqiimioaku;
            uqsmsqoeimicguwe:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto caaqcciyeymoqqmc;
            eaasaucuyacqooey:
            $sogksuscggsicmac[] = $aqykuigiuwmmcieu;
            goto uoqwymoegwoweuyk;
            myusuecogkwoqimq:
            if ($ewgwqamkygiqaawc) {
                goto eeeaumqcsieckaoc;
            }
            goto uqsmsqoeimicguwe;
            uoqwymoegwoweuyk:
            guwmecmmcueokcgu:
            goto mawsiqmcsguuokok;
            kkeakokiekuywmwy:
            eeeaumqcsieckaoc:
            goto gmcsqgoweawewags;
            gmcsqgoweawewags:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->textContent;
            goto mkaoooyookegwgwg;
            mkaoooyookegwgwg:
            suqosyewmcawwouy:
            goto eaasaucuyacqooey;
            kqawgskqiimioaku:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto guwmecmmcueokcgu;
            }
            goto yyukimsicowasyqs;
            caaqcciyeymoqqmc:
            goto suqosyewmcawwouy;
            goto kkeakokiekuywmwy;
            yyukimsicowasyqs:
            self::_removeNode($ymyisaeksssueeik);
            goto myusuecogkwoqimq;
            mawsiqmcsguuokok:
            ksccwuecqkqkawck:
            goto kisaoauaekgkauui;
            kisaoauaekgkauui:
        }
        goto xiwcqyowugqukksy;
        mickmqggcqwackce:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto egcyaksemqaakqgy;
        gyyawusuyeigckys:
        return $sogksuscggsicmac;
        goto iimeieccwuumkgim;
        ccwaiwmcccmswyau:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto qoiqosqiguawwekg;
        xiwcqyowugqukksy:
        mcqkmiukmosqwemy:
        goto sociuiuiwsymiyam;
        egcyaksemqaakqgy:
        $sogksuscggsicmac = [];
        goto esokuuqukgaiiuao;
        sociuiuiwsymiyam:
        gckckwqqgkoyyagq:
        goto gyyawusuyeigckys;
        iimeieccwuumkgim:
    }
    
    public static function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, $ymkomoccmymcoiea = "\163\x74\171\154\x65", $wamcomkuwysqgwgk = "\45\x73\73")
    {
        goto muceomkycemgsccu;
        gyqaqyuewuquqkuy:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto emguyukcyeeuyqyo;
            aucuikgwyisgguye:
            $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\73") . "\x3b";
            goto gwswuqomwckekgum;
            oiakqemessasuyci:
            $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie);
            goto kqakgccawoogkiai;
            eoawcoaayikaiocu:
            if (!($ymkomoccmymcoiea == "\x73\x74\171\154\x65")) {
                goto eesgmkwwiawcskie;
            }
            goto aucuikgwyisgguye;
            mokoeuoicweqwksk:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($ccamueccusigaaio);
            goto kwwwckywsygiwcoc;
            wiyoqoiqsmwuiywa:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($ccamueccusigaaio);
            goto mokoeuoicweqwksk;
            emguyukcyeeuyqyo:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto ycaysuaiikcskakg;
            }
            goto wiyoqoiqsmwuiywa;
            gwswuqomwckekgum:
            eesgmkwwiawcskie:
            goto aqmemoyecceeceuc;
            kwwwckywsygiwcoc:
            if (!$eqgoocgaqwqcimie) {
                goto oyoeowyeooyowomm;
            }
            goto secswciggsguqauw;
            ciiikyqwkwsceouq:
            ouecgmgoaaswqomi:
            goto gmqoaasouciogwkq;
            aqmemoyecceeceuc:
            $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\40{$eqgoocgaqwqcimie}"));
            goto ammsmyuaoogueqog;
            secswciggsguqauw:
            $yeacayasgueouoqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
            goto oigoswgkgwescakq;
            oigoswgkgwescakq:
            if (!$wamcomkuwysqgwgk) {
                goto okkimkuusqsiemkk;
            }
            goto oiakqemessasuyci;
            ammsmyuaoogueqog:
            oyoeowyeooyowomm:
            goto aykiaquyoagykguu;
            kqakgccawoogkiai:
            okkimkuusqsiemkk:
            goto eoawcoaayikaiocu;
            aykiaquyoagykguu:
            ycaysuaiikcskakg:
            goto ciiikyqwkwsceouq;
            gmqoaasouciogwkq:
        }
        goto uqmscgsoqeysooqc;
        awccsuqeikuacioa:
        mykqimauysqiessi:
        goto gyyiagqqegiygkag;
        qsuqueusmkasmeig:
        if (!$kasgukgceywckyou) {
            goto mykqimauysqiessi;
        }
        goto cymoaqswaeycikca;
        gyyiagqqegiygkag:
        return $nsmgceoqaqogqmuw;
        goto kowocmqmoqwacmoa;
        cymoaqswaeycikca:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto gyqaqyuewuquqkuy;
        awgmmoegiwqoswkk:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto awccsuqeikuacioa;
        uqmscgsoqeysooqc:
        fommkikuoyaeskiw:
        goto awgmmoegiwqoswkk;
        muceomkycemgsccu:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qsuqueusmkasmeig;
        kowocmqmoqwacmoa:
    }
    
    public static function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', $uuksaskqamgouosy = true)
    {
        goto woekwasoyuwmqgao;
        scogoqgeeoeqsuku:
        if (!$kasgukgceywckyou) {
            goto qqiqiaqoiesmuokq;
        }
        goto mskguuoycuamgyim;
        isicqmmaqumssuka:
        jggaoyqecgewsysy:
        goto msggcgusisiqukme;
        euguykkkieguasgy:
        return $nsmgceoqaqogqmuw;
        goto wgawmiiocosqkgos;
        woekwasoyuwmqgao:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto scogoqgeeoeqsuku;
        mskguuoycuamgyim:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto aqasuykawsiekssw;
        msggcgusisiqukme:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto sskkmcmqeimgeuwg;
        aqasuykawsiekssw:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto ywmukuyioksqgimq;
            ekesimcsecgcuoms:
            kkoswgsscqsgqmey:
            goto qqmskoaugmqsaaqy;
            ywiwagqgeomcwkss:
            $ymyisaeksssueeik->nodeValue = '';
            goto kaeomaoaieammmca;
            ywmukuyioksqgimq:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto kiieueeyieewgcuu;
            }
            goto cqiagomawawqmcoo;
            gsisioycuuewgmmw:
            kiieueeyieewgcuu:
            goto wcsimwcyyumkyuck;
            cseiiqikiimgcmmy:
            goto cqyommqsimyoioeo;
            goto swqucgmugmekaoqc;
            kaeomaoaieammmca:
            if (!$goiaaeekgeqqmaqo) {
                goto kkoswgsscqsgqmey;
            }
            goto iiumqmaicymgouwy;
            swqucgmugmekaoqc:
            ikwagqguqmqsakug:
            goto ywiwagqgeomcwkss;
            qqmskoaugmqsaaqy:
            cqyommqsimyoioeo:
            goto gsisioycuuewgmmw;
            cqiagomawawqmcoo:
            if ($uuksaskqamgouosy) {
                goto ikwagqguqmqsakug;
            }
            goto eoggqsukkackwoag;
            wcsimwcyyumkyuck:
            acisamqweoscawig:
            goto yoggmucmsyeaseso;
            iiumqmaicymgouwy:
            self::_createElement($ymyisaeksssueeik, $goiaaeekgeqqmaqo);
            goto ekesimcsecgcuoms;
            eoggqsukkackwoag:
            $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo;
            goto cseiiqikiimgcmmy;
            yoggmucmsyeaseso:
        }
        goto isicqmmaqumssuka;
        sskkmcmqeimgeuwg:
        qqiqiaqoiesmuokq:
        goto euguykkkieguasgy;
        wgawmiiocosqkgos:
    }
    
    private static function _updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = self::UPDATE_ACTION)
    {
        goto eaqqweigimyoywwu;
        wqkqggsaacukeimg:
        return $nsmgceoqaqogqmuw;
        goto eqycmciquqaesuyk;
        wokoyuoomwmgwaoo:
        ggayissweeisyaqa:
        goto wqkqggsaacukeimg;
        yooqmugaioweswcs:
        gekaiqysouaoyaci:
        goto iekuaksaiccyckaw;
        ikcokaseywaaekgo:
        if (!$kasgukgceywckyou) {
            goto ggayissweeisyaqa;
        }
        goto ukqewcigokikemua;
        iekuaksaiccyckaw:
        return $kasgukgceywckyou;
        goto wokoyuoomwmgwaoo;
        ukqewcigokikemua:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto qkmswkmokigugkaw;
            csaqukkmgesgewkg:
            umeomugcsyuukqsu:
            goto makegskyquimcacu;
            qaemeaiiueckkouq:
            foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) {
                goto gcsacemoyykguega;
                wakqmmwcieuuiygm:
                cywmacoauegeacwk:
                goto ywwcwwqawggauaso;
                aoqcimcikseuucoy:
                foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                    goto ukmuimokewiqqmsy;
                    iqeeygqsccygwqas:
                    $momcykaoccoymeig++;
                    goto cyugiqiiaekakuec;
                    ukmuimokewiqqmsy:
                    self::_updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig);
                    goto iqeeygqsccygwqas;
                    cyugiqiiaekakuec:
                    ecwcasmmiooagwaq:
                    goto acqwiccgsscgikyo;
                    acqwiccgsscgikyo:
                }
                goto okwyiswgsyymgius;
                okwyiswgsyymgius:
                kgamqamcoaaqmgeg:
                goto wakqmmwcieuuiygm;
                muoiuweiesyukmgu:
                $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
                goto aoqcimcikseuucoy;
                gcsacemoyykguega:
                $momcykaoccoymeig = 0;
                goto muoiuweiesyukmgu;
                ywwcwwqawggauaso:
            }
            goto cgwiwgeekamooamc;
            cgwiwgeekamooamc:
            mameecqeeiakmiks:
            goto eygucgqouoacesei;
            eygucgqouoacesei:
            ekksaoygcqikaque:
            goto csaqukkmgesgewkg;
            iykugimymaauokkm:
            if (!(isset($siquossayskcwkea["\x70\x61\x72\145\156\164"]) && $siquossayskcwkea["\x70\x61\162\x65\x6e\x74"])) {
                goto swyakyokwmomoqow;
            }
            goto suigamecaieiiuka;
            cymysimiiemeqcmu:
            if (!$kwmksuuciqkiymek) {
                goto ekksaoygcqikaque;
            }
            goto qaemeaiiueckkouq;
            suigamecaieiiuka:
            try {
                $kwmksuuciqkiymek = $kwmksuuciqkiymek->eyagosskwwmgwmog();
            } catch (Exception $wgaoewqkwgomoaai) {
                goto umeomugcsyuukqsu;
            }
            goto cwkeqwwaageaiecm;
            cwkeqwwaageaiecm:
            swyakyokwmomoqow:
            goto cymysimiiemeqcmu;
            qkmswkmokigugkaw:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto iykugimymaauokkm;
            makegskyquimcacu:
        }
        goto yooqmugaioweswcs;
        eaqqweigimyoywwu:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ikcokaseywaaekgo;
        eqycmciquqaesuyk:
    }
    
    private static function _updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig)
    {
        goto owaccsusoeoacmwc;
        eaaicwyuwkogsies:
        switch ($aiamqeawckcsuaou) {
            case self::REMOVE_ACTION:
                goto ieqqyaeksqicikwe;
                makmsuccimeksawa:
                $cusosqmyoqiykqgw = implode("\x20", $ymyqweogikqywwqc);
                goto yggsmyqseogscusc;
                gumuwayiukgmeusw:
                $cusosqmyoqiykqgw = null;
                goto wiikemmmqckmwcma;
                qaugewusyagkoksg:
                $uusmaiomayssaecw = array_search($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto cocouuwqwiaiyemu;
                yggsmyqseogscusc:
                wymeuweieiomiuqw:
                goto eaucsgyigimwwuqg;
                kgmumymgeqemogoy:
                qogiwqwqsaesiskg:
                goto gcseqcagkcsmgokw;
                msukmuseccwicmwg:
                unset($ymyqweogikqywwqc[$uusmaiomayssaecw]);
                goto quyaggaoeakmcqmo;
                gcseqcagkcsmgokw:
                goto uqmsuuwuuqcaqasy;
                goto gcymuqcsmwiywkum;
                eaucsgyigimwwuqg:
                if ($cusosqmyoqiykqgw) {
                    goto qogiwqwqsaesiskg;
                }
                goto qkiiwqyuiuqwqosc;
                cocouuwqwiaiyemu:
                if (!(false !== $uusmaiomayssaecw)) {
                    goto yyiemgyowokesgww;
                }
                goto msukmuseccwicmwg;
                wiikemmmqckmwcma:
                uqmsuuwuuqcaqasy:
                goto weqgaswqweauwwyc;
                ieqqyaeksqicikwe:
                if (is_numeric($ymkomoccmymcoiea)) {
                    goto qaciuiaecgowsukq;
                }
                goto cqwsaoiqmiewkigq;
                qkiiwqyuiuqwqosc:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto kgmumymgeqemogoy;
                owkqqqyysqyaykow:
                if (!is_array($ymyqweogikqywwqc)) {
                    goto wymeuweieiomiuqw;
                }
                goto makmsuccimeksawa;
                quyaggaoeakmcqmo:
                yyiemgyowokesgww:
                goto owkqqqyysqyaykow;
                weqgaswqweauwwyc:
                goto aakgkaqakoqgcsci;
                goto ecayeacokkmyckmk;
                iywkomquqqosokyq:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($eqgoocgaqwqcimie);
                goto gumuwayiukgmeusw;
                gcymuqcsmwiywkum:
                qaciuiaecgowsukq:
                goto iywkomquqqosokyq;
                cqwsaoiqmiewkigq:
                $ymyqweogikqywwqc = explode("\x20", $ymyqweogikqywwqc);
                goto qaugewusyagkoksg;
                ecayeacokkmyckmk:
            case self::RENAME_ACTION:
                goto ssgiyqwsgyyogmqm;
                gcmiguwuukeawaii:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto wqmuwigkssqkoweq;
                ssgiyqwsgyyogmqm:
                $cusosqmyoqiykqgw = null;
                goto wymkemmkwawacmys;
                wqmuwigkssqkoweq:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto qugokekqyguksees;
                wymkemmkwawacmys:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto yakwwcwqaokocwcy;
                }
                goto gcmiguwuukeawaii;
                emsewgkwsmcgkoyy:
                goto aakgkaqakoqgcsci;
                goto wwsamammkqcsocqc;
                qugokekqyguksees:
                yakwwcwqaokocwcy:
                goto emsewgkwsmcgkoyy;
                wwsamammkqcsocqc:
            case self::REPLACE_ACTION:
            case self::UPDATE_ACTION:
                goto ysowsoswoigywasy;
                ugakmuywaoowqymc:
                $ymyqweogikqywwqc = null;
                goto soyyokqommwwoyoy;
                ioomkicqkmoooiew:
                goto cceykcumeqigcqkg;
                goto asuwukmiyuqqgqiy;
                oimgigccqeqcsmoy:
                goto aakgkaqakoqgcsci;
                goto gqemygsogaaasyes;
                iykceckkokwcsgoi:
                cceykcumeqigcqkg:
                goto oimgigccqeqcsmoy;
                yewcqwqmykemykca:
                if ($ymkomoccmymcoiea == "\143\154\141\163\163" && $ymyqweogikqywwqc) {
                    goto iqomqkaueoackgwg;
                }
                goto wauomwaoauygqsou;
                soyyokqommwwoyoy:
                
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto ioomkicqkmoooiew;
                ysowsoswoigywasy:
                if ($aiamqeawckcsuaou === self::REPLACE_ACTION) {
                    goto gkmiesukccsqmcqy;
                }
                goto yewcqwqmykemykca;
                wauomwaoauygqsou:
                goto cceykcumeqigcqkg;
                goto uucoqooygmoeuicu;
                uucoqooygmoeuicu:
                gkmiesukccsqmcqy:
                goto ugakmuywaoowqymc;
                cqcaimmsooakqmae:
                $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\x20{$cusosqmyoqiykqgw}";
                goto iykceckkokwcsgoi;
                asuwukmiyuqqgqiy:
                iqomqkaueoackgwg:
                goto cqcaimmsooakqmae;
                gqemygsogaaasyes:
            case self::REPLACE_WITH_ACTION:
                goto qagigacwywmweskc;
                moywwywcsegwawmi:
                goto aakgkaqakoqgcsci;
                goto mqugkocskuaokeiy;
                akiymyugggumyuic:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($cusosqmyoqiykqgw, $ymyqweogikqywwqc);
                goto qoeaosoumsicoqms;
                qagigacwywmweskc:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto goicqkqwoomuowkw;
                }
                goto akiymyugggumyuic;
                yicumoqkcoycyoyu:
                goicqkqwoomuowkw:
                goto wqmquqcyioicymwu;
                wqmquqcyioicymwu:
                $cusosqmyoqiykqgw = null;
                goto moywwywcsegwawmi;
                qoeaosoumsicoqms:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto yicumoqkcoycyoyu;
                mqugkocskuaokeiy:
        }
        goto akquuwsekmuoicae;
        kikeekyeuiyoiuoc:
        $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, $cusosqmyoqiykqgw);
        goto keggycaoqkyockgu;
        gemyysqyokmecguu:
        ywwqgsuuquocmqgk:
        goto eaqoukeuceuywwac;
        omsqscuggqqkuigc:
        $ymyqweogikqywwqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
        goto eaaicwyuwkogsies;
        suumgeqekqgggugc:
        yskiummkweosoacm:
        goto emmcgqumuacycqgg;
        uyieackqwooqcqos:
        $cusosqmyoqiykqgw = call_user_func($eqgoocgaqwqcimie, $momcykaoccoymeig, $gaeqamemwmwsyukm);
        goto suumgeqekqgggugc;
        owaccsusoeoacmwc:
        if (is_callable($eqgoocgaqwqcimie)) {
            goto geycsscsmmgaiioe;
        }
        goto ycwwyeycsiquwiyq;
        ycwwyeycsiquwiyq:
        $cusosqmyoqiykqgw = $eqgoocgaqwqcimie;
        goto ewmcqauqqeywoqcs;
        yayoumcciuyieeoi:
        geycsscsmmgaiioe:
        goto uyieackqwooqcqos;
        omqyiocewcgomqks:
        if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) {
            goto owqyqioycqkesioo;
        }
        goto kikeekyeuiyoiuoc;
        keggycaoqkyockgu:
        owqyqioycqkesioo:
        goto gemyysqyokmecguu;
        sgqkaakkaugosoak:
        aakgkaqakoqgcsci:
        goto omqyiocewcgomqks;
        akquuwsekmuoicae:
        uuiuemckcuckewow:
        goto sgqkaakkaugosoak;
        emmcgqumuacycqgg:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto ywwqgsuuquocmqgk;
        }
        goto omsqscuggqqkuigc;
        ewmcqauqqeywoqcs:
        goto yskiummkweosoacm;
        goto yayoumcciuyieeoi;
        eaqoukeuceuywwac:
    }
    
    public static function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $eagcmyswaakcwyec = [], $omwmuycmeqcqokom = "\144\151\x76", $qmeuaeiseuacgiqc = true)
    {
        goto eeycgakkgoakqaac;
        qagksgqcwesuogsi:
        $omwmuycmeqcqokom = ManipulateHTML::qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq);
        goto gsmueswaqwsqiqay;
        eeycgakkgoakqaac:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gscqagmcimoymgeq;
        egmkyicacugkkoie:
        $ygickiygyemsowyo = null;
        goto gqukqoawwwyuukwc;
        gqucksyyuwcwiyog:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto aieuuwkemkgccgqq;
        csgmgackuimwqgmw:
        ygooeemqcwgcmwgy:
        goto siaqoyuoaccceoqy;
        gqukqoawwwyuukwc:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto gakugweoyossmeao;
            lmsiwkmayqggkuie:
            emeycusyiaccgcoo:
            goto mkeiwccsuyqyqaom;
            eoggoeeymkgmcckw:
            $okcscwesammossuq .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto sgmwwuiygokssyeg;
            ssgkiscaiguwcyeq:
            self::_removeNode($ymyisaeksssueeik);
            goto eoggoeeymkgmcckw;
            euqokgqeguqwueas:
            $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode;
            goto ssgkiscaiguwcyeq;
            gakugweoyossmeao:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto ioyamykqysewiueo;
            }
            goto euqokgqeguqwueas;
            sgmwwuiygokssyeg:
            ioyamykqysewiueo:
            goto lmsiwkmayqggkuie;
            mkeiwccsuyqyqaom:
        }
        goto ceuyeoigyioagyou;
        gscqagmcimoymgeq:
        if (!$kasgukgceywckyou) {
            goto ygooeemqcwgcmwgy;
        }
        goto gqucksyyuwcwiyog;
        aieuuwkemkgccgqq:
        $okcscwesammossuq = '';
        goto egmkyicacugkkoie;
        gsmueswaqwsqiqay:
        self::_appendHTML($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc);
        goto qkueygwuioiiemuw;
        siaqoyuoaccceoqy:
        return $nsmgceoqaqogqmuw;
        goto hgmsiocesiimemgo;
        ceuyeoigyioagyou:
        eyqiqgwmkyegsmgw:
        goto qagksgqcwesuogsi;
        qkueygwuioiiemuw:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto csgmgackuimwqgmw;
        hgmsiocesiimemgo:
    }
}

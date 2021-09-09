<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    const UPDATE_ACTION = "\x75\160\x64\x61\x74\145";
    const REMOVE_ACTION = "\162\x65\x6d\157\166\x65";
    const RENAME_ACTION = "\162\145\x6e\x61\x6d\x65";
    const REPLACE_ACTION = "\x72\145\x70\x6c\x61\143\145";
    const REPLACE_WITH_ACTION = "\162\145\x70\154\141\x63\x65\137\x77\x69\164\150";
    
    public static function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, $uuyoeicyoayimaoa = false, $ksaameoqigiaoigg = true)
    {
        goto mkaywsiygayewcsi;
        uyygqqsiiqwkgsui:
        vsmwyksywsucgqio:
        goto gmkigekgqeggcsyw;
        awmikciiwqkysckm:
        return $nsmgceoqaqogqmuw;
        goto muyaeyisosqomqcs;
        scauomkgykckeuig:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto cqskeqeqeiuuoqik;
        wsuciooowcmgmowi:
        gmyqomqqoiaeucmi:
        goto mkcekygusayqmika;
        gecmsqayasqecmau:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto gmyqomqqoiaeucmi;
        }
        goto mskuymowkcqquekk;
        magyyoqoocaywgao:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gecmsqayasqecmau;
        mkcekygusayqmika:
        zwwmksgoaoayseke:
        goto awmikciiwqkysckm;
        mkaywsiygayewcsi:
        if (!$ekiuyucoiagmscgy) {
            goto zwwmksgoaoayseke;
        }
        goto magyyoqoocaywgao;
        gmkigekgqeggcsyw:
        if (!$ksaameoqigiaoigg) {
            goto uqswmissykmgmquk;
        }
        goto scauomkgykckeuig;
        cqskeqeqeiuuoqik:
        uqswmissykmgmquk:
        goto wsuciooowcmgmowi;
        mskuymowkcqquekk:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto uckowomugkemkgue;
        uckowomugkemkgue:
        foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) {
            goto iyswqyqmiwwiaqga;
            eeagqwuqkoeacgoe:
            if (call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) {
                goto suykcoiewiyyygus;
            }
            goto ekwkmeycsemqiyek;
            ekwkmeycsemqiyek:
            goto vsmwyksywsucgqio;
            goto wokawocgyeymmgmi;
            iyswqyqmiwwiaqga:
            if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                goto ekaksqgymsouisik;
            }
            goto myekqmoeyaaqikyg;
            aoyymeeaucqwsioc:
            goto iswqwemoogamyiiy;
            goto swqugakyysygkaky;
            wwugseiccokcicua:
            yekuikwwkikmcyeg:
            goto msgueseecmyycyws;
            ekyuaoiyikemcmam:
            iswqwemoogamyiiy:
            goto wwugseiccokcicua;
            wokawocgyeymmgmi:
            suykcoiewiyyygus:
            goto ekyuaoiyikemcmam;
            gcwikqkyswgkiecg:
            goto vsmwyksywsucgqio;
            goto memeaeocikosokoe;
            aiiiquiauigsmgaa:
            osgigagqyqicacag:
            goto eeagqwuqkoeacgoe;
            memeaeocikosokoe:
            goto iswqwemoogamyiiy;
            goto aiiiquiauigsmgaa;
            myekqmoeyaaqikyg:
            if ($ymyisaeksssueeik instanceof DOMElement) {
                goto osgigagqyqicacag;
            }
            goto aoyymeeaucqwsioc;
            swqugakyysygkaky:
            ekaksqgymsouisik:
            goto gcwikqkyswgkiecg;
            msgueseecmyycyws:
        }
        goto uyygqqsiiqwkgsui;
        muyaeyisosqomqcs:
    }
    
    public static function _getCrawler($nsmgceoqaqogqmuw)
    {
        goto yaooawyuysamqsyw;
        kaayqsguemieuiis:
        goto iwyciamigskmeewu;
        goto yuyoyqeogugoioai;
        cwkyueeeswwkoqsy:
        if ($nsmgceoqaqogqmuw && trim(preg_replace("\x2f\x5c\x73\x2b\x2f", "\40", $nsmgceoqaqogqmuw))) {
            goto qykmwowqsaseweaa;
        }
        goto igcqqyyugigksuge;
        igcqqyyugigksuge:
        goto iwyciamigskmeewu;
        goto umeuikiqwimqsycu;
        kgisguiqwgcsoquk:
        return $kasgukgceywckyou;
        goto uwmsakmmyyqceycw;
        uysiesmiweyywyge:
        $kasgukgceywckyou = $nsmgceoqaqogqmuw;
        goto kaayqsguemieuiis;
        yocsowioecgowewy:
        $kasgukgceywckyou = new Crawler(mb_convert_encoding($nsmgceoqaqogqmuw, "\x48\x54\115\114\55\105\x4e\124\111\124\111\105\123", "\x55\x54\x46\x2d\70"));
        goto musagcoyuieeysoc;
        yuyoyqeogugoioai:
        qykmwowqsaseweaa:
        goto yocsowioecgowewy;
        uymusecgskokuwio:
        if ($nsmgceoqaqogqmuw instanceof Crawler) {
            goto wkykqogwgoesioce;
        }
        goto cwkyueeeswwkoqsy;
        yaooawyuysamqsyw:
        $kasgukgceywckyou = null;
        goto uymusecgskokuwio;
        umeuikiqwimqsycu:
        wkykqogwgoesioce:
        goto uysiesmiweyywyge;
        musagcoyuieeysoc:
        iwyciamigskmeewu:
        goto kgisguiqwgcsoquk;
        uwmsakmmyyqceycw:
    }
    
    public static function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc)
    {
        goto hwicmgeaigqwusec;
        hwicmgeaigqwusec:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto sswyicgcmiiiwsey;
        mymeomeemsgoeuck:
        return $nsmgceoqaqogqmuw;
        goto ogywamggekuoqaic;
        wesgsgugyswioaak:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto eiumqosouqquwaei;
            gayimesuiaiykyys:
            saagogsoggsukaye:
            goto quyakkesymokoaeq;
            oyeeyaiscawiueym:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto yiuiaoiusussqgsg;
            kggmmmauqiooiiyq:
            $koaqiaecmascwuyy = self::_createElementFromHtml($kasgukgceywckyou, $ewgwqamkygiqaawc);
            goto kwscaymmqgkaooom;
            yguauqyoogikoioi:
            kaioaeygmkmqaaqk:
            goto gayimesuiaiykyys;
            cqackumguawiwsqs:
            mwsicmsmyuomkaqs:
            goto yguauqyoogikoioi;
            kwscaymmqgkaooom:
            if (!$koaqiaecmascwuyy) {
                goto mwsicmsmyuomkaqs;
            }
            goto oyeeyaiscawiueym;
            eiumqosouqquwaei:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto kaioaeygmkmqaaqk;
            }
            goto kggmmmauqiooiiyq;
            yiuiaoiusussqgsg:
            $omwmuycmeqcqokom->cgeyeoimiuyogose($koaqiaecmascwuyy);
            goto cqackumguawiwsqs;
            quyakkesymokoaeq:
        }
        goto mygmmosgyusymgio;
        mygmmosgyusymgio:
        oyakoogcgmqcimsy:
        goto iqeimykauywksaoi;
        uiiyisecmcsigiuw:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wesgsgugyswioaak;
        iqeimykauywksaoi:
        sqigaisycieqgoia:
        goto mymeomeemsgoeuck;
        sswyicgcmiiiwsey:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto sqigaisycieqgoia;
        }
        goto uiiyisecmcsigiuw;
        ogywamggekuoqaic:
    }
    
    public static function umuecysoywoumgwo($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto owoiouaomwqgksqc;
        owoiouaomwqgksqc:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto oaawymkyguukokoc;
        oeayowwwskuwywei:
        return false;
        goto ksasgwowcqqegcic;
        aeokmsquaasumuuo:
        return $kwmksuuciqkiymek->count() > 0;
        goto cqmwkoscgigmawys;
        oaawymkyguukokoc:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto csagaieykqsoyyyo;
        }
        goto soqmguugasswqwki;
        cqmwkoscgigmawys:
        csagaieykqsoyyyo:
        goto oeayowwwskuwywei;
        soqmguugasswqwki:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto aeokmsquaasumuuo;
        ksasgwowcqqegcic:
    }
    
    public static function igyokgqyiouieioo(Crawler $kasgukgceywckyou)
    {
        $ymyisaeksssueeik = $kasgukgceywckyou->wugqmqwisygwoeas(0);
        return $ymyisaeksssueeik->ownerDocument;
    }
    
    public static function ygmcsmegcysyeoss($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto eocoacoiikkigoiu;
        heaugqmkoiaymyoi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto iqmuoeyayeyysksq;
        mwggeaakeeuqseiy:
        return $gaeqamemwmwsyukm;
        goto ewyacsgkouuaymem;
        uyksowciskqigsig:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto mkmgkgowgamqakqi;
        }
        goto heaugqmkoiaymyoi;
        iqmuoeyayeyysksq:
        $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
        goto oyqggcawowywmgmg;
        aeueicccggqwcawc:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto uyksowciskqigsig;
        eocoacoiikkigoiu:
        $gaeqamemwmwsyukm = 0;
        goto aeueicccggqwcawc;
        oyqggcawowywmgmg:
        mkmgkgowgamqakqi:
        goto mwggeaakeeuqseiy;
        ewyacsgkouuaymem:
    }
    
    private static function _removeNode(DOMNode $ymyisaeksssueeik)
    {
        $ymyisaeksssueeik->parentNode->uwqgywaceaaymckg($ymyisaeksssueeik);
    }
    
    public static function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto kckiciumueaaywao;
        suyscmmiukkwmkig:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto quywmggomgaseomy;
            yweuowuosoummioc:
            goto keuggiweyueacgow;
            goto gamqsmuumocgweik;
            gamqsmuumocgweik:
            cacouogsmqcomkke:
            goto mscwwgwkgmqgqque;
            ywmqqmuyaaecgmui:
            $omwmuycmeqcqokom->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom);
            goto ggcgagwamuqckocw;
            ggcgagwamuqckocw:
            $nsmgceoqaqogqmuw = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo();
            goto yweuowuosoummioc;
            gcoquwcscysiccec:
            $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
            goto ywmqqmuyaaecgmui;
            mscwwgwkgmqgqque:
            ycyeqaucoaieegag:
            goto ymykcocgwsmwwami;
            quywmggomgaseomy:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto cacouogsmqcomkke;
            }
            goto gcoquwcscysiccec;
            ymykcocgwsmwwami:
        }
        goto iusqyigsmwcwiaeg;
        gwycusqkiusmouge:
        uqiouscouqsqeyau:
        goto aieqysoguicqukeq;
        giaeuoeockyqsyse:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto suyscmmiukkwmkig;
        iusqyigsmwcwiaeg:
        keuggiweyueacgow:
        goto gwycusqkiusmouge;
        kckiciumueaaywao:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ummmcgmiywgyaqqm;
        ummmcgmiywgyaqqm:
        if (!$kasgukgceywckyou) {
            goto uqiouscouqsqeyau;
        }
        goto quakesoomwuwygsu;
        quakesoomwuwygsu:
        $omwmuycmeqcqokom = null;
        goto giaeuoeockyqsyse;
        aieqysoguicqukeq:
        return $nsmgceoqaqogqmuw;
        goto moqakkycewiucuis;
        moqakkycewiucuis:
    }
    
    private static function _getHtml($gykwsaeqegqowywy, $ggauoeuaesiymgee = '')
    {
        goto cweguimoaweiumii;
        cweguimoaweiumii:
        try {
            goto iucukgoockccyokm;
            kgwaiecysoqgkqyu:
            $nsmgceoqaqogqmuw = preg_replace(["\x2f\x28\x3c\x29\x28\150\x65\x61\144\x29\50\x5b\x5e\76\135\x2a\77\51\50\x5c\x2f\x3f\x5c\x73\52\76\x29\x7c\x3c\x5c\x2f\x68\x65\141\144\76\57", "\x2f\x28\x3c\x29\x28\142\x6f\x64\171\x29\x28\133\136\x3e\135\52\x3f\x29\50\134\x2f\77\134\x73\52\76\x29\x7c\74\x5c\x2f\x62\x6f\x64\171\76\x2f", "\57\x28\160\x61\162\145\x6e\164\x3d\42\51\x28\x5b\141\x2d\x7a\101\55\x5a\60\55\x39\x3a\73\x5c\x2e\134\163\x5c\x28\x5c\51\134\x2d\134\x2c\135\52\51\50\x22\51\57"], '', $nsmgceoqaqogqmuw);
            goto qoueoyeoiiocgoac;
            uusuweogimkuigcy:
            $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw;
            goto cygeiiegsgiayomk;
            kseyamwikqwqkwgw:
            if (is_string($gykwsaeqegqowywy)) {
                goto awceiuoiqyqaseiq;
            }
            goto swuwcwceeiosooks;
            ykgawcqgqysmqioq:
            goto ueecsaukysiceeyq;
            goto ssqyqgwcimqcuksg;
            iucukgoockccyokm:
            $ikoqkmiqkckowcgg = "\x3c\41\104\x4f\103\x54\131\120\105\x20\x68\x74\155\154\x3e";
            goto aaogwucegguweoki;
            gaqcauwaswgqcquy:
            kiceosucogcykyge:
            goto iugeecogeucykkcc;
            cgcagmggieimycaw:
            awceiuoiqyqaseiq:
            goto wuwkeggsaiumowug;
            meeiequcowsceiow:
            if ($gykwsaeqegqowywy instanceof Crawler) {
                goto kgeeyaugiyyceaec;
            }
            goto mceesakqeysmiauu;
            yqsegosoqouiauiw:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee);
            goto kgwaiecysoqgkqyu;
            iugeecogeucykkcc:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->yqwwccackoayicyy();
            goto uusuweogimkuigcy;
            wuwkeggsaiumowug:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy;
            goto yuqoyicsmawcauec;
            ssqyqgwcimqcuksg:
            kgeeyaugiyyceaec:
            goto omqycomsaeugqyca;
            yuqoyicsmawcauec:
            ueecsaukysiceeyq:
            goto ymumcsswaocykmeo;
            cygeiiegsgiayomk:
            giueuyueoiukcima:
            goto msugciceoeaqyggk;
            awmwewyeqcgmmcyg:
            akcuqqooswuasawe:
            goto ecokmyyccossammg;
            keqmucqsyyuikoou:
            goto ueecsaukysiceeyq;
            goto cgcagmggieimycaw;
            ecokmyyccossammg:
            $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->skkueuquuqweeyqo();
            goto keqmucqsyyuikoou;
            omqycomsaeugqyca:
            if ($kkkqocwqmaokqcmc) {
                goto kiceosucogcykyge;
            }
            goto yqsegosoqouiauiw;
            aaogwucegguweoki:
            $kkkqocwqmaokqcmc = strpos(strtolower($ggauoeuaesiymgee), strtolower($ikoqkmiqkckowcgg)) !== false;
            goto meeiequcowsceiow;
            msugciceoeaqyggk:
            goto ueecsaukysiceeyq;
            goto awmwewyeqcgmmcyg;
            mceesakqeysmiauu:
            if ($gykwsaeqegqowywy instanceof DOMDocument) {
                goto akcuqqooswuasawe;
            }
            goto kseyamwikqwqkwgw;
            swuwcwceeiosooks:
            throw new InvalidArgumentException();
            goto ykgawcqgqysmqioq;
            qoueoyeoiiocgoac:
            goto giueuyueoiukcima;
            goto gaqcauwaswgqcquy;
            ymumcsswaocykmeo:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        }
        goto qkkiemwuuaaqqyas;
        ayucyyiciocgyass:
        return $nsmgceoqaqogqmuw;
        goto euoymauomemecuao;
        qkkiemwuuaaqqyas:
        if (is_string($nsmgceoqaqogqmuw)) {
            goto oegkcqakmussueqq;
        }
        goto aagkoumomwwcaeka;
        aagkoumomwwcaeka:
        $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        goto wueqcceaguewiucw;
        wueqcceaguewiucw:
        oegkcqakmussueqq:
        goto ayucyyiciocgyass;
        euoymauomemecuao:
    }
    
    public static function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::UPDATE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto coakmyawmquywmos;
        yiayuooesmsmswia:
        agwuyeemwsccoagc:
        goto wyiciayqimeqqomu;
        ocueeioeueqmisuo:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto gwiykyqeeowisqqk;
        ggwakcmgwkcsasug:
        skgeuaegiqaqgyaq:
        goto yiayuooesmsmswia;
        cukksseqkekyucye:
        if (!$kasgukgceywckyou) {
            goto agwuyeemwsccoagc;
        }
        goto ocueeioeueqmisuo;
        gwiykyqeeowisqqk:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto agakiqgiuymqowkc;
            qeoumcqaaaecsace:
            qegkmgwymeckgwyg:
            goto kykugggwwuqeokou;
            agakiqgiuymqowkc:
            $siquossayskcwkea = self::wuuawmeqqyyyemsw($ymyisaeksssueeik);
            goto eyooouiwwwumauao;
            eyooouiwwwumauao:
            if (!$siquossayskcwkea) {
                goto meiqsogowcogmgco;
            }
            goto aguwgcwgoukkkmio;
            aguwgcwgoukkkmio:
            goto skgeuaegiqaqgyaq;
            goto imyiqyuaoycegake;
            imyiqyuaoycegake:
            meiqsogowcogmgco:
            goto qeoumcqaaaecsace;
            kykugggwwuqeokou:
        }
        goto ggwakcmgwkcsasug;
        wyiciayqimeqqomu:
        return $siquossayskcwkea;
        goto icimmqwesqkmeuce;
        coakmyawmquywmos:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ygyoayucuigaoacw;
        ygyoayucuigaoacw:
        $siquossayskcwkea = [];
        goto cukksseqkekyucye;
        icimmqwesqkmeuce:
    }
    
    public static function wuuawmeqqyyyemsw($ymyisaeksssueeik)
    {
        goto cegkuogwgoiomikw;
        cegkuogwgoiomikw:
        $siquossayskcwkea = [];
        goto kwcsomkougiwgaco;
        qeauoqcaeymayusu:
        wysuusuamkqeyqso:
        goto iwcmsykogssougge;
        kwcsomkougiwgaco:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto omiqqwiemqykocci;
        }
        goto gkcycgsoawqoyesg;
        gkcycgsoawqoyesg:
        foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
            $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue;
            oogiaiuaumioummk:
        }
        goto qeauoqcaeymayusu;
        iwcmsykogssougge:
        omiqqwiemqykocci:
        goto oqiciswgoamuceqq;
        oqiciswgoamuceqq:
        return $siquossayskcwkea;
        goto eioiqwykkuguaygs;
        eioiqwykkuguaygs:
    }
    
    public static function wugqmqwisygwoeas($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        goto egisiwqggoqcgeum;
        qymucyymugqaaoyi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto wcyauuwqsicgkomk;
        egisiwqggoqcgeum:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qymucyymugqaaoyi;
        wcyauuwqsicgkomk:
        return $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto yomgkcycysceyagw;
        yomgkcycysceyagw:
    }
    
    public static function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto sueokeomisikqomo;
        cckmokqegquyoaoy:
        agisoqkoyekmsyga:
        goto icqaoiyumasyygik;
        gygmcmiciswgeswm:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) {
            goto qquecwewqeeqyysw;
            qquecwewqeeqyysw:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto ewceaieowsgamkyi;
            ceaewumsyymakaoc:
            kkucqmyecgwmioei:
            goto qqcoeqwimyugqwuc;
            qqcoeqwimyugqwuc:
            wuegeyoegwoqcumy:
            goto euycuguygmweyiwm;
            ewceaieowsgamkyi:
            foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) {
                goto uwawwskgqkieusog;
                ggmmkmasyqcugkkm:
                $uuswugicgoqcyiiy = $uumwowmewaqyggce->ownerDocument->auokmyiaciikcekk($ymqmyyeuycgmigyo);
                goto smikqieaosiykeii;
                ymessmmcgesuuyys:
                uememeasawuoseqy:
                goto ggmmkmasyqcugkkm;
                uwawwskgqkieusog:
                if (!$uumwowmewaqyggce instanceof DOMNode) {
                    goto muwaaaqcuwaeoakw;
                }
                goto coiqsauaqkqykkus;
                soasesuoocikiquy:
                wcwwkcwqkicykkmi:
                goto okuuaqumeeamcgiw;
                smikqieaosiykeii:
                foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) {
                    $uuswugicgoqcyiiy->cgeyeoimiuyogose($uumwowmewaqyggce->ownerDocument->gqskweuukuceuaoq($wcgsoqmmciswkmiq, true));
                    migcqoeeeukcyciu:
                }
                goto oukysgqmgiumaasc;
                ocqmicyceamumeia:
                muwaaaqcuwaeoakw:
                goto soasesuoocikiquy;
                aiyeuqqmcksqsyeq:
                wimkgcmkgcaewcwy:
                goto umgcmywyqkwsmsku;
                oukysgqmgiumaasc:
                ugksoyaaemqyoywa:
                goto umgmgswkigyyweke;
                mimysauwikioomiy:
                foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) {
                    $okcscwesammossuq[] = $wcgsoqmmciswkmiq;
                    uiewawqqakquwmsq:
                }
                goto ymessmmcgesuuyys;
                coiqsauaqkqykkus:
                $okcscwesammossuq = [];
                goto mimysauwikioomiy;
                umgcmywyqkwsmsku:
                $uumwowmewaqyggce->parentNode->caqmeawgoiceoymu($uuswugicgoqcyiiy, $uumwowmewaqyggce);
                goto ocqmicyceamumeia;
                umgmgswkigyyweke:
                foreach ($uumwowmewaqyggce->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto csguigwqeomsyyqw;
                    csguigwqeomsyyqw:
                    $qmgyyqwkskaiwcqg = $sicussmmuqmeqygw->nodeName;
                    goto eqmmegqmukwekkkk;
                    guwuqywoqwigamaw:
                    egocwogikoqicuyo:
                    goto iwcaywweqcgmemko;
                    eqmmegqmukwekkkk:
                    $giueyucwwwwiooim = $sicussmmuqmeqygw->nodeValue;
                    goto scmgoisaawgacqyu;
                    scmgoisaawgacqyu:
                    $uuswugicgoqcyiiy->cmgoqeksagmigwmg($qmgyyqwkskaiwcqg, $giueyucwwwwiooim);
                    goto guwuqywoqwigamaw;
                    iwcaywweqcgmemko:
                }
                goto aiyeuqqmcksqsyeq;
                okuuaqumeeamcgiw:
            }
            goto ceaewumsyymakaoc;
            euycuguygmweyiwm:
        }
        goto cckmokqegquyoaoy;
        eiaqawokkeocqqsk:
        ykssqiacqucsmmac:
        goto awmwcaycosymoesq;
        awmwcaycosymoesq:
        return $nsmgceoqaqogqmuw;
        goto icoacuwgkgqykgee;
        sueokeomisikqomo:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mggckwqcieykwima;
        mggckwqcieykwima:
        if (!$kasgukgceywckyou) {
            goto ykssqiacqucsmmac;
        }
        goto gygmcmiciswgeswm;
        icqaoiyumasyygik:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto eiaqawokkeocqqsk;
        icoacuwgkgqykgee:
    }
    
    public static function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        goto csgowsgmcyswmiec;
        uckiysiyuksyuaoa:
        goto kmqagkiwcsuimayg;
        goto ceyeeieiggoamgwe;
        qwsqoioiwieqgeee:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) {
            self::_removeElement($kasgukgceywckyou, $yuumukkaswwoywya);
            qoimoeswgougaeoa:
        }
        goto ammmoycqyaqeqiww;
        ggcaqksgsoeecwak:
        uquqecagkoyomiiy:
        goto eugiyageaomiuoki;
        okwouciqeqeuogos:
        kmqagkiwcsuimayg:
        goto qeimwiyggaoimmoq;
        qeimwiyggaoimmoq:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ggcaqksgsoeecwak;
        goiiekmeukcsamca:
        if (is_array($sgksuwkwyimqgaii)) {
            goto wsqkqmcuoauyescs;
        }
        goto gigkawsyquoowcms;
        gigkawsyquoowcms:
        self::_removeElement($kasgukgceywckyou, $sgksuwkwyimqgaii);
        goto uckiysiyuksyuaoa;
        eugiyageaomiuoki:
        return $nsmgceoqaqogqmuw;
        goto mmmccuoeoeuskisk;
        ceyeeieiggoamgwe:
        wsqkqmcuoauyescs:
        goto qwsqoioiwieqgeee;
        ugecckaqeasoimos:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto uquqecagkoyomiiy;
        }
        goto goiiekmeukcsamca;
        ammmoycqyaqeqiww:
        equcgweimiaqsysk:
        goto okwouciqeqeuogos;
        csgowsgmcyswmiec:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto ugecckaqeasoimos;
        mmmccuoeoeuskisk:
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
        goto okqoikkyquugiuia;
        uimeimmscccaqukm:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto emkcaamgumgwwyem;
            goekuagoayyskiio:
            kakskegscmoqcksc:
            goto iaewimwissuueacw;
            emkcaamgumgwwyem:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto eoeuieksgoyqcgsu;
            iaewimwissuueacw:
            gumkwiqcaqusgwqm:
            goto qggomaqouiuasaum;
            eoeuieksgoyqcgsu:
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                goto mosmyseyaemqewwk;
                suogukqqcuaecgmg:
                qeqagimacwmgmqiq:
                goto iwaqiakswyiuyyao;
                yoygkuwyqmgaqewi:
                $msqkueqksqwmskak = array_keys($siquossayskcwkea);
                goto ciwweeyeeieqgowe;
                mimseykuewemegow:
                syweoqsuaauksacw:
                goto sukokqcaoygeisos;
                iwaqiakswyiuyyao:
                oiymkikesysgoyma:
                goto mimseykuewemegow;
                mosmyseyaemqewwk:
                if (!$ymyisaeksssueeik instanceof DOMNode) {
                    goto oiymkikesysgoyma;
                }
                goto yoygkuwyqmgaqewi;
                ciwweeyeeieqgowe:
                foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                    goto yiomcwmuukooycqq;
                    wykieskeigmammue:
                    $ymyisaeksssueeik->cmgoqeksagmigwmg($siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue);
                    goto aiewsymeiqiakqqs;
                    saqqooggaykweqce:
                    if (!in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak)) {
                        goto kqmgqywmgomwmokg;
                    }
                    goto wykieskeigmammue;
                    aiewsymeiqiakqqs:
                    kqmgqywmgomwmokg:
                    goto yiqweuusyaikwqgg;
                    yiomcwmuukooycqq:
                    $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName;
                    goto saqqooggaykweqce;
                    yiqweuusyaikwqgg:
                    ekukcomgoyeiuici:
                    goto gamiacsewcmmiece;
                    gamiacsewcmmiece:
                }
                goto suogukqqcuaecgmg;
                sukokqcaoygeisos:
            }
            goto goekuagoayyskiio;
            qggomaqouiuasaum:
        }
        goto escwyiwieqcweggy;
        kuywseoceqkawokq:
        return $nsmgceoqaqogqmuw;
        goto iyocukugwkwoosqy;
        wouesssgyqywasom:
        if (!$kasgukgceywckyou) {
            goto gcwimimmgaoueegm;
        }
        goto uimeimmscccaqukm;
        ikiooiowwwwaygwi:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto cwwguccuiymmeosu;
        cwwguccuiymmeosu:
        gcwimimmgaoueegm:
        goto kuywseoceqkawokq;
        escwyiwieqcweggy:
        ikmqwkwwskokemqy:
        goto ikiooiowwwwaygwi;
        okqoikkyquugiuia:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto wouesssgyqywasom;
        iyocukugwkwoosqy:
    }
    
    public static function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _find(?Crawler $kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto keegiisaqayqmogu;
        keegiisaqayqmogu:
        if (!$kasgukgceywckyou instanceof Crawler) {
            goto kseweksyciigumec;
        }
        goto qeaeawocamciyiyk;
        yyakcqyqkuuokgqw:
        kseweksyciigumec:
        goto ewouumyoyasgkgig;
        qeaeawocamciyiyk:
        return $kasgukgceywckyou->filter($yuumukkaswwoywya);
        goto yyakcqyqkuuokgqw;
        ewouumyoyasgkgig:
        return $kasgukgceywckyou;
        goto sekgqycaaucagggo;
        sekgqycaaucagggo:
    }
    
    private static function _removeElement($kasgukgceywckyou, $yuumukkaswwoywya)
    {
        goto iqwqucswgosmiwyy;
        beowceiucukcwego:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            self::_removeNode($ymyisaeksssueeik);
            iiyamiqswaymisue:
        }
        goto mymcocumieiauquq;
        iqwqucswgosmiwyy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto beowceiucukcwego;
        mymcocumieiauquq:
        woqoqsqomgswqicc:
        goto muqkgsmqakgwkaym;
        muqkgsmqakgwkaym:
    }
    
    public static function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee)
    {
        goto iqeqegeqgsmmaeay;
        gkuukqkuaayagqwe:
        ckiswiiwkuugeogg:
        goto wayaguckegemumuy;
        kkgkywswiimccaog:
        return $eqgoocgaqwqcimie;
        goto awukmeygqcaeyaeg;
        kwqqeiiqgiaoquag:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uoygcyuomiyquumm;
            cegaaikcsiwyswca:
            esmaiecuukakamog:
            goto qikaumyuwkusqmcy;
            sgwmqsowsekomcso:
            if (!$eqgoocgaqwqcimie) {
                goto keowaakoqimieymo;
            }
            goto egcucgemmkamyiuu;
            uoygcyuomiyquumm:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto ywuqguicqikeqiog;
            }
            goto uasacoumuyqgeuqy;
            egcucgemmkamyiuu:
            goto ckiswiiwkuugeogg;
            goto scequiwqaummymka;
            uasacoumuyqgeuqy:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee);
            goto sgwmqsowsekomcso;
            rgemwoeoywekwuww:
            ywuqguicqikeqiog:
            goto cegaaikcsiwyswca;
            scequiwqaummymka:
            keowaakoqimieymo:
            goto rgemwoeoywekwuww;
            qikaumyuwkusqmcy:
        }
        goto gkuukqkuaayagqwe;
        qoeoouiewgwuyayg:
        $eqgoocgaqwqcimie = '';
        goto iqwsgmwqeskwqckm;
        wayaguckegemumuy:
        qcewkmiokmwaakyo:
        goto kkgkywswiimccaog;
        iqeqegeqgsmmaeay:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto qoeoouiewgwuyayg;
        yqisiuioymswaciy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto kwqqeiiqgiaoquag;
        iqwsgmwqeskwqckm:
        if (!$kasgukgceywckyou) {
            goto qcewkmiokmwaakyo;
        }
        goto yqisiuioymswaciy;
        awukmeygqcaeyaeg:
    }
    
    public static function goqgkgckyagueiso($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_WITH_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _createElement(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw)
    {
        goto ewuciaosgqwwagsc;
        aqukigyaugymgocm:
        foreach ($qeaoumiemyikogys->auamuceiowkuacoq("\x62\157\x64\171")->item(0)->childNodes as $ymyisaeksssueeik) {
            $omwmuycmeqcqokom->cgeyeoimiuyogose($omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true));
            csoeiakqgmuockgk:
        }
        goto qokcmisciyieiwyi;
        qokcmisciyieiwyi:
        cqcqsoqaumyuyemo:
        goto smuuwogesuiogomg;
        ewuciaosgqwwagsc:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto aqukigyaugymgocm;
        smuuwogesuiogomg:
    }
    
    private static function _createElementFromHtml(Crawler $kasgukgceywckyou, $nsmgceoqaqogqmuw)
    {
        goto ayucyiqeeeumawgo;
        ayucyiqeeeumawgo:
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        goto equeyqisaekucoyq;
        equeyqisaekucoyq:
        $kgcekiucekagcgai = self::igyokgqyiouieioo($kasgukgceywckyou);
        goto wymogskocqsmiimw;
        wymogskocqsmiimw:
        return $kgcekiucekagcgai->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
        goto wwcwmiwqwiygmyka;
        wwcwmiwqwiygmyka:
    }
    
    public static function ksgyqykcguougeue(DOMNode $ymyisaeksssueeik, $nsmgceoqaqogqmuw)
    {
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        return $ymyisaeksssueeik->ownerDocument->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
    }
    
    private static function _appendHTML($omwmuycmeqcqokom, $nsmgceoqaqogqmuw, $qmeuaeiseuacgiqc = true)
    {
        goto qykaososcekymqeo;
        qykaososcekymqeo:
        if (!$omwmuycmeqcqokom instanceof DOMNode) {
            goto csymkqmseeouiacg;
        }
        goto iqewyeqegsuemqgc;
        gcqqqceoakukiuim:
        foreach (self::_find($kasgukgceywckyou, "\142\157\144\x79") as $ymyisaeksssueeik) {
            goto isuyseouiawyweke;
            ecmowkisqwcgyykc:
            self::_appendHTML($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc);
            goto ygcocguewqswqcsa;
            ygcocguewqswqcsa:
            cyiwuweakowgmamu:
            goto musoessicqgioaci;
            isuyseouiawyweke:
            $ymyisaeksssueeik = $omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true);
            goto ecmowkisqwcgyykc;
            musoessicqgioaci:
        }
        goto kgmmesqykuckqgqg;
        mokaauiekiycqsii:
        goto cgcyciqqcqiimwse;
        goto akyieugiomeuaqsk;
        cwaukuukmsqkqqoc:
        cgcyciqqcqiimwse:
        goto mosmyyysosawmqku;
        qgyeaeoyqscmuqqy:
        yiqwwseykuimmeuc:
        goto cwaukuukmsqkqqoc;
        wcqkwcqqqsygagsg:
        cqkeucwwyywigyqk:
        goto owuommygccmkuues;
        sqowskoquogmiiwg:
        goto yiqwwseykuimmeuc;
        goto wcqkwcqqqsygagsg;
        akiuccuwusyiywaa:
        $omwmuycmeqcqokom->kqgwgkuykuumwcgw($nsmgceoqaqogqmuw, $omwmuycmeqcqokom->firstChild);
        goto sqowskoquogmiiwg;
        kgmmesqykuckqgqg:
        meiiqwkkeguigquc:
        goto mokaauiekiycqsii;
        jiykeiuymeoowsma:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gcqqqceoakukiuim;
        mosmyyysosawmqku:
        csymkqmseeouiacg:
        goto kcsqyquoyoyssiik;
        akyieugiomeuaqsk:
        aowacowggwuykewe:
        goto yukykeccsygagcsm;
        yukykeccsygagcsm:
        if ($qmeuaeiseuacgiqc) {
            goto cqkeucwwyywigyqk;
        }
        goto akiuccuwusyiywaa;
        owuommygccmkuues:
        $omwmuycmeqcqokom->cgeyeoimiuyogose($nsmgceoqaqogqmuw);
        goto qgyeaeoyqscmuqqy;
        iqewyeqegsuemqgc:
        if ($nsmgceoqaqogqmuw instanceof DOMNode) {
            goto aowacowggwuykewe;
        }
        goto jiykeiuymeoowsma;
        kcsqyquoyoyssiik:
    }
    
    public static function wesimowqwekiqiow($nsmgceoqaqogqmuw, $eeqsmkqmsowmicwi = "\x73\164\171\x6c\x65", $cussukyecoaeayqk = true)
    {
        goto sqqqwsqwmossuima;
        kgaciayyiuykqyko:
        return $nsmgceoqaqogqmuw;
        goto agkwamguicmweoom;
        ocgiuagqmmqakago:
        if (!$kswaimykcacqyaay instanceof DOMNode) {
            goto ymmgkaaokqasmaum;
        }
        goto aocyeyuakyusikwq;
        ceomusueeoaqyume:
        yscsaueouasieayc:
        goto gsegcywyaasmwyko;
        ggqwikwoioeuqsam:
        $kswaimykcacqyaay = self::_find($kasgukgceywckyou, "\x68\145\141\x64\40\76\x20{$eeqsmkqmsowmicwi}")->wugqmqwisygwoeas(0);
        goto kyiikasuaqaeigae;
        meeiyyaqksugkeai:
        self::pmouaioykaoceyag($kasgukgceywckyou, "\150\145\x61\x64", $ewgwqamkygiqaawc);
        goto teuusocwmquakkyc;
        yeewwwkywuowoscq:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, "\x5b\x73\x74\171\x6c\x65\x5d");
        goto kaccyaysqwkaoyka;
        teuusocwmquakkyc:
        goto eqiesmsygmemseog;
        goto ykemkuywkaowmyuc;
        kyiikasuaqaeigae:
        $ewgwqamkygiqaawc = '';
        goto ocgiuagqmmqakago;
        cqwmseemsiiaqgoo:
        ymmgkaaokqasmaum:
        goto yeewwwkywuowoscq;
        kaccyaysqwkaoyka:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto uqwmcimomeomgqgi;
            uaaigcisokikuqgu:
            $egkyssmuqcwaciya = $ymyisaeksssueeik->waecsyqmwascmqoa("\143\154\141\163\x73");
            goto cuqcgywmuqoakieq;
            iycosyeceoegukgg:
            wikugsiimiguuwuw:
            goto dsqeweimquoouiyo;
            cceewgewommawcii:
            ywoisggyqsommewa:
            goto wmcsksugskiskyyy;
            mquaoucacecoymqu:
            $omasqoksqewuwwkq = ManipulateString::uniqid(5);
            goto oucwkycugsesqoas;
            wcqggkigoogqmmqk:
            $eqgoocgaqwqcimie = str_replace("\41\151\155\x70\x6f\x72\164\141\156\x74", '', $eqgoocgaqwqcimie);
            goto cceewgewommawcii;
            cckseausycyccake:
            if (!$eqgoocgaqwqcimie) {
                goto kkewwsgkgooicawy;
            }
            goto migkmccwwikseoos;
            oucwkycugsesqoas:
            if ($cussukyecoaeayqk) {
                goto ywoisggyqsommewa;
            }
            goto wcqggkigoogqmmqk;
            uqwmcimomeomgqgi:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto wikugsiimiguuwuw;
            }
            goto eesgqauaaeqiycee;
            migkmccwwikseoos:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($yuumukkaswwoywya);
            goto mquaoucacecoymqu;
            imcqqemiwqqegsmk:
            $ymyisaeksssueeik->cmgoqeksagmigwmg("\143\154\x61\163\163", $egkyssmuqcwaciya);
            goto mcygayiqasgoyqss;
            yeqgqmywegcwsiow:
            $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc;
            goto uaaigcisokikuqgu;
            eesgqauaaeqiycee:
            $yuumukkaswwoywya = "\x73\164\x79\x6c\145";
            goto qmsikcqgaumiyego;
            dsqeweimquoouiyo:
            smsgceqwueqiwmyi:
            goto gmmwukkcaouckswu;
            wmcsksugskiskyyy:
            $acqqmqmcquukaqsc = "\x2e{$omasqoksqewuwwkq}\173{$eqgoocgaqwqcimie}\x7d";
            goto yeqgqmywegcwsiow;
            cuqcgywmuqoakieq:
            $egkyssmuqcwaciya .= "\40{$omasqoksqewuwwkq}";
            goto imcqqemiwqqegsmk;
            qmsikcqgaumiyego:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($yuumukkaswwoywya);
            goto cckseausycyccake;
            mcygayiqasgoyqss:
            kkewwsgkgooicawy:
            goto iycosyeceoegukgg;
            gmmwukkcaouckswu:
        }
        goto ceomusueeoaqyume;
        pouyossuowuwcsma:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto msiuouqukawgegwo;
        cyuwoeiiwcsqukku:
        eqiesmsygmemseog:
        goto pouyossuowuwcsma;
        ykemkuywkaowmyuc:
        qmuqcuumuagkyggg:
        goto skmkmwkyeuowoaqa;
        msiuouqukawgegwo:
        kaooossoiysywsuk:
        goto kgaciayyiuykqyko;
        siwscqyokoekmooc:
        if (!$kasgukgceywckyou) {
            goto kaooossoiysywsuk;
        }
        goto ggqwikwoioeuqsam;
        aocyeyuakyusikwq:
        $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent;
        goto cqwmseemsiiaqgoo;
        sqqqwsqwmossuima:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto siwscqyokoekmooc;
        gsegcywyaasmwyko:
        if ($kswaimykcacqyaay instanceof DOMElement) {
            goto qmuqcuumuagkyggg;
        }
        goto meeiyyaqksugkeai;
        skmkmwkyeuowoaqa:
        $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc;
        goto cyuwoeiiwcsqukku;
        agkwamguicmweoom:
    }
    
    public static function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, $egomoiciasmiesww = false)
    {
        goto okeqecawkekacsqc;
        coscuikaoymwwmii:
        auqwmowcyqaioyse:
        goto mukeowkkueukysww;
        yceeiagmcyqcayes:
        return $nsmgceoqaqogqmuw;
        goto uyeimkwsuoqgewgy;
        haiiaygcugigaggi:
        if ($egomoiciasmiesww) {
            goto wymyuyaiikioyeao;
        }
        goto eeyoaucukkaesqmk;
        mgkokmqyecocwwgo:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $yuumukkaswwoywya)->wugqmqwisygwoeas(0);
        goto wqemgeeosmaqkuye;
        xawawcwogwekqmqc:
        wymyuyaiikioyeao:
        goto yumegkesogwyweiq;
        smqsooyiiesuyoos:
        if (!$kasgukgceywckyou) {
            goto caqmiuioaesgyaug;
        }
        goto mgkokmqyecocwwgo;
        iyemcyamksqakiiw:
        caqmiuioaesgyaug:
        goto yceeiagmcyqcayes;
        wqemgeeosmaqkuye:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto auqwmowcyqaioyse;
        }
        goto haiiaygcugigaggi;
        mukeowkkueukysww:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto iyemcyamksqakiiw;
        yumegkesogwyweiq:
        $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc;
        goto coscuikaoymwwmii;
        okeqecawkekacsqc:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto smqsooyiiesuyoos;
        eeyoaucukkaesqmk:
        $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc;
        goto xawawcwogwekqmqc;
        uyeimkwsuoqgewgy:
    }
    
    public static function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc = true)
    {
        goto cicooguqkeoeyges;
        aokkmsyimyouoeim:
        ymkakuuweqoysagc:
        goto memocaoaimgeuimm;
        memocaoaimgeuimm:
        return $nsmgceoqaqogqmuw;
        goto kusuckgswgkceusi;
        ikiyguwaiacioake:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto asysseskuwwesiqc;
        }
        goto comcmyekisewieyc;
        cemammoacacweske:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto aokkmsyimyouoeim;
        comcmyekisewieyc:
        self::_appendHTML($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc);
        goto qqaoqesyysccooug;
        cicooguqkeoeyges:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gwuisuuwecwcaaik;
        qqaoqesyysccooug:
        asysseskuwwesiqc:
        goto cemammoacacweske;
        gwuisuuwecwcaaik:
        if (!$kasgukgceywckyou) {
            goto ymkakuuweqoysagc;
        }
        goto ugmqiuwksqaqywco;
        ugmqiuwksqaqywco:
        $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $omwmuycmeqcqokom)->wugqmqwisygwoeas(0);
        goto ikiyguwaiacioake;
        kusuckgswgkceusi:
    }
    
    public static function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto yayuqeqkcqmiiiyw;
        kagiaysuecmceegy:
        ugogcmgasecqmaqo:
        goto gisygciesowawkqy;
        qoaiwgymwioiissy:
        if (!$ymyisaeksssueeik instanceof DOMNode) {
            goto cmiqweaugcqmwoiq;
        }
        goto qqqyksacwuumcmia;
        sccqusyuqeiugcem:
        $ymyisaeksssueeik = $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
        goto qoaiwgymwioiissy;
        emsquuamiesiqseq:
        ugcgmougmeoayiea:
        goto wgocyuiekyasmquq;
        uyusyuseakqmycim:
        if (!$kwmksuuciqkiymek) {
            goto ugcgmougmeoayiea;
        }
        goto sccqusyuqeiugcem;
        yayuqeqkcqmiiiyw:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kaqeqoaoqacmssmg;
        gisygciesowawkqy:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent;
        goto gccikccauwosemee;
        misgeimskqgmumga:
        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
        goto iqeksucuwucgsuaq;
        siyawoacgucmaoky:
        return $aqykuigiuwmmcieu;
        goto ykuiuuqwkwwgeqko;
        cowscsiukyiwymqi:
        cmiqweaugcqmwoiq:
        goto emsquuamiesiqseq;
        kaqeqoaoqacmssmg:
        $aqykuigiuwmmcieu = '';
        goto ywkkyykyayusymai;
        iqeksucuwucgsuaq:
        goto mmyqweeceiaeqqus;
        goto kagiaysuecmceegy;
        wgocyuiekyasmquq:
        agaaausyuimymgmm:
        goto siyawoacgucmaoky;
        gccikccauwosemee:
        mmyqweeceiaeqqus:
        goto cowscsiukyiwymqi;
        qqqyksacwuumcmia:
        if ($ewgwqamkygiqaawc) {
            goto ugogcmgasecqmaqo;
        }
        goto misgeimskqgmumga;
        ywkkyykyayusymai:
        if (!$kasgukgceywckyou) {
            goto agaaausyuimymgmm;
        }
        goto uuawmiyqysumgaqy;
        uuawmiyqysumgaqy:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto uyusyuseakqmycim;
        ykuiuuqwkwwgeqko:
    }
    
    public static function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        goto yceyawgskeqggcuy;
        uyqckmcowkimsmyq:
        if (!$kasgukgceywckyou) {
            goto kcaswmekegcguiwu;
        }
        goto myyycckqeikqiuqi;
        uucwuqeucsiykagi:
        return $sogksuscggsicmac;
        goto ueowcqqgaoysmqie;
        ssecwqeouoeamsio:
        kcaswmekegcguiwu:
        goto uucwuqeucsiykagi;
        myyycckqeikqiuqi:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto ysoesyqiaaugywgi;
        yceyawgskeqggcuy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto msweyewumoisksiy;
        ysoesyqiaaugywgi:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto kywicmoksqkayose;
            yagiokukkmimaoae:
            uuooemyeyeuswqea:
            goto meomioiwwciyyyue;
            qiomiuawymsqimgk:
            qeywecigqgseiogw:
            goto oaosaqoqiiciwgwg;
            yauausaeuasqsgeu:
            if ($ewgwqamkygiqaawc) {
                goto ucwkqqscieaqmkms;
            }
            goto wiyauoggygqoymwu;
            wiyauoggygqoymwu:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto aeawksowymsuogeu;
            kywicmoksqkayose:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto kuwieemysouaokqs;
            }
            goto imoyquwyuicwioom;
            aeawksowymsuogeu:
            goto uuooemyeyeuswqea;
            goto wgyakmueooeqsyqc;
            euguuygaocimsesi:
            kuwieemysouaokqs:
            goto qiomiuawymsqimgk;
            imoyquwyuicwioom:
            self::_removeNode($ymyisaeksssueeik);
            goto yauausaeuasqsgeu;
            meomioiwwciyyyue:
            $sogksuscggsicmac[] = $aqykuigiuwmmcieu;
            goto euguuygaocimsesi;
            wgyakmueooeqsyqc:
            ucwkqqscieaqmkms:
            goto wgyukgmocmigoeuo;
            wgyukgmocmigoeuo:
            $aqykuigiuwmmcieu = $ymyisaeksssueeik->textContent;
            goto yagiokukkmimaoae;
            oaosaqoqiiciwgwg:
        }
        goto qmymeeegusssawmu;
        msweyewumoisksiy:
        $sogksuscggsicmac = [];
        goto uyqckmcowkimsmyq;
        qmymeeegusssawmu:
        ymgkgeqimsusocoy:
        goto ssecwqeouoeamsio;
        ueowcqqgaoysmqie:
    }
    
    public static function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, $ymkomoccmymcoiea = "\163\164\x79\154\x65", $wamcomkuwysqgwgk = "\45\x73\x3b")
    {
        goto gkcsgskucsicakwg;
        oyquokessoouwuke:
        ooiockqsscsuqokc:
        goto mgykueyyyoueykgm;
        ioqkkgikqygkemce:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto asoycqscmioaaggw;
        swiaoqqqyqusscqi:
        if (!$kasgukgceywckyou) {
            goto gsquqssmimkgcoga;
        }
        goto ioqkkgikqygkemce;
        skqyeawoqyssamii:
        return $nsmgceoqaqogqmuw;
        goto aaccwuemygqmicme;
        oiksiqocuawwgeek:
        gsquqssmimkgcoga:
        goto skqyeawoqyssamii;
        asoycqscmioaaggw:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto amacugyqcmgqiaog;
            eoskieimkcimmwio:
            if (!($ymkomoccmymcoiea == "\163\x74\171\154\x65")) {
                goto ugmowoyeoowiiqie;
            }
            goto emkuqqeesmiycqqo;
            emkuqqeesmiycqqo:
            $yeacayasgueouoqc = trim($yeacayasgueouoqc, "\73") . "\73";
            goto ewyukeoyymaooaqa;
            amacugyqcmgqiaog:
            if (!$ymyisaeksssueeik instanceof DOMElement) {
                goto kwaammsskmiamace;
            }
            goto ccssuekkawuwwkyk;
            wccegsoaeisquyeq:
            if (!$wamcomkuwysqgwgk) {
                goto wuwggkokqumggyiu;
            }
            goto ieyowiusaeousyse;
            kecqwqseaiaomoao:
            $ymyisaeksssueeik->ogaeogwycyqqckeu($ccamueccusigaaio);
            goto gmgkmqouwygkwuua;
            gmgkmqouwygkwuua:
            if (!$eqgoocgaqwqcimie) {
                goto coqewawckmigciso;
            }
            goto kmkmisyucykygqoc;
            kmkmisyucykygqoc:
            $yeacayasgueouoqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
            goto wccegsoaeisquyeq;
            ccssuekkawuwwkyk:
            $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($ccamueccusigaaio);
            goto kecqwqseaiaomoao;
            ooueyocsuseuawgc:
            wuwggkokqumggyiu:
            goto eoskieimkcimmwio;
            ugaoeiuoosyggsmi:
            coqewawckmigciso:
            goto yoeiuoyekameacwu;
            mksggqikmumuycga:
            $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, trim("{$yeacayasgueouoqc}\40{$eqgoocgaqwqcimie}"));
            goto ugaoeiuoosyggsmi;
            ewyukeoyymaooaqa:
            ugmowoyeoowiiqie:
            goto mksggqikmumuycga;
            ieyowiusaeousyse:
            $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie);
            goto ooueyocsuseuawgc;
            wwmggkkyegumakew:
            acsgyykcowwkyayy:
            goto cquumoyicacciqei;
            yoeiuoyekameacwu:
            kwaammsskmiamace:
            goto wwmggkkyegumakew;
            cquumoyicacciqei:
        }
        goto oyquokessoouwuke;
        mgykueyyyoueykgm:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto oiksiqocuawwgeek;
        gkcsgskucsicakwg:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto swiaoqqqyqusscqi;
        aaccwuemygqmicme:
    }
    
    public static function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', $uuksaskqamgouosy = true)
    {
        goto kkeakokiekuywmwy;
        kkeakokiekuywmwy:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto gmcsqgoweawewags;
        eaasaucuyacqooey:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto mwimaeocgaqeiukm;
            wumeiwysoiscimiu:
            $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo;
            goto eequmkcwsuakwwmo;
            suqosyewmcawwouy:
            self::_createElement($ymyisaeksssueeik, $goiaaeekgeqqmaqo);
            goto guwmecmmcueokcgu;
            eequmkcwsuakwwmo:
            goto qauqcecycoswuoyc;
            goto mcqkmiukmosqwemy;
            guwmecmmcueokcgu:
            iigwwyogmwesyoau:
            goto kqawgskqiimioaku;
            eeeaumqcsieckaoc:
            if (!$goiaaeekgeqqmaqo) {
                goto iigwwyogmwesyoau;
            }
            goto suqosyewmcawwouy;
            myusuecogkwoqimq:
            gqmgeusocymaikoy:
            goto uqsmsqoeimicguwe;
            ksccwuecqkqkawck:
            $ymyisaeksssueeik->nodeValue = '';
            goto eeeaumqcsieckaoc;
            cycoyeooqscgugwa:
            if ($uuksaskqamgouosy) {
                goto maugkumeqqaoqmkq;
            }
            goto wumeiwysoiscimiu;
            yyukimsicowasyqs:
            mcmmgacykcsowqiw:
            goto myusuecogkwoqimq;
            mwimaeocgaqeiukm:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto mcmmgacykcsowqiw;
            }
            goto cycoyeooqscgugwa;
            kqawgskqiimioaku:
            qauqcecycoswuoyc:
            goto yyukimsicowasyqs;
            mcqkmiukmosqwemy:
            maugkumeqqaoqmkq:
            goto ksccwuecqkqkawck;
            uqsmsqoeimicguwe:
        }
        goto uoqwymoegwoweuyk;
        gmcsqgoweawewags:
        if (!$kasgukgceywckyou) {
            goto caaqcciyeymoqqmc;
        }
        goto mkaoooyookegwgwg;
        gckckwqqgkoyyagq:
        return $nsmgceoqaqogqmuw;
        goto mickmqggcqwackce;
        uoqwymoegwoweuyk:
        qsiqckciwyomqwue:
        goto mawsiqmcsguuokok;
        mawsiqmcsguuokok:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto kisaoauaekgkauui;
        mkaoooyookegwgwg:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto eaasaucuyacqooey;
        kisaoauaekgkauui:
        caaqcciyeymoqqmc:
        goto gckckwqqgkoyyagq;
        mickmqggcqwackce:
    }
    
    private static function _updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = self::UPDATE_ACTION)
    {
        goto gmqoaasouciogwkq;
        cymoaqswaeycikca:
        return $kasgukgceywckyou;
        goto gyqaqyuewuquqkuy;
        uqmscgsoqeysooqc:
        return $nsmgceoqaqogqmuw;
        goto awgmmoegiwqoswkk;
        qsuqueusmkasmeig:
        egcyaksemqaakqgy:
        goto cymoaqswaeycikca;
        gyqaqyuewuquqkuy:
        ciiikyqwkwsceouq:
        goto uqmscgsoqeysooqc;
        gmqoaasouciogwkq:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto mykqimauysqiessi;
        muceomkycemgsccu:
        foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
            goto secswciggsguqauw;
            kqakgccawoogkiai:
            ccwaiwmcccmswyau:
            goto eoawcoaayikaiocu;
            aqmemoyecceeceuc:
            kwwwckywsygiwcoc:
            goto ammsmyuaoogueqog;
            oigoswgkgwescakq:
            if (!(isset($siquossayskcwkea["\160\x61\162\x65\x6e\x74"]) && $siquossayskcwkea["\x70\x61\x72\145\x6e\x74"])) {
                goto ccwaiwmcccmswyau;
            }
            goto oiakqemessasuyci;
            oiakqemessasuyci:
            try {
                $kwmksuuciqkiymek = $kwmksuuciqkiymek->eyagosskwwmgwmog();
            } catch (Exception $wgaoewqkwgomoaai) {
                goto esokuuqukgaiiuao;
            }
            goto kqakgccawoogkiai;
            eoawcoaayikaiocu:
            if (!$kwmksuuciqkiymek) {
                goto kwwwckywsygiwcoc;
            }
            goto aucuikgwyisgguye;
            ammsmyuaoogueqog:
            esokuuqukgaiiuao:
            goto aykiaquyoagykguu;
            gwswuqomwckekgum:
            qoiqosqiguawwekg:
            goto aqmemoyecceeceuc;
            secswciggsguqauw:
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            goto oigoswgkgwescakq;
            aucuikgwyisgguye:
            foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) {
                goto eesgmkwwiawcskie;
                ycaysuaiikcskakg:
                foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                    goto iimeieccwuumkgim;
                    fommkikuoyaeskiw:
                    $momcykaoccoymeig++;
                    goto ouecgmgoaaswqomi;
                    iimeieccwuumkgim:
                    self::_updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig);
                    goto fommkikuoyaeskiw;
                    ouecgmgoaaswqomi:
                    gyyawusuyeigckys:
                    goto okkimkuusqsiemkk;
                    okkimkuusqsiemkk:
                }
                goto emguyukcyeeuyqyo;
                emguyukcyeeuyqyo:
                sociuiuiwsymiyam:
                goto wiyoqoiqsmwuiywa;
                wiyoqoiqsmwuiywa:
                xiwcqyowugqukksy:
                goto mokoeuoicweqwksk;
                oyoeowyeooyowomm:
                $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
                goto ycaysuaiikcskakg;
                eesgmkwwiawcskie:
                $momcykaoccoymeig = 0;
                goto oyoeowyeooyowomm;
                mokoeuoicweqwksk:
            }
            goto gwswuqomwckekgum;
            aykiaquyoagykguu:
        }
        goto qsuqueusmkasmeig;
        mykqimauysqiessi:
        if (!$kasgukgceywckyou) {
            goto ciiikyqwkwsceouq;
        }
        goto muceomkycemgsccu;
        awgmmoegiwqoswkk:
    }
    
    private static function _updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig)
    {
        goto eaqqweigimyoywwu;
        wymeuweieiomiuqw:
        makegskyquimcacu:
        goto qogiwqwqsaesiskg;
        yooqmugaioweswcs:
        awccsuqeikuacioa:
        goto iekuaksaiccyckaw;
        wokoyuoomwmgwaoo:
        gyyiagqqegiygkag:
        goto wqkqggsaacukeimg;
        qogiwqwqsaesiskg:
        ggayissweeisyaqa:
        goto qaciuiaecgowsukq;
        ikcokaseywaaekgo:
        $cusosqmyoqiykqgw = $eqgoocgaqwqcimie;
        goto ukqewcigokikemua;
        eqycmciquqaesuyk:
        $ymyqweogikqywwqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
        goto geycsscsmmgaiioe;
        aakgkaqakoqgcsci:
        kowocmqmoqwacmoa:
        goto uuiuemckcuckewow;
        ukqewcigokikemua:
        goto gyyiagqqegiygkag;
        goto yooqmugaioweswcs;
        eaqqweigimyoywwu:
        if (is_callable($eqgoocgaqwqcimie)) {
            goto awccsuqeikuacioa;
        }
        goto ikcokaseywaaekgo;
        uuiuemckcuckewow:
        if (!($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw)))) {
            goto makegskyquimcacu;
        }
        goto yyiemgyowokesgww;
        wqkqggsaacukeimg:
        if (!$ymyisaeksssueeik instanceof DOMElement) {
            goto ggayissweeisyaqa;
        }
        goto eqycmciquqaesuyk;
        yskiummkweosoacm:
        jggaoyqecgewsysy:
        goto aakgkaqakoqgcsci;
        yyiemgyowokesgww:
        $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, $cusosqmyoqiykqgw);
        goto wymeuweieiomiuqw;
        geycsscsmmgaiioe:
        switch ($aiamqeawckcsuaou) {
            case self::REMOVE_ACTION:
                goto ywmukuyioksqgimq;
                ywiwagqgeomcwkss:
                acisamqweoscawig:
                goto kaeomaoaieammmca;
                mskguuoycuamgyim:
                kiieueeyieewgcuu:
                goto aqasuykawsiekssw;
                yoggmucmsyeaseso:
                goto kiieueeyieewgcuu;
                goto qqiqiaqoiesmuokq;
                woekwasoyuwmqgao:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($eqgoocgaqwqcimie);
                goto scogoqgeeoeqsuku;
                scogoqgeeoeqsuku:
                $cusosqmyoqiykqgw = null;
                goto mskguuoycuamgyim;
                cseiiqikiimgcmmy:
                if (!(false !== $uusmaiomayssaecw)) {
                    goto acisamqweoscawig;
                }
                goto swqucgmugmekaoqc;
                aqasuykawsiekssw:
                goto kowocmqmoqwacmoa;
                goto isicqmmaqumssuka;
                iiumqmaicymgouwy:
                $cusosqmyoqiykqgw = implode("\40", $ymyqweogikqywwqc);
                goto ekesimcsecgcuoms;
                ekesimcsecgcuoms:
                kkoswgsscqsgqmey:
                goto qqmskoaugmqsaaqy;
                ywmukuyioksqgimq:
                if (is_numeric($ymkomoccmymcoiea)) {
                    goto cqyommqsimyoioeo;
                }
                goto cqiagomawawqmcoo;
                qqmskoaugmqsaaqy:
                if ($cusosqmyoqiykqgw) {
                    goto ikwagqguqmqsakug;
                }
                goto gsisioycuuewgmmw;
                eoggqsukkackwoag:
                $uusmaiomayssaecw = array_search($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto cseiiqikiimgcmmy;
                wcsimwcyyumkyuck:
                ikwagqguqmqsakug:
                goto yoggmucmsyeaseso;
                cqiagomawawqmcoo:
                $ymyqweogikqywwqc = explode("\40", $ymyqweogikqywwqc);
                goto eoggqsukkackwoag;
                swqucgmugmekaoqc:
                unset($ymyqweogikqywwqc[$uusmaiomayssaecw]);
                goto ywiwagqgeomcwkss;
                qqiqiaqoiesmuokq:
                cqyommqsimyoioeo:
                goto woekwasoyuwmqgao;
                kaeomaoaieammmca:
                if (!is_array($ymyqweogikqywwqc)) {
                    goto kkoswgsscqsgqmey;
                }
                goto iiumqmaicymgouwy;
                gsisioycuuewgmmw:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto wcsimwcyyumkyuck;
                isicqmmaqumssuka:
            case self::RENAME_ACTION:
                goto sskkmcmqeimgeuwg;
                swyakyokwmomoqow:
                goto kowocmqmoqwacmoa;
                goto mameecqeeiakmiks;
                gekaiqysouaoyaci:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                goto umeomugcsyuukqsu;
                umeomugcsyuukqsu:
                msggcgusisiqukme:
                goto swyakyokwmomoqow;
                wgawmiiocosqkgos:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto gekaiqysouaoyaci;
                sskkmcmqeimgeuwg:
                $cusosqmyoqiykqgw = null;
                goto euguykkkieguasgy;
                euguykkkieguasgy:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto msggcgusisiqukme;
                }
                goto wgawmiiocosqkgos;
                mameecqeeiakmiks:
            case self::REPLACE_ACTION:
            case self::UPDATE_ACTION:
                goto ukmuimokewiqqmsy;
                ekksaoygcqikaque:
                goto kowocmqmoqwacmoa;
                goto qkmswkmokigugkaw;
                cyugiqiiaekakuec:
                goto cywmacoauegeacwk;
                goto acqwiccgsscgikyo;
                aoqcimcikseuucoy:
                goto cywmacoauegeacwk;
                goto okwyiswgsyymgius;
                ywwcwwqawggauaso:
                cywmacoauegeacwk:
                goto ekksaoygcqikaque;
                wakqmmwcieuuiygm:
                $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc}\x20{$cusosqmyoqiykqgw}";
                goto ywwcwwqawggauaso;
                okwyiswgsyymgius:
                ecwcasmmiooagwaq:
                goto wakqmmwcieuuiygm;
                iqeeygqsccygwqas:
                if ($ymkomoccmymcoiea == "\143\154\141\163\163" && $ymyqweogikqywwqc) {
                    goto ecwcasmmiooagwaq;
                }
                goto cyugiqiiaekakuec;
                acqwiccgsscgikyo:
                kgamqamcoaaqmgeg:
                goto gcsacemoyykguega;
                gcsacemoyykguega:
                $ymyqweogikqywwqc = null;
                goto muoiuweiesyukmgu;
                muoiuweiesyukmgu:
                
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto aoqcimcikseuucoy;
                ukmuimokewiqqmsy:
                if ($aiamqeawckcsuaou === self::REPLACE_ACTION) {
                    goto kgamqamcoaaqmgeg;
                }
                goto iqeeygqsccygwqas;
                qkmswkmokigugkaw:
            case self::REPLACE_WITH_ACTION:
                goto suigamecaieiiuka;
                suigamecaieiiuka:
                if (!$ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                    goto iykugimymaauokkm;
                }
                goto cwkeqwwaageaiecm;
                cwkeqwwaageaiecm:
                $ymyisaeksssueeik->cmgoqeksagmigwmg($cusosqmyoqiykqgw, $ymyqweogikqywwqc);
                goto cymysimiiemeqcmu;
                qaemeaiiueckkouq:
                iykugimymaauokkm:
                goto cgwiwgeekamooamc;
                cymysimiiemeqcmu:
                $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                goto qaemeaiiueckkouq;
                eygucgqouoacesei:
                goto kowocmqmoqwacmoa;
                goto csaqukkmgesgewkg;
                cgwiwgeekamooamc:
                $cusosqmyoqiykqgw = null;
                goto eygucgqouoacesei;
                csaqukkmgesgewkg:
        }
        goto yskiummkweosoacm;
        iekuaksaiccyckaw:
        $cusosqmyoqiykqgw = call_user_func($eqgoocgaqwqcimie, $momcykaoccoymeig, $gaeqamemwmwsyukm);
        goto wokoyuoomwmgwaoo;
        qaciuiaecgowsukq:
    }
    
    public static function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $eagcmyswaakcwyec = [], $omwmuycmeqcqokom = "\144\151\x76", $qmeuaeiseuacgiqc = true)
    {
        goto qkiiwqyuiuqwqosc;
        kgmumymgeqemogoy:
        if (!$kasgukgceywckyou) {
            goto eaucsgyigimwwuqg;
        }
        goto gcseqcagkcsmgokw;
        gcymuqcsmwiywkum:
        $okcscwesammossuq = '';
        goto iywkomquqqosokyq;
        weqgaswqweauwwyc:
        $omwmuycmeqcqokom = ManipulateHTML::qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq);
        goto ecayeacokkmyckmk;
        gumuwayiukgmeusw:
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            goto qaugewusyagkoksg;
            quyaggaoeakmcqmo:
            $okcscwesammossuq .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
            goto owkqqqyysqyaykow;
            msukmuseccwicmwg:
            self::_removeNode($ymyisaeksssueeik);
            goto quyaggaoeakmcqmo;
            owkqqqyysqyaykow:
            cqwsaoiqmiewkigq:
            goto makmsuccimeksawa;
            qaugewusyagkoksg:
            if (!$ymyisaeksssueeik instanceof DOMNode) {
                goto cqwsaoiqmiewkigq;
            }
            goto cocouuwqwiaiyemu;
            cocouuwqwiaiyemu:
            $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode;
            goto msukmuseccwicmwg;
            makmsuccimeksawa:
            ieqqyaeksqicikwe:
            goto yggsmyqseogscusc;
            yggsmyqseogscusc:
        }
        goto wiikemmmqckmwcma;
        wiikemmmqckmwcma:
        uqmsuuwuuqcaqasy:
        goto weqgaswqweauwwyc;
        qkiiwqyuiuqwqosc:
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        goto kgmumymgeqemogoy;
        gcseqcagkcsmgokw:
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        goto gcymuqcsmwiywkum;
        ecayeacokkmyckmk:
        self::_appendHTML($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc);
        goto yakwwcwqaokocwcy;
        iywkomquqqosokyq:
        $ygickiygyemsowyo = null;
        goto gumuwayiukgmeusw;
        wymkemmkwawacmys:
        return $nsmgceoqaqogqmuw;
        goto gcmiguwuukeawaii;
        yakwwcwqaokocwcy:
        $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        goto ssgiyqwsgyyogmqm;
        ssgiyqwsgyyogmqm:
        eaucsgyigimwwuqg:
        goto wymkemmkwawacmys;
        gcmiguwuukeawaii:
    }
}

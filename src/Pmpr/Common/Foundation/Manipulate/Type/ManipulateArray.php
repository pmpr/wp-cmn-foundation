<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateArray extends Common
{
    
    public static function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw)
    {
        goto ewkqiewssocsquuo;
        cksyaoquscmmscke:
        $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw));
        goto gggogewkqkskuicm;
        esqkgmaasckugmqo:
        goto yusagekewyiqqqyk;
        goto ygqaaocooiqkugos;
        yaawiccsokmgweye:
        if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
            goto eiseywwywkwcwgcq;
        }
        goto mmgoicukswqwseoc;
        kamukeioemqucmmg:
        if (is_array($uusmaiomayssaecw)) {
            goto swagceggcwqkcgkg;
        }
        goto yaawiccsokmgweye;
        mmgoicukswqwseoc:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
        goto yaawcswsqyucgsus;
        ygqaaocooiqkugos:
        swagceggcwqkcgkg:
        goto cksyaoquscmmscke;
        ycesoqquooyiwusg:
        return $eqgoocgaqwqcimie;
        goto kymsyoeswiuqoeam;
        yaawcswsqyucgsus:
        unset($uomewyckeuqoqocu[$uusmaiomayssaecw]);
        goto ewcysecswgsugswi;
        ewcysecswgsugswi:
        eiseywwywkwcwgcq:
        goto esqkgmaasckugmqo;
        qeaowsgcqsuccawg:
        if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) {
            goto asumyiuqmmywiwyc;
        }
        goto kamukeioemqucmmg;
        gggogewkqkskuicm:
        yusagekewyiqqqyk:
        goto ywumqymqkuyegcae;
        ywumqymqkuyegcae:
        asumyiuqmmywiwyc:
        goto ycesoqquooyiwusg;
        ewkqiewssocsquuo:
        $eqgoocgaqwqcimie = null;
        goto qeaowsgcqsuccawg;
        kymsyoeswiuqoeam:
    }
    
    public static function set($oaiciiqoawkamweo, $uwomkgseoiegeume = [])
    {
        goto gmmwicowkqiisogm;
        gmmwicowkqiisogm:
        if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) {
            goto iawwywggiwmigeiy;
        }
        goto oogwiuueieywymio;
        oogwiuueieywymio:
        $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo);
        goto wwykqesuwsqiwyiw;
        uykcicoeacqaykia:
        oeoawwmyiaaaieoy:
        goto cieamqmwwegyukgc;
        cieamqmwwegyukgc:
        iawwywggiwmigeiy:
        goto cuqccemgkguqycgc;
        wwykqesuwsqiwyiw:
        $awqscowmskeuymeu = is_object($oaiciiqoawkamweo);
        goto aucikuqogioweysy;
        cuqccemgkguqycgc:
        return $oaiciiqoawkamweo;
        goto aoseoaeigamewkyg;
        aucikuqogioweysy:
        foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto mksesqkqwqwyiski;
            ecoqoquwuygscmai:
            if (!$awqscowmskeuymeu) {
                goto ogyecgyqquwgcugi;
            }
            goto gooaiamwaqiueqag;
            gooaiamwaqiueqag:
            $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie;
            goto akiawysiwswoqmee;
            gmmukayqkigwksam:
            $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto kmawkwiiceqawowo;
            mksesqkqwqwyiski:
            if ($casemmqcsgmemwyg) {
                goto cyewimeguwgissoe;
            }
            goto ecoqoquwuygscmai;
            ocguegwcwgegqugs:
            cyewimeguwgissoe:
            goto gmmukayqkigwksam;
            kmawkwiiceqawowo:
            uqkuaiqggmmqkwcg:
            goto mgskwyqqysgqegwe;
            akiawysiwswoqmee:
            ogyecgyqquwgcugi:
            goto sqeucqqqmoqcuuem;
            mgskwyqqysgqegwe:
            swasyymuuuesyssc:
            goto omggqawmwgeoiawc;
            sqeucqqqmoqcuuem:
            goto uqkuaiqggmmqkwcg;
            goto ocguegwcwgegqugs;
            omggqawmwgeoiawc:
        }
        goto uykcicoeacqaykia;
        aoseoaeigamewkyg:
    }
    
    public static function isset($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto wscswagewsegyiyc;
        qsyimuywgcsoiecu:
        return $ksaameoqigiaoigg;
        goto qeqwkkggucamquwc;
        oaiigcusecmsciso:
        $ksaameoqigiaoigg = false;
        goto yucmysyskmgwsowg;
        cucceeoseaagcoam:
        qyuigkqusowucaqq:
        goto qsyimuywgcsoiecu;
        gomagoumaosyimii:
        kuekasacwyquuiqy:
        goto cucceeoseaagcoam;
        yucmysyskmgwsowg:
        goto qyuigkqusowucaqq;
        goto ucqcuosmqwiiwigm;
        ucqcuosmqwiiwigm:
        wgccsswsaiqccecw:
        goto aasyamqyqesqqwkm;
        uyqcwcgaswkaaqys:
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && is_array($yygmoeguaqyumuui) && $yygmoeguaqyumuui) {
            goto wgccsswsaiqccecw;
        }
        goto oaiigcusecmsciso;
        aasyamqyqesqqwkm:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto iscuuwgoaosayimo;
            waoqqaimmwkqikay:
            goto kuekasacwyquuiqy;
            goto ocqymsowceymagky;
            iscuuwgoaosayimo:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto muukgiowiywgysuy;
            }
            goto umkkwyaciakygsgo;
            oqsieegccekksmek:
            gacoqocuigoymcam:
            goto moceysouasysuwwk;
            umkkwyaciakygsgo:
            $ksaameoqigiaoigg = false;
            goto waoqqaimmwkqikay;
            ocqymsowceymagky:
            muukgiowiywgysuy:
            goto oqsieegccekksmek;
            moceysouasysuwwk:
        }
        goto gomagoumaosyimii;
        wscswagewsegyiyc:
        $ksaameoqigiaoigg = true;
        goto uyqcwcgaswkaaqys;
        qeqwkkggucamquwc:
    }
    
    public static function gymccqywkegiqiiw($uomewyckeuqoqocu) : int
    {
        goto aokseecsgimieouu;
        yokyoayigkwweqeg:
        return $iukyueweicuocgow;
        goto ykyqsgogqywswoua;
        cseioaeaywcuekge:
        ksowgigyiiocmmay:
        goto yokyoayigkwweqeg;
        aokseecsgimieouu:
        $iukyueweicuocgow = 0;
        goto euqaywkcamscaugi;
        euqaywkcamscaugi:
        if (!$uomewyckeuqoqocu) {
            goto ksowgigyiiocmmay;
        }
        goto ieiwqimgggeoaqwm;
        ieiwqimgggeoaqwm:
        $iukyueweicuocgow = rand(0, count($uomewyckeuqoqocu) - 1);
        goto cseioaeaywcuekge;
        ykyqsgogqywswoua:
    }
    
    public static function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto qigeyewuukwwousm;
        agqgaiqiwcgowsoi:
        gmiacescgeoqcogu:
        goto owswisaiecssuwwu;
        owswisaiecssuwwu:
        kaoukeiiiuquqgsm:
        goto oowwickgsmcqamqe;
        ygseoaiecssiymec:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto qkcgewmwssuaewie;
            gouyoowcwkccwewk:
            hkokwccuegwgeegk:
            goto qeyssuuycyyguuyo;
            qummwcsgemgwqwga:
            goto gmiacescgeoqcogu;
            goto gouyoowcwkccwewk;
            qeyssuuycyyguuyo:
            gwsqeeiwciqccasw:
            goto iqwsaiomwmyeusaq;
            qkcgewmwssuaewie:
            if (self::get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) {
                goto hkokwccuegwgeegk;
            }
            goto iyociciyeiswkaqk;
            iyociciyeiswkaqk:
            $ksaameoqigiaoigg = true;
            goto qummwcsgemgwqwga;
            iqwsaiomwmyeusaq:
        }
        goto agqgaiqiwcgowsoi;
        imeiskyssuamssoq:
        if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) {
            goto kaoukeiiiuquqgsm;
        }
        goto ygseoaiecssiymec;
        qigeyewuukwwousm:
        $ksaameoqigiaoigg = false;
        goto imeiskyssuamssoq;
        oowwickgsmcqamqe:
        return $ksaameoqigiaoigg;
        goto kyaismgimkqkcmey;
        kyaismgimkqkcmey:
    }
    
    public static function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie)
    {
        goto iswsmaumaacmwcwu;
        qqgsggygqommqmkw:
        return $qcgkuqesqqymcuui;
        goto aiskggeswyweiogy;
        qucwqsuacqkymwsm:
        $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie];
        goto myissqmgymuauowq;
        ccgiykywckmyiscg:
        smaisgmkkwgiqygi:
        goto qqgsggygqommqmkw;
        uyyceeeqmoysskuw:
        foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) {
            goto ecqyggsgiqweeyee;
            ugaoskycwsqcesko:
            geyksaceayaiwiiy:
            goto wyuommoqmyaeiswc;
            ecqyggsgiqweeyee:
            $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu);
            goto qykwyyyeyygkiqmi;
            okmawomkamqiwesm:
            $qcgkuqesqqymcuui = self::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            goto ugaoskycwsqcesko;
            qykwyyyeyygkiqmi:
            if (!($uusmaiomayssaecw !== false)) {
                goto geyksaceayaiwiiy;
            }
            goto okmawomkamqiwesm;
            wyuommoqmyaeiswc:
            umyquqiugigqmkau:
            goto kocagcykiyimkmoa;
            kocagcykiyimkmoa:
        }
        goto ccgiykywckmyiscg;
        rasgkseukaaqecam:
        if (is_array($eqgoocgaqwqcimie)) {
            goto miqsgoqewuokegig;
        }
        goto qucwqsuacqkymwsm;
        scsgmyqiwwwkwayy:
        $qcgkuqesqqymcuui = false;
        goto uyyceeeqmoysskuw;
        iswsmaumaacmwcwu:
        $qcgkuqesqqymcuui = null;
        goto rasgkseukaaqecam;
        myissqmgymuauowq:
        miqsgoqewuokegig:
        goto scsgmyqiwwwkwayy;
        aiskggeswyweiogy:
    }
    
    public static function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok)
    {
        goto akequyeqowgagiek;
        emaakmmcykwmmeum:
        aasiooeuekwqamyk:
        goto quumskauyaouyyiy;
        imscgsmqiswkeyka:
        $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy));
        goto oyqqsiciakemkgim;
        eguqaygayksgkoyq:
        $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu));
        goto imscgsmqiswkeyka;
        ocickgekowkiqyuo:
        iosgqqoyoiqgsgks:
        goto iqkysoyykewkkwes;
        oyqqsiciakemkgim:
        goto iosgqqoyoiqgsgks;
        goto emaakmmcykwmmeum;
        akequyeqowgagiek:
        if (is_int($kuuiuigeacouwmaa)) {
            goto aasiooeuekwqamyk;
        }
        goto eguqaygayksgkoyq;
        quumskauyaouyyiy:
        array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok);
        goto ocickgekowkiqyuo;
        iqkysoyykewkkwes:
    }
    
    public static function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool
    {
        return count($uomewyckeuqoqocu) != count($uomewyckeuqoqocu, 1);
    }
    
    public static function wuoqgcwmkicakygs($uomewyckeuqoqocu) : bool
    {
        goto kugoqmkkeqeoakik;
        gocwqoqicukssssu:
        sygasaomgiqoqmqs:
        goto owasckmgeweqwsgq;
        kugoqmkkeqeoakik:
        $wuoqgcwmkicakygs = false;
        goto cgeimkqsoqqigogy;
        cgeimkqsoqqigogy:
        if (!$uomewyckeuqoqocu) {
            goto sygasaomgiqoqmqs;
        }
        goto ecawoqusqygmccmo;
        owasckmgeweqwsgq:
        return $wuoqgcwmkicakygs;
        goto qgwmgswcikqsoymm;
        ecawoqusqygmccmo:
        $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1);
        goto gocwqoqicukssssu;
        qgwmgswcikqsoymm:
    }
    
    public static function yaeiiwwyckwugsem($uomewyckeuqoqocu, $igaagwuyasawwqms = self::PRIORITY)
    {
        goto aoeccsiuoeigmwkm;
        aoeccsiuoeigmwkm:
        if (!is_array($uomewyckeuqoqocu)) {
            goto iuumiyikcwiiwuqk;
        }
        goto ssmcciyyscekqosk;
        ssmcciyyscekqosk:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms) {
            goto ssgeyeewksygaeqm;
            ekmmomgayqemmaqm:
            qwcsgqgmmsscgsaa:
            goto qkiwmwgkosoiiqgo;
            gmoewkmwwyeaycgm:
            goto ouseeusmwgswgayi;
            goto gykceoyygmmeawws;
            soaekkoykikagyqa:
            if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) {
                goto qwcsgqgmmsscgsaa;
            }
            goto amamemmaewcmqmso;
            aocqwuakameoqqme:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms};
            goto aykucyyeseggeeoy;
            wyymkuqsaikomumi:
            mkggwgyaywmiaeue:
            goto gmoewkmwwyeaycgm;
            gykceoyygmmeawws:
            okgmaysweamaymuk:
            goto aocqwuakameoqqme;
            amamemmaewcmqmso:
            $uiuykcweuosgmwki = self::get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> self::get($csougakqegqiqsgi, $igaagwuyasawwqms);
            goto ekmmomgayqemmaqm;
            nicoewqgywcusaci:
            ayoycomwascmkkkm:
            goto wmggooiesmiaymyw;
            owsywiygoiqkyeey:
            if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) {
                goto ayoycomwascmkkkm;
            }
            goto soaekkoykikagyqa;
            wmggooiesmiaymyw:
            if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) {
                goto okgmaysweamaymuk;
            }
            goto mwewkecyyqycwcyi;
            qkiwmwgkosoiiqgo:
            goto gueiogkegsiymgie;
            goto nicoewqgywcusaci;
            guqmiyswawmaggqw:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms}() <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}();
            goto wyymkuqsaikomumi;
            mwewkecyyqycwcyi:
            if (!(method_exists($mmeioagwmyscwumo, $igaagwuyasawwqms) && method_exists($csougakqegqiqsgi, $igaagwuyasawwqms))) {
                goto mkggwgyaywmiaeue;
            }
            goto guqmiyswawmaggqw;
            aykucyyeseggeeoy:
            ouseeusmwgswgayi:
            goto cqqywmesqogkseku;
            ssgeyeewksygaeqm:
            $uiuykcweuosgmwki = false;
            goto owsywiygoiqkyeey;
            cqqywmesqogkseku:
            gueiogkegsiymgie:
            goto eiakokiiwigccesk;
            eiakokiiwigccesk:
            return $uiuykcweuosgmwki;
            goto aksioomuagcyawuk;
            aksioomuagcyawuk:
        });
        goto yymqcwmasyyamagq;
        yymqcwmasyyamagq:
        iuumiyikcwiiwuqk:
        goto iugskawkyskmcmyg;
        iugskawkyskmcmyg:
        return $uomewyckeuqoqocu;
        goto wsmwsckqgokueicw;
        wsmwsckqgokueicw:
    }
    
    public static function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto iaokmyigguukmcky;
        iaokmyigguukmcky:
        $sogksuscggsicmac = $ggauoeuaesiymgee;
        goto cqgiaauymsygoomq;
        ocimykqskwaewuia:
        return $sogksuscggsicmac;
        goto yccuogewgykqkkys;
        ogqswkqkcosuewgg:
        oeewiaeeicmwqyiw:
        goto gueusoewgqkcwkuq;
        useumocigsoceeus:
        if (!is_object($oaiciiqoawkamweo)) {
            goto oeewiaeeicmwqyiw;
        }
        goto aewewmmweiaeuewi;
        ieqccoywksywcsky:
        qayogkgwkuoycsuy:
        goto ocimykqskwaewuia;
        gueusoewgqkcwkuq:
        goto qayogkgwkuoycsuy;
        goto acyyqeqgusyqaook;
        qyaiyaqcqsskmwos:
        $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw];
        goto gcaoeocsuqqqyaym;
        acyyqeqgusyqaook:
        gcqeiwgakokeuouq:
        goto ewiqoyqagowquqqe;
        sewmgsmcyiacccoa:
        yicuaiowomkyaueg:
        goto ogqswkqkcosuewgg;
        uwoayuwcsqsekywg:
        $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw};
        goto sewmgsmcyiacccoa;
        cqgiaauymsygoomq:
        if (is_array($oaiciiqoawkamweo)) {
            goto gcqeiwgakokeuouq;
        }
        goto useumocigsoceeus;
        gcaoeocsuqqqyaym:
        kuquyyieaicaecie:
        goto ieqccoywksywcsky;
        ewiqoyqagowquqqe:
        if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) {
            goto kuquyyieaicaecie;
        }
        goto qyaiyaqcqsskmwos;
        aewewmmweiaeuewi:
        if (!isset($oaiciiqoawkamweo->{$uusmaiomayssaecw})) {
            goto yicuaiowomkyaueg;
        }
        goto uwoayuwcsqsekywg;
        yccuogewgykqkkys:
    }
    
    public static function cswcewwmmicqesei($uomewyckeuqoqocu, $oegoegssokkyiqam) : array
    {
        goto mmmkqsukesoasosu;
        iauoeqkuisgyagqc:
        foreach ($oegoegssokkyiqam as $ymqmyyeuycgmigyo => $mkomwsiykqigmqca) {
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = self::qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca);
            sewqmkouocccomww:
        }
        goto qmsoeugoyqquamqk;
        iwumyigiscuuwqik:
        return $sogksuscggsicmac;
        goto scysiomisyamwocw;
        qmsoeugoyqquamqk:
        qqewqyiwuaqaakwk:
        goto iwumyigiscuuwqik;
        mmmkqsukesoasosu:
        $sogksuscggsicmac = [];
        goto iauoeqkuisgyagqc;
        scysiomisyamwocw:
    }
    
    public static function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null)
    {
        goto kkgeeeaqoaoskogo;
        yqisgeugiuokowgw:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto wwqikmmkomakgaou;
            igoocsoeousssema:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto iycuugwwawmiewmq;
            }
            goto mkikcguagooeiace;
            cmgayuowmaymuaiq:
            goto uguyeawasakeoekq;
            goto acgauasosqqysagi;
            ucwyaykmcoikkkuo:
            swiiumgaagycwyoa:
            goto aauqmqqqakiaqeqo;
            eceacmeaisaqssco:
            gwgukcuckigmwoes:
            goto sqwyqsciuaceoaaa;
            kycykouooecoiyqw:
            iycuugwwawmiewmq:
            goto yqygigmwumoksekw;
            oucwaucwcoegeaco:
            skywgyiswsmassgq:
            goto wwaqsuwkskcooicq;
            aqkgkwewsqkeyusm:
            goto raqaugusyaieeuyi;
            goto igeccyeusumcacea;
            wwqikmmkomakgaou:
            if (is_array($uomewyckeuqoqocu)) {
                goto uisiuwgqougckasg;
            }
            goto yqyqsioacayucksc;
            acgauasosqqysagi:
            kagckqkwssikyaay:
            goto qeqquaucmqkmsmoq;
            kwickmmwwyqigccu:
            wkisqogwyuawwiqo:
            goto iiuwsswoayimgack;
            qeqquaucmqkmsmoq:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}();
            goto weekmyeyqukcoegg;
            iiuwsswoayimgack:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw};
            goto oiikekyiqeqogkua;
            igeccyeusumcacea:
            goto oukqkimqsackseiw;
            goto kwickmmwwyqigccu;
            aauqmqqqakiaqeqo:
            goto ickouwcsecqeskwq;
            goto isymsqwwkmwkamuy;
            ymqseyksqoouycio:
            if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) {
                goto wkisqogwyuawwiqo;
            }
            goto kcaqocqaugkyiyys;
            uwkaywsgkmicamom:
            wwscaygcymkwcoas:
            goto oqmkiaqgogkikwes;
            mkikcguagooeiace:
            $uomewyckeuqoqocu = null;
            goto awyaiyumyosuyewi;
            isymsqwwkmwkamuy:
            uisiuwgqougckasg:
            goto igoocsoeousssema;
            qaqemcccqogoummc:
            goto swiiumgaagycwyoa;
            goto oucwaucwcoegeaco;
            oiikekyiqeqogkua:
            oukqkimqsackseiw:
            goto cmgayuowmaymuaiq;
            wwaqsuwkskcooicq:
            if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) {
                goto kagckqkwssikyaay;
            }
            goto ymqseyksqoouycio;
            yukgigiiimqqwiyq:
            goto raqaugusyaieeuyi;
            goto qaqemcccqogoummc;
            awyaiyumyosuyewi:
            goto raqaugusyaieeuyi;
            goto wquqgqsyiccogoac;
            gwmwmaqgwkkamqmo:
            $uomewyckeuqoqocu = null;
            goto yukgigiiimqqwiyq;
            weekmyeyqukcoegg:
            uguyeawasakeoekq:
            goto ucwyaykmcoikkkuo;
            yqyqsioacayucksc:
            if (is_object($uomewyckeuqoqocu)) {
                goto skywgyiswsmassgq;
            }
            goto gwmwmaqgwkkamqmo;
            sqwyqsciuaceoaaa:
            ickouwcsecqeskwq:
            goto uwkaywsgkmicamom;
            kcaqocqaugkyiyys:
            $uomewyckeuqoqocu = null;
            goto aqkgkwewsqkeyusm;
            yqygigmwumoksekw:
            $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto eceacmeaisaqssco;
            wquqgqsyiccogoac:
            goto gwgukcuckigmwoes;
            goto kycykouooecoiyqw;
            oqmkiaqgogkikwes:
        }
        goto ceckikeaaasskwmo;
        keoaaweuqeeoguyi:
        $uomewyckeuqoqocu = $ggauoeuaesiymgee;
        goto saqyacsiqwmqgqkm;
        kkgeeeaqoaoskogo:
        $yygmoeguaqyumuui = explode("\x2e", $mkomwsiykqigmqca);
        goto yqisgeugiuokowgw;
        saqyacsiqwmqgqkm:
        aaqqggkciwcemugy:
        goto kkwcewqsaeyugawo;
        uwyckgawyyueaaym:
        if ($uomewyckeuqoqocu) {
            goto aaqqggkciwcemugy;
        }
        goto keoaaweuqeeoguyi;
        ceckikeaaasskwmo:
        raqaugusyaieeuyi:
        goto uwyckgawyyueaaym;
        kkwcewqsaeyugawo:
        return $uomewyckeuqoqocu;
        goto amiessagaiiiiiei;
        amiessagaiiiiiei:
    }
    
    public static function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array
    {
        goto keqgmaemoceqssyy;
        yowsymiqiqgkmuuy:
        ygsaygcskekuwgya:
        goto wewmsmwegeoqoeem;
        keqgmaemoceqssyy:
        if (!is_array($uomewyckeuqoqocu)) {
            goto ygsaygcskekuwgya;
        }
        goto kqcusmuiyoqmeqwu;
        wewmsmwegeoqoeem:
        return $uomewyckeuqoqocu;
        goto woagemomagskuyii;
        oaeweiaegakeieoi:
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true);
        goto iqgcumoueoaacgkc;
        iqgcumoueoaacgkc:
        ewquwuoyeeiwkwuy:
        goto yowsymiqiqgkmuuy;
        kqcusmuiyoqmeqwu:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) {
            return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw];
        });
        goto auiwyymoguwkooew;
        auiwyymoguwkooew:
        if (!($uuyoeicyoayimaoa > 0)) {
            goto ewquwuoyeeiwkwuy;
        }
        goto oaeweiaegakeieoi;
        woagemomagskuyii:
    }
    
    public static function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array
    {
        goto keakmgioceekisuk;
        awmyswwkwqgugmmy:
        return $sogksuscggsicmac;
        goto kskoukygaaicomgy;
        boekkoaekyqaemmq:
        foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) {
            goto cgoaqiqsuomgmysm;
            sscoeeyeeggsckyo:
            ggyqoucwiyqucqsi:
            goto qeggaicaycsqqkio;
            eocckcsgsycuywyi:
            iymqokemgwcsgeiu:
            goto emiosiemcoyoeoou;
            yesicceuyqcyysue:
            $eqgoocgaqwqcimie = call_user_func($ekiuyucoiagmscgy, $eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto ikuauuskoukskkmo;
            aksaumeeuqawgwmi:
            goto kummaeaoeksaiasa;
            goto qmuqwqmumcayeiku;
            kgisumcygmcgyemm:
            if (!is_callable($ekiuyucoiagmscgy)) {
                goto qgaeuqkwwoikwsus;
            }
            goto yesicceuyqcyysue;
            cgoaqiqsuomgmysm:
            if (is_numeric($ewyuweyoskiagksm)) {
                goto iymqokemgwcsgeiu;
            }
            goto cuwayimcsiycgmim;
            ggiycasgekosqyqk:
            cusoaecwsaeckaie:
            goto usggsqksmaaukmqq;
            wewusiqwsukukkms:
            $sogksuscggsicmac[] = $eqgoocgaqwqcimie;
            goto aksaumeeuqawgwmi;
            mskqaucggqcumquk:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto kuiicmskwegaoggu;
            sgkayqyykwuagyiu:
            $ggauoeuaesiymgee = $uauoccoqcsaeggui;
            goto nwckgaiueoigasee;
            kuiicmskwegaoggu:
            kummaeaoeksaiasa:
            goto ggiycasgekosqyqk;
            emiosiemcoyoeoou:
            $uusmaiomayssaecw = $uauoccoqcsaeggui;
            goto sscoeeyeeggsckyo;
            cuwayimcsiycgmim:
            $uusmaiomayssaecw = $ewyuweyoskiagksm;
            goto sgkayqyykwuagyiu;
            nwckgaiueoigasee:
            goto ggyqoucwiyqucqsi;
            goto eocckcsgsycuywyi;
            kgoeamguscusyywe:
            if ($mywqgwsimwoeoawk) {
                goto ogmcsmoewwocmkme;
            }
            goto wewusiqwsukukkms;
            qmuqwqmumcayeiku:
            ogmcsmoewwocmkme:
            goto mskqaucggqcumquk;
            ikuauuskoukskkmo:
            qgaeuqkwwoikwsus:
            goto kgoeamguscusyywe;
            qeggaicaycsqqkio:
            $eqgoocgaqwqcimie = self::get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto kgisumcygmcgyemm;
            usggsqksmaaukmqq:
        }
        goto eqqgiigwkciiksuo;
        keakmgioceekisuk:
        $sogksuscggsicmac = [];
        goto egaqukiucuckkqai;
        egaqukiucuckkqai:
        if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) {
            goto wuuqskwuoeacgacg;
        }
        goto osmciccqwowieume;
        eqqgiigwkciiksuo:
        gqoiqscswogsymcu:
        goto mcqimygcwcqcssky;
        mcqimygcwcqcssky:
        wuuqskwuoeacgacg:
        goto awmyswwkwqgugmmy;
        osmciccqwowieume:
        $ggauoeuaesiymgee = '';
        goto boekkoaekyqaemmq;
        kskoukygaaicomgy:
    }
    
    public static function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = [])
    {
        goto ooyqgwsoeyqoucae;
        ouumywcisskmgyio:
        return $sogksuscggsicmac;
        goto ekwoimwoqucawyis;
        scgqkqkwimicokau:
        oywuqkssgiiumuis:
        goto ouumywcisskmgyio;
        gsggsgayikymekok:
        aoueogeoyisucaiq:
        goto scgqkqkwimicokau;
        yksiaqaciswymeim:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) {
            goto oeoaqooaouowkwec;
            kokuyqgigassuuoc:
            qoeiqqmskcqeaiug:
            goto yaekwuquieusamyw;
            qsieyoiaoiqaumus:
            yiisikkiqosawsgu:
            goto mieaoqwgaukeysis;
            gwqicekgscayqcuq:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu;
            goto qsieyoiaoiqaumus;
            komsqawwueueiuag:
            muowkaagoqiyegme:
            goto ckeccumaeeuamqem;
            iiigksqqskiumiqi:
            goto yiisikkiqosawsgu;
            goto qywsmseiceqecigi;
            ygyugquqaqegwioo:
            kewcuamqaiyeayio:
            goto komsqawwueueiuag;
            kawkmiguwoooksec:
            $sogksuscggsicmac[] = $esquqsuaumgwoewu;
            goto iiigksqqskiumiqi;
            qywsmseiceqecigi:
            akeowgkiskougikg:
            goto gwqicekgscayqcuq;
            mieaoqwgaukeysis:
            goto kewcuamqaiyeayio;
            goto kokuyqgigassuuoc;
            oeoaqooaouowkwec:
            if (is_array($esquqsuaumgwoewu)) {
                goto qoeiqqmskcqeaiug;
            }
            goto ugqsesmesggiqaos;
            yaekwuquieusamyw:
            $sogksuscggsicmac = self::kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac);
            goto ygyugquqaqegwioo;
            ugqsesmesggiqaos:
            if ($xkqaigkogigocask) {
                goto akeowgkiskougikg;
            }
            goto kawkmiguwoooksec;
            ckeccumaeeuamqem:
        }
        goto gsggsgayikymekok;
        ooyqgwsoeyqoucae:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto oywuqkssgiiumuis;
        }
        goto yksiaqaciswymeim;
        ekwoimwoqucawyis:
    }
    
    public static function qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $aumugyockeskamiq, $gymeemoisimggcww = true) : array
    {
        goto wmwqumcksgkckeae;
        gkwkcgcewcecmgoe:
        unset($ggkaciewmeqmgckg[$aumugyockeskamiq]);
        goto qaymskucssiyeasw;
        emqiswoqkweuamuw:
        return $uomewyckeuqoqocu;
        goto ogigeoakcogugeym;
        smwmewocqywykcou:
        iqskmoysaamkuoim:
        goto agckaqmuskakeumg;
        agckaqmuskakeumg:
        iiiaciykaukmuiwu:
        goto emqiswoqkweuamuw;
        sgsmmgiuyuukgsyi:
        if ($gymeemoisimggcww) {
            goto awsiakgwsaqyiggo;
        }
        goto qsemsoimoauiccmm;
        wsumwkwmcygcqyaa:
        kemciyisiqsemmwm:
        goto gkwkcgcewcecmgoe;
        qsemsoimoauiccmm:
        $ggkaciewmeqmgckg = array_slice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)), true);
        goto ceqkmcaycyskmoia;
        womkaomokgseakue:
        awsiakgwsaqyiggo:
        goto agameskciseayqqy;
        agameskciseayqqy:
        $ggkaciewmeqmgckg = array_splice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)));
        goto wsumwkwmcygcqyaa;
        ceqkmcaycyskmoia:
        goto kemciyisiqsemmwm;
        goto womkaomokgseakue;
        euayciwoioqckyoi:
        goto iiiaciykaukmuiwu;
        goto gqwkiummucquoece;
        symyoqqgcwomyksw:
        uowumqmesgawkcme:
        goto euayciwoioqckyoi;
        qaymskucssiyeasw:
        $uomewyckeuqoqocu = $ggkaciewmeqmgckg + $aseguuimuokgcami + $uomewyckeuqoqocu;
        goto symyoqqgcwomyksw;
        gqwkiummucquoece:
        ceimuucmqmuygqiu:
        goto uocisouiiqciywim;
        wmwqumcksgkckeae:
        if (is_array($aumugyockeskamiq)) {
            goto ceimuucmqmuygqiu;
        }
        goto qayyssyasegwkuwi;
        qayyssyasegwkuwi:
        if (!isset($uomewyckeuqoqocu[$ksiyqouuaoymsycg], $uomewyckeuqoqocu[$aumugyockeskamiq])) {
            goto uowumqmesgawkcme;
        }
        goto qwyuicgesgumuuum;
        uocisouiiqciywim:
        foreach ($aumugyockeskamiq as $igqsaukqcqscimok) {
            $uomewyckeuqoqocu = self::qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $igqsaukqcqscimok, $gymeemoisimggcww);
            ewowkiosiisoacse:
        }
        goto smwmewocqywykcou;
        qwyuicgesgumuuum:
        $aseguuimuokgcami = [$aumugyockeskamiq => $uomewyckeuqoqocu[$aumugyockeskamiq]];
        goto sgsmmgiuyuukgsyi;
        ogigeoakcogugeym:
    }
    
    public static function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array
    {
        goto uqmsgooywggqywam;
        mooomiuasyggqsis:
        $uiymkeeaukcyqqik = null;
        goto quqkqymwqwywgesy;
        uqmsgooywggqywam:
        $giqggecqqikcysgq = 0;
        goto mooomiuasyggqsis;
        quqkqymwqwywgesy:
        $aqeywoskqiugcmye = null;
        goto cmagkaygaemaaici;
        wwiqmgogkuoaucyc:
        iisiamyqqaaoykga:
        goto siaagaokcmgeuimo;
        siaagaokcmgeuimo:
        return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik];
        goto yukmmiscasoogmyu;
        cmagkaygaemaaici:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
            goto oqewauiqmkiiaiqe;
            yaacmieqceeiyuii:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
            goto gmwiocukkqksiwkk;
            saqmoqaeaoqmaaqo:
            if (!is_string($eqgoocgaqwqcimie)) {
                goto kkmyoieguiwecakw;
            }
            goto uqgqukmekkieakco;
            gocscsauukioowcq:
            $giqggecqqikcysgq = $ykiwomimkkuiigoq;
            goto iauekwigiwssawke;
            gkscusucwgaoooso:
            if (!is_object($eqgoocgaqwqcimie)) {
                goto guseeaqsaueqcweo;
            }
            goto yaacmieqceeiyuii;
            gqkwumcquuuwoqkw:
            kkmyoieguiwecakw:
            goto ykeogiauqegcimwm;
            gakuaukecwikgsmc:
            if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) {
                goto oeqecewccwqsqmmc;
            }
            goto gocscsauukioowcq;
            iauekwigiwssawke:
            $uiymkeeaukcyqqik = $eqgoocgaqwqcimie;
            goto ggcewuaywkywgcoa;
            yymmqiaisemuayke:
            osckyscuccyeyiea:
            goto ysyiewokqwgckeko;
            gmwiocukkqksiwkk:
            guseeaqsaueqcweo:
            goto saqmoqaeaoqmaaqo;
            uqgqukmekkieakco:
            $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
            goto gakuaukecwikgsmc;
            oqewauiqmkiiaiqe:
            if (key_exists($momcykaoccoymeig, $couiucmsqaieciue)) {
                goto kmwckweaaawgkumy;
            }
            goto gkscusucwgaoooso;
            ggcewuaywkywgcoa:
            $aqeywoskqiugcmye = $momcykaoccoymeig;
            goto wuiuuyooeukyiois;
            ykeogiauqegcimwm:
            kmwckweaaawgkumy:
            goto yymmqiaisemuayke;
            wuiuuyooeukyiois:
            oeqecewccwqsqmmc:
            goto gqkwumcquuuwoqkw;
            ysyiewokqwgckeko:
        }
        goto wwiqmgogkuoaucyc;
        yukmmiscasoogmyu:
    }
    
    public static function ksiyqouuaoymsycg(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, $momcykaoccoymeig = false)
    {
        goto kimmqccoykmmokim;
        ycywkayeqeumswqg:
        return $ksiyqouuaoymsycg;
        goto ecikmukcoqciisue;
        caumcscgkmkqgceq:
        usmksyiucoeycycc:
        goto ycywkayeqeumswqg;
        agksoawkuoguyeio:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto iaqaecisewceswme;
            aaqiiwuwmyqqekwm:
            eoyqkmiwoiyecqiq:
            goto usomesuioqacuiwm;
            guukcuckowqqgqag:
            yocoiwekswmeqosg:
            goto kumeocwaamwuggmy;
            kumeocwaamwuggmy:
            ucmuqycsksssuyku:
            goto yyyqqsuawgwkayme;
            yaumammegwowmsqu:
            if ($momcykaoccoymeig) {
                goto eoyqkmiwoiyecqiq;
            }
            goto ycwsommucswweyww;
            ycwsommucswweyww:
            $ksiyqouuaoymsycg = $igqsaukqcqscimok;
            goto moigkuskomyqceuu;
            ayugswgkeymseuoe:
            if (!($esoaccosseymguso == $qwcmueausqgiwigy)) {
                goto yocoiwekswmeqosg;
            }
            goto yaumammegwowmsqu;
            moigkuskomyqceuu:
            goto uamoquqaiywkyigy;
            goto aaqiiwuwmyqqekwm;
            usomesuioqacuiwm:
            $ksiyqouuaoymsycg = $momcykaoccoymeig;
            goto sossqwuskoaguiie;
            iaqaecisewceswme:
            $esoaccosseymguso = self::qamwegcyimgcqksw($igqsaukqcqscimok, $mkomwsiykqigmqca);
            goto ayugswgkeymseuoe;
            sossqwuskoaguiie:
            uamoquqaiywkyigy:
            goto qiakkkgsokqowqkg;
            qiakkkgsokqowqkg:
            goto usmksyiucoeycycc;
            goto guukcuckowqqgqag;
            yyyqqsuawgwkayme:
        }
        goto caumcscgkmkqgceq;
        kimmqccoykmmokim:
        $ksiyqouuaoymsycg = null;
        goto agksoawkuoguyeio;
        ecikmukcoqciisue:
    }
}

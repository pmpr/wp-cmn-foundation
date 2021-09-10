<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateArray extends Common
{
    
    public static function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw)
    {
        goto qeaowsgcqsuccawg;
        qeaowsgcqsuccawg:
        $eqgoocgaqwqcimie = null;
        goto kamukeioemqucmmg;
        yaawiccsokmgweye:
        if (is_array($uusmaiomayssaecw)) {
            goto yusagekewyiqqqyk;
        }
        goto mmgoicukswqwseoc;
        gggogewkqkskuicm:
        $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw));
        goto ywumqymqkuyegcae;
        kamukeioemqucmmg:
        if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) {
            goto ewkqiewssocsquuo;
        }
        goto yaawiccsokmgweye;
        esqkgmaasckugmqo:
        swagceggcwqkcgkg:
        goto ygqaaocooiqkugos;
        ygqaaocooiqkugos:
        goto asumyiuqmmywiwyc;
        goto cksyaoquscmmscke;
        ycesoqquooyiwusg:
        ewkqiewssocsquuo:
        goto kymsyoeswiuqoeam;
        ewcysecswgsugswi:
        unset($uomewyckeuqoqocu[$uusmaiomayssaecw]);
        goto esqkgmaasckugmqo;
        kymsyoeswiuqoeam:
        return $eqgoocgaqwqcimie;
        goto oeoawwmyiaaaieoy;
        cksyaoquscmmscke:
        yusagekewyiqqqyk:
        goto gggogewkqkskuicm;
        yaawcswsqyucgsus:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
        goto ewcysecswgsugswi;
        ywumqymqkuyegcae:
        asumyiuqmmywiwyc:
        goto ycesoqquooyiwusg;
        mmgoicukswqwseoc:
        if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
            goto swagceggcwqkcgkg;
        }
        goto yaawcswsqyucgsus;
        oeoawwmyiaaaieoy:
    }
    
    public static function set($oaiciiqoawkamweo, $uwomkgseoiegeume = [])
    {
        goto oogwiuueieywymio;
        cuqccemgkguqycgc:
        gmmwicowkqiisogm:
        goto aoseoaeigamewkyg;
        aucikuqogioweysy:
        $awqscowmskeuymeu = is_object($oaiciiqoawkamweo);
        goto uykcicoeacqaykia;
        cieamqmwwegyukgc:
        swasyymuuuesyssc:
        goto cuqccemgkguqycgc;
        wwykqesuwsqiwyiw:
        $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo);
        goto aucikuqogioweysy;
        aoseoaeigamewkyg:
        return $oaiciiqoawkamweo;
        goto kuekasacwyquuiqy;
        uykcicoeacqaykia:
        foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto ecoqoquwuygscmai;
            ecoqoquwuygscmai:
            if ($casemmqcsgmemwyg) {
                goto uqkuaiqggmmqkwcg;
            }
            goto gooaiamwaqiueqag;
            kmawkwiiceqawowo:
            $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto mgskwyqqysgqegwe;
            gooaiamwaqiueqag:
            if (!$awqscowmskeuymeu) {
                goto cyewimeguwgissoe;
            }
            goto akiawysiwswoqmee;
            ocguegwcwgegqugs:
            goto mksesqkqwqwyiski;
            goto gmmukayqkigwksam;
            omggqawmwgeoiawc:
            ogyecgyqquwgcugi:
            goto iawwywggiwmigeiy;
            gmmukayqkigwksam:
            uqkuaiqggmmqkwcg:
            goto kmawkwiiceqawowo;
            mgskwyqqysgqegwe:
            mksesqkqwqwyiski:
            goto omggqawmwgeoiawc;
            akiawysiwswoqmee:
            $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie;
            goto sqeucqqqmoqcuuem;
            sqeucqqqmoqcuuem:
            cyewimeguwgissoe:
            goto ocguegwcwgegqugs;
            iawwywggiwmigeiy:
        }
        goto cieamqmwwegyukgc;
        oogwiuueieywymio:
        if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) {
            goto gmmwicowkqiisogm;
        }
        goto wwykqesuwsqiwyiw;
        kuekasacwyquuiqy:
    }
    
    public static function isset($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto uyqcwcgaswkaaqys;
        aasyamqyqesqqwkm:
        qyuigkqusowucaqq:
        goto gomagoumaosyimii;
        oaiigcusecmsciso:
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && is_array($yygmoeguaqyumuui) && $yygmoeguaqyumuui) {
            goto qyuigkqusowucaqq;
        }
        goto yucmysyskmgwsowg;
        qsyimuywgcsoiecu:
        wscswagewsegyiyc:
        goto qeqwkkggucamquwc;
        yucmysyskmgwsowg:
        $ksaameoqigiaoigg = false;
        goto ucqcuosmqwiiwigm;
        qeqwkkggucamquwc:
        return $ksaameoqigiaoigg;
        goto ksowgigyiiocmmay;
        cucceeoseaagcoam:
        gacoqocuigoymcam:
        goto qsyimuywgcsoiecu;
        ucqcuosmqwiiwigm:
        goto wscswagewsegyiyc;
        goto aasyamqyqesqqwkm;
        gomagoumaosyimii:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto umkkwyaciakygsgo;
            moceysouasysuwwk:
            muukgiowiywgysuy:
            goto wgccsswsaiqccecw;
            waoqqaimmwkqikay:
            $ksaameoqigiaoigg = false;
            goto ocqymsowceymagky;
            ocqymsowceymagky:
            goto gacoqocuigoymcam;
            goto oqsieegccekksmek;
            umkkwyaciakygsgo:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto iscuuwgoaosayimo;
            }
            goto waoqqaimmwkqikay;
            oqsieegccekksmek:
            iscuuwgoaosayimo:
            goto moceysouasysuwwk;
            wgccsswsaiqccecw:
        }
        goto cucceeoseaagcoam;
        uyqcwcgaswkaaqys:
        $ksaameoqigiaoigg = true;
        goto oaiigcusecmsciso;
        ksowgigyiiocmmay:
    }
    
    public static function gymccqywkegiqiiw($uomewyckeuqoqocu) : int
    {
        goto euqaywkcamscaugi;
        ieiwqimgggeoaqwm:
        if (!$uomewyckeuqoqocu) {
            goto aokseecsgimieouu;
        }
        goto cseioaeaywcuekge;
        cseioaeaywcuekge:
        $iukyueweicuocgow = rand(0, count($uomewyckeuqoqocu) - 1);
        goto yokyoayigkwweqeg;
        euqaywkcamscaugi:
        $iukyueweicuocgow = 0;
        goto ieiwqimgggeoaqwm;
        yokyoayigkwweqeg:
        aokseecsgimieouu:
        goto ykyqsgogqywswoua;
        ykyqsgogqywswoua:
        return $iukyueweicuocgow;
        goto gmiacescgeoqcogu;
        gmiacescgeoqcogu:
    }
    
    public static function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto imeiskyssuamssoq;
        agqgaiqiwcgowsoi:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto iyociciyeiswkaqk;
            qummwcsgemgwqwga:
            $ksaameoqigiaoigg = true;
            goto gouyoowcwkccwewk;
            qeyssuuycyyguuyo:
            qkcgewmwssuaewie:
            goto iqwsaiomwmyeusaq;
            gouyoowcwkccwewk:
            goto gwsqeeiwciqccasw;
            goto qeyssuuycyyguuyo;
            iyociciyeiswkaqk:
            if (self::get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) {
                goto qkcgewmwssuaewie;
            }
            goto qummwcsgemgwqwga;
            iqwsaiomwmyeusaq:
            hkokwccuegwgeegk:
            goto kaoukeiiiuquqgsm;
            kaoukeiiiuquqgsm:
        }
        goto owswisaiecssuwwu;
        imeiskyssuamssoq:
        $ksaameoqigiaoigg = false;
        goto ygseoaiecssiymec;
        oowwickgsmcqamqe:
        qigeyewuukwwousm:
        goto kyaismgimkqkcmey;
        ygseoaiecssiymec:
        if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) {
            goto qigeyewuukwwousm;
        }
        goto agqgaiqiwcgowsoi;
        kyaismgimkqkcmey:
        return $ksaameoqigiaoigg;
        goto miqsgoqewuokegig;
        owswisaiecssuwwu:
        gwsqeeiwciqccasw:
        goto oowwickgsmcqamqe;
        miqsgoqewuokegig:
    }
    
    public static function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie)
    {
        goto rasgkseukaaqecam;
        qqgsggygqommqmkw:
        umyquqiugigqmkau:
        goto aiskggeswyweiogy;
        aiskggeswyweiogy:
        return $qcgkuqesqqymcuui;
        goto aasiooeuekwqamyk;
        myissqmgymuauowq:
        $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie];
        goto scsgmyqiwwwkwayy;
        uyyceeeqmoysskuw:
        $qcgkuqesqqymcuui = false;
        goto ccgiykywckmyiscg;
        rasgkseukaaqecam:
        $qcgkuqesqqymcuui = null;
        goto qucwqsuacqkymwsm;
        qucwqsuacqkymwsm:
        if (is_array($eqgoocgaqwqcimie)) {
            goto smaisgmkkwgiqygi;
        }
        goto myissqmgymuauowq;
        ccgiykywckmyiscg:
        foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) {
            goto qykwyyyeyygkiqmi;
            wyuommoqmyaeiswc:
            ecqyggsgiqweeyee:
            goto kocagcykiyimkmoa;
            okmawomkamqiwesm:
            if (!($uusmaiomayssaecw !== false)) {
                goto ecqyggsgiqweeyee;
            }
            goto ugaoskycwsqcesko;
            ugaoskycwsqcesko:
            $qcgkuqesqqymcuui = self::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            goto wyuommoqmyaeiswc;
            qykwyyyeyygkiqmi:
            $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu);
            goto okmawomkamqiwesm;
            kocagcykiyimkmoa:
            geyksaceayaiwiiy:
            goto iswsmaumaacmwcwu;
            iswsmaumaacmwcwu:
        }
        goto qqgsggygqommqmkw;
        scsgmyqiwwwkwayy:
        smaisgmkkwgiqygi:
        goto uyyceeeqmoysskuw;
        aasiooeuekwqamyk:
    }
    
    public static function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok)
    {
        goto eguqaygayksgkoyq;
        ocickgekowkiqyuo:
        array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok);
        goto iqkysoyykewkkwes;
        oyqqsiciakemkgim:
        $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy));
        goto emaakmmcykwmmeum;
        iqkysoyykewkkwes:
        akequyeqowgagiek:
        goto sygasaomgiqoqmqs;
        emaakmmcykwmmeum:
        goto akequyeqowgagiek;
        goto quumskauyaouyyiy;
        quumskauyaouyyiy:
        iosgqqoyoiqgsgks:
        goto ocickgekowkiqyuo;
        eguqaygayksgkoyq:
        if (is_int($kuuiuigeacouwmaa)) {
            goto iosgqqoyoiqgsgks;
        }
        goto imscgsmqiswkeyka;
        imscgsmqiswkeyka:
        $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu));
        goto oyqqsiciakemkgim;
        sygasaomgiqoqmqs:
    }
    
    public static function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool
    {
        return count($uomewyckeuqoqocu) != count($uomewyckeuqoqocu, 1);
    }
    
    public static function wuoqgcwmkicakygs($uomewyckeuqoqocu) : bool
    {
        goto cgeimkqsoqqigogy;
        qgwmgswcikqsoymm:
        return $wuoqgcwmkicakygs;
        goto mkggwgyaywmiaeue;
        cgeimkqsoqqigogy:
        $wuoqgcwmkicakygs = false;
        goto ecawoqusqygmccmo;
        ecawoqusqygmccmo:
        if (!$uomewyckeuqoqocu) {
            goto kugoqmkkeqeoakik;
        }
        goto gocwqoqicukssssu;
        gocwqoqicukssssu:
        $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1);
        goto owasckmgeweqwsgq;
        owasckmgeweqwsgq:
        kugoqmkkeqeoakik:
        goto qgwmgswcikqsoymm;
        mkggwgyaywmiaeue:
    }
    
    public static function yaeiiwwyckwugsem($uomewyckeuqoqocu, $igaagwuyasawwqms = self::PRIORITY)
    {
        goto ssmcciyyscekqosk;
        ssmcciyyscekqosk:
        if (!is_array($uomewyckeuqoqocu)) {
            goto aoeccsiuoeigmwkm;
        }
        goto yymqcwmasyyamagq;
        yymqcwmasyyamagq:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms) {
            goto owsywiygoiqkyeey;
            nicoewqgywcusaci:
            goto ssgeyeewksygaeqm;
            goto wmggooiesmiaymyw;
            guqmiyswawmaggqw:
            if (!(method_exists($mmeioagwmyscwumo, $igaagwuyasawwqms) && method_exists($csougakqegqiqsgi, $igaagwuyasawwqms))) {
                goto okgmaysweamaymuk;
            }
            goto wyymkuqsaikomumi;
            aksioomuagcyawuk:
            return $uiuykcweuosgmwki;
            goto iuumiyikcwiiwuqk;
            wmggooiesmiaymyw:
            gueiogkegsiymgie:
            goto mwewkecyyqycwcyi;
            mwewkecyyqycwcyi:
            if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) {
                goto ouseeusmwgswgayi;
            }
            goto guqmiyswawmaggqw;
            cqqywmesqogkseku:
            qwcsgqgmmsscgsaa:
            goto eiakokiiwigccesk;
            eiakokiiwigccesk:
            ssgeyeewksygaeqm:
            goto aksioomuagcyawuk;
            aocqwuakameoqqme:
            ouseeusmwgswgayi:
            goto aykucyyeseggeeoy;
            qkiwmwgkosoiiqgo:
            ayoycomwascmkkkm:
            goto nicoewqgywcusaci;
            owsywiygoiqkyeey:
            $uiuykcweuosgmwki = false;
            goto soaekkoykikagyqa;
            gmoewkmwwyeaycgm:
            okgmaysweamaymuk:
            goto gykceoyygmmeawws;
            wyymkuqsaikomumi:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms}() <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}();
            goto gmoewkmwwyeaycgm;
            aykucyyeseggeeoy:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms};
            goto cqqywmesqogkseku;
            soaekkoykikagyqa:
            if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) {
                goto gueiogkegsiymgie;
            }
            goto amamemmaewcmqmso;
            amamemmaewcmqmso:
            if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) {
                goto ayoycomwascmkkkm;
            }
            goto ekmmomgayqemmaqm;
            ekmmomgayqemmaqm:
            $uiuykcweuosgmwki = self::get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> self::get($csougakqegqiqsgi, $igaagwuyasawwqms);
            goto qkiwmwgkosoiiqgo;
            gykceoyygmmeawws:
            goto qwcsgqgmmsscgsaa;
            goto aocqwuakameoqqme;
            iuumiyikcwiiwuqk:
        });
        goto iugskawkyskmcmyg;
        wsmwsckqgokueicw:
        return $uomewyckeuqoqocu;
        goto kuquyyieaicaecie;
        iugskawkyskmcmyg:
        aoeccsiuoeigmwkm:
        goto wsmwsckqgokueicw;
        kuquyyieaicaecie:
    }
    
    public static function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto cqgiaauymsygoomq;
        ocimykqskwaewuia:
        iaokmyigguukmcky:
        goto yccuogewgykqkkys;
        yccuogewgykqkkys:
        return $sogksuscggsicmac;
        goto qqewqyiwuaqaakwk;
        ewiqoyqagowquqqe:
        qayogkgwkuoycsuy:
        goto qyaiyaqcqsskmwos;
        useumocigsoceeus:
        if (is_array($oaiciiqoawkamweo)) {
            goto qayogkgwkuoycsuy;
        }
        goto aewewmmweiaeuewi;
        ogqswkqkcosuewgg:
        oeewiaeeicmwqyiw:
        goto gueusoewgqkcwkuq;
        qyaiyaqcqsskmwos:
        if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) {
            goto yicuaiowomkyaueg;
        }
        goto gcaoeocsuqqqyaym;
        ieqccoywksywcsky:
        yicuaiowomkyaueg:
        goto ocimykqskwaewuia;
        uwoayuwcsqsekywg:
        if (!isset($oaiciiqoawkamweo->{$uusmaiomayssaecw})) {
            goto oeewiaeeicmwqyiw;
        }
        goto sewmgsmcyiacccoa;
        sewmgsmcyiacccoa:
        $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw};
        goto ogqswkqkcosuewgg;
        gueusoewgqkcwkuq:
        gcqeiwgakokeuouq:
        goto acyyqeqgusyqaook;
        gcaoeocsuqqqyaym:
        $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw];
        goto ieqccoywksywcsky;
        acyyqeqgusyqaook:
        goto iaokmyigguukmcky;
        goto ewiqoyqagowquqqe;
        aewewmmweiaeuewi:
        if (!is_object($oaiciiqoawkamweo)) {
            goto gcqeiwgakokeuouq;
        }
        goto uwoayuwcsqsekywg;
        cqgiaauymsygoomq:
        $sogksuscggsicmac = $ggauoeuaesiymgee;
        goto useumocigsoceeus;
        qqewqyiwuaqaakwk:
    }
    
    public static function cswcewwmmicqesei($uomewyckeuqoqocu, $oegoegssokkyiqam) : array
    {
        goto iauoeqkuisgyagqc;
        iwumyigiscuuwqik:
        sewqmkouocccomww:
        goto scysiomisyamwocw;
        iauoeqkuisgyagqc:
        $sogksuscggsicmac = [];
        goto qmsoeugoyqquamqk;
        scysiomisyamwocw:
        return $sogksuscggsicmac;
        goto raqaugusyaieeuyi;
        qmsoeugoyqquamqk:
        foreach ($oegoegssokkyiqam as $ymqmyyeuycgmigyo => $mkomwsiykqigmqca) {
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = self::qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca);
            mmmkqsukesoasosu:
        }
        goto iwumyigiscuuwqik;
        raqaugusyaieeuyi:
    }
    
    public static function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null)
    {
        goto yqisgeugiuokowgw;
        yqisgeugiuokowgw:
        $yygmoeguaqyumuui = explode("\x2e", $mkomwsiykqigmqca);
        goto ceckikeaaasskwmo;
        amiessagaiiiiiei:
        return $uomewyckeuqoqocu;
        goto ewquwuoyeeiwkwuy;
        keoaaweuqeeoguyi:
        if ($uomewyckeuqoqocu) {
            goto kkgeeeaqoaoskogo;
        }
        goto saqyacsiqwmqgqkm;
        ceckikeaaasskwmo:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto yqyqsioacayucksc;
            kcaqocqaugkyiyys:
            if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) {
                goto oukqkimqsackseiw;
            }
            goto aqkgkwewsqkeyusm;
            kycykouooecoiyqw:
            goto wkisqogwyuawwiqo;
            goto yqygigmwumoksekw;
            kwickmmwwyqigccu:
            goto kagckqkwssikyaay;
            goto iiuwsswoayimgack;
            mkikcguagooeiace:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto gwgukcuckigmwoes;
            }
            goto awyaiyumyosuyewi;
            yukgigiiimqqwiyq:
            $uomewyckeuqoqocu = null;
            goto qaqemcccqogoummc;
            gwmwmaqgwkkamqmo:
            if (is_object($uomewyckeuqoqocu)) {
                goto swiiumgaagycwyoa;
            }
            goto yukgigiiimqqwiyq;
            aqkgkwewsqkeyusm:
            $uomewyckeuqoqocu = null;
            goto igeccyeusumcacea;
            ymqseyksqoouycio:
            if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) {
                goto uguyeawasakeoekq;
            }
            goto kcaqocqaugkyiyys;
            iiuwsswoayimgack:
            oukqkimqsackseiw:
            goto oiikekyiqeqogkua;
            aauqmqqqakiaqeqo:
            uisiuwgqougckasg:
            goto isymsqwwkmwkamuy;
            qeqquaucmqkmsmoq:
            uguyeawasakeoekq:
            goto weekmyeyqukcoegg;
            oiikekyiqeqogkua:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw};
            goto cmgayuowmaymuaiq;
            cmgayuowmaymuaiq:
            kagckqkwssikyaay:
            goto acgauasosqqysagi;
            igoocsoeousssema:
            ickouwcsecqeskwq:
            goto mkikcguagooeiace;
            yqygigmwumoksekw:
            gwgukcuckigmwoes:
            goto eceacmeaisaqssco;
            awyaiyumyosuyewi:
            $uomewyckeuqoqocu = null;
            goto wquqgqsyiccogoac;
            sqwyqsciuaceoaaa:
            wkisqogwyuawwiqo:
            goto uwkaywsgkmicamom;
            isymsqwwkmwkamuy:
            goto wwqikmmkomakgaou;
            goto igoocsoeousssema;
            wwaqsuwkskcooicq:
            swiiumgaagycwyoa:
            goto ymqseyksqoouycio;
            eceacmeaisaqssco:
            $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto sqwyqsciuaceoaaa;
            wquqgqsyiccogoac:
            goto wwscaygcymkwcoas;
            goto kycykouooecoiyqw;
            ucwyaykmcoikkkuo:
            skywgyiswsmassgq:
            goto aauqmqqqakiaqeqo;
            weekmyeyqukcoegg:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}();
            goto ucwyaykmcoikkkuo;
            oucwaucwcoegeaco:
            goto uisiuwgqougckasg;
            goto wwaqsuwkskcooicq;
            yqyqsioacayucksc:
            if (is_array($uomewyckeuqoqocu)) {
                goto ickouwcsecqeskwq;
            }
            goto gwmwmaqgwkkamqmo;
            oqmkiaqgogkikwes:
            iycuugwwawmiewmq:
            goto aaqqggkciwcemugy;
            igeccyeusumcacea:
            goto wwscaygcymkwcoas;
            goto kwickmmwwyqigccu;
            uwkaywsgkmicamom:
            wwqikmmkomakgaou:
            goto oqmkiaqgogkikwes;
            qaqemcccqogoummc:
            goto wwscaygcymkwcoas;
            goto oucwaucwcoegeaco;
            acgauasosqqysagi:
            goto skywgyiswsmassgq;
            goto qeqquaucmqkmsmoq;
            aaqqggkciwcemugy:
        }
        goto uwyckgawyyueaaym;
        saqyacsiqwmqgqkm:
        $uomewyckeuqoqocu = $ggauoeuaesiymgee;
        goto kkwcewqsaeyugawo;
        uwyckgawyyueaaym:
        wwscaygcymkwcoas:
        goto keoaaweuqeeoguyi;
        kkwcewqsaeyugawo:
        kkgeeeaqoaoskogo:
        goto amiessagaiiiiiei;
        ewquwuoyeeiwkwuy:
    }
    
    public static function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array
    {
        goto kqcusmuiyoqmeqwu;
        woagemomagskuyii:
        return $uomewyckeuqoqocu;
        goto gqoiqscswogsymcu;
        auiwyymoguwkooew:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) {
            return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw];
        });
        goto oaeweiaegakeieoi;
        iqgcumoueoaacgkc:
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true);
        goto yowsymiqiqgkmuuy;
        yowsymiqiqgkmuuy:
        ygsaygcskekuwgya:
        goto wewmsmwegeoqoeem;
        oaeweiaegakeieoi:
        if (!($uuyoeicyoayimaoa > 0)) {
            goto ygsaygcskekuwgya;
        }
        goto iqgcumoueoaacgkc;
        wewmsmwegeoqoeem:
        keqgmaemoceqssyy:
        goto woagemomagskuyii;
        kqcusmuiyoqmeqwu:
        if (!is_array($uomewyckeuqoqocu)) {
            goto keqgmaemoceqssyy;
        }
        goto auiwyymoguwkooew;
        gqoiqscswogsymcu:
    }
    
    public static function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array
    {
        goto egaqukiucuckkqai;
        egaqukiucuckkqai:
        $sogksuscggsicmac = [];
        goto osmciccqwowieume;
        osmciccqwowieume:
        if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) {
            goto keakmgioceekisuk;
        }
        goto boekkoaekyqaemmq;
        kskoukygaaicomgy:
        return $sogksuscggsicmac;
        goto aoueogeoyisucaiq;
        mcqimygcwcqcssky:
        cusoaecwsaeckaie:
        goto awmyswwkwqgugmmy;
        eqqgiigwkciiksuo:
        foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) {
            goto cuwayimcsiycgmim;
            qeggaicaycsqqkio:
            qgaeuqkwwoikwsus:
            goto kgisumcygmcgyemm;
            cuwayimcsiycgmim:
            if (is_numeric($ewyuweyoskiagksm)) {
                goto ggyqoucwiyqucqsi;
            }
            goto sgkayqyykwuagyiu;
            ggiycasgekosqyqk:
            cgoaqiqsuomgmysm:
            goto usggsqksmaaukmqq;
            sgkayqyykwuagyiu:
            $uusmaiomayssaecw = $ewyuweyoskiagksm;
            goto nwckgaiueoigasee;
            kuiicmskwegaoggu:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto ggiycasgekosqyqk;
            eocckcsgsycuywyi:
            goto qgaeuqkwwoikwsus;
            goto emiosiemcoyoeoou;
            nwckgaiueoigasee:
            $ggauoeuaesiymgee = $uauoccoqcsaeggui;
            goto eocckcsgsycuywyi;
            emiosiemcoyoeoou:
            ggyqoucwiyqucqsi:
            goto sscoeeyeeggsckyo;
            kgisumcygmcgyemm:
            $eqgoocgaqwqcimie = self::get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto yesicceuyqcyysue;
            aksaumeeuqawgwmi:
            $sogksuscggsicmac[] = $eqgoocgaqwqcimie;
            goto qmuqwqmumcayeiku;
            mskqaucggqcumquk:
            kummaeaoeksaiasa:
            goto kuiicmskwegaoggu;
            qmuqwqmumcayeiku:
            goto cgoaqiqsuomgmysm;
            goto mskqaucggqcumquk;
            ikuauuskoukskkmo:
            $eqgoocgaqwqcimie = call_user_func($ekiuyucoiagmscgy, $eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto kgoeamguscusyywe;
            yesicceuyqcyysue:
            if (!is_callable($ekiuyucoiagmscgy)) {
                goto ogmcsmoewwocmkme;
            }
            goto ikuauuskoukskkmo;
            usggsqksmaaukmqq:
            iymqokemgwcsgeiu:
            goto wuuqskwuoeacgacg;
            sscoeeyeeggsckyo:
            $uusmaiomayssaecw = $uauoccoqcsaeggui;
            goto qeggaicaycsqqkio;
            wewusiqwsukukkms:
            if ($mywqgwsimwoeoawk) {
                goto kummaeaoeksaiasa;
            }
            goto aksaumeeuqawgwmi;
            kgoeamguscusyywe:
            ogmcsmoewwocmkme:
            goto wewusiqwsukukkms;
            wuuqskwuoeacgacg:
        }
        goto mcqimygcwcqcssky;
        awmyswwkwqgugmmy:
        keakmgioceekisuk:
        goto kskoukygaaicomgy;
        boekkoaekyqaemmq:
        $ggauoeuaesiymgee = '';
        goto eqqgiigwkciiksuo;
        aoueogeoyisucaiq:
    }
    
    public static function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = [])
    {
        goto yksiaqaciswymeim;
        yksiaqaciswymeim:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto ooyqgwsoeyqoucae;
        }
        goto gsggsgayikymekok;
        gsggsgayikymekok:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) {
            goto ugqsesmesggiqaos;
            mieaoqwgaukeysis:
            qoeiqqmskcqeaiug:
            goto kokuyqgigassuuoc;
            qsieyoiaoiqaumus:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu;
            goto mieaoqwgaukeysis;
            komsqawwueueiuag:
            oeoaqooaouowkwec:
            goto ckeccumaeeuamqem;
            ygyugquqaqegwioo:
            $sogksuscggsicmac = self::kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac);
            goto komsqawwueueiuag;
            kawkmiguwoooksec:
            if ($xkqaigkogigocask) {
                goto yiisikkiqosawsgu;
            }
            goto iiigksqqskiumiqi;
            kokuyqgigassuuoc:
            goto oeoaqooaouowkwec;
            goto yaekwuquieusamyw;
            ckeccumaeeuamqem:
            akeowgkiskougikg:
            goto oywuqkssgiiumuis;
            ugqsesmesggiqaos:
            if (is_array($esquqsuaumgwoewu)) {
                goto kewcuamqaiyeayio;
            }
            goto kawkmiguwoooksec;
            gwqicekgscayqcuq:
            yiisikkiqosawsgu:
            goto qsieyoiaoiqaumus;
            qywsmseiceqecigi:
            goto qoeiqqmskcqeaiug;
            goto gwqicekgscayqcuq;
            yaekwuquieusamyw:
            kewcuamqaiyeayio:
            goto ygyugquqaqegwioo;
            iiigksqqskiumiqi:
            $sogksuscggsicmac[] = $esquqsuaumgwoewu;
            goto qywsmseiceqecigi;
            oywuqkssgiiumuis:
        }
        goto scgqkqkwimicokau;
        scgqkqkwimicokau:
        muowkaagoqiyegme:
        goto ouumywcisskmgyio;
        ouumywcisskmgyio:
        ooyqgwsoeyqoucae:
        goto ekwoimwoqucawyis;
        ekwoimwoqucawyis:
        return $sogksuscggsicmac;
        goto iqskmoysaamkuoim;
        iqskmoysaamkuoim:
    }
    
    public static function qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $aumugyockeskamiq, $gymeemoisimggcww = true) : array
    {
        goto qayyssyasegwkuwi;
        ceqkmcaycyskmoia:
        $ggkaciewmeqmgckg = array_slice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)), true);
        goto womkaomokgseakue;
        emqiswoqkweuamuw:
        wmwqumcksgkckeae:
        goto ogigeoakcogugeym;
        agckaqmuskakeumg:
        ewowkiosiisoacse:
        goto emqiswoqkweuamuw;
        wsumwkwmcygcqyaa:
        $ggkaciewmeqmgckg = array_splice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)));
        goto gkwkcgcewcecmgoe;
        uocisouiiqciywim:
        iiiaciykaukmuiwu:
        goto smwmewocqywykcou;
        euayciwoioqckyoi:
        ceimuucmqmuygqiu:
        goto gqwkiummucquoece;
        gqwkiummucquoece:
        goto wmwqumcksgkckeae;
        goto uocisouiiqciywim;
        qaymskucssiyeasw:
        unset($ggkaciewmeqmgckg[$aumugyockeskamiq]);
        goto symyoqqgcwomyksw;
        gkwkcgcewcecmgoe:
        uowumqmesgawkcme:
        goto qaymskucssiyeasw;
        agameskciseayqqy:
        kemciyisiqsemmwm:
        goto wsumwkwmcygcqyaa;
        qsemsoimoauiccmm:
        if ($gymeemoisimggcww) {
            goto kemciyisiqsemmwm;
        }
        goto ceqkmcaycyskmoia;
        sgsmmgiuyuukgsyi:
        $aseguuimuokgcami = [$aumugyockeskamiq => $uomewyckeuqoqocu[$aumugyockeskamiq]];
        goto qsemsoimoauiccmm;
        womkaomokgseakue:
        goto uowumqmesgawkcme;
        goto agameskciseayqqy;
        qayyssyasegwkuwi:
        if (is_array($aumugyockeskamiq)) {
            goto iiiaciykaukmuiwu;
        }
        goto qwyuicgesgumuuum;
        symyoqqgcwomyksw:
        $uomewyckeuqoqocu = $ggkaciewmeqmgckg + $aseguuimuokgcami + $uomewyckeuqoqocu;
        goto euayciwoioqckyoi;
        smwmewocqywykcou:
        foreach ($aumugyockeskamiq as $igqsaukqcqscimok) {
            $uomewyckeuqoqocu = self::qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $igqsaukqcqscimok, $gymeemoisimggcww);
            awsiakgwsaqyiggo:
        }
        goto agckaqmuskakeumg;
        ogigeoakcogugeym:
        return $uomewyckeuqoqocu;
        goto iisiamyqqaaoykga;
        qwyuicgesgumuuum:
        if (!isset($uomewyckeuqoqocu[$ksiyqouuaoymsycg], $uomewyckeuqoqocu[$aumugyockeskamiq])) {
            goto ceimuucmqmuygqiu;
        }
        goto sgsmmgiuyuukgsyi;
        iisiamyqqaaoykga:
    }
    
    public static function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array
    {
        goto mooomiuasyggqsis;
        quqkqymwqwywgesy:
        $uiymkeeaukcyqqik = null;
        goto cmagkaygaemaaici;
        yukmmiscasoogmyu:
        return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik];
        goto usmksyiucoeycycc;
        cmagkaygaemaaici:
        $aqeywoskqiugcmye = null;
        goto wwiqmgogkuoaucyc;
        siaagaokcmgeuimo:
        osckyscuccyeyiea:
        goto yukmmiscasoogmyu;
        wwiqmgogkuoaucyc:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
            goto gkscusucwgaoooso;
            yymmqiaisemuayke:
            oqewauiqmkiiaiqe:
            goto ysyiewokqwgckeko;
            gkscusucwgaoooso:
            if (key_exists($momcykaoccoymeig, $couiucmsqaieciue)) {
                goto oqewauiqmkiiaiqe;
            }
            goto yaacmieqceeiyuii;
            saqmoqaeaoqmaaqo:
            oeqecewccwqsqmmc:
            goto uqgqukmekkieakco;
            gmwiocukkqksiwkk:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
            goto saqmoqaeaoqmaaqo;
            ykeogiauqegcimwm:
            kmwckweaaawgkumy:
            goto yymmqiaisemuayke;
            ggcewuaywkywgcoa:
            $uiymkeeaukcyqqik = $eqgoocgaqwqcimie;
            goto wuiuuyooeukyiois;
            gocscsauukioowcq:
            if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) {
                goto kkmyoieguiwecakw;
            }
            goto iauekwigiwssawke;
            ysyiewokqwgckeko:
            guseeaqsaueqcweo:
            goto uqmsgooywggqywam;
            iauekwigiwssawke:
            $giqggecqqikcysgq = $ykiwomimkkuiigoq;
            goto ggcewuaywkywgcoa;
            yaacmieqceeiyuii:
            if (!is_object($eqgoocgaqwqcimie)) {
                goto oeqecewccwqsqmmc;
            }
            goto gmwiocukkqksiwkk;
            wuiuuyooeukyiois:
            $aqeywoskqiugcmye = $momcykaoccoymeig;
            goto gqkwumcquuuwoqkw;
            uqgqukmekkieakco:
            if (!is_string($eqgoocgaqwqcimie)) {
                goto kmwckweaaawgkumy;
            }
            goto gakuaukecwikgsmc;
            gqkwumcquuuwoqkw:
            kkmyoieguiwecakw:
            goto ykeogiauqegcimwm;
            gakuaukecwikgsmc:
            $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
            goto gocscsauukioowcq;
            uqmsgooywggqywam:
        }
        goto siaagaokcmgeuimo;
        mooomiuasyggqsis:
        $giqggecqqikcysgq = 0;
        goto quqkqymwqwywgesy;
        usmksyiucoeycycc:
    }
    
    public static function ksiyqouuaoymsycg(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, $momcykaoccoymeig = false)
    {
        goto agksoawkuoguyeio;
        agksoawkuoguyeio:
        $ksiyqouuaoymsycg = null;
        goto caumcscgkmkqgceq;
        caumcscgkmkqgceq:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto ayugswgkeymseuoe;
            sossqwuskoaguiie:
            $ksiyqouuaoymsycg = $momcykaoccoymeig;
            goto qiakkkgsokqowqkg;
            ayugswgkeymseuoe:
            $esoaccosseymguso = self::qamwegcyimgcqksw($igqsaukqcqscimok, $mkomwsiykqigmqca);
            goto yaumammegwowmsqu;
            ycwsommucswweyww:
            if ($momcykaoccoymeig) {
                goto uamoquqaiywkyigy;
            }
            goto moigkuskomyqceuu;
            usomesuioqacuiwm:
            uamoquqaiywkyigy:
            goto sossqwuskoaguiie;
            guukcuckowqqgqag:
            goto ucmuqycsksssuyku;
            goto kumeocwaamwuggmy;
            yaumammegwowmsqu:
            if (!($esoaccosseymguso == $qwcmueausqgiwigy)) {
                goto iaqaecisewceswme;
            }
            goto ycwsommucswweyww;
            moigkuskomyqceuu:
            $ksiyqouuaoymsycg = $igqsaukqcqscimok;
            goto aaqiiwuwmyqqekwm;
            yyyqqsuawgwkayme:
            eoyqkmiwoiyecqiq:
            goto kimmqccoykmmokim;
            kumeocwaamwuggmy:
            iaqaecisewceswme:
            goto yyyqqsuawgwkayme;
            aaqiiwuwmyqqekwm:
            goto yocoiwekswmeqosg;
            goto usomesuioqacuiwm;
            qiakkkgsokqowqkg:
            yocoiwekswmeqosg:
            goto guukcuckowqqgqag;
            kimmqccoykmmokim:
        }
        goto ycywkayeqeumswqg;
        ycywkayeqeumswqg:
        ucmuqycsksssuyku:
        goto ecikmukcoqciisue;
        ecikmukcoqciisue:
        return $ksiyqouuaoymsycg;
        goto imiuiucewegueuic;
        imiuiucewegueuic:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateArray extends Common
{
    
    public static function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw)
    {
        goto ewkqiewssocsquuo;
        gggogewkqkskuicm:
        yusagekewyiqqqyk:
        goto ywumqymqkuyegcae;
        mmgoicukswqwseoc:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
        goto yaawcswsqyucgsus;
        ewkqiewssocsquuo:
        $eqgoocgaqwqcimie = null;
        goto qeaowsgcqsuccawg;
        yaawcswsqyucgsus:
        unset($uomewyckeuqoqocu[$uusmaiomayssaecw]);
        goto ewcysecswgsugswi;
        esqkgmaasckugmqo:
        goto yusagekewyiqqqyk;
        goto ygqaaocooiqkugos;
        ewcysecswgsugswi:
        eiseywwywkwcwgcq:
        goto esqkgmaasckugmqo;
        yaawiccsokmgweye:
        if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
            goto eiseywwywkwcwgcq;
        }
        goto mmgoicukswqwseoc;
        cksyaoquscmmscke:
        $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw));
        goto gggogewkqkskuicm;
        qeaowsgcqsuccawg:
        if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) {
            goto asumyiuqmmywiwyc;
        }
        goto kamukeioemqucmmg;
        ygqaaocooiqkugos:
        swagceggcwqkcgkg:
        goto cksyaoquscmmscke;
        ycesoqquooyiwusg:
        return $eqgoocgaqwqcimie;
        goto kymsyoeswiuqoeam;
        ywumqymqkuyegcae:
        asumyiuqmmywiwyc:
        goto ycesoqquooyiwusg;
        kamukeioemqucmmg:
        if (is_array($uusmaiomayssaecw)) {
            goto swagceggcwqkcgkg;
        }
        goto yaawiccsokmgweye;
        kymsyoeswiuqoeam:
    }
    
    public static function set($oaiciiqoawkamweo, $uwomkgseoiegeume = [])
    {
        goto gmmwicowkqiisogm;
        cuqccemgkguqycgc:
        return $oaiciiqoawkamweo;
        goto aoseoaeigamewkyg;
        cieamqmwwegyukgc:
        iawwywggiwmigeiy:
        goto cuqccemgkguqycgc;
        wwykqesuwsqiwyiw:
        $awqscowmskeuymeu = is_object($oaiciiqoawkamweo);
        goto aucikuqogioweysy;
        uykcicoeacqaykia:
        oeoawwmyiaaaieoy:
        goto cieamqmwwegyukgc;
        oogwiuueieywymio:
        $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo);
        goto wwykqesuwsqiwyiw;
        aucikuqogioweysy:
        foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto mksesqkqwqwyiski;
            kmawkwiiceqawowo:
            uqkuaiqggmmqkwcg:
            goto mgskwyqqysgqegwe;
            mksesqkqwqwyiski:
            if ($casemmqcsgmemwyg) {
                goto cyewimeguwgissoe;
            }
            goto ecoqoquwuygscmai;
            sqeucqqqmoqcuuem:
            goto uqkuaiqggmmqkwcg;
            goto ocguegwcwgegqugs;
            gmmukayqkigwksam:
            $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto kmawkwiiceqawowo;
            gooaiamwaqiueqag:
            $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie;
            goto akiawysiwswoqmee;
            ocguegwcwgegqugs:
            cyewimeguwgissoe:
            goto gmmukayqkigwksam;
            mgskwyqqysgqegwe:
            swasyymuuuesyssc:
            goto omggqawmwgeoiawc;
            ecoqoquwuygscmai:
            if (!$awqscowmskeuymeu) {
                goto ogyecgyqquwgcugi;
            }
            goto gooaiamwaqiueqag;
            akiawysiwswoqmee:
            ogyecgyqquwgcugi:
            goto sqeucqqqmoqcuuem;
            omggqawmwgeoiawc:
        }
        goto uykcicoeacqaykia;
        gmmwicowkqiisogm:
        if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) {
            goto iawwywggiwmigeiy;
        }
        goto oogwiuueieywymio;
        aoseoaeigamewkyg:
    }
    
    public static function isset($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto wscswagewsegyiyc;
        oaiigcusecmsciso:
        $ksaameoqigiaoigg = false;
        goto yucmysyskmgwsowg;
        ucqcuosmqwiiwigm:
        wgccsswsaiqccecw:
        goto aasyamqyqesqqwkm;
        wscswagewsegyiyc:
        $ksaameoqigiaoigg = true;
        goto uyqcwcgaswkaaqys;
        uyqcwcgaswkaaqys:
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && is_array($yygmoeguaqyumuui) && $yygmoeguaqyumuui) {
            goto wgccsswsaiqccecw;
        }
        goto oaiigcusecmsciso;
        gomagoumaosyimii:
        kuekasacwyquuiqy:
        goto cucceeoseaagcoam;
        aasyamqyqesqqwkm:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto iscuuwgoaosayimo;
            umkkwyaciakygsgo:
            $ksaameoqigiaoigg = false;
            goto waoqqaimmwkqikay;
            ocqymsowceymagky:
            muukgiowiywgysuy:
            goto oqsieegccekksmek;
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
            moceysouasysuwwk:
        }
        goto gomagoumaosyimii;
        yucmysyskmgwsowg:
        goto qyuigkqusowucaqq;
        goto ucqcuosmqwiiwigm;
        cucceeoseaagcoam:
        qyuigkqusowucaqq:
        goto qsyimuywgcsoiecu;
        qsyimuywgcsoiecu:
        return $ksaameoqigiaoigg;
        goto qeqwkkggucamquwc;
        qeqwkkggucamquwc:
    }
    
    public static function gymccqywkegiqiiw($uomewyckeuqoqocu) : int
    {
        goto aokseecsgimieouu;
        ieiwqimgggeoaqwm:
        $iukyueweicuocgow = rand(0, count($uomewyckeuqoqocu) - 1);
        goto cseioaeaywcuekge;
        yokyoayigkwweqeg:
        return $iukyueweicuocgow;
        goto ykyqsgogqywswoua;
        cseioaeaywcuekge:
        ksowgigyiiocmmay:
        goto yokyoayigkwweqeg;
        euqaywkcamscaugi:
        if (!$uomewyckeuqoqocu) {
            goto ksowgigyiiocmmay;
        }
        goto ieiwqimgggeoaqwm;
        aokseecsgimieouu:
        $iukyueweicuocgow = 0;
        goto euqaywkcamscaugi;
        ykyqsgogqywswoua:
    }
    
    public static function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto qigeyewuukwwousm;
        ygseoaiecssiymec:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto qkcgewmwssuaewie;
            iyociciyeiswkaqk:
            $ksaameoqigiaoigg = true;
            goto qummwcsgemgwqwga;
            qkcgewmwssuaewie:
            if (self::get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) {
                goto hkokwccuegwgeegk;
            }
            goto iyociciyeiswkaqk;
            qeyssuuycyyguuyo:
            gwsqeeiwciqccasw:
            goto iqwsaiomwmyeusaq;
            gouyoowcwkccwewk:
            hkokwccuegwgeegk:
            goto qeyssuuycyyguuyo;
            qummwcsgemgwqwga:
            goto gmiacescgeoqcogu;
            goto gouyoowcwkccwewk;
            iqwsaiomwmyeusaq:
        }
        goto agqgaiqiwcgowsoi;
        owswisaiecssuwwu:
        kaoukeiiiuquqgsm:
        goto oowwickgsmcqamqe;
        imeiskyssuamssoq:
        if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) {
            goto kaoukeiiiuquqgsm;
        }
        goto ygseoaiecssiymec;
        qigeyewuukwwousm:
        $ksaameoqigiaoigg = false;
        goto imeiskyssuamssoq;
        agqgaiqiwcgowsoi:
        gmiacescgeoqcogu:
        goto owswisaiecssuwwu;
        oowwickgsmcqamqe:
        return $ksaameoqigiaoigg;
        goto kyaismgimkqkcmey;
        kyaismgimkqkcmey:
    }
    
    public static function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie)
    {
        goto iswsmaumaacmwcwu;
        scsgmyqiwwwkwayy:
        $qcgkuqesqqymcuui = false;
        goto uyyceeeqmoysskuw;
        qqgsggygqommqmkw:
        return $qcgkuqesqqymcuui;
        goto aiskggeswyweiogy;
        ccgiykywckmyiscg:
        smaisgmkkwgiqygi:
        goto qqgsggygqommqmkw;
        qucwqsuacqkymwsm:
        $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie];
        goto myissqmgymuauowq;
        uyyceeeqmoysskuw:
        foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) {
            goto ecqyggsgiqweeyee;
            ecqyggsgiqweeyee:
            $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu);
            goto qykwyyyeyygkiqmi;
            ugaoskycwsqcesko:
            geyksaceayaiwiiy:
            goto wyuommoqmyaeiswc;
            okmawomkamqiwesm:
            $qcgkuqesqqymcuui = self::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            goto ugaoskycwsqcesko;
            wyuommoqmyaeiswc:
            umyquqiugigqmkau:
            goto kocagcykiyimkmoa;
            qykwyyyeyygkiqmi:
            if (!($uusmaiomayssaecw !== false)) {
                goto geyksaceayaiwiiy;
            }
            goto okmawomkamqiwesm;
            kocagcykiyimkmoa:
        }
        goto ccgiykywckmyiscg;
        myissqmgymuauowq:
        miqsgoqewuokegig:
        goto scsgmyqiwwwkwayy;
        iswsmaumaacmwcwu:
        $qcgkuqesqqymcuui = null;
        goto rasgkseukaaqecam;
        rasgkseukaaqecam:
        if (is_array($eqgoocgaqwqcimie)) {
            goto miqsgoqewuokegig;
        }
        goto qucwqsuacqkymwsm;
        aiskggeswyweiogy:
    }
    
    public static function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok)
    {
        goto akequyeqowgagiek;
        quumskauyaouyyiy:
        array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok);
        goto ocickgekowkiqyuo;
        imscgsmqiswkeyka:
        $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy));
        goto oyqqsiciakemkgim;
        akequyeqowgagiek:
        if (is_int($kuuiuigeacouwmaa)) {
            goto aasiooeuekwqamyk;
        }
        goto eguqaygayksgkoyq;
        emaakmmcykwmmeum:
        aasiooeuekwqamyk:
        goto quumskauyaouyyiy;
        oyqqsiciakemkgim:
        goto iosgqqoyoiqgsgks;
        goto emaakmmcykwmmeum;
        ocickgekowkiqyuo:
        iosgqqoyoiqgsgks:
        goto iqkysoyykewkkwes;
        eguqaygayksgkoyq:
        $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu));
        goto imscgsmqiswkeyka;
        iqkysoyykewkkwes:
    }
    
    public static function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool
    {
        return count($uomewyckeuqoqocu) != count($uomewyckeuqoqocu, 1);
    }
    
    public static function wuoqgcwmkicakygs($uomewyckeuqoqocu) : bool
    {
        goto kugoqmkkeqeoakik;
        ecawoqusqygmccmo:
        $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1);
        goto gocwqoqicukssssu;
        gocwqoqicukssssu:
        sygasaomgiqoqmqs:
        goto owasckmgeweqwsgq;
        cgeimkqsoqqigogy:
        if (!$uomewyckeuqoqocu) {
            goto sygasaomgiqoqmqs;
        }
        goto ecawoqusqygmccmo;
        kugoqmkkeqeoakik:
        $wuoqgcwmkicakygs = false;
        goto cgeimkqsoqqigogy;
        owasckmgeweqwsgq:
        return $wuoqgcwmkicakygs;
        goto qgwmgswcikqsoymm;
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
        yymqcwmasyyamagq:
        iuumiyikcwiiwuqk:
        goto iugskawkyskmcmyg;
        iugskawkyskmcmyg:
        return $uomewyckeuqoqocu;
        goto wsmwsckqgokueicw;
        ssmcciyyscekqosk:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms) {
            goto ssgeyeewksygaeqm;
            ssgeyeewksygaeqm:
            $uiuykcweuosgmwki = false;
            goto owsywiygoiqkyeey;
            wmggooiesmiaymyw:
            if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) {
                goto okgmaysweamaymuk;
            }
            goto mwewkecyyqycwcyi;
            owsywiygoiqkyeey:
            if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) {
                goto ayoycomwascmkkkm;
            }
            goto soaekkoykikagyqa;
            cqqywmesqogkseku:
            gueiogkegsiymgie:
            goto eiakokiiwigccesk;
            amamemmaewcmqmso:
            $uiuykcweuosgmwki = self::get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> self::get($csougakqegqiqsgi, $igaagwuyasawwqms);
            goto ekmmomgayqemmaqm;
            gykceoyygmmeawws:
            okgmaysweamaymuk:
            goto aocqwuakameoqqme;
            aocqwuakameoqqme:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms};
            goto aykucyyeseggeeoy;
            mwewkecyyqycwcyi:
            if (!(method_exists($mmeioagwmyscwumo, $igaagwuyasawwqms) && method_exists($csougakqegqiqsgi, $igaagwuyasawwqms))) {
                goto mkggwgyaywmiaeue;
            }
            goto guqmiyswawmaggqw;
            aykucyyeseggeeoy:
            ouseeusmwgswgayi:
            goto cqqywmesqogkseku;
            ekmmomgayqemmaqm:
            qwcsgqgmmsscgsaa:
            goto qkiwmwgkosoiiqgo;
            nicoewqgywcusaci:
            ayoycomwascmkkkm:
            goto wmggooiesmiaymyw;
            soaekkoykikagyqa:
            if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) {
                goto qwcsgqgmmsscgsaa;
            }
            goto amamemmaewcmqmso;
            qkiwmwgkosoiiqgo:
            goto gueiogkegsiymgie;
            goto nicoewqgywcusaci;
            wyymkuqsaikomumi:
            mkggwgyaywmiaeue:
            goto gmoewkmwwyeaycgm;
            gmoewkmwwyeaycgm:
            goto ouseeusmwgswgayi;
            goto gykceoyygmmeawws;
            eiakokiiwigccesk:
            return $uiuykcweuosgmwki;
            goto aksioomuagcyawuk;
            guqmiyswawmaggqw:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms}() <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}();
            goto wyymkuqsaikomumi;
            aksioomuagcyawuk:
        });
        goto yymqcwmasyyamagq;
        wsmwsckqgokueicw:
    }
    
    public static function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto iaokmyigguukmcky;
        acyyqeqgusyqaook:
        gcqeiwgakokeuouq:
        goto ewiqoyqagowquqqe;
        uwoayuwcsqsekywg:
        $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw};
        goto sewmgsmcyiacccoa;
        sewmgsmcyiacccoa:
        yicuaiowomkyaueg:
        goto ogqswkqkcosuewgg;
        useumocigsoceeus:
        if (!is_object($oaiciiqoawkamweo)) {
            goto oeewiaeeicmwqyiw;
        }
        goto aewewmmweiaeuewi;
        gueusoewgqkcwkuq:
        goto qayogkgwkuoycsuy;
        goto acyyqeqgusyqaook;
        aewewmmweiaeuewi:
        if (!isset($oaiciiqoawkamweo->{$uusmaiomayssaecw})) {
            goto yicuaiowomkyaueg;
        }
        goto uwoayuwcsqsekywg;
        cqgiaauymsygoomq:
        if (is_array($oaiciiqoawkamweo)) {
            goto gcqeiwgakokeuouq;
        }
        goto useumocigsoceeus;
        iaokmyigguukmcky:
        $sogksuscggsicmac = $ggauoeuaesiymgee;
        goto cqgiaauymsygoomq;
        gcaoeocsuqqqyaym:
        kuquyyieaicaecie:
        goto ieqccoywksywcsky;
        ewiqoyqagowquqqe:
        if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) {
            goto kuquyyieaicaecie;
        }
        goto qyaiyaqcqsskmwos;
        ocimykqskwaewuia:
        return $sogksuscggsicmac;
        goto yccuogewgykqkkys;
        ieqccoywksywcsky:
        qayogkgwkuoycsuy:
        goto ocimykqskwaewuia;
        qyaiyaqcqsskmwos:
        $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw];
        goto gcaoeocsuqqqyaym;
        ogqswkqkcosuewgg:
        oeewiaeeicmwqyiw:
        goto gueusoewgqkcwkuq;
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
        ceckikeaaasskwmo:
        raqaugusyaieeuyi:
        goto uwyckgawyyueaaym;
        saqyacsiqwmqgqkm:
        aaqqggkciwcemugy:
        goto kkwcewqsaeyugawo;
        uwyckgawyyueaaym:
        if ($uomewyckeuqoqocu) {
            goto aaqqggkciwcemugy;
        }
        goto keoaaweuqeeoguyi;
        kkwcewqsaeyugawo:
        return $uomewyckeuqoqocu;
        goto amiessagaiiiiiei;
        keoaaweuqeeoguyi:
        $uomewyckeuqoqocu = $ggauoeuaesiymgee;
        goto saqyacsiqwmqgqkm;
        kkgeeeaqoaoskogo:
        $yygmoeguaqyumuui = explode("\x2e", $mkomwsiykqigmqca);
        goto yqisgeugiuokowgw;
        yqisgeugiuokowgw:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto wwqikmmkomakgaou;
            aauqmqqqakiaqeqo:
            goto ickouwcsecqeskwq;
            goto isymsqwwkmwkamuy;
            iiuwsswoayimgack:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw};
            goto oiikekyiqeqogkua;
            yukgigiiimqqwiyq:
            goto raqaugusyaieeuyi;
            goto qaqemcccqogoummc;
            wquqgqsyiccogoac:
            goto gwgukcuckigmwoes;
            goto kycykouooecoiyqw;
            acgauasosqqysagi:
            kagckqkwssikyaay:
            goto qeqquaucmqkmsmoq;
            isymsqwwkmwkamuy:
            uisiuwgqougckasg:
            goto igoocsoeousssema;
            qaqemcccqogoummc:
            goto swiiumgaagycwyoa;
            goto oucwaucwcoegeaco;
            ymqseyksqoouycio:
            if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) {
                goto wkisqogwyuawwiqo;
            }
            goto kcaqocqaugkyiyys;
            ucwyaykmcoikkkuo:
            swiiumgaagycwyoa:
            goto aauqmqqqakiaqeqo;
            mkikcguagooeiace:
            $uomewyckeuqoqocu = null;
            goto awyaiyumyosuyewi;
            kcaqocqaugkyiyys:
            $uomewyckeuqoqocu = null;
            goto aqkgkwewsqkeyusm;
            oiikekyiqeqogkua:
            oukqkimqsackseiw:
            goto cmgayuowmaymuaiq;
            yqygigmwumoksekw:
            $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto eceacmeaisaqssco;
            igoocsoeousssema:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto iycuugwwawmiewmq;
            }
            goto mkikcguagooeiace;
            oucwaucwcoegeaco:
            skywgyiswsmassgq:
            goto wwaqsuwkskcooicq;
            sqwyqsciuaceoaaa:
            ickouwcsecqeskwq:
            goto uwkaywsgkmicamom;
            cmgayuowmaymuaiq:
            goto uguyeawasakeoekq;
            goto acgauasosqqysagi;
            aqkgkwewsqkeyusm:
            goto raqaugusyaieeuyi;
            goto igeccyeusumcacea;
            wwqikmmkomakgaou:
            if (is_array($uomewyckeuqoqocu)) {
                goto uisiuwgqougckasg;
            }
            goto yqyqsioacayucksc;
            eceacmeaisaqssco:
            gwgukcuckigmwoes:
            goto sqwyqsciuaceoaaa;
            gwmwmaqgwkkamqmo:
            $uomewyckeuqoqocu = null;
            goto yukgigiiimqqwiyq;
            yqyqsioacayucksc:
            if (is_object($uomewyckeuqoqocu)) {
                goto skywgyiswsmassgq;
            }
            goto gwmwmaqgwkkamqmo;
            qeqquaucmqkmsmoq:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}();
            goto weekmyeyqukcoegg;
            kwickmmwwyqigccu:
            wkisqogwyuawwiqo:
            goto iiuwsswoayimgack;
            kycykouooecoiyqw:
            iycuugwwawmiewmq:
            goto yqygigmwumoksekw;
            igeccyeusumcacea:
            goto oukqkimqsackseiw;
            goto kwickmmwwyqigccu;
            wwaqsuwkskcooicq:
            if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) {
                goto kagckqkwssikyaay;
            }
            goto ymqseyksqoouycio;
            weekmyeyqukcoegg:
            uguyeawasakeoekq:
            goto ucwyaykmcoikkkuo;
            uwkaywsgkmicamom:
            wwscaygcymkwcoas:
            goto oqmkiaqgogkikwes;
            awyaiyumyosuyewi:
            goto raqaugusyaieeuyi;
            goto wquqgqsyiccogoac;
            oqmkiaqgogkikwes:
        }
        goto ceckikeaaasskwmo;
        amiessagaiiiiiei:
    }
    
    public static function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array
    {
        goto keqgmaemoceqssyy;
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
        yowsymiqiqgkmuuy:
        ygsaygcskekuwgya:
        goto wewmsmwegeoqoeem;
        keqgmaemoceqssyy:
        if (!is_array($uomewyckeuqoqocu)) {
            goto ygsaygcskekuwgya;
        }
        goto kqcusmuiyoqmeqwu;
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
        eqqgiigwkciiksuo:
        gqoiqscswogsymcu:
        goto mcqimygcwcqcssky;
        egaqukiucuckkqai:
        if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) {
            goto wuuqskwuoeacgacg;
        }
        goto osmciccqwowieume;
        mcqimygcwcqcssky:
        wuuqskwuoeacgacg:
        goto awmyswwkwqgugmmy;
        awmyswwkwqgugmmy:
        return $sogksuscggsicmac;
        goto kskoukygaaicomgy;
        boekkoaekyqaemmq:
        foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) {
            goto cgoaqiqsuomgmysm;
            sgkayqyykwuagyiu:
            $ggauoeuaesiymgee = $uauoccoqcsaeggui;
            goto nwckgaiueoigasee;
            emiosiemcoyoeoou:
            $uusmaiomayssaecw = $uauoccoqcsaeggui;
            goto sscoeeyeeggsckyo;
            aksaumeeuqawgwmi:
            goto kummaeaoeksaiasa;
            goto qmuqwqmumcayeiku;
            eocckcsgsycuywyi:
            iymqokemgwcsgeiu:
            goto emiosiemcoyoeoou;
            qeggaicaycsqqkio:
            $eqgoocgaqwqcimie = self::get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto kgisumcygmcgyemm;
            qmuqwqmumcayeiku:
            ogmcsmoewwocmkme:
            goto mskqaucggqcumquk;
            ikuauuskoukskkmo:
            qgaeuqkwwoikwsus:
            goto kgoeamguscusyywe;
            wewusiqwsukukkms:
            $sogksuscggsicmac[] = $eqgoocgaqwqcimie;
            goto aksaumeeuqawgwmi;
            nwckgaiueoigasee:
            goto ggyqoucwiyqucqsi;
            goto eocckcsgsycuywyi;
            kgoeamguscusyywe:
            if ($mywqgwsimwoeoawk) {
                goto ogmcsmoewwocmkme;
            }
            goto wewusiqwsukukkms;
            kgisumcygmcgyemm:
            if (!is_callable($ekiuyucoiagmscgy)) {
                goto qgaeuqkwwoikwsus;
            }
            goto yesicceuyqcyysue;
            cuwayimcsiycgmim:
            $uusmaiomayssaecw = $ewyuweyoskiagksm;
            goto sgkayqyykwuagyiu;
            yesicceuyqcyysue:
            $eqgoocgaqwqcimie = call_user_func($ekiuyucoiagmscgy, $eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto ikuauuskoukskkmo;
            ggiycasgekosqyqk:
            cusoaecwsaeckaie:
            goto usggsqksmaaukmqq;
            mskqaucggqcumquk:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto kuiicmskwegaoggu;
            kuiicmskwegaoggu:
            kummaeaoeksaiasa:
            goto ggiycasgekosqyqk;
            sscoeeyeeggsckyo:
            ggyqoucwiyqucqsi:
            goto qeggaicaycsqqkio;
            cgoaqiqsuomgmysm:
            if (is_numeric($ewyuweyoskiagksm)) {
                goto iymqokemgwcsgeiu;
            }
            goto cuwayimcsiycgmim;
            usggsqksmaaukmqq:
        }
        goto eqqgiigwkciiksuo;
        keakmgioceekisuk:
        $sogksuscggsicmac = [];
        goto egaqukiucuckkqai;
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
        ooyqgwsoeyqoucae:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto oywuqkssgiiumuis;
        }
        goto yksiaqaciswymeim;
        gsggsgayikymekok:
        aoueogeoyisucaiq:
        goto scgqkqkwimicokau;
        yksiaqaciswymeim:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) {
            goto oeoaqooaouowkwec;
            kokuyqgigassuuoc:
            qoeiqqmskcqeaiug:
            goto yaekwuquieusamyw;
            qywsmseiceqecigi:
            akeowgkiskougikg:
            goto gwqicekgscayqcuq;
            mieaoqwgaukeysis:
            goto kewcuamqaiyeayio;
            goto kokuyqgigassuuoc;
            qsieyoiaoiqaumus:
            yiisikkiqosawsgu:
            goto mieaoqwgaukeysis;
            gwqicekgscayqcuq:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu;
            goto qsieyoiaoiqaumus;
            iiigksqqskiumiqi:
            goto yiisikkiqosawsgu;
            goto qywsmseiceqecigi;
            komsqawwueueiuag:
            muowkaagoqiyegme:
            goto ckeccumaeeuamqem;
            ugqsesmesggiqaos:
            if ($xkqaigkogigocask) {
                goto akeowgkiskougikg;
            }
            goto kawkmiguwoooksec;
            ygyugquqaqegwioo:
            kewcuamqaiyeayio:
            goto komsqawwueueiuag;
            oeoaqooaouowkwec:
            if (is_array($esquqsuaumgwoewu)) {
                goto qoeiqqmskcqeaiug;
            }
            goto ugqsesmesggiqaos;
            yaekwuquieusamyw:
            $sogksuscggsicmac = self::kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac);
            goto ygyugquqaqegwioo;
            kawkmiguwoooksec:
            $sogksuscggsicmac[] = $esquqsuaumgwoewu;
            goto iiigksqqskiumiqi;
            ckeccumaeeuamqem:
        }
        goto gsggsgayikymekok;
        scgqkqkwimicokau:
        oywuqkssgiiumuis:
        goto ouumywcisskmgyio;
        ekwoimwoqucawyis:
    }
    
    public static function qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $aumugyockeskamiq, $gymeemoisimggcww = true) : array
    {
        goto wmwqumcksgkckeae;
        ceqkmcaycyskmoia:
        goto kemciyisiqsemmwm;
        goto womkaomokgseakue;
        smwmewocqywykcou:
        iqskmoysaamkuoim:
        goto agckaqmuskakeumg;
        qsemsoimoauiccmm:
        $ggkaciewmeqmgckg = array_slice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)), true);
        goto ceqkmcaycyskmoia;
        qayyssyasegwkuwi:
        if (!isset($uomewyckeuqoqocu[$ksiyqouuaoymsycg], $uomewyckeuqoqocu[$aumugyockeskamiq])) {
            goto uowumqmesgawkcme;
        }
        goto qwyuicgesgumuuum;
        symyoqqgcwomyksw:
        uowumqmesgawkcme:
        goto euayciwoioqckyoi;
        gkwkcgcewcecmgoe:
        unset($ggkaciewmeqmgckg[$aumugyockeskamiq]);
        goto qaymskucssiyeasw;
        womkaomokgseakue:
        awsiakgwsaqyiggo:
        goto agameskciseayqqy;
        uocisouiiqciywim:
        foreach ($aumugyockeskamiq as $igqsaukqcqscimok) {
            $uomewyckeuqoqocu = self::qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $igqsaukqcqscimok, $gymeemoisimggcww);
            ewowkiosiisoacse:
        }
        goto smwmewocqywykcou;
        qaymskucssiyeasw:
        $uomewyckeuqoqocu = $ggkaciewmeqmgckg + $aseguuimuokgcami + $uomewyckeuqoqocu;
        goto symyoqqgcwomyksw;
        euayciwoioqckyoi:
        goto iiiaciykaukmuiwu;
        goto gqwkiummucquoece;
        agckaqmuskakeumg:
        iiiaciykaukmuiwu:
        goto emqiswoqkweuamuw;
        qwyuicgesgumuuum:
        $aseguuimuokgcami = [$aumugyockeskamiq => $uomewyckeuqoqocu[$aumugyockeskamiq]];
        goto sgsmmgiuyuukgsyi;
        sgsmmgiuyuukgsyi:
        if ($gymeemoisimggcww) {
            goto awsiakgwsaqyiggo;
        }
        goto qsemsoimoauiccmm;
        wmwqumcksgkckeae:
        if (is_array($aumugyockeskamiq)) {
            goto ceimuucmqmuygqiu;
        }
        goto qayyssyasegwkuwi;
        emqiswoqkweuamuw:
        return $uomewyckeuqoqocu;
        goto ogigeoakcogugeym;
        wsumwkwmcygcqyaa:
        kemciyisiqsemmwm:
        goto gkwkcgcewcecmgoe;
        agameskciseayqqy:
        $ggkaciewmeqmgckg = array_splice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)));
        goto wsumwkwmcygcqyaa;
        gqwkiummucquoece:
        ceimuucmqmuygqiu:
        goto uocisouiiqciywim;
        ogigeoakcogugeym:
    }
    
    public static function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array
    {
        goto uqmsgooywggqywam;
        wwiqmgogkuoaucyc:
        iisiamyqqaaoykga:
        goto siaagaokcmgeuimo;
        uqmsgooywggqywam:
        $giqggecqqikcysgq = 0;
        goto mooomiuasyggqsis;
        cmagkaygaemaaici:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
            goto oqewauiqmkiiaiqe;
            yaacmieqceeiyuii:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
            goto gmwiocukkqksiwkk;
            uqgqukmekkieakco:
            $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
            goto gakuaukecwikgsmc;
            gakuaukecwikgsmc:
            if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) {
                goto oeqecewccwqsqmmc;
            }
            goto gocscsauukioowcq;
            ggcewuaywkywgcoa:
            $aqeywoskqiugcmye = $momcykaoccoymeig;
            goto wuiuuyooeukyiois;
            gocscsauukioowcq:
            $giqggecqqikcysgq = $ykiwomimkkuiigoq;
            goto iauekwigiwssawke;
            ykeogiauqegcimwm:
            kmwckweaaawgkumy:
            goto yymmqiaisemuayke;
            gmwiocukkqksiwkk:
            guseeaqsaueqcweo:
            goto saqmoqaeaoqmaaqo;
            gqkwumcquuuwoqkw:
            kkmyoieguiwecakw:
            goto ykeogiauqegcimwm;
            oqewauiqmkiiaiqe:
            if (key_exists($momcykaoccoymeig, $couiucmsqaieciue)) {
                goto kmwckweaaawgkumy;
            }
            goto gkscusucwgaoooso;
            saqmoqaeaoqmaaqo:
            if (!is_string($eqgoocgaqwqcimie)) {
                goto kkmyoieguiwecakw;
            }
            goto uqgqukmekkieakco;
            yymmqiaisemuayke:
            osckyscuccyeyiea:
            goto ysyiewokqwgckeko;
            iauekwigiwssawke:
            $uiymkeeaukcyqqik = $eqgoocgaqwqcimie;
            goto ggcewuaywkywgcoa;
            gkscusucwgaoooso:
            if (!is_object($eqgoocgaqwqcimie)) {
                goto guseeaqsaueqcweo;
            }
            goto yaacmieqceeiyuii;
            wuiuuyooeukyiois:
            oeqecewccwqsqmmc:
            goto gqkwumcquuuwoqkw;
            ysyiewokqwgckeko:
        }
        goto wwiqmgogkuoaucyc;
        quqkqymwqwywgesy:
        $aqeywoskqiugcmye = null;
        goto cmagkaygaemaaici;
        mooomiuasyggqsis:
        $uiymkeeaukcyqqik = null;
        goto quqkqymwqwywgesy;
        siaagaokcmgeuimo:
        return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik];
        goto yukmmiscasoogmyu;
        yukmmiscasoogmyu:
    }
    
    public static function ksiyqouuaoymsycg(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, $momcykaoccoymeig = false)
    {
        goto kimmqccoykmmokim;
        kimmqccoykmmokim:
        $ksiyqouuaoymsycg = null;
        goto agksoawkuoguyeio;
        caumcscgkmkqgceq:
        usmksyiucoeycycc:
        goto ycywkayeqeumswqg;
        ycywkayeqeumswqg:
        return $ksiyqouuaoymsycg;
        goto ecikmukcoqciisue;
        agksoawkuoguyeio:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto iaqaecisewceswme;
            iaqaecisewceswme:
            $esoaccosseymguso = self::qamwegcyimgcqksw($igqsaukqcqscimok, $mkomwsiykqigmqca);
            goto ayugswgkeymseuoe;
            aaqiiwuwmyqqekwm:
            eoyqkmiwoiyecqiq:
            goto usomesuioqacuiwm;
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
            kumeocwaamwuggmy:
            ucmuqycsksssuyku:
            goto yyyqqsuawgwkayme;
            qiakkkgsokqowqkg:
            goto usmksyiucoeycycc;
            goto guukcuckowqqgqag;
            sossqwuskoaguiie:
            uamoquqaiywkyigy:
            goto qiakkkgsokqowqkg;
            guukcuckowqqgqag:
            yocoiwekswmeqosg:
            goto kumeocwaamwuggmy;
            yaumammegwowmsqu:
            if ($momcykaoccoymeig) {
                goto eoyqkmiwoiyecqiq;
            }
            goto ycwsommucswweyww;
            ycwsommucswweyww:
            $ksiyqouuaoymsycg = $igqsaukqcqscimok;
            goto moigkuskomyqceuu;
            yyyqqsuawgwkayme:
        }
        goto caumcscgkmkqgceq;
        ecikmukcoqciisue:
    }
}

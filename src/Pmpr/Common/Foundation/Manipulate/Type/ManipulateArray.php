<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateArray extends Common
{
    
    public static function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw)
    {
        goto ewkqiewssocsquuo;
        mmgoicukswqwseoc:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
        goto yaawcswsqyucgsus;
        ewcysecswgsugswi:
        eiseywwywkwcwgcq:
        goto esqkgmaasckugmqo;
        yaawcswsqyucgsus:
        unset($uomewyckeuqoqocu[$uusmaiomayssaecw]);
        goto ewcysecswgsugswi;
        ygqaaocooiqkugos:
        swagceggcwqkcgkg:
        goto cksyaoquscmmscke;
        kamukeioemqucmmg:
        if (is_array($uusmaiomayssaecw)) {
            goto swagceggcwqkcgkg;
        }
        goto yaawiccsokmgweye;
        esqkgmaasckugmqo:
        goto yusagekewyiqqqyk;
        goto ygqaaocooiqkugos;
        qeaowsgcqsuccawg:
        if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) {
            goto asumyiuqmmywiwyc;
        }
        goto kamukeioemqucmmg;
        ywumqymqkuyegcae:
        asumyiuqmmywiwyc:
        goto ycesoqquooyiwusg;
        ewkqiewssocsquuo:
        $eqgoocgaqwqcimie = null;
        goto qeaowsgcqsuccawg;
        ycesoqquooyiwusg:
        return $eqgoocgaqwqcimie;
        goto kymsyoeswiuqoeam;
        yaawiccsokmgweye:
        if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
            goto eiseywwywkwcwgcq;
        }
        goto mmgoicukswqwseoc;
        gggogewkqkskuicm:
        yusagekewyiqqqyk:
        goto ywumqymqkuyegcae;
        cksyaoquscmmscke:
        $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw));
        goto gggogewkqkskuicm;
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
        uykcicoeacqaykia:
        oeoawwmyiaaaieoy:
        goto cieamqmwwegyukgc;
        gmmwicowkqiisogm:
        if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) {
            goto iawwywggiwmigeiy;
        }
        goto oogwiuueieywymio;
        oogwiuueieywymio:
        $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo);
        goto wwykqesuwsqiwyiw;
        wwykqesuwsqiwyiw:
        $awqscowmskeuymeu = is_object($oaiciiqoawkamweo);
        goto aucikuqogioweysy;
        aucikuqogioweysy:
        foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto mksesqkqwqwyiski;
            kmawkwiiceqawowo:
            uqkuaiqggmmqkwcg:
            goto mgskwyqqysgqegwe;
            ocguegwcwgegqugs:
            cyewimeguwgissoe:
            goto gmmukayqkigwksam;
            gooaiamwaqiueqag:
            $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie;
            goto akiawysiwswoqmee;
            sqeucqqqmoqcuuem:
            goto uqkuaiqggmmqkwcg;
            goto ocguegwcwgegqugs;
            mksesqkqwqwyiski:
            if ($casemmqcsgmemwyg) {
                goto cyewimeguwgissoe;
            }
            goto ecoqoquwuygscmai;
            ecoqoquwuygscmai:
            if (!$awqscowmskeuymeu) {
                goto ogyecgyqquwgcugi;
            }
            goto gooaiamwaqiueqag;
            mgskwyqqysgqegwe:
            swasyymuuuesyssc:
            goto omggqawmwgeoiawc;
            gmmukayqkigwksam:
            $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto kmawkwiiceqawowo;
            akiawysiwswoqmee:
            ogyecgyqquwgcugi:
            goto sqeucqqqmoqcuuem;
            omggqawmwgeoiawc:
        }
        goto uykcicoeacqaykia;
        aoseoaeigamewkyg:
    }
    
    public static function isset($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto wscswagewsegyiyc;
        cucceeoseaagcoam:
        qyuigkqusowucaqq:
        goto qsyimuywgcsoiecu;
        uyqcwcgaswkaaqys:
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && is_array($yygmoeguaqyumuui) && $yygmoeguaqyumuui) {
            goto wgccsswsaiqccecw;
        }
        goto oaiigcusecmsciso;
        oaiigcusecmsciso:
        $ksaameoqigiaoigg = false;
        goto yucmysyskmgwsowg;
        aasyamqyqesqqwkm:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto iscuuwgoaosayimo;
            ocqymsowceymagky:
            muukgiowiywgysuy:
            goto oqsieegccekksmek;
            waoqqaimmwkqikay:
            goto kuekasacwyquuiqy;
            goto ocqymsowceymagky;
            umkkwyaciakygsgo:
            $ksaameoqigiaoigg = false;
            goto waoqqaimmwkqikay;
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
        ucqcuosmqwiiwigm:
        wgccsswsaiqccecw:
        goto aasyamqyqesqqwkm;
        gomagoumaosyimii:
        kuekasacwyquuiqy:
        goto cucceeoseaagcoam;
        yucmysyskmgwsowg:
        goto qyuigkqusowucaqq;
        goto ucqcuosmqwiiwigm;
        wscswagewsegyiyc:
        $ksaameoqigiaoigg = true;
        goto uyqcwcgaswkaaqys;
        qsyimuywgcsoiecu:
        return $ksaameoqigiaoigg;
        goto qeqwkkggucamquwc;
        qeqwkkggucamquwc:
    }
    
    public static function gymccqywkegiqiiw($uomewyckeuqoqocu) : int
    {
        goto aokseecsgimieouu;
        aokseecsgimieouu:
        $iukyueweicuocgow = 0;
        goto euqaywkcamscaugi;
        cseioaeaywcuekge:
        ksowgigyiiocmmay:
        goto yokyoayigkwweqeg;
        euqaywkcamscaugi:
        if (!$uomewyckeuqoqocu) {
            goto ksowgigyiiocmmay;
        }
        goto ieiwqimgggeoaqwm;
        ieiwqimgggeoaqwm:
        $iukyueweicuocgow = rand(0, count($uomewyckeuqoqocu) - 1);
        goto cseioaeaywcuekge;
        yokyoayigkwweqeg:
        return $iukyueweicuocgow;
        goto ykyqsgogqywswoua;
        ykyqsgogqywswoua:
    }
    
    public static function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto qigeyewuukwwousm;
        ygseoaiecssiymec:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto qkcgewmwssuaewie;
            qeyssuuycyyguuyo:
            gwsqeeiwciqccasw:
            goto iqwsaiomwmyeusaq;
            qummwcsgemgwqwga:
            goto gmiacescgeoqcogu;
            goto gouyoowcwkccwewk;
            iyociciyeiswkaqk:
            $ksaameoqigiaoigg = true;
            goto qummwcsgemgwqwga;
            gouyoowcwkccwewk:
            hkokwccuegwgeegk:
            goto qeyssuuycyyguuyo;
            qkcgewmwssuaewie:
            if (self::get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) {
                goto hkokwccuegwgeegk;
            }
            goto iyociciyeiswkaqk;
            iqwsaiomwmyeusaq:
        }
        goto agqgaiqiwcgowsoi;
        oowwickgsmcqamqe:
        return $ksaameoqigiaoigg;
        goto kyaismgimkqkcmey;
        imeiskyssuamssoq:
        if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) {
            goto kaoukeiiiuquqgsm;
        }
        goto ygseoaiecssiymec;
        agqgaiqiwcgowsoi:
        gmiacescgeoqcogu:
        goto owswisaiecssuwwu;
        owswisaiecssuwwu:
        kaoukeiiiuquqgsm:
        goto oowwickgsmcqamqe;
        qigeyewuukwwousm:
        $ksaameoqigiaoigg = false;
        goto imeiskyssuamssoq;
        kyaismgimkqkcmey:
    }
    
    public static function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie)
    {
        goto iswsmaumaacmwcwu;
        qqgsggygqommqmkw:
        return $qcgkuqesqqymcuui;
        goto aiskggeswyweiogy;
        ccgiykywckmyiscg:
        smaisgmkkwgiqygi:
        goto qqgsggygqommqmkw;
        uyyceeeqmoysskuw:
        foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) {
            goto ecqyggsgiqweeyee;
            qykwyyyeyygkiqmi:
            if (!($uusmaiomayssaecw !== false)) {
                goto geyksaceayaiwiiy;
            }
            goto okmawomkamqiwesm;
            okmawomkamqiwesm:
            $qcgkuqesqqymcuui = self::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            goto ugaoskycwsqcesko;
            ugaoskycwsqcesko:
            geyksaceayaiwiiy:
            goto wyuommoqmyaeiswc;
            ecqyggsgiqweeyee:
            $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu);
            goto qykwyyyeyygkiqmi;
            wyuommoqmyaeiswc:
            umyquqiugigqmkau:
            goto kocagcykiyimkmoa;
            kocagcykiyimkmoa:
        }
        goto ccgiykywckmyiscg;
        qucwqsuacqkymwsm:
        $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie];
        goto myissqmgymuauowq;
        scsgmyqiwwwkwayy:
        $qcgkuqesqqymcuui = false;
        goto uyyceeeqmoysskuw;
        iswsmaumaacmwcwu:
        $qcgkuqesqqymcuui = null;
        goto rasgkseukaaqecam;
        myissqmgymuauowq:
        miqsgoqewuokegig:
        goto scsgmyqiwwwkwayy;
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
        akequyeqowgagiek:
        if (is_int($kuuiuigeacouwmaa)) {
            goto aasiooeuekwqamyk;
        }
        goto eguqaygayksgkoyq;
        eguqaygayksgkoyq:
        $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu));
        goto imscgsmqiswkeyka;
        emaakmmcykwmmeum:
        aasiooeuekwqamyk:
        goto quumskauyaouyyiy;
        oyqqsiciakemkgim:
        goto iosgqqoyoiqgsgks;
        goto emaakmmcykwmmeum;
        quumskauyaouyyiy:
        array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok);
        goto ocickgekowkiqyuo;
        imscgsmqiswkeyka:
        $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy));
        goto oyqqsiciakemkgim;
        ocickgekowkiqyuo:
        iosgqqoyoiqgsgks:
        goto iqkysoyykewkkwes;
        iqkysoyykewkkwes:
    }
    
    public static function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool
    {
        return count($uomewyckeuqoqocu) != count($uomewyckeuqoqocu, 1);
    }
    
    public static function wuoqgcwmkicakygs($uomewyckeuqoqocu) : bool
    {
        goto kugoqmkkeqeoakik;
        cgeimkqsoqqigogy:
        if (!$uomewyckeuqoqocu) {
            goto sygasaomgiqoqmqs;
        }
        goto ecawoqusqygmccmo;
        ecawoqusqygmccmo:
        $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1);
        goto gocwqoqicukssssu;
        owasckmgeweqwsgq:
        return $wuoqgcwmkicakygs;
        goto qgwmgswcikqsoymm;
        kugoqmkkeqeoakik:
        $wuoqgcwmkicakygs = false;
        goto cgeimkqsoqqigogy;
        gocwqoqicukssssu:
        sygasaomgiqoqmqs:
        goto owasckmgeweqwsgq;
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
            qkiwmwgkosoiiqgo:
            goto gueiogkegsiymgie;
            goto nicoewqgywcusaci;
            mwewkecyyqycwcyi:
            if (!(method_exists($mmeioagwmyscwumo, $igaagwuyasawwqms) && method_exists($csougakqegqiqsgi, $igaagwuyasawwqms))) {
                goto mkggwgyaywmiaeue;
            }
            goto guqmiyswawmaggqw;
            ssgeyeewksygaeqm:
            $uiuykcweuosgmwki = false;
            goto owsywiygoiqkyeey;
            aocqwuakameoqqme:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms};
            goto aykucyyeseggeeoy;
            owsywiygoiqkyeey:
            if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) {
                goto ayoycomwascmkkkm;
            }
            goto soaekkoykikagyqa;
            nicoewqgywcusaci:
            ayoycomwascmkkkm:
            goto wmggooiesmiaymyw;
            soaekkoykikagyqa:
            if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) {
                goto qwcsgqgmmsscgsaa;
            }
            goto amamemmaewcmqmso;
            amamemmaewcmqmso:
            $uiuykcweuosgmwki = self::get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> self::get($csougakqegqiqsgi, $igaagwuyasawwqms);
            goto ekmmomgayqemmaqm;
            cqqywmesqogkseku:
            gueiogkegsiymgie:
            goto eiakokiiwigccesk;
            gmoewkmwwyeaycgm:
            goto ouseeusmwgswgayi;
            goto gykceoyygmmeawws;
            wmggooiesmiaymyw:
            if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) {
                goto okgmaysweamaymuk;
            }
            goto mwewkecyyqycwcyi;
            aykucyyeseggeeoy:
            ouseeusmwgswgayi:
            goto cqqywmesqogkseku;
            guqmiyswawmaggqw:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms}() <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}();
            goto wyymkuqsaikomumi;
            gykceoyygmmeawws:
            okgmaysweamaymuk:
            goto aocqwuakameoqqme;
            ekmmomgayqemmaqm:
            qwcsgqgmmsscgsaa:
            goto qkiwmwgkosoiiqgo;
            eiakokiiwigccesk:
            return $uiuykcweuosgmwki;
            goto aksioomuagcyawuk;
            wyymkuqsaikomumi:
            mkggwgyaywmiaeue:
            goto gmoewkmwwyeaycgm;
            aksioomuagcyawuk:
        });
        goto yymqcwmasyyamagq;
        wsmwsckqgokueicw:
    }
    
    public static function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto iaokmyigguukmcky;
        ocimykqskwaewuia:
        return $sogksuscggsicmac;
        goto yccuogewgykqkkys;
        qyaiyaqcqsskmwos:
        $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw];
        goto gcaoeocsuqqqyaym;
        ewiqoyqagowquqqe:
        if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) {
            goto kuquyyieaicaecie;
        }
        goto qyaiyaqcqsskmwos;
        ogqswkqkcosuewgg:
        oeewiaeeicmwqyiw:
        goto gueusoewgqkcwkuq;
        gueusoewgqkcwkuq:
        goto qayogkgwkuoycsuy;
        goto acyyqeqgusyqaook;
        useumocigsoceeus:
        if (!is_object($oaiciiqoawkamweo)) {
            goto oeewiaeeicmwqyiw;
        }
        goto aewewmmweiaeuewi;
        uwoayuwcsqsekywg:
        $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw};
        goto sewmgsmcyiacccoa;
        iaokmyigguukmcky:
        $sogksuscggsicmac = $ggauoeuaesiymgee;
        goto cqgiaauymsygoomq;
        gcaoeocsuqqqyaym:
        kuquyyieaicaecie:
        goto ieqccoywksywcsky;
        ieqccoywksywcsky:
        qayogkgwkuoycsuy:
        goto ocimykqskwaewuia;
        sewmgsmcyiacccoa:
        yicuaiowomkyaueg:
        goto ogqswkqkcosuewgg;
        cqgiaauymsygoomq:
        if (is_array($oaiciiqoawkamweo)) {
            goto gcqeiwgakokeuouq;
        }
        goto useumocigsoceeus;
        acyyqeqgusyqaook:
        gcqeiwgakokeuouq:
        goto ewiqoyqagowquqqe;
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
        mmmkqsukesoasosu:
        $sogksuscggsicmac = [];
        goto iauoeqkuisgyagqc;
        qmsoeugoyqquamqk:
        qqewqyiwuaqaakwk:
        goto iwumyigiscuuwqik;
        scysiomisyamwocw:
    }
    
    public static function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null)
    {
        goto kkgeeeaqoaoskogo;
        kkgeeeaqoaoskogo:
        $yygmoeguaqyumuui = explode("\56", $mkomwsiykqigmqca);
        goto yqisgeugiuokowgw;
        kkwcewqsaeyugawo:
        return $uomewyckeuqoqocu;
        goto amiessagaiiiiiei;
        uwyckgawyyueaaym:
        if ($uomewyckeuqoqocu) {
            goto aaqqggkciwcemugy;
        }
        goto keoaaweuqeeoguyi;
        yqisgeugiuokowgw:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto wwqikmmkomakgaou;
            iiuwsswoayimgack:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw};
            goto oiikekyiqeqogkua;
            oucwaucwcoegeaco:
            skywgyiswsmassgq:
            goto wwaqsuwkskcooicq;
            weekmyeyqukcoegg:
            uguyeawasakeoekq:
            goto ucwyaykmcoikkkuo;
            gwmwmaqgwkkamqmo:
            $uomewyckeuqoqocu = null;
            goto yukgigiiimqqwiyq;
            sqwyqsciuaceoaaa:
            ickouwcsecqeskwq:
            goto uwkaywsgkmicamom;
            kwickmmwwyqigccu:
            wkisqogwyuawwiqo:
            goto iiuwsswoayimgack;
            qeqquaucmqkmsmoq:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}();
            goto weekmyeyqukcoegg;
            oiikekyiqeqogkua:
            oukqkimqsackseiw:
            goto cmgayuowmaymuaiq;
            awyaiyumyosuyewi:
            goto raqaugusyaieeuyi;
            goto wquqgqsyiccogoac;
            uwkaywsgkmicamom:
            wwscaygcymkwcoas:
            goto oqmkiaqgogkikwes;
            qaqemcccqogoummc:
            goto swiiumgaagycwyoa;
            goto oucwaucwcoegeaco;
            wwaqsuwkskcooicq:
            if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) {
                goto kagckqkwssikyaay;
            }
            goto ymqseyksqoouycio;
            ucwyaykmcoikkkuo:
            swiiumgaagycwyoa:
            goto aauqmqqqakiaqeqo;
            aauqmqqqakiaqeqo:
            goto ickouwcsecqeskwq;
            goto isymsqwwkmwkamuy;
            aqkgkwewsqkeyusm:
            goto raqaugusyaieeuyi;
            goto igeccyeusumcacea;
            cmgayuowmaymuaiq:
            goto uguyeawasakeoekq;
            goto acgauasosqqysagi;
            igoocsoeousssema:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto iycuugwwawmiewmq;
            }
            goto mkikcguagooeiace;
            kycykouooecoiyqw:
            iycuugwwawmiewmq:
            goto yqygigmwumoksekw;
            wwqikmmkomakgaou:
            if (is_array($uomewyckeuqoqocu)) {
                goto uisiuwgqougckasg;
            }
            goto yqyqsioacayucksc;
            yukgigiiimqqwiyq:
            goto raqaugusyaieeuyi;
            goto qaqemcccqogoummc;
            eceacmeaisaqssco:
            gwgukcuckigmwoes:
            goto sqwyqsciuaceoaaa;
            acgauasosqqysagi:
            kagckqkwssikyaay:
            goto qeqquaucmqkmsmoq;
            yqyqsioacayucksc:
            if (is_object($uomewyckeuqoqocu)) {
                goto skywgyiswsmassgq;
            }
            goto gwmwmaqgwkkamqmo;
            kcaqocqaugkyiyys:
            $uomewyckeuqoqocu = null;
            goto aqkgkwewsqkeyusm;
            isymsqwwkmwkamuy:
            uisiuwgqougckasg:
            goto igoocsoeousssema;
            yqygigmwumoksekw:
            $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto eceacmeaisaqssco;
            wquqgqsyiccogoac:
            goto gwgukcuckigmwoes;
            goto kycykouooecoiyqw;
            ymqseyksqoouycio:
            if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) {
                goto wkisqogwyuawwiqo;
            }
            goto kcaqocqaugkyiyys;
            mkikcguagooeiace:
            $uomewyckeuqoqocu = null;
            goto awyaiyumyosuyewi;
            igeccyeusumcacea:
            goto oukqkimqsackseiw;
            goto kwickmmwwyqigccu;
            oqmkiaqgogkikwes:
        }
        goto ceckikeaaasskwmo;
        saqyacsiqwmqgqkm:
        aaqqggkciwcemugy:
        goto kkwcewqsaeyugawo;
        ceckikeaaasskwmo:
        raqaugusyaieeuyi:
        goto uwyckgawyyueaaym;
        keoaaweuqeeoguyi:
        $uomewyckeuqoqocu = $ggauoeuaesiymgee;
        goto saqyacsiqwmqgqkm;
        amiessagaiiiiiei:
    }
    
    public static function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array
    {
        goto keqgmaemoceqssyy;
        iqgcumoueoaacgkc:
        ewquwuoyeeiwkwuy:
        goto yowsymiqiqgkmuuy;
        auiwyymoguwkooew:
        if (!($uuyoeicyoayimaoa > 0)) {
            goto ewquwuoyeeiwkwuy;
        }
        goto oaeweiaegakeieoi;
        oaeweiaegakeieoi:
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true);
        goto iqgcumoueoaacgkc;
        wewmsmwegeoqoeem:
        return $uomewyckeuqoqocu;
        goto woagemomagskuyii;
        keqgmaemoceqssyy:
        if (!is_array($uomewyckeuqoqocu)) {
            goto ygsaygcskekuwgya;
        }
        goto kqcusmuiyoqmeqwu;
        kqcusmuiyoqmeqwu:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) {
            return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw];
        });
        goto auiwyymoguwkooew;
        yowsymiqiqgkmuuy:
        ygsaygcskekuwgya:
        goto wewmsmwegeoqoeem;
        woagemomagskuyii:
    }
    
    public static function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array
    {
        goto keakmgioceekisuk;
        boekkoaekyqaemmq:
        foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) {
            goto cgoaqiqsuomgmysm;
            qmuqwqmumcayeiku:
            ogmcsmoewwocmkme:
            goto mskqaucggqcumquk;
            cuwayimcsiycgmim:
            $uusmaiomayssaecw = $ewyuweyoskiagksm;
            goto sgkayqyykwuagyiu;
            wewusiqwsukukkms:
            $sogksuscggsicmac[] = $eqgoocgaqwqcimie;
            goto aksaumeeuqawgwmi;
            sscoeeyeeggsckyo:
            ggyqoucwiyqucqsi:
            goto qeggaicaycsqqkio;
            ikuauuskoukskkmo:
            qgaeuqkwwoikwsus:
            goto kgoeamguscusyywe;
            kgoeamguscusyywe:
            if ($mywqgwsimwoeoawk) {
                goto ogmcsmoewwocmkme;
            }
            goto wewusiqwsukukkms;
            kuiicmskwegaoggu:
            kummaeaoeksaiasa:
            goto ggiycasgekosqyqk;
            emiosiemcoyoeoou:
            $uusmaiomayssaecw = $uauoccoqcsaeggui;
            goto sscoeeyeeggsckyo;
            cgoaqiqsuomgmysm:
            if (is_numeric($ewyuweyoskiagksm)) {
                goto iymqokemgwcsgeiu;
            }
            goto cuwayimcsiycgmim;
            eocckcsgsycuywyi:
            iymqokemgwcsgeiu:
            goto emiosiemcoyoeoou;
            qeggaicaycsqqkio:
            $eqgoocgaqwqcimie = self::get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto kgisumcygmcgyemm;
            mskqaucggqcumquk:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto kuiicmskwegaoggu;
            kgisumcygmcgyemm:
            if (!is_callable($ekiuyucoiagmscgy)) {
                goto qgaeuqkwwoikwsus;
            }
            goto yesicceuyqcyysue;
            ggiycasgekosqyqk:
            cusoaecwsaeckaie:
            goto usggsqksmaaukmqq;
            sgkayqyykwuagyiu:
            $ggauoeuaesiymgee = $uauoccoqcsaeggui;
            goto nwckgaiueoigasee;
            aksaumeeuqawgwmi:
            goto kummaeaoeksaiasa;
            goto qmuqwqmumcayeiku;
            nwckgaiueoigasee:
            goto ggyqoucwiyqucqsi;
            goto eocckcsgsycuywyi;
            yesicceuyqcyysue:
            $eqgoocgaqwqcimie = call_user_func($ekiuyucoiagmscgy, $eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto ikuauuskoukskkmo;
            usggsqksmaaukmqq:
        }
        goto eqqgiigwkciiksuo;
        egaqukiucuckkqai:
        if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) {
            goto wuuqskwuoeacgacg;
        }
        goto osmciccqwowieume;
        eqqgiigwkciiksuo:
        gqoiqscswogsymcu:
        goto mcqimygcwcqcssky;
        keakmgioceekisuk:
        $sogksuscggsicmac = [];
        goto egaqukiucuckkqai;
        mcqimygcwcqcssky:
        wuuqskwuoeacgacg:
        goto awmyswwkwqgugmmy;
        awmyswwkwqgugmmy:
        return $sogksuscggsicmac;
        goto kskoukygaaicomgy;
        osmciccqwowieume:
        $ggauoeuaesiymgee = '';
        goto boekkoaekyqaemmq;
        kskoukygaaicomgy:
    }
    
    public static function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = [])
    {
        goto ooyqgwsoeyqoucae;
        yksiaqaciswymeim:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) {
            goto oeoaqooaouowkwec;
            kokuyqgigassuuoc:
            qoeiqqmskcqeaiug:
            goto yaekwuquieusamyw;
            kawkmiguwoooksec:
            $sogksuscggsicmac[] = $esquqsuaumgwoewu;
            goto iiigksqqskiumiqi;
            ugqsesmesggiqaos:
            if ($xkqaigkogigocask) {
                goto akeowgkiskougikg;
            }
            goto kawkmiguwoooksec;
            qsieyoiaoiqaumus:
            yiisikkiqosawsgu:
            goto mieaoqwgaukeysis;
            yaekwuquieusamyw:
            $sogksuscggsicmac = self::kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac);
            goto ygyugquqaqegwioo;
            mieaoqwgaukeysis:
            goto kewcuamqaiyeayio;
            goto kokuyqgigassuuoc;
            ygyugquqaqegwioo:
            kewcuamqaiyeayio:
            goto komsqawwueueiuag;
            qywsmseiceqecigi:
            akeowgkiskougikg:
            goto gwqicekgscayqcuq;
            gwqicekgscayqcuq:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu;
            goto qsieyoiaoiqaumus;
            komsqawwueueiuag:
            muowkaagoqiyegme:
            goto ckeccumaeeuamqem;
            iiigksqqskiumiqi:
            goto yiisikkiqosawsgu;
            goto qywsmseiceqecigi;
            oeoaqooaouowkwec:
            if (is_array($esquqsuaumgwoewu)) {
                goto qoeiqqmskcqeaiug;
            }
            goto ugqsesmesggiqaos;
            ckeccumaeeuamqem:
        }
        goto gsggsgayikymekok;
        gsggsgayikymekok:
        aoueogeoyisucaiq:
        goto scgqkqkwimicokau;
        ouumywcisskmgyio:
        return $sogksuscggsicmac;
        goto ekwoimwoqucawyis;
        ooyqgwsoeyqoucae:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto oywuqkssgiiumuis;
        }
        goto yksiaqaciswymeim;
        scgqkqkwimicokau:
        oywuqkssgiiumuis:
        goto ouumywcisskmgyio;
        ekwoimwoqucawyis:
    }
    
    public static function qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $aumugyockeskamiq, $gymeemoisimggcww = true) : array
    {
        goto wmwqumcksgkckeae;
        qaymskucssiyeasw:
        $uomewyckeuqoqocu = $ggkaciewmeqmgckg + $aseguuimuokgcami + $uomewyckeuqoqocu;
        goto symyoqqgcwomyksw;
        wsumwkwmcygcqyaa:
        kemciyisiqsemmwm:
        goto gkwkcgcewcecmgoe;
        gqwkiummucquoece:
        ceimuucmqmuygqiu:
        goto uocisouiiqciywim;
        smwmewocqywykcou:
        iqskmoysaamkuoim:
        goto agckaqmuskakeumg;
        agckaqmuskakeumg:
        iiiaciykaukmuiwu:
        goto emqiswoqkweuamuw;
        emqiswoqkweuamuw:
        return $uomewyckeuqoqocu;
        goto ogigeoakcogugeym;
        sgsmmgiuyuukgsyi:
        if ($gymeemoisimggcww) {
            goto awsiakgwsaqyiggo;
        }
        goto qsemsoimoauiccmm;
        euayciwoioqckyoi:
        goto iiiaciykaukmuiwu;
        goto gqwkiummucquoece;
        qwyuicgesgumuuum:
        $aseguuimuokgcami = [$aumugyockeskamiq => $uomewyckeuqoqocu[$aumugyockeskamiq]];
        goto sgsmmgiuyuukgsyi;
        agameskciseayqqy:
        $ggkaciewmeqmgckg = array_splice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)));
        goto wsumwkwmcygcqyaa;
        uocisouiiqciywim:
        foreach ($aumugyockeskamiq as $igqsaukqcqscimok) {
            $uomewyckeuqoqocu = self::qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $igqsaukqcqscimok, $gymeemoisimggcww);
            ewowkiosiisoacse:
        }
        goto smwmewocqywykcou;
        symyoqqgcwomyksw:
        uowumqmesgawkcme:
        goto euayciwoioqckyoi;
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
        gkwkcgcewcecmgoe:
        unset($ggkaciewmeqmgckg[$aumugyockeskamiq]);
        goto qaymskucssiyeasw;
        qsemsoimoauiccmm:
        $ggkaciewmeqmgckg = array_slice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)), true);
        goto ceqkmcaycyskmoia;
        ceqkmcaycyskmoia:
        goto kemciyisiqsemmwm;
        goto womkaomokgseakue;
        womkaomokgseakue:
        awsiakgwsaqyiggo:
        goto agameskciseayqqy;
        ogigeoakcogugeym:
    }
    
    public static function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array
    {
        goto uqmsgooywggqywam;
        mooomiuasyggqsis:
        $uiymkeeaukcyqqik = null;
        goto quqkqymwqwywgesy;
        siaagaokcmgeuimo:
        return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik];
        goto yukmmiscasoogmyu;
        uqmsgooywggqywam:
        $giqggecqqikcysgq = 0;
        goto mooomiuasyggqsis;
        quqkqymwqwywgesy:
        $aqeywoskqiugcmye = null;
        goto cmagkaygaemaaici;
        cmagkaygaemaaici:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
            goto oqewauiqmkiiaiqe;
            gqkwumcquuuwoqkw:
            kkmyoieguiwecakw:
            goto ykeogiauqegcimwm;
            uqgqukmekkieakco:
            $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
            goto gakuaukecwikgsmc;
            iauekwigiwssawke:
            $uiymkeeaukcyqqik = $eqgoocgaqwqcimie;
            goto ggcewuaywkywgcoa;
            gmwiocukkqksiwkk:
            guseeaqsaueqcweo:
            goto saqmoqaeaoqmaaqo;
            gakuaukecwikgsmc:
            if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) {
                goto oeqecewccwqsqmmc;
            }
            goto gocscsauukioowcq;
            yymmqiaisemuayke:
            osckyscuccyeyiea:
            goto ysyiewokqwgckeko;
            yaacmieqceeiyuii:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
            goto gmwiocukkqksiwkk;
            gkscusucwgaoooso:
            if (!is_object($eqgoocgaqwqcimie)) {
                goto guseeaqsaueqcweo;
            }
            goto yaacmieqceeiyuii;
            oqewauiqmkiiaiqe:
            if (key_exists($momcykaoccoymeig, $couiucmsqaieciue)) {
                goto kmwckweaaawgkumy;
            }
            goto gkscusucwgaoooso;
            wuiuuyooeukyiois:
            oeqecewccwqsqmmc:
            goto gqkwumcquuuwoqkw;
            ggcewuaywkywgcoa:
            $aqeywoskqiugcmye = $momcykaoccoymeig;
            goto wuiuuyooeukyiois;
            gocscsauukioowcq:
            $giqggecqqikcysgq = $ykiwomimkkuiigoq;
            goto iauekwigiwssawke;
            ykeogiauqegcimwm:
            kmwckweaaawgkumy:
            goto yymmqiaisemuayke;
            saqmoqaeaoqmaaqo:
            if (!is_string($eqgoocgaqwqcimie)) {
                goto kkmyoieguiwecakw;
            }
            goto uqgqukmekkieakco;
            ysyiewokqwgckeko:
        }
        goto wwiqmgogkuoaucyc;
        wwiqmgogkuoaucyc:
        iisiamyqqaaoykga:
        goto siaagaokcmgeuimo;
        yukmmiscasoogmyu:
    }
    
    public static function ksiyqouuaoymsycg(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, $momcykaoccoymeig = false)
    {
        goto kimmqccoykmmokim;
        ycywkayeqeumswqg:
        return $ksiyqouuaoymsycg;
        goto ecikmukcoqciisue;
        agksoawkuoguyeio:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto iaqaecisewceswme;
            usomesuioqacuiwm:
            $ksiyqouuaoymsycg = $momcykaoccoymeig;
            goto sossqwuskoaguiie;
            kumeocwaamwuggmy:
            ucmuqycsksssuyku:
            goto yyyqqsuawgwkayme;
            moigkuskomyqceuu:
            goto uamoquqaiywkyigy;
            goto aaqiiwuwmyqqekwm;
            guukcuckowqqgqag:
            yocoiwekswmeqosg:
            goto kumeocwaamwuggmy;
            iaqaecisewceswme:
            $esoaccosseymguso = self::qamwegcyimgcqksw($igqsaukqcqscimok, $mkomwsiykqigmqca);
            goto ayugswgkeymseuoe;
            qiakkkgsokqowqkg:
            goto usmksyiucoeycycc;
            goto guukcuckowqqgqag;
            ycwsommucswweyww:
            $ksiyqouuaoymsycg = $igqsaukqcqscimok;
            goto moigkuskomyqceuu;
            sossqwuskoaguiie:
            uamoquqaiywkyigy:
            goto qiakkkgsokqowqkg;
            ayugswgkeymseuoe:
            if (!($esoaccosseymguso == $qwcmueausqgiwigy)) {
                goto yocoiwekswmeqosg;
            }
            goto yaumammegwowmsqu;
            yaumammegwowmsqu:
            if ($momcykaoccoymeig) {
                goto eoyqkmiwoiyecqiq;
            }
            goto ycwsommucswweyww;
            aaqiiwuwmyqqekwm:
            eoyqkmiwoiyecqiq:
            goto usomesuioqacuiwm;
            yyyqqsuawgwkayme:
        }
        goto caumcscgkmkqgceq;
        kimmqccoykmmokim:
        $ksiyqouuaoymsycg = null;
        goto agksoawkuoguyeio;
        caumcscgkmkqgceq:
        usmksyiucoeycycc:
        goto ycywkayeqeumswqg;
        ecikmukcoqciisue:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateArray extends Common
{
    
    public static function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw)
    {
        goto asumyiuqmmywiwyc;
        cksyaoquscmmscke:
        swagceggcwqkcgkg:
        goto gggogewkqkskuicm;
        gggogewkqkskuicm:
        yusagekewyiqqqyk:
        goto ywumqymqkuyegcae;
        yaawcswsqyucgsus:
        agmgeuqwqyskeace:
        goto ewcysecswgsugswi;
        qeaowsgcqsuccawg:
        if (is_array($uusmaiomayssaecw)) {
            goto eiseywwywkwcwgcq;
        }
        goto kamukeioemqucmmg;
        asumyiuqmmywiwyc:
        $eqgoocgaqwqcimie = null;
        goto ewkqiewssocsquuo;
        ywumqymqkuyegcae:
        return $eqgoocgaqwqcimie;
        goto ycesoqquooyiwusg;
        kamukeioemqucmmg:
        if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
            goto agmgeuqwqyskeace;
        }
        goto yaawiccsokmgweye;
        mmgoicukswqwseoc:
        unset($uomewyckeuqoqocu[$uusmaiomayssaecw]);
        goto yaawcswsqyucgsus;
        ygqaaocooiqkugos:
        $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw));
        goto cksyaoquscmmscke;
        yaawiccsokmgweye:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
        goto mmgoicukswqwseoc;
        esqkgmaasckugmqo:
        eiseywwywkwcwgcq:
        goto ygqaaocooiqkugos;
        ewcysecswgsugswi:
        goto swagceggcwqkcgkg;
        goto esqkgmaasckugmqo;
        ewkqiewssocsquuo:
        if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) {
            goto yusagekewyiqqqyk;
        }
        goto qeaowsgcqsuccawg;
        ycesoqquooyiwusg:
    }
    
    public static function set($oaiciiqoawkamweo, $uwomkgseoiegeume = [])
    {
        goto iawwywggiwmigeiy;
        gmmwicowkqiisogm:
        $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo);
        goto oogwiuueieywymio;
        wwykqesuwsqiwyiw:
        foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto uqkuaiqggmmqkwcg;
            mksesqkqwqwyiski:
            if (!$awqscowmskeuymeu) {
                goto swasyymuuuesyssc;
            }
            goto ecoqoquwuygscmai;
            akiawysiwswoqmee:
            goto cyewimeguwgissoe;
            goto sqeucqqqmoqcuuem;
            gmmukayqkigwksam:
            cyewimeguwgissoe:
            goto kmawkwiiceqawowo;
            gooaiamwaqiueqag:
            swasyymuuuesyssc:
            goto akiawysiwswoqmee;
            ecoqoquwuygscmai:
            $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie;
            goto gooaiamwaqiueqag;
            uqkuaiqggmmqkwcg:
            if ($casemmqcsgmemwyg) {
                goto ogyecgyqquwgcugi;
            }
            goto mksesqkqwqwyiski;
            kmawkwiiceqawowo:
            oeoawwmyiaaaieoy:
            goto mgskwyqqysgqegwe;
            ocguegwcwgegqugs:
            $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto gmmukayqkigwksam;
            sqeucqqqmoqcuuem:
            ogyecgyqquwgcugi:
            goto ocguegwcwgegqugs;
            mgskwyqqysgqegwe:
        }
        goto aucikuqogioweysy;
        aucikuqogioweysy:
        kymsyoeswiuqoeam:
        goto uykcicoeacqaykia;
        cieamqmwwegyukgc:
        return $oaiciiqoawkamweo;
        goto cuqccemgkguqycgc;
        iawwywggiwmigeiy:
        if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) {
            goto omggqawmwgeoiawc;
        }
        goto gmmwicowkqiisogm;
        uykcicoeacqaykia:
        omggqawmwgeoiawc:
        goto cieamqmwwegyukgc;
        oogwiuueieywymio:
        $awqscowmskeuymeu = is_object($oaiciiqoawkamweo);
        goto wwykqesuwsqiwyiw;
        cuqccemgkguqycgc:
    }
    
    public static function isset($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto qyuigkqusowucaqq;
        qyuigkqusowucaqq:
        $ksaameoqigiaoigg = true;
        goto wscswagewsegyiyc;
        cucceeoseaagcoam:
        return $ksaameoqigiaoigg;
        goto qsyimuywgcsoiecu;
        aasyamqyqesqqwkm:
        aoseoaeigamewkyg:
        goto gomagoumaosyimii;
        ucqcuosmqwiiwigm:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto muukgiowiywgysuy;
            muukgiowiywgysuy:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto gacoqocuigoymcam;
            }
            goto iscuuwgoaosayimo;
            ocqymsowceymagky:
            kuekasacwyquuiqy:
            goto oqsieegccekksmek;
            iscuuwgoaosayimo:
            $ksaameoqigiaoigg = false;
            goto umkkwyaciakygsgo;
            umkkwyaciakygsgo:
            goto aoseoaeigamewkyg;
            goto waoqqaimmwkqikay;
            waoqqaimmwkqikay:
            gacoqocuigoymcam:
            goto ocqymsowceymagky;
            oqsieegccekksmek:
        }
        goto aasyamqyqesqqwkm;
        yucmysyskmgwsowg:
        moceysouasysuwwk:
        goto ucqcuosmqwiiwigm;
        wscswagewsegyiyc:
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && is_array($yygmoeguaqyumuui) && $yygmoeguaqyumuui) {
            goto moceysouasysuwwk;
        }
        goto uyqcwcgaswkaaqys;
        gomagoumaosyimii:
        wgccsswsaiqccecw:
        goto cucceeoseaagcoam;
        oaiigcusecmsciso:
        goto wgccsswsaiqccecw;
        goto yucmysyskmgwsowg;
        uyqcwcgaswkaaqys:
        $ksaameoqigiaoigg = false;
        goto oaiigcusecmsciso;
        qsyimuywgcsoiecu:
    }
    
    public static function gymccqywkegiqiiw($uomewyckeuqoqocu) : int
    {
        goto ksowgigyiiocmmay;
        aokseecsgimieouu:
        if (!$uomewyckeuqoqocu) {
            goto qeqwkkggucamquwc;
        }
        goto euqaywkcamscaugi;
        ieiwqimgggeoaqwm:
        qeqwkkggucamquwc:
        goto cseioaeaywcuekge;
        cseioaeaywcuekge:
        return $iukyueweicuocgow;
        goto yokyoayigkwweqeg;
        ksowgigyiiocmmay:
        $iukyueweicuocgow = 0;
        goto aokseecsgimieouu;
        euqaywkcamscaugi:
        $iukyueweicuocgow = rand(0, count($uomewyckeuqoqocu) - 1);
        goto ieiwqimgggeoaqwm;
        yokyoayigkwweqeg:
    }
    
    public static function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto kaoukeiiiuquqgsm;
        kaoukeiiiuquqgsm:
        $ksaameoqigiaoigg = false;
        goto qigeyewuukwwousm;
        agqgaiqiwcgowsoi:
        iqwsaiomwmyeusaq:
        goto owswisaiecssuwwu;
        qigeyewuukwwousm:
        if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) {
            goto iqwsaiomwmyeusaq;
        }
        goto imeiskyssuamssoq;
        imeiskyssuamssoq:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto hkokwccuegwgeegk;
            iyociciyeiswkaqk:
            goto ykyqsgogqywswoua;
            goto qummwcsgemgwqwga;
            gouyoowcwkccwewk:
            gmiacescgeoqcogu:
            goto qeyssuuycyyguuyo;
            qkcgewmwssuaewie:
            $ksaameoqigiaoigg = true;
            goto iyociciyeiswkaqk;
            qummwcsgemgwqwga:
            gwsqeeiwciqccasw:
            goto gouyoowcwkccwewk;
            hkokwccuegwgeegk:
            if (self::get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) {
                goto gwsqeeiwciqccasw;
            }
            goto qkcgewmwssuaewie;
            qeyssuuycyyguuyo:
        }
        goto ygseoaiecssiymec;
        ygseoaiecssiymec:
        ykyqsgogqywswoua:
        goto agqgaiqiwcgowsoi;
        owswisaiecssuwwu:
        return $ksaameoqigiaoigg;
        goto oowwickgsmcqamqe;
        oowwickgsmcqamqe:
    }
    
    public static function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie)
    {
        goto kocagcykiyimkmoa;
        rasgkseukaaqecam:
        $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie];
        goto qucwqsuacqkymwsm;
        qucwqsuacqkymwsm:
        kyaismgimkqkcmey:
        goto myissqmgymuauowq;
        kocagcykiyimkmoa:
        $qcgkuqesqqymcuui = null;
        goto iswsmaumaacmwcwu;
        scsgmyqiwwwkwayy:
        foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) {
            goto geyksaceayaiwiiy;
            okmawomkamqiwesm:
            umyquqiugigqmkau:
            goto ugaoskycwsqcesko;
            ugaoskycwsqcesko:
            smaisgmkkwgiqygi:
            goto wyuommoqmyaeiswc;
            geyksaceayaiwiiy:
            $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu);
            goto ecqyggsgiqweeyee;
            qykwyyyeyygkiqmi:
            $qcgkuqesqqymcuui = self::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            goto okmawomkamqiwesm;
            ecqyggsgiqweeyee:
            if (!($uusmaiomayssaecw !== false)) {
                goto umyquqiugigqmkau;
            }
            goto qykwyyyeyygkiqmi;
            wyuommoqmyaeiswc:
        }
        goto uyyceeeqmoysskuw;
        ccgiykywckmyiscg:
        return $qcgkuqesqqymcuui;
        goto qqgsggygqommqmkw;
        myissqmgymuauowq:
        $qcgkuqesqqymcuui = false;
        goto scsgmyqiwwwkwayy;
        uyyceeeqmoysskuw:
        miqsgoqewuokegig:
        goto ccgiykywckmyiscg;
        iswsmaumaacmwcwu:
        if (is_array($eqgoocgaqwqcimie)) {
            goto kyaismgimkqkcmey;
        }
        goto rasgkseukaaqecam;
        qqgsggygqommqmkw:
    }
    
    public static function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok)
    {
        goto iosgqqoyoiqgsgks;
        akequyeqowgagiek:
        $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu));
        goto eguqaygayksgkoyq;
        imscgsmqiswkeyka:
        goto aasiooeuekwqamyk;
        goto oyqqsiciakemkgim;
        quumskauyaouyyiy:
        aasiooeuekwqamyk:
        goto ocickgekowkiqyuo;
        iosgqqoyoiqgsgks:
        if (is_int($kuuiuigeacouwmaa)) {
            goto aiskggeswyweiogy;
        }
        goto akequyeqowgagiek;
        oyqqsiciakemkgim:
        aiskggeswyweiogy:
        goto emaakmmcykwmmeum;
        emaakmmcykwmmeum:
        array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok);
        goto quumskauyaouyyiy;
        eguqaygayksgkoyq:
        $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy));
        goto imscgsmqiswkeyka;
        ocickgekowkiqyuo:
    }
    
    public static function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool
    {
        return count($uomewyckeuqoqocu) != count($uomewyckeuqoqocu, 1);
    }
    
    public static function wuoqgcwmkicakygs($uomewyckeuqoqocu) : bool
    {
        goto sygasaomgiqoqmqs;
        cgeimkqsoqqigogy:
        $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1);
        goto ecawoqusqygmccmo;
        sygasaomgiqoqmqs:
        $wuoqgcwmkicakygs = false;
        goto kugoqmkkeqeoakik;
        ecawoqusqygmccmo:
        iqkysoyykewkkwes:
        goto gocwqoqicukssssu;
        kugoqmkkeqeoakik:
        if (!$uomewyckeuqoqocu) {
            goto iqkysoyykewkkwes;
        }
        goto cgeimkqsoqqigogy;
        gocwqoqicukssssu:
        return $wuoqgcwmkicakygs;
        goto owasckmgeweqwsgq;
        owasckmgeweqwsgq:
    }
    
    public static function yaeiiwwyckwugsem($uomewyckeuqoqocu, $igaagwuyasawwqms = self::PRIORITY)
    {
        goto iuumiyikcwiiwuqk;
        yymqcwmasyyamagq:
        return $uomewyckeuqoqocu;
        goto iugskawkyskmcmyg;
        iuumiyikcwiiwuqk:
        if (!is_array($uomewyckeuqoqocu)) {
            goto aksioomuagcyawuk;
        }
        goto aoeccsiuoeigmwkm;
        aoeccsiuoeigmwkm:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms) {
            goto gueiogkegsiymgie;
            owsywiygoiqkyeey:
            if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) {
                goto ouseeusmwgswgayi;
            }
            goto soaekkoykikagyqa;
            aocqwuakameoqqme:
            okgmaysweamaymuk:
            goto aykucyyeseggeeoy;
            amamemmaewcmqmso:
            ouseeusmwgswgayi:
            goto ekmmomgayqemmaqm;
            ekmmomgayqemmaqm:
            goto ayoycomwascmkkkm;
            goto qkiwmwgkosoiiqgo;
            guqmiyswawmaggqw:
            qgwmgswcikqsoymm:
            goto wyymkuqsaikomumi;
            mwewkecyyqycwcyi:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms}() <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}();
            goto guqmiyswawmaggqw;
            gmoewkmwwyeaycgm:
            mkggwgyaywmiaeue:
            goto gykceoyygmmeawws;
            wmggooiesmiaymyw:
            if (!(method_exists($mmeioagwmyscwumo, $igaagwuyasawwqms) && method_exists($csougakqegqiqsgi, $igaagwuyasawwqms))) {
                goto qgwmgswcikqsoymm;
            }
            goto mwewkecyyqycwcyi;
            aykucyyeseggeeoy:
            ayoycomwascmkkkm:
            goto cqqywmesqogkseku;
            qkiwmwgkosoiiqgo:
            qwcsgqgmmsscgsaa:
            goto nicoewqgywcusaci;
            soaekkoykikagyqa:
            $uiuykcweuosgmwki = self::get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> self::get($csougakqegqiqsgi, $igaagwuyasawwqms);
            goto amamemmaewcmqmso;
            gueiogkegsiymgie:
            $uiuykcweuosgmwki = false;
            goto ssgeyeewksygaeqm;
            wyymkuqsaikomumi:
            goto okgmaysweamaymuk;
            goto gmoewkmwwyeaycgm;
            gykceoyygmmeawws:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms};
            goto aocqwuakameoqqme;
            ssgeyeewksygaeqm:
            if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) {
                goto qwcsgqgmmsscgsaa;
            }
            goto owsywiygoiqkyeey;
            cqqywmesqogkseku:
            return $uiuykcweuosgmwki;
            goto eiakokiiwigccesk;
            nicoewqgywcusaci:
            if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) {
                goto mkggwgyaywmiaeue;
            }
            goto wmggooiesmiaymyw;
            eiakokiiwigccesk:
        });
        goto ssmcciyyscekqosk;
        ssmcciyyscekqosk:
        aksioomuagcyawuk:
        goto yymqcwmasyyamagq;
        iugskawkyskmcmyg:
    }
    
    public static function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto qayogkgwkuoycsuy;
        ieqccoywksywcsky:
        return $sogksuscggsicmac;
        goto ocimykqskwaewuia;
        cqgiaauymsygoomq:
        if (!is_object($oaiciiqoawkamweo)) {
            goto yicuaiowomkyaueg;
        }
        goto useumocigsoceeus;
        ogqswkqkcosuewgg:
        goto gcqeiwgakokeuouq;
        goto gueusoewgqkcwkuq;
        qyaiyaqcqsskmwos:
        wsmwsckqgokueicw:
        goto gcaoeocsuqqqyaym;
        acyyqeqgusyqaook:
        if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) {
            goto wsmwsckqgokueicw;
        }
        goto ewiqoyqagowquqqe;
        useumocigsoceeus:
        if (!isset($oaiciiqoawkamweo->{$uusmaiomayssaecw})) {
            goto kuquyyieaicaecie;
        }
        goto aewewmmweiaeuewi;
        aewewmmweiaeuewi:
        $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw};
        goto uwoayuwcsqsekywg;
        gcaoeocsuqqqyaym:
        gcqeiwgakokeuouq:
        goto ieqccoywksywcsky;
        sewmgsmcyiacccoa:
        yicuaiowomkyaueg:
        goto ogqswkqkcosuewgg;
        gueusoewgqkcwkuq:
        oeewiaeeicmwqyiw:
        goto acyyqeqgusyqaook;
        qayogkgwkuoycsuy:
        $sogksuscggsicmac = $ggauoeuaesiymgee;
        goto iaokmyigguukmcky;
        uwoayuwcsqsekywg:
        kuquyyieaicaecie:
        goto sewmgsmcyiacccoa;
        ewiqoyqagowquqqe:
        $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw];
        goto qyaiyaqcqsskmwos;
        iaokmyigguukmcky:
        if (is_array($oaiciiqoawkamweo)) {
            goto oeewiaeeicmwqyiw;
        }
        goto cqgiaauymsygoomq;
        ocimykqskwaewuia:
    }
    
    public static function cswcewwmmicqesei($uomewyckeuqoqocu, $oegoegssokkyiqam) : array
    {
        goto sewqmkouocccomww;
        mmmkqsukesoasosu:
        foreach ($oegoegssokkyiqam as $ymqmyyeuycgmigyo => $mkomwsiykqigmqca) {
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = self::qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca);
            qqewqyiwuaqaakwk:
        }
        goto iauoeqkuisgyagqc;
        qmsoeugoyqquamqk:
        return $sogksuscggsicmac;
        goto iwumyigiscuuwqik;
        iauoeqkuisgyagqc:
        yccuogewgykqkkys:
        goto qmsoeugoyqquamqk;
        sewqmkouocccomww:
        $sogksuscggsicmac = [];
        goto mmmkqsukesoasosu;
        iwumyigiscuuwqik:
    }
    
    public static function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null)
    {
        goto aaqqggkciwcemugy;
        yqisgeugiuokowgw:
        scysiomisyamwocw:
        goto ceckikeaaasskwmo;
        keoaaweuqeeoguyi:
        oqmkiaqgogkikwes:
        goto saqyacsiqwmqgqkm;
        saqyacsiqwmqgqkm:
        return $uomewyckeuqoqocu;
        goto kkwcewqsaeyugawo;
        uwyckgawyyueaaym:
        $uomewyckeuqoqocu = $ggauoeuaesiymgee;
        goto keoaaweuqeeoguyi;
        ceckikeaaasskwmo:
        if ($uomewyckeuqoqocu) {
            goto oqmkiaqgogkikwes;
        }
        goto uwyckgawyyueaaym;
        aaqqggkciwcemugy:
        $yygmoeguaqyumuui = explode("\56", $mkomwsiykqigmqca);
        goto kkgeeeaqoaoskogo;
        kkgeeeaqoaoskogo:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto ickouwcsecqeskwq;
            cmgayuowmaymuaiq:
            oukqkimqsackseiw:
            goto acgauasosqqysagi;
            weekmyeyqukcoegg:
            skywgyiswsmassgq:
            goto ucwyaykmcoikkkuo;
            wwaqsuwkskcooicq:
            if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) {
                goto gwgukcuckigmwoes;
            }
            goto ymqseyksqoouycio;
            oiikekyiqeqogkua:
            goto kagckqkwssikyaay;
            goto cmgayuowmaymuaiq;
            mkikcguagooeiace:
            goto scysiomisyamwocw;
            goto awyaiyumyosuyewi;
            qaqemcccqogoummc:
            uguyeawasakeoekq:
            goto oucwaucwcoegeaco;
            kycykouooecoiyqw:
            $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto yqygigmwumoksekw;
            isymsqwwkmwkamuy:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto wwscaygcymkwcoas;
            }
            goto igoocsoeousssema;
            wwqikmmkomakgaou:
            if (is_object($uomewyckeuqoqocu)) {
                goto uguyeawasakeoekq;
            }
            goto yqyqsioacayucksc;
            igeccyeusumcacea:
            gwgukcuckigmwoes:
            goto kwickmmwwyqigccu;
            igoocsoeousssema:
            $uomewyckeuqoqocu = null;
            goto mkikcguagooeiace;
            ucwyaykmcoikkkuo:
            goto uisiuwgqougckasg;
            goto aauqmqqqakiaqeqo;
            eceacmeaisaqssco:
            uisiuwgqougckasg:
            goto sqwyqsciuaceoaaa;
            kwickmmwwyqigccu:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw};
            goto iiuwsswoayimgack;
            kcaqocqaugkyiyys:
            goto scysiomisyamwocw;
            goto aqkgkwewsqkeyusm;
            qeqquaucmqkmsmoq:
            kagckqkwssikyaay:
            goto weekmyeyqukcoegg;
            acgauasosqqysagi:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}();
            goto qeqquaucmqkmsmoq;
            ickouwcsecqeskwq:
            if (is_array($uomewyckeuqoqocu)) {
                goto swiiumgaagycwyoa;
            }
            goto wwqikmmkomakgaou;
            gwmwmaqgwkkamqmo:
            goto scysiomisyamwocw;
            goto yukgigiiimqqwiyq;
            ymqseyksqoouycio:
            $uomewyckeuqoqocu = null;
            goto kcaqocqaugkyiyys;
            aauqmqqqakiaqeqo:
            swiiumgaagycwyoa:
            goto isymsqwwkmwkamuy;
            sqwyqsciuaceoaaa:
            raqaugusyaieeuyi:
            goto uwkaywsgkmicamom;
            wquqgqsyiccogoac:
            wwscaygcymkwcoas:
            goto kycykouooecoiyqw;
            yqygigmwumoksekw:
            iycuugwwawmiewmq:
            goto eceacmeaisaqssco;
            yqyqsioacayucksc:
            $uomewyckeuqoqocu = null;
            goto gwmwmaqgwkkamqmo;
            iiuwsswoayimgack:
            wkisqogwyuawwiqo:
            goto oiikekyiqeqogkua;
            yukgigiiimqqwiyq:
            goto skywgyiswsmassgq;
            goto qaqemcccqogoummc;
            oucwaucwcoegeaco:
            if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) {
                goto oukqkimqsackseiw;
            }
            goto wwaqsuwkskcooicq;
            aqkgkwewsqkeyusm:
            goto wkisqogwyuawwiqo;
            goto igeccyeusumcacea;
            awyaiyumyosuyewi:
            goto iycuugwwawmiewmq;
            goto wquqgqsyiccogoac;
            uwkaywsgkmicamom:
        }
        goto yqisgeugiuokowgw;
        kkwcewqsaeyugawo:
    }
    
    public static function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array
    {
        goto ygsaygcskekuwgya;
        oaeweiaegakeieoi:
        amiessagaiiiiiei:
        goto iqgcumoueoaacgkc;
        auiwyymoguwkooew:
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true);
        goto oaeweiaegakeieoi;
        iqgcumoueoaacgkc:
        ewquwuoyeeiwkwuy:
        goto yowsymiqiqgkmuuy;
        keqgmaemoceqssyy:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) {
            return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw];
        });
        goto kqcusmuiyoqmeqwu;
        yowsymiqiqgkmuuy:
        return $uomewyckeuqoqocu;
        goto wewmsmwegeoqoeem;
        ygsaygcskekuwgya:
        if (!is_array($uomewyckeuqoqocu)) {
            goto ewquwuoyeeiwkwuy;
        }
        goto keqgmaemoceqssyy;
        kqcusmuiyoqmeqwu:
        if (!($uuyoeicyoayimaoa > 0)) {
            goto amiessagaiiiiiei;
        }
        goto auiwyymoguwkooew;
        wewmsmwegeoqoeem:
    }
    
    public static function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array
    {
        goto wuuqskwuoeacgacg;
        boekkoaekyqaemmq:
        woagemomagskuyii:
        goto eqqgiigwkciiksuo;
        egaqukiucuckkqai:
        $ggauoeuaesiymgee = '';
        goto osmciccqwowieume;
        eqqgiigwkciiksuo:
        usggsqksmaaukmqq:
        goto mcqimygcwcqcssky;
        mcqimygcwcqcssky:
        return $sogksuscggsicmac;
        goto awmyswwkwqgugmmy;
        keakmgioceekisuk:
        if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) {
            goto usggsqksmaaukmqq;
        }
        goto egaqukiucuckkqai;
        wuuqskwuoeacgacg:
        $sogksuscggsicmac = [];
        goto keakmgioceekisuk;
        osmciccqwowieume:
        foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) {
            goto kummaeaoeksaiasa;
            qmuqwqmumcayeiku:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto mskqaucggqcumquk;
            mskqaucggqcumquk:
            ogmcsmoewwocmkme:
            goto kuiicmskwegaoggu;
            kummaeaoeksaiasa:
            if (is_numeric($ewyuweyoskiagksm)) {
                goto cusoaecwsaeckaie;
            }
            goto cgoaqiqsuomgmysm;
            aksaumeeuqawgwmi:
            qgaeuqkwwoikwsus:
            goto qmuqwqmumcayeiku;
            kgisumcygmcgyemm:
            $eqgoocgaqwqcimie = call_user_func($ekiuyucoiagmscgy, $eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto yesicceuyqcyysue;
            cuwayimcsiycgmim:
            $ggauoeuaesiymgee = $uauoccoqcsaeggui;
            goto sgkayqyykwuagyiu;
            emiosiemcoyoeoou:
            iymqokemgwcsgeiu:
            goto sscoeeyeeggsckyo;
            sgkayqyykwuagyiu:
            goto iymqokemgwcsgeiu;
            goto nwckgaiueoigasee;
            ikuauuskoukskkmo:
            if ($mywqgwsimwoeoawk) {
                goto qgaeuqkwwoikwsus;
            }
            goto kgoeamguscusyywe;
            wewusiqwsukukkms:
            goto ogmcsmoewwocmkme;
            goto aksaumeeuqawgwmi;
            cgoaqiqsuomgmysm:
            $uusmaiomayssaecw = $ewyuweyoskiagksm;
            goto cuwayimcsiycgmim;
            yesicceuyqcyysue:
            ggyqoucwiyqucqsi:
            goto ikuauuskoukskkmo;
            qeggaicaycsqqkio:
            if (!is_callable($ekiuyucoiagmscgy)) {
                goto ggyqoucwiyqucqsi;
            }
            goto kgisumcygmcgyemm;
            sscoeeyeeggsckyo:
            $eqgoocgaqwqcimie = self::get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto qeggaicaycsqqkio;
            nwckgaiueoigasee:
            cusoaecwsaeckaie:
            goto eocckcsgsycuywyi;
            kgoeamguscusyywe:
            $sogksuscggsicmac[] = $eqgoocgaqwqcimie;
            goto wewusiqwsukukkms;
            eocckcsgsycuywyi:
            $uusmaiomayssaecw = $uauoccoqcsaeggui;
            goto emiosiemcoyoeoou;
            kuiicmskwegaoggu:
            gqoiqscswogsymcu:
            goto ggiycasgekosqyqk;
            ggiycasgekosqyqk:
        }
        goto boekkoaekyqaemmq;
        awmyswwkwqgugmmy:
    }
    
    public static function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = [])
    {
        goto oywuqkssgiiumuis;
        ooyqgwsoeyqoucae:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) {
            goto kewcuamqaiyeayio;
            qsieyoiaoiqaumus:
            goto qoeiqqmskcqeaiug;
            goto mieaoqwgaukeysis;
            kokuyqgigassuuoc:
            $sogksuscggsicmac = self::kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac);
            goto yaekwuquieusamyw;
            oeoaqooaouowkwec:
            if ($xkqaigkogigocask) {
                goto muowkaagoqiyegme;
            }
            goto ugqsesmesggiqaos;
            qywsmseiceqecigi:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu;
            goto gwqicekgscayqcuq;
            ygyugquqaqegwioo:
            aoueogeoyisucaiq:
            goto komsqawwueueiuag;
            ugqsesmesggiqaos:
            $sogksuscggsicmac[] = $esquqsuaumgwoewu;
            goto kawkmiguwoooksec;
            kewcuamqaiyeayio:
            if (is_array($esquqsuaumgwoewu)) {
                goto yiisikkiqosawsgu;
            }
            goto oeoaqooaouowkwec;
            gwqicekgscayqcuq:
            akeowgkiskougikg:
            goto qsieyoiaoiqaumus;
            kawkmiguwoooksec:
            goto akeowgkiskougikg;
            goto iiigksqqskiumiqi;
            iiigksqqskiumiqi:
            muowkaagoqiyegme:
            goto qywsmseiceqecigi;
            yaekwuquieusamyw:
            qoeiqqmskcqeaiug:
            goto ygyugquqaqegwioo;
            mieaoqwgaukeysis:
            yiisikkiqosawsgu:
            goto kokuyqgigassuuoc;
            komsqawwueueiuag:
        }
        goto yksiaqaciswymeim;
        scgqkqkwimicokau:
        return $sogksuscggsicmac;
        goto ouumywcisskmgyio;
        gsggsgayikymekok:
        ckeccumaeeuamqem:
        goto scgqkqkwimicokau;
        oywuqkssgiiumuis:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto ckeccumaeeuamqem;
        }
        goto ooyqgwsoeyqoucae;
        yksiaqaciswymeim:
        kskoukygaaicomgy:
        goto gsggsgayikymekok;
        ouumywcisskmgyio:
    }
    
    public static function qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $aumugyockeskamiq, $gymeemoisimggcww = true) : array
    {
        goto iiiaciykaukmuiwu;
        wsumwkwmcygcqyaa:
        unset($ggkaciewmeqmgckg[$aumugyockeskamiq]);
        goto gkwkcgcewcecmgoe;
        smwmewocqywykcou:
        ceimuucmqmuygqiu:
        goto agckaqmuskakeumg;
        agckaqmuskakeumg:
        return $uomewyckeuqoqocu;
        goto emqiswoqkweuamuw;
        womkaomokgseakue:
        $ggkaciewmeqmgckg = array_splice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)));
        goto agameskciseayqqy;
        symyoqqgcwomyksw:
        goto ceimuucmqmuygqiu;
        goto euayciwoioqckyoi;
        uocisouiiqciywim:
        ekwoimwoqucawyis:
        goto smwmewocqywykcou;
        iiiaciykaukmuiwu:
        if (is_array($aumugyockeskamiq)) {
            goto uowumqmesgawkcme;
        }
        goto wmwqumcksgkckeae;
        sgsmmgiuyuukgsyi:
        $ggkaciewmeqmgckg = array_slice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)), true);
        goto qsemsoimoauiccmm;
        ceqkmcaycyskmoia:
        ewowkiosiisoacse:
        goto womkaomokgseakue;
        agameskciseayqqy:
        awsiakgwsaqyiggo:
        goto wsumwkwmcygcqyaa;
        qayyssyasegwkuwi:
        $aseguuimuokgcami = [$aumugyockeskamiq => $uomewyckeuqoqocu[$aumugyockeskamiq]];
        goto qwyuicgesgumuuum;
        gqwkiummucquoece:
        foreach ($aumugyockeskamiq as $igqsaukqcqscimok) {
            $uomewyckeuqoqocu = self::qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $igqsaukqcqscimok, $gymeemoisimggcww);
            iqskmoysaamkuoim:
        }
        goto uocisouiiqciywim;
        qwyuicgesgumuuum:
        if ($gymeemoisimggcww) {
            goto ewowkiosiisoacse;
        }
        goto sgsmmgiuyuukgsyi;
        qaymskucssiyeasw:
        kemciyisiqsemmwm:
        goto symyoqqgcwomyksw;
        qsemsoimoauiccmm:
        goto awsiakgwsaqyiggo;
        goto ceqkmcaycyskmoia;
        euayciwoioqckyoi:
        uowumqmesgawkcme:
        goto gqwkiummucquoece;
        gkwkcgcewcecmgoe:
        $uomewyckeuqoqocu = $ggkaciewmeqmgckg + $aseguuimuokgcami + $uomewyckeuqoqocu;
        goto qaymskucssiyeasw;
        wmwqumcksgkckeae:
        if (!isset($uomewyckeuqoqocu[$ksiyqouuaoymsycg], $uomewyckeuqoqocu[$aumugyockeskamiq])) {
            goto kemciyisiqsemmwm;
        }
        goto qayyssyasegwkuwi;
        emqiswoqkweuamuw:
    }
    
    public static function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array
    {
        goto ysyiewokqwgckeko;
        wwiqmgogkuoaucyc:
        return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik];
        goto siaagaokcmgeuimo;
        mooomiuasyggqsis:
        $aqeywoskqiugcmye = null;
        goto quqkqymwqwywgesy;
        quqkqymwqwywgesy:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
            goto kmwckweaaawgkumy;
            gocscsauukioowcq:
            $uiymkeeaukcyqqik = $eqgoocgaqwqcimie;
            goto iauekwigiwssawke;
            gakuaukecwikgsmc:
            $giqggecqqikcysgq = $ykiwomimkkuiigoq;
            goto gocscsauukioowcq;
            wuiuuyooeukyiois:
            oeqecewccwqsqmmc:
            goto gqkwumcquuuwoqkw;
            gqkwumcquuuwoqkw:
            kkmyoieguiwecakw:
            goto ykeogiauqegcimwm;
            yaacmieqceeiyuii:
            osckyscuccyeyiea:
            goto gmwiocukkqksiwkk;
            ggcewuaywkywgcoa:
            guseeaqsaueqcweo:
            goto wuiuuyooeukyiois;
            kmwckweaaawgkumy:
            if (key_exists($momcykaoccoymeig, $couiucmsqaieciue)) {
                goto kkmyoieguiwecakw;
            }
            goto oqewauiqmkiiaiqe;
            uqgqukmekkieakco:
            if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) {
                goto guseeaqsaueqcweo;
            }
            goto gakuaukecwikgsmc;
            gmwiocukkqksiwkk:
            if (!is_string($eqgoocgaqwqcimie)) {
                goto oeqecewccwqsqmmc;
            }
            goto saqmoqaeaoqmaaqo;
            ykeogiauqegcimwm:
            iisiamyqqaaoykga:
            goto yymmqiaisemuayke;
            iauekwigiwssawke:
            $aqeywoskqiugcmye = $momcykaoccoymeig;
            goto ggcewuaywkywgcoa;
            oqewauiqmkiiaiqe:
            if (!is_object($eqgoocgaqwqcimie)) {
                goto osckyscuccyeyiea;
            }
            goto gkscusucwgaoooso;
            gkscusucwgaoooso:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
            goto yaacmieqceeiyuii;
            saqmoqaeaoqmaaqo:
            $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
            goto uqgqukmekkieakco;
            yymmqiaisemuayke:
        }
        goto cmagkaygaemaaici;
        cmagkaygaemaaici:
        ogigeoakcogugeym:
        goto wwiqmgogkuoaucyc;
        uqmsgooywggqywam:
        $uiymkeeaukcyqqik = null;
        goto mooomiuasyggqsis;
        ysyiewokqwgckeko:
        $giqggecqqikcysgq = 0;
        goto uqmsgooywggqywam;
        siaagaokcmgeuimo:
    }
    
    public static function ksiyqouuaoymsycg(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, $momcykaoccoymeig = false)
    {
        goto yyyqqsuawgwkayme;
        kimmqccoykmmokim:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto yocoiwekswmeqosg;
            guukcuckowqqgqag:
            usmksyiucoeycycc:
            goto kumeocwaamwuggmy;
            iaqaecisewceswme:
            if (!($esoaccosseymguso == $qwcmueausqgiwigy)) {
                goto uamoquqaiywkyigy;
            }
            goto ayugswgkeymseuoe;
            ycwsommucswweyww:
            goto eoyqkmiwoiyecqiq;
            goto moigkuskomyqceuu;
            ayugswgkeymseuoe:
            if ($momcykaoccoymeig) {
                goto ucmuqycsksssuyku;
            }
            goto yaumammegwowmsqu;
            qiakkkgsokqowqkg:
            uamoquqaiywkyigy:
            goto guukcuckowqqgqag;
            aaqiiwuwmyqqekwm:
            $ksiyqouuaoymsycg = $momcykaoccoymeig;
            goto usomesuioqacuiwm;
            yocoiwekswmeqosg:
            $esoaccosseymguso = self::qamwegcyimgcqksw($igqsaukqcqscimok, $mkomwsiykqigmqca);
            goto iaqaecisewceswme;
            yaumammegwowmsqu:
            $ksiyqouuaoymsycg = $igqsaukqcqscimok;
            goto ycwsommucswweyww;
            sossqwuskoaguiie:
            goto yukmmiscasoogmyu;
            goto qiakkkgsokqowqkg;
            moigkuskomyqceuu:
            ucmuqycsksssuyku:
            goto aaqiiwuwmyqqekwm;
            usomesuioqacuiwm:
            eoyqkmiwoiyecqiq:
            goto sossqwuskoaguiie;
            kumeocwaamwuggmy:
        }
        goto agksoawkuoguyeio;
        caumcscgkmkqgceq:
        return $ksiyqouuaoymsycg;
        goto ycywkayeqeumswqg;
        agksoawkuoguyeio:
        yukmmiscasoogmyu:
        goto caumcscgkmkqgceq;
        yyyqqsuawgwkayme:
        $ksiyqouuaoymsycg = null;
        goto kimmqccoykmmokim;
        ycywkayeqeumswqg:
    }
}

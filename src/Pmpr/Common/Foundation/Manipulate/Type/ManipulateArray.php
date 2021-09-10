<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateArray extends Common
{
    
    public static function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw)
    {
        goto asumyiuqmmywiwyc;
        ewkqiewssocsquuo:
        if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) {
            goto yusagekewyiqqqyk;
        }
        goto qeaowsgcqsuccawg;
        ywumqymqkuyegcae:
        return $eqgoocgaqwqcimie;
        goto ycesoqquooyiwusg;
        qeaowsgcqsuccawg:
        if (is_array($uusmaiomayssaecw)) {
            goto eiseywwywkwcwgcq;
        }
        goto kamukeioemqucmmg;
        esqkgmaasckugmqo:
        eiseywwywkwcwgcq:
        goto ygqaaocooiqkugos;
        ewcysecswgsugswi:
        goto swagceggcwqkcgkg;
        goto esqkgmaasckugmqo;
        yaawcswsqyucgsus:
        agmgeuqwqyskeace:
        goto ewcysecswgsugswi;
        cksyaoquscmmscke:
        swagceggcwqkcgkg:
        goto gggogewkqkskuicm;
        gggogewkqkskuicm:
        yusagekewyiqqqyk:
        goto ywumqymqkuyegcae;
        mmgoicukswqwseoc:
        unset($uomewyckeuqoqocu[$uusmaiomayssaecw]);
        goto yaawcswsqyucgsus;
        yaawiccsokmgweye:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
        goto mmgoicukswqwseoc;
        kamukeioemqucmmg:
        if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
            goto agmgeuqwqyskeace;
        }
        goto yaawiccsokmgweye;
        ygqaaocooiqkugos:
        $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw));
        goto cksyaoquscmmscke;
        asumyiuqmmywiwyc:
        $eqgoocgaqwqcimie = null;
        goto ewkqiewssocsquuo;
        ycesoqquooyiwusg:
    }
    
    public static function set($oaiciiqoawkamweo, $uwomkgseoiegeume = [])
    {
        goto iawwywggiwmigeiy;
        aucikuqogioweysy:
        kymsyoeswiuqoeam:
        goto uykcicoeacqaykia;
        gmmwicowkqiisogm:
        $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo);
        goto oogwiuueieywymio;
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
        wwykqesuwsqiwyiw:
        foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto uqkuaiqggmmqkwcg;
            sqeucqqqmoqcuuem:
            ogyecgyqquwgcugi:
            goto ocguegwcwgegqugs;
            gooaiamwaqiueqag:
            swasyymuuuesyssc:
            goto akiawysiwswoqmee;
            kmawkwiiceqawowo:
            oeoawwmyiaaaieoy:
            goto mgskwyqqysgqegwe;
            mksesqkqwqwyiski:
            if (!$awqscowmskeuymeu) {
                goto swasyymuuuesyssc;
            }
            goto ecoqoquwuygscmai;
            ocguegwcwgegqugs:
            $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto gmmukayqkigwksam;
            akiawysiwswoqmee:
            goto cyewimeguwgissoe;
            goto sqeucqqqmoqcuuem;
            uqkuaiqggmmqkwcg:
            if ($casemmqcsgmemwyg) {
                goto ogyecgyqquwgcugi;
            }
            goto mksesqkqwqwyiski;
            gmmukayqkigwksam:
            cyewimeguwgissoe:
            goto kmawkwiiceqawowo;
            ecoqoquwuygscmai:
            $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie;
            goto gooaiamwaqiueqag;
            mgskwyqqysgqegwe:
        }
        goto aucikuqogioweysy;
        oogwiuueieywymio:
        $awqscowmskeuymeu = is_object($oaiciiqoawkamweo);
        goto wwykqesuwsqiwyiw;
        cuqccemgkguqycgc:
    }
    
    public static function isset($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto qyuigkqusowucaqq;
        aasyamqyqesqqwkm:
        aoseoaeigamewkyg:
        goto gomagoumaosyimii;
        ucqcuosmqwiiwigm:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto muukgiowiywgysuy;
            iscuuwgoaosayimo:
            $ksaameoqigiaoigg = false;
            goto umkkwyaciakygsgo;
            umkkwyaciakygsgo:
            goto aoseoaeigamewkyg;
            goto waoqqaimmwkqikay;
            muukgiowiywgysuy:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto gacoqocuigoymcam;
            }
            goto iscuuwgoaosayimo;
            waoqqaimmwkqikay:
            gacoqocuigoymcam:
            goto ocqymsowceymagky;
            ocqymsowceymagky:
            kuekasacwyquuiqy:
            goto oqsieegccekksmek;
            oqsieegccekksmek:
        }
        goto aasyamqyqesqqwkm;
        oaiigcusecmsciso:
        goto wgccsswsaiqccecw;
        goto yucmysyskmgwsowg;
        gomagoumaosyimii:
        wgccsswsaiqccecw:
        goto cucceeoseaagcoam;
        cucceeoseaagcoam:
        return $ksaameoqigiaoigg;
        goto qsyimuywgcsoiecu;
        uyqcwcgaswkaaqys:
        $ksaameoqigiaoigg = false;
        goto oaiigcusecmsciso;
        yucmysyskmgwsowg:
        moceysouasysuwwk:
        goto ucqcuosmqwiiwigm;
        wscswagewsegyiyc:
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && is_array($yygmoeguaqyumuui) && $yygmoeguaqyumuui) {
            goto moceysouasysuwwk;
        }
        goto uyqcwcgaswkaaqys;
        qyuigkqusowucaqq:
        $ksaameoqigiaoigg = true;
        goto wscswagewsegyiyc;
        qsyimuywgcsoiecu:
    }
    
    public static function gymccqywkegiqiiw($uomewyckeuqoqocu) : int
    {
        goto ksowgigyiiocmmay;
        ksowgigyiiocmmay:
        $iukyueweicuocgow = 0;
        goto aokseecsgimieouu;
        cseioaeaywcuekge:
        return $iukyueweicuocgow;
        goto yokyoayigkwweqeg;
        euqaywkcamscaugi:
        $iukyueweicuocgow = rand(0, count($uomewyckeuqoqocu) - 1);
        goto ieiwqimgggeoaqwm;
        ieiwqimgggeoaqwm:
        qeqwkkggucamquwc:
        goto cseioaeaywcuekge;
        aokseecsgimieouu:
        if (!$uomewyckeuqoqocu) {
            goto qeqwkkggucamquwc;
        }
        goto euqaywkcamscaugi;
        yokyoayigkwweqeg:
    }
    
    public static function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto kaoukeiiiuquqgsm;
        owswisaiecssuwwu:
        return $ksaameoqigiaoigg;
        goto oowwickgsmcqamqe;
        kaoukeiiiuquqgsm:
        $ksaameoqigiaoigg = false;
        goto qigeyewuukwwousm;
        qigeyewuukwwousm:
        if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) {
            goto iqwsaiomwmyeusaq;
        }
        goto imeiskyssuamssoq;
        ygseoaiecssiymec:
        ykyqsgogqywswoua:
        goto agqgaiqiwcgowsoi;
        imeiskyssuamssoq:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto hkokwccuegwgeegk;
            qummwcsgemgwqwga:
            gwsqeeiwciqccasw:
            goto gouyoowcwkccwewk;
            hkokwccuegwgeegk:
            if (self::get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) {
                goto gwsqeeiwciqccasw;
            }
            goto qkcgewmwssuaewie;
            iyociciyeiswkaqk:
            goto ykyqsgogqywswoua;
            goto qummwcsgemgwqwga;
            qkcgewmwssuaewie:
            $ksaameoqigiaoigg = true;
            goto iyociciyeiswkaqk;
            gouyoowcwkccwewk:
            gmiacescgeoqcogu:
            goto qeyssuuycyyguuyo;
            qeyssuuycyyguuyo:
        }
        goto ygseoaiecssiymec;
        agqgaiqiwcgowsoi:
        iqwsaiomwmyeusaq:
        goto owswisaiecssuwwu;
        oowwickgsmcqamqe:
    }
    
    public static function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie)
    {
        goto kocagcykiyimkmoa;
        iswsmaumaacmwcwu:
        if (is_array($eqgoocgaqwqcimie)) {
            goto kyaismgimkqkcmey;
        }
        goto rasgkseukaaqecam;
        myissqmgymuauowq:
        $qcgkuqesqqymcuui = false;
        goto scsgmyqiwwwkwayy;
        kocagcykiyimkmoa:
        $qcgkuqesqqymcuui = null;
        goto iswsmaumaacmwcwu;
        rasgkseukaaqecam:
        $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie];
        goto qucwqsuacqkymwsm;
        uyyceeeqmoysskuw:
        miqsgoqewuokegig:
        goto ccgiykywckmyiscg;
        ccgiykywckmyiscg:
        return $qcgkuqesqqymcuui;
        goto qqgsggygqommqmkw;
        qucwqsuacqkymwsm:
        kyaismgimkqkcmey:
        goto myissqmgymuauowq;
        scsgmyqiwwwkwayy:
        foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) {
            goto geyksaceayaiwiiy;
            geyksaceayaiwiiy:
            $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu);
            goto ecqyggsgiqweeyee;
            ugaoskycwsqcesko:
            smaisgmkkwgiqygi:
            goto wyuommoqmyaeiswc;
            qykwyyyeyygkiqmi:
            $qcgkuqesqqymcuui = self::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            goto okmawomkamqiwesm;
            ecqyggsgiqweeyee:
            if (!($uusmaiomayssaecw !== false)) {
                goto umyquqiugigqmkau;
            }
            goto qykwyyyeyygkiqmi;
            okmawomkamqiwesm:
            umyquqiugigqmkau:
            goto ugaoskycwsqcesko;
            wyuommoqmyaeiswc:
        }
        goto uyyceeeqmoysskuw;
        qqgsggygqommqmkw:
    }
    
    public static function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok)
    {
        goto iosgqqoyoiqgsgks;
        eguqaygayksgkoyq:
        $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy));
        goto imscgsmqiswkeyka;
        imscgsmqiswkeyka:
        goto aasiooeuekwqamyk;
        goto oyqqsiciakemkgim;
        oyqqsiciakemkgim:
        aiskggeswyweiogy:
        goto emaakmmcykwmmeum;
        quumskauyaouyyiy:
        aasiooeuekwqamyk:
        goto ocickgekowkiqyuo;
        akequyeqowgagiek:
        $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu));
        goto eguqaygayksgkoyq;
        iosgqqoyoiqgsgks:
        if (is_int($kuuiuigeacouwmaa)) {
            goto aiskggeswyweiogy;
        }
        goto akequyeqowgagiek;
        emaakmmcykwmmeum:
        array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok);
        goto quumskauyaouyyiy;
        ocickgekowkiqyuo:
    }
    
    public static function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool
    {
        return count($uomewyckeuqoqocu) != count($uomewyckeuqoqocu, 1);
    }
    
    public static function wuoqgcwmkicakygs($uomewyckeuqoqocu) : bool
    {
        goto sygasaomgiqoqmqs;
        gocwqoqicukssssu:
        return $wuoqgcwmkicakygs;
        goto owasckmgeweqwsgq;
        kugoqmkkeqeoakik:
        if (!$uomewyckeuqoqocu) {
            goto iqkysoyykewkkwes;
        }
        goto cgeimkqsoqqigogy;
        ecawoqusqygmccmo:
        iqkysoyykewkkwes:
        goto gocwqoqicukssssu;
        sygasaomgiqoqmqs:
        $wuoqgcwmkicakygs = false;
        goto kugoqmkkeqeoakik;
        cgeimkqsoqqigogy:
        $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1);
        goto ecawoqusqygmccmo;
        owasckmgeweqwsgq:
    }
    
    public static function yaeiiwwyckwugsem($uomewyckeuqoqocu, $igaagwuyasawwqms = self::PRIORITY)
    {
        goto iuumiyikcwiiwuqk;
        aoeccsiuoeigmwkm:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms) {
            goto gueiogkegsiymgie;
            nicoewqgywcusaci:
            if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) {
                goto mkggwgyaywmiaeue;
            }
            goto wmggooiesmiaymyw;
            soaekkoykikagyqa:
            $uiuykcweuosgmwki = self::get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> self::get($csougakqegqiqsgi, $igaagwuyasawwqms);
            goto amamemmaewcmqmso;
            amamemmaewcmqmso:
            ouseeusmwgswgayi:
            goto ekmmomgayqemmaqm;
            ekmmomgayqemmaqm:
            goto ayoycomwascmkkkm;
            goto qkiwmwgkosoiiqgo;
            gmoewkmwwyeaycgm:
            mkggwgyaywmiaeue:
            goto gykceoyygmmeawws;
            aykucyyeseggeeoy:
            ayoycomwascmkkkm:
            goto cqqywmesqogkseku;
            guqmiyswawmaggqw:
            qgwmgswcikqsoymm:
            goto wyymkuqsaikomumi;
            qkiwmwgkosoiiqgo:
            qwcsgqgmmsscgsaa:
            goto nicoewqgywcusaci;
            wmggooiesmiaymyw:
            if (!(method_exists($mmeioagwmyscwumo, $igaagwuyasawwqms) && method_exists($csougakqegqiqsgi, $igaagwuyasawwqms))) {
                goto qgwmgswcikqsoymm;
            }
            goto mwewkecyyqycwcyi;
            gueiogkegsiymgie:
            $uiuykcweuosgmwki = false;
            goto ssgeyeewksygaeqm;
            mwewkecyyqycwcyi:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms}() <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}();
            goto guqmiyswawmaggqw;
            cqqywmesqogkseku:
            return $uiuykcweuosgmwki;
            goto eiakokiiwigccesk;
            ssgeyeewksygaeqm:
            if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) {
                goto qwcsgqgmmsscgsaa;
            }
            goto owsywiygoiqkyeey;
            gykceoyygmmeawws:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms};
            goto aocqwuakameoqqme;
            aocqwuakameoqqme:
            okgmaysweamaymuk:
            goto aykucyyeseggeeoy;
            wyymkuqsaikomumi:
            goto okgmaysweamaymuk;
            goto gmoewkmwwyeaycgm;
            owsywiygoiqkyeey:
            if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) {
                goto ouseeusmwgswgayi;
            }
            goto soaekkoykikagyqa;
            eiakokiiwigccesk:
        });
        goto ssmcciyyscekqosk;
        iuumiyikcwiiwuqk:
        if (!is_array($uomewyckeuqoqocu)) {
            goto aksioomuagcyawuk;
        }
        goto aoeccsiuoeigmwkm;
        yymqcwmasyyamagq:
        return $uomewyckeuqoqocu;
        goto iugskawkyskmcmyg;
        ssmcciyyscekqosk:
        aksioomuagcyawuk:
        goto yymqcwmasyyamagq;
        iugskawkyskmcmyg:
    }
    
    public static function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto qayogkgwkuoycsuy;
        uwoayuwcsqsekywg:
        kuquyyieaicaecie:
        goto sewmgsmcyiacccoa;
        sewmgsmcyiacccoa:
        yicuaiowomkyaueg:
        goto ogqswkqkcosuewgg;
        gueusoewgqkcwkuq:
        oeewiaeeicmwqyiw:
        goto acyyqeqgusyqaook;
        gcaoeocsuqqqyaym:
        gcqeiwgakokeuouq:
        goto ieqccoywksywcsky;
        ewiqoyqagowquqqe:
        $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw];
        goto qyaiyaqcqsskmwos;
        qyaiyaqcqsskmwos:
        wsmwsckqgokueicw:
        goto gcaoeocsuqqqyaym;
        cqgiaauymsygoomq:
        if (!is_object($oaiciiqoawkamweo)) {
            goto yicuaiowomkyaueg;
        }
        goto useumocigsoceeus;
        ieqccoywksywcsky:
        return $sogksuscggsicmac;
        goto ocimykqskwaewuia;
        iaokmyigguukmcky:
        if (is_array($oaiciiqoawkamweo)) {
            goto oeewiaeeicmwqyiw;
        }
        goto cqgiaauymsygoomq;
        useumocigsoceeus:
        if (!isset($oaiciiqoawkamweo->{$uusmaiomayssaecw})) {
            goto kuquyyieaicaecie;
        }
        goto aewewmmweiaeuewi;
        acyyqeqgusyqaook:
        if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) {
            goto wsmwsckqgokueicw;
        }
        goto ewiqoyqagowquqqe;
        aewewmmweiaeuewi:
        $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw};
        goto uwoayuwcsqsekywg;
        qayogkgwkuoycsuy:
        $sogksuscggsicmac = $ggauoeuaesiymgee;
        goto iaokmyigguukmcky;
        ogqswkqkcosuewgg:
        goto gcqeiwgakokeuouq;
        goto gueusoewgqkcwkuq;
        ocimykqskwaewuia:
    }
    
    public static function cswcewwmmicqesei($uomewyckeuqoqocu, $oegoegssokkyiqam) : array
    {
        goto sewqmkouocccomww;
        sewqmkouocccomww:
        $sogksuscggsicmac = [];
        goto mmmkqsukesoasosu;
        qmsoeugoyqquamqk:
        return $sogksuscggsicmac;
        goto iwumyigiscuuwqik;
        mmmkqsukesoasosu:
        foreach ($oegoegssokkyiqam as $ymqmyyeuycgmigyo => $mkomwsiykqigmqca) {
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = self::qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca);
            qqewqyiwuaqaakwk:
        }
        goto iauoeqkuisgyagqc;
        iauoeqkuisgyagqc:
        yccuogewgykqkkys:
        goto qmsoeugoyqquamqk;
        iwumyigiscuuwqik:
    }
    
    public static function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null)
    {
        goto aaqqggkciwcemugy;
        saqyacsiqwmqgqkm:
        return $uomewyckeuqoqocu;
        goto kkwcewqsaeyugawo;
        yqisgeugiuokowgw:
        scysiomisyamwocw:
        goto ceckikeaaasskwmo;
        uwyckgawyyueaaym:
        $uomewyckeuqoqocu = $ggauoeuaesiymgee;
        goto keoaaweuqeeoguyi;
        kkgeeeaqoaoskogo:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto ickouwcsecqeskwq;
            wquqgqsyiccogoac:
            wwscaygcymkwcoas:
            goto kycykouooecoiyqw;
            oiikekyiqeqogkua:
            goto kagckqkwssikyaay;
            goto cmgayuowmaymuaiq;
            gwmwmaqgwkkamqmo:
            goto scysiomisyamwocw;
            goto yukgigiiimqqwiyq;
            cmgayuowmaymuaiq:
            oukqkimqsackseiw:
            goto acgauasosqqysagi;
            kycykouooecoiyqw:
            $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto yqygigmwumoksekw;
            yqyqsioacayucksc:
            $uomewyckeuqoqocu = null;
            goto gwmwmaqgwkkamqmo;
            iiuwsswoayimgack:
            wkisqogwyuawwiqo:
            goto oiikekyiqeqogkua;
            igeccyeusumcacea:
            gwgukcuckigmwoes:
            goto kwickmmwwyqigccu;
            acgauasosqqysagi:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}();
            goto qeqquaucmqkmsmoq;
            weekmyeyqukcoegg:
            skywgyiswsmassgq:
            goto ucwyaykmcoikkkuo;
            mkikcguagooeiace:
            goto scysiomisyamwocw;
            goto awyaiyumyosuyewi;
            sqwyqsciuaceoaaa:
            raqaugusyaieeuyi:
            goto uwkaywsgkmicamom;
            isymsqwwkmwkamuy:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto wwscaygcymkwcoas;
            }
            goto igoocsoeousssema;
            qeqquaucmqkmsmoq:
            kagckqkwssikyaay:
            goto weekmyeyqukcoegg;
            ucwyaykmcoikkkuo:
            goto uisiuwgqougckasg;
            goto aauqmqqqakiaqeqo;
            ickouwcsecqeskwq:
            if (is_array($uomewyckeuqoqocu)) {
                goto swiiumgaagycwyoa;
            }
            goto wwqikmmkomakgaou;
            eceacmeaisaqssco:
            uisiuwgqougckasg:
            goto sqwyqsciuaceoaaa;
            ymqseyksqoouycio:
            $uomewyckeuqoqocu = null;
            goto kcaqocqaugkyiyys;
            kwickmmwwyqigccu:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw};
            goto iiuwsswoayimgack;
            wwqikmmkomakgaou:
            if (is_object($uomewyckeuqoqocu)) {
                goto uguyeawasakeoekq;
            }
            goto yqyqsioacayucksc;
            yukgigiiimqqwiyq:
            goto skywgyiswsmassgq;
            goto qaqemcccqogoummc;
            igoocsoeousssema:
            $uomewyckeuqoqocu = null;
            goto mkikcguagooeiace;
            kcaqocqaugkyiyys:
            goto scysiomisyamwocw;
            goto aqkgkwewsqkeyusm;
            yqygigmwumoksekw:
            iycuugwwawmiewmq:
            goto eceacmeaisaqssco;
            aqkgkwewsqkeyusm:
            goto wkisqogwyuawwiqo;
            goto igeccyeusumcacea;
            oucwaucwcoegeaco:
            if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) {
                goto oukqkimqsackseiw;
            }
            goto wwaqsuwkskcooicq;
            wwaqsuwkskcooicq:
            if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) {
                goto gwgukcuckigmwoes;
            }
            goto ymqseyksqoouycio;
            aauqmqqqakiaqeqo:
            swiiumgaagycwyoa:
            goto isymsqwwkmwkamuy;
            awyaiyumyosuyewi:
            goto iycuugwwawmiewmq;
            goto wquqgqsyiccogoac;
            qaqemcccqogoummc:
            uguyeawasakeoekq:
            goto oucwaucwcoegeaco;
            uwkaywsgkmicamom:
        }
        goto yqisgeugiuokowgw;
        keoaaweuqeeoguyi:
        oqmkiaqgogkikwes:
        goto saqyacsiqwmqgqkm;
        ceckikeaaasskwmo:
        if ($uomewyckeuqoqocu) {
            goto oqmkiaqgogkikwes;
        }
        goto uwyckgawyyueaaym;
        aaqqggkciwcemugy:
        $yygmoeguaqyumuui = explode("\56", $mkomwsiykqigmqca);
        goto kkgeeeaqoaoskogo;
        kkwcewqsaeyugawo:
    }
    
    public static function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array
    {
        goto ygsaygcskekuwgya;
        iqgcumoueoaacgkc:
        ewquwuoyeeiwkwuy:
        goto yowsymiqiqgkmuuy;
        kqcusmuiyoqmeqwu:
        if (!($uuyoeicyoayimaoa > 0)) {
            goto amiessagaiiiiiei;
        }
        goto auiwyymoguwkooew;
        auiwyymoguwkooew:
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true);
        goto oaeweiaegakeieoi;
        keqgmaemoceqssyy:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) {
            return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw];
        });
        goto kqcusmuiyoqmeqwu;
        ygsaygcskekuwgya:
        if (!is_array($uomewyckeuqoqocu)) {
            goto ewquwuoyeeiwkwuy;
        }
        goto keqgmaemoceqssyy;
        yowsymiqiqgkmuuy:
        return $uomewyckeuqoqocu;
        goto wewmsmwegeoqoeem;
        oaeweiaegakeieoi:
        amiessagaiiiiiei:
        goto iqgcumoueoaacgkc;
        wewmsmwegeoqoeem:
    }
    
    public static function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array
    {
        goto wuuqskwuoeacgacg;
        osmciccqwowieume:
        foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) {
            goto kummaeaoeksaiasa;
            emiosiemcoyoeoou:
            iymqokemgwcsgeiu:
            goto sscoeeyeeggsckyo;
            kgoeamguscusyywe:
            $sogksuscggsicmac[] = $eqgoocgaqwqcimie;
            goto wewusiqwsukukkms;
            kgisumcygmcgyemm:
            $eqgoocgaqwqcimie = call_user_func($ekiuyucoiagmscgy, $eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto yesicceuyqcyysue;
            wewusiqwsukukkms:
            goto ogmcsmoewwocmkme;
            goto aksaumeeuqawgwmi;
            cgoaqiqsuomgmysm:
            $uusmaiomayssaecw = $ewyuweyoskiagksm;
            goto cuwayimcsiycgmim;
            mskqaucggqcumquk:
            ogmcsmoewwocmkme:
            goto kuiicmskwegaoggu;
            kummaeaoeksaiasa:
            if (is_numeric($ewyuweyoskiagksm)) {
                goto cusoaecwsaeckaie;
            }
            goto cgoaqiqsuomgmysm;
            sgkayqyykwuagyiu:
            goto iymqokemgwcsgeiu;
            goto nwckgaiueoigasee;
            aksaumeeuqawgwmi:
            qgaeuqkwwoikwsus:
            goto qmuqwqmumcayeiku;
            kuiicmskwegaoggu:
            gqoiqscswogsymcu:
            goto ggiycasgekosqyqk;
            ikuauuskoukskkmo:
            if ($mywqgwsimwoeoawk) {
                goto qgaeuqkwwoikwsus;
            }
            goto kgoeamguscusyywe;
            yesicceuyqcyysue:
            ggyqoucwiyqucqsi:
            goto ikuauuskoukskkmo;
            nwckgaiueoigasee:
            cusoaecwsaeckaie:
            goto eocckcsgsycuywyi;
            qeggaicaycsqqkio:
            if (!is_callable($ekiuyucoiagmscgy)) {
                goto ggyqoucwiyqucqsi;
            }
            goto kgisumcygmcgyemm;
            qmuqwqmumcayeiku:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto mskqaucggqcumquk;
            cuwayimcsiycgmim:
            $ggauoeuaesiymgee = $uauoccoqcsaeggui;
            goto sgkayqyykwuagyiu;
            sscoeeyeeggsckyo:
            $eqgoocgaqwqcimie = self::get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto qeggaicaycsqqkio;
            eocckcsgsycuywyi:
            $uusmaiomayssaecw = $uauoccoqcsaeggui;
            goto emiosiemcoyoeoou;
            ggiycasgekosqyqk:
        }
        goto boekkoaekyqaemmq;
        eqqgiigwkciiksuo:
        usggsqksmaaukmqq:
        goto mcqimygcwcqcssky;
        wuuqskwuoeacgacg:
        $sogksuscggsicmac = [];
        goto keakmgioceekisuk;
        keakmgioceekisuk:
        if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) {
            goto usggsqksmaaukmqq;
        }
        goto egaqukiucuckkqai;
        mcqimygcwcqcssky:
        return $sogksuscggsicmac;
        goto awmyswwkwqgugmmy;
        boekkoaekyqaemmq:
        woagemomagskuyii:
        goto eqqgiigwkciiksuo;
        egaqukiucuckkqai:
        $ggauoeuaesiymgee = '';
        goto osmciccqwowieume;
        awmyswwkwqgugmmy:
    }
    
    public static function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = [])
    {
        goto oywuqkssgiiumuis;
        yksiaqaciswymeim:
        kskoukygaaicomgy:
        goto gsggsgayikymekok;
        oywuqkssgiiumuis:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto ckeccumaeeuamqem;
        }
        goto ooyqgwsoeyqoucae;
        ooyqgwsoeyqoucae:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) {
            goto kewcuamqaiyeayio;
            mieaoqwgaukeysis:
            yiisikkiqosawsgu:
            goto kokuyqgigassuuoc;
            kewcuamqaiyeayio:
            if (is_array($esquqsuaumgwoewu)) {
                goto yiisikkiqosawsgu;
            }
            goto oeoaqooaouowkwec;
            ugqsesmesggiqaos:
            $sogksuscggsicmac[] = $esquqsuaumgwoewu;
            goto kawkmiguwoooksec;
            gwqicekgscayqcuq:
            akeowgkiskougikg:
            goto qsieyoiaoiqaumus;
            kawkmiguwoooksec:
            goto akeowgkiskougikg;
            goto iiigksqqskiumiqi;
            kokuyqgigassuuoc:
            $sogksuscggsicmac = self::kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac);
            goto yaekwuquieusamyw;
            iiigksqqskiumiqi:
            muowkaagoqiyegme:
            goto qywsmseiceqecigi;
            yaekwuquieusamyw:
            qoeiqqmskcqeaiug:
            goto ygyugquqaqegwioo;
            oeoaqooaouowkwec:
            if ($xkqaigkogigocask) {
                goto muowkaagoqiyegme;
            }
            goto ugqsesmesggiqaos;
            qsieyoiaoiqaumus:
            goto qoeiqqmskcqeaiug;
            goto mieaoqwgaukeysis;
            qywsmseiceqecigi:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu;
            goto gwqicekgscayqcuq;
            ygyugquqaqegwioo:
            aoueogeoyisucaiq:
            goto komsqawwueueiuag;
            komsqawwueueiuag:
        }
        goto yksiaqaciswymeim;
        gsggsgayikymekok:
        ckeccumaeeuamqem:
        goto scgqkqkwimicokau;
        scgqkqkwimicokau:
        return $sogksuscggsicmac;
        goto ouumywcisskmgyio;
        ouumywcisskmgyio:
    }
    
    public static function qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $aumugyockeskamiq, $gymeemoisimggcww = true) : array
    {
        goto iiiaciykaukmuiwu;
        qsemsoimoauiccmm:
        goto awsiakgwsaqyiggo;
        goto ceqkmcaycyskmoia;
        gkwkcgcewcecmgoe:
        $uomewyckeuqoqocu = $ggkaciewmeqmgckg + $aseguuimuokgcami + $uomewyckeuqoqocu;
        goto qaymskucssiyeasw;
        qayyssyasegwkuwi:
        $aseguuimuokgcami = [$aumugyockeskamiq => $uomewyckeuqoqocu[$aumugyockeskamiq]];
        goto qwyuicgesgumuuum;
        sgsmmgiuyuukgsyi:
        $ggkaciewmeqmgckg = array_slice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)), true);
        goto qsemsoimoauiccmm;
        uocisouiiqciywim:
        ekwoimwoqucawyis:
        goto smwmewocqywykcou;
        agckaqmuskakeumg:
        return $uomewyckeuqoqocu;
        goto emqiswoqkweuamuw;
        gqwkiummucquoece:
        foreach ($aumugyockeskamiq as $igqsaukqcqscimok) {
            $uomewyckeuqoqocu = self::qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $igqsaukqcqscimok, $gymeemoisimggcww);
            iqskmoysaamkuoim:
        }
        goto uocisouiiqciywim;
        symyoqqgcwomyksw:
        goto ceimuucmqmuygqiu;
        goto euayciwoioqckyoi;
        ceqkmcaycyskmoia:
        ewowkiosiisoacse:
        goto womkaomokgseakue;
        womkaomokgseakue:
        $ggkaciewmeqmgckg = array_splice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)));
        goto agameskciseayqqy;
        agameskciseayqqy:
        awsiakgwsaqyiggo:
        goto wsumwkwmcygcqyaa;
        euayciwoioqckyoi:
        uowumqmesgawkcme:
        goto gqwkiummucquoece;
        smwmewocqywykcou:
        ceimuucmqmuygqiu:
        goto agckaqmuskakeumg;
        wmwqumcksgkckeae:
        if (!isset($uomewyckeuqoqocu[$ksiyqouuaoymsycg], $uomewyckeuqoqocu[$aumugyockeskamiq])) {
            goto kemciyisiqsemmwm;
        }
        goto qayyssyasegwkuwi;
        iiiaciykaukmuiwu:
        if (is_array($aumugyockeskamiq)) {
            goto uowumqmesgawkcme;
        }
        goto wmwqumcksgkckeae;
        qaymskucssiyeasw:
        kemciyisiqsemmwm:
        goto symyoqqgcwomyksw;
        qwyuicgesgumuuum:
        if ($gymeemoisimggcww) {
            goto ewowkiosiisoacse;
        }
        goto sgsmmgiuyuukgsyi;
        wsumwkwmcygcqyaa:
        unset($ggkaciewmeqmgckg[$aumugyockeskamiq]);
        goto gkwkcgcewcecmgoe;
        emqiswoqkweuamuw:
    }
    
    public static function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array
    {
        goto ysyiewokqwgckeko;
        uqmsgooywggqywam:
        $uiymkeeaukcyqqik = null;
        goto mooomiuasyggqsis;
        quqkqymwqwywgesy:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
            goto kmwckweaaawgkumy;
            gkscusucwgaoooso:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
            goto yaacmieqceeiyuii;
            gakuaukecwikgsmc:
            $giqggecqqikcysgq = $ykiwomimkkuiigoq;
            goto gocscsauukioowcq;
            uqgqukmekkieakco:
            if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) {
                goto guseeaqsaueqcweo;
            }
            goto gakuaukecwikgsmc;
            oqewauiqmkiiaiqe:
            if (!is_object($eqgoocgaqwqcimie)) {
                goto osckyscuccyeyiea;
            }
            goto gkscusucwgaoooso;
            saqmoqaeaoqmaaqo:
            $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
            goto uqgqukmekkieakco;
            wuiuuyooeukyiois:
            oeqecewccwqsqmmc:
            goto gqkwumcquuuwoqkw;
            ykeogiauqegcimwm:
            iisiamyqqaaoykga:
            goto yymmqiaisemuayke;
            kmwckweaaawgkumy:
            if (key_exists($momcykaoccoymeig, $couiucmsqaieciue)) {
                goto kkmyoieguiwecakw;
            }
            goto oqewauiqmkiiaiqe;
            gmwiocukkqksiwkk:
            if (!is_string($eqgoocgaqwqcimie)) {
                goto oeqecewccwqsqmmc;
            }
            goto saqmoqaeaoqmaaqo;
            ggcewuaywkywgcoa:
            guseeaqsaueqcweo:
            goto wuiuuyooeukyiois;
            gqkwumcquuuwoqkw:
            kkmyoieguiwecakw:
            goto ykeogiauqegcimwm;
            iauekwigiwssawke:
            $aqeywoskqiugcmye = $momcykaoccoymeig;
            goto ggcewuaywkywgcoa;
            gocscsauukioowcq:
            $uiymkeeaukcyqqik = $eqgoocgaqwqcimie;
            goto iauekwigiwssawke;
            yaacmieqceeiyuii:
            osckyscuccyeyiea:
            goto gmwiocukkqksiwkk;
            yymmqiaisemuayke:
        }
        goto cmagkaygaemaaici;
        mooomiuasyggqsis:
        $aqeywoskqiugcmye = null;
        goto quqkqymwqwywgesy;
        cmagkaygaemaaici:
        ogigeoakcogugeym:
        goto wwiqmgogkuoaucyc;
        wwiqmgogkuoaucyc:
        return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik];
        goto siaagaokcmgeuimo;
        ysyiewokqwgckeko:
        $giqggecqqikcysgq = 0;
        goto uqmsgooywggqywam;
        siaagaokcmgeuimo:
    }
    
    public static function ksiyqouuaoymsycg(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, $momcykaoccoymeig = false)
    {
        goto yyyqqsuawgwkayme;
        agksoawkuoguyeio:
        yukmmiscasoogmyu:
        goto caumcscgkmkqgceq;
        yyyqqsuawgwkayme:
        $ksiyqouuaoymsycg = null;
        goto kimmqccoykmmokim;
        caumcscgkmkqgceq:
        return $ksiyqouuaoymsycg;
        goto ycywkayeqeumswqg;
        kimmqccoykmmokim:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto yocoiwekswmeqosg;
            yaumammegwowmsqu:
            $ksiyqouuaoymsycg = $igqsaukqcqscimok;
            goto ycwsommucswweyww;
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
            aaqiiwuwmyqqekwm:
            $ksiyqouuaoymsycg = $momcykaoccoymeig;
            goto usomesuioqacuiwm;
            guukcuckowqqgqag:
            usmksyiucoeycycc:
            goto kumeocwaamwuggmy;
            qiakkkgsokqowqkg:
            uamoquqaiywkyigy:
            goto guukcuckowqqgqag;
            usomesuioqacuiwm:
            eoyqkmiwoiyecqiq:
            goto sossqwuskoaguiie;
            moigkuskomyqceuu:
            ucmuqycsksssuyku:
            goto aaqiiwuwmyqqekwm;
            yocoiwekswmeqosg:
            $esoaccosseymguso = self::qamwegcyimgcqksw($igqsaukqcqscimok, $mkomwsiykqigmqca);
            goto iaqaecisewceswme;
            sossqwuskoaguiie:
            goto yukmmiscasoogmyu;
            goto qiakkkgsokqowqkg;
            kumeocwaamwuggmy:
        }
        goto agksoawkuoguyeio;
        ycywkayeqeumswqg:
    }
}

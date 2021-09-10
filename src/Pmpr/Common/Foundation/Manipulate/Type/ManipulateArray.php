<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateArray extends Common
{
    
    public static function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw)
    {
        goto eiseywwywkwcwgcq;
        swagceggcwqkcgkg:
        if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) {
            goto agmgeuqwqyskeace;
        }
        goto yusagekewyiqqqyk;
        yaawiccsokmgweye:
        goto acukcyqyqoyauieg;
        goto mmgoicukswqwseoc;
        yusagekewyiqqqyk:
        if (is_array($uusmaiomayssaecw)) {
            goto gwwocsgkqyycikau;
        }
        goto asumyiuqmmywiwyc;
        kamukeioemqucmmg:
        iowceqakcgogmssu:
        goto yaawiccsokmgweye;
        mmgoicukswqwseoc:
        gwwocsgkqyycikau:
        goto yaawcswsqyucgsus;
        ygqaaocooiqkugos:
        return $eqgoocgaqwqcimie;
        goto cksyaoquscmmscke;
        ewcysecswgsugswi:
        acukcyqyqoyauieg:
        goto esqkgmaasckugmqo;
        eiseywwywkwcwgcq:
        $eqgoocgaqwqcimie = null;
        goto swagceggcwqkcgkg;
        qeaowsgcqsuccawg:
        unset($uomewyckeuqoqocu[$uusmaiomayssaecw]);
        goto kamukeioemqucmmg;
        yaawcswsqyucgsus:
        $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw));
        goto ewcysecswgsugswi;
        asumyiuqmmywiwyc:
        if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
            goto iowceqakcgogmssu;
        }
        goto ewkqiewssocsquuo;
        esqkgmaasckugmqo:
        agmgeuqwqyskeace:
        goto ygqaaocooiqkugos;
        ewkqiewssocsquuo:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
        goto qeaowsgcqsuccawg;
        cksyaoquscmmscke:
    }
    
    public static function set($oaiciiqoawkamweo, $uwomkgseoiegeume = [])
    {
        goto kmawkwiiceqawowo;
        wwykqesuwsqiwyiw:
        return $oaiciiqoawkamweo;
        goto aucikuqogioweysy;
        gmmwicowkqiisogm:
        gggogewkqkskuicm:
        goto oogwiuueieywymio;
        omggqawmwgeoiawc:
        $awqscowmskeuymeu = is_object($oaiciiqoawkamweo);
        goto iawwywggiwmigeiy;
        mgskwyqqysgqegwe:
        $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo);
        goto omggqawmwgeoiawc;
        oogwiuueieywymio:
        gmmukayqkigwksam:
        goto wwykqesuwsqiwyiw;
        iawwywggiwmigeiy:
        foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto swasyymuuuesyssc;
            swasyymuuuesyssc:
            if ($casemmqcsgmemwyg) {
                goto kymsyoeswiuqoeam;
            }
            goto ogyecgyqquwgcugi;
            cyewimeguwgissoe:
            $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie;
            goto uqkuaiqggmmqkwcg;
            ogyecgyqquwgcugi:
            if (!$awqscowmskeuymeu) {
                goto ycesoqquooyiwusg;
            }
            goto cyewimeguwgissoe;
            akiawysiwswoqmee:
            oeoawwmyiaaaieoy:
            goto sqeucqqqmoqcuuem;
            mksesqkqwqwyiski:
            goto oeoawwmyiaaaieoy;
            goto ecoqoquwuygscmai;
            sqeucqqqmoqcuuem:
            ywumqymqkuyegcae:
            goto ocguegwcwgegqugs;
            ecoqoquwuygscmai:
            kymsyoeswiuqoeam:
            goto gooaiamwaqiueqag;
            uqkuaiqggmmqkwcg:
            ycesoqquooyiwusg:
            goto mksesqkqwqwyiski;
            gooaiamwaqiueqag:
            $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto akiawysiwswoqmee;
            ocguegwcwgegqugs:
        }
        goto gmmwicowkqiisogm;
        kmawkwiiceqawowo:
        if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) {
            goto gmmukayqkigwksam;
        }
        goto mgskwyqqysgqegwe;
        aucikuqogioweysy:
    }
    
    public static function isset($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto oqsieegccekksmek;
        uyqcwcgaswkaaqys:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto aoseoaeigamewkyg;
            aoseoaeigamewkyg:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto cuqccemgkguqycgc;
            }
            goto kuekasacwyquuiqy;
            kuekasacwyquuiqy:
            $ksaameoqigiaoigg = false;
            goto gacoqocuigoymcam;
            gacoqocuigoymcam:
            goto uykcicoeacqaykia;
            goto muukgiowiywgysuy;
            iscuuwgoaosayimo:
            cieamqmwwegyukgc:
            goto umkkwyaciakygsgo;
            muukgiowiywgysuy:
            cuqccemgkguqycgc:
            goto iscuuwgoaosayimo;
            umkkwyaciakygsgo:
        }
        goto oaiigcusecmsciso;
        oaiigcusecmsciso:
        uykcicoeacqaykia:
        goto yucmysyskmgwsowg;
        moceysouasysuwwk:
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && is_array($yygmoeguaqyumuui) && $yygmoeguaqyumuui) {
            goto waoqqaimmwkqikay;
        }
        goto wgccsswsaiqccecw;
        oqsieegccekksmek:
        $ksaameoqigiaoigg = true;
        goto moceysouasysuwwk;
        ucqcuosmqwiiwigm:
        return $ksaameoqigiaoigg;
        goto aasyamqyqesqqwkm;
        wgccsswsaiqccecw:
        $ksaameoqigiaoigg = false;
        goto qyuigkqusowucaqq;
        yucmysyskmgwsowg:
        ocqymsowceymagky:
        goto ucqcuosmqwiiwigm;
        qyuigkqusowucaqq:
        goto ocqymsowceymagky;
        goto wscswagewsegyiyc;
        wscswagewsegyiyc:
        waoqqaimmwkqikay:
        goto uyqcwcgaswkaaqys;
        aasyamqyqesqqwkm:
    }
    
    public static function gymccqywkegiqiiw($uomewyckeuqoqocu) : int
    {
        goto cucceeoseaagcoam;
        qsyimuywgcsoiecu:
        if (!$uomewyckeuqoqocu) {
            goto gomagoumaosyimii;
        }
        goto qeqwkkggucamquwc;
        qeqwkkggucamquwc:
        $iukyueweicuocgow = rand(0, count($uomewyckeuqoqocu) - 1);
        goto ksowgigyiiocmmay;
        aokseecsgimieouu:
        return $iukyueweicuocgow;
        goto euqaywkcamscaugi;
        ksowgigyiiocmmay:
        gomagoumaosyimii:
        goto aokseecsgimieouu;
        cucceeoseaagcoam:
        $iukyueweicuocgow = 0;
        goto qsyimuywgcsoiecu;
        euqaywkcamscaugi:
    }
    
    public static function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto gouyoowcwkccwewk;
        gouyoowcwkccwewk:
        $ksaameoqigiaoigg = false;
        goto qeyssuuycyyguuyo;
        qigeyewuukwwousm:
        qummwcsgemgwqwga:
        goto imeiskyssuamssoq;
        imeiskyssuamssoq:
        return $ksaameoqigiaoigg;
        goto ygseoaiecssiymec;
        iqwsaiomwmyeusaq:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto ykyqsgogqywswoua;
            hkokwccuegwgeegk:
            yokyoayigkwweqeg:
            goto qkcgewmwssuaewie;
            ykyqsgogqywswoua:
            if (self::get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) {
                goto yokyoayigkwweqeg;
            }
            goto gmiacescgeoqcogu;
            qkcgewmwssuaewie:
            cseioaeaywcuekge:
            goto iyociciyeiswkaqk;
            gmiacescgeoqcogu:
            $ksaameoqigiaoigg = true;
            goto gwsqeeiwciqccasw;
            gwsqeeiwciqccasw:
            goto ieiwqimgggeoaqwm;
            goto hkokwccuegwgeegk;
            iyociciyeiswkaqk:
        }
        goto kaoukeiiiuquqgsm;
        qeyssuuycyyguuyo:
        if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) {
            goto qummwcsgemgwqwga;
        }
        goto iqwsaiomwmyeusaq;
        kaoukeiiiuquqgsm:
        ieiwqimgggeoaqwm:
        goto qigeyewuukwwousm;
        ygseoaiecssiymec:
    }
    
    public static function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie)
    {
        goto okmawomkamqiwesm;
        okmawomkamqiwesm:
        $qcgkuqesqqymcuui = null;
        goto ugaoskycwsqcesko;
        qucwqsuacqkymwsm:
        owswisaiecssuwwu:
        goto myissqmgymuauowq;
        myissqmgymuauowq:
        return $qcgkuqesqqymcuui;
        goto scsgmyqiwwwkwayy;
        rasgkseukaaqecam:
        foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) {
            goto miqsgoqewuokegig;
            geyksaceayaiwiiy:
            kyaismgimkqkcmey:
            goto ecqyggsgiqweeyee;
            miqsgoqewuokegig:
            $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu);
            goto smaisgmkkwgiqygi;
            umyquqiugigqmkau:
            $qcgkuqesqqymcuui = self::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            goto geyksaceayaiwiiy;
            ecqyggsgiqweeyee:
            oowwickgsmcqamqe:
            goto qykwyyyeyygkiqmi;
            smaisgmkkwgiqygi:
            if (!($uusmaiomayssaecw !== false)) {
                goto kyaismgimkqkcmey;
            }
            goto umyquqiugigqmkau;
            qykwyyyeyygkiqmi:
        }
        goto qucwqsuacqkymwsm;
        iswsmaumaacmwcwu:
        $qcgkuqesqqymcuui = false;
        goto rasgkseukaaqecam;
        wyuommoqmyaeiswc:
        $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie];
        goto kocagcykiyimkmoa;
        ugaoskycwsqcesko:
        if (is_array($eqgoocgaqwqcimie)) {
            goto agqgaiqiwcgowsoi;
        }
        goto wyuommoqmyaeiswc;
        kocagcykiyimkmoa:
        agqgaiqiwcgowsoi:
        goto iswsmaumaacmwcwu;
        scsgmyqiwwwkwayy:
    }
    
    public static function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok)
    {
        goto qqgsggygqommqmkw;
        qqgsggygqommqmkw:
        if (is_int($kuuiuigeacouwmaa)) {
            goto uyyceeeqmoysskuw;
        }
        goto aiskggeswyweiogy;
        imscgsmqiswkeyka:
        ccgiykywckmyiscg:
        goto oyqqsiciakemkgim;
        aasiooeuekwqamyk:
        $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy));
        goto iosgqqoyoiqgsgks;
        akequyeqowgagiek:
        uyyceeeqmoysskuw:
        goto eguqaygayksgkoyq;
        aiskggeswyweiogy:
        $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu));
        goto aasiooeuekwqamyk;
        eguqaygayksgkoyq:
        array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok);
        goto imscgsmqiswkeyka;
        iosgqqoyoiqgsgks:
        goto ccgiykywckmyiscg;
        goto akequyeqowgagiek;
        oyqqsiciakemkgim:
    }
    
    public static function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool
    {
        return count($uomewyckeuqoqocu) != count($uomewyckeuqoqocu, 1);
    }
    
    public static function wuoqgcwmkicakygs($uomewyckeuqoqocu) : bool
    {
        goto quumskauyaouyyiy;
        sygasaomgiqoqmqs:
        emaakmmcykwmmeum:
        goto kugoqmkkeqeoakik;
        kugoqmkkeqeoakik:
        return $wuoqgcwmkicakygs;
        goto cgeimkqsoqqigogy;
        ocickgekowkiqyuo:
        if (!$uomewyckeuqoqocu) {
            goto emaakmmcykwmmeum;
        }
        goto iqkysoyykewkkwes;
        iqkysoyykewkkwes:
        $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1);
        goto sygasaomgiqoqmqs;
        quumskauyaouyyiy:
        $wuoqgcwmkicakygs = false;
        goto ocickgekowkiqyuo;
        cgeimkqsoqqigogy:
    }
    
    public static function yaeiiwwyckwugsem($uomewyckeuqoqocu, $igaagwuyasawwqms = self::PRIORITY)
    {
        goto cqqywmesqogkseku;
        iuumiyikcwiiwuqk:
        return $uomewyckeuqoqocu;
        goto aoeccsiuoeigmwkm;
        eiakokiiwigccesk:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms) {
            goto ouseeusmwgswgayi;
            ssgeyeewksygaeqm:
            qgwmgswcikqsoymm:
            goto owsywiygoiqkyeey;
            owsywiygoiqkyeey:
            goto okgmaysweamaymuk;
            goto soaekkoykikagyqa;
            mwewkecyyqycwcyi:
            gocwqoqicukssssu:
            goto guqmiyswawmaggqw;
            gykceoyygmmeawws:
            return $uiuykcweuosgmwki;
            goto aocqwuakameoqqme;
            nicoewqgywcusaci:
            ecawoqusqygmccmo:
            goto wmggooiesmiaymyw;
            qwcsgqgmmsscgsaa:
            if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) {
                goto mkggwgyaywmiaeue;
            }
            goto ayoycomwascmkkkm;
            gmoewkmwwyeaycgm:
            okgmaysweamaymuk:
            goto gykceoyygmmeawws;
            soaekkoykikagyqa:
            mkggwgyaywmiaeue:
            goto amamemmaewcmqmso;
            wyymkuqsaikomumi:
            owasckmgeweqwsgq:
            goto gmoewkmwwyeaycgm;
            ekmmomgayqemmaqm:
            if (!(method_exists($mmeioagwmyscwumo, $igaagwuyasawwqms) && method_exists($csougakqegqiqsgi, $igaagwuyasawwqms))) {
                goto ecawoqusqygmccmo;
            }
            goto qkiwmwgkosoiiqgo;
            amamemmaewcmqmso:
            if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) {
                goto gocwqoqicukssssu;
            }
            goto ekmmomgayqemmaqm;
            ayoycomwascmkkkm:
            if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) {
                goto qgwmgswcikqsoymm;
            }
            goto gueiogkegsiymgie;
            gueiogkegsiymgie:
            $uiuykcweuosgmwki = self::get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> self::get($csougakqegqiqsgi, $igaagwuyasawwqms);
            goto ssgeyeewksygaeqm;
            ouseeusmwgswgayi:
            $uiuykcweuosgmwki = false;
            goto qwcsgqgmmsscgsaa;
            guqmiyswawmaggqw:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms};
            goto wyymkuqsaikomumi;
            wmggooiesmiaymyw:
            goto owasckmgeweqwsgq;
            goto mwewkecyyqycwcyi;
            qkiwmwgkosoiiqgo:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms}() <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}();
            goto nicoewqgywcusaci;
            aocqwuakameoqqme:
        });
        goto aksioomuagcyawuk;
        aksioomuagcyawuk:
        aykucyyeseggeeoy:
        goto iuumiyikcwiiwuqk;
        cqqywmesqogkseku:
        if (!is_array($uomewyckeuqoqocu)) {
            goto aykucyyeseggeeoy;
        }
        goto eiakokiiwigccesk;
        aoeccsiuoeigmwkm:
    }
    
    public static function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto yicuaiowomkyaueg;
        uwoayuwcsqsekywg:
        wsmwsckqgokueicw:
        goto sewmgsmcyiacccoa;
        qayogkgwkuoycsuy:
        if (!isset($oaiciiqoawkamweo->{$uusmaiomayssaecw})) {
            goto yymqcwmasyyamagq;
        }
        goto iaokmyigguukmcky;
        iaokmyigguukmcky:
        $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw};
        goto cqgiaauymsygoomq;
        ogqswkqkcosuewgg:
        $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw];
        goto gueusoewgqkcwkuq;
        sewmgsmcyiacccoa:
        if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) {
            goto ssmcciyyscekqosk;
        }
        goto ogqswkqkcosuewgg;
        ewiqoyqagowquqqe:
        return $sogksuscggsicmac;
        goto qyaiyaqcqsskmwos;
        useumocigsoceeus:
        iugskawkyskmcmyg:
        goto aewewmmweiaeuewi;
        aewewmmweiaeuewi:
        goto kuquyyieaicaecie;
        goto uwoayuwcsqsekywg;
        oeewiaeeicmwqyiw:
        if (is_array($oaiciiqoawkamweo)) {
            goto wsmwsckqgokueicw;
        }
        goto gcqeiwgakokeuouq;
        yicuaiowomkyaueg:
        $sogksuscggsicmac = $ggauoeuaesiymgee;
        goto oeewiaeeicmwqyiw;
        gueusoewgqkcwkuq:
        ssmcciyyscekqosk:
        goto acyyqeqgusyqaook;
        gcqeiwgakokeuouq:
        if (!is_object($oaiciiqoawkamweo)) {
            goto iugskawkyskmcmyg;
        }
        goto qayogkgwkuoycsuy;
        acyyqeqgusyqaook:
        kuquyyieaicaecie:
        goto ewiqoyqagowquqqe;
        cqgiaauymsygoomq:
        yymqcwmasyyamagq:
        goto useumocigsoceeus;
        qyaiyaqcqsskmwos:
    }
    
    public static function cswcewwmmicqesei($uomewyckeuqoqocu, $oegoegssokkyiqam) : array
    {
        goto ocimykqskwaewuia;
        yccuogewgykqkkys:
        foreach ($oegoegssokkyiqam as $ymqmyyeuycgmigyo => $mkomwsiykqigmqca) {
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = self::qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca);
            ieqccoywksywcsky:
        }
        goto qqewqyiwuaqaakwk;
        ocimykqskwaewuia:
        $sogksuscggsicmac = [];
        goto yccuogewgykqkkys;
        qqewqyiwuaqaakwk:
        gcaoeocsuqqqyaym:
        goto sewqmkouocccomww;
        sewqmkouocccomww:
        return $sogksuscggsicmac;
        goto mmmkqsukesoasosu;
        mmmkqsukesoasosu:
    }
    
    public static function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null)
    {
        goto sqwyqsciuaceoaaa;
        ceckikeaaasskwmo:
        return $uomewyckeuqoqocu;
        goto uwyckgawyyueaaym;
        uwkaywsgkmicamom:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto skywgyiswsmassgq;
            qaqemcccqogoummc:
            $uomewyckeuqoqocu = null;
            goto oucwaucwcoegeaco;
            swiiumgaagycwyoa:
            if (is_object($uomewyckeuqoqocu)) {
                goto wkisqogwyuawwiqo;
            }
            goto uisiuwgqougckasg;
            awyaiyumyosuyewi:
            scysiomisyamwocw:
            goto wquqgqsyiccogoac;
            kcaqocqaugkyiyys:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw};
            goto aqkgkwewsqkeyusm;
            mkikcguagooeiace:
            $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto awyaiyumyosuyewi;
            wwqikmmkomakgaou:
            goto oukqkimqsackseiw;
            goto yqyqsioacayucksc;
            isymsqwwkmwkamuy:
            goto scysiomisyamwocw;
            goto igoocsoeousssema;
            wquqgqsyiccogoac:
            uguyeawasakeoekq:
            goto kycykouooecoiyqw;
            igeccyeusumcacea:
            goto gwgukcuckigmwoes;
            goto kwickmmwwyqigccu;
            kwickmmwwyqigccu:
            iycuugwwawmiewmq:
            goto iiuwsswoayimgack;
            qeqquaucmqkmsmoq:
            kagckqkwssikyaay:
            goto weekmyeyqukcoegg;
            acgauasosqqysagi:
            goto uguyeawasakeoekq;
            goto qeqquaucmqkmsmoq;
            aqkgkwewsqkeyusm:
            wwscaygcymkwcoas:
            goto igeccyeusumcacea;
            oucwaucwcoegeaco:
            goto iauoeqkuisgyagqc;
            goto wwaqsuwkskcooicq;
            skywgyiswsmassgq:
            if (is_array($uomewyckeuqoqocu)) {
                goto kagckqkwssikyaay;
            }
            goto swiiumgaagycwyoa;
            gwmwmaqgwkkamqmo:
            if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) {
                goto iycuugwwawmiewmq;
            }
            goto yukgigiiimqqwiyq;
            yqyqsioacayucksc:
            wkisqogwyuawwiqo:
            goto gwmwmaqgwkkamqmo;
            igoocsoeousssema:
            iwumyigiscuuwqik:
            goto mkikcguagooeiace;
            ickouwcsecqeskwq:
            goto iauoeqkuisgyagqc;
            goto wwqikmmkomakgaou;
            weekmyeyqukcoegg:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto iwumyigiscuuwqik;
            }
            goto ucwyaykmcoikkkuo;
            ucwyaykmcoikkkuo:
            $uomewyckeuqoqocu = null;
            goto aauqmqqqakiaqeqo;
            iiuwsswoayimgack:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}();
            goto oiikekyiqeqogkua;
            kycykouooecoiyqw:
            qmsoeugoyqquamqk:
            goto yqygigmwumoksekw;
            wwaqsuwkskcooicq:
            goto wwscaygcymkwcoas;
            goto ymqseyksqoouycio;
            cmgayuowmaymuaiq:
            oukqkimqsackseiw:
            goto acgauasosqqysagi;
            yukgigiiimqqwiyq:
            if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) {
                goto raqaugusyaieeuyi;
            }
            goto qaqemcccqogoummc;
            uisiuwgqougckasg:
            $uomewyckeuqoqocu = null;
            goto ickouwcsecqeskwq;
            ymqseyksqoouycio:
            raqaugusyaieeuyi:
            goto kcaqocqaugkyiyys;
            oiikekyiqeqogkua:
            gwgukcuckigmwoes:
            goto cmgayuowmaymuaiq;
            aauqmqqqakiaqeqo:
            goto iauoeqkuisgyagqc;
            goto isymsqwwkmwkamuy;
            yqygigmwumoksekw:
        }
        goto oqmkiaqgogkikwes;
        aaqqggkciwcemugy:
        if ($uomewyckeuqoqocu) {
            goto eceacmeaisaqssco;
        }
        goto kkgeeeaqoaoskogo;
        kkgeeeaqoaoskogo:
        $uomewyckeuqoqocu = $ggauoeuaesiymgee;
        goto yqisgeugiuokowgw;
        yqisgeugiuokowgw:
        eceacmeaisaqssco:
        goto ceckikeaaasskwmo;
        oqmkiaqgogkikwes:
        iauoeqkuisgyagqc:
        goto aaqqggkciwcemugy;
        sqwyqsciuaceoaaa:
        $yygmoeguaqyumuui = explode("\x2e", $mkomwsiykqigmqca);
        goto uwkaywsgkmicamom;
        uwyckgawyyueaaym:
    }
    
    public static function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array
    {
        goto kkwcewqsaeyugawo;
        kqcusmuiyoqmeqwu:
        saqyacsiqwmqgqkm:
        goto auiwyymoguwkooew;
        auiwyymoguwkooew:
        return $uomewyckeuqoqocu;
        goto oaeweiaegakeieoi;
        ygsaygcskekuwgya:
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true);
        goto keqgmaemoceqssyy;
        keqgmaemoceqssyy:
        keoaaweuqeeoguyi:
        goto kqcusmuiyoqmeqwu;
        ewquwuoyeeiwkwuy:
        if (!($uuyoeicyoayimaoa > 0)) {
            goto keoaaweuqeeoguyi;
        }
        goto ygsaygcskekuwgya;
        kkwcewqsaeyugawo:
        if (!is_array($uomewyckeuqoqocu)) {
            goto saqyacsiqwmqgqkm;
        }
        goto amiessagaiiiiiei;
        amiessagaiiiiiei:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) {
            return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw];
        });
        goto ewquwuoyeeiwkwuy;
        oaeweiaegakeieoi:
    }
    
    public static function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array
    {
        goto kuiicmskwegaoggu;
        wuuqskwuoeacgacg:
        foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) {
            goto ggyqoucwiyqucqsi;
            cuwayimcsiycgmim:
            $uusmaiomayssaecw = $uauoccoqcsaeggui;
            goto sgkayqyykwuagyiu;
            ogmcsmoewwocmkme:
            $ggauoeuaesiymgee = $uauoccoqcsaeggui;
            goto kummaeaoeksaiasa;
            wewusiqwsukukkms:
            iymqokemgwcsgeiu:
            goto aksaumeeuqawgwmi;
            kgoeamguscusyywe:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto wewusiqwsukukkms;
            qgaeuqkwwoikwsus:
            $uusmaiomayssaecw = $ewyuweyoskiagksm;
            goto ogmcsmoewwocmkme;
            sgkayqyykwuagyiu:
            woagemomagskuyii:
            goto nwckgaiueoigasee;
            aksaumeeuqawgwmi:
            yowsymiqiqgkmuuy:
            goto qmuqwqmumcayeiku;
            kummaeaoeksaiasa:
            goto woagemomagskuyii;
            goto cgoaqiqsuomgmysm;
            cgoaqiqsuomgmysm:
            wewmsmwegeoqoeem:
            goto cuwayimcsiycgmim;
            ikuauuskoukskkmo:
            cusoaecwsaeckaie:
            goto kgoeamguscusyywe;
            nwckgaiueoigasee:
            $eqgoocgaqwqcimie = self::get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto eocckcsgsycuywyi;
            yesicceuyqcyysue:
            goto iymqokemgwcsgeiu;
            goto ikuauuskoukskkmo;
            kgisumcygmcgyemm:
            $sogksuscggsicmac[] = $eqgoocgaqwqcimie;
            goto yesicceuyqcyysue;
            eocckcsgsycuywyi:
            if (!is_callable($ekiuyucoiagmscgy)) {
                goto gqoiqscswogsymcu;
            }
            goto emiosiemcoyoeoou;
            emiosiemcoyoeoou:
            $eqgoocgaqwqcimie = call_user_func($ekiuyucoiagmscgy, $eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto sscoeeyeeggsckyo;
            qeggaicaycsqqkio:
            if ($mywqgwsimwoeoawk) {
                goto cusoaecwsaeckaie;
            }
            goto kgisumcygmcgyemm;
            sscoeeyeeggsckyo:
            gqoiqscswogsymcu:
            goto qeggaicaycsqqkio;
            ggyqoucwiyqucqsi:
            if (is_numeric($ewyuweyoskiagksm)) {
                goto wewmsmwegeoqoeem;
            }
            goto qgaeuqkwwoikwsus;
            qmuqwqmumcayeiku:
        }
        goto keakmgioceekisuk;
        keakmgioceekisuk:
        iqgcumoueoaacgkc:
        goto egaqukiucuckkqai;
        ggiycasgekosqyqk:
        if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) {
            goto mskqaucggqcumquk;
        }
        goto usggsqksmaaukmqq;
        kuiicmskwegaoggu:
        $sogksuscggsicmac = [];
        goto ggiycasgekosqyqk;
        usggsqksmaaukmqq:
        $ggauoeuaesiymgee = '';
        goto wuuqskwuoeacgacg;
        osmciccqwowieume:
        return $sogksuscggsicmac;
        goto boekkoaekyqaemmq;
        egaqukiucuckkqai:
        mskqaucggqcumquk:
        goto osmciccqwowieume;
        boekkoaekyqaemmq:
    }
    
    public static function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = [])
    {
        goto ygyugquqaqegwioo;
        ooyqgwsoeyqoucae:
        return $sogksuscggsicmac;
        goto yksiaqaciswymeim;
        komsqawwueueiuag:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) {
            goto akeowgkiskougikg;
            iiigksqqskiumiqi:
            goto muowkaagoqiyegme;
            goto qywsmseiceqecigi;
            kewcuamqaiyeayio:
            goto kskoukygaaicomgy;
            goto oeoaqooaouowkwec;
            ugqsesmesggiqaos:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu;
            goto kawkmiguwoooksec;
            akeowgkiskougikg:
            if (is_array($esquqsuaumgwoewu)) {
                goto aoueogeoyisucaiq;
            }
            goto yiisikkiqosawsgu;
            yiisikkiqosawsgu:
            if ($xkqaigkogigocask) {
                goto awmyswwkwqgugmmy;
            }
            goto qoeiqqmskcqeaiug;
            qsieyoiaoiqaumus:
            muowkaagoqiyegme:
            goto mieaoqwgaukeysis;
            kawkmiguwoooksec:
            kskoukygaaicomgy:
            goto iiigksqqskiumiqi;
            oeoaqooaouowkwec:
            awmyswwkwqgugmmy:
            goto ugqsesmesggiqaos;
            qywsmseiceqecigi:
            aoueogeoyisucaiq:
            goto gwqicekgscayqcuq;
            gwqicekgscayqcuq:
            $sogksuscggsicmac = self::kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac);
            goto qsieyoiaoiqaumus;
            qoeiqqmskcqeaiug:
            $sogksuscggsicmac[] = $esquqsuaumgwoewu;
            goto kewcuamqaiyeayio;
            mieaoqwgaukeysis:
            mcqimygcwcqcssky:
            goto kokuyqgigassuuoc;
            kokuyqgigassuuoc:
        }
        goto ckeccumaeeuamqem;
        ckeccumaeeuamqem:
        eqqgiigwkciiksuo:
        goto oywuqkssgiiumuis;
        ygyugquqaqegwioo:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto yaekwuquieusamyw;
        }
        goto komsqawwueueiuag;
        oywuqkssgiiumuis:
        yaekwuquieusamyw:
        goto ooyqgwsoeyqoucae;
        yksiaqaciswymeim:
    }
    
    public static function qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $aumugyockeskamiq, $gymeemoisimggcww = true) : array
    {
        goto kemciyisiqsemmwm;
        qwyuicgesgumuuum:
        ouumywcisskmgyio:
        goto sgsmmgiuyuukgsyi;
        iiiaciykaukmuiwu:
        if ($gymeemoisimggcww) {
            goto ouumywcisskmgyio;
        }
        goto wmwqumcksgkckeae;
        qsemsoimoauiccmm:
        ekwoimwoqucawyis:
        goto ceqkmcaycyskmoia;
        wmwqumcksgkckeae:
        $ggkaciewmeqmgckg = array_slice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)), true);
        goto qayyssyasegwkuwi;
        wsumwkwmcygcqyaa:
        goto awsiakgwsaqyiggo;
        goto gkwkcgcewcecmgoe;
        sgsmmgiuyuukgsyi:
        $ggkaciewmeqmgckg = array_splice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)));
        goto qsemsoimoauiccmm;
        womkaomokgseakue:
        $uomewyckeuqoqocu = $ggkaciewmeqmgckg + $aseguuimuokgcami + $uomewyckeuqoqocu;
        goto agameskciseayqqy;
        ceqkmcaycyskmoia:
        unset($ggkaciewmeqmgckg[$aumugyockeskamiq]);
        goto womkaomokgseakue;
        ceimuucmqmuygqiu:
        $aseguuimuokgcami = [$aumugyockeskamiq => $uomewyckeuqoqocu[$aumugyockeskamiq]];
        goto iiiaciykaukmuiwu;
        gkwkcgcewcecmgoe:
        ewowkiosiisoacse:
        goto qaymskucssiyeasw;
        gqwkiummucquoece:
        return $uomewyckeuqoqocu;
        goto uocisouiiqciywim;
        agameskciseayqqy:
        iqskmoysaamkuoim:
        goto wsumwkwmcygcqyaa;
        symyoqqgcwomyksw:
        gsggsgayikymekok:
        goto euayciwoioqckyoi;
        euayciwoioqckyoi:
        awsiakgwsaqyiggo:
        goto gqwkiummucquoece;
        kemciyisiqsemmwm:
        if (is_array($aumugyockeskamiq)) {
            goto ewowkiosiisoacse;
        }
        goto uowumqmesgawkcme;
        uowumqmesgawkcme:
        if (!isset($uomewyckeuqoqocu[$ksiyqouuaoymsycg], $uomewyckeuqoqocu[$aumugyockeskamiq])) {
            goto iqskmoysaamkuoim;
        }
        goto ceimuucmqmuygqiu;
        qaymskucssiyeasw:
        foreach ($aumugyockeskamiq as $igqsaukqcqscimok) {
            $uomewyckeuqoqocu = self::qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $igqsaukqcqscimok, $gymeemoisimggcww);
            scgqkqkwimicokau:
        }
        goto symyoqqgcwomyksw;
        qayyssyasegwkuwi:
        goto ekwoimwoqucawyis;
        goto qwyuicgesgumuuum;
        uocisouiiqciywim:
    }
    
    public static function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array
    {
        goto gqkwumcquuuwoqkw;
        ysyiewokqwgckeko:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
            goto guseeaqsaueqcweo;
            oeqecewccwqsqmmc:
            if (!is_object($eqgoocgaqwqcimie)) {
                goto emqiswoqkweuamuw;
            }
            goto kkmyoieguiwecakw;
            uqgqukmekkieakco:
            $aqeywoskqiugcmye = $momcykaoccoymeig;
            goto gakuaukecwikgsmc;
            ggcewuaywkywgcoa:
            agckaqmuskakeumg:
            goto wuiuuyooeukyiois;
            gocscsauukioowcq:
            iisiamyqqaaoykga:
            goto iauekwigiwssawke;
            gmwiocukkqksiwkk:
            $giqggecqqikcysgq = $ykiwomimkkuiigoq;
            goto saqmoqaeaoqmaaqo;
            kmwckweaaawgkumy:
            emqiswoqkweuamuw:
            goto oqewauiqmkiiaiqe;
            gkscusucwgaoooso:
            $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
            goto yaacmieqceeiyuii;
            oqewauiqmkiiaiqe:
            if (!is_string($eqgoocgaqwqcimie)) {
                goto iisiamyqqaaoykga;
            }
            goto gkscusucwgaoooso;
            yaacmieqceeiyuii:
            if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) {
                goto ogigeoakcogugeym;
            }
            goto gmwiocukkqksiwkk;
            iauekwigiwssawke:
            osckyscuccyeyiea:
            goto ggcewuaywkywgcoa;
            gakuaukecwikgsmc:
            ogigeoakcogugeym:
            goto gocscsauukioowcq;
            saqmoqaeaoqmaaqo:
            $uiymkeeaukcyqqik = $eqgoocgaqwqcimie;
            goto uqgqukmekkieakco;
            guseeaqsaueqcweo:
            if (key_exists($momcykaoccoymeig, $couiucmsqaieciue)) {
                goto osckyscuccyeyiea;
            }
            goto oeqecewccwqsqmmc;
            kkmyoieguiwecakw:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
            goto kmwckweaaawgkumy;
            wuiuuyooeukyiois:
        }
        goto uqmsgooywggqywam;
        yymmqiaisemuayke:
        $aqeywoskqiugcmye = null;
        goto ysyiewokqwgckeko;
        mooomiuasyggqsis:
        return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik];
        goto quqkqymwqwywgesy;
        gqkwumcquuuwoqkw:
        $giqggecqqikcysgq = 0;
        goto ykeogiauqegcimwm;
        ykeogiauqegcimwm:
        $uiymkeeaukcyqqik = null;
        goto yymmqiaisemuayke;
        uqmsgooywggqywam:
        smwmewocqywykcou:
        goto mooomiuasyggqsis;
        quqkqymwqwywgesy:
    }
    
    public static function ksiyqouuaoymsycg(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, $momcykaoccoymeig = false)
    {
        goto qiakkkgsokqowqkg;
        kumeocwaamwuggmy:
        cmagkaygaemaaici:
        goto yyyqqsuawgwkayme;
        yyyqqsuawgwkayme:
        return $ksiyqouuaoymsycg;
        goto kimmqccoykmmokim;
        guukcuckowqqgqag:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto ucmuqycsksssuyku;
            aaqiiwuwmyqqekwm:
            usmksyiucoeycycc:
            goto usomesuioqacuiwm;
            ucmuqycsksssuyku:
            $esoaccosseymguso = self::qamwegcyimgcqksw($igqsaukqcqscimok, $mkomwsiykqigmqca);
            goto eoyqkmiwoiyecqiq;
            yocoiwekswmeqosg:
            $ksiyqouuaoymsycg = $igqsaukqcqscimok;
            goto iaqaecisewceswme;
            moigkuskomyqceuu:
            goto cmagkaygaemaaici;
            goto aaqiiwuwmyqqekwm;
            yaumammegwowmsqu:
            $ksiyqouuaoymsycg = $momcykaoccoymeig;
            goto ycwsommucswweyww;
            eoyqkmiwoiyecqiq:
            if (!($esoaccosseymguso == $qwcmueausqgiwigy)) {
                goto usmksyiucoeycycc;
            }
            goto uamoquqaiywkyigy;
            uamoquqaiywkyigy:
            if ($momcykaoccoymeig) {
                goto siaagaokcmgeuimo;
            }
            goto yocoiwekswmeqosg;
            usomesuioqacuiwm:
            wwiqmgogkuoaucyc:
            goto sossqwuskoaguiie;
            ayugswgkeymseuoe:
            siaagaokcmgeuimo:
            goto yaumammegwowmsqu;
            iaqaecisewceswme:
            goto yukmmiscasoogmyu;
            goto ayugswgkeymseuoe;
            ycwsommucswweyww:
            yukmmiscasoogmyu:
            goto moigkuskomyqceuu;
            sossqwuskoaguiie:
        }
        goto kumeocwaamwuggmy;
        qiakkkgsokqowqkg:
        $ksiyqouuaoymsycg = null;
        goto guukcuckowqqgqag;
        kimmqccoykmmokim:
    }
}

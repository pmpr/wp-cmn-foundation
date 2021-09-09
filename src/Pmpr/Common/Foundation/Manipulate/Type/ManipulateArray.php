<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateArray extends Common
{
    
    public static function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw)
    {
        goto goamosigosumsmkq;
        ecgwcgmuemqagggm:
        if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
            goto dwaiimguqaaikoso;
        }
        goto igauaamasosqcyys;
        iwgcsqiqowaowska:
        qmwkauswsyowckua:
        goto ksuaoogkueqmaemg;
        ksuaoogkueqmaemg:
        siequuwyyyusqeie:
        goto umawyuykgiuqwacs;
        ecowowaocsooqkyo:
        unset($uomewyckeuqoqocu[$uusmaiomayssaecw]);
        goto yuiimkuacqcecwgw;
        umawyuykgiuqwacs:
        return $eqgoocgaqwqcimie;
        goto ucoowgqsiscmocqm;
        wuwaakyeqqeeogyy:
        if (!($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu))) {
            goto siequuwyyyusqeie;
        }
        goto kakyqyqyweuaoqmg;
        kakyqyqyweuaoqmg:
        if (is_array($uusmaiomayssaecw)) {
            goto uqiisswyoggsckqg;
        }
        goto ecgwcgmuemqagggm;
        igauaamasosqcyys:
        $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
        goto ecowowaocsooqkyo;
        goamosigosumsmkq:
        $eqgoocgaqwqcimie = null;
        goto wuwaakyeqqeeogyy;
        ikmeskqmmqqyigmw:
        uqiisswyoggsckqg:
        goto kikikuoceiouiccg;
        kikikuoceiouiccg:
        $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw));
        goto iwgcsqiqowaowska;
        uwwqiicwuwkwqcmg:
        goto qmwkauswsyowckua;
        goto ikmeskqmmqqyigmw;
        yuiimkuacqcecwgw:
        dwaiimguqaaikoso:
        goto uwwqiicwuwkwqcmg;
        ucoowgqsiscmocqm:
    }
    
    public static function set($oaiciiqoawkamweo, $uwomkgseoiegeume = [])
    {
        goto oaiiwqkkqkieaisw;
        owieeykwisgmwsso:
        yigqgyaossseayse:
        goto mkwiacyiwcggkayq;
        eemoqygegmakwkqs:
        foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto usqykimeumyoosik;
            uusuqukowcsyeoek:
            goto wikgayyaimyysqey;
            goto qkaamssgqkeaumqm;
            akcoekimwmwkmoia:
            $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto kmyuewweeweyeogc;
            uimcguaiawcueoai:
            yskiooskcmuyewuy:
            goto uusuqukowcsyeoek;
            usqykimeumyoosik:
            if ($casemmqcsgmemwyg) {
                goto aeyyammmgywaakyi;
            }
            goto sosacgwuicyiiesw;
            kmyuewweeweyeogc:
            wikgayyaimyysqey:
            goto mamiicmwemsoegek;
            ymgikwoegucegmmq:
            $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie;
            goto uimcguaiawcueoai;
            qkaamssgqkeaumqm:
            aeyyammmgywaakyi:
            goto akcoekimwmwkmoia;
            sosacgwuicyiiesw:
            if (!$awqscowmskeuymeu) {
                goto yskiooskcmuyewuy;
            }
            goto ymgikwoegucegmmq;
            mamiicmwemsoegek:
            sawwqwioeyseeaoo:
            goto masiaeeguwwcwcym;
            masiaeeguwwcwcym:
        }
        goto qcuoawweoeiqemyg;
        mkwiacyiwcggkayq:
        return $oaiciiqoawkamweo;
        goto ymeksusogycekecy;
        cwooiamoqwmuikws:
        $awqscowmskeuymeu = is_object($oaiciiqoawkamweo);
        goto eemoqygegmakwkqs;
        oaiiwqkkqkieaisw:
        if (!(is_array($uwomkgseoiegeume) && $uwomkgseoiegeume)) {
            goto yigqgyaossseayse;
        }
        goto mwigyswycsiygicw;
        qcuoawweoeiqemyg:
        cswawiceqkiyuwgy:
        goto owieeykwisgmwsso;
        mwigyswycsiygicw:
        $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo);
        goto cwooiamoqwmuikws;
        ymeksusogycekecy:
    }
    
    public static function isset($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto goqquigewsgoaogg;
        siccsesmewocqecy:
        return $ksaameoqigiaoigg;
        goto acussowuugkoqscy;
        esyaomsqiccomyis:
        $ksaameoqigiaoigg = false;
        goto gsyyyccyomacamyu;
        wyyokkeqakouoygm:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto gguokakmscwmeqqi;
            acqyogokyakwekak:
            kguoagkwekiiswmc:
            goto swawmomoagmioomc;
            aqqwgeocycukwwea:
            $ksaameoqigiaoigg = false;
            goto cokqicmugqwaqmge;
            gguokakmscwmeqqi:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto ccqiksieyeiiecye;
            }
            goto aqqwgeocycukwwea;
            cokqicmugqwaqmge:
            goto wcacgiegoekgaqmw;
            goto ooaswysuqmyicsyg;
            ooaswysuqmyicsyg:
            ccqiksieyeiiecye:
            goto acqyogokyakwekak;
            swawmomoagmioomc:
        }
        goto isequkkmceeiaowc;
        gsyyyccyomacamyu:
        goto qseuyoyqyiamegok;
        goto uwqsuakimauaecsk;
        uwqsuakimauaecsk:
        aiseocoyqescoiwe:
        goto wyyokkeqakouoygm;
        wymkeuwkccmeouiy:
        qseuyoyqyiamegok:
        goto siccsesmewocqecy;
        goqquigewsgoaogg:
        $ksaameoqigiaoigg = true;
        goto eusuooimqkgqgiaa;
        eusuooimqkgqgiaa:
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && is_array($yygmoeguaqyumuui) && $yygmoeguaqyumuui) {
            goto aiseocoyqescoiwe;
        }
        goto esyaomsqiccomyis;
        isequkkmceeiaowc:
        wcacgiegoekgaqmw:
        goto wymkeuwkccmeouiy;
        acussowuugkoqscy:
    }
    
    public static function gymccqywkegiqiiw($uomewyckeuqoqocu) : int
    {
        goto smgwaikkyouqogwe;
        qiocogaamemoisag:
        $iukyueweicuocgow = rand(0, count($uomewyckeuqoqocu) - 1);
        goto akqcmicescemuoic;
        ugceakweuqgwgywe:
        return $iukyueweicuocgow;
        goto iowceqakcgogmssu;
        smgwaikkyouqogwe:
        $iukyueweicuocgow = 0;
        goto uewcskcgceqqekmi;
        akqcmicescemuoic:
        igmumkwsokguugia:
        goto ugceakweuqgwgywe;
        uewcskcgceqqekmi:
        if (!$uomewyckeuqoqocu) {
            goto igmumkwsokguugia;
        }
        goto qiocogaamemoisag;
        iowceqakcgogmssu:
    }
    
    public static function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        goto yaawiccsokmgweye;
        esqkgmaasckugmqo:
        kamukeioemqucmmg:
        goto ygqaaocooiqkugos;
        mmgoicukswqwseoc:
        if (!($uomewyckeuqoqocu && $yygmoeguaqyumuui)) {
            goto kamukeioemqucmmg;
        }
        goto yaawcswsqyucgsus;
        yaawcswsqyucgsus:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto eiseywwywkwcwgcq;
            eiseywwywkwcwgcq:
            if (self::get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) {
                goto agmgeuqwqyskeace;
            }
            goto swagceggcwqkcgkg;
            yusagekewyiqqqyk:
            goto gwwocsgkqyycikau;
            goto asumyiuqmmywiwyc;
            asumyiuqmmywiwyc:
            agmgeuqwqyskeace:
            goto ewkqiewssocsquuo;
            ewkqiewssocsquuo:
            acukcyqyqoyauieg:
            goto qeaowsgcqsuccawg;
            swagceggcwqkcgkg:
            $ksaameoqigiaoigg = true;
            goto yusagekewyiqqqyk;
            qeaowsgcqsuccawg:
        }
        goto ewcysecswgsugswi;
        ewcysecswgsugswi:
        gwwocsgkqyycikau:
        goto esqkgmaasckugmqo;
        yaawiccsokmgweye:
        $ksaameoqigiaoigg = false;
        goto mmgoicukswqwseoc;
        ygqaaocooiqkugos:
        return $ksaameoqigiaoigg;
        goto cksyaoquscmmscke;
        cksyaoquscmmscke:
    }
    
    public static function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie)
    {
        goto ecoqoquwuygscmai;
        akiawysiwswoqmee:
        $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie];
        goto sqeucqqqmoqcuuem;
        mgskwyqqysgqegwe:
        return $qcgkuqesqqymcuui;
        goto omggqawmwgeoiawc;
        ecoqoquwuygscmai:
        $qcgkuqesqqymcuui = null;
        goto gooaiamwaqiueqag;
        gmmukayqkigwksam:
        foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) {
            goto oeoawwmyiaaaieoy;
            ogyecgyqquwgcugi:
            $qcgkuqesqqymcuui = self::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            goto cyewimeguwgissoe;
            swasyymuuuesyssc:
            if (!($uusmaiomayssaecw !== false)) {
                goto kymsyoeswiuqoeam;
            }
            goto ogyecgyqquwgcugi;
            oeoawwmyiaaaieoy:
            $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu);
            goto swasyymuuuesyssc;
            uqkuaiqggmmqkwcg:
            ycesoqquooyiwusg:
            goto mksesqkqwqwyiski;
            cyewimeguwgissoe:
            kymsyoeswiuqoeam:
            goto uqkuaiqggmmqkwcg;
            mksesqkqwqwyiski:
        }
        goto kmawkwiiceqawowo;
        gooaiamwaqiueqag:
        if (is_array($eqgoocgaqwqcimie)) {
            goto gggogewkqkskuicm;
        }
        goto akiawysiwswoqmee;
        kmawkwiiceqawowo:
        ywumqymqkuyegcae:
        goto mgskwyqqysgqegwe;
        sqeucqqqmoqcuuem:
        gggogewkqkskuicm:
        goto ocguegwcwgegqugs;
        ocguegwcwgegqugs:
        $qcgkuqesqqymcuui = false;
        goto gmmukayqkigwksam;
        omggqawmwgeoiawc:
    }
    
    public static function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok)
    {
        goto oogwiuueieywymio;
        aucikuqogioweysy:
        $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy));
        goto uykcicoeacqaykia;
        cieamqmwwegyukgc:
        iawwywggiwmigeiy:
        goto cuqccemgkguqycgc;
        oogwiuueieywymio:
        if (is_int($kuuiuigeacouwmaa)) {
            goto iawwywggiwmigeiy;
        }
        goto wwykqesuwsqiwyiw;
        uykcicoeacqaykia:
        goto gmmwicowkqiisogm;
        goto cieamqmwwegyukgc;
        cuqccemgkguqycgc:
        array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok);
        goto aoseoaeigamewkyg;
        wwykqesuwsqiwyiw:
        $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu));
        goto aucikuqogioweysy;
        aoseoaeigamewkyg:
        gmmwicowkqiisogm:
        goto kuekasacwyquuiqy;
        kuekasacwyquuiqy:
    }
    
    public static function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool
    {
        return count($uomewyckeuqoqocu) != count($uomewyckeuqoqocu, 1);
    }
    
    public static function wuoqgcwmkicakygs($uomewyckeuqoqocu) : bool
    {
        goto muukgiowiywgysuy;
        ocqymsowceymagky:
        return $wuoqgcwmkicakygs;
        goto oqsieegccekksmek;
        muukgiowiywgysuy:
        $wuoqgcwmkicakygs = false;
        goto iscuuwgoaosayimo;
        waoqqaimmwkqikay:
        gacoqocuigoymcam:
        goto ocqymsowceymagky;
        umkkwyaciakygsgo:
        $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1);
        goto waoqqaimmwkqikay;
        iscuuwgoaosayimo:
        if (!$uomewyckeuqoqocu) {
            goto gacoqocuigoymcam;
        }
        goto umkkwyaciakygsgo;
        oqsieegccekksmek:
    }
    
    public static function yaeiiwwyckwugsem($uomewyckeuqoqocu, $igaagwuyasawwqms = self::PRIORITY)
    {
        goto qummwcsgemgwqwga;
        iqwsaiomwmyeusaq:
        return $uomewyckeuqoqocu;
        goto kaoukeiiiuquqgsm;
        gouyoowcwkccwewk:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms) {
            goto yucmysyskmgwsowg;
            euqaywkcamscaugi:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms}() <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}();
            goto ieiwqimgggeoaqwm;
            ieiwqimgggeoaqwm:
            moceysouasysuwwk:
            goto cseioaeaywcuekge;
            ucqcuosmqwiiwigm:
            if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) {
                goto uyqcwcgaswkaaqys;
            }
            goto aasyamqyqesqqwkm;
            yokyoayigkwweqeg:
            wgccsswsaiqccecw:
            goto ykyqsgogqywswoua;
            gwsqeeiwciqccasw:
            oaiigcusecmsciso:
            goto hkokwccuegwgeegk;
            gmiacescgeoqcogu:
            qyuigkqusowucaqq:
            goto gwsqeeiwciqccasw;
            yucmysyskmgwsowg:
            $uiuykcweuosgmwki = false;
            goto ucqcuosmqwiiwigm;
            aasyamqyqesqqwkm:
            if (!(is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi))) {
                goto wscswagewsegyiyc;
            }
            goto gomagoumaosyimii;
            cseioaeaywcuekge:
            goto qyuigkqusowucaqq;
            goto yokyoayigkwweqeg;
            hkokwccuegwgeegk:
            return $uiuykcweuosgmwki;
            goto qkcgewmwssuaewie;
            aokseecsgimieouu:
            if (!(method_exists($mmeioagwmyscwumo, $igaagwuyasawwqms) && method_exists($csougakqegqiqsgi, $igaagwuyasawwqms))) {
                goto moceysouasysuwwk;
            }
            goto euqaywkcamscaugi;
            qsyimuywgcsoiecu:
            goto oaiigcusecmsciso;
            goto qeqwkkggucamquwc;
            cucceeoseaagcoam:
            wscswagewsegyiyc:
            goto qsyimuywgcsoiecu;
            gomagoumaosyimii:
            $uiuykcweuosgmwki = self::get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> self::get($csougakqegqiqsgi, $igaagwuyasawwqms);
            goto cucceeoseaagcoam;
            ksowgigyiiocmmay:
            if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) {
                goto wgccsswsaiqccecw;
            }
            goto aokseecsgimieouu;
            qeqwkkggucamquwc:
            uyqcwcgaswkaaqys:
            goto ksowgigyiiocmmay;
            ykyqsgogqywswoua:
            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms};
            goto gmiacescgeoqcogu;
            qkcgewmwssuaewie:
        });
        goto qeyssuuycyyguuyo;
        qummwcsgemgwqwga:
        if (!is_array($uomewyckeuqoqocu)) {
            goto iyociciyeiswkaqk;
        }
        goto gouyoowcwkccwewk;
        qeyssuuycyyguuyo:
        iyociciyeiswkaqk:
        goto iqwsaiomwmyeusaq;
        kaoukeiiiuquqgsm:
    }
    
    public static function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto oowwickgsmcqamqe;
        kyaismgimkqkcmey:
        if (is_array($oaiciiqoawkamweo)) {
            goto agqgaiqiwcgowsoi;
        }
        goto miqsgoqewuokegig;
        miqsgoqewuokegig:
        if (!is_object($oaiciiqoawkamweo)) {
            goto ygseoaiecssiymec;
        }
        goto smaisgmkkwgiqygi;
        ugaoskycwsqcesko:
        if (!isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) {
            goto qigeyewuukwwousm;
        }
        goto wyuommoqmyaeiswc;
        geyksaceayaiwiiy:
        imeiskyssuamssoq:
        goto ecqyggsgiqweeyee;
        kocagcykiyimkmoa:
        qigeyewuukwwousm:
        goto iswsmaumaacmwcwu;
        iswsmaumaacmwcwu:
        owswisaiecssuwwu:
        goto rasgkseukaaqecam;
        ecqyggsgiqweeyee:
        ygseoaiecssiymec:
        goto qykwyyyeyygkiqmi;
        umyquqiugigqmkau:
        $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw};
        goto geyksaceayaiwiiy;
        wyuommoqmyaeiswc:
        $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw];
        goto kocagcykiyimkmoa;
        oowwickgsmcqamqe:
        $sogksuscggsicmac = $ggauoeuaesiymgee;
        goto kyaismgimkqkcmey;
        rasgkseukaaqecam:
        return $sogksuscggsicmac;
        goto qucwqsuacqkymwsm;
        smaisgmkkwgiqygi:
        if (!isset($oaiciiqoawkamweo->{$uusmaiomayssaecw})) {
            goto imeiskyssuamssoq;
        }
        goto umyquqiugigqmkau;
        okmawomkamqiwesm:
        agqgaiqiwcgowsoi:
        goto ugaoskycwsqcesko;
        qykwyyyeyygkiqmi:
        goto owswisaiecssuwwu;
        goto okmawomkamqiwesm;
        qucwqsuacqkymwsm:
    }
    
    public static function cswcewwmmicqesei($uomewyckeuqoqocu, $oegoegssokkyiqam) : array
    {
        goto uyyceeeqmoysskuw;
        uyyceeeqmoysskuw:
        $sogksuscggsicmac = [];
        goto ccgiykywckmyiscg;
        qqgsggygqommqmkw:
        myissqmgymuauowq:
        goto aiskggeswyweiogy;
        aiskggeswyweiogy:
        return $sogksuscggsicmac;
        goto aasiooeuekwqamyk;
        ccgiykywckmyiscg:
        foreach ($oegoegssokkyiqam as $ymqmyyeuycgmigyo => $mkomwsiykqigmqca) {
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = self::qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca);
            scsgmyqiwwwkwayy:
        }
        goto qqgsggygqommqmkw;
        aasiooeuekwqamyk:
    }
    
    public static function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null)
    {
        goto iugskawkyskmcmyg;
        iugskawkyskmcmyg:
        $yygmoeguaqyumuui = explode("\56", $mkomwsiykqigmqca);
        goto wsmwsckqgokueicw;
        kuquyyieaicaecie:
        iosgqqoyoiqgsgks:
        goto yicuaiowomkyaueg;
        qayogkgwkuoycsuy:
        return $uomewyckeuqoqocu;
        goto iaokmyigguukmcky;
        wsmwsckqgokueicw:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            goto ecawoqusqygmccmo;
            gmoewkmwwyeaycgm:
            if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                goto eguqaygayksgkoyq;
            }
            goto gykceoyygmmeawws;
            wyymkuqsaikomumi:
            kugoqmkkeqeoakik:
            goto gmoewkmwwyeaycgm;
            qgwmgswcikqsoymm:
            goto iosgqqoyoiqgsgks;
            goto mkggwgyaywmiaeue;
            aykucyyeseggeeoy:
            goto imscgsmqiswkeyka;
            goto cqqywmesqogkseku;
            iuumiyikcwiiwuqk:
            cgeimkqsoqqigogy:
            goto aoeccsiuoeigmwkm;
            owsywiygoiqkyeey:
            oyqqsiciakemkgim:
            goto soaekkoykikagyqa;
            aocqwuakameoqqme:
            goto iosgqqoyoiqgsgks;
            goto aykucyyeseggeeoy;
            amamemmaewcmqmso:
            emaakmmcykwmmeum:
            goto ekmmomgayqemmaqm;
            mkggwgyaywmiaeue:
            goto sygasaomgiqoqmqs;
            goto okgmaysweamaymuk;
            ekmmomgayqemmaqm:
            goto ocickgekowkiqyuo;
            goto qkiwmwgkosoiiqgo;
            eiakokiiwigccesk:
            $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw];
            goto aksioomuagcyawuk;
            owasckmgeweqwsgq:
            $uomewyckeuqoqocu = null;
            goto qgwmgswcikqsoymm;
            aksioomuagcyawuk:
            imscgsmqiswkeyka:
            goto iuumiyikcwiiwuqk;
            soaekkoykikagyqa:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw};
            goto amamemmaewcmqmso;
            nicoewqgywcusaci:
            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}();
            goto wmggooiesmiaymyw;
            gykceoyygmmeawws:
            $uomewyckeuqoqocu = null;
            goto aocqwuakameoqqme;
            wmggooiesmiaymyw:
            ocickgekowkiqyuo:
            goto mwewkecyyqycwcyi;
            gocwqoqicukssssu:
            if (is_object($uomewyckeuqoqocu)) {
                goto iqkysoyykewkkwes;
            }
            goto owasckmgeweqwsgq;
            aoeccsiuoeigmwkm:
            akequyeqowgagiek:
            goto ssmcciyyscekqosk;
            mwewkecyyqycwcyi:
            sygasaomgiqoqmqs:
            goto guqmiyswawmaggqw;
            okgmaysweamaymuk:
            iqkysoyykewkkwes:
            goto ouseeusmwgswgayi;
            gueiogkegsiymgie:
            goto iosgqqoyoiqgsgks;
            goto ssgeyeewksygaeqm;
            cqqywmesqogkseku:
            eguqaygayksgkoyq:
            goto eiakokiiwigccesk;
            ouseeusmwgswgayi:
            if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) {
                goto quumskauyaouyyiy;
            }
            goto qwcsgqgmmsscgsaa;
            qwcsgqgmmsscgsaa:
            if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) {
                goto oyqqsiciakemkgim;
            }
            goto ayoycomwascmkkkm;
            qkiwmwgkosoiiqgo:
            quumskauyaouyyiy:
            goto nicoewqgywcusaci;
            ayoycomwascmkkkm:
            $uomewyckeuqoqocu = null;
            goto gueiogkegsiymgie;
            ecawoqusqygmccmo:
            if (is_array($uomewyckeuqoqocu)) {
                goto kugoqmkkeqeoakik;
            }
            goto gocwqoqicukssssu;
            ssgeyeewksygaeqm:
            goto emaakmmcykwmmeum;
            goto owsywiygoiqkyeey;
            guqmiyswawmaggqw:
            goto cgeimkqsoqqigogy;
            goto wyymkuqsaikomumi;
            ssmcciyyscekqosk:
        }
        goto kuquyyieaicaecie;
        gcqeiwgakokeuouq:
        yymqcwmasyyamagq:
        goto qayogkgwkuoycsuy;
        yicuaiowomkyaueg:
        if ($uomewyckeuqoqocu) {
            goto yymqcwmasyyamagq;
        }
        goto oeewiaeeicmwqyiw;
        oeewiaeeicmwqyiw:
        $uomewyckeuqoqocu = $ggauoeuaesiymgee;
        goto gcqeiwgakokeuouq;
        iaokmyigguukmcky:
    }
    
    public static function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array
    {
        goto aewewmmweiaeuewi;
        uwoayuwcsqsekywg:
        uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) {
            return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw];
        });
        goto sewmgsmcyiacccoa;
        gueusoewgqkcwkuq:
        cqgiaauymsygoomq:
        goto acyyqeqgusyqaook;
        sewmgsmcyiacccoa:
        if (!($uuyoeicyoayimaoa > 0)) {
            goto cqgiaauymsygoomq;
        }
        goto ogqswkqkcosuewgg;
        aewewmmweiaeuewi:
        if (!is_array($uomewyckeuqoqocu)) {
            goto useumocigsoceeus;
        }
        goto uwoayuwcsqsekywg;
        ewiqoyqagowquqqe:
        return $uomewyckeuqoqocu;
        goto qyaiyaqcqsskmwos;
        ogqswkqkcosuewgg:
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true);
        goto gueusoewgqkcwkuq;
        acyyqeqgusyqaook:
        useumocigsoceeus:
        goto ewiqoyqagowquqqe;
        qyaiyaqcqsskmwos:
    }
    
    public static function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array
    {
        goto qaqemcccqogoummc;
        wwaqsuwkskcooicq:
        $ggauoeuaesiymgee = '';
        goto ymqseyksqoouycio;
        qaqemcccqogoummc:
        $sogksuscggsicmac = [];
        goto oucwaucwcoegeaco;
        igeccyeusumcacea:
        return $sogksuscggsicmac;
        goto kwickmmwwyqigccu;
        kcaqocqaugkyiyys:
        gcaoeocsuqqqyaym:
        goto aqkgkwewsqkeyusm;
        oucwaucwcoegeaco:
        if (!(is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui))) {
            goto yukgigiiimqqwiyq;
        }
        goto wwaqsuwkskcooicq;
        aqkgkwewsqkeyusm:
        yukgigiiimqqwiyq:
        goto igeccyeusumcacea;
        ymqseyksqoouycio:
        foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) {
            goto iauoeqkuisgyagqc;
            iycuugwwawmiewmq:
            yccuogewgykqkkys:
            goto gwgukcuckigmwoes;
            raqaugusyaieeuyi:
            ocimykqskwaewuia:
            goto wwscaygcymkwcoas;
            iauoeqkuisgyagqc:
            if (is_numeric($ewyuweyoskiagksm)) {
                goto ocimykqskwaewuia;
            }
            goto qmsoeugoyqquamqk;
            skywgyiswsmassgq:
            $sogksuscggsicmac[] = $eqgoocgaqwqcimie;
            goto swiiumgaagycwyoa;
            oukqkimqsackseiw:
            $eqgoocgaqwqcimie = call_user_func($ekiuyucoiagmscgy, $eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto kagckqkwssikyaay;
            ickouwcsecqeskwq:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
            goto wwqikmmkomakgaou;
            gwgukcuckigmwoes:
            $eqgoocgaqwqcimie = self::get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee);
            goto wkisqogwyuawwiqo;
            uisiuwgqougckasg:
            sewqmkouocccomww:
            goto ickouwcsecqeskwq;
            uguyeawasakeoekq:
            if ($mywqgwsimwoeoawk) {
                goto sewqmkouocccomww;
            }
            goto skywgyiswsmassgq;
            scysiomisyamwocw:
            goto yccuogewgykqkkys;
            goto raqaugusyaieeuyi;
            swiiumgaagycwyoa:
            goto mmmkqsukesoasosu;
            goto uisiuwgqougckasg;
            wkisqogwyuawwiqo:
            if (!is_callable($ekiuyucoiagmscgy)) {
                goto qqewqyiwuaqaakwk;
            }
            goto oukqkimqsackseiw;
            iwumyigiscuuwqik:
            $ggauoeuaesiymgee = $uauoccoqcsaeggui;
            goto scysiomisyamwocw;
            yqyqsioacayucksc:
            ieqccoywksywcsky:
            goto gwmwmaqgwkkamqmo;
            qmsoeugoyqquamqk:
            $uusmaiomayssaecw = $ewyuweyoskiagksm;
            goto iwumyigiscuuwqik;
            kagckqkwssikyaay:
            qqewqyiwuaqaakwk:
            goto uguyeawasakeoekq;
            wwqikmmkomakgaou:
            mmmkqsukesoasosu:
            goto yqyqsioacayucksc;
            wwscaygcymkwcoas:
            $uusmaiomayssaecw = $uauoccoqcsaeggui;
            goto iycuugwwawmiewmq;
            gwmwmaqgwkkamqmo:
        }
        goto kcaqocqaugkyiyys;
        kwickmmwwyqigccu:
    }
    
    public static function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = [])
    {
        goto kkgeeeaqoaoskogo;
        uwyckgawyyueaaym:
        aaqqggkciwcemugy:
        goto keoaaweuqeeoguyi;
        kkgeeeaqoaoskogo:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto aaqqggkciwcemugy;
        }
        goto yqisgeugiuokowgw;
        keoaaweuqeeoguyi:
        return $sogksuscggsicmac;
        goto saqyacsiqwmqgqkm;
        yqisgeugiuokowgw:
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) {
            goto ucwyaykmcoikkkuo;
            mkikcguagooeiace:
            cmgayuowmaymuaiq:
            goto awyaiyumyosuyewi;
            kycykouooecoiyqw:
            goto weekmyeyqukcoegg;
            goto yqygigmwumoksekw;
            igoocsoeousssema:
            goto acgauasosqqysagi;
            goto mkikcguagooeiace;
            eceacmeaisaqssco:
            $sogksuscggsicmac = self::kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac);
            goto sqwyqsciuaceoaaa;
            awyaiyumyosuyewi:
            $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu;
            goto wquqgqsyiccogoac;
            isymsqwwkmwkamuy:
            $sogksuscggsicmac[] = $esquqsuaumgwoewu;
            goto igoocsoeousssema;
            wquqgqsyiccogoac:
            acgauasosqqysagi:
            goto kycykouooecoiyqw;
            ucwyaykmcoikkkuo:
            if (is_array($esquqsuaumgwoewu)) {
                goto qeqquaucmqkmsmoq;
            }
            goto aauqmqqqakiaqeqo;
            yqygigmwumoksekw:
            qeqquaucmqkmsmoq:
            goto eceacmeaisaqssco;
            sqwyqsciuaceoaaa:
            weekmyeyqukcoegg:
            goto uwkaywsgkmicamom;
            uwkaywsgkmicamom:
            oiikekyiqeqogkua:
            goto oqmkiaqgogkikwes;
            aauqmqqqakiaqeqo:
            if ($xkqaigkogigocask) {
                goto cmgayuowmaymuaiq;
            }
            goto isymsqwwkmwkamuy;
            oqmkiaqgogkikwes:
        }
        goto ceckikeaaasskwmo;
        ceckikeaaasskwmo:
        iiuwsswoayimgack:
        goto uwyckgawyyueaaym;
        saqyacsiqwmqgqkm:
    }
    
    public static function qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $aumugyockeskamiq, $gymeemoisimggcww = true) : array
    {
        goto oaeweiaegakeieoi;
        woagemomagskuyii:
        $ggkaciewmeqmgckg = array_slice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)), true);
        goto gqoiqscswogsymcu;
        ogmcsmoewwocmkme:
        $uomewyckeuqoqocu = $ggkaciewmeqmgckg + $aseguuimuokgcami + $uomewyckeuqoqocu;
        goto kummaeaoeksaiasa;
        nwckgaiueoigasee:
        kkwcewqsaeyugawo:
        goto eocckcsgsycuywyi;
        sgkayqyykwuagyiu:
        foreach ($aumugyockeskamiq as $igqsaukqcqscimok) {
            $uomewyckeuqoqocu = self::qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $igqsaukqcqscimok, $gymeemoisimggcww);
            amiessagaiiiiiei:
        }
        goto nwckgaiueoigasee;
        wewmsmwegeoqoeem:
        if ($gymeemoisimggcww) {
            goto ewquwuoyeeiwkwuy;
        }
        goto woagemomagskuyii;
        kummaeaoeksaiasa:
        keqgmaemoceqssyy:
        goto cgoaqiqsuomgmysm;
        iqgcumoueoaacgkc:
        if (!isset($uomewyckeuqoqocu[$ksiyqouuaoymsycg], $uomewyckeuqoqocu[$aumugyockeskamiq])) {
            goto keqgmaemoceqssyy;
        }
        goto yowsymiqiqgkmuuy;
        iymqokemgwcsgeiu:
        $ggkaciewmeqmgckg = array_splice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)));
        goto ggyqoucwiyqucqsi;
        eocckcsgsycuywyi:
        auiwyymoguwkooew:
        goto emiosiemcoyoeoou;
        emiosiemcoyoeoou:
        return $uomewyckeuqoqocu;
        goto sscoeeyeeggsckyo;
        yowsymiqiqgkmuuy:
        $aseguuimuokgcami = [$aumugyockeskamiq => $uomewyckeuqoqocu[$aumugyockeskamiq]];
        goto wewmsmwegeoqoeem;
        ggyqoucwiyqucqsi:
        ygsaygcskekuwgya:
        goto qgaeuqkwwoikwsus;
        qgaeuqkwwoikwsus:
        unset($ggkaciewmeqmgckg[$aumugyockeskamiq]);
        goto ogmcsmoewwocmkme;
        cuwayimcsiycgmim:
        kqcusmuiyoqmeqwu:
        goto sgkayqyykwuagyiu;
        oaeweiaegakeieoi:
        if (is_array($aumugyockeskamiq)) {
            goto kqcusmuiyoqmeqwu;
        }
        goto iqgcumoueoaacgkc;
        cusoaecwsaeckaie:
        ewquwuoyeeiwkwuy:
        goto iymqokemgwcsgeiu;
        cgoaqiqsuomgmysm:
        goto auiwyymoguwkooew;
        goto cuwayimcsiycgmim;
        gqoiqscswogsymcu:
        goto ygsaygcskekuwgya;
        goto cusoaecwsaeckaie;
        sscoeeyeeggsckyo:
    }
    
    public static function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array
    {
        goto aoueogeoyisucaiq;
        kewcuamqaiyeayio:
        return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik];
        goto oeoaqooaouowkwec;
        aoueogeoyisucaiq:
        $giqggecqqikcysgq = 0;
        goto muowkaagoqiyegme;
        yiisikkiqosawsgu:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
            goto aksaumeeuqawgwmi;
            boekkoaekyqaemmq:
            ikuauuskoukskkmo:
            goto eqqgiigwkciiksuo;
            qmuqwqmumcayeiku:
            if (!is_object($eqgoocgaqwqcimie)) {
                goto yesicceuyqcyysue;
            }
            goto mskqaucggqcumquk;
            kuiicmskwegaoggu:
            yesicceuyqcyysue:
            goto ggiycasgekosqyqk;
            osmciccqwowieume:
            $aqeywoskqiugcmye = $momcykaoccoymeig;
            goto boekkoaekyqaemmq;
            mskqaucggqcumquk:
            $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
            goto kuiicmskwegaoggu;
            wuuqskwuoeacgacg:
            if (!($ykiwomimkkuiigoq > $giqggecqqikcysgq)) {
                goto ikuauuskoukskkmo;
            }
            goto keakmgioceekisuk;
            keakmgioceekisuk:
            $giqggecqqikcysgq = $ykiwomimkkuiigoq;
            goto egaqukiucuckkqai;
            awmyswwkwqgugmmy:
            kgisumcygmcgyemm:
            goto kskoukygaaicomgy;
            mcqimygcwcqcssky:
            wewusiqwsukukkms:
            goto awmyswwkwqgugmmy;
            ggiycasgekosqyqk:
            if (!is_string($eqgoocgaqwqcimie)) {
                goto kgoeamguscusyywe;
            }
            goto usggsqksmaaukmqq;
            eqqgiigwkciiksuo:
            kgoeamguscusyywe:
            goto mcqimygcwcqcssky;
            aksaumeeuqawgwmi:
            if (key_exists($momcykaoccoymeig, $couiucmsqaieciue)) {
                goto wewusiqwsukukkms;
            }
            goto qmuqwqmumcayeiku;
            usggsqksmaaukmqq:
            $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
            goto wuuqskwuoeacgacg;
            egaqukiucuckkqai:
            $uiymkeeaukcyqqik = $eqgoocgaqwqcimie;
            goto osmciccqwowieume;
            kskoukygaaicomgy:
        }
        goto qoeiqqmskcqeaiug;
        akeowgkiskougikg:
        $aqeywoskqiugcmye = null;
        goto yiisikkiqosawsgu;
        muowkaagoqiyegme:
        $uiymkeeaukcyqqik = null;
        goto akeowgkiskougikg;
        qoeiqqmskcqeaiug:
        qeggaicaycsqqkio:
        goto kewcuamqaiyeayio;
        oeoaqooaouowkwec:
    }
    
    public static function ksiyqouuaoymsycg(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, $momcykaoccoymeig = false)
    {
        goto ouumywcisskmgyio;
        ouumywcisskmgyio:
        $ksiyqouuaoymsycg = null;
        goto ekwoimwoqucawyis;
        iqskmoysaamkuoim:
        ugqsesmesggiqaos:
        goto ewowkiosiisoacse;
        ewowkiosiisoacse:
        return $ksiyqouuaoymsycg;
        goto awsiakgwsaqyiggo;
        ekwoimwoqucawyis:
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $igqsaukqcqscimok) {
            goto qsieyoiaoiqaumus;
            yksiaqaciswymeim:
            gwqicekgscayqcuq:
            goto gsggsgayikymekok;
            mieaoqwgaukeysis:
            if (!($esoaccosseymguso == $qwcmueausqgiwigy)) {
                goto gwqicekgscayqcuq;
            }
            goto kokuyqgigassuuoc;
            yaekwuquieusamyw:
            $ksiyqouuaoymsycg = $igqsaukqcqscimok;
            goto ygyugquqaqegwioo;
            komsqawwueueiuag:
            iiigksqqskiumiqi:
            goto ckeccumaeeuamqem;
            qsieyoiaoiqaumus:
            $esoaccosseymguso = self::qamwegcyimgcqksw($igqsaukqcqscimok, $mkomwsiykqigmqca);
            goto mieaoqwgaukeysis;
            ygyugquqaqegwioo:
            goto qywsmseiceqecigi;
            goto komsqawwueueiuag;
            oywuqkssgiiumuis:
            qywsmseiceqecigi:
            goto ooyqgwsoeyqoucae;
            kokuyqgigassuuoc:
            if ($momcykaoccoymeig) {
                goto iiigksqqskiumiqi;
            }
            goto yaekwuquieusamyw;
            gsggsgayikymekok:
            kawkmiguwoooksec:
            goto scgqkqkwimicokau;
            ckeccumaeeuamqem:
            $ksiyqouuaoymsycg = $momcykaoccoymeig;
            goto oywuqkssgiiumuis;
            ooyqgwsoeyqoucae:
            goto ugqsesmesggiqaos;
            goto yksiaqaciswymeim;
            scgqkqkwimicokau:
        }
        goto iqskmoysaamkuoim;
        awsiakgwsaqyiggo:
    }
}

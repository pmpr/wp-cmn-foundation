<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Pmpr\Common\Foundation\Data\PageInfo;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use WP_Post;

class ManipulatePage extends ManipulatePost
{
    
    public static function okiaumcqquyioqcy()
    {
        global $wp_query;
        return isset($wp_query) && (bool) $wp_query->is_posts_page;
    }
    
    public static function cykwscocqwykiocm()
    {
        goto soqwgawucoyckiso;
        kqcqgmsgiggceyss:
        $oikyogsosqcyueay = self::get($oikyogsosqcyueay);
        goto qcggaygooaigauwu;
        aakioaiukcgicqma:
        return $oikyogsosqcyueay;
        goto ysqwqwciewcauaso;
        soqwgawucoyckiso:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto csmewseacwwiskqi;
        csmewseacwwiskqi:
        if (!$oikyogsosqcyueay) {
            goto sogsyogucsmisoau;
        }
        goto kqcqgmsgiggceyss;
        qcggaygooaigauwu:
        sogsyogucsmisoau:
        goto aakioaiukcgicqma;
        ysqwqwciewcauaso:
    }
    
    public static function eokiwumgqmymgyoa()
    {
        return DecoratorOption::get("\160\141\x67\x65\x5f\x66\157\x72\x5f\160\x6f\x73\x74\x73");
    }
    
    public static function icikwuksyiceccmo()
    {
        goto iimquseysaiomgas;
        msyoyikcumueukue:
        $aaokuekaimigoyue = self::aqcogscycyycgkuq($oikyogsosqcyueay);
        goto ywigmmoegqeggysg;
        iakcwkiqcswmeygo:
        return $aaokuekaimigoyue;
        goto miqyaiywugkkgwie;
        ywigmmoegqeggysg:
        wmesugyccceqgekg:
        goto iakcwkiqcswmeygo;
        iimquseysaiomgas:
        $oikyogsosqcyueay = self::cykwscocqwykiocm();
        goto iyiwiyiuaagacugy;
        iyiwiyiuaagacugy:
        $aaokuekaimigoyue = "\142\x6c\x6f\x67";
        goto ygosgmiiugiiscsu;
        ygosgmiiugiiscsu:
        if (!$oikyogsosqcyueay instanceof WP_Post) {
            goto wmesugyccceqgekg;
        }
        goto msyoyikcumueukue;
        miqyaiywugkkgwie:
    }
    
    public static function oigaewqgekgugqug()
    {
        return DecoratorOption::get("\x70\x61\x67\145\x5f\x6f\x6e\x5f\146\162\x6f\x6e\x74");
    }
    
    public static function awgkmqkqkqawmqcu() : bool
    {
        goto ggsuykssmeuwgmee;
        ggsuykssmeuwgmee:
        $aiamqeawckcsuaou = ManipulateServer::get("\141\x63\164\x69\157\156");
        goto iyywoeosyegimygc;
        iyywoeosyegimygc:
        $syuuigcamkiegaqy = ManipulateServer::oymwkcegiigooaqm("\160\141\147\145\x6e\157\167");
        goto yiyigymygeeowoms;
        yiyigymygeeowoms:
        return $syuuigcamkiegaqy === "\x77\160\x2d\x6c\x6f\147\151\156\56\160\150\x70" || in_array($aiamqeawckcsuaou, ["\162\160", "\x6c\x6f\x73\x74\x70\x61\163\x73\x77\157\x72\x64", "\162\145\147\151\163\x74\x65\162"]);
        goto wuiwysygcwqscigy;
        wuiwysygcwqscigy:
    }
    
    public static function symuoymymumgwkaw()
    {
        goto sqykqekmsogswkog;
        wiwykgmceuaoeqks:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto weaaqgwewmkwwciw;
        weaaqgwewmkwwciw:
        if (!$oikyogsosqcyueay) {
            goto ewmaqwoqyggwucag;
        }
        goto mgocwmsiykiigeme;
        maqseauogscyeogw:
        ewmaqwoqyggwucag:
        goto suaggqsigckogyek;
        suaggqsigckogyek:
        return $migiiksoiymissge;
        goto iekwekemogoyomuk;
        sqykqekmsogswkog:
        $migiiksoiymissge = null;
        goto wiwykgmceuaoeqks;
        mgocwmsiykiigeme:
        $migiiksoiymissge = self::ycqquoiyyuesegsy($oikyogsosqcyueay);
        goto maqseauogscyeogw;
        iekwekemogoyomuk:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        goto sykeuqwqugkeigig;
        qmowaeuskymgicac:
        if (DecoratorQuery::moegwqkekcawsggs()) {
            goto ccyuokyeykkmwqkc;
        }
        goto qsceaisugocqyckq;
        qsceaisugocqyckq:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto yokwocmaaycmkkao;
        }
        goto ueaayiqayygcgoqi;
        imumuuckgaiyaqou:
        goto okssskeakmywwwii;
        goto iaaeukgwkeyewuwk;
        ueaayiqayygcgoqi:
        goto okssskeakmywwwii;
        goto msamwsmoqyooagqs;
        iosaeiaommgcgsyq:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto myiqqkogcqekgqiq;
        }
        goto waeeskqmeqwiyysa;
        caegckokkmueeags:
        okssskeakmywwwii:
        goto igocqgwwyscegcoo;
        qwigokiuwsgywmqe:
        goto okssskeakmywwwii;
        goto omcgwcaewggkyekk;
        ouqkcsiuwymsyyac:
        goto okssskeakmywwwii;
        goto iuewwmweyqcmyoku;
        iaaeukgwkeyewuwk:
        qyewgcsqgmyaocco:
        goto agekuuacwqkmswoi;
        omcgwcaewggkyekk:
        ccyuokyeykkmwqkc:
        goto qyeogkiaggyykewa;
        qyeogkiaggyykewa:
        $useksmwkuswkwcqg = self::waaisqccqacqeium();
        goto wuikyqcaoeiggqmq;
        igocqgwwyscegcoo:
        akyoausyiwisayoe:
        goto ssauiqekekegaucy;
        cyioiakwwqmokgye:
        $meqocwsecsywiiqs = DecoratorPost::syeuyeikogukksam();
        goto caegckokkmueeags;
        eswcmcmguawawsya:
        ayqomgiesquiieke:
        goto ouqkcsiuwymsyyac;
        ismcqqkiosumseue:
        $meqocwsecsywiiqs = $useksmwkuswkwcqg->label;
        goto eswcmcmguawawsya;
        msamwsmoqyooagqs:
        myiqqkogcqekgqiq:
        goto aqimseoockakwaek;
        rguugekykscwiaca:
        if ($post) {
            goto akyoausyiwisayoe;
        }
        goto iosaeiaommgcgsyq;
        agekuuacwqkmswoi:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco(self::cykwscocqwykiocm());
        goto qwigokiuwsgywmqe;
        wuikyqcaoeiggqmq:
        if (!$useksmwkuswkwcqg) {
            goto ayqomgiesquiieke;
        }
        goto ismcqqkiosumseue;
        aqimseoockakwaek:
        $meqocwsecsywiiqs = get_bloginfo("\156\141\x6d\x65");
        goto imumuuckgaiyaqou;
        waeeskqmeqwiyysa:
        if (self::okiaumcqquyioqcy()) {
            goto qyewgcsqgmyaocco;
        }
        goto qmowaeuskymgicac;
        iuewwmweyqcmyoku:
        yokwocmaaycmkkao:
        goto cyioiakwwqmokgye;
        ssauiqekekegaucy:
        return $meqocwsecsywiiqs;
        goto sgywygyawgwgcisg;
        sykeuqwqugkeigig:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco($post);
        goto rguugekykscwiaca;
        sgywygyawgwgcisg:
    }
    
    public static function somwagieycgkcyec()
    {
        return self::ycqquoiyyuesegsy(self::oigaewqgekgugqug());
    }
    
    public static function iqoacwuiemooiysg() : PageInfo
    {
        goto egkuaomeucwoggsm;
        kckcsuuiykyaawke:
        qycwewyaymciuaow:
        goto egcakiyaioiqacsg;
        myccssugyykigeie:
        iwoisseyosimeiwg:
        goto mwcaeiokmsaacsac;
        eckqskkgosseskmc:
        akuwqeaouicqskgu:
        goto acmaoyccqewmweaw;
        iiqwggyqyekwkako:
        goto esegymsakukwacyq;
        goto kckcsuuiykyaawke;
        oqssaoscmiskagum:
        uweemmwsoqkmekwy:
        goto ukkegcmwcuymceua;
        qouscuqwwookaiea:
        uggycmgqqyqeacas:
        goto uaokcgsoaemmiqou;
        ugoueuoakwywqsos:
        aaaquaiiomywcyie:
        goto wmyewgwkuyyswgge;
        emeayeegwmicuiqq:
        if (is_single() && !DecoratorQuery::aauyuieeeaakygki()) {
            goto guyscyosaqwiaaoc;
        }
        goto iggeguwkkemeoksm;
        smewgosmeuaqukya:
        goto esegymsakukwacyq;
        goto oqssaoscmiskagum;
        suswiwiacoeosiuu:
        if (is_404()) {
            goto qycwewyaymciuaow;
        }
        goto gywgyugckkqscaao;
        amwoyceicgucwuca:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\143\141\164"), "\143\x61\164\x65\147\x6f\162\x79"))->ugaqcouwcuiaemgo("\164\x61\170\x6f\156\157\155\171")->aseocggwwegcmqes("\143\x61\x74\x65\147\x6f\x72\171");
        goto mmeuuskqmmyaesga;
        uaqieigykmeagcoi:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\131")))->ugaqcouwcuiaemgo("\x79\145\x61\162");
        goto auymguqowwoccwiq;
        ueikewqggcwskseu:
        wsguekmucgeaocgu:
        goto ciwcueuqsueyeyeu;
        ocqgosucokgqukws:
        $yyimiwcuegayoskq = new PageInfo();
        goto mcuamuokmoskmwky;
        gywgyugckkqscaao:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateServer::ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\165\x6e\x6b\x6e\157\x77\x6e");
        goto ogygmqoisqiasisc;
        iamagkcimokqwswc:
        $yyimiwcuegayoskq->cggwsuueqwqscgei(is_paged());
        goto muaoymyciyauqiae;
        aqqemqcsowckquqa:
        guyscyosaqwiaaoc:
        goto ewauqkmweawmkgas;
        iggeguwkkemeoksm:
        if (is_page()) {
            goto wsguekmucgeaocgu;
        }
        goto qygawwowocwskuqu;
        ymsugasumawwwgka:
        if (is_month()) {
            goto koccukqciscmgeuo;
        }
        goto kiecqswmwgwmackc;
        uaaouwkcigacguou:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::mqgeysameoesmuqw($useksmwkuswkwcqg->name))->ugaqcouwcuiaemgo("\x70\x6f\163\x74\137\164\171\x70\x65")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto iiqwggyqyekwkako;
        mkkeagwoaksoqsii:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($mksyucucyswaukig, true);
        goto uaaouwkcigacguou;
        uaeuiiegyuoocksu:
        goto esegymsakukwacyq;
        goto aqqemqcsowckquqa;
        yukqeyeyuucieqga:
        goto esegymsakukwacyq;
        goto eckqskkgosseskmc;
        mwcaeiokmsaacsac:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::somwagieycgkcyec())->ugaqcouwcuiaemgo("\146\x72\x6f\x6e\164\137\x70\x61\x67\x65");
        goto agewogomsgsaeiss;
        eqmimgekqkqqmcca:
        if (is_author()) {
            goto uweemmwsoqkmekwy;
        }
        goto emeayeegwmicuiqq;
        ckgqqiewiuyycyee:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\131"), get_the_time("\106")))->ugaqcouwcuiaemgo("\155\157\156\164\150");
        goto eyqugyuuucmscwqg;
        uamaycseqskcgogs:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo("\x74\141\x78\x6f\x6e\157\x6d\x79")->aseocggwwegcmqes($kesssewsiegssiya);
        goto yukqeyeyuucieqga;
        omoeomgwkeyyuews:
        scgayeiigokkyksu:
        goto uswqukaouqwuocik;
        ooasiqaamqsiuqio:
        goto esegymsakukwacyq;
        goto uyqmicaayqwwommo;
        ogygmqoisqiasisc:
        goto esegymsakukwacyq;
        goto myccssugyykigeie;
        wmyewgwkuyyswgge:
        $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig);
        goto uamaycseqskcgogs;
        gguiymqokicqscom:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\131"), get_the_time("\106"), get_the_time("\144")))->ugaqcouwcuiaemgo("\144\x61\x79");
        goto smewgosmeuaqukya;
        uaokcgsoaemmiqou:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\164\141\147\x5f\x69\x64"), "\160\x6f\x73\x74\x5f\x74\x61\x67"))->ugaqcouwcuiaemgo("\x74\x61\x78\x6f\156\x6f\x6d\171")->aseocggwwegcmqes("\x74\141\147");
        goto igguimucuuyekecy;
        ukkegcmwcuymceua:
        $qscaoekmoooeuyqg = ManipulateUser::get(get_query_var("\x61\x75\164\150\157\x72"), true);
        goto qkiqgucaomigsesq;
        mcuamuokmoskmwky:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto iwoisseyosimeiwg;
        }
        goto omyiaeqssiowmeyq;
        squouqwsoywkecwy:
        osieesqoygmqkski:
        goto mkkeagwoaksoqsii;
        wakwyywuumiqsmsi:
        goto esegymsakukwacyq;
        goto sikagsogeweqwqwe;
        gyauiikaoigoeyyq:
        if (self::sqyyemqmmgmyiaam()) {
            goto osieesqoygmqkski;
        }
        goto suswiwiacoeosiuu;
        omyiaeqssiowmeyq:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto scgayeiigokkyksu;
        }
        goto qugqcmywiswaoigo;
        ecacgamqsegoqaug:
        if (is_year()) {
            goto wekaickwcioowesg;
        }
        goto ymsugasumawwwgka;
        cyggoamqmaisueam:
        if (is_search()) {
            goto akuwqeaouicqskgu;
        }
        goto ecacgamqsegoqaug;
        muywyiaqscwgmeoi:
        if (is_tag()) {
            goto uggycmgqqyqeacas;
        }
        goto uecagaicwccecikw;
        muaoymyciyauqiae:
        return $yyimiwcuegayoskq;
        goto uyqqcioceqguesgw;
        uyqmicaayqwwommo:
        gkmiagqgacyogaoy:
        goto scioseuqqegcycuu;
        qugqcmywiswaoigo:
        if (is_category()) {
            goto uioiawwiiuaycmqi;
        }
        goto muywyiaqscwgmeoi;
        auymguqowwoccwiq:
        goto esegymsakukwacyq;
        goto uwwkacwywyygyomc;
        egkuaomeucwoggsm:
        $mksyucucyswaukig = get_queried_object();
        goto ocqgosucokgqukws;
        wscyocimqesyaqeu:
        goto esegymsakukwacyq;
        goto ueikewqggcwskseu;
        ewauqkmweawmkgas:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\163\151\x6e\x67\154\145")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto wscyocimqesyaqeu;
        sikagsogeweqwqwe:
        uioiawwiiuaycmqi:
        goto amwoyceicgucwuca;
        igguimucuuyekecy:
        goto esegymsakukwacyq;
        goto ugoueuoakwywqsos;
        mmeuuskqmmyaesga:
        goto esegymsakukwacyq;
        goto qouscuqwwookaiea;
        qkiqgucaomigsesq:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo("\x61\x75\164\x68\x6f\162");
        goto uaeuiiegyuoocksu;
        egcakiyaioiqacsg:
        $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\64\60\64");
        goto wcywgsiukiucoyau;
        uecagaicwccecikw:
        if (is_tax()) {
            goto aaaquaiiomywcyie;
        }
        goto cyggoamqmaisueam;
        uwwkacwywyygyomc:
        koccukqciscmgeuo:
        goto ckgqqiewiuyycyee;
        ciwcueuqsueyeyeu:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\160\141\147\x65");
        goto ooasiqaamqsiuqio;
        qygawwowocwskuqu:
        if (DecoratorQuery::aauyuieeeaakygki()) {
            goto gkmiagqgacyogaoy;
        }
        goto gyauiikaoigoeyyq;
        uswqukaouqwuocik:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::symuoymymumgwkaw())->ugaqcouwcuiaemgo("\x68\157\155\x65");
        goto wakwyywuumiqsmsi;
        scioseuqqegcycuu:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAttachment::qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x61\164\164\x61\x63\x68\x6d\145\156\x74");
        goto egoewmaccsammqkc;
        eyqugyuuucmscwqg:
        goto esegymsakukwacyq;
        goto ciqusemcegueoegm;
        ciqusemcegueoegm:
        wcaysaykacysmkue:
        goto gguiymqokicqscom;
        kuacwismecyuequy:
        goto esegymsakukwacyq;
        goto qcoagmaceeioumey;
        agewogomsgsaeiss:
        goto esegymsakukwacyq;
        goto omoeomgwkeyyuews;
        qcoagmaceeioumey:
        wekaickwcioowesg:
        goto uaqieigykmeagcoi;
        acmaoyccqewmweaw:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_search_query())->ugaqcouwcuiaemgo("\x73\x65\x61\162\143\150");
        goto kuacwismecyuequy;
        wcywgsiukiucoyau:
        esegymsakukwacyq:
        goto iamagkcimokqwswc;
        egoewmaccsammqkc:
        goto esegymsakukwacyq;
        goto squouqwsoywkecwy;
        kiecqswmwgwmackc:
        if (is_day()) {
            goto wcaysaykacysmkue;
        }
        goto eqmimgekqkqqmcca;
        uyqqcioceqguesgw:
    }
    
    public static function ycqquoiyyuesegsy($post = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto oskmiqqwqkuyugqq;
        ssmawuwisimwmqsa:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto gqacwwimmmoswagw;
        kkwammqmykqmseky:
        goto mqukeuyogggewmmu;
        goto oaeqccuiuqwqomeg;
        oskmiqqwqkuyugqq:
        $migiiksoiymissge = null;
        goto ooisukscqugmceuy;
        emmwgomqmskywumg:
        goto mqukeuyogggewmmu;
        goto gkcqguoasqokuaug;
        acqyyksaoeeomiia:
        $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($wp->request);
        goto wmysaywgeqwcaims;
        wwockyuqacckgmkm:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto kkwammqmykqmseky;
        amaqgiegqwsmcqak:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto ogqgmqiweiwqeyck;
        }
        goto wwockyuqacckgmkm;
        gqacwwimmmoswagw:
        goto mqukeuyogggewmmu;
        goto gmgomyaaquiiekcg;
        oaeqccuiuqwqomeg:
        taqemmwguqueqemw:
        goto ssmawuwisimwmqsa;
        ceacseyocykwqyyw:
        ogqgmqiweiwqeyck:
        goto qqgmsukugueeaesq;
        gkcqguoasqokuaug:
        uueakweiqiqqukes:
        goto uagqceymsywggcgs;
        gkoeukkaesoaseqg:
        $migiiksoiymissge = ManipulateServer::auksikwsewaywikq();
        goto emmwgomqmskywumg;
        qqgmsukugueeaesq:
        global $wp;
        goto acqyyksaoeeomiia;
        uagqceymsywggcgs:
        $migiiksoiymissge = self::symuoymymumgwkaw();
        goto omysmgiqyswuigkq;
        ooisukscqugmceuy:
        if ($post) {
            goto taqemmwguqueqemw;
        }
        goto waeweckgowcciukq;
        omysmgiqyswuigkq:
        goto mqukeuyogggewmmu;
        goto ceacseyocykwqyyw;
        qesiqimsweuqacgc:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto uueakweiqiqqukes;
        }
        goto amaqgiegqwsmcqak;
        waeweckgowcciukq:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto amkyoauqecoimiau;
        }
        goto qesiqimsweuqacgc;
        gmgomyaaquiiekcg:
        amkyoauqecoimiau:
        goto gkoeukkaesoaseqg;
        cqomyeiacimqacuw:
        return trailingslashit($migiiksoiymissge);
        goto myoocyaewqimqeui;
        wmysaywgeqwcaims:
        mqukeuyogggewmmu:
        goto cqomyeiacimqacuw;
        myoocyaewqimqeui:
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto igeaueoqcuacaims;
        ogaykeacicqmowss:
        if (self::okiaumcqquyioqcy()) {
            goto eoyikamgogkskgao;
        }
        goto gyuwiiamkaoiqoyg;
        meyokciwwsksmykm:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::cykwscocqwykiocm(), $gioggcykgoikcwiy);
        goto ocsmamaueksquiau;
        giimkwieukqwesyc:
        goto yqgcksakiqqsuqec;
        goto mcuwmuamkysmycuq;
        saaeyiqggocsqici:
        eoyikamgogkskgao:
        goto meyokciwwsksmykm;
        ewimgmyosqwoeawa:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto jycseygmyuiggacq;
        }
        goto oeuecmgcqammueiw;
        ciqqmaiawkmiwgmy:
        return $iayakwckycsumkqa;
        goto ykuaoqecgmioscey;
        kcsmyiqgeukocugm:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto ugmkgeamwiemieag;
        }
        goto ogaykeacicqmowss;
        gwoqcyqoguaykmae:
        goto yqgcksakiqqsuqec;
        goto sguwkgiguoscuowe;
        mcuwmuamkysmycuq:
        ugmkgeamwiemieag:
        goto ikmkcieiyggeokam;
        koqmmigmqsawcqci:
        $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export;
        goto reuuqqqwucksmwwo;
        sguwkgiguoscuowe:
        jycseygmyuiggacq:
        goto qweguymgasscgmec;
        aisysqymsawuomqo:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto giimkwieukqwesyc;
        eaeciuwyqckwomio:
        if ($post) {
            goto kyqwosmmiuemmkug;
        }
        goto kcsmyiqgeukocugm;
        maowyiwmuococgku:
        ksimceecsmqscemk:
        goto aismaqwymeosqoyq;
        ikmkcieiyggeokam:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::oigaewqgekgugqug(), $gioggcykgoikcwiy);
        goto mcoegugoeeuowgkq;
        reuuqqqwucksmwwo:
        saimqwoekaggasik:
        goto gwoqcyqoguaykmae;
        mcoegugoeeuowgkq:
        goto yqgcksakiqqsuqec;
        goto saaeyiqggocsqici;
        igeaueoqcuacaims:
        $iayakwckycsumkqa = null;
        goto eaeciuwyqckwomio;
        ocsmamaueksquiau:
        goto yqgcksakiqqsuqec;
        goto maowyiwmuococgku;
        gkiskesiwecgcuyo:
        yqgcksakiqqsuqec:
        goto ciqqmaiawkmiwgmy;
        twmiwuiakgeomosm:
        if (!$sqeykgyoooqysmca) {
            goto saimqwoekaggasik;
        }
        goto koqmmigmqsawcqci;
        oeuecmgcqammueiw:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto isuykcgsgyyqogeq;
        isuykcgsgyyqogeq:
        goto yqgcksakiqqsuqec;
        goto qkcyoowaicaciwcg;
        qkcyoowaicaciwcg:
        kyqwosmmiuemmkug:
        goto aisysqymsawuomqo;
        aismaqwymeosqoyq:
        $sqeykgyoooqysmca = self::waaisqccqacqeium();
        goto twmiwuiakgeomosm;
        gyuwiiamkaoiqoyg:
        if (self::sqyyemqmmgmyiaam()) {
            goto ksimceecsmqscemk;
        }
        goto ewimgmyosqwoeawa;
        qweguymgasscgmec:
        $iayakwckycsumkqa = DecoratorPost::wieoiwogwmcwukom();
        goto gkiskesiwecgcuyo;
        ykuaoqecgmioscey:
    }
    
    public static function agegeeiiacceomke($aaokuekaimigoyue, $meqocwsecsywiiqs, $omkysikckkcieckq = null, $ywmkwiwkosakssii = [])
    {
        goto igikiyqycooasgey;
        mswykgiqgmcugqes:
        if (!$suaemuyiacqyugsm) {
            goto qmyawqywcoawoeim;
        }
        goto wmqcsqscwmkocacm;
        seygmewkwgggmgqa:
        iygyaykccksksmka:
        goto qwkmscimkwuuqkyy;
        eqsoeagckkeueyoy:
        imqeiaoiomcusmys:
        goto qewioskiigymoaae;
        uscqgqwkeqmmeqay:
        qiagkoiassqawesu:
        goto aeamuikiyeskkkee;
        gekgyswocciysksa:
        $suaemuyiacqyugsm = self::insert("\160\x61\x67\145", $ywmkwiwkosakssii);
        goto sywsuomwieouwayw;
        kiewsmqeekaymgeo:
        DecoratorOption::update($omkysikckkcieckq, self::mwikyscisascoeea($suaemuyiacqyugsm));
        goto seygmewkwgggmgqa;
        qewioskiigymoaae:
        flush_rewrite_rules(false);
        goto uscqgqwkeqmmeqay;
        gauuayyuaimeqgms:
        if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) {
            goto iygyaykccksksmka;
        }
        goto koycomwmwaigmeim;
        saqyqgeqayiqykao:
        qmyawqywcoawoeim:
        goto gauuayyuaimeqgms;
        nisqcoeqcgqqqaai:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x6f\163\x74\137\x74\x69\x74\x6c\145" => $meqocwsecsywiiqs, "\x70\x6f\x73\x74\137\156\x61\x6d\x65" => $aaokuekaimigoyue, "\x70\157\x73\x74\137\163\x74\x61\164\165\163" => "\160\x75\142\154\151\163\150"]);
        goto gekgyswocciysksa;
        igikiyqycooasgey:
        $suaemuyiacqyugsm = DecoratorOption::get($omkysikckkcieckq);
        goto iwwsckgkuyykggwm;
        wgqeiquyekoaaiqs:
        DecoratorOption::update($omkysikckkcieckq, $suaemuyiacqyugsm);
        goto eqsoeagckkeueyoy;
        iwwsckgkuyykggwm:
        $mksyucucyswaukig = null;
        goto mswykgiqgmcugqes;
        sywsuomwieouwayw:
        if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) {
            goto imqeiaoiomcusmys;
        }
        goto wgqeiquyekoaaiqs;
        koycomwmwaigmeim:
        $suaemuyiacqyugsm = DecoratorPost::qamwegcyimgcqksw($aaokuekaimigoyue, "\160\x61\x67\x65");
        goto kiewsmqeekaymgeo;
        wmqcsqscwmkocacm:
        $mksyucucyswaukig = self::get($suaemuyiacqyugsm);
        goto saqyqgeqayiqykao;
        qwkmscimkwuuqkyy:
        if ($suaemuyiacqyugsm) {
            goto qiagkoiassqawesu;
        }
        goto nisqcoeqcgqqqaai;
        aeamuikiyeskkkee:
    }
    
    public static function ssacaeeassumyuws(?string $migiiksoiymissge = null, $aqykuigiuwmmcieu = self::OBJECT, $useksmwkuswkwcqg = "\x70\141\147\145")
    {
        goto iuuekasywyywqcmy;
        iewmgooekimcooem:
        wiuuqwgymuyoiciu:
        goto awomwemokoaommck;
        iuuekasywyywqcmy:
        if ($migiiksoiymissge) {
            goto wiuuqwgymuyoiciu;
        }
        goto wyowoaggksqmaums;
        msykyyqmmqsyqmkg:
        return DecoratorPost::qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu);
        goto wcimeswkkmqyaqoa;
        wyowoaggksqmaums:
        $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc();
        goto iewmgooekimcooem;
        awomwemokoaommck:
        $mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH);
        goto msykyyqmmqsyqmkg;
        wcimeswkkmqyaqoa:
    }
}

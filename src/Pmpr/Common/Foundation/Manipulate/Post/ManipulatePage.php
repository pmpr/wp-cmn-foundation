<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto csmewseacwwiskqi;
        ysqwqwciewcauaso:
        return $oikyogsosqcyueay;
        goto wmesugyccceqgekg;
        aakioaiukcgicqma:
        soqwgawucoyckiso:
        goto ysqwqwciewcauaso;
        csmewseacwwiskqi:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto kqcqgmsgiggceyss;
        kqcqgmsgiggceyss:
        if (!$oikyogsosqcyueay) {
            goto soqwgawucoyckiso;
        }
        goto qcggaygooaigauwu;
        qcggaygooaigauwu:
        $oikyogsosqcyueay = self::get($oikyogsosqcyueay);
        goto aakioaiukcgicqma;
        wmesugyccceqgekg:
    }
    
    public static function eokiwumgqmymgyoa()
    {
        return DecoratorOption::get("\160\141\147\145\x5f\146\157\162\x5f\x70\157\163\164\x73");
    }
    
    public static function icikwuksyiceccmo()
    {
        goto iyiwiyiuaagacugy;
        iakcwkiqcswmeygo:
        iimquseysaiomgas:
        goto miqyaiywugkkgwie;
        ywigmmoegqeggysg:
        $aaokuekaimigoyue = self::aqcogscycyycgkuq($oikyogsosqcyueay);
        goto iakcwkiqcswmeygo;
        iyiwiyiuaagacugy:
        $oikyogsosqcyueay = self::cykwscocqwykiocm();
        goto ygosgmiiugiiscsu;
        ygosgmiiugiiscsu:
        $aaokuekaimigoyue = "\142\x6c\157\x67";
        goto msyoyikcumueukue;
        msyoyikcumueukue:
        if (!$oikyogsosqcyueay instanceof WP_Post) {
            goto iimquseysaiomgas;
        }
        goto ywigmmoegqeggysg;
        miqyaiywugkkgwie:
        return $aaokuekaimigoyue;
        goto ggsuykssmeuwgmee;
        ggsuykssmeuwgmee:
    }
    
    public static function oigaewqgekgugqug()
    {
        return DecoratorOption::get("\160\x61\x67\145\x5f\x6f\x6e\x5f\x66\x72\x6f\x6e\164");
    }
    
    public static function awgkmqkqkqawmqcu() : bool
    {
        goto iyywoeosyegimygc;
        wuiwysygcwqscigy:
        return $syuuigcamkiegaqy === "\x77\x70\x2d\x6c\x6f\147\151\x6e\x2e\160\150\x70" || in_array($aiamqeawckcsuaou, ["\162\160", "\x6c\x6f\163\x74\x70\x61\x73\163\x77\157\162\144", "\x72\x65\147\x69\x73\x74\x65\x72"]);
        goto ewmaqwoqyggwucag;
        iyywoeosyegimygc:
        $aiamqeawckcsuaou = ManipulateServer::get("\x61\x63\x74\x69\x6f\x6e");
        goto yiyigymygeeowoms;
        yiyigymygeeowoms:
        $syuuigcamkiegaqy = ManipulateServer::oymwkcegiigooaqm("\x70\x61\x67\145\156\157\x77");
        goto wuiwysygcwqscigy;
        ewmaqwoqyggwucag:
    }
    
    public static function symuoymymumgwkaw()
    {
        goto wiwykgmceuaoeqks;
        mgocwmsiykiigeme:
        if (!$oikyogsosqcyueay) {
            goto sqykqekmsogswkog;
        }
        goto maqseauogscyeogw;
        wiwykgmceuaoeqks:
        $migiiksoiymissge = null;
        goto weaaqgwewmkwwciw;
        weaaqgwewmkwwciw:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto mgocwmsiykiigeme;
        maqseauogscyeogw:
        $migiiksoiymissge = self::ycqquoiyyuesegsy($oikyogsosqcyueay);
        goto suaggqsigckogyek;
        suaggqsigckogyek:
        sqykqekmsogswkog:
        goto iekwekemogoyomuk;
        iekwekemogoyomuk:
        return $migiiksoiymissge;
        goto ayqomgiesquiieke;
        ayqomgiesquiieke:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        goto rguugekykscwiaca;
        aqimseoockakwaek:
        qyewgcsqgmyaocco:
        goto imumuuckgaiyaqou;
        iuewwmweyqcmyoku:
        goto myiqqkogcqekgqiq;
        goto cyioiakwwqmokgye;
        omcgwcaewggkyekk:
        goto myiqqkogcqekgqiq;
        goto qyeogkiaggyykewa;
        ueaayiqayygcgoqi:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto akyoausyiwisayoe;
        }
        goto msamwsmoqyooagqs;
        eswcmcmguawawsya:
        $meqocwsecsywiiqs = $useksmwkuswkwcqg->label;
        goto ouqkcsiuwymsyyac;
        caegckokkmueeags:
        $meqocwsecsywiiqs = DecoratorPost::syeuyeikogukksam();
        goto igocqgwwyscegcoo;
        sgywygyawgwgcisg:
        return $meqocwsecsywiiqs;
        goto esegymsakukwacyq;
        qwigokiuwsgywmqe:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco(self::cykwscocqwykiocm());
        goto omcgwcaewggkyekk;
        imumuuckgaiyaqou:
        $meqocwsecsywiiqs = get_bloginfo("\x6e\141\155\x65");
        goto iaaeukgwkeyewuwk;
        ssauiqekekegaucy:
        sykeuqwqugkeigig:
        goto sgywygyawgwgcisg;
        ouqkcsiuwymsyyac:
        okssskeakmywwwii:
        goto iuewwmweyqcmyoku;
        cyioiakwwqmokgye:
        akyoausyiwisayoe:
        goto caegckokkmueeags;
        wuikyqcaoeiggqmq:
        $useksmwkuswkwcqg = self::waaisqccqacqeium();
        goto ismcqqkiosumseue;
        rguugekykscwiaca:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco($post);
        goto iosaeiaommgcgsyq;
        qmowaeuskymgicac:
        if (self::okiaumcqquyioqcy()) {
            goto ccyuokyeykkmwqkc;
        }
        goto qsceaisugocqyckq;
        qsceaisugocqyckq:
        if (DecoratorQuery::moegwqkekcawsggs()) {
            goto yokwocmaaycmkkao;
        }
        goto ueaayiqayygcgoqi;
        agekuuacwqkmswoi:
        ccyuokyeykkmwqkc:
        goto qwigokiuwsgywmqe;
        iaaeukgwkeyewuwk:
        goto myiqqkogcqekgqiq;
        goto agekuuacwqkmswoi;
        waeeskqmeqwiyysa:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto qyewgcsqgmyaocco;
        }
        goto qmowaeuskymgicac;
        igocqgwwyscegcoo:
        myiqqkogcqekgqiq:
        goto ssauiqekekegaucy;
        qyeogkiaggyykewa:
        yokwocmaaycmkkao:
        goto wuikyqcaoeiggqmq;
        iosaeiaommgcgsyq:
        if ($post) {
            goto sykeuqwqugkeigig;
        }
        goto waeeskqmeqwiyysa;
        msamwsmoqyooagqs:
        goto myiqqkogcqekgqiq;
        goto aqimseoockakwaek;
        ismcqqkiosumseue:
        if (!$useksmwkuswkwcqg) {
            goto okssskeakmywwwii;
        }
        goto eswcmcmguawawsya;
        esegymsakukwacyq:
    }
    
    public static function somwagieycgkcyec()
    {
        return self::ycqquoiyyuesegsy(self::oigaewqgekgugqug());
    }
    
    public static function iqoacwuiemooiysg() : PageInfo
    {
        goto ocqgosucokgqukws;
        eqmimgekqkqqmcca:
        if (is_day()) {
            goto uweemmwsoqkmekwy;
        }
        goto emeayeegwmicuiqq;
        igguimucuuyekecy:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\x74\x61\147\x5f\151\x64"), "\160\157\x73\164\x5f\x74\x61\147"))->ugaqcouwcuiaemgo("\x74\x61\x78\157\156\x6f\x6d\171")->aseocggwwegcmqes("\x74\x61\147");
        goto ugoueuoakwywqsos;
        sikagsogeweqwqwe:
        goto iwoisseyosimeiwg;
        goto amwoyceicgucwuca;
        uamaycseqskcgogs:
        $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig);
        goto yukqeyeyuucieqga;
        ueikewqggcwskseu:
        goto iwoisseyosimeiwg;
        goto ciwcueuqsueyeyeu;
        wcywgsiukiucoyau:
        $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\x34\60\64");
        goto iamagkcimokqwswc;
        gguiymqokicqscom:
        uweemmwsoqkmekwy:
        goto smewgosmeuaqukya;
        qygawwowocwskuqu:
        if (is_page()) {
            goto gkmiagqgacyogaoy;
        }
        goto gyauiikaoigoeyyq;
        mkkeagwoaksoqsii:
        qycwewyaymciuaow:
        goto uaaouwkcigacguou;
        uecagaicwccecikw:
        if (is_tag()) {
            goto aaaquaiiomywcyie;
        }
        goto cyggoamqmaisueam;
        ciwcueuqsueyeyeu:
        gkmiagqgacyogaoy:
        goto ooasiqaamqsiuqio;
        muywyiaqscwgmeoi:
        if (is_category()) {
            goto uggycmgqqyqeacas;
        }
        goto uecagaicwccecikw;
        squouqwsoywkecwy:
        goto iwoisseyosimeiwg;
        goto mkkeagwoaksoqsii;
        ooasiqaamqsiuqio:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x70\x61\x67\145");
        goto uyqmicaayqwwommo;
        uaaouwkcigacguou:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($mksyucucyswaukig, true);
        goto iiqwggyqyekwkako;
        uaokcgsoaemmiqou:
        aaaquaiiomywcyie:
        goto igguimucuuyekecy;
        kiecqswmwgwmackc:
        if (is_month()) {
            goto wcaysaykacysmkue;
        }
        goto eqmimgekqkqqmcca;
        iiqwggyqyekwkako:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::mqgeysameoesmuqw($useksmwkuswkwcqg->name))->ugaqcouwcuiaemgo("\160\157\x73\x74\137\164\x79\x70\145")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto kckcsuuiykyaawke;
        acmaoyccqewmweaw:
        wekaickwcioowesg:
        goto kuacwismecyuequy;
        wakwyywuumiqsmsi:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::symuoymymumgwkaw())->ugaqcouwcuiaemgo("\x68\157\155\145");
        goto sikagsogeweqwqwe;
        agewogomsgsaeiss:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::somwagieycgkcyec())->ugaqcouwcuiaemgo("\x66\x72\157\156\164\137\x70\141\x67\x65");
        goto omoeomgwkeyyuews;
        ugoueuoakwywqsos:
        goto iwoisseyosimeiwg;
        goto wmyewgwkuyyswgge;
        myccssugyykigeie:
        goto iwoisseyosimeiwg;
        goto mwcaeiokmsaacsac;
        suswiwiacoeosiuu:
        if (self::sqyyemqmmgmyiaam()) {
            goto qycwewyaymciuaow;
        }
        goto gywgyugckkqscaao;
        scioseuqqegcycuu:
        osieesqoygmqkski:
        goto egoewmaccsammqkc;
        auymguqowwoccwiq:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\131")))->ugaqcouwcuiaemgo("\171\145\x61\162");
        goto uwwkacwywyygyomc;
        uaeuiiegyuoocksu:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo("\x61\165\164\150\x6f\162");
        goto aqqemqcsowckquqa;
        ecacgamqsegoqaug:
        if (is_search()) {
            goto wekaickwcioowesg;
        }
        goto ymsugasumawwwgka;
        yukqeyeyuucieqga:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo("\x74\141\x78\157\156\157\x6d\x79")->aseocggwwegcmqes($kesssewsiegssiya);
        goto eckqskkgosseskmc;
        uaqieigykmeagcoi:
        koccukqciscmgeuo:
        goto auymguqowwoccwiq;
        mcuamuokmoskmwky:
        $yyimiwcuegayoskq = new PageInfo();
        goto omyiaeqssiowmeyq;
        eyqugyuuucmscwqg:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\x59"), get_the_time("\106")))->ugaqcouwcuiaemgo("\155\x6f\156\x74\150");
        goto ciqusemcegueoegm;
        wmyewgwkuyyswgge:
        akuwqeaouicqskgu:
        goto uamaycseqskcgogs;
        ciqusemcegueoegm:
        goto iwoisseyosimeiwg;
        goto gguiymqokicqscom;
        ckgqqiewiuyycyee:
        wcaysaykacysmkue:
        goto eyqugyuuucmscwqg;
        oqssaoscmiskagum:
        goto iwoisseyosimeiwg;
        goto ukkegcmwcuymceua;
        ocqgosucokgqukws:
        $mksyucucyswaukig = get_queried_object();
        goto mcuamuokmoskmwky;
        cyggoamqmaisueam:
        if (is_tax()) {
            goto akuwqeaouicqskgu;
        }
        goto ecacgamqsegoqaug;
        qouscuqwwookaiea:
        goto iwoisseyosimeiwg;
        goto uaokcgsoaemmiqou;
        gyauiikaoigoeyyq:
        if (DecoratorQuery::aauyuieeeaakygki()) {
            goto osieesqoygmqkski;
        }
        goto suswiwiacoeosiuu;
        ukkegcmwcuymceua:
        guyscyosaqwiaaoc:
        goto qkiqgucaomigsesq;
        muaoymyciyauqiae:
        $yyimiwcuegayoskq->cggwsuueqwqscgei(is_paged());
        goto uyqqcioceqguesgw;
        smewgosmeuaqukya:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\131"), get_the_time("\x46"), get_the_time("\144")))->ugaqcouwcuiaemgo("\x64\x61\x79");
        goto oqssaoscmiskagum;
        egoewmaccsammqkc:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAttachment::qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x61\x74\164\x61\143\x68\155\145\156\164");
        goto squouqwsoywkecwy;
        emeayeegwmicuiqq:
        if (is_author()) {
            goto guyscyosaqwiaaoc;
        }
        goto iggeguwkkemeoksm;
        uwwkacwywyygyomc:
        goto iwoisseyosimeiwg;
        goto ckgqqiewiuyycyee;
        omyiaeqssiowmeyq:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto scgayeiigokkyksu;
        }
        goto qugqcmywiswaoigo;
        gywgyugckkqscaao:
        if (is_404()) {
            goto egkuaomeucwoggsm;
        }
        goto ogygmqoisqiasisc;
        qugqcmywiswaoigo:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto uioiawwiiuaycmqi;
        }
        goto muywyiaqscwgmeoi;
        aqqemqcsowckquqa:
        goto iwoisseyosimeiwg;
        goto ewauqkmweawmkgas;
        uyqmicaayqwwommo:
        goto iwoisseyosimeiwg;
        goto scioseuqqegcycuu;
        wscyocimqesyaqeu:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x73\151\x6e\147\154\145")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto ueikewqggcwskseu;
        mwcaeiokmsaacsac:
        scgayeiigokkyksu:
        goto agewogomsgsaeiss;
        uyqqcioceqguesgw:
        return $yyimiwcuegayoskq;
        goto mqukeuyogggewmmu;
        eckqskkgosseskmc:
        goto iwoisseyosimeiwg;
        goto acmaoyccqewmweaw;
        iggeguwkkemeoksm:
        if (is_single() && !DecoratorQuery::aauyuieeeaakygki()) {
            goto wsguekmucgeaocgu;
        }
        goto qygawwowocwskuqu;
        mmeuuskqmmyaesga:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\143\x61\164"), "\x63\141\164\x65\147\x6f\162\x79"))->ugaqcouwcuiaemgo("\164\x61\x78\x6f\x6e\x6f\155\x79")->aseocggwwegcmqes("\143\x61\164\x65\x67\157\162\171");
        goto qouscuqwwookaiea;
        ewauqkmweawmkgas:
        wsguekmucgeaocgu:
        goto wscyocimqesyaqeu;
        ymsugasumawwwgka:
        if (is_year()) {
            goto koccukqciscmgeuo;
        }
        goto kiecqswmwgwmackc;
        iamagkcimokqwswc:
        iwoisseyosimeiwg:
        goto muaoymyciyauqiae;
        ogygmqoisqiasisc:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateServer::ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\x75\156\x6b\156\x6f\167\x6e");
        goto myccssugyykigeie;
        qcoagmaceeioumey:
        goto iwoisseyosimeiwg;
        goto uaqieigykmeagcoi;
        uswqukaouqwuocik:
        uioiawwiiuaycmqi:
        goto wakwyywuumiqsmsi;
        kckcsuuiykyaawke:
        goto iwoisseyosimeiwg;
        goto egcakiyaioiqacsg;
        kuacwismecyuequy:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_search_query())->ugaqcouwcuiaemgo("\163\x65\141\x72\x63\150");
        goto qcoagmaceeioumey;
        omoeomgwkeyyuews:
        goto iwoisseyosimeiwg;
        goto uswqukaouqwuocik;
        qkiqgucaomigsesq:
        $qscaoekmoooeuyqg = ManipulateUser::get(get_query_var("\141\x75\x74\x68\157\x72"), true);
        goto uaeuiiegyuoocksu;
        egcakiyaioiqacsg:
        egkuaomeucwoggsm:
        goto wcywgsiukiucoyau;
        amwoyceicgucwuca:
        uggycmgqqyqeacas:
        goto mmeuuskqmmyaesga;
        mqukeuyogggewmmu:
    }
    
    public static function ycqquoiyyuesegsy($post = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto ooisukscqugmceuy;
        ssmawuwisimwmqsa:
        amkyoauqecoimiau:
        goto gqacwwimmmoswagw;
        amaqgiegqwsmcqak:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto ogqgmqiweiwqeyck;
        }
        goto wwockyuqacckgmkm;
        qqgmsukugueeaesq:
        oskmiqqwqkuyugqq:
        goto acqyyksaoeeomiia;
        gmgomyaaquiiekcg:
        goto taqemmwguqueqemw;
        goto gkoeukkaesoaseqg;
        gkcqguoasqokuaug:
        goto taqemmwguqueqemw;
        goto uagqceymsywggcgs;
        gqacwwimmmoswagw:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto gmgomyaaquiiekcg;
        gkoeukkaesoaseqg:
        uueakweiqiqqukes:
        goto emmwgomqmskywumg;
        oaeqccuiuqwqomeg:
        goto taqemmwguqueqemw;
        goto ssmawuwisimwmqsa;
        qesiqimsweuqacgc:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto uueakweiqiqqukes;
        }
        goto amaqgiegqwsmcqak;
        wmysaywgeqwcaims:
        $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($wp->request);
        goto cqomyeiacimqacuw;
        myoocyaewqimqeui:
        return trailingslashit($migiiksoiymissge);
        goto saimqwoekaggasik;
        wwockyuqacckgmkm:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto oskmiqqwqkuyugqq;
        }
        goto kkwammqmykqmseky;
        emmwgomqmskywumg:
        $migiiksoiymissge = ManipulateServer::auksikwsewaywikq();
        goto gkcqguoasqokuaug;
        cqomyeiacimqacuw:
        taqemmwguqueqemw:
        goto myoocyaewqimqeui;
        waeweckgowcciukq:
        if ($post) {
            goto amkyoauqecoimiau;
        }
        goto qesiqimsweuqacgc;
        ceacseyocykwqyyw:
        goto taqemmwguqueqemw;
        goto qqgmsukugueeaesq;
        omysmgiqyswuigkq:
        $migiiksoiymissge = self::symuoymymumgwkaw();
        goto ceacseyocykwqyyw;
        uagqceymsywggcgs:
        ogqgmqiweiwqeyck:
        goto omysmgiqyswuigkq;
        ooisukscqugmceuy:
        $migiiksoiymissge = null;
        goto waeweckgowcciukq;
        acqyyksaoeeomiia:
        global $wp;
        goto wmysaywgeqwcaims;
        kkwammqmykqmseky:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto oaeqccuiuqwqomeg;
        saimqwoekaggasik:
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto eaeciuwyqckwomio;
        mcoegugoeeuowgkq:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::oigaewqgekgugqug(), $gioggcykgoikcwiy);
        goto saaeyiqggocsqici;
        sguwkgiguoscuowe:
        goto kyqwosmmiuemmkug;
        goto qweguymgasscgmec;
        giimkwieukqwesyc:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto mcuwmuamkysmycuq;
        ogaykeacicqmowss:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto eoyikamgogkskgao;
        }
        goto gyuwiiamkaoiqoyg;
        qkcyoowaicaciwcg:
        goto kyqwosmmiuemmkug;
        goto aisysqymsawuomqo;
        gwoqcyqoguaykmae:
        yqgcksakiqqsuqec:
        goto sguwkgiguoscuowe;
        twmiwuiakgeomosm:
        $sqeykgyoooqysmca = self::waaisqccqacqeium();
        goto koqmmigmqsawcqci;
        oeuecmgcqammueiw:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto igeaueoqcuacaims;
        }
        goto isuykcgsgyyqogeq;
        maowyiwmuococgku:
        goto kyqwosmmiuemmkug;
        goto aismaqwymeosqoyq;
        ciqqmaiawkmiwgmy:
        kyqwosmmiuemmkug:
        goto ykuaoqecgmioscey;
        eaeciuwyqckwomio:
        $iayakwckycsumkqa = null;
        goto kcsmyiqgeukocugm;
        ocsmamaueksquiau:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::cykwscocqwykiocm(), $gioggcykgoikcwiy);
        goto maowyiwmuococgku;
        qweguymgasscgmec:
        igeaueoqcuacaims:
        goto gkiskesiwecgcuyo;
        ikmkcieiyggeokam:
        eoyikamgogkskgao:
        goto mcoegugoeeuowgkq;
        kcsmyiqgeukocugm:
        if ($post) {
            goto ugmkgeamwiemieag;
        }
        goto ogaykeacicqmowss;
        saaeyiqggocsqici:
        goto kyqwosmmiuemmkug;
        goto meyokciwwsksmykm;
        aismaqwymeosqoyq:
        jycseygmyuiggacq:
        goto twmiwuiakgeomosm;
        ewimgmyosqwoeawa:
        if (self::sqyyemqmmgmyiaam()) {
            goto jycseygmyuiggacq;
        }
        goto oeuecmgcqammueiw;
        gyuwiiamkaoiqoyg:
        if (self::okiaumcqquyioqcy()) {
            goto ksimceecsmqscemk;
        }
        goto ewimgmyosqwoeawa;
        meyokciwwsksmykm:
        ksimceecsmqscemk:
        goto ocsmamaueksquiau;
        isuykcgsgyyqogeq:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto qkcyoowaicaciwcg;
        mcuwmuamkysmycuq:
        goto kyqwosmmiuemmkug;
        goto ikmkcieiyggeokam;
        ykuaoqecgmioscey:
        return $iayakwckycsumkqa;
        goto qmyawqywcoawoeim;
        aisysqymsawuomqo:
        ugmkgeamwiemieag:
        goto giimkwieukqwesyc;
        koqmmigmqsawcqci:
        if (!$sqeykgyoooqysmca) {
            goto yqgcksakiqqsuqec;
        }
        goto reuuqqqwucksmwwo;
        reuuqqqwucksmwwo:
        $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export;
        goto gwoqcyqoguaykmae;
        gkiskesiwecgcuyo:
        $iayakwckycsumkqa = DecoratorPost::wieoiwogwmcwukom();
        goto ciqqmaiawkmiwgmy;
        qmyawqywcoawoeim:
    }
    
    public static function agegeeiiacceomke($aaokuekaimigoyue, $meqocwsecsywiiqs, $omkysikckkcieckq = null, $ywmkwiwkosakssii = [])
    {
        goto iwwsckgkuyykggwm;
        eqsoeagckkeueyoy:
        DecoratorOption::update($omkysikckkcieckq, $suaemuyiacqyugsm);
        goto qewioskiigymoaae;
        saqyqgeqayiqykao:
        $mksyucucyswaukig = self::get($suaemuyiacqyugsm);
        goto gauuayyuaimeqgms;
        qewioskiigymoaae:
        qiagkoiassqawesu:
        goto uscqgqwkeqmmeqay;
        koycomwmwaigmeim:
        if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) {
            goto imqeiaoiomcusmys;
        }
        goto kiewsmqeekaymgeo;
        wmqcsqscwmkocacm:
        if (!$suaemuyiacqyugsm) {
            goto iygyaykccksksmka;
        }
        goto saqyqgeqayiqykao;
        nisqcoeqcgqqqaai:
        if ($suaemuyiacqyugsm) {
            goto igikiyqycooasgey;
        }
        goto gekgyswocciysksa;
        gauuayyuaimeqgms:
        iygyaykccksksmka:
        goto koycomwmwaigmeim;
        wgqeiquyekoaaiqs:
        if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) {
            goto qiagkoiassqawesu;
        }
        goto eqsoeagckkeueyoy;
        kiewsmqeekaymgeo:
        $suaemuyiacqyugsm = DecoratorPost::qamwegcyimgcqksw($aaokuekaimigoyue, "\160\x61\x67\145");
        goto seygmewkwgggmgqa;
        qwkmscimkwuuqkyy:
        imqeiaoiomcusmys:
        goto nisqcoeqcgqqqaai;
        seygmewkwgggmgqa:
        DecoratorOption::update($omkysikckkcieckq, self::mwikyscisascoeea($suaemuyiacqyugsm));
        goto qwkmscimkwuuqkyy;
        gekgyswocciysksa:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\157\163\x74\x5f\164\x69\x74\x6c\145" => $meqocwsecsywiiqs, "\160\x6f\x73\164\137\156\141\x6d\145" => $aaokuekaimigoyue, "\x70\157\163\x74\137\163\x74\x61\164\165\163" => "\x70\x75\x62\x6c\151\x73\150"]);
        goto sywsuomwieouwayw;
        sywsuomwieouwayw:
        $suaemuyiacqyugsm = self::insert("\x70\x61\x67\145", $ywmkwiwkosakssii);
        goto wgqeiquyekoaaiqs;
        mswykgiqgmcugqes:
        $mksyucucyswaukig = null;
        goto wmqcsqscwmkocacm;
        iwwsckgkuyykggwm:
        $suaemuyiacqyugsm = DecoratorOption::get($omkysikckkcieckq);
        goto mswykgiqgmcugqes;
        aeamuikiyeskkkee:
        igikiyqycooasgey:
        goto wiuuqwgymuyoiciu;
        uscqgqwkeqmmeqay:
        flush_rewrite_rules(false);
        goto aeamuikiyeskkkee;
        wiuuqwgymuyoiciu:
    }
    
    public static function ssacaeeassumyuws(?string $migiiksoiymissge = null, $aqykuigiuwmmcieu = self::OBJECT, $useksmwkuswkwcqg = "\160\x61\x67\x65")
    {
        goto wyowoaggksqmaums;
        iewmgooekimcooem:
        $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc();
        goto awomwemokoaommck;
        awomwemokoaommck:
        iuuekasywyywqcmy:
        goto msykyyqmmqsyqmkg;
        wyowoaggksqmaums:
        if ($migiiksoiymissge) {
            goto iuuekasywyywqcmy;
        }
        goto iewmgooekimcooem;
        wcimeswkkmqyaqoa:
        return DecoratorPost::qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu);
        goto ggogugoaicomuice;
        msykyyqmmqsyqmkg:
        $mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH);
        goto wcimeswkkmqyaqoa;
        ggogugoaicomuice:
    }
}

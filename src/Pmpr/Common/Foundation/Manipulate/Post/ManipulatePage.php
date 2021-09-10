<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        soqwgawucoyckiso:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto csmewseacwwiskqi;
        kqcqgmsgiggceyss:
        $oikyogsosqcyueay = self::get($oikyogsosqcyueay);
        goto qcggaygooaigauwu;
        csmewseacwwiskqi:
        if (!$oikyogsosqcyueay) {
            goto sogsyogucsmisoau;
        }
        goto kqcqgmsgiggceyss;
        qcggaygooaigauwu:
        sogsyogucsmisoau:
        goto aakioaiukcgicqma;
        aakioaiukcgicqma:
        return $oikyogsosqcyueay;
        goto ysqwqwciewcauaso;
        ysqwqwciewcauaso:
    }
    
    public static function eokiwumgqmymgyoa()
    {
        return DecoratorOption::get("\x70\141\147\145\137\x66\157\x72\137\x70\x6f\x73\x74\x73");
    }
    
    public static function icikwuksyiceccmo()
    {
        goto iimquseysaiomgas;
        iimquseysaiomgas:
        $oikyogsosqcyueay = self::cykwscocqwykiocm();
        goto iyiwiyiuaagacugy;
        ygosgmiiugiiscsu:
        if (!$oikyogsosqcyueay instanceof WP_Post) {
            goto wmesugyccceqgekg;
        }
        goto msyoyikcumueukue;
        ywigmmoegqeggysg:
        wmesugyccceqgekg:
        goto iakcwkiqcswmeygo;
        msyoyikcumueukue:
        $aaokuekaimigoyue = self::aqcogscycyycgkuq($oikyogsosqcyueay);
        goto ywigmmoegqeggysg;
        iyiwiyiuaagacugy:
        $aaokuekaimigoyue = "\142\154\157\147";
        goto ygosgmiiugiiscsu;
        iakcwkiqcswmeygo:
        return $aaokuekaimigoyue;
        goto miqyaiywugkkgwie;
        miqyaiywugkkgwie:
    }
    
    public static function oigaewqgekgugqug()
    {
        return DecoratorOption::get("\x70\141\147\145\x5f\x6f\x6e\x5f\x66\x72\x6f\x6e\x74");
    }
    
    public static function awgkmqkqkqawmqcu() : bool
    {
        goto ggsuykssmeuwgmee;
        yiyigymygeeowoms:
        return $syuuigcamkiegaqy === "\167\160\x2d\x6c\157\147\x69\156\x2e\x70\150\x70" || in_array($aiamqeawckcsuaou, ["\x72\x70", "\x6c\x6f\163\164\x70\x61\163\163\x77\x6f\x72\144", "\x72\145\x67\x69\x73\x74\145\162"]);
        goto wuiwysygcwqscigy;
        ggsuykssmeuwgmee:
        $aiamqeawckcsuaou = ManipulateServer::get("\141\143\164\x69\x6f\x6e");
        goto iyywoeosyegimygc;
        iyywoeosyegimygc:
        $syuuigcamkiegaqy = ManipulateServer::oymwkcegiigooaqm("\x70\141\x67\145\x6e\x6f\x77");
        goto yiyigymygeeowoms;
        wuiwysygcwqscigy:
    }
    
    public static function symuoymymumgwkaw()
    {
        goto sqykqekmsogswkog;
        mgocwmsiykiigeme:
        $migiiksoiymissge = self::ycqquoiyyuesegsy($oikyogsosqcyueay);
        goto maqseauogscyeogw;
        sqykqekmsogswkog:
        $migiiksoiymissge = null;
        goto wiwykgmceuaoeqks;
        wiwykgmceuaoeqks:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto weaaqgwewmkwwciw;
        suaggqsigckogyek:
        return $migiiksoiymissge;
        goto iekwekemogoyomuk;
        weaaqgwewmkwwciw:
        if (!$oikyogsosqcyueay) {
            goto ewmaqwoqyggwucag;
        }
        goto mgocwmsiykiigeme;
        maqseauogscyeogw:
        ewmaqwoqyggwucag:
        goto suaggqsigckogyek;
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
        imumuuckgaiyaqou:
        goto okssskeakmywwwii;
        goto iaaeukgwkeyewuwk;
        qyeogkiaggyykewa:
        $useksmwkuswkwcqg = self::waaisqccqacqeium();
        goto wuikyqcaoeiggqmq;
        caegckokkmueeags:
        okssskeakmywwwii:
        goto igocqgwwyscegcoo;
        aqimseoockakwaek:
        $meqocwsecsywiiqs = get_bloginfo("\x6e\141\x6d\x65");
        goto imumuuckgaiyaqou;
        wuikyqcaoeiggqmq:
        if (!$useksmwkuswkwcqg) {
            goto ayqomgiesquiieke;
        }
        goto ismcqqkiosumseue;
        qsceaisugocqyckq:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto yokwocmaaycmkkao;
        }
        goto ueaayiqayygcgoqi;
        cyioiakwwqmokgye:
        $meqocwsecsywiiqs = DecoratorPost::syeuyeikogukksam();
        goto caegckokkmueeags;
        iosaeiaommgcgsyq:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto myiqqkogcqekgqiq;
        }
        goto waeeskqmeqwiyysa;
        ueaayiqayygcgoqi:
        goto okssskeakmywwwii;
        goto msamwsmoqyooagqs;
        rguugekykscwiaca:
        if ($post) {
            goto akyoausyiwisayoe;
        }
        goto iosaeiaommgcgsyq;
        eswcmcmguawawsya:
        ayqomgiesquiieke:
        goto ouqkcsiuwymsyyac;
        iuewwmweyqcmyoku:
        yokwocmaaycmkkao:
        goto cyioiakwwqmokgye;
        ssauiqekekegaucy:
        return $meqocwsecsywiiqs;
        goto sgywygyawgwgcisg;
        ismcqqkiosumseue:
        $meqocwsecsywiiqs = $useksmwkuswkwcqg->label;
        goto eswcmcmguawawsya;
        agekuuacwqkmswoi:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco(self::cykwscocqwykiocm());
        goto qwigokiuwsgywmqe;
        igocqgwwyscegcoo:
        akyoausyiwisayoe:
        goto ssauiqekekegaucy;
        waeeskqmeqwiyysa:
        if (self::okiaumcqquyioqcy()) {
            goto qyewgcsqgmyaocco;
        }
        goto qmowaeuskymgicac;
        msamwsmoqyooagqs:
        myiqqkogcqekgqiq:
        goto aqimseoockakwaek;
        ouqkcsiuwymsyyac:
        goto okssskeakmywwwii;
        goto iuewwmweyqcmyoku;
        omcgwcaewggkyekk:
        ccyuokyeykkmwqkc:
        goto qyeogkiaggyykewa;
        iaaeukgwkeyewuwk:
        qyewgcsqgmyaocco:
        goto agekuuacwqkmswoi;
        sykeuqwqugkeigig:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco($post);
        goto rguugekykscwiaca;
        qwigokiuwsgywmqe:
        goto okssskeakmywwwii;
        goto omcgwcaewggkyekk;
        sgywygyawgwgcisg:
    }
    
    public static function somwagieycgkcyec()
    {
        return self::ycqquoiyyuesegsy(self::oigaewqgekgugqug());
    }
    
    public static function iqoacwuiemooiysg() : PageInfo
    {
        goto egkuaomeucwoggsm;
        ocqgosucokgqukws:
        $yyimiwcuegayoskq = new PageInfo();
        goto mcuamuokmoskmwky;
        uecagaicwccecikw:
        if (is_tax()) {
            goto aaaquaiiomywcyie;
        }
        goto cyggoamqmaisueam;
        qkiqgucaomigsesq:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo("\141\x75\164\x68\x6f\x72");
        goto uaeuiiegyuoocksu;
        auymguqowwoccwiq:
        goto esegymsakukwacyq;
        goto uwwkacwywyygyomc;
        mkkeagwoaksoqsii:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($mksyucucyswaukig, true);
        goto uaaouwkcigacguou;
        ooasiqaamqsiuqio:
        goto esegymsakukwacyq;
        goto uyqmicaayqwwommo;
        uaqieigykmeagcoi:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\x59")))->ugaqcouwcuiaemgo("\171\145\141\162");
        goto auymguqowwoccwiq;
        iamagkcimokqwswc:
        $yyimiwcuegayoskq->cggwsuueqwqscgei(is_paged());
        goto muaoymyciyauqiae;
        scioseuqqegcycuu:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAttachment::qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo("\141\x74\x74\141\x63\x68\x6d\145\156\164");
        goto egoewmaccsammqkc;
        acmaoyccqewmweaw:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_search_query())->ugaqcouwcuiaemgo("\163\x65\141\x72\143\150");
        goto kuacwismecyuequy;
        egoewmaccsammqkc:
        goto esegymsakukwacyq;
        goto squouqwsoywkecwy;
        ckgqqiewiuyycyee:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\131"), get_the_time("\106")))->ugaqcouwcuiaemgo("\x6d\157\156\x74\x68");
        goto eyqugyuuucmscwqg;
        ewauqkmweawmkgas:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x73\x69\x6e\147\154\145")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto wscyocimqesyaqeu;
        yukqeyeyuucieqga:
        goto esegymsakukwacyq;
        goto eckqskkgosseskmc;
        qugqcmywiswaoigo:
        if (is_category()) {
            goto uioiawwiiuaycmqi;
        }
        goto muywyiaqscwgmeoi;
        uwwkacwywyygyomc:
        koccukqciscmgeuo:
        goto ckgqqiewiuyycyee;
        omyiaeqssiowmeyq:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto scgayeiigokkyksu;
        }
        goto qugqcmywiswaoigo;
        amwoyceicgucwuca:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\143\x61\x74"), "\143\141\164\x65\x67\157\x72\171"))->ugaqcouwcuiaemgo("\164\x61\170\x6f\156\x6f\x6d\x79")->aseocggwwegcmqes("\x63\141\164\145\147\157\x72\171");
        goto mmeuuskqmmyaesga;
        wscyocimqesyaqeu:
        goto esegymsakukwacyq;
        goto ueikewqggcwskseu;
        ukkegcmwcuymceua:
        $qscaoekmoooeuyqg = ManipulateUser::get(get_query_var("\x61\x75\164\150\157\162"), true);
        goto qkiqgucaomigsesq;
        oqssaoscmiskagum:
        uweemmwsoqkmekwy:
        goto ukkegcmwcuymceua;
        wcywgsiukiucoyau:
        esegymsakukwacyq:
        goto iamagkcimokqwswc;
        mcuamuokmoskmwky:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto iwoisseyosimeiwg;
        }
        goto omyiaeqssiowmeyq;
        wakwyywuumiqsmsi:
        goto esegymsakukwacyq;
        goto sikagsogeweqwqwe;
        gywgyugckkqscaao:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateServer::ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\x75\x6e\x6b\x6e\157\167\x6e");
        goto ogygmqoisqiasisc;
        uaeuiiegyuoocksu:
        goto esegymsakukwacyq;
        goto aqqemqcsowckquqa;
        ecacgamqsegoqaug:
        if (is_year()) {
            goto wekaickwcioowesg;
        }
        goto ymsugasumawwwgka;
        ymsugasumawwwgka:
        if (is_month()) {
            goto koccukqciscmgeuo;
        }
        goto kiecqswmwgwmackc;
        ueikewqggcwskseu:
        wsguekmucgeaocgu:
        goto ciwcueuqsueyeyeu;
        iggeguwkkemeoksm:
        if (is_page()) {
            goto wsguekmucgeaocgu;
        }
        goto qygawwowocwskuqu;
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
        aqqemqcsowckquqa:
        guyscyosaqwiaaoc:
        goto ewauqkmweawmkgas;
        iiqwggyqyekwkako:
        goto esegymsakukwacyq;
        goto kckcsuuiykyaawke;
        mmeuuskqmmyaesga:
        goto esegymsakukwacyq;
        goto qouscuqwwookaiea;
        smewgosmeuaqukya:
        goto esegymsakukwacyq;
        goto oqssaoscmiskagum;
        myccssugyykigeie:
        iwoisseyosimeiwg:
        goto mwcaeiokmsaacsac;
        gyauiikaoigoeyyq:
        if (self::sqyyemqmmgmyiaam()) {
            goto osieesqoygmqkski;
        }
        goto suswiwiacoeosiuu;
        uswqukaouqwuocik:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::symuoymymumgwkaw())->ugaqcouwcuiaemgo("\x68\x6f\x6d\x65");
        goto wakwyywuumiqsmsi;
        igguimucuuyekecy:
        goto esegymsakukwacyq;
        goto ugoueuoakwywqsos;
        uaokcgsoaemmiqou:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\x74\141\147\137\151\144"), "\160\x6f\163\164\137\x74\141\x67"))->ugaqcouwcuiaemgo("\164\x61\170\157\156\157\x6d\171")->aseocggwwegcmqes("\164\141\x67");
        goto igguimucuuyekecy;
        eckqskkgosseskmc:
        akuwqeaouicqskgu:
        goto acmaoyccqewmweaw;
        omoeomgwkeyyuews:
        scgayeiigokkyksu:
        goto uswqukaouqwuocik;
        gguiymqokicqscom:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\x59"), get_the_time("\106"), get_the_time("\144")))->ugaqcouwcuiaemgo("\x64\141\x79");
        goto smewgosmeuaqukya;
        qouscuqwwookaiea:
        uggycmgqqyqeacas:
        goto uaokcgsoaemmiqou;
        suswiwiacoeosiuu:
        if (is_404()) {
            goto qycwewyaymciuaow;
        }
        goto gywgyugckkqscaao;
        ugoueuoakwywqsos:
        aaaquaiiomywcyie:
        goto wmyewgwkuyyswgge;
        mwcaeiokmsaacsac:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::somwagieycgkcyec())->ugaqcouwcuiaemgo("\x66\162\157\x6e\x74\x5f\160\x61\147\x65");
        goto agewogomsgsaeiss;
        kuacwismecyuequy:
        goto esegymsakukwacyq;
        goto qcoagmaceeioumey;
        qygawwowocwskuqu:
        if (DecoratorQuery::aauyuieeeaakygki()) {
            goto gkmiagqgacyogaoy;
        }
        goto gyauiikaoigoeyyq;
        emeayeegwmicuiqq:
        if (is_single() && !DecoratorQuery::aauyuieeeaakygki()) {
            goto guyscyosaqwiaaoc;
        }
        goto iggeguwkkemeoksm;
        uamaycseqskcgogs:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo("\164\141\x78\x6f\156\x6f\155\171")->aseocggwwegcmqes($kesssewsiegssiya);
        goto yukqeyeyuucieqga;
        egcakiyaioiqacsg:
        $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\64\x30\x34");
        goto wcywgsiukiucoyau;
        uyqmicaayqwwommo:
        gkmiagqgacyogaoy:
        goto scioseuqqegcycuu;
        muaoymyciyauqiae:
        return $yyimiwcuegayoskq;
        goto uyqqcioceqguesgw;
        qcoagmaceeioumey:
        wekaickwcioowesg:
        goto uaqieigykmeagcoi;
        uaaouwkcigacguou:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::mqgeysameoesmuqw($useksmwkuswkwcqg->name))->ugaqcouwcuiaemgo("\160\157\x73\164\x5f\164\171\160\x65")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto iiqwggyqyekwkako;
        squouqwsoywkecwy:
        osieesqoygmqkski:
        goto mkkeagwoaksoqsii;
        sikagsogeweqwqwe:
        uioiawwiiuaycmqi:
        goto amwoyceicgucwuca;
        eqmimgekqkqqmcca:
        if (is_author()) {
            goto uweemmwsoqkmekwy;
        }
        goto emeayeegwmicuiqq;
        ciwcueuqsueyeyeu:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x70\141\147\x65");
        goto ooasiqaamqsiuqio;
        ogygmqoisqiasisc:
        goto esegymsakukwacyq;
        goto myccssugyykigeie;
        egkuaomeucwoggsm:
        $mksyucucyswaukig = get_queried_object();
        goto ocqgosucokgqukws;
        eyqugyuuucmscwqg:
        goto esegymsakukwacyq;
        goto ciqusemcegueoegm;
        ciqusemcegueoegm:
        wcaysaykacysmkue:
        goto gguiymqokicqscom;
        kiecqswmwgwmackc:
        if (is_day()) {
            goto wcaysaykacysmkue;
        }
        goto eqmimgekqkqqmcca;
        kckcsuuiykyaawke:
        qycwewyaymciuaow:
        goto egcakiyaioiqacsg;
        wmyewgwkuyyswgge:
        $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig);
        goto uamaycseqskcgogs;
        agewogomsgsaeiss:
        goto esegymsakukwacyq;
        goto omoeomgwkeyyuews;
        uyqqcioceqguesgw:
    }
    
    public static function ycqquoiyyuesegsy($post = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto oskmiqqwqkuyugqq;
        cqomyeiacimqacuw:
        return trailingslashit($migiiksoiymissge);
        goto myoocyaewqimqeui;
        uagqceymsywggcgs:
        $migiiksoiymissge = self::symuoymymumgwkaw();
        goto omysmgiqyswuigkq;
        acqyyksaoeeomiia:
        $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($wp->request);
        goto wmysaywgeqwcaims;
        qesiqimsweuqacgc:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto uueakweiqiqqukes;
        }
        goto amaqgiegqwsmcqak;
        qqgmsukugueeaesq:
        global $wp;
        goto acqyyksaoeeomiia;
        gkoeukkaesoaseqg:
        $migiiksoiymissge = ManipulateServer::auksikwsewaywikq();
        goto emmwgomqmskywumg;
        amaqgiegqwsmcqak:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto ogqgmqiweiwqeyck;
        }
        goto wwockyuqacckgmkm;
        oaeqccuiuqwqomeg:
        taqemmwguqueqemw:
        goto ssmawuwisimwmqsa;
        ceacseyocykwqyyw:
        ogqgmqiweiwqeyck:
        goto qqgmsukugueeaesq;
        oskmiqqwqkuyugqq:
        $migiiksoiymissge = null;
        goto ooisukscqugmceuy;
        gqacwwimmmoswagw:
        goto mqukeuyogggewmmu;
        goto gmgomyaaquiiekcg;
        ooisukscqugmceuy:
        if ($post) {
            goto taqemmwguqueqemw;
        }
        goto waeweckgowcciukq;
        gmgomyaaquiiekcg:
        amkyoauqecoimiau:
        goto gkoeukkaesoaseqg;
        kkwammqmykqmseky:
        goto mqukeuyogggewmmu;
        goto oaeqccuiuqwqomeg;
        waeweckgowcciukq:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto amkyoauqecoimiau;
        }
        goto qesiqimsweuqacgc;
        wwockyuqacckgmkm:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto kkwammqmykqmseky;
        wmysaywgeqwcaims:
        mqukeuyogggewmmu:
        goto cqomyeiacimqacuw;
        gkcqguoasqokuaug:
        uueakweiqiqqukes:
        goto uagqceymsywggcgs;
        ssmawuwisimwmqsa:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto gqacwwimmmoswagw;
        emmwgomqmskywumg:
        goto mqukeuyogggewmmu;
        goto gkcqguoasqokuaug;
        omysmgiqyswuigkq:
        goto mqukeuyogggewmmu;
        goto ceacseyocykwqyyw;
        myoocyaewqimqeui:
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto igeaueoqcuacaims;
        giimkwieukqwesyc:
        goto yqgcksakiqqsuqec;
        goto mcuwmuamkysmycuq;
        gkiskesiwecgcuyo:
        yqgcksakiqqsuqec:
        goto ciqqmaiawkmiwgmy;
        ewimgmyosqwoeawa:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto jycseygmyuiggacq;
        }
        goto oeuecmgcqammueiw;
        kcsmyiqgeukocugm:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto ugmkgeamwiemieag;
        }
        goto ogaykeacicqmowss;
        meyokciwwsksmykm:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::cykwscocqwykiocm(), $gioggcykgoikcwiy);
        goto ocsmamaueksquiau;
        sguwkgiguoscuowe:
        jycseygmyuiggacq:
        goto qweguymgasscgmec;
        saaeyiqggocsqici:
        eoyikamgogkskgao:
        goto meyokciwwsksmykm;
        ciqqmaiawkmiwgmy:
        return $iayakwckycsumkqa;
        goto ykuaoqecgmioscey;
        koqmmigmqsawcqci:
        $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export;
        goto reuuqqqwucksmwwo;
        eaeciuwyqckwomio:
        if ($post) {
            goto kyqwosmmiuemmkug;
        }
        goto kcsmyiqgeukocugm;
        gyuwiiamkaoiqoyg:
        if (self::sqyyemqmmgmyiaam()) {
            goto ksimceecsmqscemk;
        }
        goto ewimgmyosqwoeawa;
        igeaueoqcuacaims:
        $iayakwckycsumkqa = null;
        goto eaeciuwyqckwomio;
        isuykcgsgyyqogeq:
        goto yqgcksakiqqsuqec;
        goto qkcyoowaicaciwcg;
        maowyiwmuococgku:
        ksimceecsmqscemk:
        goto aismaqwymeosqoyq;
        ikmkcieiyggeokam:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::oigaewqgekgugqug(), $gioggcykgoikcwiy);
        goto mcoegugoeeuowgkq;
        ocsmamaueksquiau:
        goto yqgcksakiqqsuqec;
        goto maowyiwmuococgku;
        oeuecmgcqammueiw:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto isuykcgsgyyqogeq;
        aisysqymsawuomqo:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto giimkwieukqwesyc;
        gwoqcyqoguaykmae:
        goto yqgcksakiqqsuqec;
        goto sguwkgiguoscuowe;
        twmiwuiakgeomosm:
        if (!$sqeykgyoooqysmca) {
            goto saimqwoekaggasik;
        }
        goto koqmmigmqsawcqci;
        qkcyoowaicaciwcg:
        kyqwosmmiuemmkug:
        goto aisysqymsawuomqo;
        aismaqwymeosqoyq:
        $sqeykgyoooqysmca = self::waaisqccqacqeium();
        goto twmiwuiakgeomosm;
        reuuqqqwucksmwwo:
        saimqwoekaggasik:
        goto gwoqcyqoguaykmae;
        mcuwmuamkysmycuq:
        ugmkgeamwiemieag:
        goto ikmkcieiyggeokam;
        mcoegugoeeuowgkq:
        goto yqgcksakiqqsuqec;
        goto saaeyiqggocsqici;
        qweguymgasscgmec:
        $iayakwckycsumkqa = DecoratorPost::wieoiwogwmcwukom();
        goto gkiskesiwecgcuyo;
        ogaykeacicqmowss:
        if (self::okiaumcqquyioqcy()) {
            goto eoyikamgogkskgao;
        }
        goto gyuwiiamkaoiqoyg;
        ykuaoqecgmioscey:
    }
    
    public static function agegeeiiacceomke($aaokuekaimigoyue, $meqocwsecsywiiqs, $omkysikckkcieckq = null, $ywmkwiwkosakssii = [])
    {
        goto igikiyqycooasgey;
        nisqcoeqcgqqqaai:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\157\x73\x74\137\164\x69\x74\x6c\145" => $meqocwsecsywiiqs, "\x70\157\163\164\x5f\156\x61\155\145" => $aaokuekaimigoyue, "\x70\157\163\164\137\x73\x74\x61\164\165\163" => "\160\165\142\154\151\x73\x68"]);
        goto gekgyswocciysksa;
        seygmewkwgggmgqa:
        iygyaykccksksmka:
        goto qwkmscimkwuuqkyy;
        saqyqgeqayiqykao:
        qmyawqywcoawoeim:
        goto gauuayyuaimeqgms;
        igikiyqycooasgey:
        $suaemuyiacqyugsm = DecoratorOption::get($omkysikckkcieckq);
        goto iwwsckgkuyykggwm;
        wmqcsqscwmkocacm:
        $mksyucucyswaukig = self::get($suaemuyiacqyugsm);
        goto saqyqgeqayiqykao;
        koycomwmwaigmeim:
        $suaemuyiacqyugsm = DecoratorPost::qamwegcyimgcqksw($aaokuekaimigoyue, "\x70\141\x67\145");
        goto kiewsmqeekaymgeo;
        sywsuomwieouwayw:
        if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) {
            goto imqeiaoiomcusmys;
        }
        goto wgqeiquyekoaaiqs;
        qewioskiigymoaae:
        flush_rewrite_rules(false);
        goto uscqgqwkeqmmeqay;
        iwwsckgkuyykggwm:
        $mksyucucyswaukig = null;
        goto mswykgiqgmcugqes;
        wgqeiquyekoaaiqs:
        DecoratorOption::update($omkysikckkcieckq, $suaemuyiacqyugsm);
        goto eqsoeagckkeueyoy;
        uscqgqwkeqmmeqay:
        qiagkoiassqawesu:
        goto aeamuikiyeskkkee;
        gauuayyuaimeqgms:
        if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) {
            goto iygyaykccksksmka;
        }
        goto koycomwmwaigmeim;
        qwkmscimkwuuqkyy:
        if ($suaemuyiacqyugsm) {
            goto qiagkoiassqawesu;
        }
        goto nisqcoeqcgqqqaai;
        kiewsmqeekaymgeo:
        DecoratorOption::update($omkysikckkcieckq, self::mwikyscisascoeea($suaemuyiacqyugsm));
        goto seygmewkwgggmgqa;
        eqsoeagckkeueyoy:
        imqeiaoiomcusmys:
        goto qewioskiigymoaae;
        mswykgiqgmcugqes:
        if (!$suaemuyiacqyugsm) {
            goto qmyawqywcoawoeim;
        }
        goto wmqcsqscwmkocacm;
        gekgyswocciysksa:
        $suaemuyiacqyugsm = self::insert("\x70\x61\147\x65", $ywmkwiwkosakssii);
        goto sywsuomwieouwayw;
        aeamuikiyeskkkee:
    }
    
    public static function ssacaeeassumyuws(?string $migiiksoiymissge = null, $aqykuigiuwmmcieu = self::OBJECT, $useksmwkuswkwcqg = "\160\x61\147\145")
    {
        goto iuuekasywyywqcmy;
        wyowoaggksqmaums:
        $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc();
        goto iewmgooekimcooem;
        msykyyqmmqsyqmkg:
        return DecoratorPost::qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu);
        goto wcimeswkkmqyaqoa;
        iuuekasywyywqcmy:
        if ($migiiksoiymissge) {
            goto wiuuqwgymuyoiciu;
        }
        goto wyowoaggksqmaums;
        iewmgooekimcooem:
        wiuuqwgymuyoiciu:
        goto awomwemokoaommck;
        awomwemokoaommck:
        $mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH);
        goto msykyyqmmqsyqmkg;
        wcimeswkkmqyaqoa:
    }
}

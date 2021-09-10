<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        csmewseacwwiskqi:
        if (!$oikyogsosqcyueay) {
            goto sogsyogucsmisoau;
        }
        goto kqcqgmsgiggceyss;
        aakioaiukcgicqma:
        return $oikyogsosqcyueay;
        goto ysqwqwciewcauaso;
        kqcqgmsgiggceyss:
        $oikyogsosqcyueay = self::get($oikyogsosqcyueay);
        goto qcggaygooaigauwu;
        qcggaygooaigauwu:
        sogsyogucsmisoau:
        goto aakioaiukcgicqma;
        soqwgawucoyckiso:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto csmewseacwwiskqi;
        ysqwqwciewcauaso:
    }
    
    public static function eokiwumgqmymgyoa()
    {
        return DecoratorOption::get("\160\141\147\145\x5f\x66\x6f\x72\137\x70\157\x73\x74\x73");
    }
    
    public static function icikwuksyiceccmo()
    {
        goto iimquseysaiomgas;
        msyoyikcumueukue:
        $aaokuekaimigoyue = self::aqcogscycyycgkuq($oikyogsosqcyueay);
        goto ywigmmoegqeggysg;
        ywigmmoegqeggysg:
        wmesugyccceqgekg:
        goto iakcwkiqcswmeygo;
        iyiwiyiuaagacugy:
        $aaokuekaimigoyue = "\x62\x6c\x6f\147";
        goto ygosgmiiugiiscsu;
        iimquseysaiomgas:
        $oikyogsosqcyueay = self::cykwscocqwykiocm();
        goto iyiwiyiuaagacugy;
        ygosgmiiugiiscsu:
        if (!$oikyogsosqcyueay instanceof WP_Post) {
            goto wmesugyccceqgekg;
        }
        goto msyoyikcumueukue;
        iakcwkiqcswmeygo:
        return $aaokuekaimigoyue;
        goto miqyaiywugkkgwie;
        miqyaiywugkkgwie:
    }
    
    public static function oigaewqgekgugqug()
    {
        return DecoratorOption::get("\160\x61\147\x65\137\x6f\x6e\x5f\x66\x72\157\156\x74");
    }
    
    public static function awgkmqkqkqawmqcu() : bool
    {
        goto ggsuykssmeuwgmee;
        ggsuykssmeuwgmee:
        $aiamqeawckcsuaou = ManipulateServer::get("\x61\143\164\151\157\156");
        goto iyywoeosyegimygc;
        yiyigymygeeowoms:
        return $syuuigcamkiegaqy === "\167\160\55\154\x6f\147\151\x6e\x2e\x70\150\160" || in_array($aiamqeawckcsuaou, ["\x72\160", "\x6c\x6f\163\164\160\141\x73\163\167\x6f\x72\x64", "\162\145\x67\151\163\164\x65\162"]);
        goto wuiwysygcwqscigy;
        iyywoeosyegimygc:
        $syuuigcamkiegaqy = ManipulateServer::oymwkcegiigooaqm("\160\x61\147\x65\156\x6f\167");
        goto yiyigymygeeowoms;
        wuiwysygcwqscigy:
    }
    
    public static function symuoymymumgwkaw()
    {
        goto sqykqekmsogswkog;
        suaggqsigckogyek:
        return $migiiksoiymissge;
        goto iekwekemogoyomuk;
        maqseauogscyeogw:
        ewmaqwoqyggwucag:
        goto suaggqsigckogyek;
        mgocwmsiykiigeme:
        $migiiksoiymissge = self::ycqquoiyyuesegsy($oikyogsosqcyueay);
        goto maqseauogscyeogw;
        wiwykgmceuaoeqks:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto weaaqgwewmkwwciw;
        weaaqgwewmkwwciw:
        if (!$oikyogsosqcyueay) {
            goto ewmaqwoqyggwucag;
        }
        goto mgocwmsiykiigeme;
        sqykqekmsogswkog:
        $migiiksoiymissge = null;
        goto wiwykgmceuaoeqks;
        iekwekemogoyomuk:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        goto sykeuqwqugkeigig;
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
        eswcmcmguawawsya:
        ayqomgiesquiieke:
        goto ouqkcsiuwymsyyac;
        rguugekykscwiaca:
        if ($post) {
            goto akyoausyiwisayoe;
        }
        goto iosaeiaommgcgsyq;
        iosaeiaommgcgsyq:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto myiqqkogcqekgqiq;
        }
        goto waeeskqmeqwiyysa;
        qwigokiuwsgywmqe:
        goto okssskeakmywwwii;
        goto omcgwcaewggkyekk;
        imumuuckgaiyaqou:
        goto okssskeakmywwwii;
        goto iaaeukgwkeyewuwk;
        aqimseoockakwaek:
        $meqocwsecsywiiqs = get_bloginfo("\156\x61\155\145");
        goto imumuuckgaiyaqou;
        ssauiqekekegaucy:
        return $meqocwsecsywiiqs;
        goto sgywygyawgwgcisg;
        qyeogkiaggyykewa:
        $useksmwkuswkwcqg = self::waaisqccqacqeium();
        goto wuikyqcaoeiggqmq;
        iaaeukgwkeyewuwk:
        qyewgcsqgmyaocco:
        goto agekuuacwqkmswoi;
        ismcqqkiosumseue:
        $meqocwsecsywiiqs = $useksmwkuswkwcqg->label;
        goto eswcmcmguawawsya;
        sykeuqwqugkeigig:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco($post);
        goto rguugekykscwiaca;
        ueaayiqayygcgoqi:
        goto okssskeakmywwwii;
        goto msamwsmoqyooagqs;
        omcgwcaewggkyekk:
        ccyuokyeykkmwqkc:
        goto qyeogkiaggyykewa;
        waeeskqmeqwiyysa:
        if (self::okiaumcqquyioqcy()) {
            goto qyewgcsqgmyaocco;
        }
        goto qmowaeuskymgicac;
        agekuuacwqkmswoi:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco(self::cykwscocqwykiocm());
        goto qwigokiuwsgywmqe;
        cyioiakwwqmokgye:
        $meqocwsecsywiiqs = DecoratorPost::syeuyeikogukksam();
        goto caegckokkmueeags;
        qmowaeuskymgicac:
        if (DecoratorQuery::moegwqkekcawsggs()) {
            goto ccyuokyeykkmwqkc;
        }
        goto qsceaisugocqyckq;
        iuewwmweyqcmyoku:
        yokwocmaaycmkkao:
        goto cyioiakwwqmokgye;
        caegckokkmueeags:
        okssskeakmywwwii:
        goto igocqgwwyscegcoo;
        ouqkcsiuwymsyyac:
        goto okssskeakmywwwii;
        goto iuewwmweyqcmyoku;
        msamwsmoqyooagqs:
        myiqqkogcqekgqiq:
        goto aqimseoockakwaek;
        igocqgwwyscegcoo:
        akyoausyiwisayoe:
        goto ssauiqekekegaucy;
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
        mkkeagwoaksoqsii:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($mksyucucyswaukig, true);
        goto uaaouwkcigacguou;
        iamagkcimokqwswc:
        $yyimiwcuegayoskq->cggwsuueqwqscgei(is_paged());
        goto muaoymyciyauqiae;
        yukqeyeyuucieqga:
        goto esegymsakukwacyq;
        goto eckqskkgosseskmc;
        kuacwismecyuequy:
        goto esegymsakukwacyq;
        goto qcoagmaceeioumey;
        acmaoyccqewmweaw:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_search_query())->ugaqcouwcuiaemgo("\x73\145\141\x72\143\x68");
        goto kuacwismecyuequy;
        ogygmqoisqiasisc:
        goto esegymsakukwacyq;
        goto myccssugyykigeie;
        iiqwggyqyekwkako:
        goto esegymsakukwacyq;
        goto kckcsuuiykyaawke;
        eyqugyuuucmscwqg:
        goto esegymsakukwacyq;
        goto ciqusemcegueoegm;
        qouscuqwwookaiea:
        uggycmgqqyqeacas:
        goto uaokcgsoaemmiqou;
        qygawwowocwskuqu:
        if (DecoratorQuery::aauyuieeeaakygki()) {
            goto gkmiagqgacyogaoy;
        }
        goto gyauiikaoigoeyyq;
        uaqieigykmeagcoi:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\x59")))->ugaqcouwcuiaemgo("\171\145\141\x72");
        goto auymguqowwoccwiq;
        aqqemqcsowckquqa:
        guyscyosaqwiaaoc:
        goto ewauqkmweawmkgas;
        ocqgosucokgqukws:
        $yyimiwcuegayoskq = new PageInfo();
        goto mcuamuokmoskmwky;
        emeayeegwmicuiqq:
        if (is_single() && !DecoratorQuery::aauyuieeeaakygki()) {
            goto guyscyosaqwiaaoc;
        }
        goto iggeguwkkemeoksm;
        kiecqswmwgwmackc:
        if (is_day()) {
            goto wcaysaykacysmkue;
        }
        goto eqmimgekqkqqmcca;
        suswiwiacoeosiuu:
        if (is_404()) {
            goto qycwewyaymciuaow;
        }
        goto gywgyugckkqscaao;
        muaoymyciyauqiae:
        return $yyimiwcuegayoskq;
        goto uyqqcioceqguesgw;
        uaeuiiegyuoocksu:
        goto esegymsakukwacyq;
        goto aqqemqcsowckquqa;
        ewauqkmweawmkgas:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x73\x69\156\x67\154\x65")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto wscyocimqesyaqeu;
        gyauiikaoigoeyyq:
        if (self::sqyyemqmmgmyiaam()) {
            goto osieesqoygmqkski;
        }
        goto suswiwiacoeosiuu;
        uamaycseqskcgogs:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo("\x74\141\170\157\156\x6f\155\171")->aseocggwwegcmqes($kesssewsiegssiya);
        goto yukqeyeyuucieqga;
        uwwkacwywyygyomc:
        koccukqciscmgeuo:
        goto ckgqqiewiuyycyee;
        uyqmicaayqwwommo:
        gkmiagqgacyogaoy:
        goto scioseuqqegcycuu;
        ymsugasumawwwgka:
        if (is_month()) {
            goto koccukqciscmgeuo;
        }
        goto kiecqswmwgwmackc;
        uaaouwkcigacguou:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::mqgeysameoesmuqw($useksmwkuswkwcqg->name))->ugaqcouwcuiaemgo("\x70\x6f\x73\164\137\164\171\x70\x65")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto iiqwggyqyekwkako;
        cyggoamqmaisueam:
        if (is_search()) {
            goto akuwqeaouicqskgu;
        }
        goto ecacgamqsegoqaug;
        agewogomsgsaeiss:
        goto esegymsakukwacyq;
        goto omoeomgwkeyyuews;
        auymguqowwoccwiq:
        goto esegymsakukwacyq;
        goto uwwkacwywyygyomc;
        ckgqqiewiuyycyee:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\131"), get_the_time("\x46")))->ugaqcouwcuiaemgo("\x6d\x6f\x6e\164\150");
        goto eyqugyuuucmscwqg;
        qkiqgucaomigsesq:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo("\141\x75\164\x68\x6f\162");
        goto uaeuiiegyuoocksu;
        myccssugyykigeie:
        iwoisseyosimeiwg:
        goto mwcaeiokmsaacsac;
        omoeomgwkeyyuews:
        scgayeiigokkyksu:
        goto uswqukaouqwuocik;
        ugoueuoakwywqsos:
        aaaquaiiomywcyie:
        goto wmyewgwkuyyswgge;
        uecagaicwccecikw:
        if (is_tax()) {
            goto aaaquaiiomywcyie;
        }
        goto cyggoamqmaisueam;
        wscyocimqesyaqeu:
        goto esegymsakukwacyq;
        goto ueikewqggcwskseu;
        iggeguwkkemeoksm:
        if (is_page()) {
            goto wsguekmucgeaocgu;
        }
        goto qygawwowocwskuqu;
        igguimucuuyekecy:
        goto esegymsakukwacyq;
        goto ugoueuoakwywqsos;
        egkuaomeucwoggsm:
        $mksyucucyswaukig = get_queried_object();
        goto ocqgosucokgqukws;
        uaokcgsoaemmiqou:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\x74\141\147\137\x69\144"), "\160\157\x73\164\x5f\164\x61\x67"))->ugaqcouwcuiaemgo("\164\141\170\157\156\157\x6d\x79")->aseocggwwegcmqes("\164\x61\x67");
        goto igguimucuuyekecy;
        ciwcueuqsueyeyeu:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x70\x61\147\145");
        goto ooasiqaamqsiuqio;
        wmyewgwkuyyswgge:
        $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig);
        goto uamaycseqskcgogs;
        amwoyceicgucwuca:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\x63\141\x74"), "\x63\x61\164\145\x67\x6f\162\x79"))->ugaqcouwcuiaemgo("\x74\x61\x78\157\156\157\155\171")->aseocggwwegcmqes("\143\x61\x74\x65\x67\157\162\171");
        goto mmeuuskqmmyaesga;
        ukkegcmwcuymceua:
        $qscaoekmoooeuyqg = ManipulateUser::get(get_query_var("\x61\x75\x74\150\x6f\162"), true);
        goto qkiqgucaomigsesq;
        ooasiqaamqsiuqio:
        goto esegymsakukwacyq;
        goto uyqmicaayqwwommo;
        squouqwsoywkecwy:
        osieesqoygmqkski:
        goto mkkeagwoaksoqsii;
        mcuamuokmoskmwky:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto iwoisseyosimeiwg;
        }
        goto omyiaeqssiowmeyq;
        wcywgsiukiucoyau:
        esegymsakukwacyq:
        goto iamagkcimokqwswc;
        egoewmaccsammqkc:
        goto esegymsakukwacyq;
        goto squouqwsoywkecwy;
        uswqukaouqwuocik:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::symuoymymumgwkaw())->ugaqcouwcuiaemgo("\150\x6f\x6d\x65");
        goto wakwyywuumiqsmsi;
        omyiaeqssiowmeyq:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto scgayeiigokkyksu;
        }
        goto qugqcmywiswaoigo;
        egcakiyaioiqacsg:
        $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\64\x30\x34");
        goto wcywgsiukiucoyau;
        eckqskkgosseskmc:
        akuwqeaouicqskgu:
        goto acmaoyccqewmweaw;
        gguiymqokicqscom:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\x59"), get_the_time("\106"), get_the_time("\x64")))->ugaqcouwcuiaemgo("\144\x61\171");
        goto smewgosmeuaqukya;
        ecacgamqsegoqaug:
        if (is_year()) {
            goto wekaickwcioowesg;
        }
        goto ymsugasumawwwgka;
        wakwyywuumiqsmsi:
        goto esegymsakukwacyq;
        goto sikagsogeweqwqwe;
        eqmimgekqkqqmcca:
        if (is_author()) {
            goto uweemmwsoqkmekwy;
        }
        goto emeayeegwmicuiqq;
        qugqcmywiswaoigo:
        if (is_category()) {
            goto uioiawwiiuaycmqi;
        }
        goto muywyiaqscwgmeoi;
        qcoagmaceeioumey:
        wekaickwcioowesg:
        goto uaqieigykmeagcoi;
        mwcaeiokmsaacsac:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::somwagieycgkcyec())->ugaqcouwcuiaemgo("\x66\x72\157\156\x74\137\x70\x61\147\x65");
        goto agewogomsgsaeiss;
        mmeuuskqmmyaesga:
        goto esegymsakukwacyq;
        goto qouscuqwwookaiea;
        oqssaoscmiskagum:
        uweemmwsoqkmekwy:
        goto ukkegcmwcuymceua;
        sikagsogeweqwqwe:
        uioiawwiiuaycmqi:
        goto amwoyceicgucwuca;
        muywyiaqscwgmeoi:
        if (is_tag()) {
            goto uggycmgqqyqeacas;
        }
        goto uecagaicwccecikw;
        ciqusemcegueoegm:
        wcaysaykacysmkue:
        goto gguiymqokicqscom;
        smewgosmeuaqukya:
        goto esegymsakukwacyq;
        goto oqssaoscmiskagum;
        ueikewqggcwskseu:
        wsguekmucgeaocgu:
        goto ciwcueuqsueyeyeu;
        gywgyugckkqscaao:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateServer::ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\165\x6e\x6b\156\x6f\167\x6e");
        goto ogygmqoisqiasisc;
        scioseuqqegcycuu:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAttachment::qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo("\141\164\164\x61\143\x68\155\145\x6e\x74");
        goto egoewmaccsammqkc;
        uyqqcioceqguesgw:
    }
    
    public static function ycqquoiyyuesegsy($post = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto oskmiqqwqkuyugqq;
        ceacseyocykwqyyw:
        ogqgmqiweiwqeyck:
        goto qqgmsukugueeaesq;
        qesiqimsweuqacgc:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto uueakweiqiqqukes;
        }
        goto amaqgiegqwsmcqak;
        oskmiqqwqkuyugqq:
        $migiiksoiymissge = null;
        goto ooisukscqugmceuy;
        amaqgiegqwsmcqak:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto ogqgmqiweiwqeyck;
        }
        goto wwockyuqacckgmkm;
        kkwammqmykqmseky:
        goto mqukeuyogggewmmu;
        goto oaeqccuiuqwqomeg;
        gkcqguoasqokuaug:
        uueakweiqiqqukes:
        goto uagqceymsywggcgs;
        waeweckgowcciukq:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto amkyoauqecoimiau;
        }
        goto qesiqimsweuqacgc;
        ssmawuwisimwmqsa:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto gqacwwimmmoswagw;
        ooisukscqugmceuy:
        if ($post) {
            goto taqemmwguqueqemw;
        }
        goto waeweckgowcciukq;
        cqomyeiacimqacuw:
        return trailingslashit($migiiksoiymissge);
        goto myoocyaewqimqeui;
        gmgomyaaquiiekcg:
        amkyoauqecoimiau:
        goto gkoeukkaesoaseqg;
        uagqceymsywggcgs:
        $migiiksoiymissge = self::symuoymymumgwkaw();
        goto omysmgiqyswuigkq;
        omysmgiqyswuigkq:
        goto mqukeuyogggewmmu;
        goto ceacseyocykwqyyw;
        acqyyksaoeeomiia:
        $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($wp->request);
        goto wmysaywgeqwcaims;
        gkoeukkaesoaseqg:
        $migiiksoiymissge = ManipulateServer::auksikwsewaywikq();
        goto emmwgomqmskywumg;
        qqgmsukugueeaesq:
        global $wp;
        goto acqyyksaoeeomiia;
        gqacwwimmmoswagw:
        goto mqukeuyogggewmmu;
        goto gmgomyaaquiiekcg;
        oaeqccuiuqwqomeg:
        taqemmwguqueqemw:
        goto ssmawuwisimwmqsa;
        emmwgomqmskywumg:
        goto mqukeuyogggewmmu;
        goto gkcqguoasqokuaug;
        wwockyuqacckgmkm:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto kkwammqmykqmseky;
        wmysaywgeqwcaims:
        mqukeuyogggewmmu:
        goto cqomyeiacimqacuw;
        myoocyaewqimqeui:
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto igeaueoqcuacaims;
        igeaueoqcuacaims:
        $iayakwckycsumkqa = null;
        goto eaeciuwyqckwomio;
        isuykcgsgyyqogeq:
        goto yqgcksakiqqsuqec;
        goto qkcyoowaicaciwcg;
        mcoegugoeeuowgkq:
        goto yqgcksakiqqsuqec;
        goto saaeyiqggocsqici;
        oeuecmgcqammueiw:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto isuykcgsgyyqogeq;
        mcuwmuamkysmycuq:
        ugmkgeamwiemieag:
        goto ikmkcieiyggeokam;
        koqmmigmqsawcqci:
        $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export;
        goto reuuqqqwucksmwwo;
        kcsmyiqgeukocugm:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto ugmkgeamwiemieag;
        }
        goto ogaykeacicqmowss;
        ewimgmyosqwoeawa:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto jycseygmyuiggacq;
        }
        goto oeuecmgcqammueiw;
        aisysqymsawuomqo:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto giimkwieukqwesyc;
        maowyiwmuococgku:
        ksimceecsmqscemk:
        goto aismaqwymeosqoyq;
        gwoqcyqoguaykmae:
        goto yqgcksakiqqsuqec;
        goto sguwkgiguoscuowe;
        ikmkcieiyggeokam:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::oigaewqgekgugqug(), $gioggcykgoikcwiy);
        goto mcoegugoeeuowgkq;
        ogaykeacicqmowss:
        if (self::okiaumcqquyioqcy()) {
            goto eoyikamgogkskgao;
        }
        goto gyuwiiamkaoiqoyg;
        twmiwuiakgeomosm:
        if (!$sqeykgyoooqysmca) {
            goto saimqwoekaggasik;
        }
        goto koqmmigmqsawcqci;
        eaeciuwyqckwomio:
        if ($post) {
            goto kyqwosmmiuemmkug;
        }
        goto kcsmyiqgeukocugm;
        ocsmamaueksquiau:
        goto yqgcksakiqqsuqec;
        goto maowyiwmuococgku;
        gkiskesiwecgcuyo:
        yqgcksakiqqsuqec:
        goto ciqqmaiawkmiwgmy;
        meyokciwwsksmykm:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::cykwscocqwykiocm(), $gioggcykgoikcwiy);
        goto ocsmamaueksquiau;
        sguwkgiguoscuowe:
        jycseygmyuiggacq:
        goto qweguymgasscgmec;
        qweguymgasscgmec:
        $iayakwckycsumkqa = DecoratorPost::wieoiwogwmcwukom();
        goto gkiskesiwecgcuyo;
        gyuwiiamkaoiqoyg:
        if (self::sqyyemqmmgmyiaam()) {
            goto ksimceecsmqscemk;
        }
        goto ewimgmyosqwoeawa;
        reuuqqqwucksmwwo:
        saimqwoekaggasik:
        goto gwoqcyqoguaykmae;
        aismaqwymeosqoyq:
        $sqeykgyoooqysmca = self::waaisqccqacqeium();
        goto twmiwuiakgeomosm;
        giimkwieukqwesyc:
        goto yqgcksakiqqsuqec;
        goto mcuwmuamkysmycuq;
        qkcyoowaicaciwcg:
        kyqwosmmiuemmkug:
        goto aisysqymsawuomqo;
        ciqqmaiawkmiwgmy:
        return $iayakwckycsumkqa;
        goto ykuaoqecgmioscey;
        saaeyiqggocsqici:
        eoyikamgogkskgao:
        goto meyokciwwsksmykm;
        ykuaoqecgmioscey:
    }
    
    public static function agegeeiiacceomke($aaokuekaimigoyue, $meqocwsecsywiiqs, $omkysikckkcieckq = null, $ywmkwiwkosakssii = [])
    {
        goto igikiyqycooasgey;
        iwwsckgkuyykggwm:
        $mksyucucyswaukig = null;
        goto mswykgiqgmcugqes;
        gekgyswocciysksa:
        $suaemuyiacqyugsm = self::insert("\160\x61\147\x65", $ywmkwiwkosakssii);
        goto sywsuomwieouwayw;
        mswykgiqgmcugqes:
        if (!$suaemuyiacqyugsm) {
            goto qmyawqywcoawoeim;
        }
        goto wmqcsqscwmkocacm;
        nisqcoeqcgqqqaai:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x6f\163\x74\x5f\x74\151\164\154\145" => $meqocwsecsywiiqs, "\160\x6f\x73\x74\x5f\x6e\x61\155\x65" => $aaokuekaimigoyue, "\x70\x6f\x73\164\137\163\x74\141\x74\165\x73" => "\x70\165\142\x6c\151\163\x68"]);
        goto gekgyswocciysksa;
        koycomwmwaigmeim:
        $suaemuyiacqyugsm = DecoratorPost::qamwegcyimgcqksw($aaokuekaimigoyue, "\160\x61\147\x65");
        goto kiewsmqeekaymgeo;
        gauuayyuaimeqgms:
        if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) {
            goto iygyaykccksksmka;
        }
        goto koycomwmwaigmeim;
        eqsoeagckkeueyoy:
        imqeiaoiomcusmys:
        goto qewioskiigymoaae;
        wmqcsqscwmkocacm:
        $mksyucucyswaukig = self::get($suaemuyiacqyugsm);
        goto saqyqgeqayiqykao;
        qwkmscimkwuuqkyy:
        if ($suaemuyiacqyugsm) {
            goto qiagkoiassqawesu;
        }
        goto nisqcoeqcgqqqaai;
        seygmewkwgggmgqa:
        iygyaykccksksmka:
        goto qwkmscimkwuuqkyy;
        saqyqgeqayiqykao:
        qmyawqywcoawoeim:
        goto gauuayyuaimeqgms;
        wgqeiquyekoaaiqs:
        DecoratorOption::update($omkysikckkcieckq, $suaemuyiacqyugsm);
        goto eqsoeagckkeueyoy;
        sywsuomwieouwayw:
        if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) {
            goto imqeiaoiomcusmys;
        }
        goto wgqeiquyekoaaiqs;
        igikiyqycooasgey:
        $suaemuyiacqyugsm = DecoratorOption::get($omkysikckkcieckq);
        goto iwwsckgkuyykggwm;
        qewioskiigymoaae:
        flush_rewrite_rules(false);
        goto uscqgqwkeqmmeqay;
        uscqgqwkeqmmeqay:
        qiagkoiassqawesu:
        goto aeamuikiyeskkkee;
        kiewsmqeekaymgeo:
        DecoratorOption::update($omkysikckkcieckq, self::mwikyscisascoeea($suaemuyiacqyugsm));
        goto seygmewkwgggmgqa;
        aeamuikiyeskkkee:
    }
    
    public static function ssacaeeassumyuws(?string $migiiksoiymissge = null, $aqykuigiuwmmcieu = self::OBJECT, $useksmwkuswkwcqg = "\160\x61\147\x65")
    {
        goto iuuekasywyywqcmy;
        wyowoaggksqmaums:
        $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc();
        goto iewmgooekimcooem;
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
        awomwemokoaommck:
        $mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH);
        goto msykyyqmmqsyqmkg;
        wcimeswkkmqyaqoa:
    }
}

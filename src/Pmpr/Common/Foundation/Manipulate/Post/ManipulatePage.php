<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto mgiqmcyayasueaay;
        mgiqmcyayasueaay:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto myciimmeauksamaa;
        myciimmeauksamaa:
        if (!$oikyogsosqcyueay) {
            goto mkiskyuukeickeio;
        }
        goto oeimecucwuoikscu;
        oggcgggiciyscsek:
        mkiskyuukeickeio:
        goto ausiqgkmacksmyce;
        ausiqgkmacksmyce:
        return $oikyogsosqcyueay;
        goto qmweiqisqiikwwcg;
        oeimecucwuoikscu:
        $oikyogsosqcyueay = self::get($oikyogsosqcyueay);
        goto oggcgggiciyscsek;
        qmweiqisqiikwwcg:
    }
    
    public static function eokiwumgqmymgyoa()
    {
        return DecoratorOption::get("\160\x61\x67\x65\x5f\146\x6f\x72\x5f\x70\x6f\163\x74\163");
    }
    
    public static function icikwuksyiceccmo()
    {
        goto gymooqgyigeucisi;
        gowmoegakqaokqwy:
        return $aaokuekaimigoyue;
        goto cqmwuskwgsuyqiku;
        smieosasoeageewe:
        if (!$oikyogsosqcyueay instanceof WP_Post) {
            goto kiuoaeesiiaqskma;
        }
        goto ssequouykiacumek;
        wyyoauyqkccwquye:
        kiuoaeesiiaqskma:
        goto gowmoegakqaokqwy;
        wakwucssymmkyoqy:
        $aaokuekaimigoyue = "\x62\154\157\x67";
        goto smieosasoeageewe;
        ssequouykiacumek:
        $aaokuekaimigoyue = self::aqcogscycyycgkuq($oikyogsosqcyueay);
        goto wyyoauyqkccwquye;
        gymooqgyigeucisi:
        $oikyogsosqcyueay = self::cykwscocqwykiocm();
        goto wakwucssymmkyoqy;
        cqmwuskwgsuyqiku:
    }
    
    public static function oigaewqgekgugqug()
    {
        return DecoratorOption::get("\160\x61\147\145\137\x6f\x6e\137\146\x72\x6f\156\164");
    }
    
    public static function awgkmqkqkqawmqcu() : bool
    {
        goto guwwcsoquaaiywwg;
        guwwcsoquaaiywwg:
        $aiamqeawckcsuaou = ManipulateServer::get("\x61\143\x74\x69\x6f\156");
        goto sqokciesoswwaase;
        osqmooccocasiwwi:
        return $syuuigcamkiegaqy === "\167\160\55\x6c\157\147\151\x6e\56\x70\x68\x70" || in_array($aiamqeawckcsuaou, ["\162\x70", "\x6c\157\163\164\x70\141\163\x73\167\x6f\x72\x64", "\x72\145\x67\x69\x73\x74\x65\x72"]);
        goto suaagcyyqywuawcy;
        sqokciesoswwaase:
        $syuuigcamkiegaqy = ManipulateServer::oymwkcegiigooaqm("\160\141\x67\x65\x6e\157\x77");
        goto osqmooccocasiwwi;
        suaagcyyqywuawcy:
    }
    
    public static function symuoymymumgwkaw()
    {
        goto owcmkccqayuewmyi;
        agyimagkmcyciuqw:
        yeuouysckyiiqgkk:
        goto omcycqocymkeiawq;
        omcycqocymkeiawq:
        return $migiiksoiymissge;
        goto wkmugsoecikiakqq;
        owcmkccqayuewmyi:
        $migiiksoiymissge = null;
        goto gqyiykessecacuqq;
        uuuyqoukemmekmwy:
        $migiiksoiymissge = self::ycqquoiyyuesegsy($oikyogsosqcyueay);
        goto agyimagkmcyciuqw;
        qiwmescucyayywwe:
        if (!$oikyogsosqcyueay) {
            goto yeuouysckyiiqgkk;
        }
        goto uuuyqoukemmekmwy;
        gqyiykessecacuqq:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto qiwmescucyayywwe;
        wkmugsoecikiakqq:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        goto sgewiwogqyswqiso;
        qwmsyyymeegigkio:
        $meqocwsecsywiiqs = $useksmwkuswkwcqg->label;
        goto wqwgaqeywoosssgo;
        asayieoqoamuimcc:
        if (!$useksmwkuswkwcqg) {
            goto caasemucaegsgiic;
        }
        goto qwmsyyymeegigkio;
        acscqmesgcgqumse:
        wwwoeskoucoimecg:
        goto auqgkmewqmiewwww;
        wocsaeyyawcwmsiw:
        goto ygoayeaicqikqmii;
        goto oeqaaoswcwwwkkww;
        kwqqkyscmkmmycky:
        goto ygoayeaicqikqmii;
        goto acscqmesgcgqumse;
        ssaqqyiuueayyauu:
        if (DecoratorQuery::moegwqkekcawsggs()) {
            goto mqacwakmquqyikgg;
        }
        goto mwmoywcyqwimoeye;
        aswygkquwkiaqews:
        $useksmwkuswkwcqg = self::waaisqccqacqeium();
        goto asayieoqoamuimcc;
        uykawkeowqygeweo:
        okwqmqsuewwwsykg:
        goto iuwqqquugqmiacic;
        egigiaiiwcmwmumi:
        goto ygoayeaicqikqmii;
        goto emmssoaeueiowaeg;
        qquiekauycukmquy:
        if ($post) {
            goto iawoeomqmeacqwwm;
        }
        goto ykiawsemqwsweosg;
        iecsyeoooyqcuwcs:
        if (self::okiaumcqquyioqcy()) {
            goto okwqmqsuewwwsykg;
        }
        goto ssaqqyiuueayyauu;
        emmssoaeueiowaeg:
        mqwgiouuekicqwqq:
        goto mesaqgsmsoqowuki;
        aquoociuuukgecia:
        iawoeomqmeacqwwm:
        goto sogsyogucsmisoau;
        wqwgaqeywoosssgo:
        caasemucaegsgiic:
        goto egigiaiiwcmwmumi;
        sogsyogucsmisoau:
        return $meqocwsecsywiiqs;
        goto soqwgawucoyckiso;
        qoqwwimiekwmggwi:
        goto ygoayeaicqikqmii;
        goto uykawkeowqygeweo;
        oeqaaoswcwwwkkww:
        mqacwakmquqyikgg:
        goto aswygkquwkiaqews;
        ykiawsemqwsweosg:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto wwwoeskoucoimecg;
        }
        goto iecsyeoooyqcuwcs;
        mesaqgsmsoqowuki:
        $meqocwsecsywiiqs = DecoratorPost::syeuyeikogukksam();
        goto ioacggcqeywkqemu;
        sgewiwogqyswqiso:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco($post);
        goto qquiekauycukmquy;
        iuwqqquugqmiacic:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco(self::cykwscocqwykiocm());
        goto wocsaeyyawcwmsiw;
        auqgkmewqmiewwww:
        $meqocwsecsywiiqs = get_bloginfo("\x6e\x61\x6d\x65");
        goto qoqwwimiekwmggwi;
        ioacggcqeywkqemu:
        ygoayeaicqikqmii:
        goto aquoociuuukgecia;
        mwmoywcyqwimoeye:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto mqwgiouuekicqwqq;
        }
        goto kwqqkyscmkmmycky;
        soqwgawucoyckiso:
    }
    
    public static function somwagieycgkcyec()
    {
        return self::ycqquoiyyuesegsy(self::oigaewqgekgugqug());
    }
    
    public static function iqoacwuiemooiysg() : PageInfo
    {
        goto wuiwysygcwqscigy;
        esegymsakukwacyq:
        ygosgmiiugiiscsu:
        goto iwoisseyosimeiwg;
        agekuuacwqkmswoi:
        goto csmewseacwwiskqi;
        goto qwigokiuwsgywmqe;
        ayqomgiesquiieke:
        if (is_month()) {
            goto ygosgmiiugiiscsu;
        }
        goto okssskeakmywwwii;
        qsceaisugocqyckq:
        goto csmewseacwwiskqi;
        goto ueaayiqayygcgoqi;
        mgocwmsiykiigeme:
        if (is_tag()) {
            goto ysqwqwciewcauaso;
        }
        goto maqseauogscyeogw;
        cyioiakwwqmokgye:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_search_query())->ugaqcouwcuiaemgo("\163\x65\x61\162\143\150");
        goto caegckokkmueeags;
        osieesqoygmqkski:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\160\x61\x67\x65");
        goto qycwewyaymciuaow;
        aqimseoockakwaek:
        goto csmewseacwwiskqi;
        goto imumuuckgaiyaqou;
        egkuaomeucwoggsm:
        ggsuykssmeuwgmee:
        goto ocqgosucokgqukws;
        eqmimgekqkqqmcca:
        return $yyimiwcuegayoskq;
        goto emeayeegwmicuiqq;
        akyoausyiwisayoe:
        if (self::sqyyemqmmgmyiaam()) {
            goto iyywoeosyegimygc;
        }
        goto sykeuqwqugkeigig;
        imumuuckgaiyaqou:
        aakioaiukcgicqma:
        goto iaaeukgwkeyewuwk;
        ssauiqekekegaucy:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\131")))->ugaqcouwcuiaemgo("\171\145\x61\x72");
        goto sgywygyawgwgcisg;
        suaggqsigckogyek:
        if (is_search()) {
            goto iimquseysaiomgas;
        }
        goto iekwekemogoyomuk;
        ccyuokyeykkmwqkc:
        if (is_page()) {
            goto miqyaiywugkkgwie;
        }
        goto yokwocmaaycmkkao;
        yokwocmaaycmkkao:
        if (DecoratorQuery::aauyuieeeaakygki()) {
            goto ggsuykssmeuwgmee;
        }
        goto akyoausyiwisayoe;
        maqseauogscyeogw:
        if (is_tax()) {
            goto wmesugyccceqgekg;
        }
        goto suaggqsigckogyek;
        guyscyosaqwiaaoc:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\163\x69\x6e\147\154\x65")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto wsguekmucgeaocgu;
        okssskeakmywwwii:
        if (is_day()) {
            goto msyoyikcumueukue;
        }
        goto myiqqkogcqekgqiq;
        sqykqekmsogswkog:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto kqcqgmsgiggceyss;
        }
        goto wiwykgmceuaoeqks;
        ymsugasumawwwgka:
        csmewseacwwiskqi:
        goto kiecqswmwgwmackc;
        ueaayiqayygcgoqi:
        qcggaygooaigauwu:
        goto msamwsmoqyooagqs;
        iaaeukgwkeyewuwk:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\143\x61\164"), "\143\141\x74\x65\147\157\162\171"))->ugaqcouwcuiaemgo("\x74\141\170\157\x6e\157\155\x79")->aseocggwwegcmqes("\143\141\x74\145\147\x6f\162\171");
        goto agekuuacwqkmswoi;
        ouqkcsiuwymsyyac:
        goto csmewseacwwiskqi;
        goto iuewwmweyqcmyoku;
        iekwekemogoyomuk:
        if (is_year()) {
            goto iyiwiyiuaagacugy;
        }
        goto ayqomgiesquiieke;
        sgywygyawgwgcisg:
        goto csmewseacwwiskqi;
        goto esegymsakukwacyq;
        iuewwmweyqcmyoku:
        iimquseysaiomgas:
        goto cyioiakwwqmokgye;
        qmowaeuskymgicac:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::somwagieycgkcyec())->ugaqcouwcuiaemgo("\146\x72\157\156\x74\x5f\x70\x61\x67\145");
        goto qsceaisugocqyckq;
        qyeogkiaggyykewa:
        goto csmewseacwwiskqi;
        goto wuikyqcaoeiggqmq;
        akuwqeaouicqskgu:
        ywigmmoegqeggysg:
        goto wekaickwcioowesg;
        koccukqciscmgeuo:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo("\141\x75\x74\150\157\x72");
        goto wcaysaykacysmkue;
        qwigokiuwsgywmqe:
        ysqwqwciewcauaso:
        goto omcgwcaewggkyekk;
        muywyiaqscwgmeoi:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::mqgeysameoesmuqw($useksmwkuswkwcqg->name))->ugaqcouwcuiaemgo("\x70\x6f\x73\x74\137\164\x79\160\x65")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto uecagaicwccecikw;
        wiwykgmceuaoeqks:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto qcggaygooaigauwu;
        }
        goto weaaqgwewmkwwciw;
        wuiwysygcwqscigy:
        $mksyucucyswaukig = get_queried_object();
        goto ewmaqwoqyggwucag;
        cyggoamqmaisueam:
        yiyigymygeeowoms:
        goto ecacgamqsegoqaug;
        myiqqkogcqekgqiq:
        if (is_author()) {
            goto ywigmmoegqeggysg;
        }
        goto qyewgcsqgmyaocco;
        wuikyqcaoeiggqmq:
        wmesugyccceqgekg:
        goto ismcqqkiosumseue;
        uweemmwsoqkmekwy:
        iakcwkiqcswmeygo:
        goto guyscyosaqwiaaoc;
        igocqgwwyscegcoo:
        iyiwiyiuaagacugy:
        goto ssauiqekekegaucy;
        waeeskqmeqwiyysa:
        kqcqgmsgiggceyss:
        goto qmowaeuskymgicac;
        wekaickwcioowesg:
        $qscaoekmoooeuyqg = ManipulateUser::get(get_query_var("\x61\165\164\x68\157\x72"), true);
        goto koccukqciscmgeuo;
        ismcqqkiosumseue:
        $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig);
        goto eswcmcmguawawsya;
        msamwsmoqyooagqs:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::symuoymymumgwkaw())->ugaqcouwcuiaemgo("\150\x6f\x6d\145");
        goto aqimseoockakwaek;
        uggycmgqqyqeacas:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\131"), get_the_time("\106"), get_the_time("\x64")))->ugaqcouwcuiaemgo("\x64\141\171");
        goto aaaquaiiomywcyie;
        uecagaicwccecikw:
        goto csmewseacwwiskqi;
        goto cyggoamqmaisueam;
        iosaeiaommgcgsyq:
        goto csmewseacwwiskqi;
        goto waeeskqmeqwiyysa;
        uioiawwiiuaycmqi:
        msyoyikcumueukue:
        goto uggycmgqqyqeacas;
        gkmiagqgacyogaoy:
        miqyaiywugkkgwie:
        goto osieesqoygmqkski;
        ecacgamqsegoqaug:
        $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\64\x30\x34");
        goto ymsugasumawwwgka;
        omcgwcaewggkyekk:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\x74\141\x67\137\x69\x64"), "\x70\157\163\164\137\x74\x61\147"))->ugaqcouwcuiaemgo("\164\141\x78\157\156\157\155\171")->aseocggwwegcmqes("\x74\141\x67");
        goto qyeogkiaggyykewa;
        ewmaqwoqyggwucag:
        $yyimiwcuegayoskq = new PageInfo();
        goto sqykqekmsogswkog;
        aaaquaiiomywcyie:
        goto csmewseacwwiskqi;
        goto akuwqeaouicqskgu;
        caegckokkmueeags:
        goto csmewseacwwiskqi;
        goto igocqgwwyscegcoo;
        iwoisseyosimeiwg:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\131"), get_the_time("\x46")))->ugaqcouwcuiaemgo("\155\157\x6e\164\x68");
        goto scgayeiigokkyksu;
        qyewgcsqgmyaocco:
        if (is_single() && !DecoratorQuery::aauyuieeeaakygki()) {
            goto iakcwkiqcswmeygo;
        }
        goto ccyuokyeykkmwqkc;
        kiecqswmwgwmackc:
        $yyimiwcuegayoskq->cggwsuueqwqscgei(is_paged());
        goto eqmimgekqkqqmcca;
        omyiaeqssiowmeyq:
        iyywoeosyegimygc:
        goto qugqcmywiswaoigo;
        qugqcmywiswaoigo:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($mksyucucyswaukig, true);
        goto muywyiaqscwgmeoi;
        qycwewyaymciuaow:
        goto csmewseacwwiskqi;
        goto egkuaomeucwoggsm;
        wsguekmucgeaocgu:
        goto csmewseacwwiskqi;
        goto gkmiagqgacyogaoy;
        sykeuqwqugkeigig:
        if (is_404()) {
            goto yiyigymygeeowoms;
        }
        goto rguugekykscwiaca;
        ocqgosucokgqukws:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAttachment::qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x61\x74\164\141\143\150\x6d\x65\156\x74");
        goto mcuamuokmoskmwky;
        wcaysaykacysmkue:
        goto csmewseacwwiskqi;
        goto uweemmwsoqkmekwy;
        scgayeiigokkyksu:
        goto csmewseacwwiskqi;
        goto uioiawwiiuaycmqi;
        eswcmcmguawawsya:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo("\164\x61\170\x6f\x6e\157\155\171")->aseocggwwegcmqes($kesssewsiegssiya);
        goto ouqkcsiuwymsyyac;
        weaaqgwewmkwwciw:
        if (is_category()) {
            goto aakioaiukcgicqma;
        }
        goto mgocwmsiykiigeme;
        mcuamuokmoskmwky:
        goto csmewseacwwiskqi;
        goto omyiaeqssiowmeyq;
        rguugekykscwiaca:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateServer::ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\165\156\153\x6e\x6f\167\x6e");
        goto iosaeiaommgcgsyq;
        emeayeegwmicuiqq:
    }
    
    public static function ycqquoiyyuesegsy($post = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto ogygmqoisqiasisc;
        uaokcgsoaemmiqou:
        $migiiksoiymissge = ManipulateServer::auksikwsewaywikq();
        goto igguimucuuyekecy;
        amwoyceicgucwuca:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto mmeuuskqmmyaesga;
        mmeuuskqmmyaesga:
        goto iggeguwkkemeoksm;
        goto qouscuqwwookaiea;
        qcoagmaceeioumey:
        return trailingslashit($migiiksoiymissge);
        goto uaqieigykmeagcoi;
        ogygmqoisqiasisc:
        $migiiksoiymissge = null;
        goto myccssugyykigeie;
        eckqskkgosseskmc:
        global $wp;
        goto acmaoyccqewmweaw;
        qouscuqwwookaiea:
        gyauiikaoigoeyyq:
        goto uaokcgsoaemmiqou;
        omoeomgwkeyyuews:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto gywgyugckkqscaao;
        }
        goto uswqukaouqwuocik;
        wakwyywuumiqsmsi:
        goto iggeguwkkemeoksm;
        goto sikagsogeweqwqwe;
        myccssugyykigeie:
        if ($post) {
            goto qygawwowocwskuqu;
        }
        goto mwcaeiokmsaacsac;
        kuacwismecyuequy:
        iggeguwkkemeoksm:
        goto qcoagmaceeioumey;
        sikagsogeweqwqwe:
        qygawwowocwskuqu:
        goto amwoyceicgucwuca;
        acmaoyccqewmweaw:
        $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($wp->request);
        goto kuacwismecyuequy;
        ugoueuoakwywqsos:
        suswiwiacoeosiuu:
        goto wmyewgwkuyyswgge;
        wmyewgwkuyyswgge:
        $migiiksoiymissge = self::symuoymymumgwkaw();
        goto uamaycseqskcgogs;
        igguimucuuyekecy:
        goto iggeguwkkemeoksm;
        goto ugoueuoakwywqsos;
        uswqukaouqwuocik:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto wakwyywuumiqsmsi;
        agewogomsgsaeiss:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto suswiwiacoeosiuu;
        }
        goto omoeomgwkeyyuews;
        mwcaeiokmsaacsac:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto gyauiikaoigoeyyq;
        }
        goto agewogomsgsaeiss;
        yukqeyeyuucieqga:
        gywgyugckkqscaao:
        goto eckqskkgosseskmc;
        uamaycseqskcgogs:
        goto iggeguwkkemeoksm;
        goto yukqeyeyuucieqga;
        uaqieigykmeagcoi:
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto oqssaoscmiskagum;
        ueikewqggcwskseu:
        goto uwwkacwywyygyomc;
        goto ciwcueuqsueyeyeu;
        scioseuqqegcycuu:
        eyqugyuuucmscwqg:
        goto egoewmaccsammqkc;
        wscyocimqesyaqeu:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto ueikewqggcwskseu;
        ciwcueuqsueyeyeu:
        ckgqqiewiuyycyee:
        goto ooasiqaamqsiuqio;
        egcakiyaioiqacsg:
        $sqeykgyoooqysmca = self::waaisqccqacqeium();
        goto wcywgsiukiucoyau;
        mkkeagwoaksoqsii:
        ciqusemcegueoegm:
        goto uaaouwkcigacguou;
        kckcsuuiykyaawke:
        gguiymqokicqscom:
        goto egcakiyaioiqacsg;
        taqemmwguqueqemw:
        $iayakwckycsumkqa = DecoratorPost::wieoiwogwmcwukom();
        goto amkyoauqecoimiau;
        uyqqcioceqguesgw:
        goto uwwkacwywyygyomc;
        goto mqukeuyogggewmmu;
        egoewmaccsammqkc:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::oigaewqgekgugqug(), $gioggcykgoikcwiy);
        goto squouqwsoywkecwy;
        ewauqkmweawmkgas:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto smewgosmeuaqukya;
        }
        goto wscyocimqesyaqeu;
        uyqmicaayqwwommo:
        goto uwwkacwywyygyomc;
        goto scioseuqqegcycuu;
        amkyoauqecoimiau:
        uwwkacwywyygyomc:
        goto uueakweiqiqqukes;
        qkiqgucaomigsesq:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto eyqugyuuucmscwqg;
        }
        goto uaeuiiegyuoocksu;
        muaoymyciyauqiae:
        auymguqowwoccwiq:
        goto uyqqcioceqguesgw;
        ukkegcmwcuymceua:
        if ($post) {
            goto ckgqqiewiuyycyee;
        }
        goto qkiqgucaomigsesq;
        wcywgsiukiucoyau:
        if (!$sqeykgyoooqysmca) {
            goto auymguqowwoccwiq;
        }
        goto iamagkcimokqwswc;
        iamagkcimokqwswc:
        $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export;
        goto muaoymyciyauqiae;
        uueakweiqiqqukes:
        return $iayakwckycsumkqa;
        goto ogqgmqiweiwqeyck;
        oqssaoscmiskagum:
        $iayakwckycsumkqa = null;
        goto ukkegcmwcuymceua;
        iiqwggyqyekwkako:
        goto uwwkacwywyygyomc;
        goto kckcsuuiykyaawke;
        aqqemqcsowckquqa:
        if (self::sqyyemqmmgmyiaam()) {
            goto gguiymqokicqscom;
        }
        goto ewauqkmweawmkgas;
        uaaouwkcigacguou:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::cykwscocqwykiocm(), $gioggcykgoikcwiy);
        goto iiqwggyqyekwkako;
        mqukeuyogggewmmu:
        smewgosmeuaqukya:
        goto taqemmwguqueqemw;
        uaeuiiegyuoocksu:
        if (self::okiaumcqquyioqcy()) {
            goto ciqusemcegueoegm;
        }
        goto aqqemqcsowckquqa;
        squouqwsoywkecwy:
        goto uwwkacwywyygyomc;
        goto mkkeagwoaksoqsii;
        ooasiqaamqsiuqio:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto uyqmicaayqwwommo;
        ogqgmqiweiwqeyck:
    }
    
    public static function agegeeiiacceomke($aaokuekaimigoyue, $meqocwsecsywiiqs, $omkysikckkcieckq = null, $ywmkwiwkosakssii = [])
    {
        goto amaqgiegqwsmcqak;
        qqgmsukugueeaesq:
        DecoratorOption::update($omkysikckkcieckq, $suaemuyiacqyugsm);
        goto acqyyksaoeeomiia;
        ssmawuwisimwmqsa:
        oskmiqqwqkuyugqq:
        goto gqacwwimmmoswagw;
        kkwammqmykqmseky:
        if (!$suaemuyiacqyugsm) {
            goto oskmiqqwqkuyugqq;
        }
        goto oaeqccuiuqwqomeg;
        gkcqguoasqokuaug:
        if ($suaemuyiacqyugsm) {
            goto qesiqimsweuqacgc;
        }
        goto uagqceymsywggcgs;
        amaqgiegqwsmcqak:
        $suaemuyiacqyugsm = DecoratorOption::get($omkysikckkcieckq);
        goto wwockyuqacckgmkm;
        acqyyksaoeeomiia:
        waeweckgowcciukq:
        goto wmysaywgeqwcaims;
        gqacwwimmmoswagw:
        if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) {
            goto ooisukscqugmceuy;
        }
        goto gmgomyaaquiiekcg;
        wwockyuqacckgmkm:
        $mksyucucyswaukig = null;
        goto kkwammqmykqmseky;
        oaeqccuiuqwqomeg:
        $mksyucucyswaukig = self::get($suaemuyiacqyugsm);
        goto ssmawuwisimwmqsa;
        uagqceymsywggcgs:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x6f\x73\x74\x5f\164\x69\164\154\145" => $meqocwsecsywiiqs, "\160\x6f\x73\x74\137\x6e\x61\155\145" => $aaokuekaimigoyue, "\160\157\163\x74\x5f\163\164\141\x74\165\163" => "\x70\165\142\154\x69\x73\150"]);
        goto omysmgiqyswuigkq;
        cqomyeiacimqacuw:
        qesiqimsweuqacgc:
        goto myoocyaewqimqeui;
        gkoeukkaesoaseqg:
        DecoratorOption::update($omkysikckkcieckq, self::mwikyscisascoeea($suaemuyiacqyugsm));
        goto emmwgomqmskywumg;
        ceacseyocykwqyyw:
        if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) {
            goto waeweckgowcciukq;
        }
        goto qqgmsukugueeaesq;
        omysmgiqyswuigkq:
        $suaemuyiacqyugsm = self::insert("\x70\x61\147\x65", $ywmkwiwkosakssii);
        goto ceacseyocykwqyyw;
        gmgomyaaquiiekcg:
        $suaemuyiacqyugsm = DecoratorPost::qamwegcyimgcqksw($aaokuekaimigoyue, "\160\141\147\145");
        goto gkoeukkaesoaseqg;
        emmwgomqmskywumg:
        ooisukscqugmceuy:
        goto gkcqguoasqokuaug;
        wmysaywgeqwcaims:
        flush_rewrite_rules(false);
        goto cqomyeiacimqacuw;
        myoocyaewqimqeui:
    }
    
    public static function ssacaeeassumyuws(?string $migiiksoiymissge = null, $aqykuigiuwmmcieu = self::OBJECT, $useksmwkuswkwcqg = "\x70\141\x67\145")
    {
        goto yqgcksakiqqsuqec;
        yqgcksakiqqsuqec:
        if ($migiiksoiymissge) {
            goto saimqwoekaggasik;
        }
        goto kyqwosmmiuemmkug;
        eoyikamgogkskgao:
        $mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH);
        goto ksimceecsmqscemk;
        ksimceecsmqscemk:
        return DecoratorPost::qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu);
        goto jycseygmyuiggacq;
        kyqwosmmiuemmkug:
        $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc();
        goto ugmkgeamwiemieag;
        ugmkgeamwiemieag:
        saimqwoekaggasik:
        goto eoyikamgogkskgao;
        jycseygmyuiggacq:
    }
}

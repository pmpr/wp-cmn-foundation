<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        oggcgggiciyscsek:
        mkiskyuukeickeio:
        goto ausiqgkmacksmyce;
        oeimecucwuoikscu:
        $oikyogsosqcyueay = self::get($oikyogsosqcyueay);
        goto oggcgggiciyscsek;
        ausiqgkmacksmyce:
        return $oikyogsosqcyueay;
        goto qmweiqisqiikwwcg;
        myciimmeauksamaa:
        if (!$oikyogsosqcyueay) {
            goto mkiskyuukeickeio;
        }
        goto oeimecucwuoikscu;
        qmweiqisqiikwwcg:
    }
    
    public static function eokiwumgqmymgyoa()
    {
        return DecoratorOption::get("\x70\x61\147\145\137\146\157\162\137\x70\157\x73\x74\163");
    }
    
    public static function icikwuksyiceccmo()
    {
        goto gymooqgyigeucisi;
        wakwucssymmkyoqy:
        $aaokuekaimigoyue = "\x62\154\157\147";
        goto smieosasoeageewe;
        gowmoegakqaokqwy:
        return $aaokuekaimigoyue;
        goto cqmwuskwgsuyqiku;
        gymooqgyigeucisi:
        $oikyogsosqcyueay = self::cykwscocqwykiocm();
        goto wakwucssymmkyoqy;
        ssequouykiacumek:
        $aaokuekaimigoyue = self::aqcogscycyycgkuq($oikyogsosqcyueay);
        goto wyyoauyqkccwquye;
        smieosasoeageewe:
        if (!$oikyogsosqcyueay instanceof WP_Post) {
            goto kiuoaeesiiaqskma;
        }
        goto ssequouykiacumek;
        wyyoauyqkccwquye:
        kiuoaeesiiaqskma:
        goto gowmoegakqaokqwy;
        cqmwuskwgsuyqiku:
    }
    
    public static function oigaewqgekgugqug()
    {
        return DecoratorOption::get("\x70\x61\x67\x65\137\157\x6e\137\146\x72\157\x6e\164");
    }
    
    public static function awgkmqkqkqawmqcu() : bool
    {
        goto guwwcsoquaaiywwg;
        guwwcsoquaaiywwg:
        $aiamqeawckcsuaou = ManipulateServer::get("\x61\143\164\151\157\x6e");
        goto sqokciesoswwaase;
        sqokciesoswwaase:
        $syuuigcamkiegaqy = ManipulateServer::oymwkcegiigooaqm("\x70\x61\147\145\156\x6f\x77");
        goto osqmooccocasiwwi;
        osqmooccocasiwwi:
        return $syuuigcamkiegaqy === "\x77\160\x2d\154\x6f\x67\151\x6e\x2e\160\150\160" || in_array($aiamqeawckcsuaou, ["\162\x70", "\x6c\157\x73\x74\160\141\x73\x73\167\157\x72\144", "\x72\x65\147\151\163\164\x65\162"]);
        goto suaagcyyqywuawcy;
        suaagcyyqywuawcy:
    }
    
    public static function symuoymymumgwkaw()
    {
        goto owcmkccqayuewmyi;
        omcycqocymkeiawq:
        return $migiiksoiymissge;
        goto wkmugsoecikiakqq;
        uuuyqoukemmekmwy:
        $migiiksoiymissge = self::ycqquoiyyuesegsy($oikyogsosqcyueay);
        goto agyimagkmcyciuqw;
        gqyiykessecacuqq:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto qiwmescucyayywwe;
        agyimagkmcyciuqw:
        yeuouysckyiiqgkk:
        goto omcycqocymkeiawq;
        qiwmescucyayywwe:
        if (!$oikyogsosqcyueay) {
            goto yeuouysckyiiqgkk;
        }
        goto uuuyqoukemmekmwy;
        owcmkccqayuewmyi:
        $migiiksoiymissge = null;
        goto gqyiykessecacuqq;
        wkmugsoecikiakqq:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        goto sgewiwogqyswqiso;
        ykiawsemqwsweosg:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto wwwoeskoucoimecg;
        }
        goto iecsyeoooyqcuwcs;
        wqwgaqeywoosssgo:
        caasemucaegsgiic:
        goto egigiaiiwcmwmumi;
        qoqwwimiekwmggwi:
        goto ygoayeaicqikqmii;
        goto uykawkeowqygeweo;
        sogsyogucsmisoau:
        return $meqocwsecsywiiqs;
        goto soqwgawucoyckiso;
        ioacggcqeywkqemu:
        ygoayeaicqikqmii:
        goto aquoociuuukgecia;
        mwmoywcyqwimoeye:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto mqwgiouuekicqwqq;
        }
        goto kwqqkyscmkmmycky;
        wocsaeyyawcwmsiw:
        goto ygoayeaicqikqmii;
        goto oeqaaoswcwwwkkww;
        aquoociuuukgecia:
        iawoeomqmeacqwwm:
        goto sogsyogucsmisoau;
        iuwqqquugqmiacic:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco(self::cykwscocqwykiocm());
        goto wocsaeyyawcwmsiw;
        sgewiwogqyswqiso:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco($post);
        goto qquiekauycukmquy;
        egigiaiiwcmwmumi:
        goto ygoayeaicqikqmii;
        goto emmssoaeueiowaeg;
        iecsyeoooyqcuwcs:
        if (self::okiaumcqquyioqcy()) {
            goto okwqmqsuewwwsykg;
        }
        goto ssaqqyiuueayyauu;
        qwmsyyymeegigkio:
        $meqocwsecsywiiqs = $useksmwkuswkwcqg->label;
        goto wqwgaqeywoosssgo;
        mesaqgsmsoqowuki:
        $meqocwsecsywiiqs = DecoratorPost::syeuyeikogukksam();
        goto ioacggcqeywkqemu;
        oeqaaoswcwwwkkww:
        mqacwakmquqyikgg:
        goto aswygkquwkiaqews;
        ssaqqyiuueayyauu:
        if (DecoratorQuery::moegwqkekcawsggs()) {
            goto mqacwakmquqyikgg;
        }
        goto mwmoywcyqwimoeye;
        aswygkquwkiaqews:
        $useksmwkuswkwcqg = self::waaisqccqacqeium();
        goto asayieoqoamuimcc;
        emmssoaeueiowaeg:
        mqwgiouuekicqwqq:
        goto mesaqgsmsoqowuki;
        auqgkmewqmiewwww:
        $meqocwsecsywiiqs = get_bloginfo("\x6e\141\x6d\145");
        goto qoqwwimiekwmggwi;
        qquiekauycukmquy:
        if ($post) {
            goto iawoeomqmeacqwwm;
        }
        goto ykiawsemqwsweosg;
        acscqmesgcgqumse:
        wwwoeskoucoimecg:
        goto auqgkmewqmiewwww;
        uykawkeowqygeweo:
        okwqmqsuewwwsykg:
        goto iuwqqquugqmiacic;
        kwqqkyscmkmmycky:
        goto ygoayeaicqikqmii;
        goto acscqmesgcgqumse;
        asayieoqoamuimcc:
        if (!$useksmwkuswkwcqg) {
            goto caasemucaegsgiic;
        }
        goto qwmsyyymeegigkio;
        soqwgawucoyckiso:
    }
    
    public static function somwagieycgkcyec()
    {
        return self::ycqquoiyyuesegsy(self::oigaewqgekgugqug());
    }
    
    public static function iqoacwuiemooiysg() : PageInfo
    {
        goto wuiwysygcwqscigy;
        iaaeukgwkeyewuwk:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\x63\x61\164"), "\143\141\164\145\147\x6f\x72\x79"))->ugaqcouwcuiaemgo("\164\141\170\157\156\157\155\x79")->aseocggwwegcmqes("\x63\141\164\145\x67\157\x72\x79");
        goto agekuuacwqkmswoi;
        msamwsmoqyooagqs:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::symuoymymumgwkaw())->ugaqcouwcuiaemgo("\x68\157\x6d\x65");
        goto aqimseoockakwaek;
        ueaayiqayygcgoqi:
        qcggaygooaigauwu:
        goto msamwsmoqyooagqs;
        wcaysaykacysmkue:
        goto csmewseacwwiskqi;
        goto uweemmwsoqkmekwy;
        gkmiagqgacyogaoy:
        miqyaiywugkkgwie:
        goto osieesqoygmqkski;
        omcgwcaewggkyekk:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\164\x61\x67\137\151\x64"), "\x70\x6f\x73\164\137\x74\141\147"))->ugaqcouwcuiaemgo("\164\141\x78\157\x6e\x6f\155\x79")->aseocggwwegcmqes("\x74\x61\x67");
        goto qyeogkiaggyykewa;
        omyiaeqssiowmeyq:
        iyywoeosyegimygc:
        goto qugqcmywiswaoigo;
        mcuamuokmoskmwky:
        goto csmewseacwwiskqi;
        goto omyiaeqssiowmeyq;
        akyoausyiwisayoe:
        if (self::sqyyemqmmgmyiaam()) {
            goto iyywoeosyegimygc;
        }
        goto sykeuqwqugkeigig;
        qwigokiuwsgywmqe:
        ysqwqwciewcauaso:
        goto omcgwcaewggkyekk;
        waeeskqmeqwiyysa:
        kqcqgmsgiggceyss:
        goto qmowaeuskymgicac;
        osieesqoygmqkski:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x70\141\147\145");
        goto qycwewyaymciuaow;
        ouqkcsiuwymsyyac:
        goto csmewseacwwiskqi;
        goto iuewwmweyqcmyoku;
        yokwocmaaycmkkao:
        if (DecoratorQuery::aauyuieeeaakygki()) {
            goto ggsuykssmeuwgmee;
        }
        goto akyoausyiwisayoe;
        iosaeiaommgcgsyq:
        goto csmewseacwwiskqi;
        goto waeeskqmeqwiyysa;
        uioiawwiiuaycmqi:
        msyoyikcumueukue:
        goto uggycmgqqyqeacas;
        ccyuokyeykkmwqkc:
        if (is_page()) {
            goto miqyaiywugkkgwie;
        }
        goto yokwocmaaycmkkao;
        ssauiqekekegaucy:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\x59")))->ugaqcouwcuiaemgo("\x79\145\141\x72");
        goto sgywygyawgwgcisg;
        eswcmcmguawawsya:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo("\x74\141\x78\x6f\156\157\x6d\x79")->aseocggwwegcmqes($kesssewsiegssiya);
        goto ouqkcsiuwymsyyac;
        aqimseoockakwaek:
        goto csmewseacwwiskqi;
        goto imumuuckgaiyaqou;
        caegckokkmueeags:
        goto csmewseacwwiskqi;
        goto igocqgwwyscegcoo;
        uweemmwsoqkmekwy:
        iakcwkiqcswmeygo:
        goto guyscyosaqwiaaoc;
        mgocwmsiykiigeme:
        if (is_tag()) {
            goto ysqwqwciewcauaso;
        }
        goto maqseauogscyeogw;
        ymsugasumawwwgka:
        csmewseacwwiskqi:
        goto kiecqswmwgwmackc;
        okssskeakmywwwii:
        if (is_day()) {
            goto msyoyikcumueukue;
        }
        goto myiqqkogcqekgqiq;
        aaaquaiiomywcyie:
        goto csmewseacwwiskqi;
        goto akuwqeaouicqskgu;
        qyeogkiaggyykewa:
        goto csmewseacwwiskqi;
        goto wuikyqcaoeiggqmq;
        qyewgcsqgmyaocco:
        if (is_single() && !DecoratorQuery::aauyuieeeaakygki()) {
            goto iakcwkiqcswmeygo;
        }
        goto ccyuokyeykkmwqkc;
        ocqgosucokgqukws:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAttachment::qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo("\141\x74\x74\x61\x63\150\155\x65\156\164");
        goto mcuamuokmoskmwky;
        cyggoamqmaisueam:
        yiyigymygeeowoms:
        goto ecacgamqsegoqaug;
        sqykqekmsogswkog:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto kqcqgmsgiggceyss;
        }
        goto wiwykgmceuaoeqks;
        scgayeiigokkyksu:
        goto csmewseacwwiskqi;
        goto uioiawwiiuaycmqi;
        sgywygyawgwgcisg:
        goto csmewseacwwiskqi;
        goto esegymsakukwacyq;
        ayqomgiesquiieke:
        if (is_month()) {
            goto ygosgmiiugiiscsu;
        }
        goto okssskeakmywwwii;
        qmowaeuskymgicac:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::somwagieycgkcyec())->ugaqcouwcuiaemgo("\146\162\x6f\156\x74\x5f\x70\141\x67\x65");
        goto qsceaisugocqyckq;
        imumuuckgaiyaqou:
        aakioaiukcgicqma:
        goto iaaeukgwkeyewuwk;
        esegymsakukwacyq:
        ygosgmiiugiiscsu:
        goto iwoisseyosimeiwg;
        koccukqciscmgeuo:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo("\x61\165\164\150\x6f\162");
        goto wcaysaykacysmkue;
        wekaickwcioowesg:
        $qscaoekmoooeuyqg = ManipulateUser::get(get_query_var("\x61\x75\164\150\x6f\162"), true);
        goto koccukqciscmgeuo;
        myiqqkogcqekgqiq:
        if (is_author()) {
            goto ywigmmoegqeggysg;
        }
        goto qyewgcsqgmyaocco;
        eqmimgekqkqqmcca:
        return $yyimiwcuegayoskq;
        goto emeayeegwmicuiqq;
        muywyiaqscwgmeoi:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::mqgeysameoesmuqw($useksmwkuswkwcqg->name))->ugaqcouwcuiaemgo("\x70\x6f\x73\164\137\164\x79\160\145")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto uecagaicwccecikw;
        ecacgamqsegoqaug:
        $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\64\60\64");
        goto ymsugasumawwwgka;
        igocqgwwyscegcoo:
        iyiwiyiuaagacugy:
        goto ssauiqekekegaucy;
        ewmaqwoqyggwucag:
        $yyimiwcuegayoskq = new PageInfo();
        goto sqykqekmsogswkog;
        wuiwysygcwqscigy:
        $mksyucucyswaukig = get_queried_object();
        goto ewmaqwoqyggwucag;
        iekwekemogoyomuk:
        if (is_year()) {
            goto iyiwiyiuaagacugy;
        }
        goto ayqomgiesquiieke;
        sykeuqwqugkeigig:
        if (is_404()) {
            goto yiyigymygeeowoms;
        }
        goto rguugekykscwiaca;
        qycwewyaymciuaow:
        goto csmewseacwwiskqi;
        goto egkuaomeucwoggsm;
        guyscyosaqwiaaoc:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\163\x69\156\147\154\145")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto wsguekmucgeaocgu;
        wsguekmucgeaocgu:
        goto csmewseacwwiskqi;
        goto gkmiagqgacyogaoy;
        wuikyqcaoeiggqmq:
        wmesugyccceqgekg:
        goto ismcqqkiosumseue;
        akuwqeaouicqskgu:
        ywigmmoegqeggysg:
        goto wekaickwcioowesg;
        qsceaisugocqyckq:
        goto csmewseacwwiskqi;
        goto ueaayiqayygcgoqi;
        uecagaicwccecikw:
        goto csmewseacwwiskqi;
        goto cyggoamqmaisueam;
        suaggqsigckogyek:
        if (is_search()) {
            goto iimquseysaiomgas;
        }
        goto iekwekemogoyomuk;
        maqseauogscyeogw:
        if (is_tax()) {
            goto wmesugyccceqgekg;
        }
        goto suaggqsigckogyek;
        rguugekykscwiaca:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateServer::ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\165\x6e\x6b\156\157\167\x6e");
        goto iosaeiaommgcgsyq;
        iwoisseyosimeiwg:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\131"), get_the_time("\x46")))->ugaqcouwcuiaemgo("\x6d\157\156\x74\x68");
        goto scgayeiigokkyksu;
        wiwykgmceuaoeqks:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto qcggaygooaigauwu;
        }
        goto weaaqgwewmkwwciw;
        uggycmgqqyqeacas:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\x59"), get_the_time("\106"), get_the_time("\144")))->ugaqcouwcuiaemgo("\144\141\x79");
        goto aaaquaiiomywcyie;
        kiecqswmwgwmackc:
        $yyimiwcuegayoskq->cggwsuueqwqscgei(is_paged());
        goto eqmimgekqkqqmcca;
        iuewwmweyqcmyoku:
        iimquseysaiomgas:
        goto cyioiakwwqmokgye;
        cyioiakwwqmokgye:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_search_query())->ugaqcouwcuiaemgo("\163\x65\x61\162\x63\x68");
        goto caegckokkmueeags;
        weaaqgwewmkwwciw:
        if (is_category()) {
            goto aakioaiukcgicqma;
        }
        goto mgocwmsiykiigeme;
        egkuaomeucwoggsm:
        ggsuykssmeuwgmee:
        goto ocqgosucokgqukws;
        ismcqqkiosumseue:
        $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig);
        goto eswcmcmguawawsya;
        agekuuacwqkmswoi:
        goto csmewseacwwiskqi;
        goto qwigokiuwsgywmqe;
        qugqcmywiswaoigo:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($mksyucucyswaukig, true);
        goto muywyiaqscwgmeoi;
        emeayeegwmicuiqq:
    }
    
    public static function ycqquoiyyuesegsy($post = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto ogygmqoisqiasisc;
        agewogomsgsaeiss:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto suswiwiacoeosiuu;
        }
        goto omoeomgwkeyyuews;
        sikagsogeweqwqwe:
        qygawwowocwskuqu:
        goto amwoyceicgucwuca;
        acmaoyccqewmweaw:
        $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($wp->request);
        goto kuacwismecyuequy;
        myccssugyykigeie:
        if ($post) {
            goto qygawwowocwskuqu;
        }
        goto mwcaeiokmsaacsac;
        uamaycseqskcgogs:
        goto iggeguwkkemeoksm;
        goto yukqeyeyuucieqga;
        ogygmqoisqiasisc:
        $migiiksoiymissge = null;
        goto myccssugyykigeie;
        igguimucuuyekecy:
        goto iggeguwkkemeoksm;
        goto ugoueuoakwywqsos;
        mwcaeiokmsaacsac:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto gyauiikaoigoeyyq;
        }
        goto agewogomsgsaeiss;
        wakwyywuumiqsmsi:
        goto iggeguwkkemeoksm;
        goto sikagsogeweqwqwe;
        ugoueuoakwywqsos:
        suswiwiacoeosiuu:
        goto wmyewgwkuyyswgge;
        amwoyceicgucwuca:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto mmeuuskqmmyaesga;
        mmeuuskqmmyaesga:
        goto iggeguwkkemeoksm;
        goto qouscuqwwookaiea;
        qcoagmaceeioumey:
        return trailingslashit($migiiksoiymissge);
        goto uaqieigykmeagcoi;
        yukqeyeyuucieqga:
        gywgyugckkqscaao:
        goto eckqskkgosseskmc;
        uswqukaouqwuocik:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto wakwyywuumiqsmsi;
        uaokcgsoaemmiqou:
        $migiiksoiymissge = ManipulateServer::auksikwsewaywikq();
        goto igguimucuuyekecy;
        omoeomgwkeyyuews:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto gywgyugckkqscaao;
        }
        goto uswqukaouqwuocik;
        qouscuqwwookaiea:
        gyauiikaoigoeyyq:
        goto uaokcgsoaemmiqou;
        kuacwismecyuequy:
        iggeguwkkemeoksm:
        goto qcoagmaceeioumey;
        eckqskkgosseskmc:
        global $wp;
        goto acmaoyccqewmweaw;
        wmyewgwkuyyswgge:
        $migiiksoiymissge = self::symuoymymumgwkaw();
        goto uamaycseqskcgogs;
        uaqieigykmeagcoi:
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto oqssaoscmiskagum;
        ueikewqggcwskseu:
        goto uwwkacwywyygyomc;
        goto ciwcueuqsueyeyeu;
        oqssaoscmiskagum:
        $iayakwckycsumkqa = null;
        goto ukkegcmwcuymceua;
        iamagkcimokqwswc:
        $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export;
        goto muaoymyciyauqiae;
        uaeuiiegyuoocksu:
        if (self::okiaumcqquyioqcy()) {
            goto ciqusemcegueoegm;
        }
        goto aqqemqcsowckquqa;
        kckcsuuiykyaawke:
        gguiymqokicqscom:
        goto egcakiyaioiqacsg;
        iiqwggyqyekwkako:
        goto uwwkacwywyygyomc;
        goto kckcsuuiykyaawke;
        egoewmaccsammqkc:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::oigaewqgekgugqug(), $gioggcykgoikcwiy);
        goto squouqwsoywkecwy;
        muaoymyciyauqiae:
        auymguqowwoccwiq:
        goto uyqqcioceqguesgw;
        uueakweiqiqqukes:
        return $iayakwckycsumkqa;
        goto ogqgmqiweiwqeyck;
        mkkeagwoaksoqsii:
        ciqusemcegueoegm:
        goto uaaouwkcigacguou;
        taqemmwguqueqemw:
        $iayakwckycsumkqa = DecoratorPost::wieoiwogwmcwukom();
        goto amkyoauqecoimiau;
        egcakiyaioiqacsg:
        $sqeykgyoooqysmca = self::waaisqccqacqeium();
        goto wcywgsiukiucoyau;
        wcywgsiukiucoyau:
        if (!$sqeykgyoooqysmca) {
            goto auymguqowwoccwiq;
        }
        goto iamagkcimokqwswc;
        ooasiqaamqsiuqio:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto uyqmicaayqwwommo;
        amkyoauqecoimiau:
        uwwkacwywyygyomc:
        goto uueakweiqiqqukes;
        uyqqcioceqguesgw:
        goto uwwkacwywyygyomc;
        goto mqukeuyogggewmmu;
        wscyocimqesyaqeu:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto ueikewqggcwskseu;
        ewauqkmweawmkgas:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto smewgosmeuaqukya;
        }
        goto wscyocimqesyaqeu;
        scioseuqqegcycuu:
        eyqugyuuucmscwqg:
        goto egoewmaccsammqkc;
        uaaouwkcigacguou:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::cykwscocqwykiocm(), $gioggcykgoikcwiy);
        goto iiqwggyqyekwkako;
        qkiqgucaomigsesq:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto eyqugyuuucmscwqg;
        }
        goto uaeuiiegyuoocksu;
        ukkegcmwcuymceua:
        if ($post) {
            goto ckgqqiewiuyycyee;
        }
        goto qkiqgucaomigsesq;
        uyqmicaayqwwommo:
        goto uwwkacwywyygyomc;
        goto scioseuqqegcycuu;
        mqukeuyogggewmmu:
        smewgosmeuaqukya:
        goto taqemmwguqueqemw;
        squouqwsoywkecwy:
        goto uwwkacwywyygyomc;
        goto mkkeagwoaksoqsii;
        aqqemqcsowckquqa:
        if (self::sqyyemqmmgmyiaam()) {
            goto gguiymqokicqscom;
        }
        goto ewauqkmweawmkgas;
        ciwcueuqsueyeyeu:
        ckgqqiewiuyycyee:
        goto ooasiqaamqsiuqio;
        ogqgmqiweiwqeyck:
    }
    
    public static function agegeeiiacceomke($aaokuekaimigoyue, $meqocwsecsywiiqs, $omkysikckkcieckq = null, $ywmkwiwkosakssii = [])
    {
        goto amaqgiegqwsmcqak;
        oaeqccuiuqwqomeg:
        $mksyucucyswaukig = self::get($suaemuyiacqyugsm);
        goto ssmawuwisimwmqsa;
        qqgmsukugueeaesq:
        DecoratorOption::update($omkysikckkcieckq, $suaemuyiacqyugsm);
        goto acqyyksaoeeomiia;
        gkcqguoasqokuaug:
        if ($suaemuyiacqyugsm) {
            goto qesiqimsweuqacgc;
        }
        goto uagqceymsywggcgs;
        cqomyeiacimqacuw:
        qesiqimsweuqacgc:
        goto myoocyaewqimqeui;
        amaqgiegqwsmcqak:
        $suaemuyiacqyugsm = DecoratorOption::get($omkysikckkcieckq);
        goto wwockyuqacckgmkm;
        omysmgiqyswuigkq:
        $suaemuyiacqyugsm = self::insert("\160\141\x67\x65", $ywmkwiwkosakssii);
        goto ceacseyocykwqyyw;
        kkwammqmykqmseky:
        if (!$suaemuyiacqyugsm) {
            goto oskmiqqwqkuyugqq;
        }
        goto oaeqccuiuqwqomeg;
        ceacseyocykwqyyw:
        if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) {
            goto waeweckgowcciukq;
        }
        goto qqgmsukugueeaesq;
        uagqceymsywggcgs:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\157\163\x74\137\x74\151\x74\154\x65" => $meqocwsecsywiiqs, "\x70\157\x73\164\137\x6e\141\x6d\145" => $aaokuekaimigoyue, "\160\157\163\164\137\x73\x74\141\164\x75\163" => "\160\165\x62\x6c\x69\163\x68"]);
        goto omysmgiqyswuigkq;
        gmgomyaaquiiekcg:
        $suaemuyiacqyugsm = DecoratorPost::qamwegcyimgcqksw($aaokuekaimigoyue, "\x70\x61\x67\145");
        goto gkoeukkaesoaseqg;
        acqyyksaoeeomiia:
        waeweckgowcciukq:
        goto wmysaywgeqwcaims;
        wmysaywgeqwcaims:
        flush_rewrite_rules(false);
        goto cqomyeiacimqacuw;
        gqacwwimmmoswagw:
        if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) {
            goto ooisukscqugmceuy;
        }
        goto gmgomyaaquiiekcg;
        ssmawuwisimwmqsa:
        oskmiqqwqkuyugqq:
        goto gqacwwimmmoswagw;
        wwockyuqacckgmkm:
        $mksyucucyswaukig = null;
        goto kkwammqmykqmseky;
        gkoeukkaesoaseqg:
        DecoratorOption::update($omkysikckkcieckq, self::mwikyscisascoeea($suaemuyiacqyugsm));
        goto emmwgomqmskywumg;
        emmwgomqmskywumg:
        ooisukscqugmceuy:
        goto gkcqguoasqokuaug;
        myoocyaewqimqeui:
    }
    
    public static function ssacaeeassumyuws(?string $migiiksoiymissge = null, $aqykuigiuwmmcieu = self::OBJECT, $useksmwkuswkwcqg = "\160\x61\x67\x65")
    {
        goto yqgcksakiqqsuqec;
        eoyikamgogkskgao:
        $mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH);
        goto ksimceecsmqscemk;
        ugmkgeamwiemieag:
        saimqwoekaggasik:
        goto eoyikamgogkskgao;
        kyqwosmmiuemmkug:
        $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc();
        goto ugmkgeamwiemieag;
        yqgcksakiqqsuqec:
        if ($migiiksoiymissge) {
            goto saimqwoekaggasik;
        }
        goto kyqwosmmiuemmkug;
        ksimceecsmqscemk:
        return DecoratorPost::qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu);
        goto jycseygmyuiggacq;
        jycseygmyuiggacq:
    }
}

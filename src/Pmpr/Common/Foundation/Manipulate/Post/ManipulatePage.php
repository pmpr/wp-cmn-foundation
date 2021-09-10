<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto qkaiqseceoaksyoc;
        myciimmeauksamaa:
        return $oikyogsosqcyueay;
        goto oeimecucwuoikscu;
        mgiqmcyayasueaay:
        kkuisewuceyasium:
        goto myciimmeauksamaa;
        qkaiqseceoaksyoc:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto amckomowuaeagges;
        mkiskyuukeickeio:
        $oikyogsosqcyueay = self::get($oikyogsosqcyueay);
        goto mgiqmcyayasueaay;
        amckomowuaeagges:
        if (!$oikyogsosqcyueay) {
            goto kkuisewuceyasium;
        }
        goto mkiskyuukeickeio;
        oeimecucwuoikscu:
    }
    
    public static function eokiwumgqmymgyoa()
    {
        return DecoratorOption::get("\x70\141\147\x65\137\146\157\x72\x5f\x70\x6f\163\164\163");
    }
    
    public static function icikwuksyiceccmo()
    {
        goto ausiqgkmacksmyce;
        smieosasoeageewe:
        return $aaokuekaimigoyue;
        goto ssequouykiacumek;
        kiuoaeesiiaqskma:
        if (!$oikyogsosqcyueay instanceof WP_Post) {
            goto oggcgggiciyscsek;
        }
        goto gymooqgyigeucisi;
        ausiqgkmacksmyce:
        $oikyogsosqcyueay = self::cykwscocqwykiocm();
        goto qmweiqisqiikwwcg;
        wakwucssymmkyoqy:
        oggcgggiciyscsek:
        goto smieosasoeageewe;
        gymooqgyigeucisi:
        $aaokuekaimigoyue = self::aqcogscycyycgkuq($oikyogsosqcyueay);
        goto wakwucssymmkyoqy;
        qmweiqisqiikwwcg:
        $aaokuekaimigoyue = "\142\x6c\x6f\147";
        goto kiuoaeesiiaqskma;
        ssequouykiacumek:
    }
    
    public static function oigaewqgekgugqug()
    {
        return DecoratorOption::get("\x70\x61\x67\x65\x5f\157\156\137\146\162\x6f\156\x74");
    }
    
    public static function awgkmqkqkqawmqcu() : bool
    {
        goto wyyoauyqkccwquye;
        cqmwuskwgsuyqiku:
        return $syuuigcamkiegaqy === "\167\x70\55\x6c\x6f\147\x69\x6e\x2e\160\x68\x70" || in_array($aiamqeawckcsuaou, ["\x72\160", "\x6c\x6f\x73\164\x70\141\163\163\167\157\162\x64", "\x72\145\x67\x69\x73\164\x65\162"]);
        goto guwwcsoquaaiywwg;
        gowmoegakqaokqwy:
        $syuuigcamkiegaqy = ManipulateServer::oymwkcegiigooaqm("\x70\141\x67\145\156\x6f\167");
        goto cqmwuskwgsuyqiku;
        wyyoauyqkccwquye:
        $aiamqeawckcsuaou = ManipulateServer::get("\141\143\x74\x69\157\x6e");
        goto gowmoegakqaokqwy;
        guwwcsoquaaiywwg:
    }
    
    public static function symuoymymumgwkaw()
    {
        goto osqmooccocasiwwi;
        suaagcyyqywuawcy:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto yeuouysckyiiqgkk;
        yeuouysckyiiqgkk:
        if (!$oikyogsosqcyueay) {
            goto sqokciesoswwaase;
        }
        goto owcmkccqayuewmyi;
        osqmooccocasiwwi:
        $migiiksoiymissge = null;
        goto suaagcyyqywuawcy;
        owcmkccqayuewmyi:
        $migiiksoiymissge = self::ycqquoiyyuesegsy($oikyogsosqcyueay);
        goto gqyiykessecacuqq;
        qiwmescucyayywwe:
        return $migiiksoiymissge;
        goto uuuyqoukemmekmwy;
        gqyiykessecacuqq:
        sqokciesoswwaase:
        goto qiwmescucyayywwe;
        uuuyqoukemmekmwy:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        goto mqacwakmquqyikgg;
        egigiaiiwcmwmumi:
        omcycqocymkeiawq:
        goto emmssoaeueiowaeg;
        auqgkmewqmiewwww:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco(self::cykwscocqwykiocm());
        goto qoqwwimiekwmggwi;
        mqacwakmquqyikgg:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco($post);
        goto mqwgiouuekicqwqq;
        qoqwwimiekwmggwi:
        goto omcycqocymkeiawq;
        goto uykawkeowqygeweo;
        emmssoaeueiowaeg:
        okwqmqsuewwwsykg:
        goto mesaqgsmsoqowuki;
        iawoeomqmeacqwwm:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto wkmugsoecikiakqq;
        }
        goto sgewiwogqyswqiso;
        uykawkeowqygeweo:
        ygoayeaicqikqmii:
        goto iuwqqquugqmiacic;
        wqwgaqeywoosssgo:
        $meqocwsecsywiiqs = DecoratorPost::syeuyeikogukksam();
        goto egigiaiiwcmwmumi;
        qquiekauycukmquy:
        if (DecoratorQuery::moegwqkekcawsggs()) {
            goto ygoayeaicqikqmii;
        }
        goto ykiawsemqwsweosg;
        mesaqgsmsoqowuki:
        return $meqocwsecsywiiqs;
        goto ioacggcqeywkqemu;
        sgewiwogqyswqiso:
        if (self::okiaumcqquyioqcy()) {
            goto caasemucaegsgiic;
        }
        goto qquiekauycukmquy;
        ssaqqyiuueayyauu:
        wkmugsoecikiakqq:
        goto mwmoywcyqwimoeye;
        mqwgiouuekicqwqq:
        if ($post) {
            goto okwqmqsuewwwsykg;
        }
        goto iawoeomqmeacqwwm;
        wocsaeyyawcwmsiw:
        if (!$useksmwkuswkwcqg) {
            goto agyimagkmcyciuqw;
        }
        goto oeqaaoswcwwwkkww;
        kwqqkyscmkmmycky:
        goto omcycqocymkeiawq;
        goto acscqmesgcgqumse;
        mwmoywcyqwimoeye:
        $meqocwsecsywiiqs = get_bloginfo("\156\x61\x6d\x65");
        goto kwqqkyscmkmmycky;
        oeqaaoswcwwwkkww:
        $meqocwsecsywiiqs = $useksmwkuswkwcqg->label;
        goto aswygkquwkiaqews;
        iuwqqquugqmiacic:
        $useksmwkuswkwcqg = self::waaisqccqacqeium();
        goto wocsaeyyawcwmsiw;
        ykiawsemqwsweosg:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto wwwoeskoucoimecg;
        }
        goto iecsyeoooyqcuwcs;
        qwmsyyymeegigkio:
        wwwoeskoucoimecg:
        goto wqwgaqeywoosssgo;
        aswygkquwkiaqews:
        agyimagkmcyciuqw:
        goto asayieoqoamuimcc;
        asayieoqoamuimcc:
        goto omcycqocymkeiawq;
        goto qwmsyyymeegigkio;
        acscqmesgcgqumse:
        caasemucaegsgiic:
        goto auqgkmewqmiewwww;
        iecsyeoooyqcuwcs:
        goto omcycqocymkeiawq;
        goto ssaqqyiuueayyauu;
        ioacggcqeywkqemu:
    }
    
    public static function somwagieycgkcyec()
    {
        return self::ycqquoiyyuesegsy(self::oigaewqgekgugqug());
    }
    
    public static function iqoacwuiemooiysg() : PageInfo
    {
        goto ggsuykssmeuwgmee;
        cyggoamqmaisueam:
        $yyimiwcuegayoskq->cggwsuueqwqscgei(is_paged());
        goto ecacgamqsegoqaug;
        ecacgamqsegoqaug:
        return $yyimiwcuegayoskq;
        goto ymsugasumawwwgka;
        qugqcmywiswaoigo:
        miqyaiywugkkgwie:
        goto muywyiaqscwgmeoi;
        iekwekemogoyomuk:
        if (is_author()) {
            goto iyiwiyiuaagacugy;
        }
        goto ayqomgiesquiieke;
        uggycmgqqyqeacas:
        $qscaoekmoooeuyqg = ManipulateUser::get(get_query_var("\141\165\164\x68\x6f\162"), true);
        goto aaaquaiiomywcyie;
        suaggqsigckogyek:
        if (is_day()) {
            goto iimquseysaiomgas;
        }
        goto iekwekemogoyomuk;
        qycwewyaymciuaow:
        goto aquoociuuukgecia;
        goto egkuaomeucwoggsm;
        iwoisseyosimeiwg:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\131"), get_the_time("\106"), get_the_time("\x64")))->ugaqcouwcuiaemgo("\x64\141\171");
        goto scgayeiigokkyksu;
        akyoausyiwisayoe:
        goto aquoociuuukgecia;
        goto sykeuqwqugkeigig;
        esegymsakukwacyq:
        iimquseysaiomgas:
        goto iwoisseyosimeiwg;
        ssauiqekekegaucy:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\x59"), get_the_time("\x46")))->ugaqcouwcuiaemgo("\155\x6f\x6e\164\x68");
        goto sgywygyawgwgcisg;
        qsceaisugocqyckq:
        goto aquoociuuukgecia;
        goto ueaayiqayygcgoqi;
        egkuaomeucwoggsm:
        iakcwkiqcswmeygo:
        goto ocqgosucokgqukws;
        wuikyqcaoeiggqmq:
        goto aquoociuuukgecia;
        goto ismcqqkiosumseue;
        akuwqeaouicqskgu:
        goto aquoociuuukgecia;
        goto wekaickwcioowesg;
        mgocwmsiykiigeme:
        if (is_year()) {
            goto ysqwqwciewcauaso;
        }
        goto maqseauogscyeogw;
        cyioiakwwqmokgye:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\131")))->ugaqcouwcuiaemgo("\x79\x65\141\162");
        goto caegckokkmueeags;
        ouqkcsiuwymsyyac:
        goto aquoociuuukgecia;
        goto iuewwmweyqcmyoku;
        iuewwmweyqcmyoku:
        ysqwqwciewcauaso:
        goto cyioiakwwqmokgye;
        qmowaeuskymgicac:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::symuoymymumgwkaw())->ugaqcouwcuiaemgo("\x68\x6f\x6d\145");
        goto qsceaisugocqyckq;
        uweemmwsoqkmekwy:
        msyoyikcumueukue:
        goto guyscyosaqwiaaoc;
        ggsuykssmeuwgmee:
        $mksyucucyswaukig = get_queried_object();
        goto iyywoeosyegimygc;
        sgywygyawgwgcisg:
        goto aquoociuuukgecia;
        goto esegymsakukwacyq;
        iaaeukgwkeyewuwk:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\164\141\147\137\x69\144"), "\x70\x6f\163\164\x5f\x74\x61\147"))->ugaqcouwcuiaemgo("\x74\141\x78\x6f\x6e\x6f\155\x79")->aseocggwwegcmqes("\164\141\x67");
        goto agekuuacwqkmswoi;
        yokwocmaaycmkkao:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateServer::ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\165\156\153\156\x6f\167\156");
        goto akyoausyiwisayoe;
        aaaquaiiomywcyie:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo("\141\x75\164\x68\157\x72");
        goto akuwqeaouicqskgu;
        mcuamuokmoskmwky:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::mqgeysameoesmuqw($useksmwkuswkwcqg->name))->ugaqcouwcuiaemgo("\x70\x6f\163\164\x5f\x74\171\160\145")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto omyiaeqssiowmeyq;
        omcgwcaewggkyekk:
        $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig);
        goto qyeogkiaggyykewa;
        qyeogkiaggyykewa:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo("\x74\x61\170\157\156\157\155\171")->aseocggwwegcmqes($kesssewsiegssiya);
        goto wuikyqcaoeiggqmq;
        waeeskqmeqwiyysa:
        soqwgawucoyckiso:
        goto qmowaeuskymgicac;
        iosaeiaommgcgsyq:
        goto aquoociuuukgecia;
        goto waeeskqmeqwiyysa;
        wsguekmucgeaocgu:
        goto aquoociuuukgecia;
        goto gkmiagqgacyogaoy;
        osieesqoygmqkski:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAttachment::qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo("\141\x74\164\141\x63\150\155\x65\156\164");
        goto qycwewyaymciuaow;
        weaaqgwewmkwwciw:
        if (is_search()) {
            goto aakioaiukcgicqma;
        }
        goto mgocwmsiykiigeme;
        omyiaeqssiowmeyq:
        goto aquoociuuukgecia;
        goto qugqcmywiswaoigo;
        iyywoeosyegimygc:
        $yyimiwcuegayoskq = new PageInfo();
        goto yiyigymygeeowoms;
        ocqgosucokgqukws:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($mksyucucyswaukig, true);
        goto mcuamuokmoskmwky;
        igocqgwwyscegcoo:
        wmesugyccceqgekg:
        goto ssauiqekekegaucy;
        uioiawwiiuaycmqi:
        iyiwiyiuaagacugy:
        goto uggycmgqqyqeacas;
        muywyiaqscwgmeoi:
        $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\x34\60\64");
        goto uecagaicwccecikw;
        sqykqekmsogswkog:
        if (is_tag()) {
            goto kqcqgmsgiggceyss;
        }
        goto wiwykgmceuaoeqks;
        maqseauogscyeogw:
        if (is_month()) {
            goto wmesugyccceqgekg;
        }
        goto suaggqsigckogyek;
        eswcmcmguawawsya:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_search_query())->ugaqcouwcuiaemgo("\163\x65\x61\162\x63\x68");
        goto ouqkcsiuwymsyyac;
        imumuuckgaiyaqou:
        kqcqgmsgiggceyss:
        goto iaaeukgwkeyewuwk;
        caegckokkmueeags:
        goto aquoociuuukgecia;
        goto igocqgwwyscegcoo;
        koccukqciscmgeuo:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x73\151\156\x67\154\x65")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto wcaysaykacysmkue;
        ewmaqwoqyggwucag:
        if (is_category()) {
            goto csmewseacwwiskqi;
        }
        goto sqykqekmsogswkog;
        scgayeiigokkyksu:
        goto aquoociuuukgecia;
        goto uioiawwiiuaycmqi;
        msamwsmoqyooagqs:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\x63\x61\x74"), "\x63\x61\164\145\x67\157\162\171"))->ugaqcouwcuiaemgo("\164\x61\170\157\x6e\157\155\x79")->aseocggwwegcmqes("\143\141\164\x65\147\x6f\x72\x79");
        goto aqimseoockakwaek;
        okssskeakmywwwii:
        if (is_page()) {
            goto msyoyikcumueukue;
        }
        goto myiqqkogcqekgqiq;
        ayqomgiesquiieke:
        if (is_single() && !DecoratorQuery::aauyuieeeaakygki()) {
            goto ygosgmiiugiiscsu;
        }
        goto okssskeakmywwwii;
        qwigokiuwsgywmqe:
        qcggaygooaigauwu:
        goto omcgwcaewggkyekk;
        wiwykgmceuaoeqks:
        if (is_tax()) {
            goto qcggaygooaigauwu;
        }
        goto weaaqgwewmkwwciw;
        wcaysaykacysmkue:
        goto aquoociuuukgecia;
        goto uweemmwsoqkmekwy;
        yiyigymygeeowoms:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto sogsyogucsmisoau;
        }
        goto wuiwysygcwqscigy;
        gkmiagqgacyogaoy:
        ywigmmoegqeggysg:
        goto osieesqoygmqkski;
        wekaickwcioowesg:
        ygosgmiiugiiscsu:
        goto koccukqciscmgeuo;
        wuiwysygcwqscigy:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto soqwgawucoyckiso;
        }
        goto ewmaqwoqyggwucag;
        uecagaicwccecikw:
        aquoociuuukgecia:
        goto cyggoamqmaisueam;
        ismcqqkiosumseue:
        aakioaiukcgicqma:
        goto eswcmcmguawawsya;
        rguugekykscwiaca:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::somwagieycgkcyec())->ugaqcouwcuiaemgo("\146\x72\157\156\x74\x5f\x70\x61\147\x65");
        goto iosaeiaommgcgsyq;
        guyscyosaqwiaaoc:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\160\141\x67\145");
        goto wsguekmucgeaocgu;
        ueaayiqayygcgoqi:
        csmewseacwwiskqi:
        goto msamwsmoqyooagqs;
        aqimseoockakwaek:
        goto aquoociuuukgecia;
        goto imumuuckgaiyaqou;
        sykeuqwqugkeigig:
        sogsyogucsmisoau:
        goto rguugekykscwiaca;
        myiqqkogcqekgqiq:
        if (DecoratorQuery::aauyuieeeaakygki()) {
            goto ywigmmoegqeggysg;
        }
        goto qyewgcsqgmyaocco;
        agekuuacwqkmswoi:
        goto aquoociuuukgecia;
        goto qwigokiuwsgywmqe;
        qyewgcsqgmyaocco:
        if (self::sqyyemqmmgmyiaam()) {
            goto iakcwkiqcswmeygo;
        }
        goto ccyuokyeykkmwqkc;
        ccyuokyeykkmwqkc:
        if (is_404()) {
            goto miqyaiywugkkgwie;
        }
        goto yokwocmaaycmkkao;
        ymsugasumawwwgka:
    }
    
    public static function ycqquoiyyuesegsy($post = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto gyauiikaoigoeyyq;
        wakwyywuumiqsmsi:
        goto kiecqswmwgwmackc;
        goto sikagsogeweqwqwe;
        omoeomgwkeyyuews:
        eqmimgekqkqqmcca:
        goto uswqukaouqwuocik;
        ogygmqoisqiasisc:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto iggeguwkkemeoksm;
        }
        goto myccssugyykigeie;
        mwcaeiokmsaacsac:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto agewogomsgsaeiss;
        wmyewgwkuyyswgge:
        global $wp;
        goto uamaycseqskcgogs;
        myccssugyykigeie:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto qygawwowocwskuqu;
        }
        goto mwcaeiokmsaacsac;
        amwoyceicgucwuca:
        $migiiksoiymissge = ManipulateServer::auksikwsewaywikq();
        goto mmeuuskqmmyaesga;
        igguimucuuyekecy:
        goto kiecqswmwgwmackc;
        goto ugoueuoakwywqsos;
        agewogomsgsaeiss:
        goto kiecqswmwgwmackc;
        goto omoeomgwkeyyuews;
        ugoueuoakwywqsos:
        qygawwowocwskuqu:
        goto wmyewgwkuyyswgge;
        uaokcgsoaemmiqou:
        $migiiksoiymissge = self::symuoymymumgwkaw();
        goto igguimucuuyekecy;
        uamaycseqskcgogs:
        $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($wp->request);
        goto yukqeyeyuucieqga;
        yukqeyeyuucieqga:
        kiecqswmwgwmackc:
        goto eckqskkgosseskmc;
        sikagsogeweqwqwe:
        emeayeegwmicuiqq:
        goto amwoyceicgucwuca;
        suswiwiacoeosiuu:
        if ($post) {
            goto eqmimgekqkqqmcca;
        }
        goto gywgyugckkqscaao;
        gyauiikaoigoeyyq:
        $migiiksoiymissge = null;
        goto suswiwiacoeosiuu;
        eckqskkgosseskmc:
        return trailingslashit($migiiksoiymissge);
        goto acmaoyccqewmweaw;
        mmeuuskqmmyaesga:
        goto kiecqswmwgwmackc;
        goto qouscuqwwookaiea;
        gywgyugckkqscaao:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto emeayeegwmicuiqq;
        }
        goto ogygmqoisqiasisc;
        qouscuqwwookaiea:
        iggeguwkkemeoksm:
        goto uaokcgsoaemmiqou;
        uswqukaouqwuocik:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto wakwyywuumiqsmsi;
        acmaoyccqewmweaw:
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto ciqusemcegueoegm;
        uyqqcioceqguesgw:
        qcoagmaceeioumey:
        goto mqukeuyogggewmmu;
        uyqmicaayqwwommo:
        goto qcoagmaceeioumey;
        goto scioseuqqegcycuu;
        ciwcueuqsueyeyeu:
        auymguqowwoccwiq:
        goto ooasiqaamqsiuqio;
        aqqemqcsowckquqa:
        goto qcoagmaceeioumey;
        goto ewauqkmweawmkgas;
        ciqusemcegueoegm:
        $iayakwckycsumkqa = null;
        goto gguiymqokicqscom;
        uaeuiiegyuoocksu:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto aqqemqcsowckquqa;
        wscyocimqesyaqeu:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto ueikewqggcwskseu;
        ewauqkmweawmkgas:
        uaqieigykmeagcoi:
        goto wscyocimqesyaqeu;
        iamagkcimokqwswc:
        eyqugyuuucmscwqg:
        goto muaoymyciyauqiae;
        mqukeuyogggewmmu:
        return $iayakwckycsumkqa;
        goto taqemmwguqueqemw;
        ooasiqaamqsiuqio:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::oigaewqgekgugqug(), $gioggcykgoikcwiy);
        goto uyqmicaayqwwommo;
        gguiymqokicqscom:
        if ($post) {
            goto uaqieigykmeagcoi;
        }
        goto smewgosmeuaqukya;
        smewgosmeuaqukya:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto auymguqowwoccwiq;
        }
        goto oqssaoscmiskagum;
        oqssaoscmiskagum:
        if (self::okiaumcqquyioqcy()) {
            goto uwwkacwywyygyomc;
        }
        goto ukkegcmwcuymceua;
        qkiqgucaomigsesq:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto eyqugyuuucmscwqg;
        }
        goto uaeuiiegyuoocksu;
        iiqwggyqyekwkako:
        if (!$sqeykgyoooqysmca) {
            goto kuacwismecyuequy;
        }
        goto kckcsuuiykyaawke;
        egoewmaccsammqkc:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::cykwscocqwykiocm(), $gioggcykgoikcwiy);
        goto squouqwsoywkecwy;
        scioseuqqegcycuu:
        uwwkacwywyygyomc:
        goto egoewmaccsammqkc;
        egcakiyaioiqacsg:
        kuacwismecyuequy:
        goto wcywgsiukiucoyau;
        kckcsuuiykyaawke:
        $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export;
        goto egcakiyaioiqacsg;
        ueikewqggcwskseu:
        goto qcoagmaceeioumey;
        goto ciwcueuqsueyeyeu;
        muaoymyciyauqiae:
        $iayakwckycsumkqa = DecoratorPost::wieoiwogwmcwukom();
        goto uyqqcioceqguesgw;
        mkkeagwoaksoqsii:
        ckgqqiewiuyycyee:
        goto uaaouwkcigacguou;
        uaaouwkcigacguou:
        $sqeykgyoooqysmca = self::waaisqccqacqeium();
        goto iiqwggyqyekwkako;
        wcywgsiukiucoyau:
        goto qcoagmaceeioumey;
        goto iamagkcimokqwswc;
        ukkegcmwcuymceua:
        if (self::sqyyemqmmgmyiaam()) {
            goto ckgqqiewiuyycyee;
        }
        goto qkiqgucaomigsesq;
        squouqwsoywkecwy:
        goto qcoagmaceeioumey;
        goto mkkeagwoaksoqsii;
        taqemmwguqueqemw:
    }
    
    public static function agegeeiiacceomke($aaokuekaimigoyue, $meqocwsecsywiiqs, $omkysikckkcieckq = null, $ywmkwiwkosakssii = [])
    {
        goto ooisukscqugmceuy;
        ooisukscqugmceuy:
        $suaemuyiacqyugsm = DecoratorOption::get($omkysikckkcieckq);
        goto waeweckgowcciukq;
        ceacseyocykwqyyw:
        flush_rewrite_rules(false);
        goto qqgmsukugueeaesq;
        uagqceymsywggcgs:
        DecoratorOption::update($omkysikckkcieckq, $suaemuyiacqyugsm);
        goto omysmgiqyswuigkq;
        gkoeukkaesoaseqg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x6f\x73\164\x5f\164\151\164\x6c\145" => $meqocwsecsywiiqs, "\160\157\x73\164\x5f\156\x61\155\145" => $aaokuekaimigoyue, "\x70\157\163\x74\137\163\x74\141\x74\x75\x73" => "\x70\165\x62\154\151\x73\150"]);
        goto emmwgomqmskywumg;
        amaqgiegqwsmcqak:
        $mksyucucyswaukig = self::get($suaemuyiacqyugsm);
        goto wwockyuqacckgmkm;
        wwockyuqacckgmkm:
        amkyoauqecoimiau:
        goto kkwammqmykqmseky;
        kkwammqmykqmseky:
        if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) {
            goto uueakweiqiqqukes;
        }
        goto oaeqccuiuqwqomeg;
        qqgmsukugueeaesq:
        oskmiqqwqkuyugqq:
        goto acqyyksaoeeomiia;
        oaeqccuiuqwqomeg:
        $suaemuyiacqyugsm = DecoratorPost::qamwegcyimgcqksw($aaokuekaimigoyue, "\160\141\x67\145");
        goto ssmawuwisimwmqsa;
        gkcqguoasqokuaug:
        if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) {
            goto ogqgmqiweiwqeyck;
        }
        goto uagqceymsywggcgs;
        emmwgomqmskywumg:
        $suaemuyiacqyugsm = self::insert("\x70\x61\x67\145", $ywmkwiwkosakssii);
        goto gkcqguoasqokuaug;
        gqacwwimmmoswagw:
        uueakweiqiqqukes:
        goto gmgomyaaquiiekcg;
        qesiqimsweuqacgc:
        if (!$suaemuyiacqyugsm) {
            goto amkyoauqecoimiau;
        }
        goto amaqgiegqwsmcqak;
        omysmgiqyswuigkq:
        ogqgmqiweiwqeyck:
        goto ceacseyocykwqyyw;
        ssmawuwisimwmqsa:
        DecoratorOption::update($omkysikckkcieckq, self::mwikyscisascoeea($suaemuyiacqyugsm));
        goto gqacwwimmmoswagw;
        waeweckgowcciukq:
        $mksyucucyswaukig = null;
        goto qesiqimsweuqacgc;
        gmgomyaaquiiekcg:
        if ($suaemuyiacqyugsm) {
            goto oskmiqqwqkuyugqq;
        }
        goto gkoeukkaesoaseqg;
        acqyyksaoeeomiia:
    }
    
    public static function ssacaeeassumyuws(?string $migiiksoiymissge = null, $aqykuigiuwmmcieu = self::OBJECT, $useksmwkuswkwcqg = "\x70\141\x67\145")
    {
        goto cqomyeiacimqacuw;
        myoocyaewqimqeui:
        $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc();
        goto saimqwoekaggasik;
        cqomyeiacimqacuw:
        if ($migiiksoiymissge) {
            goto wmysaywgeqwcaims;
        }
        goto myoocyaewqimqeui;
        kyqwosmmiuemmkug:
        return DecoratorPost::qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu);
        goto ugmkgeamwiemieag;
        yqgcksakiqqsuqec:
        $mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH);
        goto kyqwosmmiuemmkug;
        saimqwoekaggasik:
        wmysaywgeqwcaims:
        goto yqgcksakiqqsuqec;
        ugmkgeamwiemieag:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto akmkggmksaueiema;
        jmcecgeiqygsoaeq:
        return $oikyogsosqcyueay;
        goto awcuymmcaakwaqwo;
        akmkggmksaueiema:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto yoosmkwkkaieeuog;
        meeiywyqmokummue:
        $oikyogsosqcyueay = self::get($oikyogsosqcyueay);
        goto eaamoawwmocqgcas;
        yoosmkwkkaieeuog:
        if (!$oikyogsosqcyueay) {
            goto oqioiqwiuokuomwq;
        }
        goto meeiywyqmokummue;
        eaamoawwmocqgcas:
        oqioiqwiuokuomwq:
        goto jmcecgeiqygsoaeq;
        awcuymmcaakwaqwo:
    }
    
    public static function eokiwumgqmymgyoa()
    {
        return DecoratorOption::get("\x70\141\x67\x65\137\146\x6f\162\137\x70\x6f\163\x74\163");
    }
    
    public static function icikwuksyiceccmo()
    {
        goto quqksswweecuqqyc;
        aieaqkuieuqwoamu:
        $aaokuekaimigoyue = self::aqcogscycyycgkuq($oikyogsosqcyueay);
        goto wsckoqukqewsgioc;
        ymaqmqogwemaumeu:
        $aaokuekaimigoyue = "\x62\154\157\x67";
        goto qiisesouesmuuqso;
        ugsgiqwcgikweoag:
        return $aaokuekaimigoyue;
        goto ymgkmumsgwsywawq;
        quqksswweecuqqyc:
        $oikyogsosqcyueay = self::cykwscocqwykiocm();
        goto ymaqmqogwemaumeu;
        qiisesouesmuuqso:
        if (!$oikyogsosqcyueay instanceof WP_Post) {
            goto iiyiieuwugakwmco;
        }
        goto aieaqkuieuqwoamu;
        wsckoqukqewsgioc:
        iiyiieuwugakwmco:
        goto ugsgiqwcgikweoag;
        ymgkmumsgwsywawq:
    }
    
    public static function oigaewqgekgugqug()
    {
        return DecoratorOption::get("\x70\141\147\x65\x5f\x6f\x6e\137\146\162\157\x6e\x74");
    }
    
    public static function awgkmqkqkqawmqcu() : bool
    {
        goto eecsacmcuiawgsuw;
        eecsacmcuiawgsuw:
        $aiamqeawckcsuaou = ManipulateServer::get("\141\x63\x74\151\157\156");
        goto ouoacoswaigqeqea;
        kwqaucmokiowmmsk:
        return $syuuigcamkiegaqy === "\167\160\x2d\154\157\147\x69\x6e\56\x70\150\160" || in_array($aiamqeawckcsuaou, ["\x72\x70", "\x6c\157\163\164\x70\x61\163\x73\x77\157\162\144", "\x72\x65\x67\151\x73\x74\x65\x72"]);
        goto yuiiueawamcwkcii;
        ouoacoswaigqeqea:
        $syuuigcamkiegaqy = ManipulateServer::oymwkcegiigooaqm("\160\x61\x67\x65\156\x6f\x77");
        goto kwqaucmokiowmmsk;
        yuiiueawamcwkcii:
    }
    
    public static function symuoymymumgwkaw()
    {
        goto owewgceyyccggass;
        ecoekykcimuquyew:
        return $migiiksoiymissge;
        goto oaiqqcuocoeesgwo;
        owewgceyyccggass:
        $migiiksoiymissge = null;
        goto yciugggyusiwaiei;
        yciugggyusiwaiei:
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        goto gcokswwqieqqqkum;
        aaagmaisyakasiwy:
        akeeaiqiokigiyek:
        goto ecoekykcimuquyew;
        gcokswwqieqqqkum:
        if (!$oikyogsosqcyueay) {
            goto akeeaiqiokigiyek;
        }
        goto yoqaqyekuywacgay;
        yoqaqyekuywacgay:
        $migiiksoiymissge = self::ycqquoiyyuesegsy($oikyogsosqcyueay);
        goto aaagmaisyakasiwy;
        oaiqqcuocoeesgwo:
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        goto gyaygsqackycugma;
        oimuamcicscqsygs:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco(self::cykwscocqwykiocm());
        goto qoasosoiigoioyam;
        eywgkguqwemswogy:
        if (DecoratorQuery::moegwqkekcawsggs()) {
            goto usqaemiysqqycess;
        }
        goto gmyaiiggkqkkqusc;
        gyaygsqackycugma:
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco($post);
        goto ukcscyckokswwgkk;
        mqigqiiaucmoeakm:
        goto okgeyuqomwgqkica;
        goto ikakskcmywasiaaw;
        saigqcycoiqwccow:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto kqiguksmuaiokakg;
        }
        goto kmqyuuaoqoeyweie;
        kgukocmwemamgkeq:
        if (!$useksmwkuswkwcqg) {
            goto iymecmmaqemumgwm;
        }
        goto ciagoiskqoeqegms;
        ooqqouikewaoqiia:
        goto okgeyuqomwgqkica;
        goto gyaagmeooqiysqie;
        ikakskcmywasiaaw:
        emisqygocmagegey:
        goto gcisscmgwcgaukuy;
        csayumgmsgqaqocs:
        okgeyuqomwgqkica:
        goto eeewkuoauiceusme;
        ocaoakgkikmuauya:
        goto okgeyuqomwgqkica;
        goto immscoeagqmqciui;
        gmyaiiggkqkkqusc:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto emisqygocmagegey;
        }
        goto ooqqouikewaoqiia;
        cyokukwiwuywqami:
        return $meqocwsecsywiiqs;
        goto ssgwgsuyuswaoquy;
        wkoicgygicokiqic:
        $meqocwsecsywiiqs = get_bloginfo("\x6e\x61\155\x65");
        goto ocaoakgkikmuauya;
        eawyqmogeqawcuyk:
        usqaemiysqqycess:
        goto aqwemquogkemogkc;
        ciagoiskqoeqegms:
        $meqocwsecsywiiqs = $useksmwkuswkwcqg->label;
        goto mcqkesqkqmquqscw;
        kmqyuuaoqoeyweie:
        if (self::okiaumcqquyioqcy()) {
            goto icgsicquigiaoqcu;
        }
        goto eywgkguqwemswogy;
        mcqkesqkqmquqscw:
        iymecmmaqemumgwm:
        goto mqigqiiaucmoeakm;
        ukcscyckokswwgkk:
        if ($post) {
            goto ugqewksmawaaikcy;
        }
        goto saigqcycoiqwccow;
        aqwemquogkemogkc:
        $useksmwkuswkwcqg = self::waaisqccqacqeium();
        goto kgukocmwemamgkeq;
        qoasosoiigoioyam:
        goto okgeyuqomwgqkica;
        goto eawyqmogeqawcuyk;
        eeewkuoauiceusme:
        ugqewksmawaaikcy:
        goto cyokukwiwuywqami;
        immscoeagqmqciui:
        icgsicquigiaoqcu:
        goto oimuamcicscqsygs;
        gyaagmeooqiysqie:
        kqiguksmuaiokakg:
        goto wkoicgygicokiqic;
        gcisscmgwcgaukuy:
        $meqocwsecsywiiqs = DecoratorPost::syeuyeikogukksam();
        goto csayumgmsgqaqocs;
        ssgwgsuyuswaoquy:
    }
    
    public static function somwagieycgkcyec()
    {
        return self::ycqquoiyyuesegsy(self::oigaewqgekgugqug());
    }
    
    public static function iqoacwuiemooiysg() : PageInfo
    {
        goto oeimecucwuoikscu;
        mwmoywcyqwimoeye:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_search_query())->ugaqcouwcuiaemgo("\163\145\141\162\143\x68");
        goto kwqqkyscmkmmycky;
        qcggaygooaigauwu:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAttachment::qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x61\x74\x74\141\x63\x68\x6d\x65\156\x74");
        goto aakioaiukcgicqma;
        ygosgmiiugiiscsu:
        myciimmeauksamaa:
        goto msyoyikcumueukue;
        msyoyikcumueukue:
        $yyimiwcuegayoskq->ugaqcouwcuiaemgo("\x34\x30\64");
        goto ywigmmoegqeggysg;
        oeimecucwuoikscu:
        $mksyucucyswaukig = get_queried_object();
        goto oggcgggiciyscsek;
        wwwoeskoucoimecg:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\x63\141\x74"), "\x63\141\164\x65\147\x6f\x72\x79"))->ugaqcouwcuiaemgo("\164\141\x78\x6f\156\157\155\x79")->aseocggwwegcmqes("\x63\x61\x74\145\x67\x6f\x72\x79");
        goto okwqmqsuewwwsykg;
        ssaqqyiuueayyauu:
        iiuyqyimsogcawyu:
        goto mwmoywcyqwimoeye;
        egigiaiiwcmwmumi:
        $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo("\x61\x75\164\150\157\162");
        goto emmssoaeueiowaeg;
        gqyiykessecacuqq:
        goto ooskemsasmsukgom;
        goto qiwmescucyayywwe;
        asayieoqoamuimcc:
        goto ooskemsasmsukgom;
        goto qwmsyyymeegigkio;
        iakcwkiqcswmeygo:
        $yyimiwcuegayoskq->cggwsuueqwqscgei(is_paged());
        goto miqyaiywugkkgwie;
        cqmwuskwgsuyqiku:
        if (is_author()) {
            goto kkuisewuceyasium;
        }
        goto guwwcsoquaaiywwg;
        iyiwiyiuaagacugy:
        goto ooskemsasmsukgom;
        goto ygosgmiiugiiscsu;
        qmweiqisqiikwwcg:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto gyuaowmwgakycqqu;
        }
        goto kiuoaeesiiaqskma;
        wakwucssymmkyoqy:
        if (is_tax()) {
            goto yoecqyyoymaykeuy;
        }
        goto smieosasoeageewe;
        wqwgaqeywoosssgo:
        $qscaoekmoooeuyqg = ManipulateUser::get(get_query_var("\x61\165\x74\150\x6f\x72"), true);
        goto egigiaiiwcmwmumi;
        ygoayeaicqikqmii:
        ksyqouicmqcogmow:
        goto wwwoeskoucoimecg;
        agyimagkmcyciuqw:
        goto ooskemsasmsukgom;
        goto omcycqocymkeiawq;
        iecsyeoooyqcuwcs:
        goto ooskemsasmsukgom;
        goto ssaqqyiuueayyauu;
        csmewseacwwiskqi:
        goto ooskemsasmsukgom;
        goto kqcqgmsgiggceyss;
        kiuoaeesiiaqskma:
        if (is_category()) {
            goto ksyqouicmqcogmow;
        }
        goto gymooqgyigeucisi;
        omcycqocymkeiawq:
        gyuaowmwgakycqqu:
        goto wkmugsoecikiakqq;
        aakioaiukcgicqma:
        goto ooskemsasmsukgom;
        goto ysqwqwciewcauaso;
        mqwgiouuekicqwqq:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var("\164\141\147\137\151\144"), "\x70\x6f\163\x74\x5f\164\141\147"))->ugaqcouwcuiaemgo("\x74\141\x78\x6f\156\157\x6d\x79")->aseocggwwegcmqes("\x74\141\147");
        goto iawoeomqmeacqwwm;
        sgewiwogqyswqiso:
        yoecqyyoymaykeuy:
        goto qquiekauycukmquy;
        ywigmmoegqeggysg:
        ooskemsasmsukgom:
        goto iakcwkiqcswmeygo;
        qiwmescucyayywwe:
        emgoksggesqycsum:
        goto uuuyqoukemmekmwy;
        wkmugsoecikiakqq:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::symuoymymumgwkaw())->ugaqcouwcuiaemgo("\150\x6f\x6d\145");
        goto caasemucaegsgiic;
        kqcqgmsgiggceyss:
        mkiskyuukeickeio:
        goto qcggaygooaigauwu;
        qquiekauycukmquy:
        $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig);
        goto ykiawsemqwsweosg;
        oggcgggiciyscsek:
        $yyimiwcuegayoskq = new PageInfo();
        goto ausiqgkmacksmyce;
        iimquseysaiomgas:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::mqgeysameoesmuqw($useksmwkuswkwcqg->name))->ugaqcouwcuiaemgo("\160\157\x73\x74\x5f\164\171\160\145")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto iyiwiyiuaagacugy;
        iuwqqquugqmiacic:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time("\x59"), get_the_time("\x46")))->ugaqcouwcuiaemgo("\155\157\156\164\x68");
        goto wocsaeyyawcwmsiw;
        mesaqgsmsoqowuki:
        qkaiqseceoaksyoc:
        goto ioacggcqeywkqemu;
        ausiqgkmacksmyce:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto emgoksggesqycsum;
        }
        goto qmweiqisqiikwwcg;
        oeqaaoswcwwwkkww:
        kykyeawgsuaygiyk:
        goto aswygkquwkiaqews;
        owcmkccqayuewmyi:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateServer::ekcymmyqoceukosc())->ugaqcouwcuiaemgo("\x75\x6e\x6b\x6e\x6f\167\156");
        goto gqyiykessecacuqq;
        emmssoaeueiowaeg:
        goto ooskemsasmsukgom;
        goto mesaqgsmsoqowuki;
        uuuyqoukemmekmwy:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::somwagieycgkcyec())->ugaqcouwcuiaemgo("\146\x72\x6f\156\x74\137\160\x61\147\x65");
        goto agyimagkmcyciuqw;
        wocsaeyyawcwmsiw:
        goto ooskemsasmsukgom;
        goto oeqaaoswcwwwkkww;
        osqmooccocasiwwi:
        if (DecoratorQuery::aauyuieeeaakygki()) {
            goto mkiskyuukeickeio;
        }
        goto suaagcyyqywuawcy;
        caasemucaegsgiic:
        goto ooskemsasmsukgom;
        goto ygoayeaicqikqmii;
        qwmsyyymeegigkio:
        kkuisewuceyasium:
        goto wqwgaqeywoosssgo;
        auqgkmewqmiewwww:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time("\x59")))->ugaqcouwcuiaemgo("\171\x65\x61\x72");
        goto qoqwwimiekwmggwi;
        ioacggcqeywkqemu:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x73\x69\x6e\147\x6c\x65")->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        goto aquoociuuukgecia;
        wyyoauyqkccwquye:
        if (is_month()) {
            goto ycycoyycscqaqwic;
        }
        goto gowmoegakqaokqwy;
        gowmoegakqaokqwy:
        if (is_day()) {
            goto kykyeawgsuaygiyk;
        }
        goto cqmwuskwgsuyqiku;
        qoqwwimiekwmggwi:
        goto ooskemsasmsukgom;
        goto uykawkeowqygeweo;
        ssequouykiacumek:
        if (is_year()) {
            goto kcgskoecgmgsoscu;
        }
        goto wyyoauyqkccwquye;
        ykiawsemqwsweosg:
        $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo("\x74\x61\x78\x6f\156\157\x6d\x79")->aseocggwwegcmqes($kesssewsiegssiya);
        goto iecsyeoooyqcuwcs;
        soqwgawucoyckiso:
        $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo("\x70\141\x67\145");
        goto csmewseacwwiskqi;
        guwwcsoquaaiywwg:
        if (is_single() && !DecoratorQuery::aauyuieeeaakygki()) {
            goto qkaiqseceoaksyoc;
        }
        goto sqokciesoswwaase;
        miqyaiywugkkgwie:
        return $yyimiwcuegayoskq;
        goto ggsuykssmeuwgmee;
        wmesugyccceqgekg:
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($mksyucucyswaukig, true);
        goto iimquseysaiomgas;
        iawoeomqmeacqwwm:
        goto ooskemsasmsukgom;
        goto sgewiwogqyswqiso;
        sqokciesoswwaase:
        if (is_page()) {
            goto amckomowuaeagges;
        }
        goto osqmooccocasiwwi;
        aquoociuuukgecia:
        goto ooskemsasmsukgom;
        goto sogsyogucsmisoau;
        acscqmesgcgqumse:
        kcgskoecgmgsoscu:
        goto auqgkmewqmiewwww;
        sogsyogucsmisoau:
        amckomowuaeagges:
        goto soqwgawucoyckiso;
        suaagcyyqywuawcy:
        if (self::sqyyemqmmgmyiaam()) {
            goto mgiqmcyayasueaay;
        }
        goto yeuouysckyiiqgkk;
        uykawkeowqygeweo:
        ycycoyycscqaqwic:
        goto iuwqqquugqmiacic;
        okwqmqsuewwwsykg:
        goto ooskemsasmsukgom;
        goto mqacwakmquqyikgg;
        smieosasoeageewe:
        if (is_search()) {
            goto iiuyqyimsogcawyu;
        }
        goto ssequouykiacumek;
        kwqqkyscmkmmycky:
        goto ooskemsasmsukgom;
        goto acscqmesgcgqumse;
        ysqwqwciewcauaso:
        mgiqmcyayasueaay:
        goto wmesugyccceqgekg;
        aswygkquwkiaqews:
        $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time("\x59"), get_the_time("\106"), get_the_time("\x64")))->ugaqcouwcuiaemgo("\144\x61\171");
        goto asayieoqoamuimcc;
        mqacwakmquqyikgg:
        eemswigwmmkmeuac:
        goto mqwgiouuekicqwqq;
        yeuouysckyiiqgkk:
        if (is_404()) {
            goto myciimmeauksamaa;
        }
        goto owcmkccqayuewmyi;
        gymooqgyigeucisi:
        if (is_tag()) {
            goto eemswigwmmkmeuac;
        }
        goto wakwucssymmkyoqy;
        ggsuykssmeuwgmee:
    }
    
    public static function ycqquoiyyuesegsy($post = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        goto wiwykgmceuaoeqks;
        maqseauogscyeogw:
        if (DecoratorQuery::seokosgecygsmqau()) {
            goto ewmaqwoqyggwucag;
        }
        goto suaggqsigckogyek;
        ayqomgiesquiieke:
        goto iyywoeosyegimygc;
        goto okssskeakmywwwii;
        rguugekykscwiaca:
        $migiiksoiymissge = self::symuoymymumgwkaw();
        goto iosaeiaommgcgsyq;
        ueaayiqayygcgoqi:
        iyywoeosyegimygc:
        goto msamwsmoqyooagqs;
        ccyuokyeykkmwqkc:
        wuiwysygcwqscigy:
        goto yokwocmaaycmkkao;
        myiqqkogcqekgqiq:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto qyewgcsqgmyaocco;
        sykeuqwqugkeigig:
        ewmaqwoqyggwucag:
        goto rguugekykscwiaca;
        iekwekemogoyomuk:
        $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        goto ayqomgiesquiieke;
        suaggqsigckogyek:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto sqykqekmsogswkog;
        }
        goto iekwekemogoyomuk;
        waeeskqmeqwiyysa:
        sqykqekmsogswkog:
        goto qmowaeuskymgicac;
        yokwocmaaycmkkao:
        $migiiksoiymissge = ManipulateServer::auksikwsewaywikq();
        goto akyoausyiwisayoe;
        okssskeakmywwwii:
        yiyigymygeeowoms:
        goto myiqqkogcqekgqiq;
        qsceaisugocqyckq:
        $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($wp->request);
        goto ueaayiqayygcgoqi;
        msamwsmoqyooagqs:
        return trailingslashit($migiiksoiymissge);
        goto aqimseoockakwaek;
        iosaeiaommgcgsyq:
        goto iyywoeosyegimygc;
        goto waeeskqmeqwiyysa;
        qyewgcsqgmyaocco:
        goto iyywoeosyegimygc;
        goto ccyuokyeykkmwqkc;
        wiwykgmceuaoeqks:
        $migiiksoiymissge = null;
        goto weaaqgwewmkwwciw;
        qmowaeuskymgicac:
        global $wp;
        goto qsceaisugocqyckq;
        akyoausyiwisayoe:
        goto iyywoeosyegimygc;
        goto sykeuqwqugkeigig;
        weaaqgwewmkwwciw:
        if ($post) {
            goto yiyigymygeeowoms;
        }
        goto mgocwmsiykiigeme;
        mgocwmsiykiigeme:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto wuiwysygcwqscigy;
        }
        goto maqseauogscyeogw;
        aqimseoockakwaek:
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        goto ismcqqkiosumseue;
        akuwqeaouicqskgu:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::cykwscocqwykiocm(), $gioggcykgoikcwiy);
        goto wekaickwcioowesg;
        iuewwmweyqcmyoku:
        if (self::okiaumcqquyioqcy()) {
            goto omcgwcaewggkyekk;
        }
        goto cyioiakwwqmokgye;
        qycwewyaymciuaow:
        $iayakwckycsumkqa = DecoratorPost::wieoiwogwmcwukom();
        goto egkuaomeucwoggsm;
        scgayeiigokkyksu:
        qwigokiuwsgywmqe:
        goto uioiawwiiuaycmqi;
        wsguekmucgeaocgu:
        imumuuckgaiyaqou:
        goto gkmiagqgacyogaoy;
        gkmiagqgacyogaoy:
        goto iaaeukgwkeyewuwk;
        goto osieesqoygmqkski;
        igocqgwwyscegcoo:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto ssauiqekekegaucy;
        uggycmgqqyqeacas:
        goto iaaeukgwkeyewuwk;
        goto aaaquaiiomywcyie;
        eswcmcmguawawsya:
        if ($post) {
            goto agekuuacwqkmswoi;
        }
        goto ouqkcsiuwymsyyac;
        iwoisseyosimeiwg:
        goto iaaeukgwkeyewuwk;
        goto scgayeiigokkyksu;
        sgywygyawgwgcisg:
        agekuuacwqkmswoi:
        goto esegymsakukwacyq;
        uweemmwsoqkmekwy:
        if (!$sqeykgyoooqysmca) {
            goto imumuuckgaiyaqou;
        }
        goto guyscyosaqwiaaoc;
        koccukqciscmgeuo:
        qyeogkiaggyykewa:
        goto wcaysaykacysmkue;
        ismcqqkiosumseue:
        $iayakwckycsumkqa = null;
        goto eswcmcmguawawsya;
        cyioiakwwqmokgye:
        if (self::sqyyemqmmgmyiaam()) {
            goto qyeogkiaggyykewa;
        }
        goto caegckokkmueeags;
        egkuaomeucwoggsm:
        iaaeukgwkeyewuwk:
        goto ocqgosucokgqukws;
        aaaquaiiomywcyie:
        omcgwcaewggkyekk:
        goto akuwqeaouicqskgu;
        uioiawwiiuaycmqi:
        $iayakwckycsumkqa = parent::masoymaamekuykso(self::oigaewqgekgugqug(), $gioggcykgoikcwiy);
        goto uggycmgqqyqeacas;
        wcaysaykacysmkue:
        $sqeykgyoooqysmca = self::waaisqccqacqeium();
        goto uweemmwsoqkmekwy;
        esegymsakukwacyq:
        $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        goto iwoisseyosimeiwg;
        ocqgosucokgqukws:
        return $iayakwckycsumkqa;
        goto mcuamuokmoskmwky;
        guyscyosaqwiaaoc:
        $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export;
        goto wsguekmucgeaocgu;
        ssauiqekekegaucy:
        goto iaaeukgwkeyewuwk;
        goto sgywygyawgwgcisg;
        caegckokkmueeags:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto wuikyqcaoeiggqmq;
        }
        goto igocqgwwyscegcoo;
        wekaickwcioowesg:
        goto iaaeukgwkeyewuwk;
        goto koccukqciscmgeuo;
        ouqkcsiuwymsyyac:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto qwigokiuwsgywmqe;
        }
        goto iuewwmweyqcmyoku;
        osieesqoygmqkski:
        wuikyqcaoeiggqmq:
        goto qycwewyaymciuaow;
        mcuamuokmoskmwky:
    }
    
    public static function agegeeiiacceomke($aaokuekaimigoyue, $meqocwsecsywiiqs, $omkysikckkcieckq = null, $ywmkwiwkosakssii = [])
    {
        goto cyggoamqmaisueam;
        ogygmqoisqiasisc:
        $suaemuyiacqyugsm = self::insert("\160\x61\x67\145", $ywmkwiwkosakssii);
        goto myccssugyykigeie;
        ymsugasumawwwgka:
        if (!$suaemuyiacqyugsm) {
            goto omyiaeqssiowmeyq;
        }
        goto kiecqswmwgwmackc;
        iggeguwkkemeoksm:
        $suaemuyiacqyugsm = DecoratorPost::qamwegcyimgcqksw($aaokuekaimigoyue, "\x70\141\147\145");
        goto qygawwowocwskuqu;
        emeayeegwmicuiqq:
        if (!(!$suaemuyiacqyugsm || !$mksyucucyswaukig)) {
            goto qugqcmywiswaoigo;
        }
        goto iggeguwkkemeoksm;
        qygawwowocwskuqu:
        DecoratorOption::update($omkysikckkcieckq, self::mwikyscisascoeea($suaemuyiacqyugsm));
        goto gyauiikaoigoeyyq;
        eqmimgekqkqqmcca:
        omyiaeqssiowmeyq:
        goto emeayeegwmicuiqq;
        uswqukaouqwuocik:
        uecagaicwccecikw:
        goto wakwyywuumiqsmsi;
        gyauiikaoigoeyyq:
        qugqcmywiswaoigo:
        goto suswiwiacoeosiuu;
        mwcaeiokmsaacsac:
        DecoratorOption::update($omkysikckkcieckq, $suaemuyiacqyugsm);
        goto agewogomsgsaeiss;
        kiecqswmwgwmackc:
        $mksyucucyswaukig = self::get($suaemuyiacqyugsm);
        goto eqmimgekqkqqmcca;
        ecacgamqsegoqaug:
        $mksyucucyswaukig = null;
        goto ymsugasumawwwgka;
        gywgyugckkqscaao:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\157\x73\164\137\164\x69\164\x6c\145" => $meqocwsecsywiiqs, "\160\x6f\163\164\x5f\x6e\x61\x6d\145" => $aaokuekaimigoyue, "\x70\x6f\163\164\137\x73\164\141\x74\165\163" => "\160\x75\x62\154\x69\x73\x68"]);
        goto ogygmqoisqiasisc;
        suswiwiacoeosiuu:
        if ($suaemuyiacqyugsm) {
            goto uecagaicwccecikw;
        }
        goto gywgyugckkqscaao;
        cyggoamqmaisueam:
        $suaemuyiacqyugsm = DecoratorOption::get($omkysikckkcieckq);
        goto ecacgamqsegoqaug;
        agewogomsgsaeiss:
        muywyiaqscwgmeoi:
        goto omoeomgwkeyyuews;
        myccssugyykigeie:
        if (!($suaemuyiacqyugsm && $omkysikckkcieckq)) {
            goto muywyiaqscwgmeoi;
        }
        goto mwcaeiokmsaacsac;
        omoeomgwkeyyuews:
        flush_rewrite_rules(false);
        goto uswqukaouqwuocik;
        wakwyywuumiqsmsi:
    }
    
    public static function ssacaeeassumyuws(?string $migiiksoiymissge = null, $aqykuigiuwmmcieu = self::OBJECT, $useksmwkuswkwcqg = "\160\141\147\145")
    {
        goto amwoyceicgucwuca;
        mmeuuskqmmyaesga:
        $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc();
        goto qouscuqwwookaiea;
        igguimucuuyekecy:
        return DecoratorPost::qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu);
        goto ugoueuoakwywqsos;
        amwoyceicgucwuca:
        if ($migiiksoiymissge) {
            goto sikagsogeweqwqwe;
        }
        goto mmeuuskqmmyaesga;
        uaokcgsoaemmiqou:
        $mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH);
        goto igguimucuuyekecy;
        qouscuqwwookaiea:
        sikagsogeweqwqwe:
        goto uaokcgsoaemmiqou;
        ugoueuoakwywqsos:
    }
}

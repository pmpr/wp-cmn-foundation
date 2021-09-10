<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Theme;

use Pmpr\Common\Foundation\Container\Storage;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Foundation;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;

class ManipulateTemplate extends Common
{
    
    public static function sikqggwmmykuiymy($ywmkwiwkosakssii = [])
    {
        goto gcywquwcawaiuemg;
        scqesicowycigooq:
        $sqqewmoeaekuyyas = ManipulateArray::get($ywmkwiwkosakssii, self::PRIORITY);
        goto ekiywcmgqeomkuii;
        moauukwmkcwsgcck:
        asqmgywqwougoamy:
        goto uqiwaoyksayoeieo;
        eqeuqmkikikagmuo:
        $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, "\x69\x63\x6f\x6e\x5f\141\x74\x74\162\163", []);
        goto ikmygkeucamocyki;
        ggikisymeecuqsmm:
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        goto ugokecscgukmoaay;
        aoogiacgawmgqcws:
        $ekiuyucoiagmscgy = ManipulateArray::get($ywmkwiwkosakssii, "\x63\x61\154\x6c\142\141\143\x6b");
        goto scqesicowycigooq;
        ecmgeyyaaiqqaquy:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, "\x69\x64", ManipulateString::uniqid(5));
        goto iuwwmkmcgcokikse;
        uqiwaoyksayoeieo:
        add_meta_box($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc, $mgkceomocowocqyo, $sqqewmoeaekuyyas, ManipulateArray::get($ywmkwiwkosakssii, "\141\162\x67\x73"));
        goto riyimamswusgciic;
        ekiywcmgqeomkuii:
        if (!$wkaqekwwgqsqwcoi) {
            goto asqmgywqwougoamy;
        }
        goto eqeuqmkikikagmuo;
        gcywquwcawaiuemg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', "\x61\162\147\163" => [], "\163\x63\x72\145\145\x6e" => '', "\x69\143\157\x6e\137\x61\x74\164\162\163" => [], self::ICON => '', self::TITLE => '', self::CONTEXT => "\x73\x69\144\x65", self::CALLBACK => '', self::PRIORITY => "\150\x69\147\x68"]);
        goto ecmgeyyaaiqqaquy;
        gkiomikaiqoeqqmc:
        $meqocwsecsywiiqs = ManipulateHTML::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto moauukwmkcwsgcck;
        ikmygkeucamocyki:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\x73", "\151\143\x6f\156\55\163\155");
        goto gkiomikaiqoeqqmc;
        ggsueikouecmcige:
        $mgkceomocowocqyo = ManipulateArray::get($ywmkwiwkosakssii, "\143\x6f\x6e\164\x65\x78\164");
        goto aoogiacgawmgqcws;
        iuwwmkmcgcokikse:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        goto ggikisymeecuqsmm;
        ugokecscgukmoaay:
        $gcgsqcoqciockquc = ManipulateArray::get($ywmkwiwkosakssii, "\x73\143\162\145\x65\156");
        goto ggsueikouecmcige;
        riyimamswusgciic:
    }
    
    public static function ksokacwymoeoikcy($mokawwccycoiqeka) : array
    {
        goto eaweysiqmkkgkwac;
        qgukigweaoygmses:
        if (DecoratorQuery::qmssqeyayicowkgy()) {
            goto seyqygcoiuykkiky;
        }
        goto goweagoqgecsmkom;
        cwoqeekayccsekww:
        $qookweymeqawmcwo["\x6a\x75\x6d\x62\x6f\x74\162\x6f\x6e"] = single_post_title('', false);
        goto mmossocsuqoqoqaq;
        uwwauekgcoyikkas:
        $qookweymeqawmcwo["\152\x75\x6d\142\x6f\x74\162\157\156"] = get_the_archive_title();
        goto icoqqaegumsqisci;
        gqosimmkeayeeiay:
        wieuawokwmgmceiw:
        goto mgymaosoaggmwmqa;
        yymsiokkikayqocg:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg;
        goto uucsiskwgyuemsio;
        cmqgqqcqwyuqmkwm:
        if (DecoratorQuery::seokosgecygsmqau() || DecoratorQuery::takycgcamoacksqw()) {
            goto mugsqmesmkckewiw;
        }
        goto cqkmemmwmaqiewqu;
        goweagoqgecsmkom:
        if (DecoratorQuery::oowkceqysamwygwu()) {
            goto wciioggmwmkgcsmo;
        }
        goto wsgqgkgmuyauiwou;
        mmossocsuqoqoqaq:
        goto uycwawsmiioicssi;
        goto miieimwmkokoiwym;
        ggumygieugkogeie:
        oyagaakgacgcmkwc:
        goto osiikiissmgwswuq;
        csqwmmawamquwsey:
        goto gaqsemyisaosicwm;
        goto guywkkysoekogqkc;
        mwqucusegegumycm:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\156\x64\x65\170";
        goto skwecackaggcaese;
        mcykyoomseiweikq:
        qsueaqyaykeuaseo:
        goto mumyoaymyyyuoyiw;
        swkuaoqiuqyiqocc:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas;
        goto lekoaosmyqwusmoi;
        oaqceuecwckgqwwi:
        goto kwcygsgmoyqwoucu;
        goto acaauuckwcukguey;
        qcsmkwkqwyioaisc:
        xaceikmmqesogkkk:
        goto caeaeseeiessccea;
        mocugwsugyykuuci:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\171\145\x61\162";
        goto ggumygieugkogeie;
        mgymaosoaggmwmqa:
        $suaemuyiacqyugsm = "\x70\141\x67\145";
        goto uooagyguuiiescue;
        ewmysaaeaqqqyggc:
        $qookweymeqawmcwo["\145\170\x63\x65\x72\160\x74"] = null;
        goto aigksikikkwakygs;
        gcymiuiqmckmmick:
        if (DecoratorQuery::sgayqmgoigoseaoo()) {
            goto yimawceemkiikywa;
        }
        goto qgukigweaoygmses;
        eywuguawgaceiumq:
        if (DecoratorQuery::ocwoeosukggumggw()) {
            goto aigwcoawoqiiyuoy;
        }
        goto gcymiuiqmckmmick;
        gccwaiksqgswmeiw:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm;
        goto smymcgsgsqyouuqq;
        wemwciowaeaeaawu:
        aguqgiyuykososog:
        goto ggqcwqwwiysceqau;
        gqscyacqyuymugay:
        eyeymqwwacmgkguk:
        goto csqwmmawamquwsey;
        ykmuscooaoqqsuco:
        gaqsemyisaosicwm:
        goto cqueyacekyooqwya;
        acaauuckwcukguey:
        wciioggmwmkgcsmo:
        goto imewuueqmqgugces;
        uuaagqgscgkikwiq:
        if (DecoratorQuery::qwakseskocsyiyks()) {
            goto oqawqgiseaqequwa;
        }
        goto giyokeiwamossgcq;
        aciewqmismyqemky:
        if (!DecoratorQuery::kccakwkaqugygwmq()) {
            goto negugiuyggcmwiom;
        }
        goto kuogysqmqwwywmqm;
        mgcsgkgocesgmkga:
        $guwumyyyakswawas = "\143\141\x74\145\147\x6f\162\171";
        goto swkuaoqiuqyiqocc;
        iycgsegwcayoaokc:
        $qookweymeqawmcwo["\160\x6f\x73\164"] = ManipulatePost::get();
        goto kgogsskkkgiicsay;
        kgogsskkkgiicsay:
        $aokagokqyuysuksm = $mksyucucyswaukig->ID;
        goto wuuiggsgqkqsgwqc;
        esmkyweaqkeuowus:
        maouoescwmkycecg:
        goto miogmqocysiqgaoe;
        ggqcwqwwiysceqau:
        $qscaoekmoooeuyqg = "\x61\165\164\x68\157\x72";
        goto yymsiokkikayqocg;
        cocqueuqmmywkygm:
        oqawqgiseaqequwa:
        goto mocugwsugyykuuci;
        usmmcqawawuyikqc:
        auqsqouuqockimqs:
        goto ayosecsikkeyuuym;
        iwsygyquomuqaucc:
        $scwiymciagumsuiw = "\x74\141\147";
        goto yqiccguwmsccyyqa;
        taeaaqqiqyqsqkca:
        return [DecoratorHook::sscegwueamckwmcy("\x74\145\x6d\160\x6c\x61\x74\x65\137\150\151\x65\162\x61\162\143\150\x79\x5f\x74\x65\155\160\x6c\141\164\145\x73", $aquuecykqwyukece, $mksyucucyswaukig), DecoratorHook::sscegwueamckwmcy("\x74\x65\155\x70\x6c\x61\164\x65\x5f\x68\x69\145\x72\x61\x72\x63\x68\171\x5f\160\141\x72\141\x6d\145\x74\145\162\x73", $qookweymeqawmcwo, $mksyucucyswaukig)];
        goto owaskuaqsygwwweg;
        guywkkysoekogqkc:
        msqqcoeqqwskwkyi:
        goto kquwuocyiywceqma;
        lekoaosmyqwusmoi:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id;
        goto ocgsmgooskgssqus;
        icoqqaegumsqisci:
        $woaeeewomgcuesaa = "\141\x72\143\x68\x69\166\145";
        goto ewucgowweqwoksoi;
        qgmyekcuawoscmam:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy;
        goto wiaumkocycscykec;
        qagquueuicwmauos:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug;
        goto eggkgiqcmiqwcuwq;
        ewuwggusemeyaoeg:
        akiaoogyckoikwau:
        goto igaawsqwigicwisu;
        cqueyacekyooqwya:
        goto oyagaakgacgcmkwc;
        goto cocqueuqmmywkygm;
        miieimwmkokoiwym:
        aqcuqgqgwkeqwoqa:
        goto aqwowqaqcaqieeqs;
        aiwkocoaiikcuucc:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu();
        goto kmaoyguoemimecso;
        uqowsciomymeswmi:
        $aquuecykqwyukece[] = "\x69\x6e\x64\145\x78";
        goto cmqgqqcqwyuqmkwm;
        wuuiggsgqkqsgwqc:
        $aaokuekaimigoyue = $mksyucucyswaukig->post_name;
        goto ecwmcwwcwwgeimky;
        cqkmemmwmaqiewqu:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto maouoescwmkycecg;
        }
        goto myqsgumkeiicsysc;
        eemwaqciuyyoyumm:
        if (DecoratorQuery::mykygowqgwcuecua()) {
            goto aguqgiyuykososog;
        }
        goto eywuguawgaceiumq;
        wicukcksgkockuws:
        $qookweymeqawmcwo["\152\x75\155\x62\157\x74\x72\157\156"] = sprintf(__("\123\x65\141\162\x63\150\x20\x72\x65\163\x75\154\x74\40\146\157\162\x3a\x20\x25\x73", PR__CMN__FOUNDATION), $gqgemcmoicmgaqie);
        goto iwgcqgyswgwuqqmk;
        aigksikikkwakygs:
        $aquuecykqwyukece[] = "\x73\x65\x61\162\143\x68";
        goto mcykyoomseiweikq;
        eseaeaycqccuwyco:
        if (DecoratorQuery::kmmyuiwaogukwqqi()) {
            goto mcwcsiemyiygggoi;
        }
        goto amimykwokegaicma;
        uucsiskwgyuemsio:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = get_the_author_meta("\111\104");
        goto awekoyymwweemcok;
        ocgsmgooskgssqus:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug;
        goto qcsmkwkqwyioaisc;
        coyowqygyeieauoc:
        kcaecsuiucisksya:
        goto wicukcksgkockuws;
        skwecackaggcaese:
        if (DecoratorQuery::sgeaogakoscmysgc()) {
            goto wieuawokwmgmceiw;
        }
        goto aciewqmismyqemky;
        omyeceqeuciecuws:
        if ($gqgemcmoicmgaqie = get_search_query()) {
            goto kcaecsuiucisksya;
        }
        goto sgyqkuckaeggucco;
        amimykwokegaicma:
        if (!DecoratorQuery::gouusicsisumuiei()) {
            goto qsueaqyaykeuaseo;
        }
        goto omyeceqeuciecuws;
        ewucgowweqwoksoi:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\x6e\x64\x65\170";
        goto eemwaqciuyyoyumm;
        awekoyymwweemcok:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = get_the_author_meta("\156\x69\x63\153\x6e\141\155\x65");
        goto goyukgwckeckooca;
        wiaumkocycscykec:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug;
        goto gsqqokqkksksoasu;
        keqgeeiacoyigmao:
        iicqgkmwuwsymaqg:
        goto skogggsmiccmaccg;
        giyokeiwamossgcq:
        if (DecoratorQuery::mgkmukikygowogsm()) {
            goto msqqcoeqqwskwkyi;
        }
        goto yqacuyiiyyasawoq;
        ecsyqomaceguqkym:
        goto auqsqouuqockimqs;
        goto gqosimmkeayeeiay;
        mumyoaymyyyuoyiw:
        goto akiaoogyckoikwau;
        goto guyuyqqkqqkowsuw;
        iceyqamaamgkuiye:
        $woaeeewomgcuesaa = "\150\x6f\x6d\145";
        goto wccsmwwewucwaiqq;
        ymcuoacyysykkymi:
        goto iicqgkmwuwsymaqg;
        goto ggyceegykoiqsymw;
        ecwmcwwcwwgeimky:
        $woaeeewomgcuesaa = "\x73\151\156\x67\x75\154\x61\x72";
        goto mwqucusegegumycm;
        yqiccguwmsccyyqa:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw;
        goto oqmcsyiauqmssqog;
        qeiysasygkeqkkmc:
        aigwcoawoqiiyuoy:
        goto iwsygyquomuqaucc;
        kquwuocyiywceqma:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x6d\157\156\164\x68";
        goto ykmuscooaoqqsuco;
        ekiuwoeuyaqmwike:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\156\x64\145\170";
        goto uuaagqgscgkikwiq;
        oscougeyomugkoug:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\144\141\171";
        goto gqscyacqyuymugay;
        ggyceegykoiqsymw:
        mugsqmesmkckewiw:
        goto iceyqamaamgkuiye;
        osiikiissmgwswuq:
        kwcygsgmoyqwoucu:
        goto iceauycmeeucqcgo;
        guyuyqqkqqkowsuw:
        mcwcsiemyiygggoi:
        goto amuesauywwcigaii;
        igaawsqwigicwisu:
        goto kwcicgakmcamiogq;
        goto aqgmsmicauwwcmoc;
        uooagyguuiiescue:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm;
        goto scmiqqiwqoeeykye;
        smymcgsgsqyouuqq:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue;
        goto mkigaucqcwuumymq;
        oqmcsyiauqmssqog:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id;
        goto qagquueuicwmauos;
        goyukgwckeckooca:
        eeucoeywckwgosko:
        goto swegmkwugwqkmaow;
        gsqqokqkksksoasu:
        eqogmsscscykcqgm:
        goto oeymgaowesmmomce;
        amuesauywwcigaii:
        $aquuecykqwyukece[] = "\x34\x30\x34";
        goto ewuwggusemeyaoeg;
        yqacuyiiyyasawoq:
        if (!DecoratorQuery::wqscegcksyocaias()) {
            goto eyeymqwwacmgkguk;
        }
        goto oscougeyomugkoug;
        ikaaqooeymumscig:
        goto eeucoeywckwgosko;
        goto wemwciowaeaeaawu;
        sgyqkuckaeggucco:
        $qookweymeqawmcwo["\152\165\155\x62\x6f\x74\x72\157\x6e"] = __("\x53\x65\x61\x72\x63\150", PR__CMN__FOUNDATION);
        goto kmqsgsgeawqamoie;
        kuogysqmqwwywmqm:
        $cuyooiakswegosog = "\163\x69\x6e\x67\154\145";
        goto mekeikiccweqsogc;
        caeaeseeiessccea:
        goto uoqooqqwsgymmouo;
        goto qeiysasygkeqkkmc;
        ayosecsikkeyuuym:
        kwcicgakmcamiogq:
        goto omiusuyegoigwamq;
        iceauycmeeucqcgo:
        goto eqogmsscscykcqgm;
        goto ecqokyygaomgykoo;
        qswmoeewemmyuiqi:
        uycwawsmiioicssi:
        goto keqgeeiacoyigmao;
        aqwowqaqcaqieeqs:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\146\x72\x6f\156\164";
        goto qswmoeewemmyuiqi;
        kmqsgsgeawqamoie:
        goto mkowasiowacygcmc;
        goto coyowqygyeieauoc;
        aqgmsmicauwwcmoc:
        qceeocwauqqciiuy:
        goto iycgsegwcayoaokc;
        myqsgumkeiicsysc:
        if (DecoratorQuery::cukiusasccucgwqc()) {
            goto qceeocwauqqciiuy;
        }
        goto eseaeaycqccuwyco;
        eaweysiqmkkgkwac:
        $mksyucucyswaukig = DecoratorQuery::imgymusqgccqsqqq();
        goto aiwkocoaiikcuucc;
        kmaoyguoemimecso:
        $qookweymeqawmcwo = ["\144\157\155\x61\x69\x6e" => $mokawwccycoiqeka, "\157\142\152\145\143\x74" => $mksyucucyswaukig, "\x65\170\x63\145\162\160\x74" => ManipulatePost::masoymaamekuykso($mksyucucyswaukig, true), "\x6a\x75\x6d\x62\157\x74\x72\x6f\156" => ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig), "\x70\x6f\x73\164\x5f\x74\171\x70\x65" => $useksmwkuswkwcqg, "\x64\141\x74\145\137\146\157\x72\155\x61\164" => ManipulateSetting::uyomwmskouyyqyyq()];
        goto uqowsciomymeswmi;
        ecqokyygaomgykoo:
        seyqygcoiuykkiky:
        goto qaqwyuyaemiqoiqq;
        omiusuyegoigwamq:
        goto gmakcekscgymkwuw;
        goto esmkyweaqkeuowus;
        mmsacwcmogocammc:
        yimawceemkiikywa:
        goto mgcsgkgocesgmkga;
        imewuueqmqgugces:
        $woaeeewomgcuesaa = "\144\x61\x74\x65";
        goto ekiuwoeuyaqmwike;
        miogmqocysiqgaoe:
        $qookweymeqawmcwo["\145\x78\143\145\x72\x70\164"] = null;
        goto uwwauekgcoyikkas;
        skogggsmiccmaccg:
        $qookweymeqawmcwo["\x5f\143\165\162\x72\145\156\164\137\164\x65\x6d\160\x6c\x61\164\145\x5f\x6e\141\155\x65"] = self::aaimaiecygmeiegm($aquuecykqwyukece);
        goto taeaaqqiqyqsqkca;
        swegmkwugwqkmaow:
        gmakcekscgymkwuw:
        goto ymcuoacyysykkymi;
        mkigaucqcwuumymq:
        negugiuyggcmwiom:
        goto ecsyqomaceguqkym;
        wccsmwwewucwaiqq:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\156\144\x65\170";
        goto wowkkesyiukimoum;
        wsgqgkgmuyauiwou:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg;
        goto oaqceuecwckgqwwi;
        wowkkesyiukimoum:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto aqcuqgqgwkeqwoqa;
        }
        goto cwoqeekayccsekww;
        iwgcqgyswgwuqqmk:
        mkowasiowacygcmc:
        goto ewmysaaeaqqqyggc;
        mekeikiccweqsogc:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg;
        goto gccwaiksqgswmeiw;
        oeymgaowesmmomce:
        goto xaceikmmqesogkkk;
        goto mmsacwcmogocammc;
        eggkgiqcmiqwcuwq:
        uoqooqqwsgymmouo:
        goto ikaaqooeymumscig;
        scmiqqiwqoeeykye:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue;
        goto usmmcqawawuyikqc;
        qaqwyuyaemiqoiqq:
        $kesssewsiegssiya = "\x74\x61\x78\157\x6e\157\155\x79";
        goto qgmyekcuawoscmam;
        owaskuaqsygwwweg:
    }
    
    public static function eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $mkomwsiykqigmqca)
    {
        goto ogwwauwoisesaquk;
        ckisuikoywekkwek:
        return $qqscaoyqikuyeoaw;
        goto oiiaissaigqqukak;
        owogcegmuimumigq:
        foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            goto guwyesieayaqwwwc;
            iqiaeamswsoaqymi:
            goto qciagogsoeqscqoa;
            goto mscessiwysywyiwy;
            maiakmkaieakqgcw:
            $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . "\x2f\151\x6e\x64\145\170\56\x68\x74\155\154\56\164\x77\151\x67";
            goto wkackyygyecyawmc;
            quksemiisuakyogy:
            if (Foundation::symcgieuakksimmu()->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) {
                goto iqsaaqwemikgaqqm;
            }
            goto maiakmkaieakqgcw;
            fsqusouwuuoocgms:
            goto sissqmqgayuoyuka;
            goto gwukckquomemyimi;
            gwukckquomemyimi:
            ogimicmwswaywuic:
            goto oowuiukaummiumeg;
            ukacmmcguiyegisk:
            guciquemewsgcswi:
            goto wayskaeeuaaaqgys;
            mscessiwysywyiwy:
            qeauiuimuamyqyag:
            goto ukacmmcguiyegisk;
            guwyesieayaqwwwc:
            if (is_array($igqsaukqcqscimok)) {
                goto ogimicmwswaywuic;
            }
            goto cawuayaockicukgg;
            gmsciwioeeumqqqm:
            iqsaaqwemikgaqqm:
            goto iqiaeamswsoaqymi;
            cawuayaockicukgg:
            $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . $igqsaukqcqscimok;
            goto qmeuogmwgkqkyuoy;
            ekkimgqmgoscwceu:
            sissqmqgayuoyuka:
            goto quksemiisuakyogy;
            qmeuogmwgkqkyuoy:
            $qqscaoyqikuyeoaw = $qqscaoyqikuyeoaw . "\56\x68\x74\155\x6c\56\x74\x77\x69\x67";
            goto fsqusouwuuoocgms;
            oowuiukaummiumeg:
            $qqscaoyqikuyeoaw = self::eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw);
            goto ekkimgqmgoscwceu;
            wkackyygyecyawmc:
            goto qeauiuimuamyqyag;
            goto gmsciwioeeumqqqm;
            wayskaeeuaaaqgys:
        }
        goto ucyewkyigoeuwqqw;
        ogwwauwoisesaquk:
        $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi);
        goto acqwcuomeqowmuki;
        ucyewkyigoeuwqqw:
        qciagogsoeqscqoa:
        goto ckisuikoywekkwek;
        acqwcuomeqowmuki:
        $qqscaoyqikuyeoaw = '';
        goto owogcegmuimumigq;
        oiiaissaigqqukak:
    }
    
    public static function aaimaiecygmeiegm($aquuecykqwyukece, $sysgmomuyiiawwcm = true)
    {
        goto qswuyacmykqscowy;
        eomaoeoioiwqsuoy:
        kissikswccooyqyy:
        goto iqwsweskgqqmewui;
        vsmwyksywsucgqio:
        foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) {
            goto amckckgmwoeaiway;
            iossyokeeeiiusuy:
            $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, self::aaimaiecygmeiegm($qqscaoyqikuyeoaw, false));
            goto uymmaowygmwcogaa;
            uymmaowygmwcogaa:
            $momcykaoccoymeig++;
            goto ayqikkkwwogkgqgo;
            ewiqkgeiigwsiaci:
            $qcmggaiwyoeyguco[] = $uusmaiomayssaecw;
            goto ciuommsyaguwiyaq;
            ayqikkkwwogkgqgo:
            qggkeuyisecsegyy:
            goto cicyacgoykqoaukq;
            ciuommsyaguwiyaq:
            qumuewaiksewmuco:
            goto iossyokeeeiiusuy;
            amckckgmwoeaiway:
            if (!(!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco))) {
                goto qumuewaiksewmuco;
            }
            goto ewiqkgeiigwsiaci;
            cicyacgoykqoaukq:
        }
        goto yekuikwwkikmcyeg;
        ogywgiaccuewaaws:
        gkiciucyyquaoyuc:
        goto iigksosycwsowisw;
        yekuikwwkikmcyeg:
        weymqmuywegwcuyw:
        goto suykcoiewiyyygus;
        suykcoiewiyyygus:
        ewaicckscgmkaqoa:
        goto iswqwemoogamyiiy;
        iswqwemoogamyiiy:
        if (!$sysgmomuyiiawwcm) {
            goto iocuoaomiikeqygw;
        }
        goto ekaksqgymsouisik;
        uggcsmgwuaiqsaqe:
        if (is_array($aquuecykqwyukece)) {
            goto gkiciucyyquaoyuc;
        }
        goto kqaigymeeoeuwcgy;
        iyswqyqmiwwiaqga:
        iocuoaomiikeqygw:
        goto myekqmoeyaaqikyg;
        kqaigymeeoeuwcgy:
        if (!$aquuecykqwyukece) {
            goto kissikswccooyqyy;
        }
        goto omauogsusekemsmm;
        ekaksqgymsouisik:
        $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco);
        goto osgigagqyqicacag;
        iqwsweskgqqmewui:
        goto ewaicckscgmkaqoa;
        goto ogywgiaccuewaaws;
        qswuyacmykqscowy:
        $qcmggaiwyoeyguco = [];
        goto uggcsmgwuaiqsaqe;
        omauogsusekemsmm:
        $qcmggaiwyoeyguco[] = $aquuecykqwyukece;
        goto eomaoeoioiwqsuoy;
        myekqmoeyaaqikyg:
        return $qcmggaiwyoeyguco;
        goto aoyymeeaucqwsioc;
        iigksosycwsowisw:
        $momcykaoccoymeig = 0;
        goto vsmwyksywsucgqio;
        osgigagqyqicacag:
        krsort($qcmggaiwyoeyguco);
        goto iyswqyqmiwwiaqga;
        aoyymeeaucqwsioc:
    }
    
    public static function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null)
    {
        goto aiiiquiauigsmgaa;
        ekwkmeycsemqiyek:
        if (!$wksoawcgagcgoask) {
            goto memeaeocikosokoe;
        }
        goto wokawocgyeymmgmi;
        ekyuaoiyikemcmam:
        if (!$couygeouymagssgw) {
            goto gcwikqkyswgkiecg;
        }
        goto wwugseiccokcicua;
        eeagqwuqkoeacgoe:
        $esaqeawoigqgagum = $ggauoeuaesiymgee;
        goto ekwkmeycsemqiyek;
        mkaywsiygayewcsi:
        memeaeocikosokoe:
        goto magyyoqoocaywgao;
        magyyoqoocaywgao:
        return $esaqeawoigqgagum;
        goto gecmsqayasqecmau;
        uqswmissykmgmquk:
        $esaqeawoigqgagum = "{$couygeouymagssgw}\x2f{$yucgcsieomwqgwws}\57{$ymqmyyeuycgmigyo}";
        goto gmyqomqqoiaeucmi;
        wwugseiccokcicua:
        $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION);
        goto msgueseecmyycyws;
        aiiiquiauigsmgaa:
        $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask);
        goto eeagqwuqkoeacgoe;
        gmyqomqqoiaeucmi:
        swqugakyysygkaky:
        goto zwwmksgoaoayseke;
        wokawocgyeymmgmi:
        $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw());
        goto ekyuaoiyikemcmam;
        msgueseecmyycyws:
        if (!in_array($yucgcsieomwqgwws, ["\160\150\x70", "\164\x77\x69\x67"])) {
            goto swqugakyysygkaky;
        }
        goto uqswmissykmgmquk;
        zwwmksgoaoayseke:
        gcwikqkyswgkiecg:
        goto mkaywsiygayewcsi;
        gecmsqayasqecmau:
    }
    
    public static function kikcumcscysmmuos($qqscaoyqikuyeoaw = '', $skikiykssoocmmik = false, $ymqmyyeuycgmigyo = null, $post = null)
    {
        goto kaayqsguemieuiis;
        sqigaisycieqgoia:
        scauomkgykckeuig:
        goto hwicmgeaigqwusec;
        yocsowioecgowewy:
        $ymqmyyeuycgmigyo = $iswecucwioowigek = $iswecucwioowigek + 1;
        goto musagcoyuieeysoc;
        uwmsakmmyyqceycw:
        if ($post) {
            goto uckowomugkemkgue;
        }
        goto oyakoogcgmqcimsy;
        yuyoyqeogugoioai:
        static $iswecucwioowigek;
        goto yocsowioecgowewy;
        hwicmgeaigqwusec:
        $egkyssmuqcwaciya = ($skikiykssoocmmik !== "\x73\145\143\x74\x69\x6f\156" ? "\x63\157\x6e\164\141\x69\x6e\x65\x72\40" : '') . "\155\x79\x2d\x35";
        goto sswyicgcmiiiwsey;
        wesgsgugyswioaak:
        wsuciooowcmgmowi:
        goto mygmmosgyusymgio;
        musagcoyuieeysoc:
        mskuymowkcqquekk:
        goto kgisguiqwgcsoquk;
        mwsicmsmyuomkaqs:
        if (defined("\x54\110\x45\x4d\105\137\114\x4f\103\101\124\x49\117\x4e\x5f{$ymqmyyeuycgmigyo}")) {
            goto uyygqqsiiqwkgsui;
        }
        goto kaioaeygmkmqaaqk;
        mygmmosgyusymgio:
        uysiesmiweyywyge:
        goto iqeimykauywksaoi;
        yiuiaoiusussqgsg:
        if (!$ygwoqcwsaggqoamw) {
            goto uysiesmiweyywyge;
        }
        goto cqackumguawiwsqs;
        cqackumguawiwsqs:
        if (!$skikiykssoocmmik) {
            goto cqskeqeqeiuuoqik;
        }
        goto yguauqyoogikoioi;
        sswyicgcmiiiwsey:
        cqskeqeqeiuuoqik:
        goto uiiyisecmcsigiuw;
        oyakoogcgmqcimsy:
        $post = ManipulatePost::get();
        goto saagogsoggsukaye;
        saagogsoggsukaye:
        uckowomugkemkgue:
        goto mwsicmsmyuomkaqs;
        kaayqsguemieuiis:
        if ($ymqmyyeuycgmigyo) {
            goto mskuymowkcqquekk;
        }
        goto yuyoyqeogugoioai;
        gayimesuiaiykyys:
        if (!($skikiykssoocmmik == "\x63\157\x6e\x74\141\x69\x6e\145\x72\x5f\x73\145\x63\164\x69\157\156")) {
            goto scauomkgykckeuig;
        }
        goto quyakkesymokoaeq;
        uiiyisecmcsigiuw:
        foreach ($ygwoqcwsaggqoamw as $ewgwqamkygiqaawc) {
            goto iwyciamigskmeewu;
            yaooawyuysamqsyw:
            awmikciiwqkysckm:
            goto uymusecgskokuwio;
            uymusecgskokuwio:
            echo $ewgwqamkygiqaawc;
            goto cwkyueeeswwkoqsy;
            iwyciamigskmeewu:
            if (!$ewgwqamkygiqaawc) {
                goto muyaeyisosqomqcs;
            }
            goto wkykqogwgoesioce;
            igcqqyyugigksuge:
            mkcekygusayqmika:
            goto umeuikiqwimqsycu;
            cwkyueeeswwkoqsy:
            muyaeyisosqomqcs:
            goto igcqqyyugigksuge;
            qykmwowqsaseweaa:
            $ewgwqamkygiqaawc = ManipulateHTML::uuccukgasskgimsq($kqywgoqsmuswammk, ["\x63\154\141\x73\163" => $egkyssmuqcwaciya, "\x64\x61\164\x61\55\x6c\157\143\141\164\x69\157\x6e" => $ymqmyyeuycgmigyo], $ewgwqamkygiqaawc);
            goto yaooawyuysamqsyw;
            wkykqogwgoesioce:
            if (!isset($kqywgoqsmuswammk, $egkyssmuqcwaciya)) {
                goto awmikciiwqkysckm;
            }
            goto qykmwowqsaseweaa;
            umeuikiqwimqsycu:
        }
        goto wesgsgugyswioaak;
        kwscaymmqgkaooom:
        $ygwoqcwsaggqoamw = DecoratorHook::sscegwueamckwmcy(constant("\x54\110\x45\115\x45\x5f\x4c\117\x43\x41\x54\x49\117\116\x5f{$ymqmyyeuycgmigyo}"), $ygwoqcwsaggqoamw, $qqscaoyqikuyeoaw, $post);
        goto oyeeyaiscawiueym;
        eiumqosouqquwaei:
        goto gmkigekgqeggcsyw;
        goto kggmmmauqiooiiyq;
        kggmmmauqiooiiyq:
        uyygqqsiiqwkgsui:
        goto kwscaymmqgkaooom;
        yguauqyoogikoioi:
        $kqywgoqsmuswammk = $skikiykssoocmmik;
        goto gayimesuiaiykyys;
        quyakkesymokoaeq:
        $kqywgoqsmuswammk = "\163\145\143\x74\x69\x6f\x6e";
        goto sqigaisycieqgoia;
        kaioaeygmkmqaaqk:
        $ygwoqcwsaggqoamw = DecoratorHook::sscegwueamckwmcy("\x74\150\145\155\145\137\x6c\x6f\143\x61\x74\151\157\x6e\137{$ymqmyyeuycgmigyo}", $ygwoqcwsaggqoamw, $post);
        goto eiumqosouqquwaei;
        oyeeyaiscawiueym:
        gmkigekgqeggcsyw:
        goto yiuiaoiusussqgsg;
        kgisguiqwgcsoquk:
        $ygwoqcwsaggqoamw = [];
        goto uwmsakmmyyqceycw;
        iqeimykauywksaoi:
    }
}

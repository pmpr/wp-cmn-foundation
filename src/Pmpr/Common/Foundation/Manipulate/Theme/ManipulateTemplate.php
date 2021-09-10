<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        aoogiacgawmgqcws:
        $ekiuyucoiagmscgy = ManipulateArray::get($ywmkwiwkosakssii, "\x63\141\x6c\x6c\142\141\x63\153");
        goto scqesicowycigooq;
        ggsueikouecmcige:
        $mgkceomocowocqyo = ManipulateArray::get($ywmkwiwkosakssii, "\x63\157\x6e\x74\x65\x78\x74");
        goto aoogiacgawmgqcws;
        gcywquwcawaiuemg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', "\x61\162\x67\x73" => [], "\163\143\x72\145\x65\x6e" => '', "\x69\x63\157\x6e\x5f\x61\164\164\162\x73" => [], self::ICON => '', self::TITLE => '', self::CONTEXT => "\x73\x69\144\x65", self::CALLBACK => '', self::PRIORITY => "\x68\x69\147\x68"]);
        goto ecmgeyyaaiqqaquy;
        uqiwaoyksayoeieo:
        add_meta_box($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc, $mgkceomocowocqyo, $sqqewmoeaekuyyas, ManipulateArray::get($ywmkwiwkosakssii, "\x61\x72\x67\x73"));
        goto riyimamswusgciic;
        ecmgeyyaaiqqaquy:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, "\x69\x64", ManipulateString::uniqid(5));
        goto iuwwmkmcgcokikse;
        ggikisymeecuqsmm:
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        goto ugokecscgukmoaay;
        iuwwmkmcgcokikse:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        goto ggikisymeecuqsmm;
        ikmygkeucamocyki:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\163\x73", "\151\143\x6f\156\55\163\x6d");
        goto gkiomikaiqoeqqmc;
        moauukwmkcwsgcck:
        asqmgywqwougoamy:
        goto uqiwaoyksayoeieo;
        ekiywcmgqeomkuii:
        if (!$wkaqekwwgqsqwcoi) {
            goto asqmgywqwougoamy;
        }
        goto eqeuqmkikikagmuo;
        ugokecscgukmoaay:
        $gcgsqcoqciockquc = ManipulateArray::get($ywmkwiwkosakssii, "\163\143\x72\145\145\x6e");
        goto ggsueikouecmcige;
        scqesicowycigooq:
        $sqqewmoeaekuyyas = ManipulateArray::get($ywmkwiwkosakssii, self::PRIORITY);
        goto ekiywcmgqeomkuii;
        eqeuqmkikikagmuo:
        $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, "\x69\x63\157\x6e\x5f\x61\164\164\x72\x73", []);
        goto ikmygkeucamocyki;
        gkiomikaiqoeqqmc:
        $meqocwsecsywiiqs = ManipulateHTML::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto moauukwmkcwsgcck;
        riyimamswusgciic:
    }
    
    public static function ksokacwymoeoikcy($mokawwccycoiqeka) : array
    {
        goto eaweysiqmkkgkwac;
        iycgsegwcayoaokc:
        $qookweymeqawmcwo["\160\x6f\x73\x74"] = ManipulatePost::get();
        goto kgogsskkkgiicsay;
        mocugwsugyykuuci:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x79\145\x61\162";
        goto ggumygieugkogeie;
        aqwowqaqcaqieeqs:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\146\x72\x6f\x6e\164";
        goto qswmoeewemmyuiqi;
        qeiysasygkeqkkmc:
        aigwcoawoqiiyuoy:
        goto iwsygyquomuqaucc;
        ikaaqooeymumscig:
        goto eeucoeywckwgosko;
        goto wemwciowaeaeaawu;
        iceyqamaamgkuiye:
        $woaeeewomgcuesaa = "\150\x6f\x6d\x65";
        goto wccsmwwewucwaiqq;
        uucsiskwgyuemsio:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = get_the_author_meta("\111\x44");
        goto awekoyymwweemcok;
        caeaeseeiessccea:
        goto uoqooqqwsgymmouo;
        goto qeiysasygkeqkkmc;
        qgukigweaoygmses:
        if (DecoratorQuery::qmssqeyayicowkgy()) {
            goto seyqygcoiuykkiky;
        }
        goto goweagoqgecsmkom;
        ayosecsikkeyuuym:
        kwcicgakmcamiogq:
        goto omiusuyegoigwamq;
        mkigaucqcwuumymq:
        negugiuyggcmwiom:
        goto ecsyqomaceguqkym;
        mekeikiccweqsogc:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg;
        goto gccwaiksqgswmeiw;
        cocqueuqmmywkygm:
        oqawqgiseaqequwa:
        goto mocugwsugyykuuci;
        uuaagqgscgkikwiq:
        if (DecoratorQuery::qwakseskocsyiyks()) {
            goto oqawqgiseaqequwa;
        }
        goto giyokeiwamossgcq;
        kquwuocyiywceqma:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\155\157\156\164\x68";
        goto ykmuscooaoqqsuco;
        mgcsgkgocesgmkga:
        $guwumyyyakswawas = "\143\x61\x74\x65\x67\x6f\162\171";
        goto swkuaoqiuqyiqocc;
        cqueyacekyooqwya:
        goto oyagaakgacgcmkwc;
        goto cocqueuqmmywkygm;
        ecwmcwwcwwgeimky:
        $woaeeewomgcuesaa = "\163\x69\156\147\x75\154\141\x72";
        goto mwqucusegegumycm;
        swegmkwugwqkmaow:
        gmakcekscgymkwuw:
        goto ymcuoacyysykkymi;
        scmiqqiwqoeeykye:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue;
        goto usmmcqawawuyikqc;
        oeymgaowesmmomce:
        goto xaceikmmqesogkkk;
        goto mmsacwcmogocammc;
        gqosimmkeayeeiay:
        wieuawokwmgmceiw:
        goto mgymaosoaggmwmqa;
        smymcgsgsqyouuqq:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue;
        goto mkigaucqcwuumymq;
        yqacuyiiyyasawoq:
        if (!DecoratorQuery::wqscegcksyocaias()) {
            goto eyeymqwwacmgkguk;
        }
        goto oscougeyomugkoug;
        iwsygyquomuqaucc:
        $scwiymciagumsuiw = "\164\141\147";
        goto yqiccguwmsccyyqa;
        qswmoeewemmyuiqi:
        uycwawsmiioicssi:
        goto keqgeeiacoyigmao;
        coyowqygyeieauoc:
        kcaecsuiucisksya:
        goto wicukcksgkockuws;
        taeaaqqiqyqsqkca:
        return [DecoratorHook::sscegwueamckwmcy("\164\145\155\160\x6c\141\164\x65\137\150\x69\x65\162\141\x72\143\x68\171\x5f\x74\145\155\x70\154\141\164\x65\x73", $aquuecykqwyukece, $mksyucucyswaukig), DecoratorHook::sscegwueamckwmcy("\164\x65\x6d\x70\x6c\x61\x74\145\137\x68\151\145\x72\141\162\x63\150\x79\x5f\160\x61\162\x61\155\x65\x74\x65\162\163", $qookweymeqawmcwo, $mksyucucyswaukig)];
        goto owaskuaqsygwwweg;
        imewuueqmqgugces:
        $woaeeewomgcuesaa = "\144\141\164\x65";
        goto ekiuwoeuyaqmwike;
        mumyoaymyyyuoyiw:
        goto akiaoogyckoikwau;
        goto guyuyqqkqqkowsuw;
        skwecackaggcaese:
        if (DecoratorQuery::sgeaogakoscmysgc()) {
            goto wieuawokwmgmceiw;
        }
        goto aciewqmismyqemky;
        eaweysiqmkkgkwac:
        $mksyucucyswaukig = DecoratorQuery::imgymusqgccqsqqq();
        goto aiwkocoaiikcuucc;
        skogggsmiccmaccg:
        $qookweymeqawmcwo["\137\143\x75\x72\x72\x65\156\x74\x5f\164\x65\155\160\x6c\x61\x74\x65\x5f\156\x61\x6d\145"] = self::aaimaiecygmeiegm($aquuecykqwyukece);
        goto taeaaqqiqyqsqkca;
        mwqucusegegumycm:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\156\x64\145\170";
        goto skwecackaggcaese;
        acaauuckwcukguey:
        wciioggmwmkgcsmo:
        goto imewuueqmqgugces;
        giyokeiwamossgcq:
        if (DecoratorQuery::mgkmukikygowogsm()) {
            goto msqqcoeqqwskwkyi;
        }
        goto yqacuyiiyyasawoq;
        gqscyacqyuymugay:
        eyeymqwwacmgkguk:
        goto csqwmmawamquwsey;
        wccsmwwewucwaiqq:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\x6e\x64\145\x78";
        goto wowkkesyiukimoum;
        omyeceqeuciecuws:
        if ($gqgemcmoicmgaqie = get_search_query()) {
            goto kcaecsuiucisksya;
        }
        goto sgyqkuckaeggucco;
        kuogysqmqwwywmqm:
        $cuyooiakswegosog = "\163\x69\x6e\147\x6c\145";
        goto mekeikiccweqsogc;
        amuesauywwcigaii:
        $aquuecykqwyukece[] = "\x34\x30\64";
        goto ewuwggusemeyaoeg;
        qagquueuicwmauos:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug;
        goto eggkgiqcmiqwcuwq;
        uqowsciomymeswmi:
        $aquuecykqwyukece[] = "\151\x6e\x64\145\170";
        goto cmqgqqcqwyuqmkwm;
        osiikiissmgwswuq:
        kwcygsgmoyqwoucu:
        goto iceauycmeeucqcgo;
        aciewqmismyqemky:
        if (!DecoratorQuery::kccakwkaqugygwmq()) {
            goto negugiuyggcmwiom;
        }
        goto kuogysqmqwwywmqm;
        mgymaosoaggmwmqa:
        $suaemuyiacqyugsm = "\160\x61\147\145";
        goto uooagyguuiiescue;
        yqiccguwmsccyyqa:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw;
        goto oqmcsyiauqmssqog;
        gsqqokqkksksoasu:
        eqogmsscscykcqgm:
        goto oeymgaowesmmomce;
        ykmuscooaoqqsuco:
        gaqsemyisaosicwm:
        goto cqueyacekyooqwya;
        ekiuwoeuyaqmwike:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\x69\x6e\144\x65\170";
        goto uuaagqgscgkikwiq;
        yymsiokkikayqocg:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg;
        goto uucsiskwgyuemsio;
        wuuiggsgqkqsgwqc:
        $aaokuekaimigoyue = $mksyucucyswaukig->post_name;
        goto ecwmcwwcwwgeimky;
        guyuyqqkqqkowsuw:
        mcwcsiemyiygggoi:
        goto amuesauywwcigaii;
        qgmyekcuawoscmam:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy;
        goto wiaumkocycscykec;
        gccwaiksqgswmeiw:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm;
        goto smymcgsgsqyouuqq;
        cmqgqqcqwyuqmkwm:
        if (DecoratorQuery::seokosgecygsmqau() || DecoratorQuery::takycgcamoacksqw()) {
            goto mugsqmesmkckewiw;
        }
        goto cqkmemmwmaqiewqu;
        ewmysaaeaqqqyggc:
        $qookweymeqawmcwo["\145\x78\x63\x65\x72\x70\x74"] = null;
        goto aigksikikkwakygs;
        kmaoyguoemimecso:
        $qookweymeqawmcwo = ["\x64\x6f\x6d\x61\151\x6e" => $mokawwccycoiqeka, "\x6f\142\152\145\143\x74" => $mksyucucyswaukig, "\145\170\143\145\162\160\x74" => ManipulatePost::masoymaamekuykso($mksyucucyswaukig, true), "\x6a\165\x6d\x62\x6f\164\x72\x6f\156" => ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig), "\160\x6f\x73\x74\137\164\x79\160\x65" => $useksmwkuswkwcqg, "\x64\x61\x74\x65\137\x66\x6f\162\155\x61\164" => ManipulateSetting::uyomwmskouyyqyyq()];
        goto uqowsciomymeswmi;
        igaawsqwigicwisu:
        goto kwcicgakmcamiogq;
        goto aqgmsmicauwwcmoc;
        ewuwggusemeyaoeg:
        akiaoogyckoikwau:
        goto igaawsqwigicwisu;
        iceauycmeeucqcgo:
        goto eqogmsscscykcqgm;
        goto ecqokyygaomgykoo;
        wowkkesyiukimoum:
        if (DecoratorQuery::takycgcamoacksqw()) {
            goto aqcuqgqgwkeqwoqa;
        }
        goto cwoqeekayccsekww;
        uwwauekgcoyikkas:
        $qookweymeqawmcwo["\x6a\165\155\x62\157\164\x72\157\156"] = get_the_archive_title();
        goto icoqqaegumsqisci;
        mmossocsuqoqoqaq:
        goto uycwawsmiioicssi;
        goto miieimwmkokoiwym;
        wemwciowaeaeaawu:
        aguqgiyuykososog:
        goto ggqcwqwwiysceqau;
        myqsgumkeiicsysc:
        if (DecoratorQuery::cukiusasccucgwqc()) {
            goto qceeocwauqqciiuy;
        }
        goto eseaeaycqccuwyco;
        ymcuoacyysykkymi:
        goto iicqgkmwuwsymaqg;
        goto ggyceegykoiqsymw;
        cwoqeekayccsekww:
        $qookweymeqawmcwo["\152\165\x6d\x62\x6f\x74\x72\x6f\156"] = single_post_title('', false);
        goto mmossocsuqoqoqaq;
        esmkyweaqkeuowus:
        maouoescwmkycecg:
        goto miogmqocysiqgaoe;
        csqwmmawamquwsey:
        goto gaqsemyisaosicwm;
        goto guywkkysoekogqkc;
        eseaeaycqccuwyco:
        if (DecoratorQuery::kmmyuiwaogukwqqi()) {
            goto mcwcsiemyiygggoi;
        }
        goto amimykwokegaicma;
        sgyqkuckaeggucco:
        $qookweymeqawmcwo["\x6a\x75\x6d\x62\157\x74\x72\x6f\x6e"] = __("\x53\x65\x61\162\143\x68", PR__CMN__FOUNDATION);
        goto kmqsgsgeawqamoie;
        qcsmkwkqwyioaisc:
        xaceikmmqesogkkk:
        goto caeaeseeiessccea;
        goweagoqgecsmkom:
        if (DecoratorQuery::oowkceqysamwygwu()) {
            goto wciioggmwmkgcsmo;
        }
        goto wsgqgkgmuyauiwou;
        mmsacwcmogocammc:
        yimawceemkiikywa:
        goto mgcsgkgocesgmkga;
        awekoyymwweemcok:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = get_the_author_meta("\156\151\143\x6b\x6e\141\155\145");
        goto goyukgwckeckooca;
        oaqceuecwckgqwwi:
        goto kwcygsgmoyqwoucu;
        goto acaauuckwcukguey;
        ocgsmgooskgssqus:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug;
        goto qcsmkwkqwyioaisc;
        qaqwyuyaemiqoiqq:
        $kesssewsiegssiya = "\x74\x61\170\157\156\x6f\155\171";
        goto qgmyekcuawoscmam;
        wsgqgkgmuyauiwou:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg;
        goto oaqceuecwckgqwwi;
        eemwaqciuyyoyumm:
        if (DecoratorQuery::mykygowqgwcuecua()) {
            goto aguqgiyuykososog;
        }
        goto eywuguawgaceiumq;
        eggkgiqcmiqwcuwq:
        uoqooqqwsgymmouo:
        goto ikaaqooeymumscig;
        icoqqaegumsqisci:
        $woaeeewomgcuesaa = "\x61\162\x63\x68\x69\x76\145";
        goto ewucgowweqwoksoi;
        ecqokyygaomgykoo:
        seyqygcoiuykkiky:
        goto qaqwyuyaemiqoiqq;
        miogmqocysiqgaoe:
        $qookweymeqawmcwo["\145\170\143\145\162\160\164"] = null;
        goto uwwauekgcoyikkas;
        oscougeyomugkoug:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\144\141\x79";
        goto gqscyacqyuymugay;
        kmqsgsgeawqamoie:
        goto mkowasiowacygcmc;
        goto coyowqygyeieauoc;
        iwgcqgyswgwuqqmk:
        mkowasiowacygcmc:
        goto ewmysaaeaqqqyggc;
        wicukcksgkockuws:
        $qookweymeqawmcwo["\x6a\x75\x6d\142\x6f\164\162\157\156"] = sprintf(__("\123\x65\141\162\x63\x68\40\x72\x65\x73\x75\x6c\x74\x20\x66\157\162\x3a\x20\45\x73", PR__CMN__FOUNDATION), $gqgemcmoicmgaqie);
        goto iwgcqgyswgwuqqmk;
        kgogsskkkgiicsay:
        $aokagokqyuysuksm = $mksyucucyswaukig->ID;
        goto wuuiggsgqkqsgwqc;
        mcykyoomseiweikq:
        qsueaqyaykeuaseo:
        goto mumyoaymyyyuoyiw;
        guywkkysoekogqkc:
        msqqcoeqqwskwkyi:
        goto kquwuocyiywceqma;
        usmmcqawawuyikqc:
        auqsqouuqockimqs:
        goto ayosecsikkeyuuym;
        wiaumkocycscykec:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug;
        goto gsqqokqkksksoasu;
        uooagyguuiiescue:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm;
        goto scmiqqiwqoeeykye;
        cqkmemmwmaqiewqu:
        if (DecoratorQuery::migkyseymeomymmy()) {
            goto maouoescwmkycecg;
        }
        goto myqsgumkeiicsysc;
        ggyceegykoiqsymw:
        mugsqmesmkckewiw:
        goto iceyqamaamgkuiye;
        ecsyqomaceguqkym:
        goto auqsqouuqockimqs;
        goto gqosimmkeayeeiay;
        miieimwmkokoiwym:
        aqcuqgqgwkeqwoqa:
        goto aqwowqaqcaqieeqs;
        ggqcwqwwiysceqau:
        $qscaoekmoooeuyqg = "\141\165\x74\x68\157\x72";
        goto yymsiokkikayqocg;
        amimykwokegaicma:
        if (!DecoratorQuery::gouusicsisumuiei()) {
            goto qsueaqyaykeuaseo;
        }
        goto omyeceqeuciecuws;
        aqgmsmicauwwcmoc:
        qceeocwauqqciiuy:
        goto iycgsegwcayoaokc;
        omiusuyegoigwamq:
        goto gmakcekscgymkwuw;
        goto esmkyweaqkeuowus;
        goyukgwckeckooca:
        eeucoeywckwgosko:
        goto swegmkwugwqkmaow;
        gcymiuiqmckmmick:
        if (DecoratorQuery::sgayqmgoigoseaoo()) {
            goto yimawceemkiikywa;
        }
        goto qgukigweaoygmses;
        ggumygieugkogeie:
        oyagaakgacgcmkwc:
        goto osiikiissmgwswuq;
        aiwkocoaiikcuucc:
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu();
        goto kmaoyguoemimecso;
        ewucgowweqwoksoi:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = "\151\x6e\144\x65\x78";
        goto eemwaqciuyyoyumm;
        aigksikikkwakygs:
        $aquuecykqwyukece[] = "\163\x65\x61\x72\x63\x68";
        goto mcykyoomseiweikq;
        swkuaoqiuqyiqocc:
        $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas;
        goto lekoaosmyqwusmoi;
        oqmcsyiauqmssqog:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id;
        goto qagquueuicwmauos;
        keqgeeiacoyigmao:
        iicqgkmwuwsymaqg:
        goto skogggsmiccmaccg;
        eywuguawgaceiumq:
        if (DecoratorQuery::ocwoeosukggumggw()) {
            goto aigwcoawoqiiyuoy;
        }
        goto gcymiuiqmckmmick;
        lekoaosmyqwusmoi:
        $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id;
        goto ocgsmgooskgssqus;
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
            oowuiukaummiumeg:
            $qqscaoyqikuyeoaw = self::eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw);
            goto ekkimgqmgoscwceu;
            maiakmkaieakqgcw:
            $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . "\57\151\x6e\144\x65\170\56\x68\164\155\x6c\x2e\x74\x77\151\147";
            goto wkackyygyecyawmc;
            iqiaeamswsoaqymi:
            goto qciagogsoeqscqoa;
            goto mscessiwysywyiwy;
            gmsciwioeeumqqqm:
            iqsaaqwemikgaqqm:
            goto iqiaeamswsoaqymi;
            mscessiwysywyiwy:
            qeauiuimuamyqyag:
            goto ukacmmcguiyegisk;
            gwukckquomemyimi:
            ogimicmwswaywuic:
            goto oowuiukaummiumeg;
            ekkimgqmgoscwceu:
            sissqmqgayuoyuka:
            goto quksemiisuakyogy;
            cawuayaockicukgg:
            $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . $igqsaukqcqscimok;
            goto qmeuogmwgkqkyuoy;
            wkackyygyecyawmc:
            goto qeauiuimuamyqyag;
            goto gmsciwioeeumqqqm;
            qmeuogmwgkqkyuoy:
            $qqscaoyqikuyeoaw = $qqscaoyqikuyeoaw . "\56\150\x74\x6d\154\56\164\x77\x69\x67";
            goto fsqusouwuuoocgms;
            ukacmmcguiyegisk:
            guciquemewsgcswi:
            goto wayskaeeuaaaqgys;
            fsqusouwuuoocgms:
            goto sissqmqgayuoyuka;
            goto gwukckquomemyimi;
            quksemiisuakyogy:
            if (Foundation::symcgieuakksimmu()->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) {
                goto iqsaaqwemikgaqqm;
            }
            goto maiakmkaieakqgcw;
            guwyesieayaqwwwc:
            if (is_array($igqsaukqcqscimok)) {
                goto ogimicmwswaywuic;
            }
            goto cawuayaockicukgg;
            wayskaeeuaaaqgys:
        }
        goto ucyewkyigoeuwqqw;
        ogwwauwoisesaquk:
        $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi);
        goto acqwcuomeqowmuki;
        acqwcuomeqowmuki:
        $qqscaoyqikuyeoaw = '';
        goto owogcegmuimumigq;
        ucyewkyigoeuwqqw:
        qciagogsoeqscqoa:
        goto ckisuikoywekkwek;
        oiiaissaigqqukak:
    }
    
    public static function aaimaiecygmeiegm($aquuecykqwyukece, $sysgmomuyiiawwcm = true)
    {
        goto qswuyacmykqscowy;
        suykcoiewiyyygus:
        ewaicckscgmkaqoa:
        goto iswqwemoogamyiiy;
        qswuyacmykqscowy:
        $qcmggaiwyoeyguco = [];
        goto uggcsmgwuaiqsaqe;
        iigksosycwsowisw:
        $momcykaoccoymeig = 0;
        goto vsmwyksywsucgqio;
        ekaksqgymsouisik:
        $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco);
        goto osgigagqyqicacag;
        eomaoeoioiwqsuoy:
        kissikswccooyqyy:
        goto iqwsweskgqqmewui;
        iqwsweskgqqmewui:
        goto ewaicckscgmkaqoa;
        goto ogywgiaccuewaaws;
        kqaigymeeoeuwcgy:
        if (!$aquuecykqwyukece) {
            goto kissikswccooyqyy;
        }
        goto omauogsusekemsmm;
        omauogsusekemsmm:
        $qcmggaiwyoeyguco[] = $aquuecykqwyukece;
        goto eomaoeoioiwqsuoy;
        ogywgiaccuewaaws:
        gkiciucyyquaoyuc:
        goto iigksosycwsowisw;
        uggcsmgwuaiqsaqe:
        if (is_array($aquuecykqwyukece)) {
            goto gkiciucyyquaoyuc;
        }
        goto kqaigymeeoeuwcgy;
        iyswqyqmiwwiaqga:
        iocuoaomiikeqygw:
        goto myekqmoeyaaqikyg;
        iswqwemoogamyiiy:
        if (!$sysgmomuyiiawwcm) {
            goto iocuoaomiikeqygw;
        }
        goto ekaksqgymsouisik;
        yekuikwwkikmcyeg:
        weymqmuywegwcuyw:
        goto suykcoiewiyyygus;
        myekqmoeyaaqikyg:
        return $qcmggaiwyoeyguco;
        goto aoyymeeaucqwsioc;
        vsmwyksywsucgqio:
        foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) {
            goto amckckgmwoeaiway;
            uymmaowygmwcogaa:
            $momcykaoccoymeig++;
            goto ayqikkkwwogkgqgo;
            ciuommsyaguwiyaq:
            qumuewaiksewmuco:
            goto iossyokeeeiiusuy;
            ayqikkkwwogkgqgo:
            qggkeuyisecsegyy:
            goto cicyacgoykqoaukq;
            iossyokeeeiiusuy:
            $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, self::aaimaiecygmeiegm($qqscaoyqikuyeoaw, false));
            goto uymmaowygmwcogaa;
            ewiqkgeiigwsiaci:
            $qcmggaiwyoeyguco[] = $uusmaiomayssaecw;
            goto ciuommsyaguwiyaq;
            amckckgmwoeaiway:
            if (!(!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco))) {
                goto qumuewaiksewmuco;
            }
            goto ewiqkgeiigwsiaci;
            cicyacgoykqoaukq:
        }
        goto yekuikwwkikmcyeg;
        osgigagqyqicacag:
        krsort($qcmggaiwyoeyguco);
        goto iyswqyqmiwwiaqga;
        aoyymeeaucqwsioc:
    }
    
    public static function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null)
    {
        goto aiiiquiauigsmgaa;
        wokawocgyeymmgmi:
        $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw());
        goto ekyuaoiyikemcmam;
        gmyqomqqoiaeucmi:
        swqugakyysygkaky:
        goto zwwmksgoaoayseke;
        msgueseecmyycyws:
        if (!in_array($yucgcsieomwqgwws, ["\x70\x68\x70", "\x74\x77\x69\x67"])) {
            goto swqugakyysygkaky;
        }
        goto uqswmissykmgmquk;
        wwugseiccokcicua:
        $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION);
        goto msgueseecmyycyws;
        magyyoqoocaywgao:
        return $esaqeawoigqgagum;
        goto gecmsqayasqecmau;
        ekwkmeycsemqiyek:
        if (!$wksoawcgagcgoask) {
            goto memeaeocikosokoe;
        }
        goto wokawocgyeymmgmi;
        eeagqwuqkoeacgoe:
        $esaqeawoigqgagum = $ggauoeuaesiymgee;
        goto ekwkmeycsemqiyek;
        ekyuaoiyikemcmam:
        if (!$couygeouymagssgw) {
            goto gcwikqkyswgkiecg;
        }
        goto wwugseiccokcicua;
        zwwmksgoaoayseke:
        gcwikqkyswgkiecg:
        goto mkaywsiygayewcsi;
        uqswmissykmgmquk:
        $esaqeawoigqgagum = "{$couygeouymagssgw}\x2f{$yucgcsieomwqgwws}\57{$ymqmyyeuycgmigyo}";
        goto gmyqomqqoiaeucmi;
        mkaywsiygayewcsi:
        memeaeocikosokoe:
        goto magyyoqoocaywgao;
        aiiiquiauigsmgaa:
        $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask);
        goto eeagqwuqkoeacgoe;
        gecmsqayasqecmau:
    }
    
    public static function kikcumcscysmmuos($qqscaoyqikuyeoaw = '', $skikiykssoocmmik = false, $ymqmyyeuycgmigyo = null, $post = null)
    {
        goto kaayqsguemieuiis;
        mygmmosgyusymgio:
        uysiesmiweyywyge:
        goto iqeimykauywksaoi;
        eiumqosouqquwaei:
        goto gmkigekgqeggcsyw;
        goto kggmmmauqiooiiyq;
        oyeeyaiscawiueym:
        gmkigekgqeggcsyw:
        goto yiuiaoiusussqgsg;
        yguauqyoogikoioi:
        $kqywgoqsmuswammk = $skikiykssoocmmik;
        goto gayimesuiaiykyys;
        saagogsoggsukaye:
        uckowomugkemkgue:
        goto mwsicmsmyuomkaqs;
        kggmmmauqiooiiyq:
        uyygqqsiiqwkgsui:
        goto kwscaymmqgkaooom;
        cqackumguawiwsqs:
        if (!$skikiykssoocmmik) {
            goto cqskeqeqeiuuoqik;
        }
        goto yguauqyoogikoioi;
        kaioaeygmkmqaaqk:
        $ygwoqcwsaggqoamw = DecoratorHook::sscegwueamckwmcy("\x74\x68\x65\x6d\145\x5f\154\x6f\x63\141\x74\151\157\156\137{$ymqmyyeuycgmigyo}", $ygwoqcwsaggqoamw, $post);
        goto eiumqosouqquwaei;
        uiiyisecmcsigiuw:
        foreach ($ygwoqcwsaggqoamw as $ewgwqamkygiqaawc) {
            goto iwyciamigskmeewu;
            qykmwowqsaseweaa:
            $ewgwqamkygiqaawc = ManipulateHTML::uuccukgasskgimsq($kqywgoqsmuswammk, ["\143\154\x61\x73\163" => $egkyssmuqcwaciya, "\x64\141\x74\141\x2d\154\157\143\x61\x74\x69\157\156" => $ymqmyyeuycgmigyo], $ewgwqamkygiqaawc);
            goto yaooawyuysamqsyw;
            yaooawyuysamqsyw:
            awmikciiwqkysckm:
            goto uymusecgskokuwio;
            wkykqogwgoesioce:
            if (!isset($kqywgoqsmuswammk, $egkyssmuqcwaciya)) {
                goto awmikciiwqkysckm;
            }
            goto qykmwowqsaseweaa;
            uymusecgskokuwio:
            echo $ewgwqamkygiqaawc;
            goto cwkyueeeswwkoqsy;
            cwkyueeeswwkoqsy:
            muyaeyisosqomqcs:
            goto igcqqyyugigksuge;
            igcqqyyugigksuge:
            mkcekygusayqmika:
            goto umeuikiqwimqsycu;
            iwyciamigskmeewu:
            if (!$ewgwqamkygiqaawc) {
                goto muyaeyisosqomqcs;
            }
            goto wkykqogwgoesioce;
            umeuikiqwimqsycu:
        }
        goto wesgsgugyswioaak;
        quyakkesymokoaeq:
        $kqywgoqsmuswammk = "\x73\145\x63\164\x69\157\156";
        goto sqigaisycieqgoia;
        oyakoogcgmqcimsy:
        $post = ManipulatePost::get();
        goto saagogsoggsukaye;
        sqigaisycieqgoia:
        scauomkgykckeuig:
        goto hwicmgeaigqwusec;
        mwsicmsmyuomkaqs:
        if (defined("\124\110\105\x4d\x45\137\x4c\x4f\x43\x41\x54\111\x4f\116\137{$ymqmyyeuycgmigyo}")) {
            goto uyygqqsiiqwkgsui;
        }
        goto kaioaeygmkmqaaqk;
        musagcoyuieeysoc:
        mskuymowkcqquekk:
        goto kgisguiqwgcsoquk;
        kaayqsguemieuiis:
        if ($ymqmyyeuycgmigyo) {
            goto mskuymowkcqquekk;
        }
        goto yuyoyqeogugoioai;
        kwscaymmqgkaooom:
        $ygwoqcwsaggqoamw = DecoratorHook::sscegwueamckwmcy(constant("\124\110\105\x4d\x45\137\x4c\117\x43\101\x54\x49\117\x4e\x5f{$ymqmyyeuycgmigyo}"), $ygwoqcwsaggqoamw, $qqscaoyqikuyeoaw, $post);
        goto oyeeyaiscawiueym;
        wesgsgugyswioaak:
        wsuciooowcmgmowi:
        goto mygmmosgyusymgio;
        sswyicgcmiiiwsey:
        cqskeqeqeiuuoqik:
        goto uiiyisecmcsigiuw;
        yiuiaoiusussqgsg:
        if (!$ygwoqcwsaggqoamw) {
            goto uysiesmiweyywyge;
        }
        goto cqackumguawiwsqs;
        gayimesuiaiykyys:
        if (!($skikiykssoocmmik == "\143\x6f\x6e\164\x61\151\156\x65\x72\137\163\x65\143\164\151\157\x6e")) {
            goto scauomkgykckeuig;
        }
        goto quyakkesymokoaeq;
        yuyoyqeogugoioai:
        static $iswecucwioowigek;
        goto yocsowioecgowewy;
        uwmsakmmyyqceycw:
        if ($post) {
            goto uckowomugkemkgue;
        }
        goto oyakoogcgmqcimsy;
        hwicmgeaigqwusec:
        $egkyssmuqcwaciya = ($skikiykssoocmmik !== "\x73\x65\143\x74\x69\x6f\156" ? "\143\157\156\x74\x61\x69\x6e\145\162\40" : '') . "\155\171\55\x35";
        goto sswyicgcmiiiwsey;
        yocsowioecgowewy:
        $ymqmyyeuycgmigyo = $iswecucwioowigek = $iswecucwioowigek + 1;
        goto musagcoyuieeysoc;
        kgisguiqwgcsoquk:
        $ygwoqcwsaggqoamw = [];
        goto uwmsakmmyyqceycw;
        iqeimykauywksaoi:
    }
}

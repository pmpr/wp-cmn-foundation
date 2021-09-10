<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Theme;

use Pmpr\Common\Foundation\Convert\Type\ConvertArray;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Template\Template;

class ManipulateHTML extends Common
{
    
    public static function cuumgioggkmuecyo() : string
    {
        return self::uuccukgasskgimsq("\x64\151\x76", ["\x63\x6c\141\163\x73" => "\144\55\146\x6c\x65\170\40\152\165\x73\164\x69\x66\x79\55\143\x6f\x6e\164\145\x6e\x74\x2d\x73\x74\141\x72\x74"], ["\45\62\x24\163", self::uuccukgasskgimsq("\163\155\x61\x6c\x6c", ["\143\x6c\x61\x73\x73" => "\146\x6f\156\x74\x2d\x31\63\x20\155\x79\55\141\165\x74\x6f\x20\155\x6c\x2d\62"], "\45\61\x24\x73")]);
    }
    
    public static function skyucqyswomguscg($uomewyckeuqoqocu)
    {
        goto icuiiyecyaosmkig;
        uwcmqocsckgoycos:
        wkimauiikcmicukk:
        goto eyoqguiuawqqmqsq;
        wikocscgqkqoeyag:
        return esc_attr($aqykuigiuwmmcieu);
        goto eaoooeokgceokgym;
        eyoqguiuawqqmqsq:
        $aqykuigiuwmmcieu = json_encode($uomewyckeuqoqocu);
        goto ogywoqseeawwouuu;
        waakcieqeowcyces:
        $aqykuigiuwmmcieu = implode("\40", $uomewyckeuqoqocu);
        goto cossouqayakwquwq;
        ogywoqseeawwouuu:
        sssossmaugysoosg:
        goto quakaiyiukaeoggu;
        icuiiyecyaosmkig:
        if (is_array($uomewyckeuqoqocu)) {
            goto scqeiomoywugwmgm;
        }
        goto eacgwgwwwaeoeeee;
        omokwaassiaqugwi:
        if (ManipulateArray::gogeqwskoiiaocoe($uomewyckeuqoqocu)) {
            goto wkimauiikcmicukk;
        }
        goto waakcieqeowcyces;
        cossouqayakwquwq:
        goto sssossmaugysoosg;
        goto uwcmqocsckgoycos;
        quakaiyiukaeoggu:
        ieyqwwmaaeigusck:
        goto wikocscgqkqoeyag;
        eacgwgwwwaeoeeee:
        $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
        goto rkymcyiuygsasous;
        rkymcyiuygsasous:
        goto ieyqwwmaaeigusck;
        goto uiqemmagesmiamcu;
        uiqemmagesmiamcu:
        scqeiomoywugwmgm:
        goto omokwaassiaqugwi;
        eaoooeokgceokgym:
    }
    
    public static function aoyseswaaaugicuq($uomewyckeuqoqocu, $oswgusmmccauqika = "\x22") : ?string
    {
        goto ggakeykgaywwuico;
        wgcuscwuwmiumqag:
        if (!is_array($uomewyckeuqoqocu)) {
            goto ukoqmmisagkuskku;
        }
        goto mqwsuaogooqyusmg;
        ggakeykgaywwuico:
        $aqykuigiuwmmcieu = '';
        goto wgcuscwuwmiumqag;
        mqwsuaogooqyusmg:
        foreach ($uomewyckeuqoqocu as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) {
            goto uokesuqoiakammsq;
            uyeskyscwoaceaum:
            $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40";
            goto yusiukmgiqcycoyw;
            uokesuqoiakammsq:
            $eqgoocgaqwqcimie = self::skyucqyswomguscg($eqgoocgaqwqcimie);
            goto mqismiccqmeaacmm;
            ossgegmcqmikiako:
            ymskiasoemcgoywc:
            goto aymaycgmskceqaoo;
            qmssemegysygmmig:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x3d{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\x20";
            goto yiqsyymaccyskgka;
            yusiukmgiqcycoyw:
            qucqsuqgimegkagu:
            goto geoqmawmyksikoyk;
            yiqsyymaccyskgka:
            goto qucqsuqgimegkagu;
            goto icwmksqayogauieq;
            mqismiccqmeaacmm:
            if (preg_replace("\57\134\163\53\57", '', $eqgoocgaqwqcimie)) {
                goto ymskiasoemcgoywc;
            }
            goto mmkyoekoacqmsiug;
            aymaycgmskceqaoo:
            if (is_numeric($ymqmyyeuycgmigyo)) {
                goto qgcaikicmyiaiqyo;
            }
            goto qmssemegysygmmig;
            wgsgyisoiwmyqgsy:
            goto oasooegcuaqyaksa;
            goto ossgegmcqmikiako;
            mmkyoekoacqmsiug:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x20";
            goto wgsgyisoiwmyqgsy;
            wyyumeauogsokwwy:
            kakkcssaiwwuieig:
            goto wkkoyqmigawkyoww;
            geoqmawmyksikoyk:
            oasooegcuaqyaksa:
            goto wyyumeauogsokwwy;
            icwmksqayogauieq:
            qgcaikicmyiaiqyo:
            goto uyeskyscwoaceaum;
            wkkoyqmigawkyoww:
        }
        goto akqqwkcyeiuguaee;
        gcogkoymaecaouei:
        return rtrim($aqykuigiuwmmcieu, "\40");
        goto aoamgmomuauiaomq;
        acmqcaimwssoqwcu:
        ukoqmmisagkuskku:
        goto gcogkoymaecaouei;
        akqqwkcyeiuguaee:
        uygkaowwykyuwcms:
        goto acmqcaimwssoqwcu;
        aoamgmomuauiaomq:
    }
    
    public static function kqmkicmuscsgqeoi($ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii[self::ICON] = ManipulateArray::get($ywmkwiwkosakssii, self::ICON, IconFontawesomeInterface::ICON_SPINNER_THIRD);
        return Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::SPINNER_TEMPLATE_PATH, $ywmkwiwkosakssii);
    }
    
    public static function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array
    {
        goto caosicamgweuouqy;
        ecqymkukooyucuao:
        uweqegqcewaiwgeo:
        goto memoemokqyckwuam;
        caosicamgweuouqy:
        if (!$gcegymooyemmaysk) {
            goto uweqegqcewaiwgeo;
        }
        goto ckawyuougmawuagq;
        wiggagegkomwsigy:
        $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk);
        goto ecqymkukooyucuao;
        memoemokqyckwuam:
        return $sysgmomuyiiawwcm;
        goto wqqayaqgqaokkewk;
        ckawyuougmawuagq:
        foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) {
            goto omegwywwowgccqgc;
            qsgqsgqoasquyegw:
            unset($gcegymooyemmaysk[$uusmaiomayssaecw]);
            goto eckqwskioaqieuiw;
            eckqwskioaqieuiw:
            eikgkciokyogmmae:
            goto gqckiowescyoycek;
            omegwywwowgccqgc:
            if (!isset($gcegymooyemmaysk[$uusmaiomayssaecw])) {
                goto eikgkciokyogmmae;
            }
            goto uiwwomawycusiaqc;
            uiwwomawycusiaqc:
            $sysgmomuyiiawwcm[$uusmaiomayssaecw] = self::igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee);
            goto qsgqsgqoasquyegw;
            gqckiowescyoycek:
            kiwsouqmoaeuwcyi:
            goto omcqkauyquamiwkw;
            omcqkauyquamiwkw:
        }
        goto cseosawememugocs;
        cseosawememugocs:
        ykmomgoksisygqmi:
        goto wiggagegkomwsigy;
        wqqayaqgqaokkewk:
    }
    
    public static function cmsgeysmsqqogeki($uomewyckeuqoqocu, $yygmoeguaqyumuui)
    {
        goto qogkwuqcauywuqyy;
        gggawowkmoygokiu:
        uykcwaomeewcauqm:
        goto ymuwsmqieegccmec;
        qogkwuqcauywuqyy:
        foreach ($yygmoeguaqyumuui as $msqkueqksqwmskak => $uwomkgseoiegeume) {
            goto yasaysggqceikmye;
            ymiiiqccumeseqgg:
            ManipulateArray::unset($uomewyckeuqoqocu, $msqkueqksqwmskak);
            goto sqkaggmqmkgwkimu;
            uweweeiagegyukye:
            $uomewyckeuqoqocu[$uwomkgseoiegeume] = $uomewyckeuqoqocu[$msqkueqksqwmskak];
            goto ymiiiqccumeseqgg;
            qwssywogokmegcwg:
            agkccauguemomgyi:
            goto ugsyacuawyeqcywk;
            yasaysggqceikmye:
            if (!isset($uomewyckeuqoqocu[$msqkueqksqwmskak])) {
                goto gcwekuwcsakcsyiu;
            }
            goto uweweeiagegyukye;
            sqkaggmqmkgwkimu:
            gcwekuwcsakcsyiu:
            goto qwssywogokmegcwg;
            ugsyacuawyeqcywk:
        }
        goto gggawowkmoygokiu;
        ymuwsmqieegccmec:
        return $uomewyckeuqoqocu;
        goto usgequsgggeskams;
        usgequsgggeskams:
    }
    
    public static function gmqyuaqwgiayskei($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\160\x61\156", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false, $qawsmigsyysqwmeq = false)
    {
        goto yyeuoiccgweskqgw;
        uuckosesigqwyykq:
        if ($gskuwmeemyeuwogc) {
            goto iiosuiiicgmwuquu;
        }
        goto ywcomywyegmgoiqc;
        wiuaoykkoqsqcciu:
        if (!$wkaqekwwgqsqwcoi) {
            goto kmckgogusyyoyiia;
        }
        goto ewseyicyoqscoyic;
        ewseyicyoqscoyic:
        if (ManipulateValidation::wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) {
            goto wsyouakcyuwgsmmq;
        }
        goto ywigugwyqieqkcoe;
        mgcymqumaiwgmswy:
        $wkaqekwwgqsqwcoi = Template::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc, $qawsmigsyysqwmeq);
        goto qgeeemyaomggagku;
        gaukmueogumwwwmi:
        eaaaqmqycgcqiaee:
        goto sqgkwwsqomcqewuu;
        qyigcogcwakysqwo:
        return $nsmgceoqaqogqmuw;
        goto gucssmauyukceoiu;
        egeesoksqmwwsuoe:
        if (ManipulateAttachment::aauyuieeeaakygki($wkaqekwwgqsqwcoi)) {
            goto iqkuskokswaoiosy;
        }
        goto mgcymqumaiwgmswy;
        qgeeemyaomggagku:
        goto eaaaqmqycgcqiaee;
        goto ksmkyewagskkoeok;
        ksmkyewagskkoeok:
        iqkuskokswaoiosy:
        goto uasiqigosyqwisuq;
        eiyeysucoukeiqii:
        kmckgogusyyoyiia:
        goto qyigcogcwakysqwo;
        uasiqigosyqwisuq:
        $wkaqekwwgqsqwcoi = ManipulateAttachment::mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi);
        goto gaukmueogumwwwmi;
        cewwgkwqeuayygeq:
        guqgcsmiuskcawsy:
        goto myacgeqsygaaicsw;
        geigqkwcacssimqk:
        iiosuiiicgmwuquu:
        goto mykcwaiwmsyaacog;
        eukmgmmseugskiio:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x69\143\157\156\137\141\164\x74\162\x69\142\165\164\x65\163", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi);
        goto uuckosesigqwyykq;
        ywcomywyegmgoiqc:
        $wwgucssaecqekuek["\x73\162\x63"] = $wkaqekwwgqsqwcoi;
        goto mgqgsoaoauaoioku;
        esmwouucumeuaaiq:
        goto guqgcsmiuskcawsy;
        goto geigqkwcacssimqk;
        mykcwaiwmsyaacog:
        $wkaqekwwgqsqwcoi = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto cewwgkwqeuayygeq;
        ywigugwyqieqkcoe:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\163", "\160\x72\55\x69\143\157\156");
        goto egeesoksqmwwsuoe;
        sqgkwwsqomcqewuu:
        wsyouakcyuwgsmmq:
        goto eukmgmmseugskiio;
        mgqgsoaoauaoioku:
        $wkaqekwwgqsqwcoi = self::uuccukgasskgimsq("\x69\155\x67", $wwgucssaecqekuek);
        goto esmwouucumeuaaiq;
        yyeuoiccgweskqgw:
        $nsmgceoqaqogqmuw = '';
        goto wiuaoykkoqsqcciu;
        myacgeqsygaaicsw:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\x69\x63\157\x6e\137\150\164\x6d\x6c", $wkaqekwwgqsqwcoi);
        goto eiyeysucoukeiqii;
        gucssmauyukceoiu:
    }
    
    public static function ciuuiyckmsygceis($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\163\x74\x72\x6f\x6e\x67", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function icqkogwskuwscskk($ywmkwiwkosakssii = [], $gskauacumcmekigs = []) : string
    {
        goto gqqsowqiouwisway;
        myogiyogisykoogo:
        $wwgucssaecqekuek["\144\141\x74\141\x2d\155\x6f\144\141\154"] = ManipulateArray::get($qsqwqsymmqeoqwcu, "\160\x72\x65\146\x69\x78", "\147\x65\156\x65\x72\141\x6c") . "\x5f\x6d\x6f\144\x61\x6c";
        goto egioqiaqgkcociok;
        ouokoaqgueuukoes:
        $ewgwqamkygiqaawc = ManipulateArray::unset($gskauacumcmekigs, "\143\157\156\x74\x65\156\164");
        goto mggmcgicyksgeoga;
        uawqemsmoegqwcys:
        return $nsmgceoqaqogqmuw;
        goto ewoqemggggmuiicc;
        wkmksaskwoeiqgqq:
        $nsmgceoqaqogqmuw = Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::MODAL_TEMPLATE_PATH, $qsqwqsymmqeoqwcu);
        goto kgmwksacomoyiemk;
        cyawmgceseyseywk:
        maqacaoweqmyiuua:
        goto wkmksaskwoeiqgqq;
        museocscicoguyic:
        sskgwegakoyqqkku:
        goto qcgikckikqqwewqg;
        keeikoymoqwakmuc:
        $wwgucssaecqekuek = ManipulateArray::get($gskauacumcmekigs, "\x61\164\x74\x72\x73", []);
        goto aeeygmyoycocsaow;
        ymmooquwukiemiuu:
        if (ManipulateArray::get($qsqwqsymmqeoqwcu, "\160\x72\145\146\x69\170", '')) {
            goto maqacaoweqmyiuua;
        }
        goto iquuyccmwaqmeiwc;
        waeogmkyweaagquk:
        $wwgucssaecqekuek["\150\x72\145\146"] = "\x23";
        goto giyuysmwumkyayiq;
        aumekwowaoymcamo:
        iauuciyimekqwsqe:
        goto uawqemsmoegqwcys;
        qukgkymacqckmyoq:
        $kqywgoqsmuswammk = ManipulateArray::get($gskauacumcmekigs, "\145\x6c\x65\155\145\156\164", "\x62\165\164\164\157\x6e");
        goto myogiyogisykoogo;
        iquuyccmwaqmeiwc:
        _doing_it_wrong(__FUNCTION__, __("\x70\x6c\x65\x61\163\x65\x20\x73\x70\x65\143\151\146\x79\x20\141\x20\x70\x72\x65\x66\151\x78\x20\146\x6f\162\40\x66\157\x72\40\x6d\x6f\x64\x61\x6c", PR__CMN__FOUNDATION), 1);
        goto cyawmgceseyseywk;
        mggmcgicyksgeoga:
        if ($ewgwqamkygiqaawc) {
            goto sskgwegakoyqqkku;
        }
        goto scimwiammysocuma;
        scimwiammysocuma:
        $ewgwqamkygiqaawc = $meqocwsecsywiiqs;
        goto museocscicoguyic;
        aeeygmyoycocsaow:
        $meqocwsecsywiiqs = ManipulateArray::get($gskauacumcmekigs, "\x74\x69\x74\x6c\145");
        goto qukgkymacqckmyoq;
        gqwciegucimkisai:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\x73", "\x70\162\x2d\x63\157\x6e\146\x69\162\155\141\x62\x6c\145\x2d\141\143\x74\x69\x6f\156");
        goto ouokoaqgueuukoes;
        egioqiaqgkcociok:
        if (!($kqywgoqsmuswammk == "\141" && !ManipulateArray::get($wwgucssaecqekuek, "\x68\x72\x65\146", false))) {
            goto yceuaweskqgkyccw;
        }
        goto waeogmkyweaagquk;
        giyuysmwumkyayiq:
        yceuaweskqgkyccw:
        goto gqwciegucimkisai;
        qcgikckikqqwewqg:
        $nsmgceoqaqogqmuw .= self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
        goto aumekwowaoymcamo;
        kgmwksacomoyiemk:
        if (!$gskauacumcmekigs) {
            goto iauuciyimekqwsqe;
        }
        goto keeikoymoqwakmuc;
        gqqsowqiouwisway:
        $qsqwqsymmqeoqwcu = ManipulateFormat::omaawkkwwyesqwcc(self::uskieqmcqyecigmy(array_merge($ywmkwiwkosakssii, ["\152\x73\157\156" => false])), ["\166\x69\145\167" => "\144\x69\x61\154\x6f\x67", "\160\x72\145\x66\151\170" => "\147\145\x6e\145\162\x61\154", "\x73\x70\151\x6e\x6e\x65\x72" => false, "\143\x6c\157\x73\x65\x5f\164\151\x74\x6c\145" => __("\x43\154\157\x73\145", PR__CMN__FOUNDATION)]);
        goto ymmooquwukiemiuu;
        ewoqemggggmuiicc:
    }
    
    public static function igmaewykumgwoaoy($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto ayiuauyqkcycymiq;
        camisusksgocgiyu:
        kmoaiymaumccccmw:
        goto kyqgyywuaqkskkmq;
        oeegwqskokyysgia:
        ckyaekugwcaaogua:
        goto yaowsqucwakaesoi;
        wasokaaaiesgoiwu:
        if ($uusmaiomayssaecw) {
            goto scgooimgesucqmyw;
        }
        goto yougiukokiwueagg;
        igwuuiisiiiacqog:
        goto yseiyiawimkkgwgu;
        goto diqmggkiascwcmgo;
        aqmyaskcyisumkec:
        goto kcuquqyuoqukkiae;
        goto sceiisuuogsqyaua;
        sayimokgekmuieyc:
        if ($uusmaiomayssaecw) {
            goto csuyiuccwoewwymw;
        }
        goto awyisykkykwugmcs;
        mekuokossigwmiay:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\40", $eqgoocgaqwqcimie));
        goto ayassegeqauesegc;
        mqiuuuiuyieomgsm:
        $wisgiwskwawciiee = '';
        goto iewaqqoywiiueooc;
        ocmaakqeqigyqmcm:
        ycgeiokgsmiwocco:
        goto wasokaaaiesgoiwu;
        sceiisuuogsqyaua:
        eyosqwqswsqcuekw:
        goto cgouooqwgiessagu;
        ayassegeqauesegc:
        koeaocaigyiuouma:
        goto ykeywoiececiccqk;
        ayiuauyqkcycymiq:
        if (is_object($siquossayskcwkea) && $uusmaiomayssaecw) {
            goto eyosqwqswsqcuekw;
        }
        goto iykoiouoygaumuak;
        zkyyykgsamwwykec:
        $wisgiwskwawciiee = '';
        goto gmaokugqemkqaymu;
        yougiukokiwueagg:
        $wisgiwskwawciiee = $siquossayskcwkea;
        goto esouewuuwooociii;
        cgouooqwgiessagu:
        if (isset($siquossayskcwkea->{$uusmaiomayssaecw})) {
            goto kmoaiymaumccccmw;
        }
        goto zkyyykgsamwwykec;
        mkuiaigaaiiusgcw:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto xaoaqqukaokieeos;
        esouewuuwooociii:
        goto ckyaekugwcaaogua;
        goto scikcooocqiscwuk;
        mmkeguscoeyqgsaq:
        csuyiuccwoewwymw:
        goto woemqeiusiyyycao;
        csmmacecmeiqukou:
        yseiyiawimkkgwgu:
        goto auamqueygsmcgeua;
        wgqacmwcgiemyqsm:
        if (isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto qgigwkeaoogkycqq;
        }
        goto mqiuuuiuyieomgsm;
        eycywwwuywwiewae:
        qgigwkeaoogkycqq:
        goto mkuiaigaaiiusgcw;
        diqmggkiascwcmgo:
        ssgusiykmcsmacke:
        goto esgcqqwkiqagqcqu;
        mmocggcuysgcayqs:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\40", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\40" . $eqgoocgaqwqcimie);
        goto ugsucquekakgyyoe;
        icaoeusmweymiows:
        if (!is_array($siquossayskcwkea)) {
            goto cucwasiugcaiugkw;
        }
        goto sayimokgekmuieyc;
        gmaokugqemkqaymu:
        goto quaqcuogeasmkwum;
        goto camisusksgocgiyu;
        ykeywoiececiccqk:
        if (is_object($siquossayskcwkea)) {
            goto ssgusiykmcsmacke;
        }
        goto icaoeusmweymiows;
        ymqgkiswgyiwkiee:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto mkmewusqskqwyiga;
        }
        goto mmocggcuysgcayqs;
        kyqgyywuaqkskkmq:
        $wisgiwskwawciiee = $siquossayskcwkea->{$uusmaiomayssaecw};
        goto oeogicauwqmuckmc;
        xaoaqqukaokieeos:
        ieamiiycguksgyae:
        goto oeegwqskokyysgia;
        iewaqqoywiiueooc:
        goto ieamiiycguksgyae;
        goto eycywwwuywwiewae;
        ykywwwymygscykam:
        ykagosqgwoyewmsm:
        goto mekuokossigwmiay;
        qgoesugiyiiqgaka:
        cucwasiugcaiugkw:
        goto igwuuiisiiiacqog;
        skiieiyqgwecickk:
        return trim($siquossayskcwkea . "\40" . (is_array($eqgoocgaqwqcimie) ? implode("\x20", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie));
        goto gkqqeoyqwmaqweus;
        scikcooocqiscwuk:
        scgooimgesucqmyw:
        goto wgqacmwcgiemyqsm;
        awyisykkykwugmcs:
        $siquossayskcwkea = $wisgiwskwawciiee;
        goto euqwyueoiyaciwmu;
        ugsucquekakgyyoe:
        mkmewusqskqwyiga:
        goto cykquwwqoyuqacka;
        euqwyueoiyaciwmu:
        goto ugcgciqmmuumiwss;
        goto mmkeguscoeyqgsaq;
        wcqmkqkoekwggcaq:
        if (is_array($eqgoocgaqwqcimie)) {
            goto ykagosqgwoyewmsm;
        }
        goto ymqgkiswgyiwkiee;
        oeogicauwqmuckmc:
        quaqcuogeasmkwum:
        goto ggcqsikuoaowocia;
        ggcqsikuoaowocia:
        kcuquqyuoqukkiae:
        goto wcqmkqkoekwggcaq;
        cykquwwqoyuqacka:
        goto koeaocaigyiuouma;
        goto ykywwwymygscykam;
        iykoiouoygaumuak:
        if (is_array($siquossayskcwkea)) {
            goto ycgeiokgsmiwocco;
        }
        goto skiieiyqgwecickk;
        wecqeaiwiowwougo:
        ugcgciqmmuumiwss:
        goto qgoesugiyiiqgaka;
        yaowsqucwakaesoi:
        wykcswiwacwksyeo:
        goto aqmyaskcyisumkec;
        woemqeiusiyyycao:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto wecqeaiwiowwougo;
        auamqueygsmcgeua:
        return $siquossayskcwkea;
        goto smueyuiwaswcmmyq;
        esgcqqwkiqagqcqu:
        $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee;
        goto csmmacecmeiqukou;
        gkqqeoyqwmaqweus:
        goto wykcswiwacwksyeo;
        goto ocmaakqeqigyqmcm;
        smueyuiwaswcmmyq:
    }
    
    public static function gusouagusgyoaeya($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\160", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function yekemqwyimcqgeuk($ewgwqamkygiqaawc, $ekasyoagocygouom, $wwgucssaecqekuek = []) : string
    {
        $wwgucssaecqekuek["\x64\141\164\x65\x74\x69\155\x65"] = $ekasyoagocygouom;
        return self::uuccukgasskgimsq("\164\x69\x6d\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy = [], $wwgucssaecqekuek = []) : string
    {
        goto iaaigscysuqkassk;
        uckskmkusokoegaw:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\x74\x68\145\x61\x64", [], $kakckmgscyiskome);
        goto wqwuwausogwsuqqc;
        asuaoeiwuqaugwaa:
        return self::uuccukgasskgimsq("\164\141\x62\x6c\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
        goto mesgcyiaogasqowm;
        ieeoomsoskweuome:
        foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) {
            $kakckmgscyiskome .= self::uuccukgasskgimsq("\x74\150", ["\x64\x61\164\x61\x2d\x6b\145\171" => "\x74\x68\x2d{$uusmaiomayssaecw}", "\143\x6c\141\x73\x73" => "\x74\145\170\x74\55\154\x65\x66\x74"], $kmmmiumuegqmksky);
            auqmkwoggqyaskcq:
        }
        goto qikugkuomgekwawu;
        uqyqusgiassqqgso:
        $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk;
        goto emgcuckeyeakwoww;
        miowwquwweeycgyu:
        kosquscyqqgygykc:
        goto uqyqusgiassqqgso;
        igmqymyemckoaqgi:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\163", "\164\141\x62\154\145\40\x6d\55\60");
        goto asuaoeiwuqaugwaa;
        doykmuigywoqqiso:
        $ymoekaoqgqmmgoqk = '';
        goto gmqmassuiycwosek;
        wqwuwausogwsuqqc:
        ugyquwcqwgkykyom:
        goto woeogayusoaoawio;
        wakcyckyeemwoqgk:
        $kakckmgscyiskome = '';
        goto ieeoomsoskweuome;
        gmqmassuiycwosek:
        foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) {
            goto egwsiqoumyssgaiw;
            cqouisksowcqsqga:
            $ecuqamumceeoyiui = ManipulateArray::get($keuwuekioomqqaey, "\164\x72\x5f\141\x74\x74\162\163", []);
            goto isawcgqqwuaucgga;
            isawcgqqwuaucgga:
            $ecuqamumceeoyiui["\x64\x61\164\141\x2d\x6b\145\x79"] = "\164\x72\x2d{$momcykaoccoymeig}";
            goto yeucaeocmeokqggg;
            quiscsoaasusqsii:
            qigqugqceqksaoaq:
            goto cqouisksowcqsqga;
            gecomumkgckmoicc:
            foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) {
                goto oqwqqsiygukqweey;
                aqgeqqeaykqsqqyy:
                wowqwsgksqqqmucw:
                goto gkqcgyeqkcisqgck;
                uoioeqiqmewckqwq:
                cwsmeosaaeaamosg:
                goto ecqkiigukgcscequ;
                mugcawkwqggykqkq:
                goto cwsmeosaaeaamosg;
                goto aqgeqqeaykqsqqyy;
                gkqcgyeqkcisqgck:
                $ykaygkcscgyoiiae .= self::uuccukgasskgimsq("\164\144", ["\x64\141\x74\x61\x2d\153\x65\x79" => "\x74\144\x2d{$uusmaiomayssaecw}\x2d{$momcykaoccoymeig}"], $yycqiageqkquoioq);
                goto uoioeqiqmewckqwq;
                oqwqqsiygukqweey:
                if (!($uusmaiomayssaecw == "\164\162\137\141\164\164\x72\x73")) {
                    goto wowqwsgksqqqmucw;
                }
                goto mugcawkwqggykqkq;
                ecqkiigukgcscequ:
            }
            goto quiscsoaasusqsii;
            egwsiqoumyssgaiw:
            $ykaygkcscgyoiiae = '';
            goto gecomumkgckmoicc;
            yeucaeocmeokqggg:
            $ymoekaoqgqmmgoqk .= self::uuccukgasskgimsq("\164\x72", $ecuqamumceeoyiui, $ykaygkcscgyoiiae);
            goto owaoemsqwmcymegi;
            owaoemsqwmcymegi:
            caykkyawcquykaig:
            goto qcsqqqkmmswawmqo;
            qcsqqqkmmswawmqo:
        }
        goto miowwquwweeycgyu;
        wqsueawiwmaymyye:
        if (!$uykgysuswksgmwqy) {
            goto ugyquwcqwgkykyom;
        }
        goto wakcyckyeemwoqgk;
        ucyecesyqmiackww:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\164\x62\157\x64\x79", [], $essikcmqiyqaqoaq);
        goto igmqymyemckoaqgi;
        qikugkuomgekwawu:
        akwwymwisyauswko:
        goto uckskmkusokoegaw;
        iaaigscysuqkassk:
        $ewgwqamkygiqaawc = '';
        goto wqsueawiwmaymyye;
        emgcuckeyeakwoww:
        asweayesceakosic:
        goto ucyecesyqmiackww;
        woeogayusoaoawio:
        if (!is_array($essikcmqiyqaqoaq)) {
            goto asweayesceakosic;
        }
        goto doykmuigywoqqiso;
        mesgcyiaogasqowm:
    }
    
    public static function sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $mogykyiukkoqceec = 6) : string
    {
        goto kwqswmuukaymcqoq;
        qigywyiuuemsacoe:
        $giwamsoicooomueg = '';
        goto csosomiukogmmcme;
        iewaoiacicouqcmy:
        oeecmqccguiykkqm:
        goto cswywwkcqekmigki;
        woyasoooseaaaaio:
        qeuewcmsumowussm:
        goto qigywyiuuemsacoe;
        csosomiukogmmcme:
        if (!$qgqgaykggoemycsk) {
            goto oeecmqccguiykkqm;
        }
        goto iowuiukuyewqkkae;
        eaeogyomscegkayw:
        cycuoasiccouwyqw:
        goto iewaoiacicouqcmy;
        kwqswmuukaymcqoq:
        if (!is_array($qgqgaykggoemycsk)) {
            goto qeuewcmsumowussm;
        }
        goto owmgcskcyawsqskm;
        iowuiukuyewqkkae:
        $wkkweuacukumqmya = array_filter(explode("\143\157\154\x2d", $qgoqiacsiccwoawi));
        goto cewmkewqmueeeyyc;
        cswywwkcqekmigki:
        return rtrim($giwamsoicooomueg);
        goto msmmauiswokuyasc;
        cewmkewqmueeeyyc:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto iewukqcakeoaogea;
            zseoycemqgkocuoy:
            $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}";
            goto swmckgcuukkqqckq;
            csmkgqiuimmymqaw:
            mskqaiwsecmeksgy:
            goto wgggekucgkaiksaw;
            swugymmweuogwusw:
            oucesaewqyuwiiqg:
            goto yuceksygooykweoy;
            swoccyieyiyocaai:
            $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi;
            goto sqikqgygycksuyoa;
            uocgaiiuusguaayy:
            
            $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0];
            goto msyquusciakoksug;
            oqiwsqaskogasows:
            $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi;
            goto emuussqoawouymue;
            qakuswcwwswiesyi:
            goto oimimqggwmcwcayu;
            goto iyqqogayqsmeocus;
            msyquusciakoksug:
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1];
            goto ywacykwawisgmguq;
            kemgeqwcacseqmgu:
            $gcgsqcoqciockquc = '';
            goto wwwmsesaeqsooeso;
            gewmecseymwsqeaw:
            goto mmewqwgucqqooauq;
            goto csmkgqiuimmymqaw;
            sqikqgygycksuyoa:
            if (!($aoqagsqecokqqwqg == $ykiwomimkkuiigoq)) {
                goto umioqieqqagmckwg;
            }
            goto oqiwsqaskogasows;
            iuaagccgiiyoewqi:
            mmewqwgucqqooauq:
            goto swugymmweuogwusw;
            wwwmsesaeqsooeso:
            if ($gaeqamemwmwsyukm == 1) {
                goto eiceowycmoycqkuk;
            }
            goto kgmmymowamcgesku;
            qieaauqeoyssiwei:
            if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) {
                goto mskqaiwsecmeksgy;
            }
            goto aesqmgsmqugcmwsu;
            swmckgcuukkqqckq:
            caeamkmmgyasuywc:
            goto qieaauqeoyssiwei;
            mkikkgwwyiemokme:
            $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length;
            goto swoccyieyiyocaai;
            kgmmymowamcgesku:
            if (!($gaeqamemwmwsyukm == 2)) {
                goto gmugaowewyiyooea;
            }
            goto uocgaiiuusguaayy;
            qomksaimmayiiiwk:
            $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi;
            goto mkikkgwwyiemokme;
            emuussqoawouymue:
            umioqieqqagmckwg:
            goto uessyqkuysyoaqwm;
            iewukqcakeoaogea:
            $eqgoocgaqwqcimie = explode("\x2d", $qgoqiacsiccwoawi);
            goto uquiseikicyaaaka;
            uessyqkuysyoaqwm:
            if (!$gcgsqcoqciockquc) {
                goto caeamkmmgyasuywc;
            }
            goto zseoycemqgkocuoy;
            uquiseikicyaaaka:
            $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie);
            goto kemgeqwcacseqmgu;
            iyqqogayqsmeocus:
            eiceowycmoycqkuk:
            goto iscaiaaawwcwwaqe;
            wgggekucgkaiksaw:
            $giwamsoicooomueg .= "\40\x6d\142{$gcgsqcoqciockquc}\x2d\60";
            goto iuaagccgiiyoewqi;
            aesqmgsmqugcmwsu:
            $giwamsoicooomueg .= "\x20\155\142{$gcgsqcoqciockquc}\x2d{$mogykyiukkoqceec}";
            goto gewmecseymwsqeaw;
            ywacykwawisgmguq:
            gmugaowewyiyooea:
            goto qakuswcwwswiesyi;
            iscaiaaawwcwwaqe:
            
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0];
            goto syucwaiqcwoigmyi;
            syucwaiqcwoigmyi:
            oimimqggwmcwcayu:
            goto qomksaimmayiiiwk;
            yuceksygooykweoy:
        }
        goto eaeogyomscegkayw;
        owmgcskcyawsqskm:
        $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\151\x6e\x64\145\170", "\154\x65\x6e\x67\164\150"]);
        goto woyasoooseaaaaio;
        msmmauiswokuyasc:
    }
    
    public static function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto escogkseqmmsucuy;
        kaiusyuqauywqwii:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto iacqiaeyscguwyia;
        iacqiaeyscguwyia:
        woasacgcwusiuimk:
        goto sigasyakmuoqkmmk;
        esqwuigiwqkiwwea:
        $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea));
        goto akaqcyoimeoumcim;
        ogcsckmescouyqmc:
        $wisgiwskwawciiee = implode("\x20", $wisgiwskwawciiee);
        goto oogioucuccasmyak;
        vaaikkcmqgsiwkum:
        if (!(($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee)) !== false)) {
            goto auiissiemumqmkwa;
        }
        goto uwecaymwqkkicime;
        qimocyquekymmiuk:
        $ukwmeuiywasikwcu = true;
        goto wogokussyamayesu;
        gcukuckckaiewegs:
        if (!is_array($wisgiwskwawciiee)) {
            goto yumcwyyykaumkeau;
        }
        goto oquqawmmasaicyua;
        amuouaaiumwgawui:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto qgsyukssiqqqyqky;
        akaqcyoimeoumcim:
        gqiuksowisyaqsgs:
        goto swyesueumaokiieq;
        eecmomwqeicciqok:
        $wisgiwskwawciiee = explode("\x20", $wisgiwskwawciiee);
        goto qimocyquekymmiuk;
        uwecaymwqkkicime:
        unset($wisgiwskwawciiee[$ccamueccusigaaio]);
        goto skuskikumqguccee;
        skuskikumqguccee:
        auiissiemumqmkwa:
        goto ogasoacwwskwkuwo;
        agckiaesekmciuyw:
        if (is_string($siquossayskcwkea)) {
            goto muuekeyeccsssuow;
        }
        goto cocigaqusqewkiuy;
        sigasyakmuoqkmmk:
        yumcwyyykaumkeau:
        goto gcoakgwgoisggsma;
        escogkseqmmsucuy:
        $ukwmeuiywasikwcu = false;
        goto agckiaesekmciuyw;
        oogioucuccasmyak:
        owecwquwkacmmwsm:
        goto kaiusyuqauywqwii;
        qgsyukssiqqqyqky:
        if (!is_string($wisgiwskwawciiee)) {
            goto eoigcqiakssieeau;
        }
        goto eecmomwqeicciqok;
        siqiwagoqooemoaw:
        goto gqiuksowisyaqsgs;
        goto yaugumwgommeyeii;
        cocigaqusqewkiuy:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto sociuakymqqoqscu;
        }
        goto amuouaaiumwgawui;
        swyesueumaokiieq:
        return $siquossayskcwkea;
        goto gomaeoikykwymgwc;
        ogasoacwwskwkuwo:
        if (!$ukwmeuiywasikwcu) {
            goto owecwquwkacmmwsm;
        }
        goto ogcsckmescouyqmc;
        yaugumwgommeyeii:
        muuekeyeccsssuow:
        goto esqwuigiwqkiwwea;
        gcoakgwgoisggsma:
        sociuakymqqoqscu:
        goto siqiwagoqooemoaw;
        wogokussyamayesu:
        eoigcqiakssieeau:
        goto gcukuckckaiewegs;
        oquqawmmasaicyua:
        if (!in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee)) {
            goto woasacgcwusiuimk;
        }
        goto vaaikkcmqgsiwkum;
        gomaeoikykwymgwc:
    }
    
    public static function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $siquossayskcwkea;
    }
    
    public static function wouimaqqweceiamk($iwamiguusayooguq, $wkaqekwwgqsqwcoi = '') : string
    {
        goto uqgskaesqkwyiyws;
        ukmewkukokeqigos:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($wkaqekwwgqsqwcoi, "\x69\x63\x6f\x6e", '');
        goto mcswsycyyuouesmw;
        ssikoeweoiwuqqoe:
        if (!is_array($wkaqekwwgqsqwcoi)) {
            goto sggquugugsmuiwwe;
        }
        goto sesoweewqkwcymwu;
        isaickqmmmkeicgo:
        return self::qgsekwygcgawekeq("\x64\151\166", ["\x63\154\141\x73\x73" => "\x70\162\x2d\155\x6f\x64\141\x6c\x2d\147\x75\151\x64\x65\x20\x64\55\146\154\x65\170"], true, $wkaqekwwgqsqwcoi . $iwamiguusayooguq);
        goto owukqqsugwsyyueu;
        uqgskaesqkwyiyws:
        $iwamiguusayooguq = self::qgsekwygcgawekeq("\163\x70\141\x6e", ["\x63\x6c\x61\163\x73" => "\155\171\x2d\x61\x75\x74\x6f"], true, $iwamiguusayooguq);
        goto mgosoyoeuiqwiwmk;
        iumsyyqaikswuqic:
        $wwgucssaecqekuek = [];
        goto ssikoeweoiwuqqoe;
        sesoweewqkwcymwu:
        $wwgucssaecqekuek = ManipulateArray::get($wkaqekwwgqsqwcoi, "\x61\164\164\x72\163", []);
        goto ukmewkukokeqigos;
        yciamiooeekkmayo:
        uoysyuggmqqmcekw:
        goto isaickqmmmkeicgo;
        mgosoyoeuiqwiwmk:
        if (!$wkaqekwwgqsqwcoi) {
            goto uoysyuggmqqmcekw;
        }
        goto iumsyyqaikswuqic;
        igwoiimkmmmscuoi:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\163", "\x6d\x79\x2d\141\x75\x74\x6f\40\151\143\157\x6e\55\163\x6d\x20\155\x72\x2d\62");
        goto okswmkyoomseaueq;
        okswmkyoomseaueq:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true);
        goto yciamiooeekkmayo;
        mcswsycyyuouesmw:
        sggquugugsmuiwwe:
        goto igwoiimkmmmscuoi;
        owukqqsugwsyyueu:
    }
    
    public static function ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw, $iqaosyayeiuaisqi = false) : string
    {
        goto wawaocswoauwmmus;
        ksguecmqmcsogyig:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\x75\154", [], $suuagcecoyuweoqk);
        goto uewwowiwgoyesikg;
        gaesmekmwiaksqsm:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\144\x69\166", ["\x63\x6c\x61\163\x73" => "\x74\x65\170\x74\x2d\143\x65\x6e\x74\145\x72\40\x6d\157\144\141\154\55\x6d\145\163\x73\x61\x67\x65\x20\155\x6f\144\x61\154\x2d\155\145\x73\x73\x61\x67\145\x2d" . ($iqaosyayeiuaisqi ? $iqaosyayeiuaisqi : ($occymigcemkqucuw ? "\x73\x75\143\x63\145\x73\x73" : "\x64\141\156\x67\x65\x72"))], $uamcoiueqaamsqma);
        goto ikewqccciwsqcamq;
        kayosmeqqkicimqa:
        sqwciumeqyaccyau:
        goto ksguecmqmcsogyig;
        suqmqyegkqmyqmok:
        $suuagcecoyuweoqk = '';
        goto cuyucakmwasgeaew;
        wawaocswoauwmmus:
        if (!is_array($uamcoiueqaamsqma)) {
            goto uuucmcsegiwmgqyk;
        }
        goto suqmqyegkqmyqmok;
        goegcwmuuaiokimo:
        if (!is_string($uamcoiueqaamsqma)) {
            goto qcgascowuioocwig;
        }
        goto gaesmekmwiaksqsm;
        maaaegyeiiecykkk:
        return $uamcoiueqaamsqma;
        goto ckqmyeycucqcugaq;
        cuyucakmwasgeaew:
        foreach ($uamcoiueqaamsqma as $yaakimaumwqiaeei) {
            $suuagcecoyuweoqk .= self::uuccukgasskgimsq("\154\x69", [], $yaakimaumwqiaeei);
            qmqaskwucyouocqk:
        }
        goto kayosmeqqkicimqa;
        uewwowiwgoyesikg:
        uuucmcsegiwmgqyk:
        goto goegcwmuuaiokimo;
        ikewqccciwsqcamq:
        qcgascowuioocwig:
        goto maaaegyeiiecykkk;
        ckqmyeycucqcugaq:
    }
    
    public static function uskieqmcqyecigmy($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\142\165\164\x74\x6f\x6e")
    {
        goto ymiqqkqcasmeswai;
        yikiisaoucasocwm:
        jwegkqgqigkyimwy:
        goto mcqowyeqgcwcomaa;
        isameaaesyeqewyw:
        if (!in_array("\x63\141\156\x63\x65\x6c", $qyukicweqoisimwg)) {
            goto yyqqwqqueqsmwuek;
        }
        goto oawacyogaucwgeqa;
        mcqowyeqgcwcomaa:
        if (!($smgooosyoeqwcaeg = ManipulateArray::get($ywmkwiwkosakssii, "\152\163\157\156"))) {
            goto coyqmiyssicuemqc;
        }
        goto icumqgcukqmiqmas;
        icumqgcukqmiqmas:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, $smgooosyoeqwcaeg);
        goto aqeaocoemqqeogww;
        gemaacocysicmuis:
        if (!$qyukicweqoisimwg) {
            goto jwegkqgqigkyimwy;
        }
        goto isameaaesyeqewyw;
        wmoueywscoykgego:
        yyqqwqqueqsmwuek:
        goto qmeiewyqewgycomy;
        uesyowisqckwqweq:
        $ywmkwiwkosakssii["\x62\165\164\x74\157\156\163"] = $qyukicweqoisimwg;
        goto yikiisaoucasocwm;
        aqeaocoemqqeogww:
        coyqmiyssicuemqc:
        goto cecysuuokaaksaei;
        kiegwkgkkmwoigue:
        $qyukicweqoisimwg = ManipulateArray::get($ywmkwiwkosakssii, "\x62\165\x74\x74\157\x6e\x73", []);
        goto gemaacocysicmuis;
        oawacyogaucwgeqa:
        $qyukicweqoisimwg[array_search("\x63\141\x6e\143\x65\154", $qyukicweqoisimwg)] = ["\x63\154\x61\163\163" => "\x62\164\156\40\142\164\156\55\x6f\x75\164\154\151\156\145\x2d\160\x72\151\x6d\x61\162\171", "\164\151\x74\154\145" => __("\103\141\156\143\x65\x6c", PR__CMN__FOUNDATION), "\144\151\163\x6d\x69\x73\163" => true];
        goto wmoueywscoykgego;
        cecysuuokaaksaei:
        return $ywmkwiwkosakssii;
        goto gamqmoqcksyqiwyi;
        ymiqqkqcasmeswai:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x79\160\x65" => "\151\x6e\x66\x6f", "\152\x73\157\x6e" => JSON_UNESCAPED_SLASHES, "\x73\151\172\x65" => "\x6d\144", "\x74\151\x74\x6c\145" => __("\x41\154\x65\162\164", PR__CMN__FOUNDATION), "\143\157\x6e\x74\x65\156\x74" => '', "\142\x75\164\164\157\x6e\163" => []]);
        goto kiegwkgkkmwoigue;
        koiouyakeqieqaug:
        aqgwciseuyqyomme:
        goto uesyowisqckwqweq;
        qmeiewyqewgycomy:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto qiaowiwiqqmegouc;
            eosyseigsygisgay:
            if (!ManipulateArray::get($gskauacumcmekigs, "\x64\151\x73\x6d\151\x73\163", false)) {
                goto kcwquqksumqqmccq;
            }
            goto yuaussgmgweicywq;
            iouaimmmokqaicae:
            iueeimyiyygkcuke:
            goto aemkoeoaageqwmgm;
            wmymgosowycieomq:
            $scwiymciagumsuiw = $kqywgoqsmuswammk;
            goto miyguwmiomkywqwi;
            uwgewqagamkqykuc:
            if ($geecqyososceumsk) {
                goto iueeimyiyygkcuke;
            }
            goto wmymgosowycieomq;
            eousywekqyqmkigg:
            qoouwuqgucsyyaii:
            goto omgwcmaawwmwewuy;
            aemkoeoaageqwmgm:
            $scwiymciagumsuiw = "\x61";
            goto wcukoowiwmgeqmck;
            cueqqguumyoieuqi:
            $gskauacumcmekigs = self::igmaewykumgwoaoy($gskauacumcmekigs, "\143\x6c\141\163\x73", "\160\170\55\65");
            goto uwgewqagamkqykuc;
            cywceaauueswisma:
            $geecqyososceumsk = ManipulateArray::get($gskauacumcmekigs, "\150\162\145\x66");
            goto cueqqguumyoieuqi;
            miyguwmiomkywqwi:
            goto uesguqmcseqmcycc;
            goto iouaimmmokqaicae;
            qiaowiwiqqmegouc:
            if (!is_array($gskauacumcmekigs)) {
                goto qoouwuqgucsyyaii;
            }
            goto eosyseigsygisgay;
            yuaussgmgweicywq:
            $gskauacumcmekigs[] = "\144\x61\164\x61\55\155\151\143\x72\157\x6d\157\144\x61\x6c\55\x63\x6c\x6f\x73\x65";
            goto qyauooaokskicoqw;
            wcukoowiwmgeqmck:
            uesguqmcseqmcycc:
            goto cuuuygiqqiausmsg;
            qyauooaokskicoqw:
            kcwquqksumqqmccq:
            goto cywceaauueswisma;
            omgwcmaawwmwewuy:
            syoegaiagasioioi:
            goto gyqwksoocmmwsmii;
            cuuuygiqqiausmsg:
            $qyukicweqoisimwg[$momcykaoccoymeig] = self::qgsekwygcgawekeq($scwiymciagumsuiw, $gskauacumcmekigs, true, ManipulateArray::get($gskauacumcmekigs, "\x74\151\164\x6c\145"));
            goto eousywekqyqmkigg;
            gyqwksoocmmwsmii:
        }
        goto koiouyakeqieqaug;
        gamqmoqcksyqiwyi:
    }
    
    public static function sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '')
    {
        echo self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
    }
    
    public static function wegccueewucwyaew($ywmkwiwkosakssii = [])
    {
        goto ouyokyouaaccmeiq;
        wcqiyaiokyqgquyy:
        return $ewgwqamkygiqaawc;
        goto guwwwoemeywymeeq;
        ouyokyouaaccmeiq:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x68\x61\x73\x5f\x62\157\144\171" => true, self::ICON => '', self::TITLE => '', self::ATTRS => [], self::CONTENT => '']);
        goto kmwayeqackmikqec;
        iusomscskwyimymg:
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        goto kgwsooywwuaeuakk;
        yqiwseeymqmgiicm:
        wayeaiimomiuikeg:
        goto fawgiiyqcaycokqm;
        ewmuieggokyocuak:
        $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, self::ATTRS);
        goto iusomscskwyimymg;
        kgwsooywwuaeuakk:
        $ewgwqamkygiqaawc = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT);
        goto mumgumaweigkucas;
        kmwayeqackmikqec:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        goto ewmuieggokyocuak;
        bamowoeqaswucwam:
        qmaiauoqwugaayyg:
        goto wcqiyaiokyqgquyy;
        qwcmmmosiuyqkwaw:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\150\x32", ["\143\154\141\x73\x73" => "\x6d\x2d\x30"], $meqocwsecsywiiqs);
        goto kqkaeoogyymkisak;
        kqkaeoogyymkisak:
        akqyksqaagqcqgyi:
        goto csgwwcggmgyygmeg;
        csmukgiomieeyisi:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\144\x69\166", $wwgucssaecqekuek, [$meqocwsecsywiiqs, $ewgwqamkygiqaawc]);
        goto bamowoeqaswucwam;
        fawgiiyqcaycokqm:
        if (!$meqocwsecsywiiqs) {
            goto akqyksqaagqcqgyi;
        }
        goto aaywckeuwqmamysu;
        mumgumaweigkucas:
        if (!$ewgwqamkygiqaawc) {
            goto qmaiauoqwugaayyg;
        }
        goto aaiscsiamgmkyywe;
        aaiscsiamgmkyywe:
        if (!$ywmkwiwkosakssii["\x68\141\x73\137\142\x6f\144\x79"]) {
            goto wayeaiimomiuikeg;
        }
        goto oewekkuywgckgccs;
        oewekkuywgckgccs:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\x64\x69\x76", ["\x63\x6c\x61\x73\x73" => "\x63\141\162\x64\55\142\157\x64\x79"], $ewgwqamkygiqaawc);
        goto yqiwseeymqmgiicm;
        csgwwcggmgyygmeg:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\163\163", "\160\x72\55\x63\141\162\x64\x20\x63\141\162\144");
        goto csmukgiomieeyisi;
        aaywckeuwqmamysu:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\x64\151\x76", ["\143\154\x61\x73\x73" => "\143\141\x72\144\55\150\145\141\x64\x65\162"], self::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi));
        goto qwcmmmosiuyqkwaw;
        guwwwoemeywymeeq:
    }
    
    public static function smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false)
    {
        goto wioocaycsoigykgi;
        moqmuoigoekayaie:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        goto sswmeckkgqmsycec;
        viawiegsusqwukmw:
        return $meqocwsecsywiiqs;
        goto gwuqaeaisqmugywc;
        caeuuiwgcwiauiea:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi . $meqocwsecsywiiqs);
        goto meqsymuyaicwuqge;
        sswmeckkgqmsycec:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\x63\154\141\x73\163" => "\155\154\55\62"]);
        goto caeuuiwgcwiauiea;
        meqsymuyaicwuqge:
        ieiowqqyqmuuiskw:
        goto viawiegsusqwukmw;
        wioocaycsoigykgi:
        if (!$wkaqekwwgqsqwcoi) {
            goto ieiowqqyqmuuiskw;
        }
        goto moqmuoigoekayaie;
        gwuqaeaisqmugywc:
    }
    
    public static function oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, $wwgucssaecqekuek = [], $wygwqsssewkqooqm = true) : string
    {
        goto icukyuomwsmyceuu;
        aigmckisemoscykc:
        if (!$wygwqsssewkqooqm) {
            goto ukukwawaqmgwyeoa;
        }
        goto eswkoskowykeswog;
        eswkoskowykeswog:
        $egkyssmuqcwaciya .= "\40\151\163\x2d\144\x69\x73\155\x69\163\163\151\x62\154\x65";
        goto iywkociqqsqwemum;
        ueyeiwwskkiwqses:
        return self::qgsekwygcgawekeq("\144\151\166", $wwgucssaecqekuek, true, self::gusouagusgyoaeya($uamcoiueqaamsqma));
        goto yikcegqaeeomgayu;
        icukyuomwsmyceuu:
        $egkyssmuqcwaciya = "\x6e\157\x74\151\143\145\40\156\x6f\164\151\x63\x65\x2d{$iqaosyayeiuaisqi}";
        goto aigmckisemoscykc;
        iywkociqqsqwemum:
        ukukwawaqmgwyeoa:
        goto aikaemyaeysqwkao;
        aikaemyaeysqwkao:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\x73", $egkyssmuqcwaciya);
        goto ueyeiwwskkiwqses;
        yikcegqaeeomgayu:
    }
    
    public static function awwqwouuoioauoaw($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '')
    {
        echo self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc);
    }
    
    public static function uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string
    {
        return self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
    }
    
    public static function qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') : string
    {
        goto wwyawygoukmokcak;
        wgyokqwasmgockga:
        $ggkaciewmeqmgckg = "\74\45\x73\x20\45\163\x3e\x25\163";
        goto oymwkgoekiscmgkk;
        ygewsqqmmosmsikg:
        uuysgoccuuiugycs:
        goto socgcieqocmyicko;
        guewwiqmwqkqeuqa:
        $aqykuigiuwmmcieu = sprintf("\x25\x73\x3c\57\45\x73\76", $aqykuigiuwmmcieu, $kqywgoqsmuswammk);
        goto yqiayekgygkgyoww;
        oymwkgoekiscmgkk:
        if (!in_array($kqywgoqsmuswammk, ["\x69\x6e\x70\x75\x74", "\x62\162", "\150\162", "\x69\x6d\x67", "\154\x69\x6e\153"])) {
            goto ymkyeiuqcgcwyssa;
        }
        goto wwwiccouwgagwsus;
        eewwosymwcycgaim:
        goto iiwomycesoecmsmg;
        goto ygewsqqmmosmsikg;
        yqiayekgygkgyoww:
        gksksycwauoamskw:
        goto ykuwccukqeycqccg;
        iyacigqskywekuga:
        $aqykuigiuwmmcieu = $ewgwqamkygiqaawc;
        goto eewwosymwcycgaim;
        wwyawygoukmokcak:
        $wwgucssaecqekuek = self::aoyseswaaaugicuq($wwgucssaecqekuek);
        goto wgyokqwasmgockga;
        eiukowqmwgouiagk:
        if (is_array($ewgwqamkygiqaawc)) {
            goto uuysgoccuuiugycs;
        }
        goto iyacigqskywekuga;
        ykuwccukqeycqccg:
        return $aqykuigiuwmmcieu;
        goto asqmgywqwougoamy;
        ycagwqymyuaaawmk:
        iiwomycesoecmsmg:
        goto acqoqwucmyoyyyiq;
        imeyeceeowouqwwy:
        ymkyeiuqcgcwyssa:
        goto eiukowqmwgouiagk;
        wwwiccouwgagwsus:
        $ggkaciewmeqmgckg = "\74\45\163\40\45\x73\x2f\76";
        goto ykayiagkwkwicggg;
        ykayiagkwkwicggg:
        $muiegiugiocacqkm = false;
        goto imeyeceeowouqwwy;
        socgcieqocmyicko:
        $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc);
        goto ycagwqymyuaaawmk;
        cwiugwwoyscgwwym:
        if (!$muiegiugiocacqkm) {
            goto gksksycwauoamskw;
        }
        goto guewwiqmwqkqeuqa;
        acqoqwucmyoyyyiq:
        $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $wwgucssaecqekuek, $aqykuigiuwmmcieu);
        goto cwiugwwoyscgwwym;
        asqmgywqwougoamy:
    }
}

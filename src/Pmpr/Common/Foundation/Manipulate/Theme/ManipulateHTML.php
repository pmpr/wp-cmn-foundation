<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        return self::uuccukgasskgimsq("\x64\151\166", ["\143\x6c\141\163\163" => "\144\x2d\x66\154\x65\170\x20\x6a\165\x73\164\x69\x66\171\55\x63\x6f\x6e\164\x65\x6e\x74\x2d\x73\164\x61\162\x74"], ["\x25\x32\44\x73", self::uuccukgasskgimsq("\163\155\x61\x6c\154", ["\143\154\x61\163\x73" => "\x66\157\x6e\x74\x2d\61\x33\x20\155\171\x2d\x61\165\x74\157\40\x6d\x6c\x2d\x32"], "\x25\61\x24\163")]);
    }
    
    public static function skyucqyswomguscg($uomewyckeuqoqocu)
    {
        goto ieyqwwmaaeigusck;
        quakaiyiukaeoggu:
        return esc_attr($aqykuigiuwmmcieu);
        goto wikocscgqkqoeyag;
        rkymcyiuygsasous:
        sssossmaugysoosg:
        goto uiqemmagesmiamcu;
        eyoqguiuawqqmqsq:
        wkimauiikcmicukk:
        goto ogywoqseeawwouuu;
        eacgwgwwwaeoeeee:
        goto scqeiomoywugwmgm;
        goto rkymcyiuygsasous;
        ieyqwwmaaeigusck:
        if (is_array($uomewyckeuqoqocu)) {
            goto sssossmaugysoosg;
        }
        goto icuiiyecyaosmkig;
        uwcmqocsckgoycos:
        $aqykuigiuwmmcieu = json_encode($uomewyckeuqoqocu);
        goto eyoqguiuawqqmqsq;
        cossouqayakwquwq:
        msioicqugygwksci:
        goto uwcmqocsckgoycos;
        omokwaassiaqugwi:
        $aqykuigiuwmmcieu = implode("\40", $uomewyckeuqoqocu);
        goto waakcieqeowcyces;
        uiqemmagesmiamcu:
        if (ManipulateArray::gogeqwskoiiaocoe($uomewyckeuqoqocu)) {
            goto msioicqugygwksci;
        }
        goto omokwaassiaqugwi;
        icuiiyecyaosmkig:
        $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
        goto eacgwgwwwaeoeeee;
        ogywoqseeawwouuu:
        scqeiomoywugwmgm:
        goto quakaiyiukaeoggu;
        waakcieqeowcyces:
        goto wkimauiikcmicukk;
        goto cossouqayakwquwq;
        wikocscgqkqoeyag:
    }
    
    public static function aoyseswaaaugicuq($uomewyckeuqoqocu, $oswgusmmccauqika = "\42") : ?string
    {
        goto ukoqmmisagkuskku;
        ggakeykgaywwuico:
        if (!is_array($uomewyckeuqoqocu)) {
            goto wkkoyqmigawkyoww;
        }
        goto wgcuscwuwmiumqag;
        akqqwkcyeiuguaee:
        wkkoyqmigawkyoww:
        goto acmqcaimwssoqwcu;
        wgcuscwuwmiumqag:
        foreach ($uomewyckeuqoqocu as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) {
            goto oasooegcuaqyaksa;
            oasooegcuaqyaksa:
            $eqgoocgaqwqcimie = self::skyucqyswomguscg($eqgoocgaqwqcimie);
            goto uokesuqoiakammsq;
            uokesuqoiakammsq:
            if (preg_replace("\x2f\134\x73\53\57", '', $eqgoocgaqwqcimie)) {
                goto qucqsuqgimegkagu;
            }
            goto mqismiccqmeaacmm;
            ossgegmcqmikiako:
            if (is_numeric($ymqmyyeuycgmigyo)) {
                goto kakkcssaiwwuieig;
            }
            goto aymaycgmskceqaoo;
            mqismiccqmeaacmm:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\40";
            goto mmkyoekoacqmsiug;
            icwmksqayogauieq:
            $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40";
            goto uyeskyscwoaceaum;
            qmssemegysygmmig:
            goto qgcaikicmyiaiqyo;
            goto yiqsyymaccyskgka;
            mmkyoekoacqmsiug:
            goto ymskiasoemcgoywc;
            goto wgsgyisoiwmyqgsy;
            aymaycgmskceqaoo:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x3d{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\x20";
            goto qmssemegysygmmig;
            uyeskyscwoaceaum:
            qgcaikicmyiaiqyo:
            goto yusiukmgiqcycoyw;
            geoqmawmyksikoyk:
            uygkaowwykyuwcms:
            goto wyyumeauogsokwwy;
            yusiukmgiqcycoyw:
            ymskiasoemcgoywc:
            goto geoqmawmyksikoyk;
            yiqsyymaccyskgka:
            kakkcssaiwwuieig:
            goto icwmksqayogauieq;
            wgsgyisoiwmyqgsy:
            qucqsuqgimegkagu:
            goto ossgegmcqmikiako;
            wyyumeauogsokwwy:
        }
        goto mqwsuaogooqyusmg;
        mqwsuaogooqyusmg:
        eaoooeokgceokgym:
        goto akqqwkcyeiuguaee;
        acmqcaimwssoqwcu:
        return rtrim($aqykuigiuwmmcieu, "\40");
        goto gcogkoymaecaouei;
        ukoqmmisagkuskku:
        $aqykuigiuwmmcieu = '';
        goto ggakeykgaywwuico;
        gcogkoymaecaouei:
    }
    
    public static function kqmkicmuscsgqeoi($ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii[self::ICON] = ManipulateArray::get($ywmkwiwkosakssii, self::ICON, IconFontawesomeInterface::ICON_SPINNER_THIRD);
        return Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::SPINNER_TEMPLATE_PATH, $ywmkwiwkosakssii);
    }
    
    public static function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array
    {
        goto uweqegqcewaiwgeo;
        uweqegqcewaiwgeo:
        if (!$gcegymooyemmaysk) {
            goto omcqkauyquamiwkw;
        }
        goto caosicamgweuouqy;
        caosicamgweuouqy:
        foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) {
            goto eikgkciokyogmmae;
            eikgkciokyogmmae:
            if (!isset($gcegymooyemmaysk[$uusmaiomayssaecw])) {
                goto kiwsouqmoaeuwcyi;
            }
            goto omegwywwowgccqgc;
            qsgqsgqoasquyegw:
            kiwsouqmoaeuwcyi:
            goto eckqwskioaqieuiw;
            uiwwomawycusiaqc:
            unset($gcegymooyemmaysk[$uusmaiomayssaecw]);
            goto qsgqsgqoasquyegw;
            omegwywwowgccqgc:
            $sysgmomuyiiawwcm[$uusmaiomayssaecw] = self::igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee);
            goto uiwwomawycusiaqc;
            eckqwskioaqieuiw:
            ykmomgoksisygqmi:
            goto gqckiowescyoycek;
            gqckiowescyoycek:
        }
        goto ckawyuougmawuagq;
        wiggagegkomwsigy:
        omcqkauyquamiwkw:
        goto ecqymkukooyucuao;
        ckawyuougmawuagq:
        aoamgmomuauiaomq:
        goto cseosawememugocs;
        ecqymkukooyucuao:
        return $sysgmomuyiiawwcm;
        goto memoemokqyckwuam;
        cseosawememugocs:
        $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk);
        goto wiggagegkomwsigy;
        memoemokqyckwuam:
    }
    
    public static function cmsgeysmsqqogeki($uomewyckeuqoqocu, $yygmoeguaqyumuui)
    {
        goto ugsyacuawyeqcywk;
        ugsyacuawyeqcywk:
        foreach ($yygmoeguaqyumuui as $msqkueqksqwmskak => $uwomkgseoiegeume) {
            goto gcwekuwcsakcsyiu;
            gcwekuwcsakcsyiu:
            if (!isset($uomewyckeuqoqocu[$msqkueqksqwmskak])) {
                goto agkccauguemomgyi;
            }
            goto yasaysggqceikmye;
            yasaysggqceikmye:
            $uomewyckeuqoqocu[$uwomkgseoiegeume] = $uomewyckeuqoqocu[$msqkueqksqwmskak];
            goto uweweeiagegyukye;
            ymiiiqccumeseqgg:
            agkccauguemomgyi:
            goto sqkaggmqmkgwkimu;
            uweweeiagegyukye:
            ManipulateArray::unset($uomewyckeuqoqocu, $msqkueqksqwmskak);
            goto ymiiiqccumeseqgg;
            sqkaggmqmkgwkimu:
            uykcwaomeewcauqm:
            goto qwssywogokmegcwg;
            qwssywogokmegcwg:
        }
        goto qogkwuqcauywuqyy;
        gggawowkmoygokiu:
        return $uomewyckeuqoqocu;
        goto ymuwsmqieegccmec;
        qogkwuqcauywuqyy:
        wqqayaqgqaokkewk:
        goto gggawowkmoygokiu;
        ymuwsmqieegccmec:
    }
    
    public static function gmqyuaqwgiayskei($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\160\141\156", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false, $qawsmigsyysqwmeq = false)
    {
        goto kmckgogusyyoyiia;
        geigqkwcacssimqk:
        $wkaqekwwgqsqwcoi = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto mykcwaiwmsyaacog;
        mykcwaiwmsyaacog:
        iiosuiiicgmwuquu:
        goto cewwgkwqeuayygeq;
        mgcymqumaiwgmswy:
        goto iqkuskokswaoiosy;
        goto qgeeemyaomggagku;
        myacgeqsygaaicsw:
        guqgcsmiuskcawsy:
        goto eiyeysucoukeiqii;
        gaukmueogumwwwmi:
        eaaaqmqycgcqiaee:
        goto sqgkwwsqomcqewuu;
        wiuaoykkoqsqcciu:
        if (ManipulateValidation::wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) {
            goto eaaaqmqycgcqiaee;
        }
        goto ewseyicyoqscoyic;
        kmckgogusyyoyiia:
        $nsmgceoqaqogqmuw = '';
        goto yyeuoiccgweskqgw;
        sqgkwwsqomcqewuu:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x69\143\x6f\156\137\x61\164\164\162\x69\x62\165\x74\x65\163", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi);
        goto eukmgmmseugskiio;
        egeesoksqmwwsuoe:
        $wkaqekwwgqsqwcoi = Template::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc, $qawsmigsyysqwmeq);
        goto mgcymqumaiwgmswy;
        uasiqigosyqwisuq:
        iqkuskokswaoiosy:
        goto gaukmueogumwwwmi;
        eiyeysucoukeiqii:
        return $nsmgceoqaqogqmuw;
        goto qyigcogcwakysqwo;
        eukmgmmseugskiio:
        if ($gskuwmeemyeuwogc) {
            goto wsyouakcyuwgsmmq;
        }
        goto uuckosesigqwyykq;
        esmwouucumeuaaiq:
        wsyouakcyuwgsmmq:
        goto geigqkwcacssimqk;
        uuckosesigqwyykq:
        $wwgucssaecqekuek["\x73\162\x63"] = $wkaqekwwgqsqwcoi;
        goto ywcomywyegmgoiqc;
        qgeeemyaomggagku:
        usgequsgggeskams:
        goto ksmkyewagskkoeok;
        ewseyicyoqscoyic:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\163", "\160\x72\55\x69\x63\x6f\156");
        goto ywigugwyqieqkcoe;
        mgqgsoaoauaoioku:
        goto iiosuiiicgmwuquu;
        goto esmwouucumeuaaiq;
        ksmkyewagskkoeok:
        $wkaqekwwgqsqwcoi = ManipulateAttachment::mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi);
        goto uasiqigosyqwisuq;
        ywcomywyegmgoiqc:
        $wkaqekwwgqsqwcoi = self::uuccukgasskgimsq("\x69\155\147", $wwgucssaecqekuek);
        goto mgqgsoaoauaoioku;
        cewwgkwqeuayygeq:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\151\143\157\156\137\x68\164\x6d\x6c", $wkaqekwwgqsqwcoi);
        goto myacgeqsygaaicsw;
        yyeuoiccgweskqgw:
        if (!$wkaqekwwgqsqwcoi) {
            goto guqgcsmiuskcawsy;
        }
        goto wiuaoykkoqsqcciu;
        ywigugwyqieqkcoe:
        if (ManipulateAttachment::aauyuieeeaakygki($wkaqekwwgqsqwcoi)) {
            goto usgequsgggeskams;
        }
        goto egeesoksqmwwsuoe;
        qyigcogcwakysqwo:
    }
    
    public static function ciuuiyckmsygceis($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\164\162\x6f\156\x67", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function icqkogwskuwscskk($ywmkwiwkosakssii = [], $gskauacumcmekigs = []) : string
    {
        goto iauuciyimekqwsqe;
        aumekwowaoymcamo:
        return $nsmgceoqaqogqmuw;
        goto uawqemsmoegqwcys;
        wkmksaskwoeiqgqq:
        if (!$gskauacumcmekigs) {
            goto sskgwegakoyqqkku;
        }
        goto kgmwksacomoyiemk;
        scimwiammysocuma:
        yceuaweskqgkyccw:
        goto museocscicoguyic;
        mggmcgicyksgeoga:
        $ewgwqamkygiqaawc = $meqocwsecsywiiqs;
        goto scimwiammysocuma;
        museocscicoguyic:
        $nsmgceoqaqogqmuw .= self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
        goto qcgikckikqqwewqg;
        gqqsowqiouwisway:
        if (ManipulateArray::get($qsqwqsymmqeoqwcu, "\160\162\x65\x66\x69\170", '')) {
            goto gucssmauyukceoiu;
        }
        goto ymmooquwukiemiuu;
        egioqiaqgkcociok:
        $wwgucssaecqekuek["\x68\162\145\146"] = "\x23";
        goto waeogmkyweaagquk;
        aeeygmyoycocsaow:
        $kqywgoqsmuswammk = ManipulateArray::get($gskauacumcmekigs, "\145\x6c\145\x6d\x65\x6e\164", "\x62\x75\x74\164\157\156");
        goto qukgkymacqckmyoq;
        ouokoaqgueuukoes:
        if ($ewgwqamkygiqaawc) {
            goto yceuaweskqgkyccw;
        }
        goto mggmcgicyksgeoga;
        keeikoymoqwakmuc:
        $meqocwsecsywiiqs = ManipulateArray::get($gskauacumcmekigs, "\164\x69\164\154\145");
        goto aeeygmyoycocsaow;
        waeogmkyweaagquk:
        maqacaoweqmyiuua:
        goto giyuysmwumkyayiq;
        ymmooquwukiemiuu:
        _doing_it_wrong(__FUNCTION__, __("\x70\x6c\145\141\163\145\x20\x73\x70\145\x63\151\146\x79\x20\141\x20\x70\x72\145\146\151\x78\40\x66\157\162\x20\x66\157\162\40\x6d\157\144\x61\154", PR__CMN__FOUNDATION), 1);
        goto iquuyccmwaqmeiwc;
        iauuciyimekqwsqe:
        $qsqwqsymmqeoqwcu = ManipulateFormat::omaawkkwwyesqwcc(self::uskieqmcqyecigmy(array_merge($ywmkwiwkosakssii, ["\152\x73\157\x6e" => false])), ["\x76\151\145\x77" => "\x64\x69\141\154\157\x67", "\x70\x72\x65\146\151\170" => "\147\145\156\x65\162\x61\x6c", "\x73\160\151\156\156\x65\162" => false, "\143\x6c\157\x73\x65\137\164\151\x74\154\145" => __("\x43\x6c\x6f\163\x65", PR__CMN__FOUNDATION)]);
        goto gqqsowqiouwisway;
        cyawmgceseyseywk:
        $nsmgceoqaqogqmuw = Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::MODAL_TEMPLATE_PATH, $qsqwqsymmqeoqwcu);
        goto wkmksaskwoeiqgqq;
        iquuyccmwaqmeiwc:
        gucssmauyukceoiu:
        goto cyawmgceseyseywk;
        giyuysmwumkyayiq:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\x73", "\160\x72\x2d\x63\x6f\x6e\x66\151\x72\x6d\141\142\x6c\x65\55\141\x63\x74\x69\x6f\x6e");
        goto gqwciegucimkisai;
        kgmwksacomoyiemk:
        $wwgucssaecqekuek = ManipulateArray::get($gskauacumcmekigs, "\141\164\x74\162\163", []);
        goto keeikoymoqwakmuc;
        myogiyogisykoogo:
        if (!($kqywgoqsmuswammk == "\141" && !ManipulateArray::get($wwgucssaecqekuek, "\x68\x72\x65\x66", false))) {
            goto maqacaoweqmyiuua;
        }
        goto egioqiaqgkcociok;
        qukgkymacqckmyoq:
        $wwgucssaecqekuek["\x64\141\x74\x61\55\x6d\x6f\144\141\154"] = ManipulateArray::get($qsqwqsymmqeoqwcu, "\x70\162\x65\x66\151\x78", "\147\x65\x6e\x65\x72\x61\154") . "\137\155\x6f\144\141\x6c";
        goto myogiyogisykoogo;
        gqwciegucimkisai:
        $ewgwqamkygiqaawc = ManipulateArray::unset($gskauacumcmekigs, "\143\157\x6e\164\x65\x6e\164");
        goto ouokoaqgueuukoes;
        qcgikckikqqwewqg:
        sskgwegakoyqqkku:
        goto aumekwowaoymcamo;
        uawqemsmoegqwcys:
    }
    
    public static function igmaewykumgwoaoy($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto yseiyiawimkkgwgu;
        scikcooocqiscwuk:
        if (isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto quaqcuogeasmkwum;
        }
        goto wgqacmwcgiemyqsm;
        igwuuiisiiiacqog:
        cucwasiugcaiugkw:
        goto diqmggkiascwcmgo;
        iewaqqoywiiueooc:
        quaqcuogeasmkwum:
        goto eycywwwuywwiewae;
        aqmyaskcyisumkec:
        wykcswiwacwksyeo:
        goto sceiisuuogsqyaua;
        ykeywoiececiccqk:
        if (!is_array($siquossayskcwkea)) {
            goto ugcgciqmmuumiwss;
        }
        goto icaoeusmweymiows;
        mmkeguscoeyqgsaq:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto woemqeiusiyyycao;
        zkyyykgsamwwykec:
        goto kmoaiymaumccccmw;
        goto gmaokugqemkqaymu;
        esouewuuwooociii:
        ieamiiycguksgyae:
        goto scikcooocqiscwuk;
        awyisykkykwugmcs:
        goto csuyiuccwoewwymw;
        goto euqwyueoiyaciwmu;
        oeegwqskokyysgia:
        ycgeiokgsmiwocco:
        goto yaowsqucwakaesoi;
        kyqgyywuaqkskkmq:
        kmoaiymaumccccmw:
        goto oeogicauwqmuckmc;
        sayimokgekmuieyc:
        $siquossayskcwkea = $wisgiwskwawciiee;
        goto awyisykkykwugmcs;
        xaoaqqukaokieeos:
        scgooimgesucqmyw:
        goto oeegwqskokyysgia;
        gmaokugqemkqaymu:
        ewoqemggggmuiicc:
        goto camisusksgocgiyu;
        wgqacmwcgiemyqsm:
        $wisgiwskwawciiee = '';
        goto mqiuuuiuyieomgsm;
        ymqgkiswgyiwkiee:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\40", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\40" . $eqgoocgaqwqcimie);
        goto mmocggcuysgcayqs;
        wcqmkqkoekwggcaq:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto kcuquqyuoqukkiae;
        }
        goto ymqgkiswgyiwkiee;
        woemqeiusiyyycao:
        csuyiuccwoewwymw:
        goto wecqeaiwiowwougo;
        wecqeaiwiowwougo:
        ugcgciqmmuumiwss:
        goto qgoesugiyiiqgaka;
        ayiuauyqkcycymiq:
        if (is_array($siquossayskcwkea)) {
            goto ckyaekugwcaaogua;
        }
        goto iykoiouoygaumuak;
        oeogicauwqmuckmc:
        eyosqwqswsqcuekw:
        goto ggcqsikuoaowocia;
        camisusksgocgiyu:
        $wisgiwskwawciiee = $siquossayskcwkea->{$uusmaiomayssaecw};
        goto kyqgyywuaqkskkmq;
        skiieiyqgwecickk:
        goto ycgeiokgsmiwocco;
        goto gkqqeoyqwmaqweus;
        wasokaaaiesgoiwu:
        $wisgiwskwawciiee = $siquossayskcwkea;
        goto yougiukokiwueagg;
        euqwyueoiyaciwmu:
        koeaocaigyiuouma:
        goto mmkeguscoeyqgsaq;
        ayassegeqauesegc:
        if (is_object($siquossayskcwkea)) {
            goto cucwasiugcaiugkw;
        }
        goto ykeywoiececiccqk;
        qgoesugiyiiqgaka:
        goto ssgusiykmcsmacke;
        goto igwuuiisiiiacqog;
        ykywwwymygscykam:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\x20", $eqgoocgaqwqcimie));
        goto mekuokossigwmiay;
        cgouooqwgiessagu:
        $wisgiwskwawciiee = '';
        goto zkyyykgsamwwykec;
        mekuokossigwmiay:
        ykagosqgwoyewmsm:
        goto ayassegeqauesegc;
        eycywwwuywwiewae:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto mkuiaigaaiiusgcw;
        ocmaakqeqigyqmcm:
        if ($uusmaiomayssaecw) {
            goto ieamiiycguksgyae;
        }
        goto wasokaaaiesgoiwu;
        gkqqeoyqwmaqweus:
        ckyaekugwcaaogua:
        goto ocmaakqeqigyqmcm;
        csmmacecmeiqukou:
        return $siquossayskcwkea;
        goto auamqueygsmcgeua;
        mmocggcuysgcayqs:
        kcuquqyuoqukkiae:
        goto ugsucquekakgyyoe;
        ugsucquekakgyyoe:
        goto ykagosqgwoyewmsm;
        goto cykquwwqoyuqacka;
        yaowsqucwakaesoi:
        goto eyosqwqswsqcuekw;
        goto aqmyaskcyisumkec;
        sceiisuuogsqyaua:
        if (isset($siquossayskcwkea->{$uusmaiomayssaecw})) {
            goto ewoqemggggmuiicc;
        }
        goto cgouooqwgiessagu;
        mqiuuuiuyieomgsm:
        goto qgigwkeaoogkycqq;
        goto iewaqqoywiiueooc;
        mkuiaigaaiiusgcw:
        qgigwkeaoogkycqq:
        goto xaoaqqukaokieeos;
        yougiukokiwueagg:
        goto scgooimgesucqmyw;
        goto esouewuuwooociii;
        ggcqsikuoaowocia:
        if (is_array($eqgoocgaqwqcimie)) {
            goto mkmewusqskqwyiga;
        }
        goto wcqmkqkoekwggcaq;
        esgcqqwkiqagqcqu:
        ssgusiykmcsmacke:
        goto csmmacecmeiqukou;
        yseiyiawimkkgwgu:
        if (is_object($siquossayskcwkea) && $uusmaiomayssaecw) {
            goto wykcswiwacwksyeo;
        }
        goto ayiuauyqkcycymiq;
        iykoiouoygaumuak:
        return trim($siquossayskcwkea . "\40" . (is_array($eqgoocgaqwqcimie) ? implode("\x20", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie));
        goto skiieiyqgwecickk;
        cykquwwqoyuqacka:
        mkmewusqskqwyiga:
        goto ykywwwymygscykam;
        diqmggkiascwcmgo:
        $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee;
        goto esgcqqwkiqagqcqu;
        icaoeusmweymiows:
        if ($uusmaiomayssaecw) {
            goto koeaocaigyiuouma;
        }
        goto sayimokgekmuieyc;
        auamqueygsmcgeua:
    }
    
    public static function gusouagusgyoaeya($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x70", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function yekemqwyimcqgeuk($ewgwqamkygiqaawc, $ekasyoagocygouom, $wwgucssaecqekuek = []) : string
    {
        $wwgucssaecqekuek["\x64\141\164\x65\x74\151\x6d\x65"] = $ekasyoagocygouom;
        return self::uuccukgasskgimsq("\164\151\155\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy = [], $wwgucssaecqekuek = []) : string
    {
        goto asweayesceakosic;
        uckskmkusokoegaw:
        auqmkwoggqyaskcq:
        goto wqwuwausogwsuqqc;
        ucyecesyqmiackww:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\x73", "\x74\x61\142\154\x65\x20\155\55\60");
        goto igmqymyemckoaqgi;
        miowwquwweeycgyu:
        $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk;
        goto uqyqusgiassqqgso;
        ieeoomsoskweuome:
        smueyuiwaswcmmyq:
        goto qikugkuomgekwawu;
        iaaigscysuqkassk:
        if (!$uykgysuswksgmwqy) {
            goto auqmkwoggqyaskcq;
        }
        goto wqsueawiwmaymyye;
        doykmuigywoqqiso:
        foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) {
            goto ecqkiigukgcscequ;
            gecomumkgckmoicc:
            caykkyawcquykaig:
            goto quiscsoaasusqsii;
            quiscsoaasusqsii:
            $ecuqamumceeoyiui = ManipulateArray::get($keuwuekioomqqaey, "\164\162\x5f\x61\164\x74\162\163", []);
            goto cqouisksowcqsqga;
            egwsiqoumyssgaiw:
            foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) {
                goto wowqwsgksqqqmucw;
                aqgeqqeaykqsqqyy:
                $ykaygkcscgyoiiae .= self::uuccukgasskgimsq("\164\x64", ["\144\141\164\141\55\x6b\145\x79" => "\x74\x64\x2d{$uusmaiomayssaecw}\55{$momcykaoccoymeig}"], $yycqiageqkquoioq);
                goto gkqcgyeqkcisqgck;
                gkqcgyeqkcisqgck:
                qigqugqceqksaoaq:
                goto uoioeqiqmewckqwq;
                oqwqqsiygukqweey:
                goto qigqugqceqksaoaq;
                goto mugcawkwqggykqkq;
                wowqwsgksqqqmucw:
                if (!($uusmaiomayssaecw == "\x74\162\137\x61\x74\164\x72\163")) {
                    goto cwsmeosaaeaamosg;
                }
                goto oqwqqsiygukqweey;
                mugcawkwqggykqkq:
                cwsmeosaaeaamosg:
                goto aqgeqqeaykqsqqyy;
                uoioeqiqmewckqwq:
            }
            goto gecomumkgckmoicc;
            yeucaeocmeokqggg:
            kosquscyqqgygykc:
            goto owaoemsqwmcymegi;
            isawcgqqwuaucgga:
            $ymoekaoqgqmmgoqk .= self::uuccukgasskgimsq("\164\x72", $ecuqamumceeoyiui, $ykaygkcscgyoiiae);
            goto yeucaeocmeokqggg;
            ecqkiigukgcscequ:
            $ykaygkcscgyoiiae = '';
            goto egwsiqoumyssgaiw;
            cqouisksowcqsqga:
            $ecuqamumceeoyiui["\x64\141\x74\x61\55\153\x65\x79"] = "\164\x72\x2d{$momcykaoccoymeig}";
            goto isawcgqqwuaucgga;
            owaoemsqwmcymegi:
        }
        goto gmqmassuiycwosek;
        igmqymyemckoaqgi:
        return self::uuccukgasskgimsq("\x74\x61\142\x6c\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
        goto asuaoeiwuqaugwaa;
        asweayesceakosic:
        $ewgwqamkygiqaawc = '';
        goto iaaigscysuqkassk;
        wqsueawiwmaymyye:
        $kakckmgscyiskome = '';
        goto wakcyckyeemwoqgk;
        wqwuwausogwsuqqc:
        if (!is_array($essikcmqiyqaqoaq)) {
            goto qcsqqqkmmswawmqo;
        }
        goto woeogayusoaoawio;
        woeogayusoaoawio:
        $ymoekaoqgqmmgoqk = '';
        goto doykmuigywoqqiso;
        uqyqusgiassqqgso:
        qcsqqqkmmswawmqo:
        goto emgcuckeyeakwoww;
        emgcuckeyeakwoww:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\x74\x62\157\144\x79", [], $essikcmqiyqaqoaq);
        goto ucyecesyqmiackww;
        qikugkuomgekwawu:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\x74\x68\145\141\144", [], $kakckmgscyiskome);
        goto uckskmkusokoegaw;
        gmqmassuiycwosek:
        ugyquwcqwgkykyom:
        goto miowwquwweeycgyu;
        wakcyckyeemwoqgk:
        foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) {
            $kakckmgscyiskome .= self::uuccukgasskgimsq("\x74\150", ["\x64\141\164\141\55\x6b\145\171" => "\164\x68\55{$uusmaiomayssaecw}", "\x63\x6c\x61\163\x73" => "\164\x65\170\x74\x2d\154\x65\146\x74"], $kmmmiumuegqmksky);
            akwwymwisyauswko:
        }
        goto ieeoomsoskweuome;
        asuaoeiwuqaugwaa:
    }
    
    public static function sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $mogykyiukkoqceec = 6) : string
    {
        goto oeecmqccguiykkqm;
        woyasoooseaaaaio:
        $giwamsoicooomueg = '';
        goto qigywyiuuemsacoe;
        eaeogyomscegkayw:
        yuceksygooykweoy:
        goto iewaoiacicouqcmy;
        kwqswmuukaymcqoq:
        $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\151\156\144\x65\x78", "\x6c\x65\156\x67\x74\x68"]);
        goto owmgcskcyawsqskm;
        owmgcskcyawsqskm:
        mesgcyiaogasqowm:
        goto woyasoooseaaaaio;
        csosomiukogmmcme:
        $wkkweuacukumqmya = array_filter(explode("\143\x6f\x6c\x2d", $qgoqiacsiccwoawi));
        goto iowuiukuyewqkkae;
        qigywyiuuemsacoe:
        if (!$qgqgaykggoemycsk) {
            goto yuceksygooykweoy;
        }
        goto csosomiukogmmcme;
        iewaoiacicouqcmy:
        return rtrim($giwamsoicooomueg);
        goto cswywwkcqekmigki;
        cewmkewqmueeeyyc:
        qeuewcmsumowussm:
        goto eaeogyomscegkayw;
        iowuiukuyewqkkae:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto mmewqwgucqqooauq;
            wgggekucgkaiksaw:
            mskqaiwsecmeksgy:
            goto iuaagccgiiyoewqi;
            iscaiaaawwcwwaqe:
            eiceowycmoycqkuk:
            goto syucwaiqcwoigmyi;
            aesqmgsmqugcmwsu:
            goto mskqaiwsecmeksgy;
            goto gewmecseymwsqeaw;
            msyquusciakoksug:
            oucesaewqyuwiiqg:
            goto ywacykwawisgmguq;
            swoccyieyiyocaai:
            if (!($aoqagsqecokqqwqg == $ykiwomimkkuiigoq)) {
                goto oimimqggwmcwcayu;
            }
            goto sqikqgygycksuyoa;
            swmckgcuukkqqckq:
            if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) {
                goto caeamkmmgyasuywc;
            }
            goto qieaauqeoyssiwei;
            qakuswcwwswiesyi:
            gmugaowewyiyooea:
            goto iyqqogayqsmeocus;
            ywacykwawisgmguq:
            goto eiceowycmoycqkuk;
            goto qakuswcwwswiesyi;
            uessyqkuysyoaqwm:
            $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}";
            goto zseoycemqgkocuoy;
            zseoycemqgkocuoy:
            umioqieqqagmckwg:
            goto swmckgcuukkqqckq;
            iuaagccgiiyoewqi:
            cycuoasiccouwyqw:
            goto swugymmweuogwusw;
            uocgaiiuusguaayy:
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1];
            goto msyquusciakoksug;
            kemgeqwcacseqmgu:
            if ($gaeqamemwmwsyukm == 1) {
                goto gmugaowewyiyooea;
            }
            goto wwwmsesaeqsooeso;
            mkikkgwwyiemokme:
            $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi;
            goto swoccyieyiyocaai;
            kgmmymowamcgesku:
            
            $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0];
            goto uocgaiiuusguaayy;
            emuussqoawouymue:
            if (!$gcgsqcoqciockquc) {
                goto umioqieqqagmckwg;
            }
            goto uessyqkuysyoaqwm;
            uquiseikicyaaaka:
            $gcgsqcoqciockquc = '';
            goto kemgeqwcacseqmgu;
            sqikqgygycksuyoa:
            $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi;
            goto oqiwsqaskogasows;
            syucwaiqcwoigmyi:
            $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi;
            goto qomksaimmayiiiwk;
            wwwmsesaeqsooeso:
            if (!($gaeqamemwmwsyukm == 2)) {
                goto oucesaewqyuwiiqg;
            }
            goto kgmmymowamcgesku;
            gewmecseymwsqeaw:
            caeamkmmgyasuywc:
            goto csmkgqiuimmymqaw;
            csmkgqiuimmymqaw:
            $giwamsoicooomueg .= "\x20\155\x62{$gcgsqcoqciockquc}\55\60";
            goto wgggekucgkaiksaw;
            qomksaimmayiiiwk:
            $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length;
            goto mkikkgwwyiemokme;
            iyqqogayqsmeocus:
            
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0];
            goto iscaiaaawwcwwaqe;
            oqiwsqaskogasows:
            oimimqggwmcwcayu:
            goto emuussqoawouymue;
            qieaauqeoyssiwei:
            $giwamsoicooomueg .= "\40\x6d\x62{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}";
            goto aesqmgsmqugcmwsu;
            mmewqwgucqqooauq:
            $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi);
            goto iewukqcakeoaogea;
            iewukqcakeoaogea:
            $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie);
            goto uquiseikicyaaaka;
            swugymmweuogwusw:
        }
        goto cewmkewqmueeeyyc;
        oeecmqccguiykkqm:
        if (!is_array($qgqgaykggoemycsk)) {
            goto mesgcyiaogasqowm;
        }
        goto kwqswmuukaymcqoq;
        cswywwkcqekmigki:
    }
    
    public static function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto gqiuksowisyaqsgs;
        akaqcyoimeoumcim:
        return $siquossayskcwkea;
        goto swyesueumaokiieq;
        agckiaesekmciuyw:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto yumcwyyykaumkeau;
        }
        goto cocigaqusqewkiuy;
        esqwuigiwqkiwwea:
        muuekeyeccsssuow:
        goto akaqcyoimeoumcim;
        qimocyquekymmiuk:
        msmmauiswokuyasc:
        goto wogokussyamayesu;
        ogcsckmescouyqmc:
        auiissiemumqmkwa:
        goto oogioucuccasmyak;
        amuouaaiumwgawui:
        if (!is_string($wisgiwskwawciiee)) {
            goto msmmauiswokuyasc;
        }
        goto qgsyukssiqqqyqky;
        kaiusyuqauywqwii:
        owecwquwkacmmwsm:
        goto iacqiaeyscguwyia;
        yaugumwgommeyeii:
        $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea));
        goto esqwuigiwqkiwwea;
        oquqawmmasaicyua:
        if (!(($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee)) !== false)) {
            goto eoigcqiakssieeau;
        }
        goto vaaikkcmqgsiwkum;
        cocigaqusqewkiuy:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto amuouaaiumwgawui;
        iacqiaeyscguwyia:
        woasacgcwusiuimk:
        goto sigasyakmuoqkmmk;
        escogkseqmmsucuy:
        if (is_string($siquossayskcwkea)) {
            goto sociuakymqqoqscu;
        }
        goto agckiaesekmciuyw;
        eecmomwqeicciqok:
        $ukwmeuiywasikwcu = true;
        goto qimocyquekymmiuk;
        gcukuckckaiewegs:
        if (!in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee)) {
            goto owecwquwkacmmwsm;
        }
        goto oquqawmmasaicyua;
        gcoakgwgoisggsma:
        goto muuekeyeccsssuow;
        goto siqiwagoqooemoaw;
        ogasoacwwskwkuwo:
        $wisgiwskwawciiee = implode("\40", $wisgiwskwawciiee);
        goto ogcsckmescouyqmc;
        uwecaymwqkkicime:
        eoigcqiakssieeau:
        goto skuskikumqguccee;
        qgsyukssiqqqyqky:
        $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee);
        goto eecmomwqeicciqok;
        siqiwagoqooemoaw:
        sociuakymqqoqscu:
        goto yaugumwgommeyeii;
        sigasyakmuoqkmmk:
        yumcwyyykaumkeau:
        goto gcoakgwgoisggsma;
        vaaikkcmqgsiwkum:
        unset($wisgiwskwawciiee[$ccamueccusigaaio]);
        goto uwecaymwqkkicime;
        wogokussyamayesu:
        if (!is_array($wisgiwskwawciiee)) {
            goto woasacgcwusiuimk;
        }
        goto gcukuckckaiewegs;
        gqiuksowisyaqsgs:
        $ukwmeuiywasikwcu = false;
        goto escogkseqmmsucuy;
        skuskikumqguccee:
        if (!$ukwmeuiywasikwcu) {
            goto auiissiemumqmkwa;
        }
        goto ogasoacwwskwkuwo;
        oogioucuccasmyak:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto kaiusyuqauywqwii;
        swyesueumaokiieq:
    }
    
    public static function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $siquossayskcwkea;
    }
    
    public static function wouimaqqweceiamk($iwamiguusayooguq, $wkaqekwwgqsqwcoi = '') : string
    {
        goto uoysyuggmqqmcekw;
        igwoiimkmmmscuoi:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true);
        goto okswmkyoomseaueq;
        yciamiooeekkmayo:
        return self::qgsekwygcgawekeq("\x64\151\x76", ["\143\154\141\x73\x73" => "\x70\x72\55\155\x6f\x64\141\154\x2d\147\165\x69\144\x65\40\144\x2d\x66\154\x65\x78"], true, $wkaqekwwgqsqwcoi . $iwamiguusayooguq);
        goto isaickqmmmkeicgo;
        uoysyuggmqqmcekw:
        $iwamiguusayooguq = self::qgsekwygcgawekeq("\x73\x70\141\x6e", ["\x63\x6c\x61\163\163" => "\x6d\x79\x2d\x61\165\x74\157"], true, $iwamiguusayooguq);
        goto uqgskaesqkwyiyws;
        mgosoyoeuiqwiwmk:
        $wwgucssaecqekuek = [];
        goto iumsyyqaikswuqic;
        okswmkyoomseaueq:
        sggquugugsmuiwwe:
        goto yciamiooeekkmayo;
        mcswsycyyuouesmw:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\x73", "\155\171\x2d\141\x75\164\157\40\151\x63\157\156\x2d\x73\155\40\x6d\x72\55\62");
        goto igwoiimkmmmscuoi;
        uqgskaesqkwyiyws:
        if (!$wkaqekwwgqsqwcoi) {
            goto sggquugugsmuiwwe;
        }
        goto mgosoyoeuiqwiwmk;
        ssikoeweoiwuqqoe:
        $wwgucssaecqekuek = ManipulateArray::get($wkaqekwwgqsqwcoi, "\141\x74\x74\162\x73", []);
        goto sesoweewqkwcymwu;
        sesoweewqkwcymwu:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($wkaqekwwgqsqwcoi, "\151\143\x6f\x6e", '');
        goto ukmewkukokeqigos;
        iumsyyqaikswuqic:
        if (!is_array($wkaqekwwgqsqwcoi)) {
            goto gomaeoikykwymgwc;
        }
        goto ssikoeweoiwuqqoe;
        ukmewkukokeqigos:
        gomaeoikykwymgwc:
        goto mcswsycyyuouesmw;
        isaickqmmmkeicgo:
    }
    
    public static function ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw, $iqaosyayeiuaisqi = false) : string
    {
        goto qcgascowuioocwig;
        cuyucakmwasgeaew:
        owukqqsugwsyyueu:
        goto kayosmeqqkicimqa;
        ikewqccciwsqcamq:
        return $uamcoiueqaamsqma;
        goto maaaegyeiiecykkk;
        qcgascowuioocwig:
        if (!is_array($uamcoiueqaamsqma)) {
            goto qmqaskwucyouocqk;
        }
        goto wawaocswoauwmmus;
        goegcwmuuaiokimo:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\144\x69\166", ["\143\x6c\x61\163\x73" => "\164\x65\170\164\x2d\143\145\156\164\145\162\x20\x6d\157\x64\141\154\x2d\x6d\145\163\x73\141\x67\145\x20\x6d\157\x64\x61\x6c\55\155\145\163\x73\x61\x67\145\x2d" . ($iqaosyayeiuaisqi ? $iqaosyayeiuaisqi : ($occymigcemkqucuw ? "\x73\165\143\143\x65\163\163" : "\x64\x61\x6e\x67\145\x72"))], $uamcoiueqaamsqma);
        goto gaesmekmwiaksqsm;
        gaesmekmwiaksqsm:
        uuucmcsegiwmgqyk:
        goto ikewqccciwsqcamq;
        uewwowiwgoyesikg:
        if (!is_string($uamcoiueqaamsqma)) {
            goto uuucmcsegiwmgqyk;
        }
        goto goegcwmuuaiokimo;
        suqmqyegkqmyqmok:
        foreach ($uamcoiueqaamsqma as $yaakimaumwqiaeei) {
            $suuagcecoyuweoqk .= self::uuccukgasskgimsq("\x6c\x69", [], $yaakimaumwqiaeei);
            sqwciumeqyaccyau:
        }
        goto cuyucakmwasgeaew;
        wawaocswoauwmmus:
        $suuagcecoyuweoqk = '';
        goto suqmqyegkqmyqmok;
        kayosmeqqkicimqa:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\x75\154", [], $suuagcecoyuweoqk);
        goto ksguecmqmcsogyig;
        ksguecmqmcsogyig:
        qmqaskwucyouocqk:
        goto uewwowiwgoyesikg;
        maaaegyeiiecykkk:
    }
    
    public static function uskieqmcqyecigmy($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\x62\165\164\164\157\x6e")
    {
        goto coyqmiyssicuemqc;
        mcqowyeqgcwcomaa:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, $smgooosyoeqwcaeg);
        goto icumqgcukqmiqmas;
        icumqgcukqmiqmas:
        jwegkqgqigkyimwy:
        goto aqeaocoemqqeogww;
        koiouyakeqieqaug:
        $ywmkwiwkosakssii["\x62\x75\164\164\157\x6e\163"] = $qyukicweqoisimwg;
        goto uesyowisqckwqweq;
        yikiisaoucasocwm:
        if (!($smgooosyoeqwcaeg = ManipulateArray::get($ywmkwiwkosakssii, "\x6a\163\x6f\156"))) {
            goto jwegkqgqigkyimwy;
        }
        goto mcqowyeqgcwcomaa;
        kiegwkgkkmwoigue:
        if (!$qyukicweqoisimwg) {
            goto gyqwksoocmmwsmii;
        }
        goto gemaacocysicmuis;
        isameaaesyeqewyw:
        $qyukicweqoisimwg[array_search("\x63\141\x6e\x63\x65\x6c", $qyukicweqoisimwg)] = ["\143\x6c\141\163\x73" => "\x62\x74\156\40\x62\x74\x6e\x2d\157\x75\164\x6c\151\156\x65\55\160\162\151\155\141\x72\171", "\x74\151\x74\154\145" => __("\103\141\x6e\x63\x65\x6c", PR__CMN__FOUNDATION), "\x64\151\x73\x6d\x69\x73\163" => true];
        goto oawacyogaucwgeqa;
        wmoueywscoykgego:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto qoouwuqgucsyyaii;
            eosyseigsygisgay:
            $gskauacumcmekigs[] = "\144\x61\164\x61\55\x6d\x69\143\162\157\x6d\x6f\144\x61\x6c\x2d\x63\x6c\x6f\x73\x65";
            goto yuaussgmgweicywq;
            qiaowiwiqqmegouc:
            if (!ManipulateArray::get($gskauacumcmekigs, "\144\x69\x73\x6d\x69\163\163", false)) {
                goto syoegaiagasioioi;
            }
            goto eosyseigsygisgay;
            iouaimmmokqaicae:
            $scwiymciagumsuiw = "\141";
            goto aemkoeoaageqwmgm;
            wcukoowiwmgeqmck:
            $qyukicweqoisimwg[$momcykaoccoymeig] = self::qgsekwygcgawekeq($scwiymciagumsuiw, $gskauacumcmekigs, true, ManipulateArray::get($gskauacumcmekigs, "\x74\x69\164\x6c\x65"));
            goto cuuuygiqqiausmsg;
            aemkoeoaageqwmgm:
            iueeimyiyygkcuke:
            goto wcukoowiwmgeqmck;
            qoouwuqgucsyyaii:
            if (!is_array($gskauacumcmekigs)) {
                goto uesguqmcseqmcycc;
            }
            goto qiaowiwiqqmegouc;
            eousywekqyqmkigg:
            aqgwciseuyqyomme:
            goto omgwcmaawwmwewuy;
            cueqqguumyoieuqi:
            if ($geecqyososceumsk) {
                goto kcwquqksumqqmccq;
            }
            goto uwgewqagamkqykuc;
            yuaussgmgweicywq:
            syoegaiagasioioi:
            goto qyauooaokskicoqw;
            miyguwmiomkywqwi:
            kcwquqksumqqmccq:
            goto iouaimmmokqaicae;
            cuuuygiqqiausmsg:
            uesguqmcseqmcycc:
            goto eousywekqyqmkigg;
            cywceaauueswisma:
            $gskauacumcmekigs = self::igmaewykumgwoaoy($gskauacumcmekigs, "\x63\154\x61\163\163", "\x70\x78\x2d\x35");
            goto cueqqguumyoieuqi;
            qyauooaokskicoqw:
            $geecqyososceumsk = ManipulateArray::get($gskauacumcmekigs, "\150\162\145\x66");
            goto cywceaauueswisma;
            uwgewqagamkqykuc:
            $scwiymciagumsuiw = $kqywgoqsmuswammk;
            goto wmymgosowycieomq;
            wmymgosowycieomq:
            goto iueeimyiyygkcuke;
            goto miyguwmiomkywqwi;
            omgwcmaawwmwewuy:
        }
        goto qmeiewyqewgycomy;
        coyqmiyssicuemqc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\171\x70\145" => "\151\156\x66\x6f", "\152\163\x6f\x6e" => JSON_UNESCAPED_SLASHES, "\x73\151\172\145" => "\155\144", "\x74\x69\x74\x6c\x65" => __("\101\154\145\162\164", PR__CMN__FOUNDATION), "\143\x6f\x6e\164\145\156\164" => '', "\142\x75\x74\164\157\x6e\163" => []]);
        goto ymiqqkqcasmeswai;
        aqeaocoemqqeogww:
        return $ywmkwiwkosakssii;
        goto cecysuuokaaksaei;
        gemaacocysicmuis:
        if (!in_array("\143\x61\156\x63\145\x6c", $qyukicweqoisimwg)) {
            goto ckqmyeycucqcugaq;
        }
        goto isameaaesyeqewyw;
        uesyowisqckwqweq:
        gyqwksoocmmwsmii:
        goto yikiisaoucasocwm;
        ymiqqkqcasmeswai:
        $qyukicweqoisimwg = ManipulateArray::get($ywmkwiwkosakssii, "\142\x75\x74\164\x6f\156\x73", []);
        goto kiegwkgkkmwoigue;
        qmeiewyqewgycomy:
        yyqqwqqueqsmwuek:
        goto koiouyakeqieqaug;
        oawacyogaucwgeqa:
        ckqmyeycucqcugaq:
        goto wmoueywscoykgego;
        cecysuuokaaksaei:
    }
    
    public static function sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '')
    {
        echo self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
    }
    
    public static function wegccueewucwyaew($ywmkwiwkosakssii = [])
    {
        goto qmaiauoqwugaayyg;
        oewekkuywgckgccs:
        gamqmoqcksyqiwyi:
        goto yqiwseeymqmgiicm;
        aaywckeuwqmamysu:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\x68\x32", ["\143\x6c\x61\163\x73" => "\x6d\x2d\x30"], $meqocwsecsywiiqs);
        goto qwcmmmosiuyqkwaw;
        csgwwcggmgyygmeg:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\144\x69\166", $wwgucssaecqekuek, [$meqocwsecsywiiqs, $ewgwqamkygiqaawc]);
        goto csmukgiomieeyisi;
        qwcmmmosiuyqkwaw:
        wayeaiimomiuikeg:
        goto kqkaeoogyymkisak;
        bamowoeqaswucwam:
        return $ewgwqamkygiqaawc;
        goto wcqiyaiokyqgquyy;
        yqiwseeymqmgiicm:
        if (!$meqocwsecsywiiqs) {
            goto wayeaiimomiuikeg;
        }
        goto fawgiiyqcaycokqm;
        ouyokyouaaccmeiq:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        goto kmwayeqackmikqec;
        csmukgiomieeyisi:
        akqyksqaagqcqgyi:
        goto bamowoeqaswucwam;
        mumgumaweigkucas:
        if (!$ywmkwiwkosakssii["\150\141\163\x5f\142\157\144\171"]) {
            goto gamqmoqcksyqiwyi;
        }
        goto aaiscsiamgmkyywe;
        qmaiauoqwugaayyg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x68\141\163\x5f\x62\x6f\144\x79" => true, self::ICON => '', self::TITLE => '', self::ATTRS => [], self::CONTENT => '']);
        goto ouyokyouaaccmeiq;
        kqkaeoogyymkisak:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\163\163", "\160\162\x2d\x63\141\162\x64\x20\x63\x61\162\144");
        goto csgwwcggmgyygmeg;
        kmwayeqackmikqec:
        $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, self::ATTRS);
        goto ewmuieggokyocuak;
        ewmuieggokyocuak:
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        goto iusomscskwyimymg;
        fawgiiyqcaycokqm:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\x64\151\x76", ["\143\x6c\x61\163\163" => "\x63\x61\x72\144\55\150\x65\141\144\x65\162"], self::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi));
        goto aaywckeuwqmamysu;
        aaiscsiamgmkyywe:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\x64\151\166", ["\x63\154\141\163\x73" => "\143\x61\x72\144\55\142\157\x64\171"], $ewgwqamkygiqaawc);
        goto oewekkuywgckgccs;
        kgwsooywwuaeuakk:
        if (!$ewgwqamkygiqaawc) {
            goto akqyksqaagqcqgyi;
        }
        goto mumgumaweigkucas;
        iusomscskwyimymg:
        $ewgwqamkygiqaawc = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT);
        goto kgwsooywwuaeuakk;
        wcqiyaiokyqgquyy:
    }
    
    public static function smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false)
    {
        goto ieiowqqyqmuuiskw;
        wioocaycsoigykgi:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        goto moqmuoigoekayaie;
        meqsymuyaicwuqge:
        return $meqocwsecsywiiqs;
        goto viawiegsusqwukmw;
        moqmuoigoekayaie:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\x63\154\x61\163\x73" => "\155\x6c\x2d\62"]);
        goto sswmeckkgqmsycec;
        caeuuiwgcwiauiea:
        guwwwoemeywymeeq:
        goto meqsymuyaicwuqge;
        ieiowqqyqmuuiskw:
        if (!$wkaqekwwgqsqwcoi) {
            goto guwwwoemeywymeeq;
        }
        goto wioocaycsoigykgi;
        sswmeckkgqmsycec:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi . $meqocwsecsywiiqs);
        goto caeuuiwgcwiauiea;
        viawiegsusqwukmw:
    }
    
    public static function oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, $wwgucssaecqekuek = [], $wygwqsssewkqooqm = true) : string
    {
        goto ukukwawaqmgwyeoa;
        aikaemyaeysqwkao:
        return self::qgsekwygcgawekeq("\x64\151\166", $wwgucssaecqekuek, true, self::gusouagusgyoaeya($uamcoiueqaamsqma));
        goto ueyeiwwskkiwqses;
        icukyuomwsmyceuu:
        if (!$wygwqsssewkqooqm) {
            goto gwuqaeaisqmugywc;
        }
        goto aigmckisemoscykc;
        aigmckisemoscykc:
        $egkyssmuqcwaciya .= "\x20\x69\x73\55\144\x69\163\155\x69\x73\163\151\142\154\145";
        goto eswkoskowykeswog;
        eswkoskowykeswog:
        gwuqaeaisqmugywc:
        goto iywkociqqsqwemum;
        ukukwawaqmgwyeoa:
        $egkyssmuqcwaciya = "\156\157\x74\151\x63\145\x20\156\157\164\x69\143\x65\55{$iqaosyayeiuaisqi}";
        goto icukyuomwsmyceuu;
        iywkociqqsqwemum:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\x73", $egkyssmuqcwaciya);
        goto aikaemyaeysqwkao;
        ueyeiwwskkiwqses:
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
        goto gksksycwauoamskw;
        gksksycwauoamskw:
        $wwgucssaecqekuek = self::aoyseswaaaugicuq($wwgucssaecqekuek);
        goto wwyawygoukmokcak;
        guewwiqmwqkqeuqa:
        iiwomycesoecmsmg:
        goto yqiayekgygkgyoww;
        wwyawygoukmokcak:
        $ggkaciewmeqmgckg = "\x3c\45\x73\40\x25\163\x3e\x25\163";
        goto wgyokqwasmgockga;
        wwwiccouwgagwsus:
        $muiegiugiocacqkm = false;
        goto ykayiagkwkwicggg;
        imeyeceeowouqwwy:
        if (is_array($ewgwqamkygiqaawc)) {
            goto ymkyeiuqcgcwyssa;
        }
        goto eiukowqmwgouiagk;
        wgyokqwasmgockga:
        if (!in_array($kqywgoqsmuswammk, ["\x69\156\x70\165\x74", "\142\162", "\150\162", "\x69\155\x67", "\154\151\156\153"])) {
            goto yikcegqaeeomgayu;
        }
        goto oymwkgoekiscmgkk;
        ykayiagkwkwicggg:
        yikcegqaeeomgayu:
        goto imeyeceeowouqwwy;
        cwiugwwoyscgwwym:
        $aqykuigiuwmmcieu = sprintf("\x25\x73\74\x2f\45\163\76", $aqykuigiuwmmcieu, $kqywgoqsmuswammk);
        goto guewwiqmwqkqeuqa;
        eiukowqmwgouiagk:
        $aqykuigiuwmmcieu = $ewgwqamkygiqaawc;
        goto iyacigqskywekuga;
        oymwkgoekiscmgkk:
        $ggkaciewmeqmgckg = "\x3c\x25\163\x20\x25\x73\x2f\x3e";
        goto wwwiccouwgagwsus;
        ygewsqqmmosmsikg:
        $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc);
        goto socgcieqocmyicko;
        yqiayekgygkgyoww:
        return $aqykuigiuwmmcieu;
        goto ykuwccukqeycqccg;
        iyacigqskywekuga:
        goto uuysgoccuuiugycs;
        goto eewwosymwcycgaim;
        acqoqwucmyoyyyiq:
        if (!$muiegiugiocacqkm) {
            goto iiwomycesoecmsmg;
        }
        goto cwiugwwoyscgwwym;
        eewwosymwcycgaim:
        ymkyeiuqcgcwyssa:
        goto ygewsqqmmosmsikg;
        socgcieqocmyicko:
        uuysgoccuuiugycs:
        goto ycagwqymyuaaawmk;
        ycagwqymyuaaawmk:
        $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $wwgucssaecqekuek, $aqykuigiuwmmcieu);
        goto acqoqwucmyoyyyiq;
        ykuwccukqeycqccg:
    }
}

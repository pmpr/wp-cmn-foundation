<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        return self::uuccukgasskgimsq("\x64\x69\x76", ["\143\154\x61\x73\163" => "\144\x2d\x66\x6c\145\170\x20\152\165\163\x74\x69\x66\x79\x2d\143\157\156\x74\x65\156\x74\55\163\164\141\162\x74"], ["\x25\62\x24\163", self::uuccukgasskgimsq("\163\x6d\141\154\154", ["\143\x6c\141\163\163" => "\146\157\x6e\164\x2d\x31\63\x20\155\171\x2d\x61\165\x74\x6f\40\x6d\154\x2d\x32"], "\x25\61\x24\x73")]);
    }
    
    public static function skyucqyswomguscg($uomewyckeuqoqocu)
    {
        goto ieyqwwmaaeigusck;
        icuiiyecyaosmkig:
        $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
        goto eacgwgwwwaeoeeee;
        cossouqayakwquwq:
        msioicqugygwksci:
        goto uwcmqocsckgoycos;
        ogywoqseeawwouuu:
        scqeiomoywugwmgm:
        goto quakaiyiukaeoggu;
        waakcieqeowcyces:
        goto wkimauiikcmicukk;
        goto cossouqayakwquwq;
        eyoqguiuawqqmqsq:
        wkimauiikcmicukk:
        goto ogywoqseeawwouuu;
        quakaiyiukaeoggu:
        return esc_attr($aqykuigiuwmmcieu);
        goto wikocscgqkqoeyag;
        omokwaassiaqugwi:
        $aqykuigiuwmmcieu = implode("\40", $uomewyckeuqoqocu);
        goto waakcieqeowcyces;
        rkymcyiuygsasous:
        sssossmaugysoosg:
        goto uiqemmagesmiamcu;
        uiqemmagesmiamcu:
        if (ManipulateArray::gogeqwskoiiaocoe($uomewyckeuqoqocu)) {
            goto msioicqugygwksci;
        }
        goto omokwaassiaqugwi;
        uwcmqocsckgoycos:
        $aqykuigiuwmmcieu = json_encode($uomewyckeuqoqocu);
        goto eyoqguiuawqqmqsq;
        eacgwgwwwaeoeeee:
        goto scqeiomoywugwmgm;
        goto rkymcyiuygsasous;
        ieyqwwmaaeigusck:
        if (is_array($uomewyckeuqoqocu)) {
            goto sssossmaugysoosg;
        }
        goto icuiiyecyaosmkig;
        wikocscgqkqoeyag:
    }
    
    public static function aoyseswaaaugicuq($uomewyckeuqoqocu, $oswgusmmccauqika = "\x22") : ?string
    {
        goto ukoqmmisagkuskku;
        wgcuscwuwmiumqag:
        foreach ($uomewyckeuqoqocu as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) {
            goto oasooegcuaqyaksa;
            icwmksqayogauieq:
            $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40";
            goto uyeskyscwoaceaum;
            mmkyoekoacqmsiug:
            goto ymskiasoemcgoywc;
            goto wgsgyisoiwmyqgsy;
            mqismiccqmeaacmm:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\40";
            goto mmkyoekoacqmsiug;
            uyeskyscwoaceaum:
            qgcaikicmyiaiqyo:
            goto yusiukmgiqcycoyw;
            geoqmawmyksikoyk:
            uygkaowwykyuwcms:
            goto wyyumeauogsokwwy;
            yusiukmgiqcycoyw:
            ymskiasoemcgoywc:
            goto geoqmawmyksikoyk;
            wgsgyisoiwmyqgsy:
            qucqsuqgimegkagu:
            goto ossgegmcqmikiako;
            yiqsyymaccyskgka:
            kakkcssaiwwuieig:
            goto icwmksqayogauieq;
            qmssemegysygmmig:
            goto qgcaikicmyiaiqyo;
            goto yiqsyymaccyskgka;
            uokesuqoiakammsq:
            if (preg_replace("\x2f\134\x73\x2b\x2f", '', $eqgoocgaqwqcimie)) {
                goto qucqsuqgimegkagu;
            }
            goto mqismiccqmeaacmm;
            ossgegmcqmikiako:
            if (is_numeric($ymqmyyeuycgmigyo)) {
                goto kakkcssaiwwuieig;
            }
            goto aymaycgmskceqaoo;
            aymaycgmskceqaoo:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x3d{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\x20";
            goto qmssemegysygmmig;
            oasooegcuaqyaksa:
            $eqgoocgaqwqcimie = self::skyucqyswomguscg($eqgoocgaqwqcimie);
            goto uokesuqoiakammsq;
            wyyumeauogsokwwy:
        }
        goto mqwsuaogooqyusmg;
        ggakeykgaywwuico:
        if (!is_array($uomewyckeuqoqocu)) {
            goto wkkoyqmigawkyoww;
        }
        goto wgcuscwuwmiumqag;
        akqqwkcyeiuguaee:
        wkkoyqmigawkyoww:
        goto acmqcaimwssoqwcu;
        acmqcaimwssoqwcu:
        return rtrim($aqykuigiuwmmcieu, "\40");
        goto gcogkoymaecaouei;
        ukoqmmisagkuskku:
        $aqykuigiuwmmcieu = '';
        goto ggakeykgaywwuico;
        mqwsuaogooqyusmg:
        eaoooeokgceokgym:
        goto akqqwkcyeiuguaee;
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
        wiggagegkomwsigy:
        omcqkauyquamiwkw:
        goto ecqymkukooyucuao;
        caosicamgweuouqy:
        foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) {
            goto eikgkciokyogmmae;
            uiwwomawycusiaqc:
            unset($gcegymooyemmaysk[$uusmaiomayssaecw]);
            goto qsgqsgqoasquyegw;
            qsgqsgqoasquyegw:
            kiwsouqmoaeuwcyi:
            goto eckqwskioaqieuiw;
            eckqwskioaqieuiw:
            ykmomgoksisygqmi:
            goto gqckiowescyoycek;
            eikgkciokyogmmae:
            if (!isset($gcegymooyemmaysk[$uusmaiomayssaecw])) {
                goto kiwsouqmoaeuwcyi;
            }
            goto omegwywwowgccqgc;
            omegwywwowgccqgc:
            $sysgmomuyiiawwcm[$uusmaiomayssaecw] = self::igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee);
            goto uiwwomawycusiaqc;
            gqckiowescyoycek:
        }
        goto ckawyuougmawuagq;
        uweqegqcewaiwgeo:
        if (!$gcegymooyemmaysk) {
            goto omcqkauyquamiwkw;
        }
        goto caosicamgweuouqy;
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
        qogkwuqcauywuqyy:
        wqqayaqgqaokkewk:
        goto gggawowkmoygokiu;
        gggawowkmoygokiu:
        return $uomewyckeuqoqocu;
        goto ymuwsmqieegccmec;
        ugsyacuawyeqcywk:
        foreach ($yygmoeguaqyumuui as $msqkueqksqwmskak => $uwomkgseoiegeume) {
            goto gcwekuwcsakcsyiu;
            sqkaggmqmkgwkimu:
            uykcwaomeewcauqm:
            goto qwssywogokmegcwg;
            gcwekuwcsakcsyiu:
            if (!isset($uomewyckeuqoqocu[$msqkueqksqwmskak])) {
                goto agkccauguemomgyi;
            }
            goto yasaysggqceikmye;
            yasaysggqceikmye:
            $uomewyckeuqoqocu[$uwomkgseoiegeume] = $uomewyckeuqoqocu[$msqkueqksqwmskak];
            goto uweweeiagegyukye;
            uweweeiagegyukye:
            ManipulateArray::unset($uomewyckeuqoqocu, $msqkueqksqwmskak);
            goto ymiiiqccumeseqgg;
            ymiiiqccumeseqgg:
            agkccauguemomgyi:
            goto sqkaggmqmkgwkimu;
            qwssywogokmegcwg:
        }
        goto qogkwuqcauywuqyy;
        ymuwsmqieegccmec:
    }
    
    public static function gmqyuaqwgiayskei($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\160\x61\156", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false, $qawsmigsyysqwmeq = false)
    {
        goto kmckgogusyyoyiia;
        myacgeqsygaaicsw:
        guqgcsmiuskcawsy:
        goto eiyeysucoukeiqii;
        eiyeysucoukeiqii:
        return $nsmgceoqaqogqmuw;
        goto qyigcogcwakysqwo;
        kmckgogusyyoyiia:
        $nsmgceoqaqogqmuw = '';
        goto yyeuoiccgweskqgw;
        mgcymqumaiwgmswy:
        goto iqkuskokswaoiosy;
        goto qgeeemyaomggagku;
        ywigugwyqieqkcoe:
        if (ManipulateAttachment::aauyuieeeaakygki($wkaqekwwgqsqwcoi)) {
            goto usgequsgggeskams;
        }
        goto egeesoksqmwwsuoe;
        uasiqigosyqwisuq:
        iqkuskokswaoiosy:
        goto gaukmueogumwwwmi;
        qgeeemyaomggagku:
        usgequsgggeskams:
        goto ksmkyewagskkoeok;
        geigqkwcacssimqk:
        $wkaqekwwgqsqwcoi = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto mykcwaiwmsyaacog;
        eukmgmmseugskiio:
        if ($gskuwmeemyeuwogc) {
            goto wsyouakcyuwgsmmq;
        }
        goto uuckosesigqwyykq;
        mykcwaiwmsyaacog:
        iiosuiiicgmwuquu:
        goto cewwgkwqeuayygeq;
        uuckosesigqwyykq:
        $wwgucssaecqekuek["\x73\x72\143"] = $wkaqekwwgqsqwcoi;
        goto ywcomywyegmgoiqc;
        ksmkyewagskkoeok:
        $wkaqekwwgqsqwcoi = ManipulateAttachment::mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi);
        goto uasiqigosyqwisuq;
        mgqgsoaoauaoioku:
        goto iiosuiiicgmwuquu;
        goto esmwouucumeuaaiq;
        cewwgkwqeuayygeq:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\151\143\157\156\x5f\x68\164\155\x6c", $wkaqekwwgqsqwcoi);
        goto myacgeqsygaaicsw;
        sqgkwwsqomcqewuu:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x69\x63\157\156\137\141\x74\164\x72\x69\x62\x75\164\x65\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi);
        goto eukmgmmseugskiio;
        yyeuoiccgweskqgw:
        if (!$wkaqekwwgqsqwcoi) {
            goto guqgcsmiuskcawsy;
        }
        goto wiuaoykkoqsqcciu;
        ewseyicyoqscoyic:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\163\x73", "\x70\162\55\151\143\x6f\x6e");
        goto ywigugwyqieqkcoe;
        egeesoksqmwwsuoe:
        $wkaqekwwgqsqwcoi = Template::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc, $qawsmigsyysqwmeq);
        goto mgcymqumaiwgmswy;
        esmwouucumeuaaiq:
        wsyouakcyuwgsmmq:
        goto geigqkwcacssimqk;
        ywcomywyegmgoiqc:
        $wkaqekwwgqsqwcoi = self::uuccukgasskgimsq("\x69\x6d\147", $wwgucssaecqekuek);
        goto mgqgsoaoauaoioku;
        gaukmueogumwwwmi:
        eaaaqmqycgcqiaee:
        goto sqgkwwsqomcqewuu;
        wiuaoykkoqsqcciu:
        if (ManipulateValidation::wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) {
            goto eaaaqmqycgcqiaee;
        }
        goto ewseyicyoqscoyic;
        qyigcogcwakysqwo:
    }
    
    public static function ciuuiyckmsygceis($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\164\162\x6f\156\x67", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function icqkogwskuwscskk($ywmkwiwkosakssii = [], $gskauacumcmekigs = []) : string
    {
        goto iauuciyimekqwsqe;
        iauuciyimekqwsqe:
        $qsqwqsymmqeoqwcu = ManipulateFormat::omaawkkwwyesqwcc(self::uskieqmcqyecigmy(array_merge($ywmkwiwkosakssii, ["\x6a\163\157\156" => false])), ["\x76\x69\145\x77" => "\x64\x69\x61\154\157\x67", "\x70\x72\x65\146\x69\170" => "\x67\145\156\145\162\x61\x6c", "\163\160\151\156\156\145\162" => false, "\x63\154\157\163\145\137\164\x69\x74\154\145" => __("\103\154\157\x73\x65", PR__CMN__FOUNDATION)]);
        goto gqqsowqiouwisway;
        wkmksaskwoeiqgqq:
        if (!$gskauacumcmekigs) {
            goto sskgwegakoyqqkku;
        }
        goto kgmwksacomoyiemk;
        myogiyogisykoogo:
        if (!($kqywgoqsmuswammk == "\141" && !ManipulateArray::get($wwgucssaecqekuek, "\x68\x72\145\146", false))) {
            goto maqacaoweqmyiuua;
        }
        goto egioqiaqgkcociok;
        egioqiaqgkcociok:
        $wwgucssaecqekuek["\150\162\145\146"] = "\43";
        goto waeogmkyweaagquk;
        giyuysmwumkyayiq:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\163", "\160\162\x2d\143\157\156\x66\151\162\155\x61\x62\x6c\145\x2d\x61\143\164\x69\x6f\x6e");
        goto gqwciegucimkisai;
        qcgikckikqqwewqg:
        sskgwegakoyqqkku:
        goto aumekwowaoymcamo;
        ouokoaqgueuukoes:
        if ($ewgwqamkygiqaawc) {
            goto yceuaweskqgkyccw;
        }
        goto mggmcgicyksgeoga;
        aumekwowaoymcamo:
        return $nsmgceoqaqogqmuw;
        goto uawqemsmoegqwcys;
        museocscicoguyic:
        $nsmgceoqaqogqmuw .= self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
        goto qcgikckikqqwewqg;
        gqwciegucimkisai:
        $ewgwqamkygiqaawc = ManipulateArray::unset($gskauacumcmekigs, "\x63\x6f\156\x74\x65\x6e\164");
        goto ouokoaqgueuukoes;
        qukgkymacqckmyoq:
        $wwgucssaecqekuek["\x64\x61\164\141\x2d\x6d\157\144\141\x6c"] = ManipulateArray::get($qsqwqsymmqeoqwcu, "\x70\162\x65\x66\x69\x78", "\x67\145\x6e\145\x72\x61\x6c") . "\x5f\155\157\x64\x61\154";
        goto myogiyogisykoogo;
        mggmcgicyksgeoga:
        $ewgwqamkygiqaawc = $meqocwsecsywiiqs;
        goto scimwiammysocuma;
        iquuyccmwaqmeiwc:
        gucssmauyukceoiu:
        goto cyawmgceseyseywk;
        scimwiammysocuma:
        yceuaweskqgkyccw:
        goto museocscicoguyic;
        keeikoymoqwakmuc:
        $meqocwsecsywiiqs = ManipulateArray::get($gskauacumcmekigs, "\x74\x69\164\x6c\145");
        goto aeeygmyoycocsaow;
        aeeygmyoycocsaow:
        $kqywgoqsmuswammk = ManipulateArray::get($gskauacumcmekigs, "\145\x6c\x65\155\145\156\x74", "\x62\x75\x74\x74\x6f\x6e");
        goto qukgkymacqckmyoq;
        ymmooquwukiemiuu:
        _doing_it_wrong(__FUNCTION__, __("\160\154\x65\x61\163\145\40\163\x70\145\x63\151\146\x79\40\x61\x20\160\162\145\146\x69\170\40\146\x6f\162\x20\146\157\162\x20\155\157\144\x61\154", PR__CMN__FOUNDATION), 1);
        goto iquuyccmwaqmeiwc;
        cyawmgceseyseywk:
        $nsmgceoqaqogqmuw = Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::MODAL_TEMPLATE_PATH, $qsqwqsymmqeoqwcu);
        goto wkmksaskwoeiqgqq;
        kgmwksacomoyiemk:
        $wwgucssaecqekuek = ManipulateArray::get($gskauacumcmekigs, "\x61\x74\x74\x72\x73", []);
        goto keeikoymoqwakmuc;
        waeogmkyweaagquk:
        maqacaoweqmyiuua:
        goto giyuysmwumkyayiq;
        gqqsowqiouwisway:
        if (ManipulateArray::get($qsqwqsymmqeoqwcu, "\x70\x72\145\x66\x69\170", '')) {
            goto gucssmauyukceoiu;
        }
        goto ymmooquwukiemiuu;
        uawqemsmoegqwcys:
    }
    
    public static function igmaewykumgwoaoy($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto yseiyiawimkkgwgu;
        icaoeusmweymiows:
        if ($uusmaiomayssaecw) {
            goto koeaocaigyiuouma;
        }
        goto sayimokgekmuieyc;
        scikcooocqiscwuk:
        if (isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto quaqcuogeasmkwum;
        }
        goto wgqacmwcgiemyqsm;
        ykywwwymygscykam:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\x20", $eqgoocgaqwqcimie));
        goto mekuokossigwmiay;
        iewaqqoywiiueooc:
        quaqcuogeasmkwum:
        goto eycywwwuywwiewae;
        kyqgyywuaqkskkmq:
        kmoaiymaumccccmw:
        goto oeogicauwqmuckmc;
        igwuuiisiiiacqog:
        cucwasiugcaiugkw:
        goto diqmggkiascwcmgo;
        ocmaakqeqigyqmcm:
        if ($uusmaiomayssaecw) {
            goto ieamiiycguksgyae;
        }
        goto wasokaaaiesgoiwu;
        zkyyykgsamwwykec:
        goto kmoaiymaumccccmw;
        goto gmaokugqemkqaymu;
        wasokaaaiesgoiwu:
        $wisgiwskwawciiee = $siquossayskcwkea;
        goto yougiukokiwueagg;
        mmkeguscoeyqgsaq:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto woemqeiusiyyycao;
        sceiisuuogsqyaua:
        if (isset($siquossayskcwkea->{$uusmaiomayssaecw})) {
            goto ewoqemggggmuiicc;
        }
        goto cgouooqwgiessagu;
        cykquwwqoyuqacka:
        mkmewusqskqwyiga:
        goto ykywwwymygscykam;
        diqmggkiascwcmgo:
        $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee;
        goto esgcqqwkiqagqcqu;
        wgqacmwcgiemyqsm:
        $wisgiwskwawciiee = '';
        goto mqiuuuiuyieomgsm;
        aqmyaskcyisumkec:
        wykcswiwacwksyeo:
        goto sceiisuuogsqyaua;
        ggcqsikuoaowocia:
        if (is_array($eqgoocgaqwqcimie)) {
            goto mkmewusqskqwyiga;
        }
        goto wcqmkqkoekwggcaq;
        euqwyueoiyaciwmu:
        koeaocaigyiuouma:
        goto mmkeguscoeyqgsaq;
        sayimokgekmuieyc:
        $siquossayskcwkea = $wisgiwskwawciiee;
        goto awyisykkykwugmcs;
        xaoaqqukaokieeos:
        scgooimgesucqmyw:
        goto oeegwqskokyysgia;
        gkqqeoyqwmaqweus:
        ckyaekugwcaaogua:
        goto ocmaakqeqigyqmcm;
        mqiuuuiuyieomgsm:
        goto qgigwkeaoogkycqq;
        goto iewaqqoywiiueooc;
        cgouooqwgiessagu:
        $wisgiwskwawciiee = '';
        goto zkyyykgsamwwykec;
        esouewuuwooociii:
        ieamiiycguksgyae:
        goto scikcooocqiscwuk;
        skiieiyqgwecickk:
        goto ycgeiokgsmiwocco;
        goto gkqqeoyqwmaqweus;
        gmaokugqemkqaymu:
        ewoqemggggmuiicc:
        goto camisusksgocgiyu;
        awyisykkykwugmcs:
        goto csuyiuccwoewwymw;
        goto euqwyueoiyaciwmu;
        mmocggcuysgcayqs:
        kcuquqyuoqukkiae:
        goto ugsucquekakgyyoe;
        ykeywoiececiccqk:
        if (!is_array($siquossayskcwkea)) {
            goto ugcgciqmmuumiwss;
        }
        goto icaoeusmweymiows;
        csmmacecmeiqukou:
        return $siquossayskcwkea;
        goto auamqueygsmcgeua;
        esgcqqwkiqagqcqu:
        ssgusiykmcsmacke:
        goto csmmacecmeiqukou;
        mekuokossigwmiay:
        ykagosqgwoyewmsm:
        goto ayassegeqauesegc;
        yseiyiawimkkgwgu:
        if (is_object($siquossayskcwkea) && $uusmaiomayssaecw) {
            goto wykcswiwacwksyeo;
        }
        goto ayiuauyqkcycymiq;
        mkuiaigaaiiusgcw:
        qgigwkeaoogkycqq:
        goto xaoaqqukaokieeos;
        eycywwwuywwiewae:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto mkuiaigaaiiusgcw;
        ymqgkiswgyiwkiee:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\40", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\40" . $eqgoocgaqwqcimie);
        goto mmocggcuysgcayqs;
        yaowsqucwakaesoi:
        goto eyosqwqswsqcuekw;
        goto aqmyaskcyisumkec;
        iykoiouoygaumuak:
        return trim($siquossayskcwkea . "\40" . (is_array($eqgoocgaqwqcimie) ? implode("\40", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie));
        goto skiieiyqgwecickk;
        qgoesugiyiiqgaka:
        goto ssgusiykmcsmacke;
        goto igwuuiisiiiacqog;
        oeegwqskokyysgia:
        ycgeiokgsmiwocco:
        goto yaowsqucwakaesoi;
        camisusksgocgiyu:
        $wisgiwskwawciiee = $siquossayskcwkea->{$uusmaiomayssaecw};
        goto kyqgyywuaqkskkmq;
        ugsucquekakgyyoe:
        goto ykagosqgwoyewmsm;
        goto cykquwwqoyuqacka;
        ayiuauyqkcycymiq:
        if (is_array($siquossayskcwkea)) {
            goto ckyaekugwcaaogua;
        }
        goto iykoiouoygaumuak;
        oeogicauwqmuckmc:
        eyosqwqswsqcuekw:
        goto ggcqsikuoaowocia;
        yougiukokiwueagg:
        goto scgooimgesucqmyw;
        goto esouewuuwooociii;
        ayassegeqauesegc:
        if (is_object($siquossayskcwkea)) {
            goto cucwasiugcaiugkw;
        }
        goto ykeywoiececiccqk;
        wecqeaiwiowwougo:
        ugcgciqmmuumiwss:
        goto qgoesugiyiiqgaka;
        woemqeiusiyyycao:
        csuyiuccwoewwymw:
        goto wecqeaiwiowwougo;
        wcqmkqkoekwggcaq:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto kcuquqyuoqukkiae;
        }
        goto ymqgkiswgyiwkiee;
        auamqueygsmcgeua:
    }
    
    public static function gusouagusgyoaeya($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\160", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function yekemqwyimcqgeuk($ewgwqamkygiqaawc, $ekasyoagocygouom, $wwgucssaecqekuek = []) : string
    {
        $wwgucssaecqekuek["\x64\141\x74\x65\164\x69\155\x65"] = $ekasyoagocygouom;
        return self::uuccukgasskgimsq("\x74\x69\155\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy = [], $wwgucssaecqekuek = []) : string
    {
        goto asweayesceakosic;
        uckskmkusokoegaw:
        auqmkwoggqyaskcq:
        goto wqwuwausogwsuqqc;
        iaaigscysuqkassk:
        if (!$uykgysuswksgmwqy) {
            goto auqmkwoggqyaskcq;
        }
        goto wqsueawiwmaymyye;
        asweayesceakosic:
        $ewgwqamkygiqaawc = '';
        goto iaaigscysuqkassk;
        uqyqusgiassqqgso:
        qcsqqqkmmswawmqo:
        goto emgcuckeyeakwoww;
        ieeoomsoskweuome:
        smueyuiwaswcmmyq:
        goto qikugkuomgekwawu;
        miowwquwweeycgyu:
        $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk;
        goto uqyqusgiassqqgso;
        emgcuckeyeakwoww:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\164\142\157\144\171", [], $essikcmqiyqaqoaq);
        goto ucyecesyqmiackww;
        wqwuwausogwsuqqc:
        if (!is_array($essikcmqiyqaqoaq)) {
            goto qcsqqqkmmswawmqo;
        }
        goto woeogayusoaoawio;
        wakcyckyeemwoqgk:
        foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) {
            $kakckmgscyiskome .= self::uuccukgasskgimsq("\x74\150", ["\x64\x61\164\x61\x2d\153\x65\171" => "\x74\150\x2d{$uusmaiomayssaecw}", "\143\x6c\141\163\163" => "\x74\145\x78\164\x2d\x6c\145\146\x74"], $kmmmiumuegqmksky);
            akwwymwisyauswko:
        }
        goto ieeoomsoskweuome;
        igmqymyemckoaqgi:
        return self::uuccukgasskgimsq("\x74\x61\x62\x6c\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
        goto asuaoeiwuqaugwaa;
        ucyecesyqmiackww:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\x73", "\164\141\142\154\x65\40\155\55\60");
        goto igmqymyemckoaqgi;
        qikugkuomgekwawu:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\x74\x68\145\x61\144", [], $kakckmgscyiskome);
        goto uckskmkusokoegaw;
        gmqmassuiycwosek:
        ugyquwcqwgkykyom:
        goto miowwquwweeycgyu;
        wqsueawiwmaymyye:
        $kakckmgscyiskome = '';
        goto wakcyckyeemwoqgk;
        doykmuigywoqqiso:
        foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) {
            goto ecqkiigukgcscequ;
            egwsiqoumyssgaiw:
            foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) {
                goto wowqwsgksqqqmucw;
                aqgeqqeaykqsqqyy:
                $ykaygkcscgyoiiae .= self::uuccukgasskgimsq("\164\144", ["\x64\x61\164\141\x2d\x6b\x65\171" => "\164\144\55{$uusmaiomayssaecw}\x2d{$momcykaoccoymeig}"], $yycqiageqkquoioq);
                goto gkqcgyeqkcisqgck;
                gkqcgyeqkcisqgck:
                qigqugqceqksaoaq:
                goto uoioeqiqmewckqwq;
                oqwqqsiygukqweey:
                goto qigqugqceqksaoaq;
                goto mugcawkwqggykqkq;
                mugcawkwqggykqkq:
                cwsmeosaaeaamosg:
                goto aqgeqqeaykqsqqyy;
                wowqwsgksqqqmucw:
                if (!($uusmaiomayssaecw == "\x74\162\x5f\141\x74\164\x72\x73")) {
                    goto cwsmeosaaeaamosg;
                }
                goto oqwqqsiygukqweey;
                uoioeqiqmewckqwq:
            }
            goto gecomumkgckmoicc;
            gecomumkgckmoicc:
            caykkyawcquykaig:
            goto quiscsoaasusqsii;
            yeucaeocmeokqggg:
            kosquscyqqgygykc:
            goto owaoemsqwmcymegi;
            ecqkiigukgcscequ:
            $ykaygkcscgyoiiae = '';
            goto egwsiqoumyssgaiw;
            quiscsoaasusqsii:
            $ecuqamumceeoyiui = ManipulateArray::get($keuwuekioomqqaey, "\x74\x72\137\x61\x74\x74\x72\x73", []);
            goto cqouisksowcqsqga;
            isawcgqqwuaucgga:
            $ymoekaoqgqmmgoqk .= self::uuccukgasskgimsq("\x74\x72", $ecuqamumceeoyiui, $ykaygkcscgyoiiae);
            goto yeucaeocmeokqggg;
            cqouisksowcqsqga:
            $ecuqamumceeoyiui["\x64\141\x74\x61\55\x6b\x65\171"] = "\164\x72\55{$momcykaoccoymeig}";
            goto isawcgqqwuaucgga;
            owaoemsqwmcymegi:
        }
        goto gmqmassuiycwosek;
        woeogayusoaoawio:
        $ymoekaoqgqmmgoqk = '';
        goto doykmuigywoqqiso;
        asuaoeiwuqaugwaa:
    }
    
    public static function sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $mogykyiukkoqceec = 6) : string
    {
        goto oeecmqccguiykkqm;
        iowuiukuyewqkkae:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto mmewqwgucqqooauq;
            iyqqogayqsmeocus:
            
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0];
            goto iscaiaaawwcwwaqe;
            iuaagccgiiyoewqi:
            cycuoasiccouwyqw:
            goto swugymmweuogwusw;
            qieaauqeoyssiwei:
            $giwamsoicooomueg .= "\40\x6d\142{$gcgsqcoqciockquc}\x2d{$mogykyiukkoqceec}";
            goto aesqmgsmqugcmwsu;
            iscaiaaawwcwwaqe:
            eiceowycmoycqkuk:
            goto syucwaiqcwoigmyi;
            uocgaiiuusguaayy:
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1];
            goto msyquusciakoksug;
            gewmecseymwsqeaw:
            caeamkmmgyasuywc:
            goto csmkgqiuimmymqaw;
            zseoycemqgkocuoy:
            umioqieqqagmckwg:
            goto swmckgcuukkqqckq;
            qomksaimmayiiiwk:
            $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length;
            goto mkikkgwwyiemokme;
            uquiseikicyaaaka:
            $gcgsqcoqciockquc = '';
            goto kemgeqwcacseqmgu;
            emuussqoawouymue:
            if (!$gcgsqcoqciockquc) {
                goto umioqieqqagmckwg;
            }
            goto uessyqkuysyoaqwm;
            uessyqkuysyoaqwm:
            $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}";
            goto zseoycemqgkocuoy;
            wwwmsesaeqsooeso:
            if (!($gaeqamemwmwsyukm == 2)) {
                goto oucesaewqyuwiiqg;
            }
            goto kgmmymowamcgesku;
            mmewqwgucqqooauq:
            $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi);
            goto iewukqcakeoaogea;
            sqikqgygycksuyoa:
            $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi;
            goto oqiwsqaskogasows;
            oqiwsqaskogasows:
            oimimqggwmcwcayu:
            goto emuussqoawouymue;
            iewukqcakeoaogea:
            $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie);
            goto uquiseikicyaaaka;
            ywacykwawisgmguq:
            goto eiceowycmoycqkuk;
            goto qakuswcwwswiesyi;
            csmkgqiuimmymqaw:
            $giwamsoicooomueg .= "\40\155\142{$gcgsqcoqciockquc}\55\x30";
            goto wgggekucgkaiksaw;
            msyquusciakoksug:
            oucesaewqyuwiiqg:
            goto ywacykwawisgmguq;
            swoccyieyiyocaai:
            if (!($aoqagsqecokqqwqg == $ykiwomimkkuiigoq)) {
                goto oimimqggwmcwcayu;
            }
            goto sqikqgygycksuyoa;
            aesqmgsmqugcmwsu:
            goto mskqaiwsecmeksgy;
            goto gewmecseymwsqeaw;
            swmckgcuukkqqckq:
            if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) {
                goto caeamkmmgyasuywc;
            }
            goto qieaauqeoyssiwei;
            qakuswcwwswiesyi:
            gmugaowewyiyooea:
            goto iyqqogayqsmeocus;
            syucwaiqcwoigmyi:
            $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi;
            goto qomksaimmayiiiwk;
            mkikkgwwyiemokme:
            $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi;
            goto swoccyieyiyocaai;
            wgggekucgkaiksaw:
            mskqaiwsecmeksgy:
            goto iuaagccgiiyoewqi;
            kgmmymowamcgesku:
            
            $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0];
            goto uocgaiiuusguaayy;
            kemgeqwcacseqmgu:
            if ($gaeqamemwmwsyukm == 1) {
                goto gmugaowewyiyooea;
            }
            goto wwwmsesaeqsooeso;
            swugymmweuogwusw:
        }
        goto cewmkewqmueeeyyc;
        eaeogyomscegkayw:
        yuceksygooykweoy:
        goto iewaoiacicouqcmy;
        owmgcskcyawsqskm:
        mesgcyiaogasqowm:
        goto woyasoooseaaaaio;
        qigywyiuuemsacoe:
        if (!$qgqgaykggoemycsk) {
            goto yuceksygooykweoy;
        }
        goto csosomiukogmmcme;
        woyasoooseaaaaio:
        $giwamsoicooomueg = '';
        goto qigywyiuuemsacoe;
        iewaoiacicouqcmy:
        return rtrim($giwamsoicooomueg);
        goto cswywwkcqekmigki;
        csosomiukogmmcme:
        $wkkweuacukumqmya = array_filter(explode("\143\x6f\x6c\55", $qgoqiacsiccwoawi));
        goto iowuiukuyewqkkae;
        oeecmqccguiykkqm:
        if (!is_array($qgqgaykggoemycsk)) {
            goto mesgcyiaogasqowm;
        }
        goto kwqswmuukaymcqoq;
        cewmkewqmueeeyyc:
        qeuewcmsumowussm:
        goto eaeogyomscegkayw;
        kwqswmuukaymcqoq:
        $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\x69\x6e\144\145\170", "\x6c\x65\x6e\x67\164\150"]);
        goto owmgcskcyawsqskm;
        cswywwkcqekmigki:
    }
    
    public static function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto gqiuksowisyaqsgs;
        eecmomwqeicciqok:
        $ukwmeuiywasikwcu = true;
        goto qimocyquekymmiuk;
        uwecaymwqkkicime:
        eoigcqiakssieeau:
        goto skuskikumqguccee;
        kaiusyuqauywqwii:
        owecwquwkacmmwsm:
        goto iacqiaeyscguwyia;
        yaugumwgommeyeii:
        $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea));
        goto esqwuigiwqkiwwea;
        skuskikumqguccee:
        if (!$ukwmeuiywasikwcu) {
            goto auiissiemumqmkwa;
        }
        goto ogasoacwwskwkuwo;
        sigasyakmuoqkmmk:
        yumcwyyykaumkeau:
        goto gcoakgwgoisggsma;
        escogkseqmmsucuy:
        if (is_string($siquossayskcwkea)) {
            goto sociuakymqqoqscu;
        }
        goto agckiaesekmciuyw;
        gcoakgwgoisggsma:
        goto muuekeyeccsssuow;
        goto siqiwagoqooemoaw;
        siqiwagoqooemoaw:
        sociuakymqqoqscu:
        goto yaugumwgommeyeii;
        gqiuksowisyaqsgs:
        $ukwmeuiywasikwcu = false;
        goto escogkseqmmsucuy;
        amuouaaiumwgawui:
        if (!is_string($wisgiwskwawciiee)) {
            goto msmmauiswokuyasc;
        }
        goto qgsyukssiqqqyqky;
        qimocyquekymmiuk:
        msmmauiswokuyasc:
        goto wogokussyamayesu;
        akaqcyoimeoumcim:
        return $siquossayskcwkea;
        goto swyesueumaokiieq;
        wogokussyamayesu:
        if (!is_array($wisgiwskwawciiee)) {
            goto woasacgcwusiuimk;
        }
        goto gcukuckckaiewegs;
        vaaikkcmqgsiwkum:
        unset($wisgiwskwawciiee[$ccamueccusigaaio]);
        goto uwecaymwqkkicime;
        oquqawmmasaicyua:
        if (!(($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee)) !== false)) {
            goto eoigcqiakssieeau;
        }
        goto vaaikkcmqgsiwkum;
        agckiaesekmciuyw:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto yumcwyyykaumkeau;
        }
        goto cocigaqusqewkiuy;
        esqwuigiwqkiwwea:
        muuekeyeccsssuow:
        goto akaqcyoimeoumcim;
        cocigaqusqewkiuy:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto amuouaaiumwgawui;
        oogioucuccasmyak:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto kaiusyuqauywqwii;
        gcukuckckaiewegs:
        if (!in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee)) {
            goto owecwquwkacmmwsm;
        }
        goto oquqawmmasaicyua;
        ogcsckmescouyqmc:
        auiissiemumqmkwa:
        goto oogioucuccasmyak;
        qgsyukssiqqqyqky:
        $wisgiwskwawciiee = explode("\x20", $wisgiwskwawciiee);
        goto eecmomwqeicciqok;
        iacqiaeyscguwyia:
        woasacgcwusiuimk:
        goto sigasyakmuoqkmmk;
        ogasoacwwskwkuwo:
        $wisgiwskwawciiee = implode("\x20", $wisgiwskwawciiee);
        goto ogcsckmescouyqmc;
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
        uqgskaesqkwyiyws:
        if (!$wkaqekwwgqsqwcoi) {
            goto sggquugugsmuiwwe;
        }
        goto mgosoyoeuiqwiwmk;
        ssikoeweoiwuqqoe:
        $wwgucssaecqekuek = ManipulateArray::get($wkaqekwwgqsqwcoi, "\x61\x74\x74\162\x73", []);
        goto sesoweewqkwcymwu;
        mcswsycyyuouesmw:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\x73", "\x6d\x79\55\x61\165\164\x6f\40\x69\x63\x6f\x6e\55\x73\x6d\x20\155\x72\x2d\x32");
        goto igwoiimkmmmscuoi;
        sesoweewqkwcymwu:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($wkaqekwwgqsqwcoi, "\151\143\157\156", '');
        goto ukmewkukokeqigos;
        ukmewkukokeqigos:
        gomaeoikykwymgwc:
        goto mcswsycyyuouesmw;
        igwoiimkmmmscuoi:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true);
        goto okswmkyoomseaueq;
        iumsyyqaikswuqic:
        if (!is_array($wkaqekwwgqsqwcoi)) {
            goto gomaeoikykwymgwc;
        }
        goto ssikoeweoiwuqqoe;
        uoysyuggmqqmcekw:
        $iwamiguusayooguq = self::qgsekwygcgawekeq("\x73\x70\141\156", ["\x63\154\141\163\163" => "\155\x79\x2d\x61\165\164\x6f"], true, $iwamiguusayooguq);
        goto uqgskaesqkwyiyws;
        yciamiooeekkmayo:
        return self::qgsekwygcgawekeq("\x64\x69\166", ["\143\x6c\x61\163\x73" => "\160\x72\55\x6d\x6f\144\141\154\x2d\147\165\151\144\145\x20\144\x2d\x66\x6c\145\x78"], true, $wkaqekwwgqsqwcoi . $iwamiguusayooguq);
        goto isaickqmmmkeicgo;
        mgosoyoeuiqwiwmk:
        $wwgucssaecqekuek = [];
        goto iumsyyqaikswuqic;
        okswmkyoomseaueq:
        sggquugugsmuiwwe:
        goto yciamiooeekkmayo;
        isaickqmmmkeicgo:
    }
    
    public static function ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw, $iqaosyayeiuaisqi = false) : string
    {
        goto qcgascowuioocwig;
        gaesmekmwiaksqsm:
        uuucmcsegiwmgqyk:
        goto ikewqccciwsqcamq;
        suqmqyegkqmyqmok:
        foreach ($uamcoiueqaamsqma as $yaakimaumwqiaeei) {
            $suuagcecoyuweoqk .= self::uuccukgasskgimsq("\154\x69", [], $yaakimaumwqiaeei);
            sqwciumeqyaccyau:
        }
        goto cuyucakmwasgeaew;
        ikewqccciwsqcamq:
        return $uamcoiueqaamsqma;
        goto maaaegyeiiecykkk;
        uewwowiwgoyesikg:
        if (!is_string($uamcoiueqaamsqma)) {
            goto uuucmcsegiwmgqyk;
        }
        goto goegcwmuuaiokimo;
        kayosmeqqkicimqa:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\165\x6c", [], $suuagcecoyuweoqk);
        goto ksguecmqmcsogyig;
        ksguecmqmcsogyig:
        qmqaskwucyouocqk:
        goto uewwowiwgoyesikg;
        qcgascowuioocwig:
        if (!is_array($uamcoiueqaamsqma)) {
            goto qmqaskwucyouocqk;
        }
        goto wawaocswoauwmmus;
        wawaocswoauwmmus:
        $suuagcecoyuweoqk = '';
        goto suqmqyegkqmyqmok;
        cuyucakmwasgeaew:
        owukqqsugwsyyueu:
        goto kayosmeqqkicimqa;
        goegcwmuuaiokimo:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\x64\151\x76", ["\x63\x6c\141\x73\163" => "\164\145\170\164\x2d\x63\x65\x6e\164\x65\162\40\155\157\144\x61\x6c\x2d\155\x65\163\163\x61\147\145\x20\155\x6f\144\141\154\x2d\155\x65\163\x73\x61\147\x65\x2d" . ($iqaosyayeiuaisqi ? $iqaosyayeiuaisqi : ($occymigcemkqucuw ? "\x73\165\143\x63\x65\163\x73" : "\x64\141\156\x67\x65\x72"))], $uamcoiueqaamsqma);
        goto gaesmekmwiaksqsm;
        maaaegyeiiecykkk:
    }
    
    public static function uskieqmcqyecigmy($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\x62\165\164\164\x6f\x6e")
    {
        goto coyqmiyssicuemqc;
        gemaacocysicmuis:
        if (!in_array("\143\x61\156\x63\x65\154", $qyukicweqoisimwg)) {
            goto ckqmyeycucqcugaq;
        }
        goto isameaaesyeqewyw;
        oawacyogaucwgeqa:
        ckqmyeycucqcugaq:
        goto wmoueywscoykgego;
        qmeiewyqewgycomy:
        yyqqwqqueqsmwuek:
        goto koiouyakeqieqaug;
        kiegwkgkkmwoigue:
        if (!$qyukicweqoisimwg) {
            goto gyqwksoocmmwsmii;
        }
        goto gemaacocysicmuis;
        wmoueywscoykgego:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto qoouwuqgucsyyaii;
            uwgewqagamkqykuc:
            $scwiymciagumsuiw = $kqywgoqsmuswammk;
            goto wmymgosowycieomq;
            aemkoeoaageqwmgm:
            iueeimyiyygkcuke:
            goto wcukoowiwmgeqmck;
            cywceaauueswisma:
            $gskauacumcmekigs = self::igmaewykumgwoaoy($gskauacumcmekigs, "\x63\154\x61\x73\163", "\160\170\x2d\65");
            goto cueqqguumyoieuqi;
            yuaussgmgweicywq:
            syoegaiagasioioi:
            goto qyauooaokskicoqw;
            eousywekqyqmkigg:
            aqgwciseuyqyomme:
            goto omgwcmaawwmwewuy;
            eosyseigsygisgay:
            $gskauacumcmekigs[] = "\144\x61\164\141\55\155\151\143\162\x6f\155\157\x64\141\x6c\55\143\154\157\163\145";
            goto yuaussgmgweicywq;
            iouaimmmokqaicae:
            $scwiymciagumsuiw = "\141";
            goto aemkoeoaageqwmgm;
            qoouwuqgucsyyaii:
            if (!is_array($gskauacumcmekigs)) {
                goto uesguqmcseqmcycc;
            }
            goto qiaowiwiqqmegouc;
            wcukoowiwmgeqmck:
            $qyukicweqoisimwg[$momcykaoccoymeig] = self::qgsekwygcgawekeq($scwiymciagumsuiw, $gskauacumcmekigs, true, ManipulateArray::get($gskauacumcmekigs, "\164\x69\164\154\145"));
            goto cuuuygiqqiausmsg;
            cuuuygiqqiausmsg:
            uesguqmcseqmcycc:
            goto eousywekqyqmkigg;
            miyguwmiomkywqwi:
            kcwquqksumqqmccq:
            goto iouaimmmokqaicae;
            wmymgosowycieomq:
            goto iueeimyiyygkcuke;
            goto miyguwmiomkywqwi;
            qyauooaokskicoqw:
            $geecqyososceumsk = ManipulateArray::get($gskauacumcmekigs, "\x68\x72\x65\146");
            goto cywceaauueswisma;
            qiaowiwiqqmegouc:
            if (!ManipulateArray::get($gskauacumcmekigs, "\144\x69\163\155\151\163\x73", false)) {
                goto syoegaiagasioioi;
            }
            goto eosyseigsygisgay;
            cueqqguumyoieuqi:
            if ($geecqyososceumsk) {
                goto kcwquqksumqqmccq;
            }
            goto uwgewqagamkqykuc;
            omgwcmaawwmwewuy:
        }
        goto qmeiewyqewgycomy;
        koiouyakeqieqaug:
        $ywmkwiwkosakssii["\x62\x75\x74\164\157\x6e\163"] = $qyukicweqoisimwg;
        goto uesyowisqckwqweq;
        isameaaesyeqewyw:
        $qyukicweqoisimwg[array_search("\143\x61\156\x63\145\154", $qyukicweqoisimwg)] = ["\x63\x6c\x61\163\x73" => "\142\x74\156\x20\x62\164\156\55\x6f\x75\164\x6c\x69\x6e\145\55\160\162\151\155\x61\x72\171", "\164\151\164\154\145" => __("\103\x61\156\143\x65\154", PR__CMN__FOUNDATION), "\144\x69\x73\x6d\151\x73\x73" => true];
        goto oawacyogaucwgeqa;
        ymiqqkqcasmeswai:
        $qyukicweqoisimwg = ManipulateArray::get($ywmkwiwkosakssii, "\x62\165\x74\164\157\x6e\x73", []);
        goto kiegwkgkkmwoigue;
        coyqmiyssicuemqc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x79\x70\x65" => "\x69\x6e\146\157", "\152\x73\x6f\x6e" => JSON_UNESCAPED_SLASHES, "\163\x69\172\x65" => "\x6d\x64", "\x74\151\x74\154\x65" => __("\x41\x6c\145\162\164", PR__CMN__FOUNDATION), "\143\x6f\x6e\x74\145\156\164" => '', "\142\165\164\164\x6f\x6e\x73" => []]);
        goto ymiqqkqcasmeswai;
        icumqgcukqmiqmas:
        jwegkqgqigkyimwy:
        goto aqeaocoemqqeogww;
        aqeaocoemqqeogww:
        return $ywmkwiwkosakssii;
        goto cecysuuokaaksaei;
        yikiisaoucasocwm:
        if (!($smgooosyoeqwcaeg = ManipulateArray::get($ywmkwiwkosakssii, "\x6a\163\157\156"))) {
            goto jwegkqgqigkyimwy;
        }
        goto mcqowyeqgcwcomaa;
        uesyowisqckwqweq:
        gyqwksoocmmwsmii:
        goto yikiisaoucasocwm;
        mcqowyeqgcwcomaa:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, $smgooosyoeqwcaeg);
        goto icumqgcukqmiqmas;
        cecysuuokaaksaei:
    }
    
    public static function sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '')
    {
        echo self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
    }
    
    public static function wegccueewucwyaew($ywmkwiwkosakssii = [])
    {
        goto qmaiauoqwugaayyg;
        kmwayeqackmikqec:
        $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, self::ATTRS);
        goto ewmuieggokyocuak;
        bamowoeqaswucwam:
        return $ewgwqamkygiqaawc;
        goto wcqiyaiokyqgquyy;
        csmukgiomieeyisi:
        akqyksqaagqcqgyi:
        goto bamowoeqaswucwam;
        ouyokyouaaccmeiq:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        goto kmwayeqackmikqec;
        aaiscsiamgmkyywe:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\144\151\x76", ["\x63\154\x61\x73\x73" => "\143\x61\x72\x64\55\x62\157\144\171"], $ewgwqamkygiqaawc);
        goto oewekkuywgckgccs;
        mumgumaweigkucas:
        if (!$ywmkwiwkosakssii["\150\x61\163\x5f\142\157\144\171"]) {
            goto gamqmoqcksyqiwyi;
        }
        goto aaiscsiamgmkyywe;
        qwcmmmosiuyqkwaw:
        wayeaiimomiuikeg:
        goto kqkaeoogyymkisak;
        qmaiauoqwugaayyg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\150\x61\163\x5f\142\x6f\x64\171" => true, self::ICON => '', self::TITLE => '', self::ATTRS => [], self::CONTENT => '']);
        goto ouyokyouaaccmeiq;
        csgwwcggmgyygmeg:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\x64\x69\x76", $wwgucssaecqekuek, [$meqocwsecsywiiqs, $ewgwqamkygiqaawc]);
        goto csmukgiomieeyisi;
        aaywckeuwqmamysu:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\150\62", ["\x63\154\x61\x73\163" => "\155\x2d\60"], $meqocwsecsywiiqs);
        goto qwcmmmosiuyqkwaw;
        fawgiiyqcaycokqm:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\x64\x69\x76", ["\143\x6c\x61\163\163" => "\143\x61\x72\144\x2d\x68\145\x61\144\x65\x72"], self::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi));
        goto aaywckeuwqmamysu;
        yqiwseeymqmgiicm:
        if (!$meqocwsecsywiiqs) {
            goto wayeaiimomiuikeg;
        }
        goto fawgiiyqcaycokqm;
        kqkaeoogyymkisak:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\163", "\160\162\x2d\143\141\x72\x64\40\143\141\x72\x64");
        goto csgwwcggmgyygmeg;
        kgwsooywwuaeuakk:
        if (!$ewgwqamkygiqaawc) {
            goto akqyksqaagqcqgyi;
        }
        goto mumgumaweigkucas;
        iusomscskwyimymg:
        $ewgwqamkygiqaawc = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT);
        goto kgwsooywwuaeuakk;
        ewmuieggokyocuak:
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        goto iusomscskwyimymg;
        oewekkuywgckgccs:
        gamqmoqcksyqiwyi:
        goto yqiwseeymqmgiicm;
        wcqiyaiokyqgquyy:
    }
    
    public static function smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false)
    {
        goto ieiowqqyqmuuiskw;
        ieiowqqyqmuuiskw:
        if (!$wkaqekwwgqsqwcoi) {
            goto guwwwoemeywymeeq;
        }
        goto wioocaycsoigykgi;
        meqsymuyaicwuqge:
        return $meqocwsecsywiiqs;
        goto viawiegsusqwukmw;
        caeuuiwgcwiauiea:
        guwwwoemeywymeeq:
        goto meqsymuyaicwuqge;
        moqmuoigoekayaie:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\x63\154\141\x73\x73" => "\x6d\154\x2d\x32"]);
        goto sswmeckkgqmsycec;
        sswmeckkgqmsycec:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi . $meqocwsecsywiiqs);
        goto caeuuiwgcwiauiea;
        wioocaycsoigykgi:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        goto moqmuoigoekayaie;
        viawiegsusqwukmw:
    }
    
    public static function oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, $wwgucssaecqekuek = [], $wygwqsssewkqooqm = true) : string
    {
        goto ukukwawaqmgwyeoa;
        aikaemyaeysqwkao:
        return self::qgsekwygcgawekeq("\144\x69\166", $wwgucssaecqekuek, true, self::gusouagusgyoaeya($uamcoiueqaamsqma));
        goto ueyeiwwskkiwqses;
        eswkoskowykeswog:
        gwuqaeaisqmugywc:
        goto iywkociqqsqwemum;
        aigmckisemoscykc:
        $egkyssmuqcwaciya .= "\x20\x69\163\x2d\x64\151\163\155\x69\163\163\151\x62\154\145";
        goto eswkoskowykeswog;
        icukyuomwsmyceuu:
        if (!$wygwqsssewkqooqm) {
            goto gwuqaeaisqmugywc;
        }
        goto aigmckisemoscykc;
        iywkociqqsqwemum:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\x73", $egkyssmuqcwaciya);
        goto aikaemyaeysqwkao;
        ukukwawaqmgwyeoa:
        $egkyssmuqcwaciya = "\156\157\x74\151\x63\145\x20\x6e\157\x74\151\143\x65\x2d{$iqaosyayeiuaisqi}";
        goto icukyuomwsmyceuu;
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
        socgcieqocmyicko:
        uuysgoccuuiugycs:
        goto ycagwqymyuaaawmk;
        iyacigqskywekuga:
        goto uuysgoccuuiugycs;
        goto eewwosymwcycgaim;
        ykayiagkwkwicggg:
        yikcegqaeeomgayu:
        goto imeyeceeowouqwwy;
        imeyeceeowouqwwy:
        if (is_array($ewgwqamkygiqaawc)) {
            goto ymkyeiuqcgcwyssa;
        }
        goto eiukowqmwgouiagk;
        wgyokqwasmgockga:
        if (!in_array($kqywgoqsmuswammk, ["\x69\156\x70\x75\x74", "\142\x72", "\x68\x72", "\x69\155\147", "\x6c\x69\156\153"])) {
            goto yikcegqaeeomgayu;
        }
        goto oymwkgoekiscmgkk;
        wwwiccouwgagwsus:
        $muiegiugiocacqkm = false;
        goto ykayiagkwkwicggg;
        oymwkgoekiscmgkk:
        $ggkaciewmeqmgckg = "\74\45\x73\40\x25\163\57\76";
        goto wwwiccouwgagwsus;
        guewwiqmwqkqeuqa:
        iiwomycesoecmsmg:
        goto yqiayekgygkgyoww;
        yqiayekgygkgyoww:
        return $aqykuigiuwmmcieu;
        goto ykuwccukqeycqccg;
        ygewsqqmmosmsikg:
        $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc);
        goto socgcieqocmyicko;
        gksksycwauoamskw:
        $wwgucssaecqekuek = self::aoyseswaaaugicuq($wwgucssaecqekuek);
        goto wwyawygoukmokcak;
        eiukowqmwgouiagk:
        $aqykuigiuwmmcieu = $ewgwqamkygiqaawc;
        goto iyacigqskywekuga;
        cwiugwwoyscgwwym:
        $aqykuigiuwmmcieu = sprintf("\45\x73\x3c\57\x25\163\76", $aqykuigiuwmmcieu, $kqywgoqsmuswammk);
        goto guewwiqmwqkqeuqa;
        wwyawygoukmokcak:
        $ggkaciewmeqmgckg = "\x3c\x25\163\x20\x25\163\x3e\45\x73";
        goto wgyokqwasmgockga;
        eewwosymwcycgaim:
        ymkyeiuqcgcwyssa:
        goto ygewsqqmmosmsikg;
        acqoqwucmyoyyyiq:
        if (!$muiegiugiocacqkm) {
            goto iiwomycesoecmsmg;
        }
        goto cwiugwwoyscgwwym;
        ycagwqymyuaaawmk:
        $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $wwgucssaecqekuek, $aqykuigiuwmmcieu);
        goto acqoqwucmyoyyyiq;
        ykuwccukqeycqccg:
    }
}

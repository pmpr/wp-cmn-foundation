<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        return self::uuccukgasskgimsq("\144\151\166", ["\143\x6c\x61\163\163" => "\x64\55\146\x6c\145\x78\x20\152\x75\x73\x74\x69\x66\x79\x2d\143\157\x6e\164\x65\156\164\x2d\x73\164\141\162\164"], ["\45\62\44\163", self::uuccukgasskgimsq("\163\155\x61\x6c\154", ["\x63\x6c\x61\163\163" => "\146\x6f\x6e\164\x2d\61\x33\40\155\x79\55\x61\165\164\x6f\40\x6d\154\x2d\x32"], "\x25\61\44\163")]);
    }
    
    public static function skyucqyswomguscg($uomewyckeuqoqocu)
    {
        goto kyecumuyuyygkoou;
        gssggekuuyieykma:
        goto ausgcikksecieweq;
        goto ussaosamaumyaucq;
        ussaosamaumyaucq:
        emiocgskkaieaygu:
        goto sqmsyiusquicscmk;
        goikkusagcqiueia:
        return esc_attr($aqykuigiuwmmcieu);
        goto ekumceoygmcomees;
        kyecumuyuyygkoou:
        if (is_array($uomewyckeuqoqocu)) {
            goto coyaogkqscweiqwk;
        }
        goto eewyeiukoacqwemo;
        ioequayqasmcmsyw:
        goto iaiwayowckokiyiy;
        goto aygsaywukmgmmmga;
        qiayaasuoqeekmeo:
        if (ManipulateArray::gogeqwskoiiaocoe($uomewyckeuqoqocu)) {
            goto emiocgskkaieaygu;
        }
        goto owyskyccqsykiakm;
        sqmsyiusquicscmk:
        $aqykuigiuwmmcieu = json_encode($uomewyckeuqoqocu);
        goto iugwomcaqisasuky;
        owyskyccqsykiakm:
        $aqykuigiuwmmcieu = implode("\40", $uomewyckeuqoqocu);
        goto gssggekuuyieykma;
        eewyeiukoacqwemo:
        $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
        goto ioequayqasmcmsyw;
        iugwomcaqisasuky:
        ausgcikksecieweq:
        goto aceymkkwuiwokgqa;
        aygsaywukmgmmmga:
        coyaogkqscweiqwk:
        goto qiayaasuoqeekmeo;
        aceymkkwuiwokgqa:
        iaiwayowckokiyiy:
        goto goikkusagcqiueia;
        ekumceoygmcomees:
    }
    
    public static function aoyseswaaaugicuq($uomewyckeuqoqocu, $oswgusmmccauqika = "\x22") : ?string
    {
        goto qymqsuuewomqcaeo;
        aykcawmeuucgmwea:
        foreach ($uomewyckeuqoqocu as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) {
            goto skwaemgcggqqakyk;
            ssiskmwmkioiekyc:
            csaagucuusgmywum:
            goto wkcoeuicokyouscs;
            iysgqwiceiuegqmm:
            soiyeoosqoccwgok:
            goto cyawyoyeemeumigc;
            gycossqqauwkeusa:
            wumysioiwaowecwu:
            goto oskcyycaeyocgkmk;
            skwaemgcggqqakyk:
            $eqgoocgaqwqcimie = self::skyucqyswomguscg($eqgoocgaqwqcimie);
            goto ukqksoomoiqkqeuy;
            gygiwsukqcagwaag:
            ywmuaqcsgamygwmc:
            goto mqseemqskkccscao;
            ywqeggecuccqewii:
            goto kaasmkwkyekaqmao;
            goto gygiwsukqcagwaag;
            ukqksoomoiqkqeuy:
            if (preg_replace("\x2f\x5c\x73\x2b\x2f", '', $eqgoocgaqwqcimie)) {
                goto ywmuaqcsgamygwmc;
            }
            goto okkckkmewkiysyeg;
            uckisgqukuaiesow:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x3d{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\40";
            goto kiuosoowseuwkues;
            oskcyycaeyocgkmk:
            $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40";
            goto ssiskmwmkioiekyc;
            wkcoeuicokyouscs:
            kaasmkwkyekaqmao:
            goto iysgqwiceiuegqmm;
            mqseemqskkccscao:
            if (is_numeric($ymqmyyeuycgmigyo)) {
                goto wumysioiwaowecwu;
            }
            goto uckisgqukuaiesow;
            kiuosoowseuwkues:
            goto csaagucuusgmywum;
            goto gycossqqauwkeusa;
            okkckkmewkiysyeg:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x20";
            goto ywqeggecuccqewii;
            cyawyoyeemeumigc:
        }
        goto iqegieggskwqccou;
        euaoayywcugwiqcs:
        if (!is_array($uomewyckeuqoqocu)) {
            goto sigkaiakeykkoqsu;
        }
        goto aykcawmeuucgmwea;
        qymqsuuewomqcaeo:
        $aqykuigiuwmmcieu = '';
        goto euaoayywcugwiqcs;
        swmmycgkeqaeswwq:
        sigkaiakeykkoqsu:
        goto wuqwcogkmmqscwce;
        iqegieggskwqccou:
        amseqymsmoukemqc:
        goto swmmycgkeqaeswwq;
        wuqwcogkmmqscwce:
        return rtrim($aqykuigiuwmmcieu, "\40");
        goto umgqoisouauoeigc;
        umgqoisouauoeigc:
    }
    
    public static function kqmkicmuscsgqeoi($ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii[self::ICON] = ManipulateArray::get($ywmkwiwkosakssii, self::ICON, IconFontawesomeInterface::ICON_SPINNER_THIRD);
        return Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::SPINNER_TEMPLATE_PATH, $ywmkwiwkosakssii);
    }
    
    public static function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array
    {
        goto sogiywcegssacgsu;
        kscyscauewimmgme:
        yoqmmikkokomsacw:
        goto ooqikkgwocykeiuu;
        uiiyokqogawyeiec:
        wguiigwuqauaaoeu:
        goto ooimgcqywgokcika;
        ooimgcqywgokcika:
        $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk);
        goto kscyscauewimmgme;
        ooqikkgwocykeiuu:
        return $sysgmomuyiiawwcm;
        goto gouysqqakyeugcyq;
        paawyasioggcocqk:
        foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) {
            goto ymikiweaoykkcyiw;
            ymikiweaoykkcyiw:
            if (!isset($gcegymooyemmaysk[$uusmaiomayssaecw])) {
                goto wgiegisukosmmeak;
            }
            goto aqqsoockoussgmqg;
            seasawiyoeiuucac:
            unset($gcegymooyemmaysk[$uusmaiomayssaecw]);
            goto kkgceegequyiasgs;
            omgieamuywawmkgc:
            qecuwsgaqewyysai:
            goto siymueswymqkwekm;
            kkgceegequyiasgs:
            wgiegisukosmmeak:
            goto omgieamuywawmkgc;
            aqqsoockoussgmqg:
            $sysgmomuyiiawwcm[$uusmaiomayssaecw] = self::igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee);
            goto seasawiyoeiuucac;
            siymueswymqkwekm:
        }
        goto uiiyokqogawyeiec;
        sogiywcegssacgsu:
        if (!$gcegymooyemmaysk) {
            goto yoqmmikkokomsacw;
        }
        goto paawyasioggcocqk;
        gouysqqakyeugcyq:
    }
    
    public static function cmsgeysmsqqogeki($uomewyckeuqoqocu, $yygmoeguaqyumuui)
    {
        goto eacgwgwwwaeoeeee;
        uiqemmagesmiamcu:
        return $uomewyckeuqoqocu;
        goto omokwaassiaqugwi;
        eacgwgwwwaeoeeee:
        foreach ($yygmoeguaqyumuui as $msqkueqksqwmskak => $uwomkgseoiegeume) {
            goto msioicqugygwksci;
            scqeiomoywugwmgm:
            aooqissygemgsigy:
            goto ieyqwwmaaeigusck;
            sssossmaugysoosg:
            ManipulateArray::unset($uomewyckeuqoqocu, $msqkueqksqwmskak);
            goto scqeiomoywugwmgm;
            wkimauiikcmicukk:
            $uomewyckeuqoqocu[$uwomkgseoiegeume] = $uomewyckeuqoqocu[$msqkueqksqwmskak];
            goto sssossmaugysoosg;
            ieyqwwmaaeigusck:
            eksoacmagqswgeuq:
            goto icuiiyecyaosmkig;
            msioicqugygwksci:
            if (!isset($uomewyckeuqoqocu[$msqkueqksqwmskak])) {
                goto aooqissygemgsigy;
            }
            goto wkimauiikcmicukk;
            icuiiyecyaosmkig:
        }
        goto rkymcyiuygsasous;
        rkymcyiuygsasous:
        kyyeiymsouaoaiga:
        goto uiqemmagesmiamcu;
        omokwaassiaqugwi:
    }
    
    public static function gmqyuaqwgiayskei($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\160\141\x6e", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false, $qawsmigsyysqwmeq = false)
    {
        goto wikocscgqkqoeyag;
        wkkoyqmigawkyoww:
        return $nsmgceoqaqogqmuw;
        goto ukoqmmisagkuskku;
        uyeskyscwoaceaum:
        $wkaqekwwgqsqwcoi = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto yusiukmgiqcycoyw;
        wgsgyisoiwmyqgsy:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\151\143\157\x6e\x5f\x61\164\164\x72\x69\142\x75\x74\x65\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi);
        goto ossgegmcqmikiako;
        mmkyoekoacqmsiug:
        uwcmqocsckgoycos:
        goto wgsgyisoiwmyqgsy;
        ymskiasoemcgoywc:
        goto cossouqayakwquwq;
        goto oasooegcuaqyaksa;
        kakkcssaiwwuieig:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\163\x73", "\160\162\55\x69\x63\x6f\x6e");
        goto qgcaikicmyiaiqyo;
        uokesuqoiakammsq:
        $wkaqekwwgqsqwcoi = ManipulateAttachment::mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi);
        goto mqismiccqmeaacmm;
        eaoooeokgceokgym:
        if (!$wkaqekwwgqsqwcoi) {
            goto quakaiyiukaeoggu;
        }
        goto uygkaowwykyuwcms;
        mqismiccqmeaacmm:
        cossouqayakwquwq:
        goto mmkyoekoacqmsiug;
        aymaycgmskceqaoo:
        $wwgucssaecqekuek["\163\x72\143"] = $wkaqekwwgqsqwcoi;
        goto qmssemegysygmmig;
        yusiukmgiqcycoyw:
        ogywoqseeawwouuu:
        goto geoqmawmyksikoyk;
        wikocscgqkqoeyag:
        $nsmgceoqaqogqmuw = '';
        goto eaoooeokgceokgym;
        wyyumeauogsokwwy:
        quakaiyiukaeoggu:
        goto wkkoyqmigawkyoww;
        uygkaowwykyuwcms:
        if (ManipulateValidation::wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) {
            goto uwcmqocsckgoycos;
        }
        goto kakkcssaiwwuieig;
        yiqsyymaccyskgka:
        goto ogywoqseeawwouuu;
        goto icwmksqayogauieq;
        icwmksqayogauieq:
        eyoqguiuawqqmqsq:
        goto uyeskyscwoaceaum;
        oasooegcuaqyaksa:
        waakcieqeowcyces:
        goto uokesuqoiakammsq;
        geoqmawmyksikoyk:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\151\143\x6f\x6e\x5f\x68\164\155\154", $wkaqekwwgqsqwcoi);
        goto wyyumeauogsokwwy;
        qgcaikicmyiaiqyo:
        if (ManipulateAttachment::aauyuieeeaakygki($wkaqekwwgqsqwcoi)) {
            goto waakcieqeowcyces;
        }
        goto qucqsuqgimegkagu;
        qmssemegysygmmig:
        $wkaqekwwgqsqwcoi = self::uuccukgasskgimsq("\x69\155\147", $wwgucssaecqekuek);
        goto yiqsyymaccyskgka;
        qucqsuqgimegkagu:
        $wkaqekwwgqsqwcoi = Template::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc, $qawsmigsyysqwmeq);
        goto ymskiasoemcgoywc;
        ossgegmcqmikiako:
        if ($gskuwmeemyeuwogc) {
            goto eyoqguiuawqqmqsq;
        }
        goto aymaycgmskceqaoo;
        ukoqmmisagkuskku:
    }
    
    public static function ciuuiyckmsygceis($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\x74\162\157\156\x67", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function icqkogwskuwscskk($ywmkwiwkosakssii = [], $gskauacumcmekigs = []) : string
    {
        goto acmqcaimwssoqwcu;
        ecqymkukooyucuao:
        mqwsuaogooqyusmg:
        goto memoemokqyckwuam;
        uykcwaomeewcauqm:
        return $nsmgceoqaqogqmuw;
        goto agkccauguemomgyi;
        wiggagegkomwsigy:
        $ewgwqamkygiqaawc = $meqocwsecsywiiqs;
        goto ecqymkukooyucuao;
        uweqegqcewaiwgeo:
        wgcuscwuwmiumqag:
        goto caosicamgweuouqy;
        ckawyuougmawuagq:
        $ewgwqamkygiqaawc = ManipulateArray::unset($gskauacumcmekigs, "\143\157\x6e\164\x65\x6e\164");
        goto cseosawememugocs;
        eckqwskioaqieuiw:
        $wwgucssaecqekuek["\x64\x61\164\141\x2d\155\x6f\x64\x61\x6c"] = ManipulateArray::get($qsqwqsymmqeoqwcu, "\160\162\145\146\151\x78", "\147\x65\x6e\145\x72\x61\x6c") . "\137\155\x6f\144\x61\x6c";
        goto gqckiowescyoycek;
        aoamgmomuauiaomq:
        _doing_it_wrong(__FUNCTION__, __("\x70\x6c\145\141\x73\x65\x20\163\160\145\143\151\146\x79\40\141\40\x70\x72\x65\146\x69\x78\40\x66\x6f\x72\40\x66\157\x72\40\x6d\x6f\144\x61\154", PR__CMN__FOUNDATION), 1);
        goto ykmomgoksisygqmi;
        gcogkoymaecaouei:
        if (ManipulateArray::get($qsqwqsymmqeoqwcu, "\x70\x72\x65\146\x69\170", '')) {
            goto ggakeykgaywwuico;
        }
        goto aoamgmomuauiaomq;
        omegwywwowgccqgc:
        $wwgucssaecqekuek = ManipulateArray::get($gskauacumcmekigs, "\141\x74\164\162\x73", []);
        goto uiwwomawycusiaqc;
        qsgqsgqoasquyegw:
        $kqywgoqsmuswammk = ManipulateArray::get($gskauacumcmekigs, "\x65\154\x65\x6d\145\x6e\164", "\x62\x75\164\x74\x6f\x6e");
        goto eckqwskioaqieuiw;
        eikgkciokyogmmae:
        if (!$gskauacumcmekigs) {
            goto akqqwkcyeiuguaee;
        }
        goto omegwywwowgccqgc;
        memoemokqyckwuam:
        $nsmgceoqaqogqmuw .= self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
        goto wqqayaqgqaokkewk;
        uiwwomawycusiaqc:
        $meqocwsecsywiiqs = ManipulateArray::get($gskauacumcmekigs, "\164\x69\164\x6c\x65");
        goto qsgqsgqoasquyegw;
        omcqkauyquamiwkw:
        $wwgucssaecqekuek["\150\x72\x65\x66"] = "\43";
        goto uweqegqcewaiwgeo;
        caosicamgweuouqy:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\163\x73", "\160\x72\55\x63\157\156\146\151\162\x6d\141\142\x6c\145\x2d\141\143\164\x69\x6f\156");
        goto ckawyuougmawuagq;
        cseosawememugocs:
        if ($ewgwqamkygiqaawc) {
            goto mqwsuaogooqyusmg;
        }
        goto wiggagegkomwsigy;
        kiwsouqmoaeuwcyi:
        $nsmgceoqaqogqmuw = Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::MODAL_TEMPLATE_PATH, $qsqwqsymmqeoqwcu);
        goto eikgkciokyogmmae;
        acmqcaimwssoqwcu:
        $qsqwqsymmqeoqwcu = ManipulateFormat::omaawkkwwyesqwcc(self::uskieqmcqyecigmy(array_merge($ywmkwiwkosakssii, ["\152\163\x6f\x6e" => false])), ["\166\151\x65\167" => "\144\151\x61\154\157\x67", "\x70\x72\145\x66\x69\x78" => "\x67\x65\156\x65\162\141\x6c", "\x73\160\x69\x6e\x6e\x65\x72" => false, "\143\x6c\157\x73\x65\137\164\151\x74\154\x65" => __("\103\154\x6f\163\x65", PR__CMN__FOUNDATION)]);
        goto gcogkoymaecaouei;
        wqqayaqgqaokkewk:
        akqqwkcyeiuguaee:
        goto uykcwaomeewcauqm;
        gqckiowescyoycek:
        if (!($kqywgoqsmuswammk == "\x61" && !ManipulateArray::get($wwgucssaecqekuek, "\x68\x72\x65\146", false))) {
            goto wgcuscwuwmiumqag;
        }
        goto omcqkauyquamiwkw;
        ykmomgoksisygqmi:
        ggakeykgaywwuico:
        goto kiwsouqmoaeuwcyi;
        agkccauguemomgyi:
    }
    
    public static function igmaewykumgwoaoy($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto wiuaoykkoqsqcciu;
        sskgwegakoyqqkku:
        yasaysggqceikmye:
        goto iauuciyimekqwsqe;
        ksmkyewagskkoeok:
        $wisgiwskwawciiee = $siquossayskcwkea;
        goto uasiqigosyqwisuq;
        wiuaoykkoqsqcciu:
        if (is_object($siquossayskcwkea) && $uusmaiomayssaecw) {
            goto gggawowkmoygokiu;
        }
        goto ewseyicyoqscoyic;
        gucssmauyukceoiu:
        goto yasaysggqceikmye;
        goto maqacaoweqmyiuua;
        qukgkymacqckmyoq:
        if (is_object($siquossayskcwkea)) {
            goto kmckgogusyyoyiia;
        }
        goto myogiyogisykoogo;
        sqgkwwsqomcqewuu:
        if (isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto uweweeiagegyukye;
        }
        goto eukmgmmseugskiio;
        mykcwaiwmsyaacog:
        qogkwuqcauywuqyy:
        goto cewwgkwqeuayygeq;
        qgeeemyaomggagku:
        if ($uusmaiomayssaecw) {
            goto sqkaggmqmkgwkimu;
        }
        goto ksmkyewagskkoeok;
        giyuysmwumkyayiq:
        goto iiosuiiicgmwuquu;
        goto gqwciegucimkisai;
        eiyeysucoukeiqii:
        if (isset($siquossayskcwkea->{$uusmaiomayssaecw})) {
            goto gcwekuwcsakcsyiu;
        }
        goto qyigcogcwakysqwo;
        ywigugwyqieqkcoe:
        return trim($siquossayskcwkea . "\x20" . (is_array($eqgoocgaqwqcimie) ? implode("\x20", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie));
        goto egeesoksqmwwsuoe;
        kgmwksacomoyiemk:
        iqkuskokswaoiosy:
        goto keeikoymoqwakmuc;
        qcgikckikqqwewqg:
        kmckgogusyyoyiia:
        goto aumekwowaoymcamo;
        qyigcogcwakysqwo:
        $wisgiwskwawciiee = '';
        goto gucssmauyukceoiu;
        ymmooquwukiemiuu:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto usgequsgggeskams;
        }
        goto iquuyccmwaqmeiwc;
        uawqemsmoegqwcys:
        yyeuoiccgweskqgw:
        goto ewoqemggggmuiicc;
        geigqkwcacssimqk:
        qwssywogokmegcwg:
        goto mykcwaiwmsyaacog;
        keeikoymoqwakmuc:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\40", $eqgoocgaqwqcimie));
        goto aeeygmyoycocsaow;
        eukmgmmseugskiio:
        $wisgiwskwawciiee = '';
        goto uuckosesigqwyykq;
        gqqsowqiouwisway:
        if (is_array($eqgoocgaqwqcimie)) {
            goto iqkuskokswaoiosy;
        }
        goto ymmooquwukiemiuu;
        mgqgsoaoauaoioku:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto esmwouucumeuaaiq;
        iquuyccmwaqmeiwc:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\40", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\x20" . $eqgoocgaqwqcimie);
        goto cyawmgceseyseywk;
        esmwouucumeuaaiq:
        ymiiiqccumeseqgg:
        goto geigqkwcacssimqk;
        uasiqigosyqwisuq:
        goto qwssywogokmegcwg;
        goto gaukmueogumwwwmi;
        uuckosesigqwyykq:
        goto ymiiiqccumeseqgg;
        goto ywcomywyegmgoiqc;
        cyawmgceseyseywk:
        usgequsgggeskams:
        goto wkmksaskwoeiqgqq;
        waeogmkyweaagquk:
        $siquossayskcwkea = $wisgiwskwawciiee;
        goto giyuysmwumkyayiq;
        egioqiaqgkcociok:
        if ($uusmaiomayssaecw) {
            goto wsyouakcyuwgsmmq;
        }
        goto waeogmkyweaagquk;
        mggmcgicyksgeoga:
        iiosuiiicgmwuquu:
        goto scimwiammysocuma;
        aumekwowaoymcamo:
        $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee;
        goto uawqemsmoegqwcys;
        gqwciegucimkisai:
        wsyouakcyuwgsmmq:
        goto ouokoaqgueuukoes;
        gaukmueogumwwwmi:
        sqkaggmqmkgwkimu:
        goto sqgkwwsqomcqewuu;
        yceuaweskqgkyccw:
        $wisgiwskwawciiee = $siquossayskcwkea->{$uusmaiomayssaecw};
        goto sskgwegakoyqqkku;
        aeeygmyoycocsaow:
        eaaaqmqycgcqiaee:
        goto qukgkymacqckmyoq;
        maqacaoweqmyiuua:
        gcwekuwcsakcsyiu:
        goto yceuaweskqgkyccw;
        egeesoksqmwwsuoe:
        goto qogkwuqcauywuqyy;
        goto mgcymqumaiwgmswy;
        myogiyogisykoogo:
        if (!is_array($siquossayskcwkea)) {
            goto guqgcsmiuskcawsy;
        }
        goto egioqiaqgkcociok;
        ewoqemggggmuiicc:
        return $siquossayskcwkea;
        goto kmoaiymaumccccmw;
        ewseyicyoqscoyic:
        if (is_array($siquossayskcwkea)) {
            goto ugsyacuawyeqcywk;
        }
        goto ywigugwyqieqkcoe;
        iauuciyimekqwsqe:
        ymuwsmqieegccmec:
        goto gqqsowqiouwisway;
        wkmksaskwoeiqgqq:
        goto eaaaqmqycgcqiaee;
        goto kgmwksacomoyiemk;
        myacgeqsygaaicsw:
        gggawowkmoygokiu:
        goto eiyeysucoukeiqii;
        cewwgkwqeuayygeq:
        goto ymuwsmqieegccmec;
        goto myacgeqsygaaicsw;
        scimwiammysocuma:
        guqgcsmiuskcawsy:
        goto museocscicoguyic;
        ywcomywyegmgoiqc:
        uweweeiagegyukye:
        goto mgqgsoaoauaoioku;
        mgcymqumaiwgmswy:
        ugsyacuawyeqcywk:
        goto qgeeemyaomggagku;
        ouokoaqgueuukoes:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto mggmcgicyksgeoga;
        museocscicoguyic:
        goto yyeuoiccgweskqgw;
        goto qcgikckikqqwewqg;
        kmoaiymaumccccmw:
    }
    
    public static function gusouagusgyoaeya($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x70", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function yekemqwyimcqgeuk($ewgwqamkygiqaawc, $ekasyoagocygouom, $wwgucssaecqekuek = []) : string
    {
        $wwgucssaecqekuek["\144\x61\x74\145\164\x69\x6d\145"] = $ekasyoagocygouom;
        return self::uuccukgasskgimsq("\164\151\155\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy = [], $wwgucssaecqekuek = []) : string
    {
        goto yougiukokiwueagg;
        scikcooocqiscwuk:
        $kakckmgscyiskome = '';
        goto wgqacmwcgiemyqsm;
        iewaqqoywiiueooc:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\164\x68\x65\141\144", [], $kakckmgscyiskome);
        goto eycywwwuywwiewae;
        xaoaqqukaokieeos:
        $ymoekaoqgqmmgoqk = '';
        goto oeegwqskokyysgia;
        sceiisuuogsqyaua:
        wasokaaaiesgoiwu:
        goto cgouooqwgiessagu;
        aqmyaskcyisumkec:
        $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk;
        goto sceiisuuogsqyaua;
        mqiuuuiuyieomgsm:
        quaqcuogeasmkwum:
        goto iewaqqoywiiueooc;
        yaowsqucwakaesoi:
        scgooimgesucqmyw:
        goto aqmyaskcyisumkec;
        wgqacmwcgiemyqsm:
        foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) {
            $kakckmgscyiskome .= self::uuccukgasskgimsq("\164\150", ["\144\141\x74\x61\x2d\153\145\171" => "\164\x68\55{$uusmaiomayssaecw}", "\143\x6c\141\163\x73" => "\164\x65\170\164\x2d\154\x65\146\x74"], $kmmmiumuegqmksky);
            qgigwkeaoogkycqq:
        }
        goto mqiuuuiuyieomgsm;
        mkuiaigaaiiusgcw:
        if (!is_array($essikcmqiyqaqoaq)) {
            goto wasokaaaiesgoiwu;
        }
        goto xaoaqqukaokieeos;
        eycywwwuywwiewae:
        ieamiiycguksgyae:
        goto mkuiaigaaiiusgcw;
        cgouooqwgiessagu:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\x74\x62\x6f\144\x79", [], $essikcmqiyqaqoaq);
        goto zkyyykgsamwwykec;
        zkyyykgsamwwykec:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\163\x73", "\164\x61\x62\154\145\40\x6d\55\x30");
        goto gmaokugqemkqaymu;
        oeegwqskokyysgia:
        foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) {
            goto cucwasiugcaiugkw;
            ssgusiykmcsmacke:
            foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) {
                goto kcuquqyuoqukkiae;
                kcuquqyuoqukkiae:
                if (!($uusmaiomayssaecw == "\x74\x72\x5f\x61\x74\x74\162\x73")) {
                    goto eyosqwqswsqcuekw;
                }
                goto mkmewusqskqwyiga;
                ykagosqgwoyewmsm:
                eyosqwqswsqcuekw:
                goto koeaocaigyiuouma;
                koeaocaigyiuouma:
                $ykaygkcscgyoiiae .= self::uuccukgasskgimsq("\x74\144", ["\x64\141\164\141\x2d\x6b\x65\x79" => "\x74\x64\55{$uusmaiomayssaecw}\55{$momcykaoccoymeig}"], $yycqiageqkquoioq);
                goto csuyiuccwoewwymw;
                mkmewusqskqwyiga:
                goto wykcswiwacwksyeo;
                goto ykagosqgwoyewmsm;
                csuyiuccwoewwymw:
                wykcswiwacwksyeo:
                goto ugcgciqmmuumiwss;
                ugcgciqmmuumiwss:
            }
            goto yseiyiawimkkgwgu;
            ayiuauyqkcycymiq:
            $ecuqamumceeoyiui = ManipulateArray::get($keuwuekioomqqaey, "\x74\162\x5f\x61\164\164\162\163", []);
            goto iykoiouoygaumuak;
            skiieiyqgwecickk:
            $ymoekaoqgqmmgoqk .= self::uuccukgasskgimsq("\164\x72", $ecuqamumceeoyiui, $ykaygkcscgyoiiae);
            goto gkqqeoyqwmaqweus;
            iykoiouoygaumuak:
            $ecuqamumceeoyiui["\x64\141\x74\141\x2d\x6b\145\x79"] = "\x74\x72\x2d{$momcykaoccoymeig}";
            goto skiieiyqgwecickk;
            cucwasiugcaiugkw:
            $ykaygkcscgyoiiae = '';
            goto ssgusiykmcsmacke;
            yseiyiawimkkgwgu:
            ycgeiokgsmiwocco:
            goto ayiuauyqkcycymiq;
            gkqqeoyqwmaqweus:
            ckyaekugwcaaogua:
            goto ocmaakqeqigyqmcm;
            ocmaakqeqigyqmcm:
        }
        goto yaowsqucwakaesoi;
        gmaokugqemkqaymu:
        return self::uuccukgasskgimsq("\164\x61\142\x6c\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
        goto camisusksgocgiyu;
        esouewuuwooociii:
        if (!$uykgysuswksgmwqy) {
            goto ieamiiycguksgyae;
        }
        goto scikcooocqiscwuk;
        yougiukokiwueagg:
        $ewgwqamkygiqaawc = '';
        goto esouewuuwooociii;
        camisusksgocgiyu:
    }
    
    public static function sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $mogykyiukkoqceec = 6) : string
    {
        goto egwsiqoumyssgaiw;
        egwsiqoumyssgaiw:
        if (!is_array($qgqgaykggoemycsk)) {
            goto kyqgyywuaqkskkmq;
        }
        goto gecomumkgckmoicc;
        cqouisksowcqsqga:
        $giwamsoicooomueg = '';
        goto isawcgqqwuaucgga;
        asweayesceakosic:
        ecqkiigukgcscequ:
        goto iaaigscysuqkassk;
        iaaigscysuqkassk:
        return rtrim($giwamsoicooomueg);
        goto wqsueawiwmaymyye;
        isawcgqqwuaucgga:
        if (!$qgqgaykggoemycsk) {
            goto ecqkiigukgcscequ;
        }
        goto yeucaeocmeokqggg;
        quiscsoaasusqsii:
        kyqgyywuaqkskkmq:
        goto cqouisksowcqsqga;
        qcsqqqkmmswawmqo:
        oeogicauwqmuckmc:
        goto asweayesceakosic;
        gecomumkgckmoicc:
        $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\151\x6e\144\145\x78", "\x6c\x65\x6e\x67\x74\150"]);
        goto quiscsoaasusqsii;
        owaoemsqwmcymegi:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto ayassegeqauesegc;
            aqgeqqeaykqsqqyy:
            mekuokossigwmiay:
            goto gkqcgyeqkcisqgck;
            mugcawkwqggykqkq:
            $giwamsoicooomueg .= "\x20\155\142{$gcgsqcoqciockquc}\x2d\60";
            goto aqgeqqeaykqsqqyy;
            qgoesugiyiiqgaka:
            ymqgkiswgyiwkiee:
            goto igwuuiisiiiacqog;
            icaoeusmweymiows:
            $gcgsqcoqciockquc = '';
            goto sayimokgekmuieyc;
            esgcqqwkiqagqcqu:
            $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi;
            goto csmmacecmeiqukou;
            cwsmeosaaeaamosg:
            $giwamsoicooomueg .= "\40\155\142{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}";
            goto wowqwsgksqqqmucw;
            akwwymwisyauswko:
            $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi;
            goto auqmkwoggqyaskcq;
            csmmacecmeiqukou:
            $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length;
            goto auamqueygsmcgeua;
            diqmggkiascwcmgo:
            mmocggcuysgcayqs:
            goto esgcqqwkiqagqcqu;
            sayimokgekmuieyc:
            if ($gaeqamemwmwsyukm == 1) {
                goto ymqgkiswgyiwkiee;
            }
            goto awyisykkykwugmcs;
            awyisykkykwugmcs:
            if (!($gaeqamemwmwsyukm == 2)) {
                goto wcqmkqkoekwggcaq;
            }
            goto euqwyueoiyaciwmu;
            mmkeguscoeyqgsaq:
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1];
            goto woemqeiusiyyycao;
            caykkyawcquykaig:
            cykquwwqoyuqacka:
            goto qigqugqceqksaoaq;
            auqmkwoggqyaskcq:
            ugsucquekakgyyoe:
            goto ugyquwcqwgkykyom;
            wowqwsgksqqqmucw:
            goto mekuokossigwmiay;
            goto oqwqqsiygukqweey;
            ayassegeqauesegc:
            $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi);
            goto ykeywoiececiccqk;
            ugyquwcqwgkykyom:
            if (!$gcgsqcoqciockquc) {
                goto cykquwwqoyuqacka;
            }
            goto kosquscyqqgygykc;
            auamqueygsmcgeua:
            $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi;
            goto smueyuiwaswcmmyq;
            kosquscyqqgygykc:
            $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}";
            goto caykkyawcquykaig;
            qigqugqceqksaoaq:
            if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) {
                goto ykywwwymygscykam;
            }
            goto cwsmeosaaeaamosg;
            ykeywoiececiccqk:
            $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie);
            goto icaoeusmweymiows;
            smueyuiwaswcmmyq:
            if (!($aoqagsqecokqqwqg == $ykiwomimkkuiigoq)) {
                goto ugsucquekakgyyoe;
            }
            goto akwwymwisyauswko;
            gkqcgyeqkcisqgck:
            ggcqsikuoaowocia:
            goto uoioeqiqmewckqwq;
            woemqeiusiyyycao:
            wcqmkqkoekwggcaq:
            goto wecqeaiwiowwougo;
            oqwqqsiygukqweey:
            ykywwwymygscykam:
            goto mugcawkwqggykqkq;
            euqwyueoiyaciwmu:
            
            $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0];
            goto mmkeguscoeyqgsaq;
            igwuuiisiiiacqog:
            
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0];
            goto diqmggkiascwcmgo;
            wecqeaiwiowwougo:
            goto mmocggcuysgcayqs;
            goto qgoesugiyiiqgaka;
            uoioeqiqmewckqwq:
        }
        goto qcsqqqkmmswawmqo;
        yeucaeocmeokqggg:
        $wkkweuacukumqmya = array_filter(explode("\x63\x6f\154\55", $qgoqiacsiccwoawi));
        goto owaoemsqwmcymegi;
        wqsueawiwmaymyye:
    }
    
    public static function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto miowwquwweeycgyu;
        uqyqusgiassqqgso:
        if (is_string($siquossayskcwkea)) {
            goto doykmuigywoqqiso;
        }
        goto emgcuckeyeakwoww;
        oimimqggwmcwcayu:
        ieeoomsoskweuome:
        goto umioqieqqagmckwg;
        wwwmsesaeqsooeso:
        goto gmqmassuiycwosek;
        goto kgmmymowamcgesku;
        uocgaiiuusguaayy:
        $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea));
        goto msyquusciakoksug;
        iewukqcakeoaogea:
        uckskmkusokoegaw:
        goto uquiseikicyaaaka;
        uquiseikicyaaaka:
        wqwuwausogwsuqqc:
        goto kemgeqwcacseqmgu;
        qeuewcmsumowussm:
        wakcyckyeemwoqgk:
        goto cycuoasiccouwyqw;
        mskqaiwsecmeksgy:
        qikugkuomgekwawu:
        goto mmewqwgucqqooauq;
        eiceowycmoycqkuk:
        unset($wisgiwskwawciiee[$ccamueccusigaaio]);
        goto oimimqggwmcwcayu;
        kemgeqwcacseqmgu:
        woeogayusoaoawio:
        goto wwwmsesaeqsooeso;
        msyquusciakoksug:
        gmqmassuiycwosek:
        goto ywacykwawisgmguq;
        kgmmymowamcgesku:
        doykmuigywoqqiso:
        goto uocgaiiuusguaayy;
        asuaoeiwuqaugwaa:
        $wisgiwskwawciiee = explode("\x20", $wisgiwskwawciiee);
        goto mesgcyiaogasqowm;
        oucesaewqyuwiiqg:
        if (!in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee)) {
            goto uckskmkusokoegaw;
        }
        goto gmugaowewyiyooea;
        mmewqwgucqqooauq:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto iewukqcakeoaogea;
        emgcuckeyeakwoww:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto woeogayusoaoawio;
        }
        goto ucyecesyqmiackww;
        umioqieqqagmckwg:
        if (!$ukwmeuiywasikwcu) {
            goto qikugkuomgekwawu;
        }
        goto caeamkmmgyasuywc;
        ywacykwawisgmguq:
        return $siquossayskcwkea;
        goto qakuswcwwswiesyi;
        cycuoasiccouwyqw:
        if (!is_array($wisgiwskwawciiee)) {
            goto wqwuwausogwsuqqc;
        }
        goto oucesaewqyuwiiqg;
        mesgcyiaogasqowm:
        $ukwmeuiywasikwcu = true;
        goto qeuewcmsumowussm;
        gmugaowewyiyooea:
        if (!(($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee)) !== false)) {
            goto ieeoomsoskweuome;
        }
        goto eiceowycmoycqkuk;
        ucyecesyqmiackww:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto igmqymyemckoaqgi;
        miowwquwweeycgyu:
        $ukwmeuiywasikwcu = false;
        goto uqyqusgiassqqgso;
        igmqymyemckoaqgi:
        if (!is_string($wisgiwskwawciiee)) {
            goto wakcyckyeemwoqgk;
        }
        goto asuaoeiwuqaugwaa;
        caeamkmmgyasuywc:
        $wisgiwskwawciiee = implode("\x20", $wisgiwskwawciiee);
        goto mskqaiwsecmeksgy;
        qakuswcwwswiesyi:
    }
    
    public static function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $siquossayskcwkea;
    }
    
    public static function wouimaqqweceiamk($iwamiguusayooguq, $wkaqekwwgqsqwcoi = '') : string
    {
        goto syucwaiqcwoigmyi;
        syucwaiqcwoigmyi:
        $iwamiguusayooguq = self::qgsekwygcgawekeq("\163\160\141\156", ["\x63\x6c\141\x73\x73" => "\155\171\x2d\141\x75\164\x6f"], true, $iwamiguusayooguq);
        goto qomksaimmayiiiwk;
        uessyqkuysyoaqwm:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\163", "\155\x79\55\141\165\164\157\x20\151\143\x6f\156\x2d\163\x6d\x20\x6d\162\x2d\62");
        goto zseoycemqgkocuoy;
        swmckgcuukkqqckq:
        iscaiaaawwcwwaqe:
        goto qieaauqeoyssiwei;
        sqikqgygycksuyoa:
        $wwgucssaecqekuek = ManipulateArray::get($wkaqekwwgqsqwcoi, "\141\164\164\x72\x73", []);
        goto oqiwsqaskogasows;
        zseoycemqgkocuoy:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true);
        goto swmckgcuukkqqckq;
        swoccyieyiyocaai:
        if (!is_array($wkaqekwwgqsqwcoi)) {
            goto iyqqogayqsmeocus;
        }
        goto sqikqgygycksuyoa;
        mkikkgwwyiemokme:
        $wwgucssaecqekuek = [];
        goto swoccyieyiyocaai;
        qomksaimmayiiiwk:
        if (!$wkaqekwwgqsqwcoi) {
            goto iscaiaaawwcwwaqe;
        }
        goto mkikkgwwyiemokme;
        qieaauqeoyssiwei:
        return self::qgsekwygcgawekeq("\144\151\166", ["\143\154\x61\x73\163" => "\160\x72\x2d\x6d\x6f\144\141\154\x2d\x67\x75\x69\144\x65\40\x64\x2d\x66\154\x65\170"], true, $wkaqekwwgqsqwcoi . $iwamiguusayooguq);
        goto aesqmgsmqugcmwsu;
        oqiwsqaskogasows:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($wkaqekwwgqsqwcoi, "\151\x63\157\x6e", '');
        goto emuussqoawouymue;
        emuussqoawouymue:
        iyqqogayqsmeocus:
        goto uessyqkuysyoaqwm;
        aesqmgsmqugcmwsu:
    }
    
    public static function ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw, $iqaosyayeiuaisqi = false) : string
    {
        goto swugymmweuogwusw;
        yuceksygooykweoy:
        $suuagcecoyuweoqk = '';
        goto oeecmqccguiykkqm;
        iowuiukuyewqkkae:
        iuaagccgiiyoewqi:
        goto cewmkewqmueeeyyc;
        cewmkewqmueeeyyc:
        return $uamcoiueqaamsqma;
        goto eaeogyomscegkayw;
        qigywyiuuemsacoe:
        if (!is_string($uamcoiueqaamsqma)) {
            goto iuaagccgiiyoewqi;
        }
        goto csosomiukogmmcme;
        csosomiukogmmcme:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\x64\151\166", ["\x63\154\x61\x73\x73" => "\164\x65\x78\x74\55\143\x65\156\x74\145\162\40\155\x6f\x64\141\154\55\155\x65\163\x73\141\147\145\x20\x6d\x6f\x64\141\x6c\x2d\x6d\145\x73\x73\141\x67\145\x2d" . ($iqaosyayeiuaisqi ? $iqaosyayeiuaisqi : ($occymigcemkqucuw ? "\x73\x75\143\x63\x65\x73\x73" : "\x64\141\156\x67\145\162"))], $uamcoiueqaamsqma);
        goto iowuiukuyewqkkae;
        owmgcskcyawsqskm:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\x75\154", [], $suuagcecoyuweoqk);
        goto woyasoooseaaaaio;
        woyasoooseaaaaio:
        wgggekucgkaiksaw:
        goto qigywyiuuemsacoe;
        oeecmqccguiykkqm:
        foreach ($uamcoiueqaamsqma as $yaakimaumwqiaeei) {
            $suuagcecoyuweoqk .= self::uuccukgasskgimsq("\154\151", [], $yaakimaumwqiaeei);
            csmkgqiuimmymqaw:
        }
        goto kwqswmuukaymcqoq;
        swugymmweuogwusw:
        if (!is_array($uamcoiueqaamsqma)) {
            goto wgggekucgkaiksaw;
        }
        goto yuceksygooykweoy;
        kwqswmuukaymcqoq:
        gewmecseymwsqeaw:
        goto owmgcskcyawsqskm;
        eaeogyomscegkayw:
    }
    
    public static function uskieqmcqyecigmy($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\142\x75\164\x74\x6f\156")
    {
        goto ogcsckmescouyqmc;
        siqiwagoqooemoaw:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto yumcwyyykaumkeau;
            yumcwyyykaumkeau:
            if (!is_array($gskauacumcmekigs)) {
                goto woasacgcwusiuimk;
            }
            goto sociuakymqqoqscu;
            sociuakymqqoqscu:
            if (!ManipulateArray::get($gskauacumcmekigs, "\144\x69\x73\155\151\x73\163", false)) {
                goto eoigcqiakssieeau;
            }
            goto muuekeyeccsssuow;
            escogkseqmmsucuy:
            $geecqyososceumsk = ManipulateArray::get($gskauacumcmekigs, "\x68\x72\145\146");
            goto agckiaesekmciuyw;
            muuekeyeccsssuow:
            $gskauacumcmekigs[] = "\x64\x61\x74\141\55\x6d\x69\x63\x72\157\155\157\144\x61\x6c\55\143\154\x6f\x73\145";
            goto gqiuksowisyaqsgs;
            qgsyukssiqqqyqky:
            goto owecwquwkacmmwsm;
            goto eecmomwqeicciqok;
            qimocyquekymmiuk:
            $scwiymciagumsuiw = "\x61";
            goto wogokussyamayesu;
            cocigaqusqewkiuy:
            if ($geecqyososceumsk) {
                goto auiissiemumqmkwa;
            }
            goto amuouaaiumwgawui;
            vaaikkcmqgsiwkum:
            msmmauiswokuyasc:
            goto uwecaymwqkkicime;
            agckiaesekmciuyw:
            $gskauacumcmekigs = self::igmaewykumgwoaoy($gskauacumcmekigs, "\143\154\x61\163\x73", "\x70\x78\55\65");
            goto cocigaqusqewkiuy;
            amuouaaiumwgawui:
            $scwiymciagumsuiw = $kqywgoqsmuswammk;
            goto qgsyukssiqqqyqky;
            wogokussyamayesu:
            owecwquwkacmmwsm:
            goto gcukuckckaiewegs;
            gqiuksowisyaqsgs:
            eoigcqiakssieeau:
            goto escogkseqmmsucuy;
            eecmomwqeicciqok:
            auiissiemumqmkwa:
            goto qimocyquekymmiuk;
            gcukuckckaiewegs:
            $qyukicweqoisimwg[$momcykaoccoymeig] = self::qgsekwygcgawekeq($scwiymciagumsuiw, $gskauacumcmekigs, true, ManipulateArray::get($gskauacumcmekigs, "\x74\x69\164\x6c\x65"));
            goto oquqawmmasaicyua;
            oquqawmmasaicyua:
            woasacgcwusiuimk:
            goto vaaikkcmqgsiwkum;
            uwecaymwqkkicime:
        }
        goto yaugumwgommeyeii;
        sggquugugsmuiwwe:
        ogasoacwwskwkuwo:
        goto uoysyuggmqqmcekw;
        gomaeoikykwymgwc:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, $smgooosyoeqwcaeg);
        goto sggquugugsmuiwwe;
        gcoakgwgoisggsma:
        iewaoiacicouqcmy:
        goto siqiwagoqooemoaw;
        swyesueumaokiieq:
        if (!($smgooosyoeqwcaeg = ManipulateArray::get($ywmkwiwkosakssii, "\x6a\x73\157\156"))) {
            goto ogasoacwwskwkuwo;
        }
        goto gomaeoikykwymgwc;
        ogcsckmescouyqmc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\171\160\x65" => "\x69\156\x66\x6f", "\152\163\157\x6e" => JSON_UNESCAPED_SLASHES, "\163\151\172\x65" => "\x6d\x64", "\x74\x69\164\x6c\145" => __("\x41\x6c\x65\x72\x74", PR__CMN__FOUNDATION), "\x63\x6f\x6e\164\145\x6e\164" => '', "\142\x75\x74\164\157\x6e\163" => []]);
        goto oogioucuccasmyak;
        kaiusyuqauywqwii:
        if (!$qyukicweqoisimwg) {
            goto skuskikumqguccee;
        }
        goto iacqiaeyscguwyia;
        sigasyakmuoqkmmk:
        $qyukicweqoisimwg[array_search("\x63\141\156\x63\145\x6c", $qyukicweqoisimwg)] = ["\143\x6c\x61\x73\x73" => "\x62\x74\156\x20\x62\164\x6e\x2d\157\x75\x74\x6c\151\156\145\55\x70\x72\151\155\x61\162\171", "\x74\151\164\154\x65" => __("\103\x61\x6e\143\x65\154", PR__CMN__FOUNDATION), "\144\151\163\x6d\151\x73\163" => true];
        goto gcoakgwgoisggsma;
        iacqiaeyscguwyia:
        if (!in_array("\143\141\x6e\143\x65\x6c", $qyukicweqoisimwg)) {
            goto iewaoiacicouqcmy;
        }
        goto sigasyakmuoqkmmk;
        oogioucuccasmyak:
        $qyukicweqoisimwg = ManipulateArray::get($ywmkwiwkosakssii, "\142\165\164\x74\x6f\156\x73", []);
        goto kaiusyuqauywqwii;
        yaugumwgommeyeii:
        cswywwkcqekmigki:
        goto esqwuigiwqkiwwea;
        uoysyuggmqqmcekw:
        return $ywmkwiwkosakssii;
        goto uqgskaesqkwyiyws;
        esqwuigiwqkiwwea:
        $ywmkwiwkosakssii["\142\x75\x74\x74\x6f\x6e\163"] = $qyukicweqoisimwg;
        goto akaqcyoimeoumcim;
        akaqcyoimeoumcim:
        skuskikumqguccee:
        goto swyesueumaokiieq;
        uqgskaesqkwyiyws:
    }
    
    public static function sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '')
    {
        echo self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
    }
    
    public static function wegccueewucwyaew($ywmkwiwkosakssii = [])
    {
        goto sesoweewqkwcymwu;
        sqwciumeqyaccyau:
        mgosoyoeuiqwiwmk:
        goto qmqaskwucyouocqk;
        yciamiooeekkmayo:
        if (!$ewgwqamkygiqaawc) {
            goto ssikoeweoiwuqqoe;
        }
        goto isaickqmmmkeicgo;
        ksguecmqmcsogyig:
        return $ewgwqamkygiqaawc;
        goto uewwowiwgoyesikg;
        sesoweewqkwcymwu:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x68\x61\x73\137\142\x6f\x64\171" => true, self::ICON => '', self::TITLE => '', self::ATTRS => [], self::CONTENT => '']);
        goto ukmewkukokeqigos;
        qcgascowuioocwig:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\x68\62", ["\143\154\141\163\163" => "\x6d\x2d\x30"], $meqocwsecsywiiqs);
        goto wawaocswoauwmmus;
        isaickqmmmkeicgo:
        if (!$ywmkwiwkosakssii["\150\141\x73\x5f\142\x6f\144\171"]) {
            goto mgosoyoeuiqwiwmk;
        }
        goto owukqqsugwsyyueu;
        igwoiimkmmmscuoi:
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        goto okswmkyoomseaueq;
        cuyucakmwasgeaew:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\144\151\166", $wwgucssaecqekuek, [$meqocwsecsywiiqs, $ewgwqamkygiqaawc]);
        goto kayosmeqqkicimqa;
        ukmewkukokeqigos:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        goto mcswsycyyuouesmw;
        uuucmcsegiwmgqyk:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\x64\151\x76", ["\143\154\x61\x73\163" => "\x63\141\x72\x64\x2d\x68\145\x61\x64\145\x72"], self::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi));
        goto qcgascowuioocwig;
        qmqaskwucyouocqk:
        if (!$meqocwsecsywiiqs) {
            goto iumsyyqaikswuqic;
        }
        goto uuucmcsegiwmgqyk;
        kayosmeqqkicimqa:
        ssikoeweoiwuqqoe:
        goto ksguecmqmcsogyig;
        mcswsycyyuouesmw:
        $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, self::ATTRS);
        goto igwoiimkmmmscuoi;
        suqmqyegkqmyqmok:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\x73\163", "\160\162\x2d\143\141\162\144\40\143\141\162\144");
        goto cuyucakmwasgeaew;
        wawaocswoauwmmus:
        iumsyyqaikswuqic:
        goto suqmqyegkqmyqmok;
        okswmkyoomseaueq:
        $ewgwqamkygiqaawc = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT);
        goto yciamiooeekkmayo;
        owukqqsugwsyyueu:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\144\151\x76", ["\143\x6c\141\x73\163" => "\143\x61\x72\x64\55\142\157\144\171"], $ewgwqamkygiqaawc);
        goto sqwciumeqyaccyau;
        uewwowiwgoyesikg:
    }
    
    public static function smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false)
    {
        goto gaesmekmwiaksqsm;
        ckqmyeycucqcugaq:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi . $meqocwsecsywiiqs);
        goto yyqqwqqueqsmwuek;
        maaaegyeiiecykkk:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\x63\154\141\x73\163" => "\x6d\154\x2d\x32"]);
        goto ckqmyeycucqcugaq;
        aqgwciseuyqyomme:
        return $meqocwsecsywiiqs;
        goto syoegaiagasioioi;
        ikewqccciwsqcamq:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        goto maaaegyeiiecykkk;
        gaesmekmwiaksqsm:
        if (!$wkaqekwwgqsqwcoi) {
            goto goegcwmuuaiokimo;
        }
        goto ikewqccciwsqcamq;
        yyqqwqqueqsmwuek:
        goegcwmuuaiokimo:
        goto aqgwciseuyqyomme;
        syoegaiagasioioi:
    }
    
    public static function oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, $wwgucssaecqekuek = [], $wygwqsssewkqooqm = true) : string
    {
        goto iueeimyiyygkcuke;
        eosyseigsygisgay:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\x61\163\x73", $egkyssmuqcwaciya);
        goto yuaussgmgweicywq;
        iueeimyiyygkcuke:
        $egkyssmuqcwaciya = "\156\x6f\x74\x69\x63\x65\40\156\x6f\164\x69\x63\x65\x2d{$iqaosyayeiuaisqi}";
        goto uesguqmcseqmcycc;
        qiaowiwiqqmegouc:
        kcwquqksumqqmccq:
        goto eosyseigsygisgay;
        qoouwuqgucsyyaii:
        $egkyssmuqcwaciya .= "\40\x69\163\x2d\144\151\163\155\x69\x73\x73\151\x62\154\x65";
        goto qiaowiwiqqmegouc;
        uesguqmcseqmcycc:
        if (!$wygwqsssewkqooqm) {
            goto kcwquqksumqqmccq;
        }
        goto qoouwuqgucsyyaii;
        yuaussgmgweicywq:
        return self::qgsekwygcgawekeq("\x64\151\166", $wwgucssaecqekuek, true, self::gusouagusgyoaeya($uamcoiueqaamsqma));
        goto qyauooaokskicoqw;
        qyauooaokskicoqw:
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
        goto miyguwmiomkywqwi;
        jwegkqgqigkyimwy:
        goto uwgewqagamkqykuc;
        goto coyqmiyssicuemqc;
        gemaacocysicmuis:
        $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $wwgucssaecqekuek, $aqykuigiuwmmcieu);
        goto isameaaesyeqewyw;
        kiegwkgkkmwoigue:
        uwgewqagamkqykuc:
        goto gemaacocysicmuis;
        ymiqqkqcasmeswai:
        $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc);
        goto kiegwkgkkmwoigue;
        aemkoeoaageqwmgm:
        if (!in_array($kqywgoqsmuswammk, ["\151\156\160\x75\164", "\x62\x72", "\150\x72", "\151\x6d\x67", "\x6c\151\x6e\x6b"])) {
            goto cywceaauueswisma;
        }
        goto wcukoowiwmgeqmck;
        coyqmiyssicuemqc:
        cueqqguumyoieuqi:
        goto ymiqqkqcasmeswai;
        qmeiewyqewgycomy:
        return $aqykuigiuwmmcieu;
        goto koiouyakeqieqaug;
        wcukoowiwmgeqmck:
        $ggkaciewmeqmgckg = "\74\x25\x73\40\x25\163\57\76";
        goto cuuuygiqqiausmsg;
        oawacyogaucwgeqa:
        $aqykuigiuwmmcieu = sprintf("\x25\x73\74\57\45\163\76", $aqykuigiuwmmcieu, $kqywgoqsmuswammk);
        goto wmoueywscoykgego;
        isameaaesyeqewyw:
        if (!$muiegiugiocacqkm) {
            goto wmymgosowycieomq;
        }
        goto oawacyogaucwgeqa;
        miyguwmiomkywqwi:
        $wwgucssaecqekuek = self::aoyseswaaaugicuq($wwgucssaecqekuek);
        goto iouaimmmokqaicae;
        cuuuygiqqiausmsg:
        $muiegiugiocacqkm = false;
        goto eousywekqyqmkigg;
        gyqwksoocmmwsmii:
        $aqykuigiuwmmcieu = $ewgwqamkygiqaawc;
        goto jwegkqgqigkyimwy;
        omgwcmaawwmwewuy:
        if (is_array($ewgwqamkygiqaawc)) {
            goto cueqqguumyoieuqi;
        }
        goto gyqwksoocmmwsmii;
        iouaimmmokqaicae:
        $ggkaciewmeqmgckg = "\x3c\x25\x73\x20\45\163\76\45\x73";
        goto aemkoeoaageqwmgm;
        wmoueywscoykgego:
        wmymgosowycieomq:
        goto qmeiewyqewgycomy;
        eousywekqyqmkigg:
        cywceaauueswisma:
        goto omgwcmaawwmwewuy;
        koiouyakeqieqaug:
    }
}

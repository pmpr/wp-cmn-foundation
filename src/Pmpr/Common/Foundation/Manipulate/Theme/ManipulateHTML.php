<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        return self::uuccukgasskgimsq("\x64\x69\x76", ["\143\154\x61\163\163" => "\144\x2d\x66\154\145\170\40\152\x75\163\x74\151\x66\171\x2d\143\x6f\156\164\x65\x6e\x74\x2d\x73\x74\x61\x72\164"], ["\45\62\44\x73", self::uuccukgasskgimsq("\x73\x6d\x61\x6c\154", ["\143\x6c\141\x73\x73" => "\x66\x6f\156\x74\55\x31\x33\x20\x6d\x79\x2d\x61\x75\x74\x6f\x20\155\x6c\55\62"], "\x25\61\44\163")]);
    }
    
    public static function skyucqyswomguscg($uomewyckeuqoqocu)
    {
        goto ausgcikksecieweq;
        owyskyccqsykiakm:
        $aqykuigiuwmmcieu = json_encode($uomewyckeuqoqocu);
        goto gssggekuuyieykma;
        ussaosamaumyaucq:
        emiocgskkaieaygu:
        goto sqmsyiusquicscmk;
        sqmsyiusquicscmk:
        return esc_attr($aqykuigiuwmmcieu);
        goto iugwomcaqisasuky;
        kyecumuyuyygkoou:
        syqumcoogeoweeys:
        goto eewyeiukoacqwemo;
        eewyeiukoacqwemo:
        if (ManipulateArray::gogeqwskoiiaocoe($uomewyckeuqoqocu)) {
            goto sgguweyyyiqmkakc;
        }
        goto ioequayqasmcmsyw;
        qiayaasuoqeekmeo:
        sgguweyyyiqmkakc:
        goto owyskyccqsykiakm;
        aygsaywukmgmmmga:
        goto cuqqecwymouycgau;
        goto qiayaasuoqeekmeo;
        ioequayqasmcmsyw:
        $aqykuigiuwmmcieu = implode("\40", $uomewyckeuqoqocu);
        goto aygsaywukmgmmmga;
        gssggekuuyieykma:
        cuqqecwymouycgau:
        goto ussaosamaumyaucq;
        iaiwayowckokiyiy:
        goto emiocgskkaieaygu;
        goto kyecumuyuyygkoou;
        ausgcikksecieweq:
        if (is_array($uomewyckeuqoqocu)) {
            goto syqumcoogeoweeys;
        }
        goto coyaogkqscweiqwk;
        coyaogkqscweiqwk:
        $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
        goto iaiwayowckokiyiy;
        iugwomcaqisasuky:
    }
    
    public static function aoyseswaaaugicuq($uomewyckeuqoqocu, $oswgusmmccauqika = "\42") : ?string
    {
        goto iysgqwiceiuegqmm;
        aykcawmeuucgmwea:
        return rtrim($aqykuigiuwmmcieu, "\x20");
        goto iqegieggskwqccou;
        iysgqwiceiuegqmm:
        $aqykuigiuwmmcieu = '';
        goto cyawyoyeemeumigc;
        sigkaiakeykkoqsu:
        foreach ($uomewyckeuqoqocu as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) {
            goto csaagucuusgmywum;
            ywqeggecuccqewii:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\75{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\x20";
            goto gygiwsukqcagwaag;
            oskcyycaeyocgkmk:
            goikkusagcqiueia:
            goto ssiskmwmkioiekyc;
            kiuosoowseuwkues:
            amseqymsmoukemqc:
            goto gycossqqauwkeusa;
            gygiwsukqcagwaag:
            goto amseqymsmoukemqc;
            goto mqseemqskkccscao;
            mqseemqskkccscao:
            ekumceoygmcomees:
            goto uckisgqukuaiesow;
            uckisgqukuaiesow:
            $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\x20";
            goto kiuosoowseuwkues;
            csaagucuusgmywum:
            $eqgoocgaqwqcimie = self::skyucqyswomguscg($eqgoocgaqwqcimie);
            goto ywmuaqcsgamygwmc;
            gycossqqauwkeusa:
            wumysioiwaowecwu:
            goto oskcyycaeyocgkmk;
            ukqksoomoiqkqeuy:
            soiyeoosqoccwgok:
            goto okkckkmewkiysyeg;
            ywmuaqcsgamygwmc:
            if (preg_replace("\x2f\x5c\x73\53\57", '', $eqgoocgaqwqcimie)) {
                goto soiyeoosqoccwgok;
            }
            goto kaasmkwkyekaqmao;
            kaasmkwkyekaqmao:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\40";
            goto skwaemgcggqqakyk;
            skwaemgcggqqakyk:
            goto wumysioiwaowecwu;
            goto ukqksoomoiqkqeuy;
            okkckkmewkiysyeg:
            if (is_numeric($ymqmyyeuycgmigyo)) {
                goto ekumceoygmcomees;
            }
            goto ywqeggecuccqewii;
            ssiskmwmkioiekyc:
        }
        goto qymqsuuewomqcaeo;
        qymqsuuewomqcaeo:
        aceymkkwuiwokgqa:
        goto euaoayywcugwiqcs;
        cyawyoyeemeumigc:
        if (!is_array($uomewyckeuqoqocu)) {
            goto wkcoeuicokyouscs;
        }
        goto sigkaiakeykkoqsu;
        euaoayywcugwiqcs:
        wkcoeuicokyouscs:
        goto aykcawmeuucgmwea;
        iqegieggskwqccou:
    }
    
    public static function kqmkicmuscsgqeoi($ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii[self::ICON] = ManipulateArray::get($ywmkwiwkosakssii, self::ICON, IconFontawesomeInterface::ICON_SPINNER_THIRD);
        return Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::SPINNER_TEMPLATE_PATH, $ywmkwiwkosakssii);
    }
    
    public static function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array
    {
        goto omgieamuywawmkgc;
        siymueswymqkwekm:
        foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) {
            goto wguiigwuqauaaoeu;
            wgiegisukosmmeak:
            unset($gcegymooyemmaysk[$uusmaiomayssaecw]);
            goto ymikiweaoykkcyiw;
            qecuwsgaqewyysai:
            $sysgmomuyiiawwcm[$uusmaiomayssaecw] = self::igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee);
            goto wgiegisukosmmeak;
            ymikiweaoykkcyiw:
            umgqoisouauoeigc:
            goto aqqsoockoussgmqg;
            wguiigwuqauaaoeu:
            if (!isset($gcegymooyemmaysk[$uusmaiomayssaecw])) {
                goto umgqoisouauoeigc;
            }
            goto qecuwsgaqewyysai;
            aqqsoockoussgmqg:
            wuqwcogkmmqscwce:
            goto seasawiyoeiuucac;
            seasawiyoeiuucac:
        }
        goto yoqmmikkokomsacw;
        omgieamuywawmkgc:
        if (!$gcegymooyemmaysk) {
            goto kkgceegequyiasgs;
        }
        goto siymueswymqkwekm;
        uiiyokqogawyeiec:
        return $sysgmomuyiiawwcm;
        goto ooimgcqywgokcika;
        sogiywcegssacgsu:
        $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk);
        goto paawyasioggcocqk;
        yoqmmikkokomsacw:
        swmmycgkeqaeswwq:
        goto sogiywcegssacgsu;
        paawyasioggcocqk:
        kkgceegequyiasgs:
        goto uiiyokqogawyeiec;
        ooimgcqywgokcika:
    }
    
    public static function cmsgeysmsqqogeki($uomewyckeuqoqocu, $yygmoeguaqyumuui)
    {
        goto scqeiomoywugwmgm;
        ieyqwwmaaeigusck:
        kscyscauewimmgme:
        goto icuiiyecyaosmkig;
        scqeiomoywugwmgm:
        foreach ($yygmoeguaqyumuui as $msqkueqksqwmskak => $uwomkgseoiegeume) {
            goto kyyeiymsouaoaiga;
            eksoacmagqswgeuq:
            $uomewyckeuqoqocu[$uwomkgseoiegeume] = $uomewyckeuqoqocu[$msqkueqksqwmskak];
            goto aooqissygemgsigy;
            aooqissygemgsigy:
            ManipulateArray::unset($uomewyckeuqoqocu, $msqkueqksqwmskak);
            goto msioicqugygwksci;
            kyyeiymsouaoaiga:
            if (!isset($uomewyckeuqoqocu[$msqkueqksqwmskak])) {
                goto gouysqqakyeugcyq;
            }
            goto eksoacmagqswgeuq;
            wkimauiikcmicukk:
            ooqikkgwocykeiuu:
            goto sssossmaugysoosg;
            msioicqugygwksci:
            gouysqqakyeugcyq:
            goto wkimauiikcmicukk;
            sssossmaugysoosg:
        }
        goto ieyqwwmaaeigusck;
        icuiiyecyaosmkig:
        return $uomewyckeuqoqocu;
        goto eacgwgwwwaeoeeee;
        eacgwgwwwaeoeeee:
    }
    
    public static function gmqyuaqwgiayskei($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\x70\x61\156", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false, $qawsmigsyysqwmeq = false)
    {
        goto eyoqguiuawqqmqsq;
        eaoooeokgceokgym:
        if (ManipulateAttachment::aauyuieeeaakygki($wkaqekwwgqsqwcoi)) {
            goto rkymcyiuygsasous;
        }
        goto uygkaowwykyuwcms;
        qmssemegysygmmig:
        $wkaqekwwgqsqwcoi = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto yiqsyymaccyskgka;
        yusiukmgiqcycoyw:
        return $nsmgceoqaqogqmuw;
        goto geoqmawmyksikoyk;
        ymskiasoemcgoywc:
        uiqemmagesmiamcu:
        goto oasooegcuaqyaksa;
        uokesuqoiakammsq:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x69\x63\x6f\156\x5f\x61\x74\x74\x72\x69\x62\165\164\145\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi);
        goto mqismiccqmeaacmm;
        ogywoqseeawwouuu:
        if (!$wkaqekwwgqsqwcoi) {
            goto uwcmqocsckgoycos;
        }
        goto quakaiyiukaeoggu;
        eyoqguiuawqqmqsq:
        $nsmgceoqaqogqmuw = '';
        goto ogywoqseeawwouuu;
        wikocscgqkqoeyag:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\x73\163", "\x70\x72\55\151\143\x6f\x6e");
        goto eaoooeokgceokgym;
        icwmksqayogauieq:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\151\143\x6f\156\x5f\x68\x74\155\x6c", $wkaqekwwgqsqwcoi);
        goto uyeskyscwoaceaum;
        yiqsyymaccyskgka:
        cossouqayakwquwq:
        goto icwmksqayogauieq;
        oasooegcuaqyaksa:
        omokwaassiaqugwi:
        goto uokesuqoiakammsq;
        ossgegmcqmikiako:
        goto cossouqayakwquwq;
        goto aymaycgmskceqaoo;
        qgcaikicmyiaiqyo:
        rkymcyiuygsasous:
        goto qucqsuqgimegkagu;
        aymaycgmskceqaoo:
        waakcieqeowcyces:
        goto qmssemegysygmmig;
        quakaiyiukaeoggu:
        if (ManipulateValidation::wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) {
            goto omokwaassiaqugwi;
        }
        goto wikocscgqkqoeyag;
        mmkyoekoacqmsiug:
        $wwgucssaecqekuek["\163\162\143"] = $wkaqekwwgqsqwcoi;
        goto wgsgyisoiwmyqgsy;
        uygkaowwykyuwcms:
        $wkaqekwwgqsqwcoi = Template::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc, $qawsmigsyysqwmeq);
        goto kakkcssaiwwuieig;
        mqismiccqmeaacmm:
        if ($gskuwmeemyeuwogc) {
            goto waakcieqeowcyces;
        }
        goto mmkyoekoacqmsiug;
        kakkcssaiwwuieig:
        goto uiqemmagesmiamcu;
        goto qgcaikicmyiaiqyo;
        qucqsuqgimegkagu:
        $wkaqekwwgqsqwcoi = ManipulateAttachment::mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi);
        goto ymskiasoemcgoywc;
        wgsgyisoiwmyqgsy:
        $wkaqekwwgqsqwcoi = self::uuccukgasskgimsq("\x69\x6d\x67", $wwgucssaecqekuek);
        goto ossgegmcqmikiako;
        uyeskyscwoaceaum:
        uwcmqocsckgoycos:
        goto yusiukmgiqcycoyw;
        geoqmawmyksikoyk:
    }
    
    public static function ciuuiyckmsygceis($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\x74\x72\157\x6e\x67", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function icqkogwskuwscskk($ywmkwiwkosakssii = [], $gskauacumcmekigs = []) : string
    {
        goto wgcuscwuwmiumqag;
        omcqkauyquamiwkw:
        $ewgwqamkygiqaawc = ManipulateArray::unset($gskauacumcmekigs, "\143\x6f\156\164\145\x6e\x74");
        goto uweqegqcewaiwgeo;
        cseosawememugocs:
        $nsmgceoqaqogqmuw .= self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
        goto wiggagegkomwsigy;
        ckawyuougmawuagq:
        ukoqmmisagkuskku:
        goto cseosawememugocs;
        uweqegqcewaiwgeo:
        if ($ewgwqamkygiqaawc) {
            goto ukoqmmisagkuskku;
        }
        goto caosicamgweuouqy;
        caosicamgweuouqy:
        $ewgwqamkygiqaawc = $meqocwsecsywiiqs;
        goto ckawyuougmawuagq;
        qsgqsgqoasquyegw:
        $wwgucssaecqekuek["\150\x72\x65\146"] = "\43";
        goto eckqwskioaqieuiw;
        omegwywwowgccqgc:
        $wwgucssaecqekuek["\x64\x61\164\x61\55\x6d\x6f\x64\x61\x6c"] = ManipulateArray::get($qsqwqsymmqeoqwcu, "\160\162\x65\x66\151\170", "\x67\x65\156\x65\x72\141\154") . "\137\155\157\x64\x61\x6c";
        goto uiwwomawycusiaqc;
        gqckiowescyoycek:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\163\x73", "\x70\x72\55\x63\x6f\x6e\146\151\162\x6d\x61\142\154\145\55\141\x63\x74\x69\x6f\156");
        goto omcqkauyquamiwkw;
        wiggagegkomwsigy:
        ggakeykgaywwuico:
        goto ecqymkukooyucuao;
        acmqcaimwssoqwcu:
        wyyumeauogsokwwy:
        goto gcogkoymaecaouei;
        wgcuscwuwmiumqag:
        $qsqwqsymmqeoqwcu = ManipulateFormat::omaawkkwwyesqwcc(self::uskieqmcqyecigmy(array_merge($ywmkwiwkosakssii, ["\152\163\157\x6e" => false])), ["\166\151\145\167" => "\144\151\x61\x6c\x6f\147", "\160\162\145\146\x69\x78" => "\x67\x65\156\145\162\141\154", "\163\160\151\156\x6e\x65\162" => false, "\143\x6c\x6f\x73\145\137\x74\x69\164\154\x65" => __("\103\154\x6f\163\145", PR__CMN__FOUNDATION)]);
        goto mqwsuaogooqyusmg;
        akqqwkcyeiuguaee:
        _doing_it_wrong(__FUNCTION__, __("\x70\154\x65\141\163\x65\x20\x73\x70\145\x63\x69\146\171\40\141\40\160\162\x65\146\151\x78\x20\146\157\x72\x20\x66\x6f\x72\x20\155\157\x64\141\x6c", PR__CMN__FOUNDATION), 1);
        goto acmqcaimwssoqwcu;
        aoamgmomuauiaomq:
        if (!$gskauacumcmekigs) {
            goto ggakeykgaywwuico;
        }
        goto ykmomgoksisygqmi;
        ecqymkukooyucuao:
        return $nsmgceoqaqogqmuw;
        goto memoemokqyckwuam;
        mqwsuaogooqyusmg:
        if (ManipulateArray::get($qsqwqsymmqeoqwcu, "\160\162\145\146\x69\x78", '')) {
            goto wyyumeauogsokwwy;
        }
        goto akqqwkcyeiuguaee;
        kiwsouqmoaeuwcyi:
        $meqocwsecsywiiqs = ManipulateArray::get($gskauacumcmekigs, "\x74\x69\x74\154\x65");
        goto eikgkciokyogmmae;
        eikgkciokyogmmae:
        $kqywgoqsmuswammk = ManipulateArray::get($gskauacumcmekigs, "\145\x6c\145\155\145\x6e\x74", "\x62\165\x74\164\157\x6e");
        goto omegwywwowgccqgc;
        gcogkoymaecaouei:
        $nsmgceoqaqogqmuw = Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::MODAL_TEMPLATE_PATH, $qsqwqsymmqeoqwcu);
        goto aoamgmomuauiaomq;
        ykmomgoksisygqmi:
        $wwgucssaecqekuek = ManipulateArray::get($gskauacumcmekigs, "\141\x74\x74\162\163", []);
        goto kiwsouqmoaeuwcyi;
        eckqwskioaqieuiw:
        wkkoyqmigawkyoww:
        goto gqckiowescyoycek;
        uiwwomawycusiaqc:
        if (!($kqywgoqsmuswammk == "\x61" && !ManipulateArray::get($wwgucssaecqekuek, "\150\x72\x65\x66", false))) {
            goto wkkoyqmigawkyoww;
        }
        goto qsgqsgqoasquyegw;
        memoemokqyckwuam:
    }
    
    public static function igmaewykumgwoaoy($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto guqgcsmiuskcawsy;
        wkmksaskwoeiqgqq:
        ymuwsmqieegccmec:
        goto kgmwksacomoyiemk;
        uuckosesigqwyykq:
        gcwekuwcsakcsyiu:
        goto ywcomywyegmgoiqc;
        guqgcsmiuskcawsy:
        if (is_object($siquossayskcwkea) && $uusmaiomayssaecw) {
            goto qwssywogokmegcwg;
        }
        goto kmckgogusyyoyiia;
        mykcwaiwmsyaacog:
        if (isset($siquossayskcwkea->{$uusmaiomayssaecw})) {
            goto wqqayaqgqaokkewk;
        }
        goto cewwgkwqeuayygeq;
        iauuciyimekqwsqe:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\x20", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\40" . $eqgoocgaqwqcimie);
        goto gqqsowqiouwisway;
        ksmkyewagskkoeok:
        if (isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto agkccauguemomgyi;
        }
        goto uasiqigosyqwisuq;
        aeeygmyoycocsaow:
        if ($uusmaiomayssaecw) {
            goto usgequsgggeskams;
        }
        goto qukgkymacqckmyoq;
        ywcomywyegmgoiqc:
        uweweeiagegyukye:
        goto mgqgsoaoauaoioku;
        qyigcogcwakysqwo:
        $wisgiwskwawciiee = $siquossayskcwkea->{$uusmaiomayssaecw};
        goto gucssmauyukceoiu;
        sqgkwwsqomcqewuu:
        agkccauguemomgyi:
        goto eukmgmmseugskiio;
        qukgkymacqckmyoq:
        $siquossayskcwkea = $wisgiwskwawciiee;
        goto myogiyogisykoogo;
        museocscicoguyic:
        iiosuiiicgmwuquu:
        goto qcgikckikqqwewqg;
        gqwciegucimkisai:
        eaaaqmqycgcqiaee:
        goto ouokoaqgueuukoes;
        mggmcgicyksgeoga:
        wsyouakcyuwgsmmq:
        goto scimwiammysocuma;
        giyuysmwumkyayiq:
        iqkuskokswaoiosy:
        goto gqwciegucimkisai;
        egeesoksqmwwsuoe:
        $wisgiwskwawciiee = $siquossayskcwkea;
        goto mgcymqumaiwgmswy;
        yceuaweskqgkyccw:
        if (is_array($eqgoocgaqwqcimie)) {
            goto gggawowkmoygokiu;
        }
        goto sskgwegakoyqqkku;
        eukmgmmseugskiio:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto uuckosesigqwyykq;
        qgeeemyaomggagku:
        yasaysggqceikmye:
        goto ksmkyewagskkoeok;
        kmckgogusyyoyiia:
        if (is_array($siquossayskcwkea)) {
            goto ymiiiqccumeseqgg;
        }
        goto yyeuoiccgweskqgw;
        ouokoaqgueuukoes:
        goto iiosuiiicgmwuquu;
        goto mggmcgicyksgeoga;
        myacgeqsygaaicsw:
        goto uykcwaomeewcauqm;
        goto eiyeysucoukeiqii;
        wiuaoykkoqsqcciu:
        goto sqkaggmqmkgwkimu;
        goto ewseyicyoqscoyic;
        cyawmgceseyseywk:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\x20", $eqgoocgaqwqcimie));
        goto wkmksaskwoeiqgqq;
        mgcymqumaiwgmswy:
        goto uweweeiagegyukye;
        goto qgeeemyaomggagku;
        ymmooquwukiemiuu:
        goto ymuwsmqieegccmec;
        goto iquuyccmwaqmeiwc;
        geigqkwcacssimqk:
        qwssywogokmegcwg:
        goto mykcwaiwmsyaacog;
        egioqiaqgkcociok:
        usgequsgggeskams:
        goto waeogmkyweaagquk;
        qcgikckikqqwewqg:
        return $siquossayskcwkea;
        goto aumekwowaoymcamo;
        keeikoymoqwakmuc:
        if (!is_array($siquossayskcwkea)) {
            goto eaaaqmqycgcqiaee;
        }
        goto aeeygmyoycocsaow;
        sskgwegakoyqqkku:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto qogkwuqcauywuqyy;
        }
        goto iauuciyimekqwsqe;
        iquuyccmwaqmeiwc:
        gggawowkmoygokiu:
        goto cyawmgceseyseywk;
        cewwgkwqeuayygeq:
        $wisgiwskwawciiee = '';
        goto myacgeqsygaaicsw;
        scimwiammysocuma:
        $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee;
        goto museocscicoguyic;
        esmwouucumeuaaiq:
        goto ugsyacuawyeqcywk;
        goto geigqkwcacssimqk;
        yyeuoiccgweskqgw:
        return trim($siquossayskcwkea . "\40" . (is_array($eqgoocgaqwqcimie) ? implode("\x20", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie));
        goto wiuaoykkoqsqcciu;
        gaukmueogumwwwmi:
        goto gcwekuwcsakcsyiu;
        goto sqgkwwsqomcqewuu;
        ywigugwyqieqkcoe:
        if ($uusmaiomayssaecw) {
            goto yasaysggqceikmye;
        }
        goto egeesoksqmwwsuoe;
        myogiyogisykoogo:
        goto iqkuskokswaoiosy;
        goto egioqiaqgkcociok;
        maqacaoweqmyiuua:
        ugsyacuawyeqcywk:
        goto yceuaweskqgkyccw;
        waeogmkyweaagquk:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto giyuysmwumkyayiq;
        gqqsowqiouwisway:
        qogkwuqcauywuqyy:
        goto ymmooquwukiemiuu;
        kgmwksacomoyiemk:
        if (is_object($siquossayskcwkea)) {
            goto wsyouakcyuwgsmmq;
        }
        goto keeikoymoqwakmuc;
        uasiqigosyqwisuq:
        $wisgiwskwawciiee = '';
        goto gaukmueogumwwwmi;
        gucssmauyukceoiu:
        uykcwaomeewcauqm:
        goto maqacaoweqmyiuua;
        eiyeysucoukeiqii:
        wqqayaqgqaokkewk:
        goto qyigcogcwakysqwo;
        mgqgsoaoauaoioku:
        sqkaggmqmkgwkimu:
        goto esmwouucumeuaaiq;
        ewseyicyoqscoyic:
        ymiiiqccumeseqgg:
        goto ywigugwyqieqkcoe;
        aumekwowaoymcamo:
    }
    
    public static function gusouagusgyoaeya($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\160", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function yekemqwyimcqgeuk($ewgwqamkygiqaawc, $ekasyoagocygouom, $wwgucssaecqekuek = []) : string
    {
        $wwgucssaecqekuek["\144\x61\x74\x65\x74\x69\x6d\x65"] = $ekasyoagocygouom;
        return self::uuccukgasskgimsq("\164\x69\x6d\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy = [], $wwgucssaecqekuek = []) : string
    {
        goto gkqqeoyqwmaqweus;
        oeegwqskokyysgia:
        skiieiyqgwecickk:
        goto yaowsqucwakaesoi;
        esouewuuwooociii:
        uawqemsmoegqwcys:
        goto scikcooocqiscwuk;
        sceiisuuogsqyaua:
        return self::uuccukgasskgimsq("\164\x61\142\x6c\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
        goto cgouooqwgiessagu;
        xaoaqqukaokieeos:
        $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk;
        goto oeegwqskokyysgia;
        gkqqeoyqwmaqweus:
        $ewgwqamkygiqaawc = '';
        goto ocmaakqeqigyqmcm;
        wasokaaaiesgoiwu:
        $kakckmgscyiskome = '';
        goto yougiukokiwueagg;
        yougiukokiwueagg:
        foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) {
            $kakckmgscyiskome .= self::uuccukgasskgimsq("\164\150", ["\x64\141\x74\x61\55\x6b\145\x79" => "\x74\150\x2d{$uusmaiomayssaecw}", "\x63\154\x61\x73\163" => "\164\145\x78\x74\x2d\x6c\145\146\164"], $kmmmiumuegqmksky);
            ewoqemggggmuiicc:
        }
        goto esouewuuwooociii;
        eycywwwuywwiewae:
        foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) {
            goto koeaocaigyiuouma;
            cucwasiugcaiugkw:
            $ecuqamumceeoyiui = ManipulateArray::get($keuwuekioomqqaey, "\164\x72\x5f\x61\x74\164\x72\x73", []);
            goto ssgusiykmcsmacke;
            ssgusiykmcsmacke:
            $ecuqamumceeoyiui["\144\141\164\141\x2d\153\145\x79"] = "\x74\x72\x2d{$momcykaoccoymeig}";
            goto yseiyiawimkkgwgu;
            ugcgciqmmuumiwss:
            ieamiiycguksgyae:
            goto cucwasiugcaiugkw;
            koeaocaigyiuouma:
            $ykaygkcscgyoiiae = '';
            goto csuyiuccwoewwymw;
            csuyiuccwoewwymw:
            foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) {
                goto ycgeiokgsmiwocco;
                mkmewusqskqwyiga:
                scgooimgesucqmyw:
                goto ykagosqgwoyewmsm;
                kcuquqyuoqukkiae:
                $ykaygkcscgyoiiae .= self::uuccukgasskgimsq("\164\x64", ["\144\x61\x74\141\x2d\x6b\x65\171" => "\164\144\x2d{$uusmaiomayssaecw}\x2d{$momcykaoccoymeig}"], $yycqiageqkquoioq);
                goto mkmewusqskqwyiga;
                eyosqwqswsqcuekw:
                ckyaekugwcaaogua:
                goto kcuquqyuoqukkiae;
                wykcswiwacwksyeo:
                goto scgooimgesucqmyw;
                goto eyosqwqswsqcuekw;
                ycgeiokgsmiwocco:
                if (!($uusmaiomayssaecw == "\164\162\x5f\141\164\x74\162\x73")) {
                    goto ckyaekugwcaaogua;
                }
                goto wykcswiwacwksyeo;
                ykagosqgwoyewmsm:
            }
            goto ugcgciqmmuumiwss;
            ayiuauyqkcycymiq:
            qgigwkeaoogkycqq:
            goto iykoiouoygaumuak;
            yseiyiawimkkgwgu:
            $ymoekaoqgqmmgoqk .= self::uuccukgasskgimsq("\x74\x72", $ecuqamumceeoyiui, $ykaygkcscgyoiiae);
            goto ayiuauyqkcycymiq;
            iykoiouoygaumuak:
        }
        goto mkuiaigaaiiusgcw;
        yaowsqucwakaesoi:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\x74\142\x6f\x64\171", [], $essikcmqiyqaqoaq);
        goto aqmyaskcyisumkec;
        mkuiaigaaiiusgcw:
        quaqcuogeasmkwum:
        goto xaoaqqukaokieeos;
        wgqacmwcgiemyqsm:
        kmoaiymaumccccmw:
        goto mqiuuuiuyieomgsm;
        iewaqqoywiiueooc:
        $ymoekaoqgqmmgoqk = '';
        goto eycywwwuywwiewae;
        ocmaakqeqigyqmcm:
        if (!$uykgysuswksgmwqy) {
            goto kmoaiymaumccccmw;
        }
        goto wasokaaaiesgoiwu;
        scikcooocqiscwuk:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\x74\x68\145\141\x64", [], $kakckmgscyiskome);
        goto wgqacmwcgiemyqsm;
        aqmyaskcyisumkec:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\x73\x73", "\x74\x61\142\x6c\145\40\x6d\55\x30");
        goto sceiisuuogsqyaua;
        mqiuuuiuyieomgsm:
        if (!is_array($essikcmqiyqaqoaq)) {
            goto skiieiyqgwecickk;
        }
        goto iewaqqoywiiueooc;
        cgouooqwgiessagu:
    }
    
    public static function sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $mogykyiukkoqceec = 6) : string
    {
        goto gkqcgyeqkcisqgck;
        quiscsoaasusqsii:
        $wkkweuacukumqmya = array_filter(explode("\143\157\154\55", $qgoqiacsiccwoawi));
        goto cqouisksowcqsqga;
        uoioeqiqmewckqwq:
        $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\151\x6e\144\x65\x78", "\154\145\x6e\x67\x74\150"]);
        goto ecqkiigukgcscequ;
        egwsiqoumyssgaiw:
        $giwamsoicooomueg = '';
        goto gecomumkgckmoicc;
        owaoemsqwmcymegi:
        return rtrim($giwamsoicooomueg);
        goto qcsqqqkmmswawmqo;
        gecomumkgckmoicc:
        if (!$qgqgaykggoemycsk) {
            goto aqgeqqeaykqsqqyy;
        }
        goto quiscsoaasusqsii;
        cqouisksowcqsqga:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto cykquwwqoyuqacka;
            igwuuiisiiiacqog:
            $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length;
            goto diqmggkiascwcmgo;
            awyisykkykwugmcs:
            kyqgyywuaqkskkmq:
            goto euqwyueoiyaciwmu;
            wecqeaiwiowwougo:
            ggcqsikuoaowocia:
            goto qgoesugiyiiqgaka;
            ykeywoiececiccqk:
            if (!($gaeqamemwmwsyukm == 2)) {
                goto kyqgyywuaqkskkmq;
            }
            goto icaoeusmweymiows;
            smueyuiwaswcmmyq:
            if (!$gcgsqcoqciockquc) {
                goto ymqgkiswgyiwkiee;
            }
            goto akwwymwisyauswko;
            ykywwwymygscykam:
            $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie);
            goto mekuokossigwmiay;
            diqmggkiascwcmgo:
            $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi;
            goto esgcqqwkiqagqcqu;
            mekuokossigwmiay:
            $gcgsqcoqciockquc = '';
            goto ayassegeqauesegc;
            ayassegeqauesegc:
            if ($gaeqamemwmwsyukm == 1) {
                goto oeogicauwqmuckmc;
            }
            goto ykeywoiececiccqk;
            icaoeusmweymiows:
            
            $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0];
            goto sayimokgekmuieyc;
            kosquscyqqgygykc:
            $giwamsoicooomueg .= "\40\155\x62{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}";
            goto caykkyawcquykaig;
            csmmacecmeiqukou:
            $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi;
            goto auamqueygsmcgeua;
            akwwymwisyauswko:
            $gcgsqcoqciockquc = "\55{$gcgsqcoqciockquc}";
            goto auqmkwoggqyaskcq;
            mmkeguscoeyqgsaq:
            oeogicauwqmuckmc:
            goto woemqeiusiyyycao;
            qigqugqceqksaoaq:
            mmocggcuysgcayqs:
            goto cwsmeosaaeaamosg;
            esgcqqwkiqagqcqu:
            if (!($aoqagsqecokqqwqg == $ykiwomimkkuiigoq)) {
                goto wcqmkqkoekwggcaq;
            }
            goto csmmacecmeiqukou;
            oqwqqsiygukqweey:
            camisusksgocgiyu:
            goto mugcawkwqggykqkq;
            cwsmeosaaeaamosg:
            $giwamsoicooomueg .= "\40\x6d\142{$gcgsqcoqciockquc}\55\x30";
            goto wowqwsgksqqqmucw;
            auqmkwoggqyaskcq:
            ymqgkiswgyiwkiee:
            goto ugyquwcqwgkykyom;
            cykquwwqoyuqacka:
            $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi);
            goto ykywwwymygscykam;
            qgoesugiyiiqgaka:
            $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi;
            goto igwuuiisiiiacqog;
            auamqueygsmcgeua:
            wcqmkqkoekwggcaq:
            goto smueyuiwaswcmmyq;
            euqwyueoiyaciwmu:
            goto ggcqsikuoaowocia;
            goto mmkeguscoeyqgsaq;
            woemqeiusiyyycao:
            
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0];
            goto wecqeaiwiowwougo;
            wowqwsgksqqqmucw:
            ugsucquekakgyyoe:
            goto oqwqqsiygukqweey;
            caykkyawcquykaig:
            goto ugsucquekakgyyoe;
            goto qigqugqceqksaoaq;
            sayimokgekmuieyc:
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1];
            goto awyisykkykwugmcs;
            ugyquwcqwgkykyom:
            if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) {
                goto mmocggcuysgcayqs;
            }
            goto kosquscyqqgygykc;
            mugcawkwqggykqkq:
        }
        goto isawcgqqwuaucgga;
        yeucaeocmeokqggg:
        aqgeqqeaykqsqqyy:
        goto owaoemsqwmcymegi;
        isawcgqqwuaucgga:
        gmaokugqemkqaymu:
        goto yeucaeocmeokqggg;
        gkqcgyeqkcisqgck:
        if (!is_array($qgqgaykggoemycsk)) {
            goto zkyyykgsamwwykec;
        }
        goto uoioeqiqmewckqwq;
        ecqkiigukgcscequ:
        zkyyykgsamwwykec:
        goto egwsiqoumyssgaiw;
        qcsqqqkmmswawmqo:
    }
    
    public static function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto woeogayusoaoawio;
        cycuoasiccouwyqw:
        unset($wisgiwskwawciiee[$ccamueccusigaaio]);
        goto oucesaewqyuwiiqg;
        ucyecesyqmiackww:
        $ukwmeuiywasikwcu = true;
        goto igmqymyemckoaqgi;
        miowwquwweeycgyu:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto uqyqusgiassqqgso;
        oucesaewqyuwiiqg:
        iaaigscysuqkassk:
        goto gmugaowewyiyooea;
        qeuewcmsumowussm:
        if (!(($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee)) !== false)) {
            goto iaaigscysuqkassk;
        }
        goto cycuoasiccouwyqw;
        uquiseikicyaaaka:
        uckskmkusokoegaw:
        goto kemgeqwcacseqmgu;
        wwwmsesaeqsooeso:
        wqwuwausogwsuqqc:
        goto kgmmymowamcgesku;
        igmqymyemckoaqgi:
        asweayesceakosic:
        goto asuaoeiwuqaugwaa;
        umioqieqqagmckwg:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto caeamkmmgyasuywc;
        kgmmymowamcgesku:
        return $siquossayskcwkea;
        goto uocgaiiuusguaayy;
        gmugaowewyiyooea:
        if (!$ukwmeuiywasikwcu) {
            goto wqsueawiwmaymyye;
        }
        goto eiceowycmoycqkuk;
        kemgeqwcacseqmgu:
        $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea));
        goto wwwmsesaeqsooeso;
        uqyqusgiassqqgso:
        if (!is_string($wisgiwskwawciiee)) {
            goto asweayesceakosic;
        }
        goto emgcuckeyeakwoww;
        oimimqggwmcwcayu:
        wqsueawiwmaymyye:
        goto umioqieqqagmckwg;
        mesgcyiaogasqowm:
        if (!in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee)) {
            goto wakcyckyeemwoqgk;
        }
        goto qeuewcmsumowussm;
        iewukqcakeoaogea:
        goto wqwuwausogwsuqqc;
        goto uquiseikicyaaaka;
        caeamkmmgyasuywc:
        wakcyckyeemwoqgk:
        goto mskqaiwsecmeksgy;
        gmqmassuiycwosek:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto qikugkuomgekwawu;
        }
        goto miowwquwweeycgyu;
        eiceowycmoycqkuk:
        $wisgiwskwawciiee = implode("\x20", $wisgiwskwawciiee);
        goto oimimqggwmcwcayu;
        mmewqwgucqqooauq:
        qikugkuomgekwawu:
        goto iewukqcakeoaogea;
        emgcuckeyeakwoww:
        $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee);
        goto ucyecesyqmiackww;
        mskqaiwsecmeksgy:
        ieeoomsoskweuome:
        goto mmewqwgucqqooauq;
        woeogayusoaoawio:
        $ukwmeuiywasikwcu = false;
        goto doykmuigywoqqiso;
        doykmuigywoqqiso:
        if (is_string($siquossayskcwkea)) {
            goto uckskmkusokoegaw;
        }
        goto gmqmassuiycwosek;
        asuaoeiwuqaugwaa:
        if (!is_array($wisgiwskwawciiee)) {
            goto ieeoomsoskweuome;
        }
        goto mesgcyiaogasqowm;
        uocgaiiuusguaayy:
    }
    
    public static function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $siquossayskcwkea;
    }
    
    public static function wouimaqqweceiamk($iwamiguusayooguq, $wkaqekwwgqsqwcoi = '') : string
    {
        goto qakuswcwwswiesyi;
        uessyqkuysyoaqwm:
        return self::qgsekwygcgawekeq("\144\x69\x76", ["\x63\x6c\141\163\163" => "\160\x72\55\x6d\x6f\144\141\154\55\x67\165\x69\x64\x65\40\x64\x2d\x66\x6c\x65\170"], true, $wkaqekwwgqsqwcoi . $iwamiguusayooguq);
        goto zseoycemqgkocuoy;
        qomksaimmayiiiwk:
        $wwgucssaecqekuek = ManipulateArray::get($wkaqekwwgqsqwcoi, "\x61\x74\x74\162\163", []);
        goto mkikkgwwyiemokme;
        emuussqoawouymue:
        ywacykwawisgmguq:
        goto uessyqkuysyoaqwm;
        mkikkgwwyiemokme:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($wkaqekwwgqsqwcoi, "\151\x63\157\x6e", '');
        goto swoccyieyiyocaai;
        sqikqgygycksuyoa:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\x73", "\155\171\55\x61\165\x74\x6f\40\151\143\157\x6e\55\163\155\40\x6d\162\x2d\62");
        goto oqiwsqaskogasows;
        iyqqogayqsmeocus:
        if (!$wkaqekwwgqsqwcoi) {
            goto ywacykwawisgmguq;
        }
        goto iscaiaaawwcwwaqe;
        swoccyieyiyocaai:
        msyquusciakoksug:
        goto sqikqgygycksuyoa;
        syucwaiqcwoigmyi:
        if (!is_array($wkaqekwwgqsqwcoi)) {
            goto msyquusciakoksug;
        }
        goto qomksaimmayiiiwk;
        qakuswcwwswiesyi:
        $iwamiguusayooguq = self::qgsekwygcgawekeq("\163\x70\x61\156", ["\143\x6c\x61\163\163" => "\155\x79\x2d\141\165\x74\x6f"], true, $iwamiguusayooguq);
        goto iyqqogayqsmeocus;
        iscaiaaawwcwwaqe:
        $wwgucssaecqekuek = [];
        goto syucwaiqcwoigmyi;
        oqiwsqaskogasows:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true);
        goto emuussqoawouymue;
        zseoycemqgkocuoy:
    }
    
    public static function ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw, $iqaosyayeiuaisqi = false) : string
    {
        goto csmkgqiuimmymqaw;
        csmkgqiuimmymqaw:
        if (!is_array($uamcoiueqaamsqma)) {
            goto aesqmgsmqugcmwsu;
        }
        goto wgggekucgkaiksaw;
        iuaagccgiiyoewqi:
        foreach ($uamcoiueqaamsqma as $yaakimaumwqiaeei) {
            $suuagcecoyuweoqk .= self::uuccukgasskgimsq("\154\151", [], $yaakimaumwqiaeei);
            qieaauqeoyssiwei:
        }
        goto swugymmweuogwusw;
        owmgcskcyawsqskm:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\x64\151\166", ["\x63\x6c\141\x73\x73" => "\164\145\x78\x74\x2d\143\145\156\164\145\162\40\155\157\144\x61\154\55\x6d\145\x73\163\x61\147\x65\x20\x6d\157\x64\x61\x6c\55\155\145\x73\163\141\147\x65\x2d" . ($iqaosyayeiuaisqi ? $iqaosyayeiuaisqi : ($occymigcemkqucuw ? "\163\x75\143\x63\145\x73\x73" : "\144\141\x6e\147\145\x72"))], $uamcoiueqaamsqma);
        goto woyasoooseaaaaio;
        kwqswmuukaymcqoq:
        if (!is_string($uamcoiueqaamsqma)) {
            goto gewmecseymwsqeaw;
        }
        goto owmgcskcyawsqskm;
        wgggekucgkaiksaw:
        $suuagcecoyuweoqk = '';
        goto iuaagccgiiyoewqi;
        yuceksygooykweoy:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\x75\154", [], $suuagcecoyuweoqk);
        goto oeecmqccguiykkqm;
        woyasoooseaaaaio:
        gewmecseymwsqeaw:
        goto qigywyiuuemsacoe;
        qigywyiuuemsacoe:
        return $uamcoiueqaamsqma;
        goto csosomiukogmmcme;
        swugymmweuogwusw:
        swmckgcuukkqqckq:
        goto yuceksygooykweoy;
        oeecmqccguiykkqm:
        aesqmgsmqugcmwsu:
        goto kwqswmuukaymcqoq;
        csosomiukogmmcme:
    }
    
    public static function uskieqmcqyecigmy($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\142\x75\x74\164\x6f\x6e")
    {
        goto uwecaymwqkkicime;
        yaugumwgommeyeii:
        if (!($smgooosyoeqwcaeg = ManipulateArray::get($ywmkwiwkosakssii, "\152\163\x6f\x6e"))) {
            goto vaaikkcmqgsiwkum;
        }
        goto esqwuigiwqkiwwea;
        skuskikumqguccee:
        $qyukicweqoisimwg = ManipulateArray::get($ywmkwiwkosakssii, "\x62\x75\164\164\x6f\x6e\x73", []);
        goto ogasoacwwskwkuwo;
        ogasoacwwskwkuwo:
        if (!$qyukicweqoisimwg) {
            goto oquqawmmasaicyua;
        }
        goto ogcsckmescouyqmc;
        ogcsckmescouyqmc:
        if (!in_array("\x63\x61\x6e\143\145\x6c", $qyukicweqoisimwg)) {
            goto iowuiukuyewqkkae;
        }
        goto oogioucuccasmyak;
        akaqcyoimeoumcim:
        vaaikkcmqgsiwkum:
        goto swyesueumaokiieq;
        esqwuigiwqkiwwea:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, $smgooosyoeqwcaeg);
        goto akaqcyoimeoumcim;
        iacqiaeyscguwyia:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto auiissiemumqmkwa;
            qimocyquekymmiuk:
            eoigcqiakssieeau:
            goto wogokussyamayesu;
            muuekeyeccsssuow:
            $gskauacumcmekigs = self::igmaewykumgwoaoy($gskauacumcmekigs, "\143\154\141\x73\163", "\x70\170\55\x35");
            goto gqiuksowisyaqsgs;
            escogkseqmmsucuy:
            $scwiymciagumsuiw = $kqywgoqsmuswammk;
            goto agckiaesekmciuyw;
            eecmomwqeicciqok:
            $qyukicweqoisimwg[$momcykaoccoymeig] = self::qgsekwygcgawekeq($scwiymciagumsuiw, $gskauacumcmekigs, true, ManipulateArray::get($gskauacumcmekigs, "\164\x69\x74\154\145"));
            goto qimocyquekymmiuk;
            sociuakymqqoqscu:
            $geecqyososceumsk = ManipulateArray::get($gskauacumcmekigs, "\150\x72\x65\146");
            goto muuekeyeccsssuow;
            yumcwyyykaumkeau:
            iewaoiacicouqcmy:
            goto sociuakymqqoqscu;
            woasacgcwusiuimk:
            $gskauacumcmekigs[] = "\x64\x61\x74\x61\x2d\x6d\151\143\162\x6f\x6d\157\144\x61\154\55\x63\x6c\x6f\163\145";
            goto yumcwyyykaumkeau;
            cocigaqusqewkiuy:
            cswywwkcqekmigki:
            goto amuouaaiumwgawui;
            agckiaesekmciuyw:
            goto msmmauiswokuyasc;
            goto cocigaqusqewkiuy;
            amuouaaiumwgawui:
            $scwiymciagumsuiw = "\141";
            goto qgsyukssiqqqyqky;
            gqiuksowisyaqsgs:
            if ($geecqyososceumsk) {
                goto cswywwkcqekmigki;
            }
            goto escogkseqmmsucuy;
            auiissiemumqmkwa:
            if (!is_array($gskauacumcmekigs)) {
                goto eoigcqiakssieeau;
            }
            goto owecwquwkacmmwsm;
            wogokussyamayesu:
            eaeogyomscegkayw:
            goto gcukuckckaiewegs;
            owecwquwkacmmwsm:
            if (!ManipulateArray::get($gskauacumcmekigs, "\x64\x69\163\155\151\x73\x73", false)) {
                goto iewaoiacicouqcmy;
            }
            goto woasacgcwusiuimk;
            qgsyukssiqqqyqky:
            msmmauiswokuyasc:
            goto eecmomwqeicciqok;
            gcukuckckaiewegs:
        }
        goto sigasyakmuoqkmmk;
        kaiusyuqauywqwii:
        iowuiukuyewqkkae:
        goto iacqiaeyscguwyia;
        oogioucuccasmyak:
        $qyukicweqoisimwg[array_search("\143\x61\156\x63\145\154", $qyukicweqoisimwg)] = ["\143\x6c\141\163\163" => "\142\164\x6e\x20\142\164\156\x2d\157\165\164\x6c\151\x6e\x65\x2d\160\x72\x69\155\141\x72\x79", "\x74\x69\164\154\145" => __("\103\x61\156\x63\145\154", PR__CMN__FOUNDATION), "\144\151\x73\155\151\x73\x73" => true];
        goto kaiusyuqauywqwii;
        siqiwagoqooemoaw:
        oquqawmmasaicyua:
        goto yaugumwgommeyeii;
        uwecaymwqkkicime:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\x79\x70\x65" => "\151\156\x66\157", "\152\x73\x6f\x6e" => JSON_UNESCAPED_SLASHES, "\x73\x69\x7a\145" => "\x6d\x64", "\164\x69\164\x6c\145" => __("\101\154\145\x72\164", PR__CMN__FOUNDATION), "\143\x6f\x6e\164\145\x6e\164" => '', "\142\x75\164\164\x6f\x6e\x73" => []]);
        goto skuskikumqguccee;
        gcoakgwgoisggsma:
        $ywmkwiwkosakssii["\142\x75\164\164\x6f\156\163"] = $qyukicweqoisimwg;
        goto siqiwagoqooemoaw;
        sigasyakmuoqkmmk:
        cewmkewqmueeeyyc:
        goto gcoakgwgoisggsma;
        swyesueumaokiieq:
        return $ywmkwiwkosakssii;
        goto gomaeoikykwymgwc;
        gomaeoikykwymgwc:
    }
    
    public static function sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '')
    {
        echo self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
    }
    
    public static function wegccueewucwyaew($ywmkwiwkosakssii = [])
    {
        goto mgosoyoeuiqwiwmk;
        owukqqsugwsyyueu:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\144\x69\x76", ["\x63\154\x61\x73\163" => "\143\x61\x72\x64\x2d\x68\x65\141\144\145\x72"], self::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi));
        goto sqwciumeqyaccyau;
        uuucmcsegiwmgqyk:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\163", "\160\162\x2d\143\141\162\x64\40\x63\x61\x72\144");
        goto qcgascowuioocwig;
        isaickqmmmkeicgo:
        if (!$meqocwsecsywiiqs) {
            goto uoysyuggmqqmcekw;
        }
        goto owukqqsugwsyyueu;
        ukmewkukokeqigos:
        $ewgwqamkygiqaawc = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT);
        goto mcswsycyyuouesmw;
        qcgascowuioocwig:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\x64\x69\166", $wwgucssaecqekuek, [$meqocwsecsywiiqs, $ewgwqamkygiqaawc]);
        goto wawaocswoauwmmus;
        igwoiimkmmmscuoi:
        if (!$ywmkwiwkosakssii["\x68\x61\163\x5f\x62\157\144\171"]) {
            goto sggquugugsmuiwwe;
        }
        goto okswmkyoomseaueq;
        mcswsycyyuouesmw:
        if (!$ewgwqamkygiqaawc) {
            goto uqgskaesqkwyiyws;
        }
        goto igwoiimkmmmscuoi;
        wawaocswoauwmmus:
        uqgskaesqkwyiyws:
        goto suqmqyegkqmyqmok;
        yciamiooeekkmayo:
        sggquugugsmuiwwe:
        goto isaickqmmmkeicgo;
        iumsyyqaikswuqic:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        goto ssikoeweoiwuqqoe;
        suqmqyegkqmyqmok:
        return $ewgwqamkygiqaawc;
        goto cuyucakmwasgeaew;
        qmqaskwucyouocqk:
        uoysyuggmqqmcekw:
        goto uuucmcsegiwmgqyk;
        okswmkyoomseaueq:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\144\x69\x76", ["\143\x6c\141\163\163" => "\x63\141\x72\144\55\x62\x6f\x64\x79"], $ewgwqamkygiqaawc);
        goto yciamiooeekkmayo;
        sqwciumeqyaccyau:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\150\62", ["\143\154\141\163\163" => "\x6d\55\x30"], $meqocwsecsywiiqs);
        goto qmqaskwucyouocqk;
        mgosoyoeuiqwiwmk:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\150\141\163\x5f\x62\157\144\x79" => true, self::ICON => '', self::TITLE => '', self::ATTRS => [], self::CONTENT => '']);
        goto iumsyyqaikswuqic;
        ssikoeweoiwuqqoe:
        $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, self::ATTRS);
        goto sesoweewqkwcymwu;
        sesoweewqkwcymwu:
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        goto ukmewkukokeqigos;
        cuyucakmwasgeaew:
    }
    
    public static function smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false)
    {
        goto ksguecmqmcsogyig;
        ksguecmqmcsogyig:
        if (!$wkaqekwwgqsqwcoi) {
            goto kayosmeqqkicimqa;
        }
        goto uewwowiwgoyesikg;
        uewwowiwgoyesikg:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        goto goegcwmuuaiokimo;
        gaesmekmwiaksqsm:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi . $meqocwsecsywiiqs);
        goto ikewqccciwsqcamq;
        maaaegyeiiecykkk:
        return $meqocwsecsywiiqs;
        goto ckqmyeycucqcugaq;
        ikewqccciwsqcamq:
        kayosmeqqkicimqa:
        goto maaaegyeiiecykkk;
        goegcwmuuaiokimo:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\143\154\141\163\163" => "\x6d\154\55\62"]);
        goto gaesmekmwiaksqsm;
        ckqmyeycucqcugaq:
    }
    
    public static function oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, $wwgucssaecqekuek = [], $wygwqsssewkqooqm = true) : string
    {
        goto aqgwciseuyqyomme;
        qoouwuqgucsyyaii:
        return self::qgsekwygcgawekeq("\x64\151\166", $wwgucssaecqekuek, true, self::gusouagusgyoaeya($uamcoiueqaamsqma));
        goto qiaowiwiqqmegouc;
        iueeimyiyygkcuke:
        yyqqwqqueqsmwuek:
        goto uesguqmcseqmcycc;
        syoegaiagasioioi:
        if (!$wygwqsssewkqooqm) {
            goto yyqqwqqueqsmwuek;
        }
        goto kcwquqksumqqmccq;
        aqgwciseuyqyomme:
        $egkyssmuqcwaciya = "\156\157\x74\151\143\145\x20\x6e\157\164\x69\x63\x65\55{$iqaosyayeiuaisqi}";
        goto syoegaiagasioioi;
        uesguqmcseqmcycc:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\x73", $egkyssmuqcwaciya);
        goto qoouwuqgucsyyaii;
        kcwquqksumqqmccq:
        $egkyssmuqcwaciya .= "\40\x69\163\55\x64\x69\163\155\x69\163\163\151\142\154\x65";
        goto iueeimyiyygkcuke;
        qiaowiwiqqmegouc:
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
        goto cueqqguumyoieuqi;
        omgwcmaawwmwewuy:
        yuaussgmgweicywq:
        goto gyqwksoocmmwsmii;
        wcukoowiwmgeqmck:
        if (is_array($ewgwqamkygiqaawc)) {
            goto yuaussgmgweicywq;
        }
        goto cuuuygiqqiausmsg;
        aemkoeoaageqwmgm:
        eosyseigsygisgay:
        goto wcukoowiwmgeqmck;
        jwegkqgqigkyimwy:
        qyauooaokskicoqw:
        goto coyqmiyssicuemqc;
        isameaaesyeqewyw:
        return $aqykuigiuwmmcieu;
        goto oawacyogaucwgeqa;
        eousywekqyqmkigg:
        goto qyauooaokskicoqw;
        goto omgwcmaawwmwewuy;
        coyqmiyssicuemqc:
        $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $wwgucssaecqekuek, $aqykuigiuwmmcieu);
        goto ymiqqkqcasmeswai;
        gemaacocysicmuis:
        cywceaauueswisma:
        goto isameaaesyeqewyw;
        ymiqqkqcasmeswai:
        if (!$muiegiugiocacqkm) {
            goto cywceaauueswisma;
        }
        goto kiegwkgkkmwoigue;
        uwgewqagamkqykuc:
        $ggkaciewmeqmgckg = "\x3c\x25\163\x20\x25\163\x3e\x25\163";
        goto wmymgosowycieomq;
        miyguwmiomkywqwi:
        $ggkaciewmeqmgckg = "\74\45\163\x20\45\163\57\76";
        goto iouaimmmokqaicae;
        wmymgosowycieomq:
        if (!in_array($kqywgoqsmuswammk, ["\x69\156\160\x75\164", "\x62\162", "\150\162", "\151\x6d\x67", "\154\x69\x6e\153"])) {
            goto eosyseigsygisgay;
        }
        goto miyguwmiomkywqwi;
        iouaimmmokqaicae:
        $muiegiugiocacqkm = false;
        goto aemkoeoaageqwmgm;
        kiegwkgkkmwoigue:
        $aqykuigiuwmmcieu = sprintf("\45\163\74\57\45\x73\x3e", $aqykuigiuwmmcieu, $kqywgoqsmuswammk);
        goto gemaacocysicmuis;
        cueqqguumyoieuqi:
        $wwgucssaecqekuek = self::aoyseswaaaugicuq($wwgucssaecqekuek);
        goto uwgewqagamkqykuc;
        gyqwksoocmmwsmii:
        $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc);
        goto jwegkqgqigkyimwy;
        cuuuygiqqiausmsg:
        $aqykuigiuwmmcieu = $ewgwqamkygiqaawc;
        goto eousywekqyqmkigg;
        oawacyogaucwgeqa:
    }
}

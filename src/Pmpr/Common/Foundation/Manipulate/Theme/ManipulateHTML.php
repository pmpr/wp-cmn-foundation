<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        return self::uuccukgasskgimsq("\144\x69\166", ["\143\154\x61\163\x73" => "\x64\x2d\x66\154\145\170\x20\152\165\x73\164\151\146\x79\x2d\143\157\x6e\164\145\156\x74\55\163\x74\141\x72\164"], ["\x25\62\x24\x73", self::uuccukgasskgimsq("\x73\x6d\141\x6c\154", ["\143\154\141\x73\x73" => "\x66\157\156\x74\55\61\x33\40\155\171\x2d\141\165\164\x6f\x20\x6d\x6c\x2d\62"], "\45\x31\44\163")]);
    }
    
    public static function skyucqyswomguscg($uomewyckeuqoqocu)
    {
        goto iyeukmoycqcoeoww;
        maimcygiikgukege:
        mkmcaqquqsycicwk:
        goto cecqqywgssugeikg;
        cecqqywgssugeikg:
        return esc_attr($aqykuigiuwmmcieu);
        goto ogoigckgkacomgsw;
        qqcagaaisccuygwq:
        agmoeimoggkkmamk:
        goto maimcygiikgukege;
        kemyesuyqgygsgmc:
        goto agmoeimoggkkmamk;
        goto yuaeosigaqocaswy;
        quwawmyimwumqiik:
        goto mkmcaqquqsycicwk;
        goto aoasseeyymigiuqg;
        gasqiqwuuokswuak:
        if (ManipulateArray::gogeqwskoiiaocoe($uomewyckeuqoqocu)) {
            goto ciusceaiyqsgwesy;
        }
        goto ieiwqquomwgcgasg;
        aoasseeyymigiuqg:
        kqgkgyyskmmomkuy:
        goto gasqiqwuuokswuak;
        cgmkwykqsuikugio:
        $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
        goto quwawmyimwumqiik;
        iyeukmoycqcoeoww:
        if (is_array($uomewyckeuqoqocu)) {
            goto kqgkgyyskmmomkuy;
        }
        goto cgmkwykqsuikugio;
        ieiwqquomwgcgasg:
        $aqykuigiuwmmcieu = implode("\x20", $uomewyckeuqoqocu);
        goto kemyesuyqgygsgmc;
        yuaeosigaqocaswy:
        ciusceaiyqsgwesy:
        goto agwwockuoekeayoe;
        agwwockuoekeayoe:
        $aqykuigiuwmmcieu = json_encode($uomewyckeuqoqocu);
        goto qqcagaaisccuygwq;
        ogoigckgkacomgsw:
    }
    
    public static function aoyseswaaaugicuq($uomewyckeuqoqocu, $oswgusmmccauqika = "\x22") : ?string
    {
        goto eiugaasyaiggaoem;
        koywwayicykawmsw:
        aqqaecewqeqyecge:
        goto iewuoiiumywkmwwi;
        oigewwwkwggioeom:
        if (!is_array($uomewyckeuqoqocu)) {
            goto imkcoqicusaaieiq;
        }
        goto gwciqqammeugmyic;
        eiugaasyaiggaoem:
        $aqykuigiuwmmcieu = '';
        goto oigewwwkwggioeom;
        yiooaygkcosiouiq:
        return rtrim($aqykuigiuwmmcieu, "\40");
        goto ikiqwwyuwiqkgoqq;
        iewuoiiumywkmwwi:
        imkcoqicusaaieiq:
        goto yiooaygkcosiouiq;
        gwciqqammeugmyic:
        foreach ($uomewyckeuqoqocu as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) {
            goto ioaiogagwmswaiyu;
            ckamssoyigceqkqe:
            if (preg_replace("\57\134\x73\53\57", '', $eqgoocgaqwqcimie)) {
                goto eaesqqacyqsmmasw;
            }
            goto oigskyaeyywyscoi;
            oqigaksscaygqcyg:
            ycyukikioeesmosk:
            goto sgsowgqykyceieqs;
            igawggssmuyywoiw:
            eaesqqacyqsmmasw:
            goto omsmasoumqusgusq;
            oigskyaeyywyscoi:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\x20";
            goto asecysweauowukym;
            sgsowgqykyceieqs:
            aceokuucoumoawei:
            goto uawiiskiyascymig;
            cucceeyaayakweic:
            $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie}\40";
            goto oqigaksscaygqcyg;
            omsmasoumqusgusq:
            if (is_numeric($ymqmyyeuycgmigyo)) {
                goto pgkmykoemkssyciw;
            }
            goto keoqugaesaeocwky;
            ioaiogagwmswaiyu:
            $eqgoocgaqwqcimie = self::skyucqyswomguscg($eqgoocgaqwqcimie);
            goto ckamssoyigceqkqe;
            asecysweauowukym:
            goto aceokuucoumoawei;
            goto igawggssmuyywoiw;
            kyycgosayogwiose:
            goto ycyukikioeesmosk;
            goto uikosuscmyagkucg;
            uawiiskiyascymig:
            ogcucyqcaawqsikk:
            goto mwgogaswksgaiggw;
            keoqugaesaeocwky:
            $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}\75{$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika}\40";
            goto kyycgosayogwiose;
            uikosuscmyagkucg:
            pgkmykoemkssyciw:
            goto cucceeyaayakweic;
            mwgogaswksgaiggw:
        }
        goto koywwayicykawmsw;
        ikiqwwyuwiqkgoqq:
    }
    
    public static function kqmkicmuscsgqeoi($ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii[self::ICON] = ManipulateArray::get($ywmkwiwkosakssii, self::ICON, IconFontawesomeInterface::ICON_SPINNER_THIRD);
        return Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::SPINNER_TEMPLATE_PATH, $ywmkwiwkosakssii);
    }
    
    public static function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array
    {
        goto usukgagsmcsgayiq;
        euuweiukuiuwcuym:
        qqyeoguyyawwacyi:
        goto imscuiceoqcqeuec;
        qaaeckkicouagsiq:
        oogauyisucksqwgq:
        goto wiwcgyekioquskkg;
        wiwcgyekioquskkg:
        return $sysgmomuyiiawwcm;
        goto qeiygiiuygamegkq;
        usukgagsmcsgayiq:
        if (!$gcegymooyemmaysk) {
            goto oogauyisucksqwgq;
        }
        goto mwqksegiysmkmase;
        imscuiceoqcqeuec:
        $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk);
        goto qaaeckkicouagsiq;
        mwqksegiysmkmase:
        foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) {
            goto moaekmimicakwisg;
            ouwsgqaiqguiomym:
            $sysgmomuyiiawwcm[$uusmaiomayssaecw] = self::igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee);
            goto cmgkyyywsqscoeia;
            moaekmimicakwisg:
            if (!isset($gcegymooyemmaysk[$uusmaiomayssaecw])) {
                goto igcogeumkiyaiekm;
            }
            goto ouwsgqaiqguiomym;
            wkgossscggiwwgqi:
            waqguwsseiamucog:
            goto ucwqokwamqeiyauo;
            cwukciqgyiykkmme:
            igcogeumkiyaiekm:
            goto wkgossscggiwwgqi;
            cmgkyyywsqscoeia:
            unset($gcegymooyemmaysk[$uusmaiomayssaecw]);
            goto cwukciqgyiykkmme;
            ucwqokwamqeiyauo:
        }
        goto euuweiukuiuwcuym;
        qeiygiiuygamegkq:
    }
    
    public static function cmsgeysmsqqogeki($uomewyckeuqoqocu, $yygmoeguaqyumuui)
    {
        goto syqumcoogeoweeys;
        ausgcikksecieweq:
        return $uomewyckeuqoqocu;
        goto coyaogkqscweiqwk;
        emiocgskkaieaygu:
        kwyosousqcwgcaqq:
        goto ausgcikksecieweq;
        syqumcoogeoweeys:
        foreach ($yygmoeguaqyumuui as $msqkueqksqwmskak => $uwomkgseoiegeume) {
            goto uciwcwkusqqwicyi;
            uciwcwkusqqwicyi:
            if (!isset($uomewyckeuqoqocu[$msqkueqksqwmskak])) {
                goto woysagioiaegygiw;
            }
            goto qycyyqyaseuqsoss;
            qycyyqyaseuqsoss:
            $uomewyckeuqoqocu[$uwomkgseoiegeume] = $uomewyckeuqoqocu[$msqkueqksqwmskak];
            goto wsokcmgygywqyuki;
            wsokcmgygywqyuki:
            ManipulateArray::unset($uomewyckeuqoqocu, $msqkueqksqwmskak);
            goto smaemsgsuyckcasg;
            sgguweyyyiqmkakc:
            asayowukiisowcoo:
            goto cuqqecwymouycgau;
            smaemsgsuyckcasg:
            woysagioiaegygiw:
            goto sgguweyyyiqmkakc;
            cuqqecwymouycgau:
        }
        goto emiocgskkaieaygu;
        coyaogkqscweiqwk:
    }
    
    public static function gmqyuaqwgiayskei($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\163\x70\x61\x6e", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false, $qawsmigsyysqwmeq = false)
    {
        goto owyskyccqsykiakm;
        kiuosoowseuwkues:
        return $nsmgceoqaqogqmuw;
        goto gycossqqauwkeusa;
        csaagucuusgmywum:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\151\x63\x6f\156\x5f\x61\164\x74\162\x69\x62\x75\164\145\x73", $wwgucssaecqekuek, $wkaqekwwgqsqwcoi);
        goto ywmuaqcsgamygwmc;
        aceymkkwuiwokgqa:
        $wkaqekwwgqsqwcoi = Template::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc, $qawsmigsyysqwmeq);
        goto goikkusagcqiueia;
        goikkusagcqiueia:
        goto kyecumuyuyygkoou;
        goto ekumceoygmcomees;
        gygiwsukqcagwaag:
        aygsaywukmgmmmga:
        goto mqseemqskkccscao;
        wumysioiwaowecwu:
        eewyeiukoacqwemo:
        goto csaagucuusgmywum;
        mqseemqskkccscao:
        $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy("\151\143\x6f\156\x5f\x68\x74\x6d\x6c", $wkaqekwwgqsqwcoi);
        goto uckisgqukuaiesow;
        gssggekuuyieykma:
        if (!$wkaqekwwgqsqwcoi) {
            goto qiayaasuoqeekmeo;
        }
        goto ussaosamaumyaucq;
        sqmsyiusquicscmk:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\163", "\160\162\55\x69\x63\x6f\156");
        goto iugwomcaqisasuky;
        amseqymsmoukemqc:
        $wkaqekwwgqsqwcoi = ManipulateAttachment::mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi);
        goto soiyeoosqoccwgok;
        soiyeoosqoccwgok:
        kyecumuyuyygkoou:
        goto wumysioiwaowecwu;
        ywmuaqcsgamygwmc:
        if ($gskuwmeemyeuwogc) {
            goto ioequayqasmcmsyw;
        }
        goto kaasmkwkyekaqmao;
        kaasmkwkyekaqmao:
        $wwgucssaecqekuek["\x73\162\x63"] = $wkaqekwwgqsqwcoi;
        goto skwaemgcggqqakyk;
        ekumceoygmcomees:
        iaiwayowckokiyiy:
        goto amseqymsmoukemqc;
        ussaosamaumyaucq:
        if (ManipulateValidation::wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) {
            goto eewyeiukoacqwemo;
        }
        goto sqmsyiusquicscmk;
        uckisgqukuaiesow:
        qiayaasuoqeekmeo:
        goto kiuosoowseuwkues;
        okkckkmewkiysyeg:
        ioequayqasmcmsyw:
        goto ywqeggecuccqewii;
        iugwomcaqisasuky:
        if (ManipulateAttachment::aauyuieeeaakygki($wkaqekwwgqsqwcoi)) {
            goto iaiwayowckokiyiy;
        }
        goto aceymkkwuiwokgqa;
        ukqksoomoiqkqeuy:
        goto aygsaywukmgmmmga;
        goto okkckkmewkiysyeg;
        skwaemgcggqqakyk:
        $wkaqekwwgqsqwcoi = self::uuccukgasskgimsq("\151\155\x67", $wwgucssaecqekuek);
        goto ukqksoomoiqkqeuy;
        owyskyccqsykiakm:
        $nsmgceoqaqogqmuw = '';
        goto gssggekuuyieykma;
        ywqeggecuccqewii:
        $wkaqekwwgqsqwcoi = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        goto gygiwsukqcagwaag;
        gycossqqauwkeusa:
    }
    
    public static function ciuuiyckmsygceis($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\x73\x74\162\x6f\156\x67", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function icqkogwskuwscskk($ywmkwiwkosakssii = [], $gskauacumcmekigs = []) : string
    {
        goto cyawyoyeemeumigc;
        iqegieggskwqccou:
        if (!$gskauacumcmekigs) {
            goto iysgqwiceiuegqmm;
        }
        goto swmmycgkeqaeswwq;
        ymikiweaoykkcyiw:
        ssiskmwmkioiekyc:
        goto aqqsoockoussgmqg;
        cyawyoyeemeumigc:
        $qsqwqsymmqeoqwcu = ManipulateFormat::omaawkkwwyesqwcc(self::uskieqmcqyecigmy(array_merge($ywmkwiwkosakssii, ["\x6a\x73\157\x6e" => false])), ["\x76\x69\145\x77" => "\x64\x69\141\154\157\x67", "\x70\162\145\146\x69\170" => "\x67\x65\x6e\x65\x72\141\154", "\163\160\x69\x6e\x6e\145\x72" => false, "\143\154\x6f\x73\x65\137\164\x69\x74\154\145" => __("\x43\154\157\x73\145", PR__CMN__FOUNDATION)]);
        goto sigkaiakeykkoqsu;
        omgieamuywawmkgc:
        $ewgwqamkygiqaawc = $meqocwsecsywiiqs;
        goto siymueswymqkwekm;
        paawyasioggcocqk:
        return $nsmgceoqaqogqmuw;
        goto uiiyokqogawyeiec;
        wgiegisukosmmeak:
        $wwgucssaecqekuek["\x68\x72\x65\146"] = "\x23";
        goto ymikiweaoykkcyiw;
        wuqwcogkmmqscwce:
        $meqocwsecsywiiqs = ManipulateArray::get($gskauacumcmekigs, "\x74\x69\164\154\145");
        goto umgqoisouauoeigc;
        sigkaiakeykkoqsu:
        if (ManipulateArray::get($qsqwqsymmqeoqwcu, "\x70\162\145\146\151\170", '')) {
            goto oskcyycaeyocgkmk;
        }
        goto qymqsuuewomqcaeo;
        sogiywcegssacgsu:
        iysgqwiceiuegqmm:
        goto paawyasioggcocqk;
        aqqsoockoussgmqg:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\x73\x73", "\x70\x72\55\x63\x6f\x6e\146\151\x72\155\x61\142\x6c\145\55\x61\x63\x74\x69\157\x6e");
        goto seasawiyoeiuucac;
        siymueswymqkwekm:
        wkcoeuicokyouscs:
        goto yoqmmikkokomsacw;
        aykcawmeuucgmwea:
        $nsmgceoqaqogqmuw = Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::MODAL_TEMPLATE_PATH, $qsqwqsymmqeoqwcu);
        goto iqegieggskwqccou;
        wguiigwuqauaaoeu:
        $wwgucssaecqekuek["\x64\x61\164\141\x2d\x6d\x6f\144\x61\154"] = ManipulateArray::get($qsqwqsymmqeoqwcu, "\160\162\145\x66\151\x78", "\147\x65\156\145\162\x61\154") . "\137\155\157\144\141\154";
        goto qecuwsgaqewyysai;
        qecuwsgaqewyysai:
        if (!($kqywgoqsmuswammk == "\141" && !ManipulateArray::get($wwgucssaecqekuek, "\x68\x72\145\x66", false))) {
            goto ssiskmwmkioiekyc;
        }
        goto wgiegisukosmmeak;
        yoqmmikkokomsacw:
        $nsmgceoqaqogqmuw .= self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
        goto sogiywcegssacgsu;
        swmmycgkeqaeswwq:
        $wwgucssaecqekuek = ManipulateArray::get($gskauacumcmekigs, "\x61\x74\x74\162\x73", []);
        goto wuqwcogkmmqscwce;
        seasawiyoeiuucac:
        $ewgwqamkygiqaawc = ManipulateArray::unset($gskauacumcmekigs, "\x63\x6f\x6e\164\x65\156\164");
        goto kkgceegequyiasgs;
        qymqsuuewomqcaeo:
        _doing_it_wrong(__FUNCTION__, __("\x70\x6c\x65\x61\163\x65\40\x73\x70\145\x63\x69\146\171\x20\141\40\x70\x72\x65\146\151\x78\40\x66\x6f\162\x20\146\157\x72\40\x6d\x6f\144\x61\154", PR__CMN__FOUNDATION), 1);
        goto euaoayywcugwiqcs;
        kkgceegequyiasgs:
        if ($ewgwqamkygiqaawc) {
            goto wkcoeuicokyouscs;
        }
        goto omgieamuywawmkgc;
        umgqoisouauoeigc:
        $kqywgoqsmuswammk = ManipulateArray::get($gskauacumcmekigs, "\x65\x6c\145\x6d\145\x6e\164", "\x62\x75\x74\164\157\x6e");
        goto wguiigwuqauaaoeu;
        euaoayywcugwiqcs:
        oskcyycaeyocgkmk:
        goto aykcawmeuucgmwea;
        uiiyokqogawyeiec:
    }
    
    public static function igmaewykumgwoaoy($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto cossouqayakwquwq;
        yusiukmgiqcycoyw:
        $wisgiwskwawciiee = $siquossayskcwkea->{$uusmaiomayssaecw};
        goto geoqmawmyksikoyk;
        omcqkauyquamiwkw:
        goto waakcieqeowcyces;
        goto uweqegqcewaiwgeo;
        acmqcaimwssoqwcu:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode("\x20", $eqgoocgaqwqcimie));
        goto gcogkoymaecaouei;
        uweqegqcewaiwgeo:
        omokwaassiaqugwi:
        goto caosicamgweuouqy;
        wkkoyqmigawkyoww:
        if (is_array($eqgoocgaqwqcimie)) {
            goto ieyqwwmaaeigusck;
        }
        goto ukoqmmisagkuskku;
        wgsgyisoiwmyqgsy:
        msioicqugygwksci:
        goto ossgegmcqmikiako;
        aoamgmomuauiaomq:
        if (is_object($siquossayskcwkea)) {
            goto omokwaassiaqugwi;
        }
        goto ykmomgoksisygqmi;
        wgcuscwuwmiumqag:
        scqeiomoywugwmgm:
        goto mqwsuaogooqyusmg;
        ukoqmmisagkuskku:
        if (!is_string($eqgoocgaqwqcimie)) {
            goto scqeiomoywugwmgm;
        }
        goto ggakeykgaywwuico;
        mqwsuaogooqyusmg:
        goto icuiiyecyaosmkig;
        goto akqqwkcyeiuguaee;
        ogywoqseeawwouuu:
        goto msioicqugygwksci;
        goto quakaiyiukaeoggu;
        gqckiowescyoycek:
        uiqemmagesmiamcu:
        goto omcqkauyquamiwkw;
        ggakeykgaywwuico:
        $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode("\40", $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . "\40" . $eqgoocgaqwqcimie);
        goto wgcuscwuwmiumqag;
        yiqsyymaccyskgka:
        $wisgiwskwawciiee = '';
        goto icwmksqayogauieq;
        akqqwkcyeiuguaee:
        ieyqwwmaaeigusck:
        goto acmqcaimwssoqwcu;
        mmkyoekoacqmsiug:
        eksoacmagqswgeuq:
        goto wgsgyisoiwmyqgsy;
        uwcmqocsckgoycos:
        if (is_array($siquossayskcwkea)) {
            goto aooqissygemgsigy;
        }
        goto eyoqguiuawqqmqsq;
        qucqsuqgimegkagu:
        $wisgiwskwawciiee = '';
        goto ymskiasoemcgoywc;
        uyeskyscwoaceaum:
        ooimgcqywgokcika:
        goto yusiukmgiqcycoyw;
        oasooegcuaqyaksa:
        ooqikkgwocykeiuu:
        goto uokesuqoiakammsq;
        ckawyuougmawuagq:
        waakcieqeowcyces:
        goto cseosawememugocs;
        gcogkoymaecaouei:
        icuiiyecyaosmkig:
        goto aoamgmomuauiaomq;
        omegwywwowgccqgc:
        goto rkymcyiuygsasous;
        goto uiwwomawycusiaqc;
        eaoooeokgceokgym:
        $wisgiwskwawciiee = $siquossayskcwkea;
        goto uygkaowwykyuwcms;
        eikgkciokyogmmae:
        $siquossayskcwkea = $wisgiwskwawciiee;
        goto omegwywwowgccqgc;
        aymaycgmskceqaoo:
        wkimauiikcmicukk:
        goto qmssemegysygmmig;
        wikocscgqkqoeyag:
        if ($uusmaiomayssaecw) {
            goto kyyeiymsouaoaiga;
        }
        goto eaoooeokgceokgym;
        icwmksqayogauieq:
        goto kscyscauewimmgme;
        goto uyeskyscwoaceaum;
        wyyumeauogsokwwy:
        sssossmaugysoosg:
        goto wkkoyqmigawkyoww;
        uygkaowwykyuwcms:
        goto eksoacmagqswgeuq;
        goto kakkcssaiwwuieig;
        caosicamgweuouqy:
        $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee;
        goto ckawyuougmawuagq;
        uokesuqoiakammsq:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto mqismiccqmeaacmm;
        uiwwomawycusiaqc:
        eacgwgwwwaeoeeee:
        goto qsgqsgqoasquyegw;
        cseosawememugocs:
        return $siquossayskcwkea;
        goto wiggagegkomwsigy;
        qmssemegysygmmig:
        if (isset($siquossayskcwkea->{$uusmaiomayssaecw})) {
            goto ooimgcqywgokcika;
        }
        goto yiqsyymaccyskgka;
        geoqmawmyksikoyk:
        kscyscauewimmgme:
        goto wyyumeauogsokwwy;
        qsgqsgqoasquyegw:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto eckqwskioaqieuiw;
        ymskiasoemcgoywc:
        goto gouysqqakyeugcyq;
        goto oasooegcuaqyaksa;
        kiwsouqmoaeuwcyi:
        if ($uusmaiomayssaecw) {
            goto eacgwgwwwaeoeeee;
        }
        goto eikgkciokyogmmae;
        qgcaikicmyiaiqyo:
        if (isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto ooqikkgwocykeiuu;
        }
        goto qucqsuqgimegkagu;
        quakaiyiukaeoggu:
        aooqissygemgsigy:
        goto wikocscgqkqoeyag;
        ossgegmcqmikiako:
        goto sssossmaugysoosg;
        goto aymaycgmskceqaoo;
        ykmomgoksisygqmi:
        if (!is_array($siquossayskcwkea)) {
            goto uiqemmagesmiamcu;
        }
        goto kiwsouqmoaeuwcyi;
        eyoqguiuawqqmqsq:
        return trim($siquossayskcwkea . "\x20" . (is_array($eqgoocgaqwqcimie) ? implode("\40", $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie));
        goto ogywoqseeawwouuu;
        eckqwskioaqieuiw:
        rkymcyiuygsasous:
        goto gqckiowescyoycek;
        kakkcssaiwwuieig:
        kyyeiymsouaoaiga:
        goto qgcaikicmyiaiqyo;
        mqismiccqmeaacmm:
        gouysqqakyeugcyq:
        goto mmkyoekoacqmsiug;
        cossouqayakwquwq:
        if (is_object($siquossayskcwkea) && $uusmaiomayssaecw) {
            goto wkimauiikcmicukk;
        }
        goto uwcmqocsckgoycos;
        wiggagegkomwsigy:
    }
    
    public static function gusouagusgyoaeya($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq("\160", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function yekemqwyimcqgeuk($ewgwqamkygiqaawc, $ekasyoagocygouom, $wwgucssaecqekuek = []) : string
    {
        $wwgucssaecqekuek["\144\141\x74\145\x74\151\155\145"] = $ekasyoagocygouom;
        return self::uuccukgasskgimsq("\x74\x69\x6d\x65", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy = [], $wwgucssaecqekuek = []) : string
    {
        goto wiuaoykkoqsqcciu;
        ewseyicyoqscoyic:
        if (!$uykgysuswksgmwqy) {
            goto wqqayaqgqaokkewk;
        }
        goto ywigugwyqieqkcoe;
        sqgkwwsqomcqewuu:
        foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) {
            goto ymuwsmqieegccmec;
            wsyouakcyuwgsmmq:
            $ecuqamumceeoyiui["\144\x61\x74\x61\55\153\145\x79"] = "\164\x72\55{$momcykaoccoymeig}";
            goto iiosuiiicgmwuquu;
            usgequsgggeskams:
            foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) {
                goto ymiiiqccumeseqgg;
                ugsyacuawyeqcywk:
                $ykaygkcscgyoiiae .= self::uuccukgasskgimsq("\x74\144", ["\144\x61\x74\141\55\153\145\x79" => "\x74\144\55{$uusmaiomayssaecw}\55{$momcykaoccoymeig}"], $yycqiageqkquoioq);
                goto qogkwuqcauywuqyy;
                ymiiiqccumeseqgg:
                if (!($uusmaiomayssaecw == "\x74\x72\137\x61\164\x74\162\x73")) {
                    goto uweweeiagegyukye;
                }
                goto sqkaggmqmkgwkimu;
                qwssywogokmegcwg:
                uweweeiagegyukye:
                goto ugsyacuawyeqcywk;
                qogkwuqcauywuqyy:
                yasaysggqceikmye:
                goto gggawowkmoygokiu;
                sqkaggmqmkgwkimu:
                goto yasaysggqceikmye;
                goto qwssywogokmegcwg;
                gggawowkmoygokiu:
            }
            goto iqkuskokswaoiosy;
            iqkuskokswaoiosy:
            gcwekuwcsakcsyiu:
            goto eaaaqmqycgcqiaee;
            guqgcsmiuskcawsy:
            agkccauguemomgyi:
            goto kmckgogusyyoyiia;
            ymuwsmqieegccmec:
            $ykaygkcscgyoiiae = '';
            goto usgequsgggeskams;
            eaaaqmqycgcqiaee:
            $ecuqamumceeoyiui = ManipulateArray::get($keuwuekioomqqaey, "\164\x72\x5f\141\164\x74\162\x73", []);
            goto wsyouakcyuwgsmmq;
            iiosuiiicgmwuquu:
            $ymoekaoqgqmmgoqk .= self::uuccukgasskgimsq("\164\162", $ecuqamumceeoyiui, $ykaygkcscgyoiiae);
            goto guqgcsmiuskcawsy;
            kmckgogusyyoyiia:
        }
        goto eukmgmmseugskiio;
        qgeeemyaomggagku:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\164\150\145\x61\144", [], $kakckmgscyiskome);
        goto ksmkyewagskkoeok;
        mgcymqumaiwgmswy:
        ecqymkukooyucuao:
        goto qgeeemyaomggagku;
        uasiqigosyqwisuq:
        if (!is_array($essikcmqiyqaqoaq)) {
            goto yyeuoiccgweskqgw;
        }
        goto gaukmueogumwwwmi;
        uuckosesigqwyykq:
        $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk;
        goto ywcomywyegmgoiqc;
        geigqkwcacssimqk:
        return self::uuccukgasskgimsq("\164\141\142\x6c\145", $wwgucssaecqekuek, $ewgwqamkygiqaawc);
        goto mykcwaiwmsyaacog;
        wiuaoykkoqsqcciu:
        $ewgwqamkygiqaawc = '';
        goto ewseyicyoqscoyic;
        esmwouucumeuaaiq:
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\x73", "\164\141\142\x6c\x65\x20\x6d\55\60");
        goto geigqkwcacssimqk;
        ywigugwyqieqkcoe:
        $kakckmgscyiskome = '';
        goto egeesoksqmwwsuoe;
        egeesoksqmwwsuoe:
        foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) {
            $kakckmgscyiskome .= self::uuccukgasskgimsq("\164\150", ["\144\141\164\x61\55\x6b\145\171" => "\x74\150\x2d{$uusmaiomayssaecw}", "\143\154\x61\x73\x73" => "\x74\145\x78\164\x2d\154\145\146\x74"], $kmmmiumuegqmksky);
            memoemokqyckwuam:
        }
        goto mgcymqumaiwgmswy;
        ksmkyewagskkoeok:
        wqqayaqgqaokkewk:
        goto uasiqigosyqwisuq;
        eukmgmmseugskiio:
        uykcwaomeewcauqm:
        goto uuckosesigqwyykq;
        mgqgsoaoauaoioku:
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq("\164\142\157\x64\171", [], $essikcmqiyqaqoaq);
        goto esmwouucumeuaaiq;
        gaukmueogumwwwmi:
        $ymoekaoqgqmmgoqk = '';
        goto sqgkwwsqomcqewuu;
        ywcomywyegmgoiqc:
        yyeuoiccgweskqgw:
        goto mgqgsoaoauaoioku;
        mykcwaiwmsyaacog:
    }
    
    public static function sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $mogykyiukkoqceec = 6) : string
    {
        goto kcuquqyuoqukkiae;
        koeaocaigyiuouma:
        $giwamsoicooomueg = '';
        goto csuyiuccwoewwymw;
        kcuquqyuoqukkiae:
        if (!is_array($qgqgaykggoemycsk)) {
            goto cewwgkwqeuayygeq;
        }
        goto mkmewusqskqwyiga;
        csuyiuccwoewwymw:
        if (!$qgqgaykggoemycsk) {
            goto eyosqwqswsqcuekw;
        }
        goto ugcgciqmmuumiwss;
        ugcgciqmmuumiwss:
        $wkkweuacukumqmya = array_filter(explode("\143\157\x6c\x2d", $qgoqiacsiccwoawi));
        goto cucwasiugcaiugkw;
        ssgusiykmcsmacke:
        myacgeqsygaaicsw:
        goto yseiyiawimkkgwgu;
        cucwasiugcaiugkw:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto ymmooquwukiemiuu;
            uawqemsmoegqwcys:
            $gcgsqcoqciockquc = "\x2d{$gcgsqcoqciockquc}";
            goto ewoqemggggmuiicc;
            ycgeiokgsmiwocco:
            eiyeysucoukeiqii:
            goto wykcswiwacwksyeo;
            ckyaekugwcaaogua:
            gqqsowqiouwisway:
            goto ycgeiokgsmiwocco;
            ymmooquwukiemiuu:
            $eqgoocgaqwqcimie = explode("\55", $qgoqiacsiccwoawi);
            goto iquuyccmwaqmeiwc;
            gqwciegucimkisai:
            $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi;
            goto ouokoaqgueuukoes;
            egioqiaqgkcociok:
            gucssmauyukceoiu:
            goto waeogmkyweaagquk;
            aumekwowaoymcamo:
            if (!$gcgsqcoqciockquc) {
                goto sskgwegakoyqqkku;
            }
            goto uawqemsmoegqwcys;
            qgigwkeaoogkycqq:
            goto gqqsowqiouwisway;
            goto ieamiiycguksgyae;
            giyuysmwumkyayiq:
            maqacaoweqmyiuua:
            goto gqwciegucimkisai;
            cyawmgceseyseywk:
            $gcgsqcoqciockquc = '';
            goto wkmksaskwoeiqgqq;
            aeeygmyoycocsaow:
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1];
            goto qukgkymacqckmyoq;
            scimwiammysocuma:
            if (!($aoqagsqecokqqwqg == $ykiwomimkkuiigoq)) {
                goto yceuaweskqgkyccw;
            }
            goto museocscicoguyic;
            mggmcgicyksgeoga:
            $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi;
            goto scimwiammysocuma;
            ewoqemggggmuiicc:
            sskgwegakoyqqkku:
            goto kmoaiymaumccccmw;
            keeikoymoqwakmuc:
            
            $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0];
            goto aeeygmyoycocsaow;
            kgmwksacomoyiemk:
            if (!($gaeqamemwmwsyukm == 2)) {
                goto qyigcogcwakysqwo;
            }
            goto keeikoymoqwakmuc;
            iquuyccmwaqmeiwc:
            $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie);
            goto cyawmgceseyseywk;
            qukgkymacqckmyoq:
            qyigcogcwakysqwo:
            goto myogiyogisykoogo;
            quaqcuogeasmkwum:
            $giwamsoicooomueg .= "\x20\155\142{$gcgsqcoqciockquc}\55{$mogykyiukkoqceec}";
            goto qgigwkeaoogkycqq;
            kmoaiymaumccccmw:
            if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) {
                goto iauuciyimekqwsqe;
            }
            goto quaqcuogeasmkwum;
            wkmksaskwoeiqgqq:
            if ($gaeqamemwmwsyukm == 1) {
                goto gucssmauyukceoiu;
            }
            goto kgmwksacomoyiemk;
            ouokoaqgueuukoes:
            $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length;
            goto mggmcgicyksgeoga;
            qcgikckikqqwewqg:
            yceuaweskqgkyccw:
            goto aumekwowaoymcamo;
            scgooimgesucqmyw:
            $giwamsoicooomueg .= "\40\x6d\x62{$gcgsqcoqciockquc}\x2d\60";
            goto ckyaekugwcaaogua;
            waeogmkyweaagquk:
            
            $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0];
            goto giyuysmwumkyayiq;
            myogiyogisykoogo:
            goto maqacaoweqmyiuua;
            goto egioqiaqgkcociok;
            museocscicoguyic:
            $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi;
            goto qcgikckikqqwewqg;
            ieamiiycguksgyae:
            iauuciyimekqwsqe:
            goto scgooimgesucqmyw;
            wykcswiwacwksyeo:
        }
        goto ssgusiykmcsmacke;
        yseiyiawimkkgwgu:
        eyosqwqswsqcuekw:
        goto ayiuauyqkcycymiq;
        ykagosqgwoyewmsm:
        cewwgkwqeuayygeq:
        goto koeaocaigyiuouma;
        ayiuauyqkcycymiq:
        return rtrim($giwamsoicooomueg);
        goto iykoiouoygaumuak;
        mkmewusqskqwyiga:
        $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ["\x69\156\144\x65\170", "\x6c\x65\x6e\x67\164\x68"]);
        goto ykagosqgwoyewmsm;
        iykoiouoygaumuak:
    }
    
    public static function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto mqiuuuiuyieomgsm;
        ymqgkiswgyiwkiee:
        wasokaaaiesgoiwu:
        goto mmocggcuysgcayqs;
        aqmyaskcyisumkec:
        skiieiyqgwecickk:
        goto sceiisuuogsqyaua;
        cgouooqwgiessagu:
        if (!in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee)) {
            goto wasokaaaiesgoiwu;
        }
        goto zkyyykgsamwwykec;
        oeogicauwqmuckmc:
        $wisgiwskwawciiee = implode("\x20", $wisgiwskwawciiee);
        goto ggcqsikuoaowocia;
        eycywwwuywwiewae:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto esouewuuwooociii;
        }
        goto mkuiaigaaiiusgcw;
        mqiuuuiuyieomgsm:
        $ukwmeuiywasikwcu = false;
        goto iewaqqoywiiueooc;
        ykeywoiececiccqk:
        return $siquossayskcwkea;
        goto icaoeusmweymiows;
        mekuokossigwmiay:
        $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea));
        goto ayassegeqauesegc;
        ykywwwymygscykam:
        scikcooocqiscwuk:
        goto mekuokossigwmiay;
        gmaokugqemkqaymu:
        unset($wisgiwskwawciiee[$ccamueccusigaaio]);
        goto camisusksgocgiyu;
        xaoaqqukaokieeos:
        if (!is_string($wisgiwskwawciiee)) {
            goto skiieiyqgwecickk;
        }
        goto oeegwqskokyysgia;
        iewaqqoywiiueooc:
        if (is_string($siquossayskcwkea)) {
            goto scikcooocqiscwuk;
        }
        goto eycywwwuywwiewae;
        oeegwqskokyysgia:
        $wisgiwskwawciiee = explode("\40", $wisgiwskwawciiee);
        goto yaowsqucwakaesoi;
        kyqgyywuaqkskkmq:
        if (!$ukwmeuiywasikwcu) {
            goto ocmaakqeqigyqmcm;
        }
        goto oeogicauwqmuckmc;
        cykquwwqoyuqacka:
        goto wgqacmwcgiemyqsm;
        goto ykywwwymygscykam;
        ggcqsikuoaowocia:
        ocmaakqeqigyqmcm:
        goto wcqmkqkoekwggcaq;
        yaowsqucwakaesoi:
        $ukwmeuiywasikwcu = true;
        goto aqmyaskcyisumkec;
        sceiisuuogsqyaua:
        if (!is_array($wisgiwskwawciiee)) {
            goto yougiukokiwueagg;
        }
        goto cgouooqwgiessagu;
        ugsucquekakgyyoe:
        esouewuuwooociii:
        goto cykquwwqoyuqacka;
        mmocggcuysgcayqs:
        yougiukokiwueagg:
        goto ugsucquekakgyyoe;
        wcqmkqkoekwggcaq:
        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
        goto ymqgkiswgyiwkiee;
        ayassegeqauesegc:
        wgqacmwcgiemyqsm:
        goto ykeywoiececiccqk;
        zkyyykgsamwwykec:
        if (!(($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee)) !== false)) {
            goto gkqqeoyqwmaqweus;
        }
        goto gmaokugqemkqaymu;
        mkuiaigaaiiusgcw:
        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
        goto xaoaqqukaokieeos;
        camisusksgocgiyu:
        gkqqeoyqwmaqweus:
        goto kyqgyywuaqkskkmq;
        icaoeusmweymiows:
    }
    
    public static function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $siquossayskcwkea;
    }
    
    public static function wouimaqqweceiamk($iwamiguusayooguq, $wkaqekwwgqsqwcoi = '') : string
    {
        goto euqwyueoiyaciwmu;
        csmmacecmeiqukou:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true);
        goto auamqueygsmcgeua;
        esgcqqwkiqagqcqu:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\x73", "\155\171\x2d\x61\x75\164\x6f\40\151\x63\x6f\156\x2d\163\155\x20\x6d\x72\x2d\x32");
        goto csmmacecmeiqukou;
        diqmggkiascwcmgo:
        sayimokgekmuieyc:
        goto esgcqqwkiqagqcqu;
        smueyuiwaswcmmyq:
        return self::qgsekwygcgawekeq("\x64\x69\166", ["\x63\x6c\141\x73\x73" => "\160\162\55\155\157\x64\141\x6c\x2d\x67\165\x69\x64\x65\x20\144\x2d\x66\x6c\145\170"], true, $wkaqekwwgqsqwcoi . $iwamiguusayooguq);
        goto akwwymwisyauswko;
        auamqueygsmcgeua:
        awyisykkykwugmcs:
        goto smueyuiwaswcmmyq;
        wecqeaiwiowwougo:
        if (!is_array($wkaqekwwgqsqwcoi)) {
            goto sayimokgekmuieyc;
        }
        goto qgoesugiyiiqgaka;
        mmkeguscoeyqgsaq:
        if (!$wkaqekwwgqsqwcoi) {
            goto awyisykkykwugmcs;
        }
        goto woemqeiusiyyycao;
        qgoesugiyiiqgaka:
        $wwgucssaecqekuek = ManipulateArray::get($wkaqekwwgqsqwcoi, "\141\x74\x74\162\163", []);
        goto igwuuiisiiiacqog;
        woemqeiusiyyycao:
        $wwgucssaecqekuek = [];
        goto wecqeaiwiowwougo;
        euqwyueoiyaciwmu:
        $iwamiguusayooguq = self::qgsekwygcgawekeq("\x73\x70\141\156", ["\x63\154\141\x73\x73" => "\155\x79\x2d\141\165\x74\x6f"], true, $iwamiguusayooguq);
        goto mmkeguscoeyqgsaq;
        igwuuiisiiiacqog:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($wkaqekwwgqsqwcoi, "\151\143\x6f\156", '');
        goto diqmggkiascwcmgo;
        akwwymwisyauswko:
    }
    
    public static function ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw, $iqaosyayeiuaisqi = false) : string
    {
        goto qigqugqceqksaoaq;
        wowqwsgksqqqmucw:
        foreach ($uamcoiueqaamsqma as $yaakimaumwqiaeei) {
            $suuagcecoyuweoqk .= self::uuccukgasskgimsq("\x6c\151", [], $yaakimaumwqiaeei);
            ugyquwcqwgkykyom:
        }
        goto oqwqqsiygukqweey;
        uoioeqiqmewckqwq:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\x64\151\166", ["\143\x6c\x61\163\x73" => "\x74\145\170\164\55\x63\145\156\164\x65\x72\40\155\x6f\144\141\x6c\55\155\x65\163\163\x61\x67\x65\40\155\157\x64\x61\x6c\55\155\145\163\163\x61\x67\145\55" . ($iqaosyayeiuaisqi ? $iqaosyayeiuaisqi : ($occymigcemkqucuw ? "\163\x75\143\x63\x65\x73\x73" : "\x64\141\x6e\x67\145\x72"))], $uamcoiueqaamsqma);
        goto ecqkiigukgcscequ;
        qigqugqceqksaoaq:
        if (!is_array($uamcoiueqaamsqma)) {
            goto kosquscyqqgygykc;
        }
        goto cwsmeosaaeaamosg;
        oqwqqsiygukqweey:
        auqmkwoggqyaskcq:
        goto mugcawkwqggykqkq;
        mugcawkwqggykqkq:
        $uamcoiueqaamsqma = self::uuccukgasskgimsq("\x75\154", [], $suuagcecoyuweoqk);
        goto aqgeqqeaykqsqqyy;
        aqgeqqeaykqsqqyy:
        kosquscyqqgygykc:
        goto gkqcgyeqkcisqgck;
        ecqkiigukgcscequ:
        caykkyawcquykaig:
        goto egwsiqoumyssgaiw;
        cwsmeosaaeaamosg:
        $suuagcecoyuweoqk = '';
        goto wowqwsgksqqqmucw;
        egwsiqoumyssgaiw:
        return $uamcoiueqaamsqma;
        goto gecomumkgckmoicc;
        gkqcgyeqkcisqgck:
        if (!is_string($uamcoiueqaamsqma)) {
            goto caykkyawcquykaig;
        }
        goto uoioeqiqmewckqwq;
        gecomumkgckmoicc:
    }
    
    public static function uskieqmcqyecigmy($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\142\165\164\164\157\156")
    {
        goto cycuoasiccouwyqw;
        eiceowycmoycqkuk:
        if (!in_array("\143\x61\156\x63\145\x6c", $qyukicweqoisimwg)) {
            goto quiscsoaasusqsii;
        }
        goto oimimqggwmcwcayu;
        oucesaewqyuwiiqg:
        $qyukicweqoisimwg = ManipulateArray::get($ywmkwiwkosakssii, "\x62\165\x74\164\x6f\x6e\x73", []);
        goto gmugaowewyiyooea;
        oimimqggwmcwcayu:
        $qyukicweqoisimwg[array_search("\x63\141\x6e\x63\x65\x6c", $qyukicweqoisimwg)] = ["\x63\154\141\x73\x73" => "\142\164\x6e\x20\x62\x74\156\x2d\x6f\165\164\154\x69\x6e\x65\55\160\x72\x69\x6d\x61\162\x79", "\164\151\x74\154\x65" => __("\x43\x61\x6e\143\x65\154", PR__CMN__FOUNDATION), "\x64\x69\x73\x6d\x69\163\x73" => true];
        goto umioqieqqagmckwg;
        umioqieqqagmckwg:
        quiscsoaasusqsii:
        goto caeamkmmgyasuywc;
        gmugaowewyiyooea:
        if (!$qyukicweqoisimwg) {
            goto mesgcyiaogasqowm;
        }
        goto eiceowycmoycqkuk;
        caeamkmmgyasuywc:
        foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
            goto iaaigscysuqkassk;
            ucyecesyqmiackww:
            asweayesceakosic:
            goto igmqymyemckoaqgi;
            wqsueawiwmaymyye:
            if (!ManipulateArray::get($gskauacumcmekigs, "\x64\151\x73\155\x69\163\x73", false)) {
                goto yeucaeocmeokqggg;
            }
            goto wakcyckyeemwoqgk;
            miowwquwweeycgyu:
            $scwiymciagumsuiw = "\141";
            goto uqyqusgiassqqgso;
            emgcuckeyeakwoww:
            $qyukicweqoisimwg[$momcykaoccoymeig] = self::qgsekwygcgawekeq($scwiymciagumsuiw, $gskauacumcmekigs, true, ManipulateArray::get($gskauacumcmekigs, "\164\151\x74\154\145"));
            goto ucyecesyqmiackww;
            gmqmassuiycwosek:
            owaoemsqwmcymegi:
            goto miowwquwweeycgyu;
            iaaigscysuqkassk:
            if (!is_array($gskauacumcmekigs)) {
                goto asweayesceakosic;
            }
            goto wqsueawiwmaymyye;
            uqyqusgiassqqgso:
            qcsqqqkmmswawmqo:
            goto emgcuckeyeakwoww;
            doykmuigywoqqiso:
            goto qcsqqqkmmswawmqo;
            goto gmqmassuiycwosek;
            ieeoomsoskweuome:
            yeucaeocmeokqggg:
            goto qikugkuomgekwawu;
            uckskmkusokoegaw:
            $gskauacumcmekigs = self::igmaewykumgwoaoy($gskauacumcmekigs, "\143\x6c\x61\163\x73", "\160\170\x2d\65");
            goto wqwuwausogwsuqqc;
            wakcyckyeemwoqgk:
            $gskauacumcmekigs[] = "\x64\x61\x74\141\x2d\x6d\x69\143\x72\157\155\x6f\144\141\154\x2d\x63\154\x6f\163\145";
            goto ieeoomsoskweuome;
            wqwuwausogwsuqqc:
            if ($geecqyososceumsk) {
                goto owaoemsqwmcymegi;
            }
            goto woeogayusoaoawio;
            woeogayusoaoawio:
            $scwiymciagumsuiw = $kqywgoqsmuswammk;
            goto doykmuigywoqqiso;
            igmqymyemckoaqgi:
            isawcgqqwuaucgga:
            goto asuaoeiwuqaugwaa;
            qikugkuomgekwawu:
            $geecqyososceumsk = ManipulateArray::get($gskauacumcmekigs, "\x68\x72\145\146");
            goto uckskmkusokoegaw;
            asuaoeiwuqaugwaa:
        }
        goto mskqaiwsecmeksgy;
        wwwmsesaeqsooeso:
        qeuewcmsumowussm:
        goto kgmmymowamcgesku;
        kemgeqwcacseqmgu:
        $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, $smgooosyoeqwcaeg);
        goto wwwmsesaeqsooeso;
        iewukqcakeoaogea:
        mesgcyiaogasqowm:
        goto uquiseikicyaaaka;
        mskqaiwsecmeksgy:
        cqouisksowcqsqga:
        goto mmewqwgucqqooauq;
        uquiseikicyaaaka:
        if (!($smgooosyoeqwcaeg = ManipulateArray::get($ywmkwiwkosakssii, "\152\163\x6f\156"))) {
            goto qeuewcmsumowussm;
        }
        goto kemgeqwcacseqmgu;
        kgmmymowamcgesku:
        return $ywmkwiwkosakssii;
        goto uocgaiiuusguaayy;
        mmewqwgucqqooauq:
        $ywmkwiwkosakssii["\x62\x75\x74\x74\x6f\x6e\163"] = $qyukicweqoisimwg;
        goto iewukqcakeoaogea;
        cycuoasiccouwyqw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\171\x70\145" => "\x69\156\146\157", "\x6a\x73\x6f\x6e" => JSON_UNESCAPED_SLASHES, "\163\151\x7a\x65" => "\155\144", "\164\151\x74\154\x65" => __("\x41\x6c\x65\162\164", PR__CMN__FOUNDATION), "\x63\157\x6e\x74\145\156\164" => '', "\142\165\164\x74\157\156\163" => []]);
        goto oucesaewqyuwiiqg;
        uocgaiiuusguaayy:
    }
    
    public static function sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '')
    {
        echo self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
    }
    
    public static function wegccueewucwyaew($ywmkwiwkosakssii = [])
    {
        goto iyqqogayqsmeocus;
        iyqqogayqsmeocus:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x68\141\163\x5f\142\x6f\144\x79" => true, self::ICON => '', self::TITLE => '', self::ATTRS => [], self::CONTENT => '']);
        goto iscaiaaawwcwwaqe;
        qieaauqeoyssiwei:
        ywacykwawisgmguq:
        goto aesqmgsmqugcmwsu;
        qomksaimmayiiiwk:
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        goto mkikkgwwyiemokme;
        gewmecseymwsqeaw:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\144\151\x76", $wwgucssaecqekuek, [$meqocwsecsywiiqs, $ewgwqamkygiqaawc]);
        goto csmkgqiuimmymqaw;
        syucwaiqcwoigmyi:
        $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, self::ATTRS);
        goto qomksaimmayiiiwk;
        emuussqoawouymue:
        msyquusciakoksug:
        goto uessyqkuysyoaqwm;
        sqikqgygycksuyoa:
        if (!$ywmkwiwkosakssii["\150\141\163\x5f\142\x6f\144\171"]) {
            goto msyquusciakoksug;
        }
        goto oqiwsqaskogasows;
        uessyqkuysyoaqwm:
        if (!$meqocwsecsywiiqs) {
            goto ywacykwawisgmguq;
        }
        goto zseoycemqgkocuoy;
        wgggekucgkaiksaw:
        return $ewgwqamkygiqaawc;
        goto iuaagccgiiyoewqi;
        swoccyieyiyocaai:
        if (!$ewgwqamkygiqaawc) {
            goto qakuswcwwswiesyi;
        }
        goto sqikqgygycksuyoa;
        zseoycemqgkocuoy:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\144\x69\166", ["\x63\154\x61\163\x73" => "\x63\x61\162\x64\55\150\x65\x61\x64\145\x72"], self::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi));
        goto swmckgcuukkqqckq;
        mkikkgwwyiemokme:
        $ewgwqamkygiqaawc = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT);
        goto swoccyieyiyocaai;
        iscaiaaawwcwwaqe:
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        goto syucwaiqcwoigmyi;
        oqiwsqaskogasows:
        $ewgwqamkygiqaawc = self::uuccukgasskgimsq("\144\151\166", ["\143\x6c\141\163\x73" => "\x63\141\162\144\55\142\157\144\x79"], $ewgwqamkygiqaawc);
        goto emuussqoawouymue;
        swmckgcuukkqqckq:
        $meqocwsecsywiiqs = self::uuccukgasskgimsq("\150\x32", ["\143\154\141\163\x73" => "\155\x2d\60"], $meqocwsecsywiiqs);
        goto qieaauqeoyssiwei;
        aesqmgsmqugcmwsu:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\163\163", "\x70\162\55\143\x61\x72\x64\x20\x63\141\x72\144");
        goto gewmecseymwsqeaw;
        csmkgqiuimmymqaw:
        qakuswcwwswiesyi:
        goto wgggekucgkaiksaw;
        iuaagccgiiyoewqi:
    }
    
    public static function smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false)
    {
        goto yuceksygooykweoy;
        owmgcskcyawsqskm:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi . $meqocwsecsywiiqs);
        goto woyasoooseaaaaio;
        oeecmqccguiykkqm:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        goto kwqswmuukaymcqoq;
        qigywyiuuemsacoe:
        return $meqocwsecsywiiqs;
        goto csosomiukogmmcme;
        yuceksygooykweoy:
        if (!$wkaqekwwgqsqwcoi) {
            goto swugymmweuogwusw;
        }
        goto oeecmqccguiykkqm;
        kwqswmuukaymcqoq:
        $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($meqocwsecsywiiqs, ["\x63\154\141\x73\x73" => "\x6d\154\55\62"]);
        goto owmgcskcyawsqskm;
        woyasoooseaaaaio:
        swugymmweuogwusw:
        goto qigywyiuuemsacoe;
        csosomiukogmmcme:
    }
    
    public static function oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, $wwgucssaecqekuek = [], $wygwqsssewkqooqm = true) : string
    {
        goto cewmkewqmueeeyyc;
        eaeogyomscegkayw:
        if (!$wygwqsssewkqooqm) {
            goto iowuiukuyewqkkae;
        }
        goto iewaoiacicouqcmy;
        cewmkewqmueeeyyc:
        $egkyssmuqcwaciya = "\156\157\164\151\143\145\40\156\x6f\x74\x69\143\x65\55{$iqaosyayeiuaisqi}";
        goto eaeogyomscegkayw;
        iewaoiacicouqcmy:
        $egkyssmuqcwaciya .= "\x20\151\x73\55\x64\x69\x73\x6d\151\163\x73\151\142\x6c\145";
        goto cswywwkcqekmigki;
        eoigcqiakssieeau:
        return self::qgsekwygcgawekeq("\x64\x69\x76", $wwgucssaecqekuek, true, self::gusouagusgyoaeya($uamcoiueqaamsqma));
        goto auiissiemumqmkwa;
        cswywwkcqekmigki:
        iowuiukuyewqkkae:
        goto msmmauiswokuyasc;
        msmmauiswokuyasc:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\x73\x73", $egkyssmuqcwaciya);
        goto eoigcqiakssieeau;
        auiissiemumqmkwa:
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
        goto muuekeyeccsssuow;
        qimocyquekymmiuk:
        goto yumcwyyykaumkeau;
        goto wogokussyamayesu;
        ogcsckmescouyqmc:
        return $aqykuigiuwmmcieu;
        goto oogioucuccasmyak;
        muuekeyeccsssuow:
        $wwgucssaecqekuek = self::aoyseswaaaugicuq($wwgucssaecqekuek);
        goto gqiuksowisyaqsgs;
        uwecaymwqkkicime:
        if (!$muiegiugiocacqkm) {
            goto sociuakymqqoqscu;
        }
        goto skuskikumqguccee;
        ogasoacwwskwkuwo:
        sociuakymqqoqscu:
        goto ogcsckmescouyqmc;
        gcukuckckaiewegs:
        $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc);
        goto oquqawmmasaicyua;
        agckiaesekmciuyw:
        $ggkaciewmeqmgckg = "\x3c\45\x73\x20\x25\x73\x2f\76";
        goto cocigaqusqewkiuy;
        qgsyukssiqqqyqky:
        if (is_array($ewgwqamkygiqaawc)) {
            goto woasacgcwusiuimk;
        }
        goto eecmomwqeicciqok;
        amuouaaiumwgawui:
        owecwquwkacmmwsm:
        goto qgsyukssiqqqyqky;
        skuskikumqguccee:
        $aqykuigiuwmmcieu = sprintf("\x25\163\x3c\x2f\x25\x73\76", $aqykuigiuwmmcieu, $kqywgoqsmuswammk);
        goto ogasoacwwskwkuwo;
        oquqawmmasaicyua:
        yumcwyyykaumkeau:
        goto vaaikkcmqgsiwkum;
        gqiuksowisyaqsgs:
        $ggkaciewmeqmgckg = "\74\x25\x73\40\x25\163\76\45\163";
        goto escogkseqmmsucuy;
        vaaikkcmqgsiwkum:
        $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $wwgucssaecqekuek, $aqykuigiuwmmcieu);
        goto uwecaymwqkkicime;
        cocigaqusqewkiuy:
        $muiegiugiocacqkm = false;
        goto amuouaaiumwgawui;
        eecmomwqeicciqok:
        $aqykuigiuwmmcieu = $ewgwqamkygiqaawc;
        goto qimocyquekymmiuk;
        wogokussyamayesu:
        woasacgcwusiuimk:
        goto gcukuckckaiewegs;
        escogkseqmmsucuy:
        if (!in_array($kqywgoqsmuswammk, ["\x69\x6e\160\165\x74", "\x62\x72", "\x68\x72", "\151\x6d\x67", "\x6c\x69\156\x6b"])) {
            goto owecwquwkacmmwsm;
        }
        goto agckiaesekmciuyw;
        oogioucuccasmyak:
    }
}

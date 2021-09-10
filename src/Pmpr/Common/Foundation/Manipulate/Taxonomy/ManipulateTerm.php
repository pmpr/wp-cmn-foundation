<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Taxonomy;

use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Error;
use WP_Taxonomy;
use WP_Term;

class ManipulateTerm extends Common
{
    
    public static function owaokmsayecmasqu($iwewcwusemqaiggk)
    {
        goto csyaemwuuiasyees;
        uosimiioegsgagcc:
        $iwewcwusemqaiggk = self::owaokmsayecmasqu($omwmuycmeqcqokom);
        goto owugsgyeygsuomms;
        csyaemwuuiasyees:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto uqosmecyeigkygoy;
        oeuauqwuswaugqog:
        $omwmuycmeqcqokom = self::get($iwewcwusemqaiggk->parent);
        goto uosimiioegsgagcc;
        gouksaecesowaeqs:
        return $iwewcwusemqaiggk;
        goto yyookuiiewskwaoo;
        uqosmecyeigkygoy:
        if (!(isset($iwewcwusemqaiggk->parent) && $iwewcwusemqaiggk->parent)) {
            goto sagosouymgqiycgw;
        }
        goto oeuauqwuswaugqog;
        owugsgyeygsuomms:
        sagosouymgqiycgw:
        goto gouksaecesowaeqs;
        yyookuiiewskwaoo:
    }
    
    public static function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string
    {
        return ManipulateArray::get(self::get($iwewcwusemqaiggk), "\156\x61\x6d\145", '');
    }
    
    public static function qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi = false) : string
    {
        goto iukysegoaommmces;
        ausseeqkoawosiaq:
        ykckoqoqkkmuoayo:
        goto wkmcmauyuwqyqmgk;
        kuykiwqqiaoyiwuk:
        goto kqackawqyysgiyyk;
        goto wkskgkgegemwowes;
        kgskmsuccaugocmi:
        $aiowsaccomcoikus->usuqmwksoeaayaig('');
        goto qsekucweoiggeose;
        wkskgkgegemwowes:
        wkqeuuqqskmuogig:
        goto ecgeqacmeqikcymq;
        wkmcmauyuwqyqmgk:
        return $nsmgceoqaqogqmuw;
        goto kewwwigiwyoccuyc;
        wgsacqwymyskakys:
        kqackawqyysgiyyk:
        goto ausseeqkoawosiaq;
        ymuiaigwqkqoaoec:
        $aiowsaccomcoikus->eqmqucasseomgsce(12)->usoqcyyugsuyiewc("\x77\x2d\155\x64\55\71\65")->yqoekuewicqoescm("\167\55\155\144\55\61\60\x30");
        goto kmqoewcoumqiuisu;
        iukysegoaommmces:
        $nsmgceoqaqogqmuw = '';
        goto wskwsuwssqgyuuko;
        kcgsiwomayugckym:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x64\x69\x76", ["\143\x6c\141\163\x73" => "\146\157\x72\x6d\55\146\151\145\x6c\144"], [ManipulateHTML::uuccukgasskgimsq("\154\141\142\x65\x6c", ["\x66\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy), $nsmgceoqaqogqmuw]);
        goto kuykiwqqiaoyiwuk;
        kmqoewcoumqiuisu:
        $pkyyagewkiyckmwy = $aiowsaccomcoikus->aakmagwggmkoiiyu();
        goto kgskmsuccaugocmi;
        qsekucweoiggeose:
        $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(false);
        goto iocwkkkoaskueuui;
        iocwkkkoaskueuui:
        if ($wwgeaeqgacgwooqi) {
            goto wkqeuuqqskmuogig;
        }
        goto kcgsiwomayugckym;
        ecgeqacmeqikcymq:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x74\x72", ["\x63\x6c\141\163\x73" => "\x66\157\x72\x6d\55\x66\x69\145\x6c\144"], [ManipulateHTML::uuccukgasskgimsq("\164\x68", ["\163\x63\157\x70\145" => "\162\x6f\x77"], ManipulateHTML::uuccukgasskgimsq("\154\x61\142\145\x6c", ["\146\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy)), ManipulateHTML::uuccukgasskgimsq("\164\144", [], $nsmgceoqaqogqmuw)]);
        goto wgsacqwymyskakys;
        wskwsuwssqgyuuko:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto ykckoqoqkkmuoayo;
        }
        goto ymuiaigwqkqoaoec;
        kewwwigiwyoccuyc:
    }
    
    public static function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return DecoratorTerm::giwmekimakcaawsq(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii = [])
    {
        goto noguoiggcekkuiie;
        oisgcaawyuwigewy:
        $ywmkwiwkosakssii["\x70\141\x72\145\x6e\164"] = $iwewcwusemqaiggk;
        goto ygcwuequuqswkquu;
        akseawaiycesqgac:
        ukicacmwwaemqmmo:
        goto ikycsuoawawsqwyk;
        mwaquoogsoksymmc:
        if (!$iwewcwusemqaiggk) {
            goto ukicacmwwaemqmmo;
        }
        goto oisgcaawyuwigewy;
        ikycsuoawawsqwyk:
        return $okcscwesammossuq;
        goto ygqccwuyseqmcyum;
        oywwcioimcseikmk:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto mwaquoogsoksymmc;
        noguoiggcekkuiie:
        $okcscwesammossuq = [];
        goto oywwcioimcseikmk;
        ygcwuequuqswkquu:
        $okcscwesammossuq = self::ciugwooasaqcywas(self::yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii);
        goto akseawaiycesqgac;
        ygqccwuyseqmcyum:
    }
    
    public static function ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii = [])
    {
        goto gceywsegequeamco;
        ycmoqwoqicoesewg:
        smckaqauakgqyega:
        goto hwsckcsgcgccqoea;
        aeoocgsmwscewsqk:
        return $suuagcecoyuweoqk;
        goto yyaasscyoqgassya;
        hwsckcsgcgccqoea:
        $ywmkwiwkosakssii["\x74\x61\170\157\156\157\155\x79"] = $kesssewsiegssiya;
        goto ocggaukyqkscmoko;
        imgaascmkkggqygm:
        qqasmowcceqecouo:
        goto aeoocgsmwscewsqk;
        kuswuieaqkuaeuyi:
        if (is_array($suuagcecoyuweoqk)) {
            goto qqasmowcceqecouo;
        }
        goto aeguscqkukywqagm;
        aeguscqkukywqagm:
        $suuagcecoyuweoqk = [];
        goto imgaascmkkggqygm;
        gceywsegequeamco:
        if (!$kesssewsiegssiya instanceof WP_Taxonomy) {
            goto smckaqauakgqyega;
        }
        goto cawikiksomukeoik;
        ocggaukyqkscmoko:
        $suuagcecoyuweoqk = DecoratorTerm::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto kuswuieaqkuaeuyi;
        cawikiksomukeoik:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto ycmoqwoqicoesewg;
        yyaasscyoqgassya:
    }
    
    public static function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '')
    {
        goto gucyyaamouukiuoa;
        oaoaqkkuycwqssms:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto mmqqmqqogowqaasi;
        uascsimkgakoigii:
        $aqykuigiuwmmcieu = DecoratorTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto qscygwsykuisyuse;
        mmqqmqqogowqaasi:
        qyauisewacumumcm:
        goto iciwaqamwecmqwsq;
        iyccwkoemamemeic:
        sogsuowqkaaecoim:
        goto swaciyuuksosagwq;
        qscygwsykuisyuse:
        if (!(!is_string($aqykuigiuwmmcieu) || is_wp_error($aqykuigiuwmmcieu))) {
            goto sogsuowqkaaecoim;
        }
        goto kogqmigossoqsqoy;
        kogqmigossoqsqoy:
        $aqykuigiuwmmcieu = '';
        goto iyccwkoemamemeic;
        swaciyuuksosagwq:
        return $aqykuigiuwmmcieu;
        goto acaqskwayeieaegi;
        gucyyaamouukiuoa:
        if ($kesssewsiegssiya) {
            goto qyauisewacumumcm;
        }
        goto oaoaqkkuycwqssms;
        iciwaqamwecmqwsq:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto uascsimkgakoigii;
        acaqskwayeieaegi:
    }
    
    public static function ksmqawcowkmegigw($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '')
    {
        return DecoratorTerm::ksmqawcowkmegigw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis);
    }
    
    public static function get($iwewcwusemqaiggk = null, $kesssewsiegssiya = '')
    {
        goto ucyymqmgcuyemiec;
        ucyymqmgcuyemiec:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto seagocwkwsqgoggo;
        }
        goto amsqkqasgaiqeqkw;
        kugeoiqqiewkekeq:
        seagocwkwsqgoggo:
        goto kwauawssoeowaamm;
        amsqkqasgaiqeqkw:
        $iwewcwusemqaiggk = DecoratorTerm::get($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto kugeoiqqiewkekeq;
        mogmmaaaicuuscki:
        return $iwewcwusemqaiggk;
        goto cyyokcaimikeccwi;
        ycmqimccgmkgyeia:
        $iwewcwusemqaiggk = '';
        goto symuwmqkousimose;
        symuwmqkousimose:
        owgigsqiqokuyuiu:
        goto mogmmaaaicuuscki;
        kwauawssoeowaamm:
        if (!is_wp_error($iwewcwusemqaiggk)) {
            goto owgigsqiqokuyuiu;
        }
        goto ycmqimccgmkgyeia;
        cyyokcaimikeccwi:
    }
    
    public static function mwikyscisascoeea($iwewcwusemqaiggk = null, $cwwowqyuwccuykom = false)
    {
        goto iwkequgegkyeiqog;
        iwkequgegkyeiqog:
        if (is_numeric($iwewcwusemqaiggk)) {
            goto gsakaiaaoiykgkoo;
        }
        goto qesmyqceakgcgmkg;
        gkkkoigsweugscqc:
        wwwemoiyskgksksi:
        goto qesmqmmykiewowmu;
        qesmqmmykiewowmu:
        $iwewcwusemqaiggk = ManipulateArray::get($iwewcwusemqaiggk, "\x74\x65\162\x6d\x5f\x69\144");
        goto acaiyqkymwwgaiou;
        qesmyqceakgcgmkg:
        if (!(!$iwewcwusemqaiggk && !$cwwowqyuwccuykom)) {
            goto wwwemoiyskgksksi;
        }
        goto smgmaeiuciewqiei;
        acaiyqkymwwgaiou:
        gsakaiaaoiykgkoo:
        goto omimseyqisaggwwk;
        smgmaeiuciewqiei:
        $iwewcwusemqaiggk = get_queried_object();
        goto gkkkoigsweugscqc;
        omimseyqisaggwwk:
        return $iwewcwusemqaiggk;
        goto weuwwsooqyqiucio;
        weuwwsooqyqiucio:
    }
    
    public static function smqukgcyacswysqa($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie = '')
    {
        return DecoratorTerm::smqukgcyacswysqa(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function yyoeeseewqmmyaee($iwewcwusemqaiggk, $awqscowmskeuymeu = false)
    {
        goto eaqcomkumqyekasq;
        ceamikuakogkkmce:
        emwyqgsmwkmkygcu:
        goto sgkkcoeimqcykymu;
        coomswccwsqqemso:
        if (!$iwewcwusemqaiggk) {
            goto emwyqgsmwkmkygcu;
        }
        goto wymgkoyemeuosskg;
        gaqmoiowskqycuqe:
        gsgayuuqgciwqgoa:
        goto ceamikuakogkkmce;
        sgkkcoeimqcykymu:
        return $kesssewsiegssiya;
        goto cqockmkimoaosksq;
        eaqcomkumqyekasq:
        $kesssewsiegssiya = '';
        goto ugsyooiaksywugya;
        euqgsqmmekoogmew:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto gaqmoiowskqycuqe;
        uuymwcykywemycwy:
        if (!$awqscowmskeuymeu) {
            goto gsgayuuqgciwqgoa;
        }
        goto euqgsqmmekoogmew;
        ugsyooiaksywugya:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto coomswccwsqqemso;
        wymgkoyemeuosskg:
        $kesssewsiegssiya = ManipulateArray::get($iwewcwusemqaiggk, "\164\x61\x78\x6f\156\157\155\x79");
        goto uuymwcykywemycwy;
        cqockmkimoaosksq:
    }
    
    public static function emcckouwaoassquc(?array $seyqqsmuaiegkeeq = [])
    {
        goto giemuuaeoucmcsuy;
        smicguciweuscgqg:
        return self::ciugwooasaqcywas($seyqqsmuaiegkeeq, ["\146\151\145\x6c\x64\163" => "\151\x64\163", "\x68\x69\x64\x65\x5f\x65\155\160\x74\171" => true]);
        goto qsmmmigmmsswamkq;
        giemuuaeoucmcsuy:
        if ($seyqqsmuaiegkeeq) {
            goto aauykwiueasmccai;
        }
        goto woesikuawyussaiy;
        iguuswyoweycqica:
        aauykwiueasmccai:
        goto smicguciweuscgqg;
        woesikuawyussaiy:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\x70\x75\x62\x6c\151\143" => true, self::OUTPUT => self::NAMES, "\x70\165\x62\x6c\151\143\x6c\x79\x5f\x71\x75\x65\x72\x79\141\x62\x6c\145" => true]);
        goto iguuswyoweycqica;
        qsmmmigmmsswamkq:
    }
    
    public static function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null)
    {
        goto gmcoiisikwiewwwa;
        igwiauqkemegeiga:
        qggkkowqqmasaaua:
        goto qmqekyugykgcsomq;
        icqaiqouueccouug:
        kkowaueqyseqswyc:
        goto peggaoiyqoswguwq;
        ocymgeqaqyickuqe:
        eqecyasoqwkcmmgk:
        goto qyqiquqgyyommaia;
        cgioseiiiogoowqi:
        $migkyseymeomymmy = true;
        goto igwiauqkemegeiga;
        qocogcqouiwqgeak:
        return false;
        goto iascgqeomcqkckuu;
        oawykgyecmoyewge:
        if (!(!$migkyseymeomymmy && $kesssewsiegssiya == "\143\x61\x74\x65\x67\x6f\x72\x79" && DecoratorTaxonomy::sgayqmgoigoseaoo($iwewcwusemqaiggk))) {
            goto qggkkowqqmasaaua;
        }
        goto cgioseiiiogoowqi;
        wkmuicuoikisiwko:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto uwwyuuoqyieceogk;
        }
        goto ummwyumussicqiyk;
        auaeiymgkqmoqckc:
        if ($iwewcwusemqaiggk) {
            goto kkowaueqyseqswyc;
        }
        goto imwacgsewasucqqm;
        yogsocukuqeumqyk:
        uwwyuuoqyieceogk:
        goto icqaiqouueccouug;
        qmqekyugykgcsomq:
        if ($migkyseymeomymmy) {
            goto eqecyasoqwkcmmgk;
        }
        goto qocogcqouiwqgeak;
        iiucyemcukiwgigo:
        iyyowwiyyogmkemi:
        goto oawykgyecmoyewge;
        imwacgsewasucqqm:
        $iwewcwusemqaiggk = get_queried_object();
        goto wkmuicuoikisiwko;
        eogagykquokuwamu:
        gkssguuuysiaciyq:
        goto gimuekaasmwuiwkk;
        iascgqeomcqkckuu:
        goto gkssguuuysiaciyq;
        goto ocymgeqaqyickuqe;
        ummwyumussicqiyk:
        $iwewcwusemqaiggk = '';
        goto yogsocukuqeumqyk;
        qyqiquqgyyommaia:
        return $iwewcwusemqaiggk;
        goto eogagykquokuwamu;
        peggaoiyqoswguwq:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto uyeueqqsggiiwqga;
        maiiwqyuwqcgswuq:
        $migkyseymeomymmy = DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto dwuoyyiimkaumsmy;
        dwuoyyiimkaumsmy:
        asciqecgiacoiuoa:
        goto iiucyemcukiwgigo;
        kqwigmeaoqawgwus:
        if (!$kesssewsiegssiya) {
            goto iyyowwiyyogmkemi;
        }
        goto auaeiymgkqmoqckc;
        uyeueqqsggiiwqga:
        if (!$iwewcwusemqaiggk) {
            goto asciqecgiacoiuoa;
        }
        goto maiiwqyuwqcgswuq;
        gmcoiisikwiewwwa:
        $migkyseymeomymmy = false;
        goto kqwigmeaoqawgwus;
        gimuekaasmwuiwkk:
    }
    
    public static function igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw = '', $cuyooiakswegosog = false)
    {
        return DecoratorTerm::igawqaomowicuayw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function yyykkcyiksewsoqy($iwewcwusemqaiggk, $kesssewsiegssiya = '', $sqeykgyoooqysmca = '')
    {
        goto ukqyckkukqmqegiq;
        qksmcagaccmosois:
        eoqiaaiuakecqgwg:
        goto oiuyaoysceyuiiky;
        ekyoguakcuwmciqy:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto qksmcagaccmosois;
        oiuyaoysceyuiiky:
        return DecoratorTerm::yyykkcyiksewsoqy(self::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya, $sqeykgyoooqysmca);
        goto mcqwwkaqcwqiqsey;
        ukqyckkukqmqegiq:
        if ($kesssewsiegssiya) {
            goto eoqiaaiuakecqgwg;
        }
        goto ekyoguakcuwmciqy;
        mcqwwkaqcwqiqsey:
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $kesssewsiegssiya, $yemgmmgogcwccuky = [])
    {
        goto oqiysqiemaogowyw;
        qwceeuwmumkocgmc:
        $ywmkwiwkosakssii["\156\x61\155\145\137\x5f\x6c\x69\153\145"] = $meqocwsecsywiiqs;
        goto yaeqgqeakowuiueo;
        yaeqgqeakowuiueo:
        qcyiweqwugwgmogw:
        goto umemmccckeguuasa;
        owkgmsiiuwocgqae:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto qcyiweqwugwgmogw;
        }
        goto qwceeuwmumkocgmc;
        umemmccckeguuasa:
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
        goto ukoimsacquweeuay;
        oqiysqiemaogowyw:
        $ywmkwiwkosakssii = ["\x6f\x72\x64\145\x72" => "\101\123\x43", "\x6e\165\x6d\142\x65\x72" => 10, "\x65\170\143\154\165\144\x65" => $yemgmmgogcwccuky];
        goto owkgmsiiuwocgqae;
        ukoimsacquweeuay:
    }
    
    public static function iyssgoiwgwygeacg($iwewcwusemqaiggk, $useksmwkuswkwcqg = "\x70\157\163\x74", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\x61\x78\x5f\x71\165\145\162\171" => [["\x74\x61\170\157\x6e\157\x6d\x79" => self::yyoeeseewqmmyaee($iwewcwusemqaiggk), "\x66\151\145\x6c\x64" => "\164\145\x72\155\137\151\144", "\164\x65\x72\155\x73" => self::mwikyscisascoeea($iwewcwusemqaiggk)]]]);
        return ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
    }
    
    public static function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ["\156\x75\155\142\145\162" => -1, "\x65\170\143\x6c\x75\x64\145" => $yemgmmgogcwccuky, "\x6d\145\x74\x61\x5f\161\x75\x65\162\171" => [["\x6b\x65\x79" => $gwiwsycaaqgwmewg, "\x65\x71\x67\x6f\x6f\143\x67\141\x71\x77\161\x63\151\155\151\x65" => $aucgaecqisksougg]]];
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}

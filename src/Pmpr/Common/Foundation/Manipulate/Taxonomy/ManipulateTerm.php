<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        goto sagosouymgqiycgw;
        uqosmecyeigkygoy:
        $omwmuycmeqcqokom = self::get($iwewcwusemqaiggk->parent);
        goto oeuauqwuswaugqog;
        owugsgyeygsuomms:
        return $iwewcwusemqaiggk;
        goto gouksaecesowaeqs;
        oeuauqwuswaugqog:
        $iwewcwusemqaiggk = self::owaokmsayecmasqu($omwmuycmeqcqokom);
        goto uosimiioegsgagcc;
        sagosouymgqiycgw:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto csyaemwuuiasyees;
        csyaemwuuiasyees:
        if (!(isset($iwewcwusemqaiggk->parent) && $iwewcwusemqaiggk->parent)) {
            goto qmyaseyamuuussia;
        }
        goto uqosmecyeigkygoy;
        uosimiioegsgagcc:
        qmyaseyamuuussia:
        goto owugsgyeygsuomms;
        gouksaecesowaeqs:
    }
    
    public static function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string
    {
        return ManipulateArray::get(self::get($iwewcwusemqaiggk), "\156\x61\x6d\145", '');
    }
    
    public static function qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi = false) : string
    {
        goto ykckoqoqkkmuoayo;
        iocwkkkoaskueuui:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\143\x6c\141\163\163" => "\x66\157\x72\x6d\x2d\146\x69\145\154\144"], [ManipulateHTML::uuccukgasskgimsq("\x6c\141\x62\x65\x6c", ["\x66\157\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy), $nsmgceoqaqogqmuw]);
        goto kcgsiwomayugckym;
        ecgeqacmeqikcymq:
        wkqeuuqqskmuogig:
        goto wgsacqwymyskakys;
        ymuiaigwqkqoaoec:
        $pkyyagewkiyckmwy = $aiowsaccomcoikus->aakmagwggmkoiiyu();
        goto kmqoewcoumqiuisu;
        kcgsiwomayugckym:
        goto wkqeuuqqskmuogig;
        goto kuykiwqqiaoyiwuk;
        ykckoqoqkkmuoayo:
        $nsmgceoqaqogqmuw = '';
        goto iukysegoaommmces;
        wskwsuwssqgyuuko:
        $aiowsaccomcoikus->eqmqucasseomgsce(12)->usoqcyyugsuyiewc("\167\55\x6d\144\55\71\65")->yqoekuewicqoescm("\167\55\155\144\55\61\60\x30");
        goto ymuiaigwqkqoaoec;
        qsekucweoiggeose:
        if ($wwgeaeqgacgwooqi) {
            goto yyookuiiewskwaoo;
        }
        goto iocwkkkoaskueuui;
        kgskmsuccaugocmi:
        $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(false);
        goto qsekucweoiggeose;
        ausseeqkoawosiaq:
        return $nsmgceoqaqogqmuw;
        goto wkmcmauyuwqyqmgk;
        kuykiwqqiaoyiwuk:
        yyookuiiewskwaoo:
        goto wkskgkgegemwowes;
        wgsacqwymyskakys:
        kqackawqyysgiyyk:
        goto ausseeqkoawosiaq;
        kmqoewcoumqiuisu:
        $aiowsaccomcoikus->usuqmwksoeaayaig('');
        goto kgskmsuccaugocmi;
        iukysegoaommmces:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto kqackawqyysgiyyk;
        }
        goto wskwsuwssqgyuuko;
        wkskgkgegemwowes:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x74\162", ["\143\154\x61\x73\163" => "\146\157\162\x6d\55\146\x69\145\x6c\x64"], [ManipulateHTML::uuccukgasskgimsq("\x74\x68", ["\163\x63\x6f\x70\145" => "\x72\157\167"], ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\x65\x6c", ["\146\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy)), ManipulateHTML::uuccukgasskgimsq("\164\144", [], $nsmgceoqaqogqmuw)]);
        goto ecgeqacmeqikcymq;
        wkmcmauyuwqyqmgk:
    }
    
    public static function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return DecoratorTerm::giwmekimakcaawsq(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii = [])
    {
        goto ukicacmwwaemqmmo;
        mwaquoogsoksymmc:
        $ywmkwiwkosakssii["\x70\x61\x72\x65\x6e\x74"] = $iwewcwusemqaiggk;
        goto oisgcaawyuwigewy;
        noguoiggcekkuiie:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto oywwcioimcseikmk;
        oisgcaawyuwigewy:
        $okcscwesammossuq = self::ciugwooasaqcywas(self::yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii);
        goto ygcwuequuqswkquu;
        akseawaiycesqgac:
        return $okcscwesammossuq;
        goto ikycsuoawawsqwyk;
        ygcwuequuqswkquu:
        kewwwigiwyoccuyc:
        goto akseawaiycesqgac;
        ukicacmwwaemqmmo:
        $okcscwesammossuq = [];
        goto noguoiggcekkuiie;
        oywwcioimcseikmk:
        if (!$iwewcwusemqaiggk) {
            goto kewwwigiwyoccuyc;
        }
        goto mwaquoogsoksymmc;
        ikycsuoawawsqwyk:
    }
    
    public static function ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii = [])
    {
        goto qqasmowcceqecouo;
        gceywsegequeamco:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto cawikiksomukeoik;
        ocggaukyqkscmoko:
        if (is_array($suuagcecoyuweoqk)) {
            goto smckaqauakgqyega;
        }
        goto kuswuieaqkuaeuyi;
        qqasmowcceqecouo:
        if (!$kesssewsiegssiya instanceof WP_Taxonomy) {
            goto ygqccwuyseqmcyum;
        }
        goto gceywsegequeamco;
        cawikiksomukeoik:
        ygqccwuyseqmcyum:
        goto ycmoqwoqicoesewg;
        aeguscqkukywqagm:
        smckaqauakgqyega:
        goto imgaascmkkggqygm;
        hwsckcsgcgccqoea:
        $suuagcecoyuweoqk = DecoratorTerm::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto ocggaukyqkscmoko;
        imgaascmkkggqygm:
        return $suuagcecoyuweoqk;
        goto aeoocgsmwscewsqk;
        ycmoqwoqicoesewg:
        $ywmkwiwkosakssii["\164\x61\170\157\x6e\157\x6d\171"] = $kesssewsiegssiya;
        goto hwsckcsgcgccqoea;
        kuswuieaqkuaeuyi:
        $suuagcecoyuweoqk = [];
        goto aeguscqkukywqagm;
        aeoocgsmwscewsqk:
    }
    
    public static function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '')
    {
        goto sogsuowqkaaecoim;
        oaoaqkkuycwqssms:
        yyaasscyoqgassya:
        goto mmqqmqqogowqaasi;
        iciwaqamwecmqwsq:
        $aqykuigiuwmmcieu = DecoratorTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto uascsimkgakoigii;
        kogqmigossoqsqoy:
        qyauisewacumumcm:
        goto iyccwkoemamemeic;
        mmqqmqqogowqaasi:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto iciwaqamwecmqwsq;
        gucyyaamouukiuoa:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto oaoaqkkuycwqssms;
        qscygwsykuisyuse:
        $aqykuigiuwmmcieu = '';
        goto kogqmigossoqsqoy;
        uascsimkgakoigii:
        if (!(!is_string($aqykuigiuwmmcieu) || is_wp_error($aqykuigiuwmmcieu))) {
            goto qyauisewacumumcm;
        }
        goto qscygwsykuisyuse;
        iyccwkoemamemeic:
        return $aqykuigiuwmmcieu;
        goto swaciyuuksosagwq;
        sogsuowqkaaecoim:
        if ($kesssewsiegssiya) {
            goto yyaasscyoqgassya;
        }
        goto gucyyaamouukiuoa;
        swaciyuuksosagwq:
    }
    
    public static function ksmqawcowkmegigw($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '')
    {
        return DecoratorTerm::ksmqawcowkmegigw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis);
    }
    
    public static function get($iwewcwusemqaiggk = null, $kesssewsiegssiya = '')
    {
        goto owgigsqiqokuyuiu;
        kugeoiqqiewkekeq:
        if (!is_wp_error($iwewcwusemqaiggk)) {
            goto seagocwkwsqgoggo;
        }
        goto kwauawssoeowaamm;
        amsqkqasgaiqeqkw:
        acaqskwayeieaegi:
        goto kugeoiqqiewkekeq;
        symuwmqkousimose:
        return $iwewcwusemqaiggk;
        goto mogmmaaaicuuscki;
        ycmqimccgmkgyeia:
        seagocwkwsqgoggo:
        goto symuwmqkousimose;
        ucyymqmgcuyemiec:
        $iwewcwusemqaiggk = DecoratorTerm::get($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto amsqkqasgaiqeqkw;
        kwauawssoeowaamm:
        $iwewcwusemqaiggk = '';
        goto ycmqimccgmkgyeia;
        owgigsqiqokuyuiu:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto acaqskwayeieaegi;
        }
        goto ucyymqmgcuyemiec;
        mogmmaaaicuuscki:
    }
    
    public static function mwikyscisascoeea($iwewcwusemqaiggk = null, $cwwowqyuwccuykom = false)
    {
        goto gsakaiaaoiykgkoo;
        acaiyqkymwwgaiou:
        return $iwewcwusemqaiggk;
        goto omimseyqisaggwwk;
        gsakaiaaoiykgkoo:
        if (is_numeric($iwewcwusemqaiggk)) {
            goto wwwemoiyskgksksi;
        }
        goto iwkequgegkyeiqog;
        qesmyqceakgcgmkg:
        $iwewcwusemqaiggk = get_queried_object();
        goto smgmaeiuciewqiei;
        qesmqmmykiewowmu:
        wwwemoiyskgksksi:
        goto acaiyqkymwwgaiou;
        iwkequgegkyeiqog:
        if (!(!$iwewcwusemqaiggk && !$cwwowqyuwccuykom)) {
            goto cyyokcaimikeccwi;
        }
        goto qesmyqceakgcgmkg;
        gkkkoigsweugscqc:
        $iwewcwusemqaiggk = ManipulateArray::get($iwewcwusemqaiggk, "\164\x65\x72\x6d\137\x69\x64");
        goto qesmqmmykiewowmu;
        smgmaeiuciewqiei:
        cyyokcaimikeccwi:
        goto gkkkoigsweugscqc;
        omimseyqisaggwwk:
    }
    
    public static function smqukgcyacswysqa($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie = '')
    {
        return DecoratorTerm::smqukgcyacswysqa(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function yyoeeseewqmmyaee($iwewcwusemqaiggk, $awqscowmskeuymeu = false)
    {
        goto emwyqgsmwkmkygcu;
        uuymwcykywemycwy:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto euqgsqmmekoogmew;
        emwyqgsmwkmkygcu:
        $kesssewsiegssiya = '';
        goto eaqcomkumqyekasq;
        coomswccwsqqemso:
        $kesssewsiegssiya = ManipulateArray::get($iwewcwusemqaiggk, "\164\141\170\157\156\157\x6d\171");
        goto wymgkoyemeuosskg;
        wymgkoyemeuosskg:
        if (!$awqscowmskeuymeu) {
            goto weuwwsooqyqiucio;
        }
        goto uuymwcykywemycwy;
        gaqmoiowskqycuqe:
        gsgayuuqgciwqgoa:
        goto ceamikuakogkkmce;
        eaqcomkumqyekasq:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto ugsyooiaksywugya;
        euqgsqmmekoogmew:
        weuwwsooqyqiucio:
        goto gaqmoiowskqycuqe;
        ceamikuakogkkmce:
        return $kesssewsiegssiya;
        goto sgkkcoeimqcykymu;
        ugsyooiaksywugya:
        if (!$iwewcwusemqaiggk) {
            goto gsgayuuqgciwqgoa;
        }
        goto coomswccwsqqemso;
        sgkkcoeimqcykymu:
    }
    
    public static function emcckouwaoassquc(?array $seyqqsmuaiegkeeq = [])
    {
        goto aauykwiueasmccai;
        giemuuaeoucmcsuy:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\x75\142\154\x69\143" => true, self::OUTPUT => self::NAMES, "\x70\x75\x62\x6c\151\143\154\x79\x5f\x71\165\x65\162\171\x61\142\154\x65" => true]);
        goto woesikuawyussaiy;
        aauykwiueasmccai:
        if ($seyqqsmuaiegkeeq) {
            goto cqockmkimoaosksq;
        }
        goto giemuuaeoucmcsuy;
        iguuswyoweycqica:
        return self::ciugwooasaqcywas($seyqqsmuaiegkeeq, ["\x66\x69\x65\154\144\163" => "\151\144\x73", "\150\151\x64\x65\137\x65\155\160\164\171" => true]);
        goto smicguciweuscgqg;
        woesikuawyussaiy:
        cqockmkimoaosksq:
        goto iguuswyoweycqica;
        smicguciweuscgqg:
    }
    
    public static function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null)
    {
        goto gkssguuuysiaciyq;
        qyqiquqgyyommaia:
        eqecyasoqwkcmmgk:
        goto eogagykquokuwamu;
        gmcoiisikwiewwwa:
        if (!$kesssewsiegssiya) {
            goto asciqecgiacoiuoa;
        }
        goto kqwigmeaoqawgwus;
        kqwigmeaoqawgwus:
        if ($iwewcwusemqaiggk) {
            goto uwwyuuoqyieceogk;
        }
        goto auaeiymgkqmoqckc;
        qmqekyugykgcsomq:
        return false;
        goto qocogcqouiwqgeak;
        wkmuicuoikisiwko:
        $iwewcwusemqaiggk = '';
        goto ummwyumussicqiyk;
        yogsocukuqeumqyk:
        uwwyuuoqyieceogk:
        goto icqaiqouueccouug;
        cgioseiiiogoowqi:
        iyyowwiyyogmkemi:
        goto igwiauqkemegeiga;
        dwuoyyiimkaumsmy:
        asciqecgiacoiuoa:
        goto iiucyemcukiwgigo;
        oawykgyecmoyewge:
        $migkyseymeomymmy = true;
        goto cgioseiiiogoowqi;
        auaeiymgkqmoqckc:
        $iwewcwusemqaiggk = get_queried_object();
        goto imwacgsewasucqqm;
        gkssguuuysiaciyq:
        $migkyseymeomymmy = false;
        goto gmcoiisikwiewwwa;
        icqaiqouueccouug:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto peggaoiyqoswguwq;
        igwiauqkemegeiga:
        if ($migkyseymeomymmy) {
            goto qggkkowqqmasaaua;
        }
        goto qmqekyugykgcsomq;
        peggaoiyqoswguwq:
        if (!$iwewcwusemqaiggk) {
            goto kkowaueqyseqswyc;
        }
        goto uyeueqqsggiiwqga;
        uyeueqqsggiiwqga:
        $migkyseymeomymmy = DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto maiiwqyuwqcgswuq;
        ocymgeqaqyickuqe:
        return $iwewcwusemqaiggk;
        goto qyqiquqgyyommaia;
        iiucyemcukiwgigo:
        if (!(!$migkyseymeomymmy && $kesssewsiegssiya == "\x63\141\x74\x65\147\x6f\162\x79" && DecoratorTaxonomy::sgayqmgoigoseaoo($iwewcwusemqaiggk))) {
            goto iyyowwiyyogmkemi;
        }
        goto oawykgyecmoyewge;
        maiiwqyuwqcgswuq:
        kkowaueqyseqswyc:
        goto dwuoyyiimkaumsmy;
        ummwyumussicqiyk:
        qsmmmigmmsswamkq:
        goto yogsocukuqeumqyk;
        imwacgsewasucqqm:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto qsmmmigmmsswamkq;
        }
        goto wkmuicuoikisiwko;
        qocogcqouiwqgeak:
        goto eqecyasoqwkcmmgk;
        goto iascgqeomcqkckuu;
        iascgqeomcqkckuu:
        qggkkowqqmasaaua:
        goto ocymgeqaqyickuqe;
        eogagykquokuwamu:
    }
    
    public static function igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw = '', $cuyooiakswegosog = false)
    {
        return DecoratorTerm::igawqaomowicuayw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function yyykkcyiksewsoqy($iwewcwusemqaiggk, $kesssewsiegssiya = '', $sqeykgyoooqysmca = '')
    {
        goto eoqiaaiuakecqgwg;
        ekyoguakcuwmciqy:
        gimuekaasmwuiwkk:
        goto qksmcagaccmosois;
        qksmcagaccmosois:
        return DecoratorTerm::yyykkcyiksewsoqy(self::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya, $sqeykgyoooqysmca);
        goto oiuyaoysceyuiiky;
        ukqyckkukqmqegiq:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto ekyoguakcuwmciqy;
        eoqiaaiuakecqgwg:
        if ($kesssewsiegssiya) {
            goto gimuekaasmwuiwkk;
        }
        goto ukqyckkukqmqegiq;
        oiuyaoysceyuiiky:
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $kesssewsiegssiya, $yemgmmgogcwccuky = [])
    {
        goto qcyiweqwugwgmogw;
        qcyiweqwugwgmogw:
        $ywmkwiwkosakssii = ["\157\x72\144\x65\x72" => "\x41\x53\x43", "\156\165\155\142\145\x72" => 10, "\x65\170\x63\154\x75\x64\x65" => $yemgmmgogcwccuky];
        goto oqiysqiemaogowyw;
        yaeqgqeakowuiueo:
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
        goto umemmccckeguuasa;
        oqiysqiemaogowyw:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto mcqwwkaqcwqiqsey;
        }
        goto owkgmsiiuwocgqae;
        qwceeuwmumkocgmc:
        mcqwwkaqcwqiqsey:
        goto yaeqgqeakowuiueo;
        owkgmsiiuwocgqae:
        $ywmkwiwkosakssii["\156\141\155\x65\x5f\x5f\154\x69\153\x65"] = $meqocwsecsywiiqs;
        goto qwceeuwmumkocgmc;
        umemmccckeguuasa:
    }
    
    public static function iyssgoiwgwygeacg($iwewcwusemqaiggk, $useksmwkuswkwcqg = "\160\157\x73\164", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\x61\x78\137\161\x75\145\x72\x79" => [["\x74\x61\170\157\156\x6f\x6d\x79" => self::yyoeeseewqmmyaee($iwewcwusemqaiggk), "\x66\151\x65\x6c\144" => "\x74\145\162\x6d\137\151\144", "\x74\x65\162\x6d\163" => self::mwikyscisascoeea($iwewcwusemqaiggk)]]]);
        return ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
    }
    
    public static function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ["\156\165\155\142\145\162" => -1, "\145\170\x63\154\x75\x64\x65" => $yemgmmgogcwccuky, "\155\145\x74\141\x5f\161\x75\145\162\x79" => [["\153\145\x79" => $gwiwsycaaqgwmewg, "\166\x61\x6c\x75\x65" => $aucgaecqisksougg]]];
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}

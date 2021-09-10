<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        uosimiioegsgagcc:
        qmyaseyamuuussia:
        goto owugsgyeygsuomms;
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
        owugsgyeygsuomms:
        return $iwewcwusemqaiggk;
        goto gouksaecesowaeqs;
        uqosmecyeigkygoy:
        $omwmuycmeqcqokom = self::get($iwewcwusemqaiggk->parent);
        goto oeuauqwuswaugqog;
        gouksaecesowaeqs:
    }
    
    public static function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string
    {
        return ManipulateArray::get(self::get($iwewcwusemqaiggk), "\156\x61\x6d\x65", '');
    }
    
    public static function qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi = false) : string
    {
        goto ykckoqoqkkmuoayo;
        ausseeqkoawosiaq:
        return $nsmgceoqaqogqmuw;
        goto wkmcmauyuwqyqmgk;
        ecgeqacmeqikcymq:
        wkqeuuqqskmuogig:
        goto wgsacqwymyskakys;
        iocwkkkoaskueuui:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\143\x6c\141\x73\163" => "\146\157\162\x6d\55\146\151\145\154\144"], [ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\145\x6c", ["\x66\157\x72" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy), $nsmgceoqaqogqmuw]);
        goto kcgsiwomayugckym;
        kmqoewcoumqiuisu:
        $aiowsaccomcoikus->usuqmwksoeaayaig('');
        goto kgskmsuccaugocmi;
        kcgsiwomayugckym:
        goto wkqeuuqqskmuogig;
        goto kuykiwqqiaoyiwuk;
        kgskmsuccaugocmi:
        $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(false);
        goto qsekucweoiggeose;
        ykckoqoqkkmuoayo:
        $nsmgceoqaqogqmuw = '';
        goto iukysegoaommmces;
        ymuiaigwqkqoaoec:
        $pkyyagewkiyckmwy = $aiowsaccomcoikus->aakmagwggmkoiiyu();
        goto kmqoewcoumqiuisu;
        wkskgkgegemwowes:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x74\162", ["\x63\154\x61\163\163" => "\x66\157\x72\x6d\55\146\151\x65\x6c\144"], [ManipulateHTML::uuccukgasskgimsq("\x74\x68", ["\163\143\x6f\160\x65" => "\162\x6f\167"], ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\x65\x6c", ["\146\157\x72" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy)), ManipulateHTML::uuccukgasskgimsq("\x74\x64", [], $nsmgceoqaqogqmuw)]);
        goto ecgeqacmeqikcymq;
        wskwsuwssqgyuuko:
        $aiowsaccomcoikus->eqmqucasseomgsce(12)->usoqcyyugsuyiewc("\167\x2d\155\x64\55\71\x35")->yqoekuewicqoescm("\x77\x2d\155\x64\55\61\x30\60");
        goto ymuiaigwqkqoaoec;
        wgsacqwymyskakys:
        kqackawqyysgiyyk:
        goto ausseeqkoawosiaq;
        qsekucweoiggeose:
        if ($wwgeaeqgacgwooqi) {
            goto yyookuiiewskwaoo;
        }
        goto iocwkkkoaskueuui;
        iukysegoaommmces:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto kqackawqyysgiyyk;
        }
        goto wskwsuwssqgyuuko;
        kuykiwqqiaoyiwuk:
        yyookuiiewskwaoo:
        goto wkskgkgegemwowes;
        wkmcmauyuwqyqmgk:
    }
    
    public static function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return DecoratorTerm::giwmekimakcaawsq(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii = [])
    {
        goto ukicacmwwaemqmmo;
        ygcwuequuqswkquu:
        kewwwigiwyoccuyc:
        goto akseawaiycesqgac;
        noguoiggcekkuiie:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto oywwcioimcseikmk;
        oywwcioimcseikmk:
        if (!$iwewcwusemqaiggk) {
            goto kewwwigiwyoccuyc;
        }
        goto mwaquoogsoksymmc;
        mwaquoogsoksymmc:
        $ywmkwiwkosakssii["\x70\141\x72\145\x6e\x74"] = $iwewcwusemqaiggk;
        goto oisgcaawyuwigewy;
        ukicacmwwaemqmmo:
        $okcscwesammossuq = [];
        goto noguoiggcekkuiie;
        oisgcaawyuwigewy:
        $okcscwesammossuq = self::ciugwooasaqcywas(self::yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii);
        goto ygcwuequuqswkquu;
        akseawaiycesqgac:
        return $okcscwesammossuq;
        goto ikycsuoawawsqwyk;
        ikycsuoawawsqwyk:
    }
    
    public static function ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii = [])
    {
        goto qqasmowcceqecouo;
        hwsckcsgcgccqoea:
        $suuagcecoyuweoqk = DecoratorTerm::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto ocggaukyqkscmoko;
        imgaascmkkggqygm:
        return $suuagcecoyuweoqk;
        goto aeoocgsmwscewsqk;
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
        gceywsegequeamco:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto cawikiksomukeoik;
        kuswuieaqkuaeuyi:
        $suuagcecoyuweoqk = [];
        goto aeguscqkukywqagm;
        ocggaukyqkscmoko:
        if (is_array($suuagcecoyuweoqk)) {
            goto smckaqauakgqyega;
        }
        goto kuswuieaqkuaeuyi;
        ycmoqwoqicoesewg:
        $ywmkwiwkosakssii["\164\141\x78\x6f\x6e\x6f\155\171"] = $kesssewsiegssiya;
        goto hwsckcsgcgccqoea;
        aeoocgsmwscewsqk:
    }
    
    public static function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '')
    {
        goto sogsuowqkaaecoim;
        mmqqmqqogowqaasi:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto iciwaqamwecmqwsq;
        iciwaqamwecmqwsq:
        $aqykuigiuwmmcieu = DecoratorTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto uascsimkgakoigii;
        iyccwkoemamemeic:
        return $aqykuigiuwmmcieu;
        goto swaciyuuksosagwq;
        kogqmigossoqsqoy:
        qyauisewacumumcm:
        goto iyccwkoemamemeic;
        sogsuowqkaaecoim:
        if ($kesssewsiegssiya) {
            goto yyaasscyoqgassya;
        }
        goto gucyyaamouukiuoa;
        gucyyaamouukiuoa:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto oaoaqkkuycwqssms;
        uascsimkgakoigii:
        if (!(!is_string($aqykuigiuwmmcieu) || is_wp_error($aqykuigiuwmmcieu))) {
            goto qyauisewacumumcm;
        }
        goto qscygwsykuisyuse;
        oaoaqkkuycwqssms:
        yyaasscyoqgassya:
        goto mmqqmqqogowqaasi;
        qscygwsykuisyuse:
        $aqykuigiuwmmcieu = '';
        goto kogqmigossoqsqoy;
        swaciyuuksosagwq:
    }
    
    public static function ksmqawcowkmegigw($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '')
    {
        return DecoratorTerm::ksmqawcowkmegigw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis);
    }
    
    public static function get($iwewcwusemqaiggk = null, $kesssewsiegssiya = '')
    {
        goto owgigsqiqokuyuiu;
        ucyymqmgcuyemiec:
        $iwewcwusemqaiggk = DecoratorTerm::get($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto amsqkqasgaiqeqkw;
        amsqkqasgaiqeqkw:
        acaqskwayeieaegi:
        goto kugeoiqqiewkekeq;
        kwauawssoeowaamm:
        $iwewcwusemqaiggk = '';
        goto ycmqimccgmkgyeia;
        owgigsqiqokuyuiu:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto acaqskwayeieaegi;
        }
        goto ucyymqmgcuyemiec;
        ycmqimccgmkgyeia:
        seagocwkwsqgoggo:
        goto symuwmqkousimose;
        kugeoiqqiewkekeq:
        if (!is_wp_error($iwewcwusemqaiggk)) {
            goto seagocwkwsqgoggo;
        }
        goto kwauawssoeowaamm;
        symuwmqkousimose:
        return $iwewcwusemqaiggk;
        goto mogmmaaaicuuscki;
        mogmmaaaicuuscki:
    }
    
    public static function mwikyscisascoeea($iwewcwusemqaiggk = null, $cwwowqyuwccuykom = false)
    {
        goto gsakaiaaoiykgkoo;
        qesmyqceakgcgmkg:
        $iwewcwusemqaiggk = get_queried_object();
        goto smgmaeiuciewqiei;
        gkkkoigsweugscqc:
        $iwewcwusemqaiggk = ManipulateArray::get($iwewcwusemqaiggk, "\164\145\162\155\x5f\151\144");
        goto qesmqmmykiewowmu;
        smgmaeiuciewqiei:
        cyyokcaimikeccwi:
        goto gkkkoigsweugscqc;
        iwkequgegkyeiqog:
        if (!(!$iwewcwusemqaiggk && !$cwwowqyuwccuykom)) {
            goto cyyokcaimikeccwi;
        }
        goto qesmyqceakgcgmkg;
        gsakaiaaoiykgkoo:
        if (is_numeric($iwewcwusemqaiggk)) {
            goto wwwemoiyskgksksi;
        }
        goto iwkequgegkyeiqog;
        qesmqmmykiewowmu:
        wwwemoiyskgksksi:
        goto acaiyqkymwwgaiou;
        acaiyqkymwwgaiou:
        return $iwewcwusemqaiggk;
        goto omimseyqisaggwwk;
        omimseyqisaggwwk:
    }
    
    public static function smqukgcyacswysqa($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie = '')
    {
        return DecoratorTerm::smqukgcyacswysqa(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function yyoeeseewqmmyaee($iwewcwusemqaiggk, $awqscowmskeuymeu = false)
    {
        goto emwyqgsmwkmkygcu;
        euqgsqmmekoogmew:
        weuwwsooqyqiucio:
        goto gaqmoiowskqycuqe;
        uuymwcykywemycwy:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto euqgsqmmekoogmew;
        ugsyooiaksywugya:
        if (!$iwewcwusemqaiggk) {
            goto gsgayuuqgciwqgoa;
        }
        goto coomswccwsqqemso;
        eaqcomkumqyekasq:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto ugsyooiaksywugya;
        emwyqgsmwkmkygcu:
        $kesssewsiegssiya = '';
        goto eaqcomkumqyekasq;
        coomswccwsqqemso:
        $kesssewsiegssiya = ManipulateArray::get($iwewcwusemqaiggk, "\x74\x61\x78\x6f\x6e\157\155\171");
        goto wymgkoyemeuosskg;
        wymgkoyemeuosskg:
        if (!$awqscowmskeuymeu) {
            goto weuwwsooqyqiucio;
        }
        goto uuymwcykywemycwy;
        ceamikuakogkkmce:
        return $kesssewsiegssiya;
        goto sgkkcoeimqcykymu;
        gaqmoiowskqycuqe:
        gsgayuuqgciwqgoa:
        goto ceamikuakogkkmce;
        sgkkcoeimqcykymu:
    }
    
    public static function emcckouwaoassquc(?array $seyqqsmuaiegkeeq = [])
    {
        goto aauykwiueasmccai;
        iguuswyoweycqica:
        return self::ciugwooasaqcywas($seyqqsmuaiegkeeq, ["\x66\151\145\154\144\x73" => "\x69\x64\x73", "\x68\151\144\x65\137\x65\155\160\164\x79" => true]);
        goto smicguciweuscgqg;
        aauykwiueasmccai:
        if ($seyqqsmuaiegkeeq) {
            goto cqockmkimoaosksq;
        }
        goto giemuuaeoucmcsuy;
        woesikuawyussaiy:
        cqockmkimoaosksq:
        goto iguuswyoweycqica;
        giemuuaeoucmcsuy:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\x75\142\x6c\x69\143" => true, self::OUTPUT => self::NAMES, "\x70\165\142\154\x69\143\x6c\x79\137\x71\165\x65\162\171\x61\142\x6c\x65" => true]);
        goto woesikuawyussaiy;
        smicguciweuscgqg:
    }
    
    public static function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null)
    {
        goto gkssguuuysiaciyq;
        qocogcqouiwqgeak:
        goto eqecyasoqwkcmmgk;
        goto iascgqeomcqkckuu;
        uyeueqqsggiiwqga:
        $migkyseymeomymmy = DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto maiiwqyuwqcgswuq;
        iiucyemcukiwgigo:
        if (!(!$migkyseymeomymmy && $kesssewsiegssiya == "\143\141\164\145\x67\x6f\162\171" && DecoratorTaxonomy::sgayqmgoigoseaoo($iwewcwusemqaiggk))) {
            goto iyyowwiyyogmkemi;
        }
        goto oawykgyecmoyewge;
        imwacgsewasucqqm:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto qsmmmigmmsswamkq;
        }
        goto wkmuicuoikisiwko;
        igwiauqkemegeiga:
        if ($migkyseymeomymmy) {
            goto qggkkowqqmasaaua;
        }
        goto qmqekyugykgcsomq;
        maiiwqyuwqcgswuq:
        kkowaueqyseqswyc:
        goto dwuoyyiimkaumsmy;
        wkmuicuoikisiwko:
        $iwewcwusemqaiggk = '';
        goto ummwyumussicqiyk;
        yogsocukuqeumqyk:
        uwwyuuoqyieceogk:
        goto icqaiqouueccouug;
        iascgqeomcqkckuu:
        qggkkowqqmasaaua:
        goto ocymgeqaqyickuqe;
        ummwyumussicqiyk:
        qsmmmigmmsswamkq:
        goto yogsocukuqeumqyk;
        icqaiqouueccouug:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto peggaoiyqoswguwq;
        auaeiymgkqmoqckc:
        $iwewcwusemqaiggk = get_queried_object();
        goto imwacgsewasucqqm;
        oawykgyecmoyewge:
        $migkyseymeomymmy = true;
        goto cgioseiiiogoowqi;
        cgioseiiiogoowqi:
        iyyowwiyyogmkemi:
        goto igwiauqkemegeiga;
        qyqiquqgyyommaia:
        eqecyasoqwkcmmgk:
        goto eogagykquokuwamu;
        peggaoiyqoswguwq:
        if (!$iwewcwusemqaiggk) {
            goto kkowaueqyseqswyc;
        }
        goto uyeueqqsggiiwqga;
        dwuoyyiimkaumsmy:
        asciqecgiacoiuoa:
        goto iiucyemcukiwgigo;
        kqwigmeaoqawgwus:
        if ($iwewcwusemqaiggk) {
            goto uwwyuuoqyieceogk;
        }
        goto auaeiymgkqmoqckc;
        ocymgeqaqyickuqe:
        return $iwewcwusemqaiggk;
        goto qyqiquqgyyommaia;
        gmcoiisikwiewwwa:
        if (!$kesssewsiegssiya) {
            goto asciqecgiacoiuoa;
        }
        goto kqwigmeaoqawgwus;
        qmqekyugykgcsomq:
        return false;
        goto qocogcqouiwqgeak;
        gkssguuuysiaciyq:
        $migkyseymeomymmy = false;
        goto gmcoiisikwiewwwa;
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
        owkgmsiiuwocgqae:
        $ywmkwiwkosakssii["\x6e\141\x6d\x65\x5f\137\154\x69\x6b\145"] = $meqocwsecsywiiqs;
        goto qwceeuwmumkocgmc;
        qwceeuwmumkocgmc:
        mcqwwkaqcwqiqsey:
        goto yaeqgqeakowuiueo;
        yaeqgqeakowuiueo:
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
        goto umemmccckeguuasa;
        oqiysqiemaogowyw:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto mcqwwkaqcwqiqsey;
        }
        goto owkgmsiiuwocgqae;
        qcyiweqwugwgmogw:
        $ywmkwiwkosakssii = ["\157\x72\x64\x65\x72" => "\x41\123\103", "\x6e\x75\x6d\142\145\162" => 10, "\x65\x78\x63\x6c\165\144\145" => $yemgmmgogcwccuky];
        goto oqiysqiemaogowyw;
        umemmccckeguuasa:
    }
    
    public static function iyssgoiwgwygeacg($iwewcwusemqaiggk, $useksmwkuswkwcqg = "\160\x6f\163\x74", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x61\170\x5f\161\x75\x65\162\171" => [["\164\x61\x78\157\156\x6f\155\x79" => self::yyoeeseewqmmyaee($iwewcwusemqaiggk), "\146\151\145\154\x64" => "\x74\x65\x72\155\x5f\151\x64", "\164\x65\162\155\163" => self::mwikyscisascoeea($iwewcwusemqaiggk)]]]);
        return ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
    }
    
    public static function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ["\156\x75\x6d\142\145\162" => -1, "\x65\170\x63\154\x75\x64\145" => $yemgmmgogcwccuky, "\x6d\145\x74\141\x5f\161\x75\145\162\171" => [["\153\145\171" => $gwiwsycaaqgwmewg, "\166\141\154\165\145" => $aucgaecqisksougg]]];
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}

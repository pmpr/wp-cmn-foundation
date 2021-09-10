<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        sagosouymgqiycgw:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto csyaemwuuiasyees;
        csyaemwuuiasyees:
        if (!(isset($iwewcwusemqaiggk->parent) && $iwewcwusemqaiggk->parent)) {
            goto qmyaseyamuuussia;
        }
        goto uqosmecyeigkygoy;
        oeuauqwuswaugqog:
        $iwewcwusemqaiggk = self::owaokmsayecmasqu($omwmuycmeqcqokom);
        goto uosimiioegsgagcc;
        uqosmecyeigkygoy:
        $omwmuycmeqcqokom = self::get($iwewcwusemqaiggk->parent);
        goto oeuauqwuswaugqog;
        owugsgyeygsuomms:
        return $iwewcwusemqaiggk;
        goto gouksaecesowaeqs;
        gouksaecesowaeqs:
    }
    
    public static function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string
    {
        return ManipulateArray::get(self::get($iwewcwusemqaiggk), "\x6e\x61\155\145", '');
    }
    
    public static function qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi = false) : string
    {
        goto ykckoqoqkkmuoayo;
        ykckoqoqkkmuoayo:
        $nsmgceoqaqogqmuw = '';
        goto iukysegoaommmces;
        kgskmsuccaugocmi:
        $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(false);
        goto qsekucweoiggeose;
        wskwsuwssqgyuuko:
        $aiowsaccomcoikus->eqmqucasseomgsce(12)->usoqcyyugsuyiewc("\x77\55\155\x64\x2d\71\x35")->yqoekuewicqoescm("\x77\x2d\155\144\x2d\61\60\60");
        goto ymuiaigwqkqoaoec;
        qsekucweoiggeose:
        if ($wwgeaeqgacgwooqi) {
            goto yyookuiiewskwaoo;
        }
        goto iocwkkkoaskueuui;
        wkskgkgegemwowes:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\164\162", ["\143\154\141\163\163" => "\146\x6f\162\155\x2d\146\151\x65\154\x64"], [ManipulateHTML::uuccukgasskgimsq("\164\x68", ["\163\x63\x6f\160\145" => "\x72\157\167"], ManipulateHTML::uuccukgasskgimsq("\154\x61\142\x65\154", ["\x66\157\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy)), ManipulateHTML::uuccukgasskgimsq("\x74\x64", [], $nsmgceoqaqogqmuw)]);
        goto ecgeqacmeqikcymq;
        ecgeqacmeqikcymq:
        wkqeuuqqskmuogig:
        goto wgsacqwymyskakys;
        iocwkkkoaskueuui:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\143\x6c\141\163\163" => "\x66\x6f\x72\x6d\55\x66\x69\x65\154\144"], [ManipulateHTML::uuccukgasskgimsq("\154\141\142\145\154", ["\x66\157\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy), $nsmgceoqaqogqmuw]);
        goto kcgsiwomayugckym;
        kcgsiwomayugckym:
        goto wkqeuuqqskmuogig;
        goto kuykiwqqiaoyiwuk;
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
        ymuiaigwqkqoaoec:
        $pkyyagewkiyckmwy = $aiowsaccomcoikus->aakmagwggmkoiiyu();
        goto kmqoewcoumqiuisu;
        ausseeqkoawosiaq:
        return $nsmgceoqaqogqmuw;
        goto wkmcmauyuwqyqmgk;
        wkmcmauyuwqyqmgk:
    }
    
    public static function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return DecoratorTerm::giwmekimakcaawsq(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii = [])
    {
        goto ukicacmwwaemqmmo;
        noguoiggcekkuiie:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto oywwcioimcseikmk;
        oywwcioimcseikmk:
        if (!$iwewcwusemqaiggk) {
            goto kewwwigiwyoccuyc;
        }
        goto mwaquoogsoksymmc;
        akseawaiycesqgac:
        return $okcscwesammossuq;
        goto ikycsuoawawsqwyk;
        mwaquoogsoksymmc:
        $ywmkwiwkosakssii["\x70\141\162\x65\x6e\164"] = $iwewcwusemqaiggk;
        goto oisgcaawyuwigewy;
        ygcwuequuqswkquu:
        kewwwigiwyoccuyc:
        goto akseawaiycesqgac;
        ukicacmwwaemqmmo:
        $okcscwesammossuq = [];
        goto noguoiggcekkuiie;
        oisgcaawyuwigewy:
        $okcscwesammossuq = self::ciugwooasaqcywas(self::yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii);
        goto ygcwuequuqswkquu;
        ikycsuoawawsqwyk:
    }
    
    public static function ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii = [])
    {
        goto qqasmowcceqecouo;
        ycmoqwoqicoesewg:
        $ywmkwiwkosakssii["\x74\141\170\x6f\x6e\x6f\x6d\171"] = $kesssewsiegssiya;
        goto hwsckcsgcgccqoea;
        ocggaukyqkscmoko:
        if (is_array($suuagcecoyuweoqk)) {
            goto smckaqauakgqyega;
        }
        goto kuswuieaqkuaeuyi;
        aeguscqkukywqagm:
        smckaqauakgqyega:
        goto imgaascmkkggqygm;
        imgaascmkkggqygm:
        return $suuagcecoyuweoqk;
        goto aeoocgsmwscewsqk;
        qqasmowcceqecouo:
        if (!$kesssewsiegssiya instanceof WP_Taxonomy) {
            goto ygqccwuyseqmcyum;
        }
        goto gceywsegequeamco;
        gceywsegequeamco:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto cawikiksomukeoik;
        hwsckcsgcgccqoea:
        $suuagcecoyuweoqk = DecoratorTerm::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto ocggaukyqkscmoko;
        kuswuieaqkuaeuyi:
        $suuagcecoyuweoqk = [];
        goto aeguscqkukywqagm;
        cawikiksomukeoik:
        ygqccwuyseqmcyum:
        goto ycmoqwoqicoesewg;
        aeoocgsmwscewsqk:
    }
    
    public static function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '')
    {
        goto sogsuowqkaaecoim;
        iyccwkoemamemeic:
        return $aqykuigiuwmmcieu;
        goto swaciyuuksosagwq;
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
        iciwaqamwecmqwsq:
        $aqykuigiuwmmcieu = DecoratorTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto uascsimkgakoigii;
        sogsuowqkaaecoim:
        if ($kesssewsiegssiya) {
            goto yyaasscyoqgassya;
        }
        goto gucyyaamouukiuoa;
        oaoaqkkuycwqssms:
        yyaasscyoqgassya:
        goto mmqqmqqogowqaasi;
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
        kwauawssoeowaamm:
        $iwewcwusemqaiggk = '';
        goto ycmqimccgmkgyeia;
        amsqkqasgaiqeqkw:
        acaqskwayeieaegi:
        goto kugeoiqqiewkekeq;
        owgigsqiqokuyuiu:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto acaqskwayeieaegi;
        }
        goto ucyymqmgcuyemiec;
        symuwmqkousimose:
        return $iwewcwusemqaiggk;
        goto mogmmaaaicuuscki;
        kugeoiqqiewkekeq:
        if (!is_wp_error($iwewcwusemqaiggk)) {
            goto seagocwkwsqgoggo;
        }
        goto kwauawssoeowaamm;
        ycmqimccgmkgyeia:
        seagocwkwsqgoggo:
        goto symuwmqkousimose;
        mogmmaaaicuuscki:
    }
    
    public static function mwikyscisascoeea($iwewcwusemqaiggk = null, $cwwowqyuwccuykom = false)
    {
        goto gsakaiaaoiykgkoo;
        qesmqmmykiewowmu:
        wwwemoiyskgksksi:
        goto acaiyqkymwwgaiou;
        iwkequgegkyeiqog:
        if (!(!$iwewcwusemqaiggk && !$cwwowqyuwccuykom)) {
            goto cyyokcaimikeccwi;
        }
        goto qesmyqceakgcgmkg;
        smgmaeiuciewqiei:
        cyyokcaimikeccwi:
        goto gkkkoigsweugscqc;
        gkkkoigsweugscqc:
        $iwewcwusemqaiggk = ManipulateArray::get($iwewcwusemqaiggk, "\164\145\162\x6d\137\x69\144");
        goto qesmqmmykiewowmu;
        acaiyqkymwwgaiou:
        return $iwewcwusemqaiggk;
        goto omimseyqisaggwwk;
        qesmyqceakgcgmkg:
        $iwewcwusemqaiggk = get_queried_object();
        goto smgmaeiuciewqiei;
        gsakaiaaoiykgkoo:
        if (is_numeric($iwewcwusemqaiggk)) {
            goto wwwemoiyskgksksi;
        }
        goto iwkequgegkyeiqog;
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
        gaqmoiowskqycuqe:
        gsgayuuqgciwqgoa:
        goto ceamikuakogkkmce;
        coomswccwsqqemso:
        $kesssewsiegssiya = ManipulateArray::get($iwewcwusemqaiggk, "\164\x61\x78\x6f\156\157\155\x79");
        goto wymgkoyemeuosskg;
        eaqcomkumqyekasq:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto ugsyooiaksywugya;
        wymgkoyemeuosskg:
        if (!$awqscowmskeuymeu) {
            goto weuwwsooqyqiucio;
        }
        goto uuymwcykywemycwy;
        emwyqgsmwkmkygcu:
        $kesssewsiegssiya = '';
        goto eaqcomkumqyekasq;
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
        iguuswyoweycqica:
        return self::ciugwooasaqcywas($seyqqsmuaiegkeeq, ["\146\151\145\154\x64\163" => "\151\x64\x73", "\150\151\144\145\x5f\145\x6d\160\164\x79" => true]);
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
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\x70\x75\x62\x6c\x69\x63" => true, self::OUTPUT => self::NAMES, "\160\x75\142\154\x69\143\154\171\x5f\x71\x75\145\162\171\141\x62\154\x65" => true]);
        goto woesikuawyussaiy;
        smicguciweuscgqg:
    }
    
    public static function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null)
    {
        goto gkssguuuysiaciyq;
        qmqekyugykgcsomq:
        return false;
        goto qocogcqouiwqgeak;
        uyeueqqsggiiwqga:
        $migkyseymeomymmy = DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto maiiwqyuwqcgswuq;
        igwiauqkemegeiga:
        if ($migkyseymeomymmy) {
            goto qggkkowqqmasaaua;
        }
        goto qmqekyugykgcsomq;
        maiiwqyuwqcgswuq:
        kkowaueqyseqswyc:
        goto dwuoyyiimkaumsmy;
        dwuoyyiimkaumsmy:
        asciqecgiacoiuoa:
        goto iiucyemcukiwgigo;
        ocymgeqaqyickuqe:
        return $iwewcwusemqaiggk;
        goto qyqiquqgyyommaia;
        iascgqeomcqkckuu:
        qggkkowqqmasaaua:
        goto ocymgeqaqyickuqe;
        oawykgyecmoyewge:
        $migkyseymeomymmy = true;
        goto cgioseiiiogoowqi;
        kqwigmeaoqawgwus:
        if ($iwewcwusemqaiggk) {
            goto uwwyuuoqyieceogk;
        }
        goto auaeiymgkqmoqckc;
        auaeiymgkqmoqckc:
        $iwewcwusemqaiggk = get_queried_object();
        goto imwacgsewasucqqm;
        icqaiqouueccouug:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto peggaoiyqoswguwq;
        peggaoiyqoswguwq:
        if (!$iwewcwusemqaiggk) {
            goto kkowaueqyseqswyc;
        }
        goto uyeueqqsggiiwqga;
        qyqiquqgyyommaia:
        eqecyasoqwkcmmgk:
        goto eogagykquokuwamu;
        qocogcqouiwqgeak:
        goto eqecyasoqwkcmmgk;
        goto iascgqeomcqkckuu;
        cgioseiiiogoowqi:
        iyyowwiyyogmkemi:
        goto igwiauqkemegeiga;
        imwacgsewasucqqm:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto qsmmmigmmsswamkq;
        }
        goto wkmuicuoikisiwko;
        yogsocukuqeumqyk:
        uwwyuuoqyieceogk:
        goto icqaiqouueccouug;
        wkmuicuoikisiwko:
        $iwewcwusemqaiggk = '';
        goto ummwyumussicqiyk;
        gmcoiisikwiewwwa:
        if (!$kesssewsiegssiya) {
            goto asciqecgiacoiuoa;
        }
        goto kqwigmeaoqawgwus;
        ummwyumussicqiyk:
        qsmmmigmmsswamkq:
        goto yogsocukuqeumqyk;
        gkssguuuysiaciyq:
        $migkyseymeomymmy = false;
        goto gmcoiisikwiewwwa;
        iiucyemcukiwgigo:
        if (!(!$migkyseymeomymmy && $kesssewsiegssiya == "\x63\x61\x74\x65\x67\157\162\x79" && DecoratorTaxonomy::sgayqmgoigoseaoo($iwewcwusemqaiggk))) {
            goto iyyowwiyyogmkemi;
        }
        goto oawykgyecmoyewge;
        eogagykquokuwamu:
    }
    
    public static function igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw = '', $cuyooiakswegosog = false)
    {
        return DecoratorTerm::igawqaomowicuayw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function yyykkcyiksewsoqy($iwewcwusemqaiggk, $kesssewsiegssiya = '', $sqeykgyoooqysmca = '')
    {
        goto eoqiaaiuakecqgwg;
        ukqyckkukqmqegiq:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto ekyoguakcuwmciqy;
        eoqiaaiuakecqgwg:
        if ($kesssewsiegssiya) {
            goto gimuekaasmwuiwkk;
        }
        goto ukqyckkukqmqegiq;
        ekyoguakcuwmciqy:
        gimuekaasmwuiwkk:
        goto qksmcagaccmosois;
        qksmcagaccmosois:
        return DecoratorTerm::yyykkcyiksewsoqy(self::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya, $sqeykgyoooqysmca);
        goto oiuyaoysceyuiiky;
        oiuyaoysceyuiiky:
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $kesssewsiegssiya, $yemgmmgogcwccuky = [])
    {
        goto qcyiweqwugwgmogw;
        qcyiweqwugwgmogw:
        $ywmkwiwkosakssii = ["\157\x72\x64\145\x72" => "\x41\x53\103", "\x6e\x75\155\142\x65\x72" => 10, "\145\170\x63\154\x75\144\145" => $yemgmmgogcwccuky];
        goto oqiysqiemaogowyw;
        oqiysqiemaogowyw:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto mcqwwkaqcwqiqsey;
        }
        goto owkgmsiiuwocgqae;
        qwceeuwmumkocgmc:
        mcqwwkaqcwqiqsey:
        goto yaeqgqeakowuiueo;
        yaeqgqeakowuiueo:
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
        goto umemmccckeguuasa;
        owkgmsiiuwocgqae:
        $ywmkwiwkosakssii["\156\x61\x6d\x65\137\x5f\x6c\x69\x6b\x65"] = $meqocwsecsywiiqs;
        goto qwceeuwmumkocgmc;
        umemmccckeguuasa:
    }
    
    public static function iyssgoiwgwygeacg($iwewcwusemqaiggk, $useksmwkuswkwcqg = "\x70\157\x73\164", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x61\x78\137\161\165\x65\x72\x79" => [["\164\x61\170\157\156\157\x6d\171" => self::yyoeeseewqmmyaee($iwewcwusemqaiggk), "\146\151\145\154\x64" => "\164\145\162\155\137\x69\x64", "\164\145\162\x6d\x73" => self::mwikyscisascoeea($iwewcwusemqaiggk)]]]);
        return ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
    }
    
    public static function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ["\x6e\x75\155\x62\145\162" => -1, "\145\x78\143\154\165\144\x65" => $yemgmmgogcwccuky, "\x6d\x65\164\x61\137\161\x75\x65\x72\171" => [["\153\x65\171" => $gwiwsycaaqgwmewg, "\x65\161\x67\x6f\157\143\147\141\161\167\161\x63\151\x6d\x69\145" => $aucgaecqisksougg]]];
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}

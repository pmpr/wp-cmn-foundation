<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Taxonomy;

use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Post_Type;
use WP_Taxonomy;
use WP_Term;

class ManipulateTaxonomy extends Common
{
    
    public static function cekoogweeooasayu($kesssewsiegssiya) : bool
    {
        goto coomswccwsqqemso;
        euqgsqmmekoogmew:
        $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable;
        goto gaqmoiowskqycuqe;
        uuymwcykywemycwy:
        if (!$kesssewsiegssiya) {
            goto ugsyooiaksywugya;
        }
        goto euqgsqmmekoogmew;
        wymgkoyemeuosskg:
        $cekoogweeooasayu = false;
        goto uuymwcykywemycwy;
        gaqmoiowskqycuqe:
        ugsyooiaksywugya:
        goto ceamikuakogkkmce;
        coomswccwsqqemso:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wymgkoyemeuosskg;
        ceamikuakogkkmce:
        return $cekoogweeooasayu;
        goto sgkkcoeimqcykymu;
        sgkkcoeimqcykymu:
    }
    
    public static function uikgwcuascgeissw($kesssewsiegssiya, $pkyyagewkiyckmwy = "\x73\151\x6e\x67\165\x6c\141\x72\x5f\156\x61\x6d\x65")
    {
        goto cqockmkimoaosksq;
        giemuuaeoucmcsuy:
        return ManipulateArray::get($iwkyyocymeukcceu, $pkyyagewkiyckmwy);
        goto woesikuawyussaiy;
        aauykwiueasmccai:
        $iwkyyocymeukcceu = ManipulateArray::get($kesssewsiegssiya, "\x6c\141\142\x65\154\x73", []);
        goto giemuuaeoucmcsuy;
        cqockmkimoaosksq:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto aauykwiueasmccai;
        woesikuawyussaiy:
    }
    
    public static function imgymusqgccqsqqq($kesssewsiegssiya)
    {
        goto uwwyuuoqyieceogk;
        auaeiymgkqmoqckc:
        return $kesssewsiegssiya;
        goto imwacgsewasucqqm;
        asciqecgiacoiuoa:
        $kesssewsiegssiya = $kesssewsiegssiya->taxonomy;
        goto iyyowwiyyogmkemi;
        eqecyasoqwkcmmgk:
        if (!is_wp_error($kesssewsiegssiya)) {
            goto smicguciweuscgqg;
        }
        goto gkssguuuysiaciyq;
        qggkkowqqmasaaua:
        $kesssewsiegssiya = DecoratorTaxonomy::get($kesssewsiegssiya);
        goto eqecyasoqwkcmmgk;
        kkowaueqyseqswyc:
        if (!$kesssewsiegssiya instanceof WP_Term) {
            goto iguuswyoweycqica;
        }
        goto asciqecgiacoiuoa;
        uwwyuuoqyieceogk:
        if ($kesssewsiegssiya instanceof WP_Taxonomy) {
            goto qsmmmigmmsswamkq;
        }
        goto kkowaueqyseqswyc;
        gkssguuuysiaciyq:
        $kesssewsiegssiya = null;
        goto gmcoiisikwiewwwa;
        gmcoiisikwiewwwa:
        smicguciweuscgqg:
        goto kqwigmeaoqawgwus;
        iyyowwiyyogmkemi:
        iguuswyoweycqica:
        goto qggkkowqqmasaaua;
        kqwigmeaoqawgwus:
        qsmmmigmmsswamkq:
        goto auaeiymgkqmoqckc;
        imwacgsewasucqqm:
    }
    
    public static function myagyqumwekameww($kesssewsiegssiya)
    {
        $ymqmyyeuycgmigyo = self::aqcogscycyycgkuq($kesssewsiegssiya);
        return untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\164\x61\x78\57{$ymqmyyeuycgmigyo}\57";
    }
    
    public static function aakmagwggmkoiiyu($kesssewsiegssiya) : string
    {
        return (string) ManipulateArray::get($kesssewsiegssiya, "\x6e\141\155\145", $kesssewsiegssiya);
    }
    
    public static function aqcogscycyycgkuq($kesssewsiegssiya) : ?string
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        return ManipulateArray::qamwegcyimgcqksw($kesssewsiegssiya, "\162\145\x77\x72\x69\164\x65\56\x73\x6c\x75\147", self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function yesqcwicqyewqaco($kesssewsiegssiya) : bool
    {
        return ManipulateArray::get(self::imgymusqgccqsqqq($kesssewsiegssiya), "\163\151\x6e\147\154\145\x5f\x76\x61\154\x75\x65");
    }
    
    public static function aewcsqigycuaekym($kesssewsiegssiya) : bool
    {
        return DecoratorTaxonomy::aewcsqigycuaekym(self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function ackyeagsqcowcuos($awqscowmskeuymeu = true)
    {
        goto icqaiqouueccouug;
        oawykgyecmoyewge:
        if (!$awqscowmskeuymeu) {
            goto wkmuicuoikisiwko;
        }
        goto cgioseiiiogoowqi;
        icqaiqouueccouug:
        $kesssewsiegssiya = null;
        goto peggaoiyqoswguwq;
        dwuoyyiimkaumsmy:
        if (!DecoratorTaxonomy::myagqecycsaiyqsk($ccamueccusigaaio)) {
            goto ummwyumussicqiyk;
        }
        goto iiucyemcukiwgigo;
        uyeueqqsggiiwqga:
        if (!preg_match("\x2f\x5c\x2f\164\141\x78\x5c\57\x28\x5b\136\134\57\x5d\x2b\x29\134\57\x3f\57", $aqmwamyiwgeeymqa, $meyiiwcswqmuggyg)) {
            goto yogsocukuqeumqyk;
        }
        goto maiiwqyuwqcgswuq;
        maiiwqyuwqcgswuq:
        $ccamueccusigaaio = $meyiiwcswqmuggyg[1];
        goto dwuoyyiimkaumsmy;
        iiucyemcukiwgigo:
        $kesssewsiegssiya = $ccamueccusigaaio;
        goto oawykgyecmoyewge;
        igwiauqkemegeiga:
        wkmuicuoikisiwko:
        goto qmqekyugykgcsomq;
        cgioseiiiogoowqi:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto igwiauqkemegeiga;
        qmqekyugykgcsomq:
        ummwyumussicqiyk:
        goto qocogcqouiwqgeak;
        iascgqeomcqkckuu:
        return $kesssewsiegssiya;
        goto ocymgeqaqyickuqe;
        qocogcqouiwqgeak:
        yogsocukuqeumqyk:
        goto iascgqeomcqkckuu;
        peggaoiyqoswguwq:
        $aqmwamyiwgeeymqa = ManipulateServer::ekcymmyqoceukosc();
        goto uyeueqqsggiiwqga;
        ocymgeqaqyickuqe:
    }
    
    public static function gscioiumssogceuc($kesssewsiegssiya, $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto eoqiaaiuakecqgwg;
        mcqwwkaqcwqiqsey:
        $useksmwkuswkwcqg = $sciomagaqmgggsiu[0];
        goto qcyiweqwugwgmogw;
        ukqyckkukqmqegiq:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto ekyoguakcuwmciqy;
        umemmccckeguuasa:
        return $useksmwkuswkwcqg;
        goto ukoimsacquweeuay;
        yaeqgqeakowuiueo:
        gimuekaasmwuiwkk:
        goto umemmccckeguuasa;
        qksmcagaccmosois:
        $sciomagaqmgggsiu = $kesssewsiegssiya->object_type;
        goto oiuyaoysceyuiiky;
        oqiysqiemaogowyw:
        $useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto owkgmsiiuwocgqae;
        qcyiweqwugwgmogw:
        if (!($useksmwkuswkwcqg && $aqykuigiuwmmcieu == self::OBJECT)) {
            goto qyqiquqgyyommaia;
        }
        goto oqiysqiemaogowyw;
        ekyoguakcuwmciqy:
        if (!$kesssewsiegssiya) {
            goto gimuekaasmwuiwkk;
        }
        goto qksmcagaccmosois;
        oiuyaoysceyuiiky:
        if (!(is_array($sciomagaqmgggsiu) && isset($sciomagaqmgggsiu[0]))) {
            goto eogagykquokuwamu;
        }
        goto mcqwwkaqcwqiqsey;
        qwceeuwmumkocgmc:
        eogagykquokuwamu:
        goto yaeqgqeakowuiueo;
        owkgmsiiuwocgqae:
        qyqiquqgyyommaia:
        goto qwceeuwmumkocgmc;
        eoqiaaiuakecqgwg:
        $useksmwkuswkwcqg = null;
        goto ukqyckkukqmqegiq;
        ukoimsacquweeuay:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array
    {
        goto mecymuqyiykqykaw;
        cskamggwwqyceoqc:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto wqsciykkagceeqig;
        mcgewsgecagcyyow:
        $sogksuscggsicmac = $aqykuigiuwmmcieu = ManipulateArray::unset($ywmkwiwkosakssii, self::OUTPUT);
        goto caokwigyuyaygyqo;
        wqsciykkagceeqig:
        cqocaakmqyweouyu:
        goto asuqkmkikmemykke;
        yaqyksksaccowaka:
        qmmieggqaquyceso:
        goto iigwamecymwyyswe;
        iigwamecymwyyswe:
        return $seyqqsmuaiegkeeq;
        goto wgweyasskmqqmwug;
        caokwigyuyaygyqo:
        if (in_array($aqykuigiuwmmcieu, [self::OBJECT, self::NAMES])) {
            goto cqocaakmqyweouyu;
        }
        goto cskamggwwqyceoqc;
        qygiamqwkweamqkq:
        foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) {
            $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label;
            semaiguaaagccqko:
        }
        goto oaikagoacgwugggu;
        mecymuqyiykqykaw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x75\142\154\x69\143" => true, self::OUTPUT => self::OBJECT]);
        goto mcgewsgecagcyyow;
        asuqkmkikmemykke:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto wuaicwqicyygmeqy;
        wuaicwqicyygmeqy:
        if (!($sogksuscggsicmac == self::LABELS)) {
            goto qmmieggqaquyceso;
        }
        goto qygiamqwkweamqkq;
        oaikagoacgwugggu:
        weuqyyaycsmwwiws:
        goto yaqyksksaccowaka;
        wgweyasskmqqmwug:
    }
}

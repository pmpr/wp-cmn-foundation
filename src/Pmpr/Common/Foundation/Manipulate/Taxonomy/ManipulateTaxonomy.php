<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        wymgkoyemeuosskg:
        $cekoogweeooasayu = false;
        goto uuymwcykywemycwy;
        gaqmoiowskqycuqe:
        ugsyooiaksywugya:
        goto ceamikuakogkkmce;
        ceamikuakogkkmce:
        return $cekoogweeooasayu;
        goto sgkkcoeimqcykymu;
        coomswccwsqqemso:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wymgkoyemeuosskg;
        euqgsqmmekoogmew:
        $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable;
        goto gaqmoiowskqycuqe;
        uuymwcykywemycwy:
        if (!$kesssewsiegssiya) {
            goto ugsyooiaksywugya;
        }
        goto euqgsqmmekoogmew;
        sgkkcoeimqcykymu:
    }
    
    public static function uikgwcuascgeissw($kesssewsiegssiya, $pkyyagewkiyckmwy = "\x73\151\156\147\165\x6c\x61\x72\137\156\141\155\x65")
    {
        goto cqockmkimoaosksq;
        aauykwiueasmccai:
        $iwkyyocymeukcceu = ManipulateArray::get($kesssewsiegssiya, "\154\x61\142\145\154\x73", []);
        goto giemuuaeoucmcsuy;
        cqockmkimoaosksq:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto aauykwiueasmccai;
        giemuuaeoucmcsuy:
        return ManipulateArray::get($iwkyyocymeukcceu, $pkyyagewkiyckmwy);
        goto woesikuawyussaiy;
        woesikuawyussaiy:
    }
    
    public static function imgymusqgccqsqqq($kesssewsiegssiya)
    {
        goto uwwyuuoqyieceogk;
        qggkkowqqmasaaua:
        $kesssewsiegssiya = DecoratorTaxonomy::get($kesssewsiegssiya);
        goto eqecyasoqwkcmmgk;
        gmcoiisikwiewwwa:
        smicguciweuscgqg:
        goto kqwigmeaoqawgwus;
        kqwigmeaoqawgwus:
        qsmmmigmmsswamkq:
        goto auaeiymgkqmoqckc;
        iyyowwiyyogmkemi:
        iguuswyoweycqica:
        goto qggkkowqqmasaaua;
        eqecyasoqwkcmmgk:
        if (!is_wp_error($kesssewsiegssiya)) {
            goto smicguciweuscgqg;
        }
        goto gkssguuuysiaciyq;
        uwwyuuoqyieceogk:
        if ($kesssewsiegssiya instanceof WP_Taxonomy) {
            goto qsmmmigmmsswamkq;
        }
        goto kkowaueqyseqswyc;
        auaeiymgkqmoqckc:
        return $kesssewsiegssiya;
        goto imwacgsewasucqqm;
        gkssguuuysiaciyq:
        $kesssewsiegssiya = null;
        goto gmcoiisikwiewwwa;
        kkowaueqyseqswyc:
        if (!$kesssewsiegssiya instanceof WP_Term) {
            goto iguuswyoweycqica;
        }
        goto asciqecgiacoiuoa;
        asciqecgiacoiuoa:
        $kesssewsiegssiya = $kesssewsiegssiya->taxonomy;
        goto iyyowwiyyogmkemi;
        imwacgsewasucqqm:
    }
    
    public static function myagyqumwekameww($kesssewsiegssiya)
    {
        $ymqmyyeuycgmigyo = self::aqcogscycyycgkuq($kesssewsiegssiya);
        return untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\x74\x61\170\57{$ymqmyyeuycgmigyo}\x2f";
    }
    
    public static function aakmagwggmkoiiyu($kesssewsiegssiya) : string
    {
        return (string) ManipulateArray::get($kesssewsiegssiya, "\x6e\x61\x6d\145", $kesssewsiegssiya);
    }
    
    public static function aqcogscycyycgkuq($kesssewsiegssiya) : ?string
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        return ManipulateArray::qamwegcyimgcqksw($kesssewsiegssiya, "\162\x65\167\162\151\x74\x65\56\x73\x6c\x75\147", self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function yesqcwicqyewqaco($kesssewsiegssiya) : bool
    {
        return ManipulateArray::get(self::imgymusqgccqsqqq($kesssewsiegssiya), "\163\x69\x6e\x67\154\x65\x5f\166\141\154\165\145");
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
        uyeueqqsggiiwqga:
        if (!preg_match("\57\x5c\57\x74\x61\170\134\x2f\50\133\136\134\x2f\135\x2b\51\134\57\x3f\57", $aqmwamyiwgeeymqa, $meyiiwcswqmuggyg)) {
            goto yogsocukuqeumqyk;
        }
        goto maiiwqyuwqcgswuq;
        maiiwqyuwqcgswuq:
        $ccamueccusigaaio = $meyiiwcswqmuggyg[1];
        goto dwuoyyiimkaumsmy;
        dwuoyyiimkaumsmy:
        if (!DecoratorTaxonomy::myagqecycsaiyqsk($ccamueccusigaaio)) {
            goto ummwyumussicqiyk;
        }
        goto iiucyemcukiwgigo;
        iiucyemcukiwgigo:
        $kesssewsiegssiya = $ccamueccusigaaio;
        goto oawykgyecmoyewge;
        qocogcqouiwqgeak:
        yogsocukuqeumqyk:
        goto iascgqeomcqkckuu;
        qmqekyugykgcsomq:
        ummwyumussicqiyk:
        goto qocogcqouiwqgeak;
        iascgqeomcqkckuu:
        return $kesssewsiegssiya;
        goto ocymgeqaqyickuqe;
        cgioseiiiogoowqi:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto igwiauqkemegeiga;
        icqaiqouueccouug:
        $kesssewsiegssiya = null;
        goto peggaoiyqoswguwq;
        peggaoiyqoswguwq:
        $aqmwamyiwgeeymqa = ManipulateServer::ekcymmyqoceukosc();
        goto uyeueqqsggiiwqga;
        igwiauqkemegeiga:
        wkmuicuoikisiwko:
        goto qmqekyugykgcsomq;
        ocymgeqaqyickuqe:
    }
    
    public static function gscioiumssogceuc($kesssewsiegssiya, $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto eoqiaaiuakecqgwg;
        oqiysqiemaogowyw:
        $useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto owkgmsiiuwocgqae;
        umemmccckeguuasa:
        return $useksmwkuswkwcqg;
        goto ukoimsacquweeuay;
        qksmcagaccmosois:
        $sciomagaqmgggsiu = $kesssewsiegssiya->object_type;
        goto oiuyaoysceyuiiky;
        mcqwwkaqcwqiqsey:
        $useksmwkuswkwcqg = $sciomagaqmgggsiu[0];
        goto qcyiweqwugwgmogw;
        ukqyckkukqmqegiq:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto ekyoguakcuwmciqy;
        oiuyaoysceyuiiky:
        if (!(is_array($sciomagaqmgggsiu) && isset($sciomagaqmgggsiu[0]))) {
            goto eogagykquokuwamu;
        }
        goto mcqwwkaqcwqiqsey;
        ekyoguakcuwmciqy:
        if (!$kesssewsiegssiya) {
            goto gimuekaasmwuiwkk;
        }
        goto qksmcagaccmosois;
        eoqiaaiuakecqgwg:
        $useksmwkuswkwcqg = null;
        goto ukqyckkukqmqegiq;
        owkgmsiiuwocgqae:
        qyqiquqgyyommaia:
        goto qwceeuwmumkocgmc;
        yaeqgqeakowuiueo:
        gimuekaasmwuiwkk:
        goto umemmccckeguuasa;
        qwceeuwmumkocgmc:
        eogagykquokuwamu:
        goto yaeqgqeakowuiueo;
        qcyiweqwugwgmogw:
        if (!($useksmwkuswkwcqg && $aqykuigiuwmmcieu == self::OBJECT)) {
            goto qyqiquqgyyommaia;
        }
        goto oqiysqiemaogowyw;
        ukoimsacquweeuay:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array
    {
        goto mecymuqyiykqykaw;
        wuaicwqicyygmeqy:
        if (!($sogksuscggsicmac == self::LABELS)) {
            goto qmmieggqaquyceso;
        }
        goto qygiamqwkweamqkq;
        yaqyksksaccowaka:
        qmmieggqaquyceso:
        goto iigwamecymwyyswe;
        oaikagoacgwugggu:
        weuqyyaycsmwwiws:
        goto yaqyksksaccowaka;
        iigwamecymwyyswe:
        return $seyqqsmuaiegkeeq;
        goto wgweyasskmqqmwug;
        mecymuqyiykqykaw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\165\142\x6c\151\143" => true, self::OUTPUT => self::OBJECT]);
        goto mcgewsgecagcyyow;
        wqsciykkagceeqig:
        cqocaakmqyweouyu:
        goto asuqkmkikmemykke;
        asuqkmkikmemykke:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto wuaicwqicyygmeqy;
        qygiamqwkweamqkq:
        foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) {
            $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label;
            semaiguaaagccqko:
        }
        goto oaikagoacgwugggu;
        cskamggwwqyceoqc:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto wqsciykkagceeqig;
        caokwigyuyaygyqo:
        if (in_array($aqykuigiuwmmcieu, [self::OBJECT, self::NAMES])) {
            goto cqocaakmqyweouyu;
        }
        goto cskamggwwqyceoqc;
        mcgewsgecagcyyow:
        $sogksuscggsicmac = $aqykuigiuwmmcieu = ManipulateArray::unset($ywmkwiwkosakssii, self::OUTPUT);
        goto caokwigyuyaygyqo;
        wgweyasskmqqmwug:
    }
}

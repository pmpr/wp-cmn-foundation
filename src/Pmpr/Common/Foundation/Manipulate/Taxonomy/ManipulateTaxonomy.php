<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto emwyqgsmwkmkygcu;
        wymgkoyemeuosskg:
        gsgayuuqgciwqgoa:
        goto uuymwcykywemycwy;
        coomswccwsqqemso:
        $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable;
        goto wymgkoyemeuosskg;
        ugsyooiaksywugya:
        if (!$kesssewsiegssiya) {
            goto gsgayuuqgciwqgoa;
        }
        goto coomswccwsqqemso;
        emwyqgsmwkmkygcu:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto eaqcomkumqyekasq;
        uuymwcykywemycwy:
        return $cekoogweeooasayu;
        goto euqgsqmmekoogmew;
        eaqcomkumqyekasq:
        $cekoogweeooasayu = false;
        goto ugsyooiaksywugya;
        euqgsqmmekoogmew:
    }
    
    public static function uikgwcuascgeissw($kesssewsiegssiya, $pkyyagewkiyckmwy = "\x73\x69\156\x67\x75\154\x61\x72\137\x6e\x61\x6d\x65")
    {
        goto gaqmoiowskqycuqe;
        sgkkcoeimqcykymu:
        return ManipulateArray::get($iwkyyocymeukcceu, $pkyyagewkiyckmwy);
        goto cqockmkimoaosksq;
        gaqmoiowskqycuqe:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto ceamikuakogkkmce;
        ceamikuakogkkmce:
        $iwkyyocymeukcceu = ManipulateArray::get($kesssewsiegssiya, "\x6c\x61\x62\145\x6c\x73", []);
        goto sgkkcoeimqcykymu;
        cqockmkimoaosksq:
    }
    
    public static function imgymusqgccqsqqq($kesssewsiegssiya)
    {
        goto iguuswyoweycqica;
        kkowaueqyseqswyc:
        $kesssewsiegssiya = DecoratorTaxonomy::get($kesssewsiegssiya);
        goto asciqecgiacoiuoa;
        iyyowwiyyogmkemi:
        $kesssewsiegssiya = null;
        goto qggkkowqqmasaaua;
        uwwyuuoqyieceogk:
        aauykwiueasmccai:
        goto kkowaueqyseqswyc;
        qggkkowqqmasaaua:
        giemuuaeoucmcsuy:
        goto eqecyasoqwkcmmgk;
        iguuswyoweycqica:
        if ($kesssewsiegssiya instanceof WP_Taxonomy) {
            goto woesikuawyussaiy;
        }
        goto smicguciweuscgqg;
        eqecyasoqwkcmmgk:
        woesikuawyussaiy:
        goto gkssguuuysiaciyq;
        asciqecgiacoiuoa:
        if (!is_wp_error($kesssewsiegssiya)) {
            goto giemuuaeoucmcsuy;
        }
        goto iyyowwiyyogmkemi;
        gkssguuuysiaciyq:
        return $kesssewsiegssiya;
        goto gmcoiisikwiewwwa;
        smicguciweuscgqg:
        if (!$kesssewsiegssiya instanceof WP_Term) {
            goto aauykwiueasmccai;
        }
        goto qsmmmigmmsswamkq;
        qsmmmigmmsswamkq:
        $kesssewsiegssiya = $kesssewsiegssiya->taxonomy;
        goto uwwyuuoqyieceogk;
        gmcoiisikwiewwwa:
    }
    
    public static function myagyqumwekameww($kesssewsiegssiya)
    {
        $ymqmyyeuycgmigyo = self::aqcogscycyycgkuq($kesssewsiegssiya);
        return untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\x74\141\x78\x2f{$ymqmyyeuycgmigyo}\57";
    }
    
    public static function aakmagwggmkoiiyu($kesssewsiegssiya) : string
    {
        return (string) ManipulateArray::get($kesssewsiegssiya, "\156\x61\155\145", $kesssewsiegssiya);
    }
    
    public static function aqcogscycyycgkuq($kesssewsiegssiya) : ?string
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        return ManipulateArray::qamwegcyimgcqksw($kesssewsiegssiya, "\162\x65\167\162\x69\164\145\56\x73\154\165\147", self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function yesqcwicqyewqaco($kesssewsiegssiya) : bool
    {
        return ManipulateArray::get(self::imgymusqgccqsqqq($kesssewsiegssiya), "\x73\151\x6e\147\154\145\137\166\141\154\165\145");
    }
    
    public static function aewcsqigycuaekym($kesssewsiegssiya) : bool
    {
        return DecoratorTaxonomy::aewcsqigycuaekym(self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function ackyeagsqcowcuos($awqscowmskeuymeu = true)
    {
        goto wkmuicuoikisiwko;
        peggaoiyqoswguwq:
        if (!DecoratorTaxonomy::myagqecycsaiyqsk($ccamueccusigaaio)) {
            goto auaeiymgkqmoqckc;
        }
        goto uyeueqqsggiiwqga;
        uyeueqqsggiiwqga:
        $kesssewsiegssiya = $ccamueccusigaaio;
        goto maiiwqyuwqcgswuq;
        icqaiqouueccouug:
        $ccamueccusigaaio = $meyiiwcswqmuggyg[1];
        goto peggaoiyqoswguwq;
        oawykgyecmoyewge:
        auaeiymgkqmoqckc:
        goto cgioseiiiogoowqi;
        igwiauqkemegeiga:
        return $kesssewsiegssiya;
        goto qmqekyugykgcsomq;
        cgioseiiiogoowqi:
        imwacgsewasucqqm:
        goto igwiauqkemegeiga;
        iiucyemcukiwgigo:
        kqwigmeaoqawgwus:
        goto oawykgyecmoyewge;
        dwuoyyiimkaumsmy:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto iiucyemcukiwgigo;
        yogsocukuqeumqyk:
        if (!preg_match("\57\134\x2f\164\x61\170\x5c\57\50\133\136\x5c\57\x5d\53\x29\x5c\x2f\77\x2f", $aqmwamyiwgeeymqa, $meyiiwcswqmuggyg)) {
            goto imwacgsewasucqqm;
        }
        goto icqaiqouueccouug;
        maiiwqyuwqcgswuq:
        if (!$awqscowmskeuymeu) {
            goto kqwigmeaoqawgwus;
        }
        goto dwuoyyiimkaumsmy;
        ummwyumussicqiyk:
        $aqmwamyiwgeeymqa = ManipulateServer::ekcymmyqoceukosc();
        goto yogsocukuqeumqyk;
        wkmuicuoikisiwko:
        $kesssewsiegssiya = null;
        goto ummwyumussicqiyk;
        qmqekyugykgcsomq:
    }
    
    public static function gscioiumssogceuc($kesssewsiegssiya, $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto qyqiquqgyyommaia;
        eogagykquokuwamu:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto gimuekaasmwuiwkk;
        qksmcagaccmosois:
        if (!($useksmwkuswkwcqg && $aqykuigiuwmmcieu == self::OBJECT)) {
            goto qocogcqouiwqgeak;
        }
        goto oiuyaoysceyuiiky;
        oiuyaoysceyuiiky:
        $useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto mcqwwkaqcwqiqsey;
        qyqiquqgyyommaia:
        $useksmwkuswkwcqg = null;
        goto eogagykquokuwamu;
        qcyiweqwugwgmogw:
        iascgqeomcqkckuu:
        goto oqiysqiemaogowyw;
        owkgmsiiuwocgqae:
        return $useksmwkuswkwcqg;
        goto qwceeuwmumkocgmc;
        mcqwwkaqcwqiqsey:
        qocogcqouiwqgeak:
        goto qcyiweqwugwgmogw;
        oqiysqiemaogowyw:
        ocymgeqaqyickuqe:
        goto owkgmsiiuwocgqae;
        gimuekaasmwuiwkk:
        if (!$kesssewsiegssiya) {
            goto ocymgeqaqyickuqe;
        }
        goto eoqiaaiuakecqgwg;
        eoqiaaiuakecqgwg:
        $sciomagaqmgggsiu = $kesssewsiegssiya->object_type;
        goto ukqyckkukqmqegiq;
        ukqyckkukqmqegiq:
        if (!(is_array($sciomagaqmgggsiu) && isset($sciomagaqmgggsiu[0]))) {
            goto iascgqeomcqkckuu;
        }
        goto ekyoguakcuwmciqy;
        ekyoguakcuwmciqy:
        $useksmwkuswkwcqg = $sciomagaqmgggsiu[0];
        goto qksmcagaccmosois;
        qwceeuwmumkocgmc:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array
    {
        goto weuqyyaycsmwwiws;
        cskamggwwqyceoqc:
        if (!($sogksuscggsicmac == self::LABELS)) {
            goto cqocaakmqyweouyu;
        }
        goto wqsciykkagceeqig;
        caokwigyuyaygyqo:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto cskamggwwqyceoqc;
        mecymuqyiykqykaw:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto mcgewsgecagcyyow;
        wuaicwqicyygmeqy:
        cqocaakmqyweouyu:
        goto qygiamqwkweamqkq;
        semaiguaaagccqko:
        $sogksuscggsicmac = $aqykuigiuwmmcieu = ManipulateArray::unset($ywmkwiwkosakssii, self::OUTPUT);
        goto qmmieggqaquyceso;
        qygiamqwkweamqkq:
        return $seyqqsmuaiegkeeq;
        goto oaikagoacgwugggu;
        qmmieggqaquyceso:
        if (in_array($aqykuigiuwmmcieu, [self::OBJECT, self::NAMES])) {
            goto yaeqgqeakowuiueo;
        }
        goto mecymuqyiykqykaw;
        mcgewsgecagcyyow:
        yaeqgqeakowuiueo:
        goto caokwigyuyaygyqo;
        weuqyyaycsmwwiws:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\165\142\154\x69\143" => true, self::OUTPUT => self::OBJECT]);
        goto semaiguaaagccqko;
        asuqkmkikmemykke:
        umemmccckeguuasa:
        goto wuaicwqicyygmeqy;
        wqsciykkagceeqig:
        foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) {
            $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label;
            ukoimsacquweeuay:
        }
        goto asuqkmkikmemykke;
        oaikagoacgwugggu:
    }
}

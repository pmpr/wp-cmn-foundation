<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto cqocaakmqyweouyu;
        mecymuqyiykqykaw:
        ukoimsacquweeuay:
        goto mcgewsgecagcyyow;
        cqocaakmqyweouyu:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto weuqyyaycsmwwiws;
        weuqyyaycsmwwiws:
        $cekoogweeooasayu = false;
        goto semaiguaaagccqko;
        mcgewsgecagcyyow:
        return $cekoogweeooasayu;
        goto caokwigyuyaygyqo;
        semaiguaaagccqko:
        if (!$kesssewsiegssiya) {
            goto ukoimsacquweeuay;
        }
        goto qmmieggqaquyceso;
        qmmieggqaquyceso:
        $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable;
        goto mecymuqyiykqykaw;
        caokwigyuyaygyqo:
    }
    
    public static function uikgwcuascgeissw($kesssewsiegssiya, $pkyyagewkiyckmwy = "\163\151\x6e\147\165\x6c\x61\x72\137\156\141\155\x65")
    {
        goto cskamggwwqyceoqc;
        cskamggwwqyceoqc:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wqsciykkagceeqig;
        wqsciykkagceeqig:
        $iwkyyocymeukcceu = ManipulateArray::get($kesssewsiegssiya, "\x6c\141\142\x65\154\x73", []);
        goto asuqkmkikmemykke;
        asuqkmkikmemykke:
        return ManipulateArray::get($iwkyyocymeukcceu, $pkyyagewkiyckmwy);
        goto wuaicwqicyygmeqy;
        wuaicwqicyygmeqy:
    }
    
    public static function imgymusqgccqsqqq($kesssewsiegssiya)
    {
        goto iigwamecymwyyswe;
        iygiqwyyouyuccmu:
        $kesssewsiegssiya = $kesssewsiegssiya->taxonomy;
        goto wgsisgoqauqwugim;
        kmeuiagkqyuiuagq:
        $kesssewsiegssiya = DecoratorTaxonomy::get($kesssewsiegssiya);
        goto swigeoaqekeyaiky;
        wgsisgoqauqwugim:
        qygiamqwkweamqkq:
        goto kmeuiagkqyuiuagq;
        wiwowqkgukquawis:
        oaikagoacgwugggu:
        goto kyokwkaegkeqewue;
        iigwamecymwyyswe:
        if ($kesssewsiegssiya instanceof WP_Taxonomy) {
            goto yaqyksksaccowaka;
        }
        goto wgweyasskmqqmwug;
        wgweyasskmqqmwug:
        if (!$kesssewsiegssiya instanceof WP_Term) {
            goto qygiamqwkweamqkq;
        }
        goto iygiqwyyouyuccmu;
        ucaeyoaswykigemu:
        $kesssewsiegssiya = null;
        goto wiwowqkgukquawis;
        cycyoyssckiiakaq:
        return $kesssewsiegssiya;
        goto kkyquoqoogoaeiqm;
        swigeoaqekeyaiky:
        if (!is_wp_error($kesssewsiegssiya)) {
            goto oaikagoacgwugggu;
        }
        goto ucaeyoaswykigemu;
        kyokwkaegkeqewue:
        yaqyksksaccowaka:
        goto cycyoyssckiiakaq;
        kkyquoqoogoaeiqm:
    }
    
    public static function myagyqumwekameww($kesssewsiegssiya)
    {
        $ymqmyyeuycgmigyo = self::aqcogscycyycgkuq($kesssewsiegssiya);
        return untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\164\141\x78\x2f{$ymqmyyeuycgmigyo}\57";
    }
    
    public static function aakmagwggmkoiiyu($kesssewsiegssiya) : string
    {
        return (string) ManipulateArray::get($kesssewsiegssiya, "\156\x61\x6d\x65", $kesssewsiegssiya);
    }
    
    public static function aqcogscycyycgkuq($kesssewsiegssiya) : ?string
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        return ManipulateArray::qamwegcyimgcqksw($kesssewsiegssiya, "\x72\x65\167\x72\x69\x74\x65\56\x73\154\165\147", self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function yesqcwicqyewqaco($kesssewsiegssiya) : bool
    {
        return ManipulateArray::get(self::imgymusqgccqsqqq($kesssewsiegssiya), "\x73\x69\156\147\154\145\137\x76\x61\154\165\x65");
    }
    
    public static function aewcsqigycuaekym($kesssewsiegssiya) : bool
    {
        return DecoratorTaxonomy::aewcsqigycuaekym(self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function ackyeagsqcowcuos($awqscowmskeuymeu = true)
    {
        goto umqmkomieoegoegi;
        oqioiqwiuokuomwq:
        icaqeewacewkowqw:
        goto akmkggmksaueiema;
        akmkggmksaueiema:
        return $kesssewsiegssiya;
        goto yoosmkwkkaieeuog;
        kscqewsaogiywguk:
        if (!DecoratorTaxonomy::myagqecycsaiyqsk($ccamueccusigaaio)) {
            goto quaycauswqeioegu;
        }
        goto oaoimwmaqkueucss;
        oaoimwmaqkueucss:
        $kesssewsiegssiya = $ccamueccusigaaio;
        goto skwmsqkqogmcumqq;
        susyceeqmusmwyui:
        $aqmwamyiwgeeymqa = ManipulateServer::ekcymmyqoceukosc();
        goto qiwasugqiqyukias;
        skwmsqkqogmcumqq:
        if (!$awqscowmskeuymeu) {
            goto goooacyqswyceisw;
        }
        goto aegyswiqyyweooie;
        umqmkomieoegoegi:
        $kesssewsiegssiya = null;
        goto susyceeqmusmwyui;
        esiyseououaawqmg:
        $ccamueccusigaaio = $meyiiwcswqmuggyg[1];
        goto kscqewsaogiywguk;
        aegyswiqyyweooie:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wuqqomswuicqemeq;
        qiwasugqiqyukias:
        if (!preg_match("\57\x5c\57\x74\141\x78\134\57\x28\x5b\x5e\x5c\x2f\x5d\x2b\51\x5c\57\77\57", $aqmwamyiwgeeymqa, $meyiiwcswqmuggyg)) {
            goto icaqeewacewkowqw;
        }
        goto esiyseououaawqmg;
        wuqqomswuicqemeq:
        goooacyqswyceisw:
        goto ccasiuwwmikcmuok;
        ccasiuwwmikcmuok:
        quaycauswqeioegu:
        goto oqioiqwiuokuomwq;
        yoosmkwkkaieeuog:
    }
    
    public static function gscioiumssogceuc($kesssewsiegssiya, $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto awcuymmcaakwaqwo;
        iiyiieuwugakwmco:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto quqksswweecuqqyc;
        ouoacoswaigqeqea:
        jmcecgeiqygsoaeq:
        goto kwqaucmokiowmmsk;
        qiisesouesmuuqso:
        if (!(is_array($sciomagaqmgggsiu) && isset($sciomagaqmgggsiu[0]))) {
            goto eaamoawwmocqgcas;
        }
        goto aieaqkuieuqwoamu;
        aieaqkuieuqwoamu:
        $useksmwkuswkwcqg = $sciomagaqmgggsiu[0];
        goto wsckoqukqewsgioc;
        awcuymmcaakwaqwo:
        $useksmwkuswkwcqg = null;
        goto iiyiieuwugakwmco;
        ugsgiqwcgikweoag:
        $useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto ymgkmumsgwsywawq;
        eecsacmcuiawgsuw:
        eaamoawwmocqgcas:
        goto ouoacoswaigqeqea;
        kwqaucmokiowmmsk:
        return $useksmwkuswkwcqg;
        goto yuiiueawamcwkcii;
        ymgkmumsgwsywawq:
        meeiywyqmokummue:
        goto eecsacmcuiawgsuw;
        wsckoqukqewsgioc:
        if (!($useksmwkuswkwcqg && $aqykuigiuwmmcieu == self::OBJECT)) {
            goto meeiywyqmokummue;
        }
        goto ugsgiqwcgikweoag;
        quqksswweecuqqyc:
        if (!$kesssewsiegssiya) {
            goto jmcecgeiqygsoaeq;
        }
        goto ymaqmqogwemaumeu;
        ymaqmqogwemaumeu:
        $sciomagaqmgggsiu = $kesssewsiegssiya->object_type;
        goto qiisesouesmuuqso;
        yuiiueawamcwkcii:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array
    {
        goto yoqaqyekuywacgay;
        okgeyuqomwgqkica:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto kqiguksmuaiokakg;
        usqaemiysqqycess:
        owewgceyyccggass:
        goto emisqygocmagegey;
        ecoekykcimuquyew:
        if (in_array($aqykuigiuwmmcieu, [self::OBJECT, self::NAMES])) {
            goto akeeaiqiokigiyek;
        }
        goto oaiqqcuocoeesgwo;
        oaiqqcuocoeesgwo:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto iymecmmaqemumgwm;
        aaagmaisyakasiwy:
        $sogksuscggsicmac = $aqykuigiuwmmcieu = ManipulateArray::unset($ywmkwiwkosakssii, self::OUTPUT);
        goto ecoekykcimuquyew;
        ugqewksmawaaikcy:
        return $seyqqsmuaiegkeeq;
        goto gyaygsqackycugma;
        yoqaqyekuywacgay:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\165\142\154\x69\143" => true, self::OUTPUT => self::OBJECT]);
        goto aaagmaisyakasiwy;
        iymecmmaqemumgwm:
        akeeaiqiokigiyek:
        goto okgeyuqomwgqkica;
        emisqygocmagegey:
        gcokswwqieqqqkum:
        goto ugqewksmawaaikcy;
        icgsicquigiaoqcu:
        foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) {
            $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label;
            yciugggyusiwaiei:
        }
        goto usqaemiysqqycess;
        kqiguksmuaiokakg:
        if (!($sogksuscggsicmac == self::LABELS)) {
            goto gcokswwqieqqqkum;
        }
        goto icgsicquigiaoqcu;
        gyaygsqackycugma:
    }
}

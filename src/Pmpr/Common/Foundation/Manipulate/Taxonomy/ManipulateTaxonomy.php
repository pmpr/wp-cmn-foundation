<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto weuqyyaycsmwwiws;
        weuqyyaycsmwwiws:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto semaiguaaagccqko;
        caokwigyuyaygyqo:
        return $cekoogweeooasayu;
        goto cskamggwwqyceoqc;
        semaiguaaagccqko:
        $cekoogweeooasayu = false;
        goto qmmieggqaquyceso;
        qmmieggqaquyceso:
        if (!$kesssewsiegssiya) {
            goto cqocaakmqyweouyu;
        }
        goto mecymuqyiykqykaw;
        mcgewsgecagcyyow:
        cqocaakmqyweouyu:
        goto caokwigyuyaygyqo;
        mecymuqyiykqykaw:
        $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable;
        goto mcgewsgecagcyyow;
        cskamggwwqyceoqc:
    }
    
    public static function uikgwcuascgeissw($kesssewsiegssiya, $pkyyagewkiyckmwy = "\163\x69\x6e\147\165\154\x61\162\137\x6e\x61\x6d\145")
    {
        goto wqsciykkagceeqig;
        asuqkmkikmemykke:
        $iwkyyocymeukcceu = ManipulateArray::get($kesssewsiegssiya, "\154\x61\142\145\x6c\163", []);
        goto wuaicwqicyygmeqy;
        wuaicwqicyygmeqy:
        return ManipulateArray::get($iwkyyocymeukcceu, $pkyyagewkiyckmwy);
        goto qygiamqwkweamqkq;
        wqsciykkagceeqig:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto asuqkmkikmemykke;
        qygiamqwkweamqkq:
    }
    
    public static function imgymusqgccqsqqq($kesssewsiegssiya)
    {
        goto wgweyasskmqqmwug;
        swigeoaqekeyaiky:
        $kesssewsiegssiya = DecoratorTaxonomy::get($kesssewsiegssiya);
        goto ucaeyoaswykigemu;
        wgsisgoqauqwugim:
        $kesssewsiegssiya = $kesssewsiegssiya->taxonomy;
        goto kmeuiagkqyuiuagq;
        wgweyasskmqqmwug:
        if ($kesssewsiegssiya instanceof WP_Taxonomy) {
            goto iigwamecymwyyswe;
        }
        goto iygiqwyyouyuccmu;
        kmeuiagkqyuiuagq:
        oaikagoacgwugggu:
        goto swigeoaqekeyaiky;
        cycyoyssckiiakaq:
        iigwamecymwyyswe:
        goto kkyquoqoogoaeiqm;
        kkyquoqoogoaeiqm:
        return $kesssewsiegssiya;
        goto goooacyqswyceisw;
        ucaeyoaswykigemu:
        if (!is_wp_error($kesssewsiegssiya)) {
            goto yaqyksksaccowaka;
        }
        goto wiwowqkgukquawis;
        wiwowqkgukquawis:
        $kesssewsiegssiya = null;
        goto kyokwkaegkeqewue;
        iygiqwyyouyuccmu:
        if (!$kesssewsiegssiya instanceof WP_Term) {
            goto oaikagoacgwugggu;
        }
        goto wgsisgoqauqwugim;
        kyokwkaegkeqewue:
        yaqyksksaccowaka:
        goto cycyoyssckiiakaq;
        goooacyqswyceisw:
    }
    
    public static function myagyqumwekameww($kesssewsiegssiya)
    {
        $ymqmyyeuycgmigyo = self::aqcogscycyycgkuq($kesssewsiegssiya);
        return untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\164\141\170\57{$ymqmyyeuycgmigyo}\57";
    }
    
    public static function aakmagwggmkoiiyu($kesssewsiegssiya) : string
    {
        return (string) ManipulateArray::get($kesssewsiegssiya, "\x6e\x61\x6d\145", $kesssewsiegssiya);
    }
    
    public static function aqcogscycyycgkuq($kesssewsiegssiya) : ?string
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        return ManipulateArray::qamwegcyimgcqksw($kesssewsiegssiya, "\x72\x65\167\162\x69\164\x65\56\x73\154\165\x67", self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function yesqcwicqyewqaco($kesssewsiegssiya) : bool
    {
        return ManipulateArray::get(self::imgymusqgccqsqqq($kesssewsiegssiya), "\x73\151\x6e\147\154\x65\137\166\141\154\165\145");
    }
    
    public static function aewcsqigycuaekym($kesssewsiegssiya) : bool
    {
        return DecoratorTaxonomy::aewcsqigycuaekym(self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function ackyeagsqcowcuos($awqscowmskeuymeu = true)
    {
        goto susyceeqmusmwyui;
        akmkggmksaueiema:
        umqmkomieoegoegi:
        goto yoosmkwkkaieeuog;
        qiwasugqiqyukias:
        $aqmwamyiwgeeymqa = ManipulateServer::ekcymmyqoceukosc();
        goto esiyseououaawqmg;
        yoosmkwkkaieeuog:
        return $kesssewsiegssiya;
        goto meeiywyqmokummue;
        oaoimwmaqkueucss:
        if (!DecoratorTaxonomy::myagqecycsaiyqsk($ccamueccusigaaio)) {
            goto icaqeewacewkowqw;
        }
        goto skwmsqkqogmcumqq;
        skwmsqkqogmcumqq:
        $kesssewsiegssiya = $ccamueccusigaaio;
        goto aegyswiqyyweooie;
        esiyseououaawqmg:
        if (!preg_match("\x2f\134\57\164\x61\170\134\x2f\50\x5b\136\x5c\x2f\x5d\53\x29\x5c\57\77\x2f", $aqmwamyiwgeeymqa, $meyiiwcswqmuggyg)) {
            goto umqmkomieoegoegi;
        }
        goto kscqewsaogiywguk;
        susyceeqmusmwyui:
        $kesssewsiegssiya = null;
        goto qiwasugqiqyukias;
        kscqewsaogiywguk:
        $ccamueccusigaaio = $meyiiwcswqmuggyg[1];
        goto oaoimwmaqkueucss;
        ccasiuwwmikcmuok:
        quaycauswqeioegu:
        goto oqioiqwiuokuomwq;
        wuqqomswuicqemeq:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto ccasiuwwmikcmuok;
        aegyswiqyyweooie:
        if (!$awqscowmskeuymeu) {
            goto quaycauswqeioegu;
        }
        goto wuqqomswuicqemeq;
        oqioiqwiuokuomwq:
        icaqeewacewkowqw:
        goto akmkggmksaueiema;
        meeiywyqmokummue:
    }
    
    public static function gscioiumssogceuc($kesssewsiegssiya, $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto iiyiieuwugakwmco;
        wsckoqukqewsgioc:
        $useksmwkuswkwcqg = $sciomagaqmgggsiu[0];
        goto ugsgiqwcgikweoag;
        aieaqkuieuqwoamu:
        if (!(is_array($sciomagaqmgggsiu) && isset($sciomagaqmgggsiu[0]))) {
            goto jmcecgeiqygsoaeq;
        }
        goto wsckoqukqewsgioc;
        ugsgiqwcgikweoag:
        if (!($useksmwkuswkwcqg && $aqykuigiuwmmcieu == self::OBJECT)) {
            goto eaamoawwmocqgcas;
        }
        goto ymgkmumsgwsywawq;
        qiisesouesmuuqso:
        $sciomagaqmgggsiu = $kesssewsiegssiya->object_type;
        goto aieaqkuieuqwoamu;
        ymgkmumsgwsywawq:
        $useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto eecsacmcuiawgsuw;
        yuiiueawamcwkcii:
        return $useksmwkuswkwcqg;
        goto akeeaiqiokigiyek;
        iiyiieuwugakwmco:
        $useksmwkuswkwcqg = null;
        goto quqksswweecuqqyc;
        ymaqmqogwemaumeu:
        if (!$kesssewsiegssiya) {
            goto awcuymmcaakwaqwo;
        }
        goto qiisesouesmuuqso;
        quqksswweecuqqyc:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto ymaqmqogwemaumeu;
        ouoacoswaigqeqea:
        jmcecgeiqygsoaeq:
        goto kwqaucmokiowmmsk;
        eecsacmcuiawgsuw:
        eaamoawwmocqgcas:
        goto ouoacoswaigqeqea;
        kwqaucmokiowmmsk:
        awcuymmcaakwaqwo:
        goto yuiiueawamcwkcii;
        akeeaiqiokigiyek:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array
    {
        goto aaagmaisyakasiwy;
        ugqewksmawaaikcy:
        yoqaqyekuywacgay:
        goto gyaygsqackycugma;
        iymecmmaqemumgwm:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto okgeyuqomwgqkica;
        okgeyuqomwgqkica:
        owewgceyyccggass:
        goto kqiguksmuaiokakg;
        kqiguksmuaiokakg:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto icgsicquigiaoqcu;
        emisqygocmagegey:
        yciugggyusiwaiei:
        goto ugqewksmawaaikcy;
        aaagmaisyakasiwy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x75\x62\154\x69\x63" => true, self::OUTPUT => self::OBJECT]);
        goto ecoekykcimuquyew;
        ecoekykcimuquyew:
        $sogksuscggsicmac = $aqykuigiuwmmcieu = ManipulateArray::unset($ywmkwiwkosakssii, self::OUTPUT);
        goto oaiqqcuocoeesgwo;
        usqaemiysqqycess:
        foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) {
            $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label;
            gcokswwqieqqqkum:
        }
        goto emisqygocmagegey;
        oaiqqcuocoeesgwo:
        if (in_array($aqykuigiuwmmcieu, [self::OBJECT, self::NAMES])) {
            goto owewgceyyccggass;
        }
        goto iymecmmaqemumgwm;
        gyaygsqackycugma:
        return $seyqqsmuaiegkeeq;
        goto ukcscyckokswwgkk;
        icgsicquigiaoqcu:
        if (!($sogksuscggsicmac == self::LABELS)) {
            goto yoqaqyekuywacgay;
        }
        goto usqaemiysqqycess;
        ukcscyckokswwgkk:
    }
}

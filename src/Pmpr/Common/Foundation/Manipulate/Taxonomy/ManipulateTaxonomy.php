<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        weuqyyaycsmwwiws:
        $cekoogweeooasayu = false;
        goto semaiguaaagccqko;
        mecymuqyiykqykaw:
        ukoimsacquweeuay:
        goto mcgewsgecagcyyow;
        qmmieggqaquyceso:
        $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable;
        goto mecymuqyiykqykaw;
        semaiguaaagccqko:
        if (!$kesssewsiegssiya) {
            goto ukoimsacquweeuay;
        }
        goto qmmieggqaquyceso;
        mcgewsgecagcyyow:
        return $cekoogweeooasayu;
        goto caokwigyuyaygyqo;
        cqocaakmqyweouyu:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto weuqyyaycsmwwiws;
        caokwigyuyaygyqo:
    }
    
    public static function uikgwcuascgeissw($kesssewsiegssiya, $pkyyagewkiyckmwy = "\163\151\156\147\165\154\141\x72\x5f\x6e\141\x6d\145")
    {
        goto cskamggwwqyceoqc;
        wqsciykkagceeqig:
        $iwkyyocymeukcceu = ManipulateArray::get($kesssewsiegssiya, "\154\141\142\145\154\x73", []);
        goto asuqkmkikmemykke;
        cskamggwwqyceoqc:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wqsciykkagceeqig;
        asuqkmkikmemykke:
        return ManipulateArray::get($iwkyyocymeukcceu, $pkyyagewkiyckmwy);
        goto wuaicwqicyygmeqy;
        wuaicwqicyygmeqy:
    }
    
    public static function imgymusqgccqsqqq($kesssewsiegssiya)
    {
        goto iigwamecymwyyswe;
        kyokwkaegkeqewue:
        yaqyksksaccowaka:
        goto cycyoyssckiiakaq;
        wgsisgoqauqwugim:
        qygiamqwkweamqkq:
        goto kmeuiagkqyuiuagq;
        iygiqwyyouyuccmu:
        $kesssewsiegssiya = $kesssewsiegssiya->taxonomy;
        goto wgsisgoqauqwugim;
        kmeuiagkqyuiuagq:
        $kesssewsiegssiya = DecoratorTaxonomy::get($kesssewsiegssiya);
        goto swigeoaqekeyaiky;
        swigeoaqekeyaiky:
        if (!is_wp_error($kesssewsiegssiya)) {
            goto oaikagoacgwugggu;
        }
        goto ucaeyoaswykigemu;
        cycyoyssckiiakaq:
        return $kesssewsiegssiya;
        goto kkyquoqoogoaeiqm;
        wgweyasskmqqmwug:
        if (!$kesssewsiegssiya instanceof WP_Term) {
            goto qygiamqwkweamqkq;
        }
        goto iygiqwyyouyuccmu;
        ucaeyoaswykigemu:
        $kesssewsiegssiya = null;
        goto wiwowqkgukquawis;
        iigwamecymwyyswe:
        if ($kesssewsiegssiya instanceof WP_Taxonomy) {
            goto yaqyksksaccowaka;
        }
        goto wgweyasskmqqmwug;
        wiwowqkgukquawis:
        oaikagoacgwugggu:
        goto kyokwkaegkeqewue;
        kkyquoqoogoaeiqm:
    }
    
    public static function myagyqumwekameww($kesssewsiegssiya)
    {
        $ymqmyyeuycgmigyo = self::aqcogscycyycgkuq($kesssewsiegssiya);
        return untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\164\x61\x78\57{$ymqmyyeuycgmigyo}\57";
    }
    
    public static function aakmagwggmkoiiyu($kesssewsiegssiya) : string
    {
        return (string) ManipulateArray::get($kesssewsiegssiya, "\156\141\x6d\x65", $kesssewsiegssiya);
    }
    
    public static function aqcogscycyycgkuq($kesssewsiegssiya) : ?string
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        return ManipulateArray::qamwegcyimgcqksw($kesssewsiegssiya, "\x72\x65\x77\162\151\164\145\x2e\163\154\x75\147", self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function yesqcwicqyewqaco($kesssewsiegssiya) : bool
    {
        return ManipulateArray::get(self::imgymusqgccqsqqq($kesssewsiegssiya), "\x73\x69\x6e\x67\154\x65\137\x76\x61\154\165\x65");
    }
    
    public static function aewcsqigycuaekym($kesssewsiegssiya) : bool
    {
        return DecoratorTaxonomy::aewcsqigycuaekym(self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function ackyeagsqcowcuos($awqscowmskeuymeu = true)
    {
        goto umqmkomieoegoegi;
        aegyswiqyyweooie:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wuqqomswuicqemeq;
        oqioiqwiuokuomwq:
        icaqeewacewkowqw:
        goto akmkggmksaueiema;
        oaoimwmaqkueucss:
        $kesssewsiegssiya = $ccamueccusigaaio;
        goto skwmsqkqogmcumqq;
        susyceeqmusmwyui:
        $aqmwamyiwgeeymqa = ManipulateServer::ekcymmyqoceukosc();
        goto qiwasugqiqyukias;
        qiwasugqiqyukias:
        if (!preg_match("\x2f\134\x2f\164\141\170\134\x2f\50\133\x5e\x5c\57\x5d\53\x29\x5c\x2f\x3f\x2f", $aqmwamyiwgeeymqa, $meyiiwcswqmuggyg)) {
            goto icaqeewacewkowqw;
        }
        goto esiyseououaawqmg;
        umqmkomieoegoegi:
        $kesssewsiegssiya = null;
        goto susyceeqmusmwyui;
        ccasiuwwmikcmuok:
        quaycauswqeioegu:
        goto oqioiqwiuokuomwq;
        akmkggmksaueiema:
        return $kesssewsiegssiya;
        goto yoosmkwkkaieeuog;
        wuqqomswuicqemeq:
        goooacyqswyceisw:
        goto ccasiuwwmikcmuok;
        kscqewsaogiywguk:
        if (!DecoratorTaxonomy::myagqecycsaiyqsk($ccamueccusigaaio)) {
            goto quaycauswqeioegu;
        }
        goto oaoimwmaqkueucss;
        skwmsqkqogmcumqq:
        if (!$awqscowmskeuymeu) {
            goto goooacyqswyceisw;
        }
        goto aegyswiqyyweooie;
        esiyseououaawqmg:
        $ccamueccusigaaio = $meyiiwcswqmuggyg[1];
        goto kscqewsaogiywguk;
        yoosmkwkkaieeuog:
    }
    
    public static function gscioiumssogceuc($kesssewsiegssiya, $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto awcuymmcaakwaqwo;
        ouoacoswaigqeqea:
        jmcecgeiqygsoaeq:
        goto kwqaucmokiowmmsk;
        quqksswweecuqqyc:
        if (!$kesssewsiegssiya) {
            goto jmcecgeiqygsoaeq;
        }
        goto ymaqmqogwemaumeu;
        wsckoqukqewsgioc:
        if (!($useksmwkuswkwcqg && $aqykuigiuwmmcieu == self::OBJECT)) {
            goto meeiywyqmokummue;
        }
        goto ugsgiqwcgikweoag;
        iiyiieuwugakwmco:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto quqksswweecuqqyc;
        ymgkmumsgwsywawq:
        meeiywyqmokummue:
        goto eecsacmcuiawgsuw;
        qiisesouesmuuqso:
        if (!(is_array($sciomagaqmgggsiu) && isset($sciomagaqmgggsiu[0]))) {
            goto eaamoawwmocqgcas;
        }
        goto aieaqkuieuqwoamu;
        eecsacmcuiawgsuw:
        eaamoawwmocqgcas:
        goto ouoacoswaigqeqea;
        aieaqkuieuqwoamu:
        $useksmwkuswkwcqg = $sciomagaqmgggsiu[0];
        goto wsckoqukqewsgioc;
        ugsgiqwcgikweoag:
        $useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto ymgkmumsgwsywawq;
        kwqaucmokiowmmsk:
        return $useksmwkuswkwcqg;
        goto yuiiueawamcwkcii;
        ymaqmqogwemaumeu:
        $sciomagaqmgggsiu = $kesssewsiegssiya->object_type;
        goto qiisesouesmuuqso;
        awcuymmcaakwaqwo:
        $useksmwkuswkwcqg = null;
        goto iiyiieuwugakwmco;
        yuiiueawamcwkcii:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array
    {
        goto yoqaqyekuywacgay;
        ecoekykcimuquyew:
        if (in_array($aqykuigiuwmmcieu, [self::OBJECT, self::NAMES])) {
            goto akeeaiqiokigiyek;
        }
        goto oaiqqcuocoeesgwo;
        usqaemiysqqycess:
        owewgceyyccggass:
        goto emisqygocmagegey;
        okgeyuqomwgqkica:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto kqiguksmuaiokakg;
        iymecmmaqemumgwm:
        akeeaiqiokigiyek:
        goto okgeyuqomwgqkica;
        emisqygocmagegey:
        gcokswwqieqqqkum:
        goto ugqewksmawaaikcy;
        kqiguksmuaiokakg:
        if (!($sogksuscggsicmac == self::LABELS)) {
            goto gcokswwqieqqqkum;
        }
        goto icgsicquigiaoqcu;
        icgsicquigiaoqcu:
        foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) {
            $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label;
            yciugggyusiwaiei:
        }
        goto usqaemiysqqycess;
        aaagmaisyakasiwy:
        $sogksuscggsicmac = $aqykuigiuwmmcieu = ManipulateArray::unset($ywmkwiwkosakssii, self::OUTPUT);
        goto ecoekykcimuquyew;
        ugqewksmawaaikcy:
        return $seyqqsmuaiegkeeq;
        goto gyaygsqackycugma;
        oaiqqcuocoeesgwo:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto iymecmmaqemumgwm;
        yoqaqyekuywacgay:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\165\x62\x6c\151\143" => true, self::OUTPUT => self::OBJECT]);
        goto aaagmaisyakasiwy;
        gyaygsqackycugma:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        cqocaakmqyweouyu:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto weuqyyaycsmwwiws;
        weuqyyaycsmwwiws:
        $cekoogweeooasayu = false;
        goto semaiguaaagccqko;
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
        mecymuqyiykqykaw:
        ukoimsacquweeuay:
        goto mcgewsgecagcyyow;
        caokwigyuyaygyqo:
    }
    
    public static function uikgwcuascgeissw($kesssewsiegssiya, $pkyyagewkiyckmwy = "\x73\151\x6e\147\165\154\x61\162\x5f\156\141\155\x65")
    {
        goto cskamggwwqyceoqc;
        asuqkmkikmemykke:
        return ManipulateArray::get($iwkyyocymeukcceu, $pkyyagewkiyckmwy);
        goto wuaicwqicyygmeqy;
        cskamggwwqyceoqc:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wqsciykkagceeqig;
        wqsciykkagceeqig:
        $iwkyyocymeukcceu = ManipulateArray::get($kesssewsiegssiya, "\154\141\142\145\x6c\163", []);
        goto asuqkmkikmemykke;
        wuaicwqicyygmeqy:
    }
    
    public static function imgymusqgccqsqqq($kesssewsiegssiya)
    {
        goto iigwamecymwyyswe;
        kmeuiagkqyuiuagq:
        $kesssewsiegssiya = DecoratorTaxonomy::get($kesssewsiegssiya);
        goto swigeoaqekeyaiky;
        cycyoyssckiiakaq:
        return $kesssewsiegssiya;
        goto kkyquoqoogoaeiqm;
        iigwamecymwyyswe:
        if ($kesssewsiegssiya instanceof WP_Taxonomy) {
            goto yaqyksksaccowaka;
        }
        goto wgweyasskmqqmwug;
        wgsisgoqauqwugim:
        qygiamqwkweamqkq:
        goto kmeuiagkqyuiuagq;
        iygiqwyyouyuccmu:
        $kesssewsiegssiya = $kesssewsiegssiya->taxonomy;
        goto wgsisgoqauqwugim;
        swigeoaqekeyaiky:
        if (!is_wp_error($kesssewsiegssiya)) {
            goto oaikagoacgwugggu;
        }
        goto ucaeyoaswykigemu;
        ucaeyoaswykigemu:
        $kesssewsiegssiya = null;
        goto wiwowqkgukquawis;
        kyokwkaegkeqewue:
        yaqyksksaccowaka:
        goto cycyoyssckiiakaq;
        wgweyasskmqqmwug:
        if (!$kesssewsiegssiya instanceof WP_Term) {
            goto qygiamqwkweamqkq;
        }
        goto iygiqwyyouyuccmu;
        wiwowqkgukquawis:
        oaikagoacgwugggu:
        goto kyokwkaegkeqewue;
        kkyquoqoogoaeiqm:
    }
    
    public static function myagyqumwekameww($kesssewsiegssiya)
    {
        $ymqmyyeuycgmigyo = self::aqcogscycyycgkuq($kesssewsiegssiya);
        return untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\164\141\x78\57{$ymqmyyeuycgmigyo}\57";
    }
    
    public static function aakmagwggmkoiiyu($kesssewsiegssiya) : string
    {
        return (string) ManipulateArray::get($kesssewsiegssiya, "\156\141\155\145", $kesssewsiegssiya);
    }
    
    public static function aqcogscycyycgkuq($kesssewsiegssiya) : ?string
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        return ManipulateArray::qamwegcyimgcqksw($kesssewsiegssiya, "\x72\145\x77\x72\x69\x74\x65\x2e\x73\x6c\x75\x67", self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function yesqcwicqyewqaco($kesssewsiegssiya) : bool
    {
        return ManipulateArray::get(self::imgymusqgccqsqqq($kesssewsiegssiya), "\163\151\x6e\147\154\x65\137\166\141\154\165\145");
    }
    
    public static function aewcsqigycuaekym($kesssewsiegssiya) : bool
    {
        return DecoratorTaxonomy::aewcsqigycuaekym(self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function ackyeagsqcowcuos($awqscowmskeuymeu = true)
    {
        goto umqmkomieoegoegi;
        kscqewsaogiywguk:
        if (!DecoratorTaxonomy::myagqecycsaiyqsk($ccamueccusigaaio)) {
            goto quaycauswqeioegu;
        }
        goto oaoimwmaqkueucss;
        oqioiqwiuokuomwq:
        icaqeewacewkowqw:
        goto akmkggmksaueiema;
        umqmkomieoegoegi:
        $kesssewsiegssiya = null;
        goto susyceeqmusmwyui;
        qiwasugqiqyukias:
        if (!preg_match("\57\x5c\x2f\x74\141\170\x5c\57\x28\133\136\134\57\135\53\x29\x5c\x2f\77\57", $aqmwamyiwgeeymqa, $meyiiwcswqmuggyg)) {
            goto icaqeewacewkowqw;
        }
        goto esiyseououaawqmg;
        aegyswiqyyweooie:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wuqqomswuicqemeq;
        wuqqomswuicqemeq:
        goooacyqswyceisw:
        goto ccasiuwwmikcmuok;
        ccasiuwwmikcmuok:
        quaycauswqeioegu:
        goto oqioiqwiuokuomwq;
        oaoimwmaqkueucss:
        $kesssewsiegssiya = $ccamueccusigaaio;
        goto skwmsqkqogmcumqq;
        akmkggmksaueiema:
        return $kesssewsiegssiya;
        goto yoosmkwkkaieeuog;
        skwmsqkqogmcumqq:
        if (!$awqscowmskeuymeu) {
            goto goooacyqswyceisw;
        }
        goto aegyswiqyyweooie;
        susyceeqmusmwyui:
        $aqmwamyiwgeeymqa = ManipulateServer::ekcymmyqoceukosc();
        goto qiwasugqiqyukias;
        esiyseououaawqmg:
        $ccamueccusigaaio = $meyiiwcswqmuggyg[1];
        goto kscqewsaogiywguk;
        yoosmkwkkaieeuog:
    }
    
    public static function gscioiumssogceuc($kesssewsiegssiya, $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto awcuymmcaakwaqwo;
        kwqaucmokiowmmsk:
        return $useksmwkuswkwcqg;
        goto yuiiueawamcwkcii;
        quqksswweecuqqyc:
        if (!$kesssewsiegssiya) {
            goto jmcecgeiqygsoaeq;
        }
        goto ymaqmqogwemaumeu;
        ymgkmumsgwsywawq:
        meeiywyqmokummue:
        goto eecsacmcuiawgsuw;
        iiyiieuwugakwmco:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto quqksswweecuqqyc;
        aieaqkuieuqwoamu:
        $useksmwkuswkwcqg = $sciomagaqmgggsiu[0];
        goto wsckoqukqewsgioc;
        ugsgiqwcgikweoag:
        $useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto ymgkmumsgwsywawq;
        qiisesouesmuuqso:
        if (!(is_array($sciomagaqmgggsiu) && isset($sciomagaqmgggsiu[0]))) {
            goto eaamoawwmocqgcas;
        }
        goto aieaqkuieuqwoamu;
        ymaqmqogwemaumeu:
        $sciomagaqmgggsiu = $kesssewsiegssiya->object_type;
        goto qiisesouesmuuqso;
        eecsacmcuiawgsuw:
        eaamoawwmocqgcas:
        goto ouoacoswaigqeqea;
        wsckoqukqewsgioc:
        if (!($useksmwkuswkwcqg && $aqykuigiuwmmcieu == self::OBJECT)) {
            goto meeiywyqmokummue;
        }
        goto ugsgiqwcgikweoag;
        awcuymmcaakwaqwo:
        $useksmwkuswkwcqg = null;
        goto iiyiieuwugakwmco;
        ouoacoswaigqeqea:
        jmcecgeiqygsoaeq:
        goto kwqaucmokiowmmsk;
        yuiiueawamcwkcii:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array
    {
        goto yoqaqyekuywacgay;
        ugqewksmawaaikcy:
        return $seyqqsmuaiegkeeq;
        goto gyaygsqackycugma;
        okgeyuqomwgqkica:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto kqiguksmuaiokakg;
        kqiguksmuaiokakg:
        if (!($sogksuscggsicmac == self::LABELS)) {
            goto gcokswwqieqqqkum;
        }
        goto icgsicquigiaoqcu;
        aaagmaisyakasiwy:
        $sogksuscggsicmac = $aqykuigiuwmmcieu = ManipulateArray::unset($ywmkwiwkosakssii, self::OUTPUT);
        goto ecoekykcimuquyew;
        yoqaqyekuywacgay:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\165\x62\x6c\x69\143" => true, self::OUTPUT => self::OBJECT]);
        goto aaagmaisyakasiwy;
        iymecmmaqemumgwm:
        akeeaiqiokigiyek:
        goto okgeyuqomwgqkica;
        emisqygocmagegey:
        gcokswwqieqqqkum:
        goto ugqewksmawaaikcy;
        ecoekykcimuquyew:
        if (in_array($aqykuigiuwmmcieu, [self::OBJECT, self::NAMES])) {
            goto akeeaiqiokigiyek;
        }
        goto oaiqqcuocoeesgwo;
        icgsicquigiaoqcu:
        foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) {
            $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label;
            yciugggyusiwaiei:
        }
        goto usqaemiysqqycess;
        oaiqqcuocoeesgwo:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto iymecmmaqemumgwm;
        usqaemiysqqycess:
        owewgceyyccggass:
        goto emisqygocmagegey;
        gyaygsqackycugma:
    }
}

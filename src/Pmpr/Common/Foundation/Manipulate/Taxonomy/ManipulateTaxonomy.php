<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto iukysegoaommmces;
        kmqoewcoumqiuisu:
        $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable;
        goto kgskmsuccaugocmi;
        ymuiaigwqkqoaoec:
        if (!$kesssewsiegssiya) {
            goto ykckoqoqkkmuoayo;
        }
        goto kmqoewcoumqiuisu;
        qsekucweoiggeose:
        return $cekoogweeooasayu;
        goto iocwkkkoaskueuui;
        wskwsuwssqgyuuko:
        $cekoogweeooasayu = false;
        goto ymuiaigwqkqoaoec;
        kgskmsuccaugocmi:
        ykckoqoqkkmuoayo:
        goto qsekucweoiggeose;
        iukysegoaommmces:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto wskwsuwssqgyuuko;
        iocwkkkoaskueuui:
    }
    
    public static function uikgwcuascgeissw($kesssewsiegssiya, $pkyyagewkiyckmwy = "\163\151\x6e\147\165\154\x61\162\x5f\x6e\x61\155\x65")
    {
        goto kcgsiwomayugckym;
        wkskgkgegemwowes:
        return ManipulateArray::get($iwkyyocymeukcceu, $pkyyagewkiyckmwy);
        goto ecgeqacmeqikcymq;
        kcgsiwomayugckym:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto kuykiwqqiaoyiwuk;
        kuykiwqqiaoyiwuk:
        $iwkyyocymeukcceu = ManipulateArray::get($kesssewsiegssiya, "\x6c\141\142\145\154\x73", []);
        goto wkskgkgegemwowes;
        ecgeqacmeqikcymq:
    }
    
    public static function imgymusqgccqsqqq($kesssewsiegssiya)
    {
        goto kewwwigiwyoccuyc;
        ygqccwuyseqmcyum:
        return $kesssewsiegssiya;
        goto smckaqauakgqyega;
        noguoiggcekkuiie:
        $kesssewsiegssiya = $kesssewsiegssiya->taxonomy;
        goto oywwcioimcseikmk;
        ygcwuequuqswkquu:
        $kesssewsiegssiya = null;
        goto akseawaiycesqgac;
        oywwcioimcseikmk:
        wgsacqwymyskakys:
        goto mwaquoogsoksymmc;
        oisgcaawyuwigewy:
        if (!is_wp_error($kesssewsiegssiya)) {
            goto ausseeqkoawosiaq;
        }
        goto ygcwuequuqswkquu;
        mwaquoogsoksymmc:
        $kesssewsiegssiya = DecoratorTaxonomy::get($kesssewsiegssiya);
        goto oisgcaawyuwigewy;
        kewwwigiwyoccuyc:
        if ($kesssewsiegssiya instanceof WP_Taxonomy) {
            goto wkmcmauyuwqyqmgk;
        }
        goto ukicacmwwaemqmmo;
        akseawaiycesqgac:
        ausseeqkoawosiaq:
        goto ikycsuoawawsqwyk;
        ukicacmwwaemqmmo:
        if (!$kesssewsiegssiya instanceof WP_Term) {
            goto wgsacqwymyskakys;
        }
        goto noguoiggcekkuiie;
        ikycsuoawawsqwyk:
        wkmcmauyuwqyqmgk:
        goto ygqccwuyseqmcyum;
        smckaqauakgqyega:
    }
    
    public static function myagyqumwekameww($kesssewsiegssiya)
    {
        $ymqmyyeuycgmigyo = self::aqcogscycyycgkuq($kesssewsiegssiya);
        return untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\x74\x61\170\57{$ymqmyyeuycgmigyo}\x2f";
    }
    
    public static function aakmagwggmkoiiyu($kesssewsiegssiya) : string
    {
        return (string) ManipulateArray::get($kesssewsiegssiya, "\156\141\155\145", $kesssewsiegssiya);
    }
    
    public static function aqcogscycyycgkuq($kesssewsiegssiya) : ?string
    {
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        return ManipulateArray::qamwegcyimgcqksw($kesssewsiegssiya, "\x72\145\x77\162\151\164\145\x2e\x73\154\165\x67", self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function yesqcwicqyewqaco($kesssewsiegssiya) : bool
    {
        return ManipulateArray::get(self::imgymusqgccqsqqq($kesssewsiegssiya), "\x73\x69\x6e\147\154\145\137\166\x61\x6c\x75\145");
    }
    
    public static function aewcsqigycuaekym($kesssewsiegssiya) : bool
    {
        return DecoratorTaxonomy::aewcsqigycuaekym(self::aakmagwggmkoiiyu($kesssewsiegssiya));
    }
    
    public static function ackyeagsqcowcuos($awqscowmskeuymeu = true)
    {
        goto ycmoqwoqicoesewg;
        yyaasscyoqgassya:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto qyauisewacumumcm;
        gucyyaamouukiuoa:
        cawikiksomukeoik:
        goto oaoaqkkuycwqssms;
        imgaascmkkggqygm:
        $kesssewsiegssiya = $ccamueccusigaaio;
        goto aeoocgsmwscewsqk;
        sogsuowqkaaecoim:
        gceywsegequeamco:
        goto gucyyaamouukiuoa;
        aeoocgsmwscewsqk:
        if (!$awqscowmskeuymeu) {
            goto qqasmowcceqecouo;
        }
        goto yyaasscyoqgassya;
        hwsckcsgcgccqoea:
        $aqmwamyiwgeeymqa = ManipulateServer::ekcymmyqoceukosc();
        goto ocggaukyqkscmoko;
        oaoaqkkuycwqssms:
        return $kesssewsiegssiya;
        goto mmqqmqqogowqaasi;
        kuswuieaqkuaeuyi:
        $ccamueccusigaaio = $meyiiwcswqmuggyg[1];
        goto aeguscqkukywqagm;
        ycmoqwoqicoesewg:
        $kesssewsiegssiya = null;
        goto hwsckcsgcgccqoea;
        ocggaukyqkscmoko:
        if (!preg_match("\x2f\x5c\x2f\164\x61\x78\x5c\57\x28\x5b\x5e\x5c\57\x5d\x2b\x29\134\57\77\57", $aqmwamyiwgeeymqa, $meyiiwcswqmuggyg)) {
            goto cawikiksomukeoik;
        }
        goto kuswuieaqkuaeuyi;
        qyauisewacumumcm:
        qqasmowcceqecouo:
        goto sogsuowqkaaecoim;
        aeguscqkukywqagm:
        if (!DecoratorTaxonomy::myagqecycsaiyqsk($ccamueccusigaaio)) {
            goto gceywsegequeamco;
        }
        goto imgaascmkkggqygm;
        mmqqmqqogowqaasi:
    }
    
    public static function gscioiumssogceuc($kesssewsiegssiya, $aqykuigiuwmmcieu = self::OBJECT)
    {
        goto kogqmigossoqsqoy;
        owgigsqiqokuyuiu:
        $useksmwkuswkwcqg = $sciomagaqmgggsiu[0];
        goto ucyymqmgcuyemiec;
        swaciyuuksosagwq:
        if (!$kesssewsiegssiya) {
            goto qscygwsykuisyuse;
        }
        goto acaqskwayeieaegi;
        kwauawssoeowaamm:
        uascsimkgakoigii:
        goto ycmqimccgmkgyeia;
        iyccwkoemamemeic:
        $kesssewsiegssiya = self::imgymusqgccqsqqq($kesssewsiegssiya);
        goto swaciyuuksosagwq;
        seagocwkwsqgoggo:
        if (!(is_array($sciomagaqmgggsiu) && isset($sciomagaqmgggsiu[0]))) {
            goto uascsimkgakoigii;
        }
        goto owgigsqiqokuyuiu;
        symuwmqkousimose:
        return $useksmwkuswkwcqg;
        goto mogmmaaaicuuscki;
        acaqskwayeieaegi:
        $sciomagaqmgggsiu = $kesssewsiegssiya->object_type;
        goto seagocwkwsqgoggo;
        kogqmigossoqsqoy:
        $useksmwkuswkwcqg = null;
        goto iyccwkoemamemeic;
        ucyymqmgcuyemiec:
        if (!($useksmwkuswkwcqg && $aqykuigiuwmmcieu == self::OBJECT)) {
            goto iciwaqamwecmqwsq;
        }
        goto amsqkqasgaiqeqkw;
        ycmqimccgmkgyeia:
        qscygwsykuisyuse:
        goto symuwmqkousimose;
        amsqkqasgaiqeqkw:
        $useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg);
        goto kugeoiqqiewkekeq;
        kugeoiqqiewkekeq:
        iciwaqamwecmqwsq:
        goto kwauawssoeowaamm;
        mogmmaaaicuuscki:
    }
    
    public static function ciugwooasaqcywas($ywmkwiwkosakssii = []) : array
    {
        goto qesmyqceakgcgmkg;
        emwyqgsmwkmkygcu:
        wwwemoiyskgksksi:
        goto eaqcomkumqyekasq;
        acaiyqkymwwgaiou:
        cyyokcaimikeccwi:
        goto omimseyqisaggwwk;
        ugsyooiaksywugya:
        return $seyqqsmuaiegkeeq;
        goto coomswccwsqqemso;
        gkkkoigsweugscqc:
        if (in_array($aqykuigiuwmmcieu, [self::OBJECT, self::NAMES])) {
            goto cyyokcaimikeccwi;
        }
        goto qesmqmmykiewowmu;
        qesmqmmykiewowmu:
        $aqykuigiuwmmcieu = self::OBJECT;
        goto acaiyqkymwwgaiou;
        omimseyqisaggwwk:
        $seyqqsmuaiegkeeq = DecoratorTaxonomy::ciugwooasaqcywas($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        goto weuwwsooqyqiucio;
        gsgayuuqgciwqgoa:
        foreach ($seyqqsmuaiegkeeq as $uusmaiomayssaecw => $kesssewsiegssiya) {
            $seyqqsmuaiegkeeq[$uusmaiomayssaecw] = $kesssewsiegssiya->label;
            gsakaiaaoiykgkoo:
        }
        goto emwyqgsmwkmkygcu;
        qesmyqceakgcgmkg:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x75\142\154\x69\x63" => true, self::OUTPUT => self::OBJECT]);
        goto smgmaeiuciewqiei;
        smgmaeiuciewqiei:
        $sogksuscggsicmac = $aqykuigiuwmmcieu = ManipulateArray::unset($ywmkwiwkosakssii, self::OUTPUT);
        goto gkkkoigsweugscqc;
        weuwwsooqyqiucio:
        if (!($sogksuscggsicmac == self::LABELS)) {
            goto iwkequgegkyeiqog;
        }
        goto gsgayuuqgciwqgoa;
        eaqcomkumqyekasq:
        iwkequgegkyeiqog:
        goto ugsyooiaksywugya;
        coomswccwsqqemso:
    }
}

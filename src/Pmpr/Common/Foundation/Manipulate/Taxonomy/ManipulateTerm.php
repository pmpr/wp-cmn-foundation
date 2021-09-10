<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto qackiwiueeeceeya;
        ssgqekymikwmgcim:
        return $iwewcwusemqaiggk;
        goto yqwkeskyucykmiqm;
        ygweyqokmqmqoegc:
        $omwmuycmeqcqokom = self::get($iwewcwusemqaiggk->parent);
        goto cuoicwmegcssquai;
        qackiwiueeeceeya:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto ssigosecoiyucquc;
        oqeemsageswyysqq:
        uomqymaegyqyquma:
        goto ssgqekymikwmgcim;
        ssigosecoiyucquc:
        if (!(isset($iwewcwusemqaiggk->parent) && $iwewcwusemqaiggk->parent)) {
            goto uomqymaegyqyquma;
        }
        goto ygweyqokmqmqoegc;
        cuoicwmegcssquai:
        $iwewcwusemqaiggk = self::owaokmsayecmasqu($omwmuycmeqcqokom);
        goto oqeemsageswyysqq;
        yqwkeskyucykmiqm:
    }
    
    public static function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string
    {
        return ManipulateArray::get(self::get($iwewcwusemqaiggk), "\x6e\x61\155\x65", '');
    }
    
    public static function qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi = false) : string
    {
        goto ekemsceqecycmmmu;
        suykaockmyqykyai:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto aaoguekwqoiciuyk;
        }
        goto mmkmacccuiwueymo;
        cueggsysuamckyyg:
        iuosyoicmqwcuuky:
        goto eygsosommcgkywom;
        usioaqqkcwcaqqym:
        $pkyyagewkiyckmwy = $aiowsaccomcoikus->aakmagwggmkoiiyu();
        goto maqygissmeiauaay;
        maqygissmeiauaay:
        $aiowsaccomcoikus->usuqmwksoeaayaig('');
        goto eqauouqgmiyyiqyw;
        eqauouqgmiyyiqyw:
        $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(false);
        goto cwesmgiogeyskqim;
        mkwescmqwgiogikw:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\x69\166", ["\x63\154\141\x73\163" => "\146\x6f\162\155\55\x66\x69\x65\154\x64"], [ManipulateHTML::uuccukgasskgimsq("\154\x61\142\145\x6c", ["\x66\157\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy), $nsmgceoqaqogqmuw]);
        goto icceswgaysawiiqw;
        eoaygwoasoiqewmw:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x74\x72", ["\x63\x6c\141\163\163" => "\x66\157\162\155\55\146\151\145\154\144"], [ManipulateHTML::uuccukgasskgimsq("\x74\150", ["\x73\143\157\160\145" => "\162\157\167"], ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\x65\154", ["\x66\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy)), ManipulateHTML::uuccukgasskgimsq("\164\144", [], $nsmgceoqaqogqmuw)]);
        goto cueggsysuamckyyg;
        cwesmgiogeyskqim:
        if ($wwgeaeqgacgwooqi) {
            goto wwqgwuoimukqimim;
        }
        goto mkwescmqwgiogikw;
        oyeigmugeuaykeck:
        wwqgwuoimukqimim:
        goto eoaygwoasoiqewmw;
        eygsosommcgkywom:
        aaoguekwqoiciuyk:
        goto cgaoeoaocquemgim;
        cgaoeoaocquemgim:
        return $nsmgceoqaqogqmuw;
        goto emwaygiaqusieqse;
        ekemsceqecycmmmu:
        $nsmgceoqaqogqmuw = '';
        goto suykaockmyqykyai;
        icceswgaysawiiqw:
        goto iuosyoicmqwcuuky;
        goto oyeigmugeuaykeck;
        mmkmacccuiwueymo:
        $aiowsaccomcoikus->eqmqucasseomgsce(12)->usoqcyyugsuyiewc("\x77\55\155\x64\55\x39\65")->yqoekuewicqoescm("\x77\x2d\155\x64\55\x31\60\x30");
        goto usioaqqkcwcaqqym;
        emwaygiaqusieqse:
    }
    
    public static function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return DecoratorTerm::giwmekimakcaawsq(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii = [])
    {
        goto gusyiiieqkmciusw;
        gusyiiieqkmciusw:
        $okcscwesammossuq = [];
        goto cqqasyaqucsqwqas;
        swegcuwcgqqgsyoq:
        $ywmkwiwkosakssii["\160\141\x72\x65\156\164"] = $iwewcwusemqaiggk;
        goto aoyicmmccykmsgsg;
        aoyicmmccykmsgsg:
        $okcscwesammossuq = self::ciugwooasaqcywas(self::yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii);
        goto eyogsmikyyiuoaqq;
        iccsuyookkesaeei:
        if (!$iwewcwusemqaiggk) {
            goto ywgassoaekiyeugu;
        }
        goto swegcuwcgqqgsyoq;
        cqqasyaqucsqwqas:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto iccsuyookkesaeei;
        gikyuuwyokecusig:
        return $okcscwesammossuq;
        goto omyycgwuomioaioa;
        eyogsmikyyiuoaqq:
        ywgassoaekiyeugu:
        goto gikyuuwyokecusig;
        omyycgwuomioaioa:
    }
    
    public static function ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii = [])
    {
        goto uqquwkquoqgugyky;
        auaquskkgkuyckiy:
        if (is_array($suuagcecoyuweoqk)) {
            goto gwgwysswcsokuuiq;
        }
        goto ikgwqiqecsmoiasu;
        cmoimsmqkomccsuo:
        $ywmkwiwkosakssii["\164\x61\x78\157\x6e\157\x6d\171"] = $kesssewsiegssiya;
        goto ieiicqcmikawmqwg;
        uqquwkquoqgugyky:
        if (!$kesssewsiegssiya instanceof WP_Taxonomy) {
            goto kcwyqqkwwueaemqo;
        }
        goto aecaiwsoyugiymsk;
        quqsomsqgyaeegcg:
        return $suuagcecoyuweoqk;
        goto oicwoguswieiokwi;
        awioayumusackqes:
        kcwyqqkwwueaemqo:
        goto cmoimsmqkomccsuo;
        ieiicqcmikawmqwg:
        $suuagcecoyuweoqk = DecoratorTerm::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto auaquskkgkuyckiy;
        oigqswimameoumgs:
        gwgwysswcsokuuiq:
        goto quqsomsqgyaeegcg;
        ikgwqiqecsmoiasu:
        $suuagcecoyuweoqk = [];
        goto oigqswimameoumgs;
        aecaiwsoyugiymsk:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto awioayumusackqes;
        oicwoguswieiokwi:
    }
    
    public static function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '')
    {
        goto amayksmqcaeciocm;
        yoymucgagciuoegi:
        cmwkciaaaeimewga:
        goto aqooumuqmsssmukm;
        aeqyyceygouqiggw:
        if (!(!is_string($aqykuigiuwmmcieu) || is_wp_error($aqykuigiuwmmcieu))) {
            goto wwkiyoueyowgaaog;
        }
        goto oiimuikqsueysayy;
        yukuumakuqkumcoq:
        $aqykuigiuwmmcieu = DecoratorTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto aeqyyceygouqiggw;
        amayksmqcaeciocm:
        if ($kesssewsiegssiya) {
            goto cmwkciaaaeimewga;
        }
        goto ykygqyagwwuyqiyy;
        ykygqyagwwuyqiyy:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto yoymucgagciuoegi;
        omqkqswkgyuaywke:
        wwkiyoueyowgaaog:
        goto qmyaseyamuuussia;
        oiimuikqsueysayy:
        $aqykuigiuwmmcieu = '';
        goto omqkqswkgyuaywke;
        qmyaseyamuuussia:
        return $aqykuigiuwmmcieu;
        goto sagosouymgqiycgw;
        aqooumuqmsssmukm:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto yukuumakuqkumcoq;
        sagosouymgqiycgw:
    }
    
    public static function ksmqawcowkmegigw($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '')
    {
        return DecoratorTerm::ksmqawcowkmegigw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis);
    }
    
    public static function get($iwewcwusemqaiggk = null, $kesssewsiegssiya = '')
    {
        goto oeuauqwuswaugqog;
        yyookuiiewskwaoo:
        $iwewcwusemqaiggk = '';
        goto wkqeuuqqskmuogig;
        oeuauqwuswaugqog:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto csyaemwuuiasyees;
        }
        goto uosimiioegsgagcc;
        wkqeuuqqskmuogig:
        uqosmecyeigkygoy:
        goto kqackawqyysgiyyk;
        uosimiioegsgagcc:
        $iwewcwusemqaiggk = DecoratorTerm::get($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto owugsgyeygsuomms;
        owugsgyeygsuomms:
        csyaemwuuiasyees:
        goto gouksaecesowaeqs;
        gouksaecesowaeqs:
        if (!is_wp_error($iwewcwusemqaiggk)) {
            goto uqosmecyeigkygoy;
        }
        goto yyookuiiewskwaoo;
        kqackawqyysgiyyk:
        return $iwewcwusemqaiggk;
        goto ykckoqoqkkmuoayo;
        ykckoqoqkkmuoayo:
    }
    
    public static function mwikyscisascoeea($iwewcwusemqaiggk = null, $cwwowqyuwccuykom = false)
    {
        goto ymuiaigwqkqoaoec;
        ymuiaigwqkqoaoec:
        if (is_numeric($iwewcwusemqaiggk)) {
            goto wskwsuwssqgyuuko;
        }
        goto kmqoewcoumqiuisu;
        kuykiwqqiaoyiwuk:
        return $iwewcwusemqaiggk;
        goto wkskgkgegemwowes;
        qsekucweoiggeose:
        iukysegoaommmces:
        goto iocwkkkoaskueuui;
        iocwkkkoaskueuui:
        $iwewcwusemqaiggk = ManipulateArray::get($iwewcwusemqaiggk, "\164\145\162\155\137\x69\x64");
        goto kcgsiwomayugckym;
        kgskmsuccaugocmi:
        $iwewcwusemqaiggk = get_queried_object();
        goto qsekucweoiggeose;
        kmqoewcoumqiuisu:
        if (!(!$iwewcwusemqaiggk && !$cwwowqyuwccuykom)) {
            goto iukysegoaommmces;
        }
        goto kgskmsuccaugocmi;
        kcgsiwomayugckym:
        wskwsuwssqgyuuko:
        goto kuykiwqqiaoyiwuk;
        wkskgkgegemwowes:
    }
    
    public static function smqukgcyacswysqa($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie = '')
    {
        return DecoratorTerm::smqukgcyacswysqa(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function yyoeeseewqmmyaee($iwewcwusemqaiggk, $awqscowmskeuymeu = false)
    {
        goto ausseeqkoawosiaq;
        noguoiggcekkuiie:
        if (!$awqscowmskeuymeu) {
            goto ecgeqacmeqikcymq;
        }
        goto oywwcioimcseikmk;
        ukicacmwwaemqmmo:
        $kesssewsiegssiya = ManipulateArray::get($iwewcwusemqaiggk, "\x74\141\x78\x6f\x6e\x6f\155\x79");
        goto noguoiggcekkuiie;
        oywwcioimcseikmk:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto mwaquoogsoksymmc;
        kewwwigiwyoccuyc:
        if (!$iwewcwusemqaiggk) {
            goto wgsacqwymyskakys;
        }
        goto ukicacmwwaemqmmo;
        ausseeqkoawosiaq:
        $kesssewsiegssiya = '';
        goto wkmcmauyuwqyqmgk;
        oisgcaawyuwigewy:
        wgsacqwymyskakys:
        goto ygcwuequuqswkquu;
        ygcwuequuqswkquu:
        return $kesssewsiegssiya;
        goto akseawaiycesqgac;
        wkmcmauyuwqyqmgk:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto kewwwigiwyoccuyc;
        mwaquoogsoksymmc:
        ecgeqacmeqikcymq:
        goto oisgcaawyuwigewy;
        akseawaiycesqgac:
    }
    
    public static function emcckouwaoassquc(?array $seyqqsmuaiegkeeq = [])
    {
        goto ygqccwuyseqmcyum;
        smckaqauakgqyega:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\165\142\154\x69\143" => true, self::OUTPUT => self::NAMES, "\160\165\x62\x6c\x69\143\154\x79\x5f\x71\165\145\162\171\x61\x62\x6c\x65" => true]);
        goto qqasmowcceqecouo;
        gceywsegequeamco:
        return self::ciugwooasaqcywas($seyqqsmuaiegkeeq, ["\146\x69\x65\x6c\x64\x73" => "\x69\144\x73", "\x68\151\x64\145\137\x65\155\x70\164\x79" => true]);
        goto cawikiksomukeoik;
        ygqccwuyseqmcyum:
        if ($seyqqsmuaiegkeeq) {
            goto ikycsuoawawsqwyk;
        }
        goto smckaqauakgqyega;
        qqasmowcceqecouo:
        ikycsuoawawsqwyk:
        goto gceywsegequeamco;
        cawikiksomukeoik:
    }
    
    public static function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null)
    {
        goto yyaasscyoqgassya;
        acaqskwayeieaegi:
        kuswuieaqkuaeuyi:
        goto seagocwkwsqgoggo;
        gucyyaamouukiuoa:
        $iwewcwusemqaiggk = get_queried_object();
        goto oaoaqkkuycwqssms;
        qscygwsykuisyuse:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto kogqmigossoqsqoy;
        kogqmigossoqsqoy:
        if (!$iwewcwusemqaiggk) {
            goto ocggaukyqkscmoko;
        }
        goto iyccwkoemamemeic;
        ucyymqmgcuyemiec:
        aeguscqkukywqagm:
        goto amsqkqasgaiqeqkw;
        kwauawssoeowaamm:
        goto aeoocgsmwscewsqk;
        goto ycmqimccgmkgyeia;
        symuwmqkousimose:
        return $iwewcwusemqaiggk;
        goto mogmmaaaicuuscki;
        owgigsqiqokuyuiu:
        $migkyseymeomymmy = true;
        goto ucyymqmgcuyemiec;
        kugeoiqqiewkekeq:
        return false;
        goto kwauawssoeowaamm;
        sogsuowqkaaecoim:
        if ($iwewcwusemqaiggk) {
            goto hwsckcsgcgccqoea;
        }
        goto gucyyaamouukiuoa;
        mogmmaaaicuuscki:
        aeoocgsmwscewsqk:
        goto cyyokcaimikeccwi;
        mmqqmqqogowqaasi:
        $iwewcwusemqaiggk = '';
        goto iciwaqamwecmqwsq;
        qyauisewacumumcm:
        if (!$kesssewsiegssiya) {
            goto kuswuieaqkuaeuyi;
        }
        goto sogsuowqkaaecoim;
        amsqkqasgaiqeqkw:
        if ($migkyseymeomymmy) {
            goto imgaascmkkggqygm;
        }
        goto kugeoiqqiewkekeq;
        uascsimkgakoigii:
        hwsckcsgcgccqoea:
        goto qscygwsykuisyuse;
        swaciyuuksosagwq:
        ocggaukyqkscmoko:
        goto acaqskwayeieaegi;
        iciwaqamwecmqwsq:
        ycmoqwoqicoesewg:
        goto uascsimkgakoigii;
        ycmqimccgmkgyeia:
        imgaascmkkggqygm:
        goto symuwmqkousimose;
        oaoaqkkuycwqssms:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto ycmoqwoqicoesewg;
        }
        goto mmqqmqqogowqaasi;
        iyccwkoemamemeic:
        $migkyseymeomymmy = DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto swaciyuuksosagwq;
        yyaasscyoqgassya:
        $migkyseymeomymmy = false;
        goto qyauisewacumumcm;
        seagocwkwsqgoggo:
        if (!(!$migkyseymeomymmy && $kesssewsiegssiya == "\143\141\x74\145\147\x6f\x72\171" && DecoratorTaxonomy::sgayqmgoigoseaoo($iwewcwusemqaiggk))) {
            goto aeguscqkukywqagm;
        }
        goto owgigsqiqokuyuiu;
        cyyokcaimikeccwi:
    }
    
    public static function igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw = '', $cuyooiakswegosog = false)
    {
        return DecoratorTerm::igawqaomowicuayw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function yyykkcyiksewsoqy($iwewcwusemqaiggk, $kesssewsiegssiya = '', $sqeykgyoooqysmca = '')
    {
        goto gsakaiaaoiykgkoo;
        gsakaiaaoiykgkoo:
        if ($kesssewsiegssiya) {
            goto wwwemoiyskgksksi;
        }
        goto iwkequgegkyeiqog;
        iwkequgegkyeiqog:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto qesmyqceakgcgmkg;
        smgmaeiuciewqiei:
        return DecoratorTerm::yyykkcyiksewsoqy(self::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya, $sqeykgyoooqysmca);
        goto gkkkoigsweugscqc;
        qesmyqceakgcgmkg:
        wwwemoiyskgksksi:
        goto smgmaeiuciewqiei;
        gkkkoigsweugscqc:
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $kesssewsiegssiya, $yemgmmgogcwccuky = [])
    {
        goto acaiyqkymwwgaiou;
        weuwwsooqyqiucio:
        $ywmkwiwkosakssii["\156\141\x6d\x65\x5f\137\x6c\x69\153\x65"] = $meqocwsecsywiiqs;
        goto gsgayuuqgciwqgoa;
        acaiyqkymwwgaiou:
        $ywmkwiwkosakssii = ["\x6f\162\144\x65\x72" => "\x41\x53\103", "\x6e\165\155\142\x65\162" => 10, "\145\170\143\154\165\x64\x65" => $yemgmmgogcwccuky];
        goto omimseyqisaggwwk;
        omimseyqisaggwwk:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto qesmqmmykiewowmu;
        }
        goto weuwwsooqyqiucio;
        gsgayuuqgciwqgoa:
        qesmqmmykiewowmu:
        goto emwyqgsmwkmkygcu;
        emwyqgsmwkmkygcu:
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
        goto eaqcomkumqyekasq;
        eaqcomkumqyekasq:
    }
    
    public static function iyssgoiwgwygeacg($iwewcwusemqaiggk, $useksmwkuswkwcqg = "\160\x6f\x73\x74", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\141\x78\137\161\x75\145\162\x79" => [["\x74\141\x78\157\156\x6f\155\x79" => self::yyoeeseewqmmyaee($iwewcwusemqaiggk), "\146\x69\145\154\144" => "\164\x65\x72\x6d\x5f\151\x64", "\164\145\x72\155\x73" => self::mwikyscisascoeea($iwewcwusemqaiggk)]]]);
        return ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
    }
    
    public static function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ["\156\165\x6d\142\x65\162" => -1, "\x65\170\x63\x6c\165\144\x65" => $yemgmmgogcwccuky, "\155\145\x74\x61\137\161\x75\145\x72\171" => [["\x6b\145\x79" => $gwiwsycaaqgwmewg, "\x76\x61\154\165\x65" => $aucgaecqisksougg]]];
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        ssigosecoiyucquc:
        if (!(isset($iwewcwusemqaiggk->parent) && $iwewcwusemqaiggk->parent)) {
            goto uomqymaegyqyquma;
        }
        goto ygweyqokmqmqoegc;
        ssgqekymikwmgcim:
        return $iwewcwusemqaiggk;
        goto yqwkeskyucykmiqm;
        cuoicwmegcssquai:
        $iwewcwusemqaiggk = self::owaokmsayecmasqu($omwmuycmeqcqokom);
        goto oqeemsageswyysqq;
        qackiwiueeeceeya:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto ssigosecoiyucquc;
        ygweyqokmqmqoegc:
        $omwmuycmeqcqokom = self::get($iwewcwusemqaiggk->parent);
        goto cuoicwmegcssquai;
        oqeemsageswyysqq:
        uomqymaegyqyquma:
        goto ssgqekymikwmgcim;
        yqwkeskyucykmiqm:
    }
    
    public static function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string
    {
        return ManipulateArray::get(self::get($iwewcwusemqaiggk), "\156\x61\x6d\x65", '');
    }
    
    public static function qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi = false) : string
    {
        goto ekemsceqecycmmmu;
        eygsosommcgkywom:
        aaoguekwqoiciuyk:
        goto cgaoeoaocquemgim;
        eqauouqgmiyyiqyw:
        $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(false);
        goto cwesmgiogeyskqim;
        mkwescmqwgiogikw:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\143\x6c\141\x73\163" => "\x66\x6f\x72\155\55\x66\151\x65\x6c\144"], [ManipulateHTML::uuccukgasskgimsq("\x6c\x61\142\145\x6c", ["\x66\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy), $nsmgceoqaqogqmuw]);
        goto icceswgaysawiiqw;
        maqygissmeiauaay:
        $aiowsaccomcoikus->usuqmwksoeaayaig('');
        goto eqauouqgmiyyiqyw;
        icceswgaysawiiqw:
        goto iuosyoicmqwcuuky;
        goto oyeigmugeuaykeck;
        mmkmacccuiwueymo:
        $aiowsaccomcoikus->eqmqucasseomgsce(12)->usoqcyyugsuyiewc("\x77\55\155\144\x2d\x39\x35")->yqoekuewicqoescm("\x77\55\x6d\x64\55\x31\60\60");
        goto usioaqqkcwcaqqym;
        cgaoeoaocquemgim:
        return $nsmgceoqaqogqmuw;
        goto emwaygiaqusieqse;
        oyeigmugeuaykeck:
        wwqgwuoimukqimim:
        goto eoaygwoasoiqewmw;
        eoaygwoasoiqewmw:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x74\x72", ["\143\154\x61\x73\163" => "\146\157\x72\x6d\55\146\x69\145\154\144"], [ManipulateHTML::uuccukgasskgimsq("\164\150", ["\163\143\x6f\x70\x65" => "\162\x6f\167"], ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\145\154", ["\x66\157\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy)), ManipulateHTML::uuccukgasskgimsq("\164\144", [], $nsmgceoqaqogqmuw)]);
        goto cueggsysuamckyyg;
        ekemsceqecycmmmu:
        $nsmgceoqaqogqmuw = '';
        goto suykaockmyqykyai;
        suykaockmyqykyai:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto aaoguekwqoiciuyk;
        }
        goto mmkmacccuiwueymo;
        cueggsysuamckyyg:
        iuosyoicmqwcuuky:
        goto eygsosommcgkywom;
        cwesmgiogeyskqim:
        if ($wwgeaeqgacgwooqi) {
            goto wwqgwuoimukqimim;
        }
        goto mkwescmqwgiogikw;
        usioaqqkcwcaqqym:
        $pkyyagewkiyckmwy = $aiowsaccomcoikus->aakmagwggmkoiiyu();
        goto maqygissmeiauaay;
        emwaygiaqusieqse:
    }
    
    public static function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return DecoratorTerm::giwmekimakcaawsq(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii = [])
    {
        goto gusyiiieqkmciusw;
        aoyicmmccykmsgsg:
        $okcscwesammossuq = self::ciugwooasaqcywas(self::yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii);
        goto eyogsmikyyiuoaqq;
        swegcuwcgqqgsyoq:
        $ywmkwiwkosakssii["\x70\x61\x72\145\x6e\x74"] = $iwewcwusemqaiggk;
        goto aoyicmmccykmsgsg;
        cqqasyaqucsqwqas:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto iccsuyookkesaeei;
        iccsuyookkesaeei:
        if (!$iwewcwusemqaiggk) {
            goto ywgassoaekiyeugu;
        }
        goto swegcuwcgqqgsyoq;
        gikyuuwyokecusig:
        return $okcscwesammossuq;
        goto omyycgwuomioaioa;
        gusyiiieqkmciusw:
        $okcscwesammossuq = [];
        goto cqqasyaqucsqwqas;
        eyogsmikyyiuoaqq:
        ywgassoaekiyeugu:
        goto gikyuuwyokecusig;
        omyycgwuomioaioa:
    }
    
    public static function ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii = [])
    {
        goto uqquwkquoqgugyky;
        ikgwqiqecsmoiasu:
        $suuagcecoyuweoqk = [];
        goto oigqswimameoumgs;
        auaquskkgkuyckiy:
        if (is_array($suuagcecoyuweoqk)) {
            goto gwgwysswcsokuuiq;
        }
        goto ikgwqiqecsmoiasu;
        quqsomsqgyaeegcg:
        return $suuagcecoyuweoqk;
        goto oicwoguswieiokwi;
        awioayumusackqes:
        kcwyqqkwwueaemqo:
        goto cmoimsmqkomccsuo;
        uqquwkquoqgugyky:
        if (!$kesssewsiegssiya instanceof WP_Taxonomy) {
            goto kcwyqqkwwueaemqo;
        }
        goto aecaiwsoyugiymsk;
        ieiicqcmikawmqwg:
        $suuagcecoyuweoqk = DecoratorTerm::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto auaquskkgkuyckiy;
        aecaiwsoyugiymsk:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto awioayumusackqes;
        cmoimsmqkomccsuo:
        $ywmkwiwkosakssii["\164\141\x78\157\156\157\x6d\171"] = $kesssewsiegssiya;
        goto ieiicqcmikawmqwg;
        oigqswimameoumgs:
        gwgwysswcsokuuiq:
        goto quqsomsqgyaeegcg;
        oicwoguswieiokwi:
    }
    
    public static function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '')
    {
        goto amayksmqcaeciocm;
        oiimuikqsueysayy:
        $aqykuigiuwmmcieu = '';
        goto omqkqswkgyuaywke;
        qmyaseyamuuussia:
        return $aqykuigiuwmmcieu;
        goto sagosouymgqiycgw;
        aqooumuqmsssmukm:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto yukuumakuqkumcoq;
        aeqyyceygouqiggw:
        if (!(!is_string($aqykuigiuwmmcieu) || is_wp_error($aqykuigiuwmmcieu))) {
            goto wwkiyoueyowgaaog;
        }
        goto oiimuikqsueysayy;
        yukuumakuqkumcoq:
        $aqykuigiuwmmcieu = DecoratorTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto aeqyyceygouqiggw;
        yoymucgagciuoegi:
        cmwkciaaaeimewga:
        goto aqooumuqmsssmukm;
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
        wkqeuuqqskmuogig:
        uqosmecyeigkygoy:
        goto kqackawqyysgiyyk;
        ykckoqoqkkmuoayo:
    }
    
    public static function mwikyscisascoeea($iwewcwusemqaiggk = null, $cwwowqyuwccuykom = false)
    {
        goto ymuiaigwqkqoaoec;
        qsekucweoiggeose:
        iukysegoaommmces:
        goto iocwkkkoaskueuui;
        kmqoewcoumqiuisu:
        if (!(!$iwewcwusemqaiggk && !$cwwowqyuwccuykom)) {
            goto iukysegoaommmces;
        }
        goto kgskmsuccaugocmi;
        ymuiaigwqkqoaoec:
        if (is_numeric($iwewcwusemqaiggk)) {
            goto wskwsuwssqgyuuko;
        }
        goto kmqoewcoumqiuisu;
        kgskmsuccaugocmi:
        $iwewcwusemqaiggk = get_queried_object();
        goto qsekucweoiggeose;
        kcgsiwomayugckym:
        wskwsuwssqgyuuko:
        goto kuykiwqqiaoyiwuk;
        iocwkkkoaskueuui:
        $iwewcwusemqaiggk = ManipulateArray::get($iwewcwusemqaiggk, "\164\x65\x72\x6d\137\151\x64");
        goto kcgsiwomayugckym;
        kuykiwqqiaoyiwuk:
        return $iwewcwusemqaiggk;
        goto wkskgkgegemwowes;
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
        oisgcaawyuwigewy:
        wgsacqwymyskakys:
        goto ygcwuequuqswkquu;
        kewwwigiwyoccuyc:
        if (!$iwewcwusemqaiggk) {
            goto wgsacqwymyskakys;
        }
        goto ukicacmwwaemqmmo;
        oywwcioimcseikmk:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto mwaquoogsoksymmc;
        wkmcmauyuwqyqmgk:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto kewwwigiwyoccuyc;
        ausseeqkoawosiaq:
        $kesssewsiegssiya = '';
        goto wkmcmauyuwqyqmgk;
        ygcwuequuqswkquu:
        return $kesssewsiegssiya;
        goto akseawaiycesqgac;
        ukicacmwwaemqmmo:
        $kesssewsiegssiya = ManipulateArray::get($iwewcwusemqaiggk, "\164\x61\x78\157\156\157\x6d\x79");
        goto noguoiggcekkuiie;
        mwaquoogsoksymmc:
        ecgeqacmeqikcymq:
        goto oisgcaawyuwigewy;
        akseawaiycesqgac:
    }
    
    public static function emcckouwaoassquc(?array $seyqqsmuaiegkeeq = [])
    {
        goto ygqccwuyseqmcyum;
        ygqccwuyseqmcyum:
        if ($seyqqsmuaiegkeeq) {
            goto ikycsuoawawsqwyk;
        }
        goto smckaqauakgqyega;
        qqasmowcceqecouo:
        ikycsuoawawsqwyk:
        goto gceywsegequeamco;
        gceywsegequeamco:
        return self::ciugwooasaqcywas($seyqqsmuaiegkeeq, ["\146\151\145\x6c\x64\x73" => "\x69\x64\x73", "\150\x69\144\x65\x5f\x65\x6d\160\164\171" => true]);
        goto cawikiksomukeoik;
        smckaqauakgqyega:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\165\x62\x6c\151\x63" => true, self::OUTPUT => self::NAMES, "\x70\165\x62\x6c\151\143\x6c\x79\x5f\x71\x75\x65\x72\x79\x61\142\x6c\145" => true]);
        goto qqasmowcceqecouo;
        cawikiksomukeoik:
    }
    
    public static function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null)
    {
        goto yyaasscyoqgassya;
        qscygwsykuisyuse:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto kogqmigossoqsqoy;
        mmqqmqqogowqaasi:
        $iwewcwusemqaiggk = '';
        goto iciwaqamwecmqwsq;
        qyauisewacumumcm:
        if (!$kesssewsiegssiya) {
            goto kuswuieaqkuaeuyi;
        }
        goto sogsuowqkaaecoim;
        iyccwkoemamemeic:
        $migkyseymeomymmy = DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto swaciyuuksosagwq;
        kogqmigossoqsqoy:
        if (!$iwewcwusemqaiggk) {
            goto ocggaukyqkscmoko;
        }
        goto iyccwkoemamemeic;
        yyaasscyoqgassya:
        $migkyseymeomymmy = false;
        goto qyauisewacumumcm;
        uascsimkgakoigii:
        hwsckcsgcgccqoea:
        goto qscygwsykuisyuse;
        kugeoiqqiewkekeq:
        return false;
        goto kwauawssoeowaamm;
        symuwmqkousimose:
        return $iwewcwusemqaiggk;
        goto mogmmaaaicuuscki;
        gucyyaamouukiuoa:
        $iwewcwusemqaiggk = get_queried_object();
        goto oaoaqkkuycwqssms;
        sogsuowqkaaecoim:
        if ($iwewcwusemqaiggk) {
            goto hwsckcsgcgccqoea;
        }
        goto gucyyaamouukiuoa;
        owgigsqiqokuyuiu:
        $migkyseymeomymmy = true;
        goto ucyymqmgcuyemiec;
        ycmqimccgmkgyeia:
        imgaascmkkggqygm:
        goto symuwmqkousimose;
        swaciyuuksosagwq:
        ocggaukyqkscmoko:
        goto acaqskwayeieaegi;
        ucyymqmgcuyemiec:
        aeguscqkukywqagm:
        goto amsqkqasgaiqeqkw;
        seagocwkwsqgoggo:
        if (!(!$migkyseymeomymmy && $kesssewsiegssiya == "\x63\x61\164\x65\147\157\x72\171" && DecoratorTaxonomy::sgayqmgoigoseaoo($iwewcwusemqaiggk))) {
            goto aeguscqkukywqagm;
        }
        goto owgigsqiqokuyuiu;
        acaqskwayeieaegi:
        kuswuieaqkuaeuyi:
        goto seagocwkwsqgoggo;
        kwauawssoeowaamm:
        goto aeoocgsmwscewsqk;
        goto ycmqimccgmkgyeia;
        mogmmaaaicuuscki:
        aeoocgsmwscewsqk:
        goto cyyokcaimikeccwi;
        iciwaqamwecmqwsq:
        ycmoqwoqicoesewg:
        goto uascsimkgakoigii;
        oaoaqkkuycwqssms:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto ycmoqwoqicoesewg;
        }
        goto mmqqmqqogowqaasi;
        amsqkqasgaiqeqkw:
        if ($migkyseymeomymmy) {
            goto imgaascmkkggqygm;
        }
        goto kugeoiqqiewkekeq;
        cyyokcaimikeccwi:
    }
    
    public static function igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw = '', $cuyooiakswegosog = false)
    {
        return DecoratorTerm::igawqaomowicuayw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function yyykkcyiksewsoqy($iwewcwusemqaiggk, $kesssewsiegssiya = '', $sqeykgyoooqysmca = '')
    {
        goto gsakaiaaoiykgkoo;
        iwkequgegkyeiqog:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto qesmyqceakgcgmkg;
        gsakaiaaoiykgkoo:
        if ($kesssewsiegssiya) {
            goto wwwemoiyskgksksi;
        }
        goto iwkequgegkyeiqog;
        qesmyqceakgcgmkg:
        wwwemoiyskgksksi:
        goto smgmaeiuciewqiei;
        smgmaeiuciewqiei:
        return DecoratorTerm::yyykkcyiksewsoqy(self::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya, $sqeykgyoooqysmca);
        goto gkkkoigsweugscqc;
        gkkkoigsweugscqc:
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $kesssewsiegssiya, $yemgmmgogcwccuky = [])
    {
        goto acaiyqkymwwgaiou;
        gsgayuuqgciwqgoa:
        qesmqmmykiewowmu:
        goto emwyqgsmwkmkygcu;
        emwyqgsmwkmkygcu:
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
        goto eaqcomkumqyekasq;
        weuwwsooqyqiucio:
        $ywmkwiwkosakssii["\156\141\155\x65\x5f\137\x6c\x69\153\x65"] = $meqocwsecsywiiqs;
        goto gsgayuuqgciwqgoa;
        omimseyqisaggwwk:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto qesmqmmykiewowmu;
        }
        goto weuwwsooqyqiucio;
        acaiyqkymwwgaiou:
        $ywmkwiwkosakssii = ["\x6f\x72\144\x65\162" => "\x41\x53\103", "\x6e\x75\155\142\145\x72" => 10, "\145\170\x63\x6c\165\144\145" => $yemgmmgogcwccuky];
        goto omimseyqisaggwwk;
        eaqcomkumqyekasq:
    }
    
    public static function iyssgoiwgwygeacg($iwewcwusemqaiggk, $useksmwkuswkwcqg = "\160\157\x73\x74", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\141\170\137\x71\165\145\162\171" => [["\x74\141\170\x6f\x6e\157\x6d\x79" => self::yyoeeseewqmmyaee($iwewcwusemqaiggk), "\x66\x69\145\154\144" => "\164\145\x72\155\x5f\151\144", "\164\145\162\155\x73" => self::mwikyscisascoeea($iwewcwusemqaiggk)]]]);
        return ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
    }
    
    public static function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ["\x6e\x75\155\x62\145\162" => -1, "\x65\170\143\x6c\165\x64\x65" => $yemgmmgogcwccuky, "\x6d\x65\x74\x61\x5f\x71\165\x65\162\171" => [["\153\145\171" => $gwiwsycaaqgwmewg, "\x76\x61\154\x75\x65" => $aucgaecqisksougg]]];
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}

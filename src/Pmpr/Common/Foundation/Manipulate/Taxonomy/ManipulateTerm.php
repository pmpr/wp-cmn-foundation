<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto uqwkcimoeweusoci;
        ssigosecoiyucquc:
        ssagsmaymgmuaoiu:
        goto ygweyqokmqmqoegc;
        ygweyqokmqmqoegc:
        return $iwewcwusemqaiggk;
        goto cuoicwmegcssquai;
        meeowaqccyoouiys:
        if (!(isset($iwewcwusemqaiggk->parent) && $iwewcwusemqaiggk->parent)) {
            goto ssagsmaymgmuaoiu;
        }
        goto uomqymaegyqyquma;
        qackiwiueeeceeya:
        $iwewcwusemqaiggk = self::owaokmsayecmasqu($omwmuycmeqcqokom);
        goto ssigosecoiyucquc;
        uomqymaegyqyquma:
        $omwmuycmeqcqokom = self::get($iwewcwusemqaiggk->parent);
        goto qackiwiueeeceeya;
        uqwkcimoeweusoci:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto meeowaqccyoouiys;
        cuoicwmegcssquai:
    }
    
    public static function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string
    {
        return ManipulateArray::get(self::get($iwewcwusemqaiggk), "\x6e\141\155\145", '');
    }
    
    public static function qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi = false) : string
    {
        goto wwqgwuoimukqimim;
        wwqgwuoimukqimim:
        $nsmgceoqaqogqmuw = '';
        goto iuosyoicmqwcuuky;
        eoaygwoasoiqewmw:
        return $nsmgceoqaqogqmuw;
        goto cueggsysuamckyyg;
        iuosyoicmqwcuuky:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto yqwkeskyucykmiqm;
        }
        goto aaoguekwqoiciuyk;
        maqygissmeiauaay:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\143\x6c\x61\163\163" => "\x66\157\162\x6d\55\146\x69\x65\x6c\x64"], [ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\145\154", ["\x66\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy), $nsmgceoqaqogqmuw]);
        goto eqauouqgmiyyiqyw;
        suykaockmyqykyai:
        $aiowsaccomcoikus->usuqmwksoeaayaig('');
        goto mmkmacccuiwueymo;
        oyeigmugeuaykeck:
        yqwkeskyucykmiqm:
        goto eoaygwoasoiqewmw;
        cwesmgiogeyskqim:
        oqeemsageswyysqq:
        goto mkwescmqwgiogikw;
        mkwescmqwgiogikw:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\164\x72", ["\143\154\141\163\163" => "\x66\x6f\162\155\x2d\146\151\x65\x6c\144"], [ManipulateHTML::uuccukgasskgimsq("\164\150", ["\x73\143\157\x70\x65" => "\162\157\167"], ManipulateHTML::uuccukgasskgimsq("\x6c\141\x62\x65\154", ["\146\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy)), ManipulateHTML::uuccukgasskgimsq("\x74\x64", [], $nsmgceoqaqogqmuw)]);
        goto icceswgaysawiiqw;
        eqauouqgmiyyiqyw:
        goto ssgqekymikwmgcim;
        goto cwesmgiogeyskqim;
        ekemsceqecycmmmu:
        $pkyyagewkiyckmwy = $aiowsaccomcoikus->aakmagwggmkoiiyu();
        goto suykaockmyqykyai;
        usioaqqkcwcaqqym:
        if ($wwgeaeqgacgwooqi) {
            goto oqeemsageswyysqq;
        }
        goto maqygissmeiauaay;
        icceswgaysawiiqw:
        ssgqekymikwmgcim:
        goto oyeigmugeuaykeck;
        mmkmacccuiwueymo:
        $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(false);
        goto usioaqqkcwcaqqym;
        aaoguekwqoiciuyk:
        $aiowsaccomcoikus->eqmqucasseomgsce(12)->usoqcyyugsuyiewc("\167\x2d\155\144\55\71\65")->yqoekuewicqoescm("\x77\55\155\x64\x2d\x31\x30\x30");
        goto ekemsceqecycmmmu;
        cueggsysuamckyyg:
    }
    
    public static function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return DecoratorTerm::giwmekimakcaawsq(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii = [])
    {
        goto cgaoeoaocquemgim;
        gusyiiieqkmciusw:
        $ywmkwiwkosakssii["\x70\141\162\145\x6e\x74"] = $iwewcwusemqaiggk;
        goto cqqasyaqucsqwqas;
        cgaoeoaocquemgim:
        $okcscwesammossuq = [];
        goto emwaygiaqusieqse;
        emwaygiaqusieqse:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto ywgassoaekiyeugu;
        iccsuyookkesaeei:
        eygsosommcgkywom:
        goto swegcuwcgqqgsyoq;
        swegcuwcgqqgsyoq:
        return $okcscwesammossuq;
        goto aoyicmmccykmsgsg;
        cqqasyaqucsqwqas:
        $okcscwesammossuq = self::ciugwooasaqcywas(self::yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii);
        goto iccsuyookkesaeei;
        ywgassoaekiyeugu:
        if (!$iwewcwusemqaiggk) {
            goto eygsosommcgkywom;
        }
        goto gusyiiieqkmciusw;
        aoyicmmccykmsgsg:
    }
    
    public static function ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii = [])
    {
        goto omyycgwuomioaioa;
        auaquskkgkuyckiy:
        return $suuagcecoyuweoqk;
        goto ikgwqiqecsmoiasu;
        awioayumusackqes:
        if (is_array($suuagcecoyuweoqk)) {
            goto gikyuuwyokecusig;
        }
        goto cmoimsmqkomccsuo;
        ieiicqcmikawmqwg:
        gikyuuwyokecusig:
        goto auaquskkgkuyckiy;
        aecaiwsoyugiymsk:
        $suuagcecoyuweoqk = DecoratorTerm::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto awioayumusackqes;
        kcwyqqkwwueaemqo:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto gwgwysswcsokuuiq;
        gwgwysswcsokuuiq:
        eyogsmikyyiuoaqq:
        goto uqquwkquoqgugyky;
        omyycgwuomioaioa:
        if (!$kesssewsiegssiya instanceof WP_Taxonomy) {
            goto eyogsmikyyiuoaqq;
        }
        goto kcwyqqkwwueaemqo;
        uqquwkquoqgugyky:
        $ywmkwiwkosakssii["\x74\x61\x78\x6f\156\157\x6d\x79"] = $kesssewsiegssiya;
        goto aecaiwsoyugiymsk;
        cmoimsmqkomccsuo:
        $suuagcecoyuweoqk = [];
        goto ieiicqcmikawmqwg;
        ikgwqiqecsmoiasu:
    }
    
    public static function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '')
    {
        goto oicwoguswieiokwi;
        yukuumakuqkumcoq:
        quqsomsqgyaeegcg:
        goto aeqyyceygouqiggw;
        cmwkciaaaeimewga:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto wwkiyoueyowgaaog;
        amayksmqcaeciocm:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto ykygqyagwwuyqiyy;
        aeqyyceygouqiggw:
        return $aqykuigiuwmmcieu;
        goto oiimuikqsueysayy;
        ykygqyagwwuyqiyy:
        $aqykuigiuwmmcieu = DecoratorTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto yoymucgagciuoegi;
        yoymucgagciuoegi:
        if (!(!is_string($aqykuigiuwmmcieu) || is_wp_error($aqykuigiuwmmcieu))) {
            goto quqsomsqgyaeegcg;
        }
        goto aqooumuqmsssmukm;
        aqooumuqmsssmukm:
        $aqykuigiuwmmcieu = '';
        goto yukuumakuqkumcoq;
        wwkiyoueyowgaaog:
        oigqswimameoumgs:
        goto amayksmqcaeciocm;
        oicwoguswieiokwi:
        if ($kesssewsiegssiya) {
            goto oigqswimameoumgs;
        }
        goto cmwkciaaaeimewga;
        oiimuikqsueysayy:
    }
    
    public static function ksmqawcowkmegigw($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '')
    {
        return DecoratorTerm::ksmqawcowkmegigw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis);
    }
    
    public static function get($iwewcwusemqaiggk = null, $kesssewsiegssiya = '')
    {
        goto sagosouymgqiycgw;
        sagosouymgqiycgw:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto omqkqswkgyuaywke;
        }
        goto csyaemwuuiasyees;
        uqosmecyeigkygoy:
        omqkqswkgyuaywke:
        goto oeuauqwuswaugqog;
        uosimiioegsgagcc:
        $iwewcwusemqaiggk = '';
        goto owugsgyeygsuomms;
        gouksaecesowaeqs:
        return $iwewcwusemqaiggk;
        goto yyookuiiewskwaoo;
        oeuauqwuswaugqog:
        if (!is_wp_error($iwewcwusemqaiggk)) {
            goto qmyaseyamuuussia;
        }
        goto uosimiioegsgagcc;
        owugsgyeygsuomms:
        qmyaseyamuuussia:
        goto gouksaecesowaeqs;
        csyaemwuuiasyees:
        $iwewcwusemqaiggk = DecoratorTerm::get($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto uqosmecyeigkygoy;
        yyookuiiewskwaoo:
    }
    
    public static function mwikyscisascoeea($iwewcwusemqaiggk = null, $cwwowqyuwccuykom = false)
    {
        goto ykckoqoqkkmuoayo;
        ykckoqoqkkmuoayo:
        if (is_numeric($iwewcwusemqaiggk)) {
            goto kqackawqyysgiyyk;
        }
        goto iukysegoaommmces;
        iukysegoaommmces:
        if (!(!$iwewcwusemqaiggk && !$cwwowqyuwccuykom)) {
            goto wkqeuuqqskmuogig;
        }
        goto wskwsuwssqgyuuko;
        kgskmsuccaugocmi:
        kqackawqyysgiyyk:
        goto qsekucweoiggeose;
        wskwsuwssqgyuuko:
        $iwewcwusemqaiggk = get_queried_object();
        goto ymuiaigwqkqoaoec;
        ymuiaigwqkqoaoec:
        wkqeuuqqskmuogig:
        goto kmqoewcoumqiuisu;
        kmqoewcoumqiuisu:
        $iwewcwusemqaiggk = ManipulateArray::get($iwewcwusemqaiggk, "\x74\145\162\x6d\137\x69\x64");
        goto kgskmsuccaugocmi;
        qsekucweoiggeose:
        return $iwewcwusemqaiggk;
        goto iocwkkkoaskueuui;
        iocwkkkoaskueuui:
    }
    
    public static function smqukgcyacswysqa($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie = '')
    {
        return DecoratorTerm::smqukgcyacswysqa(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function yyoeeseewqmmyaee($iwewcwusemqaiggk, $awqscowmskeuymeu = false)
    {
        goto wkskgkgegemwowes;
        wkmcmauyuwqyqmgk:
        if (!$awqscowmskeuymeu) {
            goto kcgsiwomayugckym;
        }
        goto kewwwigiwyoccuyc;
        ecgeqacmeqikcymq:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto wgsacqwymyskakys;
        ausseeqkoawosiaq:
        $kesssewsiegssiya = ManipulateArray::get($iwewcwusemqaiggk, "\x74\141\170\157\x6e\157\155\171");
        goto wkmcmauyuwqyqmgk;
        wgsacqwymyskakys:
        if (!$iwewcwusemqaiggk) {
            goto kuykiwqqiaoyiwuk;
        }
        goto ausseeqkoawosiaq;
        oywwcioimcseikmk:
        return $kesssewsiegssiya;
        goto mwaquoogsoksymmc;
        kewwwigiwyoccuyc:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto ukicacmwwaemqmmo;
        ukicacmwwaemqmmo:
        kcgsiwomayugckym:
        goto noguoiggcekkuiie;
        noguoiggcekkuiie:
        kuykiwqqiaoyiwuk:
        goto oywwcioimcseikmk;
        wkskgkgegemwowes:
        $kesssewsiegssiya = '';
        goto ecgeqacmeqikcymq;
        mwaquoogsoksymmc:
    }
    
    public static function emcckouwaoassquc(?array $seyqqsmuaiegkeeq = [])
    {
        goto ygcwuequuqswkquu;
        ygqccwuyseqmcyum:
        return self::ciugwooasaqcywas($seyqqsmuaiegkeeq, ["\146\151\145\154\144\163" => "\x69\x64\163", "\x68\x69\x64\145\x5f\145\x6d\x70\164\x79" => true]);
        goto smckaqauakgqyega;
        akseawaiycesqgac:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\x70\x75\142\154\x69\143" => true, self::OUTPUT => self::NAMES, "\160\x75\x62\x6c\x69\x63\x6c\171\137\x71\x75\145\x72\171\141\x62\154\145" => true]);
        goto ikycsuoawawsqwyk;
        ygcwuequuqswkquu:
        if ($seyqqsmuaiegkeeq) {
            goto oisgcaawyuwigewy;
        }
        goto akseawaiycesqgac;
        ikycsuoawawsqwyk:
        oisgcaawyuwigewy:
        goto ygqccwuyseqmcyum;
        smckaqauakgqyega:
    }
    
    public static function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null)
    {
        goto aeguscqkukywqagm;
        sogsuowqkaaecoim:
        $iwewcwusemqaiggk = '';
        goto gucyyaamouukiuoa;
        iyccwkoemamemeic:
        if (!(!$migkyseymeomymmy && $kesssewsiegssiya == "\143\x61\x74\x65\x67\157\x72\x79" && DecoratorTaxonomy::sgayqmgoigoseaoo($iwewcwusemqaiggk))) {
            goto hwsckcsgcgccqoea;
        }
        goto swaciyuuksosagwq;
        oaoaqkkuycwqssms:
        gceywsegequeamco:
        goto mmqqmqqogowqaasi;
        kwauawssoeowaamm:
        kuswuieaqkuaeuyi:
        goto ycmqimccgmkgyeia;
        gucyyaamouukiuoa:
        qqasmowcceqecouo:
        goto oaoaqkkuycwqssms;
        yyaasscyoqgassya:
        $iwewcwusemqaiggk = get_queried_object();
        goto qyauisewacumumcm;
        qscygwsykuisyuse:
        cawikiksomukeoik:
        goto kogqmigossoqsqoy;
        kogqmigossoqsqoy:
        ycmoqwoqicoesewg:
        goto iyccwkoemamemeic;
        acaqskwayeieaegi:
        hwsckcsgcgccqoea:
        goto seagocwkwsqgoggo;
        amsqkqasgaiqeqkw:
        ocggaukyqkscmoko:
        goto kugeoiqqiewkekeq;
        mmqqmqqogowqaasi:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto iciwaqamwecmqwsq;
        imgaascmkkggqygm:
        if (!$kesssewsiegssiya) {
            goto ycmoqwoqicoesewg;
        }
        goto aeoocgsmwscewsqk;
        aeoocgsmwscewsqk:
        if ($iwewcwusemqaiggk) {
            goto gceywsegequeamco;
        }
        goto yyaasscyoqgassya;
        swaciyuuksosagwq:
        $migkyseymeomymmy = true;
        goto acaqskwayeieaegi;
        owgigsqiqokuyuiu:
        return false;
        goto ucyymqmgcuyemiec;
        ucyymqmgcuyemiec:
        goto kuswuieaqkuaeuyi;
        goto amsqkqasgaiqeqkw;
        iciwaqamwecmqwsq:
        if (!$iwewcwusemqaiggk) {
            goto cawikiksomukeoik;
        }
        goto uascsimkgakoigii;
        aeguscqkukywqagm:
        $migkyseymeomymmy = false;
        goto imgaascmkkggqygm;
        uascsimkgakoigii:
        $migkyseymeomymmy = DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto qscygwsykuisyuse;
        seagocwkwsqgoggo:
        if ($migkyseymeomymmy) {
            goto ocggaukyqkscmoko;
        }
        goto owgigsqiqokuyuiu;
        kugeoiqqiewkekeq:
        return $iwewcwusemqaiggk;
        goto kwauawssoeowaamm;
        qyauisewacumumcm:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto qqasmowcceqecouo;
        }
        goto sogsuowqkaaecoim;
        ycmqimccgmkgyeia:
    }
    
    public static function igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw = '', $cuyooiakswegosog = false)
    {
        return DecoratorTerm::igawqaomowicuayw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function yyykkcyiksewsoqy($iwewcwusemqaiggk, $kesssewsiegssiya = '', $sqeykgyoooqysmca = '')
    {
        goto mogmmaaaicuuscki;
        gsakaiaaoiykgkoo:
        return DecoratorTerm::yyykkcyiksewsoqy(self::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya, $sqeykgyoooqysmca);
        goto iwkequgegkyeiqog;
        cyyokcaimikeccwi:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto wwwemoiyskgksksi;
        mogmmaaaicuuscki:
        if ($kesssewsiegssiya) {
            goto symuwmqkousimose;
        }
        goto cyyokcaimikeccwi;
        wwwemoiyskgksksi:
        symuwmqkousimose:
        goto gsakaiaaoiykgkoo;
        iwkequgegkyeiqog:
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $kesssewsiegssiya, $yemgmmgogcwccuky = [])
    {
        goto smgmaeiuciewqiei;
        omimseyqisaggwwk:
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
        goto weuwwsooqyqiucio;
        acaiyqkymwwgaiou:
        qesmyqceakgcgmkg:
        goto omimseyqisaggwwk;
        gkkkoigsweugscqc:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto qesmyqceakgcgmkg;
        }
        goto qesmqmmykiewowmu;
        qesmqmmykiewowmu:
        $ywmkwiwkosakssii["\156\x61\x6d\145\x5f\x5f\154\151\x6b\145"] = $meqocwsecsywiiqs;
        goto acaiyqkymwwgaiou;
        smgmaeiuciewqiei:
        $ywmkwiwkosakssii = ["\157\x72\144\145\162" => "\x41\x53\103", "\156\165\155\142\x65\162" => 10, "\x65\170\143\154\x75\144\x65" => $yemgmmgogcwccuky];
        goto gkkkoigsweugscqc;
        weuwwsooqyqiucio:
    }
    
    public static function iyssgoiwgwygeacg($iwewcwusemqaiggk, $useksmwkuswkwcqg = "\160\x6f\163\164", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\164\x61\x78\137\x71\x75\145\162\171" => [["\x74\141\x78\x6f\156\x6f\x6d\171" => self::yyoeeseewqmmyaee($iwewcwusemqaiggk), "\x66\x69\145\x6c\144" => "\x74\145\162\155\x5f\x69\144", "\x74\x65\162\155\163" => self::mwikyscisascoeea($iwewcwusemqaiggk)]]]);
        return ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
    }
    
    public static function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ["\156\165\x6d\x62\x65\162" => -1, "\x65\170\143\154\x75\x64\x65" => $yemgmmgogcwccuky, "\155\145\x74\141\x5f\161\165\x65\x72\171" => [["\153\145\171" => $gwiwsycaaqgwmewg, "\x76\141\x6c\x75\145" => $aucgaecqisksougg]]];
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}

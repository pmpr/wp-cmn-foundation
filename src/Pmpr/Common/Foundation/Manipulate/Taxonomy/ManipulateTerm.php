<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto wiwqmuwgswwgcgwq;
        wiwqmuwgswwgcgwq:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto yisaacgkisqssack;
        gsegyaaokkacccas:
        return $iwewcwusemqaiggk;
        goto kkwsccmgsgogsayc;
        ikauicmsakmoqusg:
        $iwewcwusemqaiggk = self::owaokmsayecmasqu($omwmuycmeqcqokom);
        goto weyoyumiwmwougco;
        weyoyumiwmwougco:
        iisqqoaayqqqucai:
        goto gsegyaaokkacccas;
        yisaacgkisqssack:
        if (!(isset($iwewcwusemqaiggk->parent) && $iwewcwusemqaiggk->parent)) {
            goto iisqqoaayqqqucai;
        }
        goto aygqokkmmumaqmei;
        aygqokkmmumaqmei:
        $omwmuycmeqcqokom = self::get($iwewcwusemqaiggk->parent);
        goto ikauicmsakmoqusg;
        kkwsccmgsgogsayc:
    }
    
    public static function qcgakseyaikigqco($iwewcwusemqaiggk = null) : string
    {
        return ManipulateArray::get(self::get($iwewcwusemqaiggk), "\x6e\141\x6d\145", '');
    }
    
    public static function qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi = false) : string
    {
        goto aimwyouyuaasmcsy;
        ukwyoqwawqemgaou:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x74\x72", ["\x63\x6c\x61\x73\x73" => "\x66\x6f\162\155\55\x66\x69\145\x6c\x64"], [ManipulateHTML::uuccukgasskgimsq("\x74\x68", ["\x73\x63\x6f\x70\x65" => "\x72\157\x77"], ManipulateHTML::uuccukgasskgimsq("\154\141\142\145\x6c", ["\x66\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy)), ManipulateHTML::uuccukgasskgimsq("\x74\144", [], $nsmgceoqaqogqmuw)]);
        goto iiceausgsgcgseiu;
        sukwuguiwokwokoa:
        wkoaouywgckiigoa:
        goto ukwyoqwawqemgaou;
        ocawiugcmcgyiuqy:
        goto kaksiweaiuugqeio;
        goto sukwuguiwokwokoa;
        aswigywgqmqqyaks:
        if ($wwgeaeqgacgwooqi) {
            goto wkoaouywgckiigoa;
        }
        goto qyqaskiyiewkcqog;
        yuscoeckmsicamcy:
        ewkcysiiwmycaecc:
        goto iquggikocsikyqcu;
        qmugicuuomqociko:
        $aiowsaccomcoikus->usuqmwksoeaayaig('');
        goto eioqwkagqyekiogk;
        wuyoocqaysogmcsa:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto ewkcysiiwmycaecc;
        }
        goto sqqosuucouosesoe;
        qyqaskiyiewkcqog:
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\x6c\x61\x73\163" => "\x66\x6f\x72\155\55\146\151\145\x6c\144"], [ManipulateHTML::uuccukgasskgimsq("\154\141\x62\145\x6c", ["\146\x6f\162" => $aiowsaccomcoikus->mwikyscisascoeea()], $pkyyagewkiyckmwy), $nsmgceoqaqogqmuw]);
        goto ocawiugcmcgyiuqy;
        sqqosuucouosesoe:
        $aiowsaccomcoikus->eqmqucasseomgsce(12)->usoqcyyugsuyiewc("\167\55\x6d\144\55\x39\65")->yqoekuewicqoescm("\x77\55\155\x64\55\61\x30\x30");
        goto wysmgisokmgyaukg;
        wysmgisokmgyaukg:
        $pkyyagewkiyckmwy = $aiowsaccomcoikus->aakmagwggmkoiiyu();
        goto qmugicuuomqociko;
        aimwyouyuaasmcsy:
        $nsmgceoqaqogqmuw = '';
        goto wuyoocqaysogmcsa;
        eioqwkagqyekiogk:
        $nsmgceoqaqogqmuw = $aiowsaccomcoikus->render(false);
        goto aswigywgqmqqyaks;
        iiceausgsgcgseiu:
        kaksiweaiuugqeio:
        goto yuscoeckmsicamcy;
        iquggikocsikyqcu:
        return $nsmgceoqaqogqmuw;
        goto qqcgoykmgigawaue;
        qqcgoykmgigawaue:
    }
    
    public static function giwmekimakcaawsq($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        return DecoratorTerm::giwmekimakcaawsq(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii = [])
    {
        goto ukmgiiamkccogikc;
        mcuiacsuwymaaqeo:
        if (!$iwewcwusemqaiggk) {
            goto mosmuqisqgakqaku;
        }
        goto smcmeamiyyaksmkw;
        ukmgiiamkccogikc:
        $okcscwesammossuq = [];
        goto ygkygooqqasikocy;
        qmssoewosmoummak:
        $okcscwesammossuq = self::ciugwooasaqcywas(self::yyoeeseewqmmyaee($iwewcwusemqaiggk), $ywmkwiwkosakssii);
        goto hwkimcqyaowuueis;
        ykegacumqsccamqo:
        return $okcscwesammossuq;
        goto cmomsucusgoiuiau;
        ygkygooqqasikocy:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto mcuiacsuwymaaqeo;
        smcmeamiyyaksmkw:
        $ywmkwiwkosakssii["\x70\x61\162\x65\156\x74"] = $iwewcwusemqaiggk;
        goto qmssoewosmoummak;
        hwkimcqyaowuueis:
        mosmuqisqgakqaku:
        goto ykegacumqsccamqo;
        cmomsucusgoiuiau:
    }
    
    public static function ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii = [])
    {
        goto gogewooioeycwogq;
        cgquoawccwawukqa:
        zsumimyayewseuya:
        goto olwwmuamagqqaiuo;
        mggmeguysyywsqug:
        return $suuagcecoyuweoqk;
        goto mgwyawuksamewowu;
        gogewooioeycwogq:
        if (!$kesssewsiegssiya instanceof WP_Taxonomy) {
            goto zsumimyayewseuya;
        }
        goto mkkaoqcwmousacyi;
        olwwmuamagqqaiuo:
        $ywmkwiwkosakssii["\164\x61\170\x6f\x6e\x6f\x6d\171"] = $kesssewsiegssiya;
        goto mucoasqieymuqsoe;
        mucoasqieymuqsoe:
        $suuagcecoyuweoqk = DecoratorTerm::ciugwooasaqcywas($ywmkwiwkosakssii);
        goto coaieqacoucggeec;
        qgkmumiqueeskomg:
        uoamqsyoamgckumc:
        goto mggmeguysyywsqug;
        mkkaoqcwmousacyi:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto cgquoawccwawukqa;
        coaieqacoucggeec:
        if (is_array($suuagcecoyuweoqk)) {
            goto uoamqsyoamgckumc;
        }
        goto sogmusaogkcqgcgu;
        sogmusaogkcqgcgu:
        $suuagcecoyuweoqk = [];
        goto qgkmumiqueeskomg;
        mgwyawuksamewowu:
    }
    
    public static function qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya = '')
    {
        goto mkegyeucuegamuuk;
        eomyeqewaooewomq:
        $aqykuigiuwmmcieu = DecoratorTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto emiwggmkkuqmessa;
        scagyucammmkkuyc:
        return $aqykuigiuwmmcieu;
        goto ykgywsuquqemgquq;
        emiwggmkkuqmessa:
        if (!(!is_string($aqykuigiuwmmcieu) || is_wp_error($aqykuigiuwmmcieu))) {
            goto cmucccioqgqecqak;
        }
        goto wsmeaogyekwywgcw;
        qaomyskykauugkcs:
        weyqosokwuacayyc:
        goto ieksoqkmeoasiqag;
        uogegmqqwcikcmim:
        cmucccioqgqecqak:
        goto scagyucammmkkuyc;
        mkegyeucuegamuuk:
        if ($kesssewsiegssiya) {
            goto weyqosokwuacayyc;
        }
        goto oeogsickgekucugu;
        ieksoqkmeoasiqag:
        $kesssewsiegssiya = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya);
        goto eomyeqewaooewomq;
        oeogsickgekucugu:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto qaomyskykauugkcs;
        wsmeaogyekwywgcw:
        $aqykuigiuwmmcieu = '';
        goto uogegmqqwcikcmim;
        ykgywsuquqemgquq:
    }
    
    public static function ksmqawcowkmegigw($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis = '')
    {
        return DecoratorTerm::ksmqawcowkmegigw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $swwmymiaiosiyqis);
    }
    
    public static function get($iwewcwusemqaiggk = null, $kesssewsiegssiya = '')
    {
        goto uumokaegooocsgwe;
        xoisuykgsmemuogs:
        $iwewcwusemqaiggk = DecoratorTerm::get($iwewcwusemqaiggk, $kesssewsiegssiya);
        goto awqukwmwkemoiskm;
        awqukwmwkemoiskm:
        cwkciqmcigowukya:
        goto ymqckowwcoyqcyec;
        iwgcaokmwusuqcic:
        coogegieeguyucqw:
        goto acuckmaiikqoeqcm;
        ywwwkqcqkgqecqcq:
        $iwewcwusemqaiggk = '';
        goto iwgcaokmwusuqcic;
        uumokaegooocsgwe:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto cwkciqmcigowukya;
        }
        goto xoisuykgsmemuogs;
        ymqckowwcoyqcyec:
        if (!is_wp_error($iwewcwusemqaiggk)) {
            goto coogegieeguyucqw;
        }
        goto ywwwkqcqkgqecqcq;
        acuckmaiikqoeqcm:
        return $iwewcwusemqaiggk;
        goto awkssgucausyouio;
        awkssgucausyouio:
    }
    
    public static function mwikyscisascoeea($iwewcwusemqaiggk = null, $cwwowqyuwccuykom = false)
    {
        goto meeowaqccyoouiys;
        uomqymaegyqyquma:
        if (!(!$iwewcwusemqaiggk && !$cwwowqyuwccuykom)) {
            goto ssagsmaymgmuaoiu;
        }
        goto qackiwiueeeceeya;
        oqeemsageswyysqq:
        return $iwewcwusemqaiggk;
        goto ssgqekymikwmgcim;
        qackiwiueeeceeya:
        $iwewcwusemqaiggk = get_queried_object();
        goto ssigosecoiyucquc;
        ssigosecoiyucquc:
        ssagsmaymgmuaoiu:
        goto ygweyqokmqmqoegc;
        cuoicwmegcssquai:
        uqwkcimoeweusoci:
        goto oqeemsageswyysqq;
        ygweyqokmqmqoegc:
        $iwewcwusemqaiggk = ManipulateArray::get($iwewcwusemqaiggk, "\164\145\x72\x6d\137\151\144");
        goto cuoicwmegcssquai;
        meeowaqccyoouiys:
        if (is_numeric($iwewcwusemqaiggk)) {
            goto uqwkcimoeweusoci;
        }
        goto uomqymaegyqyquma;
        ssgqekymikwmgcim:
    }
    
    public static function smqukgcyacswysqa($iwewcwusemqaiggk, $uusmaiomayssaecw, $eqgoocgaqwqcimie = '')
    {
        return DecoratorTerm::smqukgcyacswysqa(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function yyoeeseewqmmyaee($iwewcwusemqaiggk, $awqscowmskeuymeu = false)
    {
        goto iuosyoicmqwcuuky;
        suykaockmyqykyai:
        $kesssewsiegssiya = ManipulateArray::get($iwewcwusemqaiggk, "\x74\141\170\157\x6e\157\155\x79");
        goto mmkmacccuiwueymo;
        mmkmacccuiwueymo:
        if (!$awqscowmskeuymeu) {
            goto yqwkeskyucykmiqm;
        }
        goto usioaqqkcwcaqqym;
        aaoguekwqoiciuyk:
        $iwewcwusemqaiggk = self::get($iwewcwusemqaiggk);
        goto ekemsceqecycmmmu;
        ekemsceqecycmmmu:
        if (!$iwewcwusemqaiggk) {
            goto wwqgwuoimukqimim;
        }
        goto suykaockmyqykyai;
        eqauouqgmiyyiqyw:
        wwqgwuoimukqimim:
        goto cwesmgiogeyskqim;
        iuosyoicmqwcuuky:
        $kesssewsiegssiya = '';
        goto aaoguekwqoiciuyk;
        cwesmgiogeyskqim:
        return $kesssewsiegssiya;
        goto mkwescmqwgiogikw;
        usioaqqkcwcaqqym:
        $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya);
        goto maqygissmeiauaay;
        maqygissmeiauaay:
        yqwkeskyucykmiqm:
        goto eqauouqgmiyyiqyw;
        mkwescmqwgiogikw:
    }
    
    public static function emcckouwaoassquc(?array $seyqqsmuaiegkeeq = [])
    {
        goto oyeigmugeuaykeck;
        oyeigmugeuaykeck:
        if ($seyqqsmuaiegkeeq) {
            goto icceswgaysawiiqw;
        }
        goto eoaygwoasoiqewmw;
        eoaygwoasoiqewmw:
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(["\160\165\x62\x6c\151\x63" => true, self::OUTPUT => self::NAMES, "\x70\x75\142\154\x69\143\x6c\171\x5f\161\x75\x65\x72\x79\141\142\154\145" => true]);
        goto cueggsysuamckyyg;
        cueggsysuamckyyg:
        icceswgaysawiiqw:
        goto eygsosommcgkywom;
        eygsosommcgkywom:
        return self::ciugwooasaqcywas($seyqqsmuaiegkeeq, ["\146\151\145\x6c\x64\x73" => "\151\144\163", "\x68\x69\x64\145\137\145\x6d\160\164\x79" => true]);
        goto cgaoeoaocquemgim;
        cgaoeoaocquemgim:
    }
    
    public static function migkyseymeomymmy($kesssewsiegssiya = '', $iwewcwusemqaiggk = null)
    {
        goto eyogsmikyyiuoaqq;
        kcwyqqkwwueaemqo:
        $iwewcwusemqaiggk = get_queried_object();
        goto gwgwysswcsokuuiq;
        ikgwqiqecsmoiasu:
        gusyiiieqkmciusw:
        goto oigqswimameoumgs;
        gikyuuwyokecusig:
        if (!$kesssewsiegssiya) {
            goto cqqasyaqucsqwqas;
        }
        goto omyycgwuomioaioa;
        wwkiyoueyowgaaog:
        if ($migkyseymeomymmy) {
            goto swegcuwcgqqgsyoq;
        }
        goto amayksmqcaeciocm;
        yukuumakuqkumcoq:
        aoyicmmccykmsgsg:
        goto aeqyyceygouqiggw;
        aqooumuqmsssmukm:
        return $iwewcwusemqaiggk;
        goto yukuumakuqkumcoq;
        uqquwkquoqgugyky:
        $iwewcwusemqaiggk = '';
        goto aecaiwsoyugiymsk;
        auaquskkgkuyckiy:
        $migkyseymeomymmy = DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto ikgwqiqecsmoiasu;
        oicwoguswieiokwi:
        $migkyseymeomymmy = true;
        goto cmwkciaaaeimewga;
        ieiicqcmikawmqwg:
        if (!$iwewcwusemqaiggk) {
            goto gusyiiieqkmciusw;
        }
        goto auaquskkgkuyckiy;
        amayksmqcaeciocm:
        return false;
        goto ykygqyagwwuyqiyy;
        ykygqyagwwuyqiyy:
        goto aoyicmmccykmsgsg;
        goto yoymucgagciuoegi;
        yoymucgagciuoegi:
        swegcuwcgqqgsyoq:
        goto aqooumuqmsssmukm;
        oigqswimameoumgs:
        cqqasyaqucsqwqas:
        goto quqsomsqgyaeegcg;
        quqsomsqgyaeegcg:
        if (!(!$migkyseymeomymmy && $kesssewsiegssiya == "\143\x61\x74\145\x67\157\x72\x79" && DecoratorTaxonomy::sgayqmgoigoseaoo($iwewcwusemqaiggk))) {
            goto iccsuyookkesaeei;
        }
        goto oicwoguswieiokwi;
        awioayumusackqes:
        ywgassoaekiyeugu:
        goto cmoimsmqkomccsuo;
        cmwkciaaaeimewga:
        iccsuyookkesaeei:
        goto wwkiyoueyowgaaog;
        gwgwysswcsokuuiq:
        if ($iwewcwusemqaiggk instanceof WP_Term) {
            goto emwaygiaqusieqse;
        }
        goto uqquwkquoqgugyky;
        cmoimsmqkomccsuo:
        $iwewcwusemqaiggk = self::mwikyscisascoeea($iwewcwusemqaiggk);
        goto ieiicqcmikawmqwg;
        aecaiwsoyugiymsk:
        emwaygiaqusieqse:
        goto awioayumusackqes;
        omyycgwuomioaioa:
        if ($iwewcwusemqaiggk) {
            goto ywgassoaekiyeugu;
        }
        goto kcwyqqkwwueaemqo;
        eyogsmikyyiuoaqq:
        $migkyseymeomymmy = false;
        goto gikyuuwyokecusig;
        aeqyyceygouqiggw:
    }
    
    public static function igawqaomowicuayw($iwewcwusemqaiggk, $uusmaiomayssaecw = '', $cuyooiakswegosog = false)
    {
        return DecoratorTerm::igawqaomowicuayw(self::mwikyscisascoeea($iwewcwusemqaiggk), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function yyykkcyiksewsoqy($iwewcwusemqaiggk, $kesssewsiegssiya = '', $sqeykgyoooqysmca = '')
    {
        goto omqkqswkgyuaywke;
        sagosouymgqiycgw:
        oiimuikqsueysayy:
        goto csyaemwuuiasyees;
        csyaemwuuiasyees:
        return DecoratorTerm::yyykkcyiksewsoqy(self::mwikyscisascoeea($iwewcwusemqaiggk), $kesssewsiegssiya, $sqeykgyoooqysmca);
        goto uqosmecyeigkygoy;
        omqkqswkgyuaywke:
        if ($kesssewsiegssiya) {
            goto oiimuikqsueysayy;
        }
        goto qmyaseyamuuussia;
        qmyaseyamuuussia:
        $kesssewsiegssiya = self::yyoeeseewqmmyaee($iwewcwusemqaiggk);
        goto sagosouymgqiycgw;
        uqosmecyeigkygoy:
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $kesssewsiegssiya, $yemgmmgogcwccuky = [])
    {
        goto uosimiioegsgagcc;
        gouksaecesowaeqs:
        $ywmkwiwkosakssii["\x6e\x61\x6d\x65\137\x5f\154\151\153\145"] = $meqocwsecsywiiqs;
        goto yyookuiiewskwaoo;
        wkqeuuqqskmuogig:
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
        goto kqackawqyysgiyyk;
        owugsgyeygsuomms:
        if (!(strlen($meqocwsecsywiiqs) > 1)) {
            goto oeuauqwuswaugqog;
        }
        goto gouksaecesowaeqs;
        yyookuiiewskwaoo:
        oeuauqwuswaugqog:
        goto wkqeuuqqskmuogig;
        uosimiioegsgagcc:
        $ywmkwiwkosakssii = ["\157\x72\144\145\162" => "\101\123\103", "\156\165\x6d\142\145\x72" => 10, "\x65\170\x63\x6c\x75\x64\145" => $yemgmmgogcwccuky];
        goto owugsgyeygsuomms;
        kqackawqyysgiyyk:
    }
    
    public static function iyssgoiwgwygeacg($iwewcwusemqaiggk, $useksmwkuswkwcqg = "\160\157\x73\x74", $ywmkwiwkosakssii = []) : array
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x74\x61\170\137\x71\x75\145\x72\x79" => [["\164\141\x78\x6f\156\x6f\x6d\171" => self::yyoeeseewqmmyaee($iwewcwusemqaiggk), "\146\x69\145\x6c\144" => "\164\x65\162\x6d\x5f\151\144", "\164\x65\162\155\163" => self::mwikyscisascoeea($iwewcwusemqaiggk)]]]);
        return ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
    }
    
    public static function qgisekcaywsmigga($kesssewsiegssiya, $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $yemgmmgogcwccuky = [])
    {
        $ywmkwiwkosakssii = ["\x6e\165\155\142\145\x72" => -1, "\x65\x78\143\154\x75\x64\x65" => $yemgmmgogcwccuky, "\x6d\145\x74\141\137\161\165\145\x72\x79" => [["\153\145\x79" => $gwiwsycaaqgwmewg, "\x76\141\154\x75\145" => $aucgaecqisksougg]]];
        return self::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii);
    }
}

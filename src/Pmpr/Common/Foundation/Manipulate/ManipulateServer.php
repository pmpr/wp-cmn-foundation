<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateServer extends Manipulate
{
    
    public static function gsaomcwyacqcumaa() : bool
    {
        return is_multisite();
    }
    
    public static function cgaoowikqaqqoqww($yiasugywggckywoa = false)
    {
        goto ygkygooqqasikocy;
        ygkygooqqasikocy:
        $agoaugssmsiumiym = self::get("\121\125\105\x52\131\137\x53\x54\122\x49\116\x47");
        goto mcuiacsuwymaaqeo;
        hwkimcqyaowuueis:
        return $agoaugssmsiumiym;
        goto ykegacumqsccamqo;
        smcmeamiyyaksmkw:
        $agoaugssmsiumiym = ManipulateFormat::omaawkkwwyesqwcc($agoaugssmsiumiym);
        goto qmssoewosmoummak;
        qmssoewosmoummak:
        ukmgiiamkccogikc:
        goto hwkimcqyaowuueis;
        mcuiacsuwymaaqeo:
        if (!$agoaugssmsiumiym) {
            goto ukmgiiamkccogikc;
        }
        goto smcmeamiyyaksmkw;
        ykegacumqsccamqo:
    }
    
    public static function iawueuwikeeeseya()
    {
        goto mggmeguysyywsqug;
        mgwyawuksamewowu:
        if (function_exists("\141\x70\141\143\150\145\137\162\145\x71\165\x65\x73\x74\137\150\x65\x61\x64\145\x72\163")) {
            goto sogmusaogkcqgcgu;
        }
        goto weyqosokwuacayyc;
        weyqosokwuacayyc:
        $ueiegogoeyqoiewa = self::giiecckwoyiawoyy();
        goto cmucccioqgqecqak;
        ieksoqkmeoasiqag:
        $uykgysuswksgmwqy = apache_request_headers();
        goto eomyeqewaooewomq;
        emiwggmkkuqmessa:
        return $uykgysuswksgmwqy;
        goto wsmeaogyekwywgcw;
        qaomyskykauugkcs:
        sogmusaogkcqgcgu:
        goto ieksoqkmeoasiqag;
        mkegyeucuegamuuk:
        cmomsucusgoiuiau:
        goto oeogsickgekucugu;
        cmucccioqgqecqak:
        foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) {
            goto gogewooioeycwogq;
            olwwmuamagqqaiuo:
            uoamqsyoamgckumc:
            goto mucoasqieymuqsoe;
            mucoasqieymuqsoe:
            zsumimyayewseuya:
            goto coaieqacoucggeec;
            cgquoawccwawukqa:
            $uykgysuswksgmwqy[$kmmmiumuegqmksky] = self::giiecckwoyiawoyy($uusmaiomayssaecw);
            goto olwwmuamagqqaiuo;
            gogewooioeycwogq:
            if (!(0 === strpos($uusmaiomayssaecw, "\110\x54\x54\x50\137"))) {
                goto uoamqsyoamgckumc;
            }
            goto mkkaoqcwmousacyi;
            mkkaoqcwmousacyi:
            $kmmmiumuegqmksky = implode("\55", array_map("\x75\143\146\x69\x72\163\164", array_slice(explode("\137", strtolower($uusmaiomayssaecw)), 1)));
            goto cgquoawccwawukqa;
            coaieqacoucggeec:
        }
        goto mkegyeucuegamuuk;
        mggmeguysyywsqug:
        $uykgysuswksgmwqy = [];
        goto mgwyawuksamewowu;
        eomyeqewaooewomq:
        qgkmumiqueeskomg:
        goto emiwggmkkuqmessa;
        oeogsickgekucugu:
        goto qgkmumiqueeskomg;
        goto qaomyskykauugkcs;
        wsmeaogyekwywgcw:
    }
    
    public static function gmsemuiwicucmcok($uusmaiomayssaecw)
    {
        return ManipulateArray::get(self::iawueuwikeeeseya(), $uusmaiomayssaecw);
    }
    
    public static function get($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_GET, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    public static function ayueggmoqeeukqmq($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_POST, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    public static function aukgyiaewiccooqw($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    public static function auksikwsewaywikq($mksyucucyswaukig = null, $mkomwsiykqigmqca = '', $aaceqemaqqeckueq = null) : ?string
    {
        goto cwkciqmcigowukya;
        coogegieeguyucqw:
        if ($aaceqemaqqeckueq) {
            goto uogegmqqwcikcmim;
        }
        goto uumokaegooocsgwe;
        cwkciqmcigowukya:
        if (function_exists("\x67\145\164\x5f\x68\x6f\x6d\x65\x5f\165\x72\154")) {
            goto scagyucammmkkuyc;
        }
        goto coogegieeguyucqw;
        awkssgucausyouio:
        ykgywsuquqemgquq:
        goto ssagsmaymgmuaoiu;
        awqukwmwkemoiskm:
        $gwgucoaaqcwwciqq = self::yyqgamuwwakgciey("\110\124\124\120\137\x48\x4f\x53\x54");
        goto ymqckowwcoyqcyec;
        uumokaegooocsgwe:
        $aaceqemaqqeckueq = self::yyqgamuwwakgciey("\x52\x45\x51\125\x45\123\124\x5f\x53\x43\110\x45\115\105");
        goto xoisuykgsmemuogs;
        acuckmaiikqoeqcm:
        $uogwqioiiwqsyksu = get_home_url($mksyucucyswaukig, $mkomwsiykqigmqca, $aaceqemaqqeckueq);
        goto awkssgucausyouio;
        iwgcaokmwusuqcic:
        scagyucammmkkuyc:
        goto acuckmaiikqoeqcm;
        xoisuykgsmemuogs:
        uogegmqqwcikcmim:
        goto awqukwmwkemoiskm;
        ymqckowwcoyqcyec:
        $uogwqioiiwqsyksu = "{$aaceqemaqqeckueq}\72\x2f\57{$gwgucoaaqcwwciqq}";
        goto ywwwkqcqkgqecqcq;
        ywwwkqcqkgqecqcq:
        goto ykgywsuquqemgquq;
        goto iwgcaokmwusuqcic;
        ssagsmaymgmuaoiu:
        return $uogwqioiiwqsyksu;
        goto uqwkcimoeweusoci;
        uqwkcimoeweusoci:
    }
    
    public static function giiecckwoyiawoyy($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_SERVER, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    public static function oymwkcegiigooaqm($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($GLOBALS, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    public static function iyacemuaomsmioqi() : bool
    {
        return (bool) self::giiecckwoyiawoyy("\121\x55\x45\122\131\x5f\123\124\x52\111\116\107");
    }
    
    public static function ueiiieygmgawesgq()
    {
        goto iuosyoicmqwcuuky;
        iuosyoicmqwcuuky:
        $ymkomcgesksuuysk = [];
        goto aaoguekwqoiciuyk;
        usioaqqkcwcaqqym:
        return $ymkomcgesksuuysk;
        goto maqygissmeiauaay;
        mmkmacccuiwueymo:
        meeowaqccyoouiys:
        goto usioaqqkcwcaqqym;
        aaoguekwqoiciuyk:
        if (!function_exists("\x77\x70\137\147\x65\x74\137\141\x76\x61\x69\154\x61\142\154\x65\137\164\x72\141\x6e\163\x6c\141\x74\x69\157\x6e\163")) {
            require_once ABSPATH . "\167\x70\55\x61\x64\155\x69\156\57\151\156\143\x6c\x75\144\x65\163\x2f\x74\x72\141\x6e\x73\154\141\x74\x69\157\x6e\55\151\156\x73\164\141\154\x6c\x2e\x70\x68\160";
        }
        goto ekemsceqecycmmmu;
        ekemsceqecycmmmu:
        $qsmicgaymwwckcsa = wp_get_available_translations();
        goto suykaockmyqykyai;
        suykaockmyqykyai:
        foreach (get_available_languages() as $swaukaagekiououo) {
            goto ssigosecoiyucquc;
            yqwkeskyucykmiqm:
            uomqymaegyqyquma:
            goto wwqgwuoimukqimim;
            oqeemsageswyysqq:
            qackiwiueeeceeya:
            goto ssgqekymikwmgcim;
            ssigosecoiyucquc:
            $ymqmyyeuycgmigyo = $swaukaagekiououo;
            goto ygweyqokmqmqoegc;
            ssgqekymikwmgcim:
            $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo;
            goto yqwkeskyucykmiqm;
            ygweyqokmqmqoegc:
            if (!isset($qsmicgaymwwckcsa[$swaukaagekiououo], $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\x6e\x67\154\151\x73\x68\137\156\x61\x6d\145"])) {
                goto qackiwiueeeceeya;
            }
            goto cuoicwmegcssquai;
            cuoicwmegcssquai:
            $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\156\147\x6c\151\x73\x68\137\x6e\141\155\145"];
            goto oqeemsageswyysqq;
            wwqgwuoimukqimim:
        }
        goto mmkmacccuiwueymo;
        maqygissmeiauaay:
    }
    
    public static function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    private static function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        goto cwesmgiogeyskqim;
        icceswgaysawiiqw:
        eqauouqgmiyyiqyw:
        goto oyeigmugeuaykeck;
        mkwescmqwgiogikw:
        $ggauoeuaesiymgee = $icwicymcioeyeyek;
        goto icceswgaysawiiqw;
        cwesmgiogeyskqim:
        if ($uusmaiomayssaecw) {
            goto eqauouqgmiyyiqyw;
        }
        goto mkwescmqwgiogikw;
        oyeigmugeuaykeck:
        return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto eoaygwoasoiqewmw;
        eoaygwoasoiqewmw:
    }
    
    public static function wymyeyweagqomiim() : bool
    {
        return function_exists("\151\x73\137\163\x73\154") && is_ssl();
    }
    
    public static function guwgsooqkqgmcoim($eeamcawaiqocomwy = null) : bool
    {
        goto eygsosommcgkywom;
        cgaoeoaocquemgim:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto emwaygiaqusieqse;
        ywgassoaekiyeugu:
        return preg_match("\x2f\x5e\x5c\x2f\162\157\x62\x6f\164\x73\56\164\170\x74\x2f", $eeamcawaiqocomwy);
        goto gusyiiieqkmciusw;
        emwaygiaqusieqse:
        cueggsysuamckyyg:
        goto ywgassoaekiyeugu;
        eygsosommcgkywom:
        if ($eeamcawaiqocomwy) {
            goto cueggsysuamckyyg;
        }
        goto cgaoeoaocquemgim;
        gusyiiieqkmciusw:
    }
    
    public static function smowememmgeukwki($eeamcawaiqocomwy = null) : bool
    {
        goto iccsuyookkesaeei;
        eyogsmikyyiuoaqq:
        return function_exists("\151\x73\137\x61\x6d\160\137\x65\x6e\144\x70\x6f\151\x6e\164") && is_amp_endpoint() || preg_match("\x2f\50\134\x2f\141\155\160\x5c\x2f\x70\x61\147\145\x5c\x2f\133\60\55\71\x5d\x2a\x29\174\x28\x5c\57\x61\155\x70\134\x2f\77\51\57", $eeamcawaiqocomwy) || DecoratorHook::sscegwueamckwmcy("\151\x73\x5f\x61\155\x70", false);
        goto gikyuuwyokecusig;
        iccsuyookkesaeei:
        if ($eeamcawaiqocomwy) {
            goto cqqasyaqucsqwqas;
        }
        goto swegcuwcgqqgsyoq;
        swegcuwcgqqgsyoq:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto aoyicmmccykmsgsg;
        aoyicmmccykmsgsg:
        cqqasyaqucsqwqas:
        goto eyogsmikyyiuoaqq;
        gikyuuwyokecusig:
    }
    
    public static function aogsoswomcaqoukq($oaukocmsckciqaok, $ggauoeuaesiymgee = null)
    {
        global $wp_query;
        return ManipulateArray::get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee);
    }
    
    public static function ekcymmyqoceukosc($kssgyousiceysuaw = false)
    {
        goto uqquwkquoqgugyky;
        oigqswimameoumgs:
        if (!$kssgyousiceysuaw) {
            goto kcwyqqkwwueaemqo;
        }
        goto quqsomsqgyaeegcg;
        quqsomsqgyaeegcg:
        $eeamcawaiqocomwy = add_query_arg(self::giiecckwoyiawoyy("\121\125\105\x52\131\x5f\x53\124\x52\111\x4e\x47"), '', $eeamcawaiqocomwy);
        goto oicwoguswieiokwi;
        uqquwkquoqgugyky:
        $eeamcawaiqocomwy = false;
        goto aecaiwsoyugiymsk;
        ikgwqiqecsmoiasu:
        $eeamcawaiqocomwy = untrailingslashit(self::auksikwsewaywikq()) . $mkomwsiykqigmqca;
        goto oigqswimameoumgs;
        wwkiyoueyowgaaog:
        return $eeamcawaiqocomwy;
        goto amayksmqcaeciocm;
        auaquskkgkuyckiy:
        omyycgwuomioaioa:
        goto ikgwqiqecsmoiasu;
        ieiicqcmikawmqwg:
        $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy);
        goto auaquskkgkuyckiy;
        oicwoguswieiokwi:
        kcwyqqkwwueaemqo:
        goto cmwkciaaaeimewga;
        awioayumusackqes:
        if (!$mkomwsiykqigmqca) {
            goto gwgwysswcsokuuiq;
        }
        goto cmoimsmqkomccsuo;
        aecaiwsoyugiymsk:
        $mkomwsiykqigmqca = self::giiecckwoyiawoyy("\x52\105\x51\x55\105\123\124\x5f\125\x52\111");
        goto awioayumusackqes;
        cmwkciaaaeimewga:
        gwgwysswcsokuuiq:
        goto wwkiyoueyowgaaog;
        cmoimsmqkomccsuo:
        if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\77"))) {
            goto omyycgwuomioaioa;
        }
        goto ieiicqcmikawmqwg;
        amayksmqcaeciocm:
    }
    
    public static function gmigwwwmwemyaayy($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) : ?string
    {
        return home_url($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
    }
    
    public static function sgsoakksyayeoggw($ymacoouqwcqwwagu) : string
    {
        goto aqooumuqmsssmukm;
        oiimuikqsueysayy:
        return $iueymcwwscwqkiyq;
        goto omqkqswkgyuaywke;
        yukuumakuqkumcoq:
        yoymucgagciuoegi:
        goto aeqyyceygouqiggw;
        aqooumuqmsssmukm:
        switch ($ymacoouqwcqwwagu) {
            case 100:
                $iueymcwwscwqkiyq = "\x43\157\x6e\164\151\x6e\x75\145";
                goto ykygqyagwwuyqiyy;
            case 101:
                $iueymcwwscwqkiyq = "\x53\x77\x69\x74\143\150\x69\156\x67\x20\120\x72\x6f\164\x6f\143\x6f\x6c\163";
                goto ykygqyagwwuyqiyy;
            case 200:
                $iueymcwwscwqkiyq = "\117\113";
                goto ykygqyagwwuyqiyy;
            case 201:
                $iueymcwwscwqkiyq = "\103\162\x65\x61\x74\145\x64";
                goto ykygqyagwwuyqiyy;
            case 202:
                $iueymcwwscwqkiyq = "\101\143\143\145\160\x74\145\144";
                goto ykygqyagwwuyqiyy;
            case 203:
                $iueymcwwscwqkiyq = "\116\x6f\156\x2d\101\165\164\x68\x6f\x72\x69\x74\x61\164\151\x76\145\x20\x49\156\x66\x6f\x72\x6d\x61\164\151\157\x6e";
                goto ykygqyagwwuyqiyy;
            case 204:
                $iueymcwwscwqkiyq = "\x4e\157\40\103\x6f\156\164\145\x6e\164";
                goto ykygqyagwwuyqiyy;
            case 205:
                $iueymcwwscwqkiyq = "\x52\x65\163\x65\164\40\103\x6f\x6e\x74\x65\156\x74";
                goto ykygqyagwwuyqiyy;
            case 206:
                $iueymcwwscwqkiyq = "\x50\x61\162\x74\x69\x61\154\40\103\x6f\156\x74\145\156\x74";
                goto ykygqyagwwuyqiyy;
            case 300:
                $iueymcwwscwqkiyq = "\x4d\165\x6c\164\x69\x70\154\x65\40\x43\150\x6f\x69\x63\x65\x73";
                goto ykygqyagwwuyqiyy;
            case 301:
                $iueymcwwscwqkiyq = "\115\157\x76\145\144\x20\120\x65\162\155\141\156\x65\156\164\154\x79";
                goto ykygqyagwwuyqiyy;
            case 302:
                $iueymcwwscwqkiyq = "\x4d\157\166\x65\144\x20\124\145\155\x70\x6f\x72\141\x72\151\154\x79";
                goto ykygqyagwwuyqiyy;
            case 303:
                $iueymcwwscwqkiyq = "\123\145\x65\40\x4f\x74\x68\x65\x72";
                goto ykygqyagwwuyqiyy;
            case 304:
                $iueymcwwscwqkiyq = "\x4e\157\x74\x20\x4d\157\144\x69\x66\x69\145\144";
                goto ykygqyagwwuyqiyy;
            case 305:
                $iueymcwwscwqkiyq = "\125\163\145\40\120\x72\x6f\170\x79";
                goto ykygqyagwwuyqiyy;
            case 400:
                $iueymcwwscwqkiyq = "\x42\141\144\40\122\x65\x71\165\145\163\164";
                goto ykygqyagwwuyqiyy;
            case 401:
                $iueymcwwscwqkiyq = "\125\x6e\x61\165\164\x68\157\162\x69\x7a\145\x64";
                goto ykygqyagwwuyqiyy;
            case 402:
                $iueymcwwscwqkiyq = "\x50\141\171\x6d\x65\x6e\x74\x20\x52\145\x71\x75\x69\162\x65\x64";
                goto ykygqyagwwuyqiyy;
            case 403:
                $iueymcwwscwqkiyq = "\x46\x6f\x72\142\x69\144\144\x65\156";
                goto ykygqyagwwuyqiyy;
            case 404:
                $iueymcwwscwqkiyq = "\x4e\x6f\x74\40\106\157\x75\x6e\x64";
                goto ykygqyagwwuyqiyy;
            case 405:
                $iueymcwwscwqkiyq = "\115\x65\164\x68\157\144\40\x4e\x6f\x74\x20\101\154\154\x6f\167\145\x64";
                goto ykygqyagwwuyqiyy;
            case 406:
                $iueymcwwscwqkiyq = "\x4e\157\164\40\101\x63\x63\x65\x70\x74\x61\x62\154\145";
                goto ykygqyagwwuyqiyy;
            case 407:
                $iueymcwwscwqkiyq = "\x50\x72\157\170\x79\x20\x41\x75\x74\x68\x65\x6e\x74\x69\143\141\164\x69\x6f\156\40\x52\145\x71\x75\x69\x72\x65\x64";
                goto ykygqyagwwuyqiyy;
            case 408:
                $iueymcwwscwqkiyq = "\122\x65\x71\x75\145\x73\164\x20\124\151\x6d\145\55\157\165\x74";
                goto ykygqyagwwuyqiyy;
            case 409:
                $iueymcwwscwqkiyq = "\103\x6f\x6e\x66\x6c\x69\143\164";
                goto ykygqyagwwuyqiyy;
            case 410:
                $iueymcwwscwqkiyq = "\107\x6f\156\x65";
                goto ykygqyagwwuyqiyy;
            case 411:
                $iueymcwwscwqkiyq = "\114\145\x6e\147\164\x68\x20\x52\x65\x71\x75\151\x72\145\144";
                goto ykygqyagwwuyqiyy;
            case 412:
                $iueymcwwscwqkiyq = "\x50\162\145\143\157\x6e\144\x69\x74\151\157\x6e\40\x46\x61\x69\x6c\x65\144";
                goto ykygqyagwwuyqiyy;
            case 413:
                $iueymcwwscwqkiyq = "\122\145\161\x75\x65\163\x74\40\105\x6e\x74\x69\164\x79\40\124\x6f\157\40\114\x61\x72\x67\145";
                goto ykygqyagwwuyqiyy;
            case 414:
                $iueymcwwscwqkiyq = "\122\145\161\x75\145\163\x74\x2d\125\x52\111\40\124\x6f\157\40\114\x61\162\x67\145";
                goto ykygqyagwwuyqiyy;
            case 415:
                $iueymcwwscwqkiyq = "\125\x6e\163\165\160\160\x6f\x72\x74\145\x64\40\x4d\x65\144\x69\x61\x20\x54\x79\160\x65";
                goto ykygqyagwwuyqiyy;
            case 500:
                $iueymcwwscwqkiyq = "\111\x6e\164\145\x72\x6e\x61\x6c\x20\x53\145\x72\x76\x65\x72\x20\105\162\x72\157\x72";
                goto ykygqyagwwuyqiyy;
            case 501:
                $iueymcwwscwqkiyq = "\116\x6f\x74\x20\x49\155\x70\154\x65\155\x65\x6e\164\145\144";
                goto ykygqyagwwuyqiyy;
            case 502:
                $iueymcwwscwqkiyq = "\102\x61\144\40\x47\x61\x74\145\167\x61\x79";
                goto ykygqyagwwuyqiyy;
            case 503:
                $iueymcwwscwqkiyq = "\123\x65\x72\166\x69\x63\x65\40\125\156\141\166\141\151\x6c\x61\x62\154\x65";
                goto ykygqyagwwuyqiyy;
            case 504:
                $iueymcwwscwqkiyq = "\107\141\x74\145\x77\x61\x79\x20\124\x69\x6d\x65\55\157\165\164";
                goto ykygqyagwwuyqiyy;
            case 505:
                $iueymcwwscwqkiyq = "\110\x54\124\120\40\x56\x65\162\163\x69\x6f\156\40\x6e\157\x74\x20\x73\165\x70\x70\157\x72\164\145\x64";
                goto ykygqyagwwuyqiyy;
            default:
                wp_die("\125\x6e\153\x6e\x6f\167\156\40\x68\x74\164\x70\x20\x73\164\141\x74\x75\x73\x20\x63\x6f\144\145\x20\x22" . htmlentities($ymacoouqwcqwwagu) . "\x22");
        }
        goto yukuumakuqkumcoq;
        aeqyyceygouqiggw:
        ykygqyagwwuyqiyy:
        goto oiimuikqsueysayy;
        omqkqswkgyuaywke:
    }
}

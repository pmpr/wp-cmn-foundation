<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        mcuiacsuwymaaqeo:
        if (!$agoaugssmsiumiym) {
            goto ukmgiiamkccogikc;
        }
        goto smcmeamiyyaksmkw;
        qmssoewosmoummak:
        ukmgiiamkccogikc:
        goto hwkimcqyaowuueis;
        hwkimcqyaowuueis:
        return $agoaugssmsiumiym;
        goto ykegacumqsccamqo;
        smcmeamiyyaksmkw:
        $agoaugssmsiumiym = ManipulateFormat::omaawkkwwyesqwcc($agoaugssmsiumiym);
        goto qmssoewosmoummak;
        ygkygooqqasikocy:
        $agoaugssmsiumiym = self::get("\x51\125\x45\x52\x59\x5f\123\x54\x52\111\116\107");
        goto mcuiacsuwymaaqeo;
        ykegacumqsccamqo:
    }
    
    public static function iawueuwikeeeseya()
    {
        goto mggmeguysyywsqug;
        emiwggmkkuqmessa:
        return $uykgysuswksgmwqy;
        goto wsmeaogyekwywgcw;
        mkegyeucuegamuuk:
        cmomsucusgoiuiau:
        goto oeogsickgekucugu;
        mggmeguysyywsqug:
        $uykgysuswksgmwqy = [];
        goto mgwyawuksamewowu;
        cmucccioqgqecqak:
        foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) {
            goto gogewooioeycwogq;
            olwwmuamagqqaiuo:
            uoamqsyoamgckumc:
            goto mucoasqieymuqsoe;
            gogewooioeycwogq:
            if (!(0 === strpos($uusmaiomayssaecw, "\110\124\x54\120\x5f"))) {
                goto uoamqsyoamgckumc;
            }
            goto mkkaoqcwmousacyi;
            mkkaoqcwmousacyi:
            $kmmmiumuegqmksky = implode("\x2d", array_map("\165\x63\146\x69\x72\163\164", array_slice(explode("\x5f", strtolower($uusmaiomayssaecw)), 1)));
            goto cgquoawccwawukqa;
            mucoasqieymuqsoe:
            zsumimyayewseuya:
            goto coaieqacoucggeec;
            cgquoawccwawukqa:
            $uykgysuswksgmwqy[$kmmmiumuegqmksky] = self::giiecckwoyiawoyy($uusmaiomayssaecw);
            goto olwwmuamagqqaiuo;
            coaieqacoucggeec:
        }
        goto mkegyeucuegamuuk;
        eomyeqewaooewomq:
        qgkmumiqueeskomg:
        goto emiwggmkkuqmessa;
        oeogsickgekucugu:
        goto qgkmumiqueeskomg;
        goto qaomyskykauugkcs;
        weyqosokwuacayyc:
        $ueiegogoeyqoiewa = self::giiecckwoyiawoyy();
        goto cmucccioqgqecqak;
        ieksoqkmeoasiqag:
        $uykgysuswksgmwqy = apache_request_headers();
        goto eomyeqewaooewomq;
        qaomyskykauugkcs:
        sogmusaogkcqgcgu:
        goto ieksoqkmeoasiqag;
        mgwyawuksamewowu:
        if (function_exists("\141\x70\x61\143\x68\x65\137\x72\x65\161\165\x65\163\164\137\150\145\x61\144\145\162\163")) {
            goto sogmusaogkcqgcgu;
        }
        goto weyqosokwuacayyc;
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
        ywwwkqcqkgqecqcq:
        goto ykgywsuquqemgquq;
        goto iwgcaokmwusuqcic;
        uumokaegooocsgwe:
        $aaceqemaqqeckueq = self::yyqgamuwwakgciey("\x52\x45\x51\x55\105\x53\124\x5f\123\x43\110\105\115\105");
        goto xoisuykgsmemuogs;
        coogegieeguyucqw:
        if ($aaceqemaqqeckueq) {
            goto uogegmqqwcikcmim;
        }
        goto uumokaegooocsgwe;
        awqukwmwkemoiskm:
        $gwgucoaaqcwwciqq = self::yyqgamuwwakgciey("\x48\124\x54\x50\137\110\x4f\x53\x54");
        goto ymqckowwcoyqcyec;
        ymqckowwcoyqcyec:
        $uogwqioiiwqsyksu = "{$aaceqemaqqeckueq}\72\57\57{$gwgucoaaqcwwciqq}";
        goto ywwwkqcqkgqecqcq;
        cwkciqmcigowukya:
        if (function_exists("\147\145\x74\137\x68\157\x6d\145\x5f\165\x72\x6c")) {
            goto scagyucammmkkuyc;
        }
        goto coogegieeguyucqw;
        ssagsmaymgmuaoiu:
        return $uogwqioiiwqsyksu;
        goto uqwkcimoeweusoci;
        xoisuykgsmemuogs:
        uogegmqqwcikcmim:
        goto awqukwmwkemoiskm;
        awkssgucausyouio:
        ykgywsuquqemgquq:
        goto ssagsmaymgmuaoiu;
        iwgcaokmwusuqcic:
        scagyucammmkkuyc:
        goto acuckmaiikqoeqcm;
        acuckmaiikqoeqcm:
        $uogwqioiiwqsyksu = get_home_url($mksyucucyswaukig, $mkomwsiykqigmqca, $aaceqemaqqeckueq);
        goto awkssgucausyouio;
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
        return (bool) self::giiecckwoyiawoyy("\121\125\105\x52\x59\137\x53\124\x52\x49\x4e\x47");
    }
    
    public static function ueiiieygmgawesgq()
    {
        goto iuosyoicmqwcuuky;
        mmkmacccuiwueymo:
        meeowaqccyoouiys:
        goto usioaqqkcwcaqqym;
        ekemsceqecycmmmu:
        $qsmicgaymwwckcsa = wp_get_available_translations();
        goto suykaockmyqykyai;
        suykaockmyqykyai:
        foreach (get_available_languages() as $swaukaagekiououo) {
            goto ssigosecoiyucquc;
            ssigosecoiyucquc:
            $ymqmyyeuycgmigyo = $swaukaagekiououo;
            goto ygweyqokmqmqoegc;
            ygweyqokmqmqoegc:
            if (!isset($qsmicgaymwwckcsa[$swaukaagekiououo], $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\x6e\147\154\x69\163\x68\137\156\x61\x6d\x65"])) {
                goto qackiwiueeeceeya;
            }
            goto cuoicwmegcssquai;
            yqwkeskyucykmiqm:
            uomqymaegyqyquma:
            goto wwqgwuoimukqimim;
            cuoicwmegcssquai:
            $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\156\x67\x6c\x69\163\150\x5f\156\x61\x6d\x65"];
            goto oqeemsageswyysqq;
            ssgqekymikwmgcim:
            $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo;
            goto yqwkeskyucykmiqm;
            oqeemsageswyysqq:
            qackiwiueeeceeya:
            goto ssgqekymikwmgcim;
            wwqgwuoimukqimim:
        }
        goto mmkmacccuiwueymo;
        aaoguekwqoiciuyk:
        if (!function_exists("\167\160\x5f\x67\x65\164\x5f\x61\x76\141\x69\x6c\141\142\x6c\x65\x5f\x74\162\141\x6e\163\x6c\141\164\151\x6f\x6e\163")) {
            require_once ABSPATH . "\x77\x70\x2d\x61\x64\x6d\151\x6e\57\151\x6e\x63\x6c\x75\x64\145\163\57\x74\162\141\x6e\163\154\141\164\x69\x6f\x6e\55\151\x6e\163\164\141\154\154\x2e\x70\x68\x70";
        }
        goto ekemsceqecycmmmu;
        usioaqqkcwcaqqym:
        return $ymkomcgesksuuysk;
        goto maqygissmeiauaay;
        iuosyoicmqwcuuky:
        $ymkomcgesksuuysk = [];
        goto aaoguekwqoiciuyk;
        maqygissmeiauaay:
    }
    
    public static function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    private static function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        goto cwesmgiogeyskqim;
        mkwescmqwgiogikw:
        $ggauoeuaesiymgee = $icwicymcioeyeyek;
        goto icceswgaysawiiqw;
        cwesmgiogeyskqim:
        if ($uusmaiomayssaecw) {
            goto eqauouqgmiyyiqyw;
        }
        goto mkwescmqwgiogikw;
        icceswgaysawiiqw:
        eqauouqgmiyyiqyw:
        goto oyeigmugeuaykeck;
        oyeigmugeuaykeck:
        return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto eoaygwoasoiqewmw;
        eoaygwoasoiqewmw:
    }
    
    public static function wymyeyweagqomiim() : bool
    {
        return function_exists("\x69\163\137\x73\x73\x6c") && is_ssl();
    }
    
    public static function guwgsooqkqgmcoim($eeamcawaiqocomwy = null) : bool
    {
        goto eygsosommcgkywom;
        cgaoeoaocquemgim:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto emwaygiaqusieqse;
        eygsosommcgkywom:
        if ($eeamcawaiqocomwy) {
            goto cueggsysuamckyyg;
        }
        goto cgaoeoaocquemgim;
        ywgassoaekiyeugu:
        return preg_match("\x2f\136\134\57\x72\x6f\x62\157\164\163\x2e\x74\x78\164\57", $eeamcawaiqocomwy);
        goto gusyiiieqkmciusw;
        emwaygiaqusieqse:
        cueggsysuamckyyg:
        goto ywgassoaekiyeugu;
        gusyiiieqkmciusw:
    }
    
    public static function smowememmgeukwki($eeamcawaiqocomwy = null) : bool
    {
        goto iccsuyookkesaeei;
        aoyicmmccykmsgsg:
        cqqasyaqucsqwqas:
        goto eyogsmikyyiuoaqq;
        iccsuyookkesaeei:
        if ($eeamcawaiqocomwy) {
            goto cqqasyaqucsqwqas;
        }
        goto swegcuwcgqqgsyoq;
        swegcuwcgqqgsyoq:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto aoyicmmccykmsgsg;
        eyogsmikyyiuoaqq:
        return function_exists("\x69\163\x5f\141\155\160\137\145\156\144\160\x6f\x69\156\164") && is_amp_endpoint() || preg_match("\x2f\50\134\x2f\141\x6d\160\134\57\x70\141\147\145\x5c\57\133\60\x2d\71\x5d\x2a\51\174\x28\x5c\x2f\141\x6d\x70\x5c\57\77\x29\x2f", $eeamcawaiqocomwy) || DecoratorHook::sscegwueamckwmcy("\x69\163\137\141\155\160", false);
        goto gikyuuwyokecusig;
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
        oicwoguswieiokwi:
        kcwyqqkwwueaemqo:
        goto cmwkciaaaeimewga;
        cmoimsmqkomccsuo:
        if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f"))) {
            goto omyycgwuomioaioa;
        }
        goto ieiicqcmikawmqwg;
        quqsomsqgyaeegcg:
        $eeamcawaiqocomwy = add_query_arg(self::giiecckwoyiawoyy("\121\125\x45\122\x59\x5f\x53\124\122\x49\116\x47"), '', $eeamcawaiqocomwy);
        goto oicwoguswieiokwi;
        awioayumusackqes:
        if (!$mkomwsiykqigmqca) {
            goto gwgwysswcsokuuiq;
        }
        goto cmoimsmqkomccsuo;
        ieiicqcmikawmqwg:
        $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy);
        goto auaquskkgkuyckiy;
        wwkiyoueyowgaaog:
        return $eeamcawaiqocomwy;
        goto amayksmqcaeciocm;
        uqquwkquoqgugyky:
        $eeamcawaiqocomwy = false;
        goto aecaiwsoyugiymsk;
        auaquskkgkuyckiy:
        omyycgwuomioaioa:
        goto ikgwqiqecsmoiasu;
        aecaiwsoyugiymsk:
        $mkomwsiykqigmqca = self::giiecckwoyiawoyy("\122\x45\121\125\x45\x53\124\x5f\x55\122\111");
        goto awioayumusackqes;
        ikgwqiqecsmoiasu:
        $eeamcawaiqocomwy = untrailingslashit(self::auksikwsewaywikq()) . $mkomwsiykqigmqca;
        goto oigqswimameoumgs;
        cmwkciaaaeimewga:
        gwgwysswcsokuuiq:
        goto wwkiyoueyowgaaog;
        oigqswimameoumgs:
        if (!$kssgyousiceysuaw) {
            goto kcwyqqkwwueaemqo;
        }
        goto quqsomsqgyaeegcg;
        amayksmqcaeciocm:
    }
    
    public static function gmigwwwmwemyaayy($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) : ?string
    {
        return home_url($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
    }
    
    public static function sgsoakksyayeoggw($ymacoouqwcqwwagu) : string
    {
        goto aqooumuqmsssmukm;
        aeqyyceygouqiggw:
        ykygqyagwwuyqiyy:
        goto oiimuikqsueysayy;
        aqooumuqmsssmukm:
        switch ($ymacoouqwcqwwagu) {
            case 100:
                $iueymcwwscwqkiyq = "\x43\157\x6e\164\x69\156\165\x65";
                goto ykygqyagwwuyqiyy;
            case 101:
                $iueymcwwscwqkiyq = "\123\x77\x69\164\x63\x68\x69\x6e\x67\40\120\162\157\164\157\x63\x6f\x6c\x73";
                goto ykygqyagwwuyqiyy;
            case 200:
                $iueymcwwscwqkiyq = "\x4f\x4b";
                goto ykygqyagwwuyqiyy;
            case 201:
                $iueymcwwscwqkiyq = "\x43\162\145\141\x74\145\x64";
                goto ykygqyagwwuyqiyy;
            case 202:
                $iueymcwwscwqkiyq = "\x41\x63\x63\x65\x70\x74\145\144";
                goto ykygqyagwwuyqiyy;
            case 203:
                $iueymcwwscwqkiyq = "\116\157\x6e\55\101\165\x74\x68\x6f\162\x69\x74\x61\164\x69\x76\x65\40\111\156\x66\157\x72\155\141\164\151\157\x6e";
                goto ykygqyagwwuyqiyy;
            case 204:
                $iueymcwwscwqkiyq = "\116\x6f\x20\103\157\x6e\x74\x65\156\164";
                goto ykygqyagwwuyqiyy;
            case 205:
                $iueymcwwscwqkiyq = "\122\145\163\145\x74\x20\x43\x6f\x6e\164\145\156\x74";
                goto ykygqyagwwuyqiyy;
            case 206:
                $iueymcwwscwqkiyq = "\x50\141\x72\164\151\x61\154\x20\x43\157\x6e\x74\x65\x6e\x74";
                goto ykygqyagwwuyqiyy;
            case 300:
                $iueymcwwscwqkiyq = "\115\x75\154\x74\x69\x70\x6c\x65\x20\x43\150\x6f\151\x63\145\163";
                goto ykygqyagwwuyqiyy;
            case 301:
                $iueymcwwscwqkiyq = "\115\x6f\166\145\144\x20\x50\145\162\x6d\141\x6e\x65\156\164\x6c\x79";
                goto ykygqyagwwuyqiyy;
            case 302:
                $iueymcwwscwqkiyq = "\x4d\157\166\x65\x64\x20\124\145\x6d\x70\x6f\162\x61\x72\151\154\x79";
                goto ykygqyagwwuyqiyy;
            case 303:
                $iueymcwwscwqkiyq = "\123\145\145\x20\x4f\x74\150\145\162";
                goto ykygqyagwwuyqiyy;
            case 304:
                $iueymcwwscwqkiyq = "\116\x6f\x74\40\x4d\x6f\x64\x69\146\151\145\x64";
                goto ykygqyagwwuyqiyy;
            case 305:
                $iueymcwwscwqkiyq = "\125\x73\x65\x20\x50\162\157\170\x79";
                goto ykygqyagwwuyqiyy;
            case 400:
                $iueymcwwscwqkiyq = "\102\x61\x64\x20\122\x65\161\x75\x65\x73\x74";
                goto ykygqyagwwuyqiyy;
            case 401:
                $iueymcwwscwqkiyq = "\x55\156\141\x75\x74\150\x6f\x72\151\x7a\x65\144";
                goto ykygqyagwwuyqiyy;
            case 402:
                $iueymcwwscwqkiyq = "\120\x61\x79\x6d\145\x6e\164\40\122\145\x71\165\x69\x72\145\x64";
                goto ykygqyagwwuyqiyy;
            case 403:
                $iueymcwwscwqkiyq = "\106\x6f\162\x62\151\144\144\145\x6e";
                goto ykygqyagwwuyqiyy;
            case 404:
                $iueymcwwscwqkiyq = "\116\x6f\164\40\x46\157\165\x6e\x64";
                goto ykygqyagwwuyqiyy;
            case 405:
                $iueymcwwscwqkiyq = "\115\x65\x74\x68\157\144\x20\116\157\x74\x20\x41\154\154\x6f\x77\x65\x64";
                goto ykygqyagwwuyqiyy;
            case 406:
                $iueymcwwscwqkiyq = "\116\x6f\x74\40\101\x63\x63\x65\x70\x74\141\142\x6c\x65";
                goto ykygqyagwwuyqiyy;
            case 407:
                $iueymcwwscwqkiyq = "\x50\162\157\170\171\x20\101\165\x74\x68\145\156\164\151\x63\x61\164\x69\x6f\x6e\40\x52\145\x71\x75\151\162\145\x64";
                goto ykygqyagwwuyqiyy;
            case 408:
                $iueymcwwscwqkiyq = "\x52\145\161\165\145\x73\x74\x20\124\x69\155\145\x2d\x6f\x75\164";
                goto ykygqyagwwuyqiyy;
            case 409:
                $iueymcwwscwqkiyq = "\x43\157\x6e\x66\154\151\x63\164";
                goto ykygqyagwwuyqiyy;
            case 410:
                $iueymcwwscwqkiyq = "\x47\x6f\156\145";
                goto ykygqyagwwuyqiyy;
            case 411:
                $iueymcwwscwqkiyq = "\x4c\x65\x6e\x67\x74\x68\40\x52\x65\161\x75\x69\162\145\144";
                goto ykygqyagwwuyqiyy;
            case 412:
                $iueymcwwscwqkiyq = "\x50\x72\145\x63\x6f\156\x64\151\x74\x69\x6f\x6e\x20\106\x61\151\x6c\145\x64";
                goto ykygqyagwwuyqiyy;
            case 413:
                $iueymcwwscwqkiyq = "\x52\x65\x71\165\x65\x73\x74\x20\x45\x6e\164\x69\164\171\x20\x54\x6f\x6f\x20\x4c\x61\162\x67\145";
                goto ykygqyagwwuyqiyy;
            case 414:
                $iueymcwwscwqkiyq = "\x52\145\161\165\x65\163\164\x2d\125\x52\111\40\124\x6f\x6f\x20\x4c\x61\162\147\145";
                goto ykygqyagwwuyqiyy;
            case 415:
                $iueymcwwscwqkiyq = "\125\x6e\x73\x75\160\x70\x6f\162\x74\x65\x64\40\115\145\x64\x69\141\x20\124\171\x70\145";
                goto ykygqyagwwuyqiyy;
            case 500:
                $iueymcwwscwqkiyq = "\x49\156\x74\145\x72\156\x61\154\x20\x53\x65\x72\x76\145\162\x20\105\x72\x72\x6f\x72";
                goto ykygqyagwwuyqiyy;
            case 501:
                $iueymcwwscwqkiyq = "\x4e\157\164\x20\111\x6d\x70\x6c\x65\x6d\145\x6e\x74\x65\144";
                goto ykygqyagwwuyqiyy;
            case 502:
                $iueymcwwscwqkiyq = "\102\141\x64\40\107\141\x74\x65\x77\x61\171";
                goto ykygqyagwwuyqiyy;
            case 503:
                $iueymcwwscwqkiyq = "\123\x65\162\x76\151\x63\x65\40\125\156\x61\166\141\x69\x6c\141\x62\154\x65";
                goto ykygqyagwwuyqiyy;
            case 504:
                $iueymcwwscwqkiyq = "\x47\141\164\145\167\x61\x79\40\x54\151\155\145\x2d\x6f\165\x74";
                goto ykygqyagwwuyqiyy;
            case 505:
                $iueymcwwscwqkiyq = "\110\x54\x54\x50\x20\126\145\x72\x73\x69\157\156\40\156\157\x74\40\x73\165\x70\160\x6f\162\164\145\144";
                goto ykygqyagwwuyqiyy;
            default:
                wp_die("\125\x6e\153\x6e\x6f\167\156\x20\150\x74\164\x70\x20\163\164\x61\164\x75\163\x20\x63\x6f\x64\145\x20\42" . htmlentities($ymacoouqwcqwwagu) . "\42");
        }
        goto yukuumakuqkumcoq;
        oiimuikqsueysayy:
        return $iueymcwwscwqkiyq;
        goto omqkqswkgyuaywke;
        yukuumakuqkumcoq:
        yoymucgagciuoegi:
        goto aeqyyceygouqiggw;
        omqkqswkgyuaywke:
    }
}

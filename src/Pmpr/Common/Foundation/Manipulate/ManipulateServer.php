<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto mcuiacsuwymaaqeo;
        ykegacumqsccamqo:
        return $agoaugssmsiumiym;
        goto cmomsucusgoiuiau;
        qmssoewosmoummak:
        $agoaugssmsiumiym = ManipulateFormat::omaawkkwwyesqwcc($agoaugssmsiumiym);
        goto hwkimcqyaowuueis;
        smcmeamiyyaksmkw:
        if (!$agoaugssmsiumiym) {
            goto ygkygooqqasikocy;
        }
        goto qmssoewosmoummak;
        mcuiacsuwymaaqeo:
        $agoaugssmsiumiym = self::get("\121\125\105\x52\x59\x5f\x53\x54\x52\111\x4e\x47");
        goto smcmeamiyyaksmkw;
        hwkimcqyaowuueis:
        ygkygooqqasikocy:
        goto ykegacumqsccamqo;
        cmomsucusgoiuiau:
    }
    
    public static function iawueuwikeeeseya()
    {
        goto mgwyawuksamewowu;
        weyqosokwuacayyc:
        if (function_exists("\x61\x70\141\x63\x68\145\137\x72\145\161\165\145\163\164\137\x68\x65\x61\144\x65\x72\163")) {
            goto qgkmumiqueeskomg;
        }
        goto cmucccioqgqecqak;
        cmucccioqgqecqak:
        $ueiegogoeyqoiewa = self::giiecckwoyiawoyy();
        goto mkegyeucuegamuuk;
        mgwyawuksamewowu:
        $uykgysuswksgmwqy = [];
        goto weyqosokwuacayyc;
        mkegyeucuegamuuk:
        foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) {
            goto mkkaoqcwmousacyi;
            mkkaoqcwmousacyi:
            if (!(0 === strpos($uusmaiomayssaecw, "\x48\x54\124\x50\137"))) {
                goto gogewooioeycwogq;
            }
            goto cgquoawccwawukqa;
            olwwmuamagqqaiuo:
            $uykgysuswksgmwqy[$kmmmiumuegqmksky] = self::giiecckwoyiawoyy($uusmaiomayssaecw);
            goto mucoasqieymuqsoe;
            cgquoawccwawukqa:
            $kmmmiumuegqmksky = implode("\x2d", array_map("\165\143\146\x69\162\x73\164", array_slice(explode("\137", strtolower($uusmaiomayssaecw)), 1)));
            goto olwwmuamagqqaiuo;
            coaieqacoucggeec:
            uoamqsyoamgckumc:
            goto sogmusaogkcqgcgu;
            mucoasqieymuqsoe:
            gogewooioeycwogq:
            goto coaieqacoucggeec;
            sogmusaogkcqgcgu:
        }
        goto oeogsickgekucugu;
        ieksoqkmeoasiqag:
        qgkmumiqueeskomg:
        goto eomyeqewaooewomq;
        eomyeqewaooewomq:
        $uykgysuswksgmwqy = apache_request_headers();
        goto emiwggmkkuqmessa;
        wsmeaogyekwywgcw:
        return $uykgysuswksgmwqy;
        goto uogegmqqwcikcmim;
        emiwggmkkuqmessa:
        mggmeguysyywsqug:
        goto wsmeaogyekwywgcw;
        oeogsickgekucugu:
        zsumimyayewseuya:
        goto qaomyskykauugkcs;
        qaomyskykauugkcs:
        goto mggmeguysyywsqug;
        goto ieksoqkmeoasiqag;
        uogegmqqwcikcmim:
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
        goto coogegieeguyucqw;
        ssagsmaymgmuaoiu:
        cwkciqmcigowukya:
        goto uqwkcimoeweusoci;
        uumokaegooocsgwe:
        if ($aaceqemaqqeckueq) {
            goto scagyucammmkkuyc;
        }
        goto xoisuykgsmemuogs;
        uqwkcimoeweusoci:
        return $uogwqioiiwqsyksu;
        goto meeowaqccyoouiys;
        iwgcaokmwusuqcic:
        goto cwkciqmcigowukya;
        goto acuckmaiikqoeqcm;
        ymqckowwcoyqcyec:
        $gwgucoaaqcwwciqq = self::yyqgamuwwakgciey("\x48\124\124\120\137\110\117\123\x54");
        goto ywwwkqcqkgqecqcq;
        acuckmaiikqoeqcm:
        ykgywsuquqemgquq:
        goto awkssgucausyouio;
        coogegieeguyucqw:
        if (function_exists("\x67\145\164\x5f\x68\157\155\145\x5f\x75\162\x6c")) {
            goto ykgywsuquqemgquq;
        }
        goto uumokaegooocsgwe;
        xoisuykgsmemuogs:
        $aaceqemaqqeckueq = self::yyqgamuwwakgciey("\x52\105\x51\125\x45\x53\x54\x5f\x53\103\110\105\115\105");
        goto awqukwmwkemoiskm;
        awkssgucausyouio:
        $uogwqioiiwqsyksu = get_home_url($mksyucucyswaukig, $mkomwsiykqigmqca, $aaceqemaqqeckueq);
        goto ssagsmaymgmuaoiu;
        awqukwmwkemoiskm:
        scagyucammmkkuyc:
        goto ymqckowwcoyqcyec;
        ywwwkqcqkgqecqcq:
        $uogwqioiiwqsyksu = "{$aaceqemaqqeckueq}\72\57\x2f{$gwgucoaaqcwwciqq}";
        goto iwgcaokmwusuqcic;
        meeowaqccyoouiys:
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
        return (bool) self::giiecckwoyiawoyy("\121\x55\x45\x52\131\x5f\123\124\x52\x49\x4e\107");
    }
    
    public static function ueiiieygmgawesgq()
    {
        goto aaoguekwqoiciuyk;
        suykaockmyqykyai:
        $qsmicgaymwwckcsa = wp_get_available_translations();
        goto mmkmacccuiwueymo;
        usioaqqkcwcaqqym:
        uomqymaegyqyquma:
        goto maqygissmeiauaay;
        aaoguekwqoiciuyk:
        $ymkomcgesksuuysk = [];
        goto ekemsceqecycmmmu;
        ekemsceqecycmmmu:
        if (!function_exists("\x77\160\137\147\145\x74\137\141\x76\x61\151\154\x61\142\x6c\x65\x5f\164\162\x61\x6e\163\154\141\x74\x69\x6f\156\x73")) {
            require_once ABSPATH . "\167\x70\55\x61\x64\x6d\151\x6e\57\151\x6e\x63\154\x75\x64\145\x73\57\x74\162\x61\x6e\163\154\x61\164\151\157\156\55\151\x6e\163\x74\141\154\154\x2e\160\x68\x70";
        }
        goto suykaockmyqykyai;
        maqygissmeiauaay:
        return $ymkomcgesksuuysk;
        goto eqauouqgmiyyiqyw;
        mmkmacccuiwueymo:
        foreach (get_available_languages() as $swaukaagekiououo) {
            goto ygweyqokmqmqoegc;
            ssgqekymikwmgcim:
            ssigosecoiyucquc:
            goto yqwkeskyucykmiqm;
            ygweyqokmqmqoegc:
            $ymqmyyeuycgmigyo = $swaukaagekiououo;
            goto cuoicwmegcssquai;
            oqeemsageswyysqq:
            $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\156\x67\x6c\x69\x73\150\137\156\x61\155\x65"];
            goto ssgqekymikwmgcim;
            wwqgwuoimukqimim:
            qackiwiueeeceeya:
            goto iuosyoicmqwcuuky;
            cuoicwmegcssquai:
            if (!isset($qsmicgaymwwckcsa[$swaukaagekiououo], $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\x6e\147\154\151\x73\150\x5f\x6e\141\155\145"])) {
                goto ssigosecoiyucquc;
            }
            goto oqeemsageswyysqq;
            yqwkeskyucykmiqm:
            $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo;
            goto wwqgwuoimukqimim;
            iuosyoicmqwcuuky:
        }
        goto usioaqqkcwcaqqym;
        eqauouqgmiyyiqyw:
    }
    
    public static function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    private static function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        goto mkwescmqwgiogikw;
        eoaygwoasoiqewmw:
        return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto cueggsysuamckyyg;
        mkwescmqwgiogikw:
        if ($uusmaiomayssaecw) {
            goto cwesmgiogeyskqim;
        }
        goto icceswgaysawiiqw;
        icceswgaysawiiqw:
        $ggauoeuaesiymgee = $icwicymcioeyeyek;
        goto oyeigmugeuaykeck;
        oyeigmugeuaykeck:
        cwesmgiogeyskqim:
        goto eoaygwoasoiqewmw;
        cueggsysuamckyyg:
    }
    
    public static function wymyeyweagqomiim() : bool
    {
        return function_exists("\x69\163\x5f\163\163\x6c") && is_ssl();
    }
    
    public static function guwgsooqkqgmcoim($eeamcawaiqocomwy = null) : bool
    {
        goto cgaoeoaocquemgim;
        cgaoeoaocquemgim:
        if ($eeamcawaiqocomwy) {
            goto eygsosommcgkywom;
        }
        goto emwaygiaqusieqse;
        gusyiiieqkmciusw:
        return preg_match("\x2f\136\134\57\162\157\x62\x6f\x74\x73\56\164\x78\164\x2f", $eeamcawaiqocomwy);
        goto cqqasyaqucsqwqas;
        emwaygiaqusieqse:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto ywgassoaekiyeugu;
        ywgassoaekiyeugu:
        eygsosommcgkywom:
        goto gusyiiieqkmciusw;
        cqqasyaqucsqwqas:
    }
    
    public static function smowememmgeukwki($eeamcawaiqocomwy = null) : bool
    {
        goto swegcuwcgqqgsyoq;
        swegcuwcgqqgsyoq:
        if ($eeamcawaiqocomwy) {
            goto iccsuyookkesaeei;
        }
        goto aoyicmmccykmsgsg;
        eyogsmikyyiuoaqq:
        iccsuyookkesaeei:
        goto gikyuuwyokecusig;
        aoyicmmccykmsgsg:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto eyogsmikyyiuoaqq;
        gikyuuwyokecusig:
        return function_exists("\151\163\137\x61\x6d\160\137\145\156\x64\x70\157\x69\156\164") && is_amp_endpoint() || preg_match("\57\x28\134\x2f\141\155\160\x5c\57\160\x61\147\x65\x5c\x2f\133\60\55\x39\x5d\x2a\51\x7c\x28\134\57\x61\x6d\x70\x5c\57\77\x29\57", $eeamcawaiqocomwy) || DecoratorHook::sscegwueamckwmcy("\x69\163\137\x61\155\160", false);
        goto omyycgwuomioaioa;
        omyycgwuomioaioa:
    }
    
    public static function aogsoswomcaqoukq($oaukocmsckciqaok, $ggauoeuaesiymgee = null)
    {
        global $wp_query;
        return ManipulateArray::get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee);
    }
    
    public static function ekcymmyqoceukosc($kssgyousiceysuaw = false)
    {
        goto aecaiwsoyugiymsk;
        awioayumusackqes:
        $mkomwsiykqigmqca = self::giiecckwoyiawoyy("\122\105\121\x55\x45\x53\124\137\x55\x52\x49");
        goto cmoimsmqkomccsuo;
        quqsomsqgyaeegcg:
        if (!$kssgyousiceysuaw) {
            goto gwgwysswcsokuuiq;
        }
        goto oicwoguswieiokwi;
        aecaiwsoyugiymsk:
        $eeamcawaiqocomwy = false;
        goto awioayumusackqes;
        ieiicqcmikawmqwg:
        if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f"))) {
            goto kcwyqqkwwueaemqo;
        }
        goto auaquskkgkuyckiy;
        oicwoguswieiokwi:
        $eeamcawaiqocomwy = add_query_arg(self::giiecckwoyiawoyy("\121\125\x45\122\131\137\123\124\x52\x49\116\107"), '', $eeamcawaiqocomwy);
        goto cmwkciaaaeimewga;
        amayksmqcaeciocm:
        return $eeamcawaiqocomwy;
        goto ykygqyagwwuyqiyy;
        cmwkciaaaeimewga:
        gwgwysswcsokuuiq:
        goto wwkiyoueyowgaaog;
        auaquskkgkuyckiy:
        $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy);
        goto ikgwqiqecsmoiasu;
        wwkiyoueyowgaaog:
        uqquwkquoqgugyky:
        goto amayksmqcaeciocm;
        cmoimsmqkomccsuo:
        if (!$mkomwsiykqigmqca) {
            goto uqquwkquoqgugyky;
        }
        goto ieiicqcmikawmqwg;
        ikgwqiqecsmoiasu:
        kcwyqqkwwueaemqo:
        goto oigqswimameoumgs;
        oigqswimameoumgs:
        $eeamcawaiqocomwy = untrailingslashit(self::auksikwsewaywikq()) . $mkomwsiykqigmqca;
        goto quqsomsqgyaeegcg;
        ykygqyagwwuyqiyy:
    }
    
    public static function gmigwwwmwemyaayy($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) : ?string
    {
        return home_url($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
    }
    
    public static function sgsoakksyayeoggw($ymacoouqwcqwwagu) : string
    {
        goto yukuumakuqkumcoq;
        aeqyyceygouqiggw:
        aqooumuqmsssmukm:
        goto oiimuikqsueysayy;
        omqkqswkgyuaywke:
        return $iueymcwwscwqkiyq;
        goto qmyaseyamuuussia;
        oiimuikqsueysayy:
        yoymucgagciuoegi:
        goto omqkqswkgyuaywke;
        yukuumakuqkumcoq:
        switch ($ymacoouqwcqwwagu) {
            case 100:
                $iueymcwwscwqkiyq = "\x43\x6f\x6e\164\x69\156\x75\x65";
                goto yoymucgagciuoegi;
            case 101:
                $iueymcwwscwqkiyq = "\x53\x77\x69\x74\143\150\x69\x6e\147\x20\120\162\157\164\x6f\x63\x6f\154\163";
                goto yoymucgagciuoegi;
            case 200:
                $iueymcwwscwqkiyq = "\117\x4b";
                goto yoymucgagciuoegi;
            case 201:
                $iueymcwwscwqkiyq = "\x43\x72\145\x61\164\145\x64";
                goto yoymucgagciuoegi;
            case 202:
                $iueymcwwscwqkiyq = "\101\x63\x63\145\x70\164\145\x64";
                goto yoymucgagciuoegi;
            case 203:
                $iueymcwwscwqkiyq = "\x4e\x6f\x6e\55\101\x75\x74\150\x6f\x72\151\x74\x61\164\151\x76\145\x20\x49\x6e\x66\x6f\162\155\141\x74\x69\x6f\156";
                goto yoymucgagciuoegi;
            case 204:
                $iueymcwwscwqkiyq = "\x4e\157\x20\103\x6f\156\164\x65\x6e\x74";
                goto yoymucgagciuoegi;
            case 205:
                $iueymcwwscwqkiyq = "\x52\145\x73\x65\164\x20\x43\157\156\164\x65\x6e\164";
                goto yoymucgagciuoegi;
            case 206:
                $iueymcwwscwqkiyq = "\120\x61\162\x74\151\x61\154\x20\103\x6f\156\164\x65\156\164";
                goto yoymucgagciuoegi;
            case 300:
                $iueymcwwscwqkiyq = "\x4d\165\154\164\x69\160\154\x65\x20\103\x68\157\x69\143\145\163";
                goto yoymucgagciuoegi;
            case 301:
                $iueymcwwscwqkiyq = "\115\x6f\x76\x65\x64\x20\120\145\x72\155\x61\156\x65\x6e\164\x6c\171";
                goto yoymucgagciuoegi;
            case 302:
                $iueymcwwscwqkiyq = "\x4d\x6f\166\x65\x64\x20\124\x65\x6d\x70\x6f\162\141\162\x69\x6c\x79";
                goto yoymucgagciuoegi;
            case 303:
                $iueymcwwscwqkiyq = "\123\x65\145\40\x4f\164\150\145\162";
                goto yoymucgagciuoegi;
            case 304:
                $iueymcwwscwqkiyq = "\x4e\x6f\164\x20\115\157\x64\151\146\151\145\x64";
                goto yoymucgagciuoegi;
            case 305:
                $iueymcwwscwqkiyq = "\x55\x73\x65\40\x50\162\x6f\170\x79";
                goto yoymucgagciuoegi;
            case 400:
                $iueymcwwscwqkiyq = "\x42\x61\x64\x20\x52\x65\x71\165\145\163\164";
                goto yoymucgagciuoegi;
            case 401:
                $iueymcwwscwqkiyq = "\125\x6e\141\165\x74\150\x6f\x72\x69\172\x65\144";
                goto yoymucgagciuoegi;
            case 402:
                $iueymcwwscwqkiyq = "\x50\141\x79\x6d\145\x6e\164\x20\x52\x65\x71\165\151\162\145\144";
                goto yoymucgagciuoegi;
            case 403:
                $iueymcwwscwqkiyq = "\x46\157\162\x62\151\144\144\x65\156";
                goto yoymucgagciuoegi;
            case 404:
                $iueymcwwscwqkiyq = "\116\x6f\164\x20\106\x6f\x75\156\x64";
                goto yoymucgagciuoegi;
            case 405:
                $iueymcwwscwqkiyq = "\x4d\145\164\150\x6f\x64\40\x4e\x6f\x74\x20\101\x6c\154\157\x77\145\144";
                goto yoymucgagciuoegi;
            case 406:
                $iueymcwwscwqkiyq = "\116\157\x74\40\x41\x63\143\x65\160\164\x61\142\x6c\145";
                goto yoymucgagciuoegi;
            case 407:
                $iueymcwwscwqkiyq = "\x50\x72\x6f\170\171\40\x41\165\164\150\x65\x6e\164\151\x63\x61\164\x69\157\156\x20\x52\145\161\x75\151\x72\x65\x64";
                goto yoymucgagciuoegi;
            case 408:
                $iueymcwwscwqkiyq = "\122\x65\x71\x75\x65\163\x74\x20\x54\x69\155\x65\x2d\157\x75\x74";
                goto yoymucgagciuoegi;
            case 409:
                $iueymcwwscwqkiyq = "\x43\x6f\156\146\x6c\x69\x63\164";
                goto yoymucgagciuoegi;
            case 410:
                $iueymcwwscwqkiyq = "\x47\157\156\x65";
                goto yoymucgagciuoegi;
            case 411:
                $iueymcwwscwqkiyq = "\x4c\145\156\147\x74\150\40\x52\145\x71\x75\151\162\145\144";
                goto yoymucgagciuoegi;
            case 412:
                $iueymcwwscwqkiyq = "\120\x72\145\x63\x6f\x6e\144\x69\164\151\x6f\156\40\x46\141\151\154\145\x64";
                goto yoymucgagciuoegi;
            case 413:
                $iueymcwwscwqkiyq = "\x52\145\x71\x75\x65\x73\x74\x20\x45\x6e\x74\151\164\171\x20\x54\157\157\x20\x4c\141\x72\147\x65";
                goto yoymucgagciuoegi;
            case 414:
                $iueymcwwscwqkiyq = "\122\x65\161\x75\145\x73\x74\x2d\x55\x52\x49\40\x54\x6f\x6f\40\x4c\x61\x72\x67\145";
                goto yoymucgagciuoegi;
            case 415:
                $iueymcwwscwqkiyq = "\x55\156\x73\165\160\160\x6f\162\x74\145\144\x20\x4d\145\144\x69\141\40\124\171\160\145";
                goto yoymucgagciuoegi;
            case 500:
                $iueymcwwscwqkiyq = "\111\x6e\164\145\x72\x6e\x61\154\x20\123\145\x72\x76\145\162\x20\x45\x72\162\x6f\x72";
                goto yoymucgagciuoegi;
            case 501:
                $iueymcwwscwqkiyq = "\116\x6f\164\40\x49\x6d\x70\154\145\x6d\x65\x6e\164\x65\144";
                goto yoymucgagciuoegi;
            case 502:
                $iueymcwwscwqkiyq = "\102\141\x64\x20\x47\141\164\x65\167\x61\x79";
                goto yoymucgagciuoegi;
            case 503:
                $iueymcwwscwqkiyq = "\123\145\162\166\151\143\145\40\x55\156\141\x76\x61\151\x6c\141\142\x6c\145";
                goto yoymucgagciuoegi;
            case 504:
                $iueymcwwscwqkiyq = "\x47\141\164\x65\x77\x61\171\x20\x54\151\155\145\x2d\x6f\165\164";
                goto yoymucgagciuoegi;
            case 505:
                $iueymcwwscwqkiyq = "\110\x54\124\120\40\126\145\x72\x73\151\x6f\156\x20\x6e\157\164\40\x73\x75\x70\160\157\162\x74\x65\x64";
                goto yoymucgagciuoegi;
            default:
                wp_die("\125\156\x6b\156\x6f\x77\156\40\x68\x74\164\x70\x20\163\x74\x61\164\x75\163\40\x63\x6f\x64\x65\x20\42" . htmlentities($ymacoouqwcqwwagu) . "\x22");
        }
        goto aeqyyceygouqiggw;
        qmyaseyamuuussia:
    }
}

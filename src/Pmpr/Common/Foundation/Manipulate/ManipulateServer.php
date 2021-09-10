<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        smcmeamiyyaksmkw:
        $agoaugssmsiumiym = ManipulateFormat::omaawkkwwyesqwcc($agoaugssmsiumiym);
        goto qmssoewosmoummak;
        qmssoewosmoummak:
        ukmgiiamkccogikc:
        goto hwkimcqyaowuueis;
        hwkimcqyaowuueis:
        return $agoaugssmsiumiym;
        goto ykegacumqsccamqo;
        mcuiacsuwymaaqeo:
        if (!$agoaugssmsiumiym) {
            goto ukmgiiamkccogikc;
        }
        goto smcmeamiyyaksmkw;
        ygkygooqqasikocy:
        $agoaugssmsiumiym = self::get("\x51\125\105\122\131\137\x53\124\x52\111\116\x47");
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
        weyqosokwuacayyc:
        $ueiegogoeyqoiewa = self::giiecckwoyiawoyy();
        goto cmucccioqgqecqak;
        mggmeguysyywsqug:
        $uykgysuswksgmwqy = [];
        goto mgwyawuksamewowu;
        qaomyskykauugkcs:
        sogmusaogkcqgcgu:
        goto ieksoqkmeoasiqag;
        ieksoqkmeoasiqag:
        $uykgysuswksgmwqy = apache_request_headers();
        goto eomyeqewaooewomq;
        cmucccioqgqecqak:
        foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) {
            goto gogewooioeycwogq;
            mucoasqieymuqsoe:
            zsumimyayewseuya:
            goto coaieqacoucggeec;
            cgquoawccwawukqa:
            $uykgysuswksgmwqy[$kmmmiumuegqmksky] = self::giiecckwoyiawoyy($uusmaiomayssaecw);
            goto olwwmuamagqqaiuo;
            mkkaoqcwmousacyi:
            $kmmmiumuegqmksky = implode("\55", array_map("\x75\143\146\151\x72\x73\x74", array_slice(explode("\137", strtolower($uusmaiomayssaecw)), 1)));
            goto cgquoawccwawukqa;
            olwwmuamagqqaiuo:
            uoamqsyoamgckumc:
            goto mucoasqieymuqsoe;
            gogewooioeycwogq:
            if (!(0 === strpos($uusmaiomayssaecw, "\110\124\x54\x50\x5f"))) {
                goto uoamqsyoamgckumc;
            }
            goto mkkaoqcwmousacyi;
            coaieqacoucggeec:
        }
        goto mkegyeucuegamuuk;
        oeogsickgekucugu:
        goto qgkmumiqueeskomg;
        goto qaomyskykauugkcs;
        eomyeqewaooewomq:
        qgkmumiqueeskomg:
        goto emiwggmkkuqmessa;
        mgwyawuksamewowu:
        if (function_exists("\x61\160\141\143\x68\x65\x5f\162\145\161\165\145\163\x74\137\x68\145\141\x64\x65\162\163")) {
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
        awkssgucausyouio:
        ykgywsuquqemgquq:
        goto ssagsmaymgmuaoiu;
        acuckmaiikqoeqcm:
        $uogwqioiiwqsyksu = get_home_url($mksyucucyswaukig, $mkomwsiykqigmqca, $aaceqemaqqeckueq);
        goto awkssgucausyouio;
        cwkciqmcigowukya:
        if (function_exists("\147\x65\164\137\150\x6f\155\x65\137\x75\162\x6c")) {
            goto scagyucammmkkuyc;
        }
        goto coogegieeguyucqw;
        ssagsmaymgmuaoiu:
        return $uogwqioiiwqsyksu;
        goto uqwkcimoeweusoci;
        coogegieeguyucqw:
        if ($aaceqemaqqeckueq) {
            goto uogegmqqwcikcmim;
        }
        goto uumokaegooocsgwe;
        xoisuykgsmemuogs:
        uogegmqqwcikcmim:
        goto awqukwmwkemoiskm;
        ymqckowwcoyqcyec:
        $uogwqioiiwqsyksu = "{$aaceqemaqqeckueq}\72\x2f\x2f{$gwgucoaaqcwwciqq}";
        goto ywwwkqcqkgqecqcq;
        awqukwmwkemoiskm:
        $gwgucoaaqcwwciqq = self::yyqgamuwwakgciey("\x48\x54\124\x50\x5f\x48\117\123\124");
        goto ymqckowwcoyqcyec;
        uumokaegooocsgwe:
        $aaceqemaqqeckueq = self::yyqgamuwwakgciey("\x52\105\121\125\x45\x53\124\x5f\x53\x43\x48\105\x4d\x45");
        goto xoisuykgsmemuogs;
        iwgcaokmwusuqcic:
        scagyucammmkkuyc:
        goto acuckmaiikqoeqcm;
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
        return (bool) self::giiecckwoyiawoyy("\x51\x55\105\122\x59\137\123\124\122\x49\116\107");
    }
    
    public static function ueiiieygmgawesgq()
    {
        goto iuosyoicmqwcuuky;
        aaoguekwqoiciuyk:
        if (!function_exists("\167\160\137\147\145\164\137\141\166\141\151\154\x61\x62\154\x65\x5f\x74\162\x61\x6e\x73\154\141\164\x69\157\156\x73")) {
            require_once ABSPATH . "\x77\x70\x2d\x61\144\155\151\156\x2f\x69\x6e\143\x6c\165\144\145\163\57\164\x72\x61\x6e\x73\x6c\141\164\151\157\x6e\x2d\x69\156\x73\x74\x61\154\154\x2e\160\150\x70";
        }
        goto ekemsceqecycmmmu;
        usioaqqkcwcaqqym:
        return $ymkomcgesksuuysk;
        goto maqygissmeiauaay;
        ekemsceqecycmmmu:
        $qsmicgaymwwckcsa = wp_get_available_translations();
        goto suykaockmyqykyai;
        mmkmacccuiwueymo:
        meeowaqccyoouiys:
        goto usioaqqkcwcaqqym;
        iuosyoicmqwcuuky:
        $ymkomcgesksuuysk = [];
        goto aaoguekwqoiciuyk;
        suykaockmyqykyai:
        foreach (get_available_languages() as $swaukaagekiououo) {
            goto ssigosecoiyucquc;
            oqeemsageswyysqq:
            qackiwiueeeceeya:
            goto ssgqekymikwmgcim;
            ygweyqokmqmqoegc:
            if (!isset($qsmicgaymwwckcsa[$swaukaagekiououo], $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\156\147\x6c\x69\x73\150\137\156\141\155\x65"])) {
                goto qackiwiueeeceeya;
            }
            goto cuoicwmegcssquai;
            yqwkeskyucykmiqm:
            uomqymaegyqyquma:
            goto wwqgwuoimukqimim;
            ssigosecoiyucquc:
            $ymqmyyeuycgmigyo = $swaukaagekiououo;
            goto ygweyqokmqmqoegc;
            cuoicwmegcssquai:
            $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\156\147\154\x69\163\150\137\156\141\x6d\145"];
            goto oqeemsageswyysqq;
            ssgqekymikwmgcim:
            $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo;
            goto yqwkeskyucykmiqm;
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
        mkwescmqwgiogikw:
        $ggauoeuaesiymgee = $icwicymcioeyeyek;
        goto icceswgaysawiiqw;
        eoaygwoasoiqewmw:
    }
    
    public static function wymyeyweagqomiim() : bool
    {
        return function_exists("\151\163\137\x73\163\154") && is_ssl();
    }
    
    public static function guwgsooqkqgmcoim($eeamcawaiqocomwy = null) : bool
    {
        goto eygsosommcgkywom;
        ywgassoaekiyeugu:
        return preg_match("\x2f\136\134\x2f\x72\x6f\142\157\164\x73\x2e\x74\170\x74\x2f", $eeamcawaiqocomwy);
        goto gusyiiieqkmciusw;
        emwaygiaqusieqse:
        cueggsysuamckyyg:
        goto ywgassoaekiyeugu;
        eygsosommcgkywom:
        if ($eeamcawaiqocomwy) {
            goto cueggsysuamckyyg;
        }
        goto cgaoeoaocquemgim;
        cgaoeoaocquemgim:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto emwaygiaqusieqse;
        gusyiiieqkmciusw:
    }
    
    public static function smowememmgeukwki($eeamcawaiqocomwy = null) : bool
    {
        goto iccsuyookkesaeei;
        iccsuyookkesaeei:
        if ($eeamcawaiqocomwy) {
            goto cqqasyaqucsqwqas;
        }
        goto swegcuwcgqqgsyoq;
        eyogsmikyyiuoaqq:
        return function_exists("\x69\163\x5f\141\155\x70\137\x65\156\x64\160\157\x69\156\164") && is_amp_endpoint() || preg_match("\x2f\50\134\x2f\x61\155\x70\x5c\57\x70\x61\147\145\x5c\57\133\60\55\71\135\x2a\51\x7c\50\x5c\57\x61\155\x70\134\x2f\x3f\51\x2f", $eeamcawaiqocomwy) || DecoratorHook::sscegwueamckwmcy("\151\x73\137\141\155\160", false);
        goto gikyuuwyokecusig;
        aoyicmmccykmsgsg:
        cqqasyaqucsqwqas:
        goto eyogsmikyyiuoaqq;
        swegcuwcgqqgsyoq:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto aoyicmmccykmsgsg;
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
        cmwkciaaaeimewga:
        gwgwysswcsokuuiq:
        goto wwkiyoueyowgaaog;
        quqsomsqgyaeegcg:
        $eeamcawaiqocomwy = add_query_arg(self::giiecckwoyiawoyy("\x51\x55\x45\122\x59\x5f\x53\124\122\x49\x4e\107"), '', $eeamcawaiqocomwy);
        goto oicwoguswieiokwi;
        uqquwkquoqgugyky:
        $eeamcawaiqocomwy = false;
        goto aecaiwsoyugiymsk;
        oigqswimameoumgs:
        if (!$kssgyousiceysuaw) {
            goto kcwyqqkwwueaemqo;
        }
        goto quqsomsqgyaeegcg;
        cmoimsmqkomccsuo:
        if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f"))) {
            goto omyycgwuomioaioa;
        }
        goto ieiicqcmikawmqwg;
        awioayumusackqes:
        if (!$mkomwsiykqigmqca) {
            goto gwgwysswcsokuuiq;
        }
        goto cmoimsmqkomccsuo;
        ikgwqiqecsmoiasu:
        $eeamcawaiqocomwy = untrailingslashit(self::auksikwsewaywikq()) . $mkomwsiykqigmqca;
        goto oigqswimameoumgs;
        wwkiyoueyowgaaog:
        return $eeamcawaiqocomwy;
        goto amayksmqcaeciocm;
        aecaiwsoyugiymsk:
        $mkomwsiykqigmqca = self::giiecckwoyiawoyy("\122\105\x51\125\105\123\124\137\x55\122\111");
        goto awioayumusackqes;
        ieiicqcmikawmqwg:
        $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy);
        goto auaquskkgkuyckiy;
        auaquskkgkuyckiy:
        omyycgwuomioaioa:
        goto ikgwqiqecsmoiasu;
        amayksmqcaeciocm:
    }
    
    public static function gmigwwwmwemyaayy($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) : ?string
    {
        return home_url($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
    }
    
    public static function sgsoakksyayeoggw($ymacoouqwcqwwagu) : string
    {
        goto aqooumuqmsssmukm;
        yukuumakuqkumcoq:
        yoymucgagciuoegi:
        goto aeqyyceygouqiggw;
        aqooumuqmsssmukm:
        switch ($ymacoouqwcqwwagu) {
            case 100:
                $iueymcwwscwqkiyq = "\103\x6f\x6e\x74\x69\x6e\x75\145";
                goto ykygqyagwwuyqiyy;
            case 101:
                $iueymcwwscwqkiyq = "\123\167\151\164\143\x68\151\156\147\40\120\x72\157\x74\157\143\x6f\154\163";
                goto ykygqyagwwuyqiyy;
            case 200:
                $iueymcwwscwqkiyq = "\x4f\x4b";
                goto ykygqyagwwuyqiyy;
            case 201:
                $iueymcwwscwqkiyq = "\103\x72\145\141\164\x65\144";
                goto ykygqyagwwuyqiyy;
            case 202:
                $iueymcwwscwqkiyq = "\x41\x63\x63\145\160\x74\145\x64";
                goto ykygqyagwwuyqiyy;
            case 203:
                $iueymcwwscwqkiyq = "\x4e\157\x6e\55\101\165\164\150\157\162\x69\164\x61\x74\x69\x76\x65\40\111\156\x66\157\162\155\141\x74\x69\x6f\156";
                goto ykygqyagwwuyqiyy;
            case 204:
                $iueymcwwscwqkiyq = "\116\157\x20\x43\x6f\156\x74\145\156\164";
                goto ykygqyagwwuyqiyy;
            case 205:
                $iueymcwwscwqkiyq = "\122\x65\163\x65\x74\40\x43\157\x6e\164\145\x6e\164";
                goto ykygqyagwwuyqiyy;
            case 206:
                $iueymcwwscwqkiyq = "\x50\141\x72\164\x69\141\x6c\x20\103\x6f\x6e\164\x65\x6e\164";
                goto ykygqyagwwuyqiyy;
            case 300:
                $iueymcwwscwqkiyq = "\x4d\165\x6c\x74\151\160\154\145\x20\x43\x68\x6f\151\143\x65\x73";
                goto ykygqyagwwuyqiyy;
            case 301:
                $iueymcwwscwqkiyq = "\115\x6f\x76\x65\x64\x20\x50\145\162\x6d\x61\x6e\145\156\x74\x6c\171";
                goto ykygqyagwwuyqiyy;
            case 302:
                $iueymcwwscwqkiyq = "\115\x6f\x76\145\x64\x20\124\x65\155\160\x6f\162\x61\x72\x69\x6c\x79";
                goto ykygqyagwwuyqiyy;
            case 303:
                $iueymcwwscwqkiyq = "\123\145\145\40\x4f\x74\150\x65\x72";
                goto ykygqyagwwuyqiyy;
            case 304:
                $iueymcwwscwqkiyq = "\116\157\164\x20\115\x6f\x64\151\146\x69\145\x64";
                goto ykygqyagwwuyqiyy;
            case 305:
                $iueymcwwscwqkiyq = "\125\x73\145\40\120\162\x6f\x78\x79";
                goto ykygqyagwwuyqiyy;
            case 400:
                $iueymcwwscwqkiyq = "\102\141\x64\40\122\x65\161\165\145\163\164";
                goto ykygqyagwwuyqiyy;
            case 401:
                $iueymcwwscwqkiyq = "\125\x6e\141\x75\164\x68\x6f\x72\x69\172\x65\144";
                goto ykygqyagwwuyqiyy;
            case 402:
                $iueymcwwscwqkiyq = "\x50\x61\171\x6d\145\x6e\x74\x20\122\145\161\165\x69\162\x65\144";
                goto ykygqyagwwuyqiyy;
            case 403:
                $iueymcwwscwqkiyq = "\106\157\x72\x62\x69\x64\x64\145\156";
                goto ykygqyagwwuyqiyy;
            case 404:
                $iueymcwwscwqkiyq = "\x4e\157\164\x20\106\x6f\x75\156\x64";
                goto ykygqyagwwuyqiyy;
            case 405:
                $iueymcwwscwqkiyq = "\115\145\164\x68\x6f\x64\x20\x4e\157\164\40\101\x6c\x6c\157\x77\145\144";
                goto ykygqyagwwuyqiyy;
            case 406:
                $iueymcwwscwqkiyq = "\x4e\157\164\40\101\x63\x63\145\x70\x74\141\x62\154\x65";
                goto ykygqyagwwuyqiyy;
            case 407:
                $iueymcwwscwqkiyq = "\x50\x72\157\x78\171\40\x41\165\164\x68\145\156\x74\x69\x63\x61\x74\x69\157\x6e\40\x52\x65\161\x75\151\162\x65\144";
                goto ykygqyagwwuyqiyy;
            case 408:
                $iueymcwwscwqkiyq = "\x52\x65\161\x75\145\163\164\x20\x54\151\155\x65\x2d\x6f\x75\164";
                goto ykygqyagwwuyqiyy;
            case 409:
                $iueymcwwscwqkiyq = "\x43\157\156\x66\154\x69\x63\x74";
                goto ykygqyagwwuyqiyy;
            case 410:
                $iueymcwwscwqkiyq = "\107\x6f\x6e\x65";
                goto ykygqyagwwuyqiyy;
            case 411:
                $iueymcwwscwqkiyq = "\114\145\156\147\x74\150\40\x52\145\x71\165\151\x72\x65\144";
                goto ykygqyagwwuyqiyy;
            case 412:
                $iueymcwwscwqkiyq = "\x50\x72\x65\143\157\x6e\x64\151\x74\x69\x6f\156\x20\x46\141\x69\154\145\144";
                goto ykygqyagwwuyqiyy;
            case 413:
                $iueymcwwscwqkiyq = "\x52\x65\x71\165\145\x73\164\x20\105\x6e\x74\151\164\x79\x20\124\x6f\x6f\x20\x4c\x61\162\x67\x65";
                goto ykygqyagwwuyqiyy;
            case 414:
                $iueymcwwscwqkiyq = "\x52\145\161\x75\x65\163\x74\x2d\125\122\x49\x20\x54\157\157\x20\114\141\x72\147\x65";
                goto ykygqyagwwuyqiyy;
            case 415:
                $iueymcwwscwqkiyq = "\x55\x6e\x73\165\160\160\157\x72\164\145\144\40\x4d\x65\x64\x69\x61\40\x54\x79\x70\x65";
                goto ykygqyagwwuyqiyy;
            case 500:
                $iueymcwwscwqkiyq = "\x49\156\x74\x65\162\x6e\141\x6c\40\x53\x65\162\166\x65\162\40\x45\x72\162\157\x72";
                goto ykygqyagwwuyqiyy;
            case 501:
                $iueymcwwscwqkiyq = "\x4e\157\164\x20\x49\x6d\x70\154\x65\x6d\145\156\x74\145\144";
                goto ykygqyagwwuyqiyy;
            case 502:
                $iueymcwwscwqkiyq = "\102\x61\x64\x20\107\141\164\145\x77\x61\171";
                goto ykygqyagwwuyqiyy;
            case 503:
                $iueymcwwscwqkiyq = "\x53\x65\x72\x76\151\143\x65\x20\125\156\x61\x76\x61\x69\154\141\142\154\x65";
                goto ykygqyagwwuyqiyy;
            case 504:
                $iueymcwwscwqkiyq = "\x47\x61\164\x65\x77\141\x79\40\124\151\155\x65\55\157\x75\164";
                goto ykygqyagwwuyqiyy;
            case 505:
                $iueymcwwscwqkiyq = "\x48\124\124\x50\40\x56\x65\x72\x73\151\157\x6e\x20\156\x6f\164\x20\x73\165\160\x70\x6f\162\x74\145\144";
                goto ykygqyagwwuyqiyy;
            default:
                wp_die("\x55\x6e\153\x6e\157\167\156\40\150\164\x74\160\x20\163\x74\x61\164\x75\163\40\143\157\144\x65\40\42" . htmlentities($ymacoouqwcqwwagu) . "\42");
        }
        goto yukuumakuqkumcoq;
        aeqyyceygouqiggw:
        ykygqyagwwuyqiyy:
        goto oiimuikqsueysayy;
        oiimuikqsueysayy:
        return $iueymcwwscwqkiyq;
        goto omqkqswkgyuaywke;
        omqkqswkgyuaywke:
    }
}

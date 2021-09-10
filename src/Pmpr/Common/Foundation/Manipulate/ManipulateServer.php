<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto aigsykmqeyesokek;
        aqoggmcwaocwqmma:
        wmwggwqewsaqwewq:
        goto gsiccicikauwmmie;
        muoiywyyogmywgug:
        if (!$agoaugssmsiumiym) {
            goto wmwggwqewsaqwewq;
        }
        goto yagkqyieuqkwkkak;
        gsiccicikauwmmie:
        return $agoaugssmsiumiym;
        goto jceqycsmkusyoowc;
        yagkqyieuqkwkkak:
        $agoaugssmsiumiym = ManipulateFormat::omaawkkwwyesqwcc($agoaugssmsiumiym);
        goto aqoggmcwaocwqmma;
        aigsykmqeyesokek:
        $agoaugssmsiumiym = self::get("\121\x55\105\x52\x59\137\123\x54\122\x49\x4e\107");
        goto muoiywyyogmywgug;
        jceqycsmkusyoowc:
    }
    
    public static function iawueuwikeeeseya()
    {
        goto gcukeaaoomsqkwmg;
        smokemkeeuyeamye:
        if (function_exists("\x61\160\141\x63\150\145\x5f\x72\x65\x71\165\x65\163\164\x5f\150\145\x61\x64\x65\162\163")) {
            goto awiquiscemosoioe;
        }
        goto eeqooyucsqoakgmw;
        wkkyyosuiiesusyy:
        return $uykgysuswksgmwqy;
        goto emwyayayykqeaomu;
        scooqcccqwoackku:
        awiquiscemosoioe:
        goto wmkceagokqacmiwy;
        igqcisomycuoeymm:
        ywwgekggsmaeswyq:
        goto ocqggiokqycoqmmu;
        gcukeaaoomsqkwmg:
        $uykgysuswksgmwqy = [];
        goto smokemkeeuyeamye;
        eeqooyucsqoakgmw:
        $ueiegogoeyqoiewa = self::giiecckwoyiawoyy();
        goto wmgaeiusimsuaeiu;
        wmkceagokqacmiwy:
        $uykgysuswksgmwqy = apache_request_headers();
        goto imuggoqgiugiyyms;
        ocqggiokqycoqmmu:
        goto eswgaqweugauecaq;
        goto scooqcccqwoackku;
        imuggoqgiugiyyms:
        eswgaqweugauecaq:
        goto wkkyyosuiiesusyy;
        wmgaeiusimsuaeiu:
        foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) {
            goto aosgwsogkogssquu;
            kguoeaummyeuqwco:
            mswesygwomaquqiw:
            goto euogucuegesyqyyk;
            aosgwsogkogssquu:
            if (!(0 === strpos($uusmaiomayssaecw, "\110\x54\x54\x50\x5f"))) {
                goto oyiiyksykcgcagus;
            }
            goto goywyqwiewckiomw;
            ekgaaqmmaescmsak:
            $uykgysuswksgmwqy[$kmmmiumuegqmksky] = self::giiecckwoyiawoyy($uusmaiomayssaecw);
            goto aqsqeoiismoaoiky;
            goywyqwiewckiomw:
            $kmmmiumuegqmksky = implode("\55", array_map("\x75\143\146\x69\162\x73\164", array_slice(explode("\x5f", strtolower($uusmaiomayssaecw)), 1)));
            goto ekgaaqmmaescmsak;
            aqsqeoiismoaoiky:
            oyiiyksykcgcagus:
            goto kguoeaummyeuqwco;
            euogucuegesyqyyk:
        }
        goto igqcisomycuoeymm;
        emwyayayykqeaomu:
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
        goto yisaacgkisqssack;
        yisaacgkisqssack:
        if (function_exists("\147\145\x74\x5f\x68\157\155\x65\x5f\x75\x72\154")) {
            goto iisqqoaayqqqucai;
        }
        goto aygqokkmmumaqmei;
        ewkcysiiwmycaecc:
        $uogwqioiiwqsyksu = get_home_url($mksyucucyswaukig, $mkomwsiykqigmqca, $aaceqemaqqeckueq);
        goto aimwyouyuaasmcsy;
        ikauicmsakmoqusg:
        $aaceqemaqqeckueq = self::yyqgamuwwakgciey("\122\x45\121\125\x45\x53\124\x5f\x53\103\x48\105\115\x45");
        goto weyoyumiwmwougco;
        kaksiweaiuugqeio:
        iisqqoaayqqqucai:
        goto ewkcysiiwmycaecc;
        aygqokkmmumaqmei:
        if ($aaceqemaqqeckueq) {
            goto kkyyicgmsyyyseko;
        }
        goto ikauicmsakmoqusg;
        kkwsccmgsgogsayc:
        $uogwqioiiwqsyksu = "{$aaceqemaqqeckueq}\x3a\57\57{$gwgucoaaqcwwciqq}";
        goto wkoaouywgckiigoa;
        weyoyumiwmwougco:
        kkyyicgmsyyyseko:
        goto gsegyaaokkacccas;
        aimwyouyuaasmcsy:
        wiwqmuwgswwgcgwq:
        goto wuyoocqaysogmcsa;
        wuyoocqaysogmcsa:
        return $uogwqioiiwqsyksu;
        goto sqqosuucouosesoe;
        wkoaouywgckiigoa:
        goto wiwqmuwgswwgcgwq;
        goto kaksiweaiuugqeio;
        gsegyaaokkacccas:
        $gwgucoaaqcwwciqq = self::yyqgamuwwakgciey("\x48\x54\124\x50\137\x48\117\123\124");
        goto kkwsccmgsgogsayc;
        sqqosuucouosesoe:
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
        return (bool) self::giiecckwoyiawoyy("\121\125\x45\122\131\x5f\x53\124\122\111\116\107");
    }
    
    public static function ueiiieygmgawesgq()
    {
        goto iquggikocsikyqcu;
        ukmgiiamkccogikc:
        foreach (get_available_languages() as $swaukaagekiououo) {
            goto aswigywgqmqqyaks;
            ukwyoqwawqemgaou:
            $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo;
            goto iiceausgsgcgseiu;
            ocawiugcmcgyiuqy:
            $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\x6e\x67\154\151\x73\x68\137\156\x61\155\x65"];
            goto sukwuguiwokwokoa;
            iiceausgsgcgseiu:
            qmugicuuomqociko:
            goto yuscoeckmsicamcy;
            qyqaskiyiewkcqog:
            if (!isset($qsmicgaymwwckcsa[$swaukaagekiououo], $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\x6e\147\x6c\151\163\150\x5f\156\x61\155\145"])) {
                goto eioqwkagqyekiogk;
            }
            goto ocawiugcmcgyiuqy;
            aswigywgqmqqyaks:
            $ymqmyyeuycgmigyo = $swaukaagekiououo;
            goto qyqaskiyiewkcqog;
            sukwuguiwokwokoa:
            eioqwkagqyekiogk:
            goto ukwyoqwawqemgaou;
            yuscoeckmsicamcy:
        }
        goto ygkygooqqasikocy;
        mcuiacsuwymaaqeo:
        return $ymkomcgesksuuysk;
        goto smcmeamiyyaksmkw;
        iquggikocsikyqcu:
        $ymkomcgesksuuysk = [];
        goto qqcgoykmgigawaue;
        qqcgoykmgigawaue:
        if (!function_exists("\167\x70\x5f\147\145\x74\137\x61\x76\x61\151\154\141\142\154\x65\137\x74\162\x61\156\163\x6c\141\164\151\x6f\156\163")) {
            require_once ABSPATH . "\x77\160\x2d\141\x64\x6d\x69\x6e\57\x69\x6e\143\154\x75\144\x65\163\x2f\164\x72\x61\156\x73\x6c\x61\x74\x69\x6f\156\55\151\156\x73\x74\141\154\x6c\x2e\160\150\x70";
        }
        goto mosmuqisqgakqaku;
        mosmuqisqgakqaku:
        $qsmicgaymwwckcsa = wp_get_available_translations();
        goto ukmgiiamkccogikc;
        ygkygooqqasikocy:
        wysmgisokmgyaukg:
        goto mcuiacsuwymaaqeo;
        smcmeamiyyaksmkw:
    }
    
    public static function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    private static function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        goto hwkimcqyaowuueis;
        hwkimcqyaowuueis:
        if ($uusmaiomayssaecw) {
            goto qmssoewosmoummak;
        }
        goto ykegacumqsccamqo;
        ykegacumqsccamqo:
        $ggauoeuaesiymgee = $icwicymcioeyeyek;
        goto cmomsucusgoiuiau;
        zsumimyayewseuya:
        return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto uoamqsyoamgckumc;
        cmomsucusgoiuiau:
        qmssoewosmoummak:
        goto zsumimyayewseuya;
        uoamqsyoamgckumc:
    }
    
    public static function wymyeyweagqomiim() : bool
    {
        return function_exists("\151\x73\x5f\163\163\154") && is_ssl();
    }
    
    public static function guwgsooqkqgmcoim($eeamcawaiqocomwy = null) : bool
    {
        goto mkkaoqcwmousacyi;
        mucoasqieymuqsoe:
        return preg_match("\57\136\134\57\162\x6f\142\157\x74\x73\x2e\x74\x78\164\57", $eeamcawaiqocomwy);
        goto coaieqacoucggeec;
        cgquoawccwawukqa:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto olwwmuamagqqaiuo;
        olwwmuamagqqaiuo:
        gogewooioeycwogq:
        goto mucoasqieymuqsoe;
        mkkaoqcwmousacyi:
        if ($eeamcawaiqocomwy) {
            goto gogewooioeycwogq;
        }
        goto cgquoawccwawukqa;
        coaieqacoucggeec:
    }
    
    public static function smowememmgeukwki($eeamcawaiqocomwy = null) : bool
    {
        goto qgkmumiqueeskomg;
        qgkmumiqueeskomg:
        if ($eeamcawaiqocomwy) {
            goto sogmusaogkcqgcgu;
        }
        goto mggmeguysyywsqug;
        weyqosokwuacayyc:
        return function_exists("\151\x73\137\141\155\160\137\145\x6e\x64\160\157\x69\156\x74") && is_amp_endpoint() || preg_match("\x2f\x28\134\x2f\141\x6d\x70\x5c\57\x70\x61\147\x65\134\x2f\x5b\60\55\71\135\x2a\51\x7c\x28\x5c\57\x61\x6d\160\x5c\57\77\51\57", $eeamcawaiqocomwy) || DecoratorHook::sscegwueamckwmcy("\151\163\137\x61\155\x70", false);
        goto cmucccioqgqecqak;
        mggmeguysyywsqug:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto mgwyawuksamewowu;
        mgwyawuksamewowu:
        sogmusaogkcqgcgu:
        goto weyqosokwuacayyc;
        cmucccioqgqecqak:
    }
    
    public static function aogsoswomcaqoukq($oaukocmsckciqaok, $ggauoeuaesiymgee = null)
    {
        global $wp_query;
        return ManipulateArray::get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee);
    }
    
    public static function ekcymmyqoceukosc($kssgyousiceysuaw = false)
    {
        goto ieksoqkmeoasiqag;
        awqukwmwkemoiskm:
        return $eeamcawaiqocomwy;
        goto ymqckowwcoyqcyec;
        xoisuykgsmemuogs:
        qaomyskykauugkcs:
        goto awqukwmwkemoiskm;
        wsmeaogyekwywgcw:
        if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f"))) {
            goto mkegyeucuegamuuk;
        }
        goto uogegmqqwcikcmim;
        cwkciqmcigowukya:
        if (!$kssgyousiceysuaw) {
            goto oeogsickgekucugu;
        }
        goto coogegieeguyucqw;
        uogegmqqwcikcmim:
        $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy);
        goto scagyucammmkkuyc;
        eomyeqewaooewomq:
        $mkomwsiykqigmqca = self::giiecckwoyiawoyy("\x52\x45\x51\125\105\123\x54\137\x55\x52\111");
        goto emiwggmkkuqmessa;
        ykgywsuquqemgquq:
        $eeamcawaiqocomwy = untrailingslashit(self::auksikwsewaywikq()) . $mkomwsiykqigmqca;
        goto cwkciqmcigowukya;
        coogegieeguyucqw:
        $eeamcawaiqocomwy = add_query_arg(self::giiecckwoyiawoyy("\121\125\105\x52\131\x5f\123\124\x52\x49\x4e\107"), '', $eeamcawaiqocomwy);
        goto uumokaegooocsgwe;
        scagyucammmkkuyc:
        mkegyeucuegamuuk:
        goto ykgywsuquqemgquq;
        emiwggmkkuqmessa:
        if (!$mkomwsiykqigmqca) {
            goto qaomyskykauugkcs;
        }
        goto wsmeaogyekwywgcw;
        ieksoqkmeoasiqag:
        $eeamcawaiqocomwy = false;
        goto eomyeqewaooewomq;
        uumokaegooocsgwe:
        oeogsickgekucugu:
        goto xoisuykgsmemuogs;
        ymqckowwcoyqcyec:
    }
    
    public static function gmigwwwmwemyaayy($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) : ?string
    {
        return home_url($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
    }
    
    public static function sgsoakksyayeoggw($ymacoouqwcqwwagu) : string
    {
        goto acuckmaiikqoeqcm;
        ssagsmaymgmuaoiu:
        ywwwkqcqkgqecqcq:
        goto uqwkcimoeweusoci;
        acuckmaiikqoeqcm:
        switch ($ymacoouqwcqwwagu) {
            case 100:
                $iueymcwwscwqkiyq = "\x43\x6f\156\164\151\x6e\x75\x65";
                goto ywwwkqcqkgqecqcq;
            case 101:
                $iueymcwwscwqkiyq = "\x53\167\151\x74\143\150\x69\x6e\x67\x20\x50\x72\x6f\164\x6f\x63\157\x6c\163";
                goto ywwwkqcqkgqecqcq;
            case 200:
                $iueymcwwscwqkiyq = "\117\113";
                goto ywwwkqcqkgqecqcq;
            case 201:
                $iueymcwwscwqkiyq = "\103\162\x65\141\x74\145\x64";
                goto ywwwkqcqkgqecqcq;
            case 202:
                $iueymcwwscwqkiyq = "\x41\x63\143\x65\160\164\x65\144";
                goto ywwwkqcqkgqecqcq;
            case 203:
                $iueymcwwscwqkiyq = "\116\157\156\x2d\x41\165\x74\150\157\x72\x69\x74\x61\164\151\x76\x65\x20\x49\x6e\146\157\162\155\141\164\x69\157\156";
                goto ywwwkqcqkgqecqcq;
            case 204:
                $iueymcwwscwqkiyq = "\x4e\x6f\40\103\157\156\164\x65\156\x74";
                goto ywwwkqcqkgqecqcq;
            case 205:
                $iueymcwwscwqkiyq = "\122\145\x73\145\164\x20\x43\x6f\x6e\164\145\156\x74";
                goto ywwwkqcqkgqecqcq;
            case 206:
                $iueymcwwscwqkiyq = "\120\x61\162\x74\x69\141\154\40\103\157\x6e\x74\145\x6e\164";
                goto ywwwkqcqkgqecqcq;
            case 300:
                $iueymcwwscwqkiyq = "\x4d\x75\x6c\x74\151\x70\154\145\x20\x43\x68\x6f\151\143\145\163";
                goto ywwwkqcqkgqecqcq;
            case 301:
                $iueymcwwscwqkiyq = "\115\157\x76\145\144\40\x50\x65\162\155\x61\x6e\x65\x6e\164\x6c\171";
                goto ywwwkqcqkgqecqcq;
            case 302:
                $iueymcwwscwqkiyq = "\115\x6f\x76\x65\x64\x20\124\145\155\160\x6f\162\x61\162\151\154\x79";
                goto ywwwkqcqkgqecqcq;
            case 303:
                $iueymcwwscwqkiyq = "\123\x65\145\x20\x4f\164\150\145\x72";
                goto ywwwkqcqkgqecqcq;
            case 304:
                $iueymcwwscwqkiyq = "\x4e\x6f\164\40\x4d\157\144\151\x66\x69\145\144";
                goto ywwwkqcqkgqecqcq;
            case 305:
                $iueymcwwscwqkiyq = "\x55\163\145\40\x50\162\157\x78\171";
                goto ywwwkqcqkgqecqcq;
            case 400:
                $iueymcwwscwqkiyq = "\x42\141\x64\40\122\145\x71\165\145\163\164";
                goto ywwwkqcqkgqecqcq;
            case 401:
                $iueymcwwscwqkiyq = "\125\156\141\165\x74\150\157\x72\151\172\x65\x64";
                goto ywwwkqcqkgqecqcq;
            case 402:
                $iueymcwwscwqkiyq = "\120\x61\171\155\145\156\x74\40\x52\145\x71\x75\151\162\145\x64";
                goto ywwwkqcqkgqecqcq;
            case 403:
                $iueymcwwscwqkiyq = "\x46\157\x72\142\151\144\x64\145\x6e";
                goto ywwwkqcqkgqecqcq;
            case 404:
                $iueymcwwscwqkiyq = "\116\157\164\x20\106\x6f\165\x6e\144";
                goto ywwwkqcqkgqecqcq;
            case 405:
                $iueymcwwscwqkiyq = "\x4d\x65\164\x68\x6f\144\40\116\x6f\164\40\x41\154\x6c\157\167\x65\x64";
                goto ywwwkqcqkgqecqcq;
            case 406:
                $iueymcwwscwqkiyq = "\x4e\x6f\x74\40\x41\143\143\x65\160\164\x61\x62\154\x65";
                goto ywwwkqcqkgqecqcq;
            case 407:
                $iueymcwwscwqkiyq = "\120\x72\x6f\x78\171\x20\x41\x75\x74\x68\145\x6e\164\x69\x63\141\164\151\157\156\40\122\x65\x71\165\151\x72\145\x64";
                goto ywwwkqcqkgqecqcq;
            case 408:
                $iueymcwwscwqkiyq = "\x52\x65\161\165\x65\x73\164\40\x54\x69\x6d\145\55\x6f\x75\164";
                goto ywwwkqcqkgqecqcq;
            case 409:
                $iueymcwwscwqkiyq = "\103\x6f\x6e\146\x6c\151\x63\x74";
                goto ywwwkqcqkgqecqcq;
            case 410:
                $iueymcwwscwqkiyq = "\x47\x6f\x6e\145";
                goto ywwwkqcqkgqecqcq;
            case 411:
                $iueymcwwscwqkiyq = "\x4c\x65\156\x67\164\150\x20\x52\x65\x71\x75\x69\x72\x65\144";
                goto ywwwkqcqkgqecqcq;
            case 412:
                $iueymcwwscwqkiyq = "\120\162\x65\143\x6f\x6e\x64\x69\x74\x69\157\156\40\x46\x61\x69\154\145\x64";
                goto ywwwkqcqkgqecqcq;
            case 413:
                $iueymcwwscwqkiyq = "\x52\145\161\x75\x65\163\x74\40\105\x6e\164\151\164\x79\x20\x54\157\x6f\40\x4c\x61\x72\147\145";
                goto ywwwkqcqkgqecqcq;
            case 414:
                $iueymcwwscwqkiyq = "\x52\145\161\x75\145\x73\x74\x2d\x55\x52\x49\x20\124\157\x6f\x20\114\141\162\x67\145";
                goto ywwwkqcqkgqecqcq;
            case 415:
                $iueymcwwscwqkiyq = "\x55\x6e\163\165\x70\160\157\x72\164\x65\x64\40\115\145\x64\151\x61\40\124\x79\x70\145";
                goto ywwwkqcqkgqecqcq;
            case 500:
                $iueymcwwscwqkiyq = "\111\156\x74\145\x72\156\141\154\40\123\x65\162\x76\145\162\40\x45\162\162\157\162";
                goto ywwwkqcqkgqecqcq;
            case 501:
                $iueymcwwscwqkiyq = "\x4e\x6f\x74\40\111\155\160\x6c\145\x6d\145\x6e\x74\x65\144";
                goto ywwwkqcqkgqecqcq;
            case 502:
                $iueymcwwscwqkiyq = "\102\x61\x64\x20\107\141\164\145\x77\x61\x79";
                goto ywwwkqcqkgqecqcq;
            case 503:
                $iueymcwwscwqkiyq = "\123\x65\162\x76\x69\143\145\x20\x55\156\141\166\141\x69\x6c\141\142\154\145";
                goto ywwwkqcqkgqecqcq;
            case 504:
                $iueymcwwscwqkiyq = "\107\x61\x74\145\167\x61\171\x20\x54\x69\155\145\55\157\165\x74";
                goto ywwwkqcqkgqecqcq;
            case 505:
                $iueymcwwscwqkiyq = "\110\124\x54\x50\40\126\x65\x72\163\151\157\x6e\x20\x6e\157\x74\x20\x73\165\160\x70\157\162\x74\x65\x64";
                goto ywwwkqcqkgqecqcq;
            default:
                wp_die("\125\156\153\x6e\x6f\x77\x6e\x20\150\x74\x74\160\x20\163\x74\141\x74\165\x73\x20\x63\157\144\145\x20\x22" . htmlentities($ymacoouqwcqwwagu) . "\x22");
        }
        goto awkssgucausyouio;
        uqwkcimoeweusoci:
        return $iueymcwwscwqkiyq;
        goto meeowaqccyoouiys;
        awkssgucausyouio:
        iwgcaokmwusuqcic:
        goto ssagsmaymgmuaoiu;
        meeowaqccyoouiys:
    }
}

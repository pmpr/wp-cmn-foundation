<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        yagkqyieuqkwkkak:
        $agoaugssmsiumiym = ManipulateFormat::omaawkkwwyesqwcc($agoaugssmsiumiym);
        goto aqoggmcwaocwqmma;
        muoiywyyogmywgug:
        if (!$agoaugssmsiumiym) {
            goto wmwggwqewsaqwewq;
        }
        goto yagkqyieuqkwkkak;
        aigsykmqeyesokek:
        $agoaugssmsiumiym = self::get("\x51\125\x45\x52\131\137\x53\x54\122\111\x4e\x47");
        goto muoiywyyogmywgug;
        gsiccicikauwmmie:
        return $agoaugssmsiumiym;
        goto jceqycsmkusyoowc;
        aqoggmcwaocwqmma:
        wmwggwqewsaqwewq:
        goto gsiccicikauwmmie;
        jceqycsmkusyoowc:
    }
    
    public static function iawueuwikeeeseya()
    {
        goto gcukeaaoomsqkwmg;
        igqcisomycuoeymm:
        ywwgekggsmaeswyq:
        goto ocqggiokqycoqmmu;
        imuggoqgiugiyyms:
        eswgaqweugauecaq:
        goto wkkyyosuiiesusyy;
        eeqooyucsqoakgmw:
        $ueiegogoeyqoiewa = self::giiecckwoyiawoyy();
        goto wmgaeiusimsuaeiu;
        smokemkeeuyeamye:
        if (function_exists("\141\160\x61\x63\x68\145\137\x72\145\161\165\145\163\164\x5f\150\x65\x61\144\145\162\x73")) {
            goto awiquiscemosoioe;
        }
        goto eeqooyucsqoakgmw;
        ocqggiokqycoqmmu:
        goto eswgaqweugauecaq;
        goto scooqcccqwoackku;
        scooqcccqwoackku:
        awiquiscemosoioe:
        goto wmkceagokqacmiwy;
        wkkyyosuiiesusyy:
        return $uykgysuswksgmwqy;
        goto emwyayayykqeaomu;
        wmgaeiusimsuaeiu:
        foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) {
            goto aosgwsogkogssquu;
            aosgwsogkogssquu:
            if (!(0 === strpos($uusmaiomayssaecw, "\x48\x54\124\x50\x5f"))) {
                goto oyiiyksykcgcagus;
            }
            goto goywyqwiewckiomw;
            ekgaaqmmaescmsak:
            $uykgysuswksgmwqy[$kmmmiumuegqmksky] = self::giiecckwoyiawoyy($uusmaiomayssaecw);
            goto aqsqeoiismoaoiky;
            kguoeaummyeuqwco:
            mswesygwomaquqiw:
            goto euogucuegesyqyyk;
            goywyqwiewckiomw:
            $kmmmiumuegqmksky = implode("\x2d", array_map("\x75\143\x66\x69\x72\x73\164", array_slice(explode("\x5f", strtolower($uusmaiomayssaecw)), 1)));
            goto ekgaaqmmaescmsak;
            aqsqeoiismoaoiky:
            oyiiyksykcgcagus:
            goto kguoeaummyeuqwco;
            euogucuegesyqyyk:
        }
        goto igqcisomycuoeymm;
        wmkceagokqacmiwy:
        $uykgysuswksgmwqy = apache_request_headers();
        goto imuggoqgiugiyyms;
        gcukeaaoomsqkwmg:
        $uykgysuswksgmwqy = [];
        goto smokemkeeuyeamye;
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
        ikauicmsakmoqusg:
        $aaceqemaqqeckueq = self::yyqgamuwwakgciey("\x52\x45\121\x55\105\x53\124\137\123\103\x48\x45\x4d\105");
        goto weyoyumiwmwougco;
        kkwsccmgsgogsayc:
        $uogwqioiiwqsyksu = "{$aaceqemaqqeckueq}\x3a\57\57{$gwgucoaaqcwwciqq}";
        goto wkoaouywgckiigoa;
        aimwyouyuaasmcsy:
        wiwqmuwgswwgcgwq:
        goto wuyoocqaysogmcsa;
        kaksiweaiuugqeio:
        iisqqoaayqqqucai:
        goto ewkcysiiwmycaecc;
        weyoyumiwmwougco:
        kkyyicgmsyyyseko:
        goto gsegyaaokkacccas;
        gsegyaaokkacccas:
        $gwgucoaaqcwwciqq = self::yyqgamuwwakgciey("\110\124\x54\x50\x5f\x48\x4f\123\124");
        goto kkwsccmgsgogsayc;
        yisaacgkisqssack:
        if (function_exists("\x67\x65\164\137\x68\157\x6d\145\137\x75\162\154")) {
            goto iisqqoaayqqqucai;
        }
        goto aygqokkmmumaqmei;
        ewkcysiiwmycaecc:
        $uogwqioiiwqsyksu = get_home_url($mksyucucyswaukig, $mkomwsiykqigmqca, $aaceqemaqqeckueq);
        goto aimwyouyuaasmcsy;
        wuyoocqaysogmcsa:
        return $uogwqioiiwqsyksu;
        goto sqqosuucouosesoe;
        wkoaouywgckiigoa:
        goto wiwqmuwgswwgcgwq;
        goto kaksiweaiuugqeio;
        aygqokkmmumaqmei:
        if ($aaceqemaqqeckueq) {
            goto kkyyicgmsyyyseko;
        }
        goto ikauicmsakmoqusg;
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
        return (bool) self::giiecckwoyiawoyy("\121\125\105\122\x59\x5f\123\x54\x52\111\x4e\x47");
    }
    
    public static function ueiiieygmgawesgq()
    {
        goto iquggikocsikyqcu;
        ygkygooqqasikocy:
        wysmgisokmgyaukg:
        goto mcuiacsuwymaaqeo;
        mcuiacsuwymaaqeo:
        return $ymkomcgesksuuysk;
        goto smcmeamiyyaksmkw;
        mosmuqisqgakqaku:
        $qsmicgaymwwckcsa = wp_get_available_translations();
        goto ukmgiiamkccogikc;
        ukmgiiamkccogikc:
        foreach (get_available_languages() as $swaukaagekiououo) {
            goto aswigywgqmqqyaks;
            ukwyoqwawqemgaou:
            $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo;
            goto iiceausgsgcgseiu;
            qyqaskiyiewkcqog:
            if (!isset($qsmicgaymwwckcsa[$swaukaagekiououo], $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\156\x67\x6c\x69\163\150\137\156\x61\x6d\x65"])) {
                goto eioqwkagqyekiogk;
            }
            goto ocawiugcmcgyiuqy;
            aswigywgqmqqyaks:
            $ymqmyyeuycgmigyo = $swaukaagekiououo;
            goto qyqaskiyiewkcqog;
            sukwuguiwokwokoa:
            eioqwkagqyekiogk:
            goto ukwyoqwawqemgaou;
            ocawiugcmcgyiuqy:
            $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\x6e\x67\154\x69\163\150\137\156\x61\155\145"];
            goto sukwuguiwokwokoa;
            iiceausgsgcgseiu:
            qmugicuuomqociko:
            goto yuscoeckmsicamcy;
            yuscoeckmsicamcy:
        }
        goto ygkygooqqasikocy;
        qqcgoykmgigawaue:
        if (!function_exists("\167\x70\137\147\x65\x74\x5f\141\166\x61\x69\x6c\141\x62\x6c\x65\x5f\x74\x72\141\156\x73\154\x61\x74\151\x6f\156\163")) {
            require_once ABSPATH . "\x77\x70\55\141\x64\x6d\x69\156\x2f\x69\156\143\154\x75\144\x65\163\x2f\x74\162\x61\156\163\154\141\164\x69\x6f\x6e\55\x69\x6e\x73\x74\141\154\x6c\56\160\150\x70";
        }
        goto mosmuqisqgakqaku;
        iquggikocsikyqcu:
        $ymkomcgesksuuysk = [];
        goto qqcgoykmgigawaue;
        smcmeamiyyaksmkw:
    }
    
    public static function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    private static function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        goto hwkimcqyaowuueis;
        zsumimyayewseuya:
        return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto uoamqsyoamgckumc;
        cmomsucusgoiuiau:
        qmssoewosmoummak:
        goto zsumimyayewseuya;
        hwkimcqyaowuueis:
        if ($uusmaiomayssaecw) {
            goto qmssoewosmoummak;
        }
        goto ykegacumqsccamqo;
        ykegacumqsccamqo:
        $ggauoeuaesiymgee = $icwicymcioeyeyek;
        goto cmomsucusgoiuiau;
        uoamqsyoamgckumc:
    }
    
    public static function wymyeyweagqomiim() : bool
    {
        return function_exists("\x69\x73\x5f\x73\163\x6c") && is_ssl();
    }
    
    public static function guwgsooqkqgmcoim($eeamcawaiqocomwy = null) : bool
    {
        goto mkkaoqcwmousacyi;
        cgquoawccwawukqa:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto olwwmuamagqqaiuo;
        olwwmuamagqqaiuo:
        gogewooioeycwogq:
        goto mucoasqieymuqsoe;
        mucoasqieymuqsoe:
        return preg_match("\x2f\x5e\x5c\x2f\x72\157\x62\157\x74\x73\x2e\164\x78\164\x2f", $eeamcawaiqocomwy);
        goto coaieqacoucggeec;
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
        mgwyawuksamewowu:
        sogmusaogkcqgcgu:
        goto weyqosokwuacayyc;
        qgkmumiqueeskomg:
        if ($eeamcawaiqocomwy) {
            goto sogmusaogkcqgcgu;
        }
        goto mggmeguysyywsqug;
        mggmeguysyywsqug:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto mgwyawuksamewowu;
        weyqosokwuacayyc:
        return function_exists("\151\163\137\141\x6d\160\x5f\x65\x6e\144\160\x6f\151\156\164") && is_amp_endpoint() || preg_match("\57\x28\x5c\57\x61\x6d\x70\134\x2f\160\141\147\145\134\57\x5b\x30\x2d\71\x5d\52\51\x7c\50\134\x2f\141\155\x70\x5c\57\77\51\57", $eeamcawaiqocomwy) || DecoratorHook::sscegwueamckwmcy("\151\x73\137\x61\155\x70", false);
        goto cmucccioqgqecqak;
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
        emiwggmkkuqmessa:
        if (!$mkomwsiykqigmqca) {
            goto qaomyskykauugkcs;
        }
        goto wsmeaogyekwywgcw;
        ykgywsuquqemgquq:
        $eeamcawaiqocomwy = untrailingslashit(self::auksikwsewaywikq()) . $mkomwsiykqigmqca;
        goto cwkciqmcigowukya;
        cwkciqmcigowukya:
        if (!$kssgyousiceysuaw) {
            goto oeogsickgekucugu;
        }
        goto coogegieeguyucqw;
        wsmeaogyekwywgcw:
        if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f"))) {
            goto mkegyeucuegamuuk;
        }
        goto uogegmqqwcikcmim;
        ieksoqkmeoasiqag:
        $eeamcawaiqocomwy = false;
        goto eomyeqewaooewomq;
        coogegieeguyucqw:
        $eeamcawaiqocomwy = add_query_arg(self::giiecckwoyiawoyy("\121\125\105\x52\x59\137\123\x54\x52\x49\116\x47"), '', $eeamcawaiqocomwy);
        goto uumokaegooocsgwe;
        awqukwmwkemoiskm:
        return $eeamcawaiqocomwy;
        goto ymqckowwcoyqcyec;
        uumokaegooocsgwe:
        oeogsickgekucugu:
        goto xoisuykgsmemuogs;
        scagyucammmkkuyc:
        mkegyeucuegamuuk:
        goto ykgywsuquqemgquq;
        uogegmqqwcikcmim:
        $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy);
        goto scagyucammmkkuyc;
        xoisuykgsmemuogs:
        qaomyskykauugkcs:
        goto awqukwmwkemoiskm;
        eomyeqewaooewomq:
        $mkomwsiykqigmqca = self::giiecckwoyiawoyy("\122\105\x51\x55\105\x53\124\x5f\x55\x52\x49");
        goto emiwggmkkuqmessa;
        ymqckowwcoyqcyec:
    }
    
    public static function gmigwwwmwemyaayy($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) : ?string
    {
        return home_url($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
    }
    
    public static function sgsoakksyayeoggw($ymacoouqwcqwwagu) : string
    {
        goto acuckmaiikqoeqcm;
        uqwkcimoeweusoci:
        return $iueymcwwscwqkiyq;
        goto meeowaqccyoouiys;
        ssagsmaymgmuaoiu:
        ywwwkqcqkgqecqcq:
        goto uqwkcimoeweusoci;
        acuckmaiikqoeqcm:
        switch ($ymacoouqwcqwwagu) {
            case 100:
                $iueymcwwscwqkiyq = "\103\x6f\156\164\x69\156\x75\145";
                goto ywwwkqcqkgqecqcq;
            case 101:
                $iueymcwwscwqkiyq = "\x53\167\151\x74\143\150\151\156\147\40\120\x72\157\x74\x6f\143\x6f\154\x73";
                goto ywwwkqcqkgqecqcq;
            case 200:
                $iueymcwwscwqkiyq = "\117\x4b";
                goto ywwwkqcqkgqecqcq;
            case 201:
                $iueymcwwscwqkiyq = "\x43\162\145\141\164\x65\144";
                goto ywwwkqcqkgqecqcq;
            case 202:
                $iueymcwwscwqkiyq = "\101\143\143\x65\x70\164\x65\x64";
                goto ywwwkqcqkgqecqcq;
            case 203:
                $iueymcwwscwqkiyq = "\x4e\157\156\x2d\x41\165\x74\x68\x6f\x72\x69\164\x61\x74\151\166\x65\x20\111\156\x66\x6f\162\x6d\x61\164\151\157\x6e";
                goto ywwwkqcqkgqecqcq;
            case 204:
                $iueymcwwscwqkiyq = "\116\157\x20\103\x6f\x6e\164\x65\x6e\x74";
                goto ywwwkqcqkgqecqcq;
            case 205:
                $iueymcwwscwqkiyq = "\122\x65\x73\145\164\40\103\x6f\156\x74\x65\156\x74";
                goto ywwwkqcqkgqecqcq;
            case 206:
                $iueymcwwscwqkiyq = "\120\141\x72\164\x69\x61\x6c\40\x43\157\156\x74\145\x6e\x74";
                goto ywwwkqcqkgqecqcq;
            case 300:
                $iueymcwwscwqkiyq = "\115\165\154\x74\151\x70\154\145\x20\103\150\157\151\143\145\x73";
                goto ywwwkqcqkgqecqcq;
            case 301:
                $iueymcwwscwqkiyq = "\115\157\x76\145\x64\40\120\145\x72\x6d\x61\x6e\145\x6e\x74\154\171";
                goto ywwwkqcqkgqecqcq;
            case 302:
                $iueymcwwscwqkiyq = "\115\157\166\145\144\40\124\145\x6d\160\x6f\162\x61\162\151\x6c\171";
                goto ywwwkqcqkgqecqcq;
            case 303:
                $iueymcwwscwqkiyq = "\x53\145\x65\40\117\x74\150\145\x72";
                goto ywwwkqcqkgqecqcq;
            case 304:
                $iueymcwwscwqkiyq = "\x4e\157\x74\40\x4d\157\x64\x69\x66\x69\x65\144";
                goto ywwwkqcqkgqecqcq;
            case 305:
                $iueymcwwscwqkiyq = "\125\x73\x65\x20\120\162\157\170\x79";
                goto ywwwkqcqkgqecqcq;
            case 400:
                $iueymcwwscwqkiyq = "\x42\141\144\x20\122\145\x71\165\145\x73\164";
                goto ywwwkqcqkgqecqcq;
            case 401:
                $iueymcwwscwqkiyq = "\125\156\x61\165\x74\x68\157\x72\x69\172\x65\144";
                goto ywwwkqcqkgqecqcq;
            case 402:
                $iueymcwwscwqkiyq = "\120\x61\x79\x6d\145\156\x74\x20\122\x65\x71\165\x69\162\145\x64";
                goto ywwwkqcqkgqecqcq;
            case 403:
                $iueymcwwscwqkiyq = "\106\157\162\x62\x69\x64\x64\x65\156";
                goto ywwwkqcqkgqecqcq;
            case 404:
                $iueymcwwscwqkiyq = "\116\x6f\164\x20\x46\x6f\165\x6e\x64";
                goto ywwwkqcqkgqecqcq;
            case 405:
                $iueymcwwscwqkiyq = "\x4d\145\164\x68\x6f\144\x20\x4e\157\x74\40\101\154\154\x6f\167\x65\144";
                goto ywwwkqcqkgqecqcq;
            case 406:
                $iueymcwwscwqkiyq = "\x4e\x6f\x74\40\101\143\143\145\x70\x74\141\142\x6c\x65";
                goto ywwwkqcqkgqecqcq;
            case 407:
                $iueymcwwscwqkiyq = "\x50\162\157\x78\x79\40\101\x75\x74\x68\x65\156\x74\151\143\141\164\x69\x6f\156\40\x52\145\x71\x75\151\x72\145\144";
                goto ywwwkqcqkgqecqcq;
            case 408:
                $iueymcwwscwqkiyq = "\122\145\161\165\x65\x73\164\x20\124\x69\155\x65\55\x6f\x75\x74";
                goto ywwwkqcqkgqecqcq;
            case 409:
                $iueymcwwscwqkiyq = "\x43\x6f\156\x66\x6c\151\x63\164";
                goto ywwwkqcqkgqecqcq;
            case 410:
                $iueymcwwscwqkiyq = "\x47\x6f\x6e\x65";
                goto ywwwkqcqkgqecqcq;
            case 411:
                $iueymcwwscwqkiyq = "\114\145\156\x67\x74\x68\40\122\145\161\x75\x69\162\145\144";
                goto ywwwkqcqkgqecqcq;
            case 412:
                $iueymcwwscwqkiyq = "\120\x72\x65\x63\x6f\x6e\x64\151\164\x69\157\x6e\x20\106\x61\x69\x6c\x65\x64";
                goto ywwwkqcqkgqecqcq;
            case 413:
                $iueymcwwscwqkiyq = "\x52\x65\161\x75\145\163\164\x20\x45\156\x74\151\164\171\40\x54\157\157\x20\x4c\x61\x72\147\145";
                goto ywwwkqcqkgqecqcq;
            case 414:
                $iueymcwwscwqkiyq = "\122\145\161\165\x65\x73\164\x2d\125\122\111\40\x54\x6f\x6f\40\x4c\141\162\x67\145";
                goto ywwwkqcqkgqecqcq;
            case 415:
                $iueymcwwscwqkiyq = "\x55\x6e\x73\x75\x70\x70\157\x72\x74\145\144\40\x4d\145\144\x69\x61\40\x54\x79\x70\x65";
                goto ywwwkqcqkgqecqcq;
            case 500:
                $iueymcwwscwqkiyq = "\111\x6e\164\x65\x72\156\x61\154\40\123\x65\162\166\x65\x72\x20\105\x72\162\157\x72";
                goto ywwwkqcqkgqecqcq;
            case 501:
                $iueymcwwscwqkiyq = "\116\157\x74\x20\x49\155\x70\154\x65\x6d\x65\x6e\x74\145\144";
                goto ywwwkqcqkgqecqcq;
            case 502:
                $iueymcwwscwqkiyq = "\102\141\144\x20\x47\141\164\x65\x77\141\171";
                goto ywwwkqcqkgqecqcq;
            case 503:
                $iueymcwwscwqkiyq = "\x53\145\162\166\x69\143\x65\40\125\156\x61\166\141\151\154\141\142\x6c\x65";
                goto ywwwkqcqkgqecqcq;
            case 504:
                $iueymcwwscwqkiyq = "\x47\x61\164\x65\x77\x61\x79\x20\124\x69\155\145\x2d\157\x75\x74";
                goto ywwwkqcqkgqecqcq;
            case 505:
                $iueymcwwscwqkiyq = "\110\x54\x54\x50\40\126\x65\x72\x73\151\157\x6e\x20\156\157\x74\40\163\165\x70\x70\157\x72\164\x65\144";
                goto ywwwkqcqkgqecqcq;
            default:
                wp_die("\125\x6e\153\156\157\167\x6e\40\150\x74\164\160\x20\x73\x74\x61\164\165\x73\x20\143\x6f\x64\145\40\42" . htmlentities($ymacoouqwcqwwagu) . "\42");
        }
        goto awkssgucausyouio;
        awkssgucausyouio:
        iwgcaokmwusuqcic:
        goto ssagsmaymgmuaoiu;
        meeowaqccyoouiys:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto wsiueiimkueqgwmm;
        csmcekewikymocqy:
        $agoaugssmsiumiym = ManipulateFormat::omaawkkwwyesqwcc($agoaugssmsiumiym);
        goto wuqwkggewcusmauu;
        aqueeyiaoekcmqac:
        return $agoaugssmsiumiym;
        goto wosegmwqcksaemkg;
        wuqwkggewcusmauu:
        okowaykucseuwkwa:
        goto aqueeyiaoekcmqac;
        iyuiyscqgeeyuggw:
        if (!$agoaugssmsiumiym) {
            goto okowaykucseuwkwa;
        }
        goto csmcekewikymocqy;
        wsiueiimkueqgwmm:
        $agoaugssmsiumiym = self::get("\x51\x55\x45\122\x59\137\123\x54\122\x49\x4e\107");
        goto iyuiyscqgeeyuggw;
        wosegmwqcksaemkg:
    }
    
    public static function iawueuwikeeeseya()
    {
        goto ekeuymuiemykseqq;
        acyogacouuiocoak:
        ukommkeiukekcgma:
        goto geueeskaygegaoey;
        qmkeeewoecwwqiqe:
        $uykgysuswksgmwqy = apache_request_headers();
        goto acyogacouuiocoak;
        muiyqmkywcmyuscg:
        isymggoseycccwew:
        goto ywowsisqociesyoc;
        ywowsisqociesyoc:
        goto ukommkeiukekcgma;
        goto sswckucqiaiaoqwm;
        cymuyggaggcuccam:
        if (function_exists("\141\160\x61\x63\150\145\x5f\162\x65\161\x75\x65\163\x74\137\x68\145\x61\144\x65\x72\163")) {
            goto oyoemceiucoymamk;
        }
        goto uougqksswaquemag;
        uougqksswaquemag:
        $ueiegogoeyqoiewa = self::giiecckwoyiawoyy();
        goto cmiammcmeegquuus;
        ekeuymuiemykseqq:
        $uykgysuswksgmwqy = [];
        goto cymuyggaggcuccam;
        geueeskaygegaoey:
        return $uykgysuswksgmwqy;
        goto myaiyaaageakqmmo;
        cmiammcmeegquuus:
        foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) {
            goto maocyeeeecsocswc;
            oueaiaquokwususi:
            $uykgysuswksgmwqy[$kmmmiumuegqmksky] = self::giiecckwoyiawoyy($uusmaiomayssaecw);
            goto ggekiiiaukmmqwos;
            scoeukeacygcksek:
            gokiwsqcmkkwkimq:
            goto gisqqagakwuqqwmu;
            maocyeeeecsocswc:
            if (!(0 === strpos($uusmaiomayssaecw, "\x48\x54\x54\120\x5f"))) {
                goto dsqoacgyuawacuwu;
            }
            goto mieskyceqaogywui;
            ggekiiiaukmmqwos:
            dsqoacgyuawacuwu:
            goto scoeukeacygcksek;
            mieskyceqaogywui:
            $kmmmiumuegqmksky = implode("\55", array_map("\x75\143\x66\x69\162\163\x74", array_slice(explode("\x5f", strtolower($uusmaiomayssaecw)), 1)));
            goto oueaiaquokwususi;
            gisqqagakwuqqwmu:
        }
        goto muiyqmkywcmyuscg;
        sswckucqiaiaoqwm:
        oyoemceiucoymamk:
        goto qmkeeewoecwwqiqe;
        myaiyaaageakqmmo:
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
        goto auwaqagiqgaaokay;
        skcqayaekwqwqaog:
        goto oqmisuskgecyaawk;
        goto gquswkgymisikkei;
        magqgeesoiimssqm:
        $aaceqemaqqeckueq = self::yyqgamuwwakgciey("\122\x45\121\125\105\x53\124\x5f\123\x43\110\x45\115\x45");
        goto yegwcckcwuwoiyay;
        yegwcckcwuwoiyay:
        gkqyyayiqmugsyaa:
        goto eaicaiacqyiciycw;
        aoccksmyyggqkcky:
        $uogwqioiiwqsyksu = get_home_url($mksyucucyswaukig, $mkomwsiykqigmqca, $aaceqemaqqeckueq);
        goto eykyqqceouqecaay;
        eaicaiacqyiciycw:
        $gwgucoaaqcwwciqq = self::yyqgamuwwakgciey("\x48\x54\124\x50\x5f\110\117\123\124");
        goto qgecoqswyiuaemaa;
        auwaqagiqgaaokay:
        if (function_exists("\x67\x65\164\137\150\x6f\x6d\145\137\x75\x72\x6c")) {
            goto siomkcccqkcwgaqu;
        }
        goto oqguaiwgeucmkcom;
        ygaquwoyiuyeicse:
        return $uogwqioiiwqsyksu;
        goto oeqeaumoegmcqggu;
        qgecoqswyiuaemaa:
        $uogwqioiiwqsyksu = "{$aaceqemaqqeckueq}\x3a\57\57{$gwgucoaaqcwwciqq}";
        goto skcqayaekwqwqaog;
        eykyqqceouqecaay:
        oqmisuskgecyaawk:
        goto ygaquwoyiuyeicse;
        gquswkgymisikkei:
        siomkcccqkcwgaqu:
        goto aoccksmyyggqkcky;
        oqguaiwgeucmkcom:
        if ($aaceqemaqqeckueq) {
            goto gkqyyayiqmugsyaa;
        }
        goto magqgeesoiimssqm;
        oeqeaumoegmcqggu:
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
        return (bool) self::giiecckwoyiawoyy("\121\125\x45\x52\131\137\123\124\122\111\116\107");
    }
    
    public static function ueiiieygmgawesgq()
    {
        goto eesmuemgcicqwqks;
        risykcskaqqgcggo:
        foreach (get_available_languages() as $swaukaagekiououo) {
            goto eqcgikyyuauqeusk;
            eqcgikyyuauqeusk:
            $ymqmyyeuycgmigyo = $swaukaagekiououo;
            goto icweksgaqeuyayga;
            icweksgaqeuyayga:
            if (!isset($qsmicgaymwwckcsa[$swaukaagekiououo], $qsmicgaymwwckcsa[$swaukaagekiououo]["\x65\156\147\154\x69\163\x68\x5f\x6e\141\155\x65"])) {
                goto qmecmukycucewmuc;
            }
            goto mqksmeugmqqymwyq;
            aosoeekeggowekyq:
            qmecmukycucewmuc:
            goto gumwgoyaeiyuycyu;
            gumwgoyaeiyuycyu:
            $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo;
            goto mokwauoickaioaye;
            mokwauoickaioaye:
            aagsqmuwcceoekiy:
            goto kgeucwqwmecqigmw;
            mqksmeugmqqymwyq:
            $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]["\145\156\x67\x6c\x69\163\150\x5f\156\141\155\145"];
            goto aosoeekeggowekyq;
            kgeucwqwmecqigmw:
        }
        goto ouuqsaagueaqycca;
        umyagoaugskqauwe:
        if (!function_exists("\x77\x70\x5f\147\145\164\137\x61\x76\141\x69\x6c\x61\x62\154\145\137\x74\x72\141\x6e\x73\x6c\x61\x74\x69\157\156\x73")) {
            require_once ABSPATH . "\x77\160\x2d\141\x64\155\x69\156\x2f\x69\156\143\x6c\165\144\x65\163\57\x74\x72\x61\x6e\163\154\141\x74\x69\157\156\55\151\156\163\164\141\x6c\154\56\160\150\160";
        }
        goto imksuqmseeecckcm;
        eesmuemgcicqwqks:
        $ymkomcgesksuuysk = [];
        goto umyagoaugskqauwe;
        kyeimqaqesssikke:
        return $ymkomcgesksuuysk;
        goto ogiwiuueswweceyk;
        ouuqsaagueaqycca:
        ocsucmwqukqsuysa:
        goto kyeimqaqesssikke;
        imksuqmseeecckcm:
        $qsmicgaymwwckcsa = wp_get_available_translations();
        goto risykcskaqqgcggo;
        ogiwiuueswweceyk:
    }
    
    public static function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    private static function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        goto kosawesakkoyqqsc;
        wgyoiyqiuquismae:
        $ggauoeuaesiymgee = $icwicymcioeyeyek;
        goto ocamuiagiuuuweei;
        kosawesakkoyqqsc:
        if ($uusmaiomayssaecw) {
            goto oesqsgmommuakocy;
        }
        goto wgyoiyqiuquismae;
        uaiyoskyqyokucku:
        return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto qqaqeaoeosamukik;
        ocamuiagiuuuweei:
        oesqsgmommuakocy:
        goto uaiyoskyqyokucku;
        qqaqeaoeosamukik:
    }
    
    public static function wymyeyweagqomiim() : bool
    {
        return function_exists("\151\x73\x5f\x73\x73\154") && is_ssl();
    }
    
    public static function guwgsooqkqgmcoim($eeamcawaiqocomwy = null) : bool
    {
        goto gcmawmaiimmygwuw;
        somgeamsciqieaoy:
        return preg_match("\x2f\x5e\x5c\x2f\x72\157\142\x6f\x74\163\56\x74\170\164\57", $eeamcawaiqocomwy);
        goto wmwggwqewsaqwewq;
        qqkwqsscgyeooigo:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto kmgkqcqquaqqciqq;
        kmgkqcqquaqqciqq:
        cwmwawskgukouegg:
        goto somgeamsciqieaoy;
        gcmawmaiimmygwuw:
        if ($eeamcawaiqocomwy) {
            goto cwmwawskgukouegg;
        }
        goto qqkwqsscgyeooigo;
        wmwggwqewsaqwewq:
    }
    
    public static function smowememmgeukwki($eeamcawaiqocomwy = null) : bool
    {
        goto muoiywyyogmywgug;
        aqoggmcwaocwqmma:
        aigsykmqeyesokek:
        goto gsiccicikauwmmie;
        gsiccicikauwmmie:
        return function_exists("\151\x73\x5f\x61\155\x70\137\145\x6e\144\x70\x6f\x69\x6e\164") && is_amp_endpoint() || preg_match("\x2f\50\x5c\57\x61\155\x70\134\x2f\160\141\x67\x65\134\57\133\60\x2d\x39\x5d\x2a\51\x7c\50\134\57\141\x6d\160\134\57\x3f\x29\x2f", $eeamcawaiqocomwy) || DecoratorHook::sscegwueamckwmcy("\x69\x73\137\x61\x6d\160", false);
        goto jceqycsmkusyoowc;
        yagkqyieuqkwkkak:
        $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        goto aqoggmcwaocwqmma;
        muoiywyyogmywgug:
        if ($eeamcawaiqocomwy) {
            goto aigsykmqeyesokek;
        }
        goto yagkqyieuqkwkkak;
        jceqycsmkusyoowc:
    }
    
    public static function aogsoswomcaqoukq($oaukocmsckciqaok, $ggauoeuaesiymgee = null)
    {
        global $wp_query;
        return ManipulateArray::get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee);
    }
    
    public static function ekcymmyqoceukosc($kssgyousiceysuaw = false)
    {
        goto aosgwsogkogssquu;
        goywyqwiewckiomw:
        $mkomwsiykqigmqca = self::giiecckwoyiawoyy("\x52\105\x51\x55\x45\123\x54\137\125\122\111");
        goto ekgaaqmmaescmsak;
        gcukeaaoomsqkwmg:
        $eeamcawaiqocomwy = add_query_arg(self::giiecckwoyiawoyy("\x51\125\105\x52\x59\x5f\x53\x54\122\111\116\107"), '', $eeamcawaiqocomwy);
        goto smokemkeeuyeamye;
        kguoeaummyeuqwco:
        $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy);
        goto euogucuegesyqyyk;
        wmgaeiusimsuaeiu:
        return $eeamcawaiqocomwy;
        goto igqcisomycuoeymm;
        aosgwsogkogssquu:
        $eeamcawaiqocomwy = false;
        goto goywyqwiewckiomw;
        awiquiscemosoioe:
        $eeamcawaiqocomwy = untrailingslashit(self::auksikwsewaywikq()) . $mkomwsiykqigmqca;
        goto eswgaqweugauecaq;
        smokemkeeuyeamye:
        mswesygwomaquqiw:
        goto eeqooyucsqoakgmw;
        ekgaaqmmaescmsak:
        if (!$mkomwsiykqigmqca) {
            goto oyiiyksykcgcagus;
        }
        goto aqsqeoiismoaoiky;
        eeqooyucsqoakgmw:
        oyiiyksykcgcagus:
        goto wmgaeiusimsuaeiu;
        eswgaqweugauecaq:
        if (!$kssgyousiceysuaw) {
            goto mswesygwomaquqiw;
        }
        goto gcukeaaoomsqkwmg;
        aqsqeoiismoaoiky:
        if (!($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "\x3f"))) {
            goto ywwgekggsmaeswyq;
        }
        goto kguoeaummyeuqwco;
        euogucuegesyqyyk:
        ywwgekggsmaeswyq:
        goto awiquiscemosoioe;
        igqcisomycuoeymm:
    }
    
    public static function gmigwwwmwemyaayy($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) : ?string
    {
        return home_url($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
    }
    
    public static function sgsoakksyayeoggw($ymacoouqwcqwwagu) : string
    {
        goto wmkceagokqacmiwy;
        wkkyyosuiiesusyy:
        ocqggiokqycoqmmu:
        goto emwyayayykqeaomu;
        emwyayayykqeaomu:
        return $iueymcwwscwqkiyq;
        goto kkyyicgmsyyyseko;
        imuggoqgiugiyyms:
        scooqcccqwoackku:
        goto wkkyyosuiiesusyy;
        wmkceagokqacmiwy:
        switch ($ymacoouqwcqwwagu) {
            case 100:
                $iueymcwwscwqkiyq = "\x43\x6f\156\x74\151\x6e\165\145";
                goto ocqggiokqycoqmmu;
            case 101:
                $iueymcwwscwqkiyq = "\123\167\151\164\143\150\151\156\147\40\120\x72\x6f\164\157\143\157\154\163";
                goto ocqggiokqycoqmmu;
            case 200:
                $iueymcwwscwqkiyq = "\x4f\113";
                goto ocqggiokqycoqmmu;
            case 201:
                $iueymcwwscwqkiyq = "\103\x72\145\141\x74\145\144";
                goto ocqggiokqycoqmmu;
            case 202:
                $iueymcwwscwqkiyq = "\101\143\143\x65\x70\164\x65\144";
                goto ocqggiokqycoqmmu;
            case 203:
                $iueymcwwscwqkiyq = "\x4e\x6f\x6e\55\x41\165\x74\x68\x6f\162\x69\164\141\x74\x69\166\x65\x20\111\x6e\x66\157\162\x6d\141\164\151\157\156";
                goto ocqggiokqycoqmmu;
            case 204:
                $iueymcwwscwqkiyq = "\x4e\157\x20\x43\x6f\156\x74\x65\156\x74";
                goto ocqggiokqycoqmmu;
            case 205:
                $iueymcwwscwqkiyq = "\x52\x65\x73\x65\x74\40\x43\x6f\156\164\x65\156\x74";
                goto ocqggiokqycoqmmu;
            case 206:
                $iueymcwwscwqkiyq = "\120\x61\x72\x74\x69\141\x6c\x20\x43\x6f\x6e\164\145\156\164";
                goto ocqggiokqycoqmmu;
            case 300:
                $iueymcwwscwqkiyq = "\x4d\165\154\x74\x69\x70\x6c\x65\x20\103\x68\157\x69\143\145\163";
                goto ocqggiokqycoqmmu;
            case 301:
                $iueymcwwscwqkiyq = "\x4d\x6f\166\x65\144\x20\x50\145\x72\x6d\141\156\145\x6e\164\x6c\171";
                goto ocqggiokqycoqmmu;
            case 302:
                $iueymcwwscwqkiyq = "\x4d\x6f\166\145\144\40\124\145\x6d\160\x6f\162\141\x72\x69\x6c\171";
                goto ocqggiokqycoqmmu;
            case 303:
                $iueymcwwscwqkiyq = "\x53\145\x65\x20\x4f\164\150\x65\162";
                goto ocqggiokqycoqmmu;
            case 304:
                $iueymcwwscwqkiyq = "\x4e\157\x74\40\115\157\x64\151\146\x69\145\x64";
                goto ocqggiokqycoqmmu;
            case 305:
                $iueymcwwscwqkiyq = "\x55\x73\x65\40\x50\x72\157\x78\x79";
                goto ocqggiokqycoqmmu;
            case 400:
                $iueymcwwscwqkiyq = "\102\141\144\x20\x52\145\161\x75\x65\x73\164";
                goto ocqggiokqycoqmmu;
            case 401:
                $iueymcwwscwqkiyq = "\125\x6e\141\165\164\x68\x6f\x72\x69\172\145\144";
                goto ocqggiokqycoqmmu;
            case 402:
                $iueymcwwscwqkiyq = "\x50\x61\171\155\x65\156\164\x20\x52\145\161\165\x69\x72\145\x64";
                goto ocqggiokqycoqmmu;
            case 403:
                $iueymcwwscwqkiyq = "\106\157\162\142\151\144\144\x65\x6e";
                goto ocqggiokqycoqmmu;
            case 404:
                $iueymcwwscwqkiyq = "\116\x6f\164\x20\106\x6f\x75\156\144";
                goto ocqggiokqycoqmmu;
            case 405:
                $iueymcwwscwqkiyq = "\115\x65\x74\x68\157\x64\x20\x4e\x6f\164\x20\101\x6c\x6c\x6f\x77\x65\144";
                goto ocqggiokqycoqmmu;
            case 406:
                $iueymcwwscwqkiyq = "\116\157\x74\x20\101\x63\x63\x65\160\164\x61\x62\x6c\x65";
                goto ocqggiokqycoqmmu;
            case 407:
                $iueymcwwscwqkiyq = "\x50\162\x6f\x78\171\40\x41\165\164\x68\145\156\164\x69\143\141\x74\151\157\156\40\122\145\161\x75\x69\x72\x65\144";
                goto ocqggiokqycoqmmu;
            case 408:
                $iueymcwwscwqkiyq = "\122\145\x71\x75\x65\163\x74\40\124\x69\x6d\145\55\x6f\x75\x74";
                goto ocqggiokqycoqmmu;
            case 409:
                $iueymcwwscwqkiyq = "\x43\157\x6e\x66\x6c\x69\x63\164";
                goto ocqggiokqycoqmmu;
            case 410:
                $iueymcwwscwqkiyq = "\x47\x6f\x6e\x65";
                goto ocqggiokqycoqmmu;
            case 411:
                $iueymcwwscwqkiyq = "\114\145\156\147\164\150\40\122\145\x71\x75\x69\x72\145\x64";
                goto ocqggiokqycoqmmu;
            case 412:
                $iueymcwwscwqkiyq = "\x50\162\x65\x63\x6f\x6e\x64\151\x74\x69\x6f\156\x20\106\141\151\154\145\144";
                goto ocqggiokqycoqmmu;
            case 413:
                $iueymcwwscwqkiyq = "\x52\145\161\x75\x65\x73\164\40\x45\156\164\151\164\171\x20\x54\x6f\157\x20\114\x61\x72\147\x65";
                goto ocqggiokqycoqmmu;
            case 414:
                $iueymcwwscwqkiyq = "\x52\x65\x71\165\145\163\164\55\x55\122\111\40\124\x6f\x6f\40\114\141\162\x67\145";
                goto ocqggiokqycoqmmu;
            case 415:
                $iueymcwwscwqkiyq = "\x55\x6e\163\165\160\x70\x6f\162\x74\x65\144\x20\115\x65\144\151\x61\40\124\x79\160\x65";
                goto ocqggiokqycoqmmu;
            case 500:
                $iueymcwwscwqkiyq = "\111\156\164\x65\162\x6e\x61\154\40\x53\x65\162\x76\x65\x72\40\105\162\x72\157\162";
                goto ocqggiokqycoqmmu;
            case 501:
                $iueymcwwscwqkiyq = "\116\x6f\164\x20\111\x6d\x70\x6c\145\155\x65\156\164\145\x64";
                goto ocqggiokqycoqmmu;
            case 502:
                $iueymcwwscwqkiyq = "\102\141\x64\40\107\141\x74\145\167\x61\x79";
                goto ocqggiokqycoqmmu;
            case 503:
                $iueymcwwscwqkiyq = "\x53\145\x72\166\x69\x63\x65\x20\125\156\141\166\x61\151\154\x61\142\x6c\x65";
                goto ocqggiokqycoqmmu;
            case 504:
                $iueymcwwscwqkiyq = "\x47\141\164\x65\x77\x61\x79\40\x54\x69\x6d\145\55\x6f\165\164";
                goto ocqggiokqycoqmmu;
            case 505:
                $iueymcwwscwqkiyq = "\110\x54\124\120\40\x56\x65\162\x73\151\x6f\156\x20\156\157\x74\40\x73\x75\x70\160\x6f\x72\x74\x65\x64";
                goto ocqggiokqycoqmmu;
            default:
                wp_die("\x55\156\153\x6e\157\x77\x6e\x20\150\x74\164\x70\x20\x73\164\141\164\165\163\x20\x63\x6f\x64\x65\40\42" . htmlentities($ymacoouqwcqwwagu) . "\42");
        }
        goto imuggoqgiugiyyms;
        kkyyicgmsyyyseko:
    }
}

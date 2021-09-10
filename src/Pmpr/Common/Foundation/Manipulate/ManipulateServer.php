<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        $agoaugssmsiumiym = self::get('QUERY_STRING');
        if ($agoaugssmsiumiym) {
            $agoaugssmsiumiym = ManipulateFormat::omaawkkwwyesqwcc($agoaugssmsiumiym);
        }
        return $agoaugssmsiumiym;
    }
    
    public static function iawueuwikeeeseya()
    {
        $uykgysuswksgmwqy = [];
        if (function_exists('apache_request_headers')) {
            $uykgysuswksgmwqy = apache_request_headers();
        } else {
            $ueiegogoeyqoiewa = self::giiecckwoyiawoyy();
            foreach (array_keys($ueiegogoeyqoiewa) as $uusmaiomayssaecw) {
                if (0 === strpos($uusmaiomayssaecw, 'HTTP_')) {
                    $kmmmiumuegqmksky = implode('-', array_map('ucfirst', array_slice(explode('_', strtolower($uusmaiomayssaecw)), 1)));
                    $uykgysuswksgmwqy[$kmmmiumuegqmksky] = self::giiecckwoyiawoyy($uusmaiomayssaecw);
                }
                egkeqqgakieyimuq:
            }
            oqwwacmigasucsoc:
        }
        return $uykgysuswksgmwqy;
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
        if (function_exists('get_home_url')) {
            $uogwqioiiwqsyksu = get_home_url($mksyucucyswaukig, $mkomwsiykqigmqca, $aaceqemaqqeckueq);
        } else {
            if (!$aaceqemaqqeckueq) {
                $aaceqemaqqeckueq = self::yyqgamuwwakgciey('REQUEST_SCHEME');
            }
            $gwgucoaaqcwwciqq = self::yyqgamuwwakgciey('HTTP_HOST');
            $uogwqioiiwqsyksu = "{$aaceqemaqqeckueq}://{$gwgucoaaqcwwciqq}";
        }
        return $uogwqioiiwqsyksu;
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
        return (bool) self::giiecckwoyiawoyy('QUERY_STRING');
    }
    
    public static function ueiiieygmgawesgq()
    {
        $ymkomcgesksuuysk = [];
        if (!function_exists('wp_get_available_translations')) {
            require_once ABSPATH . 'wp-admin/includes/translation-install.php';
        }
        $qsmicgaymwwckcsa = wp_get_available_translations();
        foreach (get_available_languages() as $swaukaagekiououo) {
            $ymqmyyeuycgmigyo = $swaukaagekiououo;
            if (isset($qsmicgaymwwckcsa[$swaukaagekiououo], $qsmicgaymwwckcsa[$swaukaagekiououo]['english_name'])) {
                $ymqmyyeuycgmigyo = $qsmicgaymwwckcsa[$swaukaagekiououo]['english_name'];
            }
            $ymkomcgesksuuysk[$swaukaagekiououo] = $ymqmyyeuycgmigyo;
            wswikooyuaaouqgk:
        }
        cakuguiciaiaeukg:
        return $ymkomcgesksuuysk;
    }
    
    public static function yyqgamuwwakgciey($uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        return self::seyyiqmgwymyumoq($_REQUEST, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    private static function seyyiqmgwymyumoq($icwicymcioeyeyek, $uusmaiomayssaecw = null, $ggauoeuaesiymgee = null)
    {
        if (!$uusmaiomayssaecw) {
            $ggauoeuaesiymgee = $icwicymcioeyeyek;
        }
        return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
    
    public static function wymyeyweagqomiim() : bool
    {
        return function_exists('is_ssl') && is_ssl();
    }
    
    public static function guwgsooqkqgmcoim($eeamcawaiqocomwy = null) : bool
    {
        if (!$eeamcawaiqocomwy) {
            $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        }
        return preg_match("/^\\/robots.txt/", $eeamcawaiqocomwy);
    }
    
    public static function smowememmgeukwki($eeamcawaiqocomwy = null) : bool
    {
        if (!$eeamcawaiqocomwy) {
            $eeamcawaiqocomwy = self::ekcymmyqoceukosc();
        }
        return function_exists('is_amp_endpoint') && is_amp_endpoint() || preg_match("/(\\/amp\\/page\\/[0-9]*)|(\\/amp\\/?)/", $eeamcawaiqocomwy) || DecoratorHook::sscegwueamckwmcy('is_amp', false);
    }
    
    public static function aogsoswomcaqoukq($oaukocmsckciqaok, $ggauoeuaesiymgee = null)
    {
        global $wp_query;
        return ManipulateArray::get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee);
    }
    
    public static function ekcymmyqoceukosc($kssgyousiceysuaw = false)
    {
        $eeamcawaiqocomwy = false;
        $mkomwsiykqigmqca = self::giiecckwoyiawoyy('REQUEST_URI');
        if ($mkomwsiykqigmqca) {
            if ($yuyowiyumyysomoy = strrpos($mkomwsiykqigmqca, "?")) {
                $mkomwsiykqigmqca = substr($mkomwsiykqigmqca, 0, $yuyowiyumyysomoy);
            }
            $eeamcawaiqocomwy = untrailingslashit(self::auksikwsewaywikq()) . $mkomwsiykqigmqca;
            if ($kssgyousiceysuaw) {
                $eeamcawaiqocomwy = add_query_arg(self::giiecckwoyiawoyy('QUERY_STRING'), '', $eeamcawaiqocomwy);
            }
        }
        return $eeamcawaiqocomwy;
    }
    
    public static function gmigwwwmwemyaayy($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) : ?string
    {
        return home_url($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
    }
    
    public static function sgsoakksyayeoggw($ymacoouqwcqwwagu) : string
    {
        switch ($ymacoouqwcqwwagu) {
            case 100:
                $iueymcwwscwqkiyq = 'Continue';
                goto awwaiioyywmokwsm;
            case 101:
                $iueymcwwscwqkiyq = 'Switching Protocols';
                goto awwaiioyywmokwsm;
            case 200:
                $iueymcwwscwqkiyq = 'OK';
                goto awwaiioyywmokwsm;
            case 201:
                $iueymcwwscwqkiyq = 'Created';
                goto awwaiioyywmokwsm;
            case 202:
                $iueymcwwscwqkiyq = 'Accepted';
                goto awwaiioyywmokwsm;
            case 203:
                $iueymcwwscwqkiyq = 'Non-Authoritative Information';
                goto awwaiioyywmokwsm;
            case 204:
                $iueymcwwscwqkiyq = 'No Content';
                goto awwaiioyywmokwsm;
            case 205:
                $iueymcwwscwqkiyq = 'Reset Content';
                goto awwaiioyywmokwsm;
            case 206:
                $iueymcwwscwqkiyq = 'Partial Content';
                goto awwaiioyywmokwsm;
            case 300:
                $iueymcwwscwqkiyq = 'Multiple Choices';
                goto awwaiioyywmokwsm;
            case 301:
                $iueymcwwscwqkiyq = 'Moved Permanently';
                goto awwaiioyywmokwsm;
            case 302:
                $iueymcwwscwqkiyq = 'Moved Temporarily';
                goto awwaiioyywmokwsm;
            case 303:
                $iueymcwwscwqkiyq = 'See Other';
                goto awwaiioyywmokwsm;
            case 304:
                $iueymcwwscwqkiyq = 'Not Modified';
                goto awwaiioyywmokwsm;
            case 305:
                $iueymcwwscwqkiyq = 'Use Proxy';
                goto awwaiioyywmokwsm;
            case 400:
                $iueymcwwscwqkiyq = 'Bad Request';
                goto awwaiioyywmokwsm;
            case 401:
                $iueymcwwscwqkiyq = 'Unauthorized';
                goto awwaiioyywmokwsm;
            case 402:
                $iueymcwwscwqkiyq = 'Payment Required';
                goto awwaiioyywmokwsm;
            case 403:
                $iueymcwwscwqkiyq = 'Forbidden';
                goto awwaiioyywmokwsm;
            case 404:
                $iueymcwwscwqkiyq = 'Not Found';
                goto awwaiioyywmokwsm;
            case 405:
                $iueymcwwscwqkiyq = 'Method Not Allowed';
                goto awwaiioyywmokwsm;
            case 406:
                $iueymcwwscwqkiyq = 'Not Acceptable';
                goto awwaiioyywmokwsm;
            case 407:
                $iueymcwwscwqkiyq = 'Proxy Authentication Required';
                goto awwaiioyywmokwsm;
            case 408:
                $iueymcwwscwqkiyq = 'Request Time-out';
                goto awwaiioyywmokwsm;
            case 409:
                $iueymcwwscwqkiyq = 'Conflict';
                goto awwaiioyywmokwsm;
            case 410:
                $iueymcwwscwqkiyq = 'Gone';
                goto awwaiioyywmokwsm;
            case 411:
                $iueymcwwscwqkiyq = 'Length Required';
                goto awwaiioyywmokwsm;
            case 412:
                $iueymcwwscwqkiyq = 'Precondition Failed';
                goto awwaiioyywmokwsm;
            case 413:
                $iueymcwwscwqkiyq = 'Request Entity Too Large';
                goto awwaiioyywmokwsm;
            case 414:
                $iueymcwwscwqkiyq = 'Request-URI Too Large';
                goto awwaiioyywmokwsm;
            case 415:
                $iueymcwwscwqkiyq = 'Unsupported Media Type';
                goto awwaiioyywmokwsm;
            case 500:
                $iueymcwwscwqkiyq = 'Internal Server Error';
                goto awwaiioyywmokwsm;
            case 501:
                $iueymcwwscwqkiyq = 'Not Implemented';
                goto awwaiioyywmokwsm;
            case 502:
                $iueymcwwscwqkiyq = 'Bad Gateway';
                goto awwaiioyywmokwsm;
            case 503:
                $iueymcwwscwqkiyq = 'Service Unavailable';
                goto awwaiioyywmokwsm;
            case 504:
                $iueymcwwscwqkiyq = 'Gateway Time-out';
                goto awwaiioyywmokwsm;
            case 505:
                $iueymcwwscwqkiyq = 'HTTP Version not supported';
                goto awwaiioyywmokwsm;
            default:
                wp_die('Unknown http status code "' . htmlentities($ymacoouqwcqwwagu) . '"');
        }
        ckwmkquuyyugigom:
        awwaiioyywmokwsm:
        return $iueymcwwscwqkiyq;
    }
}

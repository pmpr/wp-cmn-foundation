<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\DOMCrawler;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class ManipulateValidation extends Manipulate
{
    
    public static function wmcwegoisyeeosqu($sociqikgoyemqaac) : bool
    {
        return filter_var($sociqikgoyemqaac, FILTER_VALIDATE_URL);
    }
    
    public static function uuksaskqamgouosy($sociqikgoyemqaac, $kqywgoqsmuswammk = null) : bool
    {
        goto esoqgwkccuqwwiec;
        esoqgwkccuqwwiec:
        $uuksaskqamgouosy = $sociqikgoyemqaac != strip_tags($sociqikgoyemqaac);
        goto iwqyaqqqwsooywwu;
        ssoaykwaaysysgqi:
        yiqyicewukgskccu:
        goto ismoyieeoqseaqss;
        ismoyieeoqseaqss:
        return $uuksaskqamgouosy;
        goto awiugaawigcesouw;
        iwqyaqqqwsooywwu:
        if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) {
            goto yiqyicewukgskccu;
        }
        goto ieckiiqswwmkuiey;
        ieckiiqswwmkuiey:
        $uuksaskqamgouosy = DOMCrawler::umuecysoywoumgwo($sociqikgoyemqaac, $kqywgoqsmuswammk);
        goto ssoaykwaaysysgqi;
        awiugaawigcesouw:
    }
    
    public static function qeegmakycwwycmcm($sociqikgoyemqaac) : bool
    {
        return strlen($sociqikgoyemqaac) == strlen(utf8_decode($sociqikgoyemqaac));
    }
    
    public static function qkgmsqgmwoamekyk($owaiikyuwwwmswgc) : bool
    {
        return is_email($owaiikyuwwwmswgc);
    }
    
    public static function uqomuowmcuauuikc($auoeyussiyykosqg) : bool
    {
        return is_string($auoeyussiyykosqg) && preg_match("\57\136\50\x5c\53\x39\x38\77\51\77\173\x3f\50\60\x3f\71\133\x30\55\71\135\173\x39\175\175\77\x29\44\57", $auoeyussiyykosqg, $meyiiwcswqmuggyg);
    }
    
    public static function pwcgsiswecasgkgs($mksyucucyswaukig, $qgciuiagkkguykgs)
    {
        goto quyqqkooygwwuegu;
        quygesuesyiwukey:
        if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) {
            goto cqumuukyscyqawgo;
        }
        goto acysusgkysymesmy;
        youwcokqismwsygq:
        if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) {
            goto oemyakuouygmigom;
        }
        goto kgciwmioyuqquyms;
        mokkyeicegusckgs:
        sagakqowucycssou:
        goto icsoyscwuykooeqg;
        eoocuukcuukigmao:
        goto sagakqowucycssou;
        goto awouugqekqkgykwk;
        kgciwmioyuqquyms:
        $ksaameoqigiaoigg = $ukuacigyikaisiwu;
        goto ikwwisqmeswymoey;
        ukqiuqciiqeswqsa:
        $ksaameoqigiaoigg = $qgciuiagkkguykgs;
        goto mokkyeicegusckgs;
        quyqqkooygwwuegu:
        $ksaameoqigiaoigg = false;
        goto quygesuesyiwukey;
        acysusgkysymesmy:
        $ukuacigyikaisiwu = ManipulateString::scramble($qgciuiagkkguykgs);
        goto youwcokqismwsygq;
        ikwwisqmeswymoey:
        oemyakuouygmigom:
        goto eoocuukcuukigmao;
        icsoyscwuykooeqg:
        return $ksaameoqigiaoigg;
        goto eiaakmiuaoooskeu;
        awouugqekqkgykwk:
        cqumuukyscyqawgo:
        goto ukqiuqciiqeswqsa;
        eiaakmiuaoooskeu:
    }
}

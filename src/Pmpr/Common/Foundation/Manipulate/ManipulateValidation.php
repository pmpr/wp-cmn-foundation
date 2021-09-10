<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        $uuksaskqamgouosy = $sociqikgoyemqaac != strip_tags($sociqikgoyemqaac);
        if ($uuksaskqamgouosy && $kqywgoqsmuswammk) {
            $uuksaskqamgouosy = DOMCrawler::umuecysoywoumgwo($sociqikgoyemqaac, $kqywgoqsmuswammk);
        }
        return $uuksaskqamgouosy;
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
        return is_string($auoeyussiyykosqg) && preg_match('/^(\\+98?)?{?(0?9[0-9]{9}}?)$/', $auoeyussiyykosqg, $meyiiwcswqmuggyg);
    }
    
    public static function pwcgsiswecasgkgs($mksyucucyswaukig, $qgciuiagkkguykgs)
    {
        $ksaameoqigiaoigg = false;
        if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) {
            $ksaameoqigiaoigg = $qgciuiagkkguykgs;
        } else {
            $ukuacigyikaisiwu = ManipulateString::scramble($qgciuiagkkguykgs);
            if (method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) {
                $ksaameoqigiaoigg = $ukuacigyikaisiwu;
            }
        }
        return $ksaameoqigiaoigg;
    }
}

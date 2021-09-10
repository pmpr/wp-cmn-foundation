<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto igiygcsmsmsaaqkq;
        mgeemmasukoaoska:
        return $uuksaskqamgouosy;
        goto koskggyaeiiwqisa;
        ygewgysgwcacuimc:
        gwiyiyawcwasesgc:
        goto mgeemmasukoaoska;
        ecgwamoiwysakygg:
        $uuksaskqamgouosy = DOMCrawler::umuecysoywoumgwo($sociqikgoyemqaac, $kqywgoqsmuswammk);
        goto ygewgysgwcacuimc;
        igiygcsmsmsaaqkq:
        $uuksaskqamgouosy = $sociqikgoyemqaac != strip_tags($sociqikgoyemqaac);
        goto kgocgogqyicccqek;
        kgocgogqyicccqek:
        if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) {
            goto gwiyiyawcwasesgc;
        }
        goto ecgwamoiwysakygg;
        koskggyaeiiwqisa:
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
        return is_string($auoeyussiyykosqg) && preg_match("\57\136\50\x5c\x2b\x39\70\77\x29\x3f\x7b\x3f\x28\60\77\x39\133\60\55\x39\135\x7b\71\175\x7d\77\x29\44\x2f", $auoeyussiyykosqg, $meyiiwcswqmuggyg);
    }
    
    public static function pwcgsiswecasgkgs($mksyucucyswaukig, $qgciuiagkkguykgs)
    {
        goto eamksmamqqemuuwm;
        fawmeqyyqawqmqsy:
        return $ksaameoqigiaoigg;
        goto iyyekyusuukgcgmg;
        ywuqayooawsuwyos:
        $ukuacigyikaisiwu = ManipulateString::scramble($qgciuiagkkguykgs);
        goto waiqucggoasiqici;
        eamksmamqqemuuwm:
        $ksaameoqigiaoigg = false;
        goto cioueaakwyaagseq;
        agyowuuawgseioyo:
        ucycmawyuaaewmuq:
        goto fawmeqyyqawqmqsy;
        kywacsgsquqwkmee:
        $ksaameoqigiaoigg = $ukuacigyikaisiwu;
        goto ycwegycyuuciuuuc;
        waiqucggoasiqici:
        if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) {
            goto ywskmwikageumkig;
        }
        goto kywacsgsquqwkmee;
        icyywimceiaqcaki:
        cosusaqikwmmwwyy:
        goto kmqiucuioimqwmcs;
        cioueaakwyaagseq:
        if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) {
            goto cosusaqikwmmwwyy;
        }
        goto ywuqayooawsuwyos;
        uqwuggsqqsykmecm:
        goto ucycmawyuaaewmuq;
        goto icyywimceiaqcaki;
        kmqiucuioimqwmcs:
        $ksaameoqigiaoigg = $qgciuiagkkguykgs;
        goto agyowuuawgseioyo;
        ycwegycyuuciuuuc:
        ywskmwikageumkig:
        goto uqwuggsqqsykmecm;
        iyyekyusuukgcgmg:
    }
}

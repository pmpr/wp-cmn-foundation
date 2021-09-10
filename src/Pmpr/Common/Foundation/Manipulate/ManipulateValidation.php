<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        ecgwamoiwysakygg:
        $uuksaskqamgouosy = DOMCrawler::umuecysoywoumgwo($sociqikgoyemqaac, $kqywgoqsmuswammk);
        goto ygewgysgwcacuimc;
        ygewgysgwcacuimc:
        gwiyiyawcwasesgc:
        goto mgeemmasukoaoska;
        igiygcsmsmsaaqkq:
        $uuksaskqamgouosy = $sociqikgoyemqaac != strip_tags($sociqikgoyemqaac);
        goto kgocgogqyicccqek;
        mgeemmasukoaoska:
        return $uuksaskqamgouosy;
        goto koskggyaeiiwqisa;
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
        return is_string($auoeyussiyykosqg) && preg_match("\x2f\136\x28\134\x2b\71\x38\77\51\x3f\x7b\77\50\x30\77\x39\133\x30\55\x39\135\173\71\x7d\x7d\77\x29\44\x2f", $auoeyussiyykosqg, $meyiiwcswqmuggyg);
    }
    
    public static function pwcgsiswecasgkgs($mksyucucyswaukig, $qgciuiagkkguykgs)
    {
        goto eamksmamqqemuuwm;
        ycwegycyuuciuuuc:
        ywskmwikageumkig:
        goto uqwuggsqqsykmecm;
        fawmeqyyqawqmqsy:
        return $ksaameoqigiaoigg;
        goto iyyekyusuukgcgmg;
        kywacsgsquqwkmee:
        $ksaameoqigiaoigg = $ukuacigyikaisiwu;
        goto ycwegycyuuciuuuc;
        agyowuuawgseioyo:
        ucycmawyuaaewmuq:
        goto fawmeqyyqawqmqsy;
        waiqucggoasiqici:
        if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) {
            goto ywskmwikageumkig;
        }
        goto kywacsgsquqwkmee;
        uqwuggsqqsykmecm:
        goto ucycmawyuaaewmuq;
        goto icyywimceiaqcaki;
        eamksmamqqemuuwm:
        $ksaameoqigiaoigg = false;
        goto cioueaakwyaagseq;
        icyywimceiaqcaki:
        cosusaqikwmmwwyy:
        goto kmqiucuioimqwmcs;
        kmqiucuioimqwmcs:
        $ksaameoqigiaoigg = $qgciuiagkkguykgs;
        goto agyowuuawgseioyo;
        cioueaakwyaagseq:
        if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) {
            goto cosusaqikwmmwwyy;
        }
        goto ywuqayooawsuwyos;
        ywuqayooawsuwyos:
        $ukuacigyikaisiwu = ManipulateString::scramble($qgciuiagkkguykgs);
        goto waiqucggoasiqici;
        iyyekyusuukgcgmg:
    }
}

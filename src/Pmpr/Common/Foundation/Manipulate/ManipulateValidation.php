<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto kgocgogqyicccqek;
        kgocgogqyicccqek:
        $uuksaskqamgouosy = $sociqikgoyemqaac != strip_tags($sociqikgoyemqaac);
        goto ecgwamoiwysakygg;
        ecgwamoiwysakygg:
        if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) {
            goto igiygcsmsmsaaqkq;
        }
        goto ygewgysgwcacuimc;
        koskggyaeiiwqisa:
        return $uuksaskqamgouosy;
        goto ywskmwikageumkig;
        ygewgysgwcacuimc:
        $uuksaskqamgouosy = DOMCrawler::umuecysoywoumgwo($sociqikgoyemqaac, $kqywgoqsmuswammk);
        goto mgeemmasukoaoska;
        mgeemmasukoaoska:
        igiygcsmsmsaaqkq:
        goto koskggyaeiiwqisa;
        ywskmwikageumkig:
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
        return is_string($auoeyussiyykosqg) && preg_match("\57\x5e\x28\134\x2b\x39\x38\77\51\x3f\x7b\x3f\50\x30\77\x39\x5b\60\x2d\x39\x5d\173\x39\x7d\x7d\x3f\51\44\57", $auoeyussiyykosqg, $meyiiwcswqmuggyg);
    }
    
    public static function pwcgsiswecasgkgs($mksyucucyswaukig, $qgciuiagkkguykgs)
    {
        goto cioueaakwyaagseq;
        kmqiucuioimqwmcs:
        ucycmawyuaaewmuq:
        goto agyowuuawgseioyo;
        ywuqayooawsuwyos:
        if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) {
            goto ucycmawyuaaewmuq;
        }
        goto waiqucggoasiqici;
        agyowuuawgseioyo:
        $ksaameoqigiaoigg = $qgciuiagkkguykgs;
        goto fawmeqyyqawqmqsy;
        fawmeqyyqawqmqsy:
        eamksmamqqemuuwm:
        goto iyyekyusuukgcgmg;
        cioueaakwyaagseq:
        $ksaameoqigiaoigg = false;
        goto ywuqayooawsuwyos;
        uqwuggsqqsykmecm:
        cosusaqikwmmwwyy:
        goto icyywimceiaqcaki;
        waiqucggoasiqici:
        $ukuacigyikaisiwu = ManipulateString::scramble($qgciuiagkkguykgs);
        goto kywacsgsquqwkmee;
        ycwegycyuuciuuuc:
        $ksaameoqigiaoigg = $ukuacigyikaisiwu;
        goto uqwuggsqqsykmecm;
        kywacsgsquqwkmee:
        if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) {
            goto cosusaqikwmmwwyy;
        }
        goto ycwegycyuuciuuuc;
        iyyekyusuukgcgmg:
        return $ksaameoqigiaoigg;
        goto yeeaasukmegoociq;
        icyywimceiaqcaki:
        goto eamksmamqqemuuwm;
        goto kmqiucuioimqwmcs;
        yeeaasukmegoociq:
    }
}

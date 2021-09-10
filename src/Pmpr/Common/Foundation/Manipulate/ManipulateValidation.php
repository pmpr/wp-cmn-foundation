<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        mgeemmasukoaoska:
        igiygcsmsmsaaqkq:
        goto koskggyaeiiwqisa;
        koskggyaeiiwqisa:
        return $uuksaskqamgouosy;
        goto ywskmwikageumkig;
        ecgwamoiwysakygg:
        if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) {
            goto igiygcsmsmsaaqkq;
        }
        goto ygewgysgwcacuimc;
        ygewgysgwcacuimc:
        $uuksaskqamgouosy = DOMCrawler::umuecysoywoumgwo($sociqikgoyemqaac, $kqywgoqsmuswammk);
        goto mgeemmasukoaoska;
        kgocgogqyicccqek:
        $uuksaskqamgouosy = $sociqikgoyemqaac != strip_tags($sociqikgoyemqaac);
        goto ecgwamoiwysakygg;
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
        return is_string($auoeyussiyykosqg) && preg_match("\x2f\x5e\x28\134\x2b\x39\x38\77\51\x3f\173\77\x28\60\x3f\71\133\60\x2d\x39\135\x7b\x39\175\175\77\51\x24\x2f", $auoeyussiyykosqg, $meyiiwcswqmuggyg);
    }
    
    public static function pwcgsiswecasgkgs($mksyucucyswaukig, $qgciuiagkkguykgs)
    {
        goto cioueaakwyaagseq;
        kywacsgsquqwkmee:
        if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) {
            goto cosusaqikwmmwwyy;
        }
        goto ycwegycyuuciuuuc;
        ycwegycyuuciuuuc:
        $ksaameoqigiaoigg = $ukuacigyikaisiwu;
        goto uqwuggsqqsykmecm;
        iyyekyusuukgcgmg:
        return $ksaameoqigiaoigg;
        goto yeeaasukmegoociq;
        icyywimceiaqcaki:
        goto eamksmamqqemuuwm;
        goto kmqiucuioimqwmcs;
        ywuqayooawsuwyos:
        if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) {
            goto ucycmawyuaaewmuq;
        }
        goto waiqucggoasiqici;
        fawmeqyyqawqmqsy:
        eamksmamqqemuuwm:
        goto iyyekyusuukgcgmg;
        cioueaakwyaagseq:
        $ksaameoqigiaoigg = false;
        goto ywuqayooawsuwyos;
        uqwuggsqqsykmecm:
        cosusaqikwmmwwyy:
        goto icyywimceiaqcaki;
        agyowuuawgseioyo:
        $ksaameoqigiaoigg = $qgciuiagkkguykgs;
        goto fawmeqyyqawqmqsy;
        waiqucggoasiqici:
        $ukuacigyikaisiwu = ManipulateString::scramble($qgciuiagkkguykgs);
        goto kywacsgsquqwkmee;
        kmqiucuioimqwmcs:
        ucycmawyuaaewmuq:
        goto agyowuuawgseioyo;
        yeeaasukmegoociq:
    }
}

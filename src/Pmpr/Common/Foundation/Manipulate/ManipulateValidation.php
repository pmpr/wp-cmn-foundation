<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto ecgwamoiwysakygg;
        koskggyaeiiwqisa:
        kgocgogqyicccqek:
        goto ywskmwikageumkig;
        mgeemmasukoaoska:
        $uuksaskqamgouosy = DOMCrawler::umuecysoywoumgwo($sociqikgoyemqaac, $kqywgoqsmuswammk);
        goto koskggyaeiiwqisa;
        ygewgysgwcacuimc:
        if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) {
            goto kgocgogqyicccqek;
        }
        goto mgeemmasukoaoska;
        ywskmwikageumkig:
        return $uuksaskqamgouosy;
        goto cosusaqikwmmwwyy;
        ecgwamoiwysakygg:
        $uuksaskqamgouosy = $sociqikgoyemqaac != strip_tags($sociqikgoyemqaac);
        goto ygewgysgwcacuimc;
        cosusaqikwmmwwyy:
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
        return is_string($auoeyussiyykosqg) && preg_match("\x2f\x5e\x28\134\53\x39\x38\77\x29\77\x7b\x3f\50\60\x3f\71\x5b\x30\x2d\x39\135\x7b\71\x7d\x7d\77\x29\x24\x2f", $auoeyussiyykosqg, $meyiiwcswqmuggyg);
    }
    
    public static function pwcgsiswecasgkgs($mksyucucyswaukig, $qgciuiagkkguykgs)
    {
        goto ywuqayooawsuwyos;
        kywacsgsquqwkmee:
        $ukuacigyikaisiwu = ManipulateString::scramble($qgciuiagkkguykgs);
        goto ycwegycyuuciuuuc;
        ywuqayooawsuwyos:
        $ksaameoqigiaoigg = false;
        goto waiqucggoasiqici;
        ycwegycyuuciuuuc:
        if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) {
            goto ucycmawyuaaewmuq;
        }
        goto uqwuggsqqsykmecm;
        iyyekyusuukgcgmg:
        cioueaakwyaagseq:
        goto yeeaasukmegoociq;
        fawmeqyyqawqmqsy:
        $ksaameoqigiaoigg = $qgciuiagkkguykgs;
        goto iyyekyusuukgcgmg;
        icyywimceiaqcaki:
        ucycmawyuaaewmuq:
        goto kmqiucuioimqwmcs;
        waiqucggoasiqici:
        if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) {
            goto eamksmamqqemuuwm;
        }
        goto kywacsgsquqwkmee;
        uqwuggsqqsykmecm:
        $ksaameoqigiaoigg = $ukuacigyikaisiwu;
        goto icyywimceiaqcaki;
        yeeaasukmegoociq:
        return $ksaameoqigiaoigg;
        goto gaoycoykycqicwaq;
        agyowuuawgseioyo:
        eamksmamqqemuuwm:
        goto fawmeqyyqawqmqsy;
        kmqiucuioimqwmcs:
        goto cioueaakwyaagseq;
        goto agyowuuawgseioyo;
        gaoycoykycqicwaq:
    }
}

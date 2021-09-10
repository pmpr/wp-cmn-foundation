<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        ecgwamoiwysakygg:
        if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) {
            goto igiygcsmsmsaaqkq;
        }
        goto ygewgysgwcacuimc;
        kgocgogqyicccqek:
        $uuksaskqamgouosy = $sociqikgoyemqaac != strip_tags($sociqikgoyemqaac);
        goto ecgwamoiwysakygg;
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
        return is_string($auoeyussiyykosqg) && preg_match("\57\x5e\50\134\53\x39\70\x3f\x29\77\173\x3f\50\60\x3f\71\x5b\x30\55\x39\135\173\x39\175\x7d\x3f\x29\x24\x2f", $auoeyussiyykosqg, $meyiiwcswqmuggyg);
    }
    
    public static function pwcgsiswecasgkgs($mksyucucyswaukig, $qgciuiagkkguykgs)
    {
        goto cioueaakwyaagseq;
        ycwegycyuuciuuuc:
        $ksaameoqigiaoigg = $ukuacigyikaisiwu;
        goto uqwuggsqqsykmecm;
        kmqiucuioimqwmcs:
        ucycmawyuaaewmuq:
        goto agyowuuawgseioyo;
        ywuqayooawsuwyos:
        if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) {
            goto ucycmawyuaaewmuq;
        }
        goto waiqucggoasiqici;
        kywacsgsquqwkmee:
        if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) {
            goto cosusaqikwmmwwyy;
        }
        goto ycwegycyuuciuuuc;
        waiqucggoasiqici:
        $ukuacigyikaisiwu = ManipulateString::scramble($qgciuiagkkguykgs);
        goto kywacsgsquqwkmee;
        cioueaakwyaagseq:
        $ksaameoqigiaoigg = false;
        goto ywuqayooawsuwyos;
        iyyekyusuukgcgmg:
        return $ksaameoqigiaoigg;
        goto yeeaasukmegoociq;
        agyowuuawgseioyo:
        $ksaameoqigiaoigg = $qgciuiagkkguykgs;
        goto fawmeqyyqawqmqsy;
        fawmeqyyqawqmqsy:
        eamksmamqqemuuwm:
        goto iyyekyusuukgcgmg;
        icyywimceiaqcaki:
        goto eamksmamqqemuuwm;
        goto kmqiucuioimqwmcs;
        uqwuggsqqsykmecm:
        cosusaqikwmmwwyy:
        goto icyywimceiaqcaki;
        yeeaasukmegoociq:
    }
}

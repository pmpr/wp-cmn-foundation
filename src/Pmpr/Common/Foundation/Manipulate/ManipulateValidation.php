<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto yccqiqeuguggucem;
        yccqiqeuguggucem:
        $uuksaskqamgouosy = $sociqikgoyemqaac != strip_tags($sociqikgoyemqaac);
        goto owkcoawgimcoyima;
        owkcoawgimcoyima:
        if (!($uuksaskqamgouosy && $kqywgoqsmuswammk)) {
            goto guousgemwcuecmqe;
        }
        goto gwiyiyawcwasesgc;
        kgocgogqyicccqek:
        return $uuksaskqamgouosy;
        goto ecgwamoiwysakygg;
        gwiyiyawcwasesgc:
        $uuksaskqamgouosy = DOMCrawler::umuecysoywoumgwo($sociqikgoyemqaac, $kqywgoqsmuswammk);
        goto igiygcsmsmsaaqkq;
        igiygcsmsmsaaqkq:
        guousgemwcuecmqe:
        goto kgocgogqyicccqek;
        ecgwamoiwysakygg:
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
        return is_string($auoeyussiyykosqg) && preg_match("\57\x5e\50\x5c\53\71\x38\77\51\x3f\173\x3f\50\x30\77\x39\133\x30\x2d\x39\x5d\x7b\x39\x7d\x7d\77\51\x24\57", $auoeyussiyykosqg, $meyiiwcswqmuggyg);
    }
    
    public static function pwcgsiswecasgkgs($mksyucucyswaukig, $qgciuiagkkguykgs)
    {
        goto ywskmwikageumkig;
        cosusaqikwmmwwyy:
        if (method_exists($mksyucucyswaukig, $qgciuiagkkguykgs)) {
            goto mgeemmasukoaoska;
        }
        goto ucycmawyuaaewmuq;
        icyywimceiaqcaki:
        return $ksaameoqigiaoigg;
        goto kmqiucuioimqwmcs;
        waiqucggoasiqici:
        goto koskggyaeiiwqisa;
        goto kywacsgsquqwkmee;
        kywacsgsquqwkmee:
        mgeemmasukoaoska:
        goto ycwegycyuuciuuuc;
        uqwuggsqqsykmecm:
        koskggyaeiiwqisa:
        goto icyywimceiaqcaki;
        cioueaakwyaagseq:
        $ksaameoqigiaoigg = $ukuacigyikaisiwu;
        goto ywuqayooawsuwyos;
        ywskmwikageumkig:
        $ksaameoqigiaoigg = false;
        goto cosusaqikwmmwwyy;
        ywuqayooawsuwyos:
        ygewgysgwcacuimc:
        goto waiqucggoasiqici;
        eamksmamqqemuuwm:
        if (!method_exists($mksyucucyswaukig, $ukuacigyikaisiwu)) {
            goto ygewgysgwcacuimc;
        }
        goto cioueaakwyaagseq;
        ycwegycyuuciuuuc:
        $ksaameoqigiaoigg = $qgciuiagkkguykgs;
        goto uqwuggsqqsykmecm;
        ucycmawyuaaewmuq:
        $ukuacigyikaisiwu = ManipulateString::scramble($qgciuiagkkguykgs);
        goto eamksmamqqemuuwm;
        kmqiucuioimqwmcs:
    }
}

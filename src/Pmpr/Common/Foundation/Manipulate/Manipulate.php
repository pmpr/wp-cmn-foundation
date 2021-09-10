<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use ReflectionClass;
use ReflectionException;

abstract class Manipulate implements ConstantInterface
{
    
    public static function qmmaqwgyasgicmec(string $ymqmyyeuycgmigyo) : bool
    {
        return @defined($ymqmyyeuycgmigyo);
    }
    
    public static function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        goto swmmycgkeqaeswwq;
        wgiegisukosmmeak:
        iqegieggskwqccou:
        goto ymikiweaoykkcyiw;
        ymikiweaoykkcyiw:
        return $ksaameoqigiaoigg;
        goto aqqsoockoussgmqg;
        qecuwsgaqewyysai:
        $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto wgiegisukosmmeak;
        wuqwcogkmmqscwce:
        $ksaameoqigiaoigg = self::cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        goto umgqoisouauoeigc;
        wguiigwuqauaaoeu:
        aykcawmeuucgmwea:
        goto qecuwsgaqewyysai;
        umgqoisouauoeigc:
        goto iqegieggskwqccou;
        goto wguiigwuqauaaoeu;
        swmmycgkeqaeswwq:
        if (!self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto aykcawmeuucgmwea;
        }
        goto wuqwcogkmmqscwce;
        aqqsoockoussgmqg:
    }
    
    public static function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto siymueswymqkwekm;
        siymueswymqkwekm:
        if ($egkyssmuqcwaciya) {
            goto kkgceegequyiasgs;
        }
        goto yoqmmikkokomsacw;
        kyyeiymsouaoaiga:
        seasawiyoeiuucac:
        goto eksoacmagqswgeuq;
        paawyasioggcocqk:
        goto seasawiyoeiuucac;
        goto uiiyokqogawyeiec;
        gouysqqakyeugcyq:
        $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo);
        goto kyyeiymsouaoaiga;
        ooimgcqywgokcika:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $gqkqacakewkecqie = $oqkmoekaagukcwia->cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        } catch (ReflectionException $wgaoewqkwgomoaai) {
            $gqkqacakewkecqie = $ggauoeuaesiymgee;
        }
        goto kscyscauewimmgme;
        sogiywcegssacgsu:
        $gqkqacakewkecqie = $ggauoeuaesiymgee;
        goto paawyasioggcocqk;
        ooqikkgwocykeiuu:
        omgieamuywawmkgc:
        goto gouysqqakyeugcyq;
        yoqmmikkokomsacw:
        if (self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto omgieamuywawmkgc;
        }
        goto sogiywcegssacgsu;
        eksoacmagqswgeuq:
        return $gqkqacakewkecqie;
        goto aooqissygemgsigy;
        uiiyokqogawyeiec:
        kkgceegequyiasgs:
        goto ooimgcqywgokcika;
        kscyscauewimmgme:
        goto seasawiyoeiuucac;
        goto ooqikkgwocykeiuu;
        aooqissygemgsigy:
    }
}

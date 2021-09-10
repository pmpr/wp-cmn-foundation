<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        umgqoisouauoeigc:
        goto iqegieggskwqccou;
        goto wguiigwuqauaaoeu;
        qecuwsgaqewyysai:
        $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto wgiegisukosmmeak;
        wuqwcogkmmqscwce:
        $ksaameoqigiaoigg = self::cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        goto umgqoisouauoeigc;
        wguiigwuqauaaoeu:
        aykcawmeuucgmwea:
        goto qecuwsgaqewyysai;
        swmmycgkeqaeswwq:
        if (!self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto aykcawmeuucgmwea;
        }
        goto wuqwcogkmmqscwce;
        wgiegisukosmmeak:
        iqegieggskwqccou:
        goto ymikiweaoykkcyiw;
        ymikiweaoykkcyiw:
        return $ksaameoqigiaoigg;
        goto aqqsoockoussgmqg;
        aqqsoockoussgmqg:
    }
    
    public static function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto siymueswymqkwekm;
        kscyscauewimmgme:
        goto seasawiyoeiuucac;
        goto ooqikkgwocykeiuu;
        kyyeiymsouaoaiga:
        seasawiyoeiuucac:
        goto eksoacmagqswgeuq;
        sogiywcegssacgsu:
        $gqkqacakewkecqie = $ggauoeuaesiymgee;
        goto paawyasioggcocqk;
        uiiyokqogawyeiec:
        kkgceegequyiasgs:
        goto ooimgcqywgokcika;
        eksoacmagqswgeuq:
        return $gqkqacakewkecqie;
        goto aooqissygemgsigy;
        paawyasioggcocqk:
        goto seasawiyoeiuucac;
        goto uiiyokqogawyeiec;
        ooimgcqywgokcika:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $gqkqacakewkecqie = $oqkmoekaagukcwia->cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        } catch (ReflectionException $wgaoewqkwgomoaai) {
            $gqkqacakewkecqie = $ggauoeuaesiymgee;
        }
        goto kscyscauewimmgme;
        yoqmmikkokomsacw:
        if (self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto omgieamuywawmkgc;
        }
        goto sogiywcegssacgsu;
        ooqikkgwocykeiuu:
        omgieamuywawmkgc:
        goto gouysqqakyeugcyq;
        gouysqqakyeugcyq:
        $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo);
        goto kyyeiymsouaoaiga;
        siymueswymqkwekm:
        if ($egkyssmuqcwaciya) {
            goto kkgceegequyiasgs;
        }
        goto yoqmmikkokomsacw;
        aooqissygemgsigy:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto wuqwcogkmmqscwce;
        ymikiweaoykkcyiw:
        swmmycgkeqaeswwq:
        goto aqqsoockoussgmqg;
        aqqsoockoussgmqg:
        return $ksaameoqigiaoigg;
        goto seasawiyoeiuucac;
        qecuwsgaqewyysai:
        iqegieggskwqccou:
        goto wgiegisukosmmeak;
        wuqwcogkmmqscwce:
        if (!self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto iqegieggskwqccou;
        }
        goto umgqoisouauoeigc;
        umgqoisouauoeigc:
        $ksaameoqigiaoigg = self::cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        goto wguiigwuqauaaoeu;
        wguiigwuqauaaoeu:
        goto swmmycgkeqaeswwq;
        goto qecuwsgaqewyysai;
        wgiegisukosmmeak:
        $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto ymikiweaoykkcyiw;
        seasawiyoeiuucac:
    }
    
    public static function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto yoqmmikkokomsacw;
        kyyeiymsouaoaiga:
        $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo);
        goto eksoacmagqswgeuq;
        ooimgcqywgokcika:
        omgieamuywawmkgc:
        goto kscyscauewimmgme;
        sogiywcegssacgsu:
        if (self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto siymueswymqkwekm;
        }
        goto paawyasioggcocqk;
        ooqikkgwocykeiuu:
        goto kkgceegequyiasgs;
        goto gouysqqakyeugcyq;
        uiiyokqogawyeiec:
        goto kkgceegequyiasgs;
        goto ooimgcqywgokcika;
        gouysqqakyeugcyq:
        siymueswymqkwekm:
        goto kyyeiymsouaoaiga;
        paawyasioggcocqk:
        $gqkqacakewkecqie = $ggauoeuaesiymgee;
        goto uiiyokqogawyeiec;
        eksoacmagqswgeuq:
        kkgceegequyiasgs:
        goto aooqissygemgsigy;
        kscyscauewimmgme:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $gqkqacakewkecqie = $oqkmoekaagukcwia->cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        } catch (ReflectionException $wgaoewqkwgomoaai) {
            $gqkqacakewkecqie = $ggauoeuaesiymgee;
        }
        goto ooqikkgwocykeiuu;
        yoqmmikkokomsacw:
        if ($egkyssmuqcwaciya) {
            goto omgieamuywawmkgc;
        }
        goto sogiywcegssacgsu;
        aooqissygemgsigy:
        return $gqkqacakewkecqie;
        goto msioicqugygwksci;
        msioicqugygwksci:
    }
}

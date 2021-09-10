<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        swmmycgkeqaeswwq:
        if (!self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto aykcawmeuucgmwea;
        }
        goto wuqwcogkmmqscwce;
        wuqwcogkmmqscwce:
        $ksaameoqigiaoigg = self::cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        goto umgqoisouauoeigc;
        wgiegisukosmmeak:
        iqegieggskwqccou:
        goto ymikiweaoykkcyiw;
        ymikiweaoykkcyiw:
        return $ksaameoqigiaoigg;
        goto aqqsoockoussgmqg;
        wguiigwuqauaaoeu:
        aykcawmeuucgmwea:
        goto qecuwsgaqewyysai;
        umgqoisouauoeigc:
        goto iqegieggskwqccou;
        goto wguiigwuqauaaoeu;
        qecuwsgaqewyysai:
        $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto wgiegisukosmmeak;
        aqqsoockoussgmqg:
    }
    
    public static function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto siymueswymqkwekm;
        kyyeiymsouaoaiga:
        seasawiyoeiuucac:
        goto eksoacmagqswgeuq;
        paawyasioggcocqk:
        goto seasawiyoeiuucac;
        goto uiiyokqogawyeiec;
        sogiywcegssacgsu:
        $gqkqacakewkecqie = $ggauoeuaesiymgee;
        goto paawyasioggcocqk;
        ooimgcqywgokcika:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $gqkqacakewkecqie = $oqkmoekaagukcwia->cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        } catch (ReflectionException $wgaoewqkwgomoaai) {
            $gqkqacakewkecqie = $ggauoeuaesiymgee;
        }
        goto kscyscauewimmgme;
        eksoacmagqswgeuq:
        return $gqkqacakewkecqie;
        goto aooqissygemgsigy;
        ooqikkgwocykeiuu:
        omgieamuywawmkgc:
        goto gouysqqakyeugcyq;
        yoqmmikkokomsacw:
        if (self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto omgieamuywawmkgc;
        }
        goto sogiywcegssacgsu;
        gouysqqakyeugcyq:
        $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo);
        goto kyyeiymsouaoaiga;
        siymueswymqkwekm:
        if ($egkyssmuqcwaciya) {
            goto kkgceegequyiasgs;
        }
        goto yoqmmikkokomsacw;
        kscyscauewimmgme:
        goto seasawiyoeiuucac;
        goto ooqikkgwocykeiuu;
        uiiyokqogawyeiec:
        kkgceegequyiasgs:
        goto ooimgcqywgokcika;
        aooqissygemgsigy:
    }
}

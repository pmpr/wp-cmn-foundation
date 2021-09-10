<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        if (!self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        } else {
            $ksaameoqigiaoigg = self::cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        if ($egkyssmuqcwaciya) {
            try {
                $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
                $gqkqacakewkecqie = $oqkmoekaagukcwia->cmaecekuqkwmemms($ymqmyyeuycgmigyo);
            } catch (ReflectionException $wgaoewqkwgomoaai) {
                $gqkqacakewkecqie = $ggauoeuaesiymgee;
            }
        } elseif (self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo);
        } else {
            $gqkqacakewkecqie = $ggauoeuaesiymgee;
        }
        return $gqkqacakewkecqie;
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorSanitize;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class ManipulateHook extends Manipulate
{
    
    public static function ygyygikyocoymgaw($ymqmyyeuycgmigyo, $quowyokcwswmuois = null, $ykuqcwwmuyqmkisq = true)
    {
        $iaakskwmyqceoscy = '';
        if ($ykuqcwwmuyqmkisq) {
            global $icgkamwwakkgigsi;
            if (!$icgkamwwakkgigsi) {
                $icgkamwwakkgigsi = [];
            }
            $iaakskwmyqceoscy = '';
            if (in_array($ymqmyyeuycgmigyo, $icgkamwwakkgigsi)) {
                $ksiyqouuaoymsycg = array_search($ymqmyyeuycgmigyo, $icgkamwwakkgigsi);
                if ($ksiyqouuaoymsycg) {
                    $iaakskwmyqceoscy = $ksiyqouuaoymsycg;
                }
            }
        }
        if (!$iaakskwmyqceoscy) {
            if ($quowyokcwswmuois) {
                $iaakskwmyqceoscy = "{$quowyokcwswmuois}_{$ymqmyyeuycgmigyo}";
            } else {
                $iaakskwmyqceoscy = $ymqmyyeuycgmigyo;
            }
            if ($ykuqcwwmuyqmkisq) {
                $icgkamwwakkgigsi[$iaakskwmyqceoscy] = $ymqmyyeuycgmigyo;
            }
        }
        return $iaakskwmyqceoscy;
    }
}

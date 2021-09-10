<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorRewrite;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateRewrite extends Manipulate
{
    
    public static function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true)
    {
        if ($acqqmqmcquukaqsc) {
            foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) {
                $ucccueqywigcukcc = ManipulateArray::get($ekuqiqmikiicgoss, 'regex', ManipulateArray::get($ekuqiqmikiicgoss, 0, ''));
                $gqgemcmoicmgaqie = ManipulateArray::get($ekuqiqmikiicgoss, 'query', ManipulateArray::get($ekuqiqmikiicgoss, 1, ''));
                $miisqgccsqqcscia = ManipulateArray::get($ekuqiqmikiicgoss, 'after', ManipulateArray::get($ekuqiqmikiicgoss, 0, 'bottom'));
                DecoratorRewrite::aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia);
                ismeikacqqyqcmqe:
            }
            cysgqimowcqoqqsc:
        }
        if ($uoumwucsgissassi) {
            DecoratorRewrite::ggqucmukcaycuckk($wqgoeumkaeyqaiqu);
        }
    }
    
    public static function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0)
    {
        global $wp_rewrite;
        $ymiyawysimukkoso = $wp_rewrite->pagination_base;
        if (!$meyiiwcswqmuggyg) {
            $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, '$matches');
            $meyiiwcswqmuggyg = intval($meyiiwcswqmuggyg) + 1;
        }
        $ucccueqywigcukcc .= "{$ymiyawysimukkoso}/?([0-9]{1,})/";
        $gqgemcmoicmgaqie .= "&paged=\$matches[{$meyiiwcswqmuggyg}]";
    }
}

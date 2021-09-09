<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorRewrite;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateRewrite extends Manipulate
{
    
    public static function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true)
    {
        goto ogaeqkismgiuisec;
        qmmqgkauawgywmos:
        foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) {
            goto gciweeimoysqegua;
            gciweeimoysqegua:
            $ucccueqywigcukcc = ManipulateArray::get($ekuqiqmikiicgoss, "\162\145\x67\145\170", ManipulateArray::get($ekuqiqmikiicgoss, 0, ''));
            goto uaayeqesiwoyeyky;
            uaayeqesiwoyeyky:
            $gqgemcmoicmgaqie = ManipulateArray::get($ekuqiqmikiicgoss, "\x71\165\145\x72\171", ManipulateArray::get($ekuqiqmikiicgoss, 1, ''));
            goto mwoggqumgkkuccsg;
            ukyseaksckwaqccy:
            DecoratorRewrite::aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia);
            goto aqkykycuymkgeuca;
            aqkykycuymkgeuca:
            keamkgymemuoumyk:
            goto gwegqueckokqewgq;
            mwoggqumgkkuccsg:
            $miisqgccsqqcscia = ManipulateArray::get($ekuqiqmikiicgoss, "\141\x66\x74\x65\162", ManipulateArray::get($ekuqiqmikiicgoss, 0, "\142\x6f\164\164\x6f\155"));
            goto ukyseaksckwaqccy;
            gwegqueckokqewgq:
        }
        goto iqqwqksqmgkeiyye;
        esukkewwucqgewoa:
        gicwwusswicoaewo:
        goto wyoisggmqsmkgmwu;
        csgigisimckqsgqk:
        DecoratorRewrite::ggqucmukcaycuckk($wqgoeumkaeyqaiqu);
        goto esukkewwucqgewoa;
        swqicamwekkeuiwm:
        gekygaomisweagke:
        goto qkgmwgkisykeciki;
        qkgmwgkisykeciki:
        if (!$uoumwucsgissassi) {
            goto gicwwusswicoaewo;
        }
        goto csgigisimckqsgqk;
        ogaeqkismgiuisec:
        if (!$acqqmqmcquukaqsc) {
            goto gekygaomisweagke;
        }
        goto qmmqgkauawgywmos;
        iqqwqksqmgkeiyye:
        ogucqcimwucemmqi:
        goto swqicamwekkeuiwm;
        wyoisggmqsmkgmwu:
    }
    
    public static function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0)
    {
        goto eayssgemciaigiam;
        eayssgemciaigiam:
        global $wp_rewrite;
        goto vgikmsgkoicqkicg;
        skickmuouwmgykag:
        $gqgemcmoicmgaqie .= "\x26\160\x61\x67\x65\144\x3d\44\x6d\x61\x74\x63\150\x65\163\133{$meyiiwcswqmuggyg}\135";
        goto cygmcwemkeicyqsg;
        cuycyaewiggayoyq:
        if ($meyiiwcswqmuggyg) {
            goto aoyweksmwmggciqa;
        }
        goto aamoqaoqsmaaiqic;
        moyaggkeisiyocmy:
        $meyiiwcswqmuggyg = intval($meyiiwcswqmuggyg) + 1;
        goto uekocieigyaeiesk;
        aamoqaoqsmaaiqic:
        $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\x24\155\141\x74\143\x68\x65\163");
        goto moyaggkeisiyocmy;
        ksmiwscciwcugeii:
        $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\57\77\x28\133\x30\x2d\71\x5d\173\61\x2c\x7d\x29\x2f";
        goto skickmuouwmgykag;
        vgikmsgkoicqkicg:
        $ymiyawysimukkoso = $wp_rewrite->pagination_base;
        goto cuycyaewiggayoyq;
        uekocieigyaeiesk:
        aoyweksmwmggciqa:
        goto ksmiwscciwcugeii;
        cygmcwemkeicyqsg:
    }
}

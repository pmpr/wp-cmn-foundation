<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorRewrite;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateRewrite extends Manipulate
{
    
    public static function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true)
    {
        goto sqkuogoqqegcmoiu;
        cosqkmeaakcgmmes:
        suiouugyumesaygg:
        goto guwmiweiiaqyyqya;
        cqkamaqkkqyyeekm:
        DecoratorRewrite::ggqucmukcaycuckk($wqgoeumkaeyqaiqu);
        goto wuaoscmkkyikogui;
        sqkuogoqqegcmoiu:
        if (!$acqqmqmcquukaqsc) {
            goto suiouugyumesaygg;
        }
        goto oeccqeskekmescas;
        oeccqeskekmescas:
        foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) {
            goto oykummqcycwokuom;
            mwuameigiiakaiqe:
            $gqgemcmoicmgaqie = ManipulateArray::get($ekuqiqmikiicgoss, "\x71\165\145\x72\171", ManipulateArray::get($ekuqiqmikiicgoss, 1, ''));
            goto qyswguyoqgguowyq;
            oykummqcycwokuom:
            $ucccueqywigcukcc = ManipulateArray::get($ekuqiqmikiicgoss, "\162\145\147\x65\x78", ManipulateArray::get($ekuqiqmikiicgoss, 0, ''));
            goto mwuameigiiakaiqe;
            qyswguyoqgguowyq:
            $miisqgccsqqcscia = ManipulateArray::get($ekuqiqmikiicgoss, "\x61\146\x74\x65\x72", ManipulateArray::get($ekuqiqmikiicgoss, 0, "\x62\x6f\x74\164\x6f\155"));
            goto wqsgwqcuuyiyuiwm;
            wqsgwqcuuyiyuiwm:
            DecoratorRewrite::aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia);
            goto iyymysocsksaymcw;
            iyymysocsksaymcw:
            myqicooemskyowwo:
            goto sikwgikycyywqoku;
            sikwgikycyywqoku:
        }
        goto kokumwwakoeyweim;
        kokumwwakoeyweim:
        uykmsoymsgyogwwq:
        goto cosqkmeaakcgmmes;
        wuaoscmkkyikogui:
        oakomkeqcyuaqokm:
        goto gqiuoieqsyegogiq;
        guwmiweiiaqyyqya:
        if (!$uoumwucsgissassi) {
            goto oakomkeqcyuaqokm;
        }
        goto cqkamaqkkqyyeekm;
        gqiuoieqsyegogiq:
    }
    
    public static function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0)
    {
        goto kmyoumwgeikqucuy;
        ssoseykuwegsmyum:
        $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\57\x3f\x28\133\x30\x2d\x39\135\173\61\54\175\x29\57";
        goto mwqsossoseygkwmy;
        mwqsossoseygkwmy:
        $gqgemcmoicmgaqie .= "\46\x70\x61\x67\145\x64\x3d\44\x6d\141\x74\143\150\x65\x73\x5b{$meyiiwcswqmuggyg}\x5d";
        goto igwqkcqgscwckiuk;
        geusmeaowwsycmuc:
        qugegoaoegyagice:
        goto ssoseykuwegsmyum;
        kgkisuewqiykekkm:
        $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\44\x6d\141\164\143\x68\x65\x73");
        goto qiugceckoaiawsoi;
        wuoksymuccgysyga:
        $ymiyawysimukkoso = $wp_rewrite->pagination_base;
        goto oqoisoqeimseysui;
        kmyoumwgeikqucuy:
        global $wp_rewrite;
        goto wuoksymuccgysyga;
        qiugceckoaiawsoi:
        $meyiiwcswqmuggyg = intval($meyiiwcswqmuggyg) + 1;
        goto geusmeaowwsycmuc;
        oqoisoqeimseysui:
        if ($meyiiwcswqmuggyg) {
            goto qugegoaoegyagice;
        }
        goto kgkisuewqiykekkm;
        igwqkcqgscwckiuk:
    }
}

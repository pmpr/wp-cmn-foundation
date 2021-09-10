<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorRewrite;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateRewrite extends Manipulate
{
    
    public static function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true)
    {
        goto suiouugyumesaygg;
        sqkuogoqqegcmoiu:
        keaoguqysqeakuuw:
        goto oeccqeskekmescas;
        kokumwwakoeyweim:
        if (!$uoumwucsgissassi) {
            goto sikwgikycyywqoku;
        }
        goto cosqkmeaakcgmmes;
        oakomkeqcyuaqokm:
        foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) {
            goto uykmsoymsgyogwwq;
            oykummqcycwokuom:
            $miisqgccsqqcscia = ManipulateArray::get($ekuqiqmikiicgoss, "\141\146\x74\145\x72", ManipulateArray::get($ekuqiqmikiicgoss, 0, "\142\157\x74\x74\x6f\x6d"));
            goto mwuameigiiakaiqe;
            mwuameigiiakaiqe:
            DecoratorRewrite::aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia);
            goto qyswguyoqgguowyq;
            qyswguyoqgguowyq:
            uwguqssakkskimgc:
            goto wqsgwqcuuyiyuiwm;
            myqicooemskyowwo:
            $gqgemcmoicmgaqie = ManipulateArray::get($ekuqiqmikiicgoss, "\161\165\x65\162\x79", ManipulateArray::get($ekuqiqmikiicgoss, 1, ''));
            goto oykummqcycwokuom;
            uykmsoymsgyogwwq:
            $ucccueqywigcukcc = ManipulateArray::get($ekuqiqmikiicgoss, "\162\145\147\x65\170", ManipulateArray::get($ekuqiqmikiicgoss, 0, ''));
            goto myqicooemskyowwo;
            wqsgwqcuuyiyuiwm:
        }
        goto sqkuogoqqegcmoiu;
        guwmiweiiaqyyqya:
        sikwgikycyywqoku:
        goto cqkamaqkkqyyeekm;
        oeccqeskekmescas:
        iyymysocsksaymcw:
        goto kokumwwakoeyweim;
        cosqkmeaakcgmmes:
        DecoratorRewrite::ggqucmukcaycuckk($wqgoeumkaeyqaiqu);
        goto guwmiweiiaqyyqya;
        suiouugyumesaygg:
        if (!$acqqmqmcquukaqsc) {
            goto iyymysocsksaymcw;
        }
        goto oakomkeqcyuaqokm;
        cqkamaqkkqyyeekm:
    }
    
    public static function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0)
    {
        goto gqiuoieqsyegogiq;
        wuoksymuccgysyga:
        $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\x24\155\141\x74\x63\150\x65\x73");
        goto oqoisoqeimseysui;
        qiugceckoaiawsoi:
        $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\x2f\x3f\50\133\60\55\71\x5d\173\61\x2c\175\x29\57";
        goto geusmeaowwsycmuc;
        gqiuoieqsyegogiq:
        global $wp_rewrite;
        goto qugegoaoegyagice;
        kgkisuewqiykekkm:
        wuaoscmkkyikogui:
        goto qiugceckoaiawsoi;
        kmyoumwgeikqucuy:
        if ($meyiiwcswqmuggyg) {
            goto wuaoscmkkyikogui;
        }
        goto wuoksymuccgysyga;
        oqoisoqeimseysui:
        $meyiiwcswqmuggyg = intval($meyiiwcswqmuggyg) + 1;
        goto kgkisuewqiykekkm;
        geusmeaowwsycmuc:
        $gqgemcmoicmgaqie .= "\46\160\x61\x67\x65\x64\x3d\x24\x6d\x61\x74\143\x68\x65\163\133{$meyiiwcswqmuggyg}\135";
        goto ssoseykuwegsmyum;
        qugegoaoegyagice:
        $ymiyawysimukkoso = $wp_rewrite->pagination_base;
        goto kmyoumwgeikqucuy;
        ssoseykuwegsmyum:
    }
}

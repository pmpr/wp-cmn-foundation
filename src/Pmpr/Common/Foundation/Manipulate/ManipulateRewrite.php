<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        guwmiweiiaqyyqya:
        sikwgikycyywqoku:
        goto cqkamaqkkqyyeekm;
        oeccqeskekmescas:
        iyymysocsksaymcw:
        goto kokumwwakoeyweim;
        oakomkeqcyuaqokm:
        foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) {
            goto uykmsoymsgyogwwq;
            myqicooemskyowwo:
            $gqgemcmoicmgaqie = ManipulateArray::get($ekuqiqmikiicgoss, "\161\x75\145\x72\x79", ManipulateArray::get($ekuqiqmikiicgoss, 1, ''));
            goto oykummqcycwokuom;
            mwuameigiiakaiqe:
            DecoratorRewrite::aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia);
            goto qyswguyoqgguowyq;
            uykmsoymsgyogwwq:
            $ucccueqywigcukcc = ManipulateArray::get($ekuqiqmikiicgoss, "\x72\x65\147\145\x78", ManipulateArray::get($ekuqiqmikiicgoss, 0, ''));
            goto myqicooemskyowwo;
            qyswguyoqgguowyq:
            uwguqssakkskimgc:
            goto wqsgwqcuuyiyuiwm;
            oykummqcycwokuom:
            $miisqgccsqqcscia = ManipulateArray::get($ekuqiqmikiicgoss, "\141\146\x74\145\162", ManipulateArray::get($ekuqiqmikiicgoss, 0, "\x62\157\164\164\157\x6d"));
            goto mwuameigiiakaiqe;
            wqsgwqcuuyiyuiwm:
        }
        goto sqkuogoqqegcmoiu;
        kokumwwakoeyweim:
        if (!$uoumwucsgissassi) {
            goto sikwgikycyywqoku;
        }
        goto cosqkmeaakcgmmes;
        suiouugyumesaygg:
        if (!$acqqmqmcquukaqsc) {
            goto iyymysocsksaymcw;
        }
        goto oakomkeqcyuaqokm;
        sqkuogoqqegcmoiu:
        keaoguqysqeakuuw:
        goto oeccqeskekmescas;
        cosqkmeaakcgmmes:
        DecoratorRewrite::ggqucmukcaycuckk($wqgoeumkaeyqaiqu);
        goto guwmiweiiaqyyqya;
        cqkamaqkkqyyeekm:
    }
    
    public static function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0)
    {
        goto gqiuoieqsyegogiq;
        geusmeaowwsycmuc:
        $gqgemcmoicmgaqie .= "\46\160\x61\147\145\144\x3d\x24\x6d\x61\164\x63\x68\x65\x73\133{$meyiiwcswqmuggyg}\x5d";
        goto ssoseykuwegsmyum;
        kgkisuewqiykekkm:
        wuaoscmkkyikogui:
        goto qiugceckoaiawsoi;
        gqiuoieqsyegogiq:
        global $wp_rewrite;
        goto qugegoaoegyagice;
        kmyoumwgeikqucuy:
        if ($meyiiwcswqmuggyg) {
            goto wuaoscmkkyikogui;
        }
        goto wuoksymuccgysyga;
        qugegoaoegyagice:
        $ymiyawysimukkoso = $wp_rewrite->pagination_base;
        goto kmyoumwgeikqucuy;
        qiugceckoaiawsoi:
        $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\57\x3f\x28\x5b\60\x2d\71\x5d\173\x31\54\x7d\x29\x2f";
        goto geusmeaowwsycmuc;
        wuoksymuccgysyga:
        $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\44\x6d\x61\164\x63\150\145\163");
        goto oqoisoqeimseysui;
        oqoisoqeimseysui:
        $meyiiwcswqmuggyg = intval($meyiiwcswqmuggyg) + 1;
        goto kgkisuewqiykekkm;
        ssoseykuwegsmyum:
    }
}

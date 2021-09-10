<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorRewrite;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateRewrite extends Manipulate
{
    
    public static function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true)
    {
        goto oakomkeqcyuaqokm;
        oeccqeskekmescas:
        uwguqssakkskimgc:
        goto kokumwwakoeyweim;
        oakomkeqcyuaqokm:
        if (!$acqqmqmcquukaqsc) {
            goto sikwgikycyywqoku;
        }
        goto sqkuogoqqegcmoiu;
        sqkuogoqqegcmoiu:
        foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) {
            goto myqicooemskyowwo;
            qyswguyoqgguowyq:
            DecoratorRewrite::aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia);
            goto wqsgwqcuuyiyuiwm;
            myqicooemskyowwo:
            $ucccueqywigcukcc = ManipulateArray::get($ekuqiqmikiicgoss, "\x72\145\x67\145\x78", ManipulateArray::get($ekuqiqmikiicgoss, 0, ''));
            goto oykummqcycwokuom;
            mwuameigiiakaiqe:
            $miisqgccsqqcscia = ManipulateArray::get($ekuqiqmikiicgoss, "\x61\146\164\145\x72", ManipulateArray::get($ekuqiqmikiicgoss, 0, "\x62\x6f\x74\x74\x6f\155"));
            goto qyswguyoqgguowyq;
            wqsgwqcuuyiyuiwm:
            uykmsoymsgyogwwq:
            goto iyymysocsksaymcw;
            oykummqcycwokuom:
            $gqgemcmoicmgaqie = ManipulateArray::get($ekuqiqmikiicgoss, "\161\x75\x65\x72\x79", ManipulateArray::get($ekuqiqmikiicgoss, 1, ''));
            goto mwuameigiiakaiqe;
            iyymysocsksaymcw:
        }
        goto oeccqeskekmescas;
        guwmiweiiaqyyqya:
        DecoratorRewrite::ggqucmukcaycuckk($wqgoeumkaeyqaiqu);
        goto cqkamaqkkqyyeekm;
        kokumwwakoeyweim:
        sikwgikycyywqoku:
        goto cosqkmeaakcgmmes;
        cosqkmeaakcgmmes:
        if (!$uoumwucsgissassi) {
            goto suiouugyumesaygg;
        }
        goto guwmiweiiaqyyqya;
        cqkamaqkkqyyeekm:
        suiouugyumesaygg:
        goto wuaoscmkkyikogui;
        wuaoscmkkyikogui:
    }
    
    public static function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0)
    {
        goto qugegoaoegyagice;
        kmyoumwgeikqucuy:
        $ymiyawysimukkoso = $wp_rewrite->pagination_base;
        goto wuoksymuccgysyga;
        kgkisuewqiykekkm:
        $meyiiwcswqmuggyg = intval($meyiiwcswqmuggyg) + 1;
        goto qiugceckoaiawsoi;
        qugegoaoegyagice:
        global $wp_rewrite;
        goto kmyoumwgeikqucuy;
        wuoksymuccgysyga:
        if ($meyiiwcswqmuggyg) {
            goto gqiuoieqsyegogiq;
        }
        goto oqoisoqeimseysui;
        geusmeaowwsycmuc:
        $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\57\77\50\133\60\x2d\x39\135\173\x31\54\x7d\51\x2f";
        goto ssoseykuwegsmyum;
        qiugceckoaiawsoi:
        gqiuoieqsyegogiq:
        goto geusmeaowwsycmuc;
        ssoseykuwegsmyum:
        $gqgemcmoicmgaqie .= "\46\160\x61\147\x65\144\75\x24\155\x61\x74\x63\x68\x65\163\x5b{$meyiiwcswqmuggyg}\135";
        goto mwqsossoseygkwmy;
        oqoisoqeimseysui:
        $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\x24\x6d\141\x74\x63\150\145\x73");
        goto kgkisuewqiykekkm;
        mwqsossoseygkwmy:
    }
}

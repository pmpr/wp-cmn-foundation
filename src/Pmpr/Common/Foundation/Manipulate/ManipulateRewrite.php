<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        kokumwwakoeyweim:
        sikwgikycyywqoku:
        goto cosqkmeaakcgmmes;
        cqkamaqkkqyyeekm:
        suiouugyumesaygg:
        goto wuaoscmkkyikogui;
        sqkuogoqqegcmoiu:
        foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) {
            goto myqicooemskyowwo;
            qyswguyoqgguowyq:
            DecoratorRewrite::aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia);
            goto wqsgwqcuuyiyuiwm;
            wqsgwqcuuyiyuiwm:
            uykmsoymsgyogwwq:
            goto iyymysocsksaymcw;
            myqicooemskyowwo:
            $ucccueqywigcukcc = ManipulateArray::get($ekuqiqmikiicgoss, "\162\145\x67\145\x78", ManipulateArray::get($ekuqiqmikiicgoss, 0, ''));
            goto oykummqcycwokuom;
            mwuameigiiakaiqe:
            $miisqgccsqqcscia = ManipulateArray::get($ekuqiqmikiicgoss, "\x61\x66\164\145\x72", ManipulateArray::get($ekuqiqmikiicgoss, 0, "\x62\x6f\164\x74\157\x6d"));
            goto qyswguyoqgguowyq;
            oykummqcycwokuom:
            $gqgemcmoicmgaqie = ManipulateArray::get($ekuqiqmikiicgoss, "\161\x75\x65\162\171", ManipulateArray::get($ekuqiqmikiicgoss, 1, ''));
            goto mwuameigiiakaiqe;
            iyymysocsksaymcw:
        }
        goto oeccqeskekmescas;
        oakomkeqcyuaqokm:
        if (!$acqqmqmcquukaqsc) {
            goto sikwgikycyywqoku;
        }
        goto sqkuogoqqegcmoiu;
        cosqkmeaakcgmmes:
        if (!$uoumwucsgissassi) {
            goto suiouugyumesaygg;
        }
        goto guwmiweiiaqyyqya;
        guwmiweiiaqyyqya:
        DecoratorRewrite::ggqucmukcaycuckk($wqgoeumkaeyqaiqu);
        goto cqkamaqkkqyyeekm;
        oeccqeskekmescas:
        uwguqssakkskimgc:
        goto kokumwwakoeyweim;
        wuaoscmkkyikogui:
    }
    
    public static function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0)
    {
        goto qugegoaoegyagice;
        geusmeaowwsycmuc:
        $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\x2f\77\50\133\60\x2d\x39\135\x7b\61\54\175\51\57";
        goto ssoseykuwegsmyum;
        qiugceckoaiawsoi:
        gqiuoieqsyegogiq:
        goto geusmeaowwsycmuc;
        qugegoaoegyagice:
        global $wp_rewrite;
        goto kmyoumwgeikqucuy;
        wuoksymuccgysyga:
        if ($meyiiwcswqmuggyg) {
            goto gqiuoieqsyegogiq;
        }
        goto oqoisoqeimseysui;
        kmyoumwgeikqucuy:
        $ymiyawysimukkoso = $wp_rewrite->pagination_base;
        goto wuoksymuccgysyga;
        ssoseykuwegsmyum:
        $gqgemcmoicmgaqie .= "\46\x70\x61\x67\x65\x64\x3d\x24\x6d\141\164\x63\150\x65\x73\x5b{$meyiiwcswqmuggyg}\135";
        goto mwqsossoseygkwmy;
        oqoisoqeimseysui:
        $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\44\x6d\141\164\143\150\145\163");
        goto kgkisuewqiykekkm;
        kgkisuewqiykekkm:
        $meyiiwcswqmuggyg = intval($meyiiwcswqmuggyg) + 1;
        goto qiugceckoaiawsoi;
        mwqsossoseygkwmy:
    }
}

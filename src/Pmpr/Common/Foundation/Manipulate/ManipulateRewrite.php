<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        oeccqeskekmescas:
        uwguqssakkskimgc:
        goto kokumwwakoeyweim;
        cosqkmeaakcgmmes:
        if (!$uoumwucsgissassi) {
            goto suiouugyumesaygg;
        }
        goto guwmiweiiaqyyqya;
        guwmiweiiaqyyqya:
        DecoratorRewrite::ggqucmukcaycuckk($wqgoeumkaeyqaiqu);
        goto cqkamaqkkqyyeekm;
        oakomkeqcyuaqokm:
        if (!$acqqmqmcquukaqsc) {
            goto sikwgikycyywqoku;
        }
        goto sqkuogoqqegcmoiu;
        cqkamaqkkqyyeekm:
        suiouugyumesaygg:
        goto wuaoscmkkyikogui;
        sqkuogoqqegcmoiu:
        foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) {
            goto myqicooemskyowwo;
            wqsgwqcuuyiyuiwm:
            uykmsoymsgyogwwq:
            goto iyymysocsksaymcw;
            myqicooemskyowwo:
            $ucccueqywigcukcc = ManipulateArray::get($ekuqiqmikiicgoss, "\162\x65\x67\x65\x78", ManipulateArray::get($ekuqiqmikiicgoss, 0, ''));
            goto oykummqcycwokuom;
            oykummqcycwokuom:
            $gqgemcmoicmgaqie = ManipulateArray::get($ekuqiqmikiicgoss, "\161\165\x65\162\171", ManipulateArray::get($ekuqiqmikiicgoss, 1, ''));
            goto mwuameigiiakaiqe;
            qyswguyoqgguowyq:
            DecoratorRewrite::aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia);
            goto wqsgwqcuuyiyuiwm;
            mwuameigiiakaiqe:
            $miisqgccsqqcscia = ManipulateArray::get($ekuqiqmikiicgoss, "\141\146\164\145\x72", ManipulateArray::get($ekuqiqmikiicgoss, 0, "\x62\157\164\164\x6f\155"));
            goto qyswguyoqgguowyq;
            iyymysocsksaymcw:
        }
        goto oeccqeskekmescas;
        wuaoscmkkyikogui:
    }
    
    public static function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0)
    {
        goto qugegoaoegyagice;
        qugegoaoegyagice:
        global $wp_rewrite;
        goto kmyoumwgeikqucuy;
        qiugceckoaiawsoi:
        gqiuoieqsyegogiq:
        goto geusmeaowwsycmuc;
        wuoksymuccgysyga:
        if ($meyiiwcswqmuggyg) {
            goto gqiuoieqsyegogiq;
        }
        goto oqoisoqeimseysui;
        ssoseykuwegsmyum:
        $gqgemcmoicmgaqie .= "\x26\160\141\147\145\x64\75\x24\155\x61\164\143\x68\145\x73\133{$meyiiwcswqmuggyg}\x5d";
        goto mwqsossoseygkwmy;
        oqoisoqeimseysui:
        $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\x24\155\x61\x74\x63\x68\145\163");
        goto kgkisuewqiykekkm;
        kgkisuewqiykekkm:
        $meyiiwcswqmuggyg = intval($meyiiwcswqmuggyg) + 1;
        goto qiugceckoaiawsoi;
        kmyoumwgeikqucuy:
        $ymiyawysimukkoso = $wp_rewrite->pagination_base;
        goto wuoksymuccgysyga;
        geusmeaowwsycmuc:
        $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\57\x3f\50\x5b\x30\x2d\71\135\x7b\x31\x2c\x7d\x29\57";
        goto ssoseykuwegsmyum;
        mwqsossoseygkwmy:
    }
}

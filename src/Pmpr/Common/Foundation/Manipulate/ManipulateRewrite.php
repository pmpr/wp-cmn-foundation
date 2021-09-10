<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorRewrite;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateRewrite extends Manipulate
{
    
    public static function kcaoacekwkiqmaee(array $acqqmqmcquukaqsc = [], $uoumwucsgissassi = true, $wqgoeumkaeyqaiqu = true)
    {
        goto wqsgwqcuuyiyuiwm;
        wqsgwqcuuyiyuiwm:
        if (!$acqqmqmcquukaqsc) {
            goto mwuameigiiakaiqe;
        }
        goto iyymysocsksaymcw;
        suiouugyumesaygg:
        mwuameigiiakaiqe:
        goto oakomkeqcyuaqokm;
        iyymysocsksaymcw:
        foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) {
            goto umoqwwiawmwgwcwk;
            uykmsoymsgyogwwq:
            DecoratorRewrite::aimosgcaukumakge($ucccueqywigcukcc, $gqgemcmoicmgaqie, $miisqgccsqqcscia);
            goto myqicooemskyowwo;
            umoqwwiawmwgwcwk:
            $ucccueqywigcukcc = ManipulateArray::get($ekuqiqmikiicgoss, "\162\x65\147\145\170", ManipulateArray::get($ekuqiqmikiicgoss, 0, ''));
            goto keaoguqysqeakuuw;
            uwguqssakkskimgc:
            $miisqgccsqqcscia = ManipulateArray::get($ekuqiqmikiicgoss, "\141\x66\x74\145\162", ManipulateArray::get($ekuqiqmikiicgoss, 0, "\142\157\164\164\x6f\155"));
            goto uykmsoymsgyogwwq;
            myqicooemskyowwo:
            imigkkksiqykegqw:
            goto oykummqcycwokuom;
            keaoguqysqeakuuw:
            $gqgemcmoicmgaqie = ManipulateArray::get($ekuqiqmikiicgoss, "\161\x75\x65\162\x79", ManipulateArray::get($ekuqiqmikiicgoss, 1, ''));
            goto uwguqssakkskimgc;
            oykummqcycwokuom:
        }
        goto sikwgikycyywqoku;
        oeccqeskekmescas:
        qyswguyoqgguowyq:
        goto kokumwwakoeyweim;
        sikwgikycyywqoku:
        eoccgqmqaqsgkioo:
        goto suiouugyumesaygg;
        oakomkeqcyuaqokm:
        if (!$uoumwucsgissassi) {
            goto qyswguyoqgguowyq;
        }
        goto sqkuogoqqegcmoiu;
        sqkuogoqqegcmoiu:
        DecoratorRewrite::ggqucmukcaycuckk($wqgoeumkaeyqaiqu);
        goto oeccqeskekmescas;
        kokumwwakoeyweim:
    }
    
    public static function wqcwsicmeukcoqei(&$ucccueqywigcukcc, &$gqgemcmoicmgaqie, $meyiiwcswqmuggyg = 0)
    {
        goto guwmiweiiaqyyqya;
        wuaoscmkkyikogui:
        if ($meyiiwcswqmuggyg) {
            goto cosqkmeaakcgmmes;
        }
        goto gqiuoieqsyegogiq;
        qugegoaoegyagice:
        $meyiiwcswqmuggyg = intval($meyiiwcswqmuggyg) + 1;
        goto kmyoumwgeikqucuy;
        wuoksymuccgysyga:
        $ucccueqywigcukcc .= "{$ymiyawysimukkoso}\x2f\77\50\x5b\x30\x2d\71\135\x7b\x31\54\175\x29\x2f";
        goto oqoisoqeimseysui;
        guwmiweiiaqyyqya:
        global $wp_rewrite;
        goto cqkamaqkkqyyeekm;
        gqiuoieqsyegogiq:
        $meyiiwcswqmuggyg = substr_count($gqgemcmoicmgaqie, "\x24\x6d\141\164\x63\x68\x65\x73");
        goto qugegoaoegyagice;
        kmyoumwgeikqucuy:
        cosqkmeaakcgmmes:
        goto wuoksymuccgysyga;
        oqoisoqeimseysui:
        $gqgemcmoicmgaqie .= "\46\160\x61\147\x65\144\75\44\155\141\x74\143\x68\145\x73\x5b{$meyiiwcswqmuggyg}\135";
        goto kgkisuewqiykekkm;
        cqkamaqkkqyyeekm:
        $ymiyawysimukkoso = $wp_rewrite->pagination_base;
        goto wuaoscmkkyikogui;
        kgkisuewqiykekkm:
    }
}

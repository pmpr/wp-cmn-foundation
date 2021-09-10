<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use ReflectionClass;
use ReflectionException;

abstract class Manipulate implements ConstantInterface
{
    
    public static function qmmaqwgyasgicmec(string $ymqmyyeuycgmigyo) : bool
    {
        return @defined($ymqmyyeuycgmigyo);
    }
    
    public static function wwckmeoskuagomki(string $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie)
    {
        goto waqguwsseiamucog;
        igcogeumkiyaiekm:
        $ksaameoqigiaoigg = self::cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        goto moaekmimicakwisg;
        cwukciqgyiykkmme:
        qqyeoguyyawwacyi:
        goto wkgossscggiwwgqi;
        moaekmimicakwisg:
        goto qqyeoguyyawwacyi;
        goto ouwsgqaiqguiomym;
        cmgkyyywsqscoeia:
        $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto cwukciqgyiykkmme;
        ouwsgqaiqguiomym:
        ikiqwwyuwiqkgoqq:
        goto cmgkyyywsqscoeia;
        wkgossscggiwwgqi:
        return $ksaameoqigiaoigg;
        goto ucwqokwamqeiyauo;
        waqguwsseiamucog:
        if (!self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto ikiqwwyuwiqkgoqq;
        }
        goto igcogeumkiyaiekm;
        ucwqokwamqeiyauo:
    }
    
    public static function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto euuweiukuiuwcuym;
        kwyosousqcwgcaqq:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $gqkqacakewkecqie = $oqkmoekaagukcwia->cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        } catch (ReflectionException $wgaoewqkwgomoaai) {
            $gqkqacakewkecqie = $ggauoeuaesiymgee;
        }
        goto asayowukiisowcoo;
        qaaeckkicouagsiq:
        $gqkqacakewkecqie = $ggauoeuaesiymgee;
        goto wiwcgyekioquskkg;
        asayowukiisowcoo:
        goto oogauyisucksqwgq;
        goto woysagioiaegygiw;
        imscuiceoqcqeuec:
        if (self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto mwqksegiysmkmase;
        }
        goto qaaeckkicouagsiq;
        qeiygiiuygamegkq:
        usukgagsmcsgayiq:
        goto kwyosousqcwgcaqq;
        euuweiukuiuwcuym:
        if ($egkyssmuqcwaciya) {
            goto usukgagsmcsgayiq;
        }
        goto imscuiceoqcqeuec;
        wiwcgyekioquskkg:
        goto oogauyisucksqwgq;
        goto qeiygiiuygamegkq;
        wsokcmgygywqyuki:
        return $gqkqacakewkecqie;
        goto smaemsgsuyckcasg;
        uciwcwkusqqwicyi:
        $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo);
        goto qycyyqyaseuqsoss;
        qycyyqyaseuqsoss:
        oogauyisucksqwgq:
        goto wsokcmgygywqyuki;
        woysagioiaegygiw:
        mwqksegiysmkmase:
        goto uciwcwkusqqwicyi;
        smaemsgsuyckcasg:
    }
}

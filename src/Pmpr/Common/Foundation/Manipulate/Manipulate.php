<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto ouwsgqaiqguiomym;
        ucwqokwamqeiyauo:
        $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto oogauyisucksqwgq;
        ouwsgqaiqguiomym:
        if (!self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto igcogeumkiyaiekm;
        }
        goto cmgkyyywsqscoeia;
        oogauyisucksqwgq:
        moaekmimicakwisg:
        goto usukgagsmcsgayiq;
        wkgossscggiwwgqi:
        igcogeumkiyaiekm:
        goto ucwqokwamqeiyauo;
        usukgagsmcsgayiq:
        return $ksaameoqigiaoigg;
        goto mwqksegiysmkmase;
        cwukciqgyiykkmme:
        goto moaekmimicakwisg;
        goto wkgossscggiwwgqi;
        cmgkyyywsqscoeia:
        $ksaameoqigiaoigg = self::cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        goto cwukciqgyiykkmme;
        mwqksegiysmkmase:
    }
    
    public static function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto wiwcgyekioquskkg;
        woysagioiaegygiw:
        imscuiceoqcqeuec:
        goto uciwcwkusqqwicyi;
        cuqqecwymouycgau:
        return $gqkqacakewkecqie;
        goto syqumcoogeoweeys;
        wsokcmgygywqyuki:
        qaaeckkicouagsiq:
        goto smaemsgsuyckcasg;
        wiwcgyekioquskkg:
        if ($egkyssmuqcwaciya) {
            goto imscuiceoqcqeuec;
        }
        goto qeiygiiuygamegkq;
        smaemsgsuyckcasg:
        $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo);
        goto sgguweyyyiqmkakc;
        qeiygiiuygamegkq:
        if (self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto qaaeckkicouagsiq;
        }
        goto kwyosousqcwgcaqq;
        uciwcwkusqqwicyi:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $gqkqacakewkecqie = $oqkmoekaagukcwia->cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        } catch (ReflectionException $wgaoewqkwgomoaai) {
            $gqkqacakewkecqie = $ggauoeuaesiymgee;
        }
        goto qycyyqyaseuqsoss;
        asayowukiisowcoo:
        goto euuweiukuiuwcuym;
        goto woysagioiaegygiw;
        sgguweyyyiqmkakc:
        euuweiukuiuwcuym:
        goto cuqqecwymouycgau;
        kwyosousqcwgcaqq:
        $gqkqacakewkecqie = $ggauoeuaesiymgee;
        goto asayowukiisowcoo;
        qycyyqyaseuqsoss:
        goto euuweiukuiuwcuym;
        goto wsokcmgygywqyuki;
        syqumcoogeoweeys:
    }
}

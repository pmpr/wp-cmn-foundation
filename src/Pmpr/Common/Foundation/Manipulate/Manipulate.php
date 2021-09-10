<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        ouwsgqaiqguiomym:
        if (!self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto igcogeumkiyaiekm;
        }
        goto cmgkyyywsqscoeia;
        wkgossscggiwwgqi:
        igcogeumkiyaiekm:
        goto ucwqokwamqeiyauo;
        ucwqokwamqeiyauo:
        $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto oogauyisucksqwgq;
        oogauyisucksqwgq:
        moaekmimicakwisg:
        goto usukgagsmcsgayiq;
        cwukciqgyiykkmme:
        goto moaekmimicakwisg;
        goto wkgossscggiwwgqi;
        usukgagsmcsgayiq:
        return $ksaameoqigiaoigg;
        goto mwqksegiysmkmase;
        cmgkyyywsqscoeia:
        $ksaameoqigiaoigg = self::cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        goto cwukciqgyiykkmme;
        mwqksegiysmkmase:
    }
    
    public static function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto wiwcgyekioquskkg;
        kwyosousqcwgcaqq:
        $gqkqacakewkecqie = $ggauoeuaesiymgee;
        goto asayowukiisowcoo;
        uciwcwkusqqwicyi:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $gqkqacakewkecqie = $oqkmoekaagukcwia->cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        } catch (ReflectionException $wgaoewqkwgomoaai) {
            $gqkqacakewkecqie = $ggauoeuaesiymgee;
        }
        goto qycyyqyaseuqsoss;
        woysagioiaegygiw:
        imscuiceoqcqeuec:
        goto uciwcwkusqqwicyi;
        asayowukiisowcoo:
        goto euuweiukuiuwcuym;
        goto woysagioiaegygiw;
        wiwcgyekioquskkg:
        if ($egkyssmuqcwaciya) {
            goto imscuiceoqcqeuec;
        }
        goto qeiygiiuygamegkq;
        qeiygiiuygamegkq:
        if (self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto qaaeckkicouagsiq;
        }
        goto kwyosousqcwgcaqq;
        wsokcmgygywqyuki:
        qaaeckkicouagsiq:
        goto smaemsgsuyckcasg;
        cuqqecwymouycgau:
        return $gqkqacakewkecqie;
        goto syqumcoogeoweeys;
        smaemsgsuyckcasg:
        $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo);
        goto sgguweyyyiqmkakc;
        qycyyqyaseuqsoss:
        goto euuweiukuiuwcuym;
        goto wsokcmgygywqyuki;
        sgguweyyyiqmkakc:
        euuweiukuiuwcuym:
        goto cuqqecwymouycgau;
        syqumcoogeoweeys:
    }
}

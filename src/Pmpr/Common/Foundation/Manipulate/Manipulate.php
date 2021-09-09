<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto syauycikyosiscgs;
        uiyuycigkskokcco:
        $ksaameoqigiaoigg = @define($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie);
        goto suqyiooacuiiqcuk;
        wgiakoeckyswemak:
        faiesskquaeiqqom:
        goto uiyuycigkskokcco;
        iqkgeamgsuwqkckg:
        goto wayoumqqasqeowsk;
        goto wgiakoeckyswemak;
        iqiwskswayisages:
        $ksaameoqigiaoigg = self::cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        goto iqkgeamgsuwqkckg;
        suqyiooacuiiqcuk:
        wayoumqqasqeowsk:
        goto iygakaaakekgyeqy;
        iygakaaakekgyeqy:
        return $ksaameoqigiaoigg;
        goto ewqwyuuyegqukcmw;
        syauycikyosiscgs:
        if (!self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto faiesskquaeiqqom;
        }
        goto iqiwskswayisages;
        ewqwyuuyegqukcmw:
    }
    
    public static function cmaecekuqkwmemms(string $ymqmyyeuycgmigyo, $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        goto mumcqcssasmyqmca;
        mumcqcssasmyqmca:
        if ($egkyssmuqcwaciya) {
            goto yaioeuewuagwmaym;
        }
        goto iiugkqmswuikwcuo;
        sckagcuweuycciog:
        suuocycsksmcsqsm:
        goto yimcyeuemqyssysu;
        aocacgkcisiuosug:
        giuwumskimssakwo:
        goto csmwsuakqgukaqkm;
        ggwgiusgggqqckqw:
        yaioeuewuagwmaym:
        goto ioecigquiawyecis;
        ioecigquiawyecis:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $gqkqacakewkecqie = $oqkmoekaagukcwia->cmaecekuqkwmemms($ymqmyyeuycgmigyo);
        } catch (ReflectionException $wgaoewqkwgomoaai) {
            $gqkqacakewkecqie = $ggauoeuaesiymgee;
        }
        goto aikomgoeseyekwqa;
        wycsycuaymkqqgce:
        goto suuocycsksmcsqsm;
        goto ggwgiusgggqqckqw;
        yimcyeuemqyssysu:
        return $gqkqacakewkecqie;
        goto towiyceuykgmeooc;
        iiugkqmswuikwcuo:
        if (self::qmmaqwgyasgicmec($ymqmyyeuycgmigyo)) {
            goto giuwumskimssakwo;
        }
        goto sweyywawiwkgsqkw;
        aikomgoeseyekwqa:
        goto suuocycsksmcsqsm;
        goto aocacgkcisiuosug;
        sweyywawiwkgsqkw:
        $gqkqacakewkecqie = $ggauoeuaesiymgee;
        goto wycsycuaymkqqgce;
        csmwsuakqgukaqkm:
        $gqkqacakewkecqie = constant($ymqmyyeuycgmigyo);
        goto sckagcuweuycciog;
        towiyceuykgmeooc:
    }
}

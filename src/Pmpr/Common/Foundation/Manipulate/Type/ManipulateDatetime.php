<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;

class ManipulateDatetime extends Common
{
    
    public static function wguceomqgwouoyks($ocogsiouoiuuguym) : bool
    {
        return strtotime($ocogsiouoiuuguym) < time();
    }
    
    public static function ikuqieqosemkwuio($cqgoimumaewouews)
    {
        goto iwgcsqiqowaowska;
        iwgcsqiqowaowska:
        $cqgoimumaewouews = strtotime($cqgoimumaewouews);
        goto ksuaoogkueqmaemg;
        yskiooskcmuyewuy:
        $sieoyimycoskwwku = sprintf(__("\45\163\40\x61\x67\x6f"), human_time_diff($cqgoimumaewouews));
        goto aeyyammmgywaakyi;
        cswawiceqkiyuwgy:
        goto kikikuoceiouiccg;
        goto sawwqwioeyseeaoo;
        umawyuykgiuqwacs:
        if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) {
            goto ikmeskqmmqqyigmw;
        }
        goto ucoowgqsiscmocqm;
        aeyyammmgywaakyi:
        kikikuoceiouiccg:
        goto wikgayyaimyysqey;
        ucoowgqsiscmocqm:
        $sieoyimycoskwwku = DecoratorHook::sscegwueamckwmcy("\x64\141\164\145\137\164\x69\x6d\145\x5f\141\x67\x6f", date("\131\x2d\155\55\x64\40\110\x3a\x69", $cqgoimumaewouews), ManipulateSetting::uyomwmskouyyqyyq());
        goto cswawiceqkiyuwgy;
        ksuaoogkueqmaemg:
        $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews);
        goto umawyuykgiuqwacs;
        wikgayyaimyysqey:
        return DecoratorHook::sscegwueamckwmcy("\x74\x69\x6d\145\137\141\147\x6f", $sieoyimycoskwwku, $cqgoimumaewouews);
        goto usqykimeumyoosik;
        sawwqwioeyseeaoo:
        ikmeskqmmqqyigmw:
        goto yskiooskcmuyewuy;
        usqykimeumyoosik:
    }
    
    public static function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\x6e\x6f\x77") : bool
    {
        goto sosacgwuicyiiesw;
        uusuqukowcsyeoek:
        
        return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc;
        goto qkaamssgqkeaumqm;
        uimcguaiawcueoai:
        $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym);
        goto uusuqukowcsyeoek;
        ymgikwoegucegmmq:
        $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc);
        goto uimcguaiawcueoai;
        sosacgwuicyiiesw:
        $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg);
        goto ymgikwoegucegmmq;
        qkaamssgqkeaumqm:
    }
}

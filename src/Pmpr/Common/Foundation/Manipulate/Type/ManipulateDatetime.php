<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto uwwqiicwuwkwqcmg;
        ksuaoogkueqmaemg:
        goto yuiimkuacqcecwgw;
        goto umawyuykgiuqwacs;
        ikmeskqmmqqyigmw:
        $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews);
        goto kikikuoceiouiccg;
        cswawiceqkiyuwgy:
        yuiimkuacqcecwgw:
        goto sawwqwioeyseeaoo;
        sawwqwioeyseeaoo:
        return DecoratorHook::sscegwueamckwmcy("\x74\151\155\145\x5f\x61\x67\x6f", $sieoyimycoskwwku, $cqgoimumaewouews);
        goto yskiooskcmuyewuy;
        umawyuykgiuqwacs:
        ecowowaocsooqkyo:
        goto ucoowgqsiscmocqm;
        uwwqiicwuwkwqcmg:
        $cqgoimumaewouews = strtotime($cqgoimumaewouews);
        goto ikmeskqmmqqyigmw;
        ucoowgqsiscmocqm:
        $sieoyimycoskwwku = sprintf(__("\x25\x73\40\141\x67\x6f"), human_time_diff($cqgoimumaewouews));
        goto cswawiceqkiyuwgy;
        iwgcsqiqowaowska:
        $sieoyimycoskwwku = DecoratorHook::sscegwueamckwmcy("\x64\141\x74\x65\x5f\164\x69\x6d\x65\137\x61\x67\x6f", date("\x59\x2d\155\x2d\x64\x20\110\72\151", $cqgoimumaewouews), ManipulateSetting::uyomwmskouyyqyyq());
        goto ksuaoogkueqmaemg;
        kikikuoceiouiccg:
        if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) {
            goto ecowowaocsooqkyo;
        }
        goto iwgcsqiqowaowska;
        yskiooskcmuyewuy:
    }
    
    public static function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\x6e\x6f\167") : bool
    {
        goto aeyyammmgywaakyi;
        sosacgwuicyiiesw:
        
        return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc;
        goto ymgikwoegucegmmq;
        usqykimeumyoosik:
        $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym);
        goto sosacgwuicyiiesw;
        aeyyammmgywaakyi:
        $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg);
        goto wikgayyaimyysqey;
        wikgayyaimyysqey:
        $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc);
        goto usqykimeumyoosik;
        ymgikwoegucegmmq:
    }
}

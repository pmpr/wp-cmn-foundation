<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        umawyuykgiuqwacs:
        if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) {
            goto ikmeskqmmqqyigmw;
        }
        goto ucoowgqsiscmocqm;
        wikgayyaimyysqey:
        return DecoratorHook::sscegwueamckwmcy("\164\151\155\145\137\141\x67\157", $sieoyimycoskwwku, $cqgoimumaewouews);
        goto usqykimeumyoosik;
        aeyyammmgywaakyi:
        kikikuoceiouiccg:
        goto wikgayyaimyysqey;
        ucoowgqsiscmocqm:
        $sieoyimycoskwwku = DecoratorHook::sscegwueamckwmcy("\x64\x61\164\x65\137\164\151\x6d\x65\x5f\141\x67\157", date("\x59\55\155\55\144\40\x48\72\151", $cqgoimumaewouews), ManipulateSetting::uyomwmskouyyqyyq());
        goto cswawiceqkiyuwgy;
        iwgcsqiqowaowska:
        $cqgoimumaewouews = strtotime($cqgoimumaewouews);
        goto ksuaoogkueqmaemg;
        sawwqwioeyseeaoo:
        ikmeskqmmqqyigmw:
        goto yskiooskcmuyewuy;
        cswawiceqkiyuwgy:
        goto kikikuoceiouiccg;
        goto sawwqwioeyseeaoo;
        yskiooskcmuyewuy:
        $sieoyimycoskwwku = sprintf(__("\x25\163\40\x61\147\x6f"), human_time_diff($cqgoimumaewouews));
        goto aeyyammmgywaakyi;
        ksuaoogkueqmaemg:
        $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews);
        goto umawyuykgiuqwacs;
        usqykimeumyoosik:
    }
    
    public static function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\156\157\167") : bool
    {
        goto sosacgwuicyiiesw;
        uimcguaiawcueoai:
        $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym);
        goto uusuqukowcsyeoek;
        uusuqukowcsyeoek:
        
        return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc;
        goto qkaamssgqkeaumqm;
        ymgikwoegucegmmq:
        $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc);
        goto uimcguaiawcueoai;
        sosacgwuicyiiesw:
        $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg);
        goto ymgikwoegucegmmq;
        qkaamssgqkeaumqm:
    }
}

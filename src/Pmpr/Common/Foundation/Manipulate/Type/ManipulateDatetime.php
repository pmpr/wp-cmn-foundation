<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        goto ksuaoogkueqmaemg;
        ksuaoogkueqmaemg:
        $cqgoimumaewouews = strtotime($cqgoimumaewouews);
        goto umawyuykgiuqwacs;
        ucoowgqsiscmocqm:
        if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) {
            goto kikikuoceiouiccg;
        }
        goto cswawiceqkiyuwgy;
        sawwqwioeyseeaoo:
        goto iwgcsqiqowaowska;
        goto yskiooskcmuyewuy;
        aeyyammmgywaakyi:
        $sieoyimycoskwwku = sprintf(__("\45\163\40\141\147\x6f"), human_time_diff($cqgoimumaewouews));
        goto wikgayyaimyysqey;
        umawyuykgiuqwacs:
        $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews);
        goto ucoowgqsiscmocqm;
        cswawiceqkiyuwgy:
        $sieoyimycoskwwku = DecoratorHook::sscegwueamckwmcy("\x64\141\164\x65\x5f\x74\x69\x6d\145\x5f\x61\x67\x6f", date("\x59\55\155\x2d\144\x20\110\72\x69", $cqgoimumaewouews), ManipulateSetting::uyomwmskouyyqyyq());
        goto sawwqwioeyseeaoo;
        usqykimeumyoosik:
        return DecoratorHook::sscegwueamckwmcy("\164\x69\155\x65\x5f\141\147\x6f", $sieoyimycoskwwku, $cqgoimumaewouews);
        goto sosacgwuicyiiesw;
        yskiooskcmuyewuy:
        kikikuoceiouiccg:
        goto aeyyammmgywaakyi;
        wikgayyaimyysqey:
        iwgcsqiqowaowska:
        goto usqykimeumyoosik;
        sosacgwuicyiiesw:
    }
    
    public static function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\x6e\x6f\x77") : bool
    {
        goto ymgikwoegucegmmq;
        uimcguaiawcueoai:
        $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc);
        goto uusuqukowcsyeoek;
        ymgikwoegucegmmq:
        $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg);
        goto uimcguaiawcueoai;
        qkaamssgqkeaumqm:
        
        return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc;
        goto akcoekimwmwkmoia;
        uusuqukowcsyeoek:
        $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym);
        goto qkaamssgqkeaumqm;
        akcoekimwmwkmoia:
    }
}

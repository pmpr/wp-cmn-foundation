<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        aeyyammmgywaakyi:
        $sieoyimycoskwwku = sprintf(__("\x25\x73\x20\x61\x67\157"), human_time_diff($cqgoimumaewouews));
        goto wikgayyaimyysqey;
        cswawiceqkiyuwgy:
        $sieoyimycoskwwku = DecoratorHook::sscegwueamckwmcy("\144\x61\164\145\x5f\x74\151\x6d\x65\137\x61\147\x6f", date("\131\55\x6d\x2d\144\40\x48\x3a\x69", $cqgoimumaewouews), ManipulateSetting::uyomwmskouyyqyyq());
        goto sawwqwioeyseeaoo;
        ucoowgqsiscmocqm:
        if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) {
            goto kikikuoceiouiccg;
        }
        goto cswawiceqkiyuwgy;
        sawwqwioeyseeaoo:
        goto iwgcsqiqowaowska;
        goto yskiooskcmuyewuy;
        ksuaoogkueqmaemg:
        $cqgoimumaewouews = strtotime($cqgoimumaewouews);
        goto umawyuykgiuqwacs;
        wikgayyaimyysqey:
        iwgcsqiqowaowska:
        goto usqykimeumyoosik;
        umawyuykgiuqwacs:
        $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews);
        goto ucoowgqsiscmocqm;
        usqykimeumyoosik:
        return DecoratorHook::sscegwueamckwmcy("\164\151\x6d\x65\137\141\147\x6f", $sieoyimycoskwwku, $cqgoimumaewouews);
        goto sosacgwuicyiiesw;
        yskiooskcmuyewuy:
        kikikuoceiouiccg:
        goto aeyyammmgywaakyi;
        sosacgwuicyiiesw:
    }
    
    public static function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\156\x6f\x77") : bool
    {
        goto ymgikwoegucegmmq;
        uusuqukowcsyeoek:
        $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym);
        goto qkaamssgqkeaumqm;
        uimcguaiawcueoai:
        $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc);
        goto uusuqukowcsyeoek;
        qkaamssgqkeaumqm:
        
        return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc;
        goto akcoekimwmwkmoia;
        ymgikwoegucegmmq:
        $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg);
        goto uimcguaiawcueoai;
        akcoekimwmwkmoia:
    }
}

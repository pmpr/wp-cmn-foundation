<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto umawyuykgiuqwacs;
        ucoowgqsiscmocqm:
        $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews);
        goto cswawiceqkiyuwgy;
        sawwqwioeyseeaoo:
        $sieoyimycoskwwku = DecoratorHook::sscegwueamckwmcy("\144\141\x74\145\137\x74\151\155\x65\x5f\141\147\157", date("\131\55\155\x2d\x64\40\x48\72\x69", $cqgoimumaewouews), ManipulateSetting::uyomwmskouyyqyyq());
        goto yskiooskcmuyewuy;
        umawyuykgiuqwacs:
        $cqgoimumaewouews = strtotime($cqgoimumaewouews);
        goto ucoowgqsiscmocqm;
        usqykimeumyoosik:
        ksuaoogkueqmaemg:
        goto sosacgwuicyiiesw;
        cswawiceqkiyuwgy:
        if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) {
            goto iwgcsqiqowaowska;
        }
        goto sawwqwioeyseeaoo;
        aeyyammmgywaakyi:
        iwgcsqiqowaowska:
        goto wikgayyaimyysqey;
        sosacgwuicyiiesw:
        return DecoratorHook::sscegwueamckwmcy("\164\x69\x6d\x65\137\x61\147\x6f", $sieoyimycoskwwku, $cqgoimumaewouews);
        goto ymgikwoegucegmmq;
        wikgayyaimyysqey:
        $sieoyimycoskwwku = sprintf(__("\45\163\x20\x61\x67\x6f"), human_time_diff($cqgoimumaewouews));
        goto usqykimeumyoosik;
        yskiooskcmuyewuy:
        goto ksuaoogkueqmaemg;
        goto aeyyammmgywaakyi;
        ymgikwoegucegmmq:
    }
    
    public static function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\x6e\157\x77") : bool
    {
        goto uimcguaiawcueoai;
        uimcguaiawcueoai:
        $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg);
        goto uusuqukowcsyeoek;
        uusuqukowcsyeoek:
        $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc);
        goto qkaamssgqkeaumqm;
        akcoekimwmwkmoia:
        
        return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc;
        goto kmyuewweeweyeogc;
        qkaamssgqkeaumqm:
        $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym);
        goto akcoekimwmwkmoia;
        kmyuewweeweyeogc:
    }
}

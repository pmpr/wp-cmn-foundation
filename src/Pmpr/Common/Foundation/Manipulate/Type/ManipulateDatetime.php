<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        cswawiceqkiyuwgy:
        $sieoyimycoskwwku = DecoratorHook::sscegwueamckwmcy("\144\x61\164\x65\x5f\164\151\155\x65\137\x61\x67\157", date("\x59\x2d\x6d\x2d\x64\x20\110\72\x69", $cqgoimumaewouews), ManipulateSetting::uyomwmskouyyqyyq());
        goto sawwqwioeyseeaoo;
        yskiooskcmuyewuy:
        kikikuoceiouiccg:
        goto aeyyammmgywaakyi;
        ksuaoogkueqmaemg:
        $cqgoimumaewouews = strtotime($cqgoimumaewouews);
        goto umawyuykgiuqwacs;
        sawwqwioeyseeaoo:
        goto iwgcsqiqowaowska;
        goto yskiooskcmuyewuy;
        wikgayyaimyysqey:
        iwgcsqiqowaowska:
        goto usqykimeumyoosik;
        aeyyammmgywaakyi:
        $sieoyimycoskwwku = sprintf(__("\x25\163\40\141\x67\x6f"), human_time_diff($cqgoimumaewouews));
        goto wikgayyaimyysqey;
        usqykimeumyoosik:
        return DecoratorHook::sscegwueamckwmcy("\x74\x69\155\145\137\x61\147\157", $sieoyimycoskwwku, $cqgoimumaewouews);
        goto sosacgwuicyiiesw;
        ucoowgqsiscmocqm:
        if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) {
            goto kikikuoceiouiccg;
        }
        goto cswawiceqkiyuwgy;
        umawyuykgiuqwacs:
        $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews);
        goto ucoowgqsiscmocqm;
        sosacgwuicyiiesw:
    }
    
    public static function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\x6e\157\167") : bool
    {
        goto ymgikwoegucegmmq;
        ymgikwoegucegmmq:
        $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg);
        goto uimcguaiawcueoai;
        uusuqukowcsyeoek:
        $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym);
        goto qkaamssgqkeaumqm;
        qkaamssgqkeaumqm:
        
        return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc;
        goto akcoekimwmwkmoia;
        uimcguaiawcueoai:
        $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc);
        goto uusuqukowcsyeoek;
        akcoekimwmwkmoia:
    }
}

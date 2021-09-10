<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        $cqgoimumaewouews = strtotime($cqgoimumaewouews);
        $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews);
        if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) {
            $sieoyimycoskwwku = sprintf(__('%s ago'), human_time_diff($cqgoimumaewouews));
        } else {
            $sieoyimycoskwwku = DecoratorHook::sscegwueamckwmcy('date_time_ago', date('Y-m-d H:i', $cqgoimumaewouews), ManipulateSetting::uyomwmskouyyqyyq());
        }
        return DecoratorHook::sscegwueamckwmcy('time_ago', $sieoyimycoskwwku, $cqgoimumaewouews);
    }
    
    public static function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = 'now') : bool
    {
        $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg);
        $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc);
        $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym);
        
        return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc;
    }
}

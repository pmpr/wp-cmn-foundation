<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorWidget;

class ManipulateWidget extends Manipulate
{
    
    public static function ymaywccaiscsmsik($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = array_merge($ywmkwiwkosakssii, ["\x69\144" => $aokagokqyuysuksm, "\x6e\141\x6d\x65" => $ymqmyyeuycgmigyo]);
        DecoratorWidget::ymaywccaiscsmsik($ywmkwiwkosakssii);
    }
    
    public static function acsmmesauemikksg($assameyusgwogmce, $owgumcsyqsamiemg = [], $ywmkwiwkosakssii = [])
    {
        goto omauogsusekemsmm;
        iqwsweskgqqmewui:
        $nsmgceoqaqogqmuw = ob_get_clean();
        goto ogywgiaccuewaaws;
        eomaoeoioiwqsuoy:
        the_widget($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii);
        goto iqwsweskgqqmewui;
        omauogsusekemsmm:
        ob_start();
        goto eomaoeoioiwqsuoy;
        ogywgiaccuewaaws:
        return DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x77\x69\144\147\x65\x74\137\x68\x74\x6d\x6c"), $nsmgceoqaqogqmuw, $assameyusgwogmce);
        goto iigksosycwsowisw;
        iigksosycwsowisw:
    }
}

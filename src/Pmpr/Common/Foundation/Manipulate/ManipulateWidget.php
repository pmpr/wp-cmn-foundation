<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorWidget;

class ManipulateWidget extends Manipulate
{
    
    public static function ymaywccaiscsmsik($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = array_merge($ywmkwiwkosakssii, ['aokagokqyuysuksm' => $aokagokqyuysuksm, 'ymqmyyeuycgmigyo' => $ymqmyyeuycgmigyo]);
        DecoratorWidget::ymaywccaiscsmsik($ywmkwiwkosakssii);
    }
    
    public static function acsmmesauemikksg($assameyusgwogmce, $owgumcsyqsamiemg = [], $ywmkwiwkosakssii = [])
    {
        ob_start();
        the_widget($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii);
        $nsmgceoqaqogqmuw = ob_get_clean();
        return DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw('widget_html'), $nsmgceoqaqogqmuw, $assameyusgwogmce);
    }
}

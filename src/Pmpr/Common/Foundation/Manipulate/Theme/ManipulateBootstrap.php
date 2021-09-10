<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Theme;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\Template\Template;

class ManipulateBootstrap extends ManipulateHTML
{
    
    public static function oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, $wwgucssaecqekuek = [], $wygwqsssewkqooqm = true) : string
    {
        if ($wygwqsssewkqooqm) {
            $uamcoiueqaamsqma .= self::kmikoaiqoaqugooq($wwgucssaecqekuek);
        }
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', self::aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm));
        return self::uuccukgasskgimsq('div', $wwgucssaecqekuek, $uamcoiueqaamsqma);
    }
    
    public static function aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm = false) : string
    {
        return "alert alert-{$iqaosyayeiuaisqi}" . ($wygwqsssewkqooqm ? ' alert-dismissible' : '') . ' fade show no-margin';
    }
    
    public static function kmikoaiqoaqugooq($wwgucssaecqekuek = []) : string
    {
        $wkaqekwwgqsqwcoi = DecoratorHook::sscegwueamckwmcy('bootstrap_alert_dismiss_icon', IconFontawesomeInterface::ICON_XMARK);
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy('bootstrap_alert_dismiss_attrs', ['class' => 'icon-gray-600 icon-xs'], $wwgucssaecqekuek);
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true, true);
        return self::uuccukgasskgimsq('button', ['type' => 'button', 'class' => 'close', 'aria-label' => __('Close', PR__CMN__FOUNDATION), 'data-dismiss' => 'alert'], $wkaqekwwgqsqwcoi);
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Plugin;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorPlugin;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use WP_Requirements_Check;

class ManipulatePlugin extends Common
{
    
    public static function yicegakcoioyuwos() : array
    {
        return (array) DecoratorOption::get('active_plugins', []);
    }
    
    public static function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool
    {
        return DecoratorPlugin::ggocakcisguuokai($mkysicwccoeicumg) || self::sioyqaykmwwugmgi($mkysicwccoeicumg);
    }
    
    public static function sskmceyamwugkaii($ywmkwiwkosakssii = []) : bool
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['php' => '7.4', 'wp' => '5.2']);
        $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii);
        return $gioggcykgoikcwiy->uysacksscoseuguc();
    }
    
    public static function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool
    {
        $ggocakcisguuokai = false;
        if (is_multisite()) {
            $mseykiqqcmyesccu = DecoratorOption::kuaqqosyyoqiueym('active_sitewide_plugins');
            $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]);
        }
        return $ggocakcisguuokai;
    }
}

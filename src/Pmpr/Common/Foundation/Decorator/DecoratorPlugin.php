<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorPlugin extends Decorator
{
    
    public static function ggocakcisguuokai($mkysicwccoeicumg)
    {
        if (!function_exists('is_plugin_active')) {
            include_once ABSPATH . 'wp-admin/includes/plugin.php';
        }
        return is_plugin_active($mkysicwccoeicumg);
    }
    
    public static function sioyqaykmwwugmgi(string $mkysicwccoeicumg) : bool
    {
        return is_plugin_active_for_network($mkysicwccoeicumg);
    }
}

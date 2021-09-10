<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorOption extends Decorator
{
    
    public static function delete($omkysikckkcieckq)
    {
        return delete_option($omkysikckkcieckq);
    }
    
    public static function add($omkysikckkcieckq, $eqgoocgaqwqcimie)
    {
        return add_option($omkysikckkcieckq, $eqgoocgaqwqcimie);
    }
    
    public static function get($omkysikckkcieckq, $ggauoeuaesiymgee = false)
    {
        return get_option($omkysikckkcieckq, $ggauoeuaesiymgee);
    }
    
    public static function kuaqqosyyoqiueym($omkysikckkcieckq, $ggauoeuaesiymgee = false)
    {
        get_site_option($omkysikckkcieckq, $ggauoeuaesiymgee);
    }
    
    public static function update($omkysikckkcieckq, $eqgoocgaqwqcimie, $eogycucmwwksyycu = null)
    {
        return update_option($omkysikckkcieckq, $eqgoocgaqwqcimie, $eogycucmwwksyycu);
    }
}

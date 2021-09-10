<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;

class ManipulateSetting extends Manipulate
{
    
    public static function esoowymaimwcuecq() : bool
    {
        return self::cmaecekuqkwmemms('WP_DEBUG', false);
    }
    
    public static function ewswusimyeosaogm() : bool
    {
        return DecoratorOption::get('permalink_structure');
    }
    
    public static function uyomwmskouyyqyyq() : string
    {
        return (string) DecoratorOption::get('date_format', 'Y M d');
    }
    
    public static function isiuiegyqiomccsw() : string
    {
        return (string) DecoratorOption::get('time_format', 'H:i:s');
    }
    
    public static function yoaaussmackoisuw() : string
    {
        return sprintf(__('%s at %s', PR__CMN__FOUNDATION), self::uyomwmskouyyqyyq(), self::isiuiegyqiomccsw());
    }
    
    public static function omkaowmygoqwsywq($ggauoeuaesiymgee = 10) : int
    {
        return (int) DecoratorOption::get('posts_per_page', $ggauoeuaesiymgee);
    }
}

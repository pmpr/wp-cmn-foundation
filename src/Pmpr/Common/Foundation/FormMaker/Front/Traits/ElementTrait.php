<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Traits;

use Pmpr\Common\Foundation\FormMaker\Front as Elements;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

trait ElementTrait
{
    
    public static function mmmemoswoaiewkes(?string $aokagokqyuysuksm = null) : Elements\Form
    {
        return new Elements\Form($aokagokqyuysuksm);
    }
    
    public static function mecgagckeuagggyw(string $aokagokqyuysuksm = null) : Elements\Div
    {
        if (!$aokagokqyuysuksm) {
            $aokagokqyuysuksm = 'div_' . ManipulateString::uniqid(3);
        }
        return new Elements\Div($aokagokqyuysuksm);
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;

use Pmpr\Common\Foundation\Interfaces\ConstantInterface;

abstract class Decorator implements ConstantInterface
{
    
    public static function qyyygkguqcmgkmey($ekiuyucoiagmscgy, $ggauoeuaesiymgee = false, ...$ywmkwiwkosakssii)
    {
        $ksaameoqigiaoigg = $ggauoeuaesiymgee;
        if (function_exists($ekiuyucoiagmscgy)) {
            $ksaameoqigiaoigg = call_user_func($ekiuyucoiagmscgy, ...$ywmkwiwkosakssii);
        }
        return $ksaameoqigiaoigg;
    }
}

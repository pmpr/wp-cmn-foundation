<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554b2009bcf5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto ceecqioeaaiqgqsu; } $this->wrapper = new Wrapper(); ceecqioeaaiqgqsu: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto euimwgmwmmaogkcw; } self::$staticWrapper = new Wrapper(); euimwgmwmmaogkcw: return self::$staticWrapper; } }

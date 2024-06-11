<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6668a96c006dd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto ayoyuasegggqqosu; } $this->wrapper = new Wrapper(); ayoyuasegggqqosu: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto mkikakaaaqwygquu; } self::$staticWrapper = new Wrapper(); mkikakaaaqwygquu: return self::$staticWrapper; } }

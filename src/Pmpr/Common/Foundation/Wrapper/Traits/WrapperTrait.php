<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6492ef49d4e3a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto geaeoccyqqkyocuw; } $this->wrapper = new Wrapper(); geaeoccyqqkyocuw: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto auqyeogymwsekuue; } self::$staticWrapper = new Wrapper(); auqyeogymwsekuue: return self::$staticWrapper; } }

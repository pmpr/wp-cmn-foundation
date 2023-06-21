<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6492e761a69f3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto eyiwqgqcsqakwqss; } $this->wrapper = new Wrapper(); eyiwqgqcsqakwqss: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto sckioayasmkcoeoo; } self::$staticWrapper = new Wrapper(); sckioayasmkcoeoo: return self::$staticWrapper; } }

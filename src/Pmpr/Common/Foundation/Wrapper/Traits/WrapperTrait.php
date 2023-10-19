<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6531217057f43             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto omqkeukuycyymmke; } $this->wrapper = new Wrapper(); omqkeukuycyymmke: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto oiemkksaoaiyckgi; } self::$staticWrapper = new Wrapper(); oiemkksaoaiyckgi: return self::$staticWrapper; } }

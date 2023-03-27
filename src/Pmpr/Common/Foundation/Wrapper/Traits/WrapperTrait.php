<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6421b30117b6e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto gyeqsyqiosmysiio; } $this->wrapper = new Wrapper(); gyeqsyqiosmysiio: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto skwuueyuqkueasuu; } self::$staticWrapper = new Wrapper(); skwuueyuqkueasuu: return self::$staticWrapper; } }

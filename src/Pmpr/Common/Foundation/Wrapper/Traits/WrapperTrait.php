<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6436cb9ec208c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto ygqwqqiowseokqyy; } $this->wrapper = new Wrapper(); ygqwqqiowseokqyy: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto cckaqseuwsokgqky; } self::$staticWrapper = new Wrapper(); cckaqseuwsokgqky: return self::$staticWrapper; } }

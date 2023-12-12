<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657886ea347f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto aykmumaieiueyeqa; } $this->wrapper = new Wrapper(); aykmumaieiueyeqa: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto iyogykmmqkqysuek; } self::$staticWrapper = new Wrapper(); iyogykmmqkqysuek: return self::$staticWrapper; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643baf2730c00             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto iauiowaaqsooooco; } $this->wrapper = new Wrapper(); iauiowaaqsooooco: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto cwsmkieawokgkqso; } self::$staticWrapper = new Wrapper(); cwsmkieawokgkqso: return self::$staticWrapper; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6404adcd0c952             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto yuuqgqawgsycgggg; } $this->wrapper = new Wrapper(); yuuqgqawgsycgggg: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto kmsoucccawegguwq; } self::$staticWrapper = new Wrapper(); kmsoucccawegguwq: return self::$staticWrapper; } }

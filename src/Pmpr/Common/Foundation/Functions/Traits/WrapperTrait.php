<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66846eedd73a1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto auuqmasiciwyueek; } $this->wrapper = new Wrapper(); auuqmasiciwyueek: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto ykeaeieyycoeqccm; } self::$staticWrapper = new Wrapper(); ykeaeieyycoeqccm: return self::$staticWrapper; } }

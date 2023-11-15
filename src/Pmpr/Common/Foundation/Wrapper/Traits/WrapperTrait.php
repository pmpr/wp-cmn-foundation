<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65550f4a9e63e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto iwioqeqiwwuqmakq; } $this->wrapper = new Wrapper(); iwioqeqiwwuqmakq: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto wyksgeyiosqccake; } self::$staticWrapper = new Wrapper(); wyksgeyiosqccake: return self::$staticWrapper; } }

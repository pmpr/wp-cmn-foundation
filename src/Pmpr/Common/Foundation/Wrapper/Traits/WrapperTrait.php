<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b7fa8ee3c80             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto uyiyiugiugqiqgce; } $this->wrapper = new Wrapper(); uyiyiugiugqiqgce: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto aacaaeuuscacmgws; } self::$staticWrapper = new Wrapper(); aacaaeuuscacmgws: return self::$staticWrapper; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65622cf540ce2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto cskqgasmygooeiki; } $this->wrapper = new Wrapper(); cskqgasmygooeiki: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto qwaewmyemsgqgkwg; } self::$staticWrapper = new Wrapper(); qwaewmyemsgqgkwg: return self::$staticWrapper; } }

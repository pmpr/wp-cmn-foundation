<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657605ed631a1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto cgmagkeoskmgaiyg; } $this->wrapper = new Wrapper(); cgmagkeoskmgaiyg: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto agocucmwccwemeyq; } self::$staticWrapper = new Wrapper(); agocucmwccwemeyq: return self::$staticWrapper; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657d6bb4c8522             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto ikioiaguwaqkmmyc; } $this->wrapper = new Wrapper(); ikioiaguwaqkmmyc: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto cgkemewmecusmuqy; } self::$staticWrapper = new Wrapper(); cgkemewmecusmuqy: return self::$staticWrapper; } }

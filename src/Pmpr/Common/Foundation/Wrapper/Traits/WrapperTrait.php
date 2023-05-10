<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             645b588b1c7bc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto momgmqemgcasyuqq; } $this->wrapper = new Wrapper(); momgmqemgcasyuqq: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto qmuikumqukcyaeqa; } self::$staticWrapper = new Wrapper(); qmuikumqukcyaeqa: return self::$staticWrapper; } }

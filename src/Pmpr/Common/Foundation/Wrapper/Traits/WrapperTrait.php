<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6607b43f1661c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto egkqsyyusoukuieu; } $this->wrapper = new Wrapper(); egkqsyyusoukuieu: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto qeoeagouucmwsyqw; } self::$staticWrapper = new Wrapper(); qeoeagouucmwsyqw: return self::$staticWrapper; } }

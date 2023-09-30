<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             651831595d0db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto wasacacaowicmiyw; } $this->wrapper = new Wrapper(); wasacacaowicmiyw: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto oksouuguouqowuyq; } self::$staticWrapper = new Wrapper(); oksouuguouqowuyq: return self::$staticWrapper; } }

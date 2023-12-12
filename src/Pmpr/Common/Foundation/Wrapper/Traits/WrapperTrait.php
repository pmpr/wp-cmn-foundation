<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65782da914af3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto aiaismsmsiymqumq; } $this->wrapper = new Wrapper(); aiaismsmsiymqumq: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto wuwuiwwcqmgsmisy; } self::$staticWrapper = new Wrapper(); wuwuiwwcqmgsmisy: return self::$staticWrapper; } }

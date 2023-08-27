<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64eb126a5ff93             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto yuqisiwgqacgmsym; } $this->wrapper = new Wrapper(); yuqisiwgqacgmsym: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto wickgagwgqqsomum; } self::$staticWrapper = new Wrapper(); wickgagwgqqsomum: return self::$staticWrapper; } }

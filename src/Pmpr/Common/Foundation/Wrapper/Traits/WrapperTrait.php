<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64417580becf9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto iayqwwsmsuwaykyw; } $this->wrapper = new Wrapper(); iayqwwsmsuwaykyw: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto gaqweioagqyciyaw; } self::$staticWrapper = new Wrapper(); gaqweioagqyciyaw: return self::$staticWrapper; } }

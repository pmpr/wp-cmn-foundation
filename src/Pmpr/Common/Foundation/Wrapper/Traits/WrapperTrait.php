<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             646a336b8f5d1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto ikgusckaomuoiggs; } $this->wrapper = new Wrapper(); ikgusckaomuoiggs: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto oykuimwkwcmuekci; } self::$staticWrapper = new Wrapper(); oykuimwkwcmuekci: return self::$staticWrapper; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642a74ea46da2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto oeoeeqeaokougsec; } $this->wrapper = new Wrapper(); oeoeeqeaokougsec: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto ikgusckaomuoiggs; } self::$staticWrapper = new Wrapper(); ikgusckaomuoiggs: return self::$staticWrapper; } }

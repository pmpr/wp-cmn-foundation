<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6570b300bc64f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto okygwyygkiooeciu; } $this->wrapper = new Wrapper(); okygwyygkiooeciu: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto mcqayqmuqikoygus; } self::$staticWrapper = new Wrapper(); mcqayqmuqikoygus: return self::$staticWrapper; } }

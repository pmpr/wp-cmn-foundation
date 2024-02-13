<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65cb506e7ea52             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto iauwkeeaqsgweeoo; } $this->wrapper = new Wrapper(); iauwkeeaqsgweeoo: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto aycqgowuwagcgque; } self::$staticWrapper = new Wrapper(); aycqgowuwagcgque: return self::$staticWrapper; } }

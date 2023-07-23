<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bd2aa8ad2d8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto ggmguqccswssgoyo; } $this->helper = new Helper(); ggmguqccswssgoyo: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto uuagyckakcaquqss; } self::$staticHelper = new Helper(); uuagyckakcaquqss: return self::$staticHelper; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             651831595d0db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto aiqekkyauwswayyq; } $this->helper = new Helper(); aiqekkyauwswayyq: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto mmcikqikqecaeswu; } self::$staticHelper = new Helper(); mmcikqikqecaeswu: return self::$staticHelper; } }

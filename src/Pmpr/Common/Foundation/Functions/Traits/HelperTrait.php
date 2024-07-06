<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6689685009849             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto egyksgscyqmieque; } $this->helper = new Helper(); egyksgscyqmieque: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto cgcymuikeqwuqaks; } self::$staticHelper = new Helper(); cgcymuikeqwuqaks: return self::$staticHelper; } }

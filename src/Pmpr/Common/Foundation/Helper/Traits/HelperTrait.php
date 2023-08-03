<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64cbb6afe4c2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto tokguaiieequuwwa; } $this->helper = new Helper(); tokguaiieequuwwa: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto ccgmicuyeoggoecu; } self::$staticHelper = new Helper(); ccgmicuyeoggoecu: return self::$staticHelper; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644fa31607f22             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto icageksksqqgmqom; } $this->helper = new Helper(); icageksksqqgmqom: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto qqcciieyaqwkcasi; } self::$staticHelper = new Helper(); qqcciieyaqwkcasi: return self::$staticHelper; } }

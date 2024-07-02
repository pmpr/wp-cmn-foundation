<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66846eedd73a1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto auguaocagomuuqqk; } $this->helper = new Helper(); auguaocagomuuqqk: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto mggqockcmokwiwuq; } self::$staticHelper = new Helper(); mggqockcmokwiwuq: return self::$staticHelper; } }

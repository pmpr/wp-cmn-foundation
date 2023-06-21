<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6492e761a69f3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto ooeaciyoeskuouqi; } $this->helper = new Helper(); ooeaciyoeskuouqi: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto eqkakgkyqqaewqiu; } self::$staticHelper = new Helper(); eqkakgkyqqaewqiu: return self::$staticHelper; } }

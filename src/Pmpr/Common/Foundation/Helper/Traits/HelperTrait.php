<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ff9b2c1034e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto imyqaycayqeucsau; } $this->helper = new Helper(); imyqaycayqeucsau: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto yiqskmikgqukkewq; } self::$staticHelper = new Helper(); yiqskmikgqukkewq: return self::$staticHelper; } }

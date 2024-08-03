<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66aeb5dd1a4cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto cycqgciuqgyacwyy; } $this->helper = new Helper(); cycqgciuqgyacwyy: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto wsqqoqwykgsoeweu; } self::$staticHelper = new Helper(); wsqqoqwykgsoeweu: return self::$staticHelper; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65536707cb9cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto oyqwymwomuameswa; } $this->helper = new Helper(); oyqwymwomuameswa: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto ogmogeeogucogway; } self::$staticHelper = new Helper(); ogmogeeogucogway: return self::$staticHelper; } }

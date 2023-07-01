<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             649ff185c9886             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto twusqqkmqgswisei; } $this->helper = new Helper(); twusqqkmqgswisei: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto ysykemiscamquoce; } self::$staticHelper = new Helper(); ysykemiscamquoce: return self::$staticHelper; } }

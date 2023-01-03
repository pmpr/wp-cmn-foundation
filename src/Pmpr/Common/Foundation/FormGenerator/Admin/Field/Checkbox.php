<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63b3ade7b310d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Admin\Field; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x63\150\145\x63\153\142\157\170"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = in_array($eqgoocgaqwqcimie, [self::ON, 1, "\x31"], true) ? self::ON : self::OFF; if (!($eqgoocgaqwqcimie === self::ON)) { goto iiuawywwoaeyauge; } $this->qcgocuceocquqcuw("\143\150\145\x63\153\145\x64", "\x63\x68\145\x63\153\x65\144"); iiuawywwoaeyauge: return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { return $this->oeeumggeiyyckkom(self::ON, $koegqoagisewcica)->oeeumggeiyyckkom(self::OFF, $yiygigeewmuiyceu); } }

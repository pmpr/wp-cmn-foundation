<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63af48985f427             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Admin\Field; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x63\150\x65\143\153\142\x6f\x78"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = in_array($eqgoocgaqwqcimie, [self::ON, 1, "\61"], true) ? self::ON : self::OFF; if (!($eqgoocgaqwqcimie === self::ON)) { goto iiuawywwoaeyauge; } $this->qcgocuceocquqcuw("\143\150\x65\x63\x6b\145\144", "\143\x68\145\143\x6b\x65\x64"); iiuawywwoaeyauge: return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { return $this->oeeumggeiyyckkom(self::ON, $koegqoagisewcica)->oeeumggeiyyckkom(self::OFF, $yiygigeewmuiyceu); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccef6810a3a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\143\x68\x65\x63\x6b\x62\157\x78"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = in_array($eqgoocgaqwqcimie, [self::ON, 1, "\x31"], true) ? self::ON : self::OFF; if (!($eqgoocgaqwqcimie === self::ON)) { goto amoygaweoeymiuiy; } $this->qcgocuceocquqcuw("\x63\x68\x65\143\x6b\x65\144", "\x63\x68\x65\x63\x6b\145\144"); amoygaweoeymiuiy: return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { return $this->oeeumggeiyyckkom(self::ON, $koegqoagisewcica)->oeeumggeiyyckkom(self::OFF, $yiygigeewmuiyceu); } }

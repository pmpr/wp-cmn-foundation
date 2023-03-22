<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             641ae95917404             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x63\150\x65\x63\x6b\142\157\x78"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? self::ON : self::OFF; $this->gmywsauuqwcmakuc(self::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); if (!($eqgoocgaqwqcimie === self::ON)) { goto mowauiysyiciqaaa; } $this->qcgocuceocquqcuw("\x63\150\145\143\153\145\144", "\143\150\x65\x63\153\x65\144"); mowauiysyiciqaaa: return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { return $this->oeeumggeiyyckkom(self::ON, $koegqoagisewcica)->oeeumggeiyyckkom(self::OFF, $yiygigeewmuiyceu); } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) : int { return $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? 1 : 0; } private function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return in_array($eqgoocgaqwqcimie, [self::ON, 1, "\x31"], true); } }

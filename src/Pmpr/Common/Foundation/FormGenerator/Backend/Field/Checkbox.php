<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6473742368602             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Checkbox extends Input { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\143\150\x65\x63\153\142\x6f\170"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $eqgoocgaqwqcimie = $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? self::ON : self::OFF; $this->gmywsauuqwcmakuc(self::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); if (!($eqgoocgaqwqcimie === self::ON)) { goto lwwuwssgsqccisgk; } $this->qcgocuceocquqcuw("\143\150\x65\x63\x6b\x65\x64", "\143\150\145\143\x6b\x65\144"); lwwuwssgsqccisgk: return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : self { return $this->oeeumggeiyyckkom(self::ON, $koegqoagisewcica)->oeeumggeiyyckkom(self::OFF, $yiygigeewmuiyceu); } public function yiiiqewsseywemqu($eqgoocgaqwqcimie) : int { return $this->ascqkksqiiwaouic($eqgoocgaqwqcimie) ? 1 : 0; } private function ascqkksqiiwaouic($eqgoocgaqwqcimie) : bool { return in_array($eqgoocgaqwqcimie, [self::ON, 1, "\61"], true); } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668c5b79bd636             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto mgwgiesscqoaqcau; } $aokagokqyuysuksm = "\x6d\141\x72\153\165\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); mgwgiesscqoaqcau: if ($sqeykgyoooqysmca) { goto ioacywuoyuskqmwy; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; ioacywuoyuskqmwy: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\x66\x69\x65\x6c\x64\x2d\x68\164\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto bgoygegmogcmeaou; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); bgoygegmogcmeaou: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\x73\x2d\x73\x70\x61\143\145"); return $this; } }

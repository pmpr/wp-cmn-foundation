<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668dab8c1d99f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto mgwgiesscqoaqcau; } $aokagokqyuysuksm = "\x6d\x61\x72\153\x75\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); mgwgiesscqoaqcau: if ($sqeykgyoooqysmca) { goto ioacywuoyuskqmwy; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; ioacywuoyuskqmwy: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x66\x69\145\154\144\55\x68\x74\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto bgoygegmogcmeaou; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); bgoygegmogcmeaou: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\x2d\163\160\141\x63\145"); return $this; } }

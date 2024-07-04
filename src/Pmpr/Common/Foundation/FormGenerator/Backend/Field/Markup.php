<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686f091cd5d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto mgwgiesscqoaqcau; } $aokagokqyuysuksm = "\x6d\x61\x72\153\x75\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); mgwgiesscqoaqcau: if ($sqeykgyoooqysmca) { goto ioacywuoyuskqmwy; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; ioacywuoyuskqmwy: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x66\x69\145\154\x64\55\150\x74\155\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto bgoygegmogcmeaou; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); bgoygegmogcmeaou: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\x73\x70\x61\143\x65"); return $this; } }

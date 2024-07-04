<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6686678adfa89             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto mgwgiesscqoaqcau; } $aokagokqyuysuksm = "\x6d\141\162\153\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); mgwgiesscqoaqcau: if ($sqeykgyoooqysmca) { goto ioacywuoyuskqmwy; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; ioacywuoyuskqmwy: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\146\151\145\154\x64\x2d\150\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto bgoygegmogcmeaou; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); bgoygegmogcmeaou: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\x73\160\141\143\145"); return $this; } }

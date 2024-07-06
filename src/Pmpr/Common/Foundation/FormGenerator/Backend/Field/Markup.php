<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66895817d513e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto mgwgiesscqoaqcau; } $aokagokqyuysuksm = "\155\141\162\153\165\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); mgwgiesscqoaqcau: if ($sqeykgyoooqysmca) { goto ioacywuoyuskqmwy; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; ioacywuoyuskqmwy: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\x66\151\145\x6c\144\x2d\x68\164\155\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto bgoygegmogcmeaou; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); bgoygegmogcmeaou: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\163\x70\x61\x63\x65"); return $this; } }

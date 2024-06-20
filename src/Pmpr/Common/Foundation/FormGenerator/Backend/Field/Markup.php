<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6673f4362f7f7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto geugsymgsiuuqccg; } $aokagokqyuysuksm = "\x6d\x61\x72\x6b\x75\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); geugsymgsiuuqccg: if ($sqeykgyoooqysmca) { goto mgwgiesscqoaqcau; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; mgwgiesscqoaqcau: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\x2d\146\x69\145\154\144\x2d\x68\164\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ioacywuoyuskqmwy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ioacywuoyuskqmwy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\x73\x2d\x73\160\x61\x63\145"); return $this; } }

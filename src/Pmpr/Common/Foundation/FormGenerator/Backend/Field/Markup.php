<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668421067646d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto geugsymgsiuuqccg; } $aokagokqyuysuksm = "\x6d\141\162\x6b\x75\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); geugsymgsiuuqccg: if ($sqeykgyoooqysmca) { goto mgwgiesscqoaqcau; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; mgwgiesscqoaqcau: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x66\151\145\x6c\144\x2d\x68\x74\155\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ioacywuoyuskqmwy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ioacywuoyuskqmwy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\163\160\x61\x63\145"); return $this; } }

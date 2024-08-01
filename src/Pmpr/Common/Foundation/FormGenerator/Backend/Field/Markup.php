<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ab90b39bd3e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto ukigmkeewuqomooc; } $aokagokqyuysuksm = "\x6d\x61\162\x6b\x75\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); ukigmkeewuqomooc: if ($sqeykgyoooqysmca) { goto wwgikwuigiiqsswq; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; wwgikwuigiiqsswq: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\146\151\145\x6c\144\x2d\150\x74\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto seyygcwcaogkmaqe; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); seyygcwcaogkmaqe: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\x73\x70\141\143\145"); return $this; } }

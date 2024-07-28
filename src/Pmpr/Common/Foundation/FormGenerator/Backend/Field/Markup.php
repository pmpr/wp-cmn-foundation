<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a68e6522f2a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto igmawmwssyskqqag; } $aokagokqyuysuksm = "\155\141\162\153\165\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); igmawmwssyskqqag: if ($sqeykgyoooqysmca) { goto iomwkkieqcswkkaw; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; iomwkkieqcswkkaw: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\146\151\145\x6c\144\x2d\x68\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto eussqkkimciywios; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); eussqkkimciywios: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\x2d\x73\160\141\143\145"); return $this; } }

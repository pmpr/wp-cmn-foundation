<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a5877b2049c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto igmawmwssyskqqag; } $aokagokqyuysuksm = "\155\x61\162\x6b\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); igmawmwssyskqqag: if ($sqeykgyoooqysmca) { goto iomwkkieqcswkkaw; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; iomwkkieqcswkkaw: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\146\x69\x65\154\144\55\150\x74\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto eussqkkimciywios; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); eussqkkimciywios: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\163\160\x61\x63\x65"); return $this; } }

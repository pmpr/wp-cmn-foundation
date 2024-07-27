<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a57cff413d7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto igmawmwssyskqqag; } $aokagokqyuysuksm = "\x6d\141\x72\153\165\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); igmawmwssyskqqag: if ($sqeykgyoooqysmca) { goto iomwkkieqcswkkaw; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; iomwkkieqcswkkaw: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\146\x69\x65\x6c\144\55\150\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto eussqkkimciywios; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); eussqkkimciywios: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\x2d\x73\x70\x61\143\145"); return $this; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665c233e05606             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto uoykoouwyqwskyqs; } $aokagokqyuysuksm = "\155\141\x72\x6b\x75\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); uoykoouwyqwskyqs: if ($sqeykgyoooqysmca) { goto umquossmsyaiciag; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; umquossmsyaiciag: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\x66\x69\x65\154\x64\x2d\x68\164\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ggooeiyqcockogcy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ggooeiyqcockogcy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\x73\x70\141\x63\x65"); return $this; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6654cb73b3c9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto uoykoouwyqwskyqs; } $aokagokqyuysuksm = "\x6d\x61\x72\153\x75\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); uoykoouwyqwskyqs: if ($sqeykgyoooqysmca) { goto umquossmsyaiciag; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; umquossmsyaiciag: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\x66\x69\x65\154\144\x2d\150\x74\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ggooeiyqcockogcy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ggooeiyqcockogcy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\x2d\163\160\141\x63\145"); return $this; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665b6a9b937f2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto uoykoouwyqwskyqs; } $aokagokqyuysuksm = "\x6d\x61\162\x6b\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); uoykoouwyqwskyqs: if ($sqeykgyoooqysmca) { goto umquossmsyaiciag; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; umquossmsyaiciag: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\146\x69\145\x6c\144\55\150\164\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto ggooeiyqcockogcy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); ggooeiyqcockogcy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\x2d\x73\x70\x61\x63\145"); return $this; } }

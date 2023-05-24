<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             646e287f9b7c2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Section; trait SectionsTrait { protected array $sections = []; public function suuogccckocgseyg() : array { return $this->sections; } public function mgwewyykukaawcmo() : bool { return !empty($this->suuogccckocgseyg()); } public function wmwgqekyoiiegcaq(array $mgiqqesweuqmsymo) : self { $this->sections = $mgiqqesweuqmsymo; return $this; } public function mgisqyswkkuceisu(array $mgiqqesweuqmsymo) : self { foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) { if (!$awcmekyiwwkeyisq instanceof Section) { goto kyaysckiwskgogci; } $this->kwkugmqouisgkqig($awcmekyiwwkeyisq); kyaysckiwskgogci: wicguyksogckqums: } aikuwguwuiekouoo: return $this; } public function kwkugmqouisgkqig(Section $awcmekyiwwkeyisq) : self { if ($awcmekyiwwkeyisq->yywskysiycwkwsgw()) { goto eageyyymyekskmue; } $awcmekyiwwkeyisq->jyumyyugiwwiqomk(count($this->suuogccckocgseyg()) + 1); eageyyymyekskmue: $this->sections[$awcmekyiwwkeyisq->mwikyscisascoeea()] = $awcmekyiwwkeyisq; return $this; } }

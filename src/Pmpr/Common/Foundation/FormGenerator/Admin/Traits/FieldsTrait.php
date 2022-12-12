<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63978153c844c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Admin\Traits; use Pmpr\Common\Foundation\FormGenerator\Admin\Field\Field; trait FieldsTrait { protected array $fields = []; public function ugmceccgwaaaigiy() : ?array { return $this->fields; } public function iqoyuqgssusgimwa() : bool { return !empty($this->ugmceccgwaaaigiy()); } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if ($aiowsaccomcoikus->yywskysiycwkwsgw()) { goto qumkwsqqocooyuoq; } $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); qumkwsqqocooyuoq: $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto wwswmaewcaisauei; } $this->mkksewyosgeumwsa($aiowsaccomcoikus); wwswmaewcaisauei: kkewoqqowugagwoy: } gcskyqewysqaceeg: return $this; } }

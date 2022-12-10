<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639497eb7718d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Admin\Traits; use Pmpr\Common\Foundation\FormGenerator\Admin\Field\Field; trait FieldsTrait { protected array $fields = []; public function ugmceccgwaaaigiy() : ?array { return $this->fields; } public function iqoyuqgssusgimwa() : bool { return !empty($this->ugmceccgwaaaigiy()); } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if ($aiowsaccomcoikus->yywskysiycwkwsgw()) { goto cigesysuauaiccms; } $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); cigesysuauaiccms: $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto kkewoqqowugagwoy; } $this->mkksewyosgeumwsa($aiowsaccomcoikus); kkewoqqowugagwoy: gcskyqewysqaceeg: } qumkwsqqocooyuoq: return $this; } }

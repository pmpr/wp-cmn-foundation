<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643baf2730c00             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; trait FieldsTrait { protected array $fields = []; public function ugmceccgwaaaigiy() : ?array { return $this->fields; } public function iqoyuqgssusgimwa() : bool { return !empty($this->ugmceccgwaaaigiy()); } public function acakyumkgoeiskqq(array $ikgwqyuyckaewsow) : self { $this->fields = $ikgwqyuyckaewsow; return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if ($aiowsaccomcoikus->yywskysiycwkwsgw()) { goto sswmkkcyawawqwwg; } $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); sswmkkcyawawqwwg: $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto agwsusimqmoesgck; } $this->mkksewyosgeumwsa($aiowsaccomcoikus); agwsusimqmoesgck: yikyagqossasyqcu: } kaocmesokyiikyci: return $this; } }

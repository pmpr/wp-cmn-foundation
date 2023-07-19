<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64b788ef4d9d0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\FormGenerator\Field; trait FieldsTrait { protected array $fields = []; public function ugmceccgwaaaigiy() : ?array { return $this->fields; } public function iqoyuqgssusgimwa() : bool { return !empty($this->ugmceccgwaaaigiy()); } public function acakyumkgoeiskqq(array $ikgwqyuyckaewsow) : self { $this->fields = $ikgwqyuyckaewsow; return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if ($aiowsaccomcoikus->yywskysiycwkwsgw()) { goto uikgsuwekyomyqea; } $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); uikgsuwekyomyqea: $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto kyqcykkugmceeoeo; } $this->mkksewyosgeumwsa($aiowsaccomcoikus); kyqcykkugmceeoeo: wuysmaasqoqeeauk: } yyqckcwiwgegocsu: return $this; } }

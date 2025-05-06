<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             681a830d4ffdd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field\Selector; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; abstract class Common { use ToArrayTrait, WrapperTrait, HelperTrait; protected $parent; public function __construct(string $aokagokqyuysuksm, string $meqocwsecsywiiqs = '') { $this->id = $aokagokqyuysuksm; $this->title = $meqocwsecsywiiqs; } protected ?string $id = null; protected ?string $title = null; public function ygqycmmkoiuocoia() { return $this->parent; } public function mmuyuqussqkgkega(?string $omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } }

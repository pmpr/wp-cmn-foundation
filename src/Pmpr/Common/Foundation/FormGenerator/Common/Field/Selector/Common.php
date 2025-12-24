<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             694c4d3f4e85c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Common\Field\Selector; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; abstract class Common { use ToArrayTrait, WrapperTrait, HelperTrait; protected $parent; public function __construct(string $aokagokqyuysuksm, string $meqocwsecsywiiqs = '') { $this->id = $aokagokqyuysuksm; $this->title = $meqocwsecsywiiqs; } protected ?string $id = null; protected ?string $title = null; public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; return $this; } public function ygqycmmkoiuocoia() { return $this->parent; } public function mmuyuqussqkgkega(?string $omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } }

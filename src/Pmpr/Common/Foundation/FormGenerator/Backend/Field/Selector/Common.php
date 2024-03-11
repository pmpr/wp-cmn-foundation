<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ef357e86046             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field\Selector; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; abstract class Common implements ConstantInterface { use ToArrayTrait, WrapperTrait, HelperTrait; protected $parent; public function __construct(string $aokagokqyuysuksm, string $meqocwsecsywiiqs = '') { $this->id = $aokagokqyuysuksm; $this->title = $meqocwsecsywiiqs; } protected ?string $id = null; protected ?string $title = null; public function ygqycmmkoiuocoia() { return $this->parent; } public function mmuyuqussqkgkega(?string $omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } }

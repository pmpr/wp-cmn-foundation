<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669d5640862e9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Element; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\AttributeTrait; abstract class Element implements ConstantInterface { use HelperTrait, WrapperTrait, AttributeTrait; protected ?string $id = null; protected ?string $tag = null; public function __construct(string $aokagokqyuysuksm, string $scwiymciagumsuiw) { $this->id = $aokagokqyuysuksm; $this->tag = $scwiymciagumsuiw; } public function render(string $ewgwqamkygiqaawc) : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($this->tag, $this->ccekeuwwqqoiwuwy(), $ewgwqamkygiqaawc); } }

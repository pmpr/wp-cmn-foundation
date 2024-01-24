<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65b0ce75e5a31             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Element; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Traits\AttributeTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; abstract class Element implements ConstantInterface { use HelperTrait, WrapperTrait, AttributeTrait; protected ?string $id = null; protected ?string $tag = null; public function __construct(string $aokagokqyuysuksm, string $scwiymciagumsuiw) { $this->id = $aokagokqyuysuksm; $this->tag = $scwiymciagumsuiw; } public function render(string $ewgwqamkygiqaawc) : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($this->tag, $this->ccekeuwwqqoiwuwy(), $ewgwqamkygiqaawc); } }

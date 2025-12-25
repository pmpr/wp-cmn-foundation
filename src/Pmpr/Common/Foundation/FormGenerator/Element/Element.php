<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             694c855a2faf7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Element; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\AttributeTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; abstract class Element { use HelperTrait, WrapperTrait, ToArrayTrait, AttributeTrait; protected ?string $id = null; protected ?string $tag = null; public function __construct(string $aokagokqyuysuksm, string $scwiymciagumsuiw) { $this->id = $aokagokqyuysuksm; $this->tag = $scwiymciagumsuiw; } public function render(string $ewgwqamkygiqaawc) : string { return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq($this->tag, $this->ccekeuwwqqoiwuwy(), $ewgwqamkygiqaawc); } }

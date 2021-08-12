<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $FpNMX, ?string $ldTR9) { $this->title = $ldTR9; parent::__construct($FpNMX); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $ldTR9) : self { $this->title = $ldTR9; return $this; } }

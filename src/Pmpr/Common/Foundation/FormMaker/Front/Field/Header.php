<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $CDV1j, ?string $hTPi6) { $this->title = $hTPi6; parent::__construct($CDV1j); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $hTPi6) : self { $this->title = $hTPi6; return $this; } }

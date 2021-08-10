<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $IuvAA, ?string $pqHaw) { $this->title = $pqHaw; parent::__construct($IuvAA); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $pqHaw) : self { $this->title = $pqHaw; return $this; } }

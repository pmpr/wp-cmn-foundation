<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $qHABt, ?string $InIXJ) { $this->title = $InIXJ; parent::__construct($qHABt); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $InIXJ) : self { $this->title = $InIXJ; return $this; } }

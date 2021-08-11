<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $yV1xT, ?string $iOn70) { $this->title = $iOn70; parent::__construct($yV1xT); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $iOn70) : self { $this->title = $iOn70; return $this; } }

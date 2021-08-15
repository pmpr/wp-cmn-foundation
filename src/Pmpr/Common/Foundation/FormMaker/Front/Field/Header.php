<?php
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class Header extends Html { public function __construct(?string $CQpN5, ?string $Jxkvx) { $this->title = $Jxkvx; parent::__construct($CQpN5); } protected ?string $title = null; public function getTitle() : ?string { return $this->title; } public function setTitle(?string $Jxkvx) : self { $this->title = $Jxkvx; return $this; } }

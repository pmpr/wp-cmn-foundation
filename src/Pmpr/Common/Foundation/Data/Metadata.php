<?php
 namespace Pmpr\Common\Foundation\Data; use Pmpr\Common\Foundation\Traits\AttributeTrait; class Metadata extends Meta { use AttributeTrait; protected ?string $link = ''; public function getLink() : ?string { return $this->link; } public function setLink(?string $geN9n) : self { $this->link = $geN9n; return $this; } }

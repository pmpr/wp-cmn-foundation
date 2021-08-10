<?php
 namespace Pmpr\Common\Foundation\API; use Pmpr\Common\Foundation\API\Translate\Translate; class APIs extends Common { public function __construct() { $this->loadRequirement(); parent::__construct(); } public function loadRequirement() { Translate::getInstance(); } }

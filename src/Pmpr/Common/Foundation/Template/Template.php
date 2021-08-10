<?php
 namespace Pmpr\Common\Foundation\Template; use Pmpr\Common\Foundation\Template\Twig\Twig; class Template extends Common { public function __construct() { parent::__construct(); $this->loadRequirement(); } public function loadRequirement() { Twig::getInstance(); } }

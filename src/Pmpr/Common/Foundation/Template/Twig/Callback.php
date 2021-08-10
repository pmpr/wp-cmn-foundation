<?php
 namespace Pmpr\Common\Foundation\Template\Twig; abstract class Callback extends Common { protected ?Engine $twig = null; public function __construct(Engine $EXZ_1) { $this->twig = $EXZ_1; $this->loadRequirement(); parent::__construct(); } public function getTwig() : Engine { return $this->twig; } public abstract function loadRequirement(); }

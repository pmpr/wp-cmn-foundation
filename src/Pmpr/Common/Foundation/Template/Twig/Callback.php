<?php
 namespace Pmpr\Common\Foundation\Template\Twig; abstract class Callback extends Common { protected ?Engine $twig = null; public function __construct(Engine $e1uzk) { $this->twig = $e1uzk; $this->loadRequirement(); parent::__construct(); } public function getTwig() : Engine { return $this->twig; } public abstract function loadRequirement(); }

<?php
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Compiler; use Twig\Node\Node; class BreakNode extends Node { public function compile(Compiler $GAAdd) { $GAAdd->addDebugInfo($this); $GAAdd->write("\142\162\x65\141\153\73\xa"); } }

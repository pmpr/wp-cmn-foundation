<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662e3e3136c47             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622d0cf0f290d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } }

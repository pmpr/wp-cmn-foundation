<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3fc3df2d9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } }

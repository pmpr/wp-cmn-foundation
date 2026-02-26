<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             69a0b3a7a4aa3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Extension\AbstractExtension; use Twig\TwigTest; class Extension extends AbstractExtension { public function getTokenParsers() : array { return [new BreakToken()]; } public function kwckyseyuaauaqau() { return [ new TwigTest('array', [$this, 'casemmqcsgmemwyg']), new TwigTest('object', [$this, 'awqscowmskeuymeu']), new TwigTest('numeric', [$this, 'kwcsogeoomgwccsy']), ]; } public function awqscowmskeuymeu($mmomgiqeqykoeukg) : bool { return is_object($mmomgiqeqykoeukg); } public function casemmqcsgmemwyg($mmomgiqeqykoeukg) : bool { return is_array($mmomgiqeqykoeukg); } public function kwcsogeoomgwccsy($mmomgiqeqykoeukg) : bool { return is_numeric($mmomgiqeqykoeukg); } }

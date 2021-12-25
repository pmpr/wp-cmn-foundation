<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c6bc535821c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); $maykoqyekaegigga = $this->parser->getStream(); $maykoqyekaegigga->expect(Token::amqsgmemiagqykyq); $scwiymciagumsuiw = $this->getTag(); return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); } public function getTag() : string { return "\x62\162\145\x61\x6b"; } }

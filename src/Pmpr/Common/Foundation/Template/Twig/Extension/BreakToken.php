<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61604729e8535             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto suqkuqygkkgwyaie; skkamseieeusycye: $scwiymciagumsuiw = $this->getTag(); goto cgiscsqwwgqqaeqi; suqkuqygkkgwyaie: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto soaccwqimeksgwiw; soaccwqimeksgwiw: $maykoqyekaegigga = $this->parser->getStream(); goto wiysogeqqwgioyka; cgiscsqwwgqqaeqi: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto syiqkaasoueowwui; wiysogeqqwgioyka: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto skkamseieeusycye; syiqkaasoueowwui: } public function getTag() : string { return "\142\x72\x65\141\x6b"; } }

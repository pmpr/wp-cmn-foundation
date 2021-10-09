<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61613811390b4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto suqkuqygkkgwyaie; cgiscsqwwgqqaeqi: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto syiqkaasoueowwui; wiysogeqqwgioyka: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto skkamseieeusycye; skkamseieeusycye: $scwiymciagumsuiw = $this->getTag(); goto cgiscsqwwgqqaeqi; soaccwqimeksgwiw: $maykoqyekaegigga = $this->parser->getStream(); goto wiysogeqqwgioyka; suqkuqygkkgwyaie: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto soaccwqimeksgwiw; syiqkaasoueowwui: } public function getTag() : string { return "\x62\162\x65\x61\153"; } }

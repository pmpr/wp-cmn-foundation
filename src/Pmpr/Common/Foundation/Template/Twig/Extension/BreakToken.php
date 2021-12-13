<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b78f4e5fce8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto igiiismqwemkwqmk; uqiwessaqyguckii: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto wmmyckieuaqaksqw; eokeagokwuuieaey: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto ccekuckykcgemggy; wmmyckieuaqaksqw: $scwiymciagumsuiw = $this->getTag(); goto eokeagokwuuieaey; igiiismqwemkwqmk: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto eyyswmuymwegceic; eyyswmuymwegceic: $maykoqyekaegigga = $this->parser->getStream(); goto uqiwessaqyguckii; ccekuckykcgemggy: } public function getTag() : string { return "\142\162\x65\141\x6b"; } }

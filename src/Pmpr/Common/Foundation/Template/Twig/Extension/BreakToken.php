<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b7b6f01188c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto igiiismqwemkwqmk; eyyswmuymwegceic: $maykoqyekaegigga = $this->parser->getStream(); goto uqiwessaqyguckii; eokeagokwuuieaey: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto ccekuckykcgemggy; wmmyckieuaqaksqw: $scwiymciagumsuiw = $this->getTag(); goto eokeagokwuuieaey; uqiwessaqyguckii: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto wmmyckieuaqaksqw; igiiismqwemkwqmk: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto eyyswmuymwegceic; ccekuckykcgemggy: } public function getTag() : string { return "\x62\x72\145\141\x6b"; } }

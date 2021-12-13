<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b79f70efe60             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto igiiismqwemkwqmk; igiiismqwemkwqmk: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto eyyswmuymwegceic; wmmyckieuaqaksqw: $scwiymciagumsuiw = $this->getTag(); goto eokeagokwuuieaey; eokeagokwuuieaey: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto ccekuckykcgemggy; uqiwessaqyguckii: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto wmmyckieuaqaksqw; eyyswmuymwegceic: $maykoqyekaegigga = $this->parser->getStream(); goto uqiwessaqyguckii; ccekuckykcgemggy: } public function getTag() : string { return "\x62\162\145\x61\x6b"; } }

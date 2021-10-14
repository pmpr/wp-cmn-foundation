<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61680ee83d28e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto ooeausyowguqicuo; ooeausyowguqicuo: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto egyyiccaeeiooaua; scisgsyemmsekgos: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto cewmoqyysgsmuiya; cewmoqyysgsmuiya: $scwiymciagumsuiw = $this->getTag(); goto igooksugieceoege; igooksugieceoege: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto omqiayeucoioqoao; egyyiccaeeiooaua: $maykoqyekaegigga = $this->parser->getStream(); goto scisgsyemmsekgos; omqiayeucoioqoao: } public function getTag() : string { return "\142\162\145\141\x6b"; } }

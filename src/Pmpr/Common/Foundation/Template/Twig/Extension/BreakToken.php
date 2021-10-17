<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616c0744b8e35             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto ooeausyowguqicuo; ooeausyowguqicuo: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto egyyiccaeeiooaua; egyyiccaeeiooaua: $maykoqyekaegigga = $this->parser->getStream(); goto scisgsyemmsekgos; igooksugieceoege: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto omqiayeucoioqoao; cewmoqyysgsmuiya: $scwiymciagumsuiw = $this->getTag(); goto igooksugieceoege; scisgsyemmsekgos: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto cewmoqyysgsmuiya; omqiayeucoioqoao: } public function getTag() : string { return "\142\x72\x65\141\x6b"; } }

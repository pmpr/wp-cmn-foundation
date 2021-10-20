<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616fe2c161c0b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto ooeausyowguqicuo; egyyiccaeeiooaua: $maykoqyekaegigga = $this->parser->getStream(); goto scisgsyemmsekgos; scisgsyemmsekgos: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto cewmoqyysgsmuiya; igooksugieceoege: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto omqiayeucoioqoao; ooeausyowguqicuo: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto egyyiccaeeiooaua; cewmoqyysgsmuiya: $scwiymciagumsuiw = $this->getTag(); goto igooksugieceoege; omqiayeucoioqoao: } public function getTag() : string { return "\142\162\x65\x61\153"; } }

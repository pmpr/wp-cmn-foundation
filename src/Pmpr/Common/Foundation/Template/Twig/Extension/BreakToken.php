<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b802bcf786             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto wwauaucuwsokocmm; wwauaucuwsokocmm: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto eccymasqomswiwug; acoqamisuacwkqyo: $scwiymciagumsuiw = $this->getTag(); goto eugsgogsukuqwyou; yaaisamcwuuowiua: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto acoqamisuacwkqyo; eugsgogsukuqwyou: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto yeyskwsagaowouas; eccymasqomswiwug: $maykoqyekaegigga = $this->parser->getStream(); goto yaaisamcwuuowiua; yeyskwsagaowouas: } public function getTag() : string { return "\142\x72\x65\141\x6b"; } }

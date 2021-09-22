<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b833406a70             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto wwauaucuwsokocmm; eugsgogsukuqwyou: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto yeyskwsagaowouas; yaaisamcwuuowiua: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto acoqamisuacwkqyo; wwauaucuwsokocmm: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto eccymasqomswiwug; acoqamisuacwkqyo: $scwiymciagumsuiw = $this->getTag(); goto eugsgogsukuqwyou; eccymasqomswiwug: $maykoqyekaegigga = $this->parser->getStream(); goto yaaisamcwuuowiua; yeyskwsagaowouas: } public function getTag() : string { return "\142\162\x65\x61\x6b"; } }

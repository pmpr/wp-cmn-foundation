<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b9be7819d4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto wwauaucuwsokocmm; acoqamisuacwkqyo: $scwiymciagumsuiw = $this->getTag(); goto eugsgogsukuqwyou; wwauaucuwsokocmm: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto eccymasqomswiwug; eugsgogsukuqwyou: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto yeyskwsagaowouas; eccymasqomswiwug: $maykoqyekaegigga = $this->parser->getStream(); goto yaaisamcwuuowiua; yaaisamcwuuowiua: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto acoqamisuacwkqyo; yeyskwsagaowouas: } public function getTag() : string { return "\x62\162\x65\x61\x6b"; } }

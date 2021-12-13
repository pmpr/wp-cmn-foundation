<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b784ffc499c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto kiguekumyiiqkyua; saiokooswwqwcqwc: $maykoqyekaegigga = $this->parser->getStream(); goto eicwasoagugywwcq; mqcoeuuysyoqmcwi: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto swkyimkgssqseqme; kkaoieuywsiiqkys: $scwiymciagumsuiw = $this->getTag(); goto mqcoeuuysyoqmcwi; eicwasoagugywwcq: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto kkaoieuywsiiqkys; kiguekumyiiqkyua: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto saiokooswwqwcqwc; swkyimkgssqseqme: } public function getTag() : string { return "\x62\162\145\141\x6b"; } }

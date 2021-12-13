<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b7865757c4b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto kiguekumyiiqkyua; kiguekumyiiqkyua: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto saiokooswwqwcqwc; kkaoieuywsiiqkys: $scwiymciagumsuiw = $this->getTag(); goto mqcoeuuysyoqmcwi; mqcoeuuysyoqmcwi: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto swkyimkgssqseqme; saiokooswwqwcqwc: $maykoqyekaegigga = $this->parser->getStream(); goto eicwasoagugywwcq; eicwasoagugywwcq: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto kkaoieuywsiiqkys; swkyimkgssqseqme: } public function getTag() : string { return "\x62\162\145\141\153"; } }

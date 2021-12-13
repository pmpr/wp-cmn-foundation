<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b78d10410ba             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto kiguekumyiiqkyua; saiokooswwqwcqwc: $maykoqyekaegigga = $this->parser->getStream(); goto eicwasoagugywwcq; kiguekumyiiqkyua: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto saiokooswwqwcqwc; kkaoieuywsiiqkys: $scwiymciagumsuiw = $this->getTag(); goto mqcoeuuysyoqmcwi; eicwasoagugywwcq: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto kkaoieuywsiiqkys; mqcoeuuysyoqmcwi: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto swkyimkgssqseqme; swkyimkgssqseqme: } public function getTag() : string { return "\x62\x72\x65\x61\x6b"; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b785d047454             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto kiguekumyiiqkyua; saiokooswwqwcqwc: $maykoqyekaegigga = $this->parser->getStream(); goto eicwasoagugywwcq; mqcoeuuysyoqmcwi: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto swkyimkgssqseqme; kiguekumyiiqkyua: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto saiokooswwqwcqwc; eicwasoagugywwcq: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto kkaoieuywsiiqkys; kkaoieuywsiiqkys: $scwiymciagumsuiw = $this->getTag(); goto mqcoeuuysyoqmcwi; swkyimkgssqseqme: } public function getTag() : string { return "\x62\162\x65\x61\x6b"; } }

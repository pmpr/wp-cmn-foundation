<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74f4dc7e1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto ksegwekckiamcwey; ksegwekckiamcwey: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto wkgagkmogekswsaq; wkgagkmogekswsaq: $maykoqyekaegigga = $this->parser->getStream(); goto soaqkuqagcyakgie; kiguekumyiiqkyua: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto saiokooswwqwcqwc; soaqkuqagcyakgie: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto kigqkyyqusckyoug; kigqkyyqusckyoug: $scwiymciagumsuiw = $this->getTag(); goto kiguekumyiiqkyua; saiokooswwqwcqwc: } public function getTag() : string { return "\142\162\x65\141\x6b"; } }

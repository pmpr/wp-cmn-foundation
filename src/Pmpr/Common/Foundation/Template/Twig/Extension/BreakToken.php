<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791523fa4639             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); $maykoqyekaegigga = $this->parser->getStream(); $sqeykgyoooqysmca = Token::BLOCK_END_TYPE; $maykoqyekaegigga->expect($sqeykgyoooqysmca); $scwiymciagumsuiw = $this->getTag(); return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); } public function getTag() : string { return "\x62\x72\145\141\153"; } }

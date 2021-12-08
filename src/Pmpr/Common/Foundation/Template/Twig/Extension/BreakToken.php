<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b07b697ecab             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto qwewqcaomcqwwaqg; wcuqseiqgmkiagqo: $scwiymciagumsuiw = $this->getTag(); goto qaokmiyayqscsoey; imekyuaciwaewsyg: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto wcuqseiqgmkiagqo; cuoomamgiqewcaga: $maykoqyekaegigga = $this->parser->getStream(); goto imekyuaciwaewsyg; qwewqcaomcqwwaqg: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto cuoomamgiqewcaga; qaokmiyayqscsoey: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto sesuguskosoyouaq; sesuguskosoyouaq: } public function getTag() : string { return "\x62\162\x65\141\153"; } }

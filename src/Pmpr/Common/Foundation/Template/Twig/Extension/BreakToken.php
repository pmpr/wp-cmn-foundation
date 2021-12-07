<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe1518b128             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto qwewqcaomcqwwaqg; wcuqseiqgmkiagqo: $scwiymciagumsuiw = $this->getTag(); goto qaokmiyayqscsoey; imekyuaciwaewsyg: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto wcuqseiqgmkiagqo; qwewqcaomcqwwaqg: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto cuoomamgiqewcaga; qaokmiyayqscsoey: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto sesuguskosoyouaq; cuoomamgiqewcaga: $maykoqyekaegigga = $this->parser->getStream(); goto imekyuaciwaewsyg; sesuguskosoyouaq: } public function getTag() : string { return "\142\x72\x65\141\153"; } }

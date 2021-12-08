<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b083e12a430             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template\Twig\Extension; use Twig\Error\SyntaxError; use Twig\Token; use Twig\TokenParser\AbstractTokenParser; class BreakToken extends AbstractTokenParser { public function parse(Token $mgegoogckgsumooq) : BreakNode { goto qwewqcaomcqwwaqg; qwewqcaomcqwwaqg: $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine(); goto cuoomamgiqewcaga; wcuqseiqgmkiagqo: $scwiymciagumsuiw = $this->getTag(); goto qaokmiyayqscsoey; cuoomamgiqewcaga: $maykoqyekaegigga = $this->parser->getStream(); goto imekyuaciwaewsyg; imekyuaciwaewsyg: $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE); goto wcuqseiqgmkiagqo; qaokmiyayqscsoey: return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw); goto sesuguskosoyouaq; sesuguskosoyouaq: } public function getTag() : string { return "\x62\162\x65\x61\x6b"; } }

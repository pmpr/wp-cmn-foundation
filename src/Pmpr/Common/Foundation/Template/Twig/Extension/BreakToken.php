<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig\Extension;

use Twig\Error\SyntaxError;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;

class BreakToken extends AbstractTokenParser
{
    
    public function parse(Token $mgegoogckgsumooq) : BreakNode
    {
        goto omkocsuyieykumsw;
        omkocsuyieykumsw:
        
        $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine();
        goto iwoueqiswogoyeuk;
        ygawggoccwiqyaqy:
        
        $scwiymciagumsuiw = $this->getTag();
        goto wiiyoqsikgcqqygi;
        wiiyoqsikgcqqygi:
        return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw);
        goto umuseoycuocwmkwq;
        iwoueqiswogoyeuk:
        
        $maykoqyekaegigga = $this->parser->getStream();
        goto ycyigosuicckquco;
        ycyigosuicckquco:
        
        $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE);
        goto ygawggoccwiqyaqy;
        umuseoycuocwmkwq:
    }
    
    public function getTag() : string
    {
        return "\142\x72\x65\x61\x6b";
    }
}

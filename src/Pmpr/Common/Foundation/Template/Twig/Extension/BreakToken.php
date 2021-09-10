<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        ygawggoccwiqyaqy:
        
        $scwiymciagumsuiw = $this->getTag();
        goto wiiyoqsikgcqqygi;
        ycyigosuicckquco:
        
        $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE);
        goto ygawggoccwiqyaqy;
        iwoueqiswogoyeuk:
        
        $maykoqyekaegigga = $this->parser->getStream();
        goto ycyigosuicckquco;
        wiiyoqsikgcqqygi:
        return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw);
        goto umuseoycuocwmkwq;
        omkocsuyieykumsw:
        
        $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine();
        goto iwoueqiswogoyeuk;
        umuseoycuocwmkwq:
    }
    
    public function getTag() : string
    {
        return "\142\x72\x65\141\153";
    }
}

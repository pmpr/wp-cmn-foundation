<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        omkocsuyieykumsw:
        
        $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine();
        goto iwoueqiswogoyeuk;
        wiiyoqsikgcqqygi:
        return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw);
        goto umuseoycuocwmkwq;
        iwoueqiswogoyeuk:
        
        $maykoqyekaegigga = $this->parser->getStream();
        goto ycyigosuicckquco;
        umuseoycuocwmkwq:
    }
    
    public function getTag() : string
    {
        return "\x62\x72\145\x61\153";
    }
}

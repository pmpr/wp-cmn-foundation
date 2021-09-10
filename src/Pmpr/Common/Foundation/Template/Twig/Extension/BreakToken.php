<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        iwoueqiswogoyeuk:
        
        $maykoqyekaegigga = $this->parser->getStream();
        goto ycyigosuicckquco;
        wiiyoqsikgcqqygi:
        return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw);
        goto umuseoycuocwmkwq;
        ygawggoccwiqyaqy:
        
        $scwiymciagumsuiw = $this->getTag();
        goto wiiyoqsikgcqqygi;
        omkocsuyieykumsw:
        
        $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine();
        goto iwoueqiswogoyeuk;
        ycyigosuicckquco:
        
        $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE);
        goto ygawggoccwiqyaqy;
        umuseoycuocwmkwq:
    }
    
    public function getTag() : string
    {
        return "\x62\162\145\141\153";
    }
}

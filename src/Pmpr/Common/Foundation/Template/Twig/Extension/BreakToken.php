<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        iwoueqiswogoyeuk:
        
        $maykoqyekaegigga = $this->parser->getStream();
        goto ycyigosuicckquco;
        ycyigosuicckquco:
        
        $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE);
        goto ygawggoccwiqyaqy;
        wiiyoqsikgcqqygi:
        return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw);
        goto umuseoycuocwmkwq;
        ygawggoccwiqyaqy:
        
        $scwiymciagumsuiw = $this->getTag();
        goto wiiyoqsikgcqqygi;
        umuseoycuocwmkwq:
    }
    
    public function getTag() : string
    {
        return "\x62\x72\145\x61\x6b";
    }
}

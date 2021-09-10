<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto okimiwmewgssqemo;
        gmcgckcqceckmacq:
        
        $maykoqyekaegigga = $this->parser->getStream();
        goto qmuyumaoyqiiqqki;
        iwoueqiswogoyeuk:
        return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw);
        goto ycyigosuicckquco;
        qmuyumaoyqiiqqki:
        
        $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE);
        goto omkocsuyieykumsw;
        omkocsuyieykumsw:
        
        $scwiymciagumsuiw = $this->getTag();
        goto iwoueqiswogoyeuk;
        okimiwmewgssqemo:
        
        $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine();
        goto gmcgckcqceckmacq;
        ycyigosuicckquco:
    }
    
    public function getTag() : string
    {
        return "\142\162\145\x61\153";
    }
}

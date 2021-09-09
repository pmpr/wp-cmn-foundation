<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto gewsiguqiwckayiu;
        gewsiguqiwckayiu:
        
        $mkgomsmocgwiwyui = $mgegoogckgsumooq->getLine();
        goto sgsasqyooquayyss;
        sgsasqyooquayyss:
        
        $maykoqyekaegigga = $this->parser->getStream();
        goto eoigswoesmsgwcsu;
        ouemywaioiewaukw:
        return new BreakNode([], [], $mkgomsmocgwiwyui, $scwiymciagumsuiw);
        goto yguywoyayoeuakim;
        eoigswoesmsgwcsu:
        
        $maykoqyekaegigga->expect(Token::BLOCK_END_TYPE);
        goto iyakugyowcmiuqoi;
        iyakugyowcmiuqoi:
        
        $scwiymciagumsuiw = $this->getTag();
        goto ouemywaioiewaukw;
        yguywoyayoeuakim:
    }
    
    public function getTag() : string
    {
        return "\x62\162\145\x61\153";
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Html extends Common
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        goto yiuuiegcgmqwqyqm;
        gywwsuewqemcisae:
        $ekiuyucoiagmscgy = ManipulateArray::get($aiowsaccomcoikus->args, "\x63\157\x6e\164\x65\156\x74\137\x63\142");
        goto gkgemsygssqimikw;
        yiuuiegcgmqwqyqm:
        
        $wwgucssaecqekuek = $ymygiwwuwyuakysk->parse_args($this->gueasuouwqysmomu(), ["\151\144" => $ymygiwwuwyuakysk->_id()]);
        goto gywwsuewqemcisae;
        esyigamqqaoyecyc:
        echo sprintf("\74\144\151\x76\40\45\163\76\x25\163\x3c\x2f\x64\x69\166\x3e", $ymygiwwuwyuakysk->concat_attrs($wwgucssaecqekuek), ManipulateArray::get($aiowsaccomcoikus->args, "\x63\157\156\164\x65\x6e\164"));
        goto owaiygkwaeyiiwey;
        qqawakqgsmykwgek:
        $aiowsaccomcoikus->args["\x63\x6f\156\164\x65\x6e\164"] = call_user_func_array($aiowsaccomcoikus->args["\x63\x6f\x6e\x74\x65\156\x74\x5f\143\142"], [$aiowsaccomcoikus, $kqokimuosyuyyucg, $mqyaskyaekmkegmg]);
        goto kykeqqgyqqgaawoo;
        gkgemsygssqimikw:
        if (!$ekiuyucoiagmscgy) {
            goto qekmqsisgmoyuqow;
        }
        goto qqawakqgsmykwgek;
        kykeqqgyqqgaawoo:
        qekmqsisgmoyuqow:
        goto esyigamqqaoyecyc;
        owaiygkwaeyiiwey:
    }
}

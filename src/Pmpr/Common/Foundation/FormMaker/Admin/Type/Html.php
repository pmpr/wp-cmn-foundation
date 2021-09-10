<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Html extends Common
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        goto yiuuiegcgmqwqyqm;
        yiuuiegcgmqwqyqm:
        
        $wwgucssaecqekuek = $ymygiwwuwyuakysk->parse_args($this->gueasuouwqysmomu(), ["\151\144" => $ymygiwwuwyuakysk->_id()]);
        goto gywwsuewqemcisae;
        kykeqqgyqqgaawoo:
        qekmqsisgmoyuqow:
        goto esyigamqqaoyecyc;
        gywwsuewqemcisae:
        $ekiuyucoiagmscgy = ManipulateArray::get($aiowsaccomcoikus->args, "\143\x6f\156\x74\145\x6e\x74\x5f\x63\142");
        goto gkgemsygssqimikw;
        esyigamqqaoyecyc:
        echo sprintf("\x3c\144\x69\166\40\45\163\76\45\x73\74\x2f\x64\x69\166\x3e", $ymygiwwuwyuakysk->concat_attrs($wwgucssaecqekuek), ManipulateArray::get($aiowsaccomcoikus->args, "\143\x6f\156\x74\145\156\x74"));
        goto owaiygkwaeyiiwey;
        gkgemsygssqimikw:
        if (!$ekiuyucoiagmscgy) {
            goto qekmqsisgmoyuqow;
        }
        goto qqawakqgsmykwgek;
        qqawakqgsmykwgek:
        $aiowsaccomcoikus->args["\x63\157\x6e\164\x65\x6e\x74"] = call_user_func_array($aiowsaccomcoikus->args["\x63\x6f\x6e\164\145\x6e\x74\x5f\x63\142"], [$aiowsaccomcoikus, $kqokimuosyuyyucg, $mqyaskyaekmkegmg]);
        goto kykeqqgyqqgaawoo;
        owaiygkwaeyiiwey:
    }
}

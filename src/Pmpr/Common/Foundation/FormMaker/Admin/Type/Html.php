<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Html extends Common
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        goto esyigamqqaoyecyc;
        esyigamqqaoyecyc:
        
        $wwgucssaecqekuek = $ymygiwwuwyuakysk->parse_args($this->gueasuouwqysmomu(), ["\x69\144" => $ymygiwwuwyuakysk->_id()]);
        goto owaiygkwaeyiiwey;
        eqewkwicumqigsem:
        kykeqqgyqqgaawoo:
        goto mwegkckwqgiwmasq;
        uykugiwiykyccwqs:
        if (!$ekiuyucoiagmscgy) {
            goto kykeqqgyqqgaawoo;
        }
        goto fomwoaaqqcwyekey;
        owaiygkwaeyiiwey:
        $ekiuyucoiagmscgy = ManipulateArray::get($aiowsaccomcoikus->args, "\x63\x6f\156\164\145\156\164\137\x63\x62");
        goto uykugiwiykyccwqs;
        mwegkckwqgiwmasq:
        echo sprintf("\x3c\x64\151\x76\40\x25\x73\76\45\163\74\57\144\x69\166\x3e", $ymygiwwuwyuakysk->concat_attrs($wwgucssaecqekuek), ManipulateArray::get($aiowsaccomcoikus->args, "\x63\157\156\x74\x65\x6e\164"));
        goto kykgmsqcyggkoeig;
        fomwoaaqqcwyekey:
        $aiowsaccomcoikus->args["\143\x6f\156\x74\x65\156\x74"] = call_user_func_array($aiowsaccomcoikus->args["\x63\157\156\164\x65\x6e\164\x5f\x63\142"], [$aiowsaccomcoikus, $kqokimuosyuyyucg, $mqyaskyaekmkegmg]);
        goto eqewkwicumqigsem;
        kykgmsqcyggkoeig:
    }
}

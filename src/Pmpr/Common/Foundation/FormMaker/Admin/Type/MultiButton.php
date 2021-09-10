<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Type;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class MultiButton extends Button
{
    
    public function render($aiowsaccomcoikus, $eqgoocgaqwqcimie, $kqokimuosyuyyucg, $mqyaskyaekmkegmg, $ymygiwwuwyuakysk)
    {
        goto cokyasgcsqaiuees;
        okgyggqaawsgwsik:
        if (!(is_array($qyukicweqoisimwg) && $qyukicweqoisimwg)) {
            goto wmwyuyocoiyiykug;
        }
        goto kgmmusocuywcamkm;
        kgmmusocuywcamkm:
        echo $ymygiwwuwyuakysk->_desc(true);
        goto meyuecuukqqaagoy;
        cokyasgcsqaiuees:
        $qyukicweqoisimwg = ManipulateArray::get($aiowsaccomcoikus->args, "\x62\x75\164\x74\x6f\x6e\x73", []);
        goto okgyggqaawsgwsik;
        sywcgogayiwoguqo:
        wmwyuyocoiyiykug:
        goto yiycscagsqscmoec;
        meyuecuukqqaagoy:
        foreach ($qyukicweqoisimwg as $gskauacumcmekigs) {
            echo $this->sywokgmoskcocqgy($gskauacumcmekigs, $ymygiwwuwyuakysk);
            cogkiqmkaiuwwkuq:
        }
        goto ksscsamsaakkuaek;
        ksscsamsaakkuaek:
        ygqekkgksyuqwosg:
        goto sywcgogayiwoguqo;
        yiycscagsqscmoec:
    }
}

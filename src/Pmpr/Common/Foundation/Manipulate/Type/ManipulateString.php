<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;

use Exception;
use ReflectionClass;

class ManipulateString extends Common
{
    
    public static function scramble(string $sociqikgoyemqaac) : string
    {
        goto aqosaugqkosuuegw;
        fwgsuqmqwckweqew:
        
        $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26);
        goto oeskmqswawycuqeo;
        okqakgakegqeqyeq:
        
        return strtr($eugsosgsugioquqe, self::NUMBERS_SEQUENCE, "\161\162\x73\x74\165\x76\x77\x78\171\172");
        goto ayqgiggusesgmumc;
        aqosaugqkosuuegw:
        $ykiwomimkkuiigoq = 16;
        goto awikguaqqiwcqmky;
        mkyoqmeigaqsywus:
        
        $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT);
        goto okqakgakegqeqyeq;
        awikguaqqiwcqmky:
        $sociqikgoyemqaac = hash("\x6d\x64\65", $sociqikgoyemqaac);
        goto fwgsuqmqwckweqew;
        oeskmqswawycuqeo:
        
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq);
        goto mkyoqmeigaqsywus;
        ayqgiggusesgmumc:
    }
    
    public static function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string
    {
        goto ykuagugmmsammmys;
        yqwaoiwiiueeioyu:
        $eugsosgsugioquqe = sha1(wp_rand());
        goto swgigmkkkusaacqu;
        uecugkgkswkksmwu:
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai);
        goto mmuukiksuesugoim;
        oqugeiswsecaumem:
        return $eugsosgsugioquqe;
        goto mmsiiummcewgugoq;
        mmuukiksuesugoim:
        ycuoumuscogyyumk:
        goto oqugeiswsecaumem;
        qwwcygqwemouasmk:
        $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20));
        goto saemqkkugcicagmu;
        ykuagugmmsammmys:
        if (function_exists("\157\x70\x65\156\x73\x73\x6c\x5f\162\x61\156\144\157\155\x5f\160\163\x65\x75\x64\x6f\137\142\x79\164\145\x73")) {
            goto ecqowccyawmkikqa;
        }
        goto yqwaoiwiiueeioyu;
        swgigmkkkusaacqu:
        goto gekkqmaemkuucmum;
        goto oskqggqaooyquywg;
        oskqggqaooyquywg:
        ecqowccyawmkikqa:
        goto qwwcygqwemouasmk;
        kaqecouikkoyoikw:
        if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) {
            goto ycuoumuscogyyumk;
        }
        goto uecugkgkswkksmwu;
        saemqkkugcicagmu:
        gekkqmaemkuucmum:
        goto kaqecouikkoyoikw;
        mmsiiummcewgugoq:
    }
    
    public static function uniqid($eomsgokgyssmwmai = 8)
    {
        goto eukaauoogymyoqcg;
        iceugoeuecegkosq:
        emecuyysuqqwommu:
        goto qkuqauayuwkoqyai;
        amimcgigeayacwsi:
        $momkisisegqcmmwi = uniqid();
        goto gwgkeeeaegyiwuwy;
        koikmoqykoygkoee:
        if ($momkisisegqcmmwi) {
            goto geeowmiusiackuiq;
        }
        goto amimcgigeayacwsi;
        ugiacwwoamocgaay:
        goto emecuyysuqqwommu;
        goto mqmcuwieyceguisy;
        csseweewqmmqmoie:
        $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai);
        goto koikmoqykoygkoee;
        yioikeisgkcckggw:
        $momkisisegqcmmwi .= self::uniqid($eomsgokgyssmwmai);
        goto ugiacwwoamocgaay;
        uuowasqcmykuuqay:
        $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw);
        goto ecmmsuegkwoaqsck;
        eukaauoogymyoqcg:
        $sosyakcgakmeueii = md5("\171\157\x75\162\123\141\x6c\x74\110\x65\162\145" . uniqid('', true));
        goto koacwewmoggiokwk;
        koacwewmoggiokwk:
        $asakkwwsyqsqqkkw = pack("\110\x2a", $sosyakcgakmeueii);
        goto uuowasqcmykuuqay;
        wsoqwkigckayaqoi:
        $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai));
        goto iceugoeuecegkosq;
        qkuqauayuwkoqyai:
        if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) {
            goto uyouwcwuyqkqgiyq;
        }
        goto yioikeisgkcckggw;
        yoscwomwgukawius:
        return $momkisisegqcmmwi;
        goto aswswoccyeayaooc;
        ecmmsuegkwoaqsck:
        $momkisisegqcmmwi = preg_replace("\x2f\x5b\136\101\x2d\132\x61\x2d\172\60\x2d\71\135\57", '', $umkokecyamcwcqwe);
        goto wsoqwkigckayaqoi;
        gwgkeeeaegyiwuwy:
        geeowmiusiackuiq:
        goto yoscwomwgukawius;
        mqmcuwieyceguisy:
        uyouwcwuyqkqgiyq:
        goto csseweewqmmqmoie;
        aswswoccyeayaooc:
    }
    
    public static function mkwcwqkqeqkqyggc($egkyssmuqcwaciya)
    {
        goto qisgkugkmomqkqyy;
        jkykioyqcqkecswo:
        $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        goto eaeiyueemeaiscse;
        miaqgsgmmucyukck:
        $egkyssmuqcwaciya = explode("\x5c", $egkyssmuqcwaciya);
        goto jkykioyqcqkecswo;
        iiuguqckysykaqqm:
        ewogoyaaykymakio:
        goto owscgyscmmakkagm;
        owscgyscmmakkagm:
        return $ymqmyyeuycgmigyo;
        goto ggimaueycwcaweao;
        qisgkugkmomqkqyy:
        if (is_object($egkyssmuqcwaciya)) {
            goto oceyqqosgiumoigk;
        }
        goto miaqgsgmmucyukck;
        uuaeyqiykwmeiuqk:
        oceyqqosgiumoigk:
        goto acassceoooicwsmi;
        acassceoooicwsmi:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $ymqmyyeuycgmigyo = $oqkmoekaagukcwia->quqaewqkeiiwqiss();
        } catch (Exception $wgaoewqkwgomoaai) {
            $egkyssmuqcwaciya = explode("\x5c", get_class($egkyssmuqcwaciya));
            $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        }
        goto iiuguqckysykaqqm;
        eaeiyueemeaiscse:
        goto ewogoyaaykymakio;
        goto uuaeyqiykwmeiuqk;
        ggimaueycwcaweao:
    }
    
    public static function ogimogiceeekegoi($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::kwuyaykukcmaqggg($sociqikgoyemqaac);
        return self::cyakegkcqemuyaey($sociqikgoyemqaac);
    }
    
    public static function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::kwuyaykukcmaqggg($sociqikgoyemqaac);
        return str_replace("\40", "\55", self::ywuiyekyoaowmuss($sociqikgoyemqaac));
    }
    
    public static function qoqowykumameucwa($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::cyakegkcqemuyaey($sociqikgoyemqaac);
        return self::snake2camel($sociqikgoyemqaac);
    }
    
    public static function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw)
    {
        goto cuoomamgiqewcaga;
        wcuqseiqgmkiagqo:
        qwewqcaomcqwwaqg:
        goto qaokmiyayqscsoey;
        cuoomamgiqewcaga:
        if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) {
            goto qwewqcaomcqwwaqg;
        }
        goto imekyuaciwaewsyg;
        qaokmiyayqscsoey:
        return $sociqikgoyemqaac;
        goto sesuguskosoyouaq;
        imekyuaciwaewsyg:
        return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq);
        goto wcuqseiqgmkiagqo;
        sesuguskosoyouaq:
    }
    
    public static function kwuyaykukcmaqggg($sociqikgoyemqaac) : string
    {
        return strtolower(preg_replace("\x2f\x28\133\141\55\172\135\x29\50\133\101\x2d\x5a\135\x29\57", "\x24\61\x5f\44\62", $sociqikgoyemqaac));
    }
    
    public static function snake2camel($sociqikgoyemqaac) : string
    {
        goto osaemmikqqguwkeu;
        oiekomuumyouqaei:
        $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]);
        goto cayaamsiykmeacmu;
        osaemmikqqguwkeu:
        $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\x5f", "\40", $sociqikgoyemqaac)));
        goto oiekomuumyouqaei;
        cayaamsiykmeacmu:
        return $sociqikgoyemqaac;
        goto sogmmamkkaqauqqi;
        sogmmamkkaqauqqi:
    }
    
    public static function ywuiyekyoaowmuss($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\x5f", "\55", $sociqikgoyemqaac));
    }
    
    public static function cyakegkcqemuyaey($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\x2d", "\137", $sociqikgoyemqaac));
    }
    
    public static function amkcmaguoecyiscg($ycskuuyucyuqisaq) : string
    {
        $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq);
        return "\47{$ycskuuyucyuqisaq}\x27";
    }
    
    public static function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg)
    {
        goto syiawquewyqquceg;
        cokuamakgaokeooy:
        goto cmkmcmwqwugqyaua;
        goto wyumwugwoycammog;
        wasayiuessgesqyg:
        cmkmcmwqwugqyaua:
        goto ucmwiooiyaqqysgi;
        eeeaewggmuucmgke:
        $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm);
        goto cokuamakgaokeooy;
        ucmwiooiyaqqysgi:
        if (!$gaeqamemwmwsyukm) {
            goto wmkcqawaggyycweu;
        }
        goto eeeaewggmuucmgke;
        wuwyimqcwoocmgma:
        $gaeqamemwmwsyukm = 1;
        goto wasayiuessgesqyg;
        wyumwugwoycammog:
        wmkcqawaggyycweu:
        goto mooeqigccuskogqm;
        syiawquewyqquceg:
        $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg;
        goto wuwyimqcwoocmgma;
        mooeqigccuskogqm:
        return $iosuwkkwwioumeqg;
        goto msswemwawesaoqgi;
        msswemwawesaoqgi:
    }
    
    public static function crypt($sociqikgoyemqaac, $euakaisoocwokioe = true)
    {
        goto maiiaecisekgocgs;
        acoiommggkmcwoec:
        $eeamcawaiqocomwy = home_url();
        goto yoooiiugiwuwomcg;
        maiiaecisekgocgs:
        
        $qgciuiagkkguykgs = "\101\x45\x53\55\62\x35\66\x2d\103\102\x43";
        goto kegsswygcecmiumq;
        yoooiiugiwuwomcg:
        $uusmaiomayssaecw = hash("\163\x68\x61\x32\x35\x36", "{$eeamcawaiqocomwy}\x5f\163\x65\x63\x72\145\x74\137\x6b\145\171");
        goto uugysiwkssgqqasy;
        wwmaagcmssuqyuyo:
        goto uicekgggkiwiyykk;
        goto dasseuygmamimemo;
        dasseuygmamimemo:
        ekqmseimucoqkuaa:
        goto gcuqqquokaqaacwk;
        aysowqiuocakwcic:
        if (!extension_loaded("\x6f\160\145\156\163\x73\154")) {
            goto ooqyuwsmqcmmwiuy;
        }
        goto rioiswicyaiaqscu;
        kegsswygcecmiumq:
        $aqykuigiuwmmcieu = $sociqikgoyemqaac;
        goto acoiommggkmcwoec;
        wuoiuakueguccsic:
        return $aqykuigiuwmmcieu;
        goto uwymkmkoccikuayq;
        qycioskysmyisuaq:
        seqcuygkmogesgsw:
        goto wwmaagcmssuqyuyo;
        ikmgqgmecqcqumwg:
        $aqykuigiuwmmcieu = openssl_decrypt(base64_decode($sociqikgoyemqaac), $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck);
        goto qycioskysmyisuaq;
        gmssueaqqeomimkc:
        wiiegigayuiikwew:
        goto eseukqeswwciauqo;
        isaumaiwsokyqgku:
        ooqyuwsmqcmmwiuy:
        goto wuoiuakueguccsic;
        suqqaiqcyikmwuak:
        if (!function_exists("\x6f\160\145\156\x73\x73\x6c\137\144\145\x63\x72\171\x70\x74")) {
            goto seqcuygkmogesgsw;
        }
        goto ikmgqgmecqcqumwg;
        gcuqqquokaqaacwk:
        if (!function_exists("\157\160\145\156\x73\163\x6c\137\145\x6e\143\162\x79\160\x74")) {
            goto wiiegigayuiikwew;
        }
        goto kecysscqgsiiqiuy;
        rioiswicyaiaqscu:
        if ($euakaisoocwokioe) {
            goto ekqmseimucoqkuaa;
        }
        goto suqqaiqcyikmwuak;
        uugysiwkssgqqasy:
        $imiwcieyucysgsck = substr(hash("\163\x68\141\62\x35\66", "{$eeamcawaiqocomwy}\x5f\x73\x65\x63\x72\145\164\x5f\x69\x76"), 0, 16);
        goto aysowqiuocakwcic;
        eseukqeswwciauqo:
        uicekgggkiwiyykk:
        goto isaumaiwsokyqgku;
        kecysscqgsiiqiuy:
        $aqykuigiuwmmcieu = base64_encode(openssl_encrypt($sociqikgoyemqaac, $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck));
        goto gmssueaqqeomimkc;
        uwymkmkoccikuayq:
    }
    
    public static function aisesaskgsuywqqy($egkyssmuqcwaciya) : string
    {
        $ymqmyyeuycgmigyo = self::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
        return self::aimgkskucmymyquc("\x5c{$ymqmyyeuycgmigyo}", '', $egkyssmuqcwaciya);
    }
    
    public static function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto ogucqcimwucemmqi;
        aqkykycuymkgeuca:
        ssgmgeyqauwowayi:
        goto gwegqueckokqewgq;
        mwoggqumgkkuccsg:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, -$ykiwomimkkuiigoq) === $ekwsasieesaqcsiw;
        goto ukyseaksckwaqccy;
        keamkgymemuoumyk:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto eimkikcwmqgeaaik;
        }
        goto gciweeimoysqegua;
        ogaeqkismgiuisec:
        return $ksaameoqigiaoigg;
        goto qmmqgkauawgywmos;
        ukyseaksckwaqccy:
        goto kaewsesomywgaqya;
        goto aqkykycuymkgeuca;
        gekygaomisweagke:
        kaewsesomywgaqya:
        goto gicwwusswicoaewo;
        gciweeimoysqegua:
        $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw);
        goto uaayeqesiwoyeyky;
        gicwwusswicoaewo:
        eimkikcwmqgeaaik:
        goto ogaeqkismgiuisec;
        gwegqueckokqewgq:
        $ksaameoqigiaoigg = true;
        goto gekygaomisweagke;
        ogucqcimwucemmqi:
        $ksaameoqigiaoigg = false;
        goto keamkgymemuoumyk;
        uaayeqesiwoyeyky:
        if (!$ykiwomimkkuiigoq) {
            goto ssgmgeyqauwowayi;
        }
        goto mwoggqumgkkuccsg;
        qmmqgkauawgywmos:
    }
    
    public static function usemqqucksuocoeq($sociqikgoyemqaac) : string
    {
        $ukokkqkkkggcmksy = ["\45\62\x31" => "\41", "\x25\x32\x41" => "\52", "\x25\x32\x37" => "\47", "\x25\x32\70" => "\50", "\x25\62\x39" => "\51"];
        return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy);
    }
    
    public static function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto swqicamwekkeuiwm;
        csgigisimckqsgqk:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, 0, strlen($ekwsasieesaqcsiw)) === $ekwsasieesaqcsiw;
        goto esukkewwucqgewoa;
        esukkewwucqgewoa:
        iqqwqksqmgkeiyye:
        goto wyoisggmqsmkgmwu;
        swqicamwekkeuiwm:
        $ksaameoqigiaoigg = false;
        goto qkgmwgkisykeciki;
        wyoisggmqsmkgmwu:
        return $ksaameoqigiaoigg;
        goto aoyweksmwmggciqa;
        qkgmwgkisykeciki:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto iqqwqksqmgkeiyye;
        }
        goto csgigisimckqsgqk;
        aoyweksmwmggciqa:
    }
    
    public static function gumqicgiosoqweoy($sociqikgoyemqaac)
    {
        
        $ymqmyyeuycgmigyo = ManipulateString::wiecmkiugmyyqiqc(self::PR__, '', $sociqikgoyemqaac);
        return self::csuomkyoukqauwcg($ymqmyyeuycgmigyo, 8);
    }
    
    public static function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq)
    {
        goto vgikmsgkoicqkicg;
        uekocieigyaeiesk:
        return $ycskuuyucyuqisaq;
        goto ksmiwscciwcugeii;
        moyaggkeisiyocmy:
        eayssgemciaigiam:
        goto uekocieigyaeiesk;
        cuycyaewiggayoyq:
        $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy);
        goto aamoqaoqsmaaiqic;
        aamoqaoqsmaaiqic:
        $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq);
        goto moyaggkeisiyocmy;
        vgikmsgkoicqkicg:
        if (!(($yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy)) !== false)) {
            goto eayssgemciaigiam;
        }
        goto cuycyaewiggayoyq;
        ksmiwscciwcugeii:
    }
    
    public static function eqyqgywiseiwqocc($uomewyckeuqoqocu) : string
    {
        goto cygmcwemkeicyqsg;
        koaeoimocwqoguem:
        skickmuouwmgykag:
        goto yaiicikgkwuucyac;
        ekiaoywcsemmomqw:
        $uomewyckeuqoqocu = join("\x27\x2c\40\47", array_map("\145\x73\143\x5f\163\x71\154", $uomewyckeuqoqocu));
        goto koaeoimocwqoguem;
        cygmcwemkeicyqsg:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto skickmuouwmgykag;
        }
        goto ekiaoywcsemmomqw;
        yaiicikgkwuucyac:
        return $uomewyckeuqoqocu;
        goto cwsacmayigiyqiim;
        cwsacmayigiyqiim:
    }
    
    public static function csuomkyoukqauwcg($sociqikgoyemqaac, $aoqagsqecokqqwqg = 5)
    {
        goto kwakioosoiemmiok;
        aamysqsckaiwqayk:
        awcsskayoyoqcuie:
        goto ceusqkuwoqusqoug;
        ckawikqsskikqiya:
        if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) {
            goto awcsskayoyoqcuie;
        }
        goto gegywycsimoakaei;
        ceusqkuwoqusqoug:
        return $sociqikgoyemqaac;
        goto kcyiiwwsyagcyiic;
        gegywycsimoakaei:
        $sociqikgoyemqaac = $uwomkgseoiegeume;
        goto aamysqsckaiwqayk;
        kwakioosoiemmiok:
        $uwomkgseoiegeume = preg_replace("\x2f\x28\77\74\x21\x5e\x29\133\x61\x41\145\x45\x69\111\157\x4f\x75\x55\x5d\x2f", '', $sociqikgoyemqaac);
        goto ckawikqsskikqiya;
        kcyiiwwsyagcyiic:
    }
    
    public static function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string
    {
        goto cysskkuqiccoycuk;
        iqqsmugsquwuwmys:
        return ManipulateArray::get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc);
        goto qoagkeesiqqueeac;
        micwmacyekkoumqe:
        $uomewyckeuqoqocu = explode("\134", $aiieyweysaukqemc);
        goto iqqsmugsquwuwmys;
        cysskkuqiccoycuk:
        $aiieyweysaukqemc = self::aisesaskgsuywqqy($egkyssmuqcwaciya);
        goto micwmacyekkoumqe;
        qoagkeesiqqueeac:
    }
    
    public static function yaaoeasygeggswcq($uusmaiomayssaecw, $yuwymayicwwqiske = "\137") : string
    {
        return substr($uusmaiomayssaecw, 0, strlen($yuwymayicwwqiske)) != $yuwymayicwwqiske ? $yuwymayicwwqiske . $uusmaiomayssaecw : $uusmaiomayssaecw;
    }
    
    public static function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string
    {
        return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2));
    }
}

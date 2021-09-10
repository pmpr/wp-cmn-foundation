<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;

use Exception;
use ReflectionClass;

class ManipulateString extends Common
{
    
    public static function scramble(string $sociqikgoyemqaac) : string
    {
        goto imiuiucewegueuic;
        oeskmqswawycuqeo:
        
        $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT);
        goto mkyoqmeigaqsywus;
        awikguaqqiwcqmky:
        
        $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26);
        goto fwgsuqmqwckweqew;
        fwgsuqmqwckweqew:
        
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq);
        goto oeskmqswawycuqeo;
        imiuiucewegueuic:
        $ykiwomimkkuiigoq = 16;
        goto aqosaugqkosuuegw;
        mkyoqmeigaqsywus:
        
        return strtr($eugsosgsugioquqe, self::NUMBERS_SEQUENCE, "\161\162\163\164\x75\166\x77\170\x79\172");
        goto okqakgakegqeqyeq;
        aqosaugqkosuuegw:
        $sociqikgoyemqaac = hash("\x6d\x64\x35", $sociqikgoyemqaac);
        goto awikguaqqiwcqmky;
        okqakgakegqeqyeq:
    }
    
    public static function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string
    {
        goto ycuoumuscogyyumk;
        ykuagugmmsammmys:
        $eugsosgsugioquqe = sha1(wp_rand());
        goto yqwaoiwiiueeioyu;
        saemqkkugcicagmu:
        if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) {
            goto gekkqmaemkuucmum;
        }
        goto kaqecouikkoyoikw;
        kaqecouikkoyoikw:
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai);
        goto uecugkgkswkksmwu;
        swgigmkkkusaacqu:
        ayqgiggusesgmumc:
        goto oskqggqaooyquywg;
        ycuoumuscogyyumk:
        if (function_exists("\x6f\160\x65\x6e\163\163\154\137\x72\x61\156\x64\x6f\155\x5f\x70\x73\145\165\x64\157\137\142\x79\164\x65\x73")) {
            goto ayqgiggusesgmumc;
        }
        goto ykuagugmmsammmys;
        oskqggqaooyquywg:
        $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20));
        goto qwwcygqwemouasmk;
        mmuukiksuesugoim:
        return $eugsosgsugioquqe;
        goto oqugeiswsecaumem;
        yqwaoiwiiueeioyu:
        goto ecqowccyawmkikqa;
        goto swgigmkkkusaacqu;
        uecugkgkswkksmwu:
        gekkqmaemkuucmum:
        goto mmuukiksuesugoim;
        qwwcygqwemouasmk:
        ecqowccyawmkikqa:
        goto saemqkkugcicagmu;
        oqugeiswsecaumem:
    }
    
    public static function uniqid($eomsgokgyssmwmai = 8)
    {
        goto geeowmiusiackuiq;
        yioikeisgkcckggw:
        goto uyouwcwuyqkqgiyq;
        goto ugiacwwoamocgaay;
        amimcgigeayacwsi:
        emecuyysuqqwommu:
        goto gwgkeeeaegyiwuwy;
        uuowasqcmykuuqay:
        $momkisisegqcmmwi = preg_replace("\57\133\136\101\x2d\132\x61\x2d\172\60\x2d\x39\x5d\x2f", '', $umkokecyamcwcqwe);
        goto ecmmsuegkwoaqsck;
        eukaauoogymyoqcg:
        $asakkwwsyqsqqkkw = pack("\110\52", $sosyakcgakmeueii);
        goto koacwewmoggiokwk;
        csseweewqmmqmoie:
        if ($momkisisegqcmmwi) {
            goto emecuyysuqqwommu;
        }
        goto koikmoqykoygkoee;
        geeowmiusiackuiq:
        $sosyakcgakmeueii = md5("\x79\x6f\x75\x72\x53\x61\x6c\164\x48\145\x72\x65" . uniqid('', true));
        goto eukaauoogymyoqcg;
        qkuqauayuwkoqyai:
        $momkisisegqcmmwi .= self::uniqid($eomsgokgyssmwmai);
        goto yioikeisgkcckggw;
        ugiacwwoamocgaay:
        mmsiiummcewgugoq:
        goto mqmcuwieyceguisy;
        mqmcuwieyceguisy:
        $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai);
        goto csseweewqmmqmoie;
        koacwewmoggiokwk:
        $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw);
        goto uuowasqcmykuuqay;
        gwgkeeeaegyiwuwy:
        return $momkisisegqcmmwi;
        goto yoscwomwgukawius;
        iceugoeuecegkosq:
        if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) {
            goto mmsiiummcewgugoq;
        }
        goto qkuqauayuwkoqyai;
        koikmoqykoygkoee:
        $momkisisegqcmmwi = uniqid();
        goto amimcgigeayacwsi;
        ecmmsuegkwoaqsck:
        $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai));
        goto wsoqwkigckayaqoi;
        wsoqwkigckayaqoi:
        uyouwcwuyqkqgiyq:
        goto iceugoeuecegkosq;
        yoscwomwgukawius:
    }
    
    public static function mkwcwqkqeqkqyggc($egkyssmuqcwaciya)
    {
        goto ewogoyaaykymakio;
        jkykioyqcqkecswo:
        goto oceyqqosgiumoigk;
        goto eaeiyueemeaiscse;
        eaeiyueemeaiscse:
        aswswoccyeayaooc:
        goto uuaeyqiykwmeiuqk;
        miaqgsgmmucyukck:
        $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        goto jkykioyqcqkecswo;
        ewogoyaaykymakio:
        if (is_object($egkyssmuqcwaciya)) {
            goto aswswoccyeayaooc;
        }
        goto qisgkugkmomqkqyy;
        qisgkugkmomqkqyy:
        $egkyssmuqcwaciya = explode("\134", $egkyssmuqcwaciya);
        goto miaqgsgmmucyukck;
        uuaeyqiykwmeiuqk:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $ymqmyyeuycgmigyo = $oqkmoekaagukcwia->quqaewqkeiiwqiss();
        } catch (Exception $wgaoewqkwgomoaai) {
            $egkyssmuqcwaciya = explode("\134", get_class($egkyssmuqcwaciya));
            $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        }
        goto acassceoooicwsmi;
        iiuguqckysykaqqm:
        return $ymqmyyeuycgmigyo;
        goto owscgyscmmakkagm;
        acassceoooicwsmi:
        oceyqqosgiumoigk:
        goto iiuguqckysykaqqm;
        owscgyscmmakkagm:
    }
    
    public static function ogimogiceeekegoi($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::kwuyaykukcmaqggg($sociqikgoyemqaac);
        return self::cyakegkcqemuyaey($sociqikgoyemqaac);
    }
    
    public static function igcwuwuymeuomaqo($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::kwuyaykukcmaqggg($sociqikgoyemqaac);
        return str_replace("\40", "\x2d", self::ywuiyekyoaowmuss($sociqikgoyemqaac));
    }
    
    public static function qoqowykumameucwa($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::cyakegkcqemuyaey($sociqikgoyemqaac);
        return self::snake2camel($sociqikgoyemqaac);
    }
    
    public static function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw)
    {
        goto qwewqcaomcqwwaqg;
        qwewqcaomcqwwaqg:
        if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) {
            goto ggimaueycwcaweao;
        }
        goto cuoomamgiqewcaga;
        cuoomamgiqewcaga:
        return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq);
        goto imekyuaciwaewsyg;
        wcuqseiqgmkiagqo:
        return $sociqikgoyemqaac;
        goto qaokmiyayqscsoey;
        imekyuaciwaewsyg:
        ggimaueycwcaweao:
        goto wcuqseiqgmkiagqo;
        qaokmiyayqscsoey:
    }
    
    public static function kwuyaykukcmaqggg($sociqikgoyemqaac) : string
    {
        return strtolower(preg_replace("\x2f\50\133\141\55\x7a\135\x29\x28\x5b\101\55\x5a\135\51\x2f", "\x24\x31\137\44\x32", $sociqikgoyemqaac));
    }
    
    public static function snake2camel($sociqikgoyemqaac) : string
    {
        goto sesuguskosoyouaq;
        osaemmikqqguwkeu:
        $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]);
        goto oiekomuumyouqaei;
        sesuguskosoyouaq:
        $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\137", "\x20", $sociqikgoyemqaac)));
        goto osaemmikqqguwkeu;
        oiekomuumyouqaei:
        return $sociqikgoyemqaac;
        goto cayaamsiykmeacmu;
        cayaamsiykmeacmu:
    }
    
    public static function ywuiyekyoaowmuss($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\137", "\x2d", $sociqikgoyemqaac));
    }
    
    public static function cyakegkcqemuyaey($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\55", "\x5f", $sociqikgoyemqaac));
    }
    
    public static function amkcmaguoecyiscg($ycskuuyucyuqisaq) : string
    {
        $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq);
        return "\x27{$ycskuuyucyuqisaq}\x27";
    }
    
    public static function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg)
    {
        goto cmkmcmwqwugqyaua;
        syiawquewyqquceg:
        $gaeqamemwmwsyukm = 1;
        goto wuwyimqcwoocmgma;
        cokuamakgaokeooy:
        sogmmamkkaqauqqi:
        goto wyumwugwoycammog;
        wyumwugwoycammog:
        return $iosuwkkwwioumeqg;
        goto mooeqigccuskogqm;
        cmkmcmwqwugqyaua:
        $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg;
        goto syiawquewyqquceg;
        ucmwiooiyaqqysgi:
        $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm);
        goto eeeaewggmuucmgke;
        eeeaewggmuucmgke:
        goto wmkcqawaggyycweu;
        goto cokuamakgaokeooy;
        wasayiuessgesqyg:
        if (!$gaeqamemwmwsyukm) {
            goto sogmmamkkaqauqqi;
        }
        goto ucmwiooiyaqqysgi;
        wuwyimqcwoocmgma:
        wmkcqawaggyycweu:
        goto wasayiuessgesqyg;
        mooeqigccuskogqm:
    }
    
    public static function crypt($sociqikgoyemqaac, $euakaisoocwokioe = true)
    {
        goto ooqyuwsmqcmmwiuy;
        kecysscqgsiiqiuy:
        msswemwawesaoqgi:
        goto gmssueaqqeomimkc;
        rioiswicyaiaqscu:
        if (!function_exists("\157\160\x65\x6e\x73\x73\154\x5f\x64\145\143\162\171\160\x74")) {
            goto wiiegigayuiikwew;
        }
        goto suqqaiqcyikmwuak;
        uugysiwkssgqqasy:
        if (!extension_loaded("\x6f\160\145\156\x73\x73\154")) {
            goto uicekgggkiwiyykk;
        }
        goto aysowqiuocakwcic;
        ooqyuwsmqcmmwiuy:
        
        $qgciuiagkkguykgs = "\x41\105\x53\x2d\62\65\66\55\x43\102\103";
        goto maiiaecisekgocgs;
        qycioskysmyisuaq:
        goto ekqmseimucoqkuaa;
        goto wwmaagcmssuqyuyo;
        eseukqeswwciauqo:
        uicekgggkiwiyykk:
        goto isaumaiwsokyqgku;
        kegsswygcecmiumq:
        $eeamcawaiqocomwy = home_url();
        goto acoiommggkmcwoec;
        maiiaecisekgocgs:
        $aqykuigiuwmmcieu = $sociqikgoyemqaac;
        goto kegsswygcecmiumq;
        dasseuygmamimemo:
        if (!function_exists("\x6f\x70\x65\x6e\x73\x73\154\x5f\145\156\x63\x72\x79\x70\164")) {
            goto msswemwawesaoqgi;
        }
        goto gcuqqquokaqaacwk;
        wwmaagcmssuqyuyo:
        seqcuygkmogesgsw:
        goto dasseuygmamimemo;
        gcuqqquokaqaacwk:
        $aqykuigiuwmmcieu = base64_encode(openssl_encrypt($sociqikgoyemqaac, $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck));
        goto kecysscqgsiiqiuy;
        ikmgqgmecqcqumwg:
        wiiegigayuiikwew:
        goto qycioskysmyisuaq;
        acoiommggkmcwoec:
        $uusmaiomayssaecw = hash("\163\150\x61\x32\65\x36", "{$eeamcawaiqocomwy}\x5f\163\145\x63\162\145\x74\x5f\153\145\171");
        goto yoooiiugiwuwomcg;
        isaumaiwsokyqgku:
        return $aqykuigiuwmmcieu;
        goto wuoiuakueguccsic;
        suqqaiqcyikmwuak:
        $aqykuigiuwmmcieu = openssl_decrypt(base64_decode($sociqikgoyemqaac), $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck);
        goto ikmgqgmecqcqumwg;
        yoooiiugiwuwomcg:
        $imiwcieyucysgsck = substr(hash("\x73\x68\141\62\65\x36", "{$eeamcawaiqocomwy}\x5f\x73\x65\x63\x72\x65\164\x5f\151\166"), 0, 16);
        goto uugysiwkssgqqasy;
        gmssueaqqeomimkc:
        ekqmseimucoqkuaa:
        goto eseukqeswwciauqo;
        aysowqiuocakwcic:
        if ($euakaisoocwokioe) {
            goto seqcuygkmogesgsw;
        }
        goto rioiswicyaiaqscu;
        wuoiuakueguccsic:
    }
    
    public static function aisesaskgsuywqqy($egkyssmuqcwaciya) : string
    {
        $ymqmyyeuycgmigyo = self::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
        return self::aimgkskucmymyquc("\x5c{$ymqmyyeuycgmigyo}", '', $egkyssmuqcwaciya);
    }
    
    public static function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto eimkikcwmqgeaaik;
        aqkykycuymkgeuca:
        $ksaameoqigiaoigg = true;
        goto gwegqueckokqewgq;
        ogucqcimwucemmqi:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto kaewsesomywgaqya;
        }
        goto keamkgymemuoumyk;
        uaayeqesiwoyeyky:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, -$ykiwomimkkuiigoq) === $ekwsasieesaqcsiw;
        goto mwoggqumgkkuccsg;
        eimkikcwmqgeaaik:
        $ksaameoqigiaoigg = false;
        goto ogucqcimwucemmqi;
        mwoggqumgkkuccsg:
        goto ssgmgeyqauwowayi;
        goto ukyseaksckwaqccy;
        gwegqueckokqewgq:
        ssgmgeyqauwowayi:
        goto gekygaomisweagke;
        gicwwusswicoaewo:
        return $ksaameoqigiaoigg;
        goto ogaeqkismgiuisec;
        gciweeimoysqegua:
        if (!$ykiwomimkkuiigoq) {
            goto uwymkmkoccikuayq;
        }
        goto uaayeqesiwoyeyky;
        keamkgymemuoumyk:
        $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw);
        goto gciweeimoysqegua;
        ukyseaksckwaqccy:
        uwymkmkoccikuayq:
        goto aqkykycuymkgeuca;
        gekygaomisweagke:
        kaewsesomywgaqya:
        goto gicwwusswicoaewo;
        ogaeqkismgiuisec:
    }
    
    public static function usemqqucksuocoeq($sociqikgoyemqaac) : string
    {
        $ukokkqkkkggcmksy = ["\x25\x32\61" => "\x21", "\x25\x32\x41" => "\52", "\45\62\67" => "\x27", "\x25\62\x38" => "\x28", "\x25\62\71" => "\x29"];
        return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy);
    }
    
    public static function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto iqqwqksqmgkeiyye;
        qkgmwgkisykeciki:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, 0, strlen($ekwsasieesaqcsiw)) === $ekwsasieesaqcsiw;
        goto csgigisimckqsgqk;
        esukkewwucqgewoa:
        return $ksaameoqigiaoigg;
        goto wyoisggmqsmkgmwu;
        swqicamwekkeuiwm:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto qmmqgkauawgywmos;
        }
        goto qkgmwgkisykeciki;
        iqqwqksqmgkeiyye:
        $ksaameoqigiaoigg = false;
        goto swqicamwekkeuiwm;
        csgigisimckqsgqk:
        qmmqgkauawgywmos:
        goto esukkewwucqgewoa;
        wyoisggmqsmkgmwu:
    }
    
    public static function gumqicgiosoqweoy($sociqikgoyemqaac)
    {
        
        $ymqmyyeuycgmigyo = ManipulateString::wiecmkiugmyyqiqc(self::PR__, '', $sociqikgoyemqaac);
        return self::csuomkyoukqauwcg($ymqmyyeuycgmigyo, 8);
    }
    
    public static function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq)
    {
        goto eayssgemciaigiam;
        moyaggkeisiyocmy:
        return $ycskuuyucyuqisaq;
        goto uekocieigyaeiesk;
        vgikmsgkoicqkicg:
        $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy);
        goto cuycyaewiggayoyq;
        eayssgemciaigiam:
        if (!(($yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy)) !== false)) {
            goto aoyweksmwmggciqa;
        }
        goto vgikmsgkoicqkicg;
        aamoqaoqsmaaiqic:
        aoyweksmwmggciqa:
        goto moyaggkeisiyocmy;
        cuycyaewiggayoyq:
        $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq);
        goto aamoqaoqsmaaiqic;
        uekocieigyaeiesk:
    }
    
    public static function eqyqgywiseiwqocc($uomewyckeuqoqocu) : string
    {
        goto skickmuouwmgykag;
        cygmcwemkeicyqsg:
        $uomewyckeuqoqocu = join("\47\x2c\x20\x27", array_map("\145\163\x63\x5f\163\x71\154", $uomewyckeuqoqocu));
        goto ekiaoywcsemmomqw;
        koaeoimocwqoguem:
        return $uomewyckeuqoqocu;
        goto yaiicikgkwuucyac;
        ekiaoywcsemmomqw:
        ksmiwscciwcugeii:
        goto koaeoimocwqoguem;
        skickmuouwmgykag:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto ksmiwscciwcugeii;
        }
        goto cygmcwemkeicyqsg;
        yaiicikgkwuucyac:
    }
    
    public static function csuomkyoukqauwcg($sociqikgoyemqaac, $aoqagsqecokqqwqg = 5)
    {
        goto awcsskayoyoqcuie;
        gegywycsimoakaei:
        cwsacmayigiyqiim:
        goto aamysqsckaiwqayk;
        awcsskayoyoqcuie:
        $uwomkgseoiegeume = preg_replace("\57\50\77\74\41\x5e\x29\133\141\101\x65\105\x69\x49\157\x4f\165\x55\x5d\57", '', $sociqikgoyemqaac);
        goto kwakioosoiemmiok;
        kwakioosoiemmiok:
        if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) {
            goto cwsacmayigiyqiim;
        }
        goto ckawikqsskikqiya;
        aamysqsckaiwqayk:
        return $sociqikgoyemqaac;
        goto ceusqkuwoqusqoug;
        ckawikqsskikqiya:
        $sociqikgoyemqaac = $uwomkgseoiegeume;
        goto gegywycsimoakaei;
        ceusqkuwoqusqoug:
    }
    
    public static function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string
    {
        goto kcyiiwwsyagcyiic;
        kcyiiwwsyagcyiic:
        $aiieyweysaukqemc = self::aisesaskgsuywqqy($egkyssmuqcwaciya);
        goto cysskkuqiccoycuk;
        cysskkuqiccoycuk:
        $uomewyckeuqoqocu = explode("\x5c", $aiieyweysaukqemc);
        goto micwmacyekkoumqe;
        micwmacyekkoumqe:
        return ManipulateArray::get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc);
        goto iqqsmugsquwuwmys;
        iqqsmugsquwuwmys:
    }
    
    public static function yaaoeasygeggswcq($uusmaiomayssaecw, $yuwymayicwwqiske = "\x5f") : string
    {
        return substr($uusmaiomayssaecw, 0, strlen($yuwymayicwwqiske)) != $yuwymayicwwqiske ? $yuwymayicwwqiske . $uusmaiomayssaecw : $uusmaiomayssaecw;
    }
    
    public static function wiecmkiugmyyqiqc($qwcmueausqgiwigy, string $moyaaaascoeowegu, string $iosuwkkwwioumeqg) : string
    {
        return implode($moyaaaascoeowegu, explode($qwcmueausqgiwigy, $iosuwkkwwioumeqg, 2));
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;

use Exception;
use ReflectionClass;

class ManipulateString extends Common
{
    
    public static function scramble(string $sociqikgoyemqaac) : string
    {
        goto ecikmukcoqciisue;
        oeskmqswawycuqeo:
        
        return strtr($eugsosgsugioquqe, self::NUMBERS_SEQUENCE, "\x71\x72\163\x74\165\x76\167\170\171\x7a");
        goto mkyoqmeigaqsywus;
        awikguaqqiwcqmky:
        
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq);
        goto fwgsuqmqwckweqew;
        ecikmukcoqciisue:
        $ykiwomimkkuiigoq = 16;
        goto imiuiucewegueuic;
        imiuiucewegueuic:
        $sociqikgoyemqaac = hash("\155\144\x35", $sociqikgoyemqaac);
        goto aqosaugqkosuuegw;
        fwgsuqmqwckweqew:
        
        $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT);
        goto oeskmqswawycuqeo;
        aqosaugqkosuuegw:
        
        $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26);
        goto awikguaqqiwcqmky;
        mkyoqmeigaqsywus:
    }
    
    public static function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string
    {
        goto gekkqmaemkuucmum;
        ycuoumuscogyyumk:
        $eugsosgsugioquqe = sha1(wp_rand());
        goto ykuagugmmsammmys;
        ykuagugmmsammmys:
        goto ayqgiggusesgmumc;
        goto yqwaoiwiiueeioyu;
        gekkqmaemkuucmum:
        if (function_exists("\157\160\x65\x6e\x73\163\x6c\x5f\162\x61\156\x64\x6f\x6d\x5f\x70\x73\x65\165\144\157\137\x62\x79\164\x65\x73")) {
            goto okqakgakegqeqyeq;
        }
        goto ycuoumuscogyyumk;
        qwwcygqwemouasmk:
        if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) {
            goto ecqowccyawmkikqa;
        }
        goto saemqkkugcicagmu;
        saemqkkugcicagmu:
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai);
        goto kaqecouikkoyoikw;
        oskqggqaooyquywg:
        ayqgiggusesgmumc:
        goto qwwcygqwemouasmk;
        swgigmkkkusaacqu:
        $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20));
        goto oskqggqaooyquywg;
        yqwaoiwiiueeioyu:
        okqakgakegqeqyeq:
        goto swgigmkkkusaacqu;
        uecugkgkswkksmwu:
        return $eugsosgsugioquqe;
        goto mmuukiksuesugoim;
        kaqecouikkoyoikw:
        ecqowccyawmkikqa:
        goto uecugkgkswkksmwu;
        mmuukiksuesugoim:
    }
    
    public static function uniqid($eomsgokgyssmwmai = 8)
    {
        goto emecuyysuqqwommu;
        iceugoeuecegkosq:
        $momkisisegqcmmwi .= self::uniqid($eomsgokgyssmwmai);
        goto qkuqauayuwkoqyai;
        wsoqwkigckayaqoi:
        if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) {
            goto oqugeiswsecaumem;
        }
        goto iceugoeuecegkosq;
        mqmcuwieyceguisy:
        if ($momkisisegqcmmwi) {
            goto uyouwcwuyqkqgiyq;
        }
        goto csseweewqmmqmoie;
        yioikeisgkcckggw:
        oqugeiswsecaumem:
        goto ugiacwwoamocgaay;
        uuowasqcmykuuqay:
        $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai));
        goto ecmmsuegkwoaqsck;
        geeowmiusiackuiq:
        $asakkwwsyqsqqkkw = pack("\x48\52", $sosyakcgakmeueii);
        goto eukaauoogymyoqcg;
        emecuyysuqqwommu:
        $sosyakcgakmeueii = md5("\x79\157\165\x72\x53\141\x6c\x74\110\x65\162\x65" . uniqid('', true));
        goto geeowmiusiackuiq;
        ecmmsuegkwoaqsck:
        mmsiiummcewgugoq:
        goto wsoqwkigckayaqoi;
        koacwewmoggiokwk:
        $momkisisegqcmmwi = preg_replace("\57\133\x5e\101\x2d\132\141\x2d\x7a\x30\x2d\x39\x5d\x2f", '', $umkokecyamcwcqwe);
        goto uuowasqcmykuuqay;
        eukaauoogymyoqcg:
        $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw);
        goto koacwewmoggiokwk;
        ugiacwwoamocgaay:
        $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai);
        goto mqmcuwieyceguisy;
        qkuqauayuwkoqyai:
        goto mmsiiummcewgugoq;
        goto yioikeisgkcckggw;
        koikmoqykoygkoee:
        uyouwcwuyqkqgiyq:
        goto amimcgigeayacwsi;
        amimcgigeayacwsi:
        return $momkisisegqcmmwi;
        goto gwgkeeeaegyiwuwy;
        csseweewqmmqmoie:
        $momkisisegqcmmwi = uniqid();
        goto koikmoqykoygkoee;
        gwgkeeeaegyiwuwy:
    }
    
    public static function mkwcwqkqeqkqyggc($egkyssmuqcwaciya)
    {
        goto oceyqqosgiumoigk;
        qisgkugkmomqkqyy:
        $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        goto miaqgsgmmucyukck;
        oceyqqosgiumoigk:
        if (is_object($egkyssmuqcwaciya)) {
            goto yoscwomwgukawius;
        }
        goto ewogoyaaykymakio;
        acassceoooicwsmi:
        return $ymqmyyeuycgmigyo;
        goto iiuguqckysykaqqm;
        eaeiyueemeaiscse:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $ymqmyyeuycgmigyo = $oqkmoekaagukcwia->quqaewqkeiiwqiss();
        } catch (Exception $wgaoewqkwgomoaai) {
            $egkyssmuqcwaciya = explode("\134", get_class($egkyssmuqcwaciya));
            $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        }
        goto uuaeyqiykwmeiuqk;
        miaqgsgmmucyukck:
        goto aswswoccyeayaooc;
        goto jkykioyqcqkecswo;
        ewogoyaaykymakio:
        $egkyssmuqcwaciya = explode("\x5c", $egkyssmuqcwaciya);
        goto qisgkugkmomqkqyy;
        uuaeyqiykwmeiuqk:
        aswswoccyeayaooc:
        goto acassceoooicwsmi;
        jkykioyqcqkecswo:
        yoscwomwgukawius:
        goto eaeiyueemeaiscse;
        iiuguqckysykaqqm:
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
        goto ggimaueycwcaweao;
        qwewqcaomcqwwaqg:
        return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq);
        goto cuoomamgiqewcaga;
        cuoomamgiqewcaga:
        owscgyscmmakkagm:
        goto imekyuaciwaewsyg;
        ggimaueycwcaweao:
        if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) {
            goto owscgyscmmakkagm;
        }
        goto qwewqcaomcqwwaqg;
        imekyuaciwaewsyg:
        return $sociqikgoyemqaac;
        goto wcuqseiqgmkiagqo;
        wcuqseiqgmkiagqo:
    }
    
    public static function kwuyaykukcmaqggg($sociqikgoyemqaac) : string
    {
        return strtolower(preg_replace("\x2f\x28\x5b\141\55\x7a\135\51\50\x5b\x41\55\132\x5d\51\x2f", "\x24\61\137\44\62", $sociqikgoyemqaac));
    }
    
    public static function snake2camel($sociqikgoyemqaac) : string
    {
        goto qaokmiyayqscsoey;
        osaemmikqqguwkeu:
        return $sociqikgoyemqaac;
        goto oiekomuumyouqaei;
        qaokmiyayqscsoey:
        $sociqikgoyemqaac = str_replace("\x20", '', ucwords(str_replace("\137", "\x20", $sociqikgoyemqaac)));
        goto sesuguskosoyouaq;
        sesuguskosoyouaq:
        $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]);
        goto osaemmikqqguwkeu;
        oiekomuumyouqaei:
    }
    
    public static function ywuiyekyoaowmuss($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\x5f", "\55", $sociqikgoyemqaac));
    }
    
    public static function cyakegkcqemuyaey($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\x2d", "\x5f", $sociqikgoyemqaac));
    }
    
    public static function amkcmaguoecyiscg($ycskuuyucyuqisaq) : string
    {
        $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq);
        return "\x27{$ycskuuyucyuqisaq}\47";
    }
    
    public static function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg)
    {
        goto wmkcqawaggyycweu;
        wuwyimqcwoocmgma:
        if (!$gaeqamemwmwsyukm) {
            goto cayaamsiykmeacmu;
        }
        goto wasayiuessgesqyg;
        eeeaewggmuucmgke:
        cayaamsiykmeacmu:
        goto cokuamakgaokeooy;
        cmkmcmwqwugqyaua:
        $gaeqamemwmwsyukm = 1;
        goto syiawquewyqquceg;
        cokuamakgaokeooy:
        return $iosuwkkwwioumeqg;
        goto wyumwugwoycammog;
        ucmwiooiyaqqysgi:
        goto sogmmamkkaqauqqi;
        goto eeeaewggmuucmgke;
        syiawquewyqquceg:
        sogmmamkkaqauqqi:
        goto wuwyimqcwoocmgma;
        wmkcqawaggyycweu:
        $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg;
        goto cmkmcmwqwugqyaua;
        wasayiuessgesqyg:
        $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm);
        goto ucmwiooiyaqqysgi;
        wyumwugwoycammog:
    }
    
    public static function crypt($sociqikgoyemqaac, $euakaisoocwokioe = true)
    {
        goto uicekgggkiwiyykk;
        dasseuygmamimemo:
        $aqykuigiuwmmcieu = base64_encode(openssl_encrypt($sociqikgoyemqaac, $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck));
        goto gcuqqquokaqaacwk;
        gcuqqquokaqaacwk:
        mooeqigccuskogqm:
        goto kecysscqgsiiqiuy;
        qycioskysmyisuaq:
        wiiegigayuiikwew:
        goto wwmaagcmssuqyuyo;
        aysowqiuocakwcic:
        if (!function_exists("\157\x70\145\156\x73\x73\x6c\137\x64\145\143\162\171\x70\x74")) {
            goto msswemwawesaoqgi;
        }
        goto rioiswicyaiaqscu;
        maiiaecisekgocgs:
        $eeamcawaiqocomwy = home_url();
        goto kegsswygcecmiumq;
        suqqaiqcyikmwuak:
        msswemwawesaoqgi:
        goto ikmgqgmecqcqumwg;
        kecysscqgsiiqiuy:
        seqcuygkmogesgsw:
        goto gmssueaqqeomimkc;
        uicekgggkiwiyykk:
        
        $qgciuiagkkguykgs = "\101\105\123\55\62\65\x36\55\103\102\103";
        goto ooqyuwsmqcmmwiuy;
        kegsswygcecmiumq:
        $uusmaiomayssaecw = hash("\x73\150\141\62\65\66", "{$eeamcawaiqocomwy}\137\x73\x65\143\162\145\x74\137\153\x65\171");
        goto acoiommggkmcwoec;
        eseukqeswwciauqo:
        return $aqykuigiuwmmcieu;
        goto isaumaiwsokyqgku;
        rioiswicyaiaqscu:
        $aqykuigiuwmmcieu = openssl_decrypt(base64_decode($sociqikgoyemqaac), $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck);
        goto suqqaiqcyikmwuak;
        uugysiwkssgqqasy:
        if ($euakaisoocwokioe) {
            goto wiiegigayuiikwew;
        }
        goto aysowqiuocakwcic;
        acoiommggkmcwoec:
        $imiwcieyucysgsck = substr(hash("\163\x68\141\x32\65\x36", "{$eeamcawaiqocomwy}\137\163\x65\x63\x72\145\164\x5f\x69\x76"), 0, 16);
        goto yoooiiugiwuwomcg;
        wwmaagcmssuqyuyo:
        if (!function_exists("\157\x70\145\x6e\163\163\154\x5f\x65\156\143\162\171\x70\164")) {
            goto mooeqigccuskogqm;
        }
        goto dasseuygmamimemo;
        gmssueaqqeomimkc:
        ekqmseimucoqkuaa:
        goto eseukqeswwciauqo;
        yoooiiugiwuwomcg:
        if (!extension_loaded("\x6f\x70\145\x6e\163\163\x6c")) {
            goto ekqmseimucoqkuaa;
        }
        goto uugysiwkssgqqasy;
        ikmgqgmecqcqumwg:
        goto seqcuygkmogesgsw;
        goto qycioskysmyisuaq;
        ooqyuwsmqcmmwiuy:
        $aqykuigiuwmmcieu = $sociqikgoyemqaac;
        goto maiiaecisekgocgs;
        isaumaiwsokyqgku:
    }
    
    public static function aisesaskgsuywqqy($egkyssmuqcwaciya) : string
    {
        $ymqmyyeuycgmigyo = self::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
        return self::aimgkskucmymyquc("\x5c{$ymqmyyeuycgmigyo}", '', $egkyssmuqcwaciya);
    }
    
    public static function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto kaewsesomywgaqya;
        gekygaomisweagke:
        return $ksaameoqigiaoigg;
        goto gicwwusswicoaewo;
        ogucqcimwucemmqi:
        $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw);
        goto keamkgymemuoumyk;
        kaewsesomywgaqya:
        $ksaameoqigiaoigg = false;
        goto eimkikcwmqgeaaik;
        gciweeimoysqegua:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, -$ykiwomimkkuiigoq) === $ekwsasieesaqcsiw;
        goto uaayeqesiwoyeyky;
        aqkykycuymkgeuca:
        uwymkmkoccikuayq:
        goto gwegqueckokqewgq;
        ukyseaksckwaqccy:
        $ksaameoqigiaoigg = true;
        goto aqkykycuymkgeuca;
        keamkgymemuoumyk:
        if (!$ykiwomimkkuiigoq) {
            goto wuoiuakueguccsic;
        }
        goto gciweeimoysqegua;
        eimkikcwmqgeaaik:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto ssgmgeyqauwowayi;
        }
        goto ogucqcimwucemmqi;
        uaayeqesiwoyeyky:
        goto uwymkmkoccikuayq;
        goto mwoggqumgkkuccsg;
        gwegqueckokqewgq:
        ssgmgeyqauwowayi:
        goto gekygaomisweagke;
        mwoggqumgkkuccsg:
        wuoiuakueguccsic:
        goto ukyseaksckwaqccy;
        gicwwusswicoaewo:
    }
    
    public static function usemqqucksuocoeq($sociqikgoyemqaac) : string
    {
        $ukokkqkkkggcmksy = ["\x25\x32\x31" => "\x21", "\x25\x32\x41" => "\52", "\x25\x32\x37" => "\47", "\x25\x32\70" => "\x28", "\45\62\71" => "\x29"];
        return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy);
    }
    
    public static function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto qmmqgkauawgywmos;
        iqqwqksqmgkeiyye:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto ogaeqkismgiuisec;
        }
        goto swqicamwekkeuiwm;
        swqicamwekkeuiwm:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, 0, strlen($ekwsasieesaqcsiw)) === $ekwsasieesaqcsiw;
        goto qkgmwgkisykeciki;
        qkgmwgkisykeciki:
        ogaeqkismgiuisec:
        goto csgigisimckqsgqk;
        csgigisimckqsgqk:
        return $ksaameoqigiaoigg;
        goto esukkewwucqgewoa;
        qmmqgkauawgywmos:
        $ksaameoqigiaoigg = false;
        goto iqqwqksqmgkeiyye;
        esukkewwucqgewoa:
    }
    
    public static function gumqicgiosoqweoy($sociqikgoyemqaac)
    {
        
        $ymqmyyeuycgmigyo = ManipulateString::wiecmkiugmyyqiqc(self::PR__, '', $sociqikgoyemqaac);
        return self::csuomkyoukqauwcg($ymqmyyeuycgmigyo, 8);
    }
    
    public static function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq)
    {
        goto aoyweksmwmggciqa;
        vgikmsgkoicqkicg:
        $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq);
        goto cuycyaewiggayoyq;
        eayssgemciaigiam:
        $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy);
        goto vgikmsgkoicqkicg;
        aamoqaoqsmaaiqic:
        return $ycskuuyucyuqisaq;
        goto moyaggkeisiyocmy;
        cuycyaewiggayoyq:
        wyoisggmqsmkgmwu:
        goto aamoqaoqsmaaiqic;
        aoyweksmwmggciqa:
        if (!(($yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy)) !== false)) {
            goto wyoisggmqsmkgmwu;
        }
        goto eayssgemciaigiam;
        moyaggkeisiyocmy:
    }
    
    public static function eqyqgywiseiwqocc($uomewyckeuqoqocu) : string
    {
        goto ksmiwscciwcugeii;
        cygmcwemkeicyqsg:
        uekocieigyaeiesk:
        goto ekiaoywcsemmomqw;
        ksmiwscciwcugeii:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto uekocieigyaeiesk;
        }
        goto skickmuouwmgykag;
        skickmuouwmgykag:
        $uomewyckeuqoqocu = join("\47\x2c\40\x27", array_map("\145\x73\x63\x5f\x73\x71\x6c", $uomewyckeuqoqocu));
        goto cygmcwemkeicyqsg;
        ekiaoywcsemmomqw:
        return $uomewyckeuqoqocu;
        goto koaeoimocwqoguem;
        koaeoimocwqoguem:
    }
    
    public static function csuomkyoukqauwcg($sociqikgoyemqaac, $aoqagsqecokqqwqg = 5)
    {
        goto cwsacmayigiyqiim;
        gegywycsimoakaei:
        return $sociqikgoyemqaac;
        goto aamysqsckaiwqayk;
        kwakioosoiemmiok:
        $sociqikgoyemqaac = $uwomkgseoiegeume;
        goto ckawikqsskikqiya;
        cwsacmayigiyqiim:
        $uwomkgseoiegeume = preg_replace("\x2f\50\x3f\x3c\x21\136\51\133\141\x41\x65\x45\151\111\157\x4f\x75\125\x5d\x2f", '', $sociqikgoyemqaac);
        goto awcsskayoyoqcuie;
        awcsskayoyoqcuie:
        if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) {
            goto yaiicikgkwuucyac;
        }
        goto kwakioosoiemmiok;
        ckawikqsskikqiya:
        yaiicikgkwuucyac:
        goto gegywycsimoakaei;
        aamysqsckaiwqayk:
    }
    
    public static function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string
    {
        goto ceusqkuwoqusqoug;
        ceusqkuwoqusqoug:
        $aiieyweysaukqemc = self::aisesaskgsuywqqy($egkyssmuqcwaciya);
        goto kcyiiwwsyagcyiic;
        cysskkuqiccoycuk:
        return ManipulateArray::get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc);
        goto micwmacyekkoumqe;
        kcyiiwwsyagcyiic:
        $uomewyckeuqoqocu = explode("\134", $aiieyweysaukqemc);
        goto cysskkuqiccoycuk;
        micwmacyekkoumqe:
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

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        awikguaqqiwcqmky:
        
        $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26);
        goto fwgsuqmqwckweqew;
        mkyoqmeigaqsywus:
        
        return strtr($eugsosgsugioquqe, self::NUMBERS_SEQUENCE, "\x71\x72\163\x74\165\166\167\170\x79\x7a");
        goto okqakgakegqeqyeq;
        fwgsuqmqwckweqew:
        
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq);
        goto oeskmqswawycuqeo;
        aqosaugqkosuuegw:
        $sociqikgoyemqaac = hash("\x6d\x64\65", $sociqikgoyemqaac);
        goto awikguaqqiwcqmky;
        oeskmqswawycuqeo:
        
        $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT);
        goto mkyoqmeigaqsywus;
        imiuiucewegueuic:
        $ykiwomimkkuiigoq = 16;
        goto aqosaugqkosuuegw;
        okqakgakegqeqyeq:
    }
    
    public static function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string
    {
        goto ycuoumuscogyyumk;
        qwwcygqwemouasmk:
        ecqowccyawmkikqa:
        goto saemqkkugcicagmu;
        saemqkkugcicagmu:
        if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) {
            goto gekkqmaemkuucmum;
        }
        goto kaqecouikkoyoikw;
        uecugkgkswkksmwu:
        gekkqmaemkuucmum:
        goto mmuukiksuesugoim;
        kaqecouikkoyoikw:
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai);
        goto uecugkgkswkksmwu;
        mmuukiksuesugoim:
        return $eugsosgsugioquqe;
        goto oqugeiswsecaumem;
        oskqggqaooyquywg:
        $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20));
        goto qwwcygqwemouasmk;
        swgigmkkkusaacqu:
        ayqgiggusesgmumc:
        goto oskqggqaooyquywg;
        ykuagugmmsammmys:
        $eugsosgsugioquqe = sha1(wp_rand());
        goto yqwaoiwiiueeioyu;
        ycuoumuscogyyumk:
        if (function_exists("\157\160\x65\x6e\x73\x73\154\137\x72\x61\156\144\157\155\x5f\160\x73\145\x75\144\157\x5f\x62\171\164\x65\x73")) {
            goto ayqgiggusesgmumc;
        }
        goto ykuagugmmsammmys;
        yqwaoiwiiueeioyu:
        goto ecqowccyawmkikqa;
        goto swgigmkkkusaacqu;
        oqugeiswsecaumem:
    }
    
    public static function uniqid($eomsgokgyssmwmai = 8)
    {
        goto geeowmiusiackuiq;
        wsoqwkigckayaqoi:
        uyouwcwuyqkqgiyq:
        goto iceugoeuecegkosq;
        ugiacwwoamocgaay:
        mmsiiummcewgugoq:
        goto mqmcuwieyceguisy;
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
        koacwewmoggiokwk:
        $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw);
        goto uuowasqcmykuuqay;
        csseweewqmmqmoie:
        if ($momkisisegqcmmwi) {
            goto emecuyysuqqwommu;
        }
        goto koikmoqykoygkoee;
        uuowasqcmykuuqay:
        $momkisisegqcmmwi = preg_replace("\57\x5b\136\x41\55\x5a\x61\55\172\x30\x2d\71\x5d\57", '', $umkokecyamcwcqwe);
        goto ecmmsuegkwoaqsck;
        eukaauoogymyoqcg:
        $asakkwwsyqsqqkkw = pack("\110\x2a", $sosyakcgakmeueii);
        goto koacwewmoggiokwk;
        yioikeisgkcckggw:
        goto uyouwcwuyqkqgiyq;
        goto ugiacwwoamocgaay;
        amimcgigeayacwsi:
        emecuyysuqqwommu:
        goto gwgkeeeaegyiwuwy;
        geeowmiusiackuiq:
        $sosyakcgakmeueii = md5("\x79\157\x75\162\x53\x61\x6c\x74\110\x65\162\x65" . uniqid('', true));
        goto eukaauoogymyoqcg;
        qkuqauayuwkoqyai:
        $momkisisegqcmmwi .= self::uniqid($eomsgokgyssmwmai);
        goto yioikeisgkcckggw;
        mqmcuwieyceguisy:
        $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai);
        goto csseweewqmmqmoie;
        gwgkeeeaegyiwuwy:
        return $momkisisegqcmmwi;
        goto yoscwomwgukawius;
        yoscwomwgukawius:
    }
    
    public static function mkwcwqkqeqkqyggc($egkyssmuqcwaciya)
    {
        goto ewogoyaaykymakio;
        qisgkugkmomqkqyy:
        $egkyssmuqcwaciya = explode("\x5c", $egkyssmuqcwaciya);
        goto miaqgsgmmucyukck;
        acassceoooicwsmi:
        oceyqqosgiumoigk:
        goto iiuguqckysykaqqm;
        miaqgsgmmucyukck:
        $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        goto jkykioyqcqkecswo;
        eaeiyueemeaiscse:
        aswswoccyeayaooc:
        goto uuaeyqiykwmeiuqk;
        uuaeyqiykwmeiuqk:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $ymqmyyeuycgmigyo = $oqkmoekaagukcwia->quqaewqkeiiwqiss();
        } catch (Exception $wgaoewqkwgomoaai) {
            $egkyssmuqcwaciya = explode("\134", get_class($egkyssmuqcwaciya));
            $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        }
        goto acassceoooicwsmi;
        jkykioyqcqkecswo:
        goto oceyqqosgiumoigk;
        goto eaeiyueemeaiscse;
        iiuguqckysykaqqm:
        return $ymqmyyeuycgmigyo;
        goto owscgyscmmakkagm;
        ewogoyaaykymakio:
        if (is_object($egkyssmuqcwaciya)) {
            goto aswswoccyeayaooc;
        }
        goto qisgkugkmomqkqyy;
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
        return str_replace("\x20", "\55", self::ywuiyekyoaowmuss($sociqikgoyemqaac));
    }
    
    public static function qoqowykumameucwa($sociqikgoyemqaac) : ?string
    {
        $sociqikgoyemqaac = self::cyakegkcqemuyaey($sociqikgoyemqaac);
        return self::snake2camel($sociqikgoyemqaac);
    }
    
    public static function ucymkkoowkqeauga($sociqikgoyemqaac, $ekwsasieesaqcsiw)
    {
        goto qwewqcaomcqwwaqg;
        wcuqseiqgmkiagqo:
        return $sociqikgoyemqaac;
        goto qaokmiyayqscsoey;
        imekyuaciwaewsyg:
        ggimaueycwcaweao:
        goto wcuqseiqgmkiagqo;
        qwewqcaomcqwwaqg:
        if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) {
            goto ggimaueycwcaweao;
        }
        goto cuoomamgiqewcaga;
        cuoomamgiqewcaga:
        return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq);
        goto imekyuaciwaewsyg;
        qaokmiyayqscsoey:
    }
    
    public static function kwuyaykukcmaqggg($sociqikgoyemqaac) : string
    {
        return strtolower(preg_replace("\57\50\133\x61\x2d\x7a\x5d\51\50\x5b\x41\x2d\x5a\x5d\x29\57", "\x24\61\x5f\44\62", $sociqikgoyemqaac));
    }
    
    public static function snake2camel($sociqikgoyemqaac) : string
    {
        goto sesuguskosoyouaq;
        osaemmikqqguwkeu:
        $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]);
        goto oiekomuumyouqaei;
        oiekomuumyouqaei:
        return $sociqikgoyemqaac;
        goto cayaamsiykmeacmu;
        sesuguskosoyouaq:
        $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\137", "\40", $sociqikgoyemqaac)));
        goto osaemmikqqguwkeu;
        cayaamsiykmeacmu:
    }
    
    public static function ywuiyekyoaowmuss($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\x5f", "\55", $sociqikgoyemqaac));
    }
    
    public static function cyakegkcqemuyaey($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\55", "\137", $sociqikgoyemqaac));
    }
    
    public static function amkcmaguoecyiscg($ycskuuyucyuqisaq) : string
    {
        $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq);
        return "\x27{$ycskuuyucyuqisaq}\x27";
    }
    
    public static function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg)
    {
        goto cmkmcmwqwugqyaua;
        wuwyimqcwoocmgma:
        wmkcqawaggyycweu:
        goto wasayiuessgesqyg;
        wasayiuessgesqyg:
        if (!$gaeqamemwmwsyukm) {
            goto sogmmamkkaqauqqi;
        }
        goto ucmwiooiyaqqysgi;
        syiawquewyqquceg:
        $gaeqamemwmwsyukm = 1;
        goto wuwyimqcwoocmgma;
        ucmwiooiyaqqysgi:
        $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm);
        goto eeeaewggmuucmgke;
        cmkmcmwqwugqyaua:
        $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg;
        goto syiawquewyqquceg;
        wyumwugwoycammog:
        return $iosuwkkwwioumeqg;
        goto mooeqigccuskogqm;
        eeeaewggmuucmgke:
        goto wmkcqawaggyycweu;
        goto cokuamakgaokeooy;
        cokuamakgaokeooy:
        sogmmamkkaqauqqi:
        goto wyumwugwoycammog;
        mooeqigccuskogqm:
    }
    
    public static function crypt($sociqikgoyemqaac, $euakaisoocwokioe = true)
    {
        goto ooqyuwsmqcmmwiuy;
        yoooiiugiwuwomcg:
        $imiwcieyucysgsck = substr(hash("\x73\150\x61\62\x35\66", "{$eeamcawaiqocomwy}\x5f\163\x65\143\162\x65\164\x5f\x69\166"), 0, 16);
        goto uugysiwkssgqqasy;
        dasseuygmamimemo:
        if (!function_exists("\157\x70\x65\156\163\x73\154\x5f\145\156\x63\x72\171\160\164")) {
            goto msswemwawesaoqgi;
        }
        goto gcuqqquokaqaacwk;
        eseukqeswwciauqo:
        uicekgggkiwiyykk:
        goto isaumaiwsokyqgku;
        maiiaecisekgocgs:
        $aqykuigiuwmmcieu = $sociqikgoyemqaac;
        goto kegsswygcecmiumq;
        isaumaiwsokyqgku:
        return $aqykuigiuwmmcieu;
        goto wuoiuakueguccsic;
        wwmaagcmssuqyuyo:
        seqcuygkmogesgsw:
        goto dasseuygmamimemo;
        ooqyuwsmqcmmwiuy:
        
        $qgciuiagkkguykgs = "\x41\x45\123\x2d\62\65\x36\55\103\x42\x43";
        goto maiiaecisekgocgs;
        uugysiwkssgqqasy:
        if (!extension_loaded("\157\x70\x65\x6e\163\x73\x6c")) {
            goto uicekgggkiwiyykk;
        }
        goto aysowqiuocakwcic;
        acoiommggkmcwoec:
        $uusmaiomayssaecw = hash("\163\150\x61\x32\65\66", "{$eeamcawaiqocomwy}\x5f\163\145\x63\x72\145\164\137\x6b\x65\x79");
        goto yoooiiugiwuwomcg;
        gcuqqquokaqaacwk:
        $aqykuigiuwmmcieu = base64_encode(openssl_encrypt($sociqikgoyemqaac, $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck));
        goto kecysscqgsiiqiuy;
        qycioskysmyisuaq:
        goto ekqmseimucoqkuaa;
        goto wwmaagcmssuqyuyo;
        rioiswicyaiaqscu:
        if (!function_exists("\x6f\x70\145\156\x73\x73\x6c\x5f\x64\145\x63\162\x79\x70\164")) {
            goto wiiegigayuiikwew;
        }
        goto suqqaiqcyikmwuak;
        ikmgqgmecqcqumwg:
        wiiegigayuiikwew:
        goto qycioskysmyisuaq;
        kegsswygcecmiumq:
        $eeamcawaiqocomwy = home_url();
        goto acoiommggkmcwoec;
        kecysscqgsiiqiuy:
        msswemwawesaoqgi:
        goto gmssueaqqeomimkc;
        gmssueaqqeomimkc:
        ekqmseimucoqkuaa:
        goto eseukqeswwciauqo;
        aysowqiuocakwcic:
        if ($euakaisoocwokioe) {
            goto seqcuygkmogesgsw;
        }
        goto rioiswicyaiaqscu;
        suqqaiqcyikmwuak:
        $aqykuigiuwmmcieu = openssl_decrypt(base64_decode($sociqikgoyemqaac), $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck);
        goto ikmgqgmecqcqumwg;
        wuoiuakueguccsic:
    }
    
    public static function aisesaskgsuywqqy($egkyssmuqcwaciya) : string
    {
        $ymqmyyeuycgmigyo = self::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
        return self::aimgkskucmymyquc("\134{$ymqmyyeuycgmigyo}", '', $egkyssmuqcwaciya);
    }
    
    public static function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto eimkikcwmqgeaaik;
        ukyseaksckwaqccy:
        uwymkmkoccikuayq:
        goto aqkykycuymkgeuca;
        gicwwusswicoaewo:
        return $ksaameoqigiaoigg;
        goto ogaeqkismgiuisec;
        ogucqcimwucemmqi:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto kaewsesomywgaqya;
        }
        goto keamkgymemuoumyk;
        eimkikcwmqgeaaik:
        $ksaameoqigiaoigg = false;
        goto ogucqcimwucemmqi;
        mwoggqumgkkuccsg:
        goto ssgmgeyqauwowayi;
        goto ukyseaksckwaqccy;
        gekygaomisweagke:
        kaewsesomywgaqya:
        goto gicwwusswicoaewo;
        gciweeimoysqegua:
        if (!$ykiwomimkkuiigoq) {
            goto uwymkmkoccikuayq;
        }
        goto uaayeqesiwoyeyky;
        keamkgymemuoumyk:
        $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw);
        goto gciweeimoysqegua;
        aqkykycuymkgeuca:
        $ksaameoqigiaoigg = true;
        goto gwegqueckokqewgq;
        gwegqueckokqewgq:
        ssgmgeyqauwowayi:
        goto gekygaomisweagke;
        uaayeqesiwoyeyky:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, -$ykiwomimkkuiigoq) === $ekwsasieesaqcsiw;
        goto mwoggqumgkkuccsg;
        ogaeqkismgiuisec:
    }
    
    public static function usemqqucksuocoeq($sociqikgoyemqaac) : string
    {
        $ukokkqkkkggcmksy = ["\45\x32\x31" => "\41", "\x25\62\x41" => "\52", "\x25\x32\x37" => "\x27", "\x25\62\x38" => "\50", "\45\x32\71" => "\x29"];
        return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy);
    }
    
    public static function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto iqqwqksqmgkeiyye;
        iqqwqksqmgkeiyye:
        $ksaameoqigiaoigg = false;
        goto swqicamwekkeuiwm;
        csgigisimckqsgqk:
        qmmqgkauawgywmos:
        goto esukkewwucqgewoa;
        swqicamwekkeuiwm:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto qmmqgkauawgywmos;
        }
        goto qkgmwgkisykeciki;
        esukkewwucqgewoa:
        return $ksaameoqigiaoigg;
        goto wyoisggmqsmkgmwu;
        qkgmwgkisykeciki:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, 0, strlen($ekwsasieesaqcsiw)) === $ekwsasieesaqcsiw;
        goto csgigisimckqsgqk;
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
        aamoqaoqsmaaiqic:
        aoyweksmwmggciqa:
        goto moyaggkeisiyocmy;
        cuycyaewiggayoyq:
        $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq);
        goto aamoqaoqsmaaiqic;
        eayssgemciaigiam:
        if (!(($yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy)) !== false)) {
            goto aoyweksmwmggciqa;
        }
        goto vgikmsgkoicqkicg;
        vgikmsgkoicqkicg:
        $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy);
        goto cuycyaewiggayoyq;
        moyaggkeisiyocmy:
        return $ycskuuyucyuqisaq;
        goto uekocieigyaeiesk;
        uekocieigyaeiesk:
    }
    
    public static function eqyqgywiseiwqocc($uomewyckeuqoqocu) : string
    {
        goto skickmuouwmgykag;
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
        cygmcwemkeicyqsg:
        $uomewyckeuqoqocu = join("\x27\x2c\40\47", array_map("\x65\x73\x63\137\163\x71\154", $uomewyckeuqoqocu));
        goto ekiaoywcsemmomqw;
        yaiicikgkwuucyac:
    }
    
    public static function csuomkyoukqauwcg($sociqikgoyemqaac, $aoqagsqecokqqwqg = 5)
    {
        goto awcsskayoyoqcuie;
        awcsskayoyoqcuie:
        $uwomkgseoiegeume = preg_replace("\x2f\50\77\x3c\41\136\x29\x5b\x61\101\145\105\151\111\x6f\117\x75\125\x5d\57", '', $sociqikgoyemqaac);
        goto kwakioosoiemmiok;
        ckawikqsskikqiya:
        $sociqikgoyemqaac = $uwomkgseoiegeume;
        goto gegywycsimoakaei;
        gegywycsimoakaei:
        cwsacmayigiyqiim:
        goto aamysqsckaiwqayk;
        kwakioosoiemmiok:
        if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) {
            goto cwsacmayigiyqiim;
        }
        goto ckawikqsskikqiya;
        aamysqsckaiwqayk:
        return $sociqikgoyemqaac;
        goto ceusqkuwoqusqoug;
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

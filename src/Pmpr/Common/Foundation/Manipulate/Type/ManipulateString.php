<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        aqosaugqkosuuegw:
        
        $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26);
        goto awikguaqqiwcqmky;
        awikguaqqiwcqmky:
        
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq);
        goto fwgsuqmqwckweqew;
        fwgsuqmqwckweqew:
        
        $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\x30", STR_PAD_LEFT);
        goto oeskmqswawycuqeo;
        oeskmqswawycuqeo:
        
        return strtr($eugsosgsugioquqe, self::NUMBERS_SEQUENCE, "\x71\x72\x73\x74\x75\x76\167\170\x79\172");
        goto mkyoqmeigaqsywus;
        imiuiucewegueuic:
        $sociqikgoyemqaac = hash("\155\x64\65", $sociqikgoyemqaac);
        goto aqosaugqkosuuegw;
        ecikmukcoqciisue:
        $ykiwomimkkuiigoq = 16;
        goto imiuiucewegueuic;
        mkyoqmeigaqsywus:
    }
    
    public static function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string
    {
        goto gekkqmaemkuucmum;
        qwwcygqwemouasmk:
        if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) {
            goto ecqowccyawmkikqa;
        }
        goto saemqkkugcicagmu;
        kaqecouikkoyoikw:
        ecqowccyawmkikqa:
        goto uecugkgkswkksmwu;
        gekkqmaemkuucmum:
        if (function_exists("\x6f\x70\145\x6e\x73\163\154\x5f\x72\x61\x6e\144\x6f\x6d\x5f\x70\163\x65\165\144\157\x5f\x62\171\164\x65\x73")) {
            goto okqakgakegqeqyeq;
        }
        goto ycuoumuscogyyumk;
        yqwaoiwiiueeioyu:
        okqakgakegqeqyeq:
        goto swgigmkkkusaacqu;
        swgigmkkkusaacqu:
        $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20));
        goto oskqggqaooyquywg;
        ycuoumuscogyyumk:
        $eugsosgsugioquqe = sha1(wp_rand());
        goto ykuagugmmsammmys;
        oskqggqaooyquywg:
        ayqgiggusesgmumc:
        goto qwwcygqwemouasmk;
        uecugkgkswkksmwu:
        return $eugsosgsugioquqe;
        goto mmuukiksuesugoim;
        saemqkkugcicagmu:
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai);
        goto kaqecouikkoyoikw;
        ykuagugmmsammmys:
        goto ayqgiggusesgmumc;
        goto yqwaoiwiiueeioyu;
        mmuukiksuesugoim:
    }
    
    public static function uniqid($eomsgokgyssmwmai = 8)
    {
        goto emecuyysuqqwommu;
        qkuqauayuwkoqyai:
        goto mmsiiummcewgugoq;
        goto yioikeisgkcckggw;
        yioikeisgkcckggw:
        oqugeiswsecaumem:
        goto ugiacwwoamocgaay;
        koacwewmoggiokwk:
        $momkisisegqcmmwi = preg_replace("\57\x5b\136\101\x2d\x5a\141\55\172\x30\x2d\x39\135\x2f", '', $umkokecyamcwcqwe);
        goto uuowasqcmykuuqay;
        emecuyysuqqwommu:
        $sosyakcgakmeueii = md5("\x79\157\x75\x72\x53\141\x6c\x74\110\x65\x72\x65" . uniqid('', true));
        goto geeowmiusiackuiq;
        amimcgigeayacwsi:
        return $momkisisegqcmmwi;
        goto gwgkeeeaegyiwuwy;
        uuowasqcmykuuqay:
        $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai));
        goto ecmmsuegkwoaqsck;
        eukaauoogymyoqcg:
        $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw);
        goto koacwewmoggiokwk;
        geeowmiusiackuiq:
        $asakkwwsyqsqqkkw = pack("\110\x2a", $sosyakcgakmeueii);
        goto eukaauoogymyoqcg;
        koikmoqykoygkoee:
        uyouwcwuyqkqgiyq:
        goto amimcgigeayacwsi;
        mqmcuwieyceguisy:
        if ($momkisisegqcmmwi) {
            goto uyouwcwuyqkqgiyq;
        }
        goto csseweewqmmqmoie;
        ugiacwwoamocgaay:
        $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai);
        goto mqmcuwieyceguisy;
        iceugoeuecegkosq:
        $momkisisegqcmmwi .= self::uniqid($eomsgokgyssmwmai);
        goto qkuqauayuwkoqyai;
        ecmmsuegkwoaqsck:
        mmsiiummcewgugoq:
        goto wsoqwkigckayaqoi;
        csseweewqmmqmoie:
        $momkisisegqcmmwi = uniqid();
        goto koikmoqykoygkoee;
        wsoqwkigckayaqoi:
        if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) {
            goto oqugeiswsecaumem;
        }
        goto iceugoeuecegkosq;
        gwgkeeeaegyiwuwy:
    }
    
    public static function mkwcwqkqeqkqyggc($egkyssmuqcwaciya)
    {
        goto oceyqqosgiumoigk;
        oceyqqosgiumoigk:
        if (is_object($egkyssmuqcwaciya)) {
            goto yoscwomwgukawius;
        }
        goto ewogoyaaykymakio;
        eaeiyueemeaiscse:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $ymqmyyeuycgmigyo = $oqkmoekaagukcwia->quqaewqkeiiwqiss();
        } catch (Exception $wgaoewqkwgomoaai) {
            $egkyssmuqcwaciya = explode("\134", get_class($egkyssmuqcwaciya));
            $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        }
        goto uuaeyqiykwmeiuqk;
        ewogoyaaykymakio:
        $egkyssmuqcwaciya = explode("\134", $egkyssmuqcwaciya);
        goto qisgkugkmomqkqyy;
        qisgkugkmomqkqyy:
        $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        goto miaqgsgmmucyukck;
        jkykioyqcqkecswo:
        yoscwomwgukawius:
        goto eaeiyueemeaiscse;
        acassceoooicwsmi:
        return $ymqmyyeuycgmigyo;
        goto iiuguqckysykaqqm;
        miaqgsgmmucyukck:
        goto aswswoccyeayaooc;
        goto jkykioyqcqkecswo;
        uuaeyqiykwmeiuqk:
        aswswoccyeayaooc:
        goto acassceoooicwsmi;
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
        ggimaueycwcaweao:
        if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) {
            goto owscgyscmmakkagm;
        }
        goto qwewqcaomcqwwaqg;
        imekyuaciwaewsyg:
        return $sociqikgoyemqaac;
        goto wcuqseiqgmkiagqo;
        cuoomamgiqewcaga:
        owscgyscmmakkagm:
        goto imekyuaciwaewsyg;
        qwewqcaomcqwwaqg:
        return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq);
        goto cuoomamgiqewcaga;
        wcuqseiqgmkiagqo:
    }
    
    public static function kwuyaykukcmaqggg($sociqikgoyemqaac) : string
    {
        return strtolower(preg_replace("\x2f\50\133\x61\x2d\x7a\x5d\x29\50\x5b\101\x2d\132\x5d\x29\x2f", "\x24\61\137\x24\62", $sociqikgoyemqaac));
    }
    
    public static function snake2camel($sociqikgoyemqaac) : string
    {
        goto qaokmiyayqscsoey;
        qaokmiyayqscsoey:
        $sociqikgoyemqaac = str_replace("\x20", '', ucwords(str_replace("\137", "\x20", $sociqikgoyemqaac)));
        goto sesuguskosoyouaq;
        sesuguskosoyouaq:
        $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]);
        goto osaemmikqqguwkeu;
        osaemmikqqguwkeu:
        return $sociqikgoyemqaac;
        goto oiekomuumyouqaei;
        oiekomuumyouqaei:
    }
    
    public static function ywuiyekyoaowmuss($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\x5f", "\x2d", $sociqikgoyemqaac));
    }
    
    public static function cyakegkcqemuyaey($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\55", "\x5f", $sociqikgoyemqaac));
    }
    
    public static function amkcmaguoecyiscg($ycskuuyucyuqisaq) : string
    {
        $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq);
        return "\47{$ycskuuyucyuqisaq}\x27";
    }
    
    public static function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg)
    {
        goto wmkcqawaggyycweu;
        wuwyimqcwoocmgma:
        if (!$gaeqamemwmwsyukm) {
            goto cayaamsiykmeacmu;
        }
        goto wasayiuessgesqyg;
        cmkmcmwqwugqyaua:
        $gaeqamemwmwsyukm = 1;
        goto syiawquewyqquceg;
        ucmwiooiyaqqysgi:
        goto sogmmamkkaqauqqi;
        goto eeeaewggmuucmgke;
        eeeaewggmuucmgke:
        cayaamsiykmeacmu:
        goto cokuamakgaokeooy;
        cokuamakgaokeooy:
        return $iosuwkkwwioumeqg;
        goto wyumwugwoycammog;
        wasayiuessgesqyg:
        $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm);
        goto ucmwiooiyaqqysgi;
        syiawquewyqquceg:
        sogmmamkkaqauqqi:
        goto wuwyimqcwoocmgma;
        wmkcqawaggyycweu:
        $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg;
        goto cmkmcmwqwugqyaua;
        wyumwugwoycammog:
    }
    
    public static function crypt($sociqikgoyemqaac, $euakaisoocwokioe = true)
    {
        goto uicekgggkiwiyykk;
        gmssueaqqeomimkc:
        ekqmseimucoqkuaa:
        goto eseukqeswwciauqo;
        ooqyuwsmqcmmwiuy:
        $aqykuigiuwmmcieu = $sociqikgoyemqaac;
        goto maiiaecisekgocgs;
        acoiommggkmcwoec:
        $imiwcieyucysgsck = substr(hash("\x73\150\x61\x32\65\66", "{$eeamcawaiqocomwy}\x5f\163\x65\x63\162\x65\x74\137\151\x76"), 0, 16);
        goto yoooiiugiwuwomcg;
        uugysiwkssgqqasy:
        if ($euakaisoocwokioe) {
            goto wiiegigayuiikwew;
        }
        goto aysowqiuocakwcic;
        uicekgggkiwiyykk:
        
        $qgciuiagkkguykgs = "\x41\x45\x53\x2d\62\x35\66\55\x43\x42\103";
        goto ooqyuwsmqcmmwiuy;
        yoooiiugiwuwomcg:
        if (!extension_loaded("\157\x70\145\x6e\x73\163\x6c")) {
            goto ekqmseimucoqkuaa;
        }
        goto uugysiwkssgqqasy;
        maiiaecisekgocgs:
        $eeamcawaiqocomwy = home_url();
        goto kegsswygcecmiumq;
        wwmaagcmssuqyuyo:
        if (!function_exists("\157\160\145\x6e\x73\x73\x6c\137\145\x6e\143\x72\171\160\x74")) {
            goto mooeqigccuskogqm;
        }
        goto dasseuygmamimemo;
        dasseuygmamimemo:
        $aqykuigiuwmmcieu = base64_encode(openssl_encrypt($sociqikgoyemqaac, $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck));
        goto gcuqqquokaqaacwk;
        suqqaiqcyikmwuak:
        msswemwawesaoqgi:
        goto ikmgqgmecqcqumwg;
        rioiswicyaiaqscu:
        $aqykuigiuwmmcieu = openssl_decrypt(base64_decode($sociqikgoyemqaac), $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck);
        goto suqqaiqcyikmwuak;
        aysowqiuocakwcic:
        if (!function_exists("\x6f\160\145\x6e\x73\x73\x6c\x5f\144\145\x63\x72\171\160\x74")) {
            goto msswemwawesaoqgi;
        }
        goto rioiswicyaiaqscu;
        qycioskysmyisuaq:
        wiiegigayuiikwew:
        goto wwmaagcmssuqyuyo;
        gcuqqquokaqaacwk:
        mooeqigccuskogqm:
        goto kecysscqgsiiqiuy;
        kegsswygcecmiumq:
        $uusmaiomayssaecw = hash("\163\x68\141\x32\x35\66", "{$eeamcawaiqocomwy}\x5f\x73\x65\x63\162\x65\x74\137\153\145\171");
        goto acoiommggkmcwoec;
        ikmgqgmecqcqumwg:
        goto seqcuygkmogesgsw;
        goto qycioskysmyisuaq;
        kecysscqgsiiqiuy:
        seqcuygkmogesgsw:
        goto gmssueaqqeomimkc;
        eseukqeswwciauqo:
        return $aqykuigiuwmmcieu;
        goto isaumaiwsokyqgku;
        isaumaiwsokyqgku:
    }
    
    public static function aisesaskgsuywqqy($egkyssmuqcwaciya) : string
    {
        $ymqmyyeuycgmigyo = self::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
        return self::aimgkskucmymyquc("\134{$ymqmyyeuycgmigyo}", '', $egkyssmuqcwaciya);
    }
    
    public static function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto kaewsesomywgaqya;
        ukyseaksckwaqccy:
        $ksaameoqigiaoigg = true;
        goto aqkykycuymkgeuca;
        kaewsesomywgaqya:
        $ksaameoqigiaoigg = false;
        goto eimkikcwmqgeaaik;
        aqkykycuymkgeuca:
        uwymkmkoccikuayq:
        goto gwegqueckokqewgq;
        eimkikcwmqgeaaik:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto ssgmgeyqauwowayi;
        }
        goto ogucqcimwucemmqi;
        gekygaomisweagke:
        return $ksaameoqigiaoigg;
        goto gicwwusswicoaewo;
        gwegqueckokqewgq:
        ssgmgeyqauwowayi:
        goto gekygaomisweagke;
        ogucqcimwucemmqi:
        $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw);
        goto keamkgymemuoumyk;
        keamkgymemuoumyk:
        if (!$ykiwomimkkuiigoq) {
            goto wuoiuakueguccsic;
        }
        goto gciweeimoysqegua;
        uaayeqesiwoyeyky:
        goto uwymkmkoccikuayq;
        goto mwoggqumgkkuccsg;
        gciweeimoysqegua:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, -$ykiwomimkkuiigoq) === $ekwsasieesaqcsiw;
        goto uaayeqesiwoyeyky;
        mwoggqumgkkuccsg:
        wuoiuakueguccsic:
        goto ukyseaksckwaqccy;
        gicwwusswicoaewo:
    }
    
    public static function usemqqucksuocoeq($sociqikgoyemqaac) : string
    {
        $ukokkqkkkggcmksy = ["\45\62\x31" => "\x21", "\x25\62\101" => "\x2a", "\45\x32\x37" => "\47", "\x25\62\x38" => "\50", "\x25\62\x39" => "\51"];
        return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy);
    }
    
    public static function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto qmmqgkauawgywmos;
        csgigisimckqsgqk:
        return $ksaameoqigiaoigg;
        goto esukkewwucqgewoa;
        qmmqgkauawgywmos:
        $ksaameoqigiaoigg = false;
        goto iqqwqksqmgkeiyye;
        swqicamwekkeuiwm:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, 0, strlen($ekwsasieesaqcsiw)) === $ekwsasieesaqcsiw;
        goto qkgmwgkisykeciki;
        qkgmwgkisykeciki:
        ogaeqkismgiuisec:
        goto csgigisimckqsgqk;
        iqqwqksqmgkeiyye:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto ogaeqkismgiuisec;
        }
        goto swqicamwekkeuiwm;
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
        cuycyaewiggayoyq:
        wyoisggmqsmkgmwu:
        goto aamoqaoqsmaaiqic;
        vgikmsgkoicqkicg:
        $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq);
        goto cuycyaewiggayoyq;
        aoyweksmwmggciqa:
        if (!(($yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy)) !== false)) {
            goto wyoisggmqsmkgmwu;
        }
        goto eayssgemciaigiam;
        eayssgemciaigiam:
        $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy);
        goto vgikmsgkoicqkicg;
        aamoqaoqsmaaiqic:
        return $ycskuuyucyuqisaq;
        goto moyaggkeisiyocmy;
        moyaggkeisiyocmy:
    }
    
    public static function eqyqgywiseiwqocc($uomewyckeuqoqocu) : string
    {
        goto ksmiwscciwcugeii;
        ksmiwscciwcugeii:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto uekocieigyaeiesk;
        }
        goto skickmuouwmgykag;
        skickmuouwmgykag:
        $uomewyckeuqoqocu = join("\x27\x2c\40\x27", array_map("\145\163\x63\137\163\161\x6c", $uomewyckeuqoqocu));
        goto cygmcwemkeicyqsg;
        ekiaoywcsemmomqw:
        return $uomewyckeuqoqocu;
        goto koaeoimocwqoguem;
        cygmcwemkeicyqsg:
        uekocieigyaeiesk:
        goto ekiaoywcsemmomqw;
        koaeoimocwqoguem:
    }
    
    public static function csuomkyoukqauwcg($sociqikgoyemqaac, $aoqagsqecokqqwqg = 5)
    {
        goto cwsacmayigiyqiim;
        awcsskayoyoqcuie:
        if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) {
            goto yaiicikgkwuucyac;
        }
        goto kwakioosoiemmiok;
        ckawikqsskikqiya:
        yaiicikgkwuucyac:
        goto gegywycsimoakaei;
        gegywycsimoakaei:
        return $sociqikgoyemqaac;
        goto aamysqsckaiwqayk;
        kwakioosoiemmiok:
        $sociqikgoyemqaac = $uwomkgseoiegeume;
        goto ckawikqsskikqiya;
        cwsacmayigiyqiim:
        $uwomkgseoiegeume = preg_replace("\57\x28\x3f\74\41\x5e\x29\133\141\101\145\105\x69\111\157\117\x75\x55\x5d\57", '', $sociqikgoyemqaac);
        goto awcsskayoyoqcuie;
        aamysqsckaiwqayk:
    }
    
    public static function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string
    {
        goto ceusqkuwoqusqoug;
        kcyiiwwsyagcyiic:
        $uomewyckeuqoqocu = explode("\x5c", $aiieyweysaukqemc);
        goto cysskkuqiccoycuk;
        cysskkuqiccoycuk:
        return ManipulateArray::get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc);
        goto micwmacyekkoumqe;
        ceusqkuwoqusqoug:
        $aiieyweysaukqemc = self::aisesaskgsuywqqy($egkyssmuqcwaciya);
        goto kcyiiwwsyagcyiic;
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

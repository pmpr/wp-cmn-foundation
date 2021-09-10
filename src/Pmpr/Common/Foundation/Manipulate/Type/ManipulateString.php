<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;

use Exception;
use ReflectionClass;

class ManipulateString extends Common
{
    
    public static function scramble(string $sociqikgoyemqaac) : string
    {
        goto agksoawkuoguyeio;
        ecikmukcoqciisue:
        
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq);
        goto imiuiucewegueuic;
        agksoawkuoguyeio:
        $ykiwomimkkuiigoq = 16;
        goto caumcscgkmkqgceq;
        caumcscgkmkqgceq:
        $sociqikgoyemqaac = hash("\x6d\144\x35", $sociqikgoyemqaac);
        goto ycywkayeqeumswqg;
        ycywkayeqeumswqg:
        
        $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26);
        goto ecikmukcoqciisue;
        aqosaugqkosuuegw:
        
        return strtr($eugsosgsugioquqe, self::NUMBERS_SEQUENCE, "\x71\x72\x73\x74\165\166\167\170\x79\x7a");
        goto awikguaqqiwcqmky;
        imiuiucewegueuic:
        
        $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT);
        goto aqosaugqkosuuegw;
        awikguaqqiwcqmky:
    }
    
    public static function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string
    {
        goto okqakgakegqeqyeq;
        ycuoumuscogyyumk:
        $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20));
        goto ykuagugmmsammmys;
        swgigmkkkusaacqu:
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai);
        goto oskqggqaooyquywg;
        qwwcygqwemouasmk:
        return $eugsosgsugioquqe;
        goto saemqkkugcicagmu;
        okqakgakegqeqyeq:
        if (function_exists("\157\x70\x65\x6e\x73\163\154\137\162\x61\x6e\144\157\x6d\x5f\x70\x73\x65\x75\x64\x6f\137\142\171\x74\x65\x73")) {
            goto fwgsuqmqwckweqew;
        }
        goto ayqgiggusesgmumc;
        ecqowccyawmkikqa:
        goto oeskmqswawycuqeo;
        goto gekkqmaemkuucmum;
        oskqggqaooyquywg:
        mkyoqmeigaqsywus:
        goto qwwcygqwemouasmk;
        yqwaoiwiiueeioyu:
        if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) {
            goto mkyoqmeigaqsywus;
        }
        goto swgigmkkkusaacqu;
        gekkqmaemkuucmum:
        fwgsuqmqwckweqew:
        goto ycuoumuscogyyumk;
        ayqgiggusesgmumc:
        $eugsosgsugioquqe = sha1(wp_rand());
        goto ecqowccyawmkikqa;
        ykuagugmmsammmys:
        oeskmqswawycuqeo:
        goto yqwaoiwiiueeioyu;
        saemqkkugcicagmu:
    }
    
    public static function uniqid($eomsgokgyssmwmai = 8)
    {
        goto oqugeiswsecaumem;
        emecuyysuqqwommu:
        $momkisisegqcmmwi = preg_replace("\x2f\133\x5e\101\x2d\x5a\x61\55\172\60\55\x39\x5d\57", '', $umkokecyamcwcqwe);
        goto geeowmiusiackuiq;
        ugiacwwoamocgaay:
        mmuukiksuesugoim:
        goto mqmcuwieyceguisy;
        wsoqwkigckayaqoi:
        kaqecouikkoyoikw:
        goto iceugoeuecegkosq;
        iceugoeuecegkosq:
        $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai);
        goto qkuqauayuwkoqyai;
        uyouwcwuyqkqgiyq:
        $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw);
        goto emecuyysuqqwommu;
        qkuqauayuwkoqyai:
        if ($momkisisegqcmmwi) {
            goto mmuukiksuesugoim;
        }
        goto yioikeisgkcckggw;
        eukaauoogymyoqcg:
        uecugkgkswkksmwu:
        goto koacwewmoggiokwk;
        yioikeisgkcckggw:
        $momkisisegqcmmwi = uniqid();
        goto ugiacwwoamocgaay;
        geeowmiusiackuiq:
        $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai));
        goto eukaauoogymyoqcg;
        uuowasqcmykuuqay:
        $momkisisegqcmmwi .= self::uniqid($eomsgokgyssmwmai);
        goto ecmmsuegkwoaqsck;
        mqmcuwieyceguisy:
        return $momkisisegqcmmwi;
        goto csseweewqmmqmoie;
        oqugeiswsecaumem:
        $sosyakcgakmeueii = md5("\x79\157\x75\162\x53\x61\154\x74\110\145\x72\145" . uniqid('', true));
        goto mmsiiummcewgugoq;
        mmsiiummcewgugoq:
        $asakkwwsyqsqqkkw = pack("\110\x2a", $sosyakcgakmeueii);
        goto uyouwcwuyqkqgiyq;
        koacwewmoggiokwk:
        if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) {
            goto kaqecouikkoyoikw;
        }
        goto uuowasqcmykuuqay;
        ecmmsuegkwoaqsck:
        goto uecugkgkswkksmwu;
        goto wsoqwkigckayaqoi;
        csseweewqmmqmoie:
    }
    
    public static function mkwcwqkqeqkqyggc($egkyssmuqcwaciya)
    {
        goto gwgkeeeaegyiwuwy;
        jkykioyqcqkecswo:
        return $ymqmyyeuycgmigyo;
        goto eaeiyueemeaiscse;
        gwgkeeeaegyiwuwy:
        if (is_object($egkyssmuqcwaciya)) {
            goto koikmoqykoygkoee;
        }
        goto yoscwomwgukawius;
        qisgkugkmomqkqyy:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $ymqmyyeuycgmigyo = $oqkmoekaagukcwia->quqaewqkeiiwqiss();
        } catch (Exception $wgaoewqkwgomoaai) {
            $egkyssmuqcwaciya = explode("\134", get_class($egkyssmuqcwaciya));
            $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        }
        goto miaqgsgmmucyukck;
        oceyqqosgiumoigk:
        goto amimcgigeayacwsi;
        goto ewogoyaaykymakio;
        yoscwomwgukawius:
        $egkyssmuqcwaciya = explode("\134", $egkyssmuqcwaciya);
        goto aswswoccyeayaooc;
        aswswoccyeayaooc:
        $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        goto oceyqqosgiumoigk;
        miaqgsgmmucyukck:
        amimcgigeayacwsi:
        goto jkykioyqcqkecswo;
        ewogoyaaykymakio:
        koikmoqykoygkoee:
        goto qisgkugkmomqkqyy;
        eaeiyueemeaiscse:
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
        goto acassceoooicwsmi;
        ggimaueycwcaweao:
        return $sociqikgoyemqaac;
        goto qwewqcaomcqwwaqg;
        owscgyscmmakkagm:
        uuaeyqiykwmeiuqk:
        goto ggimaueycwcaweao;
        iiuguqckysykaqqm:
        return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq);
        goto owscgyscmmakkagm;
        acassceoooicwsmi:
        if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) {
            goto uuaeyqiykwmeiuqk;
        }
        goto iiuguqckysykaqqm;
        qwewqcaomcqwwaqg:
    }
    
    public static function kwuyaykukcmaqggg($sociqikgoyemqaac) : string
    {
        return strtolower(preg_replace("\57\50\133\x61\55\172\x5d\x29\x28\133\101\55\x5a\x5d\x29\x2f", "\x24\x31\137\44\x32", $sociqikgoyemqaac));
    }
    
    public static function snake2camel($sociqikgoyemqaac) : string
    {
        goto cuoomamgiqewcaga;
        wcuqseiqgmkiagqo:
        return $sociqikgoyemqaac;
        goto qaokmiyayqscsoey;
        imekyuaciwaewsyg:
        $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]);
        goto wcuqseiqgmkiagqo;
        cuoomamgiqewcaga:
        $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\137", "\40", $sociqikgoyemqaac)));
        goto imekyuaciwaewsyg;
        qaokmiyayqscsoey:
    }
    
    public static function ywuiyekyoaowmuss($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\137", "\55", $sociqikgoyemqaac));
    }
    
    public static function cyakegkcqemuyaey($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\x2d", "\137", $sociqikgoyemqaac));
    }
    
    public static function amkcmaguoecyiscg($ycskuuyucyuqisaq) : string
    {
        $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq);
        return "\x27{$ycskuuyucyuqisaq}\47";
    }
    
    public static function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg)
    {
        goto oiekomuumyouqaei;
        wmkcqawaggyycweu:
        if (!$gaeqamemwmwsyukm) {
            goto sesuguskosoyouaq;
        }
        goto cmkmcmwqwugqyaua;
        oiekomuumyouqaei:
        $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg;
        goto cayaamsiykmeacmu;
        syiawquewyqquceg:
        goto osaemmikqqguwkeu;
        goto wuwyimqcwoocmgma;
        wuwyimqcwoocmgma:
        sesuguskosoyouaq:
        goto wasayiuessgesqyg;
        sogmmamkkaqauqqi:
        osaemmikqqguwkeu:
        goto wmkcqawaggyycweu;
        cmkmcmwqwugqyaua:
        $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm);
        goto syiawquewyqquceg;
        wasayiuessgesqyg:
        return $iosuwkkwwioumeqg;
        goto ucmwiooiyaqqysgi;
        cayaamsiykmeacmu:
        $gaeqamemwmwsyukm = 1;
        goto sogmmamkkaqauqqi;
        ucmwiooiyaqqysgi:
    }
    
    public static function crypt($sociqikgoyemqaac, $euakaisoocwokioe = true)
    {
        goto wiiegigayuiikwew;
        yoooiiugiwuwomcg:
        $aqykuigiuwmmcieu = openssl_decrypt(base64_decode($sociqikgoyemqaac), $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck);
        goto uugysiwkssgqqasy;
        suqqaiqcyikmwuak:
        if (!function_exists("\157\160\145\x6e\163\163\x6c\x5f\x65\x6e\x63\x72\x79\x70\x74")) {
            goto eeeaewggmuucmgke;
        }
        goto ikmgqgmecqcqumwg;
        maiiaecisekgocgs:
        if (!extension_loaded("\157\160\x65\x6e\x73\x73\x6c")) {
            goto msswemwawesaoqgi;
        }
        goto kegsswygcecmiumq;
        ikmgqgmecqcqumwg:
        $aqykuigiuwmmcieu = base64_encode(openssl_encrypt($sociqikgoyemqaac, $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck));
        goto qycioskysmyisuaq;
        qycioskysmyisuaq:
        eeeaewggmuucmgke:
        goto wwmaagcmssuqyuyo;
        wiiegigayuiikwew:
        
        $qgciuiagkkguykgs = "\101\105\x53\55\62\65\x36\55\103\x42\103";
        goto seqcuygkmogesgsw;
        seqcuygkmogesgsw:
        $aqykuigiuwmmcieu = $sociqikgoyemqaac;
        goto ekqmseimucoqkuaa;
        kegsswygcecmiumq:
        if ($euakaisoocwokioe) {
            goto wyumwugwoycammog;
        }
        goto acoiommggkmcwoec;
        ooqyuwsmqcmmwiuy:
        $imiwcieyucysgsck = substr(hash("\x73\150\141\62\x35\66", "{$eeamcawaiqocomwy}\137\163\x65\x63\162\145\x74\x5f\151\166"), 0, 16);
        goto maiiaecisekgocgs;
        wwmaagcmssuqyuyo:
        mooeqigccuskogqm:
        goto dasseuygmamimemo;
        uugysiwkssgqqasy:
        cokuamakgaokeooy:
        goto aysowqiuocakwcic;
        ekqmseimucoqkuaa:
        $eeamcawaiqocomwy = home_url();
        goto uicekgggkiwiyykk;
        acoiommggkmcwoec:
        if (!function_exists("\x6f\x70\x65\x6e\x73\x73\x6c\137\144\145\x63\x72\x79\160\164")) {
            goto cokuamakgaokeooy;
        }
        goto yoooiiugiwuwomcg;
        rioiswicyaiaqscu:
        wyumwugwoycammog:
        goto suqqaiqcyikmwuak;
        uicekgggkiwiyykk:
        $uusmaiomayssaecw = hash("\163\150\141\x32\x35\66", "{$eeamcawaiqocomwy}\137\x73\145\x63\162\145\164\x5f\x6b\x65\171");
        goto ooqyuwsmqcmmwiuy;
        gcuqqquokaqaacwk:
        return $aqykuigiuwmmcieu;
        goto kecysscqgsiiqiuy;
        aysowqiuocakwcic:
        goto mooeqigccuskogqm;
        goto rioiswicyaiaqscu;
        dasseuygmamimemo:
        msswemwawesaoqgi:
        goto gcuqqquokaqaacwk;
        kecysscqgsiiqiuy:
    }
    
    public static function aisesaskgsuywqqy($egkyssmuqcwaciya) : string
    {
        $ymqmyyeuycgmigyo = self::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
        return self::aimgkskucmymyquc("\x5c{$ymqmyyeuycgmigyo}", '', $egkyssmuqcwaciya);
    }
    
    public static function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto wuoiuakueguccsic;
        ukyseaksckwaqccy:
        return $ksaameoqigiaoigg;
        goto aqkykycuymkgeuca;
        wuoiuakueguccsic:
        $ksaameoqigiaoigg = false;
        goto uwymkmkoccikuayq;
        uwymkmkoccikuayq:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto isaumaiwsokyqgku;
        }
        goto ssgmgeyqauwowayi;
        kaewsesomywgaqya:
        if (!$ykiwomimkkuiigoq) {
            goto gmssueaqqeomimkc;
        }
        goto eimkikcwmqgeaaik;
        mwoggqumgkkuccsg:
        isaumaiwsokyqgku:
        goto ukyseaksckwaqccy;
        ogucqcimwucemmqi:
        goto eseukqeswwciauqo;
        goto keamkgymemuoumyk;
        ssgmgeyqauwowayi:
        $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw);
        goto kaewsesomywgaqya;
        uaayeqesiwoyeyky:
        eseukqeswwciauqo:
        goto mwoggqumgkkuccsg;
        eimkikcwmqgeaaik:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, -$ykiwomimkkuiigoq) === $ekwsasieesaqcsiw;
        goto ogucqcimwucemmqi;
        keamkgymemuoumyk:
        gmssueaqqeomimkc:
        goto gciweeimoysqegua;
        gciweeimoysqegua:
        $ksaameoqigiaoigg = true;
        goto uaayeqesiwoyeyky;
        aqkykycuymkgeuca:
    }
    
    public static function usemqqucksuocoeq($sociqikgoyemqaac) : string
    {
        $ukokkqkkkggcmksy = ["\45\62\61" => "\41", "\45\62\101" => "\52", "\x25\x32\x37" => "\47", "\x25\62\70" => "\x28", "\x25\x32\71" => "\51"];
        return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy);
    }
    
    public static function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto gekygaomisweagke;
        ogaeqkismgiuisec:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, 0, strlen($ekwsasieesaqcsiw)) === $ekwsasieesaqcsiw;
        goto qmmqgkauawgywmos;
        iqqwqksqmgkeiyye:
        return $ksaameoqigiaoigg;
        goto swqicamwekkeuiwm;
        gekygaomisweagke:
        $ksaameoqigiaoigg = false;
        goto gicwwusswicoaewo;
        gicwwusswicoaewo:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto gwegqueckokqewgq;
        }
        goto ogaeqkismgiuisec;
        qmmqgkauawgywmos:
        gwegqueckokqewgq:
        goto iqqwqksqmgkeiyye;
        swqicamwekkeuiwm:
    }
    
    public static function gumqicgiosoqweoy($sociqikgoyemqaac)
    {
        
        $ymqmyyeuycgmigyo = ManipulateString::wiecmkiugmyyqiqc(self::PR__, '', $sociqikgoyemqaac);
        return self::csuomkyoukqauwcg($ymqmyyeuycgmigyo, 8);
    }
    
    public static function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq)
    {
        goto csgigisimckqsgqk;
        wyoisggmqsmkgmwu:
        $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq);
        goto aoyweksmwmggciqa;
        esukkewwucqgewoa:
        $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy);
        goto wyoisggmqsmkgmwu;
        csgigisimckqsgqk:
        if (!(($yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy)) !== false)) {
            goto qkgmwgkisykeciki;
        }
        goto esukkewwucqgewoa;
        eayssgemciaigiam:
        return $ycskuuyucyuqisaq;
        goto vgikmsgkoicqkicg;
        aoyweksmwmggciqa:
        qkgmwgkisykeciki:
        goto eayssgemciaigiam;
        vgikmsgkoicqkicg:
    }
    
    public static function eqyqgywiseiwqocc($uomewyckeuqoqocu) : string
    {
        goto aamoqaoqsmaaiqic;
        moyaggkeisiyocmy:
        $uomewyckeuqoqocu = join("\47\x2c\x20\x27", array_map("\x65\x73\143\x5f\x73\161\154", $uomewyckeuqoqocu));
        goto uekocieigyaeiesk;
        uekocieigyaeiesk:
        cuycyaewiggayoyq:
        goto ksmiwscciwcugeii;
        aamoqaoqsmaaiqic:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto cuycyaewiggayoyq;
        }
        goto moyaggkeisiyocmy;
        ksmiwscciwcugeii:
        return $uomewyckeuqoqocu;
        goto skickmuouwmgykag;
        skickmuouwmgykag:
    }
    
    public static function csuomkyoukqauwcg($sociqikgoyemqaac, $aoqagsqecokqqwqg = 5)
    {
        goto ekiaoywcsemmomqw;
        yaiicikgkwuucyac:
        $sociqikgoyemqaac = $uwomkgseoiegeume;
        goto cwsacmayigiyqiim;
        ekiaoywcsemmomqw:
        $uwomkgseoiegeume = preg_replace("\x2f\x28\x3f\74\x21\136\x29\133\x61\x41\145\105\x69\111\157\x4f\165\125\x5d\57", '', $sociqikgoyemqaac);
        goto koaeoimocwqoguem;
        cwsacmayigiyqiim:
        cygmcwemkeicyqsg:
        goto awcsskayoyoqcuie;
        koaeoimocwqoguem:
        if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) {
            goto cygmcwemkeicyqsg;
        }
        goto yaiicikgkwuucyac;
        awcsskayoyoqcuie:
        return $sociqikgoyemqaac;
        goto kwakioosoiemmiok;
        kwakioosoiemmiok:
    }
    
    public static function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string
    {
        goto ckawikqsskikqiya;
        ckawikqsskikqiya:
        $aiieyweysaukqemc = self::aisesaskgsuywqqy($egkyssmuqcwaciya);
        goto gegywycsimoakaei;
        gegywycsimoakaei:
        $uomewyckeuqoqocu = explode("\134", $aiieyweysaukqemc);
        goto aamysqsckaiwqayk;
        aamysqsckaiwqayk:
        return ManipulateArray::get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc);
        goto ceusqkuwoqusqoug;
        ceusqkuwoqusqoug:
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

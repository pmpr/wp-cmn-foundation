<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        mkyoqmeigaqsywus:
        
        return strtr($eugsosgsugioquqe, self::NUMBERS_SEQUENCE, "\x71\x72\x73\164\165\166\167\170\171\172");
        goto okqakgakegqeqyeq;
        aqosaugqkosuuegw:
        $sociqikgoyemqaac = hash("\x6d\144\65", $sociqikgoyemqaac);
        goto awikguaqqiwcqmky;
        awikguaqqiwcqmky:
        
        $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26);
        goto fwgsuqmqwckweqew;
        fwgsuqmqwckweqew:
        
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq);
        goto oeskmqswawycuqeo;
        imiuiucewegueuic:
        $ykiwomimkkuiigoq = 16;
        goto aqosaugqkosuuegw;
        okqakgakegqeqyeq:
    }
    
    public static function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string
    {
        goto ycuoumuscogyyumk;
        yqwaoiwiiueeioyu:
        goto ecqowccyawmkikqa;
        goto swgigmkkkusaacqu;
        swgigmkkkusaacqu:
        ayqgiggusesgmumc:
        goto oskqggqaooyquywg;
        ykuagugmmsammmys:
        $eugsosgsugioquqe = sha1(wp_rand());
        goto yqwaoiwiiueeioyu;
        qwwcygqwemouasmk:
        ecqowccyawmkikqa:
        goto saemqkkugcicagmu;
        saemqkkugcicagmu:
        if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) {
            goto gekkqmaemkuucmum;
        }
        goto kaqecouikkoyoikw;
        kaqecouikkoyoikw:
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai);
        goto uecugkgkswkksmwu;
        oskqggqaooyquywg:
        $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20));
        goto qwwcygqwemouasmk;
        ycuoumuscogyyumk:
        if (function_exists("\x6f\x70\145\x6e\163\163\x6c\137\162\141\x6e\x64\x6f\155\x5f\160\x73\x65\x75\144\157\137\142\x79\164\145\x73")) {
            goto ayqgiggusesgmumc;
        }
        goto ykuagugmmsammmys;
        mmuukiksuesugoim:
        return $eugsosgsugioquqe;
        goto oqugeiswsecaumem;
        uecugkgkswkksmwu:
        gekkqmaemkuucmum:
        goto mmuukiksuesugoim;
        oqugeiswsecaumem:
    }
    
    public static function uniqid($eomsgokgyssmwmai = 8)
    {
        goto geeowmiusiackuiq;
        amimcgigeayacwsi:
        emecuyysuqqwommu:
        goto gwgkeeeaegyiwuwy;
        csseweewqmmqmoie:
        if ($momkisisegqcmmwi) {
            goto emecuyysuqqwommu;
        }
        goto koikmoqykoygkoee;
        iceugoeuecegkosq:
        if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) {
            goto mmsiiummcewgugoq;
        }
        goto qkuqauayuwkoqyai;
        qkuqauayuwkoqyai:
        $momkisisegqcmmwi .= self::uniqid($eomsgokgyssmwmai);
        goto yioikeisgkcckggw;
        uuowasqcmykuuqay:
        $momkisisegqcmmwi = preg_replace("\x2f\x5b\136\x41\x2d\x5a\141\55\x7a\x30\x2d\x39\x5d\57", '', $umkokecyamcwcqwe);
        goto ecmmsuegkwoaqsck;
        geeowmiusiackuiq:
        $sosyakcgakmeueii = md5("\x79\x6f\x75\x72\123\x61\154\164\x48\145\162\x65" . uniqid('', true));
        goto eukaauoogymyoqcg;
        wsoqwkigckayaqoi:
        uyouwcwuyqkqgiyq:
        goto iceugoeuecegkosq;
        koacwewmoggiokwk:
        $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw);
        goto uuowasqcmykuuqay;
        ugiacwwoamocgaay:
        mmsiiummcewgugoq:
        goto mqmcuwieyceguisy;
        mqmcuwieyceguisy:
        $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai);
        goto csseweewqmmqmoie;
        koikmoqykoygkoee:
        $momkisisegqcmmwi = uniqid();
        goto amimcgigeayacwsi;
        eukaauoogymyoqcg:
        $asakkwwsyqsqqkkw = pack("\110\x2a", $sosyakcgakmeueii);
        goto koacwewmoggiokwk;
        yioikeisgkcckggw:
        goto uyouwcwuyqkqgiyq;
        goto ugiacwwoamocgaay;
        gwgkeeeaegyiwuwy:
        return $momkisisegqcmmwi;
        goto yoscwomwgukawius;
        ecmmsuegkwoaqsck:
        $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai));
        goto wsoqwkigckayaqoi;
        yoscwomwgukawius:
    }
    
    public static function mkwcwqkqeqkqyggc($egkyssmuqcwaciya)
    {
        goto ewogoyaaykymakio;
        eaeiyueemeaiscse:
        aswswoccyeayaooc:
        goto uuaeyqiykwmeiuqk;
        qisgkugkmomqkqyy:
        $egkyssmuqcwaciya = explode("\134", $egkyssmuqcwaciya);
        goto miaqgsgmmucyukck;
        uuaeyqiykwmeiuqk:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $ymqmyyeuycgmigyo = $oqkmoekaagukcwia->quqaewqkeiiwqiss();
        } catch (Exception $wgaoewqkwgomoaai) {
            $egkyssmuqcwaciya = explode("\x5c", get_class($egkyssmuqcwaciya));
            $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        }
        goto acassceoooicwsmi;
        miaqgsgmmucyukck:
        $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        goto jkykioyqcqkecswo;
        ewogoyaaykymakio:
        if (is_object($egkyssmuqcwaciya)) {
            goto aswswoccyeayaooc;
        }
        goto qisgkugkmomqkqyy;
        acassceoooicwsmi:
        oceyqqosgiumoigk:
        goto iiuguqckysykaqqm;
        jkykioyqcqkecswo:
        goto oceyqqosgiumoigk;
        goto eaeiyueemeaiscse;
        iiuguqckysykaqqm:
        return $ymqmyyeuycgmigyo;
        goto owscgyscmmakkagm;
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
        wcuqseiqgmkiagqo:
        return $sociqikgoyemqaac;
        goto qaokmiyayqscsoey;
        imekyuaciwaewsyg:
        ggimaueycwcaweao:
        goto wcuqseiqgmkiagqo;
        cuoomamgiqewcaga:
        return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq);
        goto imekyuaciwaewsyg;
        qaokmiyayqscsoey:
    }
    
    public static function kwuyaykukcmaqggg($sociqikgoyemqaac) : string
    {
        return strtolower(preg_replace("\x2f\50\133\141\55\x7a\x5d\x29\50\133\101\55\x5a\135\51\x2f", "\44\61\x5f\44\x32", $sociqikgoyemqaac));
    }
    
    public static function snake2camel($sociqikgoyemqaac) : string
    {
        goto sesuguskosoyouaq;
        oiekomuumyouqaei:
        return $sociqikgoyemqaac;
        goto cayaamsiykmeacmu;
        osaemmikqqguwkeu:
        $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]);
        goto oiekomuumyouqaei;
        sesuguskosoyouaq:
        $sociqikgoyemqaac = str_replace("\x20", '', ucwords(str_replace("\137", "\x20", $sociqikgoyemqaac)));
        goto osaemmikqqguwkeu;
        cayaamsiykmeacmu:
    }
    
    public static function ywuiyekyoaowmuss($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\137", "\x2d", $sociqikgoyemqaac));
    }
    
    public static function cyakegkcqemuyaey($sociqikgoyemqaac) : string
    {
        return strtolower(str_replace("\x2d", "\x5f", $sociqikgoyemqaac));
    }
    
    public static function amkcmaguoecyiscg($ycskuuyucyuqisaq) : string
    {
        $ycskuuyucyuqisaq = addslashes($ycskuuyucyuqisaq);
        return "\47{$ycskuuyucyuqisaq}\47";
    }
    
    public static function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg)
    {
        goto cmkmcmwqwugqyaua;
        syiawquewyqquceg:
        $gaeqamemwmwsyukm = 1;
        goto wuwyimqcwoocmgma;
        cmkmcmwqwugqyaua:
        $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg;
        goto syiawquewyqquceg;
        ucmwiooiyaqqysgi:
        $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm);
        goto eeeaewggmuucmgke;
        cokuamakgaokeooy:
        sogmmamkkaqauqqi:
        goto wyumwugwoycammog;
        wasayiuessgesqyg:
        if (!$gaeqamemwmwsyukm) {
            goto sogmmamkkaqauqqi;
        }
        goto ucmwiooiyaqqysgi;
        eeeaewggmuucmgke:
        goto wmkcqawaggyycweu;
        goto cokuamakgaokeooy;
        wuwyimqcwoocmgma:
        wmkcqawaggyycweu:
        goto wasayiuessgesqyg;
        wyumwugwoycammog:
        return $iosuwkkwwioumeqg;
        goto mooeqigccuskogqm;
        mooeqigccuskogqm:
    }
    
    public static function crypt($sociqikgoyemqaac, $euakaisoocwokioe = true)
    {
        goto ooqyuwsmqcmmwiuy;
        kegsswygcecmiumq:
        $eeamcawaiqocomwy = home_url();
        goto acoiommggkmcwoec;
        isaumaiwsokyqgku:
        return $aqykuigiuwmmcieu;
        goto wuoiuakueguccsic;
        dasseuygmamimemo:
        if (!function_exists("\157\x70\145\x6e\163\163\154\137\145\x6e\x63\x72\171\x70\x74")) {
            goto msswemwawesaoqgi;
        }
        goto gcuqqquokaqaacwk;
        uugysiwkssgqqasy:
        if (!extension_loaded("\157\x70\145\x6e\x73\x73\154")) {
            goto uicekgggkiwiyykk;
        }
        goto aysowqiuocakwcic;
        rioiswicyaiaqscu:
        if (!function_exists("\157\x70\x65\x6e\x73\163\x6c\137\x64\145\143\x72\171\160\x74")) {
            goto wiiegigayuiikwew;
        }
        goto suqqaiqcyikmwuak;
        ikmgqgmecqcqumwg:
        wiiegigayuiikwew:
        goto qycioskysmyisuaq;
        acoiommggkmcwoec:
        $uusmaiomayssaecw = hash("\163\150\x61\62\x35\66", "{$eeamcawaiqocomwy}\x5f\163\x65\x63\162\x65\164\137\153\x65\171");
        goto yoooiiugiwuwomcg;
        kecysscqgsiiqiuy:
        msswemwawesaoqgi:
        goto gmssueaqqeomimkc;
        gcuqqquokaqaacwk:
        $aqykuigiuwmmcieu = base64_encode(openssl_encrypt($sociqikgoyemqaac, $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck));
        goto kecysscqgsiiqiuy;
        ooqyuwsmqcmmwiuy:
        
        $qgciuiagkkguykgs = "\x41\105\x53\x2d\62\65\66\55\x43\x42\x43";
        goto maiiaecisekgocgs;
        aysowqiuocakwcic:
        if ($euakaisoocwokioe) {
            goto seqcuygkmogesgsw;
        }
        goto rioiswicyaiaqscu;
        maiiaecisekgocgs:
        $aqykuigiuwmmcieu = $sociqikgoyemqaac;
        goto kegsswygcecmiumq;
        yoooiiugiwuwomcg:
        $imiwcieyucysgsck = substr(hash("\x73\x68\x61\62\x35\66", "{$eeamcawaiqocomwy}\x5f\x73\x65\143\162\x65\164\x5f\x69\166"), 0, 16);
        goto uugysiwkssgqqasy;
        wwmaagcmssuqyuyo:
        seqcuygkmogesgsw:
        goto dasseuygmamimemo;
        qycioskysmyisuaq:
        goto ekqmseimucoqkuaa;
        goto wwmaagcmssuqyuyo;
        eseukqeswwciauqo:
        uicekgggkiwiyykk:
        goto isaumaiwsokyqgku;
        suqqaiqcyikmwuak:
        $aqykuigiuwmmcieu = openssl_decrypt(base64_decode($sociqikgoyemqaac), $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck);
        goto ikmgqgmecqcqumwg;
        gmssueaqqeomimkc:
        ekqmseimucoqkuaa:
        goto eseukqeswwciauqo;
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
        eimkikcwmqgeaaik:
        $ksaameoqigiaoigg = false;
        goto ogucqcimwucemmqi;
        keamkgymemuoumyk:
        $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw);
        goto gciweeimoysqegua;
        gciweeimoysqegua:
        if (!$ykiwomimkkuiigoq) {
            goto uwymkmkoccikuayq;
        }
        goto uaayeqesiwoyeyky;
        mwoggqumgkkuccsg:
        goto ssgmgeyqauwowayi;
        goto ukyseaksckwaqccy;
        gwegqueckokqewgq:
        ssgmgeyqauwowayi:
        goto gekygaomisweagke;
        ukyseaksckwaqccy:
        uwymkmkoccikuayq:
        goto aqkykycuymkgeuca;
        ogucqcimwucemmqi:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto kaewsesomywgaqya;
        }
        goto keamkgymemuoumyk;
        aqkykycuymkgeuca:
        $ksaameoqigiaoigg = true;
        goto gwegqueckokqewgq;
        gicwwusswicoaewo:
        return $ksaameoqigiaoigg;
        goto ogaeqkismgiuisec;
        gekygaomisweagke:
        kaewsesomywgaqya:
        goto gicwwusswicoaewo;
        uaayeqesiwoyeyky:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, -$ykiwomimkkuiigoq) === $ekwsasieesaqcsiw;
        goto mwoggqumgkkuccsg;
        ogaeqkismgiuisec:
    }
    
    public static function usemqqucksuocoeq($sociqikgoyemqaac) : string
    {
        $ukokkqkkkggcmksy = ["\x25\x32\x31" => "\41", "\45\62\101" => "\x2a", "\45\62\x37" => "\47", "\45\x32\70" => "\x28", "\45\62\x39" => "\51"];
        return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy);
    }
    
    public static function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto iqqwqksqmgkeiyye;
        csgigisimckqsgqk:
        qmmqgkauawgywmos:
        goto esukkewwucqgewoa;
        qkgmwgkisykeciki:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, 0, strlen($ekwsasieesaqcsiw)) === $ekwsasieesaqcsiw;
        goto csgigisimckqsgqk;
        iqqwqksqmgkeiyye:
        $ksaameoqigiaoigg = false;
        goto swqicamwekkeuiwm;
        swqicamwekkeuiwm:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto qmmqgkauawgywmos;
        }
        goto qkgmwgkisykeciki;
        esukkewwucqgewoa:
        return $ksaameoqigiaoigg;
        goto wyoisggmqsmkgmwu;
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
        cuycyaewiggayoyq:
        $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq);
        goto aamoqaoqsmaaiqic;
        aamoqaoqsmaaiqic:
        aoyweksmwmggciqa:
        goto moyaggkeisiyocmy;
        moyaggkeisiyocmy:
        return $ycskuuyucyuqisaq;
        goto uekocieigyaeiesk;
        eayssgemciaigiam:
        if (!(($yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy)) !== false)) {
            goto aoyweksmwmggciqa;
        }
        goto vgikmsgkoicqkicg;
        vgikmsgkoicqkicg:
        $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy);
        goto cuycyaewiggayoyq;
        uekocieigyaeiesk:
    }
    
    public static function eqyqgywiseiwqocc($uomewyckeuqoqocu) : string
    {
        goto skickmuouwmgykag;
        cygmcwemkeicyqsg:
        $uomewyckeuqoqocu = join("\47\x2c\x20\47", array_map("\145\163\143\137\163\161\154", $uomewyckeuqoqocu));
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
        aamysqsckaiwqayk:
        return $sociqikgoyemqaac;
        goto ceusqkuwoqusqoug;
        awcsskayoyoqcuie:
        $uwomkgseoiegeume = preg_replace("\57\50\x3f\74\x21\136\x29\133\141\x41\145\x45\151\111\x6f\117\x75\125\135\57", '', $sociqikgoyemqaac);
        goto kwakioosoiemmiok;
        kwakioosoiemmiok:
        if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) {
            goto cwsacmayigiyqiim;
        }
        goto ckawikqsskikqiya;
        ckawikqsskikqiya:
        $sociqikgoyemqaac = $uwomkgseoiegeume;
        goto gegywycsimoakaei;
        ceusqkuwoqusqoug:
    }
    
    public static function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string
    {
        goto kcyiiwwsyagcyiic;
        cysskkuqiccoycuk:
        $uomewyckeuqoqocu = explode("\x5c", $aiieyweysaukqemc);
        goto micwmacyekkoumqe;
        kcyiiwwsyagcyiic:
        $aiieyweysaukqemc = self::aisesaskgsuywqqy($egkyssmuqcwaciya);
        goto cysskkuqiccoycuk;
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

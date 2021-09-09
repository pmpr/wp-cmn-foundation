<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;

use Exception;
use ReflectionClass;

class ManipulateString extends Common
{
    
    public static function scramble(string $sociqikgoyemqaac) : string
    {
        goto kemciyisiqsemmwm;
        kemciyisiqsemmwm:
        $ykiwomimkkuiigoq = 16;
        goto uowumqmesgawkcme;
        qayyssyasegwkuwi:
        
        return strtr($eugsosgsugioquqe, self::NUMBERS_SEQUENCE, "\161\x72\163\164\165\x76\x77\170\171\x7a");
        goto qwyuicgesgumuuum;
        uowumqmesgawkcme:
        $sociqikgoyemqaac = hash("\x6d\144\65", $sociqikgoyemqaac);
        goto ceimuucmqmuygqiu;
        iiiaciykaukmuiwu:
        
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, -$ykiwomimkkuiigoq);
        goto wmwqumcksgkckeae;
        ceimuucmqmuygqiu:
        
        $eugsosgsugioquqe = base_convert(md5($sociqikgoyemqaac), 16, 26);
        goto iiiaciykaukmuiwu;
        wmwqumcksgkckeae:
        
        $eugsosgsugioquqe = str_pad($eugsosgsugioquqe, $ykiwomimkkuiigoq, "\60", STR_PAD_LEFT);
        goto qayyssyasegwkuwi;
        qwyuicgesgumuuum:
    }
    
    public static function ycwmswocisskwuwg($eomsgokgyssmwmai = 20) : string
    {
        goto womkaomokgseakue;
        agameskciseayqqy:
        $eugsosgsugioquqe = sha1(wp_rand());
        goto wsumwkwmcygcqyaa;
        uocisouiiqciywim:
        ceqkmcaycyskmoia:
        goto smwmewocqywykcou;
        womkaomokgseakue:
        if (function_exists("\x6f\x70\x65\x6e\163\163\x6c\x5f\162\141\x6e\x64\x6f\155\137\x70\x73\145\165\144\157\137\142\x79\164\x65\163")) {
            goto sgsmmgiuyuukgsyi;
        }
        goto agameskciseayqqy;
        euayciwoioqckyoi:
        if (!(strlen($eugsosgsugioquqe) > $eomsgokgyssmwmai)) {
            goto ceqkmcaycyskmoia;
        }
        goto gqwkiummucquoece;
        wsumwkwmcygcqyaa:
        goto qsemsoimoauiccmm;
        goto gkwkcgcewcecmgoe;
        symyoqqgcwomyksw:
        qsemsoimoauiccmm:
        goto euayciwoioqckyoi;
        smwmewocqywykcou:
        return $eugsosgsugioquqe;
        goto agckaqmuskakeumg;
        gqwkiummucquoece:
        $eugsosgsugioquqe = substr($eugsosgsugioquqe, 0, $eomsgokgyssmwmai);
        goto uocisouiiqciywim;
        qaymskucssiyeasw:
        $eugsosgsugioquqe = bin2hex(openssl_random_pseudo_bytes(20));
        goto symyoqqgcwomyksw;
        gkwkcgcewcecmgoe:
        sgsmmgiuyuukgsyi:
        goto qaymskucssiyeasw;
        agckaqmuskakeumg:
    }
    
    public static function uniqid($eomsgokgyssmwmai = 8)
    {
        goto osckyscuccyeyiea;
        yaacmieqceeiyuii:
        $momkisisegqcmmwi .= self::uniqid($eomsgokgyssmwmai);
        goto gmwiocukkqksiwkk;
        kkmyoieguiwecakw:
        $momkisisegqcmmwi = preg_replace("\57\x5b\136\x41\55\x5a\141\55\x7a\x30\x2d\71\135\x2f", '', $umkokecyamcwcqwe);
        goto kmwckweaaawgkumy;
        kmwckweaaawgkumy:
        $eomsgokgyssmwmai = max(4, min(128, $eomsgokgyssmwmai));
        goto oqewauiqmkiiaiqe;
        guseeaqsaueqcweo:
        $asakkwwsyqsqqkkw = pack("\110\x2a", $sosyakcgakmeueii);
        goto oeqecewccwqsqmmc;
        iauekwigiwssawke:
        iisiamyqqaaoykga:
        goto ggcewuaywkywgcoa;
        oeqecewccwqsqmmc:
        $umkokecyamcwcqwe = base64_encode($asakkwwsyqsqqkkw);
        goto kkmyoieguiwecakw;
        gkscusucwgaoooso:
        if (!(strlen($momkisisegqcmmwi) < $eomsgokgyssmwmai)) {
            goto emqiswoqkweuamuw;
        }
        goto yaacmieqceeiyuii;
        gmwiocukkqksiwkk:
        goto ogigeoakcogugeym;
        goto saqmoqaeaoqmaaqo;
        uqgqukmekkieakco:
        $momkisisegqcmmwi = substr($momkisisegqcmmwi, 0, $eomsgokgyssmwmai);
        goto gakuaukecwikgsmc;
        saqmoqaeaoqmaaqo:
        emqiswoqkweuamuw:
        goto uqgqukmekkieakco;
        oqewauiqmkiiaiqe:
        ogigeoakcogugeym:
        goto gkscusucwgaoooso;
        gocscsauukioowcq:
        $momkisisegqcmmwi = uniqid();
        goto iauekwigiwssawke;
        ggcewuaywkywgcoa:
        return $momkisisegqcmmwi;
        goto wuiuuyooeukyiois;
        osckyscuccyeyiea:
        $sosyakcgakmeueii = md5("\171\157\165\x72\x53\141\154\164\110\x65\x72\x65" . uniqid('', true));
        goto guseeaqsaueqcweo;
        gakuaukecwikgsmc:
        if ($momkisisegqcmmwi) {
            goto iisiamyqqaaoykga;
        }
        goto gocscsauukioowcq;
        wuiuuyooeukyiois:
    }
    
    public static function mkwcwqkqeqkqyggc($egkyssmuqcwaciya)
    {
        goto yymmqiaisemuayke;
        uqmsgooywggqywam:
        $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        goto mooomiuasyggqsis;
        yymmqiaisemuayke:
        if (is_object($egkyssmuqcwaciya)) {
            goto gqkwumcquuuwoqkw;
        }
        goto ysyiewokqwgckeko;
        wwiqmgogkuoaucyc:
        ykeogiauqegcimwm:
        goto siaagaokcmgeuimo;
        cmagkaygaemaaici:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($egkyssmuqcwaciya);
            $ymqmyyeuycgmigyo = $oqkmoekaagukcwia->quqaewqkeiiwqiss();
        } catch (Exception $wgaoewqkwgomoaai) {
            $egkyssmuqcwaciya = explode("\x5c", get_class($egkyssmuqcwaciya));
            $ymqmyyeuycgmigyo = end($egkyssmuqcwaciya);
        }
        goto wwiqmgogkuoaucyc;
        ysyiewokqwgckeko:
        $egkyssmuqcwaciya = explode("\x5c", $egkyssmuqcwaciya);
        goto uqmsgooywggqywam;
        quqkqymwqwywgesy:
        gqkwumcquuuwoqkw:
        goto cmagkaygaemaaici;
        siaagaokcmgeuimo:
        return $ymqmyyeuycgmigyo;
        goto yukmmiscasoogmyu;
        mooomiuasyggqsis:
        goto ykeogiauqegcimwm;
        goto quqkqymwqwywgesy;
        yukmmiscasoogmyu:
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
        goto ucmuqycsksssuyku;
        uamoquqaiywkyigy:
        usmksyiucoeycycc:
        goto yocoiwekswmeqosg;
        ucmuqycsksssuyku:
        if (!($ykiwomimkkuiigoq = strpos($sociqikgoyemqaac, $ekwsasieesaqcsiw))) {
            goto usmksyiucoeycycc;
        }
        goto eoyqkmiwoiyecqiq;
        yocoiwekswmeqosg:
        return $sociqikgoyemqaac;
        goto iaqaecisewceswme;
        eoyqkmiwoiyecqiq:
        return substr($sociqikgoyemqaac, 0, $ykiwomimkkuiigoq);
        goto uamoquqaiywkyigy;
        iaqaecisewceswme:
    }
    
    public static function kwuyaykukcmaqggg($sociqikgoyemqaac) : string
    {
        return strtolower(preg_replace("\x2f\x28\133\141\55\172\x5d\x29\x28\x5b\x41\x2d\x5a\135\51\57", "\x24\x31\137\x24\62", $sociqikgoyemqaac));
    }
    
    public static function snake2camel($sociqikgoyemqaac) : string
    {
        goto ayugswgkeymseuoe;
        yaumammegwowmsqu:
        $sociqikgoyemqaac[0] = strtolower($sociqikgoyemqaac[0]);
        goto ycwsommucswweyww;
        ycwsommucswweyww:
        return $sociqikgoyemqaac;
        goto moigkuskomyqceuu;
        ayugswgkeymseuoe:
        $sociqikgoyemqaac = str_replace("\40", '', ucwords(str_replace("\137", "\40", $sociqikgoyemqaac)));
        goto yaumammegwowmsqu;
        moigkuskomyqceuu:
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
        return "\47{$ycskuuyucyuqisaq}\47";
    }
    
    public static function quuwkeiwesaoqwom($qwcmueausqgiwigy, $iosuwkkwwioumeqg)
    {
        goto sossqwuskoaguiie;
        sossqwuskoaguiie:
        $iosuwkkwwioumeqg = (string) $iosuwkkwwioumeqg;
        goto qiakkkgsokqowqkg;
        qiakkkgsokqowqkg:
        $gaeqamemwmwsyukm = 1;
        goto guukcuckowqqgqag;
        caumcscgkmkqgceq:
        return $iosuwkkwwioumeqg;
        goto ycywkayeqeumswqg;
        kumeocwaamwuggmy:
        if (!$gaeqamemwmwsyukm) {
            goto aaqiiwuwmyqqekwm;
        }
        goto yyyqqsuawgwkayme;
        guukcuckowqqgqag:
        usomesuioqacuiwm:
        goto kumeocwaamwuggmy;
        agksoawkuoguyeio:
        aaqiiwuwmyqqekwm:
        goto caumcscgkmkqgceq;
        yyyqqsuawgwkayme:
        $iosuwkkwwioumeqg = str_replace($qwcmueausqgiwigy, '', $iosuwkkwwioumeqg, $gaeqamemwmwsyukm);
        goto kimmqccoykmmokim;
        kimmqccoykmmokim:
        goto usomesuioqacuiwm;
        goto agksoawkuoguyeio;
        ycywkayeqeumswqg:
    }
    
    public static function crypt($sociqikgoyemqaac, $euakaisoocwokioe = true)
    {
        goto oeskmqswawycuqeo;
        mmsiiummcewgugoq:
        return $aqykuigiuwmmcieu;
        goto uyouwcwuyqkqgiyq;
        gekkqmaemkuucmum:
        if (!extension_loaded("\157\x70\145\156\163\x73\x6c")) {
            goto fwgsuqmqwckweqew;
        }
        goto ycuoumuscogyyumk;
        oskqggqaooyquywg:
        goto awikguaqqiwcqmky;
        goto qwwcygqwemouasmk;
        saemqkkugcicagmu:
        if (!function_exists("\x6f\160\145\156\x73\x73\154\x5f\145\156\x63\x72\x79\160\x74")) {
            goto ecikmukcoqciisue;
        }
        goto kaqecouikkoyoikw;
        swgigmkkkusaacqu:
        imiuiucewegueuic:
        goto oskqggqaooyquywg;
        ayqgiggusesgmumc:
        $uusmaiomayssaecw = hash("\x73\150\141\62\x35\66", "{$eeamcawaiqocomwy}\137\x73\145\x63\x72\x65\x74\x5f\153\145\x79");
        goto ecqowccyawmkikqa;
        qwwcygqwemouasmk:
        aqosaugqkosuuegw:
        goto saemqkkugcicagmu;
        kaqecouikkoyoikw:
        $aqykuigiuwmmcieu = base64_encode(openssl_encrypt($sociqikgoyemqaac, $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck));
        goto uecugkgkswkksmwu;
        oeskmqswawycuqeo:
        
        $qgciuiagkkguykgs = "\x41\x45\123\55\62\x35\66\x2d\103\x42\103";
        goto mkyoqmeigaqsywus;
        ykuagugmmsammmys:
        if (!function_exists("\157\160\145\156\x73\x73\154\137\x64\145\143\x72\171\160\164")) {
            goto imiuiucewegueuic;
        }
        goto yqwaoiwiiueeioyu;
        ycuoumuscogyyumk:
        if ($euakaisoocwokioe) {
            goto aqosaugqkosuuegw;
        }
        goto ykuagugmmsammmys;
        mkyoqmeigaqsywus:
        $aqykuigiuwmmcieu = $sociqikgoyemqaac;
        goto okqakgakegqeqyeq;
        yqwaoiwiiueeioyu:
        $aqykuigiuwmmcieu = openssl_decrypt(base64_decode($sociqikgoyemqaac), $qgciuiagkkguykgs, $uusmaiomayssaecw, 0, $imiwcieyucysgsck);
        goto swgigmkkkusaacqu;
        ecqowccyawmkikqa:
        $imiwcieyucysgsck = substr(hash("\163\x68\141\62\x35\66", "{$eeamcawaiqocomwy}\x5f\x73\145\143\162\145\x74\137\x69\x76"), 0, 16);
        goto gekkqmaemkuucmum;
        oqugeiswsecaumem:
        fwgsuqmqwckweqew:
        goto mmsiiummcewgugoq;
        okqakgakegqeqyeq:
        $eeamcawaiqocomwy = home_url();
        goto ayqgiggusesgmumc;
        mmuukiksuesugoim:
        awikguaqqiwcqmky:
        goto oqugeiswsecaumem;
        uecugkgkswkksmwu:
        ecikmukcoqciisue:
        goto mmuukiksuesugoim;
        uyouwcwuyqkqgiyq:
    }
    
    public static function aisesaskgsuywqqy($egkyssmuqcwaciya) : string
    {
        $ymqmyyeuycgmigyo = self::mkwcwqkqeqkqyggc($egkyssmuqcwaciya);
        return self::aimgkskucmymyquc("\x5c{$ymqmyyeuycgmigyo}", '', $egkyssmuqcwaciya);
    }
    
    public static function ykemmsoumouomkqm($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto koacwewmoggiokwk;
        wsoqwkigckayaqoi:
        if (!$ykiwomimkkuiigoq) {
            goto emecuyysuqqwommu;
        }
        goto iceugoeuecegkosq;
        ecmmsuegkwoaqsck:
        $ykiwomimkkuiigoq = strlen($ekwsasieesaqcsiw);
        goto wsoqwkigckayaqoi;
        iceugoeuecegkosq:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, -$ykiwomimkkuiigoq) === $ekwsasieesaqcsiw;
        goto qkuqauayuwkoqyai;
        uuowasqcmykuuqay:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto eukaauoogymyoqcg;
        }
        goto ecmmsuegkwoaqsck;
        koikmoqykoygkoee:
        return $ksaameoqigiaoigg;
        goto amimcgigeayacwsi;
        ugiacwwoamocgaay:
        $ksaameoqigiaoigg = true;
        goto mqmcuwieyceguisy;
        koacwewmoggiokwk:
        $ksaameoqigiaoigg = false;
        goto uuowasqcmykuuqay;
        mqmcuwieyceguisy:
        geeowmiusiackuiq:
        goto csseweewqmmqmoie;
        yioikeisgkcckggw:
        emecuyysuqqwommu:
        goto ugiacwwoamocgaay;
        qkuqauayuwkoqyai:
        goto geeowmiusiackuiq;
        goto yioikeisgkcckggw;
        csseweewqmmqmoie:
        eukaauoogymyoqcg:
        goto koikmoqykoygkoee;
        amimcgigeayacwsi:
    }
    
    public static function usemqqucksuocoeq($sociqikgoyemqaac) : string
    {
        $ukokkqkkkggcmksy = ["\45\62\61" => "\x21", "\45\x32\101" => "\x2a", "\x25\62\x37" => "\47", "\45\62\70" => "\x28", "\45\x32\71" => "\x29"];
        return strtr(rawurlencode($sociqikgoyemqaac), $ukokkqkkkggcmksy);
    }
    
    public static function wkgaescyescmucmg($wokkuqgcqcyuaiko, $ekwsasieesaqcsiw) : bool
    {
        goto yoscwomwgukawius;
        oceyqqosgiumoigk:
        $ksaameoqigiaoigg = substr($wokkuqgcqcyuaiko, 0, strlen($ekwsasieesaqcsiw)) === $ekwsasieesaqcsiw;
        goto ewogoyaaykymakio;
        ewogoyaaykymakio:
        gwgkeeeaegyiwuwy:
        goto qisgkugkmomqkqyy;
        yoscwomwgukawius:
        $ksaameoqigiaoigg = false;
        goto aswswoccyeayaooc;
        qisgkugkmomqkqyy:
        return $ksaameoqigiaoigg;
        goto miaqgsgmmucyukck;
        aswswoccyeayaooc:
        if (!(is_string($wokkuqgcqcyuaiko) && is_string($ekwsasieesaqcsiw))) {
            goto gwgkeeeaegyiwuwy;
        }
        goto oceyqqosgiumoigk;
        miaqgsgmmucyukck:
    }
    
    public static function gumqicgiosoqweoy($sociqikgoyemqaac)
    {
        
        $ymqmyyeuycgmigyo = ManipulateString::wiecmkiugmyyqiqc(self::PR__, '', $sociqikgoyemqaac);
        return self::csuomkyoukqauwcg($ymqmyyeuycgmigyo, 8);
    }
    
    public static function aimgkskucmymyquc($qwcmueausqgiwigy, $moyaaaascoeowegu, $ycskuuyucyuqisaq)
    {
        goto eaeiyueemeaiscse;
        iiuguqckysykaqqm:
        jkykioyqcqkecswo:
        goto owscgyscmmakkagm;
        owscgyscmmakkagm:
        return $ycskuuyucyuqisaq;
        goto ggimaueycwcaweao;
        uuaeyqiykwmeiuqk:
        $ykiwomimkkuiigoq = strlen($qwcmueausqgiwigy);
        goto acassceoooicwsmi;
        eaeiyueemeaiscse:
        if (!(($yuyowiyumyysomoy = strrpos($ycskuuyucyuqisaq, $qwcmueausqgiwigy)) !== false)) {
            goto jkykioyqcqkecswo;
        }
        goto uuaeyqiykwmeiuqk;
        acassceoooicwsmi:
        $ycskuuyucyuqisaq = substr_replace($ycskuuyucyuqisaq, $moyaaaascoeowegu, $yuyowiyumyysomoy, $ykiwomimkkuiigoq);
        goto iiuguqckysykaqqm;
        ggimaueycwcaweao:
    }
    
    public static function eqyqgywiseiwqocc($uomewyckeuqoqocu) : string
    {
        goto cuoomamgiqewcaga;
        wcuqseiqgmkiagqo:
        qwewqcaomcqwwaqg:
        goto qaokmiyayqscsoey;
        imekyuaciwaewsyg:
        $uomewyckeuqoqocu = join("\47\x2c\40\47", array_map("\145\x73\143\137\x73\161\154", $uomewyckeuqoqocu));
        goto wcuqseiqgmkiagqo;
        cuoomamgiqewcaga:
        if (!(is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu)) {
            goto qwewqcaomcqwwaqg;
        }
        goto imekyuaciwaewsyg;
        qaokmiyayqscsoey:
        return $uomewyckeuqoqocu;
        goto sesuguskosoyouaq;
        sesuguskosoyouaq:
    }
    
    public static function csuomkyoukqauwcg($sociqikgoyemqaac, $aoqagsqecokqqwqg = 5)
    {
        goto oiekomuumyouqaei;
        cmkmcmwqwugqyaua:
        return $sociqikgoyemqaac;
        goto syiawquewyqquceg;
        wmkcqawaggyycweu:
        osaemmikqqguwkeu:
        goto cmkmcmwqwugqyaua;
        sogmmamkkaqauqqi:
        $sociqikgoyemqaac = $uwomkgseoiegeume;
        goto wmkcqawaggyycweu;
        oiekomuumyouqaei:
        $uwomkgseoiegeume = preg_replace("\57\x28\x3f\x3c\41\136\51\133\x61\x41\145\x45\x69\x49\x6f\x4f\x75\125\x5d\x2f", '', $sociqikgoyemqaac);
        goto cayaamsiykmeacmu;
        cayaamsiykmeacmu:
        if (!(strlen($uwomkgseoiegeume) >= $aoqagsqecokqqwqg)) {
            goto osaemmikqqguwkeu;
        }
        goto sogmmamkkaqauqqi;
        syiawquewyqquceg:
    }
    
    public static function wqqwcuegeiqgyswe($egkyssmuqcwaciya) : string
    {
        goto wuwyimqcwoocmgma;
        ucmwiooiyaqqysgi:
        return ManipulateArray::get($uomewyckeuqoqocu, count($uomewyckeuqoqocu) - 1, $aiieyweysaukqemc);
        goto eeeaewggmuucmgke;
        wuwyimqcwoocmgma:
        $aiieyweysaukqemc = self::aisesaskgsuywqqy($egkyssmuqcwaciya);
        goto wasayiuessgesqyg;
        wasayiuessgesqyg:
        $uomewyckeuqoqocu = explode("\134", $aiieyweysaukqemc);
        goto ucmwiooiyaqqysgi;
        eeeaewggmuucmgke:
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

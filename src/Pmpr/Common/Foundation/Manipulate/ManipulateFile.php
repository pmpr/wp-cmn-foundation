<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use DirectoryIterator;
use Exception;
use FilesystemIterator;
use Pmpr\Common\Foundation\Decorator\DecoratorFile;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Filesystem;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use LogicException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use RegexIterator;
use WP_Error;

class ManipulateFile extends Manipulate
{
    
    public static function kiygcugekegoqauw($mkomwsiykqigmqca)
    {
        try {
            $mcowwqgmkuemoumu = new DirectoryIterator($mkomwsiykqigmqca);
        } catch (Exception $iewosgggaueeyymg) {
            $mcowwqgmkuemoumu = [];
        }
        return $mcowwqgmkuemoumu;
    }
    
    public static function lausiwamsokkqguo($owyiccmocukoumyy)
    {
        goto yuamwcksmgkyaayu;
        gagsysekmycceycs:
        $qgoggukmyiemssaa = md5(microtime()) . str_replace("\57", "\56", $cqiuiecmyyqkgeoa);
        goto coweqcyciwygumgw;
        umsuiwswwywqccec:
        
        Filesystem::symcgieuakksimmu()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu);
        goto aqwimyousskkmmys;
        yuamwcksmgkyaayu:
        
        $mqqeykegekqaumeq = DecoratorFile::oemywwmmmiywiqai();
        goto ymgciqyiaoeackyq;
        sgscymyaoiiomuey:
        $mcqieaigyeeyaksm = ManipulateArray::get(explode("\x2c", $owyiccmocukoumyy), 1, $owyiccmocukoumyy);
        goto wcaaskeywmuimuuc;
        coweqcyciwygumgw:
        $mckmqeqaekwkwems = "\164\145\x6d\x70\55{$qgoggukmyiemssaa}";
        goto acqsqiuqaouaccyg;
        ymgciqyiaoeackyq:
        $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\160\141\164\150"]) . DIRECTORY_SEPARATOR;
        goto gumaasmcagyskwuo;
        wcaaskeywmuimuuc:
        $mcqieaigyeeyaksm = str_replace("\40", "\53", $mcqieaigyeeyaksm);
        goto aeqkmkymmqiwyaoc;
        ooaokssiecgqamyw:
        qioesoiiiwmqiyuw:
        goto messaqosuqcuimms;
        wgscommumawcwgeq:
        $esaqeawoigqgagum = ManipulateArray::get($ksaameoqigiaoigg, "\x66\151\154\x65");
        goto kegiaasueigcoucc;
        acqsqiuqaouaccyg:
        $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}";
        goto umsuiwswwywqccec;
        omckgquqwygqseys:
        uwuaawwasggkossk:
        goto oomcumcckcsgkeyg;
        oomcumcckcsgkeyg:
        return $ksaameoqigiaoigg;
        goto sucwucwgwmusqcuc;
        ieemimcomkyeykae:
        goto uwuaawwasggkossk;
        goto ooaokssiecgqamyw;
        gumaasmcagyskwuo:
        $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy);
        goto sgscymyaoiiomuey;
        aqwimyousskkmmys:
        $qogsmwakwacwqogk = ["\156\141\x6d\145" => $qgoggukmyiemssaa, "\x73\151\172\x65" => filesize($yoisseswouogeswg), "\x74\171\x70\145" => $cqiuiecmyyqkgeoa, "\145\x72\x72\157\x72" => '', "\x74\x6d\160\137\x6e\x61\155\x65" => $yoisseswouogeswg];
        goto ogaeyaaussqcqwcq;
        aeqkmkymmqiwyaoc:
        $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm);
        goto qqyeockoeuowkook;
        ogaeyaaussqcqwcq:
        $ksaameoqigiaoigg = DecoratorFile::qsyguaycgacaggsu($qogsmwakwacwqogk, ["\x74\x65\x73\164\137\146\x6f\162\155" => false]);
        goto gikeuuqaaqwesqmg;
        qqyeockoeuowkook:
        $cqiuiecmyyqkgeoa = ManipulateArray::get($yyimiwcuegayoskq, "\155\x69\155\145");
        goto gagsysekmycceycs;
        messaqosuqcuimms:
        $ksaameoqigiaoigg = new WP_Error("\x75\x70\154\157\x61\x64\x5f\x66\151\154\x65\x5f\x65\162\162\x6f\x72", $iswcokucwmiosiaq, ["\x73\x74\x61\x74\x75\163" => 401]);
        goto omckgquqwygqseys;
        kegiaasueigcoucc:
        $aiooqyausygaasqm = ["\x67\165\x69\144" => $mqqeykegekqaumeq["\165\x72\x6c"] . "\x2f" . basename($esaqeawoigqgagum), "\x70\x6f\163\x74\x5f\164\x69\164\154\145" => preg_replace("\57\134\56\x5b\x5e\56\135\x2b\44\x2f", '', basename($esaqeawoigqgagum)), "\160\157\163\164\x5f\163\x74\141\x74\165\163" => "\151\x6e\x68\145\162\151\x74", "\160\x6f\x73\164\137\x63\x6f\156\x74\x65\156\164" => '', "\x70\157\x73\x74\x5f\155\151\155\145\137\164\171\x70\x65" => ManipulateArray::get($ksaameoqigiaoigg, "\164\171\x70\x65", $cqiuiecmyyqkgeoa)];
        goto wqqgkukmcmmiwwsg;
        wqqgkukmcmmiwwsg:
        $ksaameoqigiaoigg = DecoratorAttachment::insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\x70\141\x74\x68"]}\57{$qgoggukmyiemssaa}");
        goto ieemimcomkyeykae;
        gikeuuqaaqwesqmg:
        if ($iswcokucwmiosiaq = ManipulateArray::get($ksaameoqigiaoigg, "\x65\x72\x72\157\x72")) {
            goto qioesoiiiwmqiyuw;
        }
        goto wgscommumawcwgeq;
        sucwucwgwmusqcuc:
    }
    
    public static function wayeasoyaomiwwmc() : ?string
    {
        if (!function_exists("\x67\145\164\137\150\x6f\x6d\x65\x5f\160\141\164\150")) {
            require_once ABSPATH . "\167\160\x2d\x61\x64\x6d\x69\156\x2f\x69\x6e\143\x6c\x75\x64\x65\163\x2f\146\x69\x6c\x65\x2e\x70\x68\160";
        }
        return get_home_path();
    }
    
    public static function eyqooeqgoyokqeoq($aiieyweysaukqemc)
    {
        goto eceuioskggsqggkk;
        eceuioskggsqggkk:
        $esaqeawoigqgagum = null;
        goto qsmkswggymakkaic;
        ccegeskegokuuqyc:
        return $esaqeawoigqgagum;
        goto yywyeuokaqsgqgww;
        qsmkswggymakkaic:
        try {
            goto gqkqmiageemgssym;
            wgiiqociegegkcmo:
            goto ouaqyykiuuesmaom;
            goto smwcsmqwescekeec;
            oueygmwqqkwiqmuw:
            throw new Exception("{$aiieyweysaukqemc}\40\x74\171\x70\x65\40\151\x73\x20\x6e\157\x74\x20\x76\141\154\151\x64\x20\157\162\40\x6e\x61\x6d\x65\163\x70\x61\143\145\40\x6e\x6f\164\40\x65\x78\x69\163\x74\x2e");
            goto wgiiqociegegkcmo;
            qkwaoikuioasioyg:
            $oqkmoekaagukcwia = new \ReflectionClass($aiieyweysaukqemc);
            goto icecukasaccaeouo;
            gqkqmiageemgssym:
            if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) {
                goto oueimsmmmimceuai;
            }
            goto oueygmwqqkwiqmuw;
            icecukasaccaeouo:
            $esaqeawoigqgagum = $oqkmoekaagukcwia->aueqceykakekkqiw();
            goto ymguoykwgqaosgyu;
            smwcsmqwescekeec:
            oueimsmmmimceuai:
            goto qkwaoikuioasioyg;
            ymguoykwgqaosgyu:
            ouaqyykiuuesmaom:
            goto qqokkuaeeaeaaiok;
            qqokkuaeeaeaaiok:
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        goto ccegeskegokuuqyc;
        yywyeuokaqsgqgww:
    }
    
    public static function qucagkayiequsiia($egkyssmuqcwaciya) : ?string
    {
        goto kwwsqkaskggswock;
        wymaswukwyouumeq:
        return $smaiamkswqkisawm;
        goto waakiqmaycwwqaeg;
        uommseoowiuemkwk:
        if (!$esaqeawoigqgagum) {
            goto cygwuguggaeaqmiy;
        }
        goto gaywiqceooiguqea;
        swmouimoiymygayk:
        cygwuguggaeaqmiy:
        goto wymaswukwyouumeq;
        gaywiqceooiguqea:
        $smaiamkswqkisawm = basename($esaqeawoigqgagum);
        goto swmouimoiymygayk;
        acmoecmaeoycigam:
        $esaqeawoigqgagum = self::eyqooeqgoyokqeoq($egkyssmuqcwaciya);
        goto uommseoowiuemkwk;
        kwwsqkaskggswock:
        $smaiamkswqkisawm = null;
        goto acmoecmaeoycigam;
        waakiqmaycwwqaeg:
    }
    
    public static function iygwwosmmgmouoyc($mkomwsiykqigmqca)
    {
        return realpath("{$mkomwsiykqigmqca}\57\56\x2e\57\x2e\56\x2f\56\56\57\x2e\x2e\x2f");
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto kogcsisuicgkaesc;
        ssguwqmoegqekmsc:
        if (!$aokagokqyuysuksm) {
            goto eeeuamsiyssgwkyo;
        }
        goto qyamaiwggysquoqs;
        yyumokoqqeiwcewq:
        sescmkcssisuskoi:
        goto cweyecwwsaogsose;
        esgwwakgieqcwaww:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\144\x6f\167\156\154\x6f\x61\144\57{$ymacoouqwcqwwagu}\x2f";
        goto gyuyiouiquoaouim;
        gyuyiouiquoaouim:
        eeeuamsiyssgwkyo:
        goto yyumokoqqeiwcewq;
        akeeueokwsssimaw:
        if (!$aiooqyausygaasqm) {
            goto sescmkcssisuskoi;
        }
        goto geaeocmguomaqusc;
        geaeocmguomaqusc:
        $aokagokqyuysuksm = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm);
        goto ssguwqmoegqekmsc;
        qyamaiwggysquoqs:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto esgwwakgieqcwaww;
        cweyecwwsaogsose:
        return $iwywmkygwewiamwm;
        goto gqmwuucgesayqego;
        kogcsisuicgkaesc:
        $iwywmkygwewiamwm = false;
        goto akeeueokwsssimaw;
        gqmwuucgesayqego:
    }
    
    public static function qceuosaqmmsiqkym(?string $miawkwqioaeasiig)
    {
        goto qumggamakkcwogeg;
        qumggamakkcwogeg:
        $oiegiwogmwmawkeo = 0;
        goto ggcamcsikeggkkeg;
        ggcamcsikeggkkeg:
        try {
            goto saosqywwkuqysqgu;
            isiokmykwmgusmik:
            foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
                $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac();
                iqkoueycskiymkma:
            }
            goto ussmaqukmmwaigcy;
            ussmaqukmmwaigcy:
            kmmyoqogqymmuyys:
            goto gaeawesmcgqyqeia;
            saosqywwkuqysqgu:
            $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS));
            goto isiokmykwmgusmik;
            gaeawesmcgqyqeia:
        } catch (Exception $iewosgggaueeyymg) {
            
        }
        goto ayewgikkscwoecua;
        ayewgikkscwoecua:
        return $oiegiwogmwmawkeo;
        goto mqewgssacawiesua;
        mqewgssacawiesua:
    }
    
    public static function qmgqwkwkuqaguewu($qogsmwakwacwqogk, $uusmaiomayssaecw = '')
    {
        $uqeyuwmcygawucoc = wp_check_filetype($qogsmwakwacwqogk);
        return ManipulateArray::get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc);
    }
    
    public static function ikeooymesgsuggoe($iuomscuiswckwcoe = false)
    {
        goto esmeekicsmoyumia;
        mgywkkwakokscomi:
        $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134";
        goto ewcusawuygquwqeg;
        yyuiuoisegweicus:
        if (!$iuomscuiswckwcoe) {
            goto memuioceggyeugoe;
        }
        goto syqcmauqkosgmcgc;
        wcosqmqysmksggcm:
        if (!is_null($qkkaqsuiooeayqeu)) {
            goto caemyqosyooeykya;
        }
        goto mgywkkwakokscomi;
        esmeekicsmoyumia:
        static $qkkaqsuiooeayqeu = null;
        goto yyuiuoisegweicus;
        mcqiycyaekmuwcoc:
        memuioceggyeugoe:
        goto wcosqmqysmksggcm;
        syqcmauqkosgmcgc:
        $qkkaqsuiooeayqeu = null;
        goto mcqiycyaekmuwcoc;
        ewcusawuygquwqeg:
        caemyqosyooeykya:
        goto eeuuyygswoueugwm;
        eeuuyygswoueugwm:
        return $qkkaqsuiooeayqeu;
        goto uwioceoekowwawuu;
        uwioceoekowwawuu:
    }
    
    public static function qawkooaucwoseaia($mkomwsiykqigmqca, $ucccueqywigcukcc)
    {
        try {
            $mcowwqgmkuemoumu = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($mkomwsiykqigmqca, FilesystemIterator::SKIP_DOTS));
            $qmwoqyacswkwkiog = new RegexIterator($mcowwqgmkuemoumu, $ucccueqywigcukcc, RecursiveRegexIterator::MATCH);
        } catch (Exception $iewosgggaueeyymg) {
            $qmwoqyacswkwkiog = [];
        }
        return $qmwoqyacswkwkiog;
    }
    
    public static function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '')
    {
        goto igsumksgcomuyyie;
        isymggoseycccwew:
        ymkwuiqgccecsouc:
        goto gokiwsqcmkkwkimq;
        csmcekewikymocqy:
        goto uaowykkiuuygowuk;
        goto wuqwkggewcusmauu;
        oweaacksoisqumyk:
        global $is_apache;
        goto smsweaqgcukcumoe;
        igsumksgcomuyyie:
        $eouekqmooogkoqoo = "\x2f\134\163\x2a\x23\x20\102\x45\107\111\116\40{$ymqmyyeuycgmigyo}\56\x2a\43\x20\x45\x4e\104\40{$ymqmyyeuycgmigyo}\134\x73\52\x3f\x2f\151\163\125";
        goto ycammcyquswuysew;
        gokiwsqcmkkwkimq:
        mygoeeeakcqcckey:
        goto dsqoacgyuawacuwu;
        ukkosocmcsgoyoqk:
        $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu();
        goto ewygwsaaggyeqgou;
        qqcigicgmaciisso:
        goto ggoccuougaayoawu;
        goto yswqswoyackicqoq;
        yswqswoyackicqoq:
        uqowisomaymekaqk:
        goto ockqoeuqcwgyqwca;
        oueaiaquokwususi:
        return $ksaameoqigiaoigg;
        goto ggekiiiaukmmqwos;
        maocyeeeecsocswc:
        qicowuckymwwwkua:
        goto mieskyceqaogywui;
        sakouuiukiouowiu:
        $esaqeawoigqgagum = self::wayeasoyaomiwwmc() . "\x2e\x68\x74\141\143\143\x65\x73\x73";
        goto ukkosocmcsgoyoqk;
        ycammcyquswuysew:
        $ksaameoqigiaoigg = false;
        goto sakouuiukiouowiu;
        yqeceucomeekaiqq:
        if (!$iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) {
            goto mygoeeeakcqcckey;
        }
        goto oiaoakaqgkqqsmsm;
        aqueeyiaoekcmqac:
        $iswcokucwmiosiaq = sprintf(__("\x54\150\145\40\x2e\150\164\x61\143\x63\x65\163\x73\x20\x66\x69\x6c\145\x20\x28\x25\x73\x29\x20\143\x6f\x75\154\144\40\156\157\x74\40\x62\145\40\145\144\151\x74\145\144\56\x20\103\150\145\143\153\x20\x69\x66\40\164\x68\145\40\146\151\x6c\x65\x20\x68\x61\x73\40\167\x72\151\164\145\x20\x70\x65\x72\155\x69\x73\163\x69\x6f\x6e\163\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum, "\157\x70\x74\55\x77\x72\x69\164\145\55\x68\164\141\x63\143\145\x73\163");
        goto wosegmwqcksaemkg;
        wuqwkggewcusmauu:
        aeikksawqyowqasq:
        goto aqueeyiaoekcmqac;
        mieskyceqaogywui:
        ggoccuougaayoawu:
        goto oueaiaquokwususi;
        tkqwawuyoceqgiuw:
        $kgcswwyywoscuqqs = call_user_func($kgcswwyywoscuqqs);
        goto cqoamosqiimaaiqa;
        smsweaqgcukcumoe:
        if (!$is_apache) {
            goto mcymkuaooaywgaqk;
        }
        goto yqeceucomeekaiqq;
        iyuiyscqgeeyuggw:
        $ksaameoqigiaoigg = true;
        goto csmcekewikymocqy;
        dsqoacgyuawacuwu:
        mcymkuaooaywgaqk:
        goto maocyeeeecsocswc;
        ewygwsaaggyeqgou:
        if ($iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) {
            goto uqowisomaymekaqk;
        }
        goto qroismwogguyugwe;
        qroismwogguyugwe:
        $iswcokucwmiosiaq = "{$esaqeawoigqgagum}\40\151\163\40\156\157\164\40\x72\145\x61\144\x61\x62\x6c\145\x2e";
        goto qqcigicgmaciisso;
        okowaykucseuwkwa:
        if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) {
            goto ymkwuiqgccecsouc;
        }
        goto wsiueiimkueqgwmm;
        wosegmwqcksaemkg:
        uaowykkiuuygowuk:
        goto isymggoseycccwew;
        ockqoeuqcwgyqwca:
        $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto woeykqsoceymuaus;
        wsiueiimkueqgwmm:
        if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) {
            goto aeikksawqyowqasq;
        }
        goto iyuiyscqgeeyuggw;
        woeykqsoceymuaus:
        if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) {
            goto qicowuckymwwwkua;
        }
        goto oweaacksoisqumyk;
        cqoamosqiimaaiqa:
        cycqkkuiywsyeeum:
        goto okowaykucseuwkwa;
        oiaoakaqgkqqsmsm:
        if (!is_callable($kgcswwyywoscuqqs)) {
            goto cycqkkuiywsyeeum;
        }
        goto tkqwawuyoceqgiuw;
        ggekiiiaukmmqwos:
    }
    
    public static function usoyisqwsqsegiam(?string $migiiksoiymissge)
    {
        goto uougqksswaquemag;
        myaiyaaageakqmmo:
        $xeciwimgioieayek = '';
        goto gkqyyayiqmugsyaa;
        ywowsisqociesyoc:
        $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge);
        goto sswckucqiaiaoqwm;
        gquswkgymisikkei:
        $ykqmwuwqiskkmwuy = (string) parse_url(get_option("\150\x6f\x6d\x65"), PHP_URL_HOST);
        goto aoccksmyyggqkcky;
        geueeskaygegaoey:
        if (preg_match("\x60\x5e\57\50\x5b\x5e\57\135\53\x29\x28\57\56\x2a\x29\77\44\140\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto scoeukeacygcksek;
        }
        goto myaiyaaageakqmmo;
        yegwcckcwuwoiyay:
        $xeciwimgioieayek = isset($meyiiwcswqmuggyg[3]) ? $meyiiwcswqmuggyg[3] : '';
        goto eaicaiacqyiciycw;
        qmkeeewoecwwqiqe:
        ekeuymuiemykseqq:
        goto acyogacouuiocoak;
        aoccksmyyggqkcky:
        
        $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\57\x3a\x2e\52\44\57", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek;
        goto eykyqqceouqecaay;
        cmiammcmeegquuus:
        $migiiksoiymissge = trailingslashit($migiiksoiymissge);
        goto muiyqmkywcmyuscg;
        magqgeesoiimssqm:
        oyoemceiucoymamk:
        goto yegwcckcwuwoiyay;
        oqguaiwgeucmkcom:
        goto ukommkeiukekcgma;
        goto magqgeesoiimssqm;
        gkqyyayiqmugsyaa:
        goto gisqqagakwuqqwmu;
        goto siomkcccqkcwgaqu;
        qgecoqswyiuaemaa:
        cymuyggaggcuccam:
        goto skcqayaekwqwqaog;
        siomkcccqkcwgaqu:
        scoeukeacygcksek:
        goto oqmisuskgecyaawk;
        muiyqmkywcmyuscg:
        if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) {
            goto ekeuymuiemykseqq;
        }
        goto ywowsisqociesyoc;
        uougqksswaquemag:
        $cgmkimaosyyuqeyg = trailingslashit(site_url());
        goto cmiammcmeegquuus;
        sswckucqiaiaoqwm:
        goto cymuyggaggcuccam;
        goto qmkeeewoecwwqiqe;
        ygaquwoyiuyeicse:
        return $ymqmyyeuycgmigyo;
        goto oeqeaumoegmcqggu;
        skcqayaekwqwqaog:
        $xeciwimgioieayek = ManipulateString::quuwkeiwesaoqwom(["\x2e\56", "\134", "\x69\156\x64\x65\170\56\160\150\x70"], preg_replace("\x2f\x5b\x20\x3c\76\47\x5c\x22\134\162\x5c\156\134\x74\134\50\x5c\51\135\57", '', preg_replace("\57\x28\x5c\x3f\x2e\52\51\x3f\x28\43\56\52\x29\x3f\44\57", '', $xeciwimgioieayek)));
        goto gquswkgymisikkei;
        auwaqagiqgaaokay:
        gisqqagakwuqqwmu:
        goto oqguaiwgeucmkcom;
        oqmisuskgecyaawk:
        $xeciwimgioieayek = $migiiksoiymissge;
        goto auwaqagiqgaaokay;
        acyogacouuiocoak:
        if (preg_match("\x60\x5e\x28\x68\164\164\x70\x73\x3f\72\x29\x3f\57\x2f\50\x5b\x5e\x2f\x5d\x2b\x29\50\x2f\56\52\51\x3f\44\x60\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto oyoemceiucoymamk;
        }
        goto geueeskaygegaoey;
        eykyqqceouqecaay:
        $ymqmyyeuycgmigyo = str_replace(["\x2e\x2e", "\x25"], '', str_replace("\x2f\x2f", "\57", $ymqmyyeuycgmigyo));
        goto ygaquwoyiuyeicse;
        eaicaiacqyiciycw:
        ukommkeiukekcgma:
        goto qgecoqswyiuaemaa;
        oeqeaumoegmcqggu:
    }
    
    public static function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, $iggwcmkgmicmouyu = true)
    {
        goto aagsqmuwcceoekiy;
        aagsqmuwcceoekiy:
        $ksaameoqigiaoigg = false;
        goto qmecmukycucewmuc;
        mqksmeugmqqymwyq:
        return $ksaameoqigiaoigg;
        goto aosoeekeggowekyq;
        icweksgaqeuyayga:
        ocsucmwqukqsuysa:
        goto mqksmeugmqqymwyq;
        qmecmukycucewmuc:
        if (!(self::wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $mkomwsiykqigmqca && $iggwcmkgmicmouyu && Filesystem::symcgieuakksimmu()->oquguuiseiwkawkw($mkomwsiykqigmqca))) {
            goto ocsucmwqukqsuysa;
        }
        goto eqcgikyyuauqeusk;
        eqcgikyyuauqeusk:
        $ksaameoqigiaoigg = $mkomwsiykqigmqca;
        goto icweksgaqeuyayga;
        aosoeekeggowekyq:
    }
    
    public static function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR)
    {
        goto umyagoaugskqauwe;
        ogiwiuueswweceyk:
        mokwauoickaioaye:
        goto oesqsgmommuakocy;
        cwmwawskgukouegg:
        kgeucwqwmecqigmw:
        goto gcmawmaiimmygwuw;
        qqkwqsscgyeooigo:
        eesmuemgcicqwqks:
        goto kmgkqcqquaqqciqq;
        kyeimqaqesssikke:
        
        $ucccueqywigcukcc = "\43\134\57\x2a\133\x5e\x2f\x5c\x2e\135\53\x2f\134\56\x5c\56\43\x55\x75";
        goto ogiwiuueswweceyk;
        umyagoaugskqauwe:
        $emukumgmosiqkmyi = null;
        goto imksuqmseeecckcm;
        oesqsgmommuakocy:
        if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) {
            goto gumwgoyaeiyuycyu;
        }
        goto kosawesakkoyqqsc;
        ouuqsaagueaqycca:
        
        $emukumgmosiqkmyi = preg_replace("\43\57\134\x2e\50\x3f\75\x2f\x29\174\x5e\134\x2e\57\174\x5c\x2e\57\44\x23", '', $emukumgmosiqkmyi);
        goto kyeimqaqesssikke;
        ocamuiagiuuuweei:
        gumwgoyaeiyuycyu:
        goto uaiyoskyqyokucku;
        kmgkqcqquaqqciqq:
        return $emukumgmosiqkmyi;
        goto somgeamsciqieaoy;
        gcmawmaiimmygwuw:
        $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu);
        goto qqkwqsscgyeooigo;
        kosawesakkoyqqsc:
        $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi);
        goto wgyoiyqiuquismae;
        uaiyoskyqyokucku:
        if (!preg_match("\43\x2f\x5c\56\x7b\62\x7d\174\x5c\56\x7b\x32\x7d\x2f\43", $emukumgmosiqkmyi)) {
            goto kgeucwqwmecqigmw;
        }
        goto qqaqeaoeosamukik;
        risykcskaqqgcggo:
        
        $emukumgmosiqkmyi = preg_replace("\x23\134\x70\173\x43\175\x2b\x7c\136\134\56\x2f\43\165", '', $mkomwsiykqigmqca);
        goto ouuqsaagueaqycca;
        wgyoiyqiuquismae:
        goto mokwauoickaioaye;
        goto ocamuiagiuuuweei;
        qqaqeaoeosamukik:
        throw new LogicException("\120\x61\x74\150\x20\x69\163\x20\157\x75\x74\163\x69\144\x65\x20\x6f\146\40\x74\150\145\x20\144\145\146\151\x6e\145\x64\40\162\x6f\157\164\54\40\160\141\164\150\72\40\x5b" . $mkomwsiykqigmqca . "\x5d\x2c\x20\162\145\x73\157\154\x76\145\144\72\x20\133" . $emukumgmosiqkmyi . "\x5d");
        goto cwmwawskgukouegg;
        imksuqmseeecckcm:
        if (!$mkomwsiykqigmqca) {
            goto eesmuemgcicqwqks;
        }
        goto risykcskaqqgcggo;
        somgeamsciqieaoy:
    }
}

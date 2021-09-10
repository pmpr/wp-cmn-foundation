<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    
    public static function qkuqsuugayciskek($mcowwqgmkuemoumu) : bool
    {
        goto ymgciqyiaoeackyq;
        aeqkmkymmqiwyaoc:
        return $qkuqsuugayciskek;
        goto qqyeockoeuowkook;
        gumaasmcagyskwuo:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto yuamwcksmgkyaayu;
        }
        goto sgscymyaoiiomuey;
        wcaaskeywmuimuuc:
        yuamwcksmgkyaayu:
        goto aeqkmkymmqiwyaoc;
        ymgciqyiaoeackyq:
        $qkuqsuugayciskek = false;
        goto gumaasmcagyskwuo;
        sgscymyaoiiomuey:
        
        $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot();
        goto wcaaskeywmuimuuc;
        qqyeockoeuowkook:
    }
    
    public static function mecmkmogggamegic($mcowwqgmkuemoumu) : bool
    {
        goto coweqcyciwygumgw;
        umsuiwswwywqccec:
        
        $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile();
        goto aqwimyousskkmmys;
        coweqcyciwygumgw:
        $mecmkmogggamegic = false;
        goto acqsqiuqaouaccyg;
        aqwimyousskkmmys:
        gagsysekmycceycs:
        goto ogaeyaaussqcqwcq;
        acqsqiuqaouaccyg:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto gagsysekmycceycs;
        }
        goto umsuiwswwywqccec;
        ogaeyaaussqcqwcq:
        return $mecmkmogggamegic;
        goto gikeuuqaaqwesqmg;
        gikeuuqaaqwesqmg:
    }
    
    public static function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string
    {
        goto kegiaasueigcoucc;
        wqqgkukmcmmiwwsg:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto wgscommumawcwgeq;
        }
        goto ieemimcomkyeykae;
        messaqosuqcuimms:
        return $yooeiwgeaoeyusyy;
        goto omckgquqwygqseys;
        kegiaasueigcoucc:
        $yooeiwgeaoeyusyy = null;
        goto wqqgkukmcmmiwwsg;
        ooaokssiecgqamyw:
        wgscommumawcwgeq:
        goto messaqosuqcuimms;
        ieemimcomkyeykae:
        
        $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname();
        goto ooaokssiecgqamyw;
        omckgquqwygqseys:
    }
    
    public static function awosikuiguowiumy($mcowwqgmkuemoumu) : int
    {
        goto sucwucwgwmusqcuc;
        oueygmwqqkwiqmuw:
        return $emqekiqqyiwqigsg;
        goto wgiiqociegegkcmo;
        ouaqyykiuuesmaom:
        
        $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime();
        goto gqkqmiageemgssym;
        gqkqmiageemgssym:
        oomcumcckcsgkeyg:
        goto oueygmwqqkwiqmuw;
        sucwucwgwmusqcuc:
        $emqekiqqyiwqigsg = 0;
        goto oueimsmmmimceuai;
        oueimsmmmimceuai:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto oomcumcckcsgkeyg;
        }
        goto ouaqyykiuuesmaom;
        wgiiqociegegkcmo:
    }
    
    public static function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool
    {
        goto qkwaoikuioasioyg;
        eceuioskggsqggkk:
        return $qkuqsuugayciskek;
        goto qsmkswggymakkaic;
        qqokkuaeeaeaaiok:
        smwcsmqwescekeec:
        goto eceuioskggsqggkk;
        icecukasaccaeouo:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto smwcsmqwescekeec;
        }
        goto ymguoykwgqaosgyu;
        qkwaoikuioasioyg:
        $qkuqsuugayciskek = false;
        goto icecukasaccaeouo;
        ymguoykwgqaosgyu:
        
        $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir();
        goto qqokkuaeeaeaaiok;
        qsmkswggymakkaic:
    }
    
    public static function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string
    {
        goto yywyeuokaqsgqgww;
        cygwuguggaeaqmiy:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto ccegeskegokuuqyc;
        }
        goto kwwsqkaskggswock;
        acmoecmaeoycigam:
        ccegeskegokuuqyc:
        goto uommseoowiuemkwk;
        yywyeuokaqsgqgww:
        $mkomwsiykqigmqca = null;
        goto cygwuguggaeaqmiy;
        kwwsqkaskggswock:
        
        $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath();
        goto acmoecmaeoycigam;
        uommseoowiuemkwk:
        return $mkomwsiykqigmqca;
        goto gaywiqceooiguqea;
        gaywiqceooiguqea:
    }
    
    public static function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string
    {
        goto wymaswukwyouumeq;
        wymaswukwyouumeq:
        $wkcwykowmmmwioqs = null;
        goto waakiqmaycwwqaeg;
        sescmkcssisuskoi:
        swmouimoiymygayk:
        goto kogcsisuicgkaesc;
        waakiqmaycwwqaeg:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto swmouimoiymygayk;
        }
        goto eeeuamsiyssgwkyo;
        kogcsisuicgkaesc:
        return $wkcwykowmmmwioqs;
        goto akeeueokwsssimaw;
        eeeuamsiyssgwkyo:
        
        $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename();
        goto sescmkcssisuskoi;
        akeeueokwsssimaw:
    }
    
    public static function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string
    {
        goto ssguwqmoegqekmsc;
        yyumokoqqeiwcewq:
        return $yucgcsieomwqgwws;
        goto cweyecwwsaogsose;
        gyuyiouiquoaouim:
        geaeocmguomaqusc:
        goto yyumokoqqeiwcewq;
        qyamaiwggysquoqs:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto geaeocmguomaqusc;
        }
        goto esgwwakgieqcwaww;
        ssguwqmoegqekmsc:
        $yucgcsieomwqgwws = null;
        goto qyamaiwggysquoqs;
        esgwwakgieqcwaww:
        
        $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension();
        goto gyuyiouiquoaouim;
        cweyecwwsaogsose:
    }
    
    public static function lausiwamsokkqguo($owyiccmocukoumyy)
    {
        goto iqkoueycskiymkma;
        esmeekicsmoyumia:
        $qogsmwakwacwqogk = ["\x6e\141\155\145" => $qgoggukmyiemssaa, "\x73\x69\x7a\x65" => filesize($yoisseswouogeswg), "\x74\171\x70\x65" => $cqiuiecmyyqkgeoa, "\145\162\x72\x6f\x72" => '', "\x74\155\160\x5f\x6e\x61\x6d\145" => $yoisseswouogeswg];
        goto yyuiuoisegweicus;
        yyuiuoisegweicus:
        $ksaameoqigiaoigg = DecoratorFile::qsyguaycgacaggsu($qogsmwakwacwqogk, ["\x74\x65\x73\x74\137\146\x6f\x72\x6d" => false]);
        goto syqcmauqkosgmcgc;
        uwioceoekowwawuu:
        $ksaameoqigiaoigg = new WP_Error("\165\160\154\157\x61\x64\x5f\x66\x69\x6c\145\137\x65\162\162\157\x72", $iswcokucwmiosiaq, ["\163\164\141\164\165\163" => 401]);
        goto cycqkkuiywsyeeum;
        cycqkkuiywsyeeum:
        kmmyoqogqymmuyys:
        goto aeikksawqyowqasq;
        memuioceggyeugoe:
        $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}";
        goto caemyqosyooeykya;
        saosqywwkuqysqgu:
        $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\160\x61\164\x68"]) . DIRECTORY_SEPARATOR;
        goto isiokmykwmgusmik;
        mcqiycyaekmuwcoc:
        $esaqeawoigqgagum = ManipulateArray::get($ksaameoqigiaoigg, "\x66\x69\x6c\145");
        goto wcosqmqysmksggcm;
        aeikksawqyowqasq:
        return $ksaameoqigiaoigg;
        goto uaowykkiuuygowuk;
        mqewgssacawiesua:
        $mckmqeqaekwkwems = "\x74\145\155\160\x2d{$qgoggukmyiemssaa}";
        goto memuioceggyeugoe;
        isiokmykwmgusmik:
        $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy);
        goto ussmaqukmmwaigcy;
        qumggamakkcwogeg:
        $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm);
        goto ggcamcsikeggkkeg;
        eeuuyygswoueugwm:
        gqmwuucgesayqego:
        goto uwioceoekowwawuu;
        ussmaqukmmwaigcy:
        $mcqieaigyeeyaksm = ManipulateArray::get(explode("\54", $owyiccmocukoumyy), 1, $owyiccmocukoumyy);
        goto gaeawesmcgqyqeia;
        ayewgikkscwoecua:
        $qgoggukmyiemssaa = md5(microtime()) . str_replace("\x2f", "\x2e", $cqiuiecmyyqkgeoa);
        goto mqewgssacawiesua;
        iqkoueycskiymkma:
        
        $mqqeykegekqaumeq = DecoratorFile::oemywwmmmiywiqai();
        goto saosqywwkuqysqgu;
        syqcmauqkosgmcgc:
        if ($iswcokucwmiosiaq = ManipulateArray::get($ksaameoqigiaoigg, "\x65\x72\162\x6f\x72")) {
            goto gqmwuucgesayqego;
        }
        goto mcqiycyaekmuwcoc;
        ewcusawuygquwqeg:
        goto kmmyoqogqymmuyys;
        goto eeuuyygswoueugwm;
        ggcamcsikeggkkeg:
        $cqiuiecmyyqkgeoa = ManipulateArray::get($yyimiwcuegayoskq, "\155\x69\155\x65");
        goto ayewgikkscwoecua;
        caemyqosyooeykya:
        
        Filesystem::symcgieuakksimmu()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu);
        goto esmeekicsmoyumia;
        mgywkkwakokscomi:
        $ksaameoqigiaoigg = DecoratorAttachment::insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\160\x61\164\x68"]}\57{$qgoggukmyiemssaa}");
        goto ewcusawuygquwqeg;
        wcosqmqysmksggcm:
        $aiooqyausygaasqm = ["\147\x75\x69\x64" => $mqqeykegekqaumeq["\x75\x72\154"] . "\x2f" . basename($esaqeawoigqgagum), "\x70\157\163\164\x5f\x74\151\164\154\x65" => preg_replace("\x2f\x5c\x2e\x5b\136\x2e\x5d\x2b\x24\x2f", '', basename($esaqeawoigqgagum)), "\160\x6f\163\164\137\x73\x74\x61\x74\x75\x73" => "\151\x6e\x68\x65\x72\x69\164", "\160\157\163\164\137\x63\157\156\x74\x65\x6e\164" => '', "\x70\157\x73\x74\x5f\x6d\x69\x6d\145\x5f\164\x79\x70\x65" => ManipulateArray::get($ksaameoqigiaoigg, "\x74\x79\160\x65", $cqiuiecmyyqkgeoa)];
        goto mgywkkwakokscomi;
        gaeawesmcgqyqeia:
        $mcqieaigyeeyaksm = str_replace("\40", "\x2b", $mcqieaigyeeyaksm);
        goto qumggamakkcwogeg;
        uaowykkiuuygowuk:
    }
    
    public static function wayeasoyaomiwwmc() : ?string
    {
        if (!function_exists("\x67\145\164\137\150\x6f\x6d\145\x5f\x70\141\164\150")) {
            require_once ABSPATH . "\x77\160\x2d\x61\144\x6d\151\x6e\x2f\x69\x6e\143\x6c\x75\x64\x65\x73\57\x66\x69\154\x65\56\x70\x68\160";
        }
        return get_home_path();
    }
    
    public static function eyqooeqgoyokqeoq($aiieyweysaukqemc)
    {
        goto ewygwsaaggyeqgou;
        qqcigicgmaciisso:
        return $esaqeawoigqgagum;
        goto yswqswoyackicqoq;
        qroismwogguyugwe:
        try {
            goto mcymkuaooaywgaqk;
            qicowuckymwwwkua:
            throw new Exception("{$aiieyweysaukqemc}\x20\164\171\x70\145\40\x69\163\40\156\x6f\x74\x20\x76\x61\154\151\x64\x20\157\x72\40\x6e\141\x6d\145\163\x70\x61\143\x65\x20\x6e\157\164\40\145\170\151\163\164\56");
            goto uqowisomaymekaqk;
            uqowisomaymekaqk:
            goto mygoeeeakcqcckey;
            goto ggoccuougaayoawu;
            sakouuiukiouowiu:
            mygoeeeakcqcckey:
            goto ukkosocmcsgoyoqk;
            mcymkuaooaywgaqk:
            if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) {
                goto ymkwuiqgccecsouc;
            }
            goto qicowuckymwwwkua;
            ycammcyquswuysew:
            $esaqeawoigqgagum = $oqkmoekaagukcwia->aueqceykakekkqiw();
            goto sakouuiukiouowiu;
            igsumksgcomuyyie:
            $oqkmoekaagukcwia = new \ReflectionClass($aiieyweysaukqemc);
            goto ycammcyquswuysew;
            ggoccuougaayoawu:
            ymkwuiqgccecsouc:
            goto igsumksgcomuyyie;
            ukkosocmcsgoyoqk:
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        goto qqcigicgmaciisso;
        ewygwsaaggyeqgou:
        $esaqeawoigqgagum = null;
        goto qroismwogguyugwe;
        yswqswoyackicqoq:
    }
    
    public static function qucagkayiequsiia($egkyssmuqcwaciya) : ?string
    {
        goto woeykqsoceymuaus;
        smsweaqgcukcumoe:
        if (!$esaqeawoigqgagum) {
            goto ockqoeuqcwgyqwca;
        }
        goto yqeceucomeekaiqq;
        oweaacksoisqumyk:
        $esaqeawoigqgagum = self::eyqooeqgoyokqeoq($egkyssmuqcwaciya);
        goto smsweaqgcukcumoe;
        yqeceucomeekaiqq:
        $smaiamkswqkisawm = basename($esaqeawoigqgagum);
        goto oiaoakaqgkqqsmsm;
        woeykqsoceymuaus:
        $smaiamkswqkisawm = null;
        goto oweaacksoisqumyk;
        tkqwawuyoceqgiuw:
        return $smaiamkswqkisawm;
        goto cqoamosqiimaaiqa;
        oiaoakaqgkqqsmsm:
        ockqoeuqcwgyqwca:
        goto tkqwawuyoceqgiuw;
        cqoamosqiimaaiqa:
    }
    
    public static function iygwwosmmgmouoyc($mkomwsiykqigmqca)
    {
        return realpath("{$mkomwsiykqigmqca}\x2f\56\x2e\x2f\x2e\56\x2f\x2e\x2e\x2f\56\56\x2f");
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto iyuiyscqgeeyuggw;
        iyuiyscqgeeyuggw:
        $iwywmkygwewiamwm = false;
        goto csmcekewikymocqy;
        gokiwsqcmkkwkimq:
        okowaykucseuwkwa:
        goto dsqoacgyuawacuwu;
        dsqoacgyuawacuwu:
        wsiueiimkueqgwmm:
        goto maocyeeeecsocswc;
        aqueeyiaoekcmqac:
        if (!$aokagokqyuysuksm) {
            goto okowaykucseuwkwa;
        }
        goto wosegmwqcksaemkg;
        wuqwkggewcusmauu:
        $aokagokqyuysuksm = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm);
        goto aqueeyiaoekcmqac;
        csmcekewikymocqy:
        if (!$aiooqyausygaasqm) {
            goto wsiueiimkueqgwmm;
        }
        goto wuqwkggewcusmauu;
        isymggoseycccwew:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\x64\x6f\167\x6e\154\x6f\x61\x64\57{$ymacoouqwcqwwagu}\57";
        goto gokiwsqcmkkwkimq;
        maocyeeeecsocswc:
        return $iwywmkygwewiamwm;
        goto mieskyceqaogywui;
        wosegmwqcksaemkg:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto isymggoseycccwew;
        mieskyceqaogywui:
    }
    
    public static function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int
    {
        goto ekeuymuiemykseqq;
        uougqksswaquemag:
        return $oiegiwogmwmawkeo;
        goto cmiammcmeegquuus;
        cymuyggaggcuccam:
        try {
            goto scoeukeacygcksek;
            scoeukeacygcksek:
            $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS));
            goto gisqqagakwuqqwmu;
            oyoemceiucoymamk:
            oueaiaquokwususi:
            goto ukommkeiukekcgma;
            gisqqagakwuqqwmu:
            foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
                
                $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac();
                ggekiiiaukmmqwos:
            }
            goto oyoemceiucoymamk;
            ukommkeiukekcgma:
        } catch (Exception $iewosgggaueeyymg) {
            
        }
        goto uougqksswaquemag;
        ekeuymuiemykseqq:
        $oiegiwogmwmawkeo = 0;
        goto cymuyggaggcuccam;
        cmiammcmeegquuus:
    }
    
    public static function qmgqwkwkuqaguewu($qogsmwakwacwqogk, $uusmaiomayssaecw = '')
    {
        $uqeyuwmcygawucoc = wp_check_filetype($qogsmwakwacwqogk);
        return ManipulateArray::get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc);
    }
    
    public static function ikeooymesgsuggoe($iuomscuiswckwcoe = false)
    {
        goto sswckucqiaiaoqwm;
        myaiyaaageakqmmo:
        if (!is_null($qkkaqsuiooeayqeu)) {
            goto ywowsisqociesyoc;
        }
        goto gkqyyayiqmugsyaa;
        gkqyyayiqmugsyaa:
        $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\x5c";
        goto siomkcccqkcwgaqu;
        geueeskaygegaoey:
        muiyqmkywcmyuscg:
        goto myaiyaaageakqmmo;
        siomkcccqkcwgaqu:
        ywowsisqociesyoc:
        goto oqmisuskgecyaawk;
        acyogacouuiocoak:
        $qkkaqsuiooeayqeu = null;
        goto geueeskaygegaoey;
        oqmisuskgecyaawk:
        return $qkkaqsuiooeayqeu;
        goto auwaqagiqgaaokay;
        sswckucqiaiaoqwm:
        static $qkkaqsuiooeayqeu = null;
        goto qmkeeewoecwwqiqe;
        qmkeeewoecwwqiqe:
        if (!$iuomscuiswckwcoe) {
            goto muiyqmkywcmyuscg;
        }
        goto acyogacouuiocoak;
        auwaqagiqgaaokay:
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
    
    public static function gcwmgguowgqguesm($ymqmyyeuycgmigyo, $kgcswwyywoscuqqs, &$iswcokucwmiosiaq = '') : bool
    {
        goto ygaquwoyiuyeicse;
        icweksgaqeuyayga:
        goto eykyqqceouqecaay;
        goto mqksmeugmqqymwyq;
        mqksmeugmqqymwyq:
        aoccksmyyggqkcky:
        goto aosoeekeggowekyq;
        kmgkqcqquaqqciqq:
        return $ksaameoqigiaoigg;
        goto somgeamsciqieaoy;
        aosoeekeggowekyq:
        $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto gumwgoyaeiyuycyu;
        risykcskaqqgcggo:
        oqguaiwgeucmkcom:
        goto ouuqsaagueaqycca;
        ogiwiuueswweceyk:
        $ksaameoqigiaoigg = true;
        goto oesqsgmommuakocy;
        qmecmukycucewmuc:
        if ($iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) {
            goto aoccksmyyggqkcky;
        }
        goto eqcgikyyuauqeusk;
        qqkwqsscgyeooigo:
        eykyqqceouqecaay:
        goto kmgkqcqquaqqciqq;
        ouuqsaagueaqycca:
        if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) {
            goto eaicaiacqyiciycw;
        }
        goto kyeimqaqesssikke;
        qqaqeaoeosamukik:
        qgecoqswyiuaemaa:
        goto cwmwawskgukouegg;
        gcmawmaiimmygwuw:
        gquswkgymisikkei:
        goto qqkwqsscgyeooigo;
        wgyoiyqiuquismae:
        $iswcokucwmiosiaq = sprintf(__("\124\x68\x65\x20\56\150\164\x61\143\143\x65\163\x73\x20\146\x69\x6c\145\x20\x28\45\163\x29\40\x63\157\165\154\x64\x20\156\157\164\x20\142\x65\40\x65\x64\x69\x74\145\x64\56\40\103\x68\145\x63\153\x20\151\x66\40\164\x68\x65\x20\x66\x69\x6c\x65\x20\x68\141\163\x20\167\162\x69\x74\145\x20\x70\x65\162\155\151\163\x73\x69\x6f\x6e\x73\x2e", PR__CMN__FOUNDATION), $esaqeawoigqgagum, "\x6f\x70\x74\55\167\162\151\x74\145\55\150\164\141\143\x63\x65\x73\163");
        goto ocamuiagiuuuweei;
        uaiyoskyqyokucku:
        eaicaiacqyiciycw:
        goto qqaqeaoeosamukik;
        gumwgoyaeiyuycyu:
        if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) {
            goto gquswkgymisikkei;
        }
        goto mokwauoickaioaye;
        oeqeaumoegmcqggu:
        $ksaameoqigiaoigg = false;
        goto ocsucmwqukqsuysa;
        ocsucmwqukqsuysa:
        $esaqeawoigqgagum = self::wayeasoyaomiwwmc() . "\56\x68\x74\x61\143\x63\145\163\163";
        goto aagsqmuwcceoekiy;
        kgeucwqwmecqigmw:
        if (!$is_apache) {
            goto skcqayaekwqwqaog;
        }
        goto eesmuemgcicqwqks;
        oesqsgmommuakocy:
        goto yegwcckcwuwoiyay;
        goto kosawesakkoyqqsc;
        cwmwawskgukouegg:
        skcqayaekwqwqaog:
        goto gcmawmaiimmygwuw;
        ygaquwoyiuyeicse:
        $eouekqmooogkoqoo = "\x2f\134\x73\52\x23\x20\102\x45\x47\x49\x4e\x20{$ymqmyyeuycgmigyo}\56\52\x23\x20\105\x4e\x44\x20{$ymqmyyeuycgmigyo}\x5c\x73\x2a\77\x2f\151\163\x55";
        goto oeqeaumoegmcqggu;
        mokwauoickaioaye:
        global $is_apache;
        goto kgeucwqwmecqigmw;
        eesmuemgcicqwqks:
        if (!$iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) {
            goto qgecoqswyiuaemaa;
        }
        goto umyagoaugskqauwe;
        kyeimqaqesssikke:
        if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) {
            goto magqgeesoiimssqm;
        }
        goto ogiwiuueswweceyk;
        aagsqmuwcceoekiy:
        $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu();
        goto qmecmukycucewmuc;
        kosawesakkoyqqsc:
        magqgeesoiimssqm:
        goto wgyoiyqiuquismae;
        ocamuiagiuuuweei:
        yegwcckcwuwoiyay:
        goto uaiyoskyqyokucku;
        imksuqmseeecckcm:
        $kgcswwyywoscuqqs = call_user_func($kgcswwyywoscuqqs);
        goto risykcskaqqgcggo;
        umyagoaugskqauwe:
        if (!is_callable($kgcswwyywoscuqqs)) {
            goto oqguaiwgeucmkcom;
        }
        goto imksuqmseeecckcm;
        eqcgikyyuauqeusk:
        $iswcokucwmiosiaq = "{$esaqeawoigqgagum}\40\x69\163\x20\156\157\x74\x20\x72\x65\141\144\141\142\x6c\145\x2e";
        goto icweksgaqeuyayga;
        somgeamsciqieaoy:
    }
    
    public static function usoyisqwsqsegiam(?string $migiiksoiymissge)
    {
        goto jceqycsmkusyoowc;
        goywyqwiewckiomw:
        aqoggmcwaocwqmma:
        goto ekgaaqmmaescmsak;
        wkkyyosuiiesusyy:
        $ymqmyyeuycgmigyo = str_replace(["\56\x2e", "\x25"], '', str_replace("\57\57", "\57", $ymqmyyeuycgmigyo));
        goto emwyayayykqeaomu;
        ocqggiokqycoqmmu:
        gsiccicikauwmmie:
        goto scooqcccqwoackku;
        imuggoqgiugiyyms:
        
        $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\72\56\52\x24\x2f", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek;
        goto wkkyyosuiiesusyy;
        ywwgekggsmaeswyq:
        $migiiksoiymissge = trailingslashit($migiiksoiymissge);
        goto mswesygwomaquqiw;
        smokemkeeuyeamye:
        goto yagkqyieuqkwkkak;
        goto eeqooyucsqoakgmw;
        eeqooyucsqoakgmw:
        muoiywyyogmywgug:
        goto wmgaeiusimsuaeiu;
        eswgaqweugauecaq:
        $xeciwimgioieayek = $migiiksoiymissge;
        goto gcukeaaoomsqkwmg;
        igqcisomycuoeymm:
        yagkqyieuqkwkkak:
        goto ocqggiokqycoqmmu;
        ekgaaqmmaescmsak:
        if (preg_match("\x60\136\x28\150\164\164\x70\163\x3f\72\51\x3f\x2f\57\x28\x5b\x5e\57\x5d\53\51\x28\x2f\x2e\52\x29\77\44\140\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto muoiywyyogmywgug;
        }
        goto aqsqeoiismoaoiky;
        scooqcccqwoackku:
        $xeciwimgioieayek = ManipulateString::quuwkeiwesaoqwom(["\56\56", "\x5c", "\x69\156\144\145\170\x2e\160\150\160"], preg_replace("\57\133\x20\74\x3e\47\x5c\42\134\162\x5c\156\x5c\164\x5c\50\x5c\x29\135\57", '', preg_replace("\x2f\x28\134\x3f\x2e\52\x29\x3f\x28\x23\56\52\51\77\44\57", '', $xeciwimgioieayek)));
        goto wmkceagokqacmiwy;
        euogucuegesyqyyk:
        goto aigsykmqeyesokek;
        goto awiquiscemosoioe;
        gcukeaaoomsqkwmg:
        aigsykmqeyesokek:
        goto smokemkeeuyeamye;
        aqsqeoiismoaoiky:
        if (preg_match("\140\136\x2f\50\133\x5e\57\x5d\x2b\x29\x28\x2f\56\52\51\77\44\x60\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto wmwggwqewsaqwewq;
        }
        goto kguoeaummyeuqwco;
        emwyayayykqeaomu:
        return $ymqmyyeuycgmigyo;
        goto kkyyicgmsyyyseko;
        aosgwsogkogssquu:
        goto gsiccicikauwmmie;
        goto goywyqwiewckiomw;
        wmkceagokqacmiwy:
        $ykqmwuwqiskkmwuy = (string) parse_url(get_option("\x68\157\x6d\x65"), PHP_URL_HOST);
        goto imuggoqgiugiyyms;
        jceqycsmkusyoowc:
        $cgmkimaosyyuqeyg = trailingslashit(site_url());
        goto ywwgekggsmaeswyq;
        awiquiscemosoioe:
        wmwggwqewsaqwewq:
        goto eswgaqweugauecaq;
        oyiiyksykcgcagus:
        $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge);
        goto aosgwsogkogssquu;
        wmgaeiusimsuaeiu:
        $xeciwimgioieayek = isset($meyiiwcswqmuggyg[3]) ? $meyiiwcswqmuggyg[3] : '';
        goto igqcisomycuoeymm;
        mswesygwomaquqiw:
        if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) {
            goto aqoggmcwaocwqmma;
        }
        goto oyiiyksykcgcagus;
        kguoeaummyeuqwco:
        $xeciwimgioieayek = '';
        goto euogucuegesyqyyk;
        kkyyicgmsyyyseko:
    }
    
    public static function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, $iggwcmkgmicmouyu = true)
    {
        goto wiwqmuwgswwgcgwq;
        aygqokkmmumaqmei:
        $ksaameoqigiaoigg = $mkomwsiykqigmqca;
        goto ikauicmsakmoqusg;
        wiwqmuwgswwgcgwq:
        $ksaameoqigiaoigg = false;
        goto yisaacgkisqssack;
        yisaacgkisqssack:
        if (!(self::wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $mkomwsiykqigmqca && $iggwcmkgmicmouyu && Filesystem::symcgieuakksimmu()->oquguuiseiwkawkw($mkomwsiykqigmqca))) {
            goto iisqqoaayqqqucai;
        }
        goto aygqokkmmumaqmei;
        ikauicmsakmoqusg:
        iisqqoaayqqqucai:
        goto weyoyumiwmwougco;
        weyoyumiwmwougco:
        return $ksaameoqigiaoigg;
        goto gsegyaaokkacccas;
        gsegyaaokkacccas:
    }
    
    public static function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR)
    {
        goto aimwyouyuaasmcsy;
        wysmgisokmgyaukg:
        
        $emukumgmosiqkmyi = preg_replace("\x23\x2f\134\56\x28\77\75\57\x29\174\136\x5c\x2e\57\x7c\x5c\x2e\x2f\44\43", '', $emukumgmosiqkmyi);
        goto qmugicuuomqociko;
        yuscoeckmsicamcy:
        kaksiweaiuugqeio:
        goto iquggikocsikyqcu;
        qyqaskiyiewkcqog:
        $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi);
        goto ocawiugcmcgyiuqy;
        eioqwkagqyekiogk:
        wkoaouywgckiigoa:
        goto aswigywgqmqqyaks;
        ocawiugcmcgyiuqy:
        goto wkoaouywgckiigoa;
        goto sukwuguiwokwokoa;
        qmugicuuomqociko:
        
        $ucccueqywigcukcc = "\x23\x5c\57\52\x5b\136\x2f\x5c\x2e\x5d\53\57\x5c\56\x5c\56\43\125\x75";
        goto eioqwkagqyekiogk;
        mosmuqisqgakqaku:
        return $emukumgmosiqkmyi;
        goto ukmgiiamkccogikc;
        qqcgoykmgigawaue:
        ewkcysiiwmycaecc:
        goto mosmuqisqgakqaku;
        ukwyoqwawqemgaou:
        if (!preg_match("\43\x2f\134\56\x7b\x32\175\174\134\56\173\62\x7d\57\43", $emukumgmosiqkmyi)) {
            goto kaksiweaiuugqeio;
        }
        goto iiceausgsgcgseiu;
        aimwyouyuaasmcsy:
        $emukumgmosiqkmyi = null;
        goto wuyoocqaysogmcsa;
        sukwuguiwokwokoa:
        kkwsccmgsgogsayc:
        goto ukwyoqwawqemgaou;
        iquggikocsikyqcu:
        $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu);
        goto qqcgoykmgigawaue;
        aswigywgqmqqyaks:
        if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) {
            goto kkwsccmgsgogsayc;
        }
        goto qyqaskiyiewkcqog;
        sqqosuucouosesoe:
        
        $emukumgmosiqkmyi = preg_replace("\x23\x5c\x70\x7b\103\x7d\53\x7c\136\134\56\57\x23\165", '', $mkomwsiykqigmqca);
        goto wysmgisokmgyaukg;
        iiceausgsgcgseiu:
        throw new LogicException("\x50\x61\164\x68\x20\151\163\40\x6f\165\x74\x73\x69\144\145\40\157\146\40\164\150\x65\40\144\145\x66\x69\x6e\145\144\40\162\x6f\157\164\54\x20\160\x61\164\x68\72\x20\x5b" . $mkomwsiykqigmqca . "\x5d\x2c\x20\162\x65\x73\157\x6c\x76\x65\x64\72\40\133" . $emukumgmosiqkmyi . "\x5d");
        goto yuscoeckmsicamcy;
        wuyoocqaysogmcsa:
        if (!$mkomwsiykqigmqca) {
            goto ewkcysiiwmycaecc;
        }
        goto sqqosuucouosesoe;
        ukmgiiamkccogikc:
    }
}

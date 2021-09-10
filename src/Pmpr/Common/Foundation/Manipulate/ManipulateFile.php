<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto yuamwcksmgkyaayu;
        ymgciqyiaoeackyq:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto uwuaawwasggkossk;
        }
        goto gumaasmcagyskwuo;
        wcaaskeywmuimuuc:
        return $qkuqsuugayciskek;
        goto aeqkmkymmqiwyaoc;
        sgscymyaoiiomuey:
        uwuaawwasggkossk:
        goto wcaaskeywmuimuuc;
        gumaasmcagyskwuo:
        
        $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot();
        goto sgscymyaoiiomuey;
        yuamwcksmgkyaayu:
        $qkuqsuugayciskek = false;
        goto ymgciqyiaoeackyq;
        aeqkmkymmqiwyaoc:
    }
    
    public static function mecmkmogggamegic($mcowwqgmkuemoumu) : bool
    {
        goto gagsysekmycceycs;
        acqsqiuqaouaccyg:
        
        $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile();
        goto umsuiwswwywqccec;
        gagsysekmycceycs:
        $mecmkmogggamegic = false;
        goto coweqcyciwygumgw;
        aqwimyousskkmmys:
        return $mecmkmogggamegic;
        goto ogaeyaaussqcqwcq;
        umsuiwswwywqccec:
        qqyeockoeuowkook:
        goto aqwimyousskkmmys;
        coweqcyciwygumgw:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto qqyeockoeuowkook;
        }
        goto acqsqiuqaouaccyg;
        ogaeyaaussqcqwcq:
    }
    
    public static function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string
    {
        goto wgscommumawcwgeq;
        ooaokssiecgqamyw:
        return $yooeiwgeaoeyusyy;
        goto messaqosuqcuimms;
        wgscommumawcwgeq:
        $yooeiwgeaoeyusyy = null;
        goto kegiaasueigcoucc;
        kegiaasueigcoucc:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto gikeuuqaaqwesqmg;
        }
        goto wqqgkukmcmmiwwsg;
        wqqgkukmcmmiwwsg:
        
        $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname();
        goto ieemimcomkyeykae;
        ieemimcomkyeykae:
        gikeuuqaaqwesqmg:
        goto ooaokssiecgqamyw;
        messaqosuqcuimms:
    }
    
    public static function awosikuiguowiumy($mcowwqgmkuemoumu) : int
    {
        goto oomcumcckcsgkeyg;
        oomcumcckcsgkeyg:
        $emqekiqqyiwqigsg = 0;
        goto sucwucwgwmusqcuc;
        ouaqyykiuuesmaom:
        omckgquqwygqseys:
        goto gqkqmiageemgssym;
        oueimsmmmimceuai:
        
        $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime();
        goto ouaqyykiuuesmaom;
        gqkqmiageemgssym:
        return $emqekiqqyiwqigsg;
        goto oueygmwqqkwiqmuw;
        sucwucwgwmusqcuc:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto omckgquqwygqseys;
        }
        goto oueimsmmmimceuai;
        oueygmwqqkwiqmuw:
    }
    
    public static function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool
    {
        goto smwcsmqwescekeec;
        ymguoykwgqaosgyu:
        wgiiqociegegkcmo:
        goto qqokkuaeeaeaaiok;
        icecukasaccaeouo:
        
        $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir();
        goto ymguoykwgqaosgyu;
        smwcsmqwescekeec:
        $qkuqsuugayciskek = false;
        goto qkwaoikuioasioyg;
        qkwaoikuioasioyg:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto wgiiqociegegkcmo;
        }
        goto icecukasaccaeouo;
        qqokkuaeeaeaaiok:
        return $qkuqsuugayciskek;
        goto eceuioskggsqggkk;
        eceuioskggsqggkk:
    }
    
    public static function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string
    {
        goto ccegeskegokuuqyc;
        kwwsqkaskggswock:
        qsmkswggymakkaic:
        goto acmoecmaeoycigam;
        cygwuguggaeaqmiy:
        
        $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath();
        goto kwwsqkaskggswock;
        ccegeskegokuuqyc:
        $mkomwsiykqigmqca = null;
        goto yywyeuokaqsgqgww;
        acmoecmaeoycigam:
        return $mkomwsiykqigmqca;
        goto uommseoowiuemkwk;
        yywyeuokaqsgqgww:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto qsmkswggymakkaic;
        }
        goto cygwuguggaeaqmiy;
        uommseoowiuemkwk:
    }
    
    public static function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string
    {
        goto swmouimoiymygayk;
        swmouimoiymygayk:
        $wkcwykowmmmwioqs = null;
        goto wymaswukwyouumeq;
        sescmkcssisuskoi:
        return $wkcwykowmmmwioqs;
        goto kogcsisuicgkaesc;
        eeeuamsiyssgwkyo:
        gaywiqceooiguqea:
        goto sescmkcssisuskoi;
        waakiqmaycwwqaeg:
        
        $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename();
        goto eeeuamsiyssgwkyo;
        wymaswukwyouumeq:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto gaywiqceooiguqea;
        }
        goto waakiqmaycwwqaeg;
        kogcsisuicgkaesc:
    }
    
    public static function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string
    {
        goto geaeocmguomaqusc;
        geaeocmguomaqusc:
        $yucgcsieomwqgwws = null;
        goto ssguwqmoegqekmsc;
        ssguwqmoegqekmsc:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto akeeueokwsssimaw;
        }
        goto qyamaiwggysquoqs;
        qyamaiwggysquoqs:
        
        $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension();
        goto esgwwakgieqcwaww;
        gyuyiouiquoaouim:
        return $yucgcsieomwqgwws;
        goto yyumokoqqeiwcewq;
        esgwwakgieqcwaww:
        akeeueokwsssimaw:
        goto gyuyiouiquoaouim;
        yyumokoqqeiwcewq:
    }
    
    public static function lausiwamsokkqguo($owyiccmocukoumyy)
    {
        goto kmmyoqogqymmuyys;
        ussmaqukmmwaigcy:
        $mcqieaigyeeyaksm = str_replace("\x20", "\x2b", $mcqieaigyeeyaksm);
        goto gaeawesmcgqyqeia;
        ayewgikkscwoecua:
        $mckmqeqaekwkwems = "\x74\145\155\160\x2d{$qgoggukmyiemssaa}";
        goto mqewgssacawiesua;
        uwioceoekowwawuu:
        gqmwuucgesayqego:
        goto cycqkkuiywsyeeum;
        syqcmauqkosgmcgc:
        $esaqeawoigqgagum = ManipulateArray::get($ksaameoqigiaoigg, "\x66\x69\x6c\x65");
        goto mcqiycyaekmuwcoc;
        cycqkkuiywsyeeum:
        return $ksaameoqigiaoigg;
        goto aeikksawqyowqasq;
        kmmyoqogqymmuyys:
        
        $mqqeykegekqaumeq = DecoratorFile::oemywwmmmiywiqai();
        goto iqkoueycskiymkma;
        iqkoueycskiymkma:
        $usuwmommwquwiiia = str_replace("\57", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\x70\141\x74\x68"]) . DIRECTORY_SEPARATOR;
        goto saosqywwkuqysqgu;
        mcqiycyaekmuwcoc:
        $aiooqyausygaasqm = ["\x67\165\x69\144" => $mqqeykegekqaumeq["\x75\x72\x6c"] . "\57" . basename($esaqeawoigqgagum), "\x70\157\x73\x74\x5f\164\x69\x74\x6c\x65" => preg_replace("\x2f\x5c\56\133\136\x2e\x5d\53\44\x2f", '', basename($esaqeawoigqgagum)), "\160\x6f\x73\164\x5f\163\x74\x61\x74\x75\163" => "\151\x6e\x68\145\x72\151\164", "\160\x6f\163\x74\137\143\157\156\x74\x65\156\164" => '', "\160\157\163\x74\137\155\151\x6d\x65\x5f\164\171\x70\x65" => ManipulateArray::get($ksaameoqigiaoigg, "\164\x79\160\x65", $cqiuiecmyyqkgeoa)];
        goto wcosqmqysmksggcm;
        eeuuyygswoueugwm:
        $ksaameoqigiaoigg = new WP_Error("\165\160\x6c\x6f\141\144\x5f\146\151\154\145\137\145\x72\x72\157\162", $iswcokucwmiosiaq, ["\x73\x74\x61\164\165\x73" => 401]);
        goto uwioceoekowwawuu;
        ewcusawuygquwqeg:
        cweyecwwsaogsose:
        goto eeuuyygswoueugwm;
        yyuiuoisegweicus:
        if ($iswcokucwmiosiaq = ManipulateArray::get($ksaameoqigiaoigg, "\x65\162\162\157\x72")) {
            goto cweyecwwsaogsose;
        }
        goto syqcmauqkosgmcgc;
        ggcamcsikeggkkeg:
        $qgoggukmyiemssaa = md5(microtime()) . str_replace("\x2f", "\56", $cqiuiecmyyqkgeoa);
        goto ayewgikkscwoecua;
        isiokmykwmgusmik:
        $mcqieaigyeeyaksm = ManipulateArray::get(explode("\x2c", $owyiccmocukoumyy), 1, $owyiccmocukoumyy);
        goto ussmaqukmmwaigcy;
        esmeekicsmoyumia:
        $ksaameoqigiaoigg = DecoratorFile::qsyguaycgacaggsu($qogsmwakwacwqogk, ["\164\145\163\x74\x5f\146\157\x72\155" => false]);
        goto yyuiuoisegweicus;
        mgywkkwakokscomi:
        goto gqmwuucgesayqego;
        goto ewcusawuygquwqeg;
        saosqywwkuqysqgu:
        $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy);
        goto isiokmykwmgusmik;
        wcosqmqysmksggcm:
        $ksaameoqigiaoigg = DecoratorAttachment::insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\160\141\x74\x68"]}\57{$qgoggukmyiemssaa}");
        goto mgywkkwakokscomi;
        caemyqosyooeykya:
        $qogsmwakwacwqogk = ["\x6e\141\x6d\145" => $qgoggukmyiemssaa, "\163\x69\172\x65" => filesize($yoisseswouogeswg), "\x74\x79\160\145" => $cqiuiecmyyqkgeoa, "\x65\162\x72\x6f\162" => '', "\x74\x6d\x70\137\x6e\141\x6d\145" => $yoisseswouogeswg];
        goto esmeekicsmoyumia;
        gaeawesmcgqyqeia:
        $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm);
        goto qumggamakkcwogeg;
        mqewgssacawiesua:
        $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}";
        goto memuioceggyeugoe;
        qumggamakkcwogeg:
        $cqiuiecmyyqkgeoa = ManipulateArray::get($yyimiwcuegayoskq, "\155\151\x6d\145");
        goto ggcamcsikeggkkeg;
        memuioceggyeugoe:
        
        Filesystem::symcgieuakksimmu()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu);
        goto caemyqosyooeykya;
        aeikksawqyowqasq:
    }
    
    public static function wayeasoyaomiwwmc() : ?string
    {
        if (!function_exists("\147\145\x74\x5f\150\x6f\155\x65\137\160\141\164\x68")) {
            require_once ABSPATH . "\167\160\55\x61\144\155\x69\156\x2f\x69\156\x63\154\165\144\145\x73\57\x66\x69\x6c\x65\56\160\x68\x70";
        }
        return get_home_path();
    }
    
    public static function eyqooeqgoyokqeoq($aiieyweysaukqemc)
    {
        goto ukkosocmcsgoyoqk;
        ewygwsaaggyeqgou:
        try {
            goto mygoeeeakcqcckey;
            mygoeeeakcqcckey:
            if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) {
                goto uaowykkiuuygowuk;
            }
            goto mcymkuaooaywgaqk;
            ggoccuougaayoawu:
            $oqkmoekaagukcwia = new \ReflectionClass($aiieyweysaukqemc);
            goto igsumksgcomuyyie;
            igsumksgcomuyyie:
            $esaqeawoigqgagum = $oqkmoekaagukcwia->aueqceykakekkqiw();
            goto ycammcyquswuysew;
            qicowuckymwwwkua:
            goto ymkwuiqgccecsouc;
            goto uqowisomaymekaqk;
            uqowisomaymekaqk:
            uaowykkiuuygowuk:
            goto ggoccuougaayoawu;
            mcymkuaooaywgaqk:
            throw new Exception("{$aiieyweysaukqemc}\x20\164\171\160\145\x20\x69\x73\40\x6e\x6f\x74\40\x76\x61\154\151\x64\40\157\162\x20\x6e\x61\155\x65\163\x70\141\x63\x65\x20\156\157\164\40\145\170\151\x73\164\56");
            goto qicowuckymwwwkua;
            ycammcyquswuysew:
            ymkwuiqgccecsouc:
            goto sakouuiukiouowiu;
            sakouuiukiouowiu:
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        goto qroismwogguyugwe;
        ukkosocmcsgoyoqk:
        $esaqeawoigqgagum = null;
        goto ewygwsaaggyeqgou;
        qroismwogguyugwe:
        return $esaqeawoigqgagum;
        goto qqcigicgmaciisso;
        qqcigicgmaciisso:
    }
    
    public static function qucagkayiequsiia($egkyssmuqcwaciya) : ?string
    {
        goto ockqoeuqcwgyqwca;
        smsweaqgcukcumoe:
        $smaiamkswqkisawm = basename($esaqeawoigqgagum);
        goto yqeceucomeekaiqq;
        woeykqsoceymuaus:
        $esaqeawoigqgagum = self::eyqooeqgoyokqeoq($egkyssmuqcwaciya);
        goto oweaacksoisqumyk;
        ockqoeuqcwgyqwca:
        $smaiamkswqkisawm = null;
        goto woeykqsoceymuaus;
        yqeceucomeekaiqq:
        yswqswoyackicqoq:
        goto oiaoakaqgkqqsmsm;
        oweaacksoisqumyk:
        if (!$esaqeawoigqgagum) {
            goto yswqswoyackicqoq;
        }
        goto smsweaqgcukcumoe;
        oiaoakaqgkqqsmsm:
        return $smaiamkswqkisawm;
        goto tkqwawuyoceqgiuw;
        tkqwawuyoceqgiuw:
    }
    
    public static function iygwwosmmgmouoyc($mkomwsiykqigmqca)
    {
        return realpath("{$mkomwsiykqigmqca}\57\56\56\x2f\x2e\x2e\57\x2e\56\x2f\56\x2e\x2f");
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto wsiueiimkueqgwmm;
        wsiueiimkueqgwmm:
        $iwywmkygwewiamwm = false;
        goto iyuiyscqgeeyuggw;
        isymggoseycccwew:
        cqoamosqiimaaiqa:
        goto gokiwsqcmkkwkimq;
        iyuiyscqgeeyuggw:
        if (!$aiooqyausygaasqm) {
            goto okowaykucseuwkwa;
        }
        goto csmcekewikymocqy;
        wuqwkggewcusmauu:
        if (!$aokagokqyuysuksm) {
            goto cqoamosqiimaaiqa;
        }
        goto aqueeyiaoekcmqac;
        dsqoacgyuawacuwu:
        return $iwywmkygwewiamwm;
        goto maocyeeeecsocswc;
        aqueeyiaoekcmqac:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto wosegmwqcksaemkg;
        wosegmwqcksaemkg:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\x64\157\x77\156\x6c\x6f\141\144\57{$ymacoouqwcqwwagu}\x2f";
        goto isymggoseycccwew;
        csmcekewikymocqy:
        $aokagokqyuysuksm = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm);
        goto wuqwkggewcusmauu;
        gokiwsqcmkkwkimq:
        okowaykucseuwkwa:
        goto dsqoacgyuawacuwu;
        maocyeeeecsocswc:
    }
    
    public static function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int
    {
        goto ukommkeiukekcgma;
        ukommkeiukekcgma:
        $oiegiwogmwmawkeo = 0;
        goto ekeuymuiemykseqq;
        cymuyggaggcuccam:
        return $oiegiwogmwmawkeo;
        goto uougqksswaquemag;
        ekeuymuiemykseqq:
        try {
            goto ggekiiiaukmmqwos;
            ggekiiiaukmmqwos:
            $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS));
            goto scoeukeacygcksek;
            scoeukeacygcksek:
            foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
                
                $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac();
                oueaiaquokwususi:
            }
            goto gisqqagakwuqqwmu;
            gisqqagakwuqqwmu:
            mieskyceqaogywui:
            goto oyoemceiucoymamk;
            oyoemceiucoymamk:
        } catch (Exception $iewosgggaueeyymg) {
            
        }
        goto cymuyggaggcuccam;
        uougqksswaquemag:
    }
    
    public static function qmgqwkwkuqaguewu($qogsmwakwacwqogk, $uusmaiomayssaecw = '')
    {
        $uqeyuwmcygawucoc = wp_check_filetype($qogsmwakwacwqogk);
        return ManipulateArray::get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc);
    }
    
    public static function ikeooymesgsuggoe($iuomscuiswckwcoe = false)
    {
        goto ywowsisqociesyoc;
        siomkcccqkcwgaqu:
        return $qkkaqsuiooeayqeu;
        goto oqmisuskgecyaawk;
        acyogacouuiocoak:
        cmiammcmeegquuus:
        goto geueeskaygegaoey;
        qmkeeewoecwwqiqe:
        $qkkaqsuiooeayqeu = null;
        goto acyogacouuiocoak;
        sswckucqiaiaoqwm:
        if (!$iuomscuiswckwcoe) {
            goto cmiammcmeegquuus;
        }
        goto qmkeeewoecwwqiqe;
        ywowsisqociesyoc:
        static $qkkaqsuiooeayqeu = null;
        goto sswckucqiaiaoqwm;
        gkqyyayiqmugsyaa:
        muiyqmkywcmyuscg:
        goto siomkcccqkcwgaqu;
        geueeskaygegaoey:
        if (!is_null($qkkaqsuiooeayqeu)) {
            goto muiyqmkywcmyuscg;
        }
        goto myaiyaaageakqmmo;
        myaiyaaageakqmmo:
        $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134";
        goto gkqyyayiqmugsyaa;
        oqmisuskgecyaawk:
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
        goto eykyqqceouqecaay;
        ocsucmwqukqsuysa:
        $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu();
        goto aagsqmuwcceoekiy;
        eykyqqceouqecaay:
        $eouekqmooogkoqoo = "\57\x5c\163\52\x23\x20\x42\105\107\x49\116\40{$ymqmyyeuycgmigyo}\x2e\52\x23\40\105\x4e\x44\40{$ymqmyyeuycgmigyo}\134\163\52\77\57\151\163\x55";
        goto ygaquwoyiuyeicse;
        eesmuemgcicqwqks:
        if (!is_callable($kgcswwyywoscuqqs)) {
            goto auwaqagiqgaaokay;
        }
        goto umyagoaugskqauwe;
        aosoeekeggowekyq:
        if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) {
            goto skcqayaekwqwqaog;
        }
        goto gumwgoyaeiyuycyu;
        kosawesakkoyqqsc:
        $iswcokucwmiosiaq = sprintf(__("\124\150\x65\x20\56\x68\164\x61\x63\143\x65\163\x73\x20\146\151\x6c\145\40\x28\45\163\51\x20\x63\x6f\x75\x6c\x64\x20\156\157\x74\40\x62\145\x20\145\144\x69\164\145\x64\56\40\x43\x68\145\x63\x6b\x20\151\x66\40\x74\x68\x65\40\x66\151\x6c\x65\40\x68\x61\x73\x20\x77\162\x69\164\145\40\160\x65\162\x6d\x69\x73\163\x69\157\156\x73\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum, "\157\160\x74\x2d\167\x72\x69\164\145\55\150\164\141\143\143\x65\163\163");
        goto wgyoiyqiuquismae;
        ogiwiuueswweceyk:
        goto magqgeesoiimssqm;
        goto oesqsgmommuakocy;
        imksuqmseeecckcm:
        auwaqagiqgaaokay:
        goto risykcskaqqgcggo;
        ocamuiagiuuuweei:
        yegwcckcwuwoiyay:
        goto uaiyoskyqyokucku;
        ygaquwoyiuyeicse:
        $ksaameoqigiaoigg = false;
        goto oeqeaumoegmcqggu;
        wgyoiyqiuquismae:
        magqgeesoiimssqm:
        goto ocamuiagiuuuweei;
        gcmawmaiimmygwuw:
        aoccksmyyggqkcky:
        goto qqkwqsscgyeooigo;
        qmecmukycucewmuc:
        $iswcokucwmiosiaq = "{$esaqeawoigqgagum}\x20\x69\163\x20\156\x6f\x74\40\162\x65\x61\x64\x61\142\154\145\56";
        goto eqcgikyyuauqeusk;
        oesqsgmommuakocy:
        oqguaiwgeucmkcom:
        goto kosawesakkoyqqsc;
        aagsqmuwcceoekiy:
        if ($iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) {
            goto gquswkgymisikkei;
        }
        goto qmecmukycucewmuc;
        uaiyoskyqyokucku:
        eaicaiacqyiciycw:
        goto qqaqeaoeosamukik;
        qqkwqsscgyeooigo:
        return $ksaameoqigiaoigg;
        goto kmgkqcqquaqqciqq;
        kyeimqaqesssikke:
        $ksaameoqigiaoigg = true;
        goto ogiwiuueswweceyk;
        eqcgikyyuauqeusk:
        goto aoccksmyyggqkcky;
        goto icweksgaqeuyayga;
        oeqeaumoegmcqggu:
        $esaqeawoigqgagum = self::wayeasoyaomiwwmc() . "\56\150\x74\x61\143\143\x65\163\x73";
        goto ocsucmwqukqsuysa;
        cwmwawskgukouegg:
        skcqayaekwqwqaog:
        goto gcmawmaiimmygwuw;
        ouuqsaagueaqycca:
        if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) {
            goto oqguaiwgeucmkcom;
        }
        goto kyeimqaqesssikke;
        kgeucwqwmecqigmw:
        if (!$iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) {
            goto eaicaiacqyiciycw;
        }
        goto eesmuemgcicqwqks;
        risykcskaqqgcggo:
        if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) {
            goto yegwcckcwuwoiyay;
        }
        goto ouuqsaagueaqycca;
        gumwgoyaeiyuycyu:
        global $is_apache;
        goto mokwauoickaioaye;
        qqaqeaoeosamukik:
        qgecoqswyiuaemaa:
        goto cwmwawskgukouegg;
        mqksmeugmqqymwyq:
        $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto aosoeekeggowekyq;
        umyagoaugskqauwe:
        $kgcswwyywoscuqqs = call_user_func($kgcswwyywoscuqqs);
        goto imksuqmseeecckcm;
        mokwauoickaioaye:
        if (!$is_apache) {
            goto qgecoqswyiuaemaa;
        }
        goto kgeucwqwmecqigmw;
        icweksgaqeuyayga:
        gquswkgymisikkei:
        goto mqksmeugmqqymwyq;
        kmgkqcqquaqqciqq:
    }
    
    public static function usoyisqwsqsegiam(?string $migiiksoiymissge)
    {
        goto gsiccicikauwmmie;
        imuggoqgiugiyyms:
        $ymqmyyeuycgmigyo = str_replace(["\x2e\x2e", "\45"], '', str_replace("\x2f\x2f", "\57", $ymqmyyeuycgmigyo));
        goto wkkyyosuiiesusyy;
        igqcisomycuoeymm:
        aqoggmcwaocwqmma:
        goto ocqggiokqycoqmmu;
        oyiiyksykcgcagus:
        goto aqoggmcwaocwqmma;
        goto aosgwsogkogssquu;
        kguoeaummyeuqwco:
        goto wmwggwqewsaqwewq;
        goto euogucuegesyqyyk;
        smokemkeeuyeamye:
        aigsykmqeyesokek:
        goto eeqooyucsqoakgmw;
        ekgaaqmmaescmsak:
        if (preg_match("\140\136\x2f\50\x5b\x5e\57\x5d\x2b\x29\x28\x2f\x2e\x2a\51\x3f\x24\140\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto somgeamsciqieaoy;
        }
        goto aqsqeoiismoaoiky;
        mswesygwomaquqiw:
        $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge);
        goto oyiiyksykcgcagus;
        gcukeaaoomsqkwmg:
        goto muoiywyyogmywgug;
        goto smokemkeeuyeamye;
        ywwgekggsmaeswyq:
        if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) {
            goto yagkqyieuqkwkkak;
        }
        goto mswesygwomaquqiw;
        eswgaqweugauecaq:
        wmwggwqewsaqwewq:
        goto gcukeaaoomsqkwmg;
        goywyqwiewckiomw:
        if (preg_match("\x60\136\50\150\164\x74\160\x73\77\x3a\51\x3f\x2f\57\x28\x5b\136\57\x5d\x2b\x29\50\57\56\x2a\51\x3f\x24\x60\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto aigsykmqeyesokek;
        }
        goto ekgaaqmmaescmsak;
        eeqooyucsqoakgmw:
        $xeciwimgioieayek = isset($meyiiwcswqmuggyg[3]) ? $meyiiwcswqmuggyg[3] : '';
        goto wmgaeiusimsuaeiu;
        wkkyyosuiiesusyy:
        return $ymqmyyeuycgmigyo;
        goto emwyayayykqeaomu;
        ocqggiokqycoqmmu:
        $xeciwimgioieayek = ManipulateString::quuwkeiwesaoqwom(["\x2e\56", "\134", "\x69\156\144\145\x78\x2e\x70\150\x70"], preg_replace("\57\133\x20\x3c\x3e\47\x5c\42\134\162\134\156\134\164\134\x28\134\x29\135\x2f", '', preg_replace("\57\x28\134\x3f\x2e\x2a\51\x3f\50\43\x2e\x2a\51\77\44\57", '', $xeciwimgioieayek)));
        goto scooqcccqwoackku;
        aosgwsogkogssquu:
        yagkqyieuqkwkkak:
        goto goywyqwiewckiomw;
        aqsqeoiismoaoiky:
        $xeciwimgioieayek = '';
        goto kguoeaummyeuqwco;
        wmgaeiusimsuaeiu:
        muoiywyyogmywgug:
        goto igqcisomycuoeymm;
        gsiccicikauwmmie:
        $cgmkimaosyyuqeyg = trailingslashit(site_url());
        goto jceqycsmkusyoowc;
        scooqcccqwoackku:
        $ykqmwuwqiskkmwuy = (string) parse_url(get_option("\x68\157\155\x65"), PHP_URL_HOST);
        goto wmkceagokqacmiwy;
        awiquiscemosoioe:
        $xeciwimgioieayek = $migiiksoiymissge;
        goto eswgaqweugauecaq;
        euogucuegesyqyyk:
        somgeamsciqieaoy:
        goto awiquiscemosoioe;
        jceqycsmkusyoowc:
        $migiiksoiymissge = trailingslashit($migiiksoiymissge);
        goto ywwgekggsmaeswyq;
        wmkceagokqacmiwy:
        
        $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\x3a\56\x2a\44\57", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek;
        goto imuggoqgiugiyyms;
        emwyayayykqeaomu:
    }
    
    public static function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, $iggwcmkgmicmouyu = true)
    {
        goto iisqqoaayqqqucai;
        iisqqoaayqqqucai:
        $ksaameoqigiaoigg = false;
        goto wiwqmuwgswwgcgwq;
        yisaacgkisqssack:
        $ksaameoqigiaoigg = $mkomwsiykqigmqca;
        goto aygqokkmmumaqmei;
        aygqokkmmumaqmei:
        kkyyicgmsyyyseko:
        goto ikauicmsakmoqusg;
        wiwqmuwgswwgcgwq:
        if (!(self::wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $mkomwsiykqigmqca && $iggwcmkgmicmouyu && Filesystem::symcgieuakksimmu()->oquguuiseiwkawkw($mkomwsiykqigmqca))) {
            goto kkyyicgmsyyyseko;
        }
        goto yisaacgkisqssack;
        ikauicmsakmoqusg:
        return $ksaameoqigiaoigg;
        goto weyoyumiwmwougco;
        weyoyumiwmwougco:
    }
    
    public static function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR)
    {
        goto ewkcysiiwmycaecc;
        sqqosuucouosesoe:
        
        $emukumgmosiqkmyi = preg_replace("\43\x2f\134\x2e\x28\77\x3d\57\51\174\x5e\x5c\x2e\x2f\174\x5c\56\x2f\x24\43", '', $emukumgmosiqkmyi);
        goto wysmgisokmgyaukg;
        qyqaskiyiewkcqog:
        goto kkwsccmgsgogsayc;
        goto ocawiugcmcgyiuqy;
        eioqwkagqyekiogk:
        if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) {
            goto gsegyaaokkacccas;
        }
        goto aswigywgqmqqyaks;
        ewkcysiiwmycaecc:
        $emukumgmosiqkmyi = null;
        goto aimwyouyuaasmcsy;
        qmugicuuomqociko:
        kkwsccmgsgogsayc:
        goto eioqwkagqyekiogk;
        qqcgoykmgigawaue:
        return $emukumgmosiqkmyi;
        goto mosmuqisqgakqaku;
        aimwyouyuaasmcsy:
        if (!$mkomwsiykqigmqca) {
            goto kaksiweaiuugqeio;
        }
        goto wuyoocqaysogmcsa;
        wysmgisokmgyaukg:
        
        $ucccueqywigcukcc = "\x23\134\57\x2a\x5b\x5e\57\x5c\x2e\x5d\53\57\x5c\56\134\x2e\43\125\165";
        goto qmugicuuomqociko;
        aswigywgqmqqyaks:
        $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi);
        goto qyqaskiyiewkcqog;
        yuscoeckmsicamcy:
        $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu);
        goto iquggikocsikyqcu;
        iiceausgsgcgseiu:
        wkoaouywgckiigoa:
        goto yuscoeckmsicamcy;
        wuyoocqaysogmcsa:
        
        $emukumgmosiqkmyi = preg_replace("\x23\134\160\x7b\x43\x7d\53\x7c\136\134\x2e\x2f\43\165", '', $mkomwsiykqigmqca);
        goto sqqosuucouosesoe;
        sukwuguiwokwokoa:
        if (!preg_match("\43\x2f\x5c\x2e\x7b\62\175\174\x5c\56\x7b\62\175\57\43", $emukumgmosiqkmyi)) {
            goto wkoaouywgckiigoa;
        }
        goto ukwyoqwawqemgaou;
        iquggikocsikyqcu:
        kaksiweaiuugqeio:
        goto qqcgoykmgigawaue;
        ukwyoqwawqemgaou:
        throw new LogicException("\x50\x61\x74\x68\40\x69\x73\x20\157\165\164\163\x69\x64\x65\x20\x6f\146\40\x74\150\145\x20\x64\x65\x66\x69\x6e\x65\x64\x20\162\157\157\x74\54\40\160\x61\x74\150\72\40\133" . $mkomwsiykqigmqca . "\135\54\x20\162\x65\163\157\x6c\x76\x65\x64\x3a\40\133" . $emukumgmosiqkmyi . "\135");
        goto iiceausgsgcgseiu;
        ocawiugcmcgyiuqy:
        gsegyaaokkacccas:
        goto sukwuguiwokwokoa;
        mosmuqisqgakqaku:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        gumaasmcagyskwuo:
        
        $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot();
        goto sgscymyaoiiomuey;
        ymgciqyiaoeackyq:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto uwuaawwasggkossk;
        }
        goto gumaasmcagyskwuo;
        sgscymyaoiiomuey:
        uwuaawwasggkossk:
        goto wcaaskeywmuimuuc;
        yuamwcksmgkyaayu:
        $qkuqsuugayciskek = false;
        goto ymgciqyiaoeackyq;
        wcaaskeywmuimuuc:
        return $qkuqsuugayciskek;
        goto aeqkmkymmqiwyaoc;
        aeqkmkymmqiwyaoc:
    }
    
    public static function mecmkmogggamegic($mcowwqgmkuemoumu) : bool
    {
        goto gagsysekmycceycs;
        umsuiwswwywqccec:
        qqyeockoeuowkook:
        goto aqwimyousskkmmys;
        coweqcyciwygumgw:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto qqyeockoeuowkook;
        }
        goto acqsqiuqaouaccyg;
        acqsqiuqaouaccyg:
        
        $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile();
        goto umsuiwswwywqccec;
        aqwimyousskkmmys:
        return $mecmkmogggamegic;
        goto ogaeyaaussqcqwcq;
        gagsysekmycceycs:
        $mecmkmogggamegic = false;
        goto coweqcyciwygumgw;
        ogaeyaaussqcqwcq:
    }
    
    public static function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string
    {
        goto wgscommumawcwgeq;
        ooaokssiecgqamyw:
        return $yooeiwgeaoeyusyy;
        goto messaqosuqcuimms;
        wqqgkukmcmmiwwsg:
        
        $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname();
        goto ieemimcomkyeykae;
        ieemimcomkyeykae:
        gikeuuqaaqwesqmg:
        goto ooaokssiecgqamyw;
        wgscommumawcwgeq:
        $yooeiwgeaoeyusyy = null;
        goto kegiaasueigcoucc;
        kegiaasueigcoucc:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto gikeuuqaaqwesqmg;
        }
        goto wqqgkukmcmmiwwsg;
        messaqosuqcuimms:
    }
    
    public static function awosikuiguowiumy($mcowwqgmkuemoumu) : int
    {
        goto oomcumcckcsgkeyg;
        sucwucwgwmusqcuc:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto omckgquqwygqseys;
        }
        goto oueimsmmmimceuai;
        gqkqmiageemgssym:
        return $emqekiqqyiwqigsg;
        goto oueygmwqqkwiqmuw;
        oomcumcckcsgkeyg:
        $emqekiqqyiwqigsg = 0;
        goto sucwucwgwmusqcuc;
        oueimsmmmimceuai:
        
        $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime();
        goto ouaqyykiuuesmaom;
        ouaqyykiuuesmaom:
        omckgquqwygqseys:
        goto gqkqmiageemgssym;
        oueygmwqqkwiqmuw:
    }
    
    public static function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool
    {
        goto smwcsmqwescekeec;
        ymguoykwgqaosgyu:
        wgiiqociegegkcmo:
        goto qqokkuaeeaeaaiok;
        qkwaoikuioasioyg:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto wgiiqociegegkcmo;
        }
        goto icecukasaccaeouo;
        smwcsmqwescekeec:
        $qkuqsuugayciskek = false;
        goto qkwaoikuioasioyg;
        icecukasaccaeouo:
        
        $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir();
        goto ymguoykwgqaosgyu;
        qqokkuaeeaeaaiok:
        return $qkuqsuugayciskek;
        goto eceuioskggsqggkk;
        eceuioskggsqggkk:
    }
    
    public static function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string
    {
        goto ccegeskegokuuqyc;
        cygwuguggaeaqmiy:
        
        $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath();
        goto kwwsqkaskggswock;
        yywyeuokaqsgqgww:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto qsmkswggymakkaic;
        }
        goto cygwuguggaeaqmiy;
        ccegeskegokuuqyc:
        $mkomwsiykqigmqca = null;
        goto yywyeuokaqsgqgww;
        kwwsqkaskggswock:
        qsmkswggymakkaic:
        goto acmoecmaeoycigam;
        acmoecmaeoycigam:
        return $mkomwsiykqigmqca;
        goto uommseoowiuemkwk;
        uommseoowiuemkwk:
    }
    
    public static function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string
    {
        goto swmouimoiymygayk;
        waakiqmaycwwqaeg:
        
        $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename();
        goto eeeuamsiyssgwkyo;
        sescmkcssisuskoi:
        return $wkcwykowmmmwioqs;
        goto kogcsisuicgkaesc;
        eeeuamsiyssgwkyo:
        gaywiqceooiguqea:
        goto sescmkcssisuskoi;
        swmouimoiymygayk:
        $wkcwykowmmmwioqs = null;
        goto wymaswukwyouumeq;
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
        gyuyiouiquoaouim:
        return $yucgcsieomwqgwws;
        goto yyumokoqqeiwcewq;
        geaeocmguomaqusc:
        $yucgcsieomwqgwws = null;
        goto ssguwqmoegqekmsc;
        qyamaiwggysquoqs:
        
        $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension();
        goto esgwwakgieqcwaww;
        esgwwakgieqcwaww:
        akeeueokwsssimaw:
        goto gyuyiouiquoaouim;
        ssguwqmoegqekmsc:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto akeeueokwsssimaw;
        }
        goto qyamaiwggysquoqs;
        yyumokoqqeiwcewq:
    }
    
    public static function lausiwamsokkqguo($owyiccmocukoumyy)
    {
        goto kmmyoqogqymmuyys;
        esmeekicsmoyumia:
        $ksaameoqigiaoigg = DecoratorFile::qsyguaycgacaggsu($qogsmwakwacwqogk, ["\x74\145\163\x74\137\146\x6f\x72\155" => false]);
        goto yyuiuoisegweicus;
        syqcmauqkosgmcgc:
        $esaqeawoigqgagum = ManipulateArray::get($ksaameoqigiaoigg, "\146\151\154\145");
        goto mcqiycyaekmuwcoc;
        kmmyoqogqymmuyys:
        
        $mqqeykegekqaumeq = DecoratorFile::oemywwmmmiywiqai();
        goto iqkoueycskiymkma;
        gaeawesmcgqyqeia:
        $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm);
        goto qumggamakkcwogeg;
        iqkoueycskiymkma:
        $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\x70\x61\164\150"]) . DIRECTORY_SEPARATOR;
        goto saosqywwkuqysqgu;
        isiokmykwmgusmik:
        $mcqieaigyeeyaksm = ManipulateArray::get(explode("\54", $owyiccmocukoumyy), 1, $owyiccmocukoumyy);
        goto ussmaqukmmwaigcy;
        ussmaqukmmwaigcy:
        $mcqieaigyeeyaksm = str_replace("\40", "\53", $mcqieaigyeeyaksm);
        goto gaeawesmcgqyqeia;
        mqewgssacawiesua:
        $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}";
        goto memuioceggyeugoe;
        qumggamakkcwogeg:
        $cqiuiecmyyqkgeoa = ManipulateArray::get($yyimiwcuegayoskq, "\155\x69\155\145");
        goto ggcamcsikeggkkeg;
        uwioceoekowwawuu:
        gqmwuucgesayqego:
        goto cycqkkuiywsyeeum;
        cycqkkuiywsyeeum:
        return $ksaameoqigiaoigg;
        goto aeikksawqyowqasq;
        wcosqmqysmksggcm:
        $ksaameoqigiaoigg = DecoratorAttachment::insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\x70\141\164\150"]}\x2f{$qgoggukmyiemssaa}");
        goto mgywkkwakokscomi;
        memuioceggyeugoe:
        
        Filesystem::symcgieuakksimmu()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu);
        goto caemyqosyooeykya;
        yyuiuoisegweicus:
        if ($iswcokucwmiosiaq = ManipulateArray::get($ksaameoqigiaoigg, "\x65\x72\162\x6f\162")) {
            goto cweyecwwsaogsose;
        }
        goto syqcmauqkosgmcgc;
        saosqywwkuqysqgu:
        $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy);
        goto isiokmykwmgusmik;
        mgywkkwakokscomi:
        goto gqmwuucgesayqego;
        goto ewcusawuygquwqeg;
        ayewgikkscwoecua:
        $mckmqeqaekwkwems = "\x74\145\x6d\160\x2d{$qgoggukmyiemssaa}";
        goto mqewgssacawiesua;
        mcqiycyaekmuwcoc:
        $aiooqyausygaasqm = ["\x67\165\x69\x64" => $mqqeykegekqaumeq["\x75\x72\x6c"] . "\x2f" . basename($esaqeawoigqgagum), "\x70\157\x73\164\137\x74\151\164\x6c\145" => preg_replace("\57\x5c\56\x5b\136\x2e\x5d\53\x24\57", '', basename($esaqeawoigqgagum)), "\160\x6f\x73\x74\137\163\164\141\164\165\x73" => "\x69\x6e\150\145\x72\151\164", "\x70\x6f\163\164\x5f\x63\157\156\x74\x65\156\164" => '', "\x70\157\x73\x74\137\x6d\151\x6d\145\137\x74\x79\160\145" => ManipulateArray::get($ksaameoqigiaoigg, "\x74\x79\160\145", $cqiuiecmyyqkgeoa)];
        goto wcosqmqysmksggcm;
        ewcusawuygquwqeg:
        cweyecwwsaogsose:
        goto eeuuyygswoueugwm;
        ggcamcsikeggkkeg:
        $qgoggukmyiemssaa = md5(microtime()) . str_replace("\x2f", "\56", $cqiuiecmyyqkgeoa);
        goto ayewgikkscwoecua;
        eeuuyygswoueugwm:
        $ksaameoqigiaoigg = new WP_Error("\165\x70\x6c\x6f\x61\144\137\146\x69\154\145\x5f\x65\x72\x72\x6f\x72", $iswcokucwmiosiaq, ["\x73\164\141\164\x75\x73" => 401]);
        goto uwioceoekowwawuu;
        caemyqosyooeykya:
        $qogsmwakwacwqogk = ["\x6e\x61\x6d\x65" => $qgoggukmyiemssaa, "\x73\x69\172\145" => filesize($yoisseswouogeswg), "\164\x79\160\145" => $cqiuiecmyyqkgeoa, "\145\x72\162\x6f\162" => '', "\x74\x6d\160\x5f\x6e\x61\155\x65" => $yoisseswouogeswg];
        goto esmeekicsmoyumia;
        aeikksawqyowqasq:
    }
    
    public static function wayeasoyaomiwwmc() : ?string
    {
        if (!function_exists("\x67\145\x74\137\x68\157\155\x65\x5f\160\141\164\150")) {
            require_once ABSPATH . "\x77\160\55\x61\144\155\x69\156\57\x69\156\143\154\x75\144\145\x73\x2f\x66\151\x6c\x65\56\160\x68\160";
        }
        return get_home_path();
    }
    
    public static function eyqooeqgoyokqeoq($aiieyweysaukqemc)
    {
        goto ukkosocmcsgoyoqk;
        ewygwsaaggyeqgou:
        try {
            goto mygoeeeakcqcckey;
            uqowisomaymekaqk:
            uaowykkiuuygowuk:
            goto ggoccuougaayoawu;
            mcymkuaooaywgaqk:
            throw new Exception("{$aiieyweysaukqemc}\40\164\171\160\145\x20\151\x73\x20\x6e\x6f\164\40\x76\x61\154\151\144\40\157\x72\x20\156\141\x6d\x65\x73\160\x61\x63\x65\x20\156\157\x74\x20\145\170\151\163\x74\56");
            goto qicowuckymwwwkua;
            ggoccuougaayoawu:
            $oqkmoekaagukcwia = new \ReflectionClass($aiieyweysaukqemc);
            goto igsumksgcomuyyie;
            igsumksgcomuyyie:
            $esaqeawoigqgagum = $oqkmoekaagukcwia->aueqceykakekkqiw();
            goto ycammcyquswuysew;
            ycammcyquswuysew:
            ymkwuiqgccecsouc:
            goto sakouuiukiouowiu;
            qicowuckymwwwkua:
            goto ymkwuiqgccecsouc;
            goto uqowisomaymekaqk;
            mygoeeeakcqcckey:
            if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) {
                goto uaowykkiuuygowuk;
            }
            goto mcymkuaooaywgaqk;
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
        ockqoeuqcwgyqwca:
        $smaiamkswqkisawm = null;
        goto woeykqsoceymuaus;
        oweaacksoisqumyk:
        if (!$esaqeawoigqgagum) {
            goto yswqswoyackicqoq;
        }
        goto smsweaqgcukcumoe;
        smsweaqgcukcumoe:
        $smaiamkswqkisawm = basename($esaqeawoigqgagum);
        goto yqeceucomeekaiqq;
        oiaoakaqgkqqsmsm:
        return $smaiamkswqkisawm;
        goto tkqwawuyoceqgiuw;
        woeykqsoceymuaus:
        $esaqeawoigqgagum = self::eyqooeqgoyokqeoq($egkyssmuqcwaciya);
        goto oweaacksoisqumyk;
        yqeceucomeekaiqq:
        yswqswoyackicqoq:
        goto oiaoakaqgkqqsmsm;
        tkqwawuyoceqgiuw:
    }
    
    public static function iygwwosmmgmouoyc($mkomwsiykqigmqca)
    {
        return realpath("{$mkomwsiykqigmqca}\57\x2e\x2e\x2f\56\56\57\x2e\56\57\x2e\x2e\57");
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto wsiueiimkueqgwmm;
        aqueeyiaoekcmqac:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto wosegmwqcksaemkg;
        gokiwsqcmkkwkimq:
        okowaykucseuwkwa:
        goto dsqoacgyuawacuwu;
        iyuiyscqgeeyuggw:
        if (!$aiooqyausygaasqm) {
            goto okowaykucseuwkwa;
        }
        goto csmcekewikymocqy;
        isymggoseycccwew:
        cqoamosqiimaaiqa:
        goto gokiwsqcmkkwkimq;
        csmcekewikymocqy:
        $aokagokqyuysuksm = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm);
        goto wuqwkggewcusmauu;
        wosegmwqcksaemkg:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\x64\157\x77\x6e\x6c\157\141\144\x2f{$ymacoouqwcqwwagu}\57";
        goto isymggoseycccwew;
        dsqoacgyuawacuwu:
        return $iwywmkygwewiamwm;
        goto maocyeeeecsocswc;
        wuqwkggewcusmauu:
        if (!$aokagokqyuysuksm) {
            goto cqoamosqiimaaiqa;
        }
        goto aqueeyiaoekcmqac;
        wsiueiimkueqgwmm:
        $iwywmkygwewiamwm = false;
        goto iyuiyscqgeeyuggw;
        maocyeeeecsocswc:
    }
    
    public static function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int
    {
        goto ukommkeiukekcgma;
        ukommkeiukekcgma:
        $oiegiwogmwmawkeo = 0;
        goto ekeuymuiemykseqq;
        ekeuymuiemykseqq:
        try {
            goto ggekiiiaukmmqwos;
            gisqqagakwuqqwmu:
            mieskyceqaogywui:
            goto oyoemceiucoymamk;
            scoeukeacygcksek:
            foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
                
                $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac();
                oueaiaquokwususi:
            }
            goto gisqqagakwuqqwmu;
            ggekiiiaukmmqwos:
            $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS));
            goto scoeukeacygcksek;
            oyoemceiucoymamk:
        } catch (Exception $iewosgggaueeyymg) {
            
        }
        goto cymuyggaggcuccam;
        cymuyggaggcuccam:
        return $oiegiwogmwmawkeo;
        goto uougqksswaquemag;
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
        geueeskaygegaoey:
        if (!is_null($qkkaqsuiooeayqeu)) {
            goto muiyqmkywcmyuscg;
        }
        goto myaiyaaageakqmmo;
        acyogacouuiocoak:
        cmiammcmeegquuus:
        goto geueeskaygegaoey;
        myaiyaaageakqmmo:
        $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134";
        goto gkqyyayiqmugsyaa;
        qmkeeewoecwwqiqe:
        $qkkaqsuiooeayqeu = null;
        goto acyogacouuiocoak;
        gkqyyayiqmugsyaa:
        muiyqmkywcmyuscg:
        goto siomkcccqkcwgaqu;
        ywowsisqociesyoc:
        static $qkkaqsuiooeayqeu = null;
        goto sswckucqiaiaoqwm;
        sswckucqiaiaoqwm:
        if (!$iuomscuiswckwcoe) {
            goto cmiammcmeegquuus;
        }
        goto qmkeeewoecwwqiqe;
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
        kosawesakkoyqqsc:
        $iswcokucwmiosiaq = sprintf(__("\124\150\x65\40\x2e\x68\x74\141\143\143\x65\163\163\40\x66\x69\154\145\40\x28\45\163\x29\x20\143\157\x75\x6c\x64\x20\x6e\157\164\x20\142\x65\40\x65\144\x69\164\145\144\x2e\x20\103\150\x65\x63\153\x20\x69\x66\x20\x74\150\145\40\146\x69\x6c\145\40\150\x61\x73\40\167\162\151\x74\145\x20\160\x65\162\155\x69\x73\163\151\x6f\x6e\x73\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum, "\x6f\x70\x74\55\167\162\x69\x74\x65\x2d\150\164\141\143\143\x65\163\163");
        goto wgyoiyqiuquismae;
        mokwauoickaioaye:
        if (!$is_apache) {
            goto qgecoqswyiuaemaa;
        }
        goto kgeucwqwmecqigmw;
        ocsucmwqukqsuysa:
        $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu();
        goto aagsqmuwcceoekiy;
        aosoeekeggowekyq:
        if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) {
            goto skcqayaekwqwqaog;
        }
        goto gumwgoyaeiyuycyu;
        qqaqeaoeosamukik:
        qgecoqswyiuaemaa:
        goto cwmwawskgukouegg;
        kyeimqaqesssikke:
        $ksaameoqigiaoigg = true;
        goto ogiwiuueswweceyk;
        ygaquwoyiuyeicse:
        $ksaameoqigiaoigg = false;
        goto oeqeaumoegmcqggu;
        gumwgoyaeiyuycyu:
        global $is_apache;
        goto mokwauoickaioaye;
        cwmwawskgukouegg:
        skcqayaekwqwqaog:
        goto gcmawmaiimmygwuw;
        oeqeaumoegmcqggu:
        $esaqeawoigqgagum = self::wayeasoyaomiwwmc() . "\56\x68\164\141\143\x63\x65\x73\x73";
        goto ocsucmwqukqsuysa;
        kgeucwqwmecqigmw:
        if (!$iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) {
            goto eaicaiacqyiciycw;
        }
        goto eesmuemgcicqwqks;
        eykyqqceouqecaay:
        $eouekqmooogkoqoo = "\57\134\163\52\x23\x20\102\x45\107\111\116\x20{$ymqmyyeuycgmigyo}\x2e\52\x23\40\105\116\x44\x20{$ymqmyyeuycgmigyo}\x5c\163\52\x3f\x2f\x69\x73\125";
        goto ygaquwoyiuyeicse;
        umyagoaugskqauwe:
        $kgcswwyywoscuqqs = call_user_func($kgcswwyywoscuqqs);
        goto imksuqmseeecckcm;
        imksuqmseeecckcm:
        auwaqagiqgaaokay:
        goto risykcskaqqgcggo;
        icweksgaqeuyayga:
        gquswkgymisikkei:
        goto mqksmeugmqqymwyq;
        mqksmeugmqqymwyq:
        $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto aosoeekeggowekyq;
        eqcgikyyuauqeusk:
        goto aoccksmyyggqkcky;
        goto icweksgaqeuyayga;
        ocamuiagiuuuweei:
        yegwcckcwuwoiyay:
        goto uaiyoskyqyokucku;
        risykcskaqqgcggo:
        if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) {
            goto yegwcckcwuwoiyay;
        }
        goto ouuqsaagueaqycca;
        ogiwiuueswweceyk:
        goto magqgeesoiimssqm;
        goto oesqsgmommuakocy;
        qqkwqsscgyeooigo:
        return $ksaameoqigiaoigg;
        goto kmgkqcqquaqqciqq;
        eesmuemgcicqwqks:
        if (!is_callable($kgcswwyywoscuqqs)) {
            goto auwaqagiqgaaokay;
        }
        goto umyagoaugskqauwe;
        uaiyoskyqyokucku:
        eaicaiacqyiciycw:
        goto qqaqeaoeosamukik;
        gcmawmaiimmygwuw:
        aoccksmyyggqkcky:
        goto qqkwqsscgyeooigo;
        ouuqsaagueaqycca:
        if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) {
            goto oqguaiwgeucmkcom;
        }
        goto kyeimqaqesssikke;
        aagsqmuwcceoekiy:
        if ($iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) {
            goto gquswkgymisikkei;
        }
        goto qmecmukycucewmuc;
        qmecmukycucewmuc:
        $iswcokucwmiosiaq = "{$esaqeawoigqgagum}\40\151\x73\x20\156\x6f\164\40\x72\145\x61\x64\x61\142\154\145\x2e";
        goto eqcgikyyuauqeusk;
        oesqsgmommuakocy:
        oqguaiwgeucmkcom:
        goto kosawesakkoyqqsc;
        wgyoiyqiuquismae:
        magqgeesoiimssqm:
        goto ocamuiagiuuuweei;
        kmgkqcqquaqqciqq:
    }
    
    public static function usoyisqwsqsegiam(?string $migiiksoiymissge)
    {
        goto gsiccicikauwmmie;
        ocqggiokqycoqmmu:
        $xeciwimgioieayek = ManipulateString::quuwkeiwesaoqwom(["\56\x2e", "\134", "\x69\156\144\x65\170\56\160\150\160"], preg_replace("\57\133\x20\74\x3e\47\134\42\134\162\134\x6e\x5c\x74\134\x28\x5c\x29\135\x2f", '', preg_replace("\57\50\x5c\x3f\x2e\52\x29\x3f\50\x23\56\52\x29\x3f\x24\x2f", '', $xeciwimgioieayek)));
        goto scooqcccqwoackku;
        imuggoqgiugiyyms:
        $ymqmyyeuycgmigyo = str_replace(["\56\56", "\x25"], '', str_replace("\57\x2f", "\57", $ymqmyyeuycgmigyo));
        goto wkkyyosuiiesusyy;
        oyiiyksykcgcagus:
        goto aqoggmcwaocwqmma;
        goto aosgwsogkogssquu;
        euogucuegesyqyyk:
        somgeamsciqieaoy:
        goto awiquiscemosoioe;
        igqcisomycuoeymm:
        aqoggmcwaocwqmma:
        goto ocqggiokqycoqmmu;
        ekgaaqmmaescmsak:
        if (preg_match("\140\136\57\x28\133\x5e\57\x5d\53\51\x28\x2f\56\52\51\x3f\44\x60\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto somgeamsciqieaoy;
        }
        goto aqsqeoiismoaoiky;
        wkkyyosuiiesusyy:
        return $ymqmyyeuycgmigyo;
        goto emwyayayykqeaomu;
        ywwgekggsmaeswyq:
        if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) {
            goto yagkqyieuqkwkkak;
        }
        goto mswesygwomaquqiw;
        smokemkeeuyeamye:
        aigsykmqeyesokek:
        goto eeqooyucsqoakgmw;
        eeqooyucsqoakgmw:
        $xeciwimgioieayek = isset($meyiiwcswqmuggyg[3]) ? $meyiiwcswqmuggyg[3] : '';
        goto wmgaeiusimsuaeiu;
        awiquiscemosoioe:
        $xeciwimgioieayek = $migiiksoiymissge;
        goto eswgaqweugauecaq;
        gcukeaaoomsqkwmg:
        goto muoiywyyogmywgug;
        goto smokemkeeuyeamye;
        goywyqwiewckiomw:
        if (preg_match("\140\x5e\x28\150\x74\x74\x70\163\x3f\72\x29\x3f\x2f\x2f\x28\x5b\x5e\57\x5d\53\x29\50\x2f\56\52\51\77\x24\140\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto aigsykmqeyesokek;
        }
        goto ekgaaqmmaescmsak;
        mswesygwomaquqiw:
        $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge);
        goto oyiiyksykcgcagus;
        aqsqeoiismoaoiky:
        $xeciwimgioieayek = '';
        goto kguoeaummyeuqwco;
        kguoeaummyeuqwco:
        goto wmwggwqewsaqwewq;
        goto euogucuegesyqyyk;
        wmkceagokqacmiwy:
        
        $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\x3a\x2e\x2a\x24\57", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek;
        goto imuggoqgiugiyyms;
        eswgaqweugauecaq:
        wmwggwqewsaqwewq:
        goto gcukeaaoomsqkwmg;
        wmgaeiusimsuaeiu:
        muoiywyyogmywgug:
        goto igqcisomycuoeymm;
        scooqcccqwoackku:
        $ykqmwuwqiskkmwuy = (string) parse_url(get_option("\150\157\155\x65"), PHP_URL_HOST);
        goto wmkceagokqacmiwy;
        aosgwsogkogssquu:
        yagkqyieuqkwkkak:
        goto goywyqwiewckiomw;
        gsiccicikauwmmie:
        $cgmkimaosyyuqeyg = trailingslashit(site_url());
        goto jceqycsmkusyoowc;
        jceqycsmkusyoowc:
        $migiiksoiymissge = trailingslashit($migiiksoiymissge);
        goto ywwgekggsmaeswyq;
        emwyayayykqeaomu:
    }
    
    public static function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, $iggwcmkgmicmouyu = true)
    {
        goto iisqqoaayqqqucai;
        yisaacgkisqssack:
        $ksaameoqigiaoigg = $mkomwsiykqigmqca;
        goto aygqokkmmumaqmei;
        aygqokkmmumaqmei:
        kkyyicgmsyyyseko:
        goto ikauicmsakmoqusg;
        ikauicmsakmoqusg:
        return $ksaameoqigiaoigg;
        goto weyoyumiwmwougco;
        wiwqmuwgswwgcgwq:
        if (!(self::wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $mkomwsiykqigmqca && $iggwcmkgmicmouyu && Filesystem::symcgieuakksimmu()->oquguuiseiwkawkw($mkomwsiykqigmqca))) {
            goto kkyyicgmsyyyseko;
        }
        goto yisaacgkisqssack;
        iisqqoaayqqqucai:
        $ksaameoqigiaoigg = false;
        goto wiwqmuwgswwgcgwq;
        weyoyumiwmwougco:
    }
    
    public static function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR)
    {
        goto ewkcysiiwmycaecc;
        ewkcysiiwmycaecc:
        $emukumgmosiqkmyi = null;
        goto aimwyouyuaasmcsy;
        sukwuguiwokwokoa:
        if (!preg_match("\x23\x2f\134\x2e\x7b\62\175\x7c\x5c\56\x7b\62\x7d\57\43", $emukumgmosiqkmyi)) {
            goto wkoaouywgckiigoa;
        }
        goto ukwyoqwawqemgaou;
        ukwyoqwawqemgaou:
        throw new LogicException("\x50\141\x74\x68\x20\x69\x73\x20\x6f\x75\164\x73\x69\x64\x65\40\157\x66\40\164\x68\x65\40\144\x65\146\x69\156\145\144\40\162\157\157\x74\54\40\160\x61\x74\150\x3a\x20\133" . $mkomwsiykqigmqca . "\x5d\54\40\162\x65\163\x6f\154\166\145\144\72\x20\133" . $emukumgmosiqkmyi . "\x5d");
        goto iiceausgsgcgseiu;
        wysmgisokmgyaukg:
        
        $ucccueqywigcukcc = "\43\x5c\57\52\133\x5e\57\134\x2e\135\x2b\x2f\x5c\x2e\134\x2e\x23\125\165";
        goto qmugicuuomqociko;
        aswigywgqmqqyaks:
        $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi);
        goto qyqaskiyiewkcqog;
        iquggikocsikyqcu:
        kaksiweaiuugqeio:
        goto qqcgoykmgigawaue;
        iiceausgsgcgseiu:
        wkoaouywgckiigoa:
        goto yuscoeckmsicamcy;
        eioqwkagqyekiogk:
        if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) {
            goto gsegyaaokkacccas;
        }
        goto aswigywgqmqqyaks;
        wuyoocqaysogmcsa:
        
        $emukumgmosiqkmyi = preg_replace("\x23\x5c\160\173\103\x7d\53\174\x5e\134\56\57\x23\165", '', $mkomwsiykqigmqca);
        goto sqqosuucouosesoe;
        sqqosuucouosesoe:
        
        $emukumgmosiqkmyi = preg_replace("\x23\x2f\134\x2e\50\77\75\x2f\x29\174\x5e\134\x2e\x2f\174\134\56\57\44\43", '', $emukumgmosiqkmyi);
        goto wysmgisokmgyaukg;
        aimwyouyuaasmcsy:
        if (!$mkomwsiykqigmqca) {
            goto kaksiweaiuugqeio;
        }
        goto wuyoocqaysogmcsa;
        yuscoeckmsicamcy:
        $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu);
        goto iquggikocsikyqcu;
        qyqaskiyiewkcqog:
        goto kkwsccmgsgogsayc;
        goto ocawiugcmcgyiuqy;
        ocawiugcmcgyiuqy:
        gsegyaaokkacccas:
        goto sukwuguiwokwokoa;
        qqcgoykmgigawaue:
        return $emukumgmosiqkmyi;
        goto mosmuqisqgakqaku;
        qmugicuuomqociko:
        kkwsccmgsgogsayc:
        goto eioqwkagqyekiogk;
        mosmuqisqgakqaku:
    }
}

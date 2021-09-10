<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        sgscymyaoiiomuey:
        uwuaawwasggkossk:
        goto wcaaskeywmuimuuc;
        yuamwcksmgkyaayu:
        $qkuqsuugayciskek = false;
        goto ymgciqyiaoeackyq;
        ymgciqyiaoeackyq:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto uwuaawwasggkossk;
        }
        goto gumaasmcagyskwuo;
        wcaaskeywmuimuuc:
        return $qkuqsuugayciskek;
        goto aeqkmkymmqiwyaoc;
        aeqkmkymmqiwyaoc:
    }
    
    public static function mecmkmogggamegic($mcowwqgmkuemoumu) : bool
    {
        goto gagsysekmycceycs;
        aqwimyousskkmmys:
        return $mecmkmogggamegic;
        goto ogaeyaaussqcqwcq;
        umsuiwswwywqccec:
        qqyeockoeuowkook:
        goto aqwimyousskkmmys;
        gagsysekmycceycs:
        $mecmkmogggamegic = false;
        goto coweqcyciwygumgw;
        coweqcyciwygumgw:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto qqyeockoeuowkook;
        }
        goto acqsqiuqaouaccyg;
        acqsqiuqaouaccyg:
        
        $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile();
        goto umsuiwswwywqccec;
        ogaeyaaussqcqwcq:
    }
    
    public static function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string
    {
        goto wgscommumawcwgeq;
        wqqgkukmcmmiwwsg:
        
        $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname();
        goto ieemimcomkyeykae;
        ooaokssiecgqamyw:
        return $yooeiwgeaoeyusyy;
        goto messaqosuqcuimms;
        kegiaasueigcoucc:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto gikeuuqaaqwesqmg;
        }
        goto wqqgkukmcmmiwwsg;
        ieemimcomkyeykae:
        gikeuuqaaqwesqmg:
        goto ooaokssiecgqamyw;
        wgscommumawcwgeq:
        $yooeiwgeaoeyusyy = null;
        goto kegiaasueigcoucc;
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
        ouaqyykiuuesmaom:
        omckgquqwygqseys:
        goto gqkqmiageemgssym;
        oueimsmmmimceuai:
        
        $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime();
        goto ouaqyykiuuesmaom;
        gqkqmiageemgssym:
        return $emqekiqqyiwqigsg;
        goto oueygmwqqkwiqmuw;
        oomcumcckcsgkeyg:
        $emqekiqqyiwqigsg = 0;
        goto sucwucwgwmusqcuc;
        oueygmwqqkwiqmuw:
    }
    
    public static function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool
    {
        goto smwcsmqwescekeec;
        icecukasaccaeouo:
        
        $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir();
        goto ymguoykwgqaosgyu;
        qqokkuaeeaeaaiok:
        return $qkuqsuugayciskek;
        goto eceuioskggsqggkk;
        qkwaoikuioasioyg:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto wgiiqociegegkcmo;
        }
        goto icecukasaccaeouo;
        smwcsmqwescekeec:
        $qkuqsuugayciskek = false;
        goto qkwaoikuioasioyg;
        ymguoykwgqaosgyu:
        wgiiqociegegkcmo:
        goto qqokkuaeeaeaaiok;
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
        swmouimoiymygayk:
        $wkcwykowmmmwioqs = null;
        goto wymaswukwyouumeq;
        wymaswukwyouumeq:
        if (!$mcowwqgmkuemoumu instanceof DirectoryIterator) {
            goto gaywiqceooiguqea;
        }
        goto waakiqmaycwwqaeg;
        waakiqmaycwwqaeg:
        
        $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename();
        goto eeeuamsiyssgwkyo;
        eeeuamsiyssgwkyo:
        gaywiqceooiguqea:
        goto sescmkcssisuskoi;
        sescmkcssisuskoi:
        return $wkcwykowmmmwioqs;
        goto kogcsisuicgkaesc;
        kogcsisuicgkaesc:
    }
    
    public static function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string
    {
        goto geaeocmguomaqusc;
        gyuyiouiquoaouim:
        return $yucgcsieomwqgwws;
        goto yyumokoqqeiwcewq;
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
        geaeocmguomaqusc:
        $yucgcsieomwqgwws = null;
        goto ssguwqmoegqekmsc;
        yyumokoqqeiwcewq:
    }
    
    public static function lausiwamsokkqguo($owyiccmocukoumyy)
    {
        goto kmmyoqogqymmuyys;
        iqkoueycskiymkma:
        $usuwmommwquwiiia = str_replace("\57", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\x70\x61\x74\150"]) . DIRECTORY_SEPARATOR;
        goto saosqywwkuqysqgu;
        wcosqmqysmksggcm:
        $ksaameoqigiaoigg = DecoratorAttachment::insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\160\141\x74\150"]}\57{$qgoggukmyiemssaa}");
        goto mgywkkwakokscomi;
        isiokmykwmgusmik:
        $mcqieaigyeeyaksm = ManipulateArray::get(explode("\54", $owyiccmocukoumyy), 1, $owyiccmocukoumyy);
        goto ussmaqukmmwaigcy;
        yyuiuoisegweicus:
        if ($iswcokucwmiosiaq = ManipulateArray::get($ksaameoqigiaoigg, "\x65\x72\162\x6f\x72")) {
            goto cweyecwwsaogsose;
        }
        goto syqcmauqkosgmcgc;
        mqewgssacawiesua:
        $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}";
        goto memuioceggyeugoe;
        uwioceoekowwawuu:
        gqmwuucgesayqego:
        goto cycqkkuiywsyeeum;
        eeuuyygswoueugwm:
        $ksaameoqigiaoigg = new WP_Error("\x75\x70\x6c\157\141\144\x5f\146\151\154\x65\x5f\145\162\162\157\162", $iswcokucwmiosiaq, ["\163\x74\141\x74\x75\163" => 401]);
        goto uwioceoekowwawuu;
        ewcusawuygquwqeg:
        cweyecwwsaogsose:
        goto eeuuyygswoueugwm;
        mgywkkwakokscomi:
        goto gqmwuucgesayqego;
        goto ewcusawuygquwqeg;
        mcqiycyaekmuwcoc:
        $aiooqyausygaasqm = ["\x67\x75\x69\144" => $mqqeykegekqaumeq["\165\162\154"] . "\x2f" . basename($esaqeawoigqgagum), "\160\157\x73\x74\x5f\x74\x69\164\154\x65" => preg_replace("\57\134\56\133\136\56\135\x2b\44\x2f", '', basename($esaqeawoigqgagum)), "\160\x6f\163\x74\137\x73\164\141\x74\165\163" => "\151\x6e\150\x65\x72\151\164", "\x70\157\163\x74\137\143\x6f\x6e\164\145\156\164" => '', "\x70\x6f\163\164\137\x6d\x69\x6d\145\137\x74\171\x70\145" => ManipulateArray::get($ksaameoqigiaoigg, "\x74\x79\x70\145", $cqiuiecmyyqkgeoa)];
        goto wcosqmqysmksggcm;
        memuioceggyeugoe:
        
        Filesystem::symcgieuakksimmu()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu);
        goto caemyqosyooeykya;
        esmeekicsmoyumia:
        $ksaameoqigiaoigg = DecoratorFile::qsyguaycgacaggsu($qogsmwakwacwqogk, ["\164\x65\163\x74\137\x66\157\162\155" => false]);
        goto yyuiuoisegweicus;
        syqcmauqkosgmcgc:
        $esaqeawoigqgagum = ManipulateArray::get($ksaameoqigiaoigg, "\x66\x69\x6c\x65");
        goto mcqiycyaekmuwcoc;
        ggcamcsikeggkkeg:
        $qgoggukmyiemssaa = md5(microtime()) . str_replace("\57", "\56", $cqiuiecmyyqkgeoa);
        goto ayewgikkscwoecua;
        saosqywwkuqysqgu:
        $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy);
        goto isiokmykwmgusmik;
        cycqkkuiywsyeeum:
        return $ksaameoqigiaoigg;
        goto aeikksawqyowqasq;
        caemyqosyooeykya:
        $qogsmwakwacwqogk = ["\x6e\141\155\x65" => $qgoggukmyiemssaa, "\163\x69\x7a\145" => filesize($yoisseswouogeswg), "\164\171\160\x65" => $cqiuiecmyyqkgeoa, "\x65\162\x72\157\x72" => '', "\164\x6d\160\137\x6e\x61\x6d\x65" => $yoisseswouogeswg];
        goto esmeekicsmoyumia;
        ussmaqukmmwaigcy:
        $mcqieaigyeeyaksm = str_replace("\x20", "\53", $mcqieaigyeeyaksm);
        goto gaeawesmcgqyqeia;
        kmmyoqogqymmuyys:
        
        $mqqeykegekqaumeq = DecoratorFile::oemywwmmmiywiqai();
        goto iqkoueycskiymkma;
        gaeawesmcgqyqeia:
        $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm);
        goto qumggamakkcwogeg;
        qumggamakkcwogeg:
        $cqiuiecmyyqkgeoa = ManipulateArray::get($yyimiwcuegayoskq, "\155\151\155\x65");
        goto ggcamcsikeggkkeg;
        ayewgikkscwoecua:
        $mckmqeqaekwkwems = "\x74\x65\x6d\x70\55{$qgoggukmyiemssaa}";
        goto mqewgssacawiesua;
        aeikksawqyowqasq:
    }
    
    public static function wayeasoyaomiwwmc() : ?string
    {
        if (!function_exists("\147\145\x74\137\x68\157\x6d\145\x5f\160\141\x74\x68")) {
            require_once ABSPATH . "\x77\x70\55\x61\x64\x6d\x69\x6e\57\x69\x6e\x63\x6c\x75\144\x65\163\x2f\146\x69\154\x65\56\x70\150\x70";
        }
        return get_home_path();
    }
    
    public static function eyqooeqgoyokqeoq($aiieyweysaukqemc)
    {
        goto ukkosocmcsgoyoqk;
        qroismwogguyugwe:
        return $esaqeawoigqgagum;
        goto qqcigicgmaciisso;
        ewygwsaaggyeqgou:
        try {
            goto mygoeeeakcqcckey;
            ycammcyquswuysew:
            ymkwuiqgccecsouc:
            goto sakouuiukiouowiu;
            mcymkuaooaywgaqk:
            throw new Exception("{$aiieyweysaukqemc}\40\x74\171\x70\x65\x20\x69\163\40\156\157\x74\40\x76\141\x6c\x69\x64\x20\157\162\40\156\141\x6d\x65\163\160\141\x63\145\40\156\157\x74\40\x65\x78\151\163\164\56");
            goto qicowuckymwwwkua;
            ggoccuougaayoawu:
            $oqkmoekaagukcwia = new \ReflectionClass($aiieyweysaukqemc);
            goto igsumksgcomuyyie;
            igsumksgcomuyyie:
            $esaqeawoigqgagum = $oqkmoekaagukcwia->aueqceykakekkqiw();
            goto ycammcyquswuysew;
            uqowisomaymekaqk:
            uaowykkiuuygowuk:
            goto ggoccuougaayoawu;
            mygoeeeakcqcckey:
            if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) {
                goto uaowykkiuuygowuk;
            }
            goto mcymkuaooaywgaqk;
            qicowuckymwwwkua:
            goto ymkwuiqgccecsouc;
            goto uqowisomaymekaqk;
            sakouuiukiouowiu:
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        goto qroismwogguyugwe;
        ukkosocmcsgoyoqk:
        $esaqeawoigqgagum = null;
        goto ewygwsaaggyeqgou;
        qqcigicgmaciisso:
    }
    
    public static function qucagkayiequsiia($egkyssmuqcwaciya) : ?string
    {
        goto ockqoeuqcwgyqwca;
        oweaacksoisqumyk:
        if (!$esaqeawoigqgagum) {
            goto yswqswoyackicqoq;
        }
        goto smsweaqgcukcumoe;
        woeykqsoceymuaus:
        $esaqeawoigqgagum = self::eyqooeqgoyokqeoq($egkyssmuqcwaciya);
        goto oweaacksoisqumyk;
        smsweaqgcukcumoe:
        $smaiamkswqkisawm = basename($esaqeawoigqgagum);
        goto yqeceucomeekaiqq;
        yqeceucomeekaiqq:
        yswqswoyackicqoq:
        goto oiaoakaqgkqqsmsm;
        oiaoakaqgkqqsmsm:
        return $smaiamkswqkisawm;
        goto tkqwawuyoceqgiuw;
        ockqoeuqcwgyqwca:
        $smaiamkswqkisawm = null;
        goto woeykqsoceymuaus;
        tkqwawuyoceqgiuw:
    }
    
    public static function iygwwosmmgmouoyc($mkomwsiykqigmqca)
    {
        return realpath("{$mkomwsiykqigmqca}\x2f\56\x2e\x2f\56\56\57\x2e\56\57\x2e\56\57");
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto wsiueiimkueqgwmm;
        dsqoacgyuawacuwu:
        return $iwywmkygwewiamwm;
        goto maocyeeeecsocswc;
        isymggoseycccwew:
        cqoamosqiimaaiqa:
        goto gokiwsqcmkkwkimq;
        wsiueiimkueqgwmm:
        $iwywmkygwewiamwm = false;
        goto iyuiyscqgeeyuggw;
        wuqwkggewcusmauu:
        if (!$aokagokqyuysuksm) {
            goto cqoamosqiimaaiqa;
        }
        goto aqueeyiaoekcmqac;
        csmcekewikymocqy:
        $aokagokqyuysuksm = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm);
        goto wuqwkggewcusmauu;
        wosegmwqcksaemkg:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\x64\x6f\167\x6e\x6c\x6f\141\144\57{$ymacoouqwcqwwagu}\x2f";
        goto isymggoseycccwew;
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
        maocyeeeecsocswc:
    }
    
    public static function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int
    {
        goto ukommkeiukekcgma;
        ekeuymuiemykseqq:
        try {
            goto ggekiiiaukmmqwos;
            ggekiiiaukmmqwos:
            $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS));
            goto scoeukeacygcksek;
            gisqqagakwuqqwmu:
            mieskyceqaogywui:
            goto oyoemceiucoymamk;
            scoeukeacygcksek:
            foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
                
                $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac();
                oueaiaquokwususi:
            }
            goto gisqqagakwuqqwmu;
            oyoemceiucoymamk:
        } catch (Exception $iewosgggaueeyymg) {
            
        }
        goto cymuyggaggcuccam;
        ukommkeiukekcgma:
        $oiegiwogmwmawkeo = 0;
        goto ekeuymuiemykseqq;
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
        geueeskaygegaoey:
        if (!is_null($qkkaqsuiooeayqeu)) {
            goto muiyqmkywcmyuscg;
        }
        goto myaiyaaageakqmmo;
        acyogacouuiocoak:
        cmiammcmeegquuus:
        goto geueeskaygegaoey;
        ywowsisqociesyoc:
        static $qkkaqsuiooeayqeu = null;
        goto sswckucqiaiaoqwm;
        gkqyyayiqmugsyaa:
        muiyqmkywcmyuscg:
        goto siomkcccqkcwgaqu;
        siomkcccqkcwgaqu:
        return $qkkaqsuiooeayqeu;
        goto oqmisuskgecyaawk;
        myaiyaaageakqmmo:
        $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\x5c";
        goto gkqyyayiqmugsyaa;
        sswckucqiaiaoqwm:
        if (!$iuomscuiswckwcoe) {
            goto cmiammcmeegquuus;
        }
        goto qmkeeewoecwwqiqe;
        qmkeeewoecwwqiqe:
        $qkkaqsuiooeayqeu = null;
        goto acyogacouuiocoak;
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
        gumwgoyaeiyuycyu:
        global $is_apache;
        goto mokwauoickaioaye;
        ouuqsaagueaqycca:
        if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) {
            goto oqguaiwgeucmkcom;
        }
        goto kyeimqaqesssikke;
        ocamuiagiuuuweei:
        yegwcckcwuwoiyay:
        goto uaiyoskyqyokucku;
        kyeimqaqesssikke:
        $ksaameoqigiaoigg = true;
        goto ogiwiuueswweceyk;
        oeqeaumoegmcqggu:
        $esaqeawoigqgagum = self::wayeasoyaomiwwmc() . "\x2e\x68\164\141\143\143\145\x73\163";
        goto ocsucmwqukqsuysa;
        eesmuemgcicqwqks:
        if (!is_callable($kgcswwyywoscuqqs)) {
            goto auwaqagiqgaaokay;
        }
        goto umyagoaugskqauwe;
        ygaquwoyiuyeicse:
        $ksaameoqigiaoigg = false;
        goto oeqeaumoegmcqggu;
        mqksmeugmqqymwyq:
        $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto aosoeekeggowekyq;
        imksuqmseeecckcm:
        auwaqagiqgaaokay:
        goto risykcskaqqgcggo;
        umyagoaugskqauwe:
        $kgcswwyywoscuqqs = call_user_func($kgcswwyywoscuqqs);
        goto imksuqmseeecckcm;
        icweksgaqeuyayga:
        gquswkgymisikkei:
        goto mqksmeugmqqymwyq;
        uaiyoskyqyokucku:
        eaicaiacqyiciycw:
        goto qqaqeaoeosamukik;
        kosawesakkoyqqsc:
        $iswcokucwmiosiaq = sprintf(__("\124\x68\x65\x20\x2e\150\x74\x61\x63\x63\x65\163\163\40\x66\x69\154\x65\x20\x28\45\x73\51\x20\143\x6f\165\154\x64\40\x6e\x6f\164\x20\x62\x65\40\145\x64\x69\x74\x65\144\56\x20\x43\150\145\143\153\x20\151\146\x20\164\x68\145\x20\x66\x69\x6c\x65\40\x68\141\x73\40\x77\x72\x69\x74\x65\x20\x70\x65\162\x6d\151\163\163\151\x6f\x6e\163\x2e", PR__CMN__FOUNDATION), $esaqeawoigqgagum, "\x6f\160\164\x2d\167\x72\x69\x74\145\x2d\150\164\141\143\x63\145\x73\163");
        goto wgyoiyqiuquismae;
        eqcgikyyuauqeusk:
        goto aoccksmyyggqkcky;
        goto icweksgaqeuyayga;
        cwmwawskgukouegg:
        skcqayaekwqwqaog:
        goto gcmawmaiimmygwuw;
        eykyqqceouqecaay:
        $eouekqmooogkoqoo = "\57\x5c\163\52\43\40\102\x45\x47\111\x4e\40{$ymqmyyeuycgmigyo}\x2e\x2a\x23\40\105\x4e\104\40{$ymqmyyeuycgmigyo}\x5c\163\x2a\x3f\57\x69\163\x55";
        goto ygaquwoyiuyeicse;
        aagsqmuwcceoekiy:
        if ($iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) {
            goto gquswkgymisikkei;
        }
        goto qmecmukycucewmuc;
        mokwauoickaioaye:
        if (!$is_apache) {
            goto qgecoqswyiuaemaa;
        }
        goto kgeucwqwmecqigmw;
        risykcskaqqgcggo:
        if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) {
            goto yegwcckcwuwoiyay;
        }
        goto ouuqsaagueaqycca;
        qqkwqsscgyeooigo:
        return $ksaameoqigiaoigg;
        goto kmgkqcqquaqqciqq;
        gcmawmaiimmygwuw:
        aoccksmyyggqkcky:
        goto qqkwqsscgyeooigo;
        qqaqeaoeosamukik:
        qgecoqswyiuaemaa:
        goto cwmwawskgukouegg;
        aosoeekeggowekyq:
        if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) {
            goto skcqayaekwqwqaog;
        }
        goto gumwgoyaeiyuycyu;
        oesqsgmommuakocy:
        oqguaiwgeucmkcom:
        goto kosawesakkoyqqsc;
        wgyoiyqiuquismae:
        magqgeesoiimssqm:
        goto ocamuiagiuuuweei;
        qmecmukycucewmuc:
        $iswcokucwmiosiaq = "{$esaqeawoigqgagum}\40\151\163\40\x6e\x6f\164\40\x72\x65\141\x64\x61\142\x6c\145\56";
        goto eqcgikyyuauqeusk;
        kgeucwqwmecqigmw:
        if (!$iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) {
            goto eaicaiacqyiciycw;
        }
        goto eesmuemgcicqwqks;
        ogiwiuueswweceyk:
        goto magqgeesoiimssqm;
        goto oesqsgmommuakocy;
        ocsucmwqukqsuysa:
        $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu();
        goto aagsqmuwcceoekiy;
        kmgkqcqquaqqciqq:
    }
    
    public static function usoyisqwsqsegiam(?string $migiiksoiymissge)
    {
        goto gsiccicikauwmmie;
        mswesygwomaquqiw:
        $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge);
        goto oyiiyksykcgcagus;
        ekgaaqmmaescmsak:
        if (preg_match("\x60\x5e\x2f\50\x5b\136\57\135\53\51\50\57\56\52\x29\x3f\44\x60\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto somgeamsciqieaoy;
        }
        goto aqsqeoiismoaoiky;
        wmkceagokqacmiwy:
        
        $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\x3a\x2e\x2a\44\57", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek;
        goto imuggoqgiugiyyms;
        euogucuegesyqyyk:
        somgeamsciqieaoy:
        goto awiquiscemosoioe;
        ywwgekggsmaeswyq:
        if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) {
            goto yagkqyieuqkwkkak;
        }
        goto mswesygwomaquqiw;
        aosgwsogkogssquu:
        yagkqyieuqkwkkak:
        goto goywyqwiewckiomw;
        scooqcccqwoackku:
        $ykqmwuwqiskkmwuy = (string) parse_url(get_option("\x68\157\x6d\x65"), PHP_URL_HOST);
        goto wmkceagokqacmiwy;
        ocqggiokqycoqmmu:
        $xeciwimgioieayek = ManipulateString::quuwkeiwesaoqwom(["\x2e\x2e", "\134", "\x69\156\x64\x65\170\x2e\x70\150\x70"], preg_replace("\57\x5b\x20\74\x3e\47\x5c\x22\134\162\134\156\x5c\164\134\x28\x5c\x29\135\57", '', preg_replace("\x2f\50\x5c\x3f\56\x2a\51\77\50\43\56\52\x29\x3f\x24\57", '', $xeciwimgioieayek)));
        goto scooqcccqwoackku;
        igqcisomycuoeymm:
        aqoggmcwaocwqmma:
        goto ocqggiokqycoqmmu;
        aqsqeoiismoaoiky:
        $xeciwimgioieayek = '';
        goto kguoeaummyeuqwco;
        eswgaqweugauecaq:
        wmwggwqewsaqwewq:
        goto gcukeaaoomsqkwmg;
        jceqycsmkusyoowc:
        $migiiksoiymissge = trailingslashit($migiiksoiymissge);
        goto ywwgekggsmaeswyq;
        imuggoqgiugiyyms:
        $ymqmyyeuycgmigyo = str_replace(["\56\56", "\x25"], '', str_replace("\57\x2f", "\57", $ymqmyyeuycgmigyo));
        goto wkkyyosuiiesusyy;
        smokemkeeuyeamye:
        aigsykmqeyesokek:
        goto eeqooyucsqoakgmw;
        awiquiscemosoioe:
        $xeciwimgioieayek = $migiiksoiymissge;
        goto eswgaqweugauecaq;
        wkkyyosuiiesusyy:
        return $ymqmyyeuycgmigyo;
        goto emwyayayykqeaomu;
        oyiiyksykcgcagus:
        goto aqoggmcwaocwqmma;
        goto aosgwsogkogssquu;
        wmgaeiusimsuaeiu:
        muoiywyyogmywgug:
        goto igqcisomycuoeymm;
        gsiccicikauwmmie:
        $cgmkimaosyyuqeyg = trailingslashit(site_url());
        goto jceqycsmkusyoowc;
        kguoeaummyeuqwco:
        goto wmwggwqewsaqwewq;
        goto euogucuegesyqyyk;
        gcukeaaoomsqkwmg:
        goto muoiywyyogmywgug;
        goto smokemkeeuyeamye;
        goywyqwiewckiomw:
        if (preg_match("\140\x5e\50\150\x74\x74\x70\x73\x3f\72\x29\77\57\x2f\x28\133\x5e\57\x5d\x2b\x29\50\57\x2e\x2a\51\x3f\44\x60\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto aigsykmqeyesokek;
        }
        goto ekgaaqmmaescmsak;
        eeqooyucsqoakgmw:
        $xeciwimgioieayek = isset($meyiiwcswqmuggyg[3]) ? $meyiiwcswqmuggyg[3] : '';
        goto wmgaeiusimsuaeiu;
        emwyayayykqeaomu:
    }
    
    public static function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, $iggwcmkgmicmouyu = true)
    {
        goto iisqqoaayqqqucai;
        ikauicmsakmoqusg:
        return $ksaameoqigiaoigg;
        goto weyoyumiwmwougco;
        aygqokkmmumaqmei:
        kkyyicgmsyyyseko:
        goto ikauicmsakmoqusg;
        iisqqoaayqqqucai:
        $ksaameoqigiaoigg = false;
        goto wiwqmuwgswwgcgwq;
        wiwqmuwgswwgcgwq:
        if (!(self::wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $mkomwsiykqigmqca && $iggwcmkgmicmouyu && Filesystem::symcgieuakksimmu()->oquguuiseiwkawkw($mkomwsiykqigmqca))) {
            goto kkyyicgmsyyyseko;
        }
        goto yisaacgkisqssack;
        yisaacgkisqssack:
        $ksaameoqigiaoigg = $mkomwsiykqigmqca;
        goto aygqokkmmumaqmei;
        weyoyumiwmwougco:
    }
    
    public static function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR)
    {
        goto ewkcysiiwmycaecc;
        qyqaskiyiewkcqog:
        goto kkwsccmgsgogsayc;
        goto ocawiugcmcgyiuqy;
        qqcgoykmgigawaue:
        return $emukumgmosiqkmyi;
        goto mosmuqisqgakqaku;
        eioqwkagqyekiogk:
        if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) {
            goto gsegyaaokkacccas;
        }
        goto aswigywgqmqqyaks;
        aimwyouyuaasmcsy:
        if (!$mkomwsiykqigmqca) {
            goto kaksiweaiuugqeio;
        }
        goto wuyoocqaysogmcsa;
        wysmgisokmgyaukg:
        
        $ucccueqywigcukcc = "\x23\134\x2f\x2a\x5b\x5e\x2f\x5c\56\135\53\x2f\134\x2e\134\56\x23\x55\165";
        goto qmugicuuomqociko;
        sukwuguiwokwokoa:
        if (!preg_match("\x23\57\x5c\x2e\173\62\175\174\x5c\56\x7b\x32\x7d\57\43", $emukumgmosiqkmyi)) {
            goto wkoaouywgckiigoa;
        }
        goto ukwyoqwawqemgaou;
        aswigywgqmqqyaks:
        $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi);
        goto qyqaskiyiewkcqog;
        wuyoocqaysogmcsa:
        
        $emukumgmosiqkmyi = preg_replace("\43\134\x70\x7b\x43\175\x2b\x7c\136\134\x2e\57\43\x75", '', $mkomwsiykqigmqca);
        goto sqqosuucouosesoe;
        yuscoeckmsicamcy:
        $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu);
        goto iquggikocsikyqcu;
        ewkcysiiwmycaecc:
        $emukumgmosiqkmyi = null;
        goto aimwyouyuaasmcsy;
        iquggikocsikyqcu:
        kaksiweaiuugqeio:
        goto qqcgoykmgigawaue;
        sqqosuucouosesoe:
        
        $emukumgmosiqkmyi = preg_replace("\x23\x2f\x5c\56\x28\x3f\x3d\57\51\x7c\x5e\x5c\x2e\x2f\174\134\56\x2f\x24\x23", '', $emukumgmosiqkmyi);
        goto wysmgisokmgyaukg;
        ukwyoqwawqemgaou:
        throw new LogicException("\x50\141\164\150\x20\151\163\40\157\x75\164\x73\151\x64\145\40\x6f\x66\x20\x74\x68\x65\x20\x64\x65\x66\x69\x6e\145\144\40\162\157\x6f\x74\54\40\x70\x61\164\x68\x3a\40\133" . $mkomwsiykqigmqca . "\x5d\54\x20\x72\145\163\157\154\166\x65\144\x3a\40\x5b" . $emukumgmosiqkmyi . "\135");
        goto iiceausgsgcgseiu;
        qmugicuuomqociko:
        kkwsccmgsgogsayc:
        goto eioqwkagqyekiogk;
        iiceausgsgcgseiu:
        wkoaouywgckiigoa:
        goto yuscoeckmsicamcy;
        ocawiugcmcgyiuqy:
        gsegyaaokkacccas:
        goto sukwuguiwokwokoa;
        mosmuqisqgakqaku:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        wqqgkukmcmmiwwsg:
        $ksaameoqigiaoigg = DecoratorAttachment::insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\x70\141\x74\x68"]}\x2f{$qgoggukmyiemssaa}");
        goto ieemimcomkyeykae;
        aqwimyousskkmmys:
        $qogsmwakwacwqogk = ["\x6e\141\155\x65" => $qgoggukmyiemssaa, "\163\x69\x7a\x65" => filesize($yoisseswouogeswg), "\164\x79\x70\x65" => $cqiuiecmyyqkgeoa, "\145\x72\162\x6f\x72" => '', "\164\155\x70\x5f\156\141\x6d\x65" => $yoisseswouogeswg];
        goto ogaeyaaussqcqwcq;
        ogaeyaaussqcqwcq:
        $ksaameoqigiaoigg = DecoratorFile::qsyguaycgacaggsu($qogsmwakwacwqogk, ["\164\145\x73\164\x5f\146\x6f\x72\x6d" => false]);
        goto gikeuuqaaqwesqmg;
        wcaaskeywmuimuuc:
        $mcqieaigyeeyaksm = str_replace("\40", "\53", $mcqieaigyeeyaksm);
        goto aeqkmkymmqiwyaoc;
        yuamwcksmgkyaayu:
        
        $mqqeykegekqaumeq = DecoratorFile::oemywwmmmiywiqai();
        goto ymgciqyiaoeackyq;
        gumaasmcagyskwuo:
        $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy);
        goto sgscymyaoiiomuey;
        oomcumcckcsgkeyg:
        return $ksaameoqigiaoigg;
        goto sucwucwgwmusqcuc;
        omckgquqwygqseys:
        uwuaawwasggkossk:
        goto oomcumcckcsgkeyg;
        acqsqiuqaouaccyg:
        $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}";
        goto umsuiwswwywqccec;
        ooaokssiecgqamyw:
        qioesoiiiwmqiyuw:
        goto messaqosuqcuimms;
        gagsysekmycceycs:
        $qgoggukmyiemssaa = md5(microtime()) . str_replace("\57", "\56", $cqiuiecmyyqkgeoa);
        goto coweqcyciwygumgw;
        messaqosuqcuimms:
        $ksaameoqigiaoigg = new WP_Error("\165\x70\154\x6f\x61\x64\x5f\x66\x69\x6c\x65\137\x65\x72\162\157\x72", $iswcokucwmiosiaq, ["\163\164\x61\x74\x75\x73" => 401]);
        goto omckgquqwygqseys;
        kegiaasueigcoucc:
        $aiooqyausygaasqm = ["\147\x75\151\x64" => $mqqeykegekqaumeq["\165\162\x6c"] . "\57" . basename($esaqeawoigqgagum), "\160\x6f\x73\x74\137\164\151\x74\154\x65" => preg_replace("\57\x5c\x2e\x5b\x5e\x2e\135\x2b\x24\x2f", '', basename($esaqeawoigqgagum)), "\x70\157\x73\x74\x5f\163\164\x61\x74\x75\x73" => "\151\x6e\x68\145\x72\x69\164", "\160\x6f\163\164\137\143\157\156\x74\145\x6e\x74" => '', "\x70\x6f\x73\x74\137\155\x69\x6d\x65\137\x74\171\x70\x65" => ManipulateArray::get($ksaameoqigiaoigg, "\x74\171\x70\145", $cqiuiecmyyqkgeoa)];
        goto wqqgkukmcmmiwwsg;
        coweqcyciwygumgw:
        $mckmqeqaekwkwems = "\x74\x65\155\160\55{$qgoggukmyiemssaa}";
        goto acqsqiuqaouaccyg;
        ymgciqyiaoeackyq:
        $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\x70\x61\164\x68"]) . DIRECTORY_SEPARATOR;
        goto gumaasmcagyskwuo;
        ieemimcomkyeykae:
        goto uwuaawwasggkossk;
        goto ooaokssiecgqamyw;
        qqyeockoeuowkook:
        $cqiuiecmyyqkgeoa = ManipulateArray::get($yyimiwcuegayoskq, "\x6d\x69\x6d\145");
        goto gagsysekmycceycs;
        aeqkmkymmqiwyaoc:
        $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm);
        goto qqyeockoeuowkook;
        gikeuuqaaqwesqmg:
        if ($iswcokucwmiosiaq = ManipulateArray::get($ksaameoqigiaoigg, "\x65\x72\x72\157\162")) {
            goto qioesoiiiwmqiyuw;
        }
        goto wgscommumawcwgeq;
        umsuiwswwywqccec:
        
        Filesystem::symcgieuakksimmu()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu);
        goto aqwimyousskkmmys;
        wgscommumawcwgeq:
        $esaqeawoigqgagum = ManipulateArray::get($ksaameoqigiaoigg, "\146\x69\x6c\x65");
        goto kegiaasueigcoucc;
        sgscymyaoiiomuey:
        $mcqieaigyeeyaksm = ManipulateArray::get(explode("\x2c", $owyiccmocukoumyy), 1, $owyiccmocukoumyy);
        goto wcaaskeywmuimuuc;
        sucwucwgwmusqcuc:
    }
    
    public static function wayeasoyaomiwwmc() : ?string
    {
        if (!function_exists("\147\145\164\x5f\x68\x6f\x6d\145\137\x70\141\164\x68")) {
            require_once ABSPATH . "\167\x70\55\x61\x64\155\x69\x6e\57\x69\x6e\143\x6c\x75\144\x65\x73\57\x66\151\154\145\x2e\x70\x68\160";
        }
        return get_home_path();
    }
    
    public static function eyqooeqgoyokqeoq($aiieyweysaukqemc)
    {
        goto eceuioskggsqggkk;
        qsmkswggymakkaic:
        try {
            goto gqkqmiageemgssym;
            smwcsmqwescekeec:
            oueimsmmmimceuai:
            goto qkwaoikuioasioyg;
            icecukasaccaeouo:
            $esaqeawoigqgagum = $oqkmoekaagukcwia->aueqceykakekkqiw();
            goto ymguoykwgqaosgyu;
            gqkqmiageemgssym:
            if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) {
                goto oueimsmmmimceuai;
            }
            goto oueygmwqqkwiqmuw;
            ymguoykwgqaosgyu:
            ouaqyykiuuesmaom:
            goto qqokkuaeeaeaaiok;
            wgiiqociegegkcmo:
            goto ouaqyykiuuesmaom;
            goto smwcsmqwescekeec;
            oueygmwqqkwiqmuw:
            throw new Exception("{$aiieyweysaukqemc}\x20\x74\171\x70\145\x20\x69\x73\40\x6e\x6f\x74\x20\x76\x61\x6c\151\144\x20\x6f\162\40\156\141\x6d\x65\x73\x70\x61\143\145\x20\x6e\x6f\164\40\145\x78\x69\x73\164\x2e");
            goto wgiiqociegegkcmo;
            qkwaoikuioasioyg:
            $oqkmoekaagukcwia = new \ReflectionClass($aiieyweysaukqemc);
            goto icecukasaccaeouo;
            qqokkuaeeaeaaiok:
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        goto ccegeskegokuuqyc;
        eceuioskggsqggkk:
        $esaqeawoigqgagum = null;
        goto qsmkswggymakkaic;
        ccegeskegokuuqyc:
        return $esaqeawoigqgagum;
        goto yywyeuokaqsgqgww;
        yywyeuokaqsgqgww:
    }
    
    public static function qucagkayiequsiia($egkyssmuqcwaciya) : ?string
    {
        goto kwwsqkaskggswock;
        acmoecmaeoycigam:
        $esaqeawoigqgagum = self::eyqooeqgoyokqeoq($egkyssmuqcwaciya);
        goto uommseoowiuemkwk;
        wymaswukwyouumeq:
        return $smaiamkswqkisawm;
        goto waakiqmaycwwqaeg;
        uommseoowiuemkwk:
        if (!$esaqeawoigqgagum) {
            goto cygwuguggaeaqmiy;
        }
        goto gaywiqceooiguqea;
        kwwsqkaskggswock:
        $smaiamkswqkisawm = null;
        goto acmoecmaeoycigam;
        gaywiqceooiguqea:
        $smaiamkswqkisawm = basename($esaqeawoigqgagum);
        goto swmouimoiymygayk;
        swmouimoiymygayk:
        cygwuguggaeaqmiy:
        goto wymaswukwyouumeq;
        waakiqmaycwwqaeg:
    }
    
    public static function iygwwosmmgmouoyc($mkomwsiykqigmqca)
    {
        return realpath("{$mkomwsiykqigmqca}\x2f\x2e\56\x2f\56\56\x2f\x2e\56\x2f\x2e\56\57");
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto kogcsisuicgkaesc;
        akeeueokwsssimaw:
        if (!$aiooqyausygaasqm) {
            goto sescmkcssisuskoi;
        }
        goto geaeocmguomaqusc;
        kogcsisuicgkaesc:
        $iwywmkygwewiamwm = false;
        goto akeeueokwsssimaw;
        esgwwakgieqcwaww:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\144\x6f\167\156\x6c\157\x61\144\57{$ymacoouqwcqwwagu}\x2f";
        goto gyuyiouiquoaouim;
        ssguwqmoegqekmsc:
        if (!$aokagokqyuysuksm) {
            goto eeeuamsiyssgwkyo;
        }
        goto qyamaiwggysquoqs;
        yyumokoqqeiwcewq:
        sescmkcssisuskoi:
        goto cweyecwwsaogsose;
        cweyecwwsaogsose:
        return $iwywmkygwewiamwm;
        goto gqmwuucgesayqego;
        geaeocmguomaqusc:
        $aokagokqyuysuksm = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm);
        goto ssguwqmoegqekmsc;
        qyamaiwggysquoqs:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto esgwwakgieqcwaww;
        gyuyiouiquoaouim:
        eeeuamsiyssgwkyo:
        goto yyumokoqqeiwcewq;
        gqmwuucgesayqego:
    }
    
    public static function qceuosaqmmsiqkym(?string $miawkwqioaeasiig)
    {
        goto qumggamakkcwogeg;
        ayewgikkscwoecua:
        return $oiegiwogmwmawkeo;
        goto mqewgssacawiesua;
        qumggamakkcwogeg:
        $oiegiwogmwmawkeo = 0;
        goto ggcamcsikeggkkeg;
        ggcamcsikeggkkeg:
        try {
            goto saosqywwkuqysqgu;
            ussmaqukmmwaigcy:
            kmmyoqogqymmuyys:
            goto gaeawesmcgqyqeia;
            saosqywwkuqysqgu:
            $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS));
            goto isiokmykwmgusmik;
            isiokmykwmgusmik:
            foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
                $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac();
                iqkoueycskiymkma:
            }
            goto ussmaqukmmwaigcy;
            gaeawesmcgqyqeia:
        } catch (Exception $iewosgggaueeyymg) {
            
        }
        goto ayewgikkscwoecua;
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
        syqcmauqkosgmcgc:
        $qkkaqsuiooeayqeu = null;
        goto mcqiycyaekmuwcoc;
        eeuuyygswoueugwm:
        return $qkkaqsuiooeayqeu;
        goto uwioceoekowwawuu;
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
        ewcusawuygquwqeg:
        caemyqosyooeykya:
        goto eeuuyygswoueugwm;
        mgywkkwakokscomi:
        $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134";
        goto ewcusawuygquwqeg;
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
        maocyeeeecsocswc:
        qicowuckymwwwkua:
        goto mieskyceqaogywui;
        woeykqsoceymuaus:
        if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) {
            goto qicowuckymwwwkua;
        }
        goto oweaacksoisqumyk;
        oiaoakaqgkqqsmsm:
        if (!is_callable($kgcswwyywoscuqqs)) {
            goto cycqkkuiywsyeeum;
        }
        goto tkqwawuyoceqgiuw;
        cqoamosqiimaaiqa:
        cycqkkuiywsyeeum:
        goto okowaykucseuwkwa;
        ockqoeuqcwgyqwca:
        $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto woeykqsoceymuaus;
        oweaacksoisqumyk:
        global $is_apache;
        goto smsweaqgcukcumoe;
        wuqwkggewcusmauu:
        aeikksawqyowqasq:
        goto aqueeyiaoekcmqac;
        yqeceucomeekaiqq:
        if (!$iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) {
            goto mygoeeeakcqcckey;
        }
        goto oiaoakaqgkqqsmsm;
        ycammcyquswuysew:
        $ksaameoqigiaoigg = false;
        goto sakouuiukiouowiu;
        wosegmwqcksaemkg:
        uaowykkiuuygowuk:
        goto isymggoseycccwew;
        isymggoseycccwew:
        ymkwuiqgccecsouc:
        goto gokiwsqcmkkwkimq;
        aqueeyiaoekcmqac:
        $iswcokucwmiosiaq = sprintf(__("\124\x68\145\x20\x2e\x68\x74\141\x63\143\145\163\163\40\146\x69\x6c\x65\40\50\45\163\51\40\x63\x6f\x75\x6c\144\x20\x6e\x6f\164\40\x62\x65\x20\x65\x64\151\164\145\144\x2e\40\x43\150\x65\x63\x6b\x20\151\x66\x20\164\150\x65\x20\x66\x69\154\x65\40\150\141\163\40\167\162\151\164\x65\40\x70\145\x72\155\151\163\163\151\x6f\x6e\x73\x2e", PR__CMN__FOUNDATION), $esaqeawoigqgagum, "\157\160\x74\x2d\167\x72\151\x74\145\x2d\150\x74\x61\143\143\x65\x73\x73");
        goto wosegmwqcksaemkg;
        ewygwsaaggyeqgou:
        if ($iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) {
            goto uqowisomaymekaqk;
        }
        goto qroismwogguyugwe;
        smsweaqgcukcumoe:
        if (!$is_apache) {
            goto mcymkuaooaywgaqk;
        }
        goto yqeceucomeekaiqq;
        gokiwsqcmkkwkimq:
        mygoeeeakcqcckey:
        goto dsqoacgyuawacuwu;
        ukkosocmcsgoyoqk:
        $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu();
        goto ewygwsaaggyeqgou;
        wsiueiimkueqgwmm:
        if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) {
            goto aeikksawqyowqasq;
        }
        goto iyuiyscqgeeyuggw;
        tkqwawuyoceqgiuw:
        $kgcswwyywoscuqqs = call_user_func($kgcswwyywoscuqqs);
        goto cqoamosqiimaaiqa;
        sakouuiukiouowiu:
        $esaqeawoigqgagum = self::wayeasoyaomiwwmc() . "\x2e\150\x74\x61\143\x63\145\163\163";
        goto ukkosocmcsgoyoqk;
        csmcekewikymocqy:
        goto uaowykkiuuygowuk;
        goto wuqwkggewcusmauu;
        qroismwogguyugwe:
        $iswcokucwmiosiaq = "{$esaqeawoigqgagum}\x20\x69\163\x20\x6e\x6f\x74\40\162\145\x61\x64\x61\x62\x6c\x65\x2e";
        goto qqcigicgmaciisso;
        okowaykucseuwkwa:
        if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) {
            goto ymkwuiqgccecsouc;
        }
        goto wsiueiimkueqgwmm;
        qqcigicgmaciisso:
        goto ggoccuougaayoawu;
        goto yswqswoyackicqoq;
        iyuiyscqgeeyuggw:
        $ksaameoqigiaoigg = true;
        goto csmcekewikymocqy;
        dsqoacgyuawacuwu:
        mcymkuaooaywgaqk:
        goto maocyeeeecsocswc;
        oueaiaquokwususi:
        return $ksaameoqigiaoigg;
        goto ggekiiiaukmmqwos;
        yswqswoyackicqoq:
        uqowisomaymekaqk:
        goto ockqoeuqcwgyqwca;
        mieskyceqaogywui:
        ggoccuougaayoawu:
        goto oueaiaquokwususi;
        igsumksgcomuyyie:
        $eouekqmooogkoqoo = "\x2f\134\x73\52\x23\x20\102\105\x47\x49\x4e\40{$ymqmyyeuycgmigyo}\x2e\52\43\40\x45\x4e\104\x20{$ymqmyyeuycgmigyo}\134\163\52\x3f\x2f\x69\x73\125";
        goto ycammcyquswuysew;
        ggekiiiaukmmqwos:
    }
    
    public static function usoyisqwsqsegiam(?string $migiiksoiymissge)
    {
        goto uougqksswaquemag;
        gquswkgymisikkei:
        $ykqmwuwqiskkmwuy = (string) parse_url(get_option("\x68\157\155\x65"), PHP_URL_HOST);
        goto aoccksmyyggqkcky;
        ywowsisqociesyoc:
        $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge);
        goto sswckucqiaiaoqwm;
        magqgeesoiimssqm:
        oyoemceiucoymamk:
        goto yegwcckcwuwoiyay;
        eaicaiacqyiciycw:
        ukommkeiukekcgma:
        goto qgecoqswyiuaemaa;
        yegwcckcwuwoiyay:
        $xeciwimgioieayek = isset($meyiiwcswqmuggyg[3]) ? $meyiiwcswqmuggyg[3] : '';
        goto eaicaiacqyiciycw;
        sswckucqiaiaoqwm:
        goto cymuyggaggcuccam;
        goto qmkeeewoecwwqiqe;
        eykyqqceouqecaay:
        $ymqmyyeuycgmigyo = str_replace(["\56\x2e", "\x25"], '', str_replace("\x2f\x2f", "\57", $ymqmyyeuycgmigyo));
        goto ygaquwoyiuyeicse;
        auwaqagiqgaaokay:
        gisqqagakwuqqwmu:
        goto oqguaiwgeucmkcom;
        acyogacouuiocoak:
        if (preg_match("\140\136\x28\150\x74\x74\160\163\x3f\x3a\x29\x3f\x2f\x2f\50\133\136\x2f\135\x2b\x29\x28\x2f\x2e\52\51\x3f\44\140\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto oyoemceiucoymamk;
        }
        goto geueeskaygegaoey;
        cmiammcmeegquuus:
        $migiiksoiymissge = trailingslashit($migiiksoiymissge);
        goto muiyqmkywcmyuscg;
        skcqayaekwqwqaog:
        $xeciwimgioieayek = ManipulateString::quuwkeiwesaoqwom(["\56\56", "\x5c", "\151\x6e\x64\145\170\56\160\150\x70"], preg_replace("\57\x5b\x20\74\x3e\x27\x5c\42\134\162\134\156\134\x74\x5c\x28\x5c\x29\x5d\57", '', preg_replace("\57\50\x5c\77\x2e\x2a\x29\77\50\x23\56\52\x29\x3f\44\x2f", '', $xeciwimgioieayek)));
        goto gquswkgymisikkei;
        ygaquwoyiuyeicse:
        return $ymqmyyeuycgmigyo;
        goto oeqeaumoegmcqggu;
        qmkeeewoecwwqiqe:
        ekeuymuiemykseqq:
        goto acyogacouuiocoak;
        uougqksswaquemag:
        $cgmkimaosyyuqeyg = trailingslashit(site_url());
        goto cmiammcmeegquuus;
        muiyqmkywcmyuscg:
        if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) {
            goto ekeuymuiemykseqq;
        }
        goto ywowsisqociesyoc;
        geueeskaygegaoey:
        if (preg_match("\x60\x5e\x2f\x28\x5b\136\x2f\135\x2b\x29\50\x2f\56\x2a\x29\x3f\44\x60\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto scoeukeacygcksek;
        }
        goto myaiyaaageakqmmo;
        siomkcccqkcwgaqu:
        scoeukeacygcksek:
        goto oqmisuskgecyaawk;
        oqguaiwgeucmkcom:
        goto ukommkeiukekcgma;
        goto magqgeesoiimssqm;
        aoccksmyyggqkcky:
        
        $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\57\72\56\x2a\44\57", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek;
        goto eykyqqceouqecaay;
        myaiyaaageakqmmo:
        $xeciwimgioieayek = '';
        goto gkqyyayiqmugsyaa;
        oqmisuskgecyaawk:
        $xeciwimgioieayek = $migiiksoiymissge;
        goto auwaqagiqgaaokay;
        qgecoqswyiuaemaa:
        cymuyggaggcuccam:
        goto skcqayaekwqwqaog;
        gkqyyayiqmugsyaa:
        goto gisqqagakwuqqwmu;
        goto siomkcccqkcwgaqu;
        oeqeaumoegmcqggu:
    }
    
    public static function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, $iggwcmkgmicmouyu = true)
    {
        goto aagsqmuwcceoekiy;
        icweksgaqeuyayga:
        ocsucmwqukqsuysa:
        goto mqksmeugmqqymwyq;
        aagsqmuwcceoekiy:
        $ksaameoqigiaoigg = false;
        goto qmecmukycucewmuc;
        mqksmeugmqqymwyq:
        return $ksaameoqigiaoigg;
        goto aosoeekeggowekyq;
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
        oesqsgmommuakocy:
        if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) {
            goto gumwgoyaeiyuycyu;
        }
        goto kosawesakkoyqqsc;
        risykcskaqqgcggo:
        
        $emukumgmosiqkmyi = preg_replace("\x23\134\x70\173\x43\175\x2b\x7c\x5e\x5c\56\57\43\165", '', $mkomwsiykqigmqca);
        goto ouuqsaagueaqycca;
        ogiwiuueswweceyk:
        mokwauoickaioaye:
        goto oesqsgmommuakocy;
        kyeimqaqesssikke:
        
        $ucccueqywigcukcc = "\43\134\x2f\x2a\x5b\x5e\57\134\x2e\135\x2b\57\x5c\56\x5c\x2e\43\125\165";
        goto ogiwiuueswweceyk;
        ocamuiagiuuuweei:
        gumwgoyaeiyuycyu:
        goto uaiyoskyqyokucku;
        qqkwqsscgyeooigo:
        eesmuemgcicqwqks:
        goto kmgkqcqquaqqciqq;
        kosawesakkoyqqsc:
        $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi);
        goto wgyoiyqiuquismae;
        gcmawmaiimmygwuw:
        $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu);
        goto qqkwqsscgyeooigo;
        kmgkqcqquaqqciqq:
        return $emukumgmosiqkmyi;
        goto somgeamsciqieaoy;
        ouuqsaagueaqycca:
        
        $emukumgmosiqkmyi = preg_replace("\43\57\x5c\x2e\x28\77\75\57\51\174\x5e\x5c\x2e\x2f\x7c\134\56\57\44\43", '', $emukumgmosiqkmyi);
        goto kyeimqaqesssikke;
        imksuqmseeecckcm:
        if (!$mkomwsiykqigmqca) {
            goto eesmuemgcicqwqks;
        }
        goto risykcskaqqgcggo;
        uaiyoskyqyokucku:
        if (!preg_match("\43\x2f\x5c\56\x7b\x32\175\x7c\134\56\x7b\x32\175\57\x23", $emukumgmosiqkmyi)) {
            goto kgeucwqwmecqigmw;
        }
        goto qqaqeaoeosamukik;
        qqaqeaoeosamukik:
        throw new LogicException("\x50\x61\164\150\40\151\x73\x20\157\x75\164\163\151\144\145\x20\157\146\40\164\150\145\x20\x64\145\146\x69\x6e\x65\144\x20\162\157\157\x74\54\40\x70\x61\164\150\x3a\x20\x5b" . $mkomwsiykqigmqca . "\135\x2c\x20\x72\145\x73\x6f\x6c\x76\145\144\72\x20\133" . $emukumgmosiqkmyi . "\135");
        goto cwmwawskgukouegg;
        wgyoiyqiuquismae:
        goto mokwauoickaioaye;
        goto ocamuiagiuuuweei;
        cwmwawskgukouegg:
        kgeucwqwmecqigmw:
        goto gcmawmaiimmygwuw;
        umyagoaugskqauwe:
        $emukumgmosiqkmyi = null;
        goto imksuqmseeecckcm;
        somgeamsciqieaoy:
    }
}

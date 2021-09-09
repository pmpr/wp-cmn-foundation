<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto qyqooykaamoaesus;
        eosimooskuwmgmos:
        $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm);
        goto ocqoecksgquuykge;
        kukkasywyomwmsmk:
        $qgoggukmyiemssaa = md5(microtime()) . str_replace("\x2f", "\56", $cqiuiecmyyqkgeoa);
        goto iqgaoqmwygqmmkec;
        gsegyqscgigyukgu:
        $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}";
        goto aguakwoqsmugwoak;
        msusgccciugmiuyg:
        $mcqieaigyeeyaksm = ManipulateArray::get(explode("\54", $owyiccmocukoumyy), 1, $owyiccmocukoumyy);
        goto kaqwceweugaamoum;
        aguakwoqsmugwoak:
        
        Filesystem::symcgieuakksimmu()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu);
        goto scqwkakwckgyague;
        aqqemcmeecwwqsko:
        $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\160\141\164\150"]) . DIRECTORY_SEPARATOR;
        goto wecwqqioqyoeiuis;
        gmgyoacmaiewaoac:
        goto iyyaqmomewkukisu;
        goto wmqoikukcueyiywc;
        uwyyeysoawyoeyac:
        $ksaameoqigiaoigg = new WP_Error("\x75\160\154\157\x61\144\137\x66\x69\x6c\x65\137\x65\x72\x72\157\x72", $iswcokucwmiosiaq, ["\x73\x74\141\x74\165\163" => 401]);
        goto bkywsackiuwyyusa;
        gcsicyockcquyyqa:
        $esaqeawoigqgagum = ManipulateArray::get($ksaameoqigiaoigg, "\146\x69\x6c\145");
        goto yeuuueycmgkawkaa;
        yeuuueycmgkawkaa:
        $aiooqyausygaasqm = ["\147\x75\151\144" => $mqqeykegekqaumeq["\x75\162\154"] . "\x2f" . basename($esaqeawoigqgagum), "\160\157\x73\164\137\164\151\164\x6c\145" => preg_replace("\57\x5c\x2e\x5b\x5e\x2e\x5d\x2b\44\x2f", '', basename($esaqeawoigqgagum)), "\x70\157\163\164\x5f\163\x74\141\164\x75\163" => "\x69\x6e\150\x65\162\x69\x74", "\x70\x6f\x73\164\x5f\143\157\156\x74\x65\x6e\x74" => '', "\x70\157\163\164\x5f\155\151\x6d\145\137\164\x79\x70\x65" => ManipulateArray::get($ksaameoqigiaoigg, "\164\x79\x70\x65", $cqiuiecmyyqkgeoa)];
        goto cggumquuyqugeesk;
        iqgaoqmwygqmmkec:
        $mckmqeqaekwkwems = "\164\145\x6d\x70\55{$qgoggukmyiemssaa}";
        goto gsegyqscgigyukgu;
        kaqwceweugaamoum:
        $mcqieaigyeeyaksm = str_replace("\40", "\x2b", $mcqieaigyeeyaksm);
        goto eosimooskuwmgmos;
        bkywsackiuwyyusa:
        iyyaqmomewkukisu:
        goto mqmgyqiuosmuguem;
        mgsqgyigiqwgugia:
        if ($iswcokucwmiosiaq = ManipulateArray::get($ksaameoqigiaoigg, "\145\162\x72\x6f\x72")) {
            goto eowsciskwgisqqme;
        }
        goto gcsicyockcquyyqa;
        qyqooykaamoaesus:
        
        $mqqeykegekqaumeq = DecoratorFile::oemywwmmmiywiqai();
        goto aqqemcmeecwwqsko;
        ocqoecksgquuykge:
        $cqiuiecmyyqkgeoa = ManipulateArray::get($yyimiwcuegayoskq, "\155\151\x6d\145");
        goto kukkasywyomwmsmk;
        wmqoikukcueyiywc:
        eowsciskwgisqqme:
        goto uwyyeysoawyoeyac;
        mqmgyqiuosmuguem:
        return $ksaameoqigiaoigg;
        goto iiwackigmsuyuoqy;
        wecwqqioqyoeiuis:
        $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy);
        goto msusgccciugmiuyg;
        cggumquuyqugeesk:
        $ksaameoqigiaoigg = DecoratorAttachment::insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\x70\141\x74\150"]}\x2f{$qgoggukmyiemssaa}");
        goto gmgyoacmaiewaoac;
        iqqskeygigecekqu:
        $ksaameoqigiaoigg = DecoratorFile::qsyguaycgacaggsu($qogsmwakwacwqogk, ["\x74\145\163\164\x5f\146\x6f\x72\155" => false]);
        goto mgsqgyigiqwgugia;
        scqwkakwckgyague:
        $qogsmwakwacwqogk = ["\156\141\x6d\145" => $qgoggukmyiemssaa, "\x73\151\x7a\x65" => filesize($yoisseswouogeswg), "\164\171\160\145" => $cqiuiecmyyqkgeoa, "\145\x72\x72\x6f\162" => '', "\x74\155\160\x5f\x6e\x61\x6d\145" => $yoisseswouogeswg];
        goto iqqskeygigecekqu;
        iiwackigmsuyuoqy:
    }
    
    public static function wayeasoyaomiwwmc() : ?string
    {
        if (!function_exists("\x67\x65\164\137\150\x6f\155\145\x5f\160\x61\x74\x68")) {
            require_once ABSPATH . "\x77\160\55\x61\x64\155\151\x6e\57\x69\156\x63\154\x75\144\x65\163\57\x66\151\x6c\145\x2e\x70\150\160";
        }
        return get_home_path();
    }
    
    public static function eyqooeqgoyokqeoq($aiieyweysaukqemc)
    {
        goto cmqaeaeeeoegqyim;
        qmyecmoeeqqoamqg:
        try {
            goto gowgawiqowowuyyu;
            sseimukiaykwwuik:
            $oqkmoekaagukcwia = new \ReflectionClass($aiieyweysaukqemc);
            goto yaicgkaiwuygkcqa;
            gowgawiqowowuyyu:
            if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) {
                goto moykcgeaeaykkcww;
            }
            goto aeowoammyqciewcg;
            yaicgkaiwuygkcqa:
            $esaqeawoigqgagum = $oqkmoekaagukcwia->aueqceykakekkqiw();
            goto xaymqociikmsceme;
            xaymqociikmsceme:
            kqysyoyoyikeeego:
            goto ymakgqgsskogwyws;
            ykiieasagyuguuay:
            goto kqysyoyoyikeeego;
            goto gmcumcqkkcsoqcsc;
            gmcumcqkkcsoqcsc:
            moykcgeaeaykkcww:
            goto sseimukiaykwwuik;
            aeowoammyqciewcg:
            throw new Exception("{$aiieyweysaukqemc}\40\164\x79\x70\145\x20\x69\163\40\156\x6f\164\40\x76\x61\x6c\151\144\40\157\162\40\156\x61\155\x65\x73\x70\x61\x63\x65\x20\156\x6f\164\x20\x65\170\151\163\x74\56");
            goto ykiieasagyuguuay;
            ymakgqgsskogwyws:
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        goto umcogaoumuakucom;
        cmqaeaeeeoegqyim:
        $esaqeawoigqgagum = null;
        goto qmyecmoeeqqoamqg;
        umcogaoumuakucom:
        return $esaqeawoigqgagum;
        goto asseeqmyqkoeaskq;
        asseeqmyqkoeaskq:
    }
    
    public static function qucagkayiequsiia($egkyssmuqcwaciya) : ?string
    {
        goto aqgacyikaawcqiqm;
        ygmuakwqewcgyyak:
        return $smaiamkswqkisawm;
        goto myisgeeiuoywsqkq;
        cesmsqyqkgsescge:
        $esaqeawoigqgagum = self::eyqooeqgoyokqeoq($egkyssmuqcwaciya);
        goto ikswyasesgaaguys;
        aqgacyikaawcqiqm:
        $smaiamkswqkisawm = null;
        goto cesmsqyqkgsescge;
        cqecskkymmcameiq:
        euoqeougaweoqmeo:
        goto ygmuakwqewcgyyak;
        kkoigoyokmsgkgis:
        $smaiamkswqkisawm = basename($esaqeawoigqgagum);
        goto cqecskkymmcameiq;
        ikswyasesgaaguys:
        if (!$esaqeawoigqgagum) {
            goto euoqeougaweoqmeo;
        }
        goto kkoigoyokmsgkgis;
        myisgeeiuoywsqkq:
    }
    
    public static function iygwwosmmgmouoyc($mkomwsiykqigmqca)
    {
        return realpath("{$mkomwsiykqigmqca}\x2f\56\56\x2f\x2e\x2e\57\56\56\x2f\56\56\x2f");
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto egqwyumakkycowqo;
        ygsyeoosakgsomim:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto uamcieckykeiassa;
        uamcieckykeiassa:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\57\x64\157\167\156\154\157\x61\144\x2f{$ymacoouqwcqwwagu}\x2f";
        goto uaamuqocgwoemyuy;
        ogaeskkumaesgswm:
        if (!$aokagokqyuysuksm) {
            goto oiseckoawayouccm;
        }
        goto ygsyeoosakgsomim;
        kgukiymugqqessso:
        $aokagokqyuysuksm = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm);
        goto ogaeskkumaesgswm;
        wuwqskcgcqigqmwy:
        if (!$aiooqyausygaasqm) {
            goto oweyqcyoyyygksug;
        }
        goto kgukiymugqqessso;
        uaamuqocgwoemyuy:
        oiseckoawayouccm:
        goto ssyakyegksauyecg;
        ssyakyegksauyecg:
        oweyqcyoyyygksug:
        goto gyqqkseqwwamcekm;
        gyqqkseqwwamcekm:
        return $iwywmkygwewiamwm;
        goto wieagcysyweeycge;
        egqwyumakkycowqo:
        $iwywmkygwewiamwm = false;
        goto wuwqskcgcqigqmwy;
        wieagcysyweeycge:
    }
    
    public static function qceuosaqmmsiqkym(?string $miawkwqioaeasiig)
    {
        goto oykogwqgowegukuw;
        ymsywmgkoaceyeqc:
        return $oiegiwogmwmawkeo;
        goto yswwogckkiyakmge;
        ieeqmayskoskaceo:
        try {
            goto kcmaegoqmigeeocm;
            kcmaegoqmigeeocm:
            $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS));
            goto sowimsawimkeyica;
            yuoeiemogmmokwyi:
            cumegyygiaymmkgu:
            goto asmcgeacokqgagyo;
            sowimsawimkeyica:
            foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
                $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac();
                soecauuquauiygwe:
            }
            goto yuoeiemogmmokwyi;
            asmcgeacokqgagyo:
        } catch (Exception $iewosgggaueeyymg) {
            
        }
        goto ymsywmgkoaceyeqc;
        oykogwqgowegukuw:
        $oiegiwogmwmawkeo = 0;
        goto ieeqmayskoskaceo;
        yswwogckkiyakmge:
    }
    
    public static function qmgqwkwkuqaguewu($qogsmwakwacwqogk, $uusmaiomayssaecw = '')
    {
        $uqeyuwmcygawucoc = wp_check_filetype($qogsmwakwacwqogk);
        return ManipulateArray::get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc);
    }
    
    public static function ikeooymesgsuggoe($iuomscuiswckwcoe = false)
    {
        goto euisieyykuecqwck;
        wcaaskeywmuimuuc:
        return $qkkaqsuiooeayqeu;
        goto aeqkmkymmqiwyaoc;
        sgscymyaoiiomuey:
        meuomqeuiiuyqoio:
        goto wcaaskeywmuimuuc;
        gumaasmcagyskwuo:
        $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134";
        goto sgscymyaoiiomuey;
        euisieyykuecqwck:
        static $qkkaqsuiooeayqeu = null;
        goto qioesoiiiwmqiyuw;
        qioesoiiiwmqiyuw:
        if (!$iuomscuiswckwcoe) {
            goto yqasigyosycqcakw;
        }
        goto uwuaawwasggkossk;
        uwuaawwasggkossk:
        $qkkaqsuiooeayqeu = null;
        goto yuamwcksmgkyaayu;
        yuamwcksmgkyaayu:
        yqasigyosycqcakw:
        goto ymgciqyiaoeackyq;
        ymgciqyiaoeackyq:
        if (!is_null($qkkaqsuiooeayqeu)) {
            goto meuomqeuiiuyqoio;
        }
        goto gumaasmcagyskwuo;
        aeqkmkymmqiwyaoc:
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
        goto kegiaasueigcoucc;
        qkwaoikuioasioyg:
        $kgcswwyywoscuqqs = call_user_func($kgcswwyywoscuqqs);
        goto icecukasaccaeouo;
        kwwsqkaskggswock:
        acqsqiuqaouaccyg:
        goto acmoecmaeoycigam;
        gaywiqceooiguqea:
        ogaeyaaussqcqwcq:
        goto swmouimoiymygayk;
        smwcsmqwescekeec:
        if (!is_callable($kgcswwyywoscuqqs)) {
            goto qqyeockoeuowkook;
        }
        goto qkwaoikuioasioyg;
        ouaqyykiuuesmaom:
        if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) {
            goto ogaeyaaussqcqwcq;
        }
        goto gqkqmiageemgssym;
        gqkqmiageemgssym:
        global $is_apache;
        goto oueygmwqqkwiqmuw;
        oomcumcckcsgkeyg:
        goto wgscommumawcwgeq;
        goto sucwucwgwmusqcuc;
        icecukasaccaeouo:
        qqyeockoeuowkook:
        goto ymguoykwgqaosgyu;
        ieemimcomkyeykae:
        $esaqeawoigqgagum = self::wayeasoyaomiwwmc() . "\56\150\164\x61\143\x63\145\163\163";
        goto ooaokssiecgqamyw;
        oueygmwqqkwiqmuw:
        if (!$is_apache) {
            goto aqwimyousskkmmys;
        }
        goto wgiiqociegegkcmo;
        eceuioskggsqggkk:
        $ksaameoqigiaoigg = true;
        goto qsmkswggymakkaic;
        yywyeuokaqsgqgww:
        $iswcokucwmiosiaq = sprintf(__("\x54\x68\x65\40\56\x68\x74\141\143\x63\x65\163\x73\x20\x66\151\154\x65\40\x28\x25\x73\x29\40\143\x6f\165\x6c\144\40\156\x6f\x74\40\x62\x65\40\x65\x64\151\164\x65\x64\x2e\40\x43\x68\x65\x63\x6b\x20\x69\x66\x20\x74\x68\x65\40\x66\151\x6c\145\40\150\x61\163\x20\167\x72\151\164\x65\40\160\x65\162\155\151\x73\163\x69\157\x6e\163\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum, "\157\160\164\x2d\167\x72\x69\x74\145\55\x68\x74\141\x63\143\145\163\163");
        goto cygwuguggaeaqmiy;
        qsmkswggymakkaic:
        goto coweqcyciwygumgw;
        goto ccegeskegokuuqyc;
        ooaokssiecgqamyw:
        $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu();
        goto messaqosuqcuimms;
        acmoecmaeoycigam:
        umsuiwswwywqccec:
        goto uommseoowiuemkwk;
        kegiaasueigcoucc:
        $eouekqmooogkoqoo = "\57\x5c\163\52\43\40\x42\105\x47\x49\116\x20{$ymqmyyeuycgmigyo}\x2e\x2a\x23\40\105\116\104\40{$ymqmyyeuycgmigyo}\x5c\163\52\77\57\x69\x73\x55";
        goto wqqgkukmcmmiwwsg;
        messaqosuqcuimms:
        if ($iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) {
            goto gikeuuqaaqwesqmg;
        }
        goto omckgquqwygqseys;
        wgiiqociegegkcmo:
        if (!$iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) {
            goto umsuiwswwywqccec;
        }
        goto smwcsmqwescekeec;
        sucwucwgwmusqcuc:
        gikeuuqaaqwesqmg:
        goto oueimsmmmimceuai;
        ymguoykwgqaosgyu:
        if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) {
            goto acqsqiuqaouaccyg;
        }
        goto qqokkuaeeaeaaiok;
        wymaswukwyouumeq:
        return $ksaameoqigiaoigg;
        goto waakiqmaycwwqaeg;
        qqokkuaeeaeaaiok:
        if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) {
            goto gagsysekmycceycs;
        }
        goto eceuioskggsqggkk;
        oueimsmmmimceuai:
        $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto ouaqyykiuuesmaom;
        uommseoowiuemkwk:
        aqwimyousskkmmys:
        goto gaywiqceooiguqea;
        omckgquqwygqseys:
        $iswcokucwmiosiaq = "{$esaqeawoigqgagum}\x20\151\163\x20\x6e\157\164\40\x72\x65\141\x64\x61\142\x6c\x65\x2e";
        goto oomcumcckcsgkeyg;
        swmouimoiymygayk:
        wgscommumawcwgeq:
        goto wymaswukwyouumeq;
        wqqgkukmcmmiwwsg:
        $ksaameoqigiaoigg = false;
        goto ieemimcomkyeykae;
        ccegeskegokuuqyc:
        gagsysekmycceycs:
        goto yywyeuokaqsgqgww;
        cygwuguggaeaqmiy:
        coweqcyciwygumgw:
        goto kwwsqkaskggswock;
        waakiqmaycwwqaeg:
    }
    
    public static function usoyisqwsqsegiam(?string $migiiksoiymissge)
    {
        goto qyamaiwggysquoqs;
        ayewgikkscwoecua:
        kogcsisuicgkaesc:
        goto mqewgssacawiesua;
        esgwwakgieqcwaww:
        $migiiksoiymissge = trailingslashit($migiiksoiymissge);
        goto gyuyiouiquoaouim;
        gqmwuucgesayqego:
        geaeocmguomaqusc:
        goto kmmyoqogqymmuyys;
        yyuiuoisegweicus:
        $ykqmwuwqiskkmwuy = (string) parse_url(get_option("\x68\157\x6d\x65"), PHP_URL_HOST);
        goto syqcmauqkosgmcgc;
        ussmaqukmmwaigcy:
        eeeuamsiyssgwkyo:
        goto gaeawesmcgqyqeia;
        syqcmauqkosgmcgc:
        
        $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\57\72\x2e\52\x24\57", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek;
        goto mcqiycyaekmuwcoc;
        ggcamcsikeggkkeg:
        goto akeeueokwsssimaw;
        goto ayewgikkscwoecua;
        esmeekicsmoyumia:
        $xeciwimgioieayek = ManipulateString::quuwkeiwesaoqwom(["\x2e\x2e", "\x5c", "\151\x6e\x64\x65\x78\56\x70\x68\160"], preg_replace("\x2f\133\40\x3c\x3e\x27\134\42\x5c\162\x5c\156\134\x74\134\x28\134\x29\x5d\x2f", '', preg_replace("\57\50\134\x3f\x2e\52\51\x3f\50\43\x2e\x2a\x29\77\x24\57", '', $xeciwimgioieayek)));
        goto yyuiuoisegweicus;
        isiokmykwmgusmik:
        goto sescmkcssisuskoi;
        goto ussmaqukmmwaigcy;
        cweyecwwsaogsose:
        goto ssguwqmoegqekmsc;
        goto gqmwuucgesayqego;
        qumggamakkcwogeg:
        sescmkcssisuskoi:
        goto ggcamcsikeggkkeg;
        yyumokoqqeiwcewq:
        $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge);
        goto cweyecwwsaogsose;
        mcqiycyaekmuwcoc:
        $ymqmyyeuycgmigyo = str_replace(["\56\x2e", "\x25"], '', str_replace("\x2f\57", "\57", $ymqmyyeuycgmigyo));
        goto wcosqmqysmksggcm;
        iqkoueycskiymkma:
        if (preg_match("\x60\136\57\x28\133\x5e\57\x5d\53\51\50\57\x2e\52\x29\77\x24\140\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto eeeuamsiyssgwkyo;
        }
        goto saosqywwkuqysqgu;
        qyamaiwggysquoqs:
        $cgmkimaosyyuqeyg = trailingslashit(site_url());
        goto esgwwakgieqcwaww;
        memuioceggyeugoe:
        akeeueokwsssimaw:
        goto caemyqosyooeykya;
        gyuyiouiquoaouim:
        if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) {
            goto geaeocmguomaqusc;
        }
        goto yyumokoqqeiwcewq;
        caemyqosyooeykya:
        ssguwqmoegqekmsc:
        goto esmeekicsmoyumia;
        gaeawesmcgqyqeia:
        $xeciwimgioieayek = $migiiksoiymissge;
        goto qumggamakkcwogeg;
        wcosqmqysmksggcm:
        return $ymqmyyeuycgmigyo;
        goto mgywkkwakokscomi;
        mqewgssacawiesua:
        $xeciwimgioieayek = isset($meyiiwcswqmuggyg[3]) ? $meyiiwcswqmuggyg[3] : '';
        goto memuioceggyeugoe;
        kmmyoqogqymmuyys:
        if (preg_match("\x60\136\x28\x68\x74\164\x70\x73\x3f\x3a\51\x3f\57\x2f\50\133\136\x2f\135\53\x29\x28\57\56\52\x29\x3f\x24\x60\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto kogcsisuicgkaesc;
        }
        goto iqkoueycskiymkma;
        saosqywwkuqysqgu:
        $xeciwimgioieayek = '';
        goto isiokmykwmgusmik;
        mgywkkwakokscomi:
    }
    
    public static function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, $iggwcmkgmicmouyu = true)
    {
        goto eeuuyygswoueugwm;
        aeikksawqyowqasq:
        ewcusawuygquwqeg:
        goto uaowykkiuuygowuk;
        eeuuyygswoueugwm:
        $ksaameoqigiaoigg = false;
        goto uwioceoekowwawuu;
        cycqkkuiywsyeeum:
        $ksaameoqigiaoigg = $mkomwsiykqigmqca;
        goto aeikksawqyowqasq;
        uwioceoekowwawuu:
        if (!(self::wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $mkomwsiykqigmqca && $iggwcmkgmicmouyu && Filesystem::symcgieuakksimmu()->oquguuiseiwkawkw($mkomwsiykqigmqca))) {
            goto ewcusawuygquwqeg;
        }
        goto cycqkkuiywsyeeum;
        uaowykkiuuygowuk:
        return $ksaameoqigiaoigg;
        goto ymkwuiqgccecsouc;
        ymkwuiqgccecsouc:
    }
    
    public static function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR)
    {
        goto ggoccuougaayoawu;
        ycammcyquswuysew:
        
        $emukumgmosiqkmyi = preg_replace("\x23\x5c\160\x7b\103\175\x2b\174\x5e\x5c\56\x2f\x23\165", '', $mkomwsiykqigmqca);
        goto sakouuiukiouowiu;
        yswqswoyackicqoq:
        goto mcymkuaooaywgaqk;
        goto ockqoeuqcwgyqwca;
        tkqwawuyoceqgiuw:
        return $emukumgmosiqkmyi;
        goto cqoamosqiimaaiqa;
        sakouuiukiouowiu:
        
        $emukumgmosiqkmyi = preg_replace("\43\57\134\x2e\x28\77\x3d\57\x29\174\x5e\x5c\x2e\x2f\x7c\134\x2e\x2f\x24\43", '', $emukumgmosiqkmyi);
        goto ukkosocmcsgoyoqk;
        qroismwogguyugwe:
        if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) {
            goto mygoeeeakcqcckey;
        }
        goto qqcigicgmaciisso;
        ewygwsaaggyeqgou:
        mcymkuaooaywgaqk:
        goto qroismwogguyugwe;
        ggoccuougaayoawu:
        $emukumgmosiqkmyi = null;
        goto igsumksgcomuyyie;
        woeykqsoceymuaus:
        if (!preg_match("\x23\57\x5c\x2e\x7b\x32\175\174\134\56\173\62\x7d\x2f\x23", $emukumgmosiqkmyi)) {
            goto qicowuckymwwwkua;
        }
        goto oweaacksoisqumyk;
        igsumksgcomuyyie:
        if (!$mkomwsiykqigmqca) {
            goto uqowisomaymekaqk;
        }
        goto ycammcyquswuysew;
        ockqoeuqcwgyqwca:
        mygoeeeakcqcckey:
        goto woeykqsoceymuaus;
        oiaoakaqgkqqsmsm:
        uqowisomaymekaqk:
        goto tkqwawuyoceqgiuw;
        oweaacksoisqumyk:
        throw new LogicException("\x50\141\164\150\x20\x69\x73\x20\157\x75\164\x73\151\144\145\40\157\x66\40\x74\150\145\40\x64\145\x66\151\156\145\144\40\x72\x6f\157\164\x2c\x20\x70\x61\164\x68\x3a\x20\133" . $mkomwsiykqigmqca . "\x5d\54\40\162\x65\x73\157\x6c\x76\x65\144\72\40\133" . $emukumgmosiqkmyi . "\x5d");
        goto smsweaqgcukcumoe;
        qqcigicgmaciisso:
        $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi);
        goto yswqswoyackicqoq;
        ukkosocmcsgoyoqk:
        
        $ucccueqywigcukcc = "\43\134\57\x2a\x5b\x5e\x2f\x5c\56\x5d\53\57\134\x2e\134\56\x23\125\x75";
        goto ewygwsaaggyeqgou;
        smsweaqgcukcumoe:
        qicowuckymwwwkua:
        goto yqeceucomeekaiqq;
        yqeceucomeekaiqq:
        $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu);
        goto oiaoakaqgkqqsmsm;
        cqoamosqiimaaiqa:
    }
}

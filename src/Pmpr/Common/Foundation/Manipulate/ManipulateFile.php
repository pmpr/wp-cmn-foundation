<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto euisieyykuecqwck;
        wcaaskeywmuimuuc:
        $qgoggukmyiemssaa = md5(microtime()) . str_replace("\x2f", "\56", $cqiuiecmyyqkgeoa);
        goto aeqkmkymmqiwyaoc;
        ieemimcomkyeykae:
        meuomqeuiiuyqoio:
        goto ooaokssiecgqamyw;
        aqwimyousskkmmys:
        $esaqeawoigqgagum = ManipulateArray::get($ksaameoqigiaoigg, "\x66\151\x6c\145");
        goto ogaeyaaussqcqwcq;
        sgscymyaoiiomuey:
        $cqiuiecmyyqkgeoa = ManipulateArray::get($yyimiwcuegayoskq, "\x6d\x69\x6d\145");
        goto wcaaskeywmuimuuc;
        ymgciqyiaoeackyq:
        $mcqieaigyeeyaksm = str_replace("\x20", "\53", $mcqieaigyeeyaksm);
        goto gumaasmcagyskwuo;
        ogaeyaaussqcqwcq:
        $aiooqyausygaasqm = ["\x67\x75\x69\144" => $mqqeykegekqaumeq["\165\162\154"] . "\x2f" . basename($esaqeawoigqgagum), "\160\157\163\164\x5f\164\x69\164\154\145" => preg_replace("\x2f\x5c\x2e\133\136\56\135\53\44\57", '', basename($esaqeawoigqgagum)), "\x70\157\163\x74\x5f\163\x74\141\x74\165\163" => "\x69\x6e\150\145\162\151\x74", "\160\x6f\163\164\x5f\143\157\x6e\164\145\x6e\164" => '', "\160\x6f\163\164\x5f\x6d\x69\155\145\137\x74\171\160\x65" => ManipulateArray::get($ksaameoqigiaoigg, "\164\x79\x70\145", $cqiuiecmyyqkgeoa)];
        goto gikeuuqaaqwesqmg;
        qqyeockoeuowkook:
        $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}";
        goto gagsysekmycceycs;
        gikeuuqaaqwesqmg:
        $ksaameoqigiaoigg = DecoratorAttachment::insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq["\160\141\x74\150"]}\57{$qgoggukmyiemssaa}");
        goto wgscommumawcwgeq;
        ooaokssiecgqamyw:
        return $ksaameoqigiaoigg;
        goto messaqosuqcuimms;
        uwuaawwasggkossk:
        $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy);
        goto yuamwcksmgkyaayu;
        umsuiwswwywqccec:
        if ($iswcokucwmiosiaq = ManipulateArray::get($ksaameoqigiaoigg, "\145\162\x72\157\x72")) {
            goto yqasigyosycqcakw;
        }
        goto aqwimyousskkmmys;
        kegiaasueigcoucc:
        yqasigyosycqcakw:
        goto wqqgkukmcmmiwwsg;
        gagsysekmycceycs:
        
        Filesystem::symcgieuakksimmu()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu);
        goto coweqcyciwygumgw;
        yuamwcksmgkyaayu:
        $mcqieaigyeeyaksm = ManipulateArray::get(explode("\54", $owyiccmocukoumyy), 1, $owyiccmocukoumyy);
        goto ymgciqyiaoeackyq;
        qioesoiiiwmqiyuw:
        $usuwmommwquwiiia = str_replace("\x2f", DIRECTORY_SEPARATOR, $mqqeykegekqaumeq["\x70\x61\164\x68"]) . DIRECTORY_SEPARATOR;
        goto uwuaawwasggkossk;
        acqsqiuqaouaccyg:
        $ksaameoqigiaoigg = DecoratorFile::qsyguaycgacaggsu($qogsmwakwacwqogk, ["\164\145\163\x74\137\146\157\x72\x6d" => false]);
        goto umsuiwswwywqccec;
        euisieyykuecqwck:
        
        $mqqeykegekqaumeq = DecoratorFile::oemywwmmmiywiqai();
        goto qioesoiiiwmqiyuw;
        wgscommumawcwgeq:
        goto meuomqeuiiuyqoio;
        goto kegiaasueigcoucc;
        wqqgkukmcmmiwwsg:
        $ksaameoqigiaoigg = new WP_Error("\165\160\x6c\157\141\x64\x5f\x66\x69\154\x65\137\145\162\162\x6f\162", $iswcokucwmiosiaq, ["\x73\x74\141\164\165\163" => 401]);
        goto ieemimcomkyeykae;
        coweqcyciwygumgw:
        $qogsmwakwacwqogk = ["\x6e\x61\155\145" => $qgoggukmyiemssaa, "\x73\151\x7a\145" => filesize($yoisseswouogeswg), "\x74\171\160\145" => $cqiuiecmyyqkgeoa, "\x65\x72\162\x6f\x72" => '', "\164\x6d\160\137\x6e\141\155\145" => $yoisseswouogeswg];
        goto acqsqiuqaouaccyg;
        gumaasmcagyskwuo:
        $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm);
        goto sgscymyaoiiomuey;
        aeqkmkymmqiwyaoc:
        $mckmqeqaekwkwems = "\164\145\155\160\x2d{$qgoggukmyiemssaa}";
        goto qqyeockoeuowkook;
        messaqosuqcuimms:
    }
    
    public static function wayeasoyaomiwwmc() : ?string
    {
        if (!function_exists("\x67\145\x74\137\x68\157\155\x65\x5f\x70\x61\164\150")) {
            require_once ABSPATH . "\x77\160\x2d\x61\144\155\151\156\57\151\156\x63\154\x75\x64\x65\x73\x2f\146\x69\x6c\145\56\x70\150\160";
        }
        return get_home_path();
    }
    
    public static function eyqooeqgoyokqeoq($aiieyweysaukqemc)
    {
        goto icecukasaccaeouo;
        ymguoykwgqaosgyu:
        try {
            goto sucwucwgwmusqcuc;
            ouaqyykiuuesmaom:
            goto oomcumcckcsgkeyg;
            goto gqkqmiageemgssym;
            smwcsmqwescekeec:
            oomcumcckcsgkeyg:
            goto qkwaoikuioasioyg;
            oueimsmmmimceuai:
            throw new Exception("{$aiieyweysaukqemc}\x20\164\x79\160\x65\40\151\163\40\x6e\x6f\x74\x20\166\x61\154\151\144\x20\x6f\162\40\156\141\155\x65\163\160\x61\143\145\x20\156\x6f\164\40\145\x78\151\163\164\56");
            goto ouaqyykiuuesmaom;
            sucwucwgwmusqcuc:
            if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) {
                goto omckgquqwygqseys;
            }
            goto oueimsmmmimceuai;
            oueygmwqqkwiqmuw:
            $oqkmoekaagukcwia = new \ReflectionClass($aiieyweysaukqemc);
            goto wgiiqociegegkcmo;
            gqkqmiageemgssym:
            omckgquqwygqseys:
            goto oueygmwqqkwiqmuw;
            wgiiqociegegkcmo:
            $esaqeawoigqgagum = $oqkmoekaagukcwia->aueqceykakekkqiw();
            goto smwcsmqwescekeec;
            qkwaoikuioasioyg:
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        goto qqokkuaeeaeaaiok;
        qqokkuaeeaeaaiok:
        return $esaqeawoigqgagum;
        goto eceuioskggsqggkk;
        icecukasaccaeouo:
        $esaqeawoigqgagum = null;
        goto ymguoykwgqaosgyu;
        eceuioskggsqggkk:
    }
    
    public static function qucagkayiequsiia($egkyssmuqcwaciya) : ?string
    {
        goto ccegeskegokuuqyc;
        acmoecmaeoycigam:
        qsmkswggymakkaic:
        goto uommseoowiuemkwk;
        cygwuguggaeaqmiy:
        if (!$esaqeawoigqgagum) {
            goto qsmkswggymakkaic;
        }
        goto kwwsqkaskggswock;
        uommseoowiuemkwk:
        return $smaiamkswqkisawm;
        goto gaywiqceooiguqea;
        kwwsqkaskggswock:
        $smaiamkswqkisawm = basename($esaqeawoigqgagum);
        goto acmoecmaeoycigam;
        ccegeskegokuuqyc:
        $smaiamkswqkisawm = null;
        goto yywyeuokaqsgqgww;
        yywyeuokaqsgqgww:
        $esaqeawoigqgagum = self::eyqooeqgoyokqeoq($egkyssmuqcwaciya);
        goto cygwuguggaeaqmiy;
        gaywiqceooiguqea:
    }
    
    public static function iygwwosmmgmouoyc($mkomwsiykqigmqca)
    {
        return realpath("{$mkomwsiykqigmqca}\57\56\x2e\x2f\56\x2e\x2f\x2e\56\57\x2e\56\57");
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        goto waakiqmaycwwqaeg;
        eeeuamsiyssgwkyo:
        if (!$aiooqyausygaasqm) {
            goto wymaswukwyouumeq;
        }
        goto sescmkcssisuskoi;
        esgwwakgieqcwaww:
        return $iwywmkygwewiamwm;
        goto gyuyiouiquoaouim;
        kogcsisuicgkaesc:
        if (!$aokagokqyuysuksm) {
            goto swmouimoiymygayk;
        }
        goto akeeueokwsssimaw;
        waakiqmaycwwqaeg:
        $iwywmkygwewiamwm = false;
        goto eeeuamsiyssgwkyo;
        ssguwqmoegqekmsc:
        swmouimoiymygayk:
        goto qyamaiwggysquoqs;
        geaeocmguomaqusc:
        $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "\x2f\x64\157\167\x6e\x6c\x6f\x61\x64\x2f{$ymacoouqwcqwwagu}\x2f";
        goto ssguwqmoegqekmsc;
        sescmkcssisuskoi:
        $aokagokqyuysuksm = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm);
        goto kogcsisuicgkaesc;
        akeeueokwsssimaw:
        $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
        goto geaeocmguomaqusc;
        qyamaiwggysquoqs:
        wymaswukwyouumeq:
        goto esgwwakgieqcwaww;
        gyuyiouiquoaouim:
    }
    
    public static function qceuosaqmmsiqkym(?string $miawkwqioaeasiig)
    {
        goto isiokmykwmgusmik;
        gaeawesmcgqyqeia:
        return $oiegiwogmwmawkeo;
        goto qumggamakkcwogeg;
        ussmaqukmmwaigcy:
        try {
            goto gqmwuucgesayqego;
            kmmyoqogqymmuyys:
            foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
                $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac();
                cweyecwwsaogsose:
            }
            goto iqkoueycskiymkma;
            iqkoueycskiymkma:
            yyumokoqqeiwcewq:
            goto saosqywwkuqysqgu;
            gqmwuucgesayqego:
            $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS));
            goto kmmyoqogqymmuyys;
            saosqywwkuqysqgu:
        } catch (Exception $iewosgggaueeyymg) {
            
        }
        goto gaeawesmcgqyqeia;
        isiokmykwmgusmik:
        $oiegiwogmwmawkeo = 0;
        goto ussmaqukmmwaigcy;
        qumggamakkcwogeg:
    }
    
    public static function qmgqwkwkuqaguewu($qogsmwakwacwqogk, $uusmaiomayssaecw = '')
    {
        $uqeyuwmcygawucoc = wp_check_filetype($qogsmwakwacwqogk);
        return ManipulateArray::get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc);
    }
    
    public static function ikeooymesgsuggoe($iuomscuiswckwcoe = false)
    {
        goto mqewgssacawiesua;
        mqewgssacawiesua:
        static $qkkaqsuiooeayqeu = null;
        goto memuioceggyeugoe;
        memuioceggyeugoe:
        if (!$iuomscuiswckwcoe) {
            goto ggcamcsikeggkkeg;
        }
        goto caemyqosyooeykya;
        syqcmauqkosgmcgc:
        $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === "\134";
        goto mcqiycyaekmuwcoc;
        caemyqosyooeykya:
        $qkkaqsuiooeayqeu = null;
        goto esmeekicsmoyumia;
        yyuiuoisegweicus:
        if (!is_null($qkkaqsuiooeayqeu)) {
            goto ayewgikkscwoecua;
        }
        goto syqcmauqkosgmcgc;
        mcqiycyaekmuwcoc:
        ayewgikkscwoecua:
        goto wcosqmqysmksggcm;
        wcosqmqysmksggcm:
        return $qkkaqsuiooeayqeu;
        goto mgywkkwakokscomi;
        esmeekicsmoyumia:
        ggcamcsikeggkkeg:
        goto yyuiuoisegweicus;
        mgywkkwakokscomi:
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
        goto qicowuckymwwwkua;
        oiaoakaqgkqqsmsm:
        if (!(is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs))) {
            goto cycqkkuiywsyeeum;
        }
        goto tkqwawuyoceqgiuw;
        yswqswoyackicqoq:
        global $is_apache;
        goto ockqoeuqcwgyqwca;
        dsqoacgyuawacuwu:
        return $ksaameoqigiaoigg;
        goto maocyeeeecsocswc;
        csmcekewikymocqy:
        uwioceoekowwawuu:
        goto wuqwkggewcusmauu;
        qicowuckymwwwkua:
        $eouekqmooogkoqoo = "\x2f\134\163\x2a\43\x20\102\105\x47\111\x4e\40{$ymqmyyeuycgmigyo}\x2e\52\x23\40\x45\x4e\104\x20{$ymqmyyeuycgmigyo}\x5c\163\x2a\x3f\x2f\x69\x73\x55";
        goto uqowisomaymekaqk;
        isymggoseycccwew:
        ymkwuiqgccecsouc:
        goto gokiwsqcmkkwkimq;
        smsweaqgcukcumoe:
        $kgcswwyywoscuqqs = call_user_func($kgcswwyywoscuqqs);
        goto yqeceucomeekaiqq;
        oweaacksoisqumyk:
        if (!is_callable($kgcswwyywoscuqqs)) {
            goto ewcusawuygquwqeg;
        }
        goto smsweaqgcukcumoe;
        uqowisomaymekaqk:
        $ksaameoqigiaoigg = false;
        goto ggoccuougaayoawu;
        wuqwkggewcusmauu:
        cycqkkuiywsyeeum:
        goto aqueeyiaoekcmqac;
        ukkosocmcsgoyoqk:
        goto mcymkuaooaywgaqk;
        goto ewygwsaaggyeqgou;
        sakouuiukiouowiu:
        $iswcokucwmiosiaq = "{$esaqeawoigqgagum}\40\x69\x73\x20\x6e\157\164\40\162\x65\141\x64\x61\x62\154\145\56";
        goto ukkosocmcsgoyoqk;
        qqcigicgmaciisso:
        if (preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) {
            goto ymkwuiqgccecsouc;
        }
        goto yswqswoyackicqoq;
        aqueeyiaoekcmqac:
        aeikksawqyowqasq:
        goto wosegmwqcksaemkg;
        iyuiyscqgeeyuggw:
        $iswcokucwmiosiaq = sprintf(__("\x54\x68\145\40\56\150\x74\141\x63\x63\x65\163\x73\40\146\151\154\x65\x20\50\x25\163\51\x20\x63\157\165\x6c\144\x20\156\157\x74\x20\142\145\40\x65\144\x69\x74\x65\144\x2e\x20\x43\x68\145\143\153\x20\x69\146\40\164\x68\145\40\x66\151\154\145\40\x68\141\163\x20\x77\162\x69\x74\145\40\x70\145\162\155\151\163\163\x69\x6f\x6e\163\56", PR__CMN__FOUNDATION), $esaqeawoigqgagum, "\x6f\x70\x74\55\167\162\x69\x74\x65\x2d\x68\x74\x61\x63\143\145\163\x73");
        goto csmcekewikymocqy;
        ockqoeuqcwgyqwca:
        if (!$is_apache) {
            goto uaowykkiuuygowuk;
        }
        goto woeykqsoceymuaus;
        ycammcyquswuysew:
        if ($iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) {
            goto mygoeeeakcqcckey;
        }
        goto sakouuiukiouowiu;
        ggoccuougaayoawu:
        $esaqeawoigqgagum = self::wayeasoyaomiwwmc() . "\56\150\164\x61\x63\x63\x65\x73\163";
        goto igsumksgcomuyyie;
        wosegmwqcksaemkg:
        uaowykkiuuygowuk:
        goto isymggoseycccwew;
        woeykqsoceymuaus:
        if (!$iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) {
            goto aeikksawqyowqasq;
        }
        goto oweaacksoisqumyk;
        gokiwsqcmkkwkimq:
        mcymkuaooaywgaqk:
        goto dsqoacgyuawacuwu;
        igsumksgcomuyyie:
        $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu();
        goto ycammcyquswuysew;
        ewygwsaaggyeqgou:
        mygoeeeakcqcckey:
        goto qroismwogguyugwe;
        okowaykucseuwkwa:
        goto uwioceoekowwawuu;
        goto wsiueiimkueqgwmm;
        wsiueiimkueqgwmm:
        eeuuyygswoueugwm:
        goto iyuiyscqgeeyuggw;
        cqoamosqiimaaiqa:
        $ksaameoqigiaoigg = true;
        goto okowaykucseuwkwa;
        tkqwawuyoceqgiuw:
        if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) {
            goto eeuuyygswoueugwm;
        }
        goto cqoamosqiimaaiqa;
        qroismwogguyugwe:
        $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        goto qqcigicgmaciisso;
        yqeceucomeekaiqq:
        ewcusawuygquwqeg:
        goto oiaoakaqgkqqsmsm;
        maocyeeeecsocswc:
    }
    
    public static function usoyisqwsqsegiam(?string $migiiksoiymissge)
    {
        goto ukommkeiukekcgma;
        oqmisuskgecyaawk:
        ggekiiiaukmmqwos:
        goto auwaqagiqgaaokay;
        geueeskaygegaoey:
        mieskyceqaogywui:
        goto myaiyaaageakqmmo;
        yegwcckcwuwoiyay:
        $xeciwimgioieayek = ManipulateString::quuwkeiwesaoqwom(["\x2e\x2e", "\x5c", "\151\156\144\145\170\56\160\x68\x70"], preg_replace("\x2f\133\x20\x3c\76\47\x5c\42\x5c\162\134\156\x5c\x74\134\50\x5c\x29\135\x2f", '', preg_replace("\x2f\50\134\77\x2e\52\51\77\x28\x23\56\52\51\77\44\57", '', $xeciwimgioieayek)));
        goto eaicaiacqyiciycw;
        eaicaiacqyiciycw:
        $ykqmwuwqiskkmwuy = (string) parse_url(get_option("\x68\157\x6d\x65"), PHP_URL_HOST);
        goto qgecoqswyiuaemaa;
        qgecoqswyiuaemaa:
        
        $ymqmyyeuycgmigyo = trailingslashit(preg_replace("\x2f\x3a\56\x2a\44\57", '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek;
        goto skcqayaekwqwqaog;
        uougqksswaquemag:
        $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge);
        goto cmiammcmeegquuus;
        gkqyyayiqmugsyaa:
        oueaiaquokwususi:
        goto siomkcccqkcwgaqu;
        muiyqmkywcmyuscg:
        gisqqagakwuqqwmu:
        goto ywowsisqociesyoc;
        sswckucqiaiaoqwm:
        if (preg_match("\140\136\57\50\133\x5e\x2f\x5d\x2b\51\50\x2f\x2e\x2a\51\x3f\x24\140\151", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto mieskyceqaogywui;
        }
        goto qmkeeewoecwwqiqe;
        auwaqagiqgaaokay:
        $xeciwimgioieayek = isset($meyiiwcswqmuggyg[3]) ? $meyiiwcswqmuggyg[3] : '';
        goto oqguaiwgeucmkcom;
        myaiyaaageakqmmo:
        $xeciwimgioieayek = $migiiksoiymissge;
        goto gkqyyayiqmugsyaa;
        skcqayaekwqwqaog:
        $ymqmyyeuycgmigyo = str_replace(["\56\x2e", "\45"], '', str_replace("\x2f\57", "\x2f", $ymqmyyeuycgmigyo));
        goto gquswkgymisikkei;
        siomkcccqkcwgaqu:
        goto scoeukeacygcksek;
        goto oqmisuskgecyaawk;
        acyogacouuiocoak:
        goto oueaiaquokwususi;
        goto geueeskaygegaoey;
        ywowsisqociesyoc:
        if (preg_match("\x60\136\x28\150\x74\164\x70\x73\x3f\x3a\x29\77\57\x2f\x28\133\136\57\x5d\53\x29\50\x2f\x2e\x2a\x29\77\x24\x60\x69", $migiiksoiymissge, $meyiiwcswqmuggyg)) {
            goto ggekiiiaukmmqwos;
        }
        goto sswckucqiaiaoqwm;
        ukommkeiukekcgma:
        $cgmkimaosyyuqeyg = trailingslashit(site_url());
        goto ekeuymuiemykseqq;
        ekeuymuiemykseqq:
        $migiiksoiymissge = trailingslashit($migiiksoiymissge);
        goto cymuyggaggcuccam;
        gquswkgymisikkei:
        return $ymqmyyeuycgmigyo;
        goto aoccksmyyggqkcky;
        oqguaiwgeucmkcom:
        scoeukeacygcksek:
        goto magqgeesoiimssqm;
        cmiammcmeegquuus:
        goto oyoemceiucoymamk;
        goto muiyqmkywcmyuscg;
        magqgeesoiimssqm:
        oyoemceiucoymamk:
        goto yegwcckcwuwoiyay;
        cymuyggaggcuccam:
        if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) {
            goto gisqqagakwuqqwmu;
        }
        goto uougqksswaquemag;
        qmkeeewoecwwqiqe:
        $xeciwimgioieayek = '';
        goto acyogacouuiocoak;
        aoccksmyyggqkcky:
    }
    
    public static function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, $iggwcmkgmicmouyu = true)
    {
        goto ygaquwoyiuyeicse;
        ygaquwoyiuyeicse:
        $ksaameoqigiaoigg = false;
        goto oeqeaumoegmcqggu;
        aagsqmuwcceoekiy:
        eykyqqceouqecaay:
        goto qmecmukycucewmuc;
        ocsucmwqukqsuysa:
        $ksaameoqigiaoigg = $mkomwsiykqigmqca;
        goto aagsqmuwcceoekiy;
        qmecmukycucewmuc:
        return $ksaameoqigiaoigg;
        goto eqcgikyyuauqeusk;
        oeqeaumoegmcqggu:
        if (!(self::wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $mkomwsiykqigmqca && $iggwcmkgmicmouyu && Filesystem::symcgieuakksimmu()->oquguuiseiwkawkw($mkomwsiykqigmqca))) {
            goto eykyqqceouqecaay;
        }
        goto ocsucmwqukqsuysa;
        eqcgikyyuauqeusk:
    }
    
    public static function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR)
    {
        goto mokwauoickaioaye;
        kgeucwqwmecqigmw:
        if (!$mkomwsiykqigmqca) {
            goto gumwgoyaeiyuycyu;
        }
        goto eesmuemgcicqwqks;
        eesmuemgcicqwqks:
        
        $emukumgmosiqkmyi = preg_replace("\43\x5c\x70\173\x43\x7d\x2b\174\136\134\56\x2f\x23\x75", '', $mkomwsiykqigmqca);
        goto umyagoaugskqauwe;
        kyeimqaqesssikke:
        $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi);
        goto ogiwiuueswweceyk;
        mokwauoickaioaye:
        $emukumgmosiqkmyi = null;
        goto kgeucwqwmecqigmw;
        umyagoaugskqauwe:
        
        $emukumgmosiqkmyi = preg_replace("\x23\x2f\x5c\x2e\x28\77\x3d\x2f\x29\174\x5e\134\x2e\57\x7c\134\x2e\x2f\x24\43", '', $emukumgmosiqkmyi);
        goto imksuqmseeecckcm;
        uaiyoskyqyokucku:
        $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu);
        goto qqaqeaoeosamukik;
        ocamuiagiuuuweei:
        aosoeekeggowekyq:
        goto uaiyoskyqyokucku;
        kosawesakkoyqqsc:
        if (!preg_match("\x23\57\x5c\56\x7b\x32\x7d\174\x5c\56\x7b\x32\175\x2f\x23", $emukumgmosiqkmyi)) {
            goto aosoeekeggowekyq;
        }
        goto wgyoiyqiuquismae;
        cwmwawskgukouegg:
        return $emukumgmosiqkmyi;
        goto gcmawmaiimmygwuw;
        ouuqsaagueaqycca:
        if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) {
            goto icweksgaqeuyayga;
        }
        goto kyeimqaqesssikke;
        ogiwiuueswweceyk:
        goto mqksmeugmqqymwyq;
        goto oesqsgmommuakocy;
        oesqsgmommuakocy:
        icweksgaqeuyayga:
        goto kosawesakkoyqqsc;
        risykcskaqqgcggo:
        mqksmeugmqqymwyq:
        goto ouuqsaagueaqycca;
        imksuqmseeecckcm:
        
        $ucccueqywigcukcc = "\43\x5c\x2f\x2a\x5b\136\x2f\x5c\x2e\135\53\57\134\x2e\x5c\x2e\43\125\165";
        goto risykcskaqqgcggo;
        qqaqeaoeosamukik:
        gumwgoyaeiyuycyu:
        goto cwmwawskgukouegg;
        wgyoiyqiuquismae:
        throw new LogicException("\x50\x61\x74\150\40\151\x73\40\x6f\x75\164\x73\x69\x64\x65\x20\x6f\x66\40\164\150\145\40\x64\145\x66\151\156\x65\x64\x20\162\x6f\157\164\x2c\40\x70\x61\164\x68\x3a\40\x5b" . $mkomwsiykqigmqca . "\135\x2c\x20\162\x65\x73\157\154\x76\145\144\x3a\40\x5b" . $emukumgmosiqkmyi . "\135");
        goto ocamuiagiuuuweei;
        gcmawmaiimmygwuw:
    }
}

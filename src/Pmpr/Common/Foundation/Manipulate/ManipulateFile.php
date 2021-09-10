<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        $qkuqsuugayciskek = false;
        if ($mcowwqgmkuemoumu instanceof DirectoryIterator) {
            
            $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDot();
        }
        return $qkuqsuugayciskek;
    }
    
    public static function mecmkmogggamegic($mcowwqgmkuemoumu) : bool
    {
        $mecmkmogggamegic = false;
        if ($mcowwqgmkuemoumu instanceof DirectoryIterator) {
            
            $mecmkmogggamegic = $mcowwqgmkuemoumu->isFile();
        }
        return $mecmkmogggamegic;
    }
    
    public static function scikcaaaiwcsqowm($mcowwqgmkuemoumu) : ?string
    {
        $yooeiwgeaoeyusyy = null;
        if ($mcowwqgmkuemoumu instanceof DirectoryIterator) {
            
            $yooeiwgeaoeyusyy = $mcowwqgmkuemoumu->getPathname();
        }
        return $yooeiwgeaoeyusyy;
    }
    
    public static function awosikuiguowiumy($mcowwqgmkuemoumu) : int
    {
        $emqekiqqyiwqigsg = 0;
        if ($mcowwqgmkuemoumu instanceof DirectoryIterator) {
            
            $emqekiqqyiwqigsg = $mcowwqgmkuemoumu->getCTime();
        }
        return $emqekiqqyiwqigsg;
    }
    
    public static function oagwcgcemwwykokc($mcowwqgmkuemoumu) : bool
    {
        $qkuqsuugayciskek = false;
        if ($mcowwqgmkuemoumu instanceof DirectoryIterator) {
            
            $qkuqsuugayciskek = $mcowwqgmkuemoumu->isDir();
        }
        return $qkuqsuugayciskek;
    }
    
    public static function amqagusacuuuaswg($mcowwqgmkuemoumu) : ?string
    {
        $mkomwsiykqigmqca = null;
        if ($mcowwqgmkuemoumu instanceof DirectoryIterator) {
            
            $mkomwsiykqigmqca = $mcowwqgmkuemoumu->getPath();
        }
        return $mkomwsiykqigmqca;
    }
    
    public static function mawoacksgosuccme($mcowwqgmkuemoumu) : ?string
    {
        $wkcwykowmmmwioqs = null;
        if ($mcowwqgmkuemoumu instanceof DirectoryIterator) {
            
            $wkcwykowmmmwioqs = $mcowwqgmkuemoumu->getFilename();
        }
        return $wkcwykowmmmwioqs;
    }
    
    public static function csksiiecqkeecwqm($mcowwqgmkuemoumu) : ?string
    {
        $yucgcsieomwqgwws = null;
        if ($mcowwqgmkuemoumu instanceof DirectoryIterator) {
            
            $yucgcsieomwqgwws = $mcowwqgmkuemoumu->getExtension();
        }
        return $yucgcsieomwqgwws;
    }
    
    public static function lausiwamsokkqguo($owyiccmocukoumyy)
    {
        
        $mqqeykegekqaumeq = DecoratorFile::oemywwmmmiywiqai();
        $usuwmommwquwiiia = str_replace('/', DIRECTORY_SEPARATOR, $mqqeykegekqaumeq['path']) . DIRECTORY_SEPARATOR;
        $yyimiwcuegayoskq = getimagesize($owyiccmocukoumyy);
        $mcqieaigyeeyaksm = ManipulateArray::get(explode(',', $owyiccmocukoumyy), 1, $owyiccmocukoumyy);
        $mcqieaigyeeyaksm = str_replace(' ', '+', $mcqieaigyeeyaksm);
        $smecmmgoykqcaieu = base64_decode($mcqieaigyeeyaksm);
        $cqiuiecmyyqkgeoa = ManipulateArray::get($yyimiwcuegayoskq, 'mime');
        $qgoggukmyiemssaa = md5(microtime()) . str_replace('/', '.', $cqiuiecmyyqkgeoa);
        $mckmqeqaekwkwems = "temp-{$qgoggukmyiemssaa}";
        $yoisseswouogeswg = "{$usuwmommwquwiiia}{$mckmqeqaekwkwems}";
        
        Filesystem::symcgieuakksimmu()->kwsmkgyoyaqecwuu($yoisseswouogeswg, $smecmmgoykqcaieu);
        $qogsmwakwacwqogk = ['name' => $qgoggukmyiemssaa, 'size' => filesize($yoisseswouogeswg), 'type' => $cqiuiecmyyqkgeoa, 'error' => '', 'tmp_name' => $yoisseswouogeswg];
        $ksaameoqigiaoigg = DecoratorFile::qsyguaycgacaggsu($qogsmwakwacwqogk, ['test_form' => false]);
        if ($iswcokucwmiosiaq = ManipulateArray::get($ksaameoqigiaoigg, 'error')) {
            $ksaameoqigiaoigg = new WP_Error('upload_file_error', $iswcokucwmiosiaq, ['status' => 401]);
        } else {
            $esaqeawoigqgagum = ManipulateArray::get($ksaameoqigiaoigg, 'file');
            $aiooqyausygaasqm = ['guid' => $mqqeykegekqaumeq['url'] . '/' . basename($esaqeawoigqgagum), 'post_title' => preg_replace('/\\.[^.]+$/', '', basename($esaqeawoigqgagum)), 'post_status' => 'inherit', 'post_content' => '', 'post_mime_type' => ManipulateArray::get($ksaameoqigiaoigg, 'type', $cqiuiecmyyqkgeoa)];
            $ksaameoqigiaoigg = DecoratorAttachment::insert($aiooqyausygaasqm, "{$mqqeykegekqaumeq['path']}/{$qgoggukmyiemssaa}");
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function wayeasoyaomiwwmc() : ?string
    {
        if (!function_exists('get_home_path')) {
            require_once ABSPATH . 'wp-admin/includes/file.php';
        }
        return get_home_path();
    }
    
    public static function eyqooeqgoyokqeoq($aiieyweysaukqemc)
    {
        $esaqeawoigqgagum = null;
        try {
            if (class_exists($aiieyweysaukqemc) || interface_exists($aiieyweysaukqemc) || trait_exists($aiieyweysaukqemc)) {
                $oqkmoekaagukcwia = new \ReflectionClass($aiieyweysaukqemc);
                $esaqeawoigqgagum = $oqkmoekaagukcwia->aueqceykakekkqiw();
            } else {
                throw new Exception("{$aiieyweysaukqemc} type is not valid or namespace not exist.");
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            
        }
        return $esaqeawoigqgagum;
    }
    
    public static function qucagkayiequsiia($egkyssmuqcwaciya) : ?string
    {
        $smaiamkswqkisawm = null;
        $esaqeawoigqgagum = self::eyqooeqgoyokqeoq($egkyssmuqcwaciya);
        if ($esaqeawoigqgagum) {
            $smaiamkswqkisawm = basename($esaqeawoigqgagum);
        }
        return $smaiamkswqkisawm;
    }
    
    public static function iygwwosmmgmouoyc($mkomwsiykqigmqca)
    {
        return realpath("{$mkomwsiykqigmqca}/../../../../");
    }
    
    public static function yucssysgmisaquki($aiooqyausygaasqm)
    {
        $iwywmkygwewiamwm = false;
        if ($aiooqyausygaasqm) {
            $aokagokqyuysuksm = ManipulateAttachment::mwikyscisascoeea($aiooqyausygaasqm);
            if ($aokagokqyuysuksm) {
                $ymacoouqwcqwwagu = ManipulateString::crypt($aokagokqyuysuksm, true);
                $iwywmkygwewiamwm = untrailingslashit(ManipulateServer::gmigwwwmwemyaayy()) . "/download/{$ymacoouqwcqwwagu}/";
            }
        }
        return $iwywmkygwewiamwm;
    }
    
    public static function qceuosaqmmsiqkym(?string $miawkwqioaeasiig) : int
    {
        $oiegiwogmwmawkeo = 0;
        try {
            $ucasskoyoewwmmii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($miawkwqioaeasiig, FilesystemIterator::SKIP_DOTS));
            foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) {
                
                $oiegiwogmwmawkeo += $qogsmwakwacwqogk->zogeyqyeqyusumac();
                emauuoieewwoeyqq:
            }
            kwsqgqmwyyeykgum:
        } catch (Exception $iewosgggaueeyymg) {
            
        }
        return $oiegiwogmwmawkeo;
    }
    
    public static function qmgqwkwkuqaguewu($qogsmwakwacwqogk, $uusmaiomayssaecw = '')
    {
        $uqeyuwmcygawucoc = wp_check_filetype($qogsmwakwacwqogk);
        return ManipulateArray::get($uqeyuwmcygawucoc, $uusmaiomayssaecw, $uqeyuwmcygawucoc);
    }
    
    public static function ikeooymesgsuggoe($iuomscuiswckwcoe = false)
    {
        static $qkkaqsuiooeayqeu = null;
        if ($iuomscuiswckwcoe) {
            $qkkaqsuiooeayqeu = null;
        }
        if (is_null($qkkaqsuiooeayqeu)) {
            $qkkaqsuiooeayqeu = DIRECTORY_SEPARATOR === '\\';
        }
        return $qkkaqsuiooeayqeu;
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
        $eouekqmooogkoqoo = "/\\s*# BEGIN {$ymqmyyeuycgmigyo}.*# END {$ymqmyyeuycgmigyo}\\s*?/isU";
        $ksaameoqigiaoigg = false;
        $esaqeawoigqgagum = self::wayeasoyaomiwwmc() . '.htaccess';
        $iiaumsgauuyeqksw = Filesystem::symcgieuakksimmu();
        if ($iiaumsgauuyeqksw->coeoweawgagkycwe($esaqeawoigqgagum)) {
            $kkeqqamysgasaeyi = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
            if (!preg_match($eouekqmooogkoqoo, $kkeqqamysgasaeyi)) {
                global $is_apache;
                if ($is_apache) {
                    if ($iiaumsgauuyeqksw->qygmgeswucmcmaiu($esaqeawoigqgagum)) {
                        if (is_callable($kgcswwyywoscuqqs)) {
                            $kgcswwyywoscuqqs = call_user_func($kgcswwyywoscuqqs);
                        }
                        if (is_array($kgcswwyywoscuqqs) || is_string($kgcswwyywoscuqqs)) {
                            if (!insert_with_markers($esaqeawoigqgagum, $ymqmyyeuycgmigyo, $kgcswwyywoscuqqs)) {
                                $iswcokucwmiosiaq = sprintf(__('The .htaccess file (%s) could not be edited. Check if the file has write permissions.', PR__CMN__FOUNDATION), $esaqeawoigqgagum, 'opt-write-htaccess');
                            } else {
                                $ksaameoqigiaoigg = true;
                            }
                        }
                    }
                }
            }
        } else {
            $iswcokucwmiosiaq = "{$esaqeawoigqgagum} is not readable.";
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function usoyisqwsqsegiam(?string $migiiksoiymissge)
    {
        $cgmkimaosyyuqeyg = trailingslashit(site_url());
        $migiiksoiymissge = trailingslashit($migiiksoiymissge);
        if (false === strpos($migiiksoiymissge, $cgmkimaosyyuqeyg)) {
            if (preg_match('`^(https?:)?//([^/]+)(/.*)?$`i', $migiiksoiymissge, $meyiiwcswqmuggyg)) {
                $xeciwimgioieayek = isset($meyiiwcswqmuggyg[3]) ? $meyiiwcswqmuggyg[3] : '';
            } else {
                if (preg_match('`^/([^/]+)(/.*)?$`i', $migiiksoiymissge, $meyiiwcswqmuggyg)) {
                    $xeciwimgioieayek = $migiiksoiymissge;
                } else {
                    $xeciwimgioieayek = '';
                }
            }
        } else {
            $xeciwimgioieayek = str_replace($cgmkimaosyyuqeyg, '', $migiiksoiymissge);
        }
        $xeciwimgioieayek = ManipulateString::quuwkeiwesaoqwom(['..', '\\', 'index.php'], preg_replace('/[ <>\'\\"\\r\\n\\t\\(\\)]/', '', preg_replace("/(\\?.*)?(#.*)?\$/", '', $xeciwimgioieayek)));
        $ykqmwuwqiskkmwuy = (string) parse_url(get_option('home'), PHP_URL_HOST);
        
        $ymqmyyeuycgmigyo = trailingslashit(preg_replace('/:.*$/', '', $ykqmwuwqiskkmwuy)) . $xeciwimgioieayek;
        $ymqmyyeuycgmigyo = str_replace(['..', '%'], '', str_replace('//', '/', $ymqmyyeuycgmigyo));
        return $ymqmyyeuycgmigyo;
    }
    
    public static function koymmiyegyskqgck($ymqmyyeuycgmigyo, $mkomwsiykqigmqca, $iggwcmkgmicmouyu = true)
    {
        $ksaameoqigiaoigg = false;
        if (self::wwckmeoskuagomki($ymqmyyeuycgmigyo, $mkomwsiykqigmqca) && $mkomwsiykqigmqca && $iggwcmkgmicmouyu && Filesystem::symcgieuakksimmu()->oquguuiseiwkawkw($mkomwsiykqigmqca)) {
            $ksaameoqigiaoigg = $mkomwsiykqigmqca;
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function cgwcgscqeqauaagi(?string $mkomwsiykqigmqca, string $geqcesmqwkeayoiu = DIRECTORY_SEPARATOR)
    {
        $emukumgmosiqkmyi = null;
        if ($mkomwsiykqigmqca) {
            
            $emukumgmosiqkmyi = preg_replace('#\\p{C}+|^\\./#u', '', $mkomwsiykqigmqca);
            
            $emukumgmosiqkmyi = preg_replace('#/\\.(?=/)|^\\./|\\./$#', '', $emukumgmosiqkmyi);
            
            $ucccueqywigcukcc = '#\\/*[^/\\.]+/\\.\\.#Uu';
            ekakkiuuquqkccse:
            if (!preg_match($ucccueqywigcukcc, $emukumgmosiqkmyi)) {
                goto koukiyqaccegmquc;
            }
            $emukumgmosiqkmyi = preg_replace($ucccueqywigcukcc, '', $emukumgmosiqkmyi);
            goto ekakkiuuquqkccse;
            koukiyqaccegmquc:
            if (preg_match('#/\\.{2}|\\.{2}/#', $emukumgmosiqkmyi)) {
                throw new LogicException('Path is outside of the defined root, path: [' . $mkomwsiykqigmqca . '], resolved: [' . $emukumgmosiqkmyi . ']');
            }
            $emukumgmosiqkmyi = trim($emukumgmosiqkmyi, $geqcesmqwkeayoiu);
        }
        return $emukumgmosiqkmyi;
    }
}

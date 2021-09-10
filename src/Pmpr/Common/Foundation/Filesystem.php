<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Exception;
use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Symfony\Component\Filesystem\Filesystem as Factory;

class Filesystem extends Container
{
    
    public ?Factory $factory = null;
    public function __construct()
    {
        $this->factory = new Factory();
        parent::__construct();
    }
    
    public function yywyeskyawwcugcq() : ?Factory
    {
        return $this->factory;
    }
    
    public function oquguuiseiwkawkw($mkomwsiykqigmqca, $miawkwqioaeasiig = null, $kywouseeaeysccgq = true)
    {
        $smaiamkswqkisawm = false;
        if ($this->mkdir($mkomwsiykqigmqca)) {
            if (!$miawkwqioaeasiig) {
                $smaiamkswqkisawm = "{$mkomwsiykqigmqca}/{$miawkwqioaeasiig}";
                if ($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq) {
                    $this->megseaqgmukmikmq($smaiamkswqkisawm);
                }
            } else {
                if ($kywouseeaeysccgq) {
                    $this->megseaqgmukmikmq($mkomwsiykqigmqca);
                }
            }
        }
        return untrailingslashit($smaiamkswqkisawm);
    }
    
    public function megseaqgmukmikmq($mkomwsiykqigmqca)
    {
        if ($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca)) {
            $esaqeawoigqgagum = "{$mkomwsiykqigmqca}/index.php";
            if (!$this->exists($esaqeawoigqgagum)) {
                
                $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "<?php if (!defined('ABSPATH')) { exit; }");
            }
        }
    }
    
    public function exists($qogsmwakwacwqogk) : bool
    {
        return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk);
    }
    
    public function uuegkqwagymmusiy($miawkwqioaeasiig, $aoqagsqecokqqwqg = 2) : bool
    {
        if (!$this->exists($miawkwqioaeasiig)) {
            $sogksuscggsicmac = true;
            $this->mkdir($miawkwqioaeasiig);
        } else {
            $sogksuscggsicmac = $this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig) && count(scandir($miawkwqioaeasiig)) <= $aoqagsqecokqqwqg;
        }
        return $sogksuscggsicmac;
    }
    
    public function remove($ucasskoyoewwmmii)
    {
        try {
            if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) {
                $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii);
                $kigowwqauiumummw = true;
            } else {
                $kigowwqauiumummw = false;
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
        }
        return $kigowwqauiumummw;
    }
    
    public function ukagseqcawyaeoio($iwywmkygwewiamwm)
    {
        try {
            $kigowwqauiumummw = $this->yywyeskyawwcugcq()->readlink($iwywmkygwewiamwm);
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
        }
        return $kigowwqauiumummw;
    }
    
    public function souwykwwmyygqyqi($qogsmwakwacwqogk)
    {
        $ewgwqamkygiqaawc = '';
        if ($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk)) {
            $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk);
        }
        return $ewgwqamkygiqaawc;
    }
    
    public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '')
    {
        $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, 'w');
        return fwrite($qogsmwakwacwqogk, $icwicymcioeyeyek);
    }
    
    public function mecmkmogggamegic(string $qogsmwakwacwqogk) : bool
    {
        return @is_file($qogsmwakwacwqogk);
    }
    
    public function qsyysysisqaygeyu($qogsmwakwacwqogk) : bool
    {
        return true;
    }
    
    public function mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk = 0777) : bool
    {
        $kigowwqauiumummw = false;
        try {
            if ($qmwoqyacswkwkiog) {
                if (!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog)) {
                    $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk);
                }
                $kigowwqauiumummw = true;
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici("can not create dir: " . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        return $kigowwqauiumummw;
    }
    
    public function coeoweawgagkycwe(string $qogsmwakwacwqogk) : bool
    {
        return @is_readable($qogsmwakwacwqogk);
    }
    
    public function qygmgeswucmcmaiu(string $qogsmwakwacwqogk) : bool
    {
        return @is_writable($qogsmwakwacwqogk);
    }
    
    public function asysewkmisimumay(string $mkomwsiykqigmqca) : bool
    {
        return @is_dir($mkomwsiykqigmqca);
    }
    
    public function cmsiuoqwaiwceuqq($mkomwsiykqigmqca, $wkcwykowmmmwioqs, $icwicymcioeyeyek = '')
    {
        $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs;
        if (!$this->exists($mkomwsiykqigmqca)) {
            $this->mkdir($mkomwsiykqigmqca);
        }
        return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false;
    }
    
    public function ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq)
    {
        return $this->yywyeskyawwcugcq()->ikeyocqcquygwoia($iugswueasgysomii, $wuuguueokgwuowcq);
    }
    
    public function ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc) : bool
    {
        try {
            $this->yywyeskyawwcugcq()->ockyokocuwwmkesa($wkcwykowmmmwioqs, $ewgwqamkygiqaawc);
            $kigowwqauiumummw = true;
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
        }
        return $kigowwqauiumummw;
    }
    
    public function touch($ucasskoyoewwmmii, $cqgoimumaewouews = null, $saaqkguysukwkwww = null)
    {
        $this->yywyeskyawwcugcq()->touch($ucasskoyoewwmmii, $cqgoimumaewouews, $saaqkguysukwkwww);
    }
    
    public function kwsmkgyoyaqecwuu($wkcwykowmmmwioqs, $ewgwqamkygiqaawc = '') : bool
    {
        try {
            $this->mkdir(dirname($wkcwykowmmmwioqs));
            $this->touch($wkcwykowmmmwioqs);
            $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc);
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
            $this->saqqeqmcyyoeqici("can not put content: " . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        return $kigowwqauiumummw;
    }
    
    public function rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu = false)
    {
        try {
            $this->yywyeskyawwcugcq()->rename($iakkeikwceeomgyq, $ccamueccusigaaio, $qguugmaqaucgueiu);
            $kigowwqauiumummw = true;
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
        }
        return $kigowwqauiumummw;
    }
    
    public function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo = false)
    {
        $this->yywyeskyawwcugcq()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $cwgkgayyaeymkugo);
    }
    
    public function chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs = 00, $omocaacsciyocqum = false)
    {
        $this->yywyeskyawwcugcq()->chmod($ucasskoyoewwmmii, $wmekckkyoiyickmk, $kskggcccuukwoaqs, $omocaacsciyocqum);
    }
    
    public function copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy = false)
    {
        try {
            $this->yywyeskyawwcugcq()->copy($uiuoegigmiykqkuc, $gkssayoickaqyqic, $msqmueqmyomyygcy);
            $kigowwqauiumummw = true;
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
        }
        return $kigowwqauiumummw;
    }
    
    public function sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu = null, $qiouiwasaauyaaue = [])
    {
        $this->yywyeskyawwcugcq()->sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, $mcowwqgmkuemoumu, $qiouiwasaauyaaue);
    }
    
    public function egiiqeqcckaaicoa($qogsmwakwacwqogk)
    {
        $oiegiwogmwmawkeo = '';
        if ($this->exists($qogsmwakwacwqogk)) {
            $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk);
            $wyicceigkekkkwgs = [__('b', PR__CMN__FOUNDATION), __('KB', PR__CMN__FOUNDATION), __('MB', PR__CMN__FOUNDATION), __('GB', PR__CMN__FOUNDATION)];
            if ($wcoyaokieoeeswcq) {
                $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024));
                $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / pow(1024, floor($iyqygqimawuycsyq));
                $iyqygqimawuycsyq = ManipulateArray::get($wyicceigkekkkwgs, $iyqygqimawuycsyq);
                if ($iyqygqimawuycsyq && $oiegiwogmwmawkeo) {
                    $oiegiwogmwmawkeo = sprintf('%.1f ' . $iyqygqimawuycsyq, $oiegiwogmwmawkeo);
                }
            }
        }
        return $oiegiwogmwmawkeo;
    }
}

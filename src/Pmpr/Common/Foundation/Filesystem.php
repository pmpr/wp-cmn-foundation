<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto qkyeggcmymaakses;
        mcguyemaqsoowmgy:
        qiseoemcesgaagwg:
        goto awukigqgaqaecoom;
        ckiasiawickuwsou:
        if (!$miawkwqioaeasiig) {
            goto yiuqmueuywsmsyuw;
        }
        goto okseoocsaaiqsgew;
        qwqkiuyaqmimgeca:
        if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) {
            goto kqesamwwcakuwuas;
        }
        goto soggwykcekqeiyke;
        ykakussyaoscuaeq:
        yiuqmueuywsmsyuw:
        goto cuuowgeeeyogmsaw;
        awukigqgaqaecoom:
        return untrailingslashit($smaiamkswqkisawm);
        goto yuqwmuqokockaoui;
        okseoocsaaiqsgew:
        if (!$kywouseeaeysccgq) {
            goto msoomyweeumakeyc;
        }
        goto amywkuoaasmewcks;
        qkyeggcmymaakses:
        $smaiamkswqkisawm = false;
        goto oewiaeiscuswgkmy;
        cuuowgeeeyogmsaw:
        $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}";
        goto qwqkiuyaqmimgeca;
        oewiaeiscuswgkmy:
        if (!$this->mkdir($mkomwsiykqigmqca)) {
            goto qiseoemcesgaagwg;
        }
        goto ckiasiawickuwsou;
        amywkuoaasmewcks:
        $this->megseaqgmukmikmq($mkomwsiykqigmqca);
        goto ewsweeumwymoamog;
        soggwykcekqeiyke:
        $this->megseaqgmukmikmq($smaiamkswqkisawm);
        goto oisomqeqaqawwega;
        oisomqeqaqawwega:
        kqesamwwcakuwuas:
        goto kmeoqoeqqkocmcka;
        ecoekossmwsagiow:
        goto yyimkksgiagkwgau;
        goto ykakussyaoscuaeq;
        ewsweeumwymoamog:
        msoomyweeumakeyc:
        goto ecoekossmwsagiow;
        kmeoqoeqqkocmcka:
        yyimkksgiagkwgau:
        goto mcguyemaqsoowmgy;
        yuqwmuqokockaoui:
    }
    
    public function megseaqgmukmikmq($mkomwsiykqigmqca)
    {
        goto mcqayqmuqikoygus;
        gewawgqiuyosuaqq:
        okygwyygkiooeciu:
        goto yscgikeomcgkgygk;
        mcqayqmuqikoygus:
        if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) {
            goto okygwyygkiooeciu;
        }
        goto guiwyekqasmoekqq;
        yumowyyksuouqkiq:
        qcgiuameowgeoemw:
        goto gewawgqiuyosuaqq;
        guiwyekqasmoekqq:
        $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\x2f\x69\x6e\144\145\x78\56\160\x68\160";
        goto okqkgmgmgkgagkyq;
        kuwwiauagwykcyae:
        
        $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\x3c\x3f\160\150\x70\x20\151\x66\40\x28\41\144\x65\x66\151\x6e\x65\x64\x28\x27\101\102\123\x50\x41\124\110\x27\51\x29\x20\x7b\40\x65\170\x69\164\x3b\x20\175");
        goto yumowyyksuouqkiq;
        okqkgmgmgkgagkyq:
        if ($this->exists($esaqeawoigqgagum)) {
            goto qcgiuameowgeoemw;
        }
        goto kuwwiauagwykcyae;
        yscgikeomcgkgygk:
    }
    
    public function exists($qogsmwakwacwqogk) : bool
    {
        return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk);
    }
    
    public function uuegkqwagymmusiy($miawkwqioaeasiig, $aoqagsqecokqqwqg = 2) : bool
    {
        goto oqcwmocuwuwokgya;
        qeiqyiumsmkicqyu:
        $sogksuscggsicmac = true;
        goto uqkgswsusamuccyw;
        muqaocsweeyqsoye:
        goto amswymymkwieuckw;
        goto kiiyeeekyiusoeui;
        oqcwmocuwuwokgya:
        if (!$this->exists($miawkwqioaeasiig)) {
            goto yyymqggqawumumog;
        }
        goto iusaewegkoiieeom;
        kiiyeeekyiusoeui:
        yyymqggqawumumog:
        goto qeiqyiumsmkicqyu;
        uqkgswsusamuccyw:
        $this->mkdir($miawkwqioaeasiig);
        goto cgmagkeoskmgaiyg;
        iusaewegkoiieeom:
        $sogksuscggsicmac = $this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig) && count(scandir($miawkwqioaeasiig)) <= $aoqagsqecokqqwqg;
        goto muqaocsweeyqsoye;
        cgmagkeoskmgaiyg:
        amswymymkwieuckw:
        goto agocucmwccwemeyq;
        agocucmwccwemeyq:
        return $sogksuscggsicmac;
        goto ekyosowqimyqcaaq;
        ekyosowqimyqcaaq:
    }
    
    public function remove($ucasskoyoewwmmii)
    {
        try {
            goto ysasyyiaseeqkmko;
            wuwuiwwcqmgsmisy:
            kewyowoakiiuamsa:
            goto aykmumaieiueyeqa;
            mosmuugeqcsacskc:
            yeuaaqmioucasaks:
            goto uiocmycaouiessgs;
            aiaismsmsiymqumq:
            goto yeuaaqmioucasaks;
            goto wuwuiwwcqmgsmisy;
            ysasyyiaseeqkmko:
            if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) {
                goto kewyowoakiiuamsa;
            }
            goto imigcaguiisikmak;
            imigcaguiisikmak:
            $kigowwqauiumummw = false;
            goto aiaismsmsiymqumq;
            aykmumaieiueyeqa:
            $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii);
            goto iyogykmmqkqysuek;
            iyogykmmqkqysuek:
            $kigowwqauiumummw = true;
            goto mosmuugeqcsacskc;
            uiocmycaouiessgs:
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
        goto yqqmsaceyaqyiecq;
        wogcuyasysqqwuwg:
        if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) {
            goto tsmssqcisaauygqo;
        }
        goto qkwgugwgiygosuwi;
        qkwgugwgiygosuwi:
        $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk);
        goto seaaqqowyeuqcqey;
        seaaqqowyeuqcqey:
        tsmssqcisaauygqo:
        goto ewkyyscmssywguiy;
        ewkyyscmssywguiy:
        return $ewgwqamkygiqaawc;
        goto syeogeciaieosmuy;
        yqqmsaceyaqyiecq:
        $ewgwqamkygiqaawc = '';
        goto wogcuyasysqqwuwg;
        syeogeciaieosmuy:
    }
    
    public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '')
    {
        $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\167");
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
        goto qqugmskikeggcqck;
        ymkcomygiuasmiqu:
        try {
            goto ygwskmakekcueimm;
            akkugkigcmogsmwa:
            caqgwosawyuskgcc:
            goto iwqeuawaeyysmyke;
            qegkkwokuemqqaca:
            if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) {
                goto caqgwosawyuskgcc;
            }
            goto yauqyiqcegcissma;
            acykcoioqsgegycc:
            xemcmmyyisyyiyic:
            goto iqcawkmieemgmuws;
            yauqyiqcegcissma:
            $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk);
            goto akkugkigcmogsmwa;
            iwqeuawaeyysmyke:
            $kigowwqauiumummw = true;
            goto acykcoioqsgegycc;
            ygwskmakekcueimm:
            if (!$qmwoqyacswkwkiog) {
                goto xemcmmyyisyyiyic;
            }
            goto qegkkwokuemqqaca;
            iqcawkmieemgmuws:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici("\143\x61\x6e\40\156\x6f\164\40\143\162\145\x61\164\x65\40\x64\x69\x72\72\40" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto meacoqqokoucyoga;
        qqugmskikeggcqck:
        $kigowwqauiumummw = false;
        goto ymkcomygiuasmiqu;
        meacoqqokoucyoga:
        return $kigowwqauiumummw;
        goto aemeckuaowuyyawg;
        aemeckuaowuyyawg:
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
        goto kykiiewgwquaksgc;
        kykiiewgwquaksgc:
        $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs;
        goto yseuseagkkcgcqii;
        yseuseagkkcgcqii:
        if ($this->exists($mkomwsiykqigmqca)) {
            goto ckuakqwqukkeusky;
        }
        goto ayqggsigamwsowka;
        yssmcumiaiqoiqoi:
        ckuakqwqukkeusky:
        goto gmyqkugayogcoouy;
        ayqggsigamwsowka:
        $this->mkdir($mkomwsiykqigmqca);
        goto yssmcumiaiqoiqoi;
        gmyqkugayogcoouy:
        return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false;
        goto ymyicceouqmquskc;
        ymyicceouqmquskc:
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
            goto mwowmiqewakiqokm;
            mwowmiqewakiqokm:
            $this->mkdir(dirname($wkcwykowmmmwioqs));
            goto uwqkmayasqiymkcw;
            uwqkmayasqiymkcw:
            $this->touch($wkcwykowmmmwioqs);
            goto uyqyioeqeoqcuykq;
            uyqyioeqeoqcuykq:
            $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc);
            goto maisiwgiyemcksso;
            maisiwgiyemcksso:
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
            $this->saqqeqmcyyoeqici("\x63\141\x6e\40\156\x6f\164\40\160\x75\164\x20\x63\157\156\164\x65\156\x74\72\40" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
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
        goto iuqmcesucmkqckmo;
        imioswwmquauqkia:
        $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / pow(1024, floor($iyqygqimawuycsyq));
        goto gaueqomusygaqaia;
        mwmieoicwuqyuygy:
        cakgesecyaemgueq:
        goto gwywgyiccasyeyuc;
        iuqmcesucmkqckmo:
        $oiegiwogmwmawkeo = '';
        goto ywgmykeycoyogqco;
        ouiusiyeswawsgyc:
        $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024));
        goto imioswwmquauqkia;
        ukeoaugaookyquee:
        $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\113\x42", PR__CMN__FOUNDATION), __("\115\x42", PR__CMN__FOUNDATION), __("\x47\x42", PR__CMN__FOUNDATION)];
        goto uqeyauiimkymqkqo;
        ucakuayukmgmyegg:
        $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk);
        goto ukeoaugaookyquee;
        uqeyauiimkymqkqo:
        if (!$wcoyaokieoeeswcq) {
            goto wmscaqqokaamkyiq;
        }
        goto ouiusiyeswawsgyc;
        gwywgyiccasyeyuc:
        wmscaqqokaamkyiq:
        goto cccqicomasamemuq;
        gaueqomusygaqaia:
        $iyqygqimawuycsyq = ManipulateArray::get($wyicceigkekkkwgs, $iyqygqimawuycsyq);
        goto ocyiqkkgoiqcgoiy;
        weyikuomgeyimyay:
        return $oiegiwogmwmawkeo;
        goto qywgyeaiwcumsouk;
        ywsssccywigceiyi:
        $oiegiwogmwmawkeo = sprintf("\x25\x2e\x31\x66\x20" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo);
        goto mwmieoicwuqyuygy;
        ywgmykeycoyogqco:
        if (!$this->exists($qogsmwakwacwqogk)) {
            goto iigosmqysegggsau;
        }
        goto ucakuayukmgmyegg;
        cccqicomasamemuq:
        iigosmqysegggsau:
        goto weyikuomgeyimyay;
        ocyiqkkgoiqcgoiy:
        if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) {
            goto cakgesecyaemgueq;
        }
        goto ywsssccywigceiyi;
        qywgyeaiwcumsouk:
    }
}

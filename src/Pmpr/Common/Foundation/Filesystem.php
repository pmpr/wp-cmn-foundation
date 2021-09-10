<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto yiuqmueuywsmsyuw;
        oewiaeiscuswgkmy:
        $this->megseaqgmukmikmq($mkomwsiykqigmqca);
        goto ckiasiawickuwsou;
        cuuowgeeeyogmsaw:
        kuioacgcmuoukscw:
        goto qwqkiuyaqmimgeca;
        ewsweeumwymoamog:
        $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}";
        goto ecoekossmwsagiow;
        qiseoemcesgaagwg:
        if (!$miawkwqioaeasiig) {
            goto wyuagceiqgqoggeu;
        }
        goto qkyeggcmymaakses;
        qkyeggcmymaakses:
        if (!$kywouseeaeysccgq) {
            goto kummqkwyeiomswyy;
        }
        goto oewiaeiscuswgkmy;
        ykakussyaoscuaeq:
        $this->megseaqgmukmikmq($smaiamkswqkisawm);
        goto cuuowgeeeyogmsaw;
        ecoekossmwsagiow:
        if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) {
            goto kuioacgcmuoukscw;
        }
        goto ykakussyaoscuaeq;
        amywkuoaasmewcks:
        wyuagceiqgqoggeu:
        goto ewsweeumwymoamog;
        okseoocsaaiqsgew:
        goto kqesamwwcakuwuas;
        goto amywkuoaasmewcks;
        oisomqeqaqawwega:
        return untrailingslashit($smaiamkswqkisawm);
        goto kmeoqoeqqkocmcka;
        yiuqmueuywsmsyuw:
        $smaiamkswqkisawm = false;
        goto yyimkksgiagkwgau;
        qwqkiuyaqmimgeca:
        kqesamwwcakuwuas:
        goto soggwykcekqeiyke;
        ckiasiawickuwsou:
        kummqkwyeiomswyy:
        goto okseoocsaaiqsgew;
        yyimkksgiagkwgau:
        if (!$this->mkdir($mkomwsiykqigmqca)) {
            goto msoomyweeumakeyc;
        }
        goto qiseoemcesgaagwg;
        soggwykcekqeiyke:
        msoomyweeumakeyc:
        goto oisomqeqaqawwega;
        kmeoqoeqqkocmcka:
    }
    
    public function megseaqgmukmikmq($mkomwsiykqigmqca)
    {
        goto yuqwmuqokockaoui;
        okqkgmgmgkgagkyq:
        awukigqgaqaecoom:
        goto kuwwiauagwykcyae;
        guiwyekqasmoekqq:
        mcguyemaqsoowmgy:
        goto okqkgmgmgkgagkyq;
        qcgiuameowgeoemw:
        $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\57\151\x6e\x64\145\170\56\x70\150\x70";
        goto okygwyygkiooeciu;
        yuqwmuqokockaoui:
        if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) {
            goto awukigqgaqaecoom;
        }
        goto qcgiuameowgeoemw;
        okygwyygkiooeciu:
        if ($this->exists($esaqeawoigqgagum)) {
            goto mcguyemaqsoowmgy;
        }
        goto mcqayqmuqikoygus;
        mcqayqmuqikoygus:
        
        $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\74\77\x70\x68\160\40\151\146\40\50\41\x64\145\x66\x69\x6e\145\x64\50\47\101\x42\x53\120\x41\124\x48\47\51\x29\x20\x7b\x20\145\170\x69\x74\x3b\x20\175");
        goto guiwyekqasmoekqq;
        kuwwiauagwykcyae:
    }
    
    public function exists($qogsmwakwacwqogk) : bool
    {
        return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk);
    }
    
    public function uuegkqwagymmusiy($miawkwqioaeasiig, $aoqagsqecokqqwqg = 2) : bool
    {
        goto yscgikeomcgkgygk;
        yscgikeomcgkgygk:
        if (!$this->exists($miawkwqioaeasiig)) {
            goto yumowyyksuouqkiq;
        }
        goto yyymqggqawumumog;
        oqcwmocuwuwokgya:
        yumowyyksuouqkiq:
        goto iusaewegkoiieeom;
        yyymqggqawumumog:
        $sogksuscggsicmac = $this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig) && count(scandir($miawkwqioaeasiig)) <= $aoqagsqecokqqwqg;
        goto amswymymkwieuckw;
        muqaocsweeyqsoye:
        $this->mkdir($miawkwqioaeasiig);
        goto kiiyeeekyiusoeui;
        iusaewegkoiieeom:
        $sogksuscggsicmac = true;
        goto muqaocsweeyqsoye;
        kiiyeeekyiusoeui:
        gewawgqiuyosuaqq:
        goto qeiqyiumsmkicqyu;
        amswymymkwieuckw:
        goto gewawgqiuyosuaqq;
        goto oqcwmocuwuwokgya;
        qeiqyiumsmkicqyu:
        return $sogksuscggsicmac;
        goto uqkgswsusamuccyw;
        uqkgswsusamuccyw:
    }
    
    public function remove($ucasskoyoewwmmii)
    {
        try {
            goto ekyosowqimyqcaaq;
            ysasyyiaseeqkmko:
            cgmagkeoskmgaiyg:
            goto imigcaguiisikmak;
            aiaismsmsiymqumq:
            $kigowwqauiumummw = true;
            goto wuwuiwwcqmgsmisy;
            imigcaguiisikmak:
            $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii);
            goto aiaismsmsiymqumq;
            ekyosowqimyqcaaq:
            if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) {
                goto cgmagkeoskmgaiyg;
            }
            goto kewyowoakiiuamsa;
            wuwuiwwcqmgsmisy:
            agocucmwccwemeyq:
            goto aykmumaieiueyeqa;
            kewyowoakiiuamsa:
            $kigowwqauiumummw = false;
            goto yeuaaqmioucasaks;
            yeuaaqmioucasaks:
            goto agocucmwccwemeyq;
            goto ysasyyiaseeqkmko;
            aykmumaieiueyeqa:
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
        goto mosmuugeqcsacskc;
        yqqmsaceyaqyiecq:
        iyogykmmqkqysuek:
        goto wogcuyasysqqwuwg;
        mosmuugeqcsacskc:
        $ewgwqamkygiqaawc = '';
        goto uiocmycaouiessgs;
        wogcuyasysqqwuwg:
        return $ewgwqamkygiqaawc;
        goto qkwgugwgiygosuwi;
        tsmssqcisaauygqo:
        $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk);
        goto yqqmsaceyaqyiecq;
        uiocmycaouiessgs:
        if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) {
            goto iyogykmmqkqysuek;
        }
        goto tsmssqcisaauygqo;
        qkwgugwgiygosuwi:
    }
    
    public function write($mkomwsiykqigmqca, $icwicymcioeyeyek = '')
    {
        $qogsmwakwacwqogk = fopen($mkomwsiykqigmqca, "\x77");
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
        goto iwqeuawaeyysmyke;
        acykcoioqsgegycc:
        try {
            goto syeogeciaieosmuy;
            qegkkwokuemqqaca:
            $kigowwqauiumummw = true;
            goto yauqyiqcegcissma;
            ygwskmakekcueimm:
            seaaqqowyeuqcqey:
            goto qegkkwokuemqqaca;
            caqgwosawyuskgcc:
            if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) {
                goto seaaqqowyeuqcqey;
            }
            goto xemcmmyyisyyiyic;
            xemcmmyyisyyiyic:
            $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk);
            goto ygwskmakekcueimm;
            syeogeciaieosmuy:
            if (!$qmwoqyacswkwkiog) {
                goto ewkyyscmssywguiy;
            }
            goto caqgwosawyuskgcc;
            yauqyiqcegcissma:
            ewkyyscmssywguiy:
            goto akkugkigcmogsmwa;
            akkugkigcmogsmwa:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici("\143\141\x6e\40\156\x6f\164\40\x63\x72\145\x61\x74\x65\x20\x64\151\x72\x3a\x20" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto iqcawkmieemgmuws;
        iqcawkmieemgmuws:
        return $kigowwqauiumummw;
        goto qqugmskikeggcqck;
        iwqeuawaeyysmyke:
        $kigowwqauiumummw = false;
        goto acykcoioqsgegycc;
        qqugmskikeggcqck:
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
        goto meacoqqokoucyoga;
        meacoqqokoucyoga:
        $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs;
        goto aemeckuaowuyyawg;
        kykiiewgwquaksgc:
        ymkcomygiuasmiqu:
        goto yseuseagkkcgcqii;
        ckuakqwqukkeusky:
        $this->mkdir($mkomwsiykqigmqca);
        goto kykiiewgwquaksgc;
        aemeckuaowuyyawg:
        if ($this->exists($mkomwsiykqigmqca)) {
            goto ymkcomygiuasmiqu;
        }
        goto ckuakqwqukkeusky;
        yseuseagkkcgcqii:
        return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false;
        goto ayqggsigamwsowka;
        ayqggsigamwsowka:
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
            goto yssmcumiaiqoiqoi;
            gmyqkugayogcoouy:
            $this->touch($wkcwykowmmmwioqs);
            goto ymyicceouqmquskc;
            yssmcumiaiqoiqoi:
            $this->mkdir(dirname($wkcwykowmmmwioqs));
            goto gmyqkugayogcoouy;
            ymyicceouqmquskc:
            $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc);
            goto mwowmiqewakiqokm;
            mwowmiqewakiqokm:
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
            $this->saqqeqmcyyoeqici("\143\141\x6e\40\156\157\x74\x20\160\165\164\40\x63\157\x6e\164\x65\156\x74\x3a\x20" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
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
        goto cakgesecyaemgueq;
        imioswwmquauqkia:
        $oiegiwogmwmawkeo = sprintf("\x25\56\x31\x66\x20" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo);
        goto gaueqomusygaqaia;
        ywsssccywigceiyi:
        maisiwgiyemcksso:
        goto mwmieoicwuqyuygy;
        ouiusiyeswawsgyc:
        if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) {
            goto uwqkmayasqiymkcw;
        }
        goto imioswwmquauqkia;
        uqeyauiimkymqkqo:
        $iyqygqimawuycsyq = ManipulateArray::get($wyicceigkekkkwgs, $iyqygqimawuycsyq);
        goto ouiusiyeswawsgyc;
        wmscaqqokaamkyiq:
        if (!$this->exists($qogsmwakwacwqogk)) {
            goto maisiwgiyemcksso;
        }
        goto iigosmqysegggsau;
        gaueqomusygaqaia:
        uwqkmayasqiymkcw:
        goto ocyiqkkgoiqcgoiy;
        iuqmcesucmkqckmo:
        $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\x4b\102", PR__CMN__FOUNDATION), __("\115\x42", PR__CMN__FOUNDATION), __("\107\102", PR__CMN__FOUNDATION)];
        goto ywgmykeycoyogqco;
        iigosmqysegggsau:
        $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk);
        goto iuqmcesucmkqckmo;
        cakgesecyaemgueq:
        $oiegiwogmwmawkeo = '';
        goto wmscaqqokaamkyiq;
        ocyiqkkgoiqcgoiy:
        uyqyioeqeoqcuykq:
        goto ywsssccywigceiyi;
        ucakuayukmgmyegg:
        $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024));
        goto ukeoaugaookyquee;
        mwmieoicwuqyuygy:
        return $oiegiwogmwmawkeo;
        goto gwywgyiccasyeyuc;
        ywgmykeycoyogqco:
        if (!$wcoyaokieoeeswcq) {
            goto uyqyioeqeoqcuykq;
        }
        goto ucakuayukmgmyegg;
        ukeoaugaookyquee:
        $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / pow(1024, floor($iyqygqimawuycsyq));
        goto uqeyauiimkymqkqo;
        gwywgyiccasyeyuc:
    }
}

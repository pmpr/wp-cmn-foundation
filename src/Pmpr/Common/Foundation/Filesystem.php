<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        ykakussyaoscuaeq:
        yiuqmueuywsmsyuw:
        goto cuuowgeeeyogmsaw;
        qkyeggcmymaakses:
        $smaiamkswqkisawm = false;
        goto oewiaeiscuswgkmy;
        soggwykcekqeiyke:
        $this->megseaqgmukmikmq($smaiamkswqkisawm);
        goto oisomqeqaqawwega;
        awukigqgaqaecoom:
        return untrailingslashit($smaiamkswqkisawm);
        goto yuqwmuqokockaoui;
        ckiasiawickuwsou:
        if (!$miawkwqioaeasiig) {
            goto yiuqmueuywsmsyuw;
        }
        goto okseoocsaaiqsgew;
        oisomqeqaqawwega:
        kqesamwwcakuwuas:
        goto kmeoqoeqqkocmcka;
        okseoocsaaiqsgew:
        if (!$kywouseeaeysccgq) {
            goto msoomyweeumakeyc;
        }
        goto amywkuoaasmewcks;
        mcguyemaqsoowmgy:
        qiseoemcesgaagwg:
        goto awukigqgaqaecoom;
        ecoekossmwsagiow:
        goto yyimkksgiagkwgau;
        goto ykakussyaoscuaeq;
        qwqkiuyaqmimgeca:
        if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) {
            goto kqesamwwcakuwuas;
        }
        goto soggwykcekqeiyke;
        oewiaeiscuswgkmy:
        if (!$this->mkdir($mkomwsiykqigmqca)) {
            goto qiseoemcesgaagwg;
        }
        goto ckiasiawickuwsou;
        amywkuoaasmewcks:
        $this->megseaqgmukmikmq($mkomwsiykqigmqca);
        goto ewsweeumwymoamog;
        cuuowgeeeyogmsaw:
        $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}";
        goto qwqkiuyaqmimgeca;
        kmeoqoeqqkocmcka:
        yyimkksgiagkwgau:
        goto mcguyemaqsoowmgy;
        ewsweeumwymoamog:
        msoomyweeumakeyc:
        goto ecoekossmwsagiow;
        yuqwmuqokockaoui:
    }
    
    public function megseaqgmukmikmq($mkomwsiykqigmqca)
    {
        goto mcqayqmuqikoygus;
        kuwwiauagwykcyae:
        
        $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\x3c\77\160\150\160\40\151\146\40\x28\x21\144\x65\146\151\156\145\144\50\47\101\102\123\120\x41\x54\x48\x27\x29\51\x20\173\40\145\170\151\164\73\x20\175");
        goto yumowyyksuouqkiq;
        okqkgmgmgkgagkyq:
        if ($this->exists($esaqeawoigqgagum)) {
            goto qcgiuameowgeoemw;
        }
        goto kuwwiauagwykcyae;
        gewawgqiuyosuaqq:
        okygwyygkiooeciu:
        goto yscgikeomcgkgygk;
        yumowyyksuouqkiq:
        qcgiuameowgeoemw:
        goto gewawgqiuyosuaqq;
        guiwyekqasmoekqq:
        $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\57\x69\156\144\145\170\56\x70\150\160";
        goto okqkgmgmgkgagkyq;
        mcqayqmuqikoygus:
        if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) {
            goto okygwyygkiooeciu;
        }
        goto guiwyekqasmoekqq;
        yscgikeomcgkgygk:
    }
    
    public function exists($qogsmwakwacwqogk) : bool
    {
        return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk);
    }
    
    public function uuegkqwagymmusiy($miawkwqioaeasiig, $aoqagsqecokqqwqg = 2) : bool
    {
        goto oqcwmocuwuwokgya;
        cgmagkeoskmgaiyg:
        amswymymkwieuckw:
        goto agocucmwccwemeyq;
        qeiqyiumsmkicqyu:
        $sogksuscggsicmac = true;
        goto uqkgswsusamuccyw;
        iusaewegkoiieeom:
        $sogksuscggsicmac = $this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig) && count(scandir($miawkwqioaeasiig)) <= $aoqagsqecokqqwqg;
        goto muqaocsweeyqsoye;
        uqkgswsusamuccyw:
        $this->mkdir($miawkwqioaeasiig);
        goto cgmagkeoskmgaiyg;
        agocucmwccwemeyq:
        return $sogksuscggsicmac;
        goto ekyosowqimyqcaaq;
        kiiyeeekyiusoeui:
        yyymqggqawumumog:
        goto qeiqyiumsmkicqyu;
        oqcwmocuwuwokgya:
        if (!$this->exists($miawkwqioaeasiig)) {
            goto yyymqggqawumumog;
        }
        goto iusaewegkoiieeom;
        muqaocsweeyqsoye:
        goto amswymymkwieuckw;
        goto kiiyeeekyiusoeui;
        ekyosowqimyqcaaq:
    }
    
    public function remove($ucasskoyoewwmmii)
    {
        try {
            goto ysasyyiaseeqkmko;
            imigcaguiisikmak:
            $kigowwqauiumummw = false;
            goto aiaismsmsiymqumq;
            aiaismsmsiymqumq:
            goto yeuaaqmioucasaks;
            goto wuwuiwwcqmgsmisy;
            iyogykmmqkqysuek:
            $kigowwqauiumummw = true;
            goto mosmuugeqcsacskc;
            mosmuugeqcsacskc:
            yeuaaqmioucasaks:
            goto uiocmycaouiessgs;
            ysasyyiaseeqkmko:
            if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) {
                goto kewyowoakiiuamsa;
            }
            goto imigcaguiisikmak;
            aykmumaieiueyeqa:
            $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii);
            goto iyogykmmqkqysuek;
            wuwuiwwcqmgsmisy:
            kewyowoakiiuamsa:
            goto aykmumaieiueyeqa;
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
        seaaqqowyeuqcqey:
        tsmssqcisaauygqo:
        goto ewkyyscmssywguiy;
        qkwgugwgiygosuwi:
        $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk);
        goto seaaqqowyeuqcqey;
        ewkyyscmssywguiy:
        return $ewgwqamkygiqaawc;
        goto syeogeciaieosmuy;
        yqqmsaceyaqyiecq:
        $ewgwqamkygiqaawc = '';
        goto wogcuyasysqqwuwg;
        wogcuyasysqqwuwg:
        if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) {
            goto tsmssqcisaauygqo;
        }
        goto qkwgugwgiygosuwi;
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
        meacoqqokoucyoga:
        return $kigowwqauiumummw;
        goto aemeckuaowuyyawg;
        ymkcomygiuasmiqu:
        try {
            goto ygwskmakekcueimm;
            akkugkigcmogsmwa:
            caqgwosawyuskgcc:
            goto iwqeuawaeyysmyke;
            iwqeuawaeyysmyke:
            $kigowwqauiumummw = true;
            goto acykcoioqsgegycc;
            yauqyiqcegcissma:
            $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk);
            goto akkugkigcmogsmwa;
            qegkkwokuemqqaca:
            if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) {
                goto caqgwosawyuskgcc;
            }
            goto yauqyiqcegcissma;
            ygwskmakekcueimm:
            if (!$qmwoqyacswkwkiog) {
                goto xemcmmyyisyyiyic;
            }
            goto qegkkwokuemqqaca;
            acykcoioqsgegycc:
            xemcmmyyisyyiyic:
            goto iqcawkmieemgmuws;
            iqcawkmieemgmuws:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici("\x63\141\x6e\40\x6e\157\x74\x20\143\162\145\x61\x74\x65\x20\x64\x69\162\72\x20" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto meacoqqokoucyoga;
        qqugmskikeggcqck:
        $kigowwqauiumummw = false;
        goto ymkcomygiuasmiqu;
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
        yseuseagkkcgcqii:
        if ($this->exists($mkomwsiykqigmqca)) {
            goto ckuakqwqukkeusky;
        }
        goto ayqggsigamwsowka;
        ayqggsigamwsowka:
        $this->mkdir($mkomwsiykqigmqca);
        goto yssmcumiaiqoiqoi;
        yssmcumiaiqoiqoi:
        ckuakqwqukkeusky:
        goto gmyqkugayogcoouy;
        gmyqkugayogcoouy:
        return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false;
        goto ymyicceouqmquskc;
        kykiiewgwquaksgc:
        $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs;
        goto yseuseagkkcgcqii;
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
            uwqkmayasqiymkcw:
            $this->touch($wkcwykowmmmwioqs);
            goto uyqyioeqeoqcuykq;
            uyqyioeqeoqcuykq:
            $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc);
            goto maisiwgiyemcksso;
            mwowmiqewakiqokm:
            $this->mkdir(dirname($wkcwykowmmmwioqs));
            goto uwqkmayasqiymkcw;
            maisiwgiyemcksso:
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
            $this->saqqeqmcyyoeqici("\x63\141\x6e\40\156\x6f\x74\40\160\x75\x74\x20\143\x6f\x6e\x74\145\156\164\x3a\x20" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
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
        gwywgyiccasyeyuc:
        wmscaqqokaamkyiq:
        goto cccqicomasamemuq;
        ukeoaugaookyquee:
        $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\x4b\x42", PR__CMN__FOUNDATION), __("\115\x42", PR__CMN__FOUNDATION), __("\x47\102", PR__CMN__FOUNDATION)];
        goto uqeyauiimkymqkqo;
        cccqicomasamemuq:
        iigosmqysegggsau:
        goto weyikuomgeyimyay;
        iuqmcesucmkqckmo:
        $oiegiwogmwmawkeo = '';
        goto ywgmykeycoyogqco;
        ouiusiyeswawsgyc:
        $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024));
        goto imioswwmquauqkia;
        uqeyauiimkymqkqo:
        if (!$wcoyaokieoeeswcq) {
            goto wmscaqqokaamkyiq;
        }
        goto ouiusiyeswawsgyc;
        ywgmykeycoyogqco:
        if (!$this->exists($qogsmwakwacwqogk)) {
            goto iigosmqysegggsau;
        }
        goto ucakuayukmgmyegg;
        weyikuomgeyimyay:
        return $oiegiwogmwmawkeo;
        goto qywgyeaiwcumsouk;
        ucakuayukmgmyegg:
        $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk);
        goto ukeoaugaookyquee;
        ywsssccywigceiyi:
        $oiegiwogmwmawkeo = sprintf("\x25\56\61\146\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo);
        goto mwmieoicwuqyuygy;
        mwmieoicwuqyuygy:
        cakgesecyaemgueq:
        goto gwywgyiccasyeyuc;
        gaueqomusygaqaia:
        $iyqygqimawuycsyq = ManipulateArray::get($wyicceigkekkkwgs, $iyqygqimawuycsyq);
        goto ocyiqkkgoiqcgoiy;
        imioswwmquauqkia:
        $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / pow(1024, floor($iyqygqimawuycsyq));
        goto gaueqomusygaqaia;
        ocyiqkkgoiqcgoiy:
        if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) {
            goto cakgesecyaemgueq;
        }
        goto ywsssccywigceiyi;
        qywgyeaiwcumsouk:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto ewsweeumwymoamog;
        awukigqgaqaecoom:
        if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) {
            goto qkyeggcmymaakses;
        }
        goto yuqwmuqokockaoui;
        ykakussyaoscuaeq:
        if (!$miawkwqioaeasiig) {
            goto ckiasiawickuwsou;
        }
        goto cuuowgeeeyogmsaw;
        yuqwmuqokockaoui:
        $this->megseaqgmukmikmq($smaiamkswqkisawm);
        goto qcgiuameowgeoemw;
        okygwyygkiooeciu:
        okseoocsaaiqsgew:
        goto mcqayqmuqikoygus;
        soggwykcekqeiyke:
        oewiaeiscuswgkmy:
        goto oisomqeqaqawwega;
        ecoekossmwsagiow:
        if (!$this->mkdir($mkomwsiykqigmqca)) {
            goto amywkuoaasmewcks;
        }
        goto ykakussyaoscuaeq;
        cuuowgeeeyogmsaw:
        if (!$kywouseeaeysccgq) {
            goto oewiaeiscuswgkmy;
        }
        goto qwqkiuyaqmimgeca;
        mcqayqmuqikoygus:
        amywkuoaasmewcks:
        goto guiwyekqasmoekqq;
        qcgiuameowgeoemw:
        qkyeggcmymaakses:
        goto okygwyygkiooeciu;
        kmeoqoeqqkocmcka:
        ckiasiawickuwsou:
        goto mcguyemaqsoowmgy;
        oisomqeqaqawwega:
        goto okseoocsaaiqsgew;
        goto kmeoqoeqqkocmcka;
        guiwyekqasmoekqq:
        return untrailingslashit($smaiamkswqkisawm);
        goto okqkgmgmgkgagkyq;
        ewsweeumwymoamog:
        $smaiamkswqkisawm = false;
        goto ecoekossmwsagiow;
        mcguyemaqsoowmgy:
        $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\57{$miawkwqioaeasiig}";
        goto awukigqgaqaecoom;
        qwqkiuyaqmimgeca:
        $this->megseaqgmukmikmq($mkomwsiykqigmqca);
        goto soggwykcekqeiyke;
        okqkgmgmgkgagkyq:
    }
    
    public function megseaqgmukmikmq($mkomwsiykqigmqca)
    {
        goto gewawgqiuyosuaqq;
        gewawgqiuyosuaqq:
        if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) {
            goto yumowyyksuouqkiq;
        }
        goto yscgikeomcgkgygk;
        iusaewegkoiieeom:
        yumowyyksuouqkiq:
        goto muqaocsweeyqsoye;
        yscgikeomcgkgygk:
        $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\x2f\151\x6e\x64\x65\x78\x2e\160\x68\x70";
        goto yyymqggqawumumog;
        yyymqggqawumumog:
        if ($this->exists($esaqeawoigqgagum)) {
            goto kuwwiauagwykcyae;
        }
        goto amswymymkwieuckw;
        oqcwmocuwuwokgya:
        kuwwiauagwykcyae:
        goto iusaewegkoiieeom;
        amswymymkwieuckw:
        
        $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\x3c\77\x70\150\160\40\151\146\40\x28\x21\x64\145\x66\x69\156\145\x64\x28\x27\101\102\x53\120\x41\124\x48\47\51\51\40\x7b\x20\145\170\x69\164\73\x20\x7d");
        goto oqcwmocuwuwokgya;
        muqaocsweeyqsoye:
    }
    
    public function exists($qogsmwakwacwqogk) : bool
    {
        return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk);
    }
    
    public function uuegkqwagymmusiy($miawkwqioaeasiig, $aoqagsqecokqqwqg = 2) : bool
    {
        goto uqkgswsusamuccyw;
        agocucmwccwemeyq:
        goto qeiqyiumsmkicqyu;
        goto ekyosowqimyqcaaq;
        ysasyyiaseeqkmko:
        qeiqyiumsmkicqyu:
        goto imigcaguiisikmak;
        imigcaguiisikmak:
        return $sogksuscggsicmac;
        goto aiaismsmsiymqumq;
        yeuaaqmioucasaks:
        $this->mkdir($miawkwqioaeasiig);
        goto ysasyyiaseeqkmko;
        kewyowoakiiuamsa:
        $sogksuscggsicmac = true;
        goto yeuaaqmioucasaks;
        ekyosowqimyqcaaq:
        kiiyeeekyiusoeui:
        goto kewyowoakiiuamsa;
        cgmagkeoskmgaiyg:
        $sogksuscggsicmac = $this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig) && count(scandir($miawkwqioaeasiig)) <= $aoqagsqecokqqwqg;
        goto agocucmwccwemeyq;
        uqkgswsusamuccyw:
        if (!$this->exists($miawkwqioaeasiig)) {
            goto kiiyeeekyiusoeui;
        }
        goto cgmagkeoskmgaiyg;
        aiaismsmsiymqumq:
    }
    
    public function remove($ucasskoyoewwmmii)
    {
        try {
            goto iyogykmmqkqysuek;
            uiocmycaouiessgs:
            goto aykmumaieiueyeqa;
            goto tsmssqcisaauygqo;
            iyogykmmqkqysuek:
            if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) {
                goto wuwuiwwcqmgsmisy;
            }
            goto mosmuugeqcsacskc;
            yqqmsaceyaqyiecq:
            $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii);
            goto wogcuyasysqqwuwg;
            mosmuugeqcsacskc:
            $kigowwqauiumummw = false;
            goto uiocmycaouiessgs;
            wogcuyasysqqwuwg:
            $kigowwqauiumummw = true;
            goto qkwgugwgiygosuwi;
            qkwgugwgiygosuwi:
            aykmumaieiueyeqa:
            goto seaaqqowyeuqcqey;
            tsmssqcisaauygqo:
            wuwuiwwcqmgsmisy:
            goto yqqmsaceyaqyiecq;
            seaaqqowyeuqcqey:
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
        goto syeogeciaieosmuy;
        ygwskmakekcueimm:
        ewkyyscmssywguiy:
        goto qegkkwokuemqqaca;
        caqgwosawyuskgcc:
        if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) {
            goto ewkyyscmssywguiy;
        }
        goto xemcmmyyisyyiyic;
        syeogeciaieosmuy:
        $ewgwqamkygiqaawc = '';
        goto caqgwosawyuskgcc;
        xemcmmyyisyyiyic:
        $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk);
        goto ygwskmakekcueimm;
        qegkkwokuemqqaca:
        return $ewgwqamkygiqaawc;
        goto yauqyiqcegcissma;
        yauqyiqcegcissma:
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
        goto kykiiewgwquaksgc;
        ayqggsigamwsowka:
        return $kigowwqauiumummw;
        goto yssmcumiaiqoiqoi;
        kykiiewgwquaksgc:
        $kigowwqauiumummw = false;
        goto yseuseagkkcgcqii;
        yseuseagkkcgcqii:
        try {
            goto acykcoioqsgegycc;
            meacoqqokoucyoga:
            $kigowwqauiumummw = true;
            goto aemeckuaowuyyawg;
            acykcoioqsgegycc:
            if (!$qmwoqyacswkwkiog) {
                goto iwqeuawaeyysmyke;
            }
            goto iqcawkmieemgmuws;
            ymkcomygiuasmiqu:
            akkugkigcmogsmwa:
            goto meacoqqokoucyoga;
            aemeckuaowuyyawg:
            iwqeuawaeyysmyke:
            goto ckuakqwqukkeusky;
            qqugmskikeggcqck:
            $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk);
            goto ymkcomygiuasmiqu;
            iqcawkmieemgmuws:
            if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) {
                goto akkugkigcmogsmwa;
            }
            goto qqugmskikeggcqck;
            ckuakqwqukkeusky:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici("\x63\141\x6e\x20\x6e\157\164\x20\143\162\x65\141\164\145\40\x64\x69\162\x3a\x20" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto ayqggsigamwsowka;
        yssmcumiaiqoiqoi:
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
        goto ymyicceouqmquskc;
        ymyicceouqmquskc:
        $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs;
        goto mwowmiqewakiqokm;
        mwowmiqewakiqokm:
        if ($this->exists($mkomwsiykqigmqca)) {
            goto gmyqkugayogcoouy;
        }
        goto uwqkmayasqiymkcw;
        uwqkmayasqiymkcw:
        $this->mkdir($mkomwsiykqigmqca);
        goto uyqyioeqeoqcuykq;
        uyqyioeqeoqcuykq:
        gmyqkugayogcoouy:
        goto maisiwgiyemcksso;
        maisiwgiyemcksso:
        return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false;
        goto cakgesecyaemgueq;
        cakgesecyaemgueq:
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
            goto wmscaqqokaamkyiq;
            wmscaqqokaamkyiq:
            $this->mkdir(dirname($wkcwykowmmmwioqs));
            goto iigosmqysegggsau;
            iuqmcesucmkqckmo:
            $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc);
            goto ywgmykeycoyogqco;
            iigosmqysegggsau:
            $this->touch($wkcwykowmmmwioqs);
            goto iuqmcesucmkqckmo;
            ywgmykeycoyogqco:
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
            $this->saqqeqmcyyoeqici("\143\x61\156\40\156\x6f\x74\x20\x70\165\164\40\143\157\156\x74\x65\x6e\x74\x3a\40" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
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
        goto ouiusiyeswawsgyc;
        gaueqomusygaqaia:
        $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk);
        goto ocyiqkkgoiqcgoiy;
        gwywgyiccasyeyuc:
        $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / pow(1024, floor($iyqygqimawuycsyq));
        goto cccqicomasamemuq;
        meookcgmmeqeumim:
        ucakuayukmgmyegg:
        goto kgyqyegwmomouqws;
        cccqicomasamemuq:
        $iyqygqimawuycsyq = ManipulateArray::get($wyicceigkekkkwgs, $iyqygqimawuycsyq);
        goto weyikuomgeyimyay;
        kgyqyegwmomouqws:
        ukeoaugaookyquee:
        goto aqeiyioooucwqgmg;
        aqeiyioooucwqgmg:
        uqeyauiimkymqkqo:
        goto mswywuwysiwmewwg;
        qywgyeaiwcumsouk:
        $oiegiwogmwmawkeo = sprintf("\x25\56\61\x66\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo);
        goto meookcgmmeqeumim;
        ouiusiyeswawsgyc:
        $oiegiwogmwmawkeo = '';
        goto imioswwmquauqkia;
        ywsssccywigceiyi:
        if (!$wcoyaokieoeeswcq) {
            goto ukeoaugaookyquee;
        }
        goto mwmieoicwuqyuygy;
        imioswwmquauqkia:
        if (!$this->exists($qogsmwakwacwqogk)) {
            goto uqeyauiimkymqkqo;
        }
        goto gaueqomusygaqaia;
        ocyiqkkgoiqcgoiy:
        $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\x4b\102", PR__CMN__FOUNDATION), __("\115\x42", PR__CMN__FOUNDATION), __("\107\x42", PR__CMN__FOUNDATION)];
        goto ywsssccywigceiyi;
        mswywuwysiwmewwg:
        return $oiegiwogmwmawkeo;
        goto oaaguckuyyqiuysg;
        weyikuomgeyimyay:
        if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) {
            goto ucakuayukmgmyegg;
        }
        goto qywgyeaiwcumsouk;
        mwmieoicwuqyuygy:
        $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024));
        goto gwywgyiccasyeyuc;
        oaaguckuyyqiuysg:
    }
}

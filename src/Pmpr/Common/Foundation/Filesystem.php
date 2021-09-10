<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        okygwyygkiooeciu:
        okseoocsaaiqsgew:
        goto mcqayqmuqikoygus;
        awukigqgaqaecoom:
        if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) {
            goto qkyeggcmymaakses;
        }
        goto yuqwmuqokockaoui;
        yuqwmuqokockaoui:
        $this->megseaqgmukmikmq($smaiamkswqkisawm);
        goto qcgiuameowgeoemw;
        kmeoqoeqqkocmcka:
        ckiasiawickuwsou:
        goto mcguyemaqsoowmgy;
        qwqkiuyaqmimgeca:
        $this->megseaqgmukmikmq($mkomwsiykqigmqca);
        goto soggwykcekqeiyke;
        mcguyemaqsoowmgy:
        $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}";
        goto awukigqgaqaecoom;
        ykakussyaoscuaeq:
        if (!$miawkwqioaeasiig) {
            goto ckiasiawickuwsou;
        }
        goto cuuowgeeeyogmsaw;
        soggwykcekqeiyke:
        oewiaeiscuswgkmy:
        goto oisomqeqaqawwega;
        ewsweeumwymoamog:
        $smaiamkswqkisawm = false;
        goto ecoekossmwsagiow;
        guiwyekqasmoekqq:
        return untrailingslashit($smaiamkswqkisawm);
        goto okqkgmgmgkgagkyq;
        ecoekossmwsagiow:
        if (!$this->mkdir($mkomwsiykqigmqca)) {
            goto amywkuoaasmewcks;
        }
        goto ykakussyaoscuaeq;
        mcqayqmuqikoygus:
        amywkuoaasmewcks:
        goto guiwyekqasmoekqq;
        oisomqeqaqawwega:
        goto okseoocsaaiqsgew;
        goto kmeoqoeqqkocmcka;
        qcgiuameowgeoemw:
        qkyeggcmymaakses:
        goto okygwyygkiooeciu;
        cuuowgeeeyogmsaw:
        if (!$kywouseeaeysccgq) {
            goto oewiaeiscuswgkmy;
        }
        goto qwqkiuyaqmimgeca;
        okqkgmgmgkgagkyq:
    }
    
    public function megseaqgmukmikmq($mkomwsiykqigmqca)
    {
        goto gewawgqiuyosuaqq;
        iusaewegkoiieeom:
        yumowyyksuouqkiq:
        goto muqaocsweeyqsoye;
        yscgikeomcgkgygk:
        $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\x2f\x69\x6e\x64\145\x78\x2e\x70\x68\160";
        goto yyymqggqawumumog;
        yyymqggqawumumog:
        if ($this->exists($esaqeawoigqgagum)) {
            goto kuwwiauagwykcyae;
        }
        goto amswymymkwieuckw;
        amswymymkwieuckw:
        
        $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\74\77\x70\150\x70\40\x69\146\x20\x28\41\x64\x65\x66\x69\x6e\145\x64\x28\47\x41\102\x53\x50\101\124\110\x27\x29\x29\40\173\x20\x65\x78\151\x74\73\40\x7d");
        goto oqcwmocuwuwokgya;
        oqcwmocuwuwokgya:
        kuwwiauagwykcyae:
        goto iusaewegkoiieeom;
        gewawgqiuyosuaqq:
        if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) {
            goto yumowyyksuouqkiq;
        }
        goto yscgikeomcgkgygk;
        muqaocsweeyqsoye:
    }
    
    public function exists($qogsmwakwacwqogk) : bool
    {
        return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk);
    }
    
    public function uuegkqwagymmusiy($miawkwqioaeasiig, $aoqagsqecokqqwqg = 2) : bool
    {
        goto uqkgswsusamuccyw;
        ekyosowqimyqcaaq:
        kiiyeeekyiusoeui:
        goto kewyowoakiiuamsa;
        ysasyyiaseeqkmko:
        qeiqyiumsmkicqyu:
        goto imigcaguiisikmak;
        yeuaaqmioucasaks:
        $this->mkdir($miawkwqioaeasiig);
        goto ysasyyiaseeqkmko;
        kewyowoakiiuamsa:
        $sogksuscggsicmac = true;
        goto yeuaaqmioucasaks;
        uqkgswsusamuccyw:
        if (!$this->exists($miawkwqioaeasiig)) {
            goto kiiyeeekyiusoeui;
        }
        goto cgmagkeoskmgaiyg;
        imigcaguiisikmak:
        return $sogksuscggsicmac;
        goto aiaismsmsiymqumq;
        agocucmwccwemeyq:
        goto qeiqyiumsmkicqyu;
        goto ekyosowqimyqcaaq;
        cgmagkeoskmgaiyg:
        $sogksuscggsicmac = $this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig) && count(scandir($miawkwqioaeasiig)) <= $aoqagsqecokqqwqg;
        goto agocucmwccwemeyq;
        aiaismsmsiymqumq:
    }
    
    public function remove($ucasskoyoewwmmii)
    {
        try {
            goto iyogykmmqkqysuek;
            mosmuugeqcsacskc:
            $kigowwqauiumummw = false;
            goto uiocmycaouiessgs;
            uiocmycaouiessgs:
            goto aykmumaieiueyeqa;
            goto tsmssqcisaauygqo;
            qkwgugwgiygosuwi:
            aykmumaieiueyeqa:
            goto seaaqqowyeuqcqey;
            yqqmsaceyaqyiecq:
            $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii);
            goto wogcuyasysqqwuwg;
            tsmssqcisaauygqo:
            wuwuiwwcqmgsmisy:
            goto yqqmsaceyaqyiecq;
            iyogykmmqkqysuek:
            if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) {
                goto wuwuiwwcqmgsmisy;
            }
            goto mosmuugeqcsacskc;
            wogcuyasysqqwuwg:
            $kigowwqauiumummw = true;
            goto qkwgugwgiygosuwi;
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
        qegkkwokuemqqaca:
        return $ewgwqamkygiqaawc;
        goto yauqyiqcegcissma;
        xemcmmyyisyyiyic:
        $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk);
        goto ygwskmakekcueimm;
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
        kykiiewgwquaksgc:
        $kigowwqauiumummw = false;
        goto yseuseagkkcgcqii;
        ayqggsigamwsowka:
        return $kigowwqauiumummw;
        goto yssmcumiaiqoiqoi;
        yseuseagkkcgcqii:
        try {
            goto acykcoioqsgegycc;
            ymkcomygiuasmiqu:
            akkugkigcmogsmwa:
            goto meacoqqokoucyoga;
            iqcawkmieemgmuws:
            if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) {
                goto akkugkigcmogsmwa;
            }
            goto qqugmskikeggcqck;
            aemeckuaowuyyawg:
            iwqeuawaeyysmyke:
            goto ckuakqwqukkeusky;
            acykcoioqsgegycc:
            if (!$qmwoqyacswkwkiog) {
                goto iwqeuawaeyysmyke;
            }
            goto iqcawkmieemgmuws;
            qqugmskikeggcqck:
            $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk);
            goto ymkcomygiuasmiqu;
            meacoqqokoucyoga:
            $kigowwqauiumummw = true;
            goto aemeckuaowuyyawg;
            ckuakqwqukkeusky:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici("\x63\141\156\x20\156\157\164\x20\143\x72\145\141\164\145\x20\144\x69\162\72\40" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
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
        uwqkmayasqiymkcw:
        $this->mkdir($mkomwsiykqigmqca);
        goto uyqyioeqeoqcuykq;
        uyqyioeqeoqcuykq:
        gmyqkugayogcoouy:
        goto maisiwgiyemcksso;
        mwowmiqewakiqokm:
        if ($this->exists($mkomwsiykqigmqca)) {
            goto gmyqkugayogcoouy;
        }
        goto uwqkmayasqiymkcw;
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
            iuqmcesucmkqckmo:
            $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc);
            goto ywgmykeycoyogqco;
            iigosmqysegggsau:
            $this->touch($wkcwykowmmmwioqs);
            goto iuqmcesucmkqckmo;
            wmscaqqokaamkyiq:
            $this->mkdir(dirname($wkcwykowmmmwioqs));
            goto iigosmqysegggsau;
            ywgmykeycoyogqco:
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
            $this->saqqeqmcyyoeqici("\143\141\x6e\x20\156\157\164\40\x70\x75\164\40\143\x6f\156\x74\x65\x6e\164\72\40" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
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
        ouiusiyeswawsgyc:
        $oiegiwogmwmawkeo = '';
        goto imioswwmquauqkia;
        kgyqyegwmomouqws:
        ukeoaugaookyquee:
        goto aqeiyioooucwqgmg;
        cccqicomasamemuq:
        $iyqygqimawuycsyq = ManipulateArray::get($wyicceigkekkkwgs, $iyqygqimawuycsyq);
        goto weyikuomgeyimyay;
        gaueqomusygaqaia:
        $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk);
        goto ocyiqkkgoiqcgoiy;
        gwywgyiccasyeyuc:
        $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / pow(1024, floor($iyqygqimawuycsyq));
        goto cccqicomasamemuq;
        imioswwmquauqkia:
        if (!$this->exists($qogsmwakwacwqogk)) {
            goto uqeyauiimkymqkqo;
        }
        goto gaueqomusygaqaia;
        mswywuwysiwmewwg:
        return $oiegiwogmwmawkeo;
        goto oaaguckuyyqiuysg;
        weyikuomgeyimyay:
        if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) {
            goto ucakuayukmgmyegg;
        }
        goto qywgyeaiwcumsouk;
        ocyiqkkgoiqcgoiy:
        $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\113\102", PR__CMN__FOUNDATION), __("\115\x42", PR__CMN__FOUNDATION), __("\x47\102", PR__CMN__FOUNDATION)];
        goto ywsssccywigceiyi;
        meookcgmmeqeumim:
        ucakuayukmgmyegg:
        goto kgyqyegwmomouqws;
        qywgyeaiwcumsouk:
        $oiegiwogmwmawkeo = sprintf("\45\56\x31\146\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo);
        goto meookcgmmeqeumim;
        ywsssccywigceiyi:
        if (!$wcoyaokieoeeswcq) {
            goto ukeoaugaookyquee;
        }
        goto mwmieoicwuqyuygy;
        mwmieoicwuqyuygy:
        $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024));
        goto gwywgyiccasyeyuc;
        aqeiyioooucwqgmg:
        uqeyauiimkymqkqo:
        goto mswywuwysiwmewwg;
        oaaguckuyyqiuysg:
    }
}

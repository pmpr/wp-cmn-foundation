<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        mcqayqmuqikoygus:
        amywkuoaasmewcks:
        goto guiwyekqasmoekqq;
        kmeoqoeqqkocmcka:
        ckiasiawickuwsou:
        goto mcguyemaqsoowmgy;
        cuuowgeeeyogmsaw:
        if (!$kywouseeaeysccgq) {
            goto oewiaeiscuswgkmy;
        }
        goto qwqkiuyaqmimgeca;
        qwqkiuyaqmimgeca:
        $this->megseaqgmukmikmq($mkomwsiykqigmqca);
        goto soggwykcekqeiyke;
        ykakussyaoscuaeq:
        if (!$miawkwqioaeasiig) {
            goto ckiasiawickuwsou;
        }
        goto cuuowgeeeyogmsaw;
        guiwyekqasmoekqq:
        return untrailingslashit($smaiamkswqkisawm);
        goto okqkgmgmgkgagkyq;
        mcguyemaqsoowmgy:
        $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}";
        goto awukigqgaqaecoom;
        ewsweeumwymoamog:
        $smaiamkswqkisawm = false;
        goto ecoekossmwsagiow;
        okygwyygkiooeciu:
        okseoocsaaiqsgew:
        goto mcqayqmuqikoygus;
        yuqwmuqokockaoui:
        $this->megseaqgmukmikmq($smaiamkswqkisawm);
        goto qcgiuameowgeoemw;
        soggwykcekqeiyke:
        oewiaeiscuswgkmy:
        goto oisomqeqaqawwega;
        ecoekossmwsagiow:
        if (!$this->mkdir($mkomwsiykqigmqca)) {
            goto amywkuoaasmewcks;
        }
        goto ykakussyaoscuaeq;
        qcgiuameowgeoemw:
        qkyeggcmymaakses:
        goto okygwyygkiooeciu;
        oisomqeqaqawwega:
        goto okseoocsaaiqsgew;
        goto kmeoqoeqqkocmcka;
        okqkgmgmgkgagkyq:
    }
    
    public function megseaqgmukmikmq($mkomwsiykqigmqca)
    {
        goto gewawgqiuyosuaqq;
        yscgikeomcgkgygk:
        $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\x2f\x69\x6e\x64\145\x78\x2e\x70\150\x70";
        goto yyymqggqawumumog;
        iusaewegkoiieeom:
        yumowyyksuouqkiq:
        goto muqaocsweeyqsoye;
        oqcwmocuwuwokgya:
        kuwwiauagwykcyae:
        goto iusaewegkoiieeom;
        yyymqggqawumumog:
        if ($this->exists($esaqeawoigqgagum)) {
            goto kuwwiauagwykcyae;
        }
        goto amswymymkwieuckw;
        gewawgqiuyosuaqq:
        if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) {
            goto yumowyyksuouqkiq;
        }
        goto yscgikeomcgkgygk;
        amswymymkwieuckw:
        
        $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\x3c\x3f\160\x68\160\40\151\x66\x20\50\41\144\145\146\151\156\145\144\x28\47\101\102\123\120\x41\x54\x48\x27\x29\51\40\x7b\x20\x65\170\x69\x74\x3b\x20\175");
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
        kewyowoakiiuamsa:
        $sogksuscggsicmac = true;
        goto yeuaaqmioucasaks;
        imigcaguiisikmak:
        return $sogksuscggsicmac;
        goto aiaismsmsiymqumq;
        ekyosowqimyqcaaq:
        kiiyeeekyiusoeui:
        goto kewyowoakiiuamsa;
        cgmagkeoskmgaiyg:
        $sogksuscggsicmac = $this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig) && count(scandir($miawkwqioaeasiig)) <= $aoqagsqecokqqwqg;
        goto agocucmwccwemeyq;
        ysasyyiaseeqkmko:
        qeiqyiumsmkicqyu:
        goto imigcaguiisikmak;
        yeuaaqmioucasaks:
        $this->mkdir($miawkwqioaeasiig);
        goto ysasyyiaseeqkmko;
        agocucmwccwemeyq:
        goto qeiqyiumsmkicqyu;
        goto ekyosowqimyqcaaq;
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
        syeogeciaieosmuy:
        $ewgwqamkygiqaawc = '';
        goto caqgwosawyuskgcc;
        ygwskmakekcueimm:
        ewkyyscmssywguiy:
        goto qegkkwokuemqqaca;
        caqgwosawyuskgcc:
        if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) {
            goto ewkyyscmssywguiy;
        }
        goto xemcmmyyisyyiyic;
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
        goto kykiiewgwquaksgc;
        ayqggsigamwsowka:
        return $kigowwqauiumummw;
        goto yssmcumiaiqoiqoi;
        yseuseagkkcgcqii:
        try {
            goto acykcoioqsgegycc;
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
            ymkcomygiuasmiqu:
            akkugkigcmogsmwa:
            goto meacoqqokoucyoga;
            qqugmskikeggcqck:
            $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk);
            goto ymkcomygiuasmiqu;
            meacoqqokoucyoga:
            $kigowwqauiumummw = true;
            goto aemeckuaowuyyawg;
            ckuakqwqukkeusky:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici("\x63\141\156\x20\x6e\x6f\x74\x20\143\162\x65\x61\164\145\x20\x64\x69\162\72\40" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto ayqggsigamwsowka;
        kykiiewgwquaksgc:
        $kigowwqauiumummw = false;
        goto yseuseagkkcgcqii;
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
        uyqyioeqeoqcuykq:
        gmyqkugayogcoouy:
        goto maisiwgiyemcksso;
        mwowmiqewakiqokm:
        if ($this->exists($mkomwsiykqigmqca)) {
            goto gmyqkugayogcoouy;
        }
        goto uwqkmayasqiymkcw;
        uwqkmayasqiymkcw:
        $this->mkdir($mkomwsiykqigmqca);
        goto uyqyioeqeoqcuykq;
        maisiwgiyemcksso:
        return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false;
        goto cakgesecyaemgueq;
        ymyicceouqmquskc:
        $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs;
        goto mwowmiqewakiqokm;
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
            $this->saqqeqmcyyoeqici("\143\141\156\x20\x6e\157\x74\40\160\x75\x74\x20\x63\157\156\164\x65\x6e\x74\x3a\x20" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
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
        kgyqyegwmomouqws:
        ukeoaugaookyquee:
        goto aqeiyioooucwqgmg;
        gaueqomusygaqaia:
        $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk);
        goto ocyiqkkgoiqcgoiy;
        ocyiqkkgoiqcgoiy:
        $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\x4b\102", PR__CMN__FOUNDATION), __("\115\102", PR__CMN__FOUNDATION), __("\x47\x42", PR__CMN__FOUNDATION)];
        goto ywsssccywigceiyi;
        aqeiyioooucwqgmg:
        uqeyauiimkymqkqo:
        goto mswywuwysiwmewwg;
        imioswwmquauqkia:
        if (!$this->exists($qogsmwakwacwqogk)) {
            goto uqeyauiimkymqkqo;
        }
        goto gaueqomusygaqaia;
        meookcgmmeqeumim:
        ucakuayukmgmyegg:
        goto kgyqyegwmomouqws;
        mswywuwysiwmewwg:
        return $oiegiwogmwmawkeo;
        goto oaaguckuyyqiuysg;
        gwywgyiccasyeyuc:
        $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / pow(1024, floor($iyqygqimawuycsyq));
        goto cccqicomasamemuq;
        weyikuomgeyimyay:
        if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) {
            goto ucakuayukmgmyegg;
        }
        goto qywgyeaiwcumsouk;
        qywgyeaiwcumsouk:
        $oiegiwogmwmawkeo = sprintf("\45\56\x31\x66\x20" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo);
        goto meookcgmmeqeumim;
        mwmieoicwuqyuygy:
        $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024));
        goto gwywgyiccasyeyuc;
        cccqicomasamemuq:
        $iyqygqimawuycsyq = ManipulateArray::get($wyicceigkekkkwgs, $iyqygqimawuycsyq);
        goto weyikuomgeyimyay;
        ouiusiyeswawsgyc:
        $oiegiwogmwmawkeo = '';
        goto imioswwmquauqkia;
        ywsssccywigceiyi:
        if (!$wcoyaokieoeeswcq) {
            goto ukeoaugaookyquee;
        }
        goto mwmieoicwuqyuygy;
        oaaguckuyyqiuysg:
    }
}

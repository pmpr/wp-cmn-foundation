<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        kmeoqoeqqkocmcka:
        ckiasiawickuwsou:
        goto mcguyemaqsoowmgy;
        cuuowgeeeyogmsaw:
        if (!$kywouseeaeysccgq) {
            goto oewiaeiscuswgkmy;
        }
        goto qwqkiuyaqmimgeca;
        yuqwmuqokockaoui:
        $this->megseaqgmukmikmq($smaiamkswqkisawm);
        goto qcgiuameowgeoemw;
        okygwyygkiooeciu:
        okseoocsaaiqsgew:
        goto mcqayqmuqikoygus;
        mcguyemaqsoowmgy:
        $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}";
        goto awukigqgaqaecoom;
        ewsweeumwymoamog:
        $smaiamkswqkisawm = false;
        goto ecoekossmwsagiow;
        qwqkiuyaqmimgeca:
        $this->megseaqgmukmikmq($mkomwsiykqigmqca);
        goto soggwykcekqeiyke;
        ecoekossmwsagiow:
        if (!$this->mkdir($mkomwsiykqigmqca)) {
            goto amywkuoaasmewcks;
        }
        goto ykakussyaoscuaeq;
        mcqayqmuqikoygus:
        amywkuoaasmewcks:
        goto guiwyekqasmoekqq;
        soggwykcekqeiyke:
        oewiaeiscuswgkmy:
        goto oisomqeqaqawwega;
        oisomqeqaqawwega:
        goto okseoocsaaiqsgew;
        goto kmeoqoeqqkocmcka;
        qcgiuameowgeoemw:
        qkyeggcmymaakses:
        goto okygwyygkiooeciu;
        ykakussyaoscuaeq:
        if (!$miawkwqioaeasiig) {
            goto ckiasiawickuwsou;
        }
        goto cuuowgeeeyogmsaw;
        guiwyekqasmoekqq:
        return untrailingslashit($smaiamkswqkisawm);
        goto okqkgmgmgkgagkyq;
        okqkgmgmgkgagkyq:
    }
    
    public function megseaqgmukmikmq($mkomwsiykqigmqca)
    {
        goto gewawgqiuyosuaqq;
        oqcwmocuwuwokgya:
        kuwwiauagwykcyae:
        goto iusaewegkoiieeom;
        yscgikeomcgkgygk:
        $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\x2f\151\156\x64\145\x78\x2e\x70\150\160";
        goto yyymqggqawumumog;
        gewawgqiuyosuaqq:
        if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) {
            goto yumowyyksuouqkiq;
        }
        goto yscgikeomcgkgygk;
        yyymqggqawumumog:
        if ($this->exists($esaqeawoigqgagum)) {
            goto kuwwiauagwykcyae;
        }
        goto amswymymkwieuckw;
        amswymymkwieuckw:
        
        $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\x3c\x3f\x70\x68\x70\40\x69\146\x20\x28\41\144\x65\146\151\156\x65\x64\50\47\101\102\x53\x50\101\x54\x48\47\x29\51\x20\x7b\40\x65\x78\151\164\73\x20\175");
        goto oqcwmocuwuwokgya;
        iusaewegkoiieeom:
        yumowyyksuouqkiq:
        goto muqaocsweeyqsoye;
        muqaocsweeyqsoye:
    }
    
    public function exists($qogsmwakwacwqogk) : bool
    {
        return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk);
    }
    
    public function uuegkqwagymmusiy($miawkwqioaeasiig, $aoqagsqecokqqwqg = 2) : bool
    {
        goto uqkgswsusamuccyw;
        uqkgswsusamuccyw:
        if (!$this->exists($miawkwqioaeasiig)) {
            goto kiiyeeekyiusoeui;
        }
        goto cgmagkeoskmgaiyg;
        yeuaaqmioucasaks:
        $this->mkdir($miawkwqioaeasiig);
        goto ysasyyiaseeqkmko;
        agocucmwccwemeyq:
        goto qeiqyiumsmkicqyu;
        goto ekyosowqimyqcaaq;
        kewyowoakiiuamsa:
        $sogksuscggsicmac = true;
        goto yeuaaqmioucasaks;
        ekyosowqimyqcaaq:
        kiiyeeekyiusoeui:
        goto kewyowoakiiuamsa;
        imigcaguiisikmak:
        return $sogksuscggsicmac;
        goto aiaismsmsiymqumq;
        cgmagkeoskmgaiyg:
        $sogksuscggsicmac = $this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig) && count(scandir($miawkwqioaeasiig)) <= $aoqagsqecokqqwqg;
        goto agocucmwccwemeyq;
        ysasyyiaseeqkmko:
        qeiqyiumsmkicqyu:
        goto imigcaguiisikmak;
        aiaismsmsiymqumq:
    }
    
    public function remove($ucasskoyoewwmmii)
    {
        try {
            goto iyogykmmqkqysuek;
            qkwgugwgiygosuwi:
            aykmumaieiueyeqa:
            goto seaaqqowyeuqcqey;
            wogcuyasysqqwuwg:
            $kigowwqauiumummw = true;
            goto qkwgugwgiygosuwi;
            iyogykmmqkqysuek:
            if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) {
                goto wuwuiwwcqmgsmisy;
            }
            goto mosmuugeqcsacskc;
            uiocmycaouiessgs:
            goto aykmumaieiueyeqa;
            goto tsmssqcisaauygqo;
            mosmuugeqcsacskc:
            $kigowwqauiumummw = false;
            goto uiocmycaouiessgs;
            yqqmsaceyaqyiecq:
            $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii);
            goto wogcuyasysqqwuwg;
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
        syeogeciaieosmuy:
        $ewgwqamkygiqaawc = '';
        goto caqgwosawyuskgcc;
        qegkkwokuemqqaca:
        return $ewgwqamkygiqaawc;
        goto yauqyiqcegcissma;
        xemcmmyyisyyiyic:
        $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk);
        goto ygwskmakekcueimm;
        caqgwosawyuskgcc:
        if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) {
            goto ewkyyscmssywguiy;
        }
        goto xemcmmyyisyyiyic;
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
        yseuseagkkcgcqii:
        try {
            goto acykcoioqsgegycc;
            aemeckuaowuyyawg:
            iwqeuawaeyysmyke:
            goto ckuakqwqukkeusky;
            ymkcomygiuasmiqu:
            akkugkigcmogsmwa:
            goto meacoqqokoucyoga;
            meacoqqokoucyoga:
            $kigowwqauiumummw = true;
            goto aemeckuaowuyyawg;
            acykcoioqsgegycc:
            if (!$qmwoqyacswkwkiog) {
                goto iwqeuawaeyysmyke;
            }
            goto iqcawkmieemgmuws;
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
            $this->saqqeqmcyyoeqici("\143\141\x6e\40\x6e\157\x74\x20\x63\x72\145\141\x74\145\40\x64\x69\162\72\x20" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto ayqggsigamwsowka;
        ayqggsigamwsowka:
        return $kigowwqauiumummw;
        goto yssmcumiaiqoiqoi;
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
        mwowmiqewakiqokm:
        if ($this->exists($mkomwsiykqigmqca)) {
            goto gmyqkugayogcoouy;
        }
        goto uwqkmayasqiymkcw;
        maisiwgiyemcksso:
        return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false;
        goto cakgesecyaemgueq;
        uyqyioeqeoqcuykq:
        gmyqkugayogcoouy:
        goto maisiwgiyemcksso;
        uwqkmayasqiymkcw:
        $this->mkdir($mkomwsiykqigmqca);
        goto uyqyioeqeoqcuykq;
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
            iigosmqysegggsau:
            $this->touch($wkcwykowmmmwioqs);
            goto iuqmcesucmkqckmo;
            iuqmcesucmkqckmo:
            $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc);
            goto ywgmykeycoyogqco;
            wmscaqqokaamkyiq:
            $this->mkdir(dirname($wkcwykowmmmwioqs));
            goto iigosmqysegggsau;
            ywgmykeycoyogqco:
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
            $this->saqqeqmcyyoeqici("\x63\x61\x6e\x20\x6e\x6f\164\40\160\165\164\x20\143\x6f\156\164\x65\156\x74\72\40" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
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
        aqeiyioooucwqgmg:
        uqeyauiimkymqkqo:
        goto mswywuwysiwmewwg;
        imioswwmquauqkia:
        if (!$this->exists($qogsmwakwacwqogk)) {
            goto uqeyauiimkymqkqo;
        }
        goto gaueqomusygaqaia;
        ouiusiyeswawsgyc:
        $oiegiwogmwmawkeo = '';
        goto imioswwmquauqkia;
        qywgyeaiwcumsouk:
        $oiegiwogmwmawkeo = sprintf("\45\x2e\61\x66\40" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo);
        goto meookcgmmeqeumim;
        weyikuomgeyimyay:
        if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) {
            goto ucakuayukmgmyegg;
        }
        goto qywgyeaiwcumsouk;
        mwmieoicwuqyuygy:
        $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024));
        goto gwywgyiccasyeyuc;
        gaueqomusygaqaia:
        $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk);
        goto ocyiqkkgoiqcgoiy;
        mswywuwysiwmewwg:
        return $oiegiwogmwmawkeo;
        goto oaaguckuyyqiuysg;
        ywsssccywigceiyi:
        if (!$wcoyaokieoeeswcq) {
            goto ukeoaugaookyquee;
        }
        goto mwmieoicwuqyuygy;
        cccqicomasamemuq:
        $iyqygqimawuycsyq = ManipulateArray::get($wyicceigkekkkwgs, $iyqygqimawuycsyq);
        goto weyikuomgeyimyay;
        kgyqyegwmomouqws:
        ukeoaugaookyquee:
        goto aqeiyioooucwqgmg;
        gwywgyiccasyeyuc:
        $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / pow(1024, floor($iyqygqimawuycsyq));
        goto cccqicomasamemuq;
        meookcgmmeqeumim:
        ucakuayukmgmyegg:
        goto kgyqyegwmomouqws;
        ocyiqkkgoiqcgoiy:
        $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\113\102", PR__CMN__FOUNDATION), __("\115\102", PR__CMN__FOUNDATION), __("\x47\102", PR__CMN__FOUNDATION)];
        goto ywsssccywigceiyi;
        oaaguckuyyqiuysg:
    }
}

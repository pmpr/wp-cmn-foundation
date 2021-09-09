<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto ekwmkkmwckeiaugc;
        qyuguuqgysiqsaww:
        $this->megseaqgmukmikmq($mkomwsiykqigmqca);
        goto gicqcsqmkgiyeoss;
        ymsymwiockkscikc:
        euasgwagscuiswiy:
        goto csicyuisekuyiuys;
        ekikcgogkomooqia:
        $this->megseaqgmukmikmq($smaiamkswqkisawm);
        goto ygomiqmeacmoogqa;
        ugasqyoegamcgqco:
        goto scwseaueieuugecs;
        goto ymsymwiockkscikc;
        ekwmkkmwckeiaugc:
        $smaiamkswqkisawm = false;
        goto oocsqwaeuuqceiky;
        owusgguueuoikwim:
        scwseaueieuugecs:
        goto wgeiswcaskeoeewk;
        cmgogcekgkgwakua:
        return untrailingslashit($smaiamkswqkisawm);
        goto uwgamgyakeacquiu;
        ygomiqmeacmoogqa:
        cmcemcuymikqukce:
        goto owusgguueuoikwim;
        gkwywcweoaacsqqi:
        if (!$kywouseeaeysccgq) {
            goto kwgwooqigowksicc;
        }
        goto qyuguuqgysiqsaww;
        kaccuquekgoomume:
        if (!($this->mkdir($smaiamkswqkisawm) && $kywouseeaeysccgq)) {
            goto cmcemcuymikqukce;
        }
        goto ekikcgogkomooqia;
        oocsqwaeuuqceiky:
        if (!$this->mkdir($mkomwsiykqigmqca)) {
            goto ccgaaokwqeiycemk;
        }
        goto mmekseaoqiouuycc;
        mmekseaoqiouuycc:
        if (!$miawkwqioaeasiig) {
            goto euasgwagscuiswiy;
        }
        goto gkwywcweoaacsqqi;
        gicqcsqmkgiyeoss:
        kwgwooqigowksicc:
        goto ugasqyoegamcgqco;
        csicyuisekuyiuys:
        $smaiamkswqkisawm = "{$mkomwsiykqigmqca}\x2f{$miawkwqioaeasiig}";
        goto kaccuquekgoomume;
        wgeiswcaskeoeewk:
        ccgaaokwqeiycemk:
        goto cmgogcekgkgwakua;
        uwgamgyakeacquiu:
    }
    
    public function megseaqgmukmikmq($mkomwsiykqigmqca)
    {
        goto mquqekumeaoswgye;
        mquqekumeaoswgye:
        if (!($mkomwsiykqigmqca && $this->exists($mkomwsiykqigmqca))) {
            goto aueusukugaqgmuqe;
        }
        goto ocaguoikqsymkaaw;
        sigyamiisqewqwkm:
        aueusukugaqgmuqe:
        goto gesswekoguscuise;
        mscukwykcksygqkg:
        
        $this->kwsmkgyoyaqecwuu($esaqeawoigqgagum, "\74\77\160\x68\x70\x20\151\x66\x20\x28\41\144\145\146\x69\x6e\x65\144\x28\47\x41\102\123\x50\x41\124\x48\x27\51\51\x20\173\40\x65\x78\x69\x74\73\x20\x7d");
        goto usuewcmsgysskeca;
        logyqqoeosuimcmi:
        if ($this->exists($esaqeawoigqgagum)) {
            goto aokomqwsiyysawim;
        }
        goto mscukwykcksygqkg;
        usuewcmsgysskeca:
        aokomqwsiyysawim:
        goto sigyamiisqewqwkm;
        ocaguoikqsymkaaw:
        $esaqeawoigqgagum = "{$mkomwsiykqigmqca}\x2f\151\156\144\145\x78\x2e\x70\150\160";
        goto logyqqoeosuimcmi;
        gesswekoguscuise:
    }
    
    public function exists($qogsmwakwacwqogk) : bool
    {
        return $this->yywyeskyawwcugcq()->exists($qogsmwakwacwqogk);
    }
    
    public function uuegkqwagymmusiy($miawkwqioaeasiig, $aoqagsqecokqqwqg = 2) : bool
    {
        goto akcqewkmyeqsmqcg;
        kwckkiekaoaaukkk:
        goto suwiwmkogwymwqec;
        goto mucuuagawemmkwug;
        gmeegkiyasyqwyqq:
        $sogksuscggsicmac = true;
        goto qmmwceyuwsagkgqs;
        coyyauuykuwacoes:
        suwiwmkogwymwqec:
        goto wycieuuioyumuaim;
        akcqewkmyeqsmqcg:
        if (!$this->exists($miawkwqioaeasiig)) {
            goto gaqeewuasmsgumsg;
        }
        goto aqciayqccmoesccw;
        aqciayqccmoesccw:
        $sogksuscggsicmac = $this->asysewkmisimumay($miawkwqioaeasiig) && $this->coeoweawgagkycwe($miawkwqioaeasiig) && count(scandir($miawkwqioaeasiig)) <= $aoqagsqecokqqwqg;
        goto kwckkiekaoaaukkk;
        mucuuagawemmkwug:
        gaqeewuasmsgumsg:
        goto gmeegkiyasyqwyqq;
        qmmwceyuwsagkgqs:
        $this->mkdir($miawkwqioaeasiig);
        goto coyyauuykuwacoes;
        wycieuuioyumuaim:
        return $sogksuscggsicmac;
        goto cycqgciuqgyacwyy;
        cycqgciuqgyacwyy:
    }
    
    public function remove($ucasskoyoewwmmii)
    {
        try {
            goto uwoqemmymksauskq;
            iqamqqkameysgiwm:
            $kigowwqauiumummw = false;
            goto qeoakikuyiyksguo;
            uayiuioememomcuc:
            wsqqoqwykgsoeweu:
            goto umkaquamukuuqeii;
            uwoqemmymksauskq:
            if ($ucasskoyoewwmmii && $this->exists($ucasskoyoewwmmii) && $this->qsyysysisqaygeyu($ucasskoyoewwmmii)) {
                goto wsqqoqwykgsoeweu;
            }
            goto iqamqqkameysgiwm;
            oowggkeeseuskeio:
            wasqmeqaayyqckwa:
            goto oqiqgegsqcoeiesa;
            qeoakikuyiyksguo:
            goto wasqmeqaayyqckwa;
            goto uayiuioememomcuc;
            umkaquamukuuqeii:
            $this->yywyeskyawwcugcq()->remove($ucasskoyoewwmmii);
            goto eyugqqoqukeiuowe;
            eyugqqoqukeiuowe:
            $kigowwqauiumummw = true;
            goto oowggkeeseuskeio;
            oqiqgegsqcoeiesa:
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
        goto mqgkywcmemsukuck;
        ycmeseaweuwkuksm:
        $ewgwqamkygiqaawc = @file_get_contents($qogsmwakwacwqogk);
        goto gcsmyoouiugsuywu;
        mqgkywcmemsukuck:
        $ewgwqamkygiqaawc = '';
        goto wyggeaoiwkkiewgy;
        wyggeaoiwkkiewgy:
        if (!($this->mecmkmogggamegic($qogsmwakwacwqogk) && $this->coeoweawgagkycwe($qogsmwakwacwqogk))) {
            goto cwayuyemyqsewgkc;
        }
        goto ycmeseaweuwkuksm;
        mmwoqyscsyyccmgc:
        return $ewgwqamkygiqaawc;
        goto swiiswsgcesakeei;
        gcsmyoouiugsuywu:
        cwayuyemyqsewgkc:
        goto mmwoqyscsyyccmgc;
        swiiswsgcesakeei:
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
        goto iuwmasqwsuqgcwmg;
        kuioacgcmuoukscw:
        return $kigowwqauiumummw;
        goto kummqkwyeiomswyy;
        meoicwqckywiwaii:
        try {
            goto wygsgseuikmkckig;
            wygsgseuikmkckig:
            if (!$qmwoqyacswkwkiog) {
                goto icikesyuoswkwyag;
            }
            goto iagouugawsuswccu;
            wawgcwguamqgekis:
            ouyskuyuekeeeuku:
            goto gwyqsaswyiicuoke;
            aygkqeyqeguyaumo:
            $this->yywyeskyawwcugcq()->mkdir($qmwoqyacswkwkiog, $wmekckkyoiyickmk);
            goto wawgcwguamqgekis;
            iagouugawsuswccu:
            if (!(!$this->exists($qmwoqyacswkwkiog) && $this->qsyysysisqaygeyu($qmwoqyacswkwkiog))) {
                goto ouyskuyuekeeeuku;
            }
            goto aygkqeyqeguyaumo;
            gwyqsaswyiicuoke:
            $kigowwqauiumummw = true;
            goto syysuweucygqsgoo;
            syysuweucygqsgoo:
            icikesyuoswkwyag:
            goto giqymigmomaaoicm;
            giqymigmomaaoicm:
        } catch (Exception $wgaoewqkwgomoaai) {
            $this->saqqeqmcyyoeqici("\143\141\156\40\x6e\157\164\x20\143\x72\x65\141\164\x65\40\x64\151\x72\x3a\40" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
        goto kuioacgcmuoukscw;
        iuwmasqwsuqgcwmg:
        $kigowwqauiumummw = false;
        goto meoicwqckywiwaii;
        kummqkwyeiomswyy:
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
        goto kqesamwwcakuwuas;
        msoomyweeumakeyc:
        if ($this->exists($mkomwsiykqigmqca)) {
            goto wyuagceiqgqoggeu;
        }
        goto yiuqmueuywsmsyuw;
        yyimkksgiagkwgau:
        wyuagceiqgqoggeu:
        goto qiseoemcesgaagwg;
        yiuqmueuywsmsyuw:
        $this->mkdir($mkomwsiykqigmqca);
        goto yyimkksgiagkwgau;
        kqesamwwcakuwuas:
        $wcuqeeiuyqwoqqwa = trailingslashit($mkomwsiykqigmqca) . $wkcwykowmmmwioqs;
        goto msoomyweeumakeyc;
        qiseoemcesgaagwg:
        return $this->qsyysysisqaygeyu($wkcwykowmmmwioqs) ? $this->write($wcuqeeiuyqwoqqwa, $icwicymcioeyeyek) : false;
        goto qkyeggcmymaakses;
        qkyeggcmymaakses:
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
            goto oewiaeiscuswgkmy;
            ckiasiawickuwsou:
            $this->touch($wkcwykowmmmwioqs);
            goto okseoocsaaiqsgew;
            oewiaeiscuswgkmy:
            $this->mkdir(dirname($wkcwykowmmmwioqs));
            goto ckiasiawickuwsou;
            okseoocsaaiqsgew:
            $kigowwqauiumummw = file_put_contents($wkcwykowmmmwioqs, $ewgwqamkygiqaawc);
            goto amywkuoaasmewcks;
            amywkuoaasmewcks:
        } catch (Exception $wgaoewqkwgomoaai) {
            $kigowwqauiumummw = false;
            $this->saqqeqmcyyoeqici("\143\141\156\x20\x6e\x6f\x74\40\160\x75\x74\x20\143\157\156\x74\x65\156\164\x3a\40" . $this->kyacickkomkioeyu($wgaoewqkwgomoaai));
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
        goto cuuowgeeeyogmsaw;
        soggwykcekqeiyke:
        $wcoyaokieoeeswcq = filesize($qogsmwakwacwqogk);
        goto oisomqeqaqawwega;
        qwqkiuyaqmimgeca:
        if (!$this->exists($qogsmwakwacwqogk)) {
            goto ykakussyaoscuaeq;
        }
        goto soggwykcekqeiyke;
        mcqayqmuqikoygus:
        ewsweeumwymoamog:
        goto guiwyekqasmoekqq;
        oisomqeqaqawwega:
        $wyicceigkekkkwgs = [__("\x62", PR__CMN__FOUNDATION), __("\x4b\102", PR__CMN__FOUNDATION), __("\x4d\x42", PR__CMN__FOUNDATION), __("\107\102", PR__CMN__FOUNDATION)];
        goto kmeoqoeqqkocmcka;
        kmeoqoeqqkocmcka:
        if (!$wcoyaokieoeeswcq) {
            goto ecoekossmwsagiow;
        }
        goto mcguyemaqsoowmgy;
        yuqwmuqokockaoui:
        $iyqygqimawuycsyq = ManipulateArray::get($wyicceigkekkkwgs, $iyqygqimawuycsyq);
        goto qcgiuameowgeoemw;
        guiwyekqasmoekqq:
        ecoekossmwsagiow:
        goto okqkgmgmgkgagkyq;
        cuuowgeeeyogmsaw:
        $oiegiwogmwmawkeo = '';
        goto qwqkiuyaqmimgeca;
        okqkgmgmgkgagkyq:
        ykakussyaoscuaeq:
        goto kuwwiauagwykcyae;
        mcguyemaqsoowmgy:
        $iyqygqimawuycsyq = floor(log($wcoyaokieoeeswcq) / log(1024));
        goto awukigqgaqaecoom;
        awukigqgaqaecoom:
        $oiegiwogmwmawkeo = $wcoyaokieoeeswcq / pow(1024, floor($iyqygqimawuycsyq));
        goto yuqwmuqokockaoui;
        okygwyygkiooeciu:
        $oiegiwogmwmawkeo = sprintf("\45\56\61\x66\x20" . $iyqygqimawuycsyq, $oiegiwogmwmawkeo);
        goto mcqayqmuqikoygus;
        kuwwiauagwykcyae:
        return $oiegiwogmwmawkeo;
        goto yumowyyksuouqkiq;
        qcgiuameowgeoemw:
        if (!($iyqygqimawuycsyq && $oiegiwogmwmawkeo)) {
            goto ewsweeumwymoamog;
        }
        goto okygwyygkiooeciu;
        yumowyyksuouqkiq:
    }
}

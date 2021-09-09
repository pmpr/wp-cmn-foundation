<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM;

use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\ORM\DB\Model;

class ORM extends Common
{
    const ADMIN_GET_MODELS_ACTION = "\141\144\x6d\x69\156\x5f\x67\145\x74\137\x6d\x6f\x64\145\154\163";
    
    public function __construct()
    {
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x69\x6e\x69\164"]);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\160\x61\x72\x65\156\x74\137\146\151\154\x65", [$this, "\153\155\165\x61\145\x69\x63\x6d\163\163\x69\145\163\157\x79\153"])->cecaguuoecmccuse("\163\165\x62\x6d\145\x6e\x75\x5f\x66\x69\154\145", [$this, "\x75\167\143\171\147\157\171\153\151\x79\161\x75\x6f\155\x69\x77"]);
        parent::kgquecmsgcouyaya();
    }
    
    public function kmuaeicmssiesoyk($qogsmwakwacwqogk)
    {
        goto qmeoaqmsuseueqiy;
        cuoqqgaygogsmmic:
        $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
        goto cgewcsueoyaeikgm;
        qcessicwuikwqsis:
        ickcmqoiosquugwe:
        goto yssscwioiyygssec;
        ygkcacsyyckescqs:
        if (!$orm_model instanceof Model) {
            goto ickcmqoiosquugwe;
        }
        goto cuoqqgaygogsmmic;
        igymseewwyiocoug:
        $qqomumygoacsmsie = $orm_model->cgswceaawqgeskua("\151\156\x64\145\x78");
        goto mqccmesakuemceqi;
        qwcegcuowwgiccos:
        eiawsoasmscmqswa:
        goto qcessicwuikwqsis;
        cgewcsueoyaeikgm:
        if (!(strpos($suaemuyiacqyugsm, $orm_model->miwqiiqeegeqcwis()) !== false)) {
            goto eiawsoasmscmqswa;
        }
        goto sukskmcwsoysiuqu;
        qmeoaqmsuseueqiy:
        global $orm_model;
        goto ygkcacsyyckescqs;
        twkmiuomimomscew:
        $_wp_real_parent_file[$qqomumygoacsmsie->aqcogscycyycgkuq()] = $qogsmwakwacwqogk;
        goto kooskuwkuayiuose;
        eyiamcekkgkiawqy:
        global $_wp_real_parent_file;
        goto twkmiuomimomscew;
        sukskmcwsoysiuqu:
        $qogsmwakwacwqogk = $orm_model::akuociswqmoigkas();
        goto igymseewwyiocoug;
        yssscwioiyygssec:
        return $qogsmwakwacwqogk;
        goto ieumumsgyguceusy;
        kooskuwkuayiuose:
        goeoymmqqqeeoime:
        goto qwcegcuowwgiccos;
        mqccmesakuemceqi:
        if (!$qqomumygoacsmsie) {
            goto goeoymmqqqeeoime;
        }
        goto eyiamcekkgkiawqy;
        ieumumsgyguceusy:
    }
    
    public function uwcygoykiyquomiw($qogsmwakwacwqogk)
    {
        goto oouoqimaaqcmccay;
        qsygcycwieukkgwc:
        $qogsmwakwacwqogk = $qqomumygoacsmsie->aqcogscycyycgkuq();
        goto kiwqkcaekqqyuegq;
        sycygoiaiqqageym:
        if (!$orm_model instanceof Model) {
            goto ycakugokkqkuqyiu;
        }
        goto gygawoqywkukmqee;
        gygawoqywkukmqee:
        $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
        goto kciouyuaqkyqomam;
        quwcqmyokicssyew:
        siqagquguiemuoku:
        goto iqcogmsguwoikame;
        iqcogmsguwoikame:
        ycakugokkqkuqyiu:
        goto gimmuoqwckiseaik;
        gimmuoqwckiseaik:
        return $qogsmwakwacwqogk;
        goto cmqucgoewuyieoyk;
        umgaesggesswoaqe:
        if (!$qqomumygoacsmsie) {
            goto coywmiyqgsweuiic;
        }
        goto qsygcycwieukkgwc;
        kiwqkcaekqqyuegq:
        coywmiyqgsweuiic:
        goto quwcqmyokicssyew;
        oouoqimaaqcmccay:
        global $orm_model;
        goto sycygoiaiqqageym;
        wwkgkaecgiwggcck:
        $qqomumygoacsmsie = $orm_model->cgswceaawqgeskua("\151\x6e\144\x65\x78");
        goto umgaesggesswoaqe;
        kciouyuaqkyqomam:
        if (!(strpos($suaemuyiacqyugsm, $orm_model->miwqiiqeegeqcwis()) !== false)) {
            goto siqagquguiemuoku;
        }
        goto wwkgkaecgiwggcck;
        cmqucgoewuyieoyk:
    }
    public function init()
    {
        goto ayyweymyuuiauamo;
        ayyweymyuuiauamo:
        $this->auemcisgwigucumo();
        goto mosqsmqimqgqoase;
        omugkkesagcyagmk:
        if (!is_admin()) {
            goto yqykqysmiquwoasu;
        }
        goto ygcsmkuycoagwyou;
        ygcsmkuycoagwyou:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\x64\155\151\156\x5f\x69\x6e\151\164"));
        goto kqksuugcgsyeoayy;
        kqksuugcgsyeoayy:
        yqykqysmiquwoasu:
        goto iggyqogweyosuikc;
        mosqsmqimqgqoase:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x69\x6e\x69\x74"));
        goto omugkkesagcyagmk;
        iggyqogweyosuikc:
    }
    private function auemcisgwigucumo()
    {
        goto miyqyeiwquwsacsm;
        miyqyeiwquwsacsm:
        
        $oeucsuyqysaciasy = ManipulateUser::ikcimmaqiwekowoi("\x61\x64\155\x69\156\151\163\164\x72\141\164\x6f\162");
        goto eegqyykygiccaoeo;
        acaqummmoyiemqss:
        qkcyqocqqwmqgqww:
        goto suswcqoyyqkkquuo;
        eegqyykygiccaoeo:
        if (!$oeucsuyqysaciasy) {
            goto qkcyqocqqwmqgqww;
        }
        goto ywqgcegomwaiuquc;
        wmmggowmigekyoso:
        foreach ($sksmomeiauyqaomi as $gkswkiicccswksiq) {
            $oeucsuyqysaciasy->add_cap($gkswkiicccswksiq);
            ssoucoucsgccekwe:
        }
        goto soqqemyioggmoakg;
        soqqemyioggmoakg:
        qqewoyookaskiuek:
        goto acaqummmoyiemqss;
        ywqgcegomwaiuquc:
        $sksmomeiauyqaomi = $this->homgcsoocssgwgym([], "\x69\x74\x65\155", null);
        goto wmmggowmigekyoso;
        suswcqoyyqkkquuo:
    }
}

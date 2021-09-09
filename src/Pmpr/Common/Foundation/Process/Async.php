<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use WP_Error;

abstract class Async extends Container
{
    
    protected ?string $prefix = "\167\x70";
    
    protected ?string $action = "\141\163\x79\156\x63\x5f\x72\x65\x71\165\145\163\164";
    
    protected ?string $identifier = '';
    
    protected ?array $data = [];
    
    public function ogqgmqymcwsqikme() : ?string
    {
        return $this->prefix;
    }
    
    public function eiswegiqykyigwig() : ?string
    {
        return $this->identifier;
    }
    
    public function siiuycgkowwuyuka(string $owqaeesoaygymmcy) : self
    {
        $this->identifier = $owqaeesoaygymmcy;
        return $this;
    }
    
    public function wqqseoqcmgkgoiug() : ?string
    {
        return $this->action;
    }
    
    public function cwqickkaaokiquuo(string $aiamqeawckcsuaou) : self
    {
        $this->action = $aiamqeawckcsuaou;
        return $this;
    }
    
    public function seyyiqmgwymyumoq() : array
    {
        return $this->data;
    }
    
    public function mgoekicaagiaeuki(array $icwicymcioeyeyek) : self
    {
        $this->data = $icwicymcioeyeyek;
        return $this;
    }
    
    public function __construct()
    {
        $this->siiuycgkowwuyuka($this->ogqgmqymcwsqikme() . "\x5f" . $this->wqqseoqcmgkgoiug());
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->iqkqummseggmikgo($this->eiswegiqykyigwig(), [$this, "\x61\x71\163\153\161\145\141\x6b\157\141\x75\x77\x6f\x77\167\x6d"]);
        parent::wigskegsqequoeks();
    }
    
    public function ieyosyaaisyquesq()
    {
        goto qwoyicsekiisaaqm;
        qwoyicsekiisaaqm:
        $ccamueccusigaaio = DecoratorQuery::yqymaqmqiqmmmsoo($this->qaqaomkkmcmaamwm(), $this->smquasogcycsigis());
        goto aqiagiqyqiaikgae;
        wwoksycisiauaemc:
        return $keccaugmemegoimu;
        goto awekeisckwgiksmw;
        kywqaioimyosmiui:
        $this->saqqeqmcyyoeqici("\x50\162\157\143\145\x73\163\40\144\151\163\160\141\164\x63\x68\x20\151\x73\x20\x66\141\x69\154\x65\x64\x3a\40{$keccaugmemegoimu->get_error_message()}");
        goto myoyukwoaecqcsuw;
        myoyukwoaecqcsuw:
        okmyyqowusoyusau:
        goto wwoksycisiauaemc;
        sqwqoquwewuwugsa:
        if (!is_wp_error($keccaugmemegoimu)) {
            goto okmyyqowusoyusau;
        }
        goto kywqaioimyosmiui;
        aqiagiqyqiaikgae:
        $keccaugmemegoimu = wp_remote_post(esc_url_raw($ccamueccusigaaio), $this->aoquwmukuokomaea());
        goto sqwqoquwewuwugsa;
        awekeisckwgiksmw:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto syeiaogwuowqeggi;
        gqoiykcskgcqsikm:
        mamcceoisymceocq:
        goto eiecqmeuaaaiwgiq;
        augcwakayywksmce:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\x6e\157\156\x63\x65")) {
            goto mamcceoisymceocq;
        }
        goto egmkkmiqwqgsyeyy;
        syeiaogwuowqeggi:
        
        session_write_close();
        goto augcwakayywksmce;
        egmkkmiqwqgsyeyy:
        $this->handle();
        goto gqoiykcskgcqsikm;
        eiecqmeuaaaiwgiq:
        wp_die();
        goto icisyikkoqqasowa;
        icisyikkoqqasowa:
    }
    
    protected function aoquwmukuokomaea()
    {
        goto csucwqwqcoiyeesk;
        ikemoyeuukmcueoi:
        iekieuqmokeakays:
        goto awekmuqsuwwkemoa;
        waowywqegyiieeke:
        icmgkesuuwsmygme:
        goto egksuoqocciukoaq;
        csucwqwqcoiyeesk:
        if (isset($this->postArgs)) {
            goto icmgkesuuwsmygme;
        }
        goto kmmcmckqqsioiqes;
        kmmcmckqqsioiqes:
        $ywmkwiwkosakssii = ["\x62\157\144\171" => $this->seyyiqmgwymyumoq(), "\x74\x69\155\x65\157\165\164" => 0.01, "\x63\x6f\157\153\x69\x65\x73" => $_COOKIE, "\x62\x6c\x6f\143\153\151\x6e\x67" => false, "\163\163\154\x76\145\162\x69\x66\x79" => $this->sscegwueamckwmcy("\150\x74\x74\160\x73\137\x6c\157\143\141\x6c\137\x73\163\154\137\x76\x65\x72\x69\146\x79", false)];
        goto miaqksuykcksyyuo;
        egksuoqocciukoaq:
        $ywmkwiwkosakssii = $this->postArgs;
        goto ikemoyeuukmcueoi;
        awekmuqsuwwkemoa:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x70\157\x73\164\x5f\141\162\147\x73", $ywmkwiwkosakssii);
        goto qmcmiosogysemwsc;
        miaqksuykcksyyuo:
        goto iekieuqmokeakays;
        goto waowywqegyiieeke;
        qmcmiosogysemwsc:
    }
    
    protected function smquasogcycsigis()
    {
        goto qeoeagouucmwsyqw;
        oisqamuwmiswywko:
        $eeamcawaiqocomwy = ManipulateAjax::oiucukewkckkwiqc();
        goto oyiyakeisgumawcu;
        ayysooqqqwcueuey:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\161\165\145\162\171\137\x75\x72\x6c", $eeamcawaiqocomwy);
        goto ycuaeigqqkcqywcm;
        jkoscsaeoquakoss:
        egkqsyyusoukuieu:
        goto ayysooqqqwcueuey;
        qeoeagouucmwsyqw:
        if (isset($this->queryUrl)) {
            goto eiaqgiaygokkeksu;
        }
        goto oisqamuwmiswywko;
        ewcwmioqiiogasky:
        eiaqgiaygokkeksu:
        goto uymugyyimciiyuos;
        uymugyyimciiyuos:
        $eeamcawaiqocomwy = $this->queryUrl;
        goto jkoscsaeoquakoss;
        oyiyakeisgumawcu:
        goto egkqsyyusoukuieu;
        goto ewcwmioqiiogasky;
        ycuaeigqqkcqywcm:
    }
    
    protected function qaqaomkkmcmaamwm()
    {
        goto uggkyoamgoaywawg;
        kkgyymqwugkcgoew:
        ygyqcgyoyckqqqsk:
        goto mcokememaqyocmww;
        mcokememaqyocmww:
        return $this->sscegwueamckwmcy("{$owqaeesoaygymmcy}\137\x71\x75\x65\162\x79\x5f\141\162\x67\163", $ywmkwiwkosakssii);
        goto aaemagwasykayacy;
        xiuwuuokasgwkicc:
        $ywmkwiwkosakssii = ["\156\157\x6e\x63\x65" => wp_create_nonce($owqaeesoaygymmcy), "\141\x63\x74\151\157\156" => $owqaeesoaygymmcy];
        goto wiqoigsossioeckw;
        osocgummgayysiag:
        $ywmkwiwkosakssii = $this->queryArgs;
        goto kkgyymqwugkcgoew;
        uggkyoamgoaywawg:
        $owqaeesoaygymmcy = $this->eiswegiqykyigwig();
        goto imswukmmekkkaeqo;
        imswukmmekkkaeqo:
        if (isset($this->queryArgs)) {
            goto usogieysoyaiwmqu;
        }
        goto xiuwuuokasgwkicc;
        wiqoigsossioeckw:
        goto ygyqcgyoyckqqqsk;
        goto imieoekoumoucuag;
        imieoekoumoucuag:
        usogieysoyaiwmqu:
        goto osocgummgayysiag;
        aaemagwasykayacy:
    }
    
    protected abstract function handle();
}

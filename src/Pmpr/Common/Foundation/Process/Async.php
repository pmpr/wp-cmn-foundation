<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use WP_Error;

abstract class Async extends Container
{
    
    protected ?string $prefix = "\167\160";
    
    protected ?string $action = "\x61\163\x79\x6e\143\137\x72\x65\x71\165\x65\x73\164";
    
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
        $this->iqkqummseggmikgo($this->eiswegiqykyigwig(), [$this, "\x61\161\x73\153\x71\145\x61\153\x6f\x61\165\x77\x6f\167\x77\155"]);
        parent::wigskegsqequoeks();
    }
    
    public function ieyosyaaisyquesq()
    {
        goto yaeakiwsegsacsge;
        mqeykkkeiygqugcq:
        $keccaugmemegoimu = wp_remote_post(esc_url_raw($ccamueccusigaaio), $this->aoquwmukuokomaea());
        goto mkwemyioswykkqyc;
        muqyyaqmeuimcuey:
        $this->saqqeqmcyyoeqici("\x50\162\x6f\143\145\x73\x73\40\x64\x69\163\160\141\x74\143\x68\40\x69\163\40\x66\141\151\154\145\144\72\40{$keccaugmemegoimu->get_error_message()}");
        goto kasewecuqyooymwi;
        yaeakiwsegsacsge:
        $ccamueccusigaaio = DecoratorQuery::yqymaqmqiqmmmsoo($this->qaqaomkkmcmaamwm(), $this->smquasogcycsigis());
        goto mqeykkkeiygqugcq;
        yqoaamqqqokguyis:
        return $keccaugmemegoimu;
        goto gimsqaumkeequwwu;
        mkwemyioswykkqyc:
        if (!is_wp_error($keccaugmemegoimu)) {
            goto gsymoqgeekuqeiia;
        }
        goto muqyyaqmeuimcuey;
        kasewecuqyooymwi:
        gsymoqgeekuqeiia:
        goto yqoaamqqqokguyis;
        gimsqaumkeequwwu:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto syweyeiawwgmkmio;
        oyaequqoiqwmagqe:
        $this->handle();
        goto imoeyqywqygoeigm;
        imoeyqywqygoeigm:
        iaamqeeowsgwogau:
        goto ommcauiiosgwswii;
        syweyeiawwgmkmio:
        
        session_write_close();
        goto akaeugoqiowqeiay;
        akaeugoqiowqeiay:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\x6e\x6f\156\143\x65")) {
            goto iaamqeeowsgwogau;
        }
        goto oyaequqoiqwmagqe;
        ommcauiiosgwswii:
        wp_die();
        goto gagkmiwkumaccqog;
        gagkmiwkumaccqog:
    }
    
    protected function aoquwmukuokomaea()
    {
        goto csiucioiukwwmmki;
        csiucioiukwwmmki:
        if (isset($this->postArgs)) {
            goto wkquwqwsswuayeoy;
        }
        goto kaosyomgqswqeyue;
        ioqyoqsseocgsiki:
        wkquwqwsswuayeoy:
        goto giswiemqquiigucy;
        iagcgqyssmegamqo:
        goto uwguwaeqqmissegu;
        goto ioqyoqsseocgsiki;
        giswiemqquiigucy:
        $ywmkwiwkosakssii = $this->postArgs;
        goto cwqeoeeoiggkocks;
        qaqaieuiuemceagu:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x70\157\x73\164\x5f\141\162\x67\163", $ywmkwiwkosakssii);
        goto pscgmkuecmwkakcs;
        kaosyomgqswqeyue:
        $ywmkwiwkosakssii = ["\142\x6f\x64\171" => $this->seyyiqmgwymyumoq(), "\164\x69\155\x65\x6f\x75\164" => 0.01, "\143\x6f\x6f\x6b\x69\145\163" => $_COOKIE, "\x62\154\157\x63\153\x69\x6e\x67" => false, "\x73\x73\x6c\x76\145\x72\151\x66\x79" => $this->sscegwueamckwmcy("\150\164\164\160\163\137\154\x6f\143\x61\x6c\137\x73\x73\154\x5f\166\x65\162\151\146\x79", false)];
        goto iagcgqyssmegamqo;
        cwqeoeeoiggkocks:
        uwguwaeqqmissegu:
        goto qaqaieuiuemceagu;
        pscgmkuecmwkakcs:
    }
    
    protected function smquasogcycsigis()
    {
        goto kusuiaesiqamokwu;
        kqyauuewaeqaaemq:
        gsaqgmmoiyoqcqge:
        goto uimkessmquwwowuy;
        kusuiaesiqamokwu:
        if (isset($this->queryUrl)) {
            goto yysaoyaeyoyiwaao;
        }
        goto muoasgcackyqmwya;
        gkgaqgyiuuggesqi:
        goto gsaqgmmoiyoqcqge;
        goto ycsqqcuwcamsswio;
        uimkessmquwwowuy:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x71\165\145\162\171\137\165\x72\154", $eeamcawaiqocomwy);
        goto gmgiugscseeqmcws;
        ycsqqcuwcamsswio:
        yysaoyaeyoyiwaao:
        goto aoyeggqisqucyycw;
        aoyeggqisqucyycw:
        $eeamcawaiqocomwy = $this->queryUrl;
        goto kqyauuewaeqaaemq;
        muoasgcackyqmwya:
        $eeamcawaiqocomwy = ManipulateAjax::oiucukewkckkwiqc();
        goto gkgaqgyiuuggesqi;
        gmgiugscseeqmcws:
    }
    
    protected function qaqaomkkmcmaamwm()
    {
        goto kckkwasakyqqaysi;
        wugeaooaequcowwc:
        if (isset($this->queryArgs)) {
            goto cgskgkccqqoeqwek;
        }
        goto ugweisqsykoymuuk;
        kckkwasakyqqaysi:
        $owqaeesoaygymmcy = $this->eiswegiqykyigwig();
        goto wugeaooaequcowwc;
        aqagyoekusowaige:
        $ywmkwiwkosakssii = $this->queryArgs;
        goto mkccuoewagiiuaea;
        sseaggmmkeusqqgm:
        return $this->sscegwueamckwmcy("{$owqaeesoaygymmcy}\x5f\161\x75\x65\x72\171\137\141\162\147\x73", $ywmkwiwkosakssii);
        goto cuckqumkcguagqoe;
        weccgwumycqumocm:
        goto ooysyaacumewauwa;
        goto syiauiggwuycaaus;
        ugweisqsykoymuuk:
        $ywmkwiwkosakssii = ["\156\x6f\156\x63\x65" => wp_create_nonce($owqaeesoaygymmcy), "\141\x63\164\151\x6f\x6e" => $owqaeesoaygymmcy];
        goto weccgwumycqumocm;
        mkccuoewagiiuaea:
        ooysyaacumewauwa:
        goto sseaggmmkeusqqgm;
        syiauiggwuycaaus:
        cgskgkccqqoeqwek:
        goto aqagyoekusowaige;
        cuckqumkcguagqoe:
    }
    
    protected abstract function handle();
}

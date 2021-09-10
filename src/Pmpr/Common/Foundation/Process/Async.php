<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    
    protected ?string $action = "\141\x73\x79\x6e\x63\x5f\162\145\x71\165\x65\163\x74";
    
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
        $this->siiuycgkowwuyuka($this->ogqgmqymcwsqikme() . "\137" . $this->wqqseoqcmgkgoiug());
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->iqkqummseggmikgo($this->eiswegiqykyigwig(), [$this, "\141\x71\x73\x6b\161\x65\x61\153\157\x61\x75\167\x6f\167\167\x6d"]);
        parent::wigskegsqequoeks();
    }
    
    public function ieyosyaaisyquesq()
    {
        goto yaeakiwsegsacsge;
        mqeykkkeiygqugcq:
        $keccaugmemegoimu = wp_remote_post(esc_url_raw($ccamueccusigaaio), $this->aoquwmukuokomaea());
        goto mkwemyioswykkqyc;
        mkwemyioswykkqyc:
        if (!is_wp_error($keccaugmemegoimu)) {
            goto gsymoqgeekuqeiia;
        }
        goto muqyyaqmeuimcuey;
        yqoaamqqqokguyis:
        return $keccaugmemegoimu;
        goto gimsqaumkeequwwu;
        kasewecuqyooymwi:
        gsymoqgeekuqeiia:
        goto yqoaamqqqokguyis;
        muqyyaqmeuimcuey:
        $this->saqqeqmcyyoeqici("\120\162\157\143\145\163\163\40\x64\x69\x73\160\x61\x74\143\150\x20\151\x73\x20\146\x61\x69\x6c\145\144\72\40{$keccaugmemegoimu->get_error_message()}");
        goto kasewecuqyooymwi;
        yaeakiwsegsacsge:
        $ccamueccusigaaio = DecoratorQuery::yqymaqmqiqmmmsoo($this->qaqaomkkmcmaamwm(), $this->smquasogcycsigis());
        goto mqeykkkeiygqugcq;
        gimsqaumkeequwwu:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto syweyeiawwgmkmio;
        ommcauiiosgwswii:
        wp_die();
        goto gagkmiwkumaccqog;
        akaeugoqiowqeiay:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\156\x6f\156\143\x65")) {
            goto iaamqeeowsgwogau;
        }
        goto oyaequqoiqwmagqe;
        syweyeiawwgmkmio:
        
        session_write_close();
        goto akaeugoqiowqeiay;
        oyaequqoiqwmagqe:
        $this->handle();
        goto imoeyqywqygoeigm;
        imoeyqywqygoeigm:
        iaamqeeowsgwogau:
        goto ommcauiiosgwswii;
        gagkmiwkumaccqog:
    }
    
    protected function aoquwmukuokomaea()
    {
        goto csiucioiukwwmmki;
        ioqyoqsseocgsiki:
        wkquwqwsswuayeoy:
        goto giswiemqquiigucy;
        kaosyomgqswqeyue:
        $ywmkwiwkosakssii = ["\142\x6f\x64\171" => $this->seyyiqmgwymyumoq(), "\164\151\x6d\x65\x6f\x75\x74" => 0.01, "\x63\x6f\x6f\153\x69\145\x73" => $_COOKIE, "\x62\x6c\x6f\x63\153\x69\156\147" => false, "\163\163\154\x76\145\162\151\x66\x79" => $this->sscegwueamckwmcy("\150\x74\164\x70\x73\x5f\154\x6f\143\141\x6c\x5f\163\163\x6c\137\x76\x65\x72\151\x66\171", false)];
        goto iagcgqyssmegamqo;
        cwqeoeeoiggkocks:
        uwguwaeqqmissegu:
        goto qaqaieuiuemceagu;
        giswiemqquiigucy:
        $ywmkwiwkosakssii = $this->postArgs;
        goto cwqeoeeoiggkocks;
        iagcgqyssmegamqo:
        goto uwguwaeqqmissegu;
        goto ioqyoqsseocgsiki;
        csiucioiukwwmmki:
        if (isset($this->postArgs)) {
            goto wkquwqwsswuayeoy;
        }
        goto kaosyomgqswqeyue;
        qaqaieuiuemceagu:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\160\157\163\x74\137\141\162\x67\163", $ywmkwiwkosakssii);
        goto pscgmkuecmwkakcs;
        pscgmkuecmwkakcs:
    }
    
    protected function smquasogcycsigis()
    {
        goto kusuiaesiqamokwu;
        kqyauuewaeqaaemq:
        gsaqgmmoiyoqcqge:
        goto uimkessmquwwowuy;
        muoasgcackyqmwya:
        $eeamcawaiqocomwy = ManipulateAjax::oiucukewkckkwiqc();
        goto gkgaqgyiuuggesqi;
        aoyeggqisqucyycw:
        $eeamcawaiqocomwy = $this->queryUrl;
        goto kqyauuewaeqaaemq;
        ycsqqcuwcamsswio:
        yysaoyaeyoyiwaao:
        goto aoyeggqisqucyycw;
        kusuiaesiqamokwu:
        if (isset($this->queryUrl)) {
            goto yysaoyaeyoyiwaao;
        }
        goto muoasgcackyqmwya;
        gkgaqgyiuuggesqi:
        goto gsaqgmmoiyoqcqge;
        goto ycsqqcuwcamsswio;
        uimkessmquwwowuy:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x71\x75\145\162\171\x5f\165\162\154", $eeamcawaiqocomwy);
        goto gmgiugscseeqmcws;
        gmgiugscseeqmcws:
    }
    
    protected function qaqaomkkmcmaamwm()
    {
        goto kckkwasakyqqaysi;
        syiauiggwuycaaus:
        cgskgkccqqoeqwek:
        goto aqagyoekusowaige;
        kckkwasakyqqaysi:
        $owqaeesoaygymmcy = $this->eiswegiqykyigwig();
        goto wugeaooaequcowwc;
        mkccuoewagiiuaea:
        ooysyaacumewauwa:
        goto sseaggmmkeusqqgm;
        weccgwumycqumocm:
        goto ooysyaacumewauwa;
        goto syiauiggwuycaaus;
        aqagyoekusowaige:
        $ywmkwiwkosakssii = $this->queryArgs;
        goto mkccuoewagiiuaea;
        sseaggmmkeusqqgm:
        return $this->sscegwueamckwmcy("{$owqaeesoaygymmcy}\137\161\x75\x65\162\x79\x5f\141\x72\x67\x73", $ywmkwiwkosakssii);
        goto cuckqumkcguagqoe;
        ugweisqsykoymuuk:
        $ywmkwiwkosakssii = ["\156\157\156\143\145" => wp_create_nonce($owqaeesoaygymmcy), "\x61\143\x74\x69\x6f\156" => $owqaeesoaygymmcy];
        goto weccgwumycqumocm;
        wugeaooaequcowwc:
        if (isset($this->queryArgs)) {
            goto cgskgkccqqoeqwek;
        }
        goto ugweisqsykoymuuk;
        cuckqumkcguagqoe:
    }
    
    protected abstract function handle();
}

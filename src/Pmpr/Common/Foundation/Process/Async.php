<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    
    protected ?string $action = "\x61\163\171\156\x63\x5f\162\x65\161\x75\x65\x73\164";
    
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
        $this->iqkqummseggmikgo($this->eiswegiqykyigwig(), [$this, "\x61\x71\163\153\x71\x65\x61\x6b\x6f\141\165\167\x6f\x77\167\x6d"]);
        parent::wigskegsqequoeks();
    }
    
    public function ieyosyaaisyquesq()
    {
        goto yaeakiwsegsacsge;
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
        muqyyaqmeuimcuey:
        $this->saqqeqmcyyoeqici("\x50\x72\x6f\143\x65\163\163\x20\x64\x69\163\x70\x61\x74\x63\x68\x20\151\163\40\x66\141\x69\154\x65\144\72\40{$keccaugmemegoimu->get_error_message()}");
        goto kasewecuqyooymwi;
        kasewecuqyooymwi:
        gsymoqgeekuqeiia:
        goto yqoaamqqqokguyis;
        mqeykkkeiygqugcq:
        $keccaugmemegoimu = wp_remote_post(esc_url_raw($ccamueccusigaaio), $this->aoquwmukuokomaea());
        goto mkwemyioswykkqyc;
        gimsqaumkeequwwu:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto syweyeiawwgmkmio;
        imoeyqywqygoeigm:
        iaamqeeowsgwogau:
        goto ommcauiiosgwswii;
        oyaequqoiqwmagqe:
        $this->handle();
        goto imoeyqywqygoeigm;
        ommcauiiosgwswii:
        wp_die();
        goto gagkmiwkumaccqog;
        akaeugoqiowqeiay:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\x6e\157\x6e\143\x65")) {
            goto iaamqeeowsgwogau;
        }
        goto oyaequqoiqwmagqe;
        syweyeiawwgmkmio:
        
        session_write_close();
        goto akaeugoqiowqeiay;
        gagkmiwkumaccqog:
    }
    
    protected function aoquwmukuokomaea()
    {
        goto csiucioiukwwmmki;
        kaosyomgqswqeyue:
        $ywmkwiwkosakssii = ["\x62\157\x64\171" => $this->seyyiqmgwymyumoq(), "\164\151\x6d\x65\x6f\165\164" => 0.01, "\x63\x6f\157\153\x69\145\163" => $_COOKIE, "\x62\154\157\x63\153\x69\x6e\147" => false, "\163\163\x6c\x76\x65\162\151\x66\171" => $this->sscegwueamckwmcy("\x68\x74\164\160\x73\x5f\154\157\143\x61\x6c\137\x73\x73\154\137\166\145\x72\151\146\x79", false)];
        goto iagcgqyssmegamqo;
        csiucioiukwwmmki:
        if (isset($this->postArgs)) {
            goto wkquwqwsswuayeoy;
        }
        goto kaosyomgqswqeyue;
        cwqeoeeoiggkocks:
        uwguwaeqqmissegu:
        goto qaqaieuiuemceagu;
        iagcgqyssmegamqo:
        goto uwguwaeqqmissegu;
        goto ioqyoqsseocgsiki;
        ioqyoqsseocgsiki:
        wkquwqwsswuayeoy:
        goto giswiemqquiigucy;
        qaqaieuiuemceagu:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x70\157\163\164\x5f\x61\x72\x67\x73", $ywmkwiwkosakssii);
        goto pscgmkuecmwkakcs;
        giswiemqquiigucy:
        $ywmkwiwkosakssii = $this->postArgs;
        goto cwqeoeeoiggkocks;
        pscgmkuecmwkakcs:
    }
    
    protected function smquasogcycsigis()
    {
        goto kusuiaesiqamokwu;
        ycsqqcuwcamsswio:
        yysaoyaeyoyiwaao:
        goto aoyeggqisqucyycw;
        gkgaqgyiuuggesqi:
        goto gsaqgmmoiyoqcqge;
        goto ycsqqcuwcamsswio;
        kqyauuewaeqaaemq:
        gsaqgmmoiyoqcqge:
        goto uimkessmquwwowuy;
        aoyeggqisqucyycw:
        $eeamcawaiqocomwy = $this->queryUrl;
        goto kqyauuewaeqaaemq;
        uimkessmquwwowuy:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\161\165\x65\162\171\137\x75\x72\154", $eeamcawaiqocomwy);
        goto gmgiugscseeqmcws;
        kusuiaesiqamokwu:
        if (isset($this->queryUrl)) {
            goto yysaoyaeyoyiwaao;
        }
        goto muoasgcackyqmwya;
        muoasgcackyqmwya:
        $eeamcawaiqocomwy = ManipulateAjax::oiucukewkckkwiqc();
        goto gkgaqgyiuuggesqi;
        gmgiugscseeqmcws:
    }
    
    protected function qaqaomkkmcmaamwm()
    {
        goto kckkwasakyqqaysi;
        ugweisqsykoymuuk:
        $ywmkwiwkosakssii = ["\156\x6f\156\143\x65" => wp_create_nonce($owqaeesoaygymmcy), "\141\x63\x74\x69\157\156" => $owqaeesoaygymmcy];
        goto weccgwumycqumocm;
        wugeaooaequcowwc:
        if (isset($this->queryArgs)) {
            goto cgskgkccqqoeqwek;
        }
        goto ugweisqsykoymuuk;
        syiauiggwuycaaus:
        cgskgkccqqoeqwek:
        goto aqagyoekusowaige;
        sseaggmmkeusqqgm:
        return $this->sscegwueamckwmcy("{$owqaeesoaygymmcy}\137\161\165\x65\x72\x79\x5f\x61\162\147\163", $ywmkwiwkosakssii);
        goto cuckqumkcguagqoe;
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
        cuckqumkcguagqoe:
    }
    
    protected abstract function handle();
}

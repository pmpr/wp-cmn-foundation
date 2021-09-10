<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use WP_Error;

abstract class Async extends Container
{
    
    protected ?string $prefix = "\x77\x70";
    
    protected ?string $action = "\x61\x73\x79\156\143\137\x72\145\x71\x75\x65\x73\164";
    
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
        $this->iqkqummseggmikgo($this->eiswegiqykyigwig(), [$this, "\141\161\x73\x6b\161\x65\141\x6b\x6f\x61\165\167\x6f\167\167\155"]);
        parent::wigskegsqequoeks();
    }
    
    public function ieyosyaaisyquesq()
    {
        goto kysgwgoeaoiyaqea;
        yaeakiwsegsacsge:
        $this->saqqeqmcyyoeqici("\120\x72\157\143\145\x73\163\x20\144\151\163\160\x61\x74\143\x68\x20\151\163\x20\146\141\x69\154\145\x64\72\40{$keccaugmemegoimu->get_error_message()}");
        goto mqeykkkeiygqugcq;
        mqeykkkeiygqugcq:
        wcosqycukygikgsa:
        goto mkwemyioswykkqyc;
        gsymoqgeekuqeiia:
        if (!is_wp_error($keccaugmemegoimu)) {
            goto wcosqycukygikgsa;
        }
        goto yaeakiwsegsacsge;
        scssmwmagsaouymy:
        $keccaugmemegoimu = wp_remote_post(esc_url_raw($ccamueccusigaaio), $this->aoquwmukuokomaea());
        goto gsymoqgeekuqeiia;
        kysgwgoeaoiyaqea:
        $ccamueccusigaaio = DecoratorQuery::yqymaqmqiqmmmsoo($this->qaqaomkkmcmaamwm(), $this->smquasogcycsigis());
        goto scssmwmagsaouymy;
        mkwemyioswykkqyc:
        return $keccaugmemegoimu;
        goto muqyyaqmeuimcuey;
        muqyyaqmeuimcuey:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto yqoaamqqqokguyis;
        gimsqaumkeequwwu:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\x6e\157\156\x63\x65")) {
            goto kasewecuqyooymwi;
        }
        goto iaamqeeowsgwogau;
        yqoaamqqqokguyis:
        
        session_write_close();
        goto gimsqaumkeequwwu;
        akaeugoqiowqeiay:
        wp_die();
        goto oyaequqoiqwmagqe;
        iaamqeeowsgwogau:
        $this->handle();
        goto syweyeiawwgmkmio;
        syweyeiawwgmkmio:
        kasewecuqyooymwi:
        goto akaeugoqiowqeiay;
        oyaequqoiqwmagqe:
    }
    
    protected function aoquwmukuokomaea()
    {
        goto gagkmiwkumaccqog;
        ioqyoqsseocgsiki:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\160\157\x73\x74\137\x61\162\x67\x73", $ywmkwiwkosakssii);
        goto giswiemqquiigucy;
        iagcgqyssmegamqo:
        ommcauiiosgwswii:
        goto ioqyoqsseocgsiki;
        csiucioiukwwmmki:
        imoeyqywqygoeigm:
        goto kaosyomgqswqeyue;
        gagkmiwkumaccqog:
        if (isset($this->postArgs)) {
            goto imoeyqywqygoeigm;
        }
        goto wkquwqwsswuayeoy;
        kaosyomgqswqeyue:
        $ywmkwiwkosakssii = $this->postArgs;
        goto iagcgqyssmegamqo;
        uwguwaeqqmissegu:
        goto ommcauiiosgwswii;
        goto csiucioiukwwmmki;
        wkquwqwsswuayeoy:
        $ywmkwiwkosakssii = ["\142\157\144\x79" => $this->seyyiqmgwymyumoq(), "\164\x69\155\x65\x6f\165\x74" => 0.01, "\143\157\x6f\153\151\x65\163" => $_COOKIE, "\142\x6c\157\143\153\x69\x6e\147" => false, "\163\163\x6c\x76\x65\x72\151\x66\171" => $this->sscegwueamckwmcy("\150\164\164\x70\x73\x5f\x6c\157\x63\x61\154\x5f\163\163\x6c\137\166\x65\x72\x69\x66\x79", false)];
        goto uwguwaeqqmissegu;
        giswiemqquiigucy:
    }
    
    protected function smquasogcycsigis()
    {
        goto pscgmkuecmwkakcs;
        ycsqqcuwcamsswio:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\161\x75\x65\162\171\137\165\162\154", $eeamcawaiqocomwy);
        goto aoyeggqisqucyycw;
        kusuiaesiqamokwu:
        cwqeoeeoiggkocks:
        goto muoasgcackyqmwya;
        muoasgcackyqmwya:
        $eeamcawaiqocomwy = $this->queryUrl;
        goto gkgaqgyiuuggesqi;
        yysaoyaeyoyiwaao:
        $eeamcawaiqocomwy = ManipulateAjax::oiucukewkckkwiqc();
        goto gsaqgmmoiyoqcqge;
        gkgaqgyiuuggesqi:
        qaqaieuiuemceagu:
        goto ycsqqcuwcamsswio;
        gsaqgmmoiyoqcqge:
        goto qaqaieuiuemceagu;
        goto kusuiaesiqamokwu;
        pscgmkuecmwkakcs:
        if (isset($this->queryUrl)) {
            goto cwqeoeeoiggkocks;
        }
        goto yysaoyaeyoyiwaao;
        aoyeggqisqucyycw:
    }
    
    protected function qaqaomkkmcmaamwm()
    {
        goto gmgiugscseeqmcws;
        cgskgkccqqoeqwek:
        if (isset($this->queryArgs)) {
            goto kqyauuewaeqaaemq;
        }
        goto ooysyaacumewauwa;
        ooysyaacumewauwa:
        $ywmkwiwkosakssii = ["\156\x6f\156\x63\x65" => wp_create_nonce($owqaeesoaygymmcy), "\x61\x63\x74\x69\157\x6e" => $owqaeesoaygymmcy];
        goto kckkwasakyqqaysi;
        gmgiugscseeqmcws:
        $owqaeesoaygymmcy = $this->eiswegiqykyigwig();
        goto cgskgkccqqoeqwek;
        kckkwasakyqqaysi:
        goto uimkessmquwwowuy;
        goto wugeaooaequcowwc;
        syiauiggwuycaaus:
        return $this->sscegwueamckwmcy("{$owqaeesoaygymmcy}\137\x71\165\145\162\x79\137\141\162\147\x73", $ywmkwiwkosakssii);
        goto aqagyoekusowaige;
        weccgwumycqumocm:
        uimkessmquwwowuy:
        goto syiauiggwuycaaus;
        wugeaooaequcowwc:
        kqyauuewaeqaaemq:
        goto ugweisqsykoymuuk;
        ugweisqsykoymuuk:
        $ywmkwiwkosakssii = $this->queryArgs;
        goto weccgwumycqumocm;
        aqagyoekusowaige:
    }
    
    protected abstract function handle();
}

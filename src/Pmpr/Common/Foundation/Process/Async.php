<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    
    protected ?string $action = "\x61\163\171\156\x63\137\x72\x65\x71\x75\x65\x73\164";
    
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
        $this->iqkqummseggmikgo($this->eiswegiqykyigwig(), [$this, "\141\161\x73\153\161\x65\x61\153\157\x61\165\x77\157\167\x77\x6d"]);
        parent::wigskegsqequoeks();
    }
    
    public function ieyosyaaisyquesq()
    {
        goto yaeakiwsegsacsge;
        muqyyaqmeuimcuey:
        $this->saqqeqmcyyoeqici("\120\162\157\143\x65\x73\x73\40\144\151\x73\x70\141\164\143\x68\x20\151\163\x20\146\x61\151\154\145\144\72\x20{$keccaugmemegoimu->get_error_message()}");
        goto kasewecuqyooymwi;
        yqoaamqqqokguyis:
        return $keccaugmemegoimu;
        goto gimsqaumkeequwwu;
        yaeakiwsegsacsge:
        $ccamueccusigaaio = DecoratorQuery::yqymaqmqiqmmmsoo($this->qaqaomkkmcmaamwm(), $this->smquasogcycsigis());
        goto mqeykkkeiygqugcq;
        kasewecuqyooymwi:
        gsymoqgeekuqeiia:
        goto yqoaamqqqokguyis;
        mqeykkkeiygqugcq:
        $keccaugmemegoimu = wp_remote_post(esc_url_raw($ccamueccusigaaio), $this->aoquwmukuokomaea());
        goto mkwemyioswykkqyc;
        mkwemyioswykkqyc:
        if (!is_wp_error($keccaugmemegoimu)) {
            goto gsymoqgeekuqeiia;
        }
        goto muqyyaqmeuimcuey;
        gimsqaumkeequwwu:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto syweyeiawwgmkmio;
        oyaequqoiqwmagqe:
        $this->handle();
        goto imoeyqywqygoeigm;
        akaeugoqiowqeiay:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\156\x6f\156\143\145")) {
            goto iaamqeeowsgwogau;
        }
        goto oyaequqoiqwmagqe;
        syweyeiawwgmkmio:
        
        session_write_close();
        goto akaeugoqiowqeiay;
        imoeyqywqygoeigm:
        iaamqeeowsgwogau:
        goto ommcauiiosgwswii;
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
        qaqaieuiuemceagu:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x70\x6f\x73\164\x5f\x61\162\147\x73", $ywmkwiwkosakssii);
        goto pscgmkuecmwkakcs;
        giswiemqquiigucy:
        $ywmkwiwkosakssii = $this->postArgs;
        goto cwqeoeeoiggkocks;
        kaosyomgqswqeyue:
        $ywmkwiwkosakssii = ["\142\x6f\x64\x79" => $this->seyyiqmgwymyumoq(), "\x74\x69\155\145\x6f\x75\164" => 0.01, "\143\x6f\157\x6b\x69\x65\163" => $_COOKIE, "\142\154\x6f\x63\x6b\151\156\x67" => false, "\x73\163\x6c\166\x65\162\x69\146\x79" => $this->sscegwueamckwmcy("\150\x74\164\160\x73\137\154\157\x63\141\154\x5f\x73\x73\154\x5f\x76\x65\x72\x69\146\x79", false)];
        goto iagcgqyssmegamqo;
        ioqyoqsseocgsiki:
        wkquwqwsswuayeoy:
        goto giswiemqquiigucy;
        iagcgqyssmegamqo:
        goto uwguwaeqqmissegu;
        goto ioqyoqsseocgsiki;
        cwqeoeeoiggkocks:
        uwguwaeqqmissegu:
        goto qaqaieuiuemceagu;
        pscgmkuecmwkakcs:
    }
    
    protected function smquasogcycsigis()
    {
        goto kusuiaesiqamokwu;
        muoasgcackyqmwya:
        $eeamcawaiqocomwy = ManipulateAjax::oiucukewkckkwiqc();
        goto gkgaqgyiuuggesqi;
        kusuiaesiqamokwu:
        if (isset($this->queryUrl)) {
            goto yysaoyaeyoyiwaao;
        }
        goto muoasgcackyqmwya;
        uimkessmquwwowuy:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x71\x75\145\162\x79\137\x75\x72\x6c", $eeamcawaiqocomwy);
        goto gmgiugscseeqmcws;
        kqyauuewaeqaaemq:
        gsaqgmmoiyoqcqge:
        goto uimkessmquwwowuy;
        gkgaqgyiuuggesqi:
        goto gsaqgmmoiyoqcqge;
        goto ycsqqcuwcamsswio;
        ycsqqcuwcamsswio:
        yysaoyaeyoyiwaao:
        goto aoyeggqisqucyycw;
        aoyeggqisqucyycw:
        $eeamcawaiqocomwy = $this->queryUrl;
        goto kqyauuewaeqaaemq;
        gmgiugscseeqmcws:
    }
    
    protected function qaqaomkkmcmaamwm()
    {
        goto kckkwasakyqqaysi;
        kckkwasakyqqaysi:
        $owqaeesoaygymmcy = $this->eiswegiqykyigwig();
        goto wugeaooaequcowwc;
        ugweisqsykoymuuk:
        $ywmkwiwkosakssii = ["\156\x6f\156\143\x65" => wp_create_nonce($owqaeesoaygymmcy), "\141\143\164\151\157\x6e" => $owqaeesoaygymmcy];
        goto weccgwumycqumocm;
        sseaggmmkeusqqgm:
        return $this->sscegwueamckwmcy("{$owqaeesoaygymmcy}\137\x71\165\x65\x72\x79\137\141\x72\147\x73", $ywmkwiwkosakssii);
        goto cuckqumkcguagqoe;
        syiauiggwuycaaus:
        cgskgkccqqoeqwek:
        goto aqagyoekusowaige;
        wugeaooaequcowwc:
        if (isset($this->queryArgs)) {
            goto cgskgkccqqoeqwek;
        }
        goto ugweisqsykoymuuk;
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

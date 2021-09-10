<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    
    protected ?string $action = "\141\163\x79\156\143\137\162\x65\x71\x75\x65\x73\x74";
    
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
        $this->iqkqummseggmikgo($this->eiswegiqykyigwig(), [$this, "\x61\x71\x73\153\161\145\x61\x6b\157\x61\165\x77\157\x77\167\x6d"]);
        parent::wigskegsqequoeks();
    }
    
    public function ieyosyaaisyquesq()
    {
        goto yaeakiwsegsacsge;
        mkwemyioswykkqyc:
        if (!is_wp_error($keccaugmemegoimu)) {
            goto gsymoqgeekuqeiia;
        }
        goto muqyyaqmeuimcuey;
        mqeykkkeiygqugcq:
        $keccaugmemegoimu = wp_remote_post(esc_url_raw($ccamueccusigaaio), $this->aoquwmukuokomaea());
        goto mkwemyioswykkqyc;
        yaeakiwsegsacsge:
        $ccamueccusigaaio = DecoratorQuery::yqymaqmqiqmmmsoo($this->qaqaomkkmcmaamwm(), $this->smquasogcycsigis());
        goto mqeykkkeiygqugcq;
        muqyyaqmeuimcuey:
        $this->saqqeqmcyyoeqici("\120\x72\x6f\x63\145\163\163\x20\144\x69\x73\x70\141\164\x63\150\x20\151\x73\x20\x66\141\x69\x6c\x65\144\x3a\x20{$keccaugmemegoimu->get_error_message()}");
        goto kasewecuqyooymwi;
        yqoaamqqqokguyis:
        return $keccaugmemegoimu;
        goto gimsqaumkeequwwu;
        kasewecuqyooymwi:
        gsymoqgeekuqeiia:
        goto yqoaamqqqokguyis;
        gimsqaumkeequwwu:
    }
    
    public function aqskqeakoauwowwm()
    {
        goto syweyeiawwgmkmio;
        akaeugoqiowqeiay:
        if (!ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), "\x6e\157\x6e\x63\145")) {
            goto iaamqeeowsgwogau;
        }
        goto oyaequqoiqwmagqe;
        oyaequqoiqwmagqe:
        $this->handle();
        goto imoeyqywqygoeigm;
        syweyeiawwgmkmio:
        
        session_write_close();
        goto akaeugoqiowqeiay;
        ommcauiiosgwswii:
        wp_die();
        goto gagkmiwkumaccqog;
        imoeyqywqygoeigm:
        iaamqeeowsgwogau:
        goto ommcauiiosgwswii;
        gagkmiwkumaccqog:
    }
    
    protected function aoquwmukuokomaea()
    {
        goto csiucioiukwwmmki;
        kaosyomgqswqeyue:
        $ywmkwiwkosakssii = ["\142\x6f\144\x79" => $this->seyyiqmgwymyumoq(), "\164\x69\155\145\x6f\165\x74" => 0.01, "\143\x6f\x6f\153\151\145\x73" => $_COOKIE, "\x62\x6c\157\x63\x6b\x69\156\x67" => false, "\x73\163\x6c\x76\145\162\x69\x66\171" => $this->sscegwueamckwmcy("\150\164\164\x70\163\137\x6c\157\143\141\154\x5f\x73\163\x6c\137\166\145\162\x69\x66\x79", false)];
        goto iagcgqyssmegamqo;
        iagcgqyssmegamqo:
        goto uwguwaeqqmissegu;
        goto ioqyoqsseocgsiki;
        cwqeoeeoiggkocks:
        uwguwaeqqmissegu:
        goto qaqaieuiuemceagu;
        qaqaieuiuemceagu:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\137\x70\x6f\163\164\137\141\162\x67\163", $ywmkwiwkosakssii);
        goto pscgmkuecmwkakcs;
        giswiemqquiigucy:
        $ywmkwiwkosakssii = $this->postArgs;
        goto cwqeoeeoiggkocks;
        csiucioiukwwmmki:
        if (isset($this->postArgs)) {
            goto wkquwqwsswuayeoy;
        }
        goto kaosyomgqswqeyue;
        ioqyoqsseocgsiki:
        wkquwqwsswuayeoy:
        goto giswiemqquiigucy;
        pscgmkuecmwkakcs:
    }
    
    protected function smquasogcycsigis()
    {
        goto kusuiaesiqamokwu;
        ycsqqcuwcamsswio:
        yysaoyaeyoyiwaao:
        goto aoyeggqisqucyycw;
        uimkessmquwwowuy:
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}\x5f\x71\165\x65\162\171\x5f\165\x72\x6c", $eeamcawaiqocomwy);
        goto gmgiugscseeqmcws;
        gkgaqgyiuuggesqi:
        goto gsaqgmmoiyoqcqge;
        goto ycsqqcuwcamsswio;
        kusuiaesiqamokwu:
        if (isset($this->queryUrl)) {
            goto yysaoyaeyoyiwaao;
        }
        goto muoasgcackyqmwya;
        aoyeggqisqucyycw:
        $eeamcawaiqocomwy = $this->queryUrl;
        goto kqyauuewaeqaaemq;
        muoasgcackyqmwya:
        $eeamcawaiqocomwy = ManipulateAjax::oiucukewkckkwiqc();
        goto gkgaqgyiuuggesqi;
        kqyauuewaeqaaemq:
        gsaqgmmoiyoqcqge:
        goto uimkessmquwwowuy;
        gmgiugscseeqmcws:
    }
    
    protected function qaqaomkkmcmaamwm()
    {
        goto kckkwasakyqqaysi;
        aqagyoekusowaige:
        $ywmkwiwkosakssii = $this->queryArgs;
        goto mkccuoewagiiuaea;
        wugeaooaequcowwc:
        if (isset($this->queryArgs)) {
            goto cgskgkccqqoeqwek;
        }
        goto ugweisqsykoymuuk;
        weccgwumycqumocm:
        goto ooysyaacumewauwa;
        goto syiauiggwuycaaus;
        kckkwasakyqqaysi:
        $owqaeesoaygymmcy = $this->eiswegiqykyigwig();
        goto wugeaooaequcowwc;
        syiauiggwuycaaus:
        cgskgkccqqoeqwek:
        goto aqagyoekusowaige;
        mkccuoewagiiuaea:
        ooysyaacumewauwa:
        goto sseaggmmkeusqqgm;
        ugweisqsykoymuuk:
        $ywmkwiwkosakssii = ["\x6e\157\156\143\145" => wp_create_nonce($owqaeesoaygymmcy), "\141\x63\164\x69\x6f\156" => $owqaeesoaygymmcy];
        goto weccgwumycqumocm;
        sseaggmmkeusqqgm:
        return $this->sscegwueamckwmcy("{$owqaeesoaygymmcy}\137\x71\x75\145\162\x79\x5f\141\162\x67\x73", $ywmkwiwkosakssii);
        goto cuckqumkcguagqoe;
        cuckqumkcguagqoe:
    }
    
    protected abstract function handle();
}

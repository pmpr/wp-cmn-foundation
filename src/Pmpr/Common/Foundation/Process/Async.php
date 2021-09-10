<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use WP_Error;

abstract class Async extends Container
{
    
    protected ?string $prefix = 'wp';
    
    protected ?string $action = 'async_request';
    
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
        $this->siiuycgkowwuyuka($this->ogqgmqymcwsqikme() . '_' . $this->wqqseoqcmgkgoiug());
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->iqkqummseggmikgo($this->eiswegiqykyigwig(), [$this, 'aqskqeakoauwowwm']);
        parent::wigskegsqequoeks();
    }
    
    public function ieyosyaaisyquesq()
    {
        $ccamueccusigaaio = DecoratorQuery::yqymaqmqiqmmmsoo($this->qaqaomkkmcmaamwm(), $this->smquasogcycsigis());
        $keccaugmemegoimu = wp_remote_post(esc_url_raw($ccamueccusigaaio), $this->aoquwmukuokomaea());
        if (is_wp_error($keccaugmemegoimu)) {
            $this->saqqeqmcyyoeqici("Process dispatch is failed: {$keccaugmemegoimu->get_error_message()}");
        }
        return $keccaugmemegoimu;
    }
    
    public function aqskqeakoauwowwm()
    {
        
        session_write_close();
        if (ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), 'nonce')) {
            $this->handle();
        }
        wp_die();
    }
    
    protected function aoquwmukuokomaea()
    {
        if (isset($this->postArgs)) {
            $ywmkwiwkosakssii = $this->postArgs;
        } else {
            $ywmkwiwkosakssii = ['body' => $this->seyyiqmgwymyumoq(), 'timeout' => 0.01, 'cookies' => $_COOKIE, 'blocking' => false, 'sslverify' => $this->sscegwueamckwmcy('https_local_ssl_verify', false)];
        }
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}_post_args", $ywmkwiwkosakssii);
    }
    
    protected function smquasogcycsigis()
    {
        if (isset($this->queryUrl)) {
            $eeamcawaiqocomwy = $this->queryUrl;
        } else {
            $eeamcawaiqocomwy = ManipulateAjax::oiucukewkckkwiqc();
        }
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}_query_url", $eeamcawaiqocomwy);
    }
    
    protected function qaqaomkkmcmaamwm()
    {
        $owqaeesoaygymmcy = $this->eiswegiqykyigwig();
        if (isset($this->queryArgs)) {
            $ywmkwiwkosakssii = $this->queryArgs;
        } else {
            $ywmkwiwkosakssii = ['nonce' => wp_create_nonce($owqaeesoaygymmcy), 'action' => $owqaeesoaygymmcy];
        }
        return $this->sscegwueamckwmcy("{$owqaeesoaygymmcy}_query_args", $ywmkwiwkosakssii);
    }
    
    protected abstract function handle();
}

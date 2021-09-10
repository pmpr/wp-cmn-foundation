<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Process;

use Pmpr\Common\Foundation\Decorator\DecoratorCron;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use stdClass;

abstract class Background extends Async
{
    const IDENTIFIER_POSTFIX = '_batch_';
    
    protected int $startTime = 0;
    
    protected ?string $cronHookIdentifier = '';
    
    protected ?string $cronIntervalIdentifier = '';
    
    protected ?string $action = 'background_process';
    public function wigskegsqequoeks()
    {
        
        $this->cronHookIdentifier = "{$this->eiswegiqykyigwig()}_cron";
        $this->cronIntervalIdentifier = "{$this->eiswegiqykyigwig()}_cron_interval";
        $this->qcsmikeggeemccuu($this->swyooakuoqwwiiws(), [$this, 'gyqywkoauomeqise']);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('cron_schedules', [$this, 'syyiokomusgeykwu']);
        parent::kgquecmsgcouyaya();
    }
    
    public function yuqoqckgwkaqucqk() : int
    {
        return $this->startTime;
    }
    
    public function swyooakuoqwwiiws() : ?string
    {
        return $this->cronHookIdentifier;
    }
    
    public function kmaaqwymiwaikeyi() : ?string
    {
        return $this->cronIntervalIdentifier;
    }
    
    public function ieyosyaaisyquesq()
    {
        
        $this->uwugaiqywmseksqm();
        
        return parent::ieyosyaaisyquesq();
    }
    
    public function mykuoqakuiwsoiss($icwicymcioeyeyek)
    {
        $this->data[] = $icwicymcioeyeyek;
        return $this;
    }
    
    public function save()
    {
        if ($this->seyyiqmgwymyumoq()) {
            update_site_option($this->gykguuqikwcyouws(), $this->seyyiqmgwymyumoq());
        }
        return $this;
    }
    
    public function update(string $uusmaiomayssaecw, array $icwicymcioeyeyek = [])
    {
        if ($icwicymcioeyeyek) {
            update_site_option($uusmaiomayssaecw, $icwicymcioeyeyek);
        }
        return $this;
    }
    
    public function delete(string $uusmaiomayssaecw)
    {
        delete_site_option($uusmaiomayssaecw);
        return $this;
    }
    
    protected function gykguuqikwcyouws($ykiwomimkkuiigoq = 64)
    {
        $omasqoksqewuwwkq = md5(microtime() . rand());
        $mwweeceqggqmogwk = $this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX;
        return substr($mwweeceqggqmogwk . $omasqoksqewuwwkq, 0, $ykiwomimkkuiigoq);
    }
    
    public function aqskqeakoauwowwm()
    {
        
        session_write_close();
        if ($this->yyqyaigucmaueykw()) {
            
            wp_die();
        }
        if ($this->uuqwmkuaqimkcmei()) {
            
            wp_die();
        }
        if (ManipulateAjax::wqsmsuyggkkyyocc($this->eiswegiqykyigwig(), 'nonce')) {
            $this->handle();
        }
        wp_die();
    }
    
    protected function uuqwmkuaqimkcmei()
    {
        global $wpdb;
        $aasascamegmwqmqk = $wpdb->options;
        $qgoqiacsiccwoawi = 'option_name';
        if (is_multisite()) {
            $aasascamegmwqmqk = $wpdb->sitemeta;
            $qgoqiacsiccwoawi = 'meta_key';
        }
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . '%';
        $gaeqamemwmwsyukm = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM {$aasascamegmwqmqk} WHERE {$qgoqiacsiccwoawi} LIKE %s", $uusmaiomayssaecw));
        return $gaeqamemwmwsyukm > 0 ? false : true;
    }
    
    public function yyqyaigucmaueykw()
    {
        return get_site_transient("{$this->eiswegiqykyigwig()}_process_lock");
    }
    
    public function aegawcwekgqycoig()
    {
        $this->startTime = time();
        
        $owmuuoycwiskaeme = method_exists($this, 'kckiqogemmiqqqek') ? $this->kckiqogemmiqqqek() : 60;
        $owmuuoycwiskaeme = $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}_queue_lock_time", $owmuuoycwiskaeme);
        set_site_transient("{$this->eiswegiqykyigwig()}_process_lock", microtime(), $owmuuoycwiskaeme);
    }
    
    public function ycuqagwqkwuuyagc() : Background
    {
        delete_site_transient("{$this->eiswegiqykyigwig()}_process_lock");
        return $this;
    }
    
    protected function kycesesquyayogwg()
    {
        global $wpdb;
        $aasascamegmwqmqk = $wpdb->options;
        $qgoqiacsiccwoawi = 'option_name';
        $ssemgewueawkmcqw = 'option_id';
        $qmiicscguaqeiiow = 'option_value';
        if (is_multisite()) {
            $aasascamegmwqmqk = $wpdb->sitemeta;
            $qgoqiacsiccwoawi = 'meta_key';
            $ssemgewueawkmcqw = 'meta_id';
            $qmiicscguaqeiiow = 'meta_value';
        }
        $uusmaiomayssaecw = $wpdb->esc_like($this->eiswegiqykyigwig() . self::IDENTIFIER_POSTFIX) . '%';
        $gqgemcmoicmgaqie = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$aasascamegmwqmqk} WHERE {$qgoqiacsiccwoawi} LIKE %s ORDER BY {$ssemgewueawkmcqw} ASC LIMIT 1", $uusmaiomayssaecw));
        $owuckwsseckgeweg = new stdClass();
        $owuckwsseckgeweg->key = $gqgemcmoicmgaqie->{$qgoqiacsiccwoawi};
        $owuckwsseckgeweg->data = maybe_unserialize($gqgemcmoicmgaqie->{$qmiicscguaqeiiow});
        return $owuckwsseckgeweg;
    }
    
    protected function handle()
    {
        $this->aegawcwekgqycoig();
        ucqmumuygcywwqma:
        $owuckwsseckgeweg = $this->kycesesquyayogwg();
        foreach ($owuckwsseckgeweg->data as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $siyykeyqqywuequu = $this->siyykeyqqywuequu($eqgoocgaqwqcimie);
            if (false !== $siyykeyqqywuequu) {
                $owuckwsseckgeweg->data[$uusmaiomayssaecw] = $siyykeyqqywuequu;
            } else {
                ManipulateArray::unset($owuckwsseckgeweg->data, $uusmaiomayssaecw);
            }
            if ($this->egmyoaiiswagkkuw() || $this->wscswagsquiyigao()) {
                goto uykousayyomcaeaa;
            }
            uimeeckqksqeekqq:
        }
        uykousayyomcaeaa:
        
        if ($owuckwsseckgeweg->data) {
            $this->update($owuckwsseckgeweg->key, $owuckwsseckgeweg->data);
        } else {
            $this->delete($owuckwsseckgeweg->key);
        }
        if (!$this->egmyoaiiswagkkuw() && !$this->wscswagsquiyigao() && !$this->uuqwmkuaqimkcmei()) {
            goto ucqmumuygcywwqma;
        }
        ukqocwewouckikso:
        $this->ycuqagwqkwuuyagc();
        
        if ($this->uuqwmkuaqimkcmei()) {
            $this->yuqksmouoaowioyi();
        } else {
            $this->ieyosyaaisyquesq();
        }
        wp_die();
    }
    
    protected function wscswagsquiyigao()
    {
        $ksaameoqigiaoigg = false;
        $kykimuycmcucisac = $this->psweseawgksmugec() * 0.9;
        
        $iquygkkomwmwiuqy = memory_get_usage(true);
        if ($iquygkkomwmwiuqy >= $kykimuycmcucisac) {
            $ksaameoqigiaoigg = true;
        }
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}_memory_exceeded", $ksaameoqigiaoigg);
    }
    
    protected function psweseawgksmugec()
    {
        if (function_exists('ini_get')) {
            $kykimuycmcucisac = ini_get('memory_limit');
        } else {
            
            $kykimuycmcucisac = '128M';
        }
        if (!$kykimuycmcucisac || -1 === intval($kykimuycmcucisac)) {
            
            $kykimuycmcucisac = '32000M';
        }
        return intval($kykimuycmcucisac) * 1024 * 1024;
    }
    
    protected function egmyoaiiswagkkuw()
    {
        $eyyawusiwecymiug = $this->yuqoqckgwkaqucqk() + $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}_default_time_limit", 20);
        
        $ksaameoqigiaoigg = false;
        if (time() >= $eyyawusiwecymiug) {
            $ksaameoqigiaoigg = true;
        }
        return $this->sscegwueamckwmcy("{$this->eiswegiqykyigwig()}_time_exceeded", $ksaameoqigiaoigg);
    }
    
    protected function yuqksmouoaowioyi()
    {
        
        $this->eqcmmyoimqigequa();
    }
    
    public function syyiokomusgeykwu($immuisiomomksweo)
    {
        $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . '_cron_interval', 5);
        if (method_exists($this, 'yquogugyqggisgio')) {
            $ycooswiwewekokei = $this->sscegwueamckwmcy($this->eiswegiqykyigwig() . '_cron_interval', $this->yquogugyqggisgio());
        }
        
        $immuisiomomksweo["{$this->eiswegiqykyigwig()}_cron_interval"] = ['interval' => MINUTE_IN_SECONDS * $ycooswiwewekokei, 'display' => sprintf(__('Every %d Minutes'), $ycooswiwewekokei)];
        return $immuisiomomksweo;
    }
    
    public function gyqywkoauomeqise()
    {
        if ($this->yyqyaigucmaueykw()) {
            
            exit;
        }
        if ($this->uuqwmkuaqimkcmei()) {
            
            $this->eqcmmyoimqigequa();
            exit;
        }
        $this->handle();
        exit;
    }
    
    protected function uwugaiqywmseksqm()
    {
        if (!DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws())) {
            DecoratorCron::uwugaiqywmseksqm(time(), $this->kmaaqwymiwaikeyi(), $this->swyooakuoqwwiiws());
        }
    }
    
    protected function eqcmmyoimqigequa()
    {
        $yiuogaeewyockeak = DecoratorCron::sceqickmyoseqcue($this->swyooakuoqwwiiws());
        if ($yiuogaeewyockeak) {
            DecoratorCron::swgggegyusmecoky($yiuogaeewyockeak, $this->swyooakuoqwwiiws());
        }
    }
    
    public function ywieukewwemywsgi()
    {
        if (!$this->uuqwmkuaqimkcmei()) {
            $owuckwsseckgeweg = $this->kycesesquyayogwg();
            $this->delete($owuckwsseckgeweg->key);
            wp_clear_scheduled_hook($this->swyooakuoqwwiiws());
        }
        $this->cqscqicucmeamkyq("{$this->wqqseoqcmgkgoiug()}_process_canceled", $this);
    }
    
    public abstract function siyykeyqqywuequu($igqsaukqcqscimok);
}

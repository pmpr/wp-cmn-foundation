<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\RequestOptions;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class API extends Common
{
    const AUTHORIZATION = 'Authorization';
    const CONTENT_TYPE_KEY = 'Content-Type';
    const APPLICATION_JSON_KEY = 'application/json';
    const HTML_ACCEPT = 'text/html,application/xhtml+xml,application/xml;q=0.9,' . 'image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
    const BROWSER_USER_AGENT = 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4)) AppleWebKit/537.36 ' . '(KHTML, like Gecko) Chrome/84.0.4143.7 Mobile Safari/537.36 Chrome-Lighthouse';
    
    protected array $options = [];
    
    protected array $queries = [];
    
    protected ?string $domain = null;
    
    protected ?string $accept = null;
    
    protected ?Client $client = null;
    
    public function __construct()
    {
        $this->client = new Client(['cookies' => true]);
        parent::__construct();
    }
    
    public function wmciwsucuuyumkes() : ?Client
    {
        return $this->client;
    }
    
    public function wemyikwikgwqwuoc()
    {
        
        return $this->wmciwsucuuyumkes()->getConfig('cookies');
    }
    
    public function eammiwsquyqgimgg($xeciwimgioieayek, $qiouiwasaauyaaue = [])
    {
        try {
            
            $keccaugmemegoimu = $this->wmciwsucuuyumkes()->post($xeciwimgioieayek, $qiouiwasaauyaaue);
        } catch (GuzzleException $wgaoewqkwgomoaai) {
            $keccaugmemegoimu = $this->kyacickkomkioeyu($wgaoewqkwgomoaai);
        }
        return $keccaugmemegoimu;
    }
    
    public function wiwocsyueqyyakmy($xeciwimgioieayek, $qiouiwasaauyaaue = []) : PromiseInterface
    {
        
        return $this->wmciwsucuuyumkes()->postAsync($xeciwimgioieayek, $qiouiwasaauyaaue);
    }
    
    public function mcacmccgmkkouuqg() : ?string
    {
        if (!$this->accept) {
            $this->accept = 'application/json';
        }
        return $this->accept;
    }
    
    public function wsyymykqcoucagma(?string $iwceggomkwsaekmg) : self
    {
        $this->accept = $iwceggomkwsaekmg;
        return $this;
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        return $this->domain;
    }
    
    public function suyquyoaausqsuay(?string $mokawwccycoiqeka) : self
    {
        $this->domain = $mokawwccycoiqeka;
        return $this;
    }
    
    public function gkwkqmwweiawigae() : array
    {
        return $this->options;
    }
    
    public function kesomeowemmyygey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->options = $this->sgkkiikkkaqmacie($this->gkwkqmwweiawigae(), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
        return $this;
    }
    
    public function amskqmemsacmksye($mgegoogckgsumooq) : self
    {
        return $this->kesomeowemmyygey('headers', [self::AUTHORIZATION => "Bearer {$mgegoogckgsumooq}"]);
    }
    
    public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array
    {
        $igqsaukqcqscimok = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
        if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) {
            $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        } else {
            if (is_array($igqsaukqcqscimok)) {
                $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie);
            }
        }
        return $uomewyckeuqoqocu;
    }
    
    public function ksqekagyyameaceq() : array
    {
        return $this->queries;
    }
    
    public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self
    {
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        if (!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom) {
            $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom);
        }
        return $this;
    }
    
    public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self
    {
        foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) {
            $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom);
            siuyaemoiiqyoggo:
        }
        cycwgukowsksmkyc:
        return $this;
    }
    
    private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array
    {
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        if ($uoomaookgsyciacm) {
            $qiouiwasaauyaaue[RequestOptions::QUERY] = preg_replace('/%5B(?:[0-9]|[1-9][0-9]+)%5D=/', '=', http_build_query($uoomaookgsyciacm));
        }
        return $qiouiwasaauyaaue;
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = 'get') : ?ResponseInterface
    {
        $keccaugmemegoimu = null;
        try {
            $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            $this->kesomeowemmyygey('header', ['accept' => $this->mcacmccgmkkouuqg()]);
            $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue);
            $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue);
            if (ManipulateValidation::wmcwegoisyeeosqu($xeciwimgioieayek)) {
                $mokawwccycoiqeka = $xeciwimgioieayek;
            } else {
                $mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua());
                if ($mokawwccycoiqeka) {
                    $mokawwccycoiqeka = "{$mokawwccycoiqeka}{$xeciwimgioieayek}";
                }
            }
            if (ManipulateValidation::wmcwegoisyeeosqu($mokawwccycoiqeka)) {
                $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($mokawwccycoiqeka, $qiouiwasaauyaaue);
            } else {
                $this->saqqeqmcyyoeqici(sprintf("API %s Request Error: '%s' is not a valid domain.", strtoupper($qgciuiagkkguykgs), $mokawwccycoiqeka));
            }
        } catch (ClientException $wgaoewqkwgomoaai) {
            
            $keccaugmemegoimu = $wgaoewqkwgomoaai->getResponse();
            $this->saqqeqmcyyoeqici(sprintf("API %s Request Error: {$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}", strtoupper($qgciuiagkkguykgs)));
        }
        return $keccaugmemegoimu;
    }
    
    public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, 'get');
    }
    
    public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, 'post');
    }
    
    public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, 'patch');
    }
    
    public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, 'delete');
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        $sogksuscggsicmac = null;
        if ($keccaugmemegoimu instanceof ResponseInterface) {
            $sogksuscggsicmac = $keccaugmemegoimu->wesecsykkuakgyec();
        }
        switch ($this->mcacmccgmkkouuqg()) {
            case 'application/json':
                $sogksuscggsicmac = json_decode($sogksuscggsicmac, true);
                goto koemwyegoqwiikom;
        }
        qycsooiomiugimqc:
        koemwyegoqwiikom:
        return $sogksuscggsicmac;
    }
    
    public function occymigcemkqucuw(?ResponseInterface $keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = self::MESSAGE) : bool
    {
        $ksaameoqigiaoigg = false;
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            if (is_string($keccaugmemegoimu)) {
                $iswcokucwmiosiaq = $keccaugmemegoimu;
            } else {
                $iswcokucwmiosiaq .= __('Response is not valid', PR__CMN__FOUNDATION);
            }
        } else {
            if ($keccaugmemegoimu->wkaoyeoamyiacyeg() !== 200) {
                $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
                $smgooosyoeqwcaeg = json_decode($keccaugmemegoimu->wesecsykkuakgyec()->sigciooygkcccyko());
                switch ($keccaugmemegoimu->wkaoyeoamyiacyeg()) {
                    case 400:
                    case 403:
                        if ($smgooosyoeqwcaeg) {
                            $iswcokucwmiosiaq = ManipulateArray::get($smgooosyoeqwcaeg, $qeweemoqwwsoumeg);
                            $icwicymcioeyeyek = [self::CODE => ManipulateArray::get($smgooosyoeqwcaeg, self::CODE), self::STATUS => $keccaugmemegoimu->wkaoyeoamyiacyeg()];
                        }
                        if (!$iswcokucwmiosiaq) {
                            $iswcokucwmiosiaq = $kuukgsmqkagwaciu;
                        }
                        goto qioswooukgoowsuc;
                    default:
                        $iswcokucwmiosiaq = sprintf('%s: %s', __('Connection Error', PR__CMN__FOUNDATION), $kuukgsmqkagwaciu);
                        goto qioswooukgoowsuc;
                }
                ggoimgeeuugseiwk:
                qioswooukgoowsuc:
            } else {
                $ksaameoqigiaoigg = true;
            }
        }
        return $ksaameoqigiaoigg;
    }
    
    public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee = '', $csowmwgiiyueuius = self::SUCCESS, $aqogmkcqyeosckkm = self::ERRORS) : bool
    {
        $eisqsskqimiigkay = true;
        if (!ManipulateArray::get($sogksuscggsicmac, $csowmwgiiyueuius)) {
            $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, $aqogmkcqyeosckkm, []);
            if (is_array($ueeagokqmgisgauy)) {
                foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) {
                    $wumguikkgaigkoee[] = sprintf('%s (%s: %s)', ManipulateArray::get($iswcokucwmiosiaq, 'message'), __('Error Code', PR__CMN__FOUNDATION), ManipulateArray::get($iswcokucwmiosiaq, 'code'));
                    eimouyomcoqkmaae:
                }
                gimquiiwucueoqkw:
            } else {
                if (is_string($ueeagokqmgisgauy)) {
                    $wumguikkgaigkoee .= $ueeagokqmgisgauy;
                }
            }
            $eisqsskqimiigkay = false;
        }
        return $eisqsskqimiigkay;
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\REST;

use Pmpr\Common\Foundation\Container\Traits\SingletonTrait;
use Pmpr\Common\Foundation\FormMaker\Front\Field\Field;
use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Traits\ComponentTrait;
use Pmpr\Common\Foundation\Traits\HookTrait;
use WP_Error;
use WP_HTTP_Response;
use WP_REST_Controller;
use WP_REST_Request;
use WP_REST_Response;
use WP_REST_Server;

class RESTController extends WP_REST_Controller implements ConstantInterface
{
    const READABLE = WP_REST_Server::READABLE;
    const EDITABLE = WP_REST_Server::EDITABLE;
    const CREATABLE = WP_REST_Server::CREATABLE;
    const DELETABLE = WP_REST_Server::DELETABLE;
    const ALLMETHODS = WP_REST_Server::ALLMETHODS;
    use SingletonTrait, ComponentTrait, HookTrait;
    public function __construct()
    {
        $this->namespace = 'pmpr/v1';
        $this->gyqeoeemeemicgqi();
    }
    
    public function eeskamgwqqsaaoci() : string
    {
        return $this->namespace;
    }
    
    public function awegquwuywoqgmqw() : string
    {
        return $this->rest_base;
    }
    
    public function register($mkomwsiykqigmqca, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['permission_callback' => [$this, 'ackuaigiocsgyqwe']]);
        register_rest_route($this->eeskamgwqqsaaoci(), "/{$this->awegquwuywoqgmqw()}{$mkomwsiykqigmqca}", $ywmkwiwkosakssii);
    }
    
    public function ewmkmmsuiuwmmwoy($keccaugmemegoimu)
    {
        return rest_ensure_response($keccaugmemegoimu);
    }
    
    public function gmsemuiwicucmcok(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw) : ?string
    {
        return $aqmwamyiwgeeymqa->get_header($uusmaiomayssaecw);
    }
    
    public function keguiwkaiweywekc(WP_REST_Request $aqmwamyiwgeeymqa) : ?string
    {
        return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, 'referer');
    }
    
    public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa)
    {
        $yucuiaqgmwimgcoy = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, 'user_agent');
        if (preg_match('/www\\.|https?:\\/\\/([a-zA-Z0-9u0a1-\\uffff-]{2,}\\.[a-zA-Z0-9u0a1-\\uffff-]{2,})/', $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) {
            $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] ?? false;
        } else {
            $iakkeikwceeomgyq = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, 'host');
        }
        return $iakkeikwceeomgyq;
    }
    
    public function qasywwyamoesisyi($uamcoiueqaamsqma, $icwicymcioeyeyek = []) : array
    {
        return $this->keccaugmemegoimu($uamcoiueqaamsqma, 200, $icwicymcioeyeyek);
    }
    
    public function iokgowgkmqcyeeok($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 400) : array
    {
        return $this->keccaugmemegoimu($uamcoiueqaamsqma, $ymacoouqwcqwwagu);
    }
    
    public function keccaugmemegoimu(string $uamcoiueqaamsqma, int $ymacoouqwcqwwagu, array $icwicymcioeyeyek = []) : array
    {
        $kigowwqauiumummw = false;
        return [self::CODE => $ymacoouqwcqwwagu, self::DATA => $icwicymcioeyeyek, self::STATUS => ManipulateServer::sgsoakksyayeoggw($ymacoouqwcqwwagu), self::MESSAGE => $uamcoiueqaamsqma, self::SUCCESS => $kigowwqauiumummw];
    }
    
    public function ayssaocauwgssywa($ikgwqyuyckaewsow = []) : array
    {
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Field) {
                $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus->sacmkccceuywoqsq(true);
            }
            cksomiiqscosigke:
        }
        gcogomgmqcgkeceg:
        return $ikgwqyuyckaewsow;
    }
    
    public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool
    {
        return true;
    }
    
    public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) {
            $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw);
            if (is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie)) {
                $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
            }
        } else {
            $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        }
        return $eqgoocgaqwqcimie;
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->namespace = "\x70\x6d\x70\162\57\x76\x31";
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
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\145\162\155\151\163\x73\x69\157\156\x5f\x63\141\x6c\154\x62\141\143\x6b" => [$this, "\141\x63\153\165\x61\151\x67\151\157\x63\x73\147\x79\x71\x77\145"]]);
        register_rest_route($this->eeskamgwqqsaaoci(), "\57{$this->awegquwuywoqgmqw()}{$mkomwsiykqigmqca}", $ywmkwiwkosakssii);
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
        return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\162\145\x66\145\x72\145\162");
    }
    
    public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa)
    {
        goto ikkociaokagqumuw;
        aceuegkoskqkcyoo:
        eweyccaegsocwmae:
        goto ccuuyekyecacagae;
        ksaiemwmwuwmsmcc:
        if (preg_match("\57\x77\x77\167\x5c\56\x7c\x68\164\164\x70\163\77\72\x5c\57\x5c\57\50\133\141\x2d\x7a\101\55\x5a\60\x2d\71\x75\60\141\x31\55\x5c\165\x66\x66\x66\x66\x2d\x5d\173\62\x2c\x7d\x5c\56\x5b\141\x2d\x7a\101\x2d\132\60\55\x39\x75\x30\141\61\55\134\165\x66\x66\x66\146\x2d\135\173\62\54\175\x29\x2f", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) {
            goto ieuwcgqoyyguiqcy;
        }
        goto oykuaoisiumcsmmy;
        ikkociaokagqumuw:
        $yucuiaqgmwimgcoy = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\165\163\x65\162\x5f\x61\x67\145\156\x74");
        goto ksaiemwmwuwmsmcc;
        aeyyygequskegsam:
        goto eweyccaegsocwmae;
        goto gyswqkocmuuieswu;
        suiagiwucmeucmok:
        $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] ?? false;
        goto aceuegkoskqkcyoo;
        ccuuyekyecacagae:
        return $iakkeikwceeomgyq;
        goto sokimimsmcaawigw;
        gyswqkocmuuieswu:
        ieuwcgqoyyguiqcy:
        goto suiagiwucmeucmok;
        oykuaoisiumcsmmy:
        $iakkeikwceeomgyq = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\x68\157\163\x74");
        goto aeyyygequskegsam;
        sokimimsmcaawigw:
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
        goto ggyiwauwykckueui;
        keyikmccmwagwcau:
        cwaymoayokokyase:
        goto kwawqeiqskmoeeyk;
        kwawqeiqskmoeeyk:
        return $ikgwqyuyckaewsow;
        goto taqigiaumgaoisca;
        ggyiwauwykckueui:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto ciicmoysmeykwwuc;
            swemyqcgmeqeeiuq:
            oemieaoqeygawkmc:
            goto qissaamygiiwgqie;
            ciicmoysmeykwwuc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto oemieaoqeygawkmc;
            }
            goto skiyokscqkmiacmk;
            skiyokscqkmiacmk:
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus->sacmkccceuywoqsq(true);
            goto swemyqcgmeqeeiuq;
            qissaamygiiwgqie:
            ucieyaysuqmsgqsy:
            goto gogcqoeqmeqgsmqg;
            gogcqoeqmeqgsmqg:
        }
        goto keyikmccmwagwcau;
        taqigiaumgaoisca:
    }
    
    public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool
    {
        return true;
    }
    
    public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto wkeckeuumgmgyiiu;
        wggaoyoawseaggme:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto goasosegisomuicm;
        esmuyeyaqoqcsyse:
        return $eqgoocgaqwqcimie;
        goto yskaagqioyoiomqg;
        wkeckeuumgmgyiiu:
        if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) {
            goto qcaawmessgwoqwqs;
        }
        goto sqwiogiwgequuwgw;
        aiucscoycsegqwao:
        $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw);
        goto emqguoqcwgcssyok;
        sqwiogiwgequuwgw:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto qioesqeqkcyaeyqe;
        qioesqeqkcyaeyqe:
        goto smyommsakkwciogs;
        goto wskoquceqciweouy;
        muayickmewwuswmy:
        smyommsakkwciogs:
        goto esmuyeyaqoqcsyse;
        goasosegisomuicm:
        oawgaciskyykgssu:
        goto muayickmewwuswmy;
        emqguoqcwgcssyok:
        if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) {
            goto oawgaciskyykgssu;
        }
        goto wggaoyoawseaggme;
        wskoquceqciweouy:
        qcaawmessgwoqwqs:
        goto aiucscoycsegqwao;
        yskaagqioyoiomqg:
    }
}

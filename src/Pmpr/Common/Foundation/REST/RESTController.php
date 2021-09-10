<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->namespace = "\x70\155\160\x72\x2f\x76\x31";
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
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x65\162\x6d\151\x73\x73\151\x6f\156\x5f\x63\x61\x6c\x6c\x62\141\x63\153" => [$this, "\x61\x63\x6b\165\141\151\x67\x69\x6f\143\163\147\x79\x71\167\x65"]]);
        register_rest_route($this->eeskamgwqqsaaoci(), "\x2f{$this->awegquwuywoqgmqw()}{$mkomwsiykqigmqca}", $ywmkwiwkosakssii);
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
        return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\162\145\146\145\162\x65\162");
    }
    
    public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa)
    {
        goto ikkociaokagqumuw;
        aceuegkoskqkcyoo:
        eweyccaegsocwmae:
        goto ccuuyekyecacagae;
        aeyyygequskegsam:
        goto eweyccaegsocwmae;
        goto gyswqkocmuuieswu;
        ikkociaokagqumuw:
        $yucuiaqgmwimgcoy = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\x75\163\x65\x72\137\141\x67\x65\x6e\x74");
        goto ksaiemwmwuwmsmcc;
        suiagiwucmeucmok:
        $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] ?? false;
        goto aceuegkoskqkcyoo;
        gyswqkocmuuieswu:
        ieuwcgqoyyguiqcy:
        goto suiagiwucmeucmok;
        ccuuyekyecacagae:
        return $iakkeikwceeomgyq;
        goto sokimimsmcaawigw;
        oykuaoisiumcsmmy:
        $iakkeikwceeomgyq = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\x68\x6f\x73\164");
        goto aeyyygequskegsam;
        ksaiemwmwuwmsmcc:
        if (preg_match("\57\x77\x77\167\134\56\x7c\x68\x74\x74\160\163\77\72\134\57\x5c\x2f\50\x5b\141\55\172\101\55\132\60\55\x39\x75\60\141\x31\x2d\x5c\x75\146\x66\x66\x66\x2d\x5d\173\x32\54\x7d\134\x2e\133\x61\x2d\172\101\x2d\132\x30\55\x39\x75\60\141\61\x2d\x5c\165\146\146\x66\146\x2d\x5d\x7b\62\54\175\51\x2f", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) {
            goto ieuwcgqoyyguiqcy;
        }
        goto oykuaoisiumcsmmy;
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
            skiyokscqkmiacmk:
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus->sacmkccceuywoqsq(true);
            goto swemyqcgmeqeeiuq;
            ciicmoysmeykwwuc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto oemieaoqeygawkmc;
            }
            goto skiyokscqkmiacmk;
            qissaamygiiwgqie:
            ucieyaysuqmsgqsy:
            goto gogcqoeqmeqgsmqg;
            swemyqcgmeqeeiuq:
            oemieaoqeygawkmc:
            goto qissaamygiiwgqie;
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
        wkeckeuumgmgyiiu:
        if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) {
            goto qcaawmessgwoqwqs;
        }
        goto sqwiogiwgequuwgw;
        wskoquceqciweouy:
        qcaawmessgwoqwqs:
        goto aiucscoycsegqwao;
        esmuyeyaqoqcsyse:
        return $eqgoocgaqwqcimie;
        goto yskaagqioyoiomqg;
        muayickmewwuswmy:
        smyommsakkwciogs:
        goto esmuyeyaqoqcsyse;
        aiucscoycsegqwao:
        $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw);
        goto emqguoqcwgcssyok;
        qioesqeqkcyaeyqe:
        goto smyommsakkwciogs;
        goto wskoquceqciweouy;
        wggaoyoawseaggme:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto goasosegisomuicm;
        goasosegisomuicm:
        oawgaciskyykgssu:
        goto muayickmewwuswmy;
        sqwiogiwgequuwgw:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto qioesqeqkcyaeyqe;
        emqguoqcwgcssyok:
        if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) {
            goto oawgaciskyykgssu;
        }
        goto wggaoyoawseaggme;
        yskaagqioyoiomqg:
    }
}

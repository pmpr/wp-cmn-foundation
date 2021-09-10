<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        $this->namespace = "\160\x6d\160\162\57\x76\61";
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
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\145\162\x6d\x69\163\163\x69\x6f\156\x5f\x63\x61\154\x6c\142\x61\x63\153" => [$this, "\x61\143\153\165\141\151\147\x69\157\x63\163\x67\x79\161\x77\145"]]);
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
        return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\x72\x65\x66\145\x72\145\x72");
    }
    
    public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa)
    {
        goto ksaiemwmwuwmsmcc;
        ccuuyekyecacagae:
        ikkociaokagqumuw:
        goto sokimimsmcaawigw;
        sokimimsmcaawigw:
        return $iakkeikwceeomgyq;
        goto cwaymoayokokyase;
        ksaiemwmwuwmsmcc:
        $yucuiaqgmwimgcoy = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\x75\x73\x65\162\x5f\141\147\145\x6e\164");
        goto oykuaoisiumcsmmy;
        suiagiwucmeucmok:
        eweyccaegsocwmae:
        goto aceuegkoskqkcyoo;
        aeyyygequskegsam:
        $iakkeikwceeomgyq = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\150\157\163\x74");
        goto gyswqkocmuuieswu;
        aceuegkoskqkcyoo:
        $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] ?? false;
        goto ccuuyekyecacagae;
        oykuaoisiumcsmmy:
        if (preg_match("\57\x77\167\167\x5c\x2e\174\x68\x74\164\160\x73\x3f\x3a\x5c\x2f\x5c\x2f\50\x5b\x61\x2d\172\101\55\132\x30\55\71\165\60\x61\61\55\134\x75\x66\146\x66\146\55\135\173\x32\x2c\175\134\x2e\x5b\x61\x2d\x7a\101\x2d\132\60\x2d\71\x75\x30\141\x31\55\x5c\x75\x66\x66\x66\x66\x2d\135\173\x32\x2c\x7d\51\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) {
            goto eweyccaegsocwmae;
        }
        goto aeyyygequskegsam;
        gyswqkocmuuieswu:
        goto ikkociaokagqumuw;
        goto suiagiwucmeucmok;
        cwaymoayokokyase:
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
        goto keyikmccmwagwcau;
        kwawqeiqskmoeeyk:
        ucieyaysuqmsgqsy:
        goto taqigiaumgaoisca;
        taqigiaumgaoisca:
        return $ikgwqyuyckaewsow;
        goto oawgaciskyykgssu;
        keyikmccmwagwcau:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto skiyokscqkmiacmk;
            gogcqoeqmeqgsmqg:
            oemieaoqeygawkmc:
            goto ggyiwauwykckueui;
            qissaamygiiwgqie:
            ciicmoysmeykwwuc:
            goto gogcqoeqmeqgsmqg;
            skiyokscqkmiacmk:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ciicmoysmeykwwuc;
            }
            goto swemyqcgmeqeeiuq;
            swemyqcgmeqeeiuq:
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus->sacmkccceuywoqsq(true);
            goto qissaamygiiwgqie;
            ggyiwauwykckueui:
        }
        goto kwawqeiqskmoeeyk;
        oawgaciskyykgssu:
    }
    
    public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool
    {
        return true;
    }
    
    public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto sqwiogiwgequuwgw;
        aiucscoycsegqwao:
        smyommsakkwciogs:
        goto emqguoqcwgcssyok;
        sqwiogiwgequuwgw:
        if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) {
            goto smyommsakkwciogs;
        }
        goto qioesqeqkcyaeyqe;
        yskaagqioyoiomqg:
        return $eqgoocgaqwqcimie;
        goto iucwiggcmogeikck;
        emqguoqcwgcssyok:
        $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw);
        goto wggaoyoawseaggme;
        esmuyeyaqoqcsyse:
        wkeckeuumgmgyiiu:
        goto yskaagqioyoiomqg;
        goasosegisomuicm:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto muayickmewwuswmy;
        qioesqeqkcyaeyqe:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto wskoquceqciweouy;
        wggaoyoawseaggme:
        if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) {
            goto qcaawmessgwoqwqs;
        }
        goto goasosegisomuicm;
        muayickmewwuswmy:
        qcaawmessgwoqwqs:
        goto esmuyeyaqoqcsyse;
        wskoquceqciweouy:
        goto wkeckeuumgmgyiiu;
        goto aiucscoycsegqwao;
        iucwiggcmogeikck:
    }
}

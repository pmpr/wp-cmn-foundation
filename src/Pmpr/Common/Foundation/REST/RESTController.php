<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        $this->namespace = "\160\155\x70\x72\57\166\x31";
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
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x65\162\x6d\151\x73\163\151\157\x6e\137\x63\141\x6c\154\142\x61\143\x6b" => [$this, "\141\x63\153\x75\141\x69\147\x69\157\143\163\147\x79\x71\167\145"]]);
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
        return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\162\x65\146\145\162\x65\x72");
    }
    
    public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa)
    {
        goto ikkociaokagqumuw;
        ksaiemwmwuwmsmcc:
        if (preg_match("\x2f\167\x77\x77\134\56\174\150\x74\x74\x70\x73\x3f\72\x5c\57\134\x2f\x28\x5b\x61\x2d\172\101\x2d\x5a\x30\55\x39\165\x30\x61\61\55\x5c\165\146\146\x66\x66\55\135\173\x32\x2c\x7d\x5c\56\133\141\x2d\x7a\x41\x2d\x5a\x30\x2d\71\x75\60\x61\61\55\x5c\x75\146\x66\x66\146\55\x5d\173\x32\x2c\175\51\x2f", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) {
            goto ieuwcgqoyyguiqcy;
        }
        goto oykuaoisiumcsmmy;
        ccuuyekyecacagae:
        return $iakkeikwceeomgyq;
        goto sokimimsmcaawigw;
        oykuaoisiumcsmmy:
        $iakkeikwceeomgyq = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\150\157\163\x74");
        goto aeyyygequskegsam;
        ikkociaokagqumuw:
        $yucuiaqgmwimgcoy = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\165\x73\x65\x72\x5f\141\147\x65\x6e\x74");
        goto ksaiemwmwuwmsmcc;
        aeyyygequskegsam:
        goto eweyccaegsocwmae;
        goto gyswqkocmuuieswu;
        gyswqkocmuuieswu:
        ieuwcgqoyyguiqcy:
        goto suiagiwucmeucmok;
        suiagiwucmeucmok:
        $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] ?? false;
        goto aceuegkoskqkcyoo;
        aceuegkoskqkcyoo:
        eweyccaegsocwmae:
        goto ccuuyekyecacagae;
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
        aiucscoycsegqwao:
        $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw);
        goto emqguoqcwgcssyok;
        esmuyeyaqoqcsyse:
        return $eqgoocgaqwqcimie;
        goto yskaagqioyoiomqg;
        emqguoqcwgcssyok:
        if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) {
            goto oawgaciskyykgssu;
        }
        goto wggaoyoawseaggme;
        sqwiogiwgequuwgw:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto qioesqeqkcyaeyqe;
        wskoquceqciweouy:
        qcaawmessgwoqwqs:
        goto aiucscoycsegqwao;
        wggaoyoawseaggme:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto goasosegisomuicm;
        goasosegisomuicm:
        oawgaciskyykgssu:
        goto muayickmewwuswmy;
        qioesqeqkcyaeyqe:
        goto smyommsakkwciogs;
        goto wskoquceqciweouy;
        muayickmewwuswmy:
        smyommsakkwciogs:
        goto esmuyeyaqoqcsyse;
        wkeckeuumgmgyiiu:
        if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) {
            goto qcaawmessgwoqwqs;
        }
        goto sqwiogiwgequuwgw;
        yskaagqioyoiomqg:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        $this->namespace = "\x70\x6d\160\162\57\166\61";
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
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\145\x72\155\x69\163\x73\151\x6f\156\137\x63\141\x6c\154\x62\141\x63\153" => [$this, "\x61\143\x6b\165\141\151\147\x69\x6f\x63\x73\147\x79\161\167\x65"]]);
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
    
    public function asmuomaqywqeseoa(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw) : bool
    {
        
        return $aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw);
    }
    
    public function keguiwkaiweywekc(WP_REST_Request $aqmwamyiwgeeymqa) : ?string
    {
        return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\162\145\x66\145\x72\x65\x72");
    }
    
    public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa)
    {
        goto owswwyqyusisgwme;
        yagmeysqkyagckyg:
        return $iakkeikwceeomgyq;
        goto sowgacwmiukqyequ;
        iyuycauougyasiiq:
        goto qakcaquyeuguwues;
        goto giaamqkcsgokqgqm;
        owswwyqyusisgwme:
        
        $yucuiaqgmwimgcoy = $this->getHeader($aqmwamyiwgeeymqa, "\x75\163\145\162\x5f\141\x67\145\x6e\164");
        goto myggyowooawikgoi;
        iwwsukcmssaaeqoq:
        $iakkeikwceeomgyq = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\150\157\163\164");
        goto iyuycauougyasiiq;
        kqieuqgsocqgaesw:
        $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] ?? false;
        goto kksaeyuekaaessaa;
        giaamqkcsgokqgqm:
        cocuuoguowasocye:
        goto kqieuqgsocqgaesw;
        myggyowooawikgoi:
        if (preg_match("\57\x77\167\167\134\x2e\174\x68\x74\164\x70\163\77\x3a\x5c\x2f\x5c\57\x28\x5b\x61\55\172\x41\55\x5a\x30\x2d\71\x75\x30\x61\x31\55\x5c\x75\146\146\x66\x66\55\135\173\x32\x2c\x7d\x5c\56\x5b\141\55\x7a\101\55\132\x30\55\71\165\x30\x61\61\x2d\134\x75\146\146\x66\x66\55\135\173\x32\x2c\x7d\x29\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) {
            goto cocuuoguowasocye;
        }
        goto iwwsukcmssaaeqoq;
        kksaeyuekaaessaa:
        qakcaquyeuguwues:
        goto yagmeysqkyagckyg;
        sowgacwmiukqyequ:
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
        goto xkqgegowecakaogy;
        gkeegeyqgwcqsaqi:
        return $ikgwqyuyckaewsow;
        goto ukiquuoaawuemuwm;
        xkqgegowecakaogy:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto uiyuqwmuyicmukgs;
            giwoykisgksecowe:
            kaeeaeaqemqkimki:
            goto awyakmgqyaksucso;
            uiyuqwmuyicmukgs:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto iaagogeaaawgsacg;
            }
            goto wuiomwwygyismoke;
            qmaeagoqeukouayc:
            iaagogeaaawgsacg:
            goto giwoykisgksecowe;
            wuiomwwygyismoke:
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus->sacmkccceuywoqsq(true);
            goto qmaeagoqeukouayc;
            awyakmgqyaksucso:
        }
        goto soigaomwwmwqqsqe;
        soigaomwwmwqqsqe:
        kkawsaququwoqkga:
        goto gkeegeyqgwcqsaqi;
        ukiquuoaawuemuwm:
    }
    
    public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool
    {
        return true;
    }
    
    public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto iougwygwasqmesuw;
        aiqykgkokmqqocwg:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto kwgwaowiuagqockc;
        kwgwaowiuagqockc:
        goto yyoogmukueyocgeo;
        goto igmogosqsaiksoya;
        iougwygwasqmesuw:
        if ($this->asmuomaqywqeseoa($aqmwamyiwgeeymqa, $uusmaiomayssaecw)) {
            goto mkkwcsmomimsckmo;
        }
        goto aiqykgkokmqqocwg;
        ywwmasggauwqgiys:
        if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) {
            goto miimeciguswkagcm;
        }
        goto waeeesmmsacwaaoa;
        muqokomgakwuiisc:
        miimeciguswkagcm:
        goto heyuwyceiewkimiu;
        heyuwyceiewkimiu:
        yyoogmukueyocgeo:
        goto ciiouaecyaoqacak;
        igmogosqsaiksoya:
        mkkwcsmomimsckmo:
        goto wigyoouuiyaysasc;
        waeeesmmsacwaaoa:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto muqokomgakwuiisc;
        wigyoouuiyaysasc:
        
        $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw);
        goto ywwmasggauwqgiys;
        ciiouaecyaoqacak:
        return $eqgoocgaqwqcimie;
        goto esuyscuayyikcwwu;
        esuyscuayyikcwwu:
    }
}

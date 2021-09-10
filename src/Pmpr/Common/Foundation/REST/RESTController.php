<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        $this->namespace = "\160\x6d\160\x72\x2f\x76\61";
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
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\145\162\155\x69\163\163\151\157\156\137\x63\x61\154\x6c\x62\141\143\153" => [$this, "\141\143\153\165\141\151\147\151\x6f\143\x73\147\x79\161\x77\x65"]]);
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
        return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\162\x65\146\145\x72\145\162");
    }
    
    public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa)
    {
        goto ygyasaouaeomcook;
        oosmoaqgqegqmecm:
        return $iakkeikwceeomgyq;
        goto eksiecgiomucusou;
        ywqqcwwikuaqgswy:
        kwkumyugkkscqsqa:
        goto qwckkegewuioawok;
        yoyuemoqqmcamysy:
        $iakkeikwceeomgyq = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\150\x6f\x73\x74");
        goto iaaakumgaeogkyau;
        qwckkegewuioawok:
        $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] ?? false;
        goto gmiqeasocceqcmyy;
        gmiqeasocceqcmyy:
        gyeoaqyauigkuyuw:
        goto oosmoaqgqegqmecm;
        kywsoesguwyeukuk:
        if (preg_match("\x2f\167\167\167\134\x2e\x7c\150\164\164\x70\163\77\72\x5c\x2f\x5c\x2f\50\133\x61\x2d\172\101\55\x5a\x30\x2d\71\x75\60\141\x31\x2d\x5c\165\146\x66\146\x66\x2d\135\x7b\62\x2c\x7d\x5c\x2e\x5b\x61\55\x7a\101\x2d\132\x30\55\71\x75\60\x61\61\55\x5c\165\146\x66\x66\146\x2d\x5d\x7b\x32\54\175\x29\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) {
            goto kwkumyugkkscqsqa;
        }
        goto yoyuemoqqmcamysy;
        ygyasaouaeomcook:
        $yucuiaqgmwimgcoy = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\x75\x73\x65\162\137\141\x67\x65\156\164");
        goto kywsoesguwyeukuk;
        iaaakumgaeogkyau:
        goto gyeoaqyauigkuyuw;
        goto ywqqcwwikuaqgswy;
        eksiecgiomucusou:
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
        goto kgeouqmockmeqamy;
        caiggmogoqgosgka:
        return $ikgwqyuyckaewsow;
        goto mggwwmagesiaegsg;
        kgeouqmockmeqamy:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto eeawuswkssoumcqq;
            wgagciiiyokkccaw:
            qsseaomwyuequyuc:
            goto swusasqsywoymauc;
            swusasqsywoymauc:
            ceooomymweuccyke:
            goto yuqgckkmggeecmcu;
            qwycyuqsagqcyeau:
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus->sacmkccceuywoqsq(true);
            goto wgagciiiyokkccaw;
            eeawuswkssoumcqq:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto qsseaomwyuequyuc;
            }
            goto qwycyuqsagqcyeau;
            yuqgckkmggeecmcu:
        }
        goto muymgykqieiyymqq;
        muymgykqieiyymqq:
        gweewkicumqyakeo:
        goto caiggmogoqgosgka;
        mggwwmagesiaegsg:
    }
    
    public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool
    {
        return true;
    }
    
    public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto omskesmswmwcyqog;
        euayuoscsqgcwoco:
        aciwauiwiuckcckm:
        goto uommomyecokquyes;
        kysegkcsysgsocum:
        mukmqcgqiyskioqg:
        goto uukawameoimyycmi;
        kqoyicwkeiqacumi:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto euayuoscsqgcwoco;
        uuocckquiogqceuq:
        return $eqgoocgaqwqcimie;
        goto mssgmiumamgawcik;
        uukawameoimyycmi:
        $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw);
        goto mwuwcsuwecyqmyme;
        omskesmswmwcyqog:
        if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) {
            goto mukmqcgqiyskioqg;
        }
        goto uiwwogwqcoyqgqws;
        uommomyecokquyes:
        qoywwuqkqwgkgomu:
        goto uuocckquiogqceuq;
        mwuwcsuwecyqmyme:
        if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) {
            goto aciwauiwiuckcckm;
        }
        goto kqoyicwkeiqacumi;
        lemqkucuseomiegm:
        goto qoywwuqkqwgkgomu;
        goto kysegkcsysgsocum;
        uiwwogwqcoyqgqws:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto lemqkucuseomiegm;
        mssgmiumamgawcik:
    }
}

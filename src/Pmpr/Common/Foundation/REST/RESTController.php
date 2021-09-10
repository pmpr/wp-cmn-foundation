<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        $this->namespace = "\160\155\160\162\x2f\166\x31";
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
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\145\162\x6d\x69\x73\163\x69\x6f\156\137\143\141\x6c\x6c\x62\141\143\x6b" => [$this, "\x61\x63\x6b\165\141\x69\x67\151\x6f\143\163\147\x79\x71\x77\145"]]);
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
        return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\162\145\x66\145\162\145\162");
    }
    
    public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa)
    {
        goto iaaakumgaeogkyau;
        eksiecgiomucusou:
        $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] ?? false;
        goto gweewkicumqyakeo;
        ywqqcwwikuaqgswy:
        if (preg_match("\x2f\167\167\x77\134\56\x7c\150\164\164\160\x73\77\72\134\x2f\134\57\x28\133\141\x2d\172\x41\x2d\132\x30\55\71\x75\x30\x61\61\55\134\x75\146\x66\x66\146\55\135\x7b\x32\54\x7d\134\x2e\x5b\141\55\x7a\x41\55\x5a\60\x2d\x39\x75\x30\x61\x31\x2d\x5c\165\146\146\146\x66\55\135\173\x32\x2c\x7d\51\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) {
            goto kywsoesguwyeukuk;
        }
        goto qwckkegewuioawok;
        oosmoaqgqegqmecm:
        kywsoesguwyeukuk:
        goto eksiecgiomucusou;
        ceooomymweuccyke:
        return $iakkeikwceeomgyq;
        goto qsseaomwyuequyuc;
        gmiqeasocceqcmyy:
        goto yoyuemoqqmcamysy;
        goto oosmoaqgqegqmecm;
        gweewkicumqyakeo:
        yoyuemoqqmcamysy:
        goto ceooomymweuccyke;
        iaaakumgaeogkyau:
        $yucuiaqgmwimgcoy = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\165\163\145\162\137\x61\x67\145\156\x74");
        goto ywqqcwwikuaqgswy;
        qwckkegewuioawok:
        $iakkeikwceeomgyq = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\150\157\x73\164");
        goto gmiqeasocceqcmyy;
        qsseaomwyuequyuc:
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
        goto mggwwmagesiaegsg;
        mggwwmagesiaegsg:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            goto swusasqsywoymauc;
            swusasqsywoymauc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wgagciiiyokkccaw;
            }
            goto yuqgckkmggeecmcu;
            kgeouqmockmeqamy:
            wgagciiiyokkccaw:
            goto muymgykqieiyymqq;
            yuqgckkmggeecmcu:
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus->sacmkccceuywoqsq(true);
            goto kgeouqmockmeqamy;
            muymgykqieiyymqq:
            qwycyuqsagqcyeau:
            goto caiggmogoqgosgka;
            caiggmogoqgosgka:
        }
        goto aciwauiwiuckcckm;
        mukmqcgqiyskioqg:
        return $ikgwqyuyckaewsow;
        goto qoywwuqkqwgkgomu;
        aciwauiwiuckcckm:
        eeawuswkssoumcqq:
        goto mukmqcgqiyskioqg;
        qoywwuqkqwgkgomu:
    }
    
    public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool
    {
        return true;
    }
    
    public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto kysegkcsysgsocum;
        ausccuiqiucusomk:
        lemqkucuseomiegm:
        goto eccqqigoouugsysq;
        uuocckquiogqceuq:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto mssgmiumamgawcik;
        uommomyecokquyes:
        if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) {
            goto omskesmswmwcyqog;
        }
        goto uuocckquiogqceuq;
        mssgmiumamgawcik:
        omskesmswmwcyqog:
        goto ausccuiqiucusomk;
        kysegkcsysgsocum:
        if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) {
            goto uiwwogwqcoyqgqws;
        }
        goto uukawameoimyycmi;
        eccqqigoouugsysq:
        return $eqgoocgaqwqcimie;
        goto qooeamikmycgiyse;
        uukawameoimyycmi:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto mwuwcsuwecyqmyme;
        kqoyicwkeiqacumi:
        uiwwogwqcoyqgqws:
        goto euayuoscsqgcwoco;
        euayuoscsqgcwoco:
        $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw);
        goto uommomyecokquyes;
        mwuwcsuwecyqmyme:
        goto lemqkucuseomiegm;
        goto kqoyicwkeiqacumi;
        qooeamikmycgiyse:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->namespace = "\x70\155\x70\x72\57\166\61";
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
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\145\x72\x6d\151\163\x73\x69\157\x6e\x5f\x63\141\154\154\142\x61\x63\153" => [$this, "\x61\143\153\x75\x61\151\147\x69\157\x63\x73\147\x79\161\167\145"]]);
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
        return $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\162\145\x66\145\x72\145\x72");
    }
    
    public function ogkysoamaegikmcy(WP_REST_Request $aqmwamyiwgeeymqa)
    {
        goto iaaakumgaeogkyau;
        eksiecgiomucusou:
        $iakkeikwceeomgyq = $meyiiwcswqmuggyg[1] ?? false;
        goto gweewkicumqyakeo;
        gmiqeasocceqcmyy:
        goto yoyuemoqqmcamysy;
        goto oosmoaqgqegqmecm;
        gweewkicumqyakeo:
        yoyuemoqqmcamysy:
        goto ceooomymweuccyke;
        ywqqcwwikuaqgswy:
        if (preg_match("\57\167\167\167\x5c\x2e\x7c\x68\x74\x74\160\x73\77\x3a\134\x2f\134\57\50\133\x61\55\172\101\x2d\132\60\x2d\71\x75\x30\x61\61\x2d\x5c\x75\x66\x66\x66\146\x2d\135\x7b\62\x2c\175\x5c\56\133\141\x2d\x7a\101\x2d\132\x30\55\x39\x75\60\141\61\55\x5c\165\x66\146\x66\146\x2d\135\x7b\x32\x2c\175\x29\57", $yucuiaqgmwimgcoy, $meyiiwcswqmuggyg)) {
            goto kywsoesguwyeukuk;
        }
        goto qwckkegewuioawok;
        qwckkegewuioawok:
        $iakkeikwceeomgyq = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\150\157\163\164");
        goto gmiqeasocceqcmyy;
        oosmoaqgqegqmecm:
        kywsoesguwyeukuk:
        goto eksiecgiomucusou;
        iaaakumgaeogkyau:
        $yucuiaqgmwimgcoy = $this->gmsemuiwicucmcok($aqmwamyiwgeeymqa, "\165\163\145\162\137\x61\147\145\156\164");
        goto ywqqcwwikuaqgswy;
        ceooomymweuccyke:
        return $iakkeikwceeomgyq;
        goto qsseaomwyuequyuc;
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
            kgeouqmockmeqamy:
            wgagciiiyokkccaw:
            goto muymgykqieiyymqq;
            muymgykqieiyymqq:
            qwycyuqsagqcyeau:
            goto caiggmogoqgosgka;
            yuqgckkmggeecmcu:
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus->sacmkccceuywoqsq(true);
            goto kgeouqmockmeqamy;
            swusasqsywoymauc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wgagciiiyokkccaw;
            }
            goto yuqgckkmggeecmcu;
            caiggmogoqgosgka:
        }
        goto aciwauiwiuckcckm;
        aciwauiwiuckcckm:
        eeawuswkssoumcqq:
        goto mukmqcgqiyskioqg;
        mukmqcgqiyskioqg:
        return $ikgwqyuyckaewsow;
        goto qoywwuqkqwgkgomu;
        qoywwuqkqwgkgomu:
    }
    
    public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool
    {
        return true;
    }
    
    public function aemeowyaecqmymas(WP_REST_Request $aqmwamyiwgeeymqa, string $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        goto kysegkcsysgsocum;
        mwuwcsuwecyqmyme:
        goto lemqkucuseomiegm;
        goto kqoyicwkeiqacumi;
        euayuoscsqgcwoco:
        $eqgoocgaqwqcimie = $aqmwamyiwgeeymqa->get_param($uusmaiomayssaecw);
        goto uommomyecokquyes;
        uommomyecokquyes:
        if (!(is_numeric($ggauoeuaesiymgee) && !is_numeric($eqgoocgaqwqcimie))) {
            goto omskesmswmwcyqog;
        }
        goto uuocckquiogqceuq;
        kqoyicwkeiqacumi:
        uiwwogwqcoyqgqws:
        goto euayuoscsqgcwoco;
        uuocckquiogqceuq:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto mssgmiumamgawcik;
        kysegkcsysgsocum:
        if ($aqmwamyiwgeeymqa->has_param($uusmaiomayssaecw)) {
            goto uiwwogwqcoyqgqws;
        }
        goto uukawameoimyycmi;
        mssgmiumamgawcik:
        omskesmswmwcyqog:
        goto ausccuiqiucusomk;
        eccqqigoouugsysq:
        return $eqgoocgaqwqcimie;
        goto qooeamikmycgiyse;
        ausccuiqiucusomk:
        lemqkucuseomiegm:
        goto eccqqigoouugsysq;
        uukawameoimyycmi:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto mwuwcsuwecyqmyme;
        qooeamikmycgiyse:
    }
}

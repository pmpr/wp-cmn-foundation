<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const AUTHORIZATION = "\x41\165\164\150\157\x72\x69\x7a\x61\x74\151\x6f\x6e";
    const CONTENT_TYPE_KEY = "\103\157\156\164\x65\x6e\164\x2d\x54\x79\x70\x65";
    const APPLICATION_JSON_KEY = "\x61\160\160\x6c\151\x63\x61\x74\x69\157\x6e\57\152\163\x6f\x6e";
    const HTML_ACCEPT = "\x74\x65\x78\x74\x2f\150\x74\x6d\154\54\141\x70\x70\154\x69\x63\141\164\x69\157\x6e\x2f\170\x68\x74\155\154\53\170\x6d\x6c\54\x61\160\x70\x6c\151\143\141\164\x69\x6f\x6e\x2f\170\x6d\154\x3b\x71\75\60\x2e\x39\54" . "\x69\155\x61\147\145\57\167\145\x62\160\54\151\155\x61\x67\145\57\141\x70\x6e\147\x2c\x2a\57\52\x3b\x71\x3d\x30\56\70\54\141\x70\x70\154\x69\x63\x61\164\x69\157\156\x2f\x73\x69\147\x6e\145\144\55\x65\x78\143\150\x61\x6e\147\145\x3b\166\x3d\x62\x33";
    const BROWSER_USER_AGENT = "\115\x6f\172\x69\x6c\154\141\57\65\56\x30\40\x28\114\151\156\x75\170\73\x20\x41\156\144\x72\x6f\151\x64\x20\x37\x2e\x30\x3b\x20\x4d\157\x74\x6f\x20\107\x20\50\64\x29\x29\x20\101\x70\x70\154\145\127\x65\142\x4b\x69\x74\x2f\x35\x33\x37\x2e\63\66\x20" . "\50\x4b\x48\x54\115\114\x2c\40\154\x69\153\145\40\107\x65\x63\153\x6f\x29\40\103\x68\x72\157\x6d\145\x2f\70\x34\56\60\56\x34\x31\64\x33\56\x37\x20\115\157\142\151\154\145\40\x53\x61\x66\141\x72\151\x2f\65\63\x37\x2e\x33\x36\40\x43\150\162\x6f\155\x65\55\x4c\x69\147\x68\164\150\157\165\163\145";
    
    protected array $options = [];
    
    protected array $queries = [];
    
    protected ?string $domain = null;
    
    protected ?string $accept = null;
    
    protected ?Client $client = null;
    
    public function __construct()
    {
        $this->client = new Client(["\x63\x6f\x6f\x6b\151\145\163" => true]);
        parent::__construct();
    }
    
    public function wmciwsucuuyumkes() : ?Client
    {
        return $this->client;
    }
    
    public function wemyikwikgwqwuoc()
    {
        
        return $this->wmciwsucuuyumkes()->getConfig("\143\x6f\x6f\153\x69\145\163");
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
        goto ogoyusqumokucecg;
        wiauusmyowuykyis:
        return $this->accept;
        goto akauggwssmsooago;
        ogoyusqumokucecg:
        if ($this->accept) {
            goto cwmouqwqmkioeqiq;
        }
        goto qegwqosqeiaywqio;
        yagcgciumusoisuq:
        cwmouqwqmkioeqiq:
        goto wiauusmyowuykyis;
        qegwqosqeiaywqio:
        $this->accept = "\141\160\160\154\x69\143\x61\x74\x69\157\156\57\152\163\157\x6e";
        goto yagcgciumusoisuq;
        akauggwssmsooago:
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
        return $this->kesomeowemmyygey("\150\145\x61\144\x65\x72\163", [self::AUTHORIZATION => "\102\145\x61\x72\x65\x72\x20{$mgegoogckgsumooq}"]);
    }
    
    public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array
    {
        goto aymekuseakseoeke;
        aymekuseakseoeke:
        $igqsaukqcqscimok = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
        goto zkwcmqmekgeqwemw;
        aksgswgmycoikuoo:
        return $uomewyckeuqoqocu;
        goto gimcguskeecmoags;
        saigkiiwwkkusicm:
        giacoeeosqmawgwy:
        goto aksgswgmycoikuoo;
        zkwcmqmekgeqwemw:
        if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) {
            goto wmimmucwgosqieee;
        }
        goto oeykoakwmouewksg;
        swususomkmoeegsg:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto saigkiiwwkkusicm;
        oeykoakwmouewksg:
        if (!is_array($igqsaukqcqscimok)) {
            goto ocqukkewagukgwcm;
        }
        goto wqayyeskagucmeis;
        cegwmkmcgiuyegci:
        wmimmucwgosqieee:
        goto swususomkmoeegsg;
        wqayyeskagucmeis:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie);
        goto woyiagsemicyskkg;
        wewusgmimaqoasim:
        goto giacoeeosqmawgwy;
        goto cegwmkmcgiuyegci;
        woyiagsemicyskkg:
        ocqukkewagukgwcm:
        goto wewusgmimaqoasim;
        gimcguskeecmoags:
    }
    
    public function ksqekagyyameaceq() : array
    {
        return $this->queries;
    }
    
    public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self
    {
        goto yeiqiuuwaiysiuom;
        cywoauacmosaisie:
        return $this;
        goto gyseesgwqekccuqm;
        uaswgieioykugsww:
        $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom);
        goto aqmgmaaomqqwswos;
        yeiqiuuwaiysiuom:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto mmkycoggqqcyiugc;
        mmkycoggqqcyiugc:
        if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) {
            goto oiiwcwuccecwaiaa;
        }
        goto uaswgieioykugsww;
        aqmgmaaomqqwswos:
        oiiwcwuccecwaiaa:
        goto cywoauacmosaisie;
        gyseesgwqekccuqm:
    }
    
    public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self
    {
        goto iiyqieuwqywsuwie;
        keewyswqkywqwiig:
        ikcygyysmcswyoew:
        goto uiooaaskesmueuci;
        uiooaaskesmueuci:
        return $this;
        goto myiuomaaisokucsu;
        iiyqieuwqywsuwie:
        foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) {
            $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom);
            isikkmukiimiqoie:
        }
        goto keewyswqkywqwiig;
        myiuomaaisokucsu:
    }
    
    private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array
    {
        goto koaywkwgumwauyce;
        ymoeogqiyigaaqwa:
        if (!$uoomaookgsyciacm) {
            goto akiqygykgeusywsc;
        }
        goto wqecaeewcikcakce;
        qoecqiuqgykayeau:
        akiqygykgeusywsc:
        goto kykkokesucsumwye;
        wqecaeewcikcakce:
        $qiouiwasaauyaaue[RequestOptions::QUERY] = preg_replace("\57\x25\65\x42\50\77\x3a\133\x30\x2d\71\135\174\133\61\x2d\71\x5d\x5b\x30\x2d\71\135\53\x29\45\x35\x44\75\x2f", "\x3d", http_build_query($uoomaookgsyciacm));
        goto qoecqiuqgykayeau;
        koaywkwgumwauyce:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto ymoeogqiyigaaqwa;
        kykkokesucsumwye:
        return $qiouiwasaauyaaue;
        goto yqyokmiiywkykgkw;
        yqyokmiiywkykgkw:
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\147\x65\x74") : ?ResponseInterface
    {
        goto gmowaimiewisgwam;
        gyuwokmaygmksmow:
        try {
            goto yqsamggueqgeoscy;
            cceeiumiqwqcumwm:
            $this->saqqeqmcyyoeqici(sprintf("\x41\120\x49\x20\x25\x73\40\x52\145\x71\165\145\163\x74\x20\105\x72\x72\157\x72\x3a\40\47\x25\163\47\x20\x69\163\x20\x6e\157\164\40\141\x20\x76\141\154\x69\x64\40\x64\x6f\155\x61\151\x6e\56", strtoupper($qgciuiagkkguykgs), $mokawwccycoiqeka));
            goto yikkososcyoeiccm;
            ewgqmcceqiquyyee:
            if (!$mokawwccycoiqeka) {
                goto mgiuikekqwwecquo;
            }
            goto kisaauwmeykgqgqm;
            kkkaqoyswqieiwki:
            goto ieemwgoqewsyowsa;
            goto sygeyoyqkigmaqcy;
            sygeyoyqkigmaqcy:
            kgyegeweeukkoaso:
            goto kuiqqcsmccogwkii;
            eyqgkouukusouyuo:
            if (ManipulateValidation::wmcwegoisyeeosqu($xeciwimgioieayek)) {
                goto kgyegeweeukkoaso;
            }
            goto kwsiqmqimiymeoog;
            wgecgiiowkogkymc:
            if (ManipulateValidation::wmcwegoisyeeosqu($mokawwccycoiqeka)) {
                goto simyiqmsauwogeke;
            }
            goto cceeiumiqwqcumwm;
            yqsamggueqgeoscy:
            $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            goto cqkeokockswukacw;
            imkouaauqmwgkygg:
            $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue);
            goto eyqgkouukusouyuo;
            kisaauwmeykgqgqm:
            $mokawwccycoiqeka = "{$mokawwccycoiqeka}{$xeciwimgioieayek}";
            goto okkeywoaaumimwag;
            koousagcuqiyeogw:
            $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($mokawwccycoiqeka, $qiouiwasaauyaaue);
            goto yiuqimuyesqegyym;
            giugammuqoewuoyc:
            $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue);
            goto imkouaauqmwgkygg;
            kwsiqmqimiymeoog:
            $mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua());
            goto ewgqmcceqiquyyee;
            yikkososcyoeiccm:
            goto gcoiayyaeggagsam;
            goto ocysuimysygiwaca;
            ocysuimysygiwaca:
            simyiqmsauwogeke:
            goto koousagcuqiyeogw;
            cqkeokockswukacw:
            $this->kesomeowemmyygey("\150\145\141\144\x65\162", ["\x61\x63\143\x65\160\164" => $this->mcacmccgmkkouuqg()]);
            goto giugammuqoewuoyc;
            okkeywoaaumimwag:
            mgiuikekqwwecquo:
            goto kkkaqoyswqieiwki;
            yiuqimuyesqegyym:
            gcoiayyaeggagsam:
            goto cyegcyuoeqoeuwea;
            aowogueuuaoissso:
            ieemwgoqewsyowsa:
            goto wgecgiiowkogkymc;
            kuiqqcsmccogwkii:
            $mokawwccycoiqeka = $xeciwimgioieayek;
            goto aowogueuuaoissso;
            cyegcyuoeqoeuwea:
        } catch (ClientException $wgaoewqkwgomoaai) {
            
            $keccaugmemegoimu = $wgaoewqkwgomoaai->getResponse();
            $this->saqqeqmcyyoeqici(sprintf("\101\120\111\x20\45\x73\x20\122\145\x71\165\x65\x73\164\40\x45\x72\162\157\162\72\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}", strtoupper($qgciuiagkkguykgs)));
        }
        goto keakqecogkuocqcw;
        gmowaimiewisgwam:
        $keccaugmemegoimu = null;
        goto gyuwokmaygmksmow;
        keakqecogkuocqcw:
        return $keccaugmemegoimu;
        goto cgcmcsgeeoecumwq;
        cgcmcsgeeoecumwq:
    }
    
    public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x67\145\x74");
    }
    
    public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x70\x6f\163\164");
    }
    
    public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\x61\164\143\x68");
    }
    
    public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x64\x65\x6c\x65\164\145");
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto uucieweckoqqsoks;
        ceeogawcoyikgsim:
        yecgscseggkuesec:
        goto iyeggmisagiwawwk;
        uucieweckoqqsoks:
        $sogksuscggsicmac = null;
        goto cuiyioeewqwsiqsw;
        cieeesmkiaakmeok:
        return $sogksuscggsicmac;
        goto cweyguqiqaqusuao;
        iyeggmisagiwawwk:
        csesgauismawagku:
        goto cieeesmkiaakmeok;
        quygmuqewkgyecqo:
        switch ($this->mcacmccgmkkouuqg()) {
            case "\141\x70\x70\x6c\151\143\141\x74\151\157\x6e\57\x6a\x73\157\156":
                $sogksuscggsicmac = json_decode($sogksuscggsicmac, true);
                goto csesgauismawagku;
        }
        goto ceeogawcoyikgsim;
        awyemswwoieewoqa:
        eoyaywigcimwcssu:
        goto quygmuqewkgyecqo;
        cuiyioeewqwsiqsw:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto eoyaywigcimwcssu;
        }
        goto igsmyoowcmiwakua;
        igsmyoowcmiwakua:
        $sogksuscggsicmac = $keccaugmemegoimu->wesecsykkuakgyec();
        goto awyemswwoieewoqa;
        cweyguqiqaqusuao:
    }
    
    public function occymigcemkqucuw(?ResponseInterface $keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = self::MESSAGE) : bool
    {
        goto uayauukwosacweis;
        awoceaocmuugoawi:
        cyqekysgyeycmuuq:
        goto qcigiiqacgoiemqa;
        ecukycksiqeeyuoa:
        iiasoeuismqwyycq:
        goto ukwusskgsgkacmsa;
        ouqimcasmucqeyyo:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto ssiweiyoyasksgms;
        csykccgkakqmgock:
        goto eqiymuecwacqwayg;
        goto gqymkgqmgmqkmuus;
        owmgcmumcuqawiik:
        goto cyqekysgyeycmuuq;
        goto ocqsukugmwakoeka;
        ssiweiyoyasksgms:
        $smgooosyoeqwcaeg = json_decode($keccaugmemegoimu->wesecsykkuakgyec()->sigciooygkcccyko());
        goto aiomowcyeiymassu;
        ocqsukugmwakoeka:
        cgmoiuuiqqeousac:
        goto ckayiusouiaqkgsa;
        uumcaooaockeeusm:
        uisaaeagyuouaass:
        goto ouqimcasmucqeyyo;
        aoqykwgyygqwsmoc:
        $iswcokucwmiosiaq = $keccaugmemegoimu;
        goto eggsakwewuussuwc;
        rsgiiamwiogywmos:
        mugaweuuggguycsy:
        goto ecukycksiqeeyuoa;
        euisiqqsgwmegmem:
        $ksaameoqigiaoigg = true;
        goto soqgimommckkgiiw;
        ukwusskgsgkacmsa:
        wiaeawiisoyoiwma:
        goto owmgcmumcuqawiik;
        soqgimommckkgiiw:
        goto wiaeawiisoyoiwma;
        goto uumcaooaockeeusm;
        uyycwsqcouisceqi:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto cgmoiuuiqqeousac;
        }
        goto sasqkeaucymqqyes;
        aiomowcyeiymassu:
        switch ($keccaugmemegoimu->wkaoyeoamyiacyeg()) {
            case 400:
            case 403:
                goto qswkcweqkgcgsqsc;
                qswkcweqkgcgsqsc:
                if (!$smgooosyoeqwcaeg) {
                    goto uickqaioaugyucug;
                }
                goto ccacgswmaksmoayw;
                wmseuigaskyekaqg:
                $icwicymcioeyeyek = [self::CODE => ManipulateArray::get($smgooosyoeqwcaeg, self::CODE), self::STATUS => $keccaugmemegoimu->wkaoyeoamyiacyeg()];
                goto kkyqusekqcagwmcm;
                okgcmigwaqququoo:
                if ($iswcokucwmiosiaq) {
                    goto mogaqucuwugmgcki;
                }
                goto jscmuqkkguwewisq;
                ccacgswmaksmoayw:
                $iswcokucwmiosiaq = ManipulateArray::get($smgooosyoeqwcaeg, $qeweemoqwwsoumeg);
                goto wmseuigaskyekaqg;
                jscmuqkkguwewisq:
                $iswcokucwmiosiaq = $kuukgsmqkagwaciu;
                goto mgiqqociouigaeqm;
                mgiqqociouigaeqm:
                mogaqucuwugmgcki:
                goto kiwsmkmwywyyyqiy;
                kiwsmkmwywyyyqiy:
                goto iiasoeuismqwyycq;
                goto egoewiuwaumcygqe;
                kkyqusekqcagwmcm:
                uickqaioaugyucug:
                goto okgcmigwaqququoo;
                egoewiuwaumcygqe:
            default:
                $iswcokucwmiosiaq = sprintf("\x25\x73\72\x20\45\x73", __("\103\157\x6e\x6e\x65\x63\164\x69\157\156\40\105\162\162\157\x72", PR__CMN__FOUNDATION), $kuukgsmqkagwaciu);
                goto iiasoeuismqwyycq;
        }
        goto rsgiiamwiogywmos;
        qcigiiqacgoiemqa:
        return $ksaameoqigiaoigg;
        goto mucycmsamuamwakw;
        wesuaykwwuyeeqkk:
        $iswcokucwmiosiaq .= __("\x52\x65\163\x70\x6f\x6e\x73\145\40\x69\x73\x20\156\x6f\164\x20\166\x61\x6c\151\x64", PR__CMN__FOUNDATION);
        goto csykccgkakqmgock;
        eggsakwewuussuwc:
        eqiymuecwacqwayg:
        goto awoceaocmuugoawi;
        ckayiusouiaqkgsa:
        if (is_string($keccaugmemegoimu)) {
            goto cqmqmqimsiqekqeg;
        }
        goto wesuaykwwuyeeqkk;
        uayauukwosacweis:
        $ksaameoqigiaoigg = false;
        goto uyycwsqcouisceqi;
        sasqkeaucymqqyes:
        if ($keccaugmemegoimu->wkaoyeoamyiacyeg() !== 200) {
            goto uisaaeagyuouaass;
        }
        goto euisiqqsgwmegmem;
        gqymkgqmgmqkmuus:
        cqmqmqimsiqekqeg:
        goto aoqykwgyygqwsmoc;
        mucycmsamuamwakw:
    }
    
    public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee = '', $csowmwgiiyueuius = self::SUCCESS, $aqogmkcqyeosckkm = self::ERRORS) : bool
    {
        goto jkumcawosiyygaey;
        gaqyckqesooysusy:
        goto wugieaemocyyeaos;
        goto ekmyaiqggooyuciu;
        jkumcawosiyygaey:
        $eisqsskqimiigkay = true;
        goto eamcmmswicuegaso;
        aoqgkyoegqssakuq:
        gumoiomiwcueoaim:
        goto gaqyckqesooysusy;
        kisikuaqoaeayiiq:
        return $eisqsskqimiigkay;
        goto eymwskwgmiaigcwo;
        qiqgekyeeqokiaai:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, $aqogmkcqyeosckkm, []);
        goto okaewmiweigkcmye;
        wueqcsuguccioeyo:
        $wumguikkgaigkoee .= $ueeagokqmgisgauy;
        goto aoqgkyoegqssakuq;
        wckmescqueucsasq:
        socgmqisawsmgkyi:
        goto kisikuaqoaeayiiq;
        ekmyaiqggooyuciu:
        cskaysiukqwwaiok:
        goto mqamcimuisqakyym;
        qmockiskiuyoekug:
        $eisqsskqimiigkay = false;
        goto wckmescqueucsasq;
        wmswiyimwcsmqgew:
        umosyeioascwoyww:
        goto giiycggyqyaakmsw;
        mqamcimuisqakyym:
        foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) {
            $wumguikkgaigkoee[] = sprintf("\x25\163\40\x28\45\163\x3a\40\x25\x73\51", ManipulateArray::get($iswcokucwmiosiaq, "\x6d\145\163\x73\x61\x67\x65"), __("\x45\x72\x72\157\162\x20\103\157\x64\x65", PR__CMN__FOUNDATION), ManipulateArray::get($iswcokucwmiosiaq, "\x63\x6f\x64\145"));
            wqgmscukuimomwau:
        }
        goto wmswiyimwcsmqgew;
        mqocmwqcoggwmiag:
        if (!is_string($ueeagokqmgisgauy)) {
            goto gumoiomiwcueoaim;
        }
        goto wueqcsuguccioeyo;
        eamcmmswicuegaso:
        if (ManipulateArray::get($sogksuscggsicmac, $csowmwgiiyueuius)) {
            goto socgmqisawsmgkyi;
        }
        goto qiqgekyeeqokiaai;
        okaewmiweigkcmye:
        if (is_array($ueeagokqmgisgauy)) {
            goto cskaysiukqwwaiok;
        }
        goto mqocmwqcoggwmiag;
        giiycggyqyaakmsw:
        wugieaemocyyeaos:
        goto qmockiskiuyoekug;
        eymwskwgmiaigcwo:
    }
}

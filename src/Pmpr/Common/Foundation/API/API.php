<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const AUTHORIZATION = "\x41\x75\164\150\x6f\x72\151\x7a\x61\164\151\x6f\156";
    const CONTENT_TYPE_KEY = "\103\x6f\x6e\x74\x65\x6e\164\55\124\171\x70\x65";
    const APPLICATION_JSON_KEY = "\141\x70\x70\x6c\x69\x63\x61\164\151\157\156\x2f\x6a\x73\157\156";
    const HTML_ACCEPT = "\164\x65\170\164\x2f\150\164\155\154\54\141\160\x70\154\151\143\x61\x74\x69\x6f\156\x2f\x78\150\x74\155\154\x2b\x78\x6d\x6c\x2c\141\x70\160\x6c\x69\x63\x61\164\x69\x6f\x6e\x2f\x78\x6d\x6c\73\161\75\x30\56\71\x2c" . "\151\155\x61\x67\145\57\167\x65\142\160\54\x69\155\x61\x67\x65\x2f\141\160\156\147\x2c\x2a\x2f\x2a\x3b\x71\75\x30\56\70\x2c\141\x70\x70\x6c\151\x63\x61\164\151\x6f\156\57\163\151\147\x6e\145\x64\55\x65\170\x63\150\x61\156\147\x65\x3b\x76\x3d\x62\63";
    const BROWSER_USER_AGENT = "\x4d\157\172\151\x6c\154\x61\57\65\x2e\60\40\50\x4c\151\x6e\x75\170\x3b\40\101\156\144\162\157\151\144\40\67\x2e\60\x3b\x20\x4d\157\x74\157\x20\107\40\50\64\x29\x29\40\101\160\x70\x6c\145\127\x65\142\x4b\x69\x74\x2f\65\63\67\56\x33\66\x20" . "\50\113\110\x54\115\x4c\x2c\x20\154\x69\x6b\x65\40\x47\x65\143\x6b\157\x29\x20\x43\150\x72\157\155\145\x2f\70\x34\x2e\x30\x2e\64\61\x34\63\x2e\x37\40\x4d\157\x62\151\154\145\x20\x53\141\x66\x61\x72\151\x2f\65\63\67\x2e\x33\x36\40\x43\x68\162\x6f\155\x65\x2d\114\x69\x67\150\164\x68\x6f\165\163\x65";
    
    protected array $options = [];
    
    protected array $queries = [];
    
    protected ?string $domain = null;
    
    protected ?string $accept = null;
    
    protected ?Client $client = null;
    
    public function __construct()
    {
        $this->client = new Client(["\143\157\157\x6b\151\145\x73" => true]);
        parent::__construct();
    }
    
    public function wmciwsucuuyumkes() : ?Client
    {
        return $this->client;
    }
    
    public function wemyikwikgwqwuoc()
    {
        
        return $this->wmciwsucuuyumkes()->getConfig("\x63\x6f\x6f\153\x69\x65\163");
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
        goto wiauusmyowuykyis;
        akauggwssmsooago:
        $this->accept = "\141\x70\x70\x6c\x69\x63\x61\x74\151\157\156\57\152\163\157\156";
        goto ocqukkewagukgwcm;
        ocqukkewagukgwcm:
        yagcgciumusoisuq:
        goto wmimmucwgosqieee;
        wiauusmyowuykyis:
        if ($this->accept) {
            goto yagcgciumusoisuq;
        }
        goto akauggwssmsooago;
        wmimmucwgosqieee:
        return $this->accept;
        goto giacoeeosqmawgwy;
        giacoeeosqmawgwy:
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
        return $this->kesomeowemmyygey("\x68\145\x61\144\145\x72\x73", [self::AUTHORIZATION => "\x42\145\x61\162\x65\162\40{$mgegoogckgsumooq}"]);
    }
    
    public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array
    {
        goto wqayyeskagucmeis;
        gimcguskeecmoags:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto oiiwcwuccecwaiaa;
        wewusgmimaqoasim:
        if (!is_array($igqsaukqcqscimok)) {
            goto aymekuseakseoeke;
        }
        goto cegwmkmcgiuyegci;
        oiiwcwuccecwaiaa:
        oeykoakwmouewksg:
        goto yeiqiuuwaiysiuom;
        yeiqiuuwaiysiuom:
        return $uomewyckeuqoqocu;
        goto mmkycoggqqcyiugc;
        aksgswgmycoikuoo:
        zkwcmqmekgeqwemw:
        goto gimcguskeecmoags;
        wqayyeskagucmeis:
        $igqsaukqcqscimok = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
        goto woyiagsemicyskkg;
        swususomkmoeegsg:
        aymekuseakseoeke:
        goto saigkiiwwkkusicm;
        cegwmkmcgiuyegci:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie);
        goto swususomkmoeegsg;
        saigkiiwwkkusicm:
        goto oeykoakwmouewksg;
        goto aksgswgmycoikuoo;
        woyiagsemicyskkg:
        if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) {
            goto zkwcmqmekgeqwemw;
        }
        goto wewusgmimaqoasim;
        mmkycoggqqcyiugc:
    }
    
    public function ksqekagyyameaceq() : array
    {
        return $this->queries;
    }
    
    public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self
    {
        goto aqmgmaaomqqwswos;
        ikcygyysmcswyoew:
        uaswgieioykugsww:
        goto isikkmukiimiqoie;
        gyseesgwqekccuqm:
        $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom);
        goto ikcygyysmcswyoew;
        isikkmukiimiqoie:
        return $this;
        goto iiyqieuwqywsuwie;
        aqmgmaaomqqwswos:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto cywoauacmosaisie;
        cywoauacmosaisie:
        if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) {
            goto uaswgieioykugsww;
        }
        goto gyseesgwqekccuqm;
        iiyqieuwqywsuwie:
    }
    
    public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self
    {
        goto myiuomaaisokucsu;
        akiqygykgeusywsc:
        keewyswqkywqwiig:
        goto koaywkwgumwauyce;
        myiuomaaisokucsu:
        foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) {
            $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom);
            uiooaaskesmueuci:
        }
        goto akiqygykgeusywsc;
        koaywkwgumwauyce:
        return $this;
        goto ymoeogqiyigaaqwa;
        ymoeogqiyigaaqwa:
    }
    
    private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array
    {
        goto qoecqiuqgykayeau;
        kykkokesucsumwye:
        if (!$uoomaookgsyciacm) {
            goto wqecaeewcikcakce;
        }
        goto yqyokmiiywkykgkw;
        mgiuikekqwwecquo:
        wqecaeewcikcakce:
        goto kgyegeweeukkoaso;
        qoecqiuqgykayeau:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto kykkokesucsumwye;
        yqyokmiiywkykgkw:
        $qiouiwasaauyaaue[RequestOptions::QUERY] = preg_replace("\x2f\x25\x35\x42\x28\x3f\72\x5b\x30\x2d\x39\x5d\x7c\133\x31\x2d\x39\135\133\x30\x2d\71\x5d\x2b\x29\x25\x35\x44\75\57", "\x3d", http_build_query($uoomaookgsyciacm));
        goto mgiuikekqwwecquo;
        kgyegeweeukkoaso:
        return $qiouiwasaauyaaue;
        goto ieemwgoqewsyowsa;
        ieemwgoqewsyowsa:
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\147\x65\x74") : ?ResponseInterface
    {
        goto cgcmcsgeeoecumwq;
        cgcmcsgeeoecumwq:
        $keccaugmemegoimu = null;
        goto eoyaywigcimwcssu;
        eoyaywigcimwcssu:
        try {
            goto imkouaauqmwgkygg;
            sygeyoyqkigmaqcy:
            $mokawwccycoiqeka = "{$mokawwccycoiqeka}{$xeciwimgioieayek}";
            goto kuiqqcsmccogwkii;
            wgecgiiowkogkymc:
            gcoiayyaeggagsam:
            goto cceeiumiqwqcumwm;
            okkeywoaaumimwag:
            $mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua());
            goto kkkaqoyswqieiwki;
            cyegcyuoeqoeuwea:
            cqkeokockswukacw:
            goto gmowaimiewisgwam;
            imkouaauqmwgkygg:
            $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            goto eyqgkouukusouyuo;
            ocysuimysygiwaca:
            if (ManipulateValidation::wmcwegoisyeeosqu($mokawwccycoiqeka)) {
                goto cqkeokockswukacw;
            }
            goto koousagcuqiyeogw;
            gmowaimiewisgwam:
            $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($mokawwccycoiqeka, $qiouiwasaauyaaue);
            goto gyuwokmaygmksmow;
            kuiqqcsmccogwkii:
            simyiqmsauwogeke:
            goto aowogueuuaoissso;
            eyqgkouukusouyuo:
            $this->kesomeowemmyygey("\150\145\x61\144\x65\x72", ["\141\x63\x63\x65\160\x74" => $this->mcacmccgmkkouuqg()]);
            goto kwsiqmqimiymeoog;
            ewgqmcceqiquyyee:
            $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue);
            goto kisaauwmeykgqgqm;
            koousagcuqiyeogw:
            $this->saqqeqmcyyoeqici(sprintf("\x41\x50\x49\40\x25\x73\x20\122\x65\x71\165\145\163\164\x20\x45\x72\x72\157\162\72\40\x27\x25\x73\47\x20\151\163\x20\x6e\157\164\x20\141\x20\166\141\x6c\x69\144\x20\144\157\x6d\x61\x69\x6e\x2e", strtoupper($qgciuiagkkguykgs), $mokawwccycoiqeka));
            goto yiuqimuyesqegyym;
            kwsiqmqimiymeoog:
            $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue);
            goto ewgqmcceqiquyyee;
            yiuqimuyesqegyym:
            goto giugammuqoewuoyc;
            goto cyegcyuoeqoeuwea;
            kisaauwmeykgqgqm:
            if (ManipulateValidation::wmcwegoisyeeosqu($xeciwimgioieayek)) {
                goto gcoiayyaeggagsam;
            }
            goto okkeywoaaumimwag;
            kkkaqoyswqieiwki:
            if (!$mokawwccycoiqeka) {
                goto simyiqmsauwogeke;
            }
            goto sygeyoyqkigmaqcy;
            cceeiumiqwqcumwm:
            $mokawwccycoiqeka = $xeciwimgioieayek;
            goto yikkososcyoeiccm;
            aowogueuuaoissso:
            goto yqsamggueqgeoscy;
            goto wgecgiiowkogkymc;
            gyuwokmaygmksmow:
            giugammuqoewuoyc:
            goto keakqecogkuocqcw;
            yikkososcyoeiccm:
            yqsamggueqgeoscy:
            goto ocysuimysygiwaca;
            keakqecogkuocqcw:
        } catch (ClientException $wgaoewqkwgomoaai) {
            
            $keccaugmemegoimu = $wgaoewqkwgomoaai->getResponse();
            $this->saqqeqmcyyoeqici(sprintf("\x41\x50\x49\40\x25\163\40\x52\x65\161\x75\145\163\x74\x20\x45\162\x72\157\x72\72\40{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}", strtoupper($qgciuiagkkguykgs)));
        }
        goto csesgauismawagku;
        csesgauismawagku:
        return $keccaugmemegoimu;
        goto yecgscseggkuesec;
        yecgscseggkuesec:
    }
    
    public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x67\x65\164");
    }
    
    public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\157\x73\x74");
    }
    
    public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x70\x61\x74\143\150");
    }
    
    public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\144\x65\154\x65\x74\145");
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto awyemswwoieewoqa;
        cweyguqiqaqusuao:
        igsmyoowcmiwakua:
        goto cqmqmqimsiqekqeg;
        cqmqmqimsiqekqeg:
        cuiyioeewqwsiqsw:
        goto eqiymuecwacqwayg;
        awyemswwoieewoqa:
        $sogksuscggsicmac = null;
        goto quygmuqewkgyecqo;
        ceeogawcoyikgsim:
        $sogksuscggsicmac = $keccaugmemegoimu->wesecsykkuakgyec();
        goto iyeggmisagiwawwk;
        cieeesmkiaakmeok:
        switch ($this->mcacmccgmkkouuqg()) {
            case "\x61\160\x70\x6c\x69\x63\141\x74\x69\157\x6e\57\152\x73\x6f\156":
                $sogksuscggsicmac = json_decode($sogksuscggsicmac, true);
                goto cuiyioeewqwsiqsw;
        }
        goto cweyguqiqaqusuao;
        iyeggmisagiwawwk:
        uucieweckoqqsoks:
        goto cieeesmkiaakmeok;
        quygmuqewkgyecqo:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto uucieweckoqqsoks;
        }
        goto ceeogawcoyikgsim;
        eqiymuecwacqwayg:
        return $sogksuscggsicmac;
        goto iiasoeuismqwyycq;
        iiasoeuismqwyycq:
    }
    
    public function occymigcemkqucuw(?ResponseInterface $keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = self::MESSAGE) : bool
    {
        goto euisiqqsgwmegmem;
        owmgcmumcuqawiik:
        qswkcweqkgcgsqsc:
        goto ocqsukugmwakoeka;
        wqgmscukuimomwau:
        return $ksaameoqigiaoigg;
        goto gumoiomiwcueoaim;
        euisiqqsgwmegmem:
        $ksaameoqigiaoigg = false;
        goto soqgimommckkgiiw;
        mucycmsamuamwakw:
        uickqaioaugyucug:
        goto umosyeioascwoyww;
        wesuaykwwuyeeqkk:
        goto sasqkeaucymqqyes;
        goto csykccgkakqmgock;
        ckayiusouiaqkgsa:
        uayauukwosacweis:
        goto wesuaykwwuyeeqkk;
        umosyeioascwoyww:
        sasqkeaucymqqyes:
        goto wqgmscukuimomwau;
        ssiweiyoyasksgms:
        goto uayauukwosacweis;
        goto aiomowcyeiymassu;
        awoceaocmuugoawi:
        mugaweuuggguycsy:
        goto qcigiiqacgoiemqa;
        ocqsukugmwakoeka:
        mogaqucuwugmgcki:
        goto ckayiusouiaqkgsa;
        rsgiiamwiogywmos:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto ecukycksiqeeyuoa;
        uumcaooaockeeusm:
        if ($keccaugmemegoimu->wkaoyeoamyiacyeg() !== 200) {
            goto cyqekysgyeycmuuq;
        }
        goto ouqimcasmucqeyyo;
        aoqykwgyygqwsmoc:
        $iswcokucwmiosiaq .= __("\x52\x65\x73\x70\x6f\x6e\163\145\x20\x69\163\x20\156\x6f\x74\x20\x76\141\x6c\151\144", PR__CMN__FOUNDATION);
        goto eggsakwewuussuwc;
        soqgimommckkgiiw:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto uyycwsqcouisceqi;
        }
        goto uumcaooaockeeusm;
        csykccgkakqmgock:
        uyycwsqcouisceqi:
        goto gqymkgqmgmqkmuus;
        aiomowcyeiymassu:
        cyqekysgyeycmuuq:
        goto rsgiiamwiogywmos;
        ecukycksiqeeyuoa:
        $smgooosyoeqwcaeg = json_decode($keccaugmemegoimu->wesecsykkuakgyec()->sigciooygkcccyko());
        goto ukwusskgsgkacmsa;
        gqymkgqmgmqkmuus:
        if (is_string($keccaugmemegoimu)) {
            goto mugaweuuggguycsy;
        }
        goto aoqykwgyygqwsmoc;
        ouqimcasmucqeyyo:
        $ksaameoqigiaoigg = true;
        goto ssiweiyoyasksgms;
        eggsakwewuussuwc:
        goto uickqaioaugyucug;
        goto awoceaocmuugoawi;
        qcigiiqacgoiemqa:
        $iswcokucwmiosiaq = $keccaugmemegoimu;
        goto mucycmsamuamwakw;
        ukwusskgsgkacmsa:
        switch ($keccaugmemegoimu->wkaoyeoamyiacyeg()) {
            case 400:
            case 403:
                goto kkyqusekqcagwmcm;
                uisaaeagyuouaass:
                wmseuigaskyekaqg:
                goto wiaeawiisoyoiwma;
                mgiqqociouigaeqm:
                ccacgswmaksmoayw:
                goto kiwsmkmwywyyyqiy;
                egoewiuwaumcygqe:
                $iswcokucwmiosiaq = $kuukgsmqkagwaciu;
                goto uisaaeagyuouaass;
                jscmuqkkguwewisq:
                $icwicymcioeyeyek = [self::CODE => ManipulateArray::get($smgooosyoeqwcaeg, self::CODE), self::STATUS => $keccaugmemegoimu->wkaoyeoamyiacyeg()];
                goto mgiqqociouigaeqm;
                kkyqusekqcagwmcm:
                if (!$smgooosyoeqwcaeg) {
                    goto ccacgswmaksmoayw;
                }
                goto okgcmigwaqququoo;
                wiaeawiisoyoiwma:
                goto mogaqucuwugmgcki;
                goto cgmoiuuiqqeousac;
                okgcmigwaqququoo:
                $iswcokucwmiosiaq = ManipulateArray::get($smgooosyoeqwcaeg, $qeweemoqwwsoumeg);
                goto jscmuqkkguwewisq;
                kiwsmkmwywyyyqiy:
                if ($iswcokucwmiosiaq) {
                    goto wmseuigaskyekaqg;
                }
                goto egoewiuwaumcygqe;
                cgmoiuuiqqeousac:
            default:
                $iswcokucwmiosiaq = sprintf("\45\x73\72\x20\45\163", __("\x43\157\156\x6e\145\x63\164\151\157\x6e\40\105\x72\x72\157\x72", PR__CMN__FOUNDATION), $kuukgsmqkagwaciu);
                goto mogaqucuwugmgcki;
        }
        goto owmgcmumcuqawiik;
        gumoiomiwcueoaim:
    }
    
    public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee = '', $csowmwgiiyueuius = self::SUCCESS, $aqogmkcqyeosckkm = self::ERRORS) : bool
    {
        goto okaewmiweigkcmye;
        aoqgkyoegqssakuq:
        if (is_array($ueeagokqmgisgauy)) {
            goto jkumcawosiyygaey;
        }
        goto gaqyckqesooysusy;
        wckmescqueucsasq:
        cskaysiukqwwaiok:
        goto kisikuaqoaeayiiq;
        giiycggyqyaakmsw:
        jkumcawosiyygaey:
        goto qmockiskiuyoekug;
        wueqcsuguccioeyo:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, $aqogmkcqyeosckkm, []);
        goto aoqgkyoegqssakuq;
        mqocmwqcoggwmiag:
        if (ManipulateArray::get($sogksuscggsicmac, $csowmwgiiyueuius)) {
            goto qiqgekyeeqokiaai;
        }
        goto wueqcsuguccioeyo;
        yuiyqaywukauayoe:
        qiqgekyeeqokiaai:
        goto ssccmsacioyiqkgw;
        gaqyckqesooysusy:
        if (!is_string($ueeagokqmgisgauy)) {
            goto socgmqisawsmgkyi;
        }
        goto ekmyaiqggooyuciu;
        ssccmsacioyiqkgw:
        return $eisqsskqimiigkay;
        goto yicgcsiewokauegy;
        okaewmiweigkcmye:
        $eisqsskqimiigkay = true;
        goto mqocmwqcoggwmiag;
        eymwskwgmiaigcwo:
        $eisqsskqimiigkay = false;
        goto yuiyqaywukauayoe;
        mqamcimuisqakyym:
        socgmqisawsmgkyi:
        goto wmswiyimwcsmqgew;
        qmockiskiuyoekug:
        foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) {
            $wumguikkgaigkoee[] = sprintf("\45\x73\40\x28\x25\163\72\x20\45\x73\51", ManipulateArray::get($iswcokucwmiosiaq, "\155\145\x73\163\x61\147\x65"), __("\105\x72\x72\157\x72\x20\x43\x6f\144\145", PR__CMN__FOUNDATION), ManipulateArray::get($iswcokucwmiosiaq, "\143\x6f\x64\145"));
            wugieaemocyyeaos:
        }
        goto wckmescqueucsasq;
        kisikuaqoaeayiiq:
        eamcmmswicuegaso:
        goto eymwskwgmiaigcwo;
        wmswiyimwcsmqgew:
        goto eamcmmswicuegaso;
        goto giiycggyqyaakmsw;
        ekmyaiqggooyuciu:
        $wumguikkgaigkoee .= $ueeagokqmgisgauy;
        goto mqamcimuisqakyym;
        yicgcsiewokauegy:
    }
}

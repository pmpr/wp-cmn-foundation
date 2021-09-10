<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const AUTHORIZATION = "\101\x75\164\150\157\162\151\172\x61\x74\151\157\156";
    const CONTENT_TYPE_KEY = "\103\x6f\x6e\164\x65\156\x74\55\x54\x79\x70\145";
    const APPLICATION_JSON_KEY = "\141\x70\x70\x6c\151\143\x61\x74\151\x6f\x6e\57\x6a\x73\x6f\x6e";
    const HTML_ACCEPT = "\x74\145\170\x74\57\150\x74\155\154\54\x61\x70\x70\154\x69\143\141\164\x69\x6f\156\57\x78\x68\164\x6d\154\53\170\x6d\x6c\x2c\141\160\160\154\151\x63\141\164\151\157\156\57\x78\155\x6c\73\161\75\60\x2e\71\x2c" . "\x69\155\x61\147\x65\x2f\x77\145\142\160\54\151\155\x61\147\x65\57\141\160\156\147\x2c\52\x2f\52\73\x71\75\x30\56\70\54\x61\160\x70\x6c\x69\x63\141\x74\151\157\x6e\x2f\x73\151\x67\156\145\144\x2d\145\170\x63\x68\141\156\x67\x65\x3b\166\75\142\63";
    const BROWSER_USER_AGENT = "\x4d\157\x7a\x69\x6c\x6c\x61\x2f\x35\x2e\x30\40\50\x4c\151\x6e\x75\170\x3b\40\x41\156\144\162\157\151\x64\x20\x37\56\60\73\x20\x4d\157\164\x6f\x20\x47\x20\50\64\x29\x29\40\101\x70\x70\x6c\x65\127\x65\x62\113\151\164\x2f\x35\63\67\56\x33\66\40" . "\x28\113\x48\x54\x4d\114\x2c\x20\154\151\153\145\40\x47\145\143\x6b\x6f\x29\40\103\150\x72\157\x6d\145\x2f\x38\64\56\60\x2e\64\x31\x34\63\56\67\40\115\x6f\x62\x69\x6c\x65\40\123\141\146\x61\x72\151\57\x35\x33\67\x2e\x33\x36\x20\x43\x68\162\157\155\x65\55\x4c\151\x67\150\164\x68\x6f\x75\163\x65";
    
    protected array $options = [];
    
    protected array $queries = [];
    
    protected ?string $domain = null;
    
    protected ?string $accept = null;
    
    protected ?Client $client = null;
    
    public function __construct()
    {
        $this->client = new Client(["\x63\x6f\157\x6b\x69\x65\x73" => true]);
        parent::__construct();
    }
    
    public function wmciwsucuuyumkes() : ?Client
    {
        return $this->client;
    }
    
    public function wemyikwikgwqwuoc()
    {
        
        return $this->wmciwsucuuyumkes()->getConfig("\x63\157\157\x6b\151\x65\163");
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
        $this->accept = "\x61\x70\x70\154\151\143\141\x74\x69\157\156\x2f\152\x73\157\x6e";
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
        return $this->kesomeowemmyygey("\x68\145\x61\144\145\x72\163", [self::AUTHORIZATION => "\102\145\141\162\x65\162\x20{$mgegoogckgsumooq}"]);
    }
    
    public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array
    {
        goto wqayyeskagucmeis;
        swususomkmoeegsg:
        aymekuseakseoeke:
        goto saigkiiwwkkusicm;
        saigkiiwwkkusicm:
        goto oeykoakwmouewksg;
        goto aksgswgmycoikuoo;
        oiiwcwuccecwaiaa:
        oeykoakwmouewksg:
        goto yeiqiuuwaiysiuom;
        wqayyeskagucmeis:
        $igqsaukqcqscimok = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
        goto woyiagsemicyskkg;
        gimcguskeecmoags:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto oiiwcwuccecwaiaa;
        aksgswgmycoikuoo:
        zkwcmqmekgeqwemw:
        goto gimcguskeecmoags;
        yeiqiuuwaiysiuom:
        return $uomewyckeuqoqocu;
        goto mmkycoggqqcyiugc;
        wewusgmimaqoasim:
        if (!is_array($igqsaukqcqscimok)) {
            goto aymekuseakseoeke;
        }
        goto cegwmkmcgiuyegci;
        cegwmkmcgiuyegci:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie);
        goto swususomkmoeegsg;
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
        aqmgmaaomqqwswos:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto cywoauacmosaisie;
        isikkmukiimiqoie:
        return $this;
        goto iiyqieuwqywsuwie;
        cywoauacmosaisie:
        if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) {
            goto uaswgieioykugsww;
        }
        goto gyseesgwqekccuqm;
        gyseesgwqekccuqm:
        $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom);
        goto ikcygyysmcswyoew;
        iiyqieuwqywsuwie:
    }
    
    public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self
    {
        goto myiuomaaisokucsu;
        myiuomaaisokucsu:
        foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) {
            $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom);
            uiooaaskesmueuci:
        }
        goto akiqygykgeusywsc;
        akiqygykgeusywsc:
        keewyswqkywqwiig:
        goto koaywkwgumwauyce;
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
        qoecqiuqgykayeau:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto kykkokesucsumwye;
        mgiuikekqwwecquo:
        wqecaeewcikcakce:
        goto kgyegeweeukkoaso;
        yqyokmiiywkykgkw:
        $qiouiwasaauyaaue[RequestOptions::QUERY] = preg_replace("\x2f\x25\65\x42\x28\x3f\72\x5b\60\55\71\x5d\x7c\x5b\x31\55\71\135\x5b\60\x2d\71\x5d\53\51\45\x35\x44\75\x2f", "\x3d", http_build_query($uoomaookgsyciacm));
        goto mgiuikekqwwecquo;
        kgyegeweeukkoaso:
        return $qiouiwasaauyaaue;
        goto ieemwgoqewsyowsa;
        ieemwgoqewsyowsa:
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\x65\x74") : ?ResponseInterface
    {
        goto cgcmcsgeeoecumwq;
        cgcmcsgeeoecumwq:
        $keccaugmemegoimu = null;
        goto eoyaywigcimwcssu;
        eoyaywigcimwcssu:
        try {
            goto imkouaauqmwgkygg;
            kisaauwmeykgqgqm:
            if (ManipulateValidation::wmcwegoisyeeosqu($xeciwimgioieayek)) {
                goto gcoiayyaeggagsam;
            }
            goto okkeywoaaumimwag;
            eyqgkouukusouyuo:
            $this->kesomeowemmyygey("\150\x65\x61\144\x65\162", ["\141\143\143\145\160\164" => $this->mcacmccgmkkouuqg()]);
            goto kwsiqmqimiymeoog;
            imkouaauqmwgkygg:
            $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            goto eyqgkouukusouyuo;
            yiuqimuyesqegyym:
            goto giugammuqoewuoyc;
            goto cyegcyuoeqoeuwea;
            cyegcyuoeqoeuwea:
            cqkeokockswukacw:
            goto gmowaimiewisgwam;
            kuiqqcsmccogwkii:
            simyiqmsauwogeke:
            goto aowogueuuaoissso;
            ocysuimysygiwaca:
            if (ManipulateValidation::wmcwegoisyeeosqu($mokawwccycoiqeka)) {
                goto cqkeokockswukacw;
            }
            goto koousagcuqiyeogw;
            ewgqmcceqiquyyee:
            $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue);
            goto kisaauwmeykgqgqm;
            yikkososcyoeiccm:
            yqsamggueqgeoscy:
            goto ocysuimysygiwaca;
            okkeywoaaumimwag:
            $mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua());
            goto kkkaqoyswqieiwki;
            koousagcuqiyeogw:
            $this->saqqeqmcyyoeqici(sprintf("\101\x50\x49\40\x25\163\x20\x52\x65\x71\x75\x65\163\x74\40\105\x72\162\157\162\x3a\x20\47\x25\x73\x27\x20\151\163\x20\x6e\157\x74\x20\141\x20\x76\x61\154\x69\144\40\x64\157\155\x61\x69\x6e\56", strtoupper($qgciuiagkkguykgs), $mokawwccycoiqeka));
            goto yiuqimuyesqegyym;
            gyuwokmaygmksmow:
            giugammuqoewuoyc:
            goto keakqecogkuocqcw;
            gmowaimiewisgwam:
            $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($mokawwccycoiqeka, $qiouiwasaauyaaue);
            goto gyuwokmaygmksmow;
            cceeiumiqwqcumwm:
            $mokawwccycoiqeka = $xeciwimgioieayek;
            goto yikkososcyoeiccm;
            aowogueuuaoissso:
            goto yqsamggueqgeoscy;
            goto wgecgiiowkogkymc;
            kkkaqoyswqieiwki:
            if (!$mokawwccycoiqeka) {
                goto simyiqmsauwogeke;
            }
            goto sygeyoyqkigmaqcy;
            sygeyoyqkigmaqcy:
            $mokawwccycoiqeka = "{$mokawwccycoiqeka}{$xeciwimgioieayek}";
            goto kuiqqcsmccogwkii;
            kwsiqmqimiymeoog:
            $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue);
            goto ewgqmcceqiquyyee;
            wgecgiiowkogkymc:
            gcoiayyaeggagsam:
            goto cceeiumiqwqcumwm;
            keakqecogkuocqcw:
        } catch (ClientException $wgaoewqkwgomoaai) {
            
            $keccaugmemegoimu = $wgaoewqkwgomoaai->getResponse();
            $this->saqqeqmcyyoeqici(sprintf("\x41\120\111\40\45\x73\40\122\145\161\x75\x65\163\x74\x20\x45\x72\x72\157\162\72\40{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}", strtoupper($qgciuiagkkguykgs)));
        }
        goto csesgauismawagku;
        csesgauismawagku:
        return $keccaugmemegoimu;
        goto yecgscseggkuesec;
        yecgscseggkuesec:
    }
    
    public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\147\145\164");
    }
    
    public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\x6f\x73\164");
    }
    
    public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x70\141\x74\x63\150");
    }
    
    public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\144\145\154\x65\x74\x65");
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto awyemswwoieewoqa;
        cieeesmkiaakmeok:
        switch ($this->mcacmccgmkkouuqg()) {
            case "\x61\160\x70\154\151\143\x61\164\151\x6f\156\x2f\x6a\x73\157\x6e":
                $sogksuscggsicmac = json_decode($sogksuscggsicmac, true);
                goto cuiyioeewqwsiqsw;
        }
        goto cweyguqiqaqusuao;
        cqmqmqimsiqekqeg:
        cuiyioeewqwsiqsw:
        goto eqiymuecwacqwayg;
        ceeogawcoyikgsim:
        $sogksuscggsicmac = $keccaugmemegoimu->wesecsykkuakgyec();
        goto iyeggmisagiwawwk;
        eqiymuecwacqwayg:
        return $sogksuscggsicmac;
        goto iiasoeuismqwyycq;
        cweyguqiqaqusuao:
        igsmyoowcmiwakua:
        goto cqmqmqimsiqekqeg;
        iyeggmisagiwawwk:
        uucieweckoqqsoks:
        goto cieeesmkiaakmeok;
        awyemswwoieewoqa:
        $sogksuscggsicmac = null;
        goto quygmuqewkgyecqo;
        quygmuqewkgyecqo:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto uucieweckoqqsoks;
        }
        goto ceeogawcoyikgsim;
        iiasoeuismqwyycq:
    }
    
    public function occymigcemkqucuw(?ResponseInterface $keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = self::MESSAGE) : bool
    {
        goto euisiqqsgwmegmem;
        awoceaocmuugoawi:
        mugaweuuggguycsy:
        goto qcigiiqacgoiemqa;
        aiomowcyeiymassu:
        cyqekysgyeycmuuq:
        goto rsgiiamwiogywmos;
        ssiweiyoyasksgms:
        goto uayauukwosacweis;
        goto aiomowcyeiymassu;
        rsgiiamwiogywmos:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto ecukycksiqeeyuoa;
        qcigiiqacgoiemqa:
        $iswcokucwmiosiaq = $keccaugmemegoimu;
        goto mucycmsamuamwakw;
        aoqykwgyygqwsmoc:
        $iswcokucwmiosiaq .= __("\122\145\163\x70\157\x6e\x73\145\x20\151\163\40\156\x6f\x74\40\166\141\154\x69\144", PR__CMN__FOUNDATION);
        goto eggsakwewuussuwc;
        euisiqqsgwmegmem:
        $ksaameoqigiaoigg = false;
        goto soqgimommckkgiiw;
        gqymkgqmgmqkmuus:
        if (is_string($keccaugmemegoimu)) {
            goto mugaweuuggguycsy;
        }
        goto aoqykwgyygqwsmoc;
        eggsakwewuussuwc:
        goto uickqaioaugyucug;
        goto awoceaocmuugoawi;
        ckayiusouiaqkgsa:
        uayauukwosacweis:
        goto wesuaykwwuyeeqkk;
        soqgimommckkgiiw:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto uyycwsqcouisceqi;
        }
        goto uumcaooaockeeusm;
        ecukycksiqeeyuoa:
        $smgooosyoeqwcaeg = json_decode($keccaugmemegoimu->wesecsykkuakgyec()->sigciooygkcccyko());
        goto ukwusskgsgkacmsa;
        wesuaykwwuyeeqkk:
        goto sasqkeaucymqqyes;
        goto csykccgkakqmgock;
        ouqimcasmucqeyyo:
        $ksaameoqigiaoigg = true;
        goto ssiweiyoyasksgms;
        ukwusskgsgkacmsa:
        switch ($keccaugmemegoimu->wkaoyeoamyiacyeg()) {
            case 400:
            case 403:
                goto kkyqusekqcagwmcm;
                kkyqusekqcagwmcm:
                if (!$smgooosyoeqwcaeg) {
                    goto ccacgswmaksmoayw;
                }
                goto okgcmigwaqququoo;
                uisaaeagyuouaass:
                wmseuigaskyekaqg:
                goto wiaeawiisoyoiwma;
                mgiqqociouigaeqm:
                ccacgswmaksmoayw:
                goto kiwsmkmwywyyyqiy;
                kiwsmkmwywyyyqiy:
                if ($iswcokucwmiosiaq) {
                    goto wmseuigaskyekaqg;
                }
                goto egoewiuwaumcygqe;
                jscmuqkkguwewisq:
                $icwicymcioeyeyek = [self::CODE => ManipulateArray::get($smgooosyoeqwcaeg, self::CODE), self::STATUS => $keccaugmemegoimu->wkaoyeoamyiacyeg()];
                goto mgiqqociouigaeqm;
                wiaeawiisoyoiwma:
                goto mogaqucuwugmgcki;
                goto cgmoiuuiqqeousac;
                okgcmigwaqququoo:
                $iswcokucwmiosiaq = ManipulateArray::get($smgooosyoeqwcaeg, $qeweemoqwwsoumeg);
                goto jscmuqkkguwewisq;
                egoewiuwaumcygqe:
                $iswcokucwmiosiaq = $kuukgsmqkagwaciu;
                goto uisaaeagyuouaass;
                cgmoiuuiqqeousac:
            default:
                $iswcokucwmiosiaq = sprintf("\45\x73\x3a\x20\45\163", __("\x43\157\156\x6e\145\143\164\151\157\156\x20\105\162\162\x6f\x72", PR__CMN__FOUNDATION), $kuukgsmqkagwaciu);
                goto mogaqucuwugmgcki;
        }
        goto owmgcmumcuqawiik;
        wqgmscukuimomwau:
        return $ksaameoqigiaoigg;
        goto gumoiomiwcueoaim;
        mucycmsamuamwakw:
        uickqaioaugyucug:
        goto umosyeioascwoyww;
        ocqsukugmwakoeka:
        mogaqucuwugmgcki:
        goto ckayiusouiaqkgsa;
        csykccgkakqmgock:
        uyycwsqcouisceqi:
        goto gqymkgqmgmqkmuus;
        owmgcmumcuqawiik:
        qswkcweqkgcgsqsc:
        goto ocqsukugmwakoeka;
        umosyeioascwoyww:
        sasqkeaucymqqyes:
        goto wqgmscukuimomwau;
        uumcaooaockeeusm:
        if ($keccaugmemegoimu->wkaoyeoamyiacyeg() !== 200) {
            goto cyqekysgyeycmuuq;
        }
        goto ouqimcasmucqeyyo;
        gumoiomiwcueoaim:
    }
    
    public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee = '', $csowmwgiiyueuius = self::SUCCESS, $aqogmkcqyeosckkm = self::ERRORS) : bool
    {
        goto okaewmiweigkcmye;
        kisikuaqoaeayiiq:
        eamcmmswicuegaso:
        goto eymwskwgmiaigcwo;
        aoqgkyoegqssakuq:
        if (is_array($ueeagokqmgisgauy)) {
            goto jkumcawosiyygaey;
        }
        goto gaqyckqesooysusy;
        yuiyqaywukauayoe:
        qiqgekyeeqokiaai:
        goto ssccmsacioyiqkgw;
        mqamcimuisqakyym:
        socgmqisawsmgkyi:
        goto wmswiyimwcsmqgew;
        ekmyaiqggooyuciu:
        $wumguikkgaigkoee .= $ueeagokqmgisgauy;
        goto mqamcimuisqakyym;
        wueqcsuguccioeyo:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, $aqogmkcqyeosckkm, []);
        goto aoqgkyoegqssakuq;
        okaewmiweigkcmye:
        $eisqsskqimiigkay = true;
        goto mqocmwqcoggwmiag;
        eymwskwgmiaigcwo:
        $eisqsskqimiigkay = false;
        goto yuiyqaywukauayoe;
        qmockiskiuyoekug:
        foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) {
            $wumguikkgaigkoee[] = sprintf("\x25\x73\x20\50\45\x73\x3a\40\x25\x73\51", ManipulateArray::get($iswcokucwmiosiaq, "\155\x65\163\x73\141\147\x65"), __("\x45\x72\x72\x6f\162\40\103\x6f\144\145", PR__CMN__FOUNDATION), ManipulateArray::get($iswcokucwmiosiaq, "\x63\x6f\x64\145"));
            wugieaemocyyeaos:
        }
        goto wckmescqueucsasq;
        giiycggyqyaakmsw:
        jkumcawosiyygaey:
        goto qmockiskiuyoekug;
        ssccmsacioyiqkgw:
        return $eisqsskqimiigkay;
        goto yicgcsiewokauegy;
        wckmescqueucsasq:
        cskaysiukqwwaiok:
        goto kisikuaqoaeayiiq;
        gaqyckqesooysusy:
        if (!is_string($ueeagokqmgisgauy)) {
            goto socgmqisawsmgkyi;
        }
        goto ekmyaiqggooyuciu;
        mqocmwqcoggwmiag:
        if (ManipulateArray::get($sogksuscggsicmac, $csowmwgiiyueuius)) {
            goto qiqgekyeeqokiaai;
        }
        goto wueqcsuguccioeyo;
        wmswiyimwcsmqgew:
        goto eamcmmswicuegaso;
        goto giiycggyqyaakmsw;
        yicgcsiewokauegy:
    }
}

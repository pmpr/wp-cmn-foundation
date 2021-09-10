<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    const AUTHORIZATION = "\101\x75\x74\150\x6f\x72\151\172\x61\x74\151\x6f\x6e";
    const CONTENT_TYPE_KEY = "\x43\x6f\156\164\145\156\x74\55\124\x79\x70\x65";
    const APPLICATION_JSON_KEY = "\x61\x70\160\154\151\143\x61\164\x69\x6f\x6e\57\152\163\x6f\156";
    const HTML_ACCEPT = "\x74\145\x78\164\57\x68\x74\x6d\x6c\x2c\x61\x70\x70\154\151\x63\x61\164\x69\157\x6e\x2f\170\x68\x74\x6d\x6c\x2b\170\155\154\54\141\160\160\x6c\151\x63\141\164\x69\157\156\57\x78\x6d\154\73\161\x3d\60\56\71\54" . "\x69\155\x61\x67\x65\57\x77\145\142\160\x2c\x69\155\x61\147\x65\57\x61\x70\156\147\x2c\x2a\x2f\x2a\73\x71\75\60\56\70\54\x61\160\x70\x6c\x69\143\141\164\x69\x6f\156\57\x73\x69\147\156\x65\144\x2d\x65\170\x63\150\x61\x6e\147\x65\x3b\x76\x3d\142\63";
    const BROWSER_USER_AGENT = "\x4d\157\x7a\151\x6c\x6c\141\x2f\65\x2e\60\x20\x28\x4c\151\156\165\170\73\x20\x41\x6e\x64\x72\x6f\x69\x64\40\x37\x2e\x30\x3b\x20\x4d\157\x74\x6f\40\107\x20\x28\64\51\51\40\x41\x70\160\154\145\127\x65\x62\113\x69\x74\x2f\65\x33\67\56\63\x36\x20" . "\50\113\x48\124\x4d\114\54\40\154\151\x6b\x65\x20\x47\x65\143\153\157\x29\40\103\x68\x72\157\x6d\x65\x2f\70\x34\56\60\x2e\x34\61\64\63\x2e\67\40\x4d\157\142\151\x6c\145\x20\123\x61\x66\141\162\151\x2f\x35\63\67\56\63\66\40\103\x68\x72\x6f\155\145\55\114\151\x67\150\164\x68\x6f\165\163\145";
    
    protected array $options = [];
    
    protected array $queries = [];
    
    protected ?string $domain = null;
    
    protected ?string $accept = null;
    
    protected ?Client $client = null;
    
    public function __construct()
    {
        $this->client = new Client(["\x63\157\x6f\153\x69\145\163" => true]);
        parent::__construct();
    }
    
    public function wmciwsucuuyumkes() : ?Client
    {
        return $this->client;
    }
    
    public function wemyikwikgwqwuoc()
    {
        
        return $this->wmciwsucuuyumkes()->getConfig("\143\x6f\x6f\x6b\x69\x65\x73");
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
        goto csesgauismawagku;
        cuiyioeewqwsiqsw:
        return $this->accept;
        goto igsmyoowcmiwakua;
        csesgauismawagku:
        if ($this->accept) {
            goto eoyaywigcimwcssu;
        }
        goto yecgscseggkuesec;
        yecgscseggkuesec:
        $this->accept = "\x61\160\x70\x6c\151\143\141\x74\151\x6f\156\x2f\x6a\x73\x6f\x6e";
        goto uucieweckoqqsoks;
        uucieweckoqqsoks:
        eoyaywigcimwcssu:
        goto cuiyioeewqwsiqsw;
        igsmyoowcmiwakua:
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
        return $this->kesomeowemmyygey("\x68\x65\x61\144\x65\162\163", [self::AUTHORIZATION => "\102\x65\141\x72\145\162\x20{$mgegoogckgsumooq}"]);
    }
    
    public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array
    {
        goto iyeggmisagiwawwk;
        eqiymuecwacqwayg:
        awyemswwoieewoqa:
        goto iiasoeuismqwyycq;
        cieeesmkiaakmeok:
        if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) {
            goto quygmuqewkgyecqo;
        }
        goto cweyguqiqaqusuao;
        mogaqucuwugmgcki:
        ceeogawcoyikgsim:
        goto qswkcweqkgcgsqsc;
        iiasoeuismqwyycq:
        goto ceeogawcoyikgsim;
        goto mugaweuuggguycsy;
        cqmqmqimsiqekqeg:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie);
        goto eqiymuecwacqwayg;
        iyeggmisagiwawwk:
        $igqsaukqcqscimok = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
        goto cieeesmkiaakmeok;
        mugaweuuggguycsy:
        quygmuqewkgyecqo:
        goto uickqaioaugyucug;
        uickqaioaugyucug:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto mogaqucuwugmgcki;
        cweyguqiqaqusuao:
        if (!is_array($igqsaukqcqscimok)) {
            goto awyemswwoieewoqa;
        }
        goto cqmqmqimsiqekqeg;
        qswkcweqkgcgsqsc:
        return $uomewyckeuqoqocu;
        goto ccacgswmaksmoayw;
        ccacgswmaksmoayw:
    }
    
    public function ksqekagyyameaceq() : array
    {
        return $this->queries;
    }
    
    public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self
    {
        goto kkyqusekqcagwmcm;
        jscmuqkkguwewisq:
        $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom);
        goto mgiqqociouigaeqm;
        kiwsmkmwywyyyqiy:
        return $this;
        goto egoewiuwaumcygqe;
        okgcmigwaqququoo:
        if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) {
            goto wmseuigaskyekaqg;
        }
        goto jscmuqkkguwewisq;
        mgiqqociouigaeqm:
        wmseuigaskyekaqg:
        goto kiwsmkmwywyyyqiy;
        kkyqusekqcagwmcm:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto okgcmigwaqququoo;
        egoewiuwaumcygqe:
    }
    
    public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self
    {
        goto cgmoiuuiqqeousac;
        cgmoiuuiqqeousac:
        foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) {
            $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom);
            wiaeawiisoyoiwma:
        }
        goto cyqekysgyeycmuuq;
        cyqekysgyeycmuuq:
        uisaaeagyuouaass:
        goto uayauukwosacweis;
        uayauukwosacweis:
        return $this;
        goto uyycwsqcouisceqi;
        uyycwsqcouisceqi:
    }
    
    private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array
    {
        goto euisiqqsgwmegmem;
        uumcaooaockeeusm:
        $qiouiwasaauyaaue[RequestOptions::QUERY] = preg_replace("\x2f\x25\x35\x42\50\77\x3a\133\60\55\x39\135\x7c\133\61\x2d\71\x5d\133\60\x2d\71\135\53\x29\45\65\104\x3d\57", "\x3d", http_build_query($uoomaookgsyciacm));
        goto ouqimcasmucqeyyo;
        soqgimommckkgiiw:
        if (!$uoomaookgsyciacm) {
            goto sasqkeaucymqqyes;
        }
        goto uumcaooaockeeusm;
        ouqimcasmucqeyyo:
        sasqkeaucymqqyes:
        goto ssiweiyoyasksgms;
        ssiweiyoyasksgms:
        return $qiouiwasaauyaaue;
        goto aiomowcyeiymassu;
        euisiqqsgwmegmem:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto soqgimommckkgiiw;
        aiomowcyeiymassu:
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\x65\x74") : ?ResponseInterface
    {
        goto wueqcsuguccioeyo;
        gaqyckqesooysusy:
        return $keccaugmemegoimu;
        goto ekmyaiqggooyuciu;
        wueqcsuguccioeyo:
        $keccaugmemegoimu = null;
        goto aoqgkyoegqssakuq;
        aoqgkyoegqssakuq:
        try {
            goto ckayiusouiaqkgsa;
            qcigiiqacgoiemqa:
            $mokawwccycoiqeka = "{$mokawwccycoiqeka}{$xeciwimgioieayek}";
            goto mucycmsamuamwakw;
            gqymkgqmgmqkmuus:
            $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue);
            goto aoqykwgyygqwsmoc;
            aoqykwgyygqwsmoc:
            if (ManipulateValidation::wmcwegoisyeeosqu($xeciwimgioieayek)) {
                goto ecukycksiqeeyuoa;
            }
            goto eggsakwewuussuwc;
            cskaysiukqwwaiok:
            ukwusskgsgkacmsa:
            goto wugieaemocyyeaos;
            umosyeioascwoyww:
            goto ukwusskgsgkacmsa;
            goto wqgmscukuimomwau;
            wesuaykwwuyeeqkk:
            $this->kesomeowemmyygey("\x68\145\141\x64\x65\162", ["\x61\143\x63\145\x70\164" => $this->mcacmccgmkkouuqg()]);
            goto csykccgkakqmgock;
            okaewmiweigkcmye:
            ocqsukugmwakoeka:
            goto mqocmwqcoggwmiag;
            eamcmmswicuegaso:
            owmgcmumcuqawiik:
            goto qiqgekyeeqokiaai;
            wqgmscukuimomwau:
            ecukycksiqeeyuoa:
            goto gumoiomiwcueoaim;
            gumoiomiwcueoaim:
            $mokawwccycoiqeka = $xeciwimgioieayek;
            goto cskaysiukqwwaiok;
            eggsakwewuussuwc:
            $mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua());
            goto awoceaocmuugoawi;
            qiqgekyeeqokiaai:
            $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($mokawwccycoiqeka, $qiouiwasaauyaaue);
            goto okaewmiweigkcmye;
            csykccgkakqmgock:
            $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue);
            goto gqymkgqmgmqkmuus;
            awoceaocmuugoawi:
            if (!$mokawwccycoiqeka) {
                goto rsgiiamwiogywmos;
            }
            goto qcigiiqacgoiemqa;
            wugieaemocyyeaos:
            if (ManipulateValidation::wmcwegoisyeeosqu($mokawwccycoiqeka)) {
                goto owmgcmumcuqawiik;
            }
            goto socgmqisawsmgkyi;
            socgmqisawsmgkyi:
            $this->saqqeqmcyyoeqici(sprintf("\101\x50\x49\x20\x25\163\x20\122\145\x71\x75\x65\163\164\40\105\x72\162\157\162\72\x20\47\45\x73\x27\40\151\x73\x20\156\x6f\164\40\141\x20\x76\141\154\151\144\x20\x64\x6f\x6d\x61\x69\156\x2e", strtoupper($qgciuiagkkguykgs), $mokawwccycoiqeka));
            goto jkumcawosiyygaey;
            ckayiusouiaqkgsa:
            $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            goto wesuaykwwuyeeqkk;
            mucycmsamuamwakw:
            rsgiiamwiogywmos:
            goto umosyeioascwoyww;
            jkumcawosiyygaey:
            goto ocqsukugmwakoeka;
            goto eamcmmswicuegaso;
            mqocmwqcoggwmiag:
        } catch (ClientException $wgaoewqkwgomoaai) {
            
            $keccaugmemegoimu = $wgaoewqkwgomoaai->getResponse();
            $this->saqqeqmcyyoeqici(sprintf("\101\x50\x49\x20\x25\163\x20\122\145\161\165\145\163\x74\40\105\x72\162\157\x72\72\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}", strtoupper($qgciuiagkkguykgs)));
        }
        goto gaqyckqesooysusy;
        ekmyaiqggooyuciu:
    }
    
    public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x67\145\x74");
    }
    
    public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\x6f\x73\x74");
    }
    
    public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\141\164\x63\150");
    }
    
    public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\144\x65\154\x65\x74\x65");
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto qmockiskiuyoekug;
        yicgcsiewokauegy:
        wmswiyimwcsmqgew:
        goto uowgmiscaeysqomk;
        eymwskwgmiaigcwo:
        mqamcimuisqakyym:
        goto yuiyqaywukauayoe;
        uowgmiscaeysqomk:
        return $sogksuscggsicmac;
        goto aikiqgkqagcwgqgw;
        ssccmsacioyiqkgw:
        giiycggyqyaakmsw:
        goto yicgcsiewokauegy;
        wckmescqueucsasq:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto mqamcimuisqakyym;
        }
        goto kisikuaqoaeayiiq;
        kisikuaqoaeayiiq:
        $sogksuscggsicmac = $keccaugmemegoimu->wesecsykkuakgyec();
        goto eymwskwgmiaigcwo;
        qmockiskiuyoekug:
        $sogksuscggsicmac = null;
        goto wckmescqueucsasq;
        yuiyqaywukauayoe:
        switch ($this->mcacmccgmkkouuqg()) {
            case "\141\x70\x70\x6c\x69\143\141\x74\x69\157\x6e\57\x6a\x73\157\x6e":
                $sogksuscggsicmac = json_decode($sogksuscggsicmac, true);
                goto wmswiyimwcsmqgew;
        }
        goto ssccmsacioyiqkgw;
        aikiqgkqagcwgqgw:
    }
    
    public function occymigcemkqucuw(?ResponseInterface $keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = self::MESSAGE) : bool
    {
        goto gqksqioaokkkeicw;
        iyuycauougyasiiq:
        $iswcokucwmiosiaq = $keccaugmemegoimu;
        goto giaamqkcsgokqgqm;
        gqksqioaokkkeicw:
        $ksaameoqigiaoigg = false;
        goto imeuaeoyequyquyc;
        iwwsukcmssaaeqoq:
        eoeioguggcgccggg:
        goto iyuycauougyasiiq;
        cocuuoguowasocye:
        cuiumaykueaccekc:
        goto qakcaquyeuguwues;
        qakcaquyeuguwues:
        if (is_string($keccaugmemegoimu)) {
            goto eoeioguggcgccggg;
        }
        goto owswwyqyusisgwme;
        kaucouscgsawawys:
        wgogoicgkassusme:
        goto ucsssaiqcemkkmkc;
        giaamqkcsgokqgqm:
        amwcceeeewkecsmq:
        goto kqieuqgsocqgaesw;
        kwecemikiouwuiwi:
        $ksaameoqigiaoigg = true;
        goto mqeacwmeqkoqmqko;
        owswwyqyusisgwme:
        $iswcokucwmiosiaq .= __("\x52\145\163\160\157\156\x73\x65\x20\x69\x73\x20\156\157\x74\x20\x76\141\154\x69\144", PR__CMN__FOUNDATION);
        goto myggyowooawikgoi;
        myggyowooawikgoi:
        goto amwcceeeewkecsmq;
        goto iwwsukcmssaaeqoq;
        gecymmgumgauakae:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto ykoogomowmiquuem;
        qaikucmemsqmosyg:
        switch ($keccaugmemegoimu->wkaoyeoamyiacyeg()) {
            case 400:
            case 403:
                goto ywmysmegwksecsuy;
                ygkqsaeqygyqegym:
                $iswcokucwmiosiaq = $kuukgsmqkagwaciu;
                goto kuqeasegkegcgakq;
                kuqeasegkegcgakq:
                mwwggwmssgeaaagk:
                goto usyaigaqkosuymko;
                cqueukswyygmssqa:
                giqcweisosusycmy:
                goto ekakmkqymqsiccum;
                ekakmkqymqsiccum:
                if ($iswcokucwmiosiaq) {
                    goto mwwggwmssgeaaagk;
                }
                goto ygkqsaeqygyqegym;
                usyaigaqkosuymko:
                goto wgogoicgkassusme;
                goto qmqkqeuwmyysogke;
                gscmiuqosuimoigq:
                $iswcokucwmiosiaq = ManipulateArray::get($smgooosyoeqwcaeg, $qeweemoqwwsoumeg);
                goto gyiywuemaogacsoq;
                ywmysmegwksecsuy:
                if (!$smgooosyoeqwcaeg) {
                    goto giqcweisosusycmy;
                }
                goto gscmiuqosuimoigq;
                gyiywuemaogacsoq:
                $icwicymcioeyeyek = [self::CODE => ManipulateArray::get($smgooosyoeqwcaeg, self::CODE), self::STATUS => $keccaugmemegoimu->wkaoyeoamyiacyeg()];
                goto cqueukswyygmssqa;
                qmqkqeuwmyysogke:
            default:
                $iswcokucwmiosiaq = sprintf("\x25\163\x3a\x20\x25\163", __("\103\157\x6e\x6e\x65\x63\x74\x69\x6f\x6e\x20\x45\x72\x72\157\162", PR__CMN__FOUNDATION), $kuukgsmqkagwaciu);
                goto wgogoicgkassusme;
        }
        goto semmqugkwwqweawm;
        ucsssaiqcemkkmkc:
        omqgyiwasikuqsqs:
        goto yuoiuagyeoygsycm;
        kqieuqgsocqgaesw:
        acqukmwaqqocyway:
        goto kksaeyuekaaessaa;
        ymmgouuewwaieawy:
        if ($keccaugmemegoimu->wkaoyeoamyiacyeg() !== 200) {
            goto cccgaqykomecsysa;
        }
        goto kwecemikiouwuiwi;
        ykoogomowmiquuem:
        $smgooosyoeqwcaeg = json_decode($keccaugmemegoimu->wesecsykkuakgyec()->sigciooygkcccyko());
        goto qaikucmemsqmosyg;
        tkeoceysmquieskw:
        cccgaqykomecsysa:
        goto gecymmgumgauakae;
        yuoiuagyeoygsycm:
        goto acqukmwaqqocyway;
        goto cocuuoguowasocye;
        semmqugkwwqweawm:
        sekwgiesmgamusyc:
        goto kaucouscgsawawys;
        kksaeyuekaaessaa:
        return $ksaameoqigiaoigg;
        goto yagmeysqkyagckyg;
        imeuaeoyequyquyc:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto cuiumaykueaccekc;
        }
        goto ymmgouuewwaieawy;
        mqeacwmeqkoqmqko:
        goto omqgyiwasikuqsqs;
        goto tkeoceysmquieskw;
        yagmeysqkyagckyg:
    }
    
    public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee = '', $csowmwgiiyueuius = self::SUCCESS, $aqogmkcqyeosckkm = self::ERRORS) : bool
    {
        goto qmaeagoqeukouayc;
        yyoogmukueyocgeo:
        foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) {
            $wumguikkgaigkoee[] = sprintf("\45\163\40\50\45\163\x3a\40\x25\x73\x29", ManipulateArray::get($iswcokucwmiosiaq, "\155\x65\x73\163\x61\x67\x65"), __("\105\162\162\x6f\162\x20\x43\x6f\144\x65", PR__CMN__FOUNDATION), ManipulateArray::get($iswcokucwmiosiaq, "\143\x6f\x64\145"));
            kkawsaququwoqkga:
        }
        goto iougwygwasqmesuw;
        iougwygwasqmesuw:
        sowgacwmiukqyequ:
        goto aiqykgkokmqqocwg;
        igmogosqsaiksoya:
        wuiomwwygyismoke:
        goto wigyoouuiyaysasc;
        awyakmgqyaksucso:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, $aqogmkcqyeosckkm, []);
        goto xkqgegowecakaogy;
        mkkwcsmomimsckmo:
        iaagogeaaawgsacg:
        goto yyoogmukueyocgeo;
        wigyoouuiyaysasc:
        return $eisqsskqimiigkay;
        goto ywwmasggauwqgiys;
        soigaomwwmwqqsqe:
        if (!is_string($ueeagokqmgisgauy)) {
            goto kaeeaeaqemqkimki;
        }
        goto gkeegeyqgwcqsaqi;
        aiqykgkokmqqocwg:
        uiyuqwmuyicmukgs:
        goto kwgwaowiuagqockc;
        qmaeagoqeukouayc:
        $eisqsskqimiigkay = true;
        goto giwoykisgksecowe;
        gkeegeyqgwcqsaqi:
        $wumguikkgaigkoee .= $ueeagokqmgisgauy;
        goto ukiquuoaawuemuwm;
        ukiquuoaawuemuwm:
        kaeeaeaqemqkimki:
        goto miimeciguswkagcm;
        xkqgegowecakaogy:
        if (is_array($ueeagokqmgisgauy)) {
            goto iaagogeaaawgsacg;
        }
        goto soigaomwwmwqqsqe;
        giwoykisgksecowe:
        if (ManipulateArray::get($sogksuscggsicmac, $csowmwgiiyueuius)) {
            goto wuiomwwygyismoke;
        }
        goto awyakmgqyaksucso;
        miimeciguswkagcm:
        goto uiyuqwmuyicmukgs;
        goto mkkwcsmomimsckmo;
        kwgwaowiuagqockc:
        $eisqsskqimiigkay = false;
        goto igmogosqsaiksoya;
        ywwmasggauwqgiys:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const AUTHORIZATION = "\101\x75\164\150\157\162\151\172\141\164\151\x6f\156";
    const CONTENT_TYPE_KEY = "\x43\157\x6e\164\145\156\164\x2d\124\171\160\145";
    const APPLICATION_JSON_KEY = "\141\x70\x70\x6c\x69\143\141\x74\x69\x6f\x6e\57\152\163\x6f\x6e";
    const HTML_ACCEPT = "\164\x65\170\164\x2f\x68\x74\155\154\54\x61\x70\160\x6c\x69\143\141\x74\151\157\x6e\57\170\x68\164\155\154\x2b\170\155\x6c\x2c\x61\160\160\154\x69\x63\141\x74\151\157\156\57\x78\x6d\154\x3b\161\x3d\60\56\71\54" . "\151\155\x61\147\145\57\x77\x65\x62\x70\x2c\151\x6d\x61\147\145\57\x61\160\156\147\x2c\52\57\52\x3b\161\75\x30\x2e\x38\54\141\160\x70\154\151\143\141\x74\x69\x6f\x6e\x2f\163\151\147\x6e\x65\x64\55\145\x78\x63\x68\x61\156\147\145\x3b\x76\x3d\x62\63";
    const BROWSER_USER_AGENT = "\x4d\x6f\172\151\154\154\141\57\65\56\x30\x20\x28\x4c\151\x6e\165\x78\x3b\x20\x41\x6e\144\x72\x6f\x69\x64\40\67\x2e\60\73\x20\115\x6f\164\157\x20\107\40\x28\x34\51\x29\40\101\x70\x70\x6c\x65\127\145\142\x4b\x69\x74\x2f\65\63\67\x2e\63\66\x20" . "\50\113\110\124\x4d\x4c\x2c\40\154\x69\153\x65\40\x47\x65\143\x6b\157\51\x20\x43\150\x72\x6f\x6d\x65\x2f\70\64\56\60\56\x34\61\64\63\56\67\40\x4d\x6f\x62\x69\x6c\x65\x20\123\141\146\141\162\x69\x2f\x35\63\x37\x2e\x33\x36\x20\103\x68\x72\x6f\x6d\145\55\x4c\x69\x67\150\x74\x68\x6f\165\163\145";
    
    protected array $options = [];
    
    protected array $queries = [];
    
    protected ?string $domain = null;
    
    protected ?string $accept = null;
    
    protected ?Client $client = null;
    
    public function __construct()
    {
        $this->client = new Client(["\143\x6f\157\x6b\x69\145\x73" => true]);
        parent::__construct();
    }
    
    public function wmciwsucuuyumkes() : ?Client
    {
        return $this->client;
    }
    
    public function wemyikwikgwqwuoc()
    {
        
        return $this->wmciwsucuuyumkes()->getConfig("\x63\x6f\157\153\x69\x65\x73");
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
        goto eoyaywigcimwcssu;
        yecgscseggkuesec:
        cgcmcsgeeoecumwq:
        goto uucieweckoqqsoks;
        csesgauismawagku:
        $this->accept = "\x61\x70\160\154\151\143\x61\164\151\x6f\x6e\57\152\163\157\x6e";
        goto yecgscseggkuesec;
        uucieweckoqqsoks:
        return $this->accept;
        goto cuiyioeewqwsiqsw;
        eoyaywigcimwcssu:
        if ($this->accept) {
            goto cgcmcsgeeoecumwq;
        }
        goto csesgauismawagku;
        cuiyioeewqwsiqsw:
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
        return $this->kesomeowemmyygey("\150\145\x61\144\145\162\x73", [self::AUTHORIZATION => "\x42\x65\x61\162\x65\x72\40{$mgegoogckgsumooq}"]);
    }
    
    public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array
    {
        goto ceeogawcoyikgsim;
        cieeesmkiaakmeok:
        if (!is_array($igqsaukqcqscimok)) {
            goto igsmyoowcmiwakua;
        }
        goto cweyguqiqaqusuao;
        mugaweuuggguycsy:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto uickqaioaugyucug;
        cweyguqiqaqusuao:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie);
        goto cqmqmqimsiqekqeg;
        uickqaioaugyucug:
        quygmuqewkgyecqo:
        goto mogaqucuwugmgcki;
        mogaqucuwugmgcki:
        return $uomewyckeuqoqocu;
        goto qswkcweqkgcgsqsc;
        ceeogawcoyikgsim:
        $igqsaukqcqscimok = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
        goto iyeggmisagiwawwk;
        cqmqmqimsiqekqeg:
        igsmyoowcmiwakua:
        goto eqiymuecwacqwayg;
        iyeggmisagiwawwk:
        if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) {
            goto awyemswwoieewoqa;
        }
        goto cieeesmkiaakmeok;
        eqiymuecwacqwayg:
        goto quygmuqewkgyecqo;
        goto iiasoeuismqwyycq;
        iiasoeuismqwyycq:
        awyemswwoieewoqa:
        goto mugaweuuggguycsy;
        qswkcweqkgcgsqsc:
    }
    
    public function ksqekagyyameaceq() : array
    {
        return $this->queries;
    }
    
    public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self
    {
        goto wmseuigaskyekaqg;
        jscmuqkkguwewisq:
        ccacgswmaksmoayw:
        goto mgiqqociouigaeqm;
        mgiqqociouigaeqm:
        return $this;
        goto kiwsmkmwywyyyqiy;
        kkyqusekqcagwmcm:
        if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) {
            goto ccacgswmaksmoayw;
        }
        goto okgcmigwaqququoo;
        okgcmigwaqququoo:
        $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom);
        goto jscmuqkkguwewisq;
        wmseuigaskyekaqg:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto kkyqusekqcagwmcm;
        kiwsmkmwywyyyqiy:
    }
    
    public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self
    {
        goto wiaeawiisoyoiwma;
        cgmoiuuiqqeousac:
        egoewiuwaumcygqe:
        goto cyqekysgyeycmuuq;
        wiaeawiisoyoiwma:
        foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) {
            $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom);
            uisaaeagyuouaass:
        }
        goto cgmoiuuiqqeousac;
        cyqekysgyeycmuuq:
        return $this;
        goto uayauukwosacweis;
        uayauukwosacweis:
    }
    
    private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array
    {
        goto sasqkeaucymqqyes;
        soqgimommckkgiiw:
        $qiouiwasaauyaaue[RequestOptions::QUERY] = preg_replace("\57\x25\65\102\x28\x3f\72\x5b\x30\55\x39\x5d\174\x5b\x31\55\71\x5d\x5b\x30\x2d\x39\x5d\x2b\51\x25\65\104\x3d\x2f", "\75", http_build_query($uoomaookgsyciacm));
        goto uumcaooaockeeusm;
        ouqimcasmucqeyyo:
        return $qiouiwasaauyaaue;
        goto ssiweiyoyasksgms;
        uumcaooaockeeusm:
        uyycwsqcouisceqi:
        goto ouqimcasmucqeyyo;
        sasqkeaucymqqyes:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto euisiqqsgwmegmem;
        euisiqqsgwmegmem:
        if (!$uoomaookgsyciacm) {
            goto uyycwsqcouisceqi;
        }
        goto soqgimommckkgiiw;
        ssiweiyoyasksgms:
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\147\145\164") : ?ResponseInterface
    {
        goto mqocmwqcoggwmiag;
        aoqgkyoegqssakuq:
        return $keccaugmemegoimu;
        goto gaqyckqesooysusy;
        mqocmwqcoggwmiag:
        $keccaugmemegoimu = null;
        goto wueqcsuguccioeyo;
        wueqcsuguccioeyo:
        try {
            goto ocqsukugmwakoeka;
            wugieaemocyyeaos:
            $this->saqqeqmcyyoeqici(sprintf("\101\120\x49\40\x25\x73\40\122\x65\x71\165\145\163\164\40\x45\x72\x72\157\x72\x3a\40\47\45\x73\47\x20\x69\x73\x20\x6e\x6f\x74\x20\x61\40\x76\141\x6c\x69\144\40\x64\x6f\155\x61\151\156\56", strtoupper($qgciuiagkkguykgs), $mokawwccycoiqeka));
            goto socgmqisawsmgkyi;
            gqymkgqmgmqkmuus:
            if (ManipulateValidation::wmcwegoisyeeosqu($xeciwimgioieayek)) {
                goto rsgiiamwiogywmos;
            }
            goto aoqykwgyygqwsmoc;
            gumoiomiwcueoaim:
            ecukycksiqeeyuoa:
            goto cskaysiukqwwaiok;
            cskaysiukqwwaiok:
            if (ManipulateValidation::wmcwegoisyeeosqu($mokawwccycoiqeka)) {
                goto ukwusskgsgkacmsa;
            }
            goto wugieaemocyyeaos;
            csykccgkakqmgock:
            $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue);
            goto gqymkgqmgmqkmuus;
            qiqgekyeeqokiaai:
            owmgcmumcuqawiik:
            goto okaewmiweigkcmye;
            wesuaykwwuyeeqkk:
            $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue);
            goto csykccgkakqmgock;
            ocqsukugmwakoeka:
            $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            goto ckayiusouiaqkgsa;
            jkumcawosiyygaey:
            ukwusskgsgkacmsa:
            goto eamcmmswicuegaso;
            socgmqisawsmgkyi:
            goto owmgcmumcuqawiik;
            goto jkumcawosiyygaey;
            awoceaocmuugoawi:
            $mokawwccycoiqeka = "{$mokawwccycoiqeka}{$xeciwimgioieayek}";
            goto qcigiiqacgoiemqa;
            aoqykwgyygqwsmoc:
            $mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua());
            goto eggsakwewuussuwc;
            eamcmmswicuegaso:
            $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($mokawwccycoiqeka, $qiouiwasaauyaaue);
            goto qiqgekyeeqokiaai;
            mucycmsamuamwakw:
            goto ecukycksiqeeyuoa;
            goto umosyeioascwoyww;
            eggsakwewuussuwc:
            if (!$mokawwccycoiqeka) {
                goto aiomowcyeiymassu;
            }
            goto awoceaocmuugoawi;
            ckayiusouiaqkgsa:
            $this->kesomeowemmyygey("\x68\145\141\x64\145\x72", ["\x61\x63\143\x65\x70\x74" => $this->mcacmccgmkkouuqg()]);
            goto wesuaykwwuyeeqkk;
            wqgmscukuimomwau:
            $mokawwccycoiqeka = $xeciwimgioieayek;
            goto gumoiomiwcueoaim;
            umosyeioascwoyww:
            rsgiiamwiogywmos:
            goto wqgmscukuimomwau;
            qcigiiqacgoiemqa:
            aiomowcyeiymassu:
            goto mucycmsamuamwakw;
            okaewmiweigkcmye:
        } catch (ClientException $wgaoewqkwgomoaai) {
            
            $keccaugmemegoimu = $wgaoewqkwgomoaai->getResponse();
            $this->saqqeqmcyyoeqici(sprintf("\x41\x50\111\x20\45\x73\x20\x52\x65\x71\165\145\163\x74\40\x45\x72\162\x6f\162\72\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}", strtoupper($qgciuiagkkguykgs)));
        }
        goto aoqgkyoegqssakuq;
        gaqyckqesooysusy:
    }
    
    public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\147\145\x74");
    }
    
    public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x70\x6f\163\164");
    }
    
    public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x70\x61\164\143\x68");
    }
    
    public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\144\145\x6c\x65\x74\x65");
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto giiycggyqyaakmsw;
        qmockiskiuyoekug:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto ekmyaiqggooyuciu;
        }
        goto wckmescqueucsasq;
        giiycggyqyaakmsw:
        $sogksuscggsicmac = null;
        goto qmockiskiuyoekug;
        ssccmsacioyiqkgw:
        mqamcimuisqakyym:
        goto yicgcsiewokauegy;
        wckmescqueucsasq:
        $sogksuscggsicmac = $keccaugmemegoimu->wesecsykkuakgyec();
        goto kisikuaqoaeayiiq;
        yicgcsiewokauegy:
        return $sogksuscggsicmac;
        goto uowgmiscaeysqomk;
        yuiyqaywukauayoe:
        wmswiyimwcsmqgew:
        goto ssccmsacioyiqkgw;
        kisikuaqoaeayiiq:
        ekmyaiqggooyuciu:
        goto eymwskwgmiaigcwo;
        eymwskwgmiaigcwo:
        switch ($this->mcacmccgmkkouuqg()) {
            case "\141\160\x70\x6c\151\x63\x61\x74\x69\157\x6e\x2f\152\x73\157\156":
                $sogksuscggsicmac = json_decode($sogksuscggsicmac, true);
                goto mqamcimuisqakyym;
        }
        goto yuiyqaywukauayoe;
        uowgmiscaeysqomk:
    }
    
    public function occymigcemkqucuw(?ResponseInterface $keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = self::MESSAGE) : bool
    {
        goto acqukmwaqqocyway;
        semmqugkwwqweawm:
        amwcceeeewkecsmq:
        goto kaucouscgsawawys;
        cocuuoguowasocye:
        if (is_string($keccaugmemegoimu)) {
            goto aikiqgkqagcwgqgw;
        }
        goto qakcaquyeuguwues;
        tkeoceysmquieskw:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto gecymmgumgauakae;
        qakcaquyeuguwues:
        $iswcokucwmiosiaq .= __("\122\x65\x73\x70\x6f\x6e\x73\145\x20\x69\163\x20\x6e\157\164\40\166\x61\x6c\x69\x64", PR__CMN__FOUNDATION);
        goto owswwyqyusisgwme;
        giaamqkcsgokqgqm:
        cuiumaykueaccekc:
        goto kqieuqgsocqgaesw;
        gecymmgumgauakae:
        $smgooosyoeqwcaeg = json_decode($keccaugmemegoimu->wesecsykkuakgyec()->sigciooygkcccyko());
        goto ykoogomowmiquuem;
        gqksqioaokkkeicw:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto omqgyiwasikuqsqs;
        }
        goto imeuaeoyequyquyc;
        acqukmwaqqocyway:
        $ksaameoqigiaoigg = false;
        goto gqksqioaokkkeicw;
        kwecemikiouwuiwi:
        goto cccgaqykomecsysa;
        goto mqeacwmeqkoqmqko;
        ucsssaiqcemkkmkc:
        goto cuiumaykueaccekc;
        goto yuoiuagyeoygsycm;
        kaucouscgsawawys:
        cccgaqykomecsysa:
        goto ucsssaiqcemkkmkc;
        iwwsukcmssaaeqoq:
        $iswcokucwmiosiaq = $keccaugmemegoimu;
        goto iyuycauougyasiiq;
        yuoiuagyeoygsycm:
        omqgyiwasikuqsqs:
        goto cocuuoguowasocye;
        qaikucmemsqmosyg:
        wgogoicgkassusme:
        goto semmqugkwwqweawm;
        owswwyqyusisgwme:
        goto eoeioguggcgccggg;
        goto myggyowooawikgoi;
        ykoogomowmiquuem:
        switch ($keccaugmemegoimu->wkaoyeoamyiacyeg()) {
            case 400:
            case 403:
                goto mwwggwmssgeaaagk;
                gyiywuemaogacsoq:
                sekwgiesmgamusyc:
                goto cqueukswyygmssqa;
                cqueukswyygmssqa:
                if ($iswcokucwmiosiaq) {
                    goto giqcweisosusycmy;
                }
                goto ekakmkqymqsiccum;
                ygkqsaeqygyqegym:
                giqcweisosusycmy:
                goto kuqeasegkegcgakq;
                kuqeasegkegcgakq:
                goto amwcceeeewkecsmq;
                goto usyaigaqkosuymko;
                ekakmkqymqsiccum:
                $iswcokucwmiosiaq = $kuukgsmqkagwaciu;
                goto ygkqsaeqygyqegym;
                mwwggwmssgeaaagk:
                if (!$smgooosyoeqwcaeg) {
                    goto sekwgiesmgamusyc;
                }
                goto ywmysmegwksecsuy;
                gscmiuqosuimoigq:
                $icwicymcioeyeyek = [self::CODE => ManipulateArray::get($smgooosyoeqwcaeg, self::CODE), self::STATUS => $keccaugmemegoimu->wkaoyeoamyiacyeg()];
                goto gyiywuemaogacsoq;
                ywmysmegwksecsuy:
                $iswcokucwmiosiaq = ManipulateArray::get($smgooosyoeqwcaeg, $qeweemoqwwsoumeg);
                goto gscmiuqosuimoigq;
                usyaigaqkosuymko:
            default:
                $iswcokucwmiosiaq = sprintf("\x25\x73\x3a\x20\x25\163", __("\103\157\x6e\156\145\143\164\151\x6f\x6e\x20\x45\x72\162\x6f\162", PR__CMN__FOUNDATION), $kuukgsmqkagwaciu);
                goto amwcceeeewkecsmq;
        }
        goto qaikucmemsqmosyg;
        iyuycauougyasiiq:
        eoeioguggcgccggg:
        goto giaamqkcsgokqgqm;
        mqeacwmeqkoqmqko:
        qmqkqeuwmyysogke:
        goto tkeoceysmquieskw;
        imeuaeoyequyquyc:
        if ($keccaugmemegoimu->wkaoyeoamyiacyeg() !== 200) {
            goto qmqkqeuwmyysogke;
        }
        goto ymmgouuewwaieawy;
        myggyowooawikgoi:
        aikiqgkqagcwgqgw:
        goto iwwsukcmssaaeqoq;
        ymmgouuewwaieawy:
        $ksaameoqigiaoigg = true;
        goto kwecemikiouwuiwi;
        kqieuqgsocqgaesw:
        return $ksaameoqigiaoigg;
        goto kksaeyuekaaessaa;
        kksaeyuekaaessaa:
    }
    
    public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee = '', $csowmwgiiyueuius = self::SUCCESS, $aqogmkcqyeosckkm = self::ERRORS) : bool
    {
        goto wuiomwwygyismoke;
        igmogosqsaiksoya:
        return $eisqsskqimiigkay;
        goto wigyoouuiyaysasc;
        iougwygwasqmesuw:
        iaagogeaaawgsacg:
        goto aiqykgkokmqqocwg;
        xkqgegowecakaogy:
        if (!is_string($ueeagokqmgisgauy)) {
            goto kkawsaququwoqkga;
        }
        goto soigaomwwmwqqsqe;
        wuiomwwygyismoke:
        $eisqsskqimiigkay = true;
        goto qmaeagoqeukouayc;
        giwoykisgksecowe:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, $aqogmkcqyeosckkm, []);
        goto awyakmgqyaksucso;
        awyakmgqyaksucso:
        if (is_array($ueeagokqmgisgauy)) {
            goto kaeeaeaqemqkimki;
        }
        goto xkqgegowecakaogy;
        soigaomwwmwqqsqe:
        $wumguikkgaigkoee .= $ueeagokqmgisgauy;
        goto gkeegeyqgwcqsaqi;
        gkeegeyqgwcqsaqi:
        kkawsaququwoqkga:
        goto ukiquuoaawuemuwm;
        qmaeagoqeukouayc:
        if (ManipulateArray::get($sogksuscggsicmac, $csowmwgiiyueuius)) {
            goto uiyuqwmuyicmukgs;
        }
        goto giwoykisgksecowe;
        aiqykgkokmqqocwg:
        $eisqsskqimiigkay = false;
        goto kwgwaowiuagqockc;
        kwgwaowiuagqockc:
        uiyuqwmuyicmukgs:
        goto igmogosqsaiksoya;
        mkkwcsmomimsckmo:
        foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) {
            $wumguikkgaigkoee[] = sprintf("\45\163\40\50\x25\163\x3a\40\x25\163\x29", ManipulateArray::get($iswcokucwmiosiaq, "\155\145\x73\x73\x61\x67\145"), __("\105\162\x72\157\162\x20\103\x6f\144\145", PR__CMN__FOUNDATION), ManipulateArray::get($iswcokucwmiosiaq, "\x63\157\144\145"));
            sowgacwmiukqyequ:
        }
        goto yyoogmukueyocgeo;
        miimeciguswkagcm:
        kaeeaeaqemqkimki:
        goto mkkwcsmomimsckmo;
        ukiquuoaawuemuwm:
        goto iaagogeaaawgsacg;
        goto miimeciguswkagcm;
        yyoogmukueyocgeo:
        yagmeysqkyagckyg:
        goto iougwygwasqmesuw;
        wigyoouuiyaysasc:
    }
}

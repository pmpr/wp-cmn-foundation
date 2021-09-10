<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const AUTHORIZATION = "\x41\x75\164\x68\157\x72\151\x7a\x61\164\151\157\156";
    const CONTENT_TYPE_KEY = "\x43\x6f\x6e\164\x65\156\x74\55\124\x79\160\x65";
    const APPLICATION_JSON_KEY = "\x61\160\x70\154\151\x63\x61\164\x69\x6f\x6e\x2f\152\163\157\x6e";
    const HTML_ACCEPT = "\164\145\170\x74\x2f\x68\164\x6d\154\x2c\x61\160\x70\x6c\x69\143\141\164\x69\157\x6e\57\x78\150\x74\x6d\x6c\x2b\x78\x6d\154\54\x61\x70\160\x6c\151\x63\141\x74\x69\157\156\x2f\x78\x6d\154\73\x71\75\x30\56\x39\54" . "\151\x6d\141\147\x65\x2f\167\x65\142\x70\54\151\155\141\147\145\x2f\141\160\x6e\x67\54\x2a\x2f\x2a\73\161\75\x30\x2e\70\x2c\x61\x70\160\x6c\151\143\x61\164\151\x6f\156\x2f\163\151\147\x6e\145\x64\x2d\x65\x78\x63\150\141\x6e\x67\145\x3b\166\75\142\x33";
    const BROWSER_USER_AGENT = "\115\157\x7a\151\154\x6c\141\x2f\x35\56\60\x20\50\x4c\151\x6e\165\170\73\40\101\x6e\x64\162\x6f\x69\x64\x20\67\56\60\73\40\x4d\157\x74\157\40\107\x20\x28\x34\x29\51\x20\x41\x70\x70\154\145\127\x65\142\113\x69\164\57\65\x33\x37\56\63\66\x20" . "\50\113\110\124\x4d\x4c\54\x20\154\x69\x6b\x65\x20\x47\x65\x63\x6b\157\51\x20\103\150\162\157\x6d\x65\57\70\64\56\60\56\64\x31\x34\x33\x2e\x37\40\x4d\x6f\x62\x69\x6c\x65\40\123\141\146\x61\x72\x69\x2f\x35\63\67\56\x33\66\40\103\150\162\157\155\145\x2d\114\151\x67\x68\164\x68\157\165\x73\145";
    
    protected array $options = [];
    
    protected array $queries = [];
    
    protected ?string $domain = null;
    
    protected ?string $accept = null;
    
    protected ?Client $client = null;
    
    public function __construct()
    {
        $this->client = new Client(["\x63\157\x6f\153\151\145\163" => true]);
        parent::__construct();
    }
    
    public function wmciwsucuuyumkes() : ?Client
    {
        return $this->client;
    }
    
    public function wemyikwikgwqwuoc()
    {
        
        return $this->wmciwsucuuyumkes()->getConfig("\x63\157\x6f\153\151\x65\163");
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
        csesgauismawagku:
        $this->accept = "\141\x70\x70\x6c\x69\143\x61\164\x69\x6f\156\x2f\x6a\163\157\x6e";
        goto yecgscseggkuesec;
        uucieweckoqqsoks:
        return $this->accept;
        goto cuiyioeewqwsiqsw;
        yecgscseggkuesec:
        cgcmcsgeeoecumwq:
        goto uucieweckoqqsoks;
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
        return $this->kesomeowemmyygey("\x68\x65\x61\144\145\162\163", [self::AUTHORIZATION => "\x42\145\141\x72\x65\162\40{$mgegoogckgsumooq}"]);
    }
    
    public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array
    {
        goto ceeogawcoyikgsim;
        eqiymuecwacqwayg:
        goto quygmuqewkgyecqo;
        goto iiasoeuismqwyycq;
        cieeesmkiaakmeok:
        if (!is_array($igqsaukqcqscimok)) {
            goto igsmyoowcmiwakua;
        }
        goto cweyguqiqaqusuao;
        cqmqmqimsiqekqeg:
        igsmyoowcmiwakua:
        goto eqiymuecwacqwayg;
        cweyguqiqaqusuao:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie);
        goto cqmqmqimsiqekqeg;
        iiasoeuismqwyycq:
        awyemswwoieewoqa:
        goto mugaweuuggguycsy;
        ceeogawcoyikgsim:
        $igqsaukqcqscimok = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
        goto iyeggmisagiwawwk;
        mugaweuuggguycsy:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto uickqaioaugyucug;
        mogaqucuwugmgcki:
        return $uomewyckeuqoqocu;
        goto qswkcweqkgcgsqsc;
        uickqaioaugyucug:
        quygmuqewkgyecqo:
        goto mogaqucuwugmgcki;
        iyeggmisagiwawwk:
        if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) {
            goto awyemswwoieewoqa;
        }
        goto cieeesmkiaakmeok;
        qswkcweqkgcgsqsc:
    }
    
    public function ksqekagyyameaceq() : array
    {
        return $this->queries;
    }
    
    public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self
    {
        goto wmseuigaskyekaqg;
        mgiqqociouigaeqm:
        return $this;
        goto kiwsmkmwywyyyqiy;
        jscmuqkkguwewisq:
        ccacgswmaksmoayw:
        goto mgiqqociouigaeqm;
        kkyqusekqcagwmcm:
        if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) {
            goto ccacgswmaksmoayw;
        }
        goto okgcmigwaqququoo;
        wmseuigaskyekaqg:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto kkyqusekqcagwmcm;
        okgcmigwaqququoo:
        $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom);
        goto jscmuqkkguwewisq;
        kiwsmkmwywyyyqiy:
    }
    
    public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self
    {
        goto wiaeawiisoyoiwma;
        cyqekysgyeycmuuq:
        return $this;
        goto uayauukwosacweis;
        cgmoiuuiqqeousac:
        egoewiuwaumcygqe:
        goto cyqekysgyeycmuuq;
        wiaeawiisoyoiwma:
        foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) {
            $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom);
            uisaaeagyuouaass:
        }
        goto cgmoiuuiqqeousac;
        uayauukwosacweis:
    }
    
    private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array
    {
        goto sasqkeaucymqqyes;
        sasqkeaucymqqyes:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto euisiqqsgwmegmem;
        uumcaooaockeeusm:
        uyycwsqcouisceqi:
        goto ouqimcasmucqeyyo;
        soqgimommckkgiiw:
        $qiouiwasaauyaaue[RequestOptions::QUERY] = preg_replace("\57\x25\65\102\50\x3f\72\x5b\x30\55\71\x5d\174\133\61\55\x39\135\133\60\x2d\71\x5d\53\51\x25\x35\104\75\x2f", "\75", http_build_query($uoomaookgsyciacm));
        goto uumcaooaockeeusm;
        ouqimcasmucqeyyo:
        return $qiouiwasaauyaaue;
        goto ssiweiyoyasksgms;
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
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\x65\164") : ?ResponseInterface
    {
        goto mqocmwqcoggwmiag;
        wueqcsuguccioeyo:
        try {
            goto ocqsukugmwakoeka;
            ocqsukugmwakoeka:
            $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            goto ckayiusouiaqkgsa;
            gqymkgqmgmqkmuus:
            if (ManipulateValidation::wmcwegoisyeeosqu($xeciwimgioieayek)) {
                goto rsgiiamwiogywmos;
            }
            goto aoqykwgyygqwsmoc;
            eamcmmswicuegaso:
            $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($mokawwccycoiqeka, $qiouiwasaauyaaue);
            goto qiqgekyeeqokiaai;
            jkumcawosiyygaey:
            ukwusskgsgkacmsa:
            goto eamcmmswicuegaso;
            awoceaocmuugoawi:
            $mokawwccycoiqeka = "{$mokawwccycoiqeka}{$xeciwimgioieayek}";
            goto qcigiiqacgoiemqa;
            qcigiiqacgoiemqa:
            aiomowcyeiymassu:
            goto mucycmsamuamwakw;
            mucycmsamuamwakw:
            goto ecukycksiqeeyuoa;
            goto umosyeioascwoyww;
            wqgmscukuimomwau:
            $mokawwccycoiqeka = $xeciwimgioieayek;
            goto gumoiomiwcueoaim;
            socgmqisawsmgkyi:
            goto owmgcmumcuqawiik;
            goto jkumcawosiyygaey;
            cskaysiukqwwaiok:
            if (ManipulateValidation::wmcwegoisyeeosqu($mokawwccycoiqeka)) {
                goto ukwusskgsgkacmsa;
            }
            goto wugieaemocyyeaos;
            wesuaykwwuyeeqkk:
            $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue);
            goto csykccgkakqmgock;
            aoqykwgyygqwsmoc:
            $mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua());
            goto eggsakwewuussuwc;
            qiqgekyeeqokiaai:
            owmgcmumcuqawiik:
            goto okaewmiweigkcmye;
            ckayiusouiaqkgsa:
            $this->kesomeowemmyygey("\x68\145\x61\144\145\x72", ["\x61\143\143\x65\x70\164" => $this->mcacmccgmkkouuqg()]);
            goto wesuaykwwuyeeqkk;
            eggsakwewuussuwc:
            if (!$mokawwccycoiqeka) {
                goto aiomowcyeiymassu;
            }
            goto awoceaocmuugoawi;
            umosyeioascwoyww:
            rsgiiamwiogywmos:
            goto wqgmscukuimomwau;
            wugieaemocyyeaos:
            $this->saqqeqmcyyoeqici(sprintf("\x41\120\111\x20\45\163\x20\x52\145\161\165\x65\163\164\40\105\x72\x72\157\162\x3a\x20\47\x25\x73\47\x20\x69\x73\40\156\157\x74\40\141\x20\x76\x61\x6c\x69\x64\40\144\157\x6d\141\151\x6e\56", strtoupper($qgciuiagkkguykgs), $mokawwccycoiqeka));
            goto socgmqisawsmgkyi;
            csykccgkakqmgock:
            $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue);
            goto gqymkgqmgmqkmuus;
            gumoiomiwcueoaim:
            ecukycksiqeeyuoa:
            goto cskaysiukqwwaiok;
            okaewmiweigkcmye:
        } catch (ClientException $wgaoewqkwgomoaai) {
            
            $keccaugmemegoimu = $wgaoewqkwgomoaai->getResponse();
            $this->saqqeqmcyyoeqici(sprintf("\101\120\111\40\x25\x73\40\x52\x65\x71\x75\145\x73\x74\40\x45\162\162\x6f\x72\x3a\40{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}", strtoupper($qgciuiagkkguykgs)));
        }
        goto aoqgkyoegqssakuq;
        aoqgkyoegqssakuq:
        return $keccaugmemegoimu;
        goto gaqyckqesooysusy;
        mqocmwqcoggwmiag:
        $keccaugmemegoimu = null;
        goto wueqcsuguccioeyo;
        gaqyckqesooysusy:
    }
    
    public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\147\x65\164");
    }
    
    public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\x6f\x73\164");
    }
    
    public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\x61\164\143\x68");
    }
    
    public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x64\145\x6c\145\164\x65");
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto giiycggyqyaakmsw;
        yicgcsiewokauegy:
        return $sogksuscggsicmac;
        goto uowgmiscaeysqomk;
        giiycggyqyaakmsw:
        $sogksuscggsicmac = null;
        goto qmockiskiuyoekug;
        eymwskwgmiaigcwo:
        switch ($this->mcacmccgmkkouuqg()) {
            case "\x61\x70\x70\154\151\143\141\164\x69\x6f\156\57\x6a\x73\x6f\x6e":
                $sogksuscggsicmac = json_decode($sogksuscggsicmac, true);
                goto mqamcimuisqakyym;
        }
        goto yuiyqaywukauayoe;
        yuiyqaywukauayoe:
        wmswiyimwcsmqgew:
        goto ssccmsacioyiqkgw;
        kisikuaqoaeayiiq:
        ekmyaiqggooyuciu:
        goto eymwskwgmiaigcwo;
        ssccmsacioyiqkgw:
        mqamcimuisqakyym:
        goto yicgcsiewokauegy;
        wckmescqueucsasq:
        $sogksuscggsicmac = $keccaugmemegoimu->wesecsykkuakgyec();
        goto kisikuaqoaeayiiq;
        qmockiskiuyoekug:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto ekmyaiqggooyuciu;
        }
        goto wckmescqueucsasq;
        uowgmiscaeysqomk:
    }
    
    public function occymigcemkqucuw(?ResponseInterface $keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = self::MESSAGE) : bool
    {
        goto acqukmwaqqocyway;
        semmqugkwwqweawm:
        amwcceeeewkecsmq:
        goto kaucouscgsawawys;
        imeuaeoyequyquyc:
        if ($keccaugmemegoimu->wkaoyeoamyiacyeg() !== 200) {
            goto qmqkqeuwmyysogke;
        }
        goto ymmgouuewwaieawy;
        qakcaquyeuguwues:
        $iswcokucwmiosiaq .= __("\122\145\163\160\157\x6e\x73\145\40\151\x73\x20\x6e\x6f\x74\40\166\x61\154\x69\x64", PR__CMN__FOUNDATION);
        goto owswwyqyusisgwme;
        cocuuoguowasocye:
        if (is_string($keccaugmemegoimu)) {
            goto aikiqgkqagcwgqgw;
        }
        goto qakcaquyeuguwues;
        kqieuqgsocqgaesw:
        return $ksaameoqigiaoigg;
        goto kksaeyuekaaessaa;
        myggyowooawikgoi:
        aikiqgkqagcwgqgw:
        goto iwwsukcmssaaeqoq;
        ykoogomowmiquuem:
        switch ($keccaugmemegoimu->wkaoyeoamyiacyeg()) {
            case 400:
            case 403:
                goto mwwggwmssgeaaagk;
                ekakmkqymqsiccum:
                $iswcokucwmiosiaq = $kuukgsmqkagwaciu;
                goto ygkqsaeqygyqegym;
                gscmiuqosuimoigq:
                $icwicymcioeyeyek = [self::CODE => ManipulateArray::get($smgooosyoeqwcaeg, self::CODE), self::STATUS => $keccaugmemegoimu->wkaoyeoamyiacyeg()];
                goto gyiywuemaogacsoq;
                ygkqsaeqygyqegym:
                giqcweisosusycmy:
                goto kuqeasegkegcgakq;
                gyiywuemaogacsoq:
                sekwgiesmgamusyc:
                goto cqueukswyygmssqa;
                mwwggwmssgeaaagk:
                if (!$smgooosyoeqwcaeg) {
                    goto sekwgiesmgamusyc;
                }
                goto ywmysmegwksecsuy;
                cqueukswyygmssqa:
                if ($iswcokucwmiosiaq) {
                    goto giqcweisosusycmy;
                }
                goto ekakmkqymqsiccum;
                ywmysmegwksecsuy:
                $iswcokucwmiosiaq = ManipulateArray::get($smgooosyoeqwcaeg, $qeweemoqwwsoumeg);
                goto gscmiuqosuimoigq;
                kuqeasegkegcgakq:
                goto amwcceeeewkecsmq;
                goto usyaigaqkosuymko;
                usyaigaqkosuymko:
            default:
                $iswcokucwmiosiaq = sprintf("\x25\163\72\40\45\x73", __("\103\x6f\156\x6e\145\x63\x74\151\157\x6e\x20\105\162\162\x6f\x72", PR__CMN__FOUNDATION), $kuukgsmqkagwaciu);
                goto amwcceeeewkecsmq;
        }
        goto qaikucmemsqmosyg;
        iwwsukcmssaaeqoq:
        $iswcokucwmiosiaq = $keccaugmemegoimu;
        goto iyuycauougyasiiq;
        kwecemikiouwuiwi:
        goto cccgaqykomecsysa;
        goto mqeacwmeqkoqmqko;
        ymmgouuewwaieawy:
        $ksaameoqigiaoigg = true;
        goto kwecemikiouwuiwi;
        tkeoceysmquieskw:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto gecymmgumgauakae;
        gecymmgumgauakae:
        $smgooosyoeqwcaeg = json_decode($keccaugmemegoimu->wesecsykkuakgyec()->sigciooygkcccyko());
        goto ykoogomowmiquuem;
        giaamqkcsgokqgqm:
        cuiumaykueaccekc:
        goto kqieuqgsocqgaesw;
        owswwyqyusisgwme:
        goto eoeioguggcgccggg;
        goto myggyowooawikgoi;
        ucsssaiqcemkkmkc:
        goto cuiumaykueaccekc;
        goto yuoiuagyeoygsycm;
        kaucouscgsawawys:
        cccgaqykomecsysa:
        goto ucsssaiqcemkkmkc;
        acqukmwaqqocyway:
        $ksaameoqigiaoigg = false;
        goto gqksqioaokkkeicw;
        gqksqioaokkkeicw:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto omqgyiwasikuqsqs;
        }
        goto imeuaeoyequyquyc;
        qaikucmemsqmosyg:
        wgogoicgkassusme:
        goto semmqugkwwqweawm;
        yuoiuagyeoygsycm:
        omqgyiwasikuqsqs:
        goto cocuuoguowasocye;
        mqeacwmeqkoqmqko:
        qmqkqeuwmyysogke:
        goto tkeoceysmquieskw;
        iyuycauougyasiiq:
        eoeioguggcgccggg:
        goto giaamqkcsgokqgqm;
        kksaeyuekaaessaa:
    }
    
    public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee = '', $csowmwgiiyueuius = self::SUCCESS, $aqogmkcqyeosckkm = self::ERRORS) : bool
    {
        goto wuiomwwygyismoke;
        iougwygwasqmesuw:
        iaagogeaaawgsacg:
        goto aiqykgkokmqqocwg;
        miimeciguswkagcm:
        kaeeaeaqemqkimki:
        goto mkkwcsmomimsckmo;
        aiqykgkokmqqocwg:
        $eisqsskqimiigkay = false;
        goto kwgwaowiuagqockc;
        wuiomwwygyismoke:
        $eisqsskqimiigkay = true;
        goto qmaeagoqeukouayc;
        kwgwaowiuagqockc:
        uiyuqwmuyicmukgs:
        goto igmogosqsaiksoya;
        giwoykisgksecowe:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, $aqogmkcqyeosckkm, []);
        goto awyakmgqyaksucso;
        yyoogmukueyocgeo:
        yagmeysqkyagckyg:
        goto iougwygwasqmesuw;
        gkeegeyqgwcqsaqi:
        kkawsaququwoqkga:
        goto ukiquuoaawuemuwm;
        qmaeagoqeukouayc:
        if (ManipulateArray::get($sogksuscggsicmac, $csowmwgiiyueuius)) {
            goto uiyuqwmuyicmukgs;
        }
        goto giwoykisgksecowe;
        soigaomwwmwqqsqe:
        $wumguikkgaigkoee .= $ueeagokqmgisgauy;
        goto gkeegeyqgwcqsaqi;
        ukiquuoaawuemuwm:
        goto iaagogeaaawgsacg;
        goto miimeciguswkagcm;
        xkqgegowecakaogy:
        if (!is_string($ueeagokqmgisgauy)) {
            goto kkawsaququwoqkga;
        }
        goto soigaomwwmwqqsqe;
        awyakmgqyaksucso:
        if (is_array($ueeagokqmgisgauy)) {
            goto kaeeaeaqemqkimki;
        }
        goto xkqgegowecakaogy;
        igmogosqsaiksoya:
        return $eisqsskqimiigkay;
        goto wigyoouuiyaysasc;
        mkkwcsmomimsckmo:
        foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) {
            $wumguikkgaigkoee[] = sprintf("\x25\163\x20\50\45\163\72\40\x25\163\x29", ManipulateArray::get($iswcokucwmiosiaq, "\155\145\163\163\x61\147\145"), __("\x45\x72\162\157\x72\x20\103\x6f\144\x65", PR__CMN__FOUNDATION), ManipulateArray::get($iswcokucwmiosiaq, "\143\157\144\x65"));
            sowgacwmiukqyequ:
        }
        goto yyoogmukueyocgeo;
        wigyoouuiyaysasc:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const AUTHORIZATION = "\x41\x75\164\x68\x6f\162\x69\172\141\x74\151\157\x6e";
    const CONTENT_TYPE_KEY = "\103\x6f\x6e\164\145\x6e\x74\55\124\171\x70\x65";
    const APPLICATION_JSON_KEY = "\141\x70\160\154\151\x63\141\x74\151\157\x6e\x2f\x6a\163\157\x6e";
    const HTML_ACCEPT = "\x74\145\x78\164\x2f\x68\x74\x6d\154\x2c\141\x70\160\x6c\x69\x63\x61\164\x69\x6f\156\57\x78\x68\164\x6d\154\x2b\170\155\x6c\54\141\160\160\x6c\x69\143\141\x74\x69\x6f\x6e\57\x78\x6d\154\73\x71\75\60\x2e\71\54" . "\151\155\x61\147\145\x2f\x77\145\x62\x70\54\151\155\x61\x67\145\x2f\141\160\156\147\x2c\x2a\57\x2a\x3b\x71\75\60\56\70\x2c\x61\x70\160\154\x69\x63\141\164\x69\157\156\57\x73\151\x67\x6e\145\x64\55\x65\x78\x63\x68\x61\x6e\x67\x65\x3b\x76\x3d\x62\63";
    const BROWSER_USER_AGENT = "\x4d\x6f\172\151\154\154\x61\57\65\x2e\x30\x20\50\114\151\156\x75\170\73\x20\x41\156\144\162\157\x69\144\40\x37\x2e\x30\73\40\115\157\x74\157\40\x47\40\x28\x34\51\51\40\101\x70\x70\154\145\x57\145\142\x4b\x69\x74\x2f\65\63\x37\x2e\x33\x36\40" . "\x28\x4b\x48\x54\115\114\54\40\x6c\151\153\x65\x20\x47\x65\x63\x6b\x6f\x29\x20\103\150\x72\157\155\145\x2f\70\x34\56\x30\56\x34\x31\x34\63\x2e\x37\x20\x4d\157\x62\151\x6c\145\40\123\141\x66\x61\162\x69\57\x35\63\x37\x2e\x33\x36\x20\103\150\x72\157\x6d\x65\55\114\151\147\150\164\150\x6f\165\163\145";
    
    protected array $options = [];
    
    protected array $queries = [];
    
    protected ?string $domain = null;
    
    protected ?string $accept = null;
    
    protected ?Client $client = null;
    
    public function __construct()
    {
        $this->client = new Client(["\x63\157\x6f\x6b\151\x65\163" => true]);
        parent::__construct();
    }
    
    public function wmciwsucuuyumkes() : ?Client
    {
        return $this->client;
    }
    
    public function wemyikwikgwqwuoc()
    {
        
        return $this->wmciwsucuuyumkes()->getConfig("\143\x6f\157\x6b\151\x65\163");
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
        uucieweckoqqsoks:
        return $this->accept;
        goto cuiyioeewqwsiqsw;
        yecgscseggkuesec:
        cgcmcsgeeoecumwq:
        goto uucieweckoqqsoks;
        csesgauismawagku:
        $this->accept = "\141\x70\x70\154\x69\143\141\x74\151\x6f\156\x2f\x6a\163\157\156";
        goto yecgscseggkuesec;
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
        return $this->kesomeowemmyygey("\150\x65\x61\144\x65\162\163", [self::AUTHORIZATION => "\102\x65\141\162\145\162\x20{$mgegoogckgsumooq}"]);
    }
    
    public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array
    {
        goto ceeogawcoyikgsim;
        eqiymuecwacqwayg:
        goto quygmuqewkgyecqo;
        goto iiasoeuismqwyycq;
        cweyguqiqaqusuao:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie);
        goto cqmqmqimsiqekqeg;
        cieeesmkiaakmeok:
        if (!is_array($igqsaukqcqscimok)) {
            goto igsmyoowcmiwakua;
        }
        goto cweyguqiqaqusuao;
        mogaqucuwugmgcki:
        return $uomewyckeuqoqocu;
        goto qswkcweqkgcgsqsc;
        ceeogawcoyikgsim:
        $igqsaukqcqscimok = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
        goto iyeggmisagiwawwk;
        iiasoeuismqwyycq:
        awyemswwoieewoqa:
        goto mugaweuuggguycsy;
        mugaweuuggguycsy:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto uickqaioaugyucug;
        iyeggmisagiwawwk:
        if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) {
            goto awyemswwoieewoqa;
        }
        goto cieeesmkiaakmeok;
        uickqaioaugyucug:
        quygmuqewkgyecqo:
        goto mogaqucuwugmgcki;
        cqmqmqimsiqekqeg:
        igsmyoowcmiwakua:
        goto eqiymuecwacqwayg;
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
        okgcmigwaqququoo:
        $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom);
        goto jscmuqkkguwewisq;
        wmseuigaskyekaqg:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto kkyqusekqcagwmcm;
        kkyqusekqcagwmcm:
        if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) {
            goto ccacgswmaksmoayw;
        }
        goto okgcmigwaqququoo;
        mgiqqociouigaeqm:
        return $this;
        goto kiwsmkmwywyyyqiy;
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
        $qiouiwasaauyaaue[RequestOptions::QUERY] = preg_replace("\57\45\65\x42\x28\77\x3a\x5b\x30\55\x39\x5d\x7c\133\x31\55\x39\135\x5b\x30\x2d\71\x5d\x2b\51\45\x35\104\x3d\57", "\x3d", http_build_query($uoomaookgsyciacm));
        goto uumcaooaockeeusm;
        ouqimcasmucqeyyo:
        return $qiouiwasaauyaaue;
        goto ssiweiyoyasksgms;
        sasqkeaucymqqyes:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto euisiqqsgwmegmem;
        uumcaooaockeeusm:
        uyycwsqcouisceqi:
        goto ouqimcasmucqeyyo;
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
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\x67\x65\x74") : ?ResponseInterface
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
            socgmqisawsmgkyi:
            goto owmgcmumcuqawiik;
            goto jkumcawosiyygaey;
            ocqsukugmwakoeka:
            $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            goto ckayiusouiaqkgsa;
            awoceaocmuugoawi:
            $mokawwccycoiqeka = "{$mokawwccycoiqeka}{$xeciwimgioieayek}";
            goto qcigiiqacgoiemqa;
            jkumcawosiyygaey:
            ukwusskgsgkacmsa:
            goto eamcmmswicuegaso;
            ckayiusouiaqkgsa:
            $this->kesomeowemmyygey("\x68\145\141\x64\x65\x72", ["\141\143\143\145\160\164" => $this->mcacmccgmkkouuqg()]);
            goto wesuaykwwuyeeqkk;
            gqymkgqmgmqkmuus:
            if (ManipulateValidation::wmcwegoisyeeosqu($xeciwimgioieayek)) {
                goto rsgiiamwiogywmos;
            }
            goto aoqykwgyygqwsmoc;
            mucycmsamuamwakw:
            goto ecukycksiqeeyuoa;
            goto umosyeioascwoyww;
            wugieaemocyyeaos:
            $this->saqqeqmcyyoeqici(sprintf("\101\x50\111\40\x25\x73\40\x52\145\161\x75\x65\163\164\40\x45\x72\162\157\x72\72\40\47\x25\163\x27\40\x69\163\x20\156\157\164\40\x61\40\166\141\154\x69\x64\x20\x64\157\155\141\151\x6e\x2e", strtoupper($qgciuiagkkguykgs), $mokawwccycoiqeka));
            goto socgmqisawsmgkyi;
            aoqykwgyygqwsmoc:
            $mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua());
            goto eggsakwewuussuwc;
            qiqgekyeeqokiaai:
            owmgcmumcuqawiik:
            goto okaewmiweigkcmye;
            gumoiomiwcueoaim:
            ecukycksiqeeyuoa:
            goto cskaysiukqwwaiok;
            eamcmmswicuegaso:
            $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($mokawwccycoiqeka, $qiouiwasaauyaaue);
            goto qiqgekyeeqokiaai;
            umosyeioascwoyww:
            rsgiiamwiogywmos:
            goto wqgmscukuimomwau;
            eggsakwewuussuwc:
            if (!$mokawwccycoiqeka) {
                goto aiomowcyeiymassu;
            }
            goto awoceaocmuugoawi;
            csykccgkakqmgock:
            $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue);
            goto gqymkgqmgmqkmuus;
            cskaysiukqwwaiok:
            if (ManipulateValidation::wmcwegoisyeeosqu($mokawwccycoiqeka)) {
                goto ukwusskgsgkacmsa;
            }
            goto wugieaemocyyeaos;
            qcigiiqacgoiemqa:
            aiomowcyeiymassu:
            goto mucycmsamuamwakw;
            wqgmscukuimomwau:
            $mokawwccycoiqeka = $xeciwimgioieayek;
            goto gumoiomiwcueoaim;
            wesuaykwwuyeeqkk:
            $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue);
            goto csykccgkakqmgock;
            okaewmiweigkcmye:
        } catch (ClientException $wgaoewqkwgomoaai) {
            
            $keccaugmemegoimu = $wgaoewqkwgomoaai->getResponse();
            $this->saqqeqmcyyoeqici(sprintf("\x41\120\111\40\x25\163\40\122\145\x71\x75\145\x73\x74\40\105\162\x72\x6f\x72\x3a\x20{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}", strtoupper($qgciuiagkkguykgs)));
        }
        goto aoqgkyoegqssakuq;
        gaqyckqesooysusy:
    }
    
    public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x67\145\x74");
    }
    
    public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\157\x73\164");
    }
    
    public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x70\141\164\143\x68");
    }
    
    public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\144\x65\x6c\145\164\x65");
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto giiycggyqyaakmsw;
        eymwskwgmiaigcwo:
        switch ($this->mcacmccgmkkouuqg()) {
            case "\141\160\x70\154\151\x63\141\164\x69\157\x6e\57\152\163\x6f\x6e":
                $sogksuscggsicmac = json_decode($sogksuscggsicmac, true);
                goto mqamcimuisqakyym;
        }
        goto yuiyqaywukauayoe;
        giiycggyqyaakmsw:
        $sogksuscggsicmac = null;
        goto qmockiskiuyoekug;
        qmockiskiuyoekug:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto ekmyaiqggooyuciu;
        }
        goto wckmescqueucsasq;
        wckmescqueucsasq:
        $sogksuscggsicmac = $keccaugmemegoimu->wesecsykkuakgyec();
        goto kisikuaqoaeayiiq;
        yuiyqaywukauayoe:
        wmswiyimwcsmqgew:
        goto ssccmsacioyiqkgw;
        yicgcsiewokauegy:
        return $sogksuscggsicmac;
        goto uowgmiscaeysqomk;
        kisikuaqoaeayiiq:
        ekmyaiqggooyuciu:
        goto eymwskwgmiaigcwo;
        ssccmsacioyiqkgw:
        mqamcimuisqakyym:
        goto yicgcsiewokauegy;
        uowgmiscaeysqomk:
    }
    
    public function occymigcemkqucuw(?ResponseInterface $keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = self::MESSAGE) : bool
    {
        goto acqukmwaqqocyway;
        kqieuqgsocqgaesw:
        return $ksaameoqigiaoigg;
        goto kksaeyuekaaessaa;
        kwecemikiouwuiwi:
        goto cccgaqykomecsysa;
        goto mqeacwmeqkoqmqko;
        yuoiuagyeoygsycm:
        omqgyiwasikuqsqs:
        goto cocuuoguowasocye;
        giaamqkcsgokqgqm:
        cuiumaykueaccekc:
        goto kqieuqgsocqgaesw;
        acqukmwaqqocyway:
        $ksaameoqigiaoigg = false;
        goto gqksqioaokkkeicw;
        owswwyqyusisgwme:
        goto eoeioguggcgccggg;
        goto myggyowooawikgoi;
        cocuuoguowasocye:
        if (is_string($keccaugmemegoimu)) {
            goto aikiqgkqagcwgqgw;
        }
        goto qakcaquyeuguwues;
        mqeacwmeqkoqmqko:
        qmqkqeuwmyysogke:
        goto tkeoceysmquieskw;
        kaucouscgsawawys:
        cccgaqykomecsysa:
        goto ucsssaiqcemkkmkc;
        qaikucmemsqmosyg:
        wgogoicgkassusme:
        goto semmqugkwwqweawm;
        myggyowooawikgoi:
        aikiqgkqagcwgqgw:
        goto iwwsukcmssaaeqoq;
        ykoogomowmiquuem:
        switch ($keccaugmemegoimu->wkaoyeoamyiacyeg()) {
            case 400:
            case 403:
                goto mwwggwmssgeaaagk;
                cqueukswyygmssqa:
                if ($iswcokucwmiosiaq) {
                    goto giqcweisosusycmy;
                }
                goto ekakmkqymqsiccum;
                ywmysmegwksecsuy:
                $iswcokucwmiosiaq = ManipulateArray::get($smgooosyoeqwcaeg, $qeweemoqwwsoumeg);
                goto gscmiuqosuimoigq;
                ygkqsaeqygyqegym:
                giqcweisosusycmy:
                goto kuqeasegkegcgakq;
                ekakmkqymqsiccum:
                $iswcokucwmiosiaq = $kuukgsmqkagwaciu;
                goto ygkqsaeqygyqegym;
                gscmiuqosuimoigq:
                $icwicymcioeyeyek = [self::CODE => ManipulateArray::get($smgooosyoeqwcaeg, self::CODE), self::STATUS => $keccaugmemegoimu->wkaoyeoamyiacyeg()];
                goto gyiywuemaogacsoq;
                kuqeasegkegcgakq:
                goto amwcceeeewkecsmq;
                goto usyaigaqkosuymko;
                mwwggwmssgeaaagk:
                if (!$smgooosyoeqwcaeg) {
                    goto sekwgiesmgamusyc;
                }
                goto ywmysmegwksecsuy;
                gyiywuemaogacsoq:
                sekwgiesmgamusyc:
                goto cqueukswyygmssqa;
                usyaigaqkosuymko:
            default:
                $iswcokucwmiosiaq = sprintf("\x25\x73\72\40\x25\163", __("\x43\157\x6e\x6e\x65\x63\164\151\x6f\156\40\105\x72\162\x6f\x72", PR__CMN__FOUNDATION), $kuukgsmqkagwaciu);
                goto amwcceeeewkecsmq;
        }
        goto qaikucmemsqmosyg;
        qakcaquyeuguwues:
        $iswcokucwmiosiaq .= __("\x52\145\x73\160\x6f\156\163\145\x20\151\x73\x20\156\x6f\164\40\166\x61\x6c\x69\x64", PR__CMN__FOUNDATION);
        goto owswwyqyusisgwme;
        semmqugkwwqweawm:
        amwcceeeewkecsmq:
        goto kaucouscgsawawys;
        gecymmgumgauakae:
        $smgooosyoeqwcaeg = json_decode($keccaugmemegoimu->wesecsykkuakgyec()->sigciooygkcccyko());
        goto ykoogomowmiquuem;
        ymmgouuewwaieawy:
        $ksaameoqigiaoigg = true;
        goto kwecemikiouwuiwi;
        tkeoceysmquieskw:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto gecymmgumgauakae;
        ucsssaiqcemkkmkc:
        goto cuiumaykueaccekc;
        goto yuoiuagyeoygsycm;
        imeuaeoyequyquyc:
        if ($keccaugmemegoimu->wkaoyeoamyiacyeg() !== 200) {
            goto qmqkqeuwmyysogke;
        }
        goto ymmgouuewwaieawy;
        iwwsukcmssaaeqoq:
        $iswcokucwmiosiaq = $keccaugmemegoimu;
        goto iyuycauougyasiiq;
        iyuycauougyasiiq:
        eoeioguggcgccggg:
        goto giaamqkcsgokqgqm;
        gqksqioaokkkeicw:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto omqgyiwasikuqsqs;
        }
        goto imeuaeoyequyquyc;
        kksaeyuekaaessaa:
    }
    
    public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee = '', $csowmwgiiyueuius = self::SUCCESS, $aqogmkcqyeosckkm = self::ERRORS) : bool
    {
        goto wuiomwwygyismoke;
        igmogosqsaiksoya:
        return $eisqsskqimiigkay;
        goto wigyoouuiyaysasc;
        yyoogmukueyocgeo:
        yagmeysqkyagckyg:
        goto iougwygwasqmesuw;
        soigaomwwmwqqsqe:
        $wumguikkgaigkoee .= $ueeagokqmgisgauy;
        goto gkeegeyqgwcqsaqi;
        xkqgegowecakaogy:
        if (!is_string($ueeagokqmgisgauy)) {
            goto kkawsaququwoqkga;
        }
        goto soigaomwwmwqqsqe;
        giwoykisgksecowe:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, $aqogmkcqyeosckkm, []);
        goto awyakmgqyaksucso;
        kwgwaowiuagqockc:
        uiyuqwmuyicmukgs:
        goto igmogosqsaiksoya;
        iougwygwasqmesuw:
        iaagogeaaawgsacg:
        goto aiqykgkokmqqocwg;
        mkkwcsmomimsckmo:
        foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) {
            $wumguikkgaigkoee[] = sprintf("\45\163\x20\x28\x25\163\72\40\45\163\x29", ManipulateArray::get($iswcokucwmiosiaq, "\x6d\x65\163\163\141\147\145"), __("\105\x72\x72\157\x72\x20\103\157\144\x65", PR__CMN__FOUNDATION), ManipulateArray::get($iswcokucwmiosiaq, "\143\157\x64\x65"));
            sowgacwmiukqyequ:
        }
        goto yyoogmukueyocgeo;
        wuiomwwygyismoke:
        $eisqsskqimiigkay = true;
        goto qmaeagoqeukouayc;
        awyakmgqyaksucso:
        if (is_array($ueeagokqmgisgauy)) {
            goto kaeeaeaqemqkimki;
        }
        goto xkqgegowecakaogy;
        qmaeagoqeukouayc:
        if (ManipulateArray::get($sogksuscggsicmac, $csowmwgiiyueuius)) {
            goto uiyuqwmuyicmukgs;
        }
        goto giwoykisgksecowe;
        gkeegeyqgwcqsaqi:
        kkawsaququwoqkga:
        goto ukiquuoaawuemuwm;
        aiqykgkokmqqocwg:
        $eisqsskqimiigkay = false;
        goto kwgwaowiuagqockc;
        ukiquuoaawuemuwm:
        goto iaagogeaaawgsacg;
        goto miimeciguswkagcm;
        miimeciguswkagcm:
        kaeeaeaqemqkimki:
        goto mkkwcsmomimsckmo;
        wigyoouuiyaysasc:
    }
}

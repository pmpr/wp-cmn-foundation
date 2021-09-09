<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    const AUTHORIZATION = "\101\x75\164\x68\x6f\162\x69\x7a\x61\164\151\x6f\x6e";
    const CONTENT_TYPE_KEY = "\103\157\x6e\x74\x65\156\164\55\124\x79\x70\x65";
    const APPLICATION_JSON_KEY = "\x61\x70\x70\154\151\x63\x61\x74\x69\157\x6e\57\152\x73\157\x6e";
    const HTML_ACCEPT = "\164\145\x78\x74\x2f\150\x74\155\154\54\x61\160\x70\154\151\x63\x61\x74\x69\157\156\57\170\x68\x74\155\x6c\x2b\x78\155\154\x2c\141\x70\160\154\151\143\x61\164\151\x6f\156\x2f\170\x6d\154\x3b\161\x3d\x30\56\x39\x2c" . "\151\155\141\x67\145\x2f\x77\x65\142\x70\x2c\x69\155\141\x67\x65\x2f\141\160\x6e\x67\x2c\52\57\x2a\x3b\161\x3d\x30\56\x38\54\x61\160\x70\x6c\x69\143\x61\x74\x69\157\156\57\x73\151\147\x6e\x65\x64\x2d\145\170\143\150\x61\156\x67\145\x3b\166\75\x62\x33";
    const BROWSER_USER_AGENT = "\x4d\157\172\151\x6c\154\141\x2f\x35\x2e\60\40\x28\114\x69\x6e\x75\170\73\x20\101\x6e\144\162\157\x69\144\x20\x37\56\x30\73\40\115\x6f\164\x6f\x20\107\x20\50\64\x29\51\40\101\x70\160\154\x65\127\145\x62\x4b\x69\x74\x2f\65\x33\67\56\x33\x36\40" . "\50\113\110\124\x4d\x4c\x2c\x20\x6c\151\x6b\145\x20\x47\145\x63\x6b\157\x29\x20\103\x68\x72\157\155\145\x2f\70\x34\x2e\60\56\64\x31\x34\x33\x2e\67\40\x4d\157\142\x69\x6c\145\40\x53\141\146\x61\x72\x69\x2f\x35\x33\x37\x2e\63\66\40\x43\x68\x72\157\x6d\145\55\x4c\x69\x67\x68\x74\150\x6f\165\163\145";
    
    protected array $options = [];
    
    protected array $queries = [];
    
    protected ?string $domain = null;
    
    protected ?string $accept = null;
    
    protected ?Client $client = null;
    
    public function __construct()
    {
        $this->client = new Client(["\x63\x6f\x6f\153\151\145\x73" => true]);
        parent::__construct();
    }
    
    public function wmciwsucuuyumkes() : ?Client
    {
        return $this->client;
    }
    
    public function wemyikwikgwqwuoc()
    {
        
        return $this->wmciwsucuuyumkes()->getConfig("\143\157\157\x6b\x69\x65\163");
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
        goto omesscwqssieckec;
        kwqcqueyukysmuia:
        return $this->accept;
        goto qqssuiecukiyiemg;
        omesscwqssieckec:
        if ($this->accept) {
            goto wkokskegkswkoswi;
        }
        goto amugscyksemawyue;
        amugscyksemawyue:
        $this->accept = "\x61\160\160\154\x69\143\x61\164\x69\x6f\156\57\x6a\x73\x6f\x6e";
        goto gggagaqgieumsous;
        gggagaqgieumsous:
        wkokskegkswkoswi:
        goto kwqcqueyukysmuia;
        qqssuiecukiyiemg:
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
        return $this->kesomeowemmyygey("\x68\x65\141\x64\x65\x72\163", [self::AUTHORIZATION => "\x42\x65\141\x72\x65\x72\x20{$mgegoogckgsumooq}"]);
    }
    
    public function sgkkiikkkaqmacie($uomewyckeuqoqocu, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : array
    {
        goto qokuacmaaweiawei;
        ugwaeuogggmsckkc:
        goto ymsuaaycogmcakuc;
        goto uokugmckkqqmacsk;
        asqeeswqiqkmeuqu:
        aseowoeeewyquqcq:
        goto ugwaeuogggmsckkc;
        ckkcsqmieacuiwws:
        return $uomewyckeuqoqocu;
        goto geioaoiakaaskmiq;
        cukaykgmayuaoeau:
        if (!$igqsaukqcqscimok || $cwwowqyuwccuykom) {
            goto mgcsosaagcyukwsk;
        }
        goto eyyqesscicaiisos;
        eyyqesscicaiisos:
        if (!is_array($igqsaukqcqscimok)) {
            goto aseowoeeewyquqcq;
        }
        goto qoucwoamyowaoyms;
        uokugmckkqqmacsk:
        mgcsosaagcyukwsk:
        goto iyuewqwuauaqesgw;
        qokuacmaaweiawei:
        $igqsaukqcqscimok = ManipulateArray::get($uomewyckeuqoqocu, $uusmaiomayssaecw);
        goto cukaykgmayuaoeau;
        iyuewqwuauaqesgw:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto guqiucweqcwwokmq;
        guqiucweqcwwokmq:
        ymsuaaycogmcakuc:
        goto ckkcsqmieacuiwws;
        qoucwoamyowaoyms:
        $uomewyckeuqoqocu[$uusmaiomayssaecw] = array_merge($igqsaukqcqscimok, $eqgoocgaqwqcimie);
        goto asqeeswqiqkmeuqu;
        geioaoiakaaskmiq:
    }
    
    public function ksqekagyyameaceq() : array
    {
        return $this->queries;
    }
    
    public function ksiyskmggywgsayu($uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom = false) : self
    {
        goto qeyioyeeqomywygg;
        iygqiwugsgasmmei:
        if (!(!isset($uoomaookgsyciacm[$uusmaiomayssaecw]) || $cwwowqyuwccuykom)) {
            goto esmysgwsqekkgyos;
        }
        goto qowkkywgauqwcaye;
        myeegekumqiuqyky:
        return $this;
        goto yucywyomwoymeaoo;
        iusakgweowcmymgq:
        esmysgwsqekkgyos:
        goto myeegekumqiuqyky;
        qowkkywgauqwcaye:
        $this->queries = $this->sgkkiikkkaqmacie($uoomaookgsyciacm, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $cwwowqyuwccuykom);
        goto iusakgweowcmymgq;
        qeyioyeeqomywygg:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto iygqiwugsgasmmei;
        yucywyomwoymeaoo:
    }
    
    public function ueqoossgegqyosem(array $uoomaookgsyciacm, $cwwowqyuwccuykom = false) : self
    {
        goto qsiqiykmmeooamai;
        siimgcqgmymwoauo:
        return $this;
        goto mawswmiuewqagcsa;
        qsiqiykmmeooamai:
        foreach ($uoomaookgsyciacm as $uusmaiomayssaecw => $gqgemcmoicmgaqie) {
            $this->ksiyskmggywgsayu($uusmaiomayssaecw, $gqgemcmoicmgaqie, $cwwowqyuwccuykom);
            ewyyeyokouyicmom:
        }
        goto momssyeueaumcmii;
        momssyeueaumcmii:
        ugoqickwqkmmuoea:
        goto siimgcqgmymwoauo;
        mawswmiuewqagcsa:
    }
    
    private function euoawsaeguawoeoq($qiouiwasaauyaaue = []) : array
    {
        goto owqgqgysciogcuwk;
        ekwqsmwucymewqco:
        return $qiouiwasaauyaaue;
        goto iummmcuamoigqyye;
        wyuukkaqwkysasgk:
        if (!$uoomaookgsyciacm) {
            goto qmoiyuckwyakswoy;
        }
        goto cugkwkcgcwamkeek;
        cugkwkcgcwamkeek:
        $qiouiwasaauyaaue[RequestOptions::QUERY] = preg_replace("\57\45\65\102\x28\x3f\72\133\x30\55\71\x5d\x7c\x5b\61\55\x39\135\133\x30\x2d\71\x5d\53\51\x25\65\x44\x3d\57", "\x3d", http_build_query($uoomaookgsyciacm));
        goto wkwqooeoiqqskigc;
        wkwqooeoiqqskigc:
        qmoiyuckwyakswoy:
        goto ekwqsmwucymewqco;
        owqgqgysciogcuwk:
        $uoomaookgsyciacm = $this->ksqekagyyameaceq();
        goto wyuukkaqwkysasgk;
        iummmcuamoigqyye:
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = "\147\x65\x74") : ?ResponseInterface
    {
        goto iokigyiokgscmmyk;
        usiqwuciygicyqsi:
        try {
            goto ugcqckmoiguqaqyg;
            famqscccoawysowy:
            aaysmqyimgwwmswc:
            goto gecemgoaygoigwkq;
            wiqwqecsuqsqisgm:
            $keccaugmemegoimu = $this->wmciwsucuuyumkes()->{$qgciuiagkkguykgs}($mokawwccycoiqeka, $qiouiwasaauyaaue);
            goto wauycggqcisyequc;
            ooeisqqwmqwgaaky:
            $mokawwccycoiqeka = untrailingslashit($this->wwawisckiqeueoua());
            goto tosaeugqweaqkmkw;
            yywwooiikmgqogsw:
            $this->kesomeowemmyygey("\x68\x65\x61\x64\x65\x72", ["\x61\143\143\x65\160\164" => $this->mcacmccgmkkouuqg()]);
            goto geowyegsewcqeyeg;
            cisoskkacswwwgme:
            aqeuykaemmwcmkag:
            goto wiqwqecsuqsqisgm;
            ugcqckmoiguqaqyg:
            $this->xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            goto yywwooiikmgqogsw;
            miyykescgesaauak:
            $this->saqqeqmcyyoeqici(sprintf("\x41\120\x49\x20\x25\163\40\x52\145\161\x75\x65\x73\x74\40\x45\x72\162\157\162\x3a\x20\x27\x25\x73\x27\x20\x69\163\x20\156\x6f\164\x20\x61\40\166\141\154\x69\144\x20\x64\157\x6d\x61\151\156\x2e", strtoupper($qgciuiagkkguykgs), $mokawwccycoiqeka));
            goto uwcocoiugsyyigak;
            ooywaqmkyimkwigy:
            $mokawwccycoiqeka = $xeciwimgioieayek;
            goto famqscccoawysowy;
            uwcocoiugsyyigak:
            goto cgkkewwuoaesyckq;
            goto cisoskkacswwwgme;
            qwmaquiuiegowwqu:
            mkwssqgmseeueoei:
            goto ooywaqmkyimkwigy;
            wkyowwwemoiseoke:
            if (ManipulateValidation::wmcwegoisyeeosqu($xeciwimgioieayek)) {
                goto mkwssqgmseeueoei;
            }
            goto ooeisqqwmqwgaaky;
            gecemgoaygoigwkq:
            if (ManipulateValidation::wmcwegoisyeeosqu($mokawwccycoiqeka)) {
                goto aqeuykaemmwcmkag;
            }
            goto miyykescgesaauak;
            keokimwocecqqykq:
            $qiouiwasaauyaaue = $this->euoawsaeguawoeoq($qiouiwasaauyaaue);
            goto wkyowwwemoiseoke;
            tosaeugqweaqkmkw:
            if (!$mokawwccycoiqeka) {
                goto iimckuqgqcmmaaus;
            }
            goto cmaiwqeugyoggqmu;
            cekuuoakmewkciem:
            iimckuqgqcmmaaus:
            goto cgikkekmwssakwme;
            wauycggqcisyequc:
            cgkkewwuoaesyckq:
            goto qcggsaqoywyumieq;
            cmaiwqeugyoggqmu:
            $mokawwccycoiqeka = "{$mokawwccycoiqeka}{$xeciwimgioieayek}";
            goto cekuuoakmewkciem;
            geowyegsewcqeyeg:
            $qiouiwasaauyaaue = array_merge($this->gkwkqmwweiawigae(), $qiouiwasaauyaaue);
            goto keokimwocecqqykq;
            cgikkekmwssakwme:
            goto aaysmqyimgwwmswc;
            goto qwmaquiuiegowwqu;
            qcggsaqoywyumieq:
        } catch (ClientException $wgaoewqkwgomoaai) {
            
            $keccaugmemegoimu = $wgaoewqkwgomoaai->getResponse();
            $this->saqqeqmcyyoeqici(sprintf("\x41\x50\x49\40\45\x73\x20\x52\145\x71\x75\x65\163\x74\40\x45\x72\x72\157\x72\72\40{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}", strtoupper($qgciuiagkkguykgs)));
        }
        goto qwkyqiemkeyeesow;
        iokigyiokgscmmyk:
        $keccaugmemegoimu = null;
        goto usiqwuciygicyqsi;
        qwkyqiemkeyeesow:
        return $keccaugmemegoimu;
        goto guiasequyoqeqwiw;
        guiasequyoqeqwiw:
    }
    
    public function get($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\147\x65\164");
    }
    
    public function sqmuqsscmimwqoki($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\x70\157\163\x74");
    }
    
    public function kqcyawyscakoskke($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\160\141\x74\x63\150");
    }
    
    public function delete($xeciwimgioieayek, $qiouiwasaauyaaue = []) : ?ResponseInterface
    {
        return $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, "\144\x65\154\145\x74\145");
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto yagcgciumusoisuq;
        zkwcmqmekgeqwemw:
        return $sogksuscggsicmac;
        goto oeykoakwmouewksg;
        wmimmucwgosqieee:
        switch ($this->mcacmccgmkkouuqg()) {
            case "\x61\160\160\x6c\x69\x63\141\x74\151\157\156\x2f\x6a\163\x6f\156":
                $sogksuscggsicmac = json_decode($sogksuscggsicmac, true);
                goto ogoyusqumokucecg;
        }
        goto giacoeeosqmawgwy;
        aymekuseakseoeke:
        ogoyusqumokucecg:
        goto zkwcmqmekgeqwemw;
        yagcgciumusoisuq:
        $sogksuscggsicmac = null;
        goto wiauusmyowuykyis;
        akauggwssmsooago:
        $sogksuscggsicmac = $keccaugmemegoimu->wesecsykkuakgyec();
        goto ocqukkewagukgwcm;
        giacoeeosqmawgwy:
        qegwqosqeiaywqio:
        goto aymekuseakseoeke;
        ocqukkewagukgwcm:
        cwmouqwqmkioeqiq:
        goto wmimmucwgosqieee;
        wiauusmyowuykyis:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto cwmouqwqmkioeqiq;
        }
        goto akauggwssmsooago;
        oeykoakwmouewksg:
    }
    
    public function occymigcemkqucuw(?ResponseInterface $keccaugmemegoimu, &$iswcokucwmiosiaq, &$icwicymcioeyeyek = [], $qeweemoqwwsoumeg = self::MESSAGE) : bool
    {
        goto uiooaaskesmueuci;
        eyqgkouukusouyuo:
        $iswcokucwmiosiaq = $keccaugmemegoimu;
        goto kwsiqmqimiymeoog;
        ymoeogqiyigaaqwa:
        goto isikkmukiimiqoie;
        goto wqecaeewcikcakce;
        qoecqiuqgykayeau:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto kykkokesucsumwye;
        yqsamggueqgeoscy:
        if (is_string($keccaugmemegoimu)) {
            goto wqayyeskagucmeis;
        }
        goto cqkeokockswukacw;
        koaywkwgumwauyce:
        $ksaameoqigiaoigg = true;
        goto ymoeogqiyigaaqwa;
        yqyokmiiywkykgkw:
        switch ($keccaugmemegoimu->wkaoyeoamyiacyeg()) {
            case 400:
            case 403:
                goto aksgswgmycoikuoo;
                oiiwcwuccecwaiaa:
                $icwicymcioeyeyek = [self::CODE => ManipulateArray::get($smgooosyoeqwcaeg, self::CODE), self::STATUS => $keccaugmemegoimu->wkaoyeoamyiacyeg()];
                goto yeiqiuuwaiysiuom;
                mmkycoggqqcyiugc:
                if ($iswcokucwmiosiaq) {
                    goto saigkiiwwkkusicm;
                }
                goto uaswgieioykugsww;
                uaswgieioykugsww:
                $iswcokucwmiosiaq = $kuukgsmqkagwaciu;
                goto aqmgmaaomqqwswos;
                gimcguskeecmoags:
                $iswcokucwmiosiaq = ManipulateArray::get($smgooosyoeqwcaeg, $qeweemoqwwsoumeg);
                goto oiiwcwuccecwaiaa;
                aksgswgmycoikuoo:
                if (!$smgooosyoeqwcaeg) {
                    goto swususomkmoeegsg;
                }
                goto gimcguskeecmoags;
                aqmgmaaomqqwswos:
                saigkiiwwkkusicm:
                goto cywoauacmosaisie;
                yeiqiuuwaiysiuom:
                swususomkmoeegsg:
                goto mmkycoggqqcyiugc;
                cywoauacmosaisie:
                goto wewusgmimaqoasim;
                goto gyseesgwqekccuqm;
                gyseesgwqekccuqm:
            default:
                $iswcokucwmiosiaq = sprintf("\x25\x73\72\x20\45\163", __("\x43\157\156\x6e\145\143\164\151\157\156\40\x45\162\162\x6f\162", PR__CMN__FOUNDATION), $kuukgsmqkagwaciu);
                goto wewusgmimaqoasim;
        }
        goto mgiuikekqwwecquo;
        imkouaauqmwgkygg:
        wqayyeskagucmeis:
        goto eyqgkouukusouyuo;
        kwsiqmqimiymeoog:
        woyiagsemicyskkg:
        goto ewgqmcceqiquyyee;
        kykkokesucsumwye:
        $smgooosyoeqwcaeg = json_decode($keccaugmemegoimu->wesecsykkuakgyec()->sigciooygkcccyko());
        goto yqyokmiiywkykgkw;
        ewgqmcceqiquyyee:
        keewyswqkywqwiig:
        goto kisaauwmeykgqgqm;
        cqkeokockswukacw:
        $iswcokucwmiosiaq .= __("\122\x65\x73\x70\157\156\163\145\x20\x69\163\40\x6e\x6f\x74\40\x76\141\154\151\144", PR__CMN__FOUNDATION);
        goto giugammuqoewuoyc;
        gcoiayyaeggagsam:
        iiyqieuwqywsuwie:
        goto yqsamggueqgeoscy;
        uiooaaskesmueuci:
        $ksaameoqigiaoigg = false;
        goto myiuomaaisokucsu;
        mgiuikekqwwecquo:
        cegwmkmcgiuyegci:
        goto kgyegeweeukkoaso;
        wqecaeewcikcakce:
        ikcygyysmcswyoew:
        goto qoecqiuqgykayeau;
        giugammuqoewuoyc:
        goto woyiagsemicyskkg;
        goto imkouaauqmwgkygg;
        simyiqmsauwogeke:
        goto keewyswqkywqwiig;
        goto gcoiayyaeggagsam;
        kisaauwmeykgqgqm:
        return $ksaameoqigiaoigg;
        goto okkeywoaaumimwag;
        akiqygykgeusywsc:
        if ($keccaugmemegoimu->wkaoyeoamyiacyeg() !== 200) {
            goto ikcygyysmcswyoew;
        }
        goto koaywkwgumwauyce;
        kgyegeweeukkoaso:
        wewusgmimaqoasim:
        goto ieemwgoqewsyowsa;
        myiuomaaisokucsu:
        if (!$keccaugmemegoimu instanceof ResponseInterface) {
            goto iiyqieuwqywsuwie;
        }
        goto akiqygykgeusywsc;
        ieemwgoqewsyowsa:
        isikkmukiimiqoie:
        goto simyiqmsauwogeke;
        okkeywoaaumimwag:
    }
    
    public function yquuyiaogsgwmaem($sogksuscggsicmac, &$wumguikkgaigkoee = '', $csowmwgiiyueuius = self::SUCCESS, $aqogmkcqyeosckkm = self::ERRORS) : bool
    {
        goto yikkososcyoeiccm;
        cyegcyuoeqoeuwea:
        if (!is_string($ueeagokqmgisgauy)) {
            goto kuiqqcsmccogwkii;
        }
        goto gmowaimiewisgwam;
        gyuwokmaygmksmow:
        kuiqqcsmccogwkii:
        goto keakqecogkuocqcw;
        cuiyioeewqwsiqsw:
        cceeiumiqwqcumwm:
        goto igsmyoowcmiwakua;
        igsmyoowcmiwakua:
        return $eisqsskqimiigkay;
        goto awyemswwoieewoqa;
        uucieweckoqqsoks:
        $eisqsskqimiigkay = false;
        goto cuiyioeewqwsiqsw;
        yecgscseggkuesec:
        wgecgiiowkogkymc:
        goto uucieweckoqqsoks;
        koousagcuqiyeogw:
        $ueeagokqmgisgauy = ManipulateArray::get($sogksuscggsicmac, $aqogmkcqyeosckkm, []);
        goto yiuqimuyesqegyym;
        yiuqimuyesqegyym:
        if (is_array($ueeagokqmgisgauy)) {
            goto aowogueuuaoissso;
        }
        goto cyegcyuoeqoeuwea;
        keakqecogkuocqcw:
        goto wgecgiiowkogkymc;
        goto cgcmcsgeeoecumwq;
        eoyaywigcimwcssu:
        foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) {
            $wumguikkgaigkoee[] = sprintf("\45\163\x20\50\45\163\72\x20\x25\163\x29", ManipulateArray::get($iswcokucwmiosiaq, "\155\145\x73\163\141\x67\x65"), __("\x45\162\x72\x6f\x72\40\103\x6f\x64\145", PR__CMN__FOUNDATION), ManipulateArray::get($iswcokucwmiosiaq, "\x63\157\x64\145"));
            sygeyoyqkigmaqcy:
        }
        goto csesgauismawagku;
        ocysuimysygiwaca:
        if (ManipulateArray::get($sogksuscggsicmac, $csowmwgiiyueuius)) {
            goto cceeiumiqwqcumwm;
        }
        goto koousagcuqiyeogw;
        yikkososcyoeiccm:
        $eisqsskqimiigkay = true;
        goto ocysuimysygiwaca;
        gmowaimiewisgwam:
        $wumguikkgaigkoee .= $ueeagokqmgisgauy;
        goto gyuwokmaygmksmow;
        csesgauismawagku:
        kkkaqoyswqieiwki:
        goto yecgscseggkuesec;
        cgcmcsgeeoecumwq:
        aowogueuuaoissso:
        goto eoyaywigcimwcssu;
        awyemswwoieewoqa:
    }
}

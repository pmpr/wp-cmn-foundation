<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\File;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait;
use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Register\RegisterTaxonomy;

class CTX extends Container
{
    use FieldTrait;
    
    protected ?RegisterTaxonomy $register = null;
    
    protected ?array $fields = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto gemkckmaeeoqyusu;
        gemkckmaeeoqyusu:
        if ($aokagokqyuysuksm) {
            goto ieuuecggquoakswk;
        }
        goto ukoemwwgmqeggiai;
        ukoemwwgmqeggiai:
        $this->mgoeqkosywwaoqyw();
        goto moscmqueqcmsuqaq;
        moscmqueqcmsuqaq:
        if ($this->miwqiiqeegeqcwis()) {
            goto iqeceuygmigawkoy;
        }
        goto yiiaeaqyyakeieqa;
        yiiaeaqyyakeieqa:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa()));
        goto mymgcmggqauqoiee;
        mymgcmggqauqoiee:
        iqeceuygmigawkoy:
        goto hkyamaausyicywiq;
        ugkwkcaycececsay:
        ieuuecggquoakswk:
        goto wisgcoswiemiwicy;
        hkyamaausyicywiq:
        parent::__construct();
        goto ugkwkcaycececsay;
        wisgcoswiemiwicy:
    }
    public function wigskegsqequoeks()
    {
        goto aewweoqsskseouck;
        iaasuqsqgwgoecik:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto guigkeossquogciu;
        wggygymygomaekqo:
        $this->qcsmikeggeemccuu("\x61\144\155\151\x6e\137\151\156\x69\x74", [$this, "\171\x65\171\x69\x67\x75\171\x65\147\155\155\171\165\x73\x65\141"]);
        goto wmimsumiocyqcgyy;
        guigkeossquogciu:
        $this->qcsmikeggeemccuu("\x65\144\151\x74\145\x64\137{$ymqmyyeuycgmigyo}", [$this, "\171\147\x63\x61\x6b\x71\x75\x69\147\165\x75\163\163\163\163\x6f"], 99)->qcsmikeggeemccuu("\x63\162\x65\141\164\x65\x64\137{$ymqmyyeuycgmigyo}", [$this, "\171\x67\143\x61\x6b\x71\x75\151\147\165\165\x73\x73\163\x73\157"], 99)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\141\x64\x64\137\146\157\x72\155\137\x66\151\145\154\x64\163", [$this, "\157\x77\x6f\x67\x75\157\167\x77\145\145\x63\143\x75\171\165\x77"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\145\144\151\164\137\x66\157\162\155\x5f\x66\151\x65\154\144\x73", [$this, "\151\x75\145\167\161\157\x71\167\x6d\141\163\x75\147\x6f\151\x75"], 10, 2);
        goto wuygicaasgauqiau;
        aewweoqsskseouck:
        $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\151\x6e\151\x74"], 99)->qcsmikeggeemccuu("\x61\144\155\x69\156\137\155\145\x6e\165", [$this, "\153\x6d\171\167\163\x73\171\x65\x77\141\x6f\x75\x73\x6b\141\153"]);
        goto iwimkwucugqaemcu;
        wmimsumiocyqcgyy:
        qgkgmseosomqwicm:
        goto iaasuqsqgwgoecik;
        iwimkwucugqaemcu:
        if (!method_exists($this, "\x79\145\x79\151\147\165\171\145\147\x6d\x6d\171\x75\x73\x65\x61")) {
            goto qgkgmseosomqwicm;
        }
        goto wggygymygomaekqo;
        wuygicaasgauqiau:
    }
    public function init()
    {
        $this->register();
    }
    public function register()
    {
        goto mooigscaaqwuikos;
        ckwawmwkggqciguw:
        if (is_array($mqyaskyaekmkegmg)) {
            goto kscwqewukwiwsyqc;
        }
        goto mwcayueuqqcqkseo;
        gogcokmkciecweag:
        $sogksuscggsicmac = DecoratorTaxonomy::register(substr($ymqmyyeuycgmigyo, 0, 32), $mqyaskyaekmkegmg, array_filter($ywmkwiwkosakssii));
        goto oyuwoucekcqqaeca;
        kcqwswsyeosyiqsa:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto aqwgmgywcwigwows;
        }
        goto ekeeiceksommsomi;
        iyeiaaacusqewyuc:
        $acqqmqmcquukaqsc = [];
        goto ckwawmwkggqciguw;
        ykaasokuacwyuoig:
        akusqieqmgiqoyio:
        goto agmakygyoykkegws;
        ekeeiceksommsomi:
        $mqyaskyaekmkegmg = $yyksucsgisomecgg->aaamyckgicycisqq();
        goto qmickcoaaqioicsy;
        mooigscaaqwuikos:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto icumymgsimikeayo;
        wikicusisykwugay:
        iokkycyguewayiks:
        goto ugsmoyiommwgecww;
        oyuwoucekcqqaeca:
        if (is_wp_error($sogksuscggsicmac)) {
            goto akusqieqmgiqoyio;
        }
        goto iyeiaaacusqewyuc;
        agmakygyoykkegws:
        aqwgmgywcwigwows:
        goto gmwkmgkmawygkuuq;
        qmickcoaaqioicsy:
        $aaokuekaimigoyue = $yyksucsgisomecgg->kuggecgwaickowwu("\163\x6c\x75\x67");
        goto gogcokmkciecweag;
        aeicswayaimcoecy:
        goto cokkyaiqeeeecuqi;
        goto ewewgkiuwacswmmk;
        gkiwqegsueqsmweu:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto ykaasokuacwyuoig;
        eoyukkkuoiqakwgy:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg, true);
        goto aeicswayaimcoecy;
        icumymgsimikeayo:
        $ywmkwiwkosakssii = $yyksucsgisomecgg->sacmkccceuywoqsq();
        goto eyesqscgaacqewus;
        ugsmoyiommwgecww:
        cokkyaiqeeeecuqi:
        goto gkiwqegsueqsmweu;
        eyesqscgaacqewus:
        $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
        goto kcqwswsyeosyiqsa;
        mwcayueuqqcqkseo:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg);
        goto eoyukkkuoiqakwgy;
        keyyeiogkmkeiciu:
        foreach ($mqyaskyaekmkegmg as $useksmwkuswkwcqg) {
            goto qecaimiuamcewigw;
            ggmguqccswssgoyo:
            ieokwscuyyokwuwa:
            goto uuagyckakcaquqss;
            ygmwoyocigkoocau:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, true);
            goto ggmguqccswssgoyo;
            qecaimiuamcewigw:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg);
            goto ygmwoyocigkoocau;
            uuagyckakcaquqss:
        }
        goto wikicusisykwugay;
        ewewgkiuwacswmmk:
        kscwqewukwiwsyqc:
        goto keyyeiogkmkeiciu;
        gmwkmgkmawygkuuq:
    }
    public function kmywssyewaouskak()
    {
        goto eeucaygkomwqoiys;
        oicciogwwqmcoaue:
        add_submenu_page($cyiwaggmwimigmcc, $yyksucsgisomecgg->qeeuwmmksmqiuywg(), $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\x65\144\x69\164\x5f\x70\x6f\163\164\x73", "\x65\144\151\164\55\164\141\147\163\x2e\160\x68\160\x3f\164\141\170\157\156\157\155\x79\75{$yyksucsgisomecgg->aakmagwggmkoiiyu()}", false);
        goto ceugguwawauqcgqc;
        ciakokmuycsamoew:
        if (!is_string($cyiwaggmwimigmcc)) {
            goto oougqkueomqysagg;
        }
        goto oicciogwwqmcoaue;
        eeucaygkomwqoiys:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto oguamsyoaimwgqos;
        oguamsyoaimwgqos:
        $cyiwaggmwimigmcc = $yyksucsgisomecgg->egockcwgmeocqeqc();
        goto ciakokmuycsamoew;
        ceugguwawauqcgqc:
        oougqkueomqysagg:
        goto umesgccceskkwcek;
        umesgccceskkwcek:
    }
    
    public function migkyseymeomymmy() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy($this->miwqiiqeegeqcwis());
    }
    public function mgoeqkosywwaoqyw()
    {
    }
    
    public function ygcakquiguusssso($iwewcwusemqaiggk)
    {
        goto gowseceuccyoykqg;
        gowseceuccyoykqg:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto wmmymakwgisiiemm;
        auawcgwsgmocyikg:
        emmyeiacygokoyqm:
        goto csiywiqqacqiooam;
        wmmymakwgisiiemm:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($this->miwqiiqeegeqcwis());
        goto sqmgyqqesycegaog;
        sqmgyqqesycegaog:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ycsyqeiqmgkqsykm;
            ycsyqeiqmgkqsykm:
            if (!$aiowsaccomcoikus instanceof File) {
                goto ikuegsumgygqkoiq;
            }
            goto wquwgeoesiweimsy;
            nwisymowgiuysywm:
            quykkkqkscyeakyc:
            goto uoukmckqqaewiack;
            wquwgeoesiweimsy:
            $uusmaiomayssaecw = "{$aiowsaccomcoikus->mwikyscisascoeea()}\x5f\151\144";
            goto kmikysaiomgcocuq;
            kmikysaiomgcocuq:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto euoyyamaesgwcumc;
            euoyyamaesgwcumc:
            ikuegsumgygqkoiq:
            goto iusisyuoomsaqyge;
            iusisyuoomsaqyge:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto iosumqekeyuyscwm;
            iosumqekeyuyscwm:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto nwisymowgiuysywm;
            uoukmckqqaewiack:
        }
        goto auawcgwsgmocyikg;
        csiywiqqacqiooam:
    }
    
    public function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    public function mkksewyosgeumwsa(?Field $aiowsaccomcoikus) : self
    {
        goto cgmoawqqgooiomam;
        gkswmkowgekmoecu:
        return $this;
        goto owmcuewayukusqmo;
        igsmwqseogmyegee:
        ccuemieucuwkaiug:
        goto gkswmkowgekmoecu;
        cgmoawqqgooiomam:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto ccuemieucuwkaiug;
        }
        goto ckyyiokeqmgokkii;
        ckyyiokeqmgokkii:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto igsmwqseogmyegee;
        owmcuewayukusqmo:
    }
    
    public function owoguowweeccuyuw($kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya);
    }
    
    public function oyeskqayoscwciem() : RegisterTaxonomy
    {
        goto qqicgmcqukmywgwu;
        mousymoamqcmauki:
        $this->register = new RegisterTaxonomy();
        goto yyiysucuymcuyycw;
        qqicgmcqukmywgwu:
        if ($this->register) {
            goto cueascwqacykggki;
        }
        goto mousymoamqcmauki;
        agcwmeycmgsyqeok:
        return $this->register;
        goto esucokaeqgmiaige;
        yyiysucuymcuyycw:
        cueascwqacykggki:
        goto agcwmeycmgsyqeok;
        esucokaeqgmiaige:
    }
    
    public function wqeaqyusommocmsi($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie)
    {
        goto isyassymuywsayyy;
        qyckkgmuykqyaieq:
        ManipulateTerm::ksmqawcowkmegigw($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie);
        goto gwwgqgceskcqukig;
        gwwgqgceskcqukig:
        oqgmiysscyygyaqg:
        goto gqugaamwqqookmyc;
        isyassymuywsayyy:
        if (!$aiowsaccomcoikus) {
            goto oqgmiysscyygyaqg;
        }
        goto qyckkgmuykqyaieq;
        gqugaamwqqookmyc:
    }
    
    public function iuewqoqwmasugoiu($iwewcwusemqaiggk, $kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk = null) : ?array
    {
        return $this->sscegwueamckwmcy("\164\141\x78\x6f\x6e\x6f\155\x79\x5f{$kesssewsiegssiya}\137\143\165\x73\x74\x6f\155\x5f\146\x69\145\154\144\163", $this->fields, $kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk = null)
    {
        goto kaccuycsyukugwao;
        ygsiuoyewwecoemg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            eoeoaoomoeayemks:
        }
        goto ywuegkmgqmweogqq;
        kaccuycsyukugwao:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto wqmkwsgmeceakwaw;
        ceasygsiuksuwwoc:
        aucqswuoeqocuiqk:
        goto smwkgmymskokcoek;
        wqmkwsgmeceakwaw:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto aucqswuoeqocuiqk;
        }
        goto ygsiuoyewwecoemg;
        ywuegkmgqmweogqq:
        ayemyskkicqyskos:
        goto ceasygsiuksuwwoc;
        smwkgmymskokcoek:
    }
    
    public function uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, $kiyaqqoyagguscog = false) : array
    {
        goto oimegeaimoymkmsc;
        wcesgqaeqiqawysc:
        if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue && $useksmwkuswkwcqg)) {
            goto mimogmagkwkiyskc;
        }
        goto aemayukkiiaiueaq;
        myemeeaqoywegsok:
        ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2);
        goto caoauekaaegosauw;
        oimegeaimoymkmsc:
        $ekuqiqmikiicgoss = [];
        goto wcesgqaeqiqawysc;
        aemayukkiiaiueaq:
        $ucccueqywigcukcc = "{$aaokuekaimigoyue}\x2f\50\x5b\136\x2f\135\x2b\x29\57{$useksmwkuswkwcqg}\57";
        goto kawmoeuiyqkqmsmo;
        sieseicooqugaqgo:
        $ucccueqywigcukcc .= "\x3f\44";
        goto goukwgqscacouyqs;
        goukwgqscacouyqs:
        $ekuqiqmikiicgoss = [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\x6f\160"];
        goto cyekoicwwmekycyy;
        qcmwkecooegwkkks:
        if (!$kiyaqqoyagguscog) {
            goto sgaaocqwgeqismmo;
        }
        goto myemeeaqoywegsok;
        kawmoeuiyqkqmsmo:
        $gqgemcmoicmgaqie = "\x69\156\x64\145\170\56\x70\x68\160\77\160\157\163\x74\137\x74\171\x70\x65\75{$useksmwkuswkwcqg}\x26{$ymqmyyeuycgmigyo}\75\x24\155\x61\164\143\150\145\x73\133\x31\135";
        goto qcmwkecooegwkkks;
        cyekoicwwmekycyy:
        mimogmagkwkiyskc:
        goto yegimqcqoeaacsyq;
        yegimqcqoeaacsyq:
        return $ekuqiqmikiicgoss;
        goto remiaquuossuqoma;
        caoauekaaegosauw:
        sgaaocqwgeqismmo:
        goto sieseicooqugaqgo;
        remiaquuossuqoma:
    }
}

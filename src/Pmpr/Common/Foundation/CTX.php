<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        mymgcmggqauqoiee:
        iqeceuygmigawkoy:
        goto hkyamaausyicywiq;
        ugkwkcaycececsay:
        ieuuecggquoakswk:
        goto wisgcoswiemiwicy;
        hkyamaausyicywiq:
        parent::__construct();
        goto ugkwkcaycececsay;
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
        wisgcoswiemiwicy:
    }
    public function wigskegsqequoeks()
    {
        goto aewweoqsskseouck;
        wggygymygomaekqo:
        $this->qcsmikeggeemccuu("\141\x64\x6d\x69\156\137\151\156\x69\x74", [$this, "\171\145\x79\x69\147\165\x79\x65\147\x6d\x6d\x79\x75\163\x65\x61"]);
        goto wmimsumiocyqcgyy;
        iwimkwucugqaemcu:
        if (!method_exists($this, "\x79\145\x79\x69\x67\x75\x79\145\147\x6d\155\x79\165\163\145\x61")) {
            goto qgkgmseosomqwicm;
        }
        goto wggygymygomaekqo;
        aewweoqsskseouck:
        $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\151\156\151\164"], 99)->qcsmikeggeemccuu("\x61\144\x6d\x69\156\x5f\155\145\156\165", [$this, "\153\x6d\x79\x77\x73\163\x79\x65\x77\141\x6f\x75\163\153\141\153"]);
        goto iwimkwucugqaemcu;
        iaasuqsqgwgoecik:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto guigkeossquogciu;
        guigkeossquogciu:
        $this->qcsmikeggeemccuu("\x65\x64\x69\164\x65\x64\137{$ymqmyyeuycgmigyo}", [$this, "\x79\x67\x63\x61\x6b\x71\165\151\x67\165\165\163\x73\x73\163\x6f"], 99)->qcsmikeggeemccuu("\143\x72\145\x61\x74\145\x64\x5f{$ymqmyyeuycgmigyo}", [$this, "\171\147\143\141\153\x71\165\x69\x67\x75\x75\x73\163\163\x73\x6f"], 99)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\x61\144\x64\137\146\157\162\155\x5f\146\x69\145\154\144\163", [$this, "\x6f\167\x6f\x67\165\x6f\167\x77\145\x65\x63\143\x75\x79\165\167"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\x65\x64\151\164\x5f\x66\157\x72\x6d\x5f\x66\x69\x65\x6c\x64\x73", [$this, "\x69\165\145\x77\161\157\x71\167\155\x61\x73\x75\x67\x6f\151\x75"], 10, 2);
        goto wuygicaasgauqiau;
        wmimsumiocyqcgyy:
        qgkgmseosomqwicm:
        goto iaasuqsqgwgoecik;
        wuygicaasgauqiau:
    }
    public function init()
    {
        $this->register();
    }
    public function register()
    {
        goto mooigscaaqwuikos;
        agmakygyoykkegws:
        aqwgmgywcwigwows:
        goto gmwkmgkmawygkuuq;
        qmickcoaaqioicsy:
        $aaokuekaimigoyue = $yyksucsgisomecgg->kuggecgwaickowwu("\x73\x6c\x75\x67");
        goto gogcokmkciecweag;
        wikicusisykwugay:
        iokkycyguewayiks:
        goto ugsmoyiommwgecww;
        ekeeiceksommsomi:
        $mqyaskyaekmkegmg = $yyksucsgisomecgg->aaamyckgicycisqq();
        goto qmickcoaaqioicsy;
        ewewgkiuwacswmmk:
        kscwqewukwiwsyqc:
        goto keyyeiogkmkeiciu;
        mooigscaaqwuikos:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto icumymgsimikeayo;
        eoyukkkuoiqakwgy:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg, true);
        goto aeicswayaimcoecy;
        gogcokmkciecweag:
        $sogksuscggsicmac = DecoratorTaxonomy::register(substr($ymqmyyeuycgmigyo, 0, 32), $mqyaskyaekmkegmg, array_filter($ywmkwiwkosakssii));
        goto oyuwoucekcqqaeca;
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
        ugsmoyiommwgecww:
        cokkyaiqeeeecuqi:
        goto gkiwqegsueqsmweu;
        ckwawmwkggqciguw:
        if (is_array($mqyaskyaekmkegmg)) {
            goto kscwqewukwiwsyqc;
        }
        goto mwcayueuqqcqkseo;
        gkiwqegsueqsmweu:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto ykaasokuacwyuoig;
        ykaasokuacwyuoig:
        akusqieqmgiqoyio:
        goto agmakygyoykkegws;
        aeicswayaimcoecy:
        goto cokkyaiqeeeecuqi;
        goto ewewgkiuwacswmmk;
        icumymgsimikeayo:
        $ywmkwiwkosakssii = $yyksucsgisomecgg->sacmkccceuywoqsq();
        goto eyesqscgaacqewus;
        eyesqscgaacqewus:
        $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
        goto kcqwswsyeosyiqsa;
        mwcayueuqqcqkseo:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg);
        goto eoyukkkuoiqakwgy;
        kcqwswsyeosyiqsa:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto aqwgmgywcwigwows;
        }
        goto ekeeiceksommsomi;
        oyuwoucekcqqaeca:
        if (is_wp_error($sogksuscggsicmac)) {
            goto akusqieqmgiqoyio;
        }
        goto iyeiaaacusqewyuc;
        iyeiaaacusqewyuc:
        $acqqmqmcquukaqsc = [];
        goto ckwawmwkggqciguw;
        gmwkmgkmawygkuuq:
    }
    public function kmywssyewaouskak()
    {
        goto eeucaygkomwqoiys;
        oicciogwwqmcoaue:
        add_submenu_page($cyiwaggmwimigmcc, $yyksucsgisomecgg->qeeuwmmksmqiuywg(), $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\145\x64\x69\x74\137\x70\157\163\164\163", "\145\144\x69\164\x2d\164\x61\x67\x73\x2e\160\x68\160\77\x74\x61\x78\157\156\x6f\155\171\75{$yyksucsgisomecgg->aakmagwggmkoiiyu()}", false);
        goto ceugguwawauqcgqc;
        eeucaygkomwqoiys:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto oguamsyoaimwgqos;
        ciakokmuycsamoew:
        if (!is_string($cyiwaggmwimigmcc)) {
            goto oougqkueomqysagg;
        }
        goto oicciogwwqmcoaue;
        ceugguwawauqcgqc:
        oougqkueomqysagg:
        goto umesgccceskkwcek;
        oguamsyoaimwgqos:
        $cyiwaggmwimigmcc = $yyksucsgisomecgg->egockcwgmeocqeqc();
        goto ciakokmuycsamoew;
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
        auawcgwsgmocyikg:
        emmyeiacygokoyqm:
        goto csiywiqqacqiooam;
        gowseceuccyoykqg:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto wmmymakwgisiiemm;
        wmmymakwgisiiemm:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($this->miwqiiqeegeqcwis());
        goto sqmgyqqesycegaog;
        sqmgyqqesycegaog:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ycsyqeiqmgkqsykm;
            euoyyamaesgwcumc:
            ikuegsumgygqkoiq:
            goto iusisyuoomsaqyge;
            kmikysaiomgcocuq:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto euoyyamaesgwcumc;
            ycsyqeiqmgkqsykm:
            if (!$aiowsaccomcoikus instanceof File) {
                goto ikuegsumgygqkoiq;
            }
            goto wquwgeoesiweimsy;
            iusisyuoomsaqyge:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto iosumqekeyuyscwm;
            wquwgeoesiweimsy:
            $uusmaiomayssaecw = "{$aiowsaccomcoikus->mwikyscisascoeea()}\x5f\x69\x64";
            goto kmikysaiomgcocuq;
            iosumqekeyuyscwm:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto nwisymowgiuysywm;
            nwisymowgiuysywm:
            quykkkqkscyeakyc:
            goto uoukmckqqaewiack;
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
        ckyyiokeqmgokkii:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto igsmwqseogmyegee;
        cgmoawqqgooiomam:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto ccuemieucuwkaiug;
        }
        goto ckyyiokeqmgokkii;
        igsmwqseogmyegee:
        ccuemieucuwkaiug:
        goto gkswmkowgekmoecu;
        owmcuewayukusqmo:
    }
    
    public function owoguowweeccuyuw($kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya);
    }
    
    public function oyeskqayoscwciem() : RegisterTaxonomy
    {
        goto qqicgmcqukmywgwu;
        qqicgmcqukmywgwu:
        if ($this->register) {
            goto cueascwqacykggki;
        }
        goto mousymoamqcmauki;
        yyiysucuymcuyycw:
        cueascwqacykggki:
        goto agcwmeycmgsyqeok;
        agcwmeycmgsyqeok:
        return $this->register;
        goto esucokaeqgmiaige;
        mousymoamqcmauki:
        $this->register = new RegisterTaxonomy();
        goto yyiysucuymcuyycw;
        esucokaeqgmiaige:
    }
    
    public function wqeaqyusommocmsi($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie)
    {
        goto isyassymuywsayyy;
        isyassymuywsayyy:
        if (!$aiowsaccomcoikus) {
            goto oqgmiysscyygyaqg;
        }
        goto qyckkgmuykqyaieq;
        gwwgqgceskcqukig:
        oqgmiysscyygyaqg:
        goto gqugaamwqqookmyc;
        qyckkgmuykqyaieq:
        ManipulateTerm::ksmqawcowkmegigw($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie);
        goto gwwgqgceskcqukig;
        gqugaamwqqookmyc:
    }
    
    public function iuewqoqwmasugoiu($iwewcwusemqaiggk, $kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk = null) : ?array
    {
        return $this->sscegwueamckwmcy("\164\x61\170\157\x6e\x6f\155\x79\137{$kesssewsiegssiya}\137\x63\x75\163\164\x6f\x6d\x5f\146\x69\x65\154\144\x73", $this->fields, $kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk = null)
    {
        goto kaccuycsyukugwao;
        kaccuycsyukugwao:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto wqmkwsgmeceakwaw;
        ceasygsiuksuwwoc:
        aucqswuoeqocuiqk:
        goto smwkgmymskokcoek;
        ygsiuoyewwecoemg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            eoeoaoomoeayemks:
        }
        goto ywuegkmgqmweogqq;
        ywuegkmgqmweogqq:
        ayemyskkicqyskos:
        goto ceasygsiuksuwwoc;
        wqmkwsgmeceakwaw:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto aucqswuoeqocuiqk;
        }
        goto ygsiuoyewwecoemg;
        smwkgmymskokcoek:
    }
    
    public function uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, $kiyaqqoyagguscog = false) : array
    {
        goto oimegeaimoymkmsc;
        kawmoeuiyqkqmsmo:
        $gqgemcmoicmgaqie = "\151\156\x64\145\x78\x2e\x70\x68\160\x3f\160\x6f\x73\164\x5f\164\171\x70\145\x3d{$useksmwkuswkwcqg}\46{$ymqmyyeuycgmigyo}\75\44\155\x61\x74\x63\150\x65\163\133\61\135";
        goto qcmwkecooegwkkks;
        wcesgqaeqiqawysc:
        if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue && $useksmwkuswkwcqg)) {
            goto mimogmagkwkiyskc;
        }
        goto aemayukkiiaiueaq;
        myemeeaqoywegsok:
        ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2);
        goto caoauekaaegosauw;
        cyekoicwwmekycyy:
        mimogmagkwkiyskc:
        goto yegimqcqoeaacsyq;
        sieseicooqugaqgo:
        $ucccueqywigcukcc .= "\x3f\44";
        goto goukwgqscacouyqs;
        aemayukkiiaiueaq:
        $ucccueqywigcukcc = "{$aaokuekaimigoyue}\x2f\50\133\136\57\135\53\51\x2f{$useksmwkuswkwcqg}\57";
        goto kawmoeuiyqkqmsmo;
        qcmwkecooegwkkks:
        if (!$kiyaqqoyagguscog) {
            goto sgaaocqwgeqismmo;
        }
        goto myemeeaqoywegsok;
        caoauekaaegosauw:
        sgaaocqwgeqismmo:
        goto sieseicooqugaqgo;
        yegimqcqoeaacsyq:
        return $ekuqiqmikiicgoss;
        goto remiaquuossuqoma;
        goukwgqscacouyqs:
        $ekuqiqmikiicgoss = [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\x6f\160"];
        goto cyekoicwwmekycyy;
        oimegeaimoymkmsc:
        $ekuqiqmikiicgoss = [];
        goto wcesgqaeqiqawysc;
        remiaquuossuqoma:
    }
}

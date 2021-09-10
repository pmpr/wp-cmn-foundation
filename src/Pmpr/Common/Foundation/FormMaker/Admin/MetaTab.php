<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin;

use Pmpr\Common\Foundation\Decorator\DecoratorAsset;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Traits\AttributeTrait;
use CMB2_Boxes;

class MetaTab extends Common
{
    use AttributeTrait;
    
    protected ?string $id = null;
    
    protected bool $hide = false;
    
    protected bool $once = false;
    
    protected bool $regKey = true;
    
    protected ?string $hook = null;
    
    protected ?string $topMenu = null;
    
    protected ?string $postsSlug = null;
    
    protected ?string $key = "\x6d\x79\137\x6f\x70\164\x69\157\156";
    
    protected array $menuArgs = ["\x76\151\145\167\x5f\143\141\x70\x61\x62\x69\x6c\151\164\x79" => '', "\160\x61\x72\145\156\164\137\163\154\x75\x67" => '', "\160\141\x67\145\x5f\164\x69\164\x6c\x65" => '', "\155\x65\156\165\137\164\151\x74\154\x65" => '', "\143\x61\160\141\x62\151\x6c\151\164\171" => "\x6d\141\x6e\x61\147\x65\x5f\x6f\160\164\151\x6f\x6e\x73", "\x6d\145\x6e\165\x5f\163\x6c\165\147" => '', "\151\x63\x6f\156\x5f\165\x72\154" => '', "\160\157\x73\x69\x74\x69\x6f\156" => null, "\x6e\x65\164\167\157\162\153" => false];
    
    protected array $tabs = [];
    
    protected int $column = 1;
    
    protected $saveText = false;
    
    protected $resetText = false;
    
    protected array $load = [];
    
    protected ?string $title = '';
    
    protected ?string $page = null;
    
    protected ?array $metaBoxes = [];
    
    public function __construct($uusmaiomayssaecw = null)
    {
        goto wioequuiyigoaass;
        komcawukmomgkqog:
        $this->key = $uusmaiomayssaecw;
        goto caocugyuikeekyom;
        wioequuiyigoaass:
        if (!(is_admin() && class_exists("\x43\115\x42\62"))) {
            goto owakcoywswieyewa;
        }
        goto kswyqgqqygaouiuk;
        ouwcsmcycymqmecm:
        owakcoywswieyewa:
        goto mcoqgkqqocieqygg;
        caocugyuikeekyom:
        parent::__construct();
        goto ouwcsmcycymqmecm;
        kswyqgqqygaouiuk:
        $this->id = $this->iaqckqwoiseyqaku();
        goto komcawukmomgkqog;
        mcoqgkqqocieqygg:
    }
    
    public function qsqiqgmeoowykuue() : ?array
    {
        return $this->metaBoxes;
    }
    
    public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self
    {
        $this->metaBoxes[$qkweikswegyciaie->mwikyscisascoeea()] = $qkweikswegyciaie;
        return $this;
    }
    
    public function swqsasqieqqgusew(?string $suaemuyiacqyugsm) : self
    {
        $this->page = $suaemuyiacqyugsm;
        return $this;
    }
    
    public function kyqakacqeumicgag() : ?string
    {
        return $this->page;
    }
    
    public function ecogksqmogoywequ(bool $caeimyuwaykuuaay) : self
    {
        $this->hide = $caeimyuwaykuuaay;
        return $this;
    }
    
    public function ekwgmoqoeywwwccw() : bool
    {
        return $this->hide;
    }
    
    public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self
    {
        $this->title = $meqocwsecsywiiqs;
        return $this;
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function licekmysugkqeoay() : array
    {
        return $this->menuArgs;
    }
    
    public function qaygoqgeieeugsey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->menuArgs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $this;
    }
    
    public function mmsykuomogaqoaye() : ?string
    {
        return $this->hook;
    }
    
    public function oggwewqswcggccae(?string $iaakskwmyqceoscy) : self
    {
        $this->hook = $iaakskwmyqceoscy;
        return $this;
    }
    
    public function ceiqwucmgawwmawo($ioeaaqcyogamwwqc) : self
    {
        $this->saveText = $ioeaaqcyogamwwqc;
        return $this;
    }
    
    public function kusoyyuwiukiokww()
    {
        return $this->saveText;
    }
    
    public function kkigeuaeguyueaem($kqkwemukaemqoyas) : self
    {
        $this->resetText = $kqkwemukaemqoyas;
        return $this;
    }
    
    public function occsuagsiuuimcoy()
    {
        return $this->resetText;
    }
    
    public function eigooueumicckoge() : array
    {
        return $this->load;
    }
    
    public function agcaegggmmeuammg($uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->licekmysugkqeoay(), $uusmaiomayssaecw);
    }
    
    public function ecmssiawmckmucas(bool $msykisgooaaamcio) : self
    {
        $this->regKey = $msykisgooaaamcio;
        return $this;
    }
    
    public function agciemoaikwmiugi() : bool
    {
        return $this->regKey;
    }
    
    public function iaqckqwoiseyqaku() : string
    {
        return "\x63\155\x6f" . rand(1000, 99999);
    }
    
    public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self
    {
        goto siioyccqcugcmkoy;
        vaekgwkiiqmwmoey:
        $this->column = $qgoqiacsiccwoawi;
        goto aqsuuuwagsyyooak;
        aqsuuuwagsyyooak:
        return $this;
        goto sukooaksmwmweysu;
        meekmmeswcggewek:
        umcsysgcksumioak:
        goto vaekgwkiiqmwmoey;
        owoiuwqgwcseogig:
        $qgoqiacsiccwoawi = 1;
        goto meekmmeswcggewek;
        siioyccqcugcmkoy:
        if (!($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1)) {
            goto umcsysgcksumioak;
        }
        goto owoiuwqgwcseogig;
        sukooaksmwmweysu:
    }
    
    public function myywwqkyiwawwquy() : int
    {
        return $this->column;
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return $this->key;
    }
    
    public function gcgmwakaoecqcuwo(?string $uusmaiomayssaecw) : self
    {
        $this->key = $uusmaiomayssaecw;
        return $this;
    }
    public function wigskegsqequoeks()
    {
        goto gkwskkyusocmckci;
        oaymsekakyassacy:
        parent::wigskegsqequoeks();
        goto oqaqkwgyiegaoiyk;
        wgsmemaiyicwmagy:
        $this->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\x5f\150\145\141\x64", [$this, "\x75\x75\x71\161\153\147\171\161\x65\x6b\x6d\x67\x79\143\147\x71"])->qcsmikeggeemccuu("\x61\144\155\x69\156\137\151\156\x69\x74", [$this, "\x79\145\x79\x69\x67\165\171\145\x67\155\x6d\171\165\163\x65\141"])->qcsmikeggeemccuu("\x61\x64\155\151\x6e\137\145\156\x71\165\145\x75\145\x5f\x73\143\162\151\x70\164\x73", [$this, "\167\x71\x71\143\153\153\x6d\x71\141\153\151\x71\x75\x79\x63\163"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\x61\144\x6d\151\156\x5f\155\145\156\x75", [$this, "\x73\157\143\143\x6f\x6d\x61\153\167\145\161\147\163\153\151\x63"], 12)->qcsmikeggeemccuu("\143\x6d\142\x32\137\x72\145\156\144\145\162\137\157\160\164\x69\157\x6e\x73\x5f\163\141\x76\x65\x5f\x62\165\x74\164\x6f\156", [$this, "\x65\143\171\x79\x71\x73\x67\167\167\x75\x75\153\147\x73\163\147"]);
        goto oaymsekakyassacy;
        gkwskkyusocmckci:
        
        $kiiwewqkgqgqwwue = is_multisite() && $this->agcaegggmmeuammg("\156\145\164\x77\157\162\x6b") ? "\156\x65\164\167\x6f\162\153\137" : '';
        goto wgsmemaiyicwmagy;
        oqaqkwgyiegaoiyk:
    }
    public function yeyiguyegmmyusea()
    {
        goto esuscykksesgueii;
        aaouuuqqgueesgum:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\151\x65\x77\137\143\141\160\x61\x62\x69\154\x69\x74\171");
        goto myuwisogyksycamk;
        qkowqoyoecgcqokw:
        $this->swqsasqieqqgusew($ewuukoycimkekouc ? $ewuukoycimkekouc : $this->cisyiemkeykgkomc());
        goto aaouuuqqgueesgum;
        awqcicwsamqqsisa:
        cascyqosimkguayi:
        goto meawiqkkayqiiyqa;
        ywcgeioasmogicki:
        $ewuukoycimkekouc = $this->agcaegggmmeuammg("\x6d\145\156\x75\x5f\x73\154\165\x67");
        goto aewggukwoeqcwkmw;
        esacgaegcuqsgqua:
        cqumukgqaesgokmu:
        goto cgiweqsmckusyige;
        emmcmeososokueak:
        $this->qaygoqgeieeugsey("\x76\151\x65\x77\137\x63\141\x70\141\x62\x69\154\x69\164\171", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\x63\141\160\x61\142\151\x6c\151\x74\171") : false);
        goto awqcicwsamqqsisa;
        myuwisogyksycamk:
        if ($eiiwoqgkgmosakem) {
            goto cascyqosimkguayi;
        }
        goto emmcmeososokueak;
        cgiweqsmckusyige:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\x61\x72\x65\x6e\164\137\x73\154\165\147");
        goto ywcgeioasmogicki;
        akwcamwokuciwqyw:
        register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc());
        goto esacgaegcuqsgqua;
        esuscykksesgueii:
        if (!$this->agciemoaikwmiugi()) {
            goto cqumukgqaesgokmu;
        }
        goto akwcamwokuciwqyw;
        aewggukwoeqcwkmw:
        $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom == $ewuukoycimkekouc);
        goto qkowqoyoecgcqokw;
        meawiqkkayqiiyqa:
    }
    
    public function ccauywsgwsesgmua() : bool
    {
        return $this->once;
    }
    
    public function ikqkaioeswqeaqkw(?string $uwkoaemcqekeqqkw) : self
    {
        $this->topMenu = $uwkoaemcqekeqqkw;
        return $this;
    }
    
    public function eyqwmckgumyaoams() : ?string
    {
        return $this->topMenu;
    }
    
    public function aeecsqoyykuekais(?string $sgeeumkioegwiymu) : self
    {
        $this->postsSlug = $sgeeumkioegwiymu;
        return $this;
    }
    
    public function kecacgyqmgeeqmme() : ?string
    {
        return $this->postsSlug;
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self
    {
        goto ksuwigakysoscwsi;
        uyowgcocwogyyogy:
        if (!$cciauwuwuqaywgce instanceof Tab) {
            goto wcyacsasikeesgay;
        }
        goto uackiwuiauimukuk;
        qycyawiweamkwamy:
        wcyacsasikeesgay:
        goto swwasksasqwewmck;
        swwasksasqwewmck:
        return $this;
        goto aoemiusqwqoimequ;
        ksuwigakysoscwsi:
        $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x74\141\142", $cciauwuwuqaywgce, $this);
        goto uyowgcocwogyyogy;
        uackiwuiauimukuk:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto qycyawiweamkwamy;
        aoemiusqwqoimequ:
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self
    {
        goto ksumissygaeqwiqk;
        ksumissygaeqwiqk:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            uciscoimiwuqsumg:
        }
        goto sskygwgyogmqgmqa;
        ocgkcmokykycoqwu:
        return $this;
        goto gkqugmqmcaaewcgu;
        sskygwgyogmqgmqa:
        ccewmwoameocgeck:
        goto ocgkcmokykycoqwu;
        gkqugmqmcaaewcgu:
    }
    
    public function myomgmiksogoikuc() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    public function qessyiueeiwwgyag()
    {
        goto icecgmamoqwkcgau;
        eieckmqqcmcqcyiq:
        wemkygaugegmuyeq:
        goto wgkicouqwayscuio;
        seiaqecoeskumemq:
        uscaqiyymkyywsws:
        goto ekskakueeqwgwyug;
        wqyesuemouksaeac:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto gqogoecueameuqem;
            goismqusymeooqae:
            $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\143\x6f\156\164\145\x6e\164", ["\151\x64" => $aokagokqyuysuksm, "\x63\x6f\154\x75\155\156" => $qgoqiacsiccwoawi, "\144\145\x73\x63\162\x69\x70\164\x69\x6f\x6e" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\x63\157\x6e\x74\x61\x69\156\x65\162\x5f\x61\x74\164\162\x73" => [
                "\x69\144" => "\x6f\x70\164\x2d\x63\x6f\156\x74\145\156\164\55{$aokagokqyuysuksm}",
                "\143\x6c\141\163\163" => "\157\x70\164\55\143\x6f\156\x74\145\156\164",
                
                "\144\141\x74\141\x2d\x62\x6f\170\x65\x73" => implode("\x2c", array_keys(ManipulateArray::yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue()))),
            ]]);
            goto iicewkmmisuecsku;
            oksseoqyoqqkmooc:
            if (empty($scwwkgcyecqgioqs)) {
                goto sciaeeisgiakmyyw;
            }
            goto cwsscisucgswsugy;
            aqimmiyqakwgogiw:
            $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea();
            goto ogaiqagqcemycaoo;
            skemwcqcyaqogacu:
            sciaeeisgiakmyyw:
            goto sakgiyogqqymcama;
            qqkqawesmskmkgqg:
            
            $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\x5f\x74\x61\x62\137\163\x69\x64\145\x5f\x6d\145\x74\x61\142\x6f\170\145\x73", $cciauwuwuqaywgce->weookicuaacigemm());
            goto oksseoqyoqqkmooc;
            gqogoecueameuqem:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto ussceksysakwguwm;
            }
            goto aqimmiyqakwgogiw;
            sakgiyogqqymcama:
            $iogqeouiuqyewuqe .= ManipulateHTML::uuccukgasskgimsq("\141", ["\x69\144" => "\x6f\x70\164\55\x74\141\142\55{$aokagokqyuysuksm}", "\150\x72\145\x66" => "\43", "\143\154\141\163\x73" => "\156\141\x76\x2d\x74\141\142\x20\x6f\x70\164\x2d\164\141\x62\40\160\162\55\x74\x61\142", "\144\x61\x74\141\x2d\157\x70\x74\143\x6f\x6e\x74\x65\x6e\164" => "\43\x6f\x70\x74\x2d\143\x6f\156\x74\145\156\164\55{$aokagokqyuysuksm}"], [$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()]);
            goto goismqusymeooqae;
            iicewkmmisuecsku:
            ussceksysakwguwm:
            goto wikqsescmyeeicwg;
            cwsscisucgswsugy:
            foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) {
                goto euukqqoeamysgaai;
                iocuaqcqoggiqgsw:
                cugygygwqumqwkmc:
                goto ecouksmuoaagmiwo;
                ucisggckygasmewc:
                if (!$qkweikswegyciaie->mukiwuqwmywsckco()) {
                    goto gqygesckmymkgeia;
                }
                goto waagiwegsgmwumyk;
                ecouksmuoaagmiwo:
                iyuyykuuksqgcoco:
                goto wscqsciugescaoys;
                euukqqoeamysgaai:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto cugygygwqumqwkmc;
                }
                goto eiuqssqeewecueaw;
                eiuqssqeewecueaw:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\163\151\x64\145\137\155\x65\164\x61\x62\x6f\170\x65", $qkweikswegyciaie);
                goto ucisggckygasmewc;
                waagiwegsgmwumyk:
                $qkweikswegyciaie->register($this->cisyiemkeykgkomc());
                goto gswosgeumoekweom;
                ggkemwwsugkckeag:
                $qgoqiacsiccwoawi = 2;
                goto eicsoeicqsmgyoyw;
                eicsoeicqsmgyoyw:
                gqygesckmymkgeia:
                goto iocuaqcqoggiqgsw;
                gswosgeumoekweom:
                $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\x6f\x72\155\x5f\155\x61\153\x65\162\x5f\164\x61\x62\137\163\151\144\145\137\x63\x6f\156\164\x61\x69\156\145\162\x5f{$aokagokqyuysuksm}", "\x73\151\x64\x65");
                goto ggkemwwsugkckeag;
                wscqsciugescaoys:
            }
            goto eiyeuegmoiyouoia;
            wikqsescmyeeicwg:
            ogemcuimywmoauai:
            goto uwckqwwyucaiekeq;
            ogaiqagqcemycaoo:
            $qgoqiacsiccwoawi = 1;
            goto qqkqawesmskmkgqg;
            eiyeuegmoiyouoia:
            scayqcumuauocuco:
            goto skemwcqcyaqogacu;
            uwckqwwyucaiekeq:
        }
        goto eieckmqqcmcqcyiq;
        usquuksweegcuqom:
        $kqweykcqkgkmoqay = '';
        goto wycuuweqayggsikk;
        oicyciugogouuwwi:
        if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || DecoratorUser::scmcyesmmikkucie($eiiwoqgkgmosakem)))) {
            goto uscaqiyymkyywsws;
        }
        goto syimweumwsqgoggc;
        wgkicouqwayscuio:
        $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]);
        goto mumcqaqeakgcquac;
        mumcqaqeakgcquac:
        echo $this->iuygowkemiiwqmiw("\x6d\x65\164\x61\164\x61\142", ["\153\x65\x79" => $this->cisyiemkeykgkomc(), "\x68\157\x6f\x6b" => $this->mmsykuomogaqoaye(), "\164\141\x62\163" => $iogqeouiuqyewuqe, "\160\141\147\145" => $this->kyqakacqeumicgag(), "\143\157\x6c\x75\x6d\156" => $this->myywwqkyiwawwquy(), "\x6e\x6f\156\143\145\x73" => [wp_nonce_field("\155\x65\164\x61\x2d\x62\x6f\170\55\157\x72\144\145\x72", "\155\145\x74\141\55\142\x6f\x78\55\157\x72\144\x65\162\x2d\x6e\157\156\x63\x65", false, false), wp_nonce_field("\x63\154\x6f\163\x65\144\160\x6f\x73\x74\x62\x6f\x78\145\163", "\143\x6c\157\x73\145\144\160\157\163\164\142\157\x78\x65\x73\156\x6f\156\x63\x65", false, false)], "\x62\x75\164\x74\157\156\163" => $qyukicweqoisimwg, "\x63\157\x6e\x74\145\x6e\x74\x73" => $kqweykcqkgkmoqay, "\x70\141\147\145\137\164\151\164\154\x65" => esc_html(get_admin_page_title()), "\x63\x6f\x6e\164\141\x69\156\145\x72\x5f\141\164\x74\x72\x73" => $this->ccekeuwwqqoiwuwy()]);
        goto caecagokwuouoymy;
        caecagokwuouoymy:
        
        $this->once = false;
        goto seiaqecoeskumemq;
        cyciqqkakeosegoe:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($this->equiyaoamqmaeckc());
        goto wqyesuemouksaeac;
        syimweumwsqgoggc:
        $iogqeouiuqyewuqe = '';
        goto usquuksweegcuqom;
        icecgmamoqwkcgau:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\166\x69\145\167\x5f\143\x61\x70\141\x62\x69\154\151\x74\x79");
        goto oicyciugogouuwwi;
        wycuuweqayggsikk:
        $this->qigsyyqgewgskemg("\x77\162\141\x70\x20\x63\155\x62\62\x2d\157\160\x74\151\x6f\x6e\163\x2d\160\x61\x67\x65\x20\143\155\x6f\x2d\157\160\164\x69\157\156\x73\55\x70\141\x67\x65")->qigsyyqgewgskemg($this->cisyiemkeykgkomc());
        goto cyciqqkakeosegoe;
        ekskakueeqwgwyug:
    }
    
    public function makgumuaykymweaq() : array
    {
        goto iouqskcmyecqmugo;
        aucmyygueiuuyygk:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\155\145\x6e\x75\x5f\164\151\x74\x6c\145") ? $this->agcaegggmmeuammg("\155\145\156\x75\x5f\x74\x69\x74\x6c\145") : $cmyoswawcimsecyy;
        goto yossisaqeggqeokq;
        aouikocwycssquau:
        
        $ywmkwiwkosakssii[] = $cmyoswawcimsecyy;
        goto aucmyygueiuuyygk;
        qayqouemeyoeqece:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\160\157\x73\151\x74\151\x6f\x6e") === null ? null : intval($this->agcaegggmmeuammg("\160\x6f\163\x69\x74\x69\x6f\x6e"));
        goto iwysasakqeoiqkea;
        awcyccimowsskmkc:
        
        $omwmuycmeqcqokom = $this->eyqwmckgumyaoams();
        goto ckycaecsiwgmomgk;
        iwysasakqeoiqkea:
        aaiekuiyqeykkgqq:
        goto geggqemsocqacmaa;
        qcscwisoukgswcum:
        
        if (!$omwmuycmeqcqokom) {
            goto swykkkgaawkssqma;
        }
        goto aywscouoieeksess;
        gcmcgcuycmoywakk:
        eskmyswgsosamscc:
        goto cewcquygkawaiscq;
        kagywssammsigeky:
        
        $ywmkwiwkosakssii[] = null;
        goto eoecsiksocyeiayk;
        iouqskcmyecqmugo:
        $ywmkwiwkosakssii = [];
        goto awcyccimowsskmkc;
        aywscouoieeksess:
        
        $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\77\160\x6f\x73\x74\137\x74\x79\x70\x65\x3d{$this->kecacgyqmgeeqmme()}" : '';
        goto gwomwiesykqmmwgo;
        xkqoueuawceokqwq:
        return $ywmkwiwkosakssii;
        goto ayaksmyymwewccuw;
        ckaoqocygksqsoqg:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x6d\145\x6e\x75\x5f\x73\154\x75\x67") ? $this->agcaegggmmeuammg("\x6d\x65\156\x75\x5f\163\x6c\165\147") : $this->cisyiemkeykgkomc();
        goto qomugkkimygqeioo;
        cewcquygkawaiscq:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x69\143\x6f\156\137\x75\162\x6c") ? $this->agcaegggmmeuammg("\151\143\x6f\x6e\x5f\165\x72\x6c") : '';
        goto qayqouemeyoeqece;
        qomugkkimygqeioo:
        
        $ywmkwiwkosakssii[] = [$this, "\x71\145\163\x73\x79\x69\165\x65\x65\x69\x77\x77\147\171\141\x67"];
        goto yyqwgugicycyeosk;
        yossisaqeggqeokq:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x63\141\160\141\x62\x69\x6c\151\164\171");
        goto ckaoqocygksqsoqg;
        keicyiqusacogocc:
        swykkkgaawkssqma:
        goto aouikocwycssquau;
        eoecsiksocyeiayk:
        goto aaiekuiyqeykkgqq;
        goto gcmcgcuycmoywakk;
        yyqwgugicycyeosk:
        
        if (!$omwmuycmeqcqokom) {
            goto eskmyswgsosamscc;
        }
        goto kagywssammsigeky;
        gwomwiesykqmmwgo:
        $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc;
        goto keicyiqusacogocc;
        asyskswoaqakaicc:
        
        $cmyoswawcimsecyy = $this->agcaegggmmeuammg("\x70\141\x67\145\x5f\x74\x69\164\x6c\x65") ? $this->agcaegggmmeuammg("\160\141\147\145\137\x74\151\164\154\x65") : $this->qcgakseyaikigqco();
        goto qcscwisoukgswcum;
        ckycaecsiwgmomgk:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\x61\162\x65\x6e\164\137\163\154\165\147") ? $this->agcaegggmmeuammg("\160\x61\x72\x65\156\164\x5f\x73\x6c\165\147") : $omwmuycmeqcqokom;
        goto asyskswoaqakaicc;
        geggqemsocqacmaa:
        
        $ywmkwiwkosakssii["\x63\142"] = $omwmuycmeqcqokom ? "\x61\x64\144\x5f\163\x75\142\x6d\145\156\x75\137\x70\x61\x67\x65" : "\141\x64\x64\137\x6d\x65\156\165\x5f\x70\141\147\x65";
        goto xkqoueuawceokqwq;
        ayaksmyymwewccuw:
    }
    public function soccomakweqgskic()
    {
        goto skmygcmwwgoaguwo;
        sqqocygqgwkmgwaa:
        $this->oggwewqswcggccae($iaakskwmyqceoscy);
        goto gwawuyimyyieguwa;
        imgiueoewusyceem:
        
        $iaakskwmyqceoscy = $ywmkwiwkosakssii["\143\142"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6]);
        goto sqqocygqgwkmgwaa;
        skmygcmwwgoaguwo:
        
        $ywmkwiwkosakssii = $this->makgumuaykymweaq();
        goto imgiueoewusyceem;
        uokioguceweaqqse:
        
        $this->siqqwyaiwgagokug();
        goto kiyuamyuuoiuwyag;
        icoggwwouyssowey:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\146\x74\145\x72\137\151\156\151\x74\137\150\x6f\x6f\153", false), $iaakskwmyqceoscy, $this);
        goto uokioguceweaqqse;
        gwawuyimyyieguwa:
        
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\x5f\160\162\151\156\164\x5f\163\164\171\x6c\x65\163\x2d{$this->mmsykuomogaqoaye()}", ["\103\115\102\x32\137\x68\157\x6f\153\x75\160", "\x65\x6e\x71\x75\145\165\145\137\143\155\x62\137\143\163\x73"])->qcsmikeggeemccuu("\141\x64\144\x5f\x6d\x65\x74\141\x5f\x62\157\x78\145\163\x5f{$this->mmsykuomogaqoaye()}", [$this, "\x77\141\x63\145\155\x6b\x71\x6d\151\x77\165\161\x6f\165\x67\141"])->qcsmikeggeemccuu("\x6c\157\141\144\x2d{$this->mmsykuomogaqoaye()}", [$this, "\x6f\x67\153\151\151\x65\167\163\143\x65\x6d\x61\161\x6b\x77\147"]);
        goto icoggwwouyssowey;
        kiyuamyuuoiuwyag:
    }
    private function siqqwyaiwgagokug()
    {
        goto uumykgkackouocgc;
        oamosmwemmmikgwo:
        wsqescacigqkgicg:
        goto kgeomuicikkomkie;
        oeeaaoyyucuuwkuu:
        foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) {
            goto giaoygyymwwoqmgw;
            mqsgkwkggseuykio:
            cmukqmgyeiqqyoye:
            goto oiymmoisooaocwyg;
            ouucymmowsuymakm:
            
            $aiamqeawckcsuaou = str_replace("\x5b\150\x6f\157\x6b\x5d", $iaakskwmyqceoscy, $aiamqeawckcsuaou);
            goto smsmeycaqoqkgciw;
            uycwieawygyekeoi:
            $sqqewmoeaekuyyas = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x70\162\151\157\162\151\164\171", 10));
            goto assouqamccmauuye;
            aooumysewqkyewii:
            
            $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas);
            goto mqsgkwkggseuykio;
            sgmowmgweoqysoqg:
            $aiamqeawckcsuaou = ManipulateArray::get($sqaougiyimwumoqi, "\141\143\164\x69\x6f\x6e");
            goto yaceceaiceoeweog;
            smsmeycaqoqkgciw:
            
            $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10;
            goto mwemsqwigyycweai;
            yaceceaiceoeweog:
            $ekiuyucoiagmscgy = ManipulateArray::get($sqaougiyimwumoqi, "\x63\141\x6c\154\x62\x61\x63\x6b");
            goto uycwieawygyekeoi;
            oiymmoisooaocwyg:
            umcyiqykwoeegomm:
            goto kuiqmwsgukiwgguq;
            assouqamccmauuye:
            if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi["\x61\143\x74\x69\157\156"], "\x2d\133\150\x6f\x6f\x6b\x5d"))) {
                goto cmukqmgyeiqqyoye;
            }
            goto ouucymmowsuymakm;
            giaoygyymwwoqmgw:
            $ywmkwiwkosakssii = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x61\162\147\163", 1));
            goto sgmowmgweoqysoqg;
            mwemsqwigyycweai:
            
            $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1;
            goto aooumysewqkyewii;
            kuiqmwsgukiwgguq:
        }
        goto oamosmwemmmikgwo;
        kgeomuicikkomkie:
        ieuoockquscyauiy:
        goto muqgkcsqkssymyem;
        amesgukaccuckock:
        $iaakskwmyqceoscy = $this->mmsykuomogaqoaye();
        goto smgugiqksqkmsuys;
        uumykgkackouocgc:
        $symcuwcoqkwoscsg = $this->eigooueumicckoge();
        goto amesgukaccuckock;
        smgugiqksqkmsuys:
        if (!$symcuwcoqkwoscsg) {
            goto ieuoockquscyauiy;
        }
        goto oeeaaoyyucuuwkuu;
        muqgkcsqkssymyem:
    }
    public function wacemkqmiwuqouga()
    {
        goto sgugyikwqeswcaos;
        qgaywmweyqweqkme:
        if (!$ywoucyskcquysiwc) {
            goto eccsqkqyiwqcocym;
        }
        goto gkemwmiykeiyuska;
        qkmoekswwgmogsgg:
        eccsqkqyiwqcocym:
        goto igcyymyqeawqkwgm;
        gkemwmiykeiyuska:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto ccyiauwwmeyoqmme;
            eceqwgecqgsugwyi:
            emoekgyaiwksgwoa:
            goto wamywgsgswmwgqes;
            cuawaegesykceuoi:
            mueoecmegwgakkuu:
            goto eceqwgecqgsugwyi;
            gwysqygykiqwgugc:
            $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\164\x61\142\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\155\145\x74\x61\142\x6f\170\145\x73", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this);
            goto aawgwoyccicqiooa;
            skoasiggcqccogqu:
            foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                goto gqocyuqyemgioaok;
                gqocyuqyemgioaok:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137\x74\x61\142\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\x6d\x65\x74\141\142\157\x78\137{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this);
                goto umsqoiumeuayywuy;
                umsqoiumeuayywuy:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto qskaaemigoqyogiu;
                }
                goto syqcoysgaociwkmu;
                syqcoysgaociwkmu:
                $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm();
                goto wymmooqweugwumuo;
                uscaccweyakkqycu:
                qskaaemigoqyogiu:
                goto ouqciucssmewqseu;
                wymmooqweugwumuo:
                $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\x73\x69\144\x65" ? "\156\x6f\x72\x6d\141\154" : $mgkceomocowocqyo);
                goto uscaccweyakkqycu;
                ouqciucssmewqseu:
                wikycciwekuugqec:
                goto ooiackiyssimocoy;
                ooiackiyssimocoy:
            }
            goto gckukekaicosscko;
            wigmqayoaagkekug:
            if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) {
                goto mueoecmegwgakkuu;
            }
            goto gwysqygykiqwgugc;
            gckukekaicosscko:
            ycumgkeaagawwkss:
            goto cuawaegesykceuoi;
            ccyiauwwmeyoqmme:
            $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc());
            goto wigmqayoaagkekug;
            aawgwoyccicqiooa:
            
            $uaqusiikkokccqou = ManipulateArray::yaeiiwwyckwugsem($uaqusiikkokccqou);
            goto skoasiggcqccogqu;
            wamywgsgswmwgqes:
        }
        goto qykisyqcgokcuiqs;
        igcyymyqeawqkwgm:
        foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) {
            goto wyswgiqmuwyiqama;
            acesmiyysymciaui:
            yyuwoaymcmgagkek:
            goto qmiwkumwuqywukmg;
            wyswgiqmuwyiqama:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto aaeaawawgiokuoqc;
            }
            goto yywywwmawmmyuwms;
            sgkkuuwoeouqgeqc:
            aaeaawawgiokuoqc:
            goto acesmiyysymciaui;
            yywywwmawmmyuwms:
            $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\163\x69\144\145");
            goto sgkkuuwoeouqgeqc;
            qmiwkumwuqywukmg:
        }
        goto imeagymkkagggkec;
        qykisyqcgokcuiqs:
        eamyyoygceikikcy:
        goto qkmoekswwgmogsgg;
        sgugyikwqeswcaos:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto qgaywmweyqweqkme;
        imeagymkkagggkec:
        weaaqiuymusyaoim:
        goto yeiwygkuemkoykis;
        yeiwygkuemkoykis:
    }
    
    public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\156\157\x72\155\x61\x6c")
    {
        goto wayyqekkqyeoeiwo;
        wayyqekkqyeoeiwo:
        if (!is_array($uoeiskamgscgeccq)) {
            goto koqciqwwomauuqci;
        }
        goto bocwykmykkkoioyq;
        aaowoieokoumsyqc:
        $this->qcsmikeggeemccuu("\x63\x6d\x62\x32\x5f\x73\x61\166\x65\x5f\x6f\x70\x74\x69\x6f\156\x73\x2d\x70\x61\x67\x65\x5f\146\151\145\154\x64\163\137{$aokagokqyuysuksm}", [$this, "\x67\157\171\x65\x6d\x69\153\x6f\x67\x65\165\163\153\x67\x61\x73"], 10, 2);
        goto msmcymkewouiuuse;
        twuqeqeisoggkkmg:
        coqcgqgsuagaoqgo:
        goto oouiqmqcowoqqwyi;
        kieygmqycuywqgay:
        if (!($this->myomgmiksogoikuc() && $mgkceomocowocqyo !== "\x73\151\144\145")) {
            goto oyymggqmgsymkyua;
        }
        goto wuagokiooeiuokqs;
        uoiooiwsmoysksqm:
        oyymggqmgsymkyua:
        goto cogiokiwsggickqu;
        bocwykmykkkoioyq:
        $uoeiskamgscgeccq = ManipulateArray::get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea());
        goto wmiywmecqmaeagwc;
        wmiywmecqmaeagwc:
        koqciqwwomauuqci:
        goto acewwgmgwegkqkmg;
        kqmyqoqwaoaqgemm:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x79\151\145\x6d\x75\x73\147\161\x6d\157\171\x6d\x73\x67\145\x67"]);
        goto ywqqgwecosgicaim;
        wuagokiooeiuokqs:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\145\167\163\x6b\153\167\x75\x77\x6b\153\153\x61\x71\167\147\x6b"]);
        goto uoiooiwsmoysksqm;
        cogiokiwsggickqu:
        
        if (!$uoeiskamgscgeccq->meta_box["\x63\x6c\157\x73\145\144"]) {
            goto ouasygcguacqoomm;
        }
        goto kqmyqoqwaoaqgemm;
        qsqcmociaogwiggs:
        $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo);
        goto twuqeqeisoggkkmg;
        ywqqgwecosgicaim:
        ouasygcguacqoomm:
        goto qsqcmociaogwiggs;
        acewwgmgwegkqkmg:
        if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) {
            goto coqcgqgsuagaoqgo;
        }
        goto ikegeeiesieogisa;
        msmcymkewouiuuse:
        $wyicesskmckwqeec = "\x70\157\x73\x74\142\x6f\x78\137\x63\x6c\x61\163\163\145\x73\137{$this->mmsykuomogaqoaye()}\x5f{$aokagokqyuysuksm}";
        goto kieygmqycuywqgay;
        ikegeeiesieogisa:
        $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea();
        goto aaowoieokoumsyqc;
        oouiqmqcowoqqwyi:
    }
    
    public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo)
    {
        add_meta_box($qkweikswegyciaie->mwikyscisascoeea(), $qkweikswegyciaie->iwqugwigmoiagwec(), [$this, "\x61\x75\x73\x79\x6d\155\x67\163\153\x73\x6f\x71\x77\x75\161\x6b"], $iaakskwmyqceoscy, $mgkceomocowocqyo, $qkweikswegyciaie->yywskysiycwkwsgw());
    }
    public function wqqckkmqakiquycs()
    {
        goto kwgcqoqewyqaoosk;
        oouomgcseggcugyi:
        DecoratorAsset::fowiaymccsmewemu($eueuqacmukymcyya, "\120\115\x50\x52\117\x70\164\124\x61\142\163", ["\153\145\171" => $this->kyqakacqeumicgag(), "\160\x6f\x73\164\164\x79\160\145" => $this->kecacgyqmgeeqmme(), "\144\x65\146\141\165\154\x74\164\141\x62" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']);
        goto agwiwkwmowuuscsg;
        qskqawaewmgquwmq:
        fsaiawesoowogmek:
        goto ueigayyqqomcisui;
        cekgqucskcgyoakq:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto uquugcsmgsmmwywo;
        kwgcqoqewyqaoosk:
        if (!$this->csaueuycewaiuaay()) {
            goto fsaiawesoowogmek;
        }
        goto cmqkcsayqiqugyce;
        oeuiyomkweusgawu:
        $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\55\x61\144\155\x69\156";
        goto ucwgiecogkaesuko;
        uquugcsmgsmmwywo:
        $cciauwuwuqaywgce = reset($ywoucyskcquysiwc);
        goto oouomgcseggcugyi;
        cmqkcsayqiqugyce:
        if (!$this->myomgmiksogoikuc()) {
            goto wwakqukuoioceyck;
        }
        goto oeuiyomkweusgawu;
        agwiwkwmowuuscsg:
        wwakqukuoioceyck:
        goto qskqawaewmgquwmq;
        ucwgiecogkaesuko:
        DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\x6d\x75\154\x74\x69\157\x70\x74\x73\56\x6a\x73"));
        goto cekgqucskcgyoakq;
        ueigayyqqomcisui:
    }
    public function uuqqkgyqekmgycgq()
    {
        goto eokeqaomwmsymuyi;
        uegaugwmyucmooyu:
        ManipulateHTML::awwqwouuoioauoaw("\163\164\171\x6c\145", ["\151\x64" => "\x70\162\55\x74\x61\142\55\x63\154\145\x61\x6e\165\x70\x2d\143\x73\x73"], true, $icyaoosaykeskiuu);
        goto ecmwimqmggogysoe;
        ecmwimqmggogysoe:
        wckioasgmwqugauw:
        goto emmseyuagaaweuek;
        eokeqaomwmsymuyi:
        if (!$this->myomgmiksogoikuc()) {
            goto wckioasgmwqugauw;
        }
        goto siqwwuiuqwcayisu;
        siqwwuiuqwcayisu:
        $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\155\x65\164\x61\164\141\142\x2e\143\163\163", ["\160\x61\147\x65" => $this->kyqakacqeumicgag()]);
        goto uegaugwmyucmooyu;
        emmseyuagaaweuek:
    }
    public function iaggsikquucsoiko()
    {
        ManipulateHTML::awwqwouuoioauoaw("\163\143\162\x69\160\164", [], true, "\x6a\x51\x75\145\x72\x79\50\144\x6f\143\165\x6d\x65\x6e\164\x29\56\162\145\x61\x64\171\x28\146\165\156\x63\x74\151\157\x6e\x28\51\173\x70\x6f\163\x74\142\x6f\170\145\163\x2e\x61\x64\x64\x5f\160\x6f\x73\164\x62\x6f\170\x5f\164\x6f\x67\147\x6c\x65\x73\x28\x22\160\157\163\164\142\157\x78\55\x63\157\x6e\164\x61\151\156\x65\162\x22\51\x3b\x7d\51\x3b");
    }
    public function ecyyqsgwwuukgssg()
    {
        goto iuwimogikcucogci;
        iuwimogikcucogci:
        if (!($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw())) {
            goto waiqusgyaeegsqqw;
        }
        goto ccequccokicuawum;
        cgaoeuasmuicmyoq:
        waiqusgyaeegsqqw:
        goto eqiigmauqkoswiys;
        ccequccokicuawum:
        echo $this->uaasoaieuoymsgsi();
        goto cgaoeuasmuicmyoq;
        eqiigmauqkoswiys:
    }
    
    private function uaicqoagkoeacawy($uoeiskamgscgeccq)
    {
        
        return isset($uoeiskamgscgeccq->meta_box["\163\150\x6f\167\x5f\x6f\x6e"]["\153\x65\x79"]) && $uoeiskamgscgeccq->meta_box["\x73\150\157\x77\137\157\x6e"]["\x6b\x65\171"] === "\x6f\x70\x74\x69\x6f\x6e\x73\x2d\160\x61\x67\145" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\163\x68\157\167\x5f\x6f\x6e"]["\x76\x61\x6c\165\145"]);
    }
    
    public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu)
    {
        goto meuckssskyaesage;
        wugsmyikwkyususo:
        gaweiceicsykweqs:
        goto icuoakkeswccquuo;
        ouomuyeqsugykuyk:
        add_settings_error("{$this->cisyiemkeykgkomc()}\x2d\156\157\164\151\x63\145\163", '', __("\x53\x65\164\164\x69\x6e\x67\x73\40\x55\x70\x64\141\x74\x65\144", PR__CMN__FOUNDATION), "\x75\x70\x64\x61\x74\x65\144");
        goto ucomiwksyqswgwmm;
        ucomiwksyqswgwmm:
        settings_errors("{$this->cisyiemkeykgkomc()}\55\x6e\157\164\x69\x63\145\x73");
        goto iwwmukmsgwoesima;
        meuckssskyaesage:
        if (!($this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $sogsqsawoyqmqsqu && !$this->ccauywsgwsesgmua())) {
            goto gaweiceicsykweqs;
        }
        goto ouomuyeqsugykuyk;
        iwwmukmsgwoesima:
        $this->once = true;
        goto wugsmyikwkyususo;
        icuoakkeswccquuo:
    }
    
    public function uaasoaieuoymsgsi() : ?string
    {
        return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\156\x61\x6d\145" => "\x73\x75\x62\x6d\151\x74\x2d\143\x6d\x62", "\x74\x79\x70\x65" => "\163\165\x62\x6d\x69\164", "\143\154\x61\x73\x73" => "\x62\165\164\x74\x6f\156\x2d\x70\162\x69\x6d\141\x72\x79"]);
    }
    
    public function omeeeegkauuouaka() : string
    {
        return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\156\x61\x6d\x65" => "\x72\x65\x73\x65\x74\x2d\143\155\142", "\x74\x79\160\x65" => "\142\x75\x74\x74\157\x6e", "\143\154\x61\x73\163" => "\142\x75\164\x74\x6f\x6e\55\x73\145\x63\x6f\156\x64\x61\x72\x79"]);
    }
    
    public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = []) : string
    {
        return $pkyyagewkiyckmwy ? ManipulateHTML::qgsekwygcgawekeq("\x69\x6e\x70\x75\x74", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\143\154\141\163\163" => "\142\x75\164\164\157\156", "\x76\141\x6c\165\145" => $pkyyagewkiyckmwy])) : '';
    }
    
    public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x6f\x70\x74\x2d\x68\151\144\144\145\156";
        return $cmkqisoeyioisqaw;
    }
    
    public function yiemusgqmoymsgeg($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\143\x6c\157\x73\x65\x64";
        return $cmkqisoeyioisqaw;
    }
    public function ogkiiewscemaqkwg()
    {
        $this->cqscqicucmeamkyq("\141\144\x64\137\x6d\145\x74\141\137\x62\x6f\x78\x65\x73\x5f{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\x61\144\x64\x5f\x6d\145\164\x61\x5f\142\x6f\170\x65\x73", $this->mmsykuomogaqoaye(), null);
    }
    
    public function ausymmgsksoqwuqk($post, $qkweikswegyciaie)
    {
        goto cywcqkecgwkgssgy;
        qesoesykasouikck:
        goto eqmgcgwcgkuoqyya;
        goto wyuiuogqiqasaumy;
        taisikggaaysayue:
        
        $scegeeyqweaksmki->show_form();
        goto mouyseuswmcisysg;
        mouyseuswmcisysg:
        mskkgeiykcaoqosq:
        goto iyoiumqkociwggwi;
        soakqssqaoaqkkck:
        if ($this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto ceyumqqeccuiuwsw;
        }
        goto qesoesykasouikck;
        gaeewoieegegmwmw:
        
        $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek);
        goto gesqgakoekiukmsa;
        gesqgakoekiukmsa:
        goto eqmgcgwcgkuoqyya;
        goto ooyikkuecqewakee;
        egkokuggowqoogwe:
        if (!$scegeeyqweaksmki) {
            goto mskkgeiykcaoqosq;
        }
        goto mugykqoymeugqasw;
        yewqwkoaeqqegiyi:
        if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto egswwwwgmeecegem;
        }
        goto soakqssqaoaqkkck;
        cywcqkecgwkgssgy:
        
        $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie["\151\144"], $this->cisyiemkeykgkomc());
        goto egkokuggowqoogwe;
        mugykqoymeugqasw:
        $icwicymcioeyeyek = $_POST;
        goto yewqwkoaeqqegiyi;
        mawaowggkucoosoc:
        eqmgcgwcgkuoqyya:
        goto taisikggaaysayue;
        mmgaoiukskgaskye:
        
        DecoratorOption::delete($this->cisyiemkeykgkomc());
        goto mawaowggkucoosoc;
        wyuiuogqiqasaumy:
        egswwwwgmeecegem:
        goto gaeewoieegegmwmw;
        ooyikkuecqewakee:
        ceyumqqeccuiuwsw:
        goto mmgaoiukskgaskye;
        iyoiumqkociwggwi:
    }
    
    private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto asqwcaswskmaiuei;
        kusykiciiukqkwcs:
        $ooewkimkcskcwsso = ManipulateArray::get($icwicymcioeyeyek, "\x72\145\x73\x65\x74\55\143\x6d\x62");
        goto qsoicugccmgoaooq;
        asqwcaswskmaiuei:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto kusykiciiukqkwcs;
        gwoqwogmyqmaekeq:
        return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($_POST[$scegeeyqweaksmki->gwgqcsmomamyqsmy()], $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto qaqeuqcqwyqigguw;
        qsoicugccmgoaooq:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\157\142\152\x65\143\164\x5f\x69\x64");
        goto gwoqwogmyqmaekeq;
        qaqeuqcqwyqigguw:
    }
    
    private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto awuymmyewogkskka;
        awuymmyewogkskka:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto wqsgwiecyyamgugu;
        wqsgwiecyyamgugu:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\157\x62\152\145\143\x74\x5f\x69\x64");
        goto keisauiosaguwkmg;
        keisauiosaguwkmg:
        return $scegeeyqweaksmki->csgiecsagosuucqo("\x73\141\x76\x65\137\x66\x69\x65\x6c\x64\x73") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto ikigycmycsqieeoi;
        ikigycmycsqieeoi:
    }
    
    public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool
    {
        goto wkeegycggsggcsiy;
        wuaeweseqayacqis:
        $icwicymcioeyeyek = $_POST;
        goto iekcwimcmsemsgmo;
        iekcwimcmsemsgmo:
        memikioiiekcqoqc:
        goto qsaomeeimaagqewc;
        qsaomeeimaagqewc:
        return (bool) ManipulateArray::get($icwicymcioeyeyek, "\x73\165\x62\x6d\151\164\x2d\x63\155\142", false);
        goto qygwmuiaqciwymgw;
        wkeegycggsggcsiy:
        if ($icwicymcioeyeyek) {
            goto memikioiiekcqoqc;
        }
        goto wuaeweseqayacqis;
        qygwmuiaqciwymgw:
    }
    
    public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array
    {
        goto amaswgogkauskswc;
        ekqeaqcmkqoiugms:
        oqcoyuausmgccywa:
        goto muascwyseakooami;
        bkwacmcewmysqowo:
        if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) {
            goto msakyecawuskgema;
        }
        goto ycokoqscowewwsau;
        gomegguceiicoocs:
        return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas;
        goto uqkeqwwaysocgsca;
        ycokoqscowewwsau:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) {
            goto yauygqguooyuiick;
            wimsassgwgimayck:
            ksaecqkkqkqumiyy:
            goto omimqwkiqwicccmw;
            yuscokykcoymyyiq:
            aksqawoycgigewoo:
            goto wimsassgwgimayck;
            aemgieoigwoaoqey:
            $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie);
            goto yuscokykcoymyyiq;
            yauygqguooyuiick:
            if (is_object($qkweikswegyciaie)) {
                goto aksqawoycgigewoo;
            }
            goto aemgieoigwoaoqey;
            omimqwkiqwicccmw:
        }
        goto ekqeaqcmkqoiugms;
        muascwyseakooami:
        msakyecawuskgema:
        goto gomegguceiicoocs;
        amaswgogkauskswc:
        $saouceauqqiwcwas = [];
        goto bkwacmcewmysqowo;
        uqkeqwwaysocgsca:
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\x70\x61\147\145");
    }
    
    public function __toString()
    {
        return self::uqggkiomyiceyooa();
    }
}

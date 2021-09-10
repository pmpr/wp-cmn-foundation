<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    
    protected ?string $key = "\x6d\171\x5f\157\160\x74\151\x6f\156";
    
    protected array $menuArgs = ["\166\x69\x65\167\x5f\x63\x61\160\141\142\x69\154\x69\x74\x79" => '', "\x70\141\162\x65\156\164\x5f\x73\154\x75\147" => '', "\160\141\147\145\137\x74\151\164\154\x65" => '', "\155\x65\x6e\x75\137\x74\151\x74\x6c\145" => '', "\143\141\160\x61\142\x69\x6c\151\164\171" => "\155\x61\x6e\x61\147\145\137\x6f\160\x74\151\157\x6e\x73", "\x6d\x65\x6e\165\137\163\154\165\147" => '', "\151\x63\x6f\156\x5f\x75\x72\154" => '', "\160\157\163\x69\164\151\157\x6e" => null, "\x6e\x65\x74\167\157\x72\153" => false];
    
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
        ouwcsmcycymqmecm:
        owakcoywswieyewa:
        goto mcoqgkqqocieqygg;
        komcawukmomgkqog:
        $this->key = $uusmaiomayssaecw;
        goto caocugyuikeekyom;
        kswyqgqqygaouiuk:
        $this->id = $this->iaqckqwoiseyqaku();
        goto komcawukmomgkqog;
        wioequuiyigoaass:
        if (!(is_admin() && class_exists("\x43\115\x42\x32"))) {
            goto owakcoywswieyewa;
        }
        goto kswyqgqqygaouiuk;
        caocugyuikeekyom:
        parent::__construct();
        goto ouwcsmcycymqmecm;
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
        return "\143\155\x6f" . rand(1000, 99999);
    }
    
    public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self
    {
        goto siioyccqcugcmkoy;
        vaekgwkiiqmwmoey:
        $this->column = $qgoqiacsiccwoawi;
        goto aqsuuuwagsyyooak;
        siioyccqcugcmkoy:
        if (!($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1)) {
            goto umcsysgcksumioak;
        }
        goto owoiuwqgwcseogig;
        owoiuwqgwcseogig:
        $qgoqiacsiccwoawi = 1;
        goto meekmmeswcggewek;
        aqsuuuwagsyyooak:
        return $this;
        goto sukooaksmwmweysu;
        meekmmeswcggewek:
        umcsysgcksumioak:
        goto vaekgwkiiqmwmoey;
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
        gkwskkyusocmckci:
        
        $kiiwewqkgqgqwwue = is_multisite() && $this->agcaegggmmeuammg("\x6e\x65\164\167\157\162\153") ? "\x6e\x65\x74\x77\157\x72\x6b\137" : '';
        goto wgsmemaiyicwmagy;
        wgsmemaiyicwmagy:
        $this->qcsmikeggeemccuu("\x61\x64\155\x69\x6e\x5f\x68\145\x61\144", [$this, "\165\165\x71\x71\153\147\171\161\x65\x6b\x6d\x67\x79\143\147\x71"])->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\151\156\x69\x74", [$this, "\171\145\171\151\147\165\x79\x65\147\155\x6d\171\165\163\x65\x61"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\137\145\x6e\161\165\x65\x75\145\x5f\163\x63\x72\151\x70\164\x73", [$this, "\167\x71\161\143\x6b\153\155\x71\141\x6b\151\161\165\171\143\163"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\x61\144\x6d\x69\156\137\x6d\x65\156\165", [$this, "\x73\157\x63\x63\157\155\x61\153\x77\x65\161\x67\x73\153\x69\x63"], 12)->qcsmikeggeemccuu("\x63\155\x62\x32\137\162\145\x6e\144\x65\x72\137\x6f\x70\x74\x69\157\156\163\137\163\141\x76\x65\x5f\x62\165\164\x74\x6f\x6e", [$this, "\145\x63\171\171\161\x73\147\167\x77\x75\x75\153\147\x73\x73\x67"]);
        goto oaymsekakyassacy;
        oaymsekakyassacy:
        parent::wigskegsqequoeks();
        goto oqaqkwgyiegaoiyk;
        oqaqkwgyiegaoiyk:
    }
    public function yeyiguyegmmyusea()
    {
        goto esuscykksesgueii;
        awqcicwsamqqsisa:
        cascyqosimkguayi:
        goto meawiqkkayqiiyqa;
        ywcgeioasmogicki:
        $ewuukoycimkekouc = $this->agcaegggmmeuammg("\x6d\x65\156\165\137\x73\154\x75\x67");
        goto aewggukwoeqcwkmw;
        aaouuuqqgueesgum:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\x69\145\x77\x5f\143\x61\x70\x61\142\151\x6c\151\x74\x79");
        goto myuwisogyksycamk;
        qkowqoyoecgcqokw:
        $this->swqsasqieqqgusew($ewuukoycimkekouc ? $ewuukoycimkekouc : $this->cisyiemkeykgkomc());
        goto aaouuuqqgueesgum;
        cgiweqsmckusyige:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\141\162\x65\156\x74\x5f\163\154\165\x67");
        goto ywcgeioasmogicki;
        akwcamwokuciwqyw:
        register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc());
        goto esacgaegcuqsgqua;
        emmcmeososokueak:
        $this->qaygoqgeieeugsey("\x76\151\x65\x77\x5f\143\x61\160\141\x62\x69\154\x69\x74\x79", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\143\141\160\x61\142\x69\x6c\151\x74\171") : false);
        goto awqcicwsamqqsisa;
        esuscykksesgueii:
        if (!$this->agciemoaikwmiugi()) {
            goto cqumukgqaesgokmu;
        }
        goto akwcamwokuciwqyw;
        myuwisogyksycamk:
        if ($eiiwoqgkgmosakem) {
            goto cascyqosimkguayi;
        }
        goto emmcmeososokueak;
        aewggukwoeqcwkmw:
        $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom == $ewuukoycimkekouc);
        goto qkowqoyoecgcqokw;
        esacgaegcuqsgqua:
        cqumukgqaesgokmu:
        goto cgiweqsmckusyige;
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
        qycyawiweamkwamy:
        wcyacsasikeesgay:
        goto swwasksasqwewmck;
        uackiwuiauimukuk:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto qycyawiweamkwamy;
        swwasksasqwewmck:
        return $this;
        goto aoemiusqwqoimequ;
        uyowgcocwogyyogy:
        if (!$cciauwuwuqaywgce instanceof Tab) {
            goto wcyacsasikeesgay;
        }
        goto uackiwuiauimukuk;
        ksuwigakysoscwsi:
        $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\164\x61\142", $cciauwuwuqaywgce, $this);
        goto uyowgcocwogyyogy;
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
        sskygwgyogmqgmqa:
        ccewmwoameocgeck:
        goto ocgkcmokykycoqwu;
        ocgkcmokykycoqwu:
        return $this;
        goto gkqugmqmcaaewcgu;
        gkqugmqmcaaewcgu:
    }
    
    public function myomgmiksogoikuc() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    public function qessyiueeiwwgyag()
    {
        goto icecgmamoqwkcgau;
        wgkicouqwayscuio:
        $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]);
        goto mumcqaqeakgcquac;
        cyciqqkakeosegoe:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($this->equiyaoamqmaeckc());
        goto wqyesuemouksaeac;
        wycuuweqayggsikk:
        $this->qigsyyqgewgskemg("\x77\x72\141\x70\x20\x63\155\x62\62\55\157\x70\164\x69\157\x6e\x73\55\160\141\147\x65\x20\x63\155\x6f\55\157\160\x74\151\x6f\156\163\55\160\x61\147\x65")->qigsyyqgewgskemg($this->cisyiemkeykgkomc());
        goto cyciqqkakeosegoe;
        usquuksweegcuqom:
        $kqweykcqkgkmoqay = '';
        goto wycuuweqayggsikk;
        seiaqecoeskumemq:
        uscaqiyymkyywsws:
        goto ekskakueeqwgwyug;
        wqyesuemouksaeac:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto gqogoecueameuqem;
            eiyeuegmoiyouoia:
            scayqcumuauocuco:
            goto skemwcqcyaqogacu;
            aqimmiyqakwgogiw:
            $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea();
            goto ogaiqagqcemycaoo;
            gqogoecueameuqem:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto ussceksysakwguwm;
            }
            goto aqimmiyqakwgogiw;
            goismqusymeooqae:
            $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\x63\157\156\x74\x65\x6e\x74", ["\151\144" => $aokagokqyuysuksm, "\143\157\154\x75\x6d\x6e" => $qgoqiacsiccwoawi, "\144\145\x73\x63\162\151\x70\164\x69\x6f\156" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\x63\157\156\164\141\151\x6e\145\x72\x5f\x61\164\x74\x72\163" => [
                "\151\144" => "\x6f\160\164\55\x63\x6f\x6e\x74\x65\x6e\x74\x2d{$aokagokqyuysuksm}",
                "\x63\154\141\x73\163" => "\x6f\x70\x74\x2d\143\157\156\x74\145\156\x74",
                
                "\x64\141\164\x61\x2d\142\157\170\145\163" => implode("\x2c", array_keys(ManipulateArray::yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue()))),
            ]]);
            goto iicewkmmisuecsku;
            ogaiqagqcemycaoo:
            $qgoqiacsiccwoawi = 1;
            goto qqkqawesmskmkgqg;
            qqkqawesmskmkgqg:
            
            $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\137\164\141\142\x5f\x73\x69\144\145\137\x6d\145\164\141\142\157\170\x65\x73", $cciauwuwuqaywgce->weookicuaacigemm());
            goto oksseoqyoqqkmooc;
            sakgiyogqqymcama:
            $iogqeouiuqyewuqe .= ManipulateHTML::uuccukgasskgimsq("\x61", ["\151\x64" => "\157\x70\164\x2d\164\x61\x62\55{$aokagokqyuysuksm}", "\150\x72\x65\146" => "\43", "\143\154\x61\163\x73" => "\x6e\141\166\55\164\141\x62\40\x6f\160\164\55\164\141\142\x20\x70\x72\x2d\x74\x61\x62", "\144\x61\164\x61\55\157\160\x74\x63\157\156\x74\x65\x6e\164" => "\x23\157\160\x74\55\x63\157\x6e\x74\145\x6e\x74\55{$aokagokqyuysuksm}"], [$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()]);
            goto goismqusymeooqae;
            wikqsescmyeeicwg:
            ogemcuimywmoauai:
            goto uwckqwwyucaiekeq;
            oksseoqyoqqkmooc:
            if (empty($scwwkgcyecqgioqs)) {
                goto sciaeeisgiakmyyw;
            }
            goto cwsscisucgswsugy;
            skemwcqcyaqogacu:
            sciaeeisgiakmyyw:
            goto sakgiyogqqymcama;
            cwsscisucgswsugy:
            foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) {
                goto euukqqoeamysgaai;
                waagiwegsgmwumyk:
                $qkweikswegyciaie->register($this->cisyiemkeykgkomc());
                goto gswosgeumoekweom;
                ecouksmuoaagmiwo:
                iyuyykuuksqgcoco:
                goto wscqsciugescaoys;
                gswosgeumoekweom:
                $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\x6f\x72\155\x5f\x6d\141\153\145\x72\x5f\x74\x61\142\137\x73\x69\x64\x65\137\x63\157\x6e\164\141\151\x6e\x65\x72\137{$aokagokqyuysuksm}", "\163\x69\x64\x65");
                goto ggkemwwsugkckeag;
                eiuqssqeewecueaw:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\163\151\144\145\x5f\x6d\x65\164\141\142\157\170\145", $qkweikswegyciaie);
                goto ucisggckygasmewc;
                ucisggckygasmewc:
                if (!$qkweikswegyciaie->mukiwuqwmywsckco()) {
                    goto gqygesckmymkgeia;
                }
                goto waagiwegsgmwumyk;
                eicsoeicqsmgyoyw:
                gqygesckmymkgeia:
                goto iocuaqcqoggiqgsw;
                euukqqoeamysgaai:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto cugygygwqumqwkmc;
                }
                goto eiuqssqeewecueaw;
                ggkemwwsugkckeag:
                $qgoqiacsiccwoawi = 2;
                goto eicsoeicqsmgyoyw;
                iocuaqcqoggiqgsw:
                cugygygwqumqwkmc:
                goto ecouksmuoaagmiwo;
                wscqsciugescaoys:
            }
            goto eiyeuegmoiyouoia;
            iicewkmmisuecsku:
            ussceksysakwguwm:
            goto wikqsescmyeeicwg;
            uwckqwwyucaiekeq:
        }
        goto eieckmqqcmcqcyiq;
        oicyciugogouuwwi:
        if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || DecoratorUser::scmcyesmmikkucie($eiiwoqgkgmosakem)))) {
            goto uscaqiyymkyywsws;
        }
        goto syimweumwsqgoggc;
        caecagokwuouoymy:
        
        $this->once = false;
        goto seiaqecoeskumemq;
        eieckmqqcmcqcyiq:
        wemkygaugegmuyeq:
        goto wgkicouqwayscuio;
        mumcqaqeakgcquac:
        echo $this->iuygowkemiiwqmiw("\155\145\164\x61\164\x61\x62", ["\x6b\145\171" => $this->cisyiemkeykgkomc(), "\150\157\157\x6b" => $this->mmsykuomogaqoaye(), "\x74\141\142\x73" => $iogqeouiuqyewuqe, "\160\141\147\x65" => $this->kyqakacqeumicgag(), "\143\x6f\x6c\165\155\x6e" => $this->myywwqkyiwawwquy(), "\x6e\x6f\156\143\145\x73" => [wp_nonce_field("\x6d\145\x74\x61\x2d\142\x6f\170\55\x6f\x72\144\x65\x72", "\155\145\164\x61\x2d\x62\157\x78\x2d\157\x72\x64\x65\162\55\156\157\156\x63\x65", false, false), wp_nonce_field("\x63\x6c\x6f\x73\145\x64\x70\157\x73\x74\x62\x6f\170\145\x73", "\x63\x6c\157\x73\145\x64\160\157\163\x74\x62\x6f\x78\145\x73\x6e\157\156\143\x65", false, false)], "\142\x75\x74\x74\x6f\x6e\x73" => $qyukicweqoisimwg, "\143\x6f\x6e\164\x65\x6e\x74\x73" => $kqweykcqkgkmoqay, "\x70\141\147\x65\x5f\x74\x69\x74\x6c\x65" => esc_html(get_admin_page_title()), "\x63\157\x6e\164\x61\x69\x6e\x65\162\137\x61\164\x74\162\x73" => $this->ccekeuwwqqoiwuwy()]);
        goto caecagokwuouoymy;
        syimweumwsqgoggc:
        $iogqeouiuqyewuqe = '';
        goto usquuksweegcuqom;
        icecgmamoqwkcgau:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\166\151\145\x77\137\x63\141\160\x61\142\x69\154\x69\164\x79");
        goto oicyciugogouuwwi;
        ekskakueeqwgwyug:
    }
    
    public function makgumuaykymweaq() : array
    {
        goto iouqskcmyecqmugo;
        eoecsiksocyeiayk:
        goto aaiekuiyqeykkgqq;
        goto gcmcgcuycmoywakk;
        iouqskcmyecqmugo:
        $ywmkwiwkosakssii = [];
        goto awcyccimowsskmkc;
        geggqemsocqacmaa:
        
        $ywmkwiwkosakssii["\143\142"] = $omwmuycmeqcqokom ? "\141\x64\x64\137\163\165\x62\x6d\145\156\165\137\160\x61\147\145" : "\141\x64\144\x5f\155\x65\x6e\165\x5f\160\141\x67\x65";
        goto xkqoueuawceokqwq;
        awcyccimowsskmkc:
        
        $omwmuycmeqcqokom = $this->eyqwmckgumyaoams();
        goto ckycaecsiwgmomgk;
        aywscouoieeksess:
        
        $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\x3f\160\x6f\163\164\137\x74\171\160\x65\x3d{$this->kecacgyqmgeeqmme()}" : '';
        goto gwomwiesykqmmwgo;
        asyskswoaqakaicc:
        
        $cmyoswawcimsecyy = $this->agcaegggmmeuammg("\x70\x61\x67\145\137\164\x69\x74\x6c\145") ? $this->agcaegggmmeuammg("\160\x61\147\145\x5f\x74\x69\x74\x6c\145") : $this->qcgakseyaikigqco();
        goto qcscwisoukgswcum;
        aucmyygueiuuyygk:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\155\145\x6e\165\137\x74\x69\x74\x6c\x65") ? $this->agcaegggmmeuammg("\x6d\x65\156\x75\137\x74\151\x74\154\145") : $cmyoswawcimsecyy;
        goto yossisaqeggqeokq;
        gwomwiesykqmmwgo:
        $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc;
        goto keicyiqusacogocc;
        qcscwisoukgswcum:
        
        if (!$omwmuycmeqcqokom) {
            goto swykkkgaawkssqma;
        }
        goto aywscouoieeksess;
        yossisaqeggqeokq:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\143\x61\x70\141\x62\151\154\x69\x74\171");
        goto ckaoqocygksqsoqg;
        gcmcgcuycmoywakk:
        eskmyswgsosamscc:
        goto cewcquygkawaiscq;
        ckaoqocygksqsoqg:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\155\x65\156\165\x5f\163\154\165\147") ? $this->agcaegggmmeuammg("\x6d\x65\156\165\137\x73\x6c\x75\147") : $this->cisyiemkeykgkomc();
        goto qomugkkimygqeioo;
        keicyiqusacogocc:
        swykkkgaawkssqma:
        goto aouikocwycssquau;
        qomugkkimygqeioo:
        
        $ywmkwiwkosakssii[] = [$this, "\161\x65\163\163\171\151\x75\145\x65\x69\x77\167\147\171\x61\x67"];
        goto yyqwgugicycyeosk;
        yyqwgugicycyeosk:
        
        if (!$omwmuycmeqcqokom) {
            goto eskmyswgsosamscc;
        }
        goto kagywssammsigeky;
        kagywssammsigeky:
        
        $ywmkwiwkosakssii[] = null;
        goto eoecsiksocyeiayk;
        iwysasakqeoiqkea:
        aaiekuiyqeykkgqq:
        goto geggqemsocqacmaa;
        cewcquygkawaiscq:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x69\143\x6f\x6e\x5f\165\162\x6c") ? $this->agcaegggmmeuammg("\151\x63\157\x6e\x5f\x75\x72\x6c") : '';
        goto qayqouemeyoeqece;
        qayqouemeyoeqece:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x70\157\163\x69\x74\x69\157\156") === null ? null : intval($this->agcaegggmmeuammg("\x70\157\163\151\164\151\157\x6e"));
        goto iwysasakqeoiqkea;
        xkqoueuawceokqwq:
        return $ywmkwiwkosakssii;
        goto ayaksmyymwewccuw;
        aouikocwycssquau:
        
        $ywmkwiwkosakssii[] = $cmyoswawcimsecyy;
        goto aucmyygueiuuyygk;
        ckycaecsiwgmomgk:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\141\162\145\156\x74\137\x73\x6c\165\x67") ? $this->agcaegggmmeuammg("\160\x61\x72\145\x6e\x74\x5f\163\x6c\x75\147") : $omwmuycmeqcqokom;
        goto asyskswoaqakaicc;
        ayaksmyymwewccuw:
    }
    public function soccomakweqgskic()
    {
        goto skmygcmwwgoaguwo;
        gwawuyimyyieguwa:
        
        $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\160\162\151\x6e\164\137\x73\x74\171\x6c\145\163\55{$this->mmsykuomogaqoaye()}", ["\103\115\x42\x32\x5f\x68\157\157\153\x75\160", "\x65\x6e\161\x75\145\x75\x65\137\143\x6d\142\137\x63\x73\163"])->qcsmikeggeemccuu("\x61\x64\144\x5f\x6d\145\x74\141\137\142\157\170\145\163\x5f{$this->mmsykuomogaqoaye()}", [$this, "\167\141\x63\x65\x6d\153\161\155\151\167\x75\x71\x6f\x75\x67\x61"])->qcsmikeggeemccuu("\154\157\141\144\x2d{$this->mmsykuomogaqoaye()}", [$this, "\x6f\x67\153\151\x69\145\x77\x73\143\x65\x6d\141\x71\x6b\167\147"]);
        goto icoggwwouyssowey;
        uokioguceweaqqse:
        
        $this->siqqwyaiwgagokug();
        goto kiyuamyuuoiuwyag;
        icoggwwouyssowey:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\x66\x74\x65\x72\x5f\x69\x6e\151\164\137\150\x6f\157\x6b", false), $iaakskwmyqceoscy, $this);
        goto uokioguceweaqqse;
        sqqocygqgwkmgwaa:
        $this->oggwewqswcggccae($iaakskwmyqceoscy);
        goto gwawuyimyyieguwa;
        skmygcmwwgoaguwo:
        
        $ywmkwiwkosakssii = $this->makgumuaykymweaq();
        goto imgiueoewusyceem;
        imgiueoewusyceem:
        
        $iaakskwmyqceoscy = $ywmkwiwkosakssii["\143\x62"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6]);
        goto sqqocygqgwkmgwaa;
        kiyuamyuuoiuwyag:
    }
    private function siqqwyaiwgagokug()
    {
        goto uumykgkackouocgc;
        oamosmwemmmikgwo:
        wsqescacigqkgicg:
        goto kgeomuicikkomkie;
        uumykgkackouocgc:
        $symcuwcoqkwoscsg = $this->eigooueumicckoge();
        goto amesgukaccuckock;
        kgeomuicikkomkie:
        ieuoockquscyauiy:
        goto muqgkcsqkssymyem;
        amesgukaccuckock:
        $iaakskwmyqceoscy = $this->mmsykuomogaqoaye();
        goto smgugiqksqkmsuys;
        smgugiqksqkmsuys:
        if (!$symcuwcoqkwoscsg) {
            goto ieuoockquscyauiy;
        }
        goto oeeaaoyyucuuwkuu;
        oeeaaoyyucuuwkuu:
        foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) {
            goto giaoygyymwwoqmgw;
            mqsgkwkggseuykio:
            cmukqmgyeiqqyoye:
            goto oiymmoisooaocwyg;
            ouucymmowsuymakm:
            
            $aiamqeawckcsuaou = str_replace("\x5b\x68\x6f\157\x6b\135", $iaakskwmyqceoscy, $aiamqeawckcsuaou);
            goto smsmeycaqoqkgciw;
            mwemsqwigyycweai:
            
            $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1;
            goto aooumysewqkyewii;
            sgmowmgweoqysoqg:
            $aiamqeawckcsuaou = ManipulateArray::get($sqaougiyimwumoqi, "\x61\x63\x74\x69\x6f\156");
            goto yaceceaiceoeweog;
            assouqamccmauuye:
            if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi["\x61\143\164\x69\x6f\x6e"], "\55\133\150\x6f\157\x6b\135"))) {
                goto cmukqmgyeiqqyoye;
            }
            goto ouucymmowsuymakm;
            yaceceaiceoeweog:
            $ekiuyucoiagmscgy = ManipulateArray::get($sqaougiyimwumoqi, "\x63\141\x6c\x6c\142\141\x63\x6b");
            goto uycwieawygyekeoi;
            smsmeycaqoqkgciw:
            
            $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10;
            goto mwemsqwigyycweai;
            giaoygyymwwoqmgw:
            $ywmkwiwkosakssii = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x61\x72\147\x73", 1));
            goto sgmowmgweoqysoqg;
            uycwieawygyekeoi:
            $sqqewmoeaekuyyas = intval(ManipulateArray::get($sqaougiyimwumoqi, "\160\x72\x69\x6f\x72\x69\164\171", 10));
            goto assouqamccmauuye;
            aooumysewqkyewii:
            
            $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas);
            goto mqsgkwkggseuykio;
            oiymmoisooaocwyg:
            umcyiqykwoeegomm:
            goto kuiqmwsgukiwgguq;
            kuiqmwsgukiwgguq:
        }
        goto oamosmwemmmikgwo;
        muqgkcsqkssymyem:
    }
    public function wacemkqmiwuqouga()
    {
        goto sgugyikwqeswcaos;
        igcyymyqeawqkwgm:
        foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) {
            goto wyswgiqmuwyiqama;
            wyswgiqmuwyiqama:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto aaeaawawgiokuoqc;
            }
            goto yywywwmawmmyuwms;
            acesmiyysymciaui:
            yyuwoaymcmgagkek:
            goto qmiwkumwuqywukmg;
            yywywwmawmmyuwms:
            $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\x73\x69\x64\x65");
            goto sgkkuuwoeouqgeqc;
            sgkkuuwoeouqgeqc:
            aaeaawawgiokuoqc:
            goto acesmiyysymciaui;
            qmiwkumwuqywukmg:
        }
        goto imeagymkkagggkec;
        qgaywmweyqweqkme:
        if (!$ywoucyskcquysiwc) {
            goto eccsqkqyiwqcocym;
        }
        goto gkemwmiykeiyuska;
        gkemwmiykeiyuska:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto ccyiauwwmeyoqmme;
            gwysqygykiqwgugc:
            $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137\164\141\142\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x6d\145\x74\141\142\x6f\170\x65\163", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this);
            goto aawgwoyccicqiooa;
            skoasiggcqccogqu:
            foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                goto gqocyuqyemgioaok;
                umsqoiumeuayywuy:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto qskaaemigoqyogiu;
                }
                goto syqcoysgaociwkmu;
                uscaccweyakkqycu:
                qskaaemigoqyogiu:
                goto ouqciucssmewqseu;
                ouqciucssmewqseu:
                wikycciwekuugqec:
                goto ooiackiyssimocoy;
                gqocyuqyemgioaok:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\164\141\142\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\x6d\145\164\141\x62\x6f\170\137{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this);
                goto umsqoiumeuayywuy;
                wymmooqweugwumuo:
                $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\163\151\x64\145" ? "\156\157\x72\x6d\x61\x6c" : $mgkceomocowocqyo);
                goto uscaccweyakkqycu;
                syqcoysgaociwkmu:
                $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm();
                goto wymmooqweugwumuo;
                ooiackiyssimocoy:
            }
            goto gckukekaicosscko;
            ccyiauwwmeyoqmme:
            $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc());
            goto wigmqayoaagkekug;
            eceqwgecqgsugwyi:
            emoekgyaiwksgwoa:
            goto wamywgsgswmwgqes;
            gckukekaicosscko:
            ycumgkeaagawwkss:
            goto cuawaegesykceuoi;
            wigmqayoaagkekug:
            if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) {
                goto mueoecmegwgakkuu;
            }
            goto gwysqygykiqwgugc;
            cuawaegesykceuoi:
            mueoecmegwgakkuu:
            goto eceqwgecqgsugwyi;
            aawgwoyccicqiooa:
            
            $uaqusiikkokccqou = ManipulateArray::yaeiiwwyckwugsem($uaqusiikkokccqou);
            goto skoasiggcqccogqu;
            wamywgsgswmwgqes:
        }
        goto qykisyqcgokcuiqs;
        sgugyikwqeswcaos:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto qgaywmweyqweqkme;
        qkmoekswwgmogsgg:
        eccsqkqyiwqcocym:
        goto igcyymyqeawqkwgm;
        imeagymkkagggkec:
        weaaqiuymusyaoim:
        goto yeiwygkuemkoykis;
        qykisyqcgokcuiqs:
        eamyyoygceikikcy:
        goto qkmoekswwgmogsgg;
        yeiwygkuemkoykis:
    }
    
    public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\156\x6f\162\155\x61\x6c")
    {
        goto wayyqekkqyeoeiwo;
        cogiokiwsggickqu:
        
        if (!$uoeiskamgscgeccq->meta_box["\x63\x6c\x6f\163\145\x64"]) {
            goto ouasygcguacqoomm;
        }
        goto kqmyqoqwaoaqgemm;
        msmcymkewouiuuse:
        $wyicesskmckwqeec = "\x70\x6f\x73\164\142\157\x78\137\143\x6c\x61\163\163\x65\163\x5f{$this->mmsykuomogaqoaye()}\137{$aokagokqyuysuksm}";
        goto kieygmqycuywqgay;
        kieygmqycuywqgay:
        if (!($this->myomgmiksogoikuc() && $mgkceomocowocqyo !== "\163\151\x64\x65")) {
            goto oyymggqmgsymkyua;
        }
        goto wuagokiooeiuokqs;
        aaowoieokoumsyqc:
        $this->qcsmikeggeemccuu("\x63\x6d\x62\x32\137\x73\x61\166\x65\x5f\x6f\x70\x74\151\x6f\156\x73\x2d\160\141\147\145\137\x66\x69\145\x6c\x64\163\137{$aokagokqyuysuksm}", [$this, "\x67\157\x79\145\x6d\x69\x6b\157\x67\145\x75\x73\153\147\141\163"], 10, 2);
        goto msmcymkewouiuuse;
        wuagokiooeiuokqs:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x65\167\163\x6b\x6b\167\x75\x77\x6b\x6b\153\141\x71\x77\x67\153"]);
        goto uoiooiwsmoysksqm;
        acewwgmgwegkqkmg:
        if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) {
            goto coqcgqgsuagaoqgo;
        }
        goto ikegeeiesieogisa;
        uoiooiwsmoysksqm:
        oyymggqmgsymkyua:
        goto cogiokiwsggickqu;
        ikegeeiesieogisa:
        $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea();
        goto aaowoieokoumsyqc;
        kqmyqoqwaoaqgemm:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\171\x69\145\x6d\x75\x73\147\x71\155\x6f\171\x6d\163\x67\x65\x67"]);
        goto ywqqgwecosgicaim;
        bocwykmykkkoioyq:
        $uoeiskamgscgeccq = ManipulateArray::get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea());
        goto wmiywmecqmaeagwc;
        qsqcmociaogwiggs:
        $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo);
        goto twuqeqeisoggkkmg;
        twuqeqeisoggkkmg:
        coqcgqgsuagaoqgo:
        goto oouiqmqcowoqqwyi;
        wayyqekkqyeoeiwo:
        if (!is_array($uoeiskamgscgeccq)) {
            goto koqciqwwomauuqci;
        }
        goto bocwykmykkkoioyq;
        wmiywmecqmaeagwc:
        koqciqwwomauuqci:
        goto acewwgmgwegkqkmg;
        ywqqgwecosgicaim:
        ouasygcguacqoomm:
        goto qsqcmociaogwiggs;
        oouiqmqcowoqqwyi:
    }
    
    public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo)
    {
        add_meta_box($qkweikswegyciaie->mwikyscisascoeea(), $qkweikswegyciaie->iwqugwigmoiagwec(), [$this, "\x61\165\163\171\155\x6d\147\x73\153\163\x6f\x71\167\x75\161\x6b"], $iaakskwmyqceoscy, $mgkceomocowocqyo, $qkweikswegyciaie->yywskysiycwkwsgw());
    }
    public function wqqckkmqakiquycs()
    {
        goto kwgcqoqewyqaoosk;
        qskqawaewmgquwmq:
        fsaiawesoowogmek:
        goto ueigayyqqomcisui;
        oouomgcseggcugyi:
        DecoratorAsset::fowiaymccsmewemu($eueuqacmukymcyya, "\x50\115\120\122\x4f\x70\164\x54\141\x62\163", ["\x6b\145\171" => $this->kyqakacqeumicgag(), "\x70\x6f\163\x74\164\x79\160\x65" => $this->kecacgyqmgeeqmme(), "\x64\145\146\141\x75\x6c\164\164\141\142" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']);
        goto agwiwkwmowuuscsg;
        kwgcqoqewyqaoosk:
        if (!$this->csaueuycewaiuaay()) {
            goto fsaiawesoowogmek;
        }
        goto cmqkcsayqiqugyce;
        ucwgiecogkaesuko:
        DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\x6d\x75\x6c\x74\151\x6f\160\x74\163\x2e\152\x73"));
        goto cekgqucskcgyoakq;
        uquugcsmgsmmwywo:
        $cciauwuwuqaywgce = reset($ywoucyskcquysiwc);
        goto oouomgcseggcugyi;
        cekgqucskcgyoakq:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto uquugcsmgsmmwywo;
        cmqkcsayqiqugyce:
        if (!$this->myomgmiksogoikuc()) {
            goto wwakqukuoioceyck;
        }
        goto oeuiyomkweusgawu;
        oeuiyomkweusgawu:
        $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\x2d\141\144\155\151\156";
        goto ucwgiecogkaesuko;
        agwiwkwmowuuscsg:
        wwakqukuoioceyck:
        goto qskqawaewmgquwmq;
        ueigayyqqomcisui:
    }
    public function uuqqkgyqekmgycgq()
    {
        goto eokeqaomwmsymuyi;
        eokeqaomwmsymuyi:
        if (!$this->myomgmiksogoikuc()) {
            goto wckioasgmwqugauw;
        }
        goto siqwwuiuqwcayisu;
        siqwwuiuqwcayisu:
        $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\x6d\145\x74\141\164\x61\142\56\143\x73\163", ["\160\x61\147\145" => $this->kyqakacqeumicgag()]);
        goto uegaugwmyucmooyu;
        uegaugwmyucmooyu:
        ManipulateHTML::awwqwouuoioauoaw("\163\164\x79\x6c\x65", ["\x69\x64" => "\x70\162\55\164\x61\x62\55\x63\x6c\145\x61\156\x75\160\x2d\143\163\163"], true, $icyaoosaykeskiuu);
        goto ecmwimqmggogysoe;
        ecmwimqmggogysoe:
        wckioasgmwqugauw:
        goto emmseyuagaaweuek;
        emmseyuagaaweuek:
    }
    public function iaggsikquucsoiko()
    {
        ManipulateHTML::awwqwouuoioauoaw("\x73\143\x72\151\160\164", [], true, "\152\121\165\145\162\171\50\144\157\x63\x75\x6d\x65\156\164\x29\x2e\x72\145\x61\144\171\x28\146\165\x6e\143\x74\151\x6f\x6e\x28\51\x7b\x70\157\163\164\142\x6f\170\x65\163\x2e\x61\x64\144\x5f\x70\x6f\163\x74\142\157\x78\x5f\x74\x6f\147\147\154\145\x73\50\x22\x70\x6f\163\x74\142\x6f\x78\55\x63\157\156\164\141\x69\x6e\145\x72\42\51\73\x7d\51\x3b");
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
        
        return isset($uoeiskamgscgeccq->meta_box["\163\150\157\167\x5f\157\x6e"]["\153\x65\171"]) && $uoeiskamgscgeccq->meta_box["\x73\150\157\167\137\157\x6e"]["\153\x65\x79"] === "\x6f\x70\x74\151\157\156\163\55\160\141\147\x65" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\163\x68\157\x77\x5f\157\156"]["\166\x61\x6c\165\145"]);
    }
    
    public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu)
    {
        goto meuckssskyaesage;
        meuckssskyaesage:
        if (!($this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $sogsqsawoyqmqsqu && !$this->ccauywsgwsesgmua())) {
            goto gaweiceicsykweqs;
        }
        goto ouomuyeqsugykuyk;
        ouomuyeqsugykuyk:
        add_settings_error("{$this->cisyiemkeykgkomc()}\55\x6e\x6f\164\x69\143\145\163", '', __("\123\x65\164\164\x69\x6e\x67\163\40\125\160\144\141\164\145\x64", PR__CMN__FOUNDATION), "\x75\x70\x64\x61\x74\145\x64");
        goto ucomiwksyqswgwmm;
        iwwmukmsgwoesima:
        $this->once = true;
        goto wugsmyikwkyususo;
        wugsmyikwkyususo:
        gaweiceicsykweqs:
        goto icuoakkeswccquuo;
        ucomiwksyqswgwmm:
        settings_errors("{$this->cisyiemkeykgkomc()}\55\x6e\x6f\x74\151\143\145\163");
        goto iwwmukmsgwoesima;
        icuoakkeswccquuo:
    }
    
    public function uaasoaieuoymsgsi() : ?string
    {
        return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\156\x61\x6d\145" => "\x73\165\x62\x6d\151\x74\x2d\x63\155\142", "\164\171\x70\145" => "\163\165\x62\x6d\x69\164", "\x63\154\141\x73\163" => "\x62\165\x74\164\x6f\x6e\55\x70\x72\151\x6d\x61\162\171"]);
    }
    
    public function omeeeegkauuouaka() : string
    {
        return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\x6e\141\x6d\x65" => "\x72\145\x73\x65\x74\55\143\x6d\x62", "\164\171\160\x65" => "\142\x75\x74\164\157\x6e", "\x63\154\x61\163\x73" => "\142\x75\x74\x74\x6f\156\55\163\145\x63\x6f\x6e\x64\x61\162\x79"]);
    }
    
    public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = []) : string
    {
        return $pkyyagewkiyckmwy ? ManipulateHTML::qgsekwygcgawekeq("\151\x6e\x70\x75\x74", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\x63\x6c\x61\163\163" => "\142\x75\164\x74\157\156", "\166\141\154\x75\x65" => $pkyyagewkiyckmwy])) : '';
    }
    
    public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\157\x70\x74\x2d\x68\x69\x64\144\145\x6e";
        return $cmkqisoeyioisqaw;
    }
    
    public function yiemusgqmoymsgeg($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\143\x6c\157\163\145\x64";
        return $cmkqisoeyioisqaw;
    }
    public function ogkiiewscemaqkwg()
    {
        $this->cqscqicucmeamkyq("\x61\x64\x64\x5f\155\x65\x74\x61\137\142\157\170\x65\163\137{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\141\144\x64\x5f\155\x65\x74\141\137\142\157\x78\x65\x73", $this->mmsykuomogaqoaye(), null);
    }
    
    public function ausymmgsksoqwuqk($post, $qkweikswegyciaie)
    {
        goto cywcqkecgwkgssgy;
        wyuiuogqiqasaumy:
        egswwwwgmeecegem:
        goto gaeewoieegegmwmw;
        soakqssqaoaqkkck:
        if ($this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto ceyumqqeccuiuwsw;
        }
        goto qesoesykasouikck;
        yewqwkoaeqqegiyi:
        if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto egswwwwgmeecegem;
        }
        goto soakqssqaoaqkkck;
        mugykqoymeugqasw:
        $icwicymcioeyeyek = $_POST;
        goto yewqwkoaeqqegiyi;
        mmgaoiukskgaskye:
        
        DecoratorOption::delete($this->cisyiemkeykgkomc());
        goto mawaowggkucoosoc;
        ooyikkuecqewakee:
        ceyumqqeccuiuwsw:
        goto mmgaoiukskgaskye;
        mawaowggkucoosoc:
        eqmgcgwcgkuoqyya:
        goto taisikggaaysayue;
        qesoesykasouikck:
        goto eqmgcgwcgkuoqyya;
        goto wyuiuogqiqasaumy;
        cywcqkecgwkgssgy:
        
        $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie["\x69\144"], $this->cisyiemkeykgkomc());
        goto egkokuggowqoogwe;
        gesqgakoekiukmsa:
        goto eqmgcgwcgkuoqyya;
        goto ooyikkuecqewakee;
        taisikggaaysayue:
        
        $scegeeyqweaksmki->show_form();
        goto mouyseuswmcisysg;
        egkokuggowqoogwe:
        if (!$scegeeyqweaksmki) {
            goto mskkgeiykcaoqosq;
        }
        goto mugykqoymeugqasw;
        gaeewoieegegmwmw:
        
        $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek);
        goto gesqgakoekiukmsa;
        mouyseuswmcisysg:
        mskkgeiykcaoqosq:
        goto iyoiumqkociwggwi;
        iyoiumqkociwggwi:
    }
    
    private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto asqwcaswskmaiuei;
        asqwcaswskmaiuei:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto kusykiciiukqkwcs;
        qsoicugccmgoaooq:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\157\x62\152\x65\x63\164\x5f\x69\x64");
        goto gwoqwogmyqmaekeq;
        kusykiciiukqkwcs:
        $ooewkimkcskcwsso = ManipulateArray::get($icwicymcioeyeyek, "\162\x65\163\145\164\x2d\x63\155\x62");
        goto qsoicugccmgoaooq;
        gwoqwogmyqmaekeq:
        return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($_POST[$scegeeyqweaksmki->gwgqcsmomamyqsmy()], $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto qaqeuqcqwyqigguw;
        qaqeuqcqwyqigguw:
    }
    
    private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto awuymmyewogkskka;
        awuymmyewogkskka:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto wqsgwiecyyamgugu;
        wqsgwiecyyamgugu:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\x6f\142\152\145\x63\x74\x5f\x69\x64");
        goto keisauiosaguwkmg;
        keisauiosaguwkmg:
        return $scegeeyqweaksmki->csgiecsagosuucqo("\x73\x61\x76\x65\137\x66\151\145\x6c\x64\163") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto ikigycmycsqieeoi;
        ikigycmycsqieeoi:
    }
    
    public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool
    {
        goto wkeegycggsggcsiy;
        wuaeweseqayacqis:
        $icwicymcioeyeyek = $_POST;
        goto iekcwimcmsemsgmo;
        qsaomeeimaagqewc:
        return (bool) ManipulateArray::get($icwicymcioeyeyek, "\163\165\x62\155\x69\164\x2d\x63\x6d\142", false);
        goto qygwmuiaqciwymgw;
        wkeegycggsggcsiy:
        if ($icwicymcioeyeyek) {
            goto memikioiiekcqoqc;
        }
        goto wuaeweseqayacqis;
        iekcwimcmsemsgmo:
        memikioiiekcqoqc:
        goto qsaomeeimaagqewc;
        qygwmuiaqciwymgw:
    }
    
    public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array
    {
        goto amaswgogkauskswc;
        bkwacmcewmysqowo:
        if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) {
            goto msakyecawuskgema;
        }
        goto ycokoqscowewwsau;
        ekqeaqcmkqoiugms:
        oqcoyuausmgccywa:
        goto muascwyseakooami;
        gomegguceiicoocs:
        return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas;
        goto uqkeqwwaysocgsca;
        amaswgogkauskswc:
        $saouceauqqiwcwas = [];
        goto bkwacmcewmysqowo;
        ycokoqscowewwsau:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) {
            goto yauygqguooyuiick;
            yauygqguooyuiick:
            if (is_object($qkweikswegyciaie)) {
                goto aksqawoycgigewoo;
            }
            goto aemgieoigwoaoqey;
            wimsassgwgimayck:
            ksaecqkkqkqumiyy:
            goto omimqwkiqwicccmw;
            aemgieoigwoaoqey:
            $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie);
            goto yuscokykcoymyyiq;
            yuscokykcoymyyiq:
            aksqawoycgigewoo:
            goto wimsassgwgimayck;
            omimqwkiqwicccmw:
        }
        goto ekqeaqcmkqoiugms;
        muascwyseakooami:
        msakyecawuskgema:
        goto gomegguceiicoocs;
        uqkeqwwaysocgsca:
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\x70\x61\x67\145");
    }
    
    public function __toString()
    {
        return self::uqggkiomyiceyooa();
    }
}

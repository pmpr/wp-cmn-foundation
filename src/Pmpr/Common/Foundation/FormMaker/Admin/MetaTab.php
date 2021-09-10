<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    
    protected ?string $key = "\155\171\x5f\157\x70\x74\151\x6f\x6e";
    
    protected array $menuArgs = ["\x76\x69\145\167\137\x63\141\160\x61\142\x69\x6c\151\164\x79" => '', "\x70\141\x72\x65\156\164\137\x73\x6c\165\x67" => '', "\x70\x61\x67\145\137\x74\x69\x74\154\145" => '', "\155\145\156\165\137\164\151\164\154\145" => '', "\x63\141\x70\141\x62\151\154\151\x74\x79" => "\155\141\x6e\x61\x67\145\137\x6f\160\164\x69\x6f\x6e\x73", "\155\145\156\165\137\163\154\x75\x67" => '', "\x69\143\157\x6e\137\165\162\x6c" => '', "\x70\157\163\x69\164\151\157\156" => null, "\156\145\x74\167\x6f\162\x6b" => false];
    
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
        caocugyuikeekyom:
        parent::__construct();
        goto ouwcsmcycymqmecm;
        kswyqgqqygaouiuk:
        $this->id = $this->iaqckqwoiseyqaku();
        goto komcawukmomgkqog;
        ouwcsmcycymqmecm:
        owakcoywswieyewa:
        goto mcoqgkqqocieqygg;
        wioequuiyigoaass:
        if (!(is_admin() && class_exists("\x43\115\x42\62"))) {
            goto owakcoywswieyewa;
        }
        goto kswyqgqqygaouiuk;
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
        return "\143\x6d\x6f" . rand(1000, 99999);
    }
    
    public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self
    {
        goto siioyccqcugcmkoy;
        owoiuwqgwcseogig:
        $qgoqiacsiccwoawi = 1;
        goto meekmmeswcggewek;
        aqsuuuwagsyyooak:
        return $this;
        goto sukooaksmwmweysu;
        vaekgwkiiqmwmoey:
        $this->column = $qgoqiacsiccwoawi;
        goto aqsuuuwagsyyooak;
        meekmmeswcggewek:
        umcsysgcksumioak:
        goto vaekgwkiiqmwmoey;
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
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\150\145\x61\x64", [$this, "\165\x75\161\x71\x6b\x67\x79\x71\x65\153\x6d\x67\x79\x63\x67\161"])->qcsmikeggeemccuu("\x61\144\x6d\x69\156\137\x69\x6e\151\x74", [$this, "\x79\145\x79\x69\x67\x75\171\145\147\x6d\155\x79\165\163\x65\x61"])->qcsmikeggeemccuu("\x61\x64\155\151\156\137\145\x6e\161\165\x65\x75\x65\x5f\163\143\x72\151\x70\164\163", [$this, "\167\x71\x71\143\x6b\153\x6d\x71\x61\x6b\x69\161\x75\171\x63\x73"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\141\x64\155\x69\156\x5f\155\145\x6e\165", [$this, "\163\x6f\x63\143\x6f\155\x61\x6b\x77\x65\161\147\163\153\151\x63"], 12)->qcsmikeggeemccuu("\143\155\142\62\x5f\x72\145\x6e\x64\145\x72\137\x6f\160\164\x69\157\x6e\163\x5f\x73\x61\166\145\x5f\142\x75\164\x74\x6f\156", [$this, "\x65\x63\x79\x79\x71\163\147\167\x77\165\165\153\147\x73\x73\147"]);
        goto oaymsekakyassacy;
        gkwskkyusocmckci:
        
        $kiiwewqkgqgqwwue = is_multisite() && $this->agcaegggmmeuammg("\156\x65\x74\x77\x6f\x72\x6b") ? "\156\x65\164\167\x6f\162\153\x5f" : '';
        goto wgsmemaiyicwmagy;
        oqaqkwgyiegaoiyk:
    }
    public function yeyiguyegmmyusea()
    {
        goto esuscykksesgueii;
        esacgaegcuqsgqua:
        cqumukgqaesgokmu:
        goto cgiweqsmckusyige;
        awqcicwsamqqsisa:
        cascyqosimkguayi:
        goto meawiqkkayqiiyqa;
        emmcmeososokueak:
        $this->qaygoqgeieeugsey("\x76\151\145\x77\137\x63\141\160\x61\142\x69\154\x69\x74\x79", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\x63\141\160\141\142\x69\x6c\x69\x74\x79") : false);
        goto awqcicwsamqqsisa;
        qkowqoyoecgcqokw:
        $this->swqsasqieqqgusew($ewuukoycimkekouc ? $ewuukoycimkekouc : $this->cisyiemkeykgkomc());
        goto aaouuuqqgueesgum;
        aewggukwoeqcwkmw:
        $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom == $ewuukoycimkekouc);
        goto qkowqoyoecgcqokw;
        akwcamwokuciwqyw:
        register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc());
        goto esacgaegcuqsgqua;
        ywcgeioasmogicki:
        $ewuukoycimkekouc = $this->agcaegggmmeuammg("\155\x65\156\165\x5f\x73\x6c\165\147");
        goto aewggukwoeqcwkmw;
        cgiweqsmckusyige:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\x70\x61\162\145\156\164\137\x73\154\x75\x67");
        goto ywcgeioasmogicki;
        myuwisogyksycamk:
        if ($eiiwoqgkgmosakem) {
            goto cascyqosimkguayi;
        }
        goto emmcmeososokueak;
        esuscykksesgueii:
        if (!$this->agciemoaikwmiugi()) {
            goto cqumukgqaesgokmu;
        }
        goto akwcamwokuciwqyw;
        aaouuuqqgueesgum:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\166\x69\145\x77\x5f\143\141\160\141\142\151\154\x69\164\171");
        goto myuwisogyksycamk;
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
        swwasksasqwewmck:
        return $this;
        goto aoemiusqwqoimequ;
        ksuwigakysoscwsi:
        $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\164\x61\142", $cciauwuwuqaywgce, $this);
        goto uyowgcocwogyyogy;
        uackiwuiauimukuk:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto qycyawiweamkwamy;
        uyowgcocwogyyogy:
        if (!$cciauwuwuqaywgce instanceof Tab) {
            goto wcyacsasikeesgay;
        }
        goto uackiwuiauimukuk;
        aoemiusqwqoimequ:
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self
    {
        goto ksumissygaeqwiqk;
        sskygwgyogmqgmqa:
        ccewmwoameocgeck:
        goto ocgkcmokykycoqwu;
        ksumissygaeqwiqk:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            uciscoimiwuqsumg:
        }
        goto sskygwgyogmqgmqa;
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
        syimweumwsqgoggc:
        $iogqeouiuqyewuqe = '';
        goto usquuksweegcuqom;
        wqyesuemouksaeac:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto gqogoecueameuqem;
            cwsscisucgswsugy:
            foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) {
                goto euukqqoeamysgaai;
                euukqqoeamysgaai:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto cugygygwqumqwkmc;
                }
                goto eiuqssqeewecueaw;
                eicsoeicqsmgyoyw:
                gqygesckmymkgeia:
                goto iocuaqcqoggiqgsw;
                ecouksmuoaagmiwo:
                iyuyykuuksqgcoco:
                goto wscqsciugescaoys;
                ucisggckygasmewc:
                if (!$qkweikswegyciaie->mukiwuqwmywsckco()) {
                    goto gqygesckmymkgeia;
                }
                goto waagiwegsgmwumyk;
                gswosgeumoekweom:
                $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\157\162\x6d\137\155\x61\153\145\162\137\164\x61\142\137\163\x69\144\x65\x5f\143\157\x6e\x74\x61\x69\156\x65\x72\137{$aokagokqyuysuksm}", "\x73\x69\144\x65");
                goto ggkemwwsugkckeag;
                ggkemwwsugkckeag:
                $qgoqiacsiccwoawi = 2;
                goto eicsoeicqsmgyoyw;
                waagiwegsgmwumyk:
                $qkweikswegyciaie->register($this->cisyiemkeykgkomc());
                goto gswosgeumoekweom;
                iocuaqcqoggiqgsw:
                cugygygwqumqwkmc:
                goto ecouksmuoaagmiwo;
                eiuqssqeewecueaw:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\137\163\151\144\145\x5f\155\145\x74\141\142\x6f\170\x65", $qkweikswegyciaie);
                goto ucisggckygasmewc;
                wscqsciugescaoys:
            }
            goto eiyeuegmoiyouoia;
            oksseoqyoqqkmooc:
            if (empty($scwwkgcyecqgioqs)) {
                goto sciaeeisgiakmyyw;
            }
            goto cwsscisucgswsugy;
            eiyeuegmoiyouoia:
            scayqcumuauocuco:
            goto skemwcqcyaqogacu;
            aqimmiyqakwgogiw:
            $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea();
            goto ogaiqagqcemycaoo;
            ogaiqagqcemycaoo:
            $qgoqiacsiccwoawi = 1;
            goto qqkqawesmskmkgqg;
            qqkqawesmskmkgqg:
            
            $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\x5f\x74\x61\x62\137\163\151\144\145\x5f\x6d\x65\x74\x61\142\157\170\145\163", $cciauwuwuqaywgce->weookicuaacigemm());
            goto oksseoqyoqqkmooc;
            sakgiyogqqymcama:
            $iogqeouiuqyewuqe .= ManipulateHTML::uuccukgasskgimsq("\x61", ["\151\x64" => "\157\160\x74\x2d\164\x61\142\x2d{$aokagokqyuysuksm}", "\x68\x72\x65\146" => "\x23", "\x63\154\141\x73\163" => "\156\x61\x76\x2d\x74\x61\x62\40\157\160\x74\55\x74\x61\x62\40\160\x72\x2d\164\x61\142", "\144\141\164\x61\55\157\160\164\x63\157\156\x74\x65\156\x74" => "\x23\157\x70\164\x2d\x63\157\x6e\x74\145\x6e\x74\55{$aokagokqyuysuksm}"], [$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()]);
            goto goismqusymeooqae;
            iicewkmmisuecsku:
            ussceksysakwguwm:
            goto wikqsescmyeeicwg;
            gqogoecueameuqem:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto ussceksysakwguwm;
            }
            goto aqimmiyqakwgogiw;
            skemwcqcyaqogacu:
            sciaeeisgiakmyyw:
            goto sakgiyogqqymcama;
            goismqusymeooqae:
            $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\x63\157\x6e\x74\145\x6e\x74", ["\x69\144" => $aokagokqyuysuksm, "\143\x6f\x6c\x75\x6d\x6e" => $qgoqiacsiccwoawi, "\x64\x65\x73\x63\162\x69\160\164\151\x6f\156" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\143\x6f\156\164\x61\151\x6e\145\x72\137\141\x74\164\162\163" => [
                "\x69\x64" => "\x6f\160\x74\x2d\143\x6f\156\x74\145\156\164\55{$aokagokqyuysuksm}",
                "\x63\x6c\x61\x73\163" => "\x6f\x70\x74\x2d\143\x6f\156\164\145\156\x74",
                
                "\144\x61\x74\141\55\142\157\170\x65\x73" => implode("\54", array_keys(ManipulateArray::yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue()))),
            ]]);
            goto iicewkmmisuecsku;
            wikqsescmyeeicwg:
            ogemcuimywmoauai:
            goto uwckqwwyucaiekeq;
            uwckqwwyucaiekeq:
        }
        goto eieckmqqcmcqcyiq;
        usquuksweegcuqom:
        $kqweykcqkgkmoqay = '';
        goto wycuuweqayggsikk;
        eieckmqqcmcqcyiq:
        wemkygaugegmuyeq:
        goto wgkicouqwayscuio;
        oicyciugogouuwwi:
        if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || DecoratorUser::scmcyesmmikkucie($eiiwoqgkgmosakem)))) {
            goto uscaqiyymkyywsws;
        }
        goto syimweumwsqgoggc;
        wgkicouqwayscuio:
        $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]);
        goto mumcqaqeakgcquac;
        mumcqaqeakgcquac:
        echo $this->iuygowkemiiwqmiw("\x6d\145\x74\x61\164\x61\x62", ["\x6b\x65\x79" => $this->cisyiemkeykgkomc(), "\150\x6f\157\x6b" => $this->mmsykuomogaqoaye(), "\x74\141\142\163" => $iogqeouiuqyewuqe, "\160\x61\147\x65" => $this->kyqakacqeumicgag(), "\x63\x6f\x6c\165\x6d\x6e" => $this->myywwqkyiwawwquy(), "\156\157\x6e\x63\145\163" => [wp_nonce_field("\x6d\145\164\x61\55\142\157\170\x2d\157\162\x64\145\x72", "\x6d\x65\x74\x61\55\142\x6f\170\55\x6f\162\x64\145\162\x2d\x6e\x6f\x6e\x63\x65", false, false), wp_nonce_field("\143\x6c\x6f\163\145\144\x70\157\x73\x74\142\157\170\145\163", "\143\154\x6f\x73\145\x64\160\157\x73\x74\x62\x6f\x78\x65\163\156\157\x6e\x63\x65", false, false)], "\142\x75\164\164\x6f\x6e\163" => $qyukicweqoisimwg, "\x63\157\156\x74\145\x6e\164\x73" => $kqweykcqkgkmoqay, "\160\141\147\x65\x5f\164\x69\164\x6c\145" => esc_html(get_admin_page_title()), "\143\157\156\164\x61\x69\156\145\x72\137\141\164\x74\162\163" => $this->ccekeuwwqqoiwuwy()]);
        goto caecagokwuouoymy;
        wycuuweqayggsikk:
        $this->qigsyyqgewgskemg("\x77\x72\141\160\x20\x63\155\142\x32\55\157\x70\x74\x69\157\156\x73\x2d\160\141\147\145\40\143\x6d\157\x2d\x6f\x70\164\x69\x6f\x6e\x73\55\160\x61\147\x65")->qigsyyqgewgskemg($this->cisyiemkeykgkomc());
        goto cyciqqkakeosegoe;
        cyciqqkakeosegoe:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($this->equiyaoamqmaeckc());
        goto wqyesuemouksaeac;
        caecagokwuouoymy:
        
        $this->once = false;
        goto seiaqecoeskumemq;
        icecgmamoqwkcgau:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\x69\145\167\137\x63\x61\x70\141\142\x69\154\x69\164\x79");
        goto oicyciugogouuwwi;
        seiaqecoeskumemq:
        uscaqiyymkyywsws:
        goto ekskakueeqwgwyug;
        ekskakueeqwgwyug:
    }
    
    public function makgumuaykymweaq() : array
    {
        goto iouqskcmyecqmugo;
        kagywssammsigeky:
        
        $ywmkwiwkosakssii[] = null;
        goto eoecsiksocyeiayk;
        iwysasakqeoiqkea:
        aaiekuiyqeykkgqq:
        goto geggqemsocqacmaa;
        aouikocwycssquau:
        
        $ywmkwiwkosakssii[] = $cmyoswawcimsecyy;
        goto aucmyygueiuuyygk;
        qayqouemeyoeqece:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\160\x6f\163\151\x74\x69\x6f\x6e") === null ? null : intval($this->agcaegggmmeuammg("\160\157\163\x69\x74\151\157\156"));
        goto iwysasakqeoiqkea;
        cewcquygkawaiscq:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\151\143\x6f\156\137\x75\x72\x6c") ? $this->agcaegggmmeuammg("\151\x63\157\x6e\x5f\x75\x72\x6c") : '';
        goto qayqouemeyoeqece;
        ckycaecsiwgmomgk:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\x70\141\162\x65\156\164\137\x73\154\x75\x67") ? $this->agcaegggmmeuammg("\160\141\x72\x65\156\x74\x5f\x73\x6c\x75\x67") : $omwmuycmeqcqokom;
        goto asyskswoaqakaicc;
        gwomwiesykqmmwgo:
        $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc;
        goto keicyiqusacogocc;
        yyqwgugicycyeosk:
        
        if (!$omwmuycmeqcqokom) {
            goto eskmyswgsosamscc;
        }
        goto kagywssammsigeky;
        keicyiqusacogocc:
        swykkkgaawkssqma:
        goto aouikocwycssquau;
        aywscouoieeksess:
        
        $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\77\x70\x6f\163\x74\137\164\171\x70\145\75{$this->kecacgyqmgeeqmme()}" : '';
        goto gwomwiesykqmmwgo;
        geggqemsocqacmaa:
        
        $ywmkwiwkosakssii["\143\x62"] = $omwmuycmeqcqokom ? "\x61\x64\144\137\x73\x75\142\x6d\145\156\x75\x5f\x70\141\147\145" : "\x61\144\x64\137\x6d\145\x6e\x75\x5f\160\141\147\145";
        goto xkqoueuawceokqwq;
        asyskswoaqakaicc:
        
        $cmyoswawcimsecyy = $this->agcaegggmmeuammg("\160\141\147\x65\137\x74\151\x74\154\x65") ? $this->agcaegggmmeuammg("\160\x61\147\145\x5f\164\151\164\x6c\145") : $this->qcgakseyaikigqco();
        goto qcscwisoukgswcum;
        qcscwisoukgswcum:
        
        if (!$omwmuycmeqcqokom) {
            goto swykkkgaawkssqma;
        }
        goto aywscouoieeksess;
        awcyccimowsskmkc:
        
        $omwmuycmeqcqokom = $this->eyqwmckgumyaoams();
        goto ckycaecsiwgmomgk;
        qomugkkimygqeioo:
        
        $ywmkwiwkosakssii[] = [$this, "\161\x65\x73\x73\171\x69\x75\x65\x65\x69\x77\x77\147\x79\141\147"];
        goto yyqwgugicycyeosk;
        eoecsiksocyeiayk:
        goto aaiekuiyqeykkgqq;
        goto gcmcgcuycmoywakk;
        gcmcgcuycmoywakk:
        eskmyswgsosamscc:
        goto cewcquygkawaiscq;
        ckaoqocygksqsoqg:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x6d\145\156\165\137\x73\154\x75\x67") ? $this->agcaegggmmeuammg("\x6d\x65\x6e\x75\x5f\x73\x6c\x75\x67") : $this->cisyiemkeykgkomc();
        goto qomugkkimygqeioo;
        iouqskcmyecqmugo:
        $ywmkwiwkosakssii = [];
        goto awcyccimowsskmkc;
        aucmyygueiuuyygk:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x6d\x65\x6e\165\x5f\164\x69\164\x6c\145") ? $this->agcaegggmmeuammg("\x6d\145\156\x75\137\164\x69\164\x6c\145") : $cmyoswawcimsecyy;
        goto yossisaqeggqeokq;
        yossisaqeggqeokq:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x63\x61\x70\x61\x62\151\x6c\x69\164\x79");
        goto ckaoqocygksqsoqg;
        xkqoueuawceokqwq:
        return $ywmkwiwkosakssii;
        goto ayaksmyymwewccuw;
        ayaksmyymwewccuw:
    }
    public function soccomakweqgskic()
    {
        goto skmygcmwwgoaguwo;
        imgiueoewusyceem:
        
        $iaakskwmyqceoscy = $ywmkwiwkosakssii["\x63\142"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6]);
        goto sqqocygqgwkmgwaa;
        sqqocygqgwkmgwaa:
        $this->oggwewqswcggccae($iaakskwmyqceoscy);
        goto gwawuyimyyieguwa;
        skmygcmwwgoaguwo:
        
        $ywmkwiwkosakssii = $this->makgumuaykymweaq();
        goto imgiueoewusyceem;
        icoggwwouyssowey:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x61\146\x74\145\x72\137\x69\x6e\x69\x74\137\x68\x6f\157\x6b", false), $iaakskwmyqceoscy, $this);
        goto uokioguceweaqqse;
        gwawuyimyyieguwa:
        
        $this->qcsmikeggeemccuu("\141\x64\x6d\151\x6e\137\x70\x72\x69\x6e\x74\x5f\x73\164\171\154\145\x73\55{$this->mmsykuomogaqoaye()}", ["\x43\115\x42\62\x5f\150\157\157\x6b\165\160", "\x65\x6e\161\x75\x65\165\145\137\x63\x6d\x62\x5f\x63\x73\x73"])->qcsmikeggeemccuu("\x61\144\144\x5f\x6d\x65\164\141\x5f\x62\x6f\x78\145\x73\x5f{$this->mmsykuomogaqoaye()}", [$this, "\x77\x61\x63\145\x6d\153\x71\x6d\x69\167\165\161\157\165\147\x61"])->qcsmikeggeemccuu("\154\x6f\141\144\x2d{$this->mmsykuomogaqoaye()}", [$this, "\x6f\147\153\x69\x69\x65\x77\163\x63\x65\155\x61\x71\x6b\x77\x67"]);
        goto icoggwwouyssowey;
        uokioguceweaqqse:
        
        $this->siqqwyaiwgagokug();
        goto kiyuamyuuoiuwyag;
        kiyuamyuuoiuwyag:
    }
    private function siqqwyaiwgagokug()
    {
        goto uumykgkackouocgc;
        oeeaaoyyucuuwkuu:
        foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) {
            goto giaoygyymwwoqmgw;
            giaoygyymwwoqmgw:
            $ywmkwiwkosakssii = intval(ManipulateArray::get($sqaougiyimwumoqi, "\141\x72\x67\163", 1));
            goto sgmowmgweoqysoqg;
            sgmowmgweoqysoqg:
            $aiamqeawckcsuaou = ManipulateArray::get($sqaougiyimwumoqi, "\141\x63\x74\x69\x6f\x6e");
            goto yaceceaiceoeweog;
            assouqamccmauuye:
            if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi["\x61\143\x74\151\157\156"], "\x2d\x5b\150\157\157\x6b\135"))) {
                goto cmukqmgyeiqqyoye;
            }
            goto ouucymmowsuymakm;
            aooumysewqkyewii:
            
            $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas);
            goto mqsgkwkggseuykio;
            ouucymmowsuymakm:
            
            $aiamqeawckcsuaou = str_replace("\x5b\x68\x6f\157\x6b\x5d", $iaakskwmyqceoscy, $aiamqeawckcsuaou);
            goto smsmeycaqoqkgciw;
            mwemsqwigyycweai:
            
            $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1;
            goto aooumysewqkyewii;
            mqsgkwkggseuykio:
            cmukqmgyeiqqyoye:
            goto oiymmoisooaocwyg;
            oiymmoisooaocwyg:
            umcyiqykwoeegomm:
            goto kuiqmwsgukiwgguq;
            uycwieawygyekeoi:
            $sqqewmoeaekuyyas = intval(ManipulateArray::get($sqaougiyimwumoqi, "\160\x72\x69\x6f\x72\x69\164\x79", 10));
            goto assouqamccmauuye;
            smsmeycaqoqkgciw:
            
            $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10;
            goto mwemsqwigyycweai;
            yaceceaiceoeweog:
            $ekiuyucoiagmscgy = ManipulateArray::get($sqaougiyimwumoqi, "\143\141\154\154\142\141\x63\153");
            goto uycwieawygyekeoi;
            kuiqmwsgukiwgguq:
        }
        goto oamosmwemmmikgwo;
        uumykgkackouocgc:
        $symcuwcoqkwoscsg = $this->eigooueumicckoge();
        goto amesgukaccuckock;
        oamosmwemmmikgwo:
        wsqescacigqkgicg:
        goto kgeomuicikkomkie;
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
        muqgkcsqkssymyem:
    }
    public function wacemkqmiwuqouga()
    {
        goto sgugyikwqeswcaos;
        qkmoekswwgmogsgg:
        eccsqkqyiwqcocym:
        goto igcyymyqeawqkwgm;
        sgugyikwqeswcaos:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto qgaywmweyqweqkme;
        gkemwmiykeiyuska:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto ccyiauwwmeyoqmme;
            wigmqayoaagkekug:
            if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) {
                goto mueoecmegwgakkuu;
            }
            goto gwysqygykiqwgugc;
            gwysqygykiqwgugc:
            $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\164\141\142\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\155\x65\x74\x61\142\x6f\x78\145\163", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this);
            goto aawgwoyccicqiooa;
            eceqwgecqgsugwyi:
            emoekgyaiwksgwoa:
            goto wamywgsgswmwgqes;
            cuawaegesykceuoi:
            mueoecmegwgakkuu:
            goto eceqwgecqgsugwyi;
            gckukekaicosscko:
            ycumgkeaagawwkss:
            goto cuawaegesykceuoi;
            aawgwoyccicqiooa:
            
            $uaqusiikkokccqou = ManipulateArray::yaeiiwwyckwugsem($uaqusiikkokccqou);
            goto skoasiggcqccogqu;
            skoasiggcqccogqu:
            foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                goto gqocyuqyemgioaok;
                umsqoiumeuayywuy:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto qskaaemigoqyogiu;
                }
                goto syqcoysgaociwkmu;
                ouqciucssmewqseu:
                wikycciwekuugqec:
                goto ooiackiyssimocoy;
                gqocyuqyemgioaok:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\x74\x61\142\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x6d\x65\x74\141\142\157\x78\x5f{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this);
                goto umsqoiumeuayywuy;
                syqcoysgaociwkmu:
                $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm();
                goto wymmooqweugwumuo;
                uscaccweyakkqycu:
                qskaaemigoqyogiu:
                goto ouqciucssmewqseu;
                wymmooqweugwumuo:
                $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\x73\x69\x64\x65" ? "\x6e\x6f\x72\x6d\x61\154" : $mgkceomocowocqyo);
                goto uscaccweyakkqycu;
                ooiackiyssimocoy:
            }
            goto gckukekaicosscko;
            ccyiauwwmeyoqmme:
            $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc());
            goto wigmqayoaagkekug;
            wamywgsgswmwgqes:
        }
        goto qykisyqcgokcuiqs;
        qykisyqcgokcuiqs:
        eamyyoygceikikcy:
        goto qkmoekswwgmogsgg;
        qgaywmweyqweqkme:
        if (!$ywoucyskcquysiwc) {
            goto eccsqkqyiwqcocym;
        }
        goto gkemwmiykeiyuska;
        imeagymkkagggkec:
        weaaqiuymusyaoim:
        goto yeiwygkuemkoykis;
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
        yeiwygkuemkoykis:
    }
    
    public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\156\157\162\155\x61\x6c")
    {
        goto wayyqekkqyeoeiwo;
        wmiywmecqmaeagwc:
        koqciqwwomauuqci:
        goto acewwgmgwegkqkmg;
        acewwgmgwegkqkmg:
        if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) {
            goto coqcgqgsuagaoqgo;
        }
        goto ikegeeiesieogisa;
        twuqeqeisoggkkmg:
        coqcgqgsuagaoqgo:
        goto oouiqmqcowoqqwyi;
        msmcymkewouiuuse:
        $wyicesskmckwqeec = "\160\x6f\x73\164\142\x6f\170\x5f\143\154\141\163\x73\x65\163\137{$this->mmsykuomogaqoaye()}\137{$aokagokqyuysuksm}";
        goto kieygmqycuywqgay;
        kqmyqoqwaoaqgemm:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\171\151\x65\155\165\x73\147\x71\155\157\x79\x6d\x73\147\x65\x67"]);
        goto ywqqgwecosgicaim;
        wuagokiooeiuokqs:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x65\x77\x73\153\x6b\x77\x75\167\x6b\x6b\x6b\x61\161\x77\147\153"]);
        goto uoiooiwsmoysksqm;
        bocwykmykkkoioyq:
        $uoeiskamgscgeccq = ManipulateArray::get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea());
        goto wmiywmecqmaeagwc;
        aaowoieokoumsyqc:
        $this->qcsmikeggeemccuu("\x63\x6d\x62\62\x5f\x73\141\x76\145\137\x6f\160\x74\151\157\x6e\163\x2d\x70\x61\x67\145\137\x66\x69\145\154\x64\163\137{$aokagokqyuysuksm}", [$this, "\147\x6f\x79\x65\155\151\x6b\x6f\x67\x65\165\163\x6b\147\141\x73"], 10, 2);
        goto msmcymkewouiuuse;
        kieygmqycuywqgay:
        if (!($this->myomgmiksogoikuc() && $mgkceomocowocqyo !== "\x73\151\x64\145")) {
            goto oyymggqmgsymkyua;
        }
        goto wuagokiooeiuokqs;
        uoiooiwsmoysksqm:
        oyymggqmgsymkyua:
        goto cogiokiwsggickqu;
        cogiokiwsggickqu:
        
        if (!$uoeiskamgscgeccq->meta_box["\x63\x6c\157\163\145\x64"]) {
            goto ouasygcguacqoomm;
        }
        goto kqmyqoqwaoaqgemm;
        qsqcmociaogwiggs:
        $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo);
        goto twuqeqeisoggkkmg;
        wayyqekkqyeoeiwo:
        if (!is_array($uoeiskamgscgeccq)) {
            goto koqciqwwomauuqci;
        }
        goto bocwykmykkkoioyq;
        ikegeeiesieogisa:
        $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea();
        goto aaowoieokoumsyqc;
        ywqqgwecosgicaim:
        ouasygcguacqoomm:
        goto qsqcmociaogwiggs;
        oouiqmqcowoqqwyi:
    }
    
    public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo)
    {
        add_meta_box($qkweikswegyciaie->mwikyscisascoeea(), $qkweikswegyciaie->iwqugwigmoiagwec(), [$this, "\141\165\x73\x79\155\x6d\x67\163\x6b\163\157\161\x77\x75\161\153"], $iaakskwmyqceoscy, $mgkceomocowocqyo, $qkweikswegyciaie->yywskysiycwkwsgw());
    }
    public function wqqckkmqakiquycs()
    {
        goto kwgcqoqewyqaoosk;
        qskqawaewmgquwmq:
        fsaiawesoowogmek:
        goto ueigayyqqomcisui;
        agwiwkwmowuuscsg:
        wwakqukuoioceyck:
        goto qskqawaewmgquwmq;
        cekgqucskcgyoakq:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto uquugcsmgsmmwywo;
        uquugcsmgsmmwywo:
        $cciauwuwuqaywgce = reset($ywoucyskcquysiwc);
        goto oouomgcseggcugyi;
        cmqkcsayqiqugyce:
        if (!$this->myomgmiksogoikuc()) {
            goto wwakqukuoioceyck;
        }
        goto oeuiyomkweusgawu;
        ucwgiecogkaesuko:
        DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\155\165\154\x74\151\157\160\164\x73\x2e\x6a\163"));
        goto cekgqucskcgyoakq;
        kwgcqoqewyqaoosk:
        if (!$this->csaueuycewaiuaay()) {
            goto fsaiawesoowogmek;
        }
        goto cmqkcsayqiqugyce;
        oouomgcseggcugyi:
        DecoratorAsset::fowiaymccsmewemu($eueuqacmukymcyya, "\x50\x4d\120\x52\x4f\x70\x74\124\x61\x62\163", ["\x6b\x65\x79" => $this->kyqakacqeumicgag(), "\x70\157\163\164\164\x79\x70\145" => $this->kecacgyqmgeeqmme(), "\144\145\x66\x61\165\154\x74\x74\x61\x62" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']);
        goto agwiwkwmowuuscsg;
        oeuiyomkweusgawu:
        $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\x2d\x61\x64\155\x69\156";
        goto ucwgiecogkaesuko;
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
        ecmwimqmggogysoe:
        wckioasgmwqugauw:
        goto emmseyuagaaweuek;
        siqwwuiuqwcayisu:
        $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\x6d\145\164\141\164\x61\x62\56\143\163\163", ["\160\141\x67\x65" => $this->kyqakacqeumicgag()]);
        goto uegaugwmyucmooyu;
        uegaugwmyucmooyu:
        ManipulateHTML::awwqwouuoioauoaw("\163\x74\171\x6c\x65", ["\x69\144" => "\160\162\x2d\164\x61\x62\55\x63\x6c\x65\141\156\165\x70\55\x63\x73\163"], true, $icyaoosaykeskiuu);
        goto ecmwimqmggogysoe;
        emmseyuagaaweuek:
    }
    public function iaggsikquucsoiko()
    {
        ManipulateHTML::awwqwouuoioauoaw("\163\143\162\x69\x70\164", [], true, "\x6a\121\165\x65\x72\x79\x28\x64\157\x63\x75\155\x65\x6e\164\51\56\x72\x65\x61\144\171\x28\x66\x75\156\x63\x74\151\157\156\50\51\x7b\x70\157\x73\x74\142\x6f\170\145\163\x2e\141\x64\144\137\160\x6f\163\164\x62\157\x78\x5f\x74\157\x67\147\x6c\x65\x73\x28\x22\160\157\163\x74\x62\x6f\170\55\x63\157\x6e\x74\x61\151\x6e\x65\x72\42\x29\73\175\51\73");
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
        
        return isset($uoeiskamgscgeccq->meta_box["\x73\x68\157\x77\x5f\157\156"]["\x6b\x65\x79"]) && $uoeiskamgscgeccq->meta_box["\163\150\x6f\x77\x5f\157\156"]["\x6b\145\x79"] === "\x6f\x70\x74\x69\x6f\156\x73\55\160\141\x67\x65" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\163\x68\x6f\x77\x5f\x6f\x6e"]["\166\141\154\x75\145"]);
    }
    
    public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu)
    {
        goto meuckssskyaesage;
        meuckssskyaesage:
        if (!($this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $sogsqsawoyqmqsqu && !$this->ccauywsgwsesgmua())) {
            goto gaweiceicsykweqs;
        }
        goto ouomuyeqsugykuyk;
        iwwmukmsgwoesima:
        $this->once = true;
        goto wugsmyikwkyususo;
        ucomiwksyqswgwmm:
        settings_errors("{$this->cisyiemkeykgkomc()}\x2d\156\157\164\151\x63\145\x73");
        goto iwwmukmsgwoesima;
        wugsmyikwkyususo:
        gaweiceicsykweqs:
        goto icuoakkeswccquuo;
        ouomuyeqsugykuyk:
        add_settings_error("{$this->cisyiemkeykgkomc()}\x2d\156\x6f\x74\151\x63\145\163", '', __("\x53\x65\x74\164\151\x6e\x67\x73\40\x55\x70\144\141\x74\x65\144", PR__CMN__FOUNDATION), "\x75\x70\144\141\x74\145\x64");
        goto ucomiwksyqswgwmm;
        icuoakkeswccquuo:
    }
    
    public function uaasoaieuoymsgsi() : ?string
    {
        return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\x6e\x61\x6d\x65" => "\x73\x75\142\155\151\x74\x2d\x63\x6d\x62", "\164\x79\160\x65" => "\x73\165\142\x6d\151\164", "\143\154\141\163\163" => "\x62\165\x74\x74\x6f\x6e\x2d\160\x72\x69\155\141\162\x79"]);
    }
    
    public function omeeeegkauuouaka() : string
    {
        return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\x6e\x61\x6d\x65" => "\x72\x65\163\145\164\55\x63\x6d\142", "\164\171\160\x65" => "\142\x75\164\164\157\x6e", "\143\154\x61\x73\163" => "\142\x75\x74\164\157\156\55\163\145\143\x6f\156\144\141\x72\171"]);
    }
    
    public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = []) : string
    {
        return $pkyyagewkiyckmwy ? ManipulateHTML::qgsekwygcgawekeq("\151\156\x70\x75\164", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\x63\154\x61\x73\163" => "\142\x75\x74\x74\x6f\156", "\x76\141\x6c\165\145" => $pkyyagewkiyckmwy])) : '';
    }
    
    public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x6f\x70\x74\x2d\x68\x69\x64\144\x65\x6e";
        return $cmkqisoeyioisqaw;
    }
    
    public function yiemusgqmoymsgeg($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x63\154\x6f\163\x65\144";
        return $cmkqisoeyioisqaw;
    }
    public function ogkiiewscemaqkwg()
    {
        $this->cqscqicucmeamkyq("\141\x64\144\x5f\x6d\x65\164\x61\137\x62\x6f\170\x65\x73\x5f{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\x61\144\x64\x5f\155\x65\164\x61\137\x62\x6f\170\145\x73", $this->mmsykuomogaqoaye(), null);
    }
    
    public function ausymmgsksoqwuqk($post, $qkweikswegyciaie)
    {
        goto cywcqkecgwkgssgy;
        gesqgakoekiukmsa:
        goto eqmgcgwcgkuoqyya;
        goto ooyikkuecqewakee;
        qesoesykasouikck:
        goto eqmgcgwcgkuoqyya;
        goto wyuiuogqiqasaumy;
        ooyikkuecqewakee:
        ceyumqqeccuiuwsw:
        goto mmgaoiukskgaskye;
        mawaowggkucoosoc:
        eqmgcgwcgkuoqyya:
        goto taisikggaaysayue;
        soakqssqaoaqkkck:
        if ($this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto ceyumqqeccuiuwsw;
        }
        goto qesoesykasouikck;
        gaeewoieegegmwmw:
        
        $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek);
        goto gesqgakoekiukmsa;
        mugykqoymeugqasw:
        $icwicymcioeyeyek = $_POST;
        goto yewqwkoaeqqegiyi;
        mmgaoiukskgaskye:
        
        DecoratorOption::delete($this->cisyiemkeykgkomc());
        goto mawaowggkucoosoc;
        cywcqkecgwkgssgy:
        
        $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie["\x69\x64"], $this->cisyiemkeykgkomc());
        goto egkokuggowqoogwe;
        egkokuggowqoogwe:
        if (!$scegeeyqweaksmki) {
            goto mskkgeiykcaoqosq;
        }
        goto mugykqoymeugqasw;
        taisikggaaysayue:
        
        $scegeeyqweaksmki->show_form();
        goto mouyseuswmcisysg;
        wyuiuogqiqasaumy:
        egswwwwgmeecegem:
        goto gaeewoieegegmwmw;
        mouyseuswmcisysg:
        mskkgeiykcaoqosq:
        goto iyoiumqkociwggwi;
        yewqwkoaeqqegiyi:
        if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto egswwwwgmeecegem;
        }
        goto soakqssqaoaqkkck;
        iyoiumqkociwggwi:
    }
    
    private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto asqwcaswskmaiuei;
        asqwcaswskmaiuei:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto kusykiciiukqkwcs;
        kusykiciiukqkwcs:
        $ooewkimkcskcwsso = ManipulateArray::get($icwicymcioeyeyek, "\162\x65\163\145\164\55\143\x6d\142");
        goto qsoicugccmgoaooq;
        gwoqwogmyqmaekeq:
        return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($_POST[$scegeeyqweaksmki->gwgqcsmomamyqsmy()], $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto qaqeuqcqwyqigguw;
        qsoicugccmgoaooq:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\x6f\x62\152\145\143\x74\x5f\x69\144");
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
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\x6f\142\x6a\x65\x63\x74\x5f\x69\144");
        goto keisauiosaguwkmg;
        keisauiosaguwkmg:
        return $scegeeyqweaksmki->csgiecsagosuucqo("\163\141\x76\x65\137\x66\151\145\154\144\x73") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto ikigycmycsqieeoi;
        ikigycmycsqieeoi:
    }
    
    public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool
    {
        goto wkeegycggsggcsiy;
        wkeegycggsggcsiy:
        if ($icwicymcioeyeyek) {
            goto memikioiiekcqoqc;
        }
        goto wuaeweseqayacqis;
        iekcwimcmsemsgmo:
        memikioiiekcqoqc:
        goto qsaomeeimaagqewc;
        wuaeweseqayacqis:
        $icwicymcioeyeyek = $_POST;
        goto iekcwimcmsemsgmo;
        qsaomeeimaagqewc:
        return (bool) ManipulateArray::get($icwicymcioeyeyek, "\x73\x75\x62\x6d\x69\x74\x2d\x63\x6d\142", false);
        goto qygwmuiaqciwymgw;
        qygwmuiaqciwymgw:
    }
    
    public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array
    {
        goto amaswgogkauskswc;
        ycokoqscowewwsau:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) {
            goto yauygqguooyuiick;
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
            wimsassgwgimayck:
            ksaecqkkqkqumiyy:
            goto omimqwkiqwicccmw;
            omimqwkiqwicccmw:
        }
        goto ekqeaqcmkqoiugms;
        gomegguceiicoocs:
        return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas;
        goto uqkeqwwaysocgsca;
        ekqeaqcmkqoiugms:
        oqcoyuausmgccywa:
        goto muascwyseakooami;
        muascwyseakooami:
        msakyecawuskgema:
        goto gomegguceiicoocs;
        amaswgogkauskswc:
        $saouceauqqiwcwas = [];
        goto bkwacmcewmysqowo;
        bkwacmcewmysqowo:
        if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) {
            goto msakyecawuskgema;
        }
        goto ycokoqscowewwsau;
        uqkeqwwaysocgsca:
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\x70\141\147\x65");
    }
    
    public function __toString()
    {
        return self::uqggkiomyiceyooa();
    }
}

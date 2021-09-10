<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    
    protected ?string $key = "\x6d\171\x5f\157\160\164\151\x6f\156";
    
    protected array $menuArgs = ["\x76\151\145\x77\x5f\x63\141\x70\x61\x62\x69\x6c\151\x74\x79" => '', "\160\x61\x72\145\156\164\137\x73\154\165\x67" => '', "\160\141\147\x65\x5f\x74\151\164\154\x65" => '', "\x6d\x65\156\x75\137\x74\x69\164\154\x65" => '', "\x63\141\x70\141\142\151\154\x69\164\x79" => "\155\x61\x6e\x61\x67\145\137\157\x70\x74\151\157\156\163", "\x6d\145\x6e\165\137\x73\154\x75\x67" => '', "\x69\143\x6f\x6e\x5f\165\162\x6c" => '', "\160\x6f\163\x69\164\151\x6f\x6e" => null, "\x6e\145\164\167\157\x72\x6b" => false];
    
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
        goto esyigamqqaoyecyc;
        esyigamqqaoyecyc:
        if (!(is_admin() && class_exists("\x43\x4d\102\62"))) {
            goto kykeqqgyqqgaawoo;
        }
        goto owaiygkwaeyiiwey;
        eqewkwicumqigsem:
        kykeqqgyqqgaawoo:
        goto mwegkckwqgiwmasq;
        uykugiwiykyccwqs:
        $this->key = $uusmaiomayssaecw;
        goto fomwoaaqqcwyekey;
        fomwoaaqqcwyekey:
        parent::__construct();
        goto eqewkwicumqigsem;
        owaiygkwaeyiiwey:
        $this->id = $this->iaqckqwoiseyqaku();
        goto uykugiwiykyccwqs;
        mwegkckwqgiwmasq:
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
        return "\143\155\157" . rand(1000, 99999);
    }
    
    public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self
    {
        goto owakcoywswieyewa;
        owakcoywswieyewa:
        if (!($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1)) {
            goto kykgmsqcyggkoeig;
        }
        goto wioequuiyigoaass;
        wioequuiyigoaass:
        $qgoqiacsiccwoawi = 1;
        goto kswyqgqqygaouiuk;
        kswyqgqqygaouiuk:
        kykgmsqcyggkoeig:
        goto komcawukmomgkqog;
        caocugyuikeekyom:
        return $this;
        goto ouwcsmcycymqmecm;
        komcawukmomgkqog:
        $this->column = $qgoqiacsiccwoawi;
        goto caocugyuikeekyom;
        ouwcsmcycymqmecm:
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
        goto mcoqgkqqocieqygg;
        umcsysgcksumioak:
        $this->qcsmikeggeemccuu("\141\144\155\x69\x6e\137\x68\145\141\x64", [$this, "\x75\x75\x71\161\153\x67\x79\x71\145\153\x6d\x67\x79\143\x67\x71"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\x5f\151\156\x69\x74", [$this, "\171\145\171\x69\x67\x75\x79\145\x67\155\155\x79\165\x73\x65\x61"])->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\x65\x6e\x71\x75\x65\x75\145\137\x73\143\162\x69\160\x74\x73", [$this, "\167\x71\161\143\153\153\155\161\141\153\151\161\165\x79\143\163"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\x61\144\x6d\x69\156\137\x6d\x65\156\165", [$this, "\163\157\143\x63\x6f\155\x61\x6b\167\x65\161\x67\x73\x6b\x69\143"], 12)->qcsmikeggeemccuu("\143\x6d\x62\62\137\162\x65\x6e\144\145\x72\x5f\x6f\x70\164\151\157\156\x73\x5f\163\141\166\145\x5f\142\x75\164\164\157\156", [$this, "\x65\x63\171\x79\x71\163\147\x77\167\x75\x75\153\147\163\163\147"]);
        goto siioyccqcugcmkoy;
        siioyccqcugcmkoy:
        parent::wigskegsqequoeks();
        goto owoiuwqgwcseogig;
        mcoqgkqqocieqygg:
        
        $kiiwewqkgqgqwwue = is_multisite() && $this->agcaegggmmeuammg("\156\145\x74\167\157\x72\153") ? "\156\x65\x74\167\157\162\153\x5f" : '';
        goto umcsysgcksumioak;
        owoiuwqgwcseogig:
    }
    public function yeyiguyegmmyusea()
    {
        goto aqsuuuwagsyyooak;
        cascyqosimkguayi:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\151\145\167\137\x63\x61\160\141\142\x69\x6c\151\164\x79");
        goto esuscykksesgueii;
        esuscykksesgueii:
        if ($eiiwoqgkgmosakem) {
            goto vaekgwkiiqmwmoey;
        }
        goto akwcamwokuciwqyw;
        gkwskkyusocmckci:
        meekmmeswcggewek:
        goto wgsmemaiyicwmagy;
        wgsmemaiyicwmagy:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\x61\162\145\x6e\x74\137\163\x6c\165\147");
        goto oaymsekakyassacy;
        oaymsekakyassacy:
        $ewuukoycimkekouc = $this->agcaegggmmeuammg("\x6d\145\x6e\165\137\x73\154\165\x67");
        goto oqaqkwgyiegaoiyk;
        esacgaegcuqsgqua:
        vaekgwkiiqmwmoey:
        goto cgiweqsmckusyige;
        akwcamwokuciwqyw:
        $this->qaygoqgeieeugsey("\x76\151\x65\x77\137\143\x61\x70\x61\x62\151\x6c\x69\164\171", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\143\x61\160\141\x62\151\154\151\164\x79") : false);
        goto esacgaegcuqsgqua;
        sukooaksmwmweysu:
        register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc());
        goto gkwskkyusocmckci;
        cqumukgqaesgokmu:
        $this->swqsasqieqqgusew($ewuukoycimkekouc ? $ewuukoycimkekouc : $this->cisyiemkeykgkomc());
        goto cascyqosimkguayi;
        oqaqkwgyiegaoiyk:
        $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom == $ewuukoycimkekouc);
        goto cqumukgqaesgokmu;
        aqsuuuwagsyyooak:
        if (!$this->agciemoaikwmiugi()) {
            goto meekmmeswcggewek;
        }
        goto sukooaksmwmweysu;
        cgiweqsmckusyige:
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
        goto aewggukwoeqcwkmw;
        aewggukwoeqcwkmw:
        $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\164\141\142", $cciauwuwuqaywgce, $this);
        goto qkowqoyoecgcqokw;
        qkowqoyoecgcqokw:
        if (!$cciauwuwuqaywgce instanceof Tab) {
            goto ywcgeioasmogicki;
        }
        goto aaouuuqqgueesgum;
        emmcmeososokueak:
        return $this;
        goto awqcicwsamqqsisa;
        myuwisogyksycamk:
        ywcgeioasmogicki:
        goto emmcmeososokueak;
        aaouuuqqgueesgum:
        $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        goto myuwisogyksycamk;
        awqcicwsamqqsisa:
    }
    
    public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self
    {
        goto ksuwigakysoscwsi;
        uyowgcocwogyyogy:
        meawiqkkayqiiyqa:
        goto uackiwuiauimukuk;
        uackiwuiauimukuk:
        return $this;
        goto qycyawiweamkwamy;
        ksuwigakysoscwsi:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            $this->aucimgwswmgaocae($cciauwuwuqaywgce);
            wcyacsasikeesgay:
        }
        goto uyowgcocwogyyogy;
        qycyawiweamkwamy:
    }
    
    public function myomgmiksogoikuc() : bool
    {
        return !empty($this->equiyaoamqmaeckc());
    }
    public function qessyiueeiwwgyag()
    {
        goto eiyeuegmoiyouoia;
        skemwcqcyaqogacu:
        if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || DecoratorUser::scmcyesmmikkucie($eiiwoqgkgmosakem)))) {
            goto cwsscisucgswsugy;
        }
        goto sakgiyogqqymcama;
        eiyeuegmoiyouoia:
        $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\151\145\x77\137\x63\x61\160\141\142\151\x6c\x69\164\171");
        goto skemwcqcyaqogacu;
        icecgmamoqwkcgau:
        $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]);
        goto oicyciugogouuwwi;
        oicyciugogouuwwi:
        echo $this->iuygowkemiiwqmiw("\155\145\x74\x61\x74\x61\142", ["\x6b\x65\x79" => $this->cisyiemkeykgkomc(), "\x68\x6f\157\x6b" => $this->mmsykuomogaqoaye(), "\x74\141\142\x73" => $iogqeouiuqyewuqe, "\x70\141\x67\x65" => $this->kyqakacqeumicgag(), "\x63\x6f\x6c\x75\155\x6e" => $this->myywwqkyiwawwquy(), "\156\x6f\x6e\143\145\x73" => [wp_nonce_field("\155\x65\x74\x61\x2d\142\x6f\x78\x2d\x6f\162\x64\145\162", "\x6d\145\x74\141\55\142\x6f\170\55\x6f\x72\144\145\162\55\156\157\156\x63\145", false, false), wp_nonce_field("\x63\x6c\x6f\x73\145\x64\160\157\x73\164\142\x6f\170\145\163", "\143\x6c\157\163\145\x64\x70\157\163\x74\x62\x6f\170\x65\x73\x6e\157\156\143\x65", false, false)], "\142\165\x74\x74\x6f\156\163" => $qyukicweqoisimwg, "\143\x6f\156\x74\145\156\x74\x73" => $kqweykcqkgkmoqay, "\160\x61\x67\145\137\x74\151\164\x6c\145" => esc_html(get_admin_page_title()), "\143\157\156\164\x61\151\156\145\x72\x5f\x61\164\164\x72\163" => $this->ccekeuwwqqoiwuwy()]);
        goto syimweumwsqgoggc;
        syimweumwsqgoggc:
        
        $this->once = false;
        goto usquuksweegcuqom;
        wikqsescmyeeicwg:
        
        $ywoucyskcquysiwc = ManipulateArray::yaeiiwwyckwugsem($this->equiyaoamqmaeckc());
        goto uwckqwwyucaiekeq;
        uscaqiyymkyywsws:
        swwasksasqwewmck:
        goto icecgmamoqwkcgau;
        uwckqwwyucaiekeq:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto gswosgeumoekweom;
            sciaeeisgiakmyyw:
            ccewmwoameocgeck:
            goto ussceksysakwguwm;
            aqimmiyqakwgogiw:
            $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\x63\x6f\x6e\x74\x65\156\x74", ["\151\x64" => $aokagokqyuysuksm, "\143\x6f\154\x75\155\x6e" => $qgoqiacsiccwoawi, "\x64\145\x73\143\162\x69\x70\x74\x69\x6f\x6e" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\x63\157\156\x74\x61\x69\156\x65\162\x5f\141\x74\x74\162\163" => [
                "\151\x64" => "\157\160\x74\55\143\x6f\156\x74\x65\x6e\x74\x2d{$aokagokqyuysuksm}",
                "\x63\x6c\141\163\x73" => "\157\160\x74\55\143\157\x6e\x74\x65\x6e\164",
                
                "\x64\x61\164\x61\55\142\157\170\x65\x73" => implode("\54", array_keys(ManipulateArray::yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue()))),
            ]]);
            goto ogaiqagqcemycaoo;
            ecouksmuoaagmiwo:
            if (empty($scwwkgcyecqgioqs)) {
                goto ucisggckygasmewc;
            }
            goto wscqsciugescaoys;
            ggkemwwsugkckeag:
            $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea();
            goto eicsoeicqsmgyoyw;
            qqkqawesmskmkgqg:
            aoemiusqwqoimequ:
            goto oksseoqyoqqkmooc;
            ogaiqagqcemycaoo:
            waagiwegsgmwumyk:
            goto qqkqawesmskmkgqg;
            gswosgeumoekweom:
            if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) {
                goto waagiwegsgmwumyk;
            }
            goto ggkemwwsugkckeag;
            ussceksysakwguwm:
            ucisggckygasmewc:
            goto gqogoecueameuqem;
            iocuaqcqoggiqgsw:
            
            $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\137\164\141\x62\x5f\x73\x69\144\x65\x5f\155\x65\164\x61\142\157\x78\x65\x73", $cciauwuwuqaywgce->weookicuaacigemm());
            goto ecouksmuoaagmiwo;
            gqogoecueameuqem:
            $iogqeouiuqyewuqe .= ManipulateHTML::uuccukgasskgimsq("\x61", ["\x69\144" => "\x6f\160\x74\x2d\x74\x61\142\x2d{$aokagokqyuysuksm}", "\x68\162\145\146" => "\x23", "\143\x6c\x61\163\x73" => "\x6e\x61\166\x2d\x74\x61\142\40\x6f\x70\164\x2d\x74\x61\142\40\x70\x72\x2d\x74\x61\x62", "\144\141\x74\141\x2d\x6f\x70\164\x63\157\x6e\x74\x65\x6e\164" => "\x23\157\160\x74\x2d\x63\x6f\x6e\x74\145\156\x74\55{$aokagokqyuysuksm}"], [$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()]);
            goto aqimmiyqakwgogiw;
            eicsoeicqsmgyoyw:
            $qgoqiacsiccwoawi = 1;
            goto iocuaqcqoggiqgsw;
            wscqsciugescaoys:
            foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) {
                goto ocgkcmokykycoqwu;
                gqygesckmymkgeia:
                ksumissygaeqwiqk:
                goto cugygygwqumqwkmc;
                ogemcuimywmoauai:
                $qkweikswegyciaie->register($this->cisyiemkeykgkomc());
                goto scayqcumuauocuco;
                scayqcumuauocuco:
                $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\157\x72\155\137\155\x61\x6b\x65\x72\x5f\x74\141\142\x5f\163\151\x64\145\x5f\x63\157\156\x74\x61\151\156\145\x72\137{$aokagokqyuysuksm}", "\x73\x69\x64\x65");
                goto iyuyykuuksqgcoco;
                euukqqoeamysgaai:
                uciscoimiwuqsumg:
                goto eiuqssqeewecueaw;
                wemkygaugegmuyeq:
                if (!$qkweikswegyciaie->mukiwuqwmywsckco()) {
                    goto ksumissygaeqwiqk;
                }
                goto ogemcuimywmoauai;
                ocgkcmokykycoqwu:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto sskygwgyogmqgmqa;
                }
                goto gkqugmqmcaaewcgu;
                iyuyykuuksqgcoco:
                $qgoqiacsiccwoawi = 2;
                goto gqygesckmymkgeia;
                cugygygwqumqwkmc:
                sskygwgyogmqgmqa:
                goto euukqqoeamysgaai;
                gkqugmqmcaaewcgu:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\137\163\151\x64\145\137\155\145\x74\141\x62\157\x78\x65", $qkweikswegyciaie);
                goto wemkygaugegmuyeq;
                eiuqssqeewecueaw:
            }
            goto sciaeeisgiakmyyw;
            oksseoqyoqqkmooc:
        }
        goto uscaqiyymkyywsws;
        sakgiyogqqymcama:
        $iogqeouiuqyewuqe = '';
        goto goismqusymeooqae;
        usquuksweegcuqom:
        cwsscisucgswsugy:
        goto wycuuweqayggsikk;
        iicewkmmisuecsku:
        $this->qigsyyqgewgskemg("\167\x72\141\160\40\x63\x6d\x62\62\55\157\160\x74\x69\157\x6e\163\x2d\160\x61\147\x65\x20\x63\155\157\x2d\x6f\x70\x74\151\x6f\156\x73\55\160\141\x67\145")->qigsyyqgewgskemg($this->cisyiemkeykgkomc());
        goto wikqsescmyeeicwg;
        goismqusymeooqae:
        $kqweykcqkgkmoqay = '';
        goto iicewkmmisuecsku;
        wycuuweqayggsikk:
    }
    
    public function makgumuaykymweaq() : array
    {
        goto wgkicouqwayscuio;
        iouqskcmyecqmugo:
        
        $ywmkwiwkosakssii[] = $cmyoswawcimsecyy;
        goto awcyccimowsskmkc;
        awcyccimowsskmkc:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x6d\x65\x6e\x75\x5f\164\151\x74\x6c\x65") ? $this->agcaegggmmeuammg("\155\145\x6e\165\137\164\x69\x74\154\x65") : $cmyoswawcimsecyy;
        goto ckycaecsiwgmomgk;
        mumcqaqeakgcquac:
        
        $omwmuycmeqcqokom = $this->eyqwmckgumyaoams();
        goto caecagokwuouoymy;
        gwomwiesykqmmwgo:
        
        $ywmkwiwkosakssii[] = null;
        goto keicyiqusacogocc;
        aouikocwycssquau:
        wqyesuemouksaeac:
        goto aucmyygueiuuyygk;
        qcscwisoukgswcum:
        
        $ywmkwiwkosakssii[] = [$this, "\x71\x65\163\163\171\x69\165\x65\145\151\167\x77\x67\171\141\x67"];
        goto aywscouoieeksess;
        aaiekuiyqeykkgqq:
        cyciqqkakeosegoe:
        goto iouqskcmyecqmugo;
        asyskswoaqakaicc:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\155\145\156\x75\x5f\x73\154\x75\x67") ? $this->agcaegggmmeuammg("\155\145\156\x75\137\x73\x6c\165\147") : $this->cisyiemkeykgkomc();
        goto qcscwisoukgswcum;
        yossisaqeggqeokq:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\160\x6f\x73\151\164\x69\x6f\x6e") === null ? null : intval($this->agcaegggmmeuammg("\x70\x6f\x73\151\x74\x69\x6f\156"));
        goto ckaoqocygksqsoqg;
        ekskakueeqwgwyug:
        
        if (!$omwmuycmeqcqokom) {
            goto cyciqqkakeosegoe;
        }
        goto swykkkgaawkssqma;
        eskmyswgsosamscc:
        $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc;
        goto aaiekuiyqeykkgqq;
        aywscouoieeksess:
        
        if (!$omwmuycmeqcqokom) {
            goto wqyesuemouksaeac;
        }
        goto gwomwiesykqmmwgo;
        aucmyygueiuuyygk:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x69\x63\x6f\156\137\165\162\154") ? $this->agcaegggmmeuammg("\151\143\x6f\x6e\x5f\x75\162\x6c") : '';
        goto yossisaqeggqeokq;
        caecagokwuouoymy:
        $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\x70\x61\x72\x65\x6e\x74\x5f\x73\x6c\x75\147") ? $this->agcaegggmmeuammg("\x70\141\x72\145\156\164\137\163\x6c\165\x67") : $omwmuycmeqcqokom;
        goto seiaqecoeskumemq;
        yyqwgugicycyeosk:
        return $ywmkwiwkosakssii;
        goto kagywssammsigeky;
        swykkkgaawkssqma:
        
        $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\x3f\160\157\163\x74\137\x74\171\x70\x65\x3d{$this->kecacgyqmgeeqmme()}" : '';
        goto eskmyswgsosamscc;
        keicyiqusacogocc:
        goto eieckmqqcmcqcyiq;
        goto aouikocwycssquau;
        ckaoqocygksqsoqg:
        eieckmqqcmcqcyiq:
        goto qomugkkimygqeioo;
        qomugkkimygqeioo:
        
        $ywmkwiwkosakssii["\143\142"] = $omwmuycmeqcqokom ? "\x61\x64\x64\137\x73\x75\x62\155\145\x6e\x75\x5f\x70\x61\x67\x65" : "\x61\x64\x64\x5f\155\145\x6e\x75\x5f\x70\x61\x67\145";
        goto yyqwgugicycyeosk;
        wgkicouqwayscuio:
        $ywmkwiwkosakssii = [];
        goto mumcqaqeakgcquac;
        seiaqecoeskumemq:
        
        $cmyoswawcimsecyy = $this->agcaegggmmeuammg("\160\141\x67\145\x5f\x74\151\164\154\x65") ? $this->agcaegggmmeuammg("\x70\x61\x67\x65\137\164\151\164\x6c\145") : $this->qcgakseyaikigqco();
        goto ekskakueeqwgwyug;
        ckycaecsiwgmomgk:
        
        $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\x63\141\x70\x61\142\x69\x6c\151\164\x79");
        goto asyskswoaqakaicc;
        kagywssammsigeky:
    }
    public function soccomakweqgskic()
    {
        goto eoecsiksocyeiayk;
        geggqemsocqacmaa:
        
        $this->siqqwyaiwgagokug();
        goto xkqoueuawceokqwq;
        iwysasakqeoiqkea:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\x66\x74\145\162\137\151\x6e\x69\x74\x5f\150\x6f\x6f\x6b", false), $iaakskwmyqceoscy, $this);
        goto geggqemsocqacmaa;
        cewcquygkawaiscq:
        $this->oggwewqswcggccae($iaakskwmyqceoscy);
        goto qayqouemeyoeqece;
        gcmcgcuycmoywakk:
        
        $iaakskwmyqceoscy = $ywmkwiwkosakssii["\x63\x62"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6]);
        goto cewcquygkawaiscq;
        eoecsiksocyeiayk:
        
        $ywmkwiwkosakssii = $this->makgumuaykymweaq();
        goto gcmcgcuycmoywakk;
        qayqouemeyoeqece:
        
        $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\x5f\160\162\151\x6e\x74\137\x73\164\x79\154\x65\163\55{$this->mmsykuomogaqoaye()}", ["\x43\x4d\102\62\137\x68\x6f\157\x6b\165\160", "\x65\156\161\x75\x65\x75\145\137\143\155\142\137\x63\163\x73"])->qcsmikeggeemccuu("\141\x64\144\x5f\x6d\x65\x74\141\x5f\x62\157\x78\145\x73\137{$this->mmsykuomogaqoaye()}", [$this, "\167\x61\x63\145\155\x6b\161\155\151\167\x75\161\157\165\147\141"])->qcsmikeggeemccuu("\154\157\141\144\x2d{$this->mmsykuomogaqoaye()}", [$this, "\x6f\x67\x6b\x69\x69\145\x77\x73\143\145\x6d\141\161\x6b\x77\147"]);
        goto iwysasakqeoiqkea;
        xkqoueuawceokqwq:
    }
    private function siqqwyaiwgagokug()
    {
        goto ouucymmowsuymakm;
        mwemsqwigyycweai:
        if (!$symcuwcoqkwoscsg) {
            goto assouqamccmauuye;
        }
        goto aooumysewqkyewii;
        aooumysewqkyewii:
        foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) {
            goto sqqocygqgwkmgwaa;
            sqqocygqgwkmgwaa:
            $ywmkwiwkosakssii = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x61\162\x67\163", 1));
            goto gwawuyimyyieguwa;
            kiyuamyuuoiuwyag:
            if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi["\141\x63\x74\x69\x6f\x6e"], "\x2d\133\150\157\157\x6b\x5d"))) {
                goto imgiueoewusyceem;
            }
            goto wsqescacigqkgicg;
            sgmowmgweoqysoqg:
            imgiueoewusyceem:
            goto yaceceaiceoeweog;
            giaoygyymwwoqmgw:
            
            $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas);
            goto sgmowmgweoqysoqg;
            cmukqmgyeiqqyoye:
            
            $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1;
            goto giaoygyymwwoqmgw;
            icoggwwouyssowey:
            $ekiuyucoiagmscgy = ManipulateArray::get($sqaougiyimwumoqi, "\143\x61\154\154\142\x61\143\153");
            goto uokioguceweaqqse;
            gwawuyimyyieguwa:
            $aiamqeawckcsuaou = ManipulateArray::get($sqaougiyimwumoqi, "\x61\143\164\151\x6f\156");
            goto icoggwwouyssowey;
            uokioguceweaqqse:
            $sqqewmoeaekuyyas = intval(ManipulateArray::get($sqaougiyimwumoqi, "\x70\x72\x69\x6f\x72\151\164\x79", 10));
            goto kiyuamyuuoiuwyag;
            yaceceaiceoeweog:
            skmygcmwwgoaguwo:
            goto uycwieawygyekeoi;
            umcyiqykwoeegomm:
            
            $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10;
            goto cmukqmgyeiqqyoye;
            wsqescacigqkgicg:
            
            $aiamqeawckcsuaou = str_replace("\x5b\150\x6f\x6f\153\x5d", $iaakskwmyqceoscy, $aiamqeawckcsuaou);
            goto umcyiqykwoeegomm;
            uycwieawygyekeoi:
        }
        goto mqsgkwkggseuykio;
        smsmeycaqoqkgciw:
        $iaakskwmyqceoscy = $this->mmsykuomogaqoaye();
        goto mwemsqwigyycweai;
        mqsgkwkggseuykio:
        ayaksmyymwewccuw:
        goto oiymmoisooaocwyg;
        ouucymmowsuymakm:
        $symcuwcoqkwoscsg = $this->eigooueumicckoge();
        goto smsmeycaqoqkgciw;
        oiymmoisooaocwyg:
        assouqamccmauuye:
        goto kuiqmwsgukiwgguq;
        kuiqmwsgukiwgguq:
    }
    public function wacemkqmiwuqouga()
    {
        goto weaaqiuymusyaoim;
        yyuwoaymcmgagkek:
        if (!$ywoucyskcquysiwc) {
            goto wigmqayoaagkekug;
        }
        goto aaeaawawgiokuoqc;
        weaaqiuymusyaoim:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto yyuwoaymcmgagkek;
        sgkkuuwoeouqgeqc:
        foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) {
            goto gckukekaicosscko;
            cuawaegesykceuoi:
            $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\163\x69\144\x65");
            goto eceqwgecqgsugwyi;
            eceqwgecqgsugwyi:
            skoasiggcqccogqu:
            goto wamywgsgswmwgqes;
            gckukekaicosscko:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto skoasiggcqccogqu;
            }
            goto cuawaegesykceuoi;
            wamywgsgswmwgqes:
            aawgwoyccicqiooa:
            goto eccsqkqyiwqcocym;
            eccsqkqyiwqcocym:
        }
        goto acesmiyysymciaui;
        aaeaawawgiokuoqc:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
            goto gqocyuqyemgioaok;
            wymmooqweugwumuo:
            
            $uaqusiikkokccqou = ManipulateArray::yaeiiwwyckwugsem($uaqusiikkokccqou);
            goto uscaccweyakkqycu;
            ooiackiyssimocoy:
            qskaaemigoqyogiu:
            goto mueoecmegwgakkuu;
            syqcoysgaociwkmu:
            $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\164\141\142\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x6d\145\x74\141\142\157\170\x65\163", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this);
            goto wymmooqweugwumuo;
            ouqciucssmewqseu:
            amesgukaccuckock:
            goto ooiackiyssimocoy;
            umsqoiumeuayywuy:
            if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) {
                goto qskaaemigoqyogiu;
            }
            goto syqcoysgaociwkmu;
            gqocyuqyemgioaok:
            $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc());
            goto umsqoiumeuayywuy;
            mueoecmegwgakkuu:
            uumykgkackouocgc:
            goto ccyiauwwmeyoqmme;
            uscaccweyakkqycu:
            foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
                goto oamosmwemmmikgwo;
                ycumgkeaagawwkss:
                smgugiqksqkmsuys:
                goto wikycciwekuugqec;
                muqgkcsqkssymyem:
                $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm();
                goto eamyyoygceikikcy;
                oamosmwemmmikgwo:
                $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137\164\141\142\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\x6d\x65\164\141\142\157\x78\137{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this);
                goto kgeomuicikkomkie;
                emoekgyaiwksgwoa:
                oeeaaoyyucuuwkuu:
                goto ycumgkeaagawwkss;
                eamyyoygceikikcy:
                $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\163\x69\144\145" ? "\156\x6f\162\x6d\141\x6c" : $mgkceomocowocqyo);
                goto emoekgyaiwksgwoa;
                kgeomuicikkomkie:
                if (!$qkweikswegyciaie instanceof MetaBox) {
                    goto oeeaaoyyucuuwkuu;
                }
                goto muqgkcsqkssymyem;
                wikycciwekuugqec:
            }
            goto ouqciucssmewqseu;
            ccyiauwwmeyoqmme:
        }
        goto wyswgiqmuwyiqama;
        yywywwmawmmyuwms:
        wigmqayoaagkekug:
        goto sgkkuuwoeouqgeqc;
        wyswgiqmuwyiqama:
        ieuoockquscyauiy:
        goto yywywwmawmmyuwms;
        acesmiyysymciaui:
        gwysqygykiqwgugc:
        goto qmiwkumwuqywukmg;
        qmiwkumwuqywukmg:
    }
    
    public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\x6e\157\162\x6d\x61\x6c")
    {
        goto qkmoekswwgmogsgg;
        imeagymkkagggkec:
        sgugyikwqeswcaos:
        goto yeiwygkuemkoykis;
        ikegeeiesieogisa:
        gkemwmiykeiyuska:
        goto aaowoieokoumsyqc;
        qkmoekswwgmogsgg:
        if (!is_array($uoeiskamgscgeccq)) {
            goto sgugyikwqeswcaos;
        }
        goto igcyymyqeawqkwgm;
        msmcymkewouiuuse:
        qykisyqcgokcuiqs:
        goto kieygmqycuywqgay;
        acewwgmgwegkqkmg:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x79\x69\x65\155\x75\163\x67\161\155\157\x79\x6d\163\x67\x65\x67"]);
        goto ikegeeiesieogisa;
        wayyqekkqyeoeiwo:
        $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x65\x77\x73\153\x6b\x77\165\x77\153\x6b\x6b\141\x71\x77\147\x6b"]);
        goto bocwykmykkkoioyq;
        bocwykmykkkoioyq:
        qgaywmweyqweqkme:
        goto wmiywmecqmaeagwc;
        igcyymyqeawqkwgm:
        $uoeiskamgscgeccq = ManipulateArray::get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea());
        goto imeagymkkagggkec;
        koqciqwwomauuqci:
        $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea();
        goto oyymggqmgsymkyua;
        yeiwygkuemkoykis:
        if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) {
            goto qykisyqcgokcuiqs;
        }
        goto koqciqwwomauuqci;
        oyymggqmgsymkyua:
        $this->qcsmikeggeemccuu("\x63\155\142\x32\137\x73\141\x76\145\x5f\x6f\x70\164\x69\157\x6e\x73\55\160\x61\147\145\137\x66\151\145\154\x64\x73\137{$aokagokqyuysuksm}", [$this, "\147\157\171\145\155\x69\153\x6f\x67\145\x75\163\x6b\x67\141\x73"], 10, 2);
        goto ouasygcguacqoomm;
        wmiywmecqmaeagwc:
        
        if (!$uoeiskamgscgeccq->meta_box["\143\154\157\x73\x65\x64"]) {
            goto gkemwmiykeiyuska;
        }
        goto acewwgmgwegkqkmg;
        ouasygcguacqoomm:
        $wyicesskmckwqeec = "\160\157\x73\x74\142\x6f\x78\x5f\x63\x6c\141\163\x73\x65\x73\x5f{$this->mmsykuomogaqoaye()}\137{$aokagokqyuysuksm}";
        goto coqcgqgsuagaoqgo;
        coqcgqgsuagaoqgo:
        if (!($this->myomgmiksogoikuc() && $mgkceomocowocqyo !== "\163\x69\x64\145")) {
            goto qgaywmweyqweqkme;
        }
        goto wayyqekkqyeoeiwo;
        aaowoieokoumsyqc:
        $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo);
        goto msmcymkewouiuuse;
        kieygmqycuywqgay:
    }
    
    public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo)
    {
        add_meta_box($qkweikswegyciaie->mwikyscisascoeea(), $qkweikswegyciaie->iwqugwigmoiagwec(), [$this, "\141\x75\x73\171\x6d\155\147\163\x6b\x73\157\161\167\165\x71\153"], $iaakskwmyqceoscy, $mgkceomocowocqyo, $qkweikswegyciaie->yywskysiycwkwsgw());
    }
    public function wqqckkmqakiquycs()
    {
        goto cogiokiwsggickqu;
        fsaiawesoowogmek:
        wuagokiooeiuokqs:
        goto kwgcqoqewyqaoosk;
        kwgcqoqewyqaoosk:
        uoiooiwsmoysksqm:
        goto cmqkcsayqiqugyce;
        ywqqgwecosgicaim:
        $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\x2d\141\x64\155\x69\156";
        goto qsqcmociaogwiggs;
        kqmyqoqwaoaqgemm:
        if (!$this->myomgmiksogoikuc()) {
            goto wuagokiooeiuokqs;
        }
        goto ywqqgwecosgicaim;
        qsqcmociaogwiggs:
        DecoratorAsset::imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\x6d\165\x6c\164\151\x6f\160\x74\163\56\x6a\163"));
        goto twuqeqeisoggkkmg;
        twuqeqeisoggkkmg:
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        goto oouiqmqcowoqqwyi;
        wwakqukuoioceyck:
        DecoratorAsset::fowiaymccsmewemu($eueuqacmukymcyya, "\x50\115\120\122\x4f\x70\164\124\141\142\x73", ["\x6b\145\171" => $this->kyqakacqeumicgag(), "\160\x6f\163\x74\x74\x79\x70\x65" => $this->kecacgyqmgeeqmme(), "\x64\x65\146\x61\x75\154\x74\x74\141\142" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']);
        goto fsaiawesoowogmek;
        cogiokiwsggickqu:
        if (!$this->csaueuycewaiuaay()) {
            goto uoiooiwsmoysksqm;
        }
        goto kqmyqoqwaoaqgemm;
        oouiqmqcowoqqwyi:
        $cciauwuwuqaywgce = reset($ywoucyskcquysiwc);
        goto wwakqukuoioceyck;
        cmqkcsayqiqugyce:
    }
    public function uuqqkgyqekmgycgq()
    {
        goto ucwgiecogkaesuko;
        cekgqucskcgyoakq:
        $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\155\145\x74\x61\164\141\142\56\x63\163\163", ["\160\141\x67\x65" => $this->kyqakacqeumicgag()]);
        goto uquugcsmgsmmwywo;
        ucwgiecogkaesuko:
        if (!$this->myomgmiksogoikuc()) {
            goto oeuiyomkweusgawu;
        }
        goto cekgqucskcgyoakq;
        oouomgcseggcugyi:
        oeuiyomkweusgawu:
        goto agwiwkwmowuuscsg;
        uquugcsmgsmmwywo:
        ManipulateHTML::awwqwouuoioauoaw("\x73\164\x79\154\x65", ["\151\144" => "\x70\x72\55\x74\141\142\55\x63\154\145\141\156\165\x70\55\143\x73\x73"], true, $icyaoosaykeskiuu);
        goto oouomgcseggcugyi;
        agwiwkwmowuuscsg:
    }
    public function iaggsikquucsoiko()
    {
        ManipulateHTML::awwqwouuoioauoaw("\163\143\162\x69\x70\164", [], true, "\152\x51\x75\145\162\171\50\x64\x6f\143\x75\x6d\145\156\164\x29\x2e\x72\145\141\144\171\50\146\x75\156\x63\164\151\157\156\50\x29\x7b\x70\157\x73\164\x62\157\x78\x65\x73\56\141\144\144\137\x70\157\x73\164\x62\157\170\x5f\x74\157\x67\147\154\x65\x73\50\x22\160\x6f\x73\x74\x62\x6f\x78\x2d\143\157\x6e\164\x61\151\x6e\x65\x72\x22\x29\x3b\x7d\51\x3b");
    }
    public function ecyyqsgwwuukgssg()
    {
        goto ueigayyqqomcisui;
        ueigayyqqomcisui:
        if (!($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw())) {
            goto qskqawaewmgquwmq;
        }
        goto wckioasgmwqugauw;
        wckioasgmwqugauw:
        echo $this->uaasoaieuoymsgsi();
        goto eokeqaomwmsymuyi;
        eokeqaomwmsymuyi:
        qskqawaewmgquwmq:
        goto siqwwuiuqwcayisu;
        siqwwuiuqwcayisu:
    }
    
    private function uaicqoagkoeacawy($uoeiskamgscgeccq)
    {
        
        return isset($uoeiskamgscgeccq->meta_box["\163\x68\x6f\x77\x5f\157\156"]["\153\x65\x79"]) && $uoeiskamgscgeccq->meta_box["\163\150\x6f\x77\137\157\156"]["\153\x65\171"] === "\x6f\160\x74\x69\157\156\x73\x2d\160\x61\147\x65" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\x73\150\x6f\167\x5f\157\x6e"]["\x76\x61\154\x75\145"]);
    }
    
    public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu)
    {
        goto ecmwimqmggogysoe;
        ecmwimqmggogysoe:
        if (!($this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $sogsqsawoyqmqsqu && !$this->ccauywsgwsesgmua())) {
            goto uegaugwmyucmooyu;
        }
        goto emmseyuagaaweuek;
        ccequccokicuawum:
        uegaugwmyucmooyu:
        goto cgaoeuasmuicmyoq;
        iuwimogikcucogci:
        $this->once = true;
        goto ccequccokicuawum;
        waiqusgyaeegsqqw:
        settings_errors("{$this->cisyiemkeykgkomc()}\x2d\156\x6f\x74\x69\x63\145\163");
        goto iuwimogikcucogci;
        emmseyuagaaweuek:
        add_settings_error("{$this->cisyiemkeykgkomc()}\55\156\x6f\x74\151\143\145\163", '', __("\x53\145\x74\164\151\x6e\147\163\40\125\160\x64\141\164\x65\x64", PR__CMN__FOUNDATION), "\x75\x70\144\x61\164\x65\x64");
        goto waiqusgyaeegsqqw;
        cgaoeuasmuicmyoq:
    }
    
    public function uaasoaieuoymsgsi() : ?string
    {
        return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\x6e\x61\x6d\145" => "\x73\165\142\155\151\x74\x2d\x63\155\142", "\x74\x79\160\145" => "\x73\x75\142\x6d\x69\x74", "\143\x6c\141\163\x73" => "\142\x75\164\164\x6f\156\55\x70\x72\x69\155\x61\162\x79"]);
    }
    
    public function omeeeegkauuouaka() : string
    {
        return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\156\x61\x6d\145" => "\162\145\x73\x65\164\55\x63\x6d\x62", "\164\171\160\145" => "\142\165\x74\164\x6f\x6e", "\143\154\141\163\163" => "\x62\165\x74\164\x6f\x6e\55\163\x65\x63\x6f\x6e\144\141\162\x79"]);
    }
    
    public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = []) : string
    {
        return $pkyyagewkiyckmwy ? ManipulateHTML::qgsekwygcgawekeq("\151\156\160\165\x74", ManipulateFormat::omaawkkwwyesqwcc($wwgucssaecqekuek, ["\143\x6c\141\163\163" => "\x62\x75\x74\164\157\x6e", "\x76\x61\154\x75\x65" => $pkyyagewkiyckmwy])) : '';
    }
    
    public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x6f\160\x74\55\150\151\x64\144\145\x6e";
        return $cmkqisoeyioisqaw;
    }
    
    public function yiemusgqmoymsgeg($cmkqisoeyioisqaw)
    {
        $cmkqisoeyioisqaw[] = "\x63\154\157\163\145\144";
        return $cmkqisoeyioisqaw;
    }
    public function ogkiiewscemaqkwg()
    {
        $this->cqscqicucmeamkyq("\x61\x64\x64\x5f\x6d\x65\x74\x61\x5f\x62\x6f\x78\x65\x73\137{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\141\x64\144\x5f\x6d\x65\164\141\137\142\x6f\170\x65\x73", $this->mmsykuomogaqoaye(), null);
    }
    
    public function ausymmgsksoqwuqk($post, $qkweikswegyciaie)
    {
        goto ucomiwksyqswgwmm;
        egswwwwgmeecegem:
        goto eqiigmauqkoswiys;
        goto ceyumqqeccuiuwsw;
        wugsmyikwkyususo:
        $icwicymcioeyeyek = $_POST;
        goto icuoakkeswccquuo;
        soakqssqaoaqkkck:
        
        $scegeeyqweaksmki->show_form();
        goto qesoesykasouikck;
        cywcqkecgwkgssgy:
        goto eqiigmauqkoswiys;
        goto egkokuggowqoogwe;
        iwwmukmsgwoesima:
        if (!$scegeeyqweaksmki) {
            goto ouomuyeqsugykuyk;
        }
        goto wugsmyikwkyususo;
        mskkgeiykcaoqosq:
        
        $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek);
        goto cywcqkecgwkgssgy;
        ucomiwksyqswgwmm:
        
        $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie["\151\144"], $this->cisyiemkeykgkomc());
        goto iwwmukmsgwoesima;
        icuoakkeswccquuo:
        if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto gaweiceicsykweqs;
        }
        goto eqmgcgwcgkuoqyya;
        egkokuggowqoogwe:
        meuckssskyaesage:
        goto mugykqoymeugqasw;
        qesoesykasouikck:
        ouomuyeqsugykuyk:
        goto wyuiuogqiqasaumy;
        mugykqoymeugqasw:
        
        DecoratorOption::delete($this->cisyiemkeykgkomc());
        goto yewqwkoaeqqegiyi;
        eqmgcgwcgkuoqyya:
        if ($this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) {
            goto meuckssskyaesage;
        }
        goto egswwwwgmeecegem;
        yewqwkoaeqqegiyi:
        eqiigmauqkoswiys:
        goto soakqssqaoaqkkck;
        ceyumqqeccuiuwsw:
        gaweiceicsykweqs:
        goto mskkgeiykcaoqosq;
        wyuiuogqiqasaumy:
    }
    
    private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto gaeewoieegegmwmw;
        mmgaoiukskgaskye:
        return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($_POST[$scegeeyqweaksmki->gwgqcsmomamyqsmy()], $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto mawaowggkucoosoc;
        ooyikkuecqewakee:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\x6f\142\152\x65\x63\x74\x5f\x69\x64");
        goto mmgaoiukskgaskye;
        gesqgakoekiukmsa:
        $ooewkimkcskcwsso = ManipulateArray::get($icwicymcioeyeyek, "\162\145\163\145\164\55\x63\155\x62");
        goto ooyikkuecqewakee;
        gaeewoieegegmwmw:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto gesqgakoekiukmsa;
        mawaowggkucoosoc:
    }
    
    private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)
    {
        goto taisikggaaysayue;
        taisikggaaysayue:
        $gwgqcsmomamyqsmy = ManipulateArray::get($icwicymcioeyeyek, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto mouyseuswmcisysg;
        iyoiumqkociwggwi:
        return $scegeeyqweaksmki->csgiecsagosuucqo("\163\141\x76\x65\137\x66\151\x65\154\x64\x73") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $scegeeyqweaksmki->gwgqcsmomamyqsmy());
        goto asqwcaswskmaiuei;
        mouyseuswmcisysg:
        $kqokimuosyuyyucg = ManipulateArray::get($icwicymcioeyeyek, "\x6f\x62\152\x65\143\x74\x5f\x69\144");
        goto iyoiumqkociwggwi;
        asqwcaswskmaiuei:
    }
    
    public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool
    {
        goto qsoicugccmgoaooq;
        gwoqwogmyqmaekeq:
        $icwicymcioeyeyek = $_POST;
        goto qaqeuqcqwyqigguw;
        qaqeuqcqwyqigguw:
        kusykiciiukqkwcs:
        goto awuymmyewogkskka;
        awuymmyewogkskka:
        return (bool) ManipulateArray::get($icwicymcioeyeyek, "\163\165\x62\x6d\151\164\55\143\x6d\x62", false);
        goto wqsgwiecyyamgugu;
        qsoicugccmgoaooq:
        if ($icwicymcioeyeyek) {
            goto kusykiciiukqkwcs;
        }
        goto gwoqwogmyqmaekeq;
        wqsgwiecyyamgugu:
    }
    
    public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array
    {
        goto ksaecqkkqkqumiyy;
        aemgieoigwoaoqey:
        keisauiosaguwkmg:
        goto yuscokykcoymyyiq;
        aksqawoycgigewoo:
        if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) {
            goto oqcoyuausmgccywa;
        }
        goto yauygqguooyuiick;
        yauygqguooyuiick:
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) {
            goto wkeegycggsggcsiy;
            wuaeweseqayacqis:
            $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie);
            goto iekcwimcmsemsgmo;
            wkeegycggsggcsiy:
            if (is_object($qkweikswegyciaie)) {
                goto memikioiiekcqoqc;
            }
            goto wuaeweseqayacqis;
            iekcwimcmsemsgmo:
            memikioiiekcqoqc:
            goto qsaomeeimaagqewc;
            qsaomeeimaagqewc:
            ikigycmycsqieeoi:
            goto qygwmuiaqciwymgw;
            qygwmuiaqciwymgw:
        }
        goto aemgieoigwoaoqey;
        wimsassgwgimayck:
        return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas;
        goto omimqwkiqwicccmw;
        yuscokykcoymyyiq:
        oqcoyuausmgccywa:
        goto wimsassgwgimayck;
        ksaecqkkqkqumiyy:
        $saouceauqqiwcwas = [];
        goto aksqawoycgigewoo;
        omimqwkiqwicccmw:
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return $this->cisyiemkeykgkomc() === ManipulateServer::get("\x70\141\147\145");
    }
    
    public function __toString()
    {
        return self::uqggkiomyiceyooa();
    }
}

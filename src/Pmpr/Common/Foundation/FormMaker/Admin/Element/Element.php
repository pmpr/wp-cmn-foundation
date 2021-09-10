<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Interfaces\ElementInterface;
use Pmpr\Common\Foundation\FormMaker\Admin\MetaTab;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait;
use Pmpr\Common\Foundation\FormMaker\Admin\Common;
use CMB2_Field;
use Pmpr\Common\Foundation\Traits\ToArrayTrait;

class Element extends Common implements ElementInterface
{
    use FieldTrait, ToArrayTrait, ElementTrait;
    
    protected int $priority = 0;
    
    protected bool $show = true;
    
    protected ?string $id = null;
    
    protected ?string $name = null;
    
    protected ?string $title = null;
    
    protected bool $showNames = false;
    
    protected $objectType = "\x6f\160\164\151\x6f\156\x73\x2d\x70\141\147\145";
    
    protected ?string $capability = null;
    
    protected array $configuration = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto qmykwwkysceaysea;
        uomaegayqaycamwq:
        $this->capability = "\x6d\141\x6e\141\147\145\137\x6f\160\164\151\157\156\163";
        goto kqkicmysyusskuua;
        iuiymememwkaqcuk:
        $this->showNames = true;
        goto uomaegayqaycamwq;
        yssakamqiieugqyk:
        parent::__construct();
        goto yqwgcuuuocyqysso;
        qmykwwkysceaysea:
        $this->id = $aokagokqyuysuksm;
        goto iuiymememwkaqcuk;
        kqkicmysyusskuua:
        $this->configuration = [];
        goto yssakamqiieugqyk;
        yqwgcuuuocyqysso:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x77\x70", [$this, "\147\x6f\163\x6d\x71\x63\155\155\157\x6d\153\161\167\x6d\151\x73"], 99)->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\151\156\x69\164"], 99)->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\151\x6e\x69\x74", [$this, "\x79\x65\x79\x69\147\165\171\x65\147\155\155\x79\165\163\145\141"], 99);
        parent::wigskegsqequoeks();
    }
    public function gogaagekwoisaqgu()
    {
    }
    public function init()
    {
        $this->gogaagekwoisaqgu();
    }
    public function yeyiguyegmmyusea()
    {
    }
    public function gosmqcmmomkqwmis()
    {
    }
    
    public function wkkcmkuiigsukyik() : bool
    {
        return $this->show;
    }
    
    public function wiukukykqcgssssq($ekcswiguywieeeoc = true) : self
    {
        $this->show = $ekcswiguywieeeoc;
        return $this;
    }
    
    public function gwaeeegmgggawiyi() : ?string
    {
        return $this->capability;
    }
    
    public function womysscuckiacoua(string $eogowigeyucaauig) : self
    {
        $this->capability = $eogowigeyucaauig;
        return $this;
    }
    
    public function aaamyckgicycisqq()
    {
        return $this->objectType;
    }
    
    public function ycgswwsswoyyeqgc($mqyaskyaekmkegmg) : self
    {
        $this->objectType = $mqyaskyaekmkegmg;
        return $this;
    }
    
    public function ekwcyuwcmeeoyqqm(array $seyqqsmuaiegkeeq = []) : self
    {
        $this->wcweamocuicuusky("\x74\x61\x78\x6f\156\x6f\x6d\151\x65\x73", $seyqqsmuaiegkeeq);
        return $this->ycgswwsswoyyeqgc("\164\x65\162\x6d");
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self
    {
        $this->title = $meqocwsecsywiiqs;
        return $this;
    }
    public function ecwgiiuacoaokqkw()
    {
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function usuqmwksoeaayaig(string $ymqmyyeuycgmigyo) : self
    {
        $this->name = $ymqmyyeuycgmigyo;
        return $this;
    }
    
    public function eoceqqugyiaqqayw() : ?bool
    {
        return $this->showNames;
    }
    
    public function eioykqwseqsqaskq(bool $egmsqkuugooyouuu) : self
    {
        $this->showNames = $egmsqkuugooyouuu;
        return $this;
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(string $aokagokqyuysuksm) : self
    {
        $this->id = $aokagokqyuysuksm;
        return $this;
    }
    
    public function yywskysiycwkwsgw() : ?int
    {
        return $this->priority;
    }
    
    public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self
    {
        $this->priority = $sqqewmoeaekuyyas;
        return $this;
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        goto qyogwowwcogugweq;
        uoeegwsgqyokwwws:
        miekisauamqswgie:
        goto ugssgcuiagwkicqq;
        ugssgcuiagwkicqq:
        return '';
        goto qcuiamcckoceggwu;
        geywkoimqymqkyem:
        return $ymqmyyeuycgmigyo;
        goto uoeegwsgqyokwwws;
        mqogcscwmowgogkm:
        return $aokagokqyuysuksm;
        goto cgueqqgoouykmoes;
        gcskwyqqyqmauwow:
        amyqwcqwqccgwigq:
        goto mqogcscwmowgogkm;
        eeqaqskwawmqocaa:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto caasqyskqsecuawu;
        iyomyggaemmmucqq:
        if ($ymqmyyeuycgmigyo) {
            goto ccsemsumseigmmoa;
        }
        goto ckwwkkemmmccgcws;
        ckwwkkemmmccgcws:
        goto miekisauamqswgie;
        goto gcskwyqqyqmauwow;
        komwmwgumckimamm:
        ccsemsumseigmmoa:
        goto geywkoimqymqkyem;
        qyogwowwcogugweq:
        $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu();
        goto eeqaqskwawmqocaa;
        caasqyskqsecuawu:
        if ($aokagokqyuysuksm) {
            goto amyqwcqwqccgwigq;
        }
        goto iyomyggaemmmucqq;
        cgueqqgoouykmoes:
        goto miekisauamqswgie;
        goto komwmwgumckimamm;
        qcuiamcckoceggwu:
    }
    
    public function icwmkesyskgskquu() : ?bool
    {
        return true;
    }
    
    public function weqsyyuyccsemacu() : array
    {
        return $this->configuration;
    }
    
    public function megwuoouecmkuaqm($oyuikeusicgqgwak) : self
    {
        goto soisuocuwuwaaoig;
        sugqcoagaisyeuge:
        iiukuwmwimmiiiim:
        goto ooaiowseiuogqeek;
        ooaiowseiuogqeek:
        return $this;
        goto kwigscuqywmmyess;
        soisuocuwuwaaoig:
        foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            $this->wcweamocuicuusky($uusmaiomayssaecw, $uiewakwqscemywuo);
            ewukmsoywcsagcsg:
        }
        goto sugqcoagaisyeuge;
        kwigscuqywmmyess:
    }
    
    public function wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto iusicoaiyamcoikg;
        gyessymseyoiocey:
        return $this;
        goto uguigcssweukyeic;
        gsaascomiaiemesg:
        $this->configuration[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto egqgieqcwseicqki;
        iusicoaiyamcoikg:
        if (isset($this->configuration[$uusmaiomayssaecw])) {
            goto qmqakowgsqgcqass;
        }
        goto gsaascomiaiemesg;
        egqgieqcwseicqki:
        qmqakowgsqgcqass:
        goto gyessymseyoiocey;
        uguigcssweukyeic:
    }
}

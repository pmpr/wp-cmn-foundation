<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    
    protected $objectType = "\x6f\x70\164\x69\157\156\x73\55\160\x61\147\x65";
    
    protected ?string $capability = null;
    
    protected array $configuration = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto oekcuiaykkcusgkm;
        wimkqoekscwcoauw:
        $this->capability = "\155\141\x6e\x61\x67\x65\x5f\157\160\x74\151\157\156\x73";
        goto ikemwmsywqqqiqsa;
        ggymiommyoaqkwko:
        parent::__construct();
        goto wweyewgicswqweyq;
        ikemwmsywqqqiqsa:
        $this->configuration = [];
        goto ggymiommyoaqkwko;
        oekcuiaykkcusgkm:
        $this->id = $aokagokqyuysuksm;
        goto oakygoegqigkcwug;
        oakygoegqigkcwug:
        $this->showNames = true;
        goto wimkqoekscwcoauw;
        wweyewgicswqweyq:
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\167\160", [$this, "\x67\157\163\x6d\161\143\155\155\157\x6d\153\161\167\x6d\x69\163"], 99)->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x69\156\151\x74"], 99)->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x69\156\x69\164", [$this, "\x79\x65\171\151\x67\x75\x79\145\x67\155\x6d\x79\165\x73\145\x61"], 99);
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
        $this->wcweamocuicuusky("\x74\x61\x78\157\x6e\157\x6d\151\x65\163", $seyqqsmuaiegkeeq);
        return $this->ycgswwsswoyyeqgc("\x74\x65\x72\155");
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
        goto ysuwseamckigmoge;
        qiiyiqwyoomsueuq:
        if ($ymqmyyeuycgmigyo) {
            goto qesmouyqgeigoyay;
        }
        goto squwouwckwiwquyu;
        cawcqogqmaaiaeim:
        $aokagokqyuysuksm = $this->mwikyscisascoeea();
        goto ckiesggkeyocyoia;
        komeykuoomsymayc:
        return '';
        goto wiuoyosaiuqqmiss;
        yawsiksqqgmeeiws:
        goto cgmociyqmykaqmya;
        goto iiauuwmeoiiqeigi;
        ckiesggkeyocyoia:
        if ($aokagokqyuysuksm) {
            goto imksqaayamqiwwuw;
        }
        goto qiiyiqwyoomsueuq;
        iiauuwmeoiiqeigi:
        qesmouyqgeigoyay:
        goto wgguesgmyqgyescc;
        wgguesgmyqgyescc:
        return $ymqmyyeuycgmigyo;
        goto sockicoiuuuygkyo;
        huuswamyiwgiymou:
        imksqaayamqiwwuw:
        goto aqocckgoumwuoyco;
        squwouwckwiwquyu:
        goto cgmociyqmykaqmya;
        goto huuswamyiwgiymou;
        sockicoiuuuygkyo:
        cgmociyqmykaqmya:
        goto komeykuoomsymayc;
        aqocckgoumwuoyco:
        return $aokagokqyuysuksm;
        goto yawsiksqqgmeeiws;
        ysuwseamckigmoge:
        $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu();
        goto cawcqogqmaaiaeim;
        wiuoyosaiuqqmiss:
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
        goto oqecugiicgkgisyi;
        gaykosyqceuygmiq:
        return $this;
        goto gmeksiaumseqkqug;
        usweuqkmumcwckoo:
        iqacckgckyoioccs:
        goto gaykosyqceuygmiq;
        oqecugiicgkgisyi:
        foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $uiewakwqscemywuo) {
            $this->wcweamocuicuusky($uusmaiomayssaecw, $uiewakwqscemywuo);
            weqqwqaoyugaiaqs:
        }
        goto usweuqkmumcwckoo;
        gmeksiaumseqkqug:
    }
    
    public function wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        goto mmiwmgwcsgqoemws;
        aysoywgeacaeuyao:
        return $this;
        goto oeyoocigmyyssieq;
        qomimwecwqaeyqwu:
        $this->configuration[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        goto cwcqmsuqqsauemuw;
        cwcqmsuqqsauemuw:
        eiuugowioueiceoc:
        goto aysoywgeacaeuyao;
        mmiwmgwcsgqoemws:
        if (isset($this->configuration[$uusmaiomayssaecw])) {
            goto eiuugowioueiceoc;
        }
        goto qomimwecwqaeyqwu;
        oeyoocigmyyssieq:
    }
}

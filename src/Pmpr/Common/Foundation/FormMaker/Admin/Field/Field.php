<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Template\Traits\TemplateTrait;
use Pmpr\Common\Foundation\Traits\AttributeTrait;
use Pmpr\Common\Foundation\Traits\ToArrayTrait;

class Field
{
    use AttributeTrait, ToArrayTrait, TemplateTrait;
    
    protected array $ignorables = [];
    
    protected array $errors = [];
    
    protected ?string $id = null;
    
    protected ?int $priority = 0;
    
    protected ?string $type = null;
    
    protected ?string $name = null;
    
    protected $default = null;
    
    protected ?string $desc = null;
    
    protected $classes;
    
    protected $defaultCb = null;
    
    protected $restValueCb;
    
    protected $value;
    
    public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        if (!$sqeykgyoooqysmca) {
            wp_die('field type is not set, metaBox: ' . get_called_class());
        }
        $this->ggiaseqygioygumq($aokagokqyuysuksm);
        $this->type = $sqeykgyoooqysmca;
        $this->name = $ymqmyyeuycgmigyo;
        $this->desc = $mkqqqewsokcswckc;
        $this->attributes = [];
        $this->imgcoakmmgqsckkm(12);
        if (!in_array($this->gueasuouwqysmomu(), ['group', 'radio', 'button', 'multi_buttons'])) {
            $this->qigsyyqgewgskemg('w-100');
        }
    }
    
    public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, 'sm');
    }
    
    public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, 'md');
    }
    
    public function oiwawawcmigageco($imgcoakmmgqsckkm) : self
    {
        return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, 'lg');
    }
    
    public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        $egkyssmuqcwaciya = "col";
        if ($gcgsqcoqciockquc) {
            $egkyssmuqcwaciya .= "-{$gcgsqcoqciockquc}";
        }
        $egkyssmuqcwaciya .= "-{$imgcoakmmgqsckkm}";
        $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
        return $this;
    }
    
    public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self
    {
        $egkyssmuqcwaciya = "col";
        if ($gcgsqcoqciockquc) {
            $egkyssmuqcwaciya .= "-{$gcgsqcoqciockquc}";
        }
        $egkyssmuqcwaciya .= "-{$imgcoakmmgqsckkm}";
        $this->yqoekuewicqoescm($egkyssmuqcwaciya);
        return $this;
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self
    {
        $this->mykogkuaqwmycgog("field-id-{$this->mwikyscisascoeea()}");
        $this->id = $aokagokqyuysuksm;
        $this->qigsyyqgewgskemg("field-id-{$aokagokqyuysuksm}")->qcgocuceocquqcuw('data-field-id', $aokagokqyuysuksm);
        return $this;
    }
    
    public function yywskysiycwkwsgw() : ?int
    {
        return $this->priority;
    }
    
    public function jyumyyugiwwiqomk($sqqewmoeaekuyyas) : self
    {
        $this->priority = $sqqewmoeaekuyyas;
        return $this;
    }
    
    public function iukseawoegcgwcoy(&$wwgucssaecqekuek, $ggauoeuaesiymgee, $uusmaiomayssaecw = null) : self
    {
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $ggauoeuaesiymgee);
        return $this;
    }
    
    public function miwgyweukiaicmos()
    {
        return $this->defaultCb;
    }
    
    public function qqowmcseeoiskoug($qwiycwgywyomkoog) : self
    {
        $this->defaultCb = $qwiycwgywyomkoog;
        return $this;
    }
    
    public function gueasuouwqysmomu() : ?string
    {
        return $this->type;
    }
    
    protected function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self
    {
        $this->type = $sqeykgyoooqysmca;
        return $this;
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        $this->name = $ymqmyyeuycgmigyo;
        return $this;
    }
    
    public function oiswysuiioecsaae($aokagokqyuysuksm = null)
    {
        $ggauoeuaesiymgee = $this->default;
        if ($aokagokqyuysuksm) {
            $eqgoocgaqwqcimie = DecoratorOption::get($aokagokqyuysuksm, $ggauoeuaesiymgee);
        } else {
            $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        }
        return $eqgoocgaqwqcimie;
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : self
    {
        $this->default = $ggauoeuaesiymgee;
        return $this;
    }
    
    public function uuwsoaqmkwcgaqes() : ?string
    {
        return $this->desc;
    }
    
    public function ccmwycqioaicegoc(?string $mkqqqewsokcswckc) : self
    {
        $this->desc = $mkqqqewsokcswckc;
        return $this;
    }
    
    public function cuisiyiswcqkuogm()
    {
        return $this->classes;
    }
    
    public function eumecwmqmukqgyea() : self
    {
        return $this->qcgocuceocquqcuw('required', 'required');
    }
    
    public function msmiagueogcsucgc() : ?string
    {
        return $this->waecsyqmwascmqoa('required');
    }
    
    public function masauymeceuiyceo() : self
    {
        return $this->qigsyyqgewgskemg('direction-rtl');
    }
    
    public function yskkmqiusguummwa() : self
    {
        return $this->qigsyyqgewgskemg('direction-ltr');
    }
    
    public function usoqcyyugsuyiewc(?string $egkyssmuqcwaciya) : self
    {
        $this->classes = ManipulateHTML::igmaewykumgwoaoy($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya);
        return $this;
    }
    
    public function yqoekuewicqoescm(?string $egkyssmuqcwaciya) : self
    {
        $this->classes = ManipulateHTML::ogaeogwycyqqckeu($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya);
        return $this;
    }
    
    public function wkmawgqeysyeiakk(array $cmkqisoeyioisqaw) : self
    {
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->usoqcyyugsuyiewc($egkyssmuqcwaciya);
            micceocwuwkyusic:
        }
        kqyoakickmseyyeq:
        return $this;
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        return $this->usoqcyyugsuyiewc('cmb-row-inline');
    }
    
    public function yoimakcqmoqokkcu() : self
    {
        return $this->usoqcyyugsuyiewc('cmb-row-block');
    }
    
    public function qooeaookuemoqecm()
    {
        return $this->value;
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self
    {
        $this->value = $eqgoocgaqwqcimie;
        return $this;
    }
    
    public function ccakgucwwemiwkoi($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        if (is_array($eqgoocgaqwqcimie)) {
            $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
        }
        $this->qigsyyqgewgskemg('depended-to')->qcgocuceocquqcuw('data-depended', $uusmaiomayssaecw)->qcgocuceocquqcuw('data-depended-value', $eqgoocgaqwqcimie);
        return $this;
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea());
        if ($eqgoocgaqwqcimie) {
            $kkeqqkkkqwkocsyu['default'] = $eqgoocgaqwqcimie;
        }
        return $kkeqqkkkqwkocsyu;
    }
    
    public function agkauiesooccqsae() : ?callable
    {
        return $this->restValueCb;
    }
    
    public function aygqoksyisymwcuw(callable $wkmuskegugkocuwc) : self
    {
        $this->restValueCb = $wkmuskegugkocuwc;
        return $this;
    }
    
    public function awakiiaoeeiaiqgo() : self
    {
        $this->qigsyyqgewgskemg('w-md-100');
        return $this;
    }
    
    public function giaekmqwqoqmqcic()
    {
        return $this->ignorables;
    }
    
    public function qicwqseeaecsiiia($momcykaoccoymeig)
    {
        return ManipulateArray::get($this->giaekmqwqoqmqcic(), $momcykaoccoymeig);
    }
    
    public function kqkccuwgcwemskey($momcykaoccoymeig, $ikgwqyuyckaewsow) : self
    {
        $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig);
        $oyumuuqqsmuacmak['fields'] = $ikgwqyuyckaewsow;
        $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak;
        return $this;
    }
    
    public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, $iiwmeimguameeome = false) : self
    {
        if (is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow) || $ikgwqyuyckaewsow === $this->mwikyscisascoeea()) {
            wp_die("you are trying to ignore {$this->mwikyscisascoeea()} input by itself.");
        }
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        if ($aoaumkkqqmwekemo) {
            foreach ($aoaumkkqqmwekemo as $oyumuuqqsmuacmak) {
                if ($oyumuuqqsmuacmak['values'] == $qqswgiawgeaeoecu) {
                    wp_die("duplicate ignorable rule for {$this->mwikyscisascoeea()} detected please merge rules.");
                }
                ykwasaaoeeiuomim:
            }
            iwueukqcywkiyqge:
        }
        $this->ignorables[] = ['reverse' => $iiwmeimguameeome, 'values' => $qqswgiawgeaeoecu, 'fields' => $ikgwqyuyckaewsow];
        return $this;
    }
    
    public function render($koaqeegoeiaiccse = false)
    {
        return MetaBox::iuaucuookgoqiiio([$this], ['echo' => $koaqeegoeiaiccse]);
    }
    
    public function msqsseeaasqysese($iswcokucwmiosiaq) : self
    {
        if ($iswcokucwmiosiaq) {
            $this->errors[] = $iswcokucwmiosiaq;
        }
        return $this;
    }
    
    public function ymoyyqeymakckaee() : array
    {
        return $this->errors;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        $aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic();
        if ($aoaumkkqqmwekemo) {
            $this->qigsyyqgewgskemg('pr-ignorable-input')->igmaewykumgwoaoy('data-ignorable-target', json_encode($aoaumkkqqmwekemo));
        }
        $ueeagokqmgisgauy = $this->ymoyyqeymakckaee();
        if ($ueeagokqmgisgauy) {
            $this->igmaewykumgwoaoy('data-errors', wp_json_encode($ueeagokqmgisgauy));
        }
        if (is_string($this->qooeaookuemoqecm())) {
            if ($this->gueasuouwqysmomu() !== 'display') {
                $this->qcgocuceocquqcuw('value', $this->qooeaookuemoqecm());
            }
        }
    }
}

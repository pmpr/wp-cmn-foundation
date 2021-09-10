<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\FormMaker\Front\Element;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Field extends Element
{
    
    protected $value = null;
    
    protected $default = null;
    
    protected ?string $desc = '';
    
    protected ?int $priority = 0;
    
    protected ?string $label = '';
    
    protected bool $showLabel = false;
    
    protected ?string $component = null;
    
    protected ?string $invalidMessage = null;
    
    public function __construct(string $kqywgoqsmuswammk = 'input', string $sqeykgyoooqysmca = 'text', string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        $this->desc = $mkqqqewsokcswckc;
        $this->label = $pkyyagewkiyckmwy;
        if (in_array($kqywgoqsmuswammk, ['input'])) {
            $this->igmaewykumgwoaoy('type', $sqeykgyoooqysmca);
        }
        parent::__construct($kqywgoqsmuswammk, $aokagokqyuysuksm);
        if (in_array($kqywgoqsmuswammk, ['input', 'select', 'textarea'])) {
            $this->usuqmwksoeaayaig($aokagokqyuysuksm);
        }
    }
    
    public function cqusmgskowmesgcg() : ?string
    {
        return $this->component;
    }
    
    public function askmmuauqcuuqsea(?string $wksoawcgagcgoask) : self
    {
        $this->component = $wksoawcgagcgoask;
        return $this;
    }
    
    public function meuosmsqsqkqeoeu() : ?string
    {
        return $this->invalidMessage;
    }
    
    public function sgekqmmaiyiauagu(string $ykmkoyqqcmqaeoaa) : self
    {
        $this->invalidMessage = $ykmkoyqqcmqaeoaa;
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
    
    public function ougeeuegcgmwkcim() : bool
    {
        return $this->showLabel;
    }
    
    public function cysmiqkqasmweeem(bool $uuagoowwgcuosuuu) : self
    {
        $this->showLabel = $uuagoowwgcuosuuu;
        return $this;
    }
    
    public function uuagoowwgcuosuuu() : self
    {
        $this->cysmiqkqasmweeem(true);
        return $this;
    }
    
    public function cgeiiwakumywwowu($siquossayskcwkea = []) : self
    {
        $ywyosowkwiqceuau = self::mecgagckeuagggyw("group_{$this->mwikyscisascoeea()}")->cgwacqwsiowmwqug()->sueyawuweyoqyeaq($siquossayskcwkea);
        return $this->mmuyuqussqkgkega($ywyosowkwiqceuau);
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        return $this->qcgocuceocquqcuw(self::NAME, $ymqmyyeuycgmigyo);
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label ?: $this->waecsyqmwascmqoa('placeholder');
    }
    
    public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self
    {
        $this->label = $pkyyagewkiyckmwy;
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
    
    public function oiswysuiioecsaae()
    {
        return $this->default;
    }
    
    public function eumecwmqmukqgyea() : self
    {
        $this->igmaewykumgwoaoy('required', 'required');
        return $this;
    }
    
    public function oykaosmaegqwmoga() : self
    {
        $this->qigsyyqgewgskemg('disabled')->qcgocuceocquqcuw('disabled', '');
        return $this;
    }
    
    public function msmiagueogcsucgc() : bool
    {
        return (bool) $this->waecsyqmwascmqoa('required');
    }
    
    public function qooeaookuemoqecm()
    {
        return $this->value;
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self
    {
        $this->value = $eqgoocgaqwqcimie;
        if ($eqgoocgaqwqcimie) {
            switch ($this->qqimkcgcmeewwwei()) {
                case 'input':
                    $this->igmaewykumgwoaoy(self::VALUE, $eqgoocgaqwqcimie);
                    goto sicgyiyiocyygkoc;
            }
            cyosacayacumuaks:
            sicgyiyiocyygkoc:
        }
        return $this;
    }
    
    public function mswqgegakmgmewwq() : self
    {
        $this->qigsyyqgewgskemg('form-control-sm');
        return $this;
    }
    
    public function sqcsseccsaqsoyqy() : self
    {
        return $this->qigsyyqgewgskemg('direction-ltr')->igmaewykumgwoaoy('style', 'direction:ltr;')->igmaewykumgwoaoy('dir', 'ltr');
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : self
    {
        $this->default = $ggauoeuaesiymgee;
        return $this;
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        $pkyyagewkiyckmwy = $this->uikgwcuascgeissw();
        if ($pkyyagewkiyckmwy && in_array($this->qqimkcgcmeewwwei(), ['textarea', 'input', 'select'])) {
            $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq('label', ['for' => $this->mwikyscisascoeea(), 'class' => !$this->ougeeuegcgmwkcim() ? 'sr-only' : 'mr-2 my-auto text-nowrap'], true, $pkyyagewkiyckmwy) . $nsmgceoqaqogqmuw;
        }
        return parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        if ($uamcoiueqaamsqma = $this->meuosmsqsqkqeoeu()) {
            $nsmgceoqaqogqmuw .= ManipulateHTML::qgsekwygcgawekeq('div', ['class' => 'invalid-feedback'], true, $uamcoiueqaamsqma);
        }
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
    }
    
    public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self
    {
        return $this->qcgocuceocquqcuw('type', $sqeykgyoooqysmca);
    }
    
    public function soqmwakwiegiceeo($acakauekiwwamggq = '') : self
    {
        $this->igmaewykumgwoaoy('onfocus', "\$(this).css('direction','ltr');\$(this).attr('placeholder', '{$acakauekiwwamggq}');");
        $this->igmaewykumgwoaoy('onblur', "if (!\$(this).val()){\$(this).css('direction','rtl');\$(this).attr('placeholder', '{$this->waecsyqmwascmqoa('placeholder')}')}");
        return $this;
    }
    
    public function gysckqgokmciyqcg(?string $pkyyagewkiyckmwy) : self
    {
        return $this->qcgocuceocquqcuw('aria-label', $pkyyagewkiyckmwy);
    }
}

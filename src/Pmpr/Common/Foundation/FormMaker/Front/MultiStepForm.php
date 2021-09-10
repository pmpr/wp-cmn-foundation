<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front;

use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;

class MultiStepForm extends Element
{
    
    protected array $steps = [];
    
    protected ?string $submitText = null;
    
    public function __construct(string $aokagokqyuysuksm = null)
    {
        $this->qigsyyqgewgskemg('multi-step-from');
        parent::__construct('form', $aokagokqyuysuksm);
        $this->qcgocuceocquqcuw('method', 'POST');
        $this->submitText = __('Submit', PR__CMN__FOUNDATION);
    }
    
    public function iiqoooqcakkaeyiw() : self
    {
        $this->qigsyyqgewgskemg('clickable-steps');
        return $this;
    }
    
    public function suguoqqeycoiwcok(int $wyeyeaaekyoyimqu) : self
    {
        if ($wyeyeaaekyoyimqu > 1 && count($this->guiyusikssumecwk()) >= $wyeyeaaekyoyimqu) {
            $this->igmaewykumgwoaoy('data-step-start', $wyeyeaaekyoyimqu);
        }
        return $this;
    }
    
    public function qoomaywwaswcaccu() : ?string
    {
        return $this->submitText;
    }
    
    public function misaicooiwoaimmu(?string $skmckiwuuaoeqemm) : self
    {
        $this->submitText = $skmckiwuuaoeqemm;
        return $this;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return $this->iuygowkemiiwqmiw('steps', ['form' => $this, 'steps' => $this->guiyusikssumecwk(), 'submit_text' => $this->qoomaywwaswcaccu(), 'invalid_icon' => IconFontawesomeInterface::ICON_CIRCLE_EXCLAMATION]);
    }
    
    public function wmoeeiseqeecugmu() : bool
    {
        return !empty($this->steps);
    }
    
    public function guiyusikssumecwk() : array
    {
        return $this->steps;
    }
    
    public function mgqggiyywoageqmo(Step $wyeyeaaekyoyimqu) : self
    {
        $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu;
        return $this;
    }
    
    public function maoomkygegkowemi(array $asuggasaseaacmqu) : self
    {
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            giuccakymqymawgk:
        }
        kwuckkyqaygwgcuy:
        return $this;
    }
    public function enqueue()
    {
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        $ymqmyyeuycgmigyo = 'multistep';
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}.js"))->ayuciigykaswwqeo('jquery'))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}.css")));
    }
}

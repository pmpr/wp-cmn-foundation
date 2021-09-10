<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Checkbox extends Field
{
    
    protected array $confirmable = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct('checkbox', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->igmaewykumgwoaoy('data-toggle', 'switch')->igmaewykumgwoaoy('data-size', 'sm')->igmaewykumgwoaoy('data-onStyle', 'on')->igmaewykumgwoaoy('data-offStyle', 'off')->igmaewykumgwoaoy('data-on', __('Enable', PR__CMN__FOUNDATION))->igmaewykumgwoaoy('data-off', __('Disable', PR__CMN__FOUNDATION));
        $this->usoqcyyugsuyiewc('pr-switch');
    }
    
    public function eyygsasuqmommkua($ggauoeuaesiymgee) : Field
    {
        $ggauoeuaesiymgee = isset($_GET['post']) || isset($_GET['tag_ID']) ? '' : ($ggauoeuaesiymgee ? (string) $ggauoeuaesiymgee : '');
        return parent::eyygsasuqmommkua($ggauoeuaesiymgee);
    }
    
    public function agywyaaquwawwuiy($koegqoagisewcica = [], $yiygigeewmuiyceu = []) : Field
    {
        return $this->oeeumggeiyyckkom('on', $koegqoagisewcica)->oeeumggeiyyckkom('off', $yiygigeewmuiyceu);
    }
    
    public function ooowowweyusommmm(string $meqocwsecsywiiqs, string $uamcoiueqaamsqma, $sqeykgyoooqysmca = 'warning') : self
    {
        $this->confirmable = ['type' => $sqeykgyoooqysmca, 'title' => $meqocwsecsywiiqs, 'message' => $uamcoiueqaamsqma];
        return $this->qigsyyqgewgskemg('pr-confirmable-input');
    }
    
    public function yeigkegagskeaaim() : self
    {
        return $this->ooowowweyusommmm(__('This could break things!', PR__CMN__FOUNDATION), __('If you notice any errors on your website after having activated this setting, just deactivate it again, and your site will be back to normal.', PR__CMN__FOUNDATION));
    }
}

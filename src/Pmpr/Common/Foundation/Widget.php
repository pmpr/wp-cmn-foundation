<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Traits\SingletonTrait;
use Pmpr\Common\Foundation\Decorator\DecoratorWidget;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait;
use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Traits\ComponentTrait;
use Pmpr\Common\Foundation\Traits\HookTrait;
use Pmpr\Common\Foundation\Traits\TranslateTrait;
use WP_Widget;

abstract class Widget extends WP_Widget implements ConstantInterface
{
    const OUTPUT_TEMPLATE = 'output_template';
    use SingletonTrait, ComponentTrait, TranslateTrait, ElementTrait, FieldTrait, HookTrait;
    
    public function __construct(string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, $aokagokqyuysuksm = null, $yqwciyekkgusiioi = [], $akcsikgoamcgoccg = [])
    {
        if (!$aokagokqyuysuksm) {
            $aokagokqyuysuksm = ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa());
        }
        $quowyokcwswmuois = self::akuociswqmoigkas();
        $yqwciyekkgusiioi = array_merge($yqwciyekkgusiioi, ['classname' => ManipulateString::igcwuwuymeuomaqo("{$quowyokcwswmuois}-{$aokagokqyuysuksm}"), self::DESCRIPTION => $mkqqqewsokcswckc]);
        parent::__construct("{$quowyokcwswmuois}_{$aokagokqyuysuksm}", $ymqmyyeuycgmigyo, $yqwciyekkgusiioi, $akcsikgoamcgoccg);
        $this->gyqeoeemeemicgqi();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('widgets_init', [$this, 'register'])->qcsmikeggeemccuu('admin_footer-widgets.php', [$this, 'ggskcggaaeakgaqc']);
    }
    public function register()
    {
        DecoratorWidget::register(self::uqggkiomyiceyooa());
    }
    public function yeyiguyegmmyusea()
    {
        global $hook_suffix;
        if ($hook_suffix === 'widgets.php') {
            $this->saoyckekguwqwgcq();
        }
    }
    public function saoyckekguwqwgcq()
    {
    }
    public function ggskcggaaeakgaqc()
    {
    }
    
    public function update($new_instance, $old_instance) : array
    {
        $owgumcsyqsamiemg = $old_instance;
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $owgumcsyqsamiemg[$aokagokqyuysuksm] = ManipulateArray::get($new_instance, $aokagokqyuysuksm);
            mwwygasiagaqsimo:
        }
        euoscysqgugsqewc:
        return $owgumcsyqsamiemg;
    }
    
    public function form($owgumcsyqsamiemg)
    {
        $eaoumsseceiowgsk = [];
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $aiowsaccomcoikus['id'] = $this->get_field_name($aokagokqyuysuksm);
            $aiowsaccomcoikus = self::okmsgamiiemyesao($aiowsaccomcoikus);
            if ($aiowsaccomcoikus instanceof Field) {
                if ($eqgoocgaqwqcimie = ManipulateArray::get($owgumcsyqsamiemg, $aokagokqyuysuksm)) {
                    $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
                }
                
                if (in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ['checkbox', 'radio'])) {
                    $aiowsaccomcoikus->mkmssscwmeekwgqo();
                } else {
                    $aiowsaccomcoikus->yoimakcqmoqokkcu()->qcgocuceocquqcuw('id', $this->get_field_id($aokagokqyuysuksm));
                }
                $eaoumsseceiowgsk[$aokagokqyuysuksm] = $aiowsaccomcoikus;
            }
            eeomcmuiqwgwwuqk:
        }
        wucacaegysmiusai:
        if ($eaoumsseceiowgsk) {
            self::iuaucuookgoqiiio($eaoumsseceiowgsk);
        }
    }
    
    public final function widget($ywmkwiwkosakssii, $owgumcsyqsamiemg)
    {
        if (is_array($ywmkwiwkosakssii) && is_array($owgumcsyqsamiemg)) {
            $nsmgceoqaqogqmuw = $this->kooycocagkkmaiay($ywmkwiwkosakssii, $owgumcsyqsamiemg);
            if ($nsmgceoqaqogqmuw) {
                echo ManipulateArray::get($ywmkwiwkosakssii, self::BEFORE_WIDGET, '');
                echo $nsmgceoqaqogqmuw;
                echo ManipulateArray::get($ywmkwiwkosakssii, self::AFTER_WIDGET, '');
            }
        }
    }
    
    public final function kooycocagkkmaiay(?array $ywmkwiwkosakssii = [], ?array $owgumcsyqsamiemg = []) : string
    {
        $qookweymeqawmcwo = $this->gayqqwwuycceosii($ywmkwiwkosakssii, $owgumcsyqsamiemg);
        $aqykuigiuwmmcieu = '';
        $qqscaoyqikuyeoaw = ManipulateString::ogimogiceeekegoi(ManipulateArray::get($qookweymeqawmcwo, self::OUTPUT_TEMPLATE, self::ugwmakayykcmcmqa()));
        if ($this->qoqyomiqwooaeoiy($ywmkwiwkosakssii, $owgumcsyqsamiemg, $qookweymeqawmcwo)) {
            $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo, ['echo' => false]);
        }
        return $aqykuigiuwmmcieu;
    }
    
    public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool
    {
        return !empty($qookweymeqawmcwo);
    }
    
    public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array
    {
        return $owgumcsyqsamiemg;
    }
    
    public abstract function ugmceccgwaaaigiy() : array;
}

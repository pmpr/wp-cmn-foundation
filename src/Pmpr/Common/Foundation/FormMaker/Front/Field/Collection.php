<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;

class Collection extends Field
{
    
    protected array $cols = [];
    
    protected array $fields = [];
    
    public function __construct(string $aokagokqyuysuksm = null, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct('div', 'collection', $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->igmaewykumgwoaoy('data-repeater-list', $aokagokqyuysuksm)->cgeiiwakumywwowu(['id' => "collection_{$aokagokqyuysuksm}", 'class' => 'form-collection']);
        DecoratorHook::qcsmikeggeemccuu('wp_enqueue_scripts', [$this, 'enqueue']);
    }
    public static function enqueue()
    {
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        $ymqmyyeuycgmigyo = 'collection';
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}.js"))->ayuciigykaswwqeo('jquery')->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso('global')));
    }
    
    public function essgykyeoymwgsgg() : array
    {
        return $this->cols;
    }
    
    public function saosoymyamkakomm(array $waaaiiqwsmggwsak) : self
    {
        $this->cols = $waaaiiqwsmggwsak;
        return $this;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        $nsmgceoqaqogqmuw = ManipulateHTML::uuccukgasskgimsq('div', ['class' => 'col-md-1'], $this->kwkmeiyiomikmcoc());
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        if ($ikgwqyuyckaewsow) {
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render();
                eqiiaokcgakicaye:
            }
            ikcwmsgocyuqiumc:
        }
        return ManipulateHTML::uuccukgasskgimsq('div', ['class' => 'form-row', 'data-repeater-item'], $nsmgceoqaqogqmuw);
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        $nsmgceoqaqogqmuw = parent::ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc([self::TYPE => 'create', self::ICON => IconFontawesomeInterface::ICON_PLUS, self::COLOR => self::SUCCESS, self::TITLE => __('Add', PR__CMN__FOUNDATION)]);
        $nsmgceoqaqogqmuw .= $this->kwkmeiyiomikmcoc(['class' => 'ml-4', self::TYPE => 'clear', self::ICON => IconFontawesomeInterface::ICON_ERASER, self::COLOR => self::INFO, self::TITLE => __('Clear', PR__CMN__FOUNDATION)]);
        return $nsmgceoqaqogqmuw;
    }
    
    private function kwkmeiyiomikmcoc(array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['size' => 'xs', 'class' => '', self::TYPE => 'delete', self::ICON => IconFontawesomeInterface::ICON_XMARK, self::COLOR => self::DANGER, self::TITLE => __('Delete', PR__CMN__FOUNDATION)]);
        return ManipulateHTML::uuccukgasskgimsq('button', ['class' => 'btn btn-sm btn-' . ManipulateArray::get($ywmkwiwkosakssii, self::COLOR) . ' ' . ManipulateArray::get($ywmkwiwkosakssii, 'class'), self::TYPE => 'button', 'data-title' => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), 'aria-label' => ManipulateArray::get($ywmkwiwkosakssii, self::TITLE), 'data-repeater-' . ManipulateArray::get($ywmkwiwkosakssii, self::TYPE)], ManipulateHTML::cuoygaaeqeqcuggu(ManipulateArray::get($ywmkwiwkosakssii, self::ICON), ['class' => 'icon-white full-opacity icon-' . ManipulateArray::get($ywmkwiwkosakssii, 'size')], true));
    }
    
    public function ikigiygcekcemyos() : self
    {
        return $this->igmaewykumgwoaoy('data-init-empty', true);
    }
    
    public function ocgoykecekaaoccu() : self
    {
        return $this->igmaewykumgwoaoy('data-first-undeletable', true);
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        return $this->fields;
    }
    
    public function iqoyuqgssusgimwa() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
        $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), $aokagokqyuysuksm);
        if (!$imgcoakmmgqsckkm) {
            $imgcoakmmgqsckkm = ManipulateArray::get($this->essgykyeoymwgsgg(), count($this->ugmceccgwaaaigiy()));
        }
        $aiowsaccomcoikus->cgeiiwakumywwowu(['class' => $imgcoakmmgqsckkm])->qigsyyqgewgskemg('collection-field');
        $this->fields[$aokagokqyuysuksm] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow = []) : self
    {
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            kyiuewcikkqagwwg:
        }
        gcucsowqoeiwmyyq:
        return $this;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        if ($ikgwqyuyckaewsow) {
            $ycmguuqqaiisymgg = [];
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                if ($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae()) {
                    $ycmguuqqaiisymgg[] = $ggauoeuaesiymgee;
                }
                oasggeyceiyieuuo:
            }
            aumowowgewgqmwci:
            $this->igmaewykumgwoaoy('data-default-values', $ycmguuqqaiisymgg);
        }
    }
}

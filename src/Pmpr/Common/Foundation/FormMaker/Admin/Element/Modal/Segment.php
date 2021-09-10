<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Element;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

abstract class Segment extends Element
{
    
    protected array $tabs = [];
    
    protected array $fields = [];
    
    protected array $buttons = [];
    
    protected ?string $icon = null;
    
    protected ?string $parent = null;
    
    public function __construct()
    {
        if (!$this->aakmagwggmkoiiyu()) {
            $this->name = strtolower(self::ugwmakayykcmcmqa());
        }
        parent::__construct();
    }
    
    public function eyamqkqiykagecsw() : ?string
    {
        return $this->icon;
    }
    
    public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : void
    {
        $this->icon = $wkaqekwwgqsqwcoi;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            if ($aiowsaccomcoikus instanceof Field) {
                $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            }
            kwyimqumkuuyaiku:
        }
        mqimkwickkgqqeoi:
        return $this;
    }
    
    public function equiyaoamqmaeckc() : array
    {
        return $this->tabs;
    }
    
    public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce = null) : self
    {
        if ($cciauwuwuqaywgce) {
            $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce;
        }
        return $this;
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function ycewecmqyuksugoi() : bool
    {
        return !empty($this->imswwiyicyksouus());
    }
    
    public function igmamuiesywmkgeu($meqocwsecsywiiqs, $wwgucssaecqekuek) : self
    {
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'button button-large');
        $this->buttons[] = ['meqocwsecsywiiqs' => $meqocwsecsywiiqs, 'wwgucssaecqekuek' => $wwgucssaecqekuek];
        return $this;
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        $ywoucyskcquysiwc = $this->equiyaoamqmaeckc();
        $ikgwqyuyckaewsow = $this->fields;
        if ($ywoucyskcquysiwc) {
            foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) {
                if ($cciauwuwuqaywgce instanceof Tab) {
                    foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) {
                        if ($aiowsaccomcoikus instanceof Field) {
                            $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}_{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc('pt-3');
                            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus;
                        }
                        gsymkkskwsgggoic:
                    }
                    ceiuqsiqgiuiekem:
                }
                mceucsaeouuwyumm:
            }
            gkqiqaqecmoogmaa:
        }
        return $ikgwqyuyckaewsow;
    }
    
    public function ygqycmmkoiuocoia() : ?string
    {
        return $this->parent;
    }
    public function render()
    {
        $this->ecwgiiuacoaokqkw();
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        if ($ikgwqyuyckaewsow) {
            $uiewakwqscemywuo = ['id' => $this->cisyiemkeykgkomc(), 'echo' => true, 'hookup' => false];
            if ($this->equiyaoamqmaeckc()) {
                $uiewakwqscemywuo['tabs'] = $this->equiyaoamqmaeckc();
            }
            self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo);
        }
    }
}

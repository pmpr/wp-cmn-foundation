<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element\Shortcode;

use Pmpr\Common\Foundation\FormMaker\Admin\Element\Modal\Modal;
use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;

abstract class Shortcode extends Modal
{
    
    public ?string $icon = null;
    
    public bool $isRendered = false;
    
    public bool $isButtonRendered = false;
    
    public function eyamqkqiykagecsw() : string
    {
        return $this->icon;
    }
    
    public function saemoowcasogykak(string $wkaqekwwgqsqwcoi) : self
    {
        $this->icon = $wkaqekwwgqsqwcoi;
        return $this;
    }
    
    public function gakuqssqwcuekqqi() : bool
    {
        return $this->isRendered;
    }
    
    public function eqesqooyciwmagsa(bool $gakuqssqwcuekqqi) : self
    {
        $this->isRendered = $gakuqssqwcuekqqi;
        return $this;
    }
    
    public function ocmescguywiskicc() : bool
    {
        return $this->isButtonRendered;
    }
    
    public function ywmaqqqoiueymkyu(bool $ocmescguywiskicc) : self
    {
        $this->isButtonRendered = $ocmescguywiskicc;
        return $this;
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('init', [$this, 'register'])->qcsmikeggeemccuu('the_content', [$this, 'wumeeiwgyummmyyc'], 0)->qcsmikeggeemccuu('media_buttons', [$this, 'sewqswegcwywamuw'], 20);
        parent::wigskegsqequoeks();
    }
    
    public function wumeeiwgyummmyyc($ewgwqamkygiqaawc)
    {
        $ucccueqywigcukcc = get_shortcode_regex();
        $ucccueqywigcukcc = sprintf('/<p[^>]*?>%s<\\/p>/', $ucccueqywigcukcc);
        return preg_replace($ucccueqywigcukcc, '[$1$2$3$4$5$6$7$8]', $ewgwqamkygiqaawc);
    }
    
    public function gsesiocqciggmauo() : array
    {
        $oammesyieqmwuwyi = [];
        $wsqkgswwooewwekw = parent::gsesiocqciggmauo();
        foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko) {
            if ($oceoauekaygmuoko instanceof Segment) {
                $ccamueccusigaaio = $oceoauekaygmuoko->squsacgomqgkakaw();
                if ($ccamueccusigaaio === self::ALL || is_array($ccamueccusigaaio) && self::uqwgsuysegkweago($ccamueccusigaaio)) {
                    $oceoauekaygmuoko->igmamuiesywmkgeu(__('Insert Shortcode', PR__CMN__FOUNDATION), ['class' => 'shortcode-button-insert']);
                    $oammesyieqmwuwyi[$oceoauekaygmuoko->aakmagwggmkoiiyu()] = $oceoauekaygmuoko;
                }
            }
            mcqucouuiuoagqwc:
        }
        syusgosewwkoagoq:
        return $oammesyieqmwuwyi;
    }
    
    public function sewqswegcwywamuw($igwkwmgowquoucyk)
    {
        if ($igwkwmgowquoucyk == 'content' && $this->uqwgsuysegkweago() && !$this->gakuqssqwcuekqqi() && $this->skgwcckoyoqsascq()) {
            echo $this->cyeuiyggkcqmoecc();
            $this->ywmaqqqoiueymkyu(true);
        }
    }
    
    public function cyeuiyggkcqmoecc() : string
    {
        return $this->iuygowkemiiwqmiw('button', ['title' => $this->qcgakseyaikigqco(), 'name' => $this->cisyiemkeykgkomc()], ['class' => self::class]);
    }
    
    public function uqwgsuysegkweago($ccamueccusigaaio = []) : bool
    {
        if (!$ccamueccusigaaio) {
            $ccamueccusigaaio = ManipulatePost::mwoyqeeigwqoamiw();
        }
        return ManipulatePost::uqwgsuysegkweago($ccamueccusigaaio);
    }
    public function enqueue()
    {
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis('shortcode', $eygsasmqycagyayw->get('shortcode.js'))->ayuciigykaswwqeo($eygsasmqycagyayw->yomasssaasmawcso('global'))->ayuciigykaswwqeo('wp-tinymce')->ayuciigykaswwqeo('jquery'));
        global $shortcode_tags;
        $eygsasmqycagyayw->ikqyiskqaaymscgw('shortcode', ['names' => array_keys($shortcode_tags)]);
        parent::enqueue();
    }
    
    public function register($makuywykoiqicmym = [])
    {
        $this->segments = $this->sscegwueamckwmcy("{$this->aakmagwggmkoiiyu()}_register_shortcodes", $makuywykoiqicmym);
    }
    
    public function cisyiemkeykgkomc() : ?string
    {
        return parent::cisyiemkeykgkomc() . '_shortcode';
    }
    
    public function qoqyomiqwooaeoiy() : bool
    {
        return parent::qoqyomiqwooaeoiy() && $this->uqwgsuysegkweago();
    }
}

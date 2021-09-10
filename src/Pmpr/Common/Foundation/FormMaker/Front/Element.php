<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front;

use Pmpr\Common\Foundation\FormMaker\Front\Field as Fields;
use Pmpr\Common\Foundation\FormMaker\Front\Traits\FieldTrait;
use Pmpr\Common\Foundation\FormMaker\Front\Traits\ElementTrait;
use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Template\Traits\TemplateTrait;
use Pmpr\Common\Foundation\Traits\AttributeTrait;
use Pmpr\Common\Foundation\Traits\ComponentTrait;
use Pmpr\Common\Foundation\Traits\ToArrayTrait;

class Element implements ConstantInterface
{
    const CHILD_CONTENT = "\173\173\x20\143\x68\151\154\x64\137\x63\157\156\x74\x65\x6e\164\x20\175\175";
    use FieldTrait, ToArrayTrait, ElementTrait, TemplateTrait, ComponentTrait, AttributeTrait;
    
    protected ?string $id = null;
    
    protected ?Element $parent = null;
    
    protected ?string $element = null;
    
    public function __construct(string $kqywgoqsmuswammk, ?string $aokagokqyuysuksm = null)
    {
        goto scsekeeysgugouca;
        scsekeeysgugouca:
        $this->id = $aokagokqyuysuksm;
        goto iwusokgqiqkumeem;
        iwusokgqiqkumeem:
        $this->element = $kqywgoqsmuswammk;
        goto oqiaecgmqmaeeoei;
        oqiaecgmqmaeeoei:
        $this->igmaewykumgwoaoy(self::ID, $aokagokqyuysuksm);
        goto ccaqwykysccwusuu;
        ccaqwykysccwusuu:
    }
    
    public function mwikyscisascoeea() : ?string
    {
        return $this->id;
    }
    
    public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self
    {
        $this->id = $aokagokqyuysuksm;
        return $this;
    }
    
    public function ygqycmmkoiuocoia() : ?Element
    {
        return $this->parent;
    }
    
    public function mmuyuqussqkgkega(Element $omwmuycmeqcqokom) : self
    {
        $this->parent = $omwmuycmeqcqokom;
        return $this;
    }
    
    public function kmsekkswiwiieqee($siquossayskcwkea = []) : self
    {
        return $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->sueyawuweyoqyeaq($siquossayskcwkea));
    }
    
    public function qqimkcgcmeewwwei() : ?string
    {
        return $this->element;
    }
    
    public function comqsuwokcsmkcau(?string $kqywgoqsmuswammk) : self
    {
        $this->element = $kqywgoqsmuswammk;
        return $this;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return null;
    }
    
    public function render($ywmkwiwkosakssii = []) : ?string
    {
        goto iuqqyoswkewaikma;
        ssmwsoeooqmocwoc:
        if (!$ywmkwiwkosakssii["\145\x63\x68\x6f"]) {
            goto massqqageicawcwa;
        }
        goto gqyasuaqiccikqiu;
        moqqkweuiqogoecm:
        massqqageicawcwa:
        goto amkmgqciseuyuswu;
        waisuqycssimesui:
        $kqywgoqsmuswammk = $this->qqimkcgcmeewwwei();
        goto ekauocuwoyemsqsq;
        ecegkmqcqocseacg:
        aaweqykeggcaosyw:
        goto qckiyyomwgamwowy;
        aymmqkugquckkuom:
        $nsmgceoqaqogqmuw = str_replace(self::CHILD_CONTENT, $nsmgceoqaqogqmuw, $qkqgooeegwokcmay);
        goto ecegkmqcqocseacg;
        qsegmmyuaaegggwc:
        $nsmgceoqaqogqmuw = $this->eiieguqemowyacgi($nsmgceoqaqogqmuw);
        goto ssmwsoeooqmocwoc;
        iqaoqcwemuamiywa:
        $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia();
        goto gssiyeaqueiauaak;
        gssiyeaqueiauaak:
        if (!$omwmuycmeqcqokom) {
            goto iswwimckkkeokgcm;
        }
        goto ecgeqsyqmqewqwao;
        ekauocuwoyemsqsq:
        $wwgucssaecqekuek = array_filter($this->ccekeuwwqqoiwuwy());
        goto egqwsykqosqsqmei;
        amkmgqciseuyuswu:
        return $nsmgceoqaqogqmuw;
        goto eoeiuweemoocwwco;
        qegsskwcwiykcies:
        $nsmgceoqaqogqmuw = $this->ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto iqaoqcwemuamiywa;
        ecgeqsyqmqewqwao:
        $nsmgceoqaqogqmuw = $this->assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto auqymasgagkmkeqe;
        xmiymoymswickcuu:
        if (!($nsmgceoqaqogqmuw && $qkqgooeegwokcmay && str_contains($qkqgooeegwokcmay, self::CHILD_CONTENT))) {
            goto aaweqykeggcaosyw;
        }
        goto aymmqkugquckkuom;
        egqwsykqosqsqmei:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $this->souwykwwmyygqyqi());
        goto qegsskwcwiykcies;
        iuqqyoswkewaikma:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\143\150\157" => false]);
        goto waisuqycssimesui;
        auqymasgagkmkeqe:
        $qkqgooeegwokcmay = $omwmuycmeqcqokom->render();
        goto xmiymoymswickcuu;
        qckiyyomwgamwowy:
        iswwimckkkeokgcm:
        goto qsegmmyuaaegggwc;
        gqyasuaqiccikqiu:
        echo $nsmgceoqaqogqmuw;
        goto moqqkweuiqogoecm;
        eoeiuweemoocwwco:
    }
    
    public function ggiwigqywkaqogkk(?string $nsmgceoqaqogqmuw) : ?string
    {
        return $nsmgceoqaqogqmuw;
    }
    
    public function eiieguqemowyacgi(?string $nsmgceoqaqogqmuw) : ?string
    {
        return $nsmgceoqaqogqmuw;
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        return $nsmgceoqaqogqmuw;
    }
}

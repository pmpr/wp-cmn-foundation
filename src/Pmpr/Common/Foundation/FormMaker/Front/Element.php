<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const CHILD_CONTENT = "\x7b\x7b\x20\x63\150\x69\x6c\x64\x5f\143\x6f\x6e\164\145\156\x74\40\x7d\175";
    use FieldTrait, ToArrayTrait, ElementTrait, TemplateTrait, ComponentTrait, AttributeTrait;
    
    protected ?string $id = null;
    
    protected ?Element $parent = null;
    
    protected ?string $element = null;
    
    public function __construct(string $kqywgoqsmuswammk, ?string $aokagokqyuysuksm = null)
    {
        goto ccaqwykysccwusuu;
        iswwimckkkeokgcm:
        $this->igmaewykumgwoaoy(self::ID, $aokagokqyuysuksm);
        goto massqqageicawcwa;
        ccaqwykysccwusuu:
        $this->id = $aokagokqyuysuksm;
        goto aaweqykeggcaosyw;
        aaweqykeggcaosyw:
        $this->element = $kqywgoqsmuswammk;
        goto iswwimckkkeokgcm;
        massqqageicawcwa:
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
        goto egqwsykqosqsqmei;
        amkmgqciseuyuswu:
        if (!$ywmkwiwkosakssii["\x65\x63\150\157"]) {
            goto ekauocuwoyemsqsq;
        }
        goto eoeiuweemoocwwco;
        ecegkmqcqocseacg:
        $qkqgooeegwokcmay = $omwmuycmeqcqokom->render();
        goto qckiyyomwgamwowy;
        egqwsykqosqsqmei:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\x68\x6f" => false]);
        goto qegsskwcwiykcies;
        omgkugwoikiiyouo:
        return $nsmgceoqaqogqmuw;
        goto msqyagckiemcggqi;
        moqqkweuiqogoecm:
        $nsmgceoqaqogqmuw = $this->eiieguqemowyacgi($nsmgceoqaqogqmuw);
        goto amkmgqciseuyuswu;
        xmiymoymswickcuu:
        if (!$omwmuycmeqcqokom) {
            goto waisuqycssimesui;
        }
        goto aymmqkugquckkuom;
        iqaoqcwemuamiywa:
        $wwgucssaecqekuek = array_filter($this->ccekeuwwqqoiwuwy());
        goto gssiyeaqueiauaak;
        gssiyeaqueiauaak:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $this->souwykwwmyygqyqi());
        goto ecgeqsyqmqewqwao;
        auqymasgagkmkeqe:
        $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia();
        goto xmiymoymswickcuu;
        eesyagkqmooggswo:
        ekauocuwoyemsqsq:
        goto omgkugwoikiiyouo;
        ecgeqsyqmqewqwao:
        $nsmgceoqaqogqmuw = $this->ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto auqymasgagkmkeqe;
        qckiyyomwgamwowy:
        if (!($nsmgceoqaqogqmuw && $qkqgooeegwokcmay && str_contains($qkqgooeegwokcmay, self::CHILD_CONTENT))) {
            goto iuqqyoswkewaikma;
        }
        goto qsegmmyuaaegggwc;
        qsegmmyuaaegggwc:
        $nsmgceoqaqogqmuw = str_replace(self::CHILD_CONTENT, $nsmgceoqaqogqmuw, $qkqgooeegwokcmay);
        goto ssmwsoeooqmocwoc;
        qegsskwcwiykcies:
        $kqywgoqsmuswammk = $this->qqimkcgcmeewwwei();
        goto iqaoqcwemuamiywa;
        aymmqkugquckkuom:
        $nsmgceoqaqogqmuw = $this->assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto ecegkmqcqocseacg;
        gqyasuaqiccikqiu:
        waisuqycssimesui:
        goto moqqkweuiqogoecm;
        eoeiuweemoocwwco:
        echo $nsmgceoqaqogqmuw;
        goto eesyagkqmooggswo;
        ssmwsoeooqmocwoc:
        iuqqyoswkewaikma:
        goto gqyasuaqiccikqiu;
        msqyagckiemcggqi:
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

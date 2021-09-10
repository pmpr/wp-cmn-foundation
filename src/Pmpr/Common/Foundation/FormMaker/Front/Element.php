<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const CHILD_CONTENT = "\173\173\x20\x63\150\x69\x6c\144\137\143\157\156\164\145\x6e\x74\40\x7d\x7d";
    use FieldTrait, ToArrayTrait, ElementTrait, TemplateTrait, ComponentTrait, AttributeTrait;
    
    protected ?string $id = null;
    
    protected ?Element $parent = null;
    
    protected ?string $element = null;
    
    public function __construct(string $kqywgoqsmuswammk, ?string $aokagokqyuysuksm = null)
    {
        goto ccaqwykysccwusuu;
        ccaqwykysccwusuu:
        $this->id = $aokagokqyuysuksm;
        goto aaweqykeggcaosyw;
        iswwimckkkeokgcm:
        $this->igmaewykumgwoaoy(self::ID, $aokagokqyuysuksm);
        goto massqqageicawcwa;
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
        auqymasgagkmkeqe:
        $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia();
        goto xmiymoymswickcuu;
        ecgeqsyqmqewqwao:
        $nsmgceoqaqogqmuw = $this->ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto auqymasgagkmkeqe;
        eesyagkqmooggswo:
        ekauocuwoyemsqsq:
        goto omgkugwoikiiyouo;
        qckiyyomwgamwowy:
        if (!($nsmgceoqaqogqmuw && $qkqgooeegwokcmay && str_contains($qkqgooeegwokcmay, self::CHILD_CONTENT))) {
            goto iuqqyoswkewaikma;
        }
        goto qsegmmyuaaegggwc;
        iqaoqcwemuamiywa:
        $wwgucssaecqekuek = array_filter($this->ccekeuwwqqoiwuwy());
        goto gssiyeaqueiauaak;
        eoeiuweemoocwwco:
        echo $nsmgceoqaqogqmuw;
        goto eesyagkqmooggswo;
        qsegmmyuaaegggwc:
        $nsmgceoqaqogqmuw = str_replace(self::CHILD_CONTENT, $nsmgceoqaqogqmuw, $qkqgooeegwokcmay);
        goto ssmwsoeooqmocwoc;
        gssiyeaqueiauaak:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $this->souwykwwmyygqyqi());
        goto ecgeqsyqmqewqwao;
        ssmwsoeooqmocwoc:
        iuqqyoswkewaikma:
        goto gqyasuaqiccikqiu;
        ecegkmqcqocseacg:
        $qkqgooeegwokcmay = $omwmuycmeqcqokom->render();
        goto qckiyyomwgamwowy;
        moqqkweuiqogoecm:
        $nsmgceoqaqogqmuw = $this->eiieguqemowyacgi($nsmgceoqaqogqmuw);
        goto amkmgqciseuyuswu;
        xmiymoymswickcuu:
        if (!$omwmuycmeqcqokom) {
            goto waisuqycssimesui;
        }
        goto aymmqkugquckkuom;
        omgkugwoikiiyouo:
        return $nsmgceoqaqogqmuw;
        goto msqyagckiemcggqi;
        aymmqkugquckkuom:
        $nsmgceoqaqogqmuw = $this->assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto ecegkmqcqocseacg;
        amkmgqciseuyuswu:
        if (!$ywmkwiwkosakssii["\x65\143\150\x6f"]) {
            goto ekauocuwoyemsqsq;
        }
        goto eoeiuweemoocwwco;
        gqyasuaqiccikqiu:
        waisuqycssimesui:
        goto moqqkweuiqogoecm;
        egqwsykqosqsqmei:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\150\157" => false]);
        goto qegsskwcwiykcies;
        qegsskwcwiykcies:
        $kqywgoqsmuswammk = $this->qqimkcgcmeewwwei();
        goto iqaoqcwemuamiywa;
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

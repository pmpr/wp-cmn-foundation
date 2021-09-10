<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const CHILD_CONTENT = "\x7b\x7b\40\x63\x68\x69\x6c\x64\137\x63\x6f\156\x74\x65\156\x74\40\175\175";
    use FieldTrait, ToArrayTrait, ElementTrait, TemplateTrait, ComponentTrait, AttributeTrait;
    
    protected ?string $id = null;
    
    protected ?Element $parent = null;
    
    protected ?string $element = null;
    
    public function __construct(string $kqywgoqsmuswammk, ?string $aokagokqyuysuksm = null)
    {
        goto aaweqykeggcaosyw;
        massqqageicawcwa:
        $this->igmaewykumgwoaoy(self::ID, $aokagokqyuysuksm);
        goto iuqqyoswkewaikma;
        iswwimckkkeokgcm:
        $this->element = $kqywgoqsmuswammk;
        goto massqqageicawcwa;
        aaweqykeggcaosyw:
        $this->id = $aokagokqyuysuksm;
        goto iswwimckkkeokgcm;
        iuqqyoswkewaikma:
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
        goto qegsskwcwiykcies;
        ecgeqsyqmqewqwao:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $this->souwykwwmyygqyqi());
        goto auqymasgagkmkeqe;
        auqymasgagkmkeqe:
        $nsmgceoqaqogqmuw = $this->ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto xmiymoymswickcuu;
        ssmwsoeooqmocwoc:
        $nsmgceoqaqogqmuw = str_replace(self::CHILD_CONTENT, $nsmgceoqaqogqmuw, $qkqgooeegwokcmay);
        goto gqyasuaqiccikqiu;
        xmiymoymswickcuu:
        $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia();
        goto aymmqkugquckkuom;
        gqyasuaqiccikqiu:
        waisuqycssimesui:
        goto moqqkweuiqogoecm;
        omgkugwoikiiyouo:
        egqwsykqosqsqmei:
        goto msqyagckiemcggqi;
        ecegkmqcqocseacg:
        $nsmgceoqaqogqmuw = $this->assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto qckiyyomwgamwowy;
        msqyagckiemcggqi:
        return $nsmgceoqaqogqmuw;
        goto oewgqkuscaaqgocc;
        aymmqkugquckkuom:
        if (!$omwmuycmeqcqokom) {
            goto ekauocuwoyemsqsq;
        }
        goto ecegkmqcqocseacg;
        qegsskwcwiykcies:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\150\157" => false]);
        goto iqaoqcwemuamiywa;
        eoeiuweemoocwwco:
        if (!$ywmkwiwkosakssii["\145\143\150\x6f"]) {
            goto egqwsykqosqsqmei;
        }
        goto eesyagkqmooggswo;
        gssiyeaqueiauaak:
        $wwgucssaecqekuek = array_filter($this->ccekeuwwqqoiwuwy());
        goto ecgeqsyqmqewqwao;
        eesyagkqmooggswo:
        echo $nsmgceoqaqogqmuw;
        goto omgkugwoikiiyouo;
        iqaoqcwemuamiywa:
        $kqywgoqsmuswammk = $this->qqimkcgcmeewwwei();
        goto gssiyeaqueiauaak;
        qsegmmyuaaegggwc:
        if (!($nsmgceoqaqogqmuw && $qkqgooeegwokcmay && str_contains($qkqgooeegwokcmay, self::CHILD_CONTENT))) {
            goto waisuqycssimesui;
        }
        goto ssmwsoeooqmocwoc;
        amkmgqciseuyuswu:
        $nsmgceoqaqogqmuw = $this->eiieguqemowyacgi($nsmgceoqaqogqmuw);
        goto eoeiuweemoocwwco;
        moqqkweuiqogoecm:
        ekauocuwoyemsqsq:
        goto amkmgqciseuyuswu;
        qckiyyomwgamwowy:
        $qkqgooeegwokcmay = $omwmuycmeqcqokom->render();
        goto qsegmmyuaaegggwc;
        oewgqkuscaaqgocc:
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

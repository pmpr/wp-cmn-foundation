<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const CHILD_CONTENT = "\173\x7b\x20\x63\150\151\x6c\x64\x5f\x63\157\x6e\164\x65\156\x74\40\x7d\175";
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
        xmiymoymswickcuu:
        $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia();
        goto aymmqkugquckkuom;
        msqyagckiemcggqi:
        return $nsmgceoqaqogqmuw;
        goto oewgqkuscaaqgocc;
        gssiyeaqueiauaak:
        $wwgucssaecqekuek = array_filter($this->ccekeuwwqqoiwuwy());
        goto ecgeqsyqmqewqwao;
        eoeiuweemoocwwco:
        if (!$ywmkwiwkosakssii["\145\x63\150\157"]) {
            goto egqwsykqosqsqmei;
        }
        goto eesyagkqmooggswo;
        ecgeqsyqmqewqwao:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $this->souwykwwmyygqyqi());
        goto auqymasgagkmkeqe;
        auqymasgagkmkeqe:
        $nsmgceoqaqogqmuw = $this->ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto xmiymoymswickcuu;
        qegsskwcwiykcies:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\143\x68\157" => false]);
        goto iqaoqcwemuamiywa;
        gqyasuaqiccikqiu:
        waisuqycssimesui:
        goto moqqkweuiqogoecm;
        aymmqkugquckkuom:
        if (!$omwmuycmeqcqokom) {
            goto ekauocuwoyemsqsq;
        }
        goto ecegkmqcqocseacg;
        qckiyyomwgamwowy:
        $qkqgooeegwokcmay = $omwmuycmeqcqokom->render();
        goto qsegmmyuaaegggwc;
        moqqkweuiqogoecm:
        ekauocuwoyemsqsq:
        goto amkmgqciseuyuswu;
        ssmwsoeooqmocwoc:
        $nsmgceoqaqogqmuw = str_replace(self::CHILD_CONTENT, $nsmgceoqaqogqmuw, $qkqgooeegwokcmay);
        goto gqyasuaqiccikqiu;
        ecegkmqcqocseacg:
        $nsmgceoqaqogqmuw = $this->assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto qckiyyomwgamwowy;
        amkmgqciseuyuswu:
        $nsmgceoqaqogqmuw = $this->eiieguqemowyacgi($nsmgceoqaqogqmuw);
        goto eoeiuweemoocwwco;
        omgkugwoikiiyouo:
        egqwsykqosqsqmei:
        goto msqyagckiemcggqi;
        qsegmmyuaaegggwc:
        if (!($nsmgceoqaqogqmuw && $qkqgooeegwokcmay && str_contains($qkqgooeegwokcmay, self::CHILD_CONTENT))) {
            goto waisuqycssimesui;
        }
        goto ssmwsoeooqmocwoc;
        iqaoqcwemuamiywa:
        $kqywgoqsmuswammk = $this->qqimkcgcmeewwwei();
        goto gssiyeaqueiauaak;
        eesyagkqmooggswo:
        echo $nsmgceoqaqogqmuw;
        goto omgkugwoikiiyouo;
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

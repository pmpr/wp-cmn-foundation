<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const CHILD_CONTENT = "\x7b\173\40\x63\150\151\154\x64\137\143\x6f\156\164\145\x6e\164\x20\175\175";
    use FieldTrait, ToArrayTrait, ElementTrait, TemplateTrait, ComponentTrait, AttributeTrait;
    
    protected ?string $id = null;
    
    protected ?Element $parent = null;
    
    protected ?string $element = null;
    
    public function __construct(string $kqywgoqsmuswammk, ?string $aokagokqyuysuksm = null)
    {
        goto aaweqykeggcaosyw;
        aaweqykeggcaosyw:
        $this->id = $aokagokqyuysuksm;
        goto iswwimckkkeokgcm;
        iswwimckkkeokgcm:
        $this->element = $kqywgoqsmuswammk;
        goto massqqageicawcwa;
        massqqageicawcwa:
        $this->igmaewykumgwoaoy(self::ID, $aokagokqyuysuksm);
        goto iuqqyoswkewaikma;
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
        eesyagkqmooggswo:
        echo $nsmgceoqaqogqmuw;
        goto omgkugwoikiiyouo;
        eoeiuweemoocwwco:
        if (!$ywmkwiwkosakssii["\145\x63\x68\157"]) {
            goto egqwsykqosqsqmei;
        }
        goto eesyagkqmooggswo;
        gqyasuaqiccikqiu:
        waisuqycssimesui:
        goto moqqkweuiqogoecm;
        msqyagckiemcggqi:
        return $nsmgceoqaqogqmuw;
        goto oewgqkuscaaqgocc;
        moqqkweuiqogoecm:
        ekauocuwoyemsqsq:
        goto amkmgqciseuyuswu;
        qckiyyomwgamwowy:
        $qkqgooeegwokcmay = $omwmuycmeqcqokom->render();
        goto qsegmmyuaaegggwc;
        ssmwsoeooqmocwoc:
        $nsmgceoqaqogqmuw = str_replace(self::CHILD_CONTENT, $nsmgceoqaqogqmuw, $qkqgooeegwokcmay);
        goto gqyasuaqiccikqiu;
        auqymasgagkmkeqe:
        $nsmgceoqaqogqmuw = $this->ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto xmiymoymswickcuu;
        qsegmmyuaaegggwc:
        if (!($nsmgceoqaqogqmuw && $qkqgooeegwokcmay && str_contains($qkqgooeegwokcmay, self::CHILD_CONTENT))) {
            goto waisuqycssimesui;
        }
        goto ssmwsoeooqmocwoc;
        ecegkmqcqocseacg:
        $nsmgceoqaqogqmuw = $this->assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto qckiyyomwgamwowy;
        xmiymoymswickcuu:
        $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia();
        goto aymmqkugquckkuom;
        omgkugwoikiiyouo:
        egqwsykqosqsqmei:
        goto msqyagckiemcggqi;
        qegsskwcwiykcies:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\x63\150\x6f" => false]);
        goto iqaoqcwemuamiywa;
        gssiyeaqueiauaak:
        $wwgucssaecqekuek = array_filter($this->ccekeuwwqqoiwuwy());
        goto ecgeqsyqmqewqwao;
        ecgeqsyqmqewqwao:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $this->souwykwwmyygqyqi());
        goto auqymasgagkmkeqe;
        amkmgqciseuyuswu:
        $nsmgceoqaqogqmuw = $this->eiieguqemowyacgi($nsmgceoqaqogqmuw);
        goto eoeiuweemoocwwco;
        iqaoqcwemuamiywa:
        $kqywgoqsmuswammk = $this->qqimkcgcmeewwwei();
        goto gssiyeaqueiauaak;
        aymmqkugquckkuom:
        if (!$omwmuycmeqcqokom) {
            goto ekauocuwoyemsqsq;
        }
        goto ecegkmqcqocseacg;
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

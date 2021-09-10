<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    const CHILD_CONTENT = "\173\173\40\x63\x68\x69\x6c\144\137\143\x6f\x6e\164\145\156\164\x20\175\x7d";
    use FieldTrait, ToArrayTrait, ElementTrait, TemplateTrait, ComponentTrait, AttributeTrait;
    
    protected ?string $id = null;
    
    protected ?Element $parent = null;
    
    protected ?string $element = null;
    
    public function __construct(string $kqywgoqsmuswammk, ?string $aokagokqyuysuksm = null)
    {
        goto iswwimckkkeokgcm;
        iswwimckkkeokgcm:
        $this->id = $aokagokqyuysuksm;
        goto massqqageicawcwa;
        iuqqyoswkewaikma:
        $this->igmaewykumgwoaoy(self::ID, $aokagokqyuysuksm);
        goto waisuqycssimesui;
        massqqageicawcwa:
        $this->element = $kqywgoqsmuswammk;
        goto iuqqyoswkewaikma;
        waisuqycssimesui:
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
        goto iqaoqcwemuamiywa;
        ecegkmqcqocseacg:
        if (!$omwmuycmeqcqokom) {
            goto egqwsykqosqsqmei;
        }
        goto qckiyyomwgamwowy;
        amkmgqciseuyuswu:
        egqwsykqosqsqmei:
        goto eoeiuweemoocwwco;
        auqymasgagkmkeqe:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $this->souwykwwmyygqyqi());
        goto xmiymoymswickcuu;
        ssmwsoeooqmocwoc:
        if (!($nsmgceoqaqogqmuw && $qkqgooeegwokcmay && str_contains($qkqgooeegwokcmay, self::CHILD_CONTENT))) {
            goto ekauocuwoyemsqsq;
        }
        goto gqyasuaqiccikqiu;
        gssiyeaqueiauaak:
        $kqywgoqsmuswammk = $this->qqimkcgcmeewwwei();
        goto ecgeqsyqmqewqwao;
        gqyasuaqiccikqiu:
        $nsmgceoqaqogqmuw = str_replace(self::CHILD_CONTENT, $nsmgceoqaqogqmuw, $qkqgooeegwokcmay);
        goto moqqkweuiqogoecm;
        msqyagckiemcggqi:
        qegsskwcwiykcies:
        goto oewgqkuscaaqgocc;
        moqqkweuiqogoecm:
        ekauocuwoyemsqsq:
        goto amkmgqciseuyuswu;
        aymmqkugquckkuom:
        $omwmuycmeqcqokom = $this->ygqycmmkoiuocoia();
        goto ecegkmqcqocseacg;
        eoeiuweemoocwwco:
        $nsmgceoqaqogqmuw = $this->eiieguqemowyacgi($nsmgceoqaqogqmuw);
        goto eesyagkqmooggswo;
        eesyagkqmooggswo:
        if (!$ywmkwiwkosakssii["\145\143\150\x6f"]) {
            goto qegsskwcwiykcies;
        }
        goto omgkugwoikiiyouo;
        qckiyyomwgamwowy:
        $nsmgceoqaqogqmuw = $this->assmkuqekscwausm($nsmgceoqaqogqmuw);
        goto qsegmmyuaaegggwc;
        omgkugwoikiiyouo:
        echo $nsmgceoqaqogqmuw;
        goto msqyagckiemcggqi;
        ecgeqsyqmqewqwao:
        $wwgucssaecqekuek = array_filter($this->ccekeuwwqqoiwuwy());
        goto auqymasgagkmkeqe;
        qsegmmyuaaegggwc:
        $qkqgooeegwokcmay = $omwmuycmeqcqokom->render();
        goto ssmwsoeooqmocwoc;
        xmiymoymswickcuu:
        $nsmgceoqaqogqmuw = $this->ggiwigqywkaqogkk($nsmgceoqaqogqmuw);
        goto aymmqkugquckkuom;
        iqaoqcwemuamiywa:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\150\157" => false]);
        goto gssiyeaqueiauaak;
        oewgqkuscaaqgocc:
        return $nsmgceoqaqogqmuw;
        goto qksawqasmoackeyi;
        qksawqasmoackeyi:
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

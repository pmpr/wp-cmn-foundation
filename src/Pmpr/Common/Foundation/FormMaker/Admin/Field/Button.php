<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Button extends Field
{
    
    protected ?string $link = null;
    
    protected ?string $element = null;
    
    protected ?string $target = null;
    
    protected ?string $label = null;
    
    protected ?string $icon = null;
    
    protected ?string $action = null;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x62\165\164\x74\157\156", $aokagokqyuysuksm, '', $mkqqqewsokcswckc);
        $this->eqggmusacqoqcwuk($pkyyagewkiyckmwy)->comqsuwokcsmkcau("\x62\x75\164\x74\x6f\x6e");
    }
    
    public function gswweykyogmsyawy(?string $meqocwsecsywiiqs = null) : self
    {
        return $this->igmaewykumgwoaoy("\x74\151\164\x6c\145", $meqocwsecsywiiqs);
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg("\x62\165\x74\164\157\x6e\55\160\162\151\155\141\162\171");
    }
    
    public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self
    {
        $this->label = $pkyyagewkiyckmwy;
        return $this;
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label;
    }
    
    public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self
    {
        goto ekisckcuoqqosgsg;
        kqwmiakcsoaskmeu:
        $this->comqsuwokcsmkcau("\141");
        goto kkogamqweysaskie;
        kkogamqweysaskie:
        return $this;
        goto iuyuyeasowcwgogq;
        ekisckcuoqqosgsg:
        $this->link = $iwywmkygwewiamwm;
        goto kqwmiakcsoaskmeu;
        iuyuyeasowcwgogq:
    }
    
    public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self
    {
        $this->icon = $wkaqekwwgqsqwcoi;
        return $this;
    }
    
    public function cwqickkaaokiquuo(?string $aiamqeawckcsuaou) : self
    {
        $this->action = $aiamqeawckcsuaou;
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    private function comqsuwokcsmkcau(?string $kqywgoqsmuswammk) : self
    {
        $this->element = $kqywgoqsmuswammk;
        return $this;
    }
    
    public function ygagwkucacyassau() : self
    {
        return $this->usoqcyyugsuyiewc("\160\162\55\141\143\x74\151\x6f\x6e");
    }
    
    public function gioaiiyakuoimewa($qoiwmokisgikggia, $quyoyomkimissiqu = false) : self
    {
        $quyoyomkimissiqu = $quyoyomkimissiqu ? "\55\x6f\165\x74\x6c\x69\x6e\x65" : '';
        return $this->qigsyyqgewgskemg("\x62\164\156\x20\x62\x74\x6e{$quyoyomkimissiqu}\x2d{$qoiwmokisgikggia}");
    }
    
    public function muywawimuacwmkgw($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\144\141\156\147\145\x72", $quyoyomkimissiqu);
    }
    
    public function wksqkiomigqkkcgu($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\x77\141\x72\x6e\x69\x6e\147", $quyoyomkimissiqu);
    }
    
    public function miqekcqciusawwie($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\151\x6e\146\157", $quyoyomkimissiqu);
    }
    
    public function gmscmskmuissgywk($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\x70\162\151\x6d\141\162\x79", $quyoyomkimissiqu);
    }
    
    public function goqoickiksqsaeyk($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\163\145\143\x6f\156\x64\x61\162\x79", $quyoyomkimissiqu);
    }
    
    public function mweyuoqsqugqwcca($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\163\x75\143\143\145\x73\x73", $quyoyomkimissiqu);
    }
    
    public function igkwmqewuauogeus(string $gwgqcsmomamyqsmy) : self
    {
        return $this->igmaewykumgwoaoy("\144\141\164\x61\x2d\156\157\156\x63\x65", wp_create_nonce($gwgqcsmomamyqsmy));
    }
    
    public function ukmcmuaawacquume($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\142\165\x74\164\x6f\156") : self
    {
        $this->qigsyyqgewgskemg("\x70\x72\x2d\x63\157\156\146\x69\x72\155\141\x62\x6c\x65\55\x61\143\164\151\x6f\156");
        return $this->qcgocuceocquqcuw("\144\x61\x74\141\55\143\157\156\146\151\x67", ManipulateHTML::uskieqmcqyecigmy($ywmkwiwkosakssii, $kqywgoqsmuswammk));
    }
}

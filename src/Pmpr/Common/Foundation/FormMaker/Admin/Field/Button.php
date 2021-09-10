<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        parent::__construct("\x62\x75\x74\164\157\x6e", $aokagokqyuysuksm, '', $mkqqqewsokcswckc);
        $this->eqggmusacqoqcwuk($pkyyagewkiyckmwy)->comqsuwokcsmkcau("\142\x75\x74\164\x6f\156");
    }
    
    public function gswweykyogmsyawy(?string $meqocwsecsywiiqs = null) : self
    {
        return $this->igmaewykumgwoaoy("\164\151\164\154\145", $meqocwsecsywiiqs);
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg("\142\165\x74\164\x6f\x6e\55\x70\x72\x69\x6d\x61\x72\x79");
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
        goto ywigcekyomqoyqqi;
        gygqsmoiqagyeguk:
        return $this;
        goto qqamsqiwmckymggm;
        ywigcekyomqoyqqi:
        $this->link = $iwywmkygwewiamwm;
        goto kkiomqcmqcsoecag;
        kkiomqcmqcsoecag:
        $this->comqsuwokcsmkcau("\141");
        goto gygqsmoiqagyeguk;
        qqamsqiwmckymggm:
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
        return $this->usoqcyyugsuyiewc("\160\162\55\x61\143\164\151\157\156");
    }
    
    public function gioaiiyakuoimewa($qoiwmokisgikggia, $quyoyomkimissiqu = false) : self
    {
        $quyoyomkimissiqu = $quyoyomkimissiqu ? "\x2d\157\x75\x74\x6c\151\156\145" : '';
        return $this->qigsyyqgewgskemg("\x62\x74\x6e\40\142\164\x6e{$quyoyomkimissiqu}\55{$qoiwmokisgikggia}");
    }
    
    public function muywawimuacwmkgw($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\144\141\x6e\x67\145\162", $quyoyomkimissiqu);
    }
    
    public function wksqkiomigqkkcgu($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\x77\141\162\x6e\151\x6e\x67", $quyoyomkimissiqu);
    }
    
    public function miqekcqciusawwie($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\x69\156\x66\x6f", $quyoyomkimissiqu);
    }
    
    public function gmscmskmuissgywk($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\x70\162\151\155\x61\x72\171", $quyoyomkimissiqu);
    }
    
    public function goqoickiksqsaeyk($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\x73\145\143\157\156\144\141\162\x79", $quyoyomkimissiqu);
    }
    
    public function mweyuoqsqugqwcca($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\x73\x75\x63\143\145\x73\163", $quyoyomkimissiqu);
    }
    
    public function igkwmqewuauogeus(string $gwgqcsmomamyqsmy) : self
    {
        return $this->igmaewykumgwoaoy("\144\141\x74\x61\55\156\x6f\156\143\145", wp_create_nonce($gwgqcsmomamyqsmy));
    }
    
    public function ukmcmuaawacquume($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\142\x75\164\x74\x6f\156") : self
    {
        $this->qigsyyqgewgskemg("\160\162\55\x63\157\156\146\x69\162\x6d\141\x62\x6c\x65\x2d\x61\x63\x74\x69\157\156");
        return $this->qcgocuceocquqcuw("\144\141\x74\x61\55\143\x6f\156\x66\151\147", ManipulateHTML::uskieqmcqyecigmy($ywmkwiwkosakssii, $kqywgoqsmuswammk));
    }
}

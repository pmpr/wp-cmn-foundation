<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front;

use Pmpr\Common\Foundation\FormMaker\FormMaker;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;

class MultiStepForm extends Element
{
    
    protected array $steps = [];
    
    protected ?string $submitText = null;
    
    public function __construct(string $aokagokqyuysuksm = null)
    {
        goto mqgaomisqwmiigim;
        mqgaomisqwmiigim:
        $this->qigsyyqgewgskemg("\155\165\154\x74\151\x2d\163\x74\145\160\x2d\146\x72\157\x6d");
        goto kesceucuisgqegwo;
        cywucuooyguymsci:
        $this->submitText = __("\x53\x75\142\x6d\x69\x74", PR__CMN__FOUNDATION);
        goto iagwwaaygcmmmykw;
        quagwcciuagqessg:
        $this->qcgocuceocquqcuw("\155\x65\x74\x68\157\x64", "\120\x4f\123\x54");
        goto cywucuooyguymsci;
        kesceucuisgqegwo:
        parent::__construct("\146\x6f\x72\x6d", $aokagokqyuysuksm);
        goto quagwcciuagqessg;
        iagwwaaygcmmmykw:
    }
    
    public function iiqoooqcakkaeyiw() : self
    {
        $this->qigsyyqgewgskemg("\x63\x6c\x69\x63\153\141\x62\x6c\145\x2d\163\x74\145\x70\163");
        return $this;
    }
    
    public function suguoqqeycoiwcok(int $wyeyeaaekyoyimqu) : self
    {
        goto okqqowooiskyccky;
        iyokcuwocqoicegc:
        wwuwmiikyeeygyyi:
        goto qgaayqcoacyscqik;
        okqqowooiskyccky:
        if (!($wyeyeaaekyoyimqu > 1 && count($this->guiyusikssumecwk()) >= $wyeyeaaekyoyimqu)) {
            goto wwuwmiikyeeygyyi;
        }
        goto wkgaeksumwsaweow;
        wkgaeksumwsaweow:
        $this->igmaewykumgwoaoy("\144\x61\164\x61\55\163\x74\145\x70\55\x73\164\141\162\x74", $wyeyeaaekyoyimqu);
        goto iyokcuwocqoicegc;
        qgaayqcoacyscqik:
        return $this;
        goto yycgqsoesmqsemik;
        yycgqsoesmqsemik:
    }
    
    public function qoomaywwaswcaccu() : ?string
    {
        return $this->submitText;
    }
    
    public function misaicooiwoaimmu(?string $skmckiwuuaoeqemm) : self
    {
        $this->submitText = $skmckiwuuaoeqemm;
        return $this;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return $this->iuygowkemiiwqmiw("\x73\x74\x65\160\163", ["\x66\157\162\155" => $this, "\x73\x74\x65\160\x73" => $this->guiyusikssumecwk(), "\x73\x75\x62\155\x69\164\137\x74\145\x78\x74" => $this->qoomaywwaswcaccu(), "\151\x6e\x76\x61\x6c\151\144\x5f\151\x63\x6f\x6e" => IconFontawesomeInterface::ICON_CIRCLE_EXCLAMATION]);
    }
    
    public function wmoeeiseqeecugmu() : bool
    {
        return !empty($this->steps);
    }
    
    public function guiyusikssumecwk() : array
    {
        return $this->steps;
    }
    
    public function mgqggiyywoageqmo(Step $wyeyeaaekyoyimqu) : self
    {
        $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu;
        return $this;
    }
    
    public function maoomkygegkowemi(array $asuggasaseaacmqu) : self
    {
        goto iwcsswgiuqiqagyq;
        iwcsswgiuqiqagyq:
        foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) {
            $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu);
            aciiwoowqoygcuee:
        }
        goto guqwaqawiyaoycwc;
        oyeykyosscuomyqc:
        return $this;
        goto asiqqkkoesoeogsq;
        guqwaqawiyaoycwc:
        iumugucomiookemq:
        goto oyeykyosscuomyqc;
        asiqqkkoesoeogsq:
    }
    public function enqueue()
    {
        goto cmswoqwiyuoecakm;
        cmswoqwiyuoecakm:
        $eygsasmqycagyayw = FormMaker::symcgieuakksimmu()->miocmcoykayoyyau();
        goto oamwewkoeuaeksyy;
        yaugeaqeukqssose:
        $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\x6a\163"))->ayuciigykaswwqeo("\x6a\x71\165\145\162\171"))->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\143\x73\x73")));
        goto uaicoasqcyeuawwk;
        oamwewkoeuaeksyy:
        $ymqmyyeuycgmigyo = "\x6d\165\x6c\164\151\x73\164\x65\160";
        goto yaugeaqeukqssose;
        uaicoasqcyeuawwk:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Radio extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\144\x69\x76", "\162\x61\x64\x69\x6f", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
    
    public function mkmssscwmeekwgqo() : self
    {
        $this->inline = true;
        return $this;
    }
    
    public function wmociykwcyesssui() : bool
    {
        return $this->inline;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        goto gwewaiykiykyigeo;
        cqewgaaqiwayuoko:
        $momcykaoccoymeig = 1;
        goto kgywiqemagekugqe;
        oasgswewwmoqykoa:
        return $this->uikgwcuascgeissw() . $ewgwqamkygiqaawc;
        goto yciyysmucecskimo;
        uuiukusqaqkykiyi:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto qmkemsekcmccqiyg;
            hwmeuwuqykkwokiw:
            $egkyssmuqcwaciya = "\143\x75\163\x74\x6f\x6d\55\143\x6f\156\164\x72\157\x6c\x20\x63\x75\x73\164\x6f\155\x2d\162\x61\x64\151\x6f";
            goto qccqmcmckeoimoai;
            kqmkkoswuikcioyy:
            $wwgucssaecqekuek = ["\143\154\141\163\x73" => "\x63\x75\163\164\x6f\x6d\55\143\x6f\x6e\164\162\x6f\154\55\151\156\160\165\x74", self::ID => $aokagokqyuysuksm . $momcykaoccoymeig, self::TYPE => "\x72\x61\x64\151\x6f", self::NAME => $aokagokqyuysuksm, self::VALUE => $eqgoocgaqwqcimie];
            goto swcyceicuemomkgu;
            aeggeaaeyameykmm:
            aqeogmeyeguaqckw:
            goto saayeowaagsquisy;
            yceeoiguyiockyog:
            $momcykaoccoymeig++;
            goto aeggeaaeyameykmm;
            quwiqeccsoyekuym:
            $wwgucssaecqekuek["\143\150\145\x63\153\x65\x64"] = true;
            goto ckymggcskyoqisku;
            qccqmcmckeoimoai:
            if (!$this->wmociykwcyesssui()) {
                goto awagwaymwcmeagqg;
            }
            goto gaueqekgoikuowqi;
            qmkemsekcmccqiyg:
            $aokagokqyuysuksm = $this->mwikyscisascoeea();
            goto kqmkkoswuikcioyy;
            gaueqekgoikuowqi:
            $egkyssmuqcwaciya .= "\40\143\165\x73\164\x6f\155\55\143\x6f\x6e\164\162\157\154\x2d\151\x6e\154\151\156\x65";
            goto yiukgokwwsuaimwa;
            cawyqkqeossegomm:
            $ewgwqamkygiqaawc .= ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\x63\154\141\x73\163" => $egkyssmuqcwaciya], [$euueacigmgoqkimu, $pkyyagewkiyckmwy]);
            goto yceeoiguyiockyog;
            swcyceicuemomkgu:
            if (!($ggauoeuaesiymgee && $ggauoeuaesiymgee === $eqgoocgaqwqcimie || !$ggauoeuaesiymgee && $momcykaoccoymeig == 1)) {
                goto yougcykgisumukia;
            }
            goto quwiqeccsoyekuym;
            yiukgokwwsuaimwa:
            awagwaymwcmeagqg:
            goto cawyqkqeossegomm;
            meieukqcmqmwogek:
            $euueacigmgoqkimu = ManipulateHTML::qgsekwygcgawekeq("\x69\x6e\x70\165\x74", $wwgucssaecqekuek);
            goto ogewoqkkgssweeuk;
            ckymggcskyoqisku:
            yougcykgisumukia:
            goto meieukqcmqmwogek;
            ogewoqkkgssweeuk:
            $pkyyagewkiyckmwy = ManipulateHTML::qgsekwygcgawekeq("\x6c\x61\x62\x65\x6c", ["\143\154\x61\163\x73" => "\143\x75\x73\164\157\x6d\x2d\143\157\156\x74\x72\x6f\x6c\55\x6c\x61\142\x65\154", "\x66\157\162" => $aokagokqyuysuksm . $momcykaoccoymeig], true, $meqocwsecsywiiqs);
            goto hwmeuwuqykkwokiw;
            saayeowaagsquisy:
        }
        goto qecgguuckuucaoyu;
        kgywiqemagekugqe:
        $ggauoeuaesiymgee = $this->oiswysuiioecsaae();
        goto uuiukusqaqkykiyi;
        wegiqgicwasiuomk:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto wmqacumokqegmmiq;
        wsmigmawyoasesuw:
        vowqmwsooooeyywc:
        goto oasgswewwmoqykoa;
        qecgguuckuucaoyu:
        uemcgsaisgakauyw:
        goto wsmigmawyoasesuw;
        gwewaiykiykyigeo:
        $ewgwqamkygiqaawc = '';
        goto wegiqgicwasiuomk;
        wmqacumokqegmmiq:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto vowqmwsooooeyywc;
        }
        goto cqewgaaqiwayuoko;
        yciyysmucecskimo:
    }
}

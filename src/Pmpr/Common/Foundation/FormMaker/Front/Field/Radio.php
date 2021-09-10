<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Radio extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\144\151\x76", "\162\x61\144\151\x6f", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
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
        wmqacumokqegmmiq:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto vowqmwsooooeyywc;
        }
        goto cqewgaaqiwayuoko;
        wsmigmawyoasesuw:
        vowqmwsooooeyywc:
        goto oasgswewwmoqykoa;
        uuiukusqaqkykiyi:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto qmkemsekcmccqiyg;
            meieukqcmqmwogek:
            $euueacigmgoqkimu = ManipulateHTML::qgsekwygcgawekeq("\x69\x6e\160\x75\x74", $wwgucssaecqekuek);
            goto ogewoqkkgssweeuk;
            swcyceicuemomkgu:
            if (!($ggauoeuaesiymgee && $ggauoeuaesiymgee === $eqgoocgaqwqcimie || !$ggauoeuaesiymgee && $momcykaoccoymeig == 1)) {
                goto yougcykgisumukia;
            }
            goto quwiqeccsoyekuym;
            aeggeaaeyameykmm:
            aqeogmeyeguaqckw:
            goto saayeowaagsquisy;
            ogewoqkkgssweeuk:
            $pkyyagewkiyckmwy = ManipulateHTML::qgsekwygcgawekeq("\x6c\x61\142\145\154", ["\x63\x6c\x61\163\x73" => "\143\x75\163\x74\157\155\55\143\157\x6e\x74\162\x6f\x6c\55\x6c\141\x62\x65\154", "\146\157\x72" => $aokagokqyuysuksm . $momcykaoccoymeig], true, $meqocwsecsywiiqs);
            goto hwmeuwuqykkwokiw;
            gaueqekgoikuowqi:
            $egkyssmuqcwaciya .= "\x20\x63\x75\163\164\157\155\x2d\x63\157\x6e\164\x72\x6f\154\x2d\151\x6e\x6c\151\156\x65";
            goto yiukgokwwsuaimwa;
            cawyqkqeossegomm:
            $ewgwqamkygiqaawc .= ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\143\154\x61\163\x73" => $egkyssmuqcwaciya], [$euueacigmgoqkimu, $pkyyagewkiyckmwy]);
            goto yceeoiguyiockyog;
            kqmkkoswuikcioyy:
            $wwgucssaecqekuek = ["\x63\154\x61\x73\x73" => "\143\x75\x73\164\x6f\x6d\55\143\x6f\x6e\164\162\x6f\154\55\x69\156\160\165\x74", self::ID => $aokagokqyuysuksm . $momcykaoccoymeig, self::TYPE => "\162\x61\x64\151\x6f", self::NAME => $aokagokqyuysuksm, self::VALUE => $eqgoocgaqwqcimie];
            goto swcyceicuemomkgu;
            quwiqeccsoyekuym:
            $wwgucssaecqekuek["\x63\x68\145\143\x6b\x65\x64"] = true;
            goto ckymggcskyoqisku;
            hwmeuwuqykkwokiw:
            $egkyssmuqcwaciya = "\143\165\163\x74\157\x6d\55\143\x6f\x6e\164\x72\x6f\x6c\x20\x63\165\x73\164\157\155\55\162\x61\x64\151\x6f";
            goto qccqmcmckeoimoai;
            ckymggcskyoqisku:
            yougcykgisumukia:
            goto meieukqcmqmwogek;
            yiukgokwwsuaimwa:
            awagwaymwcmeagqg:
            goto cawyqkqeossegomm;
            qccqmcmckeoimoai:
            if (!$this->wmociykwcyesssui()) {
                goto awagwaymwcmeagqg;
            }
            goto gaueqekgoikuowqi;
            yceeoiguyiockyog:
            $momcykaoccoymeig++;
            goto aeggeaaeyameykmm;
            qmkemsekcmccqiyg:
            $aokagokqyuysuksm = $this->mwikyscisascoeea();
            goto kqmkkoswuikcioyy;
            saayeowaagsquisy:
        }
        goto qecgguuckuucaoyu;
        oasgswewwmoqykoa:
        return $this->uikgwcuascgeissw() . $ewgwqamkygiqaawc;
        goto yciyysmucecskimo;
        qecgguuckuucaoyu:
        uemcgsaisgakauyw:
        goto wsmigmawyoasesuw;
        gwewaiykiykyigeo:
        $ewgwqamkygiqaawc = '';
        goto wegiqgicwasiuomk;
        wegiqgicwasiuomk:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto wmqacumokqegmmiq;
        cqewgaaqiwayuoko:
        $momcykaoccoymeig = 1;
        goto kgywiqemagekugqe;
        kgywiqemagekugqe:
        $ggauoeuaesiymgee = $this->oiswysuiioecsaae();
        goto uuiukusqaqkykiyi;
        yciyysmucecskimo:
    }
}

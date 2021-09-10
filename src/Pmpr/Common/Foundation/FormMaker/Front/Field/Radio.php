<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Radio extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\144\x69\x76", "\162\141\144\151\x6f", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
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
        goto wegiqgicwasiuomk;
        oasgswewwmoqykoa:
        gwewaiykiykyigeo:
        goto yciyysmucecskimo;
        cqewgaaqiwayuoko:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto gwewaiykiykyigeo;
        }
        goto kgywiqemagekugqe;
        wegiqgicwasiuomk:
        $ewgwqamkygiqaawc = '';
        goto wmqacumokqegmmiq;
        wsmigmawyoasesuw:
        aqeogmeyeguaqckw:
        goto oasgswewwmoqykoa;
        uuiukusqaqkykiyi:
        $ggauoeuaesiymgee = $this->oiswysuiioecsaae();
        goto qecgguuckuucaoyu;
        kgywiqemagekugqe:
        $momcykaoccoymeig = 1;
        goto uuiukusqaqkykiyi;
        qecgguuckuucaoyu:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto kqmkkoswuikcioyy;
            gaueqekgoikuowqi:
            if (!$this->wmociykwcyesssui()) {
                goto qmkemsekcmccqiyg;
            }
            goto yiukgokwwsuaimwa;
            aeggeaaeyameykmm:
            $momcykaoccoymeig++;
            goto saayeowaagsquisy;
            ckymggcskyoqisku:
            $wwgucssaecqekuek["\143\150\145\143\x6b\x65\144"] = true;
            goto meieukqcmqmwogek;
            yceeoiguyiockyog:
            $ewgwqamkygiqaawc .= ManipulateHTML::uuccukgasskgimsq("\x64\x69\166", ["\x63\154\x61\163\163" => $egkyssmuqcwaciya], [$euueacigmgoqkimu, $pkyyagewkiyckmwy]);
            goto aeggeaaeyameykmm;
            kqmkkoswuikcioyy:
            $aokagokqyuysuksm = $this->mwikyscisascoeea();
            goto swcyceicuemomkgu;
            cawyqkqeossegomm:
            qmkemsekcmccqiyg:
            goto yceeoiguyiockyog;
            yiukgokwwsuaimwa:
            $egkyssmuqcwaciya .= "\x20\x63\x75\163\x74\157\155\x2d\143\x6f\x6e\x74\x72\x6f\x6c\x2d\151\x6e\154\151\156\145";
            goto cawyqkqeossegomm;
            ogewoqkkgssweeuk:
            $euueacigmgoqkimu = ManipulateHTML::qgsekwygcgawekeq("\151\x6e\160\165\164", $wwgucssaecqekuek);
            goto hwmeuwuqykkwokiw;
            qccqmcmckeoimoai:
            $egkyssmuqcwaciya = "\x63\x75\163\x74\x6f\155\x2d\143\x6f\156\x74\x72\x6f\154\40\x63\x75\163\x74\157\x6d\x2d\x72\141\x64\151\x6f";
            goto gaueqekgoikuowqi;
            meieukqcmqmwogek:
            awagwaymwcmeagqg:
            goto ogewoqkkgssweeuk;
            hwmeuwuqykkwokiw:
            $pkyyagewkiyckmwy = ManipulateHTML::qgsekwygcgawekeq("\x6c\x61\142\x65\x6c", ["\x63\154\x61\x73\163" => "\x63\165\163\x74\x6f\x6d\55\143\x6f\x6e\x74\162\157\154\55\x6c\141\x62\145\154", "\x66\x6f\x72" => $aokagokqyuysuksm . $momcykaoccoymeig], true, $meqocwsecsywiiqs);
            goto qccqmcmckeoimoai;
            quwiqeccsoyekuym:
            if (!($ggauoeuaesiymgee && $ggauoeuaesiymgee === $eqgoocgaqwqcimie || !$ggauoeuaesiymgee && $momcykaoccoymeig == 1)) {
                goto awagwaymwcmeagqg;
            }
            goto ckymggcskyoqisku;
            saayeowaagsquisy:
            yougcykgisumukia:
            goto vowqmwsooooeyywc;
            swcyceicuemomkgu:
            $wwgucssaecqekuek = ["\143\x6c\141\163\x73" => "\x63\165\x73\164\157\x6d\x2d\x63\x6f\x6e\164\162\x6f\x6c\x2d\151\x6e\160\x75\164", self::ID => $aokagokqyuysuksm . $momcykaoccoymeig, self::TYPE => "\x72\141\x64\x69\157", self::NAME => $aokagokqyuysuksm, self::VALUE => $eqgoocgaqwqcimie];
            goto quwiqeccsoyekuym;
            vowqmwsooooeyywc:
        }
        goto wsmigmawyoasesuw;
        yciyysmucecskimo:
        return $this->uikgwcuascgeissw() . $ewgwqamkygiqaawc;
        goto cuuaywiycieugooq;
        wmqacumokqegmmiq:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto cqewgaaqiwayuoko;
        cuuaywiycieugooq:
    }
}

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Radio extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x64\x69\166", "\162\x61\144\x69\157", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
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
        cqewgaaqiwayuoko:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto gwewaiykiykyigeo;
        }
        goto kgywiqemagekugqe;
        wegiqgicwasiuomk:
        $ewgwqamkygiqaawc = '';
        goto wmqacumokqegmmiq;
        kgywiqemagekugqe:
        $momcykaoccoymeig = 1;
        goto uuiukusqaqkykiyi;
        qecgguuckuucaoyu:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto kqmkkoswuikcioyy;
            saayeowaagsquisy:
            yougcykgisumukia:
            goto vowqmwsooooeyywc;
            kqmkkoswuikcioyy:
            $aokagokqyuysuksm = $this->mwikyscisascoeea();
            goto swcyceicuemomkgu;
            cawyqkqeossegomm:
            qmkemsekcmccqiyg:
            goto yceeoiguyiockyog;
            qccqmcmckeoimoai:
            $egkyssmuqcwaciya = "\143\165\163\164\157\x6d\55\143\x6f\x6e\164\162\x6f\154\x20\x63\x75\x73\164\x6f\155\x2d\x72\141\144\151\157";
            goto gaueqekgoikuowqi;
            aeggeaaeyameykmm:
            $momcykaoccoymeig++;
            goto saayeowaagsquisy;
            ckymggcskyoqisku:
            $wwgucssaecqekuek["\143\150\145\x63\x6b\145\x64"] = true;
            goto meieukqcmqmwogek;
            meieukqcmqmwogek:
            awagwaymwcmeagqg:
            goto ogewoqkkgssweeuk;
            ogewoqkkgssweeuk:
            $euueacigmgoqkimu = ManipulateHTML::qgsekwygcgawekeq("\151\156\160\165\x74", $wwgucssaecqekuek);
            goto hwmeuwuqykkwokiw;
            gaueqekgoikuowqi:
            if (!$this->wmociykwcyesssui()) {
                goto qmkemsekcmccqiyg;
            }
            goto yiukgokwwsuaimwa;
            swcyceicuemomkgu:
            $wwgucssaecqekuek = ["\x63\x6c\x61\x73\163" => "\143\x75\163\x74\157\155\55\143\157\x6e\164\x72\x6f\154\x2d\x69\x6e\160\x75\164", self::ID => $aokagokqyuysuksm . $momcykaoccoymeig, self::TYPE => "\162\141\144\x69\x6f", self::NAME => $aokagokqyuysuksm, self::VALUE => $eqgoocgaqwqcimie];
            goto quwiqeccsoyekuym;
            yiukgokwwsuaimwa:
            $egkyssmuqcwaciya .= "\x20\143\165\163\164\157\x6d\x2d\143\x6f\x6e\164\162\157\154\55\151\x6e\154\x69\x6e\x65";
            goto cawyqkqeossegomm;
            quwiqeccsoyekuym:
            if (!($ggauoeuaesiymgee && $ggauoeuaesiymgee === $eqgoocgaqwqcimie || !$ggauoeuaesiymgee && $momcykaoccoymeig == 1)) {
                goto awagwaymwcmeagqg;
            }
            goto ckymggcskyoqisku;
            yceeoiguyiockyog:
            $ewgwqamkygiqaawc .= ManipulateHTML::uuccukgasskgimsq("\x64\151\166", ["\x63\x6c\141\163\x73" => $egkyssmuqcwaciya], [$euueacigmgoqkimu, $pkyyagewkiyckmwy]);
            goto aeggeaaeyameykmm;
            hwmeuwuqykkwokiw:
            $pkyyagewkiyckmwy = ManipulateHTML::qgsekwygcgawekeq("\154\x61\x62\145\154", ["\x63\x6c\141\x73\x73" => "\x63\165\163\164\x6f\x6d\x2d\143\157\x6e\x74\x72\x6f\x6c\x2d\x6c\141\x62\x65\154", "\146\157\x72" => $aokagokqyuysuksm . $momcykaoccoymeig], true, $meqocwsecsywiiqs);
            goto qccqmcmckeoimoai;
            vowqmwsooooeyywc:
        }
        goto wsmigmawyoasesuw;
        wsmigmawyoasesuw:
        aqeogmeyeguaqckw:
        goto oasgswewwmoqykoa;
        uuiukusqaqkykiyi:
        $ggauoeuaesiymgee = $this->oiswysuiioecsaae();
        goto qecgguuckuucaoyu;
        oasgswewwmoqykoa:
        gwewaiykiykyigeo:
        goto yciyysmucecskimo;
        yciyysmucecskimo:
        return $this->uikgwcuascgeissw() . $ewgwqamkygiqaawc;
        goto cuuaywiycieugooq;
        wmqacumokqegmmiq:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto cqewgaaqiwayuoko;
        cuuaywiycieugooq:
    }
}

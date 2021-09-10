<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Radio extends OptionAwareField
{
    
    protected bool $inline = false;
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\x64\151\x76", "\x72\x61\x64\151\157", $aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
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
        goto wmqacumokqegmmiq;
        oasgswewwmoqykoa:
        yougcykgisumukia:
        goto yciyysmucecskimo;
        cuuaywiycieugooq:
        return $this->uikgwcuascgeissw() . $ewgwqamkygiqaawc;
        goto qikgswsucicammsu;
        wsmigmawyoasesuw:
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            goto swcyceicuemomkgu;
            swcyceicuemomkgu:
            $aokagokqyuysuksm = $this->mwikyscisascoeea();
            goto quwiqeccsoyekuym;
            vowqmwsooooeyywc:
            awagwaymwcmeagqg:
            goto gwewaiykiykyigeo;
            ckymggcskyoqisku:
            if (!($ggauoeuaesiymgee && $ggauoeuaesiymgee === $eqgoocgaqwqcimie || !$ggauoeuaesiymgee && $momcykaoccoymeig == 1)) {
                goto qmkemsekcmccqiyg;
            }
            goto meieukqcmqmwogek;
            saayeowaagsquisy:
            $momcykaoccoymeig++;
            goto vowqmwsooooeyywc;
            aeggeaaeyameykmm:
            $ewgwqamkygiqaawc .= ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\x63\x6c\141\x73\x73" => $egkyssmuqcwaciya], [$euueacigmgoqkimu, $pkyyagewkiyckmwy]);
            goto saayeowaagsquisy;
            quwiqeccsoyekuym:
            $wwgucssaecqekuek = ["\x63\x6c\x61\163\x73" => "\143\x75\163\164\x6f\x6d\x2d\x63\157\x6e\x74\162\157\154\x2d\x69\x6e\160\x75\x74", self::ID => $aokagokqyuysuksm . $momcykaoccoymeig, self::TYPE => "\162\141\144\151\157", self::NAME => $aokagokqyuysuksm, self::VALUE => $eqgoocgaqwqcimie];
            goto ckymggcskyoqisku;
            qccqmcmckeoimoai:
            $pkyyagewkiyckmwy = ManipulateHTML::qgsekwygcgawekeq("\x6c\x61\x62\x65\154", ["\x63\x6c\x61\163\x73" => "\x63\x75\x73\164\157\x6d\55\143\x6f\x6e\164\162\157\154\x2d\154\141\142\145\x6c", "\x66\157\162" => $aokagokqyuysuksm . $momcykaoccoymeig], true, $meqocwsecsywiiqs);
            goto gaueqekgoikuowqi;
            hwmeuwuqykkwokiw:
            $euueacigmgoqkimu = ManipulateHTML::qgsekwygcgawekeq("\151\156\160\165\x74", $wwgucssaecqekuek);
            goto qccqmcmckeoimoai;
            ogewoqkkgssweeuk:
            qmkemsekcmccqiyg:
            goto hwmeuwuqykkwokiw;
            cawyqkqeossegomm:
            $egkyssmuqcwaciya .= "\x20\143\x75\x73\x74\x6f\x6d\x2d\x63\157\x6e\164\162\157\154\55\151\x6e\x6c\x69\x6e\145";
            goto yceeoiguyiockyog;
            meieukqcmqmwogek:
            $wwgucssaecqekuek["\143\x68\145\143\153\145\144"] = true;
            goto ogewoqkkgssweeuk;
            yceeoiguyiockyog:
            kqmkkoswuikcioyy:
            goto aeggeaaeyameykmm;
            gaueqekgoikuowqi:
            $egkyssmuqcwaciya = "\x63\x75\x73\164\157\x6d\55\x63\x6f\156\164\162\x6f\x6c\40\143\x75\x73\164\x6f\155\x2d\x72\x61\x64\x69\157";
            goto yiukgokwwsuaimwa;
            yiukgokwwsuaimwa:
            if (!$this->wmociykwcyesssui()) {
                goto kqmkkoswuikcioyy;
            }
            goto cawyqkqeossegomm;
            gwewaiykiykyigeo:
        }
        goto oasgswewwmoqykoa;
        yciyysmucecskimo:
        wegiqgicwasiuomk:
        goto cuuaywiycieugooq;
        cqewgaaqiwayuoko:
        $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
        goto kgywiqemagekugqe;
        kgywiqemagekugqe:
        if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) {
            goto wegiqgicwasiuomk;
        }
        goto uuiukusqaqkykiyi;
        wmqacumokqegmmiq:
        $ewgwqamkygiqaawc = '';
        goto cqewgaaqiwayuoko;
        qecgguuckuucaoyu:
        $ggauoeuaesiymgee = $this->oiswysuiioecsaae();
        goto wsmigmawyoasesuw;
        uuiukusqaqkykiyi:
        $momcykaoccoymeig = 1;
        goto qecgguuckuucaoyu;
        qikgswsucicammsu:
    }
}

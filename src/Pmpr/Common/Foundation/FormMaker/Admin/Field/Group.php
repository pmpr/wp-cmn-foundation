<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Group extends OptionAwareField
{
    
    protected array $fields = [];
    
    protected array $nonDuplicate = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $ikgwqyuyckaewsow = [], ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct("\147\162\x6f\165\160", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->acauweqyyugwisqc(["\154\151\155\151\x74" => 0, "\x73\x6f\162\x74\x61\x62\154\x65" => false, "\162\145\x6d\x6f\x76\x65\137\x62\x75\164\x74\157\x6e" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\x66\x6f\162\x6d\55\143\157\x6e\x74\141\151\156\145\x72\40\x63\157\154\x2d\61\62")->ewweaossowcqywaw($ikgwqyuyckaewsow);
    }
    
    public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self
    {
        goto uaisequwcmsgwoek;
        kamqckgacqaqymiu:
        return $this;
        goto emwwmokiwkwyucwo;
        uaisequwcmsgwoek:
        if (!$pkyyagewkiyckmwy) {
            goto wagiaqiqcimegwae;
        }
        goto maieoomciymaweag;
        maieoomciymaweag:
        $this->acauweqyyugwisqc(["\x61\144\144\x5f\142\x75\164\164\x6f\x6e" => sprintf(__("\x41\144\x64\40\x4e\145\167\40\45\163", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\x67\162\157\165\x70\x5f\164\151\x74\154\145" => sprintf("\45\163\x20\173\43\x7d", $pkyyagewkiyckmwy)]);
        goto mumiaqugqwusaqms;
        mumiaqugqwusaqms:
        wagiaqiqcimegwae:
        goto kamqckgacqaqymiu;
        emwwmokiwkwyucwo:
    }
    
    public function ugmceccgwaaaigiy() : ?array
    {
        return $this->fields;
    }
    
    public function acakyumkgoeiskqq(array $ikgwqyuyckaewsow) : self
    {
        $this->fields = $ikgwqyuyckaewsow;
        return $this;
    }
    
    public function omsoosuoikgueyke() : self
    {
        $this->qigsyyqgewgskemg("\x63\157\154\x2d\154\x67\55\66");
        return $this;
    }
    
    public function usosgsaaimqcysyk() : self
    {
        $this->qigsyyqgewgskemg("\x63\x6f\154\55\x6c\147\55\x36\x20\x63\x6f\x6c\55\170\x6c\x2d\64");
        return $this;
    }
    
    public function wygoskowywcuyaiq() : self
    {
        $this->qigsyyqgewgskemg("\143\157\154\x2d\x6d\x64\55\66\x20\x63\157\x6c\55\x6c\147\x2d\x34\x20\x63\x6f\154\x2d\170\x6c\55\x33");
        return $this;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        goto isskocqmuyoukaaq;
        qeqiyayukmgicguk:
        $aiowsaccomcoikus->mkmssscwmeekwgqo();
        goto mkuwaomcwgqaiosi;
        oocumekqmguuwssy:
        return $this;
        goto wgqeayikcayiiqww;
        isskocqmuyoukaaq:
        if ($aiowsaccomcoikus->yywskysiycwkwsgw()) {
            goto imummuqgkwsswaqg;
        }
        goto scysisyaqygmiege;
        scysisyaqygmiege:
        $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        goto quaceaqiyccsewwm;
        quaceaqiyccsewwm:
        imummuqgkwsswaqg:
        goto eguawwomyaaeausm;
        ggamwkssakcsyygo:
        kaksyamuwcoawuyi:
        goto ioosiucucgmakmce;
        ioosiucucgmakmce:
        $aiowsaccomcoikus->yoimakcqmoqokkcu();
        goto eocskckeeaccikom;
        qceesmmqyuwkcyeu:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto oocumekqmguuwssy;
        eguawwomyaaeausm:
        if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\x65\x63\x6b\x62\157\x78", "\162\x61\x64\x69\x6f"])) {
            goto kaksyamuwcoawuyi;
        }
        goto qeqiyayukmgicguk;
        eocskckeeaccikom:
        wayeccuwqcsagsku:
        goto qceesmmqyuwkcyeu;
        mkuwaomcwgqaiosi:
        goto wayeccuwqcsagsku;
        goto ggamwkssakcsyygo;
        wgqeayikcayiiqww:
    }
    
    public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self
    {
        goto uogcysggcyoisegq;
        sukamomeeqoewoki:
        wguwwigkqeqkkwii:
        goto emcwkykcwsiugweq;
        uogcysggcyoisegq:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            gqiqiogyyiyqmeqs:
        }
        goto sukamomeeqoewoki;
        emcwkykcwsiugweq:
        return $this;
        goto qkoqqyysqyaksosq;
        qkoqqyysqyaksosq:
    }
    
    public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\141\x6e\144", $wumguikkgaigkoee = []) : self
    {
        goto gugsmkokowuukqsy;
        ywyceqiucseqcakg:
        return $this;
        goto kwaaskgiymsiyoue;
        iqwgyiwuwioggcco:
        ugqwwswmcmgiwoui:
        goto ouggkyamcckwgueg;
        gugsmkokowuukqsy:
        if ($wumguikkgaigkoee) {
            goto ugqwwswmcmgiwoui;
        }
        goto qgsascuseaqueomc;
        qgsascuseaqueomc:
        $wumguikkgaigkoee = ["\x73\165\x62\155\x69\x74" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\123\x6f\162\162\x79\54\40\x79\157\x75\x20\x63\141\x6e\47\x74\40\x73\165\x62\155\151\164\40\146\157\x72\x6d\56\x20\123\x6f\155\x65\40\146\x69\x65\x6c\x64\47\x73\40\166\x61\154\165\145\40\x69\163\40\x64\165\x70\154\x69\x63\141\164\145\144\x20\151\x6e\x20\147\x72\x6f\x75\160\x2c\40\160\154\145\141\x73\145\x20\146\151\x78\40\x65\x72\162\x6f\162\163\40\141\x6e\144\40\x74\x72\171\x20\x61\147\141\x69\156\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\141\x64\144\137\x6e\x65\x77" => ManipulateHTML::ciuuiyckmsygceis(sprintf(__("\123\157\x72\162\x79\54\x20\171\157\165\x20\x63\x61\156\47\x74\40\141\x64\x64\40\156\x65\x77\x20\x25\163\x2e\x20\x53\x6f\x6d\145\40\146\x69\145\x6c\144\47\x73\40\x76\x61\154\x75\x65\40\x69\x73\40\x64\165\160\154\x69\x63\141\x74\x65\144\54\40\x70\x6c\145\141\163\145\x20\146\x69\170\x20\145\162\x72\x6f\x72\x73\x20\x61\156\144\x20\164\162\171\40\x61\x67\141\151\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))];
        goto iqwgyiwuwioggcco;
        ouggkyamcckwgueg:
        $this->nonDuplicate[] = ["\x66\x69\x65\154\144\x73" => $ikgwqyuyckaewsow, "\142\x6f\157\x6c\145\141\156" => $qsycuegoicqcqkmo, "\x6d\145\x73\163\141\x67\145\163" => $wumguikkgaigkoee];
        goto ywyceqiucseqcakg;
        kwaaskgiymsiyoue:
    }
    
    public function iaogqeuosowauooc() : array
    {
        return $this->nonDuplicate;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        goto cawqyquqwqgkwyyu;
        qaoeyeikykeaaowq:
        $this->options["\141\x74\164\x72\x69\142\x75\x74\x65\163"] = $this->ccekeuwwqqoiwuwy();
        goto ogeoueuoieueoyig;
        umyocumuyaikwsmc:
        $this->usoqcyyugsuyiewc("\x70\x72\55\156\157\156\55\x64\x75\x70\154\x69\143\141\164\x65\x2d\x67\162\157\165\x70")->igmaewykumgwoaoy("\144\x61\x74\141\x2d\x6e\157\x6e\x2d\x64\x75\160\x6c\151\143\141\x74\x65", json_encode($wmeooiyuiyagywsc));
        goto akcmiiomammumqmy;
        qocywkiqgmwikmqc:
        umkauikqwecsaeou:
        goto wqwumomcwkeskumw;
        cawqyquqwqgkwyyu:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            $aiowsaccomcoikus["\166\x61\154\x75\x65"] = $this->qooeaookuemoqecm();
            aakgcoqyscuiyqsa:
        }
        goto qocywkiqgmwikmqc;
        akcmiiomammumqmy:
        kammygamykcycsgy:
        goto wiieusyiicqkowoy;
        wqwumomcwkeskumw:
        if (!($wmeooiyuiyagywsc = $this->iaogqeuosowauooc())) {
            goto kammygamykcycsgy;
        }
        goto umyocumuyaikwsmc;
        wiieusyiicqkowoy:
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        goto qaoeyeikykeaaowq;
        ogeoueuoieueoyig:
    }
}

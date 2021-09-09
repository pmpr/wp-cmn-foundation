<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\Decorator\DecoratorSanitize;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Tab extends Element
{
    
    protected array $fields = [];
    
    protected ?string $icon = null;
    
    protected array $metaBoxes = [];
    
    protected array $sideMetaBoxes = [];
    
    protected ?string $description = null;
    
    public function __construct($aokagokqyuysuksm = null, $meqocwsecsywiiqs = null)
    {
        $this->title = $meqocwsecsywiiqs;
        parent::__construct($aokagokqyuysuksm);
    }
    
    public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self
    {
        $this->icon = $wkaqekwwgqsqwcoi;
        return $this;
    }
    
    public function eyamqkqiykagecsw() : ?string
    {
        return $this->icon;
    }
    
    public function ugmceccgwaaaigiy() : array
    {
        return $this->fields;
    }
    
    public function meqceykmywmqgoym() : ?string
    {
        return $this->description;
    }
    
    public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self
    {
        $this->description = $ukwokcuqauuosmoo;
        return $this;
    }
    
    public function qsqiqgmeoowykuue() : array
    {
        return $this->metaBoxes;
    }
    
    public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self
    {
        $this->metaBoxes[$qkweikswegyciaie->mwikyscisascoeea()] = $qkweikswegyciaie;
        return $this;
    }
    
    public function mugcceiwosyciwos(array $uaqusiikkokccqou = []) : self
    {
        goto gmimikyuuummsqgq;
        ekoywwcmuycuogkk:
        return $this;
        goto cwcekuuiweyymiae;
        gmimikyuuummsqgq:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            $this->sikqggwmmykuiymy($qkweikswegyciaie);
            waycoiasakwsguey:
        }
        goto uiicisqcyuwkusyo;
        uiicisqcyuwkusyo:
        cowiomsgsyuyyega:
        goto ekoywwcmuycuogkk;
        cwcekuuiweyymiae:
    }
    
    public function sekaaukqmiysugws() : bool
    {
        return !empty($this->qsqiqgmeoowykuue());
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self
    {
        goto qyqmkeauqqkmqseu;
        qyqmkeauqqkmqseu:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto amaoismuweoiksau;
            amaoismuweoiksau:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ueoqeuoaskcsokea;
            }
            goto qmwmsywoygsaqkio;
            qmwmsywoygsaqkio:
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            goto gyysamqwsycqoueo;
            gyysamqwsycqoueo:
            ueoqeuoaskcsokea:
            goto yqegceyooessmcyo;
            yqegceyooessmcyo:
            agoigaqmiekycgkc:
            goto mueqyymqucqywkuu;
            mueqyymqucqywkuu:
        }
        goto qmqgueuqmwyksssq;
        qmqgueuqmwyksssq:
        cgoysuiaaumssasc:
        goto uaqkeycsegiqgiae;
        uaqkeycsegiqgiae:
        return $this;
        goto aumyyiwqawqyimwk;
        aumyyiwqawqyimwk:
    }
    
    public function weookicuaacigemm() : array
    {
        return $this->sideMetaBoxes;
    }
    
    public function uwymwiymwwekwuwe(?MetaBox $qkweikswegyciaie = null)
    {
        $this->sideMetaBoxes[$qkweikswegyciaie->mwikyscisascoeea()] = $qkweikswegyciaie;
        return $this;
    }
    
    public function ouqigcumkqeksocm() : bool
    {
        return !empty($this->weookicuaacigemm());
    }
    
    public function mukiwuqwmywsckco() : bool
    {
        return !empty($this->ugmceccgwaaaigiy());
    }
    
    public function wacemkqmiwuqouga(string $uusmaiomayssaecw = null) : array
    {
        goto ssmwkcqiauygamuc;
        yewmgwogkoscccca:
        foreach ($uaqusiikkokccqou as $qkweikswegyciaie) {
            goto auyaikoiociousmy;
            auyaikoiociousmy:
            $qkweikswegyciaie = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\137{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\155\x65\x74\x61\142\157\170\x65", $qkweikswegyciaie, $this);
            goto woyiusauaiiscqgk;
            keuacmemqaigmkgu:
            gsaucycumgsmsymc:
            goto qaocqwauwmuuiqwk;
            woyiusauaiiscqgk:
            if (!$qkweikswegyciaie instanceof MetaBox) {
                goto ccyowiaoasoqoaic;
            }
            goto wqeqooqkimkggumq;
            kuiuwqwakomqyoey:
            ccyowiaoasoqoaic:
            goto keuacmemqaigmkgu;
            wqeqooqkimkggumq:
            $oeoswouussioaimo = $qkweikswegyciaie->register($uusmaiomayssaecw);
            goto iygoyeckqssygyqg;
            iygoyeckqssygyqg:
            if (!$oeoswouussioaimo) {
                goto ceugeqiqkmygwwik;
            }
            goto omeaeeoqseegqyqw;
            omeaeeoqseegqyqw:
            $saouceauqqiwcwas[$qkweikswegyciaie->cisyiemkeykgkomc()] = $oeoswouussioaimo;
            goto kemuauaewuaeuowc;
            kemuauaewuaeuowc:
            ceugeqiqkmygwwik:
            goto kuiuwqwakomqyoey;
            qaocqwauwmuuiqwk:
        }
        goto iqgyemmowuemqccs;
        vwgqesqmwyueecok:
        if (!(is_array($uaqusiikkokccqou) && $uaqusiikkokccqou)) {
            goto aiamywyeoksiyawe;
        }
        goto yewmgwogkoscccca;
        qesyekwwiuosiyau:
        $uaqusiikkokccqou = $this->sscegwueamckwmcy("{$uusmaiomayssaecw}\x5f{$this->mwikyscisascoeea()}\137\x74\141\x62\137\155\x65\164\141\142\157\170\x65\x73", $this->qsqiqgmeoowykuue(), $this);
        goto vwgqesqmwyueecok;
        mucwgogisqikigky:
        aiamywyeoksiyawe:
        goto oeqcguogcymoaumy;
        iqgyemmowuemqccs:
        csokgguoueumamee:
        goto mucwgogisqikigky;
        oeqcguogcymoaumy:
        return $saouceauqqiwcwas;
        goto uuoasawseskowkkq;
        ssmwkcqiauygamuc:
        $saouceauqqiwcwas = [];
        goto qesyekwwiuosiyau;
        uuoasawseskowkkq:
    }
    
    public function emgauskcekyqqseg() : ?string
    {
        goto kicgoukiikukyiuc;
        kicgoukiikukyiuc:
        $oiegiwogmwmawkeo = "\x6d\144";
        goto wesowwqqaiomikya;
        kaouwuwuskmkaywg:
        $oiegiwogmwmawkeo = "\x78\x73";
        goto swgikmkgugcugwcy;
        wesowwqqaiomikya:
        if (!$this->mukiwuqwmywsckco()) {
            goto eqeucceequokccoi;
        }
        goto kaouwuwuskmkaywg;
        swgikmkgugcugwcy:
        eqeucceequokccoi:
        goto qiowumwasmcikiwq;
        qiowumwasmcikiwq:
        return ManipulateHTML::cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\143\x6c\x61\x73\163" => "\160\x72\x2d\164\141\x62\55\x69\x63\x6f\x6e\x20\151\x63\157\x6e\x2d{$oiegiwogmwmawkeo}"]);
        goto moaceakyeiggqeia;
        moaceakyeiggqeia:
    }
    
    public function ooiemyusqewcmgkg($quseoooqasguwock = "\x2c")
    {
        goto uagqkwouosysccgi;
        skyauqccisaigqiu:
        esyoswagukeaaocg:
        goto ueoskkoqeyomkyec;
        ykocacegcqwqwmik:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto mcsisoyoaamuisic;
            mcsisoyoaamuisic:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto kikoaeaaaucqagam;
            }
            goto sicoimimywuoysai;
            uaqcoucyikqkammy:
            kikoaeaaaucqagam:
            goto cwoayakioeqceusi;
            ygkmmwmsieikuems:
            $sgksuwkwyimqgaii[] = "\56\143\x6d\142\x32\x2d\151\144\x2d{$aokagokqyuysuksm}\x3a\156\157\x74\x28\x2e\143\x6d\x62\x32\x2d\164\x61\142\55\x69\x67\x6e\157\x72\x65\51";
            goto uaqcoucyikqkammy;
            sicoimimywuoysai:
            $aokagokqyuysuksm = str_replace("\137", "\55", DecoratorSanitize::wkcwykowmmmwioqs($aiowsaccomcoikus->mwikyscisascoeea()));
            goto ygkmmwmsieikuems;
            cwoayakioeqceusi:
            kiskowmsagqskggy:
            goto wwmkoqokkskyuekq;
            wwmkoqokkskyuekq:
        }
        goto skyauqccisaigqiu;
        ouaqykaiyqgwegiu:
        return $sgksuwkwyimqgaii;
        goto aykiqckaguuiyymq;
        ueoskkoqeyomkyec:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x66\x69\x65\154\x64\x5f\163\145\x6c\x65\x63\x74\157\162\163", false), $sgksuwkwyimqgaii, $this);
        goto qssaiieiqmasocwm;
        yumuggiwmooqgome:
        qkmmkqkcawysiaaa:
        goto ouaqykaiyqgwegiu;
        waiiccycqigseygw:
        $sgksuwkwyimqgaii = implode($quseoooqasguwock, $sgksuwkwyimqgaii);
        goto yumuggiwmooqgome;
        amkukyigkwwygaas:
        if (!$quseoooqasguwock) {
            goto qkmmkqkcawysiaaa;
        }
        goto waiiccycqigseygw;
        uagqkwouosysccgi:
        $sgksuwkwyimqgaii = [];
        goto ykocacegcqwqwmik;
        qssaiieiqmasocwm:
        $sgksuwkwyimqgaii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x66\151\145\154\x64\x5f\x73\x65\154\x65\143\x74\x6f\162\163", false), $sgksuwkwyimqgaii, $this);
        goto amkukyigkwwygaas;
        aykiqckaguuiyymq:
    }
    public function render()
    {
        goto vakkcikysowwccma;
        wgywcekyokwoococ:
        okuamysuweaiiwcm:
        goto ekmowyyeqsocgaai;
        vakkcikysowwccma:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto awuwykyqggymwyme;
        awuwykyqggymwyme:
        if (!$ikgwqyuyckaewsow) {
            goto okuamysuweaiiwcm;
        }
        goto aaakiyauimugqske;
        aaakiyauimugqske:
        self::iuaucuookgoqiiio($ikgwqyuyckaewsow);
        goto wgywcekyokwoococ;
        ekmowyyeqsocgaai:
    }
}

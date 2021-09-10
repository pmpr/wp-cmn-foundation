<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\Register\RegisterPost;

class Register extends RegisterPost
{
    
    protected array $views = [];
    
    protected array $schema = [];
    
    protected array $notSchema = [];
    
    protected bool $isGlobal = false;
    
    protected ?string $prefix = null;
    
    protected ?bool $mapMetaCap = null;
    
    public function aeosueemgsygqese() : ?array
    {
        return $this->schema;
    }
    
    public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Field
    {
        return ManipulateArray::get($this->aeosueemgsygqese(), $uusmaiomayssaecw);
    }
    
    public function cquokmemekqqywgi(Field $aiowsaccomcoikus) : self
    {
        $this->schema[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self
    {
        goto gowuaykeqimwouio;
        gowuaykeqimwouio:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto qggoyqomgwciiigc;
            qiusaiuaqusoqcgm:
            $this->cquokmemekqqywgi($aiowsaccomcoikus);
            goto icgomugwscaugkgm;
            gceckcyyeqkgussg:
            cymcgssycuaakwsu:
            goto agyygqioqggmgawy;
            qggoyqomgwciiigc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto owqkeeeamewcmaum;
            }
            goto qiusaiuaqusoqcgm;
            icgomugwscaugkgm:
            owqkeeeamewcmaum:
            goto gceckcyyeqkgussg;
            agyygqioqggmgawy:
        }
        goto qaksccygequmaaku;
        emqmissqcckcecsy:
        return $this;
        goto vimsegsagoiwywys;
        qaksccygequmaaku:
        emkywookycykucmu:
        goto emqmissqcckcecsy;
        vimsegsagoiwywys:
    }
    
    public function iegyckmmougkucya() : array
    {
        return $this->notSchema;
    }
    
    public function qokmgyacmymciaey(?string $uusmaiomayssaecw) : self
    {
        $this->notSchema[] = $uusmaiomayssaecw;
        return $this;
    }
    
    public function mqekkegckiiqoquu(?array $gmawcgiwcmsukeiu = []) : self
    {
        goto mqseqwqcsesmmuag;
        mqseqwqcsesmmuag:
        if (!is_array($gmawcgiwcmsukeiu)) {
            goto ouowckcwkscikcic;
        }
        goto kwmeeuiuqcaokkye;
        qkukcokaqekkoako:
        wucoiwmyomgymyku:
        goto iyomiywaoqgiskcc;
        iyomiywaoqgiskcc:
        ouowckcwkscikcic:
        goto yemqwgwwogceuekc;
        yemqwgwwogceuekc:
        return $this;
        goto bowssiaeccamuiiq;
        kwmeeuiuqcaokkye:
        foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) {
            $this->qokmgyacmymciaey($oaukocmsckciqaok);
            iywceuecmmmqksuu:
        }
        goto qkukcokaqekkoako;
        bowssiaeccamuiiq:
    }
    
    public function okgmqaeuaeymaocm(?string $yuwymayicwwqiske) : self
    {
        $this->prefix = $yuwymayicwwqiske;
        return $this;
    }
    
    public function iemucaoqaisiwise()
    {
        return $this->mapMetaCap;
    }
    
    public function aioqieywgykaaoec() : ?array
    {
        return $this->views;
    }
    
    public function cgswceaawqgeskua($uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->aioqieywgykaaoec(), $uusmaiomayssaecw);
    }
    
    public function ecmiqywsauuoccwo(string $uusmaiomayssaecw, $ywmkwiwkosakssii = []) : self
    {
        goto mgqumoaokymooyou;
        muakuckcsywcyuao:
        awgqqokeqkaaqsko:
        goto oqwiceqiyckwgqkw;
        oqwiceqiyckwgqkw:
        $this->views[$uusmaiomayssaecw] = $ywmkwiwkosakssii;
        goto ukwkqeoyuoageuwg;
        ukwkqeoyuoageuwg:
        ieiwswkoqcqaykik:
        goto saosiwmguyawuouy;
        mgqumoaokymooyou:
        if ($this->cgswceaawqgeskua($uusmaiomayssaecw)) {
            goto ieiwswkoqcqaykik;
        }
        goto gooymcgycisyuowi;
        saosiwmguyawuouy:
        return $this;
        goto wwsasogecmwwikws;
        gooymcgycisyuowi:
        $ggauoeuaesiymgee = ["\164\171\x70\145" => $uusmaiomayssaecw, "\160\x6f\x73\151\x74\x69\157\156" => 0, "\155\145\x6e\x75\x5f\163\154\x75\147" => $this->aakmagwggmkoiiyu(), "\x70\141\147\x65\137\x74\x69\x74\x6c\145" => $this->qeeuwmmksmqiuywg(), "\155\x65\x6e\x75\x5f\164\x69\x74\154\145" => $this->uikgwcuascgeissw("\141\x6c\x6c\137\151\164\x65\155\163"), "\x73\150\157\167\x5f\x69\x6e\137\155\145\156\x75" => $this->egockcwgmeocqeqc()];
        goto ikekioqaccggcwko;
        ikekioqaccggcwko:
        if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
            goto awgqqokeqkaaqsko;
        }
        goto imciyymqukkwemqa;
        imciyymqukkwemqa:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee);
        goto muakuckcsywcyuao;
        wwsasogecmwwikws:
    }
    
    public function qemeyueyiwgsokuc($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\145\x72\x5f\x70\141\147\x65" => ManipulateSetting::omkaowmygoqwsywq(), "\143\x6f\154\x75\155\156\x73" => []]);
        return $this->ecmiqywsauuoccwo("\151\x6e\144\x65\x78", $ywmkwiwkosakssii);
    }
    
    public function wkesqcmiekqoykag($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\162\x65\x6e\x74\137\x73\154\x75\x67" => $this->aakmagwggmkoiiyu(), "\x6d\x65\156\165\137\163\x6c\x75\147" => "\145\x64\x69\x74\137" . $this->aakmagwggmkoiiyu(), "\143\x6f\x6c\x75\x6d\x6e\163" => 2]);
        return $this->ecmiqywsauuoccwo("\x65\144\x69\x74", $ywmkwiwkosakssii);
    }
    
    public function gemkqqguesukeocw($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\162\x65\156\x74\137\x73\x6c\165\x67" => $this->aakmagwggmkoiiyu(), "\x6d\x65\x6e\x75\x5f\x73\154\165\x67" => "\x61\x64\144\x5f" . $this->aakmagwggmkoiiyu(), "\x63\157\x6c\x75\x6d\156\163" => 2]);
        return $this->ecmiqywsauuoccwo("\x61\x64\x64", $ywmkwiwkosakssii);
    }
    
    public function aseucqksocwomwos($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x61\x72\145\x6e\164\137\x73\154\x75\x67" => $this->aakmagwggmkoiiyu(), "\x6d\145\156\165\x5f\x73\x6c\x75\x67" => "\x73\x68\157\x77\x5f" . $this->aakmagwggmkoiiyu(), "\143\x6f\154\x75\155\x6e\163" => []]);
        return $this->ecmiqywsauuoccwo("\163\150\x6f\x77", $ywmkwiwkosakssii);
    }
    
    public function cykmceoageywgkqs() : bool
    {
        return $this->isGlobal;
    }
    
    public function iukgqamaqiamuosa() : self
    {
        $this->isGlobal = true;
        return $this;
    }
    
    public function ogqgmqymcwsqikme() : ?string
    {
        goto qgwcisoeysiwakak;
        wkceacsqeyiimcus:
        if (!$yuwymayicwwqiske) {
            goto ukeyisqesuoscwke;
        }
        goto acycwqqmgeygymkw;
        acycwqqmgeygymkw:
        $yuwymayicwwqiske .= "\137";
        goto qiayggmakgsuwwsm;
        qiayggmakgsuwwsm:
        ukeyisqesuoscwke:
        goto icqkceioeysykgua;
        qgwcisoeysiwakak:
        $yuwymayicwwqiske = $this->prefix;
        goto wkceacsqeyiimcus;
        icqkceioeysykgua:
        return $yuwymayicwwqiske;
        goto kqkgwqkwqeokgagk;
        kqkgwqkwqeokgagk:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return "{$this->ogqgmqymcwsqikme()}{$this->aiqioscoyukqgsgw()}";
    }
    
    public function aiqioscoyukqgsgw() : ?string
    {
        return $this->name;
    }
    
    public function masyeqmaiuqwosei() : bool
    {
        return !empty($this->name);
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto wkakwguccsqwkiam;
        qcysssoeueakqowq:
        $kkeqqkkkqwkocsyu["\163\x63\x68\x65\x6d\x61"] = $aaqqkgyougeiueyq;
        goto mookyeaauceccaga;
        qasccueceswyusgy:
        return $kkeqqkkkqwkocsyu;
        goto yuwiekiseooqagqo;
        mookyeaauceccaga:
        cecsiuuukuegaqgq:
        goto qasccueceswyusgy;
        ayaiiymgyagsoqia:
        if (!(is_array($aaqqkgyougeiueyq) && $aaqqkgyougeiueyq)) {
            goto cecsiuuukuegaqgq;
        }
        goto wksekwiuccskimmu;
        icisiaukqqmgcwci:
        foreach ($aaqqkgyougeiueyq as $uusmaiomayssaecw => $ymaogssqccumcyqa) {
            goto sosqqwiqmeqkwcsm;
            sosqqwiqmeqkwcsm:
            if (!$ymaogssqccumcyqa instanceof Field) {
                goto gaagyegguueymiec;
            }
            goto gwwyoyaqosoggkcu;
            wwwkcwcigkeqiqwo:
            gaagyegguueymiec:
            goto kkmeaociiyukweka;
            kkmeaociiyukweka:
            cewamoymcqkmsswi:
            goto cuoskwammceoauak;
            gwwyoyaqosoggkcu:
            $aaqqkgyougeiueyq[$uusmaiomayssaecw] = $ymaogssqccumcyqa->sacmkccceuywoqsq(true, $ywmkwiwkosakssii);
            goto wwwkcwcigkeqiqwo;
            cuoskwammceoauak:
        }
        goto qaggmqequkmcamma;
        wgksasuisoeqasuk:
        array_multisort($yygmoeguaqyumuui, SORT_ASC, $aaqqkgyougeiueyq);
        goto icisiaukqqmgcwci;
        gmwcaekkucsikwye:
        $aaqqkgyougeiueyq = ManipulateArray::get($kkeqqkkkqwkocsyu, "\x73\143\150\145\x6d\x61", []);
        goto ayaiiymgyagsoqia;
        wksekwiuccskimmu:
        $yygmoeguaqyumuui = array_map("\163\164\x72\154\145\156", array_keys($aaqqkgyougeiueyq));
        goto wgksasuisoeqasuk;
        qaggmqequkmcamma:
        yaqgciyuusquaeea:
        goto qcysssoeueakqowq;
        wkakwguccsqwkiam:
        ManipulateArray::unset($kkeqqkkkqwkocsyu, "\156\157\164\137\x73\143\150\x65\155\141");
        goto gmwcaekkucsikwye;
        yuwiekiseooqagqo:
    }
}

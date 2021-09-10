<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto icgomugwscaugkgm;
        gceckcyyeqkgussg:
        owisiqaowqeemuws:
        goto agyygqioqggmgawy;
        agyygqioqggmgawy:
        return $this;
        goto gowuaykeqimwouio;
        icgomugwscaugkgm:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto emkywookycykucmu;
            cymcgssycuaakwsu:
            $this->cquokmemekqqywgi($aiowsaccomcoikus);
            goto owqkeeeamewcmaum;
            qggoyqomgwciiigc:
            eueowawgacsksksk:
            goto qiusaiuaqusoqcgm;
            emkywookycykucmu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto meqygagoeowmwyek;
            }
            goto cymcgssycuaakwsu;
            owqkeeeamewcmaum:
            meqygagoeowmwyek:
            goto qggoyqomgwciiigc;
            qiusaiuaqusoqcgm:
        }
        goto gceckcyyeqkgussg;
        gowuaykeqimwouio:
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
        goto wucoiwmyomgymyku;
        ouowckcwkscikcic:
        qaksccygequmaaku:
        goto mqseqwqcsesmmuag;
        kwmeeuiuqcaokkye:
        return $this;
        goto qkukcokaqekkoako;
        mqseqwqcsesmmuag:
        vimsegsagoiwywys:
        goto kwmeeuiuqcaokkye;
        wucoiwmyomgymyku:
        if (!is_array($gmawcgiwcmsukeiu)) {
            goto vimsegsagoiwywys;
        }
        goto iywceuecmmmqksuu;
        iywceuecmmmqksuu:
        foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) {
            $this->qokmgyacmymciaey($oaukocmsckciqaok);
            emqmissqcckcecsy:
        }
        goto ouowckcwkscikcic;
        qkukcokaqekkoako:
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
        goto bowssiaeccamuiiq;
        gooymcgycisyuowi:
        iyomiywaoqgiskcc:
        goto ikekioqaccggcwko;
        mgqumoaokymooyou:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee);
        goto gooymcgycisyuowi;
        muakuckcsywcyuao:
        return $this;
        goto oqwiceqiyckwgqkw;
        ikekioqaccggcwko:
        $this->views[$uusmaiomayssaecw] = $ywmkwiwkosakssii;
        goto imciyymqukkwemqa;
        imciyymqukkwemqa:
        yemqwgwwogceuekc:
        goto muakuckcsywcyuao;
        bowssiaeccamuiiq:
        if ($this->cgswceaawqgeskua($uusmaiomayssaecw)) {
            goto yemqwgwwogceuekc;
        }
        goto awgqqokeqkaaqsko;
        ieiwswkoqcqaykik:
        if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
            goto iyomiywaoqgiskcc;
        }
        goto mgqumoaokymooyou;
        awgqqokeqkaaqsko:
        $ggauoeuaesiymgee = ["\x74\171\160\145" => $uusmaiomayssaecw, "\x70\x6f\163\x69\164\151\157\x6e" => 0, "\x6d\x65\x6e\165\x5f\x73\x6c\165\x67" => $this->aakmagwggmkoiiyu(), "\x70\141\147\145\x5f\x74\x69\x74\154\145" => $this->qeeuwmmksmqiuywg(), "\x6d\145\156\165\x5f\164\151\x74\154\x65" => $this->uikgwcuascgeissw("\x61\x6c\x6c\x5f\151\164\145\x6d\x73"), "\x73\x68\x6f\167\x5f\151\156\137\155\145\x6e\165" => $this->egockcwgmeocqeqc()];
        goto ieiwswkoqcqaykik;
        oqwiceqiyckwgqkw:
    }
    
    public function qemeyueyiwgsokuc($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\145\x72\x5f\160\x61\x67\145" => ManipulateSetting::omkaowmygoqwsywq(), "\143\157\x6c\165\155\156\x73" => []]);
        return $this->ecmiqywsauuoccwo("\151\156\144\x65\x78", $ywmkwiwkosakssii);
    }
    
    public function wkesqcmiekqoykag($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x61\x72\145\156\164\x5f\163\154\165\x67" => $this->aakmagwggmkoiiyu(), "\x6d\x65\156\x75\137\163\x6c\x75\147" => "\145\144\151\164\x5f" . $this->aakmagwggmkoiiyu(), "\143\157\154\165\x6d\156\163" => 2]);
        return $this->ecmiqywsauuoccwo("\145\144\151\x74", $ywmkwiwkosakssii);
    }
    
    public function gemkqqguesukeocw($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\x72\145\156\164\x5f\163\154\165\147" => $this->aakmagwggmkoiiyu(), "\155\x65\x6e\165\x5f\163\x6c\165\x67" => "\x61\144\144\137" . $this->aakmagwggmkoiiyu(), "\x63\157\154\165\155\156\163" => 2]);
        return $this->ecmiqywsauuoccwo("\141\x64\x64", $ywmkwiwkosakssii);
    }
    
    public function aseucqksocwomwos($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x61\162\145\156\x74\137\163\154\x75\147" => $this->aakmagwggmkoiiyu(), "\x6d\x65\x6e\x75\137\163\154\165\x67" => "\163\150\157\167\137" . $this->aakmagwggmkoiiyu(), "\x63\157\154\165\x6d\x6e\163" => []]);
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
        goto saosiwmguyawuouy;
        ukeyisqesuoscwke:
        $yuwymayicwwqiske .= "\137";
        goto qgwcisoeysiwakak;
        saosiwmguyawuouy:
        $yuwymayicwwqiske = $this->prefix;
        goto wwsasogecmwwikws;
        wwsasogecmwwikws:
        if (!$yuwymayicwwqiske) {
            goto ukwkqeoyuoageuwg;
        }
        goto ukeyisqesuoscwke;
        qgwcisoeysiwakak:
        ukwkqeoyuoageuwg:
        goto wkceacsqeyiimcus;
        wkceacsqeyiimcus:
        return $yuwymayicwwqiske;
        goto acycwqqmgeygymkw;
        acycwqqmgeygymkw:
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
        goto kkmeaociiyukweka;
        icisiaukqqmgcwci:
        wwwkcwcigkeqiqwo:
        goto qaggmqequkmcamma;
        wgksasuisoeqasuk:
        $kkeqqkkkqwkocsyu["\163\143\x68\x65\155\141"] = $aaqqkgyougeiueyq;
        goto icisiaukqqmgcwci;
        kkmeaociiyukweka:
        ManipulateArray::unset($kkeqqkkkqwkocsyu, "\x6e\x6f\x74\137\163\x63\x68\145\x6d\141");
        goto cuoskwammceoauak;
        qaggmqequkmcamma:
        return $kkeqqkkkqwkocsyu;
        goto qcysssoeueakqowq;
        wkakwguccsqwkiam:
        $yygmoeguaqyumuui = array_map("\163\x74\x72\154\145\x6e", array_keys($aaqqkgyougeiueyq));
        goto gmwcaekkucsikwye;
        wksekwiuccskimmu:
        qiayggmakgsuwwsm:
        goto wgksasuisoeqasuk;
        gmwcaekkucsikwye:
        array_multisort($yygmoeguaqyumuui, SORT_ASC, $aaqqkgyougeiueyq);
        goto ayaiiymgyagsoqia;
        cuoskwammceoauak:
        $aaqqkgyougeiueyq = ManipulateArray::get($kkeqqkkkqwkocsyu, "\x73\x63\x68\x65\x6d\141", []);
        goto cecsiuuukuegaqgq;
        cecsiuuukuegaqgq:
        if (!(is_array($aaqqkgyougeiueyq) && $aaqqkgyougeiueyq)) {
            goto wwwkcwcigkeqiqwo;
        }
        goto wkakwguccsqwkiam;
        ayaiiymgyagsoqia:
        foreach ($aaqqkgyougeiueyq as $uusmaiomayssaecw => $ymaogssqccumcyqa) {
            goto yaqgciyuusquaeea;
            cewamoymcqkmsswi:
            $aaqqkgyougeiueyq[$uusmaiomayssaecw] = $ymaogssqccumcyqa->sacmkccceuywoqsq(true, $ywmkwiwkosakssii);
            goto gaagyegguueymiec;
            sosqqwiqmeqkwcsm:
            icqkceioeysykgua:
            goto gwwyoyaqosoggkcu;
            gaagyegguueymiec:
            kqkgwqkwqeokgagk:
            goto sosqqwiqmeqkwcsm;
            yaqgciyuusquaeea:
            if (!$ymaogssqccumcyqa instanceof Field) {
                goto kqkgwqkwqeokgagk;
            }
            goto cewamoymcqkmsswi;
            gwwyoyaqosoggkcu:
        }
        goto wksekwiuccskimmu;
        qcysssoeueakqowq:
    }
}

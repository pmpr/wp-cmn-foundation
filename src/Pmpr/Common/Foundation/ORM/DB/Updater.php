<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Connection;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Exception;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder as SchemaBuilder;
use Illuminate\Database\Schema\ColumnDefinition;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Pmpr\Common\Foundation\ORM\Register;

class Updater extends Common
{
    use FieldTrait;
    
    protected array $schema = [];
    
    protected ?Database $database = null;
    
    protected ?Register $register = null;
    
    protected ?SchemaBuilder $builder = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\151\156\151\x74", [$this, "\143\165\143\161\x67\x77\155\157\x73\x65\161\x61\153\x67\x6f\145"]);
        parent::wigskegsqequoeks();
    }
    
    public function ysgiswuowuciwqaq() : ?Connection
    {
        goto yaiwoisswowiyski;
        yaiwoisswowiyski:
        $mgcmmwqwguicsews = null;
        goto gecscumwugkogmyq;
        euaikwmkiyegwqae:
        
        $mgcmmwqwguicsews = $this->skckwsgymkimyuwo()->amosaeggmeksgwea()->getConnection();
        goto qgiscekgegqwemgs;
        iiwessuyuisaawek:
        return $mgcmmwqwguicsews;
        goto yqukoacecemgkkay;
        qgiscekgegqwemgs:
        ucwwsgoweeagukyq:
        goto iiwessuyuisaawek;
        gecscumwugkogmyq:
        if (!($this->skckwsgymkimyuwo() && $this->skckwsgymkimyuwo()->amosaeggmeksgwea())) {
            goto ucwwsgoweeagukyq;
        }
        goto euaikwmkiyegwqae;
        yqukoacecemgkkay:
    }
    
    public function cokoiaeeomgssqgy() : ?string
    {
        return $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy($this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), false);
    }
    
    public function gqaysymikgeawkqa() : ?SchemaBuilder
    {
        goto owsgmougoacgokmi;
        qokakquaeuigqcwy:
        soyqsccuokmyuagk:
        goto cymigkmkskowwcei;
        owsgmougoacgokmi:
        if (!(!$this->builder && $this->ysgiswuowuciwqaq())) {
            goto soyqsccuokmyuagk;
        }
        goto iaqyisoeeygqwcym;
        iaqyisoeeygqwcym:
        
        $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder();
        goto qokakquaeuigqcwy;
        cymigkmkskowwcei:
        return $this->builder;
        goto ukecesmaioggmyoc;
        ukecesmaioggmyoc:
    }
    
    public function skckwsgymkimyuwo() : ?Database
    {
        return $this->database;
    }
    
    public function uwyqgmcuomgeccgy(?Database $wyeookkecoymuauy) : self
    {
        $this->database = $wyeookkecoymuauy;
        return $this;
    }
    
    public function oyeskqayoscwciem() : ?Register
    {
        return $this->register;
    }
    
    public function yuaecocyyyqqgsyw(Register $yyksucsgisomecgg) : self
    {
        $this->register = $yyksucsgisomecgg;
        return $this;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq) : ?string
    {
        goto yseoucmemeekwkig;
        igoseisickgqeaog:
        
        $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq);
        goto uogakawoeucgocym;
        uogakawoeucgocym:
        wcyawmskokoagwqq:
        goto cyukykwcccsawesg;
        suggiaqykiwgkkey:
        if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) {
            goto wcyawmskokoagwqq;
        }
        goto igoseisickgqeaog;
        yseoucmemeekwkig:
        $uiewakwqscemywuo = null;
        goto suggiaqykiwgkkey;
        cyukykwcccsawesg:
        return $uiewakwqscemywuo;
        goto soywogweqoqmymqw;
        soywogweqoqmymqw:
    }
    public function cucqgwmoseqakgoe()
    {
        try {
            goto gscsssqcacocusua;
            umeiiiomksmkmoaa:
            
            $iygikoguosecwqgw = $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk);
            goto aokcewiioiiyiqeu;
            aokcewiioiiyiqeu:
            $iygikoguosecwqgw ? $this->update($ikgwqyuyckaewsow, $aasascamegmwqmqk) : $this->create($ikgwqyuyckaewsow, $aasascamegmwqmqk);
            goto iisykceuumgoicmc;
            gscsssqcacocusua:
            $ikgwqyuyckaewsow = $this->oyeskqayoscwciem()->aeosueemgsygqese();
            goto sqwgcyyoaismwkqs;
            sqwgcyyoaismwkqs:
            $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
            goto umeiiiomksmkmoaa;
            iisykceuumgoicmc:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    
    public function update($ikgwqyuyckaewsow, $cgomysauusagiwqu)
    {
        goto sguosuigwgwkikgs;
        uggisigeswwyqmqi:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto caseeeggigkaoswu;
            giemwgcqeogmauao:
            qsmmausewiocaesg:
            goto siawaquisuoeysqa;
            siawaquisuoeysqa:
            csuyaisqcmkkyqiw:
            goto mgqqigauyucewouk;
            cwuqamaiywoeieyw:
            
            $uwqmqcmssaeieiqa[] = ["\x61\x63\x74\151\x6f\x6e" => "\101\x44\x44", "\x63\157\154\x75\x6d\x6e" => $aokagokqyuysuksm];
            goto giemwgcqeogmauao;
            caseeeggigkaoswu:
            if (!($aiowsaccomcoikus instanceof Field && !in_array($aiowsaccomcoikus->mwikyscisascoeea(), $wkkweuacukumqmya))) {
                goto qsmmausewiocaesg;
            }
            goto cwuqamaiywoeieyw;
            mgqqigauyucewouk:
        }
        goto qaykqsyoyscaqsce;
        ioqmgaeuiicymgky:
        $uwomkgseoiegeume = array_keys($ikgwqyuyckaewsow);
        goto ywmcuouqguawueqm;
        sguosuigwgwkikgs:
        $uwqmqcmssaeieiqa = [];
        goto ycyueqmkqyycmaus;
        qywueycgouwamkso:
        oiakiumycyquagqu:
        goto wecgakiimqymkmiy;
        wecgakiimqymkmiy:
        osgaygqiwagaowsq:
        goto uggisigeswwyqmqi;
        vkmscascaoysaqoc:
        foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) {
            goto cgmukwicwgikewei;
            cgmukwicwgikewei:
            if (!($aiowsaccomcoikus instanceof Foreign && $aiowsaccomcoikus->iueigwuckeaswyuu())) {
                goto mkikakaaaqwygquu;
            }
            goto iuasemkmccmcauoc;
            iasuykaqammykyuc:
            ayoyuasegggqqosu:
            goto ykmceyuggseogcgm;
            sscqwggcsoumagsw:
            mkikakaaaqwygquu:
            goto iasuykaqammykyuc;
            iuasemkmccmcauoc:
            ManipulateArray::unset($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo);
            goto sscqwggcsoumagsw;
            ykmceyuggseogcgm:
        }
        goto soskeqqausokwugo;
        mwmwmswiueocaeug:
        aoiwocgacociakoy:
        goto ukugqakgsqqmgege;
        aswikmsouwkequca:
        if (!ManipulateSetting::esoowymaimwcuecq()) {
            goto osgaygqiwagaowsq;
        }
        goto ycgsmkkioyqqawyk;
        qaykqsyoyscaqsce:
        kecaqcyccioyaoaa:
        goto cuqwswgmwuwmgkwe;
        ycgsmkkioyqqawyk:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto omcskkiwcgiysuis;
            omcskkiwcgiysuis:
            if (in_array($qgoqiacsiccwoawi, $uwomkgseoiegeume)) {
                goto sawkcaueekoqcaoq;
            }
            goto wywuimckaigaukkg;
            gaucesmmweqmemkg:
            sycysmgqeucmisiw:
            goto uuooygauoaumkemu;
            ykeuwugswmeukgii:
            sawkcaueekoqcaoq:
            goto gaucesmmweqmemkg;
            wywuimckaigaukkg:
            $uwqmqcmssaeieiqa[] = ["\141\143\x74\151\157\156" => "\x44\x52\x4f\x50", "\143\x6f\x6c\x75\x6d\x6e" => $qgoqiacsiccwoawi];
            goto ykeuwugswmeukgii;
            uuooygauoaumkemu:
        }
        goto qywueycgouwamkso;
        ywmcuouqguawueqm:
        sort($uwomkgseoiegeume);
        goto gkoaywyuyqemyiqw;
        soskeqqausokwugo:
        womgsyqqiwokqyiw:
        goto ioqmgaeuiicymgky;
        ysykemiscamquoce:
        
        $this->gqaysymikgeawkqa()->table($aasascamegmwqmqk, $ekiuyucoiagmscgy);
        goto oaimckymswkqoysq;
        wgkamcmqescgqcyw:
        
        $wkkweuacukumqmya = $this->gqaysymikgeawkqa()->getColumnListing($cgomysauusagiwqu);
        goto amkeeqecmwsmwqma;
        amkeeqecmwsmwqma:
        ManipulateArray::gyciysooayoqiisg($wkkweuacukumqmya, ["\x69\x64"]);
        goto vkmscascaoysaqoc;
        cuqwswgmwuwmgkwe:
        $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $ikgwqyuyckaewsow) {
            foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) {
                goto oksimyciqsugcami;
                oksimyciqsugcami:
                $qgoqiacsiccwoawi = $ocyscigwmouqaiia["\143\x6f\x6c\x75\155\156"];
                goto gquyeowwseuycuoq;
                wkokasiqoeycyukq:
                kckkiuumaegucsqg:
                goto cgqmyikikqgmksgg;
                uecycmeaoqgqcomm:
                switch ($aiamqeawckcsuaou) {
                    case "\101\104\104":
                    case "\x4d\x4f\104\x49\106\x59":
                        goto ewaqcgwowgogwaqi;
                        suwciqqmccskgmkg:
                        $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus, $aiamqeawckcsuaou === "\x4d\117\x44\x49\106\131");
                        goto isqiaewwwiusyaoy;
                        mwqqssomwmsmaaqk:
                        goto kckkiuumaegucsqg;
                        goto aguqiwwiooqqgywi;
                        ewaqcgwowgogwaqi:
                        if (!isset($ikgwqyuyckaewsow[$qgoqiacsiccwoawi])) {
                            goto ymiiquygeeucsgaq;
                        }
                        goto cqeyqcauamscauiq;
                        smqiciaewkmmyswu:
                        if (!$aiowsaccomcoikus instanceof Field) {
                            goto cwuakumskisqyogc;
                        }
                        goto suwciqqmccskgmkg;
                        isqiaewwwiusyaoy:
                        cwuakumskisqyogc:
                        goto asgykkakkoeygiwm;
                        asgykkakkoeygiwm:
                        ymiiquygeeucsgaq:
                        goto mwqqssomwmsmaaqk;
                        cqeyqcauamscauiq:
                        $aiowsaccomcoikus = $ikgwqyuyckaewsow[$qgoqiacsiccwoawi];
                        goto smqiciaewkmmyswu;
                        aguqiwwiooqqgywi:
                    case "\x41\104\104\x20\x49\x4e\x44\x45\130":
                    case "\x44\122\117\120\40\x49\116\x44\105\x58":
                        goto jiiiygsseagcmycw;
                        magaykaioygmiciq:
                        
                        $aasascamegmwqmqk->index($qgoqiacsiccwoawi);
                        goto qiokyyweaoysyeci;
                        osiemgqgiycaymio:
                        if (!($aiamqeawckcsuaou == "\101\104\104\40\111\116\104\105\130")) {
                            goto egoyuuqcqmgkswyg;
                        }
                        goto magaykaioygmiciq;
                        qiokyyweaoysyeci:
                        egoyuuqcqmgkswyg:
                        goto kmkwsqgumkwgemwc;
                        jiiiygsseagcmycw:
                        
                        $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi);
                        goto osiemgqgiycaymio;
                        kmkwsqgumkwgemwc:
                        goto kckkiuumaegucsqg;
                        goto uiakqoyqmcwokgse;
                        uiakqoyqmcwokgse:
                    case "\x44\122\x4f\120":
                        
                        $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi);
                        goto kckkiuumaegucsqg;
                }
                goto siiwoymcomqegmya;
                cgqmyikikqgmksgg:
                qqowaeggkimumgei:
                goto qioeuukaqkcsiiwk;
                gquyeowwseuycuoq:
                $aiamqeawckcsuaou = $ocyscigwmouqaiia["\x61\x63\x74\151\x6f\156"];
                goto uecycmeaoqgqcomm;
                siiwoymcomqegmya:
                yqqueamqmkcwimeq:
                goto wkokasiqoeycyukq;
                qioeuukaqkcsiiwk:
            }
            kwigwuwessmseqik:
        };
        goto twusqqkmqgswisei;
        ycyueqmkqyycmaus:
        if (!$cgomysauusagiwqu) {
            goto aoiwocgacociakoy;
        }
        goto wgkamcmqescgqcyw;
        twusqqkmqgswisei:
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
        goto ysykemiscamquoce;
        gcgsyyiismkwoyck:
        if (!(json_encode($uwomkgseoiegeume) != json_encode($wkkweuacukumqmya))) {
            goto cycwiouaowuswkmk;
        }
        goto aswikmsouwkequca;
        oaimckymswkqoysq:
        cycwiouaowuswkmk:
        goto mwmwmswiueocaeug;
        gkoaywyuyqemyiqw:
        sort($wkkweuacukumqmya);
        goto gcgsyyiismkwoyck;
        ukugqakgsqqmgege:
    }
    
    public function create($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo)
    {
        $this->gqaysymikgeawkqa()->create($ymqmyyeuycgmigyo, function (Blueprint &$aasascamegmwqmqk) use($ikgwqyuyckaewsow) {
            goto qkygewgkycsuawgm;
            omagsowousaeaiou:
            if ($aasascamegmwqmqk->collation) {
                goto awcgiyqmoemqumeg;
            }
            goto kcesecosoiwocymi;
            umosyyqqcuqiscco:
            if ($aasascamegmwqmqk->charset) {
                goto gcgwqksqskumiumq;
            }
            goto qauuogkoosmuggas;
            qauuogkoosmuggas:
            $aasascamegmwqmqk->charset = $this->aceaeommyuooiqge("\x63\x68\141\x72\x73\x65\x74");
            goto wwcougcmsuqogqyc;
            wwcougcmsuqogqyc:
            gcgwqksqskumiumq:
            goto mcguyegywqyasmii;
            qkygewgkycsuawgm:
            
            $aasascamegmwqmqk->bigIncrements(self::ID);
            goto omagsowousaeaiou;
            kcesecosoiwocymi:
            $aasascamegmwqmqk->collation = $this->aceaeommyuooiqge("\143\157\x6c\154\141\x74\x69\157\156");
            goto ckyamgmuoswcaiak;
            qgoaooycwyiyycoa:
            emiugswuagoacakq:
            goto okacwwwygceucqsg;
            ckyamgmuoswcaiak:
            awcgiyqmoemqumeg:
            goto umosyyqqcuqiscco;
            mcguyegywqyasmii:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus);
                cywmgwogisiyymoi:
            }
            goto qgoaooycwyiyycoa;
            okacwwwygceucqsg:
        });
    }
    
    public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Field $aiowsaccomcoikus, $vkgsqsqqqgyaqkog = false) : Blueprint
    {
        goto mgkaweokcicgiegg;
        goaaoqkgsieiyuqm:
        if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) {
            goto qkeyoeyiuqeyicqa;
        }
        goto wqiwmousomaigmgm;
        yeecswicmoyiqssi:
        goto ogaqcigmoyoqcsws;
        goto oqiqyekweaomiwgy;
        iyaawicgsuuoykiq:
        
        $keuuiqywyuiuegkq->unsigned();
        goto ammqgccmiuwcaeuq;
        yuyyeiiewiuogceo:
        agwyiymkkwmywcsw:
        goto ugomsuwwuqsskuqc;
        owssugkggmiascii:
        
        $keuuiqywyuiuegkq->nullable(true);
        goto mqcgsiaawwkqmksi;
        kygqagmyyqysywkm:
        if (!($kokmwkcqkgkewiuw = $aiowsaccomcoikus->yuwwmewqqauckiky())) {
            goto kkoukeoyauekomau;
        }
        goto aqakqumsuimkkkus;
        ayeysmcoemkcsegm:
        
        $keuuiqywyuiuegkq->default($ggauoeuaesiymgee);
        goto cwccggguqewowygo;
        uemgoaamkymwuiko:
        switch ($sqeykgyoooqysmca) {
            case "\112\x53\117\116":
            case "\101\x52\122\x41\131":
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo);
                goto igosooeimygcmois;
            case "\106\117\122\105\111\107\x4e":
                goto eecyiiwsqomoggmq;
                mumeawggkmqsowae:
                if (!$aiowsaccomcoikus->ygswmewosceowmya()) {
                    goto yomuicigicmugscy;
                }
                goto kwcyggeukmgacqsy;
                emuckswusmmeuwma:
                geqwascicmuguaom:
                goto cgyikucmysgcmweu;
                iceuoqgyqsmywqqq:
                if (!($muegsmmicsqsgucm = $aiowsaccomcoikus->ucqugkkuiooayqie())) {
                    goto okaiokeeaqccisaq;
                }
                goto eugisyswkecacase;
                kaocmesokyiikyci:
                qgyeyyagaeyoequw:
                goto yikyagqossasyqcu;
                ygywowuyoygiiqaq:
                yomuicigicmugscy:
                goto imwcikaiagkakiic;
                eugisyswkecacase:
                
                $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm);
                goto emyuskcwqyscewue;
                eecyiiwsqomoggmq:
                if (!$aiowsaccomcoikus instanceof Foreign) {
                    goto ugseakwywkuwgyug;
                }
                goto ckaggwgwsyowuuem;
                cgyikucmysgcmweu:
                if (!($ykqcceqiqygieeks = $aiowsaccomcoikus->syccewqoeggkkgke())) {
                    goto qgyeyyagaeyoequw;
                }
                goto sswmkkcyawawqwwg;
                owkyiywsooiwewgw:
                if (!($koegqoagisewcica = $aiowsaccomcoikus->miosasgcmguoamem())) {
                    goto geqwascicmuguaom;
                }
                goto wqyymgoekecmskmm;
                msieagoikksumcwa:
                swkeqqkqioecmgia:
                goto ygywowuyoygiiqaq;
                ckaggwgwsyowuuem:
                if (!$aiowsaccomcoikus->iueigwuckeaswyuu()) {
                    goto cyssqgqaoaasmogc;
                }
                goto mumeawggkmqsowae;
                kqiakyymyiosoeia:
                yoeqaicysswwgkmm:
                goto iceuoqgyqsmywqqq;
                ecimugmwcawqmyaa:
                $this->create([self::geqyygqiwiqusekc($usymcioagieycusu . self::_ID)->qkwyekmiceaogwci(false), self::geqyygqiwiqusekc($wkwywcemusswkgwk . self::_ID)->qkwyekmiceaogwci(false)], $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\x5f{$wkwywcemusswkgwk}", false));
                goto msieagoikksumcwa;
                eeoiyiuccooeigmk:
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo);
                goto owkyiywsooiwewgw;
                uooisauooikkciom:
                cyssqgqaoaasmogc:
                goto ymkoykouaqiusygo;
                agwsusimqmoesgck:
                
                $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq);
                goto kqiakyymyiosoeia;
                isqokqgukyemmqcg:
                if (!$gsmssqouaueqkeui instanceof Model) {
                    goto swkeqqkqioecmgia;
                }
                goto gemuuqmegqkkgeua;
                yeiawaisoceoysau:
                $wkwywcemusswkgwk = $gsmssqouaueqkeui->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto kyiewmuguyyccsca;
                yiskaoskyyiswkki:
                goto igosooeimygcmois;
                goto akieywkiweasukyw;
                gemuuqmegqkkgeua:
                $usymcioagieycusu = $this->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto yeiawaisoceoysau;
                kyiewmuguyyccsca:
                $yuwymayicwwqiske = $this->oyeskqayoscwciem()->ogqgmqymcwsqikme();
                goto ecimugmwcawqmyaa;
                kwcyggeukmgacqsy:
                $gsmssqouaueqkeui = $aiowsaccomcoikus->uecyuoauykiqqkey()::symcgieuakksimmu();
                goto isqokqgukyemmqcg;
                imwcikaiagkakiic:
                return $aasascamegmwqmqk;
                goto uooisauooikkciom;
                emyuskcwqyscewue:
                okaiokeeaqccisaq:
                goto alomqucgmacieuoa;
                alomqucgmacieuoa:
                ugseakwywkuwgyug:
                goto yiskaoskyyiswkki;
                sswmkkcyawawqwwg:
                
                $keuuiqywyuiuegkq->references($ykqcceqiqygieeks);
                goto kaocmesokyiikyci;
                ymkoykouaqiusygo:
                
                $aasascamegmwqmqk->bigInteger($ymqmyyeuycgmigyo)->unsigned();
                goto eeoiyiuccooeigmk;
                yikyagqossasyqcu:
                if (!($smgycasaqmgcaekq = $aiowsaccomcoikus->giqekaueqsgsmkgo())) {
                    goto yoeqaicysswwgkmm;
                }
                goto agwsusimqmoesgck;
                wqyymgoekecmskmm:
                
                $keuuiqywyuiuegkq->on($koegqoagisewcica);
                goto emuckswusmmeuwma;
                akieywkiweasukyw:
            case "\x53\x45\124":
            case "\x45\x4e\125\115":
                goto oeukmyymqaaakksa;
                ioocowswsiqoyaai:
                $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue);
                goto csuwemcoeyqemwks;
                oeukmyymqaaakksa:
                $qiouiwasaauyaaue = $aiowsaccomcoikus->gkwkqmwweiawigae();
                goto ookeyiumgkqqucia;
                ookeyiumgkqqucia:
                if (!ManipulateArray::wuoqgcwmkicakygs($qiouiwasaauyaaue)) {
                    goto qoqgokiaagioccqg;
                }
                goto ioocowswsiqoyaai;
                wcmsamoqaogoouey:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue);
                goto oyciiqiqoqkgoqec;
                oyciiqiqoqkgoqec:
                goto igosooeimygcmois;
                goto qckqeqqcoawmwwqw;
                csuwemcoeyqemwks:
                qoqgokiaagioccqg:
                goto wcmsamoqaogoouey;
                qckqeqqcoawmwwqw:
            case "\x46\114\x4f\x41\x54":
            case "\x44\117\125\102\x4c\x45":
            case "\104\x45\x43\x49\115\101\114":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aiowsaccomcoikus->siamswkmsqckqgeu());
                goto igosooeimygcmois;
            case "\124\111\x4d\105":
            case "\x44\101\124\105\124\x49\x4d\x45":
            case "\124\x49\x4d\105\x53\x54\x41\x4d\120":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0);
                goto igosooeimygcmois;
            case "\103\110\x41\x52":
            case "\123\x54\122\111\116\107":
            case "\x56\x41\x52\x43\110\x41\122":
                goto wygeysociiyqokyk;
                wygeysociiyqokyk:
                if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) {
                    goto yqywgkymmowyggqa;
                }
                goto qyguqmkmyqeyqaac;
                akieyasekuwqeugc:
                goto igosooeimygcmois;
                goto gqwcuusyiggisuok;
                ccqagygkoaagksyw:
                yqywgkymmowyggqa:
                goto oguigickaoqigcoi;
                igeoagaweewiscas:
                goto oogmmeccymcuwwac;
                goto ccqagygkoaagksyw;
                qmugciukukckmeiu:
                oogmmeccymcuwwac:
                goto akieyasekuwqeugc;
                qyguqmkmyqeyqaac:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto igeoagaweewiscas;
                oguigickaoqigcoi:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq);
                goto qmugciukukckmeiu;
                gqwcuusyiggisuok:
            default:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto igosooeimygcmois;
        }
        goto yqaqgsyaqomgoowq;
        mogweaaaqocouiug:
        $qgciuiagkkguykgs = ManipulateString::snake2camel($sqeykgyoooqysmca);
        goto aywsyyewoswacqqy;
        ammqgccmiuwcaeuq:
        sqkmkmcmocigewua:
        goto skeqeeuuemswqgwu;
        skeqeeuuemswqgwu:
        if (!$aiowsaccomcoikus->kweqqkiwiugikyam()) {
            goto kquqgyygaeiwkeko;
        }
        goto uikqgasygyaeqcac;
        mmgqsmogqmouuskw:
        if (!$aiowsaccomcoikus->oikqausqaykqkmqi()) {
            goto ikoaokuwokyiigsu;
        }
        goto suycyuwkgakgikqw;
        ukcoymqsgmcwokoq:
        $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu();
        goto degewusuggmqqeso;
        wgicusccasmuiosy:
        if (!$vkgsqsqqqgyaqkog) {
            goto egmauuemqqqqsgic;
        }
        goto oaqqykskqqqqsqem;
        qkeogqcekgawsgwe:
        kkoukeoyauekomau:
        goto qseiiaweiykcwacy;
        cyomeoyuoqywoysa:
        igosooeimygcmois:
        goto qmawgkeuyyqwcmok;
        oqiqyekweaomiwgy:
        wgeqwaisweikegck:
        goto owssugkggmiascii;
        uikqgasygyaeqcac:
        
        $keuuiqywyuiuegkq->unique();
        goto gsiegqomuuccaoos;
        aqakqumsuimkkkus:
        
        $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw);
        goto qkeogqcekgawsgwe;
        swqkecoseauacwio:
        if (!($guuwoyaeoeeaauug = $aiowsaccomcoikus->ogmguwgoqkqkkisa())) {
            goto qogyssukouuesqis;
        }
        goto ksiuacaiaiauywae;
        cwccggguqewowygo:
        aouauysuwimgygie:
        goto csoecqymkecmuueu;
        csoecqymkecmuueu:
        if (!$aiowsaccomcoikus->qumigiaaeieaemgy()) {
            goto sqkmkmcmocigewua;
        }
        goto iyaawicgsuuoykiq;
        mqcgsiaawwkqmksi:
        ogaqcigmoyoqcsws:
        goto wgicusccasmuiosy;
        degewusuggmqqeso:
        $ykiwomimkkuiigoq = $aiowsaccomcoikus->qamkswcgsoeggmau();
        goto mogweaaaqocouiug;
        yoeoiuuuqakicgam:
        egmauuemqqqqsgic:
        goto yuyyeiiewiuogceo;
        yqaqgsyaqomgoowq:
        gcykaeaisuqiqyqi:
        goto cyomeoyuoqywoysa;
        oaqqykskqqqqsqem:
        
        $keuuiqywyuiuegkq->change();
        goto yoeoiuuuqakicgam;
        suycyuwkgakgikqw:
        
        $keuuiqywyuiuegkq->autoIncrement();
        goto eseyciuwmwyauuio;
        qseiiaweiykcwacy:
        if ($aiowsaccomcoikus->yseywyqacmugimme()) {
            goto wgeqwaisweikegck;
        }
        goto kewsuqsoqkyikkis;
        wqiwmousomaigmgm:
        $keuuiqywyuiuegkq = null;
        goto uemgoaamkymwuiko;
        mqcoyamukmaoqwmw:
        qogyssukouuesqis:
        goto kygqagmyyqysywkm;
        mgkaweokcicgiegg:
        $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
        goto ukcoymqsgmcwokoq;
        ksiuacaiaiauywae:
        
        $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug);
        goto mqcoyamukmaoqwmw;
        kkyumyewcymikswk:
        if (!(($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae()) !== false)) {
            goto aouauysuwimgygie;
        }
        goto ayeysmcoemkcsegm;
        kewsuqsoqkyikkis:
        
        $keuuiqywyuiuegkq->nullable(false);
        goto yeecswicmoyiqssi;
        eseyciuwmwyauuio:
        ikoaokuwokyiigsu:
        goto kkyumyewcymikswk;
        aywsyyewoswacqqy:
        $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca);
        goto goaaoqkgsieiyuqm;
        kcieymewycqwegis:
        kquqgyygaeiwkeko:
        goto swqkecoseauacwio;
        skeyqsaqsiwgiyog:
        return $aasascamegmwqmqk;
        goto awwgggeiaceyecco;
        ugomsuwwuqsskuqc:
        qkeyoeyiuqeyicqa:
        goto skeyqsaqsiwgiyog;
        gsiegqomuuccaoos:
        
        $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo);
        goto kcieymewycqwegis;
        qmawgkeuyyqwcmok:
        if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) {
            goto agwyiymkkwmywcsw;
        }
        goto mmgqsmogqmouuskw;
        awwgggeiaceyecco:
    }
}

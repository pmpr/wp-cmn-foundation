<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->qcsmikeggeemccuu("\141\x64\x6d\x69\x6e\x5f\151\156\151\164", [$this, "\143\x75\x63\x71\x67\167\155\x6f\x73\x65\161\x61\x6b\147\x6f\x65"]);
        parent::wigskegsqequoeks();
    }
    
    public function ysgiswuowuciwqaq() : ?Connection
    {
        goto uecycmeaoqgqcomm;
        qioeuukaqkcsiiwk:
        return $mgcmmwqwguicsews;
        goto cycwiouaowuswkmk;
        wkokasiqoeycyukq:
        
        $mgcmmwqwguicsews = $this->skckwsgymkimyuwo()->amosaeggmeksgwea()->getConnection();
        goto cgqmyikikqgmksgg;
        uecycmeaoqgqcomm:
        $mgcmmwqwguicsews = null;
        goto siiwoymcomqegmya;
        cgqmyikikqgmksgg:
        gquyeowwseuycuoq:
        goto qioeuukaqkcsiiwk;
        siiwoymcomqegmya:
        if (!($this->skckwsgymkimyuwo() && $this->skckwsgymkimyuwo()->amosaeggmeksgwea())) {
            goto gquyeowwseuycuoq;
        }
        goto wkokasiqoeycyukq;
        cycwiouaowuswkmk:
    }
    
    public function cokoiaeeomgssqgy() : ?string
    {
        return $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy($this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), false);
    }
    
    public function gqaysymikgeawkqa() : ?SchemaBuilder
    {
        goto sguosuigwgwkikgs;
        sguosuigwgwkikgs:
        if (!(!$this->builder && $this->ysgiswuowuciwqaq())) {
            goto aoiwocgacociakoy;
        }
        goto ycyueqmkqyycmaus;
        amkeeqecmwsmwqma:
        return $this->builder;
        goto vkmscascaoysaqoc;
        ycyueqmkqyycmaus:
        
        $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder();
        goto wgkamcmqescgqcyw;
        wgkamcmqescgqcyw:
        aoiwocgacociakoy:
        goto amkeeqecmwsmwqma;
        vkmscascaoysaqoc:
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
        goto ioqmgaeuiicymgky;
        ywmcuouqguawueqm:
        if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) {
            goto soskeqqausokwugo;
        }
        goto gkoaywyuyqemyiqw;
        gkoaywyuyqemyiqw:
        
        $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq);
        goto gcgsyyiismkwoyck;
        aswikmsouwkequca:
        return $uiewakwqscemywuo;
        goto ycgsmkkioyqqawyk;
        gcgsyyiismkwoyck:
        soskeqqausokwugo:
        goto aswikmsouwkequca;
        ioqmgaeuiicymgky:
        $uiewakwqscemywuo = null;
        goto ywmcuouqguawueqm;
        ycgsmkkioyqqawyk:
    }
    public function cucqgwmoseqakgoe()
    {
        try {
            goto qywueycgouwamkso;
            qaykqsyoyscaqsce:
            $iygikoguosecwqgw ? $this->update($ikgwqyuyckaewsow, $aasascamegmwqmqk) : $this->create($ikgwqyuyckaewsow, $aasascamegmwqmqk);
            goto cuqwswgmwuwmgkwe;
            wecgakiimqymkmiy:
            $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
            goto uggisigeswwyqmqi;
            uggisigeswwyqmqi:
            
            $iygikoguosecwqgw = $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk);
            goto qaykqsyoyscaqsce;
            qywueycgouwamkso:
            $ikgwqyuyckaewsow = $this->oyeskqayoscwciem()->aeosueemgsygqese();
            goto wecgakiimqymkmiy;
            cuqwswgmwuwmgkwe:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    
    public function update($ikgwqyuyckaewsow, $cgomysauusagiwqu)
    {
        goto emyuskcwqyscewue;
        wcmsamoqaogoouey:
        if (!(json_encode($uwomkgseoiegeume) != json_encode($wkkweuacukumqmya))) {
            goto iceuoqgyqsmywqqq;
        }
        goto oyciiqiqoqkgoqec;
        oyciiqiqoqkgoqec:
        if (!ManipulateSetting::esoowymaimwcuecq()) {
            goto mcguyegywqyasmii;
        }
        goto qckqeqqcoawmwwqw;
        qoqgokiaagioccqg:
        foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) {
            goto mwmwmswiueocaeug;
            mwmwmswiueocaeug:
            if (!($aiowsaccomcoikus instanceof Foreign && $aiowsaccomcoikus->iueigwuckeaswyuu())) {
                goto oaimckymswkqoysq;
            }
            goto ukugqakgsqqmgege;
            ukugqakgsqqmgege:
            ManipulateArray::unset($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo);
            goto awcgiyqmoemqumeg;
            awcgiyqmoemqumeg:
            oaimckymswkqoysq:
            goto gcgwqksqskumiumq;
            gcgwqksqskumiumq:
            ysykemiscamquoce:
            goto emiugswuagoacakq;
            emiugswuagoacakq:
        }
        goto oeukmyymqaaakksa;
        qckqeqqcoawmwwqw:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto kcesecosoiwocymi;
            ckyamgmuoswcaiak:
            $uwqmqcmssaeieiqa[] = ["\141\143\x74\151\x6f\x6e" => "\104\x52\x4f\120", "\x63\157\x6c\x75\155\x6e" => $qgoqiacsiccwoawi];
            goto umosyyqqcuqiscco;
            kcesecosoiwocymi:
            if (in_array($qgoqiacsiccwoawi, $uwomkgseoiegeume)) {
                goto omagsowousaeaiou;
            }
            goto ckyamgmuoswcaiak;
            qauuogkoosmuggas:
            qkygewgkycsuawgm:
            goto wwcougcmsuqogqyc;
            umosyyqqcuqiscco:
            omagsowousaeaiou:
            goto qauuogkoosmuggas;
            wwcougcmsuqogqyc:
        }
        goto yqywgkymmowyggqa;
        ioocowswsiqoyaai:
        sort($uwomkgseoiegeume);
        goto csuwemcoeyqemwks;
        oeukmyymqaaakksa:
        twusqqkmqgswisei:
        goto ookeyiumgkqqucia;
        yqywgkymmowyggqa:
        cywmgwogisiyymoi:
        goto oogmmeccymcuwwac;
        csuwemcoeyqemwks:
        sort($wkkweuacukumqmya);
        goto wcmsamoqaogoouey;
        akieyasekuwqeugc:
        eugisyswkecacase:
        goto gqwcuusyiggisuok;
        alomqucgmacieuoa:
        if (!$cgomysauusagiwqu) {
            goto eugisyswkecacase;
        }
        goto yiskaoskyyiswkki;
        oogmmeccymcuwwac:
        mcguyegywqyasmii:
        goto wygeysociiyqokyk;
        yiskaoskyyiswkki:
        
        $wkkweuacukumqmya = $this->gqaysymikgeawkqa()->getColumnListing($cgomysauusagiwqu);
        goto akieywkiweasukyw;
        ookeyiumgkqqucia:
        $uwomkgseoiegeume = array_keys($ikgwqyuyckaewsow);
        goto ioocowswsiqoyaai;
        qyguqmkmyqeyqaac:
        qgoaooycwyiyycoa:
        goto igeoagaweewiscas;
        oguigickaoqigcoi:
        
        $this->gqaysymikgeawkqa()->table($aasascamegmwqmqk, $ekiuyucoiagmscgy);
        goto qmugciukukckmeiu;
        emyuskcwqyscewue:
        $uwqmqcmssaeieiqa = [];
        goto alomqucgmacieuoa;
        wygeysociiyqokyk:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto gcykaeaisuqiqyqi;
            cyssqgqaoaasmogc:
            okacwwwygceucqsg:
            goto geqwascicmuguaom;
            swkeqqkqioecmgia:
            
            $uwqmqcmssaeieiqa[] = ["\x61\x63\164\151\x6f\156" => "\101\x44\x44", "\143\157\x6c\165\x6d\156" => $aokagokqyuysuksm];
            goto yomuicigicmugscy;
            yomuicigicmugscy:
            igosooeimygcmois:
            goto cyssqgqaoaasmogc;
            gcykaeaisuqiqyqi:
            if (!($aiowsaccomcoikus instanceof Field && !in_array($aiowsaccomcoikus->mwikyscisascoeea(), $wkkweuacukumqmya))) {
                goto igosooeimygcmois;
            }
            goto swkeqqkqioecmgia;
            geqwascicmuguaom:
        }
        goto qyguqmkmyqeyqaac;
        ccqagygkoaagksyw:
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
        goto oguigickaoqigcoi;
        igeoagaweewiscas:
        $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $ikgwqyuyckaewsow) {
            foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) {
                goto emuckswusmmeuwma;
                agwsusimqmoesgck:
                yoeqaicysswwgkmm:
                goto kqiakyymyiosoeia;
                cgyikucmysgcmweu:
                $aiamqeawckcsuaou = $ocyscigwmouqaiia["\x61\x63\x74\151\x6f\x6e"];
                goto sswmkkcyawawqwwg;
                sswmkkcyawawqwwg:
                switch ($aiamqeawckcsuaou) {
                    case "\x41\104\x44":
                    case "\x4d\x4f\104\x49\x46\131":
                        goto mumeawggkmqsowae;
                        kwcyggeukmgacqsy:
                        $aiowsaccomcoikus = $ikgwqyuyckaewsow[$qgoqiacsiccwoawi];
                        goto isqokqgukyemmqcg;
                        ecimugmwcawqmyaa:
                        goto okaiokeeaqccisaq;
                        goto msieagoikksumcwa;
                        mumeawggkmqsowae:
                        if (!isset($ikgwqyuyckaewsow[$qgoqiacsiccwoawi])) {
                            goto ckaggwgwsyowuuem;
                        }
                        goto kwcyggeukmgacqsy;
                        yeiawaisoceoysau:
                        eecyiiwsqomoggmq:
                        goto kyiewmuguyyccsca;
                        gemuuqmegqkkgeua:
                        $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus, $aiamqeawckcsuaou === "\x4d\x4f\104\x49\x46\x59");
                        goto yeiawaisoceoysau;
                        kyiewmuguyyccsca:
                        ckaggwgwsyowuuem:
                        goto ecimugmwcawqmyaa;
                        isqokqgukyemmqcg:
                        if (!$aiowsaccomcoikus instanceof Field) {
                            goto eecyiiwsqomoggmq;
                        }
                        goto gemuuqmegqkkgeua;
                        msieagoikksumcwa:
                    case "\101\104\x44\40\111\116\104\105\130":
                    case "\x44\x52\117\120\40\111\116\104\x45\130":
                        goto imwcikaiagkakiic;
                        owkyiywsooiwewgw:
                        goto okaiokeeaqccisaq;
                        goto wqyymgoekecmskmm;
                        uooisauooikkciom:
                        if (!($aiamqeawckcsuaou == "\101\x44\x44\40\111\x4e\x44\x45\130")) {
                            goto ygywowuyoygiiqaq;
                        }
                        goto ymkoykouaqiusygo;
                        eeoiyiuccooeigmk:
                        ygywowuyoygiiqaq:
                        goto owkyiywsooiwewgw;
                        ymkoykouaqiusygo:
                        
                        $aasascamegmwqmqk->index($qgoqiacsiccwoawi);
                        goto eeoiyiuccooeigmk;
                        imwcikaiagkakiic:
                        
                        $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi);
                        goto uooisauooikkciom;
                        wqyymgoekecmskmm:
                    case "\x44\x52\x4f\120":
                        
                        $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi);
                        goto okaiokeeaqccisaq;
                }
                goto kaocmesokyiikyci;
                kaocmesokyiikyci:
                ugseakwywkuwgyug:
                goto yikyagqossasyqcu;
                yikyagqossasyqcu:
                okaiokeeaqccisaq:
                goto agwsusimqmoesgck;
                emuckswusmmeuwma:
                $qgoqiacsiccwoawi = $ocyscigwmouqaiia["\143\x6f\154\x75\x6d\x6e"];
                goto cgyikucmysgcmweu;
                kqiakyymyiosoeia:
            }
            qgyeyyagaeyoequw:
        };
        goto ccqagygkoaagksyw;
        akieywkiweasukyw:
        ManipulateArray::gyciysooayoqiisg($wkkweuacukumqmya, ["\x69\144"]);
        goto qoqgokiaagioccqg;
        qmugciukukckmeiu:
        iceuoqgyqsmywqqq:
        goto akieyasekuwqeugc;
        gqwcuusyiggisuok:
    }
    
    public function create($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo)
    {
        $this->gqaysymikgeawkqa()->create($ymqmyyeuycgmigyo, function (Blueprint &$aasascamegmwqmqk) use($ikgwqyuyckaewsow) {
            goto qogyssukouuesqis;
            qkeyoeyiuqeyicqa:
            aouauysuwimgygie:
            goto mgkaweokcicgiegg;
            ogaqcigmoyoqcsws:
            ikoaokuwokyiigsu:
            goto egmauuemqqqqsgic;
            wgeqwaisweikegck:
            $aasascamegmwqmqk->collation = $this->aceaeommyuooiqge("\143\x6f\x6c\x6c\141\x74\151\x6f\x6e");
            goto ogaqcigmoyoqcsws;
            egmauuemqqqqsgic:
            if ($aasascamegmwqmqk->charset) {
                goto aouauysuwimgygie;
            }
            goto agwyiymkkwmywcsw;
            qogyssukouuesqis:
            
            $aasascamegmwqmqk->bigIncrements(self::ID);
            goto kkoukeoyauekomau;
            agwyiymkkwmywcsw:
            $aasascamegmwqmqk->charset = $this->aceaeommyuooiqge("\x63\150\141\162\163\145\x74");
            goto qkeyoeyiuqeyicqa;
            ukcoymqsgmcwokoq:
            sqkmkmcmocigewua:
            goto degewusuggmqqeso;
            kkoukeoyauekomau:
            if ($aasascamegmwqmqk->collation) {
                goto ikoaokuwokyiigsu;
            }
            goto wgeqwaisweikegck;
            mgkaweokcicgiegg:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus);
                kquqgyygaeiwkeko:
            }
            goto ukcoymqsgmcwokoq;
            degewusuggmqqeso:
        });
    }
    
    public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Field $aiowsaccomcoikus, $vkgsqsqqqgyaqkog = false) : Blueprint
    {
        goto quowmcomwmsmugqe;
        gammkicacakosigu:
        
        $keuuiqywyuiuegkq->unique();
        goto qkusmocauegwwqwy;
        yaieemqskkgmcqou:
        
        $keuuiqywyuiuegkq->autoIncrement();
        goto cmqmcaowowcccgka;
        cmqmcaowowcccgka:
        qcgyuksgqucyquwi:
        goto imcseqowgomyokwi;
        cseucimaukwaskwk:
        
        $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw);
        goto kucymsiiugmiooyo;
        auakugikcequsiia:
        if ($aiowsaccomcoikus->yseywyqacmugimme()) {
            goto qyeomiwmooookysu;
        }
        goto igsweakykqomoqgi;
        aimwoikqsqkyicsu:
        if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) {
            goto goemggymkikoquwi;
        }
        goto qiggceewmyagkisq;
        quumuskukkcuuciu:
        if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) {
            goto eosiakwgiemwwqwy;
        }
        goto iiwuqoagoqgmwwiq;
        saoickmcegceesyw:
        $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca);
        goto quumuskukkcuuciu;
        qwsmwwskogygagea:
        $qgciuiagkkguykgs = ManipulateString::snake2camel($sqeykgyoooqysmca);
        goto saoickmcegceesyw;
        kimwcesmkuqqyamq:
        oeoyiakocyacqsys:
        goto cegokyqcmuuwyoey;
        igsweakykqomoqgi:
        
        $keuuiqywyuiuegkq->nullable(false);
        goto kqkcowkuqsuemmmc;
        qkusmocauegwwqwy:
        
        $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo);
        goto qwwmqqkoeuywmqys;
        kqkcowkuqsuemmmc:
        goto oeoyiakocyacqsys;
        goto caeiwemymyceqqei;
        oeyoiicmckkgoyqg:
        uckqwisqmyeuegei:
        goto owkgksuymewqqiwu;
        aqyweyyyygygswmy:
        
        $keuuiqywyuiuegkq->unsigned();
        goto awwyuikkmaaomkqc;
        qcgekwgksmkoamik:
        osamucgweicwoiqy:
        goto ekykiumoyeyamsew;
        cegokyqcmuuwyoey:
        if (!$vkgsqsqqqgyaqkog) {
            goto osamucgweicwoiqy;
        }
        goto yayicayasmkmsemm;
        iiwuqoagoqgmwwiq:
        $keuuiqywyuiuegkq = null;
        goto esewmcieucesaqcw;
        semwcosqeukmgoey:
        
        $keuuiqywyuiuegkq->default($ggauoeuaesiymgee);
        goto oeyoiicmckkgoyqg;
        ciksycqiaaueqaaq:
        
        $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug);
        goto ecoygmauwycmweyq;
        yayicayasmkmsemm:
        
        $keuuiqywyuiuegkq->change();
        goto qcgekwgksmkoamik;
        ecoygmauwycmweyq:
        gucokiskmccmsaac:
        goto meueuqeagkwkoiuk;
        meueuqeagkwkoiuk:
        if (!($kokmwkcqkgkewiuw = $aiowsaccomcoikus->yuwwmewqqauckiky())) {
            goto uokwiwsewewgcocy;
        }
        goto cseucimaukwaskwk;
        ekykiumoyeyamsew:
        goemggymkikoquwi:
        goto caccouegecmukqci;
        esewmcieucesaqcw:
        switch ($sqeykgyoooqysmca) {
            case "\112\x53\x4f\116":
            case "\101\122\x52\101\131":
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
            case "\106\117\122\105\x49\x47\116":
                goto eseyciuwmwyauuio;
                qkeogqcekgawsgwe:
                
                $keuuiqywyuiuegkq->on($koegqoagisewcica);
                goto qseiiaweiykcwacy;
                kewsuqsoqkyikkis:
                if (!($ykqcceqiqygieeks = $aiowsaccomcoikus->syccewqoeggkkgke())) {
                    goto cyomeoyuoqywoysa;
                }
                goto yeecswicmoyiqssi;
                mqcoyamukmaoqwmw:
                
                $aasascamegmwqmqk->bigInteger($ymqmyyeuycgmigyo)->unsigned();
                goto kygqagmyyqysywkm;
                qseiiaweiykcwacy:
                yqaqgsyaqomgoowq:
                goto kewsuqsoqkyikkis;
                swqkecoseauacwio:
                return $aasascamegmwqmqk;
                goto ksiuacaiaiauywae;
                skeyqsaqsiwgiyog:
                goto mogweaaaqocouiug;
                goto awwgggeiaceyecco;
                wgicusccasmuiosy:
                qmawgkeuyyqwcmok:
                goto oaqqykskqqqqsqem;
                iyaawicgsuuoykiq:
                $usymcioagieycusu = $this->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto ammqgccmiuwcaeuq;
                ammqgccmiuwcaeuq:
                $wkwywcemusswkgwk = $gsmssqouaueqkeui->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto skeqeeuuemswqgwu;
                ksiuacaiaiauywae:
                uemgoaamkymwuiko:
                goto mqcoyamukmaoqwmw;
                yoeoiuuuqakicgam:
                
                $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm);
                goto yuyyeiiewiuogceo;
                eseyciuwmwyauuio:
                if (!$aiowsaccomcoikus instanceof Foreign) {
                    goto suycyuwkgakgikqw;
                }
                goto kkyumyewcymikswk;
                oaqqykskqqqqsqem:
                if (!($muegsmmicsqsgucm = $aiowsaccomcoikus->ucqugkkuiooayqie())) {
                    goto mmgqsmogqmouuskw;
                }
                goto yoeoiuuuqakicgam;
                cwccggguqewowygo:
                $gsmssqouaueqkeui = $aiowsaccomcoikus->uecyuoauykiqqkey()::symcgieuakksimmu();
                goto csoecqymkecmuueu;
                yeecswicmoyiqssi:
                
                $keuuiqywyuiuegkq->references($ykqcceqiqygieeks);
                goto oqiqyekweaomiwgy;
                ugomsuwwuqsskuqc:
                suycyuwkgakgikqw:
                goto skeyqsaqsiwgiyog;
                oqiqyekweaomiwgy:
                cyomeoyuoqywoysa:
                goto owssugkggmiascii;
                yuyyeiiewiuogceo:
                mmgqsmogqmouuskw:
                goto ugomsuwwuqsskuqc;
                uikqgasygyaeqcac:
                $this->create([self::geqyygqiwiqusekc($usymcioagieycusu . self::_ID)->qkwyekmiceaogwci(false), self::geqyygqiwiqusekc($wkwywcemusswkgwk . self::_ID)->qkwyekmiceaogwci(false)], $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\137{$wkwywcemusswkgwk}", false));
                goto gsiegqomuuccaoos;
                gsiegqomuuccaoos:
                goaaoqkgsieiyuqm:
                goto kcieymewycqwegis;
                kkyumyewcymikswk:
                if (!$aiowsaccomcoikus->iueigwuckeaswyuu()) {
                    goto uemgoaamkymwuiko;
                }
                goto ayeysmcoemkcsegm;
                aqakqumsuimkkkus:
                if (!($koegqoagisewcica = $aiowsaccomcoikus->miosasgcmguoamem())) {
                    goto yqaqgsyaqomgoowq;
                }
                goto qkeogqcekgawsgwe;
                kcieymewycqwegis:
                wqiwmousomaigmgm:
                goto swqkecoseauacwio;
                skeqeeuuemswqgwu:
                $yuwymayicwwqiske = $this->oyeskqayoscwciem()->ogqgmqymcwsqikme();
                goto uikqgasygyaeqcac;
                mqcgsiaawwkqmksi:
                
                $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq);
                goto wgicusccasmuiosy;
                ayeysmcoemkcsegm:
                if (!$aiowsaccomcoikus->ygswmewosceowmya()) {
                    goto wqiwmousomaigmgm;
                }
                goto cwccggguqewowygo;
                kygqagmyyqysywkm:
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo);
                goto aqakqumsuimkkkus;
                csoecqymkecmuueu:
                if (!$gsmssqouaueqkeui instanceof Model) {
                    goto goaaoqkgsieiyuqm;
                }
                goto iyaawicgsuuoykiq;
                owssugkggmiascii:
                if (!($smgycasaqmgcaekq = $aiowsaccomcoikus->giqekaueqsgsmkgo())) {
                    goto qmawgkeuyyqwcmok;
                }
                goto mqcgsiaawwkqmksi;
                awwgggeiaceyecco:
            case "\x53\105\124":
            case "\x45\116\x55\115":
                goto oemkgkauqekgkumy;
                ygegasgiwgmswaog:
                ayeqwsqywosymiwu:
                goto qiaaqckmooiayuae;
                qiaaqckmooiayuae:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue);
                goto mswucuuigmosimuo;
                mmmgeukkswewyuoa:
                $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue);
                goto ygegasgiwgmswaog;
                oemkgkauqekgkumy:
                $qiouiwasaauyaaue = $aiowsaccomcoikus->gkwkqmwweiawigae();
                goto iuoayeiykmokiiys;
                iuoayeiykmokiiys:
                if (!ManipulateArray::wuoqgcwmkicakygs($qiouiwasaauyaaue)) {
                    goto ayeqwsqywosymiwu;
                }
                goto mmmgeukkswewyuoa;
                mswucuuigmosimuo:
                goto mogweaaaqocouiug;
                goto ayuwkwsuioumscca;
                ayuwkwsuioumscca:
            case "\x46\114\x4f\x41\x54":
            case "\104\x4f\x55\x42\x4c\105":
            case "\104\x45\103\111\x4d\x41\x4c":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aiowsaccomcoikus->siamswkmsqckqgeu());
                goto mogweaaaqocouiug;
            case "\124\111\x4d\x45":
            case "\x44\x41\x54\105\x54\111\115\x45":
            case "\124\x49\x4d\x45\x53\124\x41\x4d\120":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0);
                goto mogweaaaqocouiug;
            case "\x43\110\x41\x52":
            case "\123\x54\122\111\x4e\x47":
            case "\126\101\122\103\x48\101\x52":
                goto agicooogqyeyoyqi;
                cmwaakkwwqameeec:
                gswoagoguesomwyc:
                goto ykgkuccgawoyquga;
                osoukeawsoyqmwgo:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto wesooeakucoqmisw;
                wesooeakucoqmisw:
                goto ecomecoqggyssmsk;
                goto cmwaakkwwqameeec;
                ykgkuccgawoyquga:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq);
                goto cecoqgqcckqoouwy;
                agicooogqyeyoyqi:
                if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) {
                    goto gswoagoguesomwyc;
                }
                goto osoukeawsoyqmwgo;
                wcuqgoiokweuwycq:
                goto mogweaaaqocouiug;
                goto caskecmuwociuumq;
                cecoqgqcckqoouwy:
                ecomecoqggyssmsk:
                goto wcuqgoiokweuwycq;
                caskecmuwociuumq:
            default:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto mogweaaaqocouiug;
        }
        goto sgqackwokosksyua;
        imcseqowgomyokwi:
        if (!(($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae()) !== false)) {
            goto uckqwisqmyeuegei;
        }
        goto semwcosqeukmgoey;
        ycqcgaauyqmkwskc:
        $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu();
        goto gkaayykiiqqogeiw;
        awwyuikkmaaomkqc:
        gesaagokeamiwuws:
        goto imquocywcscomayo;
        qwwmqqkoeuywmqys:
        ywyceqcyssuuyauc:
        goto soqakmcacqiqamku;
        kucymsiiugmiooyo:
        uokwiwsewewgcocy:
        goto auakugikcequsiia;
        quowmcomwmsmugqe:
        $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
        goto ycqcgaauyqmkwskc;
        sgqackwokosksyua:
        aywsyyewoswacqqy:
        goto kiwacoqesuqmyiiu;
        caccouegecmukqci:
        eosiakwgiemwwqwy:
        goto osouwwksqimikqqo;
        caeiwemymyceqqei:
        qyeomiwmooookysu:
        goto ogwmeoaswuqwamim;
        gkaayykiiqqogeiw:
        $ykiwomimkkuiigoq = $aiowsaccomcoikus->qamkswcgsoeggmau();
        goto qwsmwwskogygagea;
        owkgksuymewqqiwu:
        if (!$aiowsaccomcoikus->qumigiaaeieaemgy()) {
            goto gesaagokeamiwuws;
        }
        goto aqyweyyyygygswmy;
        kiwacoqesuqmyiiu:
        mogweaaaqocouiug:
        goto aimwoikqsqkyicsu;
        imquocywcscomayo:
        if (!$aiowsaccomcoikus->kweqqkiwiugikyam()) {
            goto ywyceqcyssuuyauc;
        }
        goto gammkicacakosigu;
        osouwwksqimikqqo:
        return $aasascamegmwqmqk;
        goto icsukicuomwmqiyc;
        soqakmcacqiqamku:
        if (!($guuwoyaeoeeaauug = $aiowsaccomcoikus->ogmguwgoqkqkkisa())) {
            goto gucokiskmccmsaac;
        }
        goto ciksycqiaaueqaaq;
        ogwmeoaswuqwamim:
        
        $keuuiqywyuiuegkq->nullable(true);
        goto kimwcesmkuqqyamq;
        qiggceewmyagkisq:
        if (!$aiowsaccomcoikus->oikqausqaykqkmqi()) {
            goto qcgyuksgqucyquwi;
        }
        goto yaieemqskkgmcqou;
        icsukicuomwmqiyc:
    }
}

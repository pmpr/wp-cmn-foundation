<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Asset;

use Exception;
use Pmpr\Common\Foundation\Data\Component;
use Pmpr\Common\Foundation\Data\Source;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\DOMCrawler;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy;

class Manager extends Common
{
    
    protected ?Component $component = null;
    
    protected ?UrlPackage $package = null;
    
    protected bool $attributeAdded = false;
    
    protected array $localize = [self::ADMIN => [], self::FRONT => [], self::LOGIN => []];
    
    protected array $sources = [self::ADMIN => [], self::FRONT => [], self::LOGIN => []];
    
    public function __construct(Component $wksoawcgagcgoask)
    {
        $this->component = $wksoawcgagcgoask;
        $this->ygegioggqgwwqooe();
        parent::__construct();
    }
    
    public function ieqamkssqsaukwqm() : bool
    {
        return $this->attributeAdded;
    }
    public function ygegioggqgwwqooe()
    {
        try {
            $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
            $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
            if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) {
                $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
                if ($wksoawcgagcgoask) {
                    $eeamcawaiqocomwy .= "/{$wksoawcgagcgoask}";
                    $mkomwsiykqigmqca .= "/{$wksoawcgagcgoask}";
                }
                $this->package = new UrlPackage($eeamcawaiqocomwy, new JsonManifestVersionStrategy("{$mkomwsiykqigmqca}/manifest.json"));
            }
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw('admin_enqueue_assets'), [$this, 'swqeqwwioeykieuu'])->qcsmikeggeemccuu($this->ygyygikyocoymgaw('login_enqueue_assets'), [$this, 'kqywecuqageqswuw'])->qcsmikeggeemccuu($this->ygyygikyocoymgaw('front_enqueue_assets'), [$this, 'yesmqccuaecgegmu'])->qcsmikeggeemccuu($this->ygyygikyocoymgaw('admin_localize_variables'), [$this, 'uyesuweeskyiyaie'])->qcsmikeggeemccuu($this->ygyygikyocoymgaw('login_localize_variables'), [$this, 'kygweuoksqaomiqy'])->qcsmikeggeemccuu($this->ygyygikyocoymgaw('front_localize_variables'), [$this, 'sosakicowmqiwgss']);
        parent::wigskegsqequoeks();
    }
    
    public function ecoqooiuymsgakys($scwiymciagumsuiw, $eueuqacmukymcyya)
    {
        if ($this->ieqamkssqsaukwqm()) {
            if (is_admin()) {
                $sqeykgyoooqysmca = self::ADMIN;
            } else {
                if (ManipulatePage::awgkmqkqkqawmqcu()) {
                    $sqeykgyoooqysmca = self::LOGIN;
                } else {
                    $sqeykgyoooqysmca = self::FRONT;
                }
            }
            $egsumesakcaaukem = $this->yimkcammomikeegq("script-{$eueuqacmukymcyya}", $sqeykgyoooqysmca);
            if ($egsumesakcaaukem && $egsumesakcaaukem->aoamooyyyuyiwuoq()) {
                $scwiymciagumsuiw = DOMCrawler::igmaewykumgwoaoy($scwiymciagumsuiw, ['script' => $egsumesakcaaukem->aoamooyyyuyiwuoq()]);
            }
        }
        return $scwiymciagumsuiw;
    }
    
    public function uyesuweeskyiyaie($seiyqiqwcmseaiaq = []) : array
    {
        if ($this->csaueuycewaiuaay()) {
            $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::ADMIN];
        }
        return $seiyqiqwcmseaiaq;
    }
    
    public function swqeqwwioeykieuu($yokgacoigcscwkie = [])
    {
        if ($this->csaueuycewaiuaay()) {
            $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::ADMIN];
        }
        return $yokgacoigcscwkie;
    }
    
    public function sosakicowmqiwgss($seiyqiqwcmseaiaq = []) : array
    {
        if ($this->csaueuycewaiuaay()) {
            $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::FRONT];
        }
        return $seiyqiqwcmseaiaq;
    }
    
    public function yesmqccuaecgegmu($yokgacoigcscwkie = []) : array
    {
        if ($this->csaueuycewaiuaay()) {
            $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::FRONT];
        }
        return $yokgacoigcscwkie;
    }
    
    public function kygweuoksqaomiqy($seiyqiqwcmseaiaq = [])
    {
        if ($this->csaueuycewaiuaay()) {
            $seiyqiqwcmseaiaq[$this->aiqioscoyukqgsgw()] = $this->localize[self::LOGIN];
        }
        return $seiyqiqwcmseaiaq;
    }
    
    public function kqywecuqageqswuw($yokgacoigcscwkie = [])
    {
        if ($this->csaueuycewaiuaay()) {
            $yokgacoigcscwkie[$this->aiqioscoyukqgsgw()] = $this->sources[self::LOGIN];
        }
        return $yokgacoigcscwkie;
    }
    
    public function oiucukewkckkwiqc(string $ymqmyyeuycgmigyo) : string
    {
        $eeamcawaiqocomwy = $this->mkwomgueyaaooyye();
        $wksoawcgagcgoask = $this->aiqioscoyukqgsgw();
        if ($wksoawcgagcgoask) {
            $eeamcawaiqocomwy .= " /{$wksoawcgagcgoask}";
        }
        $eeamcawaiqocomwy .= " /{$ymqmyyeuycgmigyo}";
        return $eeamcawaiqocomwy;
    }
    
    public function msgqgyuieokaauma($egsumesakcaaukem)
    {
        $sogksuscggsicmac = $mkomwsiykqigmqca = $eeamcawaiqocomwy = false;
        if (preg_match('/\\/wp-(content|includes)\\//', $egsumesakcaaukem, $meyiiwcswqmuggyg)) {
            switch (ManipulateArray::get($meyiiwcswqmuggyg, 1)) {
                case 'content':
                    $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::WP_CONTENT_PATH);
                    $eeamcawaiqocomwy = content_url();
                    goto qiiigwkqeoewsuwm;
                case 'includes':
                    $mkomwsiykqigmqca = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH) . ManipulateSetting::cmaecekuqkwmemms(self::WPINC);
                    $eeamcawaiqocomwy = includes_url();
                    goto qiiigwkqeoewsuwm;
            }
            esaqcqqwuussiiwo:
            qiiigwkqeoewsuwm:
            if ($eeamcawaiqocomwy && $mkomwsiykqigmqca) {
                $eeamcawaiqocomwy = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($eeamcawaiqocomwy));
                $egsumesakcaaukem = untrailingslashit(ManipulateFormat::gokuyqsimauyacke($egsumesakcaaukem));
                $sogksuscggsicmac = str_replace($eeamcawaiqocomwy, $mkomwsiykqigmqca, $egsumesakcaaukem);
            }
        } else {
            $uougkmikwgeueowa = $this->mkwomgueyaaooyye();
            $wyocmuqcwyskkcyo = $this->qmwkoewmiweimaqe();
            if ($egsumesakcaaukem && $uougkmikwgeueowa && $wyocmuqcwyskkcyo) {
                $sogksuscggsicmac = (string) str_replace($uougkmikwgeueowa, $wyocmuqcwyskkcyo, $egsumesakcaaukem);
            }
        }
        return $sogksuscggsicmac;
    }
    
    public function cqusmgskowmesgcg() : Component
    {
        return $this->component;
    }
    
    public function aiqioscoyukqgsgw() : ?string
    {
        return $this->cqusmgskowmesgcg()->aiqioscoyukqgsgw();
    }
    
    public function mkwomgueyaaooyye() : string
    {
        return untrailingslashit(ManipulateString::cmaecekuqkwmemms(self::PUBLIC_HTML__BUILD__URL, ''));
    }
    
    public function gyguukaswwqgsoag() : string
    {
        return trailingslashit($this->mkwomgueyaaooyye()) . $this->aiqioscoyukqgsgw();
    }
    
    public function qmwkoewmiweimaqe() : string
    {
        return untrailingslashit(ManipulateString::cmaecekuqkwmemms(self::PUBLIC_HTML__BUILD__PATH, ''));
    }
    
    public function gikwwgqmwccescgy(string $ymqmyyeuycgmigyo) : ?string
    {
        $kqagasmwymmuiksq = null;
        try {
            try {
                $quowyokcwswmuois = $this->wocuguaggqkcimqq();
                if ($quowyokcwswmuois) {
                    
                    $kqagasmwymmuiksq = $quowyokcwswmuois->getVersion($ymqmyyeuycgmigyo);
                }
            } catch (Exception $wgaoewqkwgomoaai) {
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            
            $kqagasmwymmuiksq = null;
        }
        return $kqagasmwymmuiksq;
    }
    
    public function get(string $ymqmyyeuycgmigyo) : ?string
    {
        $ceuoyocoywikssmy = null;
        $quowyokcwswmuois = $this->wocuguaggqkcimqq();
        if ($quowyokcwswmuois) {
            try {
                
                $ceuoyocoywikssmy = $quowyokcwswmuois->getUrl($ymqmyyeuycgmigyo);
                if ($ceuoyocoywikssmy && is_rtl() && strpos($ceuoyocoywikssmy, '.css')) {
                    $ceuoyocoywikssmy = ManipulateString::aimgkskucmymyquc('.css', '.rtl.css', $ceuoyocoywikssmy);
                }
            } catch (Exception $wgaoewqkwgomoaai) {
            }
        }
        return $ceuoyocoywikssmy;
    }
    
    public function omywegoesmqwcmss() : string
    {
        return (string) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('build_directory'), '');
    }
    
    public function cwuqascimsgmiyca($mkomwsiykqigmqca) : ?string
    {
        $woaeeewomgcuesaa = ManipulateSetting::cmaecekuqkwmemms(self::ABSPATH);
        $sycgeiyakseiumqy = trailingslashit(site_url());
        $eeamcawaiqocomwy = null;
        if ($woaeeewomgcuesaa && $sycgeiyakseiumqy) {
            $eeamcawaiqocomwy = str_replace($woaeeewomgcuesaa, $sycgeiyakseiumqy, $mkomwsiykqigmqca);
        }
        return $eeamcawaiqocomwy;
    }
    
    public function wocuguaggqkcimqq() : ?UrlPackage
    {
        if (!$this->package) {
            $this->ygegioggqgwwqooe();
        }
        return $this->package;
    }
    
    public function smcmuasuqwasaqiu(?string $ymqmyyeuycgmigyo) : string
    {
        $mkomwsiykqigmqca = $this->qmwkoewmiweimaqe();
        $kqagasmwymmuiksq = $this->gikwwgqmwccescgy($ymqmyyeuycgmigyo);
        return "{$mkomwsiykqigmqca}/{$kqagasmwymmuiksq}";
    }
    
    public function eyamqkqiykagecsw(?string $wkaqekwwgqsqwcoi, $ewgwqamkygiqaawc = false, $qawsmigsyysqwmeq = false) : ?string
    {
        if ($wkaqekwwgqsqwcoi) {
            $ceuoyocoywikssmy = "img/svg/icon/{$wkaqekwwgqsqwcoi}.svg";
            $eygsasmqycagyayw = $this->miocmcoykayoyyau();
            if ($ewgwqamkygiqaawc) {
                $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->souwykwwmyygqyqi($ceuoyocoywikssmy);
                if ($wkaqekwwgqsqwcoi && $qawsmigsyysqwmeq) {
                    
                    $wkaqekwwgqsqwcoi = preg_replace('/<!--[\\s\\S]*?-->/', '', $wkaqekwwgqsqwcoi);
                    $wkaqekwwgqsqwcoi = preg_replace('/<defs>[\\s\\S]*?<\\/defs>/', '', $wkaqekwwgqsqwcoi);
                }
            } else {
                $wkaqekwwgqsqwcoi = $eygsasmqycagyayw->get($ceuoyocoywikssmy);
            }
        }
        return $wkaqekwwgqsqwcoi;
    }
    
    public function souwykwwmyygqyqi($egsumesakcaaukem)
    {
        if (ManipulateValidation::wmcwegoisyeeosqu($egsumesakcaaukem)) {
            $esaqeawoigqgagum = $this->smcmuasuqwasaqiu($egsumesakcaaukem);
        } else {
            $egsumesakcaaukem = $this->get($egsumesakcaaukem);
            $esaqeawoigqgagum = $this->msgqgyuieokaauma($egsumesakcaaukem);
        }
        $ewgwqamkygiqaawc = false;
        $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk();
        if ($esaqeawoigqgagum && $iiaumsgauuyeqksw->exists($esaqeawoigqgagum)) {
            $ewgwqamkygiqaawc = $iiaumsgauuyeqksw->souwykwwmyygqyqi($esaqeawoigqgagum);
        }
        return $ewgwqamkygiqaawc;
    }
    
    private function amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq = [], $mcaisukqqyosuasi = self::ADMIN) : self
    {
        $uukmwiwiqwyaaegk = ManipulateArray::get($this->localize[$mcaisukqqyosuasi], $uusmaiomayssaecw, []);
        if ($uukmwiwiqwyaaegk) {
            $wqsyimmcqogaosaq = array_merge($uukmwiwiqwyaaegk, $wqsyimmcqogaosaq);
        }
        $this->localize[$mcaisukqqyosuasi][$uusmaiomayssaecw] = $wqsyimmcqogaosaq;
        return $this;
    }
    
    public function siaqwswaougcwcci($wqsyimmcqogaosaq, $mcaisukqqyosuasi = self::ADMIN) : self
    {
        foreach ($wqsyimmcqogaosaq as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->amqemiuwqggikkyi($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mcaisukqqyosuasi);
            mscgewkcqcoowweg:
        }
        ikqeeaysmqgcgawq:
        return $this;
    }
    
    public function ieayqiyiuuguowyq(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self
    {
        return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, self::FRONT);
    }
    
    public function iagmuqogkyysiick($wqsyimmcqogaosaq = []) : self
    {
        return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, self::FRONT);
    }
    
    public function gauosiuwaieksway(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self
    {
        return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq, self::LOGIN);
    }
    
    public function oaoisgmqkamuoeam($wqsyimmcqogaosaq = []) : self
    {
        return $this->siaqwswaougcwcci($wqsyimmcqogaosaq, self::LOGIN);
    }
    
    public function ikqyiskqaaymscgw(string $uusmaiomayssaecw, $wqsyimmcqogaosaq = []) : self
    {
        return $this->amqemiuwqggikkyi($uusmaiomayssaecw, $wqsyimmcqogaosaq);
    }
    
    public function ssguskiqaagaauoy($wqsyimmcqogaosaq = []) : self
    {
        return $this->siaqwswaougcwcci($wqsyimmcqogaosaq);
    }
    
    private function seimiyccuwecawki(string $eueuqacmukymcyya, $ogomymegcoacqisg = false, string $sqeykgyoooqysmca = self::STYLE) : Source
    {
        return new Source("{$this->aiqioscoyukqgsgw()}-{$eueuqacmukymcyya}", $ogomymegcoacqisg, $sqeykgyoooqysmca);
    }
    
    public function awgyqswkqywwmkye(string $eueuqacmukymcyya, $geecqyososceumsk = false) : Source
    {
        return $this->seimiyccuwecawki($eueuqacmukymcyya, $geecqyososceumsk, self::STYLE);
    }
    
    public function owygwqwawqoiusis(string $eueuqacmukymcyya, $ogomymegcoacqisg = false) : Source
    {
        return $this->seimiyccuwecawki($eueuqacmukymcyya, $ogomymegcoacqisg, self::SCRIPT);
    }
    
    public function ayeieigcckcmsikq(Source $egsumesakcaaukem) : self
    {
        return $this->emmqgiegugsycumi($egsumesakcaaukem, self::ADMIN);
    }
    
    public function oeoquuwkoywiuesy(Source $egsumesakcaaukem) : self
    {
        return $this->emmqgiegugsycumi($egsumesakcaaukem, self::FRONT);
    }
    
    public function wqiosiseiwsamggo(Source $egsumesakcaaukem) : self
    {
        return $this->emmqgiegugsycumi($egsumesakcaaukem, self::LOGIN);
    }
    
    public function gmgiuyeyoguqqccw() : array
    {
        return $this->sources;
    }
    
    private function yimkcammomikeegq($uusmaiomayssaecw, $sqeykgyoooqysmca = self::ADMIN) : ?Source
    {
        $yokgacoigcscwkie = ManipulateArray::get($this->gmgiuyeyoguqqccw(), $sqeykgyoooqysmca, []);
        return ManipulateArray::get($yokgacoigcscwkie, $uusmaiomayssaecw);
    }
    
    private function emmqgiegugsycumi(Source $egsumesakcaaukem, string $sqeykgyoooqysmca = self::ADMIN) : self
    {
        if (!$this->ieqamkssqsaukwqm() && $egsumesakcaaukem->aoamooyyyuyiwuoq()) {
            $this->cecaguuoecmccuse('script_loader_tag', [$this, 'ecoqooiuymsgakys'], 10, 2);
            $this->attributeAdded = true;
        }
        $this->sources[$sqeykgyoooqysmca]["{$egsumesakcaaukem->gueasuouwqysmomu()}-{$egsumesakcaaukem->yoickwcyekiwiyqm()}"] = $egsumesakcaaukem;
        return $this;
    }
    
    public function yomasssaasmawcso(string $eueuqacmukymcyya) : string
    {
        return "{$this->aiqioscoyukqgsgw()}-{$eueuqacmukymcyya}";
    }
    
    public function csaueuycewaiuaay() : bool
    {
        return !ManipulateAjax::mcgoysmkqsqooceq() && !ManipulateServer::smowememmgeukwki();
    }
}

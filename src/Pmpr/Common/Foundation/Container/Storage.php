<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Container;

use Exception;
use Pmpr\Common\Foundation\Data\Component;
use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Storage implements ConstantInterface
{
    
    protected static array $instances = [];
    
    protected static array $components = [self::CMN => [], self::PKG => [], self::THM => [], self::CTM => []];
    
    public static function iawcusqgkeieicug() : ?array
    {
        return self::$instances;
    }
    
    public static function misumgawyweoagic($sqeykgyoooqysmca = null) : array
    {
        $mqkkuqaimswumeww = self::$components;
        if ($sqeykgyoooqysmca) {
            $mqkkuqaimswumeww = ManipulateArray::get($mqkkuqaimswumeww, $sqeykgyoooqysmca, []);
        } else {
            $mqkkuqaimswumeww = ManipulateArray::kaucoswaceqcuyam($mqkkuqaimswumeww);
        }
        return $mqkkuqaimswumeww;
    }
    
    public static function kmsomwiqwmoyoeci($mksyucucyswaukig, $couygeouymagssgw)
    {
        if ($mksyucucyswaukig instanceof Container) {
            $ymqmyyeuycgmigyo = $mksyucucyswaukig::akuociswqmoigkas();
            $sqeykgyoooqysmca = $mksyucucyswaukig::yegwayqakokyuiok();
            if ($sqeykgyoooqysmca && $ymqmyyeuycgmigyo) {
                self::$components[$sqeykgyoooqysmca][$ymqmyyeuycgmigyo] = new Component($mksyucucyswaukig, $sqeykgyoooqysmca, $ymqmyyeuycgmigyo, $couygeouymagssgw);
            }
        }
    }
    
    public static function umuecysoywoumgwo(string $aiieyweysaukqemc)
    {
        return ManipulateArray::get(self::iawcusqgkeieicug(), $aiieyweysaukqemc);
    }
    
    public static function update(object $owgumcsyqsamiemg)
    {
        $aiieyweysaukqemc = $owgumcsyqsamiemg::uecyuoauykiqqkey();
        self::remove($aiieyweysaukqemc);
        self::add($aiieyweysaukqemc, $owgumcsyqsamiemg);
    }
    
    public static function cqusmgskowmesgcg($wksoawcgagcgoask = null)
    {
        if (is_object($wksoawcgagcgoask) && method_exists($wksoawcgagcgoask, 'kwqsguiiocoousuq')) {
            $wksoawcgagcgoask = $wksoawcgagcgoask::kwqsguiiocoousuq();
        }
        $mqkkuqaimswumeww = self::misumgawyweoagic();
        return ManipulateArray::get($mqkkuqaimswumeww, $wksoawcgagcgoask);
    }
    
    public static function add(string $uusmaiomayssaecw, object $owgumcsyqsamiemg)
    {
        self::$instances[$uusmaiomayssaecw] = $owgumcsyqsamiemg;
    }
    
    public static function iigqkgiamcykcwcm($iakkeikwceeomgyq)
    {
        return $iakkeikwceeomgyq;
    }
    
    public static function remove(string $aiieyweysaukqemc, $aokagokqyuysuksm = null)
    {
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($aiieyweysaukqemc, $aokagokqyuysuksm);
        return ManipulateArray::unset(self::$instances, $uusmaiomayssaecw);
    }
    
    public static function get(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null, ...$ywmkwiwkosakssii)
    {
        $uusmaiomayssaecw = self::cisyiemkeykgkomc($egkyssmuqcwaciya, $aokagokqyuysuksm);
        $owgumcsyqsamiemg = self::umuecysoywoumgwo($uusmaiomayssaecw);
        if (!$owgumcsyqsamiemg) {
            $egkyssmuqcwaciya = self::iigqkgiamcykcwcm($egkyssmuqcwaciya);
            if ($aokagokqyuysuksm) {
                $ywmkwiwkosakssii[] = $aokagokqyuysuksm;
            }
            $owgumcsyqsamiemg = new $egkyssmuqcwaciya(...$ywmkwiwkosakssii);
            self::add($uusmaiomayssaecw, $owgumcsyqsamiemg);
        }
        return $owgumcsyqsamiemg;
    }
    
    public static function cisyiemkeykgkomc(string $egkyssmuqcwaciya, ?string $aokagokqyuysuksm = null) : string
    {
        return "{$egkyssmuqcwaciya}{$aokagokqyuysuksm}";
    }
}

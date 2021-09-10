<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;

use WP_Error;

class DecoratorCron extends Decorator
{
    
    public static function sceqickmyoseqcue(string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = [])
    {
        return wp_next_scheduled($iaakskwmyqceoscy, $ywmkwiwkosakssii);
    }
    
    public static function swgggegyusmecoky(int $yiuogaeewyockeak, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = [], $wpError = false)
    {
        return wp_unschedule_event($yiuogaeewyockeak, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $wpError);
    }
    
    public static function uwugaiqywmseksqm(int $yiuogaeewyockeak, string $cukawkgykqoskaca, string $iaakskwmyqceoscy, array $ywmkwiwkosakssii = [], $wpError = false)
    {
        return wp_schedule_event($yiuogaeewyockeak, $cukawkgykqoskaca, $iaakskwmyqceoscy, $ywmkwiwkosakssii, $wpError);
    }
}

<?php
    /*
        Day 
        d -> 01 to 31
        j -> 1 to 31
        S -> (st, nd, rd or th)
        Month
        F -> January
        m -> 01
        M -> Jan
        n -> 1
        Year
        Y -> 2019
        y -> last two digits 19
        Week 
        D -> Mon
        l -> Monday
        N -> 1 (1 is monday, 2 is tuesday, 3 is wednesday, 4 is thursday, 5 is friday, 6 is saturday, 7 is sunday)
        w -> 1 (0 is sunday, 1 is monday, 2 is tuesday, 3 is wednesday, 4 is thursday, 5 is friday, 6 is saturday) 
    */
?>
<?php
    /*
        echo "Day is ".date("d")."<br>"; 
        echo "Day is ".date("j")."<br>";
        echo "Day is ".date("jS")."<br>";
        echo "Month is ".date("F")."<br>";
        echo "Month is ".date("m")."<br>";
        echo "Month is ".date("n")."<br>";
        echo "Month is ".date("M")."<br>";
        echo "Year is ".date("Y")."<br>";
        echo "Year is ".date("y")."<br>";
        echo "Full Date is ".date("d/m/Y")."<br>";
        echo "Full Date is ".date("Y-M-d")."<br>";
        echo "Week Day is ".date("D")."<br>";
        echo "Week Day is ".date("l")."<br>";
        echo "Week Day is ".date("N")."<br>";
        echo "Week Day is ".date("w")."<br>";
        echo "Day of the year out of 365 or 366 days in a year right now is ".date("z")."<br>";
        echo "Week of the year is ".date("W")."<br>"; a number from 1 to 53 is displayed which is the week of the year
        echo "Number of Days of current month is ".date("t")."<br>";
        echo "Is this leap year? ".date("L"); 0 is displayed if current year is not leap year else 1
        output is 
        Today is 24
        Today is 24
        Today is 24th
        Month is December
        Month is 12
        Month is 12
        Month is Dec
        Year is 2025
        Year is 25
        Full Date is 24/12/2025
        Full Date is 2025-Dec-24
        Week Day is Wed
        Week Day is Wednesday
        Week Day is 3
        Week Day is 3
        Day of the year out of 365 or 366 days in a year right now is 357
        Week of the year is 52
        Number of Days of current month is 31
        Actually output shown above shows info of Europe/Berlin which is the default which is not always true for India
        Is this leap year? 0
    */
?>
<?php
    /*
        Hour
        h -> 01 to 12
        H -> 00 to 23
        g -> 1 to 12
        G -> 0 to 23
        Minutes
        i -> 00 to 59
        Seconds
        s -> 00 to 59
        Meridiem
        a -> (am or pm)
        A -> (AM or PM)
    */
?>
<?php
    /*
        echo "Hour is ".date("h")."<br>";
        echo "Hour is ".date("H")."<br>";
        echo "Hour is ".date("g")."<br>";
        echo "Hour is ".date("G")."<br>";
        echo "Minutes is ".date("i")."<br>";
        echo "Seconds is ".date("s")."<br>";
        echo "Meridiem is ".date("A")."<br>";
        echo "Meridiem is ".date("a")."<br>";
        echo "Time is ".date("h:i:sa")."<br>";
        echo "Time is ".date("h:i:sa e")."<br>";
        echo "Time and Date is ".date("d-m-Y h:i:sa")."<br>";
        echo date_default_timezone_get()."<br>"; the time shown by default is of Europe/Berlin
        date_default_timezone_set("Asia/Kolkata")."<br>";
        echo "Time is ".date("h:i:sa e")."<br>";
        output is 
        Hour is 08
        Hour is 20
        Hour is 8
        Hour is 20
        Minutes is 14
        Seconds is 50
        Meridiem is PM
        Meridiem is pm
        Time is 08:14:50pm
        Time is 08:14:50pm Europe/Berlin
        Time and Date is 24-12-2025 08:14:50pm
        Europe/Berlin
        Time is 12:44:50am Asia/Kolkata
    */
?>
<?php
    /*
        echo date("l", mktime(0, 0, 0, 10, 15, 2003))."<br>"; first 0 is hours, second 0 is minutes, third 0 is seconds, 10 is month, 15 is day and 2003 is year, the time 00:00:00 passed in second parameter is 00:00:00 Europe/Berlin, day of week of 15th october 2003 is displayed
        echo date("d-m-Y", mktime(0, 0, 0, 10, 15, 2003))."<br>";
        echo date("d-m-Y h:i:sa", mktime(0, 0, 0, 10, 15, 2003))."<br>";
        echo date("d-m-Y h:i:sa", gmmktime(0, 0, 0, 10, 15, 2003)); first 0 is hours, second 0 is minutes, third 0 is seconds, 10 is month, 15 is day and 2003is year, the time 00:00:00 passed inn second parameter is 00:00:00 GMT, date function converts GMT time to Europe/Berlin Time by adding 1 or 2 hours to GMT time depending on season
        output is 
        Wednesday
        15-10-2003
        15-10-2003 12:00:00am
        15-10-2003 02:00:00am  
    */              
?>
<?php
    /*
        $date = date_create("2027-03-15");
        echo date_format($date, "l");
        Monday is output which is the day 15th march 2027 would be
    */
?>
<?php
    /*
        $date = date_create("2027-03-15");
        echo date_format($date, "d/m/Y H:i:s");
        15/03/2027 00:00:00 is output, time is shown as 00:00:00 which is default since no time was mentioned
    */
?>
<?php
    /*
        $date = date_create("2027-03-15 22:25:00");
        echo date_format($date, "d/m/Y H:i:s");
        15/03/2027 22:25:00 is output
    */
?>
<?php
    /*
        $date = date_create("2013-03-15 22:25:00");
        echo date_format($date, "d/m/Y H:i:s");
        15/03/2013 22:25:00 is output 
    */
?>
<?php
    /*
        $date = date_create("2013-03-15 22:25:00", timezone_open("Asia/Kolkata"));
        echo date_format($date, "d/m/Y H:i:s");
        15/03/2013 22:25:00 is output still, howver now the time shown is of India
    */
?>
<?php
    /*
        echo checkdate(2, 15, 2014); 2 is month, 15 is day, 2014 is year
        output is 1 since the date is valid
    */
?>
<?php
    /*
        echo checkdate(2, 29, 2014); 
        nothing is displayed since february didn't have 29 days during 2014 
    */
?>
<?php
    /*
        echo checkdate(2, 29, 2036); 
        output is 1 since the date is valid
    */
?>
<?php
    /*
        $date1 = date_create("2013-03-15");
        $date2 = date_create("2013-12-12");
        $diff = date_diff($date1, $date2); $date2-$date1 is found
        echo "<pre>";
        print_r($diff);
        echo "</pre>";
        output includes 
        DateInterval Object
        (
            [y] => 0 // 0 years difference
            [m] => 8 // 8 months difference
            [d] => 27 // 27 days along with 8moths difference
            [h] => 0 // hours
            [i] => 0 // minutes
            [s] => 0 // seconds
            [f] => 0 // microseconds
            [invert] => 0 // date passed as first parameter of date_diff function is smaller than date passed as second parameter of date_diff function so value is set to 0, even if the dates are the same value be 0, if date passed as first parameter of date_diff function is bigger than the date passed as second parameter of date_diff function then the value would be 1
            [days] => 272 // days difference, value is always positive even when value of invert property is set to 1
        )
    */
?>
<?php
    /*
        $date1 = date_create("2013-03-15");
        $date2 = date_create("2013-12-12");
        $diff = date_diff($date1, $date2);
        echo $diff->days." days";
        output is 272 days
    */
?>
<?php
    /*
        $date1 = date_create("2013-12-15");
        $date2 = date_create("2013-03-12");
        $diff = date_diff($date1, $date2);
        echo $diff->days." days";
        output is 278 days 
    */
?>
<?php
    /*
        $date1 = date_create("2013-12-15");
        $date2 = date_create("2013-03-12");
        $diff = date_diff($date1, $date2);
        echo $diff->format("%R%a days");
        output is -278 days since value of invert property is 1
    */
?>
<?php
    /*
        $date1 = date_create("2013-03-15");
        $date2 = date_create("2013-12-12");
        $diff = date_diff($date1, $date2);
        echo $diff->format("%R%a days");
        output is +272 days
    */
?>
<?php
    /*
        $date1 = date_create("2013-12-15");
        $date2 = date_create("2013-03-12");
        $diff = date_diff($date1, $date2);
        echo $diff->format("%r%a days");
        output is -278 days
    */
?>
<?php
    /*
        $date1 = date_create("2013-03-15");
        $date2 = date_create("2013-12-12");
        $diff = date_diff($date1, $date2);
        echo $diff->format("%r%a days");
        output is 272 days
    */
?>
<?php
    /*
        $date1 = date_create("2013-03-15");
        $date2 = date_create("2013-12-12");
        $diff = date_diff($date1, $date2);
        echo $diff->format("%m");
        output is 8 because of 8 months difference
    */
?>
<?php
    /*
        $date = date_create("2015-05-15");
        date_add($date, date_interval_create_from_date_string("30 days"));
        echo date_format($date, "d-m-Y");
        output is 14-06-2015, this is the date 30 days after 15th may 2015
    */
?>
<?php
    /*
        $date = date_create("2015-05-15");
        date_sub($date, date_interval_create_from_date_string("10 days"));
        echo date_format($date, "d-m-Y");
        output is 05-05-2015, this is the date 10 days before 15th may 2015
    */
?>
<?php
    /*
        $date = date_create("2015-05-15");
        date_modify($date, "10 days");
        echo date_format($date, "d-m-Y");
        output is 25-05-2015, this is the date 10 days after 15th may 2015
    */
?>
<?php
    /*
        $date = date_create("2015-05-15");
        date_modify($date, "-10 days");
        echo date_format($date, "d-m-Y");
        output is 05-05-2015, this is the date 10 days before 15th may 2015
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(getdate()); info of current date is displayed
        echo "</prre>";
        output includes 
        Array
        (
            [seconds] => 2
            [minutes] => 6
            [hours] => 0
            [mday] => 26
            [wday] => 5
            [mon] => 12
            [year] => 2025
            [yday] => 359
            [weekday] => Friday
            [month] => December
        )
        the info given in output is valid for Berlin not India
    */
?>
<?php
    /*
        $date = getdate();
        echo $date['month'];
        output is December
    */
?>
<?php
    /*
        $date = getdate();
        echo $date['month']." - ".$date['year'];
        output is December - 2025
    */
?>
<?php
    /*
        $olddate = mktime(0, 0, 0, 03, 15, 2015);
        $date = getdate($olddate);
        echo $date['month']." - ".$date['year'];
        output is March - 2015
    */
?>
<?php
    /*
        $olddate = mktime(0, 0, 0, 03, 15, 2015);
        echo "<pre>";
        print_r(getdate($olddate));
        echo "</pre>";
        output includes
        Array
        (
            [seconds] => 0
            [minutes] => 0
            [hours] => 0
            [mday] => 15
            [wday] => 0
            [mon] => 3
            [year] => 2015
            [yday] => 73
            [weekday] => Sunday
            [month] => March
        )
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(gettimeofday());
        echo "</pre>";
        output includes 
        Array
        (
            [sec] => 1766705917 // this is the number of seconds passed since 1st january 1970 GMT+0 currently
            [usec] => 924688 // microseconds
        )
    */
?>
<?php
    /*
        $date = gettimeofday();
        echo $date['sec'];
        output is 1766706146
    */
?>
<?php
    /*
        echo gettimeofday(true);
        output is 1766706335.563 which is number of seconds passed since 1st january 1970 GMT+0
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(localtime());
        echo "</pre>";
        echo "<pre>";
        print_r(localtime(time()));
        echo "</pre>";
        output is 2 indexed arrays, both are exactly the same, info of Belin is shown 
        output includes
        Array
        (
            [0] => 58 // current seconds
            [1] => 55 // current minutes
            [2] => 0 // current hour
            [3] => 26 // current day of month
            [4] => 11 // current month, 11 indicates december, 0 indicates january
            [5] => 125 // current year - 1900
            [6] => 5 // current day of the week, sunday is 0, 5 is friday
            [7] => 359 // current day of the year
        )
        Array
        (
            [0] => 58 // current seconds
            [1] => 55 // current minutes
            [2] => 0 // current hour
            [3] => 26 // current day of month
            [4] => 11 // current month, 11 indicates december, 0 indicates january
            [5] => 125 // current year - 1900
            [6] => 5 // current day of the week, sunday is 0, 5 is friday
            [7] => 359 // current day of the year
        )
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(localtime(time(), true));
        echo "</pre>";
        output includes 
        Array
        (
            [tm_sec] => 57 // current seconds
            [tm_min] => 4 // current minutes
            [tm_hour] => 1 // current hour
            [tm_mday] => 26 // current day of month
            [tm_mon] => 11 // current month, 11 indicates december, 0 indicates january
            [tm_year] => 125 // current year - 1900
            [tm_wday] => 5 // current day of the week, sunday is 0, 5 is friday
            [tm_yday] => 359 // current day of the year
        )
    */
?>
<?php
    /*
        $olddate = mktime(0, 0, 0, 03, 15, 2015);
        echo "<pre>";
        print_r(localtime($olddate, true));
        echo "</pre>";
        output includes 
        Array
        (
            [tm_sec] => 0
            [tm_min] => 0
            [tm_hour] => 0
            [tm_mday] => 15
            [tm_mon] => 2
            [tm_year] => 115
            [tm_wday] => 0
            [tm_yday] => 73
        )
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(date_parse("2015-03-15 12:30:25.5"));
        echo "</pre>";
        output includes 
        Array
        (
            [year] => 2015
            [month] => 3
            [day] => 15
            [hour] => 12
            [minute] => 30
            [second] => 25
            [fraction] => 0.5
        )
    */
?>
<?php
    /*
        $date = date_parse("2015-03-15 12:30:25.5");
        echo $date['day'];
        output is 15
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(date_parse_from_format("d.n.Y", "15.3.2015"));
        echo "</pre>";
        output includes 
        Array
        (
            [year] => 2015
            [month] => 3
            [day] => 15 
        )
    */
?>
<?php
    /*
        echo strtotime("now");
        output is 1766710539 which is the number of seconds passed since 1st anuary 1970 GMT+0
    */
?>
<?php
    /*
        echo date("d-m-Y", strtotime("now"));
        output is 26-12-2025 which is current date of Berlin
    */
?>
<?php
    /*
        echo date("d-m-Y", strtotime("3 march 2005"));
        output is 03-03-2005
    */
?>
<?php
    /*
        echo date("d-m-Y H:i", strtotime("+5 hours"));
        output is 26-12-2025 07:09 which includes the time of Berlin after 5 hours from current time in Berlin
    */
?>
<?php
    /*
        echo date("d-m-Y H:i", strtotime("+1 week"));
        output is 02-01-2026 02:13 which includes the time of Berlin after 1 week from current time in Berlin
    */
?>
<?php
    /*
        echo date("d-m-Y H:i", strtotime("+1 week 3 days 7 hours 5 seconds"));
        output is 05-01-2026 09:17 which includes the time of Berlin after 1 week 3 days 7 hours 5 seconds from current time in Berlin
    */
?>
<?php
    /*
        echo date("d-m-Y", strtotime("next Monday"));
        output is 29-12-2025 which is date of the next monday of Berlin's date
    */
?>
<?php
    /*
        echo date("d-m-Y", strtotime("last Tuesday"));
        output is 23-12-2025 which is the date of the last tuesday of Berlin
    */
?>
<?php
    /*
        echo date("d-m-Y", strtotime("first day of last month"));
        output is 01-11-2025 which is the date of the first day of the last month of Berlin
    */
?>
<?php
    /*
        echo strftime("%B %d %Y, %X %Z");
        output is December 26 2025, 02:45:34 India Standard Time, the date and time shown is of Berlin, %Z used to display timezone of place where this computer is
    */ 
?>
<?php
    /*
        echo strftime("%B %d %Y, %X", mktime(21, 30, 0, 05, 18, 2005));
        output is May 18 2005, 21:30:00
    */
?>
<?php
    /*
        echo strftime("%d/%m/%Y %H:%M:%S", mktime(21, 30, 0, 05, 18, 2005));
        output is 18/05/2005 21:30:00
    */
?>
<?php
    /*
        echo gmstrftime("%d/%m/%Y %H:%M:%S", mktime(21, 30, 0, 05, 18, 2005));
        output is 18/05/2005 19:30:00, Berlin's time was passed inside parentheses of mktime function, Berlin's time is GMT+1 or GMT+2 depending on season, output returned was GMT time
    */
?>
<?php
    /*
        $date = date_create("2015-05-15");
        date_time_set($date, 13, 20); 13 is hours, 20 is minutes, when number of seconds are not mentioned it is 0
        echo date_format($date, "d-m-Y H:i:s")."<br>";
        date_time_set($date, 05, 20, 45); 5 is hours, 20 is minutes, 45 is seconds
        echo date_format($date, "d-m-Y H:i:s");
        output is 
        15-05-2015 13:20:00
        15-05-2015 05:20:45
    */
?>
<?php
    /*
        date_default_timezone_set("Asia/Kolkata");
        echo date_default_timezone_get();
        output is Asia/Kolkata
    */
?>
<?php
    /*
        $tz = timezone_open("Asia/Kolkata");
        echo timezone_name_get($tz);
        output is Asia/Kolkata
    */
?>
<?php
    /*
        $tz = timezone_open("Asia/Kolkata");
        echo "<pre>";
        print_r(timezone_location_get($tz));
        echo "</pre>";
        output includes 
        Array
        (
            [country_code] => IN
            [latitude] => 22.53333
            [longitude] => 88.36666
        )
        the latitude and longitude shown are of Kolkata roughly
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(timezone_identifiers_list());
        echo "</pre>";
        output is 
        Array
        (
            [0] => Africa/Abidjan
            [1] => Africa/Accra
            [2] => Africa/Addis_Ababa
            [3] => Africa/Algiers
            [4] => Africa/Asmara
            [5] => Africa/Bamako
            [6] => Africa/Bangui
            [7] => Africa/Banjul
            [8] => Africa/Bissau
            [9] => Africa/Blantyre
            [10] => Africa/Brazzaville
            [11] => Africa/Bujumbura
            [12] => Africa/Cairo
            [13] => Africa/Casablanca
            [14] => Africa/Ceuta
            [15] => Africa/Conakry
            [16] => Africa/Dakar
            [17] => Africa/Dar_es_Salaam
            [18] => Africa/Djibouti
            [19] => Africa/Douala
            [20] => Africa/El_Aaiun
            [21] => Africa/Freetown
            [22] => Africa/Gaborone
            [23] => Africa/Harare
            [24] => Africa/Johannesburg
            [25] => Africa/Juba
            [26] => Africa/Kampala
            [27] => Africa/Khartoum
            [28] => Africa/Kigali
            [29] => Africa/Kinshasa
            [30] => Africa/Lagos
            [31] => Africa/Libreville
            [32] => Africa/Lome
            [33] => Africa/Luanda
            [34] => Africa/Lubumbashi
            [35] => Africa/Lusaka
            [36] => Africa/Malabo
            [37] => Africa/Maputo
            [38] => Africa/Maseru
            [39] => Africa/Mbabane
            [40] => Africa/Mogadishu
            [41] => Africa/Monrovia
            [42] => Africa/Nairobi
            [43] => Africa/Ndjamena
            [44] => Africa/Niamey
            [45] => Africa/Nouakchott
            [46] => Africa/Ouagadougou
            [47] => Africa/Porto-Novo
            [48] => Africa/Sao_Tome
            [49] => Africa/Tripoli
            [50] => Africa/Tunis
            [51] => Africa/Windhoek
            [52] => America/Adak
            [53] => America/Anchorage
            [54] => America/Anguilla
            [55] => America/Antigua
            [56] => America/Araguaina
            [57] => America/Argentina/Buenos_Aires
            [58] => America/Argentina/Catamarca
            [59] => America/Argentina/Cordoba
            [60] => America/Argentina/Jujuy
            [61] => America/Argentina/La_Rioja
            [62] => America/Argentina/Mendoza
            [63] => America/Argentina/Rio_Gallegos
            [64] => America/Argentina/Salta
            [65] => America/Argentina/San_Juan
            [66] => America/Argentina/San_Luis
            [67] => America/Argentina/Tucuman
            [68] => America/Argentina/Ushuaia
            [69] => America/Aruba
            [70] => America/Asuncion
            [71] => America/Atikokan
            [72] => America/Bahia
            [73] => America/Bahia_Banderas
            [74] => America/Barbados
            [75] => America/Belem
            [76] => America/Belize
            [77] => America/Blanc-Sablon
            [78] => America/Boa_Vista
            [79] => America/Bogota
            [80] => America/Boise
            [81] => America/Cambridge_Bay
            [82] => America/Campo_Grande
            [83] => America/Cancun
            [84] => America/Caracas
            [85] => America/Cayenne
            [86] => America/Cayman
            [87] => America/Chicago
            [88] => America/Chihuahua
            [89] => America/Costa_Rica
            [90] => America/Creston
            [91] => America/Cuiaba
            [92] => America/Curacao
            [93] => America/Danmarkshavn
            [94] => America/Dawson
            [95] => America/Dawson_Creek
            [96] => America/Denver
            [97] => America/Detroit
            [98] => America/Dominica
            [99] => America/Edmonton
            [100] => America/Eirunepe
            [101] => America/El_Salvador
            [102] => America/Fort_Nelson
            [103] => America/Fortaleza
            [104] => America/Glace_Bay
            [105] => America/Godthab
            [106] => America/Goose_Bay
            [107] => America/Grand_Turk
            [108] => America/Grenada
            [109] => America/Guadeloupe
            [110] => America/Guatemala
            [111] => America/Guayaquil
            [112] => America/Guyana
            [113] => America/Halifax
            [114] => America/Havana
            [115] => America/Hermosillo
            [116] => America/Indiana/Indianapolis
            [117] => America/Indiana/Knox
            [118] => America/Indiana/Marengo
            [119] => America/Indiana/Petersburg
            [120] => America/Indiana/Tell_City
            [121] => America/Indiana/Vevay
            [122] => America/Indiana/Vincennes
            [123] => America/Indiana/Winamac
            [124] => America/Inuvik
            [125] => America/Iqaluit
            [126] => America/Jamaica
            [127] => America/Juneau
            [128] => America/Kentucky/Louisville
            [129] => America/Kentucky/Monticello
            [130] => America/Kralendijk
            [131] => America/La_Paz
            [132] => America/Lima
            [133] => America/Los_Angeles
            [134] => America/Lower_Princes
            [135] => America/Maceio
            [136] => America/Managua
            [137] => America/Manaus
            [138] => America/Marigot
            [139] => America/Martinique
            [140] => America/Matamoros
            [141] => America/Mazatlan
            [142] => America/Menominee
            [143] => America/Merida
            [144] => America/Metlakatla
            [145] => America/Mexico_City
            [146] => America/Miquelon
            [147] => America/Moncton
            [148] => America/Monterrey
            [149] => America/Montevideo
            [150] => America/Montserrat
            [151] => America/Nassau
            [152] => America/New_York
            [153] => America/Nipigon
            [154] => America/Nome
            [155] => America/Noronha
            [156] => America/North_Dakota/Beulah
            [157] => America/North_Dakota/Center
            [158] => America/North_Dakota/New_Salem
            [159] => America/Ojinaga
            [160] => America/Panama
            [161] => America/Pangnirtung
            [162] => America/Paramaribo
            [163] => America/Phoenix
            [164] => America/Port-au-Prince
            [165] => America/Port_of_Spain
            [166] => America/Porto_Velho
            [167] => America/Puerto_Rico
            [168] => America/Punta_Arenas
            [169] => America/Rainy_River
            [170] => America/Rankin_Inlet
            [171] => America/Recife
            [172] => America/Regina
            [173] => America/Resolute
            [174] => America/Rio_Branco
            [175] => America/Santarem
            [176] => America/Santiago
            [177] => America/Santo_Domingo
            [178] => America/Sao_Paulo
            [179] => America/Scoresbysund
            [180] => America/Sitka
            [181] => America/St_Barthelemy
            [182] => America/St_Johns
            [183] => America/St_Kitts
            [184] => America/St_Lucia
            [185] => America/St_Thomas
            [186] => America/St_Vincent
            [187] => America/Swift_Current
            [188] => America/Tegucigalpa
            [189] => America/Thule
            [190] => America/Thunder_Bay
            [191] => America/Tijuana
            [192] => America/Toronto
            [193] => America/Tortola
            [194] => America/Vancouver
            [195] => America/Whitehorse
            [196] => America/Winnipeg
            [197] => America/Yakutat
            [198] => America/Yellowknife
            [199] => Antarctica/Casey
            [200] => Antarctica/Davis
            [201] => Antarctica/DumontDUrville
            [202] => Antarctica/Macquarie
            [203] => Antarctica/Mawson
            [204] => Antarctica/McMurdo
            [205] => Antarctica/Palmer
            [206] => Antarctica/Rothera
            [207] => Antarctica/Syowa
            [208] => Antarctica/Troll
            [209] => Antarctica/Vostok
            [210] => Arctic/Longyearbyen
            [211] => Asia/Aden
            [212] => Asia/Almaty
            [213] => Asia/Amman
            [214] => Asia/Anadyr
            [215] => Asia/Aqtau
            [216] => Asia/Aqtobe
            [217] => Asia/Ashgabat
            [218] => Asia/Atyrau
            [219] => Asia/Baghdad
            [220] => Asia/Bahrain
            [221] => Asia/Baku
            [222] => Asia/Bangkok
            [223] => Asia/Barnaul
            [224] => Asia/Beirut
            [225] => Asia/Bishkek
            [226] => Asia/Brunei
            [227] => Asia/Chita
            [228] => Asia/Choibalsan
            [229] => Asia/Colombo
            [230] => Asia/Damascus
            [231] => Asia/Dhaka
            [232] => Asia/Dili
            [233] => Asia/Dubai
            [234] => Asia/Dushanbe
            [235] => Asia/Famagusta
            [236] => Asia/Gaza
            [237] => Asia/Hebron
            [238] => Asia/Ho_Chi_Minh
            [239] => Asia/Hong_Kong
            [240] => Asia/Hovd
            [241] => Asia/Irkutsk
            [242] => Asia/Jakarta
            [243] => Asia/Jayapura
            [244] => Asia/Jerusalem
            [245] => Asia/Kabul
            [246] => Asia/Kamchatka
            [247] => Asia/Karachi
            [248] => Asia/Kathmandu
            [249] => Asia/Khandyga
            [250] => Asia/Kolkata
            [251] => Asia/Krasnoyarsk
            [252] => Asia/Kuala_Lumpur
            [253] => Asia/Kuching
            [254] => Asia/Kuwait
            [255] => Asia/Macau
            [256] => Asia/Magadan
            [257] => Asia/Makassar
            [258] => Asia/Manila
            [259] => Asia/Muscat
            [260] => Asia/Nicosia
            [261] => Asia/Novokuznetsk
            [262] => Asia/Novosibirsk
            [263] => Asia/Omsk
            [264] => Asia/Oral
            [265] => Asia/Phnom_Penh
            [266] => Asia/Pontianak
            [267] => Asia/Pyongyang
            [268] => Asia/Qatar
            [269] => Asia/Qostanay
            [270] => Asia/Qyzylorda
            [271] => Asia/Riyadh
            [272] => Asia/Sakhalin
            [273] => Asia/Samarkand
            [274] => Asia/Seoul
            [275] => Asia/Shanghai
            [276] => Asia/Singapore
            [277] => Asia/Srednekolymsk
            [278] => Asia/Taipei
            [279] => Asia/Tashkent
            [280] => Asia/Tbilisi
            [281] => Asia/Tehran
            [282] => Asia/Thimphu
            [283] => Asia/Tokyo
            [284] => Asia/Tomsk
            [285] => Asia/Ulaanbaatar
            [286] => Asia/Urumqi
            [287] => Asia/Ust-Nera
            [288] => Asia/Vientiane
            [289] => Asia/Vladivostok
            [290] => Asia/Yakutsk
            [291] => Asia/Yangon
            [292] => Asia/Yekaterinburg
            [293] => Asia/Yerevan
            [294] => Atlantic/Azores
            [295] => Atlantic/Bermuda
            [296] => Atlantic/Canary
            [297] => Atlantic/Cape_Verde
            [298] => Atlantic/Faroe
            [299] => Atlantic/Madeira
            [300] => Atlantic/Reykjavik
            [301] => Atlantic/South_Georgia
            [302] => Atlantic/St_Helena
            [303] => Atlantic/Stanley
            [304] => Australia/Adelaide
            [305] => Australia/Brisbane
            [306] => Australia/Broken_Hill
            [307] => Australia/Currie
            [308] => Australia/Darwin
            [309] => Australia/Eucla
            [310] => Australia/Hobart
            [311] => Australia/Lindeman
            [312] => Australia/Lord_Howe
            [313] => Australia/Melbourne
            [314] => Australia/Perth
            [315] => Australia/Sydney
            [316] => Europe/Amsterdam
            [317] => Europe/Andorra
            [318] => Europe/Astrakhan
            [319] => Europe/Athens
            [320] => Europe/Belgrade
            [321] => Europe/Berlin
            [322] => Europe/Bratislava
            [323] => Europe/Brussels
            [324] => Europe/Bucharest
            [325] => Europe/Budapest
            [326] => Europe/Busingen
            [327] => Europe/Chisinau
            [328] => Europe/Copenhagen
            [329] => Europe/Dublin
            [330] => Europe/Gibraltar
            [331] => Europe/Guernsey
            [332] => Europe/Helsinki
            [333] => Europe/Isle_of_Man
            [334] => Europe/Istanbul
            [335] => Europe/Jersey
            [336] => Europe/Kaliningrad
            [337] => Europe/Kiev
            [338] => Europe/Kirov
            [339] => Europe/Lisbon
            [340] => Europe/Ljubljana
            [341] => Europe/London
            [342] => Europe/Luxembourg
            [343] => Europe/Madrid
            [344] => Europe/Malta
            [345] => Europe/Mariehamn
            [346] => Europe/Minsk
            [347] => Europe/Monaco
            [348] => Europe/Moscow
            [349] => Europe/Oslo
            [350] => Europe/Paris
            [351] => Europe/Podgorica
            [352] => Europe/Prague
            [353] => Europe/Riga
            [354] => Europe/Rome
            [355] => Europe/Samara
            [356] => Europe/San_Marino
            [357] => Europe/Sarajevo
            [358] => Europe/Saratov
            [359] => Europe/Simferopol
            [360] => Europe/Skopje
            [361] => Europe/Sofia
            [362] => Europe/Stockholm
            [363] => Europe/Tallinn
            [364] => Europe/Tirane
            [365] => Europe/Ulyanovsk
            [366] => Europe/Uzhgorod
            [367] => Europe/Vaduz
            [368] => Europe/Vatican
            [369] => Europe/Vienna
            [370] => Europe/Vilnius
            [371] => Europe/Volgograd
            [372] => Europe/Warsaw
            [373] => Europe/Zagreb
            [374] => Europe/Zaporozhye
            [375] => Europe/Zurich
            [376] => Indian/Antananarivo
            [377] => Indian/Chagos
            [378] => Indian/Christmas
            [379] => Indian/Cocos
            [380] => Indian/Comoro
            [381] => Indian/Kerguelen
            [382] => Indian/Mahe
            [383] => Indian/Maldives
            [384] => Indian/Mauritius
            [385] => Indian/Mayotte
            [386] => Indian/Reunion
            [387] => Pacific/Apia
            [388] => Pacific/Auckland
            [389] => Pacific/Bougainville
            [390] => Pacific/Chatham
            [391] => Pacific/Chuuk
            [392] => Pacific/Easter
            [393] => Pacific/Efate
            [394] => Pacific/Enderbury
            [395] => Pacific/Fakaofo
            [396] => Pacific/Fiji
            [397] => Pacific/Funafuti
            [398] => Pacific/Galapagos
            [399] => Pacific/Gambier
            [400] => Pacific/Guadalcanal
            [401] => Pacific/Guam
            [402] => Pacific/Honolulu
            [403] => Pacific/Kiritimati
            [404] => Pacific/Kosrae
            [405] => Pacific/Kwajalein
            [406] => Pacific/Majuro
            [407] => Pacific/Marquesas
            [408] => Pacific/Midway
            [409] => Pacific/Nauru
            [410] => Pacific/Niue
            [411] => Pacific/Norfolk
            [412] => Pacific/Noumea
            [413] => Pacific/Pago_Pago
            [414] => Pacific/Palau
            [415] => Pacific/Pitcairn
            [416] => Pacific/Pohnpei
            [417] => Pacific/Port_Moresby
            [418] => Pacific/Rarotonga
            [419] => Pacific/Saipan
            [420] => Pacific/Tahiti
            [421] => Pacific/Tarawa
            [422] => Pacific/Tongatapu
            [423] => Pacific/Wake
            [424] => Pacific/Wallis
            [425] => UTC
        )
        output includes all valid values of timezone_open and date_default_timezone_set functions' parameters
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(timezone_identifiers_list(1));
        echo "</pre>";
        output is 
        Array
        (
            [0] => Africa/Abidjan
            [1] => Africa/Accra
            [2] => Africa/Addis_Ababa
            [3] => Africa/Algiers
            [4] => Africa/Asmara
            [5] => Africa/Bamako
            [6] => Africa/Bangui
            [7] => Africa/Banjul
            [8] => Africa/Bissau
            [9] => Africa/Blantyre
            [10] => Africa/Brazzaville
            [11] => Africa/Bujumbura
            [12] => Africa/Cairo
            [13] => Africa/Casablanca
            [14] => Africa/Ceuta
            [15] => Africa/Conakry
            [16] => Africa/Dakar
            [17] => Africa/Dar_es_Salaam
            [18] => Africa/Djibouti
            [19] => Africa/Douala
            [20] => Africa/El_Aaiun
            [21] => Africa/Freetown
            [22] => Africa/Gaborone
            [23] => Africa/Harare
            [24] => Africa/Johannesburg
            [25] => Africa/Juba
            [26] => Africa/Kampala
            [27] => Africa/Khartoum
            [28] => Africa/Kigali
            [29] => Africa/Kinshasa
            [30] => Africa/Lagos
            [31] => Africa/Libreville
            [32] => Africa/Lome
            [33] => Africa/Luanda
            [34] => Africa/Lubumbashi
            [35] => Africa/Lusaka
            [36] => Africa/Malabo
            [37] => Africa/Maputo
            [38] => Africa/Maseru
            [39] => Africa/Mbabane
            [40] => Africa/Mogadishu
            [41] => Africa/Monrovia
            [42] => Africa/Nairobi
            [43] => Africa/Ndjamena
            [44] => Africa/Niamey
            [45] => Africa/Nouakchott
            [46] => Africa/Ouagadougou
            [47] => Africa/Porto-Novo
            [48] => Africa/Sao_Tome
            [49] => Africa/Tripoli
            [50] => Africa/Tunis
            [51] => Africa/Windhoek
        )
        all timezones of Africa are shown
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(timezone_identifiers_list(2));
        echo "</pre>";
        output is 
        Array
        (
            [0] => America/Adak
            [1] => America/Anchorage
            [2] => America/Anguilla
            [3] => America/Antigua
            [4] => America/Araguaina
            [5] => America/Argentina/Buenos_Aires
            [6] => America/Argentina/Catamarca
            [7] => America/Argentina/Cordoba
            [8] => America/Argentina/Jujuy
            [9] => America/Argentina/La_Rioja
            [10] => America/Argentina/Mendoza
            [11] => America/Argentina/Rio_Gallegos
            [12] => America/Argentina/Salta
            [13] => America/Argentina/San_Juan
            [14] => America/Argentina/San_Luis
            [15] => America/Argentina/Tucuman
            [16] => America/Argentina/Ushuaia
            [17] => America/Aruba
            [18] => America/Asuncion
            [19] => America/Atikokan
            [20] => America/Bahia
            [21] => America/Bahia_Banderas
            [22] => America/Barbados
            [23] => America/Belem
            [24] => America/Belize
            [25] => America/Blanc-Sablon
            [26] => America/Boa_Vista
            [27] => America/Bogota
            [28] => America/Boise
            [29] => America/Cambridge_Bay
            [30] => America/Campo_Grande
            [31] => America/Cancun
            [32] => America/Caracas
            [33] => America/Cayenne
            [34] => America/Cayman
            [35] => America/Chicago
            [36] => America/Chihuahua
            [37] => America/Costa_Rica
            [38] => America/Creston
            [39] => America/Cuiaba
            [40] => America/Curacao
            [41] => America/Danmarkshavn
            [42] => America/Dawson
            [43] => America/Dawson_Creek
            [44] => America/Denver
            [45] => America/Detroit
            [46] => America/Dominica
            [47] => America/Edmonton
            [48] => America/Eirunepe
            [49] => America/El_Salvador
            [50] => America/Fort_Nelson
            [51] => America/Fortaleza
            [52] => America/Glace_Bay
            [53] => America/Godthab
            [54] => America/Goose_Bay
            [55] => America/Grand_Turk
            [56] => America/Grenada
            [57] => America/Guadeloupe
            [58] => America/Guatemala
            [59] => America/Guayaquil
            [60] => America/Guyana
            [61] => America/Halifax
            [62] => America/Havana
            [63] => America/Hermosillo
            [64] => America/Indiana/Indianapolis
            [65] => America/Indiana/Knox
            [66] => America/Indiana/Marengo
            [67] => America/Indiana/Petersburg
            [68] => America/Indiana/Tell_City
            [69] => America/Indiana/Vevay
            [70] => America/Indiana/Vincennes
            [71] => America/Indiana/Winamac
            [72] => America/Inuvik
            [73] => America/Iqaluit
            [74] => America/Jamaica
            [75] => America/Juneau
            [76] => America/Kentucky/Louisville
            [77] => America/Kentucky/Monticello
            [78] => America/Kralendijk
            [79] => America/La_Paz
            [80] => America/Lima
            [81] => America/Los_Angeles
            [82] => America/Lower_Princes
            [83] => America/Maceio
            [84] => America/Managua
            [85] => America/Manaus
            [86] => America/Marigot
            [87] => America/Martinique
            [88] => America/Matamoros
            [89] => America/Mazatlan
            [90] => America/Menominee
            [91] => America/Merida
            [92] => America/Metlakatla
            [93] => America/Mexico_City
            [94] => America/Miquelon
            [95] => America/Moncton
            [96] => America/Monterrey
            [97] => America/Montevideo
            [98] => America/Montserrat
            [99] => America/Nassau
            [100] => America/New_York
            [101] => America/Nipigon
            [102] => America/Nome
            [103] => America/Noronha
            [104] => America/North_Dakota/Beulah
            [105] => America/North_Dakota/Center
            [106] => America/North_Dakota/New_Salem
            [107] => America/Ojinaga
            [108] => America/Panama
            [109] => America/Pangnirtung
            [110] => America/Paramaribo
            [111] => America/Phoenix
            [112] => America/Port-au-Prince
            [113] => America/Port_of_Spain
            [114] => America/Porto_Velho
            [115] => America/Puerto_Rico
            [116] => America/Punta_Arenas
            [117] => America/Rainy_River
            [118] => America/Rankin_Inlet
            [119] => America/Recife
            [120] => America/Regina
            [121] => America/Resolute
            [122] => America/Rio_Branco
            [123] => America/Santarem
            [124] => America/Santiago
            [125] => America/Santo_Domingo
            [126] => America/Sao_Paulo
            [127] => America/Scoresbysund
            [128] => America/Sitka
            [129] => America/St_Barthelemy
            [130] => America/St_Johns
            [131] => America/St_Kitts
            [132] => America/St_Lucia
            [133] => America/St_Thomas
            [134] => America/St_Vincent
            [135] => America/Swift_Current
            [136] => America/Tegucigalpa
            [137] => America/Thule
            [138] => America/Thunder_Bay
            [139] => America/Tijuana
            [140] => America/Toronto
            [141] => America/Tortola
            [142] => America/Vancouver
            [143] => America/Whitehorse
            [144] => America/Winnipeg
            [145] => America/Yakutat
            [146] => America/Yellowknife
        )
        all timezones of America are shown
    */
?>
<?php
    /*
        echo "<pre>";
        print_r(timezone_identifiers_list(16));
        echo "</pre>";
        output is 
        Array
        (
            [0] => Asia/Aden
            [1] => Asia/Almaty
            [2] => Asia/Amman
            [3] => Asia/Anadyr
            [4] => Asia/Aqtau
            [5] => Asia/Aqtobe
            [6] => Asia/Ashgabat
            [7] => Asia/Atyrau
            [8] => Asia/Baghdad
            [9] => Asia/Bahrain
            [10] => Asia/Baku
            [11] => Asia/Bangkok
            [12] => Asia/Barnaul
            [13] => Asia/Beirut
            [14] => Asia/Bishkek
            [15] => Asia/Brunei
            [16] => Asia/Chita
            [17] => Asia/Choibalsan
            [18] => Asia/Colombo
            [19] => Asia/Damascus
            [20] => Asia/Dhaka
            [21] => Asia/Dili
            [22] => Asia/Dubai
            [23] => Asia/Dushanbe
            [24] => Asia/Famagusta
            [25] => Asia/Gaza
            [26] => Asia/Hebron
            [27] => Asia/Ho_Chi_Minh
            [28] => Asia/Hong_Kong
            [29] => Asia/Hovd
            [30] => Asia/Irkutsk
            [31] => Asia/Jakarta
            [32] => Asia/Jayapura
            [33] => Asia/Jerusalem
            [34] => Asia/Kabul
            [35] => Asia/Kamchatka
            [36] => Asia/Karachi
            [37] => Asia/Kathmandu
            [38] => Asia/Khandyga
            [39] => Asia/Kolkata
            [40] => Asia/Krasnoyarsk
            [41] => Asia/Kuala_Lumpur
            [42] => Asia/Kuching
            [43] => Asia/Kuwait
            [44] => Asia/Macau
            [45] => Asia/Magadan
            [46] => Asia/Makassar
            [47] => Asia/Manila
            [48] => Asia/Muscat
            [49] => Asia/Nicosia
            [50] => Asia/Novokuznetsk
            [51] => Asia/Novosibirsk
            [52] => Asia/Omsk
            [53] => Asia/Oral
            [54] => Asia/Phnom_Penh
            [55] => Asia/Pontianak
            [56] => Asia/Pyongyang
            [57] => Asia/Qatar
            [58] => Asia/Qostanay
            [59] => Asia/Qyzylorda
            [60] => Asia/Riyadh
            [61] => Asia/Sakhalin
            [62] => Asia/Samarkand
            [63] => Asia/Seoul
            [64] => Asia/Shanghai
            [65] => Asia/Singapore
            [66] => Asia/Srednekolymsk
            [67] => Asia/Taipei
            [68] => Asia/Tashkent
            [69] => Asia/Tbilisi
            [70] => Asia/Tehran
            [71] => Asia/Thimphu
            [72] => Asia/Tokyo
            [73] => Asia/Tomsk
            [74] => Asia/Ulaanbaatar
            [75] => Asia/Urumqi
            [76] => Asia/Ust-Nera
            [77] => Asia/Vientiane
            [78] => Asia/Vladivostok
            [79] => Asia/Yakutsk
            [80] => Asia/Yangon
            [81] => Asia/Yekaterinburg
            [82] => Asia/Yerevan
        )
        all timezones of Asia are shown
    */
?>
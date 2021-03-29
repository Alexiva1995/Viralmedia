<?php

use Illuminate\Database\Seeder;
// modelo
use App\Models\Timezone;

class TimeZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTimezone = [
        
                [
                  "id"=>"3",
                  "list_value"=>"UTC-11",
                  "list_text"=>"(UTC-11:00) Coordinated Universal Time-11",
                  "list_utc"=>"Pacific/Midway"
                ],
                [
                  "id"=>"4",
                  "list_value"=>"UTC-11",
                  "list_text"=>"(UTC-11:00) Coordinated Universal Time-11",
                  "list_utc"=>"Pacific/Niue"
                ],
                [
                  "id"=>"5",
                  "list_value"=>"UTC-11",
                  "list_text"=>"(UTC-11:00) Coordinated Universal Time-11",
                  "list_utc"=>"Pacific/Pago_Pago"
                ],
                [
                  "id"=>"7",
                  "list_value"=>"Hawaiian Standard Time",
                  "list_text"=>"(UTC-10:00) Hawaii",
                  "list_utc"=>"Pacific/Honolulu"
                ],
                [
                  "id"=>"8",
                  "list_value"=>"Hawaiian Standard Time",
                  "list_text"=>"(UTC-10:00) Hawaii",
                  "list_utc"=>"Pacific/Johnston"
                ],
                [
                  "id"=>"9",
                  "list_value"=>"Hawaiian Standard Time",
                  "list_text"=>"(UTC-10:00) Hawaii",
                  "list_utc"=>"Pacific/Rarotonga"
                ],
                [
                  "id"=>"10",
                  "list_value"=>"Hawaiian Standard Time",
                  "list_text"=>"(UTC-10:00) Hawaii",
                  "list_utc"=>"Pacific/Tahiti"
                ],
                [
                  "id"=>"11",
                  "list_value"=>"Alaskan Standard Time",
                  "list_text"=>"(UTC-09:00) Alaska",
                  "list_utc"=>"America/Anchorage"
                ],
                [
                  "id"=>"12",
                  "list_value"=>"Alaskan Standard Time",
                  "list_text"=>"(UTC-09:00) Alaska",
                  "list_utc"=>"America/Juneau"
                ],
                [
                  "id"=>"13",
                  "list_value"=>"Alaskan Standard Time",
                  "list_text"=>"(UTC-09:00) Alaska",
                  "list_utc"=>"America/Nome"
                ],
                [
                  "id"=>"14",
                  "list_value"=>"Alaskan Standard Time",
                  "list_text"=>"(UTC-09:00) Alaska",
                  "list_utc"=>"America/Sitka"
                ],
                [
                  "id"=>"15",
                  "list_value"=>"Alaskan Standard Time",
                  "list_text"=>"(UTC-09:00) Alaska",
                  "list_utc"=>"America/Yakutat"
                ],
                [
                  "id"=>"16",
                  "list_value"=>"Pacific Standard Time (Mexico)",
                  "list_text"=>"(UTC-08:00) Baja California",
                  "list_utc"=>"America/Santa_Isabel"
                ],
                [
                  "id"=>"17",
                  "list_value"=>"Pacific Daylight Time",
                  "list_text"=>"(UTC-07:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Dawson"
                ],
                [
                  "id"=>"18",
                  "list_value"=>"Pacific Daylight Time",
                  "list_text"=>"(UTC-07:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Los_Angeles"
                ],
                [
                  "id"=>"19",
                  "list_value"=>"Pacific Daylight Time",
                  "list_text"=>"(UTC-07:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Tijuana"
                ],
                [
                  "id"=>"20",
                  "list_value"=>"Pacific Daylight Time",
                  "list_text"=>"(UTC-07:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Vancouver"
                ],
                [
                  "id"=>"21",
                  "list_value"=>"Pacific Daylight Time",
                  "list_text"=>"(UTC-07:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Whitehorse"
                ],
                [
                  "id"=>"22",
                  "list_value"=>"Pacific Standard Time",
                  "list_text"=>"(UTC-08:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Dawson"
                ],
                [
                  "id"=>"23",
                  "list_value"=>"Pacific Standard Time",
                  "list_text"=>"(UTC-08:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Los_Angeles"
                ],
                [
                  "id"=>"24",
                  "list_value"=>"Pacific Standard Time",
                  "list_text"=>"(UTC-08:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Tijuana"
                ],
                [
                  "id"=>"25",
                  "list_value"=>"Pacific Standard Time",
                  "list_text"=>"(UTC-08:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Vancouver"
                ],
                [
                  "id"=>"26",
                  "list_value"=>"Pacific Standard Time",
                  "list_text"=>"(UTC-08:00) Pacific Time (US & Canada)",
                  "list_utc"=>"America/Whitehorse"
                ],
                [
                  "id"=>"28",
                  "list_value"=>"US Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Arizona",
                  "list_utc"=>"America/Creston"
                ],
                [
                  "id"=>"29",
                  "list_value"=>"US Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Arizona",
                  "list_utc"=>"America/Dawson_Creek"
                ],
                [
                  "id"=>"30",
                  "list_value"=>"US Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Arizona",
                  "list_utc"=>"America/Hermosillo"
                ],
                [
                  "id"=>"31",
                  "list_value"=>"US Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Arizona",
                  "list_utc"=>"America/Phoenix"
                ],
                [
                  "id"=>"33",
                  "list_value"=>"Mountain Standard Time (Mexico)",
                  "list_text"=>"(UTC-07:00) Chihuahua, La Paz, Mazatlan",
                  "list_utc"=>"America/Chihuahua"
                ],
                [
                  "id"=>"34",
                  "list_value"=>"Mountain Standard Time (Mexico)",
                  "list_text"=>"(UTC-07:00) Chihuahua, La Paz, Mazatlan",
                  "list_utc"=>"America/Mazatlan"
                ],
                [
                  "id"=>"35",
                  "list_value"=>"Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Mountain Time (US & Canada)",
                  "list_utc"=>"America/Boise"
                ],
                [
                  "id"=>"36",
                  "list_value"=>"Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Mountain Time (US & Canada)",
                  "list_utc"=>"America/Cambridge_Bay"
                ],
                [
                  "id"=>"37",
                  "list_value"=>"Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Mountain Time (US & Canada)",
                  "list_utc"=>"America/Denver"
                ],
                [
                  "id"=>"38",
                  "list_value"=>"Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Mountain Time (US & Canada)",
                  "list_utc"=>"America/Edmonton"
                ],
                [
                  "id"=>"39",
                  "list_value"=>"Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Mountain Time (US & Canada)",
                  "list_utc"=>"America/Inuvik"
                ],
                [
                  "id"=>"40",
                  "list_value"=>"Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Mountain Time (US & Canada)",
                  "list_utc"=>"America/Ojinaga"
                ],
                [
                  "id"=>"41",
                  "list_value"=>"Mountain Standard Time",
                  "list_text"=>"(UTC-07:00) Mountain Time (US & Canada)",
                  "list_utc"=>"America/Yellowknife"
                ],
                [
                  "id"=>"43",
                  "list_value"=>"Central America Standard Time",
                  "list_text"=>"(UTC-06:00) Central America",
                  "list_utc"=>"America/Belize"
                ],
                [
                  "id"=>"44",
                  "list_value"=>"Central America Standard Time",
                  "list_text"=>"(UTC-06:00) Central America",
                  "list_utc"=>"America/Costa_Rica"
                ],
                [
                  "id"=>"45",
                  "list_value"=>"Central America Standard Time",
                  "list_text"=>"(UTC-06:00) Central America",
                  "list_utc"=>"America/El_Salvador"
                ],
                [
                  "id"=>"46",
                  "list_value"=>"Central America Standard Time",
                  "list_text"=>"(UTC-06:00) Central America",
                  "list_utc"=>"America/Guatemala"
                ],
                [
                  "id"=>"47",
                  "list_value"=>"Central America Standard Time",
                  "list_text"=>"(UTC-06:00) Central America",
                  "list_utc"=>"America/Managua"
                ],
                [
                  "id"=>"48",
                  "list_value"=>"Central America Standard Time",
                  "list_text"=>"(UTC-06:00) Central America",
                  "list_utc"=>"America/Tegucigalpa"
                ],
                [
                  "id"=>"50",
                  "list_value"=>"Central America Standard Time",
                  "list_text"=>"(UTC-06:00) Central America",
                  "list_utc"=>"Pacific/Galapagos"
                ],
                [
                  "id"=>"51",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/Chicago"
                ],
                [
                  "id"=>"52",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/Indiana/Knox"
                ],
                [
                  "id"=>"53",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/Indiana/Tell_City"
                ],
                [
                  "id"=>"54",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/Matamoros"
                ],
                [
                  "id"=>"55",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/Menominee"
                ],
                [
                  "id"=>"56",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/North_Dakota/Beulah"
                ],
                [
                  "id"=>"57",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/North_Dakota/Center"
                ],
                [
                  "id"=>"58",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/North_Dakota/New_Salem"
                ],
                [
                  "id"=>"59",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/Rainy_River"
                ],
                [
                  "id"=>"60",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/Rankin_Inlet"
                ],
                [
                  "id"=>"61",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/Resolute"
                ],
                [
                  "id"=>"62",
                  "list_value"=>"Central Standard Time",
                  "list_text"=>"(UTC-06:00) Central Time (US & Canada)",
                  "list_utc"=>"America/Winnipeg"
                ],
                [
                  "id"=>"64",
                  "list_value"=>"Central Standard Time (Mexico)",
                  "list_text"=>"(UTC-06:00) Guadalajara, Mexico City, Monterrey",
                  "list_utc"=>"America/Bahia_Banderas"
                ],
                [
                  "id"=>"65",
                  "list_value"=>"Central Standard Time (Mexico)",
                  "list_text"=>"(UTC-06:00) Guadalajara, Mexico City, Monterrey",
                  "list_utc"=>"America/Cancun"
                ],
                [
                  "id"=>"66",
                  "list_value"=>"Central Standard Time (Mexico)",
                  "list_text"=>"(UTC-06:00) Guadalajara, Mexico City, Monterrey",
                  "list_utc"=>"America/Merida"
                ],
                [
                  "id"=>"67",
                  "list_value"=>"Central Standard Time (Mexico)",
                  "list_text"=>"(UTC-06:00) Guadalajara, Mexico City, Monterrey",
                  "list_utc"=>"America/Mexico_City"
                ],
                [
                  "id"=>"68",
                  "list_value"=>"Central Standard Time (Mexico)",
                  "list_text"=>"(UTC-06:00) Guadalajara, Mexico City, Monterrey",
                  "list_utc"=>"America/Monterrey"
                ],
                [
                  "id"=>"69",
                  "list_value"=>"Canada Central Standard Time",
                  "list_text"=>"(UTC-06:00) Saskatchewan",
                  "list_utc"=>"America/Regina"
                ],
                [
                  "id"=>"70",
                  "list_value"=>"Canada Central Standard Time",
                  "list_text"=>"(UTC-06:00) Saskatchewan",
                  "list_utc"=>"America/Swift_Current"
                ],
                [
                  "id"=>"71",
                  "list_value"=>"SA Pacific Standard Time",
                  "list_text"=>"(UTC-05:00) Bogota, Lima, Quito",
                  "list_utc"=>"America/Bogota"
                ],
                [
                  "id"=>"72",
                  "list_value"=>"SA Pacific Standard Time",
                  "list_text"=>"(UTC-05:00) Bogota, Lima, Quito",
                  "list_utc"=>"America/Cayman"
                ],
                [
                  "id"=>"73",
                  "list_value"=>"SA Pacific Standard Time",
                  "list_text"=>"(UTC-05:00) Bogota, Lima, Quito",
                  "list_utc"=>"America/Coral_Harbour"
                ],
                [
                  "id"=>"74",
                  "list_value"=>"SA Pacific Standard Time",
                  "list_text"=>"(UTC-05:00) Bogota, Lima, Quito",
                  "list_utc"=>"America/Eirunepe"
                ],
                [
                  "id"=>"75",
                  "list_value"=>"SA Pacific Standard Time",
                  "list_text"=>"(UTC-05:00) Bogota, Lima, Quito",
                  "list_utc"=>"America/Guayaquil"
                ],
                [
                  "id"=>"76",
                  "list_value"=>"SA Pacific Standard Time",
                  "list_text"=>"(UTC-05:00) Bogota, Lima, Quito",
                  "list_utc"=>"America/Jamaica"
                ],
                [
                  "id"=>"77",
                  "list_value"=>"SA Pacific Standard Time",
                  "list_text"=>"(UTC-05:00) Bogota, Lima, Quito",
                  "list_utc"=>"America/Lima"
                ],
                [
                  "id"=>"78",
                  "list_value"=>"SA Pacific Standard Time",
                  "list_text"=>"(UTC-05:00) Bogota, Lima, Quito",
                  "list_utc"=>"America/Panama"
                ],
                [
                  "id"=>"79",
                  "list_value"=>"SA Pacific Standard Time",
                  "list_text"=>"(UTC-05:00) Bogota, Lima, Quito",
                  "list_utc"=>"America/Rio_Branco"
                ],
                [
                  "id"=>"81",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Detroit"
                ],
                [
                  "id"=>"82",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Havana"
                ],
                [
                  "id"=>"83",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Indiana/Petersburg"
                ],
                [
                  "id"=>"84",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Indiana/Vincennes"
                ],
                [
                  "id"=>"85",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Indiana/Winamac"
                ],
                [
                  "id"=>"86",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Iqaluit"
                ],
                [
                  "id"=>"87",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Kentucky/Monticello"
                ],
                [
                  "id"=>"88",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Louisville"
                ],
                [
                  "id"=>"89",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Montreal"
                ],
                [
                  "id"=>"90",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Nassau"
                ],
                [
                  "id"=>"91",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/New_York"
                ],
                [
                  "id"=>"92",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Nipigon"
                ],
                [
                  "id"=>"93",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Pangnirtung"
                ],
                [
                  "id"=>"94",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Port-au-Prince"
                ],
                [
                  "id"=>"95",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Thunder_Bay"
                ],
                [
                  "id"=>"96",
                  "list_value"=>"Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Eastern Time (US & Canada)",
                  "list_utc"=>"America/Toronto"
                ],
                [
                  "id"=>"98",
                  "list_value"=>"US Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Indiana (East)",
                  "list_utc"=>"America/Indiana/Marengo"
                ],
                [
                  "id"=>"99",
                  "list_value"=>"US Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Indiana (East)",
                  "list_utc"=>"America/Indiana/Vevay"
                ],
                [
                  "id"=>"100",
                  "list_value"=>"US Eastern Standard Time",
                  "list_text"=>"(UTC-05:00) Indiana (East)",
                  "list_utc"=>"America/Indianapolis"
                ],
                [
                  "id"=>"101",
                  "list_value"=>"Venezuela Standard Time",
                  "list_text"=>"(UTC-04:30) Caracas",
                  "list_utc"=>"America/Caracas"
                ],
                [
                  "id"=>"102",
                  "list_value"=>"Paraguay Standard Time",
                  "list_text"=>"(UTC-04:00) Asuncion",
                  "list_utc"=>"America/Asuncion"
                ],
                [
                  "id"=>"103",
                  "list_value"=>"Atlantic Standard Time",
                  "list_text"=>"(UTC-04:00) Atlantic Time (Canada)",
                  "list_utc"=>"America/Glace_Bay"
                ],
                [
                  "id"=>"104",
                  "list_value"=>"Atlantic Standard Time",
                  "list_text"=>"(UTC-04:00) Atlantic Time (Canada)",
                  "list_utc"=>"America/Goose_Bay"
                ],
                [
                  "id"=>"105",
                  "list_value"=>"Atlantic Standard Time",
                  "list_text"=>"(UTC-04:00) Atlantic Time (Canada)",
                  "list_utc"=>"America/Halifax"
                ],
                [
                  "id"=>"106",
                  "list_value"=>"Atlantic Standard Time",
                  "list_text"=>"(UTC-04:00) Atlantic Time (Canada)",
                  "list_utc"=>"America/Moncton"
                ],
                [
                  "id"=>"107",
                  "list_value"=>"Atlantic Standard Time",
                  "list_text"=>"(UTC-04:00) Atlantic Time (Canada)",
                  "list_utc"=>"America/Thule"
                ],
                [
                  "id"=>"108",
                  "list_value"=>"Atlantic Standard Time",
                  "list_text"=>"(UTC-04:00) Atlantic Time (Canada)",
                  "list_utc"=>"Atlantic/Bermuda"
                ],
                [
                  "id"=>"109",
                  "list_value"=>"Central Brazilian Standard Time",
                  "list_text"=>"(UTC-04:00) Cuiaba",
                  "list_utc"=>"America/Campo_Grande"
                ],
                [
                  "id"=>"110",
                  "list_value"=>"Central Brazilian Standard Time",
                  "list_text"=>"(UTC-04:00) Cuiaba",
                  "list_utc"=>"America/Cuiaba"
                ],
                [
                  "id"=>"111",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Anguilla"
                ],
                [
                  "id"=>"112",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Antigua"
                ],
                [
                  "id"=>"113",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Aruba"
                ],
                [
                  "id"=>"114",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Barbados"
                ],
                [
                  "id"=>"115",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Blanc-Sablon"
                ],
                [
                  "id"=>"116",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Boa_Vista"
                ],
                [
                  "id"=>"117",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Curacao"
                ],
                [
                  "id"=>"118",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Dominica"
                ],
                [
                  "id"=>"119",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Grand_Turk"
                ],
                [
                  "id"=>"120",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Grenada"
                ],
                [
                  "id"=>"121",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Guadeloupe"
                ],
                [
                  "id"=>"122",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Guyana"
                ],
                [
                  "id"=>"123",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Kralendijk"
                ],
                [
                  "id"=>"124",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/La_Paz"
                ],
                [
                  "id"=>"125",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Lower_Princes"
                ],
                [
                  "id"=>"126",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Manaus"
                ],
                [
                  "id"=>"127",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Marigot"
                ],
                [
                  "id"=>"128",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Martinique"
                ],
                [
                  "id"=>"129",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Montserrat"
                ],
                [
                  "id"=>"130",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Port_of_Spain"
                ],
                [
                  "id"=>"131",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Porto_Velho"
                ],
                [
                  "id"=>"132",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Puerto_Rico"
                ],
                [
                  "id"=>"133",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Santo_Domingo"
                ],
                [
                  "id"=>"134",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/St_Barthelemy"
                ],
                [
                  "id"=>"135",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/St_Kitts"
                ],
                [
                  "id"=>"136",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/St_Lucia"
                ],
                [
                  "id"=>"137",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/St_Thomas"
                ],
                [
                  "id"=>"138",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/St_Vincent"
                ],
                [
                  "id"=>"139",
                  "list_value"=>"SA Western Standard Time",
                  "list_text"=>"(UTC-04:00) Georgetown, La Paz, Manaus, San Juan",
                  "list_utc"=>"America/Tortola"
                ],
                [
                  "id"=>"141",
                  "list_value"=>"Pacific SA Standard Time",
                  "list_text"=>"(UTC-04:00) Santiago",
                  "list_utc"=>"America/Santiago"
                ],
                [
                  "id"=>"142",
                  "list_value"=>"Pacific SA Standard Time",
                  "list_text"=>"(UTC-04:00) Santiago",
                  "list_utc"=>"Antarctica/Palmer"
                ],
                [
                  "id"=>"143",
                  "list_value"=>"Newfoundland Standard Time",
                  "list_text"=>"(UTC-03:30) Newfoundland",
                  "list_utc"=>"America/St_Johns"
                ],
                [
                  "id"=>"144",
                  "list_value"=>"E. South America Standard Time",
                  "list_text"=>"(UTC-03:00) Brasilia",
                  "list_utc"=>"America/Sao_Paulo"
                ],
                [
                  "id"=>"145",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Argentina/La_Rioja"
                ],
                [
                  "id"=>"146",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Argentina/Rio_Gallegos"
                ],
                [
                  "id"=>"147",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Argentina/Salta"
                ],
                [
                  "id"=>"148",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Argentina/San_Juan"
                ],
                [
                  "id"=>"149",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Argentina/San_Luis"
                ],
                [
                  "id"=>"150",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Argentina/Tucuman"
                ],
                [
                  "id"=>"151",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Argentina/Ushuaia"
                ],
                [
                  "id"=>"152",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Buenos_Aires"
                ],
                [
                  "id"=>"153",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Catamarca"
                ],
                [
                  "id"=>"154",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Cordoba"
                ],
                [
                  "id"=>"155",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Jujuy"
                ],
                [
                  "id"=>"156",
                  "list_value"=>"Argentina Standard Time",
                  "list_text"=>"(UTC-03:00) Buenos Aires",
                  "list_utc"=>"America/Mendoza"
                ],
                [
                  "id"=>"157",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"America/Araguaina"
                ],
                [
                  "id"=>"158",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"America/Belem"
                ],
                [
                  "id"=>"159",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"America/Cayenne"
                ],
                [
                  "id"=>"160",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"America/Fortaleza"
                ],
                [
                  "id"=>"161",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"America/Maceio"
                ],
                [
                  "id"=>"162",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"America/Paramaribo"
                ],
                [
                  "id"=>"163",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"America/Recife"
                ],
                [
                  "id"=>"164",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"America/Santarem"
                ],
                [
                  "id"=>"165",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"Antarctica/Rothera"
                ],
                [
                  "id"=>"166",
                  "list_value"=>"SA Eastern Standard Time",
                  "list_text"=>"(UTC-03:00) Cayenne, Fortaleza",
                  "list_utc"=>"Atlantic/Stanley"
                ],
                [
                  "id"=>"168",
                  "list_value"=>"Greenland Standard Time",
                  "list_text"=>"(UTC-03:00) Greenland",
                  "list_utc"=>"America/Godthab"
                ],
                [
                  "id"=>"169",
                  "list_value"=>"Montevideo Standard Time",
                  "list_text"=>"(UTC-03:00) Montevideo",
                  "list_utc"=>"America/Montevideo"
                ],
                [
                  "id"=>"170",
                  "list_value"=>"Bahia Standard Time",
                  "list_text"=>"(UTC-03:00) Salvador",
                  "list_utc"=>"America/Bahia"
                ],
                [
                  "id"=>"171",
                  "list_value"=>"UTC-02",
                  "list_text"=>"(UTC-02:00) Coordinated Universal Time-02",
                  "list_utc"=>"America/Noronha"
                ],
                [
                  "id"=>"172",
                  "list_value"=>"UTC-02",
                  "list_text"=>"(UTC-02:00) Coordinated Universal Time-02",
                  "list_utc"=>"Atlantic/South_Georgia"
                ],
                [
                  "id"=>"175",
                  "list_value"=>"Azores Standard Time",
                  "list_text"=>"(UTC-01:00) Azores",
                  "list_utc"=>"America/Scoresbysund"
                ],
                [
                  "id"=>"176",
                  "list_value"=>"Azores Standard Time",
                  "list_text"=>"(UTC-01:00) Azores",
                  "list_utc"=>"Atlantic/Azores"
                ],
                [
                  "id"=>"177",
                  "list_value"=>"Cape Verde Standard Time",
                  "list_text"=>"(UTC-01:00) Cape Verde Is.",
                  "list_utc"=>"Atlantic/Cape_Verde"
                ],
                [
                  "id"=>"179",
                  "list_value"=>"Morocco Standard Time",
                  "list_text"=>"(UTC) Casablanca",
                  "list_utc"=>"Africa/Casablanca"
                ],
                [
                  "id"=>"180",
                  "list_value"=>"Morocco Standard Time",
                  "list_text"=>"(UTC) Casablanca",
                  "list_utc"=>"Africa/El_Aaiun"
                ],
                [
                  "id"=>"181",
                  "list_value"=>"UTC",
                  "list_text"=>"(UTC) Coordinated Universal Time",
                  "list_utc"=>"America/Danmarkshavn"
                ],
                [
                  "id"=>"183",
                  "list_value"=>"GMT Standard Time",
                  "list_text"=>"(UTC) Edinburgh, London",
                  "list_utc"=>"Europe/Isle_of_Man"
                ],
                [
                  "id"=>"184",
                  "list_value"=>"GMT Standard Time",
                  "list_text"=>"(UTC) Edinburgh, London",
                  "list_utc"=>"Europe/Guernsey"
                ],
                [
                  "id"=>"185",
                  "list_value"=>"GMT Standard Time",
                  "list_text"=>"(UTC) Edinburgh, London",
                  "list_utc"=>"Europe/Jersey"
                ],
                [
                  "id"=>"186",
                  "list_value"=>"GMT Standard Time",
                  "list_text"=>"(UTC) Edinburgh, London",
                  "list_utc"=>"Europe/London"
                ],
                [
                  "id"=>"187",
                  "list_value"=>"British Summer Time",
                  "list_text"=>"(UTC+01:00) Edinburgh, London",
                  "list_utc"=>"Europe/Isle_of_Man"
                ],
                [
                  "id"=>"188",
                  "list_value"=>"British Summer Time",
                  "list_text"=>"(UTC+01:00) Edinburgh, London",
                  "list_utc"=>"Europe/Guernsey"
                ],
                [
                  "id"=>"189",
                  "list_value"=>"British Summer Time",
                  "list_text"=>"(UTC+01:00) Edinburgh, London",
                  "list_utc"=>"Europe/Jersey"
                ],
                [
                  "id"=>"190",
                  "list_value"=>"British Summer Time",
                  "list_text"=>"(UTC+01:00) Edinburgh, London",
                  "list_utc"=>"Europe/London"
                ],
                [
                  "id"=>"191",
                  "list_value"=>"GMT Standard Time",
                  "list_text"=>"(UTC) Dublin, Lisbon",
                  "list_utc"=>"Atlantic/Canary"
                ],
                [
                  "id"=>"192",
                  "list_value"=>"GMT Standard Time",
                  "list_text"=>"(UTC) Dublin, Lisbon",
                  "list_utc"=>"Atlantic/Faeroe"
                ],
                [
                  "id"=>"193",
                  "list_value"=>"GMT Standard Time",
                  "list_text"=>"(UTC) Dublin, Lisbon",
                  "list_utc"=>"Atlantic/Madeira"
                ],
                [
                  "id"=>"194",
                  "list_value"=>"GMT Standard Time",
                  "list_text"=>"(UTC) Dublin, Lisbon",
                  "list_utc"=>"Europe/Dublin"
                ],
                [
                  "id"=>"195",
                  "list_value"=>"GMT Standard Time",
                  "list_text"=>"(UTC) Dublin, Lisbon",
                  "list_utc"=>"Europe/Lisbon"
                ],
                [
                  "id"=>"196",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Abidjan"
                ],
                [
                  "id"=>"197",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Accra"
                ],
                [
                  "id"=>"198",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Bamako"
                ],
                [
                  "id"=>"199",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Banjul"
                ],
                [
                  "id"=>"200",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Bissau"
                ],
                [
                  "id"=>"201",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Conakry"
                ],
                [
                  "id"=>"202",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Dakar"
                ],
                [
                  "id"=>"203",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Freetown"
                ],
                [
                  "id"=>"204",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Lome"
                ],
                [
                  "id"=>"205",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Monrovia"
                ],
                [
                  "id"=>"206",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Nouakchott"
                ],
                [
                  "id"=>"207",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Ouagadougou"
                ],
                [
                  "id"=>"208",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Africa/Sao_Tome"
                ],
                [
                  "id"=>"209",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Atlantic/Reykjavik"
                ],
                [
                  "id"=>"210",
                  "list_value"=>"Greenwich Standard Time",
                  "list_text"=>"(UTC) Monrovia, Reykjavik",
                  "list_utc"=>"Atlantic/St_Helena"
                ],
                [
                  "id"=>"211",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Arctic/Longyearbyen"
                ],
                [
                  "id"=>"212",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Amsterdam"
                ],
                [
                  "id"=>"213",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Andorra"
                ],
                [
                  "id"=>"214",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Berlin"
                ],
                [
                  "id"=>"215",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Busingen"
                ],
                [
                  "id"=>"216",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Gibraltar"
                ],
                [
                  "id"=>"217",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Luxembourg"
                ],
                [
                  "id"=>"218",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Malta"
                ],
                [
                  "id"=>"219",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Monaco"
                ],
                [
                  "id"=>"220",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Oslo"
                ],
                [
                  "id"=>"221",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Rome"
                ],
                [
                  "id"=>"222",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/San_Marino"
                ],
                [
                  "id"=>"223",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Stockholm"
                ],
                [
                  "id"=>"224",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Vaduz"
                ],
                [
                  "id"=>"225",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Vatican"
                ],
                [
                  "id"=>"226",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Vienna"
                ],
                [
                  "id"=>"227",
                  "list_value"=>"W. Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
                  "list_utc"=>"Europe/Zurich"
                ],
                [
                  "id"=>"228",
                  "list_value"=>"Central Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague",
                  "list_utc"=>"Europe/Belgrade"
                ],
                [
                  "id"=>"229",
                  "list_value"=>"Central Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague",
                  "list_utc"=>"Europe/Bratislava"
                ],
                [
                  "id"=>"230",
                  "list_value"=>"Central Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague",
                  "list_utc"=>"Europe/Budapest"
                ],
                [
                  "id"=>"231",
                  "list_value"=>"Central Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague",
                  "list_utc"=>"Europe/Ljubljana"
                ],
                [
                  "id"=>"232",
                  "list_value"=>"Central Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague",
                  "list_utc"=>"Europe/Podgorica"
                ],
                [
                  "id"=>"233",
                  "list_value"=>"Central Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague",
                  "list_utc"=>"Europe/Prague"
                ],
                [
                  "id"=>"234",
                  "list_value"=>"Central Europe Standard Time",
                  "list_text"=>"(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague",
                  "list_utc"=>"Europe/Tirane"
                ],
                [
                  "id"=>"235",
                  "list_value"=>"Romance Standard Time",
                  "list_text"=>"(UTC+01:00) Brussels, Copenhagen, Madrid, Paris",
                  "list_utc"=>"Africa/Ceuta"
                ],
                [
                  "id"=>"236",
                  "list_value"=>"Romance Standard Time",
                  "list_text"=>"(UTC+01:00) Brussels, Copenhagen, Madrid, Paris",
                  "list_utc"=>"Europe/Brussels"
                ],
                [
                  "id"=>"237",
                  "list_value"=>"Romance Standard Time",
                  "list_text"=>"(UTC+01:00) Brussels, Copenhagen, Madrid, Paris",
                  "list_utc"=>"Europe/Copenhagen"
                ],
                [
                  "id"=>"238",
                  "list_value"=>"Romance Standard Time",
                  "list_text"=>"(UTC+01:00) Brussels, Copenhagen, Madrid, Paris",
                  "list_utc"=>"Europe/Madrid"
                ],
                [
                  "id"=>"239",
                  "list_value"=>"Romance Standard Time",
                  "list_text"=>"(UTC+01:00) Brussels, Copenhagen, Madrid, Paris",
                  "list_utc"=>"Europe/Paris"
                ],
                [
                  "id"=>"240",
                  "list_value"=>"Central European Standard Time",
                  "list_text"=>"(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb",
                  "list_utc"=>"Europe/Sarajevo"
                ],
                [
                  "id"=>"241",
                  "list_value"=>"Central European Standard Time",
                  "list_text"=>"(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb",
                  "list_utc"=>"Europe/Skopje"
                ],
                [
                  "id"=>"242",
                  "list_value"=>"Central European Standard Time",
                  "list_text"=>"(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb",
                  "list_utc"=>"Europe/Warsaw"
                ],
                [
                  "id"=>"243",
                  "list_value"=>"Central European Standard Time",
                  "list_text"=>"(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb",
                  "list_utc"=>"Europe/Zagreb"
                ],
                [
                  "id"=>"244",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Algiers"
                ],
                [
                  "id"=>"245",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Bangui"
                ],
                [
                  "id"=>"246",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Brazzaville"
                ],
                [
                  "id"=>"247",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Douala"
                ],
                [
                  "id"=>"248",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Kinshasa"
                ],
                [
                  "id"=>"249",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Lagos"
                ],
                [
                  "id"=>"250",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Libreville"
                ],
                [
                  "id"=>"251",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Luanda"
                ],
                [
                  "id"=>"252",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Malabo"
                ],
                [
                  "id"=>"253",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Ndjamena"
                ],
                [
                  "id"=>"254",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Niamey"
                ],
                [
                  "id"=>"255",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Porto-Novo"
                ],
                [
                  "id"=>"256",
                  "list_value"=>"W. Central Africa Standard Time",
                  "list_text"=>"(UTC+01:00) West Central Africa",
                  "list_utc"=>"Africa/Tunis"
                ],
                [
                  "id"=>"258",
                  "list_value"=>"Namibia Standard Time",
                  "list_text"=>"(UTC+01:00) Windhoek",
                  "list_utc"=>"Africa/Windhoek"
                ],
                [
                  "id"=>"259",
                  "list_value"=>"GTB Standard Time",
                  "list_text"=>"(UTC+02:00) Athens, Bucharest",
                  "list_utc"=>"Asia/Nicosia"
                ],
                [
                  "id"=>"260",
                  "list_value"=>"GTB Standard Time",
                  "list_text"=>"(UTC+02:00) Athens, Bucharest",
                  "list_utc"=>"Europe/Athens"
                ],
                [
                  "id"=>"261",
                  "list_value"=>"GTB Standard Time",
                  "list_text"=>"(UTC+02:00) Athens, Bucharest",
                  "list_utc"=>"Europe/Bucharest"
                ],
                [
                  "id"=>"262",
                  "list_value"=>"GTB Standard Time",
                  "list_text"=>"(UTC+02:00) Athens, Bucharest",
                  "list_utc"=>"Europe/Chisinau"
                ],
                [
                  "id"=>"263",
                  "list_value"=>"Middle East Standard Time",
                  "list_text"=>"(UTC+02:00) Beirut",
                  "list_utc"=>"Asia/Beirut"
                ],
                [
                  "id"=>"264",
                  "list_value"=>"Egypt Standard Time",
                  "list_text"=>"(UTC+02:00) Cairo",
                  "list_utc"=>"Africa/Cairo"
                ],
                [
                  "id"=>"265",
                  "list_value"=>"Syria Standard Time",
                  "list_text"=>"(UTC+02:00) Damascus",
                  "list_utc"=>"Asia/Damascus"
                ],
                [
                  "id"=>"266",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Asia/Nicosia"
                ],
                [
                  "id"=>"267",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Athens"
                ],
                [
                  "id"=>"268",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Bucharest"
                ],
                [
                  "id"=>"269",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Chisinau"
                ],
                [
                  "id"=>"270",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Helsinki"
                ],
                [
                  "id"=>"271",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Kiev"
                ],
                [
                  "id"=>"272",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Mariehamn"
                ],
                [
                  "id"=>"273",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Nicosia"
                ],
                [
                  "id"=>"274",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Riga"
                ],
                [
                  "id"=>"275",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Sofia"
                ],
                [
                  "id"=>"276",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Tallinn"
                ],
                [
                  "id"=>"277",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Uzhgorod"
                ],
                [
                  "id"=>"278",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Vilnius"
                ],
                [
                  "id"=>"279",
                  "list_value"=>"E. Europe Standard Time",
                  "list_text"=>"(UTC+02:00) E. Europe",
                  "list_utc"=>"Europe/Zaporozhye"
                ],
                [
                  "id"=>"280",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Blantyre"
                ],
                [
                  "id"=>"281",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Bujumbura"
                ],
                [
                  "id"=>"282",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Gaborone"
                ],
                [
                  "id"=>"283",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Harare"
                ],
                [
                  "id"=>"284",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Johannesburg"
                ],
                [
                  "id"=>"285",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Kigali"
                ],
                [
                  "id"=>"286",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Lubumbashi"
                ],
                [
                  "id"=>"287",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Lusaka"
                ],
                [
                  "id"=>"288",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Maputo"
                ],
                [
                  "id"=>"289",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Maseru"
                ],
                [
                  "id"=>"290",
                  "list_value"=>"South Africa Standard Time",
                  "list_text"=>"(UTC+02:00) Harare, Pretoria",
                  "list_utc"=>"Africa/Mbabane"
                ],
                [
                  "id"=>"292",
                  "list_value"=>"FLE Standard Time",
                  "list_text"=>"(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
                  "list_utc"=>"Europe/Helsinki"
                ],
                [
                  "id"=>"293",
                  "list_value"=>"FLE Standard Time",
                  "list_text"=>"(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
                  "list_utc"=>"Europe/Kiev"
                ],
                [
                  "id"=>"294",
                  "list_value"=>"FLE Standard Time",
                  "list_text"=>"(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
                  "list_utc"=>"Europe/Mariehamn"
                ],
                [
                  "id"=>"295",
                  "list_value"=>"FLE Standard Time",
                  "list_text"=>"(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
                  "list_utc"=>"Europe/Riga"
                ],
                [
                  "id"=>"296",
                  "list_value"=>"FLE Standard Time",
                  "list_text"=>"(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
                  "list_utc"=>"Europe/Sofia"
                ],
                [
                  "id"=>"297",
                  "list_value"=>"FLE Standard Time",
                  "list_text"=>"(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
                  "list_utc"=>"Europe/Tallinn"
                ],
                [
                  "id"=>"298",
                  "list_value"=>"FLE Standard Time",
                  "list_text"=>"(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
                  "list_utc"=>"Europe/Uzhgorod"
                ],
                [
                  "id"=>"299",
                  "list_value"=>"FLE Standard Time",
                  "list_text"=>"(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
                  "list_utc"=>"Europe/Vilnius"
                ],
                [
                  "id"=>"300",
                  "list_value"=>"FLE Standard Time",
                  "list_text"=>"(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius",
                  "list_utc"=>"Europe/Zaporozhye"
                ],
                [
                  "id"=>"301",
                  "list_value"=>"Turkey Standard Time",
                  "list_text"=>"(UTC+03:00) Istanbul",
                  "list_utc"=>"Europe/Istanbul"
                ],
                [
                  "id"=>"302",
                  "list_value"=>"Israel Standard Time",
                  "list_text"=>"(UTC+02:00) Jerusalem",
                  "list_utc"=>"Asia/Jerusalem"
                ],
                [
                  "id"=>"303",
                  "list_value"=>"Libya Standard Time",
                  "list_text"=>"(UTC+02:00) Tripoli",
                  "list_utc"=>"Africa/Tripoli"
                ],
                [
                  "id"=>"304",
                  "list_value"=>"Jordan Standard Time",
                  "list_text"=>"(UTC+03:00) Amman",
                  "list_utc"=>"Asia/Amman"
                ],
                [
                  "id"=>"305",
                  "list_value"=>"Arabic Standard Time",
                  "list_text"=>"(UTC+03:00) Baghdad",
                  "list_utc"=>"Asia/Baghdad"
                ],
                [
                  "id"=>"306",
                  "list_value"=>"Kaliningrad Standard Time",
                  "list_text"=>"(UTC+02:00) Kaliningrad",
                  "list_utc"=>"Europe/Kaliningrad"
                ],
                [
                  "id"=>"307",
                  "list_value"=>"Arab Standard Time",
                  "list_text"=>"(UTC+03:00) Kuwait, Riyadh",
                  "list_utc"=>"Asia/Aden"
                ],
                [
                  "id"=>"308",
                  "list_value"=>"Arab Standard Time",
                  "list_text"=>"(UTC+03:00) Kuwait, Riyadh",
                  "list_utc"=>"Asia/Bahrain"
                ],
                [
                  "id"=>"309",
                  "list_value"=>"Arab Standard Time",
                  "list_text"=>"(UTC+03:00) Kuwait, Riyadh",
                  "list_utc"=>"Asia/Kuwait"
                ],
                [
                  "id"=>"310",
                  "list_value"=>"Arab Standard Time",
                  "list_text"=>"(UTC+03:00) Kuwait, Riyadh",
                  "list_utc"=>"Asia/Qatar"
                ],
                [
                  "id"=>"311",
                  "list_value"=>"Arab Standard Time",
                  "list_text"=>"(UTC+03:00) Kuwait, Riyadh",
                  "list_utc"=>"Asia/Riyadh"
                ],
                [
                  "id"=>"312",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Africa/Addis_Ababa"
                ],
                [
                  "id"=>"313",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Africa/Asmera"
                ],
                [
                  "id"=>"314",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Africa/Dar_es_Salaam"
                ],
                [
                  "id"=>"315",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Africa/Djibouti"
                ],
                [
                  "id"=>"316",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Africa/Juba"
                ],
                [
                  "id"=>"317",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Africa/Kampala"
                ],
                [
                  "id"=>"318",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Africa/Khartoum"
                ],
                [
                  "id"=>"319",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Africa/Mogadishu"
                ],
                [
                  "id"=>"320",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Africa/Nairobi"
                ],
                [
                  "id"=>"321",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Antarctica/Syowa"
                ],
                [
                  "id"=>"323",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Indian/Antananarivo"
                ],
                [
                  "id"=>"324",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Indian/Comoro"
                ],
                [
                  "id"=>"325",
                  "list_value"=>"E. Africa Standard Time",
                  "list_text"=>"(UTC+03:00) Nairobi",
                  "list_utc"=>"Indian/Mayotte"
                ],
                [
                  "id"=>"326",
                  "list_value"=>"Moscow Standard Time",
                  "list_text"=>"(UTC+03:00) Moscow, St. Petersburg, Volgograd, Minsk",
                  "list_utc"=>"Europe/Kirov"
                ],
                [
                  "id"=>"327",
                  "list_value"=>"Moscow Standard Time",
                  "list_text"=>"(UTC+03:00) Moscow, St. Petersburg, Volgograd, Minsk",
                  "list_utc"=>"Europe/Moscow"
                ],
                [
                  "id"=>"328",
                  "list_value"=>"Moscow Standard Time",
                  "list_text"=>"(UTC+03:00) Moscow, St. Petersburg, Volgograd, Minsk",
                  "list_utc"=>"Europe/Simferopol"
                ],
                [
                  "id"=>"329",
                  "list_value"=>"Moscow Standard Time",
                  "list_text"=>"(UTC+03:00) Moscow, St. Petersburg, Volgograd, Minsk",
                  "list_utc"=>"Europe/Volgograd"
                ],
                [
                  "id"=>"330",
                  "list_value"=>"Moscow Standard Time",
                  "list_text"=>"(UTC+03:00) Moscow, St. Petersburg, Volgograd, Minsk",
                  "list_utc"=>"Europe/Minsk"
                ],
                [
                  "id"=>"331",
                  "list_value"=>"Samara Time",
                  "list_text"=>"(UTC+04:00) Samara, Ulyanovsk, Saratov",
                  "list_utc"=>"Europe/Astrakhan"
                ],
                [
                  "id"=>"332",
                  "list_value"=>"Samara Time",
                  "list_text"=>"(UTC+04:00) Samara, Ulyanovsk, Saratov",
                  "list_utc"=>"Europe/Samara"
                ],
                [
                  "id"=>"333",
                  "list_value"=>"Samara Time",
                  "list_text"=>"(UTC+04:00) Samara, Ulyanovsk, Saratov",
                  "list_utc"=>"Europe/Ulyanovsk"
                ],
                [
                  "id"=>"334",
                  "list_value"=>"Iran Standard Time",
                  "list_text"=>"(UTC+03:30) Tehran",
                  "list_utc"=>"Asia/Tehran"
                ],
                [
                  "id"=>"335",
                  "list_value"=>"Arabian Standard Time",
                  "list_text"=>"(UTC+04:00) Abu Dhabi, Muscat",
                  "list_utc"=>"Asia/Dubai"
                ],
                [
                  "id"=>"336",
                  "list_value"=>"Arabian Standard Time",
                  "list_text"=>"(UTC+04:00) Abu Dhabi, Muscat",
                  "list_utc"=>"Asia/Muscat"
                ],
                [
                  "id"=>"338",
                  "list_value"=>"Azerbaijan Standard Time",
                  "list_text"=>"(UTC+04:00) Baku",
                  "list_utc"=>"Asia/Baku"
                ],
                [
                  "id"=>"339",
                  "list_value"=>"Mauritius Standard Time",
                  "list_text"=>"(UTC+04:00) Port Louis",
                  "list_utc"=>"Indian/Mahe"
                ],
                [
                  "id"=>"340",
                  "list_value"=>"Mauritius Standard Time",
                  "list_text"=>"(UTC+04:00) Port Louis",
                  "list_utc"=>"Indian/Mauritius"
                ],
                [
                  "id"=>"341",
                  "list_value"=>"Mauritius Standard Time",
                  "list_text"=>"(UTC+04:00) Port Louis",
                  "list_utc"=>"Indian/Reunion"
                ],
                [
                  "id"=>"342",
                  "list_value"=>"Georgian Standard Time",
                  "list_text"=>"(UTC+04:00) Tbilisi",
                  "list_utc"=>"Asia/Tbilisi"
                ],
                [
                  "id"=>"343",
                  "list_value"=>"Caucasus Standard Time",
                  "list_text"=>"(UTC+04:00) Yerevan",
                  "list_utc"=>"Asia/Yerevan"
                ],
                [
                  "id"=>"344",
                  "list_value"=>"Afghanistan Standard Time",
                  "list_text"=>"(UTC+04:30) Kabul",
                  "list_utc"=>"Asia/Kabul"
                ],
                [
                  "id"=>"345",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Antarctica/Mawson"
                ],
                [
                  "id"=>"346",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Asia/Aqtau"
                ],
                [
                  "id"=>"347",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Asia/Aqtobe"
                ],
                [
                  "id"=>"348",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Asia/Ashgabat"
                ],
                [
                  "id"=>"349",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Asia/Dushanbe"
                ],
                [
                  "id"=>"350",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Asia/Oral"
                ],
                [
                  "id"=>"351",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Asia/Samarkand"
                ],
                [
                  "id"=>"352",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Asia/Tashkent"
                ],
                [
                  "id"=>"354",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Indian/Kerguelen"
                ],
                [
                  "id"=>"355",
                  "list_value"=>"West Asia Standard Time",
                  "list_text"=>"(UTC+05:00) Ashgabat, Tashkent",
                  "list_utc"=>"Indian/Maldives"
                ],
                [
                  "id"=>"356",
                  "list_value"=>"Yekaterinburg Time",
                  "list_text"=>"(UTC+05:00) Yekaterinburg",
                  "list_utc"=>"Asia/Yekaterinburg"
                ],
                [
                  "id"=>"357",
                  "list_value"=>"Pakistan Standard Time",
                  "list_text"=>"(UTC+05:00) Islamabad, Karachi",
                  "list_utc"=>"Asia/Karachi"
                ],
                [
                  "id"=>"358",
                  "list_value"=>"India Standard Time",
                  "list_text"=>"(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi",
                  "list_utc"=>"Asia/Kolkata"
                ],
                [
                  "id"=>"359",
                  "list_value"=>"Sri Lanka Standard Time",
                  "list_text"=>"(UTC+05:30) Sri Jayawardenepura",
                  "list_utc"=>"Asia/Colombo"
                ],
                [
                  "id"=>"360",
                  "list_value"=>"Nepal Standard Time",
                  "list_text"=>"(UTC+05:45) Kathmandu",
                  "list_utc"=>"Asia/Kathmandu"
                ],
                [
                  "id"=>"361",
                  "list_value"=>"Central Asia Standard Time",
                  "list_text"=>"(UTC+06:00) Nur-Sultan (Astana)",
                  "list_utc"=>"Antarctica/Vostok"
                ],
                [
                  "id"=>"362",
                  "list_value"=>"Central Asia Standard Time",
                  "list_text"=>"(UTC+06:00) Nur-Sultan (Astana)",
                  "list_utc"=>"Asia/Almaty"
                ],
                [
                  "id"=>"363",
                  "list_value"=>"Central Asia Standard Time",
                  "list_text"=>"(UTC+06:00) Nur-Sultan (Astana)",
                  "list_utc"=>"Asia/Bishkek"
                ],
                [
                  "id"=>"364",
                  "list_value"=>"Central Asia Standard Time",
                  "list_text"=>"(UTC+06:00) Nur-Sultan (Astana)",
                  "list_utc"=>"Asia/Qyzylorda"
                ],
                [
                  "id"=>"365",
                  "list_value"=>"Central Asia Standard Time",
                  "list_text"=>"(UTC+06:00) Nur-Sultan (Astana)",
                  "list_utc"=>"Asia/Urumqi"
                ],
                [
                  "id"=>"367",
                  "list_value"=>"Central Asia Standard Time",
                  "list_text"=>"(UTC+06:00) Nur-Sultan (Astana)",
                  "list_utc"=>"Indian/Chagos"
                ],
                [
                  "id"=>"368",
                  "list_value"=>"Bangladesh Standard Time",
                  "list_text"=>"(UTC+06:00) Dhaka",
                  "list_utc"=>"Asia/Dhaka"
                ],
                [
                  "id"=>"369",
                  "list_value"=>"Bangladesh Standard Time",
                  "list_text"=>"(UTC+06:00) Dhaka",
                  "list_utc"=>"Asia/Thimphu"
                ],
                [
                  "id"=>"370",
                  "list_value"=>"Myanmar Standard Time",
                  "list_text"=>"(UTC+06:30) Yangon (Rangoon)",
                  "list_utc"=>"Asia/Rangoon"
                ],
                [
                  "id"=>"371",
                  "list_value"=>"Myanmar Standard Time",
                  "list_text"=>"(UTC+06:30) Yangon (Rangoon)",
                  "list_utc"=>"Indian/Cocos"
                ],
                [
                  "id"=>"372",
                  "list_value"=>"SE Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Bangkok, Hanoi, Jakarta",
                  "list_utc"=>"Antarctica/Davis"
                ],
                [
                  "id"=>"373",
                  "list_value"=>"SE Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Bangkok, Hanoi, Jakarta",
                  "list_utc"=>"Asia/Bangkok"
                ],
                [
                  "id"=>"374",
                  "list_value"=>"SE Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Bangkok, Hanoi, Jakarta",
                  "list_utc"=>"Asia/Hovd"
                ],
                [
                  "id"=>"375",
                  "list_value"=>"SE Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Bangkok, Hanoi, Jakarta",
                  "list_utc"=>"Asia/Jakarta"
                ],
                [
                  "id"=>"376",
                  "list_value"=>"SE Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Bangkok, Hanoi, Jakarta",
                  "list_utc"=>"Asia/Phnom_Penh"
                ],
                [
                  "id"=>"377",
                  "list_value"=>"SE Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Bangkok, Hanoi, Jakarta",
                  "list_utc"=>"Asia/Pontianak"
                ],
                [
                  "id"=>"378",
                  "list_value"=>"SE Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Bangkok, Hanoi, Jakarta",
                  "list_utc"=>"Asia/Saigon"
                ],
                [
                  "id"=>"379",
                  "list_value"=>"SE Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Bangkok, Hanoi, Jakarta",
                  "list_utc"=>"Asia/Vientiane"
                ],
                [
                  "id"=>"381",
                  "list_value"=>"SE Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Bangkok, Hanoi, Jakarta",
                  "list_utc"=>"Indian/Christmas"
                ],
                [
                  "id"=>"382",
                  "list_value"=>"N. Central Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Novosibirsk",
                  "list_utc"=>"Asia/Novokuznetsk"
                ],
                [
                  "id"=>"383",
                  "list_value"=>"N. Central Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Novosibirsk",
                  "list_utc"=>"Asia/Novosibirsk"
                ],
                [
                  "id"=>"384",
                  "list_value"=>"N. Central Asia Standard Time",
                  "list_text"=>"(UTC+07:00) Novosibirsk",
                  "list_utc"=>"Asia/Omsk"
                ],
                [
                  "id"=>"385",
                  "list_value"=>"China Standard Time",
                  "list_text"=>"(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi",
                  "list_utc"=>"Asia/Hong_Kong"
                ],
                [
                  "id"=>"386",
                  "list_value"=>"China Standard Time",
                  "list_text"=>"(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi",
                  "list_utc"=>"Asia/Macau"
                ],
                [
                  "id"=>"387",
                  "list_value"=>"China Standard Time",
                  "list_text"=>"(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi",
                  "list_utc"=>"Asia/Shanghai"
                ],
                [
                  "id"=>"388",
                  "list_value"=>"North Asia Standard Time",
                  "list_text"=>"(UTC+08:00) Krasnoyarsk",
                  "list_utc"=>"Asia/Krasnoyarsk"
                ],
                [
                  "id"=>"389",
                  "list_value"=>"Singapore Standard Time",
                  "list_text"=>"(UTC+08:00) Kuala Lumpur, Singapore",
                  "list_utc"=>"Asia/Brunei"
                ],
                [
                  "id"=>"390",
                  "list_value"=>"Singapore Standard Time",
                  "list_text"=>"(UTC+08:00) Kuala Lumpur, Singapore",
                  "list_utc"=>"Asia/Kuala_Lumpur"
                ],
                [
                  "id"=>"391",
                  "list_value"=>"Singapore Standard Time",
                  "list_text"=>"(UTC+08:00) Kuala Lumpur, Singapore",
                  "list_utc"=>"Asia/Kuching"
                ],
                [
                  "id"=>"392",
                  "list_value"=>"Singapore Standard Time",
                  "list_text"=>"(UTC+08:00) Kuala Lumpur, Singapore",
                  "list_utc"=>"Asia/Makassar"
                ],
                [
                  "id"=>"393",
                  "list_value"=>"Singapore Standard Time",
                  "list_text"=>"(UTC+08:00) Kuala Lumpur, Singapore",
                  "list_utc"=>"Asia/Manila"
                ],
                [
                  "id"=>"394",
                  "list_value"=>"Singapore Standard Time",
                  "list_text"=>"(UTC+08:00) Kuala Lumpur, Singapore",
                  "list_utc"=>"Asia/Singapore"
                ],
                [
                  "id"=>"396",
                  "list_value"=>"W. Australia Standard Time",
                  "list_text"=>"(UTC+08:00) Perth",
                  "list_utc"=>"Antarctica/Casey"
                ],
                [
                  "id"=>"397",
                  "list_value"=>"W. Australia Standard Time",
                  "list_text"=>"(UTC+08:00) Perth",
                  "list_utc"=>"Australia/Perth"
                ],
                [
                  "id"=>"398",
                  "list_value"=>"Taipei Standard Time",
                  "list_text"=>"(UTC+08:00) Taipei",
                  "list_utc"=>"Asia/Taipei"
                ],
                [
                  "id"=>"399",
                  "list_value"=>"Ulaanbaatar Standard Time",
                  "list_text"=>"(UTC+08:00) Ulaanbaatar",
                  "list_utc"=>"Asia/Choibalsan"
                ],
                [
                  "id"=>"400",
                  "list_value"=>"Ulaanbaatar Standard Time",
                  "list_text"=>"(UTC+08:00) Ulaanbaatar",
                  "list_utc"=>"Asia/Ulaanbaatar"
                ],
                [
                  "id"=>"401",
                  "list_value"=>"North Asia East Standard Time",
                  "list_text"=>"(UTC+08:00) Irkutsk",
                  "list_utc"=>"Asia/Irkutsk"
                ],
                [
                  "id"=>"402",
                  "list_value"=>"Japan Standard Time",
                  "list_text"=>"(UTC+09:00) Osaka, Sapporo, Tokyo",
                  "list_utc"=>"Asia/Dili"
                ],
                [
                  "id"=>"403",
                  "list_value"=>"Japan Standard Time",
                  "list_text"=>"(UTC+09:00) Osaka, Sapporo, Tokyo",
                  "list_utc"=>"Asia/Jayapura"
                ],
                [
                  "id"=>"404",
                  "list_value"=>"Japan Standard Time",
                  "list_text"=>"(UTC+09:00) Osaka, Sapporo, Tokyo",
                  "list_utc"=>"Asia/Tokyo"
                ],
                [
                  "id"=>"406",
                  "list_value"=>"Japan Standard Time",
                  "list_text"=>"(UTC+09:00) Osaka, Sapporo, Tokyo",
                  "list_utc"=>"Pacific/Palau"
                ],
                [
                  "id"=>"407",
                  "list_value"=>"Korea Standard Time",
                  "list_text"=>"(UTC+09:00) Seoul",
                  "list_utc"=>"Asia/Pyongyang"
                ],
                [
                  "id"=>"408",
                  "list_value"=>"Korea Standard Time",
                  "list_text"=>"(UTC+09:00) Seoul",
                  "list_utc"=>"Asia/Seoul"
                ],
                [
                  "id"=>"409",
                  "list_value"=>"Cen. Australia Standard Time",
                  "list_text"=>"(UTC+09:30) Adelaide",
                  "list_utc"=>"Australia/Adelaide"
                ],
                [
                  "id"=>"410",
                  "list_value"=>"Cen. Australia Standard Time",
                  "list_text"=>"(UTC+09:30) Adelaide",
                  "list_utc"=>"Australia/Broken_Hill"
                ],
                [
                  "id"=>"411",
                  "list_value"=>"AUS Central Standard Time",
                  "list_text"=>"(UTC+09:30) Darwin",
                  "list_utc"=>"Australia/Darwin"
                ],
                [
                  "id"=>"412",
                  "list_value"=>"E. Australia Standard Time",
                  "list_text"=>"(UTC+10:00) Brisbane",
                  "list_utc"=>"Australia/Brisbane"
                ],
                [
                  "id"=>"413",
                  "list_value"=>"E. Australia Standard Time",
                  "list_text"=>"(UTC+10:00) Brisbane",
                  "list_utc"=>"Australia/Lindeman"
                ],
                [
                  "id"=>"414",
                  "list_value"=>"AUS Eastern Standard Time",
                  "list_text"=>"(UTC+10:00) Canberra, Melbourne, Sydney",
                  "list_utc"=>"Australia/Melbourne"
                ],
                [
                  "id"=>"415",
                  "list_value"=>"AUS Eastern Standard Time",
                  "list_text"=>"(UTC+10:00) Canberra, Melbourne, Sydney",
                  "list_utc"=>"Australia/Sydney"
                ],
                [
                  "id"=>"416",
                  "list_value"=>"West Pacific Standard Time",
                  "list_text"=>"(UTC+10:00) Guam, Port Moresby",
                  "list_utc"=>"Antarctica/DumontDUrville"
                ],
                [
                  "id"=>"418",
                  "list_value"=>"West Pacific Standard Time",
                  "list_text"=>"(UTC+10:00) Guam, Port Moresby",
                  "list_utc"=>"Pacific/Guam"
                ],
                [
                  "id"=>"419",
                  "list_value"=>"West Pacific Standard Time",
                  "list_text"=>"(UTC+10:00) Guam, Port Moresby",
                  "list_utc"=>"Pacific/Port_Moresby"
                ],
                [
                  "id"=>"420",
                  "list_value"=>"West Pacific Standard Time",
                  "list_text"=>"(UTC+10:00) Guam, Port Moresby",
                  "list_utc"=>"Pacific/Saipan"
                ],
                [
                  "id"=>"421",
                  "list_value"=>"West Pacific Standard Time",
                  "list_text"=>"(UTC+10:00) Guam, Port Moresby",
                  "list_utc"=>"Pacific/Truk"
                ],
                [
                  "id"=>"422",
                  "list_value"=>"Tasmania Standard Time",
                  "list_text"=>"(UTC+10:00) Hobart",
                  "list_utc"=>"Australia/Currie"
                ],
                [
                  "id"=>"423",
                  "list_value"=>"Tasmania Standard Time",
                  "list_text"=>"(UTC+10:00) Hobart",
                  "list_utc"=>"Australia/Hobart"
                ],
                [
                  "id"=>"424",
                  "list_value"=>"Yakutsk Standard Time",
                  "list_text"=>"(UTC+09:00) Yakutsk",
                  "list_utc"=>"Asia/Chita"
                ],
                [
                  "id"=>"425",
                  "list_value"=>"Yakutsk Standard Time",
                  "list_text"=>"(UTC+09:00) Yakutsk",
                  "list_utc"=>"Asia/Khandyga"
                ],
                [
                  "id"=>"426",
                  "list_value"=>"Yakutsk Standard Time",
                  "list_text"=>"(UTC+09:00) Yakutsk",
                  "list_utc"=>"Asia/Yakutsk"
                ],
                [
                  "id"=>"427",
                  "list_value"=>"Central Pacific Standard Time",
                  "list_text"=>"(UTC+11:00) Solomon Is., New Caledonia",
                  "list_utc"=>"Antarctica/Macquarie"
                ],
                [
                  "id"=>"429",
                  "list_value"=>"Central Pacific Standard Time",
                  "list_text"=>"(UTC+11:00) Solomon Is., New Caledonia",
                  "list_utc"=>"Pacific/Efate"
                ],
                [
                  "id"=>"430",
                  "list_value"=>"Central Pacific Standard Time",
                  "list_text"=>"(UTC+11:00) Solomon Is., New Caledonia",
                  "list_utc"=>"Pacific/Guadalcanal"
                ],
                [
                  "id"=>"431",
                  "list_value"=>"Central Pacific Standard Time",
                  "list_text"=>"(UTC+11:00) Solomon Is., New Caledonia",
                  "list_utc"=>"Pacific/Kosrae"
                ],
                [
                  "id"=>"432",
                  "list_value"=>"Central Pacific Standard Time",
                  "list_text"=>"(UTC+11:00) Solomon Is., New Caledonia",
                  "list_utc"=>"Pacific/Noumea"
                ],
                [
                  "id"=>"433",
                  "list_value"=>"Central Pacific Standard Time",
                  "list_text"=>"(UTC+11:00) Solomon Is., New Caledonia",
                  "list_utc"=>"Pacific/Ponape"
                ],
                [
                  "id"=>"434",
                  "list_value"=>"Vladivostok Standard Time",
                  "list_text"=>"(UTC+11:00) Vladivostok",
                  "list_utc"=>"Asia/Sakhalin"
                ],
                [
                  "id"=>"435",
                  "list_value"=>"Vladivostok Standard Time",
                  "list_text"=>"(UTC+11:00) Vladivostok",
                  "list_utc"=>"Asia/Ust-Nera"
                ],
                [
                  "id"=>"436",
                  "list_value"=>"Vladivostok Standard Time",
                  "list_text"=>"(UTC+11:00) Vladivostok",
                  "list_utc"=>"Asia/Vladivostok"
                ],
                [
                  "id"=>"437",
                  "list_value"=>"New Zealand Standard Time",
                  "list_text"=>"(UTC+12:00) Auckland, Wellington",
                  "list_utc"=>"Antarctica/McMurdo"
                ],
                [
                  "id"=>"438",
                  "list_value"=>"New Zealand Standard Time",
                  "list_text"=>"(UTC+12:00) Auckland, Wellington",
                  "list_utc"=>"Pacific/Auckland"
                ],
                [
                  "id"=>"440",
                  "list_value"=>"UTC+12",
                  "list_text"=>"(UTC+12:00) Coordinated Universal Time+12",
                  "list_utc"=>"Pacific/Funafuti"
                ],
                [
                  "id"=>"441",
                  "list_value"=>"UTC+12",
                  "list_text"=>"(UTC+12:00) Coordinated Universal Time+12",
                  "list_utc"=>"Pacific/Kwajalein"
                ],
                [
                  "id"=>"442",
                  "list_value"=>"UTC+12",
                  "list_text"=>"(UTC+12:00) Coordinated Universal Time+12",
                  "list_utc"=>"Pacific/Majuro"
                ],
                [
                  "id"=>"443",
                  "list_value"=>"UTC+12",
                  "list_text"=>"(UTC+12:00) Coordinated Universal Time+12",
                  "list_utc"=>"Pacific/Nauru"
                ],
                [
                  "id"=>"444",
                  "list_value"=>"UTC+12",
                  "list_text"=>"(UTC+12:00) Coordinated Universal Time+12",
                  "list_utc"=>"Pacific/Tarawa"
                ],
                [
                  "id"=>"445",
                  "list_value"=>"UTC+12",
                  "list_text"=>"(UTC+12:00) Coordinated Universal Time+12",
                  "list_utc"=>"Pacific/Wake"
                ],
                [
                  "id"=>"446",
                  "list_value"=>"UTC+12",
                  "list_text"=>"(UTC+12:00) Coordinated Universal Time+12",
                  "list_utc"=>"Pacific/Wallis"
                ],
                [
                  "id"=>"447",
                  "list_value"=>"Fiji Standard Time",
                  "list_text"=>"(UTC+12:00) Fiji",
                  "list_utc"=>"Pacific/Fiji"
                ],
                [
                  "id"=>"448",
                  "list_value"=>"Magadan Standard Time",
                  "list_text"=>"(UTC+12:00) Magadan",
                  "list_utc"=>"Asia/Anadyr"
                ],
                [
                  "id"=>"449",
                  "list_value"=>"Magadan Standard Time",
                  "list_text"=>"(UTC+12:00) Magadan",
                  "list_utc"=>"Asia/Kamchatka"
                ],
                [
                  "id"=>"450",
                  "list_value"=>"Magadan Standard Time",
                  "list_text"=>"(UTC+12:00) Magadan",
                  "list_utc"=>"Asia/Magadan"
                ],
                [
                  "id"=>"451",
                  "list_value"=>"Magadan Standard Time",
                  "list_text"=>"(UTC+12:00) Magadan",
                  "list_utc"=>"Asia/Srednekolymsk"
                ],
                [
                  "id"=>"452",
                  "list_value"=>"Kamchatka Standard Time",
                  "list_text"=>"(UTC+12:00) Petropavlovsk-Kamchatsky - Old",
                  "list_utc"=>"Asia/Kamchatka"
                ],
                [
                  "id"=>"453",
                  "list_value"=>"Samoa Standard Time",
                  "list_text"=>"(UTC+13:00) Samoa",
                  "list_utc"=>"Pacific/Apia"
                ]
              
    ];
    foreach ($arrayTimezone as $timezone ) {
        Timezone::create($timezone);
    }
}
}

<?php

use Illuminate\Database\Seeder;

class PartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('parts')->insert([

       ['user_id' => '1', 'name' => 'Rejestrator ATM-RP4N', 'number' => '1-02-0212-0100-000002', 'createdby' => 'ATM',],
       ['user_id' => '1', 'name' => 'Komputer Macro (Komputer pokładowy M-S KPTM-8W)', 'number' => '2-02-0204-0100-000005', 'createdby' => 'Macrosystem',],
       ['user_id' => '1', 'name' => 'Wkład Semco (Toaleta Kompletna SV12352(odpływ prosty))', 'number' => '2-01-1300-0101-000001', 'createdby' => 'Semvac',],
       ['user_id' => '1', 'name' => 'Mechanizm wycieraczki 120 Nm 24V 21/36 RPM HEPWORTH', 'number' => '2-01-0608-0102-000017', 'createdby' => 'HEPWORTH',],
       ['user_id' => '1', 'name' => 'Poduszka wózka (Sprężyna pneumatyczna SEK680-12)', 'number' => '2-01-0608-0100-000102', 'createdby' => 'Sachs',],
       ['user_id' => '1', 'name' => 'Buczek TYP ESD', 'number' => '2-02-0108-0102-000003', 'createdby' => 'AUER',],
       ['user_id' => '1', 'name' => 'Rejestrator monitoringu RM-N3', 'number' => '1-02-0212-0200-000001', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'SHP/CA (Generator EDA-3100 24V', 'number' => '2-02-0201-0203-000001', 'createdby' => 'MER',],
       ['user_id' => '1', 'name' => 'Sterownik pracy wycieraczek', 'number' => '1-02-0204-0200-000002', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Dysk 2.5 cala', 'number' => '2-02-0206-0100-000030', 'createdby' => 'WD',],
       ['user_id' => '1', 'name' => 'Sterownik ENI-WNAP/24V', 'number' => '2-02-0204-0200-000003', 'createdby' => 'ENI',],
       ['user_id' => '1', 'name' => 'Sterownik drzwi D-5025-001', 'number' => '2-02-0204-0200-000044', 'createdby' => 'Ultimate',],
       ['user_id' => '1', 'name' => 'Sterownik Semco (Moduł WC Newag-Semco)', 'number' => '6-02-0204-0200-000030', 'createdby' => 'Semvac',],
       ['user_id' => '1', 'name' => 'Konwerter UDP2mbRTU', 'number' => '1-02-0204-0200-000012', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Sterownik RefWC', 'number' => '1-02-0204-0200-000005', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Sterownik RT-08 (po naprawie)', 'number' => '6-02-0204-0200-000028', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Sterownik RT-04', 'number' => '1-02-0204-0200-000004', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Regulator jasności - pulpit RJP-N3', 'number' => '1-02-0204-0200-000024', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Sterownik ogrzewania RT-09', 'number' => '1-02-0204-0200-000008', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Mikrofon dynamiczny z przyciskiem (kabinowy)', 'number' => '2-02-0210-0300-000017', 'createdby' => 'Nieznany',],
       ['user_id' => '1', 'name' => 'Fotokomórka', 'number' => '2-02-0109-0300-000009', 'createdby' => 'Bergen',],
       ['user_id' => '1', 'name' => 'Antena taborowa', 'number' => '2-02-0209-0100-000001', 'createdby' => 'Nieznany',],
       ['user_id' => '1', 'name' => 'Gruszka (Słuchawka radiotelefonu)', 'number' => '2-02-0303-0000-000001', 'createdby' => 'Koliber',],
       ['user_id' => '1', 'name' => 'Nagrzewnica elektryczna kabiny maszynisty(LIM-NE03 Limatherm)', 'number' => '2-01-0802-0202-000115', 'createdby' => 'Limatherm',],
       ['user_id' => '1', 'name' => 'Nagrzewnica elektryczna (LIM-NE05/A Limatherm)', 'number' => '2-01-0802-0202-000118', 'createdby' => 'Limatherm',],
       ['user_id' => '1', 'name' => 'Nagrzewnica elektryczna (LIM-NE05/B Limatherm)', 'number' => '2-01-0802-0202-000117', 'createdby' => 'Limatherm',],
       ['user_id' => '1', 'name' => 'Kamera MD8531H-F3', 'number' => '2-02-0211-0200-000008', 'createdby' => 'Vivotek',],
       ['user_id' => '1', 'name' => 'Kamera MD8562', 'number' => '2-02-0211-0200-000003', 'createdby' => 'Vivotek',],
       ['user_id' => '1', 'name' => 'Kamera FE8174V', 'number' => '2-02-0211-0200-000006', 'createdby' => 'Vivotek',],
       ['user_id' => '1', 'name' => 'Dekoracyjne LEDy (Taśma LED)', 'number' => '2-02-0201-0701-000020', 'createdby' => 'Nieznany',],
       ['user_id' => '1', 'name' => 'Linka awaryjnego otwierania drzwi', 'number' => '2-01-0605-2700-000595', 'createdby' => 'Nieznany',],
       ['user_id' => '1', 'name' => 'Wąż do pantografu', 'number' => '2-01-1009-0101-000392', 'createdby' => 'Nieznany',],
       ['user_id' => '1', 'name' => 'Cięgło luzowania awaryjnego 2050', 'number' => '2-01-0301-0203-000955', 'createdby' => 'Nieznany',],
       ['user_id' => '1', 'name' => 'Tablica informacyjna zewnętrzna boczna NTIZ 610x232', 'number' => '1-02-0207-0200-000005', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Tablica LED wewnętrzna (Tablica LED 802x134 kolor)', 'number' => '1-02-0207-0200-000002', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Tablica informacyjna czołowa NTIC', 'number' => '1-02-0207-0200-000006', 'createdby' => 'Newag',],
       ['user_id' => '1', 'name' => 'Zbiornik powietrzny Knorr (Odwadniacz I34375)', 'number' => '2-01-1001-0204-000006', 'createdby' => 'Knorr-Bremse',],
       ['user_id' => '1', 'name' => 'Czujnik TONG-1 L-120', 'number' => '2-02-0109-0101-000001', 'createdby' => 'Nieznany',],
       ['user_id' => '1', 'name' => 'Siłownik okna GS12-120-CD-60N', 'number' => '2-01-0605-1901-000011', 'createdby' => 'Nieznany',],
       ['user_id' => '1', 'name' => 'Switch (Przełącznik Switch Viper -112-T3G-p8 Westermo)', 'number' => '2-02-0208-0100-000006', 'createdby' => 'Westermo',],
       ['user_id' => '1', 'name' => 'Terminal ppoż. CSP1TAGN 1', 'number' => '2-02-0204-0200-000085', 'createdby' => 'Eltronik',],
       ['user_id' => '1', 'name' => 'Czujka temperaturowo - dymowa DOT40', 'number' => '2-02-0109-0102-000028', 'createdby' => 'Eltronik',],
       ['user_id' => '1', 'name' => 'Monitor reklamowy (Tablica LCD 22”', 'number' => '2-02-0207-0100-000005', 'createdby' => 'Macrosystem',],
       ['user_id' => '1', 'name' => 'Czujnik prędkości (generator impulsów STN 31451 KNORR)', 'number' => '2-02-0110-0208-000006', 'createdby' => 'Knorr-Bremse',],
       ['user_id' => '1', 'name' => 'Czujnik podestu inwalidy (Czujnik indukcyjny zbliżeniowy BES)', 'number' => '2-02-0109-0300-000089', 'createdby' => 'Nieznany',],
       ['user_id' => '1', 'name' => 'Czujnik poziomu wody / fekali (przetwornik ciśnienia prądowy)', 'number' => '2-02-0109-0201-000010', 'createdby' => 'Limatherm',],
       ['user_id' => '1', 'name' => 'Styk pomocniczy bezpieczników (styk pomocniczy S2C)', 'number' => '2-02-0101-0700-000034', 'createdby' => 'ABB',],
       ['user_id' => '1', 'name' => 'Przekaźnik Relpol (Przekaźnik R15-2013)', 'number' => '2-02-0101-0103-000002', 'createdby' => 'Relpol',],
       ['user_id' => '1', 'name' => 'Bezpiecznik podwójny B6 (Wyłącznik S202-B6)', 'number' => '2-02-0102-0102-000015', 'createdby' => 'ABB',],
       ['user_id' => '1', 'name' => 'Bezpiecznik potrójny C6 (Wyłącznik S203-C6)', 'number' => '2-02-0102-0102-000016', 'createdby' => 'ABB',],
       ['user_id' => '1', 'name' => 'Blok sterujący lusterka SPCZ/M062A - Lewy', 'number' => '2-01-0605-2700-000497', 'createdby' => 'Rawag',],


     ]);
    }
}

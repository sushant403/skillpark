<?php

use App\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();

        DB::table('cities')->insert([
            [
                'name' => 'Amargadhi',
            ],           
            [
                'name' => 'Arujundhara'
            ],
            [
                'name' => 'Aurahi'
            ],
            [
                'name' => 'Badimalika'
            ],
            [
                'name' => 'Bagchaur'
            ],
            [
                'name' => 'Baglung'
            ],
            [
                'name' => 'Bagmati'
            ],
            [
                'name' => 'Balawa'
            ],
            [
                'name' => 'Banepa'
            ],
            [
                'name' => 'Banganga'
            ],
            [
                'name' => 'Barahachhetra'
            ],
            [
                'name' => 'Barahathwa'
            ],
            [
                'name' => 'Barbardia'
            ],           
            [
                'name' => 'Bardaghat'
            ],
            [
                'name' => 'Bardiwas'
            ],
            [
                'name' => 'Barhabise'
            ],
            [
                'name' => 'Baudhimai'
            ],
            [
                'name' => 'Bedkot'
            ],
            [
                'name' => 'Belaka'
            ],
            [
                'name' => 'Belauri'
            ],
            [
                'name' => 'Belkotgadhi'
            ],
            [
                'name' => 'Beni'
            ],
            [
                'name' => 'Besisahar'
            ],
            [
                'name' => 'Bhadrapur'
            ],
            [
                'name' => 'Bahajani',
            ],           
            [
                'name' => 'Bhaktapur'
            ],
            [
                'name' => 'Bhangaha'
            ],
            [
                'name' => 'Bhanau'
            ],
            [
                'name' => 'Bharatpur'
            ],
            [
                'name' => 'Bheri'
            ],
            [
                'name' => 'Bheriganga'
            ],
            [
                'name' => 'Bhimad'
            ],
            [
                'name' => 'Bhimdatta'
            ],
            [
                'name' => 'Bhimeshwar'
            ],
            [
                'name' => 'Bhirkhot'
            ],
            [
                'name' => 'Bhojpur'
            ],
            [
                'name' => 'Bhumikasthan',
            ],           
            [
                'name' => 'Bideha'
            ],
            [
                'name' => 'Bidhur'
            ],
            [
                'name' => 'Biratnagar'
            ],
            [
                'name' => 'Birendranagar'
            ],
            [
                'name' => 'Birganj'
            ],
            [
                'name' => 'Birtamod'
            ],
            [
                'name' => 'Brindaban'
            ],
            [
                'name' => 'Buddhabhumi'
            ],
            [
                'name' => 'Buddhanilkantha'
            ],
            [
                'name' => 'Budhinanda'
            ],
            [
                'name' => 'Bungal'
            ],
            [
                'name' => 'Butwal',
            ],           
            [
                'name' => 'Chainpur'
            ],
            [
                'name' => 'Chamunda Bindrasaini'
            ],
            [
                'name' => 'Chadrannath'
            ],
            [
                'name' => 'Chandragiri'
            ],
            [
                'name' => 'Chandrapur'
            ],
            [
                'name' => 'Chagunarayan'
            ],
            [
                'name' => 'Chapakot'
            ],
            [
                'name' => 'Chaudandigadhi'
            ],
            [
                'name' => 'Chaurajahari'
            ],
            [
                'name' => 'Chhayanath Rara'
            ],
            [
                'name' => 'Dakneshwari'
            ],
            [
                'name' => 'Dakshinkali'
            ],           
            [
                'name' => 'Damak'
            ],
            [
                'name' => 'Dashrathchand'
            ],
            [
                'name' => 'Deumali'
            ],
            [
                'name' => 'Devchuli'
            ],
            [
                'name' => 'Devdaha'
            ],
            [
                'name' => 'Dewahi Gonahi'
            ],
            [
                'name' => 'Dhangadhi'
            ],
            [
                'name' => 'Dhangadhimai'
            ],
            [
                'name' => 'Dhorpatan'
            ],
            [
                'name' => 'Dhulikhel'
            ],
            [
                'name' => 'Dhunibeshi'
            ],
            [
                'name' => 'Dipayal Sigadhi',
            ],           
            [
                'name' => 'Dudhauli'
            ],
            [
                'name' => 'Duhabi'
            ],
            [
                'name' => 'Dullu'
            ],
            [
                'name' => 'Gadhimai'
            ],
            [
                'name' => 'Gaindakot'
            ],
            [
                'name' => 'Galkot'
            ],
            [
                'name' => 'Galyang'
            ],
            [
                'name' => 'Garuda'
            ],
            [
                'name' => 'Gauradaha'
            ],
            [
                'name' => 'Gaushala'
            ],
            [
                'name' => 'Ghodaghodi'
            ],
            [
                'name' => 'Ghorahi',
            ],           
            [
                'name' => 'Godaita'
            ],
            [
                'name' => 'Godawari'
            ],
            [
                'name' => 'Gokarneshwar'
            ],
            [
                'name' => 'Golbazar'
            ],
            [
                'name' => 'Gorkha'
            ],
            [
                'name' => 'Gujara'
            ],
            [
                'name' => 'Gulariya'
            ],
            [
                'name' => 'Gurbhakot'
            ],
            [
                'name' => 'Halesi Tuwachung'
            ],
            [
                'name' => 'Hansapur'
            ],
            [
                'name' => 'Hanumannagar Kankalini'
            ],
            [
                'name' => 'Haripur'
            ],
            [
                'name' => 'Haripurwa'
            ],
            [
                'name' => 'Hariwan'
            ],
            [
                'name' => 'Hetauda'
            ],
            [
                'name' => 'Illam'
            ],
            [
                'name' => 'Inurawa'
            ],
            [
                'name' => 'Ishanath'
            ],
            [
                'name' => 'Itahari'
            ],
            [
                'name' => 'Jaiamini'
            ],
            [
                'name' => 'Jalaeshwar'
            ],
            [
                'name' => 'Janakpur'
            ],           
            [
                'name' => 'Jaya Prithivi'
            ],
            [
                'name' => 'Jiri'
            ],
            [
                'name' => 'Jitpur Simara'
            ],
            [
                'name' => 'Kabilasi'
            ],
            [
                'name' => 'Kageshwari-Manohara'
            ],
            [
                'name' => 'kalaiya'
            ],
            [
                'name' => 'Kalika'
            ],
            [
                'name' => 'kalyanpur'
            ],
            [
                'name' => 'kamala'
            ],
            [
                'name' => 'Kamalbazar'
            ],
            [
                'name' => 'Kanchanrup'
            ],
            [
                'name' => 'Kankai',
            ],           
            [
                'name' => 'Kapilvastu'
            ],
            [
                'name' => 'Karjanha'
            ],
            [
                'name' => 'katahariya'
            ],
            [
                'name' => 'Katari'
            ],
            [
                'name' => 'Kathmandu'
            ],
            [
                'name' => 'Kawasoti'
            ],
            [
                'name' => 'Khadak'
            ],
            [
                'name' => 'Khairhani'
            ],
            [
                'name' => 'Khandachkra'
            ],
            [
                'name' => 'Khandbari'
            ],
            [
                'name' => 'Kritipur'
            ],
            [
                'name' => 'Kohalpur',
            ],           
            [
                'name' => 'Kolhabi'
            ],
            [
                'name' => 'Krishnaagar'
            ],
            [
                'name' => 'Krishnapur'
            ],
            [
                'name' => 'Kshireshwarnath'
            ],
            [
                'name' => 'Kushma'
            ],
            [
                'name' => 'Lahan'
            ],
            [
                'name' => 'lalbandi'
            ],
            [
                'name' => 'Laliguras'
            ],
            [
                'name' => 'Lalitpur'
            ],
            [
                'name' => 'Lamahi'
            ],
            [
                'name' => 'lamki Chuha'
            ],
            [
                'name' => 'Lekbeshi',
            ],           
            [
                'name' => 'Letang'
            ],
            [
                'name' => 'Lumbanini Sanskritik'
            ],
            [
                'name' => 'Madhav Narayan'
            ],
            [
                'name' => 'Madhuwan'
            ],
            [
                'name' => 'Madhya Nepal'
            ],
            [
                'name' => 'Madhyabindu'
            ],
            [
                'name' => 'Madhyapur Thimi'
            ],
            [
                'name' => 'Madi'
            ],
            [
                'name' => 'Mahagadhimai'
            ],
            [
                'name' => 'Mahakali'
            ],
            [
                'name' => 'Mahalaxmi'
            ],
            [
                'name' => 'Maharajganj'
            ],           
            [
                'name' => 'Malangwa'
            ],
            [
                'name' => 'Mandandeupur'
            ],
            [
                'name' => 'Mangalsen'
            ],
            [
                'name' => 'Manthali'
            ],
            [
                'name' => 'Matihani'
            ],
            [
                'name' => 'Maulapur'
            ],
            [
                'name' => 'Mechinagar'
            ],
            [
                'name' => 'Melamchi'
            ],
            [
                'name' => 'Melauli'
            ],
            [
                'name' => 'Mirchaiya'
            ],
            [
                'name' => 'Mithila'
            ],
            [
                'name' => 'Musikot',
            ],           
            [
                'name' => 'Myanglung'
            ],
            [
                'name' => 'Nagarjun'
            ],
            [
                'name' => 'Nalgad'
            ],
            [
                'name' => 'Namobuddha'
            ],
            [
                'name' => 'Narayan'
            ],
            [
                'name' => 'Nepaldgunj'
            ],
            [
                'name' => 'Nijgadh'
            ],
            [
                'name' => 'Nilkantha'
            ],
            [
                'name' => 'Pachrauta'
            ],
            [
                'name' => 'palughtar'
            ],
            [
                'name' => 'Pachadewal Binayak'
            ],
            [
                'name' => 'Pachapuri',
            ],           
            [
                'name' => 'Pachkhal'
            ],
            [
                'name' => 'Parushuram'
            ],
            [
                'name' => 'Parsagadhi'
            ],
            [
                'name' => 'Patan'
            ],
            [
                'name' => 'Paunauti'
            ],
            [
                'name' => 'Phaleswas'
            ],
            [
                'name' => 'Phatuwa Bijayapur'
            ],
            [
                'name' => 'Phidim'
            ],
            [
                'name' => 'Pokhara'
            ],
            [
                'name' => 'Pokhariya'
            ],
            [
                'name' => 'Punarbas'
            ],
            [
                'name' => 'Purchaudi'
            ],
            [
                'name' => 'Putalibazr'
            ],
            [
                'name' => 'Pyuthan'
            ],
            [
                'name' => 'Rainas'
            ],
            [
                'name' => 'Rajapur'
            ],
            [
                'name' => 'Rajbiraj'
            ],
            [
                'name' => 'Rajdevi'
            ],
            [
                'name' => 'Rajpur'
            ],
            [
                'name' => 'Ramdhuni'
            ],
            [
                'name' => 'Ramechhap'
            ],
            [
                'name' => 'Ramgopalpur'
            ],
            [
                'name' => 'Ramgram'
            ],           
            [
                'name' => 'Rampur'
            ],
            [
                'name' => 'Rangeli'
            ],
            [
                'name' => 'Rapti'
            ],
            [
                'name' => 'Raskot'
            ],
            [
                'name' => 'Ratanagar'
            ],
            [
                'name' => 'Rautawamai'
            ],
            [
                'name' => 'Resunga'
            ],
            [
                'name' => 'Rolpa'
            ],
            [
                'name' => 'Rupakot Majhuwangadhi'
            ],
            [
                'name' => 'Sabaila'
            ],
            [
                'name' => 'Sainamaina'
            ],
            [
                'name' => 'Sandhikharka',
            ],           
            [
                'name' => 'Sanphebagar'
            ],
            [
                'name' => 'Saptakodhi'
            ],
            [
                'name' => 'Shaarda'
            ],
            [
                'name' => 'Shadanand'
            ],
            [
                'name' => 'Shahidnagar'
            ],
            [
                'name' => 'Shailyashikar'
            ],
            [
                'name' => 'Shambhunath'
            ],
            [
                'name' => 'Shankharanath'
            ],
            [
                'name' => 'Shikhar'
            ],
            [
                'name' => 'Shivaraj'
            ],
            [
                'name' => 'Shivasatakshi'
            ],
            [
                'name' => 'Shuklaphanta',
            ],           
            [
                'name' => 'Shuklagandaki'
            ],
            [
                'name' => 'Siddharthanagar'
            ],
            [
                'name' => 'Siddhichran'
            ],
            [
                'name' => 'Simraungadh'
            ],
            [
                'name' => 'Siraha'
            ],
            [
                'name' => 'Sitaganga'
            ],
            [
                'name' => 'Solu Dudhkunda'
            ],
            [
                'name' => 'Sukhipur'
            ],
            [
                'name' => 'Sunawarshi'
            ],
            [
                'name' => 'Sundar Haraincha'
            ],
            [
                'name' => 'Sundarbazar'
            ],
            [
                'name' => 'Sunwal',
            ],           
            [
                'name' => 'Surunga'
            ],
            [
                'name' => 'Suryabinayak'
            ],
            [
                'name' => 'Suryodaya'
            ],
            [
                'name' => 'Swargadwari'
            ],
            [
                'name' => 'Tansen'
            ],
            [
                'name' => 'Taplejung (Phungling)'
            ],
            [
                'name' => 'Tarakeshwar'
            ],
            [
                'name' => 'Thaha'
            ],
            [
                'name' => 'Thakurbaba'
            ],
            [
                'name' => 'Thuli Bheri'
            ],
            [
                'name' => 'Tiakpur'
            ],
            [
                'name' => 'Tilagupha'
            ],           
            [
                'name' => 'Tilottama'
            ],
            [
                'name' => 'Tokha'
            ],
            [
                'name' => 'Tribeni'
            ],
            [
                'name' => 'Tripura Sundari'
            ],
            [
                'name' => 'Triyuga'
            ],
            [
                'name' => 'Tulsipur'
            ],
            [
                'name' => 'Urlabari'
            ],
            [
                'name' => 'Vyas'
            ],
            [
                'name' => 'Waling'
            ],
        ]);  
    }
}

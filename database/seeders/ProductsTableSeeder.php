<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Candle',
            'price' => 19.99,
            'offer' => true,
            'offer_price' => 14.99,
            'descripton' => 'Net weight: 43 g Burn Time: 10 h
                              Perfect for: Festivities, baby showers, wedding favours
                              Fragrance Type: Aromatic
                              Focus: Aromatic notes of lavender
                              Candle Material: Soy Wax
                              Jar Material: Glass
                              Contents: 1 scented candle',
            'image' => '/img/candle.WEBP',
            'status' => 1,
        ]);
    
        Product::create([
            'name' => 'Bag',
            'price' => 1200,
            'offer' => true,
            'offer_price' => 999,
            'descripton' => 'Number of Contents - 1 Backpack
                              Ideal For - Men & Women
                              Trolley Support - No
                              Laptop Sleeve - No
                              With Rain Cover - No
                              Color - Grey 
                              Number of Compartments - 3
                              Capacity - 32.5 L
                              Warranty - 1 Year',
            'image' => '/img/bag1.webp',
            'status' => 1,
        ]);
        Product::create([
            'name' => 'speaker',
            'price' => 850,
            'offer' => true,
            'offer_price' => 659,
            'descripton' => '4.1 Bluetooth Speaker Jaw-dropping Sound Quality and Volume best speaker for laptop and mobile
            Wireless Portable 4.1 Bluetooth Speaker - Whether you"re Partying, Walking out, Camping, Hiking, Biking, or just lounging around the house, enjoy a full-range stereo sound with a impressive volume
            Built-in rechargeable 3.7V, 1200mAh lithium-ion polymer battery: Provides extended playback, enables you to stream music for up to 6 hours on a full charge speaker bluetooth
            Broad Compatibility: Quick pairing through Bluetooth with All Smartphone and other popular smartphones
            Speaker for mobile, Wireless speakers, Wireless Speakers for Computer',
            'image' => '/img/speaker1.jpg',
            'status' => 1,
        ]);
    
        Product::create([
            'name' => 'pens combo',
            'price' => 100,
            'offer' => true,
            'offer_price' => 89,
            'descripton' => 'Color - Blue
            Model Number - 8901765126245
            Net Quantity - 20',
            'image' => '/img/pens_combo1.WEBP',
            'status' => 1,
        ]);
        Product::create([
            'name' => 'calculator',
            'price' => 250,
            'offer' => true,
            'offer_price' => 199,
            'descripton' => 'GST Calculator for Easy and Fast GST Calculation (Price Plus GST, Price Less GST, and Total GST Calculation)
            5 Dedicated GST Slab Keys with prestored values 0%, 5%, 12%, 18% and 28% for slab wise GST Calculation. Rates are changeable as per industry requirement
            GST GT Key and 5 GST Slab Keys for Grand Total of Net, Gross and GST Amount
            +/- and Square Root Key
            200 Steps Check and Correct for reviewing your inputs and correction if required
            Round and Decimal Selector. Indian Comma Marker to read numbers in Lakh, and Crore
            Best Calculator for GST Calculation for Office and Retail',
            'image' => '/img/calculator1.WEBP',
            'status' => 1,
        ]);
    
        Product::create([
            'name' => 'light',
            'price' => 350,
            'offer' => true,
            'offer_price' => 299,
            'descripton' => 'Wattage: 12W
            Bulb Base: B22
            Colour: Cool day Light
            Lumen Output: 1200
            Pack of 1 Inverter bulb',
            'image' => '/img/light1.WEBP',
            'status' => 1,
        ]);
        Product::create([
            'name' => 'wall clock',
            'price' => 2000,
            'offer' => true,
            'offer_price' => 1599,
            'descripton' => 'Exquisite Peacock Clock - Elegant look, it is not only a clock, but also a excellent decoration, both practical and beautiful
            Hand-made Silent Wall Clock - Non-ticking mechanism, enjoy a quiet environment!
            Stable Clock Movement - High-quality quartz clock, it will last 3 years(1 AA carbon battery only, Not include)
            Best Decos for Your Space- It"s perfect for hotal, office, classroom, bedroom, bathroom and other rooms in your home
            Size - 72*72*7 cm',
            'image' => '/img/wall_clock.jpg',
            'status' => 1,
        ]);
    
        Product::create([
            'name' => 'shoe',
            'price' => 1000,
            'offer' => true,
            'offer_price' => 899,
            'descripton' => 'Lightweight & Breathable : Exclusive design and durable materials every step feels light and breezy. Breathable, free-moving fabrics which adjust according to your foot and creates an astoundingly easy-going experience.
            Non Slip & Shockproof : Great engineering strikes a balance in style, made in the potent design and latest fashion trends. Made for long-term wear, with extra emphasis on providing cushion to the feet, removing heel strain.',
            'image' => '/img/shoe1.jpg',
            'status' => 1,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('custom_pages')->insert([
            [
                'id' => 1,
                'title' => 'Terms and Conditions',
                'slug' => 'terms-and-conditions',
                'content' => <<<HTML
                <p data-start="378" data-end="595">Welcome to <strong data-start="389" data-end="410">Merquify</strong>! These Terms and Conditions outline the rules and regulations for the use of our website and services. By accessing or purchasing from <strong data-start="546" data-end="566">http://merquify.com</strong>, you agree to these Terms.</p>
                <hr data-start="597" data-end="600">
                <h5 data-start="602" data-end="616">1. General</h5>
                <ul data-start="617" data-end="818">
                <li data-start="617" data-end="727">
                <p data-start="619" data-end="727">By using our website, you confirm that you are at least 18 years old or have parental/guardian permission.</p>
                </li>
                <li data-start="728" data-end="818">
                <p data-start="730" data-end="818">We reserve the right to update or change these Terms at any time without prior notice.</p>
                </li>
                </ul>
                <hr data-start="820" data-end="823">
                <h5 data-start="825" data-end="849">2. Products &amp; Orders</h5>
                <ul data-start="850" data-end="1090">
                <li data-start="850" data-end="902">
                <p data-start="852" data-end="902">All products listed are subject to availability.</p>
                </li>
                <li data-start="903" data-end="1003">
                <p data-start="905" data-end="1003">We make every effort to display product colors and details accurately, but variations may occur.</p>
                </li>
                <li data-start="1004" data-end="1090">
                <p data-start="1006" data-end="1090">Placing an order means you agree to purchase goods in accordance with these Terms.</p>
                </li>
                </ul>
                <hr data-start="1092" data-end="1095">
                <h5 data-start="1097" data-end="1121">3. Pricing &amp; Payment</h5>
                <ul data-start="1122" data-end="1379">
                <li data-start="1122" data-end="1215">
                <p data-start="1124" data-end="1215">All prices are listed in <strong data-start="1149" data-end="1163">BRL</strong> and include/exclude applicable taxes (as stated).</p>
                </li>
                <li data-start="1216" data-end="1314">
                <p data-start="1218" data-end="1314">We accept payments via <strong data-start="1241" data-end="1311">PayPal</strong>.</p>
                </li>
                <li data-start="1315" data-end="1379">
                <p data-start="1317" data-end="1379">Orders will only be processed once full payment is received.</p>
                </li>
                </ul>
                <hr data-start="1381" data-end="1384">
                <h5 data-start="1386" data-end="1412">4. Shipping &amp; Delivery</h5>
                <ul data-start="1413" data-end="1568">
                <li data-start="1413" data-end="1499">
                <p data-start="1415" data-end="1499">Shipping times are estimates and may vary due to circumstances beyond our control.</p>
                </li>
                <li data-start="1500" data-end="1568">
                <p data-start="1502" data-end="1568">You are responsible for providing accurate delivery information.</p>
                </li>
                </ul>
                <hr data-start="1570" data-end="1573">
                <h5 data-start="1575" data-end="1599">5. Returns &amp; Refunds</h5>
                <ul data-start="1600" data-end="1891">
                <li data-start="1600" data-end="1703">
                <p data-start="1602" data-end="1703">Returns are accepted within <strong data-start="1630" data-end="1642">7 days</strong> of delivery if items are unused and in original condition.</p>
                </li>
                <li data-start="1704" data-end="1797">
                <p data-start="1706" data-end="1797">Certain products (e.g., perishable goods, personal items) may not be eligible for return.</p>
                </li>
                <li data-start="1798" data-end="1891">
                <p data-start="1800" data-end="1891">Refunds will be issued to the original payment method after inspection of returned items.</p>
                </li>
                </ul>
                <hr data-start="1893" data-end="1896">
                <h5 data-start="1898" data-end="1926">6. Intellectual Property</h5>
                <ul data-start="1927" data-end="2070">
                <li data-start="1927" data-end="2070">
                <p data-start="1929" data-end="2070">All content on our website, including logos, text, graphics, and images, is owned by <strong data-start="2014" data-end="2035">Merquify</strong> and protected by copyright laws.</p>
                </li>
                </ul>
                <hr data-start="2072" data-end="2075">
                <h5 data-start="2077" data-end="2107">7. Limitation of Liability</h5>
                <ul data-start="2108" data-end="2233">
                <li data-start="2108" data-end="2233">
                <p data-start="2110" data-end="2233">We are not liable for any indirect, incidental, or consequential damages arising from the use of our website or products.</p>
                </li>
                </ul>
                <hr data-start="2235" data-end="2238">
                <h5 data-start="2240" data-end="2260">8. Governing Law</h5>
                <ul data-start="2261" data-end="2330">
                <li data-start="2261" data-end="2330">
                <p data-start="2263" data-end="2330">These Terms are governed by the laws of <strong data-start="2303" data-end="2327">Brasil</strong>.</p>
                </li>
                </ul>
                HTML,
                                'is_active' => 1,
                                'created_at' => '2025-09-07 03:13:44',
                                'updated_at' => '2025-09-07 03:15:07',
                            ],

                            [
                                'id' => 2,
                                'title' => 'Privacy Policy',
                                'slug' => 'privacy-policy',
                                'content' => <<<HTML
                <h5 data-start="2580" data-end="2609">1. Information We Collect</h5>
                <ul data-start="2610" data-end="2858">
                <li data-start="2610" data-end="2706">
                <p data-start="2612" data-end="2706">Personal details (name, email, phone, address) when placing an order or creating an account.</p>
                </li>
                <li data-start="2707" data-end="2786">
                <p data-start="2709" data-end="2786">Payment information (processed securely via third-party payment providers).</p>
                </li>
                <li data-start="2787" data-end="2858">
                <p data-start="2789" data-end="2858">Usage data such as IP address, browser type, and browsing behavior.</p>
                </li>
                </ul>
                <hr data-start="2860" data-end="2863">
                <h5>2. How We Use Your Information</h5>
                <ul data-start="2900" data-end="3099">
                <li data-start="2900" data-end="2939">
                <p data-start="2902" data-end="2939">To process and deliver your orders.</p>
                </li>
                <li data-start="2940" data-end="2991">
                <p data-start="2942" data-end="2991">To improve our website and customer experience.</p>
                </li>
                <li data-start="2992" data-end="3061">
                <p data-start="2994" data-end="3061">To send promotional emails and updates (you can opt out anytime).</p>
                </li>
                <li data-start="3062" data-end="3099">
                <p data-start="3064" data-end="3099">To comply with legal obligations.</p>
                </li>
                </ul>
                <hr data-start="3101" data-end="3104">
                <h5 data-start="3106" data-end="3135">3. Sharing of Information</h5>
                <ul data-start="3136" data-end="3354">
                <li data-start="3136" data-end="3189">
                <p data-start="3138" data-end="3189">We do not sell or rent your personal information.</p>
                </li>
                <li data-start="3190" data-end="3302">
                <p data-start="3192" data-end="3302">We may share data with trusted third-party service providers (e.g., payment processors, shipping companies).</p>
                </li>
                <li data-start="3303" data-end="3354">
                <p data-start="3305" data-end="3354">We may disclose information if required by law.</p>
                </li>
                </ul>
                <hr data-start="3356" data-end="3359">
                <h5 data-start="3361" data-end="3386">4. Cookies &amp; Tracking</h5>
                <ul data-start="3387" data-end="3568">
                <li data-start="3387" data-end="3473">
                <p data-start="3389" data-end="3473">We use cookies to enhance browsing, personalize content, and analyze site traffic.</p>
                </li>
                <li data-start="3474" data-end="3568">
                <p data-start="3476" data-end="3568">You can disable cookies in your browser settings, but some features may not work properly.</p>
                </li>
                </ul>
                <hr data-start="3570" data-end="3573">
                <h5 data-start="3575" data-end="3595">5. Data Security</h5>
                <ul data-start="3596" data-end="3732">
                <li data-start="3596" data-end="3670">
                <p data-start="3598" data-end="3670">We implement industry-standard security measures to protect your data.</p>
                </li>
                <li data-start="3671" data-end="3732">
                <p data-start="3673" data-end="3732">However, no method of online transmission is 100% secure.</p>
                </li>
                </ul>
                <hr data-start="3734" data-end="3737">
                <h5 data-start="3739" data-end="3757">6. Your Rights</h5>
                <ul data-start="3758" data-end="3899">
                <li data-start="3758" data-end="3832">
                <p data-start="3760" data-end="3832">You may request access, correction, or deletion of your personal data.</p>
                </li>
                <li data-start="3833" data-end="3899">
                <p data-start="3835" data-end="3899">You may unsubscribe from marketing communications at any time.</p>
                </li>
                </ul>
                <hr data-start="3901" data-end="3904">
                <h5 data-start="3906" data-end="3923">7. Contact Us</h5>
                <p data-start="3924" data-end="4063">
                If you have any questions about this Privacy Policy, contact us at:<br>
                📧 Email: merquify@gmail.com<br>
                📍 Address: address
                </p>
                HTML,
                                'is_active' => 1,
                                'created_at' => '2025-09-07 03:13:58',
                                'updated_at' => '2025-09-07 03:15:34',
                            ],
            ]);

    }
}

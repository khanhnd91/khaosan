<div id="button_area">
        <form name="ypro_search" class="obj_search" action="" method="post" target = "_blank">
        <!-- <form name="theForm" action="http://reservations.bookhostels.com/khaosantokyo.com/index.php" method="post" target="_blank"> -->
                <!-- Choice -->
                <input type="hidden" name="area_yado_id" id="area_yado_id">

                <!-- Country -->
                <input type="hidden" name="CountryChoice" value="Japan">

                <!-- GroupType -->
                <input type="hidden" name="GroupType" value="">

                 <!-- City -->
                <select id="city" name="obj_area" class="obj_area">
                        <option value="0">AREA</option>
                <?php  /*$global_cities = get_terms( 'city',array('hide_empty' => false, 'orderby' => 'slug') );
                        $i = 0;
                        if ( ! empty( $global_cities ) && ! is_wp_error( $global_cities ) ){
                                $i = 0;
                                foreach ( $global_cities as $city ) {   */

                ?>
               
                        <option value="a1">TOKYO</option>
                        <option value="a2">KYOTO</option>
                        <option value="a3">KANAZAWA</option>
                        <option value="a4">HOKKAIDO</option>
                        <option value="a5">ATAMI</option>

                
                        <?php /* }
                                $i++;
                        } */
                        ?>
                </select>

                <!-- Hotel -->
                <select id="hotel" name="obj_yado" class="hotel">

                </select>

                <!-- Arrival Date -->
                <input type="text" id="check-in" class="date" placeholder="Arrival Date" style="width:110px;height:47px; padding: 0 32px 0 10px">
                <input type="hidden" name="selYear" id="selYear">
                <input type="hidden" name="selMonth" id="selMonth" >
                <input type="hidden" name="selDay" id="selDay" >

                <!-- Nights -->
                <select id="nights" name="NumNights">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                </select>

                <!-- Guests -->
                <select id="guests" name="Persons">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                </select>

                <!-- Currency -->
                <!-- <select id="currency" name="Currency" width="180">
                        <option value=""></option>
                        <option value="USD">Currency</option>
                        <option value="AUD">Australian Dollar</option>
                        <option value="GBP">British Pound</option>
                        <option value="CAD">Canadian Dollar</option>
                        <option value="EUR">Euro</option>
                        <option value="USD">US Dollar</option>
                        <option value="ALL">Albanian Lek</option>
                        <option value="DZD">Algerian Dinar</option>
                        <option value="ARS">Argentine Peso</option>
                        <option value="AMD">Armenian Dram</option>
                        <option value="AUD">Australian Dollar</option>
                        <option value="AZN">Azerbaijan New Manat</option>
                        <option value="BSD">Bahamian Dollar</option>
                        <option value="BHD">Bahraini Dinar</option>
                        <option value="BDT">Bangladeshi Taka</option>
                        <option value="BZD">Belize Dollar</option>
                        <option value="BOB">Bolivian Boliviano</option>
                        <option value="BRL">Brazilian Real</option>
                        <option value="GBP">British Pound</option>
                        <option value="BND">Brunei Dollar</option>
                        <option value="XOF">CFA Franc BCEAO</option>
                        <option value="XAF">CFA Franc BEAC</option>
                        <option value="XPF">CFP Franc</option>
                        <option value="KHR">Cambodian Riel</option>
                        <option value="CAD">Canadian Dollar</option>
                        <option value="CLP">Chilean Peso</option>
                        <option value="CNY">Chinese Yuan Renminbi</option>
                        <option value="COP">Colombian Peso</option>
                        <option value="KMF">Comoros Franc</option>
                        <option value="CRC">Costa Rican Colon</option>
                        <option value="HRK">Croatian Kuna</option>
                        <option value="CUC">Cuban Convertible Peso</option>
                        <option value="CZK">Czech Koruna</option>
                        <option value="DKK">Danish Krone</option>
                        <option value="DJF">Djibouti Franc</option>
                        <option value="DOP">Dominican R. Peso</option>
                        <option value="XCD">East Caribbean Dollar</option>
                        <option value="EGP">Egyptian Pound</option>
                        <option value="EEK">Estonian Kroon</option>
                        <option value="EUR">Euro</option>
                        <option value="FJD">Fiji Dollar</option>
                        <option value="HNL">Honduran Lempira</option>
                        <option value="HKD">Hong Kong Dollar</option>
                        <option value="HUF">Hungarian Forint</option>
                        <option value="ISK">Iceland Krona</option>
                        <option value="INR">Indian Rupee</option>
                        <option value="IDR">Indonesian Rupiah</option>
                        <option value="ILS">Israeli New Shekel</option>
                        <option value="JPY">Japanese Yen</option>
                        <option value="JOD">Jordanian Dinar</option>
                        <option value="KZT">Kazakhstan Tenge</option>
                        <option value="KES">Kenyan Shilling</option>
                        <option value="KWD">Kuwaiti Dinar</option>
                        <option value="LAK">Lao Kip</option>
                        <option value="LVL">Latvian Lats</option>
                        <option value="LBP">Lebanese Pound</option>
                        <option value="LTL">Lithuanian Litas</option>
                        <option value="MYR">Malaysian Ringgit</option>
                        <option value="MRO">Mauritanian Ouguiya</option>
                        <option value="MUR">Mauritius Rupee</option>
                        <option value="MXN">Mexican Peso</option>
                        <option value="MNT">Mongolian Tugrik</option>
                        <option value="MAD">Moroccan Dirham</option>
                        <option value="NAD">Namibia Dollar</option>
                        <option value="NPR">Nepalese Rupee</option>
                        <option value="NZD">New Zealand Dollar</option>
                        <option value="NIO">Nicaraguan Cordoba Oro</option>
                        <option value="NOK">Norwegian Kroner</option>
                        <option value="OMR">Omani Rial</option>
                        <option value="PKR">Pakistan Rupee</option>
                        <option value="PGK">Papua New Guinea Kina</option>
                        <option value="PEN">Peruvian Nuevo Sol</option>
                        <option value="PHP">Philippine Peso</option>
                        <option value="PLN">Polish Zloty</option>
                        <option value="QAR">Qatari Rial</option>
                        <option value="RON">Romanian New Lei</option>
                        <option value="RUB">Russian Rouble</option>
                        <option value="WST">Samoan Tala</option>
                        <option value="SAR">Saudi Riyal</option>
                        <option value="SGD">Singapore Dollar</option>
                        <option value="SKK">Slovak Koruna</option>
                        <option value="SOS">Somali Shilling</option>
                        <option value="ZAR">South African Rand</option>
                        <option value="KRW">South-Korean Won</option>
                        <option value="LKR">Sri Lanka Rupee</option>
                        <option value="SZL">Swaziland Lilangeni</option>
                        <option value="SEK">Swedish Krona</option>
                        <option value="CHF">Swiss Franc</option>
                        <option value="TWD">Taiwan Dollar</option>
                        <option value="TZS">Tanzanian Shilling</option>
                        <option value="THB">Thai Baht</option>
                        <option value="TOP">Tonga Pa'anga</option>
                        <option value="TTD">Trinidad/Tobago Dollar</option>
                        <option value="TND">Tunisian Dinar</option>
                        <option value="TRY">Turkish Lira</option>
                        <option value="USD">US Dollar</option>
                        <option value="UGX">Uganda Shilling</option>
                        <option value="UAH">Ukraine Hryvnia</option>
                        <option value="UYU">Uruguayan Peso</option>
                        <option value="AED">Utd. Arab Emir. Dirham</option>
                        <option value="VUV">Vanuatu Vatu</option>
                        <option value="VEB">Venezuelan Bolivar</option>
                        <option value="VND">Vietnamese Dong</option>
                </select> -->

                <input type="submit" name="Submit"  value="search" class="article_button search">
        </form>
</div>
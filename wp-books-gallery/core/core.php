<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *	Trait: Core
 */
trait Wbg_Core
{
	protected $data;
  protected $hmCurrency = '';

	protected function wbg_build_set_settings_options( $fields, $post ) {

		$this->data = [];

		$i=0;
        
    foreach ( $fields as $field => $value ) {

        if ( 'string' === $fields[$i]['type'] ) {

            $this->data[$fields[$i]['name']] = isset( $post[$fields[$i]['name']] ) && filter_var( $post[$fields[$i]['name']], FILTER_SANITIZE_STRING ) ? $post[$fields[$i]['name']] : $fields[$i]['default'];

        }
        if ( 'number' === $fields[$i]['type'] ) {

            $this->data[$fields[$i]['name']] = isset( $post[$fields[$i]['name']] ) && filter_var( $post[$fields[$i]['name']], FILTER_SANITIZE_NUMBER_INT ) ? $post[$fields[$i]['name']] : $fields[$i]['default'];

        }
        if ( 'boolean' === $fields[$i]['type'] ) {

            $this->data[$fields[$i]['name']] = isset( $post[$fields[$i]['name']] ) ? $post[$fields[$i]['name']] : $fields[$i]['default'];

        }
        if ( 'text' === $this->fields[$i]['type'] ) {

            $this->data[$this->fields[$i]['name']] = isset( $post[$this->fields[$i]['name']] ) ? sanitize_text_field( $post[$this->fields[$i]['name']] ) : $this->fields[$i]['default'];

        }
        if ( 'textarea' === $this->fields[$i]['type'] ) {

            $this->data[$this->fields[$i]['name']] = isset( $post[$this->fields[$i]['name']] ) ? sanitize_textarea_field( $post[$this->fields[$i]['name']] ) : $this->fields[$i]['default'];

        }
        if ( 'email' === $this->fields[$i]['type'] ) {

            $this->data[$this->fields[$i]['name']] = isset( $post[$this->fields[$i]['name']] ) ? sanitize_email( $post[$this->fields[$i]['name']] ) : $this->fields[$i]['default'];

        }
        $i++;
    }

		return $this->data;
	}

	protected function wbg_build_get_settings_options( $fields, $settings ) {
		
		$this->data = [];
    $i=0;

    foreach ( $fields as $option => $value ) {

      $this->data[$fields[$i]['name']]  = isset( $settings[$fields[$i]['name']] ) ? $settings[$fields[$i]['name']] : $fields[$i]['default'];
      $i++;
    }

		return $this->data;
	}

  protected function wbg_get_all_currency() {

    $this->hmCurrency = '[
            {
              "currency": "Albania Lek",
              "abbreviation": "ALL",
              "symbol": "&#76;&#101;&#107;"
            },
            {
              "currency": "Afghanistan Afghani",
              "abbreviation": "AFN",
              "symbol": "&#1547;"
            },
            {
              "currency": "Argentina Peso",
              "abbreviation": "ARS",
              "symbol": "&#36;"
            },
            {
              "currency": "Aruba Guilder",
              "abbreviation": "AWG",
              "symbol": "&#402;"
            },
            {
              "currency": "Australia Dollar",
              "abbreviation": "AUD",
              "symbol": "&#36;"
            },
            {
              "currency": "Azerbaijan New Manat",
              "abbreviation": "AZN",
              "symbol": "&#1084;&#1072;&#1085;"
            },
            {
              "currency": "Bahamas Dollar",
              "abbreviation": "BSD",
              "symbol": "&#36;"
            },
            {
              "currency": "Barbados Dollar",
              "abbreviation": "BBD",
              "symbol": "&#36;"
            },
            {
              "currency": "Belarus Ruble",
              "abbreviation": "BYR",
              "symbol": "&#112;&#46;"
            },
            {
              "currency": "Belize Dollar",
              "abbreviation": "BZD",
              "symbol": "&#66;&#90;&#36;"
            },
            {
              "currency": "Bermuda Dollar",
              "abbreviation": "BMD",
              "symbol": "&#36;"
            },
            {
              "currency": "Bolivia Boliviano",
              "abbreviation": "BOB",
              "symbol": "&#36;&#98;"
            },
            {
              "currency": "Bosnia and Herzegovina Convertible Marka",
              "abbreviation": "BAM",
              "symbol": "&#75;&#77;"
            },
            {
              "currency": "Botswana Pula",
              "abbreviation": "BWP",
              "symbol": "&#80;"
            },
            {
              "currency": "Bulgaria Lev",
              "abbreviation": "BGN",
              "symbol": "&#1083;&#1074;"
            },
            {
              "currency": "Brazil Real",
              "abbreviation": "BRL",
              "symbol": "&#82;&#36;"
            },
            {
              "currency": "Brunei Darussalam Dollar",
              "abbreviation": "BND",
              "symbol": "&#36;"
            },
            {
              "currency": "Cambodia Riel",
              "abbreviation": "KHR",
              "symbol": "&#6107;"
            },
            {
              "currency": "Canada Dollar",
              "abbreviation": "CAD",
              "symbol": "&#36;"
            },
            {
              "currency": "Cayman Islands Dollar",
              "abbreviation": "KYD",
              "symbol": "&#36;"
            },
            {
              "currency": "Chile Peso",
              "abbreviation": "CLP",
              "symbol": "&#36;"
            },
            {
              "currency": "China Yuan Renminbi",
              "abbreviation": "CNY",
              "symbol": "&#165;"
            },
            {
              "currency": "Colombia Peso",
              "abbreviation": "COP",
              "symbol": "&#36;"
            },
            {
              "currency": "Costa Rica Colon",
              "abbreviation": "CRC",
              "symbol": "&#8353;"
            },
            {
              "currency": "Croatia Kuna",
              "abbreviation": "HRK",
              "symbol": "&#107;&#110;"
            },
            {
              "currency": "Cuba Peso",
              "abbreviation": "CUP",
              "symbol": "&#8369;"
            },
            {
              "currency": "Czech Republic Koruna",
              "abbreviation": "CZK",
              "symbol": "&#75;&#269;"
            },
            {
              "currency": "Denmark Krone",
              "abbreviation": "DKK",
              "symbol": "&#107;&#114;"
            },
            {
              "currency": "Dominican Republic Peso",
              "abbreviation": "DOP",
              "symbol": "&#82;&#68;&#36;"
            },
            {
              "currency": "East Caribbean Dollar",
              "abbreviation": "XCD",
              "symbol": "&#36;"
            },
            {
              "currency": "Egypt Pound",
              "abbreviation": "EGP",
              "symbol": "&#163;"
            },
            {
              "currency": "El Salvador Colon",
              "abbreviation": "SVC",
              "symbol": "&#36;"
            },
            {
              "currency": "Estonia Kroon",
              "abbreviation": "EEK",
              "symbol": "&#107;&#114;"
            },
            {
              "currency": "Euro Member Countries",
              "abbreviation": "EUR",
              "symbol": "&#8364;"
            },
            {
              "currency": "Falkland Islands (Malvinas) Pound",
              "abbreviation": "FKP",
              "symbol": "&#163;"
            },
            {
              "currency": "Fiji Dollar",
              "abbreviation": "FJD",
              "symbol": "&#36;"
            },
            {
              "currency": "Ghana Cedis",
              "abbreviation": "GHC",
              "symbol": "&#162;"
            },
            {
              "currency": "Gibraltar Pound",
              "abbreviation": "GIP",
              "symbol": "&#163;"
            },
            {
              "currency": "Guatemala Quetzal",
              "abbreviation": "GTQ",
              "symbol": "&#81;"
            },
            {
              "currency": "Guernsey Pound",
              "abbreviation": "GGP",
              "symbol": "&#163;"
            },
            {
              "currency": "Guyana Dollar",
              "abbreviation": "GYD",
              "symbol": "&#36;"
            },
            {
              "currency": "Honduras Lempira",
              "abbreviation": "HNL",
              "symbol": "&#76;"
            },
            {
              "currency": "Hong Kong Dollar",
              "abbreviation": "HKD",
              "symbol": "&#36;"
            },
            {
              "currency": "Hungary Forint",
              "abbreviation": "HUF",
              "symbol": "&#70;&#116;"
            },
            {
              "currency": "Iceland Krona",
              "abbreviation": "ISK",
              "symbol": "&#107;&#114;"
            },
            {
              "currency": "India Rupee",
              "abbreviation": "INR",
              "symbol": null
            },
            {
              "currency": "Indonesia Rupiah",
              "abbreviation": "IDR",
              "symbol": "&#82;&#112;"
            },
            {
              "currency": "Iran Rial",
              "abbreviation": "IRR",
              "symbol": "&#65020;"
            },
            {
              "currency": "Isle of Man Pound",
              "abbreviation": "IMP",
              "symbol": "&#163;"
            },
            {
              "currency": "Israel Shekel",
              "abbreviation": "ILS",
              "symbol": "&#8362;"
            },
            {
              "currency": "Jamaica Dollar",
              "abbreviation": "JMD",
              "symbol": "&#74;&#36;"
            },
            {
              "currency": "Japan Yen",
              "abbreviation": "JPY",
              "symbol": "&#165;"
            },
            {
              "currency": "Jersey Pound",
              "abbreviation": "JEP",
              "symbol": "&#163;"
            },
            {
              "currency": "Kazakhstan Tenge",
              "abbreviation": "KZT",
              "symbol": "&#1083;&#1074;"
            },
            {
              "currency": "Korea (North) Won",
              "abbreviation": "KPW",
              "symbol": "&#8361;"
            },
            {
              "currency": "Korea (South) Won",
              "abbreviation": "KRW",
              "symbol": "&#8361;"
            },
            {
              "currency": "Kyrgyzstan Som",
              "abbreviation": "KGS",
              "symbol": "&#1083;&#1074;"
            },
            {
              "currency": "Laos Kip",
              "abbreviation": "LAK",
              "symbol": "&#8365;"
            },
            {
              "currency": "Latvia Lat",
              "abbreviation": "LVL",
              "symbol": "&#76;&#115;"
            },
            {
              "currency": "Lebanon Pound",
              "abbreviation": "LBP",
              "symbol": "&#163;"
            },
            {
              "currency": "Liberia Dollar",
              "abbreviation": "LRD",
              "symbol": "&#36;"
            },
            {
              "currency": "Lithuania Litas",
              "abbreviation": "LTL",
              "symbol": "&#76;&#116;"
            },
            {
              "currency": "Macedonia Denar",
              "abbreviation": "MKD",
              "symbol": "&#1076;&#1077;&#1085;"
            },
            {
              "currency": "Malaysia Ringgit",
              "abbreviation": "MYR",
              "symbol": "&#82;&#77;"
            },
            {
              "currency": "Mauritius Rupee",
              "abbreviation": "MUR",
              "symbol": "&#8360;"
            },
            {
              "currency": "Mexico Peso",
              "abbreviation": "MXN",
              "symbol": "&#36;"
            },
            {
              "currency": "Mongolia Tughrik",
              "abbreviation": "MNT",
              "symbol": "&#8366;"
            },
            {
              "currency": "Mozambique Metical",
              "abbreviation": "MZN",
              "symbol": "&#77;&#84;"
            },
            {
              "currency": "Namibia Dollar",
              "abbreviation": "NAD",
              "symbol": "&#36;"
            },
            {
              "currency": "Nepal Rupee",
              "abbreviation": "NPR",
              "symbol": "&#8360;"
            },
            {
              "currency": "Netherlands Antilles Guilder",
              "abbreviation": "ANG",
              "symbol": "&#402;"
            },
            {
              "currency": "New Zealand Dollar",
              "abbreviation": "NZD",
              "symbol": "&#36;"
            },
            {
              "currency": "Nicaragua Cordoba",
              "abbreviation": "NIO",
              "symbol": "&#67;&#36;"
            },
            {
              "currency": "Nigeria Naira",
              "abbreviation": "NGN",
              "symbol": "&#8358;"
            },
            {
              "currency": "Korea (North) Won",
              "abbreviation": "KPW",
              "symbol": "&#8361;"
            },
            {
              "currency": "Norway Krone",
              "abbreviation": "NOK",
              "symbol": "&#107;&#114;"
            },
            {
              "currency": "Oman Rial",
              "abbreviation": "OMR",
              "symbol": "&#65020;"
            },
            {
              "currency": "Pakistan Rupee",
              "abbreviation": "PKR",
              "symbol": "&#8360;"
            },
            {
              "currency": "Panama Balboa",
              "abbreviation": "PAB",
              "symbol": "&#66;&#47;&#46;"
            },
            {
              "currency": "Paraguay Guarani",
              "abbreviation": "PYG",
              "symbol": "&#71;&#115;"
            },
            {
              "currency": "Peru Nuevo Sol",
              "abbreviation": "PEN",
              "symbol": "&#83;&#47;&#46;"
            },
            {
              "currency": "Philippines Peso",
              "abbreviation": "PHP",
              "symbol": "&#8369;"
            },
            {
              "currency": "Poland Zloty",
              "abbreviation": "PLN",
              "symbol": "&#122;&#322;"
            },
            {
              "currency": "Qatar Riyal",
              "abbreviation": "QAR",
              "symbol": "&#65020;"
            },
            {
              "currency": "Romania New Leu",
              "abbreviation": "RON",
              "symbol": "&#108;&#101;&#105;"
            },
            {
              "currency": "Russia Ruble",
              "abbreviation": "RUB",
              "symbol": "&#1088;&#1091;&#1073;"
            },
            {
              "currency": "Saint Helena Pound",
              "abbreviation": "SHP",
              "symbol": "&#163;"
            },
            {
              "currency": "Saudi Arabia Riyal",
              "abbreviation": "SAR",
              "symbol": "&#65020;"
            },
            {
              "currency": "Serbia Dinar",
              "abbreviation": "RSD",
              "symbol": "&#1044;&#1080;&#1085;&#46;"
            },
            {
              "currency": "Seychelles Rupee",
              "abbreviation": "SCR",
              "symbol": "&#8360;"
            },
            {
              "currency": "Singapore Dollar",
              "abbreviation": "SGD",
              "symbol": "&#36;"
            },
            {
              "currency": "Solomon Islands Dollar",
              "abbreviation": "SBD",
              "symbol": "&#36;"
            },
            {
              "currency": "Somalia Shilling",
              "abbreviation": "SOS",
              "symbol": "&#83;"
            },
            {
              "currency": "South Africa Rand",
              "abbreviation": "ZAR",
              "symbol": "&#82;"
            },
            {
              "currency": "Korea (South) Won",
              "abbreviation": "KRW",
              "symbol": "&#8361;"
            },
            {
              "currency": "Sri Lanka Rupee",
              "abbreviation": "LKR",
              "symbol": "&#8360;"
            },
            {
              "currency": "Sweden Krona",
              "abbreviation": "SEK",
              "symbol": "&#107;&#114;"
            },
            {
              "currency": "Switzerland Franc",
              "abbreviation": "CHF",
              "symbol": "&#67;&#72;&#70;"
            },
            {
              "currency": "Suriname Dollar",
              "abbreviation": "SRD",
              "symbol": "&#36;"
            },
            {
              "currency": "Syria Pound",
              "abbreviation": "SYP",
              "symbol": "&#163;"
            },
            {
              "currency": "Taiwan New Dollar",
              "abbreviation": "TWD",
              "symbol": "&#78;&#84;&#36;"
            },
            {
              "currency": "Thailand Baht",
              "abbreviation": "THB",
              "symbol": "&#3647;"
            },
            {
              "currency": "Trinidad and Tobago Dollar",
              "abbreviation": "TTD",
              "symbol": "&#84;&#84;&#36;"
            },
            {
              "currency": "Turkey Lira",
              "abbreviation": "TRY",
              "symbol": null
            },
            {
              "currency": "Turkey Lira",
              "abbreviation": "TRL",
              "symbol": "&#8356;"
            },
            {
              "currency": "Tuvalu Dollar",
              "abbreviation": "TVD",
              "symbol": "&#36;"
            },
            {
              "currency": "Ukraine Hryvna",
              "abbreviation": "UAH",
              "symbol": "&#8372;"
            },
            {
              "currency": "United Arab Emirates",
              "abbreviation": "AED",
              "symbol": "&#x62f;&#x2e;&#x625;"
            },
            {
              "currency": "United Kingdom Pound",
              "abbreviation": "GBP",
              "symbol": "&#163;"
            },
            {
              "currency": "United States Dollar",
              "abbreviation": "USD",
              "symbol": "&#36;"
            },
            {
              "currency": "Uruguay Peso",
              "abbreviation": "UYU",
              "symbol": "&#36;&#85;"
            },
            {
              "currency": "Uzbekistan Som",
              "abbreviation": "UZS",
              "symbol": "&#1083;&#1074;"
            },
            {
              "currency": "Venezuela Bolivar",
              "abbreviation": "VEF",
              "symbol": "&#66;&#115;"
            },
            {
              "currency": "Viet Nam Dong",
              "abbreviation": "VND",
              "symbol": "&#8363;"
            },
            {
              "currency": "Yemen Rial",
              "abbreviation": "YER",
              "symbol": "&#65020;"
            },
            {
              "currency": "Zimbabwe Dollar",
              "abbreviation": "ZWD",
              "symbol": "&#90;&#36;"
            }
          ]';

    return json_decode( $this->hmCurrency );
  }

  public function wbg_get_currency_symbol( $cr ) {

    $wbgCurrency = $this->wbg_get_all_currency();
    foreach ( $wbgCurrency as $currency ) {
      if ( $cr === $currency->abbreviation ) {
        return $currency->symbol;
      }
    }
  }

  function wbg_mss_items() {
		return ['Alibris', 'Amazon', 'Amazon Kindle', 'Apple Books', 'Barnes & Noble', 'Bookshop org', 'Google Play', 'Kobo', 'Lifeway', 'Mardel', 'Smashwords', 'Sony Reader', 'Waterstones'];
	}

  function wbg_book_formats() {

    $formats = [];
    
    if ( taxonomy_exists( 'book_format' ) ) {

      $get_formats = get_terms( array( 'taxonomy' => 'book_format', 'hide_empty' => false, 'orderby' => 'name', 'order' => 'ASC',  'parent' => 0 ) );

      if ( count( $get_formats ) > 0 ) {
        foreach ( $get_formats as $bf ) {
          $formats[] = $bf->name;
        }
      }  
    } else {
      $formats = ['Kindle', 'Audiobook', 'Hardcover', 'Paperback'];
    }
      
    return $formats;
  }

  function wbg_load_pricing( $currency, $id, $format, $free_price = null, $free_lbl = null ) {
    
    $wbgp_regular_price  = get_post_meta( $id, 'wbgp_regular_price', true );
    $wbgp_sale_price     = get_post_meta( $id, 'wbgp_sale_price', true );

    $wbgp_regular_price = intval( $wbgp_regular_price );
    $wbgp_sale_price    = intval( $wbgp_sale_price );

    if ( ! $wbgp_regular_price ) {
      $wbgp_regular_price = ( ! $free_price ) ? esc_html( $currency ) . '0' : esc_html( $free_lbl );
    }
    
    //if ( ( '' != $wbgp_sale_price ) || ( '' != $wbgp_regular_price ) ) {
      ?>
      <div class="regular-price">
          <?php
          if ( empty( $wbgp_sale_price ) ) {
              $regualr_price = ( $wbgp_regular_price > 0 ) ? esc_html( $currency ) . $this->load_price_format( $wbgp_regular_price, $format ) :  $wbgp_regular_price;
              echo '<span class="wbgp-price price-after">' . $regualr_price . '</span>'; 
          } else {
              echo '<span class="wbgp-price price-before">' . esc_html( $currency ) . $this->load_price_format( $wbgp_regular_price, $format ) . '</span>&nbsp;&nbsp;<span class="wbgp-price price-after">' . esc_html( $currency ) . $this->load_price_format( $wbgp_sale_price, $format ) . '</span>';
          }
          ?>
      </div>
      <?php
    //}
  }

  function load_price_format( $price, $format ) {
    
    if ( 'default' === $format ) {
      $price_format = number_format( ( esc_html( $price ) / 100 ), 2, ".", "" );
    }

    if ( 'comma' === $format ) {
      $price_format = number_format( ( esc_html( $price ) / 100 ), 2 );
    }

    if ( 'space' === $format ) {
      $price_format = number_format( ( esc_html( $price ) / 100 ), 2, "."," " );
    }

    return $price_format;
  }
}
?>
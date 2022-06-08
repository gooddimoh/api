<?php
$url = "https://odri-ua.com/api/v2/auth/signin";

$apilogin = "info@reise-zentrum.net";
$apipass = "kolotun15";

$result1 = wp_remote_get( 'https://api.github.com/users/wordpress' );
$body     = wp_remote_retrieve_body( $response );

function callAPI($method, $url, $data)
{
    $odri_api_key = "DcpjyOnvTkKeZ8mcmYy/8Q==";
    $curl = curl_init();
    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "postvar1=value1&postvar2=value2&postvar3=value3");
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'APIKEY: ' . $odri_api_key . '',
        'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('postvar1' => 'value1')));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);

    return $result;
}

$user = [];

$get_data = callAPI('GET', 'https://api.example.com/get_url/'.$user, false);
$response = json_decode($get_data, true);
$errors = $response['response']['errors'];
$data = $response['response']['data'][0];


class ordiapi {
    public $url = "";

    public function __construct($url)
    {
        $this->url = "https://odri-ua.com/api/v2/auth/signin";
    }

    function auth_sign_in($url){

    }
    function auth_sign_up($url){}
    function auth_sign_forgot_password($url){}
    function auth_sign_reset_password($url){}

    function v2booking_search_tripts($url){}
    function v2booking_trip_details($url){}
    function v2booking_pessenger_ticket_price($url){}
    function v2booking_reserve_tickets($url){}
    function v2booking_pay_order($url){}
    function v2booking_get_bus_map_for_trip($url){}
    function v2booking_cancel_ticket($url){}

    function bookingv3_get_bus_map_for_trip_id($url){}

    function v3_cache_cache_countries($url){}
    function v3_cache_cities($url){}
    function v3_cache_cities_get_the_same_country_cities($url,$id){}
    function v3_cache_currencies($url){}
    function v3_cache_currency_rates($url){}
    function v3_cache_routes($url){}

    function api_v3_tools_gps_start_bus_tracking($url){}
    function api_v3_tools_gps_get_info_about_events_occurred_since_last_execution($url){ }
    function api_v3_tools_gps_stop_session($url){}

    function api_v2_profile_get_me($url){}
    function api_v2_profile_update_me($url){}
    function api_v2_profile_update_password($url){}

    function api_v2_references_contacts($url){}
    function api_v2_references_awards($url){ }
    function api_v2_references_partners($url){ }
    function api_v2_references_news($url){ }
    function api_v2_references_news_details($url){ }
    function api_v2_references_pages($url){ }
    function api_v2_references_page_details($url){}
    function api_v2_references_page_details_key($url){ }
    function api_v2_references_about_company($url){ }
    function api_v2_references_currencies($url){ }
    function api_v2_references_currency_rates($url){ }
    function api_v2_references_currency_rate_details($url){ }
    function api_v2_references_buses($url){}
    function api_v2_references_bus_details($url){ }

    function api_v2_references_testimonials($url){}
    function api_v2_references_add_testimonial($url){ }
    function api_v2_references_routes($url){ }
    function api_v2_references_route_details($url){}
    function api_v2_references_route_details_key($url){}
    function api_v2_references_passenger_types_by_trip_id($url){}
    function api_v2_references_cities($url){}
    function api_v2_references_cities_for_all_languages($url){}
    function api_v2_references_city_details($url){}
    function api_v2_references_bank_details($url){}
    function api_v2_references_get_default_user_discount($url){}

    function v2_references_get_grouped_faq_items($url){}


}



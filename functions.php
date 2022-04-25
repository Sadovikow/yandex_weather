function refreshStelaWeather() {
	$curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.weather.yandex.ru/v2/forecast?lat=55.829861&lon=37.631760&units=si&hours=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Content-type: application/json",
                "X-Yandex-API-Key: xxxxxxxxx-xxxxxxxxx-xxxxxxxxxx-xxxxxxxxxx"
            ],
        ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
        } else {
            file_put_contents('/weather.json', $response);
        }
}

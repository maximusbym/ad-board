<?php

function locale_link( $route, $locale ) {

//    $components = parse_url($route);
//    $route = $components['path'] . '?' . $components['query'] . '#' . $components['fragment'];

    // Викидаєм ХОСТ з силки
    $url = parse_url($route);
    $route = $url['path'];
    if (isset($url['query'])) $route .= "?{$url[query]}";
    if (isset($url['fragment'])) $route .= "#{$url[fragment]}";

    // Якщо поточна силка вже містить якусь локаль
    if( array_key_exists( substr( $route, 1, 2 ), config('app.locales') ) ) {

        // Якщо ми створюєм ссилку з локалью не 'ua'
        if( $locale != 'ua' ) {
            // Заміняєм поточну локаль на потрібну
            $res = str_replace( substr( $route, 1, 2 ), $locale, $route );
        }
        // Інакше заміняєм поточну на пусту строку, бо 'ua' локаль в нас по замовчуванню
        else {
            $res = str_replace( substr( $route, 0, 3 ), '', $route );
        }
//        $res = $locale != 'ua' ? str_replace( substr( $route, 1, 2 ), $locale, $route ) : str_replace( substr( $route, 0, 3 ), '', $route ) ;
    }
    // Якщо поточна силка не містить локалі, тобто поточна сторінка українська
    else {
        // Ми додаєм перед силкою потрібну локаль
        if( $locale != 'ua' ) {
            $res = '/'.$locale.$route;
        }
        // а для української локалі вертаєм поточну сторінку як є
        else {
            $res = $route;
        }
//        $res = $locale != 'ua' ? '/'.$locale.$route : $route ;
    }

    return $res == '' ? '/' : $res;
}
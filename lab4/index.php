<?php 
    // preg_match_all('/a+/', 'aaaa aaaaaaa aaaaaa ee d', $matches).'</br>';
    // var_dump($matches);
    // echo '</br>';
    // echo $matches[0][1];
    // echo preg_match('/\b[a-z-]+@[a-z]+\.[a-z]{2,3}\b/', 'my-email@mail.ru')
    // echo preg_match('#^[a-z-]+@[a-z]+\.[a-z]{2,3}$#', 'my-email@mail.ru')

    // preg_match_all('/[a-z]+\.([a-z]{2,3})/', 'domain.com hello.ru site.by', $matches);
    // var_dump($matches);

    // echo preg_replace('/(a+)@(b+)/', '$2@$1', 'a@b aa@bb');
    // echo preg_replace('/[a|b]+/', '!$0!', 'aaa bbb');
    // echo preg_replace('/([a-z])\1/', '!', 'aaebbc');
    // echo preg_replace('/(?:ab)+([a-z])/', '!$1', 'ababx abe');
    // echo preg_replace('/([a-z]+):(\d+)/', '$2:$1','aaa:444 kkk:333');

    // echo preg_replace('/(?<=x)a+/', '!', 'xaaa baaa')





    // $pattern = '/[a-z0-9]+\.[a-z0-9]+\.[a-z0-9]{2,3}/';
    // $str = 'hello.site.ru hello.site.com hello.my-site.com';
    // $domains = explode(' ', $str);
    // foreach ($domains as $domain) {
    //     if (preg_match_all($pattern, $domain, $matches)) {
    //         echo 'Домен '.$domain.' - трёхуровневый'.'</br>';
    //     }else {
    //         echo 'Домен '.$domain.' - не трёхуровневый'.'</br>';
    //     }
    // }

    
    // $pattern = '/^https?:\/\/[a-z]+\.[a-z]{2,3}\/?/';
    // $str = 'http://site.ru http://site.ru/ https://site.ru site.ru/'; 
    // $domains = explode(' ', $str);
    // foreach ($domains as $domain) {
    //     if (preg_match_all($pattern, $domain, $matches)) {
    //         echo $domain.' - домен'.'</br>';
    //     }else {
    //         echo $domain.' - не домен'.'</br>';
    //     }
    // }

    // $pattern = '/\b\w+\b/';
    // $str = 'xbx aca aea abba adca abea';
    // echo preg_replace($pattern, '!$0!', $str);

    // $date = '31-12-2014';
    // $pattern = '/(\d{2})-(\d{2})-(\d{4})/';
    // $new_date = preg_replace($pattern, '$3.$2.$1', $date);
    // echo $new_date;

    $str = 'aa aba abba abbba abbbba abbbbba';
    $pattern = '/\b\w*b\w*b\w*\b/';
    preg_match_all($pattern, $str, $matches);
    print_r($matches[0]);



?>

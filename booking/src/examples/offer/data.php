<?

const DEFAULT_IMAGE = 'https://nayemdevs.com/wp-content/uploads/2020/03/default-product-image.png';
const NEW_STICKER = 'https://cdn1.iconfinder.com/data/icons/smallicons-ecommerce/32/new-512.png';

$products = [

    [

        'name' =>'Test Product 1',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category B',
        'new' => false,
        'price' => [
                     'amount' => 400,
                     'currency' => 'USD',
            ]
    ],

    [

        'name' =>'Test Product 2',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category A',
        'new' => NEW_STICKER,
        'price' => [
                     'amount' => 700,
                     'currency' => 'USD',
                ]
    ],

    [

        'name' =>'Test Product 3',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
                     'amount' => 600,
                     'currency' => 'USD',
                    ]
    ],

    [

        'name' =>'Test Product 4',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category B',
        'new' => NEW_STICKER,
        'price' => [
                     'amount' => 900,
                     'currency' => 'USD',
                        ]
    ],

    [

        'name' =>'Test Product 5',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category A',
        'new' => false,
        'price' => [
                     'amount' => 200,
                     'currency' => 'USD',
                            ]
    ],

    [
        'name' =>'Test Product 6',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
                 'amount' => 100,
                 'currency' => 'USD',
        ]
    ],
    [

        'name' =>'Test Product 7',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category B',
        'new' => false,
        'price' => [
                     'amount' => 500,
                     'currency' => 'USD',
            ]
    ],

    [

        'name' =>'Test Product 8',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category A',
        'new' => false,
        'price' => [
                     'amount' => 300,
                     'currency' => 'USD',
                ]
    ],

    [

        'name' =>'Test Product 9',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
                     'amount' => 800,
                     'currency' => 'USD',
                    ]
    ],

]; 

if(isset($_GET['p'])){
    $page = $_GET['p'];
    }else{
        $page = 1;
    }
 

if(
    $page >=2
){
    $prev_page = $page - 1;
}



if($page <=3 ){
    $next_page = $page + 1;
}


if(isset($_GET['s'])){
    $sort = $_GET['s'];
}else{
    $sort ='ascendent';
}

  
  if($sort === 'ascendent'){
  usort($products, function($p1, $p2){
      return $p1['price']['amount'] - $p2['price']['amount'];}
  );
  
  }else{
  usort($products, function($p1, $p2){
      return $p2['price']['amount'] - $p1['price']['amount'];}
  );
  }

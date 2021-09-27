<section class="fourth-section" style="background-image: url(http://boboti.com.ua/wp-content/uploads/2017/10/IMG_4480.jpg); height: 850px; display: block;     background-repeat: no-repeat;
background-size: cover;
background-position: center center;     background-color: #000000;">
    <div class="behind-menu" style="height: inherit; background-color: rgba(0, 0, 0, 0.48);">
        <div class="menu-title-aligner">
            <h2 style="text-align: center; margin-top:20px; margin-bottom: 150px;">Меню</h2>
        </div>

        <div class="menu">
            <div class="menu-title">

            </div>  
            <div class="menu-dishes">
                <ul class="dishes">
                     @foreach($dishes as $dish)
                        <li class="product-name">
                            {{$item['name']}}
                            <span class="product-price">{{$item['cost']}}</span>
                        </li>
                        <li class="product-description">{{$item['ingredients']}}</li>
                        
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</section>

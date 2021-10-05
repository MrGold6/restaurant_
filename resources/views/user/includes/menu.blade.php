<h2 style="text-align: center; margin-top:20px; margin-bottom: 20px;">Меню</h2>

        <div class="menu">
            <div class="menu-title">

            </div>  
            <div class="menu-dishes">
                <ul class="dishes">

                     @foreach($dishes as $dish)
                        <li class="product-name">
                            {{$dish->name}}
                            <span class="product-price">{{$dish->cost}}</span>
                        </li>
                        <li class="product-description">{{$dish->ingredients}}</li>
                        
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</section>
<img src="http://boboti.com.ua/wp-content/uploads/2017/10/IMG_4480.jpg" style="width: 100%">
<li class="a-popup u-list-style-none gridCard">
    <a href="/huizen/{{$huis->id}}">
        <article>
            <header class="gridCard__header u-flex-h-center u-flex-v-center">
                <h2 class="gridCard__heading">{{$huis->name}}</h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$huis->image}}" alt="{{$huis->name}}">
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$huis->street}} {{$huis->number}}, {{$huis->postal_code}}</p>
            </section>
        </article>
    </a>
</li>
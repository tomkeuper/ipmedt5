<li class="a-popup u-list-style-none gridCard">
    <a href="/huizen/{{$huis->id}}">
        <article>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src="{{$huis->image}}" alt="{{$huis->name}}">
            </figure>
            <header class="gridCard__header u-flex-h-center u-flex-v-center">
                <h2 class="gridCard__heading">{{$huis->name}}</h2>
            </header>
            <section class="gridCard__textSection u-flex-h-center u-flex-v-center">
                <p class="gridCard__text">{{$huis->street}} {{$huis->number}}, {{$huis->postal_code}} {{$huis->place}}</p>
            </section>
            <!-- <section class="gridCard__errorNotification">
                <img class="gridCard__errorImage" src="/img/checkmark/check.png" alt="{{$huis->name}}">
                <button class="gridcard__button">Hallo</button>
            </section> -->
        </article>
    </a>
</li>
<article class="houseCard a-popup">
    <figure class="houseCard__figure">
        <img class="houseCard__image" src="{{$huis->image}}" alt="{{$huis->name}}"/>
    </figure>
    <header class="houseCard__header u-flex-h-center u-flex-v-center">
        <h2 class="houseCard__heading">{{$huis->name}}</h2>
    </header>
    <section class="houseCard__textSection u-flex-h-center u-flex-v-center">
        <p class="houseCard__text">{{$huis->street}} {{$huis->number}}, {{$huis->postal_code}} {{$huis->place}}</p>
    </section>
    <section class="houseCard__sensor-beveiliging">
        <section class="houseCard__sensor">
            <h1 class="houseCard__heading">Sensoren</h1>
            <article class="houseCard__sensorFlex">
                @foreach($gas as $gas)
                <p class="houseCard__paragraph">Gas level</p>
                <p class="houseCard__paragraph">{{$gas->enabled}}</p>
                @endforeach
            </article>
            <article class="houseCard__sensorFlex">
                @foreach($water as $water)
                <p class="houseCard__paragraph">Water level</p>
                <p class="houseCard__paragraph">{{$water->enabled}}</p>
                @endforeach
            </article>
            <article class="houseCard__sensorFlex">
                @foreach($temperatuur as $temperatuur)
                <p class="houseCard__paragraph">Temperatuur</p>
                <p class="houseCard__paragraph">{{$temperatuur->value}}</p>
                @endforeach
            </article>
            <article class="houseCard__sensorFlex">
                @foreach($vochtigheid as $vochtigheid)
                <p class="houseCard__paragraph">Vochtigheid</p>
                <p class="houseCard__paragraph">{{$vochtigheid->value}}</p>
                @endforeach
            </article>
            <article class="houseCard__sensorFlex">
                @foreach($paniek as $paniek)
                <p class="houseCard__paragraph">Paniek knop</p>
                <p class="houseCard__paragraph">{{$paniek->enabled}}</p>
                @endforeach
            </article>
        </section>
        <section class="houseCard__beveiliging">
            <h1 class="houseCard__heading">Beveiliging</h1>
        </section>
    </section>
    <section class="houseCard__btnSection">
        <a class="houseCard__back_to_home" href="/dashboard">Ga terug naar home</a>
    </section>
</article>
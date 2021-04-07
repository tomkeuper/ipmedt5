<article class="sushiCard a-popup">
    <figure class="sushiCard__figure">
    <img class="sushiCard__image" src="{{$huis->image}}" alt="{{$huis->name}}"/>
    </figure>
    <section class="sushiCard__text">
        <p>{{$huis->description}}</p>
    </section>
    <section class="sushiCard__btnSection">
        <button class="sushiCard__button"> Order Now </button>
        <a class="sushiCard__back_to_home" href="/huizen">Back to home</a>
    </section>
</article>
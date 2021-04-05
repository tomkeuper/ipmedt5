<article class="sushiCard a-popup">
    <figure class="sushiCard__figure">
    <img class="sushiCard__image" src="{{$sushi->image}}" alt="{{$sushi->name . ' ' . $sushi->kind}}"/>
    </figure>

    <section class="sushiCard__text">
        <p>{{$sushi->description}}</p>
    </section>

    <section class="sushiCard__btnSection">
        <button class="sushiCard__button"> Order Now </button>
        <a class="sushiCard__back_to_home" href="/sushi">Back to home</a>
    </section>
</article>
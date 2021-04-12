<article class="houseCard a-popup">
    <figure class="houseCard__figure">
    <img class="houseCard__image" src="{{$huis->image}}" alt="{{$huis->name}}"/>
    </figure>
    <section class="houseCard__text">
        <p>{{$huis->description}}</p>
    </section>
    <section class="houseCard__btnSection">
        <button class="houseCard__button"> Order Now </button>
        <a class="houseCard__back_to_home" href="/huizen">Back to home</a>
    </section>
</article>
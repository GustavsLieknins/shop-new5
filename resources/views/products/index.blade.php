<x-layout>
  <main>
    <h1>Products</h1>
      <a href="/products/create">Uztaisīt jaunu</a>
      <section class="section_products">
      @foreach($products as $product)
        <a href="/products/{{$product->id}}" class="product_card_a">
          <article class="product_card">
            <h2>{{$product->name}}</h2>
            <img src={{$product->imageURL}} alt="{{$product->name}}" width="200px"/>
            <p>{{$product->description}}</p>
            <p>{{$product->price}} EUR</p>
          </article>
        </a>
      @endforeach
      </section>
  </main>
</x-layout>
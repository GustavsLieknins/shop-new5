<x-layout>
  <main>
    <h1>{{$product->name}}</h1>
    <img src={{$product->imageURL}} alt="{{$product->name}}" width="200px"/>
    <p>{{$product->description}}
    </p>
    <p>{{$product->price}} EUR</p>

    <form method="POST" action="/products/{{$product->id}}">
      @csrf
      @method("DELETE")
      <button class="cool_buttons red_but">Delete</button>
      <a href="/products" class="cool_buttons green_but">Back</a>
      <a href="/products/{{ $product->id }}/edit" class="cool_buttons blue_but">Edit</a>
    </form>

  </main>
</x-layout>
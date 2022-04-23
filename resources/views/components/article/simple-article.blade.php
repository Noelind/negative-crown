@props(['image',])

<article class="flex flex-col">
    <a href="#">
        <img class="aspect-square eyelid-fx ease-in-out duration-1500 grayscale hover:grayscale-0 mb-10"
            src="/storage/images/simple-blog-img-0{{$image}}.jpg" alt="" width="350" height="350">
        <h2 class="text-4xl font-medium leading-12 mb-10">Organising my bookshelf for the millionth time</h2>
    </a>
    <div class="flex justify-between">
        <span class="font-semibold text-xl font-color text-gray-600">Published <strong>3 hours ago</strong></span>
        <span class="vertical-line"></span>
        <a href="#" class="font-bold text-xl tracking-widest-plus text-gray-600">crown thoughts</a>
    </div>

</article>

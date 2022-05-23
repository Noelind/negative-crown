@props(['author'])

    <div class="article-bg-image flex flex-col justify-center items-center lg:mt-16"
        style="--article-bg-image: url('/storage/images/bg-article-image.jpg')">
        <h1 id="article-title" class="lg:my-10 text-3xl lg:text-6xl font-bold leading-11 md:leading-13">Organising my bookshelf for the an to megalwsw ligo test keimeno</h1>
        <div id="article-meta" class="flex justify-between">
            <div>
                <address class="lg:text-3xl">By <a class="font-xl" rel="author" href="#">{{ $author }}</a>
                </address>
            </div>
            <div>on <time pubdate datetime="2011-08-28" title="August 28th, 2011">8/28/11</time></div>
        </div>

    </div>

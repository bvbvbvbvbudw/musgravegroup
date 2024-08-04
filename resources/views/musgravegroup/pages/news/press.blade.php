@extends('musgravegroup.base')
@section('body-classes', 'page-template page-template-page-templates page-template-page-mediapack page-template-page-templatespage-mediapack-php page page-id-9740 wp-custom-logo')
@section('content')
    <section class="blog-hero lazyload" style="background-image:url('{{asset('img/bg-contact.webp')}}')">
        <div class="text">
            <h1>Press pack</h1>
        </div>
    </section>
    <article id="post-9740" class="post-9740 page type-page status-publish hentry">
        <div class="container">
            <div class="contact-text-block">
                <p style="text-align: center">Download our press pack for quick access to images available for
                    publication. Alternatively use our media contacts list to request specific, or print quality imagery
                    from our PR agencies.</p>

                <div class="two-column-block">
                    <div class="column">
                        <a href="../wp-content/uploads/2022/02/Musgrave-press-pack-2022.zip"><img
                                data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/Download-the-Musgrave-Group-press-pack-1.jpg?lossy=0&strip=1&webp=1"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                class="lazyload">
                            <noscript><img
                                    src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2019/09/Download-the-Musgrave-Group-press-pack-1.jpg?lossy=0&amp;strip=1&amp;webp=1">
                            </noscript>
                        </a>


                    </div>
                </div>


            </div>


        </div><!-- container -->
    </article><!-- #post-9740 -->
    <x-news/>
    <script>
        $('.toggle').click(function (e) {
            e.preventDefault();

            var $this = $(this);

            if ($this.next().hasClass('show')) {
                $this.next().removeClass('show');
                $this.next().slideUp(350);
            } else {
                $this.parent().parent().find('li .inner').removeClass('show');
                $this.parent().parent().find('li .inner').slideUp(350);
                $this.next().toggleClass('show');
                $this.next().slideToggle(350);
            }
        });
    </script>
@endsection

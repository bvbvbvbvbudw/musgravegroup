@extends('musgravegroup.base')
@section('body-classes', 'page-template page-template-page-templates page-template-page-presscontacts page-template-page-templatespage-presscontacts-php page page-id-9726 wp-custom-logo')
@section('content')
    <section class="blog-hero lazyload" style="background-image:url('{{asset('img/bg-contact.webp ')}}')">
        <div class="text">
            <h1>Press Contacts</h1>
        </div>
    </section>
    <article id="post-9726" class="post-9726 page type-page status-publish hentry">
        <div class="container">
            <div class="contact-text-block">
                <h1 style="text-align: center">Group HQ</h1>
                <p style="text-align: center">Musgrave Group, Musgrave House, Ballycurreen, Airport Road, Cork, T12
                    TN99</p>
                <p style="text-align: center">Email: <a href="mailto:group@musgrave.ie">group@musgrave.ie</a> • Tel:
                    +353 (0) 21 4522100</p>
                <div class="two-column-block">
                </div>
            </div>
            <h2>Press Contacts</h2>

            <ul class="accordion">
                <li>
                    <a class="toggle" href="javascript:void(0);">Drury | Porter Novelli (for CORPORATE press queries
                        only)<span class="icon-arrow"></span></a>
                    <ul class="inner">
                        <li><p><span class="s1">The Kodak Building, </span><span class="s1">41a Blackberry Lane, </span><span
                                    class="s1">Rathmines, Dublin 6, </span><span class="s1">D06 A2H1</span><br/>
                                Tel +353 1 260 5000</p>
                        </li>
                    </ul>
                    <a class="toggle" href="javascript:void(0);">Fleishman Hillard (for SUPERVALU press queries
                        only)<span class="icon-arrow"></span></a>
                    <ul class="inner">
                        <li><p>15 Fitzwilliam Quay, Dublin 4<br/>
                                Tel +353 1 618 8444</p>
                        </li>
                    </ul>
                    <a class="toggle" href="javascript:void(0);">Wilson Hartnell (for CENTRA press queries only)<span
                            class="icon-arrow"></span></a>
                    <ul class="inner">
                        <li><p>6 Ely Place, Dublin 2<br/>
                                Tel +353 1 669 0030</p>
                        </li>
                    </ul>
                    <a class="toggle" href="javascript:void(0);">Musgrave Retail Partners NI (SuperValu, Centra, Mace,
                        XL Stop&amp;Shop)<span class="icon-arrow"></span></a>
                    <ul class="inner">
                        <li><p>Louise Tolerton (for NI press queries only)<br/>
                                Belfast Harbour Estate, 1-19 Dargan Drive, Belfast, BT3 9JG, Northern Ireland<br/>
                                Tel +44 (0) 28 9078 7212</p>
                        </li>
                    </ul>
                    <a class="toggle" href="javascript:void(0);">Musgrave Wholesale Partners (MarketPlace, Foodservices,
                        Daybreak, DayToday)<span class="icon-arrow"></span></a>
                    <ul class="inner">
                        <li><p>Angie Grant, PSG (MarketPlace, Foodservices, Daybreak, DayToday queries only)<br/>
                                Cranford House, Montrose, Donnybrook, Dublin 4<br/>
                                Tel +353 1 634 2522</p>
                        </li>
                    </ul>
                    <a class="toggle" href="javascript:void(0);">Musgrave Espana (Dialsur Cash and Carry, Dialprix,
                        Dicost, SuperValu)<span class="icon-arrow"></span></a>
                    <ul class="inner">
                        <li><p>Musgrave España S.A.U.. Crta. Casa del León, km2, C.P. (03293), Elche, Alicante<br/>
                                Tel +34 966 657 300</p>
                        </li>
                    </ul>
                </li>
            </ul>


        </div><!-- container -->
    </article><!-- #post-9726 -->
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

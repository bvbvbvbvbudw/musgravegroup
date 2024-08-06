@extends('musgravegroup.base')
@section('title', $news->title)
@section('meta')
@endsection
@section('body-classes', 'post-template-default single single-post postid-20035 single-format-standard wp-custom-logo')
@section('content')
    <article id="post-20035"
             class="post-20035 post type-post status-publish format-standard has-post-thumbnail hentry category-news category-sustainability tag-building-sustainable-communities tag-centra tag-seai tag-supervalu tag-sustainability tag-sustainable-energy-authority-of-ireland">
        <div class="colour-block"></div>
        <header class="entry-header">
            <div class="container">
                <h1>{{ $news->title }}</h1>
            </div>
        </header><!-- .entry-header -->

        <div class="entry-content container aos-init aos-animate" data-aos="fade-up">
            <div class="blog-img aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                <img width="300" height="209"
                     src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/09/SuperValu-and-Centra-champion-environmental-change-300x209.jpg?lossy=0&amp;strip=1&amp;webp=1"
                     class="attachment-medium size-medium wp-post-image" alt="" decoding="async" fetchpriority="high"
                     srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/09/SuperValu-and-Centra-champion-environmental-change-300x209.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/09/SuperValu-and-Centra-champion-environmental-change-768x536.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2023/09/SuperValu-and-Centra-champion-environmental-change.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                     sizes="(max-width: 300px) 100vw, 300px"></div>
            <div class="entry-meta aos-init aos-animate" data-aos="fade-in" data-aos-delay="350">
                <span class="posted-on">Posted on <a
                        href="https://www.musgravegroup.com/supervalu-and-centra-champion-environmental-change-in-stores-and-communities-as-sustainability-upgrades-lead-to-significant-energy-savings/"
                        rel="bookmark"><time class="entry-date published" datetime="2023-09-05T16:06:23+01:00">{{ $news->formatted_date }}</time><time
                            class="updated"
                            datetime="2023-09-05T16:15:42+01:00">5th September 2023</time></a></span><span
                    class="byline"> by <span class="author vcard"><a class="url fn n"
                                                                     href="https://www.musgravegroup.com/author/claire/">Claire Marshall</a></span></span>
            </div><!-- .entry-meta -->
            <div data-aos="fade-in" data-aos-delay="350" class="aos-init aos-animate">


                {!! $news->content->content !!}
                @include('musgravegroup.components.share')
            </div>
        </div><!-- .entry-content -->
    </article><!-- #post-20035 -->




    <section class="trending-articles">
        <div class="container">
            <h2>Posts you might be interested in</h2>
            <div class="slide slick-initialized slick-slider"><span
                    class="slide-nav slide-prev slick-arrow slick-initialized slick-slider" style=""><div
                        class="slick-list draggable" style="padding: 0px 50px;"><div class="slick-track"
                                                                                     style="opacity: 1; width: 0px;"></div></div></span>

                <div class="slick-list draggable">
                    <div class="slick-track"
                         style="opacity: 1; width: 7245px; transform: translate3d(-1035px, 0px, 0px);">
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="-3" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image ls-is-cached lazyloaded" alt=""
                                 decoding="async" loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/new-centra-store-for-annaclone-following-750000-investment/"
                                       tabindex="-1">New Centra store for Annaclone following £750,000 investment</a>
                                </h3>
                                <p>Following a major £750,000 investment, the Mace store, petrol forecourt…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="-2" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="225"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyloaded" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-768x576.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/225;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-768x576.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w">
                            <noscript><img width="300" height="225"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-768x576.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/young-enterprise-announces-partnership-with-musgrave-ni-as-new-esg-partner/"
                                       tabindex="-1">Young Enterprise Announces Partnership with Musgrave NI as New ESG
                                        Partner</a></h3>
                                <p>Young Enterprise, Northern Ireland’s leading business education charity, today
                                    announced…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="-1" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="204"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyloaded" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-768x521.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/204;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-768x521.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w">
                            <noscript><img width="300" height="204"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-768x521.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/supervalu-centra-raise-a-record-breaking-223000-for-action-cancer/"
                                       tabindex="-1">SuperValu &amp; Centra raise a record-breaking £223,000 for Action
                                        Cancer</a></h3>
                                <p>SuperValu and Centra stores across Northern Ireland have pulled out…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-current slick-active"
                             data-slick-index="0" aria-hidden="false" style="width: 329px;" tabindex="0">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image ls-is-cached lazyloaded" alt=""
                                 decoding="async" loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-e1717763693575.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-e1717763693575.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-e1717763693575.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/musgrave-northern-ireland-named-jam-card-partner-of-the-year/"
                                       tabindex="0">Musgrave Northern Ireland named JAM Card partner of the year</a>
                                </h3>
                                <p>SuperValu and Centra stores across NI become JAM Card friendly…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-active" data-slick-index="1"
                             aria-hidden="false" style="width: 329px;" tabindex="0">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image ls-is-cached lazyloaded" alt=""
                                 decoding="async" loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-scaled-e1717763513622.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-scaled-e1717763513622.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-scaled-e1717763513622.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/supervalu-expands-high-quality-meals-offering-following-acquisition-of-clean-cut-meals/"
                                       tabindex="0">SuperValu expands high quality meals offering following acquisition
                                        of Clean Cut Meals</a></h3>
                                <p>SuperValu has today announced an expansion of its market-leading convenience…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-active" data-slick-index="2"
                             aria-hidden="false" style="width: 329px;" tabindex="0">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image ls-is-cached lazyloaded" alt=""
                                 decoding="async" loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/supervalu-and-centra-on-track-to-plant-50000-tress-by-2032/"
                                       tabindex="0">SuperValu and Centra on track to plant 50,000 tress by 2032</a></h3>
                                <p>SuperValu and Centra, part of Musgrave NI, have been laying…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide" data-slick-index="3" aria-hidden="true"
                             style="width: 329px;" tabindex="-1">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image ls-is-cached lazyloaded" alt=""
                                 decoding="async" loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/musgrave-marketplace-unveils-e2-5m-upgrade-of-ballymun-food-emporium/"
                                       tabindex="-1">Musgrave MarketPlace unveils €2.5m upgrade of Ballymun Food
                                        Emporium</a></h3>
                                <p>Musgrave MarketPlace, the only 100% Irish-owned national Foodservice, retail,
                                    and…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide" data-slick-index="4" aria-hidden="true"
                             style="width: 329px;" tabindex="-1">

                            <img width="300" height="205"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyloaded" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1024x698.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-768x524.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1536x1047.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-2048x1397.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-scaled-e1713878619296.jpg?lossy=0&amp;strip=1&amp;webp=1 1500w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/205;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1024x698.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-768x524.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1536x1047.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-2048x1397.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-scaled-e1713878619296.jpg?lossy=0&amp;strip=1&amp;webp=1 1500w">
                            <noscript><img width="300" height="205"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1024x698.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-768x524.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1536x1047.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-2048x1397.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-scaled-e1713878619296.jpg?lossy=0&amp;strip=1&amp;webp=1 1500w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3><a href="https://www.musgravegroup.com/musgrave-crowns-store-of-the-year-winners-2/"
                                       tabindex="-1">Musgrave Crowns ‘Store of the Year’ Winners</a></h3>
                                <p>Five local SuperValu, Centra and MACE stores have been awarded…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide" data-slick-index="5" aria-hidden="true"
                             style="width: 329px;" tabindex="-1">

                            <img width="300" height="188"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image ls-is-cached lazyloaded" alt=""
                                 decoding="async" loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-768x482.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/188;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-768x482.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w">
                            <noscript><img width="300" height="188"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-768x482.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/musgrave-marketplace-surpasses-1-5-million-mark-for-meals-donated-to-irish-charities-through-foodcloud/"
                                       tabindex="-1">Musgrave MarketPlace surpasses 1.5 million mark for meals donated
                                        to Irish charities through FoodCloud</a></h3>
                                <p>Musgrave MarketPlace, Ireland’s leading wholesale supplier to foodservice, retail
                                    and…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide" data-slick-index="6" aria-hidden="true"
                             style="width: 329px;" tabindex="-1">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image ls-is-cached lazyloaded" alt=""
                                 decoding="async" loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;"
                                 sizes="(max-width: 300px) 100vw, 300px"
                                 srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/new-centra-store-for-annaclone-following-750000-investment/"
                                       tabindex="-1">New Centra store for Annaclone following £750,000 investment</a>
                                </h3>
                                <p>Following a major £750,000 investment, the Mace store, petrol forecourt…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide" data-slick-index="7" aria-hidden="true"
                             style="width: 329px;" tabindex="-1">

                            <img width="300" height="225"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-768x576.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/225;">
                            <noscript><img width="300" height="225"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-768x576.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/young-enterprise-announces-partnership-with-musgrave-ni-as-new-esg-partner/"
                                       tabindex="-1">Young Enterprise Announces Partnership with Musgrave NI as New ESG
                                        Partner</a></h3>
                                <p>Young Enterprise, Northern Ireland’s leading business education charity, today
                                    announced…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide" data-slick-index="8" aria-hidden="true"
                             style="width: 329px;" tabindex="-1">

                            <img width="300" height="204"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-768x521.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/204;">
                            <noscript><img width="300" height="204"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-768x521.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/supervalu-centra-raise-a-record-breaking-223000-for-action-cancer/"
                                       tabindex="-1">SuperValu &amp; Centra raise a record-breaking £223,000 for Action
                                        Cancer</a></h3>
                                <p>SuperValu and Centra stores across Northern Ireland have pulled out…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="9" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-e1717763693575.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/140324BT1-1-JAM-e1717763693575.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/musgrave-northern-ireland-named-jam-card-partner-of-the-year/"
                                       tabindex="-1">Musgrave Northern Ireland named JAM Card partner of the year</a>
                                </h3>
                                <p>SuperValu and Centra stores across NI become JAM Card friendly…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="10" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-scaled-e1717763513622.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/06/34clean-cut-musgraves-scaled-e1717763513622.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/supervalu-expands-high-quality-meals-offering-following-acquisition-of-clean-cut-meals/"
                                       tabindex="-1">SuperValu expands high quality meals offering following acquisition
                                        of Clean Cut Meals</a></h3>
                                <p>SuperValu has today announced an expansion of its market-leading convenience…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="11" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1024x683.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-1536x1024.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/05/St-Marys-Primary-Brookeborough-Centra-122-2048x1365.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/supervalu-and-centra-on-track-to-plant-50000-tress-by-2032/"
                                       tabindex="-1">SuperValu and Centra on track to plant 50,000 tress by 2032</a>
                                </h3>
                                <p>SuperValu and Centra, part of Musgrave NI, have been laying…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="12" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/L-R-Thomas-Williams-Ballymun-Branch-Manager-Cassie-Stokes-Social-Media-Influencer-Jacqui-Hurley-Sports-Broadcaster-Event-MC-Thomas-Morrison-Head-of-Sales-and-Musgrave-MarketPlace-copy.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/musgrave-marketplace-unveils-e2-5m-upgrade-of-ballymun-food-emporium/"
                                       tabindex="-1">Musgrave MarketPlace unveils €2.5m upgrade of Ballymun Food
                                        Emporium</a></h3>
                                <p>Musgrave MarketPlace, the only 100% Irish-owned national Foodservice, retail,
                                    and…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="13" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="205"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1024x698.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-768x524.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1536x1047.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-2048x1397.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-scaled-e1713878619296.jpg?lossy=0&amp;strip=1&amp;webp=1 1500w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/205;">
                            <noscript><img width="300" height="205"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-300x205.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1024x698.jpg?lossy=0&amp;strip=1&amp;webp=1 1024w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-768x524.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-1536x1047.jpg?lossy=0&amp;strip=1&amp;webp=1 1536w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-2048x1397.jpg?lossy=0&amp;strip=1&amp;webp=1 2048w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-Crowns-‘Store-of-the-Year-Winners-scaled-e1713878619296.jpg?lossy=0&amp;strip=1&amp;webp=1 1500w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3><a href="https://www.musgravegroup.com/musgrave-crowns-store-of-the-year-winners-2/"
                                       tabindex="-1">Musgrave Crowns ‘Store of the Year’ Winners</a></h3>
                                <p>Five local SuperValu, Centra and MACE stores have been awarded…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="14" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="188"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-768x482.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/188;">
                            <noscript><img width="300" height="188"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-300x188.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud-768x482.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Musgrave-MarketPlace-surpasses-1.5-million-mark-for-meals-donated-to-Irish-charities-through-FoodCloud.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/musgrave-marketplace-surpasses-1-5-million-mark-for-meals-donated-to-irish-charities-through-foodcloud/"
                                       tabindex="-1">Musgrave MarketPlace surpasses 1.5 million mark for meals donated
                                        to Irish charities through FoodCloud</a></h3>
                                <p>Musgrave MarketPlace, Ireland’s leading wholesale supplier to foodservice, retail
                                    and…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="15" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="200"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/200;">
                            <noscript><img width="300" height="200"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-300x200.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store-768x512.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/04/Annaclone-Centra-Store.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/new-centra-store-for-annaclone-following-750000-investment/"
                                       tabindex="-1">New Centra store for Annaclone following £750,000 investment</a>
                                </h3>
                                <p>Following a major £750,000 investment, the Mace store, petrol forecourt…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="16" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="225"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-768x576.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/225;">
                            <noscript><img width="300" height="225"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-300x225.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16-768x576.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/03/Launch-of-ESG-partnership-with-Musgrave-and-Young-Enterprise-NI-16.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/young-enterprise-announces-partnership-with-musgrave-ni-as-new-esg-partner/"
                                       tabindex="-1">Young Enterprise Announces Partnership with Musgrave NI as New ESG
                                        Partner</a></h3>
                                <p>Young Enterprise, Northern Ireland’s leading business education charity, today
                                    announced…</p>
                            </div>
                        </div>
                        <div class="block sustainability-color slick-slide slick-cloned" data-slick-index="17" id=""
                             aria-hidden="true" style="width: 329px;" tabindex="-1">

                            <img width="300" height="204"
                                 data-src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1"
                                 class="attachment-medium size-medium wp-post-image lazyload" alt="" decoding="async"
                                 loading="lazy"
                                 data-srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-768x521.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                 data-sizes="(max-width: 300px) 100vw, 300px"
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                 style="--smush-placeholder-width: 300px; --smush-placeholder-aspect-ratio: 300/204;">
                            <noscript><img width="300" height="204"
                                           src="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&strip=1&webp=1"
                                           class="attachment-medium size-medium wp-post-image" alt="" decoding="async"
                                           loading="lazy"
                                           srcset="https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-300x204.jpg?lossy=0&amp;strip=1&amp;webp=1 300w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB-768x521.jpg?lossy=0&amp;strip=1&amp;webp=1 768w, https://b2833840.smushcdn.com/2833840/wp-content/uploads/2024/02/Action-Cancer-Musgrave-NI-total-200224BT2-13FEB.jpg?lossy=0&amp;strip=1&amp;webp=1 1000w"
                                           sizes="(max-width: 300px) 100vw, 300px"/></noscript>
                            <div class="colour-block"></div>
                            <div class="text">
                                <h3>
                                    <a href="https://www.musgravegroup.com/supervalu-centra-raise-a-record-breaking-223000-for-action-cancer/"
                                       tabindex="-1">SuperValu &amp; Centra raise a record-breaking £223,000 for Action
                                        Cancer</a></h3>
                                <p>SuperValu and Centra stores across Northern Ireland have pulled out…</p>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="slide-nav slide-next slick-arrow slick-initialized slick-slider" style=""><div
                        class="slick-list draggable" style="padding: 0px 50px;"><div class="slick-track"
                                                                                     style="opacity: 1; width: 0px;"></div></div></span>
            </div>
        </div>
    </section>
@endsection

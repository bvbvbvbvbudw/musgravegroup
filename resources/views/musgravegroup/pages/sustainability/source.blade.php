@extends('musgravegroup.base')
@section('body-classes', 'page-template page-template-page-templates page-template-page-sustainability-page-22 page-template-page-templatespage-sustainability-page-22-php page page-id-14971 page-child parent-pageid-14935 wp-custom-logo')
@section('content')

    <section class="blog-hero lazyload" style="background-image:url('{{asset('img/sus/search.webp')}}')">
        <div class="text">
            <h1>Sourcing for good</h1>
        </div>
    </section>

    <article id="post-14971" class="post-14971 page type-page status-publish hentry">
        <div class="container">
            <div class="sustainability-text-block" data-aos="fade-up">
                <h2><span class="TextRun MacChromeBold SCXW154652066 BCX0" lang="EN-US" xml:lang="EN-US"
                          data-contrast="auto"><span
                            class="NormalTextRun SCXW154652066 BCX0">Sourcing for good</span></span><span
                        class="EOP SCXW154652066 BCX0"
                        data-ccp-props="{&quot;201341983&quot;:0,&quot;335559739&quot;:160,&quot;335559740&quot;:259}"> </span>
                </h2>
                <p>To achieve our net zero ambition, we know we need to work across the full value chain and collaborate
                    with suppliers, producers and partners to deliver an unprecedented reduction in emissions. We are
                    also aware how vital supplier collaboration is to achieve our targets on packaging, biodiversity,
                    circular economy and creating vibrant communities.</p>
                <p>We are committed to leading the Irish food industry through the challenges we collectively face, from
                    climate change and plastic packaging to ethical trade. Working with thousands of suppliers, food
                    producers and retailers across the island of Ireland gives us the unique opportunity to multiply our
                    impact by enabling wider change within the industry and beyond.</p>
                <p>As one of Europe’s leading family businesses we have built long lasting relationships with our
                    suppliers through the course of our history, and we remain committed to promoting quality Irish food
                    and drink which shoppers trust and enjoy.</p>
                <p>Our strategy is to partner with suppliers to drive meaningful change and positively impact our supply
                    chains with sustainability projects.</p>
                <p>All suppliers part of the Musgrave Supplier Engagement programme will be asked to develop a climate
                    strategy and submit targets to SBTi by 2025. Emissions reduction targets set by Musgrave and our
                    suppliers are important steps in accelerating improvements and reaching our aggressive Net Zero
                    targets.</p>
            </div>
        </div>
    </article>

    <div class="container">
        <div class="slide-nav" data-aos="fade-in">
            <div class="nav-item">
                <div>
                    Caring for the planet
                </div>
            </div>
            <div class="nav-item">
                <div>
                    Creating vibrant communities
                </div>
            </div>
        </div>


        @include('musgravegroup.pages.sustainability.components.slider')
    </div>
    <x-latest-news-sustainability/>
@endsection

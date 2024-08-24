@extends('musgravegroup.base')
@section('title', 'Become Supplier')
@section('body-classes', 'vacancies-template-default application-form-template single single-vacancies wp-custom-logo')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/alerts.css')}}">
@endsection

@section('content')
    <article id="post-9205"
             class="post-9205 vacancies type-vacancies status-publish hentry category-careers sector-retail-sales">
        <div class="colour-block"></div>
        <header class="entry-header">
            <div class="container" style="margin-top: 60px;">
                <h1>Become Supplier</h1>
            </div>
        </header>

        <div class="entry-content container" data-aos="fade-up" data-aos-once="true">
            {{--            @if(session('status'))--}}
            {{--                <div id="statusAlert" class="alert alert-{{ session('status') === 'Success' ? 'success' : 'danger' }} alert-dismissible fade show" role="alert">--}}
            {{--                    {{ session('status') }}--}}
            {{--                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
            {{--                </div>--}}
            {{--            @endif--}}
            {{--                <script>--}}
            {{--                    document.addEventListener('DOMContentLoaded', function() {--}}
            {{--                        setTimeout(function() {--}}
            {{--                            let alertElement = document.getElementById('statusAlert');--}}
            {{--                            if (alertElement) {--}}
            {{--                                alertElement.classList.remove('show');--}}
            {{--                                alertElement.classList.add('fade');--}}
            {{--                                setTimeout(function() {--}}
            {{--                                    alertElement.remove();--}}
            {{--                                }, 500); // Time to complete the fade-out transition--}}
            {{--                            }--}}
            {{--                        }, 5000); // 5 seconds delay before auto-dismissing the alert--}}
            {{--                    });--}}
            {{--                </script>--}}

            <p></p>
            <div id="emailalerts">
                <style>
                    #menu-champions li.whitebg a {
                        color: #000;
                    }

                    #menu-champions li.whitebg a:hover {
                        color: #666;
                    }
                </style>
                <br clear="all">
                <div id="mainContainer">
                    <div id="application_innerContainer">
                        <form action="{{ route('page.contact.become.send') }}" name="applyForm" id="applyForm"
                              method="post" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="formDiv" style="">
                                <div>
                                    <p class="formDiv"></p>
                                    <h2>Becoming a supplier</h2>
                                    <p>
                                        We’re always looking for new producers and suppliers, both medium and small.

                                        For food, we are interested in finding innovative products that are truly
                                        unique, have an interesting heritage and, most importantly taste great.

                                        For clothing and general merchandise, we are always on the look out for new
                                        suppliers who can help us deliver our vision of high street style and quality,
                                        at supermarket prices.

                                        It’s easy to apply – all you need to do is complete the application form below.
                                    </p>
                                    <p>Please enter all your details and click the submit button.</p>
                                    <p>Fields marked with <span class="errorRed">*</span> must be completed.</p>
                                </div>
                            </div>
                            <br clear="all">
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idm1867504" id="">
                                    <legend name="idm1867504">Becoming a supplier</legend>
                                    <div style="clear:both;" id="divtitle">
                                        <label style="" for="brand_name">
                                            What is your brand name?<span id="mandmarker_title"
                                                                          class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="brand_name" id="brand_name" class="" style=""
                                               value="" placeholder="">
                                        <div id="titleErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="titleErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divfirstName">
                                        <label style="" for="company_name">
                                            Company name?<span id="mandmarker_firstName" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="company_name" id="company_name" class=""
                                               style="" value="" placeholder="">
                                        <div id="firstNameErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="firstNameErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divAddress">
                                        <label style="" for="business_address">
                                            Registered Business address<span id="mandmarker_firstName" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="business_address" id="business_address"
                                               class="" style="" value="" placeholder="">
                                        <div id="firstNameErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="firstNameErrorLabelInline" class="errorLabelDiv" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divmobileTelephone">
                                        <label style="" for="mobileTelephone">
                                            Your phone number<span id="mandmarker_mobileTelephone"
                                                                   class="errorRed">*</span>
                                        </label>
                                        <input oninput="this.value = this.value.replace(/[^0-9]/g, '')" required
                                               type="text" name="mobileTelephone" id="mobileTelephone" class=""
                                               style="" value="" placeholder="">
                                        <div id="mobileTelephoneErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="mobileTelephoneErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divName">
                                        <label style="" for="name">
                                            Your name<span id="mandmarker_name" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="name" id="name" class="" style="" value=""
                                               placeholder="">
                                        <div id="nameErrorLabel" class="errorLabelDiv" style="display:none;"></div>
                                        <div id="nameErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divapplicantEmail">
                                        <label style="" for="applicantEmail">
                                            Email<span id="mandmarker_applicantEmail" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="applicantEmail" id="applicantEmail" class=""
                                               style="" value="" placeholder="">
                                        <div id="applicantEmailErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="applicantEmailErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divformData[33]">
                                        <label style="" for="formData[33]">
                                            Have you contacted Sainsbury's before with this product?
                                            <span id="mandmarker_formData[33]" class="errorRed">*</span>
                                        </label>
                                        <div style="width:auto;" class="radioDiv">
                                            <input type="radio" name="formData[33]" class="radio"
                                                   style="margin-left:3.5em;margin-right:0.5em;display:inline;"
                                                   value="Yes"
                                                   alt="Have you contacted Sainsbury's before with this product? - Yes"
                                                   id="formData[33]_Yes">
                                            <label for="formData[33]_Yes" class=" radioLabel">
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span>
                                                <span class="radio_display_text">Yes</span>
                                            </label>
                                            <input type="radio" name="formData[33]" class="radio"
                                                   style="margin-left:3.5em;margin-right:0.5em;display:inline;" checked
                                                   value="No"
                                                   alt="Have you contacted Sainsbury's before with this product? - No"
                                                   id="formData[33]_No"><label
                                                for="formData[33]_No" class=" radioLabel">
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span>
                                                <span class="radio_display_text">No</span>
                                            </label>
                                        </div>
                                        <div id="formData[33]ErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="formData[33]ErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;">
                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divformData[7495]">
                                        <label style="" for="formData[7495]">
                                            Tell us about your product:
                                        </label>
                                        <textarea required name="formData[7495]" id="formData[7495]"></textarea>
                                        <div id="formData[7495]ErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="formData[7495]ErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;">

                                        </div>
                                    </div>
                                    <div style="clear:both;" id="divapplicantproductname">
                                        <label style="" for="product_name">
                                            Product name<span id="mandmarker_applicantEmail" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="product_name" id="product_name" class=""
                                               style="" value="" placeholder="">
                                        <div id="applicantEmailErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="applicantEmailErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divapplicanttype_of_product">
                                        <label style="" for="type_of_product">
                                            Type of product<span id="mandmarker_applicantEmail"
                                                                 class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="type_of_product" id="type_of_product" class=""
                                               style="" value="" placeholder="">
                                        <div id="applicantEmailErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="applicantEmailErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divformData[7496]">
                                        <label style="" for="description_few">
                                            Describe your business in a few sentences:
                                        </label>
                                        <textarea required name="description_few" id="description_few"></textarea>
                                        <div id="formData[7496]ErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="formData[7496]ErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divformData[1312]">
                                        <label for="formData[1312]">
                                            Payment terms offered:
                                            <span id="mandmarker_formData[1312]" class="errorRed">*</span>
                                        </label>
                                        <div style="width:auto;" class="radioDiv">
                                            <input checked type="radio" name="formData[1312]" class="radio"
                                                   style="margin-left:3.5em;margin-right:0.5em;display:inline;"
                                                   value="prepayment" alt="Payment terms offered - Prepayment only"
                                                   id="formData[1312]_prepayment">
                                            <label for="formData[1312]_prepayment" class="radioLabel">
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span>
                                                <span class="radio_display_text">Prepayment only</span>
                                            </label>

                                            <input type="radio" name="formData[1312]" class="radio"
                                                   style="margin-left:3.5em;margin-right:0.5em;display:inline;"
                                                   value="net" alt="Payment terms offered - NET Payment"
                                                   id="formData[1312]_net">
                                            <label for="formData[1312]_net" class="radioLabel">
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span>
                                                <span class="radio_display_text">NET payment</span>
                                            </label>

                                            <input type="radio" name="formData[1312]" class="radio"
                                                   style="margin-left:3.5em;margin-right:0.5em;display:inline;"
                                                   value="credit" alt="Payment terms offered - Credit insurance"
                                                   id="formData[1312]_credit">
                                            <label for="formData[1312]_credit" class="radioLabel">
                                                <span class="outer">
                                                    <span class="inner"></span>
                                                </span>
                                                <span class="radio_display_text">Credit insurance</span>
                                            </label>
                                        </div>
                                        <div id="formData[1312]ErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="formData[1312]ErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>

                                    <div style="clear:both;" id="divapplicantmanufacturing_your_product">
                                        <label style="" for="manufacturing_your_product">
                                            Manufacturing your product<span id="mandmarker_manufacturing_your_product"
                                                                            class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="manufacturing_your_product"
                                               id="manufacturing_your_product" class="" style="" value=""
                                               placeholder="">
                                        <div id="manufacturing_your_productErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="manufacturing_your_productErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divapplicantproduct_made">
                                        <label style="" for="product_made">
                                            Where is your product made / manufactured<span id="mandmarker_product_made"
                                                                                           class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="product_made" id="product_made" class=""
                                               style="" value="" placeholder="">
                                        <div id="product_madeErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="product_madeErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divapplicant_market_place">
                                        <label style="" for="market_place">
                                            The market place<span id="mandmarker_market_place" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="market_place" id="market_place" class=""
                                               style="" value="" placeholder="">
                                        <div id="market_placeErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="market_placeErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divapplicant_products_similar">
                                        <label style="" for="type_of_product">
                                            Tell us about any other products similar to yours currently on the market
                                            <span id="mandmarker_products_similar" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="products_similar" id="products_similar"
                                               class="" style="" value="" placeholder="">
                                        <div id="products_similarErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="products_similarErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divapplicantproduct_fit">
                                        <label style="" for="product_fit">
                                            Where in our store would your product fit?<span
                                                id="mandmarker_applicantEmail" class="errorRed">*</span>
                                        </label>
                                        <input required type="text" name="product_fit" id="product_fit" class=""
                                               style="" value="" placeholder="">
                                        <div id="applicantEmailErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="applicantEmailErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                    <div style="clear:both;" id="divapplicant_additional_comment">
                                        <label style="" for="additional_comment">
                                            Additional comments<span id="mandmarker_additional_comment"
                                                                     class="errorRed">*</span>
                                        </label>
                                        <textarea name="additional_comment" id="additional_comment"></textarea>
                                        <div id="additional_commentErrorLabel" class="errorLabelDiv"
                                             style="display:none;"></div>
                                        <div id="additional_commentErrorLabelInline" class="errorLabelDiv"
                                             style="display:none;"></div>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="" class="sectionDiv formDiv" style="" sectiondiv="1">
                                <fieldset class="" name="idm2474864" id="">
                                    <div style="clear:both;" id="divformAction">
                                        <label class="submitterLabel" style="" for="formAction">
                                            Save
                                        </label>
                                        <input type="submit" name="formAction" id="formAction" class="submitterInput"
                                               style="" value="Save">
                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="related-content">
                <div class="related-column" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom"
                         style="background-image: url(https://www.musgravegroup.com/wp-content/uploads/2019/08/the-green-kitchen.jpg);">
                    </div>
                    <a href="{{ route('page.careers.current') }}"></a>
                    <h2><a href="{{ route('page.careers.current') }}">All Jobs</a></h2>
                </div>
                <div class="related-column" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom"
                         style="background-image: url(https://www.musgravegroup.com/wp-content/uploads/2019/08/our-brands-1.jpg);">
                    </div>
                    <a href="{{ route('page.brand') }}"></a>
                    <h2><a href="{{ route('page.brand') }}">Our brands</a></h2>
                </div>
                <div class="related-column" data-aos="fade-up" data-aos-once="true">
                    <div class="background-zoom"
                         style="background-image: url(https://www.musgravegroup.com/wp-content/uploads/2019/08/food-innovation.jpg);">
                    </div>
                    <a href="{{ route('page.news') }}"></a>
                    <h2><a href="{{ route('page.news') }}">Latest news</a></h2>
                </div>
            </div>
        </div>
    </article>
@endsection
